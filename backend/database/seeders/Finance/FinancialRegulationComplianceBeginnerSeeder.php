<?php

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

        $quizzesData = [
            [
                'title' => "Comprendre la réglementation financière",
                'description' => "Découvrir pourquoi les institutions financières sont réglementées et comment la conformité s'intègre à leur fonctionnement quotidien.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une banque est soumise à des règles prudentielles et à des règles de conduite. Pourquoi les deux dimensions sont-elles utiles ?",
                        'choices' => [
                            [
                                'choice_text' => "Elles couvrent à la fois la solidité de l'institution et la manière dont elle traite ses clients et ses activités",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles servent uniquement à augmenter les bénéfices",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles remplacent la gestion des risques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles empêchent toute innovation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La réglementation financière couvre plusieurs objectifs. Les exigences prudentielles concernent notamment la solidité et les risques, tandis que les règles de conduite et de protection encadrent les relations avec les clients et les marchés.",
                    ],
                    [
                        'question' => "Un nouveau produit financier est lancé sans revue de conformité. Quel problème peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Une caractéristique du produit peut entrer en conflit avec une exigence applicable avant même sa commercialisation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le produit devient automatiquement rentable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les clients ne peuvent jamais être affectés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La réglementation cesse de s'appliquer",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une revue en amont peut repérer des problèmes de documentation, de publicité, de protection du client ou de fonctionnement. Attendre un incident est une approche plus risquée.",
                    ],
                    [
                        'question' => "Pourquoi une institution conserve-t-elle des procédures écrites pour les contrôles réglementaires ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour formaliser les étapes à suivre et rendre le contrôle reproductible et traçable",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour garantir qu'aucune erreur ne se produira",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer tout jugement humain",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour éviter toute mise à jour future",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les procédures donnent un cadre commun aux équipes, facilitent la formation et permettent de vérifier si les contrôles sont réalisés comme prévu.",
                    ],
                    [
                        'question' => "Un responsable affirme que la compliance ne concerne que le service juridique. Quelle réponse est la plus exacte ?",
                        'choices' => [
                            [
                                'choice_text' => "La conformité concerne aussi les métiers et les fonctions de contrôle, car les opérations quotidiennes créent des risques réglementaires",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La compliance ne concerne personne d'autre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La compliance concerne uniquement les clients",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle concerne seulement les auditeurs externes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La conformité repose sur plusieurs lignes de responsabilité. Les équipes opérationnelles doivent appliquer les règles, tandis que les fonctions de contrôle apportent supervision et expertise.",
                    ],
                    [
                        'question' => "Pourquoi la formation régulière des salariés peut-elle réduire le risque de non-conformité ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle aide les équipes à reconnaître les situations à risque et à appliquer les procédures à jour",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit l'absence de fraude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime tous les contrôles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace les politiques écrites",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les produits, procédures et risques évoluent. Une formation à jour améliore la capacité des salariés à détecter les problèmes et à appliquer correctement les contrôles.",
                    ],
                    [
                        'question' => "Une institution détecte une faiblesse dans un contrôle interne mais aucun incident n'est encore survenu. Quelle attitude est la plus prudente ?",
                        'choices' => [
                            [
                                'choice_text' => "Corriger la faiblesse avant qu'elle ne conduise à un incident important",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Attendre un incident pour justifier une action",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Masquer la faiblesse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer le contrôle concerné",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un contrôle défaillant représente déjà une exposition. La remédiation préventive réduit le risque qu'un événement réel transforme la faiblesse en perte ou en non-conformité.",
                    ],
                    [
                        'question' => "Quel exemple illustre le mieux un risque réglementaire ?",
                        'choices' => [
                            [
                                'choice_text' => "Une institution publie une déclaration obligatoire avec des informations incorrectes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une obligation perd 2 % de sa valeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un serveur est momentanément ralenti",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un client réalise un gain sur une action",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le risque réglementaire ou de non-conformité découle notamment du non-respect d'une exigence. Les autres situations relèvent principalement d'autres catégories de risque.",
                    ],
                    [
                        'question' => "Pourquoi la direction doit-elle recevoir des informations sur les incidents de conformité importants ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour pouvoir exercer sa responsabilité de supervision et décider des actions correctives nécessaires",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour connaître le chiffre d'affaires quotidien",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer les enquêteurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour garantir qu'aucun incident ne sera publié",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La direction doit être informée des risques importants pour exercer sa responsabilité de gouvernance, allouer des ressources et suivre la remédiation.",
                    ],
                    [
                        'question' => "Une équipe commerciale considère qu'une règle peut être ignorée si le client est très rentable. Quel principe cette attitude viole-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Le principe selon lequel les contrôles de conformité ne doivent pas dépendre uniquement de l'importance commerciale du client",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le principe de diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le principe de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le principe de liquidité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La valeur commerciale d'un client ne justifie pas la suppression d'un contrôle requis. Une gouvernance saine doit empêcher les exceptions arbitraires.",
                    ],
                    [
                        'question' => "Quel objectif décrit le mieux une bonne culture de conformité ?",
                        'choices' => [
                            [
                                'choice_text' => "Faire remonter les problèmes, traiter les risques et encourager des comportements cohérents avec les règles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Réduire le nombre d'incidents déclarés à tout prix",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éviter toute documentation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Donner la priorité aux ventes sur les contrôles",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une culture saine encourage la transparence, l'escalade des problèmes et la responsabilité. Réduire artificiellement le nombre d'incidents ne réduit pas le risque réel.",
                    ],
                ],
            ],
            [
                'title' => "KYC et identification du client",
                'description' => "Mettre en pratique les principes de Know Your Customer lors de l'entrée en relation et du suivi du dossier client.",
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Lorsqu'une banque ouvre un compte, pourquoi vérifie-t-elle l'identité du demandeur ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour s'assurer de l'identité de la personne et respecter les contrôles applicables",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour garantir un rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour éviter toute transaction future",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour déterminer le cours d'une devise",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'identification permet d'établir qui est réellement le client. Elle constitue une base des contrôles KYC et d'autres obligations de vigilance.",
                    ],
                    [
                        'question' => "Un client présente un document d'identité expiré. Que doit faire le conseiller ?",
                        'choices' => [
                            [
                                'choice_text' => "Suivre la procédure prévue pour obtenir une pièce valide ou une autre vérification acceptable",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Créer le compte avec les informations approximatives",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Utiliser l'identité d'un proche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer le problème",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une identité valide doit être vérifiée selon le processus applicable. Les informations ne doivent jamais être inventées ou remplacées arbitrairement.",
                    ],
                    [
                        'question' => "Pourquoi demander l'activité professionnelle ou commerciale d'un client peut-il être utile ?",
                        'choices' => [
                            [
                                'choice_text' => "Cela aide à comprendre son profil et à apprécier si les opérations futures sont cohérentes avec la relation attendue",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Cela fixe automatiquement le taux d'intérêt",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela garantit sa solvabilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela supprime l'obligation d'identification",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La nature de l'activité aide à définir le profil du client et fournit un point de comparaison pour la surveillance des opérations.",
                    ],
                    [
                        'question' => "Une entreprise ouvre un compte en déclarant une activité locale de petite taille, puis reçoit des flux internationaux très importants. Quel réflexe est pertinent ?",
                        'choices' => [
                            [
                                'choice_text' => "Revoir le profil du client et demander des explications ou justificatifs adaptés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ignorer les flux parce que le client est déjà connu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Fermer automatiquement le compte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Autoriser tous les paiements sans analyse",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un écart important entre le profil déclaré et l'activité observée peut justifier une mise à jour KYC et une analyse plus approfondie.",
                    ],
                    [
                        'question' => "Pourquoi les informations KYC doivent-elles être mises à jour régulièrement ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que l'identité, l'activité, les propriétaires ou les circonstances du client peuvent évoluer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les clients changent toujours de banque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter les frais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour effacer les transactions anciennes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un dossier qui devient obsolète peut conduire à une mauvaise évaluation du risque. Les informations importantes doivent donc être actualisées selon une approche appropriée.",
                    ],
                    [
                        'question' => "Une personne agit pour une société et prétend ne pas connaître le propriétaire réel de celle-ci. Quel point peut nécessiter une vérification supplémentaire ?",
                        'choices' => [
                            [
                                'choice_text' => "L'identification des personnes qui contrôlent ou bénéficient réellement de la relation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le rendement de la société",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le taux directeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La durée du prêt",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Selon les exigences applicables, l'institution doit comprendre la propriété et le contrôle pertinents, notamment lorsqu'il faut identifier le bénéficiaire effectif.",
                    ],
                    [
                        'question' => "Un client refuse de fournir une information KYC nécessaire à l'ouverture du compte. Quelle réaction est la plus professionnelle ?",
                        'choices' => [
                            [
                                'choice_text' => "Expliquer la nécessité de l'information et appliquer la procédure si elle n'est pas fournie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Inventer une réponse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Demander à un autre client de répondre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer toute exigence",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une information requise ne doit pas être inventée. L'institution doit expliquer la demande puis appliquer le processus prévu si le client ne coopère pas.",
                    ],
                    [
                        'question' => "Pourquoi un dossier KYC cohérent est-il utile pour la surveillance future ?",
                        'choices' => [
                            [
                                'choice_text' => "Il fournit une base de comparaison permettant de repérer des changements inhabituels dans le comportement du client",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il garantit qu'aucune opération suspecte ne se produira",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il remplace les systèmes de transaction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il fixe le profit du client",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le profil initial constitue une référence pour comprendre ensuite si les transactions et comportements restent cohérents avec la relation attendue.",
                    ],
                    [
                        'question' => "Un client fournit deux adresses différentes sur plusieurs documents sans explication. Que doit faire l'équipe KYC ?",
                        'choices' => [
                            [
                                'choice_text' => "Chercher à clarifier l'incohérence et conserver une information correctement documentée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Choisir une adresse au hasard",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les documents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer l'écart",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les incohérences sont des signaux qui doivent être clarifiés. Un dossier fiable nécessite des informations cohérentes et documentées.",
                    ],
                    [
                        'question' => "Pourquoi les données KYC doivent-elles être protégées ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'elles peuvent contenir des informations personnelles et financières sensibles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu'elles ne servent qu'au marketing",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que tout le personnel doit y avoir accès",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'elles sont publiques par définition",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les dossiers KYC peuvent contenir des données sensibles. L'accès et la conservation doivent être contrôlés selon les exigences applicables.",
                    ],
                ],
            ],
            [
                'title' => "AML et surveillance des opérations",
                'description' => "Identifier les situations nécessitant une analyse AML et comprendre le rôle des alertes et de l'enquête transactionnelle.",
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une banque constate qu'un compte habituellement peu actif reçoit soudainement de nombreux virements importants. Pourquoi cela peut-il déclencher une alerte AML ?",
                        'choices' => [
                            [
                                'choice_text' => "Le comportement s'écarte du profil habituel et peut nécessiter une analyse du contexte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tout gros virement est automatiquement illégal",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les virements sont toujours suspects",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une alerte prouve déjà un blanchiment",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une alerte signale un comportement à examiner, pas une culpabilité. Le profil du client et le contexte économique des opérations sont essentiels.",
                    ],
                    [
                        'question' => "Pourquoi une transaction doit-elle être analysée avec les opérations qui l'entourent ?",
                        'choices' => [
                            [
                                'choice_text' => "Un schéma suspect peut apparaître seulement lorsque plusieurs opérations sont considérées ensemble",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une transaction isolée n'a jamais de valeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les systèmes AML ne peuvent pas utiliser l'historique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer les comptes anciens",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'analyse dans le temps permet de repérer des répétitions, fractionnements, transferts en chaîne ou changements de comportement qui ne sont pas visibles sur une seule opération.",
                    ],
                    [
                        'question' => "Une entreprise fournit des contrats et factures expliquant des paiements internationaux inhabituels. Quel effet cette information peut-elle avoir ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut fournir une explication économique cohérente et aider à résoudre l'alerte si les éléments sont vérifiés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle rend tous les contrôles inutiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle garantit que la société est sans risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime l'obligation KYC",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une explication documentée peut rendre les opérations cohérentes avec l'activité. Elle ne signifie pas que tous les autres contrôles deviennent inutiles.",
                    ],
                    [
                        'question' => "Quel est le rôle d'un système AML automatisé ?",
                        'choices' => [
                            [
                                'choice_text' => "Repérer certains scénarios ou anomalies afin de transmettre des alertes à analyser",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Déclarer automatiquement chaque client coupable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Remplacer tous les analystes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Garantir qu'aucune opération illicite n'échappera au système",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'automatisation permet de traiter de grands volumes et de générer des alertes. L'analyse humaine et la gouvernance restent indispensables.",
                    ],
                    [
                        'question' => "Pourquoi un taux élevé de faux positifs dans un système AML peut-il poser un problème ?",
                        'choices' => [
                            [
                                'choice_text' => "Les équipes peuvent être submergées d'alertes et consacrer moins de temps aux cas réellement pertinents",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les faux positifs augmentent la rentabilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils suppriment tout risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils rendent les systèmes inutiles dans tous les cas",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Trop de faux positifs consomment des ressources et peuvent réduire l'efficacité du dispositif. Le calibrage du système doit donc être suivi.",
                    ],
                    [
                        'question' => "Un analyste clôt une alerte parce qu'il a trouvé une explication plausible. Que doit-il faire en plus ?",
                        'choices' => [
                            [
                                'choice_text' => "Documenter les faits, les éléments examinés et la décision selon la procédure",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Supprimer les traces de l'alerte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Prévenir tous les clients",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Modifier le profil du client sans justification",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une analyse doit être traçable. La documentation permet de justifier pourquoi l'alerte a été clôturée et facilite les contrôles ultérieurs.",
                    ],
                    [
                        'question' => "Pourquoi les scénarios AML doivent-ils évoluer avec le temps ?",
                        'choices' => [
                            [
                                'choice_text' => "Les comportements criminels, produits et méthodes de contournement peuvent changer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les transactions ne changent jamais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les règles AML sont identiques dans tous les pays",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les systèmes informatiques deviennent automatiquement plus précis",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les typologies et risques évoluent. Les scénarios de surveillance doivent donc être régulièrement évalués et ajustés.",
                    ],
                    [
                        'question' => "Un compte présente une série de petits virements reçus puis transférés rapidement à plusieurs bénéficiaires sans justification apparente. Quel point mérite une attention particulière ?",
                        'choices' => [
                            [
                                'choice_text' => "Le schéma global des flux et la logique économique des opérations",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Uniquement le montant de chaque virement pris séparément",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur de l'interface bancaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le taux de change de la semaine passée",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'analyse AML doit examiner le comportement global : origine des fonds, destinations, fréquence et cohérence avec l'activité connue.",
                    ],
                    [
                        'question' => "Quelle différence existe entre une alerte AML et une conclusion de fraude ?",
                        'choices' => [
                            [
                                'choice_text' => "Une alerte indique un comportement à examiner ; elle ne prouve pas à elle seule une infraction",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il n'y a aucune différence",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une alerte est toujours une preuve",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une fraude ne peut jamais produire d'alerte",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une alerte est un signal généré par des règles ou analyses. Il faut ensuite examiner les faits avant de décider de la suite.",
                    ],
                    [
                        'question' => "Quel comportement est le plus approprié pour un analyste AML face à un dossier complexe ?",
                        'choices' => [
                            [
                                'choice_text' => "Rassembler les faits, documenter l'analyse et escalader le dossier selon la procédure lorsque nécessaire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Accuser directement le client",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Fermer le compte sans analyse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer l'alerte si le client est important",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'analyse AML doit rester factuelle et traçable. Les dossiers complexes peuvent nécessiter une escalade vers les fonctions spécialisées.",
                    ],
                ],
            ],
            [
                'title' => "Sanctions et filtrage",
                'description' => "Apprendre à traiter les alertes de sanctions, les faux positifs et les contrôles sur les personnes et entités concernées.",
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Pourquoi une institution filtre-t-elle certaines transactions contre des listes de sanctions ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour identifier les personnes, entités ou situations qui peuvent faire l'objet de restrictions applicables",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour garantir un rendement financier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour mesurer la satisfaction des clients",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour fixer les taux de change",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le filtrage permet d'identifier des correspondances potentielles avec des restrictions. Les règles et listes exactes dépendent du cadre applicable.",
                    ],
                    [
                        'question' => "Un nom de client ressemble fortement à un nom présent sur une liste de sanctions, mais la date de naissance est différente. Que faut-il faire ?",
                        'choices' => [
                            [
                                'choice_text' => "Comparer les identifiants disponibles avant de conclure à une véritable correspondance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ignorer toutes les alertes de nom",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Bloquer définitivement la relation sans analyse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Modifier la date de naissance du client",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une correspondance de nom peut être un faux positif. Les identifiants supplémentaires aident à distinguer les personnes ou entités concernées.",
                    ],
                    [
                        'question' => "Pourquoi un système de filtrage peut-il produire beaucoup d'alertes sur des clients légitimes ?",
                        'choices' => [
                            [
                                'choice_text' => "Des personnes différentes peuvent partager des noms ou des informations similaires à celles d'une liste",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le système est toujours incorrect",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les listes ne contiennent jamais de noms",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Tous les clients sont sanctionnés",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les outils de matching utilisent des critères qui peuvent produire des similitudes. Une revue humaine permet de résoudre ces faux positifs.",
                    ],
                    [
                        'question' => "Une transaction internationale déclenche une alerte de sanctions. Quelle action est la plus prudente avant sa libération ?",
                        'choices' => [
                            [
                                'choice_text' => "Suivre la procédure de revue et vérifier les éléments d'identification et de transaction",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Forcer immédiatement le paiement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer l'alerte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Demander au client de changer le nom du bénéficiaire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'alerte doit être examinée avant la décision. Les procédures de sanctions imposent souvent des contrôles et une documentation spécifiques.",
                    ],
                    [
                        'question' => "Pourquoi les référentiels de filtrage doivent-ils être maintenus à jour ?",
                        'choices' => [
                            [
                                'choice_text' => "Les listes et informations pertinentes peuvent évoluer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour augmenter les faux positifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer les historiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les listes ne changent jamais",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un système de filtrage ne peut être fiable si les données de référence sont obsolètes. La mise à jour fait partie du contrôle.",
                    ],
                    [
                        'question' => "Une société change son nom commercial mais garde les mêmes propriétaires et dirigeants. Pourquoi le changement de nom n'est-il pas suffisant ?",
                        'choices' => [
                            [
                                'choice_text' => "Le filtrage doit aussi tenir compte des personnes et autres identifiants pertinents",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les noms commerciaux ne servent jamais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que changer un nom crée toujours une nouvelle personne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les propriétaires n'ont aucun rôle",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La relation avec des listes de sanctions ne dépend pas seulement du nom commercial. L'identité, la propriété et le contrôle peuvent être essentiels à l'analyse.",
                    ],
                    [
                        'question' => "Pourquoi une décision de filtrage doit-elle être documentée ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour conserver la justification de la décision et permettre un contrôle ultérieur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour permettre au client de modifier l'alerte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter le chiffre d'affaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer la liste de sanctions",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La documentation crée une piste d'audit : éléments examinés, analyse effectuée et décision prise.",
                    ],
                    [
                        'question' => "Un analyste ne dispose pas de suffisamment d'informations pour écarter une alerte. Quelle approche est la plus prudente ?",
                        'choices' => [
                            [
                                'choice_text' => "Escalader le dossier selon la procédure plutôt que de supposer qu'il s'agit d'un faux positif",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Autoriser automatiquement la transaction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer l'alerte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Modifier les données manquantes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Lorsque les informations sont insuffisantes, l'escalade permet d'obtenir une analyse complémentaire et d'éviter une décision non fondée.",
                    ],
                    [
                        'question' => "Quel risque apparaît si une institution désactive son filtrage pour accélérer les paiements ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle augmente le risque de traiter des opérations soumises à des restrictions applicables",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle réduit automatiquement les risques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle améliore le contrôle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle garantit des paiements conformes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Supprimer un contrôle critique pour gagner du temps peut exposer l'institution à des transactions qui auraient dû être bloquées, arrêtées ou examinées.",
                    ],
                    [
                        'question' => "Pourquoi le calibrage d'un système de sanctions cherche-t-il un équilibre entre sensibilité et bruit ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour détecter les cas pertinents tout en évitant un volume ingérable de faux positifs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour supprimer toute alerte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour garantir qu'aucune alerte ne sera générée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter seulement le nombre de clients",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un système trop permissif peut manquer des correspondances, tandis qu'un système trop strict peut générer trop de faux positifs. Le calibrage doit être contrôlé.",
                    ],
                ],
            ],
            [
                'title' => "Customer Due Diligence et approche fondée sur le risque",
                'description' => "Comprendre comment le niveau de vigilance peut être adapté au profil de risque du client et de la relation.",
                'duration' => 28,
                'passing_score' => 63,
                'questions' => [
                    [
                        'question' => "Pourquoi une institution utilise-t-elle une approche fondée sur le risque ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour adapter l'intensité des contrôles à la nature et au niveau des risques identifiés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour appliquer moins de règles aux gros clients",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer les clients à risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour appliquer exactement le même contrôle à tous les cas",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une approche fondée sur le risque cherche à concentrer davantage de ressources sur les situations présentant davantage de risque, tout en gardant des contrôles appropriés pour l'ensemble des relations.",
                    ],
                    [
                        'question' => "Un client présente plusieurs caractéristiques qui augmentent son niveau de risque selon le cadre interne. Quelle conséquence peut être appropriée ?",
                        'choices' => [
                            [
                                'choice_text' => "Une vigilance renforcée et des vérifications supplémentaires selon la procédure",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une fermeture automatique du compte dans tous les cas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse automatique des frais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun changement possible",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un risque plus élevé peut justifier davantage d'informations, une surveillance accrue ou des validations supplémentaires. La mesure exacte dépend du cadre applicable.",
                    ],
                    [
                        'question' => "Pourquoi comprendre l'objectif d'une relation client est-il utile ?",
                        'choices' => [
                            [
                                'choice_text' => "Cela aide à déterminer si les opérations observées sont cohérentes avec l'usage attendu du compte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Cela garantit la rentabilité du client",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela fixe le plafond de crédit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela remplace la vérification d'identité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La finalité de la relation fournit un contexte. Les opérations peuvent ensuite être comparées à ce profil pour détecter des changements ou anomalies.",
                    ],
                    [
                        'question' => "Une entreprise déclare une activité de conseil mais reçoit principalement des paiements correspondant à des ventes de marchandises. Que faut-il faire ?",
                        'choices' => [
                            [
                                'choice_text' => "Revoir les informations du dossier et demander des explications pour comprendre l'activité réelle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Modifier automatiquement le dossier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les opérations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Fermer immédiatement le compte",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un décalage entre l'activité déclarée et les flux peut nécessiter une mise à jour et une analyse. Il faut d'abord comprendre la situation avant de décider.",
                    ],
                    [
                        'question' => "Pourquoi des documents sur la source des fonds peuvent-ils être demandés dans certaines situations ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour mieux comprendre l'origine économique des fonds et répondre à un niveau de vigilance adapté",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour garantir un rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer les taxes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour rendre les transactions anonymes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Selon le niveau de risque et le type de relation, des informations supplémentaires peuvent aider à comprendre l'origine des fonds et la cohérence économique des opérations.",
                    ],
                    [
                        'question' => "Un client fournit des documents cohérents après une revue renforcée. Quelle conclusion est la plus prudente ?",
                        'choices' => [
                            [
                                'choice_text' => "La revue peut réduire certaines préoccupations, mais elle ne supprime pas nécessairement le risque futur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le client devient sans risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les futures alertes doivent être ignorées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le dossier KYC n'a plus besoin de mise à jour",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une explication satisfaisante traite un point précis. Elle ne garantit pas l'absence future de risque ni la fin de la surveillance.",
                    ],
                    [
                        'question' => "Pourquoi une relation client doit-elle parfois être réévaluée après plusieurs années ?",
                        'choices' => [
                            [
                                'choice_text' => "Les activités, propriétaires, pays, produits et comportements peuvent évoluer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les clients deviennent toujours plus risqués",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter automatiquement les frais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'un dossier ancien est toujours faux",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le risque n'est pas statique. Les informations de la relation doivent rester adaptées aux circonstances actuelles.",
                    ],
                    [
                        'question' => "Une équipe applique exactement le même niveau de contrôle à une opération simple et à une relation très complexe et risquée. Quel problème peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Les ressources de contrôle peuvent être mal allouées et le dispositif devenir moins proportionné",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La conformité devient parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les risques élevés disparaissent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les contrôles deviennent inutiles",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une approche fondée sur le risque cherche la proportionnalité. Un dispositif peut devenir inefficace s'il consacre trop de ressources aux cas simples et pas assez aux cas complexes.",
                    ],
                    [
                        'question' => "Un client important demande une exception aux contrôles de due diligence. Pourquoi la demande doit-elle être examinée avec prudence ?",
                        'choices' => [
                            [
                                'choice_text' => "L'importance commerciale du client ne supprime pas les contrôles requis",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les gros clients sont toujours plus sûrs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une exception est toujours interdite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les clients importants n'ont pas de risque",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une bonne gouvernance doit empêcher la pression commerciale de conduire à des exceptions non justifiées.",
                    ],
                    [
                        'question' => "Quel est le meilleur résumé de la due diligence continue ?",
                        'choices' => [
                            [
                                'choice_text' => "Maintenir une compréhension suffisante de la relation et surveiller si son profil reste cohérent avec les activités observées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Demander chaque jour un nouveau document",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Bloquer les comptes anciens",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer l'historique des transactions",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La due diligence continue consiste à maintenir un dossier et une compréhension actualisés de la relation, avec une surveillance proportionnée au risque.",
                    ],
                ],
            ],
            [
                'title' => "Gouvernance, conflits d'intérêts et protection du client",
                'description' => "Reconnaître les risques de conduite, les conflits d'intérêts et les faiblesses de gouvernance dans des situations de travail courantes.",
                'duration' => 27,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Un conseiller vend un produit à un client et reçoit une commission plus élevée s'il choisit ce produit plutôt qu'une alternative moins coûteuse. Quel risque peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Un conflit d'intérêts pouvant influencer la recommandation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de liquidité uniquement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La rémunération peut créer un intérêt personnel qui entre en conflit avec l'intérêt du client. Le conflit doit être identifié et géré conformément aux règles applicables.",
                    ],
                    [
                        'question' => "Pourquoi une institution encadre-t-elle les cadeaux reçus de partenaires commerciaux ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour limiter les risques d'influence indue ou l'apparence d'un conflit d'intérêts",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour garantir les ventes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour réduire le nombre de fournisseurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour fixer les taux de marché",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les cadeaux peuvent affecter ou sembler affecter le jugement professionnel. Les politiques fixent donc des limites et des obligations de déclaration.",
                    ],
                    [
                        'question' => "Un commercial cache volontairement les principaux risques d'un produit pour conclure plus vite une vente. Quel problème cela pose-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Un problème de conduite et d'information loyale du client",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un problème de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un avantage pour le client",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une amélioration de la gouvernance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Masquer des risques peut conduire le client à prendre une décision mal informée et exposer l'institution à un risque de conduite et de conformité.",
                    ],
                    [
                        'question' => "Pourquoi une politique de rémunération peut-elle faire partie d'une analyse de conduct risk ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que des objectifs mal conçus peuvent encourager des comportements qui ne sont pas alignés avec les intérêts des clients ou les règles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que la rémunération n'influence jamais les comportements",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les bonus suppriment le risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que le salaire fixe les taux d'intérêt",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les incitations influencent les comportements. Une politique qui récompense uniquement le volume peut pousser à négliger la qualité ou l'adéquation du produit.",
                    ],
                    [
                        'question' => "Une équipe de contrôle identifie un problème mais le responsable commercial demande de le laisser passer en raison de l'objectif de vente. Quelle réponse est la plus saine ?",
                        'choices' => [
                            [
                                'choice_text' => "Maintenir l'analyse objective et escalader le problème selon la gouvernance prévue",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Supprimer l'alerte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Modifier les faits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Valider automatiquement le produit",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La fonction de contrôle doit pouvoir remonter les problèmes indépendamment de la pression commerciale. Les faits et les règles doivent rester la base de la décision.",
                    ],
                    [
                        'question' => "Quel est l'intérêt d'une piste d'audit pour une décision sensible ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle permet de retracer les informations examinées, les validations et la décision prise",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit automatiquement que la décision est correcte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace les procédures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime les conflits",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La piste d'audit facilite la supervision, la vérification et l'analyse a posteriori. Elle ne garantit pas à elle seule la qualité de la décision.",
                    ],
                    [
                        'question' => "Pourquoi un canal de signalement interne peut-il être utile ?",
                        'choices' => [
                            [
                                'choice_text' => "Il permet à des employés de faire remonter des comportements problématiques ou des violations selon un processus prévu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il remplace tous les contrôles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il garantit l'absence de fraude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il sert uniquement au marketing",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les mécanismes de signalement contribuent à faire remonter des problèmes qui pourraient autrement rester cachés. Leur efficacité dépend de la protection et du traitement des alertes.",
                    ],
                    [
                        'question' => "Un directeur reçoit plusieurs rapports indiquant un risque important mais n'engage aucune action ni suivi. Quel problème de gouvernance cela révèle-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Une faiblesse dans la supervision et la responsabilité face aux risques identifiés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une amélioration de la conformité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réduction automatique du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une meilleure qualité des données",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La gouvernance ne consiste pas seulement à recevoir des informations. Les responsables doivent aussi évaluer les risques et s'assurer que les actions nécessaires sont prises.",
                    ],
                    [
                        'question' => "Un client ne comprend pas les frais d'un produit parce que le conseiller a utilisé un vocabulaire très technique. Quel risque peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Une décision mal informée du client et un risque de conduite",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse du taux directeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse de la duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une augmentation de la liquidité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une information trop complexe peut empêcher le client de comprendre le coût réel ou les risques du produit. La communication doit être adaptée au contexte.",
                    ],
                    [
                        'question' => "Quel comportement correspond le mieux à une bonne gouvernance de la protection du client ?",
                        'choices' => [
                            [
                                'choice_text' => "Présenter clairement les caractéristiques, coûts, risques et éventuels conflits d'intérêts",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Promettre un rendement non garanti",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Masquer une commission",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Prioriser systématiquement le produit le plus rentable pour l'institution",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une protection adéquate repose notamment sur la transparence, la gestion des conflits et une information suffisamment claire pour permettre une décision éclairée.",
                    ],
                ],
            ],
            [
                'title' => "Reporting réglementaire et qualité des données",
                'description' => "Comprendre les contrôles nécessaires pour produire des informations réglementaires fiables et traçables.",
                'duration' => 28,
                'passing_score' => 63,
                'questions' => [
                    [
                        'question' => "Pourquoi une banque effectue-t-elle des contrôles avant d'envoyer un rapport réglementaire ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour vérifier que les données, calculs et périmètres sont cohérents avec les exigences et les procédures",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour augmenter son chiffre d'affaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour changer la réglementation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour éviter tout audit futur",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les contrôles préalables visent à détecter les erreurs de données, de calcul ou de périmètre avant la transmission du rapport.",
                    ],
                    [
                        'question' => "Deux systèmes fournissent des chiffres différents pour le même indicateur réglementaire. Quelle première action est pertinente ?",
                        'choices' => [
                            [
                                'choice_text' => "Identifier la source de l'écart et comprendre quelle donnée ou méthode est correcte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Choisir la valeur la plus élevée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Choisir celle qui donne le meilleur résultat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer l'écart",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un écart doit être expliqué avant la production du rapport. Choisir arbitrairement un chiffre peut créer une déclaration incorrecte.",
                    ],
                    [
                        'question' => "Pourquoi la traçabilité des modifications est-elle importante dans un fichier de reporting ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle permet de savoir qui a changé une donnée, pourquoi et sur quelle base",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle empêche toute correction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle garantit des bénéfices",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle rend les contrôles inutiles",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une piste de modification fiable permet de reconstituer l'historique d'un chiffre et de vérifier les validations associées.",
                    ],
                    [
                        'question' => "Une équipe trouve une erreur importante après l'envoi d'un rapport. Que doit-elle faire ?",
                        'choices' => [
                            [
                                'choice_text' => "Suivre la procédure applicable pour signaler, corriger et documenter l'erreur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Attendre le prochain exercice",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Modifier silencieusement les archives",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cacher l'erreur",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une erreur importante doit être traitée selon le processus de remédiation prévu. La transparence et la documentation sont essentielles.",
                    ],
                    [
                        'question' => "Pourquoi les définitions des indicateurs réglementaires doivent-elles être documentées ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour assurer une interprétation cohérente et reproductible du calcul",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour rendre le rapport plus long",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour éviter toute comparaison dans le temps",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour garantir un résultat favorable",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une définition claire du périmètre, des sources et de la méthode réduit les divergences entre équipes et périodes.",
                    ],
                    [
                        'question' => "Un indicateur réglementaire chute fortement alors que l'activité de la banque semble stable. Quelle approche est la plus prudente ?",
                        'choices' => [
                            [
                                'choice_text' => "Vérifier les données, les changements méthodologiques et les éventuelles erreurs avant de conclure",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Modifier le chiffre vers la moyenne passée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer la variation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer l'indicateur",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une variation inhabituelle peut être réelle ou résulter d'un problème de données ou de méthode. Elle doit être analysée plutôt que corrigée arbitrairement.",
                    ],
                    [
                        'question' => "Pourquoi une revue indépendante d'un reporting important peut-elle être utile ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle apporte un contrôle supplémentaire et peut détecter certaines erreurs non vues par le préparateur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit que le rapport est parfait",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace la première ligne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime les obligations de reporting",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un second regard réduit le risque de laisser passer une erreur et renforce la traçabilité, surtout pour les déclarations importantes.",
                    ],
                    [
                        'question' => "Une institution envoie régulièrement ses rapports avec quelques jours de retard. Quel risque cela peut-il créer ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque de non-respect des délais applicables et un risque de gouvernance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse automatique du capital",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse de la liquidité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun risque",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les délais peuvent faire partie intégrante des obligations. Les retards répétés indiquent aussi une faiblesse potentielle dans le processus de reporting.",
                    ],
                    [
                        'question' => "Pourquoi les sources de données utilisées dans un rapport doivent-elles être connues ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour pouvoir contrôler la provenance des chiffres et vérifier leur cohérence",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour empêcher toute mise à jour",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour déterminer le salaire du responsable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour fixer le taux directeur",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La traçabilité des sources permet de comprendre d'où viennent les chiffres et de vérifier les transformations effectuées.",
                    ],
                    [
                        'question' => "Un collaborateur saisit manuellement une valeur réglementaire sans contrôle alors qu'elle est calculée automatiquement dans un autre système. Quel risque apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque d'erreur de saisie et d'incohérence entre les sources",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une meilleure qualité des données",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réduction automatique du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun risque",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La saisie manuelle introduit une possibilité supplémentaire d'erreur. Les processus doivent réduire les manipulations inutiles et contrôler les exceptions.",
                    ],
                ],
            ],
            [
                'title' => "Contrôles internes et gestion des incidents",
                'description' => "Appliquer les principes de séparation des tâches, de gestion des incidents et de remédiation dans une institution financière.",
                'duration' => 27,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Une même personne peut créer un bénéficiaire, approuver un paiement important et modifier les journaux de contrôle. Quel problème apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Une concentration excessive de responsabilités qui augmente le risque de fraude ou d'erreur non détectée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une diversification efficace",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une meilleure liquidité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un contrôle renforcé",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Séparer les tâches réduit le risque qu'une seule personne puisse exécuter une opération sensible et masquer elle-même ses actions.",
                    ],
                    [
                        'question' => "Pourquoi les droits d'accès doivent-ils être retirés lorsqu'un salarié quitte l'entreprise ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour empêcher un accès ultérieur non autorisé aux systèmes et aux données",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour augmenter les ventes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour garantir la rentabilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour modifier les données historiques",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un compte restant actif après le départ d'un salarié crée un risque de sécurité et de contrôle des accès.",
                    ],
                    [
                        'question' => "Une institution découvre une fraude interne et veut simplement réinitialiser les mots de passe sans comprendre ce qui s'est passé. Pourquoi cette réponse est-elle insuffisante ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle ne traite pas nécessairement la cause, l'étendue de l'incident ni les faiblesses de contrôle qui l'ont permis",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle est toujours suffisante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime les obligations de signalement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle garantit qu'un incident ne se reproduira jamais",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La remédiation doit aussi identifier l'origine, l'étendue et les causes de l'incident afin d'empêcher sa répétition et de respecter les obligations applicables.",
                    ],
                    [
                        'question' => "Quel rôle joue un journal d'événements dans une investigation ?",
                        'choices' => [
                            [
                                'choice_text' => "Il peut aider à reconstituer les actions effectuées sur un système",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il garantit que toutes les actions étaient légitimes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il remplace les contrôles d'accès",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il supprime les incidents",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les journaux sont utiles pour retracer les événements, comprendre une séquence d'actions et soutenir une investigation.",
                    ],
                    [
                        'question' => "Une procédure exige une validation indépendante des paiements dépassant un certain seuil. Pourquoi ce seuil peut-il être utile ?",
                        'choices' => [
                            [
                                'choice_text' => "Il permet de renforcer le contrôle sur les opérations présentant une exposition plus importante",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il garantit qu'aucune fraude ne se produira",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il rend inutiles les autres contrôles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il augmente automatiquement le bénéfice",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les seuils permettent d'adapter les contrôles à l'importance de l'opération. Ils doivent toutefois être complétés par d'autres mesures adaptées.",
                    ],
                    [
                        'question' => "Après un incident, une équipe modifie le processus mais ne vérifie jamais si la correction fonctionne. Quel risque persiste ?",
                        'choices' => [
                            [
                                'choice_text' => "La faiblesse peut rester présente ou réapparaître sans être détectée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La conformité devient garantie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La correction devient inutilement parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque disparaît automatiquement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une remédiation doit être testée ou suivie afin de vérifier qu'elle traite réellement la cause identifiée.",
                    ],
                    [
                        'question' => "Pourquoi les incidents doivent-ils être classés selon leur gravité ou leur impact ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour prioriser les ressources, les délais d'escalade et les actions de remédiation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour éviter de signaler les petits incidents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter le nombre de rapports",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer les responsabilités",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La classification aide à traiter rapidement les incidents les plus graves et à appliquer des niveaux d'escalade proportionnés.",
                    ],
                    [
                        'question' => "Un salarié détecte un contrôle défaillant et hésite à le signaler par peur des conséquences professionnelles. Quel sujet de gouvernance cela soulève-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "La nécessité d'une culture où les incidents peuvent être remontés sans pression inappropriée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La duration des actifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La gestion des devises",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le rendement du capital",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les collaborateurs doivent pouvoir signaler les problèmes de manière appropriée. Une culture qui décourage les alertes peut laisser les risques cachés.",
                    ],
                    [
                        'question' => "Une institution corrige un incident mais ne documente pas la cause racine. Quelle faiblesse peut rester ?",
                        'choices' => [
                            [
                                'choice_text' => "La cause peut se reproduire parce que le problème de fond n'a pas été traité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque disparaît définitivement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le reporting devient plus fiable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La conformité devient automatique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Corriger le symptôme sans comprendre la cause profonde peut laisser le même mécanisme de défaillance intact.",
                    ],
                    [
                        'question' => "Quel comportement résume le mieux une bonne gestion d'incident ?",
                        'choices' => [
                            [
                                'choice_text' => "Détecter, contenir, analyser, remédier, documenter et vérifier l'efficacité des mesures",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Cacher l'événement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Modifier les journaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Attendre qu'un client le découvre",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une gestion complète couvre la détection, la réponse immédiate, l'analyse des causes, la remédiation et le suivi de l'efficacité des actions.",
                    ],
                ],
            ],
            [
                'title' => "Révision intégrée de Financial Regulation & Compliance",
                'description' => "Révision générale sous forme de situations professionnelles combinant KYC, AML, sanctions, reporting et gouvernance.",
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Une banque souhaite accélérer l'entrée en relation d'un client important mais le dossier KYC est incomplet. Quelle approche est la plus prudente ?",
                        'choices' => [
                            [
                                'choice_text' => "Compléter les contrôles requis avant de finaliser la relation selon la procédure applicable",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Créer le dossier avec des informations estimées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les éléments manquants parce que le client est rentable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les contrôles temporaires",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'urgence commerciale ne doit pas conduire à inventer ou ignorer des informations nécessaires. La procédure KYC doit rester la référence.",
                    ],
                    [
                        'question' => "Une alerte AML concerne une société dont les mouvements semblent inhabituels, mais des contrats cohérents expliquent les paiements. Quel est le meilleur réflexe ?",
                        'choices' => [
                            [
                                'choice_text' => "Documenter l'explication, vérifier les éléments et appliquer la procédure de clôture ou d'escalade",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Fermer automatiquement le compte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer toutes les futures alertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Déclarer une fraude certaine",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une explication crédible doit être vérifiée et documentée. Une alerte n'est pas une preuve d'infraction et le traitement doit suivre la procédure.",
                    ],
                    [
                        'question' => "Une alerte de sanctions apparaît sur le nom d'un bénéficiaire mais plusieurs identifiants ne correspondent pas. Que doit faire l'analyste ?",
                        'choices' => [
                            [
                                'choice_text' => "Effectuer une revue des identifiants avant de conclure à un vrai match",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Autoriser immédiatement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Bloquer définitivement sans analyse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Modifier les informations du bénéficiaire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'analyse des identifiants permet de distinguer un faux positif d'une véritable correspondance. La décision doit être documentée.",
                    ],
                    [
                        'question' => "Une institution découvre qu'un rapport réglementaire a été préparé avec une ancienne méthodologie. Que faut-il vérifier ?",
                        'choices' => [
                            [
                                'choice_text' => "L'impact sur les chiffres, la période concernée et la procédure de correction ou de notification applicable",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Uniquement la couleur du rapport",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de salariés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le prix de l'action",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une méthodologie obsolète peut affecter l'exactitude de la déclaration. Il faut mesurer l'impact et suivre la procédure prévue pour la correction.",
                    ],
                    [
                        'question' => "Un dirigeant demande à l'équipe de conformité de retarder un contrôle important jusqu'à la fin du trimestre pour ne pas pénaliser les ventes. Quel principe doit guider l'équipe ?",
                        'choices' => [
                            [
                                'choice_text' => "Les contrôles doivent rester indépendants et être réalisés selon les exigences et la gouvernance prévues",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les ventes doivent toujours passer avant les contrôles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le problème peut être supprimé du rapport",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le contrôle peut être modifié sans trace",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une fonction de contrôle doit conserver son indépendance. La pression commerciale ne doit pas conduire à retarder ou supprimer arbitrairement un contrôle important.",
                    ],
                    [
                        'question' => "Un ancien salarié conserve encore un accès administrateur à un système critique. Quel risque est prioritaire ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque de sécurité et de contrôle d'accès non autorisé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de liquidité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une hausse du capital",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un accès actif après le départ d'un salarié peut permettre une action non autorisée. La revue des comptes et la suppression des droits sont essentielles.",
                    ],
                    [
                        'question' => "Une entreprise reçoit de nombreux paiements internationaux mais ne peut expliquer leur finalité économique. Quel domaine de contrôle est particulièrement concerné ?",
                        'choices' => [
                            [
                                'choice_text' => "La vigilance AML et la compréhension de l'activité et de la source des fonds",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le calcul du dividende",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La duration des obligations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La stratégie marketing",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des flux internationaux sans logique économique claire peuvent nécessiter une analyse AML et une meilleure compréhension de la relation et des fonds.",
                    ],
                    [
                        'question' => "Un produit financier comporte une commission élevée liée aux ventes, mais cette commission n'est pas expliquée clairement au client. Quel risque apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque de conduite, de conflit d'intérêts et de mauvaise information du client",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de coupon",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de change uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une amélioration de la gouvernance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une rémunération commerciale peut créer un conflit d'intérêts et l'absence de transparence sur les frais peut conduire à une décision mal informée.",
                    ],
                    [
                        'question' => "Après un incident de conformité, l'équipe corrige le système mais ne teste pas la nouvelle procédure. Quelle faiblesse subsiste ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle ne sait pas encore si la mesure corrective fonctionne réellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La conformité est garantie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque disparaît automatiquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les procédures deviennent inutiles",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une action corrective doit être suivie ou testée pour vérifier son efficacité. Sans cela, le problème peut persister.",
                    ],
                    [
                        'question' => "Quel réflexe professionnel résume le mieux la compliance face à une situation ambiguë ?",
                        'choices' => [
                            [
                                'choice_text' => "S'appuyer sur les faits, la documentation, les règles applicables et les procédures internes, puis escalader si nécessaire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Choisir l'option la plus commerciale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Décider selon l'intuition uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les informations contradictoires",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une bonne décision de conformité est factuelle, documentée et cohérente avec la gouvernance. Les situations ambiguës doivent être escaladées plutôt que traitées arbitrairement.",
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
