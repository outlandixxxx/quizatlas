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
                'title' => 'Processus, signaux et IPC',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Processus, signaux et IPC.',
                'difficulty' => 'Intermediate',
                'duration' => 17,
                'passing_score' => 70,
                'total_marks' => 11,
                'qs' => [
                    [
                        'question' => 'Un worker parent lance plusieurs tâches avec fork(), puis attend leurs codes de sortie. Un fils termine mais reste visible dans la table des processus. Pour compléter la séquence, l’étape à ajouter est :',
                        'choices' => [
                            ['choice_text' => 'Le parent doit envoyer SIGSTOP au noyau', 'is_correct' => false],
                            ['choice_text' => 'Le fils doit remonter son répertoire courant', 'is_correct' => false],
                            ['choice_text' => 'Le parent doit récupérer son statut avec wait() ou une variante', 'is_correct' => true],
                            ['choice_text' => 'Le fils doit appeler exec() après sa terminaison', 'is_correct' => false],
                        ],
                        'explanation' => 'La collecte du statut libère l’entrée de processus conservée pour un fils terminé.',
                    ],
                    [
                        'question' => 'Un programme utilise fork(), puis le fils charge un binaire différent. Pour réaliser cette opération, l’ordre des appels est :',
                        'choices' => [
                            ['choice_text' => 'exec() crée le fils ; fork() remplace son image', 'is_correct' => false],
                            ['choice_text' => 'wait() crée le fils ; kill() charge le binaire', 'is_correct' => false],
                            ['choice_text' => 'clone() remplace toujours le programme du parent', 'is_correct' => false],
                            ['choice_text' => 'fork() crée le fils ; exec() remplace ensuite son image de programme', 'is_correct' => true],
                        ],
                        'explanation' => 'fork crée un processus fils ; un appel exec réussi charge le nouveau programme dans ce processus.',
                    ],
                    [
                        'question' => 'Un service doit arrêter proprement ses connexions avant de quitter. Pour respecter cette demande d’arrêt, le signal à envoyer est :',
                        'choices' => [
                            ['choice_text' => 'SIGTERM, en laissant au processus la possibilité de traiter la demande', 'is_correct' => true],
                            ['choice_text' => 'SIGKILL, car il exécute les gestionnaires d’arrêt', 'is_correct' => false],
                            ['choice_text' => 'SIGSTOP, qui ferme les fichiers ouverts', 'is_correct' => false],
                            ['choice_text' => 'SIGCHLD, qui demande directement l’arrêt', 'is_correct' => false],
                        ],
                        'explanation' => 'SIGTERM peut être traité par le programme ; SIGKILL force l’arrêt et ne permet pas de nettoyage utilisateur.',
                    ],
                    [
                        'question' => 'Deux processus locaux échangent de gros buffers et doivent éviter les copies répétées. Pour obtenir ce comportement, retenez le mécanisme suivant :',
                        'choices' => [
                            ['choice_text' => 'Envoyer SIGKILL, en sachant que le processus ne pourra pas effectuer son nettoyage', 'is_correct' => false],
                            ['choice_text' => 'Une région de mémoire partagée', 'is_correct' => true],
                            ['choice_text' => 'Le PID du processus qui a appelé exec()', 'is_correct' => false],
                            ['choice_text' => 'SIGTERM, en laissant au processus la possibilité de traiter la demande', 'is_correct' => false],
                        ],
                        'explanation' => 'La mémoire partagée évite certaines copies, mais exige un protocole de synchronisation entre producteurs et consommateurs.',
                    ],
                    [
                        'question' => 'Un shell relie la sortie de `grep` à l’entrée de `sort`. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'Le parent doit récupérer son statut avec wait() ou une variante', 'is_correct' => false],
                            ['choice_text' => 'fork() crée le fils ; exec() remplace ensuite son image de programme', 'is_correct' => false],
                            ['choice_text' => 'Un pipe entre stdout de la première commande et stdin de la seconde', 'is_correct' => true],
                            ['choice_text' => 'Un signal envoyé au shell parent', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pipe relie les flux de deux processus et permet leur composition.',
                    ],
                    [
                        'question' => 'Après le redémarrage d’un daemon, le processus parent conserve des entrées de fils terminés. L’hypothèse la mieux étayée par ces faits est :',
                        'choices' => [
                            ['choice_text' => 'Les fils ont tous été remplacés par des threads noyau', 'is_correct' => false],
                            ['choice_text' => 'fork() retourne deux fois : 0 dans le fils et le PID du fils dans le parent', 'is_correct' => false],
                            ['choice_text' => 'SIGCHLD envoyé au parent', 'is_correct' => false],
                            ['choice_text' => 'Le parent ne traite pas les notifications d’état et ne récupère pas les fils', 'is_correct' => true],
                        ],
                        'explanation' => 'Les processus zombies persistent jusqu’à ce que leur parent récupère leur statut ou que la relation soit réattribuée.',
                    ],
                    [
                        'question' => 'Une tâche reçoit SIGTERM mais ignore la demande et continue à tourner. Après ce signal, l’administrateur peut :',
                        'choices' => [
                            ['choice_text' => 'Envoyer SIGKILL, en sachant que le processus ne pourra pas effectuer son nettoyage', 'is_correct' => true],
                            ['choice_text' => 'Envoyer SIGCHLD pour forcer la fermeture', 'is_correct' => false],
                            ['choice_text' => 'Changer le groupe Unix du processus', 'is_correct' => false],
                            ['choice_text' => 'Une région de mémoire partagée', 'is_correct' => false],
                        ],
                        'explanation' => 'SIGKILL n’est pas interceptable et termine la tâche sans exécuter son code de nettoyage.',
                    ],
                    [
                        'question' => 'Un programme enfant doit avertir son parent qu’il a terminé. Pour obtenir ce comportement, retenez le mécanisme suivant :',
                        'choices' => [
                            ['choice_text' => 'SIGPIPE envoyé à tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'SIGCHLD envoyé au parent', 'is_correct' => true],
                            ['choice_text' => 'SIGBUS envoyé au disque', 'is_correct' => false],
                            ['choice_text' => 'SIGTERM envoyé au scheduler', 'is_correct' => false],
                        ],
                        'explanation' => 'Le parent peut recevoir SIGCHLD lorsqu’un enfant termine ou change d’état.',
                    ],
                    [
                        'question' => 'Une équipe crée trop de petits fichiers sur un volume et ne peut plus en ajouter, alors que `df` indique encore de l’espace libre. La ressource qui risque d’être épuisée est :',
                        'choices' => [
                            ['choice_text' => 'Le parent ne traite pas les notifications d’état et ne récupère pas les fils', 'is_correct' => false],
                            ['choice_text' => 'fork() crée le fils ; exec() remplace ensuite son image de programme', 'is_correct' => false],
                            ['choice_text' => 'Les inodes disponibles', 'is_correct' => true],
                            ['choice_text' => 'Un pipe entre stdout de la première commande et stdin de la seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque fichier consomme généralement un inode ; leur limite peut être atteinte avant celle des blocs de données.',
                    ],
                    [
                        'question' => 'Un processus exécute régulièrement `exec()` après `fork()`. L’information déterminante dans ce cas est :',
                        'choices' => [
                            ['choice_text' => 'Tous les descripteurs, même marqués close-on-exec', 'is_correct' => false],
                            ['choice_text' => 'Les inodes disponibles', 'is_correct' => false],
                            ['choice_text' => 'fork() retourne deux fois : 0 dans le fils et le PID du fils dans le parent', 'is_correct' => false],
                            ['choice_text' => 'Le PID du processus qui a appelé exec()', 'is_correct' => true],
                        ],
                        'explanation' => 'exec remplace l’image du processus appelant sans créer un nouveau PID.',
                    ],
                    [
                        'question' => 'Après le retour d’un fils, le parent constate que son code n’a jamais repris après fork(). Pour traiter cette opération, conservez :',
                        'choices' => [
                            ['choice_text' => 'fork() retourne deux fois : 0 dans le fils et le PID du fils dans le parent', 'is_correct' => true],
                            ['choice_text' => 'fork() retourne seulement dans le parent et fournit le PID du parent', 'is_correct' => false],
                            ['choice_text' => 'exec() retourne le PID du fils dans le parent', 'is_correct' => false],
                            ['choice_text' => 'wait() retourne 0 dans tous les processus', 'is_correct' => false],
                        ],
                        'explanation' => 'Le même appel se poursuit dans les deux processus, avec une valeur de retour distincte permettant de les différencier.',
                    ],
                ],
            ],
            [
                'title' => 'Ordonnancement et contention',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Ordonnancement et contention.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Sur une machine interactive, un quantum Round Robin est passé de 10 ms à 2 s. Les utilisateurs signalent des pauses quand un calcul monopolise le CPU. Les faits observés s’expliquent par :',
                        'choices' => [
                            ['choice_text' => 'La mémoire virtuelle est désactivée à chaque quantum', 'is_correct' => false],
                            ['choice_text' => 'Le temps CPU consommé par l’ordonnancement et les perturbations de cache', 'is_correct' => false],
                            ['choice_text' => 'Le quantum plus long retarde le retour du CPU aux autres tâches prêtes', 'is_correct' => true],
                            ['choice_text' => 'Un quantum long déclenche toujours un deadlock', 'is_correct' => false],
                        ],
                        'explanation' => 'Un quantum élevé réduit les changements de contexte mais peut dégrader la réactivité des tâches interactives.',
                    ],
                    [
                        'question' => 'Un serveur attribue une priorité fixe élevée à des tâches périodiques. Les tâches d’arrière-plan n’obtiennent presque jamais le CPU. Le phénomène à suspecter dans cette observation est :',
                        'choices' => [
                            ['choice_text' => 'Augmenter encore la priorité des tâches périodiques', 'is_correct' => false],
                            ['choice_text' => 'Le quantum plus long retarde le retour du CPU aux autres tâches prêtes', 'is_correct' => false],
                            ['choice_text' => 'L’héritage temporaire de priorité pour le détenteur du verrou', 'is_correct' => false],
                            ['choice_text' => 'Faire évoluer la priorité des tâches qui attendent depuis longtemps (aging)', 'is_correct' => true],
                        ],
                        'explanation' => 'L’aging peut augmenter la priorité effective des tâches en attente et réduire la famine.',
                    ],
                    [
                        'question' => 'Un tableau de bord affiche un turnaround de 12 secondes pour un job arrivé il y a 12 secondes. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Le temps écoulé entre son arrivée et sa terminaison, attente comprise', 'is_correct' => true],
                            ['choice_text' => 'Le temps passé dans le swap uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une part CPU plus faible en concurrence, sans plafond strict garanti par la seule valeur nice', 'is_correct' => false],
                            ['choice_text' => 'Faire évoluer la priorité des tâches qui attendent depuis longtemps (aging)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le turnaround inclut l’exécution et les attentes depuis l’arrivée jusqu’à la fin.',
                    ],
                    [
                        'question' => 'Sur un serveur Linux, un traitement batch reçoit une valeur nice plus élevée. L’effet généralement observé dans ce cas est :',
                        'choices' => [
                            ['choice_text' => 'Le temps écoulé entre son arrivée et sa terminaison, attente comprise', 'is_correct' => false],
                            ['choice_text' => 'Une part CPU plus faible en concurrence, sans plafond strict garanti par la seule valeur nice', 'is_correct' => true],
                            ['choice_text' => 'Une réservation exclusive de CPU jusqu’à la fin du batch', 'is_correct' => false],
                            ['choice_text' => 'Une priorité supérieure à toutes les tâches interactives', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur nice plus élevée réduit généralement le poids relatif du processus dans le partage CPU ; elle ne constitue pas à elle seule une limite stricte.',
                    ],
                    [
                        'question' => 'Sur une machine multicœur, une application parallélisable utilise un seul cœur à 100 % tandis que les autres restent presque inactifs. Le diagnostic doit d’abord porter sur :',
                        'choices' => [
                            ['choice_text' => 'Une priorité égale pour tous les processus garantit le parallélisme', 'is_correct' => false],
                            ['choice_text' => 'La section protégée ou la granularité du verrou limite le parallélisme', 'is_correct' => false],
                            ['choice_text' => 'Une section séquentielle ou un verrou partagé qui limite le parallélisme', 'is_correct' => true],
                            ['choice_text' => 'Un excès de mémoire virtuelle dans chaque cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un goulot séquentiel ou une contention peut empêcher une charge de profiter des cœurs disponibles.',
                    ],
                    [
                        'question' => 'Une tâche haute priorité reste bloquée derrière une tâche basse priorité qui détient un mutex. Pour obtenir ce comportement, retenez le mécanisme suivant :',
                        'choices' => [
                            ['choice_text' => 'Le swap de la tâche haute priorité', 'is_correct' => false],
                            ['choice_text' => 'Le partage du mutex avec tous les processus', 'is_correct' => false],
                            ['choice_text' => 'Ses politiques visent des contraintes de délai et de prévisibilité spécifiques', 'is_correct' => false],
                            ['choice_text' => 'L’héritage temporaire de priorité pour le détenteur du verrou', 'is_correct' => true],
                        ],
                        'explanation' => 'L’héritage de priorité permet au détenteur d’exécuter plus tôt le travail qui libérera le verrou.',
                    ],
                    [
                        'question' => 'Un outil de profilage montre que de nombreux threads attendent le même mutex alors que le CPU est peu utilisé. Les faits observés s’expliquent par :',
                        'choices' => [
                            ['choice_text' => 'La section protégée ou la granularité du verrou limite le parallélisme', 'is_correct' => true],
                            ['choice_text' => 'La saturation CPU est la cause directe', 'is_correct' => false],
                            ['choice_text' => 'Les threads n’ont pas d’espace d’adressage', 'is_correct' => false],
                            ['choice_text' => 'Une section séquentielle ou un verrou partagé qui limite le parallélisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forte attente sur un verrou peut former un goulot sans saturer les cœurs.',
                    ],
                    [
                        'question' => 'Une équipe augmente la fréquence des changements de contexte pour améliorer la réactivité. Le coût à inclure dans ce choix est :',
                        'choices' => [
                            ['choice_text' => 'Le quantum plus long retarde le retour du CPU aux autres tâches prêtes', 'is_correct' => false],
                            ['choice_text' => 'Le temps CPU consommé par l’ordonnancement et les perturbations de cache', 'is_correct' => true],
                            ['choice_text' => 'Une condition de course pouvant perdre un incrément', 'is_correct' => false],
                            ['choice_text' => 'Le temps écoulé entre son arrivée et sa terminaison, attente comprise', 'is_correct' => false],
                        ],
                        'explanation' => 'Les changements de contexte fréquents ont un coût et peuvent réduire le temps consacré au travail utile.',
                    ],
                    [
                        'question' => 'Un système doit respecter des échéances strictes pour le contrôle d’un équipement. Un ordonnanceur temps réel est justifié lorsque :',
                        'choices' => [
                            ['choice_text' => 'Faire évoluer la priorité des tâches qui attendent depuis longtemps (aging)', 'is_correct' => false],
                            ['choice_text' => 'Une part CPU plus faible en concurrence, sans plafond strict garanti par la seule valeur nice', 'is_correct' => false],
                            ['choice_text' => 'Ses politiques visent des contraintes de délai et de prévisibilité spécifiques', 'is_correct' => true],
                            ['choice_text' => 'Le temps CPU consommé par l’ordonnancement et les perturbations de cache', 'is_correct' => false],
                        ],
                        'explanation' => 'Les charges temps réel sont évaluées selon leur capacité à respecter des échéances, pas seulement leur débit moyen.',
                    ],
                    [
                        'question' => 'Un thread lit puis incrémente un compteur partagé sans opération atomique. Deux threads lisent parfois la même valeur. Le défaut qui découle de ce choix est :',
                        'choices' => [
                            ['choice_text' => 'Une section séquentielle ou un verrou partagé qui limite le parallélisme', 'is_correct' => false],
                            ['choice_text' => 'L’héritage temporaire de priorité pour le détenteur du verrou', 'is_correct' => false],
                            ['choice_text' => 'La section protégée ou la granularité du verrou limite le parallélisme', 'is_correct' => false],
                            ['choice_text' => 'Une condition de course pouvant perdre un incrément', 'is_correct' => true],
                        ],
                        'explanation' => 'La séquence lecture-modification-écriture n’est pas atomique ; les mises à jour concurrentes peuvent s’écraser.',
                    ],
                ],
            ],
            [
                'title' => 'Stockage, systèmes de fichiers et E/S',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Stockage, systèmes de fichiers et E/S.',
                'difficulty' => 'Intermediate',
                'duration' => 17,
                'passing_score' => 70,
                'total_marks' => 11,
                'qs' => [
                    [
                        'question' => 'Un serveur héberge les logs et les données métier sur la même partition. Une boucle écrit des logs sans limite et le service de données échoue. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Isoler les logs sur un volume ou quota contrôlé et mettre en place une rotation', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les permissions du répertoire de données', 'is_correct' => false],
                            ['choice_text' => 'Sur un volume ou stockage persistant avec un cycle de vie indépendant du conteneur', 'is_correct' => false],
                            ['choice_text' => 'Le miroir réplique aussi la suppression et ne conserve pas nécessairement un historique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une limite ou séparation empêche une croissance incontrôlée des logs de consommer toute la capacité critique.',
                    ],
                    [
                        'question' => 'Une suppression accidentelle est répliquée immédiatement sur les deux membres d’un miroir RAID. Pour confirmer que le correctif est actif, contrôlez :',
                        'choices' => [
                            ['choice_text' => 'Isoler les logs sur un volume ou quota contrôlé et mettre en place une rotation', 'is_correct' => false],
                            ['choice_text' => 'Le miroir réplique aussi la suppression et ne conserve pas nécessairement un historique', 'is_correct' => true],
                            ['choice_text' => 'RAID 1 ne contient aucune copie', 'is_correct' => false],
                            ['choice_text' => 'Les membres du RAID ne peuvent pas être lus', 'is_correct' => false],
                        ],
                        'explanation' => 'La redondance matérielle améliore la disponibilité face à certaines pannes, mais ne remplace pas une sauvegarde versionnée.',
                    ],
                    [
                        'question' => 'Un volume utilise un snapshot Copy-on-Write et sa consommation augmente après de nombreuses écritures. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'Chaque lecture du volume crée une nouvelle copie complète', 'is_correct' => false],
                            ['choice_text' => 'Un snapshot ne consomme jamais d’espace après sa création', 'is_correct' => false],
                            ['choice_text' => 'Les anciennes versions des blocs modifiés doivent rester conservées pour le snapshot', 'is_correct' => true],
                            ['choice_text' => 'Le snapshot compresse automatiquement les données nouvelles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le COW conserve les blocs antérieurs qui restent référencés par le snapshot.',
                    ],
                    [
                        'question' => 'Un stockage semble lent malgré un faible CPU. Les métriques montrent une profondeur de file et une latence disque élevées. L’hypothèse la mieux étayée par ces faits est :',
                        'choices' => [
                            ['choice_text' => 'Un manque de threads CPU certain', 'is_correct' => false],
                            ['choice_text' => 'Une saturation d’inodes nécessairement responsable', 'is_correct' => false],
                            ['choice_text' => 'Attendre une confirmation de persistance peut augmenter la latence', 'is_correct' => false],
                            ['choice_text' => 'La saturation ou le comportement du chemin de stockage', 'is_correct' => true],
                        ],
                        'explanation' => 'Une file d’E/S et une latence élevées orientent vers le périphérique ou le chemin de stockage.',
                    ],
                    [
                        'question' => 'Une base exige que certaines écritures soient durables avant de confirmer une transaction. Le compromis à expliquer à l’équipe est :',
                        'choices' => [
                            ['choice_text' => 'Attendre une confirmation de persistance peut augmenter la latence', 'is_correct' => true],
                            ['choice_text' => 'La transaction est automatiquement répliquée dans un autre site', 'is_correct' => false],
                            ['choice_text' => 'Les écritures concurrentes peuvent modifier les structures pendant la réparation', 'is_correct' => false],
                            ['choice_text' => 'La cohérence des métadonnées du filesystem ne garantit pas la persistance de chaque écriture applicative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une garantie de durabilité peut nécessiter une synchronisation avec le stockage et ajouter du temps.',
                    ],
                    [
                        'question' => 'Un administrateur lance un outil de réparation sur un système de fichiers monté en écriture et utilisé par des applications. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Les anciennes versions des blocs modifiés doivent rester conservées pour le snapshot', 'is_correct' => false],
                            ['choice_text' => 'Les écritures concurrentes peuvent modifier les structures pendant la réparation', 'is_correct' => true],
                            ['choice_text' => 'Le système transforme automatiquement les données en RAM', 'is_correct' => false],
                            ['choice_text' => 'Le système désactive les routes réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Un outil de réparation a besoin d’un état stable ; des écritures simultanées peuvent aggraver les incohérences.',
                    ],
                    [
                        'question' => 'Un service lit des blocs dont les données ne sont presque jamais réutilisées. Le facteur qui explique ce résultat est :',
                        'choices' => [
                            ['choice_text' => 'Les blocs ne peuvent pas être mis en cache sur Linux', 'is_correct' => false],
                            ['choice_text' => 'La saturation ou le comportement du chemin de stockage', 'is_correct' => false],
                            ['choice_text' => 'La charge n’a pas assez de réutilisation pour tirer profit du cache', 'is_correct' => true],
                            ['choice_text' => 'Un cache plus grand réduit toujours le débit', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bénéfice du cache dépend de la localité et du profil de charge.',
                    ],
                    [
                        'question' => 'Un disque dispose encore de blocs libres mais ne peut plus créer de fichier. La mesure la plus utile pour ce diagnostic est :',
                        'choices' => [
                            ['choice_text' => 'Vérifier la sémantique de synchronisation avec le contrôleur et le stockage effectivement utilisés', 'is_correct' => false],
                            ['choice_text' => 'La charge n’a pas assez de réutilisation pour tirer profit du cache', 'is_correct' => false],
                            ['choice_text' => 'Les anciennes versions des blocs modifiés doivent rester conservées pour le snapshot', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’inodes libres', 'is_correct' => true],
                        ],
                        'explanation' => 'L’espace des inodes et celui des blocs sont deux ressources distinctes.',
                    ],
                    [
                        'question' => 'Une VM doit conserver des données après suppression et recréation du conteneur qui l’utilise. Pour respecter cette contrainte, placez la charge :',
                        'choices' => [
                            ['choice_text' => 'Sur un volume ou stockage persistant avec un cycle de vie indépendant du conteneur', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’inodes libres', 'is_correct' => false],
                            ['choice_text' => 'Le miroir réplique aussi la suppression et ne conserve pas nécessairement un historique', 'is_correct' => false],
                            ['choice_text' => 'La saturation ou le comportement du chemin de stockage', 'is_correct' => false],
                        ],
                        'explanation' => 'Le filesystem d’un conteneur peut être éphémère ; les données à conserver nécessitent un stockage persistant.',
                    ],
                    [
                        'question' => 'Une application présente des données anciennes après une panne brutale, bien que le système de fichiers soit remonté sans erreur. Pour expliquer le comportement, retenez cette différence :',
                        'choices' => [
                            ['choice_text' => 'Attendre une confirmation de persistance peut augmenter la latence', 'is_correct' => false],
                            ['choice_text' => 'La cohérence des métadonnées du filesystem ne garantit pas la persistance de chaque écriture applicative', 'is_correct' => true],
                            ['choice_text' => 'Un journal de métadonnées est une sauvegarde applicative complète', 'is_correct' => false],
                            ['choice_text' => 'Les applications ne peuvent pas utiliser de cache d’écriture', 'is_correct' => false],
                        ],
                        'explanation' => 'Le journaling protège principalement certaines structures du filesystem ; les applications doivent demander les garanties de persistance adaptées.',
                    ],
                    [
                        'question' => 'Une application doit confirmer qu’un flush de données a atteint une garantie de persistance avant de répondre au client. Avant de poursuivre, l’équipe doit vérifier :',
                        'choices' => [
                            ['choice_text' => 'La cohérence des métadonnées du filesystem ne garantit pas la persistance de chaque écriture applicative', 'is_correct' => false],
                            ['choice_text' => 'Sur un volume ou stockage persistant avec un cycle de vie indépendant du conteneur', 'is_correct' => false],
                            ['choice_text' => 'Vérifier la sémantique de synchronisation avec le contrôleur et le stockage effectivement utilisés', 'is_correct' => true],
                            ['choice_text' => 'Vérifier uniquement que l’appel write() retourne sans erreur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une écriture acceptée par l’API ne prouve pas toujours la persistance au-delà des caches volatils ; la garantie dépend du chemin de stockage.',
                    ],
                ],
            ],
            [
                'title' => 'Réseau, services et sécurité système',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Réseau, services et sécurité système.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Un service écoute sur 127.0.0.1:8080. Il est joignable localement mais pas depuis un autre poste. Avant de poursuivre, l’équipe doit vérifier :',
                        'choices' => [
                            ['choice_text' => 'Vérifier l’adresse de bind et les règles de filtrage réseau', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le quantum du service', 'is_correct' => false],
                            ['choice_text' => 'Le secret peut rester récupérable depuis l’historique des couches ; il faut le révoquer et reconstruire l’image sans lui', 'is_correct' => false],
                            ['choice_text' => 'Passer par un bastion ou un réseau de management contrôlé avec des comptes individuels', 'is_correct' => false],
                        ],
                        'explanation' => 'Une écoute limitée à loopback n’accepte pas les connexions LAN ; un firewall peut aussi filtrer le trafic.',
                    ],
                    [
                        'question' => 'Un nom de domaine échoue, mais l’application se connecte correctement quand l’adresse IP du serveur est utilisée. Dans l’architecture présentée, le composant à retenir est :',
                        'choices' => [
                            ['choice_text' => 'Lui accorder uniquement la capability réseau nécessaire, si la plateforme le permet', 'is_correct' => false],
                            ['choice_text' => 'La résolution de noms (NSS et le resolver DNS)', 'is_correct' => true],
                            ['choice_text' => 'Vérifier l’adresse de bind et les règles de filtrage réseau', 'is_correct' => false],
                            ['choice_text' => 'Un problème de MTU ou de Path MTU Discovery', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fonctionnement par IP suggère de vérifier la résolution du nom et les sources configurées via NSS.',
                    ],
                    [
                        'question' => 'Un tunnel fonctionne pour de petits messages mais les transferts volumineux se bloquent sur un chemin réseau. Le diagnostic doit d’abord porter sur :',
                        'choices' => [
                            ['choice_text' => 'Un compte dédié aux privilèges minimaux et des fichiers de programme non modifiables par ce compte', 'is_correct' => false],
                            ['choice_text' => 'Le contrôle obligatoire peut ajouter une règle au-delà des permissions discrétionnaires', 'is_correct' => false],
                            ['choice_text' => 'Un problème de MTU ou de Path MTU Discovery', 'is_correct' => true],
                            ['choice_text' => 'La résolution de noms (NSS et le resolver DNS)', 'is_correct' => false],
                        ],
                        'explanation' => 'Des paquets plus grands peuvent être fragmentés ou rejetés si la MTU est incohérente ou PMTUD défaillant.',
                    ],
                    [
                        'question' => 'Un processus ne peut pas ouvrir le port 443 après suppression de ses privilèges root. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Le lancer en root sans restriction', 'is_correct' => false],
                            ['choice_text' => 'Réattribuer tous les fichiers système au processus', 'is_correct' => false],
                            ['choice_text' => 'Monter ce répertoire en lecture seule et limiter ses capabilities', 'is_correct' => false],
                            ['choice_text' => 'Lui accorder uniquement la capability réseau nécessaire, si la plateforme le permet', 'is_correct' => true],
                        ],
                        'explanation' => 'Une capability ciblée peut fournir le privilège requis sans attribuer l’ensemble des droits root.',
                    ],
                    [
                        'question' => 'Un service web compromis tourne avec un compte qui peut modifier ses propres fichiers exécutables et plusieurs répertoires système. La conséquence à anticiper dans cette configuration est :',
                        'choices' => [
                            ['choice_text' => 'Un compte dédié aux privilèges minimaux et des fichiers de programme non modifiables par ce compte', 'is_correct' => true],
                            ['choice_text' => 'Un mot de passe plus long pour le compte partagé', 'is_correct' => false],
                            ['choice_text' => 'Prioriser selon exposition et criticité, tester sur un canary, puis élargir avec métriques et retour arrière', 'is_correct' => false],
                            ['choice_text' => 'Vérifier l’adresse de bind et les règles de filtrage réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Un compte dédié et des fichiers protégés réduisent les possibilités d’élévation et facilitent l’audit.',
                    ],
                    [
                        'question' => 'Une politique SELinux bloque une opération pourtant permise par les droits Unix classiques. La conclusion étayée par ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'La résolution de noms (NSS et le resolver DNS)', 'is_correct' => false],
                            ['choice_text' => 'Le contrôle obligatoire peut ajouter une règle au-delà des permissions discrétionnaires', 'is_correct' => true],
                            ['choice_text' => 'SELinux ne contrôle que la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'Les permissions Unix sont désactivées dès que le service démarre', 'is_correct' => false],
                        ],
                        'explanation' => 'SELinux et AppArmor imposent des politiques supplémentaires qui peuvent refuser une opération autorisée par les modes Unix.',
                    ],
                    [
                        'question' => 'Un conteneur de production n’a besoin que de lire un répertoire. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Un problème de MTU ou de Path MTU Discovery', 'is_correct' => false],
                            ['choice_text' => 'Lui accorder uniquement la capability réseau nécessaire, si la plateforme le permet', 'is_correct' => false],
                            ['choice_text' => 'Monter ce répertoire en lecture seule et limiter ses capabilities', 'is_correct' => true],
                            ['choice_text' => 'Lancer le conteneur en mode privileged', 'is_correct' => false],
                        ],
                        'explanation' => 'Les montages en lecture seule et la réduction des capabilities limitent l’impact d’une compromission.',
                    ],
                    [
                        'question' => 'Un administrateur doit accéder aux hôtes de production depuis un réseau utilisateur. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Le secret peut rester récupérable depuis l’historique des couches ; il faut le révoquer et reconstruire l’image sans lui', 'is_correct' => false],
                            ['choice_text' => 'Prioriser selon exposition et criticité, tester sur un canary, puis élargir avec métriques et retour arrière', 'is_correct' => false],
                            ['choice_text' => 'Un compte dédié aux privilèges minimaux et des fichiers de programme non modifiables par ce compte', 'is_correct' => false],
                            ['choice_text' => 'Passer par un bastion ou un réseau de management contrôlé avec des comptes individuels', 'is_correct' => true],
                        ],
                        'explanation' => 'Un chemin d’administration dédié, contrôlé et audité limite les accès directs et permet d’attribuer les actions.',
                    ],
                    [
                        'question' => 'Une image de conteneur contient un token dans une couche ancienne, même si un Dockerfile ultérieur le supprime. Les faits observés s’expliquent par :',
                        'choices' => [
                            ['choice_text' => 'Le secret peut rester récupérable depuis l’historique des couches ; il faut le révoquer et reconstruire l’image sans lui', 'is_correct' => true],
                            ['choice_text' => 'La suppression dans la dernière couche garantit son effacement cryptographique', 'is_correct' => false],
                            ['choice_text' => 'Les couches anciennes sont toujours inaccessibles', 'is_correct' => false],
                            ['choice_text' => 'Un namespace empêche la lecture de l’image', 'is_correct' => false],
                        ],
                        'explanation' => 'Les images sont des artefacts copiables et leurs couches antérieures peuvent conserver des données supprimées plus tard.',
                    ],
                    [
                        'question' => 'Une mise à jour de sécurité est prête pour une flotte hétérogène. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Monter ce répertoire en lecture seule et limiter ses capabilities', 'is_correct' => false],
                            ['choice_text' => 'Prioriser selon exposition et criticité, tester sur un canary, puis élargir avec métriques et retour arrière', 'is_correct' => true],
                            ['choice_text' => 'Reporter la mise à jour jusqu’au prochain renouvellement matériel', 'is_correct' => false],
                            ['choice_text' => 'Le contrôle obligatoire peut ajouter une règle au-delà des permissions discrétionnaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Une priorisation contextuelle et une montée progressive équilibrent urgence de sécurité et risque opérationnel.',
                    ],
                ],
            ],
            [
                'title' => 'Conteneurs, performance et automatisation',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Conteneurs, performance et automatisation.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Après un déploiement, un conteneur consomme toute la mémoire de l’hôte et déclenche des OOM sur d’autres services. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Une machine virtuelle avec son propre noyau invité', 'is_correct' => false],
                            ['choice_text' => 'Des tâches peuvent attendre une ressource comme l’I/O, selon l’état des tâches et le système', 'is_correct' => false],
                            ['choice_text' => 'Une limite de ressources adaptée au workload et une surveillance des événements OOM', 'is_correct' => true],
                            ['choice_text' => 'Comparer une baseline et profiler le workload représentatif avant de changer des paramètres', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cgroups peuvent limiter et mesurer les ressources consommées par un groupe de processus.',
                    ],
                    [
                        'question' => 'Une équipe exécute un workload qui exige son propre noyau Linux avec une version différente de celle de l’hôte. Pour séparer ces charges, l’isolation requise est :',
                        'choices' => [
                            ['choice_text' => 'Un conteneur standard qui partage le noyau hôte', 'is_correct' => false],
                            ['choice_text' => 'Une limite de ressources adaptée au workload et une surveillance des événements OOM', 'is_correct' => false],
                            ['choice_text' => 'L’idempotence, avec vérification de l’état existant avant modification', 'is_correct' => false],
                            ['choice_text' => 'Une machine virtuelle avec son propre noyau invité', 'is_correct' => true],
                        ],
                        'explanation' => 'Les conteneurs partagent le kernel de l’hôte ; une VM peut démarrer un noyau invité distinct.',
                    ],
                    [
                        'question' => 'Une nouvelle version de service provoque une hausse du temps CPU. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Comparer une baseline et profiler le workload représentatif avant de changer des paramètres', 'is_correct' => true],
                            ['choice_text' => 'Une injection de commande ou une action sur une cible inattendue', 'is_correct' => false],
                            ['choice_text' => 'Une exécution en dry-run ou sur un canary, avec arrêt automatique selon des seuils', 'is_correct' => false],
                            ['choice_text' => 'Des métriques, journaux ou alertes sur l’échec, le retard et la durée du job', 'is_correct' => false],
                        ],
                        'explanation' => 'Une baseline et un profilage localisent le goulot et permettent d’attribuer l’effet aux changements.',
                    ],
                    [
                        'question' => 'Une alerte de load average augmente, alors que l’utilisation CPU reste modérée. La conclusion étayée par ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Vérifier les codes de retour et interrompre ou compenser selon la criticité', 'is_correct' => false],
                            ['choice_text' => 'Des tâches peuvent attendre une ressource comme l’I/O, selon l’état des tâches et le système', 'is_correct' => true],
                            ['choice_text' => 'Le CPU est forcément défectueux', 'is_correct' => false],
                            ['choice_text' => 'Le système n’a aucun processus actif', 'is_correct' => false],
                        ],
                        'explanation' => 'La load average n’est pas un pourcentage CPU ; des tâches bloquées dans certains états peuvent y contribuer.',
                    ],
                    [
                        'question' => 'Un script d’administration doit pouvoir être relancé après une interruption sans créer de comptes en double. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Des tâches peuvent attendre une ressource comme l’I/O, selon l’état des tâches et le système', 'is_correct' => false],
                            ['choice_text' => 'Une limite de ressources adaptée au workload et une surveillance des événements OOM', 'is_correct' => false],
                            ['choice_text' => 'L’idempotence, avec vérification de l’état existant avant modification', 'is_correct' => true],
                            ['choice_text' => 'Enregistrer le changement dans la source de vérité versionnée et le faire revoir avant application', 'is_correct' => false],
                        ],
                        'explanation' => 'Un script idempotent converge vers l’état voulu lors d’exécutions répétées.',
                    ],
                    [
                        'question' => 'Un outil d’automatisation reçoit un chemin fourni par l’utilisateur et l’ajoute à une commande shell. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Une machine virtuelle avec son propre noyau invité', 'is_correct' => false],
                            ['choice_text' => 'Comparer une baseline et profiler le workload représentatif avant de changer des paramètres', 'is_correct' => false],
                            ['choice_text' => 'L’idempotence, avec vérification de l’état existant avant modification', 'is_correct' => false],
                            ['choice_text' => 'Une injection de commande ou une action sur une cible inattendue', 'is_correct' => true],
                        ],
                        'explanation' => 'Les entrées doivent être validées et transmises de manière sûre plutôt que concaténées sans contrôle dans un shell.',
                    ],
                    [
                        'question' => 'Une modification de configuration est poussée à 2 000 serveurs et échoue sur 20 % d’entre eux. Pour absorber cette charge, prévoyez :',
                        'choices' => [
                            ['choice_text' => 'Une exécution en dry-run ou sur un canary, avec arrêt automatique selon des seuils', 'is_correct' => true],
                            ['choice_text' => 'Une exécution simultanée avec les alertes désactivées', 'is_correct' => false],
                            ['choice_text' => 'Une suppression de l’état de configuration précédent', 'is_correct' => false],
                            ['choice_text' => 'Une injection de commande ou une action sur une cible inattendue', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déploiement limité permet de détecter une hypothèse erronée avant qu’elle n’atteigne toute la flotte.',
                    ],
                    [
                        'question' => 'Une tâche planifiée échoue parfois sans générer de notification et personne ne le remarque pendant plusieurs jours. Le déroulement reste incomplet sans l’étape suivante :',
                        'choices' => [
                            ['choice_text' => 'Enregistrer le changement dans la source de vérité versionnée et le faire revoir avant application', 'is_correct' => false],
                            ['choice_text' => 'Des métriques, journaux ou alertes sur l’échec, le retard et la durée du job', 'is_correct' => true],
                            ['choice_text' => 'Une exécution en dry-run ou sur un canary, avec arrêt automatique selon des seuils', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les codes de retour et interrompre ou compenser selon la criticité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les jobs automatisés ont besoin de signaux explicites puisque leur échec n’est pas nécessairement visible immédiatement.',
                    ],
                    [
                        'question' => 'Un script lit une commande et poursuit alors que celle-ci a échoué. L’amélioration qui corrige ce problème consiste à :',
                        'choices' => [
                            ['choice_text' => 'Des métriques, journaux ou alertes sur l’échec, le retard et la durée du job', 'is_correct' => false],
                            ['choice_text' => 'Des tâches peuvent attendre une ressource comme l’I/O, selon l’état des tâches et le système', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les codes de retour et interrompre ou compenser selon la criticité', 'is_correct' => true],
                            ['choice_text' => 'Relancer la commande sans limite', 'is_correct' => false],
                        ],
                        'explanation' => 'Le traitement explicite des erreurs empêche une chaîne d’étapes de continuer après un échec critique.',
                    ],
                    [
                        'question' => 'Une configuration est modifiée à la main après un déploiement déclaratif et disparaît à la prochaine convergence. Pour éviter cette dérive, l’équipe doit :',
                        'choices' => [
                            ['choice_text' => 'Désactiver l’outil déclaratif sur tout le parc', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les historiques de configuration', 'is_correct' => false],
                            ['choice_text' => 'Une limite de ressources adaptée au workload et une surveillance des événements OOM', 'is_correct' => false],
                            ['choice_text' => 'Enregistrer le changement dans la source de vérité versionnée et le faire revoir avant application', 'is_correct' => true],
                        ],
                        'explanation' => 'Les changements hors source de vérité créent de la dérive et peuvent être écrasés lors de la prochaine application.',
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
