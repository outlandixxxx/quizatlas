<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DevOpsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'devops')->firstOrFail();

        $quizzes = [
            [
                'title' => 'DevOps Advanced — CI/CD Architecture',
                'description' => 'Maîtrisez la conception de pipelines CI/CD robustes, reproductibles et sécurisés à grande échelle.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi séparer la construction d’un artefact de sa promotion entre environnements ?',
                        'explanation' => 'Construire une seule fois puis promouvoir le même artefact réduit les différences entre ce qui a été testé et ce qui est déployé.',
                        'choices' => [
                            ['choice_text' => 'Pour garantir que le même artefact testé est promu vers les environnements suivants', 'is_correct' => true],
                            ['choice_text' => 'Pour reconstruire différemment l’application à chaque environnement', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le besoin de versioning', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute validation avant production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un pipeline de déploiement avec étapes de promotion contrôlées ?',
                        'explanation' => 'Les promotions contrôlées permettent d’appliquer différentes validations et autorisations avant chaque niveau de déploiement.',
                        'choices' => [
                            ['choice_text' => 'Contrôler progressivement la progression d’une release vers les environnements critiques', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les environnements intermédiaires', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests automatisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une pipeline CI/CD doit-elle être idempotente autant que possible ?',
                        'explanation' => 'Une pipeline idempotente peut être relancée sans créer des effets incohérents ou des ressources dupliquées.',
                        'choices' => [
                            ['choice_text' => 'Permettre des relances sûres et reproductibles', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tout rollback', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les artefacts', 'is_correct' => false],
                            ['choice_text' => 'Garantir une disponibilité absolue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pipeline doit-il disposer de timeout sur les étapes externes ?',
                        'explanation' => 'Sans timeout, une étape bloquée peut monopoliser les ressources du runner et retarder les autres exécutions.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une étape bloquée consomme indéfiniment des ressources', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les tâches réussissent', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dépendances externes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute surveillance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les runners CI/CD doivent-ils être isolés selon les niveaux de sensibilité ?',
                        'explanation' => 'Les runners qui accèdent à la production ou à des secrets sensibles présentent un niveau de risque plus élevé.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact potentiel d’une compromission d’un environnement de build', 'is_correct' => true],
                            ['choice_text' => 'Permettre à tous les jobs d’accéder à toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne de pipeline', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des artefacts immuables pour les releases ?',
                        'explanation' => 'Un artefact immuable conserve exactement le contenu validé et évite qu’une même référence change entre deux déploiements.',
                        'choices' => [
                            ['choice_text' => 'Garantir que le contenu déployé reste identique à celui validé', 'is_correct' => true],
                            ['choice_text' => 'Modifier le contenu après validation', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute traçabilité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les versions précédentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une pipeline de production doit-elle avoir des permissions plus restrictives qu’une pipeline de développement ?',
                        'explanation' => 'La production contient généralement des ressources critiques et une compromission du pipeline y aurait un impact plus important.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’impact d’une compromission en production est plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Parce que les pipelines de développement ne peuvent jamais être compromis', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des gates manuels ou automatisés avant certaines promotions critiques ?',
                        'explanation' => 'Ils permettent de vérifier des critères supplémentaires avant qu’un changement atteigne une infrastructure critique.',
                        'choices' => [
                            ['choice_text' => 'Ajouter une validation explicite avant une étape à fort impact', 'is_correct' => true],
                            ['choice_text' => 'Supprimer l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toutes les releases', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les environnements de build et de production ?',
                        'explanation' => 'La séparation réduit le risque qu’un environnement de compilation compromis ait un accès direct aux systèmes de production.',
                        'choices' => [
                            ['choice_text' => 'Limiter le mouvement d’un compromis entre les environnements', 'is_correct' => true],
                            ['choice_text' => 'Permettre aux builds d’accéder à toutes les données de production', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les artefacts', 'is_correct' => false],
                            ['choice_text' => 'Éviter le contrôle de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tracer chaque promotion d’une release ?',
                        'explanation' => 'La traçabilité permet de savoir quelle version a été déployée, quand, où et par quel processus.',
                        'choices' => [
                            ['choice_text' => 'Pouvoir retracer précisément le cycle de vie d’une version', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les historiques', 'is_correct' => false],
                            ['choice_text' => 'Éviter les audits', 'is_correct' => false],
                            ['choice_text' => 'Garantir la réussite de la release', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Advanced — Kubernetes et orchestration',
                'description' => 'Approfondissez l’orchestration Kubernetes, la résilience, les déploiements, la sécurité et la gestion des ressources.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un Deployment Kubernetes est-il préférable à la création manuelle de Pods pour une application stateless ?',
                        'explanation' => 'Le Deployment maintient l’état souhaité et gère les remplacements et mises à jour des Pods.',
                        'choices' => [
                            ['choice_text' => 'Il maintient automatiquement un nombre et une version souhaités de Pods', 'is_correct' => true],
                            ['choice_text' => 'Il empêche tout redémarrage', 'is_correct' => false],
                            ['choice_text' => 'Il stocke les secrets uniquement', 'is_correct' => false],
                            ['choice_text' => 'Il remplace le cluster réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les readiness probes sont-elles essentielles lors d’un rolling update ?',
                        'explanation' => 'Elles empêchent d’envoyer du trafic à une nouvelle instance avant qu’elle soit réellement prête.',
                        'choices' => [
                            ['choice_text' => 'Éviter d’envoyer du trafic vers un Pod qui n’est pas encore prêt', 'is_correct' => true],
                            ['choice_text' => 'Redémarrer tous les Pods', 'is_correct' => false],
                            ['choice_text' => 'Créer de nouveaux nœuds', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les services DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les PodDisruptionBudgets peuvent-ils être utiles ?',
                        'explanation' => 'Ils limitent le nombre de Pods volontairement indisponibles simultanément afin de préserver la disponibilité.',
                        'choices' => [
                            ['choice_text' => 'Protéger un niveau minimal de disponibilité lors de certaines perturbations volontaires', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toutes les pannes matérielles', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro downtime dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les health checks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir à la fois requests et limits de ressources ?',
                        'explanation' => 'Les requests servent notamment au scheduling tandis que les limits bornent la consommation maximale autorisée selon les ressources.',
                        'choices' => [
                            ['choice_text' => 'Contrôler le placement des workloads et limiter leur consommation', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’un Pod dispose toujours de ressources illimitées', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’autoscaling', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser Horizontal Pod Autoscaling ?',
                        'explanation' => 'HPA adapte le nombre de Pods en fonction de métriques ou de ressources observées.',
                        'choices' => [
                            ['choice_text' => 'Adapter le nombre de Pods à la charge', 'is_correct' => true],
                            ['choice_text' => 'Changer automatiquement le code source', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les nœuds du cluster', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les volumes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un readiness probe mal configuré peut-il provoquer une panne ?',
                        'explanation' => 'Si un service sain est considéré à tort comme non prêt, il peut être retiré du trafic alors qu’il pourrait répondre correctement.',
                        'choices' => [
                            ['choice_text' => 'Il peut empêcher des instances saines de recevoir du trafic', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours le nombre de réplicas', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les Deployments', 'is_correct' => false],
                            ['choice_text' => 'Il désactive le réseau du cluster', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des namespaces Kubernetes ?',
                        'explanation' => 'Les namespaces offrent une séparation logique utile pour organiser les ressources et appliquer des politiques.',
                        'choices' => [
                            ['choice_text' => 'Organiser et isoler logiquement les ressources du cluster', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des machines physiques', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les Services', 'is_correct' => false],
                            ['choice_text' => 'Garantir une isolation matérielle complète', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les NetworkPolicies sont-elles utiles ?',
                        'explanation' => 'Elles permettent de contrôler quels Pods peuvent communiquer entre eux selon des règles définies.',
                        'choices' => [
                            ['choice_text' => 'Restreindre les communications réseau entre workloads', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer automatiquement tous les volumes', 'is_correct' => false],
                            ['choice_text' => 'Créer des images Docker', 'is_correct' => false],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser RBAC dans Kubernetes ?',
                        'explanation' => 'RBAC permet de contrôler les actions que les utilisateurs et services peuvent effectuer sur les ressources.',
                        'choices' => [
                            ['choice_text' => 'Contrôler précisément les actions autorisées sur les ressources', 'is_correct' => true],
                            ['choice_text' => 'Créer des conteneurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les probes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité absolue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les manifests Kubernetes doivent-ils être versionnés ?',
                        'explanation' => 'Le versioning permet de suivre les changements d’infrastructure et de déployer des configurations reproductibles.',
                        'choices' => [
                            ['choice_text' => 'Suivre et reproduire les changements de configuration du cluster', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les versions précédentes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur de configuration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Advanced — Infrastructure as Code et GitOps',
                'description' => 'Maîtrisez les pratiques avancées d’IaC, GitOps, drift detection et déploiement déclaratif.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principe central du GitOps ?',
                        'explanation' => 'GitOps utilise Git comme source de vérité pour l’état déclaré de l’infrastructure ou des applications.',
                        'choices' => [
                            ['choice_text' => 'Utiliser un dépôt versionné comme source de vérité pour l’état désiré', 'is_correct' => true],
                            ['choice_text' => 'Effectuer uniquement des changements manuels en production', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le contrôle de version', 'is_correct' => false],
                            ['choice_text' => 'Stocker les secrets directement dans les manifests publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la détection de drift est-elle importante dans l’IaC ?',
                        'explanation' => 'Elle identifie les différences entre l’état réel et l’état déclaré.',
                        'choices' => [
                            ['choice_text' => 'Identifier les changements non représentés dans la configuration déclarée', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun changement manuel n’a jamais eu lieu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les ressources automatiquement dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un contrôle de version est-il essentiel pour l’IaC ?',
                        'explanation' => 'Les changements d’infrastructure doivent être traçables, révisables et réversibles.',
                        'choices' => [
                            ['choice_text' => 'Permettre revue, historique et rollback des changements infrastructurels', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les états', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer des politiques de validation sur les pull requests IaC ?',
                        'explanation' => 'Les validations peuvent empêcher les configurations non conformes de parvenir à l’environnement cible.',
                        'choices' => [
                            ['choice_text' => 'Bloquer les changements qui ne respectent pas les standards ou contrôles', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les pull requests', 'is_correct' => false],
                            ['choice_text' => 'Empêcher le versioning', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune ressource ne sera créée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système GitOps doit-il surveiller l’état réel du cluster ?',
                        'explanation' => 'Le système doit détecter les écarts entre l’état déclaré et l’état réel afin de maintenir la convergence.',
                        'choices' => [
                            ['choice_text' => 'Détecter et corriger les écarts entre état déclaré et état réel', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute mise à jour', 'is_correct' => false],
                            ['choice_text' => 'Supprimer Git', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro changement manuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la séparation des responsabilités est-elle utile dans GitOps ?',
                        'explanation' => 'Elle permet de différencier la modification déclarative du code et les mécanismes qui appliquent automatiquement ces changements.',
                        'choices' => [
                            ['choice_text' => 'Réduire les privilèges directs et séparer définition et application', 'is_correct' => true],
                            ['choice_text' => 'Donner à chaque développeur un accès root au cluster', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles de revue', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets nécessitent-ils un mécanisme distinct dans un workflow GitOps ?',
                        'explanation' => 'Les dépôts Git sont largement répliqués et ne doivent pas devenir la source d’exposition des secrets sensibles.',
                        'choices' => [
                            ['choice_text' => 'Éviter de placer directement des secrets sensibles dans le dépôt versionné', 'is_correct' => true],
                            ['choice_text' => 'Parce que Git ne supporte pas les fichiers YAML', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les déploiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture GitOps améliore-t-elle l’auditabilité ?',
                        'explanation' => 'Les changements de configuration sont représentés par des commits et revues dans le dépôt.',
                        'choices' => [
                            ['choice_text' => 'Les changements d’état sont représentés par un historique versionné et révisé', 'is_correct' => true],
                            ['choice_text' => 'Parce que les changements manuels deviennent invisibles', 'is_correct' => false],
                            ['choice_text' => 'Parce que Git supprime les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clusters n’ont plus besoin de logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les environnements IaC doivent-ils être isolés dans le contrôle d’accès ?',
                        'explanation' => 'Une erreur dans un environnement de test ne doit pas permettre de modifier directement la production.',
                        'choices' => [
                            ['choice_text' => 'Limiter le risque qu’un changement non prévu affecte la production', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les tests automatisés', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les environnements temporaires', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les environnements sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modules IaC doivent-ils être versionnés ?',
                        'explanation' => 'Le versioning des modules permet de contrôler quand une modification de logique d’infrastructure est adoptée.',
                        'choices' => [
                            ['choice_text' => 'Contrôler et reproduire les versions de composants d’infrastructure réutilisables', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro changement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Advanced — Observabilité et fiabilité',
                'description' => 'Approfondissez SRE, SLI, SLO, error budgets, alerting et ingénierie de la fiabilité.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un SLO doit-il refléter une propriété réellement importante pour l’utilisateur ?',
                        'explanation' => 'Un SLO n’a de valeur opérationnelle que s’il représente une dimension de qualité pertinente pour le service.',
                        'choices' => [
                            ['choice_text' => 'Pour aligner la fiabilité mesurée avec l’expérience utilisateur', 'is_correct' => true],
                            ['choice_text' => 'Pour maximiser le nombre de métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests de charge', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une disponibilité de 100 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le budget d’erreur peut-il influencer les décisions de release ?',
                        'explanation' => 'Lorsqu’une équipe a déjà consommé une grande partie de sa marge d’erreur, elle peut privilégier la fiabilité avant de prendre de nouveaux risques.',
                        'choices' => [
                            ['choice_text' => 'Il permet d’équilibrer le rythme de changement avec le niveau de fiabilité atteint', 'is_correct' => true],
                            ['choice_text' => 'Il garantit que toutes les releases seront bloquées', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les tests', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement le coût cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les alertes sur symptômes utilisateur sont-elles souvent préférables aux alertes uniquement sur infrastructure ?',
                        'explanation' => 'Une alerte centrée sur le service mesure directement l’impact alors qu’une métrique infrastructure peut être élevée sans effet visible pour l’utilisateur.',
                        'choices' => [
                            ['choice_text' => 'Elles sont plus directement liées à l’impact réel du service', 'is_correct' => true],
                            ['choice_text' => 'Les métriques infrastructure sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent zéro faux positif', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment les dashboards', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des traces distribuées pour les architectures microservices ?',
                        'explanation' => 'Elles permettent de suivre une requête à travers plusieurs services et d’identifier où apparaissent délais et erreurs.',
                        'choices' => [
                            ['choice_text' => 'Suivre le parcours d’une requête à travers plusieurs services', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les logs système', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des Pods', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement le stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer la disponibilité sur une fenêtre temporelle plutôt qu’à un instant précis ?',
                        'explanation' => 'La disponibilité est une propriété du service dans le temps, et une mesure instantanée peut manquer des interruptions courtes.',
                        'choices' => [
                            ['choice_text' => 'Une série temporelle donne une meilleure vision des interruptions cumulées', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une mesure instantanée est toujours fausse', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les incidents courts', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une alerte basée sur une simple valeur seuil peut-elle manquer une dégradation ?',
                        'explanation' => 'Une évolution progressive ou un changement relatif peut être important même si la valeur reste sous un seuil fixe.',
                        'choices' => [
                            ['choice_text' => 'Une dérive progressive peut être problématique avant d’atteindre le seuil', 'is_correct' => true],
                            ['choice_text' => 'Les seuils ne servent jamais', 'is_correct' => false],
                            ['choice_text' => 'Les métriques sont toujours constantes', 'is_correct' => false],
                            ['choice_text' => 'Les dérives sont toujours visibles immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dashboards doivent-ils éviter un nombre excessif de métriques sans contexte ?',
                        'explanation' => 'Une grande quantité de données non hiérarchisées rend les incidents difficiles à analyser.',
                        'choices' => [
                            ['choice_text' => 'Trop d’informations non structurées peuvent ralentir le diagnostic', 'is_correct' => true],
                            ['choice_text' => 'Plus de métriques garantit toujours un meilleur diagnostic', 'is_correct' => false],
                            ['choice_text' => 'Les dashboards ne doivent jamais contenir de métriques', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs préfèrent toujours les graphiques complexes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests de charge complètent-ils le monitoring de production ?',
                        'explanation' => 'Les tests de charge permettent de découvrir les limites avant qu’elles ne soient atteintes dans certaines conditions réelles.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent d’explorer les limites du système avant un incident réel', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent totalement le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Ils évitent tout besoin de capacity planning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le MTTR et la fréquence d’incidents doivent-ils être analysés ensemble ?',
                        'explanation' => 'Un système peut avoir peu d’incidents mais des récupérations très longues, ou beaucoup d’incidents mais une récupération rapide.',
                        'choices' => [
                            ['choice_text' => 'Ils donnent ensemble une vision plus complète de la fiabilité opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Ils mesurent exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'Le MTTR remplace la fréquence', 'is_correct' => false],
                            ['choice_text' => 'La fréquence ne sert jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les postmortems doivent-ils produire des actions concrètes ?',
                        'explanation' => 'Sans actions mesurables, l’analyse d’un incident risque de ne produire aucune amélioration durable.',
                        'choices' => [
                            ['choice_text' => 'Transformer l’apprentissage en améliorations vérifiables', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la documentation sans objectif', 'is_correct' => false],
                            ['choice_text' => 'Pour attribuer les fautes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests futurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Advanced — Security et supply chain',
                'description' => 'Maîtrisez les risques de supply chain logicielle, signatures, secrets et contrôles de sécurité DevSecOps.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi la supply chain logicielle représente-t-elle un risque DevOps important ?',
                        'explanation' => 'Une application dépend de nombreux composants, outils et artefacts externes qui peuvent eux-mêmes être compromis.',
                        'choices' => [
                            ['choice_text' => 'Une compromission d’un composant ou outil tiers peut affecter les livraisons', 'is_correct' => true],
                            ['choice_text' => 'Les dépendances tierces sont toujours sûres', 'is_correct' => false],
                            ['choice_text' => 'La supply chain ne concerne que le matériel', 'is_correct' => false],
                            ['choice_text' => 'Les pipelines empêchent toutes les attaques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi signer les artefacts de build peut-il être utile ?',
                        'explanation' => 'La signature permet notamment de vérifier l’authenticité et l’intégrité d’un artefact avant son utilisation.',
                        'choices' => [
                            ['choice_text' => 'Vérifier l’intégrité et l’origine attendue d’un artefact', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’artefact ne contient aucun bug', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le versioning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier la provenance d’un artefact ?',
                        'explanation' => 'La provenance permet de comprendre comment, où et à partir de quelles sources un artefact a été produit.',
                        'choices' => [
                            ['choice_text' => 'Tracer l’origine et le processus de production d’un artefact', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro vulnérabilité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les pipelines', 'is_correct' => false],
                            ['choice_text' => 'Éviter le contrôle de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un secret exposé dans un dépôt Git doit-il généralement être considéré comme compromis ?',
                        'explanation' => 'Le secret peut avoir été copié dans des clones, caches ou historiques et il est difficile de garantir sa disparition.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut avoir été copié ou conservé dans l’historique', 'is_correct' => true],
                            ['choice_text' => 'Parce que Git chiffre automatiquement tous les commits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un secret Git ne peut jamais être utilisé', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépôts privés sont toujours parfaitement isolés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les runners CI/CD sont-ils une cible importante ?',
                        'explanation' => 'Ils peuvent avoir accès au code source, aux secrets, aux artefacts et parfois aux environnements de production.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent concentrer plusieurs accès sensibles dans un même environnement', 'is_correct' => true],
                            ['choice_text' => 'Ils ne possèdent jamais de permissions', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais exécuter du code', 'is_correct' => false],
                            ['choice_text' => 'Ils ne communiquent jamais avec Internet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les runners de confiance élevée des runners généraux ?',
                        'explanation' => 'Un runner qui manipule des secrets de production doit avoir une surface d’exposition plus faible.',
                        'choices' => [
                            ['choice_text' => 'Limiter la propagation d’un compromis provenant d’un job moins fiable', 'is_correct' => true],
                            ['choice_text' => 'Donner davantage de privilèges à tous les jobs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les builds automatiques', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout contrôle d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi verrouiller les versions de dépendances ?',
                        'explanation' => 'Le verrouillage permet de reproduire les builds et réduit les changements inattendus liés à la résolution automatique des versions.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la reproductibilité des builds', 'is_correct' => true],
                            ['choice_text' => 'Empêcher définitivement toute mise à jour', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro vulnérabilité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les dépendances transitives ?',
                        'explanation' => 'Une application peut être affectée par une vulnérabilité dans une bibliothèque dont elle dépend indirectement.',
                        'choices' => [
                            ['choice_text' => 'Les vulnérabilités peuvent se trouver dans des composants indirects', 'is_correct' => true],
                            ['choice_text' => 'Les dépendances transitives ne sont jamais exécutées', 'is_correct' => false],
                            ['choice_text' => 'Seules les dépendances directes peuvent être vulnérables', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toujours supprimées au build', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les licences des dépendances dans une organisation ?',
                        'explanation' => 'Certaines licences imposent des obligations qui doivent être compatibles avec les usages prévus.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les conditions de licence sont compatibles avec l’usage du logiciel', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la performance', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro vulnérabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer les contrôles de supply chain dans le pipeline ?',
                        'explanation' => 'Les contrôles automatisés permettent d’identifier les risques avant qu’un artefact ne soit distribué ou déployé.',
                        'choices' => [
                            ['choice_text' => 'Détecter les risques avant la distribution ou le déploiement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute intervention humaine', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Éviter la gestion des dépendances', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Advanced — Performance et scalabilité',
                'description' => 'Analysez les stratégies avancées de performance, capacité, autoscaling et optimisation des systèmes DevOps.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi identifier les bottlenecks avant de scaler horizontalement ?',
                        'explanation' => 'Ajouter des instances ne résout pas toujours le goulot d’étranglement si celui-ci se trouve dans la base de données, le réseau ou un composant partagé.',
                        'choices' => [
                            ['choice_text' => 'Le goulot peut se trouver dans un composant qui ne bénéficie pas du scaling horizontal', 'is_correct' => true],
                            ['choice_text' => 'Le scaling horizontal résout toujours tous les problèmes', 'is_correct' => false],
                            ['choice_text' => 'Le scaling ne peut jamais améliorer les performances', 'is_correct' => false],
                            ['choice_text' => 'Les bottlenecks n’existent que sur les serveurs physiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une base de données peut-elle devenir le bottleneck d’une architecture scalable ?',
                        'explanation' => 'Même avec de nombreux serveurs applicatifs, une base centralisée peut atteindre ses limites de CPU, I/O ou connexions.',
                        'choices' => [
                            ['choice_text' => 'Une dépendance partagée peut atteindre sa capacité maximale', 'is_correct' => true],
                            ['choice_text' => 'Les bases de données ne consomment jamais de ressources', 'is_correct' => false],
                            ['choice_text' => 'Le scaling applicatif supprime automatiquement la charge DB', 'is_correct' => false],
                            ['choice_text' => 'Les bases sont toujours infiniment scalables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser du caching ?',
                        'explanation' => 'Le cache peut réduire le nombre d’accès à des ressources coûteuses et diminuer la latence.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines opérations coûteuses et améliorer la latence', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données sont toujours fraîches', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute base de données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe avec un cache mal invalidé ?',
                        'explanation' => 'Des données obsolètes peuvent être servies aux utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Servir des données obsolètes ou incorrectes', 'is_correct' => true],
                            ['choice_text' => 'Garantir une meilleure cohérence', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les requêtes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute lecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des load tests avant une forte augmentation de trafic ?',
                        'explanation' => 'Ils permettent d’identifier les limites du système et les composants qui saturent sous charge.',
                        'choices' => [
                            ['choice_text' => 'Identifier les limites et bottlenecks avant une montée en charge réelle', 'is_correct' => true],
                            ['choice_text' => 'Garantir une performance parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Éviter le capacity planning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi autoscaling basé sur une seule métrique peut-il être insuffisant ?',
                        'explanation' => 'La charge réelle peut dépendre de plusieurs dimensions comme CPU, mémoire, latence, files d’attente ou nombre de requêtes.',
                        'choices' => [
                            ['choice_text' => 'La charge d’un service peut dépendre de plusieurs dimensions', 'is_correct' => true],
                            ['choice_text' => 'Une seule métrique est toujours parfaite', 'is_correct' => false],
                            ['choice_text' => 'Le CPU n’a aucun intérêt', 'is_correct' => false],
                            ['choice_text' => 'L’autoscaling ne dépend jamais des métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests de performance doivent-ils être reproductibles ?',
                        'explanation' => 'Des scénarios reproductibles permettent de comparer objectivement les versions et changements.',
                        'choices' => [
                            ['choice_text' => 'Comparer les performances avant et après les changements', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro variation entre exécutions', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Éviter l’analyse des bottlenecks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi optimiser la latence au p95 ou p99 peut-elle être importante ?',
                        'explanation' => 'Les percentiles élevés représentent les expériences les plus lentes, qui peuvent être fortement ressenties par certains utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Améliorer l’expérience des requêtes les plus lentes', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les valeurs extrêmes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une moyenne parfaite', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les métriques de taux d’erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture microservices peut-elle introduire de nouvelles latences ?',
                        'explanation' => 'Les appels réseau entre services ajoutent des communications, sérialisations et potentiellement plusieurs points de défaillance.',
                        'choices' => [
                            ['choice_text' => 'Les communications réseau ajoutent des coûts et des dépendances supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Les microservices ne communiquent jamais', 'is_correct' => false],
                            ['choice_text' => 'Le réseau est toujours plus rapide que les appels locaux', 'is_correct' => false],
                            ['choice_text' => 'La distribution supprime toute latence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une optimisation de performance doit-elle être validée par des mesures après changement ?',
                        'explanation' => 'Une optimisation supposée peut n’avoir aucun effet ou déplacer le bottleneck ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que le changement améliore réellement le comportement observé', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute optimisation fonctionne toujours', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les métriques historiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Advanced — Résilience et disaster recovery',
                'description' => 'Maîtrisez les stratégies avancées de résilience, sauvegarde, réplication, failover et récupération.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi RTO et RPO influencent-ils directement l’architecture de reprise ?',
                        'explanation' => 'Des objectifs de reprise stricts nécessitent généralement davantage de réplication, automatisation ou ressources de secours.',
                        'choices' => [
                            ['choice_text' => 'Des objectifs plus stricts nécessitent généralement des mécanismes de reprise plus rapides et robustes', 'is_correct' => true],
                            ['choice_text' => 'Ils n’ont aucun impact architectural', 'is_correct' => false],
                            ['choice_text' => 'Ils servent uniquement à calculer les coûts cloud', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les tests de restauration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de réplication seule peut-elle être insuffisante contre une corruption logique ?',
                        'explanation' => 'Une corruption peut être répliquée vers toutes les copies avant sa détection.',
                        'choices' => [
                            ['choice_text' => 'La corruption peut être propagée à toutes les répliques', 'is_correct' => true],
                            ['choice_text' => 'La réplication empêche toujours la corruption', 'is_correct' => false],
                            ['choice_text' => 'Les données répliquées sont toujours immuables', 'is_correct' => false],
                            ['choice_text' => 'La réplication remplace tous les backups', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les backups immuables sont-ils utiles dans certaines stratégies de résilience ?',
                        'explanation' => 'Ils rendent plus difficile la suppression ou modification des sauvegardes par un attaquant ou un processus compromis.',
                        'choices' => [
                            ['choice_text' => 'Protéger certaines copies contre la modification ou suppression', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro perte de données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de restauration', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un failover automatique doit-il être testé ?',
                        'explanation' => 'Un système peut sembler redondant mais échouer lors de la bascule réelle à cause d’une configuration ou dépendance oubliée.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que la bascule fonctionne réellement dans les conditions prévues', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune panne ne se produira', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les systèmes de secours', 'is_correct' => false],
                            ['choice_text' => 'Éviter la surveillance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chaos engineering peut-il être utile ?',
                        'explanation' => 'Il consiste à expérimenter des défaillances contrôlées afin de découvrir les faiblesses de résilience.',
                        'choices' => [
                            ['choice_text' => 'Tester la résilience en provoquant des perturbations contrôlées', 'is_correct' => true],
                            ['choice_text' => 'Créer volontairement des incidents sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exercices de disaster recovery doivent-ils inclure les dépendances externes ?',
                        'explanation' => 'Une application peut être incapable de fonctionner si un service externe, DNS, identité ou réseau nécessaire reste indisponible.',
                        'choices' => [
                            ['choice_text' => 'Une reprise partielle peut échouer si une dépendance critique manque', 'is_correct' => true],
                            ['choice_text' => 'Les dépendances externes sont toujours disponibles', 'is_correct' => false],
                            ['choice_text' => 'Les services externes n’ont aucun impact', 'is_correct' => false],
                            ['choice_text' => 'Les tests doivent toujours être isolés du réel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un plan de reprise doit-il définir un ordre de restauration ?',
                        'explanation' => 'Les composants ont des dépendances et certains services doivent être restaurés avant d’autres.',
                        'choices' => [
                            ['choice_text' => 'Respecter les dépendances entre les composants critiques', 'is_correct' => true],
                            ['choice_text' => 'Choisir les services au hasard', 'is_correct' => false],
                            ['choice_text' => 'Éviter les priorités métier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les backups', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester la restauration de données et pas uniquement la disponibilité des serveurs ?',
                        'explanation' => 'Un serveur peut être disponible tout en contenant des données incohérentes ou incomplètes.',
                        'choices' => [
                            ['choice_text' => 'La disponibilité technique ne garantit pas l’intégrité et l’exploitabilité des données', 'is_correct' => true],
                            ['choice_text' => 'Les serveurs disponibles contiennent toujours des données correctes', 'is_correct' => false],
                            ['choice_text' => 'Les données ne nécessitent jamais de restauration', 'is_correct' => false],
                            ['choice_text' => 'Les backups garantissent automatiquement leur intégrité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie multi-région peut-elle améliorer la résilience ?',
                        'explanation' => 'Elle réduit la dépendance à une région unique et peut permettre une reprise après certains incidents régionaux.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance à un seul emplacement géographique', 'is_correct' => true],
                            ['choice_text' => 'Garantir une latence identique partout', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter les coûts supplémentaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer les résultats d’un exercice de reprise ?',
                        'explanation' => 'Les mesures permettent de vérifier le respect des objectifs RTO/RPO et d’identifier les écarts.',
                        'choices' => [
                            ['choice_text' => 'Comparer la capacité réelle de reprise aux objectifs définis', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le prochain exercice sera inutile', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les procédures', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute amélioration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Advanced — FinOps et optimisation opérationnelle',
                'description' => 'Analysez les coûts cloud, l’efficacité des ressources et les arbitrages performance-coût dans les environnements DevOps.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le coût par transaction peut-il être plus pertinent que le coût absolu d’un service ?',
                        'explanation' => 'Le coût unitaire permet de comparer l’efficacité économique lorsque le volume de transactions change.',
                        'choices' => [
                            ['choice_text' => 'Il relie directement le coût aux volumes réellement traités', 'is_correct' => true],
                            ['choice_text' => 'Il supprime les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Il garantit une rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement le CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une optimisation qui réduit les coûts mais dégrade fortement le SLO peut-elle être mauvaise ?',
                        'explanation' => 'Une économie technique peut entraîner une perte de valeur métier si le service devient moins fiable.',
                        'choices' => [
                            ['choice_text' => 'Le gain financier peut être inférieur à la valeur perdue par la dégradation du service', 'is_correct' => true],
                            ['choice_text' => 'Toute réduction de coût est toujours bénéfique', 'is_correct' => false],
                            ['choice_text' => 'Les SLO n’ont aucun rapport avec les coûts', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité n’a aucune valeur métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ressources sous-utilisées doivent-elles être identifiées régulièrement ?',
                        'explanation' => 'Des ressources surdimensionnées consomment de l’argent sans fournir suffisamment de valeur.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les coûts liés aux ressources inutilisées ou surdimensionnées', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les systèmes critiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une disponibilité absolue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’autoscaling ne garantit-il pas toujours un coût minimal ?',
                        'explanation' => 'Un mauvais seuil ou une charge instable peut provoquer du surprovisionnement ou des fluctuations coûteuses.',
                        'choices' => [
                            ['choice_text' => 'Une mauvaise configuration peut entraîner une surconsommation de ressources', 'is_correct' => true],
                            ['choice_text' => 'L’autoscaling est toujours optimal', 'is_correct' => false],
                            ['choice_text' => 'Le coût cloud est indépendant des ressources', 'is_correct' => false],
                            ['choice_text' => 'Le scaling ne change jamais le nombre d’instances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi taguer les ressources par équipe ou produit ?',
                        'explanation' => 'Les tags permettent notamment d’attribuer les dépenses à une équipe, un produit ou un environnement.',
                        'choices' => [
                            ['choice_text' => 'Attribuer les coûts et faciliter la responsabilisation', 'is_correct' => true],
                            ['choice_text' => 'Garantir la sécurité des ressources', 'is_correct' => false],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les budgets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer coût et valeur métier plutôt que coût seul ?',
                        'explanation' => 'Une solution plus chère peut être préférable si elle produit significativement plus de valeur ou réduit un risque critique.',
                        'choices' => [
                            ['choice_text' => 'Parce que le bon choix dépend du rapport entre coût, valeur et risque', 'is_correct' => true],
                            ['choice_text' => 'Parce que le coût est toujours secondaire', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur métier ne peut pas être mesurée', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les architectures ont la même valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les dépenses après une refonte d’architecture ?',
                        'explanation' => 'Une nouvelle architecture peut déplacer ou augmenter les coûts dans certains composants.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que l’impact financier réel correspond aux hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les coûts diminuent toujours', 'is_correct' => false],
                            ['choice_text' => 'Éviter les métriques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les ressources anciennes automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de stockage doivent-ils inclure les sauvegardes et réplications ?',
                        'explanation' => 'La consommation réelle inclut souvent les copies supplémentaires nécessaires à la résilience.',
                        'choices' => [
                            ['choice_text' => 'Parce que les copies de résilience représentent également des coûts', 'is_correct' => true],
                            ['choice_text' => 'Parce que les sauvegardes sont toujours gratuites', 'is_correct' => false],
                            ['choice_text' => 'Parce que la réplication ne stocke aucune donnée', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les backups', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une optimisation doit-elle être validée après son déploiement ?',
                        'explanation' => 'Une optimisation théorique peut avoir des effets inattendus sur performances, coûts ou fiabilité.',
                        'choices' => [
                            ['choice_text' => 'Vérifier son impact réel sur coûts, performances et fiabilité', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’optimisation sera toujours permanente', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mesure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi FinOps est-il pertinent pour une équipe DevOps ?',
                        'explanation' => 'Les équipes DevOps influencent directement l’architecture, l’automatisation et l’utilisation des ressources cloud.',
                        'choices' => [
                            ['choice_text' => 'Les décisions d’architecture et d’exploitation influencent directement les coûts', 'is_correct' => true],
                            ['choice_text' => 'DevOps ne gère jamais de ressources cloud', 'is_correct' => false],
                            ['choice_text' => 'Les coûts sont exclusivement financiers', 'is_correct' => false],
                            ['choice_text' => 'L’optimisation des coûts n’a aucun rapport avec l’infrastructure', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Advanced — Architecture DevOps professionnelle',
                'description' => 'Évaluez les compétences avancées pour concevoir des plateformes DevOps fiables, sécurisées et évolutives.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel principe caractérise une plateforme DevOps mature ?',
                        'explanation' => 'Une plateforme mature fournit des chemins sécurisés, reproductibles et automatisés pour développer et déployer.',
                        'choices' => [
                            ['choice_text' => 'Elle fournit des workflows reproductibles, observables, sécurisés et automatisés', 'is_correct' => true],
                            ['choice_text' => 'Elle dépend principalement d’opérations manuelles', 'is_correct' => false],
                            ['choice_text' => 'Elle évite toute standardisation', 'is_correct' => false],
                            ['choice_text' => 'Elle privilégie toujours la complexité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme DevOps doit-elle fournir des golden paths ?',
                        'explanation' => 'Les golden paths proposent des modèles standards permettant aux équipes de déployer rapidement tout en respectant les bonnes pratiques.',
                        'choices' => [
                            ['choice_text' => 'Fournir un chemin standard et sécurisé pour les usages courants', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute personnalisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les développeurs', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les projets utilisent exactement le même code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture DevOps doit-elle limiter le blast radius ?',
                        'explanation' => 'Une panne ou compromission dans un composant ne devrait pas affecter l’ensemble de la plateforme.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’étendue des conséquences d’une panne ou compromission', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les dépendances entre services', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les environnements', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les composants critiques doivent-ils avoir des ownerships clairement définis ?',
                        'explanation' => 'Lorsqu’un incident ou changement survient, il faut savoir qui est responsable de la maintenance et de la décision.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la maintenance, la décision et la réponse aux incidents', 'is_correct' => true],
                            ['choice_text' => 'Empêcher la collaboration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les plateformes DevOps doivent-elles être self-service avec des garde-fous ?',
                        'explanation' => 'Le self-service accélère les équipes tandis que les contrôles empêchent les usages dangereux ou non conformes.',
                        'choices' => [
                            ['choice_text' => 'Combiner autonomie des équipes et respect des contrôles nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Donner tous les privilèges aux utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les déploiements autonomes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’observabilité doit-elle être intégrée à la plateforme plutôt qu’ajoutée uniquement après incident ?',
                        'explanation' => 'Une visibilité disponible dès le départ permet de détecter et diagnostiquer plus rapidement les problèmes.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre les systèmes observables dès leur mise en production', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter les métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles de conformité doivent-ils être automatisés lorsque possible ?',
                        'explanation' => 'L’automatisation permet d’appliquer continuellement les politiques et de détecter rapidement les écarts.',
                        'choices' => [
                            ['choice_text' => 'Appliquer les politiques de façon cohérente et continue', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les audits humains', 'is_correct' => false],
                            ['choice_text' => 'Garantir une conformité parfaite pour toujours', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute évolution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les plateformes doivent-elles offrir un mécanisme de rollback fiable ?',
                        'explanation' => 'Les changements sont inévitables et certains peuvent échouer. Une restauration rapide réduit l’impact.',
                        'choices' => [
                            ['choice_text' => 'Réduire rapidement l’impact d’un changement défaillant', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute release', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les versions précédentes', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune release n’échouera', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer developer experience dans une plateforme DevOps ?',
                        'explanation' => 'Une plateforme techniquement performante mais difficile à utiliser peut ralentir les équipes et encourager des contournements.',
                        'choices' => [
                            ['choice_text' => 'Identifier les obstacles qui ralentissent les équipes et favorisent les contournements', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les métriques de production', 'is_correct' => false],
                            ['choice_text' => 'Éviter l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur critère pour évaluer une plateforme DevOps ?',
                        'explanation' => 'Une plateforme doit permettre aux équipes de livrer efficacement tout en maintenant sécurité, fiabilité et gouvernance.',
                        'choices' => [
                            ['choice_text' => 'La capacité à accélérer la livraison tout en maintenant sécurité et fiabilité', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’outils intégrés uniquement', 'is_correct' => false],
                            ['choice_text' => 'La quantité maximale de configuration possible', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de serveurs utilisés', 'is_correct' => false],
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