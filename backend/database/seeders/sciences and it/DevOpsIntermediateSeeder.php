<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DevOpsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'devops')->firstOrFail();

        $quizzes = [
            [
                'title' => 'DevOps Intermediate — CI/CD Pipelines',
                'description' => 'Approfondissez la conception, l’exécution et la fiabilité des pipelines CI/CD.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un pipeline CI doit-il exécuter les tests automatiquement après un changement de code ?',
                        'explanation' => 'Les tests automatiques donnent un retour rapide et permettent d’identifier les régressions avant la promotion du changement.',
                        'choices' => [
                            ['choice_text' => 'Détecter rapidement les régressions avant la promotion du changement', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le logiciel ne contiendra jamais aucun bug', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le contrôle de version', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute revue de code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les étapes build, test et deploy dans un pipeline ?',
                        'explanation' => 'La séparation rend le pipeline plus lisible, testable et contrôlable.',
                        'choices' => [
                            ['choice_text' => 'Pour faciliter le contrôle, le diagnostic et la réutilisation des étapes', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les étapes de communiquer', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les artefacts', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de publier un artefact immuable après le build ?',
                        'explanation' => 'Un artefact immuable permet de promouvoir exactement ce qui a été testé sans le reconstruire différemment.',
                        'choices' => [
                            ['choice_text' => 'Promouvoir exactement le même résultat entre les environnements', 'is_correct' => true],
                            ['choice_text' => 'Modifier automatiquement le code à chaque déploiement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests précédents', 'is_correct' => false],
                            ['choice_text' => 'Éviter le versioning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pipelines doivent-ils échouer sur une étape critique en erreur ?',
                        'explanation' => 'Une étape critique en échec doit généralement empêcher la promotion d’un changement potentiellement incorrect.',
                        'choices' => [
                            ['choice_text' => 'Empêcher la promotion d’un changement qui ne respecte pas les critères', 'is_correct' => true],
                            ['choice_text' => 'Augmenter artificiellement le nombre d’échecs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les développeurs de travailler', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un quality gate dans un pipeline ?',
                        'explanation' => 'Un quality gate bloque une promotion lorsque des critères prédéfinis ne sont pas satisfaits.',
                        'choices' => [
                            ['choice_text' => 'Autoriser ou bloquer une étape selon des critères définis', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets CI/CD doivent-ils être injectés au moment de l’exécution plutôt que stockés dans le code ?',
                        'explanation' => 'Les secrets intégrés au code peuvent être exposés via les dépôts et leur historique.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’exposition des secrets dans le code et l’historique', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les variables d’environnement', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les pipelines publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des pipelines différents pour les branches de développement et de production ?',
                        'explanation' => 'Les exigences de validation et de déploiement diffèrent généralement selon le niveau de criticité.',
                        'choices' => [
                            ['choice_text' => 'Adapter les contrôles et protections au niveau de criticité de chaque environnement', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute intégration continue', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests sur la production', 'is_correct' => false],
                            ['choice_text' => 'Donner les mêmes privilèges partout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déploiement progressif réduit-il le risque ?',
                        'explanation' => 'Limiter initialement le nombre d’utilisateurs ou d’instances exposés permet de détecter une régression avant généralisation.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’un problème avant le déploiement généralisé', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’il n’y aura aucun incident', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests automatisés', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout rollback', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pipeline doit-il conserver des logs détaillés des étapes importantes ?',
                        'explanation' => 'Les logs permettent de diagnostiquer les erreurs et de comprendre ce qui s’est produit pendant l’exécution.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le diagnostic des échecs et la traçabilité des exécutions', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les tests', 'is_correct' => false],
                            ['choice_text' => 'Garantir une disponibilité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le versioning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner la définition du pipeline elle-même ?',
                        'explanation' => 'La version du pipeline fait partie du processus de livraison et doit être traçable et reproductible.',
                        'choices' => [
                            ['choice_text' => 'Pour suivre et reproduire les changements du processus de livraison', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification du pipeline', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les artefacts', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Docker avancé',
                'description' => 'Approfondissez les images, réseaux, volumes, sécurité et bonnes pratiques Docker.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser des images Docker minimales ?',
                        'explanation' => 'Une image plus petite réduit la surface d’attaque potentielle, le temps de transfert et certains coûts de stockage.',
                        'choices' => [
                            ['choice_text' => 'Réduire la taille, le temps de transfert et la surface d’attaque potentielle', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune vulnérabilité n’existe', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les conteneurs de démarrer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un .dockerignore ?',
                        'explanation' => 'Il permet d’exclure certains fichiers du contexte de build afin de réduire sa taille et d’éviter d’inclure des fichiers inutiles ou sensibles.',
                        'choices' => [
                            ['choice_text' => 'Réduire le contexte de build et exclure des fichiers inutiles ou sensibles', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le Dockerfile', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement un registry', 'is_correct' => false],
                            ['choice_text' => 'Configurer le firewall de l’hôte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conteneurs doivent-ils généralement éviter de fonctionner en root lorsque cela est possible ?',
                        'explanation' => 'Limiter les privilèges du processus réduit l’impact potentiel d’une compromission.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact potentiel d’une compromission du conteneur', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute écriture de fichier', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre Docker plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le besoin de volumes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi persister les données d’une base de données dans un volume plutôt que dans la couche éphémère du conteneur ?',
                        'explanation' => 'Le cycle de vie du conteneur ne doit pas déterminer la durée de vie des données critiques.',
                        'choices' => [
                            ['choice_text' => 'Séparer le cycle de vie des données de celui du conteneur', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement le CPU', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une réplication automatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des tags d’image immuables ou des digests ?',
                        'explanation' => 'Ils permettent de référencer précisément le contenu utilisé et améliorent la reproductibilité.',
                        'choices' => [
                            ['choice_text' => 'Identifier précisément le contenu déployé', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tout scan de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement un backup', 'is_correct' => false],
                            ['choice_text' => 'Remplacer Git', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les réseaux de conteneurs selon les besoins ?',
                        'explanation' => 'La segmentation réseau limite les communications inutiles et réduit certains risques d’exposition.',
                        'choices' => [
                            ['choice_text' => 'Limiter les communications aux flux nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Permettre à tous les conteneurs de communiquer librement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les services réseau', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des health checks pour les conteneurs ?',
                        'explanation' => 'Un health check permet de déterminer si l’application à l’intérieur du conteneur est réellement fonctionnelle.',
                        'choices' => [
                            ['choice_text' => 'Détecter si l’application est réellement opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le conteneur ne pourra jamais tomber', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi construire les images de manière reproductible ?',
                        'explanation' => 'Une construction reproductible permet d’obtenir un environnement cohérent et facilite le diagnostic des différences.',
                        'choices' => [
                            ['choice_text' => 'Produire des images cohérentes et traçables', 'is_correct' => true],
                            ['choice_text' => 'Éviter le versioning', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence totale de bugs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les images avant leur promotion en production ?',
                        'explanation' => 'Cela permet d’identifier des vulnérabilités connues avant que l’image ne soit déployée.',
                        'choices' => [
                            ['choice_text' => 'Détecter les vulnérabilités avant le déploiement', 'is_correct' => true],
                            ['choice_text' => 'Garantir une sécurité absolue', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les tests applicatifs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer Dockerfiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter CPU et mémoire d’un conteneur en production ?',
                        'explanation' => 'Les limites empêchent un workload d’utiliser excessivement les ressources partagées de l’hôte.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’un conteneur monopolise les ressources disponibles', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le conteneur sera toujours disponible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les problèmes de performance', 'is_correct' => false],
                            ['choice_text' => 'Remplacer l’autoscaling', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Kubernetes Fundamentals',
                'description' => 'Découvrez les concepts intermédiaires de Kubernetes : pods, deployments, services et configuration.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un Pod Kubernetes ?',
                        'explanation' => 'Le Pod est l’unité de déploiement minimale de Kubernetes et contient un ou plusieurs conteneurs partageant certaines ressources.',
                        'choices' => [
                            ['choice_text' => 'L’unité de déploiement minimale contenant un ou plusieurs conteneurs', 'is_correct' => true],
                            ['choice_text' => 'Un serveur physique', 'is_correct' => false],
                            ['choice_text' => 'Un registre d’images', 'is_correct' => false],
                            ['choice_text' => 'Un utilisateur Kubernetes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un Deployment ?',
                        'explanation' => 'Un Deployment gère généralement des ReplicaSets et maintient le nombre et la version souhaités de Pods.',
                        'choices' => [
                            ['choice_text' => 'Gérer le déploiement et la mise à jour d’un ensemble de Pods', 'is_correct' => true],
                            ['choice_text' => 'Stocker les mots de passe uniquement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le réseau', 'is_correct' => false],
                            ['choice_text' => 'Construire les images Docker', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un Service Kubernetes ?',
                        'explanation' => 'Un Service fournit une abstraction stable pour accéder à un ensemble de Pods.',
                        'choices' => [
                            ['choice_text' => 'Fournir un point d’accès stable vers des Pods', 'is_correct' => true],
                            ['choice_text' => 'Construire des images', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs Linux', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les volumes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les Pods ne doivent-ils pas être considérés comme permanents ?',
                        'explanation' => 'Kubernetes peut supprimer et recréer des Pods pour maintenir l’état souhaité.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent être supprimés et recréés dans le cadre du fonctionnement du cluster', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours stockés sur le disque local', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais redémarrer', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les nœuds du cluster', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif du desired state dans Kubernetes ?',
                        'explanation' => 'Kubernetes compare continuellement l’état réel à l’état souhaité et agit pour s’en rapprocher.',
                        'choices' => [
                            ['choice_text' => 'Décrire l’état que le cluster doit maintenir', 'is_correct' => true],
                            ['choice_text' => 'Décrire uniquement l’état historique', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement tous les Pods', 'is_correct' => false],
                            ['choice_text' => 'Désactiver l’orchestration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser ConfigMaps ?',
                        'explanation' => 'ConfigMaps permettent de stocker des données de configuration non sensibles séparément de l’image applicative.',
                        'choices' => [
                            ['choice_text' => 'Séparer certaines configurations non sensibles de l’image applicative', 'is_correct' => true],
                            ['choice_text' => 'Stocker obligatoirement tous les secrets', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les Pods', 'is_correct' => false],
                            ['choice_text' => 'Gérer le stockage physique des nœuds', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des Secrets Kubernetes pour les informations sensibles ?',
                        'explanation' => 'Les Secrets fournissent un mécanisme dédié pour gérer certaines données sensibles, même si des contrôles supplémentaires restent nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Séparer les informations sensibles de la configuration ordinaire', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’un secret ne pourra jamais être exposé', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les systèmes IAM', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement des logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un readiness probe ?',
                        'explanation' => 'Elle indique si un conteneur est prêt à recevoir du trafic.',
                        'choices' => [
                            ['choice_text' => 'Indiquer si l’application est prête à recevoir du trafic', 'is_correct' => true],
                            ['choice_text' => 'Redémarrer systématiquement le nœud', 'is_correct' => false],
                            ['choice_text' => 'Créer un volume', 'is_correct' => false],
                            ['choice_text' => 'Construire une image', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une liveness probe ?',
                        'explanation' => 'Elle aide à déterminer si un conteneur fonctionne correctement et peut déclencher un redémarrage selon la politique configurée.',
                        'choices' => [
                            ['choice_text' => 'Détecter si le conteneur fonctionne correctement et nécessite éventuellement un redémarrage', 'is_correct' => true],
                            ['choice_text' => 'Exposer automatiquement le service à Internet', 'is_correct' => false],
                            ['choice_text' => 'Créer une image', 'is_correct' => false],
                            ['choice_text' => 'Modifier le code source', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des requests et limits de ressources dans Kubernetes ?',
                        'explanation' => 'Ces paramètres aident le scheduler et limitent la consommation des workloads.',
                        'choices' => [
                            ['choice_text' => 'Mieux planifier les Pods et contrôler leur consommation de ressources', 'is_correct' => true],
                            ['choice_text' => 'Garantir une disponibilité de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les Services', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Infrastructure as Code',
                'description' => 'Approfondissez l’Infrastructure as Code, la gestion d’état, la reproductibilité et les changements contrôlés.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi Infrastructure as Code réduit-elle la dérive de configuration ?',
                        'explanation' => 'Décrire l’infrastructure dans des fichiers versionnés permet de reconstruire et vérifier plus facilement l’état attendu.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de définir et reproduire un état d’infrastructure attendu', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute modification manuelle', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les serveurs', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit zéro panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modules IaC sont-ils utiles ?',
                        'explanation' => 'Les modules permettent de réutiliser des composants d’infrastructure standardisés.',
                        'choices' => [
                            ['choice_text' => 'Réutiliser des composants d’infrastructure de manière standardisée', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le versioning', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des utilisateurs humains', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les fichiers IaC doivent-ils être passés en revue avant application ?',
                        'explanation' => 'Une petite modification peut créer ou supprimer des ressources et avoir des conséquences importantes.',
                        'choices' => [
                            ['choice_text' => 'Détecter les changements dangereux avant leur application', 'is_correct' => true],
                            ['choice_text' => 'Empêcher l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’état courant', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro changement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de l’état dans certains outils IaC ?',
                        'explanation' => 'L’état permet de suivre les ressources connues et de déterminer les changements nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Conserver une représentation des ressources gérées et aider à calculer les changements', 'is_correct' => true],
                            ['choice_text' => 'Stocker uniquement les logs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi protéger le fichier d’état IaC ?',
                        'explanation' => 'Il peut contenir des informations sensibles et représente la connaissance de l’infrastructure gérée.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut contenir des données sensibles et contrôle la gestion des ressources', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il est toujours public', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il ne contient aucune information utile', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute collaboration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer des changements IaC progressivement ?',
                        'explanation' => 'Un déploiement progressif réduit le rayon d’impact d’une mauvaise configuration.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une erreur de configuration', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Éviter les audits', 'is_correct' => false],
                            ['choice_text' => 'Garantir une absence totale de changement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de modifier manuellement une ressource gérée par IaC ?',
                        'explanation' => 'Les modifications manuelles peuvent créer un drift entre l’état réel et la configuration déclarée.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter la dérive entre l’infrastructure réelle et la configuration déclarée', 'is_correct' => true],
                            ['choice_text' => 'Parce que les modifications manuelles sont toujours interdites', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des variables plutôt que dupliquer des configurations ?',
                        'explanation' => 'Les variables permettent de réutiliser la même logique avec des paramètres différents.',
                        'choices' => [
                            ['choice_text' => 'Réutiliser la même configuration avec différents paramètres', 'is_correct' => true],
                            ['choice_text' => 'Empêcher la personnalisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester des modules IaC de façon indépendante ?',
                        'explanation' => 'Les tests ciblés rendent les erreurs plus faciles à détecter avant leur utilisation dans de grandes infrastructures.',
                        'choices' => [
                            ['choice_text' => 'Détecter les défauts avant leur réutilisation dans plusieurs environnements', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les modules', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le versioning', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’aucun changement ne sera nécessaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’IaC améliore-t-elle la reproductibilité des environnements ?',
                        'explanation' => 'Les environnements peuvent être construits à partir de la même définition versionnée.',
                        'choices' => [
                            ['choice_text' => 'La même définition peut être utilisée pour reconstruire des environnements cohérents', 'is_correct' => true],
                            ['choice_text' => 'Les environnements deviennent automatiquement identiques en tout point', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace le système d’exploitation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Monitoring et SRE Basics',
                'description' => 'Approfondissez les principes de monitoring, fiabilité, SLIs, SLOs, alertes et incidents.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que représente généralement un SLI ?',
                        'explanation' => 'Un Service Level Indicator est une mesure quantitative d’un aspect réel de la qualité d’un service.',
                        'choices' => [
                            ['choice_text' => 'Une mesure quantitative d’un aspect de la qualité du service', 'is_correct' => true],
                            ['choice_text' => 'Une politique de sécurité uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un serveur de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Un fichier de configuration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement un SLO ?',
                        'explanation' => 'Un Service Level Objective définit une cible mesurable pour un indicateur de service.',
                        'choices' => [
                            ['choice_text' => 'Une cible de fiabilité ou de performance pour un service', 'is_correct' => true],
                            ['choice_text' => 'Un identifiant d’utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Un type de conteneur', 'is_correct' => false],
                            ['choice_text' => 'Un serveur DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les alertes basées uniquement sur l’utilisation CPU peuvent-elles être insuffisantes ?',
                        'explanation' => 'Une CPU élevée n’est pas toujours un problème utilisateur, et un service peut avoir des problèmes sans CPU élevée.',
                        'choices' => [
                            ['choice_text' => 'La CPU ne représente pas à elle seule la santé ou l’expérience du service', 'is_correct' => true],
                            ['choice_text' => 'La CPU n’est jamais utile', 'is_correct' => false],
                            ['choice_text' => 'Les services n’utilisent pas le CPU', 'is_correct' => false],
                            ['choice_text' => 'Le CPU mesure directement la disponibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser le taux d’erreur comme signal de service ?',
                        'explanation' => 'Le taux d’erreur reflète directement la proportion de requêtes qui ne fonctionnent pas correctement.',
                        'choices' => [
                            ['choice_text' => 'Il mesure directement une dimension importante de la qualité du service', 'is_correct' => true],
                            ['choice_text' => 'Il mesure uniquement la taille des logs', 'is_correct' => false],
                            ['choice_text' => 'Il remplace la latence', 'is_correct' => false],
                            ['choice_text' => 'Il garantit qu’il n’y aura aucun incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller la latence par percentile plutôt que seulement la moyenne ?',
                        'explanation' => 'Les percentiles permettent de détecter les expériences très lentes qui peuvent être masquées par une moyenne.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux représenter les requêtes lentes et l’expérience des utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les valeurs extrêmes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une faible latence', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une alerte sur un SLO est-elle souvent plus pertinente qu’une alerte sur une métrique système isolée ?',
                        'explanation' => 'Le SLO représente directement un objectif de service et donc un impact plus proche de l’utilisateur.',
                        'choices' => [
                            ['choice_text' => 'Elle est directement liée à l’objectif de fiabilité du service', 'is_correct' => true],
                            ['choice_text' => 'Les métriques système sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Un SLO garantit toujours une absence d’incident', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les dashboards', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le budget d’erreur peut-il être utile ?',
                        'explanation' => 'Il donne une marge quantifiée d’indisponibilité ou de dégradation acceptable selon le SLO.',
                        'choices' => [
                            ['choice_text' => 'Il fournit une marge de risque permettant d’équilibrer fiabilité et vitesse de changement', 'is_correct' => true],
                            ['choice_text' => 'Il garantit zéro erreur', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement le coût cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi corréler métriques, logs et traces ?',
                        'explanation' => 'Ces signaux complémentaires permettent de comprendre à la fois l’ampleur, le contexte et le chemin d’une erreur.',
                        'choices' => [
                            ['choice_text' => 'Pour combiner des informations complémentaires lors du diagnostic', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire toutes les métriques à une seule', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les traces', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la journalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi suivre les incidents récurrents ?',
                        'explanation' => 'Des incidents répétitifs indiquent souvent qu’une cause structurelle n’a pas encore été corrigée.',
                        'choices' => [
                            ['choice_text' => 'Identifier les problèmes systémiques qui nécessitent une amélioration durable', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les postmortems', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les incidents ne reviendront jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les automatisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un bon système de monitoring doit-il lui-même être surveillé ?',
                        'explanation' => 'Si le système de monitoring est défaillant, les équipes peuvent perdre la visibilité nécessaire pendant un incident.',
                        'choices' => [
                            ['choice_text' => 'Une panne du monitoring peut masquer les problèmes du système surveillé', 'is_correct' => true],
                            ['choice_text' => 'Le monitoring ne peut jamais tomber en panne', 'is_correct' => false],
                            ['choice_text' => 'Les métriques ne servent qu’en développement', 'is_correct' => false],
                            ['choice_text' => 'La surveillance remplace les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Sécurité et DevSecOps',
                'description' => 'Approfondissez l’intégration de la sécurité dans les pipelines, dépendances, images et déploiements.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi intégrer le SAST dans un pipeline CI ?',
                        'explanation' => 'Le SAST analyse le code source ou les artefacts statiques afin de détecter certaines vulnérabilités tôt dans le cycle.',
                        'choices' => [
                            ['choice_text' => 'Détecter certaines vulnérabilités dans le code avant le déploiement', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les tests fonctionnels', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de toutes les vulnérabilités', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les revues de code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt général du DAST ?',
                        'explanation' => 'Le DAST teste l’application en fonctionnement afin d’identifier certaines vulnérabilités observables à travers son comportement.',
                        'choices' => [
                            ['choice_text' => 'Tester une application en fonctionnement pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'Scanner uniquement Git', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests unitaires', 'is_correct' => false],
                            ['choice_text' => 'Analyser uniquement le matériel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les dépendances pendant le CI ?',
                        'explanation' => 'Les vulnérabilités présentes dans des bibliothèques tierces peuvent compromettre une application même si son code propre est correct.',
                        'choices' => [
                            ['choice_text' => 'Détecter tôt les composants tiers vulnérables', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’application ne contient aucun bug', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les packages nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le contrôle de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les secrets accidentellement commités ?',
                        'explanation' => 'Un secret exposé dans Git peut rester présent dans l’historique même après sa suppression du fichier courant.',
                        'choices' => [
                            ['choice_text' => 'Détecter les identifiants exposés et réduire le risque de compromission', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer automatiquement Git', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les secrets ne seront jamais compromis', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute collaboration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les permissions des runners CI doivent-elles être limitées ?',
                        'explanation' => 'Un runner compromis peut être utilisé pour accéder à des ressources ou secrets auxquels il a accès.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une compromission du runner', 'is_correct' => true],
                            ['choice_text' => 'Donner un accès administrateur global', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs du runner', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les jobs de s’exécuter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les images utilisées par une pipeline avant déploiement ?',
                        'explanation' => 'Les images peuvent contenir des composants vulnérables ou des configurations dangereuses.',
                        'choices' => [
                            ['choice_text' => 'Réduire les risques liés aux composants ou configurations vulnérables', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence totale de bugs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les conteneurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer le moindre privilège aux déploiements automatiques ?',
                        'explanation' => 'Un compte de déploiement compromis ne devrait pouvoir modifier que les ressources nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’étendue des actions possibles en cas de compromission', 'is_correct' => true],
                            ['choice_text' => 'Donner toutes les permissions au pipeline', 'is_correct' => false],
                            ['choice_text' => 'Éviter les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les comptes de service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles de sécurité doivent-ils être exécutés tôt dans le pipeline ?',
                        'explanation' => 'Plus un problème est découvert tôt, plus il est généralement facile et moins coûteux à corriger.',
                        'choices' => [
                            ['choice_text' => 'Réduire le coût et le délai de correction des problèmes', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute livraison', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests tardifs', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro vulnérabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exceptions de sécurité dans les pipelines doivent-elles être documentées ?',
                        'explanation' => 'Une exception temporaire doit avoir une justification, un responsable et idéalement une date d’expiration.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver une justification et éviter que les contournements deviennent permanents', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute maintenance', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que l’exception est toujours correcte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances et images doivent-elles être mises à jour régulièrement ?',
                        'explanation' => 'Les nouvelles versions corrigent notamment des vulnérabilités et défauts connus.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition aux vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro bug', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute versioning', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de compatibilité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Cloud et automatisation',
                'description' => 'Approfondissez les pratiques DevOps pour les infrastructures cloud et les environnements automatisés.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi l’automatisation du provisioning cloud est-elle importante ?',
                        'explanation' => 'Elle réduit les différences entre environnements et permet de créer rapidement des ressources cohérentes.',
                        'choices' => [
                            ['choice_text' => 'Créer rapidement des environnements cohérents et reproductibles', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute surveillance', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les ressources sont gratuites', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les changements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des environnements cloud séparés pour dev, test et production ?',
                        'explanation' => 'La séparation protège la production et permet de tester les changements avant leur généralisation.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’un changement non validé affecte la production', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la reproductibilité', 'is_correct' => false],
                            ['choice_text' => 'Donner les mêmes permissions partout', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les ressources cloud inutilisées ?',
                        'explanation' => 'Des ressources oubliées ou surdimensionnées peuvent générer des coûts sans valeur métier.',
                        'choices' => [
                            ['choice_text' => 'Réduire les dépenses liées aux ressources inutiles ou surdimensionnées', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les environnements', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher l’autoscaling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un autoscaling bien configuré ?',
                        'explanation' => 'Il adapte le nombre ou la capacité des ressources à la charge.',
                        'choices' => [
                            ['choice_text' => 'Adapter les ressources à la charge afin d’améliorer efficacité et disponibilité', 'is_correct' => true],
                            ['choice_text' => 'Garantir le coût minimal dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Empêcher la montée en charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des tags cloud standardisés ?',
                        'explanation' => 'Ils facilitent l’attribution des ressources, la gouvernance, le suivi des coûts et l’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la gouvernance, l’automatisation et l’attribution des coûts', 'is_correct' => true],
                            ['choice_text' => 'Garantir la sécurité absolue', 'is_correct' => false],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les ressources automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets cloud ne doivent-ils pas être inclus dans des fichiers IaC publics ?',
                        'explanation' => 'Un secret inclus dans une configuration versionnée peut être exposé à de nombreuses personnes ou systèmes.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter l’exposition d’identifiants dans le code ou les dépôts', 'is_correct' => true],
                            ['choice_text' => 'Parce que les fichiers IaC ne peuvent pas contenir de variables', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’identité d’une pipeline cloud doit-elle être limitée ?',
                        'explanation' => 'Une identité trop privilégiée augmente le rayon d’impact d’une compromission.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact potentiel d’une compromission de la pipeline', 'is_correct' => true],
                            ['choice_text' => 'Permettre tous les changements sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les audits', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des environnements temporaires pour certaines pull requests ?',
                        'explanation' => 'Ils permettent de tester les changements dans un environnement proche de l’exécution réelle avant fusion.',
                        'choices' => [
                            ['choice_text' => 'Permettre une validation précoce et isolée des changements', 'is_correct' => true],
                            ['choice_text' => 'Remplacer totalement la production', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests unitaires', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro bug', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les coûts par environnement ?',
                        'explanation' => 'La séparation permet d’identifier les environnements qui consomment anormalement des ressources.',
                        'choices' => [
                            ['choice_text' => 'Identifier les dépenses anormales et les opportunités d’optimisation', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement tous les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le budget', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les déploiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi automatiser le nettoyage des ressources temporaires ?',
                        'explanation' => 'Les ressources temporaires oubliées peuvent consommer des ressources et générer des coûts inutiles.',
                        'choices' => [
                            ['choice_text' => 'Éviter l’accumulation de ressources temporaires inutiles', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les ressources permanentes', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro coût cloud', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les environnements de test', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Git avancé et collaboration',
                'description' => 'Approfondissez les workflows Git, branches, merge, rebase, pull requests et collaboration.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser des pull requests ?',
                        'explanation' => 'Les pull requests permettent de faire relire et discuter les changements avant leur intégration.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la revue, la discussion et la validation du code', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les branches', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les commits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une branche feature ?',
                        'explanation' => 'Elle permet d’isoler le développement d’une fonctionnalité ou d’un changement.',
                        'choices' => [
                            ['choice_text' => 'Isoler le développement d’une fonctionnalité ou modification', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement un serveur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la branche principale définitivement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’historique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter les branches de très longue durée ?',
                        'explanation' => 'Plus une branche diverge longtemps, plus les conflits et différences avec la branche principale peuvent devenir difficiles à gérer.',
                        'choices' => [
                            ['choice_text' => 'Réduire les divergences et conflits lors de l’intégration', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les commits', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les revues', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter CI', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’un commit qui contient beaucoup de changements sans relation claire ?',
                        'explanation' => 'Il devient plus difficile à relire, tester, annuler et comprendre.',
                        'choices' => [
                            ['choice_text' => 'Il devient plus difficile à comprendre, tester et revert', 'is_correct' => true],
                            ['choice_text' => 'Il accélère toujours le déploiement', 'is_correct' => false],
                            ['choice_text' => 'Il garantit moins de conflits', 'is_correct' => false],
                            ['choice_text' => 'Il empêche les branches', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des commits atomiques ?',
                        'explanation' => 'Un commit atomique représente idéalement une modification cohérente et facilement identifiable.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la compréhension, le revert et le diagnostic', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les merges', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’historique', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro conflit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rebase doit-il être utilisé avec prudence sur des branches partagées ?',
                        'explanation' => 'Le rebase réécrit l’historique des commits et peut perturber les autres personnes qui travaillent sur la même branche.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut réécrire un historique déjà partagé', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il supprime toujours le code', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il ne fonctionne que sur GitHub', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il empêche les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi protéger la branche principale ?',
                        'explanation' => 'Les protections peuvent imposer des revues et validations avant intégration de changements critiques.',
                        'choices' => [
                            ['choice_text' => 'Empêcher que des changements non validés soient intégrés directement', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute fusion', 'is_correct' => false],
                            ['choice_text' => 'Supprimer CI/CD', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro bug', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des tags Git pour les releases ?',
                        'explanation' => 'Un tag permet d’identifier précisément un commit correspondant à une version ou release.',
                        'choices' => [
                            ['choice_text' => 'Identifier précisément une version publiée', 'is_correct' => true],
                            ['choice_text' => 'Créer un nouveau serveur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer une branche', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les commits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi garder la branche principale déployable autant que possible ?',
                        'explanation' => 'Une branche principale stable et déployable réduit la distance entre le code intégré et une release possible.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque et faciliter une livraison rapide', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les fonctionnalités nouvelles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Éviter les pull requests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi automatiser les checks de pull request ?',
                        'explanation' => 'Les contrôles automatiques fournissent un feedback immédiat avant la fusion.',
                        'choices' => [
                            ['choice_text' => 'Détecter automatiquement certains problèmes avant intégration', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toute revue humaine', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le contrôle de version', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro bug', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Déploiement et Release Management',
                'description' => 'Approfondissez les stratégies de release, rollback, blue-green, canary et gestion des versions.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principe d’un déploiement blue-green ?',
                        'explanation' => 'Deux environnements existent et le trafic peut être basculé entre l’ancien et le nouveau.',
                        'choices' => [
                            ['choice_text' => 'Maintenir deux environnements et basculer le trafic entre eux', 'is_correct' => true],
                            ['choice_text' => 'Déployer uniquement sur un serveur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la version précédente avant test', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout rollback', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage principal du canary deployment ?',
                        'explanation' => 'Une petite partie du trafic est exposée d’abord afin d’observer le comportement avant généralisation.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’exposition initiale d’une nouvelle version', 'is_correct' => true],
                            ['choice_text' => 'Déployer immédiatement à tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro problème', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rollback doit-il être préparé avant le déploiement ?',
                        'explanation' => 'Une procédure connue permet de revenir rapidement à une version stable si le changement échoue.',
                        'choices' => [
                            ['choice_text' => 'Réduire le temps nécessaire pour revenir à un état stable', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les tests', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les artefacts', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le déploiement réussira', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des migrations de base de données compatibles avec plusieurs versions ?',
                        'explanation' => 'Les déploiements progressifs peuvent faire fonctionner temporairement plusieurs versions de l’application simultanément.',
                        'choices' => [
                            ['choice_text' => 'Permettre des déploiements progressifs sans casser les anciennes versions', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la nécessité de backups', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur SQL', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les rollbacks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer déploiement et activation d’une fonctionnalité avec des feature flags ?',
                        'explanation' => 'Un feature flag permet de déployer le code sans nécessairement activer immédiatement le comportement pour tous les utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Déployer le code tout en contrôlant séparément l’activation fonctionnelle', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toute fonctionnalité est active', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le contrôle de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi suivre les erreurs après un déploiement ?',
                        'explanation' => 'Une augmentation des erreurs peut indiquer une régression introduite par la nouvelle version.',
                        'choices' => [
                            ['choice_text' => 'Identifier rapidement les régressions de la nouvelle version', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les anciens logs', 'is_correct' => false],
                            ['choice_text' => 'Éviter le rollback', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les erreurs sont toujours normales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une release devrait-elle avoir un identifiant unique ?',
                        'explanation' => 'L’identification précise facilite le suivi, le déploiement, le rollback et l’analyse des incidents.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la traçabilité et la gestion précise des versions', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les versions précédentes', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro bug', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une release doit-elle être promue entre environnements plutôt que reconstruite à chaque fois ?',
                        'explanation' => 'Utiliser le même artefact réduit les différences entre ce qui a été testé et ce qui est déployé.',
                        'choices' => [
                            ['choice_text' => 'Conserver exactement le même artefact validé', 'is_correct' => true],
                            ['choice_text' => 'Créer des différences contrôlées', 'is_correct' => false],
                            ['choice_text' => 'Éviter le versioning', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des critères de succès avant une release ?',
                        'explanation' => 'Des critères prédéfinis permettent de décider objectivement si la release peut continuer, être interrompue ou être rollbackée.',
                        'choices' => [
                            ['choice_text' => 'Permettre une décision objective sur la poursuite ou l’arrêt du déploiement', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la release sera toujours réussie', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute collecte de métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter la durée de vie des feature flags ?',
                        'explanation' => 'Des flags oubliés augmentent la complexité du code et peuvent provoquer des comportements difficiles à comprendre.',
                        'choices' => [
                            ['choice_text' => 'Éviter l’accumulation de logique conditionnelle inutile', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les fonctionnalités restent activées', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests automatisés', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les releases', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Automatisation et configuration',
                'description' => 'Approfondissez les principes d’automatisation, idempotence, gestion de configuration et opérations répétables.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une opération idempotente ?',
                        'explanation' => 'Une opération idempotente peut être exécutée plusieurs fois sans produire de résultats incohérents après la première application.',
                        'choices' => [
                            ['choice_text' => 'Une opération qui peut être répétée sans effets indésirables supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Une opération qui ne peut être exécutée qu’une fois', 'is_correct' => false],
                            ['choice_text' => 'Une opération toujours manuelle', 'is_correct' => false],
                            ['choice_text' => 'Une opération qui supprime les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’idempotence est-elle importante en DevOps ?',
                        'explanation' => 'Elle permet de rejouer les automatisations de manière fiable lors des déploiements et corrections.',
                        'choices' => [
                            ['choice_text' => 'Elle facilite les reprises et les exécutions répétées', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime les tests', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les rollbacks', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi automatiser la configuration des serveurs ?',
                        'explanation' => 'L’automatisation rend la configuration plus cohérente et reproductible.',
                        'choices' => [
                            ['choice_text' => 'Maintenir une configuration cohérente et reproductible', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun serveur ne tombera', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scripts d’administration doivent-ils être testés ?',
                        'explanation' => 'Une erreur dans un script exécuté avec des privilèges élevés peut provoquer des changements importants.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’erreurs avant leur exécution sur des systèmes réels', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter les permissions d’un outil d’automatisation ?',
                        'explanation' => 'Si l’outil est compromis, ses permissions déterminent l’étendue des dégâts potentiels.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact potentiel d’une compromission', 'is_correct' => true],
                            ['choice_text' => 'Donner les droits root à tous les outils', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les déploiements', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver un historique des exécutions automatisées ?',
                        'explanation' => 'L’historique facilite la traçabilité et le diagnostic lorsqu’un changement provoque un problème.',
                        'choices' => [
                            ['choice_text' => 'Retracer les opérations exécutées et leurs résultats', 'is_correct' => true],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro échec', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter les modifications manuelles en production lorsque l’environnement est géré automatiquement ?',
                        'explanation' => 'Les changements manuels peuvent créer une divergence entre l’état réel et l’état décrit par l’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter la dérive de configuration', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute intervention humaine est interdite', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les audits', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des checks avant une opération automatisée destructive ?',
                        'explanation' => 'Les préconditions peuvent éviter qu’une commande dangereuse soit exécutée dans un mauvais contexte.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’exécuter une opération destructive dans un mauvais contexte', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les validations', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur humaine', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les scripts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les prérequis d’un script DevOps ?',
                        'explanation' => 'Les prérequis permettent de comprendre dans quelles conditions le script peut être exécuté en sécurité.',
                        'choices' => [
                            ['choice_text' => 'Éviter les exécutions incorrectes et faciliter la maintenance', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Éviter l’automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les opérations de lecture et d’écriture lorsque cela est pertinent ?',
                        'explanation' => 'Cette séparation permet parfois d’appliquer des permissions différentes et de limiter les actions disponibles.',
                        'choices' => [
                            ['choice_text' => 'Appliquer des permissions plus précises selon le type d’opération', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Garantir une performance parfaite', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute lecture', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Intermediate — Troubleshooting et gestion des incidents',
                'description' => 'Développez une méthode structurée pour diagnostiquer les problèmes de déploiement et de production.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle est une bonne première étape lors d’un incident de production ?',
                        'explanation' => 'Avant de modifier plusieurs composants, il est préférable de confirmer l’impact et de collecter les signaux pertinents.',
                        'choices' => [
                            ['choice_text' => 'Évaluer l’impact et collecter les informations utiles', 'is_correct' => true],
                            ['choice_text' => 'Redémarrer immédiatement tous les serveurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Déployer une nouvelle version sans diagnostic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi consulter les changements récents pendant un incident ?',
                        'explanation' => 'Un changement récent peut avoir introduit une régression et fournit une piste de diagnostic importante.',
                        'choices' => [
                            ['choice_text' => 'Identifier une modification récente pouvant être liée à la panne', 'is_correct' => true],
                            ['choice_text' => 'Tous les incidents sont nécessairement causés par le dernier changement', 'is_correct' => false],
                            ['choice_text' => 'Les changements n’affectent jamais la production', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute observation des métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une timeline pendant un incident ?',
                        'explanation' => 'La timeline aide à relier les symptômes, changements et actions aux moments où ils se produisent.',
                        'choices' => [
                            ['choice_text' => 'Corréler les événements et changements dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Garantir la résolution automatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter plusieurs changements simultanés pendant le diagnostic ?',
                        'explanation' => 'Des changements multiples rendent difficile l’identification de celui qui a amélioré ou aggravé la situation.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver une relation plus claire entre une action et son effet', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le nombre de variables', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher tout rollback', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs d’application doivent-ils être corrélés avec ceux de l’infrastructure ?',
                        'explanation' => 'Un problème applicatif peut être causé par une dégradation sous-jacente de l’infrastructure.',
                        'choices' => [
                            ['choice_text' => 'Pour relier les symptômes applicatifs aux conditions infrastructurelles', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le monitoring système', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi disposer d’un rollback simple pendant un incident ?',
                        'explanation' => 'Le rollback peut restaurer rapidement une version connue avant d’effectuer une investigation plus approfondie.',
                        'choices' => [
                            ['choice_text' => 'Réduire rapidement l’impact lorsqu’une version récente est suspecte', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les preuves', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute analyse future', 'is_correct' => false],
                            ['choice_text' => 'Garantir que la cause racine est déjà connue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les incidents doivent-ils être documentés après résolution ?',
                        'explanation' => 'La documentation permet d’identifier les actions efficaces et d’améliorer les procédures.',
                        'choices' => [
                            ['choice_text' => 'Capitaliser sur les causes, actions et améliorations possibles', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les futurs changements', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs historiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les postmortems', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer symptôme et cause racine ?',
                        'explanation' => 'Un symptôme est un effet visible tandis que la cause racine explique pourquoi l’incident s’est produit.',
                        'choices' => [
                            ['choice_text' => 'Pour corriger le problème à la source plutôt que seulement son effet', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un symptôme est toujours une cause', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter le rayon d’impact pendant un incident ?',
                        'explanation' => 'Réduire l’exposition permet de préserver la disponibilité pour les autres utilisateurs ou services.',
                        'choices' => [
                            ['choice_text' => 'Réduire le nombre d’utilisateurs ou de composants affectés', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro erreur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute communication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les incidents récurrents ?',
                        'explanation' => 'Une répétition indique souvent qu’une correction temporaire a été appliquée sans traiter suffisamment la cause sous-jacente.',
                        'choices' => [
                            ['choice_text' => 'Identifier les causes structurelles qui nécessitent une correction durable', 'is_correct' => true],
                            ['choice_text' => 'Pour ignorer les incidents précédents', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement le nombre d’incidents', 'is_correct' => false],
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