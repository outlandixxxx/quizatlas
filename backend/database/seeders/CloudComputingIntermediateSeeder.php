<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CloudComputingIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cloud-computing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Cloud Intermediate — Architecture et modèles de services',
                'description' => 'Approfondissez IaaS, PaaS, SaaS, architecture cloud et choix de services selon les besoins.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une équipe souhaite déployer une application sans administrer directement le système d’exploitation sous-jacent. Quel modèle est généralement le plus adapté ?',
                        'explanation' => 'PaaS permet au client de se concentrer davantage sur l’application tandis que le fournisseur gère une partie importante de la plateforme.',
                        'choices' => [
                            ['choice_text' => 'IaaS', 'is_correct' => false],
                            ['choice_text' => 'PaaS', 'is_correct' => true],
                            ['choice_text' => 'Serveur physique dédié autogéré', 'is_correct' => false],
                            ['choice_text' => 'Stockage objet uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une architecture SaaS, quelle responsabilité reste généralement du côté du client ?',
                        'explanation' => 'Le fournisseur gère l’application et l’infrastructure sous-jacente, mais le client reste notamment responsable de l’utilisation appropriée du service, des comptes et de certaines configurations.',
                        'choices' => [
                            ['choice_text' => 'Fabriquer les serveurs physiques', 'is_correct' => false],
                            ['choice_text' => 'Gérer les utilisateurs et les accès selon le service', 'is_correct' => true],
                            ['choice_text' => 'Administrer les disques physiques du fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les équipements réseau du datacenter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage principal offre une architecture composée de services cloud managés ?',
                        'explanation' => 'Les services managés réduisent la quantité d’infrastructure que l’équipe doit administrer directement et permettent de se concentrer davantage sur les besoins métier.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines tâches d’administration d’infrastructure', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les responsabilités de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tout besoin de surveillance', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement une disponibilité de 100 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut apparaître lorsqu’une application dépend fortement d’un service propriétaire d’un seul fournisseur cloud ?',
                        'explanation' => 'Une forte dépendance à un service propriétaire peut rendre une migration vers un autre environnement plus complexe et coûteuse.',
                        'choices' => [
                            ['choice_text' => 'Vendor lock-in', 'is_correct' => true],
                            ['choice_text' => 'Perte automatique de toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Suppression de toutes les API', 'is_correct' => false],
                            ['choice_text' => 'Impossibilité d’utiliser la haute disponibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une architecture découplée entre plusieurs services ?',
                        'explanation' => 'Le découplage limite les dépendances directes et peut permettre d’adapter, déployer ou faire évoluer certaines parties indépendamment.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines dépendances et faciliter l’évolution indépendante des composants', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence de panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les communications réseau', 'is_correct' => false],
                            ['choice_text' => 'Éviter tous les besoins de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel choix est généralement préférable pour une application qui subit de fortes variations de charge ?',
                        'explanation' => 'Une architecture élastique permet d’ajuster la capacité en fonction de la demande, ce qui est particulièrement utile pour les applications à trafic variable.',
                        'choices' => [
                            ['choice_text' => 'Une capacité fixe dimensionnée pour le pic maximal en permanence', 'is_correct' => false],
                            ['choice_text' => 'Une architecture capable d’adapter automatiquement sa capacité', 'is_correct' => true],
                            ['choice_text' => 'Un seul serveur sans mécanisme de scaling', 'is_correct' => false],
                            ['choice_text' => 'Une infrastructure sans monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt principal d’une architecture orientée événements dans le cloud ?',
                        'explanation' => 'Une architecture événementielle permet de déclencher des traitements en fonction d’événements et peut réduire certaines dépendances synchrones entre composants.',
                        'choices' => [
                            ['choice_text' => 'Déclencher des traitements en fonction d’événements', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout besoin de réseau', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun message ne sera perdu sans configuration supplémentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis existe lorsqu’une organisation choisit entre un service managé et une solution auto-administrée ?',
                        'explanation' => 'Un service managé réduit la charge d’administration mais peut offrir moins de contrôle détaillé. Une solution autogérée donne davantage de contrôle au prix d’une responsabilité opérationnelle supérieure.',
                        'choices' => [
                            ['choice_text' => 'Contrôle et personnalisation contre charge opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Coût contre absence totale de réseau', 'is_correct' => false],
                            ['choice_text' => 'Sécurité contre impossibilité de sauvegarder', 'is_correct' => false],
                            ['choice_text' => 'Stockage contre authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les environnements de développement et de production ?',
                        'explanation' => 'La séparation réduit les risques qu’une erreur, une mauvaise configuration ou une compromission dans un environnement de développement atteigne directement la production.',
                        'choices' => [
                            ['choice_text' => 'Limiter les effets des erreurs et compromissions entre environnements', 'is_correct' => true],
                            ['choice_text' => 'Partager plus facilement les comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles IAM', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d’une API cloud standardisée ?',
                        'explanation' => 'Les API permettent d’automatiser la gestion et l’intégration des ressources cloud au lieu de dépendre uniquement d’opérations manuelles.',
                        'choices' => [
                            ['choice_text' => 'Automatiser et intégrer la gestion des ressources', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les permissions', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout monitoring', 'is_correct' => false],
                            ['choice_text' => 'Rendre les ressources automatiquement publiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — Réseaux et connectivité',
                'description' => 'Analysez les réseaux virtuels, sous-réseaux, routage, connectivité privée et équilibrage de charge.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi placer une base de données dans un sous-réseau privé ?',
                        'explanation' => 'Un sous-réseau privé peut empêcher l’exposition directe de la base à Internet et permettre de limiter les flux entrants aux seuls services nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Limiter son exposition directe à Internet', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun utilisateur interne ne pourra y accéder', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme permet généralement à des machines virtuelles privées d’accéder à Internet sans leur attribuer directement une adresse publique ?',
                        'explanation' => 'La translation d’adresse réseau, souvent via un NAT gateway ou mécanisme équivalent, permet à des ressources privées d’initier certaines connexions sortantes.',
                        'choices' => [
                            ['choice_text' => 'NAT', 'is_correct' => true],
                            ['choice_text' => 'DNS uniquement', 'is_correct' => false],
                            ['choice_text' => 'RBAC', 'is_correct' => false],
                            ['choice_text' => 'Object Storage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage apporte un load balancer placé devant plusieurs instances ?',
                        'explanation' => 'Le load balancer distribue le trafic et peut retirer du pool les instances qui ne répondent plus correctement.',
                        'choices' => [
                            ['choice_text' => 'Répartir la charge et améliorer la disponibilité', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de vulnérabilités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des security groups ou règles de filtrage restrictives ?',
                        'explanation' => 'Les règles restrictives permettent de limiter les communications aux flux nécessaires et réduisent la surface d’attaque.',
                        'choices' => [
                            ['choice_text' => 'Limiter les communications aux flux nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Autoriser automatiquement tous les ports', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les logs réseau', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les ressources publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une table de routage dans un réseau cloud ?',
                        'explanation' => 'Une table de routage détermine où doivent être envoyés les paquets selon leur destination.',
                        'choices' => [
                            ['choice_text' => 'Déterminer le chemin des paquets selon leur destination', 'is_correct' => true],
                            ['choice_text' => 'Créer des utilisateurs cloud', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer automatiquement toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Détecter tous les malwares', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi établir une connectivité privée entre un datacenter local et un cloud peut-elle être utile ?',
                        'explanation' => 'Une connexion privée permet de relier les environnements avec un chemin contrôlé et adapté aux besoins de performance, sécurité ou conformité.',
                        'choices' => [
                            ['choice_text' => 'Relier les environnements via une connectivité contrôlée', 'is_correct' => true],
                            ['choice_text' => 'Rendre les bases de données publiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le routage', 'is_correct' => false],
                            ['choice_text' => 'Éliminer l’IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut survenir lorsqu’une architecture cloud utilise trop de règles réseau complexes ?',
                        'explanation' => 'Une quantité excessive de règles augmente le risque d’erreurs de configuration et rend le dépannage et l’audit plus difficiles.',
                        'choices' => [
                            ['choice_text' => 'Une complexité accrue et davantage de risques d’erreur', 'is_correct' => true],
                            ['choice_text' => 'Une disparition du trafic', 'is_correct' => false],
                            ['choice_text' => 'Une désactivation automatique de TLS', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation garantie de la disponibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’utiliser plusieurs zones de disponibilité pour une application ?',
                        'explanation' => 'La distribution sur plusieurs zones réduit le risque qu’une panne affectant une seule zone rende l’application entièrement indisponible.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact d’une panne d’une seule zone', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le besoin de load balancing', 'is_correct' => false],
                            ['choice_text' => 'Garantir une absence totale d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi contrôler le trafic sortant d’un serveur cloud peut-il être important ?',
                        'explanation' => 'Le filtrage egress peut limiter les communications d’une ressource compromise vers des infrastructures externes et réduire certains chemins d’exfiltration.',
                        'choices' => [
                            ['choice_text' => 'Limiter les communications sortantes inutiles ou malveillantes', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toutes les connexions internes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux', 'is_correct' => false],
                            ['choice_text' => 'Rendre le serveur automatiquement public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle peut jouer un DNS privé dans une architecture cloud ?',
                        'explanation' => 'Le DNS privé permet de résoudre des noms internes adaptés aux ressources privées et aux services internes.',
                        'choices' => [
                            ['choice_text' => 'Résoudre les noms des ressources internes ou privées', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les disques', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Gérer les rôles IAM', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — IAM et sécurité',
                'description' => 'Approfondissez les identités cloud, les rôles, le moindre privilège, MFA et la gestion des secrets.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser des rôles cloud temporaires plutôt que des clés d’accès permanentes lorsque cela est possible ?',
                        'explanation' => 'Les identifiants temporaires réduisent la durée pendant laquelle un secret compromis peut être exploité.',
                        'choices' => [
                            ['choice_text' => 'Réduire la fenêtre d’exploitation d’un identifiant compromis', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Donner davantage de permissions aux utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Éviter les journaux IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider la création d’une policy IAM ?',
                        'explanation' => 'Une policy doit accorder uniquement les actions et ressources nécessaires au fonctionnement du rôle ou du service.',
                        'choices' => [
                            ['choice_text' => 'Autoriser uniquement les actions et ressources nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Autoriser toutes les actions puis réduire plus tard', 'is_correct' => false],
                            ['choice_text' => 'Utiliser systématiquement les privilèges administrateur', 'is_correct' => false],
                            ['choice_text' => 'Partager une policy globale entre tous les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes racine ou super-administrateurs doivent-ils être fortement protégés ?',
                        'explanation' => 'Ces identités possèdent généralement des privilèges extrêmement élevés et leur compromission peut avoir un impact majeur sur l’environnement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une compromission peut donner un contrôle très étendu sur l’environnement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils ne peuvent jamais être utilisés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne possèdent aucune permission', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont toujours publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle est particulièrement recommandé pour les comptes administratifs cloud ?',
                        'explanation' => 'La MFA ajoute une protection indépendante du mot de passe pour les identités à forte criticité.',
                        'choices' => [
                            ['choice_text' => 'MFA', 'is_correct' => true],
                            ['choice_text' => 'Accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'Compte partagé', 'is_correct' => false],
                            ['choice_text' => 'Mot de passe public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’une application utilise une clé cloud ayant des droits administrateur complets ?',
                        'explanation' => 'Si cette clé est compromise, l’attaquant peut potentiellement effectuer des actions bien plus larges que nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Un compromis de la clé peut donner un accès beaucoup trop large', 'is_correct' => true],
                            ['choice_text' => 'La clé devient automatiquement invalide', 'is_correct' => false],
                            ['choice_text' => 'Le service devient nécessairement plus lent', 'is_correct' => false],
                            ['choice_text' => 'La clé empêche les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un secret manager cloud ?',
                        'explanation' => 'Un gestionnaire de secrets permet de stocker, distribuer et parfois renouveler les secrets avec des contrôles d’accès adaptés.',
                        'choices' => [
                            ['choice_text' => 'Protéger et gérer les secrets utilisés par les applications', 'is_correct' => true],
                            ['choice_text' => 'Créer des réseaux virtuels', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les load balancers', 'is_correct' => false],
                            ['choice_text' => 'Détecter toutes les vulnérabilités réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi désactiver un compte cloud inutilisé ?',
                        'explanation' => 'Un compte inutilisé mais actif constitue une identité potentiellement exploitable sans apporter de valeur opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Réduire la surface d’attaque liée aux identités inutilisées', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les permissions des autres comptes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les ressources cloud', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il journaliser les actions IAM sensibles ?',
                        'explanation' => 'Les changements IAM peuvent modifier fortement la posture de sécurité. Leur traçabilité facilite la détection des abus et les investigations.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter et investiguer les changements importants de permissions', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les politiques IAM', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver MFA', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les comptes anonymes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut résulter d’une policy IAM trop permissive ?',
                        'explanation' => 'Des permissions excessives augmentent le rayon d’impact d’une erreur ou d’une compromission.',
                        'choices' => [
                            ['choice_text' => 'Une erreur ou compromission peut affecter davantage de ressources', 'is_correct' => true],
                            ['choice_text' => 'Les ressources deviennent automatiquement privées', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement augmente automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les logs disparaissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il régulièrement revoir les permissions IAM ?',
                        'explanation' => 'Les besoins évoluent, et des permissions historiques peuvent devenir inutiles ou excessives.',
                        'choices' => [
                            ['choice_text' => 'Pour supprimer les privilèges devenus inutiles ou excessifs', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter systématiquement les droits', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les comptes actifs', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les permissions publiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — Stockage et données',
                'description' => 'Analysez les choix entre stockage objet, bloc et fichiers ainsi que les sauvegardes et politiques de cycle de vie.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel type de stockage est généralement le plus adapté à de grandes quantités d’objets indépendants comme des images ?',
                        'explanation' => 'Le stockage objet est conçu pour gérer de grands ensembles d’objets accessibles individuellement.',
                        'choices' => [
                            ['choice_text' => 'Stockage objet', 'is_correct' => true],
                            ['choice_text' => 'Stockage bloc uniquement', 'is_correct' => false],
                            ['choice_text' => 'RAM locale', 'is_correct' => false],
                            ['choice_text' => 'Cache CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel stockage est généralement présenté comme un volume utilisable par une machine virtuelle ?',
                        'explanation' => 'Le stockage bloc peut être attaché à une VM comme un disque virtuel.',
                        'choices' => [
                            ['choice_text' => 'Stockage bloc', 'is_correct' => true],
                            ['choice_text' => 'Stockage objet uniquement', 'is_correct' => false],
                            ['choice_text' => 'DNS', 'is_correct' => false],
                            ['choice_text' => 'Queue de messages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une politique de cycle de vie des objets ?',
                        'explanation' => 'Elle automatise des transitions entre classes de stockage ou des suppressions selon l’âge et les besoins métier.',
                        'choices' => [
                            ['choice_text' => 'Automatiser la conservation, le déplacement ou la suppression des objets', 'is_correct' => true],
                            ['choice_text' => 'Modifier le contenu des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Désactiver toutes les permissions', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi activer la versioning d’un stockage objet peut-il être utile ?',
                        'explanation' => 'Le versioning permet de conserver différentes versions d’un objet et peut aider à récupérer après une suppression ou modification accidentelle.',
                        'choices' => [
                            ['choice_text' => 'Récupérer certaines versions précédentes après une modification ou suppression', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute suppression dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer automatiquement les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Créer des machines virtuelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde seule ne constitue-t-elle pas toujours une stratégie de continuité complète ?',
                        'explanation' => 'Il faut aussi pouvoir restaurer les données, disposer d’une infrastructure de reprise et définir des objectifs RTO/RPO.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut également pouvoir restaurer et redémarrer les services dans des délais définis', 'is_correct' => true],
                            ['choice_text' => 'Parce que les sauvegardes ne peuvent jamais être utilisées', 'is_correct' => false],
                            ['choice_text' => 'Parce que la réplication est toujours suffisante', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud ne permet pas de restaurer des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif du chiffrement côté serveur pour un stockage cloud ?',
                        'explanation' => 'Le chiffrement côté serveur protège les données lorsqu’elles sont stockées sur l’infrastructure du fournisseur.',
                        'choices' => [
                            ['choice_text' => 'Protéger les données stockées au repos', 'is_correct' => true],
                            ['choice_text' => 'Protéger uniquement les données affichées à l’écran', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toutes les suppressions', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les autorisations IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’un stockage cloud dont la policy autorise un accès public involontaire ?',
                        'explanation' => 'Les données peuvent être accessibles à des utilisateurs non autorisés si les permissions publiques sont trop larges.',
                        'choices' => [
                            ['choice_text' => 'Une exposition involontaire des données', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique du coût', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration de la confidentialité', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de l’authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester périodiquement les restaurations ?',
                        'explanation' => 'Une sauvegarde peut exister tout en étant inutilisable ou incomplète. Les tests vérifient la restauration réelle et les procédures associées.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que les sauvegardes permettent réellement de récupérer les données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les sauvegardes anciennes', 'is_correct' => false],
                            ['choice_text' => 'Rendre les backups publics', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les contrôles d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un stockage géo-répliqué ?',
                        'explanation' => 'La réplication entre régions ou zones géographiques peut améliorer la résilience face à certains incidents régionaux.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact potentiel d’un incident affectant une zone géographique', 'is_correct' => true],
                            ['choice_text' => 'Éliminer toute latence réseau', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les données publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis peut exister entre plusieurs copies géographiques et le coût ?',
                        'explanation' => 'La réplication supplémentaire améliore généralement la résilience mais augmente le volume stocké et potentiellement les coûts de transfert.',
                        'choices' => [
                            ['choice_text' => 'Une meilleure résilience peut entraîner davantage de coûts de stockage et de transfert', 'is_correct' => true],
                            ['choice_text' => 'La réplication réduit toujours tous les coûts', 'is_correct' => false],
                            ['choice_text' => 'Les copies multiples empêchent les restaurations', 'is_correct' => false],
                            ['choice_text' => 'La réplication supprime automatiquement le chiffrement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — Conteneurs et orchestration',
                'description' => 'Découvrez les conteneurs, images, orchestration et principes de sécurité de base des environnements cloud-native.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle d’une image de conteneur ?',
                        'explanation' => 'L’image contient le système de fichiers et les éléments nécessaires pour exécuter une application dans un conteneur.',
                        'choices' => [
                            ['choice_text' => 'Fournir le contenu nécessaire à la création d’un conteneur', 'is_correct' => true],
                            ['choice_text' => 'Fournir uniquement une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le cluster entier', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il scanner les images de conteneurs ?',
                        'explanation' => 'Une image peut contenir des bibliothèques vulnérables, des secrets ou des composants inutiles.',
                        'choices' => [
                            ['choice_text' => 'Détecter des vulnérabilités et contenus sensibles avant le déploiement', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la taille des images', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins réseau', 'is_correct' => false],
                            ['choice_text' => 'Garantir une disponibilité de 100 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’un orchestrateur de conteneurs ?',
                        'explanation' => 'L’orchestrateur déploie, supervise et gère les conteneurs à grande échelle.',
                        'choices' => [
                            ['choice_text' => 'Automatiser le déploiement et la gestion de nombreux conteneurs', 'is_correct' => true],
                            ['choice_text' => 'Stocker uniquement les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Créer des câbles physiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un conteneur ne devrait-il pas utiliser plus de privilèges que nécessaire ?',
                        'explanation' => 'Des privilèges élevés peuvent augmenter l’impact potentiel d’une compromission du conteneur.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter les conséquences d’une compromission', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute surveillance', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les conteneurs publics', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas placer un secret permanent directement dans une image ?',
                        'explanation' => 'Les images peuvent être copiées, stockées et conservées dans des registres ; le secret peut donc rester exposé dans leurs couches.',
                        'choices' => [
                            ['choice_text' => 'Parce que le secret peut rester présent dans les couches ou copies de l’image', 'is_correct' => true],
                            ['choice_text' => 'Parce que les images ne peuvent contenir aucun fichier', 'is_correct' => false],
                            ['choice_text' => 'Parce que les conteneurs ne fonctionnent pas avec des secrets', 'is_correct' => false],
                            ['choice_text' => 'Parce que les secrets rendent le conteneur plus rapide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les labels ou métadonnées dans un orchestrateur de conteneurs ?',
                        'explanation' => 'Ils permettent d’identifier, sélectionner et organiser les workloads selon des propriétés définies.',
                        'choices' => [
                            ['choice_text' => 'Identifier et organiser les workloads selon des propriétés', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer automatiquement le réseau', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les permissions', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de définir des limites de ressources pour les conteneurs ?',
                        'explanation' => 'Les limites empêchent un workload de consommer de manière illimitée certaines ressources et peuvent protéger la stabilité du cluster.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’un workload consomme excessivement les ressources disponibles', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toutes les erreurs applicatives', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Rendre le cluster public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut limiter les communications entre workloads dans Kubernetes ?',
                        'explanation' => 'Les NetworkPolicies permettent de définir les flux réseau autorisés entre pods ou namespaces selon des politiques adaptées.',
                        'choices' => [
                            ['choice_text' => 'NetworkPolicy', 'is_correct' => true],
                            ['choice_text' => 'ConfigMap uniquement', 'is_correct' => false],
                            ['choice_text' => 'Dockerfile uniquement', 'is_correct' => false],
                            ['choice_text' => 'Tag Git', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une image de conteneur doit-elle être maintenue à jour ?',
                        'explanation' => 'Les images peuvent contenir des dépendances vulnérables qui restent présentes tant qu’elles ne sont pas remplacées ou mises à jour.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’exposition aux vulnérabilités connues des composants inclus', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les besoins d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le réseau', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’aucune nouvelle vulnérabilité n’apparaîtra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage principal apporte l’orchestration automatisée ?',
                        'explanation' => 'Elle permet de déployer, redémarrer, répartir et mettre à l’échelle les workloads de manière automatisée.',
                        'choices' => [
                            ['choice_text' => 'Automatiser le déploiement, la supervision et la mise à l’échelle des workloads', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les contrôles de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les conteneurs permanents', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les besoins de stockage', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — Serverless et architectures modernes',
                'description' => 'Approfondissez les architectures serverless, événements, API managées et traitements distribués.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est un avantage important du serverless ?',
                        'explanation' => 'Le client ne gère pas directement la majorité de l’infrastructure et peut laisser la plateforme gérer une partie de la capacité nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Réduire la gestion directe de l’infrastructure sous-jacente', 'is_correct' => true],
                            ['choice_text' => 'Rendre toutes les fonctions publiques', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence totale de coûts', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une fonction serverless typique ?',
                        'explanation' => 'Une fonction serverless exécute un fragment de code en réponse à une invocation ou à un événement.',
                        'choices' => [
                            ['choice_text' => 'Une fonction exécutée à la demande en réponse à une invocation ou un événement', 'is_correct' => true],
                            ['choice_text' => 'Un serveur physique géré manuellement', 'is_correct' => false],
                            ['choice_text' => 'Une base de données locale', 'is_correct' => false],
                            ['choice_text' => 'Un câble réseau logique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture événementielle peut-elle réduire certains couplages ?',
                        'explanation' => 'Les producteurs et consommateurs peuvent communiquer via des événements sans dépendre d’un appel synchrone direct dans chaque cas.',
                        'choices' => [
                            ['choice_text' => 'Parce que les composants peuvent communiquer via des événements plutôt que des appels directs', 'is_correct' => true],
                            ['choice_text' => 'Parce que les services n’échangent jamais de données', 'is_correct' => false],
                            ['choice_text' => 'Parce que le réseau devient inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les événements remplacent toujours les bases de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème doit-on considérer avec les systèmes serverless très distribués ?',
                        'explanation' => 'Une architecture distribuée peut augmenter la complexité de supervision, de débogage, des dépendances et de la gestion des erreurs.',
                        'choices' => [
                            ['choice_text' => 'La complexité accrue des dépendances et de l’observabilité', 'is_correct' => true],
                            ['choice_text' => 'L’absence totale d’exécution de code', 'is_correct' => false],
                            ['choice_text' => 'La disparition du besoin de logs', 'is_correct' => false],
                            ['choice_text' => 'La suppression du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un endpoint serverless doit-il toujours vérifier les permissions ?',
                        'explanation' => 'Le modèle serverless ne supprime pas les exigences d’authentification et d’autorisation. Une fonction exposée doit vérifier qui peut l’appeler et ce qu’elle peut faire.',
                        'choices' => [
                            ['choice_text' => 'Parce que la fonction peut toujours être invoquée par un acteur non autorisé si elle est mal protégée', 'is_correct' => true],
                            ['choice_text' => 'Parce que serverless interdit les API', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fonctions sont toujours publiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que TLS supprime automatiquement les autorisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un service de queue dans une architecture cloud ?',
                        'explanation' => 'Une queue permet de mettre en attente des messages et de découpler certaines étapes de traitement entre producteurs et consommateurs.',
                        'choices' => [
                            ['choice_text' => 'Découpler la production et le traitement des messages', 'is_correct' => true],
                            ['choice_text' => 'Stocker uniquement les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les load balancers dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute erreur applicative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les fonctions serverless doivent-elles avoir des rôles IAM limités ?',
                        'explanation' => 'Si une fonction est compromise, ses permissions IAM déterminent en partie les ressources que l’attaquant pourrait atteindre.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter l’impact potentiel d’une compromission de la fonction', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre la fonction publique', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher tout événement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut survenir si plusieurs fonctions serverless partagent le même rôle très permissif ?',
                        'explanation' => 'La compromission d’une fonction peut alors ouvrir l’accès aux mêmes ressources que les autres fonctions, augmentant le rayon d’impact.',
                        'choices' => [
                            ['choice_text' => 'Une compromission d’une fonction peut affecter des ressources non nécessaires aux autres fonctions', 'is_correct' => true],
                            ['choice_text' => 'Les fonctions deviennent automatiquement plus performantes', 'is_correct' => false],
                            ['choice_text' => 'Les logs sont supprimés', 'is_correct' => false],
                            ['choice_text' => 'Les événements cessent de fonctionner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les retries doivent-ils être conçus avec prudence dans une architecture distribuée ?',
                        'explanation' => 'Des retries non contrôlés peuvent amplifier les charges, créer des doublons ou provoquer des cascades de requêtes.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent provoquer des doublons ou amplifier une charge déjà importante', 'is_correct' => true],
                            ['choice_text' => 'Ils rendent toujours les systèmes plus sécurisés', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment les files d’attente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de rendre certaines opérations distribuées idempotentes ?',
                        'explanation' => 'Une opération idempotente peut être exécutée plusieurs fois sans produire un résultat incorrect supplémentaire, ce qui facilite la gestion des retries.',
                        'choices' => [
                            ['choice_text' => 'Limiter les effets négatifs d’exécutions répétées', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les permissions', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — Monitoring et observabilité',
                'description' => 'Comprenez les métriques, logs, traces et pratiques de supervision des environnements cloud.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle différence existe entre métrique et log ?',
                        'explanation' => 'Une métrique représente généralement une mesure numérique agrégée alors qu’un log contient des événements ou informations détaillées.',
                        'choices' => [
                            ['choice_text' => 'Une métrique est généralement une valeur mesurée ; un log décrit des événements', 'is_correct' => true],
                            ['choice_text' => 'Ils sont exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'Un log ne contient jamais d’horodatage', 'is_correct' => false],
                            ['choice_text' => 'Une métrique ne peut jamais être représentée graphiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une trace distribuée ?',
                        'explanation' => 'Une trace distribuée permet de suivre le parcours d’une requête à travers plusieurs services.',
                        'choices' => [
                            ['choice_text' => 'Suivre une requête à travers plusieurs services', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les règles IAM', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer les bases de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi centraliser les logs cloud ?',
                        'explanation' => 'La centralisation permet une recherche et une corrélation plus efficaces entre plusieurs ressources et services.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la corrélation et l’analyse des événements provenant de plusieurs ressources', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les logs locaux automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les audits', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les logs publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut signaler une dégradation d’une application ?',
                        'explanation' => 'Une hausse anormale de la latence ou du taux d’erreur peut indiquer une dégradation du service.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation inhabituelle de la latence ou du taux d’erreur', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du nombre de dashboards', 'is_correct' => false],
                            ['choice_text' => 'Une modification du logo', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du nombre de commentaires dans le code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des alertes avec des seuils appropriés ?',
                        'explanation' => 'Des seuils bien choisis aident à détecter les conditions réellement problématiques tout en évitant trop de faux positifs.',
                        'choices' => [
                            ['choice_text' => 'Détecter les situations anormales sans générer un volume excessif de faux positifs', 'is_correct' => true],
                            ['choice_text' => 'Créer autant d’alertes que possible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute mise à l’échelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est l’utilité d’un health check ?',
                        'explanation' => 'Un health check vérifie qu’une instance ou un service fonctionne correctement et peut être utilisé par un load balancer ou un système de supervision.',
                        'choices' => [
                            ['choice_text' => 'Vérifier l’état de fonctionnement d’un service ou d’une instance', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement un compte administrateur', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer le stockage', 'is_correct' => false],
                            ['choice_text' => 'Modifier les permissions IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des logs avec un horodatage fiable ?',
                        'explanation' => 'Des horodatages cohérents permettent de comprendre la séquence d’événements et de corréler les actions.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la reconstruction chronologique des événements', 'is_correct' => true],
                            ['choice_text' => 'Rendre les logs automatiquement chiffrés', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs de se connecter', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un environnement génère trop de logs inutiles ?',
                        'explanation' => 'Trop de données sans valeur augmente les coûts et rend l’analyse plus difficile.',
                        'choices' => [
                            ['choice_text' => 'Plus de coûts et de bruit analytique', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure sécurité garantie', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des incidents', 'is_correct' => false],
                            ['choice_text' => 'La suppression de tous les événements utiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les changements de configuration cloud ?',
                        'explanation' => 'Une modification de configuration peut provoquer une panne, augmenter les coûts ou créer une exposition de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un changement peut affecter sécurité, disponibilité ou coût', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une configuration n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les audits', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les services publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une stratégie d’observabilité ?',
                        'explanation' => 'L’observabilité vise à comprendre l’état interne d’un système à partir des signaux produits par celui-ci.',
                        'choices' => [
                            ['choice_text' => 'Comprendre le comportement d’un système à partir de ses signaux et événements', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute panne', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — Coûts, migration et gouvernance',
                'description' => 'Évaluez les principes de FinOps, migration cloud, gouvernance et optimisation des ressources.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de FinOps ?',
                        'explanation' => 'FinOps vise à rapprocher les décisions techniques et financières afin d’utiliser les ressources cloud de manière efficace et maîtrisée.',
                        'choices' => [
                            ['choice_text' => 'Optimiser les coûts cloud tout en conservant la valeur métier attendue', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les services cloud', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute surveillance des ressources', 'is_correct' => false],
                            ['choice_text' => 'Rendre les services gratuits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ressources inutilisées doivent-elles être identifiées ?',
                        'explanation' => 'Des ressources inutilisées peuvent continuer à coûter de l’argent et compliquer la gestion de l’environnement.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les coûts et limiter les ressources inutiles', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher la haute disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt du tagging cloud ?',
                        'explanation' => 'Les tags permettent notamment de suivre les ressources par projet, environnement, équipe ou centre de coût.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’organisation, le suivi des coûts et la gouvernance des ressources', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les ressources', 'is_correct' => false],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                            ['choice_text' => 'Créer des sauvegardes automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque d’une migration cloud réalisée sans inventaire préalable ?',
                        'explanation' => 'Sans inventaire, l’organisation peut oublier des dépendances, des applications ou des données critiques.',
                        'choices' => [
                            ['choice_text' => 'Oublier des dépendances ou ressources nécessaires au fonctionnement', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement les coûts', 'is_correct' => false],
                            ['choice_text' => 'Améliorer automatiquement la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Garantir la portabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une stratégie lift-and-shift ?',
                        'explanation' => 'Lift-and-shift consiste généralement à déplacer une application vers le cloud avec peu de modifications architecturales initiales.',
                        'choices' => [
                            ['choice_text' => 'Migrer une charge de travail avec peu de modifications initiales', 'is_correct' => true],
                            ['choice_text' => 'Réécrire entièrement l’application avant toute migration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données avant migration', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le cloud par du matériel local', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage peut apporter le right-sizing ?',
                        'explanation' => 'Le right-sizing consiste à ajuster les ressources aux besoins réels afin d’éviter de payer pour une capacité inutile.',
                        'choices' => [
                            ['choice_text' => 'Réduire les ressources surdimensionnées', 'is_correct' => true],
                            ['choice_text' => 'Augmenter systématiquement toutes les instances', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la surveillance', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir une gouvernance cloud ?',
                        'explanation' => 'La gouvernance fournit des règles communes pour gérer les ressources, la sécurité, les coûts et la conformité.',
                        'choices' => [
                            ['choice_text' => 'Définir des règles cohérentes pour l’utilisation et la gestion du cloud', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les permissions', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les ressources publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut poser la création libre de ressources par toutes les équipes ?',
                        'explanation' => 'Sans garde-fous, une organisation peut accumuler des ressources inutiles, des configurations non conformes et des coûts difficiles à attribuer.',
                        'choices' => [
                            ['choice_text' => 'Une dérive des coûts et une perte de contrôle de la gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la conformité', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des risques', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure segmentation garantie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester une migration avant le basculement final ?',
                        'explanation' => 'Les tests permettent d’identifier les incompatibilités, problèmes de performance, dépendances oubliées et erreurs de configuration.',
                        'choices' => [
                            ['choice_text' => 'Identifier les problèmes avant le basculement de production', 'is_correct' => true],
                            ['choice_text' => 'Rendre la migration irréversible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                            ['choice_text' => 'Désactiver la supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il associer les coûts cloud à des équipes ou projets ?',
                        'explanation' => 'Une attribution claire facilite la responsabilisation et permet d’identifier les sources de consommation.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre qui consomme les ressources et améliorer la maîtrise des coûts', 'is_correct' => true],
                            ['choice_text' => 'Pour désactiver les identités', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les coûts publics', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — Disponibilité et reprise',
                'description' => 'Approfondissez la haute disponibilité, sauvegarde, réplication, RTO/RPO et disaster recovery.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement le RTO ?',
                        'explanation' => 'Le RTO définit le délai cible dans lequel un service doit être restauré après une interruption.',
                        'choices' => [
                            ['choice_text' => 'Le délai cible de récupération d’un service', 'is_correct' => true],
                            ['choice_text' => 'La quantité maximale de données perdues', 'is_correct' => false],
                            ['choice_text' => 'La durée maximale d’un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de serveurs disponibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement le RPO ?',
                        'explanation' => 'Le RPO définit le point de récupération acceptable ou la quantité de données que l’organisation accepte de perdre.',
                        'choices' => [
                            ['choice_text' => 'La quantité maximale de données que l’organisation accepte de perdre', 'is_correct' => true],
                            ['choice_text' => 'Le délai de réponse d’une API', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'La durée de validité d’un certificat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des sauvegardes immuables sont-elles intéressantes contre les ransomwares ?',
                        'explanation' => 'L’immutabilité réduit la capacité d’un attaquant à modifier ou supprimer les copies pendant la période protégée.',
                        'choices' => [
                            ['choice_text' => 'Elles réduisent le risque que les sauvegardes soient modifiées ou supprimées', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent les systèmes de production invulnérables', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent EDR', 'is_correct' => false],
                            ['choice_text' => 'Elles désactivent les comptes utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester régulièrement le plan de disaster recovery ?',
                        'explanation' => 'Un plan non testé peut contenir des erreurs ou des hypothèses incorrectes. Les exercices permettent de vérifier les procédures et dépendances.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les procédures et dépendances fonctionnent réellement', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les changements', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une stratégie multi-région ?',
                        'explanation' => 'Répartir les services sur plusieurs régions peut réduire l’impact de certaines pannes régionales.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la résilience face à certains incidents régionaux', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute latence', 'is_correct' => false],
                            ['choice_text' => 'Rendre les services automatiquement gratuits', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute sauvegarde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture active-active peut-elle améliorer la disponibilité ?',
                        'explanation' => 'Plusieurs instances actives peuvent traiter du trafic en même temps et continuer à fournir le service si une partie de l’infrastructure devient indisponible.',
                        'choices' => [
                            ['choice_text' => 'Plusieurs instances actives peuvent continuer à servir les utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toutes les erreurs applicatives', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les sauvegardes inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe si les sauvegardes utilisent les mêmes identifiants administratifs que la production ?',
                        'explanation' => 'Un attaquant ayant compromis les identifiants de production peut potentiellement accéder également aux sauvegardes.',
                        'choices' => [
                            ['choice_text' => 'Une compromission de production peut donner accès aux sauvegardes', 'is_correct' => true],
                            ['choice_text' => 'Les sauvegardes deviennent automatiquement immuables', 'is_correct' => false],
                            ['choice_text' => 'Le RPO devient nul', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité augmente nécessairement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il identifier les dépendances avant une reprise ?',
                        'explanation' => 'Un service peut dépendre d’une base de données, d’un DNS, d’une API ou d’un fournisseur externe. Restaurer le service principal sans ses dépendances peut donc être inutile.',
                        'choices' => [
                            ['choice_text' => 'Pour restaurer les composants dans un ordre cohérent', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les services indépendants automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être vérifié après une restauration cloud ?',
                        'explanation' => 'Après récupération, il faut vérifier le fonctionnement, l’intégrité des données et l’absence de configurations compromettantes.',
                        'choices' => [
                            ['choice_text' => 'L’intégrité, le fonctionnement et la posture de sécurité des ressources restaurées', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur des interfaces', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre d’utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'La suppression des logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une seule copie de sauvegarde est-elle risquée ?',
                        'explanation' => 'Une copie unique représente un point de défaillance unique. Plusieurs copies protégées et idéalement séparées augmentent la résilience.',
                        'choices' => [
                            ['choice_text' => 'La perte de cette copie peut entraîner la perte de la capacité de récupération', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une disponibilité supérieure', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les coûts', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours plus sécurisée qu’une stratégie redondante', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Intermediate — Gouvernance et opérations',
                'description' => 'Apprenez à gérer les politiques cloud, standards, changements, coûts et opérations quotidiennes.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif d’une politique cloud organisationnelle ?',
                        'explanation' => 'Elle définit les règles communes auxquelles les ressources et équipes doivent se conformer.',
                        'choices' => [
                            ['choice_text' => 'Définir des règles communes pour l’utilisation et la sécurisation du cloud', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer IAM', 'is_correct' => false],
                            ['choice_text' => 'Rendre les ressources publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des templates d’infrastructure standardisés ?',
                        'explanation' => 'Des templates cohérents permettent de réduire les écarts de configuration et d’améliorer la reproductibilité.',
                        'choices' => [
                            ['choice_text' => 'Réduire les différences de configuration et améliorer la reproductibilité', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les contrôles de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les services utilisent les mêmes ressources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un contrôle préventif de gouvernance cloud ?',
                        'explanation' => 'Un contrôle préventif bloque ou empêche une configuration non conforme avant ou pendant sa création.',
                        'choices' => [
                            ['choice_text' => 'Une politique qui empêche la création de ressources non conformes', 'is_correct' => true],
                            ['choice_text' => 'Un rapport généré après l’incident uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une suppression manuelle des logs', 'is_correct' => false],
                            ['choice_text' => 'Un test de performance sans règle de conformité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les responsabilités entre développeurs et administrateurs de production ?',
                        'explanation' => 'La séparation réduit les risques qu’une même identité puisse développer, approuver et déployer directement des changements critiques sans contrôle.',
                        'choices' => [
                            ['choice_text' => 'Limiter les risques liés aux changements non contrôlés et aux privilèges excessifs', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute collaboration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les revues de code', 'is_correct' => false],
                            ['choice_text' => 'Donner plus de privilèges à chaque utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des environnements séparés pour développement, test et production ?',
                        'explanation' => 'La séparation permet notamment de limiter les accès et d’éviter qu’un changement ou une erreur de développement n’affecte directement la production.',
                        'choices' => [
                            ['choice_text' => 'Réduire les risques de propagation des erreurs et compromissions', 'is_correct' => true],
                            ['choice_text' => 'Partager les secrets entre tous les environnements', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les politiques IAM', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une revue de configuration périodique ?',
                        'explanation' => 'Les configurations peuvent dériver avec le temps. Une revue permet d’identifier les écarts et les ressources qui ne respectent plus les standards.',
                        'choices' => [
                            ['choice_text' => 'Détecter la dérive de configuration et les écarts aux standards', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement les ressources', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute mise à jour', 'is_correct' => false],
                            ['choice_text' => 'Rendre le cloud privé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des conventions de nommage pour les ressources cloud ?',
                        'explanation' => 'Des noms cohérents facilitent l’inventaire, l’administration, le troubleshooting et l’identification des ressources.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’identification et la gestion des ressources', 'is_correct' => true],
                            ['choice_text' => 'Améliorer automatiquement le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer IAM', 'is_correct' => false],
                            ['choice_text' => 'Empêcher la réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une procédure de changement cloud ?',
                        'explanation' => 'Une procédure de changement permet d’évaluer, approuver, déployer et éventuellement revenir en arrière lorsqu’une modification comporte un risque.',
                        'choices' => [
                            ['choice_text' => 'Contrôler les modifications importantes et réduire les risques opérationnels', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un plan de rollback est-il utile lors d’un changement cloud risqué ?',
                        'explanation' => 'Le rollback permet de revenir à un état connu lorsque la nouvelle configuration provoque un problème.',
                        'choices' => [
                            ['choice_text' => 'Permettre un retour contrôlé à un état précédent', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests avant déploiement', 'is_correct' => false],
                            ['choice_text' => 'Rendre les changements permanents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur principe pour gérer les ressources cloud créées temporairement ?',
                        'explanation' => 'Les ressources temporaires doivent avoir un propriétaire et une durée de vie identifiable afin d’éviter qu’elles deviennent permanentes sans justification.',
                        'choices' => [
                            ['choice_text' => 'Définir leur propriétaire, leur usage et leur date de suppression prévue', 'is_correct' => true],
                            ['choice_text' => 'Les conserver indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'Les rendre publiques', 'is_correct' => false],
                            ['choice_text' => 'Désactiver leur monitoring', 'is_correct' => false],
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

                // Keep the correct flag attached to the complete choice record.
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