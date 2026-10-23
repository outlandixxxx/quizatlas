<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ITArchitectureProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'it-architecture')->firstOrFail();

        $makeQuestion = static function (string $prompt, string $answer, array $distractors, string $explanation): array {
            return [
                'question' => $prompt,
                'explanation' => $explanation,
                'choices' => array_merge(
                    [['choice_text' => $answer, 'is_correct' => true]],
                    array_map(
                        static fn (string $choice): array => ['choice_text' => $choice, 'is_correct' => false],
                        $distractors
                    )
                ),
            ];
        };

        $quizzes = [
            [
                'title' => 'IT Architecture Professional — Enterprise Architecture Strategy',
                'description' => 'Arbitrez des décisions d’architecture d’entreprise à partir de la stratégie, des capacités métier, de la gouvernance et de la valeur attendue.',
                'difficulty' => 'Professional',
                'duration' => 28,
                'passing_score' => 70,
                'total_marks' => 11,
                'is_active' => true,
                'questions' => [
                    $makeQuestion(
                        'Après deux acquisitions, la direction veut rationaliser les applications avant de lancer une nouvelle plateforme. Le comité demande d’abord une vue des capacités réellement critiques. Le livrable à privilégier :',
                        'Une cartographie des capacités métier reliée aux applications, aux données et aux dépendances',
                        ['Un inventaire limité aux versions logicielles installées', 'Un diagramme réseau sans lien avec les processus métier', 'Une liste de produits choisis par chaque équipe'],
                        'La cartographie des capacités donne un cadre métier pour comparer les applications et préparer les changements sans supposer que chaque système a la même importance.'
                    ),
                    $makeQuestion(
                        'Le programme de transformation s’étend sur quatre ans, mais les priorités réglementaires et commerciales changent chaque trimestre. La cible d’architecture doit donc être présentée comme :',
                        'Une direction évolutive, découpée en étapes et révisée à partir des hypothèses observées',
                        ['Un plan détaillé figé jusqu’à la fin du programme', 'Une liste de technologies sans séquence de migration', 'Une promesse de remplacer toutes les applications historiques dans la première année'],
                        'Une architecture cible doit orienter les décisions; une feuille de route par étapes permet de l’ajuster lorsque les hypothèses ou priorités évoluent.'
                    ),
                    $makeQuestion(
                        'Deux directions demandent des solutions incompatibles pour un service partagé. Avant de trancher, l’architecte doit réunir :',
                        'Les exigences, contraintes, scénarios d’usage et conséquences attendues de chaque option',
                        ['Les préférences personnelles des responsables les plus anciens', 'Une comparaison de logos et de popularité des fournisseurs', 'Un vote sans critères ni analyse des dépendances'],
                        'La décision doit se fonder sur des besoins vérifiables et rendre explicites les conséquences, les risques et les compromis des options.'
                    ),
                    $makeQuestion(
                        'Une équipe souhaite déroger à un standard d’entreprise pour répondre à une contrainte locale de latence. La gouvernance conserve la dérogation si le dossier précise :',
                        'La contrainte, les risques acceptés, le périmètre et une date de réévaluation',
                        ['Uniquement le nom du fournisseur retenu', 'Que le standard ne s’applique désormais à aucune équipe', 'Que l’exception reste permanente même si le besoin disparaît'],
                        'Une exception justifiée et limitée peut être raisonnable. Sa portée et sa réévaluation évitent qu’elle ne devienne une règle implicite et durable.'
                    ),
                    $makeQuestion(
                        'Le portefeuille contient trois outils qui couvrent la même capacité métier, mais aucun propriétaire ne connaît leur coût complet. Pour préparer un arbitrage défendable, il faut comparer :',
                        'La valeur rendue, les coûts de cycle de vie, les risques et les dépendances de chaque outil',
                        ['Le seul coût de licence de l’année en cours', 'L’âge des outils sans examiner leur usage', 'Le nombre de fonctionnalités annoncées par les fournisseurs'],
                        'Le choix de conserver, remplacer ou consolider un outil dépend de son usage et de ses coûts et risques sur la durée, pas d’un seul indicateur.'
                    ),
                    $makeQuestion(
                        'Un ADR approuve un service managé sous l’hypothèse que ses données peuvent être exportées dans un format exploitable. Six mois plus tard, cette hypothèse est contestée. L’action appropriée :',
                        'Réexaminer l’ADR et valider l’hypothèse d’export avant d’élargir l’adoption',
                        ['Supprimer l’ADR pour éviter de documenter le désaccord', 'Poursuivre le déploiement puisque la décision est déjà prise', 'Remplacer tous les services managés de l’entreprise'],
                        'Un ADR conserve les hypothèses qui soutiennent une décision. Une hypothèse devenue incertaine justifie une réévaluation avant d’augmenter l’exposition.'
                    ),
                    $makeQuestion(
                        'Le comité d’investissement compare une refonte et une mise à niveau ciblée. Les deux respectent les exigences techniques, mais une seule finance une capacité métier prioritaire. Le critère déterminant :',
                        'La contribution mesurable à la capacité métier, rapprochée du coût et du risque',
                        ['Le nombre de composants nouveaux dans la refonte', 'La préférence pour une architecture plus récente', 'La quantité de documentation produite'],
                        'Une décision d’architecture d’entreprise doit relier le coût et le risque à la valeur métier attendue; la nouveauté technique ne suffit pas.'
                    ),
                    $makeQuestion(
                        'Une revue valide une solution qui respecte les fonctions demandées, mais aucune équipe n’a défini les objectifs de disponibilité, de sécurité ou de maintenabilité. La revue est incomplète parce que :',
                        'Les qualités attendues influencent des choix structurants et doivent être évaluées avec les fonctions',
                        ['Les exigences non fonctionnelles ne concernent que l’exploitation après livraison', 'La sécurité peut être ajoutée sans modifier les interfaces', 'La disponibilité est toujours garantie par l’hébergement cloud'],
                        'Les qualités de service affectent notamment le déploiement, les dépendances, la sécurité et la capacité; elles doivent être clarifiées avant de figer l’architecture.'
                    ),
                    $makeQuestion(
                        'Les équipes suivent un principe commun de gestion des identités, mais choisissent des bases de données différentes selon leurs domaines. Cette gouvernance est cohérente si elle :',
                        'Impose les contrôles nécessaires tout en autorisant des choix contextualisés',
                        ['Exige une base unique pour tous les domaines sans exception', 'Laisse chaque équipe ignorer les exigences de sécurité', 'Interdit toute évolution des standards après publication'],
                        'Des principes partagés peuvent fixer les garde-fous sans imposer un choix identique lorsque les besoins et contraintes des domaines diffèrent.'
                    ),
                    $makeQuestion(
                        'Une transformation atteint ses jalons techniques, mais les utilisateurs continuent d’exécuter le processus critique dans un ancien système. Le bilan doit d’abord vérifier :',
                        'Si le changement a produit le résultat métier attendu et quels obstacles limitent son adoption',
                        ['Si le nombre de serveurs a augmenté comme prévu', 'Si toutes les équipes ont utilisé le même langage de programmation', 'Si l’ancien système peut être supprimé immédiatement'],
                        'La livraison technique ne démontre pas à elle seule la valeur. L’usage réel et les obstacles métier permettent de décider des ajustements suivants.'
                    ),
                    $makeQuestion(
                        'Une décision engage l’entreprise sur un format propriétaire difficile à exporter et coûteux à remplacer. Avant l’engagement, l’architecte doit :',
                        'Évaluer le coût de sortie et les options de réduction du risque au regard du bénéfice attendu',
                        ['Interdire par principe tout format propriétaire', 'Supposer que le fournisseur maintiendra toujours la compatibilité', 'Reporter l’évaluation jusqu’à la fin du contrat'],
                        'Le verrouillage n’est pas toujours à éviter à tout prix; il faut comparer la valeur du service au coût et aux conséquences d’une sortie.'
                    ),
                ],
            ],
            [
                'title' => 'IT Architecture Professional — Architecture de systèmes distribués à grande échelle',
                'description' => 'Analyse des architectures distribuées, des limites de services, de la résilience des appels et des plateformes internes.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    $makeQuestion(
                        'Une requête de paiement traverse six services synchrones. Le temps de réponse au 99e percentile dépasse la cible alors que chaque service respecte sa cible locale. L’analyse initiale doit porter sur :',
                        'Le budget de latence de bout en bout et la contribution de chaque dépendance au chemin critique',
                        ['La seule moyenne de latence du service de paiement', 'Le remplacement immédiat de tous les services par un seul processus', 'L’augmentation uniforme de la taille des machines'],
                        'Les délais de chaque dépendance s’accumulent sur le chemin complet; les objectifs locaux ne garantissent pas le respect de la cible de bout en bout.'
                    ),
                    $makeQuestion(
                        'Une panne d’un service de recherche épuise progressivement les connexions utilisées par le service de commande. L’isolation des pools de ressources par fonction répond à ce risque grâce au :',
                        'Bulkhead, qui limite la propagation de l’épuisement des ressources',
                        ['Cache global, qui force tous les services à partager le même pool', 'Retry sans plafond sur chaque appel', 'Couplage direct entre la base de recherche et celle des commandes'],
                        'Le bulkhead sépare des ressources afin qu’une charge ou panne d’un flux ne consomme pas les capacités nécessaires aux autres fonctions.'
                    ),
                    $makeQuestion(
                        'Pendant une dégradation, plusieurs clients relancent leurs requêtes toutes les 100 ms. Le trafic de reprise aggrave la saturation. La politique à corriger combine :',
                        'Un nombre limité de tentatives, un backoff avec jitter et une condition d’arrêt',
                        ['Des tentatives illimitées au même intervalle', 'Un timeout supprimé pour laisser chaque appel finir', 'Une relance de toutes les requêtes depuis le début du parcours utilisateur'],
                        'Des retries non bornés ou synchronisés peuvent amplifier la charge. Le backoff, le jitter et une limite diminuent ce risque.'
                    ),
                    $makeQuestion(
                        'Un consommateur de commandes redémarre après un timeout sans savoir si la commande précédente a été enregistrée. L’interface de traitement devrait prévoir :',
                        'Une clé d’idempotence ou un mécanisme équivalent de déduplication',
                        ['Une nouvelle commande avec un identifiant différent à chaque tentative', 'La désactivation de toute journalisation', 'La suppression des commandes dont le résultat est inconnu'],
                        'Une reprise peut répéter une opération déjà appliquée. Un identifiant stable permet de reconnaître le doublon et d’éviter une seconde conséquence métier.'
                    ),
                    $makeQuestion(
                        'L’équipe opérationnelle ne sait pas si un message perdu, répété ou livré dans le désordre est acceptable pour le domaine. Avant le choix du broker, elle doit définir :',
                        'La sémantique de livraison et les garanties nécessaires au traitement métier',
                        ['La couleur des dashboards du broker', 'Le nombre maximal de langages utilisés par les producteurs', 'Une garantie universelle « exactly once » sans examiner les effets métier'],
                        'Les garanties de livraison influencent les doublons, l’ordre, la reprise et le traitement idempotent. Elles doivent être évaluées selon le cas métier.'
                    ),
                    $makeQuestion(
                        'La plateforme interne reçoit peu d’adoption malgré des fonctions nombreuses. Les développeurs indiquent que le chemin standard exige plusieurs tickets et validations manuelles. Le prochain indicateur utile :',
                        'Le délai et les étapes nécessaires pour accomplir un parcours développeur courant',
                        ['Le nombre total de microservices hébergés', 'Le nombre de pages dans la documentation de la plateforme', 'Le volume de tickets ouverts par l’équipe plateforme, sans contexte'],
                        'Le temps de réalisation d’un parcours courant révèle la friction que l’équipe veut réduire et aide à vérifier si le self-service apporte une valeur réelle.'
                    ),
                    $makeQuestion(
                        'Une plateforme de déploiement automatise la création des ressources, mais une équipe peut demander des permissions administrateur permanentes. Le garde-fou à intégrer :',
                        'Des rôles limités par tâche, avec approbation ou élévation temporaire pour les opérations sensibles',
                        ['Un compte administrateur partagé entre toutes les équipes', 'La suppression de toute autonomie des développeurs', 'L’attribution du rôle le plus élevé à chaque pipeline pour simplifier le support'],
                        'Le self-service doit réduire les tâches manuelles sans accorder plus de privilèges que nécessaire. Les opérations sensibles peuvent exiger une élévation temporaire ou un contrôle.'
                    ),
                    $makeQuestion(
                        'Une équipe produit une plateforme « golden path ». Un service réglementé ne peut pas utiliser son modèle standard sans contrôle supplémentaire. La conception la plus saine :',
                        'Proposer un parcours standard documenté et une extension contrôlée pour les contraintes justifiées',
                        ['Forcer le service à ignorer ses obligations pour rester sur le modèle', 'Autoriser tout contournement sans visibilité', 'Dupliquer la plateforme complète pour chaque équipe'],
                        'Un chemin standard facilite les usages fréquents, mais une exception gouvernée permet de respecter les contraintes réelles sans multiplier les plateformes.'
                    ),
                    $makeQuestion(
                        'Les déploiements applicatifs dépendent de la plateforme interne, elle-même disponible seulement pendant les heures ouvrées. Pour une organisation qui publie en continu, le risque à traiter :',
                        'La plateforme est une dépendance critique dont la disponibilité doit correspondre aux besoins de livraison',
                        ['Les équipes n’ont pas besoin de plan de reprise si la plateforme est interne', 'La disponibilité de la plateforme peut être ignorée si le code est versionné', 'Chaque équipe doit créer son propre outil de déploiement'],
                        'Une plateforme qui permet les changements de production devient une dépendance opérationnelle; son niveau de service doit être aligné sur l’activité qu’elle soutient.'
                    ),
                    $makeQuestion(
                        'Un service dépasse régulièrement le budget de latence après un appel à une API partenaire. Le contrat d’intégration devrait préciser :',
                        'Le timeout maximal, le comportement en cas d’échec et les limites de charge',
                        ['Une attente illimitée pour préserver la réponse complète', 'La responsabilité exclusive du partenaire, sans mécanisme côté appelant', 'Une nouvelle tentative immédiate pour chaque erreur, sans plafond'],
                        'Un contrat d’intégration robuste définit les délais et les réponses aux erreurs, et évite qu’une dépendance distante bloque indéfiniment le service.'
                    ),
                    $makeQuestion(
                        'Un changement d’API interne oblige quatre équipes à modifier leurs clients le même jour. La frontière de service mérite une révision pour introduire :',
                        'Un contrat versionné et une période de compatibilité planifiée',
                        ['Une base de données partagée à laquelle tous les clients se connectent directement', 'Un changement simultané sans annonce ni tests', 'Une copie du même service pour chaque client'],
                        'Une compatibilité explicite et une version contrôlée permettent aux producteurs et consommateurs d’évoluer sans bascule coordonnée systématique.'
                    ),
                    $makeQuestion(
                        'Le nombre de services a triplé, mais les équipes passent plus de temps à gérer déploiements, alertes et dépendances qu’à livrer de la valeur. Le diagnostic à instruire :',
                        'La décomposition distribuée a peut-être dépassé les bénéfices obtenus par les frontières métier',
                        ['Le système manque nécessairement de microservices', 'Le problème sera résolu en augmentant le nombre de clusters', 'Les coûts opérationnels n’ont aucun lien avec les choix d’architecture'],
                        'La distribution peut améliorer l’autonomie, mais elle ajoute des coûts de coordination, d’observabilité et d’exploitation qui doivent être justifiés par la valeur obtenue.'
                    ),
                ],
            ],
            [
                'title' => 'IT Architecture Professional — Data Architecture et gouvernance des données',
                'description' => 'Décisions professionnelles sur la propriété, la qualité, les contrats, la protection et le cycle de vie des données.',
                'difficulty' => 'Professional',
                'duration' => 32,
                'passing_score' => 70,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    $makeQuestion(
                        'Deux domaines mettent à jour le même attribut client et aucun ne sait arbitrer les divergences. La gouvernance doit commencer par :',
                        'Désigner le domaine responsable de cette donnée et documenter les règles de modification',
                        ['Créer une troisième copie sans propriétaire', 'Choisir automatiquement la valeur la plus récente, quelle que soit sa source', 'Interdire aux deux domaines de corriger les données'],
                        'Une responsabilité explicite et des règles de maîtrise clarifient qui peut modifier la donnée et comment les conflits sont résolus.'
                    ),
                    $makeQuestion(
                        'Un tableau de bord financier change de résultat après une mise à jour du pipeline, sans changement visible des données sources. Le besoin d’audit porte en priorité sur :',
                        'La traçabilité des transformations, versions de code et jeux de données d’entrée',
                        ['Le nombre de colonnes affichées dans le tableau de bord', 'La durée de conservation des journaux réseau uniquement', 'La duplication du tableau de bord dans un second outil'],
                        'La traçabilité permet de relier un résultat à ses sources et transformations et facilite l’analyse des changements de pipeline.'
                    ),
                    $makeQuestion(
                        'Un domaine publie des données sous forme de produit destiné à plusieurs consommateurs. Le contrat devrait annoncer au minimum :',
                        'Le schéma, la signification, le propriétaire, les règles de qualité et les modalités d’évolution',
                        ['Un nom de table et une adresse IP seulement', 'Une promesse que le schéma ne changera jamais', 'Les identifiants personnels de tous les producteurs'],
                        'Les consommateurs ont besoin de comprendre le contenu, la qualité attendue, la responsabilité et la compatibilité du produit de données.'
                    ),
                    $makeQuestion(
                        'Les équipes corrigent les mêmes erreurs de données à chaque chargement, mais personne ne suit leur fréquence ni leur impact. Le contrôle de qualité à mettre en place :',
                        'Des règles mesurables associées à des responsables et à un processus de correction',
                        ['Un nettoyage manuel ponctuel sans journal des résultats', 'La suppression des lignes qui ne passent pas tous les contrôles', 'Une hausse de stockage sans modification du pipeline'],
                        'Des règles mesurables rendent les défauts visibles; des responsables et une procédure permettent de corriger les causes sans éliminer aveuglément les données.'
                    ),
                    $makeQuestion(
                        'Une plateforme conserve des données personnelles après la fin de leur usage prévu. L’architecte doit faire relier la politique de rétention à :',
                        'La finalité, aux obligations applicables, aux besoins métier et aux mécanismes de suppression',
                        ['La capacité maximale du disque uniquement', 'La date de création de la base, sans tenir compte des enregistrements', 'Une conservation indéfinie afin de faciliter les analyses futures'],
                        'La durée de conservation doit être justifiée par la finalité et les obligations pertinentes, puis appliquée avec des mécanismes contrôlables.'
                    ),
                    $makeQuestion(
                        'Une organisation copie chaque nuit plusieurs téraoctets entre régions pour une analyse qui s’exécute une fois par mois. Avant d’ajouter des nœuds de calcul, l’évaluation devrait mesurer :',
                        'Le coût, le volume et la nécessité du déplacement des données ainsi que la fréquence réelle des traitements',
                        ['Le nombre de tableaux de bord créés cette année', 'La latence du clavier des analystes', 'La taille des instances sans examiner les transferts'],
                        'Le mouvement des données peut représenter un coût et une latence importants; la fréquence et le volume déterminent si cette copie est justifiée.'
                    ),
                                        $makeQuestion(
                        'Les rapports de fin de journée saturent la base transactionnelle pendant une période de forte activité. Le métier accepte un décalage de trente minutes. La séparation à envisager :',
                        'Exécuter les charges analytiques sur une réplique ou une plateforme analytique avec une fraîcheur de données explicitement acceptée',
                        ['Augmenter la priorité des requêtes de reporting sur la base transactionnelle', 'Dupliquer les écritures vers chaque tableau de bord', 'Supprimer les transactions pendant les rapports'],
                        'Isoler les lectures analytiques peut protéger les transactions. Le choix du support et du délai de réplication doit respecter le besoin de fraîcheur accepté par le métier.'
                    ),
                    $makeQuestion(
                        'Un événement de commande est consommé par un système de facturation et un système de support. Une modification de son schéma est proposée. Le contrôle de compatibilité doit vérifier :',
                        'Que les consommateurs existants peuvent continuer à traiter les champs et comportements publiés',
                        ['Que le producteur peut supprimer tous les champs sans préavis', 'Que chaque consommateur se connecte à la base privée du producteur', 'Que tous les consommateurs sont réécrits dans le même langage'],
                        'Un contrat d’événement partagé évolue sans casser les consommateurs existants; les changements compatibles et les versions doivent être planifiés.'
                    ),
                    $makeQuestion(
                        'Une équipe demande un accès complet aux données de production pour déboguer une anomalie. Les données contiennent des informations personnelles, mais le défaut se reproduit avec un jeu synthétique. La réponse proportionnée :',
                        'Utiliser le jeu synthétique et n’accorder un accès réel que s’il est nécessaire, limité et contrôlé',
                        ['Accorder un accès permanent à toutes les tables', 'Copier la base entière sur les postes de développement', 'Désactiver l’audit pour accélérer le diagnostic'],
                        'Le jeu synthétique réduit l’exposition. Tout accès réel restant nécessaire doit être justifié, limité et soumis aux contrôles adaptés.'
                    ),
                    $makeQuestion(
                        'Deux applications revendiquent chacune la maîtrise du numéro de contrat et écrasent parfois la valeur de l’autre. Le schéma cible doit établir :',
                        'Une source d’autorité et des règles d’échange pour cet attribut métier',
                        ['Une règle qui conserve toujours la dernière écriture reçue sans provenance', 'Une troisième application qui modifie les deux bases simultanément', 'La suppression du numéro de contrat des deux systèmes'],
                        'Définir la source d’autorité et les règles d’échange évite que plusieurs systèmes écrivent des versions concurrentes sans arbitrage.'
                    ),
                    $makeQuestion(
                        'La restauration d’un entrepôt est terminée, mais les dernières transactions métier sont absentes. Le test de reprise doit donc mesurer les résultats par rapport à :',
                        'L’objectif de perte de données acceptable et au point de cohérence restauré',
                        ['La seule vitesse de création des machines', 'Le nombre de requêtes SQL dans les journaux', 'La date du dernier changement d’interface'],
                        'Un exercice de restauration doit vérifier la cohérence et la fraîcheur des données restaurées par rapport aux objectifs métier.'
                    ),
                    $makeQuestion(
                        'Les consommateurs d’un flux reçoivent des enregistrements dupliqués après une reprise de traitement. Le contrat du flux doit préciser :',
                        'La possibilité de doublons et la responsabilité de déduplication ou d’idempotence',
                        ['Que les doublons ne peuvent jamais survenir dans un système distribué', 'Que le consommateur doit supprimer tout enregistrement répété sans clé métier', 'Que les événements doivent être modifiés après leur publication'],
                        'Les reprises peuvent produire des doublons selon les garanties du flux; le contrat doit décrire comment les consommateurs les reconnaissent et les traitent.'
                    ),
                ],
            ],
            [
                'title' => 'IT Architecture Professional — Cloud, hybride et multi-cloud',
                'description' => 'Arbitrez placement des charges, services natifs, portabilité, gouvernance et économie des environnements cloud.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    $makeQuestion(
                        'Le comité propose un déploiement multi-cloud pour chaque application, sans exigence de continuité ou de portabilité identifiée. La recommandation à défendre :',
                        'Évaluer les objectifs concrets et ne retenir le multi-cloud que si ses bénéfices compensent ses coûts et sa complexité',
                        ['Adopter immédiatement tous les fournisseurs disponibles', 'Interdire l’usage de services natifs chez chaque fournisseur', 'Dupliquer les environnements sans plan de test ni équipe d’exploitation'],
                        'Le multi-cloud peut répondre à des besoins précis, mais ajoute des différences de compétences, d’outils, de sécurité et d’exploitation qu’il faut justifier.'
                    ),
                    $makeQuestion(
                        'Une application garde ses traitements dans un centre de données local et interroge un service cloud à chaque transaction. Les temps de réponse sont instables. Le diagnostic prioritaire :',
                        'Mesurer la latence, la disponibilité et les volumes du chemin hybride avant de décider du placement',
                        ['Remplacer les certificats TLS sans mesurer les appels', 'Augmenter la capacité du serveur local sans examiner le réseau', 'Déplacer toutes les données en cloud sans évaluer les obligations métier'],
                        'Le trajet réseau inter-environnements peut affecter chaque requête; il faut mesurer le chemin et comprendre les contraintes avant de déplacer les composants.'
                    ),
                                        $makeQuestion(
                        'Une entreprise héberge les environnements de plusieurs unités dans un seul compte cloud. Les équipes souhaitent une facturation et des permissions séparées tout en conservant une gouvernance centrale. La structure à étudier :',
                        'Organiser les comptes ou projets par frontières de responsabilité, avec des politiques et une visibilité centralisées',
                        ['Créer un compte partagé et donner des permissions globales à chaque unité', 'Séparer les unités par noms de ressources seulement', 'Créer un fournisseur cloud différent pour chaque application'],
                        'Des frontières de compte ou de projet peuvent séparer administration et coûts, tandis que des contrôles communs conservent une gouvernance cohérente.'
                    ),
                    $makeQuestion(
                        'Les dépenses de calcul baissent après optimisation, mais le coût par commande augmente parce que les transferts de données ont été multipliés. Le suivi FinOps doit rapprocher :',
                        'Le coût unitaire métier des ressources, du réseau et des services associés',
                        ['Le coût des machines uniquement', 'Le nombre de comptes cloud sans consommation', 'La facture totale de l’année précédente sans volume d’activité'],
                        'Un indicateur par unité métier relie les dépenses à la valeur produite et révèle les coûts réseau qui seraient masqués par l’analyse du seul calcul.'
                    ),
                    $makeQuestion(
                        'Une équipe peut créer des ressources dans vingt comptes cloud avec des conventions différentes. Le modèle de gouvernance doit offrir :',
                        'Des garde-fous communs automatisés et des limites d’autonomie adaptées au risque',
                        ['Un compte partagé sans séparation des environnements', 'Une validation manuelle de chaque lecture de métrique', 'Des règles différentes dans chaque compte sans inventaire central'],
                        'Des contrôles automatisés et une autonomie cadrée assurent une base cohérente tout en permettant aux équipes de répondre à leurs besoins.'
                    ),
                                        $makeQuestion(
                        'Les environnements de test créés pour chaque branche restent actifs plusieurs semaines après la fusion. La facture augmente sans hausse de l’activité métier. Le contrôle le plus adapté :',
                        'Attribuer une durée de vie aux ressources temporaires et automatiser leur arrêt ou suppression après vérification',
                        ['Augmenter uniformément les limites de dépenses', 'Désactiver les environnements de test dès leur création', 'Créer des copies permanentes pour chaque branche'],
                        'Un cycle de vie automatisé réduit les ressources temporaires oubliées. Les données persistantes et exceptions nécessaires doivent être protégées avant le nettoyage.'
                    ),
                    $makeQuestion(
                        'Le directeur financier veut réduire la facture cloud de 15 %, tandis que les équipes craignent une baisse de disponibilité. Le plan d’optimisation doit lier chaque changement à :',
                        'Un indicateur de coût et à des objectifs de service surveillés avant et après l’ajustement',
                        ['La suppression immédiate des environnements de reprise', 'Une baisse uniforme des ressources sans mesurer la charge', 'Un plafond budgétaire sans alertes ni responsabilité'],
                        'L’optimisation doit préserver les objectifs de service; une mesure avant/après permet de vérifier l’effet sur le coût et la qualité.'
                    ),
                    $makeQuestion(
                        'Une application réglementée utilise plusieurs régions. Les équipes ne savent pas où les données de journalisation sont stockées après une bascule. Avant de généraliser l’architecture, il faut :',
                        'Cartographier les flux et confirmer que les règles de résidence et de conservation s’appliquent à chaque région',
                        ['Désactiver la journalisation pendant les bascules', 'Conserver les données uniquement dans la région la plus rapide', 'Confier toute décision de conformité au fournisseur cloud'],
                        'La localisation et la conservation concernent aussi les flux secondaires comme les journaux; elles doivent être vérifiées sur tous les chemins d’architecture.'
                    ),
                    $makeQuestion(
                        'Un fournisseur annonce une limite de capacité qui ne peut être augmentée immédiatement. Le service dépend fortement de cette limite lors des pointes saisonnières. Le plan de capacité doit intégrer :',
                        'Le quota confirmé, le délai d’augmentation et un comportement sûr lorsque la limite est atteinte',
                        ['La capacité théorique maximale du code uniquement', 'Un autoscaling illimité qui ignore les limites du fournisseur', 'Un redémarrage automatique à chaque erreur de quota'],
                        'Les quotas imposent des limites réelles; le plan doit inclure la capacité confirmée, les délais et le comportement du système en cas de saturation.'
                    ),
                    $makeQuestion(
                        'Une nouvelle charge d’analyse peut s’exécuter localement ou dans le cloud. Les contraintes de confidentialité et les coûts de transfert diffèrent. Le choix devrait reposer sur :',
                        'Une comparaison des exigences de données, du coût total, de la performance et des responsabilités d’exploitation',
                        ['La préférence d’une équipe pour un fournisseur', 'Le tarif horaire des processeurs sans inclure les transferts', 'La règle selon laquelle toute charge élastique doit aller au cloud'],
                        'Le placement d’une charge dépend de plusieurs contraintes. Une comparaison complète inclut les données, les performances, les coûts et les compétences d’exploitation.'
                    ),
                ],
            ],
            [
                'title' => 'IT Architecture Professional — Security Architecture et Zero Trust',
                'description' => 'Mettez à l’épreuve les frontières de confiance, les identités, la chaîne de livraison, la détection et la réponse.',
                'difficulty' => 'Professional',
                'duration' => 32,
                'passing_score' => 70,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    $makeQuestion(
                        'Un service interne n’est accessible que depuis le réseau de l’entreprise, mais plusieurs comptes utilisateurs ont été compromis. La décision de sécurité à corriger :',
                        'Ne plus considérer la seule localisation réseau comme une preuve suffisante de confiance',
                        ['Autoriser automatiquement toute requête provenant du réseau interne', 'Supprimer l’authentification pour les services internes', 'Déplacer le service sur un sous-réseau sans journaliser les accès'],
                        'La présence sur un réseau interne ne prouve ni l’identité ni la légitimité d’une demande; les accès doivent être évalués selon les politiques définies.'
                    ),
                    $makeQuestion(
                        'Un pipeline de déploiement utilise le même compte très privilégié pour vingt applications. Une compromission d’un dépôt pourrait toucher l’ensemble des environnements. Le changement prioritaire :',
                        'Attribuer des identités distinctes et des permissions limitées à chaque pipeline et environnement',
                        ['Partager un deuxième compte administrateur en cas d’urgence', 'Stocker le mot de passe du compte dans le dépôt privé', 'Accorder un accès permanent à toutes les ressources pour éviter les échecs'],
                        'Des identités dédiées et limitées réduisent le rayon d’impact et améliorent l’attribution des opérations.'
                    ),
                    $makeQuestion(
                        'Un administrateur n’effectue des opérations critiques qu’occasionnellement. Le modèle d’accès recommandé pour ce rôle :',
                        'Élévation temporaire, justifiée et journalisée, avec révocation automatique',
                        ['Privilège permanent partagé avec son équipe', 'Accès anonyme aux outils d’administration', 'Un mot de passe commun renouvelé uniquement après un incident'],
                        'L’accès juste-à-temps limite la fenêtre d’exposition et fournit un contexte vérifiable pour les actions privilégiées.'
                    ),
                    $makeQuestion(
                        'Un attaquant ayant compromis un agent de build peut modifier les paquets produits avant leur publication. Les contrôles doivent donc couvrir :',
                        'L’intégrité des outils de build, la provenance des artefacts et leur vérification à la livraison',
                        ['Uniquement les vulnérabilités connues dans le code source', 'Le nombre de branches Git du dépôt', 'La désactivation des signatures pour réduire les étapes'],
                        'La chaîne de livraison comprend les outils et artefacts, pas seulement le code. Leur provenance et leur intégrité doivent pouvoir être vérifiées.'
                    ),
                    $makeQuestion(
                        'Les journaux d’administration sont écrits sur le même serveur qu’ils décrivent. Après une intrusion, plusieurs traces ont disparu. L’architecture de journalisation devrait :',
                        'Transmettre les événements vers un stockage centralisé à accès séparé et protégé contre l’altération',
                        ['Conserver une copie uniquement dans le même répertoire système', 'Permettre aux opérateurs de modifier les traces sans historique', 'Désactiver l’horodatage afin de réduire le volume'],
                        'Des traces envoyées hors de l’hôte compromis sont plus difficiles à altérer avec le système affecté et facilitent les investigations.'
                    ),
                    $makeQuestion(
                        'Une nouvelle intégration expose des données sensibles à un fournisseur tiers et ajoute un compte de service. Le threat model existant date d’avant cette intégration. La revue doit :',
                        'Actualiser les actifs, les flux, les identités et les chemins de menace introduits par le changement',
                        ['Rester inchangée puisque le système est déjà en production', 'Se limiter au scan des dépendances de l’interface', 'Remplacer l’analyse par une approbation de calendrier'],
                        'Une nouvelle intégration modifie les flux et les frontières; le modèle de menace doit évoluer avec les chemins d’attaque et les actifs concernés.'
                    ),
                    $makeQuestion(
                        'Un service de reporting doit lire des données clients, mais ne doit jamais modifier les dossiers source. Les contrôles d’accès doivent appliquer :',
                        'Une permission de lecture limitée aux données nécessaires, sans droit de mise à jour',
                        ['Un rôle administrateur pour simplifier les requêtes', 'Un compte partagé avec le service de modification', 'Un accès complet à toutes les bases par défaut'],
                        'Les permissions doivent correspondre à la fonction réelle du service et réduire les actions possibles en cas de compromission.'
                    ),
                                        $makeQuestion(
                        'Après une acquisition, les employés doivent accéder à des applications des deux organisations sans créer un compte local distinct dans chaque service. Le modèle d’intégration à évaluer :',
                        'Une fédération d’identités avec des règles d’accès et un cycle de vie définis entre les organisations',
                        ['Un mot de passe administrateur commun aux deux organisations', 'La copie manuelle des comptes dans chaque application sans synchronisation', 'L’accès anonyme depuis les réseaux des deux entreprises'],
                        'La fédération peut éviter la multiplication des comptes locaux, à condition de définir les identités de confiance, les permissions, la révocation et les responsabilités de chaque organisation.'
                    ),
                    $makeQuestion(
                        'Un service de production communique librement avec toutes les autres zones. Après un incident mineur, l’équipe veut limiter les mouvements latéraux. La mesure architecturale :',
                        'Définir des flux autorisés entre zones et appliquer une segmentation vérifiable',
                        ['Autoriser tout le trafic interne pour éviter les erreurs de configuration', 'Bloquer aussi les flux nécessaires au fonctionnement métier', 'Remplacer les règles par une convention orale entre équipes'],
                        'Des frontières explicites et des flux limités restreignent les déplacements possibles après compromission sans bloquer les communications requises.'
                    ),
                    $makeQuestion(
                        'Les contrôles préventifs sont nombreux, mais l’équipe découvre les compromissions uniquement après des plaintes clients. Le programme sécurité doit renforcer :',
                        'La détection, la corrélation et les procédures de réponse aux événements',
                        ['Le nombre de règles préventives sans vérifier leur couverture', 'La rétention des données sans capacité de recherche', 'La suppression des alertes pour éviter les faux positifs'],
                        'Aucune prévention n’élimine tous les incidents; les signaux, leur corrélation et une réponse préparée réduisent le délai de détection et d’action.'
                    ),
                    $makeQuestion(
                        'Une clé de chiffrement d’application doit être renouvelée sans interruption des traitements. La conception doit prévoir :',
                        'Une période de transition contrôlée où les anciennes données restent lisibles et les nouvelles écritures utilisent la clé active',
                        ['La suppression immédiate de l’ancienne clé avant tout test', 'Le chiffrement de toutes les données avec une clé stockée dans le code', 'La désactivation du chiffrement pendant la rotation'],
                        'La rotation opérationnelle exige une transition où les données existantes peuvent être relues et les nouvelles protégées par la clé cible.'
                    ),
                    $makeQuestion(
                        'Les politiques de sécurité varient entre comptes cloud parce que chaque équipe les a configurées manuellement. Une amélioration durable :',
                        'Distribuer des politiques de référence automatisées, détecter les écarts et assigner leur correction',
                        ['Publier un document PDF sans vérifier les ressources', 'Désactiver les journaux de configuration pour réduire les alertes', 'Donner à chaque équipe un rôle global afin d’éviter les différences'],
                        'L’automatisation permet d’appliquer et de contrôler les règles de façon répétable, tandis que le suivi des écarts rend la gouvernance vérifiable.'
                    ),
                ],
            ],
            [
                'title' => 'IT Architecture Professional — Migration, Modernisation et Transformation',
                'description' => 'Décidez des trajectoires de modernisation, de coexistence, de compatibilité et de validation des migrations.',
                'difficulty' => 'Professional',
                'duration' => 28,
                'passing_score' => 70,
                'total_marks' => 11,
                'is_active' => true,
                'questions' => [
                    $makeQuestion(
                        'Une application historique possède des interfaces documentées, mais les équipes découvrent des traitements nocturnes qui alimentent plusieurs systèmes. Avant de déplacer un module, la première étape :',
                        'Cartographier les flux réels, les propriétaires et les dépendances observées',
                        ['Remplacer immédiatement les traitements nocturnes', 'Considérer la documentation officielle comme exhaustive', 'Déplacer la base avant de mesurer les consommateurs'],
                        'Les dépendances implicites peuvent rendre une migration risquée; il faut les identifier à partir de la documentation et de l’observation du système.'
                    ),
                    $makeQuestion(
                        'Une équipe doit remplacer progressivement une fonction de facturation dans un monolithe actif. Le patron Strangler est pertinent si la nouvelle fonction peut :',
                        'Prendre en charge un périmètre délimité pendant que l’ancien reste disponible pour le reste',
                        ['Remplacer la totalité du système lors d’une bascule unique', 'Écrire directement dans toutes les tables internes du monolithe', 'Ignorer la coexistence entre anciennes et nouvelles routes'],
                        'Le patron permet de faire évoluer une capacité par étapes, en redirigeant progressivement les fonctions vers le remplacement.'
                    ),
                    $makeQuestion(
                        'Pendant une migration, l’ancienne et la nouvelle application écrivent en parallèle. Des écarts apparaissent dans les dossiers. Avant de poursuivre, il faut établir :',
                        'Une source d’autorité, un mécanisme de rapprochement et des critères d’arrêt',
                        ['Une règle qui garde toujours la dernière écriture reçue', 'Une troisième écriture automatique dans un autre système', 'Une suppression des journaux de migration'],
                        'La double écriture peut produire des divergences; la source d’autorité et la réconciliation doivent être conçues et vérifiées.'
                    ),
                    $makeQuestion(
                        'La nouvelle version est déployée alors que des clients utilisent encore l’ancienne API. La transition peut rester contrôlée avec :',
                        'Une période de compatibilité documentée, un suivi des consommateurs et une échéance de retrait',
                        ['La suppression immédiate de l’ancienne API', 'Des réponses différentes sans versionnement ni annonce', 'La copie de la base dans chaque client'],
                        'La coexistence doit avoir un contrat, des signaux de migration et une échéance afin d’éviter de conserver indéfiniment des interfaces obsolètes.'
                    ),
                    $makeQuestion(
                        'Le basculement d’une base vers un nouveau moteur est prévu dans une fenêtre courte. Le plan de bascule doit inclure un seuil mesurable qui déclenche :',
                        'L’arrêt ou le retour arrière si les écarts de données ou de service dépassent les critères acceptés',
                        ['La poursuite du basculement même si les contrôles échouent', 'La suppression des sauvegardes dès le démarrage', 'Une décision improvisée pendant l’incident'],
                        'Des critères définis à l’avance réduisent l’ambiguïté et permettent de suspendre ou d’inverser la bascule avant que l’impact ne s’étende.'
                    ),
                    $makeQuestion(
                        'La nouvelle plateforme paraît plus rapide dans un test synthétique, mais les utilisateurs signalent davantage d’erreurs après migration. La comparaison doit reprendre :',
                        'Une référence avant migration et des scénarios représentatifs du trafic réel',
                        ['La seule moyenne d’un test isolé', 'Le nombre de conteneurs démarrés', 'Les avis de l’équipe qui a construit la plateforme uniquement'],
                        'Une baseline et des scénarios réalistes révèlent les régressions que les tests synthétiques peuvent manquer.'
                    ),
                    $makeQuestion(
                        'Le système historique coûte cher à exploiter, mais soutient un processus métier stable et peu différenciant. La décision de modernisation doit comparer :',
                        'La valeur attendue du changement aux coûts, risques et perturbations de la transformation',
                        ['La date de création du système seulement', 'La préférence générale pour une technologie récente', 'La possibilité de supprimer l’équipe qui le connaît'],
                        'Une transformation n’est pas nécessairement bénéfique; son intérêt dépend de la valeur, des risques, du coût et des contraintes métier.'
                    ),
                    $makeQuestion(
                        'Une modification de schéma doit être livrée alors que deux versions applicatives fonctionneront simultanément. La stratégie la plus sûre consiste à :',
                        'Étendre le schéma de façon compatible, migrer les usages, puis retirer l’ancien format après validation',
                        ['Renommer immédiatement les colonnes utilisées par l’ancienne version', 'Rendre la nouvelle version obligatoire avant de tester la base', 'Ajouter des champs sans documenter leur signification'],
                        'Une évolution compatible en plusieurs étapes permet aux anciennes et nouvelles versions de coexister le temps de migrer et valider les usages.'
                    ),
                    $makeQuestion(
                        'Un pilote révèle que le nouveau service ne respecte pas une exigence réglementaire découverte tardivement. Le comité avait fixé des critères de poursuite. La conduite à tenir :',
                        'Suspendre l’extension, évaluer l’écart et reprendre seulement après traitement ou acceptation formelle du risque',
                        ['Étendre le pilote pour vérifier si l’écart devient visible', 'Modifier les journaux pour les aligner sur la nouvelle architecture', 'Considérer la conformité hors périmètre parce que le service fonctionne'],
                        'Une étape de validation doit pouvoir arrêter une migration lorsque des exigences obligatoires ne sont pas satisfaites.'
                    ),
                    $makeQuestion(
                        'Un composant ancien ne reçoit plus de correctifs, mais son remplacement comporte un risque élevé pour la clôture financière. Le plan de transition doit commencer par :',
                        'Réduire l’exposition immédiate et préparer une trajectoire testable autour des périodes métier critiques',
                        ['Remplacer le composant le dernier jour de clôture', 'Reporter toute mesure de sécurité jusqu’à la refonte complète', 'Désactiver les contrôles qui ralentissent les traitements'],
                        'La continuité métier et la vulnérabilité doivent être traitées ensemble; un plan progressif inclut des mesures transitoires et des fenêtres sûres.'
                    ),
                    $makeQuestion(
                        'Une migration est considérée comme terminée au premier déploiement, alors que les volumes, erreurs et usages ne sont pas suivis. La définition de fin doit inclure :',
                        'Une période de validation avec des critères métier et opérationnels observables',
                        ['La fermeture du ticket de déploiement uniquement', 'La suppression immédiate de l’ancien environnement', 'Le succès de compilation du nouveau code'],
                        'La bascule technique ne suffit pas; la solution doit démontrer un fonctionnement acceptable en conditions réelles avant clôture.'
                    ),
                ],
            ],
            [
                'title' => 'IT Architecture Professional — Architecture de résilience et continuité',
                'description' => 'Évaluez les objectifs de reprise, les dépendances critiques, les sauvegardes, les bascules et les exercices de continuité.',
                'difficulty' => 'Professional',
                'duration' => 35,
                'passing_score' => 70,
                'total_marks' => 14,
                'is_active' => true,
                'questions' => [
                    $makeQuestion(
                        'Le service de réservation doit reprendre rapidement, mais le métier accepte de ressaisir jusqu’à quinze minutes de réservations. Le dossier de continuité doit distinguer :',
                        'Le RTO comme délai de reprise et le RPO comme perte de données acceptable',
                        ['Le RTO comme quantité de données et le RPO comme coût mensuel', 'Le RTO comme délai de sauvegarde et le RPO comme disponibilité réseau', 'Un seul objectif combinant délai, coût et volume sans seuil distinct'],
                        'Le RTO porte sur le temps de reprise; le RPO fixe le point de récupération et donc la perte de données tolérée.'
                    ),
                    $makeQuestion(
                        'Une organisation possède trois copies de sauvegarde, toutes accessibles avec les identifiants d’administration du domaine de production. La protection à renforcer :',
                        'L’isolation et l’immutabilité des sauvegardes face à la compromission des comptes de production',
                        ['La compression des fichiers uniquement', 'La synchronisation des copies vers le même compte administrateur', 'La suppression des tests de restauration'],
                        'Des copies accessibles avec les mêmes identifiants peuvent être altérées par le même attaquant; une séparation et une protection contre la modification réduisent ce risque.'
                    ),
                    $makeQuestion(
                        'Un exercice restaure les fichiers, mais l’application ne peut pas redémarrer car les clés de chiffrement et les certificats ne sont pas disponibles. Le plan doit traiter ces éléments comme :',
                        'Des dépendances de reprise à protéger et à tester avec les données et services',
                        ['Des détails de développement sans lien avec la continuité', 'Des ressources qui peuvent être recréées après la remise en service', 'Des secrets à stocker dans le même backup non protégé'],
                        'La reprise dépend aussi des identités, clés et certificats nécessaires pour déchiffrer et authentifier les composants restaurés.'
                    ),
                    $makeQuestion(
                        'Le basculement vers une région de secours réussit en laboratoire, mais personne ne l’a exécuté avec les équipes de garde. Avant de considérer l’objectif atteint :',
                        'Réaliser un exercice opérationnel, mesurer les temps et corriger les écarts constatés',
                        ['Augmenter le nombre de régions sans répéter le test', 'Supposer que l’automatisation fonctionnera à l’identique en incident', 'Réduire le RTO déclaré pour refléter le résultat attendu'],
                        'Un test contrôlé avec les rôles et procédures réels vérifie la capacité de reprise et révèle les écarts avant un incident.'
                    ),
                    $makeQuestion(
                        'Un basculement automatique rétablit le service, mais envoie encore les requêtes vers une dépendance indisponible dans la région de secours. La revue doit couvrir :',
                        'Les dépendances et le chemin complet de service dans chaque scénario de reprise',
                        ['La seule capacité de calcul de la région de secours', 'Les tableaux de bord de la région principale uniquement', 'Le nombre de machines virtuelles répliquées, sans tester leurs connexions'],
                        'La disponibilité des composants isolés ne garantit pas le fonctionnement de bout en bout; les dépendances du chemin doivent être validées.'
                    ),
                    $makeQuestion(
                        'Une panne majeure laisse disponibles la consultation et l’export, mais pas la modification des dossiers. Le service métier avait accepté ce mode temporaire. Cette conception relève :',
                        'D’une dégradation contrôlée qui préserve certaines fonctions prioritaires',
                        ['D’une reprise complète puisque toutes les fonctions sont identiques', 'D’une incohérence nécessairement inacceptable dans tous les domaines', 'D’une stratégie qui remplace les sauvegardes'],
                        'Un mode dégradé peut préserver des fonctions utiles selon des priorités définies, à condition que le comportement soit compris et accepté.'
                    ),
                    $makeQuestion(
                        'Un exercice de continuité atteint l’objectif de temps, mais les équipes ne savent pas qui autorise la bascule ni qui informe les clients. Le plan doit clarifier :',
                        'Les rôles, l’autorité de décision, les communications et les responsabilités pendant la reprise',
                        ['Les spécifications des postes des utilisateurs', 'La fréquence des réunions de projet trimestrielles', 'Les noms des fournisseurs sans procédure d’escalade'],
                        'La continuité dépend de décisions et de communications coordonnées; les responsabilités doivent être explicites avant l’incident.'
                    ),
                                        $makeQuestion(
                        'Une partition réseau laisse deux nœuds croire qu’ils détiennent le rôle primaire et tous deux acceptent des écritures. La protection à prévoir :',
                        'Un mécanisme de quorum ou de fencing qui empêche le nœud non autorisé d’écrire',
                        ['Une réplication plus rapide sans contrôle d’autorité', 'Un redémarrage simultané des deux nœuds', 'Un cache local avec une durée de vie plus longue'],
                        'La séparation réseau peut créer un split-brain. Un mécanisme d’autorité vérifiable, tel qu’un quorum avec fencing, évite que deux primaires modifient simultanément les mêmes données.'
                    ),
                    $makeQuestion(
                        'Le plan annonce un RPO de cinq minutes, mais la réplication ne surveille ni son retard ni les erreurs de transfert. Le contrôle opérationnel à ajouter :',
                        'Mesurer le retard de réplication et alerter lorsqu’il menace l’objectif de perte acceptable',
                        ['Surveiller uniquement l’espace disque total', 'Supprimer l’objectif RPO jusqu’au prochain audit', 'Redémarrer toutes les bases à chaque alerte'],
                        'Le retard observé permet de savoir si le point de récupération respecte le RPO et d’agir avant de dépasser l’objectif.'
                    ),
                    $makeQuestion(
                        'Une sauvegarde est créée chaque nuit, mais aucune restauration n’a été effectuée depuis deux ans. La preuve la plus utile de récupérabilité :',
                        'Un test de restauration documenté sur des scénarios et volumes représentatifs',
                        ['Un rapport indiquant seulement que le job de sauvegarde s’est terminé', 'Une copie supplémentaire jamais vérifiée', 'La confirmation du fournisseur que le stockage est durable'],
                        'Un job réussi ne prouve pas que les données et procédures peuvent être restaurées correctement; il faut exécuter et vérifier la restauration.'
                    ),
                    $makeQuestion(
                        'Le scénario de reprise restaure d’abord les services de paiement, puis le service d’identité dont ils dépendent. L’ordre doit être revu pour :',
                        'Rétablir les dépendances nécessaires avant les services consommateurs',
                        ['Démarrer tous les composants en même temps sans coordination', 'Prioriser les services les plus visibles même s’ils ne peuvent pas fonctionner', 'Éviter de documenter les dépendances'],
                        'Le rétablissement d’un service consommateur ne sert pas tant que ses dépendances essentielles ne sont pas disponibles.'
                    ),
                    $makeQuestion(
                        'Après une mise à jour d’infrastructure, l’ancien script de bascule ne fonctionne plus. L’exercice suivant doit vérifier :',
                        'La procédure et l’automatisation sur la configuration actuelle, puis mettre à jour la documentation',
                        ['La procédure historique sans l’exécuter', 'Uniquement les sauvegardes de la base', 'La disponibilité nominale en journée'],
                        'Les procédures vieillissent avec les systèmes; il faut les tester après les changements significatifs et corriger les écarts.'
                    ),
                    $makeQuestion(
                        'Une hausse de trafic saisonnière consomme toute la capacité de secours qui devait servir à une reprise. Le plan de résilience doit réserver :',
                        'Une marge de capacité ou des règles de priorité compatibles avec le scénario de panne',
                        ['La capacité de secours aux traitements non critiques', 'La même capacité aux charges de pointe et de reprise sans calcul', 'Un autoscaling sans plafond ni budget'],
                        'La capacité de reprise doit rester disponible dans les conditions prévues; les pointes et scénarios de panne doivent être dimensionnés ensemble.'
                    ),
                    $makeQuestion(
                        'Une restauration respecte les objectifs techniques, mais les agents ne peuvent pas traiter les dossiers car l’outil de communication client est absent. La validation doit inclure :',
                        'Les fonctions métier de bout en bout et les outils nécessaires aux équipes',
                        ['Les seules bases de données restaurées', 'Le nombre d’instances relancées', 'Le test de connexion au réseau sans scénario utilisateur'],
                        'Le retour d’un composant n’est utile que s’il permet aux équipes de réaliser les processus critiques attendus.'
                    ),
                ],
            ],
        ];

        // Archive the four quiz records removed by this consolidation without deleting their history.
        $obsoleteTitles = [
            'IT Architecture Professional — Architecture de plateforme et opérations',
            'IT Architecture Professional — Architecture Decision Records et trade-offs',
            'IT Architecture Professional — Architecture Cost, Risk et Value',
            'IT Architecture Professional — Strategic Architecture Case Studies',
        ];

        Quiz::where('subject_id', $subject->id)
            ->whereIn('title', $obsoleteTitles)
            ->update(['is_active' => false]);

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
                    'total_marks' => $quizData['total_marks'],
                    'is_active' => $quizData['is_active'],
                    'difficulty' => $quizData['difficulty'],
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
