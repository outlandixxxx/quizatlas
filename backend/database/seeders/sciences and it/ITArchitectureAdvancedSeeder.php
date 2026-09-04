<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ITArchitectureAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'it-architecture')->firstOrFail();

        $quizzes = [
            [
                'title' => 'IT Architecture Advanced — Distributed Systems Design',
                'description' => 'Analysez les compromis des architectures distribuées : cohérence, disponibilité, communication interservices, résilience et coordination.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une architecture distribuée doit-elle traiter explicitement les défaillances partielles ?',
                        'explanation' => 'Dans un système distribué, un composant peut être lent ou indisponible alors que les autres continuent de fonctionner. Cette situation doit être prévue dans la conception.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un sous-système peut échouer indépendamment tout en laissant le reste opérationnel', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les composants tombent toujours en panne simultanément', 'is_correct' => false],
                            ['choice_text' => 'Parce que les systèmes distribués ne rencontrent jamais de problèmes réseau', 'is_correct' => false],
                            ['choice_text' => 'Parce que les défaillances partielles ne concernent que les bases de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les timeouts doivent-ils être associés à une stratégie de propagation des erreurs ?',
                        'explanation' => 'Un timeout limite l’attente, mais le système doit aussi savoir comment continuer, échouer proprement ou retourner une réponse dégradée.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une dépendance lente bloque indéfiniment tout le système', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que chaque appel distant réussira', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les dépendances entre services', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des retries agressifs peuvent-ils provoquer une panne en cascade ?',
                        'explanation' => 'Lorsque plusieurs clients réessaient simultanément une dépendance déjà saturée, la charge supplémentaire peut aggraver son état.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent augmenter la charge sur une dépendance déjà dégradée', 'is_correct' => true],
                            ['choice_text' => 'Ils réduisent toujours la charge sur le système distant', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent une disponibilité plus élevée sans coût', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute propagation d’erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un circuit breaker ?',
                        'explanation' => 'Le circuit breaker coupe temporairement les appels vers une dépendance défaillante afin de protéger le système appelant.',
                        'choices' => [
                            ['choice_text' => 'Limiter les appels vers une dépendance défaillante et éviter une cascade de surcharge', 'is_correct' => true],
                            ['choice_text' => 'Réparer automatiquement la dépendance distante', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les requêtes seront traitées', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests de résilience', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le partage de données entre plusieurs domaines peut-il augmenter le couplage ?',
                        'explanation' => 'Plusieurs domaines dépendant directement du même modèle de données deviennent sensibles aux changements de ce modèle.',
                        'choices' => [
                            ['choice_text' => 'Une modification du modèle partagé peut affecter plusieurs domaines simultanément', 'is_correct' => true],
                            ['choice_text' => 'Les données partagées garantissent toujours l’indépendance', 'is_correct' => false],
                            ['choice_text' => 'Le partage de données empêche toute communication', 'is_correct' => false],
                            ['choice_text' => 'Un modèle partagé élimine les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la cohérence éventuelle peut-elle être acceptable pour certaines fonctionnalités ?',
                        'explanation' => 'Certaines fonctions tolèrent un délai entre la mise à jour et sa propagation tant que les données convergent correctement.',
                        'choices' => [
                            ['choice_text' => 'Parce que certaines fonctions peuvent tolérer une divergence temporaire', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle garantit toujours une cohérence instantanée', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime toutes les transactions', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle rend les données inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les identifiants de corrélation sont-ils importants dans un système distribué ?',
                        'explanation' => 'Une même opération peut traverser de nombreux services et générer plusieurs traces et logs.',
                        'choices' => [
                            ['choice_text' => 'Suivre une opération de bout en bout à travers plusieurs composants', 'is_correct' => true],
                            ['choice_text' => 'Accélérer automatiquement les requêtes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les logs', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’une requête ne sera exécutée qu’une fois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture distribuée doit-elle définir des limites de responsabilité entre services ?',
                        'explanation' => 'Des frontières claires réduisent les dépendances cachées et facilitent l’évolution indépendante.',
                        'choices' => [
                            ['choice_text' => 'Réduire les dépendances implicites et clarifier les responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Forcer tous les services à partager la même base', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute communication interservice', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro latence réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture microservices peut-elle augmenter la complexité opérationnelle ?',
                        'explanation' => 'Le nombre de processus, réseaux, contrats et dépendances augmente par rapport à une application monolithique simple.',
                        'choices' => [
                            ['choice_text' => 'Elle augmente le nombre de composants et de communications à superviser', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime tous les besoins d’observabilité', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une maintenance plus simple dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il mesurer la latence de bout en bout et pas seulement celle de chaque service ?',
                        'explanation' => 'Les petites latences individuelles peuvent s’additionner le long du chemin complet d’une requête.',
                        'choices' => [
                            ['choice_text' => 'Les temps de plusieurs dépendances peuvent s’accumuler dans l’expérience globale', 'is_correct' => true],
                            ['choice_text' => 'Les latences individuelles sont toujours identiques à la latence globale', 'is_correct' => false],
                            ['choice_text' => 'La latence réseau n’a aucun effet sur l’utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Le temps de bout en bout ne peut pas être mesuré', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Advanced — Architecture des données distribuées',
                'description' => 'Analysez la réplication, partitionnement, cohérence, transactions distribuées et évolution des architectures de données.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel problème architectural apparaît lorsqu’une transaction métier doit couvrir plusieurs bases indépendantes ?',
                        'explanation' => 'La coordination entre plusieurs systèmes de données devient plus complexe et peut nécessiter des mécanismes distribués spécifiques.',
                        'choices' => [
                            ['choice_text' => 'La cohérence de l’opération devient plus difficile à garantir entre plusieurs systèmes', 'is_correct' => true],
                            ['choice_text' => 'Les transactions deviennent automatiquement plus rapides', 'is_correct' => false],
                            ['choice_text' => 'Les bases deviennent physiquement identiques', 'is_correct' => false],
                            ['choice_text' => 'La réplication n’est plus nécessaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le partitionnement peut-il améliorer la capacité d’un système de données ?',
                        'explanation' => 'Répartir les données et la charge sur plusieurs partitions peut réduire la concentration des opérations sur un seul nœud.',
                        'choices' => [
                            ['choice_text' => 'Répartir les données et les opérations sur plusieurs segments', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les requêtes seront plus rapides', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute nécessité d’index', 'is_correct' => false],
                            ['choice_text' => 'Empêcher la réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix d’une clé de partition est-il critique ?',
                        'explanation' => 'Une clé mal choisie peut concentrer les requêtes et les données sur quelques partitions, créant un hotspot.',
                        'choices' => [
                            ['choice_text' => 'Une mauvaise distribution peut créer des partitions surchargées', 'is_correct' => true],
                            ['choice_text' => 'La clé de partition détermine toujours la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Toutes les clés distribuent uniformément les données', 'is_correct' => false],
                            ['choice_text' => 'La clé n’a aucun impact sur les performances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réplication asynchrone peut-elle entraîner une lecture obsolète ?',
                        'explanation' => 'Le nœud de lecture peut ne pas encore avoir reçu la dernière modification.',
                        'choices' => [
                            ['choice_text' => 'Le réplica peut temporairement être en retard sur le nœud qui accepte les écritures', 'is_correct' => true],
                            ['choice_text' => 'La réplication asynchrone bloque toujours toutes les lectures', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une synchronisation instantanée', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les mises à jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectures distribuées doivent-elles expliciter le niveau de cohérence attendu ?',
                        'explanation' => 'Toutes les fonctionnalités n’ont pas besoin des mêmes garanties et ces choix ont des conséquences sur disponibilité et performance.',
                        'choices' => [
                            ['choice_text' => 'Les besoins de cohérence varient selon les usages et influencent les compromis du système', 'is_correct' => true],
                            ['choice_text' => 'Tous les systèmes doivent avoir la même cohérence', 'is_correct' => false],
                            ['choice_text' => 'La cohérence n’a aucun coût architectural', 'is_correct' => false],
                            ['choice_text' => 'La cohérence est uniquement un problème de stockage local', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un modèle d’event sourcing dans certains domaines ?',
                        'explanation' => 'Il conserve les changements métier sous forme d’événements et permet de reconstruire l’état à partir de l’historique.',
                        'choices' => [
                            ['choice_text' => 'Conserver l’historique des changements métier et pouvoir reconstruire l’état', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute forme de persistance', 'is_correct' => false],
                            ['choice_text' => 'Garantir une cohérence instantanée entre tous les systèmes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer automatiquement toutes les bases relationnelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe avec un modèle event sourcing mal conçu ?',
                        'explanation' => 'La reconstruction des agrégats et l’évolution des schémas d’événements peuvent devenir complexes.',
                        'choices' => [
                            ['choice_text' => 'L’historique et la reconstruction peuvent devenir difficiles à faire évoluer', 'is_correct' => true],
                            ['choice_text' => 'Les événements disparaissent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Le système devient toujours plus simple', 'is_correct' => false],
                            ['choice_text' => 'La quantité de données devient toujours nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de cache doit-elle définir une politique d’invalidation ?',
                        'explanation' => 'Sans invalidation, le cache peut servir des données qui ne reflètent plus l’état attendu.',
                        'choices' => [
                            ['choice_text' => 'Déterminer quand les données en cache cessent d’être considérées comme valides', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le cache contiendra toujours la dernière valeur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la base de données', 'is_correct' => false],
                            ['choice_text' => 'Éviter la réplication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de données doit-elle considérer le coût des copies ?',
                        'explanation' => 'Réplication, backups, caches et environnements de test multiplient le stockage et parfois les coûts de transfert.',
                        'choices' => [
                            ['choice_text' => 'Les mécanismes de résilience et de performance peuvent multiplier les données stockées', 'is_correct' => true],
                            ['choice_text' => 'Les copies supplémentaires sont toujours gratuites', 'is_correct' => false],
                            ['choice_text' => 'Les backups ne contiennent jamais de données supplémentaires', 'is_correct' => false],
                            ['choice_text' => 'La réplication ne consomme aucune ressource', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une migration de données doit-elle souvent utiliser une phase de validation parallèle ?',
                        'explanation' => 'Comparer les résultats entre ancien et nouveau système permet d’identifier les incohérences avant bascule complète.',
                        'choices' => [
                            ['choice_text' => 'Détecter les différences avant de rendre le nouveau système pleinement autoritaire', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune différence n’existera', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de migration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Advanced — Architecture cloud à grande échelle',
                'description' => 'Analysez les choix avancés de multi-région, résilience, gouvernance, coûts et services cloud.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une architecture multi-région n’améliore-t-elle pas automatiquement la disponibilité ?',
                        'explanation' => 'Le basculement, les données, DNS, dépendances externes et processus opérationnels doivent également être conçus pour fonctionner.',
                        'choices' => [
                            ['choice_text' => 'La disponibilité dépend aussi des mécanismes de bascule et des dépendances interrégionales', 'is_correct' => true],
                            ['choice_text' => 'Deux régions garantissent toujours zéro interruption', 'is_correct' => false],
                            ['choice_text' => 'Les données sont toujours synchronisées instantanément entre régions', 'is_correct' => false],
                            ['choice_text' => 'Le réseau interrégional n’a jamais de panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture active-active peut-elle nécessiter une gestion complexe de l’état ?',
                        'explanation' => 'Deux régions actives doivent gérer les données et requêtes simultanément, ce qui peut créer des conflits de cohérence.',
                        'choices' => [
                            ['choice_text' => 'Les écritures concurrentes et la cohérence entre régions peuvent devenir complexes', 'is_correct' => true],
                            ['choice_text' => 'Un système actif-actif ne contient jamais de données', 'is_correct' => false],
                            ['choice_text' => 'Les régions actives partagent automatiquement tout leur état', 'is_correct' => false],
                            ['choice_text' => 'La cohérence disparaît comme problème architectural', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle prévoir les quotas dès la conception ?',
                        'explanation' => 'Un service peut être techniquement disponible mais incapable de créer davantage de ressources lorsqu’une limite de quota est atteinte.',
                        'choices' => [
                            ['choice_text' => 'Une limite de service peut devenir un goulot d’étranglement lors de la croissance', 'is_correct' => true],
                            ['choice_text' => 'Les quotas sont toujours illimités', 'is_correct' => false],
                            ['choice_text' => 'Les quotas ne concernent que le développement', 'is_correct' => false],
                            ['choice_text' => 'Les quotas remplacent les contrôles de capacité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture multi-comptes ou multi-projets peut-elle être utile ?',
                        'explanation' => 'La séparation facilite l’isolation administrative, la gouvernance et le suivi des ressources.',
                        'choices' => [
                            ['choice_text' => 'Améliorer l’isolation, la gouvernance et la séparation des responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute centralisation de logs', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les équipes disposent des mêmes privilèges', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin d’IAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle intégrer le coût des transferts de données ?',
                        'explanation' => 'Les architectures fortement distribuées peuvent générer des coûts de réseau significatifs en plus du stockage et du calcul.',
                        'choices' => [
                            ['choice_text' => 'Les flux entre services et régions peuvent représenter une part importante des coûts', 'is_correct' => true],
                            ['choice_text' => 'Les transferts cloud sont toujours gratuits', 'is_correct' => false],
                            ['choice_text' => 'Le réseau n’a aucun coût opérationnel', 'is_correct' => false],
                            ['choice_text' => 'Les transferts remplacent le coût du stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’architecture cloud doit-elle distinguer les contrôles de sécurité préventifs et détectifs ?',
                        'explanation' => 'Les contrôles préventifs cherchent à empêcher les actions indésirables, tandis que les contrôles détectifs identifient les violations ou comportements suspects.',
                        'choices' => [
                            ['choice_text' => 'Pour empêcher certaines actions tout en détectant celles qui passent les contrôles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul type de contrôle suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro compromission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle traiter le contrôle des identités de service comme une responsabilité critique ?',
                        'explanation' => 'Les workloads automatisés disposent souvent de permissions étendues et représentent donc des identités importantes à protéger.',
                        'choices' => [
                            ['choice_text' => 'Une identité de service compromise peut permettre des actions automatiques à grande échelle', 'is_correct' => true],
                            ['choice_text' => 'Les identités de service n’ont jamais de privilèges', 'is_correct' => false],
                            ['choice_text' => 'Les workloads cloud ne possèdent pas d’identité', 'is_correct' => false],
                            ['choice_text' => 'IAM ne concerne que les humains', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de sortie fournisseur doit-elle être évaluée au niveau architectural ?',
                        'explanation' => 'Les choix de données, APIs, services propriétaires et formats peuvent rendre une future migration difficile.',
                        'choices' => [
                            ['choice_text' => 'Les décisions d’architecture peuvent augmenter fortement le coût d’une migration future', 'is_correct' => true],
                            ['choice_text' => 'Le fournisseur peut toujours être remplacé instantanément', 'is_correct' => false],
                            ['choice_text' => 'Les services propriétaires n’ont jamais d’impact sur la portabilité', 'is_correct' => false],
                            ['choice_text' => 'La portabilité ne dépend que du matériel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud résiliente doit-elle prévoir les erreurs de configuration humaines ?',
                        'explanation' => 'Les erreurs de configuration peuvent produire des incidents majeurs même lorsque tous les composants sont techniquement disponibles.',
                        'choices' => [
                            ['choice_text' => 'Une mauvaise configuration peut provoquer une panne ou une faille malgré la redondance matérielle', 'is_correct' => true],
                            ['choice_text' => 'La redondance élimine toujours les erreurs humaines', 'is_correct' => false],
                            ['choice_text' => 'Les configurations cloud ne peuvent jamais être incorrectes', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs humaines concernent uniquement le développement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des politiques automatisées sur les ressources cloud ?',
                        'explanation' => 'Les politiques peuvent empêcher ou signaler automatiquement les configurations non conformes.',
                        'choices' => [
                            ['choice_text' => 'Appliquer continuellement des règles de sécurité et de gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les besoins d’audit humain dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur de configuration', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute évolution de l’infrastructure', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Advanced — Architecture de sécurité',
                'description' => 'Approfondissez la défense en profondeur, Zero Trust, isolation, gestion des identités et sécurité des architectures distribuées.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel principe est central dans une approche Zero Trust ?',
                        'explanation' => 'Zero Trust part du principe qu’aucune identité, appareil ou réseau ne doit être implicitement considéré comme fiable.',
                        'choices' => [
                            ['choice_text' => 'Ne pas accorder de confiance implicite et vérifier les accès explicitement', 'is_correct' => true],
                            ['choice_text' => 'Faire confiance à tout le réseau interne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’authentification interne', 'is_correct' => false],
                            ['choice_text' => 'Donner des privilèges permanents à tous les services', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les frontières réseau traditionnelles peuvent-elles être insuffisantes dans une architecture moderne ?',
                        'explanation' => 'Les workloads sont souvent distribués et les utilisateurs accèdent aux ressources depuis plusieurs environnements.',
                        'choices' => [
                            ['choice_text' => 'Les ressources et utilisateurs sont distribués, donc la confiance ne peut pas reposer uniquement sur le réseau', 'is_correct' => true],
                            ['choice_text' => 'Le réseau n’est plus nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Les firewalls n’ont aucune utilité', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes modernes ne communiquent jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une segmentation fine peut-elle réduire le blast radius ?',
                        'explanation' => 'Un compromis limité à une zone ou identité ne donne pas nécessairement accès à toutes les autres ressources.',
                        'choices' => [
                            ['choice_text' => 'Elle limite les chemins d’accès disponibles depuis une zone compromise', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que les attaques sont impossibles', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les identités', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine tous les flux internes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les identités de workloads doivent-elles être distinctes ?',
                        'explanation' => 'Chaque service doit pouvoir recevoir des permissions adaptées à sa fonction.',
                        'choices' => [
                            ['choice_text' => 'Appliquer des permissions différentes selon la fonction de chaque workload', 'is_correct' => true],
                            ['choice_text' => 'Partager automatiquement les mêmes privilèges', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la journalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sécurité d’une architecture doit-elle considérer les chemins de données ?',
                        'explanation' => 'Les données peuvent traverser plusieurs services, réseaux et systèmes de stockage ayant des exigences de sécurité différentes.',
                        'choices' => [
                            ['choice_text' => 'Chaque étape du parcours peut introduire un risque ou une exigence de contrôle', 'is_correct' => true],
                            ['choice_text' => 'Les données deviennent automatiquement sécurisées après leur premier chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Les chemins réseau n’ont aucun impact sur la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Le stockage est toujours le seul point important', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la journalisation centralisée est-elle particulièrement importante après une compromission ?',
                        'explanation' => 'Un attaquant ayant accès à un système peut tenter de modifier ou supprimer les traces locales.',
                        'choices' => [
                            ['choice_text' => 'Préserver une visibilité indépendante des traces même lorsqu’un hôte est compromis', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun événement malveillant ne se produit', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs locaux immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les contrôles préventifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les privilèges temporaires peuvent-ils réduire le risque ?',
                        'explanation' => 'Un accès temporaire diminue la durée pendant laquelle un privilège élevé peut être exploité.',
                        'choices' => [
                            ['choice_text' => 'Réduire la durée d’exposition à un privilège élevé', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le compte ne sera jamais compromis', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’audit', 'is_correct' => false],
                            ['choice_text' => 'Donner plus de privilèges permanents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture doit-elle prévoir la rotation des clés et certificats ?',
                        'explanation' => 'Les secrets et certificats peuvent expirer ou être compromis et doivent pouvoir être remplacés sans interruption majeure.',
                        'choices' => [
                            ['choice_text' => 'Permettre le renouvellement ou remplacement des identifiants sans dépendre d’une clé permanente', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher tout chiffrement futur', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro compromission', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les identités de service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture sécurisée doit-elle prévoir des contrôles détectifs en plus des contrôles préventifs ?',
                        'explanation' => 'Les contrôles préventifs peuvent être contournés ou mal configurés et les contrôles détectifs permettent d’identifier ces situations.',
                        'choices' => [
                            ['choice_text' => 'Détecter les activités suspectes qui échappent aux contrôles préventifs', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le besoin d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro attaque', 'is_correct' => false],
                            ['choice_text' => 'Éviter tous les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi effectuer des threat models avant la mise en production d’une architecture critique ?',
                        'explanation' => 'Le threat modeling permet d’identifier les menaces et chemins d’attaque potentiels avant qu’ils ne deviennent des problèmes réels.',
                        'choices' => [
                            ['choice_text' => 'Identifier les menaces et définir les contrôles adaptés avant le déploiement', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune vulnérabilité future n’apparaîtra', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles existants', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Advanced — Architecture et résilience',
                'description' => 'Concevez des systèmes capables de tolérer les pannes, les dégradations et les erreurs humaines.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi la redondance doit-elle être accompagnée de tests de bascule ?',
                        'explanation' => 'Une architecture redondante sur le papier peut contenir des erreurs de configuration qui n’apparaissent qu’au moment de la bascule.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que la redondance produit réellement une récupération opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer le système primaire', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’une panne ne surviendra jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la surveillance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversité des composants peut-elle parfois améliorer la résilience ?',
                        'explanation' => 'Utiliser des composants indépendants peut réduire certains risques de défaillance commune, notamment lorsqu’un défaut affecte une technologie précise.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire certains risques de défaillance commune', 'is_correct' => true],
                            ['choice_text' => 'Plus de technologies signifie toujours moins de complexité', 'is_correct' => false],
                            ['choice_text' => 'La diversité garantit zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine automatiquement les besoins de monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi trop de diversité technologique peut-elle devenir un risque ?',
                        'explanation' => 'La diversité augmente les compétences nécessaires, la maintenance et les différences de fonctionnement.',
                        'choices' => [
                            ['choice_text' => 'Elle peut augmenter la complexité opérationnelle et la charge de maintenance', 'is_correct' => true],
                            ['choice_text' => 'Elle rend toujours l’architecture plus simple', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de formation', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une meilleure disponibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi prévoir des modes dégradés dans une architecture ?',
                        'explanation' => 'Un service peut continuer à fournir une capacité réduite lorsque certaines dépendances ou fonctionnalités sont indisponibles.',
                        'choices' => [
                            ['choice_text' => 'Permettre au système de rester partiellement fonctionnel pendant certaines pannes', 'is_correct' => true],
                            ['choice_text' => 'Garantir toutes les fonctionnalités pendant une panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute communication entre services', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la limitation de charge peut-elle contribuer à la résilience ?',
                        'explanation' => 'Refuser ou ralentir certaines demandes peut empêcher une surcharge de provoquer une panne généralisée.',
                        'choices' => [
                            ['choice_text' => 'Protéger les ressources lorsqu’un trafic excessif menace de saturer le système', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les requêtes seront traitées immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de scaling', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un mécanisme de rate limiting ?',
                        'explanation' => 'Il limite le volume de requêtes acceptées par utilisateur, client ou service sur une période donnée.',
                        'choices' => [
                            ['choice_text' => 'Limiter la charge afin de protéger les ressources et la stabilité du service', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la capacité', 'is_correct' => false],
                            ['choice_text' => 'Garantir une latence nulle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les requêtes légitimes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les files d’attente peuvent-elles contribuer à absorber des pics de charge ?',
                        'explanation' => 'Elles permettent de stocker temporairement les demandes en attente plutôt que de saturer immédiatement les consommateurs.',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de lisser temporairement les différences entre production et traitement', 'is_correct' => true],
                            ['choice_text' => 'Elles garantissent une capacité infinie', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment toutes les erreurs applicatives', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent la capacité de calcul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les retries doivent-ils parfois utiliser un backoff ?',
                        'explanation' => 'Un délai croissant entre les tentatives réduit la pression sur une dépendance temporairement indisponible.',
                        'choices' => [
                            ['choice_text' => 'Réduire la charge additionnelle provoquée par des retries rapprochés', 'is_correct' => true],
                            ['choice_text' => 'Garantir immédiatement une réponse', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les timeouts', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute reconnexion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectures critiques doivent-elles prévoir la corruption logique et pas uniquement la panne matérielle ?',
                        'explanation' => 'Une suppression accidentelle ou une donnée erronée peut être répliquée vers les systèmes de secours.',
                        'choices' => [
                            ['choice_text' => 'Une erreur logique peut toucher plusieurs copies sans panne matérielle', 'is_correct' => true],
                            ['choice_text' => 'Les pannes logiques n’affectent jamais les données', 'is_correct' => false],
                            ['choice_text' => 'La réplication empêche toute corruption', 'is_correct' => false],
                            ['choice_text' => 'Les backups protègent automatiquement contre tout problème', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios de reprise doivent-ils être validés régulièrement ?',
                        'explanation' => 'Les systèmes, procédures et dépendances changent au cours du temps.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que la stratégie de reprise reste compatible avec l’état actuel du système', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute évolution de l’architecture', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les procédures précédentes', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune panne ne se produira', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Advanced — Architecture et gouvernance',
                'description' => 'Analysez les décisions architecturales à l’échelle de l’entreprise, les standards, la dette technique et la gouvernance.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une architecture d’entreprise ne doit-elle pas imposer les mêmes technologies partout ?',
                        'explanation' => 'La standardisation est utile, mais certains contextes nécessitent des choix différents selon les contraintes et responsabilités.',
                        'choices' => [
                            ['choice_text' => 'Les standards doivent être adaptés au contexte et aux besoins réels', 'is_correct' => true],
                            ['choice_text' => 'Toutes les applications ont les mêmes exigences', 'is_correct' => false],
                            ['choice_text' => 'La diversité est toujours mauvaise', 'is_correct' => false],
                            ['choice_text' => 'Les standards ne sont jamais utiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une Architecture Decision Record est-elle utile ?',
                        'explanation' => 'Elle conserve la décision, son contexte, les alternatives et les conséquences importantes.',
                        'choices' => [
                            ['choice_text' => 'Conserver le contexte et les raisons d’un choix architectural', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute nouvelle décision', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le code source', 'is_correct' => false],
                            ['choice_text' => 'Garantir que la décision restera toujours correcte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision architecturale doit-elle expliciter ses trade-offs ?',
                        'explanation' => 'Les architectures impliquent rarement une solution parfaite ; elles équilibrent coût, performance, sécurité, complexité et autres contraintes.',
                        'choices' => [
                            ['choice_text' => 'Rendre visibles les compromis acceptés entre plusieurs objectifs', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’une solution n’a aucun inconvénient', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les alternatives', 'is_correct' => false],
                            ['choice_text' => 'Éviter les discussions techniques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la dette technique au niveau architectural ?',
                        'explanation' => 'Elle représente notamment les compromis techniques qui accélèrent le court terme mais augmentent les coûts ou contraintes futurs.',
                        'choices' => [
                            ['choice_text' => 'Des choix qui créent un coût ou une complexité future en échange d’un bénéfice immédiat', 'is_correct' => true],
                            ['choice_text' => 'Toute erreur de syntaxe dans le code', 'is_correct' => false],
                            ['choice_text' => 'Une dette financière du fournisseur cloud', 'is_correct' => false],
                            ['choice_text' => 'Un simple retard de documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dette technique doit-elle être visible dans les décisions de roadmap ?',
                        'explanation' => 'Une dette ignorée peut augmenter le coût des changements futurs et devenir un risque opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Pour arbitrer explicitement le coût futur et les risques des choix actuels', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute nouvelle fonctionnalité', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute dette immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro maintenance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une revue d’architecture doit-elle considérer les exigences non fonctionnelles ?',
                        'explanation' => 'Une solution peut fonctionner fonctionnellement tout en étant incapable de respecter performance, sécurité ou disponibilité attendues.',
                        'choices' => [
                            ['choice_text' => 'Les qualités du système déterminent aussi si la solution est réellement adaptée', 'is_correct' => true],
                            ['choice_text' => 'Les exigences non fonctionnelles sont secondaires dans tous les projets', 'is_correct' => false],
                            ['choice_text' => 'Elles concernent uniquement le code', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent pas être mesurées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gouvernance doit-elle éviter de devenir un simple blocage des équipes ?',
                        'explanation' => 'Une gouvernance efficace fournit des garde-fous et des standards sans empêcher inutilement l’innovation.',
                        'choices' => [
                            ['choice_text' => 'Elle doit réduire les risques tout en permettant aux équipes de livrer efficacement', 'is_correct' => true],
                            ['choice_text' => 'Elle doit empêcher toute nouvelle technologie', 'is_correct' => false],
                            ['choice_text' => 'Elle doit supprimer les responsabilités locales', 'is_correct' => false],
                            ['choice_text' => 'Elle doit valider chaque ligne de code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les standards architecturaux doivent-ils être révisés périodiquement ?',
                        'explanation' => 'Les technologies, menaces, coûts et besoins métier changent avec le temps.',
                        'choices' => [
                            ['choice_text' => 'Les contraintes et technologies évoluent et peuvent rendre certains standards obsolètes', 'is_correct' => true],
                            ['choice_text' => 'Les standards ne doivent jamais changer', 'is_correct' => false],
                            ['choice_text' => 'Toute évolution technique rend les standards inutiles', 'is_correct' => false],
                            ['choice_text' => 'Les standards sont indépendants du contexte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions d’architecture doivent-elles être liées aux objectifs métier ?',
                        'explanation' => 'L’architecture existe pour permettre les capacités métier dans des contraintes acceptables.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter d’optimiser la technologie sans bénéfice réel pour l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les considérations techniques', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir toujours le coût le plus bas', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les équipes techniques de décider', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exceptions aux standards doivent-elles être documentées ?',
                        'explanation' => 'Une exception doit être comprise, justifiée et idéalement réévaluée dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Conserver la justification et faciliter la réévaluation du choix', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’exception deviendra permanente', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les autres projets d’évoluer', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Advanced — Cas complexes et décisions de conception',
                'description' => 'Résolvez des scénarios d’architecture complexes impliquant performance, coût, sécurité, migration et disponibilité.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une application critique possède trois serveurs applicatifs redondants mais une seule base de données sans réplication. Quel est le problème principal ?',
                        'explanation' => 'La base reste un Single Point of Failure malgré la redondance applicative.',
                        'choices' => [
                            ['choice_text' => 'La base de données reste un Single Point of Failure', 'is_correct' => true],
                            ['choice_text' => 'Les serveurs applicatifs sont trop nombreux', 'is_correct' => false],
                            ['choice_text' => 'Le load balancing n’est jamais utile', 'is_correct' => false],
                            ['choice_text' => 'La redondance applicative empêche toute panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API dépend de cinq services synchrones et la latence augmente. Quelle architecture pourrait réduire certains temps d’attente ?',
                        'explanation' => 'Lorsque les dépendances sont indépendantes, certaines peuvent être appelées en parallèle ou traitées de manière asynchrone.',
                        'choices' => [
                            ['choice_text' => 'Paralléliser les appels indépendants ou introduire de l’asynchronisme lorsque le métier le permet', 'is_correct' => true],
                            ['choice_text' => 'Ajouter systématiquement un serveur par requête', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les timeouts', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la taille de tous les paquets réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut moderniser une application mais ne peut pas interrompre son activité. Quelle stratégie est généralement la plus adaptée ?',
                        'explanation' => 'Une migration progressive permet de déplacer des fonctionnalités ou utilisateurs sans bascule brutale.',
                        'choices' => [
                            ['choice_text' => 'Une modernisation progressive avec coexistence contrôlée et bascule graduelle', 'is_correct' => true],
                            ['choice_text' => 'Une réécriture complète suivie d’une bascule instantanée obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Une suppression immédiate de l’ancien système', 'is_correct' => false],
                            ['choice_text' => 'Aucune mesure préalable de dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une architecture cloud est très résiliente mais coûte trois fois plus que nécessaire. Quelle démarche est la plus professionnelle ?',
                        'explanation' => 'Il faut mesurer le niveau réel de service et rechercher un meilleur compromis coût/fiabilité sans dégrader les objectifs.',
                        'choices' => [
                            ['choice_text' => 'Évaluer les SLO et rechercher le meilleur compromis coût-résilience', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute redondance', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours le service cloud le moins cher', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les coûts puisque la fiabilité est élevée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une architecture utilise un cache pour réduire la charge DB mais les utilisateurs voient parfois des données anciennes. Quel sujet doit être réévalué ?',
                        'explanation' => 'Le comportement indique probablement un problème de fraîcheur ou d’invalidation du cache.',
                        'choices' => [
                            ['choice_text' => 'La stratégie d’invalidation et la garantie de fraîcheur des données', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de développeurs', 'is_correct' => false],
                            ['choice_text' => 'La taille des écrans utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de régions cloud uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une architecture événementielle accumule du backlog malgré l’augmentation des consommateurs. Quelle hypothèse est pertinente ?',
                        'explanation' => 'Le consommateur peut être limité par une ressource partagée ou un goulot comme la base de données.',
                        'choices' => [
                            ['choice_text' => 'Le goulot peut être ailleurs que dans le nombre de consommateurs, par exemple dans une dépendance partagée', 'is_correct' => true],
                            ['choice_text' => 'Ajouter toujours plus de consommateurs résout tous les backlogs', 'is_correct' => false],
                            ['choice_text' => 'Les files ne peuvent jamais dépasser leur capacité', 'is_correct' => false],
                            ['choice_text' => 'Le producteur doit toujours être désactivé définitivement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut permettre aux développeurs de créer leurs propres environnements mais éviter les configurations dangereuses. Quel choix architectural est approprié ?',
                        'explanation' => 'Le self-service avec des modèles approuvés et des politiques automatisées combine autonomie et contrôle.',
                        'choices' => [
                            ['choice_text' => 'Un self-service basé sur des templates approuvés et des politiques automatisées', 'is_correct' => true],
                            ['choice_text' => 'Un accès administrateur global pour chaque développeur', 'is_correct' => false],
                            ['choice_text' => 'Interdire tout environnement temporaire', 'is_correct' => false],
                            ['choice_text' => 'Configurer chaque environnement manuellement par l’équipe centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une panne n’est visible qu’après plusieurs minutes car les composants n’ont pas de corrélation de traces. Quelle amélioration architecturale est la plus utile ?',
                        'explanation' => 'La propagation d’un identifiant de corrélation permet de reconstruire le parcours complet d’une requête.',
                        'choices' => [
                            ['choice_text' => 'Introduire une corrélation de traces et de requêtes de bout en bout', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les logs individuels', 'is_correct' => false],
                            ['choice_text' => 'Augmenter uniquement la RAM', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe partage directement le schéma de sa base entre quatre services. Chaque évolution nécessite de modifier plusieurs services. Quel diagnostic architectural est le plus pertinent ?',
                        'explanation' => 'Le partage direct du schéma crée une forte dépendance entre services et limite leur évolution indépendante.',
                        'choices' => [
                            ['choice_text' => 'Le couplage au modèle de données est excessif', 'is_correct' => true],
                            ['choice_text' => 'Les services sont trop indépendants', 'is_correct' => false],
                            ['choice_text' => 'Le problème vient nécessairement du réseau', 'is_correct' => false],
                            ['choice_text' => 'Le partage du schéma garantit une architecture faiblement couplée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut réduire le risque d’une compromission d’un service interne. Quelle combinaison est la plus cohérente ?',
                        'explanation' => 'Une approche en profondeur combine identité propre, moindre privilège, segmentation et observabilité.',
                        'choices' => [
                            ['choice_text' => 'Identité dédiée, moindre privilège, segmentation réseau et surveillance des actions', 'is_correct' => true],
                            ['choice_text' => 'Confiance totale au réseau interne', 'is_correct' => false],
                            ['choice_text' => 'Compte partagé avec privilèges administrateur', 'is_correct' => false],
                            ['choice_text' => 'Une seule règle firewall globale', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Advanced — Évaluation architecturale',
                'description' => 'Évaluez des architectures selon leurs compromis de coût, sécurité, performance, maintenabilité et résilience.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une architecture ne doit-elle pas être évaluée uniquement sur ses performances maximales ?',
                        'explanation' => 'Une architecture peut être très performante tout en étant trop coûteuse, complexe, risquée ou difficile à exploiter.',
                        'choices' => [
                            ['choice_text' => 'La performance doit être équilibrée avec coût, sécurité, fiabilité et maintenabilité', 'is_correct' => true],
                            ['choice_text' => 'La performance est toujours le seul objectif pertinent', 'is_correct' => false],
                            ['choice_text' => 'Une architecture performante est nécessairement simple', 'is_correct' => false],
                            ['choice_text' => 'Les coûts ne sont jamais liés à l’architecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios d’usage sont-ils utiles lors d’une revue d’architecture ?',
                        'explanation' => 'Ils permettent de vérifier concrètement le comportement attendu dans des situations normales et exceptionnelles.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent d’évaluer l’architecture face à des situations représentatives', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent toutes les exigences non fonctionnelles', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent que tous les scénarios futurs sont prévus', 'is_correct' => false],
                            ['choice_text' => 'Ils servent uniquement à tester l’interface graphique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les modes de défaillance pendant une revue d’architecture ?',
                        'explanation' => 'L’analyse permet de comprendre comment le système réagit lorsque ses composants ou dépendances échouent.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier comment le système se comporte lorsqu’un composant tombe en panne', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’aucun composant ne tombera', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les mécanismes de reprise', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs options architecturales avant de décider ?',
                        'explanation' => 'La comparaison rend visibles les compromis et évite de choisir une solution uniquement par habitude.',
                        'choices' => [
                            ['choice_text' => 'Identifier les compromis et choisir selon le contexte réel', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’une seule technologie est toujours correcte', 'is_correct' => false],
                            ['choice_text' => 'Éviter les discussions avec les parties prenantes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les critères non techniques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exigences de conformité peuvent-elles influencer l’architecture ?',
                        'explanation' => 'Les exigences réglementaires peuvent imposer des règles de stockage, accès, journalisation, localisation ou rétention.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent imposer des contraintes techniques sur les données et les contrôles', 'is_correct' => true],
                            ['choice_text' => 'La conformité concerne uniquement les contrats', 'is_correct' => false],
                            ['choice_text' => 'La conformité ne change jamais une architecture', 'is_correct' => false],
                            ['choice_text' => 'Les contrôles réglementaires sont indépendants des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture doit-elle considérer la maintenabilité dès sa conception ?',
                        'explanation' => 'Les systèmes vivent longtemps et les coûts futurs de maintenance peuvent dépasser ceux du développement initial.',
                        'choices' => [
                            ['choice_text' => 'Les décisions actuelles influencent fortement les coûts et risques futurs', 'is_correct' => true],
                            ['choice_text' => 'La maintenance n’existe qu’après les incidents', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes modernes n’ont pas besoin de maintenance', 'is_correct' => false],
                            ['choice_text' => 'La maintenabilité est uniquement une question documentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le monitoring des dépendances externes doit-il être inclus dans l’architecture ?',
                        'explanation' => 'La disponibilité d’un système peut dépendre de composants hors de son propre contrôle.',
                        'choices' => [
                            ['choice_text' => 'Une dépendance externe peut devenir la cause réelle d’un incident', 'is_correct' => true],
                            ['choice_text' => 'Les dépendances externes sont toujours disponibles', 'is_correct' => false],
                            ['choice_text' => 'Les architectures modernes n’ont plus de dépendances', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances externes ne nécessitent jamais de suivi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des limites de capacité plutôt que supposer une croissance infinie ?',
                        'explanation' => 'Chaque ressource possède des contraintes physiques, logicielles ou économiques.',
                        'choices' => [
                            ['choice_text' => 'Identifier les limites avant qu’une croissance réelle ne provoque une saturation', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’aucun système ne peut être scalable', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute croissance', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le capacity planning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture doit-elle prévoir des indicateurs de réussite avant sa mise en œuvre ?',
                        'explanation' => 'Des critères mesurables permettent de vérifier si la solution atteint réellement ses objectifs.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier objectivement si l’architecture atteint les objectifs attendus', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute analyse après déploiement', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les objectifs seront atteints', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les besoins métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur résumé d’une architecture avancée bien conçue ?',
                        'explanation' => 'Une architecture mature cherche un équilibre entre besoins métier, qualité de service, sécurité, coût, évolution et exploitation.',
                        'choices' => [
                            ['choice_text' => 'Un compromis maîtrisé entre valeur métier, qualité, sécurité, coût et évolutivité', 'is_correct' => true],
                            ['choice_text' => 'Le système avec le plus grand nombre de composants', 'is_correct' => false],
                            ['choice_text' => 'Le système utilisant uniquement les technologies les plus récentes', 'is_correct' => false],
                            ['choice_text' => 'Le système ayant le plus grand budget infrastructure', 'is_correct' => false],
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