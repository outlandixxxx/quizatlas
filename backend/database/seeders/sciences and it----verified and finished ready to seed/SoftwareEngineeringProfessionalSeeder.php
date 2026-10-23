<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareEngineeringProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'software-engineering')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Arbitrer les choix structurants d’un produit',
                'description' => 'Évaluer les frontières, les coûts de changement et les décisions réversibles.',
                'difficulty' => 'Professional',
                'duration' => 23,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Deux domaines changent à des rythmes différents, mais doivent toujours être livrés ensemble à cause d’un schéma partagé. Quel diagnostic doit précéder leur séparation en services ?',
                        'marks' => 1,
                        'explanation' => 'La séparation physique ne résout pas un couplage de modèle ; les frontières et contrats de données doivent être clarifiés.',
                        'choices' => [
                            ['text' => 'Clarifier responsabilités et propriété des données', 'is_correct' => true],
                            ['text' => 'Déployer immédiatement deux copies du même schéma partagé', 'is_correct' => false],
                            ['text' => 'Créer un service par table sans analyser les usages', 'is_correct' => false],
                            ['text' => 'Changer seulement les noms des dépôts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe hésite entre acheter une solution et développer un composant stratégique. Quel dossier permet un arbitrage défendable ?',
                        'marks' => 1,
                        'explanation' => 'L’investissement inclut intégration, exploitation, évolution, dépendance fournisseur et coûts de sortie, pas seulement le développement initial.',
                        'choices' => [
                            ['text' => 'Valeur différenciante, coût de cycle de vie et risques', 'is_correct' => true],
                            ['text' => 'Comparer uniquement le prix de la première année', 'is_correct' => false],
                            ['text' => 'Choisir l’option avec le plus de fonctionnalités annoncées', 'is_correct' => false],
                            ['text' => 'Décider selon le langage préféré d’un développeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une extraction en microservices est proposée pour réduire les délais de livraison d’un seul domaine. Quelle expérimentation apporte le plus de preuves ?',
                        'marks' => 1,
                        'explanation' => 'Une extraction ciblée teste l’hypothèse d’autonomie tout en limitant l’ampleur du risque.',
                        'choices' => [
                            ['text' => 'Une extraction pilote mesurée', 'is_correct' => true],
                            ['text' => 'Distribuer toutes les couches en une seule fois', 'is_correct' => false],
                            ['text' => 'Mesurer seulement le nombre de services créés', 'is_correct' => false],
                            ['text' => 'Interdire les changements métier pendant un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un groupe exige un modèle Client unique pour la vente, le support et la comptabilité. Quel compromis doit être évalué ?',
                        'marks' => 1,
                        'explanation' => 'Des modèles distincts peuvent être légitimes ; les correspondances doivent être définies sans confondre les responsabilités.',
                        'choices' => [
                            ['text' => 'Des modèles adaptés aux usages et des échanges explicites', 'is_correct' => true],
                            ['text' => 'La suppression de toute traduction entre les domaines', 'is_correct' => false],
                            ['text' => 'Une seule table contenant toutes les règles de tous les métiers', 'is_correct' => false],
                            ['text' => 'Le choix d’un terme décidé uniquement par l’équipe de base de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle d’architecture critique est respectée dans les revues mais souvent rompue sous pression. Quelle preuve durable renforce son application ?',
                        'marks' => 1,
                        'explanation' => 'Une propriété importante peut devenir un test structurel répétable ; les exceptions doivent rester visibles et justifiées.',
                        'choices' => [
                            ['text' => 'Un test architectural ciblé', 'is_correct' => true],
                            ['text' => 'Une présentation annuelle sans contrôle', 'is_correct' => false],
                            ['text' => 'Une interdiction de modifier les modules', 'is_correct' => false],
                            ['text' => 'Un comptage des dossiers qui portent le bon nom', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une plateforme impose les mêmes outils à toutes les équipes, y compris pour des besoins très différents. Quelle gouvernance limite mieux le coût sans perdre la maîtrise des risques ?',
                        'marks' => 1,
                        'explanation' => 'La standardisation est utile là où elle apporte une valeur ou réduit un risque ; les exceptions encadrées évitent la rigidité aveugle.',
                        'choices' => [
                            ['text' => 'Des standards ciblés et des exceptions encadrées', 'is_correct' => true],
                            ['text' => 'Une liberté complète sur les contrôles de sécurité critiques', 'is_correct' => false],
                            ['text' => 'Une approbation centrale pour chaque variable locale', 'is_correct' => false],
                            ['text' => 'Un standard immuable indépendant du contexte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service ancien doit disparaître, mais plusieurs consommateurs ne sont pas identifiés. Quelle étape rend le retrait maîtrisable ?',
                        'marks' => 1,
                        'explanation' => 'Un retrait exige une connaissance des dépendances et une migration vérifiable, pas seulement une annonce.',
                        'choices' => [
                            ['text' => 'Une migration des consommateurs vérifiée', 'is_correct' => true],
                            ['text' => 'Couper le service à la date souhaitée sans observation', 'is_correct' => false],
                            ['text' => 'Changer son nom pour signaler sa fin', 'is_correct' => false],
                            ['text' => 'Retirer la documentation avant le trafic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un comité classe les modules par nombre de lignes pour décider des réécritures. Quel ensemble de preuves est plus pertinent ?',
                        'marks' => 1,
                        'explanation' => 'Le coût de changement et les risques observés sont plus utiles qu’une métrique de volume isolée.',
                        'choices' => [
                            ['text' => 'Les coûts de changement et les risques observés', 'is_correct' => true],
                            ['text' => 'Âge des fichiers uniquement', 'is_correct' => false],
                            ['text' => 'Nombre de langages présents uniquement', 'is_correct' => false],
                            ['text' => 'Taille du dépôt sans historique de changements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une feuille de route prévoit d’accélérer les livraisons, mais laisse une dépendance non supportée au cœur du produit. Quelle action de planification est cohérente ?',
                        'marks' => 1,
                        'explanation' => 'Les capacités techniques nécessaires et leurs risques doivent faire partie des arbitrages de la feuille de route.',
                        'choices' => [
                            ['text' => 'Une réduction du risque intégrée aux priorités produit', 'is_correct' => true],
                            ['text' => 'Exclure les travaux techniques de toute discussion de priorité', 'is_correct' => false],
                            ['text' => 'Masquer l’échéance pour préserver le planning', 'is_correct' => false],
                            ['text' => 'Attendre un incident avant d’attribuer un propriétaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une décision coûteuse repose sur l’hypothèse que le trafic sera multiplié par dix. Quelle approche réduit l’engagement irréversible ?',
                        'marks' => 1,
                        'explanation' => 'Les hypothèses doivent être explicites et testables ; des étapes réversibles préservent des options.',
                        'choices' => [
                            ['text' => 'Des hypothèses mesurables et des étapes réversibles', 'is_correct' => true],
                            ['text' => 'Présenter la prévision comme une certitude', 'is_correct' => false],
                            ['text' => 'Construire immédiatement la solution maximale sans seuil de décision', 'is_correct' => false],
                            ['text' => 'Supprimer les hypothèses du dossier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux équipes veulent utiliser le même composant, mais leurs calendriers et règles évoluent séparément. Quel critère aide à choisir entre partage et duplication limitée ?',
                        'marks' => 1,
                        'explanation' => 'Partager une connaissance stable peut être utile ; partager une ressemblance temporaire peut imposer des changements coordonnés coûteux.',
                        'choices' => [
                            ['text' => 'La stabilité de la connaissance réellement partagée', 'is_correct' => true],
                            ['text' => 'Le seul nombre de lignes identiques aujourd’hui', 'is_correct' => false],
                            ['text' => 'L’interdiction universelle de toute duplication', 'is_correct' => false],
                            ['text' => 'Le choix de l’équipe la plus nombreuse', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Garantir les effets métier malgré les reprises',
                'description' => 'Évaluer atomicité locale, messages, déduplication et réconciliation.',
                'difficulty' => 'Professional',
                'duration' => 21,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Deux requêtes portant la même clé de réservation arrivent simultanément. Quel mécanisme évite deux effets tout en conservant le résultat ?',
                        'marks' => 1,
                        'explanation' => 'L’idempotence concurrente exige une garantie atomique, pas seulement une recherche préalable vulnérable à la course.',
                        'choices' => [
                            ['text' => 'Une clé unique et un effet enregistrés atomiquement', 'is_correct' => true],
                            ['text' => 'Une lecture de la clé puis une écriture sans contrainte', 'is_correct' => false],
                            ['text' => 'Une vérification uniquement dans le navigateur', 'is_correct' => false],
                            ['text' => 'Un identifiant nouveau généré à chaque reprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une saga réserve un transport non remboursable puis échoue sur une autre étape. Quelle exigence de conception est indispensable ?',
                        'marks' => 1,
                        'explanation' => 'Certaines actions ne peuvent pas être inversées ; le processus doit prévoir ces conséquences plutôt que promettre un rollback global.',
                        'choices' => [
                            ['text' => 'Des états d’exception et des reprises métier prévues', 'is_correct' => true],
                            ['text' => 'Considérer toute étape comme automatiquement annulable', 'is_correct' => false],
                            ['text' => 'Assimiler une compensation à une restauration binaire parfaite', 'is_correct' => false],
                            ['text' => 'Effacer l’historique de la réservation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une commande et son événement sont écrits dans deux transactions locales successives. Quel défaut subsiste malgré la présence d’une table outbox ?',
                        'marks' => 1,
                        'explanation' => 'L’outbox résout la fenêtre de double écriture seulement si son enregistrement est atomique avec la modification métier correspondante.',
                        'choices' => [
                            ['text' => 'Une perte entre les deux commits reste possible', 'is_correct' => true],
                            ['text' => 'Le nom outbox garantit leur atomicité', 'is_correct' => false],
                            ['text' => 'La publication devient nécessairement exactement une fois', 'is_correct' => false],
                            ['text' => 'La base fusionne toujours les deux commits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un appel de paiement dépasse le délai côté client, mais le fournisseur peut avoir débité. Quelle reprise est sûre ?',
                        'marks' => 1,
                        'explanation' => 'Un délai dépassé décrit l’absence de réponse dans le temps prévu, pas nécessairement l’échec de l’opération distante.',
                        'choices' => [
                            ['text' => 'Réconcilier avec l’identifiant stable de paiement', 'is_correct' => true],
                            ['text' => 'Envoyer immédiatement un paiement avec un nouvel identifiant', 'is_correct' => false],
                            ['text' => 'Conclure que le dépassement prouve l’absence de débit', 'is_correct' => false],
                            ['text' => 'Réessayer sans borne jusqu’à obtenir deux confirmations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un événement version 2 change le sens d’un champ sans le renommer. Pourquoi la compatibilité syntaxique ne suffit-elle pas ?',
                        'marks' => 1,
                        'explanation' => 'Le contrat comprend la signification des données et les invariants, pas uniquement leur format.',
                        'choices' => [
                            ['text' => 'Une rupture de sens reste possible', 'is_correct' => true],
                            ['text' => 'Un JSON valide assure une compréhension identique', 'is_correct' => false],
                            ['text' => 'Le nom identique prouve la compatibilité métier', 'is_correct' => false],
                            ['text' => 'Les tests de compilation couvrent le sens distribué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle de lecture reçoit les états 12 puis 10 d’une même commande. Quel contrôle protège sa progression si les événements portent une version monotone ?',
                        'marks' => 1,
                        'explanation' => 'Les versions métier permettent de repérer des événements périmés ; la politique doit aussi définir le traitement des écarts.',
                        'choices' => [
                            ['text' => 'Écarter les versions périmées selon le contrat', 'is_correct' => true],
                            ['text' => 'Écraser toujours par le dernier message arrivé', 'is_correct' => false],
                            ['text' => 'Déduire l’ordre du nom du serveur', 'is_correct' => false],
                            ['text' => 'Réduire la version pour éviter les trous', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les identifiants traités sont oubliés après une heure, mais le courtier peut redélivrer après un jour. Quel risque reste ouvert ?',
                        'marks' => 1,
                        'explanation' => 'La durée de conservation et la garantie d’idempotence doivent correspondre à l’horizon réel des reprises.',
                        'choices' => [
                            ['text' => 'Un doublon peut dépasser la rétention des identifiants', 'is_correct' => true],
                            ['text' => 'La déduplication reste garantie pour toujours', 'is_correct' => false],
                            ['text' => 'Le délai du courtier supprime les effets externes', 'is_correct' => false],
                            ['text' => 'Les identifiants expirés sont encore protégés par la mémoire locale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un traitement financier utilise des messages fiables mais aucun contrôle périodique entre registre et fournisseur. Quelle capacité manque ?',
                        'marks' => 1,
                        'explanation' => 'La messagerie ne prouve pas que tous les effets externes et écritures concordent ; une réconciliation détecte les écarts.',
                        'choices' => [
                            ['text' => 'Une réconciliation indépendante', 'is_correct' => true],
                            ['text' => 'Une nouvelle couche de cache', 'is_correct' => false],
                            ['text' => 'Un identifiant aléatoire par lecture', 'is_correct' => false],
                            ['text' => 'Une réduction des journaux de transactions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une migration remplit un nouveau stockage tout en continuant d’écrire dans l’ancien. Quelle stratégie limite les écarts avant bascule ?',
                        'marks' => 1,
                        'explanation' => 'Une migration en ligne doit couvrir l’historique et les changements concurrents, puis vérifier leur cohérence.',
                        'choices' => [
                            ['text' => 'Une capture fiable et des comparaisons de convergence', 'is_correct' => true],
                            ['text' => 'Deux écritures indépendantes sans reprise', 'is_correct' => false],
                            ['text' => 'Une copie ponctuelle sans suivre les modifications suivantes', 'is_correct' => false],
                            ['text' => 'La suppression de l’ancien stockage dès la première ligne copiée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une frontière d’agrégat est déplacée entre services. Quelle analyse prime avant de remplacer une transaction locale par des messages ?',
                        'marks' => 1,
                        'explanation' => 'Déplacer une frontière de cohérence change les garanties possibles et exige une validation des conséquences métier.',
                        'choices' => [
                            ['text' => 'Les invariants atomiques et les états intermédiaires admis', 'is_correct' => true],
                            ['text' => 'Supposer que toute cohérence différée est acceptable', 'is_correct' => false],
                            ['text' => 'Séparer toutes les écritures sans consulter le métier', 'is_correct' => false],
                            ['text' => 'Garder les mêmes garanties annoncées sans preuve', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Construire un dossier de confiance vérifiable',
                'description' => 'Croiser risques, contrats, preuves de test et limites de validité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Le système respecte toutes ses exigences écrites mais conduit les opérateurs à des erreurs répétées. Quelle conclusion doit guider la suite ?',
                        'marks' => 1,
                        'explanation' => 'Un dossier de confiance doit couvrir l’usage réel, pas seulement la conformité à un document.',
                        'choices' => [
                            ['text' => 'Réexaminer l’adéquation aux usages réels', 'is_correct' => true],
                            ['text' => 'Les tests de conformité suffisent à fermer le problème', 'is_correct' => false],
                            ['text' => 'Les opérateurs doivent nécessairement s’adapter sans analyse', 'is_correct' => false],
                            ['text' => 'Le résultat prouve une absence de défaut produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonctionnalité rare peut entraîner une perte de données importante. Comment la prioriser dans la vérification ?',
                        'marks' => 1,
                        'explanation' => 'Un risque combine notamment probabilité et gravité ; une faible fréquence n’annule pas une conséquence majeure.',
                        'choices' => [
                            ['text' => 'Une priorité fondée sur les conséquences du défaut', 'is_correct' => true],
                            ['text' => 'La tester après tous les parcours fréquents, quel que soit le risque', 'is_correct' => false],
                            ['text' => 'L’ignorer parce qu’elle est rarement utilisée', 'is_correct' => false],
                            ['text' => 'La couvrir uniquement par un test de formatage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Trois versions de consommateurs restent déployées pendant une transition d’API. Quelle matrice de vérification est utile ?',
                        'marks' => 1,
                        'explanation' => 'Une compatibilité revendiquée doit être testée sur les versions qui coexistent réellement.',
                        'choices' => [
                            ['text' => 'Les combinaisons de versions réellement supportées', 'is_correct' => true],
                            ['text' => 'Seulement la dernière version de chaque côté', 'is_correct' => false],
                            ['text' => 'Un test unique du fournisseur isolé', 'is_correct' => false],
                            ['text' => 'Une compilation de la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un contrôle d’accès utilise des identifiants opaques. Quel test négatif apporte une preuve pertinente ?',
                        'marks' => 1,
                        'explanation' => 'Un identifiant difficile à deviner ne démontre pas l’autorisation ; il faut vérifier les refus entre propriétaires et rôles.',
                        'choices' => [
                            ['text' => 'Un accès intercomptes en lecture et en écriture', 'is_correct' => true],
                            ['text' => 'Le même utilisateur relit uniquement ses propres objets', 'is_correct' => false],
                            ['text' => 'Un client utilise un identifiant de format invalide seulement', 'is_correct' => false],
                            ['text' => 'Le test vérifie seulement la longueur de l’identifiant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle de menaces est créé avant une importante intégration externe. Quel changement impose son réexamen ?',
                        'marks' => 1,
                        'explanation' => 'Les menaces et contrôles dépendent de l’architecture, des flux et des acteurs ; le modèle évolue avec eux.',
                        'choices' => [
                            ['text' => 'Un changement de flux ou de frontière de confiance', 'is_correct' => true],
                            ['text' => 'Un simple renommage privé sans effet', 'is_correct' => false],
                            ['text' => 'Un changement de mise en forme du code', 'is_correct' => false],
                            ['text' => 'Un nouveau commentaire sans modification du système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une porte de validation impose 90 % de couverture et laisse passer un défaut critique connu. Quelle révision est nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Un pourcentage global ne démontre pas que les comportements les plus risqués sont correctement vérifiés.',
                        'choices' => [
                            ['text' => 'Des preuves ciblées sur les risques critiques', 'is_correct' => true],
                            ['text' => 'Augmenter seulement le nombre de fichiers testés', 'is_correct' => false],
                            ['text' => 'Déclarer tout code couvert comme sûr', 'is_correct' => false],
                            ['text' => 'Supprimer les critères métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un composant est vérifié formellement sous des hypothèses sur les entrées et l’ordonnancement. Quelle affirmation est défendable ?',
                        'marks' => 1,
                        'explanation' => 'Une preuve formelle n’étend pas automatiquement ses garanties au-delà du modèle et des hypothèses utilisés.',
                        'choices' => [
                            ['text' => 'Une garantie bornée par le modèle et ses hypothèses', 'is_correct' => true],
                            ['text' => 'Tous les composants et environnements du produit sont prouvés corrects', 'is_correct' => false],
                            ['text' => 'Toute panne matérielle est exclue', 'is_correct' => false],
                            ['text' => 'Les hypothèses peuvent être retirées sans effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une mesure p99 est calculée sur seulement cent requêtes très homogènes. Quelle prudence s’impose ?',
                        'marks' => 1,
                        'explanation' => 'Les percentiles extrêmes demandent des échantillons et conditions adaptés ; un faible effectif limite les conclusions.',
                        'choices' => [
                            ['text' => 'Une estimation fragile de la queue de distribution', 'is_correct' => true],
                            ['text' => 'Le nombre cent garantit la précision du p99', 'is_correct' => false],
                            ['text' => 'Une mesure unique prédit tous les pics futurs', 'is_correct' => false],
                            ['text' => 'Le percentile reste indépendant du trafic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le score de mutation est faible dans un adaptateur peu risqué, alors qu’un calcul critique n’a aucun test de refus. Quel investissement est prioritaire ?',
                        'marks' => 1,
                        'explanation' => 'Les métriques orientent l’analyse, mais les conséquences métier guident l’effort de vérification.',
                        'choices' => [
                            ['text' => 'Les scénarios critiques avant le score global', 'is_correct' => true],
                            ['text' => 'Traquer tous les mutants équivalents avant le calcul critique', 'is_correct' => false],
                            ['text' => 'Modifier les seuils pour masquer les deux problèmes', 'is_correct' => false],
                            ['text' => 'Ajouter uniquement des assertions sur les méthodes privées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe rejoue du trafic réel sur une nouvelle version en parallèle. Quel encadrement rend cette comparaison sûre ?',
                        'marks' => 1,
                        'explanation' => 'Le trafic miroir peut tester le comportement mais doit maîtriser confidentialité et effets métier.',
                        'choices' => [
                            ['text' => 'Des données protégées et des effets neutralisés', 'is_correct' => true],
                            ['text' => 'Laisser les deux versions débiter les paiements', 'is_correct' => false],
                            ['text' => 'Envoyer les courriels depuis les deux versions', 'is_correct' => false],
                            ['text' => 'Copier tous les secrets dans un environnement public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La recette reproduit le code mais pas les quotas ni la latence du fournisseur de production. Quelle limite doit figurer dans le dossier de test ?',
                        'marks' => 1,
                        'explanation' => 'La fidélité d’un environnement est partielle ; les conclusions doivent nommer les aspects non représentés.',
                        'choices' => [
                            ['text' => 'Une preuve limitée aux contraintes représentées', 'is_correct' => true],
                            ['text' => 'Tous les résultats sont invalides sans distinction', 'is_correct' => false],
                            ['text' => 'La compilation compense les différences', 'is_correct' => false],
                            ['text' => 'Les quotas disparaissent après déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe doit montrer quelle exigence a été vérifiée pour un artefact livré. Quelle chaîne de preuve est adaptée ?',
                        'marks' => 1,
                        'explanation' => 'La traçabilité relie le besoin aux vérifications effectivement exécutées sur la version réellement déployée.',
                        'choices' => [
                            ['text' => 'Une traçabilité jusqu’à l’artefact déployé', 'is_correct' => true],
                            ['text' => 'Un fichier de tests sans version ni résultat', 'is_correct' => false],
                            ['text' => 'Une capture du tableau de bord sans identifiant de version', 'is_correct' => false],
                            ['text' => 'Un message disant que la livraison est bonne', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Dimensionner et éprouver la résilience',
                'description' => 'Calculer des marges et vérifier les limites réelles des mécanismes de protection.',
                'difficulty' => 'Professional',
                'duration' => 32,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un SLO de disponibilité temporelle est fixé à 99,9 % sur trente jours de 24 heures, sans exclusion. Quel temps d’indisponibilité correspond au budget ?',
                        'marks' => 2,
                        'explanation' => 'Trente jours représentent 43 200 minutes ; 0,1 % donne 43,2 minutes. Ce calcul concerne un SLI temporel, pas un ratio de requêtes.',
                        'choices' => [
                            ['text' => '43,2 minutes', 'is_correct' => true],
                            ['text' => '4,32 minutes', 'is_correct' => false],
                            ['text' => '432 minutes', 'is_correct' => false],
                            ['text' => '30 minutes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'En régime stable, un service reçoit en moyenne 200 requêtes par seconde et une requête reste 0,4 seconde dans le système. Quel nombre moyen de requêtes simultanément présentes donne la loi de Little ?',
                        'marks' => 2,
                        'explanation' => 'Avec un périmètre et des unités cohérents, L = λ × W = 200 × 0,4 = 80. La relation suppose notamment un régime stable.',
                        'choices' => [
                            ['text' => '80', 'is_correct' => true],
                            ['text' => '500', 'is_correct' => false],
                            ['text' => '200', 'is_correct' => false],
                            ['text' => '0,002', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un traitement garde 20 % de son temps strictement séquentiel. Quel gain maximal théorique donnerait un nombre illimité de processeurs pour le reste ?',
                        'marks' => 2,
                        'explanation' => 'La loi d’Amdahl donne une limite de 1 / 0,20 = 5, en supposant le reste parfaitement parallélisable et sans surcoût.',
                        'choices' => [
                            ['text' => 'Un facteur 5', 'is_correct' => true],
                            ['text' => 'Un facteur 20', 'is_correct' => false],
                            ['text' => 'Un facteur 80', 'is_correct' => false],
                            ['text' => 'Un gain sans limite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Trois instances identiques supportent chacune 30 % de leur capacité. Après la perte d’une instance, la même charge est répartie également entre les deux autres. Quel taux moyen atteint chacune ?',
                        'marks' => 2,
                        'explanation' => 'La charge totale vaut 90 % de la capacité d’une instance ; répartie sur deux instances, elle représente 45 % chacune.',
                        'choices' => [
                            ['text' => '45 %', 'is_correct' => true],
                            ['text' => '30 %', 'is_correct' => false],
                            ['text' => '60 %', 'is_correct' => false],
                            ['text' => '90 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Trois couches imbriquées peuvent chacune tenter quatre fois un appel, tentative initiale comprise. Dans le pire cas d’échecs, combien d’appels peuvent atteindre la dépendance finale pour une demande externe ?',
                        'marks' => 2,
                        'explanation' => 'Les répétitions se multiplient : 4 × 4 × 4 = 64. Les reprises doivent être coordonnées sur le parcours.',
                        'choices' => [
                            ['text' => '64', 'is_correct' => true],
                            ['text' => '12', 'is_correct' => false],
                            ['text' => '16', 'is_correct' => false],
                            ['text' => '4', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une file reçoit durablement 120 travaux par seconde et en termine 100, sans rejet ni variation. Comment évolue son retard en nombre de travaux ?',
                        'marks' => 2,
                        'explanation' => 'Le bilan d’entrées et sorties vaut 120 − 100 = 20 travaux supplémentaires par seconde. Une file plus grande ne corrige pas ce déséquilibre.',
                        'choices' => [
                            ['text' => 'Il augmente de 20 travaux par seconde', 'is_correct' => true],
                            ['text' => 'Il diminue de 20 travaux par seconde', 'is_correct' => false],
                            ['text' => 'Il reste stable', 'is_correct' => false],
                            ['text' => 'Il augmente de 100 travaux par seconde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un pic menace les opérations prioritaires mais une partie des demandes peut attendre ou être refusée. Quelle politique protège mieux le service essentiel ?',
                        'marks' => 1,
                        'explanation' => 'Une politique de surcharge doit préserver les capacités critiques et rendre les refus prévisibles.',
                        'choices' => [
                            ['text' => 'Des limites et priorités avec refus contrôlé', 'is_correct' => true],
                            ['text' => 'Une acceptation sans limite en mémoire', 'is_correct' => false],
                            ['text' => 'Des reprises immédiates pour toutes les demandes', 'is_correct' => false],
                            ['text' => 'Une même priorité implicite pour tous les travaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un coupe-circuit passe en état semi-ouvert après une panne. Quelle politique évite une nouvelle avalanche ?',
                        'marks' => 1,
                        'explanation' => 'Les sondes contrôlées évaluent la reprise sans charger brutalement une dépendance encore fragile.',
                        'choices' => [
                            ['text' => 'Des sondes de reprise en nombre limité', 'is_correct' => true],
                            ['text' => 'Renvoyer immédiatement tout le trafic en attente', 'is_correct' => false],
                            ['text' => 'Supprimer les délais sur les sondes', 'is_correct' => false],
                            ['text' => 'Réinitialiser les métriques à chaque échec', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cache de résultats utilise seulement l’identifiant du document, alors que cet identifiant peut se répéter entre locataires. Quel risque existe ?',
                        'marks' => 1,
                        'explanation' => 'La clé doit intégrer le contexte d’isolation pertinent ; le contrôle d’accès reste également nécessaire.',
                        'choices' => [
                            ['text' => 'Une fuite possible entre locataires', 'is_correct' => true],
                            ['text' => 'Les entrées sont automatiquement isolées par le navigateur', 'is_correct' => false],
                            ['text' => 'Le cache devient simplement plus lent sans risque de données', 'is_correct' => false],
                            ['text' => 'Le chiffrement TLS sépare les clés du cache', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un contrat interne impose un RPO de cinq minutes, mais les seules sauvegardes ont lieu toutes les vingt-quatre heures. Quelle conclusion est correcte ?',
                        'marks' => 1,
                        'explanation' => 'La perte potentielle depuis la dernière copie peut largement dépasser cinq minutes ; vitesse de restauration et fraîcheur sont distinctes.',
                        'choices' => [
                            ['text' => 'Un RPO non démontré par les sauvegardes actuelles', 'is_correct' => true],
                            ['text' => 'Le RPO est respecté si la restauration est rapide', 'is_correct' => false],
                            ['text' => 'La fréquence des sauvegardes concerne seulement le RTO', 'is_correct' => false],
                            ['text' => 'Un redémarrage du serveur reconstitue toutes les écritures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le service est réparti sur deux régions mais dépend d’un fournisseur d’identité unique indisponible. Quelle faiblesse apparaît ?',
                        'marks' => 1,
                        'explanation' => 'La résilience doit inclure le graphe de dépendances et pas seulement les instances applicatives.',
                        'choices' => [
                            ['text' => 'Une dépendance commune reste un point de panne', 'is_correct' => true],
                            ['text' => 'Deux régions garantissent toute disponibilité', 'is_correct' => false],
                            ['text' => 'L’authentification ne peut jamais bloquer un parcours', 'is_correct' => false],
                            ['text' => 'Le routage supprime les dépendances partagées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cache de stock est obsolète de quelques secondes. Quelle règle protège la vente de la dernière unité ?',
                        'marks' => 1,
                        'explanation' => 'Un affichage peut être approximatif ; la décision qui engage le stock doit être protégée contre les accès concurrents.',
                        'choices' => [
                            ['text' => 'Une réservation atomique auprès de l’autorité de stock', 'is_correct' => true],
                            ['text' => 'Considérer l’affichage du cache comme une garantie de réservation', 'is_correct' => false],
                            ['text' => 'Augmenter uniquement le nombre de caches', 'is_correct' => false],
                            ['text' => 'Retirer les contrôles de concurrence pour accélérer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un exercice de reprise remet l’application en ligne, mais certains enregistrements sont incohérents. Quelle preuve manque encore ?',
                        'marks' => 1,
                        'explanation' => 'Une reprise réussie doit satisfaire les objectifs de données et les invariants, pas seulement démarrer les processus.',
                        'choices' => [
                            ['text' => 'L’intégrité des données', 'is_correct' => true],
                            ['text' => 'La seule disponibilité d’une page d’accueil', 'is_correct' => false],
                            ['text' => 'La seule reprise du routage réseau', 'is_correct' => false],
                            ['text' => 'La seule présence des tables restaurées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Piloter une mise en production et un incident',
                'description' => 'Prendre des décisions opérationnelles à partir de seuils, de responsabilités et de conséquences.',
                'difficulty' => 'Professional',
                'duration' => 21,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Le canari reste sous le seuil de CPU mais dépasse nettement le taux d’erreur métier acceptable. Quelle décision est cohérente ?',
                        'marks' => 1,
                        'explanation' => 'Les critères de progression doivent refléter le service rendu ; une ressource saine n’annule pas une régression métier.',
                        'choices' => [
                            ['text' => 'Arrêter la progression et réduire l’impact', 'is_correct' => true],
                            ['text' => 'Généraliser parce que les ressources sont disponibles', 'is_correct' => false],
                            ['text' => 'Attendre que le CPU monte avant d’agir', 'is_correct' => false],
                            ['text' => 'Changer le seuil d’erreur pour terminer le déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle version a écrit des données non comprises par l’ancienne. Quel arbitrage doit précéder le retour du code ?',
                        'marks' => 1,
                        'explanation' => 'Le retour applicatif n’est pas toujours l’option la plus sûre lorsque les données ont évolué.',
                        'choices' => [
                            ['text' => 'Un arbitrage entre correction, conversion et restauration', 'is_correct' => true],
                            ['text' => 'Déployer l’ancien code sans examiner les données', 'is_correct' => false],
                            ['text' => 'Supposer qu’un changement de route annule les écritures', 'is_correct' => false],
                            ['text' => 'Effacer les nouvelles données sans décision métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonctionnalité doit rester activée pour le même utilisateur pendant un essai progressif. Quelle règle rend l’exposition cohérente ?',
                        'marks' => 1,
                        'explanation' => 'Une affectation stable évite de faire alterner les parcours au fil des requêtes et rend les résultats de l’expérience interprétables.',
                        'choices' => [
                            ['text' => 'Une affectation stable et une configuration traçable', 'is_correct' => true],
                            ['text' => 'Tirer un groupe au hasard à chaque requête sans conservation', 'is_correct' => false],
                            ['text' => 'Activer la fonctionnalité selon l’ordre des logs', 'is_correct' => false],
                            ['text' => 'Laisser chaque instance définir indépendamment ses groupes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pendant un incident majeur, une personne diagnostique, coordonne et répond à chaque demande externe. Quelle organisation réduit sa surcharge ?',
                        'marks' => 1,
                        'explanation' => 'Des rôles explicites permettent d’agir et de communiquer en parallèle sans perdre la cohérence des décisions.',
                        'choices' => [
                            ['text' => 'Des rôles distincts de coordination et d’action', 'is_correct' => true],
                            ['text' => 'Ajouter tous les participants à chaque décision sans rôle', 'is_correct' => false],
                            ['text' => 'Confier les changements à plusieurs personnes sans coordination', 'is_correct' => false],
                            ['text' => 'Interdire les comptes rendus jusqu’à la résolution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un retour d’incident propose « mieux tester » sans propriétaire ni périmètre. Quelle reformulation rend l’action suivable ?',
                        'marks' => 1,
                        'explanation' => 'Une action concrète doit pouvoir être réalisée et vérifiée ; une intention générale n’offre pas ce suivi.',
                        'choices' => [
                            ['text' => 'Une action précise, attribuée et vérifiable', 'is_correct' => true],
                            ['text' => 'Allonger le texte sans préciser de livrable', 'is_correct' => false],
                            ['text' => 'Attribuer l’action à toute l’entreprise sans suivi', 'is_correct' => false],
                            ['text' => 'Conserver le constat comme seule preuve', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service épuise son budget d’erreur et prépare une évolution non urgente. Quelle décision doit être fondée sur une politique préétablie ?',
                        'marks' => 1,
                        'explanation' => 'Une politique de budget sert à arbitrer fiabilité et évolution ; ses exceptions doivent être explicites.',
                        'choices' => [
                            ['text' => 'L’application d’une politique de budget préétablie', 'is_correct' => true],
                            ['text' => 'Interdire toute correction de sécurité sans exception', 'is_correct' => false],
                            ['text' => 'Ignorer le budget parce que la moyenne de latence est bonne', 'is_correct' => false],
                            ['text' => 'Redéfinir le SLO après chaque incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut relier une hausse d’erreur à une livraison. Quelle capacité d’observation est essentielle ?',
                        'marks' => 1,
                        'explanation' => 'L’attribution demande une trace de changement et des comparaisons contextualisées.',
                        'choices' => [
                            ['text' => 'Des signaux corrélés à la version et à l’exposition', 'is_correct' => true],
                            ['text' => 'Observer seulement le nombre total de logs', 'is_correct' => false],
                            ['text' => 'Supprimer les marqueurs de version pour anonymiser le code', 'is_correct' => false],
                            ['text' => 'Comparer des périodes sans tenir compte de la charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le taux d’échec des changements diminue, mais la définition d’un échec a été assouplie. Quelle interprétation est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Les indicateurs exigent des définitions et dénominateurs cohérents pour comparer des périodes.',
                        'choices' => [
                            ['text' => 'Une rupture de comparabilité liée à la définition', 'is_correct' => true],
                            ['text' => 'La livraison s’est nécessairement améliorée', 'is_correct' => false],
                            ['text' => 'La définition n’influence jamais la mesure', 'is_correct' => false],
                            ['text' => 'Le nombre de commits corrige automatiquement le biais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une mitigation rétablit le service en désactivant une option. Quelle suite distingue rétablissement et prévention ?',
                        'marks' => 1,
                        'explanation' => 'Réduire l’impact termine l’urgence mais ne résout pas nécessairement les causes et conditions de récidive.',
                        'choices' => [
                            ['text' => 'Une analyse et des actions après la mitigation', 'is_correct' => true],
                            ['text' => 'Clore tout travail parce que le service répond', 'is_correct' => false],
                            ['text' => 'Retirer définitivement tous les journaux', 'is_correct' => false],
                            ['text' => 'Réactiver immédiatement sans observation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe souhaite tester un plan de retour. Quel exercice apporte une preuve plus forte qu’une lecture documentaire ?',
                        'marks' => 1,
                        'explanation' => 'Un exercice révèle les dépendances, permissions et incompatibilités cachées de la procédure.',
                        'choices' => [
                            ['text' => 'Un exercice réaliste du plan de retour', 'is_correct' => true],
                            ['text' => 'Relire seulement les titres des étapes', 'is_correct' => false],
                            ['text' => 'Vérifier la présence d’un fichier nommé rollback', 'is_correct' => false],
                            ['text' => 'Demander une confirmation orale sans exécution', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Gouverner les risques et l’évolution technique',
                'description' => 'Protéger les accès et garder les standards, dépendances et engagements utiles au produit.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une clé de production a été publiée puis retirée du dépôt. Quelle preuve de traitement reste indispensable ?',
                        'marks' => 1,
                        'explanation' => 'Un secret peut avoir été copié ; le nettoyage visible ne remplace ni révocation ni investigation.',
                        'choices' => [
                            ['text' => 'La révocation et l’examen des usages', 'is_correct' => true],
                            ['text' => 'Uniquement l’absence de la ligne dans la dernière version', 'is_correct' => false],
                            ['text' => 'Le renommage du dépôt', 'is_correct' => false],
                            ['text' => 'Une capture du fichier après suppression', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une signature valide provient d’un système de compilation compromis. Quel contrôle complémentaire doit être examiné ?',
                        'marks' => 1,
                        'explanation' => 'Une signature peut authentifier un résultat malveillant si le processus ou la clé sont compromis.',
                        'choices' => [
                            ['text' => 'La confiance dans la construction et sa provenance', 'is_correct' => true],
                            ['text' => 'La seule validité cryptographique de la signature', 'is_correct' => false],
                            ['text' => 'La seule présence d’un inventaire de dépendances', 'is_correct' => false],
                            ['text' => 'Le seul passage des tests fonctionnels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une alerte de dépendance touche une version présente dans la nomenclature logicielle. Comment établir une priorité de correction ?',
                        'marks' => 1,
                        'explanation' => 'La visibilité des composants permet l’analyse, mais le contexte réel détermine l’exposition et la réponse.',
                        'choices' => [
                            ['text' => 'Une analyse d’exposition et une réponse priorisée', 'is_correct' => true],
                            ['text' => 'Conclure que toute présence impose le même délai', 'is_correct' => false],
                            ['text' => 'Ignorer l’alerte si la compilation réussit', 'is_correct' => false],
                            ['text' => 'Modifier seulement le fichier de nomenclature', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service interne accepte toute requête venue du réseau privé sans vérifier l’acteur. Quelle hypothèse de sécurité est fragile ?',
                        'marks' => 1,
                        'explanation' => 'L’identité et l’autorisation doivent être établies aux frontières pertinentes ; un réseau privé ne suffit pas.',
                        'choices' => [
                            ['text' => 'La confiance déduite de la seule position réseau', 'is_correct' => true],
                            ['text' => 'Les services internes ne transportent pas de données', 'is_correct' => false],
                            ['text' => 'TLS remplace toutes les autorisations métier', 'is_correct' => false],
                            ['text' => 'Le format JSON garantit l’identité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un accès d’urgence administrateur est nécessaire en incident. Quelle gouvernance équilibre utilité et maîtrise ?',
                        'marks' => 1,
                        'explanation' => 'Les accès exceptionnels doivent rester utilisables tout en étant bornés et auditables.',
                        'choices' => [
                            ['text' => 'Un accès temporaire et auditable', 'is_correct' => true],
                            ['text' => 'Un compte permanent partagé sans historique', 'is_correct' => false],
                            ['text' => 'Une désactivation de toutes les traces pendant l’urgence', 'is_correct' => false],
                            ['text' => 'Un accès illimité pour chaque développeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe obtient une exception à un standard de sécurité pour une contrainte provisoire. Que doit contenir la décision ?',
                        'marks' => 1,
                        'explanation' => 'Une exception contrôlée conserve la visibilité sur le risque et sa durée.',
                        'choices' => [
                            ['text' => 'Un risque accepté, un responsable et une échéance', 'is_correct' => true],
                            ['text' => 'Le seul nom de l’équipe', 'is_correct' => false],
                            ['text' => 'Une autorisation sans fin ni justification', 'is_correct' => false],
                            ['text' => 'Une promesse de ne jamais signaler d’incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API doit être retirée après publication d’une alternative. Quelle preuve soutient la décision de coupure ?',
                        'marks' => 1,
                        'explanation' => 'La dépréciation nécessite un suivi des consommateurs, pas seulement une date ou une annonce.',
                        'choices' => [
                            ['text' => 'Des usages et migrations vérifiés', 'is_correct' => true],
                            ['text' => 'La seule existence de la nouvelle documentation', 'is_correct' => false],
                            ['text' => 'Le nombre de nouveaux endpoints', 'is_correct' => false],
                            ['text' => 'L’absence de plainte le jour de l’annonce', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique de suppression de données concerne la base principale, mais les copies analytiques et sauvegardes sont ignorées. Quel point de gouvernance manque ?',
                        'marks' => 1,
                        'explanation' => 'La gestion du cycle de vie doit recenser les copies et définir leur traitement, y compris les contraintes particulières des sauvegardes.',
                        'choices' => [
                            ['text' => 'Une politique couvrant le cycle de vie des copies', 'is_correct' => true],
                            ['text' => 'Une suppression limitée aux index de recherche', 'is_correct' => false],
                            ['text' => 'Une nouvelle date dans un document sans inventaire des copies', 'is_correct' => false],
                            ['text' => 'Une conservation illimitée de toutes les copies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une trace technique contient des identifiants personnels et des jetons complets. Quelle orientation réduit le risque tout en conservant le diagnostic ?',
                        'marks' => 1,
                        'explanation' => 'L’observabilité doit conserver des informations utiles sans collecter inutilement des données sensibles.',
                        'choices' => [
                            ['text' => 'Une collecte minimale et des accès contrôlés', 'is_correct' => true],
                            ['text' => 'Collecter davantage de secrets pour reproduire les problèmes', 'is_correct' => false],
                            ['text' => 'Rendre les traces publiques pour simplifier le support', 'is_correct' => false],
                            ['text' => 'Supprimer toutes les mesures de service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un champ d’API conserve son type mais change d’unité, de secondes vers millisecondes. Quelle évaluation est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Le sens, les unités et les contraintes font partie du contrat public.',
                        'choices' => [
                            ['text' => 'Une rupture sémantique malgré un type inchangé', 'is_correct' => true],
                            ['text' => 'Le type identique garantit toute compatibilité', 'is_correct' => false],
                            ['text' => 'Le nom inchangé rend la conversion automatique', 'is_correct' => false],
                            ['text' => 'Les clients interprètent toujours l’unité depuis la valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur critique devient difficile à remplacer. Quelle préparation améliore la capacité de sortie ?',
                        'marks' => 1,
                        'explanation' => 'Une stratégie de sortie doit être éprouvée techniquement et inclure données, intégrations et coûts de transition.',
                        'choices' => [
                            ['text' => 'Un export éprouvé et un plan de migration', 'is_correct' => true],
                            ['text' => 'Conserver seulement la promesse commerciale de portabilité', 'is_correct' => false],
                            ['text' => 'Ajouter davantage de formats propriétaires sans inventaire', 'is_correct' => false],
                            ['text' => 'Repousser toute analyse jusqu’à la rupture du contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation classe les développeurs avec un indicateur de nombre de déploiements. Quelle dérive doit être anticipée ?',
                        'marks' => 1,
                        'explanation' => 'Une métrique de flux ne résume pas une performance individuelle ; les incitations et le contexte peuvent fausser son usage.',
                        'choices' => [
                            ['text' => 'Une incitation pouvant dégrader valeur et coopération', 'is_correct' => true],
                            ['text' => 'Le nombre de déploiements mesure à lui seul la contribution individuelle', 'is_correct' => false],
                            ['text' => 'Une valeur plus haute prouve toujours une meilleure qualité', 'is_correct' => false],
                            ['text' => 'La comparaison reste équitable quels que soient produit et rôle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'Architecture Enterprise & DDD',
            'Advanced Software Design',
            'Distributed Systems Reliability',
            'Advanced Security Engineering',
            'Quality Engineering & Verification',
            'Performance Engineering',
            'Release & Operational Excellence',
            'Maintainability & Engineering Governance',
        ];

        DB::transaction(function () use ($subject, $quizzes, $legacyTitles): void {
            foreach ($quizzes as $quizData) {
                $questionCount = count($quizData['questions']);
                $totalMarks = array_sum(array_column($quizData['questions'], 'marks'));

                $quiz = Quiz::updateOrCreate(
                    [
                        'subject_id' => $subject->id,
                        'title' => $quizData['title'],
                    ],
                    [
                        'owner_id' => null,
                        'description' => $quizData['description'],
                        'difficulty' => $quizData['difficulty'],
                        'duration' => $quizData['duration'],
                        'passing_score' => $quizData['passing_score'],
                        'total_marks' => $totalMarks,
                        'is_active' => true,
                    ]
                );

                foreach ($quizData['questions'] as $index => $questionData) {
                    $question = $quiz->questions()->updateOrCreate(
                        ['order' => $index + 1],
                        [
                            'question' => $questionData['question'],
                            'type' => 'multiple_choice',
                            'marks' => $questionData['marks'],
                            'explanation' => $questionData['explanation'],
                        ]
                    );

                    $question->choices()->delete();

                    // Le frontend gère le mélange des choix et des questions.
                    foreach ($questionData['choices'] as $choiceIndex => $choiceData) {
                        $question->choices()->create([
                            'choice_text' => $choiceData['text'],
                            'is_correct' => $choiceData['is_correct'],
                            'order' => $choiceIndex + 1,
                        ]);
                    }
                }

                $quiz->questions()->where('order', '>', $questionCount)->delete();
            }

            // Les anciens quiz restent conservés mais ne doublonnent plus le catalogue actif.
            Quiz::where('subject_id', $subject->id)
                ->whereNull('owner_id')
                ->whereIn('title', $legacyTitles)
                ->whereNotIn('title', array_column($quizzes, 'title'))
                ->update(['is_active' => false]);
        });
    }
}
