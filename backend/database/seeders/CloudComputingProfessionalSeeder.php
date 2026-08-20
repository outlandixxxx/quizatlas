<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CloudComputingProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cloud-computing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Cloud Professional — Architecture d’entreprise et gouvernance',
                'description' => 'Évaluez votre capacité à concevoir et gouverner des architectures cloud d’entreprise à grande échelle.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une grande organisation souhaite accueillir rapidement plusieurs équipes sur le cloud tout en imposant des garde-fous de sécurité et de gouvernance. Quelle approche est la plus appropriée ?',
                        'explanation' => 'Une landing zone fournit une fondation standardisée avec comptes, réseaux, IAM, logs, politiques et contrôles qui peuvent ensuite être réutilisés par les équipes.',
                        'choices' => [
                            ['choice_text' => 'Laisser chaque équipe construire son environnement sans standards communs', 'is_correct' => false],
                            ['choice_text' => 'Mettre en place une landing zone avec des contrôles et standards centralisés', 'is_correct' => true],
                            ['choice_text' => 'Donner les privilèges administrateur globaux à toutes les équipes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation pour garder un contrôle manuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe d’architecture est le plus important lorsqu’une plateforme cloud sert des centaines d’équipes ?',
                        'explanation' => 'Une plateforme partagée doit proposer des standards communs tout en conservant des frontières claires entre équipes, environnements et responsabilités.',
                        'choices' => [
                            ['choice_text' => 'Centraliser absolument toutes les décisions techniques dans une seule équipe', 'is_correct' => false],
                            ['choice_text' => 'Standardiser les fondations tout en permettant une autonomie contrôlée des équipes', 'is_correct' => true],
                            ['choice_text' => 'Autoriser chaque équipe à utiliser ses propres pratiques sans gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Utiliser un seul compte cloud pour toute l’organisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie multi-compte ou multi-projet est-elle souvent préférable à un environnement cloud totalement partagé ?',
                        'explanation' => 'La séparation des comptes ou projets réduit le rayon d’impact d’une erreur, améliore l’isolation et facilite l’attribution des coûts et des responsabilités.',
                        'choices' => [
                            ['choice_text' => 'Créer des frontières administratives, de sécurité et de responsabilité', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute nécessité de fédération d’identité', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute communication entre applications', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune ressource ne pourra être compromise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une gouvernance cloud trop centralisée ?',
                        'explanation' => 'Une gouvernance trop rigide peut ralentir les équipes et empêcher l’adoption de solutions adaptées. Une gouvernance efficace doit fournir des garde-fous sans devenir un goulot d’étranglement.',
                        'choices' => [
                            ['choice_text' => 'Réduire excessivement l’agilité et la vitesse de livraison', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement les coûts cloud', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les incidents de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les ressources publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe permet de concilier autonomie des équipes et contrôle organisationnel ?',
                        'explanation' => 'Les guardrails automatisés permettent d’empêcher les configurations dangereuses tout en laissant les équipes décider des détails qui ne présentent pas de risque majeur.',
                        'choices' => [
                            ['choice_text' => 'Des garde-fous automatisés combinés à des standards communs', 'is_correct' => true],
                            ['choice_text' => 'Une approbation humaine obligatoire pour chaque ressource', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de politiques', 'is_correct' => false],
                            ['choice_text' => 'Un compte administrateur partagé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud d’entreprise doit-elle distinguer les responsabilités de plateforme et celles des équipes applicatives ?',
                        'explanation' => 'Une séparation claire évite les zones grises et permet à l’équipe plateforme de fournir des capacités communes tandis que les équipes applicatives restent responsables de leur workload.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter les responsabilités ambiguës et améliorer l’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les équipes applicatives de déployer du code', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les responsabilités de sécurité des développeurs', 'is_correct' => false],
                            ['choice_text' => 'Pour imposer un seul langage de programmation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’utiliser une approche policy-as-code dans la gouvernance cloud ?',
                        'explanation' => 'Policy-as-code permet de formaliser les règles et de les vérifier automatiquement dans les pipelines et environnements.',
                        'choices' => [
                            ['choice_text' => 'Automatiser la détection ou le blocage de configurations non conformes', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les contrôles humains dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Rendre les politiques non modifiables', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute journalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inventaire automatisé des ressources est-il essentiel dans un environnement cloud de grande taille ?',
                        'explanation' => 'Le cloud évolue rapidement et les ressources peuvent apparaître ou disparaître fréquemment. Un inventaire automatisé fournit une vue fiable des actifs et de leurs propriétaires.',
                        'choices' => [
                            ['choice_text' => 'Maintenir une visibilité fiable sur les actifs et leur cycle de vie', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute création de ressources', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les identités cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur montre le mieux qu’une plateforme cloud mature est réellement adoptée par les équipes ?',
                        'explanation' => 'L’adoption réelle se mesure notamment par l’utilisation régulière des capacités de plateforme, l’automatisation, les délais de livraison et la conformité, plutôt que par le seul nombre de comptes créés.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de comptes cloud créés', 'is_correct' => false],
                            ['choice_text' => 'Le niveau d’adoption des capacités de plateforme et l’amélioration des résultats opérationnels', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total de machines virtuelles', 'is_correct' => false],
                            ['choice_text' => 'Le volume de documentation produite uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche convient le mieux à une organisation qui veut imposer des standards communs tout en laissant aux équipes le choix entre plusieurs architectures approuvées ?',
                        'explanation' => 'Une stratégie de paved roads fournit des modèles et services approuvés permettant aux équipes d’aller vite sans réinventer les contrôles fondamentaux.',
                        'choices' => [
                            ['choice_text' => 'Fournir des architectures de référence et des composants approuvés', 'is_correct' => true],
                            ['choice_text' => 'Interdire toute architecture différente de celle de l’équipe centrale', 'is_correct' => false],
                            ['choice_text' => 'Laisser chaque équipe créer sa propre sécurité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les politiques de conformité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Professional — FinOps, coûts et valeur métier',
                'description' => 'Évaluez les décisions professionnelles liées aux coûts, à la capacité, au FinOps et à la valeur métier du cloud.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une entreprise a réduit ses coûts cloud de 20 % mais a également augmenté de manière importante le temps de réponse de ses applications critiques. Comment interpréter cette optimisation ?',
                        'explanation' => 'Une réduction de coût n’est pas automatiquement une optimisation réussie. Il faut mesurer le compromis entre dépenses, performance, disponibilité et valeur métier.',
                        'choices' => [
                            ['choice_text' => 'C’est forcément une réussite puisque les coûts ont diminué', 'is_correct' => false],
                            ['choice_text' => 'Il faut évaluer le compromis entre économie et dégradation du service', 'is_correct' => true],
                            ['choice_text' => 'Les performances n’ont aucune importance dans FinOps', 'is_correct' => false],
                            ['choice_text' => 'Il faut supprimer toutes les ressources critiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur FinOps apporte généralement plus de valeur qu’une simple facture cloud mensuelle ?',
                        'explanation' => 'Le coût unitaire permet de relier la consommation cloud à la production de valeur, comme le coût par transaction, client ou commande.',
                        'choices' => [
                            ['choice_text' => 'Le nombre total de machines virtuelles', 'is_correct' => false],
                            ['choice_text' => 'Le coût par unité métier ou produit', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'La capacité maximale du datacenter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une équipe FinOps doit-elle travailler avec les équipes techniques ?',
                        'explanation' => 'Les décisions techniques déterminent souvent la consommation cloud. Le contrôle des coûts nécessite donc une collaboration entre finance, ingénierie et métiers.',
                        'choices' => [
                            ['choice_text' => 'Parce que les décisions d’architecture influencent directement les coûts', 'is_correct' => true],
                            ['choice_text' => 'Parce que les équipes techniques doivent gérer la comptabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que FinOps remplace les architectes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud ne possède aucun mécanisme de facturation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’une organisation achète des capacités réservées sans comprendre ses besoins futurs ?',
                        'explanation' => 'Un engagement trop important peut créer des dépenses inutiles si la consommation réelle est inférieure aux prévisions.',
                        'choices' => [
                            ['choice_text' => 'Un risque de sur-engagement financier par rapport à l’usage réel', 'is_correct' => true],
                            ['choice_text' => 'Une impossibilité d’utiliser le cloud', 'is_correct' => false],
                            ['choice_text' => 'Une perte automatique des données', 'is_correct' => false],
                            ['choice_text' => 'Une désactivation des sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts doivent-ils être attribués à des produits ou équipes ?',
                        'explanation' => 'L’attribution améliore la visibilité, la responsabilisation et permet aux équipes de prendre des décisions de consommation éclairées.',
                        'choices' => [
                            ['choice_text' => 'Pour relier la consommation aux responsables et aux produits concernés', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les factures publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les budgets', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute élasticité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle stratégie est généralement la plus adaptée pour réduire le gaspillage lié aux environnements de développement ?',
                        'explanation' => 'L’arrêt automatique des ressources en dehors des heures d’utilisation peut réduire les coûts sans affecter les environnements critiques.',
                        'choices' => [
                            ['choice_text' => 'Automatiser l’arrêt et le redémarrage selon des horaires adaptés', 'is_correct' => true],
                            ['choice_text' => 'Maintenir toutes les ressources actives en permanence', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Interdire l’automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage du rightsizing ?',
                        'explanation' => 'Le rightsizing adapte la capacité à l’usage réel et réduit le paiement pour des ressources surdimensionnées.',
                        'choices' => [
                            ['choice_text' => 'Adapter les ressources aux besoins réels', 'is_correct' => true],
                            ['choice_text' => 'Augmenter toujours la capacité', 'is_correct' => false],
                            ['choice_text' => 'Désactiver le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une équipe FinOps doit-elle surveiller les coûts après une optimisation ?',
                        'explanation' => 'Les workloads évoluent, de nouveaux services apparaissent et les changements de charge peuvent annuler les bénéfices obtenus.',
                        'choices' => [
                            ['choice_text' => 'Parce que les usages et coûts évoluent continuellement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts sont totalement fixes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les équipes de créer de nouvelles ressources', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la facturation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis faut-il considérer lors de l’utilisation de services cloud fortement managés ?',
                        'explanation' => 'Les services managés peuvent réduire l’effort opérationnel mais augmenter la dépendance au fournisseur ou réduire certaines possibilités de contrôle.',
                        'choices' => [
                            ['choice_text' => 'Moins d’administration contre davantage de dépendance ou moins de contrôle détaillé', 'is_correct' => true],
                            ['choice_text' => 'Moins de sécurité contre aucune dépendance', 'is_correct' => false],
                            ['choice_text' => 'Plus de coûts et zéro bénéfice opérationnel', 'is_correct' => false],
                            ['choice_text' => 'Moins de disponibilité par définition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat constitue une bonne mesure de maturité FinOps ?',
                        'explanation' => 'Une organisation mature prend les décisions de consommation avec une visibilité partagée sur le coût, la capacité, les performances et la valeur métier.',
                        'choices' => [
                            ['choice_text' => 'Une réduction ponctuelle de la facture', 'is_correct' => false],
                            ['choice_text' => 'Une capacité continue à optimiser coût, performance et valeur métier', 'is_correct' => true],
                            ['choice_text' => 'Une interdiction générale des ressources cloud', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de rapports financiers produits uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Professional — Sécurité, conformité et résilience',
                'description' => 'Analysez les décisions professionnelles de sécurité, conformité, protection des données et résilience cloud.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une stratégie cloud d’entreprise doit-elle intégrer la sécurité dès la conception ?',
                        'explanation' => 'Intégrer les contrôles tôt réduit les coûts de correction et permet de construire des workloads conformes aux standards dès leur création.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les risques et éviter de corriger tardivement des architectures non conformes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les développeurs', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher l’utilisation du cloud', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un modèle de responsabilité partagée ?',
                        'explanation' => 'Il clarifie quelles mesures relèvent du fournisseur et lesquelles restent à la charge du client selon le service choisi.',
                        'choices' => [
                            ['choice_text' => 'Définir clairement les responsabilités de sécurité entre fournisseur et client', 'is_correct' => true],
                            ['choice_text' => 'Faire porter toute la sécurité au fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les obligations du client', 'is_correct' => false],
                            ['choice_text' => 'Rendre les services publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chiffrement ne suffit-il pas à assurer la confidentialité des données cloud ?',
                        'explanation' => 'Le chiffrement doit être accompagné d’un contrôle d’accès, d’une gestion correcte des clés et de politiques empêchant les utilisateurs non autorisés d’accéder aux données.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’accès aux clés et aux ressources doit également être contrôlé', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffrement ne fonctionne jamais dans le cloud', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données chiffrées deviennent automatiquement publiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que IAM remplace le chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une politique de rétention des journaux de sécurité ?',
                        'explanation' => 'La rétention doit permettre les investigations et satisfaire les exigences métier ou réglementaires tout en tenant compte des coûts et de la protection des données.',
                        'choices' => [
                            ['choice_text' => 'Conserver les événements suffisamment longtemps pour les besoins d’audit et d’investigation', 'is_correct' => true],
                            ['choice_text' => 'Conserver tous les logs indéfiniment sans justification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les logs après quelques minutes', 'is_correct' => false],
                            ['choice_text' => 'Rendre les logs accessibles à tous', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque stratégique est associé à une architecture multi-cloud très hétérogène ?',
                        'explanation' => 'Plusieurs fournisseurs peuvent augmenter la complexité de gouvernance, de compétences, de monitoring et de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Une complexité accrue de gouvernance, compétences et opérations', 'is_correct' => true],
                            ['choice_text' => 'Une suppression automatique des coûts', 'is_correct' => false],
                            ['choice_text' => 'Une disponibilité garantie de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des contrôles IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données critiques peuvent-elles nécessiter une stratégie de chiffrement avec clés séparées ?',
                        'explanation' => 'Des clés distinctes permettent de séparer les domaines de confiance, de faciliter la rotation et de limiter l’impact d’une compromission.',
                        'choices' => [
                            ['choice_text' => 'Limiter le rayon d’impact d’une compromission et renforcer la séparation des responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Rendre les clés publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important pour la résilience d’un service critique ?',
                        'explanation' => 'La résilience repose sur l’identification des dépendances et la suppression ou réduction des single points of failure.',
                        'choices' => [
                            ['choice_text' => 'Identifier et traiter les single points of failure', 'is_correct' => true],
                            ['choice_text' => 'Utiliser systématiquement une seule instance', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Centraliser toutes les dépendances dans un seul serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la conformité cloud doit-elle être automatisée autant que possible ?',
                        'explanation' => 'Dans un environnement dynamique, des contrôles automatisés peuvent détecter ou bloquer plus rapidement les dérives que des contrôles manuels ponctuels.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’environnement évolue trop rapidement pour dépendre uniquement de contrôles manuels', 'is_correct' => true],
                            ['choice_text' => 'Parce que les audits humains sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’automatisation rend les politiques inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que la conformité signifie uniquement surveillance des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur indicateur d’une bonne stratégie de résilience ?',
                        'explanation' => 'La résilience doit être démontrée par des tests et la comparaison des résultats aux objectifs RTO/RPO, plutôt que supposée à partir de diagrammes.',
                        'choices' => [
                            ['choice_text' => 'La réussite de tests de bascule et de récupération par rapport aux objectifs définis', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de serveurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de sauvegardes sans test', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de régions utilisées sans scénario de bascule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de sécurité cloud doit-elle inclure la détection et pas seulement la prévention ?',
                        'explanation' => 'Aucun contrôle préventif n’est parfait. La détection permet d’identifier les comportements anormaux et de réduire le temps de réponse lorsqu’un contrôle est contourné.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un contrôle préventif peut être contourné ou mal configuré', 'is_correct' => true],
                            ['choice_text' => 'Parce que la prévention n’a aucune utilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que la détection supprime les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud ne permet aucun contrôle préventif', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Professional — Modernisation et transformation',
                'description' => 'Évaluez les arbitrages de transformation cloud, modernisation applicative et évolution des plateformes.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une application monolithique fonctionne correctement mais coûte cher à faire évoluer. Quelle approche doit être étudiée avant une réécriture complète ?',
                        'explanation' => 'La modernisation progressive peut permettre de traiter les points de douleur prioritaires sans prendre immédiatement le risque et le coût d’une réécriture totale.',
                        'choices' => [
                            ['choice_text' => 'Identifier les composants qui apportent le plus de valeur à moderniser progressivement', 'is_correct' => true],
                            ['choice_text' => 'Réécrire systématiquement toute l’application', 'is_correct' => false],
                            ['choice_text' => 'Ne rien changer malgré les problèmes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests pour aller plus vite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une migration « big bang » d’un grand portefeuille applicatif ?',
                        'explanation' => 'Une migration massive concentre le risque et complique le diagnostic lorsque plusieurs problèmes apparaissent simultanément.',
                        'choices' => [
                            ['choice_text' => 'Concentrer un grand nombre de risques et rendre les incidents plus difficiles à isoler', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement les coûts', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure portabilité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dépendances applicatives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme interne cloud peut-elle améliorer la productivité des développeurs ?',
                        'explanation' => 'Elle fournit des capacités standardisées comme CI/CD, observabilité, secrets, déploiement et infrastructure sans obliger chaque équipe à tout reconstruire.',
                        'choices' => [
                            ['choice_text' => 'Elle fournit des capacités communes réutilisables et réduit le travail répétitif', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime le besoin de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Elle impose un seul langage de programmation', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les applications métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque d’une plateforme interne trop complexe ?',
                        'explanation' => 'Une plateforme difficile à comprendre peut être contournée par les équipes ou devenir elle-même un goulot d’étranglement opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Une faible adoption et une augmentation de la complexité opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Une sécurité garantie', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des coûts', 'is_correct' => false],
                            ['choice_text' => 'Une absence de dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi privilégier des architectures réversibles lorsque cela est raisonnable ?',
                        'explanation' => 'La réversibilité réduit les coûts et risques d’un changement futur de fournisseur, de service ou d’architecture.',
                        'choices' => [
                            ['choice_text' => 'Réduire les coûts et risques associés à une future évolution', 'is_correct' => true],
                            ['choice_text' => 'Empêcher l’utilisation de services managés', 'is_correct' => false],
                            ['choice_text' => 'Garantir une architecture identique pendant des décennies', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute innovation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel arbitrage est souvent présent entre portabilité et exploitation optimale d’un fournisseur cloud ?',
                        'explanation' => 'Les services natifs peuvent fournir davantage de capacités et réduire les opérations, mais ils peuvent augmenter la dépendance à la plateforme.',
                        'choices' => [
                            ['choice_text' => 'Portabilité maximale contre exploitation approfondie des services natifs', 'is_correct' => true],
                            ['choice_text' => 'Sécurité contre impossibilité de déployer', 'is_correct' => false],
                            ['choice_text' => 'Disponibilité contre absence de réseau', 'is_correct' => false],
                            ['choice_text' => 'Coût contre absence de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’architecture événementielle peut-elle être pertinente dans une transformation de grande application ?',
                        'explanation' => 'Les événements peuvent permettre de découpler progressivement des composants et de faire coexister de nouvelles fonctions avec le système existant.',
                        'choices' => [
                            ['choice_text' => 'Elle peut permettre un découplage progressif entre composants', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit la cohérence forte par défaut', 'is_correct' => false],
                            ['choice_text' => 'Elle évite toutes les dépendances réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal bénéfice d’une stratégie de déploiement progressive lors d’une modernisation ?',
                        'explanation' => 'Une progression contrôlée permet de limiter l’impact, mesurer les résultats et revenir rapidement en arrière si nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Limiter le risque et recueillir des données avant généralisation', 'is_correct' => true],
                            ['choice_text' => 'Éliminer les besoins de tests', 'is_correct' => false],
                            ['choice_text' => 'Rendre le rollback impossible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une transformation cloud doit-elle inclure la conduite du changement ?',
                        'explanation' => 'Une transformation réussie exige de nouvelles compétences, pratiques et responsabilités. Sans adoption organisationnelle, les bénéfices techniques peuvent ne pas se concrétiser.',
                        'choices' => [
                            ['choice_text' => 'Parce que les processus, compétences et responsabilités doivent évoluer avec la technologie', 'is_correct' => true],
                            ['choice_text' => 'Parce que les utilisateurs ne sont jamais concernés par le cloud', 'is_correct' => false],
                            ['choice_text' => 'Parce que la technologie suffit toujours à transformer une organisation', 'is_correct' => false],
                            ['choice_text' => 'Parce que les équipes doivent perdre leur autonomie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel critère doit guider le choix entre migration simple et modernisation profonde ?',
                        'explanation' => 'Le choix doit prendre en compte valeur métier, coût, risque, urgence, durée de vie de l’application et bénéfices attendus.',
                        'choices' => [
                            ['choice_text' => 'Le rapport entre valeur métier, coût, risque et bénéfices attendus', 'is_correct' => true],
                            ['choice_text' => 'La popularité d’une technologie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de développeurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'La préférence d’un fournisseur sans analyse', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Professional — Data Platform et architecture analytique',
                'description' => 'Évaluez les choix professionnels concernant data lakes, entrepôts, pipelines, gouvernance et analytics cloud.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt principal d’un data lake dans une architecture analytique cloud ?',
                        'explanation' => 'Un data lake peut accueillir de grands volumes de données dans différents formats avant leur transformation ou leur exploitation.',
                        'choices' => [
                            ['choice_text' => 'Stocker de grands volumes de données hétérogènes pour différents usages analytiques', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les systèmes transactionnels', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la qualité de toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de gouvernance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un data lake mal gouverné peut-il devenir problématique ?',
                        'explanation' => 'Sans catalogue, ownership et règles de qualité, les données deviennent difficiles à retrouver, comprendre et utiliser avec confiance.',
                        'choices' => [
                            ['choice_text' => 'Le manque de gouvernance peut transformer le lake en ensemble difficile à exploiter', 'is_correct' => true],
                            ['choice_text' => 'Les données deviennent automatiquement supprimées', 'is_correct' => false],
                            ['choice_text' => 'Le stockage objet cesse de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Tous les utilisateurs obtiennent automatiquement des droits administrateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un data catalog ?',
                        'explanation' => 'Un catalogue permet de découvrir les datasets, leurs propriétaires, leur signification et parfois leur niveau de qualité ou de sensibilité.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la découverte, la compréhension et la gouvernance des données', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les données à lui seul', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métadonnées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les données brutes et transformées dans une plateforme analytique ?',
                        'explanation' => 'La séparation permet de conserver les sources originales tout en construisant des couches nettoyées et adaptées aux usages analytiques.',
                        'choices' => [
                            ['choice_text' => 'Préserver les données sources tout en permettant des transformations contrôlées', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les besoins de validation', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute analyse', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les données publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe si une plateforme analytique donne à tous les analystes accès à toutes les données ?',
                        'explanation' => 'Un accès excessif augmente le risque d’exposition de données sensibles et viole souvent le principe du moindre privilège.',
                        'choices' => [
                            ['choice_text' => 'Une exposition inutile de données sensibles', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la qualité des données', 'is_correct' => false],
                            ['choice_text' => 'Une réduction des coûts de stockage', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure isolation des environnements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pipelines de données doivent-ils être observables ?',
                        'explanation' => 'Les pipelines peuvent échouer, ralentir ou produire des données incorrectes. L’observabilité permet de détecter ces problèmes et d’en identifier les causes.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les erreurs, retards et anomalies dans les traitements', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute transformation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une architecture de données découplée entre ingestion, stockage et transformation ?',
                        'explanation' => 'Le découplage permet d’adapter indépendamment les capacités et technologies de chaque étape.',
                        'choices' => [
                            ['choice_text' => 'Permettre de faire évoluer les étapes du pipeline indépendamment', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données sont toujours cohérentes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les files d’attente', 'is_correct' => false],
                            ['choice_text' => 'Empêcher le stockage de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des données doit-elle être traitée comme une responsabilité opérationnelle ?',
                        'explanation' => 'Les erreurs de données peuvent produire des décisions erronées même si les infrastructures fonctionnent parfaitement.',
                        'choices' => [
                            ['choice_text' => 'Parce que des données incorrectes peuvent rendre les résultats analytiques inutilisables', 'is_correct' => true],
                            ['choice_text' => 'Parce que la qualité est uniquement un problème de stockage', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud garantit automatiquement la qualité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les pipelines ne peuvent jamais échouer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe aide à protéger les données sensibles dans une plateforme analytique ?',
                        'explanation' => 'Le contrôle d’accès fin, le chiffrement, la classification et l’audit permettent de limiter l’exposition des données sensibles.',
                        'choices' => [
                            ['choice_text' => 'Combiner classification, contrôle d’accès, chiffrement et audit', 'is_correct' => true],
                            ['choice_text' => 'Autoriser toutes les équipes à tout lire', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métadonnées', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture analytique cloud doit-elle tenir compte du coût de lecture des données ?',
                        'explanation' => 'Certaines plateformes facturent la lecture, le traitement ou le transfert. Une architecture inefficace peut donc créer des coûts importants même si le stockage reste peu coûteux.',
                        'choices' => [
                            ['choice_text' => 'Parce que les traitements et transferts peuvent représenter une part importante de la facture', 'is_correct' => true],
                            ['choice_text' => 'Parce que le stockage est toujours gratuit', 'is_correct' => false],
                            ['choice_text' => 'Parce que les lectures n’utilisent aucune ressource', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données analytiques ne peuvent jamais être déplacées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Professional — Plateforme, DevSecOps et automatisation',
                'description' => 'Évaluez la maturité des pratiques cloud autour de CI/CD, infrastructure as code, sécurité et automatisation.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi l’Infrastructure as Code est-elle importante à l’échelle d’une organisation ?',
                        'explanation' => 'IaC permet de rendre les environnements reproductibles, versionnés et auditables, tout en réduisant certaines modifications manuelles.',
                        'choices' => [
                            ['choice_text' => 'Rendre les environnements reproductibles, versionnés et automatisables', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les tests', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification d’infrastructure', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les équipes de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer des contrôles de sécurité dans les pipelines CI/CD ?',
                        'explanation' => 'Les contrôles automatisés permettent d’identifier les vulnérabilités et mauvaises configurations avant leur arrivée en production.',
                        'choices' => [
                            ['choice_text' => 'Détecter plus tôt les problèmes de sécurité et réduire le coût de correction', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les tests fonctionnels', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute revue de code', 'is_correct' => false],
                            ['choice_text' => 'Rendre les applications automatiquement sans bug', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un pipeline reproductible ?',
                        'explanation' => 'La reproductibilité réduit les différences entre exécutions et rend les déploiements plus fiables.',
                        'choices' => [
                            ['choice_text' => 'Obtenir des résultats de build et déploiement cohérents', 'is_correct' => true],
                            ['choice_text' => 'Créer des environnements différents à chaque exécution', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les artefacts', 'is_correct' => false],
                            ['choice_text' => 'Éviter les contrôles de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets doivent-ils être injectés au moment du déploiement plutôt que stockés dans le code ?',
                        'explanation' => 'La séparation des secrets du code réduit le risque de publication accidentelle et facilite leur rotation.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition des secrets et simplifier leur rotation', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les déploiements automatisés', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage du blue-green deployment ?',
                        'explanation' => 'Deux environnements permettent de basculer progressivement ou rapidement entre une version actuelle et une nouvelle version.',
                        'choices' => [
                            ['choice_text' => 'Faciliter une bascule contrôlée et un rollback rapide', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les tests', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement les coûts à zéro', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un policy check dans une pipeline cloud ?',
                        'explanation' => 'Un policy check vérifie que l’infrastructure ou le code respecte certaines règles avant son déploiement.',
                        'choices' => [
                            ['choice_text' => 'Bloquer ou signaler les changements qui violent les standards définis', 'is_correct' => true],
                            ['choice_text' => 'Créer des utilisateurs sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests unitaires', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les artefacts de build doivent-ils être identifiables et versionnés ?',
                        'explanation' => 'La traçabilité des artefacts permet de relier une version déployée à son code source et facilite les investigations et rollbacks.',
                        'choices' => [
                            ['choice_text' => 'Permettre la traçabilité et la reproductibilité des déploiements', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les anciennes versions sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Rendre les artefacts publics', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les rollbacks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’automatisation doit-elle être accompagnée de contrôles d’autorisation ?',
                        'explanation' => 'Une automatisation possède souvent des privilèges importants. Si elle est compromise ou mal configurée, elle peut effectuer des changements à grande échelle.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une automatisation compromise peut avoir un impact très large', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’automatisation ne peut jamais être sécurisée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les pipelines ne peuvent pas être surveillés', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud interdit les comptes de service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe réduit le risque d’une pipeline CI/CD compromise ?',
                        'explanation' => 'La séparation des environnements, les permissions minimales, les artefacts signés et les contrôles d’approbation réduisent le rayon d’impact d’une pipeline compromise.',
                        'choices' => [
                            ['choice_text' => 'Combiner moindre privilège, isolation et vérification des artefacts', 'is_correct' => true],
                            ['choice_text' => 'Donner à la pipeline un accès administrateur permanent à tout le cloud', 'is_correct' => false],
                            ['choice_text' => 'Désactiver toutes les protections', 'is_correct' => false],
                            ['choice_text' => 'Partager les mêmes secrets entre toutes les pipelines', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles de sécurité doivent-ils être exécutés aussi près que possible de la création du changement ?',
                        'explanation' => 'Détecter les erreurs tôt réduit le coût et la difficulté de correction et empêche qu’une configuration dangereuse ne se propage.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les problèmes avant leur propagation vers les environnements supérieurs', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les revues de production', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les environnements identiques dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Professional — Résilience et continuité d’entreprise',
                'description' => 'Scénarios professionnels de continuité, reprise, résilience multi-région et gestion des dépendances critiques.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une entreprise exige un RTO de cinq minutes pour une application critique. Quelle stratégie est la plus cohérente ?',
                        'explanation' => 'Un RTO très faible exige généralement une capacité de reprise pré-provisionnée ou une architecture active permettant de limiter fortement le temps de récupération.',
                        'choices' => [
                            ['choice_text' => 'Une restauration complète manuelle à partir d’une sauvegarde froide', 'is_correct' => false],
                            ['choice_text' => 'Une architecture redondante ou un environnement de reprise rapidement activable', 'is_correct' => true],
                            ['choice_text' => 'Une sauvegarde mensuelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un serveur unique sans réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture multi-région n’élimine-t-elle pas tous les risques de disponibilité ?',
                        'explanation' => 'Les dépendances communes, les erreurs applicatives, les DNS, les identités ou les changements de configuration peuvent encore constituer des points de défaillance.',
                        'choices' => [
                            ['choice_text' => 'Des dépendances communes peuvent encore provoquer une panne globale', 'is_correct' => true],
                            ['choice_text' => 'Une architecture multi-région ne peut jamais être redondante', 'is_correct' => false],
                            ['choice_text' => 'Les données disparaissent automatiquement entre les régions', 'is_correct' => false],
                            ['choice_text' => 'Le réseau ne fonctionne pas entre régions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d’effectuer régulièrement des game days ?',
                        'explanation' => 'Les game days simulent des pannes ou incidents afin de tester les procédures, la détection, la coordination et les architectures de reprise.',
                        'choices' => [
                            ['choice_text' => 'Tester la résilience et les procédures dans des conditions contrôlées', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dépendance à un service central partagé peut-elle constituer un risque organisationnel ?',
                        'explanation' => 'Un service partagé qui devient indisponible peut affecter plusieurs produits simultanément et devenir un point de défaillance organisationnel.',
                        'choices' => [
                            ['choice_text' => 'Une panne du service partagé peut affecter de nombreux workloads simultanément', 'is_correct' => true],
                            ['choice_text' => 'Les services partagés sont toujours plus coûteux', 'is_correct' => false],
                            ['choice_text' => 'Le partage empêche toute sécurité', 'is_correct' => false],
                            ['choice_text' => 'Les services partagés ne peuvent pas être surveillés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel choix est particulièrement important avant de déclarer qu’un plan de reprise est « prêt » ?',
                        'explanation' => 'Le plan doit être testé et ses objectifs mesurés, notamment en matière de temps de récupération, intégrité des données et dépendances.',
                        'choices' => [
                            ['choice_text' => 'Un test réel ou simulé démontrant qu’il respecte les objectifs définis', 'is_correct' => true],
                            ['choice_text' => 'La présence d’un simple document non testé', 'is_correct' => false],
                            ['choice_text' => 'La suppression des logs de production', 'is_correct' => false],
                            ['choice_text' => 'La désactivation de la supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réplication géographique doit-elle être associée à une stratégie de cohérence des données ?',
                        'explanation' => 'Des copies réparties entre régions peuvent diverger si les écritures ne sont pas synchronisées. Le niveau de cohérence acceptable doit donc être défini selon le métier.',
                        'choices' => [
                            ['choice_text' => 'Parce que les données répliquées peuvent temporairement diverger', 'is_correct' => true],
                            ['choice_text' => 'Parce que la réplication empêche toute lecture', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud ne supporte pas les transactions', 'is_correct' => false],
                            ['choice_text' => 'Parce que les sauvegardes remplacent toujours la réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un dependency mapping dans la continuité cloud ?',
                        'explanation' => 'Le mapping permet d’identifier les services dont dépend une application afin de ne pas traiter la reprise du système principal sans ses prérequis.',
                        'choices' => [
                            ['choice_text' => 'Identifier les dépendances nécessaires à une reprise fonctionnelle', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de reprise doit-elle prendre en compte les personnes et pas seulement la technologie ?',
                        'explanation' => 'Une reprise exige des responsabilités, procédures, accès, décisions et communications. Une architecture parfaite ne suffit pas si personne ne sait l’activer.',
                        'choices' => [
                            ['choice_text' => 'Parce que les procédures, responsabilités et décisions humaines sont essentielles pendant une crise', 'is_correct' => true],
                            ['choice_text' => 'Parce que la technologie ne peut jamais fonctionner automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les humains remplacent toutes les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les équipes doivent éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut être révélé par un test de bascule qui respecte le RTO mais produit des données incohérentes ?',
                        'explanation' => 'Le temps de reprise n’est qu’un aspect du succès. L’intégrité et la cohérence des données doivent également respecter les objectifs métier.',
                        'choices' => [
                            ['choice_text' => 'La stratégie de reprise répond au RTO mais échoue sur la cohérence des données', 'is_correct' => true],
                            ['choice_text' => 'Le RTO est automatiquement trop élevé', 'is_correct' => false],
                            ['choice_text' => 'Le réseau est nécessairement inutilisable', 'is_correct' => false],
                            ['choice_text' => 'La sauvegarde n’a aucune utilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur moyen de maintenir la pertinence d’une stratégie de continuité cloud ?',
                        'explanation' => 'Les architectures évoluent. Les plans doivent donc être révisés et testés périodiquement pour rester alignés avec les systèmes réels.',
                        'choices' => [
                            ['choice_text' => 'La tester, la mesurer et la réviser régulièrement selon les changements d’architecture', 'is_correct' => true],
                            ['choice_text' => 'La documenter une seule fois puis ne plus la modifier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests après la première réussite', 'is_correct' => false],
                            ['choice_text' => 'Dépendre uniquement du fournisseur cloud', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cloud Professional — Décisions stratégiques et arbitrages',
                'description' => 'Évaluez les décisions d’architecture à long terme en tenant compte des coûts, risques, compétences, scalabilité et stratégie fournisseur.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une organisation veut réduire le vendor lock-in sans renoncer aux services cloud managés. Quelle approche est la plus pragmatique ?',
                        'explanation' => 'Une stratégie équilibrée consiste à utiliser des services propriétaires lorsque leur valeur est importante tout en isolant les dépendances critiques et en documentant les alternatives.',
                        'choices' => [
                            ['choice_text' => 'Éviter absolument tous les services propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Identifier les dépendances critiques et conserver des options de sortie réalistes', 'is_correct' => true],
                            ['choice_text' => 'Construire systématiquement toutes les solutions en interne', 'is_correct' => false],
                            ['choice_text' => 'Utiliser plusieurs fournisseurs pour chaque composant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une stratégie multicloud adoptée uniquement pour « éviter la dépendance » ?',
                        'explanation' => 'Un multicloud mal justifié peut multiplier les outils, compétences et modèles opérationnels sans produire suffisamment de valeur pour compenser cette complexité.',
                        'choices' => [
                            ['choice_text' => 'Augmenter fortement la complexité sans bénéfice équivalent', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement les coûts', 'is_correct' => false],
                            ['choice_text' => 'Garantir une disponibilité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les problèmes IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision cloud stratégique doit-elle considérer les compétences disponibles ?',
                        'explanation' => 'Une architecture excellente sur le papier peut devenir difficile à exploiter si l’organisation ne possède pas les compétences nécessaires ou ne peut pas les acquérir raisonnablement.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’exploitabilité dépend des compétences et capacités de l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Parce que les services cloud ne nécessitent jamais de compétences', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne dépendent jamais des équipes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les compétences ne changent jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis peut exister entre standardisation et innovation dans une plateforme cloud ?',
                        'explanation' => 'Trop de standardisation peut ralentir l’innovation, tandis qu’une absence de standards augmente le risque de fragmentation. Une plateforme efficace définit un socle commun tout en laissant des espaces d’expérimentation contrôlés.',
                        'choices' => [
                            ['choice_text' => 'Contrôle et cohérence contre liberté et expérimentation', 'is_correct' => true],
                            ['choice_text' => 'Disponibilité contre stockage uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sécurité contre impossibilité de développer', 'is_correct' => false],
                            ['choice_text' => 'Coût contre absence de réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capacité de sortie d’un fournisseur doit-elle être considérée avant une adoption stratégique importante ?',
                        'explanation' => 'Une architecture peut devenir difficile à déplacer si elle dépend fortement de services propriétaires ou de formats spécifiques. Évaluer la sortie permet de comprendre les risques futurs.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre le coût, le délai et la faisabilité d’une éventuelle migration future', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’une migration sera forcément nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout service managé', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur doit peser dans le choix entre une architecture très distribuée et une architecture plus simple ?',
                        'explanation' => 'Une architecture distribuée peut offrir scalabilité et résilience, mais augmente la complexité opérationnelle. Le niveau de distribution doit être proportionné au besoin réel.',
                        'choices' => [
                            ['choice_text' => 'Le rapport entre les bénéfices de scalabilité/résilience et la complexité supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Le nombre maximal de services disponibles chez le fournisseur', 'is_correct' => false],
                            ['choice_text' => 'La préférence pour les technologies les plus récentes uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de régions disponibles sans considération métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectures cloud doivent-elles être évaluées selon leur coût total de possession ?',
                        'explanation' => 'Le coût réel comprend infrastructure, licences, transfert, exploitation, compétences, sécurité, support et éventuellement migration future.',
                        'choices' => [
                            ['choice_text' => 'Parce que le prix d’une ressource ne représente qu’une partie du coût réel', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts d’exploitation sont toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que les licences n’existent pas dans le cloud', 'is_correct' => false],
                            ['choice_text' => 'Parce que la migration future ne coûte jamais rien', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une architecture évolutive à long terme ?',
                        'explanation' => 'Une architecture évolutive doit pouvoir absorber la croissance du trafic, des données et des équipes sans nécessiter une refonte permanente.',
                        'choices' => [
                            ['choice_text' => 'Accompagner la croissance sans multiplier les refontes critiques', 'is_correct' => true],
                            ['choice_text' => 'Garder exactement la même capacité en permanence', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute innovation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les services managés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions d’architecture devraient-elles être documentées sous forme d’ADR ou équivalent ?',
                        'explanation' => 'Les Architecture Decision Records conservent le contexte, les alternatives et les raisons d’un choix, ce qui facilite la maintenance et les futures décisions.',
                        'choices' => [
                            ['choice_text' => 'Conserver le contexte et les raisons ayant conduit à une décision technique', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tout changement futur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les tests', 'is_correct' => false],
                            ['choice_text' => 'Éviter la gouvernance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un bon critère pour décider qu’un service doit être standardisé au niveau de la plateforme ?',
                        'explanation' => 'Les capacités répétées, critiques et communes sont de bons candidats à la standardisation car cela réduit les doublons et améliore la cohérence.',
                        'choices' => [
                            ['choice_text' => 'Une capacité fréquente, critique et commune à plusieurs équipes', 'is_correct' => true],
                            ['choice_text' => 'Une fonctionnalité utilisée une seule fois par une équipe', 'is_correct' => false],
                            ['choice_text' => 'Un service sans utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Une technologie choisie uniquement parce qu’elle est nouvelle', 'is_correct' => false],
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

                // Shuffle complete choice records so the correct answer
                // remains attached to its corresponding choice.
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