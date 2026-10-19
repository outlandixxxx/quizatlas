<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinTechBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'fintech')->firstOrFail();

        $quizSettings = [
            ['duration' => 22, 'passing_score' => 55],
            ['duration' => 24, 'passing_score' => 58],
            ['duration' => 25, 'passing_score' => 58],
            ['duration' => 23, 'passing_score' => 58],
            ['duration' => 24, 'passing_score' => 58],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 60],
            ['duration' => 27, 'passing_score' => 62],
            ['duration' => 24, 'passing_score' => 58],
            ['duration' => 28, 'passing_score' => 63],
        ];

        $quizzes = [
            [
                'title' => 'Paiements numériques et nouveaux usages',
                'description' => 'Découvrir le fonctionnement des paiements numériques et leurs principaux avantages et risques dans des situations concrètes.',
                'questions' => [
                    [
                        'question' => 'Une petite boutique commence à accepter les paiements par QR code. Quel changement est le plus directement apporté par cette solution ?',
                        'explanation' => 'Le QR code fournit un canal de paiement numérique. Le client peut initier une transaction avec son application compatible, mais les vérifications, frais éventuels et conditions du service restent applicables.',
                        'choices' => [
                            ['choice_text' => 'Le commerçant reçoit immédiatement les fonds sur son compte, sans délai ni commission de traitement', 'is_correct' => false],
                            ['choice_text' => 'Le paiement est converti en crédit à la consommation remboursable en plusieurs échéances', 'is_correct' => false],
                            ['choice_text' => 'Le client peut payer sans remettre d\'espèces, via un canal numérique compatible', 'is_correct' => true],
                            ['choice_text' => 'Le prix des produits baisse en proportion des frais de caisse que la boutique économise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les paiements sans contact sont-ils souvent appréciés dans les commerces à fort volume de transactions ?',
                        'explanation' => 'Pour une transaction courante, le sans-contact peut accélérer le passage en caisse. Il ne supprime pas pour autant les mécanismes de sécurité ni les éventuels refus de transaction.',
                        'choices' => [
                            ['choice_text' => 'Ils réduisent le temps nécessaire pour effectuer des paiements simples', 'is_correct' => true],
                            ['choice_text' => 'Ils évitent au commerçant de payer des commissions à son prestataire de paiement', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent au client de différer le débit de ses achats sur plusieurs mois', 'is_correct' => false],
                            ['choice_text' => 'Ils dispensent le commerçant de déclarer ces ventes dans sa comptabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client reçoit une notification lui indiquant qu\'un achat en ligne a été confirmé par sa banque. Quel est le rôle principal de cette notification ?',
                        'explanation' => 'Une notification transactionnelle sert surtout à informer. Elle ne modifie pas le paiement et ne remplace pas les autres documents ou contrôles de la banque.',
                        'choices' => [
                            ['choice_text' => 'Servir de relevé officiel des opérations en remplacement des documents périodiques de la banque', 'is_correct' => false],
                            ['choice_text' => 'Informer rapidement le client qu\'un événement lié à la transaction a été enregistré', 'is_correct' => true],
                            ['choice_text' => 'Annuler le paiement dès que le client et le commerçant ne sont pas d\'accord', 'is_correct' => false],
                            ['choice_text' => 'Autoriser à l\'avance les futurs achats du client sur le même site marchand', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application permet à un utilisateur de regrouper plusieurs moyens de paiement dans une seule interface. Quelle proposition décrit le mieux cette évolution ?',
                        'explanation' => 'Une interface de portefeuille ou d\'agrégation peut simplifier l\'usage de plusieurs instruments. Les prestataires sous-jacents et leurs règles continuent toutefois d\'exister.',
                        'choices' => [
                            ['choice_text' => 'L\'application agit comme un nouvel émetteur qui remplace les cartes et comptes de l\'utilisateur par un instrument unique', 'is_correct' => false],
                            ['choice_text' => 'L\'application agit comme un système de compensation interbancaire qui règle les opérations entre les banques', 'is_correct' => false],
                            ['choice_text' => 'L\'application agit comme un conseiller financier qui sélectionne le meilleur placement pour chaque paiement', 'is_correct' => false],
                            ['choice_text' => 'L\'application agit comme une interface facilitant l\'accès et l\'utilisation de plusieurs instruments de paiement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu\'un paiement numérique est refusé alors que le client pense avoir suffisamment de fonds, quelle vérification est pertinente avant de conclure à une erreur du commerçant ?',
                        'explanation' => 'Un refus peut venir du solde réellement disponible, d\'une limite, d\'un paramètre de sécurité ou d\'une autorisation. Il faut examiner ces éléments avant d\'attribuer l\'erreur.',
                        'choices' => [
                            ['choice_text' => 'Vérifier le solde disponible, les limites de paiement et l\'état de l\'autorisation', 'is_correct' => true],
                            ['choice_text' => 'Contrôler le chiffre d\'affaires mensuel du commerçant et le niveau de ses stocks', 'is_correct' => false],
                            ['choice_text' => 'Comparer le taux d\'intérêt du compte du client avec celui d\'autres banques', 'is_correct' => false],
                            ['choice_text' => 'Demander au commerçant de refaire le paiement jusqu\'à son acceptation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement important lorsqu\'une personne enregistre sa carte sur de nombreux services en ligne ?',
                        'explanation' => 'Chaque service supplémentaire peut constituer un point d\'exposition. La compromission d\'un prestataire peut donc avoir des conséquences sur les données ou moyens de paiement associés.',
                        'choices' => [
                            ['choice_text' => 'La multiplication des points d\'exposition en cas de compromission d\'un service', 'is_correct' => true],
                            ['choice_text' => 'La perte du droit de contester une opération non autorisée auprès de sa banque', 'is_correct' => false],
                            ['choice_text' => 'Le blocage définitif de la carte par la banque après un certain nombre de paiements en ligne', 'is_correct' => false],
                            ['choice_text' => 'Une facturation de frais de tenue de compte pour chaque service enregistré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fintech propose des alertes instantanées lorsqu\'une dépense dépasse 500 €. Quelle utilité est la plus directe pour l\'utilisateur ?',
                        'explanation' => 'Les alertes améliorent la visibilité sur les mouvements. Elles peuvent aider à détecter une anomalie rapidement, sans garantir qu\'une transaction soit légitime.',
                        'choices' => [
                            ['choice_text' => 'Bloquer la dépense dépassant le seuil, sans que l\'utilisateur ait à intervenir ni à confirmer', 'is_correct' => false],
                            ['choice_text' => 'Négocier à la place du client une baisse des frais auprès des commerçants', 'is_correct' => false],
                            ['choice_text' => 'Repérer plus rapidement certaines dépenses inhabituelles ou importantes', 'is_correct' => true],
                            ['choice_text' => 'Convertir les dépenses importantes en épargne placée sur un compte rémunéré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un commerçant compare un terminal de paiement traditionnel avec une solution mobile. Quel élément financier doit-il examiner en priorité, en plus de la facilité d\'utilisation ?',
                        'explanation' => 'Le coût réel d\'une solution de paiement dépend notamment des frais fixes, commissions par transaction et autres conditions commerciales. L\'apparence du matériel n\'est pas un critère financier essentiel.',
                        'choices' => [
                            ['choice_text' => 'Le cours de Bourse du fabricant du terminal sur les douze derniers mois', 'is_correct' => false],
                            ['choice_text' => 'Le taux de croissance des paiements numériques dans l\'ensemble du pays', 'is_correct' => false],
                            ['choice_text' => 'La puissance de calcul du processeur installé dans l\'appareil de paiement', 'is_correct' => false],
                            ['choice_text' => 'Les frais, le modèle de commission et les conditions contractuelles', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fintech de paiement doit-elle accorder une attention particulière à la disponibilité de son service ?',
                        'explanation' => 'Dans les paiements, la continuité du service est essentielle. Une indisponibilité peut bloquer des achats, des transferts ou des encaissements et dégrader la confiance des utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Une panne peut empêcher des clients et des commerçants d\'effectuer des transactions', 'is_correct' => true],
                            ['choice_text' => 'Une panne entraîne un remboursement obligatoire des commissions payées sur l\'année entière', 'is_correct' => false],
                            ['choice_text' => 'Une panne fait basculer les comptes des clients vers une autre fintech du marché', 'is_correct' => false],
                            ['choice_text' => 'Une panne modifie le taux de change appliqué aux paiements réalisés à l\'étranger', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application permet à un utilisateur de voir immédiatement le montant payé après un achat. Quel bénéfice comportemental simple peut en découler ?',
                        'explanation' => 'Un suivi quasi instantané peut aider l\'utilisateur à mieux observer ses dépenses. Il ne remplace pas pour autant une discipline budgétaire.',
                        'choices' => [
                            ['choice_text' => 'Une réduction des prix pratiqués par les commerçants lors des achats suivants du même client', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du plafond de paiement accordée par la banque à chaque achat', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des frais de tenue de compte proportionnelle au nombre d\'achats', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure visibilité sur les dépenses et un suivi plus facile du budget', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Open Banking et API financières',
                'description' => 'Comprendre comment l\'Open Banking et les API permettent de connecter des services financiers.',
                'questions' => [
                    [
                        'question' => 'Une application budgétaire demande à un client l\'autorisation de lire ses transactions bancaires. Quelle technologie est au cœur de ce type d\'intégration ?',
                        'explanation' => 'Une API permet à différents systèmes logiciels de communiquer selon des règles définies. Dans l\'Open Banking, elle peut servir à accéder à certaines données après autorisation et selon le cadre applicable.',
                        'choices' => [
                            ['choice_text' => 'Une API permettant à des systèmes autorisés d\'échanger des données', 'is_correct' => true],
                            ['choice_text' => 'Un système de compensation interbancaire qui règle les soldes entre les établissements', 'is_correct' => false],
                            ['choice_text' => 'Un registre distribué permettant de valider des opérations sans intermédiaire', 'is_correct' => false],
                            ['choice_text' => 'Un terminal de paiement électronique connecté au réseau de cartes bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le consentement de l\'utilisateur est-il important dans un service d\'agrégation financière ?',
                        'explanation' => 'Le consentement encadre l\'accès aux données et permet à l\'utilisateur de savoir qu\'un service tiers y accède. Il ne garantit pas à lui seul l\'exactitude absolue de toutes les données.',
                        'choices' => [
                            ['choice_text' => 'Parce que le consentement transfère à la fintech la propriété des comptes du client', 'is_correct' => false],
                            ['choice_text' => 'Parce que le consentement fixe les frais facturés par la banque pour le compte', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'accès aux données financières doit être lié à une autorisation appropriée', 'is_correct' => true],
                            ['choice_text' => 'Parce que le consentement dispense la fintech de ses obligations de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fintech utilise une API bancaire pour récupérer automatiquement des soldes. Que gagne-t-elle principalement par rapport à une saisie manuelle ?',
                        'explanation' => 'L\'API permet d\'automatiser l\'échange d\'informations, ce qui peut réduire les saisies manuelles et améliorer la fréquence des mises à jour.',
                        'choices' => [
                            ['choice_text' => 'Une récupération plus automatisée et plus rapide des informations disponibles', 'is_correct' => true],
                            ['choice_text' => 'Une réduction des frais bancaires facturés au client pour la tenue de compte', 'is_correct' => false],
                            ['choice_text' => 'Un accès élargi à des données que le client n\'a pas expressément autorisées', 'is_correct' => false],
                            ['choice_text' => 'Une prise en charge du risque de fraude par la banque, pas la fintech', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux applications utilisent une API avec des formats de données clairement documentés. Quel avantage en résulte pour les équipes techniques ?',
                        'explanation' => 'Une API bien documentée facilite l\'intégration et la maintenance. Elle ne supprime pas toutes les erreurs ni les besoins de supervision.',
                        'choices' => [
                            ['choice_text' => 'Les données échangées sont chiffrées sans que l\'équipe ait à configurer la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Les coûts de développement deviennent nuls une fois la documentation publiée', 'is_correct' => false],
                            ['choice_text' => 'Les deux applications fusionnent leurs bases de données clients en une seule', 'is_correct' => false],
                            ['choice_text' => 'L\'intégration est plus prévisible et plus simple à maintenir', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un client retire son autorisation d\'accès aux données dans une application financière. Quelle conséquence est la plus logique ?',
                        'explanation' => 'Le retrait du consentement doit limiter ou arrêter l\'accès futur aux données concernées selon les mécanismes et obligations applicables. Il ne signifie pas la suppression automatique de l\'historique bancaire.',
                        'choices' => [
                            ['choice_text' => 'L\'application ne devrait plus pouvoir utiliser les données concernées au-delà de ce que le cadre autorise', 'is_correct' => true],
                            ['choice_text' => 'L\'application peut poursuivre la lecture des comptes jusqu\'à la clôture de la relation bancaire', 'is_correct' => false],
                            ['choice_text' => 'L\'application doit rembourser au client les frais bancaires payés depuis l\'ouverture du compte', 'is_correct' => false],
                            ['choice_text' => 'L\'application devient responsable de la gestion des comptes à la place de la banque du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît si une fintech dépend entièrement d\'une API externe pour une fonction critique et que cette API devient indisponible ?',
                        'explanation' => 'Une dépendance technique crée un risque opérationnel et de tiers. Une panne du service amont peut perturber directement l\'expérience du client.',
                        'choices' => [
                            ['choice_text' => 'Les clients de la fintech voient leurs soldes bancaires réellement diminuer', 'is_correct' => false],
                            ['choice_text' => 'La banque émettrice des comptes perd la propriété des données de ses clients', 'is_correct' => false],
                            ['choice_text' => 'Les données déjà collectées par la fintech sont effacées chez l\'utilisateur final', 'is_correct' => false],
                            ['choice_text' => 'Le service fintech peut lui-même devenir indisponible ou dégradé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque ouvre certaines interfaces à des partenaires autorisés. Pourquoi la gouvernance des accès est-elle importante ?',
                        'explanation' => 'Les interfaces financières peuvent exposer des données ou opérations sensibles. Les droits, authentifications, journaux et contrôles doivent donc être gérés précisément.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il faut décider quel partenaire bénéficie des commissions les plus avantageuses', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il faut contrôler qui peut accéder à quelles données ou fonctions et dans quelles conditions', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'ouverture des interfaces impose à la banque de publier les soldes de ses clients', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gouvernance sert surtout à accélérer le développement des nouvelles interfaces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise souhaite intégrer un service de vérification de compte via API. Quel coût doit-elle anticiper au-delà du prix affiché par le fournisseur ?',
                        'explanation' => 'Une intégration financière entraîne souvent des coûts techniques et opérationnels : développement, tests, surveillance, sécurité, évolutions et gestion des incidents.',
                        'choices' => [
                            ['choice_text' => 'Les dividendes versés par le fournisseur à ses propres actionnaires chaque année', 'is_correct' => false],
                            ['choice_text' => 'Les coûts d\'intégration, de maintenance, de sécurité et de suivi du service', 'is_correct' => true],
                            ['choice_text' => 'Le remboursement du capital emprunté par le fournisseur pour développer son API', 'is_correct' => false],
                            ['choice_text' => 'Les frais de marketing engagés par le fournisseur pour attirer de nouveaux clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un agrégateur affiche les comptes d\'un utilisateur provenant de plusieurs banques. Quel est le principal intérêt du service ?',
                        'explanation' => 'L\'agrégation consolide les informations autorisées de plusieurs comptes dans une seule interface. Les contrats bancaires sous-jacents restent en place.',
                        'choices' => [
                            ['choice_text' => 'Transférer les fonds de l\'utilisateur vers la banque au meilleur taux d\'intérêt', 'is_correct' => false],
                            ['choice_text' => 'Regrouper les comptes de plusieurs banques en un seul compte détenu par l\'agrégateur', 'is_correct' => false],
                            ['choice_text' => 'Offrir une vue consolidée de plusieurs relations financières dans une même interface', 'is_correct' => true],
                            ['choice_text' => 'Évaluer la solvabilité de l\'utilisateur pour le compte de chacune de ses banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API renvoie une réponse vide pour certains comptes alors que les autres fonctionnent. Quelle première attitude technique est raisonnable ?',
                        'explanation' => 'Une réponse vide peut avoir plusieurs causes. Une démarche de diagnostic commence par les permissions, les journaux, la documentation et la disponibilité réelle des données.',
                        'choices' => [
                            ['choice_text' => 'Signaler immédiatement une faille de sécurité au régulateur bancaire avant d\'analyser les journaux', 'is_correct' => false],
                            ['choice_text' => 'Demander aux clients concernés de saisir manuellement leurs soldes dans l\'application', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les permissions, les données disponibles, les erreurs de l\'API et les cas particuliers avant de conclure', 'is_correct' => true],
                            ['choice_text' => 'Conclure que les comptes concernés sont fermés et les retirer de la liste de l\'application', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Blockchain, registres distribués et actifs numériques',
                'description' => 'Aborder les concepts de blockchain et de registres distribués avec des exemples simples et sans confusion entre les usages.',
                'questions' => [
                    [
                        'question' => 'Quel est le principe général d\'un registre distribué ?',
                        'explanation' => 'Un registre distribué repose sur plusieurs participants et un mécanisme de synchronisation ou de validation. Le niveau exact de décentralisation dépend du système concerné.',
                        'choices' => [
                            ['choice_text' => 'Plusieurs participants conservent ou valident des copies cohérentes d\'un registre selon des règles communes', 'is_correct' => true],
                            ['choice_text' => 'Un organisme central détient l\'unique version du registre et les participants se contentent de la consulter', 'is_correct' => false],
                            ['choice_text' => 'Chaque participant tient un registre indépendant sans chercher à le rendre cohérent avec les autres', 'is_correct' => false],
                            ['choice_text' => 'Les participants échangent des fichiers par e-mail et un tiers de confiance les rapproche chaque mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une blockchain peut-elle rendre la modification rétroactive de certaines données difficile ?',
                        'explanation' => 'Les mécanismes cryptographiques et la structure en chaîne rendent certaines modifications rétroactives difficiles à effectuer sans laisser de traces ou sans contrôler une partie importante du système.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque bloc n\'est stocké que sur une seule machine protégée par un mot de passe très robuste', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque participant doit obtenir l\'accord d\'une autorité centrale avant toute lecture ou écriture du registre', 'is_correct' => false],
                            ['choice_text' => 'Parce que les blocs sont liés cryptographiquement et qu\'une modification doit rester cohérente avec l\'historique', 'is_correct' => true],
                            ['choice_text' => 'Parce que les transactions sont supprimées du registre dès qu\'elles sont validées par le réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise utilise une blockchain privée pour partager des informations entre plusieurs partenaires connus. Est-il correct de dire qu\'une blockchain doit forcément être totalement publique ?',
                        'explanation' => 'Les architectures de registre distribué peuvent être publiques, privées ou hybrides selon leur gouvernance et leurs objectifs.',
                        'choices' => [
                            ['choice_text' => 'Oui, car sans accès public aucun participant ne pourrait valider les transactions du réseau', 'is_correct' => false],
                            ['choice_text' => 'Non, il existe aussi des réseaux avec un accès restreint aux participants autorisés', 'is_correct' => true],
                            ['choice_text' => 'Non, mais un réseau à accès restreint ne peut pas recourir à la cryptographie', 'is_correct' => false],
                            ['choice_text' => 'Non, mais un réseau à accès restreint doit être administré par une banque centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème une blockchain peut-elle chercher à réduire dans une chaîne de transactions entre plusieurs acteurs ?',
                        'explanation' => 'Un registre partagé peut réduire certains travaux de rapprochement entre parties. Il ne supprime ni les coûts, ni les contraintes juridiques, ni les risques de marché.',
                        'choices' => [
                            ['choice_text' => 'Le risque de variation du prix des actifs échangés entre les acteurs de la chaîne', 'is_correct' => false],
                            ['choice_text' => 'Les obligations juridiques liées à la conclusion des contrats entre les parties de la chaîne', 'is_correct' => false],
                            ['choice_text' => 'Les écarts de change entre les monnaies utilisées par les différents acteurs', 'is_correct' => false],
                            ['choice_text' => 'La nécessité de rapprocher manuellement certaines versions d\'un même registre', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un utilisateur perd la clé privée associée à un portefeuille de crypto-actifs. Quel problème immédiat peut-il rencontrer ?',
                        'explanation' => 'La clé privée permet d\'autoriser certaines opérations sur les actifs détenus dans un portefeuille. La perdre peut rendre l\'accès très difficile, selon l\'architecture du service.',
                        'choices' => [
                            ['choice_text' => 'La clôture immédiate du portefeuille par le réseau et le remboursement de sa valeur en euros', 'is_correct' => false],
                            ['choice_text' => 'Une obligation de déclarer la perte au registre pour que le réseau régénère les actifs', 'is_correct' => false],
                            ['choice_text' => 'La difficulté voire l\'impossibilité d\'accéder ou de déplacer les actifs associés', 'is_correct' => true],
                            ['choice_text' => 'L\'effacement de l\'historique des transactions passées inscrites dans la blockchain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affirme que toutes les blockchains sont forcément plus rapides qu\'une base de données classique. Pourquoi cette affirmation est-elle trop générale ?',
                        'explanation' => 'Certaines blockchains peuvent avoir des contraintes de débit ou de latence. Il faut donc comparer la solution réelle à l\'alternative technique, plutôt que généraliser.',
                        'choices' => [
                            ['choice_text' => 'Les blockchains sont conçues pour être plus lentes afin de limiter le nombre d\'utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de traitement dépend principalement du cours du crypto-actif associé au réseau', 'is_correct' => false],
                            ['choice_text' => 'Les performances dépendent du protocole, du niveau de validation et du volume de transactions', 'is_correct' => true],
                            ['choice_text' => 'Les bases de données classiques n\'enregistrent pas les transactions de manière horodatée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un exemple de rapprochement simple entre Finance et blockchain ?',
                        'explanation' => 'Les registres distribués peuvent servir à partager des informations de transaction ou de propriété numérique. L\'utilité dépend du cas d\'usage et de la gouvernance.',
                        'choices' => [
                            ['choice_text' => 'La tenue d\'un compte courant bancaire classique par un seul établissement centralisé', 'is_correct' => false],
                            ['choice_text' => 'Le suivi partagé de certaines transactions ou de la propriété numérique selon des règles définies', 'is_correct' => true],
                            ['choice_text' => 'La fixation du taux directeur d\'une banque centrale par un vote des utilisateurs du réseau', 'is_correct' => false],
                            ['choice_text' => 'La suppression de la réglementation financière pour les opérations inscrites au registre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer blockchain et crypto-actif ?',
                        'explanation' => 'Une blockchain peut prendre en charge différents usages et n\'implique pas nécessairement un crypto-actif. À l\'inverse, un crypto-actif peut utiliser une blockchain ou une technologie apparentée selon son architecture.',
                        'choices' => [
                            ['choice_text' => 'La blockchain est un type d\'actif financier négociable, tandis qu\'un crypto-actif est l\'architecture technique du registre', 'is_correct' => false],
                            ['choice_text' => 'La blockchain est un portefeuille numérique, tandis qu\'un crypto-actif est le logiciel qui valide les transactions du réseau', 'is_correct' => false],
                            ['choice_text' => 'La blockchain est une monnaie émise par une banque centrale, tandis qu\'un crypto-actif est une monnaie émise par une entreprise privée', 'is_correct' => false],
                            ['choice_text' => 'La blockchain est une technologie ou architecture de registre, tandis qu\'un crypto-actif est un type d\'actif pouvant s\'appuyer sur une blockchain', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise envisage un projet blockchain uniquement pour stocker une petite base interne utilisée par deux employés. Quelle question doit-elle se poser avant de choisir cette technologie ?',
                        'explanation' => 'Le choix technologique doit partir du besoin. Une blockchain peut être pertinente dans certains contextes, mais une base de données classique peut être plus simple et suffisante pour un usage interne limité.',
                        'choices' => [
                            ['choice_text' => 'Si le projet peut être financé par une levée de fonds en crypto-actifs auprès du public', 'is_correct' => false],
                            ['choice_text' => 'Si le nom de la technologie sera attractif auprès des investisseurs et des futurs clients', 'is_correct' => false],
                            ['choice_text' => 'Si la base interne peut être rendue publique pour renforcer la confiance des clients', 'is_correct' => false],
                            ['choice_text' => 'Si la blockchain apporte un avantage réel par rapport à une solution de base de données plus simple', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un étudiant affirme qu\'une blockchain rend une information fausse automatiquement vraie parce qu\'elle est inscrite dans le registre. Quelle erreur commet-il ?',
                        'explanation' => 'Une blockchain peut contribuer à l\'intégrité de l\'historique, mais elle ne garantit pas la véracité de l\'information entrée initialement. Le principe « garbage in, garbage out » reste valable.',
                        'choices' => [
                            ['choice_text' => 'Il confond la validation des transactions avec le chiffrement des messages échangés entre participants', 'is_correct' => false],
                            ['choice_text' => 'Il oublie que l\'intégrité du registre ne garantit pas que la donnée saisie à l\'origine était correcte', 'is_correct' => true],
                            ['choice_text' => 'Il oublie que la blockchain ne conserve que les soldes et non l\'historique des transactions', 'is_correct' => false],
                            ['choice_text' => 'Il confond la blockchain avec un système de paiement géré par une seule banque', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Robo-advisory et investissement automatisé',
                'description' => 'Comprendre comment les outils automatisés peuvent accompagner l\'investissement et où se situent leurs limites.',
                'questions' => [
                    [
                        'question' => 'Un robo-advisor demande à un client son horizon d\'investissement et sa tolérance au risque avant de proposer une allocation. Pourquoi ?',
                        'explanation' => 'Le profil de risque, l\'horizon et les objectifs sont des paramètres fondamentaux pour construire une allocation cohérente. Ils ne permettent cependant pas de garantir un résultat.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux adapter la proposition au profil et aux objectifs du client', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer le montant des impôts que le client devra payer sur ses gains', 'is_correct' => false],
                            ['choice_text' => 'Pour sélectionner les actions dont le cours augmentera le plus dans les prochains mois', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer le montant des frais de gestion selon l\'ancienneté du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un algorithme propose de réduire les actions d\'un portefeuille très exposé après avoir détecté une concentration excessive. Quelle logique suit-il ?',
                        'explanation' => 'Une forte concentration sur un seul actif ou secteur augmente le risque spécifique. Réduire cette concentration peut améliorer la diversification, sans supprimer le risque de marché.',
                        'choices' => [
                            ['choice_text' => 'Augmenter le rendement attendu en concentrant davantage le portefeuille sur l\'actif le plus performant', 'is_correct' => false],
                            ['choice_text' => 'Vendre les actions dont le cours vient de monter pour encaisser un gain à court terme', 'is_correct' => false],
                            ['choice_text' => 'Réduire la concentration afin d\'améliorer la diversification du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Se couvrir contre le risque de change en convertissant le portefeuille en devises étrangères', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un client doit-il comprendre au moins les grandes lignes de l\'allocation proposée par un robo-advisor ?',
                        'explanation' => 'L\'automatisation n\'élimine ni les risques de marché ni le besoin de comprendre les grandes caractéristiques de la stratégie.',
                        'choices' => [
                            ['choice_text' => 'Parce que la réglementation oblige le client à refaire lui-même les calculs de l\'algorithme avant d\'investir', 'is_correct' => false],
                            ['choice_text' => 'Parce que les frais de gestion dépendent du niveau de connaissance financière affiché par le client', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il reste exposé aux risques et doit vérifier que la stratégie correspond à ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'Parce que la plateforme dégage sa responsabilité sur la qualité du conseil dès la signature du contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un robo-advisor rééquilibre un portefeuille lorsqu\'un poids d\'actif dépasse un seuil. Quel est l\'objectif principal du rééquilibrage ?',
                        'explanation' => 'Le rééquilibrage vise à maintenir le portefeuille proche de ses pondérations cibles. Il ne cherche pas à prédire le marché et peut entraîner des coûts.',
                        'choices' => [
                            ['choice_text' => 'Ramener les pondérations vers l\'allocation cible', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l\'actif ayant monté restera gagnant', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les frais de transaction', 'is_correct' => false],
                            ['choice_text' => 'Prévoir exactement les mouvements futurs du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client a besoin de son argent dans six mois mais demande une stratégie principalement investie en actifs très volatils. Quel point devrait attirer l\'attention ?',
                        'explanation' => 'Un horizon court et un besoin de liquidité rendent une forte exposition à des actifs volatils potentiellement inadaptée, car une baisse peut survenir au mauvais moment.',
                        'choices' => [
                            ['choice_text' => 'La stratégie est adaptée car un rendement élevé compense le risque sur un horizon de six mois', 'is_correct' => false],
                            ['choice_text' => 'Le principal point d\'attention est le montant des frais de l\'application, pas le profil de risque', 'is_correct' => false],
                            ['choice_text' => 'La stratégie semble mal alignée avec un horizon très court et un besoin de disponibilité', 'is_correct' => true],
                            ['choice_text' => 'La stratégie est prudente puisque les actifs volatils se vendent plus facilement que les autres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre automatisation et garantie de performance ?',
                        'explanation' => 'L\'automatisation concerne la manière dont la décision est exécutée. Elle ne supprime pas l\'incertitude des marchés ni le risque de perte.',
                        'choices' => [
                            ['choice_text' => 'Automatiser une décision supprime le risque de marché lié à l\'investissement concerné', 'is_correct' => false],
                            ['choice_text' => 'Garantir une performance revient à automatiser les décisions de la gestion du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'L\'automatisation transfère le risque de perte du client vers l\'entreprise qui fournit l\'algorithme', 'is_correct' => false],
                            ['choice_text' => 'Automatiser une décision ne garantit pas que cette décision produira un bon rendement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un service d\'investissement automatisé facture 0,5 % de frais annuels sur les actifs. Sur 20 000 €, combien cela représente-t-il environ par an ?',
                        'explanation' => '0,5 % de 20 000 € = 20 000 × 0,005 = 100 €. Les frais réels peuvent dépendre de la méthode de calcul et d\'éventuels frais supplémentaires.',
                        'choices' => [
                            ['choice_text' => '10 €', 'is_correct' => false],
                            ['choice_text' => '100 €', 'is_correct' => true],
                            ['choice_text' => '500 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un robo-advisor peut-il demander régulièrement au client si sa situation a changé ?',
                        'explanation' => 'Un changement de situation financière ou d\'objectifs peut rendre une allocation précédente moins pertinente. Les profils doivent donc être réévalués périodiquement.',
                        'choices' => [
                            ['choice_text' => 'Parce que le profil du client expire dans le système de la plateforme à chaque fin d\'année', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'algorithme utilise les réponses pour ajuster le niveau des frais de gestion facturés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les objectifs, l\'horizon ou la capacité à prendre des risques peuvent évoluer', 'is_correct' => true],
                            ['choice_text' => 'Parce que la plateforme doit prouver chaque trimestre que la performance du portefeuille dépasse celle du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client choisit une stratégie équilibrée puis consulte l\'application après une baisse de marché de 8 %. Pourquoi éviter une modification impulsive fondée uniquement sur cette baisse ?',
                        'explanation' => 'Une réaction à chaud peut éloigner le portefeuille de la stratégie initiale sans que les objectifs aient changé. L\'évaluation doit tenir compte du plan complet et pas d\'un seul mouvement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'une baisse de 8 % est trop faible pour avoir une incidence sur la valeur du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Parce que la stratégie équilibrée a été choisie pour offrir un rendement fixe sur douze mois', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vente de titres après une baisse entraîne la résiliation du contrat avec la plateforme', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une décision doit être replacée dans l\'horizon, les objectifs et le risque initialement accepté', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage pratique peut offrir l\'automatisation du rééquilibrage à un investisseur ?',
                        'explanation' => 'L\'automatisation peut aider à appliquer une règle de manière régulière. Elle ne prédit pas les marchés et n\'élimine ni les frais ni les pertes potentielles.',
                        'choices' => [
                            ['choice_text' => 'Réduire les oublis et appliquer plus régulièrement une règle définie à l\'avance', 'is_correct' => true],
                            ['choice_text' => 'Anticiper les périodes de baisse afin de vendre les actifs juste avant le recul du marché', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la définition de l\'allocation cible par un choix libre de l\'algorithme à chaque séance', 'is_correct' => false],
                            ['choice_text' => 'Réduire les frais de gestion appliqués par la plateforme sur les actifs conservés plus d\'un an', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Crowdfunding et financement participatif',
                'description' => 'Comprendre les principaux modèles de crowdfunding et les risques pour les porteurs de projets et les investisseurs.',
                'questions' => [
                    [
                        'question' => 'Une jeune entreprise collecte de petites contributions auprès de nombreuses personnes pour financer le lancement d\'un produit. Quel modèle décrit le mieux cette situation ?',
                        'explanation' => 'Le crowdfunding ou financement participatif permet à un projet de lever des fonds auprès d\'un grand nombre de contributeurs ou investisseurs selon un modèle déterminé.',
                        'choices' => [
                            ['choice_text' => 'Le capital-investissement auprès de fonds spécialisés', 'is_correct' => false],
                            ['choice_text' => 'Le financement participatif (crowdfunding)', 'is_correct' => true],
                            ['choice_text' => 'Le prêt bancaire classique à taux fixe', 'is_correct' => false],
                            ['choice_text' => 'L\'affacturage des créances commerciales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une campagne où les contributeurs reçoivent le produit plus tard en échange de leur contribution, de quel type de financement participatif s\'agit-il principalement ?',
                        'explanation' => 'La contribution est associée à une contrepartie non financière, par exemple le produit ou un avantage. Ce mécanisme est distinct du financement participatif en prêt ou en capital.',
                        'choices' => [
                            ['choice_text' => 'Le financement participatif en capital (prise de participation)', 'is_correct' => false],
                            ['choice_text' => 'Le financement participatif sous forme de prêt rémunéré', 'is_correct' => false],
                            ['choice_text' => 'Le financement participatif par don avec contrepartie', 'is_correct' => true],
                            ['choice_text' => 'Le financement participatif par don sans contrepartie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une plateforme permet à des investisseurs de financer une PME en échange d\'une participation au capital. Quel risque économique principal l\'investisseur accepte-t-il ?',
                        'explanation' => 'Un investissement en capital expose au succès de l\'entreprise. La perte de capital est possible et la liquidité peut aussi être limitée selon le dispositif.',
                        'choices' => [
                            ['choice_text' => 'Le risque de perdre une partie ou la totalité de son capital si l\'entreprise échoue', 'is_correct' => true],
                            ['choice_text' => 'Le risque de voir son capital converti en dette remboursable à taux fixe par la plateforme', 'is_correct' => false],
                            ['choice_text' => 'Le risque de devoir verser des fonds supplémentaires à chaque nouvelle levée de la PME', 'is_correct' => false],
                            ['choice_text' => 'Le risque de payer des intérêts à l\'entreprise sur la somme investie dans son capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le succès d\'une campagne de financement participatif ne prouve-t-il pas à lui seul la viabilité économique d\'une entreprise ?',
                        'explanation' => 'Une collecte peut montrer un intérêt initial, mais il faut encore vérifier les coûts, le marché, l\'exécution, la concurrence et la capacité de l\'entreprise à créer durablement de la valeur.',
                        'choices' => [
                            ['choice_text' => 'Le montant collecté correspond au bénéfice net que l\'entreprise réalisera sur les ventes', 'is_correct' => false],
                            ['choice_text' => 'Le financement obtenu ne remplace pas l\'analyse du modèle économique, des coûts et de la demande', 'is_correct' => true],
                            ['choice_text' => 'La plateforme vérifie la rentabilité de chaque entreprise avant d\'autoriser le lancement de la campagne', 'is_correct' => false],
                            ['choice_text' => 'L\'argent collecté doit être remboursé aux contributeurs dès que la campagne atteint son objectif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet de prêt participatif annonce un rendement élevé par rapport à un dépôt bancaire traditionnel. Quelle question doit naturellement se poser un investisseur ?',
                        'explanation' => 'Un rendement potentiel élevé peut refléter un risque plus important. L\'investisseur doit examiner le risque de crédit, les garanties éventuelles et les conditions du projet.',
                        'choices' => [
                            ['choice_text' => 'Quel niveau de risque et de probabilité de défaut accompagne ce rendement potentiel ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi la plateforme n\'est-elle pas soumise à une surveillance du régulateur financier ?', 'is_correct' => false],
                            ['choice_text' => 'Comment le rendement affiché peut-il être garanti par l\'État en cas de défaut de l\'emprunteur ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi un rendement plus élevé réduit-il le risque de perte sur le projet financé ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une plateforme de financement participatif explique clairement que les investissements peuvent être difficiles à revendre rapidement. Quelle notion est surtout décrite ?',
                        'explanation' => 'Le risque de liquidité correspond à la difficulté de vendre ou récupérer rapidement un investissement à un prix raisonnable.',
                        'choices' => [
                            ['choice_text' => 'Le risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change', 'is_correct' => false],
                            ['choice_text' => 'Le risque de défaut', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux d\'intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme peut-elle utiliser plusieurs indicateurs pour évaluer un porteur de projet avant de présenter son dossier aux investisseurs ?',
                        'explanation' => 'L\'analyse préalable vise à améliorer l\'information disponible et à identifier certains risques. Elle ne transforme pas un projet en investissement sans risque.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer le prix de souscription que les investisseurs doivent payer sur le marché secondaire', 'is_correct' => false],
                            ['choice_text' => 'Pour répartir équitablement la somme collectée entre les porteurs de projet inscrits sur la plateforme', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer à l\'avance le taux de rendement que recevront les investisseurs à l\'échéance du projet', 'is_correct' => false],
                            ['choice_text' => 'Pour mieux apprécier sa capacité, ses risques et la qualité des informations disponibles', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une campagne dépasse largement son objectif initial. Quel point doit malgré tout être surveillé par le porteur de projet ?',
                        'explanation' => 'Une collecte supérieure aux attentes peut créer une pression opérationnelle : produire plus, acheter des matières, gérer le stock et respecter les délais.',
                        'choices' => [
                            ['choice_text' => 'Le remboursement partiel des contributeurs dont la participation dépasse le montant de l\'objectif', 'is_correct' => false],
                            ['choice_text' => 'Sa capacité opérationnelle à produire, livrer et financer les dépenses supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Le versement immédiat de l\'excédent collecté à la plateforme à titre de commission supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'La réduction du prix de vente du produit pour tenir compte du montant collecté en plus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur place une petite somme sur dix projets participatifs différents plutôt que la totalité sur un seul. Quelle logique applique-t-il ?',
                        'explanation' => 'Répartir l\'exposition sur plusieurs projets peut réduire le risque spécifique d\'un projet, même si le risque global du crowdfunding demeure.',
                        'choices' => [
                            ['choice_text' => 'L\'effet de levier', 'is_correct' => false],
                            ['choice_text' => 'La titrisation', 'is_correct' => false],
                            ['choice_text' => 'La diversification', 'is_correct' => true],
                            ['choice_text' => 'La couverture de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document ou information est particulièrement utile avant d\'investir dans un projet participatif ?',
                        'explanation' => 'Les décisions doivent être fondées sur les éléments économiques du projet : utilisation des fonds, structure de l\'investissement, risques et hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Le classement de la plateforme dans les moteurs de recherche, les avis des internautes et le nombre de visites', 'is_correct' => false],
                            ['choice_text' => 'Le rendement promis dans la publicité, la durée de la campagne et le nombre de projets déjà financés', 'is_correct' => false],
                            ['choice_text' => 'Le montant total collecté par la plateforme, le nombre de contributeurs inscrits et l\'ancienneté du site', 'is_correct' => false],
                            ['choice_text' => 'Les conditions d\'investissement, les risques, l\'utilisation prévue des fonds et les hypothèses du projet', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'P2P lending et crédit digital',
                'description' => 'Découvrir les mécanismes du prêt entre particuliers ou entreprises via des plateformes numériques.',
                'questions' => [
                    [
                        'question' => 'Dans un modèle P2P lending, quel est le rôle général de la plateforme ?',
                        'explanation' => 'La plateforme organise généralement la mise en relation, l\'évaluation ou la gestion du prêt selon son modèle. La nature exacte des services dépend du dispositif.',
                        'choices' => [
                            ['choice_text' => 'Prêter ses propres fonds aux emprunteurs en prélevant les dépôts de ses clients', 'is_correct' => false],
                            ['choice_text' => 'Émettre de la monnaie électronique pour financer les prêts accordés aux emprunteurs', 'is_correct' => false],
                            ['choice_text' => 'Rembourser à la place des emprunteurs les échéances qu\'ils ne peuvent pas honorer', 'is_correct' => false],
                            ['choice_text' => 'Mettre en relation des emprunteurs et des prêteurs selon un processus organisé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un emprunteur obtient un financement numérique après une analyse automatisée de ses données. Quel bénéfice potentiel cette automatisation peut-elle apporter ?',
                        'explanation' => 'L\'automatisation peut traiter rapidement certains critères. Elle ne garantit pas la solvabilité future et dépend de la qualité des données et du modèle.',
                        'choices' => [
                            ['choice_text' => 'Fixer un taux d\'intérêt identique pour chaque emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Accélérer l\'étude de certaines demandes de crédit', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le risque de défaut des emprunteurs retenus', 'is_correct' => false],
                            ['choice_text' => 'Réduire le coût de refinancement de la plateforme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur finance 100 % d\'un seul prêt P2P et l\'emprunteur fait défaut. Quelle faiblesse de portefeuille est particulièrement visible ?',
                        'explanation' => 'Une exposition unique concentre le risque de défaut sur un seul emprunteur. Répartir les montants entre plusieurs dossiers peut réduire cette concentration.',
                        'choices' => [
                            ['choice_text' => 'Une forte concentration sur une seule exposition de crédit', 'is_correct' => true],
                            ['choice_text' => 'Une corrélation trop faible entre les emprunteurs du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change sur plusieurs devises détenues en portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Un risque de taux élevé sur plusieurs prêts à taux variable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme de crédit digital peut-elle utiliser des données historiques de remboursement ?',
                        'explanation' => 'Les historiques peuvent aider à estimer la probabilité de défaut ou d\'autres caractéristiques du crédit. Leur qualité, leur représentativité et leur usage doivent toutefois être examinés.',
                        'choices' => [
                            ['choice_text' => 'Pour fixer à l\'avance la date exacte de remboursement de chaque emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le taux directeur applicable aux prêts de la plateforme', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le montant des frais de dossier perçus par les banques classiques', 'is_correct' => false],
                            ['choice_text' => 'Pour rechercher des signaux utiles à l\'évaluation du risque de crédit', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un modèle de scoring accorde un score élevé à presque tous les dossiers d\'un nouveau segment qu\'il connaît mal. Quel risque méthodologique faut-il envisager ?',
                        'explanation' => 'Un modèle entraîné sur une population différente peut moins bien fonctionner sur un nouveau segment. Il faut donc tester sa performance et son calibration.',
                        'choices' => [
                            ['choice_text' => 'Le modèle est plus précis sur ce segment car il utilise des scores uniformes pour tous les dossiers', 'is_correct' => false],
                            ['choice_text' => 'Le modèle élimine le risque de crédit de ce segment en l\'identifiant comme très sûr', 'is_correct' => false],
                            ['choice_text' => 'Le modèle peut être mal calibré pour ce segment et produire des décisions moins fiables', 'is_correct' => true],
                            ['choice_text' => 'Le modèle surestime les besoins de financement du segment et refuse trop de demandes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un emprunteur demande une échéance plus longue pour réduire sa mensualité. Quel arbitrage simple peut apparaître ?',
                        'explanation' => 'À taux et conditions comparables, étaler davantage les remboursements peut réduire la mensualité tout en augmentant le montant total d\'intérêts payé.',
                        'choices' => [
                            ['choice_text' => 'La mensualité baisse et le coût total des intérêts diminue dans les mêmes proportions', 'is_correct' => false],
                            ['choice_text' => 'La mensualité augmente, mais le coût total des intérêts diminue grâce à la durée plus longue', 'is_correct' => false],
                            ['choice_text' => 'La mensualité reste identique, mais le capital restant dû augmente à chaque échéance', 'is_correct' => false],
                            ['choice_text' => 'La mensualité peut baisser, mais le coût total des intérêts peut augmenter', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une plateforme annonce un taux d\'intérêt de 9 % pour un prêt mais précise que certains frais s\'ajoutent. Que doit comparer l\'investisseur ou l\'emprunteur ?',
                        'explanation' => 'Le taux nominal ne suffit pas toujours à mesurer le coût réel ou le rendement net. Il faut examiner les frais, commissions, calendrier des paiements et éventuelles pertes.',
                        'choices' => [
                            ['choice_text' => 'Le coût ou rendement global selon l\'ensemble des frais et conditions', 'is_correct' => true],
                            ['choice_text' => 'Le taux nominal annoncé, sans tenir compte des commissions éventuelles', 'is_correct' => false],
                            ['choice_text' => 'La rapidité de réponse de l\'application au moment de la demande de prêt', 'is_correct' => false],
                            ['choice_text' => 'Le montant du capital emprunté, indépendamment de l\'échéancier de remboursement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque spécifique peut apparaître lorsqu\'une plateforme de crédit numérique dépend d\'un seul moteur de scoring externe ?',
                        'explanation' => 'Une dépendance critique à un fournisseur externe crée un risque de tiers et de continuité. Un problème chez ce fournisseur peut affecter tout le processus de crédit.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du taux d\'intérêt de chaque prêt décidée par le fournisseur du scoring', 'is_correct' => false],
                            ['choice_text' => 'Une obligation pour la plateforme de transférer ses prêts à une banque commerciale', 'is_correct' => false],
                            ['choice_text' => 'Une disparition du risque de modèle puisque l\'évaluation est réalisée par un spécialiste externe', 'is_correct' => false],
                            ['choice_text' => 'Une panne ou une erreur du fournisseur peut perturber l\'octroi ou l\'évaluation des crédits', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification des prêteurs sur plusieurs dossiers P2P peut-elle être utile ?',
                        'explanation' => 'La diversification peut limiter l\'impact d\'un défaut individuel. Elle ne garantit pas l\'absence de pertes et ne transforme pas le produit en dépôt bancaire.',
                        'choices' => [
                            ['choice_text' => 'Elle remplace le risque de crédit par un risque de change réparti sur plusieurs devises', 'is_correct' => false],
                            ['choice_text' => 'Elle répartit l\'exposition à différents emprunteurs et réduit le poids d\'un seul défaut', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente le taux d\'intérêt de chaque prêt en proportion du nombre de dossiers', 'is_correct' => false],
                            ['choice_text' => 'Elle permet au prêteur d\'être remboursé en priorité par la plateforme en cas de défaut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur examine un prêt digital et constate que le taux proposé est élevé. Quel élément manque encore avant de décider ?',
                        'explanation' => 'Un rendement potentiel doit être mis en regard du risque. Le défaut, la liquidité et les conditions contractuelles sont indispensables pour comprendre l\'investissement.',
                        'choices' => [
                            ['choice_text' => 'Une estimation du cours de Bourse de la plateforme et de ses utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Une confirmation que le taux élevé est fixé par l\'État pour protéger les prêteurs', 'is_correct' => false],
                            ['choice_text' => 'Une appréciation du risque de défaut, de la liquidité et des conditions du prêt', 'is_correct' => true],
                            ['choice_text' => 'Un calcul du rendement obtenu l\'an dernier par les autres prêteurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'IA, données et prise de décision en Finance',
                'description' => 'Comprendre quelques usages concrets de l\'intelligence artificielle dans les services financiers et leurs limites.',
                'questions' => [
                    [
                        'question' => 'Une banque utilise un modèle pour repérer les transactions qui ressemblent à des schémas inhabituels. Quel usage décrit-on ?',
                        'explanation' => 'Les modèles peuvent analyser de grands volumes de transactions pour identifier des comportements atypiques. Les alertes doivent ensuite être examinées selon le processus prévu.',
                        'choices' => [
                            ['choice_text' => 'La détection d\'anomalies ou de fraude', 'is_correct' => true],
                            ['choice_text' => 'La fixation automatique du taux directeur', 'is_correct' => false],
                            ['choice_text' => 'La création d\'une nouvelle devise', 'is_correct' => false],
                            ['choice_text' => 'La gestion d\'un portefeuille sans données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des données est-elle importante pour un modèle d\'IA utilisé en Finance ?',
                        'explanation' => 'Un modèle apprend ou raisonne à partir des données disponibles. Des données erronées, insuffisantes ou biaisées peuvent donc affecter les décisions produites.',
                        'choices' => [
                            ['choice_text' => 'Des données nombreuses suffisent à compenser une mauvaise méthode de calcul du modèle', 'is_correct' => false],
                            ['choice_text' => 'Des données bien structurées dispensent d\'évaluer la performance du modèle après son déploiement', 'is_correct' => false],
                            ['choice_text' => 'Des données incomplètes ou biaisées peuvent conduire à des résultats de mauvaise qualité', 'is_correct' => true],
                            ['choice_text' => 'Des données plus anciennes donnent des résultats plus fiables que des données récentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque utilise un modèle pour estimer le risque de défaut d\'un client. Quel principe prudent est pertinent avant de le déployer à grande échelle ?',
                        'explanation' => 'Un modèle doit être validé et surveillé avant et après son déploiement. Les performances peuvent se dégrader lorsque les données ou les comportements changent.',
                        'choices' => [
                            ['choice_text' => 'Entraîner le modèle sur les seuls clients les plus rentables de la banque', 'is_correct' => false],
                            ['choice_text' => 'Tester sa performance, sa robustesse et ses limites sur des données appropriées', 'is_correct' => true],
                            ['choice_text' => 'Confier la décision finale au modèle sans possibilité de contestation par le client', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la complexité du modèle jusqu\'à éliminer toute erreur sur les données passées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle de détection de fraude génère énormément d\'alertes mais très peu correspondent réellement à des fraudes. Quel problème cela peut-il créer ?',
                        'explanation' => 'Des faux positifs trop nombreux consomment du temps et peuvent réduire l\'efficacité du processus. Le modèle doit être calibré pour atteindre un compromis adapté.',
                        'choices' => [
                            ['choice_text' => 'Un manque d\'alertes et une sous-utilisation des équipes de contrôle', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des fraudes réelles provoquée par la multiplication d\'alertes', 'is_correct' => false],
                            ['choice_text' => 'Un grand nombre de faux positifs et une surcharge des équipes de contrôle', 'is_correct' => true],
                            ['choice_text' => 'Une diminution du coût de traitement de chaque alerte pour la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fintech présente un modèle de crédit mais ne peut pas expliquer pourquoi certains dossiers sont souvent refusés. Quel sujet de gouvernance cela peut-il soulever ?',
                        'explanation' => 'Dans un contexte financier, il peut être nécessaire de comprendre et de documenter les facteurs à l\'origine des décisions automatisées, notamment pour la gouvernance et le traitement équitable des clients.',
                        'choices' => [
                            ['choice_text' => 'La transparence et l\'explicabilité des décisions automatisées', 'is_correct' => true],
                            ['choice_text' => 'La conservation des données clients au-delà de la durée légale', 'is_correct' => false],
                            ['choice_text' => 'La sécurité informatique des serveurs qui hébergent le modèle', 'is_correct' => false],
                            ['choice_text' => 'La rapidité de traitement d\'un grand nombre de demandes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle performant sur les données de l\'année dernière perd de la précision cette année. Quelle explication simple est possible ?',
                        'explanation' => 'Les relations observées dans le passé peuvent évoluer. Ce phénomène peut nécessiter une surveillance et parfois une mise à jour du modèle.',
                        'choices' => [
                            ['choice_text' => 'Le modèle s\'est usé à force d\'être utilisé et perd mécaniquement de sa précision', 'is_correct' => false],
                            ['choice_text' => 'Le volume de clients a diminué, ce qui réduit mécaniquement la précision d\'un modèle', 'is_correct' => false],
                            ['choice_text' => 'L\'inflation a modifié la valeur de la monnaie, ce qui rend le modèle inutilisable pour les clients', 'is_correct' => false],
                            ['choice_text' => 'Les comportements ou caractéristiques des données ont changé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise utilise une IA pour résumer des contrats financiers. Quel contrôle reste raisonnable ?',
                        'explanation' => 'L\'IA peut accélérer le traitement documentaire, mais les sorties peuvent contenir des erreurs. Une revue humaine reste pertinente pour les décisions à fort enjeu.',
                        'choices' => [
                            ['choice_text' => 'Transmettre le résumé au signataire du contrat sans relire les documents d\'origine', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les résumés importants avant de les utiliser pour une décision sensible', 'is_correct' => true],
                            ['choice_text' => 'Demander à l\'IA de confirmer l\'exactitude de son propre résumé', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la relecture du juriste par un second résumé généré par l\'IA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque utilise des données alternatives pour compléter l\'analyse d\'un client. Quel risque faut-il surveiller ?',
                        'explanation' => 'Des données alternatives peuvent enrichir l\'analyse, mais elles doivent être examinées sous l\'angle de leur qualité, de leur usage, de leur sécurité et de leurs biais potentiels.',
                        'choices' => [
                            ['choice_text' => 'Le volume de stockage nécessaire, le coût des serveurs et la vitesse de la connexion utilisée', 'is_correct' => false],
                            ['choice_text' => 'La pertinence, la qualité, la confidentialité et le risque de biais des données utilisées', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de clients concernés, la notoriété du fournisseur de données et la taille de son équipe', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité des clients, leur ancienneté dans la banque et le montant de leurs dépôts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une IA recommande une action sur la base de données anciennes et d\'un contexte de marché très différent. Pourquoi faut-il être prudent ?',
                        'explanation' => 'Les modèles reflètent les données et hypothèses utilisées. Lorsque le contexte change fortement, leur pertinence peut diminuer.',
                        'choices' => [
                            ['choice_text' => 'Les données anciennes sont plus fiables parce qu\'elles ont été vérifiées par le temps', 'is_correct' => false],
                            ['choice_text' => 'Le modèle recommande des actions risquées dès que le contexte de marché évolue de manière marquée', 'is_correct' => false],
                            ['choice_text' => 'Les données anciennes sont protégées par la réglementation et ne peuvent plus être utilisées', 'is_correct' => false],
                            ['choice_text' => 'Le contexte actuel peut rendre les relations historiques moins pertinentes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est un bon usage de l\'IA dans un processus financier comportant une décision importante ?',
                        'explanation' => 'L\'IA peut améliorer l\'efficacité d\'un processus, mais la gouvernance doit préciser les contrôles, les validations et la responsabilité autour de la décision.',
                        'choices' => [
                            ['choice_text' => 'Confier la décision à l\'IA et ne solliciter un humain qu\'en cas de réclamation du client', 'is_correct' => false],
                            ['choice_text' => 'Utiliser l\'IA comme outil d\'aide avec des contrôles et une responsabilité humaine clairement définis', 'is_correct' => true],
                            ['choice_text' => 'Laisser l\'IA décider seule et ne documenter que les décisions ayant fait l\'objet d\'une contestation formelle', 'is_correct' => false],
                            ['choice_text' => 'Choisir le modèle le plus complexe disponible afin de limiter le besoin de contrôle humain', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cybersécurité dans les services financiers',
                'description' => 'Identifier les principales menaces cyber et les mesures de protection pertinentes pour les services financiers.',
                'questions' => [
                    [
                        'question' => 'Un employé reçoit un e-mail qui imite le logo de sa banque et demande de confirmer son mot de passe via un lien. Quel type d\'attaque cela évoque-t-il ?',
                        'explanation' => 'Le phishing consiste à utiliser des messages trompeurs pour pousser une personne à divulguer des informations ou à réaliser une action malveillante.',
                        'choices' => [
                            ['choice_text' => 'Le rançongiciel (ransomware)', 'is_correct' => false],
                            ['choice_text' => 'L\'hameçonnage (phishing)', 'is_correct' => true],
                            ['choice_text' => 'Le déni de service distribué (DDoS)', 'is_correct' => false],
                            ['choice_text' => 'L\'attaque par force brute', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'authentification multifacteur peut-elle améliorer la sécurité d\'un compte financier ?',
                        'explanation' => 'Plusieurs facteurs d\'authentification rendent la compromission d\'un compte plus difficile qu\'avec un simple mot de passe. Ils ne rendent toutefois pas toutes les attaques impossibles.',
                        'choices' => [
                            ['choice_text' => 'Elle chiffre les données stockées sur les serveurs de l\'établissement financier', 'is_correct' => false],
                            ['choice_text' => 'Elle limite le nombre de transactions que l\'utilisateur peut effectuer chaque jour', 'is_correct' => false],
                            ['choice_text' => 'Elle masque l\'adresse IP de l\'utilisateur lorsqu\'il consulte son compte en ligne', 'is_correct' => false],
                            ['choice_text' => 'Elle ajoute une preuve supplémentaire au-delà du seul mot de passe', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une fintech limite les droits d\'accès des équipes produit, finance et support aux seuls accès nécessaires à leurs missions. Quel principe applique-t-elle ?',
                        'explanation' => 'Le moindre privilège consiste à donner à chaque utilisateur ou système uniquement les accès nécessaires à sa fonction, réduisant ainsi l\'exposition.',
                        'choices' => [
                            ['choice_text' => 'La défense en profondeur', 'is_correct' => false],
                            ['choice_text' => 'Le principe du moindre privilège', 'is_correct' => true],
                            ['choice_text' => 'Le chiffrement des données', 'is_correct' => false],
                            ['choice_text' => 'L\'authentification multifacteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde régulière des données doit-elle être testée, et pas seulement créée ?',
                        'explanation' => 'Une sauvegarde inutilisable en cas d\'incident ne protège pas réellement l\'entreprise. Les tests de restauration permettent de vérifier sa fiabilité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il faut vérifier qu\'elle peut réellement être restaurée après un incident', 'is_correct' => true],
                            ['choice_text' => 'Parce que la réglementation impose de supprimer les anciennes sauvegardes dès qu\'elles sont testées', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un logiciel de sauvegarde peut détruire les données d\'origine s\'il n\'est pas testé', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il faut vérifier que les copies sont stockées sur le même serveur que les données d\'origine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise détecte une connexion inhabituelle sur un compte administrateur à 3 heures du matin. Quelle réaction est la plus prudente ?',
                        'explanation' => 'Une connexion inhabituelle peut avoir une explication légitime, mais elle mérite une vérification selon les procédures de sécurité. L\'objectif est de confirmer rapidement la nature de l\'événement.',
                        'choices' => [
                            ['choice_text' => 'Attendre la prochaine revue annuelle des accès avant d\'examiner cette connexion inhabituelle', 'is_correct' => false],
                            ['choice_text' => 'Changer le mot de passe de l\'administrateur sans consigner l\'événement ni alerter l\'équipe sécurité', 'is_correct' => false],
                            ['choice_text' => 'Déclencher les contrôles et l\'analyse prévus pour un événement de sécurité suspect', 'is_correct' => true],
                            ['choice_text' => 'Contacter le salarié concerné par téléphone et clore l\'alerte sur sa seule déclaration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un salarié réutilise le même mot de passe pour son e-mail professionnel et un site personnel. Quel risque cela crée-t-il ?',
                        'explanation' => 'La réutilisation de mots de passe permet à une fuite sur un service de devenir un point d\'entrée potentiel vers un autre service. Des mots de passe uniques réduisent ce risque.',
                        'choices' => [
                            ['choice_text' => 'Le mot de passe est modifié par l\'entreprise dès qu\'il est utilisé sur un site extérieur', 'is_correct' => false],
                            ['choice_text' => 'Les e-mails professionnels du salarié sont redirigés vers le site personnel par la messagerie', 'is_correct' => false],
                            ['choice_text' => 'Une compromission du site personnel pourrait aider un attaquant à tenter d\'accéder au compte professionnel', 'is_correct' => true],
                            ['choice_text' => 'Le chiffrement du compte professionnel est affaibli parce que le mot de passe est utilisé deux fois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les mises à jour de sécurité sont-elles importantes dans une fintech ?',
                        'explanation' => 'Les correctifs peuvent réduire l\'exposition à des vulnérabilités connues. Ils ne suffisent toutefois pas à eux seuls à couvrir tous les risques cyber.',
                        'choices' => [
                            ['choice_text' => 'Elles remplacent la formation des salariés aux risques d\'ingénierie sociale', 'is_correct' => false],
                            ['choice_text' => 'Elles chiffrent les données des clients stockées dans la base de la fintech', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent inutiles les sauvegardes régulières ainsi que les tests de restauration associés', 'is_correct' => false],
                            ['choice_text' => 'Elles peuvent corriger des vulnérabilités connues dans les logiciels et systèmes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise chiffre certaines données sensibles stockées sur ses systèmes. Quel objectif cherche-t-elle principalement ?',
                        'explanation' => 'Le chiffrement protège la confidentialité des données en les rendant illisibles sans la clé appropriée. Il ne garantit ni leur exactitude ni leur disponibilité.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que les données saisies par les clients sont exactes avant leur enregistrement dans la base de l\'établissement', 'is_correct' => false],
                            ['choice_text' => 'Permettre une restauration plus rapide des données après une panne ou une perte', 'is_correct' => false],
                            ['choice_text' => 'Réduire le risque qu\'une personne non autorisée puisse exploiter directement les données si elle y accède', 'is_correct' => true],
                            ['choice_text' => 'Réduire le temps de traitement des transactions en comprimant les données échangées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement est le plus sûr lorsqu\'un collaborateur reçoit un lien inattendu demandant des informations bancaires ?',
                        'explanation' => 'Les demandes inattendues doivent être vérifiées par un canal de confiance. L\'urgence apparente est une technique fréquente dans les attaques d\'ingénierie sociale.',
                        'choices' => [
                            ['choice_text' => 'Ouvrir le lien depuis un ordinateur personnel pour protéger les systèmes de l\'entreprise et saisir les informations demandées', 'is_correct' => false],
                            ['choice_text' => 'Vérifier l\'origine du message via un canal fiable et ne pas transmettre les informations avant confirmation', 'is_correct' => true],
                            ['choice_text' => 'Saisir les informations demandées si le lien affiche un cadenas dans la barre d\'adresse', 'is_correct' => false],
                            ['choice_text' => 'Transmettre une partie des informations demandées afin de limiter les conséquences d\'une éventuelle fraude', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la cybersécurité est-elle un enjeu financier et pas seulement informatique ?',
                        'explanation' => 'Une attaque peut affecter les opérations, les clients et les finances de l\'entreprise. La cybersécurité devient donc un enjeu de continuité et de gestion des risques.',
                        'choices' => [
                            ['choice_text' => 'Une attaque peut entraîner des pertes, des interruptions de service, des coûts de remédiation et une atteinte à la confiance', 'is_correct' => true],
                            ['choice_text' => 'Une attaque provoque surtout des dépenses de communication, sans effet sur l\'activité ni sur la confiance des clients', 'is_correct' => false],
                            ['choice_text' => 'Une attaque touche le matériel informatique de l\'entreprise mais reste sans effet sur ses clients, ses partenaires et ses revenus', 'is_correct' => false],
                            ['choice_text' => 'Une attaque ne coûte de l\'argent à l\'entreprise que lorsqu\'une rançon est effectivement versée aux attaquants', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finance inclusive et innovation',
                'description' => 'Examiner comment les technologies financières peuvent élargir l\'accès aux services et quels obstacles demeurent.',
                'questions' => [
                    [
                        'question' => 'Une application permet à une personne sans agence bancaire à proximité d\'effectuer des paiements depuis son téléphone. Quel bénéfice potentiel illustre-t-elle ?',
                        'explanation' => 'Les services numériques peuvent réduire certaines barrières géographiques et faciliter l\'accès à des moyens de paiement ou à d\'autres services financiers.',
                        'choices' => [
                            ['choice_text' => 'Une réduction des impôts sur les paiements effectués avec un téléphone', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration de l\'accès pratique aux services financiers', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du taux d\'intérêt versé sur les soldes détenus dans l\'application', 'is_correct' => false],
                            ['choice_text' => 'Une extension du réseau d\'agences physiques dans les zones isolées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fintech doit-elle tenir compte de la fracture numérique lorsqu\'elle conçoit un service ?',
                        'explanation' => 'Un service uniquement numérique peut exclure certaines populations. La conception doit donc considérer l\'équipement, la connectivité et la maîtrise des outils.',
                        'choices' => [
                            ['choice_text' => 'Parce que la fracture numérique oblige la fintech à ouvrir des agences physiques dans chaque région où elle opère', 'is_correct' => false],
                            ['choice_text' => 'Parce que certains utilisateurs peuvent avoir un accès limité à internet, aux smartphones ou aux compétences numériques', 'is_correct' => true],
                            ['choice_text' => 'Parce que la fracture numérique désigne l\'écart entre les taux d\'intérêt appliqués aux clients des banques en ligne', 'is_correct' => false],
                            ['choice_text' => 'Parce que les utilisateurs peu connectés représentent une clientèle trop risquée pour être servie légalement par une fintech', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application propose un produit financier mais l\'utilisateur ne comprend pas les frais. Quel problème peut apparaître ?',
                        'explanation' => 'Une présentation claire des frais aide l\'utilisateur à comparer les offres et à comprendre le coût réel du service.',
                        'choices' => [
                            ['choice_text' => 'Une réduction des frais facturés par la fintech grâce à la transparence de l\'offre', 'is_correct' => false],
                            ['choice_text' => 'Une obligation pour la fintech de rembourser l\'utilisateur des frais qu\'il n\'a pas compris', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité juridique de comparer cette offre avec celles d\'autres fintechs', 'is_correct' => false],
                            ['choice_text' => 'Une mauvaise compréhension du coût réel et un risque de décision mal informée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une fintech permet d\'ouvrir un compte à distance avec une procédure d\'identification numérique. Quel gain potentiel peut en résulter ?',
                        'explanation' => 'L\'identification numérique peut simplifier le parcours d\'entrée tout en maintenant des contrôles. Elle ne supprime pas les exigences de sécurité ou d\'identité.',
                        'choices' => [
                            ['choice_text' => 'Dispenser la fintech de ses obligations de lutte contre le blanchiment', 'is_correct' => false],
                            ['choice_text' => 'Offrir au client un taux d\'intérêt supérieur à celui des agences', 'is_correct' => false],
                            ['choice_text' => 'Éviter au client de signer le contrat d\'ouverture de compte et ses conditions générales', 'is_correct' => false],
                            ['choice_text' => 'Réduire certaines étapes physiques et accélérer l\'accès au service', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la simplicité d\'une interface peut-elle être particulièrement importante pour un service financier destiné à un large public ?',
                        'explanation' => 'Une interface claire peut diminuer les erreurs et améliorer l\'accessibilité. Elle ne remplace pas les contrôles ni l\'accompagnement lorsque celui-ci est nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Elle dispense la fintech d\'expliquer les frais et les risques des produits aux utilisateurs concernés', 'is_correct' => false],
                            ['choice_text' => 'Elle peut réduire les erreurs de navigation et rendre certaines opérations plus accessibles', 'is_correct' => true],
                            ['choice_text' => 'Elle améliore le rendement des produits d\'épargne proposés dans l\'application', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit le capital minimum que la fintech doit détenir auprès du régulateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fintech cible des travailleurs indépendants ayant des revenus irréguliers. Pourquoi son produit de crédit doit-il tenir compte de cette caractéristique ?',
                        'explanation' => 'Des revenus variables peuvent modifier les flux de trésorerie disponibles pour rembourser. Le produit et l\'analyse du risque doivent en tenir compte.',
                        'choices' => [
                            ['choice_text' => 'Parce que la capacité de remboursement peut être plus variable dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce que les revenus irréguliers interdisent à la fintech de proposer des échéances mensuelles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les travailleurs indépendants sont exclus du champ du crédit à la consommation', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indépendants remboursent plus vite leurs dettes et paient donc moins d\'intérêts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre le mieux un service financier accessible à un public éloigné des agences ?',
                        'explanation' => 'Un portefeuille mobile peut offrir des services de base sans exiger une présence physique dans une agence, sous réserve de l\'infrastructure disponible.',
                        'choices' => [
                            ['choice_text' => 'Un service de courtage en ligne nécessitant un rendez-vous préalable avec un conseiller', 'is_correct' => false],
                            ['choice_text' => 'Un coffre-fort bancaire situé dans les locaux d\'une agence de centre-ville', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille mobile permettant de payer et transférer des fonds avec un téléphone compatible', 'is_correct' => true],
                            ['choice_text' => 'Une plateforme de crédit exigeant la remise de dossiers papier au siège de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application traduit automatiquement les instructions financières dans plusieurs langues. Quel objectif contribue-t-elle à renforcer ?',
                        'explanation' => 'Une meilleure accessibilité linguistique peut faciliter la compréhension et l\'utilisation du service. Elle ne modifie pas les risques financiers sous-jacents.',
                        'choices' => [
                            ['choice_text' => 'La rentabilité des produits financiers proposés', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de capital réglementaire de la fintech', 'is_correct' => false],
                            ['choice_text' => 'La rapidité d\'exécution des virements internationaux', 'is_correct' => false],
                            ['choice_text' => 'L\'accessibilité et la compréhension du service', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'accès à un service financier ne suffit-il pas à prouver son utilité pour l\'utilisateur ?',
                        'explanation' => 'Une solution peut être facilement accessible mais coûteuse, mal comprise ou inadaptée au besoin. L\'évaluation doit donc être plus large que la seule disponibilité.',
                        'choices' => [
                            ['choice_text' => 'Il faut surtout considérer le nombre de téléchargements de l\'application et la rapidité de son ouverture', 'is_correct' => false],
                            ['choice_text' => 'L\'accès à un service suffit à prouver son utilité dès lors que celui-ci est proposé par une fintech régulée', 'is_correct' => false],
                            ['choice_text' => 'Il faut aussi considérer le coût, la compréhension, la qualité du service et son adéquation au besoin', 'is_correct' => true],
                            ['choice_text' => 'Un service accessible sur téléphone est utile tant qu\'il est gratuit, même s\'il ne correspond pas au besoin', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fintech propose une petite épargne automatique à chaque paiement. Quel comportement cherche-t-elle à faciliter ?',
                        'explanation' => 'Automatiser de petites mises de côté peut faciliter l\'épargne régulière. L\'outil n\'empêche toutefois pas l\'utilisateur de dépenser ou de modifier son comportement.',
                        'choices' => [
                            ['choice_text' => 'La spéculation à court terme sur des actifs volatils avec les petits montants arrondis', 'is_correct' => false],
                            ['choice_text' => 'L\'emprunt régulier de petites sommes pour compléter les revenus du mois', 'is_correct' => false],
                            ['choice_text' => 'L\'accumulation régulière d\'une épargne à partir de petits montants', 'is_correct' => true],
                            ['choice_text' => 'La réduction des dépenses grâce au blocage des cartes de paiement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risques et gouvernance des FinTech',
                'description' => 'Mettre en relation innovation, maîtrise des risques, dépendance aux prestataires et gouvernance.',
                'questions' => [
                    [
                        'question' => 'Une fintech externalise son stockage informatique à un grand fournisseur cloud. Quel risque doit-elle malgré tout gérer ?',
                        'explanation' => 'Externaliser ne transfère pas toute la responsabilité de gestion du risque. La fintech doit comprendre ses dépendances, les contrôles, les incidents possibles et les mécanismes de continuité.',
                        'choices' => [
                            ['choice_text' => 'Le risque lié au fournisseur, à sa disponibilité, à sa sécurité et à la continuité du service', 'is_correct' => true],
                            ['choice_text' => 'Le risque de perdre la propriété de ses données, qui deviennent la propriété du fournisseur cloud', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit sur les clients du fournisseur, lié à leur capacité à payer leurs factures', 'is_correct' => false],
                            ['choice_text' => 'Le risque réglementaire lié à la licence bancaire du fournisseur, que la fintech doit obtenir à sa place', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe produit lance une nouvelle fonctionnalité sans vérifier les effets possibles sur les données clients. Quel principe de gouvernance semble manquer ?',
                        'explanation' => 'Les changements de produit doivent être évalués en fonction de leurs impacts sur les données, la sécurité et les opérations. Une revue préalable réduit les mauvaises surprises.',
                        'choices' => [
                            ['choice_text' => 'Une évaluation du risque et une revue avant mise en production', 'is_correct' => true],
                            ['choice_text' => 'Une étude de marché menée auprès des clients avant le lancement', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du capital réglementaire de l\'entreprise avant chaque lancement', 'is_correct' => false],
                            ['choice_text' => 'Une campagne de communication annonçant la nouvelle fonctionnalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fintech conserve des journaux détaillés des accès aux données sensibles. Quel avantage apporte cette pratique ?',
                        'explanation' => 'Les journaux permettent de retracer certains événements et d\'aider aux investigations. Ils complètent, mais ne remplacent pas, les autres contrôles de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Elle chiffre les données sensibles pour les rendre illisibles aux utilisateurs non autorisés', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les utilisateurs d\'accéder à des données pour lesquelles ils n\'ont pas de droit', 'is_correct' => false],
                            ['choice_text' => 'Elle accélère le traitement des transactions en réduisant les contrôles à chaque accès', 'is_correct' => false],
                            ['choice_text' => 'Elle facilite la détection et l\'analyse de certaines actions ou incidents', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise financière ajoute une deuxième solution de paiement en secours. Quelle idée de continuité applique-t-elle ?',
                        'explanation' => 'Une solution de secours peut réduire le risque qu\'une panne d\'un prestataire unique bloque complètement le service.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance à un seul prestataire critique', 'is_correct' => true],
                            ['choice_text' => 'Diversifier les placements de trésorerie de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Couvrir le risque de change sur les paiements internationaux', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le nombre de clients par prestataire de paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fintech doit-elle tester ses procédures de reprise après incident ?',
                        'explanation' => 'Un plan théorique peut échouer en pratique. Les tests permettent d\'identifier les lacunes, les dépendances et les délais réels de reprise.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir une réduction des primes d\'assurance versées à l\'assureur chaque année', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que les plans fonctionnent réellement dans les conditions prévues', 'is_correct' => true],
                            ['choice_text' => 'Pour mesurer la satisfaction des clients après une interruption du service', 'is_correct' => false],
                            ['choice_text' => 'Pour prouver que le fournisseur cloud assume la responsabilité de l\'incident à sa place', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fintech confie une fonction critique à un prestataire mais ne sait pas combien de temps une reprise prendrait en cas de panne. Quel point de gouvernance doit être amélioré ?',
                        'explanation' => 'Les fonctions critiques doivent être associées à des attentes de disponibilité et de reprise. La gouvernance doit connaître les dépendances et les capacités du fournisseur.',
                        'choices' => [
                            ['choice_text' => 'La politique de distribution de dividendes aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Le calcul du coût d\'acquisition de chaque nouveau client', 'is_correct' => false],
                            ['choice_text' => 'La stratégie de tarification des services proposés aux clients', 'is_correct' => false],
                            ['choice_text' => 'La gestion de la continuité et des niveaux de service attendus', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fintech doit-elle séparer les environnements de développement et de production ?',
                        'explanation' => 'La séparation réduit le risque qu\'une expérimentation ou une erreur de développement affecte directement les utilisateurs en production.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre aux développeurs de consulter plus facilement les données réelles des clients lors des tests', 'is_correct' => false],
                            ['choice_text' => 'Pour limiter le risque qu\'un test ou une modification non maîtrisée perturbe les services réels', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le coût de l\'hébergement en regroupant les deux environnements sur un seul serveur', 'is_correct' => false],
                            ['choice_text' => 'Pour accélérer les mises en production en évitant les revues de code et les tests préalables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vérifie régulièrement qu\'un compte utilisateur dispose seulement des droits nécessaires. Quel contrôle effectue-t-elle ?',
                        'explanation' => 'Une revue régulière des accès permet d\'identifier les droits devenus inutiles ou excessifs et de renforcer le principe du moindre privilège.',
                        'choices' => [
                            ['choice_text' => 'Un calcul de duration', 'is_correct' => false],
                            ['choice_text' => 'Une revue périodique des accès', 'is_correct' => true],
                            ['choice_text' => 'Une réévaluation d\'un coupon', 'is_correct' => false],
                            ['choice_text' => 'Une couverture de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fintech découvre qu\'une fonctionnalité très utilisée dépend d\'un composant logiciel abandonné par son éditeur. Pourquoi est-ce problématique ?',
                        'explanation' => 'Un composant abandonné peut ne plus recevoir de correctifs ou de support. Cela augmente les risques de sécurité et de continuité.',
                        'choices' => [
                            ['choice_text' => 'La maintenance et la correction de vulnérabilités peuvent devenir plus difficiles', 'is_correct' => true],
                            ['choice_text' => 'Le composant devient inutilisable dès que l\'éditeur annonce officiellement l\'arrêt de son support', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs doivent payer un abonnement plus élevé pour continuer à utiliser la fonctionnalité', 'is_correct' => false],
                            ['choice_text' => 'Le régulateur impose à la fintech de retirer immédiatement la fonctionnalité de ses services', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement correspond le mieux à une gouvernance saine d\'une fintech ?',
                        'explanation' => 'Une gouvernance solide relie innovation, responsabilités, contrôles, suivi des risques et amélioration continue.',
                        'choices' => [
                            ['choice_text' => 'Concentrer les décisions de sécurité sur une seule personne et réduire la documentation au minimum', 'is_correct' => false],
                            ['choice_text' => 'Déléguer les contrôles aux fournisseurs et ne revoir les risques qu\'après un incident majeur', 'is_correct' => false],
                            ['choice_text' => 'Suivre les risques, documenter les responsabilités, tester les contrôles et corriger les faiblesses', 'is_correct' => true],
                            ['choice_text' => 'Fixer les règles de gouvernance une fois pour toutes lors du lancement de l\'entreprise', 'is_correct' => false],
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
