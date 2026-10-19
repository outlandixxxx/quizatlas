<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialRegulationComplianceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-regulation-compliance')->firstOrFail();

        $quizSettings = [
            ['duration' => 22, 'passing_score' => 55],
            ['duration' => 25, 'passing_score' => 58],
            ['duration' => 28, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 60],
            ['duration' => 28, 'passing_score' => 63],
            ['duration' => 27, 'passing_score' => 62],
            ['duration' => 28, 'passing_score' => 63],
            ['duration' => 27, 'passing_score' => 62],
            ['duration' => 30, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Comprendre la réglementation financière',
                'description' => 'Découvrir pourquoi les institutions financières sont réglementées et comment la conformité s\'intègre à leur fonctionnement quotidien.',
                'questions' => [
                    [
                        'question' => 'Une banque est soumise à des règles prudentielles et à des règles de conduite. Pourquoi les deux dimensions sont-elles utiles ?',
                        'explanation' => 'La réglementation financière couvre plusieurs objectifs. Les exigences prudentielles concernent notamment la solidité et les risques, tandis que les règles de conduite et de protection encadrent les relations avec les clients et les marchés.',
                        'choices' => [
                            ['choice_text' => 'Elles visent à garantir la rentabilité de l\'institution et à protéger ses actionnaires contre les pertes de marché', 'is_correct' => false],
                            ['choice_text' => 'Elles portent sur le même objet, la solidité financière, et la seconde catégorie reprend simplement la première', 'is_correct' => false],
                            ['choice_text' => 'Elles s\'appliquent l\'une aux grandes banques et l\'autre aux petites, selon la taille de l\'établissement', 'is_correct' => false],
                            ['choice_text' => 'Elles couvrent à la fois la solidité de l\'institution et la manière dont elle traite ses clients et ses activités', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un nouveau produit financier est lancé sans revue de conformité. Quel problème peut apparaître ?',
                        'explanation' => 'Une revue en amont peut repérer des problèmes de documentation, de publicité, de protection du client ou de fonctionnement. Attendre un incident est une approche plus risquée.',
                        'choices' => [
                            ['choice_text' => 'Une caractéristique du produit peut entrer en conflit avec une exigence applicable avant même sa commercialisation', 'is_correct' => true],
                            ['choice_text' => 'L\'autorité de contrôle devient responsable du produit et supporte les pertes éventuelles des clients', 'is_correct' => false],
                            ['choice_text' => 'Le produit est considéré comme conforme parce qu\'aucune revue n\'a signalé de problème à son sujet', 'is_correct' => false],
                            ['choice_text' => 'Les exigences de documentation ne s\'appliquent qu\'après la première année de commercialisation du produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une institution conserve-t-elle des procédures écrites pour les contrôles réglementaires ?',
                        'explanation' => 'Les procédures donnent un cadre commun aux équipes, facilitent la formation et permettent de vérifier si les contrôles sont réalisés comme prévu.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre à chaque salarié d\'adapter les contrôles à sa propre appréciation du risque', 'is_correct' => false],
                            ['choice_text' => 'Pour formaliser les étapes à suivre et rendre le contrôle reproductible et traçable', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le nombre de contrôles réalisés et alléger la charge de travail des équipes', 'is_correct' => false],
                            ['choice_text' => 'Pour informer les clients de la manière dont leurs données personnelles sont utilisées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un responsable affirme que la compliance ne concerne que le service juridique. Quelle réponse est la plus exacte ?',
                        'explanation' => 'La conformité repose sur plusieurs lignes de responsabilité. Les équipes opérationnelles doivent appliquer les règles, tandis que les fonctions de contrôle apportent supervision et expertise.',
                        'choices' => [
                            ['choice_text' => 'La conformité est confiée à la direction générale, car elle seule décide des orientations réglementaires de la banque', 'is_correct' => false],
                            ['choice_text' => 'La conformité relève de l\'audit interne, qui applique les règles à la place des équipes opérationnelles de la banque', 'is_correct' => false],
                            ['choice_text' => 'La conformité concerne surtout les clients, qui doivent vérifier eux-mêmes que leurs opérations respectent les règles', 'is_correct' => false],
                            ['choice_text' => 'La conformité concerne aussi les métiers et les fonctions de contrôle, car les opérations quotidiennes créent des risques réglementaires', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la formation régulière des salariés peut-elle réduire le risque de non-conformité ?',
                        'explanation' => 'Les produits, procédures et risques évoluent. Une formation à jour améliore la capacité des salariés à détecter les problèmes et à appliquer correctement les contrôles.',
                        'choices' => [
                            ['choice_text' => 'Elle aide les équipes à reconnaître les situations à risque et à appliquer les procédures à jour', 'is_correct' => true],
                            ['choice_text' => 'Elle permet à l\'institution de transférer la responsabilité des manquements aux salariés formés', 'is_correct' => false],
                            ['choice_text' => 'Elle rend inutile la supervision des équipes dès lors que chaque salarié a suivi la session', 'is_correct' => false],
                            ['choice_text' => 'Elle sert surtout à améliorer la rapidité de traitement des opérations par les équipes commerciales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une institution détecte une faiblesse dans un contrôle interne mais aucun incident n\'est encore survenu. Quelle attitude est la plus prudente ?',
                        'explanation' => 'Un contrôle défaillant représente déjà une exposition. La remédiation préventive réduit le risque qu\'un événement réel transforme la faiblesse en perte ou en non-conformité.',
                        'choices' => [
                            ['choice_text' => 'Surveiller la faiblesse sans la corriger tant qu\'aucune perte n\'est constatée', 'is_correct' => false],
                            ['choice_text' => 'Attendre le prochain audit externe pour traiter la faiblesse', 'is_correct' => false],
                            ['choice_text' => 'Informer les clients de la faiblesse avant même d\'avoir analysé son ampleur', 'is_correct' => false],
                            ['choice_text' => 'Corriger la faiblesse avant qu\'elle ne conduise à un incident important', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre le mieux un risque réglementaire ?',
                        'explanation' => 'Le risque réglementaire ou de non-conformité découle notamment du non-respect d\'une exigence. Les autres situations relèvent principalement d\'autres catégories de risque.',
                        'choices' => [
                            ['choice_text' => 'Une action détenue par une banque perd de la valeur à la suite d\'une baisse du marché', 'is_correct' => false],
                            ['choice_text' => 'Une institution publie une déclaration obligatoire avec des informations incorrectes', 'is_correct' => true],
                            ['choice_text' => 'Un emprunteur ne rembourse pas son crédit à la date d\'échéance prévue au contrat', 'is_correct' => false],
                            ['choice_text' => 'Une banque manque de liquidités pour régler ses engagements à court terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la direction doit-elle recevoir des informations sur les incidents de conformité importants ?',
                        'explanation' => 'La direction doit être informée des risques importants pour exercer sa responsabilité de gouvernance, allouer des ressources et suivre la remédiation.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir traiter elle-même chaque dossier de client concerné à la place des équipes de conformité', 'is_correct' => false],
                            ['choice_text' => 'Pour pouvoir réduire le budget des fonctions de contrôle dès que le nombre d\'incidents diminue', 'is_correct' => false],
                            ['choice_text' => 'Pour pouvoir exercer sa responsabilité de supervision et décider des actions correctives nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Pour pouvoir fixer les objectifs commerciaux des équipes en fonction du nombre d\'incidents constatés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe commerciale considère qu\'une règle peut être ignorée si le client est très rentable. Quel principe cette attitude viole-t-elle ?',
                        'explanation' => 'La valeur commerciale d\'un client ne justifie pas la suppression d\'un contrôle requis. Une gouvernance saine doit empêcher les exceptions arbitraires.',
                        'choices' => [
                            ['choice_text' => 'Le principe de séparation des tâches selon lequel la personne qui exécute une opération ne doit pas la valider seule', 'is_correct' => false],
                            ['choice_text' => 'Le principe de confidentialité selon lequel les informations d\'un client ne doivent pas être communiquées à des tiers', 'is_correct' => false],
                            ['choice_text' => 'Le principe de transparence selon lequel les frais d\'un produit doivent être présentés clairement au client', 'is_correct' => false],
                            ['choice_text' => 'Le principe selon lequel les contrôles de conformité ne doivent pas dépendre uniquement de l\'importance commerciale du client', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif décrit le mieux une bonne culture de conformité ?',
                        'explanation' => 'Une culture saine encourage la transparence, l\'escalade des problèmes et la responsabilité. Réduire artificiellement le nombre d\'incidents ne réduit pas le risque réel.',
                        'choices' => [
                            ['choice_text' => 'Limiter la remontée des problèmes aux incidents graves afin de préserver l\'image de l\'institution', 'is_correct' => false],
                            ['choice_text' => 'Confier la responsabilité des règles à une seule équipe et dispenser les autres de s\'en préoccuper', 'is_correct' => false],
                            ['choice_text' => 'Faire remonter les problèmes, traiter les risques et encourager des comportements cohérents avec les règles', 'is_correct' => true],
                            ['choice_text' => 'Mesurer la performance des équipes d\'abord sur les résultats commerciaux, les contrôles passant au second plan', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'KYC et identification du client',
                'description' => 'Mettre en pratique les principes de Know Your Customer lors de l\'entrée en relation et du suivi du dossier client.',
                'questions' => [
                    [
                        'question' => 'Lorsqu\'une banque ouvre un compte, pourquoi vérifie-t-elle l\'identité du demandeur ?',
                        'explanation' => 'L\'identification permet d\'établir qui est réellement le client. Elle constitue une base des contrôles KYC et d\'autres obligations de vigilance.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer sa capacité de remboursement et fixer le montant du crédit qui lui sera accordé', 'is_correct' => false],
                            ['choice_text' => 'Pour s\'assurer de l\'identité de la personne et respecter les contrôles applicables', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer son rendement attendu et lui proposer des produits d\'épargne adaptés à son profil', 'is_correct' => false],
                            ['choice_text' => 'Pour enregistrer ses préférences de communication et lui envoyer des offres personnalisées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client présente un document d\'identité expiré. Que doit faire le conseiller ?',
                        'explanation' => 'Une identité valide doit être vérifiée selon le processus applicable. Les informations ne doivent jamais être inventées ou remplacées arbitrairement.',
                        'choices' => [
                            ['choice_text' => 'Suivre la procédure prévue pour obtenir une pièce valide ou une autre vérification acceptable', 'is_correct' => true],
                            ['choice_text' => 'Accepter le document expiré si la photographie reste ressemblante et si le client est connu du conseiller', 'is_correct' => false],
                            ['choice_text' => 'Demander au client une simple déclaration écrite certifiant son identité, sans autre justificatif', 'is_correct' => false],
                            ['choice_text' => 'Demander l\'avis d\'un collègue et valider l\'identité s\'il reconnaît le client dans l\'agence', 'is_correct' => false],
                        ],
                    ],
                    [
                                                'question' => 'Dans le cadre de la vigilance contre le blanchiment, quel est l’objectif principal de la collecte d’informations sur l’activité professionnelle ou commerciale du client ?',
                        'explanation' => 'La nature de l\'activité aide à définir le profil du client et fournit un point de comparaison pour la surveillance des opérations.',
                        'choices' => [
                            ['choice_text' => 'Cela permet de fixer le taux d\'intérêt applicable à ses placements en fonction de son secteur d\'activité', 'is_correct' => false],
                            ['choice_text' => 'Cela aide à comprendre son profil et à apprécier si les opérations futures sont cohérentes avec la relation attendue', 'is_correct' => true],
                            ['choice_text' => 'Cela dispense la banque de contrôler l\'origine des fonds lorsque l\'activité déclarée semble crédible', 'is_correct' => false],
                            ['choice_text' => 'Cela sert à vérifier la solvabilité du client et à décider du plafond de crédit qui lui sera accordé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise ouvre un compte en déclarant une activité locale de petite taille, puis reçoit des flux internationaux très importants. Quel réflexe est pertinent ?',
                        'explanation' => 'Un écart important entre le profil déclaré et l\'activité observée peut justifier une mise à jour KYC et une analyse plus approfondie.',
                        'choices' => [
                            ['choice_text' => 'Maintenir le profil initial inchangé, car un client déjà identifié ne peut pas modifier son activité', 'is_correct' => false],
                            ['choice_text' => 'Revoir le profil du client et demander des explications ou justificatifs adaptés', 'is_correct' => true],
                            ['choice_text' => 'Limiter l\'analyse au montant des flux, sans s\'intéresser à l\'activité déclarée à l\'ouverture', 'is_correct' => false],
                            ['choice_text' => 'Attendre que le client signale lui-même le changement de son activité lors du prochain renouvellement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les informations KYC doivent-elles être mises à jour régulièrement ?',
                        'explanation' => 'Un dossier qui devient obsolète peut conduire à une mauvaise évaluation du risque. Les informations importantes doivent donc être actualisées selon une approche appropriée.',
                        'choices' => [
                            ['choice_text' => 'Parce que l\'identité, l\'activité, les propriétaires ou les circonstances du client peuvent évoluer', 'is_correct' => true],
                            ['choice_text' => 'Parce que les taux d\'intérêt et les frais appliqués au compte sont révisés chaque année', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque doit remplacer les anciennes pièces par des copies plus lisibles pour ses archives', 'is_correct' => false],
                            ['choice_text' => 'Parce que les systèmes informatiques de la banque effacent les données de plus d\'un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne agit pour une société et prétend ne pas connaître le propriétaire réel de celle-ci. Quel point peut nécessiter une vérification supplémentaire ?',
                        'explanation' => 'Selon les exigences applicables, l\'institution doit comprendre la propriété et le contrôle pertinents, notamment lorsqu\'il faut identifier le bénéficiaire effectif.',
                        'choices' => [
                            ['choice_text' => 'L\'identification des personnes qui contrôlent ou bénéficient réellement de la relation', 'is_correct' => true],
                            ['choice_text' => 'La vérification de la solvabilité de la société et de sa capacité à rembourser un crédit éventuel', 'is_correct' => false],
                            ['choice_text' => 'L\'évaluation de la valeur de marché de la société et de son chiffre d\'affaires prévisionnel', 'is_correct' => false],
                            ['choice_text' => 'La vérification que le compte pourra être utilisé pour des paiements en devises étrangères', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client refuse de fournir une information KYC nécessaire à l\'ouverture du compte. Quelle réaction est la plus professionnelle ?',
                        'explanation' => 'Une information requise ne doit pas être inventée. L\'institution doit expliquer la demande puis appliquer le processus prévu si le client ne coopère pas.',
                        'choices' => [
                            ['choice_text' => 'Accepter une déclaration orale du client et noter l\'information comme vérifiée dans le dossier', 'is_correct' => false],
                            ['choice_text' => 'Ouvrir le compte et reporter la demande jusqu\'à ce que le client juge utile de répondre', 'is_correct' => false],
                            ['choice_text' => 'Demander au client de signer une décharge et poursuivre l\'ouverture du compte sans l\'information', 'is_correct' => false],
                            ['choice_text' => 'Expliquer la nécessité de l\'information et appliquer la procédure si elle n\'est pas fournie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un dossier KYC cohérent est-il utile pour la surveillance future ?',
                        'explanation' => 'Le profil initial constitue une référence pour comprendre ensuite si les transactions et comportements restent cohérents avec la relation attendue.',
                        'choices' => [
                            ['choice_text' => 'Il fournit une base de comparaison permettant de repérer des changements inhabituels dans le comportement du client', 'is_correct' => true],
                            ['choice_text' => 'Il sert à classer les opérations du client selon leur montant et leur devise pour la comptabilité', 'is_correct' => false],
                            ['choice_text' => 'Il établit la preuve que le client est de bonne foi et rend les alertes de transaction superflues', 'is_correct' => false],
                            ['choice_text' => 'Il détermine le niveau de commissions que la banque pourra facturer au client sur ses opérations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client fournit deux adresses différentes sur plusieurs documents sans explication. Que doit faire l\'équipe KYC ?',
                        'explanation' => 'Les incohérences sont des signaux qui doivent être clarifiés. Un dossier fiable nécessite des informations cohérentes et documentées.',
                        'choices' => [
                            ['choice_text' => 'Retenir l\'adresse figurant sur le document le plus récent sans demander d\'explication au client', 'is_correct' => false],
                            ['choice_text' => 'Enregistrer les deux adresses comme valides et ne plus examiner le dossier par la suite', 'is_correct' => false],
                            ['choice_text' => 'Demander au client de choisir l\'adresse qu\'il préfère et la saisir sans pièce justificative', 'is_correct' => false],
                            ['choice_text' => 'Chercher à clarifier l\'incohérence et conserver une information correctement documentée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données KYC doivent-elles être protégées ?',
                        'explanation' => 'Les dossiers KYC peuvent contenir des données sensibles. L\'accès et la conservation doivent être contrôlés selon les exigences applicables.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elles servent à fixer les tarifs et que leur divulgation avantagerait les concurrents', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles peuvent contenir des informations personnelles et financières sensibles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elles contiennent des secrets de fabrication des produits financiers de la banque', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles appartiennent à la banque, qui les protège pour préserver son droit de propriété', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'AML et surveillance des opérations',
                'description' => 'Identifier les situations nécessitant une analyse AML et comprendre le rôle des alertes et de l\'enquête transactionnelle.',
                'questions' => [
                    [
                        'question' => 'Une banque constate qu\'un compte habituellement peu actif reçoit soudainement de nombreux virements importants. Pourquoi cela peut-il déclencher une alerte AML ?',
                        'explanation' => 'Une alerte signale un comportement à examiner, pas une culpabilité. Le profil du client et le contexte économique des opérations sont essentiels.',
                        'choices' => [
                            ['choice_text' => 'Le montant dépasse un seuil fixe au-delà duquel la banque doit refuser le virement', 'is_correct' => false],
                            ['choice_text' => 'Le titulaire du compte a récemment changé de conseiller, ce qui impose d\'ouvrir une enquête', 'is_correct' => false],
                            ['choice_text' => 'Le comportement s\'écarte du profil habituel et peut nécessiter une analyse du contexte', 'is_correct' => true],
                            ['choice_text' => 'Les virements proviennent d\'un pays étranger, ce qui constitue en soi une infraction aux règles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une transaction doit-elle être analysée avec les opérations qui l\'entourent ?',
                        'explanation' => 'L\'analyse dans le temps permet de repérer des répétitions, fractionnements, transferts en chaîne ou changements de comportement qui ne sont pas visibles sur une seule opération.',
                        'choices' => [
                            ['choice_text' => 'Les opérations voisines permettent de calculer le taux de change moyen applicable à la transaction', 'is_correct' => false],
                            ['choice_text' => 'Un schéma suspect peut apparaître seulement lorsque plusieurs opérations sont considérées ensemble', 'is_correct' => true],
                            ['choice_text' => 'L\'analyse groupée permet à la banque de réduire les frais facturés aux clients actifs', 'is_correct' => false],
                            ['choice_text' => 'Le contexte des opérations voisines remplace la vérification de l\'identité du client à chaque virement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise fournit des contrats et factures expliquant des paiements internationaux inhabituels. Quel effet cette information peut-elle avoir ?',
                        'explanation' => 'Une explication documentée peut rendre les opérations cohérentes avec l\'activité. Elle ne signifie pas que tous les autres contrôles deviennent inutiles.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de classer définitivement le client comme faible risque, sans nouvelle analyse des opérations futures', 'is_correct' => false],
                            ['choice_text' => 'Elle transfère à l\'entreprise la responsabilité de l\'alerte, qui n\'a plus à être examinée par la banque', 'is_correct' => false],
                            ['choice_text' => 'Elle prouve que les paiements sont légaux dès lors que les documents sont signés par l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle peut fournir une explication économique cohérente et aider à résoudre l\'alerte si les éléments sont vérifiés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d\'un système AML automatisé ?',
                        'explanation' => 'L\'automatisation permet de traiter de grands volumes et de générer des alertes. L\'analyse humaine et la gouvernance restent indispensables.',
                        'choices' => [
                            ['choice_text' => 'Décider seul du blocage des comptes suspects et informer les autorités sans intervention humaine', 'is_correct' => false],
                            ['choice_text' => 'Vérifier l\'identité des clients lors de l\'ouverture de compte à partir des pièces fournies', 'is_correct' => false],
                            ['choice_text' => 'Repérer certains scénarios ou anomalies afin de transmettre des alertes à analyser', 'is_correct' => true],
                            ['choice_text' => 'Calculer le niveau de fonds propres que la banque doit détenir face à ses opérations à risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un taux élevé de faux positifs dans un système AML peut-il poser un problème ?',
                        'explanation' => 'Trop de faux positifs consomment des ressources et peuvent réduire l\'efficacité du dispositif. Le calibrage du système doit donc être suivi.',
                        'choices' => [
                            ['choice_text' => 'Les clients concernés peuvent demander à la banque une indemnisation pour chaque alerte injustifiée', 'is_correct' => false],
                            ['choice_text' => 'Le système cesse de comparer les opérations au profil des clients et ne produit plus d\'alertes', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de clients de la banque diminue parce que les comptes concernés sont fermés par le système', 'is_correct' => false],
                            ['choice_text' => 'Les équipes peuvent être submergées d\'alertes et consacrer moins de temps aux cas réellement pertinents', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un analyste clôt une alerte parce qu\'il a trouvé une explication plausible. Que doit-il faire en plus ?',
                        'explanation' => 'Une analyse doit être traçable. La documentation permet de justifier pourquoi l\'alerte a été clôturée et facilite les contrôles ultérieurs.',
                        'choices' => [
                            ['choice_text' => 'Informer le client que son compte avait fait l\'objet d\'une alerte et d\'une analyse', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l\'alerte du système pour que les indicateurs de la banque restent propres', 'is_correct' => false],
                            ['choice_text' => 'Documenter les faits, les éléments examinés et la décision selon la procédure', 'is_correct' => true],
                            ['choice_text' => 'Faire valider l\'explication par le client lui-même avant de clore le dossier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios AML doivent-ils évoluer avec le temps ?',
                        'explanation' => 'Les typologies et risques évoluent. Les scénarios de surveillance doivent donc être régulièrement évalués et ajustés.',
                        'choices' => [
                            ['choice_text' => 'Les règles de calcul des intérêts des comptes évoluent chaque année et modifient les seuils d\'alerte', 'is_correct' => false],
                            ['choice_text' => 'Les comportements criminels, produits et méthodes de contournement peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Les clients de la banque modifient leurs habitudes de consommation à chaque saison de l\'année', 'is_correct' => false],
                            ['choice_text' => 'Les logiciels de surveillance deviennent moins performants avec l\'âge et doivent être renouvelés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un compte présente une série de petits virements reçus puis transférés rapidement à plusieurs bénéficiaires sans justification apparente. Quel point mérite une attention particulière ?',
                        'explanation' => 'L\'analyse AML doit examiner le comportement global : origine des fonds, destinations, fréquence et cohérence avec l\'activité connue.',
                        'choices' => [
                            ['choice_text' => 'Le schéma global des flux et la logique économique des opérations', 'is_correct' => true],
                            ['choice_text' => 'Le montant de chaque virement pris isolément par rapport au seuil de contrôle', 'is_correct' => false],
                            ['choice_text' => 'L\'ancienneté du compte et le nombre de conseillers successifs', 'is_correct' => false],
                            ['choice_text' => 'La devise des virements et les frais bancaires facturés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre une alerte AML et une conclusion de fraude ?',
                        'explanation' => 'Une alerte est un signal généré par des règles ou analyses. Il faut ensuite examiner les faits avant de décider de la suite.',
                        'choices' => [
                            ['choice_text' => 'Une alerte indique un comportement à examiner ; elle ne prouve pas à elle seule une infraction', 'is_correct' => true],
                            ['choice_text' => 'Une alerte porte sur les clients de la banque alors qu\'une fraude ne concerne que le personnel', 'is_correct' => false],
                            ['choice_text' => 'Une alerte établit une infraction ; la fraude est la qualification pénale qui lui est donnée ensuite', 'is_correct' => false],
                            ['choice_text' => 'Une alerte concerne les opérations en espèces ; la fraude concerne les opérations par carte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement est le plus approprié pour un analyste AML face à un dossier complexe ?',
                        'explanation' => 'L\'analyse AML doit rester factuelle et traçable. Les dossiers complexes peuvent nécessiter une escalade vers les fonctions spécialisées.',
                        'choices' => [
                            ['choice_text' => 'Conclure rapidement à partir de l\'impression générale du dossier et clore l\'alerte pour limiter les délais', 'is_correct' => false],
                            ['choice_text' => 'Contacter le client pour l\'informer de l\'analyse en cours et lui demander de corriger ses opérations', 'is_correct' => false],
                            ['choice_text' => 'Rassembler les faits, documenter l\'analyse et escalader le dossier selon la procédure lorsque nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Attendre que le dossier atteigne un seuil de montant avant de commencer toute analyse approfondie', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sanctions et filtrage',
                'description' => 'Apprendre à traiter les alertes de sanctions, les faux positifs et les contrôles sur les personnes et entités concernées.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une institution filtre-t-elle certaines transactions contre des listes de sanctions ?',
                        'explanation' => 'Le filtrage permet d\'identifier des correspondances potentielles avec des restrictions. Les règles et listes exactes dépendent du cadre applicable.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les personnes, entités ou situations qui peuvent faire l\'objet de restrictions applicables', 'is_correct' => true],
                            ['choice_text' => 'Pour évaluer la solvabilité des personnes et entités avant de leur accorder un crédit ou une garantie', 'is_correct' => false],
                            ['choice_text' => 'Pour repérer les clients dont le patrimoine justifie une offre de gestion privée plus personnalisée', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que les opérations des clients respectent le niveau de risque de leur profil d\'investisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un nom de client ressemble fortement à un nom présent sur une liste de sanctions, mais la date de naissance est différente. Que faut-il faire ?',
                        'explanation' => 'Une correspondance de nom peut être un faux positif. Les identifiants supplémentaires aident à distinguer les personnes ou entités concernées.',
                        'choices' => [
                            ['choice_text' => 'Se fier au seul nom du client et considérer la correspondance comme avérée par prudence', 'is_correct' => false],
                            ['choice_text' => 'Comparer les identifiants disponibles avant de conclure à une véritable correspondance', 'is_correct' => true],
                            ['choice_text' => 'Transmettre immédiatement le dossier aux autorités comme correspondance confirmée avec la liste', 'is_correct' => false],
                            ['choice_text' => 'Demander au client de choisir un autre nom d\'usage pour éviter de nouvelles alertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système de filtrage peut-il produire beaucoup d\'alertes sur des clients légitimes ?',
                        'explanation' => 'Les outils de matching utilisent des critères qui peuvent produire des similitudes. Une revue humaine permet de résoudre ces faux positifs.',
                        'choices' => [
                            ['choice_text' => 'Le système compare le solde des comptes aux montants cités dans les listes de sanctions', 'is_correct' => false],
                            ['choice_text' => 'Les clients légitimes figurent par erreur sur les listes à la suite de leur ouverture de compte', 'is_correct' => false],
                            ['choice_text' => 'Des personnes différentes peuvent partager des noms ou des informations similaires à celles d\'une liste', 'is_correct' => true],
                            ['choice_text' => 'Le système est paramétré pour signaler les clients dont la nationalité diffère de celle de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une transaction internationale déclenche une alerte de sanctions. Quelle action est la plus prudente avant sa libération ?',
                        'explanation' => 'L\'alerte doit être examinée avant la décision. Les procédures de sanctions imposent souvent des contrôles et une documentation spécifiques.',
                        'choices' => [
                            ['choice_text' => 'Libérer le paiement et poursuivre la revue après son exécution pour ne pas retarder le client', 'is_correct' => false],
                            ['choice_text' => 'Rejeter définitivement le paiement et clôturer l\'alerte sans examiner les éléments disponibles', 'is_correct' => false],
                            ['choice_text' => 'Demander au client de fractionner le paiement en montants plus faibles pour éviter l\'alerte', 'is_correct' => false],
                            ['choice_text' => 'Suivre la procédure de revue et vérifier les éléments d\'identification et de transaction', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les référentiels de filtrage doivent-ils être maintenus à jour ?',
                        'explanation' => 'Un système de filtrage ne peut être fiable si les données de référence sont obsolètes. La mise à jour fait partie du contrôle.',
                        'choices' => [
                            ['choice_text' => 'Les listes et informations pertinentes peuvent évoluer', 'is_correct' => true],
                            ['choice_text' => 'Les taux de change utilisés pour les paiements varient en continu', 'is_correct' => false],
                            ['choice_text' => 'Les frais bancaires appliqués aux clients sont révisés', 'is_correct' => false],
                            ['choice_text' => 'Les autorités exigent un changement de logiciel de filtrage chaque année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société change son nom commercial mais garde les mêmes propriétaires et dirigeants. Pourquoi le changement de nom n\'est-il pas suffisant ?',
                        'explanation' => 'La relation avec des listes de sanctions ne dépend pas seulement du nom commercial. L\'identité, la propriété et le contrôle peuvent être essentiels à l\'analyse.',
                        'choices' => [
                            ['choice_text' => 'Le nouveau nom commercial doit être déclaré à l\'autorité avant que le filtrage puisse l\'examiner', 'is_correct' => false],
                            ['choice_text' => 'Une société qui change de nom perd son numéro d\'identification et doit rouvrir son dossier', 'is_correct' => false],
                            ['choice_text' => 'Le filtrage ne s\'applique qu\'aux noms de personnes physiques, pas aux sociétés', 'is_correct' => false],
                            ['choice_text' => 'Le filtrage doit aussi tenir compte des personnes et autres identifiants pertinents', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision de filtrage doit-elle être documentée ?',
                        'explanation' => 'La documentation crée une piste d\'audit : éléments examinés, analyse effectuée et décision prise.',
                        'choices' => [
                            ['choice_text' => 'Pour transmettre chaque dossier à l\'autorité de supervision afin qu\'elle valide la décision', 'is_correct' => false],
                            ['choice_text' => 'Pour conserver la justification de la décision et permettre un contrôle ultérieur', 'is_correct' => true],
                            ['choice_text' => 'Pour compléter les listes officielles avec les décisions prises par la banque', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer la productivité des analystes en fonction du nombre d\'alertes traitées par jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste ne dispose pas de suffisamment d\'informations pour écarter une alerte. Quelle approche est la plus prudente ?',
                        'explanation' => 'Lorsque les informations sont insuffisantes, l\'escalade permet d\'obtenir une analyse complémentaire et d\'éviter une décision non fondée.',
                        'choices' => [
                            ['choice_text' => 'Clore l\'alerte comme faux positif en notant que les informations manquantes étaient probablement sans importance', 'is_correct' => false],
                            ['choice_text' => 'Libérer la transaction sous réserve et demander des informations au client dans les semaines suivantes', 'is_correct' => false],
                            ['choice_text' => 'Rejeter définitivement la transaction sans en informer l\'équipe chargée de la revue des cas complexes', 'is_correct' => false],
                            ['choice_text' => 'Escalader le dossier selon la procédure plutôt que de supposer qu\'il s\'agit d\'un faux positif', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît si une institution désactive son filtrage pour accélérer les paiements ?',
                        'explanation' => 'Supprimer un contrôle critique pour gagner du temps peut exposer l\'institution à des transactions qui auraient dû être bloquées, arrêtées ou examinées.',
                        'choices' => [
                            ['choice_text' => 'Elle accroît le risque de change sur les paiements internationaux traités plus rapidement', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue le nombre de faux positifs sans modifier la capacité à détecter les cas réels', 'is_correct' => false],
                            ['choice_text' => 'Elle transfère la responsabilité du contrôle aux banques correspondantes qui reçoivent les paiements', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente le risque de traiter des opérations soumises à des restrictions applicables', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le calibrage d\'un système de sanctions cherche-t-il un équilibre entre sensibilité et bruit ?',
                        'explanation' => 'Un système trop permissif peut manquer des correspondances, tandis qu\'un système trop strict peut générer trop de faux positifs. Le calibrage doit être contrôlé.',
                        'choices' => [
                            ['choice_text' => 'Pour maximiser le nombre d\'alertes afin de prouver aux autorités que le système fonctionne', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire le nombre de faux positifs jusqu\'à ce que le système ne génère plus d\'alerte', 'is_correct' => false],
                            ['choice_text' => 'Pour détecter les cas pertinents tout en évitant un volume ingérable de faux positifs', 'is_correct' => true],
                            ['choice_text' => 'Pour aligner le nombre d\'alertes sur la taille de l\'équipe d\'analystes disponible', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Customer Due Diligence et approche fondée sur le risque',
                'description' => 'Comprendre comment le niveau de vigilance peut être adapté au profil de risque du client et de la relation.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une institution utilise-t-elle une approche fondée sur le risque ?',
                        'explanation' => 'Une approche fondée sur le risque cherche à concentrer davantage de ressources sur les situations présentant davantage de risque, tout en gardant des contrôles appropriés pour l\'ensemble des relations.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter les contrôles aux clients déjà signalés par les autorités de supervision', 'is_correct' => false],
                            ['choice_text' => 'Pour classer les clients selon leur rentabilité et concentrer les contrôles sur les plus rentables', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer l\'analyse des opérations par une simple note de risque attribuée à l\'ouverture du compte', 'is_correct' => false],
                            ['choice_text' => 'Pour adapter l\'intensité des contrôles à la nature et au niveau des risques identifiés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un client présente plusieurs caractéristiques qui augmentent son niveau de risque selon le cadre interne. Quelle conséquence peut être appropriée ?',
                        'explanation' => 'Un risque plus élevé peut justifier davantage d\'informations, une surveillance accrue ou des validations supplémentaires. La mesure exacte dépend du cadre applicable.',
                        'choices' => [
                            ['choice_text' => 'Une vigilance renforcée et des vérifications supplémentaires selon la procédure', 'is_correct' => true],
                            ['choice_text' => 'Un maintien du niveau de contrôle standard, le risque étant déjà couvert par le profil initial', 'is_correct' => false],
                            ['choice_text' => 'Un transfert du dossier à un autre établissement financier qui gérera le risque à sa place', 'is_correct' => false],
                            ['choice_text' => 'Une suspension des opérations du client tant que le risque n\'est pas ramené à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                                                'question' => 'Dans le cadre de la vigilance contre le blanchiment, pourquoi comprendre l’objectif d’une relation client est-il utile pour surveiller ses opérations ?',
                        'explanation' => 'La finalité de la relation fournit un contexte. Les opérations peuvent ensuite être comparées à ce profil pour détecter des changements ou anomalies.',
                        'choices' => [
                            ['choice_text' => 'Cela aide à déterminer si les opérations observées sont cohérentes avec l\'usage attendu du compte', 'is_correct' => true],
                            ['choice_text' => 'Cela permet de proposer au client des produits adaptés à ses besoins pour augmenter les ventes', 'is_correct' => false],
                            ['choice_text' => 'Cela permet de fixer le niveau des frais en fonction de la taille de la relation', 'is_correct' => false],
                            ['choice_text' => 'Cela sert à vérifier que le client dispose des fonds nécessaires pour ouvrir le compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise déclare une activité de conseil mais reçoit principalement des paiements correspondant à des ventes de marchandises. Que faut-il faire ?',
                        'explanation' => 'Un décalage entre l\'activité déclarée et les flux peut nécessiter une mise à jour et une analyse. Il faut d\'abord comprendre la situation avant de décider.',
                        'choices' => [
                            ['choice_text' => 'Conserver le dossier tel quel, car l\'activité déclarée à l\'ouverture fait foi pour la banque', 'is_correct' => false],
                            ['choice_text' => 'Corriger l\'activité du dossier d\'après les paiements reçus sans consulter le client', 'is_correct' => false],
                            ['choice_text' => 'Revoir les informations du dossier et demander des explications pour comprendre l\'activité réelle', 'is_correct' => true],
                            ['choice_text' => 'Rejeter les paiements de ventes de marchandises reçus à partir de ce jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des documents sur la source des fonds peuvent-ils être demandés dans certaines situations ?',
                        'explanation' => 'Selon le niveau de risque et le type de relation, des informations supplémentaires peuvent aider à comprendre l\'origine des fonds et la cohérence économique des opérations.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer la capacité du client à rembourser un prêt et fixer le taux qui lui sera proposé', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le rendement du placement et choisir la devise dans laquelle les fonds seront investis', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir l\'accord de l\'ancien établissement du client avant de transférer ses fonds', 'is_correct' => false],
                            ['choice_text' => 'Pour mieux comprendre l\'origine économique des fonds et répondre à un niveau de vigilance adapté', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un client fournit des documents cohérents après une revue renforcée. Quelle conclusion est la plus prudente ?',
                        'explanation' => 'Une explication satisfaisante traite un point précis. Elle ne garantit pas l\'absence future de risque ni la fin de la surveillance.',
                        'choices' => [
                            ['choice_text' => 'La revue permet de classer le client en faible risque pour plusieurs années sans nouveau contrôle', 'is_correct' => false],
                            ['choice_text' => 'La revue transfère la responsabilité du risque futur au client, qui a attesté la cohérence de ses documents', 'is_correct' => false],
                            ['choice_text' => 'La revue peut réduire certaines préoccupations, mais elle ne supprime pas nécessairement le risque futur', 'is_correct' => true],
                            ['choice_text' => 'La revue a démontré l\'origine licite des sommes qui transiteront désormais sur le compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relation client doit-elle parfois être réévaluée après plusieurs années ?',
                        'explanation' => 'Le risque n\'est pas statique. Les informations de la relation doivent rester adaptées aux circonstances actuelles.',
                        'choices' => [
                            ['choice_text' => 'Les activités, propriétaires, pays, produits et comportements peuvent évoluer', 'is_correct' => true],
                            ['choice_text' => 'Les conditions tarifaires de la relation sont renégociées avec le client', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes de la banque archivent les anciens dossiers et ne les rendent plus consultables', 'is_correct' => false],
                            ['choice_text' => 'Les autres clients de la banque ont modifié leur profil de risque depuis l\'ouverture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe applique exactement le même niveau de contrôle à une opération simple et à une relation très complexe et risquée. Quel problème peut apparaître ?',
                        'explanation' => 'Une approche fondée sur le risque cherche la proportionnalité. Un dispositif peut devenir inefficace s\'il consacre trop de ressources aux cas simples et pas assez aux cas complexes.',
                        'choices' => [
                            ['choice_text' => 'Les ressources de contrôle peuvent être mal allouées et le dispositif devenir moins proportionné', 'is_correct' => true],
                            ['choice_text' => 'Les cas simples sont sous-contrôlés alors que les relations complexes bénéficient d\'un examen allégé', 'is_correct' => false],
                            ['choice_text' => 'Le profil de risque des clients à faible risque devient impossible à définir dans le dossier KYC', 'is_correct' => false],
                            ['choice_text' => 'Les analyses deviennent moins documentées parce que les équipes n\'ont plus à justifier leurs décisions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client important demande une exception aux contrôles de due diligence. Pourquoi la demande doit-elle être examinée avec prudence ?',
                        'explanation' => 'Une bonne gouvernance doit empêcher la pression commerciale de conduire à des exceptions non justifiées.',
                        'choices' => [
                            ['choice_text' => 'Les clients importants sont plus souvent liés à des sanctions que les petits clients', 'is_correct' => false],
                            ['choice_text' => 'Les contrôles de diligence sont réservés aux petits clients, au risque plus difficile à évaluer', 'is_correct' => false],
                            ['choice_text' => 'Les exceptions ne sont permises qu\'avec l\'accord du client sur la vigilance appliquée', 'is_correct' => false],
                            ['choice_text' => 'L\'importance commerciale du client ne supprime pas les contrôles requis', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur résumé de la due diligence continue ?',
                        'explanation' => 'La due diligence continue consiste à maintenir un dossier et une compréhension actualisés de la relation, avec une surveillance proportionnée au risque.',
                        'choices' => [
                            ['choice_text' => 'Refaire intégralement la vérification d\'identité du client à chaque opération importante qu\'il réalise', 'is_correct' => false],
                            ['choice_text' => 'Maintenir une compréhension suffisante de la relation et surveiller si son profil reste cohérent avec les activités observées', 'is_correct' => true],
                            ['choice_text' => 'Conserver le dossier d\'ouverture sans le modifier afin de préserver la valeur de preuve de ses documents', 'is_correct' => false],
                            ['choice_text' => 'Limiter la surveillance aux clients à haut risque, les autres étant contrôlés une seule fois à l\'ouverture', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Gouvernance, conflits d\'intérêts et protection du client',
                'description' => 'Reconnaître les risques de conduite, les conflits d\'intérêts et les faiblesses de gouvernance dans des situations de travail courantes.',
                'questions' => [
                    [
                        'question' => 'Un conseiller vend un produit à un client et reçoit une commission plus élevée s\'il choisit ce produit plutôt qu\'une alternative moins coûteuse. Quel risque peut apparaître ?',
                        'explanation' => 'La rémunération peut créer un intérêt personnel qui entre en conflit avec l\'intérêt du client. Le conflit doit être identifié et géré conformément aux règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Un risque de marché lié à la baisse de valeur du produit recommandé', 'is_correct' => false],
                            ['choice_text' => 'Un risque de crédit lié à la défaillance de l\'émetteur du produit', 'is_correct' => false],
                            ['choice_text' => 'Un risque opérationnel lié à une erreur dans le traitement de la vente', 'is_correct' => false],
                            ['choice_text' => 'Un conflit d\'intérêts pouvant influencer la recommandation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une institution encadre-t-elle les cadeaux reçus de partenaires commerciaux ?',
                        'explanation' => 'Les cadeaux peuvent affecter ou sembler affecter le jugement professionnel. Les politiques fixent donc des limites et des obligations de déclaration.',
                        'choices' => [
                            ['choice_text' => 'Pour garantir que les partenaires restent fidèles à l\'institution et renouvellent leurs contrats', 'is_correct' => false],
                            ['choice_text' => 'Pour limiter les risques d\'influence indue ou l\'apparence d\'un conflit d\'intérêts', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire les frais de représentation et optimiser la fiscalité de l\'institution', 'is_correct' => false],
                            ['choice_text' => 'Pour s\'assurer que les salariés déclarent ces cadeaux à l\'administration fiscale à titre de revenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un commercial cache volontairement les principaux risques d\'un produit pour conclure plus vite une vente. Quel problème cela pose-t-il ?',
                        'explanation' => 'Masquer des risques peut conduire le client à prendre une décision mal informée et exposer l\'institution à un risque de conduite et de conformité.',
                        'choices' => [
                            ['choice_text' => 'Un problème de solvabilité de l\'institution face à ses créanciers', 'is_correct' => false],
                            ['choice_text' => 'Un problème de calcul des fonds propres réglementaires de l\'institution', 'is_correct' => false],
                            ['choice_text' => 'Un problème de conduite et d\'information loyale du client', 'is_correct' => true],
                            ['choice_text' => 'Un problème de continuité des systèmes informatiques de vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de rémunération peut-elle faire partie d\'une analyse de risque de conduite ?',
                        'explanation' => 'Les incitations influencent les comportements. Une politique qui récompense uniquement le volume peut pousser à négliger la qualité ou l\'adéquation du produit.',
                        'choices' => [
                            ['choice_text' => 'Parce que le niveau des salaires détermine le montant des provisions que l\'institution doit constituer pour ses clients', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bonus sont versés par les clients et peuvent donc modifier la qualité de leur conseil', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une rémunération fixe supprime tout risque de comportement contraire aux règles de conduite', 'is_correct' => false],
                            ['choice_text' => 'Parce que des objectifs mal conçus peuvent encourager des comportements qui ne sont pas alignés avec les intérêts des clients ou les règles', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une équipe de contrôle identifie un problème mais le responsable commercial demande de le laisser passer en raison de l\'objectif de vente. Quelle réponse est la plus saine ?',
                        'explanation' => 'La fonction de contrôle doit pouvoir remonter les problèmes indépendamment de la pression commerciale. Les faits et les règles doivent rester la base de la décision.',
                        'choices' => [
                            ['choice_text' => 'Reporter la décision jusqu\'à la fin de la période de vente, puis réexaminer le problème', 'is_correct' => false],
                            ['choice_text' => 'Maintenir l\'analyse objective et escalader le problème selon la gouvernance prévue', 'is_correct' => true],
                            ['choice_text' => 'Adapter la conclusion de l\'analyse pour tenir compte de l\'objectif commercial annoncé', 'is_correct' => false],
                            ['choice_text' => 'Confier la décision au responsable commercial, qui connaît mieux le contexte du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'intérêt d\'une piste d\'audit pour une décision sensible ?',
                        'explanation' => 'La piste d\'audit facilite la supervision, la vérification et l\'analyse a posteriori. Elle ne garantit pas à elle seule la qualité de la décision.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de démontrer que la décision prise était la plus rentable pour l\'institution', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de transférer la responsabilité de la décision vers les fonctions d\'audit', 'is_correct' => false],
                            ['choice_text' => 'Elle permet d\'archiver les échanges commerciaux avec le client pour faciliter la facturation', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de retracer les informations examinées, les validations et la décision prise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un canal de signalement interne peut-il être utile ?',
                        'explanation' => 'Les mécanismes de signalement contribuent à faire remonter des problèmes qui pourraient autrement rester cachés. Leur efficacité dépend de la protection et du traitement des alertes.',
                        'choices' => [
                            ['choice_text' => 'Il permet aux clients de contester leurs frais et d\'obtenir un remboursement selon un barème fixé', 'is_correct' => false],
                            ['choice_text' => 'Il permet à des employés de faire remonter des comportements problématiques ou des violations selon un processus prévu', 'is_correct' => true],
                            ['choice_text' => 'Il permet aux équipes commerciales de transmettre à la direction leurs propositions de nouveaux produits', 'is_correct' => false],
                            ['choice_text' => 'Il permet à l\'institution de transmettre aux employés les nouvelles règles et les mises à jour des procédures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un directeur reçoit plusieurs rapports indiquant un risque important mais n\'engage aucune action ni suivi. Quel problème de gouvernance cela révèle-t-il ?',
                        'explanation' => 'La gouvernance ne consiste pas seulement à recevoir des informations. Les responsables doivent aussi évaluer les risques et s\'assurer que les actions nécessaires sont prises.',
                        'choices' => [
                            ['choice_text' => 'Un excès de contrôle qui ralentit la prise de décision de la direction générale', 'is_correct' => false],
                            ['choice_text' => 'Un défaut de qualité des données utilisées dans les rapports transmis à la direction', 'is_correct' => false],
                            ['choice_text' => 'Une faiblesse dans la supervision et la responsabilité face aux risques identifiés', 'is_correct' => true],
                            ['choice_text' => 'Une bonne répartition des rôles entre les fonctions de contrôle et le management', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client ne comprend pas les frais d\'un produit parce que le conseiller a utilisé un vocabulaire très technique. Quel risque peut apparaître ?',
                        'explanation' => 'Une information trop complexe peut empêcher le client de comprendre le coût réel ou les risques du produit. La communication doit être adaptée au contexte.',
                        'choices' => [
                            ['choice_text' => 'Un risque de blanchiment lié à l\'origine des fonds du client', 'is_correct' => false],
                            ['choice_text' => 'Un risque de crédit lié à la capacité du client à rembourser', 'is_correct' => false],
                            ['choice_text' => 'Une décision mal informée du client et un risque de conduite', 'is_correct' => true],
                            ['choice_text' => 'Un risque de sanctions lié à la nationalité du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement correspond le mieux à une bonne gouvernance de la protection du client ?',
                        'explanation' => 'Une protection adéquate repose notamment sur la transparence, la gestion des conflits et une information suffisamment claire pour permettre une décision éclairée.',
                        'choices' => [
                            ['choice_text' => 'Limiter l\'information aux avantages du produit afin de ne pas compliquer la décision du client', 'is_correct' => false],
                            ['choice_text' => 'Remettre au client une documentation très détaillée sans l\'expliquer ni vérifier sa compréhension', 'is_correct' => false],
                            ['choice_text' => 'Recommander en priorité le produit le plus vendu par l\'institution pour des raisons de cohérence commerciale', 'is_correct' => false],
                            ['choice_text' => 'Présenter clairement les caractéristiques, coûts, risques et éventuels conflits d\'intérêts', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Reporting réglementaire et qualité des données',
                'description' => 'Comprendre les contrôles nécessaires pour produire des informations réglementaires fiables et traçables.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une banque effectue-t-elle des contrôles avant d\'envoyer un rapport réglementaire ?',
                        'explanation' => 'Les contrôles préalables visent à détecter les erreurs de données, de calcul ou de périmètre avant la transmission du rapport.',
                        'choices' => [
                            ['choice_text' => 'Pour négocier avec l\'autorité de supervision le contenu et le calendrier du rapport avant l\'envoi', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que les données, calculs et périmètres sont cohérents avec les exigences et les procédures', 'is_correct' => true],
                            ['choice_text' => 'Pour s\'assurer que les chiffres présentés sont les plus favorables possible pour l\'institution', 'is_correct' => false],
                            ['choice_text' => 'Pour confirmer que les rapports réglementaires ont la même présentation que les rapports de gestion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux systèmes fournissent des chiffres différents pour le même indicateur réglementaire. Quelle première action est pertinente ?',
                        'explanation' => 'Un écart doit être expliqué avant la production du rapport. Choisir arbitrairement un chiffre peut créer une déclaration incorrecte.',
                        'choices' => [
                            ['choice_text' => 'Transmettre les deux chiffres à l\'autorité en laissant celle-ci choisir le plus pertinent', 'is_correct' => false],
                            ['choice_text' => 'Retenir la moyenne des deux valeurs pour réduire l\'effet de l\'écart sur l\'indicateur', 'is_correct' => false],
                            ['choice_text' => 'Identifier la source de l\'écart et comprendre quelle donnée ou méthode est correcte', 'is_correct' => true],
                            ['choice_text' => 'Utiliser la valeur du système le plus récent sans chercher à comprendre l\'origine de la différence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la traçabilité des modifications est-elle importante dans un fichier de reporting ?',
                        'explanation' => 'Une piste de modification fiable permet de reconstituer l\'historique d\'un chiffre et de vérifier les validations associées.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de verrouiller les données validées pour empêcher leur correction ultérieure', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de savoir qui a changé une donnée, pourquoi et sur quelle base', 'is_correct' => true],
                            ['choice_text' => 'Elle permet de mesurer la rapidité de saisie des collaborateurs pour évaluer leur performance', 'is_correct' => false],
                            ['choice_text' => 'Elle permet d\'anticiper l\'évolution future des indicateurs à partir des modifications passées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe trouve une erreur importante après l\'envoi d\'un rapport. Que doit-elle faire ?',
                        'explanation' => 'Une erreur importante doit être traitée selon le processus de remédiation prévu. La transparence et la documentation sont essentielles.',
                        'choices' => [
                            ['choice_text' => 'Attendre l\'envoi du rapport suivant pour y intégrer la correction avec les nouvelles données', 'is_correct' => false],
                            ['choice_text' => 'Corriger l\'erreur en interne et n\'informer l\'autorité que si elle pose la question', 'is_correct' => false],
                            ['choice_text' => 'Suivre la procédure applicable pour signaler, corriger et documenter l\'erreur', 'is_correct' => true],
                            ['choice_text' => 'Demander à l\'autorité de supervision de corriger elle-même le rapport déjà reçu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les définitions des indicateurs réglementaires doivent-elles être documentées ?',
                        'explanation' => 'Une définition claire du périmètre, des sources et de la méthode réduit les divergences entre équipes et périodes.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer une interprétation cohérente et reproductible du calcul', 'is_correct' => true],
                            ['choice_text' => 'Pour permettre à chaque équipe d\'adapter la définition à ses propres besoins', 'is_correct' => false],
                            ['choice_text' => 'Pour justifier a posteriori les écarts constatés entre les périodes de reporting', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire la taille des rapports transmis à l\'autorité de supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indicateur réglementaire chute fortement alors que l\'activité de la banque semble stable. Quelle approche est la plus prudente ?',
                        'explanation' => 'Une variation inhabituelle peut être réelle ou résulter d\'un problème de données ou de méthode. Elle doit être analysée plutôt que corrigée arbitrairement.',
                        'choices' => [
                            ['choice_text' => 'Conclure que la situation de la banque s\'est réellement dégradée et en informer immédiatement la direction', 'is_correct' => false],
                            ['choice_text' => 'Attendre la période suivante pour voir si l\'indicateur se redresse avant d\'engager une analyse', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les données, les changements méthodologiques et les éventuelles erreurs avant de conclure', 'is_correct' => true],
                            ['choice_text' => 'Remplacer la méthode de calcul par celle qui fournit un résultat plus proche des périodes précédentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une revue indépendante d\'un reporting important peut-elle être utile ?',
                        'explanation' => 'Un second regard réduit le risque de laisser passer une erreur et renforce la traçabilité, surtout pour les déclarations importantes.',
                        'choices' => [
                            ['choice_text' => 'Elle apporte un contrôle supplémentaire et peut détecter certaines erreurs non vues par le préparateur', 'is_correct' => true],
                            ['choice_text' => 'Elle permet au préparateur de se décharger de sa responsabilité sur la personne qui relit le rapport', 'is_correct' => false],
                            ['choice_text' => 'Elle dispense la direction de valider le contenu du rapport avant sa transmission à l\'autorité', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les contrôles automatiques de cohérence réalisés dans les systèmes de reporting', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une institution envoie régulièrement ses rapports avec quelques jours de retard. Quel risque cela peut-il créer ?',
                        'explanation' => 'Les délais peuvent faire partie intégrante des obligations. Les retards répétés indiquent aussi une faiblesse potentielle dans le processus de reporting.',
                        'choices' => [
                            ['choice_text' => 'Un risque de marché sur les positions détenues et un risque de change élevé', 'is_correct' => false],
                            ['choice_text' => 'Un risque de liquidité de l\'institution et un risque de taux d\'intérêt', 'is_correct' => false],
                            ['choice_text' => 'Un risque de non-respect des délais applicables et un risque de gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Un risque de crédit sur les clients et un risque de contrepartie accru', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sources de données utilisées dans un rapport doivent-elles être connues ?',
                        'explanation' => 'La traçabilité des sources permet de comprendre d\'où viennent les chiffres et de vérifier les transformations effectuées.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir contrôler la provenance des chiffres et vérifier leur cohérence', 'is_correct' => true],
                            ['choice_text' => 'Pour pouvoir attribuer les chiffres favorables à l\'équipe qui les a produits', 'is_correct' => false],
                            ['choice_text' => 'Pour pouvoir choisir librement le système dont les chiffres sont les plus avantageux', 'is_correct' => false],
                            ['choice_text' => 'Pour pouvoir limiter l\'accès aux données à un seul collaborateur du service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un collaborateur saisit manuellement une valeur réglementaire sans contrôle alors qu\'elle est calculée automatiquement dans un autre système. Quel risque apparaît ?',
                        'explanation' => 'La saisie manuelle introduit une possibilité supplémentaire d\'erreur. Les processus doivent réduire les manipulations inutiles et contrôler les exceptions.',
                        'choices' => [
                            ['choice_text' => 'Un risque de perte de données lié à la sauvegarde insuffisante des systèmes', 'is_correct' => false],
                            ['choice_text' => 'Un risque de retard de transmission lié à la lenteur du système de calcul', 'is_correct' => false],
                            ['choice_text' => 'Un risque d\'erreur de saisie et d\'incohérence entre les sources', 'is_correct' => true],
                            ['choice_text' => 'Un risque de fraude externe lié à l\'intrusion de tiers dans le système', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Contrôles internes et gestion des incidents',
                'description' => 'Appliquer les principes de séparation des tâches, de gestion des incidents et de remédiation dans une institution financière.',
                'questions' => [
                    [
                        'question' => 'Une même personne peut créer un bénéficiaire, approuver un paiement important et modifier les journaux de contrôle. Quel problème apparaît ?',
                        'explanation' => 'Séparer les tâches réduit le risque qu\'une seule personne puisse exécuter une opération sensible et masquer elle-même ses actions.',
                        'choices' => [
                            ['choice_text' => 'Une répartition trop stricte des tâches qui ralentit les opérations sans réduire le risque de fraude', 'is_correct' => false],
                            ['choice_text' => 'Une absence de formation qui expose l\'institution à des erreurs de saisie dans les paiements', 'is_correct' => false],
                            ['choice_text' => 'Une insuffisance de fonds propres qui limite la capacité de l\'institution à absorber les pertes', 'is_correct' => false],
                            ['choice_text' => 'Une concentration excessive de responsabilités qui augmente le risque de fraude ou d\'erreur non détectée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les droits d\'accès doivent-ils être retirés lorsqu\'un salarié quitte l\'entreprise ?',
                        'explanation' => 'Un compte restant actif après le départ d\'un salarié crée un risque de sécurité et de contrôle des accès.',
                        'choices' => [
                            ['choice_text' => 'Pour libérer des licences logicielles et réduire les coûts d\'utilisation des systèmes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher un accès ultérieur non autorisé aux systèmes et aux données', 'is_correct' => true],
                            ['choice_text' => 'Pour permettre au salarié de restituer son matériel avant de recevoir son dernier salaire', 'is_correct' => false],
                            ['choice_text' => 'Pour transférer à son successeur l\'ensemble des responsabilités qu\'il exerçait sur les clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une institution découvre une fraude interne et veut simplement réinitialiser les mots de passe sans comprendre ce qui s\'est passé. Pourquoi cette réponse est-elle insuffisante ?',
                        'explanation' => 'La remédiation doit aussi identifier l\'origine, l\'étendue et les causes de l\'incident afin d\'empêcher sa répétition et de respecter les obligations applicables.',
                        'choices' => [
                            ['choice_text' => 'Elle ne répare pas le préjudice financier subi par l\'institution, qui doit être couvert par l\'assurance', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche de conserver les journaux d\'accès, indispensables à toute enquête interne', 'is_correct' => false],
                            ['choice_text' => 'Elle ne traite pas nécessairement la cause, l\'étendue de l\'incident ni les faiblesses de contrôle qui l\'ont permis', 'is_correct' => true],
                            ['choice_text' => 'Elle est réservée aux incidents externes, la fraude interne relevant des seules ressources humaines', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue un journal d\'événements dans une investigation ?',
                        'explanation' => 'Les journaux sont utiles pour retracer les événements, comprendre une séquence d\'actions et soutenir une investigation.',
                        'choices' => [
                            ['choice_text' => 'Il sert à calculer la rentabilité des opérations enregistrées dans le système', 'is_correct' => false],
                            ['choice_text' => 'Il permet de bloquer en temps réel les actions suspectes avant leur exécution', 'is_correct' => false],
                            ['choice_text' => 'Il établit la responsabilité pénale du salarié sans autre élément de preuve', 'is_correct' => false],
                            ['choice_text' => 'Il peut aider à reconstituer les actions effectuées sur un système', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une procédure exige une validation indépendante des paiements dépassant un certain seuil. Pourquoi ce seuil peut-il être utile ?',
                        'explanation' => 'Les seuils permettent d\'adapter les contrôles à l\'importance de l\'opération. Ils doivent toutefois être complétés par d\'autres mesures adaptées.',
                        'choices' => [
                            ['choice_text' => 'Il permet de réduire le nombre de paiements à traiter en refusant ceux qui dépassent un montant fixe', 'is_correct' => false],
                            ['choice_text' => 'Il permet de dispenser les paiements plus faibles de toute trace de justificatif ou de validation', 'is_correct' => false],
                            ['choice_text' => 'Il permet de renforcer le contrôle sur les opérations présentant une exposition plus importante', 'is_correct' => true],
                            ['choice_text' => 'Il permet de répartir équitablement la charge de travail entre les validateurs de l\'institution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après un incident, une équipe modifie le processus mais ne vérifie jamais si la correction fonctionne. Quel risque persiste ?',
                        'explanation' => 'Une remédiation doit être testée ou suivie afin de vérifier qu\'elle traite réellement la cause identifiée.',
                        'choices' => [
                            ['choice_text' => 'La faiblesse peut rester présente ou réapparaître sans être détectée', 'is_correct' => true],
                            ['choice_text' => 'Le processus peut devenir trop rigide et ralentir le traitement des opérations courantes', 'is_correct' => false],
                            ['choice_text' => 'Le coût de la correction peut dépasser le montant de la perte initiale constatée', 'is_correct' => false],
                            ['choice_text' => 'L\'autorité peut être amenée à réviser les exigences applicables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les incidents doivent-ils être classés selon leur gravité ou leur impact ?',
                        'explanation' => 'La classification aide à traiter rapidement les incidents les plus graves et à appliquer des niveaux d\'escalade proportionnés.',
                        'choices' => [
                            ['choice_text' => 'Pour prioriser les ressources, les délais d\'escalade et les actions de remédiation', 'is_correct' => true],
                            ['choice_text' => 'Pour décider quels incidents peuvent rester inconnus de la direction et des autorités', 'is_correct' => false],
                            ['choice_text' => 'Pour répartir les incidents entre les équipes selon leur ancienneté dans l\'institution', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le montant de la rémunération variable des salariés concernés par les incidents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un salarié détecte un contrôle défaillant et hésite à le signaler par peur des conséquences professionnelles. Quel sujet de gouvernance cela soulève-t-il ?',
                        'explanation' => 'Les collaborateurs doivent pouvoir signaler les problèmes de manière appropriée. Une culture qui décourage les alertes peut laisser les risques cachés.',
                        'choices' => [
                            ['choice_text' => 'L\'obligation de former les salariés aux techniques de gestion du risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Le besoin de renforcer les systèmes d\'authentification pour accéder aux outils de contrôle', 'is_correct' => false],
                            ['choice_text' => 'La nécessité d\'une culture où les incidents peuvent être remontés sans pression inappropriée', 'is_correct' => true],
                            ['choice_text' => 'L\'intérêt de réduire le nombre de contrôles pour limiter les occasions de signalement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une institution corrige un incident mais ne documente pas la cause racine. Quelle faiblesse peut rester ?',
                        'explanation' => 'Corriger le symptôme sans comprendre la cause profonde peut laisser le même mécanisme de défaillance intact.',
                        'choices' => [
                            ['choice_text' => 'L\'incident peut être requalifié en risque de marché lors de la prochaine revue du dossier', 'is_correct' => false],
                            ['choice_text' => 'Le rapport d\'incident peut être refusé par l\'autorité parce que sa mise en forme est incomplète', 'is_correct' => false],
                            ['choice_text' => 'La cause peut se reproduire parce que le problème de fond n\'a pas été traité', 'is_correct' => true],
                            ['choice_text' => 'Le coût de la correction peut être contesté parce que la cause n\'a pas été chiffrée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement résume le mieux une bonne gestion d\'incident ?',
                        'explanation' => 'Une gestion complète couvre la détection, la réponse immédiate, l\'analyse des causes, la remédiation et le suivi de l\'efficacité des actions.',
                        'choices' => [
                            ['choice_text' => 'Détecter, corriger rapidement le symptôme visible et clore l\'incident pour libérer les équipes', 'is_correct' => false],
                            ['choice_text' => 'Détecter, contenir, analyser, remédier, documenter et vérifier l\'efficacité des mesures', 'is_correct' => true],
                            ['choice_text' => 'Détecter, informer les clients concernés et laisser chaque équipe traiter l\'incident à sa manière', 'is_correct' => false],
                            ['choice_text' => 'Analyser, sanctionner le salarié concerné et classer le dossier sans suivi des mesures prises', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision intégrée de Financial Regulation & Compliance',
                'description' => 'Révision générale sous forme de situations professionnelles combinant KYC, AML, sanctions, reporting et gouvernance.',
                'questions' => [
                    [
                        'question' => 'Une banque souhaite accélérer l\'entrée en relation d\'un client important mais le dossier KYC est incomplet. Quelle approche est la plus prudente ?',
                        'explanation' => 'L\'urgence commerciale ne doit pas conduire à inventer ou ignorer des informations nécessaires. La procédure KYC doit rester la référence.',
                        'choices' => [
                            ['choice_text' => 'Finaliser la relation en notant que les éléments manquants seront demandés après la première opération', 'is_correct' => false],
                            ['choice_text' => 'Faire valider le dossier incomplet par le client important en échange d\'un engagement écrit', 'is_correct' => false],
                            ['choice_text' => 'Finaliser la relation en s\'appuyant sur le dossier KYC d\'un client comparable déjà enregistré', 'is_correct' => false],
                            ['choice_text' => 'Compléter les contrôles requis avant de finaliser la relation selon la procédure applicable', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une alerte AML concerne une société dont les mouvements semblent inhabituels, mais des contrats cohérents expliquent les paiements. Quel est le meilleur réflexe ?',
                        'explanation' => 'Une explication crédible doit être vérifiée et documentée. Une alerte n\'est pas une preuve d\'infraction et le traitement doit suivre la procédure.',
                        'choices' => [
                            ['choice_text' => 'Clore l\'alerte sans trace écrite puisque les contrats suffisent à écarter tout soupçon de blanchiment', 'is_correct' => false],
                            ['choice_text' => 'Documenter l\'explication, vérifier les éléments et appliquer la procédure de clôture ou d\'escalade', 'is_correct' => true],
                            ['choice_text' => 'Informer le client de l\'alerte et lui demander de confirmer par écrit que ses paiements sont licites', 'is_correct' => false],
                            ['choice_text' => 'Classer la société en risque nul et supprimer l\'alerte du système de surveillance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque filtre-t-elle aussi les bénéficiaires et les banques intermédiaires d\'un paiement, et pas seulement son propre client ?',
                        'explanation' => 'Les restrictions et sanctions peuvent concerner toute personne ou entité impliquée dans une opération : donneur d\'ordre, bénéficiaire ou intermédiaire. Filtrer uniquement le client à l\'ouverture du compte laisserait ces parties sans contrôle.',
                        'choices' => [
                            ['choice_text' => 'Parce que le filtrage du client à l\'ouverture du compte suffit à couvrir les opérations qu\'il réalise ensuite', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une restriction peut viser n\'importe quelle partie à l\'opération, y compris le bénéficiaire ou un intermédiaire', 'is_correct' => true],
                            ['choice_text' => 'Parce que les bénéficiaires sont des clients de la banque et doivent donc passer par la procédure KYC complète', 'is_correct' => false],
                            ['choice_text' => 'Parce que le filtrage des bénéficiaires sert surtout à vérifier que le montant du paiement est conforme au profil du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une institution découvre qu\'un rapport réglementaire a été préparé avec une ancienne méthodologie. Que faut-il vérifier ?',
                        'explanation' => 'Une méthodologie obsolète peut affecter l\'exactitude de la déclaration. Il faut mesurer l\'impact et suivre la procédure prévue pour la correction.',
                        'choices' => [
                            ['choice_text' => 'L\'impact sur les chiffres, la période concernée et la procédure de correction ou de notification applicable', 'is_correct' => true],
                            ['choice_text' => 'Le coût de la nouvelle méthodologie, son calendrier de déploiement et la formation des équipes concernées', 'is_correct' => false],
                            ['choice_text' => 'La conformité du rapport avec le format publié l\'an dernier, sans examiner l\'effet sur les chiffres', 'is_correct' => false],
                            ['choice_text' => 'Le nom de l\'autorité destinataire, la langue du rapport et la date de sa prochaine transmission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un dirigeant demande à l\'équipe de conformité de retarder un contrôle important jusqu\'à la fin du trimestre pour ne pas pénaliser les ventes. Quel principe doit guider l\'équipe ?',
                        'explanation' => 'Une fonction de contrôle doit conserver son indépendance. La pression commerciale ne doit pas conduire à retarder ou supprimer arbitrairement un contrôle important.',
                        'choices' => [
                            ['choice_text' => 'Les contrôles doivent rester indépendants et être réalisés selon les exigences et la gouvernance prévues', 'is_correct' => true],
                            ['choice_text' => 'Les contrôles peuvent être décalés si la direction générale en assume par écrit la responsabilité', 'is_correct' => false],
                            ['choice_text' => 'Les contrôles doivent être adaptés au calendrier commercial pour ne pas perturber l\'activité de l\'institution', 'is_correct' => false],
                            ['choice_text' => 'Les contrôles doivent être réalisés par les équipes commerciales pour mieux tenir compte des contraintes de vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle des trois lignes de défense, quel est le rôle de l\'audit interne ?',
                        'explanation' => 'L\'audit interne est la troisième ligne : il évalue de façon indépendante les contrôles réalisés par les métiers (première ligne) et par les fonctions de contrôle comme la conformité et les risques (deuxième ligne).',
                        'choices' => [
                            ['choice_text' => 'Exécuter les opérations quotidiennes et appliquer elle-même les contrôles de premier niveau', 'is_correct' => false],
                            ['choice_text' => 'Fournir une évaluation indépendante de l\'efficacité des contrôles et de la gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Surveiller les risques au jour le jour et conseiller les métiers sur les règles à appliquer', 'is_correct' => false],
                            ['choice_text' => 'Définir la stratégie commerciale et fixer les objectifs de vente des équipes de l\'institution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit de nombreux paiements internationaux mais ne peut expliquer leur finalité économique. Quel domaine de contrôle est particulièrement concerné ?',
                        'explanation' => 'Des flux internationaux sans logique économique claire peuvent nécessiter une analyse AML et une meilleure compréhension de la relation et des fonds.',
                        'choices' => [
                            ['choice_text' => 'La vigilance AML et la compréhension de l\'activité et de la source des fonds', 'is_correct' => true],
                            ['choice_text' => 'La gestion du risque de change et le choix de la devise de règlement', 'is_correct' => false],
                            ['choice_text' => 'Le calcul des fonds propres réglementaires et du ratio de solvabilité', 'is_correct' => false],
                            ['choice_text' => 'La protection du client et l\'information claire sur les frais des produits vendus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un produit financier comporte une commission élevée liée aux ventes, mais cette commission n\'est pas expliquée clairement au client. Quel risque apparaît ?',
                        'explanation' => 'Une rémunération commerciale peut créer un conflit d\'intérêts et l\'absence de transparence sur les frais peut conduire à une décision mal informée.',
                        'choices' => [
                            ['choice_text' => 'Un risque de marché, de taux d\'intérêt et de perte de valeur du produit pour le client', 'is_correct' => false],
                            ['choice_text' => 'Un risque de conduite, de conflit d\'intérêts et de mauvaise information du client', 'is_correct' => true],
                            ['choice_text' => 'Un risque de liquidité, de refinancement et de dépendance à la clientèle de détail', 'is_correct' => false],
                            ['choice_text' => 'Un risque de sanctions, de filtrage et de fausse correspondance avec les listes officielles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle conséquence décrit le mieux le risque de réputation à la suite d\'un manquement de conformité ?',
                        'explanation' => 'Un manquement rendu public peut dégrader l\'image de l\'institution et la confiance de ses clients et partenaires, indépendamment des sanctions éventuelles. Les autres conséquences relèvent du risque de marché, de liquidité et opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Une perte de confiance des clients, des partenaires et du public après le manquement', 'is_correct' => true],
                            ['choice_text' => 'Une baisse de la valeur d\'un actif détenu par la banque sous l\'effet des variations du marché', 'is_correct' => false],
                            ['choice_text' => 'Une difficulté à régler ses dettes à court terme faute de liquidités suffisantes sur ses comptes', 'is_correct' => false],
                            ['choice_text' => 'Une perte causée par une erreur humaine dans l\'exécution d\'un processus interne de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel réflexe professionnel résume le mieux la compliance face à une situation ambiguë ?',
                        'explanation' => 'Une bonne décision de conformité est factuelle, documentée et cohérente avec la gouvernance. Les situations ambiguës doivent être escaladées plutôt que traitées arbitrairement.',
                        'choices' => [
                            ['choice_text' => 'S\'appuyer sur l\'expérience du responsable le plus ancien et trancher rapidement pour ne pas bloquer l\'activité', 'is_correct' => false],
                            ['choice_text' => 'S\'appuyer sur les faits, la documentation, les règles applicables et les procédures internes, puis escalader si nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Appliquer la solution retenue dans le cas le plus proche sans examiner les spécificités de la situation', 'is_correct' => false],
                            ['choice_text' => 'Attendre qu\'une instruction écrite de l\'autorité de supervision précise la décision à prendre dans ce cas', 'is_correct' => false],
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
