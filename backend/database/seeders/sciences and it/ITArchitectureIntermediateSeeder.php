<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ITArchitectureIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'it-architecture')->firstOrFail();

        $quizzes = [
            [
                'title' => 'IT Architecture Intermediate — Design Patterns et modularité',
                'description' => 'Approfondissez la modularité, les frontières de responsabilité, le couplage, la cohésion et les choix de conception.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une forte cohésion est-elle généralement recherchée dans un composant ?',
                        'explanation' => 'Une forte cohésion signifie que les responsabilités d’un composant sont étroitement liées, ce qui facilite sa compréhension et son évolution.',
                        'choices' => [
                            ['choice_text' => 'Pour regrouper des responsabilités fortement liées et faciliter la maintenance', 'is_correct' => true],
                            ['choice_text' => 'Pour multiplier les responsabilités sans relation', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le nombre de dépendances externes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher tout changement futur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut résulter d’un couplage excessif entre modules ?',
                        'explanation' => 'Un changement local peut provoquer des modifications dans de nombreux modules lorsque les dépendances sont trop fortes.',
                        'choices' => [
                            ['choice_text' => 'Un changement dans un module peut entraîner des modifications en cascade', 'is_correct' => true],
                            ['choice_text' => 'Les modules deviennent automatiquement plus indépendants', 'is_correct' => false],
                            ['choice_text' => 'Les performances réseau augmentent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les tests deviennent toujours plus simples', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des frontières de domaine dans une architecture modulaire ?',
                        'explanation' => 'Des frontières claires permettent de limiter les responsabilités et d’éviter que des détails internes d’un domaine contaminent les autres.',
                        'choices' => [
                            ['choice_text' => 'Limiter les responsabilités et réduire les dépendances entre domaines', 'is_correct' => true],
                            ['choice_text' => 'Forcer toutes les fonctions à partager les mêmes données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les interfaces', 'is_correct' => false],
                            ['choice_text' => 'Créer le maximum de modules possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une interface stable est-elle utile lorsque l’implémentation évolue ?',
                        'explanation' => 'Une interface stable permet aux consommateurs de continuer à fonctionner malgré les changements internes.',
                        'choices' => [
                            ['choice_text' => 'Elle protège les consommateurs contre certains changements internes', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute évolution de l’implémentation', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de tests', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une meilleure performance dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage d’un composant ayant une responsabilité clairement définie ?',
                        'explanation' => 'Une responsabilité claire facilite le test, la compréhension, le remplacement et l’évolution du composant.',
                        'choices' => [
                            ['choice_text' => 'Le composant est plus facile à comprendre, tester et remplacer', 'is_correct' => true],
                            ['choice_text' => 'Le composant doit nécessairement contenir toutes les règles métier', 'is_correct' => false],
                            ['choice_text' => 'Le composant devient indépendant de toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Le composant ne peut plus communiquer avec d’autres composants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de faire dépendre directement plusieurs composants d’une base de données interne appartenant à un autre domaine ?',
                        'explanation' => 'Cela expose les détails internes du domaine et crée un couplage fort autour du schéma de données.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter un couplage fort autour des détails internes du stockage', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une base de données ne peut jamais être partagée', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute lecture de données', 'is_correct' => false],
                            ['choice_text' => 'Parce que les APIs sont toujours plus rapides', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une couche d’abstraction devant une technologie externe ?',
                        'explanation' => 'Une abstraction peut limiter l’impact d’un changement de fournisseur ou de bibliothèque sur le reste du système.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance directe du système à une technologie spécifique', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun fournisseur ne pourra jamais changer', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute intégration externe', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’une abstraction masque une complexité excessive ?',
                        'explanation' => 'Une abstraction trop grande peut devenir difficile à comprendre et reproduire elle-même le couplage qu’elle cherchait à réduire.',
                        'choices' => [
                            ['choice_text' => 'Elle peut devenir une couche complexe difficile à comprendre et à maintenir', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit automatiquement une meilleure architecture', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les tests inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les composants devraient-ils limiter les dépendances qu’ils exposent ?',
                        'explanation' => 'Moins de dépendances externes signifie généralement moins de points d’impact lors des changements.',
                        'choices' => [
                            ['choice_text' => 'Réduire le nombre de causes externes pouvant provoquer une modification', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les composants de communiquer', 'is_correct' => false],
                            ['choice_text' => 'Pour maximiser le nombre d’intégrations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle propriété est généralement recherchée lorsqu’un module peut être modifié sans modifier plusieurs autres modules ?',
                        'explanation' => 'Cette propriété indique qu’un module possède des frontières et dépendances bien maîtrisées.',
                        'choices' => [
                            ['choice_text' => 'Une faible dépendance et une bonne séparation des responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Un couplage maximal', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale d’interfaces', 'is_correct' => false],
                            ['choice_text' => 'Une duplication systématique du code', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — APIs et intégration',
                'description' => 'Maîtrisez la conception d’APIs, la compatibilité, la communication synchrone et asynchrone et les stratégies d’intégration.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une API publique doit-elle définir clairement son contrat ?',
                        'explanation' => 'Le contrat permet aux consommateurs de savoir quelles opérations, données et règles sont garanties.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre le comportement attendu prévisible pour les consommateurs', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute évolution de l’API', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la nécessité d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro erreur réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une modification destructive d’une API peut-elle être problématique ?',
                        'explanation' => 'Les consommateurs existants peuvent dépendre du comportement ou du format précédent.',
                        'choices' => [
                            ['choice_text' => 'Elle peut casser les consommateurs qui dépendent de l’ancien contrat', 'is_correct' => true],
                            ['choice_text' => 'Une API peut changer sans aucun impact externe', 'is_correct' => false],
                            ['choice_text' => 'Les consommateurs adaptent toujours leur code automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les APIs n’ont pas de contrats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi introduire une nouvelle version d’API lorsqu’une modification incompatible est nécessaire ?',
                        'explanation' => 'Une version distincte permet une période de transition pour les consommateurs existants.',
                        'choices' => [
                            ['choice_text' => 'Permettre une migration progressive des consommateurs', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les anciennes applications seront supprimées immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute évolution fonctionnelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une requête synchrone vers plusieurs dépendances peut-elle augmenter la latence ?',
                        'explanation' => 'Le temps de réponse peut dépendre des appels successifs ou parallèles vers plusieurs services distants.',
                        'choices' => [
                            ['choice_text' => 'Le temps de réponse dépend aussi des appels aux dépendances distantes', 'is_correct' => true],
                            ['choice_text' => 'Les appels distants sont toujours instantanés', 'is_correct' => false],
                            ['choice_text' => 'La latence n’existe pas dans les APIs', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances distantes accélèrent toujours la réponse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi préférer parfois un traitement asynchrone pour une opération longue ?',
                        'explanation' => 'L’asynchronisme permet au client de ne pas rester bloqué pendant toute la durée du traitement.',
                        'choices' => [
                            ['choice_text' => 'Éviter de maintenir une requête ouverte pendant toute la durée du traitement', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le traitement sera instantané', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les files de messages', 'is_correct' => false],
                            ['choice_text' => 'Empêcher le traitement en arrière-plan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les retries doivent-ils être limités dans un système distribué ?',
                        'explanation' => 'Trop de retries peuvent amplifier une panne en surchargeant une dépendance déjà en difficulté.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une panne temporaire soit amplifiée par des tentatives excessives', 'is_correct' => true],
                            ['choice_text' => 'Garantir que chaque requête réussira', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les timeouts', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute résilience', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les timeouts doivent-ils être définis sur les appels distants ?',
                        'explanation' => 'Un timeout empêche une dépendance lente ou bloquée de retenir indéfiniment les ressources du service appelant.',
                        'choices' => [
                            ['choice_text' => 'Empêcher qu’une dépendance lente monopolise indéfiniment les ressources', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la dépendance sera disponible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les erreurs réseau', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une file de messages peut-elle améliorer le découplage ?',
                        'explanation' => 'Le producteur et le consommateur peuvent fonctionner à des rythmes différents et être déployés séparément.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux producteurs et consommateurs d’évoluer avec moins de dépendance temporelle', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les messages seront traités instantanément', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les erreurs de données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les APIs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un producteur envoie des messages beaucoup plus vite que le consommateur ?',
                        'explanation' => 'Une différence durable de débit peut faire croître la file et épuiser le stockage ou les ressources.',
                        'choices' => [
                            ['choice_text' => 'Une accumulation de messages et une augmentation de la latence de traitement', 'is_correct' => true],
                            ['choice_text' => 'Le consommateur devient automatiquement plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Les messages sont toujours supprimés', 'is_correct' => false],
                            ['choice_text' => 'Le système devient sans état', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les erreurs et codes de réponse d’une API ?',
                        'explanation' => 'Les consommateurs doivent savoir comment interpréter les différents résultats et appliquer les traitements adaptés.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux consommateurs de traiter correctement les différents scénarios', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute gestion des erreurs côté client', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs serveur', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune erreur ne sera retournée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — Données et architecture de persistance',
                'description' => 'Explorez la sélection des technologies de données, réplication, cache, cohérence et stratégies de persistance.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le choix d’une base de données doit-il partir des besoins d’accès aux données ?',
                        'explanation' => 'Les modèles de lecture, écriture, cohérence, volume et relations influencent directement la technologie adaptée.',
                        'choices' => [
                            ['choice_text' => 'Les patterns d’accès déterminent largement le stockage le plus adapté', 'is_correct' => true],
                            ['choice_text' => 'Toutes les bases répondent exactement aux mêmes besoins', 'is_correct' => false],
                            ['choice_text' => 'Le choix doit dépendre uniquement de la popularité du produit', 'is_correct' => false],
                            ['choice_text' => 'La structure des données n’a aucune importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une lecture depuis un réplica peut-elle être utile ?',
                        'explanation' => 'Les réplicas peuvent répartir certaines charges de lecture et réduire la pression sur le nœud principal.',
                        'choices' => [
                            ['choice_text' => 'Répartir certaines lectures et réduire la charge sur le système principal', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les données sont toujours synchrones instantanément', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les écritures', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque doit être considéré avec une réplication asynchrone ?',
                        'explanation' => 'Un réplica peut être légèrement en retard et servir temporairement des données plus anciennes.',
                        'choices' => [
                            ['choice_text' => 'Une lecture peut temporairement retourner des données obsolètes', 'is_correct' => true],
                            ['choice_text' => 'Toutes les données sont automatiquement perdues', 'is_correct' => false],
                            ['choice_text' => 'Les écritures deviennent toujours impossibles', 'is_correct' => false],
                            ['choice_text' => 'La base devient automatiquement cohérente partout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un cache devant une base de données ?',
                        'explanation' => 'Le cache peut éviter certaines lectures répétitives vers la base et réduire la latence.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines lectures répétitives et améliorer la latence', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données en cache sont toujours à jour', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de persistance', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les transactions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut résulter d’une mauvaise stratégie d’invalidation du cache ?',
                        'explanation' => 'Le système peut continuer à servir des données anciennes après leur modification.',
                        'choices' => [
                            ['choice_text' => 'La diffusion de données obsolètes', 'is_correct' => true],
                            ['choice_text' => 'La suppression automatique de toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Une cohérence parfaite', 'is_correct' => false],
                            ['choice_text' => 'L’élimination des besoins de monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une transaction est-elle importante dans certains traitements métier ?',
                        'explanation' => 'Elle permet de maintenir un ensemble de modifications comme une unité cohérente selon les garanties de la technologie utilisée.',
                        'choices' => [
                            ['choice_text' => 'Pour maintenir certaines opérations liées dans un état cohérent', 'is_correct' => true],
                            ['choice_text' => 'Pour accélérer toutes les requêtes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contraintes métier', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les workloads analytiques des workloads transactionnels dans certaines architectures ?',
                        'explanation' => 'Les requêtes analytiques lourdes peuvent consommer des ressources et dégrader les traitements transactionnels.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une charge analytique importante pénalise les transactions', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une même donnée ne peut jamais avoir deux usages', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute analyse', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la cohérence des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stratégies de partitionnement peuvent-elles améliorer certaines architectures de données ?',
                        'explanation' => 'Le partitionnement répartit les données ou la charge afin d’éviter qu’un seul stockage ou segment ne concentre toutes les opérations.',
                        'choices' => [
                            ['choice_text' => 'Répartir les données et la charge lorsque le volume ou le trafic augmente', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement une meilleure cohérence', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les index', 'is_correct' => false],
                            ['choice_text' => 'Éviter toutes les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi chiffrer les données sensibles en transit et au repos ?',
                        'explanation' => 'Les deux états présentent des risques différents d’exposition.',
                        'choices' => [
                            ['choice_text' => 'Protéger les données pendant leur transport et lorsqu’elles sont stockées', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro compromission', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester la restauration d’une base de données séparément du backup ?',
                        'explanation' => 'La réussite d’une sauvegarde ne prouve pas que les données peuvent être correctement restaurées dans un environnement fonctionnel.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que la procédure produit réellement une base exploitable', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une sauvegarde ne contient jamais les bonnes données', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes anciennes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute réplication', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — Résilience et haute disponibilité',
                'description' => 'Approfondissez la redondance, le failover, les dépendances critiques et les stratégies de résilience.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi la redondance seule ne garantit-elle pas la haute disponibilité ?',
                        'explanation' => 'Les mécanismes de bascule, les dépendances et la configuration doivent également fonctionner correctement.',
                        'choices' => [
                            ['choice_text' => 'Les mécanismes de bascule et les dépendances doivent aussi fonctionner', 'is_correct' => true],
                            ['choice_text' => 'La redondance garantit toujours zéro interruption', 'is_correct' => false],
                            ['choice_text' => 'Les composants redondants n’ont jamais besoin de supervision', 'is_correct' => false],
                            ['choice_text' => 'Un deuxième serveur suffit toujours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi identifier les Single Points of Failure ?',
                        'explanation' => 'Ils représentent les composants dont une seule défaillance peut provoquer un impact majeur.',
                        'choices' => [
                            ['choice_text' => 'Identifier les composants dont la panne pourrait interrompre une fonction critique', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter volontairement le nombre de pannes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute redondance', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un mécanisme de failover automatique ?',
                        'explanation' => 'Il réduit le délai nécessaire pour transférer le service vers une ressource disponible.',
                        'choices' => [
                            ['choice_text' => 'Réduire le temps de récupération lors de certaines pannes', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la cause de la panne est immédiatement corrigée', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de reprise', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les health checks sont-ils importants pour la haute disponibilité ?',
                        'explanation' => 'Ils permettent de déterminer si une instance est réellement apte à recevoir du trafic.',
                        'choices' => [
                            ['choice_text' => 'Identifier quelles instances sont suffisamment saines pour servir du trafic', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’application ne peut jamais tomber', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement de nouvelles fonctionnalités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un health check trop superficiel peut-il être dangereux ?',
                        'explanation' => 'Un serveur peut répondre au niveau réseau tout en étant incapable d’assurer correctement sa fonction métier.',
                        'choices' => [
                            ['choice_text' => 'Il peut considérer comme sain un service qui ne fonctionne pas réellement', 'is_correct' => true],
                            ['choice_text' => 'Il empêche toujours les serveurs de répondre', 'is_correct' => false],
                            ['choice_text' => 'Il supprime le réseau', 'is_correct' => false],
                            ['choice_text' => 'Il garantit zéro faux positif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépendance unique peut-elle annuler une stratégie de redondance ?',
                        'explanation' => 'Même si plusieurs serveurs applicatifs sont disponibles, une dépendance unique défaillante peut interrompre le service.',
                        'choices' => [
                            ['choice_text' => 'Une dépendance partagée peut devenir le véritable Single Point of Failure', 'is_correct' => true],
                            ['choice_text' => 'Les dépendances ne concernent jamais la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Une redondance applicative garantit toute l’architecture', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances sont toujours redondantes automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester régulièrement les scénarios de panne ?',
                        'explanation' => 'Les systèmes évoluent et une procédure qui fonctionnait auparavant peut devenir incorrecte.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que la résilience réelle correspond toujours à l’architecture prévue', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune panne ne surviendra', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les mécanismes de backup', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un failover mal testé peut-il être plus dangereux qu’un failover manuel connu ?',
                        'explanation' => 'Un mécanisme automatique supposé fiable peut échouer au pire moment si ses dépendances ou conditions de déclenchement n’ont jamais été validées.',
                        'choices' => [
                            ['choice_text' => 'Une bascule supposée automatique peut échouer lorsqu’elle est réellement nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Le failover automatique ne peut jamais échouer', 'is_correct' => false],
                            ['choice_text' => 'Un failover manuel est toujours plus rapide', 'is_correct' => false],
                            ['choice_text' => 'La redondance supprime les besoins de test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir un ordre de récupération pour les composants dépendants ?',
                        'explanation' => 'Un service ne peut pas fonctionner correctement si ses dépendances essentielles ne sont pas encore disponibles.',
                        'choices' => [
                            ['choice_text' => 'Respecter les dépendances nécessaires au fonctionnement du système', 'is_correct' => true],
                            ['choice_text' => 'Restaurer les composants dans un ordre aléatoire', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les composants secondaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture résiliente doit-elle aussi gérer les défaillances partielles ?',
                        'explanation' => 'Les systèmes distribués peuvent avoir certains composants disponibles alors que d’autres sont lents ou indisponibles.',
                        'choices' => [
                            ['choice_text' => 'Les pannes partielles sont fréquentes dans les systèmes distribués et doivent être anticipées', 'is_correct' => true],
                            ['choice_text' => 'Les systèmes distribués échouent toujours complètement', 'is_correct' => false],
                            ['choice_text' => 'Une panne partielle n’a jamais d’impact', 'is_correct' => false],
                            ['choice_text' => 'Les défaillances partielles ne concernent que le réseau local', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — Sécurité et contrôle des frontières',
                'description' => 'Approfondissez les modèles de confiance, segmentation, identité, chiffrement et sécurité des interfaces.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les frontières de confiance sont-elles importantes en architecture ?',
                        'explanation' => 'Une frontière de confiance représente un passage où des données ou identités provenant d’un contexte doivent être validées.',
                        'choices' => [
                            ['choice_text' => 'Identifier les endroits où les données, identités et permissions doivent être contrôlées', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les contrôles entre systèmes', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les composants sont également fiables', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas considérer un réseau interne comme automatiquement fiable ?',
                        'explanation' => 'Une menace peut provenir d’un poste compromis, d’un compte abusé ou d’un mouvement latéral.',
                        'choices' => [
                            ['choice_text' => 'Une compromission peut se produire à l’intérieur du réseau et nécessiter aussi des contrôles internes', 'is_correct' => true],
                            ['choice_text' => 'Les réseaux internes sont toujours parfaitement sécurisés', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement interne est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs internes ne peuvent jamais être compromis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi segmenter les environnements de développement et de production ?',
                        'explanation' => 'La séparation limite les chemins d’accès et empêche certaines erreurs ou compromissions de se propager vers la production.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’un incident de développement affecte la production', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les tests de développement', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les deux environnements sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Donner les mêmes privilèges partout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’authentification et l’autorisation doivent-elles être distinguées ?',
                        'explanation' => 'L’authentification vérifie l’identité tandis que l’autorisation détermine ce que cette identité peut faire.',
                        'choices' => [
                            ['choice_text' => 'L’une vérifie l’identité et l’autre détermine les permissions', 'is_correct' => true],
                            ['choice_text' => 'Les deux sont exactement la même opération', 'is_correct' => false],
                            ['choice_text' => 'L’autorisation remplace toujours le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'L’authentification définit toujours toutes les permissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un service doit-il utiliser une identité propre plutôt qu’un compte humain partagé ?',
                        'explanation' => 'Une identité dédiée permet une meilleure gestion du cycle de vie, des permissions et de la traçabilité.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la traçabilité et appliquer des permissions adaptées au service', 'is_correct' => true],
                            ['choice_text' => 'Partager automatiquement tous les privilèges humains', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro compromission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une API sensible doit-elle être protégée par une authentification adaptée ?',
                        'explanation' => 'Une API qui donne accès à des données ou opérations sensibles doit vérifier l’identité des appelants.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’accès aux clients ou utilisateurs autorisés', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les appels réussiront', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de logs', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests d’intégration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chiffrement de transport ne remplace-t-il pas l’autorisation ?',
                        'explanation' => 'Le chiffrement protège la communication mais ne détermine pas si l’appelant a le droit d’effectuer l’opération.',
                        'choices' => [
                            ['choice_text' => 'Il protège la communication mais ne définit pas les permissions de l’appelant', 'is_correct' => true],
                            ['choice_text' => 'Le chiffrement donne automatiquement tous les droits', 'is_correct' => false],
                            ['choice_text' => 'L’autorisation est inutile avec TLS', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement remplace toutes les politiques d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer le moindre privilège aux communications entre services ?',
                        'explanation' => 'Un service compromis ne devrait pas pouvoir appeler ou modifier librement toutes les autres parties du système.',
                        'choices' => [
                            ['choice_text' => 'Limiter les actions possibles en cas de compromission d’un service', 'is_correct' => true],
                            ['choice_text' => 'Permettre tous les flux internes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les politiques réseau', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun service ne tombera', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les événements de sécurité doivent-ils être corrélés entre plusieurs composants ?',
                        'explanation' => 'Une activité malveillante ou une panne peut traverser plusieurs services et produire des signaux répartis.',
                        'choices' => [
                            ['choice_text' => 'Reconstituer des événements qui se produisent sur plusieurs composants', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les logs individuels', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les composants ont le même problème', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets doivent-ils avoir un cycle de rotation ?',
                        'explanation' => 'La rotation réduit la durée pendant laquelle un secret compromis peut rester exploitable.',
                        'choices' => [
                            ['choice_text' => 'Limiter la durée d’exploitation potentielle d’un secret compromis', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’un secret ne sera jamais exposé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les comptes de service', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout chiffrement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — Cloud Architecture',
                'description' => 'Approfondissez la conception d’architectures cloud, la séparation des responsabilités, la résilience et les coûts.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle considérer la répartition géographique des ressources critiques ?',
                        'explanation' => 'Une dépendance à un seul emplacement augmente l’exposition à certaines pannes locales.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance à un seul emplacement ou zone de panne', 'is_correct' => true],
                            ['choice_text' => 'Garantir la même latence partout', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un service managé peut-il être préférable à une infrastructure autogérée ?',
                        'explanation' => 'Lorsqu’il répond aux besoins, le service managé peut réduire la charge d’exploitation et certains risques opérationnels.',
                        'choices' => [
                            ['choice_text' => 'Il peut réduire une partie de la charge opérationnelle et des tâches de maintenance', 'is_correct' => true],
                            ['choice_text' => 'Il garantit toujours un coût inférieur', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toute responsabilité de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Il rend les données automatiquement portables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il considérer le lock-in lors d’un choix de service cloud ?',
                        'explanation' => 'Une dépendance forte à une technologie propriétaire peut rendre une future migration plus complexe ou coûteuse.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la difficulté potentielle de changer de fournisseur ou de technologie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il faut toujours éviter tous les services managés', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que l’application ne sera jamais migrée', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les abstractions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle prévoir une stratégie de gestion des identités ?',
                        'explanation' => 'Les environnements cloud exposent de nombreuses ressources et APIs qui nécessitent des contrôles d’accès fins.',
                        'choices' => [
                            ['choice_text' => 'Contrôler qui peut accéder à quelles ressources et avec quelles permissions', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun utilisateur ne fera d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les identités locales', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute authentification multifactorielle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller le coût d’une architecture cloud pendant sa conception ?',
                        'explanation' => 'Les décisions prises dès la conception peuvent avoir un impact durable sur la consommation et la facture.',
                        'choices' => [
                            ['choice_text' => 'Identifier tôt les choix susceptibles de provoquer des coûts disproportionnés', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les ressources coûteuses', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests de performance', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût est fixe dans le cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle distinguer les données temporaires des données persistantes ?',
                        'explanation' => 'Certaines ressources peuvent être remplacées alors que les données métier doivent survivre à ces remplacements.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une ressource éphémère entraîne la perte de données importantes', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les données cloud sont temporaires', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le stockage persistant', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les instances sont permanentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser l’autoscaling avec des seuils bien conçus ?',
                        'explanation' => 'Des seuils appropriés permettent de répondre aux variations de charge sans provoquer trop de ressources inutiles ou des oscillations.',
                        'choices' => [
                            ['choice_text' => 'Adapter les ressources à la charge tout en évitant les oscillations inutiles', 'is_correct' => true],
                            ['choice_text' => 'Garantir toujours le nombre minimal d’instances', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les montées en charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectures cloud doivent-elles considérer les dépendances réseau ?',
                        'explanation' => 'Une application peut dépendre de routes, DNS, firewalls et connexions entre différentes ressources.',
                        'choices' => [
                            ['choice_text' => 'Une panne ou mauvaise configuration réseau peut interrompre plusieurs composants', 'is_correct' => true],
                            ['choice_text' => 'Le cloud garantit automatiquement tous les chemins réseau', 'is_correct' => false],
                            ['choice_text' => 'Le réseau n’est plus nécessaire dans le cloud', 'is_correct' => false],
                            ['choice_text' => 'Les services cloud n’utilisent aucune communication réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un design cloud doit-il prévoir la surveillance des quotas et limites de service ?',
                        'explanation' => 'Atteindre une limite de fournisseur peut empêcher la création ou l’augmentation de ressources.',
                        'choices' => [
                            ['choice_text' => 'Une limite de service peut empêcher une opération pourtant valide', 'is_correct' => true],
                            ['choice_text' => 'Les limites cloud sont toujours infinies', 'is_correct' => false],
                            ['choice_text' => 'Les quotas ne concernent que les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Les quotas remplacent les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle prévoir une stratégie de sortie des données ?',
                        'explanation' => 'La récupération des données peut devenir complexe si elles sont fortement dépendantes d’un format ou service propriétaire.',
                        'choices' => [
                            ['choice_text' => 'Préparer une migration ou récupération sans dépendance excessive à un mécanisme propriétaire', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune migration ne sera jamais nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données locales', 'is_correct' => false],
                            ['choice_text' => 'Éviter la sauvegarde des données', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — Scalabilité et performance',
                'description' => 'Analysez les bottlenecks, stratégies de scaling, cache, files d’attente et capacité dans les systèmes distribués.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un système peut-il devenir plus lent lorsqu’on ajoute des composants distribués ?',
                        'explanation' => 'Les communications réseau introduisent latence, sérialisation et nouveaux points de défaillance.',
                        'choices' => [
                            ['choice_text' => 'La distribution ajoute des communications et dépendances réseau', 'is_correct' => true],
                            ['choice_text' => 'Les composants distribués sont toujours plus rapides', 'is_correct' => false],
                            ['choice_text' => 'Le réseau n’a aucun impact sur la performance', 'is_correct' => false],
                            ['choice_text' => 'La distribution supprime tous les bottlenecks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi identifier le bottleneck principal avant d’optimiser ?',
                        'explanation' => 'Optimiser un composant qui n’est pas responsable de la limitation globale peut produire peu de bénéfices.',
                        'choices' => [
                            ['choice_text' => 'Concentrer les efforts sur la contrainte qui limite réellement le système', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier tous les composants en même temps', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute mesure', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’un seul changement suffira toujours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un cache partagé peut-il améliorer la scalabilité ?',
                        'explanation' => 'Il permet à plusieurs instances applicatives de réutiliser certaines données sans refaire le même calcul ou accès distant.',
                        'choices' => [
                            ['choice_text' => 'Réduire la répétition de certains accès coûteux à travers plusieurs instances', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données sont toujours fraîches', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la base de données', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute gestion de cache', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage une file de messages peut-elle apporter lors d’un pic de trafic ?',
                        'explanation' => 'Elle peut absorber temporairement une hausse du rythme de production alors que les consommateurs traitent à leur propre cadence.',
                        'choices' => [
                            ['choice_text' => 'Décorréler temporairement le rythme de production et de consommation', 'is_correct' => true],
                            ['choice_text' => 'Garantir un traitement instantané de tous les messages', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute latence', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les besoins de monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une file de messages nécessite-t-elle un monitoring de backlog ?',
                        'explanation' => 'Une accumulation persistante peut indiquer que les consommateurs ne suivent plus le rythme de production.',
                        'choices' => [
                            ['choice_text' => 'Détecter qu’un traitement accumule du retard', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les consommateurs sont toujours disponibles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les messages', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les métriques applicatives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le scaling horizontal peut-il nécessiter une session utilisateur externalisée ?',
                        'explanation' => 'Si l’état de session est stocké localement sur une instance, une autre instance peut ne pas le connaître lors du routage suivant.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’un utilisateur dépende de l’état local d’une seule instance', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les sessions utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les load balancers', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro latence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture stateless facilite-t-elle souvent le scaling horizontal ?',
                        'explanation' => 'Les instances peuvent être ajoutées ou supprimées avec moins de contraintes liées à l’état local.',
                        'choices' => [
                            ['choice_text' => 'Les instances peuvent être remplacées sans dépendre fortement d’un état local', 'is_correct' => true],
                            ['choice_text' => 'Une architecture stateless n’utilise jamais de données', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les dépendances externes', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une performance constante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une capacité de base de données peut devenir un bottleneck malgré le scaling des serveurs applicatifs ?',
                        'explanation' => 'La base peut rester une dépendance partagée et atteindre ses propres limites.',
                        'choices' => [
                            ['choice_text' => 'La base peut rester une ressource partagée dont la capacité est limitée', 'is_correct' => true],
                            ['choice_text' => 'Le scaling applicatif augmente toujours proportionnellement la capacité de la base', 'is_correct' => false],
                            ['choice_text' => 'Une base n’est jamais un bottleneck', 'is_correct' => false],
                            ['choice_text' => 'Les bases de données n’ont pas de limites de connexion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests de charge doivent-ils reproduire des profils réalistes ?',
                        'explanation' => 'Des scénarios irréalistes peuvent masquer les vrais bottlenecks et produire des conclusions erronées.',
                        'choices' => [
                            ['choice_text' => 'Un scénario réaliste permet de découvrir les limites représentatives du système', 'is_correct' => true],
                            ['choice_text' => 'Les tests artificiels sont toujours plus précis', 'is_correct' => false],
                            ['choice_text' => 'Les profils de charge n’ont aucun effet sur le diagnostic', 'is_correct' => false],
                            ['choice_text' => 'La charge réelle est toujours uniforme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le capacity planning doit-il considérer la croissance future ?',
                        'explanation' => 'Une capacité suffisante aujourd’hui peut devenir insuffisante si le trafic ou les données progressent.',
                        'choices' => [
                            ['choice_text' => 'Anticiper les besoins futurs et éviter une saturation prévisible', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la charge diminuera', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de performance', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute évolution architecturale', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — Migration et modernisation',
                'description' => 'Explorez les stratégies de migration, modernisation progressive, compatibilité et réduction des risques.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une migration importante doit-elle commencer par une analyse des dépendances ?',
                        'explanation' => 'Les dépendances cachées peuvent provoquer des interruptions lorsqu’un composant est déplacé ou remplacé.',
                        'choices' => [
                            ['choice_text' => 'Identifier les liens critiques avant de modifier les composants', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les dépendances avant analyse', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que tous les composants peuvent être migrés simultanément', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une migration progressive ?',
                        'explanation' => 'Elle limite le nombre de composants ou utilisateurs affectés par un problème pendant la transition.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque en transférant progressivement la charge ou les fonctionnalités', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la migration sera instantanée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les mécanismes de rollback', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie strangler peut-elle être utile lors de la modernisation d’une application legacy ?',
                        'explanation' => 'Elle permet de remplacer progressivement certaines fonctions de l’ancien système plutôt que de tout réécrire immédiatement.',
                        'choices' => [
                            ['choice_text' => 'Remplacer progressivement les capacités du système existant', 'is_correct' => true],
                            ['choice_text' => 'Forcer une réécriture complète immédiate', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’ancien système avant toute validation', 'is_correct' => false],
                            ['choice_text' => 'Empêcher la coexistence temporaire des systèmes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter une réécriture complète sans justification forte ?',
                        'explanation' => 'Une réécriture complète comporte souvent un risque important car elle reconstruit de nombreux comportements simultanément.',
                        'choices' => [
                            ['choice_text' => 'Le risque de réintroduire ou de découvrir de nombreux problèmes simultanément est élevé', 'is_correct' => true],
                            ['choice_text' => 'Une réécriture est toujours moins coûteuse', 'is_correct' => false],
                            ['choice_text' => 'Un ancien système ne peut jamais être remplacé progressivement', 'is_correct' => false],
                            ['choice_text' => 'Les migrations ne nécessitent pas de stratégie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la compatibilité entre ancienne et nouvelle version peut-elle être nécessaire pendant une migration ?',
                        'explanation' => 'Les deux versions peuvent fonctionner en parallèle pendant une période de transition.',
                        'choices' => [
                            ['choice_text' => 'Permettre une coexistence temporaire pendant le basculement', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les anciennes versions resteront éternellement', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout test de migration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les interfaces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une migration de schéma de données doit-elle être planifiée séparément du code lorsque nécessaire ?',
                        'explanation' => 'Une modification du schéma peut affecter plusieurs versions de l’application et nécessiter une transition contrôlée.',
                        'choices' => [
                            ['choice_text' => 'Les versions anciennes et nouvelles de l’application peuvent partager la même base pendant la transition', 'is_correct' => true],
                            ['choice_text' => 'Les bases de données ne dépendent jamais du code', 'is_correct' => false],
                            ['choice_text' => 'Une migration de schéma est toujours instantanée', 'is_correct' => false],
                            ['choice_text' => 'Les données n’ont pas de contraintes de compatibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le comportement avant une migration ?',
                        'explanation' => 'Des mesures de référence permettent de comparer l’ancien et le nouvel environnement.',
                        'choices' => [
                            ['choice_text' => 'Créer une baseline permettant de détecter les régressions après migration', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’ancien système est optimal', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mesure après migration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi prévoir un plan de retour arrière pendant une migration ?',
                        'explanation' => 'Une migration peut rencontrer des incompatibilités non découvertes lors des tests.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact si la nouvelle plateforme ne fonctionne pas comme prévu', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la migration échouera', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute phase de validation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’ancien système immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver les dépendances de l’ancien système pendant toute la migration peut-il poser problème ?',
                        'explanation' => 'Certaines dépendances peuvent limiter les gains attendus ou maintenir un risque opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent conserver le couplage et retarder la simplification recherchée', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent toujours le système plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Elles éliminent le besoin de tests', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent une migration sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une migration doit-elle inclure une période de validation post-bascule ?',
                        'explanation' => 'Certaines erreurs n’apparaissent qu’après l’activation réelle, sous trafic et conditions réelles.',
                        'choices' => [
                            ['choice_text' => 'Détecter les problèmes qui n’apparaissent qu’en conditions réelles', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le nouveau système ne changera plus', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout monitoring', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’ancien environnement immédiatement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — Architecture événementielle',
                'description' => 'Approfondissez les événements, files, brokers, découplage, consommateurs et cohérence dans les systèmes distribués.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel avantage principal offre une architecture événementielle ?',
                        'explanation' => 'Les producteurs et consommateurs peuvent être davantage découplés dans le temps et l’organisation.',
                        'choices' => [
                            ['choice_text' => 'Découpler les producteurs des consommateurs et permettre des traitements asynchrones', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les consommateurs sont toujours disponibles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les messages', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les appels synchrones', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un événement doit-il avoir un schéma compréhensible ?',
                        'explanation' => 'Les consommateurs doivent savoir comment interpréter les données transportées.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux consommateurs de traiter correctement le message', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro duplication', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de versioning', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute évolution du producteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une évolution incompatible du schéma d’événement est-elle risquée ?',
                        'explanation' => 'Des consommateurs existants peuvent ne pas comprendre la nouvelle structure.',
                        'choices' => [
                            ['choice_text' => 'Elle peut casser les consommateurs existants', 'is_correct' => true],
                            ['choice_text' => 'Les consommateurs adaptent toujours leur code automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les événements ne possèdent jamais de schéma', 'is_correct' => false],
                            ['choice_text' => 'Les brokers corrigent automatiquement les incompatibilités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la duplication d’un événement doit-elle être prise en compte ?',
                        'explanation' => 'Les systèmes distribués peuvent parfois délivrer plusieurs fois un même événement.',
                        'choices' => [
                            ['choice_text' => 'Le consommateur doit parfois pouvoir traiter le même événement plus d’une fois sans effet incorrect', 'is_correct' => true],
                            ['choice_text' => 'Les brokers garantissent toujours exactement une livraison', 'is_correct' => false],
                            ['choice_text' => 'La duplication est impossible dans les systèmes distribués', 'is_correct' => false],
                            ['choice_text' => 'La duplication améliore toujours la cohérence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe peut aider un consommateur à gérer les doublons ?',
                        'explanation' => 'Une logique idempotente permet de rejouer un événement sans produire de conséquences incorrectes répétées.',
                        'choices' => [
                            ['choice_text' => 'Concevoir le traitement du consommateur de manière idempotente', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les événements après réception', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout retry', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement des appels synchrones', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi prévoir une dead-letter queue ?',
                        'explanation' => 'Elle permet d’isoler les messages qui ne peuvent pas être traités correctement après plusieurs tentatives.',
                        'choices' => [
                            ['choice_text' => 'Isoler les messages problématiques sans bloquer durablement le flux principal', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les messages seront corrigés automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les erreurs de données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le broker', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller le lag d’un consumer ?',
                        'explanation' => 'Le lag indique qu’un consommateur prend du retard par rapport au rythme de production.',
                        'choices' => [
                            ['choice_text' => 'Détecter qu’un consommateur ne traite plus les événements au rythme attendu', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le producteur fonctionne correctement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les messages anciens', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture événementielle ne supprime-t-elle pas le besoin de cohérence ?',
                        'explanation' => 'Les données peuvent être temporairement désynchronisées et nécessitent des règles métier adaptées.',
                        'choices' => [
                            ['choice_text' => 'Elle change le modèle de cohérence mais ne supprime pas les contraintes métier', 'is_correct' => true],
                            ['choice_text' => 'Les événements rendent toutes les données immédiatement cohérentes', 'is_correct' => false],
                            ['choice_text' => 'La cohérence n’existe pas dans les systèmes distribués', 'is_correct' => false],
                            ['choice_text' => 'Les brokers corrigent toutes les incohérences', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture événementielle doit-elle prévoir la traçabilité des événements ?',
                        'explanation' => 'Lors d’un incident, il faut pouvoir comprendre quels événements ont été produits et consommés.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le diagnostic et le suivi du traitement des événements', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute supervision', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les consommateurs', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro duplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture événementielle peut-elle augmenter la complexité opérationnelle ?',
                        'explanation' => 'Il faut gérer les retries, doublons, ordre, observabilité, contrats et éventuels retards des consommateurs.',
                        'choices' => [
                            ['choice_text' => 'Elle introduit des problèmes supplémentaires liés à l’asynchronisme et au traitement distribué', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toutes les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit automatiquement une architecture plus simple', 'is_correct' => false],
                            ['choice_text' => 'Elle n’utilise jamais de monitoring', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Intermediate — Architecture et observabilité',
                'description' => 'Apprenez à intégrer les métriques, logs, traces et signaux opérationnels dans une architecture moderne.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi l’observabilité doit-elle être considérée comme une propriété architecturale ?',
                        'explanation' => 'Une architecture qui ne produit pas les bons signaux rend les incidents difficiles à comprendre après le déploiement.',
                        'choices' => [
                            ['choice_text' => 'Parce que la capacité à diagnostiquer les systèmes dépend des signaux qu’ils produisent', 'is_correct' => true],
                            ['choice_text' => 'Parce que les logs remplacent toujours les tests', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une architecture observable ne peut jamais tomber en panne', 'is_correct' => false],
                            ['choice_text' => 'Parce que le monitoring est uniquement une tâche réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi corréler une requête avec un request ID dans plusieurs services ?',
                        'explanation' => 'Un identifiant partagé permet de suivre une opération de bout en bout.',
                        'choices' => [
                            ['choice_text' => 'Suivre une même opération à travers plusieurs composants', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la vitesse des requêtes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute journalisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les requêtes réussiront', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les métriques seules peuvent-elles être insuffisantes lors d’un incident complexe ?',
                        'explanation' => 'Les métriques indiquent qu’un changement se produit, mais les logs et traces peuvent fournir le contexte détaillé.',
                        'choices' => [
                            ['choice_text' => 'Elles montrent les symptômes mais pas toujours le contexte détaillé de la cause', 'is_correct' => true],
                            ['choice_text' => 'Les métriques ne servent jamais au diagnostic', 'is_correct' => false],
                            ['choice_text' => 'Les logs sont toujours suffisants seuls', 'is_correct' => false],
                            ['choice_text' => 'Les traces ne peuvent pas être corrélées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs doivent-ils être structurés dans une architecture distribuée ?',
                        'explanation' => 'Les logs structurés sont plus faciles à rechercher, filtrer et corréler automatiquement.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la recherche, l’analyse et la corrélation automatisées', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun événement ne sera perdu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de stockage', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture doit-elle surveiller la saturation des ressources ?',
                        'explanation' => 'La saturation du CPU, mémoire, réseau ou stockage peut provoquer des dégradations du service.',
                        'choices' => [
                            ['choice_text' => 'Détecter les limites qui risquent de dégrader le service', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les ressources seront toujours disponibles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de charge', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une métrique de succès métier peut-elle être importante en plus des métriques techniques ?',
                        'explanation' => 'Un système peut sembler sain techniquement tout en échouant à réaliser une fonction métier essentielle.',
                        'choices' => [
                            ['choice_text' => 'Elle montre si le système produit réellement le résultat attendu par les utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Les métriques techniques sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Les métriques métier remplacent tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit que toutes les requêtes sont rapides', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dashboards doivent-ils être adaptés aux différents rôles ?',
                        'explanation' => 'Un opérateur, un développeur et un responsable métier ont des besoins d’information différents.',
                        'choices' => [
                            ['choice_text' => 'Chaque rôle nécessite des informations adaptées à ses décisions', 'is_correct' => true],
                            ['choice_text' => 'Tous les utilisateurs ont exactement les mêmes besoins', 'is_correct' => false],
                            ['choice_text' => 'Les dashboards ne servent qu’aux managers', 'is_correct' => false],
                            ['choice_text' => 'Il faut afficher toutes les métriques partout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rétention des logs doit-elle être décidée architecturalement ?',
                        'explanation' => 'La durée de conservation influence coûts, conformité, capacité de diagnostic et stockage.',
                        'choices' => [
                            ['choice_text' => 'Elle doit équilibrer besoins de diagnostic, coûts et exigences de conservation', 'is_correct' => true],
                            ['choice_text' => 'Les logs doivent toujours être conservés indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'Les logs n’ont aucun coût de stockage', 'is_correct' => false],
                            ['choice_text' => 'La rétention ne concerne que le développement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester l’observabilité avant la mise en production ?',
                        'explanation' => 'Un système peut être fonctionnel mais produire des signaux insuffisants ou incomplets pour le diagnostic.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que les signaux nécessaires à l’exploitation sont réellement disponibles', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs de production', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests fonctionnels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs doivent-elles être regroupées par cause ou type lorsque possible ?',
                        'explanation' => 'Une catégorisation utile permet d’identifier les problèmes récurrents et de prioriser les corrections.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les tendances et prioriser les problèmes récurrents', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les erreurs des statistiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute investigation', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’il n’y aura plus d’erreurs', 'is_correct' => false],
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