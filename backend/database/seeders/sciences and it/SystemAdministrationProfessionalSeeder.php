<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SystemAdministrationProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'System Administration Professional — Architecture et gouvernance',
                'description' => 'Évaluez votre capacité à concevoir et gouverner des infrastructures système robustes, maintenables et sécurisées.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel principe devrait guider la conception d’une infrastructure d’entreprise à grande échelle ?',
                        'explanation' => 'Une infrastructure professionnelle doit être conçue autour de la disponibilité, de la sécurité, de l’observabilité, de l’automatisation et de la maintenabilité.',
                        'choices' => [
                            ['choice_text' => 'Concevoir pour la résilience, la sécurité, l’observabilité et l’automatisation', 'is_correct' => true],
                            ['choice_text' => 'Maximiser uniquement le nombre de serveurs', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute standardisation', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement des opérations manuelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les standards d’infrastructure sont-ils importants à grande échelle ?',
                        'explanation' => 'Les standards réduisent la diversité inutile et facilitent le support, l’automatisation, la sécurité et le dépannage.',
                        'choices' => [
                            ['choice_text' => 'Réduire la complexité et faciliter l’exploitation à grande échelle', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute évolution technologique', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun serveur ne tombera jamais en panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les responsabilités entre équipes infrastructure, sécurité et réseau ?',
                        'explanation' => 'Une séparation claire des responsabilités améliore les contrôles, la spécialisation et la traçabilité, tout en conservant la collaboration.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la clarté des responsabilités et les contrôles', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute collaboration entre équipes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                            ['choice_text' => 'Donner tous les privilèges à une seule équipe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage d’une architecture d’administration centralisée lorsque le nombre de serveurs augmente fortement ?',
                        'explanation' => 'La centralisation de certaines capacités de gestion permet de standardiser les politiques, le monitoring, l’identité et l’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Standardiser certaines opérations et politiques sur l’ensemble du parc', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute autonomie locale', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les déploiements automatisés', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une infrastructure doit-elle être conçue pour le changement ?',
                        'explanation' => 'Les besoins, logiciels, menaces et contraintes évoluent. Une architecture trop rigide devient coûteuse et risquée à maintenir.',
                        'choices' => [
                            ['choice_text' => 'Parce que les besoins, technologies et risques évoluent dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce que les systèmes ne doivent jamais rester stables', 'is_correct' => false],
                            ['choice_text' => 'Parce que les configurations historiques sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les sauvegardes empêchent toute évolution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture doit-elle limiter les Single Points of Failure ?',
                        'explanation' => 'Un composant unique critique peut rendre le service indisponible en cas de panne.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’une seule panne interrompe tout le service', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le nombre de composants sans objectif', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les dépendances entre systèmes ?',
                        'explanation' => 'Les dépendances déterminent l’ordre de diagnostic, de redémarrage et de restauration lors d’un incident.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le diagnostic, la maintenance et la reprise après incident', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les systèmes de communiquer', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la disponibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important lorsqu’une infrastructure comporte plusieurs environnements ?',
                        'explanation' => 'La séparation développement, test, préproduction et production réduit le risque qu’un changement non validé affecte les systèmes critiques.',
                        'choices' => [
                            ['choice_text' => 'Séparer les environnements et contrôler les promotions entre eux', 'is_correct' => true],
                            ['choice_text' => 'Utiliser exactement les mêmes accès partout', 'is_correct' => false],
                            ['choice_text' => 'Permettre les changements directs en production', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gouvernance technique doit-elle être associée à des contrôles automatisés ?',
                        'explanation' => 'Les contrôles automatiques peuvent appliquer de manière continue les standards et détecter rapidement les écarts.',
                        'choices' => [
                            ['choice_text' => 'Pour appliquer et vérifier les standards de manière cohérente', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute responsabilité humaine', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la journalisation', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute modification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur reflète le mieux la maturité opérationnelle d’une infrastructure ?',
                        'explanation' => 'La maturité combine disponibilité, résilience, automatisation, sécurité, observabilité et capacité de récupération.',
                        'choices' => [
                            ['choice_text' => 'La capacité à exploiter et restaurer l’infrastructure de manière fiable et reproductible', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de serveurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de scripts sans tests', 'is_correct' => false],
                            ['choice_text' => 'La quantité de stockage disponible uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Professional — Linux à grande échelle',
                'description' => 'Approfondissez l’administration Linux professionnelle, la standardisation, le cycle de vie et l’exploitation de grands parcs.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi standardiser les distributions et versions Linux dans un parc important ?',
                        'explanation' => 'Réduire la diversité facilite le support, la gestion des correctifs, les tests et l’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Réduire la complexité du support et des opérations', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute mise à jour', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune application ne changera', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un cycle de vie OS doit-il être planifié ?',
                        'explanation' => 'Les versions arrivent en fin de support et peuvent cesser de recevoir des correctifs de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Éviter de maintenir des systèmes hors support et réduire les risques', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les migrations', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les anciens logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les packages doivent-ils être gérés de manière contrôlée ?',
                        'explanation' => 'Une version inattendue peut provoquer des incompatibilités ou des régressions.',
                        'choices' => [
                            ['choice_text' => 'Maintenir des versions cohérentes et limiter les incompatibilités', 'is_correct' => true],
                            ['choice_text' => 'Éviter tout patch de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les logiciels seront toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une configuration de référence pour les serveurs Linux ?',
                        'explanation' => 'Une baseline permet de comparer les systèmes et de détecter rapidement les dérives de configuration.',
                        'choices' => [
                            ['choice_text' => 'Définir un état attendu et identifier les écarts', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute personnalisation nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les fichiers de configuration', 'is_correct' => false],
                            ['choice_text' => 'Garantir une performance identique sur tous les workloads', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les configurations manuelles deviennent-elles problématiques à grande échelle ?',
                        'explanation' => 'Elles entraînent souvent des dérives entre serveurs et rendent les changements difficiles à reproduire.',
                        'choices' => [
                            ['choice_text' => 'Elles augmentent la dérive de configuration et les erreurs humaines', 'is_correct' => true],
                            ['choice_text' => 'Elles garantissent toujours une meilleure qualité', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent le système plus facilement auditable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le monitoring centralisé est-il utile sur un grand parc Linux ?',
                        'explanation' => 'Il offre une vue globale des performances, erreurs et anomalies et facilite la détection de tendances.',
                        'choices' => [
                            ['choice_text' => 'Obtenir une visibilité cohérente sur l’ensemble du parc', 'is_correct' => true],
                            ['choice_text' => 'Éviter les logs locaux dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de métriques', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi automatiser les patchs avec des vagues de déploiement ?',
                        'explanation' => 'Le déploiement progressif réduit le risque de propager une incompatibilité ou un défaut à l’ensemble du parc.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une mauvaise mise à jour avant généralisation', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute validation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les serveurs seront toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des golden images ou configurations de référence ?',
                        'explanation' => 'Elles permettent de reconstruire rapidement des systèmes cohérents et de standardiser les déploiements.',
                        'choices' => [
                            ['choice_text' => 'Accélérer la création de systèmes conformes à une baseline', 'is_correct' => true],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une gestion centralisée des comptes et identités Linux ?',
                        'explanation' => 'Elle simplifie le contrôle des accès, le cycle de vie des comptes et la révocation des permissions.',
                        'choices' => [
                            ['choice_text' => 'Centraliser l’authentification et la gestion du cycle de vie des accès', 'is_correct' => true],
                            ['choice_text' => 'Donner root à tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les groupes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute traçabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une procédure de décommissionnement est-elle importante pour les serveurs ?',
                        'explanation' => 'Un serveur retiré peut encore posséder des comptes, DNS, certificats, données ou accès qui doivent être supprimés proprement.',
                        'choices' => [
                            ['choice_text' => 'Éliminer proprement les dépendances, accès, données et configurations associées', 'is_correct' => true],
                            ['choice_text' => 'Garder tous les accès actifs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes correspondantes immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Professional — Identity and Access Management',
                'description' => 'Évaluez les pratiques professionnelles de gestion des identités, privilèges, authentification et accès.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le principe du moindre privilège est-il central dans l’IAM ?',
                        'explanation' => 'Limiter les permissions réduit l’impact potentiel d’un compte compromis ou d’une erreur humaine.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact potentiel des erreurs et compromissions', 'is_correct' => true],
                            ['choice_text' => 'Donner les permissions maximales à chaque utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les audits', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute segmentation des droits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rôles sont-ils souvent préférables à des permissions individuelles dispersées ?',
                        'explanation' => 'Les rôles permettent de gérer les droits par fonction et de simplifier le cycle de vie des accès.',
                        'choices' => [
                            ['choice_text' => 'Simplifier et standardiser l’attribution des permissions', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les permissions', 'is_correct' => false],
                            ['choice_text' => 'Donner automatiquement les droits root', 'is_correct' => false],
                            ['choice_text' => 'Éviter la révocation des accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les accès administratifs devraient-ils souvent être soumis à une authentification renforcée ?',
                        'explanation' => 'Une compromission d’un compte privilégié peut avoir un impact majeur.',
                        'choices' => [
                            ['choice_text' => 'Parce que les comptes privilégiés peuvent avoir un impact très important', 'is_correct' => true],
                            ['choice_text' => 'Parce que les comptes normaux ne peuvent jamais être compromis', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les comptes de service', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la journalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le cycle de vie des comptes doit-il être lié aux processus RH ou organisationnels ?',
                        'explanation' => 'L’arrivée, le changement de rôle et le départ des utilisateurs doivent déclencher les changements appropriés de droits.',
                        'choices' => [
                            ['choice_text' => 'Pour aligner les accès sur le statut réel des utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir des permissions permanentes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les révocations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les comptes de service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes orphelins représentent-ils un risque ?',
                        'explanation' => 'Un compte sans propriétaire ou justification claire peut rester actif et être exploité.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent conserver des accès sans responsable clairement identifié', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours désactivés automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais être compromis', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont aucune permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi auditer régulièrement les privilèges administratifs ?',
                        'explanation' => 'Les responsabilités évoluent et des permissions excessives peuvent s’accumuler au fil du temps.',
                        'choices' => [
                            ['choice_text' => 'Détecter et retirer les privilèges devenus inutiles', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les droits de tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les privilèges ne changent jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un accès just-in-time pour les privilèges élevés ?',
                        'explanation' => 'Le privilège n’est activé que pendant la période nécessaire, ce qui réduit l’exposition permanente.',
                        'choices' => [
                            ['choice_text' => 'Réduire la durée d’exposition aux privilèges élevés', 'is_correct' => true],
                            ['choice_text' => 'Donner des droits permanents', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute administration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi journaliser les actions privilégiées ?',
                        'explanation' => 'Les actions administratives doivent pouvoir être retracées pour le diagnostic, l’audit et les investigations.',
                        'choices' => [
                            ['choice_text' => 'Assurer la traçabilité des actions sensibles', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune erreur ne se produira', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les responsabilités', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les contrôles d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes de service doivent-ils avoir des permissions minimales ?',
                        'explanation' => 'Si une identité de service est compromise, ses permissions déterminent une partie de l’impact potentiel.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une compromission du service', 'is_correct' => true],
                            ['choice_text' => 'Permettre aux services d’accéder à tout', 'is_correct' => false],
                            ['choice_text' => 'Éviter la rotation des secrets', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs d’authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une revue périodique des accès ?',
                        'explanation' => 'Elle vérifie que les utilisateurs disposent toujours des accès nécessaires et appropriés.',
                        'choices' => [
                            ['choice_text' => 'Confirmer que les permissions correspondent toujours aux responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement tous les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les comptes actifs', 'is_correct' => false],
                            ['choice_text' => 'Désactiver l’authentification multifactorielle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Professional — Automatisation et Infrastructure as Code',
                'description' => 'Maîtrisez l’automatisation professionnelle, l’Infrastructure as Code, les déploiements contrôlés et la reproductibilité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal avantage de l’Infrastructure as Code ?',
                        'explanation' => 'IaC permet de définir, versionner et reproduire l’infrastructure de manière automatisée et contrôlée.',
                        'choices' => [
                            ['choice_text' => 'Rendre l’infrastructure versionnable, reproductible et automatisable', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les systèmes physiques', 'is_correct' => false],
                            ['choice_text' => 'Éviter tous les tests', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les changements IaC doivent-ils être revus comme du code logiciel ?',
                        'explanation' => 'Une modification d’infrastructure peut avoir des effets importants sur la sécurité, les coûts et la disponibilité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une erreur d’infrastructure peut provoquer des impacts importants', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’IaC ne contient jamais de logique', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le versioning', 'is_correct' => false],
                            ['choice_text' => 'Parce que les configurations sont toujours sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’idempotence est-elle particulièrement importante dans l’Infrastructure as Code ?',
                        'explanation' => 'Une configuration doit pouvoir être appliquée plusieurs fois sans créer d’effets incohérents.',
                        'choices' => [
                            ['choice_text' => 'Permettre de converger vers l’état souhaité sans effets indésirables répétés', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tout changement futur', 'is_correct' => false],
                            ['choice_text' => 'Garantir une disponibilité absolue', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi stocker l’état d’une infrastructure automatisée avec des contrôles appropriés ?',
                        'explanation' => 'L’état permet à l’outil de savoir ce qui existe déjà et d’éviter des opérations incorrectes ou destructrices.',
                        'choices' => [
                            ['choice_text' => 'Permettre à l’outil de connaître et gérer correctement les ressources existantes', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les déploiements', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les ressources inutilisées automatiquement dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système de monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets doivent-ils être séparés du code IaC ?',
                        'explanation' => 'Le code est souvent partagé et versionné. Les secrets nécessitent des mécanismes spécialisés de stockage et d’accès.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’exposition via les dépôts, logs ou artefacts', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Parce que les secrets ne peuvent pas être chiffrés', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les accès administratifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des pipelines CI/CD pour l’infrastructure ?',
                        'explanation' => 'Ils permettent d’appliquer automatiquement validation, tests, revue et promotion des changements.',
                        'choices' => [
                            ['choice_text' => 'Automatiser les contrôles et déploiements de manière cohérente', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute validation humaine', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Garantir que chaque changement réussira', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les plans de changement doivent-ils être examinés avant application ?',
                        'explanation' => 'L’examen permet d’identifier les créations, modifications et suppressions potentielles avant leur exécution.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les conséquences inattendues avant l’application', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le versioning', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro changement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les environnements IaC par état et permissions ?',
                        'explanation' => 'Une séparation protège la production contre les erreurs ou changements destinés à d’autres environnements.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’une opération de test affecte la production', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les tests automatisés', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la gestion des accès', 'is_correct' => false],
                            ['choice_text' => 'Garantir une infrastructure identique dans tous les environnements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le drift d’infrastructure ?',
                        'explanation' => 'Le drift indique qu’un environnement réel a divergé de la configuration déclarée ou approuvée.',
                        'choices' => [
                            ['choice_text' => 'Détecter les changements manuels ou inattendus hors configuration déclarée', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les serveurs ne changent jamais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les configurations historiques', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les déploiements progressifs sont-ils utiles pour l’infrastructure ?',
                        'explanation' => 'Ils limitent le rayon d’impact d’une erreur et offrent une possibilité d’observer le comportement avant généralisation.',
                        'choices' => [
                            ['choice_text' => 'Réduire le rayon d’impact d’une mauvaise modification', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les rollbacks', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun changement ne sera nécessaire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Professional — Cloud et infrastructure hybride',
                'description' => 'Évaluez les choix professionnels pour administrer des environnements cloud, hybrides et multi-sites.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel défi principal apparaît dans une infrastructure hybride ?',
                        'explanation' => 'Les environnements hybrides doivent gérer des identités, réseaux, outils, politiques et dépendances traversant plusieurs environnements.',
                        'choices' => [
                            ['choice_text' => 'Gérer la cohérence des identités, réseaux, politiques et opérations entre environnements', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les systèmes on-premises', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement les mêmes performances partout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle IAM centralisé est-il important dans un environnement hybride ?',
                        'explanation' => 'Une gestion cohérente des identités réduit les différences de contrôle d’accès entre environnements.',
                        'choices' => [
                            ['choice_text' => 'Appliquer des politiques d’accès cohérentes entre plusieurs environnements', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les comptes locaux dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Donner les droits administrateur à tous', 'is_correct' => false],
                            ['choice_text' => 'Éviter la journalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts cloud doivent-ils être surveillés comme une ressource opérationnelle ?',
                        'explanation' => 'Des ressources mal dimensionnées, inutilisées ou mal configurées peuvent générer des dépenses importantes.',
                        'choices' => [
                            ['choice_text' => 'Les ressources cloud ont un coût variable qui dépend de l’usage', 'is_correct' => true],
                            ['choice_text' => 'Les coûts cloud sont toujours fixes', 'is_correct' => false],
                            ['choice_text' => 'Le cloud ne facture jamais le stockage', 'is_correct' => false],
                            ['choice_text' => 'Les coûts n’ont aucun lien avec l’architecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer le principe de moindre privilège aux rôles cloud ?',
                        'explanation' => 'Une permission cloud excessive peut permettre de modifier, supprimer ou exfiltrer des ressources à grande échelle.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une compromission ou d’une erreur de configuration', 'is_correct' => true],
                            ['choice_text' => 'Permettre toutes les opérations sans validation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les comptes de service', 'is_correct' => false],
                            ['choice_text' => 'Éviter les audits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs zones de disponibilité pour un service critique ?',
                        'explanation' => 'Répartir les instances réduit la dépendance à un seul emplacement infrastructurel.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact d’une panne affectant une seule zone', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun incident ne pourra survenir', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de reprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’autoscaling peut-il améliorer l’efficacité économique ?',
                        'explanation' => 'Il adapte les ressources à la charge lorsque la plateforme le permet, évitant certaines ressources surdimensionnées en permanence.',
                        'choices' => [
                            ['choice_text' => 'Adapter les ressources au niveau de charge réel', 'is_correct' => true],
                            ['choice_text' => 'Garantir toujours le coût minimal', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les serveurs permanents', 'is_correct' => false],
                            ['choice_text' => 'Éviter le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances entre cloud et infrastructure locale doivent-elles être documentées ?',
                        'explanation' => 'Une dépendance croisée peut provoquer des interruptions difficiles à diagnostiquer lors d’une panne.',
                        'choices' => [
                            ['choice_text' => 'Comprendre les chemins critiques et les impacts d’une panne', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les liaisons réseau', 'is_correct' => false],
                            ['choice_text' => 'Éviter la sécurité réseau', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de latence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une architecture multi-cloud trop différente entre fournisseurs ?',
                        'explanation' => 'Des modèles de réseau, identité et services différents augmentent la complexité opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Une complexité accrue de gestion, sécurité et automatisation', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique des coûts', 'is_correct' => false],
                            ['choice_text' => 'Une sécurité toujours supérieure', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des compétences nécessaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’observabilité doit-elle couvrir les workloads cloud et on-premises ?',
                        'explanation' => 'Les incidents peuvent traverser les frontières entre environnements et nécessitent une vision de bout en bout.',
                        'choices' => [
                            ['choice_text' => 'Pour diagnostiquer les incidents qui traversent plusieurs environnements', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter les métriques cloud', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs locaux', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les systèmes sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir une stratégie de sortie fournisseur ?',
                        'explanation' => 'Une stratégie de sortie permet de réduire les risques liés au verrouillage technologique, aux changements de prix ou de service.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance et préparer une migration future éventuelle', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun changement ne sera nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Empêcher l’utilisation du cloud', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les abstractions', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Professional — Sécurité et réponse aux incidents',
                'description' => 'Maîtrisez les principes professionnels de hardening, détection, réponse et investigation sur les systèmes.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi la défense en profondeur est-elle importante pour les serveurs critiques ?',
                        'explanation' => 'Plusieurs couches de sécurité limitent l’impact lorsqu’une seule protection est contournée.',
                        'choices' => [
                            ['choice_text' => 'Une seule protection compromise ne doit pas donner un accès total au système', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les protections individuelles', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute surveillance', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro vulnérabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs centralisés doivent-ils idéalement être protégés contre la suppression par les systèmes sources ?',
                        'explanation' => 'Un attaquant ayant compromis un serveur pourrait tenter d’effacer ses propres traces.',
                        'choices' => [
                            ['choice_text' => 'Empêcher qu’une compromission locale permette d’effacer facilement les preuves', 'is_correct' => true],
                            ['choice_text' => 'Réduire la quantité de données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun incident ne se produira', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs de compromission doivent-ils être recherchés sur plusieurs systèmes ?',
                        'explanation' => 'Une attaque peut se propager ou utiliser plusieurs machines et comptes.',
                        'choices' => [
                            ['choice_text' => 'Une compromission peut s’étendre à plusieurs systèmes', 'is_correct' => true],
                            ['choice_text' => 'Un incident ne concerne jamais plusieurs serveurs', 'is_correct' => false],
                            ['choice_text' => 'Les logs sont indépendants du réseau', 'is_correct' => false],
                            ['choice_text' => 'Les attaquants utilisent toujours un seul hôte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi isoler un serveur compromis peut-il être nécessaire ?',
                        'explanation' => 'L’isolation limite les communications et réduit le risque de propagation ou d’exfiltration pendant l’investigation.',
                        'choices' => [
                            ['choice_text' => 'Limiter la propagation et les communications malveillantes', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les preuves seront détruites', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin d’investigation', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la surface d’attaque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réinstallation immédiate peut-elle être problématique lors d’un incident ?',
                        'explanation' => 'Elle peut détruire des éléments utiles à l’analyse de la compromission si les preuves nécessaires ne sont pas préservées.',
                        'choices' => [
                            ['choice_text' => 'Elle peut détruire des preuves utiles à l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours la conservation des preuves', 'is_correct' => false],
                            ['choice_text' => 'Elle améliore la visibilité forensic', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute perte de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer une politique de patch management centralisée ?',
                        'explanation' => 'Elle permet de suivre les versions, prioriser les vulnérabilités et mesurer l’état de correction du parc.',
                        'choices' => [
                            ['choice_text' => 'Maintenir une visibilité et une cohérence sur l’état de sécurité du parc', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toutes les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune vulnérabilité future n’apparaîtra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les certificats et clés privées doivent-ils être gérés avec un cycle de vie strict ?',
                        'explanation' => 'Ils peuvent expirer, être compromis ou devoir être renouvelés et révoqués.',
                        'choices' => [
                            ['choice_text' => 'Pour gérer expiration, rotation, révocation et compromission', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter tout chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les clés publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher tout renouvellement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester les contrôles de sécurité par des audits réguliers ?',
                        'explanation' => 'Les configurations peuvent dériver et les protections peuvent devenir inefficaces ou obsolètes.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que les protections restent effectivement conformes et efficaces', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les mécanismes de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence totale de menaces', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le moindre privilège doit-il être appliqué aux outils d’automatisation eux-mêmes ?',
                        'explanation' => 'Si un outil d’automatisation est compromis, ses permissions déterminent l’étendue des actions qu’un attaquant pourrait réaliser.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact potentiel d’une compromission de l’outil', 'is_correct' => true],
                            ['choice_text' => 'Donner les droits administrateur globaux à l’outil', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout automatisme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif doit avoir un programme de réponse aux incidents ?',
                        'explanation' => 'Il doit réduire le temps nécessaire pour détecter, contenir, éradiquer et restaurer les services tout en améliorant les processus.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact et améliorer continuellement la capacité de réponse', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute documentation des incidents', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun incident ne se produira', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les mécanismes de surveillance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Professional — Résilience, continuité et disaster recovery',
                'description' => 'Évaluez la conception professionnelle des stratégies de continuité, sauvegarde, réplication et reprise.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi RTO et RPO doivent-ils être définis selon les besoins métier ?',
                        'explanation' => 'Tous les services n’ont pas le même niveau de criticité ni les mêmes coûts d’interruption ou de perte de données.',
                        'choices' => [
                            ['choice_text' => 'Parce que le niveau de reprise nécessaire dépend de l’importance du service', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les systèmes ont le même RTO et RPO', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’analyse métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde seule ne garantit-elle pas une bonne stratégie de reprise ?',
                        'explanation' => 'Il faut également disposer de procédures, infrastructure de restauration, personnel compétent et tests réguliers.',
                        'choices' => [
                            ['choice_text' => 'La restauration dépend aussi des procédures, ressources et tests', 'is_correct' => true],
                            ['choice_text' => 'Les sauvegardes sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'La restauration est toujours instantanée', 'is_correct' => false],
                            ['choice_text' => 'Les procédures n’ont aucune importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sauvegardes immuables peuvent-elles être utiles contre certaines attaques ?',
                        'explanation' => 'Une sauvegarde protégée contre la modification ou suppression peut rester disponible après une compromission du système source.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’un attaquant modifie ou supprime les sauvegardes', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune donnée ne sera perdue', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de restauration', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toute réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il séparer les sauvegardes des systèmes sources ?',
                        'explanation' => 'Un incident touchant le système source ne doit pas pouvoir détruire simultanément toutes les copies.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’un même incident compromette toutes les copies', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la complexité sans bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes locales dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une réplication sans version historique ?',
                        'explanation' => 'Une corruption ou suppression répliquée peut être propagée à toutes les copies si aucun point historique n’est conservé.',
                        'choices' => [
                            ['choice_text' => 'Une corruption peut être répliquée avant d’être détectée', 'is_correct' => true],
                            ['choice_text' => 'Les données deviennent toujours plus fiables', 'is_correct' => false],
                            ['choice_text' => 'La réplication empêche toutes les attaques', 'is_correct' => false],
                            ['choice_text' => 'Les sauvegardes deviennent inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les procédures de disaster recovery doivent-elles être testées dans des conditions réalistes ?',
                        'explanation' => 'Un test réaliste révèle les dépendances, délais et erreurs qui resteraient invisibles lors d’une simple vérification documentaire.',
                        'choices' => [
                            ['choice_text' => 'Identifier les écarts entre la procédure théorique et la réalité opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun incident ne surviendra', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les mécanismes de redondance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi prioriser certains services pendant une reprise ?',
                        'explanation' => 'Les ressources disponibles peuvent être limitées et certains services sont plus critiques que d’autres pour l’activité.',
                        'choices' => [
                            ['choice_text' => 'Concentrer les ressources sur les services ayant la plus forte criticité métier', 'is_correct' => true],
                            ['choice_text' => 'Restaurer toujours les services dans l’ordre alphabétique', 'is_correct' => false],
                            ['choice_text' => 'Restaurer uniquement les services secondaires', 'is_correct' => false],
                            ['choice_text' => 'Éviter les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les dépendances pour le disaster recovery ?',
                        'explanation' => 'Un service peut nécessiter une base de données, DNS, identité ou réseau avant de fonctionner correctement.',
                        'choices' => [
                            ['choice_text' => 'Permettre une restauration dans un ordre compatible avec les dépendances', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun service ne dépend d’un autre', 'is_correct' => false],
                            ['choice_text' => 'Éviter la documentation technique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le temps réel de restauration pendant les exercices ?',
                        'explanation' => 'Le temps réel permet de comparer les résultats aux objectifs RTO et d’identifier les écarts.',
                        'choices' => [
                            ['choice_text' => 'Vérifier si la capacité réelle respecte le RTO défini', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le RTO', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur indicateur d’une stratégie de reprise mature ?',
                        'explanation' => 'La maturité se démontre par la capacité à restaurer réellement les services dans les délais et conditions attendus.',
                        'choices' => [
                            ['choice_text' => 'La capacité démontrée à restaurer les services selon les objectifs définis', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de sauvegardes uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de disques de secours', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de documents sans tests', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Professional — Observabilité et performance à l’échelle',
                'description' => 'Maîtrisez les pratiques professionnelles de monitoring, SLO, alerting, capacity planning et performance.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi définir des SLO pour un service critique ?',
                        'explanation' => 'Les SLO rendent explicite le niveau de fiabilité attendu et permettent de mesurer si le service respecte les objectifs.',
                        'choices' => [
                            ['choice_text' => 'Définir un niveau mesurable de fiabilité attendu', 'is_correct' => true],
                            ['choice_text' => 'Garantir une disponibilité de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Éviter les incidents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les alertes doivent-elles être liées à des objectifs de service ?',
                        'explanation' => 'Une alerte utile doit signaler un risque réel pour la disponibilité, la performance ou les objectifs métier.',
                        'choices' => [
                            ['choice_text' => 'Réduire le bruit et concentrer l’attention sur les problèmes importants', 'is_correct' => true],
                            ['choice_text' => 'Créer un maximum d’alertes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun incident ne se produira', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi suivre le capacity planning ?',
                        'explanation' => 'La croissance du trafic peut dépasser la capacité disponible si elle n’est pas anticipée.',
                        'choices' => [
                            ['choice_text' => 'Prévoir les besoins futurs en ressources avant saturation', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement tous les serveurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de charge', 'is_correct' => false],
                            ['choice_text' => 'Garantir que la charge ne changera jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester la performance sous charge réaliste ?',
                        'explanation' => 'Les systèmes peuvent se comporter différemment sous forte concurrence, I/O ou trafic que lors de tests légers.',
                        'choices' => [
                            ['choice_text' => 'Identifier les limites et goulots d’étranglement dans des conditions proches de la réalité', 'is_correct' => true],
                            ['choice_text' => 'Garantir une performance parfaite', 'is_correct' => false],
                            ['choice_text' => 'Éviter les métriques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une trace distribuée dans une architecture multi-services ?',
                        'explanation' => 'Une trace suit une requête à travers plusieurs composants et permet d’identifier où le temps ou les erreurs apparaissent.',
                        'choices' => [
                            ['choice_text' => 'Suivre une requête à travers plusieurs composants', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement l’espace disque', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les métriques', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les percentiles de latence sont-ils souvent plus utiles que la moyenne seule ?',
                        'explanation' => 'La moyenne peut cacher les expériences très lentes d’une partie des utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent d’observer les performances des requêtes lentes', 'is_correct' => true],
                            ['choice_text' => 'Ils éliminent les valeurs extrêmes', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les logs', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent une latence faible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les incidents de performance doivent-ils être corrélés aux changements récents ?',
                        'explanation' => 'Une corrélation temporelle avec une nouvelle version ou configuration peut fournir un indice essentiel sur la cause.',
                        'choices' => [
                            ['choice_text' => 'Un changement récent peut être un facteur important dans la dégradation observée', 'is_correct' => true],
                            ['choice_text' => 'Tous les incidents sont causés par les changements récents', 'is_correct' => false],
                            ['choice_text' => 'Les changements n’ont jamais d’effet', 'is_correct' => false],
                            ['choice_text' => 'Les logs ne sont pas utiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un dashboard opérationnel ne doit-il pas afficher uniquement des métriques techniques ?',
                        'explanation' => 'Les métriques métier et de service permettent de relier l’état technique à l’expérience utilisateur et aux objectifs.',
                        'choices' => [
                            ['choice_text' => 'Pour relier les performances techniques à l’impact réel du service', 'is_correct' => true],
                            ['choice_text' => 'Parce que les métriques CPU sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les métriques système', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les tendances plutôt que uniquement les seuils instantanés ?',
                        'explanation' => 'Une dégradation progressive peut être détectée avant qu’un seuil critique ne soit atteint.',
                        'choices' => [
                            ['choice_text' => 'Détecter une dérive progressive avant qu’elle ne devienne critique', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une charge constante', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le capacity planning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’un postmortem technique après une panne importante ?',
                        'explanation' => 'Il doit identifier les causes, facteurs contributifs et améliorations possibles afin de réduire les risques futurs.',
                        'choices' => [
                            ['choice_text' => 'Transformer l’incident en améliorations concrètes et mesurables', 'is_correct' => true],
                            ['choice_text' => 'Identifier uniquement une personne responsable', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’historique de l’incident', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute modification future', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'System Administration Professional — Leadership opérationnel',
                'description' => 'Évaluez les pratiques professionnelles de conduite du changement, gestion des incidents, documentation et collaboration.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les changements critiques doivent-ils avoir un plan de rollback ?',
                        'explanation' => 'Un rollback permet de revenir rapidement à un état connu lorsque le changement produit une régression grave.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact d’une modification qui échoue ou dégrade le service', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute évolution du système', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les versions précédentes', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun changement ne sera nécessaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un changement important doit-il être testé dans un environnement représentatif ?',
                        'explanation' => 'Un environnement trop différent de la production peut masquer des incompatibilités ou problèmes de performance.',
                        'choices' => [
                            ['choice_text' => 'Pour découvrir les problèmes dans des conditions proches de la production', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute validation en production', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro erreur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les runbooks doivent-ils être maintenus à jour ?',
                        'explanation' => 'Une procédure obsolète peut ralentir une intervention ou provoquer des actions incorrectes.',
                        'choices' => [
                            ['choice_text' => 'Pour que les procédures restent fiables malgré les changements de l’infrastructure', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les automatisations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les historiques d’incident', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les responsabilités doivent-elles être clairement définies pendant un incident majeur ?',
                        'explanation' => 'Une répartition claire réduit les doublons, les conflits et les délais de décision.',
                        'choices' => [
                            ['choice_text' => 'Réduire les ambiguïtés et accélérer la prise de décision', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les équipes de communiquer', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’il n’y aura aucun incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi communiquer régulièrement pendant un incident ?',
                        'explanation' => 'Une communication structurée permet aux parties prenantes de comprendre l’impact, les actions en cours et les risques.',
                        'choices' => [
                            ['choice_text' => 'Maintenir les parties prenantes informées et alignées', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer le diagnostic technique', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les responsabilités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une culture post-incident sans blâme peut-elle améliorer la fiabilité ?',
                        'explanation' => 'Elle favorise la remontée honnête des problèmes et l’identification des causes systémiques.',
                        'choices' => [
                            ['choice_text' => 'Elle facilite l’identification des causes systémiques et des améliorations', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toute responsabilité opérationnelle', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les investigations', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le MTTR après des incidents ?',
                        'explanation' => 'Le MTTR permet de suivre l’efficacité de la détection, du diagnostic et de la récupération.',
                        'choices' => [
                            ['choice_text' => 'Évaluer et améliorer la rapidité de récupération', 'is_correct' => true],
                            ['choice_text' => 'Mesurer la taille du stockage', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests de restauration', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi standardiser les procédures d’exploitation répétitives ?',
                        'explanation' => 'Les procédures standard réduisent les variations entre opérateurs et améliorent la prévisibilité des résultats.',
                        'choices' => [
                            ['choice_text' => 'Réduire les variations et les erreurs lors des opérations répétées', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute amélioration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Éviter la formation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi déléguer certaines tâches opérationnelles via des contrôles précis plutôt que partager un compte root ?',
                        'explanation' => 'Les comptes individuels et permissions ciblées permettent une meilleure traçabilité et appliquent le moindre privilège.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la traçabilité et limiter les privilèges', 'is_correct' => true],
                            ['choice_text' => 'Donner davantage de droits à tout le monde', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux', 'is_correct' => false],
                            ['choice_text' => 'Éviter l’audit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur objectif d’une équipe d’administration système mature ?',
                        'explanation' => 'Une équipe mature cherche à fournir des services fiables tout en réduisant les opérations manuelles, les incidents répétitifs et les risques.',
                        'choices' => [
                            ['choice_text' => 'Fournir des systèmes fiables, sécurisés, observables et reproductibles', 'is_correct' => true],
                            ['choice_text' => 'Maximiser le nombre d’interventions manuelles', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Réduire la documentation au minimum', 'is_correct' => false],
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