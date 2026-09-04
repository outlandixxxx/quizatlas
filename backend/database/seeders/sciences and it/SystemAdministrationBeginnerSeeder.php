<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SystemAdministrationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'System Administration Beginner — Operating System Fundamentals',
                'description' => 'Découvrez les fondamentaux des systèmes d’exploitation, utilisateurs, processus, fichiers et ressources système.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’un système d’exploitation ?',
                        'explanation' => 'Le système d’exploitation gère les ressources matérielles et fournit des services permettant aux applications de fonctionner.',
                        'choices' => [
                            ['choice_text' => 'Gérer les ressources matérielles et fournir des services aux applications', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les logiciels applicatifs', 'is_correct' => false],
                            ['choice_text' => 'Créer uniquement des fichiers texte', 'is_correct' => false],
                            ['choice_text' => 'Fournir uniquement une connexion Internet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un système d’exploitation courant pour les serveurs ?',
                        'explanation' => 'Linux est largement utilisé sur les serveurs et existe sous de nombreuses distributions.',
                        'choices' => [
                            ['choice_text' => 'Linux', 'is_correct' => true],
                            ['choice_text' => 'HTML', 'is_correct' => false],
                            ['choice_text' => 'CSS', 'is_correct' => false],
                            ['choice_text' => 'SQL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un processus ?',
                        'explanation' => 'Un processus est une instance d’un programme en cours d’exécution.',
                        'choices' => [
                            ['choice_text' => 'Une instance d’un programme en cours d’exécution', 'is_correct' => true],
                            ['choice_text' => 'Un fichier stocké uniquement sur disque', 'is_correct' => false],
                            ['choice_text' => 'Une carte réseau physique', 'is_correct' => false],
                            ['choice_text' => 'Une partition de disque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un système de fichiers ?',
                        'explanation' => 'Un système de fichiers organise la manière dont les données et fichiers sont stockés et retrouvés sur un support.',
                        'choices' => [
                            ['choice_text' => 'Un mécanisme qui organise et gère les fichiers sur un stockage', 'is_correct' => true],
                            ['choice_text' => 'Un protocole réseau', 'is_correct' => false],
                            ['choice_text' => 'Un logiciel antivirus uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un type de processeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de la mémoire RAM ?',
                        'explanation' => 'La RAM conserve temporairement les données et programmes utilisés par le système et les applications.',
                        'choices' => [
                            ['choice_text' => 'Stocker temporairement les données utilisées par les programmes', 'is_correct' => true],
                            ['choice_text' => 'Stocker définitivement tous les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Fournir une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le processeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel composant exécute principalement les instructions des programmes ?',
                        'explanation' => 'Le CPU, ou processeur, exécute les instructions et effectue les calculs demandés par les programmes.',
                        'choices' => [
                            ['choice_text' => 'Le processeur (CPU)', 'is_correct' => true],
                            ['choice_text' => 'Le disque dur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La RAM uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le câble réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un utilisateur système ?',
                        'explanation' => 'Un utilisateur système représente une identité utilisée pour se connecter et/ou exécuter des processus avec certaines permissions.',
                        'choices' => [
                            ['choice_text' => 'Une identité à laquelle sont associés des droits et permissions', 'is_correct' => true],
                            ['choice_text' => 'Un programme antivirus', 'is_correct' => false],
                            ['choice_text' => 'Une partition disque', 'is_correct' => false],
                            ['choice_text' => 'Un type de fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les permissions de fichiers sont-elles importantes ?',
                        'explanation' => 'Elles contrôlent qui peut lire, modifier ou exécuter les fichiers.',
                        'choices' => [
                            ['choice_text' => 'Contrôler les actions autorisées sur les fichiers', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la capacité du disque', 'is_correct' => false],
                            ['choice_text' => 'Créer des adresses IP', 'is_correct' => false],
                            ['choice_text' => 'Accélérer systématiquement le CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un administrateur système ?',
                        'explanation' => 'L’administrateur système installe, configure, surveille, sécurise et maintient les systèmes informatiques.',
                        'choices' => [
                            ['choice_text' => 'Installer, configurer, maintenir et sécuriser les systèmes', 'is_correct' => true],
                            ['choice_text' => 'Développer uniquement des sites Web', 'is_correct' => false],
                            ['choice_text' => 'Créer uniquement des bases de données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi redémarrer un système peut-il parfois résoudre un problème temporaire ?',
                        'explanation' => 'Un redémarrage peut arrêter des processus bloqués et réinitialiser certains états temporaires.',
                        'choices' => [
                            ['choice_text' => 'Il peut arrêter des processus problématiques et réinitialiser certains états', 'is_correct' => true],
                            ['choice_text' => 'Il corrige automatiquement toutes les erreurs matérielles', 'is_correct' => false],
                            ['choice_text' => 'Il augmente définitivement la RAM', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toujours tous les fichiers inutiles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Beginner — Linux Command Line',
                'description' => 'Apprenez les commandes Linux essentielles pour naviguer, gérer les fichiers et administrer un système.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle commande affiche le répertoire courant sous Linux ?',
                        'explanation' => 'La commande pwd affiche le chemin absolu du répertoire de travail courant.',
                        'choices' => [
                            ['choice_text' => 'pwd', 'is_correct' => true],
                            ['choice_text' => 'where', 'is_correct' => false],
                            ['choice_text' => 'path', 'is_correct' => false],
                            ['choice_text' => 'current', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de lister les fichiers d’un répertoire ?',
                        'explanation' => 'La commande ls affiche le contenu d’un répertoire.',
                        'choices' => [
                            ['choice_text' => 'ls', 'is_correct' => true],
                            ['choice_text' => 'listdir', 'is_correct' => false],
                            ['choice_text' => 'showfiles', 'is_correct' => false],
                            ['choice_text' => 'dirlist', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de changer de répertoire ?',
                        'explanation' => 'La commande cd modifie le répertoire de travail courant.',
                        'choices' => [
                            ['choice_text' => 'cd', 'is_correct' => true],
                            ['choice_text' => 'move', 'is_correct' => false],
                            ['choice_text' => 'switch', 'is_correct' => false],
                            ['choice_text' => 'goto', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de créer un nouveau répertoire ?',
                        'explanation' => 'mkdir signifie make directory et crée un nouveau répertoire.',
                        'choices' => [
                            ['choice_text' => 'mkdir', 'is_correct' => true],
                            ['choice_text' => 'newdir', 'is_correct' => false],
                            ['choice_text' => 'createdir', 'is_correct' => false],
                            ['choice_text' => 'mkfolder', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de créer rapidement un fichier vide ?',
                        'explanation' => 'La commande touch peut créer un fichier vide s’il n’existe pas.',
                        'choices' => [
                            ['choice_text' => 'touch', 'is_correct' => true],
                            ['choice_text' => 'newfile', 'is_correct' => false],
                            ['choice_text' => 'mkfile', 'is_correct' => false],
                            ['choice_text' => 'create', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de copier un fichier sous Linux ?',
                        'explanation' => 'La commande cp copie des fichiers ou des répertoires.',
                        'choices' => [
                            ['choice_text' => 'cp', 'is_correct' => true],
                            ['choice_text' => 'copyfile', 'is_correct' => false],
                            ['choice_text' => 'clone', 'is_correct' => false],
                            ['choice_text' => 'duplicate', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de déplacer ou renommer un fichier ?',
                        'explanation' => 'mv permet de déplacer un fichier ou de le renommer.',
                        'choices' => [
                            ['choice_text' => 'mv', 'is_correct' => true],
                            ['choice_text' => 'movefile', 'is_correct' => false],
                            ['choice_text' => 'renameonly', 'is_correct' => false],
                            ['choice_text' => 'shift', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de supprimer un fichier ?',
                        'explanation' => 'rm supprime les fichiers et, avec les options appropriées, peut également supprimer des répertoires.',
                        'choices' => [
                            ['choice_text' => 'rm', 'is_correct' => true],
                            ['choice_text' => 'deletefile', 'is_correct' => false],
                            ['choice_text' => 'erase', 'is_correct' => false],
                            ['choice_text' => 'removefileonly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet d’afficher le contenu d’un fichier texte directement dans le terminal ?',
                        'explanation' => 'cat affiche le contenu du ou des fichiers fournis.',
                        'choices' => [
                            ['choice_text' => 'cat', 'is_correct' => true],
                            ['choice_text' => 'show', 'is_correct' => false],
                            ['choice_text' => 'readfile', 'is_correct' => false],
                            ['choice_text' => 'openfile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de rechercher du texte dans des fichiers ?',
                        'explanation' => 'grep recherche des motifs textuels dans les fichiers ou dans la sortie d’autres commandes.',
                        'choices' => [
                            ['choice_text' => 'grep', 'is_correct' => true],
                            ['choice_text' => 'findtextonly', 'is_correct' => false],
                            ['choice_text' => 'searchfile', 'is_correct' => false],
                            ['choice_text' => 'scantext', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Beginner — Users, Groups and Permissions',
                'description' => 'Découvrez la gestion des comptes utilisateurs, groupes et permissions sous Linux.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle commande permet de créer un utilisateur Linux sur de nombreuses distributions ?',
                        'explanation' => 'useradd permet de créer un compte utilisateur.',
                        'choices' => [
                            ['choice_text' => 'useradd', 'is_correct' => true],
                            ['choice_text' => 'newuseronly', 'is_correct' => false],
                            ['choice_text' => 'mkuserfile', 'is_correct' => false],
                            ['choice_text' => 'createaccount', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet généralement de modifier le mot de passe d’un utilisateur ?',
                        'explanation' => 'passwd permet de définir ou modifier le mot de passe d’un compte.',
                        'choices' => [
                            ['choice_text' => 'passwd', 'is_correct' => true],
                            ['choice_text' => 'passwordset', 'is_correct' => false],
                            ['choice_text' => 'setpassonly', 'is_correct' => false],
                            ['choice_text' => 'changepwdfile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un groupe Linux ?',
                        'explanation' => 'Les groupes facilitent la gestion collective des permissions pour plusieurs utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Regrouper des utilisateurs pour gérer plus facilement les permissions', 'is_correct' => true],
                            ['choice_text' => 'Stocker les fichiers système', 'is_correct' => false],
                            ['choice_text' => 'Fournir une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le noyau Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle permission indique le droit de lecture sur un fichier Linux ?',
                        'explanation' => 'La lettre r représente read, donc le droit de lire le contenu.',
                        'choices' => [
                            ['choice_text' => 'r', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'w', 'is_correct' => false],
                            ['choice_text' => 'l', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle permission indique le droit d’écriture ?',
                        'explanation' => 'La lettre w représente write.',
                        'choices' => [
                            ['choice_text' => 'w', 'is_correct' => true],
                            ['choice_text' => 'r', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle permission indique le droit d’exécution ?',
                        'explanation' => 'La lettre x représente execute.',
                        'choices' => [
                            ['choice_text' => 'x', 'is_correct' => true],
                            ['choice_text' => 'r', 'is_correct' => false],
                            ['choice_text' => 'w', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de modifier les permissions d’un fichier ?',
                        'explanation' => 'chmod modifie les permissions d’accès d’un fichier ou répertoire.',
                        'choices' => [
                            ['choice_text' => 'chmod', 'is_correct' => true],
                            ['choice_text' => 'chperm', 'is_correct' => false],
                            ['choice_text' => 'setaccess', 'is_correct' => false],
                            ['choice_text' => 'permupdate', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de modifier le propriétaire d’un fichier ?',
                        'explanation' => 'chown permet de changer le propriétaire et éventuellement le groupe associé à un fichier.',
                        'choices' => [
                            ['choice_text' => 'chown', 'is_correct' => true],
                            ['choice_text' => 'ownerchange', 'is_correct' => false],
                            ['choice_text' => 'setowneronly', 'is_correct' => false],
                            ['choice_text' => 'ownfile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser le principe du moindre privilège ?',
                        'explanation' => 'Il consiste à donner à un utilisateur ou processus uniquement les permissions nécessaires à sa tâche.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact potentiel d’une erreur ou d’une compromission', 'is_correct' => true],
                            ['choice_text' => 'Donner les droits administrateur à tout le monde', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les groupes', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les fichiers publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes administrateurs doivent-ils être protégés particulièrement ?',
                        'explanation' => 'Ils disposent de privilèges élevés et une compromission peut affecter largement le système.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une compromission peut donner un contrôle important sur le système', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils n’ont aucune permission', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne peuvent pas être attaqués', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils servent uniquement à lire les fichiers', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Beginner — Services and Processes',
                'description' => 'Apprenez à comprendre, surveiller et gérer les services et processus système.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un service système ?',
                        'explanation' => 'Un service est généralement un programme exécuté en arrière-plan pour fournir une fonctionnalité au système ou aux utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Un programme fonctionnant généralement en arrière-plan pour fournir une fonctionnalité', 'is_correct' => true],
                            ['choice_text' => 'Un fichier image', 'is_correct' => false],
                            ['choice_text' => 'Une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Un disque physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet souvent d’inspecter les services avec systemd ?',
                        'explanation' => 'systemctl est l’outil principal utilisé pour interagir avec les services gérés par systemd.',
                        'choices' => [
                            ['choice_text' => 'systemctl', 'is_correct' => true],
                            ['choice_text' => 'servicecheck', 'is_correct' => false],
                            ['choice_text' => 'servicectlonly', 'is_correct' => false],
                            ['choice_text' => 'daemonctlfile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement "active" pour un service systemd ?',
                        'explanation' => 'Un service actif est généralement en cours d’exécution ou dans un état actif selon son unité.',
                        'choices' => [
                            ['choice_text' => 'Le service est actuellement dans un état actif', 'is_correct' => true],
                            ['choice_text' => 'Le service est définitivement supprimé', 'is_correct' => false],
                            ['choice_text' => 'Le service est toujours désactivé au démarrage', 'is_correct' => false],
                            ['choice_text' => 'Le service n’existe pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet d’afficher les processus sous Linux ?',
                        'explanation' => 'ps permet d’afficher les processus en cours selon différentes options.',
                        'choices' => [
                            ['choice_text' => 'ps', 'is_correct' => true],
                            ['choice_text' => 'procshow', 'is_correct' => false],
                            ['choice_text' => 'processlistonly', 'is_correct' => false],
                            ['choice_text' => 'taskviewlinux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet d’observer les processus et leur consommation de ressources en temps réel ?',
                        'explanation' => 'top affiche dynamiquement les processus et diverses informations sur CPU et mémoire.',
                        'choices' => [
                            ['choice_text' => 'top', 'is_correct' => true],
                            ['choice_text' => 'liveproc', 'is_correct' => false],
                            ['choice_text' => 'watchprocessesonly', 'is_correct' => false],
                            ['choice_text' => 'resourceview', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un PID ?',
                        'explanation' => 'PID signifie Process ID et identifie un processus de manière unique pendant son exécution.',
                        'choices' => [
                            ['choice_text' => 'Un identifiant de processus', 'is_correct' => true],
                            ['choice_text' => 'Un identifiant de fichier', 'is_correct' => false],
                            ['choice_text' => 'Une adresse MAC', 'is_correct' => false],
                            ['choice_text' => 'Un type de permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet d’arrêter un processus à partir de son PID ?',
                        'explanation' => 'kill envoie un signal à un processus identifié par son PID.',
                        'choices' => [
                            ['choice_text' => 'kill', 'is_correct' => true],
                            ['choice_text' => 'stopprocess', 'is_correct' => false],
                            ['choice_text' => 'terminatepidonly', 'is_correct' => false],
                            ['choice_text' => 'endtask', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de tuer arbitrairement un processus système ?',
                        'explanation' => 'Certains processus sont essentiels au fonctionnement du système ou de services critiques.',
                        'choices' => [
                            ['choice_text' => 'Parce que cela peut interrompre un service ou déstabiliser le système', 'is_correct' => true],
                            ['choice_text' => 'Parce que les processus sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que kill ne fonctionne jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les processus appartiennent à l’utilisateur courant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller l’utilisation CPU des processus ?',
                        'explanation' => 'Une utilisation excessive peut indiquer une charge importante, un processus défaillant ou un problème de performance.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les processus qui consomment anormalement le processeur', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la RAM', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier les permissions', 'is_correct' => false],
                            ['choice_text' => 'Pour créer des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi consulter les services au démarrage d’un serveur ?',
                        'explanation' => 'Les services démarrés automatiquement doivent être nécessaires et maîtrisés afin d’éviter une consommation inutile ou une surface d’attaque excessive.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier quels composants démarrent automatiquement et sont nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les services', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver le système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier les adresses IP', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Beginner — Networking Basics',
                'description' => 'Découvrez les bases de l’administration réseau : IP, DNS, ports, interfaces et connectivité.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une adresse IP ?',
                        'explanation' => 'Une adresse IP identifie une interface ou un hôte sur un réseau IP.',
                        'choices' => [
                            ['choice_text' => 'Une adresse logique utilisée pour identifier une interface sur un réseau IP', 'is_correct' => true],
                            ['choice_text' => 'Un mot de passe système', 'is_correct' => false],
                            ['choice_text' => 'Un nom de fichier', 'is_correct' => false],
                            ['choice_text' => 'Un type de processeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole traduit généralement un nom de domaine en adresse IP ?',
                        'explanation' => 'DNS permet de résoudre des noms tels que example.com vers des adresses IP.',
                        'choices' => [
                            ['choice_text' => 'DNS', 'is_correct' => true],
                            ['choice_text' => 'SSH', 'is_correct' => false],
                            ['choice_text' => 'FTP', 'is_correct' => false],
                            ['choice_text' => 'SMTP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel outil est couramment utilisé pour tester simplement la connectivité vers une destination ?',
                        'explanation' => 'ping envoie des requêtes ICMP Echo et permet d’observer si une destination répond.',
                        'choices' => [
                            ['choice_text' => 'ping', 'is_correct' => true],
                            ['choice_text' => 'connecttestonly', 'is_correct' => false],
                            ['choice_text' => 'netcheckfile', 'is_correct' => false],
                            ['choice_text' => 'routeping', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un port réseau ?',
                        'explanation' => 'Un port identifie un point logique utilisé par les protocoles de transport pour distinguer différents services.',
                        'choices' => [
                            ['choice_text' => 'Un numéro logique permettant d’identifier un service ou une communication', 'is_correct' => true],
                            ['choice_text' => 'Une prise électrique du serveur', 'is_correct' => false],
                            ['choice_text' => 'Une adresse IP complète', 'is_correct' => false],
                            ['choice_text' => 'Un type de câble', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole est couramment utilisé pour administrer un serveur Linux à distance de manière sécurisée ?',
                        'explanation' => 'SSH fournit une connexion distante chiffrée pour l’administration des systèmes.',
                        'choices' => [
                            ['choice_text' => 'SSH', 'is_correct' => true],
                            ['choice_text' => 'HTTP uniquement', 'is_correct' => false],
                            ['choice_text' => 'FTP uniquement', 'is_correct' => false],
                            ['choice_text' => 'Telnet uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi SSH est-il préférable à Telnet pour l’administration distante ?',
                        'explanation' => 'SSH chiffre la session alors que Telnet transmet historiquement les communications sans ce niveau de protection.',
                        'choices' => [
                            ['choice_text' => 'SSH chiffre la communication d’administration', 'is_correct' => true],
                            ['choice_text' => 'SSH ne nécessite jamais d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Telnet chiffre toujours toutes les données', 'is_correct' => false],
                            ['choice_text' => 'SSH ne fonctionne que localement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel fichier contient souvent la configuration locale des noms d’hôtes sous Linux ?',
                        'explanation' => '/etc/hosts permet de définir localement des correspondances entre noms et adresses IP.',
                        'choices' => [
                            ['choice_text' => '/etc/hosts', 'is_correct' => true],
                            ['choice_text' => '/etc/network.txt', 'is_correct' => false],
                            ['choice_text' => '/var/hosts.conf', 'is_correct' => false],
                            ['choice_text' => '/home/hosts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une passerelle par défaut ?',
                        'explanation' => 'La passerelle par défaut est généralement le routeur utilisé pour atteindre des réseaux qui ne sont pas directement locaux.',
                        'choices' => [
                            ['choice_text' => 'Permettre d’atteindre des réseaux extérieurs au réseau local', 'is_correct' => true],
                            ['choice_text' => 'Stocker les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Remplacer DNS', 'is_correct' => false],
                            ['choice_text' => 'Identifier les fichiers système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande Linux est couramment utilisée pour afficher les interfaces réseau et leurs adresses ?',
                        'explanation' => 'ip addr affiche les interfaces réseau et leurs adresses IP.',
                        'choices' => [
                            ['choice_text' => 'ip addr', 'is_correct' => true],
                            ['choice_text' => 'showiponly', 'is_correct' => false],
                            ['choice_text' => 'netdisplayfile', 'is_correct' => false],
                            ['choice_text' => 'addrlist', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ports inutiles doivent-ils être fermés sur un serveur ?',
                        'explanation' => 'Réduire les services accessibles diminue la surface d’exposition du système.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire la surface d’attaque accessible depuis le réseau', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la RAM', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer DNS', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute connexion légitime', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Beginner — Storage and Filesystems',
                'description' => 'Apprenez les bases de la gestion des disques, partitions, systèmes de fichiers et espaces de stockage.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une partition ?',
                        'explanation' => 'Une partition est une subdivision logique d’un disque de stockage.',
                        'choices' => [
                            ['choice_text' => 'Une subdivision logique d’un disque', 'is_correct' => true],
                            ['choice_text' => 'Un type de fichier', 'is_correct' => false],
                            ['choice_text' => 'Une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Un processus système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande affiche l’espace disque disponible sur les systèmes Linux ?',
                        'explanation' => 'df affiche l’utilisation et l’espace disponible des systèmes de fichiers montés.',
                        'choices' => [
                            ['choice_text' => 'df', 'is_correct' => true],
                            ['choice_text' => 'diskfreeonly', 'is_correct' => false],
                            ['choice_text' => 'spacecheck', 'is_correct' => false],
                            ['choice_text' => 'storageinfo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de connaître la taille occupée par un répertoire ?',
                        'explanation' => 'du permet d’estimer l’espace disque utilisé par des fichiers et répertoires.',
                        'choices' => [
                            ['choice_text' => 'du', 'is_correct' => true],
                            ['choice_text' => 'dirsizeonly', 'is_correct' => false],
                            ['choice_text' => 'folderusage', 'is_correct' => false],
                            ['choice_text' => 'sizecheck', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un point de montage ?',
                        'explanation' => 'Un point de montage est un répertoire dans lequel un système de fichiers est rendu accessible dans l’arborescence.',
                        'choices' => [
                            ['choice_text' => 'Un répertoire auquel un système de fichiers est attaché', 'is_correct' => true],
                            ['choice_text' => 'Une adresse IP du disque', 'is_correct' => false],
                            ['choice_text' => 'Un type de permission', 'is_correct' => false],
                            ['choice_text' => 'Un processus de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet généralement de monter un système de fichiers ?',
                        'explanation' => 'La commande mount attache un système de fichiers à un point de montage.',
                        'choices' => [
                            ['choice_text' => 'mount', 'is_correct' => true],
                            ['choice_text' => 'attachfs', 'is_correct' => false],
                            ['choice_text' => 'diskmountonly', 'is_correct' => false],
                            ['choice_text' => 'filesystemup', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque principal d’un disque presque entièrement rempli ?',
                        'explanation' => 'Le système ou les applications peuvent ne plus pouvoir écrire de nouveaux fichiers, logs ou données temporaires.',
                        'choices' => [
                            ['choice_text' => 'Des applications ou services peuvent échouer faute d’espace disponible', 'is_correct' => true],
                            ['choice_text' => 'Le CPU devient automatiquement plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Les permissions changent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'DNS devient plus performant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs peuvent-ils remplir un disque ?',
                        'explanation' => 'Les journaux peuvent croître continuellement s’ils ne sont pas gérés, archivés ou supprimés selon une politique adaptée.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent croître continuellement et consommer de l’espace', 'is_correct' => true],
                            ['choice_text' => 'Les logs sont toujours stockés uniquement en RAM', 'is_correct' => false],
                            ['choice_text' => 'Les logs ne prennent jamais d’espace', 'is_correct' => false],
                            ['choice_text' => 'Ils augmentent la taille du CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de la swap sous Linux ?',
                        'explanation' => 'La swap fournit un espace disque pouvant être utilisé pour certaines pages mémoire lorsque la RAM est sous pression.',
                        'choices' => [
                            ['choice_text' => 'Fournir un espace disque utilisable pour certaines données mémoire', 'is_correct' => true],
                            ['choice_text' => 'Remplacer définitivement la RAM', 'is_correct' => false],
                            ['choice_text' => 'Stocker les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sauvegardes sont-elles différentes de la simple réplication ?',
                        'explanation' => 'Une réplication reproduit souvent les changements tandis qu’une sauvegarde permet de conserver des points historiques pouvant être restaurés.',
                        'choices' => [
                            ['choice_text' => 'Une sauvegarde peut conserver des versions historiques restaurables', 'is_correct' => true],
                            ['choice_text' => 'La réplication ne copie jamais de données', 'is_correct' => false],
                            ['choice_text' => 'Les sauvegardes ne contiennent aucun fichier', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toujours exactement identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester régulièrement les restaurations de sauvegarde ?',
                        'explanation' => 'Une sauvegarde utile est une sauvegarde qui peut effectivement être restaurée lorsque nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les données peuvent réellement être restaurées', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les sauvegardes anciennes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la capacité disque', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute sauvegarde future', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Beginner — Monitoring and Troubleshooting',
                'description' => 'Apprenez les bases de la surveillance système et d’une méthode structurée de dépannage.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le monitoring est-il important sur un serveur ?',
                        'explanation' => 'Le monitoring permet de détecter les anomalies de performance, disponibilité et utilisation des ressources.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les problèmes et suivre l’état du système', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour créer automatiquement des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quels sont des indicateurs classiques de performance système ?',
                        'explanation' => 'CPU, mémoire, disque et réseau sont des ressources essentielles à surveiller.',
                        'choices' => [
                            ['choice_text' => 'CPU, mémoire, stockage et réseau', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur du terminal', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les noms des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les utilisateurs connectés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs système sont-ils utiles lors d’un incident ?',
                        'explanation' => 'Les logs fournissent des informations sur les événements, erreurs et changements survenus sur le système.',
                        'choices' => [
                            ['choice_text' => 'Ils fournissent des indices sur les événements et erreurs', 'is_correct' => true],
                            ['choice_text' => 'Ils corrigent automatiquement les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent que le système fonctionne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une bonne première étape lorsqu’un serveur devient lent ?',
                        'explanation' => 'Il faut d’abord observer les ressources et identifier la nature du problème avant de modifier le système.',
                        'choices' => [
                            ['choice_text' => 'Mesurer CPU, mémoire, disque et processus pour identifier la cause', 'is_correct' => true],
                            ['choice_text' => 'Redémarrer immédiatement sans diagnostic', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Changer toutes les permissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier l’espace disque lors d’un problème applicatif ?',
                        'explanation' => 'Un manque d’espace peut empêcher une application d’écrire des logs, fichiers temporaires ou données.',
                        'choices' => [
                            ['choice_text' => 'Un disque plein peut empêcher certaines opérations d’écriture', 'is_correct' => true],
                            ['choice_text' => 'Le disque influence directement l’adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Le stockage n’a aucun impact sur les applications', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toujours la RAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier la mémoire RAM lors d’un ralentissement ?',
                        'explanation' => 'Une forte pression mémoire peut entraîner l’utilisation de swap et dégrader les performances.',
                        'choices' => [
                            ['choice_text' => 'Une pression mémoire peut provoquer une dégradation des performances', 'is_correct' => true],
                            ['choice_text' => 'La RAM ne concerne que le stockage permanent', 'is_correct' => false],
                            ['choice_text' => 'La RAM détermine directement le DNS', 'is_correct' => false],
                            ['choice_text' => 'La mémoire ne peut jamais être saturée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier si un service est actif lorsqu’une application ne répond pas ?',
                        'explanation' => 'L’application peut dépendre d’un service qui a cessé de fonctionner.',
                        'choices' => [
                            ['choice_text' => 'Le service requis peut être arrêté ou en échec', 'is_correct' => true],
                            ['choice_text' => 'Tous les services sont toujours actifs', 'is_correct' => false],
                            ['choice_text' => 'Les services n’ont aucun rapport avec les applications', 'is_correct' => false],
                            ['choice_text' => 'Un service ne peut jamais échouer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester la résolution DNS dans un diagnostic réseau ?',
                        'explanation' => 'Une application peut fonctionner avec une adresse IP mais échouer si les noms ne sont pas correctement résolus.',
                        'choices' => [
                            ['choice_text' => 'Une erreur DNS peut empêcher les applications de trouver leurs serveurs', 'is_correct' => true],
                            ['choice_text' => 'DNS ne concerne que les imprimantes', 'is_correct' => false],
                            ['choice_text' => 'DNS remplace les ports réseau', 'is_correct' => false],
                            ['choice_text' => 'DNS ne peut jamais tomber en panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi reproduire un problème avant de le corriger peut-il être utile ?',
                        'explanation' => 'Reproduire le problème aide à confirmer sa cause et à vérifier ensuite que la correction fonctionne.',
                        'choices' => [
                            ['choice_text' => 'Pour confirmer la cause et vérifier l’efficacité de la correction', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre l’incident plus complexe', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le besoin de monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les incidents système ?',
                        'explanation' => 'La documentation permet de conserver les causes, actions et solutions afin d’accélérer les futurs diagnostics.',
                        'choices' => [
                            ['choice_text' => 'Pour capitaliser sur les causes et solutions des incidents', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les problèmes futurs automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute maintenance', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les administrateurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Beginner — Security Fundamentals',
                'description' => 'Découvrez les principes essentiels de sécurité pour l’administration des systèmes.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principe du moindre privilège ?',
                        'explanation' => 'Chaque utilisateur ou service reçoit uniquement les permissions nécessaires à son fonctionnement.',
                        'choices' => [
                            ['choice_text' => 'Accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Donner tous les droits aux utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les permissions', 'is_correct' => false],
                            ['choice_text' => 'Partager les comptes administrateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer régulièrement les mises à jour de sécurité ?',
                        'explanation' => 'Les mises à jour corrigent souvent des vulnérabilités et autres défauts du logiciel.',
                        'choices' => [
                            ['choice_text' => 'Pour corriger les vulnérabilités et défauts connus', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le stockage', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des mots de passe forts et uniques ?',
                        'explanation' => 'Des mots de passe uniques et difficiles à deviner réduisent le risque qu’une compromission d’un compte affecte plusieurs systèmes.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque de compromission et de réutilisation de mots de passe compromis', 'is_correct' => true],
                            ['choice_text' => 'Pour accélérer le processeur', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les permissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’authentification multifactorielle est-elle utile ?',
                        'explanation' => 'Elle ajoute un facteur supplémentaire en plus du mot de passe, ce qui réduit certains risques liés au vol de celui-ci.',
                        'choices' => [
                            ['choice_text' => 'Ajouter une couche de protection supplémentaire au mot de passe', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les comptes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’un mot de passe ne sera jamais volé', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter les services exposés sur un serveur ?',
                        'explanation' => 'Chaque service réseau accessible ajoute potentiellement une surface d’attaque.',
                        'choices' => [
                            ['choice_text' => 'Réduire la surface d’attaque', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le nombre de ports ouverts', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le réseau', 'is_correct' => false],
                            ['choice_text' => 'Éviter les mises à jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un pare-feu ?',
                        'explanation' => 'Un pare-feu contrôle le trafic réseau selon des règles définies.',
                        'choices' => [
                            ['choice_text' => 'Contrôler le trafic réseau selon des règles', 'is_correct' => true],
                            ['choice_text' => 'Stocker les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la RAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi désactiver un service inutile sur un serveur ?',
                        'explanation' => 'Un service inutile consomme parfois des ressources et peut exposer des fonctionnalités supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Réduire la consommation inutile et la surface d’exposition', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher le système de démarrer', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les comptes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs de sécurité doivent-ils être protégés ?',
                        'explanation' => 'Les logs peuvent contenir des informations importantes sur les activités et incidents et doivent conserver leur intégrité.',
                        'choices' => [
                            ['choice_text' => 'Pour préserver leur confidentialité et leur intégrité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils ne servent jamais au diagnostic', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la vitesse du réseau', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les alertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des comptes individuels plutôt qu’un compte partagé ?',
                        'explanation' => 'Les comptes individuels permettent une meilleure traçabilité et une gestion plus précise des permissions.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la traçabilité et le contrôle des accès', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux', 'is_correct' => false],
                            ['choice_text' => 'Permettre à tous les utilisateurs d’être administrateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sauvegardes sont-elles aussi une mesure de sécurité ?',
                        'explanation' => 'Elles permettent de restaurer les données après certaines attaques, suppressions accidentelles ou incidents système.',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de restaurer les données après certains incidents ou attaques', 'is_correct' => true],
                            ['choice_text' => 'Elles empêchent toutes les attaques', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent le pare-feu', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment les vulnérabilités', 'is_correct' => false],
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