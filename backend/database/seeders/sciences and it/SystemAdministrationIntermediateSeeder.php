<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SystemAdministrationIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'System Administration Intermediate — Linux Administration',
                'description' => 'Approfondissez l’administration Linux, les commandes système, les services et la gestion opérationnelle des serveurs.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser sudo plutôt que de travailler constamment avec un compte root ?',
                        'explanation' => 'sudo permet d’exécuter des commandes privilégiées tout en conservant une meilleure traçabilité et en limitant l’usage permanent des privilèges élevés.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’utilisation des privilèges élevés et améliorer la traçabilité', 'is_correct' => true],
                            ['choice_text' => 'Supprimer complètement les permissions root', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les utilisateurs administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les journaux système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de rechercher un fichier selon son nom dans une arborescence Linux ?',
                        'explanation' => 'find recherche des fichiers et répertoires selon différents critères, notamment leur nom.',
                        'choices' => [
                            ['choice_text' => 'find', 'is_correct' => true],
                            ['choice_text' => 'locatefileonly', 'is_correct' => false],
                            ['choice_text' => 'searchpath', 'is_correct' => false],
                            ['choice_text' => 'findnameonly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de la commande journalctl sur un système utilisant systemd ?',
                        'explanation' => 'journalctl permet de consulter les journaux centralisés du journal systemd.',
                        'choices' => [
                            ['choice_text' => 'Consulter les journaux gérés par systemd', 'is_correct' => true],
                            ['choice_text' => 'Modifier les permissions des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Configurer les interfaces réseau uniquement', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le code de retour d’une commande est-il important dans l’administration système ?',
                        'explanation' => 'Les codes de retour permettent aux scripts et outils d’automatisation de savoir si une opération s’est terminée correctement.',
                        'choices' => [
                            ['choice_text' => 'Il permet de déterminer le succès ou l’échec d’une commande', 'is_correct' => true],
                            ['choice_text' => 'Il indique toujours l’utilisation CPU', 'is_correct' => false],
                            ['choice_text' => 'Il correspond à l’adresse IP du serveur', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scripts d’administration doivent-ils gérer les erreurs ?',
                        'explanation' => 'Une erreur non traitée peut laisser le système dans un état incohérent ou provoquer des opérations incorrectes.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’un échec laisse le système dans un état imprévisible', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les permissions', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement les performances', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher tous les retours d’erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’un timer systemd ?',
                        'explanation' => 'Les timers systemd permettent de planifier l’exécution d’unités de service selon un calendrier ou un délai.',
                        'choices' => [
                            ['choice_text' => 'Planifier l’exécution de services selon un calendrier ou une temporisation', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le noyau Linux', 'is_correct' => false],
                            ['choice_text' => 'Créer des partitions automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Gérer les utilisateurs réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variables d’environnement peuvent-elles être utiles dans l’administration système ?',
                        'explanation' => 'Elles permettent de transmettre des paramètres à des programmes sans modifier directement leur code.',
                        'choices' => [
                            ['choice_text' => 'Fournir des paramètres de configuration aux processus', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les fichiers de configuration', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Changer le matériel du serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un administrateur doit-il éviter de modifier directement des fichiers système sans sauvegarde ?',
                        'explanation' => 'Une erreur de configuration peut empêcher un service ou le système de fonctionner correctement.',
                        'choices' => [
                            ['choice_text' => 'Une modification incorrecte peut provoquer une panne ou un comportement inattendu', 'is_correct' => true],
                            ['choice_text' => 'Les fichiers système sont toujours automatiquement restaurés', 'is_correct' => false],
                            ['choice_text' => 'Les sauvegardes empêchent toute modification', 'is_correct' => false],
                            ['choice_text' => 'Les fichiers système n’influencent jamais les services', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des scripts pour les tâches répétitives d’administration ?',
                        'explanation' => 'L’automatisation réduit les erreurs humaines, accélère les opérations et garantit une procédure répétable.',
                        'choices' => [
                            ['choice_text' => 'Réduire les erreurs humaines et rendre les opérations reproductibles', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la nécessité de tests', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de toute erreur', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une documentation de procédure d’exploitation ?',
                        'explanation' => 'Une procédure documentée permet aux administrateurs de reproduire les opérations et de réagir plus rapidement aux incidents.',
                        'choices' => [
                            ['choice_text' => 'Standardiser les opérations et faciliter la résolution des incidents', 'is_correct' => true],
                            ['choice_text' => 'Remplacer complètement les logs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la disponibilité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Intermediate — Processus et Performance',
                'description' => 'Analysez les processus, la consommation CPU, mémoire, I/O et les problèmes de performance Linux.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle différence générale existe entre un processus et un thread ?',
                        'explanation' => 'Un processus possède son propre espace d’adressage tandis que les threads d’un même processus partagent généralement cet espace.',
                        'choices' => [
                            ['choice_text' => 'Les threads d’un même processus partagent généralement son espace mémoire', 'is_correct' => true],
                            ['choice_text' => 'Un thread possède toujours son propre système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Un processus ne peut contenir qu’un seul thread', 'is_correct' => false],
                            ['choice_text' => 'Les processus ne peuvent jamais fonctionner en parallèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement une charge CPU élevée persistante ?',
                        'explanation' => 'Elle peut indiquer une forte demande de calcul, un processus bloqué ou un problème logiciel nécessitant une investigation.',
                        'choices' => [
                            ['choice_text' => 'Une forte activité CPU ou un processus consommant excessivement le processeur', 'is_correct' => true],
                            ['choice_text' => 'Un disque forcément défectueux', 'is_correct' => false],
                            ['choice_text' => 'Une adresse IP invalide', 'is_correct' => false],
                            ['choice_text' => 'Une permission incorrecte obligatoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte utilisation de swap peut-elle dégrader les performances ?',
                        'explanation' => 'Les accès disque sont généralement beaucoup plus lents que les accès RAM, et une utilisation intense de swap peut entraîner du swapping excessif.',
                        'choices' => [
                            ['choice_text' => 'Les accès disque sont beaucoup plus lents que les accès mémoire', 'is_correct' => true],
                            ['choice_text' => 'La swap est toujours plus rapide que la RAM', 'is_correct' => false],
                            ['choice_text' => 'La swap augmente automatiquement le CPU disponible', 'is_correct' => false],
                            ['choice_text' => 'La swap supprime les processus inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer CPU bound et I/O bound ?',
                        'explanation' => 'Un problème CPU bound demande surtout du calcul tandis qu’un problème I/O bound attend principalement des opérations d’entrée/sortie.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier si le goulot d’étranglement vient du calcul ou des entrées/sorties', 'is_correct' => true],
                            ['choice_text' => 'Parce que les deux problèmes se résolvent toujours de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier les permissions des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Pour créer un utilisateur système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel outil permet notamment d’observer l’activité disque et I/O sous Linux ?',
                        'explanation' => 'iostat fournit notamment des informations sur l’activité des périphériques et les statistiques d’I/O.',
                        'choices' => [
                            ['choice_text' => 'iostat', 'is_correct' => true],
                            ['choice_text' => 'diskwatchonly', 'is_correct' => false],
                            ['choice_text' => 'ioinfofile', 'is_correct' => false],
                            ['choice_text' => 'storagewatch', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un processus en état D peut-il être difficile à arrêter immédiatement ?',
                        'explanation' => 'L’état D correspond généralement à une attente non interruptible, souvent liée aux entrées/sorties.',
                        'choices' => [
                            ['choice_text' => 'Il peut attendre une opération d’I/O non interruptible', 'is_correct' => true],
                            ['choice_text' => 'Il possède toujours les privilèges root', 'is_correct' => false],
                            ['choice_text' => 'Il est automatiquement supprimé', 'is_correct' => false],
                            ['choice_text' => 'Il n’est pas réellement un processus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de nice et renice ?',
                        'explanation' => 'Ils permettent d’influencer la priorité CPU relative d’un processus.',
                        'choices' => [
                            ['choice_text' => 'Modifier la priorité relative d’un processus pour le CPU', 'is_correct' => true],
                            ['choice_text' => 'Modifier les permissions de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Modifier les adresses IP', 'is_correct' => false],
                            ['choice_text' => 'Changer le propriétaire d’un fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser load average avec l’utilisation CPU ?',
                        'explanation' => 'Le load average représente notamment le nombre moyen de tâches en cours ou en attente et doit être interprété avec le nombre de CPU et le type de charge.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer la charge globale et l’utilisation réelle du processeur', 'is_correct' => true],
                            ['choice_text' => 'Parce que load average mesure uniquement la mémoire', 'is_correct' => false],
                            ['choice_text' => 'Parce que CPU et load average sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer tous les autres indicateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si un processus crée continuellement des fichiers temporaires sans les supprimer ?',
                        'explanation' => 'Une croissance incontrôlée des fichiers temporaires peut consommer rapidement l’espace disque.',
                        'choices' => [
                            ['choice_text' => 'Une saturation progressive du stockage', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique de la RAM', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des permissions', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer avant d’optimiser un système ?',
                        'explanation' => 'Sans mesure, une modification peut résoudre le mauvais problème ou même dégrader les performances.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier le véritable goulot d’étranglement avant de changer le système', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute utilisation de métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement les ressources', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les processus', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Intermediate — Réseau et services',
                'description' => 'Approfondissez DNS, routage, ports, services réseau et diagnostic de connectivité.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le DNS peut-il être un point critique pour une application ?',
                        'explanation' => 'Une application peut être parfaitement fonctionnelle mais incapable de joindre ses dépendances si les noms ne sont plus résolus.',
                        'choices' => [
                            ['choice_text' => 'Une mauvaise résolution DNS peut empêcher l’accès aux dépendances', 'is_correct' => true],
                            ['choice_text' => 'DNS ne concerne que le stockage', 'is_correct' => false],
                            ['choice_text' => 'DNS remplace les ports réseau', 'is_correct' => false],
                            ['choice_text' => 'DNS ne peut jamais être indisponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel outil permet notamment d’interroger DNS depuis Linux ?',
                        'explanation' => 'dig fournit des informations détaillées sur les requêtes et réponses DNS.',
                        'choices' => [
                            ['choice_text' => 'dig', 'is_correct' => true],
                            ['choice_text' => 'dnscheckfile', 'is_correct' => false],
                            ['choice_text' => 'resolveonly', 'is_correct' => false],
                            ['choice_text' => 'namequery', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande peut être utilisée pour examiner les routes IP sous Linux ?',
                        'explanation' => 'ip route affiche la table de routage du système.',
                        'choices' => [
                            ['choice_text' => 'ip route', 'is_correct' => true],
                            ['choice_text' => 'showroutesonly', 'is_correct' => false],
                            ['choice_text' => 'routefile', 'is_correct' => false],
                            ['choice_text' => 'netpath', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un serveur peut-il être accessible par IP mais pas par son nom ?',
                        'explanation' => 'Cette situation peut indiquer un problème de résolution DNS ou de configuration locale des noms.',
                        'choices' => [
                            ['choice_text' => 'Le service DNS ou la résolution locale peut être défaillant', 'is_correct' => true],
                            ['choice_text' => 'Le réseau IP est nécessairement complètement indisponible', 'is_correct' => false],
                            ['choice_text' => 'Le CPU est forcément saturé', 'is_correct' => false],
                            ['choice_text' => 'Les permissions de fichiers sont toujours responsables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de netstat ou ss dans le diagnostic réseau ?',
                        'explanation' => 'Ces outils permettent notamment d’observer les sockets, ports en écoute et connexions réseau.',
                        'choices' => [
                            ['choice_text' => 'Examiner les ports, sockets et connexions réseau', 'is_correct' => true],
                            ['choice_text' => 'Modifier le système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Modifier la fréquence CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un service peut-il être en écoute localement mais inaccessible depuis un autre serveur ?',
                        'explanation' => 'Le service peut être lié à localhost, bloqué par un pare-feu ou inaccessible par le routage.',
                        'choices' => [
                            ['choice_text' => 'Il peut être limité à localhost ou bloqué par le réseau', 'is_correct' => true],
                            ['choice_text' => 'Un service local est toujours accessible partout', 'is_correct' => false],
                            ['choice_text' => 'DNS contrôle toutes les interfaces', 'is_correct' => false],
                            ['choice_text' => 'Les ports ne fonctionnent que sur localhost', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier l’adresse d’écoute d’un service ?',
                        'explanation' => 'Une application liée uniquement à une adresse locale peut ne pas accepter de connexions provenant d’autres interfaces.',
                        'choices' => [
                            ['choice_text' => 'Pour savoir sur quelles interfaces le service accepte les connexions', 'is_correct' => true],
                            ['choice_text' => 'Pour connaître la taille du disque', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer la RAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de traceroute ou tracert ?',
                        'explanation' => 'Ces outils permettent d’observer les différents sauts entre une machine source et une destination.',
                        'choices' => [
                            ['choice_text' => 'Identifier le chemin réseau et certains points de blocage possibles', 'is_correct' => true],
                            ['choice_text' => 'Modifier la table de routage automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Créer des routes permanentes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le port d’un service doit-il être documenté ?',
                        'explanation' => 'La documentation facilite le dépannage, les règles de firewall et l’intégration avec les autres systèmes.',
                        'choices' => [
                            ['choice_text' => 'Pour faciliter l’administration, le dépannage et la sécurité réseau', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester une connexion avec une adresse IP puis avec un nom DNS peut-il aider au diagnostic ?',
                        'explanation' => 'Comparer les deux permet de déterminer si le problème vient de la connectivité IP ou de la résolution de noms.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer un problème de connectivité d’un problème DNS', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier automatiquement les routes', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier les permissions fichiers', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le pare-feu', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Intermediate — Stockage et sauvegardes',
                'description' => 'Approfondissez LVM, montage, quotas, sauvegardes, restauration et gestion de l’espace disque.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’avantage principal de LVM ?',
                        'explanation' => 'LVM apporte une couche d’abstraction permettant notamment de gérer plus facilement les volumes et certaines opérations de redimensionnement.',
                        'choices' => [
                            ['choice_text' => 'Fournir une gestion flexible des volumes logiques', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller l’espace libre d’un système de fichiers ?',
                        'explanation' => 'Un manque d’espace peut provoquer des erreurs d’écriture, des problèmes de logs ou des interruptions de services.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter les incidents causés par la saturation du stockage', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la capacité automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier les permissions', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la RAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un quota disque ?',
                        'explanation' => 'Les quotas limitent la quantité de stockage qu’un utilisateur ou groupe peut consommer.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’utilisation du stockage par utilisateur ou groupe', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la taille du disque', 'is_correct' => false],
                            ['choice_text' => 'Créer des partitions automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les permissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde complète n’est-elle pas toujours la solution la plus efficace ?',
                        'explanation' => 'Des sauvegardes incrémentales ou différentielles peuvent réduire le volume transféré et le temps nécessaire entre sauvegardes complètes.',
                        'choices' => [
                            ['choice_text' => 'Elle peut consommer davantage de temps et d’espace que des stratégies combinées', 'is_correct' => true],
                            ['choice_text' => 'Elle ne peut jamais être restaurée', 'is_correct' => false],
                            ['choice_text' => 'Elle ne contient aucun fichier', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute sauvegarde supplémentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence générale existe entre sauvegarde incrémentale et différentielle ?',
                        'explanation' => 'Une incrémentale sauvegarde les changements depuis la dernière sauvegarde quel que soit son type, alors qu’une différentielle sauvegarde les changements depuis la dernière sauvegarde complète.',
                        'choices' => [
                            ['choice_text' => 'L’incrémentale repart de la dernière sauvegarde, la différentielle de la dernière sauvegarde complète', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'La différentielle ne sauvegarde aucune donnée', 'is_correct' => false],
                            ['choice_text' => 'L’incrémentale sauvegarde toujours tout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de sauvegarde doit-elle inclure plusieurs copies ?',
                        'explanation' => 'Plusieurs copies sur des supports ou emplacements différents réduisent le risque de perdre toutes les sauvegardes lors d’un même incident.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque de perte simultanée des données et sauvegardes', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune donnée ne sera jamais perdue', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout test de restauration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de stockage local', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il tester une restauration complète et pas seulement vérifier que les fichiers existent ?',
                        'explanation' => 'La présence des fichiers ne garantit pas qu’ils sont cohérents, exploitables ou restaurables dans un système fonctionnel.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que la restauration produit réellement un environnement utilisable', 'is_correct' => true],
                            ['choice_text' => 'Parce que les sauvegardes sont toujours corrompues', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement la capacité', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les anciennes sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le stockage des sauvegardes dans le même serveur peut-il être risqué ?',
                        'explanation' => 'Une panne, une compromission ou un incident physique peut affecter simultanément les données originales et leurs sauvegardes.',
                        'choices' => [
                            ['choice_text' => 'Un même incident peut détruire à la fois les données et les sauvegardes', 'is_correct' => true],
                            ['choice_text' => 'Les sauvegardes locales sont toujours invalides', 'is_correct' => false],
                            ['choice_text' => 'Un serveur ne peut jamais être compromis', 'is_correct' => false],
                            ['choice_text' => 'Les sauvegardes locales consomment toujours plus de CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif du RPO dans une stratégie de reprise ?',
                        'explanation' => 'Le Recovery Point Objective définit la quantité maximale de données qu’une organisation accepte potentiellement de perdre après un incident.',
                        'choices' => [
                            ['choice_text' => 'Définir la perte de données maximale acceptable', 'is_correct' => true],
                            ['choice_text' => 'Mesurer le temps de restauration', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la capacité disque', 'is_correct' => false],
                            ['choice_text' => 'Définir la durée de conservation des logs uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif du RTO ?',
                        'explanation' => 'Le Recovery Time Objective définit le délai maximal souhaité pour restaurer un service après un incident.',
                        'choices' => [
                            ['choice_text' => 'Définir le temps de restauration maximal acceptable', 'is_correct' => true],
                            ['choice_text' => 'Définir la quantité de données perdue', 'is_correct' => false],
                            ['choice_text' => 'Mesurer l’espace disque disponible', 'is_correct' => false],
                            ['choice_text' => 'Définir le nombre d’utilisateurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Intermediate — Sécurité système',
                'description' => 'Approfondissez les pratiques de sécurisation des serveurs, permissions, SSH, logs et surface d’attaque.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi désactiver l’authentification SSH directe du compte root peut-il améliorer la sécurité ?',
                        'explanation' => 'Cela réduit l’usage direct d’un compte privilégié et permet d’utiliser des comptes individuels avec sudo et une meilleure traçabilité.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’usage direct d’un compte privilégié et améliorer la traçabilité', 'is_correct' => true],
                            ['choice_text' => 'Supprimer totalement SSH', 'is_correct' => false],
                            ['choice_text' => 'Donner plus de droits aux utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Désactiver tous les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi privilégier l’authentification SSH par clé dans certains environnements ?',
                        'explanation' => 'Les clés cryptographiques peuvent fournir une authentification forte sans dépendre uniquement d’un mot de passe.',
                        'choices' => [
                            ['choice_text' => 'Fournir une authentification cryptographique plus robuste que le simple mot de passe', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les permissions', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Rendre SSH inutile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un firewall local sur un serveur ?',
                        'explanation' => 'Un firewall local peut bloquer des connexions non autorisées même si un service est actif.',
                        'choices' => [
                            ['choice_text' => 'Contrôler localement les connexions réseau autorisées', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les permissions de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la RAM', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il appliquer les correctifs de sécurité avec une procédure contrôlée ?',
                        'explanation' => 'Les mises à jour corrigent des vulnérabilités mais peuvent aussi introduire des incompatibilités nécessitant validation et planification.',
                        'choices' => [
                            ['choice_text' => 'Pour corriger les vulnérabilités tout en contrôlant les risques de régression', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toutes les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro interruption', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le principe du moindre privilège doit-il aussi s’appliquer aux services ?',
                        'explanation' => 'Si un service est compromis, ses permissions déterminent en partie l’impact potentiel de l’attaque.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une compromission du service', 'is_correct' => true],
                            ['choice_text' => 'Permettre aux services d’accéder à tous les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les services de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les comptes système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les tentatives de connexion SSH ?',
                        'explanation' => 'Une augmentation anormale peut révéler des tentatives de brute force ou une activité suspecte.',
                        'choices' => [
                            ['choice_text' => 'Détecter des tentatives d’accès anormales ou répétitives', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Modifier les routes réseau', 'is_correct' => false],
                            ['choice_text' => 'Créer de nouveaux comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs doivent-ils être protégés contre les modifications non autorisées ?',
                        'explanation' => 'Un attaquant qui peut modifier les logs peut masquer des actions et compliquer l’investigation.',
                        'choices' => [
                            ['choice_text' => 'Préserver leur intégrité pour faciliter les investigations', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la capacité disque', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute collecte de logs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les alertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner régulièrement les services exposés ?',
                        'explanation' => 'Un scan peut identifier des ports ou services qui n’étaient pas prévus ou qui ne devraient plus être accessibles.',
                        'choices' => [
                            ['choice_text' => 'Détecter les services et ports exposés qui ne devraient pas l’être', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement tous les ports', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Remplacer l’authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes inactifs doivent-ils être désactivés ?',
                        'explanation' => 'Un compte inutile reste potentiellement exploitable et augmente la surface d’attaque.',
                        'choices' => [
                            ['choice_text' => 'Réduire les identités inutiles pouvant être compromises', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les privilèges actifs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Désactiver le réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des politiques de mot de passe ou MFA adaptées sur les systèmes critiques ?',
                        'explanation' => 'Des contrôles d’authentification plus robustes réduisent le risque d’accès non autorisé.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque de compromission des comptes critiques', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun compte ne sera jamais compromis', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de journaux', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Intermediate — Windows Server Administration',
                'description' => 'Approfondissez les concepts Windows Server, services, utilisateurs, PowerShell et administration distante.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel outil en ligne de commande est principalement utilisé pour l’automatisation sous Windows Server ?',
                        'explanation' => 'PowerShell fournit un environnement de scripting et d’administration puissant pour Windows et d’autres plateformes.',
                        'choices' => [
                            ['choice_text' => 'PowerShell', 'is_correct' => true],
                            ['choice_text' => 'HTML Console', 'is_correct' => false],
                            ['choice_text' => 'SQL Shell uniquement', 'is_correct' => false],
                            ['choice_text' => 'Registry Browser uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’Active Directory Domain Services ?',
                        'explanation' => 'AD DS fournit notamment un annuaire centralisé pour les utilisateurs, ordinateurs, groupes et politiques dans un domaine Windows.',
                        'choices' => [
                            ['choice_text' => 'Centraliser les identités et ressources d’un domaine Windows', 'is_correct' => true],
                            ['choice_text' => 'Gérer uniquement les disques locaux', 'is_correct' => false],
                            ['choice_text' => 'Remplacer DNS dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement les fichiers utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue DNS dans un environnement Active Directory ?',
                        'explanation' => 'Active Directory dépend fortement de DNS pour la découverte des contrôleurs de domaine et différents services.',
                        'choices' => [
                            ['choice_text' => 'Permettre la résolution et la découverte de services liés au domaine', 'is_correct' => true],
                            ['choice_text' => 'Remplacer l’annuaire Active Directory', 'is_correct' => false],
                            ['choice_text' => 'Gérer uniquement les permissions de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Créer des groupes sans annuaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les Group Policy Objects sont-ils utiles ?',
                        'explanation' => 'Les GPO permettent de déployer et appliquer des paramètres de configuration et de sécurité sur les utilisateurs et ordinateurs du domaine.',
                        'choices' => [
                            ['choice_text' => 'Appliquer centralement des politiques de configuration et de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les comptes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Créer des sauvegardes automatiques uniquement', 'is_correct' => false],
                            ['choice_text' => 'Changer automatiquement le matériel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des comptes de service séparés des comptes humains ?',
                        'explanation' => 'La séparation permet une meilleure gestion des permissions, de la rotation des secrets et de la traçabilité.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la sécurité, la traçabilité et la gestion des accès des services', 'is_correct' => true],
                            ['choice_text' => 'Donner des privilèges administrateur à toutes les applications', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de PowerShell Remoting ?',
                        'explanation' => 'Il permet d’exécuter des commandes et scripts sur des systèmes Windows distants de façon administrable.',
                        'choices' => [
                            ['choice_text' => 'Administrer des systèmes Windows distants par commandes ou scripts', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Modifier le matériel local uniquement', 'is_correct' => false],
                            ['choice_text' => 'Désactiver Active Directory', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les événements Windows sont-ils importants lors d’un incident ?',
                        'explanation' => 'Event Viewer et les journaux Windows permettent d’étudier les erreurs, authentifications et événements système.',
                        'choices' => [
                            ['choice_text' => 'Ils fournissent des informations utiles sur les erreurs et événements du système', 'is_correct' => true],
                            ['choice_text' => 'Ils corrigent automatiquement toutes les pannes', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Ils désactivent les services problématiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les permissions NTFS doivent-elles être planifiées selon les groupes ?',
                        'explanation' => 'Attribuer les permissions à des groupes facilite la gestion et réduit la complexité lorsque les utilisateurs changent de rôle.',
                        'choices' => [
                            ['choice_text' => 'Simplifier la gestion des accès et des changements d’utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les comptes individuels', 'is_correct' => false],
                            ['choice_text' => 'Garantir tous les utilisateurs administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les audits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi maintenir les serveurs Windows à jour ?',
                        'explanation' => 'Les mises à jour corrigent des vulnérabilités, bugs et problèmes de compatibilité.',
                        'choices' => [
                            ['choice_text' => 'Corriger les vulnérabilités et défauts connus', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement Active Directory', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les logs', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de donner des privilèges administrateur permanent aux utilisateurs Windows ?',
                        'explanation' => 'Les privilèges excessifs augmentent l’impact potentiel d’une erreur, d’un malware ou d’une compromission du compte.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact potentiel d’une compromission ou d’une erreur', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute installation légitime', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la gestion centralisée', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une meilleure performance CPU', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Intermediate — Virtualisation et conteneurs',
                'description' => 'Comprenez les principes de virtualisation, machines virtuelles et conteneurs dans l’administration moderne.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal avantage d’une machine virtuelle ?',
                        'explanation' => 'Une VM permet d’isoler plusieurs systèmes d’exploitation sur une même machine physique.',
                        'choices' => [
                            ['choice_text' => 'Exécuter plusieurs environnements isolés sur une même machine physique', 'is_correct' => true],
                            ['choice_text' => 'Supprimer totalement le matériel physique', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute consommation CPU', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité absolue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un hyperviseur ?',
                        'explanation' => 'L’hyperviseur gère les machines virtuelles et leur accès aux ressources physiques.',
                        'choices' => [
                            ['choice_text' => 'Gérer les machines virtuelles et leur accès aux ressources physiques', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs Linux uniquement', 'is_correct' => false],
                            ['choice_text' => 'Fournir uniquement DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence générale existe entre VM et conteneur ?',
                        'explanation' => 'Une VM virtualise généralement un système complet tandis qu’un conteneur partage le noyau de l’hôte avec d’autres conteneurs.',
                        'choices' => [
                            ['choice_text' => 'Les conteneurs partagent généralement le noyau de l’hôte, tandis qu’une VM virtualise un système complet', 'is_correct' => true],
                            ['choice_text' => 'Une VM partage toujours le même noyau que l’hôte', 'is_correct' => false],
                            ['choice_text' => 'Les conteneurs nécessitent toujours un OS invité complet', 'is_correct' => false],
                            ['choice_text' => 'Ils sont techniquement identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conteneurs démarrent-ils souvent plus rapidement que les VM ?',
                        'explanation' => 'Ils ne nécessitent généralement pas le démarrage d’un système d’exploitation invité complet.',
                        'choices' => [
                            ['choice_text' => 'Ils n’ont généralement pas besoin de démarrer un système d’exploitation invité complet', 'is_correct' => true],
                            ['choice_text' => 'Ils utilisent toujours plus de CPU', 'is_correct' => false],
                            ['choice_text' => 'Ils ne possèdent aucun processus', 'is_correct' => false],
                            ['choice_text' => 'Ils contiennent toujours moins de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les limites de ressources sont-elles importantes pour les conteneurs ?',
                        'explanation' => 'Sans limites, un conteneur peut consommer une quantité excessive de CPU ou mémoire et affecter les autres workloads.',
                        'choices' => [
                            ['choice_text' => 'Empêcher un workload de monopoliser les ressources de l’hôte', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’un conteneur ne peut jamais échouer', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des réseaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt principal d’une image de conteneur ?',
                        'explanation' => 'Une image représente un environnement logiciel versionné et reproductible servant à créer des conteneurs.',
                        'choices' => [
                            ['choice_text' => 'Fournir un environnement versionné et reproductible pour les conteneurs', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le matériel du serveur', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs physiques', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les images de conteneurs ?',
                        'explanation' => 'Une image peut contenir des paquets ou composants vulnérables hérités de sa base.',
                        'choices' => [
                            ['choice_text' => 'Identifier des vulnérabilités ou composants à risque avant déploiement', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence totale de bugs applicatifs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les packages', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les performances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données persistantes ne doivent-elles pas dépendre uniquement du filesystem éphémère d’un conteneur ?',
                        'explanation' => 'La durée de vie du conteneur peut être courte. Les données importantes doivent être stockées dans un mécanisme persistant.',
                        'choices' => [
                            ['choice_text' => 'Les données du conteneur peuvent disparaître lorsque le conteneur est recréé', 'is_correct' => true],
                            ['choice_text' => 'Les conteneurs ne peuvent jamais stocker de données', 'is_correct' => false],
                            ['choice_text' => 'Le stockage persistant ralentit toujours l’application', 'is_correct' => false],
                            ['choice_text' => 'Les volumes ne peuvent pas être sauvegardés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi isoler les workloads virtualisés ?',
                        'explanation' => 'L’isolation limite les interactions entre environnements et permet une meilleure gestion des ressources et des risques.',
                        'choices' => [
                            ['choice_text' => 'Limiter les interactions et les impacts entre workloads', 'is_correct' => true],
                            ['choice_text' => 'Garantir une absence totale de vulnérabilités', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de permissions', 'is_correct' => false],
                            ['choice_text' => 'Désactiver le réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner les configurations de déploiement des workloads ?',
                        'explanation' => 'Le versioning permet de reproduire, auditer et restaurer des configurations connues.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre les déploiements reproductibles et faciliter les rollbacks', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les images', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les changements', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Intermediate — Automatisation et configuration',
                'description' => 'Approfondissez le scripting, l’automatisation, la gestion de configuration et les pratiques reproductibles.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser un outil de gestion de configuration ?',
                        'explanation' => 'Ces outils permettent de décrire et appliquer de manière répétable la configuration des systèmes.',
                        'choices' => [
                            ['choice_text' => 'Automatiser et standardiser la configuration des systèmes', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun système ne tombera en panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe d’une approche déclarative en gestion de configuration ?',
                        'explanation' => 'On décrit l’état souhaité plutôt que chaque étape nécessaire pour y parvenir.',
                        'choices' => [
                            ['choice_text' => 'Décrire l’état final souhaité du système', 'is_correct' => true],
                            ['choice_text' => 'Décrire uniquement les commandes shell', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les fichiers de configuration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’idempotence est-elle importante dans l’automatisation ?',
                        'explanation' => 'Une opération idempotente peut être exécutée plusieurs fois sans produire d’effets indésirables supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de rejouer une tâche sans créer de changements incohérents', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute modification du système', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une disponibilité de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les erreurs réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi gérer les configurations dans le contrôle de version ?',
                        'explanation' => 'Le contrôle de version permet de suivre les changements, revenir en arrière et collaborer de manière contrôlée.',
                        'choices' => [
                            ['choice_text' => 'Suivre les changements, comparer les versions et faciliter les rollbacks', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs système', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets ne devraient-ils pas être stockés en clair dans un dépôt Git ?',
                        'explanation' => 'Les dépôts peuvent être copiés, partagés ou exposés. Un secret versionné reste difficile à considérer comme supprimé même après modification.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter leur exposition via l’historique et les copies du dépôt', 'is_correct' => true],
                            ['choice_text' => 'Parce que Git ne supporte pas les chaînes de caractères', 'is_correct' => false],
                            ['choice_text' => 'Parce que les secrets ne servent jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher tout déploiement automatisé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un script de déploiement automatisé ?',
                        'explanation' => 'Il permet de reproduire les étapes de déploiement et de réduire les erreurs manuelles.',
                        'choices' => [
                            ['choice_text' => 'Rendre les déploiements reproductibles et moins dépendants des actions manuelles', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence de bugs applicatifs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les rollbacks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scripts d’administration doivent-ils produire des logs ?',
                        'explanation' => 'Les logs permettent de savoir ce qui a été exécuté, quand et avec quel résultat.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’audit et le diagnostic des opérations automatisées', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la mémoire', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le contrôle de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester une automatisation avant de l’exécuter sur des centaines de serveurs ?',
                        'explanation' => 'Une erreur dans l’automatisation peut se propager rapidement à tous les systèmes.',
                        'choices' => [
                            ['choice_text' => 'Limiter le risque de propager une erreur à grande échelle', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la complexité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les tests ne sont utiles que pour le code applicatif', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute automatisation future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des environnements de test et de production séparés ?',
                        'explanation' => 'La séparation permet de valider les changements avant qu’ils ne touchent les systèmes réels.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’un changement non validé affecte la production', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les tests', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une absence totale d’erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi automatiser les tâches répétitives d’administration ?',
                        'explanation' => 'L’automatisation améliore la cohérence, réduit le temps d’exécution et diminue certaines erreurs humaines.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la cohérence et réduire les tâches manuelles répétitives', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute supervision humaine', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les administrateurs de modifier les systèmes', 'is_correct' => false],
                        ],
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