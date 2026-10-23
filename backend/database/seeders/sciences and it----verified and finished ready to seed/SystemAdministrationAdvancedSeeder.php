<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemAdministrationAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Diagnostiquer Linux au-delà des pourcentages',
                'description' => 'Interpréter les ressources, limites et états de processus avec plusieurs indices.',
                'difficulty' => 'Advanced',
                'duration' => 26,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'La mémoire libre est faible, mais MemAvailable reste confortable et une grande part de RAM sert au cache de fichiers. Quelle conclusion est prudente ?',
                        'marks' => 1,
                        'explanation' => 'Linux utilise la RAM pour des caches récupérables ; l’évaluation doit considérer mémoire disponible, activité et pression plutôt que le seul champ free.',
                        'choices' => [
                            ['text' => 'Ce seul constat ne prouve pas une fuite', 'is_correct' => true],
                            ['text' => 'Le cache est nécessairement perdu et inutilisable', 'is_correct' => false],
                            ['text' => 'Tout cache doit être vidé immédiatement', 'is_correct' => false],
                            ['text' => 'Un redémarrage est obligatoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La swap est occupée, mais les mesures répétées ne montrent presque aucun échange si/so et la latence est normale. Que peut-on conclure ?',
                        'marks' => 1,
                        'explanation' => 'Des pages peu actives peuvent rester en swap ; les débits de pagination et les symptômes permettent de qualifier la pression actuelle.',
                        'choices' => [
                            ['text' => 'Son occupation ne prouve pas une pagination active', 'is_correct' => true],
                            ['text' => 'Toute swap occupée prouve un blocage permanent', 'is_correct' => false],
                            ['text' => 'Le processeur est nécessairement saturé', 'is_correct' => false],
                            ['text' => 'La mémoire virtuelle n’existe plus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un processus est arrêté pour dépassement mémoire alors que l’hôte dispose de RAM libre. Il appartient à un cgroup v2 limité. Quelle source doit être consultée ?',
                        'marks' => 1,
                        'explanation' => 'Une limite de cgroup peut déclencher une défaillance mémoire localement ; les événements et limites aident à distinguer ce cas d’un manque global.',
                        'choices' => [
                            ['text' => 'Les limites et événements mémoire du cgroup', 'is_correct' => true],
                            ['text' => 'Seulement la taille totale du disque', 'is_correct' => false],
                            ['text' => 'Le TTL des enregistrements DNS', 'is_correct' => false],
                            ['text' => 'La liste des utilisateurs sans leurs processus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le CPU global reste disponible, mais un service soumis à cpu.max présente des périodes de bridage. Quel diagnostic est cohérent ?',
                        'marks' => 1,
                        'explanation' => 'Les limites CPU s’appliquent au groupe concerné ; des statistiques de bridage peuvent expliquer une latence indépendante de la saturation globale.',
                        'choices' => [
                            ['text' => 'Le quota du service peut être limitant', 'is_correct' => true],
                            ['text' => 'Un quota est ignoré tant que le CPU global reste libre', 'is_correct' => false],
                            ['text' => 'Toute latence prouve un défaut DNS', 'is_correct' => false],
                            ['text' => 'L’hôte ne peut pas mesurer les ressources par groupe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indicateur PSI mémoire augmente pendant les ralentissements. Quelle grandeur aide-t-il à observer ?',
                        'marks' => 1,
                        'explanation' => 'PSI mesure des pertes de progression dues à la pression CPU, mémoire ou entrées-sorties ; ce n’est pas un simple pourcentage d’occupation.',
                        'choices' => [
                            ['text' => 'Le temps de blocage des tâches lié à la pression de ressource', 'is_correct' => true],
                            ['text' => 'La seule quantité d’octets actuellement alloués', 'is_correct' => false],
                            ['text' => 'Le nombre de fichiers du répertoire courant', 'is_correct' => false],
                            ['text' => 'Le taux de réussite de l’authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une mesure isolée d’iowait est élevée. Quelle démarche évite d’en déduire trop vite une cause certaine ?',
                        'marks' => 1,
                        'explanation' => 'L’iowait est un indicateur de comptabilité CPU à interpréter avec prudence ; il ne décrit pas seul le délai de chaque requête.',
                        'choices' => [
                            ['text' => 'Croiser attentes, latences et activité du stockage', 'is_correct' => true],
                            ['text' => 'Déclarer le disque défectueux sans autre mesure', 'is_correct' => false],
                            ['text' => 'Remplacer immédiatement tous les processeurs', 'is_correct' => false],
                            ['text' => 'Assimiler iowait à un temps d’attente exact de chaque application', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un stockage NVMe parallèle affiche un %util élevé dans iostat. Quelle conclusion doit être évitée sans autres mesures ?',
                        'marks' => 1,
                        'explanation' => 'Sur des périphériques parallèles, l’occupation temporelle ne représente pas à elle seule la limite de traitement ; les latences et le débit complètent l’analyse.',
                        'choices' => [
                            ['text' => 'Conclure à une saturation sur ce seul pourcentage', 'is_correct' => true],
                            ['text' => 'Examiner les latences observées', 'is_correct' => false],
                            ['text' => 'Comparer débit et charge représentative', 'is_correct' => false],
                            ['text' => 'Vérifier les files et les capacités du matériel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un processus zombie reste dans la liste après plusieurs tentatives de kill. Quelle action traite le mécanisme en cause ?',
                        'marks' => 1,
                        'explanation' => 'Un zombie a terminé ; le parent doit récupérer son statut par un mécanisme tel que wait. Il ne s’agit pas d’un programme encore calculant.',
                        'choices' => [
                            ['text' => 'Faire traiter la récupération du statut par le parent', 'is_correct' => true],
                            ['text' => 'Envoyer SIGKILL de façon illimitée au zombie', 'is_correct' => false],
                            ['text' => 'Ajouter de la swap pour lui rendre son CPU', 'is_correct' => false],
                            ['text' => 'Réécrire son fichier exécutable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un processus attend une entrée-sortie en état D et ne disparaît pas aussitôt après SIGKILL. Quelle lecture est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Un signal fatal peut rester en attente pendant certaines opérations noyau non interruptibles ; il faut aussi rechercher la cause de l’attente.',
                        'choices' => [
                            ['text' => 'Une attente non interruptible peut retarder l’arrêt', 'is_correct' => true],
                            ['text' => 'SIGKILL garantit toujours une disparition immédiate', 'is_correct' => false],
                            ['text' => 'Le processus est forcément un zombie', 'is_correct' => false],
                            ['text' => 'Une autre valeur de nice débloque forcément le stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application atteint sa limite de descripteurs avec « Too many open files ». Quelle vérification cible ce cas ?',
                        'marks' => 1,
                        'explanation' => 'Les descripteurs et leurs limites sont distincts de l’espace disque ; une fuite ou une charge excessive peut atteindre la limite par processus.',
                        'choices' => [
                            ['text' => 'La limite du processus et ses descripteurs ouverts', 'is_correct' => true],
                            ['text' => 'Le nombre d’inodes libres uniquement', 'is_correct' => false],
                            ['text' => 'La taille du fichier passwd', 'is_correct' => false],
                            ['text' => 'Le nombre de routes par défaut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une opération dure dix secondes mais son processus ne consomme qu’une seconde CPU. Quelle hypothèse doit être étudiée ?',
                        'marks' => 1,
                        'explanation' => 'Le temps écoulé comprend les attentes réseau, stockage, verrous et ordonnancement ; il ne se confond pas avec le temps réellement exécuté sur CPU.',
                        'choices' => [
                            ['text' => 'Le reste peut correspondre à des attentes', 'is_correct' => true],
                            ['text' => 'Le compteur CPU doit égaler toute durée murale', 'is_correct' => false],
                            ['text' => 'Le processus a nécessairement utilisé dix cœurs', 'is_correct' => false],
                            ['text' => 'Le programme s’est exécuté deux fois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nombre de changements de contexte augmente après l’arrivée d’une charge nouvelle. Quelle analyse est défendable ?',
                        'marks' => 1,
                        'explanation' => 'Les changements de contexte peuvent refléter un fonctionnement normal ou une contention ; leur coût se juge dans le contexte de la charge.',
                        'choices' => [
                            ['text' => 'Relier le volume à la charge et aux symptômes', 'is_correct' => true],
                            ['text' => 'Considérer toute augmentation comme une panne noyau', 'is_correct' => false],
                            ['text' => 'Désactiver les tâches sans examiner leur rôle', 'is_correct' => false],
                            ['text' => 'Déduire directement une fuite de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une unité Type=oneshot avec RemainAfterExit=yes est affichée active (exited) après succès. Quelle interprétation est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Cette configuration permet de conserver un état après la fin de l’action ; actif n’implique pas toujours un processus permanent.',
                        'choices' => [
                            ['text' => 'Son action est terminée mais systemd conserve l’état actif prévu', 'is_correct' => true],
                            ['text' => 'Un démon doit obligatoirement continuer à tourner', 'is_correct' => false],
                            ['text' => 'Le statut prouve un plantage silencieux', 'is_correct' => false],
                            ['text' => 'Une unité sans processus ne peut jamais être active', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Résoudre des incidents réseau, DNS et TLS',
                'description' => 'Établir le lieu d’échec avant de modifier les contrôles.',
                'difficulty' => 'Advanced',
                'duration' => 24,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une capture côté client montre des SYN répétés sans SYN-ACK. Quelle suite apporte des preuves utiles ?',
                        'marks' => 1,
                        'explanation' => 'L’absence de réponse peut venir du trajet aller, retour, du filtrage ou du serveur ; la capture à plusieurs points localise ce qui est réellement observé.',
                        'choices' => [
                            ['text' => 'Comparer les observations sur le chemin', 'is_correct' => true],
                            ['text' => 'Déduire un refus applicatif avant toute connexion', 'is_correct' => false],
                            ['text' => 'Changer le certificat sans examiner le transport', 'is_correct' => false],
                            ['text' => 'Augmenter les délais sans chercher le point de perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une connexion traverse un pare-feu à l’aller mais revient par un autre chemin. Quel risque existe pour un filtrage à état ?',
                        'marks' => 1,
                        'explanation' => 'Selon le déploiement, un chemin asymétrique peut empêcher un équipement de reconnaître le flux établi ; les routes et états doivent être examinés ensemble.',
                        'choices' => [
                            ['text' => 'Un rejet possible faute d’état cohérent', 'is_correct' => true],
                            ['text' => 'Le routage asymétrique garantit toujours le chiffrement', 'is_correct' => false],
                            ['text' => 'Toute asymétrie est nécessairement sans conséquence', 'is_correct' => false],
                            ['text' => 'Le DNS rétablit automatiquement l’état de connexion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'De petits paquets passent, mais des échanges plus volumineux bloquent après un tunnel. Quelle piste doit être testée ?',
                        'marks' => 1,
                        'explanation' => 'Une MTU réduite et des messages de contrôle filtrés peuvent provoquer ce symptôme ; captures et essais adaptés sont nécessaires pour le confirmer.',
                        'choices' => [
                            ['text' => 'Un problème de MTU de chemin ou de découverte de cette MTU', 'is_correct' => true],
                            ['text' => 'Une absence certaine de compte utilisateur', 'is_correct' => false],
                            ['text' => 'Un manque obligatoire d’inodes sur le client', 'is_correct' => false],
                            ['text' => 'Une erreur de mot de passe HTTP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un enregistrement DNS a été modifié sur l’autorité, mais un résolveur renvoie encore l’ancienne valeur dans son TTL restant. Quelle explication est plausible ?',
                        'marks' => 1,
                        'explanation' => 'Une valeur déjà mise en cache peut rester visible jusqu’à son expiration selon le fonctionnement du résolveur ; la propagation n’est pas une invalidation globale.',
                        'choices' => [
                            ['text' => 'Une ancienne réponse reste en cache', 'is_correct' => true],
                            ['text' => 'Le TTL oblige tous les clients à mettre à jour immédiatement', 'is_correct' => false],
                            ['text' => 'Une modification d’autorité vide tous les caches', 'is_correct' => false],
                            ['text' => 'Le nom a nécessairement été usurpé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’autorité DNS renvoie la nouvelle adresse et un seul résolveur récursif renvoie l’ancienne. Quel test cible la différence ?',
                        'marks' => 1,
                        'explanation' => 'La comparaison permet de distinguer état publié et cache ou configuration du résolveur concerné.',
                        'choices' => [
                            ['text' => 'Comparer les réponses et TTL des deux serveurs', 'is_correct' => true],
                            ['text' => 'Vider uniquement le cache du navigateur sans interroger le résolveur', 'is_correct' => false],
                            ['text' => 'Modifier la zone encore correcte sans examiner le cache', 'is_correct' => false],
                            ['text' => 'Désactiver la validation TLS pour tester le nom', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Plusieurs sites TLS partagent une même adresse et le mauvais certificat est présenté lors d’un test par IP. Quel élément du client peut sélectionner le nom de serveur attendu ?',
                        'marks' => 1,
                        'explanation' => 'SNI transmet le nom souhaité pendant la négociation ; la validation du nom et de la chaîne reste aussi nécessaire.',
                        'choices' => [
                            ['text' => 'SNI avec le nom correct', 'is_correct' => true],
                            ['text' => 'Le numéro de PID du client', 'is_correct' => false],
                            ['text' => 'Le propriétaire Unix du certificat', 'is_correct' => false],
                            ['text' => 'L’ordre des groupes de l’utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fichier de certificat a été renouvelé, mais le service présente toujours l’ancien sur le port public. Quelle vérification est prioritaire ?',
                        'marks' => 1,
                        'explanation' => 'Le fichier à jour ne prouve pas que le processus ou le bon point de terminaison l’a chargé.',
                        'choices' => [
                            ['text' => 'Le certificat réellement servi et son rechargement', 'is_correct' => true],
                            ['text' => 'La seule date du fichier renouvelé sur le serveur de gestion', 'is_correct' => false],
                            ['text' => 'Le seul résultat de copie sans test du port public', 'is_correct' => false],
                            ['text' => 'Le seul changement de numéro dans l’inventaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La table main semble correcte, mais un flux part avec une autre passerelle. Quel mécanisme Linux doit aussi être examiné ?',
                        'marks' => 1,
                        'explanation' => 'Des règles ip rule peuvent sélectionner une autre table selon source, marques ou autres critères ; la table main n’explique pas toujours le résultat.',
                        'choices' => [
                            ['text' => 'Les règles et tables de routage par politique', 'is_correct' => true],
                            ['text' => 'Les seuls droits de lecture du navigateur', 'is_correct' => false],
                            ['text' => 'Le nom du groupe principal', 'is_correct' => false],
                            ['text' => 'La rotation des archives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une nouvelle règle de filtrage, une session d’administration existante fonctionne mais aucune nouvelle session ne s’ouvre. Quelle explication est possible ?',
                        'marks' => 1,
                        'explanation' => 'Un pare-feu à état peut autoriser les connexions connues tout en bloquant leur création ; les essais doivent inclure une nouvelle connexion.',
                        'choices' => [
                            ['text' => 'Un filtrage différent des flux établis et nouveaux', 'is_correct' => true],
                            ['text' => 'Une session existante prouve que toutes les nouvelles sont autorisées', 'is_correct' => false],
                            ['text' => 'Le filtrage ne peut pas distinguer les états', 'is_correct' => false],
                            ['text' => 'Une clé privée ne peut être utilisée qu’une fois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les requêtes DNS UDP simples réussissent, mais certaines réponses nécessitant TCP échouent. Quel contrôle réseau doit être examiné ?',
                        'marks' => 1,
                        'explanation' => 'DNS utilise aussi TCP, notamment pour certains échanges ou réponses ; n’autoriser qu’UDP peut produire des échecs sélectifs.',
                        'choices' => [
                            ['text' => 'La prise en charge de DNS sur TCP, notamment le port concerné', 'is_correct' => true],
                            ['text' => 'Le seul port HTTPS du site final', 'is_correct' => false],
                            ['text' => 'Les permissions du fichier de zone uniquement', 'is_correct' => false],
                            ['text' => 'Le code de sortie de whoami', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un durcissement bloque tout ICMPv6 puis la découverte des voisins ou des chemins ne fonctionne plus correctement. Quelle erreur de conception est illustrée ?',
                        'marks' => 1,
                        'explanation' => 'Plusieurs fonctions IPv6 reposent sur des messages ICMPv6 ; une politique doit les traiter selon leur rôle plutôt que tout bloquer aveuglément.',
                        'choices' => [
                            ['text' => 'Des fonctions de contrôle IPv6 ont été bloquées', 'is_correct' => true],
                            ['text' => 'Supposer que tout ICMPv6 transporte des mots de passe', 'is_correct' => false],
                            ['text' => 'Considérer que DNS remplace la découverte de voisins', 'is_correct' => false],
                            ['text' => 'Penser qu’un pare-feu désactive le besoin de routes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après de nombreuses connexions TCP courtes, des sockets TIME_WAIT sont visibles alors que les processus correspondants ont fermé leurs connexions. Quelle conclusion est prudente ?',
                        'marks' => 1,
                        'explanation' => 'TIME_WAIT fait partie de la fermeture TCP et peut subsister sans processus propriétaire actif ; son volume et ses effets sur les ressources doivent être évalués dans le contexte.',
                        'choices' => [
                            ['text' => 'Cet état de protocole ne prouve pas à lui seul une fuite de processus', 'is_correct' => true],
                            ['text' => 'Chaque entrée représente forcément un processus zombie', 'is_correct' => false],
                            ['text' => 'TIME_WAIT indique toujours un port en écoute', 'is_correct' => false],
                            ['text' => 'Un redémarrage du noyau est obligatoire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Renforcer les accès sans contourner les protections',
                'description' => 'Comprendre les interactions entre droits classiques, politiques et secrets.',
                'difficulty' => 'Advanced',
                'duration' => 23,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une ACL accorde rwx à l’utilisateur app, mais son masque effectif est r-x. App n’est pas le propriétaire du fichier. Quel accès cette entrée permet-elle au maximum ?',
                        'marks' => 1,
                        'explanation' => 'Le masque borne les droits effectifs des entrées nommées concernées ; il retire ici l’écriture pourtant présente dans l’entrée.',
                        'choices' => [
                            ['text' => 'Lecture et exécution, sans écriture', 'is_correct' => true],
                            ['text' => 'Lecture, écriture et exécution', 'is_correct' => false],
                            ['text' => 'Écriture seule', 'is_correct' => false],
                            ['text' => 'Aucun droit à cause de l’existence d’un masque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec les permissions Unix classiques seules, un répertoire sans sticky bit est accessible en écriture et traversée à un utilisateur. Le fichier qu’il contient est en 444. Quelle opération peut rester possible sur ce nom ?',
                        'marks' => 1,
                        'explanation' => 'La suppression d’un nom dépend principalement des droits du répertoire ; d’autres contrôles exclus ici pourraient encore la restreindre.',
                        'choices' => [
                            ['text' => 'Supprimer son entrée dans le répertoire', 'is_correct' => true],
                            ['text' => 'Modifier directement le contenu du fichier malgré le mode', 'is_correct' => false],
                            ['text' => 'Changer automatiquement le propriétaire du fichier', 'is_correct' => false],
                            ['text' => 'Exécuter le fichier sans droit d’exécution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un programme demande la création d’un fichier ordinaire en 0666 et l’umask vaut 0027, sans ACL par défaut. Quel mode est obtenu ?',
                        'marks' => 2,
                        'explanation' => 'Les bits de l’umask sont retirés du mode demandé : 0666 et le complément de 0027 donnent 0640.',
                        'choices' => [
                            ['text' => '0640', 'is_correct' => true],
                            ['text' => '0627', 'is_correct' => false],
                            ['text' => '0666', 'is_correct' => false],
                            ['text' => '0750', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique SSH contient des blocs Match selon utilisateur et adresse. Quel examen aide à voir les réglages applicables à un contexte précis ?',
                        'marks' => 1,
                        'explanation' => 'Le mode étendu peut évaluer les blocs Match selon le contexte fourni ; il faut encore tester la connexion réelle et ses dépendances.',
                        'choices' => [
                            ['text' => 'sshd -T avec le contexte -C approprié', 'is_correct' => true],
                            ['text' => 'ssh -V seul', 'is_correct' => false],
                            ['text' => 'La lecture des seules premières lignes du fichier', 'is_correct' => false],
                            ['text' => 'Un test de ping vers le serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle sudo autorise un éditeur privilégié sur n’importe quel chemin. Quel risque doit être pris en compte ?',
                        'marks' => 1,
                        'explanation' => 'Un éditeur peut offrir écriture arbitraire ou exécution de commandes ; la délégation doit considérer ses capacités réelles et son périmètre.',
                        'choices' => [
                            ['text' => 'L’éditeur peut dépasser le périmètre imaginé', 'is_correct' => true],
                            ['text' => 'L’autorisation est forcément limitée à une lecture sans effet', 'is_correct' => false],
                            ['text' => 'Le mot de passe sudo annule toutes les capacités de l’éditeur', 'is_correct' => false],
                            ['text' => 'Le nom de la commande garantit son confinement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une clé privée SSH de production est divulguée. Quel traitement répond à l’identité compromise ?',
                        'marks' => 1,
                        'explanation' => 'Le traitement doit couvrir les systèmes qui acceptent cette identité et suivre les usages possibles ; renommer une copie ne l’invalide pas.',
                        'choices' => [
                            ['text' => 'Retirer l’identité exposée et la remplacer', 'is_correct' => true],
                            ['text' => 'Créer une clé neuve sans retirer l’ancienne des serveurs', 'is_correct' => false],
                            ['text' => 'Fermer une session en laissant la clé autorisée partout', 'is_correct' => false],
                            ['text' => 'Changer seulement le mot de passe du compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les journaux sont centralisés mais le compte du serveur source peut effacer l’historique distant. Quel cloisonnement améliore leur valeur de preuve ?',
                        'marks' => 1,
                        'explanation' => 'Des droits d’envoi limités et une conservation protégée réduisent la capacité d’un système compromis à effacer ses traces.',
                        'choices' => [
                            ['text' => 'Séparer l’envoi des droits de suppression', 'is_correct' => true],
                            ['text' => 'Donner le même compte administrateur à tous les serveurs', 'is_correct' => false],
                            ['text' => 'Conserver une seule copie locale', 'is_correct' => false],
                            ['text' => 'Désactiver les horodatages des événements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des fichiers restaurés ont un contexte SELinux inattendu pour leur emplacement. Quelle correction doit être évaluée ?',
                        'marks' => 1,
                        'explanation' => 'Un contexte incorrect peut expliquer le refus ; il faut rétablir la politique attendue plutôt que contourner globalement les contrôles.',
                        'choices' => [
                            ['text' => 'Rétablir les contextes prévus par la politique', 'is_correct' => true],
                            ['text' => 'Désactiver SELinux sur tout le parc', 'is_correct' => false],
                            ['text' => 'Donner 777 à l’ensemble des fichiers', 'is_correct' => false],
                            ['text' => 'Modifier le nom DNS du serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une clé privée chiffrée est déverrouillée puis conservée dans un agent SSH. Quelle protection la phrase secrète apporte-t-elle principalement au fichier stocké ?',
                        'marks' => 1,
                        'explanation' => 'La phrase secrète protège la clé au repos ; l’usage par un agent déverrouillé et les exigences de facteurs côté serveur sont des questions distinctes.',
                        'choices' => [
                            ['text' => 'La protection du fichier de clé au repos', 'is_correct' => true],
                            ['text' => 'Elle prouve un second défi serveur à chaque connexion via l’agent', 'is_correct' => false],
                            ['text' => 'Elle remplace l’authentification du serveur', 'is_correct' => false],
                            ['text' => 'Elle interdit tout accès au compte après déverrouillage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un mot de passe est passé comme argument en ligne de commande à un outil de sauvegarde. Quelle exposition doit être évaluée ?',
                        'marks' => 1,
                        'explanation' => 'Les arguments peuvent être observables ; un mécanisme d’entrée de secret conçu pour l’outil doit limiter cette exposition.',
                        'choices' => [
                            ['text' => 'Une fuite possible par les arguments et traces', 'is_correct' => true],
                            ['text' => 'Son chiffrement automatique par le shell', 'is_correct' => false],
                            ['text' => 'Sa suppression garantie après une seconde', 'is_correct' => false],
                            ['text' => 'Son remplacement automatique par un jeton unique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un renouvellement de clé privée et de certificat est appliqué sur plusieurs nœuds. Quel contrôle détecte un couple incohérent ?',
                        'marks' => 1,
                        'explanation' => 'Un certificat doit correspondre à la clé détenue et être réellement chargé ; la réussite de copie des fichiers ne prouve pas cette cohérence.',
                        'choices' => [
                            ['text' => 'Vérifier le couple et la négociation sur les cibles', 'is_correct' => true],
                            ['text' => 'Vérifier seulement que les fichiers portent la même date', 'is_correct' => false],
                            ['text' => 'Comparer uniquement leur taille', 'is_correct' => false],
                            ['text' => 'Tester seulement le port sans négociation TLS', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Garantir la cohérence du stockage et de la reprise',
                'description' => 'Relier quorum, isolation des nœuds et protection des données.',
                'difficulty' => 'Advanced',
                'duration' => 29,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un groupe à quorum majoritaire comprend cinq membres votants et suppose les autres conditions de fonctionnement satisfaites. Combien de membres doivent rester disponibles pour une majorité ?',
                        'marks' => 1,
                        'explanation' => 'Une majorité stricte de cinq exige trois membres ; cela ne garantit pas à lui seul la santé de toutes les autres dépendances.',
                        'choices' => [
                            ['text' => 'Trois', 'is_correct' => true],
                            ['text' => 'Deux', 'is_correct' => false],
                            ['text' => 'Un', 'is_correct' => false],
                            ['text' => 'Les cinq sans exception', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux nœuds pourraient écrire sur le même stockage après une partition réseau. Quel mécanisme vise à empêcher l’ancien actif de continuer ses écritures ?',
                        'marks' => 1,
                        'explanation' => 'Le fencing retire effectivement la capacité d’accès ou de fonctionnement du nœud exclu ; une bascule logique seule peut laisser deux auteurs concurrents.',
                        'choices' => [
                            ['text' => 'Un mécanisme de fencing fiable', 'is_correct' => true],
                            ['text' => 'Le seul déplacement d’une adresse virtuelle', 'is_correct' => false],
                            ['text' => 'Une réduction de la durée DNS', 'is_correct' => false],
                            ['text' => 'L’ajout d’un tableau de bord', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un nœud entre et sort du pool à chaque échec isolé d’une sonde. Quelle politique limite des bascules incessantes sans masquer une panne durable ?',
                        'marks' => 1,
                        'explanation' => 'Des seuils et une hystérésis réduisent les oscillations ; ils doivent rester compatibles avec les délais de détection et le risque du service.',
                        'choices' => [
                            ['text' => 'Des seuils de confirmation et une stabilisation adaptés', 'is_correct' => true],
                            ['text' => 'Une bascule immédiate et inverse à chaque paquet perdu', 'is_correct' => false],
                            ['text' => 'Une suppression définitive des sondes', 'is_correct' => false],
                            ['text' => 'Une réintégration systématique sans test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un acquittement d’écriture attend la confirmation d’un site distant synchrone. Quel coût doit être inclus dans la latence ?',
                        'marks' => 1,
                        'explanation' => 'Une réplication synchrone ajoute une dépendance au chemin distant selon le protocole et la garantie de confirmation utilisée.',
                        'choices' => [
                            ['text' => 'Le délai de confirmation du chemin distant', 'is_correct' => true],
                            ['text' => 'Seulement l’écriture en cache du client', 'is_correct' => false],
                            ['text' => 'Un délai DNS identique pour chaque bloc', 'is_correct' => false],
                            ['text' => 'La seule fréquence du processeur local', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un site accepte une écriture puis tombe avant que la réplication asynchrone l’envoie ailleurs. Quel risque existe au basculement ?',
                        'marks' => 1,
                        'explanation' => 'La confirmation locale peut précéder la copie distante ; le décalage de réplication participe au risque de perte.',
                        'choices' => [
                            ['text' => 'Perdre une écriture déjà confirmée côté source', 'is_correct' => true],
                            ['text' => 'Garantir automatiquement une perte nulle', 'is_correct' => false],
                            ['text' => 'Retrouver l’écriture par le seul changement d’adresse IP', 'is_correct' => false],
                            ['text' => 'Annuler tous les droits de la base', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ensemble RAID est dégradé et une reconstruction commence. Quelle prudence est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'La reconstruction sollicite le stockage et la protection restante dépend du niveau et de l’état de l’ensemble ; des sauvegardes restent nécessaires.',
                        'choices' => [
                            ['text' => 'Suivre la reconstruction et la protection restante', 'is_correct' => true],
                            ['text' => 'Considérer la reconstruction comme une sauvegarde indépendante', 'is_correct' => false],
                            ['text' => 'Retirer les copies historiques pour gagner de la place', 'is_correct' => false],
                            ['text' => 'Déclarer toute panne supplémentaire impossible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un RAID 6 comprend huit disques de 4 To identiques. Sans compter métadonnées, réserves ni conversion en Tio, quelle capacité utile théorique obtient-on ?',
                        'marks' => 2,
                        'explanation' => 'RAID 6 réserve l’équivalent de deux disques à la parité : (8 − 2) × 4 = 24 To dans les hypothèses indiquées.',
                        'choices' => [
                            ['text' => '24 To', 'is_correct' => true],
                            ['text' => '32 To', 'is_correct' => false],
                            ['text' => '16 To', 'is_correct' => false],
                            ['text' => '28 To', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les volumes logiques fins totalisent plus de capacité annoncée que le stockage physique disponible. Quelle surveillance est essentielle ?',
                        'marks' => 1,
                        'explanation' => 'L’allocation fine reporte la consommation physique ; un pool ou ses métadonnées peuvent se remplir avant les limites apparentes des volumes.',
                        'choices' => [
                            ['text' => 'L’usage du pool physique et de ses métadonnées', 'is_correct' => true],
                            ['text' => 'Le seul total des tailles logiques annoncées', 'is_correct' => false],
                            ['text' => 'Le nombre de comptes utilisateurs', 'is_correct' => false],
                            ['text' => 'Le nom des volumes virtuels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après plusieurs snapshots, un stockage se remplit bien que le volume courant ait peu changé de taille visible. Quelle piste est cohérente ?',
                        'marks' => 1,
                        'explanation' => 'Les snapshots peuvent retenir des versions de blocs qui ne sont plus visibles dans l’état courant ; leur coût évolue avec les écritures et la rétention.',
                        'choices' => [
                            ['text' => 'Les versions conservées retiennent des blocs modifiés', 'is_correct' => true],
                            ['text' => 'Les snapshots n’occupent jamais d’espace', 'is_correct' => false],
                            ['text' => 'Un snapshot réduit toujours la capacité utilisée', 'is_correct' => false],
                            ['text' => 'Tous les anciens blocs sont libérés dès la première écriture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une copie chiffrée est conservée hors site, mais la seule clé de récupération reste sur le site principal. Quel risque demeure ?',
                        'marks' => 1,
                        'explanation' => 'La reprise dépend aussi de clés accessibles et protégées dans le scénario de perte envisagé.',
                        'choices' => [
                            ['text' => 'La perte du moyen de déchiffrement', 'is_correct' => true],
                            ['text' => 'Une réplication automatiquement synchrone', 'is_correct' => false],
                            ['text' => 'Un accès public obligatoire aux copies', 'is_correct' => false],
                            ['text' => 'Une disparition du besoin de contrôle d’intégrité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une sauvegarde est annoncée immuable pendant sa rétention. Quelle propriété doit être vérifiée dans le modèle d’accès ?',
                        'marks' => 1,
                        'explanation' => 'L’efficacité dépend du mode de conservation et des droits réels ; elle ne prouve ni la propreté des données ni la restaurabilité.',
                        'choices' => [
                            ['text' => 'L’impossibilité d’altérer la protection avec les accès exposés', 'is_correct' => true],
                            ['text' => 'Le serveur source dispose de tous les droits sur sa rétention', 'is_correct' => false],
                            ['text' => 'Toute immuabilité garantit des données non corrompues', 'is_correct' => false],
                            ['text' => 'Une sauvegarde immuable n’a pas besoin de restauration testée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application écrit de façon coordonnée sur plusieurs volumes. Quel risque existe avec des captures indépendantes non synchronisées ?',
                        'marks' => 1,
                        'explanation' => 'Une restauration doit respecter les dépendances et points de cohérence entre volumes et mécanismes applicatifs.',
                        'choices' => [
                            ['text' => 'Une restauration multi-volume incohérente', 'is_correct' => true],
                            ['text' => 'Créer forcément une copie plus récente que la source', 'is_correct' => false],
                            ['text' => 'Chiffrer automatiquement toutes les données', 'is_correct' => false],
                            ['text' => 'Éliminer les journaux de transaction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un système de fichiers repasse en lecture seule après des erreurs d’entrées-sorties. Quelle réaction est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Le passage en lecture seule peut protéger les données ; contourner la protection sans comprendre les erreurs risque d’aggraver la situation.',
                        'choices' => [
                            ['text' => 'Examiner les erreurs avant de forcer l’écriture', 'is_correct' => true],
                            ['text' => 'Réappliquer mount en écriture en boucle sans diagnostic', 'is_correct' => false],
                            ['text' => 'Étendre les droits des utilisateurs', 'is_correct' => false],
                            ['text' => 'Effacer les messages noyau pour stabiliser le système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une restauration démarre sur un volume dont l’UUID diffère de celui attendu dans la configuration de montage. Quel contrôle facilite la remise en service ?',
                        'marks' => 1,
                        'explanation' => 'Le démarrage et les montages dépendent de références qui doivent désigner les bons volumes après une restauration.',
                        'choices' => [
                            ['text' => 'La correspondance des volumes et références de montage', 'is_correct' => true],
                            ['text' => 'Changer uniquement le mot de passe de l’opérateur', 'is_correct' => false],
                            ['text' => 'Supposer que le nom /dev/sdX restera identique', 'is_correct' => false],
                            ['text' => 'Copier une configuration d’un autre serveur sans comparaison', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Maîtriser l’automatisation d’un parc',
                'description' => 'Traiter état, concurrence, secrets et déploiement comme des risques d’exploitation.',
                'difficulty' => 'Advanced',
                'duration' => 21,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une modification manuelle améliore temporairement un serveur, mais le prochain passage de configuration l’annule. Quel travail évite cette divergence durable ?',
                        'marks' => 1,
                        'explanation' => 'Une correction durable doit être intégrée ou explicitement exclue du modèle de configuration, avec justification.',
                        'choices' => [
                            ['text' => 'Réconcilier la correction avec l’état souhaité', 'is_correct' => true],
                            ['text' => 'Multiplier les modifications manuelles après chaque passage', 'is_correct' => false],
                            ['text' => 'Retirer toutes les traces du changement', 'is_correct' => false],
                            ['text' => 'Désactiver définitivement la gestion du parc', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle image de référence contient un correctif. Quelle action reste nécessaire pour les instances déjà créées ?',
                        'marks' => 1,
                        'explanation' => 'Une image décrit le contenu de nouvelles créations ; elle ne transforme pas automatiquement les machines qui en proviennent.',
                        'choices' => [
                            ['text' => 'Mettre à jour ou remplacer les instances existantes', 'is_correct' => true],
                            ['text' => 'Supposer que modifier l’image réécrit tous les hôtes', 'is_correct' => false],
                            ['text' => 'Changer le nom de l’image seulement', 'is_correct' => false],
                            ['text' => 'Supprimer les journaux des anciennes instances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un plan IaC propose de recréer un volume de production contenant des données. Quel examen doit précéder l’application ?',
                        'marks' => 1,
                        'explanation' => 'Un plan est une proposition de changement ; les destructions et remplacements de ressources à état exigent une revue adaptée.',
                        'choices' => [
                            ['text' => 'Examiner le remplacement et la conservation des données', 'is_correct' => true],
                            ['text' => 'Accepter le plan parce qu’il est généré automatiquement', 'is_correct' => false],
                            ['text' => 'Masquer les ressources détruites dans le compte rendu', 'is_correct' => false],
                            ['text' => 'Lancer l’application depuis plusieurs postes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un outil marque une sortie comme sensitive mais conserve un état contenant le secret. Quelle protection reste nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Une indication de sensibilité peut masquer l’interface sans supprimer le secret de l’état ; sa protection reste indispensable.',
                        'choices' => [
                            ['text' => 'Protéger le stockage d’état lui-même', 'is_correct' => true],
                            ['text' => 'Considérer le masquage d’affichage comme un chiffrement du fichier d’état', 'is_correct' => false],
                            ['text' => 'Publier l’état parce que la sortie est masquée', 'is_correct' => false],
                            ['text' => 'Donner l’écriture d’état à tous les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux opérateurs appliquent des changements sur le même état distant. Quel mécanisme aide à éviter leurs écritures simultanées non coordonnées ?',
                        'marks' => 1,
                        'explanation' => 'Un verrou d’état coordonne les clients qui l’utilisent ; il ne bloque pas les modifications manuelles externes ni d’autres états indépendants.',
                        'choices' => [
                            ['text' => 'Un verrou du backend d’état commun', 'is_correct' => true],
                            ['text' => 'Deux copies locales divergentes sans coordination', 'is_correct' => false],
                            ['text' => 'Un nom de branche identique seulement', 'is_correct' => false],
                            ['text' => 'Une fermeture des journaux de la pipeline', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un groupe de stockage exige un quorum pendant les mises à jour. Quelle vague d’automatisation protège cette contrainte ?',
                        'marks' => 1,
                        'explanation' => 'Le parallélisme doit tenir compte de la disponibilité minimale et des domaines de panne, pas seulement de la vitesse.',
                        'choices' => [
                            ['text' => 'Des vagues respectant santé et quorum', 'is_correct' => true],
                            ['text' => 'Un redémarrage simultané de tous les membres', 'is_correct' => false],
                            ['text' => 'Une taille de vague choisie seulement selon la durée d’installation', 'is_correct' => false],
                            ['text' => 'Une poursuite automatique malgré les premiers échecs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une mise à jour échoue sur les premières machines pilotes. Quelle action rend le déploiement global plus sûr ?',
                        'marks' => 1,
                        'explanation' => 'Les pilotes doivent produire un signal de décision ; ignorer leur échec retire l’intérêt du déploiement progressif.',
                        'choices' => [
                            ['text' => 'Stopper l’élargissement et qualifier l’échec selon les critères prévus', 'is_correct' => true],
                            ['text' => 'Accélérer la vague pour terminer avant l’analyse', 'is_correct' => false],
                            ['text' => 'Désactiver les vérifications restantes', 'is_correct' => false],
                            ['text' => 'Retenter sur toutes les machines sans borne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une tâche est idempotente lorsqu’elle est exécutée seule, mais deux exécutions concurrentes créent un doublon après le même contrôle d’absence. Quelle protection manque ?',
                        'marks' => 1,
                        'explanation' => 'L’idempotence en exécution séquentielle ne prouve pas l’innocuité d’un contrôle puis création concurrent sans coordination.',
                        'choices' => [
                            ['text' => 'Une garantie atomique ou une coordination concurrente', 'is_correct' => true],
                            ['text' => 'Une simple répétition plus fréquente', 'is_correct' => false],
                            ['text' => 'Un changement du texte des journaux', 'is_correct' => false],
                            ['text' => 'Une durée d’attente arbitraire différente par hasard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un déploiement long utilise un secret à durée de vie limitée et peut dépasser son expiration. Quel mécanisme doit être prévu ?',
                        'marks' => 1,
                        'explanation' => 'Les automatisations doivent gérer le cycle de vie des justificatifs sans étendre inutilement leur portée ni les diffuser.',
                        'choices' => [
                            ['text' => 'Un renouvellement ou une reprise contrôlée', 'is_correct' => true],
                            ['text' => 'Une copie permanente du secret dans le dépôt', 'is_correct' => false],
                            ['text' => 'Une désactivation de toute expiration pour tous les comptes', 'is_correct' => false],
                            ['text' => 'L’affichage du secret pour prolonger sa validité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un paquet est épinglé à une version mais a disparu du dépôt amont. Quelle capacité de reproduction manque ?',
                        'marks' => 1,
                        'explanation' => 'Reproduire un environnement exige les entrées réelles de construction ou d’installation, pas seulement leurs numéros.',
                        'choices' => [
                            ['text' => 'Des artefacts disponibles et une provenance maîtrisée', 'is_correct' => true],
                            ['text' => 'Un nom de fichier identique sans contenu conservé', 'is_correct' => false],
                            ['text' => 'Une seule liste de versions sans accès aux paquets', 'is_correct' => false],
                            ['text' => 'Une promesse d’utiliser toujours la version latest', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'System Administration Advanced — Linux Internals',
            'System Administration Advanced — Réseau et diagnostic avancé',
            'System Administration Advanced — Sécurité des serveurs',
            'System Administration Advanced — Haute disponibilité et reprise',
            'System Administration Advanced — Observabilité et incidents',
            'System Administration Advanced — Automatisation à grande échelle',
            'System Administration Advanced — Virtualisation, Cloud et Infrastructure',
            'System Administration Advanced — Gestion des incidents et résilience',
            'System Administration Advanced — Architecture système et bonnes pratiques',
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
