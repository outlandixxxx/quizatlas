<?php

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

        $quizzesData = [
            [
                'title' => "Paiements numériques et nouveaux usages",
                'description' => "Découvrir le fonctionnement des paiements numériques et leurs principaux avantages et risques dans des situations concrètes.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une petite boutique commence à accepter les paiements par QR code. Quel changement est le plus directement apporté par cette solution ?",
                        'choices' => [
                            [
                                'choice_text' => "Le client peut payer sans remettre d'espèces, via un canal numérique compatible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La boutique n'a plus besoin de vérifier les transactions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le paiement devient automatiquement gratuit pour toutes les parties",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le commerçant n'a plus besoin de compte bancaire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le QR code fournit un canal de paiement numérique. Le client peut initier une transaction avec son application compatible, mais les vérifications, frais éventuels et conditions du service restent applicables.",
                    ],
                    [
                        'question' => "Pourquoi les paiements sans contact sont-ils souvent appréciés dans les commerces à fort volume de transactions ?",
                        'choices' => [
                            [
                                'choice_text' => "Ils réduisent le temps nécessaire pour effectuer des paiements simples",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils suppriment tous les contrôles de sécurité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils garantissent que chaque transaction sera acceptée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils évitent toute connexion à un système de paiement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Pour une transaction courante, le sans-contact peut accélérer le passage en caisse. Il ne supprime pas pour autant les mécanismes de sécurité ni les éventuels refus de transaction.",
                    ],
                    [
                        'question' => "Un client reçoit une notification lui indiquant qu'un achat en ligne a été confirmé par sa banque. Quel est le rôle principal de cette notification ?",
                        'choices' => [
                            [
                                'choice_text' => "Informer rapidement le client qu'un événement lié à la transaction a été enregistré",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Modifier le montant de l'achat après paiement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Créer automatiquement un prêt",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Remplacer le relevé bancaire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une notification transactionnelle sert surtout à informer. Elle ne modifie pas le paiement et ne remplace pas les autres documents ou contrôles de la banque.",
                    ],
                    [
                        'question' => "Une application permet à un utilisateur de regrouper plusieurs moyens de paiement dans une seule interface. Quelle proposition décrit le mieux cette évolution ?",
                        'choices' => [
                            [
                                'choice_text' => "L'application agit comme une interface facilitant l'accès et l'utilisation de plusieurs instruments de paiement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle transforme automatiquement tous les paiements en espèces",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime la nécessité des prestataires de paiement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle garantit un taux de change identique pour toutes les devises",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une interface de portefeuille ou d'agrégation peut simplifier l'usage de plusieurs instruments. Les prestataires sous-jacents et leurs règles continuent toutefois d'exister.",
                    ],
                    [
                        'question' => "Lorsqu'un paiement numérique est refusé alors que le client pense avoir suffisamment de fonds, quelle vérification est pertinente avant de conclure à une erreur du commerçant ?",
                        'choices' => [
                            [
                                'choice_text' => "Vérifier le solde disponible, les limites de paiement et l'état de l'autorisation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Changer immédiatement la devise de la transaction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer l'historique du compte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Réinstaller le système comptable du commerçant",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un refus peut venir du solde réellement disponible, d'une limite, d'un paramètre de sécurité ou d'une autorisation. Il faut examiner ces éléments avant d'attribuer l'erreur.",
                    ],
                    [
                        'question' => "Quel risque est particulièrement important lorsqu'une personne enregistre sa carte sur de nombreux services en ligne ?",
                        'choices' => [
                            [
                                'choice_text' => "La multiplication des points d'exposition en cas de compromission d'un service",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse automatique du rendement de son compte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse certaine des frais bancaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une suppression du risque de fraude",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Chaque service supplémentaire peut constituer un point d'exposition. La compromission d'un prestataire peut donc avoir des conséquences sur les données ou moyens de paiement associés.",
                    ],
                    [
                        'question' => "Une fintech propose des alertes instantanées lorsqu'une dépense dépasse 500 €. Quelle utilité est la plus directe pour l'utilisateur ?",
                        'choices' => [
                            [
                                'choice_text' => "Repérer plus rapidement certaines dépenses inhabituelles ou importantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir que les dépenses sont toujours légitimes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Empêcher juridiquement toute fraude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter automatiquement le revenu mensuel",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les alertes améliorent la visibilité sur les mouvements. Elles peuvent aider à détecter une anomalie rapidement, sans garantir qu'une transaction soit légitime.",
                    ],
                    [
                        'question' => "Un commerçant compare un terminal de paiement traditionnel avec une solution mobile. Quel élément financier doit-il examiner en priorité, en plus de la facilité d'utilisation ?",
                        'choices' => [
                            [
                                'choice_text' => "Les frais, le modèle de commission et les conditions contractuelles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le nombre d'abonnés du fournisseur sur les réseaux sociaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur du terminal",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de devises imprimées sur l'appareil",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le coût réel d'une solution de paiement dépend notamment des frais fixes, commissions par transaction et autres conditions commerciales. L'apparence du matériel n'est pas un critère financier essentiel.",
                    ],
                    [
                        'question' => "Pourquoi une fintech de paiement doit-elle accorder une attention particulière à la disponibilité de son service ?",
                        'choices' => [
                            [
                                'choice_text' => "Une panne peut empêcher des clients et des commerçants d'effectuer des transactions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une panne augmente automatiquement le chiffre d'affaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disponibilité n'a aucun impact dans les paiements numériques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une panne garantit une meilleure sécurité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Dans les paiements, la continuité du service est essentielle. Une indisponibilité peut bloquer des achats, des transferts ou des encaissements et dégrader la confiance des utilisateurs.",
                    ],
                    [
                        'question' => "Une application permet à un utilisateur de voir immédiatement le montant payé après un achat. Quel bénéfice comportemental simple peut en découler ?",
                        'choices' => [
                            [
                                'choice_text' => "Une meilleure visibilité sur les dépenses et un suivi plus facile du budget",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une suppression du besoin de budget",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une hausse automatique de l'épargne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un rendement garanti sur le solde du compte",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un suivi quasi instantané peut aider l'utilisateur à mieux observer ses dépenses. Il ne remplace pas pour autant une discipline budgétaire.",
                    ],
                ],
            ],
            [
                'title' => "Open Banking et API financières",
                'description' => "Comprendre comment l'Open Banking et les API permettent de connecter des services financiers.",
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une application budgétaire demande à un client l'autorisation de lire ses transactions bancaires. Quelle technologie est au cœur de ce type d'intégration ?",
                        'choices' => [
                            [
                                'choice_text' => "Une API permettant à des systèmes autorisés d'échanger des données",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un terminal de paiement hors ligne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un contrat d'assurance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un fichier papier transmis par courrier",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une API permet à différents systèmes logiciels de communiquer selon des règles définies. Dans l'Open Banking, elle peut servir à accéder à certaines données après autorisation et selon le cadre applicable.",
                    ],
                    [
                        'question' => "Pourquoi le consentement de l'utilisateur est-il important dans un service d'agrégation financière ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que l'accès aux données financières doit être lié à une autorisation appropriée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que le consentement fixe le taux d'intérêt du compte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'il transforme une fintech en banque centrale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'il garantit que les données seront exactes à 100 %",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le consentement encadre l'accès aux données et permet à l'utilisateur de savoir qu'un service tiers y accède. Il ne garantit pas à lui seul l'exactitude absolue de toutes les données.",
                    ],
                    [
                        'question' => "Une fintech utilise une API bancaire pour récupérer automatiquement des soldes. Que gagne-t-elle principalement par rapport à une saisie manuelle ?",
                        'choices' => [
                            [
                                'choice_text' => "Une récupération plus automatisée et plus rapide des informations disponibles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une exonération de toutes les règles de sécurité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une garantie de rendement financier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression de toute maintenance informatique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'API permet d'automatiser l'échange d'informations, ce qui peut réduire les saisies manuelles et améliorer la fréquence des mises à jour.",
                    ],
                    [
                        'question' => "Deux applications utilisent une API avec des formats de données clairement documentés. Quel avantage en résulte pour les équipes techniques ?",
                        'choices' => [
                            [
                                'choice_text' => "L'intégration est plus prévisible et plus simple à maintenir",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Toutes les erreurs deviennent impossibles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les utilisateurs n'ont plus besoin de connexion internet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les données ne peuvent plus être modifiées",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une API bien documentée facilite l'intégration et la maintenance. Elle ne supprime pas toutes les erreurs ni les besoins de supervision.",
                    ],
                    [
                        'question' => "Un client retire son autorisation d'accès aux données dans une application financière. Quelle conséquence est la plus logique ?",
                        'choices' => [
                            [
                                'choice_text' => "L'application ne devrait plus pouvoir utiliser les données concernées au-delà de ce que le cadre autorise",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le client perd automatiquement son compte bancaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le compte devient immédiatement un compte professionnel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les transactions passées sont effacées",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le retrait du consentement doit limiter ou arrêter l'accès futur aux données concernées selon les mécanismes et obligations applicables. Il ne signifie pas la suppression automatique de l'historique bancaire.",
                    ],
                    [
                        'question' => "Quel risque apparaît si une fintech dépend entièrement d'une API externe pour une fonction critique et que cette API devient indisponible ?",
                        'choices' => [
                            [
                                'choice_text' => "Le service fintech peut lui-même devenir indisponible ou dégradé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La fintech réalise automatiquement plus de transactions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de cyberattaque disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le taux directeur est modifié",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une dépendance technique crée un risque opérationnel et de tiers. Une panne du service amont peut perturber directement l'expérience du client.",
                    ],
                    [
                        'question' => "Une banque ouvre certaines interfaces à des partenaires autorisés. Pourquoi la gouvernance des accès est-elle importante ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'il faut contrôler qui peut accéder à quelles données ou fonctions et dans quelles conditions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu'un accès plus large est toujours plus sûr",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les API ne contiennent jamais de données sensibles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la gouvernance remplace les tests techniques",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les interfaces financières peuvent exposer des données ou opérations sensibles. Les droits, authentifications, journaux et contrôles doivent donc être gérés précisément.",
                    ],
                    [
                        'question' => "Une entreprise souhaite intégrer un service de vérification de compte via API. Quel coût doit-elle anticiper au-delà du prix affiché par le fournisseur ?",
                        'choices' => [
                            [
                                'choice_text' => "Les coûts d'intégration, de maintenance, de sécurité et de suivi du service",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Uniquement le coût du logo du fournisseur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun coût supplémentaire n'est possible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement le coût du papier utilisé",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une intégration financière entraîne souvent des coûts techniques et opérationnels : développement, tests, surveillance, sécurité, évolutions et gestion des incidents.",
                    ],
                    [
                        'question' => "Un agrégateur affiche les comptes d'un utilisateur provenant de plusieurs banques. Quel est le principal intérêt du service ?",
                        'choices' => [
                            [
                                'choice_text' => "Offrir une vue consolidée de plusieurs relations financières dans une même interface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir un rendement supérieur aux banques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Créer de nouvelles devises",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Remplacer les contrats bancaires existants",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'agrégation consolide les informations autorisées de plusieurs comptes dans une seule interface. Les contrats bancaires sous-jacents restent en place.",
                    ],
                    [
                        'question' => "Une API renvoie une réponse vide pour certains comptes alors que les autres fonctionnent. Quelle première attitude technique est raisonnable ?",
                        'choices' => [
                            [
                                'choice_text' => "Vérifier les permissions, les données disponibles, les erreurs de l'API et les cas particuliers avant de conclure",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Supprimer tous les comptes clients",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Changer le nom de la fintech",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter automatiquement les limites de paiement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une réponse vide peut avoir plusieurs causes. Une démarche de diagnostic commence par les permissions, les journaux, la documentation et la disponibilité réelle des données.",
                    ],
                ],
            ],
            [
                'title' => "Blockchain, registres distribués et actifs numériques",
                'description' => "Aborder les concepts de blockchain et de registres distribués avec des exemples simples et sans confusion entre les usages.",
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Quel est le principe général d'un registre distribué ?",
                        'choices' => [
                            [
                                'choice_text' => "Plusieurs participants conservent ou valident des copies cohérentes d'un registre selon des règles communes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une seule personne contrôle obligatoirement toutes les écritures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les transactions sont toujours réalisées en espèces",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le registre ne peut contenir aucune information numérique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un registre distribué repose sur plusieurs participants et un mécanisme de synchronisation ou de validation. Le niveau exact de décentralisation dépend du système concerné.",
                    ],
                    [
                        'question' => "Pourquoi une blockchain peut-elle rendre la modification rétroactive de certaines données difficile ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les blocs sont liés cryptographiquement et qu'une modification doit rester cohérente avec l'historique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les données sont imprimées sur papier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'aucun utilisateur ne peut consulter le registre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que toutes les blockchains utilisent une banque centrale",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les mécanismes cryptographiques et la structure en chaîne rendent certaines modifications rétroactives difficiles à effectuer sans laisser de traces ou sans contrôler une partie importante du système.",
                    ],
                    [
                        'question' => "Une entreprise utilise une blockchain privée pour partager des informations entre plusieurs partenaires connus. Est-il correct de dire qu'une blockchain doit forcément être totalement publique ?",
                        'choices' => [
                            [
                                'choice_text' => "Non, il existe aussi des réseaux avec un accès restreint aux participants autorisés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, toutes les blockchains sont publiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, une blockchain privée n'est pas une base de données",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, mais une blockchain privée doit toujours être anonyme",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les architectures de registre distribué peuvent être publiques, privées ou hybrides selon leur gouvernance et leurs objectifs.",
                    ],
                    [
                        'question' => "Quel problème une blockchain peut-elle chercher à réduire dans une chaîne de transactions entre plusieurs acteurs ?",
                        'choices' => [
                            [
                                'choice_text' => "La nécessité de rapprocher manuellement certaines versions d'un même registre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La totalité des coûts de fonctionnement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Tous les risques juridiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les variations de prix des actifs",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un registre partagé peut réduire certains travaux de rapprochement entre parties. Il ne supprime ni les coûts, ni les contraintes juridiques, ni les risques de marché.",
                    ],
                    [
                        'question' => "Un utilisateur perd la clé privée associée à un portefeuille de crypto-actifs. Quel problème immédiat peut-il rencontrer ?",
                        'choices' => [
                            [
                                'choice_text' => "La difficulté voire l'impossibilité d'accéder ou de déplacer les actifs associés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse automatique du prix des actifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La création d'une nouvelle banque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression de la blockchain entière",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La clé privée permet d'autoriser certaines opérations sur les actifs détenus dans un portefeuille. La perdre peut rendre l'accès très difficile, selon l'architecture du service.",
                    ],
                    [
                        'question' => "Une entreprise affirme que toutes les blockchain sont forcément plus rapides qu'une base de données classique. Pourquoi cette affirmation est-elle trop générale ?",
                        'choices' => [
                            [
                                'choice_text' => "Les performances dépendent du protocole, du niveau de validation et du volume de transactions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les blockchains n'utilisent jamais de réseau informatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les bases de données classiques ne stockent aucune transaction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les blockchains sont toujours hors ligne",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Certaines blockchains peuvent avoir des contraintes de débit ou de latence. Il faut donc comparer la solution réelle à l'alternative technique, plutôt que généraliser.",
                    ],
                    [
                        'question' => "Quel est un exemple de rapprochement simple entre Finance et blockchain ?",
                        'choices' => [
                            [
                                'choice_text' => "Le suivi partagé de certaines transactions ou de la propriété numérique selon des règles définies",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le calcul automatique de tous les salaires sans système comptable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression de tous les intermédiaires dans tous les marchés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La garantie d'un rendement positif",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les registres distribués peuvent servir à partager des informations de transaction ou de propriété numérique. L'utilité dépend du cas d'usage et de la gouvernance.",
                    ],
                    [
                        'question' => "Pourquoi faut-il distinguer blockchain et crypto-actif ?",
                        'choices' => [
                            [
                                'choice_text' => "La blockchain est une technologie ou architecture de registre, tandis qu'un crypto-actif est un type d'actif pouvant s'appuyer sur une blockchain",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les deux mots désignent exactement la même chose dans tous les cas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un crypto-actif est toujours une monnaie émise par une banque centrale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une blockchain est uniquement un portefeuille numérique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une blockchain peut supporter différents usages et n'implique pas nécessairement un crypto-actif. À l'inverse, un crypto-actif peut utiliser une blockchain ou une technologie apparentée selon son architecture.",
                    ],
                    [
                        'question' => "Une entreprise envisage un projet blockchain uniquement pour stocker une petite base interne utilisée par deux employés. Quelle question doit-elle se poser avant de choisir cette technologie ?",
                        'choices' => [
                            [
                                'choice_text' => "Si la blockchain apporte un avantage réel par rapport à une solution de base de données plus simple",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Si le projet permet de remplacer automatiquement la banque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Si chaque donnée doit être publiée sur internet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Si le prix du Bitcoin va augmenter",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le choix technologique doit partir du besoin. Une blockchain peut être pertinente dans certains contextes, mais une base de données classique peut être plus simple et suffisante pour un usage interne limité.",
                    ],
                    [
                        'question' => "Un étudiant affirme qu'une blockchain rend une information fausse automatiquement vraie parce qu'elle est inscrite dans le registre. Quelle erreur commet-il ?",
                        'choices' => [
                            [
                                'choice_text' => "L'intégrité du registre ne garantit pas que la donnée saisie à l'origine était correcte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il a raison, car la cryptographie vérifie toujours la vérité des données",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il confond la blockchain avec une assurance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il confond le registre avec une banque centrale",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une blockchain peut contribuer à l'intégrité de l'historique, mais elle ne garantit pas la véracité de l'information entrée initialement. Le principe «garbage in, garbage out» reste valable.",
                    ],
                ],
            ],
            [
                'title' => "Robo-advisory et investissement automatisé",
                'description' => "Comprendre comment les outils automatisés peuvent accompagner l'investissement et où se situent leurs limites.",
                'duration' => 23,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Un robo-advisor demande à un client son horizon d'investissement et sa tolérance au risque avant de proposer une allocation. Pourquoi ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour mieux adapter la proposition au profil et aux objectifs du client",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour garantir un rendement positif",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer le risque de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer les règles de connaissance du client",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le profil de risque, l'horizon et les objectifs sont des paramètres fondamentaux pour construire une allocation cohérente. Ils ne permettent cependant pas de garantir un résultat.",
                    ],
                    [
                        'question' => "Un algorithme propose de réduire les actions d'un portefeuille très exposé après avoir détecté une concentration excessive. Quelle logique suit-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Réduire la concentration afin d'améliorer la diversification du portefeuille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir la hausse des actions restantes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer tout risque de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Transformer automatiquement les actions en obligations d'État",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une forte concentration sur un seul actif ou secteur augmente le risque spécifique. Réduire cette concentration peut améliorer la diversification, sans supprimer le risque de marché.",
                    ],
                    [
                        'question' => "Pourquoi un client doit-il comprendre au moins les grandes lignes de l'allocation proposée par un robo-advisor ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'il reste exposé aux risques et doit vérifier que la stratégie correspond à ses objectifs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que l'algorithme ne fait jamais d'erreur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que le client devient gestionnaire de portefeuille professionnel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la technologie supprime toute responsabilité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'automatisation n'élimine ni les risques de marché ni le besoin de comprendre les grandes caractéristiques de la stratégie.",
                    ],
                    [
                        'question' => "Un robo-advisor rééquilibre un portefeuille lorsqu'un poids d'actif dépasse un seuil. Quel est l'objectif principal du rééquilibrage ?",
                        'choices' => [
                            [
                                'choice_text' => "Ramener les pondérations vers l'allocation cible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir que l'actif ayant monté restera gagnant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éliminer les frais de transaction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Prévoir exactement les mouvements futurs du marché",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le rééquilibrage vise à maintenir le portefeuille proche de ses pondérations cibles. Il ne cherche pas à prédire le marché et peut entraîner des coûts.",
                    ],
                    [
                        'question' => "Un client a besoin de son argent dans six mois mais demande une stratégie principalement investie en actifs très volatils. Quel point devrait attirer l'attention ?",
                        'choices' => [
                            [
                                'choice_text' => "La stratégie semble mal alignée avec un horizon très court et un besoin de disponibilité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le rendement est garanti par la technologie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La volatilité est sans importance à six mois",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le client n'a aucun risque tant qu'il utilise une application",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un horizon court et un besoin de liquidité rendent une forte exposition à des actifs volatils potentiellement inadaptée, car une baisse peut survenir au mauvais moment.",
                    ],
                    [
                        'question' => "Quelle différence simple existe entre automatisation et garantie de performance ?",
                        'choices' => [
                            [
                                'choice_text' => "Automatiser une décision ne garantit pas que cette décision produira un bon rendement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les deux sont synonymes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une décision automatisée ne peut jamais perdre de valeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La garantie de performance est incluse dans tout robo-advisor",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'automatisation concerne la manière dont la décision est exécutée. Elle ne supprime pas l'incertitude des marchés ni le risque de perte.",
                    ],
                    [
                        'question' => "Un service d'investissement automatisé facture 0,5 % de frais annuels sur les actifs. Sur 20 000 €, combien cela représente-t-il environ par an ?",
                        'choices' => [
                            [
                                'choice_text' => "100 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "10 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "500 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "1 000 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "0,5 % de 20 000 € = 20 000 × 0,005 = 100 €. Les frais réels peuvent dépendre de la méthode de calcul et d'éventuels frais supplémentaires.",
                    ],
                    [
                        'question' => "Pourquoi un robo-advisor peut-il demander régulièrement au client si sa situation a changé ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les objectifs, l'horizon ou la capacité à prendre des risques peuvent évoluer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que le rendement passé est toujours garanti",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer l'identité du client",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter automatiquement les frais",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un changement de situation financière ou d'objectifs peut rendre une allocation précédente moins pertinente. Les profils doivent donc être réévalués périodiquement.",
                    ],
                    [
                        'question' => "Un client choisit une stratégie équilibrée puis consulte l'application après une baisse de marché de 8 %. Pourquoi éviter une modification impulsive fondée uniquement sur cette baisse ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'une décision doit être replacée dans l'horizon, les objectifs et le risque initialement accepté",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les marchés remontent toujours le lendemain",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'une baisse de 8 % est impossible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que toute vente est gratuite",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une réaction à chaud peut éloigner le portefeuille de la stratégie initiale sans que les objectifs aient changé. L'évaluation doit tenir compte du plan complet et pas d'un seul mouvement.",
                    ],
                    [
                        'question' => "Quel avantage pratique peut offrir l'automatisation du rééquilibrage à un investisseur ?",
                        'choices' => [
                            [
                                'choice_text' => "Réduire les oublis et appliquer plus régulièrement une règle définie à l'avance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir l'absence de pertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Prévoir le cours de chaque action",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les frais des marchés",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'automatisation peut aider à appliquer une règle de manière régulière. Elle ne prédit pas les marchés et n'élimine ni les frais ni les pertes potentielles.",
                    ],
                ],
            ],
            [
                'title' => "Crowdfunding et financement participatif",
                'description' => "Comprendre les principaux modèles de crowdfunding et les risques pour les porteurs de projets et les investisseurs.",
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une jeune entreprise collecte de petites contributions auprès de nombreuses personnes pour financer le lancement d'un produit. Quel modèle décrit le mieux cette situation ?",
                        'choices' => [
                            [
                                'choice_text' => "Le crowdfunding",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le leasing bancaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le refinancement d'une banque centrale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La gestion passive",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le crowdfunding ou financement participatif permet à un projet de lever des fonds auprès d'un grand nombre de contributeurs ou investisseurs selon un modèle déterminé.",
                    ],
                    [
                        'question' => "Dans une campagne où les contributeurs reçoivent le produit plus tard en échange de leur contribution, de quel type de financement participatif s'agit-il principalement ?",
                        'choices' => [
                            [
                                'choice_text' => "Le crowdfunding avec contrepartie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un prêt interbancaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un swap de taux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une émission d'obligations d'État",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La contribution est associée à une contrepartie non financière, par exemple le produit ou un avantage. Ce mécanisme est distinct du financement participatif en prêt ou en capital.",
                    ],
                    [
                        'question' => "Une plateforme permet à des investisseurs de financer une PME en échange d'une participation au capital. Quel risque économique principal l'investisseur accepte-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque de perdre une partie ou la totalité de son capital si l'entreprise échoue",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un rendement garanti par la plateforme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une absence totale de volatilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une garantie automatique par la banque centrale",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un investissement en capital expose au succès de l'entreprise. La perte de capital est possible et la liquidité peut aussi être limitée selon le dispositif.",
                    ],
                    [
                        'question' => "Pourquoi le succès d'une campagne de crowdfunding ne prouve-t-il pas à lui seul la viabilité économique d'une entreprise ?",
                        'choices' => [
                            [
                                'choice_text' => "Le financement obtenu ne remplace pas l'analyse du modèle économique, des coûts et de la demande",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une campagne réussie garantit toujours les bénéfices futurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de contributeurs détermine automatiquement la marge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le financement participatif élimine le risque commercial",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une collecte peut montrer un intérêt initial, mais il faut encore vérifier les coûts, le marché, l'exécution, la concurrence et la capacité de l'entreprise à créer durablement de la valeur.",
                    ],
                    [
                        'question' => "Un projet de prêt participatif annonce un rendement élevé par rapport à un dépôt bancaire traditionnel. Quelle question doit naturellement se poser un investisseur ?",
                        'choices' => [
                            [
                                'choice_text' => "Quel niveau de risque et de probabilité de défaut accompagne ce rendement potentiel ?",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pourquoi le rendement est-il toujours garanti ?",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pourquoi les taux d'intérêt n'ont aucun rôle ?",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pourquoi le projet est forcément sans concurrence ?",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un rendement potentiel élevé peut refléter un risque plus important. L'investisseur doit examiner le risque de crédit, les garanties éventuelles et les conditions du projet.",
                    ],
                    [
                        'question' => "Une plateforme de crowdfunding explique clairement que les investissements peuvent être difficiles à revendre rapidement. Quelle notion est surtout décrite ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque de liquidité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque opérationnel d'un serveur uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de duration",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le risque de liquidité correspond à la difficulté de vendre ou récupérer rapidement un investissement à un prix raisonnable.",
                    ],
                    [
                        'question' => "Pourquoi une plateforme peut-elle utiliser plusieurs indicateurs pour évaluer un porteur de projet avant de présenter son dossier aux investisseurs ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour mieux apprécier sa capacité, ses risques et la qualité des informations disponibles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour garantir que tous les projets seront rentables",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer tout risque de défaut",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour fixer un taux de change officiel",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'analyse préalable vise à améliorer l'information disponible et à identifier certains risques. Elle ne transforme pas un projet en investissement sans risque.",
                    ],
                    [
                        'question' => "Une campagne dépasse largement son objectif initial. Quel point doit malgré tout être surveillé par le porteur de projet ?",
                        'choices' => [
                            [
                                'choice_text' => "Sa capacité opérationnelle à produire, livrer et financer les dépenses supplémentaires",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La suppression de tous les besoins de trésorerie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La garantie que les coûts unitaires resteront inchangés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'absence de toute obligation envers les contributeurs",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une collecte supérieure aux attentes peut créer une pression opérationnelle : produire plus, acheter des matières, gérer le stock et respecter les délais.",
                    ],
                    [
                        'question' => "Un investisseur place une petite somme sur dix projets participatifs différents plutôt que la totalité sur un seul. Quelle logique applique-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "La diversification",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couverture parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La spéculation certaine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La garantie bancaire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Répartir l'exposition sur plusieurs projets peut réduire le risque spécifique d'un projet, même si le risque global du crowdfunding demeure.",
                    ],
                    [
                        'question' => "Quel document ou information est particulièrement utile avant d'investir dans un projet participatif ?",
                        'choices' => [
                            [
                                'choice_text' => "Les conditions d'investissement, les risques, l'utilisation prévue des fonds et les hypothèses du projet",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Uniquement le logo de la plateforme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de publications du dirigeant sur les réseaux sociaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur de l'interface de la plateforme",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les décisions doivent être fondées sur les éléments économiques du projet : utilisation des fonds, structure de l'investissement, risques et hypothèses.",
                    ],
                ],
            ],
            [
                'title' => "P2P lending et crédit digital",
                'description' => "Découvrir les mécanismes du prêt entre particuliers ou entreprises via des plateformes numériques.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Dans un modèle P2P lending, quel est le rôle général de la plateforme ?",
                        'choices' => [
                            [
                                'choice_text' => "Mettre en relation des emprunteurs et des prêteurs selon un processus organisé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir automatiquement tous les prêts",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Devenir nécessairement la banque centrale du pays",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer le risque de crédit",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La plateforme organise généralement la mise en relation, l'évaluation ou la gestion du prêt selon son modèle. La nature exacte des services dépend du dispositif.",
                    ],
                    [
                        'question' => "Un emprunteur obtient un financement numérique après une analyse automatisée de ses données. Quel bénéfice potentiel cette automatisation peut-elle apporter ?",
                        'choices' => [
                            [
                                'choice_text' => "Accélérer l'étude de certaines demandes de crédit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir que l'emprunteur remboursera",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer le besoin de données",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Empêcher tous les défauts futurs",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'automatisation peut traiter rapidement certains critères. Elle ne garantit pas la solvabilité future et dépend de la qualité des données et du modèle.",
                    ],
                    [
                        'question' => "Un investisseur finance 100 % d'un seul prêt P2P et l'emprunteur fait défaut. Quelle faiblesse de portefeuille est particulièrement visible ?",
                        'choices' => [
                            [
                                'choice_text' => "Une forte concentration sur une seule exposition de crédit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une durée trop courte d'un swap",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification excessive",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une couverture parfaite",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une exposition unique concentre le risque de défaut sur un seul emprunteur. Répartir les montants entre plusieurs dossiers peut réduire cette concentration.",
                    ],
                    [
                        'question' => "Pourquoi une plateforme de crédit digital peut-elle utiliser des données historiques de remboursement ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour rechercher des signaux utiles à l'évaluation du risque de crédit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour garantir le rendement des investisseurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour fixer les taux de change mondiaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer le besoin de contrats",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les historiques peuvent aider à estimer la probabilité de défaut ou d'autres caractéristiques du crédit. Leur qualité, leur représentativité et leur usage doivent toutefois être examinés.",
                    ],
                    [
                        'question' => "Un modèle de scoring accorde un score élevé à presque tous les dossiers d'un nouveau segment qu'il connaît mal. Quel risque méthodologique faut-il envisager ?",
                        'choices' => [
                            [
                                'choice_text' => "Le modèle peut être mal calibré pour ce segment et produire des décisions moins fiables",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le modèle devient automatiquement plus précis",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de crédit disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le segment est nécessairement plus rentable",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un modèle entraîné sur une population différente peut moins bien fonctionner sur un nouveau segment. Il faut donc tester sa performance et son calibration.",
                    ],
                    [
                        'question' => "Un emprunteur demande une échéance plus longue pour réduire sa mensualité. Quel arbitrage simple peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "La mensualité peut baisser, mais le coût total des intérêts peut augmenter",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le coût total devient automatiquement nul",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La durée ne change jamais le coût",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de crédit disparaît",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "À taux et conditions comparables, étaler davantage les remboursements peut réduire la mensualité tout en augmentant le montant total d'intérêts payé.",
                    ],
                    [
                        'question' => "Une plateforme annonce un taux d'intérêt de 9 % pour un prêt mais précise que certains frais s'ajoutent. Que doit comparer l'investisseur ou l'emprunteur ?",
                        'choices' => [
                            [
                                'choice_text' => "Le coût ou rendement global selon l'ensemble des frais et conditions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Uniquement le taux affiché en gros caractères",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur du contrat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de notifications de l'application",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le taux nominal ne suffit pas toujours à mesurer le coût réel ou le rendement net. Il faut examiner les frais, commissions, calendrier des paiements et éventuelles pertes.",
                    ],
                    [
                        'question' => "Quel risque spécifique peut apparaître lorsqu'une plateforme de crédit numérique dépend d'un seul moteur de scoring externe ?",
                        'choices' => [
                            [
                                'choice_text' => "Une panne ou une erreur du fournisseur peut perturber l'octroi ou l'évaluation des crédits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les prêts deviennent automatiquement sans risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les emprunteurs n'ont plus besoin d'identité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les taux directeurs cessent d'exister",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une dépendance critique à un fournisseur externe crée un risque de tiers et de continuité. Un problème chez ce fournisseur peut affecter tout le processus de crédit.",
                    ],
                    [
                        'question' => "Pourquoi la diversification des prêteurs sur plusieurs dossiers P2P peut-elle être utile ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle répartit l'exposition à différents emprunteurs et réduit le poids d'un seul défaut",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit qu'aucun emprunteur ne fera défaut",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle transforme les prêts en dépôts bancaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime toutes les pertes possibles",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La diversification peut limiter l'impact d'un défaut individuel. Elle ne garantit pas l'absence de pertes et ne transforme pas le produit en dépôt bancaire.",
                    ],
                    [
                        'question' => "Un investisseur examine un prêt digital et constate que le taux proposé est élevé. Quel élément manque encore avant de décider ?",
                        'choices' => [
                            [
                                'choice_text' => "Une appréciation du risque de défaut, de la liquidité et des conditions du prêt",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La certitude que tous les taux élevés sont bons",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le prix d'une action de la banque centrale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur du site",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un rendement potentiel doit être mis en regard du risque. Le défaut, la liquidité et les conditions contractuelles sont indispensables pour comprendre l'investissement.",
                    ],
                ],
            ],
            [
                'title' => "IA, données et prise de décision en Finance",
                'description' => "Comprendre quelques usages concrets de l'intelligence artificielle dans les services financiers et leurs limites.",
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une banque utilise un modèle pour repérer les transactions qui ressemblent à des schémas inhabituels. Quel usage décrit-on ?",
                        'choices' => [
                            [
                                'choice_text' => "La détection d'anomalies ou de fraude",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La fixation automatique du taux directeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La création d'une nouvelle devise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La gestion d'un portefeuille sans données",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les modèles peuvent analyser de grands volumes de transactions pour identifier des comportements atypiques. Les alertes doivent ensuite être examinées selon le processus prévu.",
                    ],
                    [
                        'question' => "Pourquoi la qualité des données est-elle importante pour un modèle d'IA utilisé en Finance ?",
                        'choices' => [
                            [
                                'choice_text' => "Des données incomplètes ou biaisées peuvent conduire à des résultats de mauvaise qualité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les données n'ont aucun effet sur les modèles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une mauvaise donnée devient automatiquement correcte après traitement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'IA fonctionne uniquement sans données",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un modèle apprend ou raisonne à partir des données disponibles. Des données erronées, insuffisantes ou biaisées peuvent donc affecter les décisions produites.",
                    ],
                    [
                        'question' => "Une banque utilise un modèle pour estimer le risque de défaut d'un client. Quel principe prudent est pertinent avant de le déployer à grande échelle ?",
                        'choices' => [
                            [
                                'choice_text' => "Tester sa performance, sa robustesse et ses limites sur des données appropriées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le mettre immédiatement en production sans test",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supposer que tout modèle est infaillible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les cas atypiques",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un modèle doit être validé et surveillé avant et après son déploiement. Les performances peuvent se dégrader lorsque les données ou les comportements changent.",
                    ],
                    [
                        'question' => "Un modèle de détection de fraude génère énormément d'alertes mais très peu correspondent réellement à des fraudes. Quel problème cela peut-il créer ?",
                        'choices' => [
                            [
                                'choice_text' => "Un grand nombre de faux positifs et une surcharge des équipes de contrôle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une garantie parfaite de détection",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse automatique des frais bancaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une suppression des besoins de supervision",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des faux positifs trop nombreux consomment du temps et peuvent réduire l'efficacité du processus. Le modèle doit être calibré pour atteindre un compromis adapté.",
                    ],
                    [
                        'question' => "Une fintech présente un modèle de crédit mais ne peut pas expliquer pourquoi certains dossiers sont souvent refusés. Quel sujet de gouvernance cela peut-il soulever ?",
                        'choices' => [
                            [
                                'choice_text' => "La transparence et l'explicabilité des décisions automatisées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La duration d'une obligation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le coût d'un terminal de paiement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le calcul du rendement d'un dépôt",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Dans un contexte financier, il peut être nécessaire de comprendre et de documenter les facteurs à l'origine des décisions automatisées, notamment pour la gouvernance et le traitement équitable des clients.",
                    ],
                    [
                        'question' => "Un modèle performant sur les données de l'année dernière perd de la précision cette année. Quelle explication simple est possible ?",
                        'choices' => [
                            [
                                'choice_text' => "Les comportements ou caractéristiques des données ont changé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les algorithmes cessent toujours de fonctionner après un an",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les données récentes sont forcément mauvaises",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'ordinateur a perdu le risque de crédit",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les relations observées dans le passé peuvent évoluer. Ce phénomène peut nécessiter une surveillance et parfois une mise à jour du modèle.",
                    ],
                    [
                        'question' => "Une entreprise utilise une IA pour résumer des contrats financiers. Quel contrôle reste raisonnable ?",
                        'choices' => [
                            [
                                'choice_text' => "Vérifier les résumés importants avant de les utiliser pour une décision sensible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Considérer toute sortie de l'IA comme juridiquement parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les contrats originaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Laisser l'IA modifier seule les obligations contractuelles",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'IA peut accélérer le traitement documentaire, mais les sorties peuvent contenir des erreurs. Une revue humaine reste pertinente pour les décisions à fort enjeu.",
                    ],
                    [
                        'question' => "Une banque utilise des données alternatives pour compléter l'analyse d'un client. Quel risque faut-il surveiller ?",
                        'choices' => [
                            [
                                'choice_text' => "La pertinence, la qualité, la confidentialité et le risque de biais des données utilisées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La suppression automatique du risque de crédit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La certitude que les données alternatives sont toujours meilleures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'absence de toute obligation de contrôle",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des données alternatives peuvent enrichir l'analyse, mais elles doivent être examinées sous l'angle de leur qualité, de leur usage, de leur sécurité et de leurs biais potentiels.",
                    ],
                    [
                        'question' => "Une IA recommande une action sur la base de données anciennes et d'un contexte de marché très différent. Pourquoi faut-il être prudent ?",
                        'choices' => [
                            [
                                'choice_text' => "Le contexte actuel peut rendre les relations historiques moins pertinentes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les données anciennes garantissent toujours une bonne prévision",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une IA ne peut jamais utiliser de données récentes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les marchés financiers sont fixes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les modèles reflètent les données et hypothèses utilisées. Lorsque le contexte change fortement, leur pertinence peut diminuer.",
                    ],
                    [
                        'question' => "Quel est un bon usage de l'IA dans un processus financier comportant une décision importante ?",
                        'choices' => [
                            [
                                'choice_text' => "Utiliser l'IA comme outil d'aide avec des contrôles et une responsabilité humaine clairement définis",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Laisser l'algorithme agir sans surveillance dans tous les cas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Utiliser un modèle sans vérifier les données",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer toute documentation de la décision",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'IA peut améliorer l'efficacité d'un processus, mais la gouvernance doit préciser les contrôles, les validations et la responsabilité autour de la décision.",
                    ],
                ],
            ],
            [
                'title' => "Cybersécurité dans les services financiers",
                'description' => "Identifier les principales menaces cyber et les mesures de protection pertinentes pour les services financiers.",
                'duration' => 27,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Un employé reçoit un e-mail qui imite le logo de sa banque et demande de confirmer son mot de passe via un lien. Quel type d'attaque cela évoque-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Le phishing",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le rebalancement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le factoring",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le phishing consiste à utiliser des messages trompeurs pour pousser une personne à divulguer des informations ou à réaliser une action malveillante.",
                    ],
                    [
                        'question' => "Pourquoi l'authentification multifacteur peut-elle améliorer la sécurité d'un compte financier ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle ajoute une preuve supplémentaire au-delà du seul mot de passe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit qu'aucune fraude ne sera possible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime les attaques par ingénierie sociale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle rend inutile toute surveillance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Plusieurs facteurs d'authentification rendent la compromission d'un compte plus difficile qu'avec un simple mot de passe. Ils ne rendent toutefois pas toutes les attaques impossibles.",
                    ],
                    [
                        'question' => "Une fintech impose des droits d'accès différents aux équipes produit, finance et support. Quel principe applique-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Le principe du moindre privilège",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La parité de pouvoir d'achat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le levier financier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La duration",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le moindre privilège consiste à donner à chaque utilisateur ou système uniquement les accès nécessaires à sa fonction, réduisant ainsi l'exposition.",
                    ],
                    [
                        'question' => "Pourquoi une sauvegarde régulière des données doit-elle être testée, et pas seulement créée ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'il faut vérifier qu'elle peut réellement être restaurée après un incident",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu'une sauvegarde est toujours automatiquement valide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les sauvegardes ne contiennent jamais de données critiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter le taux d'intérêt",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une sauvegarde inutilisable en cas d'incident ne protège pas réellement l'entreprise. Les tests de restauration permettent de vérifier sa fiabilité.",
                    ],
                    [
                        'question' => "Une entreprise détecte une connexion inhabituelle sur un compte administrateur à 3 heures du matin. Quelle réaction est la plus prudente ?",
                        'choices' => [
                            [
                                'choice_text' => "Déclencher les contrôles et l'analyse prévus pour un événement de sécurité suspect",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ignorer l'événement jusqu'à la fin du trimestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Partager immédiatement le mot de passe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Désactiver toute la comptabilité sans analyse",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une connexion inhabituelle peut avoir une explication légitime, mais elle mérite une vérification selon les procédures de sécurité. L'objectif est de confirmer rapidement la nature de l'événement.",
                    ],
                    [
                        'question' => "Un salarié réutilise le même mot de passe pour son e-mail professionnel et un site personnel. Quel risque cela crée-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Une compromission du site personnel pourrait aider un attaquant à tenter d'accéder au compte professionnel",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le mot de passe devient automatiquement plus fort",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de phishing disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'entreprise gagne en sécurité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La réutilisation de mots de passe permet à une fuite sur un service de devenir un point d'entrée potentiel vers un autre service. Des mots de passe uniques réduisent ce risque.",
                    ],
                    [
                        'question' => "Pourquoi les mises à jour de sécurité sont-elles importantes dans une fintech ?",
                        'choices' => [
                            [
                                'choice_text' => "Elles peuvent corriger des vulnérabilités connues dans les logiciels et systèmes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles garantissent une rentabilité plus élevée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles empêchent tout incident humain",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles suppriment toutes les obligations réglementaires",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les correctifs peuvent réduire l'exposition à des vulnérabilités connues. Ils ne suffisent toutefois pas à eux seuls à couvrir tous les risques cyber.",
                    ],
                    [
                        'question' => "Une entreprise chiffre certaines données sensibles stockées sur ses systèmes. Quel objectif cherche-t-elle principalement ?",
                        'choices' => [
                            [
                                'choice_text' => "Réduire le risque qu'une personne non autorisée puisse exploiter directement les données si elle y accède",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir que les données sont toujours exactes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Accélérer toutes les transactions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Créer automatiquement une sauvegarde",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le chiffrement protège la confidentialité des données en les rendant illisibles sans la clé appropriée. Il ne garantit ni leur exactitude ni leur disponibilité.",
                    ],
                    [
                        'question' => "Quel comportement est le plus sûr lorsqu'un collaborateur reçoit un lien inattendu demandant des informations bancaires ?",
                        'choices' => [
                            [
                                'choice_text' => "Vérifier l'origine du message via un canal fiable et ne pas transmettre les informations avant confirmation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Cliquer rapidement avant l'expiration du lien",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Répondre avec son mot de passe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Transférer le message à tous les collègues",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les demandes inattendues doivent être vérifiées par un canal de confiance. L'urgence apparente est une technique fréquente dans les attaques d'ingénierie sociale.",
                    ],
                    [
                        'question' => "Pourquoi la cybersécurité est-elle un enjeu financier et pas seulement informatique ?",
                        'choices' => [
                            [
                                'choice_text' => "Une attaque peut entraîner des pertes, des interruptions de service, des coûts de remédiation et une atteinte à la confiance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La cybersécurité n'a jamais d'effet sur les revenus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les incidents cyber concernent uniquement le matériel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les coûts d'un incident sont toujours nuls",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une attaque peut affecter les opérations, les clients et les finances de l'entreprise. La cybersécurité devient donc un enjeu de continuité et de gestion des risques.",
                    ],
                ],
            ],
            [
                'title' => "Finance inclusive et innovation",
                'description' => "Examiner comment les technologies financières peuvent élargir l'accès aux services et quels obstacles demeurent.",
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une application permet à une personne sans agence bancaire à proximité d'effectuer des paiements depuis son téléphone. Quel bénéfice potentiel illustre-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Une amélioration de l'accès pratique aux services financiers",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une garantie de richesse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression de tous les frais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La création d'une monnaie officielle",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les services numériques peuvent réduire certaines barrières géographiques et faciliter l'accès à des moyens de paiement ou à d'autres services financiers.",
                    ],
                    [
                        'question' => "Pourquoi une fintech doit-elle tenir compte de la fracture numérique lorsqu'elle conçoit un service ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que certains utilisateurs peuvent avoir un accès limité à internet, aux smartphones ou aux compétences numériques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que tous les utilisateurs utilisent les mêmes équipements",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les services numériques ne nécessitent jamais d'éducation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que l'accès numérique est identique partout",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un service uniquement numérique peut exclure certaines populations. La conception doit donc considérer l'équipement, la connectivité et la maîtrise des outils.",
                    ],
                    [
                        'question' => "Une application propose un produit financier mais l'utilisateur ne comprend pas les frais. Quel problème peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Une mauvaise compréhension du coût réel et un risque de décision mal informée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse automatique du rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition du risque de crédit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une garantie de remboursement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une présentation claire des frais aide l'utilisateur à comparer les offres et à comprendre le coût réel du service.",
                    ],
                    [
                        'question' => "Une fintech permet d'ouvrir un compte à distance avec une procédure d'identification numérique. Quel gain potentiel peut en résulter ?",
                        'choices' => [
                            [
                                'choice_text' => "Réduire certaines étapes physiques et accélérer l'accès au service",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Supprimer toute vérification d'identité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Rendre toutes les ouvertures gratuites",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Garantir que tous les comptes seront immédiatement actifs",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'identification numérique peut simplifier le parcours d'entrée tout en maintenant des contrôles. Elle ne supprime pas les exigences de sécurité ou d'identité.",
                    ],
                    [
                        'question' => "Pourquoi la simplicité d'une interface peut-elle être particulièrement importante pour un service financier destiné à un large public ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut réduire les erreurs de navigation et rendre certaines opérations plus accessibles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit un meilleur rendement financier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle évite toute réglementation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime le besoin de support",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une interface claire peut diminuer les erreurs et améliorer l'accessibilité. Elle ne remplace pas les contrôles ni l'accompagnement lorsque celui-ci est nécessaire.",
                    ],
                    [
                        'question' => "Une fintech cible des travailleurs indépendants ayant des revenus irréguliers. Pourquoi son produit de crédit doit-il tenir compte de cette caractéristique ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que la capacité de remboursement peut être plus variable dans le temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les revenus irréguliers garantissent toujours le remboursement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que le risque de crédit disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que le client n'a besoin d'aucune analyse",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des revenus variables peuvent modifier les flux de trésorerie disponibles pour rembourser. Le produit et l'analyse du risque doivent en tenir compte.",
                    ],
                    [
                        'question' => "Quel exemple illustre le mieux un service financier accessible à un public éloigné des agences ?",
                        'choices' => [
                            [
                                'choice_text' => "Un portefeuille mobile permettant de payer et transférer des fonds avec un téléphone compatible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une salle de marché réservée aux grands investisseurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un logiciel installé uniquement sur un serveur bancaire interne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un contrat papier remis uniquement en agence",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un portefeuille mobile peut offrir des services de base sans exiger une présence physique dans une agence, sous réserve de l'infrastructure disponible.",
                    ],
                    [
                        'question' => "Une application traduit automatiquement les instructions financières dans plusieurs langues. Quel objectif contribue-t-elle à renforcer ?",
                        'choices' => [
                            [
                                'choice_text' => "L'accessibilité et la compréhension du service",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La garantie de rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La réduction automatique du risque de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression des contrôles d'identité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une meilleure accessibilité linguistique peut faciliter la compréhension et l'utilisation du service. Elle ne modifie pas les risques financiers sous-jacents.",
                    ],
                    [
                        'question' => "Pourquoi l'accès à un service financier ne suffit-il pas à prouver son utilité pour l'utilisateur ?",
                        'choices' => [
                            [
                                'choice_text' => "Il faut aussi considérer le coût, la compréhension, la qualité du service et son adéquation au besoin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'accès suffit toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un service financier est utile uniquement s'il est numérique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La gratuité garantit l'adéquation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une solution peut être facilement accessible mais coûteuse, mal comprise ou inadaptée au besoin. L'évaluation doit donc être plus large que la seule disponibilité.",
                    ],
                    [
                        'question' => "Une fintech propose une petite épargne automatique à chaque paiement. Quel comportement cherche-t-elle à faciliter ?",
                        'choices' => [
                            [
                                'choice_text' => "L'accumulation régulière d'une épargne à partir de petits montants",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'achat automatique d'actions risquées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression du budget",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le recours systématique au crédit",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Automatiser de petites mises de côté peut faciliter l'épargne régulière. L'outil n'empêche toutefois pas l'utilisateur de dépenser ou de modifier son comportement.",
                    ],
                ],
            ],
            [
                'title' => "Risques et gouvernance des FinTech",
                'description' => "Mettre en relation innovation, maîtrise des risques, dépendance aux prestataires et gouvernance.",
                'duration' => 28,
                'passing_score' => 63,
                'questions' => [
                    [
                        'question' => "Une fintech externalise son stockage informatique à un grand fournisseur cloud. Quel risque doit-elle malgré tout gérer ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque lié au fournisseur, à sa disponibilité, à sa sécurité et à la continuité du service",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Aucun risque car le fournisseur est externe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Uniquement le risque de change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de coupon obligataire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Externaliser ne transfère pas toute la responsabilité de gestion du risque. La fintech doit comprendre ses dépendances, les contrôles, les incidents possibles et les mécanismes de continuité.",
                    ],
                    [
                        'question' => "Une équipe produit lance une nouvelle fonctionnalité sans vérifier les effets possibles sur les données clients. Quel principe de gouvernance semble manquer ?",
                        'choices' => [
                            [
                                'choice_text' => "Une évaluation du risque et une revue avant mise en production",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse du nombre d'utilisateurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réduction des coûts marketing",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification du portefeuille",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les changements de produit doivent être évalués en fonction de leurs impacts sur les données, la sécurité et les opérations. Une revue préalable réduit les mauvaises surprises.",
                    ],
                    [
                        'question' => "Une fintech conserve des journaux détaillés des accès aux données sensibles. Quel avantage apporte cette pratique ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle facilite la détection et l'analyse de certaines actions ou incidents",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit qu'aucune fraude n'est possible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace tous les mots de passe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime le besoin de contrôles d'accès",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les journaux permettent de retracer certains événements et d'aider aux investigations. Ils complètent, mais ne remplacent pas, les autres contrôles de sécurité.",
                    ],
                    [
                        'question' => "Une entreprise financière ajoute une deuxième solution de paiement en secours. Quelle idée de continuité applique-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Réduire la dépendance à un seul prestataire critique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Augmenter automatiquement les frais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer tout risque opérationnel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Garantir le rendement du service",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une solution de secours peut réduire le risque qu'une panne d'un prestataire unique bloque complètement le service.",
                    ],
                    [
                        'question' => "Pourquoi une fintech doit-elle tester ses procédures de reprise après incident ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour vérifier que les plans fonctionnent réellement dans les conditions prévues",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les incidents sont impossibles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter le nombre de clients",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour modifier le taux de change",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un plan théorique peut échouer en pratique. Les tests permettent d'identifier les lacunes, les dépendances et les délais réels de reprise.",
                    ],
                    [
                        'question' => "Une fintech confie une fonction critique à un prestataire mais ne sait pas combien de temps une reprise prendrait en cas de panne. Quel point de gouvernance doit être amélioré ?",
                        'choices' => [
                            [
                                'choice_text' => "La gestion de la continuité et des niveaux de service attendus",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couleur du contrat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le rendement des obligations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le calcul du bénéfice par action",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les fonctions critiques doivent être associées à des attentes de disponibilité et de reprise. La gouvernance doit connaître les dépendances et les capacités du fournisseur.",
                    ],
                    [
                        'question' => "Pourquoi une fintech doit-elle séparer les environnements de développement et de production ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour limiter le risque qu'un test ou une modification non maîtrisée perturbe les services réels",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour augmenter automatiquement les revenus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour éviter toute maintenance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer les besoins de sauvegarde",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La séparation réduit le risque qu'une expérimentation ou une erreur de développement affecte directement les utilisateurs en production.",
                    ],
                    [
                        'question' => "Une entreprise vérifie régulièrement qu'un compte utilisateur dispose seulement des droits nécessaires. Quel contrôle effectue-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Une revue périodique des accès",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un calcul de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réévaluation d'un coupon",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une couverture de marché",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une revue régulière des accès permet d'identifier les droits devenus inutiles ou excessifs et de renforcer le principe du moindre privilège.",
                    ],
                    [
                        'question' => "Une fintech découvre qu'une fonctionnalité très utilisée dépend d'un composant logiciel abandonné par son éditeur. Pourquoi est-ce problématique ?",
                        'choices' => [
                            [
                                'choice_text' => "La maintenance et la correction de vulnérabilités peuvent devenir plus difficiles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le chiffre d'affaires augmente automatiquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le composant devient forcément sécurisé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les utilisateurs n'ont plus besoin de mises à jour",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un composant abandonné peut ne plus recevoir de correctifs ou de support. Cela augmente les risques de sécurité et de continuité.",
                    ],
                    [
                        'question' => "Quel comportement correspond le mieux à une gouvernance saine d'une fintech ?",
                        'choices' => [
                            [
                                'choice_text' => "Suivre les risques, documenter les responsabilités, tester les contrôles et corriger les faiblesses",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Lancer rapidement toute fonctionnalité sans contrôle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Considérer que la technologie élimine les risques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ne surveiller que les résultats financiers",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une gouvernance solide relie innovation, responsabilités, contrôles, suivi des risques et amélioration continue.",
                    ],
                ],
            ],
        ];

        foreach ($quizzesData as $quizData) {
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
