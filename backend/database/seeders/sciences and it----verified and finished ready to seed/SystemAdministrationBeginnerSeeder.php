<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemAdministrationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Se repérer et manipuler des fichiers sous Linux',
                'description' => 'Choisir des commandes adaptées sans confondre le chemin, le contenu et l’emplacement des fichiers.',
                'difficulty' => 'Beginner',
                'duration' => 11,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Le terminal est ouvert dans un dossier inconnu. Quelle commande affiche son chemin courant ?',
                        'marks' => 1,
                        'explanation' => 'pwd affiche le répertoire de travail courant ; ls liste son contenu, whoami indique l’utilisateur et hostname le nom de machine.',
                        'choices' => [
                            ['text' => 'pwd', 'is_correct' => true],
                            ['text' => 'ls', 'is_correct' => false],
                            ['text' => 'whoami', 'is_correct' => false],
                            ['text' => 'hostname', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script doit désigner le même fichier quel que soit son répertoire de départ. Quel chemin convient ?',
                        'marks' => 1,
                        'explanation' => 'Un chemin commençant par / est absolu. Les autres chemins proposés dépendent du répertoire courant.',
                        'choices' => [
                            ['text' => '/etc/app/config.ini', 'is_correct' => true],
                            ['text' => 'etc/app/config.ini', 'is_correct' => false],
                            ['text' => './config.ini', 'is_correct' => false],
                            ['text' => '../app/config.ini', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un dossier contient un fichier nommé .env qui n’apparaît pas dans la liste habituelle. Quelle commande l’inclut ?',
                        'marks' => 1,
                        'explanation' => 'Avec GNU ls, -a inclut les noms commençant par un point. Les autres options changent le détail ou l’ordre, sans afficher à elles seules ces noms.',
                        'choices' => [
                            ['text' => 'ls -a', 'is_correct' => true],
                            ['text' => 'ls -l', 'is_correct' => false],
                            ['text' => 'ls -t', 'is_correct' => false],
                            ['text' => 'ls -r', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le dossier /tmp/atelier existe, mais ses sous-dossiers rapports/2026 n’existent pas encore. Quelle commande les crée en une fois ?',
                        'marks' => 1,
                        'explanation' => 'mkdir -p crée les répertoires parents manquants ; touch ne crée pas une arborescence de dossiers.',
                        'choices' => [
                            ['text' => 'mkdir -p /tmp/atelier/rapports/2026', 'is_correct' => true],
                            ['text' => 'mkdir /tmp/atelier/rapports/2026', 'is_correct' => false],
                            ['text' => 'cd /tmp/atelier/rapports/2026', 'is_correct' => false],
                            ['text' => 'touch /tmp/atelier/rapports/2026', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le fichier notes.txt n’existe pas et doit être créé vide. Quelle commande simple répond à ce besoin ?',
                        'marks' => 1,
                        'explanation' => 'touch crée un fichier absent. S’il existe déjà, cette commande modifie ses horodatages et ne vide pas son contenu.',
                        'choices' => [
                            ['text' => 'touch notes.txt', 'is_correct' => true],
                            ['text' => 'cat notes.txt', 'is_correct' => false],
                            ['text' => 'less notes.txt', 'is_correct' => false],
                            ['text' => 'rm notes.txt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un administrateur veut produire config.bak à partir de config.ini en conservant l’original. Quelle commande convient ?',
                        'marks' => 1,
                        'explanation' => 'cp crée une copie distincte ; mv déplace ou renomme l’original et un lien symbolique n’est pas une copie indépendante.',
                        'choices' => [
                            ['text' => 'cp config.ini config.bak', 'is_correct' => true],
                            ['text' => 'mv config.ini config.bak', 'is_correct' => false],
                            ['text' => 'rm config.ini config.bak', 'is_correct' => false],
                            ['text' => 'ln -s config.ini config.bak', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le fichier brouillon.txt doit simplement être renommé en rapport.txt dans le même dossier. Quelle commande convient ?',
                        'marks' => 1,
                        'explanation' => 'mv change le nom ou l’emplacement. cp conserverait aussi le fichier initial.',
                        'choices' => [
                            ['text' => 'mv brouillon.txt rapport.txt', 'is_correct' => true],
                            ['text' => 'cp brouillon.txt rapport.txt', 'is_correct' => false],
                            ['text' => 'mkdir rapport.txt', 'is_correct' => false],
                            ['text' => 'cat brouillon.txt rapport.txt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un journal est volumineux et doit être parcouru page par page. Quel outil est adapté ?',
                        'marks' => 1,
                        'explanation' => 'less permet une consultation interactive avec navigation ; cat déverse le contenu et les deux autres commandes n’offrent pas ce parcours.',
                        'choices' => [
                            ['text' => 'less application.log', 'is_correct' => true],
                            ['text' => 'cat application.log', 'is_correct' => false],
                            ['text' => 'wc -l application.log', 'is_correct' => false],
                            ['text' => 'head -n 1 application.log', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Il faut retrouver les lignes contenant littéralement ERROR avec leur numéro dans app.log. Quelle commande répond précisément au besoin ?',
                        'marks' => 1,
                        'explanation' => 'grep -F recherche une chaîne littérale et -n affiche les numéros de ligne ; -v sélectionnerait les lignes qui ne correspondent pas.',
                        'choices' => [
                            ['text' => 'grep -nF \'ERROR\' app.log', 'is_correct' => true],
                            ['text' => 'grep -vF \'ERROR\' app.log', 'is_correct' => false],
                            ['text' => 'wc -l app.log', 'is_correct' => false],
                            ['text' => 'tail -n 10 app.log', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nom d’un fichier contient un espace : rapport final.txt. Quelle commande le copie correctement vers /tmp ?',
                        'marks' => 1,
                        'explanation' => 'Les guillemets regroupent le nom en un seul argument ; sans eux, le shell le découpe. mv déplacerait le fichier.',
                        'choices' => [
                            ['text' => 'cp \'rapport final.txt\' /tmp/', 'is_correct' => true],
                            ['text' => 'cp rapport final.txt /tmp/', 'is_correct' => false],
                            ['text' => 'cp rapport_final.txt /tmp/', 'is_correct' => false],
                            ['text' => 'mv \'rapport final.txt\' /tmp/', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptes, groupes et droits d’accès',
                'description' => 'Lire les permissions et accorder des accès ciblés.',
                'difficulty' => 'Beginner',
                'duration' => 13,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un opérateur doit connaître son identifiant, son groupe principal et ses groupes supplémentaires. Quelle commande fournit ces informations ?',
                        'marks' => 1,
                        'explanation' => 'id affiche l’identité Unix et les groupes de l’utilisateur courant, ou d’un utilisateur indiqué.',
                        'choices' => [
                            ['text' => 'id', 'is_correct' => true],
                            ['text' => 'pwd', 'is_correct' => false],
                            ['text' => 'uname', 'is_correct' => false],
                            ['text' => 'df', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fichier ordinaire appartient à alice:compta et possède le mode 640, sans ACL supplémentaire. Quels accès ce mode accorde-t-il ?',
                        'marks' => 1,
                        'explanation' => 'En notation octale, 6 vaut lecture-écriture, 4 lecture et 0 aucun droit.',
                        'choices' => [
                            ['text' => 'Alice : rw ; groupe : r ; autres : aucun', 'is_correct' => true],
                            ['text' => 'Alice : rw ; groupe : rw ; autres : rw', 'is_correct' => false],
                            ['text' => 'Alice : x ; groupe : r ; autres : r', 'is_correct' => false],
                            ['text' => 'Alice : r ; groupe : aucun ; autres : aucun', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script appartient à son auteur, qui doit pouvoir l’exécuter sans modifier les droits du groupe et des autres. Quelle commande convient ?',
                        'marks' => 1,
                        'explanation' => 'u+x ajoute le droit d’exécution au propriétaire uniquement ; les autres commandes changent un autre droit ou le propriétaire.',
                        'choices' => [
                            ['text' => 'chmod u+x script.sh', 'is_correct' => true],
                            ['text' => 'chmod a+w script.sh', 'is_correct' => false],
                            ['text' => 'chown root script.sh', 'is_correct' => false],
                            ['text' => 'chmod o+x script.sh', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un utilisateur connaît le nom d’un fichier mais ne peut pas traverser son dossier parent. Quel droit sur ce dossier manque dans le cas usuel ?',
                        'marks' => 1,
                        'explanation' => 'Sur un répertoire, x autorise la traversée et la recherche de noms ; les droits du fichier ne remplacent pas ceux du chemin.',
                        'choices' => [
                            ['text' => 'Le droit x de traversée', 'is_correct' => true],
                            ['text' => 'Le droit d’exécuter le fichier seulement', 'is_correct' => false],
                            ['text' => 'Le droit de lire le contenu du fichier seulement', 'is_correct' => false],
                            ['text' => 'Le droit de changer le propriétaire du fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un groupe doit voir les noms des entrées d’un dossier. Quel droit du répertoire autorise cette lecture de la liste ?',
                        'marks' => 1,
                        'explanation' => 'r permet de lire les noms des entrées. x est aussi nécessaire pour de nombreuses opérations utilisant ces entrées, mais n’accorde pas à lui seul la liste.',
                        'choices' => [
                            ['text' => 'r', 'is_correct' => true],
                            ['text' => 'w', 'is_correct' => false],
                            ['text' => 'x seulement', 'is_correct' => false],
                            ['text' => 'Aucun droit n’est nécessaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le propriétaire d’un fichier doit devenir le compte applicatif app. Quelle commande traite cette propriété ?',
                        'marks' => 1,
                        'explanation' => 'chown modifie le propriétaire ; chgrp vise le groupe et chmod les permissions.',
                        'choices' => [
                            ['text' => 'chown app fichier.conf', 'is_correct' => true],
                            ['text' => 'chmod app fichier.conf', 'is_correct' => false],
                            ['text' => 'chgrp app fichier.conf', 'is_correct' => false],
                            ['text' => 'passwd app', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut partager la lecture d’un document sans ouvrir l’accès à tout le monde. Quelle organisation est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Les groupes permettent d’accorder des droits à un ensemble identifié, sans partager une identité ni ouvrir tous les accès.',
                        'choices' => [
                            ['text' => 'Un groupe dédié avec les droits nécessaires', 'is_correct' => true],
                            ['text' => 'Un compte utilisateur commun dont tous partagent le mot de passe', 'is_correct' => false],
                            ['text' => 'Le mode 777 sur le document', 'is_correct' => false],
                            ['text' => 'Des droits d’écriture pour tous les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une seule opération d’administration est nécessaire. Quelle pratique limite l’exposition aux privilèges élevés ?',
                        'marks' => 1,
                        'explanation' => 'sudo permet une délégation selon une politique ; son intérêt dépend aussi des commandes autorisées et des journaux conservés.',
                        'choices' => [
                            ['text' => 'Utiliser une commande sudo autorisée puis revenir au travail normal', 'is_correct' => true],
                            ['text' => 'Garder une session root pour toutes les tâches', 'is_correct' => false],
                            ['text' => 'Donner le mot de passe root à chaque opérateur', 'is_correct' => false],
                            ['text' => 'Rendre l’outil d’administration modifiable par tous', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un utilisateur veut changer son propre mot de passe Linux selon la politique du système. Quelle commande emploie-t-il généralement ?',
                        'marks' => 1,
                        'explanation' => 'passwd gère le changement du mot de passe ; les autres commandes servent à la propriété, à l’identification ou à la suppression de compte.',
                        'choices' => [
                            ['text' => 'passwd', 'is_correct' => true],
                            ['text' => 'chown', 'is_correct' => false],
                            ['text' => 'whoami', 'is_correct' => false],
                            ['text' => 'userdel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux administrateurs utilisent le même compte partagé et une action sensible est contestée. Quel avantage auraient des comptes individuels ?',
                        'marks' => 1,
                        'explanation' => 'Une identité individuelle améliore la traçabilité, sous réserve de journaux protégés et de pratiques d’accès adaptées.',
                        'choices' => [
                            ['text' => 'Une meilleure attribution des actions', 'is_correct' => true],
                            ['text' => 'Une disparition automatique des erreurs', 'is_correct' => false],
                            ['text' => 'Une absence de besoin d’autorisation', 'is_correct' => false],
                            ['text' => 'Un mot de passe unique valable pour tous', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un mot de passe est demandé puis un second mot de passe mémorisé. Cela suffit-il à constituer deux facteurs distincts ?',
                        'marks' => 1,
                        'explanation' => 'L’authentification multifacteur combine des catégories différentes, par exemple connaissance et possession ; deux secrets mémorisés restent de même nature.',
                        'choices' => [
                            ['text' => 'Non, les deux relèvent du même facteur de connaissance', 'is_correct' => true],
                            ['text' => 'Oui, parce qu’il y a deux champs', 'is_correct' => false],
                            ['text' => 'Oui, si les deux mots de passe sont longs', 'is_correct' => false],
                            ['text' => 'Oui, s’ils sont saisis dans deux fenêtres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un compte de service n’a besoin de lire qu’un répertoire de données. Quelle attribution est proportionnée ?',
                        'marks' => 1,
                        'explanation' => 'Les droits doivent correspondre au travail réel du service, sans autorisations inutiles.',
                        'choices' => [
                            ['text' => 'Lecture du répertoire utile et traversée des chemins nécessaires', 'is_correct' => true],
                            ['text' => 'Administration complète de la machine', 'is_correct' => false],
                            ['text' => 'Écriture sur tous les répertoires utilisateurs', 'is_correct' => false],
                            ['text' => 'Accès à tous les secrets de sauvegarde', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Processus et services sur un système systemd',
                'description' => 'Distinguer état du processus, démarrage automatique et fonctionnement du service rendu.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Deux instances du même programme sont lancées. Quel identifiant permet de distinguer leurs processus à un instant donné ?',
                        'marks' => 1,
                        'explanation' => 'Chaque processus possède un PID dans son espace de noms ; plusieurs processus peuvent porter le même nom.',
                        'choices' => [
                            ['text' => 'Le PID', 'is_correct' => true],
                            ['text' => 'Le nom du fichier exécutable uniquement', 'is_correct' => false],
                            ['text' => 'Le nom de la distribution', 'is_correct' => false],
                            ['text' => 'Le numéro du port SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un processus de PID 2345 doit être examiné sans signal lui être envoyé. Quelle commande est adaptée ?',
                        'marks' => 1,
                        'explanation' => 'ps peut afficher les informations d’un processus ; kill lui enverrait un signal.',
                        'choices' => [
                            ['text' => 'ps -p 2345', 'is_correct' => true],
                            ['text' => 'kill -TERM 2345', 'is_correct' => false],
                            ['text' => 'systemctl stop 2345', 'is_correct' => false],
                            ['text' => 'rm 2345', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un serveur ralentit et il faut repérer les processus consommant le plus de CPU en temps réel. Quel outil est adapté ?',
                        'marks' => 1,
                        'explanation' => 'top fournit une vue dynamique des processus et de leurs ressources ; les autres commandes ne mesurent pas cette consommation.',
                        'choices' => [
                            ['text' => 'top', 'is_correct' => true],
                            ['text' => 'passwd', 'is_correct' => false],
                            ['text' => 'mkdir', 'is_correct' => false],
                            ['text' => 'mount', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le service de l’atelier s’appelle app.service. Quelle commande inspecte son état systemd ?',
                        'marks' => 1,
                        'explanation' => 'status consulte l’état ; enable configure le démarrage et start tente de lancer le service.',
                        'choices' => [
                            ['text' => 'systemctl status app.service', 'is_correct' => true],
                            ['text' => 'systemctl enable app.service', 'is_correct' => false],
                            ['text' => 'systemctl start app.service', 'is_correct' => false],
                            ['text' => 'systemctl daemon-reload', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'app.service est arrêté et doit être lancé immédiatement. Quelle commande convient ?',
                        'marks' => 1,
                        'explanation' => 'start lance l’unité. enable, sans --now, ne garantit pas son démarrage immédiat.',
                        'choices' => [
                            ['text' => 'systemctl start app.service', 'is_correct' => true],
                            ['text' => 'systemctl enable app.service', 'is_correct' => false],
                            ['text' => 'systemctl is-enabled app.service', 'is_correct' => false],
                            ['text' => 'journalctl -u app.service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'app.service fonctionne déjà et doit aussi démarrer automatiquement selon sa configuration d’installation. Quelle commande active ce comportement ?',
                        'marks' => 1,
                        'explanation' => 'enable installe les liens prévus pour l’activation ; ce n’est pas un contrôle de santé applicative.',
                        'choices' => [
                            ['text' => 'systemctl enable app.service', 'is_correct' => true],
                            ['text' => 'systemctl status app.service', 'is_correct' => false],
                            ['text' => 'systemctl stop app.service', 'is_correct' => false],
                            ['text' => 'systemctl reset-failed app.service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application accepte le rechargement de sa configuration sans arrêt complet. Quelle opération mérite d’être préférée si elle est bien prise en charge ?',
                        'marks' => 1,
                        'explanation' => 'reload demande au service de relire sa configuration ; sa disponibilité dépend du support réel de cette opération par l’unité et l’application.',
                        'choices' => [
                            ['text' => 'systemctl reload app.service', 'is_correct' => true],
                            ['text' => 'systemctl stop app.service', 'is_correct' => false],
                            ['text' => 'systemctl disable app.service', 'is_correct' => false],
                            ['text' => 'systemctl mask app.service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Il faut consulter les messages associés à app.service dans le journal systemd. Quelle commande cible cette unité ?',
                        'marks' => 1,
                        'explanation' => 'journalctl -u filtre le journal par unité ; l’accès aux messages dépend des droits de l’opérateur.',
                        'choices' => [
                            ['text' => 'journalctl -u app.service', 'is_correct' => true],
                            ['text' => 'systemctl is-enabled app.service', 'is_correct' => false],
                            ['text' => 'ps -p 2345', 'is_correct' => false],
                            ['text' => 'df -h', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le serveur vient de redémarrer et seuls les journaux du démarrage courant sont recherchés. Quelle option de journalctl les sélectionne ?',
                        'marks' => 1,
                        'explanation' => 'Sans argument de décalage, -b vise le démarrage courant. -f suit les nouveaux messages et -r inverse l’ordre.',
                        'choices' => [
                            ['text' => '-b', 'is_correct' => true],
                            ['text' => '-f', 'is_correct' => false],
                            ['text' => '-r', 'is_correct' => false],
                            ['text' => '-n 1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un programme doit recevoir une demande d’arrêt lui laissant la possibilité de fermer ses fichiers. Quel signal est habituellement tenté avant une interruption forcée ?',
                        'marks' => 1,
                        'explanation' => 'SIGTERM peut être traité par le programme pour effectuer son nettoyage ; il ne garantit pas un arrêt si le programme l’ignore ou reste bloqué.',
                        'choices' => [
                            ['text' => 'SIGTERM', 'is_correct' => true],
                            ['text' => 'SIGKILL', 'is_correct' => false],
                            ['text' => 'SIGSTOP', 'is_correct' => false],
                            ['text' => 'SIGCONT', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un opérateur envisage SIGKILL pour arrêter une application. Quelle limite doit-il connaître ?',
                        'marks' => 1,
                        'explanation' => 'SIGKILL impose l’arrêt sans gestion applicative du signal ; il peut donc laisser des opérations incomplètes.',
                        'choices' => [
                            ['text' => 'Le programme ne peut pas intercepter ce signal pour effectuer son nettoyage', 'is_correct' => true],
                            ['text' => 'Le signal sauvegarde automatiquement toutes les données', 'is_correct' => false],
                            ['text' => 'Le signal ferme proprement les transactions métier', 'is_correct' => false],
                            ['text' => 'Le signal ne concerne que les processus déjà terminés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'systemctl indique active, mais les requêtes métier échouent. Quelle vérification complète cet état ?',
                        'marks' => 1,
                        'explanation' => 'Un état systemd actif ne prouve pas que les dépendances et comportements métier fonctionnent.',
                        'choices' => [
                            ['text' => 'Tester le parcours et examiner les erreurs de l’application', 'is_correct' => true],
                            ['text' => 'Conclure que tout problème vient du navigateur', 'is_correct' => false],
                            ['text' => 'Désactiver les journaux puisque le service est actif', 'is_correct' => false],
                            ['text' => 'Vérifier seulement que l’unité est activée au démarrage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le diagnostic porte sur la RAM disponible plutôt que sur le disque. Quelle commande répond à ce besoin ?',
                        'marks' => 1,
                        'explanation' => 'free affiche des informations sur la mémoire et la swap ; les autres commandes portent sur le stockage.',
                        'choices' => [
                            ['text' => 'free -h', 'is_correct' => true],
                            ['text' => 'df -h', 'is_correct' => false],
                            ['text' => 'du -sh /var', 'is_correct' => false],
                            ['text' => 'lsblk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un redémarrage pourrait masquer un ralentissement intermittent. Quelle démarche conserve le plus d’indices avant une action autorisée ?',
                        'marks' => 1,
                        'explanation' => 'Des observations datées permettent de comprendre le défaut ; un redémarrage peut faire disparaître l’état qui l’expliquait.',
                        'choices' => [
                            ['text' => 'Relever les ressources, les messages et le contexte du problème', 'is_correct' => true],
                            ['text' => 'Redémarrer puis supprimer les anciens journaux', 'is_correct' => false],
                            ['text' => 'Réinstaller immédiatement le système', 'is_correct' => false],
                            ['text' => 'Modifier plusieurs services au hasard', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Accès réseau et administration distante',
                'description' => 'Vérifier adresses, résolution de noms, ports et connexions sécurisées.',
                'difficulty' => 'Beginner',
                'duration' => 12,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un administrateur veut lire les adresses IPv4 et IPv6 des interfaces Linux. Quelle commande convient ?',
                        'marks' => 1,
                        'explanation' => 'ip addr affiche les interfaces et leurs adresses ; les routes et sockets répondent à d’autres questions.',
                        'choices' => [
                            ['text' => 'ip addr show', 'is_correct' => true],
                            ['text' => 'ip route show', 'is_correct' => false],
                            ['text' => 'ss -lnt', 'is_correct' => false],
                            ['text' => 'hostname seul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un serveur Linux doit être administré à distance sur un réseau non fiable. Quel protocole est adapté ?',
                        'marks' => 1,
                        'explanation' => 'SSH chiffre la session et authentifie le serveur et l’utilisateur selon la configuration choisie.',
                        'choices' => [
                            ['text' => 'SSH', 'is_correct' => true],
                            ['text' => 'Telnet sans tunnel', 'is_correct' => false],
                            ['text' => 'FTP classique', 'is_correct' => false],
                            ['text' => 'HTTP sans authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le serveur répond au ping mais sa page web reste inaccessible. Quelle conclusion est justifiée ?',
                        'marks' => 1,
                        'explanation' => 'Ping utilise généralement ICMP ; un service TCP peut échouer pour d’autres raisons malgré une réponse.',
                        'choices' => [
                            ['text' => 'La réponse ICMP ne prouve pas que le service web est joignable', 'is_correct' => true],
                            ['text' => 'Le port web est nécessairement ouvert', 'is_correct' => false],
                            ['text' => 'La résolution DNS est toujours correcte', 'is_correct' => false],
                            ['text' => 'Le serveur web est forcément en état de marche', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nom atelier.example ne se résout pas via les sources configurées du poste. Quel outil Linux permet de tester cette résolution de noms ?',
                        'marks' => 1,
                        'explanation' => 'getent interroge les sources de noms configurées pour la base hosts, qui peuvent inclure DNS et des fichiers locaux.',
                        'choices' => [
                            ['text' => 'getent hosts atelier.example', 'is_correct' => true],
                            ['text' => 'getent passwd atelier.example', 'is_correct' => false],
                            ['text' => 'getent services atelier.example', 'is_correct' => false],
                            ['text' => 'ip route get 192.0.2.10', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une machine envoie du trafic hors de ses réseaux locaux. Quel rôle peut jouer sa passerelle par défaut ?',
                        'marks' => 1,
                        'explanation' => 'La route par défaut sert lorsque les règles de routage n’ont pas trouvé de route plus spécifique.',
                        'choices' => [
                            ['text' => 'Acheminer les destinations sans route plus spécifique', 'is_correct' => true],
                            ['text' => 'Convertir chaque nom DNS en adresse', 'is_correct' => false],
                            ['text' => 'Chiffrer automatiquement tous les paquets', 'is_correct' => false],
                            ['text' => 'Ouvrir les ports de toutes les applications', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service TCP est-il réellement en écoute sur la machine Linux ? Quel outil peut lister ses sockets d’écoute ?',
                        'marks' => 1,
                        'explanation' => 'ss examine les sockets ; -l sélectionne l’écoute, -n les adresses numériques et -t TCP.',
                        'choices' => [
                            ['text' => 'ss -lnt', 'is_correct' => true],
                            ['text' => 'ip addr show', 'is_correct' => false],
                            ['text' => 'whoami', 'is_correct' => false],
                            ['text' => 'du -sh /srv', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un serveur web écoute seulement sur 127.0.0.1:8080. Pourquoi une autre machine ne peut-elle pas le joindre directement sur ce socket ?',
                        'marks' => 1,
                        'explanation' => 'Une adresse de boucle locale désigne la machine elle-même ; l’écoute n’est pas ouverte sur son interface distante.',
                        'choices' => [
                            ['text' => 'L’écoute est limitée à la boucle locale', 'is_correct' => true],
                            ['text' => 'Le port 8080 est interdit pour HTTP', 'is_correct' => false],
                            ['text' => 'Toute adresse 127.0.0.1 est publique', 'is_correct' => false],
                            ['text' => 'Le navigateur distant doit utiliser sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un pare-feu doit autoriser uniquement les services utiles. Quel objectif remplit cette politique ?',
                        'marks' => 1,
                        'explanation' => 'Le filtrage réduit l’exposition, mais complète les autres contrôles de sécurité au lieu de les remplacer.',
                        'choices' => [
                            ['text' => 'Réduire les accès réseau non nécessaires', 'is_correct' => true],
                            ['text' => 'Remplacer les mises à jour de sécurité', 'is_correct' => false],
                            ['text' => 'Garantir la correction de chaque application', 'is_correct' => false],
                            ['text' => 'Supprimer le besoin d’authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entrée est ajoutée dans /etc/hosts sur un poste Linux. Quel effet faut-il attendre selon sa configuration de résolution ?',
                        'marks' => 1,
                        'explanation' => 'Le fichier peut participer à la résolution locale ; il ne publie pas une modification dans le DNS partagé.',
                        'choices' => [
                            ['text' => 'Un changement local, sans modification automatique du DNS des autres postes', 'is_correct' => true],
                            ['text' => 'Une mise à jour de tous les serveurs DNS', 'is_correct' => false],
                            ['text' => 'Une création de certificat TLS', 'is_correct' => false],
                            ['text' => 'Un routage automatique vers Internet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sur un poste Windows, l’opérateur veut afficher la configuration IP des cartes réseau. Quelle commande usuelle convient ?',
                        'marks' => 1,
                        'explanation' => 'ipconfig affiche la configuration réseau Windows ; les autres commandes portent sur l’identité, les services ou les processus.',
                        'choices' => [
                            ['text' => 'ipconfig', 'is_correct' => true],
                            ['text' => 'whoami', 'is_correct' => false],
                            ['text' => 'Get-Service', 'is_correct' => false],
                            ['text' => 'tasklist', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le navigateur signale un certificat non valide lors de l’accès à une console d’administration. Quelle réaction est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Une alerte TLS peut indiquer une mauvaise configuration ou un problème d’authenticité ; elle doit être comprise avant l’envoi d’informations sensibles.',
                        'choices' => [
                            ['text' => 'Vérifier le nom, la validité et la chaîne de confiance avant de saisir des secrets', 'is_correct' => true],
                            ['text' => 'Désactiver définitivement la vérification des certificats', 'is_correct' => false],
                            ['text' => 'Saisir le mot de passe pour voir si l’alerte disparaît', 'is_correct' => false],
                            ['text' => 'Considérer toute alerte comme une simple lenteur réseau', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Stockage, capacité et copies de secours',
                'description' => 'Identifier les ressources utilisées et distinguer stockage, redondance et sauvegarde.',
                'difficulty' => 'Beginner',
                'duration' => 14,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'L’écriture échoue et l’espace libre du système de fichiers doit être contrôlé. Quelle commande fournit cette vue ?',
                        'marks' => 1,
                        'explanation' => 'df affiche les capacités des systèmes de fichiers ; du mesure plutôt l’usage attribué à une arborescence.',
                        'choices' => [
                            ['text' => 'df -h', 'is_correct' => true],
                            ['text' => 'du -sh dossier', 'is_correct' => false],
                            ['text' => 'free -h', 'is_correct' => false],
                            ['text' => 'ps -ef', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le système de fichiers est bien identifié, mais l’opérateur cherche quel dossier occupe beaucoup d’espace. Quelle commande résume /var/log ?',
                        'marks' => 1,
                        'explanation' => 'du totalise l’espace attribué aux fichiers de cette arborescence ; df donne la capacité du système de fichiers qui l’héberge.',
                        'choices' => [
                            ['text' => 'du -sh /var/log', 'is_correct' => true],
                            ['text' => 'df -h /var/log', 'is_correct' => false],
                            ['text' => 'free -h', 'is_correct' => false],
                            ['text' => 'ip addr', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Il faut repérer les disques et partitions attachés à une machine Linux. Quel outil fournit cette vue en blocs ?',
                        'marks' => 1,
                        'explanation' => 'lsblk affiche les périphériques blocs et leurs relations ; leur présence ne signifie pas qu’ils sont tous montés.',
                        'choices' => [
                            ['text' => 'lsblk', 'is_correct' => true],
                            ['text' => 'ls -a', 'is_correct' => false],
                            ['text' => 'getent passwd', 'is_correct' => false],
                            ['text' => 'journalctl -f', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un volume est monté sur /srv/donnees. Que représente ce chemin ?',
                        'marks' => 1,
                        'explanation' => 'Un point de montage rattache un système de fichiers à l’arborescence des chemins.',
                        'choices' => [
                            ['text' => 'Le point d’accès au système de fichiers monté', 'is_correct' => true],
                            ['text' => 'Une copie indépendante du volume', 'is_correct' => false],
                            ['text' => 'Une adresse réseau du disque', 'is_correct' => false],
                            ['text' => 'Le nom du compte propriétaire de tous les fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le disque applicatif est plein. Quelle conséquence est plausible ?',
                        'marks' => 1,
                        'explanation' => 'Un manque d’espace peut interrompre des opérations et rendre un service défaillant même si son processus fonctionne encore.',
                        'choices' => [
                            ['text' => 'Des écritures de données ou de journaux peuvent échouer', 'is_correct' => true],
                            ['text' => 'La RAM augmente automatiquement', 'is_correct' => false],
                            ['text' => 'Les fichiers existants se compressent tous seuls', 'is_correct' => false],
                            ['text' => 'Les droits deviennent automatiquement plus permissifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les journaux grossissent sans limite. Quel mécanisme aide à maîtriser leur espace tout en appliquant une conservation prévue ?',
                        'marks' => 1,
                        'explanation' => 'La rotation organise le renouvellement et la conservation ; sa configuration doit correspondre au besoin d’exploitation.',
                        'choices' => [
                            ['text' => 'Une rotation des journaux configurée et surveillée', 'is_correct' => true],
                            ['text' => 'Une suppression aléatoire des fichiers en cours d’utilisation', 'is_correct' => false],
                            ['text' => 'Une augmentation des permissions des journaux', 'is_correct' => false],
                            ['text' => 'Une désactivation de toutes les traces de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La machine utilise une zone de swap. Quelle description est correcte ?',
                        'marks' => 1,
                        'explanation' => 'La swap peut déplacer des pages mémoire vers un autre support ; elle ne rend pas ce support équivalent à la RAM.',
                        'choices' => [
                            ['text' => 'Un support de mémoire virtuelle plus lent que la RAM', 'is_correct' => true],
                            ['text' => 'Une extension de RAM de même vitesse', 'is_correct' => false],
                            ['text' => 'Une copie des données pour la restauration', 'is_correct' => false],
                            ['text' => 'Un mécanisme qui ajoute des cœurs au CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après un arrêt, un fichier conservé sur un support persistant reste disponible tandis qu’une donnée seulement en RAM est perdue. Quelle différence est illustrée ?',
                        'marks' => 1,
                        'explanation' => 'La RAM ordinaire est volatile ; un support persistant est conçu pour conserver des données hors alimentation.',
                        'choices' => [
                            ['text' => 'La mémoire volatile et le stockage persistant', 'is_correct' => true],
                            ['text' => 'Une différence entre IPv4 et IPv6', 'is_correct' => false],
                            ['text' => 'Le fonctionnement d’un groupe utilisateur', 'is_correct' => false],
                            ['text' => 'La compression automatique des journaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une suppression accidentelle est immédiatement répliquée sur le second serveur. Quel besoin n’était pas couvert par cette seule réplication ?',
                        'marks' => 1,
                        'explanation' => 'La réplication peut propager les erreurs ; des sauvegardes historiques permettent de revenir à un état antérieur.',
                        'choices' => [
                            ['text' => 'Retrouver une version antérieure indépendante', 'is_correct' => true],
                            ['text' => 'Continuer toute écriture locale sans réseau', 'is_correct' => false],
                            ['text' => 'Changer les droits du compte administrateur', 'is_correct' => false],
                            ['text' => 'Mesurer l’utilisation du processeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les seules sauvegardes résident sur le même disque physique que les données. Quel risque commun demeure ?',
                        'marks' => 1,
                        'explanation' => 'Une copie sur le même support ne protège pas contre sa perte ; les copies doivent couvrir des domaines de panne distincts.',
                        'choices' => [
                            ['text' => 'La panne du disque peut détruire source et copies', 'is_correct' => true],
                            ['text' => 'Les fichiers deviennent impossibles à chiffrer', 'is_correct' => false],
                            ['text' => 'La lecture est nécessairement plus lente', 'is_correct' => false],
                            ['text' => 'Le système ne peut plus créer de groupes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un logiciel annonce « sauvegarde réussie ». Quelle vérification donne une preuve supplémentaire de son utilité ?',
                        'marks' => 1,
                        'explanation' => 'Une restauration contrôlée teste la récupération effective ; un statut de création ne suffit pas à garantir l’intégrité et l’exploitabilité.',
                        'choices' => [
                            ['text' => 'Restaurer un échantillon puis vérifier son contenu', 'is_correct' => true],
                            ['text' => 'Vérifier uniquement que le job affiche un succès', 'is_correct' => false],
                            ['text' => 'Compter seulement les noms des archives', 'is_correct' => false],
                            ['text' => 'Comparer seulement les dates sans ouvrir les copies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le système répond « Read-only file system » lors d’une écriture. Quelle piste doit être examinée avant de changer les permissions du fichier ?',
                        'marks' => 1,
                        'explanation' => 'Un montage en lecture seule peut empêcher l’écriture indépendamment des permissions classiques ; il faut en comprendre la cause.',
                        'choices' => [
                            ['text' => 'L’état de montage et les éventuelles erreurs du système de fichiers', 'is_correct' => true],
                            ['text' => 'Le seul groupe de l’utilisateur', 'is_correct' => false],
                            ['text' => 'Les seuls droits du fichier sans vérifier le montage', 'is_correct' => false],
                            ['text' => 'Le seul répertoire courant du shell', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une sauvegarde contient les données de plusieurs utilisateurs. Quelle protection reste nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Une sauvegarde reste une copie de données sensibles et demande des protections adaptées, y compris lors de la restauration.',
                        'choices' => [
                            ['text' => 'Contrôler sa confidentialité et les droits d’accès', 'is_correct' => true],
                            ['text' => 'La rendre lisible par tous pour simplifier la reprise', 'is_correct' => false],
                            ['text' => 'La publier dans un dossier web sans authentification', 'is_correct' => false],
                            ['text' => 'Réutiliser un compte public pour la restauration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Intervenir avec méthode et limiter les risques',
                'description' => 'Préparer les changements et conserver une administration traçable.',
                'difficulty' => 'Beginner',
                'duration' => 11,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un correctif système doit être installé. Quelle source réduit le risque de paquet altéré ?',
                        'marks' => 1,
                        'explanation' => 'L’origine et la vérification des paquets font partie de la sécurité de la chaîne d’installation.',
                        'choices' => [
                            ['text' => 'Un dépôt approuvé dont les mécanismes de vérification sont utilisés', 'is_correct' => true],
                            ['text' => 'Une pièce jointe reçue d’un expéditeur inconnu', 'is_correct' => false],
                            ['text' => 'Le premier binaire trouvé sur un forum', 'is_correct' => false],
                            ['text' => 'Un fichier renommé pour ressembler au paquet officiel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La configuration d’un service doit être modifiée. Quelle séquence est préférable ?',
                        'marks' => 1,
                        'explanation' => 'Une modification préparée garde une possibilité de retour et vérifie le résultat réel après application.',
                        'choices' => [
                            ['text' => 'Sauvegarder ou versionner, valider puis appliquer et vérifier', 'is_correct' => true],
                            ['text' => 'Modifier plusieurs fichiers puis attendre une plainte', 'is_correct' => false],
                            ['text' => 'Effacer la configuration précédente avant de rédiger la nouvelle', 'is_correct' => false],
                            ['text' => 'Désactiver les journaux pendant toute l’opération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un pare-feu est modifié à distance. Quelle précaution protège l’accès d’administration ?',
                        'marks' => 1,
                        'explanation' => 'Une règle peut empêcher les nouvelles connexions sans interrompre immédiatement la session existante ; un accès de secours réduit le risque de verrouillage.',
                        'choices' => [
                            ['text' => 'Prévoir un accès de secours et vérifier une nouvelle connexion avant de fermer la session existante', 'is_correct' => true],
                            ['text' => 'Fermer la seule session avant toute vérification', 'is_correct' => false],
                            ['text' => 'Bloquer le port d’administration puis improviser', 'is_correct' => false],
                            ['text' => 'Supposer que la session ouverte garantit toutes les connexions futures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un journal montre plusieurs échecs SSH. Quelle conclusion est raisonnable ?',
                        'marks' => 1,
                        'explanation' => 'Les tentatives refusées signalent une activité à qualifier ; elles ne prouvent pas seules qu’un accès a réussi.',
                        'choices' => [
                            ['text' => 'Examiner le contexte et les connexions réussies avant de conclure à une compromission', 'is_correct' => true],
                            ['text' => 'Un échec prouve toujours qu’un attaquant est connecté', 'is_correct' => false],
                            ['text' => 'Aucun examen n’est utile tant que la machine répond', 'is_correct' => false],
                            ['text' => 'Les mots de passe doivent être publiés pour comparaison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour se connecter par clé SSH, quel élément doit rester secret du côté de son détenteur ?',
                        'marks' => 1,
                        'explanation' => 'La clé privée permet de démontrer la possession de l’identité ; la clé publique est conçue pour être distribuée selon le besoin.',
                        'choices' => [
                            ['text' => 'La clé privée', 'is_correct' => true],
                            ['text' => 'La clé publique destinée au serveur', 'is_correct' => false],
                            ['text' => 'Le nom public du serveur', 'is_correct' => false],
                            ['text' => 'Le numéro du port SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script de diagnostic affiche un jeton d’accès dans ses traces. Quelle correction est nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Les journaux ne doivent pas diffuser de secrets réutilisables ; une exposition peut aussi imposer leur renouvellement.',
                        'choices' => [
                            ['text' => 'Masquer le secret et traiter son exposition selon sa validité', 'is_correct' => true],
                            ['text' => 'Déplacer la trace dans un fichier lisible par tous', 'is_correct' => false],
                            ['text' => 'Renommer la variable sans changer son contenu affiché', 'is_correct' => false],
                            ['text' => 'Conserver le jeton complet pour chaque requête', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service paraît inutile sur un serveur. Quelle vérification précède sa désactivation ?',
                        'marks' => 1,
                        'explanation' => 'La réduction des services exposés est utile, mais une dépendance non reconnue peut provoquer une panne.',
                        'choices' => [
                            ['text' => 'Confirmer son rôle et les dépendances qui l’utilisent', 'is_correct' => true],
                            ['text' => 'Se fier seulement à son nom', 'is_correct' => false],
                            ['text' => 'Le supprimer pendant le pic d’activité', 'is_correct' => false],
                            ['text' => 'Effacer aussi ses données sans examen', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux serveurs affichent des heures très différentes dans leurs journaux. Quel travail facilite le rapprochement des événements ?',
                        'marks' => 1,
                        'explanation' => 'Des horloges cohérentes et des fuseaux connus permettent de comparer les événements entre systèmes.',
                        'choices' => [
                            ['text' => 'Synchroniser les horloges et rendre les fuseaux explicites', 'is_correct' => true],
                            ['text' => 'Trier les lignes uniquement par nom de fichier', 'is_correct' => false],
                            ['text' => 'Supprimer les horodatages', 'is_correct' => false],
                            ['text' => 'Changer le nom d’un serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une connexion SSH présente une empreinte de serveur inconnue. Quelle vérification protège contre un faux serveur ?',
                        'marks' => 1,
                        'explanation' => 'La clé d’hôte sert à authentifier le serveur ; une empreinte nouvelle doit être reliée à la bonne machine par une information fiable.',
                        'choices' => [
                            ['text' => 'Confirmer l’empreinte par un canal de confiance', 'is_correct' => true],
                            ['text' => 'Accepter sans examen dès que le nom paraît correct', 'is_correct' => false],
                            ['text' => 'Envoyer d’abord le mot de passe pour confirmer', 'is_correct' => false],
                            ['text' => 'Supprimer tous les contrôles d’identité du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un incident vient d’être corrigé. Quelles informations rendent son compte rendu utile ?',
                        'marks' => 1,
                        'explanation' => 'Un compte rendu factuel aide à comprendre l’intervention et à réduire les incidents similaires sans exposer de secrets.',
                        'choices' => [
                            ['text' => 'Symptômes, chronologie, changements réalisés et résultat vérifié', 'is_correct' => true],
                            ['text' => 'Uniquement le nom de la personne présente', 'is_correct' => false],
                            ['text' => 'Une conclusion sans étapes ni observations', 'is_correct' => false],
                            ['text' => 'La totalité des secrets utilisés pour le diagnostic', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'System Administration Beginner — Operating System Fundamentals',
            'System Administration Beginner — Linux Command Line',
            'System Administration Beginner — Users, Groups and Permissions',
            'System Administration Beginner — Services and Processes',
            'System Administration Beginner — Networking Basics',
            'System Administration Beginner — Storage and Filesystems',
            'System Administration Beginner — Monitoring and Troubleshooting',
            'System Administration Beginner — Security Fundamentals',
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
