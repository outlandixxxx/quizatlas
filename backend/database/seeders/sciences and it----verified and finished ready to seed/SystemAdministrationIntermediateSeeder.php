<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemAdministrationIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Exploiter Linux, systemd et des scripts fiables',
                'description' => 'Distinguer configuration d’unité, comportement du service et garanties du shell.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Le fichier /etc/systemd/system/app.service vient d’être modifié. Quelle opération demande à systemd de relire ses définitions d’unités ?',
                        'marks' => 1,
                        'explanation' => 'daemon-reload recharge les définitions et dépendances de systemd ; il ne remplace pas automatiquement le redémarrage ou rechargement nécessaire du service.',
                        'choices' => [
                            ['text' => 'systemctl daemon-reload', 'is_correct' => true],
                            ['text' => 'systemctl reload app.service', 'is_correct' => false],
                            ['text' => 'systemctl status app.service', 'is_correct' => false],
                            ['text' => 'journalctl --rotate', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’opérateur cherche les messages de app.service depuis 09:00 le 21 octobre 2026, selon le fuseau du serveur. Quelle commande cible ce besoin ?',
                        'marks' => 1,
                        'explanation' => 'Le filtre d’unité et la borne temporelle limitent l’examen aux messages pertinents ; le fuseau du système doit être compris lors de la comparaison.',
                        'choices' => [
                            ['text' => 'journalctl -u app.service --since \'2026-10-21 09:00:00\'', 'is_correct' => true],
                            ['text' => 'journalctl -u app.service -n 1', 'is_correct' => false],
                            ['text' => 'systemctl is-active app.service', 'is_correct' => false],
                            ['text' => 'journalctl --disk-usage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une unité correctement installable doit être activée pour les prochains démarrages et lancée tout de suite. Quelle commande combine ces deux actions ?',
                        'marks' => 1,
                        'explanation' => '--now ajoute l’action immédiate à enable ; start seul n’installe pas l’activation future.',
                        'choices' => [
                            ['text' => 'systemctl enable --now app.service', 'is_correct' => true],
                            ['text' => 'systemctl enable app.service', 'is_correct' => false],
                            ['text' => 'systemctl start app.service', 'is_correct' => false],
                            ['text' => 'systemctl is-enabled app.service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service systemd échoue parce que son programme cherche un fichier relatif dans le mauvais dossier. Quel paramètre d’unité permet de définir son répertoire de travail ?',
                        'marks' => 1,
                        'explanation' => 'WorkingDirectory fixe le dossier courant du processus lancé ; les autres directives ne changent pas la résolution de ses chemins relatifs.',
                        'choices' => [
                            ['text' => 'Diagnostiquer la cause et borner les reprises', 'is_correct' => true],
                            ['text' => 'Description=', 'is_correct' => false],
                            ['text' => 'RestartSec=', 'is_correct' => false],
                            ['text' => 'StandardOutput=', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'app.service redémarre en boucle après une erreur de configuration. Quelle première démarche est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Une politique de redémarrage ne corrige pas une configuration fautive et peut amplifier le bruit ou la charge ; la cause doit être traitée.',
                        'choices' => [
                            ['text' => 'Examiner la cause et borner les redémarrages plutôt que multiplier les reprises', 'is_correct' => true],
                            ['text' => 'Réduire le délai de reprise à zéro sans diagnostic', 'is_correct' => false],
                            ['text' => 'Effacer le journal à chaque tentative', 'is_correct' => false],
                            ['text' => 'Ajouter une seconde instance avec la même configuration invalide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un traitement est planifié par un timer systemd. Quelle commande aide à connaître ses prochaines échéances ?',
                        'marks' => 1,
                        'explanation' => 'list-timers présente les timers chargés et leurs échéances ; les tâches systemd ne sont pas nécessairement décrites dans crontab.',
                        'choices' => [
                            ['text' => 'systemctl list-timers', 'is_correct' => true],
                            ['text' => 'systemctl list-sockets', 'is_correct' => false],
                            ['text' => 'crontab -l uniquement', 'is_correct' => false],
                            ['text' => 'ps -ef uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans Bash sans pipefail, false | true renvoie un statut global nul. Quelle option permet de rendre visible l’échec de la commande amont dans ce pipeline ?',
                        'marks' => 1,
                        'explanation' => 'Avec pipefail, le statut d’un pipeline tient compte d’un échec de ses commandes ; -x trace les commandes et -f désactive l’expansion des motifs.',
                        'choices' => [
                            ['text' => 'set -o pipefail', 'is_correct' => true],
                            ['text' => 'set -x', 'is_correct' => false],
                            ['text' => 'set -f', 'is_correct' => false],
                            ['text' => 'set +e', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script exécute find /var/log -name \'*.log\'. Pourquoi le motif est-il entre guillemets ?',
                        'marks' => 1,
                        'explanation' => 'Le shell ne doit pas développer *.log dans le répertoire courant avant que find n’évalue ce motif.',
                        'choices' => [
                            ['text' => 'Pour que find reçoive le motif au lieu d’une expansion préalable du shell', 'is_correct' => true],
                            ['text' => 'Pour interdire à find de parcourir les sous-dossiers', 'is_correct' => false],
                            ['text' => 'Pour convertir les fichiers en liens symboliques', 'is_correct' => false],
                            ['text' => 'Pour supprimer les espaces des noms trouvés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une étape de sauvegarde renvoie un code non nul et les étapes suivantes détruiraient la source. Quelle logique de script est nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Le statut doit gouverner la suite du traitement ; la présence d’un fichier partiel ne prouve pas la réussite.',
                        'choices' => [
                            ['text' => 'Traiter l’échec avant toute étape destructive', 'is_correct' => true],
                            ['text' => 'Continuer parce que la commande a affiché du texte', 'is_correct' => false],
                            ['text' => 'Ignorer le statut si le fichier de sortie existe', 'is_correct' => false],
                            ['text' => 'Retenter les suppressions jusqu’à ce qu’elles réussissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La variable d’environnement d’un shell est modifiée, mais un service déjà lancé garde l’ancienne valeur. Quelle explication est correcte ?',
                        'marks' => 1,
                        'explanation' => 'L’environnement est transmis à la création d’un processus ; l’application d’une nouvelle configuration dépend ensuite du mode de lancement du service.',
                        'choices' => [
                            ['text' => 'L’environnement des processus existants reste inchangé', 'is_correct' => true],
                            ['text' => 'Une variable shell modifie instantanément tous les processus', 'is_correct' => false],
                            ['text' => 'Les services ne peuvent jamais utiliser d’environnement', 'is_correct' => false],
                            ['text' => 'La valeur doit être placée dans /etc/hosts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La commande sudo echo texte > /etc/atelier.conf échoue à la redirection pour un utilisateur sans droit d’écriture. Pourquoi ?',
                        'marks' => 1,
                        'explanation' => 'L’élévation de echo n’élève pas le shell qui ouvre le fichier ; un outil d’édition ou d’écriture délégué approprié doit être utilisé.',
                        'choices' => [
                            ['text' => 'La redirection est ouverte par le shell non élevé', 'is_correct' => true],
                            ['text' => 'sudo ne peut jamais écrire dans /etc', 'is_correct' => false],
                            ['text' => 'echo exige obligatoirement une session root interactive', 'is_correct' => false],
                            ['text' => 'La redirection change les permissions du répertoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La charge moyenne Linux est élevée alors que l’utilisation CPU n’est pas maximale. Quelle investigation est justifiée ?',
                        'marks' => 1,
                        'explanation' => 'La charge moyenne Linux inclut notamment des tâches exécutables et en attente non interruptible ; elle ne se lit pas comme un pourcentage CPU.',
                        'choices' => [
                            ['text' => 'Examiner les tâches exécutables et bloquées', 'is_correct' => true],
                            ['text' => 'Conclure que la charge moyenne mesure uniquement le pourcentage CPU', 'is_correct' => false],
                            ['text' => 'Ajouter des cœurs sans vérifier les attentes', 'is_correct' => false],
                            ['text' => 'Ignorer le stockage puisque le CPU est disponible', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Administrer les volumes et préparer des restaurations',
                'description' => 'Vérifier capacité, métadonnées, cohérence applicative et chaînes de sauvegarde.',
                'difficulty' => 'Intermediate',
                'duration' => 22,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un système de fichiers peut encore stocker des octets mais refuse de créer de petits fichiers. Quelle ressource faut-il vérifier ?',
                        'marks' => 1,
                        'explanation' => 'Un système de fichiers peut manquer d’inodes alors que des blocs restent libres ; chaque nouveau fichier demande des métadonnées.',
                        'choices' => [
                            ['text' => 'Les inodes disponibles avec df -i', 'is_correct' => true],
                            ['text' => 'La seule quantité de RAM avec free', 'is_correct' => false],
                            ['text' => 'Le nombre de routes réseau', 'is_correct' => false],
                            ['text' => 'Le mode de compression des journaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un gros journal est supprimé, mais df indique presque autant d’espace occupé. Quelle cause est plausible ?',
                        'marks' => 1,
                        'explanation' => 'Les blocs d’un fichier ouvert peuvent rester alloués après la suppression de son nom, jusqu’à la fermeture des références nécessaires.',
                        'choices' => [
                            ['text' => 'Un processus garde le fichier supprimé ouvert', 'is_correct' => true],
                            ['text' => 'La suppression augmente toujours sa taille', 'is_correct' => false],
                            ['text' => 'du et df doivent toujours avoir des résultats identiques', 'is_correct' => false],
                            ['text' => 'Le nom supprimé reste nécessairement visible dans le dossier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un volume est monté sur un dossier qui contenait déjà des fichiers. Que deviennent normalement ces fichiers sous-jacents ?',
                        'marks' => 1,
                        'explanation' => 'Le montage présente un autre système de fichiers à ce chemin ; le contenu sous-jacent redevient accessible une fois le montage retiré dans des conditions sûres.',
                        'choices' => [
                            ['text' => 'Ils sont masqués par le montage sans être supprimés', 'is_correct' => true],
                            ['text' => 'Ils sont copiés automatiquement sur le nouveau volume', 'is_correct' => false],
                            ['text' => 'Ils sont tous effacés par mount', 'is_correct' => false],
                            ['text' => 'Ils se transforment en fichiers de configuration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les noms /dev/sdb et /dev/sdc peuvent changer après ajout de disques. Quelle référence dans fstab limite ce risque pour un système de fichiers ?',
                        'marks' => 1,
                        'explanation' => 'Un UUID identifie le système de fichiers plus durablement qu’un nom de périphérique attribué selon la détection ; il doit être vérifié lors d’une copie ou d’un remplacement.',
                        'choices' => [
                            ['text' => 'Son UUID correctement identifié', 'is_correct' => true],
                            ['text' => 'La position supposée du disque dans la liste', 'is_correct' => false],
                            ['text' => 'Le nom du dernier compte connecté', 'is_correct' => false],
                            ['text' => 'Le seul nom du point de montage sans source', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un volume logique est agrandi avec lvextend sans option de redimensionnement du système de fichiers. Quelle étape reste à prévoir ?',
                        'marks' => 1,
                        'explanation' => 'L’agrandissement du volume bloc et celui du système de fichiers sont deux opérations distinctes ; leur procédure dépend du format et des outils utilisés.',
                        'choices' => [
                            ['text' => 'Agrandir le système de fichiers avec la méthode compatible', 'is_correct' => true],
                            ['text' => 'Recréer obligatoirement toute la table de partitions', 'is_correct' => false],
                            ['text' => 'Diminuer la mémoire du serveur', 'is_correct' => false],
                            ['text' => 'Supprimer tous les snapshots avant toute vérification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une chaîne classique comporte une sauvegarde complète dimanche puis une incrémentale chaque soir, chacune depuis la précédente. Pour restaurer jeudi soir, quelles copies sont requises ?',
                        'marks' => 1,
                        'explanation' => 'Chaque incrémentale dépend de l’état précédent dans cette chaîne ; il faut une base et les étapes nécessaires dans l’ordre.',
                        'choices' => [
                            ['text' => 'La complète et toutes les incrémentales de lundi à jeudi', 'is_correct' => true],
                            ['text' => 'La complète et seulement l’incrémentale de jeudi', 'is_correct' => false],
                            ['text' => 'Seulement la complète de dimanche', 'is_correct' => false],
                            ['text' => 'Les incrémentales sans la complète', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une sauvegarde différentielle classique est créée chaque soir depuis la complète de dimanche. Pour jeudi soir, quelle combinaison suffit ?',
                        'marks' => 1,
                        'explanation' => 'Une différentielle reprend les changements depuis la dernière complète ; la dernière différentielle et sa base suffisent dans ce modèle.',
                        'choices' => [
                            ['text' => 'La complète de dimanche et la différentielle de jeudi', 'is_correct' => true],
                            ['text' => 'Toutes les différentielles de lundi à jeudi', 'is_correct' => false],
                            ['text' => 'Seulement la différentielle de jeudi sans base', 'is_correct' => false],
                            ['text' => 'La complète et une incrémentale inventée après coup', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un RAID 1 utilise deux disques identiques de 2 To pour un miroir complet. Sans compter les réserves ni métadonnées, quelle capacité utile théorique fournit-il ?',
                        'marks' => 2,
                        'explanation' => 'Les deux membres portent la même donnée dans ce miroir ; la capacité utile correspond à celle d’un disque, hors surcoûts indiqués.',
                        'choices' => [
                            ['text' => '2 To', 'is_correct' => true],
                            ['text' => '4 To', 'is_correct' => false],
                            ['text' => '1 To', 'is_correct' => false],
                            ['text' => '3 To', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un utilisateur atteint une limite d’écriture alors que le système de fichiers dispose encore d’espace global. Quelle piste est cohérente ?',
                        'marks' => 1,
                        'explanation' => 'Un quota peut limiter la consommation d’un utilisateur, groupe ou projet indépendamment de la capacité totale restante.',
                        'choices' => [
                            ['text' => 'Un quota propre à cet utilisateur ou à son groupe', 'is_correct' => true],
                            ['text' => 'Une absence certaine de RAM', 'is_correct' => false],
                            ['text' => 'Une panne obligatoire du câble réseau', 'is_correct' => false],
                            ['text' => 'Une erreur de fuseau horaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un contrôle réparateur du système de fichiers racine est envisagé. Quelle préparation est essentielle ?',
                        'marks' => 1,
                        'explanation' => 'Une réparation sur un système utilisé peut aggraver les incohérences ; le mode opératoire dépend du système de fichiers et exige un état approprié.',
                        'choices' => [
                            ['text' => 'La procédure du format dans un état compatible', 'is_correct' => true],
                            ['text' => 'Lancer n’importe quel fsck sur le système monté en écriture', 'is_correct' => false],
                            ['text' => 'Modifier les droits de tous les fichiers en 777', 'is_correct' => false],
                            ['text' => 'Effacer le journal applicatif avant le contrôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un snapshot dépend du même stockage que la machine d’origine. Quelle limite de protection subsiste ?',
                        'marks' => 1,
                        'explanation' => 'Une vue ponctuelle facilite certains retours, mais ne constitue pas à elle seule une copie indépendante de son domaine de panne.',
                        'choices' => [
                            ['text' => 'La perte du stockage peut rendre source et snapshot indisponibles', 'is_correct' => true],
                            ['text' => 'Le snapshot est forcément une copie hors site', 'is_correct' => false],
                            ['text' => 'Tout snapshot résiste à la destruction de son support', 'is_correct' => false],
                            ['text' => 'Le snapshot garantit la conservation sans limite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une base reçoit des écritures pendant une capture des volumes. Quelle propriété doit être vérifiée avant de qualifier la sauvegarde d’applicativement cohérente ?',
                        'marks' => 1,
                        'explanation' => 'La cohérence applicative peut nécessiter un outil natif, une coordination ou des journaux permettant une récupération correcte ; une capture bloc n’en donne pas seule la preuve.',
                        'choices' => [
                            ['text' => 'Un point de cohérence applicative vérifié', 'is_correct' => true],
                            ['text' => 'La copie porte seulement une date récente', 'is_correct' => false],
                            ['text' => 'Le volume dispose d’un nom court', 'is_correct' => false],
                            ['text' => 'Le snapshot est créé plus vite qu’une seconde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un jeu complet et ses incrémentales doivent être conservés quatorze jours. Quel piège doit éviter la rétention ?',
                        'marks' => 1,
                        'explanation' => 'La suppression des copies doit respecter les dépendances pour ne pas rendre les points retenus irrécupérables.',
                        'choices' => [
                            ['text' => 'Supprimer une base encore requise par la chaîne', 'is_correct' => true],
                            ['text' => 'Conserver les métadonnées des jeux', 'is_correct' => false],
                            ['text' => 'Contrôler la date des copies', 'is_correct' => false],
                            ['text' => 'Identifier les dépendances de la chaîne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des fichiers restaurés gardent l’UID 1500, mais cet UID désigne une autre personne sur la cible. Quel contrôle est indispensable ?',
                        'marks' => 1,
                        'explanation' => 'La propriété Unix s’appuie sur des identifiants numériques ; une restauration doit respecter les correspondances d’identité du système cible.',
                        'choices' => [
                            ['text' => 'La correspondance des identités et permissions', 'is_correct' => true],
                            ['text' => 'Se fier uniquement au nom du dossier', 'is_correct' => false],
                            ['text' => 'Modifier tous les fichiers pour les rendre publics', 'is_correct' => false],
                            ['text' => 'Supposer que les UID ont le même sens sur tout serveur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Diagnostiquer le réseau et les contrôles d’accès',
                'description' => 'Séparer écoute, routage, résolution de noms, transport et authentification.',
                'difficulty' => 'Intermediate',
                'duration' => 17,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un service est en écoute sur 0.0.0.0:8443. Quelle portée d’écoute est décrite ?',
                        'marks' => 1,
                        'explanation' => '0.0.0.0 est une adresse d’écoute générique IPv4 ; les règles de filtrage et l’écoute IPv6 restent des questions distinctes.',
                        'choices' => [
                            ['text' => 'Toutes les interfaces IPv4 du contexte réseau concerné', 'is_correct' => true],
                            ['text' => 'Toutes les interfaces IPv6 uniquement', 'is_correct' => false],
                            ['text' => 'La seule boucle locale IPv4', 'is_correct' => false],
                            ['text' => 'Toutes les machines du réseau sans filtrage possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le chemin choisi vers 203.0.113.7 doit être inspecté sans supposer la route par défaut. Quelle commande Linux est adaptée ?',
                        'marks' => 1,
                        'explanation' => 'ip route get affiche la décision de routage pour cette destination selon le contexte indiqué ; ce n’est pas un test de réponse distante.',
                        'choices' => [
                            ['text' => 'ip route get 203.0.113.7', 'is_correct' => true],
                            ['text' => 'ip addr flush dev eth0', 'is_correct' => false],
                            ['text' => 'ss -lnt', 'is_correct' => false],
                            ['text' => 'hostname -f', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un serveur DNS précis doit être interrogé pour l’enregistrement A de service.example. Quelle commande le sélectionne explicitement ?',
                        'marks' => 1,
                        'explanation' => 'dig avec @ choisit le résolveur interrogé ; cette consultation explicite ne reproduit pas forcément toutes les sources de résolution utilisées par l’application.',
                        'choices' => [
                            ['text' => 'dig @192.0.2.53 service.example A', 'is_correct' => true],
                            ['text' => 'getent passwd service.example', 'is_correct' => false],
                            ['text' => 'ip route get service.example', 'is_correct' => false],
                            ['text' => 'ss -lnt service.example', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un nom interne fonctionne avec le VPN, mais échoue hors VPN. Quelle hypothèse mérite une vérification ?',
                        'marks' => 1,
                        'explanation' => 'Les réseaux privés utilisent souvent des vues DNS et des routes propres ; il faut identifier les sources et chemins réellement accessibles.',
                        'choices' => [
                            ['text' => 'Une dépendance DNS ou réseau propre au VPN', 'is_correct' => true],
                            ['text' => 'Une corruption certaine de tous les comptes locaux', 'is_correct' => false],
                            ['text' => 'Une absence obligatoire de service sur le serveur', 'is_correct' => false],
                            ['text' => 'Une erreur de permissions du fichier exécutable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un nom se résout et la connexion TCP à 443 expire avant toute négociation TLS. Quelle couche examiner en priorité ?',
                        'marks' => 1,
                        'explanation' => 'Sans établissement TCP, l’authentification applicative n’a pas encore eu lieu ; les indices de transport doivent guider l’enquête.',
                        'choices' => [
                            ['text' => 'Routage, filtrage et disponibilité du socket distant', 'is_correct' => true],
                            ['text' => 'Le mot de passe du compte applicatif', 'is_correct' => false],
                            ['text' => 'Le contenu JSON de la future réponse', 'is_correct' => false],
                            ['text' => 'Le calcul des droits métier après connexion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'ss -lntp montre un port mais pas son processus pour un utilisateur ordinaire. Quelle explication doit être envisagée ?',
                        'marks' => 1,
                        'explanation' => 'L’absence de détail de processus n’implique pas l’absence d’écoute ; certains renseignements sont restreints.',
                        'choices' => [
                            ['text' => 'La visibilité des informations de processus dépend des privilèges et du contexte', 'is_correct' => true],
                            ['text' => 'Aucun processus ne peut posséder ce port', 'is_correct' => false],
                            ['text' => 'Le port appartient forcément à une autre machine', 'is_correct' => false],
                            ['text' => 'Le service est nécessairement arrêté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une base de données n’est utilisée que par un proxy local contrôlé. Quelle exposition réseau est la plus ciblée si l’architecture le permet ?',
                        'marks' => 1,
                        'explanation' => 'Limiter l’écoute et les chemins autorisés réduit l’exposition ; cela ne dispense pas des contrôles d’identité et des droits.',
                        'choices' => [
                            ['text' => 'Une écoute locale et des accès explicitement limités', 'is_correct' => true],
                            ['text' => 'Une écoute publique sans authentification', 'is_correct' => false],
                            ['text' => 'Tous les ports ouverts sur Internet', 'is_correct' => false],
                            ['text' => 'Une suppression des journaux de connexion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une modification d’OpenSSH doit être appliquée à distance. Quel contrôle vérifie la syntaxe de la configuration avant le rechargement ?',
                        'marks' => 1,
                        'explanation' => 'sshd -t vérifie la configuration du démon ; il ne prouve pas à lui seul qu’une connexion réelle passera toutes les politiques et dépendances.',
                        'choices' => [
                            ['text' => 'sshd -t', 'is_correct' => true],
                            ['text' => 'ssh -V', 'is_correct' => false],
                            ['text' => 'ssh-keygen -l -f cle.pub', 'is_correct' => false],
                            ['text' => 'ssh -G serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’authentification par clé échoue après une modification de authorized_keys. Quelle vérification évite de désactiver aveuglément les protections ?',
                        'marks' => 1,
                        'explanation' => 'OpenSSH peut refuser des fichiers dont la propriété ou les permissions ne conviennent pas ; les journaux précisent souvent la cause.',
                        'choices' => [
                            ['text' => 'Contrôler propriétaire, permissions, chemin et messages d’authentification', 'is_correct' => true],
                            ['text' => 'Rendre tout le dossier personnel modifiable par tous', 'is_correct' => false],
                            ['text' => 'Publier la clé privée dans le fichier', 'is_correct' => false],
                            ['text' => 'Désactiver le pare-feu sans regarder les journaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le certificat présenté est valide dans le temps, mais le navigateur rejette le nom du service. Quel élément doit correspondre au nom utilisé ?',
                        'marks' => 1,
                        'explanation' => 'La validation TLS inclut l’identité demandée, pas seulement les dates du certificat ; le bon certificat doit aussi être sélectionné par le service.',
                        'choices' => [
                            ['text' => 'Un nom couvert par le certificat présenté', 'is_correct' => true],
                            ['text' => 'Le nom du compte système propriétaire du processus', 'is_correct' => false],
                            ['text' => 'Le nom de la partition de démarrage', 'is_correct' => false],
                            ['text' => 'Le groupe local de l’administrateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application reçoit un refus d’accès alors que les droits Unix paraissent suffisants et SELinux est actif. Quelle démarche est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Les contrôles d’accès obligatoires peuvent refuser une opération autorisée par les permissions classiques ; il faut traiter la cause précise.',
                        'choices' => [
                            ['text' => 'Examiner la politique et les contextes concernés', 'is_correct' => true],
                            ['text' => 'Désactiver définitivement toute politique de sécurité', 'is_correct' => false],
                            ['text' => 'Ajouter systématiquement chmod 777', 'is_correct' => false],
                            ['text' => 'Modifier l’adresse DNS de la machine', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Administrer des identités et services Windows',
                'description' => 'Utiliser PowerShell, les stratégies de groupe et les droits de domaine avec un périmètre clair.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un administrateur veut consulter l’état des services Windows dans PowerShell. Quelle commande correspond à cette ressource ?',
                        'marks' => 1,
                        'explanation' => 'Get-Service interroge les services ; un processus et un service ne sont pas des objets équivalents.',
                        'choices' => [
                            ['text' => 'Get-Service', 'is_correct' => true],
                            ['text' => 'Get-Process', 'is_correct' => false],
                            ['text' => 'Get-ChildItem', 'is_correct' => false],
                            ['text' => 'Get-LocalGroup', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le besoin porte sur les processus Windows et leur consommation, non sur les seuls services enregistrés. Quelle commande fournit les objets correspondants ?',
                        'marks' => 1,
                        'explanation' => 'Get-Process retourne des informations sur les processus ; plusieurs services ou programmes peuvent être liés différemment à ces processus.',
                        'choices' => [
                            ['text' => 'Get-Process', 'is_correct' => true],
                            ['text' => 'Get-Service', 'is_correct' => false],
                            ['text' => 'Get-ADUser', 'is_correct' => false],
                            ['text' => 'Get-ItemProperty sur un dossier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation veut centraliser les comptes et l’appartenance de machines à un domaine Windows. Quel rôle est adapté ?',
                        'marks' => 1,
                        'explanation' => 'AD DS fournit un annuaire de domaine et participe à l’authentification et à l’organisation des identités ; il dépend aussi de services d’infrastructure.',
                        'choices' => [
                            ['text' => 'Active Directory Domain Services', 'is_correct' => true],
                            ['text' => 'Un partage SMB seul', 'is_correct' => false],
                            ['text' => 'Un serveur d’impression seul', 'is_correct' => false],
                            ['text' => 'Une tâche planifiée locale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un poste ne trouve plus de contrôleur de domaine après un changement DNS. Quelle dépendance doit être vérifiée ?',
                        'marks' => 1,
                        'explanation' => 'Les clients AD utilisent DNS pour localiser des services de domaine ; un résolveur inadapté peut interrompre cette découverte.',
                        'choices' => [
                            ['text' => 'La découverte DNS des services de domaine', 'is_correct' => true],
                            ['text' => 'Le seul résultat d’un ping vers Internet', 'is_correct' => false],
                            ['text' => 'La seule présence d’une adresse IP sur le poste', 'is_correct' => false],
                            ['text' => 'Le nom NetBIOS sans examen des enregistrements de localisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une authentification Kerberos échoue sur une machine dont l’horloge dérive fortement. Quelle piste est cohérente ?',
                        'marks' => 1,
                        'explanation' => 'Kerberos dépend d’horloges suffisamment cohérentes ; la tolérance exacte relève de la configuration et ne doit pas être supposée universelle.',
                        'choices' => [
                            ['text' => 'L’écart de temps peut violer la tolérance de la politique Kerberos', 'is_correct' => true],
                            ['text' => 'Kerberos ne tient jamais compte du temps', 'is_correct' => false],
                            ['text' => 'Un décalage d’heure renforce automatiquement l’authentification', 'is_correct' => false],
                            ['text' => 'Le fuseau affiché remplace toute synchronisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un dossier NTFS doit être accessible à une équipe dont les membres changent. Quelle méthode simplifie les droits ?',
                        'marks' => 1,
                        'explanation' => 'Les groupes réduisent la dispersion des autorisations et facilitent les changements d’appartenance.',
                        'choices' => [
                            ['text' => 'Accorder les droits à un groupe géré puis administrer ses membres', 'is_correct' => true],
                            ['text' => 'Ajouter chaque personne directement dans toutes les ACL', 'is_correct' => false],
                            ['text' => 'Partager un compte humain unique', 'is_correct' => false],
                            ['text' => 'Accorder le contrôle total à tous les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Via SMB, un utilisateur a Lecture au niveau du partage et Modification en NTFS, sans autre règle applicable. Quel accès résulte de cette combinaison ?',
                        'marks' => 1,
                        'explanation' => 'Pour cet accès réseau, les deux ensembles de restrictions s’appliquent ; les droits effectifs ne peuvent pas dépasser la lecture accordée par le partage.',
                        'choices' => [
                            ['text' => 'Lecture', 'is_correct' => true],
                            ['text' => 'Modification complète', 'is_correct' => false],
                            ['text' => 'Contrôle total', 'is_correct' => false],
                            ['text' => 'Aucun accès dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie de groupe semble ne pas s’appliquer à un utilisateur. Quel outil aide à examiner les stratégies résultantes ?',
                        'marks' => 1,
                        'explanation' => 'gpresult fournit des informations sur les stratégies appliquées ou résultantes selon les options et les autorisations disponibles.',
                        'choices' => [
                            ['text' => 'gpresult', 'is_correct' => true],
                            ['text' => 'ipconfig /release', 'is_correct' => false],
                            ['text' => 'taskkill', 'is_correct' => false],
                            ['text' => 'format', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'gpupdate /force est exécuté, mais un réglage exige une nouvelle ouverture de session. Quelle conclusion est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Certains réglages exigent une ouverture de session ou un redémarrage ; le comportement dépend de la stratégie et de son extension.',
                        'choices' => [
                            ['text' => 'Une actualisation ne rend pas chaque réglage immédiatement effectif dans la session existante', 'is_correct' => true],
                            ['text' => 'Tous les réglages doivent toujours changer sans reconnexion', 'is_correct' => false],
                            ['text' => 'La commande supprime toutes les stratégies de domaine', 'is_correct' => false],
                            ['text' => 'Le domaine doit nécessairement être recréé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne est ajoutée à un groupe de domaine, mais son processus conserve un ancien jeton d’accès. Quelle mesure peut être nécessaire pour refléter les nouveaux groupes ?',
                        'marks' => 1,
                        'explanation' => 'Les jetons et tickets existants peuvent conserver un contexte antérieur ; le renouvellement requis dépend du mode d’accès.',
                        'choices' => [
                            ['text' => 'Renouveler le contexte d’authentification approprié', 'is_correct' => true],
                            ['text' => 'Modifier les ACL de tous les dossiers en contrôle total', 'is_correct' => false],
                            ['text' => 'Considérer toute appartenance comme instantanément rétroactive', 'is_correct' => false],
                            ['text' => 'Changer le numéro du port SMB', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des erreurs d’un fournisseur d’événements Windows doivent être interrogées par script. Quelle commande PowerShell est adaptée ?',
                        'marks' => 1,
                        'explanation' => 'Get-WinEvent permet d’interroger les journaux d’événements avec des filtres ; il évite de réduire l’examen à l’interface graphique.',
                        'choices' => [
                            ['text' => 'Get-WinEvent', 'is_correct' => true],
                            ['text' => 'Get-Content uniquement sur un exécutable', 'is_correct' => false],
                            ['text' => 'Get-LocalUser', 'is_correct' => false],
                            ['text' => 'Set-Location', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application compatible dans un domaine doit disposer d’un compte de service avec mot de passe géré automatiquement. Quelle option mérite examen ?',
                        'marks' => 1,
                        'explanation' => 'Un gMSA permet une gestion de mot de passe par le domaine sous les prérequis et usages pris en charge.',
                        'choices' => [
                            ['text' => 'Un compte de service administré de groupe, ou gMSA', 'is_correct' => true],
                            ['text' => 'Un compte administrateur humain partagé', 'is_correct' => false],
                            ['text' => 'Un mot de passe fixe placé dans le code', 'is_correct' => false],
                            ['text' => 'Un compte invité sans identité propre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un collaborateur quitte l’organisation et possède aussi des tâches techniques. Quelle démarche réduit les risques de rupture et d’accès résiduel ?',
                        'marks' => 1,
                        'explanation' => 'Le départ doit traiter l’identité humaine et les dépendances qui lui étaient attachées, sans transformer un compte personnel en identité partagée.',
                        'choices' => [
                            ['text' => 'Retirer ses accès et transférer les dépendances identifiées', 'is_correct' => true],
                            ['text' => 'Conserver tous ses accès tant que son nom apparaît dans un script', 'is_correct' => false],
                            ['text' => 'Supprimer au hasard les comptes de service du même groupe', 'is_correct' => false],
                            ['text' => 'Partager son mot de passe avec son remplaçant', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Exploiter des environnements virtualisés et automatisés',
                'description' => 'Protéger données, limites de ressources et cohérence des configurations.',
                'difficulty' => 'Intermediate',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Deux conteneurs Linux ordinaires exécutés sur le même hôte ne disposent pas chacun d’un noyau invité. Quelle propriété est illustrée ?',
                        'marks' => 1,
                        'explanation' => 'Les conteneurs de processus Linux reposent sur le noyau hôte ; leur isolation ne doit pas être assimilée à celle d’une VM.',
                        'choices' => [
                            ['text' => 'Ils partagent le noyau de l’hôte tout en utilisant des mécanismes d’isolation', 'is_correct' => true],
                            ['text' => 'Chacun démarre obligatoirement son propre hyperviseur', 'is_correct' => false],
                            ['text' => 'Ils ne peuvent pas avoir de limites de ressources', 'is_correct' => false],
                            ['text' => 'Leurs données sont automatiquement sauvegardées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application exige son propre noyau invité et un système d’exploitation complet. Quel environnement correspond directement à ce besoin ?',
                        'marks' => 1,
                        'explanation' => 'Une VM exécute un système invité sur du matériel virtualisé ; un conteneur de processus n’apporte pas son propre noyau.',
                        'choices' => [
                            ['text' => 'Une machine virtuelle adaptée', 'is_correct' => true],
                            ['text' => 'Un simple processus dans un conteneur partageant le noyau hôte', 'is_correct' => false],
                            ['text' => 'Un alias shell', 'is_correct' => false],
                            ['text' => 'Un groupe Unix supplémentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des données sont écrites seulement dans la couche modifiable d’un conteneur qui sera supprimé et recréé. Quelle conception évite de dépendre de cette couche ?',
                        'marks' => 1,
                        'explanation' => 'La persistance doit être séparée du cycle de vie du conteneur ; un volume ne remplace pas non plus la stratégie de sauvegarde.',
                        'choices' => [
                            ['text' => 'Un stockage persistant géré et sauvegardé', 'is_correct' => true],
                            ['text' => 'Une nouvelle étiquette sur l’image', 'is_correct' => false],
                            ['text' => 'Un redémarrage plus fréquent du même service', 'is_correct' => false],
                            ['text' => 'Une augmentation de la sortie standard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un conteneur atteint sa limite mémoire alors que l’hôte a encore de la RAM. Quelle conséquence est possible ?',
                        'marks' => 1,
                        'explanation' => 'Les limites de ressources peuvent être atteintes indépendamment des ressources globalement disponibles ; le comportement dépend du mécanisme et de la configuration.',
                        'choices' => [
                            ['text' => 'Une défaillance ou un arrêt lié à la limite du conteneur', 'is_correct' => true],
                            ['text' => 'L’impossibilité de toute erreur mémoire', 'is_correct' => false],
                            ['text' => 'Une extension automatique illimitée de sa mémoire', 'is_correct' => false],
                            ['text' => 'Une réduction automatique des permissions du fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une étiquette d’image nommée latest change entre deux déploiements. Quel repère facilite le choix d’un contenu précis ?',
                        'marks' => 1,
                        'explanation' => 'Un digest identifie le contenu référencé ; la provenance, les signatures éventuelles et l’analyse de sécurité restent des contrôles distincts.',
                        'choices' => [
                            ['text' => 'Une référence à un digest vérifié', 'is_correct' => true],
                            ['text' => 'Le même nom latest sans autre trace', 'is_correct' => false],
                            ['text' => 'La date du terminal local seulement', 'is_correct' => false],
                            ['text' => 'Un nom de conteneur généré au hasard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script ajoute à chaque passage une même ligne de configuration. Quelle amélioration vise l’idempotence ?',
                        'marks' => 1,
                        'explanation' => 'Une opération idempotente peut être répétée sans dérive supplémentaire lorsque l’état souhaité est déjà atteint.',
                        'choices' => [
                            ['text' => 'Vérifier et établir une seule occurrence de l’état voulu', 'is_correct' => true],
                            ['text' => 'Ajouter deux copies à chaque passage', 'is_correct' => false],
                            ['text' => 'Effacer tout le fichier indépendamment des autres réglages', 'is_correct' => false],
                            ['text' => 'Changer le nom du fichier à chaque exécution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un outil déclare qu’un paquet précis doit être présent dans une version donnée. Quelle approche met-il en œuvre ?',
                        'marks' => 1,
                        'explanation' => 'Une approche déclarative décrit une cible ; l’outil doit déterminer et vérifier les changements nécessaires.',
                        'choices' => [
                            ['text' => 'Une gestion d’état souhaité', 'is_correct' => true],
                            ['text' => 'Un historique de commandes sans contrôle du résultat', 'is_correct' => false],
                            ['text' => 'Une simple collecte de journaux', 'is_correct' => false],
                            ['text' => 'Un test de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un mode de simulation d’automatisation annonce peu de changements. Quelle limite doit être comprise ?',
                        'marks' => 1,
                        'explanation' => 'Les modes de vérification ont un périmètre ; leur prise en charge et les dépendances doivent être vérifiées avant de conclure.',
                        'choices' => [
                            ['text' => 'La couverture réelle du mode reste limitée', 'is_correct' => true],
                            ['text' => 'La simulation garantit l’absence de tout effet ou échec réel', 'is_correct' => false],
                            ['text' => 'Le mode remplace tous les tests d’intégration', 'is_correct' => false],
                            ['text' => 'Les droits de production deviennent sans importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un inventaire désuet classe des serveurs de production dans un groupe de test. Quel risque apparaît lors d’une exécution par groupe ?',
                        'marks' => 1,
                        'explanation' => 'La sûreté de l’automatisation dépend notamment d’un inventaire fiable et d’une vérification des cibles.',
                        'choices' => [
                            ['text' => 'Un changement sur un périmètre involontaire', 'is_correct' => true],
                            ['text' => 'Renommer automatiquement les serveurs', 'is_correct' => false],
                            ['text' => 'Garantir un meilleur cloisonnement', 'is_correct' => false],
                            ['text' => 'Empêcher tout accès privilégié', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une automatisation a besoin d’un secret pour déployer. Quelle fourniture est préférable ?',
                        'marks' => 1,
                        'explanation' => 'L’outil doit obtenir uniquement le secret nécessaire sans le diffuser dans le code, les artefacts ou les traces.',
                        'choices' => [
                            ['text' => 'Un accès contrôlé à un magasin de secrets, avec portée limitée', 'is_correct' => true],
                            ['text' => 'Une valeur en clair copiée dans chaque dépôt', 'is_correct' => false],
                            ['text' => 'Une impression du secret dans les journaux', 'is_correct' => false],
                            ['text' => 'Un compte administrateur partagé sans suivi', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'System Administration Intermediate — Linux Administration',
            'System Administration Intermediate — Processus et Performance',
            'System Administration Intermediate — Réseau et services',
            'System Administration Intermediate — Stockage et sauvegardes',
            'System Administration Intermediate — Sécurité système',
            'System Administration Intermediate — Windows Server Administration',
            'System Administration Intermediate — Virtualisation et conteneurs',
            'System Administration Intermediate — Automatisation et configuration',
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
