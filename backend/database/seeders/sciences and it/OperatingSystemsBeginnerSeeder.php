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
            'title' => 'Fondamentaux du noyau et des processus',
            'description' => 'Les notions essentielles sur le noyau, les processus et le fonctionnement général du système.',
            'difficulty' => 'Beginner',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quel est le rôle principal du noyau d\'un système d\'exploitation ?',
                    'choices' => [
                        ['choice_text' => 'Gérer les ressources matérielles et fournir des services aux processus', 'is_correct' => true],
                        ['choice_text' => 'Compiler les applications utilisateur', 'is_correct' => false],
                        ['choice_text' => 'Stocker uniquement les fichiers personnels', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le firmware', 'is_correct' => false]
                    ],
                    'explanation' => 'Le noyau arbitre l\'accès au CPU, à la mémoire et aux périphériques et fournit les primitives système utilisées par les processus.',
                ],
                [
                    'question' => 'Quelle différence décrit le mieux un processus et un programme ?',
                    'choices' => [
                        ['choice_text' => 'Un processus est une instance en cours d\'exécution d\'un programme', 'is_correct' => true],
                        ['choice_text' => 'Un programme est toujours plus rapide qu\'un processus', 'is_correct' => false],
                        ['choice_text' => 'Un processus ne possède jamais de mémoire', 'is_correct' => false],
                        ['choice_text' => 'Un programme ne peut contenir qu\'une instruction', 'is_correct' => false]
                    ],
                    'explanation' => 'Le programme décrit les instructions ; le processus représente leur exécution avec un état et des ressources.',
                ],
                [
                    'question' => 'Dans quel état un processus attend-il généralement la fin d\'une entrée/sortie ?',
                    'choices' => [
                        ['choice_text' => 'Bloqué', 'is_correct' => true],
                        ['choice_text' => 'Prêt', 'is_correct' => false],
                        ['choice_text' => 'Terminé', 'is_correct' => false],
                        ['choice_text' => 'Nouveau', 'is_correct' => false]
                    ],
                    'explanation' => 'Un processus bloqué ne peut pas progresser tant que l\'événement attendu, souvent une E/S, ne s\'est pas produit.',
                ],
                [
                    'question' => 'Quel mécanisme permet de partager un seul cœur entre plusieurs processus ?',
                    'choices' => [
                        ['choice_text' => 'L\'ordonnancement avec changements de contexte', 'is_correct' => true],
                        ['choice_text' => 'La duplication du disque', 'is_correct' => false],
                        ['choice_text' => 'La compression des fichiers', 'is_correct' => false],
                        ['choice_text' => 'La désactivation du noyau', 'is_correct' => false]
                    ],
                    'explanation' => 'Le scheduler alterne l\'exécution des tâches et sauvegarde puis restaure leur contexte lors des changements.',
                ],
                [
                    'question' => 'À quoi sert principalement une interruption matérielle ?',
                    'choices' => [
                        ['choice_text' => 'Signaler au CPU qu\'un périphérique nécessite son attention', 'is_correct' => true],
                        ['choice_text' => 'Créer automatiquement un utilisateur', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer tous les fichiers', 'is_correct' => false],
                        ['choice_text' => 'Augmenter la fréquence du CPU', 'is_correct' => false]
                    ],
                    'explanation' => 'Une interruption permet à un périphérique de notifier le CPU sans exiger un polling permanent.',
                ],
                [
                    'question' => 'Quelle affirmation décrit correctement le mode utilisateur ?',
                    'choices' => [
                        ['choice_text' => 'Il limite les opérations privilégiées qu\'une application peut effectuer directement', 'is_correct' => true],
                        ['choice_text' => 'Il permet toujours de modifier le matériel', 'is_correct' => false],
                        ['choice_text' => 'Il désactive la mémoire virtuelle', 'is_correct' => false],
                        ['choice_text' => 'Il donne tous les privilèges du noyau', 'is_correct' => false]
                    ],
                    'explanation' => 'Le mode utilisateur protège le système en limitant les opérations sensibles accessibles directement aux applications.',
                ],
                [
                    'question' => 'Que contient principalement la table des fichiers ouverts d\'un processus ?',
                    'choices' => [
                        ['choice_text' => 'Des références vers ses fichiers et ressources d\'E/S ouverts', 'is_correct' => true],
                        ['choice_text' => 'Les mots de passe de tous les utilisateurs', 'is_correct' => false],
                        ['choice_text' => 'Le code source du noyau', 'is_correct' => false],
                        ['choice_text' => 'La température du CPU', 'is_correct' => false]
                    ],
                    'explanation' => 'Elle permet au processus de référencer les fichiers et autres ressources d\'E/S qu\'il a ouverts.',
                ],
                [
                    'question' => 'Quel composant conserve temporairement des données fréquemment utilisées par le CPU ?',
                    'choices' => [
                        ['choice_text' => 'La mémoire cache', 'is_correct' => true],
                        ['choice_text' => 'Le disque dur', 'is_correct' => false],
                        ['choice_text' => 'Le clavier', 'is_correct' => false],
                        ['choice_text' => 'L\'imprimante', 'is_correct' => false]
                    ],
                    'explanation' => 'La cache est une mémoire très rapide destinée à réduire le coût des accès répétés aux données et instructions.',
                ],
                [
                    'question' => 'Quel est le rôle principal du scheduler ?',
                    'choices' => [
                        ['choice_text' => 'Choisir quelle tâche prête obtient le CPU', 'is_correct' => true],
                        ['choice_text' => 'Attribuer les adresses IP', 'is_correct' => false],
                        ['choice_text' => 'Créer les partitions', 'is_correct' => false],
                        ['choice_text' => 'Compresser les journaux', 'is_correct' => false]
                    ],
                    'explanation' => 'Le scheduler décide quelle entité exécutable doit utiliser le CPU selon la politique d\'ordonnancement.',
                ],
                [
                    'question' => 'Que signifie monter un système de fichiers ?',
                    'choices' => [
                        ['choice_text' => 'L\'attacher à un point de l\'arborescence pour le rendre accessible', 'is_correct' => true],
                        ['choice_text' => 'Le convertir en RAM', 'is_correct' => false],
                        ['choice_text' => 'Le compresser automatiquement', 'is_correct' => false],
                        ['choice_text' => 'Le supprimer du disque', 'is_correct' => false]
                    ],
                    'explanation' => 'Le montage rend un système de fichiers accessible via un point de montage dans l\'espace de noms du système.',
                ]
            ],
        ],
        [
            'title' => 'Mémoire virtuelle et mémoire physique',
            'description' => 'RAM, mémoire virtuelle, pagination, TLB et protections de base.',
            'difficulty' => 'Beginner',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quel est l\'objectif principal de la mémoire virtuelle ?',
                    'choices' => [
                        ['choice_text' => 'Isoler les espaces d\'adressage et fournir une mémoire logique flexible', 'is_correct' => true],
                        ['choice_text' => 'Augmenter directement la fréquence CPU', 'is_correct' => false],
                        ['choice_text' => 'Remplacer tous les fichiers', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les interruptions', 'is_correct' => false]
                    ],
                    'explanation' => 'La mémoire virtuelle isole les processus et permet notamment d\'utiliser un espace d\'adressage supérieur à la RAM disponible.',
                ],
                [
                    'question' => 'Quel est le rôle d\'une page mémoire ?',
                    'choices' => [
                        ['choice_text' => 'Découper l\'espace d\'adressage virtuel en blocs de taille fixe', 'is_correct' => true],
                        ['choice_text' => 'Représenter un utilisateur', 'is_correct' => false],
                        ['choice_text' => 'Décrire une connexion TCP', 'is_correct' => false],
                        ['choice_text' => 'Stocker uniquement le nom d\'un fichier', 'is_correct' => false]
                    ],
                    'explanation' => 'La pagination découpe la mémoire virtuelle en pages fixes qui sont mappées vers des cadres physiques.',
                ],
                [
                    'question' => 'Que peut provoquer un page fault valide ?',
                    'choices' => [
                        ['choice_text' => 'Le chargement ou la préparation d\'une page nécessaire', 'is_correct' => true],
                        ['choice_text' => 'L\'arrêt définitif du CPU', 'is_correct' => false],
                        ['choice_text' => 'La suppression de la configuration', 'is_correct' => false],
                        ['choice_text' => 'Le passage automatique en root', 'is_correct' => false]
                    ],
                    'explanation' => 'Un page fault est une exception ; si la page est valide mais absente, le noyau la rend disponible avant de reprendre.',
                ],
                [
                    'question' => 'Quelle structure associe des pages virtuelles à des cadres physiques ?',
                    'choices' => [
                        ['choice_text' => 'La table des pages', 'is_correct' => true],
                        ['choice_text' => 'La table DNS', 'is_correct' => false],
                        ['choice_text' => 'La table ARP', 'is_correct' => false],
                        ['choice_text' => 'La table des partitions', 'is_correct' => false]
                    ],
                    'explanation' => 'La table des pages décrit les mappings d\'adresses virtuelles vers la mémoire physique et leurs protections.',
                ],
                [
                    'question' => 'Pourquoi une TLB améliore-t-elle les performances ?',
                    'choices' => [
                        ['choice_text' => 'Elle met en cache des traductions d\'adresses récentes', 'is_correct' => true],
                        ['choice_text' => 'Elle stocke tous les fichiers', 'is_correct' => false],
                        ['choice_text' => 'Elle remplace la RAM', 'is_correct' => false],
                        ['choice_text' => 'Elle chiffre les processus', 'is_correct' => false]
                    ],
                    'explanation' => 'La TLB évite de recalculer certaines traductions d\'adresses lorsque la correspondance est encore en cache.',
                ],
                [
                    'question' => 'Quelle situation correspond au thrashing ?',
                    'choices' => [
                        ['choice_text' => 'Le système passe beaucoup de temps à échanger des pages au lieu d\'exécuter', 'is_correct' => true],
                        ['choice_text' => 'Le disque est vide', 'is_correct' => false],
                        ['choice_text' => 'Le CPU ajoute des cœurs', 'is_correct' => false],
                        ['choice_text' => 'Le réseau change d\'IP', 'is_correct' => false]
                    ],
                    'explanation' => 'Le thrashing apparaît lorsque la pression mémoire entraîne énormément d\'E/S de pagination et dégrade fortement le travail utile.',
                ],
                [
                    'question' => 'À quoi sert le bit NX/DEP ?',
                    'choices' => [
                        ['choice_text' => 'Empêcher l\'exécution de code depuis certaines pages marquées non exécutables', 'is_correct' => true],
                        ['choice_text' => 'Rendre une page publique', 'is_correct' => false],
                        ['choice_text' => 'Désactiver la pagination', 'is_correct' => false],
                        ['choice_text' => 'Forcer l\'utilisation d\'un SSD', 'is_correct' => false]
                    ],
                    'explanation' => 'NX/DEP limite certaines exploitations en empêchant l\'exécution d\'instructions dans des régions de données protégées.',
                ],
                [
                    'question' => 'Quel type de mémoire est généralement le plus rapide ?',
                    'choices' => [
                        ['choice_text' => 'Les registres CPU', 'is_correct' => true],
                        ['choice_text' => 'La RAM', 'is_correct' => false],
                        ['choice_text' => 'Le SSD', 'is_correct' => false],
                        ['choice_text' => 'Le HDD', 'is_correct' => false]
                    ],
                    'explanation' => 'Les registres sont intégrés au processeur et ont une latence inférieure aux autres types proposés.',
                ],
                [
                    'question' => 'Pourquoi utiliser du swap ?',
                    'choices' => [
                        ['choice_text' => 'Déplacer temporairement certaines pages vers le stockage pour libérer de la RAM', 'is_correct' => true],
                        ['choice_text' => 'Augmenter le nombre de cœurs', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le bootloader', 'is_correct' => false],
                        ['choice_text' => 'Accélérer tous les accès disque', 'is_correct' => false]
                    ],
                    'explanation' => 'Le swap fournit un espace de soutien pour des pages peu actives, avec une latence bien supérieure à celle de la RAM.',
                ],
                [
                    'question' => 'Quelle propriété décrit l\'isolation mémoire entre processus ?',
                    'choices' => [
                        ['choice_text' => 'Chaque processus possède principalement son propre espace d\'adressage virtuel', 'is_correct' => true],
                        ['choice_text' => 'Tous partagent toujours les mêmes adresses', 'is_correct' => false],
                        ['choice_text' => 'Les processus n\'ont aucun pointeur', 'is_correct' => false],
                        ['choice_text' => 'La mémoire virtuelle interdit toute IPC', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'espace d\'adressage virtuel sépare les processus tout en permettant au noyau d\'autoriser explicitement certains partages.',
                ]
            ],
        ],
        [
            'title' => 'Systèmes de fichiers et permissions',
            'description' => 'Organisation des fichiers, chemins, permissions et journalisation.',
            'difficulty' => 'Beginner',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Que représente généralement le répertoire racine sous Linux ?',
                    'choices' => [
                        ['choice_text' => 'Le sommet de l\'arborescence', 'is_correct' => true],
                        ['choice_text' => 'Le dernier dossier créé', 'is_correct' => false],
                        ['choice_text' => 'La corbeille', 'is_correct' => false],
                        ['choice_text' => 'Le cache navigateur', 'is_correct' => false]
                    ],
                    'explanation' => 'La racine est le point de départ des chemins absolus et le sommet de l\'arborescence des fichiers.',
                ],
                [
                    'question' => 'Que signifie rwx pour un utilisateur sur un fichier ?',
                    'choices' => [
                        ['choice_text' => 'Lecture, écriture et exécution', 'is_correct' => true],
                        ['choice_text' => 'Réseau, écriture et XML', 'is_correct' => false],
                        ['choice_text' => 'Lecture seule', 'is_correct' => false],
                        ['choice_text' => 'Suppression forcée', 'is_correct' => false]
                    ],
                    'explanation' => 'Les bits r, w et x représentent lecture, écriture et exécution.',
                ],
                [
                    'question' => 'Que permet un lien symbolique ?',
                    'choices' => [
                        ['choice_text' => 'Créer une référence vers un autre chemin', 'is_correct' => true],
                        ['choice_text' => 'Copier toutes les données physiquement', 'is_correct' => false],
                        ['choice_text' => 'Ajouter un disque', 'is_correct' => false],
                        ['choice_text' => 'Modifier le BIOS', 'is_correct' => false]
                    ],
                    'explanation' => 'Un lien symbolique contient une référence vers une autre cible du système de fichiers.',
                ],
                [
                    'question' => 'Quelle commande affiche le contenu d\'un répertoire sous Linux ?',
                    'choices' => [
                        ['choice_text' => 'ls', 'is_correct' => true],
                        ['choice_text' => 'pwd', 'is_correct' => false],
                        ['choice_text' => 'grep', 'is_correct' => false],
                        ['choice_text' => 'chmod', 'is_correct' => false]
                    ],
                    'explanation' => 'La commande ls liste les entrées du répertoire demandé selon les options utilisées.',
                ],
                [
                    'question' => 'Que montre généralement la commande pwd ?',
                    'choices' => [
                        ['choice_text' => 'Le répertoire de travail courant', 'is_correct' => true],
                        ['choice_text' => 'Les processus', 'is_correct' => false],
                        ['choice_text' => 'Les ports TCP', 'is_correct' => false],
                        ['choice_text' => 'La RAM libre uniquement', 'is_correct' => false]
                    ],
                    'explanation' => 'pwd affiche le chemin du répertoire de travail courant du shell.',
                ],
                [
                    'question' => 'Quelle différence existe entre un chemin absolu et un chemin relatif ?',
                    'choices' => [
                        ['choice_text' => 'L\'absolu ne dépend pas du répertoire courant, le relatif en dépend', 'is_correct' => true],
                        ['choice_text' => 'Le relatif est toujours plus rapide', 'is_correct' => false],
                        ['choice_text' => 'L\'absolu ne vise que des dossiers', 'is_correct' => false],
                        ['choice_text' => 'Le relatif contient toujours une extension', 'is_correct' => false]
                    ],
                    'explanation' => 'Un chemin absolu est résolu depuis la racine ou un point racine défini ; le relatif part du contexte courant.',
                ],
                [
                    'question' => 'Quelle commande modifie typiquement les permissions d\'un fichier ?',
                    'choices' => [
                        ['choice_text' => 'chmod', 'is_correct' => true],
                        ['choice_text' => 'grep', 'is_correct' => false],
                        ['choice_text' => 'mount', 'is_correct' => false],
                        ['choice_text' => 'ps', 'is_correct' => false]
                    ],
                    'explanation' => 'chmod permet de modifier les bits de permissions d\'un fichier ou répertoire.',
                ],
                [
                    'question' => 'Que permet le bit d\'exécution sur un répertoire Linux ?',
                    'choices' => [
                        ['choice_text' => 'Traverser et rechercher le répertoire', 'is_correct' => true],
                        ['choice_text' => 'Lancer automatiquement tous les fichiers', 'is_correct' => false],
                        ['choice_text' => 'Supprimer le dossier sans contrôle', 'is_correct' => false],
                        ['choice_text' => 'Transformer le dossier en service', 'is_correct' => false]
                    ],
                    'explanation' => 'Pour un répertoire, x autorise notamment la traversée et la recherche des entrées selon les autres permissions.',
                ],
                [
                    'question' => 'Pourquoi un système de fichiers peut-il utiliser un journal ?',
                    'choices' => [
                        ['choice_text' => 'Pour faciliter le retour à un état cohérent après une panne', 'is_correct' => true],
                        ['choice_text' => 'Pour stocker les mots de passe', 'is_correct' => false],
                        ['choice_text' => 'Pour augmenter la fréquence CPU', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false]
                    ],
                    'explanation' => 'Le journaling aide à restaurer la cohérence des structures du système de fichiers après une interruption brutale.',
                ],
                [
                    'question' => 'Quel outil estime l\'espace utilisé par un répertoire sous Linux ?',
                    'choices' => [
                        ['choice_text' => 'du', 'is_correct' => true],
                        ['choice_text' => 'whoami', 'is_correct' => false],
                        ['choice_text' => 'uname', 'is_correct' => false],
                        ['choice_text' => 'ip link', 'is_correct' => false]
                    ],
                    'explanation' => 'du estime l\'espace occupé par les fichiers et répertoires ; df présente plutôt l\'espace des systèmes de fichiers montés.',
                ]
            ],
        ],
        [
            'title' => 'Commandes et shell',
            'description' => 'Commandes Linux courantes et mécanismes essentiels du shell.',
            'difficulty' => 'Beginner',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quelle commande affiche l\'identité de l\'utilisateur courant ?',
                    'choices' => [
                        ['choice_text' => 'whoami', 'is_correct' => true],
                        ['choice_text' => 'pwd', 'is_correct' => false],
                        ['choice_text' => 'ps', 'is_correct' => false],
                        ['choice_text' => 'grep', 'is_correct' => false]
                    ],
                    'explanation' => 'whoami affiche le nom de l\'utilisateur effectif courant.',
                ],
                [
                    'question' => 'Comment lancer une commande en arrière-plan dans un shell POSIX ?',
                    'choices' => [
                        ['choice_text' => 'Ajouter & à la fin', 'is_correct' => true],
                        ['choice_text' => 'Ajouter # à la fin', 'is_correct' => false],
                        ['choice_text' => 'Ajouter .bg', 'is_correct' => false],
                        ['choice_text' => 'Utiliser uniquement cd', 'is_correct' => false]
                    ],
                    'explanation' => 'Le caractère & lance le job en arrière-plan dans un shell compatible POSIX.',
                ],
                [
                    'question' => 'À quoi sert principalement > dans un shell ?',
                    'choices' => [
                        ['choice_text' => 'Rediriger stdout vers un fichier en le créant ou le remplaçant', 'is_correct' => true],
                        ['choice_text' => 'Lire un fichier', 'is_correct' => false],
                        ['choice_text' => 'Changer d\'utilisateur', 'is_correct' => false],
                        ['choice_text' => 'Redémarrer le noyau', 'is_correct' => false]
                    ],
                    'explanation' => 'La redirection > envoie la sortie standard vers le fichier cible et remplace normalement son contenu.',
                ],
                [
                    'question' => 'Que fait l\'opérateur pipe dans un shell ?',
                    'choices' => [
                        ['choice_text' => 'Relier stdout d\'une commande à stdin d\'une autre', 'is_correct' => true],
                        ['choice_text' => 'Chiffrer la sortie', 'is_correct' => false],
                        ['choice_text' => 'Déplacer un fichier', 'is_correct' => false],
                        ['choice_text' => 'Créer un utilisateur', 'is_correct' => false]
                    ],
                    'explanation' => 'Le pipe permet de construire des pipelines où la sortie d\'une commande devient l\'entrée de la suivante.',
                ],
                [
                    'question' => 'Quelle commande fournit un aperçu dynamique des processus ?',
                    'choices' => [
                        ['choice_text' => 'top', 'is_correct' => true],
                        ['choice_text' => 'grep', 'is_correct' => false],
                        ['choice_text' => 'mkdir', 'is_correct' => false],
                        ['choice_text' => 'mount', 'is_correct' => false]
                    ],
                    'explanation' => 'top affiche les processus et plusieurs indicateurs système avec des mises à jour périodiques.',
                ],
                [
                    'question' => 'Que fournit principalement ps ?',
                    'choices' => [
                        ['choice_text' => 'Un instantané des processus', 'is_correct' => true],
                        ['choice_text' => 'Les paramètres BIOS', 'is_correct' => false],
                        ['choice_text' => 'Les partitions GPT', 'is_correct' => false],
                        ['choice_text' => 'Les enregistrements DNS', 'is_correct' => false]
                    ],
                    'explanation' => 'ps affiche les processus correspondant aux options sélectionnées à un instant donné.',
                ],
                [
                    'question' => 'À quoi sert kill dans son usage standard ?',
                    'choices' => [
                        ['choice_text' => 'Envoyer un signal à un processus', 'is_correct' => true],
                        ['choice_text' => 'Supprimer un fichier', 'is_correct' => false],
                        ['choice_text' => 'Arrêter toutes les interfaces réseau', 'is_correct' => false],
                        ['choice_text' => 'Modifier le BIOS', 'is_correct' => false]
                    ],
                    'explanation' => 'kill demande au noyau d\'envoyer un signal au PID ciblé.',
                ],
                [
                    'question' => 'Que fait grep ?',
                    'choices' => [
                        ['choice_text' => 'Rechercher des motifs dans du texte', 'is_correct' => true],
                        ['choice_text' => 'Créer une partition', 'is_correct' => false],
                        ['choice_text' => 'Monter un volume', 'is_correct' => false],
                        ['choice_text' => 'Modifier le noyau', 'is_correct' => false]
                    ],
                    'explanation' => 'grep sélectionne les lignes qui correspondent à un motif et s\'utilise souvent dans des pipelines.',
                ],
                [
                    'question' => 'Pourquoi utiliser une variable d\'environnement ?',
                    'choices' => [
                        ['choice_text' => 'Transmettre des paramètres aux processus enfants', 'is_correct' => true],
                        ['choice_text' => 'Remplacer la mémoire virtuelle', 'is_correct' => false],
                        ['choice_text' => 'Gérer les interruptions matérielles', 'is_correct' => false],
                        ['choice_text' => 'Formater le disque', 'is_correct' => false]
                    ],
                    'explanation' => 'Les variables d\'environnement sont héritées par les processus enfants et servent à transmettre des réglages.',
                ],
                [
                    'question' => 'Que fait la commande mkdir ?',
                    'choices' => [
                        ['choice_text' => 'Créer un répertoire', 'is_correct' => true],
                        ['choice_text' => 'Afficher les processus', 'is_correct' => false],
                        ['choice_text' => 'Modifier les permissions', 'is_correct' => false],
                        ['choice_text' => 'Monter un système de fichiers', 'is_correct' => false]
                    ],
                    'explanation' => 'mkdir crée un ou plusieurs répertoires selon les options et les permissions disponibles.',
                ]
            ],
        ],
        [
            'title' => 'Ordonnancement et concurrence',
            'description' => 'Ordonnancement CPU, threads, verrous et concurrence.',
            'difficulty' => 'Beginner',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quelle est la caractéristique principale de Round Robin ?',
                    'choices' => [
                        ['choice_text' => 'Chaque tâche reçoit un quantum avant un éventuel changement de contexte', 'is_correct' => true],
                        ['choice_text' => 'La plus longue tâche monopolise toujours le CPU', 'is_correct' => false],
                        ['choice_text' => 'Aucune tâche n\'est préemptée', 'is_correct' => false],
                        ['choice_text' => 'Il ne fonctionne qu\'avec SSD', 'is_correct' => false]
                    ],
                    'explanation' => 'Round Robin répartit le temps CPU en quanta afin d\'améliorer le partage et la réactivité.',
                ],
                [
                    'question' => 'Qu\'est-ce qu\'une condition de course ?',
                    'choices' => [
                        ['choice_text' => 'Un résultat dépendant de l\'ordre d\'accès concurrents à un état partagé', 'is_correct' => true],
                        ['choice_text' => 'Une panne du ventilateur', 'is_correct' => false],
                        ['choice_text' => 'Une requête DNS lente', 'is_correct' => false],
                        ['choice_text' => 'Une partition pleine', 'is_correct' => false]
                    ],
                    'explanation' => 'Une race condition apparaît lorsque l\'interleaving des accès concurrents influence le résultat.',
                ],
                [
                    'question' => 'À quoi sert un mutex ?',
                    'choices' => [
                        ['choice_text' => 'Protéger une section critique contre des accès simultanés', 'is_correct' => true],
                        ['choice_text' => 'Chiffrer un disque', 'is_correct' => false],
                        ['choice_text' => 'Traduire une IP', 'is_correct' => false],
                        ['choice_text' => 'Monter un volume', 'is_correct' => false]
                    ],
                    'explanation' => 'Un mutex assure l\'exclusion mutuelle afin qu\'une seule thread entre à la fois dans la section protégée.',
                ],
                [
                    'question' => 'Quelle caractéristique distingue souvent un thread dans un même processus ?',
                    'choices' => [
                        ['choice_text' => 'Il partage généralement l\'espace d\'adressage du processus', 'is_correct' => true],
                        ['choice_text' => 'Il possède toujours un disque', 'is_correct' => false],
                        ['choice_text' => 'Il est toujours un processus séparé', 'is_correct' => false],
                        ['choice_text' => 'Il n\'utilise jamais de mémoire', 'is_correct' => false]
                    ],
                    'explanation' => 'Les threads d\'un processus partagent généralement mémoire et ressources tout en ayant leur propre contexte d\'exécution.',
                ],
                [
                    'question' => 'Pourquoi un changement de contexte coûte-t-il du temps ?',
                    'choices' => [
                        ['choice_text' => 'Il faut sauvegarder et restaurer l\'état d\'exécution', 'is_correct' => true],
                        ['choice_text' => 'Il recharge toujours le BIOS', 'is_correct' => false],
                        ['choice_text' => 'Il recrée le disque', 'is_correct' => false],
                        ['choice_text' => 'Il désinstalle les bibliothèques', 'is_correct' => false]
                    ],
                    'explanation' => 'Le noyau sauvegarde et restaure le contexte et peut subir des perturbations de cache lors du changement.',
                ],
                [
                    'question' => 'Que signifie la préemption d\'une tâche ?',
                    'choices' => [
                        ['choice_text' => 'Le système peut interrompre son exécution pour donner le CPU à une autre', 'is_correct' => true],
                        ['choice_text' => 'La tâche est supprimée', 'is_correct' => false],
                        ['choice_text' => 'Elle devient root', 'is_correct' => false],
                        ['choice_text' => 'Sa mémoire devient du swap', 'is_correct' => false]
                    ],
                    'explanation' => 'Dans un système préemptif, le scheduler peut interrompre une tâche pour respecter sa politique d\'ordonnancement.',
                ],
                [
                    'question' => 'Quel problème existe lorsqu\'il y a une attente circulaire entre threads ?',
                    'choices' => [
                        ['choice_text' => 'Un deadlock', 'is_correct' => true],
                        ['choice_text' => 'Une page fault', 'is_correct' => false],
                        ['choice_text' => 'Une fragmentation externe', 'is_correct' => false],
                        ['choice_text' => 'Une interruption matérielle', 'is_correct' => false]
                    ],
                    'explanation' => 'Une attente circulaire peut empêcher les threads concernées de progresser indéfiniment.',
                ],
                [
                    'question' => 'Quel mécanisme fait attendre une thread jusqu\'à ce qu\'une condition change ?',
                    'choices' => [
                        ['choice_text' => 'Une variable de condition', 'is_correct' => true],
                        ['choice_text' => 'Une adresse MAC', 'is_correct' => false],
                        ['choice_text' => 'Un inode', 'is_correct' => false],
                        ['choice_text' => 'Une partition', 'is_correct' => false]
                    ],
                    'explanation' => 'Une variable de condition permet à une thread de dormir jusqu\'à ce qu\'une autre signale un changement d\'état.',
                ],
                [
                    'question' => 'Pourquoi garder une section critique courte ?',
                    'choices' => [
                        ['choice_text' => 'Pour réduire la contention et le temps d\'attente des autres threads', 'is_correct' => true],
                        ['choice_text' => 'Pour augmenter les deadlocks', 'is_correct' => false],
                        ['choice_text' => 'Pour empêcher le parallélisme', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les verrous', 'is_correct' => false]
                    ],
                    'explanation' => 'Une section critique courte laisse davantage de temps d\'exécution aux autres threads et améliore le parallélisme.',
                ],
                [
                    'question' => 'Que vise principalement le scheduler sur une machine interactive ?',
                    'choices' => [
                        ['choice_text' => 'Un bon compromis entre débit et temps de réponse', 'is_correct' => true],
                        ['choice_text' => 'Uniquement le débit disque', 'is_correct' => false],
                        ['choice_text' => 'La taille des logs', 'is_correct' => false],
                        ['choice_text' => 'La capacité du BIOS', 'is_correct' => false]
                    ],
                    'explanation' => 'Un système interactif doit servir rapidement les tâches tout en conservant un usage raisonnable des ressources.',
                ]
            ],
        ],
        [
            'title' => 'Entrées-sorties et périphériques',
            'description' => 'Interaction entre le système d’exploitation, les drivers et les périphériques.',
            'difficulty' => 'Beginner',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quel est le rôle d\'un device driver ?',
                    'choices' => [
                        ['choice_text' => 'Faire l\'interface entre le système d\'exploitation et le matériel', 'is_correct' => true],
                        ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le scheduler', 'is_correct' => false],
                        ['choice_text' => 'Résoudre les noms DNS', 'is_correct' => false]
                    ],
                    'explanation' => 'Le driver traduit les opérations génériques du système en commandes adaptées au périphérique.',
                ],
                [
                    'question' => 'Pourquoi utiliser un buffer pour une E/S ?',
                    'choices' => [
                        ['choice_text' => 'Absorber des différences de débit et stocker temporairement des données', 'is_correct' => true],
                        ['choice_text' => 'Supprimer les interruptions', 'is_correct' => false],
                        ['choice_text' => 'Transformer un disque en CPU', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer automatiquement les fichiers', 'is_correct' => false]
                    ],
                    'explanation' => 'Un buffer découple les vitesses entre producteur et consommateur et peut regrouper des transferts.',
                ],
                [
                    'question' => 'Que signifie une E/S synchrone pour l\'appelant ?',
                    'choices' => [
                        ['choice_text' => 'L\'appel attend généralement la fin de l\'opération', 'is_correct' => true],
                        ['choice_text' => 'L\'appel ne contacte jamais le noyau', 'is_correct' => false],
                        ['choice_text' => 'L\'appel est toujours plus rapide', 'is_correct' => false],
                        ['choice_text' => 'L\'appel désactive DMA', 'is_correct' => false]
                    ],
                    'explanation' => 'Avec une E/S synchrone, le thread appelant attend la completion ou un résultat avant de poursuivre.',
                ],
                [
                    'question' => 'Quel mécanisme permet à un périphérique de transférer des données en mémoire avec peu d\'intervention CPU ?',
                    'choices' => [
                        ['choice_text' => 'DMA', 'is_correct' => true],
                        ['choice_text' => 'DNS', 'is_correct' => false],
                        ['choice_text' => 'NAT', 'is_correct' => false],
                        ['choice_text' => 'TLS', 'is_correct' => false]
                    ],
                    'explanation' => 'Le DMA permet à un périphérique de lire ou écrire en mémoire puis de notifier le CPU de l\'opération.',
                ],
                [
                    'question' => 'Pourquoi abstraire les périphériques derrière des interfaces communes ?',
                    'choices' => [
                        ['choice_text' => 'Pour éviter que les applications dépendent des détails matériels', 'is_correct' => true],
                        ['choice_text' => 'Pour rendre tous les matériels identiques', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les drivers', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer le stockage', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'abstraction permet aux applications d\'utiliser des opérations cohérentes malgré des matériels différents.',
                ],
                [
                    'question' => 'Quel type de périphérique est typiquement un disque ?',
                    'choices' => [
                        ['choice_text' => 'Un périphérique bloc', 'is_correct' => true],
                        ['choice_text' => 'Un périphérique DNS', 'is_correct' => false],
                        ['choice_text' => 'Un utilisateur système', 'is_correct' => false],
                        ['choice_text' => 'Un scheduler', 'is_correct' => false]
                    ],
                    'explanation' => 'Un disque expose des blocs adressables qui peuvent être lus ou écrits par le système.',
                ],
                [
                    'question' => 'Pourquoi une file d\'attente d\'E/S est-elle utile ?',
                    'choices' => [
                        ['choice_text' => 'Pour organiser plusieurs requêtes en attente de traitement', 'is_correct' => true],
                        ['choice_text' => 'Pour stocker les mots de passe', 'is_correct' => false],
                        ['choice_text' => 'Pour synchroniser l\'heure', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer la RAM', 'is_correct' => false]
                    ],
                    'explanation' => 'Une file d\'E/S permet d\'accumuler et ordonnancer les requêtes lorsqu\'un périphérique ne peut pas toutes les traiter immédiatement.',
                ],
                [
                    'question' => 'Pourquoi les interruptions sont-elles souvent préférables au polling continu ?',
                    'choices' => [
                        ['choice_text' => 'Le CPU peut travailler ailleurs jusqu\'à l\'arrivée d\'un événement', 'is_correct' => true],
                        ['choice_text' => 'Elles augmentent toujours la consommation', 'is_correct' => false],
                        ['choice_text' => 'Elles interdisent le parallélisme', 'is_correct' => false],
                        ['choice_text' => 'Elles suppriment les drivers', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'interruption évite de gaspiller continuellement des cycles CPU à vérifier un périphérique inactif.',
                ],
                [
                    'question' => 'Quelle conséquence peut avoir un buffer overflow ?',
                    'choices' => [
                        ['choice_text' => 'Corrompre des données ou le contrôle d\'exécution', 'is_correct' => true],
                        ['choice_text' => 'Formater automatiquement le disque', 'is_correct' => false],
                        ['choice_text' => 'Ajouter un cœur CPU', 'is_correct' => false],
                        ['choice_text' => 'Accélérer le réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Un dépassement de tampon écrit hors de la zone prévue et peut provoquer crash, corruption ou vulnérabilité.',
                ],
                [
                    'question' => 'Pourquoi mettre certaines E/S disque en cache ?',
                    'choices' => [
                        ['choice_text' => 'Pour réutiliser des données et réduire des accès physiques coûteux', 'is_correct' => true],
                        ['choice_text' => 'Pour supprimer les fichiers', 'is_correct' => false],
                        ['choice_text' => 'Pour désactiver la mémoire', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer le réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Le cache exploite la localité d\'accès et peut réduire la latence des lectures ou écritures fréquentes.',
                ]
            ],
        ],
        [
            'title' => 'Utilisateurs et sécurité de base',
            'description' => 'Comptes, permissions et mesures de sécurité essentielles.',
            'difficulty' => 'Beginner',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi séparer un compte administrateur du compte quotidien ?',
                    'choices' => [
                        ['choice_text' => 'Pour réduire l\'impact d\'une compromission ou d\'une erreur', 'is_correct' => true],
                        ['choice_text' => 'Pour augmenter l\'espace disque', 'is_correct' => false],
                        ['choice_text' => 'Pour accélérer toutes les applications', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'Un compte standard limite les privilèges utilisés au quotidien et réduit la portée des erreurs.',
                ],
                [
                    'question' => 'Que permet un groupe Unix/Linux ?',
                    'choices' => [
                        ['choice_text' => 'Attribuer plus facilement des permissions communes à plusieurs utilisateurs', 'is_correct' => true],
                        ['choice_text' => 'Remplacer le noyau', 'is_correct' => false],
                        ['choice_text' => 'Créer des IP', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer automatiquement un disque', 'is_correct' => false]
                    ],
                    'explanation' => 'Les groupes simplifient la gestion collective des droits sur des ressources partagées.',
                ],
                [
                    'question' => 'Quel principe recommande de n\'accorder que les droits nécessaires ?',
                    'choices' => [
                        ['choice_text' => 'Le moindre privilège', 'is_correct' => true],
                        ['choice_text' => 'La réplication complète', 'is_correct' => false],
                        ['choice_text' => 'Le best effort', 'is_correct' => false],
                        ['choice_text' => 'Le warm reboot', 'is_correct' => false]
                    ],
                    'explanation' => 'Le moindre privilège réduit la surface d\'impact d\'un compte ou d\'un service compromis.',
                ],
                [
                    'question' => 'Pourquoi utiliser MFA ?',
                    'choices' => [
                        ['choice_text' => 'Ajouter un facteur supplémentaire face au compromis d\'un mot de passe', 'is_correct' => true],
                        ['choice_text' => 'Rendre tous les mots de passe inutiles', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le chiffrement disque', 'is_correct' => false],
                        ['choice_text' => 'Désactiver les comptes', 'is_correct' => false]
                    ],
                    'explanation' => 'La MFA ajoute une barrière indépendante du mot de passe seul et réduit le risque d\'usage d\'un identifiant volé.',
                ],
                [
                    'question' => 'Que cherche à limiter un verrouillage après plusieurs échecs d\'authentification ?',
                    'choices' => [
                        ['choice_text' => 'Les tentatives répétées de force brute', 'is_correct' => true],
                        ['choice_text' => 'Les sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'Les interruptions', 'is_correct' => false],
                        ['choice_text' => 'La capacité mémoire', 'is_correct' => false]
                    ],
                    'explanation' => 'La limitation ou le verrouillage ralentit les essais successifs, tout en nécessitant une politique adaptée pour éviter un abus de type DoS.',
                ],
                [
                    'question' => 'Pourquoi stocker les mots de passe sous forme de hash adapté ?',
                    'choices' => [
                        ['choice_text' => 'Pour éviter qu\'une fuite ne révèle directement les mots de passe', 'is_correct' => true],
                        ['choice_text' => 'Pour accélérer le SSD', 'is_correct' => false],
                        ['choice_text' => 'Pour permettre leur récupération immédiate', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer MFA', 'is_correct' => false]
                    ],
                    'explanation' => 'Un hash spécialisé et salé rend les mots de passe beaucoup plus difficiles à retrouver après une fuite.',
                ],
                [
                    'question' => 'Quel compte a historiquement des privilèges très élevés sous Unix ?',
                    'choices' => [
                        ['choice_text' => 'root', 'is_correct' => true],
                        ['choice_text' => 'guest', 'is_correct' => false],
                        ['choice_text' => 'nobody', 'is_correct' => false],
                        ['choice_text' => 'network', 'is_correct' => false]
                    ],
                    'explanation' => 'root dispose de privilèges administratifs étendus, ce qui justifie de limiter son utilisation directe.',
                ],
                [
                    'question' => 'Pourquoi appliquer les mises à jour de sécurité ?',
                    'choices' => [
                        ['choice_text' => 'Pour corriger des vulnérabilités connues', 'is_correct' => true],
                        ['choice_text' => 'Pour ajouter des cœurs CPU', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les services', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false]
                    ],
                    'explanation' => 'Les correctifs réduisent l\'exposition aux failles publiées et peuvent aussi corriger des défauts de stabilité.',
                ],
                [
                    'question' => 'Quelle pratique réduit le risque d\'une commande administrative accidentelle ?',
                    'choices' => [
                        ['choice_text' => 'Utiliser un compte standard et élever les privilèges ponctuellement', 'is_correct' => true],
                        ['choice_text' => 'Utiliser root en permanence', 'is_correct' => false],
                        ['choice_text' => 'Partager un mot de passe root', 'is_correct' => false],
                        ['choice_text' => 'Désactiver l\'audit', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'élévation ponctuelle limite la portée des erreurs et rend les actions administratives explicites.',
                ],
                [
                    'question' => 'Pourquoi surveiller les logs d\'authentification ?',
                    'choices' => [
                        ['choice_text' => 'Pour repérer des échecs répétés ou des connexions inattendues', 'is_correct' => true],
                        ['choice_text' => 'Pour accélérer la RAM', 'is_correct' => false],
                        ['choice_text' => 'Pour empêcher toute erreur utilisateur', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer le firewall', 'is_correct' => false]
                    ],
                    'explanation' => 'Les événements d\'authentification sont utiles pour détecter force brute, comptes compromis et comportements inhabituels.',
                ]
            ],
        ],
        [
            'title' => 'Virtualisation et machines virtuelles',
            'description' => 'Principes des hyperviseurs, VMs, snapshots et allocation des ressources.',
            'difficulty' => 'Beginner',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Que fournit principalement un hyperviseur ?',
                    'choices' => [
                        ['choice_text' => 'Une couche permettant d\'exécuter plusieurs VMs isolées sur un hôte', 'is_correct' => true],
                        ['choice_text' => 'Un serveur DNS public', 'is_correct' => false],
                        ['choice_text' => 'Un éditeur de code', 'is_correct' => false],
                        ['choice_text' => 'Un système de fichiers utilisateur', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'hyperviseur arbitre les ressources physiques et présente des ressources virtuelles aux machines invitées.',
                ],
                [
                    'question' => 'Quelle caractéristique décrit un hyperviseur de type 1 ?',
                    'choices' => [
                        ['choice_text' => 'Il s\'exécute directement sur le matériel hôte', 'is_correct' => true],
                        ['choice_text' => 'Il doit être dans un navigateur', 'is_correct' => false],
                        ['choice_text' => 'Il est un conteneur', 'is_correct' => false],
                        ['choice_text' => 'Il ne gère pas de CPU virtuel', 'is_correct' => false]
                    ],
                    'explanation' => 'Un hyperviseur de type 1 est un hyperviseur bare-metal, placé directement sur le matériel selon l\'architecture.',
                ],
                [
                    'question' => 'Quelles ressources sont typiquement virtualisées pour une VM ?',
                    'choices' => [
                        ['choice_text' => 'CPU, mémoire, stockage et périphériques nécessaires', 'is_correct' => true],
                        ['choice_text' => 'Uniquement le clavier', 'is_correct' => false],
                        ['choice_text' => 'Uniquement DNS', 'is_correct' => false],
                        ['choice_text' => 'Uniquement le câble réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Une VM présente des ressources matérielles virtuelles suffisantes pour faire fonctionner un système invité.',
                ],
                [
                    'question' => 'À quoi sert principalement un snapshot de VM ?',
                    'choices' => [
                        ['choice_text' => 'Capturer un état pour certains tests ou retours arrière', 'is_correct' => true],
                        ['choice_text' => 'Remplacer toutes les sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'Ajouter des CPU physiques', 'is_correct' => false],
                        ['choice_text' => 'Accélérer définitivement le disque', 'is_correct' => false]
                    ],
                    'explanation' => 'Un snapshot facilite certains retours arrière mais ne constitue pas à lui seul une sauvegarde indépendante.',
                ],
                [
                    'question' => 'Quel risque crée une forte surallocation de vCPU ?',
                    'choices' => [
                        ['choice_text' => 'Une contention CPU et une hausse de latence', 'is_correct' => true],
                        ['choice_text' => 'Une augmentation automatique de la RAM', 'is_correct' => false],
                        ['choice_text' => 'Un disque invulnérable', 'is_correct' => false],
                        ['choice_text' => 'La suppression du réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'Trop de vCPU par rapport aux cœurs physiques peuvent laisser les VMs attendre le CPU et dégrader la latence.',
                ],
                [
                    'question' => 'Que signifie thin provisioning pour un disque virtuel ?',
                    'choices' => [
                        ['choice_text' => 'L\'espace physique est alloué progressivement selon l\'utilisation', 'is_correct' => true],
                        ['choice_text' => 'Le disque est entièrement en RAM', 'is_correct' => false],
                        ['choice_text' => 'Il ne peut jamais grandir', 'is_correct' => false],
                        ['choice_text' => 'Il est forcément chiffré', 'is_correct' => false]
                    ],
                    'explanation' => 'Le thin provisioning réserve la capacité physique au fur et à mesure, ce qui exige une surveillance de la capacité réelle.',
                ],
                [
                    'question' => 'Pourquoi des drivers paravirtualisés peuvent-ils améliorer une VM ?',
                    'choices' => [
                        ['choice_text' => 'Ils présentent des interfaces adaptées au contexte virtualisé', 'is_correct' => true],
                        ['choice_text' => 'Ils remplacent l\'hyperviseur', 'is_correct' => false],
                        ['choice_text' => 'Ils désactivent la mémoire virtuelle', 'is_correct' => false],
                        ['choice_text' => 'Ils transforment la VM en conteneur', 'is_correct' => false]
                    ],
                    'explanation' => 'Des drivers adaptés peuvent réduire le coût d\'accès aux périphériques virtuels et améliorer les performances.',
                ],
                [
                    'question' => 'Quel avantage majeur offre une VM par rapport à un serveur physique dédié ?',
                    'choices' => [
                        ['choice_text' => 'La consolidation et l\'isolation logique des charges', 'is_correct' => true],
                        ['choice_text' => 'Une absence totale de panne', 'is_correct' => false],
                        ['choice_text' => 'Un stockage toujours plus rapide', 'is_correct' => false],
                        ['choice_text' => 'Une sécurité parfaite', 'is_correct' => false]
                    ],
                    'explanation' => 'La virtualisation permet de consolider plusieurs charges sur un même matériel tout en séparant leurs environnements.',
                ],
                [
                    'question' => 'Pourquoi gérer correctement l\'heure dans une VM ?',
                    'choices' => [
                        ['choice_text' => 'Les dérives peuvent perturber logs, certificats et authentification', 'is_correct' => true],
                        ['choice_text' => 'Pour augmenter les vCPU', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les snapshots', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer le stockage', 'is_correct' => false]
                    ],
                    'explanation' => 'Les mécanismes de sécurité et de diagnostic dépendent souvent d\'une horloge raisonnablement synchronisée.',
                ],
                [
                    'question' => 'Quelle affirmation est correcte sur l\'isolation d\'une VM ?',
                    'choices' => [
                        ['choice_text' => 'Elle ajoute une frontière, mais une faille d\'hyperviseur peut affecter cette isolation', 'is_correct' => true],
                        ['choice_text' => 'Elle garantit l\'absence de compromission', 'is_correct' => false],
                        ['choice_text' => 'Elle interdit tout réseau', 'is_correct' => false],
                        ['choice_text' => 'Elle rend les sauvegardes inutiles', 'is_correct' => false]
                    ],
                    'explanation' => 'La VM fournit une isolation logique, mais l\'hyperviseur reste une composante critique de la chaîne de confiance.',
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
