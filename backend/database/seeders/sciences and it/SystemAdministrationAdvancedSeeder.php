<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SystemAdministrationAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'System Administration Advanced — Linux Internals',
                'description' => 'Approfondissez le fonctionnement interne de Linux, les processus, la mémoire, le noyau et le diagnostic avancé.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal du kernel Linux ?',
                        'explanation' => 'Le kernel gère notamment le processeur, la mémoire, les périphériques, les processus et les interfaces entre matériel et logiciels.',
                        'choices' => [
                            ['choice_text' => 'Gérer les ressources matérielles et fournir les services fondamentaux du système', 'is_correct' => true],
                            ['choice_text' => 'Exécuter uniquement les commandes shell', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les services réseau', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement les fichiers utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un processus peut-il apparaître dans un état zombie ?',
                        'explanation' => 'Un processus zombie a terminé son exécution mais son parent n’a pas encore récupéré son statut via une opération comme wait().',
                        'choices' => [
                            ['choice_text' => 'Il a terminé mais son parent n’a pas encore récupéré son statut', 'is_correct' => true],
                            ['choice_text' => 'Il consomme toujours 100 % du CPU', 'is_correct' => false],
                            ['choice_text' => 'Il est automatiquement suspendu par le kernel', 'is_correct' => false],
                            ['choice_text' => 'Il ne possède aucun PID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une consommation excessive de mémoire par un processus ?',
                        'explanation' => 'Un processus qui consomme trop de mémoire peut provoquer de la pression mémoire et entraîner une utilisation intensive du swap.',
                        'choices' => [
                            ['choice_text' => 'Une pression mémoire pouvant dégrader les performances du système', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique de la capacité RAM', 'is_correct' => false],
                            ['choice_text' => 'Une réduction de la taille du disque', 'is_correct' => false],
                            ['choice_text' => 'Une modification automatique du DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi observer /proc peut-il être utile pour le diagnostic Linux ?',
                        'explanation' => '/proc expose des informations dynamiques sur le noyau, les processus et certaines ressources système.',
                        'choices' => [
                            ['choice_text' => 'Pour inspecter des informations dynamiques sur le système et les processus', 'is_correct' => true],
                            ['choice_text' => 'Pour stocker définitivement les fichiers utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour configurer DNS uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de vmstat ?',
                        'explanation' => 'vmstat fournit notamment des statistiques sur mémoire, processus, paging et activité CPU.',
                        'choices' => [
                            ['choice_text' => 'Observer plusieurs indicateurs de mémoire, processus, paging et CPU', 'is_correct' => true],
                            ['choice_text' => 'Modifier les permissions des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Configurer un serveur DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’IO wait peut-il expliquer un système lent malgré un CPU peu utilisé ?',
                        'explanation' => 'Le processeur peut attendre des opérations d’entrée/sortie lentes tandis que le stockage devient le véritable goulot d’étranglement.',
                        'choices' => [
                            ['choice_text' => 'Le système peut être bloqué en attente d’opérations d’entrée/sortie', 'is_correct' => true],
                            ['choice_text' => 'Un CPU peu utilisé signifie toujours que le système est sain', 'is_correct' => false],
                            ['choice_text' => 'Le DNS consomme nécessairement le CPU', 'is_correct' => false],
                            ['choice_text' => 'La mémoire ne peut jamais être responsable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif du OOM killer sous Linux ?',
                        'explanation' => 'Lorsque le système manque fortement de mémoire, le kernel peut sélectionner des processus à terminer afin de récupérer des ressources.',
                        'choices' => [
                            ['choice_text' => 'Libérer de la mémoire en terminant certains processus lors d’une pression extrême', 'is_correct' => true],
                            ['choice_text' => 'Augmenter physiquement la RAM', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les fichiers temporaires uniquement', 'is_correct' => false],
                            ['choice_text' => 'Redémarrer automatiquement le serveur dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les limites de ressources peuvent-elles être utiles pour un service ?',
                        'explanation' => 'Les limites réduisent le risque qu’un seul service consomme toutes les ressources disponibles.',
                        'choices' => [
                            ['choice_text' => 'Empêcher un service de monopoliser les ressources du système', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’un service ne tombera jamais en panne', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les ressources disponibles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le nombre de context switches peut-il être intéressant à surveiller ?',
                        'explanation' => 'Des changements de contexte très fréquents peuvent refléter une forte activité de scheduling et contribuer à un coût système supplémentaire.',
                        'choices' => [
                            ['choice_text' => 'Ils donnent un indice sur l’activité de scheduling du système', 'is_correct' => true],
                            ['choice_text' => 'Ils représentent uniquement les connexions réseau', 'is_correct' => false],
                            ['choice_text' => 'Ils mesurent directement la capacité disque', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les métriques CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’optimisation Linux doit-elle être basée sur des mesures réelles ?',
                        'explanation' => 'Modifier des paramètres sans connaître le véritable goulot d’étranglement peut ne rien améliorer ou dégrader le système.',
                        'choices' => [
                            ['choice_text' => 'Pour modifier le bon composant à partir de preuves observables', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute collecte de métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une optimisation universelle', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests de performance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Advanced — Réseau et diagnostic avancé',
                'description' => 'Analysez le routage, les sockets, DNS, firewall et problèmes réseau complexes.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un problème de réseau doit-il être analysé par couches ?',
                        'explanation' => 'Une approche structurée permet de distinguer les problèmes physiques, IP, transport, DNS, application ou configuration locale.',
                        'choices' => [
                            ['choice_text' => 'Pour isoler progressivement la couche responsable du problème', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les pannes réseau sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d’utiliser des outils de diagnostic', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une connexion TCP peut-elle échouer alors que ping fonctionne ?',
                        'explanation' => 'Ping utilise généralement ICMP tandis qu’une connexion TCP dépend du service, du port et des règles réseau correspondantes.',
                        'choices' => [
                            ['choice_text' => 'ICMP peut fonctionner alors que le port TCP ou le service est bloqué', 'is_correct' => true],
                            ['choice_text' => 'Ping utilise toujours TCP', 'is_correct' => false],
                            ['choice_text' => 'Si ping fonctionne, tous les ports sont obligatoirement ouverts', 'is_correct' => false],
                            ['choice_text' => 'TCP ne dépend jamais des ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de ss -lntp dans un diagnostic Linux ?',
                        'explanation' => 'Cette commande permet notamment d’afficher les sockets TCP en écoute et, selon les permissions, les processus associés.',
                        'choices' => [
                            ['choice_text' => 'Identifier les ports TCP en écoute et les processus associés', 'is_correct' => true],
                            ['choice_text' => 'Afficher uniquement les utilisateurs connectés', 'is_correct' => false],
                            ['choice_text' => 'Modifier le routage', 'is_correct' => false],
                            ['choice_text' => 'Configurer automatiquement DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une règle firewall trop restrictive peut-elle créer une panne applicative ?',
                        'explanation' => 'Un firewall peut bloquer le trafic nécessaire à l’application même lorsque tous les services fonctionnent correctement.',
                        'choices' => [
                            ['choice_text' => 'Elle peut bloquer un flux nécessaire au fonctionnement du service', 'is_correct' => true],
                            ['choice_text' => 'Un firewall ne peut jamais bloquer un service légitime', 'is_correct' => false],
                            ['choice_text' => 'Le firewall ne contrôle que les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Le firewall modifie toujours le code applicatif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier la route vers une destination avant d’analyser le firewall ?',
                        'explanation' => 'Si le paquet ne prend déjà pas le bon chemin, le firewall n’est peut-être pas la cause principale.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que le trafic suit réellement le chemin attendu', 'is_correct' => true],
                            ['choice_text' => 'Pour désactiver le firewall', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier DNS', 'is_correct' => false],
                            ['choice_text' => 'Pour fermer tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de tcpdump ?',
                        'explanation' => 'tcpdump capture et analyse des paquets réseau afin d’observer les échanges réels sur une interface.',
                        'choices' => [
                            ['choice_text' => 'Capturer et examiner des paquets réseau', 'is_correct' => true],
                            ['choice_text' => 'Créer des comptes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Modifier les permissions Linux', 'is_correct' => false],
                            ['choice_text' => 'Optimiser automatiquement le CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le TTL est-il utile lors de l’analyse d’un paquet IP ?',
                        'explanation' => 'Le TTL limite la durée de vie logique d’un paquet en nombre de sauts et aide notamment à éviter les boucles persistantes.',
                        'choices' => [
                            ['choice_text' => 'Limiter le nombre de sauts qu’un paquet peut effectuer', 'is_correct' => true],
                            ['choice_text' => 'Déterminer la taille du disque', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer les paquets', 'is_correct' => false],
                            ['choice_text' => 'Identifier le compte utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un problème DNS peut-il être intermittent ?',
                        'explanation' => 'Des caches, plusieurs serveurs DNS, des délais d’expiration ou une infrastructure partiellement défaillante peuvent provoquer des comportements variables.',
                        'choices' => [
                            ['choice_text' => 'Des caches ou plusieurs résolveurs peuvent produire des réponses ou comportements différents', 'is_correct' => true],
                            ['choice_text' => 'DNS fonctionne toujours de manière parfaitement déterministe', 'is_correct' => false],
                            ['choice_text' => 'Les serveurs DNS n’utilisent jamais de cache', 'is_correct' => false],
                            ['choice_text' => 'Un problème DNS est toujours lié au disque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier la MTU peut-il être pertinent dans certains problèmes réseau ?',
                        'explanation' => 'Une MTU incompatible peut entraîner des problèmes de fragmentation ou de transmission pour certains paquets.',
                        'choices' => [
                            ['choice_text' => 'Une MTU inadéquate peut provoquer certains problèmes de transmission de paquets', 'is_correct' => true],
                            ['choice_text' => 'La MTU contrôle les permissions', 'is_correct' => false],
                            ['choice_text' => 'La MTU détermine le nombre d’utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'La MTU remplace DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer une connexion depuis plusieurs réseaux peut-il aider au diagnostic ?',
                        'explanation' => 'Cela permet de déterminer si le problème est local au serveur ou dépend d’un chemin réseau particulier.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer un problème local d’un problème dépendant d’un chemin réseau', 'is_correct' => true],
                            ['choice_text' => 'Pour changer automatiquement le firewall', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les routes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Advanced — Sécurité des serveurs',
                'description' => 'Approfondissez le hardening, les contrôles d’accès, l’audit et la réponse aux incidents système.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal du hardening d’un serveur ?',
                        'explanation' => 'Le hardening réduit les fonctionnalités, services et permissions inutiles afin de diminuer la surface d’attaque.',
                        'choices' => [
                            ['choice_text' => 'Réduire la surface d’attaque et renforcer les contrôles de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Ajouter tous les services disponibles', 'is_correct' => false],
                            ['choice_text' => 'Désactiver toutes les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Donner les privilèges root à tous les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les services inutiles doivent-ils être désinstallés ou désactivés lorsque cela est possible ?',
                        'explanation' => 'Chaque service inutile peut consommer des ressources et introduire des vulnérabilités potentielles.',
                        'choices' => [
                            ['choice_text' => 'Réduire la surface d’attaque et la complexité du système', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le nombre de ports ouverts', 'is_correct' => false],
                            ['choice_text' => 'Garantir une disponibilité de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rotation des secrets est-elle importante ?',
                        'explanation' => 'Un secret compromis ne doit pas rester valide indéfiniment. La rotation limite la durée d’exploitation possible.',
                        'choices' => [
                            ['choice_text' => 'Réduire la durée pendant laquelle un secret compromis reste exploitable', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun secret ne sera compromis', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les comptes système', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le firewall', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les permissions 777 sont-elles généralement déconseillées sur les fichiers sensibles ?',
                        'explanation' => 'Elles accordent lecture, écriture et exécution à tout le monde et peuvent exposer des données ou permettre des modifications non autorisées.',
                        'choices' => [
                            ['choice_text' => 'Elles accordent des permissions excessives à tous les utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Elles sont nécessaires à tous les programmes Linux', 'is_correct' => false],
                            ['choice_text' => 'Elles chiffrent les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Elles empêchent toute exécution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un système d’audit comme auditd ?',
                        'explanation' => 'auditd permet de collecter des événements liés à la sécurité et à certaines actions système afin de fournir une traçabilité.',
                        'choices' => [
                            ['choice_text' => 'Collecter des événements d’audit pour améliorer la traçabilité', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Modifier automatiquement toutes les permissions', 'is_correct' => false],
                            ['choice_text' => 'Configurer DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la journalisation centralisée peut-elle améliorer la sécurité ?',
                        'explanation' => 'Un attaquant qui contrôle un serveur peut tenter de supprimer les logs locaux. Une copie centralisée augmente leur disponibilité pour l’analyse.',
                        'choices' => [
                            ['choice_text' => 'Elle rend les événements disponibles même si un hôte local est compromis', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toutes les attaques', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les permissions', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement les incidents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les comptes d’administration des comptes bureautiques ?',
                        'explanation' => 'Un compte administratif séparé réduit l’exposition des privilèges élevés à des activités quotidiennes comme la navigation ou la messagerie.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition des privilèges élevés aux activités quotidiennes', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le nombre de privilèges permanents', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’audit', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les fichiers de configuration contenant des secrets doivent-ils avoir des permissions restrictives ?',
                        'explanation' => 'Limiter leur accès réduit le risque qu’un utilisateur ou processus non autorisé puisse lire les secrets.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’exposition des secrets', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les fichiers publics', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la vitesse du disque', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des indicateurs de compromission lors d’un incident ?',
                        'explanation' => 'Les IOC facilitent la recherche d’activités similaires sur d’autres systèmes et peuvent accélérer la réponse.',
                        'choices' => [
                            ['choice_text' => 'Pour rechercher des traces similaires sur d’autres systèmes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’une attaque est terminée', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une bonne première priorité lorsqu’un serveur est potentiellement compromis ?',
                        'explanation' => 'Il faut limiter l’impact et préserver les éléments nécessaires à l’investigation sans détruire les preuves importantes.',
                        'choices' => [
                            ['choice_text' => 'Contenir l’incident tout en préservant les éléments utiles à l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Supprimer immédiatement tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Réinstaller sans aucune analyse', 'is_correct' => false],
                            ['choice_text' => 'Partager les identifiants du serveur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Advanced — Haute disponibilité et reprise',
                'description' => 'Maîtrisez les principes avancés de haute disponibilité, redondance, sauvegarde et reprise après incident.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de la haute disponibilité ?',
                        'explanation' => 'La haute disponibilité vise à réduire les interruptions de service en utilisant notamment redondance et mécanismes de bascule.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’interruption du service', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun composant ne tombera jamais en panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture avec un seul serveur critique représente-t-elle un Single Point of Failure ?',
                        'explanation' => 'La défaillance de cet unique serveur peut interrompre l’intégralité du service.',
                        'choices' => [
                            ['choice_text' => 'Sa panne peut entraîner l’arrêt complet du service', 'is_correct' => true],
                            ['choice_text' => 'Il possède toujours trop de CPU', 'is_correct' => false],
                            ['choice_text' => 'Il empêche les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Il garantit une disponibilité maximale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un load balancer ?',
                        'explanation' => 'Un load balancer distribue les requêtes entre plusieurs serveurs et peut retirer les instances défaillantes du trafic.',
                        'choices' => [
                            ['choice_text' => 'Distribuer la charge et faciliter la disponibilité du service', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les serveurs ne tomberont jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les health checks sont-ils importants dans une architecture HA ?',
                        'explanation' => 'Ils permettent de déterminer quelles instances sont capables de recevoir du trafic.',
                        'choices' => [
                            ['choice_text' => 'Identifier les instances saines pouvant continuer à recevoir du trafic', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la RAM', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Changer les permissions des fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réplication synchrone peut-elle être coûteuse ?',
                        'explanation' => 'Les écritures peuvent devoir attendre plusieurs systèmes, ce qui augmente parfois la latence et les dépendances réseau.',
                        'choices' => [
                            ['choice_text' => 'Elle peut augmenter la latence des écritures et dépendre fortement du réseau', 'is_correct' => true],
                            ['choice_text' => 'Elle ne copie jamais les données', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toujours toute perte de données', 'is_correct' => false],
                            ['choice_text' => 'Elle ne consomme aucune ressource', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une architecture redondante qui n’est jamais testée en failover ?',
                        'explanation' => 'La redondance peut sembler correcte mais échouer au moment où elle est réellement nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Le mécanisme de bascule peut ne pas fonctionner lors d’un incident réel', 'is_correct' => true],
                            ['choice_text' => 'Le failover devient automatiquement plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Les sauvegardes deviennent inutiles', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité devient garantie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi RPO et RTO doivent-ils être définis avant de choisir une architecture de reprise ?',
                        'explanation' => 'Ces objectifs déterminent le niveau de réplication, sauvegarde, automatisation et redondance nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Ils déterminent les capacités de reprise nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Ils définissent uniquement les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toutes les métriques de performance', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent zéro interruption', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde hors site est-elle utile ?',
                        'explanation' => 'Elle protège contre certains incidents locaux qui pourraient détruire à la fois les systèmes et leurs sauvegardes.',
                        'choices' => [
                            ['choice_text' => 'Protéger les données contre les incidents affectant l’emplacement principal', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le besoin de sauvegarde locale', 'is_correct' => false],
                            ['choice_text' => 'Garantir une restauration instantanée', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les procédures de disaster recovery ?',
                        'explanation' => 'Une documentation claire réduit le temps de réaction et évite de dépendre uniquement de la mémoire d’une personne.',
                        'choices' => [
                            ['choice_text' => 'Réduire le temps et les erreurs lors d’une reprise après incident', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun incident ne se produira', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de tests', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les modifications de l’infrastructure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exercices de reprise doivent-ils être réalisés régulièrement ?',
                        'explanation' => 'L’infrastructure et les procédures changent. Des exercices réguliers vérifient qu’elles restent valides.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que les procédures restent fonctionnelles malgré les changements', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes anciennes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Advanced — Observabilité et incidents',
                'description' => 'Approfondissez monitoring, logging, alerting, diagnostic et gestion structurée des incidents.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle différence existe entre monitoring et observabilité ?',
                        'explanation' => 'Le monitoring suit des métriques et signaux connus tandis que l’observabilité vise à permettre de comprendre le comportement interne d’un système à partir de ses sorties.',
                        'choices' => [
                            ['choice_text' => 'L’observabilité cherche à comprendre les états internes à partir de signaux externes', 'is_correct' => true],
                            ['choice_text' => 'Le monitoring et l’observabilité sont toujours exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'L’observabilité concerne uniquement le stockage', 'is_correct' => false],
                            ['choice_text' => 'Le monitoring ne collecte jamais de métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quels sont trois signaux classiques d’observabilité ?',
                        'explanation' => 'Les métriques, logs et traces constituent des signaux fondamentaux pour comprendre les systèmes distribués.',
                        'choices' => [
                            ['choice_text' => 'Métriques, logs et traces', 'is_correct' => true],
                            ['choice_text' => 'CPU, clavier et souris uniquement', 'is_correct' => false],
                            ['choice_text' => 'DNS, DHCP et FTP uniquement', 'is_correct' => false],
                            ['choice_text' => 'RAM, fichiers et utilisateurs uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi corréler les logs avec un identifiant de requête ?',
                        'explanation' => 'Un identifiant commun permet de suivre une requête à travers plusieurs services et facilite le diagnostic.',
                        'choices' => [
                            ['choice_text' => 'Suivre une même opération à travers plusieurs composants', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les traces', 'is_correct' => false],
                            ['choice_text' => 'Modifier les permissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une alerte doit-elle être actionnable ?',
                        'explanation' => 'Une alerte utile doit signaler un problème nécessitant une intervention ou une investigation, plutôt que générer du bruit.',
                        'choices' => [
                            ['choice_text' => 'Elle doit fournir un signal nécessitant une action ou une investigation', 'is_correct' => true],
                            ['choice_text' => 'Elle doit se déclencher pour chaque événement', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être volontairement vague', 'is_correct' => false],
                            ['choice_text' => 'Elle doit remplacer tous les dashboards', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème provoque une alerte trop sensible ?',
                        'explanation' => 'Trop d’alertes non pertinentes provoquent de la fatigue et peuvent conduire les administrateurs à ignorer des signaux importants.',
                        'choices' => [
                            ['choice_text' => 'Une fatigue d’alerte et un risque d’ignorer les incidents importants', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure disponibilité garantie', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des incidents', 'is_correct' => false],
                            ['choice_text' => 'Une diminution des logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi établir une baseline de performance ?',
                        'explanation' => 'Une baseline fournit une référence permettant de détecter les dégradations significatives par rapport au comportement normal.',
                        'choices' => [
                            ['choice_text' => 'Disposer d’une référence pour identifier les changements anormaux', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les performances restent constantes', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout monitoring', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter une timeline pendant un incident ?',
                        'explanation' => 'Elle permet de corréler les événements, changements et actions afin de reconstruire le déroulement de l’incident.',
                        'choices' => [
                            ['choice_text' => 'Pour reconstruire la séquence des événements et actions', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer les logs système', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’analyse post-incident', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les alertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un postmortem sans recherche de culpabilité ?',
                        'explanation' => 'Une approche sans blâme cherche à comprendre les facteurs systémiques et à améliorer les processus plutôt qu’à désigner une personne.',
                        'choices' => [
                            ['choice_text' => 'Identifier les causes systémiques et prévenir la répétition de l’incident', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute amélioration', 'is_correct' => false],
                            ['choice_text' => 'Masquer les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les responsabilités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer la détection et la résolution d’un incident ?',
                        'explanation' => 'Détecter rapidement un problème et disposer ensuite d’un processus structuré de résolution permet de réduire le temps d’exposition tout en évitant les changements impulsifs.',
                        'choices' => [
                            ['choice_text' => 'Réduire le temps de détection tout en conservant une résolution structurée', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute intervention humaine', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les incidents sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le MTTR est-il important pour les opérations système ?',
                        'explanation' => 'Mean Time To Recovery ou Repair mesure le temps nécessaire pour restaurer le fonctionnement après un incident selon la définition utilisée.',
                        'choices' => [
                            ['choice_text' => 'Il mesure le temps moyen nécessaire pour rétablir le service après un incident', 'is_correct' => true],
                            ['choice_text' => 'Il mesure uniquement la capacité disque', 'is_correct' => false],
                            ['choice_text' => 'Il mesure le nombre d’utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Advanced — Automatisation à grande échelle',
                'description' => 'Maîtrisez l’automatisation multi-serveurs, la configuration déclarative, le versioning et les contrôles de déploiement.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi tester une modification automatisée sur un sous-ensemble de serveurs avant généralisation ?',
                        'explanation' => 'Une stratégie progressive limite l’impact potentiel d’une erreur dans l’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une erreur avant le déploiement global', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage d’une configuration déclarative dans un environnement multi-serveurs ?',
                        'explanation' => 'Elle décrit l’état attendu et permet de maintenir une configuration cohérente sur plusieurs machines.',
                        'choices' => [
                            ['choice_text' => 'Maintenir un état de configuration cohérent sur plusieurs systèmes', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les différences entre systèmes sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Éviter le versioning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’automatisation doit-elle être observable ?',
                        'explanation' => 'Les opérations automatisées peuvent échouer ou produire des effets inattendus. Les logs et métriques permettent de détecter et comprendre ces problèmes.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter et diagnostiquer les échecs automatisés', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toutes les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une opération automatisée doit-elle être réversible lorsque cela est possible ?',
                        'explanation' => 'La possibilité de rollback réduit l’impact d’une mauvaise modification.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir restaurer rapidement un état connu après une mauvaise modification', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les déploiements', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’aucune erreur ne se produira', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les versions précédentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi centraliser les configurations partagées avec prudence ?',
                        'explanation' => 'Une configuration centrale mal modifiée peut affecter un grand nombre de systèmes.',
                        'choices' => [
                            ['choice_text' => 'Une modification centralisée incorrecte peut avoir un impact massif', 'is_correct' => true],
                            ['choice_text' => 'La centralisation élimine tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Les configurations centrales ne peuvent jamais être versionnées', 'is_correct' => false],
                            ['choice_text' => 'Les changements centraux n’affectent jamais les serveurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des quality gates avant un déploiement automatisé ?',
                        'explanation' => 'Les quality gates bloquent automatiquement une promotion qui ne respecte pas les critères définis.',
                        'choices' => [
                            ['choice_text' => 'Empêcher la promotion automatique d’un changement qui ne respecte pas les critères', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la vitesse de déploiement sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion des dépendances est-elle importante dans l’automatisation système ?',
                        'explanation' => 'Une modification peut dépendre de versions spécifiques de paquets, services ou systèmes et créer des incompatibilités.',
                        'choices' => [
                            ['choice_text' => 'Éviter les incompatibilités entre composants et versions', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les versions précédentes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver un inventaire fiable des serveurs ?',
                        'explanation' => 'Une automatisation à grande échelle doit savoir précisément quelles machines existent, leurs rôles et leur état.',
                        'choices' => [
                            ['choice_text' => 'Pour savoir quels systèmes doivent recevoir quelles configurations', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les serveurs inactifs automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un script exécuté avec des privilèges élevés sur des centaines de serveurs ?',
                        'explanation' => 'Une erreur dans le script peut être propagée rapidement avec des permissions suffisantes pour causer des dégâts importants.',
                        'choices' => [
                            ['choice_text' => 'Une erreur peut provoquer un impact massif avec des privilèges élevés', 'is_correct' => true],
                            ['choice_text' => 'Le script ne peut jamais échouer', 'is_correct' => false],
                            ['choice_text' => 'Le risque est inférieur à une exécution manuelle', 'is_correct' => false],
                            ['choice_text' => 'Les privilèges empêchent les changements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les changements d’infrastructure doivent-ils être audités ?',
                        'explanation' => 'L’audit permet de savoir qui a changé quoi, quand et pourquoi, ce qui facilite le diagnostic et la gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Assurer la traçabilité des changements et faciliter les investigations', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tous les changements', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les configurations historiques', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la sécurité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Advanced — Virtualisation, Cloud et Infrastructure',
                'description' => 'Analysez les architectures modernes combinant machines virtuelles, cloud, stockage et administration infrastructure.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les instances cloud éphémères nécessitent-elles une stratégie de persistance séparée ?',
                        'explanation' => 'Une instance peut être remplacée ou détruite. Les données importantes doivent donc être stockées dans des services persistants.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une instance peut être détruite ou recréée sans préserver son disque éphémère', 'is_correct' => true],
                            ['choice_text' => 'Parce que le cloud ne permet aucun stockage persistant', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fichiers ne peuvent pas exister dans le cloud', 'is_correct' => false],
                            ['choice_text' => 'Parce que les instances sont toujours permanentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les environnements cloud par comptes, projets ou subscriptions ?',
                        'explanation' => 'Cette séparation facilite l’isolation des permissions, des coûts et des environnements.',
                        'choices' => [
                            ['choice_text' => 'Améliorer l’isolation, la gouvernance et le suivi des coûts', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une VM surdimensionnée ?',
                        'explanation' => 'Une VM avec des ressources excessives peut entraîner des coûts inutiles sans bénéfice réel.',
                        'choices' => [
                            ['choice_text' => 'Une consommation de ressources et un coût supérieurs aux besoins', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique de la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité de sauvegarder', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation obligatoire des erreurs réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les ressources d’une VM après son déploiement ?',
                        'explanation' => 'Les besoins réels peuvent différer des estimations initiales et évoluer dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Pour adapter les ressources à l’usage réel et détecter les anomalies', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un snapshot de machine virtuelle ?',
                        'explanation' => 'Un snapshot peut capturer un état à un moment donné et faciliter certaines opérations de retour en arrière, selon la technologie et l’usage.',
                        'choices' => [
                            ['choice_text' => 'Conserver un état à un instant donné pour certaines opérations de restauration ou test', 'is_correct' => true],
                            ['choice_text' => 'Remplacer systématiquement une sauvegarde complète', 'is_correct' => false],
                            ['choice_text' => 'Garantir une restauration permanente', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un snapshot ne doit-il pas être considéré automatiquement comme une sauvegarde indépendante ?',
                        'explanation' => 'Il peut dépendre du stockage primaire et être affecté par les mêmes incidents.',
                        'choices' => [
                            ['choice_text' => 'Il peut dépendre de la même infrastructure que les données originales', 'is_correct' => true],
                            ['choice_text' => 'Un snapshot contient toujours moins de données', 'is_correct' => false],
                            ['choice_text' => 'Les snapshots ne peuvent jamais être restaurés', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde ne peut jamais contenir de snapshot', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le principe IAM du moindre privilège est-il important dans le cloud ?',
                        'explanation' => 'Des permissions cloud excessives peuvent permettre à un compte compromis d’accéder à de nombreuses ressources ou de modifier l’infrastructure.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une compromission de compte ou de service', 'is_correct' => true],
                            ['choice_text' => 'Donner l’accès administrateur global à tous les services', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Éviter les logs cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts cloud doivent-ils être rattachés aux workloads ou équipes lorsque possible ?',
                        'explanation' => 'Le suivi par workload ou équipe permet d’identifier les dépenses et de responsabiliser leur gestion.',
                        'choices' => [
                            ['choice_text' => 'Pour attribuer les coûts et identifier les optimisations possibles', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver la surveillance', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les budgets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle prévoir plusieurs niveaux de disponibilité ?',
                        'explanation' => 'Les composants critiques doivent être distribués de manière à limiter l’impact d’une panne d’un seul composant ou emplacement.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’une panne unique interrompe tout le service', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune panne ne surviendra', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement tous les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’infrastructure cloud doit-elle être traitée comme du code lorsque c’est possible ?',
                        'explanation' => 'L’Infrastructure as Code permet de versionner, revoir, automatiser et reproduire les environnements.',
                        'choices' => [
                            ['choice_text' => 'Pour versionner et reproduire les environnements infrastructurels', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les systèmes cloud', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les changements', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Advanced — Gestion des incidents et résilience',
                'description' => 'Évaluez votre capacité à concevoir des systèmes résilients et à gérer efficacement les incidents critiques.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le premier objectif d’une réponse à incident critique ?',
                        'explanation' => 'La première priorité est généralement de limiter l’impact et de restaurer un niveau de service acceptable.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact et stabiliser le service', 'is_correct' => true],
                            ['choice_text' => 'Identifier immédiatement tous les problèmes historiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Réécrire toute l’infrastructure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter les changements non documentés pendant un incident ?',
                        'explanation' => 'Des changements non tracés peuvent compliquer le diagnostic et rendre difficile l’identification de la cause ou de l’effet d’une action.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent compliquer le diagnostic et empêcher de reconstruire la timeline', 'is_correct' => true],
                            ['choice_text' => 'Ils améliorent toujours la résolution', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent le rollback', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont jamais d’impact', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un runbook ?',
                        'explanation' => 'Un runbook décrit des procédures opérationnelles standardisées pour diagnostiquer ou résoudre certains scénarios connus.',
                        'choices' => [
                            ['choice_text' => 'Fournir une procédure standardisée pour une opération ou un incident connu', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les alertes', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des critères explicites de rollback ?',
                        'explanation' => 'Ils permettent de revenir rapidement à une version stable lorsque certaines conditions de dégradation sont atteintes.',
                        'choices' => [
                            ['choice_text' => 'Déclencher une restauration contrôlée lorsque les conditions de dégradation sont atteintes', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute mise à jour', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les anciennes versions', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute surveillance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances externes sont-elles importantes dans une analyse de résilience ?',
                        'explanation' => 'Un service peut dépendre d’autres systèmes dont la panne peut entraîner sa propre indisponibilité.',
                        'choices' => [
                            ['choice_text' => 'Une panne d’une dépendance peut provoquer une panne du service principal', 'is_correct' => true],
                            ['choice_text' => 'Les dépendances ne peuvent jamais tomber en panne', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances concernent uniquement le stockage', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent les systèmes de monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les timeouts sont-ils importants dans les architectures distribuées ?',
                        'explanation' => 'Sans timeout approprié, un appel bloqué peut conserver des ressources et provoquer une propagation de la panne.',
                        'choices' => [
                            ['choice_text' => 'Ils empêchent qu’un appel bloqué conserve indéfiniment des ressources', 'is_correct' => true],
                            ['choice_text' => 'Ils garantissent que toutes les requêtes réussissent', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment les erreurs réseau', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les retries', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les retries peuvent-ils aggraver une panne ?',
                        'explanation' => 'Des retries excessifs peuvent augmenter la charge sur un service déjà en difficulté et provoquer une cascade de défaillances.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent amplifier la charge sur un service déjà dégradé', 'is_correct' => true],
                            ['choice_text' => 'Ils réduisent toujours la charge', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent une disponibilité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent les timeouts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les circuit breakers peuvent-ils être utiles ?',
                        'explanation' => 'Ils empêchent temporairement les appels vers une dépendance défaillante afin de limiter la propagation du problème.',
                        'choices' => [
                            ['choice_text' => 'Limiter les appels vers une dépendance défaillante et réduire la propagation de panne', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la dépendance redeviendra disponible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capacité de restauration doit-elle être testée avant un incident ?',
                        'explanation' => 'Découvrir pendant une crise qu’une sauvegarde ou procédure de restauration ne fonctionne pas est trop tardif.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier à l’avance que la reprise est réellement possible', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les sauvegardes inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’aucun incident ne surviendra', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une analyse de cause racine après incident ?',
                        'explanation' => 'Elle cherche à comprendre les facteurs ayant contribué à l’incident et à définir des mesures de prévention.',
                        'choices' => [
                            ['choice_text' => 'Identifier les causes et facteurs contributifs afin d’éviter la répétition', 'is_correct' => true],
                            ['choice_text' => 'Attribuer automatiquement la faute à une personne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun incident futur ne sera possible', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Advanced — Architecture système et bonnes pratiques',
                'description' => 'Évaluez les compétences avancées nécessaires pour concevoir des systèmes administrables, sécurisés et résilients.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel principe doit guider la conception d’un système administrable ?',
                        'explanation' => 'Un système doit être observable, automatisable, documenté, sécurisé et capable d’être restauré.',
                        'choices' => [
                            ['choice_text' => 'Concevoir pour l’observabilité, l’automatisation, la sécurité et la reprise', 'is_correct' => true],
                            ['choice_text' => 'Maximiser uniquement la complexité', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les mécanismes de rollback', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réduire la complexité d’une infrastructure ?',
                        'explanation' => 'Chaque composant supplémentaire ajoute potentiellement des dépendances, des opérations de maintenance et des points de défaillance.',
                        'choices' => [
                            ['choice_text' => 'Réduire les dépendances, risques opérationnels et coûts de maintenance', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute évolution future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tous les services', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des standards d’OS et de configuration dans une grande infrastructure ?',
                        'explanation' => 'La standardisation réduit la diversité inutile et simplifie le support, l’automatisation et la sécurité.',
                        'choices' => [
                            ['choice_text' => 'Réduire la complexité et faciliter l’administration à grande échelle', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute personnalisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun serveur ne tombera en panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les responsabilités entre administration système, réseau et sécurité lorsque nécessaire ?',
                        'explanation' => 'Une séparation claire des responsabilités facilite les contrôles, la spécialisation et la réduction des erreurs de configuration.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la clarté des responsabilités et les contrôles', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute collaboration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les privilèges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi privilégier l’automatisation répétable plutôt que des opérations manuelles fréquentes ?',
                        'explanation' => 'L’automatisation réduit les différences entre serveurs et diminue les erreurs humaines sur les tâches répétitives.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la cohérence et réduire les erreurs opérationnelles', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute intervention humaine', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Éviter la surveillance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les changements d’infrastructure doivent-ils être précédés d’une analyse d’impact ?',
                        'explanation' => 'Un changement peut affecter des dépendances, performances, sécurité ou disponibilité d’autres systèmes.',
                        'choices' => [
                            ['choice_text' => 'Identifier les conséquences possibles avant modification', 'is_correct' => true],
                            ['choice_text' => 'Garantir une absence totale de risques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les changements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne architecture prévoit-elle plusieurs mécanismes de contrôle ?',
                        'explanation' => 'La défense en profondeur évite qu’une seule erreur ou compromission contourne toutes les protections.',
                        'choices' => [
                            ['choice_text' => 'Créer une défense en profondeur contre les erreurs et attaques', 'is_correct' => true],
                            ['choice_text' => 'Multiplier inutilement les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Éviter l’automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les configurations devraient-elles être testées avant production ?',
                        'explanation' => 'Une configuration incorrecte peut provoquer une indisponibilité ou un problème de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Détecter les erreurs avant qu’elles n’affectent les systèmes critiques', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute version future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les systèmes de test', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro changement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances d’un service doivent-elles être documentées ?',
                        'explanation' => 'Lors d’une panne, il faut savoir quels composants doivent fonctionner pour restaurer efficacement le service.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le diagnostic et la reprise d’un service', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les services indépendants automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle caractéristique définit le mieux une infrastructure mature ?',
                        'explanation' => 'Une infrastructure mature est reproductible, observable, sécurisée, automatisée, documentée et conçue avec des mécanismes de reprise.',
                        'choices' => [
                            ['choice_text' => 'Elle est reproductible, observable, sécurisée, automatisée et résiliente', 'is_correct' => true],
                            ['choice_text' => 'Elle possède simplement beaucoup de serveurs', 'is_correct' => false],
                            ['choice_text' => 'Elle utilise toujours la technologie la plus récente', 'is_correct' => false],
                            ['choice_text' => 'Elle ne nécessite aucune maintenance', 'is_correct' => false],
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