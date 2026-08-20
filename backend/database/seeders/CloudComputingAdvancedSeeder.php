<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CloudComputingAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cloud-computing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Cloud Advanced — Architecture et principes de conception',
                'description' => 'Évaluez votre capacité à concevoir des architectures cloud robustes, découplées, extensibles et adaptées aux contraintes métier.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une application critique doit supporter une panne complète d’une zone de disponibilité sans interruption majeure. Quelle architecture est la plus appropriée ?',
                        'explanation' => 'Une architecture multi-zone avec plusieurs instances actives et un mécanisme de distribution du trafic réduit le risque qu’une panne d’une zone provoque l’indisponibilité complète du service.',
                        'choices' => [
                            ['choice_text' => 'Une seule instance dans une seule zone', 'is_correct' => false],
                            ['choice_text' => 'Plusieurs instances réparties sur plusieurs zones avec un mécanisme de bascule', 'is_correct' => true],
                            ['choice_text' => 'Un stockage local sans réplication', 'is_correct' => false],
                            ['choice_text' => 'Un serveur unique avec davantage de CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe d’architecture réduit le plus fortement le couplage entre deux services distribués ?',
                        'explanation' => 'L’utilisation d’une file ou d’un bus d’événements permet de découpler temporellement les producteurs et consommateurs et réduit certaines dépendances directes.',
                        'choices' => [
                            ['choice_text' => 'Appels synchrones obligatoires pour chaque opération', 'is_correct' => false],
                            ['choice_text' => 'Communication asynchrone via une file ou un bus d’événements', 'is_correct' => true],
                            ['choice_text' => 'Partage d’une même base de données sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Utilisation d’un seul serveur physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque doit être évalué lorsqu’une architecture microservices multiplie fortement les dépendances réseau ?',
                        'explanation' => 'Plus le nombre de dépendances augmente, plus les pannes en cascade, la latence et la difficulté d’observabilité deviennent importantes.',
                        'choices' => [
                            ['choice_text' => 'La complexité des dépendances et les risques de pannes en cascade', 'is_correct' => true],
                            ['choice_text' => 'La suppression automatique de toutes les données', 'is_correct' => false],
                            ['choice_text' => 'La disparition du besoin de monitoring', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité d’utiliser des API', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut limiter la propagation d’une panne entre microservices ?',
                        'explanation' => 'Un circuit breaker détecte certains échecs répétés et peut temporairement empêcher des appels vers un service défaillant afin d’éviter une saturation en cascade.',
                        'choices' => [
                            ['choice_text' => 'Un circuit breaker', 'is_correct' => true],
                            ['choice_text' => 'Un stockage objet', 'is_correct' => false],
                            ['choice_text' => 'Un certificat TLS uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un simple tag de ressource', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle éviter autant que possible les single points of failure ?',
                        'explanation' => 'Un composant unique critique peut devenir la cause directe d’une panne globale. La redondance réduit ce risque.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un composant unique peut rendre tout le service indisponible', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un composant unique consomme toujours trop de stockage', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un composant redondant ne peut jamais tomber en panne', 'is_correct' => false],
                            ['choice_text' => 'Parce que la redondance supprime les coûts cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une architecture stateless pour une couche applicative ?',
                        'explanation' => 'Une couche stateless ne dépend pas d’un état local persistant entre requêtes, ce qui facilite la répartition et le remplacement des instances.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la mise à l’échelle et le remplacement des instances', 'is_correct' => true],
                            ['choice_text' => 'Empêcher la réplication des données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute base de données', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tous les contrôles de session', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi externaliser l’état de session dans un composant partagé peut-il faciliter le scaling horizontal ?',
                        'explanation' => 'Les requêtes peuvent alors être dirigées vers différentes instances sans dépendre d’un état conservé uniquement sur une instance spécifique.',
                        'choices' => [
                            ['choice_text' => 'Les requêtes peuvent être réparties entre plusieurs instances', 'is_correct' => true],
                            ['choice_text' => 'Les instances deviennent automatiquement sécurisées', 'is_correct' => false],
                            ['choice_text' => 'Le réseau devient inutile', 'is_correct' => false],
                            ['choice_text' => 'Les bases de données sont supprimées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel lors de la conception d’une architecture multi-région ?',
                        'explanation' => 'Une architecture multi-région doit définir la gestion des données, le routage, la réplication, la cohérence et les mécanismes de bascule.',
                        'choices' => [
                            ['choice_text' => 'Définir explicitement les stratégies de réplication, cohérence et bascule', 'is_correct' => true],
                            ['choice_text' => 'Supposer que toutes les ressources sont automatiquement synchronisées', 'is_correct' => false],
                            ['choice_text' => 'Désactiver tous les contrôles réseau', 'is_correct' => false],
                            ['choice_text' => 'Utiliser une seule région malgré l’objectif multi-région', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis est fréquent lorsqu’on augmente fortement la résilience d’une architecture cloud ?',
                        'explanation' => 'La redondance et la réplication augmentent généralement les coûts et la complexité opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Plus de résilience contre davantage de coûts et de complexité', 'is_correct' => true],
                            ['choice_text' => 'Moins de résilience et plus de simplicité', 'is_correct' => false],
                            ['choice_text' => 'Plus de disponibilité et zéro coût supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Moins de sécurité et moins d’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’une architecture cloud orientée services managés ?',
                        'explanation' => 'Les services managés permettent à l’organisation de déléguer certaines tâches d’infrastructure afin de se concentrer davantage sur ses applications et fonctions métier.',
                        'choices' => [
                            ['choice_text' => 'Réduire la charge opérationnelle sur les composants d’infrastructure', 'is_correct' => true],
                            ['choice_text' => 'Éliminer toutes les responsabilités de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute surveillance', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement zéro panne', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Sécurité et architecture Zero Trust',
                'description' => 'Approfondissez la sécurité cloud, le moindre privilège, la segmentation, la gestion des identités et Zero Trust.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une identité cloud compromise peut-elle être particulièrement dangereuse ?',
                        'explanation' => 'Les plateformes cloud sont largement contrôlées par les API et les permissions IAM. Une identité disposant de privilèges élevés peut donc affecter de nombreuses ressources.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut potentiellement contrôler de nombreuses ressources via les API cloud', 'is_correct' => true],
                            ['choice_text' => 'Parce que les comptes cloud ne peuvent jamais être révoqués', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les identités cloud sont administratrices', 'is_correct' => false],
                            ['choice_text' => 'Parce que les logs cloud sont toujours désactivés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider les permissions IAM d’un workload cloud ?',
                        'explanation' => 'Le workload doit disposer uniquement des permissions dont il a besoin pour remplir sa fonction.',
                        'choices' => [
                            ['choice_text' => 'Le moindre privilège', 'is_correct' => true],
                            ['choice_text' => 'Le privilège administrateur global', 'is_correct' => false],
                            ['choice_text' => 'L’accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'Le partage des rôles entre tous les services', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présentent des identifiants temporaires pour des workloads cloud ?',
                        'explanation' => 'Les identifiants temporaires réduisent la durée pendant laquelle un secret compromis peut être réutilisé.',
                        'choices' => [
                            ['choice_text' => 'Réduire la fenêtre d’exploitation d’un secret compromis', 'is_correct' => true],
                            ['choice_text' => 'Supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Donner automatiquement davantage de permissions', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les journaux IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle réduit le mieux les mouvements latéraux entre deux applications cloud ?',
                        'explanation' => 'Une combinaison de segmentation réseau et de politiques d’identité restrictives limite les communications et les permissions entre workloads.',
                        'choices' => [
                            ['choice_text' => 'Une segmentation fine associée à des politiques d’accès minimales', 'is_correct' => true],
                            ['choice_text' => 'Un réseau entièrement plat', 'is_correct' => false],
                            ['choice_text' => 'Un compte administrateur partagé', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une ressource privée ne doit-elle pas être considérée comme automatiquement sécurisée ?',
                        'explanation' => 'Une ressource privée peut toujours être accessible à une identité compromise ou à un autre workload mal configuré. Le contrôle d’accès reste nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une ressource privée peut toujours être atteinte par des identités ou services autorisés mais compromis', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une ressource privée est toujours exposée à Internet', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud ne permet pas de réseaux privés', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffrement ne fonctionne pas sur les ressources privées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique réduit le risque qu’une clé d’accès soit récupérée dans un dépôt de code ?',
                        'explanation' => 'Les secrets doivent être séparés du code, stockés dans un système de gestion approprié et soumis à une rotation.',
                        'choices' => [
                            ['choice_text' => 'Utiliser un gestionnaire de secrets séparé du code source', 'is_correct' => true],
                            ['choice_text' => 'Encoder la clé en Base64 avant de la committer', 'is_correct' => false],
                            ['choice_text' => 'Masquer la clé dans un commentaire', 'is_correct' => false],
                            ['choice_text' => 'Utiliser une clé commune pour tous les projets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il protéger fortement les comptes racine cloud ?',
                        'explanation' => 'Ils possèdent généralement un niveau de contrôle extrêmement élevé et leur compromission peut affecter l’ensemble de l’environnement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent avoir un contrôle extrêmement large sur l’environnement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils sont uniquement utilisés pour les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne possèdent aucune permission', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne peuvent jamais être protégés par MFA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une politique d’accès conditionnel ?',
                        'explanation' => 'L’accès conditionnel permet d’adapter l’autorisation selon des informations telles que l’identité, le terminal, la localisation ou le niveau de risque.',
                        'choices' => [
                            ['choice_text' => 'Adapter la décision d’accès au contexte de la demande', 'is_correct' => true],
                            ['choice_text' => 'Autoriser automatiquement tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les rôles IAM', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les journaux de connexion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’authentification multifacteur ne doit-elle pas remplacer le moindre privilège ?',
                        'explanation' => 'MFA protège l’authentification, mais un compte correctement authentifié peut encore disposer de permissions excessives.',
                        'choices' => [
                            ['choice_text' => 'Parce que MFA protège l’identité mais ne limite pas nécessairement ses permissions', 'is_correct' => true],
                            ['choice_text' => 'Parce que MFA désactive les comptes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le moindre privilège n’est utile qu’en réseau local', 'is_correct' => false],
                            ['choice_text' => 'Parce que MFA supprime automatiquement les rôles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être surveillé prioritairement dans une architecture cloud à forte dépendance IAM ?',
                        'explanation' => 'Les changements de privilèges, créations de clés, changements de policies et nouvelles identités peuvent modifier fortement la posture de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Les changements IAM sensibles et les nouvelles identités ou permissions', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la taille des instances', 'is_correct' => false],
                            ['choice_text' => 'La couleur des interfaces', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fichiers texte', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Data, stockage et bases de données',
                'description' => 'Analyse avancée des architectures de données, réplication, cohérence, chiffrement et résilience.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel compromis apparaît souvent entre cohérence forte et disponibilité dans un système distribué ?',
                        'explanation' => 'Une cohérence forte peut nécessiter davantage de coordination entre nœuds. Selon le système et les objectifs, cela peut augmenter la latence ou réduire certains choix de disponibilité.',
                        'choices' => [
                            ['choice_text' => 'Une cohérence forte peut nécessiter davantage de coordination entre les nœuds', 'is_correct' => true],
                            ['choice_text' => 'Une cohérence forte supprime tous les problèmes réseau', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'La réplication devient impossible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réplication asynchrone peut-elle entraîner une perte de données récente lors d’un incident ?',
                        'explanation' => 'Une réplication asynchrone peut présenter un retard entre la source et la copie. Une panne avant la propagation complète peut donc entraîner la perte des dernières écritures.',
                        'choices' => [
                            ['choice_text' => 'La copie peut avoir du retard par rapport à la source', 'is_correct' => true],
                            ['choice_text' => 'La réplication asynchrone ne copie jamais les données', 'is_correct' => false],
                            ['choice_text' => 'Elle chiffre les données différemment', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement les écritures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une base de données multi-zone ?',
                        'explanation' => 'La distribution des nœuds sur plusieurs zones peut protéger le service contre certaines pannes locales.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la résilience face à la panne d’une zone', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de corruption', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement toutes les latences', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde n’est-elle pas une protection suffisante contre une corruption logique si toutes les copies sont immédiatement synchronisées ?',
                        'explanation' => 'Une corruption ou suppression logique peut être propagée vers plusieurs copies synchronisées. Des versions historiques ou sauvegardes indépendantes permettent de revenir à un état antérieur.',
                        'choices' => [
                            ['choice_text' => 'La corruption peut se propager aux copies synchronisées', 'is_correct' => true],
                            ['choice_text' => 'La réplication empêche toujours les erreurs applicatives', 'is_correct' => false],
                            ['choice_text' => 'Une copie synchronisée est toujours indépendante', 'is_correct' => false],
                            ['choice_text' => 'Les données cloud ne peuvent pas être corrompues', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage principal d’un stockage objet versionné ?',
                        'explanation' => 'Le versioning permet de conserver plusieurs états d’un même objet et facilite la récupération après certaines suppressions ou modifications accidentelles.',
                        'choices' => [
                            ['choice_text' => 'Conserver plusieurs versions d’un objet', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toutes les écritures', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les anciennes versions', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les permissions IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les clés de chiffrement selon les environnements ?',
                        'explanation' => 'Partager une même clé entre développement et production augmente le rayon d’impact en cas de compromission.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une compromission d’un environnement', 'is_correct' => true],
                            ['choice_text' => 'Rendre la migration impossible', 'is_correct' => false],
                            ['choice_text' => 'Éviter la journalisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des clés de chiffrement gérées centralement ?',
                        'explanation' => 'La gestion centralisée facilite notamment les contrôles d’accès, la rotation, l’audit et le cycle de vie des clés.',
                        'choices' => [
                            ['choice_text' => 'Centraliser la gestion, les permissions, la rotation et l’audit des clés', 'is_correct' => true],
                            ['choice_text' => 'Rendre les clés publiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Éliminer la réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut poser une base de données fortement couplée à une seule région cloud ?',
                        'explanation' => 'Une panne régionale peut affecter le service entier si aucune stratégie de récupération ou réplication externe n’existe.',
                        'choices' => [
                            ['choice_text' => 'Une panne régionale peut rendre les données ou services indisponibles', 'is_correct' => true],
                            ['choice_text' => 'Les données deviennent automatiquement publiques', 'is_correct' => false],
                            ['choice_text' => 'La base ne peut plus être sauvegardée', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs deviennent administrateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe permet d’adapter la classe de stockage à la fréquence d’accès aux données ?',
                        'explanation' => 'Différentes classes de stockage sont destinées à différents profils d’accès et permettent de trouver un compromis entre coût, performance et disponibilité.',
                        'choices' => [
                            ['choice_text' => 'Le tiering du stockage', 'is_correct' => true],
                            ['choice_text' => 'La rotation des utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Le partage des comptes', 'is_correct' => false],
                            ['choice_text' => 'La suppression des métadonnées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données sensibles doivent-elles parfois utiliser une clé dédiée ?',
                        'explanation' => 'Une clé dédiée permet de séparer les domaines de confiance et de limiter l’impact d’une compromission de clé ou d’une erreur de politique.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter le rayon d’impact et mieux contrôler les accès', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données accessibles publiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout contrôle IAM', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Kubernetes, conteneurs et cloud-native',
                'description' => 'Évaluation avancée des architectures Kubernetes, sécurité des workloads, réseau et gestion des images.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi exécuter un conteneur avec des privilèges root inutiles augmente-t-il le risque ?',
                        'explanation' => 'Une compromission du processus peut donner davantage de possibilités d’action dans son environnement que si les privilèges avaient été réduits.',
                        'choices' => [
                            ['choice_text' => 'Une compromission peut bénéficier de privilèges excessifs', 'is_correct' => true],
                            ['choice_text' => 'Le conteneur devient automatiquement plus lent', 'is_correct' => false],
                            ['choice_text' => 'Kubernetes interdit les conteneurs root', 'is_correct' => false],
                            ['choice_text' => 'Les secrets sont automatiquement chiffrés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme Kubernetes limite les permissions des identités sur les ressources ?',
                        'explanation' => 'RBAC permet d’associer des permissions précises à des utilisateurs, groupes ou comptes de service.',
                        'choices' => [
                            ['choice_text' => 'RBAC', 'is_correct' => true],
                            ['choice_text' => 'ConfigMap', 'is_correct' => false],
                            ['choice_text' => 'Label', 'is_correct' => false],
                            ['choice_text' => 'Ingress uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’un service account Kubernetes possède des permissions administratives globales ?',
                        'explanation' => 'Si le pod utilisant ce service account est compromis, l’attaquant peut potentiellement utiliser les permissions associées pour manipuler de nombreuses ressources du cluster.',
                        'choices' => [
                            ['choice_text' => 'Une compromission du pod peut conduire à un contrôle étendu du cluster', 'is_correct' => true],
                            ['choice_text' => 'Le pod devient automatiquement plus résilient', 'is_correct' => false],
                            ['choice_text' => 'Le réseau est automatiquement isolé', 'is_correct' => false],
                            ['choice_text' => 'Les images deviennent immuables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle limite les flux réseau entre pods ?',
                        'explanation' => 'Les NetworkPolicies permettent de limiter les flux réseau en fonction des identités logiques des workloads.',
                        'choices' => [
                            ['choice_text' => 'NetworkPolicy', 'is_correct' => true],
                            ['choice_text' => 'ConfigMap', 'is_correct' => false],
                            ['choice_text' => 'Secret uniquement', 'is_correct' => false],
                            ['choice_text' => 'Dockerfile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les images doivent-elles être signées ou leur provenance vérifiée ?',
                        'explanation' => 'La vérification de provenance permet de réduire le risque de déployer une image non approuvée ou modifiée.',
                        'choices' => [
                            ['choice_text' => 'Vérifier l’origine et l’intégrité des images utilisées', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement leur performance', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les vulnérabilités du code', 'is_correct' => false],
                            ['choice_text' => 'Rendre les images publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal danger d’utiliser une image contenant de nombreuses bibliothèques inutiles ?',
                        'explanation' => 'Chaque composant supplémentaire augmente la surface logicielle susceptible de contenir une vulnérabilité.',
                        'choices' => [
                            ['choice_text' => 'Une surface d’attaque inutilement large', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure sécurité', 'is_correct' => false],
                            ['choice_text' => 'Une absence de logs', 'is_correct' => false],
                            ['choice_text' => 'Un chiffrement plus faible du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les images avant leur déploiement ?',
                        'explanation' => 'Le scan permet d’identifier des vulnérabilités connues et certains secrets ou mauvaises configurations avant la mise en production.',
                        'choices' => [
                            ['choice_text' => 'Détecter des composants vulnérables avant leur utilisation', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les bugs applicatifs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute migration', 'is_correct' => false],
                            ['choice_text' => 'Garantir une disponibilité de 100 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un namespace Kubernetes ?',
                        'explanation' => 'Les namespaces permettent de regrouper et d’isoler logiquement des ressources à l’intérieur d’un cluster.',
                        'choices' => [
                            ['choice_text' => 'Organiser et isoler logiquement des ressources dans le cluster', 'is_correct' => true],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer toutes les images', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les contrôles réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des resource limits dans Kubernetes ?',
                        'explanation' => 'Les limites évitent qu’un workload consomme une quantité excessive de CPU ou mémoire au détriment des autres workloads.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’un workload monopolise les ressources du cluster', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les permissions IAM', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’une application ne puisse jamais planter', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets Kubernetes doivent-ils être gérés avec prudence ?',
                        'explanation' => 'Les secrets peuvent contenir des mots de passe, tokens ou certificats sensibles et doivent être protégés par des permissions, un stockage approprié et éventuellement un chiffrement adapté.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent contenir des informations sensibles utilisées directement par les workloads', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils sont toujours publics', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils remplacent les images', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils n’ont aucune utilité opérationnelle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Serverless et systèmes distribués',
                'description' => 'Analysez les architectures événementielles, serverless, files d’attente, retries et cohérence distribuée.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une fonction serverless doit-elle être conçue pour être idempotente lorsque cela est possible ?',
                        'explanation' => 'Les systèmes distribués peuvent rejouer un message ou une invocation. Une fonction idempotente limite les effets indésirables des exécutions répétées.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter des effets incorrects lors d’invocations répétées', 'is_correct' => true],
                            ['choice_text' => 'Pour désactiver les retries', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les événements', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les fonctions publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer un retry agressif dans une architecture distribuée ?',
                        'explanation' => 'Des retries fréquents peuvent amplifier une panne existante et provoquer une surcharge en cascade.',
                        'choices' => [
                            ['choice_text' => 'Une amplification de la charge et une panne en cascade', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration garantie de la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des coûts', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des files', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue une dead-letter queue ?',
                        'explanation' => 'Elle reçoit généralement des messages qui n’ont pas pu être traités après plusieurs tentatives, permettant une investigation ou un retraitement ultérieur.',
                        'choices' => [
                            ['choice_text' => 'Conserver les messages qui échouent après les tentatives prévues', 'is_correct' => true],
                            ['choice_text' => 'Supprimer immédiatement tous les messages', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le load balancer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une file de messages peut-elle aider à absorber des pics de charge ?',
                        'explanation' => 'La file permet de découpler le rythme de production du rythme de traitement et de lisser temporairement les pics.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de mettre les messages en attente jusqu’à leur traitement', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime tous les besoins de stockage', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute panne', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le traitement toujours synchrone', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque augmente lorsqu’une architecture serverless utilise des dizaines de services indépendants ?',
                        'explanation' => 'La multiplication des services augmente les dépendances, la surface d’observabilité et la difficulté de comprendre les flux de bout en bout.',
                        'choices' => [
                            ['choice_text' => 'La complexité opérationnelle et les dépendances distribuées', 'is_correct' => true],
                            ['choice_text' => 'La suppression automatique de toutes les données', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité d’utiliser IAM', 'is_correct' => false],
                            ['choice_text' => 'La disparition de toute latence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme est utile pour éviter qu’un service défaillant ne reçoive continuellement de nouvelles requêtes ?',
                        'explanation' => 'Le circuit breaker peut temporairement couper les appels vers un service qui échoue afin de protéger les autres composants.',
                        'choices' => [
                            ['choice_text' => 'Circuit breaker', 'is_correct' => true],
                            ['choice_text' => 'Object Storage', 'is_correct' => false],
                            ['choice_text' => 'DNS statique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un simple tag', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture asynchrone peut-elle améliorer la résilience ?',
                        'explanation' => 'Les producteurs ne doivent pas nécessairement attendre la disponibilité immédiate du consommateur, ce qui réduit certaines dépendances temporelles.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit certaines dépendances temporelles entre les composants', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime le réseau', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toutes les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit automatiquement la cohérence forte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème faut-il traiter lorsqu’un système distribué peut délivrer un même message plusieurs fois ?',
                        'explanation' => 'Les consommateurs doivent être capables de gérer les doublons ou de dédupliquer les événements afin d’éviter plusieurs effets métier pour une même opération.',
                        'choices' => [
                            ['choice_text' => 'Le traitement des doublons et l’idempotence', 'is_correct' => true],
                            ['choice_text' => 'La suppression du stockage', 'is_correct' => false],
                            ['choice_text' => 'Le partage des comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Le changement de fournisseur DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il limiter les permissions d’une fonction serverless ?',
                        'explanation' => 'Une fonction compromise peut être utilisée pour exploiter les permissions de son rôle. Le moindre privilège réduit le rayon d’impact.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact potentiel d’une compromission de la fonction', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement ses performances', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute utilisation d’événements', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un workflow orchestrant plusieurs fonctions cloud ?',
                        'explanation' => 'Un orchestrateur permet de définir explicitement la séquence, les conditions, les erreurs et les reprises entre différentes étapes distribuées.',
                        'choices' => [
                            ['choice_text' => 'Coordonner plusieurs traitements avec une logique explicite d’exécution et de reprise', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les files de messages', 'is_correct' => false],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute journalisation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Observabilité, performance et opérations',
                'description' => 'Évaluez les pratiques avancées de monitoring, observabilité, performance, incidents et optimisation opérationnelle.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi corréler logs, métriques et traces dans une architecture distribuée ?',
                        'explanation' => 'Chaque signal apporte une perspective différente. Leur corrélation aide à comprendre à la fois les symptômes, les événements et le parcours des requêtes.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir une vision plus complète du comportement du système', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les événements', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal est particulièrement utile pour localiser un ralentissement dans plusieurs microservices ?',
                        'explanation' => 'Les traces distribuées permettent de suivre une requête et de voir quel service ou appel consomme le plus de temps.',
                        'choices' => [
                            ['choice_text' => 'Une trace distribuée', 'is_correct' => true],
                            ['choice_text' => 'Un nom de machine uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un tag de coût', 'is_correct' => false],
                            ['choice_text' => 'Une règle IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des SLO dans une architecture cloud ?',
                        'explanation' => 'Les Service Level Objectives définissent des objectifs mesurables de fiabilité ou performance permettant de guider les décisions opérationnelles.',
                        'choices' => [
                            ['choice_text' => 'Définir des objectifs mesurables de fiabilité ou performance', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les alertes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un error budget ?',
                        'explanation' => 'L’error budget représente la quantité d’indisponibilité ou d’erreur acceptable selon un SLO et peut aider à arbitrer entre vitesse de changement et fiabilité.',
                        'choices' => [
                            ['choice_text' => 'Quantifier la marge d’erreur acceptable selon un objectif de fiabilité', 'is_correct' => true],
                            ['choice_text' => 'Définir le budget financier total', 'is_correct' => false],
                            ['choice_text' => 'Définir le nombre de développeurs', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une alerte basée sur un seuil mal choisi ?',
                        'explanation' => 'Un seuil trop bas génère du bruit, tandis qu’un seuil trop élevé peut laisser passer des dégradations importantes.',
                        'choices' => [
                            ['choice_text' => 'Des faux positifs ou faux négatifs selon le seuil choisi', 'is_correct' => true],
                            ['choice_text' => 'La suppression automatique du stockage', 'is_correct' => false],
                            ['choice_text' => 'L’augmentation automatique de la sécurité', 'is_correct' => false],
                            ['choice_text' => 'La suppression des comptes cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les taux d’erreur en plus de la latence ?',
                        'explanation' => 'Une application peut rester rapide tout en échouant sur une partie importante des requêtes. Les deux indicateurs donnent donc des informations complémentaires.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une application peut être rapide tout en échouant fréquemment', 'is_correct' => true],
                            ['choice_text' => 'Parce que la latence est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les erreurs ne peuvent jamais être mesurées', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un mécanisme de canary deployment ?',
                        'explanation' => 'Le canary déploie une nouvelle version sur une petite partie du trafic afin d’observer son comportement avant généralisation.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’un déploiement global défectueux', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Rendre la nouvelle version publique pour tous immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rollback automatisé peut-il être utile lors d’un déploiement ?',
                        'explanation' => 'Il permet de revenir rapidement à une version stable lorsque certains critères de dégradation sont atteints.',
                        'choices' => [
                            ['choice_text' => 'Réduire le temps nécessaire pour revenir à une version stable', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tous les changements futurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs du déploiement', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue l’automatisation dans les opérations cloud à grande échelle ?',
                        'explanation' => 'L’automatisation réduit les actions manuelles répétitives et rend les opérations plus cohérentes et reproductibles.',
                        'choices' => [
                            ['choice_text' => 'Réduire les opérations manuelles répétitives et améliorer la cohérence', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la nécessité de contrôle', 'is_correct' => false],
                            ['choice_text' => 'Rendre les configurations impossibles à modifier', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les besoins d’observabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les runbooks sont-ils utiles dans une équipe cloud ?',
                        'explanation' => 'Les runbooks documentent des procédures reproductibles pour les opérations et incidents courants, réduisant la dépendance à une seule personne.',
                        'choices' => [
                            ['choice_text' => 'Standardiser les procédures opérationnelles et de réponse', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les opérations automatiques', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Migration et modernisation',
                'description' => 'Analysez les choix de migration, modernisation, dépendances, risques et stratégies de transformation cloud.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un inventaire des dépendances est-il essentiel avant une migration complexe ?',
                        'explanation' => 'Les applications dépendent souvent de bases de données, services réseau, systèmes d’identité et fournisseurs externes qui doivent être pris en compte pour éviter les interruptions.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les composants nécessaires au fonctionnement global de l’application', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre l’application automatiquement cloud-native', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage du replatforming par rapport au lift-and-shift ?',
                        'explanation' => 'Le replatforming permet certains ajustements vers des services cloud mieux adaptés sans nécessairement réécrire complètement l’application.',
                        'choices' => [
                            ['choice_text' => 'Bénéficier de certaines capacités cloud sans réécrire entièrement l’application', 'is_correct' => true],
                            ['choice_text' => 'Éliminer toutes les modifications', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les workloads serverless', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un lift-and-shift mal préparé ?',
                        'explanation' => 'Une migration sans optimisation peut transférer les inefficacités existantes et parfois augmenter les coûts ou conserver des dépendances inutiles.',
                        'choices' => [
                            ['choice_text' => 'Transférer les inefficacités existantes sans profiter des capacités cloud', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement les applications', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les systèmes sans état', 'is_correct' => false],
                            ['choice_text' => 'Désactiver le réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il établir des critères de succès pour une migration ?',
                        'explanation' => 'Les critères permettent d’évaluer objectivement la réussite en matière de performance, disponibilité, coût, sécurité et fonctionnalités.',
                        'choices' => [
                            ['choice_text' => 'Mesurer objectivement la réussite de la migration', 'is_correct' => true],
                            ['choice_text' => 'Éviter de surveiller la production', 'is_correct' => false],
                            ['choice_text' => 'Rendre le rollback impossible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être prévu avant une migration à fort impact ?',
                        'explanation' => 'Un plan de rollback permet de restaurer rapidement l’ancien environnement si la migration rencontre des problèmes critiques.',
                        'choices' => [
                            ['choice_text' => 'Un plan de retour à l’état précédent', 'is_correct' => true],
                            ['choice_text' => 'La suppression des anciennes données avant validation', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'La suppression des logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données constituent-elles souvent une partie critique d’une migration ?',
                        'explanation' => 'Les données peuvent avoir des contraintes de volume, compatibilité, cohérence, latence, confidentialité et reprise.',
                        'choices' => [
                            ['choice_text' => 'Elles doivent respecter des contraintes de cohérence, sécurité et disponibilité pendant le changement', 'is_correct' => true],
                            ['choice_text' => 'Elles ne nécessitent jamais de validation', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toujours faciles à déplacer', 'is_correct' => false],
                            ['choice_text' => 'Elles peuvent toujours être supprimées après migration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une migration progressive par vagues ?',
                        'explanation' => 'Les vagues permettent de limiter le rayon d’impact et d’apprendre d’un premier groupe avant les migrations suivantes.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque et capitaliser sur les résultats des premières migrations', 'is_correct' => true],
                            ['choice_text' => 'Garantir une migration instantanée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs d’utiliser le système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester les performances après migration ?',
                        'explanation' => 'Le comportement peut changer à cause de la latence réseau, du dimensionnement, du stockage ou de l’architecture cloud choisie.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que le nouveau environnement respecte les objectifs de performance', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Éviter l’observabilité', 'is_correct' => false],
                            ['choice_text' => 'Rendre les applications stateless automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut poser une forte dépendance à des services propriétaires pendant une migration future ?',
                        'explanation' => 'Les services propriétaires peuvent compliquer le transfert vers d’autres plateformes et rendre certaines applications difficiles à porter.',
                        'choices' => [
                            ['choice_text' => 'Une complexité et un coût de migration accrus', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure portabilité automatique', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des API', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une modernisation complète n’est-elle pas toujours préférable à une migration plus simple ?',
                        'explanation' => 'La modernisation peut apporter des bénéfices mais demande davantage de temps, de compétences, de tests et de changements. Le choix dépend des objectifs et des contraintes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut augmenter fortement la durée, le coût et le risque du projet', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle est toujours techniquement impossible', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle interdit le cloud', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle empêche toute amélioration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Gouvernance, coûts et optimisation',
                'description' => 'Évaluez les stratégies avancées de gouvernance, FinOps, optimisation et gestion du cycle de vie des ressources.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif d’une stratégie FinOps mature ?',
                        'explanation' => 'FinOps vise à rendre les décisions de consommation cloud visibles et responsables tout en optimisant la valeur obtenue.',
                        'choices' => [
                            ['choice_text' => 'Relier consommation, coût et valeur métier dans les décisions techniques', 'is_correct' => true],
                            ['choice_text' => 'Réduire les coûts à zéro', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les équipes de créer des ressources', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les services managés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût par unité métier peut-il être plus utile que le coût total cloud ?',
                        'explanation' => 'Un indicateur unitaire permet de relier les dépenses à la valeur produite, par exemple le coût par transaction ou par utilisateur.',
                        'choices' => [
                            ['choice_text' => 'Il permet de relier le coût à la valeur ou au volume produit', 'is_correct' => true],
                            ['choice_text' => 'Il élimine tous les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Il rend la facturation inutile', 'is_correct' => false],
                            ['choice_text' => 'Il remplace la gouvernance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un environnement cloud sans garde-fous de provisioning ?',
                        'explanation' => 'Des équipes peuvent créer des ressources surdimensionnées, non conformes ou oubliées, entraînant une dérive des coûts et de la complexité.',
                        'choices' => [
                            ['choice_text' => 'Une prolifération de ressources coûteuses et potentiellement non conformes', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Une diminution garantie des coûts', 'is_correct' => false],
                            ['choice_text' => 'Une suppression automatique des comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique d’arrêt automatique des environnements de développement peut-elle être utile ?',
                        'explanation' => 'Les environnements de développement sont souvent inutilisés pendant certaines périodes. Leur arrêt réduit les coûts sans affecter nécessairement la production.',
                        'choices' => [
                            ['choice_text' => 'Réduire les coûts liés aux ressources inutilisées hors des périodes de travail', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les contrôles de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Rendre la production indisponible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître avec un right-sizing basé uniquement sur les statistiques historiques ?',
                        'explanation' => 'Les données historiques peuvent ne pas refléter les futurs pics de charge ou les changements métier.',
                        'choices' => [
                            ['choice_text' => 'Sous-dimensionner une ressource si la demande future est plus élevée', 'is_correct' => true],
                            ['choice_text' => 'Garantir une disponibilité de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer optimisation des coûts et réduction brute des dépenses ?',
                        'explanation' => 'Réduire une ressource critique peut diminuer les coûts mais aussi dégrader la disponibilité ou la performance. L’optimisation cherche un meilleur compromis.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une réduction de coût peut dégrader la qualité ou la fiabilité du service', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts cloud sont toujours fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’optimisation signifie toujours augmenter les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il n’existe aucun lien entre performance et coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle de gouvernance peut empêcher la création de ressources dans une région non autorisée ?',
                        'choices' => [
                            ['choice_text' => Une policy préventive limitant les régions autorisées],
                            ['choice_text' => 'Un dashboard uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Un load balancer', 'is_correct' => false],
                        ],
                        'explanation' => 'Une policy préventive peut bloquer la création de ressources ne respectant pas les règles organisationnelles.'
                    ],
                    [
                        'question' => 'Pourquoi associer les ressources à un propriétaire est-il important ?',
                        'explanation' => 'Un propriétaire identifiable facilite les décisions de maintenance, de sécurité, de suppression et de maîtrise des coûts.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la responsabilité, la maintenance et le cycle de vie des ressources', 'is_correct' => true],
                            ['choice_text' => 'Rendre les ressources publiques', 'is_correct' => false],
                            ['choice_text' => 'Éviter les logs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut créer une prolifération de snapshots non gérés ?',
                        'explanation' => 'Les snapshots peuvent continuer à consommer du stockage et générer des coûts s’ils ne sont pas soumis à une politique de cycle de vie.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation progressive des coûts et de la complexité', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique des données', 'is_correct' => false],
                            ['choice_text' => 'Une sécurité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Une disponibilité nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une organisation doit-elle surveiller les coûts après une optimisation ?',
                        'explanation' => 'Une optimisation ponctuelle peut être annulée par de nouveaux workloads, changements de charge ou dérives de configuration.',
                        'choices' => [
                            ['choice_text' => 'Parce que les coûts et les usages continuent d’évoluer dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce que les prix cloud ne changent jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher l’élasticité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Résilience, disaster recovery et scénarios critiques',
                'description' => 'Analysez des scénarios complexes de continuité, reprise, pannes régionales, sauvegardes et récupération après incident.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une application critique exige un RTO de quelques minutes. Quelle approche est généralement plus adaptée qu’une sauvegarde classique seule ?',
                        'explanation' => 'Un RTO très court exige généralement une infrastructure de reprise déjà disponible ou rapidement activable, plutôt qu’une reconstruction complète à partir de zéro.',
                        'choices' => [
                            ['choice_text' => 'Une architecture redondante ou un mécanisme de reprise rapide déjà préparé', 'is_correct' => true],
                            ['choice_text' => 'Une sauvegarde hebdomadaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une copie manuelle sur un poste utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Aucun environnement de secours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réplication synchrone peut-elle être plus coûteuse ou plus complexe qu’une réplication asynchrone ?',
                        'explanation' => 'La réplication synchrone nécessite généralement une coordination plus stricte entre les copies avant validation des écritures.',
                        'choices' => [
                            ['choice_text' => 'Elle exige davantage de coordination entre les copies', 'is_correct' => true],
                            ['choice_text' => 'Elle ne copie aucune donnée', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut fonctionner qu’en local', 'is_correct' => false],
                            ['choice_text' => 'Elle désactive automatiquement les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un plan de disaster recovery jamais testé ?',
                        'explanation' => 'Des procédures non testées peuvent contenir des erreurs, des dépendances oubliées ou des temps de récupération incompatibles avec les objectifs.',
                        'choices' => [
                            ['choice_text' => 'Découvrir trop tard que le plan ou les dépendances ne fonctionnent pas', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement les coûts', 'is_correct' => false],
                            ['choice_text' => 'Améliorer la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Rendre les sauvegardes immuables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sauvegardes doivent-elles être isolées des identités de production ?',
                        'explanation' => 'Une compromission d’un compte de production ne devrait pas permettre automatiquement de supprimer ou modifier toutes les sauvegardes.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’une compromission de production détruise les sauvegardes', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la nécessité de sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Rendre les sauvegardes publiques', 'is_correct' => false],
                            ['choice_text' => 'Augmenter les privilèges de tous les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel scénario justifie particulièrement une stratégie multi-région ?',
                        'explanation' => 'Une exigence de continuité face à la perte complète d’une région peut nécessiter une capacité de reprise dans une autre région.',
                        'choices' => [
                            ['choice_text' => 'Une application critique qui doit rester disponible après une panne régionale majeure', 'is_correct' => true],
                            ['choice_text' => 'Une application locale de test sans exigence de disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Un script utilisé une fois par mois', 'is_correct' => false],
                            ['choice_text' => 'Une ressource temporaire non critique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie active-passive peut-elle être moins coûteuse qu’une stratégie active-active ?',
                        'explanation' => 'Dans une architecture active-passive, une partie de la capacité de secours peut rester inactive ou sous-utilisée jusqu’à une bascule, réduisant parfois les coûts courants.',
                        'choices' => [
                            ['choice_text' => 'Une partie de la capacité de secours peut être moins utilisée en temps normal', 'is_correct' => true],
                            ['choice_text' => 'Elle n’a jamais besoin de tests', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les objectifs RTO', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une disponibilité supérieure dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque majeur lors de la restauration d’un environnement après une cyberattaque ?',
                        'explanation' => 'Restaurer des systèmes compromis ou des sauvegardes contaminées peut réintroduire l’attaquant ou la vulnérabilité initiale.',
                        'choices' => [
                            ['choice_text' => 'Réintroduire la compromission dans l’environnement restauré', 'is_correct' => true],
                            ['choice_text' => 'Améliorer automatiquement la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les sauvegardes futures', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement les privilèges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir un ordre de reprise pour les services ?',
                        'explanation' => 'Les services ont souvent des dépendances. Restaurer les composants dans le mauvais ordre peut empêcher l’application globale de fonctionner.',
                        'choices' => [
                            ['choice_text' => 'Respecter les dépendances entre composants et accélérer la récupération', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout monitoring', 'is_correct' => false],
                            ['choice_text' => 'Rendre chaque service indépendant automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet de vérifier si une stratégie de reprise respecte son objectif ?',
                        'explanation' => 'Le temps réel de récupération doit être comparé au RTO, tandis que le niveau de données perdu doit être comparé au RPO.',
                        'choices' => [
                            ['choice_text' => 'Comparer les résultats réels aux objectifs RTO et RPO', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement le nombre de serveurs', 'is_correct' => false],
                            ['choice_text' => 'Compter les utilisateurs administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement le coût mensuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture très résiliente doit-elle également être observable ?',
                        'explanation' => 'Une infrastructure redondante peut continuer à fonctionner tout en accumulant des dégradations invisibles. L’observabilité permet d’identifier ces problèmes avant qu’ils n’affectent le service.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les dégradations avant qu’elles ne deviennent des pannes majeures', 'is_correct' => true],
                            ['choice_text' => 'Pour désactiver la redondance', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement toutes les ressources', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Advanced — Scénarios d’architecture et décisions techniques',
                'description' => 'Résolvez des scénarios avancés combinant sécurité, performance, coût, disponibilité et architecture cloud.',
                'difficulty' => 'Advanced',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une API connaît des pics très courts et imprévisibles de trafic. Quelle architecture peut être particulièrement adaptée ?',
                        'explanation' => 'Une architecture serverless ou élastique peut ajuster rapidement sa capacité à un trafic variable sans maintenir en permanence une capacité maximale.',
                        'choices' => [
                            ['choice_text' => 'Une capacité fixe dimensionnée très largement en permanence', 'is_correct' => false],
                            ['choice_text' => 'Une architecture élastique capable d’augmenter rapidement sa capacité', 'is_correct' => true],
                            ['choice_text' => 'Un serveur unique sans auto-scaling', 'is_correct' => false],
                            ['choice_text' => 'Une infrastructure sans monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise exige que les données restent dans une région géographique déterminée. Quel aspect doit être contrôlé prioritairement ?',
                        'explanation' => 'Les politiques de placement, réplication, sauvegarde et services utilisés doivent respecter les contraintes de localisation des données.',
                        'choices' => [
                            ['choice_text' => 'La localisation des ressources, sauvegardes et répliques', 'is_correct' => true],
                            ['choice_text' => 'La couleur des interfaces cloud', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de load balancers', 'is_correct' => false],
                            ['choice_text' => 'Le nom des machines uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application a besoin d’une base relationnelle mais l’équipe veut réduire la charge d’administration. Quel choix est le plus cohérent ?',
                        'explanation' => 'Une base de données relationnelle managée permet de conserver les fonctionnalités nécessaires tout en déléguant certaines tâches d’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Une base relationnelle managée', 'is_correct' => true],
                            ['choice_text' => 'Un fichier texte partagé', 'is_correct' => false],
                            ['choice_text' => 'Une base auto-administrée sans sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Un cache uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe choisit un service cloud propriétaire très spécialisé. Quel risque stratégique doit-elle documenter ?',
                        'explanation' => 'Une dépendance forte à une technologie propriétaire peut rendre une migration future plus difficile et coûteuse.',
                        'choices' => [
                            ['choice_text' => 'Le risque de dépendance fournisseur et de migration difficile', 'is_correct' => true],
                            ['choice_text' => 'La disparition automatique des données', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de support', 'is_correct' => false],
                            ['choice_text' => 'La suppression des API cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une charge de travail est extrêmement sensible aux latences inter-régions. Quelle décision doit être analysée ?',
                        'explanation' => 'Le placement géographique, les dépendances de données et les flux inter-régions peuvent fortement influencer la latence.',
                        'choices' => [
                            ['choice_text' => 'La proximité géographique entre les composants et les utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'La taille des noms DNS uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'La quantité de documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application doit pouvoir continuer à fonctionner si une dépendance externe devient indisponible temporairement. Quelle stratégie peut aider ?',
                        'explanation' => 'Le cache, la dégradation contrôlée, l’asynchronisme ou un mécanisme de fallback peuvent réduire la dépendance temps réel à un service externe.',
                        'choices' => [
                            ['choice_text' => 'Prévoir du cache, du fallback ou un traitement asynchrone selon le besoin', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les permissions IAM', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Forcer toutes les requêtes à rester synchrones', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise souhaite déployer rapidement mais conserver la possibilité de revenir facilement à la version précédente. Quelle pratique est particulièrement adaptée ?',
                        'explanation' => 'Les déploiements immuables, canary et blue-green facilitent les retours contrôlés vers une version stable.',
                        'choices' => [
                            ['choice_text' => 'Déploiement contrôlé avec version précédente conservée et mécanisme de rollback', 'is_correct' => true],
                            ['choice_text' => 'Modification manuelle directe des serveurs de production', 'is_correct' => false],
                            ['choice_text' => 'Suppression de l’ancienne version avant validation', 'is_correct' => false],
                            ['choice_text' => 'Déploiement sans monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un cloud landing zone est-il utile dans une grande organisation ?',
                        'explanation' => 'Une landing zone fournit une architecture de base avec réseaux, comptes, identités, logs et garde-fous permettant de déployer les workloads de manière cohérente.',
                        'choices' => [
                            ['choice_text' => 'Fournir une fondation standardisée pour les comptes, réseaux, sécurité et gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Rendre tous les workloads publics', 'is_correct' => false],
                            ['choice_text' => 'Éliminer IAM', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un environnement cloud sans séparation entre comptes ou projets ?',
                        'explanation' => 'La séparation logique limite les effets d’une erreur, d’une compromission ou d’un changement effectué dans un périmètre donné.',
                        'choices' => [
                            ['choice_text' => 'Un incident dans un environnement peut affecter beaucoup plus facilement les autres', 'is_correct' => true],
                            ['choice_text' => 'Les ressources deviennent automatiquement plus performantes', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement devient plus fort', 'is_correct' => false],
                            ['choice_text' => 'Les coûts deviennent toujours plus faibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être considéré avant de choisir entre une architecture synchrone et asynchrone ?',
                        'explanation' => 'Le choix dépend de la latence acceptable, du besoin de réponse immédiate, de la tolérance aux pannes et de la cohérence métier attendue.',
                        'choices' => [
                            ['choice_text' => 'Les exigences de latence, cohérence, disponibilité et gestion des erreurs', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre de serveurs', 'is_correct' => false],
                            ['choice_text' => 'La couleur du dashboard', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le prix du stockage', 'is_correct' => false],
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

                // Shuffle complete choice records to keep
                // the correct flag attached to its corresponding answer.
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