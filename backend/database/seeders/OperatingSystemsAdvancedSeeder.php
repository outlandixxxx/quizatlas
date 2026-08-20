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
            'title' => 'Architecture mémoire avancée',
            'description' => 'NUMA, huge pages, COW, pression mémoire et OOM.',
            'difficulty' => 'Advanced',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi la localité NUMA influence-t-elle les performances ?',
                    'choices' => [
                        ['choice_text' => 'La mémoire d\'un autre nœud peut avoir une latence et une bande passante différentes', 'is_correct' => true],
                        ['choice_text' => 'NUMA ne concerne que le réseau', 'is_correct' => false],
                        ['choice_text' => 'Tous les nœuds ont toujours la même latence', 'is_correct' => false],
                        ['choice_text' => 'Le noyau ignore les nœuds', 'is_correct' => false]
                    ],
                    'explanation' => 'Une charge NUMA-aware cherche à garder calcul et données proches pour réduire les accès mémoire distants.',
                ],
                [
                    'question' => 'Quel bénéfice apportent les huge pages à certaines charges ?',
                    'choices' => [
                        ['choice_text' => 'Réduire la pression sur les tables de pages et la TLB', 'is_correct' => true],
                        ['choice_text' => 'Supprimer la mémoire virtuelle', 'is_correct' => false],
                        ['choice_text' => 'Augmenter le stockage', 'is_correct' => false],
                        ['choice_text' => 'Éviter tous les page faults', 'is_correct' => false]
                    ],
                    'explanation' => 'Une page plus grande couvre davantage d\'adresses avec moins d\'entrées de table et peut améliorer la couverture TLB.',
                ],
                [
                    'question' => 'Pourquoi les huge pages peuvent-elles être défavorables ?',
                    'choices' => [
                        ['choice_text' => 'La granularité élevée peut augmenter la fragmentation interne', 'is_correct' => true],
                        ['choice_text' => 'Elles interdisent le cache CPU', 'is_correct' => false],
                        ['choice_text' => 'Elles désactivent DMA', 'is_correct' => false],
                        ['choice_text' => 'Elles rendent NUMA inutile', 'is_correct' => false]
                    ],
                    'explanation' => 'Une grande taille de page n\'est pas adaptée à toutes les charges et peut gaspiller de la mémoire ou compliquer le placement.',
                ],
                [
                    'question' => 'Un page fault signifie-t-il toujours une lecture disque ?',
                    'choices' => [
                        ['choice_text' => 'Non, il peut aussi correspondre à une page non mappée ou à une autre condition gérée par le noyau', 'is_correct' => true],
                        ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                        ['choice_text' => 'Il désactive le CPU', 'is_correct' => false],
                        ['choice_text' => 'Il supprime le processus', 'is_correct' => false]
                    ],
                    'explanation' => 'Les page faults couvrent plusieurs situations ; une page peut être présente mais nécessiter un mapping ou un traitement noyau.',
                ],
                [
                    'question' => 'Quel risque existe si une application verrouille trop de mémoire avec mlock ?',
                    'choices' => [
                        ['choice_text' => 'Elle réduit la mémoire récupérable et peut aggraver la pression globale', 'is_correct' => true],
                        ['choice_text' => 'Elle augmente la RAM physique', 'is_correct' => false],
                        ['choice_text' => 'Elle remplace le swap par RAID', 'is_correct' => false],
                        ['choice_text' => 'Elle désactive le cache CPU', 'is_correct' => false]
                    ],
                    'explanation' => 'La mémoire verrouillée ne peut pas être récupérée comme une page ordinaire, donc un usage excessif réduit la flexibilité du système.',
                ],
                [
                    'question' => 'Pourquoi Copy-on-Write rend fork() efficace ?',
                    'choices' => [
                        ['choice_text' => 'Les pages restent partagées tant qu\'aucune écriture ne nécessite une copie', 'is_correct' => true],
                        ['choice_text' => 'Toutes les pages sont copiées immédiatement', 'is_correct' => false],
                        ['choice_text' => 'La mémoire virtuelle est supprimée', 'is_correct' => false],
                        ['choice_text' => 'Un nouveau disque est créé', 'is_correct' => false]
                    ],
                    'explanation' => 'Le COW évite des copies physiques inutiles et duplique une page seulement lorsqu\'une écriture intervient.',
                ],
                [
                    'question' => 'Quel effet produit une mauvaise localité mémoire ?',
                    'choices' => [
                        ['choice_text' => 'Davantage de misses cache et TLB et des accès plus coûteux', 'is_correct' => true],
                        ['choice_text' => 'Une meilleure vectorisation', 'is_correct' => false],
                        ['choice_text' => 'Moins d\'accès mémoire', 'is_correct' => false],
                        ['choice_text' => 'Un CPU toujours plus rapide', 'is_correct' => false]
                    ],
                    'explanation' => 'Des accès dispersés réduisent l\'efficacité des caches et augmentent les latences d\'accès à la mémoire.',
                ],
                [
                    'question' => 'Pourquoi un scheduler NUMA-aware est-il utile ?',
                    'choices' => [
                        ['choice_text' => 'Il favorise l\'exécution près du nœud où les données sont localisées', 'is_correct' => true],
                        ['choice_text' => 'Il désactive le parallélisme', 'is_correct' => false],
                        ['choice_text' => 'Il force tout sur un seul nœud', 'is_correct' => false],
                        ['choice_text' => 'Il remplace la TLB', 'is_correct' => false]
                    ],
                    'explanation' => 'La proximité CPU-mémoire peut réduire les accès distants et améliorer la latence pour des charges mémoire intensives.',
                ],
                [
                    'question' => 'Quel signal indique une pression mémoire croissante ?',
                    'choices' => [
                        ['choice_text' => 'Une hausse du reclaim, des scans de pages et des latences', 'is_correct' => true],
                        ['choice_text' => 'Une baisse des ports TCP', 'is_correct' => false],
                        ['choice_text' => 'Un nombre d\'inodes stable', 'is_correct' => false],
                        ['choice_text' => 'La température du clavier', 'is_correct' => false]
                    ],
                    'explanation' => 'Les métriques de pression et de reclaim révèlent la tension sur la mémoire avant une panne complète.',
                ],
                [
                    'question' => 'Pourquoi OOM killer ne doit-il pas remplacer le capacity planning ?',
                    'choices' => [
                        ['choice_text' => 'Il sacrifie des processus pour libérer de la mémoire mais ne corrige pas la sous-capacité durable', 'is_correct' => true],
                        ['choice_text' => 'Il augmente la RAM', 'is_correct' => false],
                        ['choice_text' => 'Il répare les fuites', 'is_correct' => false],
                        ['choice_text' => 'Il empêche toutes les allocations futures', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'OOM peut restaurer temporairement la disponibilité, mais une sous-capacité persistante exige une correction de charge ou de capacité.',
                ]
            ],
        ],
        [
            'title' => 'Systèmes de fichiers avancés',
            'description' => 'Journaling, CoW, checksums, persistance et snapshots.',
            'difficulty' => 'Advanced',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi un journaling de métadonnées ne garantit-il pas les dernières données applicatives ?',
                    'choices' => [
                        ['choice_text' => 'Il vise surtout la cohérence du système de fichiers, pas la persistance de chaque écriture applicative', 'is_correct' => true],
                        ['choice_text' => 'Il journalise toujours tout', 'is_correct' => false],
                        ['choice_text' => 'Il remplace les transactions', 'is_correct' => false],
                        ['choice_text' => 'Il empêche toute perte', 'is_correct' => false]
                    ],
                    'explanation' => 'La cohérence du système de fichiers et la persistance des données applicatives sont deux garanties différentes.',
                ],
                [
                    'question' => 'Quel avantage un système Copy-on-Write apporte-t-il aux snapshots ?',
                    'choices' => [
                        ['choice_text' => 'Partager les blocs inchangés entre l\'état courant et le snapshot', 'is_correct' => true],
                        ['choice_text' => 'Copier toujours tout le volume', 'is_correct' => false],
                        ['choice_text' => 'Ne jamais consommer d\'espace', 'is_correct' => false],
                        ['choice_text' => 'Désactiver les checksums', 'is_correct' => false]
                    ],
                    'explanation' => 'Le COW permet au snapshot de réutiliser les blocs non modifiés et de ne conserver séparément que les anciennes versions nécessaires.',
                ],
                [
                    'question' => 'Pourquoi les checksums détectent-ils une corruption silencieuse ?',
                    'choices' => [
                        ['choice_text' => 'Ils permettent de comparer le contenu lu à une valeur d\'intégrité attendue', 'is_correct' => true],
                        ['choice_text' => 'Ils répliquent automatiquement toutes les données', 'is_correct' => false],
                        ['choice_text' => 'Ils accélèrent le CPU', 'is_correct' => false],
                        ['choice_text' => 'Ils empêchent toute suppression', 'is_correct' => false]
                    ],
                    'explanation' => 'Un checksum permet de détecter une modification ou corruption même si le périphérique a bien répondu à la lecture.',
                ],
                [
                    'question' => 'Pourquoi deux caches, application et OS, peuvent-ils influencer les performances ?',
                    'choices' => [
                        ['choice_text' => 'Ils consomment de la mémoire et leurs politiques de write-back peuvent interagir', 'is_correct' => true],
                        ['choice_text' => 'La base de données n\'utilise jamais de cache', 'is_correct' => false],
                        ['choice_text' => 'Le cache remplace les index', 'is_correct' => false],
                        ['choice_text' => 'Les caches désactivent les transactions', 'is_correct' => false]
                    ],
                    'explanation' => 'Les caches superposés peuvent provoquer pression mémoire, écritures différées et coût de copie ; leur interaction doit être comprise.',
                ],
                [
                    'question' => 'Pourquoi un volume presque plein peut-il dégrader un filesystem moderne ?',
                    'choices' => [
                        ['choice_text' => 'Les nouvelles allocations et opérations Copy-on-Write disposent de moins de marge', 'is_correct' => true],
                        ['choice_text' => 'Le CPU ajoute des cœurs', 'is_correct' => false],
                        ['choice_text' => 'Les permissions disparaissent', 'is_correct' => false],
                        ['choice_text' => 'Le réseau devient chiffré', 'is_correct' => false]
                    ],
                    'explanation' => 'Un manque d\'espace réduit la flexibilité d\'allocation et peut augmenter fragmentation et latence ou provoquer des échecs.',
                ],
                [
                    'question' => 'Pourquoi séparer un volume de logs des données critiques ?',
                    'choices' => [
                        ['choice_text' => 'Limiter l\'impact d\'une croissance incontrôlée des logs', 'is_correct' => true],
                        ['choice_text' => 'Augmenter toujours les performances', 'is_correct' => false],
                        ['choice_text' => 'Supprimer la rotation', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer le réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Une séparation empêche une saturation des logs de consommer automatiquement l\'espace nécessaire aux données essentielles.',
                ],
                [
                    'question' => 'Quel compromis caractérise une écriture synchrone durable ?',
                    'choices' => [
                        ['choice_text' => 'Une meilleure garantie de persistance avec un coût potentiel de latence', 'is_correct' => true],
                        ['choice_text' => 'Toujours plus rapide', 'is_correct' => false],
                        ['choice_text' => 'Aucun accès au cache', 'is_correct' => false],
                        ['choice_text' => 'Suppression du journaling', 'is_correct' => false]
                    ],
                    'explanation' => 'Le système doit attendre une garantie de persistance adaptée, ce qui peut augmenter le temps par écriture.',
                ],
                [
                    'question' => 'Pourquoi grossir le cache ne résout-il pas toujours les I/O ?',
                    'choices' => [
                        ['choice_text' => 'Une charge d\'écriture ou peu réutilisée peut ne pas bénéficier d\'un cache plus grand', 'is_correct' => true],
                        ['choice_text' => 'Le cache ralentit toujours le CPU', 'is_correct' => false],
                        ['choice_text' => 'Le cache ne contient jamais de données', 'is_correct' => false],
                        ['choice_text' => 'Toutes les I/O sont de simples lectures répétées', 'is_correct' => false]
                    ],
                    'explanation' => 'Le bénéfice dépend du profil de charge et de la localité ; les écritures durables et flux séquentiels ont d\'autres limites.',
                ],
                [
                    'question' => 'Pourquoi réparer un filesystem monté en écriture est-il dangereux ?',
                    'choices' => [
                        ['choice_text' => 'Ses structures peuvent changer pendant la réparation', 'is_correct' => true],
                        ['choice_text' => 'Le volume devient toujours plus grand', 'is_correct' => false],
                        ['choice_text' => 'Les utilisateurs deviennent root', 'is_correct' => false],
                        ['choice_text' => 'Les logs sont chiffrés', 'is_correct' => false]
                    ],
                    'explanation' => 'Une réparation suppose généralement un état cohérent et stable ; des écritures concurrentes peuvent aggraver la corruption.',
                ],
                [
                    'question' => 'Pourquoi surveiller l\'espace des snapshots ?',
                    'choices' => [
                        ['choice_text' => 'Les écritures modifiant des blocs conservés peuvent augmenter leur consommation', 'is_correct' => true],
                        ['choice_text' => 'Les snapshots libèrent toujours de l\'espace', 'is_correct' => false],
                        ['choice_text' => 'Ils n\'utilisent jamais de blocs', 'is_correct' => false],
                        ['choice_text' => 'Leur taille est toujours fixe', 'is_correct' => false]
                    ],
                    'explanation' => 'Plus de blocs diffèrent de l\'état capturé, plus le snapshot doit conserver d\'anciennes versions et consomme d\'espace.',
                ]
            ],
        ],
        [
            'title' => 'Concurrence avancée',
            'description' => 'Deadlocks, atomics, memory ordering, RCU et false sharing.',
            'difficulty' => 'Advanced',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quelles sont les quatre conditions de Coffman ?',
                    'choices' => [
                        ['choice_text' => 'Exclusion mutuelle, attente et maintien, absence de préemption et attente circulaire', 'is_correct' => true],
                        ['choice_text' => 'Cache, DMA, RAID et DNS', 'is_correct' => false],
                        ['choice_text' => 'Préemption, réplication, chiffrement et compression', 'is_correct' => false],
                        ['choice_text' => 'Uniquement deux threads', 'is_correct' => false]
                    ],
                    'explanation' => 'Les quatre conditions réunies permettent à un deadlock classique de persister indéfiniment.',
                ],
                [
                    'question' => 'Pourquoi imposer un ordre global d\'acquisition des verrous ?',
                    'choices' => [
                        ['choice_text' => 'Éviter une attente circulaire', 'is_correct' => true],
                        ['choice_text' => 'Supprimer tous les context switches', 'is_correct' => false],
                        ['choice_text' => 'Augmenter le nombre de locks', 'is_correct' => false],
                        ['choice_text' => 'Garantir l\'absence de races', 'is_correct' => false]
                    ],
                    'explanation' => 'Un ordre cohérent empêche qu\'un thread prenne A puis B alors qu\'une autre prend B puis A et crée un cycle.',
                ],
                [
                    'question' => 'Que permet compare-and-swap dans un algorithme concurrent ?',
                    'choices' => [
                        ['choice_text' => 'Mettre à jour une valeur si elle n\'a pas changé, sans verrou global dans certains cas', 'is_correct' => true],
                        ['choice_text' => 'Désactiver le CPU', 'is_correct' => false],
                        ['choice_text' => 'Garantir l\'absence de famine', 'is_correct' => false],
                        ['choice_text' => 'Copier tout un processus', 'is_correct' => false]
                    ],
                    'explanation' => 'CAS permet une mise à jour atomique conditionnelle et sert de primitive à divers algorithmes lock-free.',
                ],
                [
                    'question' => 'Pourquoi les structures lock-free restent-elles difficiles à vérifier ?',
                    'choices' => [
                        ['choice_text' => 'Les memory ordering et scénarios comme ABA rendent la correction subtile', 'is_correct' => true],
                        ['choice_text' => 'Aucune donnée ne peut être partagée', 'is_correct' => false],
                        ['choice_text' => 'Elles exigent un seul thread', 'is_correct' => false],
                        ['choice_text' => 'Elles interdisent les atomiques', 'is_correct' => false]
                    ],
                    'explanation' => 'Éviter les locks ne supprime pas les problèmes de visibilité, d\'ordre mémoire et de durée de vie des objets.',
                ],
                [
                    'question' => 'Quel symptôme correspond à une inversion de priorité ?',
                    'choices' => [
                        ['choice_text' => 'Une tâche haute priorité attend un verrou détenu par une tâche basse priorité', 'is_correct' => true],
                        ['choice_text' => 'Une tâche basse priorité termine toujours première', 'is_correct' => false],
                        ['choice_text' => 'Le disque est plein', 'is_correct' => false],
                        ['choice_text' => 'Le réseau passe en IPv6', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'inversion de priorité apparaît lorsqu\'une tâche peu prioritaire bloque indirectement une tâche critique.',
                ],
                [
                    'question' => 'Quel mécanisme réduit classiquement l\'inversion de priorité ?',
                    'choices' => [
                        ['choice_text' => 'L\'héritage de priorité', 'is_correct' => true],
                        ['choice_text' => 'La compression de RAM', 'is_correct' => false],
                        ['choice_text' => 'La rotation des logs', 'is_correct' => false],
                        ['choice_text' => 'Le démarrage réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Le détenteur du verrou peut hériter temporairement de la priorité de la tâche bloquée.',
                ],
                [
                    'question' => 'Pourquoi utiliser une memory barrier ?',
                    'choices' => [
                        ['choice_text' => 'Contrôler certaines garanties d\'ordre et de visibilité des accès mémoire entre CPU', 'is_correct' => true],
                        ['choice_text' => 'Augmenter le disque', 'is_correct' => false],
                        ['choice_text' => 'Remplacer tous les mutex', 'is_correct' => false],
                        ['choice_text' => 'Empêcher les interruptions', 'is_correct' => false]
                    ],
                    'explanation' => 'Les architectures peuvent réordonner des opérations ; des barrières encadrent les relations de visibilité nécessaires à l\'algorithme.',
                ],
                [
                    'question' => 'Qu\'est-ce que le false sharing ?',
                    'choices' => [
                        ['choice_text' => 'Des variables indépendantes partagent une cache line et provoquent des invalidations mutuelles', 'is_correct' => true],
                        ['choice_text' => 'Deux processus partagent un fichier', 'is_correct' => false],
                        ['choice_text' => 'Deux ports ont la même valeur', 'is_correct' => false],
                        ['choice_text' => 'Deux disques ont la même taille', 'is_correct' => false]
                    ],
                    'explanation' => 'Des écritures sur la même ligne de cache génèrent du trafic de cohérence même lorsque les variables sont logiquement indépendantes.',
                ],
                [
                    'question' => 'Pourquoi RCU convient-il aux données très lues et peu modifiées ?',
                    'choices' => [
                        ['choice_text' => 'Il réduit le coût des lectures en différant certains traitements de mise à jour', 'is_correct' => true],
                        ['choice_text' => 'Il interdit les lectures concurrentes', 'is_correct' => false],
                        ['choice_text' => 'Il remplace le filesystem', 'is_correct' => false],
                        ['choice_text' => 'Il exige un seul CPU', 'is_correct' => false]
                    ],
                    'explanation' => 'RCU offre des chemins de lecture rapides au prix d\'une gestion spécifique de la durée de vie et des mises à jour.',
                ],
                [
                    'question' => 'Que risque un compteur partagé incrémenté sans atomicité ?',
                    'choices' => [
                        ['choice_text' => 'Des incréments peuvent être perdus', 'is_correct' => true],
                        ['choice_text' => 'Le compteur double toujours', 'is_correct' => false],
                        ['choice_text' => 'Le noyau se formate', 'is_correct' => false],
                        ['choice_text' => 'Le scheduler s\'arrête', 'is_correct' => false]
                    ],
                    'explanation' => 'Deux threads peuvent lire la même ancienne valeur et écrire le même résultat, ce qui perd un incrément.',
                ]
            ],
        ],
        [
            'title' => 'Sécurité d\'architecture',
            'description' => 'Sandboxing, measured boot, Secure Boot et moindre privilège.',
            'difficulty' => 'Advanced',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi un sandbox n\'est-il pas une garantie absolue ?',
                    'choices' => [
                        ['choice_text' => 'Une faille du mécanisme d\'isolation peut permettre un contournement', 'is_correct' => true],
                        ['choice_text' => 'Un sandbox empêche toujours toute exécution', 'is_correct' => false],
                        ['choice_text' => 'Il remplace TLS', 'is_correct' => false],
                        ['choice_text' => 'Il n\'existe que dans les navigateurs', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'isolation dépend du kernel, de la configuration et de la surface accessible ; une vulnérabilité peut réduire la frontière de sécurité.',
                ],
                [
                    'question' => 'Quel est l\'objectif d\'une measured boot ?',
                    'choices' => [
                        ['choice_text' => 'Enregistrer des mesures cryptographiques des composants démarrés', 'is_correct' => true],
                        ['choice_text' => 'Bloquer tout firmware', 'is_correct' => false],
                        ['choice_text' => 'Accélérer le boot uniquement', 'is_correct' => false],
                        ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false]
                    ],
                    'explanation' => 'Measured boot conserve des mesures permettant de vérifier ou attester l\'état de la chaîne d\'amorçage.',
                ],
                [
                    'question' => 'Quelle différence existe entre Secure Boot et measured boot ?',
                    'choices' => [
                        ['choice_text' => 'Secure Boot vérifie l\'autorisation des composants, measured boot mesure ce qui a été chargé', 'is_correct' => true],
                        ['choice_text' => 'Ils sont exactement identiques', 'is_correct' => false],
                        ['choice_text' => 'Measured boot chiffre toujours le disque', 'is_correct' => false],
                        ['choice_text' => 'Secure Boot désactive le firmware', 'is_correct' => false]
                    ],
                    'explanation' => 'Secure Boot vise l\'autorisation de démarrage ; measured boot fournit des mesures pouvant être utilisées pour l\'attestation.',
                ],
                [
                    'question' => 'Pourquoi réduire les syscalls accessibles à une sandbox ?',
                    'choices' => [
                        ['choice_text' => 'Réduire la surface du kernel exposée à un processus', 'is_correct' => true],
                        ['choice_text' => 'Accélérer toute application', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les drivers', 'is_correct' => false],
                        ['choice_text' => 'Empêcher tout réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Un ensemble de syscalls minimal limite les primitives kernel qu\'un code compromis peut tenter d\'exploiter.',
                ],
                [
                    'question' => 'Quel objectif poursuit la randomisation des bibliothèques ?',
                    'choices' => [
                        ['choice_text' => 'Rendre leurs adresses moins prévisibles', 'is_correct' => true],
                        ['choice_text' => 'Réduire leur taille', 'is_correct' => false],
                        ['choice_text' => 'Empêcher leur chargement', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer leurs symboles', 'is_correct' => false]
                    ],
                    'explanation' => 'La randomisation complique les attaques qui dépendent d\'adresses mémoire connues.',
                ],
                [
                    'question' => 'Pourquoi les secure defaults sont-ils importants ?',
                    'choices' => [
                        ['choice_text' => 'Réduire l\'exposition initiale d\'un système non encore personnalisé', 'is_correct' => true],
                        ['choice_text' => 'Empêcher les mises à jour', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                        ['choice_text' => 'Désactiver tous les comptes', 'is_correct' => false]
                    ],
                    'explanation' => 'Des réglages sûrs par défaut réduisent le nombre d\'étapes indispensables avant d\'obtenir un niveau de sécurité acceptable.',
                ],
                [
                    'question' => 'Quel risque existe si un binaire privilégié est modifiable par un utilisateur non privilégié ?',
                    'choices' => [
                        ['choice_text' => 'L\'utilisateur peut modifier du code qui sera ensuite exécuté avec davantage de privilèges', 'is_correct' => true],
                        ['choice_text' => 'Le CPU devient plus lent', 'is_correct' => false],
                        ['choice_text' => 'Le DNS est automatiquement compromis', 'is_correct' => false],
                        ['choice_text' => 'La RAM double', 'is_correct' => false]
                    ],
                    'explanation' => 'La modification d\'un composant privilégié peut fournir un chemin direct vers l\'exécution de code avec ses privilèges.',
                ],
                [
                    'question' => 'Pourquoi limiter les capabilities d\'un conteneur ?',
                    'choices' => [
                        ['choice_text' => 'Éviter de lui donner des pouvoirs kernel inutiles', 'is_correct' => true],
                        ['choice_text' => 'Augmenter sa taille', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les namespaces', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le runtime', 'is_correct' => false]
                    ],
                    'explanation' => 'Certaines capabilities donnent des opérations sensibles ; leur réduction renforce l\'isolation et le moindre privilège.',
                ],
                [
                    'question' => 'Quel mécanisme protège principalement contre un bootloader modifié non approuvé ?',
                    'choices' => [
                        ['choice_text' => 'La chaîne de confiance de Secure Boot', 'is_correct' => true],
                        ['choice_text' => 'La rotation des logs', 'is_correct' => false],
                        ['choice_text' => 'Le swap', 'is_correct' => false],
                        ['choice_text' => 'Le DNS local', 'is_correct' => false]
                    ],
                    'explanation' => 'Secure Boot vérifie cryptographiquement les signatures des composants autorisés à participer au démarrage.',
                ],
                [
                    'question' => 'Pourquoi prévoir un accès break-glass séparé ?',
                    'choices' => [
                        ['choice_text' => 'Permettre la récupération tout en conservant des contrôles et un audit spécifiques', 'is_correct' => true],
                        ['choice_text' => 'Donner root à tous', 'is_correct' => false],
                        ['choice_text' => 'Désactiver MFA', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false]
                    ],
                    'explanation' => 'Le canal de secours doit être limité et audité afin de rester disponible sans devenir un accès administrateur permanent.',
                ]
            ],
        ],
        [
            'title' => 'Virtualisation avancée',
            'description' => 'Overcommit, ballooning, SR-IOV, migration et anti-affinity.',
            'difficulty' => 'Advanced',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Que mesure le CPU ready time d\'une VM ?',
                    'choices' => [
                        ['choice_text' => 'Le temps où elle est prête mais attend du CPU physique', 'is_correct' => true],
                        ['choice_text' => 'Le temps d\'attente disque', 'is_correct' => false],
                        ['choice_text' => 'La RAM libre', 'is_correct' => false],
                        ['choice_text' => 'Le trafic réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Un ready time élevé signale que les vCPU sont planifiées avec retard à cause d\'une contention de l\'hôte.',
                ],
                [
                    'question' => 'Quel risque crée une surallocation mémoire excessive ?',
                    'choices' => [
                        ['choice_text' => 'Du ballooning ou swapping avec forte dégradation', 'is_correct' => true],
                        ['choice_text' => 'Une augmentation automatique de la RAM', 'is_correct' => false],
                        ['choice_text' => 'Une amélioration certaine', 'is_correct' => false],
                        ['choice_text' => 'Une suppression du réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'hyperviseur doit récupérer de la mémoire, parfois via des mécanismes coûteux qui augmentent la latence.',
                ],
                [
                    'question' => 'Pourquoi le ballooning peut-il être préférable au swap hôte ?',
                    'choices' => [
                        ['choice_text' => 'Le guest peut restituer de la mémoire de façon coordonnée', 'is_correct' => true],
                        ['choice_text' => 'Il supprime toutes les allocations', 'is_correct' => false],
                        ['choice_text' => 'Il remplace la RAM par SSD', 'is_correct' => false],
                        ['choice_text' => 'Il désactive la VM', 'is_correct' => false]
                    ],
                    'explanation' => 'Le driver balloon coopère avec le guest afin de récupérer des pages qui peuvent être libérées de manière plus contrôlée.',
                ],
                [
                    'question' => 'Quel avantage principal apporte SR-IOV ?',
                    'choices' => [
                        ['choice_text' => 'Réduire le coût de virtualisation des I/O en exposant des fonctions virtuelles du matériel', 'is_correct' => true],
                        ['choice_text' => 'Remplacer TCP', 'is_correct' => false],
                        ['choice_text' => 'Créer des snapshots', 'is_correct' => false],
                        ['choice_text' => 'Gérer les permissions Unix', 'is_correct' => false]
                    ],
                    'explanation' => 'SR-IOV permet à certaines VMs d\'accéder à des Virtual Functions avec un chemin d\'I/O plus direct.',
                ],
                [
                    'question' => 'Pourquoi une VM très active en écriture peut-elle compliquer une migration live ?',
                    'choices' => [
                        ['choice_text' => 'Des pages modifiées doivent être recopiées pendant la phase de pré-copie', 'is_correct' => true],
                        ['choice_text' => 'La VM n\'utilise plus le CPU', 'is_correct' => false],
                        ['choice_text' => 'Son disque devient vide', 'is_correct' => false],
                        ['choice_text' => 'Le réseau est interrompu pendant des heures', 'is_correct' => false]
                    ],
                    'explanation' => 'Si les pages changent plus vite qu\'elles ne sont copiées, la migration a du mal à converger avant le basculement.',
                ],
                [
                    'question' => 'Pourquoi le passthrough de périphérique peut-il limiter la migration ?',
                    'choices' => [
                        ['choice_text' => 'La VM dépend directement d\'un périphérique attaché à un hôte', 'is_correct' => true],
                        ['choice_text' => 'Le périphérique n\'utilise jamais le matériel', 'is_correct' => false],
                        ['choice_text' => 'Il supprime les drivers', 'is_correct' => false],
                        ['choice_text' => 'Il rend les snapshots universels', 'is_correct' => false]
                    ],
                    'explanation' => 'Un périphérique physique attaché à un hôte particulier n\'est pas forcément disponible sur l\'hôte cible.',
                ],
                [
                    'question' => 'Quel est le risque d\'un hyperviseur compromis ?',
                    'choices' => [
                        ['choice_text' => 'La compromission peut affecter la frontière de plusieurs VMs', 'is_correct' => true],
                        ['choice_text' => 'Une seule application reste toujours indépendante', 'is_correct' => false],
                        ['choice_text' => 'Toutes les VMs sont automatiquement chiffrées', 'is_correct' => false],
                        ['choice_text' => 'Le réseau devient sûr', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'hyperviseur est une racine de confiance ; une vulnérabilité critique peut élargir fortement le blast radius.',
                ],
                [
                    'question' => 'Pourquoi séparer les réseaux de management, stockage et production ?',
                    'choices' => [
                        ['choice_text' => 'Réduire l\'exposition et les interactions entre flux', 'is_correct' => true],
                        ['choice_text' => 'Empêcher la haute disponibilité', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'Augmenter la consommation CPU', 'is_correct' => false]
                    ],
                    'explanation' => 'Des plans séparés facilitent la sécurité, le contrôle de bande passante et l\'isolation des pannes.',
                ],
                [
                    'question' => 'Quel compromis existe avec l\'oversubscription CPU ?',
                    'choices' => [
                        ['choice_text' => 'Elle améliore l\'utilisation moyenne mais peut augmenter la latence sous forte charge', 'is_correct' => true],
                        ['choice_text' => 'Elle ajoute des cœurs physiques', 'is_correct' => false],
                        ['choice_text' => 'Elle garantit un temps de réponse nul', 'is_correct' => false],
                        ['choice_text' => 'Elle supprime le scheduling', 'is_correct' => false]
                    ],
                    'explanation' => 'La surallocation fonctionne si les charges ne culminent pas ensemble, mais elle réduit la marge lorsque les VMs deviennent simultanément actives.',
                ],
                [
                    'question' => 'Pourquoi utiliser des règles anti-affinity ?',
                    'choices' => [
                        ['choice_text' => 'Séparer des réplicas pour éviter un domaine de panne commun', 'is_correct' => true],
                        ['choice_text' => 'Augmenter toujours la performance', 'is_correct' => false],
                        ['choice_text' => 'Désactiver les migrations', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les snapshots', 'is_correct' => false]
                    ],
                    'explanation' => 'Placer des instances redondantes sur des hôtes distincts réduit le risque de perte simultanée lors d\'une panne d\'hôte.',
                ]
            ],
        ],
        [
            'title' => 'Noyau et débogage',
            'description' => 'Crash kernel, drivers, tracing, symboles et déploiement progressif.',
            'difficulty' => 'Advanced',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi un crash kernel nécessite-t-il parfois un dump mémoire ?',
                    'choices' => [
                        ['choice_text' => 'Pour analyser l\'état du kernel au moment du crash', 'is_correct' => true],
                        ['choice_text' => 'Les logs applicatifs contiennent toujours tout', 'is_correct' => false],
                        ['choice_text' => 'Un crash kernel ne laisse jamais d\'état', 'is_correct' => false],
                        ['choice_text' => 'Le dump sert uniquement au réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Un dump conserve registres, piles et structures utiles qui peuvent manquer dans les logs de haut niveau.',
                ],
                [
                    'question' => 'Quel indice rend un bug de driver plausible ?',
                    'choices' => [
                        ['choice_text' => 'La panne apparaît après l\'introduction d\'un nouveau matériel ou module', 'is_correct' => true],
                        ['choice_text' => 'Une faute dans un document', 'is_correct' => false],
                        ['choice_text' => 'Une lenteur DNS sans changement', 'is_correct' => false],
                        ['choice_text' => 'Une erreur d\'orthographe', 'is_correct' => false]
                    ],
                    'explanation' => 'La corrélation avec un driver ou matériel nouveau est un signal fort, même si elle doit être confirmée par des tests.',
                ],
                [
                    'question' => 'Pourquoi planifier une mise à jour de kernel sur un cluster critique ?',
                    'choices' => [
                        ['choice_text' => 'Le nouveau kernel peut modifier drivers, comportement et stabilité', 'is_correct' => true],
                        ['choice_text' => 'Les kernels ne peuvent jamais être mis à jour', 'is_correct' => false],
                        ['choice_text' => 'Un reboot est impossible', 'is_correct' => false],
                        ['choice_text' => 'Les applications sont supprimées', 'is_correct' => false]
                    ],
                    'explanation' => 'Le kernel est une couche fondamentale ; validation, rollout progressif et rollback réduisent le risque.',
                ],
                [
                    'question' => 'Quels mécanismes permettent d\'observer des chemins kernel sans réécrire massivement l\'application ?',
                    'choices' => [
                        ['choice_text' => 'eBPF, ftrace ou perf selon le besoin', 'is_correct' => true],
                        ['choice_text' => 'Un tableur', 'is_correct' => false],
                        ['choice_text' => 'DNS', 'is_correct' => false],
                        ['choice_text' => 'RAID', 'is_correct' => false]
                    ],
                    'explanation' => 'Ces outils offrent différentes formes de tracing et profilage du noyau et des processus.',
                ],
                [
                    'question' => 'Pourquoi les symboles de débogage sont-ils précieux ?',
                    'choices' => [
                        ['choice_text' => 'Ils permettent de relier des adresses à des fonctions et structures', 'is_correct' => true],
                        ['choice_text' => 'Ils chiffrent le dump', 'is_correct' => false],
                        ['choice_text' => 'Ils réduisent la RAM', 'is_correct' => false],
                        ['choice_text' => 'Ils remplacent les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'Les symboles rendent les backtraces et offsets compréhensibles pendant l\'analyse.',
                ],
                [
                    'question' => 'Quel risque existe avec un module kernel tiers non validé ?',
                    'choices' => [
                        ['choice_text' => 'Il peut provoquer des crashes ou élargir la surface de confiance du kernel', 'is_correct' => true],
                        ['choice_text' => 'Il touche uniquement l\'interface graphique', 'is_correct' => false],
                        ['choice_text' => 'Il est toujours isolé', 'is_correct' => false],
                        ['choice_text' => 'Il n\'a aucun privilège', 'is_correct' => false]
                    ],
                    'explanation' => 'Un module kernel s\'exécute dans un contexte privilégié et peut affecter toute la machine.',
                ],
                [
                    'question' => 'Pourquoi reproduire un bug avec un cas minimal ?',
                    'choices' => [
                        ['choice_text' => 'Réduire les variables et isoler la cause', 'is_correct' => true],
                        ['choice_text' => 'Augmenter la complexité', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les différences de matériel', 'is_correct' => false],
                        ['choice_text' => 'Rendre les logs inutiles', 'is_correct' => false]
                    ],
                    'explanation' => 'Un reproducer minimal accélère l\'identification du chemin fautif et facilite la validation du correctif.',
                ],
                [
                    'question' => 'Quel signal peut indiquer une fuite mémoire du kernel ?',
                    'choices' => [
                        ['choice_text' => 'Une croissance persistante de la mémoire noyau', 'is_correct' => true],
                        ['choice_text' => 'Un nombre stable de processus', 'is_correct' => false],
                        ['choice_text' => 'Une latence DNS ponctuelle', 'is_correct' => false],
                        ['choice_text' => 'Un CPU à 0 %', 'is_correct' => false]
                    ],
                    'explanation' => 'Une croissance attribuable au kernel qui ne se résorbe pas avec la fin de la charge peut révéler une fuite ou une rétention excessive.',
                ],
                [
                    'question' => 'Pourquoi vérifier le firmware lors d\'un incident noyau ?',
                    'choices' => [
                        ['choice_text' => 'Il peut changer les tables matérielles, ACPI ou le comportement des périphériques', 'is_correct' => true],
                        ['choice_text' => 'Le firmware n\'a aucun rôle', 'is_correct' => false],
                        ['choice_text' => 'Le matériel ne change jamais', 'is_correct' => false],
                        ['choice_text' => 'Les incidents sont toujours applicatifs', 'is_correct' => false]
                    ],
                    'explanation' => 'Le firmware influence les interfaces vues par le kernel et le comportement de nombreux drivers.',
                ],
                [
                    'question' => 'Quelle stratégie réduit le risque lors d\'un nouveau kernel ?',
                    'choices' => [
                        ['choice_text' => 'Canary sur un sous-ensemble avec métriques et rollback', 'is_correct' => true],
                        ['choice_text' => 'Redémarrage simultané de toute la flotte', 'is_correct' => false],
                        ['choice_text' => 'Suppression de l\'ancien kernel', 'is_correct' => false],
                        ['choice_text' => 'Désactivation des alertes', 'is_correct' => false]
                    ],
                    'explanation' => 'Un déploiement progressif permet d\'observer les régressions sur un périmètre réduit et de conserver une voie de retour.',
                ]
            ],
        ],
        [
            'title' => 'Haute disponibilité',
            'description' => 'Quorum, fencing, failover, RPO et mode dégradé.',
            'difficulty' => 'Advanced',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi un cluster actif-actif peut-il reprendre plus vite ?',
                    'choices' => [
                        ['choice_text' => 'Plusieurs nœuds servent déjà du trafic et peuvent continuer après une panne partielle', 'is_correct' => true],
                        ['choice_text' => 'Il n\'a jamais besoin de quorum', 'is_correct' => false],
                        ['choice_text' => 'Il supprime la réplication', 'is_correct' => false],
                        ['choice_text' => 'Il n\'a aucun coût réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Une partie de la capacité est déjà active et peut absorber une partie de la charge après la perte d\'un nœud.',
                ],
                [
                    'question' => 'Quel est l\'objectif du fencing ?',
                    'choices' => [
                        ['choice_text' => 'Empêcher un nœud isolé d\'accéder aux ressources partagées', 'is_correct' => true],
                        ['choice_text' => 'Augmenter le cache CPU', 'is_correct' => false],
                        ['choice_text' => 'Remplacer les backups', 'is_correct' => false],
                        ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false]
                    ],
                    'explanation' => 'Le fencing protège l\'intégrité en retirant réellement l\'accès à un nœud qui pourrait encore écrire.',
                ],
                [
                    'question' => 'Pourquoi le quorum est-il utile ?',
                    'choices' => [
                        ['choice_text' => 'Choisir quelle partition du cluster peut continuer à agir', 'is_correct' => true],
                        ['choice_text' => 'Accélérer les SSD', 'is_correct' => false],
                        ['choice_text' => 'Augmenter la RAM', 'is_correct' => false],
                        ['choice_text' => 'Éviter tout réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Le quorum évite que plusieurs partitions croient chacune être l\'autorité légitime sur une ressource.',
                ],
                [
                    'question' => 'Quel scénario est un split-brain ?',
                    'choices' => [
                        ['choice_text' => 'Deux partitions se croient toutes deux primaires et écrivent', 'is_correct' => true],
                        ['choice_text' => 'Un serveur est simplement arrêté', 'is_correct' => false],
                        ['choice_text' => 'Le disque est plein', 'is_correct' => false],
                        ['choice_text' => 'DNS répond en IPv6', 'is_correct' => false]
                    ],
                    'explanation' => 'Le split-brain crée deux autorités concurrentes qui peuvent produire des écritures contradictoires.',
                ],
                [
                    'question' => 'Pourquoi une health probe applicative vaut-elle mieux qu\'un simple check de PID ?',
                    'choices' => [
                        ['choice_text' => 'Un processus vivant peut être bloqué ou fonctionnellement défaillant', 'is_correct' => true],
                        ['choice_text' => 'Un PID n\'existe jamais', 'is_correct' => false],
                        ['choice_text' => 'Les probes empêchent toutes les pannes', 'is_correct' => false],
                        ['choice_text' => 'Le PID teste toujours la logique métier', 'is_correct' => false]
                    ],
                    'explanation' => 'Un processus peut conserver son PID tout en étant incapable de servir correctement ses requêtes.',
                ],
                [
                    'question' => 'Quel compromis accompagne un RPO très faible ?',
                    'choices' => [
                        ['choice_text' => 'Il exige souvent plus de synchronisation, de trafic ou de coût', 'is_correct' => true],
                        ['choice_text' => 'Il nécessite moins de réplication', 'is_correct' => false],
                        ['choice_text' => 'RPO désigne le temps CPU', 'is_correct' => false],
                        ['choice_text' => 'RPO est indépendant des backups', 'is_correct' => false]
                    ],
                    'explanation' => 'Un RPO faible signifie accepter très peu de perte de données et demande donc une réplication plus rapprochée ou synchrone selon le cas.',
                ],
                [
                    'question' => 'Pourquoi tester régulièrement un failover ?',
                    'choices' => [
                        ['choice_text' => 'Une procédure non exercée peut échouer sur un détail opérationnel', 'is_correct' => true],
                        ['choice_text' => 'Le failover fonctionne toujours', 'is_correct' => false],
                        ['choice_text' => 'Les tests sont inutiles', 'is_correct' => false],
                        ['choice_text' => 'Ils remplacent les backups', 'is_correct' => false]
                    ],
                    'explanation' => 'Les exercices révèlent les problèmes de dépendances, de permissions, de temps de reprise et de procédures.',
                ],
                [
                    'question' => 'Quel est le rôle d\'un watchdog ?',
                    'choices' => [
                        ['choice_text' => 'Déclencher une récupération si un système ou service ne répond plus comme attendu', 'is_correct' => true],
                        ['choice_text' => 'Augmenter l\'espace disque', 'is_correct' => false],
                        ['choice_text' => 'Remplacer la réplication', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'Un watchdog peut redémarrer ou isoler un composant qui ne produit plus les signaux de santé attendus.',
                ],
                [
                    'question' => 'Pourquoi documenter les dépendances d\'un service critique ?',
                    'choices' => [
                        ['choice_text' => 'DNS, stockage, IAM et réseau peuvent tous devenir des causes de panne', 'is_correct' => true],
                        ['choice_text' => 'Les dépendances sont sans effet', 'is_correct' => false],
                        ['choice_text' => 'Les documents remplacent le monitoring', 'is_correct' => false],
                        ['choice_text' => 'Seul le CPU compte', 'is_correct' => false]
                    ],
                    'explanation' => 'La disponibilité d\'un service dépend de toute sa chaîne de dépendances, pas seulement de son processus principal.',
                ],
                [
                    'question' => 'Pourquoi un mode dégradé améliore-t-il la résilience ?',
                    'choices' => [
                        ['choice_text' => 'Il conserve une fonction essentielle malgré une dépendance indisponible', 'is_correct' => true],
                        ['choice_text' => 'Il garantit 100 % du trafic', 'is_correct' => false],
                        ['choice_text' => 'Il supprime toutes les erreurs', 'is_correct' => false],
                        ['choice_text' => 'Il remplace les backups', 'is_correct' => false]
                    ],
                    'explanation' => 'Accepter explicitement une capacité réduite peut maintenir le service critique pendant une panne partielle.',
                ]
            ],
        ],
        [
            'title' => 'Observabilité et incidents',
            'description' => 'Métriques, traces, SLO, runbooks et postmortems.',
            'difficulty' => 'Advanced',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi les métriques ne suffisent-elles pas toujours ?',
                    'choices' => [
                        ['choice_text' => 'Les logs et traces apportent contexte et parcours en plus des symptômes', 'is_correct' => true],
                        ['choice_text' => 'Les métriques sont toujours fausses', 'is_correct' => false],
                        ['choice_text' => 'Les logs ne servent jamais', 'is_correct' => false],
                        ['choice_text' => 'Les traces sont uniquement réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Les métriques indiquent souvent qu\'un problème existe ; logs et traces aident à comprendre où et pourquoi il se produit.',
                ],
                [
                    'question' => 'Pourquoi synchroniser précisément les horloges des serveurs ?',
                    'choices' => [
                        ['choice_text' => 'Faciliter la reconstruction de la chronologie d\'un incident distribué', 'is_correct' => true],
                        ['choice_text' => 'Augmenter le débit', 'is_correct' => false],
                        ['choice_text' => 'Réduire le stockage', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les timeouts', 'is_correct' => false]
                    ],
                    'explanation' => 'Des horodatages cohérents permettent de corréler les événements provenant de plusieurs hôtes.',
                ],
                [
                    'question' => 'Pourquoi utiliser p95 ou p99 pour la latence ?',
                    'choices' => [
                        ['choice_text' => 'Mesurer les requêtes lentes que la moyenne peut masquer', 'is_correct' => true],
                        ['choice_text' => 'Mesurer uniquement la RAM', 'is_correct' => false],
                        ['choice_text' => 'Remplacer les logs', 'is_correct' => false],
                        ['choice_text' => 'Mesurer les inodes', 'is_correct' => false]
                    ],
                    'explanation' => 'Les percentiles élevés décrivent l\'expérience de la partie la plus lente des requêtes.',
                ],
                [
                    'question' => 'Quel est l\'objectif principal d\'un SLO ?',
                    'choices' => [
                        ['choice_text' => 'Définir une cible mesurable de fiabilité ou de performance', 'is_correct' => true],
                        ['choice_text' => 'Définir la marque du serveur', 'is_correct' => false],
                        ['choice_text' => 'Remplacer les runbooks', 'is_correct' => false],
                        ['choice_text' => 'Garantir zéro incident', 'is_correct' => false]
                    ],
                    'explanation' => 'Un SLO fixe une cible opérationnelle mesurable qui guide les décisions de fiabilité et d\'exploitation.',
                ],
                [
                    'question' => 'Pourquoi exprimer le taux d\'erreur comme ratio des requêtes ?',
                    'choices' => [
                        ['choice_text' => 'Pour le comparer malgré des volumes de trafic différents', 'is_correct' => true],
                        ['choice_text' => 'Pour ignorer la charge', 'is_correct' => false],
                        ['choice_text' => 'Pour augmenter les erreurs', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'Le taux rapporté au trafic permet de distinguer croissance du volume et véritable dégradation.',
                ],
                [
                    'question' => 'À quoi sert un runbook ?',
                    'choices' => [
                        ['choice_text' => 'Décrire des procédures validées de diagnostic ou récupération', 'is_correct' => true],
                        ['choice_text' => 'Remplacer toute surveillance', 'is_correct' => false],
                        ['choice_text' => 'Empêcher les ingénieurs d\'agir', 'is_correct' => false],
                        ['choice_text' => 'Définir les IP publiques', 'is_correct' => false]
                    ],
                    'explanation' => 'Un runbook réduit les décisions improvisées pendant un incident et facilite des opérations reproductibles.',
                ],
                [
                    'question' => 'Pourquoi préserver les preuves avant de modifier un hôte compromis ?',
                    'choices' => [
                        ['choice_text' => 'Des actions peuvent effacer des artefacts utiles à l\'analyse', 'is_correct' => true],
                        ['choice_text' => 'Les preuves sont inutiles', 'is_correct' => false],
                        ['choice_text' => 'Les logs sont toujours immuables', 'is_correct' => false],
                        ['choice_text' => 'Un reboot conserve tout', 'is_correct' => false]
                    ],
                    'explanation' => 'Les processus et données volatiles peuvent disparaître après une action de remédiation ; la collecte doit donc être planifiée.',
                ],
                [
                    'question' => 'Quel signal annonce une saturation progressive ?',
                    'choices' => [
                        ['choice_text' => 'Une dérive des files d\'attente, latences ou taux de ressources', 'is_correct' => true],
                        ['choice_text' => 'Un seul log normal', 'is_correct' => false],
                        ['choice_text' => 'Une température stable', 'is_correct' => false],
                        ['choice_text' => 'Une version inchangée', 'is_correct' => false]
                    ],
                    'explanation' => 'Une tendance continue est souvent plus informative qu\'un seul instantané et permet d\'agir avant la panne.',
                ],
                [
                    'question' => 'Pourquoi mettre des garde-fous sur une remédiation automatique ?',
                    'choices' => [
                        ['choice_text' => 'Une action trop agressive peut amplifier l\'incident', 'is_correct' => true],
                        ['choice_text' => 'L\'automatisation est toujours parfaite', 'is_correct' => false],
                        ['choice_text' => 'Les alertes sont inutiles', 'is_correct' => false],
                        ['choice_text' => 'Les seuils n\'existent pas', 'is_correct' => false]
                    ],
                    'explanation' => 'Une automatisation doit avoir des conditions, limites et mécanismes d\'arrêt afin de ne pas transformer un incident en panne plus large.',
                ],
                [
                    'question' => 'Quel objectif poursuit une postmortem sans blâme ?',
                    'choices' => [
                        ['choice_text' => 'Réduire la probabilité ou l\'impact d\'un nouvel incident en améliorant le système', 'is_correct' => true],
                        ['choice_text' => 'Identifier une personne à sanctionner', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                        ['choice_text' => 'Éviter les actions correctives', 'is_correct' => false]
                    ],
                    'explanation' => 'La postmortem cherche les facteurs systémiques et les améliorations de conception, processus ou automatisation.',
                ]
            ],
        ]
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
                    'total_marks' => $quizData['total_marks'],
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
                ]
            );

            foreach ($quizData['qs'] as $index => $questionData) {
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
