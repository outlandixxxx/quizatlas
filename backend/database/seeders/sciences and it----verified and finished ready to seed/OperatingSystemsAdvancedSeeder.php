<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OperatingSystemsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'operating-systems')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Mémoire, NUMA et noyau',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Mémoire, NUMA et noyau.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Un service NUMA-heavy consomme beaucoup de mémoire distante et sa latence varie selon le nœud. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Le placement et l’affinité des tâches avec la politique de mémoire NUMA', 'is_correct' => false],
                            ['choice_text' => 'Détecter la pression mémoire et intervenir avant la terminaison de processus', 'is_correct' => false],
                            ['choice_text' => 'Aligner placement des threads et allocation mémoire sur les nœuds qui hébergent les données', 'is_correct' => true],
                            ['choice_text' => 'Placer toutes les pages sur un seul nœud sans mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique NUMA-aware peut améliorer la localité, mais son effet doit être mesuré par rapport au placement réel.',
                    ],
                    [
                        'question' => 'Une base de données bénéficie moins que prévu de huge pages. Le coût à inclure dans ce choix est :',
                        'choices' => [
                            ['choice_text' => 'Aligner placement des threads et allocation mémoire sur les nœuds qui hébergent les données', 'is_correct' => false],
                            ['choice_text' => 'Les pages verrouillées ne sont pas récupérables comme les pages ordinaires', 'is_correct' => false],
                            ['choice_text' => 'Améliorer la localité spatiale en regroupant les données accédées ensemble', 'is_correct' => false],
                            ['choice_text' => 'La fragmentation interne ou les contraintes d’allocation liées à des pages plus grandes', 'is_correct' => true],
                        ],
                        'explanation' => 'Les huge pages peuvent réduire la pression TLB, mais leur granularité peut gaspiller de la mémoire ou compliquer le placement.',
                    ],
                    [
                        'question' => 'Après fork(), un parent et son fils lisent les mêmes pages ; une copie physique apparaît seulement après une écriture. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'Copy-on-Write', 'is_correct' => true],
                            ['choice_text' => 'La fragmentation interne ou les contraintes d’allocation liées à des pages plus grandes', 'is_correct' => false],
                            ['choice_text' => 'Créer une copie privée de la page puis reprendre l’instruction', 'is_correct' => false],
                            ['choice_text' => 'Cela traite temporairement la pression en sacrifiant des processus sans corriger la demande durable', 'is_correct' => false],
                        ],
                        'explanation' => 'Le COW partage initialement les pages et les copie lorsqu’une écriture nécessite une version indépendante.',
                    ],
                    [
                        'question' => 'Un processus reçoit un page fault lors d’une écriture sur une page partagée en COW. Pour éviter l’aggravation, l’équipe doit :',
                        'choices' => [
                            ['choice_text' => 'Le fault peut être résolu en mémoire, notamment par une mise à zéro, un mapping ou un COW', 'is_correct' => false],
                            ['choice_text' => 'Créer une copie privée de la page puis reprendre l’instruction', 'is_correct' => true],
                            ['choice_text' => 'Lire nécessairement la page depuis le disque', 'is_correct' => false],
                            ['choice_text' => 'Terminer toujours le processus avec SIGKILL', 'is_correct' => false],
                        ],
                        'explanation' => 'Un page fault peut déclencher une copie COW ; tous les faults ne nécessitent donc pas une lecture disque.',
                    ],
                    [
                        'question' => 'Une application verrouille une grande partie de la RAM avec mlock() et les autres workloads subissent une pression mémoire. La relation entre ces deux effets est :',
                        'choices' => [
                            ['choice_text' => 'La mémoire verrouillée devient du stockage RAID', 'is_correct' => false],
                            ['choice_text' => 'Copy-on-Write', 'is_correct' => false],
                            ['choice_text' => 'Les pages verrouillées ne sont pas récupérables comme les pages ordinaires', 'is_correct' => true],
                            ['choice_text' => 'Le verrouillage augmente la capacité physique de RAM', 'is_correct' => false],
                        ],
                        'explanation' => 'Un usage excessif de mémoire non récupérable réduit les options du noyau sous pression.',
                    ],
                    [
                        'question' => 'Un profiler indique beaucoup de misses TLB et de cache pour un calcul parcourant des structures dispersées. L’optimisation de structure à privilégier est :',
                        'choices' => [
                            ['choice_text' => 'Aligner placement des threads et allocation mémoire sur les nœuds qui hébergent les données', 'is_correct' => false],
                            ['choice_text' => 'La fragmentation interne ou les contraintes d’allocation liées à des pages plus grandes', 'is_correct' => false],
                            ['choice_text' => 'Copy-on-Write', 'is_correct' => false],
                            ['choice_text' => 'Améliorer la localité spatiale en regroupant les données accédées ensemble', 'is_correct' => true],
                        ],
                        'explanation' => 'Une disposition plus locale peut améliorer les caches et réduire les accès mémoire coûteux.',
                    ],
                    [
                        'question' => 'L’OOM killer intervient plusieurs fois par jour sur un hôte de production. Pour absorber cette charge, prévoyez :',
                        'choices' => [
                            ['choice_text' => 'Cela traite temporairement la pression en sacrifiant des processus sans corriger la demande durable', 'is_correct' => true],
                            ['choice_text' => 'L’OOM killer crée de la mémoire physique', 'is_correct' => false],
                            ['choice_text' => 'Sa sévérité contrôle le débit réseau', 'is_correct' => false],
                            ['choice_text' => 'Détecter la pression mémoire et intervenir avant la terminaison de processus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse doit déterminer si la charge, une fuite ou la capacité est en cause ; le kill ne résout pas une insuffisance persistante.',
                    ],
                    [
                        'question' => 'Une application a des allocations NUMA équilibrées, mais ses threads sont souvent déplacés loin des pages qu’ils utilisent. L’hypothèse la mieux étayée par ces faits est :',
                        'choices' => [
                            ['choice_text' => 'Créer une copie privée de la page puis reprendre l’instruction', 'is_correct' => false],
                            ['choice_text' => 'Le placement et l’affinité des tâches avec la politique de mémoire NUMA', 'is_correct' => true],
                            ['choice_text' => 'Les pages verrouillées ne sont pas récupérables comme les pages ordinaires', 'is_correct' => false],
                            ['choice_text' => 'Le fault peut être résolu en mémoire, notamment par une mise à zéro, un mapping ou un COW', 'is_correct' => false],
                        ],
                        'explanation' => 'L’affinité CPU et la politique d’allocation influencent la proximité des threads et des pages.',
                    ],
                    [
                        'question' => 'Un page fault est compté, mais le périphérique de stockage reste inactif. Les faits observés s’expliquent par :',
                        'choices' => [
                            ['choice_text' => 'Le placement et l’affinité des tâches avec la politique de mémoire NUMA', 'is_correct' => false],
                            ['choice_text' => 'Améliorer la localité spatiale en regroupant les données accédées ensemble', 'is_correct' => false],
                            ['choice_text' => 'Le fault peut être résolu en mémoire, notamment par une mise à zéro, un mapping ou un COW', 'is_correct' => true],
                            ['choice_text' => 'Chaque fault implique un accès disque mais celui-ci n’apparaît jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'Les page faults sont des exceptions de gestion mémoire ; plusieurs sont résolus sans I/O disque.',
                    ],
                    [
                        'question' => 'Un système montre une hausse de reclaim et de latence avant tout OOM. L’usage pertinent de ces signaux consiste à :',
                        'choices' => [
                            ['choice_text' => 'Désactiver toutes les métriques de mémoire', 'is_correct' => false],
                            ['choice_text' => 'Cela traite temporairement la pression en sacrifiant des processus sans corriger la demande durable', 'is_correct' => false],
                            ['choice_text' => 'Le placement et l’affinité des tâches avec la politique de mémoire NUMA', 'is_correct' => false],
                            ['choice_text' => 'Détecter la pression mémoire et intervenir avant la terminaison de processus', 'is_correct' => true],
                        ],
                        'explanation' => 'Les signaux de reclaim et de pression peuvent annoncer une dégradation avant un échec visible.',
                    ],
                ],
            ],
            [
                'title' => 'Systèmes de fichiers et garanties de stockage',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Systèmes de fichiers et garanties de stockage.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 11,
                'qs' => [
                    [
                        'question' => 'Après une panne, les répertoires sont cohérents mais une transaction applicative confirmée manque. La distinction utile pour interpréter ce cas est :',
                        'choices' => [
                            ['choice_text' => 'Le journal du filesystem peut protéger ses métadonnées sans garantir chaque écriture applicative', 'is_correct' => true],
                            ['choice_text' => 'Un filesystem journalisé conserve toutes les transactions applicatives par défaut', 'is_correct' => false],
                            ['choice_text' => 'Une transaction confirmée n’utilise jamais de cache', 'is_correct' => false],
                            ['choice_text' => 'Arrêter les écritures et suivre la procédure de réparation adaptée au filesystem', 'is_correct' => false],
                        ],
                        'explanation' => 'La durabilité applicative dépend des appels et garanties de synchronisation demandés, au-delà du journal de métadonnées.',
                    ],
                    [
                        'question' => 'Un administrateur augmente le cache de lecture, mais la charge est un flux d’écriture séquentiel durable. Pour interpréter cette mesure, retenez :',
                        'choices' => [
                            ['choice_text' => 'Le journal du filesystem peut protéger ses métadonnées sans garantir chaque écriture applicative', 'is_correct' => false],
                            ['choice_text' => 'La charge est limitée par les écritures et leur persistance plutôt que par les lectures réutilisables', 'is_correct' => true],
                            ['choice_text' => 'Le cache empêche le scheduler de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Un plus grand cache supprime automatiquement les barrières d’écriture', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cache de lecture aide surtout lorsque des données sont réutilisées ; il ne supprime pas le coût des écritures durables.',
                    ],
                    [
                        'question' => 'Une migration modifie des blocs dans un volume avec snapshots COW. La consommation du pool augmente fortement. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'La migration crée une copie complète à chaque lecture', 'is_correct' => false],
                            ['choice_text' => 'Les snapshots réservent toujours exactement zéro espace', 'is_correct' => false],
                            ['choice_text' => 'Les anciennes versions de blocs restent conservées tant qu’un snapshot les référence', 'is_correct' => true],
                            ['choice_text' => 'Le snapshot compresse les blocs et augmente artificiellement leur taille', 'is_correct' => false],
                        ],
                        'explanation' => 'Les écritures divergentes obligent le système à garder les anciens blocs nécessaires aux snapshots.',
                    ],
                    [
                        'question' => 'Une application écrit dans deux couches de cache et présente des doublons de données en mémoire. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'La disparition des données de cache', 'is_correct' => false],
                            ['choice_text' => 'La charge est limitée par les écritures et leur persistance plutôt que par les lectures réutilisables', 'is_correct' => false],
                            ['choice_text' => 'Les anciennes versions de blocs restent conservées tant qu’un snapshot les référence', 'is_correct' => false],
                            ['choice_text' => 'Une pression mémoire accrue et des politiques d’écriture différée difficiles à raisonner', 'is_correct' => true],
                        ],
                        'explanation' => 'Des caches superposés peuvent augmenter l’usage mémoire et interagir sur la fraîcheur et la persistance.',
                    ],
                    [
                        'question' => 'Un système détecte un bit flip silencieux lors d’une lecture. Dans ce cas, le noyau intervient pour :',
                        'choices' => [
                            ['choice_text' => 'Détecter que le contenu lu ne correspond pas à la valeur d’intégrité attendue', 'is_correct' => true],
                            ['choice_text' => 'La divergence des blocs peut faire croître le stockage retenu par le snapshot', 'is_correct' => false],
                            ['choice_text' => 'Une pression mémoire accrue et des politiques d’écriture différée difficiles à raisonner', 'is_correct' => false],
                            ['choice_text' => 'Une coupure d’alimentation avant la persistance sur le support', 'is_correct' => false],
                        ],
                        'explanation' => 'Un checksum révèle une incohérence ; la réparation demande une copie redondante ou une source saine.',
                    ],
                    [
                        'question' => 'Un volume XFS est monté en lecture-écriture et doit être réparé hors ligne. Avant cette intervention, prenez la précaution suivante :',
                        'choices' => [
                            ['choice_text' => 'La latence et la profondeur de file du périphérique', 'is_correct' => false],
                            ['choice_text' => 'Arrêter les écritures et suivre la procédure de réparation adaptée au filesystem', 'is_correct' => true],
                            ['choice_text' => 'Lancer plusieurs réparations concurrentes sur le même volume', 'is_correct' => false],
                            ['choice_text' => 'Détecter que le contenu lu ne correspond pas à la valeur d’intégrité attendue', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réparation doit porter sur un état stable et respecter les outils spécifiques du filesystem.',
                    ],
                    [
                        'question' => 'Une écriture est confirmée à l’application avant que le cache volatile du contrôleur ait vidé les données. La défaillance susceptible de produire cette perte est :',
                        'choices' => [
                            ['choice_text' => 'Vérifier qu’une copie saine et restaurable existe avant de supprimer les versions de récupération', 'is_correct' => false],
                            ['choice_text' => 'Le journal du filesystem peut protéger ses métadonnées sans garantir chaque écriture applicative', 'is_correct' => false],
                            ['choice_text' => 'Une coupure d’alimentation avant la persistance sur le support', 'is_correct' => true],
                            ['choice_text' => 'Les suppressions, corruptions logiques ou erreurs propagées peuvent toucher les copies redondantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les caches volatils peuvent perdre des écritures si le système confirme avant une garantie de persistance adéquate.',
                    ],
                    [
                        'question' => 'Une table de partition est saine mais les applications observent des erreurs de disque sous charge. La mesure la plus utile pour ce diagnostic est :',
                        'choices' => [
                            ['choice_text' => 'La charge est limitée par les écritures et leur persistance plutôt que par les lectures réutilisables', 'is_correct' => false],
                            ['choice_text' => 'Les suppressions, corruptions logiques ou erreurs propagées peuvent toucher les copies redondantes', 'is_correct' => false],
                            ['choice_text' => 'Vérifier qu’une copie saine et restaurable existe avant de supprimer les versions de récupération', 'is_correct' => false],
                            ['choice_text' => 'La latence et la profondeur de file du périphérique', 'is_correct' => true],
                        ],
                        'explanation' => 'Une file qui croît avec la latence signale que le chemin de stockage ne traite plus les requêtes au rythme demandé.',
                    ],
                    [
                        'question' => 'Un snapshot de plusieurs téraoctets est conservé pendant des mois avec une charge très active. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'La divergence des blocs peut faire croître le stockage retenu par le snapshot', 'is_correct' => true],
                            ['choice_text' => 'Le snapshot libère nécessairement l’espace au fil du temps', 'is_correct' => false],
                            ['choice_text' => 'Le snapshot empêche toute écriture sur le volume courant', 'is_correct' => false],
                            ['choice_text' => 'Les métadonnées de snapshot ne consomment jamais de capacité', 'is_correct' => false],
                        ],
                        'explanation' => 'La durée et le taux de changement déterminent l’espace des blocs historiques conservés.',
                    ],
                    [
                        'question' => 'Une équipe considère RAID 10 comme sa stratégie de sauvegarde. Le contrôle manquant dans cette situation est :',
                        'choices' => [
                            ['choice_text' => 'Les anciennes versions de blocs restent conservées tant qu’un snapshot les référence', 'is_correct' => false],
                            ['choice_text' => 'Les suppressions, corruptions logiques ou erreurs propagées peuvent toucher les copies redondantes', 'is_correct' => true],
                            ['choice_text' => 'RAID 10 n’a pas de disque redondant', 'is_correct' => false],
                            ['choice_text' => 'RAID 10 bloque l’accès aux fichiers', 'is_correct' => false],
                        ],
                        'explanation' => 'La redondance protège contre certaines défaillances de disque mais ne fournit ni historique isolé ni restauration point-in-time complète.',
                    ],
                    [
                        'question' => 'Un déploiement de base de données vérifie seulement que les checksums sont valides, puis supprime les snapshots. Avant de poursuivre, l’équipe doit vérifier :',
                        'choices' => [
                            ['choice_text' => 'Une pression mémoire accrue et des politiques d’écriture différée difficiles à raisonner', 'is_correct' => false],
                            ['choice_text' => 'Détecter que le contenu lu ne correspond pas à la valeur d’intégrité attendue', 'is_correct' => false],
                            ['choice_text' => 'Vérifier qu’une copie saine et restaurable existe avant de supprimer les versions de récupération', 'is_correct' => true],
                            ['choice_text' => 'Exécuter fsck en écriture pendant que la base tourne', 'is_correct' => false],
                        ],
                        'explanation' => 'Un checksum détecte une corruption mais ne recrée pas les données ; il faut conserver une copie de récupération vérifiée.',
                    ],
                ],
            ],
            [
                'title' => 'Concurrence, synchronisation et mémoire partagée',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Concurrence, synchronisation et mémoire partagée.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Deux threads prennent A puis B dans l’un et B puis A dans l’autre. Le service se bloque parfois. Pour supprimer ce défaut, corrigez :',
                        'choices' => [
                            ['choice_text' => 'Imposer un ordre global cohérent d’acquisition des deux verrous', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les verrous par des variables globales non protégées', 'is_correct' => false],
                            ['choice_text' => 'Une primitive atomique comme fetch-add, si son ordre mémoire convient', 'is_correct' => false],
                            ['choice_text' => 'Tracer les verrous détenus et attendus par chaque thread au moment du blocage', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ordre total empêche le cycle d’attente qui permet le deadlock.',
                    ],
                    [
                        'question' => 'Une structure lock-free fonctionne sur x86 mais échoue sur une autre architecture après réordonnancement d’accès. L’aspect à revoir dans cette conception est :',
                        'choices' => [
                            ['choice_text' => 'Imposer un ordre global cohérent d’acquisition des deux verrous', 'is_correct' => false],
                            ['choice_text' => 'Les garanties de memory ordering et les opérations atomiques utilisées', 'is_correct' => true],
                            ['choice_text' => 'Limiter le réordonnancement et réduire les performances sans fournir de garantie utile supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Il favorise des lectures peu coûteuses et diffère certaines opérations de mise à jour ou libération', 'is_correct' => false],
                        ],
                        'explanation' => 'Les garanties de visibilité et d’ordre diffèrent selon le modèle mémoire ; l’algorithme doit imposer celles qu’il exige.',
                    ],
                    [
                        'question' => 'Un algorithme CAS semble correct, mais un pointeur revient à la même valeur après plusieurs changements et masque une modification intermédiaire. Le piège de concurrence illustré ici est :',
                        'choices' => [
                            ['choice_text' => 'Le false sharing', 'is_correct' => false],
                            ['choice_text' => 'Une inversion de priorité', 'is_correct' => false],
                            ['choice_text' => 'Le problème ABA', 'is_correct' => true],
                            ['choice_text' => 'Les garanties de memory ordering et les opérations atomiques utilisées', 'is_correct' => false],
                        ],
                        'explanation' => 'ABA peut faire croire qu’une valeur n’a pas changé alors qu’elle a changé puis repris la même représentation.',
                    ],
                    [
                        'question' => 'Des compteurs indépendants sont écrits par différents cœurs, mais partagent la même cache line. Le trafic de cohérence est élevé. Le phénomène à suspecter dans cette observation est :',
                        'choices' => [
                            ['choice_text' => 'Le problème ABA', 'is_correct' => false],
                            ['choice_text' => 'Vérifier sûreté, progrès, durée de vie mémoire et comportement sous forte concurrence', 'is_correct' => false],
                            ['choice_text' => 'Imposer un ordre global cohérent d’acquisition des deux verrous', 'is_correct' => false],
                            ['choice_text' => 'Le false sharing', 'is_correct' => true],
                        ],
                        'explanation' => 'Des variables distinctes sur la même ligne de cache peuvent provoquer des invalidations malgré l’absence de partage logique.',
                    ],
                    [
                        'question' => 'Un workload lit une structure très fréquemment et la met à jour rarement. RCU convient lorsque le workload présente :',
                        'choices' => [
                            ['choice_text' => 'Il favorise des lectures peu coûteuses et diffère certaines opérations de mise à jour ou libération', 'is_correct' => true],
                            ['choice_text' => 'Les garanties de memory ordering et les opérations atomiques utilisées', 'is_correct' => false],
                            ['choice_text' => 'Le problème ABA', 'is_correct' => false],
                            ['choice_text' => 'Le false sharing', 'is_correct' => false],
                        ],
                        'explanation' => 'RCU réduit le coût du chemin de lecture, mais nécessite une gestion rigoureuse des mises à jour et de la période de grâce.',
                    ],
                    [
                        'question' => 'Une barrière mémoire est ajoutée à chaque instruction sans raison mesurée. L’effet généralement observé dans ce cas est :',
                        'choices' => [
                            ['choice_text' => 'Tracer les verrous détenus et attendus par chaque thread au moment du blocage', 'is_correct' => false],
                            ['choice_text' => 'Limiter le réordonnancement et réduire les performances sans fournir de garantie utile supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Ajouter de la mémoire physique', 'is_correct' => false],
                            ['choice_text' => 'Une primitive atomique comme fetch-add, si son ordre mémoire convient', 'is_correct' => false],
                        ],
                        'explanation' => 'Les barrières doivent répondre au modèle de cohérence requis ; elles ne sont pas des optimisations gratuites.',
                    ],
                    [
                        'question' => 'Un deadlock reproductible n’a pas de lock évident dans la trace. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Limiter le réordonnancement et réduire les performances sans fournir de garantie utile supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Une inversion de priorité', 'is_correct' => false],
                            ['choice_text' => 'Tracer les verrous détenus et attendus par chaque thread au moment du blocage', 'is_correct' => true],
                            ['choice_text' => 'Il favorise des lectures peu coûteuses et diffère certaines opérations de mise à jour ou libération', 'is_correct' => false],
                        ],
                        'explanation' => 'Un graphe d’attente entre détenteurs et demandeurs permet de mettre en évidence un cycle.',
                    ],
                    [
                        'question' => 'Une tâche critique attend un mutex détenu par un thread de basse priorité, tandis que des tâches intermédiaires préemptent ce thread. L’effet généralement observé dans ce cas est :',
                        'choices' => [
                            ['choice_text' => 'Vérifier sûreté, progrès, durée de vie mémoire et comportement sous forte concurrence', 'is_correct' => false],
                            ['choice_text' => 'Tracer les verrous détenus et attendus par chaque thread au moment du blocage', 'is_correct' => false],
                            ['choice_text' => 'Imposer un ordre global cohérent d’acquisition des deux verrous', 'is_correct' => false],
                            ['choice_text' => 'Une inversion de priorité', 'is_correct' => true],
                        ],
                        'explanation' => 'La tâche haute priorité est bloquée indirectement par l’exécution des tâches de priorité intermédiaire.',
                    ],
                    [
                        'question' => 'Un compteur partagé doit être incrémenté atomiquement par plusieurs CPU sans verrou global. Pour effectuer ce diagnostic, utilisez :',
                        'choices' => [
                            ['choice_text' => 'Une primitive atomique comme fetch-add, si son ordre mémoire convient', 'is_correct' => true],
                            ['choice_text' => 'Vérifier sûreté, progrès, durée de vie mémoire et comportement sous forte concurrence', 'is_correct' => false],
                            ['choice_text' => 'Les garanties de memory ordering et les opérations atomiques utilisées', 'is_correct' => false],
                            ['choice_text' => 'Le problème ABA', 'is_correct' => false],
                        ],
                        'explanation' => 'Une opération atomique garantit la mise à jour indivisible, mais le choix d’ordre mémoire reste important.',
                    ],
                    [
                        'question' => 'Une équipe supprime tous les locks pour obtenir une implémentation lock-free. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'Une primitive atomique comme fetch-add, si son ordre mémoire convient', 'is_correct' => false],
                            ['choice_text' => 'Vérifier sûreté, progrès, durée de vie mémoire et comportement sous forte concurrence', 'is_correct' => true],
                            ['choice_text' => 'Supposer que lock-free signifie sans bug', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’ordre mémoire sur toutes les architectures', 'is_correct' => false],
                        ],
                        'explanation' => 'Lock-free ne garantit pas à lui seul la correction ou l’absence d’affamement et complique souvent la gestion mémoire.',
                    ],
                ],
            ],
            [
                'title' => 'Sécurité du noyau et frontières de confiance',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Sécurité du noyau et frontières de confiance.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Un service isolé n’utilise que quelques appels système, mais conserve un accès à des primitives kernel rarement nécessaires. L’amélioration qui corrige ce problème consiste à :',
                        'choices' => [
                            ['choice_text' => 'Exécuter le service en root partagé', 'is_correct' => false],
                            ['choice_text' => 'Une vulnérabilité kernel accessible peut franchir ou affaiblir la frontière d’isolation', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une allowlist de syscalls minimale compatible avec ses fonctions', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les correctifs kernel', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire les syscalls accessibles limite l’interface kernel qu’un processus compromis peut exploiter.',
                    ],
                    [
                        'question' => 'Un poste doit prouver quels composants ont participé au démarrage sans forcément bloquer un composant non approuvé. Pour obtenir ce comportement, retenez le mécanisme suivant :',
                        'choices' => [
                            ['choice_text' => 'Secure Boot uniquement, qui mesure sans vérifier', 'is_correct' => false],
                            ['choice_text' => 'Secure Boot contrôle l’autorisation de chargement ; measured boot enregistre les mesures de ce qui a démarré', 'is_correct' => false],
                            ['choice_text' => 'La chaîne de confiance n’est pas propagée à tous les composants de démarrage', 'is_correct' => false],
                            ['choice_text' => 'Measured boot, qui enregistre des mesures pouvant être attestées', 'is_correct' => true],
                        ],
                        'explanation' => 'Measured boot mesure la chaîne de démarrage ; Secure Boot vérifie l’autorisation des composants selon sa politique.',
                    ],
                    [
                        'question' => 'Une équipe confond Secure Boot et measured boot dans son modèle de menace. La distinction utile pour interpréter ce cas est :',
                        'choices' => [
                            ['choice_text' => 'Secure Boot contrôle l’autorisation de chargement ; measured boot enregistre les mesures de ce qui a démarré', 'is_correct' => true],
                            ['choice_text' => 'Measured boot désactive le firmware et Secure Boot protège les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Secure Boot mesure sans vérifier et measured boot bloque toujours', 'is_correct' => false],
                            ['choice_text' => 'Measured boot, qui enregistre des mesures pouvant être attestées', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux mécanismes peuvent se compléter, mais ne remplissent pas la même fonction.',
                    ],
                    [
                        'question' => 'Un programme privilégié est modifiable par le compte qu’il sert. La chaîne d’attaque rendue possible par ces conditions est :',
                        'choices' => [
                            ['choice_text' => 'Appliquer une allowlist de syscalls minimale compatible avec ses fonctions', 'is_correct' => false],
                            ['choice_text' => 'L’utilisateur modifie le binaire puis attend son exécution avec des privilèges élevés', 'is_correct' => true],
                            ['choice_text' => 'L’utilisateur modifie uniquement une icône non exécutée', 'is_correct' => false],
                            ['choice_text' => 'Le noyau efface automatiquement le compte', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégrité des exécutables privilégiés doit être protégée contre les identités moins privilégiées.',
                    ],
                    [
                        'question' => 'Un système utilise ASLR mais expose des informations d’adresses dans des logs accessibles à l’application. La défense fragilisée dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'L’utilisateur modifie le binaire puis attend son exécution avec des privilèges élevés', 'is_correct' => false],
                            ['choice_text' => 'Le conserver séparé, très restreint, protégé par un contrôle fort et soumis à un audit et une revue', 'is_correct' => false],
                            ['choice_text' => 'L’imprévisibilité des adresses mémoire', 'is_correct' => true],
                            ['choice_text' => 'Ajouter uniquement les capabilities nécessaires et limiter explicitement les périphériques accessibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fuite d’adresses peut réduire l’incertitude que la randomisation cherche à apporter aux attaquants.',
                    ],
                    [
                        'question' => 'Une sandbox applique des namespaces mais partage le noyau avec l’hôte. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Le conteneur possède un noyau invité indépendant', 'is_correct' => false],
                            ['choice_text' => 'Les namespaces chiffrent toutes les données', 'is_correct' => false],
                            ['choice_text' => 'L’hôte ne peut pas limiter ses ressources', 'is_correct' => false],
                            ['choice_text' => 'Une vulnérabilité kernel accessible peut franchir ou affaiblir la frontière d’isolation', 'is_correct' => true],
                        ],
                        'explanation' => 'Les conteneurs dépendent du kernel hôte ; leur isolation ne supprime pas le risque d’une faille de ce noyau.',
                    ],
                    [
                        'question' => 'Un compte d’administration d’urgence est nécessaire lorsque l’IdP est indisponible. La conception qui évite ce risque repose sur :',
                        'choices' => [
                            ['choice_text' => 'Le conserver séparé, très restreint, protégé par un contrôle fort et soumis à un audit et une revue', 'is_correct' => true],
                            ['choice_text' => 'L’imprévisibilité des adresses mémoire', 'is_correct' => false],
                            ['choice_text' => 'Mesurer le gain sur une charge représentative et accepter explicitement le risque de sécurité accru', 'is_correct' => false],
                            ['choice_text' => 'Secure Boot contrôle l’autorisation de chargement ; measured boot enregistre les mesures de ce qui a démarré', 'is_correct' => false],
                        ],
                        'explanation' => 'Un accès break-glass doit rester disponible mais faire l’objet de contrôles renforcés et de vérifications après usage.',
                    ],
                    [
                        'question' => 'Un démarrage vérifie seulement la signature du premier binaire, puis charge librement les étapes suivantes. Le contrôle manquant dans cette situation est :',
                        'choices' => [
                            ['choice_text' => 'Mesurer le gain sur une charge représentative et accepter explicitement le risque de sécurité accru', 'is_correct' => false],
                            ['choice_text' => 'La chaîne de confiance n’est pas propagée à tous les composants de démarrage', 'is_correct' => true],
                            ['choice_text' => 'La signature du premier binaire garantit toutes les étapes suivantes', 'is_correct' => false],
                            ['choice_text' => 'L’utilisateur modifie le binaire puis attend son exécution avec des privilèges élevés', 'is_correct' => false],
                        ],
                        'explanation' => 'La confiance doit être vérifiée ou mesurée à chaque étape qui introduit le composant suivant.',
                    ],
                    [
                        'question' => 'Un conteneur n’a besoin que de bind un port privilégié et de lire un périphérique précis. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Appliquer une allowlist de syscalls minimale compatible avec ses fonctions', 'is_correct' => false],
                            ['choice_text' => 'Measured boot, qui enregistre des mesures pouvant être attestées', 'is_correct' => false],
                            ['choice_text' => 'Ajouter uniquement les capabilities nécessaires et limiter explicitement les périphériques accessibles', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les namespaces du conteneur', 'is_correct' => false],
                        ],
                        'explanation' => 'La réduction ciblée des privilèges minimise l’impact potentiel sans accorder un accès root global.',
                    ],
                    [
                        'question' => 'Un administrateur supprime une mitigation CPU pour améliorer un benchmark synthétique. Avant une mise en production, l’équipe doit évaluer :',
                        'choices' => [
                            ['choice_text' => 'Déployer si le benchmark a une moyenne plus basse', 'is_correct' => false],
                            ['choice_text' => 'Ajouter uniquement les capabilities nécessaires et limiter explicitement les périphériques accessibles', 'is_correct' => false],
                            ['choice_text' => 'L’imprévisibilité des adresses mémoire', 'is_correct' => false],
                            ['choice_text' => 'Mesurer le gain sur une charge représentative et accepter explicitement le risque de sécurité accru', 'is_correct' => true],
                        ],
                        'explanation' => 'La décision oppose un bénéfice de performance mesuré à un niveau de protection et doit suivre la politique de risque.',
                    ],
                ],
            ],
            [
                'title' => 'Virtualisation, placement et capacité',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Virtualisation, placement et capacité.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 11,
                'qs' => [
                    [
                        'question' => 'Une VM est prête à s’exécuter mais attend régulièrement une fenêtre CPU de l’hôte. Pour éclairer cette décision, suivez l’indicateur suivant :',
                        'choices' => [
                            ['choice_text' => 'CPU ready time', 'is_correct' => true],
                            ['choice_text' => 'Le chemin direct peut améliorer l’accès au périphérique mais réduire la portabilité et la capacité de migration', 'is_correct' => false],
                            ['choice_text' => 'Une surallocation qui masque la contention pendant les pointes simultanées', 'is_correct' => false],
                            ['choice_text' => 'Le guest coopère et peut choisir des pages qu’il estime récupérables', 'is_correct' => false],
                        ],
                        'explanation' => 'CPU ready mesure le temps planifiable où une VM attend effectivement le CPU physique.',
                    ],
                    [
                        'question' => 'Un cluster affiche un CPU moyen faible, mais les pics de plusieurs VMs coïncident et augmentent la latence. L’hypothèse la mieux étayée par ces faits est :',
                        'choices' => [
                            ['choice_text' => 'CPU ready time', 'is_correct' => false],
                            ['choice_text' => 'Une surallocation qui masque la contention pendant les pointes simultanées', 'is_correct' => true],
                            ['choice_text' => 'Un quorum de cluster trop élevé', 'is_correct' => false],
                            ['choice_text' => 'La mémoire réellement active, la surallocation et le comportement de toutes les VMs sous pression', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oversubscription peut fonctionner sur des pics non corrélés et devenir risquée quand ils se produisent ensemble.',
                    ],
                    [
                        'question' => 'Une VM dépasse son quota mémoire et l’hyperviseur récupère des pages par ballooning. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'Il garantit une latence identique à la mémoire locale', 'is_correct' => false],
                            ['choice_text' => 'Le taux de pages dirty dépasse le débit effectif de pré-copie', 'is_correct' => false],
                            ['choice_text' => 'Le guest coopère et peut choisir des pages qu’il estime récupérables', 'is_correct' => true],
                            ['choice_text' => 'Le ballooning ajoute de la RAM physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le driver balloon récupère de la mémoire via le guest, même si cela ne rend pas la mémoire gratuite ni sans impact.',
                    ],
                    [
                        'question' => 'Une VM utilise du passthrough PCIe et doit migrer vers un autre hôte. La dépendance qui bloque l’opération est :',
                        'choices' => [
                            ['choice_text' => 'Le guest utilise un système de fichiers ext4', 'is_correct' => false],
                            ['choice_text' => 'SR-IOV, si les fonctions virtuelles et exigences de mobilité sont compatibles', 'is_correct' => false],
                            ['choice_text' => 'Une anti-affinité entre les réplicas sur des domaines de panne distincts', 'is_correct' => false],
                            ['choice_text' => 'La VM est liée à un périphérique physique qui peut ne pas exister sur la cible', 'is_correct' => true],
                        ],
                        'explanation' => 'Le passthrough réduit l’abstraction et peut empêcher une migration transparente vers un hôte sans matériel compatible.',
                    ],
                    [
                        'question' => 'Une carte réseau virtuelle limite les paquets par seconde malgré une bande passante encore disponible. L’évaluation de cette décision doit intégrer :',
                        'choices' => [
                            ['choice_text' => 'SR-IOV, si les fonctions virtuelles et exigences de mobilité sont compatibles', 'is_correct' => true],
                            ['choice_text' => 'La VM est liée à un périphérique physique qui peut ne pas exister sur la cible', 'is_correct' => false],
                            ['choice_text' => 'Comparer la demande simultanée, les limites et la topologie de placement avec la baseline', 'is_correct' => false],
                            ['choice_text' => 'Garder vCPU et mémoire d’une VM proches sur le même nœud quand la capacité le permet', 'is_correct' => false],
                        ],
                        'explanation' => 'SR-IOV expose des fonctions virtuelles du périphérique pour accélérer certains chemins d’I/O, avec des compromis d’isolation et de mobilité.',
                    ],
                    [
                        'question' => 'Une migration live ne converge pas : la VM modifie ses pages mémoire plus vite que le réseau ne les copie. La conclusion étayée par ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'La mémoire réellement active, la surallocation et le comportement de toutes les VMs sous pression', 'is_correct' => false],
                            ['choice_text' => 'Le taux de pages dirty dépasse le débit effectif de pré-copie', 'is_correct' => true],
                            ['choice_text' => 'Le guest coopère et peut choisir des pages qu’il estime récupérables', 'is_correct' => false],
                            ['choice_text' => 'Garder vCPU et mémoire d’une VM proches sur le même nœud quand la capacité le permet', 'is_correct' => false],
                        ],
                        'explanation' => 'La pré-copie doit rattraper les pages modifiées ; une charge d’écriture élevée peut empêcher cette convergence.',
                    ],
                    [
                        'question' => 'Deux réplicas d’un service critique sont placés sur le même hôte. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Comparer la demande simultanée, les limites et la topologie de placement avec la baseline', 'is_correct' => false],
                            ['choice_text' => 'CPU ready time', 'is_correct' => false],
                            ['choice_text' => 'Une anti-affinité entre les réplicas sur des domaines de panne distincts', 'is_correct' => true],
                            ['choice_text' => 'Une affinité stricte sur le même cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anti-affinité évite qu’une panne d’hôte emporte simultanément les instances supposées redondantes.',
                    ],
                    [
                        'question' => 'Une VM de production utilise presque toute la mémoire physique de l’hôte et le ballooning commence. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'La VM est liée à un périphérique physique qui peut ne pas exister sur la cible', 'is_correct' => false],
                            ['choice_text' => 'Une surallocation qui masque la contention pendant les pointes simultanées', 'is_correct' => false],
                            ['choice_text' => 'SR-IOV, si les fonctions virtuelles et exigences de mobilité sont compatibles', 'is_correct' => false],
                            ['choice_text' => 'La mémoire réellement active, la surallocation et le comportement de toutes les VMs sous pression', 'is_correct' => true],
                        ],
                        'explanation' => 'L’analyse doit relier la demande active, les réservations, l’overcommit et les effets de récupération sur l’ensemble de l’hôte.',
                    ],
                    [
                        'question' => 'Le vCPU ready time augmente après ajout de plusieurs VMs. Dans ce contexte, l’action à mener est :',
                        'choices' => [
                            ['choice_text' => 'Comparer la demande simultanée, les limites et la topologie de placement avec la baseline', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de vCPU à chaque VM', 'is_correct' => false],
                            ['choice_text' => 'Le taux de pages dirty dépasse le débit effectif de pré-copie', 'is_correct' => false],
                            ['choice_text' => 'Une anti-affinité entre les réplicas sur des domaines de panne distincts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ready time peut provenir de contention ou d’un mauvais placement ; il faut vérifier le profil avant de modifier les allocations.',
                    ],
                    [
                        'question' => 'Une équipe exécute des charges avec des contraintes de latence fortes sur des hôtes NUMA. Pour respecter cette contrainte, placez la charge :',
                        'choices' => [
                            ['choice_text' => 'Comparer la demande simultanée, les limites et la topologie de placement avec la baseline', 'is_correct' => false],
                            ['choice_text' => 'Garder vCPU et mémoire d’une VM proches sur le même nœud quand la capacité le permet', 'is_correct' => true],
                            ['choice_text' => 'Placer les VMs redondantes sur le même hôte', 'is_correct' => false],
                            ['choice_text' => 'Le chemin direct peut améliorer l’accès au périphérique mais réduire la portabilité et la capacité de migration', 'is_correct' => false],
                        ],
                        'explanation' => 'La localité NUMA peut réduire les accès distants, mais le placement doit être validé sous charge réelle.',
                    ],
                    [
                        'question' => 'Une plateforme alloue une VM à une charge fortement liée à une carte accélératrice attachée par passthrough. Le compromis à expliquer à l’équipe est :',
                        'choices' => [
                            ['choice_text' => 'La VM est liée à un périphérique physique qui peut ne pas exister sur la cible', 'is_correct' => false],
                            ['choice_text' => 'Garder vCPU et mémoire d’une VM proches sur le même nœud quand la capacité le permet', 'is_correct' => false],
                            ['choice_text' => 'Le chemin direct peut améliorer l’accès au périphérique mais réduire la portabilité et la capacité de migration', 'is_correct' => true],
                            ['choice_text' => 'Le passthrough garantit la migration à chaud vers tout hôte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passthrough donne un accès plus direct mais lie la VM à la disponibilité et à la compatibilité du périphérique.',
                    ],
                ],
            ],
            [
                'title' => 'Haute disponibilité et observabilité',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Haute disponibilité et observabilité.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Deux partitions réseau d’un cluster pensent toutes deux être primaires et écrivent sur le stockage partagé. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'Le fencing, qui retire effectivement l’accès du nœud concerné', 'is_correct' => true],
                            ['choice_text' => 'Le mécanisme de réplication et la confirmation des écritures entre sites', 'is_correct' => false],
                            ['choice_text' => 'Déterminer quelle partition conserve le droit d’agir comme autorité', 'is_correct' => false],
                            ['choice_text' => 'Tester un signal représentatif de la capacité réelle du service à traiter son travail', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fencing coupe les ressources d’un membre suspect pour préserver l’intégrité avant une reprise.',
                    ],
                    [
                        'question' => 'Un cluster perd le lien entre deux zones. Dans ce scénario, cet élément sert à :',
                        'choices' => [
                            ['choice_text' => 'Des dépendances, droits ou étapes de récupération peuvent échouer en conditions réelles', 'is_correct' => false],
                            ['choice_text' => 'Déterminer quelle partition conserve le droit d’agir comme autorité', 'is_correct' => true],
                            ['choice_text' => 'Isoler la dépendance et conserver la transaction principale avec une fonction de recommandation dégradée', 'is_correct' => false],
                            ['choice_text' => 'Le fencing, qui retire effectivement l’accès du nœud concerné', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quorum empêche plusieurs partitions de prendre simultanément des décisions incompatibles.',
                    ],
                    [
                        'question' => 'Un service répond à `/health` parce que son PID existe, mais toutes les requêtes échouent à cause d’une dépendance bloquée. Avant de poursuivre, l’équipe doit vérifier :',
                        'choices' => [
                            ['choice_text' => 'Tester le nombre de fichiers temporaires', 'is_correct' => false],
                            ['choice_text' => 'Borner le nombre d’actions simultanées, prévoir un arrêt automatique et tester le scénario', 'is_correct' => false],
                            ['choice_text' => 'Tester un signal représentatif de la capacité réelle du service à traiter son travail', 'is_correct' => true],
                            ['choice_text' => 'Vérifier seulement que le processus possède un PID', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sonde de processus ne démontre pas que le service est fonctionnel ; la vérification doit refléter le contrat sans être trop intrusive.',
                    ],
                    [
                        'question' => 'Un cluster annonce un RPO de quelques secondes. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Des traces distribuées corrélées par identifiant de requête', 'is_correct' => false],
                            ['choice_text' => 'Afficher les percentiles élevés et les répartitions par région ou type de charge', 'is_correct' => false],
                            ['choice_text' => 'Séparer les faits observés, les hypothèses et les actions en cours', 'is_correct' => false],
                            ['choice_text' => 'Le mécanisme de réplication et la confirmation des écritures entre sites', 'is_correct' => true],
                        ],
                        'explanation' => 'Un RPO bas limite la perte de données et dépend de la fréquence et du mode de réplication.',
                    ],
                    [
                        'question' => 'Une procédure de bascule a été écrite mais jamais exécutée. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Des dépendances, droits ou étapes de récupération peuvent échouer en conditions réelles', 'is_correct' => true],
                            ['choice_text' => 'Le quorum ne peut jamais être perdu', 'is_correct' => false],
                            ['choice_text' => 'Le fencing, qui retire effectivement l’accès du nœud concerné', 'is_correct' => false],
                            ['choice_text' => 'Déterminer quelle partition conserve le droit d’agir comme autorité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les exercices révèlent les écarts entre la procédure documentée et les contraintes réelles.',
                    ],
                    [
                        'question' => 'Une alerte montre une hausse de latence, mais aucun log ne révèle où le temps est passé entre plusieurs services. Pour suivre cette requête de bout en bout, instrumentez :',
                        'choices' => [
                            ['choice_text' => 'Des dépendances, droits ou étapes de récupération peuvent échouer en conditions réelles', 'is_correct' => false],
                            ['choice_text' => 'Des traces distribuées corrélées par identifiant de requête', 'is_correct' => true],
                            ['choice_text' => 'Tester un signal représentatif de la capacité réelle du service à traiter son travail', 'is_correct' => false],
                            ['choice_text' => 'Le mécanisme de réplication et la confirmation des écritures entre sites', 'is_correct' => false],
                        ],
                        'explanation' => 'Les traces montrent les segments traversés et leurs durées, tandis que métriques et logs apportent des vues complémentaires.',
                    ],
                    [
                        'question' => 'Les métriques agrégées restent normales, mais une faible proportion de requêtes est extrêmement lente. Pour diagnostiquer la longue traîne, la vue utile est :',
                        'choices' => [
                            ['choice_text' => 'Des traces distribuées corrélées par identifiant de requête', 'is_correct' => false],
                            ['choice_text' => 'Isoler la dépendance et conserver la transaction principale avec une fonction de recommandation dégradée', 'is_correct' => false],
                            ['choice_text' => 'Afficher les percentiles élevés et les répartitions par région ou type de charge', 'is_correct' => true],
                            ['choice_text' => 'Afficher le total de CPU depuis le démarrage', 'is_correct' => false],
                        ],
                        'explanation' => 'Les queues de distribution et segments peuvent révéler une dégradation minoritaire masquée par l’agrégat.',
                    ],
                    [
                        'question' => 'Un service secondaire de recommandations tombe, mais la commande doit rester disponible. La conception qui évite ce risque repose sur :',
                        'choices' => [
                            ['choice_text' => 'Faire dépendre toute commande du succès des recommandations', 'is_correct' => false],
                            ['choice_text' => 'Relancer sans limite le service secondaire', 'is_correct' => false],
                            ['choice_text' => 'Afficher les percentiles élevés et les répartitions par région ou type de charge', 'is_correct' => false],
                            ['choice_text' => 'Isoler la dépendance et conserver la transaction principale avec une fonction de recommandation dégradée', 'is_correct' => true],
                        ],
                        'explanation' => 'La dégradation partielle garde la capacité essentielle sans transformer une panne secondaire en panne globale.',
                    ],
                    [
                        'question' => 'Un incident est déclenché par une remédiation automatique qui redémarre trop de nœuds. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Borner le nombre d’actions simultanées, prévoir un arrêt automatique et tester le scénario', 'is_correct' => true],
                            ['choice_text' => 'Accélérer la remédiation pour finir plus vite', 'is_correct' => false],
                            ['choice_text' => 'Autoriser la remédiation à contourner le quorum', 'is_correct' => false],
                            ['choice_text' => 'Séparer les faits observés, les hypothèses et les actions en cours', 'is_correct' => false],
                        ],
                        'explanation' => 'Une remédiation doit avoir des limites de blast radius et des conditions d’arrêt lorsqu’elle produit un effet inattendu.',
                    ],
                    [
                        'question' => 'Un rapport d’incident indique « le disque a causé la panne » avant l’analyse des traces. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Le fencing, qui retire effectivement l’accès du nœud concerné', 'is_correct' => false],
                            ['choice_text' => 'Séparer les faits observés, les hypothèses et les actions en cours', 'is_correct' => true],
                            ['choice_text' => 'Borner le nombre d’actions simultanées, prévoir un arrêt automatique et tester le scénario', 'is_correct' => false],
                            ['choice_text' => 'Des traces distribuées corrélées par identifiant de requête', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette séparation évite de transformer une hypothèse précoce en conclusion partagée sans preuve.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => $quizData['total_marks'],
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
                ]
            );

            foreach ($quizData['qs'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    ['quiz_id' => $quiz->id, 'order' => $index + 1],
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
