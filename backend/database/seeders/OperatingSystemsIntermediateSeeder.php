<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OperatingSystemsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'operating-systems')->firstOrFail();

        $quizzes = [
        [
            'title' => 'Cycle de vie des processus',
            'description' => 'fork, exec, signaux, zombies et IPC.',
            'difficulty' => 'Intermediate',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Après fork(), que crée typiquement le processus parent ?',
                    'choices' => [
                        ['choice_text' => 'Un nouveau processus fils', 'is_correct' => true],
                        ['choice_text' => 'Un nouveau thread dans le noyau uniquement', 'is_correct' => false],
                        ['choice_text' => 'Un nouveau disque', 'is_correct' => false],
                        ['choice_text' => 'Une nouvelle interface réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'fork crée un nouveau processus qui possède initialement une copie logique de l\'espace d\'adressage du parent.',
                ],
                [
                    'question' => 'Que fait exec() lorsqu\'il réussit ?',
                    'choices' => [
                        ['choice_text' => 'Il remplace l\'image du processus par un nouveau programme', 'is_correct' => true],
                        ['choice_text' => 'Il crée toujours un second processus', 'is_correct' => false],
                        ['choice_text' => 'Il redémarre le noyau', 'is_correct' => false],
                        ['choice_text' => 'Il change automatiquement l\'utilisateur', 'is_correct' => false]
                    ],
                    'explanation' => 'exec remplace le code, les données et l\'environnement du processus appelant sans créer un nouveau PID.',
                ],
                [
                    'question' => 'Pourquoi un parent appelle-t-il wait() ?',
                    'choices' => [
                        ['choice_text' => 'Récupérer le statut d\'un fils terminé', 'is_correct' => true],
                        ['choice_text' => 'Modifier les permissions du fils', 'is_correct' => false],
                        ['choice_text' => 'Créer un fichier', 'is_correct' => false],
                        ['choice_text' => 'Changer le scheduler', 'is_correct' => false]
                    ],
                    'explanation' => 'wait récupère le statut de terminaison et permet au noyau de libérer l\'entrée de processus devenue inutile.',
                ],
                [
                    'question' => 'Qu\'est-ce qu\'un zombie ?',
                    'choices' => [
                        ['choice_text' => 'Un processus terminé dont le statut n\'a pas encore été récupéré', 'is_correct' => true],
                        ['choice_text' => 'Un processus en sommeil pendant une E/S', 'is_correct' => false],
                        ['choice_text' => 'Un processus sans PID', 'is_correct' => false],
                        ['choice_text' => 'Un service réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Un zombie a terminé mais conserve une petite entrée jusqu\'à ce que son parent récupère son statut.',
                ],
                [
                    'question' => 'Quel avantage offre un pipe anonyme ?',
                    'choices' => [
                        ['choice_text' => 'Transmettre un flux de données entre processus, souvent apparentés', 'is_correct' => true],
                        ['choice_text' => 'Partager directement le disque entre machines', 'is_correct' => false],
                        ['choice_text' => 'Créer un tunnel TLS', 'is_correct' => false],
                        ['choice_text' => 'Monter un volume réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Le pipe est un mécanisme IPC simple, fréquent dans les pipelines shell et entre parent et enfant.',
                ],
                [
                    'question' => 'Quand privilégier une mémoire partagée pour l\'IPC ?',
                    'choices' => [
                        ['choice_text' => 'Pour échanger rapidement de gros volumes de données entre processus coopérants', 'is_correct' => true],
                        ['choice_text' => 'Pour communiquer avec un serveur distant', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer DNS', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter toute synchronisation', 'is_correct' => false]
                    ],
                    'explanation' => 'La mémoire partagée limite les copies, mais les processus doivent synchroniser correctement les accès.',
                ],
                [
                    'question' => 'Quel signal demande généralement une terminaison propre ?',
                    'choices' => [
                        ['choice_text' => 'SIGTERM', 'is_correct' => true],
                        ['choice_text' => 'SIGKILL', 'is_correct' => false],
                        ['choice_text' => 'SIGSTOP', 'is_correct' => false],
                        ['choice_text' => 'SIGBUS2', 'is_correct' => false]
                    ],
                    'explanation' => 'SIGTERM laisse au processus la possibilité de fermer ses ressources et d\'effectuer son nettoyage.',
                ],
                [
                    'question' => 'Pourquoi SIGKILL n\'est-il pas privilégié pour un arrêt normal ?',
                    'choices' => [
                        ['choice_text' => 'Le processus ne peut pas exécuter son nettoyage', 'is_correct' => true],
                        ['choice_text' => 'Il ne fonctionne pas sous Linux', 'is_correct' => false],
                        ['choice_text' => 'Il redémarre le service', 'is_correct' => false],
                        ['choice_text' => 'Il modifie le disque', 'is_correct' => false]
                    ],
                    'explanation' => 'SIGKILL force la terminaison immédiate et ne permet pas au code utilisateur d\'effectuer sa routine d\'arrêt.',
                ],
                [
                    'question' => 'Pourquoi un parent peut-il recevoir SIGCHLD ?',
                    'choices' => [
                        ['choice_text' => 'Pour être averti d\'un changement d\'état d\'un fils', 'is_correct' => true],
                        ['choice_text' => 'Pour signaler une panne DNS', 'is_correct' => false],
                        ['choice_text' => 'Pour demander un mot de passe', 'is_correct' => false],
                        ['choice_text' => 'Pour changer la mémoire physique', 'is_correct' => false]
                    ],
                    'explanation' => 'SIGCHLD permet au parent de réagir à la terminaison ou à certains changements d\'état de ses fils.',
                ],
                [
                    'question' => 'Quel problème peut provoquer une accumulation de zombies ?',
                    'choices' => [
                        ['choice_text' => 'L\'épuisement des entrées disponibles dans la table des processus', 'is_correct' => true],
                        ['choice_text' => 'La corruption automatique du disque', 'is_correct' => false],
                        ['choice_text' => 'Une baisse de la fréquence CPU', 'is_correct' => false],
                        ['choice_text' => 'Une perte de toutes les permissions', 'is_correct' => false]
                    ],
                    'explanation' => 'Chaque zombie conserve une entrée de processus ; une accumulation massive peut empêcher la création de nouveaux processus.',
                ]
            ],
        ],
        [
            'title' => 'Ordonnancement pratique',
            'description' => 'Priorités, temps de réponse, starvation et multicœur.',
            'difficulty' => 'Intermediate',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Que provoque un quantum Round Robin trop grand sur une charge interactive ?',
                    'choices' => [
                        ['choice_text' => 'Une réactivité moindre pour les autres tâches', 'is_correct' => true],
                        ['choice_text' => 'Une suppression de toute préemption', 'is_correct' => false],
                        ['choice_text' => 'Une augmentation des cœurs', 'is_correct' => false],
                        ['choice_text' => 'Une diminution automatique de la RAM', 'is_correct' => false]
                    ],
                    'explanation' => 'Un quantum trop grand rapproche Round Robin d\'un traitement long monopolistique et augmente le délai avant le prochain service.',
                ],
                [
                    'question' => 'Quel est le risque d\'une priorité fixe sans aging ?',
                    'choices' => [
                        ['choice_text' => 'La famine des tâches de faible priorité', 'is_correct' => true],
                        ['choice_text' => 'Le formatage du disque', 'is_correct' => false],
                        ['choice_text' => 'Un deadlock matériel obligatoire', 'is_correct' => false],
                        ['choice_text' => 'La perte du réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Une tâche peut attendre indéfiniment si des tâches prioritaires restent continuellement prêtes.',
                ],
                [
                    'question' => 'Quel mécanisme réduit la starvation d\'une tâche ancienne ?',
                    'choices' => [
                        ['choice_text' => 'L\'aging', 'is_correct' => true],
                        ['choice_text' => 'La désactivation des interruptions', 'is_correct' => false],
                        ['choice_text' => 'Le swap forcé', 'is_correct' => false],
                        ['choice_text' => 'Le chiffrement du scheduler', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'aging augmente progressivement la priorité effective d\'une tâche qui attend trop longtemps.',
                ],
                [
                    'question' => 'Que mesure le turnaround time ?',
                    'choices' => [
                        ['choice_text' => 'Le temps entre l\'arrivée et la fin du processus', 'is_correct' => true],
                        ['choice_text' => 'Uniquement son temps CPU', 'is_correct' => false],
                        ['choice_text' => 'Uniquement son temps d\'E/S', 'is_correct' => false],
                        ['choice_text' => 'Le temps de boot du serveur', 'is_correct' => false]
                    ],
                    'explanation' => 'Le turnaround inclut exécution, attentes et blocages depuis l\'arrivée jusqu\'à la terminaison.',
                ],
                [
                    'question' => 'Quelle métrique est particulièrement importante pour une application interactive ?',
                    'choices' => [
                        ['choice_text' => 'Le temps de réponse', 'is_correct' => true],
                        ['choice_text' => 'La taille du journal kernel', 'is_correct' => false],
                        ['choice_text' => 'Le nombre d\'inodes', 'is_correct' => false],
                        ['choice_text' => 'La version du BIOS', 'is_correct' => false]
                    ],
                    'explanation' => 'Le temps de réponse mesure rapidement la satisfaction d\'une requête, ce qui est central pour l\'interactivité.',
                ],
                [
                    'question' => 'Pourquoi une forte contention sur un lock nuit-elle aux performances ?',
                    'choices' => [
                        ['choice_text' => 'Des threads restent en attente et le parallélisme diminue', 'is_correct' => true],
                        ['choice_text' => 'Le CPU devient automatiquement plus rapide', 'is_correct' => false],
                        ['choice_text' => 'Les caches deviennent plus grands', 'is_correct' => false],
                        ['choice_text' => 'Le réseau est coupé', 'is_correct' => false]
                    ],
                    'explanation' => 'Un verrou très disputé transforme souvent une section critique en goulot d\'étranglement.',
                ],
                [
                    'question' => 'Quelle possibilité apporte une machine multicœur ?',
                    'choices' => [
                        ['choice_text' => 'Plusieurs threads indépendantes peuvent s\'exécuter simultanément', 'is_correct' => true],
                        ['choice_text' => 'Le scheduler devient inutile', 'is_correct' => false],
                        ['choice_text' => 'La mémoire virtuelle disparaît', 'is_correct' => false],
                        ['choice_text' => 'Un seul processus peut fonctionner', 'is_correct' => false]
                    ],
                    'explanation' => 'Plusieurs cœurs permettent le parallélisme réel lorsque les tâches sont indépendantes et disposent des ressources nécessaires.',
                ],
                [
                    'question' => 'Pourquoi les tâches temps réel ont-elles des politiques spécifiques ?',
                    'choices' => [
                        ['choice_text' => 'Elles doivent respecter des contraintes temporelles plus strictes', 'is_correct' => true],
                        ['choice_text' => 'Elles n\'utilisent jamais le CPU', 'is_correct' => false],
                        ['choice_text' => 'Elles ne sont jamais préemptées', 'is_correct' => false],
                        ['choice_text' => 'Elles sont toujours interactives', 'is_correct' => false]
                    ],
                    'explanation' => 'La bonne décision d\'ordonnancement se mesure notamment à la capacité à respecter les échéances et latences attendues.',
                ],
                [
                    'question' => 'Quel compromis existe avec un changement de contexte très fréquent ?',
                    'choices' => [
                        ['choice_text' => 'La réactivité augmente potentiellement mais le coût d\'ordonnancement aussi', 'is_correct' => true],
                        ['choice_text' => 'Le CPU disparaît', 'is_correct' => false],
                        ['choice_text' => 'Le disque devient plus rapide', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de processus est réduit', 'is_correct' => false]
                    ],
                    'explanation' => 'Des changements fréquents améliorent le partage mais consomment du temps CPU et peuvent perturber les caches.',
                ],
                [
                    'question' => 'Pourquoi mesurer p95 ou p99 au lieu de la seule moyenne ?',
                    'choices' => [
                        ['choice_text' => 'Pour voir les requêtes lentes que la moyenne peut masquer', 'is_correct' => true],
                        ['choice_text' => 'Pour mesurer uniquement la RAM', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer les logs', 'is_correct' => false],
                        ['choice_text' => 'Pour calculer les inodes', 'is_correct' => false]
                    ],
                    'explanation' => 'Les percentiles élevés décrivent les cas de queue de distribution et sont utiles pour juger la latence réelle des utilisateurs.',
                ]
            ],
        ],
        [
            'title' => 'Systèmes de fichiers et stockage',
            'description' => 'Quotas, inodes, RAID, snapshots et diagnostic du stockage.',
            'difficulty' => 'Intermediate',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi utiliser des quotas de stockage ?',
                    'choices' => [
                        ['choice_text' => 'Limiter l\'espace consommé par un utilisateur ou un groupe', 'is_correct' => true],
                        ['choice_text' => 'Augmenter la bande passante', 'is_correct' => false],
                        ['choice_text' => 'Créer du RAID automatiquement', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le journaling', 'is_correct' => false]
                    ],
                    'explanation' => 'Les quotas empêchent une identité ou un groupe d\'épuiser la capacité globale.',
                ],
                [
                    'question' => 'Quel est le rôle d\'un inode sous Unix ?',
                    'choices' => [
                        ['choice_text' => 'Porter les métadonnées et références vers les blocs d\'un fichier', 'is_correct' => true],
                        ['choice_text' => 'Conserver le nom DNS', 'is_correct' => false],
                        ['choice_text' => 'Stocker toujours toutes les données', 'is_correct' => false],
                        ['choice_text' => 'Représenter un thread', 'is_correct' => false]
                    ],
                    'explanation' => 'Le nom est généralement dans le répertoire ; l\'inode contient taille, permissions, propriétaires et références de données.',
                ],
                [
                    'question' => 'Que peut se passer si les inodes sont épuisés alors qu\'il reste des blocs libres ?',
                    'choices' => [
                        ['choice_text' => 'La création de nouveaux fichiers peut échouer', 'is_correct' => true],
                        ['choice_text' => 'Le CPU s\'arrête', 'is_correct' => false],
                        ['choice_text' => 'Le volume devient automatiquement RAID', 'is_correct' => false],
                        ['choice_text' => 'Tous les fichiers sont supprimés', 'is_correct' => false]
                    ],
                    'explanation' => 'Les inodes constituent une ressource distincte de l\'espace de données et peuvent être épuisés en premier.',
                ],
                [
                    'question' => 'Pourquoi monter un volume en lecture seule pendant une analyse ?',
                    'choices' => [
                        ['choice_text' => 'Réduire le risque d\'aggraver une corruption', 'is_correct' => true],
                        ['choice_text' => 'Accélérer les écritures', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les journaux', 'is_correct' => false],
                        ['choice_text' => 'Convertir le volume en RAM', 'is_correct' => false]
                    ],
                    'explanation' => 'Le read-only protège le contenu contre des écritures involontaires pendant certaines opérations de récupération.',
                ],
                [
                    'question' => 'Quelle propriété caractérise RAID 1 ?',
                    'choices' => [
                        ['choice_text' => 'Le mirroring des données', 'is_correct' => true],
                        ['choice_text' => 'La parité distribuée sans copie', 'is_correct' => false],
                        ['choice_text' => 'La concaténation sans redondance', 'is_correct' => false],
                        ['choice_text' => 'L\'absence de disque', 'is_correct' => false]
                    ],
                    'explanation' => 'RAID 1 écrit une copie sur plusieurs disques et tolère généralement la perte d\'un membre du miroir.',
                ],
                [
                    'question' => 'Pourquoi RAID ne remplace-t-il pas une sauvegarde ?',
                    'choices' => [
                        ['choice_text' => 'Une suppression ou corruption peut être répliquée sur les membres du RAID', 'is_correct' => true],
                        ['choice_text' => 'RAID n\'a aucune redondance', 'is_correct' => false],
                        ['choice_text' => 'RAID ne stocke pas de données', 'is_correct' => false],
                        ['choice_text' => 'Une sauvegarde ne peut exister que sur RAM', 'is_correct' => false]
                    ],
                    'explanation' => 'RAID protège surtout contre certaines pannes matérielles ; il ne fournit pas l\'historique ou l\'isolation d\'une sauvegarde.',
                ],
                [
                    'question' => 'Quel avantage offre un snapshot Copy-on-Write ?',
                    'choices' => [
                        ['choice_text' => 'Partager initialement les blocs inchangés', 'is_correct' => true],
                        ['choice_text' => 'Copier immédiatement tous les blocs', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les fichiers ouverts', 'is_correct' => false],
                        ['choice_text' => 'Ne jamais consommer d\'espace', 'is_correct' => false]
                    ],
                    'explanation' => 'Le COW partage les blocs tant qu\'ils ne sont pas modifiés et ne duplique que ceux affectés par les écritures.',
                ],
                [
                    'question' => 'Quel symptôme suggère une saturation I/O ?',
                    'choices' => [
                        ['choice_text' => 'Un iowait élevé avec une activité CPU non saturée', 'is_correct' => true],
                        ['choice_text' => 'Un CPU user à 100 % uniquement', 'is_correct' => false],
                        ['choice_text' => 'Une hausse des inodes', 'is_correct' => false],
                        ['choice_text' => 'Une baisse du trafic réseau uniquement', 'is_correct' => false]
                    ],
                    'explanation' => 'Une forte attente I/O indique que le système passe du temps à attendre un périphérique plutôt qu\'à calculer.',
                ],
                [
                    'question' => 'Pourquoi modifier un cache d\'écriture sans connaître le matériel est-il risqué ?',
                    'choices' => [
                        ['choice_text' => 'Les garanties de persistance peuvent changer', 'is_correct' => true],
                        ['choice_text' => 'La RAM est supprimée', 'is_correct' => false],
                        ['choice_text' => 'Le réseau devient IPv6', 'is_correct' => false],
                        ['choice_text' => 'Les permissions sont changées', 'is_correct' => false]
                    ],
                    'explanation' => 'Les caches d\'écriture interagissent avec la persistance et les barrières ; leurs garanties doivent être comprises avant modification.',
                ],
                [
                    'question' => 'Quel est l\'objectif général de fsck ?',
                    'choices' => [
                        ['choice_text' => 'Vérifier et réparer certaines incohérences d\'un système de fichiers', 'is_correct' => true],
                        ['choice_text' => 'Analyser les routes réseau', 'is_correct' => false],
                        ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false],
                        ['choice_text' => 'Optimiser le compilateur', 'is_correct' => false]
                    ],
                    'explanation' => 'fsck contrôle la cohérence des structures d\'un système de fichiers et peut corriger certaines erreurs selon le type.',
                ]
            ],
        ],
        [
            'title' => 'Réseau au niveau système',
            'description' => 'Sockets, résolution des noms, routage, MTU et interfaces réseau.',
            'difficulty' => 'Intermediate',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quelle configuration Linux détermine notamment les sources utilisées pour la résolution des noms ?',
                    'choices' => [
                        ['choice_text' => 'La configuration NSS, comme /etc/nsswitch.conf', 'is_correct' => true],
                        ['choice_text' => 'La table GPT', 'is_correct' => false],
                        ['choice_text' => 'Le scheduler', 'is_correct' => false],
                        ['choice_text' => 'Le journal du bootloader', 'is_correct' => false]
                    ],
                    'explanation' => 'NSS détermine l\'ordre et les sources de résolution telles que fichiers locaux, DNS ou services d\'annuaire.',
                ],
                [
                    'question' => 'Quel type de socket est classiquement associé à TCP ?',
                    'choices' => [
                        ['choice_text' => 'SOCK_STREAM', 'is_correct' => true],
                        ['choice_text' => 'SOCK_DGRAM', 'is_correct' => false],
                        ['choice_text' => 'SOCK_RAW uniquement', 'is_correct' => false],
                        ['choice_text' => 'SOCK_MEM', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'API socket associe généralement SOCK_STREAM à TCP et SOCK_DGRAM à UDP.',
                ],
                [
                    'question' => 'Pourquoi une application peut-elle être accessible sur loopback mais pas depuis le LAN ?',
                    'choices' => [
                        ['choice_text' => 'Elle écoute seulement sur l\'interface de loopback ou est filtrée', 'is_correct' => true],
                        ['choice_text' => 'TCP interdit les connexions locales', 'is_correct' => false],
                        ['choice_text' => 'DNS désactive le LAN', 'is_correct' => false],
                        ['choice_text' => 'Les fichiers ne sont pas lisibles', 'is_correct' => false]
                    ],
                    'explanation' => 'Une adresse de bind comme 127.0.0.1 limite l\'écoute à la machine ; un firewall peut aussi produire ce symptôme.',
                ],
                [
                    'question' => 'Quel outil affiche généralement les sockets en écoute sous Linux ?',
                    'choices' => [
                        ['choice_text' => 'ss', 'is_correct' => true],
                        ['choice_text' => 'chmod', 'is_correct' => false],
                        ['choice_text' => 'mkfs', 'is_correct' => false],
                        ['choice_text' => 'fsck', 'is_correct' => false]
                    ],
                    'explanation' => 'ss affiche les sockets et, selon les privilèges et options, les processus qui les utilisent.',
                ],
                [
                    'question' => 'À quoi sert l\'interface loopback ?',
                    'choices' => [
                        ['choice_text' => 'Permettre les communications internes de la machine via la pile réseau', 'is_correct' => true],
                        ['choice_text' => 'Relier deux datacenters', 'is_correct' => false],
                        ['choice_text' => 'Remplacer la carte réseau', 'is_correct' => false],
                        ['choice_text' => 'Bloquer TCP local', 'is_correct' => false]
                    ],
                    'explanation' => 'La loopback permet à des applications d\'échanger avec la même machine sans passer par le réseau physique.',
                ],
                [
                    'question' => 'Que peut provoquer une mauvaise route par défaut ?',
                    'choices' => [
                        ['choice_text' => 'Les paquets peuvent être envoyés vers un mauvais next hop', 'is_correct' => true],
                        ['choice_text' => 'Les permissions changent', 'is_correct' => false],
                        ['choice_text' => 'La RAM augmente', 'is_correct' => false],
                        ['choice_text' => 'Le disque devient read-only', 'is_correct' => false]
                    ],
                    'explanation' => 'Une mauvaise route détermine un mauvais chemin d\'acheminement et peut provoquer perte ou boucle de trafic.',
                ],
                [
                    'question' => 'Pourquoi un MTU incohérent peut-il provoquer des problèmes difficiles à diagnostiquer ?',
                    'choices' => [
                        ['choice_text' => 'Des paquets trop grands peuvent être fragmentés ou rejetés', 'is_correct' => true],
                        ['choice_text' => 'Le MTU contrôle les permissions', 'is_correct' => false],
                        ['choice_text' => 'Le MTU remplace DNS', 'is_correct' => false],
                        ['choice_text' => 'Le MTU fixe le nombre de threads', 'is_correct' => false]
                    ],
                    'explanation' => 'Un problème de MTU peut casser PMTUD, provoquer des pertes sélectives ou une fragmentation inattendue.',
                ],
                [
                    'question' => 'Quel privilège permet historiquement d\'écouter sur un port inférieur à 1024 ?',
                    'choices' => [
                        ['choice_text' => 'Un privilège réseau approprié, aujourd\'hui souvent fourni par une capability', 'is_correct' => true],
                        ['choice_text' => 'Une permission de lecture', 'is_correct' => false],
                        ['choice_text' => 'Aucun privilège n\'est possible', 'is_correct' => false],
                        ['choice_text' => 'Le rôle DNS uniquement', 'is_correct' => false]
                    ],
                    'explanation' => 'Les ports privilégiés peuvent être ouverts par root ou via une capability telle que CAP_NET_BIND_SERVICE.',
                ],
                [
                    'question' => 'Pourquoi séparer les plans de management et de données ?',
                    'choices' => [
                        ['choice_text' => 'Isoler l\'administration du trafic applicatif', 'is_correct' => true],
                        ['choice_text' => 'Supprimer tous les logs', 'is_correct' => false],
                        ['choice_text' => 'Augmenter automatiquement la RAM', 'is_correct' => false],
                        ['choice_text' => 'Rendre TCP sans état', 'is_correct' => false]
                    ],
                    'explanation' => 'Une séparation réduit l\'exposition des interfaces d\'administration et facilite les contrôles et la QoS.',
                ],
                [
                    'question' => 'Quelle comparaison oriente vers un problème DNS plutôt qu\'un problème TCP ?',
                    'choices' => [
                        ['choice_text' => 'Le nom échoue alors qu\'une connexion directe à l\'adresse IP fonctionne', 'is_correct' => true],
                        ['choice_text' => 'Le CPU est élevé', 'is_correct' => false],
                        ['choice_text' => 'Le disque est plein', 'is_correct' => false],
                        ['choice_text' => 'Les inodes sont épuisés', 'is_correct' => false]
                    ],
                    'explanation' => 'Si le service fonctionne avec l\'IP mais pas le nom, le resolver ou DNS devient une hypothèse prioritaire.',
                ]
            ],
        ],
        [
            'title' => 'Sécurité du système',
            'description' => 'Hardening, capabilities, MAC, journaux et contrôle d’accès.',
            'difficulty' => 'Intermediate',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi un service devrait-il utiliser un compte dédié ?',
                    'choices' => [
                        ['choice_text' => 'Limiter les privilèges et faciliter l\'audit', 'is_correct' => true],
                        ['choice_text' => 'Accélérer l\'exécution', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                        ['choice_text' => 'Éviter les mises à jour', 'is_correct' => false]
                    ],
                    'explanation' => 'Un compte dédié réduit la portée d\'une compromission et permet d\'identifier les actions du service.',
                ],
                [
                    'question' => 'Quel mécanisme Linux découpe certains privilèges root en capacités distinctes ?',
                    'choices' => [
                        ['choice_text' => 'Les Linux capabilities', 'is_correct' => true],
                        ['choice_text' => 'Les inodes', 'is_correct' => false],
                        ['choice_text' => 'Les enregistrements MX', 'is_correct' => false],
                        ['choice_text' => 'Les tables ARP', 'is_correct' => false]
                    ],
                    'explanation' => 'Les capabilities permettent d\'accorder séparément des privilèges plutôt que de donner toutes les capacités de root.',
                ],
                [
                    'question' => 'Que fournissent SELinux ou AppArmor ?',
                    'choices' => [
                        ['choice_text' => 'Un contrôle d\'accès obligatoire supplémentaire fondé sur des politiques', 'is_correct' => true],
                        ['choice_text' => 'Un remplacement du chiffrement réseau', 'is_correct' => false],
                        ['choice_text' => 'Une accélération du stockage', 'is_correct' => false],
                        ['choice_text' => 'Un remplacement du scheduler', 'is_correct' => false]
                    ],
                    'explanation' => 'Ces mécanismes imposent des politiques supplémentaires qui peuvent limiter un processus même s\'il possède des permissions classiques suffisantes.',
                ],
                [
                    'question' => 'Pourquoi désactiver un service inutilisé est-il utile ?',
                    'choices' => [
                        ['choice_text' => 'Réduire la surface d\'attaque', 'is_correct' => true],
                        ['choice_text' => 'Augmenter la surface d\'attaque', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les mises à jour', 'is_correct' => false],
                        ['choice_text' => 'Désactiver la mémoire virtuelle', 'is_correct' => false]
                    ],
                    'explanation' => 'Chaque service inutile peut représenter une surface d\'attaque et un coût de maintenance supplémentaires.',
                ],
                [
                    'question' => 'Quel est le principe d\'une allowlist ?',
                    'choices' => [
                        ['choice_text' => 'Autoriser explicitement ce qui est nécessaire et refuser le reste par défaut', 'is_correct' => true],
                        ['choice_text' => 'Autoriser tout', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer les fichiers', 'is_correct' => false],
                        ['choice_text' => 'Remplacer les ACL', 'is_correct' => false]
                    ],
                    'explanation' => 'Une allowlist applique un modèle fermé : l\'accès doit être explicitement autorisé pour passer.',
                ],
                [
                    'question' => 'Pourquoi protéger les fichiers de configuration contre l\'écriture non autorisée ?',
                    'choices' => [
                        ['choice_text' => 'Une modification malveillante peut changer le comportement d\'un service privilégié', 'is_correct' => true],
                        ['choice_text' => 'Cela augmente la RAM', 'is_correct' => false],
                        ['choice_text' => 'Cela supprime le réseau', 'is_correct' => false],
                        ['choice_text' => 'Cela ralentit le CPU', 'is_correct' => false]
                    ],
                    'explanation' => 'Une configuration modifiable peut devenir un vecteur de persistance ou d\'élévation de privilèges.',
                ],
                [
                    'question' => 'Que cherche notamment à empêcher ASLR ?',
                    'choices' => [
                        ['choice_text' => 'La prédictibilité des adresses mémoire', 'is_correct' => true],
                        ['choice_text' => 'La rotation des logs', 'is_correct' => false],
                        ['choice_text' => 'La perte de paquets', 'is_correct' => false],
                        ['choice_text' => 'La modification des permissions', 'is_correct' => false]
                    ],
                    'explanation' => 'ASLR randomise certains emplacements mémoire afin de compliquer les attaques dépendant d\'adresses connues.',
                ],
                [
                    'question' => 'Pourquoi centraliser les logs de sécurité de plusieurs serveurs ?',
                    'choices' => [
                        ['choice_text' => 'Pour corréler les événements et détecter des attaques réparties', 'is_correct' => true],
                        ['choice_text' => 'Pour supprimer les logs locaux', 'is_correct' => false],
                        ['choice_text' => 'Pour diminuer les sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'Pour désactiver MFA', 'is_correct' => false]
                    ],
                    'explanation' => 'La centralisation permet de mettre en relation identités, hôtes et événements dans une même chronologie.',
                ],
                [
                    'question' => 'Quel contrôle réduit l\'accès administratif depuis un réseau utilisateur ?',
                    'choices' => [
                        ['choice_text' => 'Un réseau de management séparé ou un bastion', 'is_correct' => true],
                        ['choice_text' => 'Un swap plus grand', 'is_correct' => false],
                        ['choice_text' => 'Un cache disque plus petit', 'is_correct' => false],
                        ['choice_text' => 'Un fichier temporaire', 'is_correct' => false]
                    ],
                    'explanation' => 'La séparation et le bastion concentrent les accès sensibles sur un chemin contrôlé.',
                ],
                [
                    'question' => 'Pourquoi tester le hardening en préproduction ?',
                    'choices' => [
                        ['choice_text' => 'Pour découvrir les incompatibilités avant un déploiement large', 'is_correct' => true],
                        ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'Pour rendre le système plus complexe', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter toute journalisation', 'is_correct' => false]
                    ],
                    'explanation' => 'Des règles de sécurité trop strictes peuvent casser une application ; les tester avant production réduit le risque.',
                ]
            ],
        ],
        [
            'title' => 'Conteneurs et isolation',
            'description' => 'Namespaces, cgroups, images, secrets et persistance.',
            'difficulty' => 'Intermediate',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quels mécanismes Linux sont fondamentaux pour isoler et limiter un conteneur ?',
                    'choices' => [
                        ['choice_text' => 'Namespaces et cgroups', 'is_correct' => true],
                        ['choice_text' => 'BIOS et RAID', 'is_correct' => false],
                        ['choice_text' => 'DNS et DHCP', 'is_correct' => false],
                        ['choice_text' => 'GPT et UEFI', 'is_correct' => false]
                    ],
                    'explanation' => 'Les namespaces isolent des vues du système et les cgroups encadrent l\'usage de ressources.',
                ],
                [
                    'question' => 'Quelle différence essentielle existe entre un conteneur et une VM ?',
                    'choices' => [
                        ['choice_text' => 'Le conteneur partage le noyau de l\'hôte', 'is_correct' => true],
                        ['choice_text' => 'Le conteneur possède toujours son propre hyperviseur', 'is_correct' => false],
                        ['choice_text' => 'La VM partage toujours le noyau hôte', 'is_correct' => false],
                        ['choice_text' => 'Une VM ne possède pas de mémoire', 'is_correct' => false]
                    ],
                    'explanation' => 'Une VM exécute normalement son propre noyau invité, tandis qu\'un conteneur dépend du kernel hôte.',
                ],
                [
                    'question' => 'Quel est le rôle principal des cgroups ?',
                    'choices' => [
                        ['choice_text' => 'Contrôler et mesurer la consommation de ressources', 'is_correct' => true],
                        ['choice_text' => 'Remplacer les namespaces', 'is_correct' => false],
                        ['choice_text' => 'Créer des partitions', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer les images', 'is_correct' => false]
                    ],
                    'explanation' => 'Les cgroups peuvent appliquer des limites et comptabiliser CPU, mémoire et d\'autres ressources.',
                ],
                [
                    'question' => 'Pourquoi le mode privileged est-il risqué pour un conteneur ?',
                    'choices' => [
                        ['choice_text' => 'Il réduit fortement les barrières d\'isolation et accorde de nombreuses capacités', 'is_correct' => true],
                        ['choice_text' => 'Il rend le conteneur plus petit', 'is_correct' => false],
                        ['choice_text' => 'Il supprime le réseau', 'is_correct' => false],
                        ['choice_text' => 'Il chiffre le disque', 'is_correct' => false]
                    ],
                    'explanation' => 'Un conteneur privilégié dispose d\'un périmètre de capacités beaucoup plus large qu\'un conteneur minimalement autorisé.',
                ],
                [
                    'question' => 'Pourquoi une image minimale peut-elle améliorer la sécurité ?',
                    'choices' => [
                        ['choice_text' => 'Elle réduit les composants et la surface à corriger', 'is_correct' => true],
                        ['choice_text' => 'Elle supprime le noyau hôte', 'is_correct' => false],
                        ['choice_text' => 'Elle empêche tous les processus', 'is_correct' => false],
                        ['choice_text' => 'Elle remplace la surveillance', 'is_correct' => false]
                    ],
                    'explanation' => 'Moins de composants signifie généralement moins de vulnérabilités potentielles et une maintenance plus simple.',
                ],
                [
                    'question' => 'Quel problème peut provoquer un conteneur sans limite mémoire qui consomme toute la RAM ?',
                    'choices' => [
                        ['choice_text' => 'Un OOM et une dégradation des autres workloads', 'is_correct' => true],
                        ['choice_text' => 'Une augmentation de la RAM physique', 'is_correct' => false],
                        ['choice_text' => 'Une amélioration du disque', 'is_correct' => false],
                        ['choice_text' => 'Une suppression du réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Une consommation non contrôlée peut déclencher l\'OOM killer et affecter l\'hôte ou d\'autres charges.',
                ],
                [
                    'question' => 'Pourquoi ne pas mettre un secret dans une image de conteneur ?',
                    'choices' => [
                        ['choice_text' => 'L\'image peut être copiée et le secret difficile à retirer', 'is_correct' => true],
                        ['choice_text' => 'Les images ne stockent jamais de fichiers', 'is_correct' => false],
                        ['choice_text' => 'Le secret accélère le boot', 'is_correct' => false],
                        ['choice_text' => 'Les namespaces l\'interdisent', 'is_correct' => false]
                    ],
                    'explanation' => 'Une image est un artefact réutilisable ; un secret intégré peut se retrouver dans les couches ou les caches de distribution.',
                ],
                [
                    'question' => 'Pourquoi l\'immuabilité des images facilite-t-elle les déploiements ?',
                    'choices' => [
                        ['choice_text' => 'Le même artefact versionné peut être promu entre environnements', 'is_correct' => true],
                        ['choice_text' => 'Elle interdit tout fichier', 'is_correct' => false],
                        ['choice_text' => 'Elle supprime le réseau', 'is_correct' => false],
                        ['choice_text' => 'Elle remplace les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'Une image immuable rend le déploiement plus reproductible et facilite l\'identification exacte de la version déployée.',
                ],
                [
                    'question' => 'Pourquoi faut-il gérer explicitement les données persistantes d\'un conteneur ?',
                    'choices' => [
                        ['choice_text' => 'Son filesystem de couche peut avoir un cycle de vie éphémère', 'is_correct' => true],
                        ['choice_text' => 'Les conteneurs n\'utilisent jamais de fichiers', 'is_correct' => false],
                        ['choice_text' => 'Les volumes sont interdits', 'is_correct' => false],
                        ['choice_text' => 'Les bases de données sont toujours en RAM', 'is_correct' => false]
                    ],
                    'explanation' => 'Les données durables doivent être placées dans un volume ou un service approprié, pas dépendre de l\'instance éphémère.',
                ],
                [
                    'question' => 'Quel choix est souvent plus adapté si l\'application exige un noyau personnalisé ?',
                    'choices' => [
                        ['choice_text' => 'Une VM', 'is_correct' => true],
                        ['choice_text' => 'Un conteneur privilégié par défaut', 'is_correct' => false],
                        ['choice_text' => 'Un simple shell', 'is_correct' => false],
                        ['choice_text' => 'Un lien symbolique', 'is_correct' => false]
                    ],
                    'explanation' => 'Un conteneur partage le noyau hôte ; une VM permet d\'exécuter un noyau invité différent.',
                ]
            ],
        ],
        [
            'title' => 'Diagnostic de performances',
            'description' => 'Mesure CPU, mémoire, I/O, latence, contention et baseline.',
            'difficulty' => 'Intermediate',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Une machine a beaucoup de CPU user et peu d\'iowait. Quelle hypothèse prioriser ?',
                    'choices' => [
                        ['choice_text' => 'Une charge principalement CPU', 'is_correct' => true],
                        ['choice_text' => 'Une saturation disque certaine', 'is_correct' => false],
                        ['choice_text' => 'Un problème DNS certain', 'is_correct' => false],
                        ['choice_text' => 'Un manque de fichiers', 'is_correct' => false]
                    ],
                    'explanation' => 'Un CPU fortement occupé en mode user et peu d\'attente I/O orientent vers le calcul ou l\'application elle-même.',
                ],
                [
                    'question' => 'Un swap augmente avec un fort temps d\'attente disque. Que suspecter ?',
                    'choices' => [
                        ['choice_text' => 'Une pression mémoire importante', 'is_correct' => true],
                        ['choice_text' => 'Un manque de CPU uniquement', 'is_correct' => false],
                        ['choice_text' => 'Un problème DNS pur', 'is_correct' => false],
                        ['choice_text' => 'Une route incorrecte uniquement', 'is_correct' => false]
                    ],
                    'explanation' => 'Le système semble utiliser le stockage pour gérer la mémoire, ce qui peut produire beaucoup d\'I/O de pagination.',
                ],
                [
                    'question' => 'Pourquoi mesurer la latence en plus du débit ?',
                    'choices' => [
                        ['choice_text' => 'Un même débit peut cacher des temps de réponse très différents', 'is_correct' => true],
                        ['choice_text' => 'La latence n\'existe que sur réseau', 'is_correct' => false],
                        ['choice_text' => 'Le débit suffit toujours', 'is_correct' => false],
                        ['choice_text' => 'La latence ne dépend jamais de la contention', 'is_correct' => false]
                    ],
                    'explanation' => 'Le débit décrit la quantité traitée ; la latence décrit le temps nécessaire pour une opération et peut se dégrader sous contention.',
                ],
                [
                    'question' => 'Quel outil fournit des indicateurs de mémoire, swap, I/O et CPU ?',
                    'choices' => [
                        ['choice_text' => 'vmstat', 'is_correct' => true],
                        ['choice_text' => 'mkfs', 'is_correct' => false],
                        ['choice_text' => 'chmod', 'is_correct' => false],
                        ['choice_text' => 'mount', 'is_correct' => false]
                    ],
                    'explanation' => 'vmstat offre une vue compacte de plusieurs familles de métriques utiles lors d\'un premier diagnostic.',
                ],
                [
                    'question' => 'Que peut suggérer une load average élevée avec un CPU non saturé ?',
                    'choices' => [
                        ['choice_text' => 'Des tâches peuvent attendre une ressource, notamment de l\'I/O', 'is_correct' => true],
                        ['choice_text' => 'Le CPU est forcément défaillant', 'is_correct' => false],
                        ['choice_text' => 'Le réseau est forcément coupé', 'is_correct' => false],
                        ['choice_text' => 'Le swap est forcément vide', 'is_correct' => false]
                    ],
                    'explanation' => 'La load average ne se résume pas au pourcentage CPU ; des tâches en attente peuvent aussi y contribuer selon le système.',
                ],
                [
                    'question' => 'Pourquoi une moyenne de latence peut-elle être trompeuse ?',
                    'choices' => [
                        ['choice_text' => 'Elle peut masquer des pics subis par une minorité de requêtes', 'is_correct' => true],
                        ['choice_text' => 'Les moyennes sont toujours fausses', 'is_correct' => false],
                        ['choice_text' => 'Le kernel ne mesure pas les pics', 'is_correct' => false],
                        ['choice_text' => 'Les clients ne voient jamais les p99', 'is_correct' => false]
                    ],
                    'explanation' => 'Les percentiles montrent les queues de distribution qu\'une moyenne peut masquer.',
                ],
                [
                    'question' => 'Quel symptôme suggère une contention sur un lock ?',
                    'choices' => [
                        ['choice_text' => 'Beaucoup de threads attendent alors que le CPU reste sous-utilisé', 'is_correct' => true],
                        ['choice_text' => 'Le disque devient plein', 'is_correct' => false],
                        ['choice_text' => 'Le DNS change', 'is_correct' => false],
                        ['choice_text' => 'Le réseau accélère', 'is_correct' => false]
                    ],
                    'explanation' => 'Un verrou très disputé peut empêcher le parallélisme sans saturer les cœurs de calcul.',
                ],
                [
                    'question' => 'Pourquoi la localité cache influence-t-elle le CPU ?',
                    'choices' => [
                        ['choice_text' => 'Les accès réutilisés sont servis plus vite par les caches', 'is_correct' => true],
                        ['choice_text' => 'Le cache augmente la taille du disque', 'is_correct' => false],
                        ['choice_text' => 'Le cache supprime les threads', 'is_correct' => false],
                        ['choice_text' => 'Le cache remplace la RAM', 'is_correct' => false]
                    ],
                    'explanation' => 'La localité temporelle et spatiale augmente la probabilité que les données utiles soient proches du CPU.',
                ],
                [
                    'question' => 'Quelle approche est la plus saine lors d\'un ralentissement inattendu ?',
                    'choices' => [
                        ['choice_text' => 'Mesurer CPU, mémoire, I/O et réseau avant de modifier', 'is_correct' => true],
                        ['choice_text' => 'Changer immédiatement tous les paramètres', 'is_correct' => false],
                        ['choice_text' => 'Redémarrer sans mesure', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'La mesure permet d\'identifier le goulot réel et d\'éviter un tuning basé sur une intuition erronée.',
                ],
                [
                    'question' => 'Pourquoi conserver une baseline historique ?',
                    'choices' => [
                        ['choice_text' => 'Comparer l\'incident au comportement normal et repérer les dérives', 'is_correct' => true],
                        ['choice_text' => 'Empêcher toute panne', 'is_correct' => false],
                        ['choice_text' => 'Remplacer les backups', 'is_correct' => false],
                        ['choice_text' => 'Augmenter le CPU', 'is_correct' => false]
                    ],
                    'explanation' => 'Une baseline permet de distinguer une charge habituelle d\'une rupture ou d\'une évolution anormale.',
                ]
            ],
        ],
        [
            'title' => 'Automatisation système',
            'description' => 'Idempotence, gestion des erreurs, déclaratif, dry-run et secrets.',
            'difficulty' => 'Intermediate',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quel principe rend un script sûr à relancer plusieurs fois ?',
                    'choices' => [
                        ['choice_text' => 'L\'idempotence', 'is_correct' => true],
                        ['choice_text' => 'Le hasard', 'is_correct' => false],
                        ['choice_text' => 'L\'absence de logs', 'is_correct' => false],
                        ['choice_text' => 'L\'utilisation systématique de root', 'is_correct' => false]
                    ],
                    'explanation' => 'Un automatisme idempotent conduit au même état cible lorsqu\'il est exécuté plusieurs fois.',
                ],
                [
                    'question' => 'Pourquoi valider les paramètres d\'un script avant une opération destructive ?',
                    'choices' => [
                        ['choice_text' => 'Réduire le risque d\'agir sur la mauvaise cible', 'is_correct' => true],
                        ['choice_text' => 'Accélérer le SSD', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les permissions', 'is_correct' => false],
                        ['choice_text' => 'Empêcher les tests', 'is_correct' => false]
                    ],
                    'explanation' => 'La validation limite erreurs humaines et entrées malveillantes ou malformées.',
                ],
                [
                    'question' => 'Quel avantage apporte une configuration déclarative ?',
                    'choices' => [
                        ['choice_text' => 'Décrire l\'état cible et converger vers lui', 'is_correct' => true],
                        ['choice_text' => 'Imposer des commandes manuelles uniques', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le système de fichiers', 'is_correct' => false],
                        ['choice_text' => 'Désactiver le versionnement', 'is_correct' => false]
                    ],
                    'explanation' => 'Le déclaratif facilite reproductibilité, audit et convergence des machines vers un état souhaité.',
                ],
                [
                    'question' => 'Pourquoi versionner les scripts d\'administration ?',
                    'choices' => [
                        ['choice_text' => 'Tracer les changements et permettre un rollback', 'is_correct' => true],
                        ['choice_text' => 'Augmenter la RAM', 'is_correct' => false],
                        ['choice_text' => 'Rendre les scripts non exécutables', 'is_correct' => false],
                        ['choice_text' => 'Désactiver les backups', 'is_correct' => false]
                    ],
                    'explanation' => 'Le versionnement crée un historique et permet une revue ou un retour à une version connue.',
                ],
                [
                    'question' => 'Que doit faire un script après une erreur critique ?',
                    'choices' => [
                        ['choice_text' => 'Traiter explicitement le code de retour et décider d\'arrêter ou de compenser', 'is_correct' => true],
                        ['choice_text' => 'Ignorer toutes les erreurs', 'is_correct' => false],
                        ['choice_text' => 'Supprimer stderr', 'is_correct' => false],
                        ['choice_text' => 'Désactiver les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'Une gestion explicite des erreurs évite qu\'une étape suivante s\'exécute sur un état invalide.',
                ],
                [
                    'question' => 'Pourquoi les tâches planifiées doivent-elles être observables ?',
                    'choices' => [
                        ['choice_text' => 'Pour détecter les échecs et retards silencieux', 'is_correct' => true],
                        ['choice_text' => 'Parce que les logs augmentent toujours les performances', 'is_correct' => false],
                        ['choice_text' => 'Les alertes remplacent les tests', 'is_correct' => false],
                        ['choice_text' => 'Une tâche échoue toujours visiblement', 'is_correct' => false]
                    ],
                    'explanation' => 'Un job automatique peut échouer sans utilisateur présent pour le constater ; il faut donc des signaux et des alertes adaptés.',
                ],
                [
                    'question' => 'Quel risque existe si une entrée utilisateur est concaténée dans une commande shell ?',
                    'choices' => [
                        ['choice_text' => 'Une injection de commande', 'is_correct' => true],
                        ['choice_text' => 'Un double page fault', 'is_correct' => false],
                        ['choice_text' => 'Une augmentation de la RAM', 'is_correct' => false],
                        ['choice_text' => 'Une fragmentation de disque', 'is_correct' => false]
                    ],
                    'explanation' => 'Une entrée non contrôlée peut modifier la syntaxe shell et déclencher des commandes inattendues.',
                ],
                [
                    'question' => 'Pourquoi préférer une API structurée au parsing fragile d\'une sortie humaine ?',
                    'choices' => [
                        ['choice_text' => 'Les champs et erreurs sont généralement plus stables', 'is_correct' => true],
                        ['choice_text' => 'Le texte est plus sécurisé', 'is_correct' => false],
                        ['choice_text' => 'Les APIs n\'échouent jamais', 'is_correct' => false],
                        ['choice_text' => 'Le parsing est interdit', 'is_correct' => false]
                    ],
                    'explanation' => 'Une interface structurée est moins sensible aux changements d\'affichage et permet de traiter les erreurs explicitement.',
                ],
                [
                    'question' => 'Quel contrôle réduit le risque avant une automatisation destructive à grande échelle ?',
                    'choices' => [
                        ['choice_text' => 'Un dry-run ou un canary limité', 'is_correct' => true],
                        ['choice_text' => 'Une exécution immédiate partout', 'is_correct' => false],
                        ['choice_text' => 'La suppression des sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'La désactivation de l\'audit', 'is_correct' => false]
                    ],
                    'explanation' => 'Un dry-run ou un déploiement sur un petit périmètre permet de vérifier l\'effet réel avant propagation.',
                ],
                [
                    'question' => 'Pourquoi séparer les secrets du code d\'automatisation ?',
                    'choices' => [
                        ['choice_text' => 'Pour éviter leur exposition dans le versionnement et les artefacts', 'is_correct' => true],
                        ['choice_text' => 'Pour ralentir les scripts', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les identités', 'is_correct' => false],
                        ['choice_text' => 'Pour empêcher l\'automatisation', 'is_correct' => false]
                    ],
                    'explanation' => 'Les secrets doivent être gérés par des mécanismes dédiés et ne pas être intégrés aux sources ou images.',
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
