<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OperatingSystemsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'operating-systems')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Repères du système et des processus',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Repères du système et des processus.',
                'difficulty' => 'Beginner',
                'duration' => 14,
                'passing_score' => 70,
                'total_marks' => 11,
                'qs' => [
                    [
                        'question' => 'Un éditeur de texte et un navigateur tournent en même temps. La fonction décrite relève du composant suivant :',
                        'choices' => [
                            ['choice_text' => 'Fournir des appels système et contrôler l’accès aux ressources', 'is_correct' => false],
                            ['choice_text' => 'Le programme est le code stocké ; le processus est son exécution avec un état et des ressources', 'is_correct' => false],
                            ['choice_text' => 'Le scheduler du système d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Le système de fichiers', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordonnanceur partage le temps CPU entre les tâches prêtes selon la politique du système.',
                    ],
                    [
                        'question' => 'Un technicien lance une application depuis le menu. Pour expliquer le comportement, retenez cette différence :',
                        'choices' => [
                            ['choice_text' => 'Le programme est la mémoire vive ; le processus est le fichier sur disque', 'is_correct' => false],
                            ['choice_text' => 'Le processus est toujours une copie complète du noyau', 'is_correct' => false],
                            ['choice_text' => 'Le programme et le processus désignent toujours le même objet système', 'is_correct' => false],
                            ['choice_text' => 'Le programme est le code stocké ; le processus est son exécution avec un état et des ressources', 'is_correct' => true],
                        ],
                        'explanation' => 'Le processus est une instance en cours d’exécution d’un programme.',
                    ],
                    [
                        'question' => 'Un téléchargement attend la réponse du disque et n’utilise momentanément pas le CPU. Pendant cette attente, le processus se trouve dans l’état suivant :',
                        'choices' => [
                            ['choice_text' => 'Bloqué en attente de l’événement d’entrée-sortie', 'is_correct' => true],
                            ['choice_text' => 'Prêt et en compétition active pour le CPU', 'is_correct' => false],
                            ['choice_text' => 'Un outil de suivi des processus comme `top`', 'is_correct' => false],
                            ['choice_text' => 'Une entrée zombie, jusqu’à la récupération du statut', 'is_correct' => false],
                        ],
                        'explanation' => 'Un processus bloqué ne peut pas progresser tant que l’E/S attendue n’est pas terminée.',
                    ],
                    [
                        'question' => 'Une application demande à lire un fichier protégé. La fonction assurée dans cette situation consiste à :',
                        'choices' => [
                            ['choice_text' => 'Le scheduler du système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Fournir des appels système et contrôler l’accès aux ressources', 'is_correct' => true],
                            ['choice_text' => 'Compiler le code source de chaque application', 'is_correct' => false],
                            ['choice_text' => 'Attribuer automatiquement un compte administrateur à l’application', 'is_correct' => false],
                        ],
                        'explanation' => 'Les applications demandent des opérations au noyau, qui applique les règles et arbitre les ressources.',
                    ],
                    [
                        'question' => 'Un périphérique termine une lecture et doit prévenir le processeur. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'Bloqué en attente de l’événement d’entrée-sortie', 'is_correct' => false],
                            ['choice_text' => 'Des descripteurs ou références vers les ressources ouvertes', 'is_correct' => false],
                            ['choice_text' => 'Une interruption matérielle', 'is_correct' => true],
                            ['choice_text' => 'Un pipe ou un autre mécanisme IPC adapté au parcours', 'is_correct' => false],
                        ],
                        'explanation' => 'L’interruption signale l’événement au CPU sans imposer un polling permanent.',
                    ],
                    [
                        'question' => 'Un développeur ouvre trois fichiers à partir d’un processus. L’information déterminante dans ce cas est :',
                        'choices' => [
                            ['choice_text' => 'Une interruption matérielle', 'is_correct' => false],
                            ['choice_text' => 'La pression mémoire peut entraîner récupération de pages ou utilisation du swap, plus lente que la RAM', 'is_correct' => false],
                            ['choice_text' => 'Créer un fils avec fork(), puis faire appeler exec() par le fils', 'is_correct' => false],
                            ['choice_text' => 'Des descripteurs ou références vers les ressources ouvertes', 'is_correct' => true],
                        ],
                        'explanation' => 'Les descripteurs permettent au processus d’identifier les fichiers et flux déjà ouverts.',
                    ],
                    [
                        'question' => 'Deux programmes doivent échanger des données, mais l’un n’a pas besoin de modifier la mémoire de l’autre directement. Pour ce flux local, le mécanisme à retenir est :',
                        'choices' => [
                            ['choice_text' => 'Un pipe ou un autre mécanisme IPC adapté au parcours', 'is_correct' => true],
                            ['choice_text' => 'La pression mémoire peut entraîner récupération de pages ou utilisation du swap, plus lente que la RAM', 'is_correct' => false],
                            ['choice_text' => 'Le scheduler du système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Le programme est le code stocké ; le processus est son exécution avec un état et des ressources', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pipe transmet un flux entre processus sans partager toute leur mémoire.',
                    ],
                    [
                        'question' => 'Une application ne répond plus, mais le reste du système fonctionne. L’outil adapté à cette observation est :',
                        'choices' => [
                            ['choice_text' => 'Une interruption matérielle', 'is_correct' => false],
                            ['choice_text' => 'Un outil de suivi des processus comme `top`', 'is_correct' => true],
                            ['choice_text' => 'Fournir des appels système et contrôler l’accès aux ressources', 'is_correct' => false],
                            ['choice_text' => 'Bloqué en attente de l’événement d’entrée-sortie', 'is_correct' => false],
                        ],
                        'explanation' => '`top` présente une vue actualisée des processus et de plusieurs ressources utilisées.',
                    ],
                    [
                        'question' => 'Un service termine, mais son parent ne récupère jamais le statut de sortie. Après la fin du processus, le parent peut laisser apparaître :',
                        'choices' => [
                            ['choice_text' => 'Un pipe ou un autre mécanisme IPC adapté au parcours', 'is_correct' => false],
                            ['choice_text' => 'Un outil de suivi des processus comme `top`', 'is_correct' => false],
                            ['choice_text' => 'Une entrée zombie, jusqu’à la récupération du statut', 'is_correct' => true],
                            ['choice_text' => 'Des descripteurs ou références vers les ressources ouvertes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un zombie a terminé ; une petite entrée subsiste jusqu’à ce que son parent récupère son statut.',
                    ],
                    [
                        'question' => 'Un poste devient lent après l’ouverture simultanée de nombreuses applications. Le lien entre pression mémoire et performances est :',
                        'choices' => [
                            ['choice_text' => 'Le scheduler remplace la mémoire par le réseau local', 'is_correct' => false],
                            ['choice_text' => 'Une entrée zombie, jusqu’à la récupération du statut', 'is_correct' => false],
                            ['choice_text' => 'Créer un fils avec fork(), puis faire appeler exec() par le fils', 'is_correct' => false],
                            ['choice_text' => 'La pression mémoire peut entraîner récupération de pages ou utilisation du swap, plus lente que la RAM', 'is_correct' => true],
                        ],
                        'explanation' => 'Quand la RAM manque, le système peut déplacer certaines pages vers le stockage, ce qui accroît la latence.',
                    ],
                    [
                        'question' => 'Un parent doit lancer `backup` dans un nouveau processus, sans transformer son propre programme en backup. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Créer un fils avec fork(), puis faire appeler exec() par le fils', 'is_correct' => true],
                            ['choice_text' => 'Appeler exec() directement dans le parent et continuer son ancien code', 'is_correct' => false],
                            ['choice_text' => 'Envoyer SIGKILL au parent puis attendre le redémarrage', 'is_correct' => false],
                            ['choice_text' => 'Le programme est le code stocké ; le processus est son exécution avec un état et des ressources', 'is_correct' => false],
                        ],
                        'explanation' => 'Le processus parent peut créer un fils ; le fils charge ensuite le nouveau programme sans remplacer l’image du parent.',
                    ],
                ],
            ],
            [
                'title' => 'Fichiers, chemins et mémoire',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Fichiers, chemins et mémoire.',
                'difficulty' => 'Beginner',
                'duration' => 12,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Une commande doit accéder à `/var/log/app.log` quel que soit le répertoire courant. Le chemin adapté à cette commande est :',
                        'choices' => [
                            ['choice_text' => 'Un lien dur vers le processus courant', 'is_correct' => false],
                            ['choice_text' => 'Le droit d’écriture sur le fichier', 'is_correct' => false],
                            ['choice_text' => 'Un chemin absolu, résolu depuis la racine', 'is_correct' => true],
                            ['choice_text' => 'Un chemin relatif au répertoire courant', 'is_correct' => false],
                        ],
                        'explanation' => 'Un chemin absolu commence depuis la racine, contrairement à un chemin relatif.',
                    ],
                    [
                        'question' => 'Sur Linux, un compte peut lire un fichier mais ne peut pas le modifier. Le contrôle d’accès nécessaire dans ce cas porte sur :',
                        'choices' => [
                            ['choice_text' => 'Le droit d’exécution du shell', 'is_correct' => false],
                            ['choice_text' => 'Le droit de traversée de tous les systèmes de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Le droit de modifier le noyau', 'is_correct' => false],
                            ['choice_text' => 'Le droit d’écriture sur le fichier', 'is_correct' => true],
                        ],
                        'explanation' => 'Le bit `w` autorise l’écriture lorsque les autres contrôles d’accès le permettent.',
                    ],
                    [
                        'question' => 'Un utilisateur peut lister les noms d’un répertoire, mais ne peut pas ouvrir un fichier situé dedans faute de traversée du chemin. Pour permettre cet accès, vérifiez le droit suivant :',
                        'choices' => [
                            ['choice_text' => 'Le droit d’exécution (`x`) permettant la traversée', 'is_correct' => true],
                            ['choice_text' => 'Le droit d’écriture sur le fichier cible uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le droit de lecture du noyau', 'is_correct' => false],
                            ['choice_text' => 'Le bit sticky du fichier cible', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour accéder à un nom par un chemin, le droit `x` sur chaque répertoire est nécessaire.',
                    ],
                    [
                        'question' => 'Une commande `du` indique l’espace occupé par un dossier, tandis que `df` affiche la capacité des volumes montés. Dans le shell, retenez la forme qui produit le résultat demandé :',
                        'choices' => [
                            ['choice_text' => 'Le droit d’exécution (`x`) permettant la traversée', 'is_correct' => false],
                            ['choice_text' => '`du`', 'is_correct' => true],
                            ['choice_text' => 'Les permissions ou une ACL adaptée aux fichiers et répertoires', 'is_correct' => false],
                            ['choice_text' => 'Un chemin absolu, résolu depuis la racine', 'is_correct' => false],
                        ],
                        'explanation' => '`du` estime l’espace utilisé par les fichiers et répertoires sélectionnés.',
                    ],
                    [
                        'question' => 'Un fichier doit être accessible à deux chemins sans recopier son contenu. Le second chemin doit pointer vers une cible pouvant être déplacée. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => '`du`', 'is_correct' => false],
                            ['choice_text' => 'Aider à restaurer la cohérence de certaines métadonnées après une interruption', 'is_correct' => false],
                            ['choice_text' => 'Un lien symbolique', 'is_correct' => true],
                            ['choice_text' => 'Une copie complète du fichier', 'is_correct' => false],
                        ],
                        'explanation' => 'Un lien symbolique référence un chemin cible et peut rester présent même si la cible disparaît.',
                    ],
                    [
                        'question' => 'Après une panne électrique, le système vérifie et répare certaines structures d’un volume. La fonction assurée dans cette situation consiste à :',
                        'choices' => [
                            ['choice_text' => 'Un lien symbolique', 'is_correct' => false],
                            ['choice_text' => 'Traiter un page fault et charger ou préparer la page si l’accès est valide', 'is_correct' => false],
                            ['choice_text' => 'La mémoire cache CPU', 'is_correct' => false],
                            ['choice_text' => 'Aider à restaurer la cohérence de certaines métadonnées après une interruption', 'is_correct' => true],
                        ],
                        'explanation' => 'Le journaling aide à maintenir la cohérence du filesystem mais ne remplace pas une sauvegarde.',
                    ],
                    [
                        'question' => 'Un processus accède à une adresse virtuelle absente de la mémoire physique. Après ce signal, l’administrateur peut :',
                        'choices' => [
                            ['choice_text' => 'Traiter un page fault et charger ou préparer la page si l’accès est valide', 'is_correct' => true],
                            ['choice_text' => 'Désactiver toutes les pages du processus', 'is_correct' => false],
                            ['choice_text' => 'Convertir l’adresse en chemin relatif', 'is_correct' => false],
                            ['choice_text' => 'Le swap, avec une latence supérieure à la RAM', 'is_correct' => false],
                        ],
                        'explanation' => 'Un page fault est une exception de gestion mémoire ; une page valide peut être rendue disponible avant la reprise.',
                    ],
                    [
                        'question' => 'Une application utilise fréquemment les mêmes instructions et données. Pour réduire le temps d’accès, la mémoire concernée est :',
                        'choices' => [
                            ['choice_text' => 'Le droit d’écriture sur le fichier', 'is_correct' => false],
                            ['choice_text' => 'La mémoire cache CPU', 'is_correct' => true],
                            ['choice_text' => 'Traiter un page fault et charger ou préparer la page si l’accès est valide', 'is_correct' => false],
                            ['choice_text' => 'Un chemin absolu, résolu depuis la racine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les caches CPU conservent des données récemment ou fréquemment utilisées pour accélérer leur accès.',
                    ],
                    [
                        'question' => 'Un administrateur veut que les fichiers d’un utilisateur ne soient pas lisibles par les autres comptes ordinaires. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => '`du`', 'is_correct' => false],
                            ['choice_text' => 'Un lien symbolique', 'is_correct' => false],
                            ['choice_text' => 'Les permissions ou une ACL adaptée aux fichiers et répertoires', 'is_correct' => true],
                            ['choice_text' => 'Le droit d’exécution (`x`) permettant la traversée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les permissions et ACL déterminent les opérations permises aux propriétaires, groupes et autres utilisateurs.',
                    ],
                    [
                        'question' => 'Un système manque de RAM et déplace certaines pages peu utilisées vers un disque. La ressource utilisée dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Aider à restaurer la cohérence de certaines métadonnées après une interruption', 'is_correct' => false],
                            ['choice_text' => 'La mémoire cache CPU', 'is_correct' => false],
                            ['choice_text' => 'Les permissions ou une ACL adaptée aux fichiers et répertoires', 'is_correct' => false],
                            ['choice_text' => 'Le swap, avec une latence supérieure à la RAM', 'is_correct' => true],
                        ],
                        'explanation' => 'Le swap peut fournir un espace d’appoint, mais les accès disque sont beaucoup plus lents que les accès RAM.',
                    ],
                ],
            ],
            [
                'title' => 'Shell et observation quotidienne',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Shell et observation quotidienne.',
                'difficulty' => 'Beginner',
                'duration' => 14,
                'passing_score' => 70,
                'total_marks' => 11,
                'qs' => [
                    [
                        'question' => 'Un administrateur veut savoir dans quel répertoire se trouve son shell avant de lancer un script relatif. Pour réaliser cette opération, la commande ou syntaxe adaptée est :',
                        'choices' => [
                            ['choice_text' => '`pwd`', 'is_correct' => true],
                            ['choice_text' => 'Ajouter `&` à la commande', 'is_correct' => false],
                            ['choice_text' => '`grep` avec le motif `Listen`', 'is_correct' => false],
                            ['choice_text' => '`>` vers le fichier', 'is_correct' => false],
                        ],
                        'explanation' => '`pwd` affiche le chemin du répertoire de travail courant.',
                    ],
                    [
                        'question' => 'Un fichier de configuration contient plusieurs lignes commençant par `Listen`. Dans le shell, retenez la forme qui produit le résultat demandé :',
                        'choices' => [
                            ['choice_text' => '`pwd`', 'is_correct' => false],
                            ['choice_text' => '`grep` avec le motif `Listen`', 'is_correct' => true],
                            ['choice_text' => '`mkdir` avec le nom du fichier', 'is_correct' => false],
                            ['choice_text' => '`kill` avec le motif', 'is_correct' => false],
                        ],
                        'explanation' => '`grep` sélectionne les lignes qui correspondent au motif fourni.',
                    ],
                    [
                        'question' => 'Une sortie de diagnostic doit être conservée dans `resultats.txt`, en remplaçant son contenu précédent. Pour réaliser cette opération, la commande ou syntaxe adaptée est :',
                        'choices' => [
                            ['choice_text' => '`|` vers le terminal uniquement', 'is_correct' => false],
                            ['choice_text' => '`<` depuis le fichier', 'is_correct' => false],
                            ['choice_text' => '`>` vers le fichier', 'is_correct' => true],
                            ['choice_text' => '`>>` vers le fichier', 'is_correct' => false],
                        ],
                        'explanation' => '`>` redirige la sortie standard et remplace normalement le contenu de la destination.',
                    ],
                    [
                        'question' => 'Une équipe souhaite ajouter les nouvelles lignes à un fichier de journal sans effacer les anciennes. Dans le shell, retenez la forme qui produit le résultat demandé :',
                        'choices' => [
                            ['choice_text' => '`ps` fournit généralement un instantané ; `top` actualise une vue périodique', 'is_correct' => false],
                            ['choice_text' => '`mkdir` avec l’option de création des parents', 'is_correct' => false],
                            ['choice_text' => 'Vérifier le code de retour et interrompre ou traiter explicitement l’échec', 'is_correct' => false],
                            ['choice_text' => '`>>`', 'is_correct' => true],
                        ],
                        'explanation' => '`>>` ajoute la sortie à la fin du fichier cible.',
                    ],
                    [
                        'question' => 'Un développeur veut suivre l’évolution des processus pendant une montée en charge. La distinction utile pour interpréter ce cas est :',
                        'choices' => [
                            ['choice_text' => '`ps` fournit généralement un instantané ; `top` actualise une vue périodique', 'is_correct' => true],
                            ['choice_text' => '`ps` modifie les processus ; `top` les supprime', 'is_correct' => false],
                            ['choice_text' => '`ps` affiche uniquement les fichiers ; `top` affiche le réseau uniquement', 'is_correct' => false],
                            ['choice_text' => '`ps` permet de renommer les tâches ; `top` les planifie', 'is_correct' => false],
                        ],
                        'explanation' => '`ps` est une consultation ponctuelle, tandis que `top` rafraîchit continuellement les informations.',
                    ],
                    [
                        'question' => 'Une commande doit s’exécuter après que l’utilisateur a récupéré l’invite du shell. Dans le shell, retenez la forme qui produit le résultat demandé :',
                        'choices' => [
                            ['choice_text' => '`>>`', 'is_correct' => false],
                            ['choice_text' => 'Ajouter `&` à la commande', 'is_correct' => true],
                            ['choice_text' => 'Ajouter `>` sans fichier', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le shell par `exec`', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un shell compatible, `&` lance le job sans attendre sa fin au premier plan.',
                    ],
                    [
                        'question' => 'Un script doit créer le répertoire `archives/2026` si ses parents n’existent pas encore. Pour effectuer ce diagnostic, utilisez :',
                        'choices' => [
                            ['choice_text' => '`whoami`', 'is_correct' => false],
                            ['choice_text' => 'Un pipeline avec `|`', 'is_correct' => false],
                            ['choice_text' => '`mkdir` avec l’option de création des parents', 'is_correct' => true],
                            ['choice_text' => '`kill` sans option, qui envoie normalement SIGTERM', 'is_correct' => false],
                        ],
                        'explanation' => '`mkdir -p` crée les répertoires parents manquants.',
                    ],
                    [
                        'question' => 'Une commande de maintenance a retourné une erreur, mais le script a continué et a supprimé des fichiers. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'Lancer la commande en arrière-plan', 'is_correct' => false],
                            ['choice_text' => 'Ajouter `&` à la commande', 'is_correct' => false],
                            ['choice_text' => '`pwd`', 'is_correct' => false],
                            ['choice_text' => 'Vérifier le code de retour et interrompre ou traiter explicitement l’échec', 'is_correct' => true],
                        ],
                        'explanation' => 'Les codes de retour permettent au script de distinguer le succès de l’échec avant l’étape suivante.',
                    ],
                    [
                        'question' => 'Un technicien veut afficher son identité effective dans un terminal Linux. Pour réaliser cette opération, la commande ou syntaxe adaptée est :',
                        'choices' => [
                            ['choice_text' => '`whoami`', 'is_correct' => true],
                            ['choice_text' => '`grep` avec le motif `Listen`', 'is_correct' => false],
                            ['choice_text' => '`>` vers le fichier', 'is_correct' => false],
                            ['choice_text' => '`>>`', 'is_correct' => false],
                        ],
                        'explanation' => '`whoami` affiche le nom de l’utilisateur effectif courant.',
                    ],
                    [
                        'question' => 'Un processus doit recevoir une demande d’arrêt et fermer ses fichiers avant de terminer. Dans le shell, retenez la forme qui produit le résultat demandé :',
                        'choices' => [
                            ['choice_text' => '`kill -CHLD`, qui ferme le terminal', 'is_correct' => false],
                            ['choice_text' => '`kill` sans option, qui envoie normalement SIGTERM', 'is_correct' => true],
                            ['choice_text' => '`kill -9`, qui envoie SIGKILL', 'is_correct' => false],
                            ['choice_text' => '`kill -STOP`, qui termine et nettoie le processus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’usage standard de `kill` demande une terminaison via SIGTERM ; SIGKILL ne permet pas de nettoyage applicatif.',
                    ],
                    [
                        'question' => 'Un technicien veut ajouter une commande de diagnostic à une autre tout en gardant les deux sorties en flux. Pour réaliser cette opération, la commande ou syntaxe adaptée est :',
                        'choices' => [
                            ['choice_text' => '`mkdir` avec l’option de création des parents', 'is_correct' => false],
                            ['choice_text' => 'Vérifier le code de retour et interrompre ou traiter explicitement l’échec', 'is_correct' => false],
                            ['choice_text' => 'Un pipeline avec `|`', 'is_correct' => true],
                            ['choice_text' => '`ps` fournit généralement un instantané ; `top` actualise une vue périodique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pipe transmet la sortie standard du premier processus à l’entrée standard du suivant.',
                    ],
                ],
            ],
            [
                'title' => 'Comptes, permissions et protection de base',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Comptes, permissions et protection de base.',
                'difficulty' => 'Beginner',
                'duration' => 12,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Un développeur compile du code, lit ses courriels et administre parfois le serveur. La conséquence à anticiper dans cette configuration est :',
                        'choices' => [
                            ['choice_text' => 'Utiliser un compte standard et élever les privilèges seulement pour l’action administrative', 'is_correct' => true],
                            ['choice_text' => 'Partager un compte administrateur entre toute l’équipe', 'is_correct' => false],
                            ['choice_text' => 'Un compte dédié avec seulement les permissions nécessaires à ces chemins', 'is_correct' => false],
                            ['choice_text' => 'Un hash de mot de passe spécialisé et salé, plutôt qu’un stockage en clair', 'is_correct' => false],
                        ],
                        'explanation' => 'L’élévation ponctuelle limite la portée des erreurs et des compromissions.',
                    ],
                    [
                        'question' => 'Un service web n’a besoin que de lire ses fichiers et d’écrire dans un dossier de téléversement. Pour respecter le moindre privilège, configurez ce compte avec :',
                        'choices' => [
                            ['choice_text' => 'Un compte sans identité ni propriétaire de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Un compte dédié avec seulement les permissions nécessaires à ces chemins', 'is_correct' => true],
                            ['choice_text' => 'Le compte root pour éviter toute erreur de permission', 'is_correct' => false],
                            ['choice_text' => 'Le compte personnel d’un administrateur avec accès complet', 'is_correct' => false],
                        ],
                        'explanation' => 'Un compte de service dédié applique le moindre privilège et facilite l’audit.',
                    ],
                    [
                        'question' => 'Un mot de passe apparaît dans un fichier de sauvegarde volé. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Les permissions du fichier et les identités qui peuvent le lire', 'is_correct' => false],
                            ['choice_text' => 'Utiliser un compte standard et élever les privilèges seulement pour l’action administrative', 'is_correct' => false],
                            ['choice_text' => 'Un hash de mot de passe spécialisé et salé, plutôt qu’un stockage en clair', 'is_correct' => true],
                            ['choice_text' => 'Un nom de fichier caché', 'is_correct' => false],
                        ],
                        'explanation' => 'Un hash lent et salé rend plus difficile la vérification hors ligne des mots de passe devinés.',
                    ],
                    [
                        'question' => 'Un compte utilisateur réutilise le même mot de passe sur plusieurs sites. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Les journaux d’authentification et les alertes associées', 'is_correct' => false],
                            ['choice_text' => 'Réduire les services exposés et la surface d’attaque inutile', 'is_correct' => false],
                            ['choice_text' => 'Secure Boot avec une chaîne de signatures configurée', 'is_correct' => false],
                            ['choice_text' => 'L’authentification multifacteur avec un facteur indépendant', 'is_correct' => true],
                        ],
                        'explanation' => 'La MFA ajoute une preuve distincte du mot de passe.',
                    ],
                    [
                        'question' => 'Un service n’utilise pas le serveur SSH mais celui-ci reste activé et accessible. Le bénéfice attendu de ce choix est :',
                        'choices' => [
                            ['choice_text' => 'Réduire les services exposés et la surface d’attaque inutile', 'is_correct' => true],
                            ['choice_text' => 'Les correctifs peuvent réduire l’exposition à des vulnérabilités connues', 'is_correct' => false],
                            ['choice_text' => 'L’authentification multifacteur avec un facteur indépendant', 'is_correct' => false],
                            ['choice_text' => 'Afficher la cible, valider les paramètres et prévoir une confirmation ou un dry-run adapté', 'is_correct' => false],
                        ],
                        'explanation' => 'Un service inutilisé ajoute une surface et une charge de maintenance qui peuvent être supprimées ou restreintes.',
                    ],
                    [
                        'question' => 'Un utilisateur peut lire un fichier de configuration qui contient un secret d’API. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'Un hash de mot de passe spécialisé et salé, plutôt qu’un stockage en clair', 'is_correct' => false],
                            ['choice_text' => 'Les permissions du fichier et les identités qui peuvent le lire', 'is_correct' => true],
                            ['choice_text' => 'Un compte dédié avec seulement les permissions nécessaires à ces chemins', 'is_correct' => false],
                            ['choice_text' => 'Utiliser un compte standard et élever les privilèges seulement pour l’action administrative', 'is_correct' => false],
                        ],
                        'explanation' => 'Les droits d’accès déterminent si d’autres comptes peuvent obtenir le secret.',
                    ],
                    [
                        'question' => 'Un poste redémarre avec un chargeur de démarrage modifié. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'Réduire les services exposés et la surface d’attaque inutile', 'is_correct' => false],
                            ['choice_text' => 'Les permissions du fichier et les identités qui peuvent le lire', 'is_correct' => false],
                            ['choice_text' => 'Secure Boot avec une chaîne de signatures configurée', 'is_correct' => true],
                            ['choice_text' => 'L’authentification multifacteur avec un facteur indépendant', 'is_correct' => false],
                        ],
                        'explanation' => 'Secure Boot vérifie les signatures des composants de démarrage selon la politique de confiance.',
                    ],
                    [
                        'question' => 'Un ordinateur d’entreprise installe régulièrement des correctifs de sécurité. L’hypothèse la mieux étayée par ces faits est :',
                        'choices' => [
                            ['choice_text' => 'Secure Boot avec une chaîne de signatures configurée', 'is_correct' => false],
                            ['choice_text' => 'Afficher la cible, valider les paramètres et prévoir une confirmation ou un dry-run adapté', 'is_correct' => false],
                            ['choice_text' => 'Les journaux d’authentification et les alertes associées', 'is_correct' => false],
                            ['choice_text' => 'Les correctifs peuvent réduire l’exposition à des vulnérabilités connues', 'is_correct' => true],
                        ],
                        'explanation' => 'Les mises à jour corrigent des failles et peuvent aussi résoudre des défauts de stabilité.',
                    ],
                    [
                        'question' => 'Une commande administrative peut supprimer des fichiers en utilisant un chemin saisi au clavier. Avant de poursuivre, l’équipe doit vérifier :',
                        'choices' => [
                            ['choice_text' => 'Afficher la cible, valider les paramètres et prévoir une confirmation ou un dry-run adapté', 'is_correct' => true],
                            ['choice_text' => 'Masquer les messages d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Les correctifs peuvent réduire l’exposition à des vulnérabilités connues', 'is_correct' => false],
                            ['choice_text' => 'Utiliser un compte standard et élever les privilèges seulement pour l’action administrative', 'is_correct' => false],
                        ],
                        'explanation' => 'La validation rend explicite la portée d’une opération destructive avant son exécution.',
                    ],
                    [
                        'question' => 'Des connexions SSH échouées se multiplient pendant la nuit. Pour enquêter sur ces tentatives, consultez :',
                        'choices' => [
                            ['choice_text' => 'Un hash de mot de passe spécialisé et salé, plutôt qu’un stockage en clair', 'is_correct' => false],
                            ['choice_text' => 'Les journaux d’authentification et les alertes associées', 'is_correct' => true],
                            ['choice_text' => 'L’authentification multifacteur avec un facteur indépendant', 'is_correct' => false],
                            ['choice_text' => 'Un compte dédié avec seulement les permissions nécessaires à ces chemins', 'is_correct' => false],
                        ],
                        'explanation' => 'Les journaux d’authentification montrent les échecs et les origines utiles à la détection.',
                    ],
                ],
            ],
            [
                'title' => 'Machines virtuelles et périphériques',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Machines virtuelles et périphériques.',
                'difficulty' => 'Beginner',
                'duration' => 12,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Une équipe veut faire tourner deux systèmes invités isolés sur un même serveur physique. La fonction décrite relève du composant suivant :',
                        'choices' => [
                            ['choice_text' => 'Les VMs attendent le CPU physique et leur latence augmente', 'is_correct' => false],
                            ['choice_text' => 'Il fournit un point de retour pratique, mais ne remplace pas une sauvegarde indépendante', 'is_correct' => false],
                            ['choice_text' => 'Un hyperviseur', 'is_correct' => true],
                            ['choice_text' => 'Directement sur le matériel hôte, sous les systèmes invités', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hyperviseur distribue les ressources de l’hôte aux machines virtuelles.',
                    ],
                    [
                        'question' => 'Une VM Linux démarre sur un hyperviseur de type 1. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Un hyperviseur', 'is_correct' => false],
                            ['choice_text' => 'Mutualiser le matériel avec une isolation logique entre charges', 'is_correct' => false],
                            ['choice_text' => 'Thin provisioning', 'is_correct' => false],
                            ['choice_text' => 'Directement sur le matériel hôte, sous les systèmes invités', 'is_correct' => true],
                        ],
                        'explanation' => 'Un hyperviseur de type 1 est généralement installé directement sur le matériel.',
                    ],
                    [
                        'question' => 'Un ingénieur crée un snapshot avant une mise à jour risquée. En créant ce snapshot, l’équipe peut compter sur :',
                        'choices' => [
                            ['choice_text' => 'Il fournit un point de retour pratique, mais ne remplace pas une sauvegarde indépendante', 'is_correct' => true],
                            ['choice_text' => 'Dans un volume persistant indépendant du cycle de vie du conteneur', 'is_correct' => false],
                            ['choice_text' => 'DMA', 'is_correct' => false],
                            ['choice_text' => 'Une dérive peut perturber l’ordre des journaux, les certificats et l’authentification', 'is_correct' => false],
                        ],
                        'explanation' => 'Un snapshot aide à revenir à un état antérieur mais dépend du stockage et de sa chaîne de snapshots.',
                    ],
                    [
                        'question' => 'Un hôte a 8 cœurs physiques et héberge beaucoup de vCPU très sollicités. L’effet attendu de ce choix est :',
                        'choices' => [
                            ['choice_text' => 'Réduire le coût des entrées-sorties virtuelles grâce à une interface adaptée', 'is_correct' => false],
                            ['choice_text' => 'Les VMs attendent le CPU physique et leur latence augmente', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de cœurs physiques double', 'is_correct' => false],
                            ['choice_text' => 'Les VMs cessent de partager la mémoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vCPU doivent être planifiés sur les cœurs réels ; une demande simultanée excessive crée de la contention.',
                    ],
                    [
                        'question' => 'Une équipe souhaite économiser de l’espace en allouant les disques virtuels à mesure que les données sont écrites. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Directement sur le matériel hôte, sous les systèmes invités', 'is_correct' => false],
                            ['choice_text' => 'Il fournit un point de retour pratique, mais ne remplace pas une sauvegarde indépendante', 'is_correct' => false],
                            ['choice_text' => 'Thin provisioning', 'is_correct' => true],
                            ['choice_text' => 'Un hyperviseur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le thin provisioning alloue progressivement la capacité physique selon l’usage.',
                    ],
                    [
                        'question' => 'Une VM perd ses fichiers lorsqu’un conteneur de gestion est supprimé. Pour préserver les données après cette suppression, stockez-les :',
                        'choices' => [
                            ['choice_text' => 'Les VMs attendent le CPU physique et leur latence augmente', 'is_correct' => false],
                            ['choice_text' => 'Thin provisioning', 'is_correct' => false],
                            ['choice_text' => 'DMA', 'is_correct' => false],
                            ['choice_text' => 'Dans un volume persistant indépendant du cycle de vie du conteneur', 'is_correct' => true],
                        ],
                        'explanation' => 'Le stockage persistant doit survivre à la recréation ou suppression du conteneur.',
                    ],
                    [
                        'question' => 'Un périphérique virtuel transmet les données directement vers la mémoire sans intervention CPU pour chaque octet. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'DMA', 'is_correct' => true],
                            ['choice_text' => 'Mutualiser le matériel avec une isolation logique entre charges', 'is_correct' => false],
                            ['choice_text' => 'Dans un volume persistant indépendant du cycle de vie du conteneur', 'is_correct' => false],
                            ['choice_text' => 'Une dérive peut perturber l’ordre des journaux, les certificats et l’authentification', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Direct Memory Access permet à un périphérique de transférer des données en mémoire avec moins d’intervention CPU.',
                    ],
                    [
                        'question' => 'Une VM et son hyperviseur doivent être surveillés lors d’une migration. Pendant la migration, vérifiez aussi :',
                        'choices' => [
                            ['choice_text' => 'Réduire le coût des entrées-sorties virtuelles grâce à une interface adaptée', 'is_correct' => false],
                            ['choice_text' => 'Une dérive peut perturber l’ordre des journaux, les certificats et l’authentification', 'is_correct' => true],
                            ['choice_text' => 'L’heure contrôle le nombre de cœurs virtuels', 'is_correct' => false],
                            ['choice_text' => 'L’heure n’a d’effet que sur le fond d’écran', 'is_correct' => false],
                        ],
                        'explanation' => 'Une horloge cohérente est nécessaire à plusieurs contrôles de sécurité et au diagnostic des événements.',
                    ],
                    [
                        'question' => 'Une VM utilise un pilote paravirtualisé fourni par l’hyperviseur. Le bénéfice attendu de ce choix est :',
                        'choices' => [
                            ['choice_text' => 'Directement sur le matériel hôte, sous les systèmes invités', 'is_correct' => false],
                            ['choice_text' => 'Il fournit un point de retour pratique, mais ne remplace pas une sauvegarde indépendante', 'is_correct' => false],
                            ['choice_text' => 'Réduire le coût des entrées-sorties virtuelles grâce à une interface adaptée', 'is_correct' => true],
                            ['choice_text' => 'Un hyperviseur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les drivers paravirtualisés peuvent optimiser la communication entre guest et hyperviseur.',
                    ],
                    [
                        'question' => 'Une entreprise souhaite consolider plusieurs serveurs peu utilisés tout en séparant leurs environnements. Cette décision apporte principalement :',
                        'choices' => [
                            ['choice_text' => 'Exécuter plusieurs noyaux dans un seul processus sans hyperviseur', 'is_correct' => false],
                            ['choice_text' => 'Les VMs attendent le CPU physique et leur latence augmente', 'is_correct' => false],
                            ['choice_text' => 'Thin provisioning', 'is_correct' => false],
                            ['choice_text' => 'Mutualiser le matériel avec une isolation logique entre charges', 'is_correct' => true],
                        ],
                        'explanation' => 'La virtualisation augmente l’utilisation du matériel et sépare les environnements, sans supprimer tous les risques.',
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
