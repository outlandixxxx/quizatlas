<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DevOpsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'devops')->firstOrFail();

        $quizzes = [
            [
                'title' => 'DevOps Professional — Platform Engineering',
                'description' => 'Évaluez la conception de plateformes DevOps internes, les golden paths, la standardisation et la gouvernance.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une Internal Developer Platform ?',
                        'explanation' => 'Une plateforme interne doit simplifier les parcours de livraison tout en intégrant les standards de sécurité, fiabilité et gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Offrir aux équipes des chemins self-service standardisés et sécurisés', 'is_correct' => true],
                            ['choice_text' => 'Forcer toutes les équipes à utiliser exactement le même code', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute responsabilité des développeurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les outils de développement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les golden paths sont-ils utiles dans une plateforme DevOps ?',
                        'explanation' => 'Ils fournissent une approche recommandée pour les cas courants et réduisent la nécessité pour chaque équipe de reconstruire les mêmes pratiques.',
                        'choices' => [
                            ['choice_text' => 'Fournir des parcours recommandés, reproductibles et conformes aux standards', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute personnalisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun incident ne se produira', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme DevOps doit-elle être conçue comme un produit ?',
                        'explanation' => 'Les utilisateurs de la plateforme ont des besoins qui évoluent. Une approche produit favorise l’écoute, les métriques et l’amélioration continue.',
                        'choices' => [
                            ['choice_text' => 'Pour améliorer continuellement l’expérience et la valeur fournie aux équipes', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter tout changement de plateforme', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le support', 'is_correct' => false],
                            ['choice_text' => 'Pour imposer un seul workflow sans feedback', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le temps nécessaire à une équipe pour créer un environnement ?',
                        'explanation' => 'Ce délai révèle les frictions du parcours développeur et permet d’identifier les opportunités d’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Identifier les frictions et mesurer l’amélioration du self-service', 'is_correct' => true],
                            ['choice_text' => 'Garantir une disponibilité de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les métriques de production', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme self-service doit-elle intégrer des garde-fous ?',
                        'explanation' => 'Le self-service accélère les équipes, mais certaines actions peuvent créer des risques de sécurité, conformité ou coûts.',
                        'choices' => [
                            ['choice_text' => 'Permettre l’autonomie tout en limitant les usages dangereux', 'is_correct' => true],
                            ['choice_text' => 'Donner des privilèges administrateur à tous', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les équipes de déployer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ownership des composants de plateforme doit-il être explicite ?',
                        'explanation' => 'Un ownership clair permet de savoir qui maintient chaque composant et qui intervient lorsqu’un problème survient.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la maintenance, le support et la résolution des incidents', 'is_correct' => true],
                            ['choice_text' => 'Empêcher la collaboration entre équipes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme doit-elle masquer la complexité inutile aux développeurs ?',
                        'explanation' => 'L’abstraction permet aux développeurs de se concentrer sur leur produit tout en laissant la plateforme gérer les détails répétitifs.',
                        'choices' => [
                            ['choice_text' => 'Réduire la charge cognitive et accélérer les tâches courantes', 'is_correct' => true],
                            ['choice_text' => 'Cacher tous les problèmes opérationnels', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les développeurs de comprendre les systèmes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi standardiser les templates de services ?',
                        'explanation' => 'Les templates peuvent fournir une structure commune avec des contrôles déjà intégrés.',
                        'choices' => [
                            ['choice_text' => 'Réduire le temps de démarrage et intégrer les bonnes pratiques dès le départ', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les équipes de tester de nouvelles idées', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les pipelines', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro défaut logiciel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’une plateforme devient trop complexe ?',
                        'explanation' => 'Une plateforme trop complexe peut devenir elle-même un obstacle et augmenter la charge cognitive des utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Elle peut devenir une nouvelle source de friction et de dette opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Elle devient automatiquement plus fiable', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les incidents', 'is_correct' => false],
                            ['choice_text' => 'Elle nécessite moins de documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un bon indicateur de succès d’une plateforme DevOps interne ?',
                        'explanation' => 'L’adoption, le temps de mise en production, la réduction de friction et la fiabilité sont plus utiles que le simple nombre de fonctionnalités.',
                        'choices' => [
                            ['choice_text' => 'L’amélioration mesurable du delivery et de l’expérience des équipes', 'is_correct' => true],
                            ['choice_text' => 'Le nombre maximal d’outils intégrés', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de serveurs administrés uniquement', 'is_correct' => false],
                            ['choice_text' => 'La quantité de documentation produite', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Professional — SRE et fiabilité',
                'description' => 'Évaluez les pratiques professionnelles de Site Reliability Engineering, SLO, error budgets et gestion de la fiabilité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les SLO doivent-ils être définis avant de construire des alertes complexes ?',
                        'explanation' => 'Les SLO définissent ce que signifie un service suffisamment fiable et donnent un cadre aux alertes.',
                        'choices' => [
                            ['choice_text' => 'Ils fournissent une définition mesurable de la fiabilité attendue', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent tous les dashboards', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Ils éliminent le besoin de logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un error budget ?',
                        'explanation' => 'Il quantifie le niveau de dégradation acceptable associé à un SLO et facilite les arbitrages entre vitesse et fiabilité.',
                        'choices' => [
                            ['choice_text' => 'Équilibrer le rythme de changement avec le niveau de fiabilité attendu', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune erreur ne sera tolérée', 'is_correct' => false],
                            ['choice_text' => 'Mesurer les coûts cloud uniquement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un service peut-il respecter son SLO tout en ayant quelques erreurs importantes ?',
                        'explanation' => 'Un SLO agrège un comportement sur une période ou une population et peut donc masquer des incidents localisés.',
                        'choices' => [
                            ['choice_text' => 'Une moyenne ou agrégation peut masquer des événements rares mais graves', 'is_correct' => true],
                            ['choice_text' => 'Les SLO détectent toujours chaque problème individuel', 'is_correct' => false],
                            ['choice_text' => 'Un SLO élimine les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs individuelles n’existent pas dans les systèmes distribués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les alertes devraient-elles limiter la fatigue opérationnelle ?',
                        'explanation' => 'Des alertes trop fréquentes ou non actionnables réduisent l’attention portée aux incidents réellement importants.',
                        'choices' => [
                            ['choice_text' => 'Pour préserver l’attention des équipes sur les problèmes nécessitant une action', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les incidents', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire les métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les toil operations doivent-elles être identifiées dans une organisation SRE ?',
                        'explanation' => 'La toil est le travail opérationnel répétitif et automatisable qui consomme du temps sans créer suffisamment de valeur durable.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier le travail répétitif pouvant être automatisé ou réduit', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute opération humaine', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le nombre d’astreintes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les équipes de corriger les incidents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une équipe SRE doit-elle mesurer le MTTR ?',
                        'explanation' => 'Le MTTR donne un indicateur de la rapidité moyenne avec laquelle un service est restauré après incident.',
                        'choices' => [
                            ['choice_text' => 'Évaluer l’efficacité des processus de détection et de récupération', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement les coûts cloud', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les SLO', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exercices de failure injection peuvent-ils être utiles ?',
                        'explanation' => 'Ils permettent de tester la résilience dans des conditions contrôlées avant qu’une panne réelle ne révèle une faiblesse.',
                        'choices' => [
                            ['choice_text' => 'Tester les mécanismes de résilience avant un incident réel', 'is_correct' => true],
                            ['choice_text' => 'Créer volontairement des pannes sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le service level objective doit-il rester lié à la valeur métier ?',
                        'explanation' => 'Une fiabilité technique extrême peut coûter beaucoup sans produire de valeur supplémentaire si elle dépasse les besoins réels.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter d’investir dans une fiabilité disproportionnée par rapport à sa valeur', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les objectifs techniques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une performance maximale', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les métriques utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les incidents récurrents plutôt que seulement les résoudre un par un ?',
                        'explanation' => 'Les répétitions signalent souvent une cause structurelle qui doit être traitée durablement.',
                        'choices' => [
                            ['choice_text' => 'Identifier et éliminer les causes systémiques', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’un incident ne se reproduira jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les postmortems SRE doivent-ils déboucher sur des actions mesurables ?',
                        'explanation' => 'Une action clairement définie et suivie permet de transformer l’apprentissage d’un incident en amélioration concrète.',
                        'choices' => [
                            ['choice_text' => 'Transformer l’apprentissage en changements vérifiables', 'is_correct' => true],
                            ['choice_text' => 'Créer davantage de documents sans suivi', 'is_correct' => false],
                            ['choice_text' => 'Attribuer systématiquement une faute', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les historiques d’incidents', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Professional — DevSecOps et gouvernance',
                'description' => 'Maîtrisez l’intégration de la sécurité, la gestion des secrets, la conformité et la supply chain.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principe central de DevSecOps ?',
                        'explanation' => 'La sécurité devient une responsabilité partagée et intégrée dans le cycle de livraison.',
                        'choices' => [
                            ['choice_text' => 'Intégrer les contrôles de sécurité dans tout le cycle DevOps', 'is_correct' => true],
                            ['choice_text' => 'Confier toute la sécurité uniquement à la fin du projet', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les équipes de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Éviter les automatisations de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion centralisée des secrets est-elle importante ?',
                        'explanation' => 'Elle permet de contrôler l’accès, la rotation, l’audit et le cycle de vie des secrets.',
                        'choices' => [
                            ['choice_text' => 'Contrôler le stockage, l’accès, la rotation et la traçabilité des secrets', 'is_correct' => true],
                            ['choice_text' => 'Permettre à tous les développeurs de voir tous les secrets', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le principe du moindre privilège doit-il être appliqué aux pipelines ?',
                        'explanation' => 'Un pipeline compromis peut devenir un point d’entrée vers les environnements et ressources auxquels il peut accéder.',
                        'choices' => [
                            ['choice_text' => 'Limiter le rayon d’impact d’une compromission de la chaîne de livraison', 'is_correct' => true],
                            ['choice_text' => 'Donner tous les droits au pipeline', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout déploiement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles d’identité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la supply chain logicielle doit-elle être surveillée ?',
                        'explanation' => 'Des dépendances, images, plugins ou outils compromis peuvent introduire des risques en amont du code métier.',
                        'choices' => [
                            ['choice_text' => 'Réduire les risques provenant des composants et outils externes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dépendances tierces sont toujours sûres', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les bibliothèques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout contrôle de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi signer les artefacts de production ?',
                        'explanation' => 'La signature permet de vérifier qu’un artefact provient d’une source attendue et n’a pas été altéré depuis sa signature.',
                        'choices' => [
                            ['choice_text' => 'Vérifier l’intégrité et l’origine attendue d’un artefact', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence totale de vulnérabilités', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les scans de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Éviter le versioning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exceptions de conformité doivent-elles avoir une durée de validité ?',
                        'explanation' => 'Une exception sans expiration peut devenir permanente et créer une faiblesse durable.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une exception temporaire devienne une dérogation permanente', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute dérogation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les audits', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que la conformité est parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer des policy-as-code controls dans les pipelines ?',
                        'explanation' => 'Les politiques automatisées permettent de détecter ou bloquer des configurations non conformes avant le déploiement.',
                        'choices' => [
                            ['choice_text' => 'Appliquer automatiquement certains standards de sécurité et conformité', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les revues humaines dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro vulnérabilité', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les dépendances transitives ?',
                        'explanation' => 'Une vulnérabilité peut provenir d’un composant indirectement introduit par une dépendance de premier niveau.',
                        'choices' => [
                            ['choice_text' => 'Une vulnérabilité peut se cacher dans une dépendance indirecte', 'is_correct' => true],
                            ['choice_text' => 'Les dépendances transitives ne sont jamais chargées', 'is_correct' => false],
                            ['choice_text' => 'Elles sont automatiquement supprimées', 'is_correct' => false],
                            ['choice_text' => 'Seules les dépendances directes peuvent être vulnérables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les credentials de production de ceux de développement ?',
                        'explanation' => 'Une compromission d’un environnement de développement ne doit pas automatiquement donner accès aux systèmes critiques.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque de propagation d’un compromis vers la production', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la rotation des secrets', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre à tous les développeurs d’accéder à la production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi auditer régulièrement les privilèges des comptes et services DevOps ?',
                        'explanation' => 'Les accès peuvent devenir excessifs au fil du temps et doivent rester alignés avec les besoins réels.',
                        'choices' => [
                            ['choice_text' => 'Détecter et retirer les permissions devenues inutiles', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les comptes actifs', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute traçabilité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Professional — Cloud Native et Kubernetes',
                'description' => 'Évaluez les compétences professionnelles nécessaires pour exploiter des plateformes cloud native à grande échelle.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un cluster Kubernetes de production doit-il avoir une stratégie de mise à jour contrôlée ?',
                        'explanation' => 'Les changements de version peuvent affecter les workloads, APIs, addons et mécanismes de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque de régression pendant les upgrades du cluster', 'is_correct' => true],
                            ['choice_text' => 'Éviter toutes les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun Pod ne redémarrera', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de compatibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les applications stateless sont-elles souvent plus simples à scaler horizontalement ?',
                        'explanation' => 'Les instances stateless ne dépendent généralement pas d’un état local persistant partagé entre les réplicas.',
                        'choices' => [
                            ['choice_text' => 'Les réplicas peuvent être ajoutés sans devoir synchroniser un état local complexe', 'is_correct' => true],
                            ['choice_text' => 'Elles n’utilisent jamais de mémoire', 'is_correct' => false],
                            ['choice_text' => 'Elles n’utilisent aucun réseau', 'is_correct' => false],
                            ['choice_text' => 'Elles n’ont jamais besoin de stockage externe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les applications stateful exigent-elles une attention particulière dans Kubernetes ?',
                        'explanation' => 'Leur état persistant, la réplication et l’ordre de démarrage nécessitent souvent des mécanismes supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Leur état persistant introduit des contraintes de stockage et de coordination', 'is_correct' => true],
                            ['choice_text' => 'Elles ne peuvent jamais être déployées sur Kubernetes', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent pas utiliser de volumes', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toujours stateless', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les namespaces ne constituent-ils pas à eux seuls une frontière de sécurité complète ?',
                        'explanation' => 'Ils fournissent surtout une séparation logique ; d’autres contrôles comme RBAC et NetworkPolicies restent nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Ils doivent être combinés avec d’autres contrôles pour une isolation de sécurité solide', 'is_correct' => true],
                            ['choice_text' => 'Ils n’ont aucune utilité', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toutes les politiques réseau', 'is_correct' => false],
                            ['choice_text' => 'Ils chiffrent automatiquement les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ressources Kubernetes doivent-elles être monitorées au niveau application et cluster ?',
                        'explanation' => 'Une défaillance peut venir du workload lui-même ou d’une contrainte au niveau du nœud ou du cluster.',
                        'choices' => [
                            ['choice_text' => 'Les problèmes peuvent apparaître au niveau du workload ou de l’infrastructure sous-jacente', 'is_correct' => true],
                            ['choice_text' => 'Le cluster et les applications sont toujours indépendants', 'is_correct' => false],
                            ['choice_text' => 'Le monitoring application suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Le cluster ne possède aucune métrique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des admission controls dans un cluster ?',
                        'explanation' => 'Ils permettent de valider ou modifier certaines ressources avant leur acceptation par l’API.',
                        'choices' => [
                            ['choice_text' => 'Appliquer des règles et politiques avant l’acceptation des ressources', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des machines physiques', 'is_correct' => false],
                            ['choice_text' => 'Remplacer RBAC', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les manifests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets Kubernetes doivent-ils être protégés au niveau du stockage et des accès ?',
                        'explanation' => 'Le stockage d’un secret ne suffit pas ; les permissions et protections du backend sont essentielles.',
                        'choices' => [
                            ['choice_text' => 'Limiter à la fois l’exposition des données et les personnes ou services pouvant y accéder', 'is_correct' => true],
                            ['choice_text' => 'Parce que les Secrets sont automatiquement chiffrés dans tous les environnements', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre un accès global', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer RBAC', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déploiement Kubernetes doit-il être observable avant d’être considéré comme production-ready ?',
                        'explanation' => 'Sans métriques, logs et traces adaptés, il devient difficile de détecter ou diagnostiquer les problèmes après mise en production.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir détecter et diagnostiquer les problèmes en production', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests de staging', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des resource requests réalistes ?',
                        'explanation' => 'Des requests trop faibles peuvent conduire à la contention tandis que des requests trop élevées réduisent l’efficacité du scheduling.',
                        'choices' => [
                            ['choice_text' => 'Éviter à la fois la sous-allocation et la sur-allocation de ressources', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les Pods utilisent toujours leur maximum', 'is_correct' => false],
                            ['choice_text' => 'Empêcher le scheduler de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’autoscaling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques réseau doivent-elles suivre le principe du moindre accès ?',
                        'explanation' => 'Les workloads ne devraient communiquer qu’avec les services nécessaires à leur fonctionnement.',
                        'choices' => [
                            ['choice_text' => 'Réduire les chemins de communication inutiles et la surface d’attaque', 'is_correct' => true],
                            ['choice_text' => 'Permettre tous les flux internes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les services Kubernetes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une isolation physique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Professional — FinOps et stratégie cloud',
                'description' => 'Maîtrisez les arbitrages professionnels entre coût, fiabilité, performance et valeur métier dans le cloud.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le coût total d’un service doit-il inclure les ressources de reprise et de monitoring ?',
                        'explanation' => 'Les mécanismes nécessaires au niveau de fiabilité attendu font partie du coût réel du service.',
                        'choices' => [
                            ['choice_text' => 'Parce que la résilience et l’observabilité ont également un coût opérationnel', 'is_correct' => true],
                            ['choice_text' => 'Parce que le monitoring est toujours le coût principal', 'is_correct' => false],
                            ['choice_text' => 'Parce que les backups sont gratuits', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts réseau n’existent pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’optimisation des coûts doit-elle respecter les SLO ?',
                        'explanation' => 'Réduire les ressources au-delà du niveau compatible avec le SLO peut transformer une économie en dégradation du service.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une réduction de coût dégrade le niveau de service attendu', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir le coût minimal absolu', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les SLO', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les métriques métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle de tagging cloud doit-il être standardisé ?',
                        'explanation' => 'Des conventions cohérentes permettent d’automatiser l’allocation des coûts, le reporting et certaines politiques.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’attribution des coûts et l’automatisation de la gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Garantir la sécurité de toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les budgets', 'is_correct' => false],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le coût par transaction ou par utilisateur ?',
                        'explanation' => 'Une métrique unitaire permet de suivre l’efficacité économique même lorsque le volume change.',
                        'choices' => [
                            ['choice_text' => 'Évaluer l’efficacité économique indépendamment du volume global', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une croissance du revenu', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les SLO', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ressources surdimensionnées représentent-elles un problème à long terme ?',
                        'explanation' => 'Elles augmentent les dépenses et peuvent masquer les besoins réels en capacité.',
                        'choices' => [
                            ['choice_text' => 'Elles consomment des ressources sans produire de valeur proportionnelle', 'is_correct' => true],
                            ['choice_text' => 'Elles réduisent toujours la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toujours nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent un coût minimal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût doit-il être associé à la consommation réelle ?',
                        'explanation' => 'Comparer dépenses et usage permet de détecter des services coûteux sans proportion avec leur utilisation.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les inefficacités et opportunités d’optimisation', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter les métriques techniques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro dépense', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les environnements de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture moins chère n’est-elle pas automatiquement meilleure ?',
                        'explanation' => 'Elle peut avoir une disponibilité, performance ou sécurité insuffisante.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire les coûts au prix d’un niveau de service ou de sécurité insuffisant', 'is_correct' => true],
                            ['choice_text' => 'Le coût est toujours le seul critère pertinent', 'is_correct' => false],
                            ['choice_text' => 'Les architectures moins chères sont toujours moins performantes', 'is_correct' => false],
                            ['choice_text' => 'La valeur métier n’a aucun rôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le coût des environnements temporaires ?',
                        'explanation' => 'Les environnements créés pour les tests ou pull requests peuvent s’accumuler et générer des coûts importants.',
                        'choices' => [
                            ['choice_text' => 'Identifier les ressources temporaires qui restent actives inutilement', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro coût de test', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les environnements temporaires', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les pipelines', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions FinOps doivent-elles être collaboratives ?',
                        'explanation' => 'Les coûts résultent des choix de développement, infrastructure, sécurité, architecture et produit.',
                        'choices' => [
                            ['choice_text' => 'Les décisions de coûts sont influencées par plusieurs équipes et choix techniques', 'is_correct' => true],
                            ['choice_text' => 'Les coûts sont uniquement une responsabilité financière', 'is_correct' => false],
                            ['choice_text' => 'Les développeurs n’influencent jamais les dépenses cloud', 'is_correct' => false],
                            ['choice_text' => 'Les équipes infrastructure n’ont aucune influence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur critère pour choisir entre deux architectures cloud ?',
                        'explanation' => 'Le choix doit considérer coût, performance, fiabilité, sécurité, complexité et valeur métier.',
                        'choices' => [
                            ['choice_text' => 'Le meilleur compromis entre coût, fiabilité, performance, sécurité et valeur', 'is_correct' => true],
                            ['choice_text' => 'Le coût le plus faible uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le plus grand nombre de services utilisés', 'is_correct' => false],
                            ['choice_text' => 'La technologie la plus récente uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Professional — Leadership, processus et amélioration continue',
                'description' => 'Évaluez la capacité à diriger des pratiques DevOps, améliorer les flux de livraison et instaurer une culture de fiabilité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi mesurer le lead time for changes ?',
                        'explanation' => 'Le lead time permet de comprendre combien de temps s’écoule entre une modification et sa mise à disposition.',
                        'choices' => [
                            ['choice_text' => 'Mesurer la rapidité du flux entre changement et livraison', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement la disponibilité serveur', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro bug', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer deployment frequency ?',
                        'explanation' => 'La fréquence de déploiement indique la capacité de l’organisation à livrer régulièrement.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la capacité de l’organisation à livrer régulièrement', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement le coût cloud', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure qualité automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le change failure rate est-il important ?',
                        'explanation' => 'Il mesure la proportion de changements qui entraînent des incidents ou nécessitent une correction.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la proportion de changements provoquant des problèmes en production', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement la vitesse de build', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro régression', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests automatisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi chercher simultanément à améliorer fréquence de livraison et taux de succès ?',
                        'explanation' => 'Livrer vite sans fiabilité crée de l’instabilité, tandis qu’être très fiable mais extrêmement lent limite la valeur délivrée.',
                        'choices' => [
                            ['choice_text' => 'Chercher un équilibre entre vitesse de livraison et stabilité', 'is_correct' => true],
                            ['choice_text' => 'Maximiser uniquement la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Maximiser uniquement le nombre de validations manuelles', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mesure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les équipes doivent-elles traiter les causes systémiques des incidents ?',
                        'explanation' => 'Corriger uniquement l’erreur immédiate permet parfois au problème de revenir dans une autre situation.',
                        'choices' => [
                            ['choice_text' => 'Réduire la probabilité de répétition du problème', 'is_correct' => true],
                            ['choice_text' => 'Éviter les postmortems', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident futur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amélioration continue doit-elle utiliser des données ?',
                        'explanation' => 'Les métriques permettent de vérifier si un changement produit réellement une amélioration.',
                        'choices' => [
                            ['choice_text' => 'Mesurer objectivement les effets des changements de processus', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toute expertise humaine', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’une métrique est toujours parfaite', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute expérimentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les équipes doivent-elles avoir un ownership clair des services ?',
                        'explanation' => 'Un propriétaire clairement identifié facilite les décisions, les maintenances et la gestion des incidents.',
                        'choices' => [
                            ['choice_text' => 'Savoir qui est responsable du service et de ses résultats opérationnels', 'is_correct' => true],
                            ['choice_text' => 'Centraliser tous les services chez une seule personne', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les équipes de collaborer', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter une culture de blâme après un incident ?',
                        'explanation' => 'Le blâme peut réduire la transparence et empêcher l’identification honnête des causes systémiques.',
                        'choices' => [
                            ['choice_text' => 'Favoriser l’apprentissage et la remontée des problèmes réels', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute responsabilité', 'is_correct' => false],
                            ['choice_text' => 'Éviter les améliorations', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réduire les handoffs entre équipes ?',
                        'explanation' => 'Chaque transfert ajoute de l’attente, du contexte perdu et des risques de malentendu.',
                        'choices' => [
                            ['choice_text' => 'Réduire les délais, pertes de contexte et erreurs de communication', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les spécialisations', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les revues', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un bon objectif pour une transformation DevOps ?',
                        'explanation' => 'La transformation doit améliorer le flux de valeur, la fiabilité et l’expérience des équipes plutôt que simplement ajouter des outils.',
                        'choices' => [
                            ['choice_text' => 'Améliorer durablement le flux de valeur, la fiabilité et l’expérience des équipes', 'is_correct' => true],
                            ['choice_text' => 'Acheter davantage d’outils', 'is_correct' => false],
                            ['choice_text' => 'Automatiser tout sans mesurer les résultats', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les procédures', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Professional — Résilience et stratégie de production',
                'description' => 'Maîtrisez la conception de systèmes de production résilients, les stratégies de déploiement et la continuité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les architectures de production critiques doivent-elles limiter les Single Points of Failure ?',
                        'explanation' => 'Un composant unique peut interrompre tout le service lorsqu’il tombe en panne.',
                        'choices' => [
                            ['choice_text' => 'Pour empêcher qu’une seule panne provoque une interruption globale', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les coûts sans bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’observabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les mécanismes de failover doivent-ils être testés en conditions réalistes ?',
                        'explanation' => 'Des dépendances ou erreurs de configuration peuvent empêcher une bascule qui semble correcte sur le papier.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que la reprise fonctionne réellement avec toutes ses dépendances', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les systèmes redondants', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro incident futur', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rollback rapide est-il une capacité stratégique ?',
                        'explanation' => 'La possibilité de restaurer rapidement une version stable réduit le temps pendant lequel un mauvais changement affecte les utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Réduire rapidement l’impact des changements défaillants', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les déploiements fréquents', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les versions précédentes', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les changements sont toujours corrects', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances critiques doivent-elles être identifiées avant une stratégie de reprise ?',
                        'explanation' => 'Un service peut être restauré correctement mais rester indisponible si une dépendance essentielle ne l’est pas.',
                        'choices' => [
                            ['choice_text' => 'Pour garantir qu’une reprise partielle peut réellement restaurer le service', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher l’automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture active-active peut-elle être complexe ?',
                        'explanation' => 'Elle nécessite notamment la gestion de cohérence des données, du routage et des états partagés.',
                        'choices' => [
                            ['choice_text' => 'La coordination, la cohérence et le routage peuvent devenir complexes', 'is_correct' => true],
                            ['choice_text' => 'Elle n’utilise jamais de réseau', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute réplication', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit automatiquement zéro downtime', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système de production doit-il avoir des health checks orientés métier lorsqu’ils sont possibles ?',
                        'explanation' => 'Un service peut répondre techniquement tout en étant incapable d’effectuer une opération métier essentielle.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que le service fonctionne réellement du point de vue utilisateur', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les tests applicatifs', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur métier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques techniques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la résilience doit-elle inclure les dépendances externes ?',
                        'explanation' => 'Une application dépendant d’un service externe peut devenir indisponible même si son propre cluster fonctionne correctement.',
                        'choices' => [
                            ['choice_text' => 'Une panne externe peut rendre le service principal indisponible', 'is_correct' => true],
                            ['choice_text' => 'Les dépendances externes sont toujours disponibles', 'is_correct' => false],
                            ['choice_text' => 'Les applications modernes ne dépendent jamais d’autres services', 'is_correct' => false],
                            ['choice_text' => 'Le réseau n’affecte pas les services distribués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les timeouts et retries doivent-ils être conçus ensemble ?',
                        'explanation' => 'Des retries excessifs combinés à des timeouts longs peuvent amplifier les charges et prolonger une panne.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une stratégie de récupération amplifie la panne', 'is_correct' => true],
                            ['choice_text' => 'Parce que les retries remplacent toujours les timeouts', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que chaque requête réussira', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute résilience', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des circuit breakers dans les systèmes distribués ?',
                        'explanation' => 'Ils permettent de couper temporairement les appels vers une dépendance défaillante afin de protéger le reste du système.',
                        'choices' => [
                            ['choice_text' => 'Empêcher qu’une dépendance défaillante provoque une cascade de saturation', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la dépendance reviendra immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les backups', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la résilience doit-elle être considérée comme une propriété mesurable ?',
                        'explanation' => 'Des objectifs de disponibilité, récupération et tolérance aux pannes permettent de vérifier si l’architecture répond réellement aux besoins.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier objectivement si le système atteint ses objectifs de fiabilité', 'is_correct' => true],
                            ['choice_text' => 'Parce que la résilience ne peut jamais être testée', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les exercices de reprise', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les métriques opérationnelles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Professional — Stratégie et transformation',
                'description' => 'Évaluez votre capacité à piloter une transformation DevOps au niveau organisationnel et à mesurer sa valeur.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le meilleur point de départ pour une transformation DevOps ?',
                        'explanation' => 'La transformation doit commencer par les problèmes du flux de valeur et les objectifs métier plutôt que par l’achat d’outils.',
                        'choices' => [
                            ['choice_text' => 'Identifier les objectifs métier et les principaux obstacles du flux de livraison', 'is_correct' => true],
                            ['choice_text' => 'Choisir une plateforme avant toute analyse', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les équipes', 'is_correct' => false],
                            ['choice_text' => 'Déployer Kubernetes partout immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’adoption d’outils DevOps ne garantit-elle pas une transformation réussie ?',
                        'explanation' => 'Les outils n’éliminent pas automatiquement les problèmes de culture, processus, ownership ou architecture.',
                        'choices' => [
                            ['choice_text' => 'Les outils ne suffisent pas à changer les processus et comportements organisationnels', 'is_correct' => true],
                            ['choice_text' => 'Les outils ne sont jamais utiles', 'is_correct' => false],
                            ['choice_text' => 'Les équipes n’ont aucun impact sur DevOps', 'is_correct' => false],
                            ['choice_text' => 'Les pipelines remplacent les processus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi commencer une transformation par quelques services pilotes ?',
                        'explanation' => 'Les pilotes permettent de tester les pratiques, outils et modèles avant de les étendre.',
                        'choices' => [
                            ['choice_text' => 'Apprendre à petite échelle avant de généraliser', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute mesure', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les services sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les équipes de participer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer la performance du delivery avant et après une transformation ?',
                        'explanation' => 'Les métriques permettent de vérifier si les investissements ont réellement amélioré le flux de livraison.',
                        'choices' => [
                            ['choice_text' => 'Mesurer objectivement l’impact réel de la transformation', 'is_correct' => true],
                            ['choice_text' => 'Garantir une amélioration sur toutes les métriques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les feedbacks des équipes', 'is_correct' => false],
                            ['choice_text' => 'Éviter les expérimentations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’architecture organisationnelle peut-elle influencer DevOps ?',
                        'explanation' => 'Les structures d’équipes et leurs frontières influencent directement la communication, les dépendances et les délais.',
                        'choices' => [
                            ['choice_text' => 'Les frontières organisationnelles peuvent créer des dépendances et ralentir le flux', 'is_correct' => true],
                            ['choice_text' => 'L’organisation n’a aucun impact technique', 'is_correct' => false],
                            ['choice_text' => 'Les équipes n’ont jamais besoin de coordination', 'is_correct' => false],
                            ['choice_text' => 'Les outils résolvent toujours les problèmes organisationnels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une transformation DevOps doit-elle inclure la formation ?',
                        'explanation' => 'Les nouvelles pratiques exigent de nouvelles compétences et une compréhension commune des outils et processus.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux équipes d’adopter efficacement les nouvelles pratiques', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les experts', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les objectifs DevOps doivent-ils rester mesurables ?',
                        'explanation' => 'Des objectifs quantifiables permettent de déterminer si une initiative produit les résultats attendus.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier objectivement la progression et l’impact', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les objectifs qualitatifs', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir des résultats parfaits', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les revues', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les métriques doivent-elles être interprétées dans leur contexte ?',
                        'explanation' => 'Une métrique améliorée peut masquer une dégradation ailleurs ou être influencée par un changement externe.',
                        'choices' => [
                            ['choice_text' => 'Une métrique isolée ne représente pas nécessairement toute la situation', 'is_correct' => true],
                            ['choice_text' => 'Les métriques sont toujours fausses', 'is_correct' => false],
                            ['choice_text' => 'Le contexte n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Une métrique suffit toujours pour une décision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amélioration continue doit-elle inclure les retours des développeurs et opérateurs ?',
                        'explanation' => 'Les utilisateurs internes de la plateforme et des processus connaissent les frictions quotidiennes qui ne sont pas visibles dans toutes les métriques.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les problèmes réels vécus par les équipes', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer toutes les métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les changements', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur signe d’une transformation DevOps durable ?',
                        'explanation' => 'Une transformation durable produit des pratiques intégrées au fonctionnement quotidien, mesurables et améliorées continuellement.',
                        'choices' => [
                            ['choice_text' => 'Les pratiques deviennent reproductibles, mesurées et intégrées au fonctionnement quotidien', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’outils augmente fortement', 'is_correct' => false],
                            ['choice_text' => 'Toutes les opérations deviennent manuelles', 'is_correct' => false],
                            ['choice_text' => 'Les équipes cessent de mesurer leur performance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Professional — Production et excellence opérationnelle',
                'description' => 'Maîtrisez les pratiques professionnelles nécessaires à l’exploitation fiable de services DevOps en production.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une production-ready checklist doit-elle inclure observabilité et rollback ?',
                        'explanation' => 'Un service doit être observable pour être exploitable et disposer d’un mécanisme de récupération lorsqu’un changement échoue.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir détecter les problèmes et récupérer rapidement après une régression', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher tout déploiement', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests de staging', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un service doit-il avoir une définition claire de son ownership en production ?',
                        'explanation' => 'L’ownership facilite la décision et la prise en charge des incidents et évolutions.',
                        'choices' => [
                            ['choice_text' => 'Pour savoir quelle équipe assume la responsabilité opérationnelle du service', 'is_correct' => true],
                            ['choice_text' => 'Pour centraliser toute l’entreprise dans une seule équipe', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute collaboration', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les runbooks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi chaque service critique devrait-il avoir un runbook ?',
                        'explanation' => 'Le runbook décrit les actions à effectuer dans les scénarios connus et réduit le temps de réaction.',
                        'choices' => [
                            ['choice_text' => 'Accélérer les interventions et réduire les erreurs lors des incidents', 'is_correct' => true],
                            ['choice_text' => 'Supprimer l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de reprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances d’un service doivent-elles être visibles dans les outils d’exploitation ?',
                        'explanation' => 'La visibilité des dépendances accélère l’analyse lorsqu’un service souffre d’un problème externe.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’identification rapide de la cause lorsqu’un composant dépendant échoue', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les dépendances sont toujours disponibles', 'is_correct' => false],
                            ['choice_text' => 'Éviter les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les changements de production doivent-ils être audités ?',
                        'explanation' => 'L’audit permet de retracer ce qui a changé, quand et par quel mécanisme.',
                        'choices' => [
                            ['choice_text' => 'Assurer la traçabilité et faciliter les investigations', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toutes les modifications', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’historique', 'is_correct' => false],
                            ['choice_text' => 'Garantir une stabilité parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de logs doit-elle inclure la rétention et la rotation ?',
                        'explanation' => 'Les logs sont précieux pour le diagnostic mais peuvent consommer beaucoup d’espace et nécessitent une gestion contrôlée.',
                        'choices' => [
                            ['choice_text' => 'Conserver les informations utiles sans laisser les logs saturer le stockage', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les logs rapidement', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les logs ne contiendront jamais de données sensibles', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les déploiements doivent-ils être observés avec des métriques avant et après changement ?',
                        'explanation' => 'Comparer les métriques permet d’identifier les impacts d’une version nouvelle.',
                        'choices' => [
                            ['choice_text' => 'Comparer le comportement du service et détecter les régressions', 'is_correct' => true],
                            ['choice_text' => 'Éviter les tests', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les changements sont bénéfiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les systèmes critiques doivent-ils être testés en cas de panne de dépendance ?',
                        'explanation' => 'La résilience d’un service dépend souvent de son comportement lorsque les composants externes deviennent indisponibles.',
                        'choices' => [
                            ['choice_text' => 'Vérifier le comportement du service lorsqu’une dépendance est indisponible', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les dépendances ne tomberont jamais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les mécanismes de fallback', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs utilisateur doivent-elles être distinguées des erreurs internes dans les métriques ?',
                        'explanation' => 'Les deux types peuvent avoir des causes et impacts différents et nécessitent des actions différentes.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux interpréter la qualité réelle du service et orienter le diagnostic', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les erreurs applicatives', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les dashboards', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro faux positif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe décrit le mieux l’excellence opérationnelle DevOps ?',
                        'explanation' => 'L’excellence opérationnelle combine livraison fréquente, fiabilité, sécurité, observabilité, automatisation et apprentissage continu.',
                        'choices' => [
                            ['choice_text' => 'Livrer rapidement tout en maintenant fiabilité, sécurité, observabilité et amélioration continue', 'is_correct' => true],
                            ['choice_text' => 'Maximiser uniquement la vitesse de livraison', 'is_correct' => false],
                            ['choice_text' => 'Maximiser uniquement le nombre d’outils', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute intervention ou mesure opérationnelle', 'is_correct' => false],
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