<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SoftwareEngineeringProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'computer-science-it')->firstOrFail();

        $subject = $major->subjects()
            ->where('slug', 'software-engineering')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Architecture Enterprise & DDD',
                'description' => 'Architecture avancée, DDD, boundaries et systèmes distribués.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle d’un Bounded Context en DDD ?',
                        'choices' => [
                            ['text' => 'Définir une frontière où un modèle et son ubiquitous language ont une signification cohérente', 'is_correct' => true],
                            ['text' => 'Forcer une seule database', 'is_correct' => false],
                            ['text' => 'Remplacer les tests', 'is_correct' => false],
                            ['text' => 'Créer automatiquement les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Bounded Context limite la portée d’un modèle et évite les ambiguïtés entre différents domaines.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un Aggregate Root ?',
                        'choices' => [
                            ['text' => 'Contrôler l’accès aux objets de l’Aggregate et protéger ses invariants', 'is_correct' => true],
                            ['text' => 'Remplacer le message broker', 'is_correct' => false],
                            ['text' => 'Être obligatoirement une table SQL', 'is_correct' => false],
                            ['text' => 'Exécuter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Aggregate Root est le point d’entrée contrôlé de l’Aggregate et protège sa cohérence.',
                    ],
                    [
                        'question' => 'Pourquoi les boundaries sont-elles cruciales dans un système distribué ?',
                        'choices' => [
                            ['text' => 'Elles limitent les dépendances et clarifient les responsabilités entre composants', 'is_correct' => true],
                            ['text' => 'Elles suppriment toute communication', 'is_correct' => false],
                            ['text' => 'Elles rendent tous les appels synchrones', 'is_correct' => false],
                            ['text' => 'Elles remplacent les transactions', 'is_correct' => false],
                        ],
                        'explanation' => 'Des boundaries claires limitent le coupling et permettent à chaque composant d’évoluer plus indépendamment.',
                    ],
                    [
                        'question' => 'Quel problème résout un Anti-Corruption Layer ?',
                        'choices' => [
                            ['text' => 'Empêcher les concepts d’un système externe de contaminer le modèle interne', 'is_correct' => true],
                            ['text' => 'Chiffrer les messages', 'is_correct' => false],
                            ['text' => 'Remplacer les APIs', 'is_correct' => false],
                            ['text' => 'Créer des indexes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Anti-Corruption Layer traduit les modèles externes vers le modèle interne.',
                    ],
                    [
                        'question' => 'Pourquoi un distributed transaction doit-il être traité avec prudence ?',
                        'choices' => [
                            ['text' => 'Elle augmente la complexité et peut introduire des problèmes de disponibilité et de coordination', 'is_correct' => true],
                            ['text' => 'Elle est toujours plus simple', 'is_correct' => false],
                            ['text' => 'Elle supprime les failures', 'is_correct' => false],
                            ['text' => 'Elle évite toute consistency', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transactions distribuées nécessitent une coordination coûteuse et peuvent être sensibles aux failures réseau.',
                    ],
                    [
                        'question' => 'Quel est le but d’un Saga ?',
                        'choices' => [
                            ['text' => 'Orchestrer ou chorégraphier une transaction métier distribuée avec des compensating actions', 'is_correct' => true],
                            ['text' => 'Créer une UI', 'is_correct' => false],
                            ['text' => 'Remplacer Git', 'is_correct' => false],
                            ['text' => 'Compresser les messages', 'is_correct' => false],
                        ],
                        'explanation' => 'Une Saga décompose une transaction distribuée en étapes locales avec des mécanismes de compensation.',
                    ],
                    [
                        'question' => 'Pourquoi l’eventual consistency peut-elle être acceptable ?',
                        'choices' => [
                            ['text' => 'Lorsque le domaine tolère une convergence différée entre plusieurs représentations', 'is_correct' => true],
                            ['text' => 'Parce que les données n’ont aucune valeur', 'is_correct' => false],
                            ['text' => 'Parce qu’elle garantit toujours une lecture immédiate', 'is_correct' => false],
                            ['text' => 'Parce qu’elle supprime les failures', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains domaines privilégient availability et scalability tout en acceptant une convergence différée.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un domain event ?',
                        'choices' => [
                            ['text' => 'Exprimer qu’un fait métier significatif s’est produit', 'is_correct' => true],
                            ['text' => 'Remplacer une database row', 'is_correct' => false],
                            ['text' => 'Définir une UI', 'is_correct' => false],
                            ['text' => 'Compiler un service', 'is_correct' => false],
                        ],
                        'explanation' => 'Un domain event représente un fait métier qui peut intéresser d’autres parties du système.',
                    ],
                    [
                        'question' => 'Pourquoi le ubiquitous language doit-il rester cohérent dans un Bounded Context ?',
                        'choices' => [
                            ['text' => 'Pour aligner le modèle, le code et les discussions métier', 'is_correct' => true],
                            ['text' => 'Pour empêcher tout changement', 'is_correct' => false],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour imposer un modèle universel', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vocabulaire cohérent réduit les ambiguïtés entre code et compréhension métier.',
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un shared database entre plusieurs services autonomes ?',
                        'choices' => [
                            ['text' => 'Un coupling fort qui réduit l’indépendance des services', 'is_correct' => true],
                            ['text' => 'Une meilleure isolation automatique', 'is_correct' => false],
                            ['text' => 'Une absence de migrations', 'is_correct' => false],
                            ['text' => 'Une impossibilité de lire les données', 'is_correct' => false],
                        ],
                        'explanation' => 'Une shared database peut créer des dépendances implicites sur le schema et les transactions.',
                    ],
                ],
            ],
            [
                'title' => 'Advanced Software Design',
                'description' => 'Design avancé, SOLID, coupling et évolution.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif du Dependency Inversion Principle ?',
                        'choices' => [
                            ['text' => 'Faire dépendre les politiques de haut niveau d’abstractions plutôt que de détails', 'is_correct' => true],
                            ['text' => 'Supprimer toutes les dependencies', 'is_correct' => false],
                            ['text' => 'Faire dépendre le domaine du framework', 'is_correct' => false],
                            ['text' => 'Interdire les interfaces', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe inverse la direction des dépendances afin de protéger les règles importantes contre les détails techniques.',
                    ],
                    [
                        'question' => 'Quel est un signe de mauvaise cohesion ?',
                        'choices' => [
                            ['text' => 'Une classe regroupe des responsabilités peu liées entre elles', 'is_correct' => true],
                            ['text' => 'Une classe possède une responsabilité claire', 'is_correct' => false],
                            ['text' => 'Les methods sont cohérentes', 'is_correct' => false],
                            ['text' => 'Les tests sont ciblés', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faible cohésion indique souvent que plusieurs concepts indépendants ont été regroupés.',
                    ],
                    [
                        'question' => 'Pourquoi le coupling cyclique est-il problématique ?',
                        'choices' => [
                            ['text' => 'Il rend l’évolution et le remplacement des modules plus difficiles', 'is_correct' => true],
                            ['text' => 'Il améliore toujours la modularité', 'is_correct' => false],
                            ['text' => 'Il supprime les dependencies', 'is_correct' => false],
                            ['text' => 'Il accélère les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Des dépendances cycliques créent des boucles qui compliquent l’architecture et les changements.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un architectural fitness function ?',
                        'choices' => [
                            ['text' => 'Vérifier automatiquement qu’une propriété architecturale importante reste respectée', 'is_correct' => true],
                            ['text' => 'Mesurer uniquement la CPU', 'is_correct' => false],
                            ['text' => 'Remplacer les unit tests', 'is_correct' => false],
                            ['text' => 'Créer des APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fitness function transforme une règle architecturale en contrôle automatisable.',
                    ],
                    [
                        'question' => 'Pourquoi préférer des contracts explicites entre modules ?',
                        'choices' => [
                            ['text' => 'Ils réduisent les dépendances implicites et rendent les interactions vérifiables', 'is_correct' => true],
                            ['text' => 'Ils empêchent toute évolution', 'is_correct' => false],
                            ['text' => 'Ils suppriment les interfaces', 'is_correct' => false],
                            ['text' => 'Ils rendent les tests inutiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Des contracts explicites clarifient ce qu’un composant fournit et ce qu’il attend.',
                    ],
                    [
                        'question' => 'Quel problème peut créer une abstraction qui fuit ?',
                        'choices' => [
                            ['text' => 'Les détails de l’implémentation traversent la frontière et couplent le client au détail', 'is_correct' => true],
                            ['text' => 'Une meilleure encapsulation', 'is_correct' => false],
                            ['text' => 'Une meilleure isolation', 'is_correct' => false],
                            ['text' => 'Une réduction automatique des dependencies', 'is_correct' => false],
                        ],
                        'explanation' => 'Une leaky abstraction expose des détails que l’abstraction devait normalement cacher.',
                    ],
                    [
                        'question' => 'Pourquoi l’architecture doit-elle être évaluée par ses trade-offs ?',
                        'choices' => [
                            ['text' => 'Chaque choix optimise certains attributs au détriment potentiel d’autres', 'is_correct' => true],
                            ['text' => 'Il existe une architecture parfaite', 'is_correct' => false],
                            ['text' => 'Les trade-offs sont inutiles', 'is_correct' => false],
                            ['text' => 'Les patterns résolvent tout', 'is_correct' => false],
                        ],
                        'explanation' => 'Les décisions architecturales impliquent souvent des compromis entre coût, performance, sécurité, simplicité et évolutivité.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un modular monolith bien conçu ?',
                        'choices' => [
                            ['text' => 'Obtenir des frontières modulaires fortes sans introduire immédiatement toute la complexité distribuée', 'is_correct' => true],
                            ['text' => 'Supprimer les modules', 'is_correct' => false],
                            ['text' => 'Forcer une seule classe', 'is_correct' => false],
                            ['text' => 'Éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modular monolith peut offrir une bonne séparation tout en conservant des opérations plus simples qu’un système distribué.',
                    ],
                    [
                        'question' => 'Pourquoi l’architecture evolution doit-elle être guidée par les changements réels ?',
                        'choices' => [
                            ['text' => 'Les frontières et abstractions doivent répondre aux besoins observés plutôt qu’à des hypothèses spéculatives', 'is_correct' => true],
                            ['text' => 'Parce que les besoins ne changent jamais', 'is_correct' => false],
                            ['text' => 'Pour éviter tout refactoring', 'is_correct' => false],
                            ['text' => 'Pour supprimer les metrics', 'is_correct' => false],
                        ],
                        'explanation' => 'Les changements réels fournissent des informations utiles sur les frontières qui doivent évoluer.',
                    ],
                    [
                        'question' => 'Qu’est-ce que architectural erosion ?',
                        'choices' => [
                            ['text' => 'La dégradation progressive des principes et boundaries sous l’effet des changements successifs', 'is_correct' => true],
                            ['text' => 'Une optimisation CPU', 'is_correct' => false],
                            ['text' => 'Une migration SQL', 'is_correct' => false],
                            ['text' => 'Une stratégie de testing', 'is_correct' => false],
                        ],
                        'explanation' => 'L’erosion apparaît lorsque les changements contournent progressivement les règles architecturales.',
                    ],
                ],
            ],
            [
                'title' => 'Distributed Systems Reliability',
                'description' => 'Distributed systems, failure modes et resilience.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Pourquoi un réseau ne doit-il pas être considéré comme parfaitement fiable ?',
                        'choices' => [
                            ['text' => 'Les appels peuvent subir latency, timeout, packet loss ou partition', 'is_correct' => true],
                            ['text' => 'Le réseau garantit toujours l’ordre', 'is_correct' => false],
                            ['text' => 'Les appels réseau sont toujours instantanés', 'is_correct' => false],
                            ['text' => 'Les services ne peuvent jamais tomber', 'is_correct' => false],
                        ],
                        'explanation' => 'Un système distribué doit considérer les failures réseau comme normales et concevoir des mécanismes de résilience.',
                    ],
                    [
                        'question' => 'Quel est le but d’un timeout ?',
                        'choices' => [
                            ['text' => 'Éviter qu’un appel reste bloqué indéfiniment en attendant une réponse', 'is_correct' => true],
                            ['text' => 'Garantir la réussite', 'is_correct' => false],
                            ['text' => 'Remplacer le retry', 'is_correct' => false],
                            ['text' => 'Supprimer les failures', 'is_correct' => false],
                        ],
                        'explanation' => 'Un timeout limite le temps qu’un système attend une opération distante.',
                    ],
                    [
                        'question' => 'Pourquoi les retries peuvent-ils aggraver un incident ?',
                        'choices' => [
                            ['text' => 'Ils peuvent amplifier la charge lorsque la dépendance est déjà dégradée', 'is_correct' => true],
                            ['text' => 'Ils réduisent toujours la charge', 'is_correct' => false],
                            ['text' => 'Ils suppriment les timeouts', 'is_correct' => false],
                            ['text' => 'Ils garantissent la consistency', 'is_correct' => false],
                        ],
                        'explanation' => 'Des retries agressifs peuvent provoquer une retry storm et amplifier une panne.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt de exponential backoff ?',
                        'choices' => [
                            ['text' => 'Espacer progressivement les retries pour réduire la pression sur une dépendance', 'is_correct' => true],
                            ['text' => 'Accélérer tous les appels', 'is_correct' => false],
                            ['text' => 'Supprimer les erreurs', 'is_correct' => false],
                            ['text' => 'Garantir la disponibilité', 'is_correct' => false],
                        ],
                        'explanation' => 'Le backoff réduit la fréquence des nouvelles tentatives lorsque les erreurs persistent.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un circuit breaker ?',
                        'choices' => [
                            ['text' => 'Empêcher temporairement les appels vers une dépendance défaillante afin de limiter les cascades', 'is_correct' => true],
                            ['text' => 'Chiffrer les requêtes', 'is_correct' => false],
                            ['text' => 'Remplacer les logs', 'is_correct' => false],
                            ['text' => 'Créer une database', 'is_correct' => false],
                        ],
                        'explanation' => 'Le circuit breaker protège le système en interrompant les appels lorsque le taux d’échec devient important.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une cascading failure ?',
                        'choices' => [
                            ['text' => 'Une défaillance qui se propage d’un composant à d’autres composants', 'is_correct' => true],
                            ['text' => 'Une erreur locale sans impact', 'is_correct' => false],
                            ['text' => 'Une feature', 'is_correct' => false],
                            ['text' => 'Un type de database', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dépendances peuvent transmettre la surcharge ou les erreurs et provoquer une panne plus large.',
                    ],
                    [
                        'question' => 'Pourquoi l’idempotency est-elle importante pour les retries ?',
                        'choices' => [
                            ['text' => 'Une même opération répétée ne doit pas produire des effets métier incorrectement dupliqués', 'is_correct' => true],
                            ['text' => 'Elle accélère toujours les queries', 'is_correct' => false],
                            ['text' => 'Elle supprime les failures', 'is_correct' => false],
                            ['text' => 'Elle remplace les transactions', 'is_correct' => false],
                        ],
                        'explanation' => 'L’idempotence permet de répéter certaines opérations sans créer d’effets supplémentaires indésirables.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un bulkhead pattern ?',
                        'choices' => [
                            ['text' => 'Isoler des ressources afin qu’une panne dans une partie ne consomme pas toutes les ressources', 'is_correct' => true],
                            ['text' => 'Partager toutes les resources', 'is_correct' => false],
                            ['text' => 'Supprimer les queues', 'is_correct' => false],
                            ['text' => 'Remplacer authentication', 'is_correct' => false],
                        ],
                        'explanation' => 'Bulkhead limite le blast radius en séparant les ressources ou pools.',
                    ],
                    [
                        'question' => 'Pourquoi les distributed traces sont-elles utiles ?',
                        'choices' => [
                            ['text' => 'Elles permettent de suivre une requête à travers plusieurs services', 'is_correct' => true],
                            ['text' => 'Elles remplacent les logs', 'is_correct' => false],
                            ['text' => 'Elles mesurent uniquement la RAM', 'is_correct' => false],
                            ['text' => 'Elles suppriment les timeouts', 'is_correct' => false],
                        ],
                        'explanation' => 'Les traces montrent le parcours d’une requête et facilitent l’analyse de latency et de failures.',
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de resilience engineering ?',
                        'choices' => [
                            ['text' => 'Concevoir le système pour continuer ou récupérer correctement malgré des failures', 'is_correct' => true],
                            ['text' => 'Éviter toute erreur humaine', 'is_correct' => false],
                            ['text' => 'Garantir zéro panne', 'is_correct' => false],
                            ['text' => 'Supprimer le monitoring', 'is_correct' => false],
                        ],
                        'explanation' => 'La resilience cherche à limiter l’impact des failures et à améliorer la capacité de recovery.',
                    ],
                ],
            ],
            [
                'title' => 'Advanced Security Engineering',
                'description' => 'Threat modeling, secure design et supply chain.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif d’un threat model formel ?',
                        'choices' => [
                            ['text' => 'Identifier systématiquement assets, trust boundaries, threats et mitigations', 'is_correct' => true],
                            ['text' => 'Créer uniquement des passwords', 'is_correct' => false],
                            ['text' => 'Remplacer les tests', 'is_correct' => false],
                            ['text' => 'Choisir une UI', 'is_correct' => false],
                        ],
                        'explanation' => 'Un threat model structuré permet d’identifier les risques avant ou pendant la conception.',
                    ],
                    [
                        'question' => 'Pourquoi une trust boundary est-elle importante ?',
                        'choices' => [
                            ['text' => 'Elle indique un changement de niveau de confiance où les données doivent être contrôlées', 'is_correct' => true],
                            ['text' => 'Elle définit une couleur', 'is_correct' => false],
                            ['text' => 'Elle remplace authorization', 'is_correct' => false],
                            ['text' => 'Elle supprime les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trust boundaries indiquent où les contrôles de validation, authentication ou authorization doivent être particulièrement rigoureux.',
                    ],
                    [
                        'question' => 'Quel est le risque d’une insecure deserialization ?',
                        'choices' => [
                            ['text' => 'Des données contrôlées par un attaquant peuvent provoquer des comportements dangereux lors de leur traitement', 'is_correct' => true],
                            ['text' => 'Elle accélère toujours l’application', 'is_correct' => false],
                            ['text' => 'Elle empêche les injections', 'is_correct' => false],
                            ['text' => 'Elle remplace encryption', 'is_correct' => false],
                        ],
                        'explanation' => 'Une désérialisation non sûre peut permettre des manipulations de données ou, selon la technologie, une exécution de code.',
                    ],
                    [
                        'question' => 'Pourquoi les authorization checks doivent-ils être centralisés ou cohérents ?',
                        'choices' => [
                            ['text' => 'Pour éviter des contrôles divergents qui créent des chemins d’accès non protégés', 'is_correct' => true],
                            ['text' => 'Pour supprimer les roles', 'is_correct' => false],
                            ['text' => 'Pour éviter les sessions', 'is_correct' => false],
                            ['text' => 'Pour rendre le frontend trusted', 'is_correct' => false],
                        ],
                        'explanation' => 'Des règles cohérentes réduisent le risque qu’un endpoint oublie une permission nécessaire.',
                    ],
                    [
                        'question' => 'Quel est l’objectif de supply-chain security ?',
                        'choices' => [
                            ['text' => 'Réduire le risque provenant des dependencies, build tools et artifacts utilisés pour produire le logiciel', 'is_correct' => true],
                            ['text' => 'Supprimer Git', 'is_correct' => false],
                            ['text' => 'Créer des tests UI', 'is_correct' => false],
                            ['text' => 'Remplacer encryption', 'is_correct' => false],
                        ],
                        'explanation' => 'La supply chain inclut les composants et outils nécessaires à la construction et à la livraison du logiciel.',
                    ],
                    [
                        'question' => 'Pourquoi signer ou vérifier les artifacts peut-il être utile ?',
                        'choices' => [
                            ['text' => 'Pour renforcer l’intégrité et la provenance des artifacts déployés', 'is_correct' => true],
                            ['text' => 'Pour accélérer le CPU', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['text' => 'Pour éviter les versions', 'is_correct' => false],
                        ],
                        'explanation' => 'La vérification de provenance et d’intégrité aide à détecter des artifacts modifiés ou non approuvés.',
                    ],
                    [
                        'question' => 'Pourquoi appliquer least privilege aux services ?',
                        'choices' => [
                            ['text' => 'Pour limiter l’impact d’une compromission d’un service', 'is_correct' => true],
                            ['text' => 'Pour donner tous les droits', 'is_correct' => false],
                            ['text' => 'Pour éviter monitoring', 'is_correct' => false],
                            ['text' => 'Pour supprimer authentication', 'is_correct' => false],
                        ],
                        'explanation' => 'Un service compromis avec des permissions limitées dispose d’un rayon d’action plus faible.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un security control compensatoire ?',
                        'choices' => [
                            ['text' => 'Réduire un risque lorsque le contrôle idéal n’est pas disponible ou applicable', 'is_correct' => true],
                            ['text' => 'Supprimer tous les contrôles', 'is_correct' => false],
                            ['text' => 'Créer un bug', 'is_correct' => false],
                            ['text' => 'Remplacer les requirements', 'is_correct' => false],
                        ],
                        'explanation' => 'Un compensating control fournit une autre protection acceptable contre le même risque.',
                    ],
                    [
                        'question' => 'Pourquoi secrets rotation est-elle importante ?',
                        'choices' => [
                            ['text' => 'Elle limite la durée d’utilisation d’un secret potentiellement compromis', 'is_correct' => true],
                            ['text' => 'Elle rend les secrets publics', 'is_correct' => false],
                            ['text' => 'Elle empêche toute authentication', 'is_correct' => false],
                            ['text' => 'Elle supprime les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'La rotation réduit la fenêtre pendant laquelle un secret exposé peut être exploité.',
                    ],
                    [
                        'question' => 'Quel est le principe de secure by design ?',
                        'choices' => [
                            ['text' => 'Intégrer les considérations de sécurité dès la conception plutôt qu’après l’implémentation', 'is_correct' => true],
                            ['text' => 'Ajouter un firewall après production uniquement', 'is_correct' => false],
                            ['text' => 'Éviter les threat models', 'is_correct' => false],
                            ['text' => 'Supprimer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Secure by design traite les risques de sécurité comme des contraintes de conception dès le départ.',
                    ],
                ],
            ],
            [
                'title' => 'Quality Engineering & Verification',
                'description' => 'Quality engineering, verification et validation.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quelle différence existe entre verification et validation ?',
                        'choices' => [
                            ['text' => 'Verification vérifie si le produit respecte les spécifications ; validation vérifie s’il répond au besoin réel', 'is_correct' => true],
                            ['text' => 'Elles sont identiques', 'is_correct' => false],
                            ['text' => 'Validation concerne uniquement le compiler', 'is_correct' => false],
                            ['text' => 'Verification concerne uniquement l’UI', 'is_correct' => false],
                        ],
                        'explanation' => 'Verification porte sur la conformité aux exigences ; validation porte sur l’adéquation au besoin.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt du property-based testing à grande échelle ?',
                        'choices' => [
                            ['text' => 'Explorer automatiquement de nombreux inputs selon des propriétés générales', 'is_correct' => true],
                            ['text' => 'Tester un seul exemple', 'is_correct' => false],
                            ['text' => 'Supprimer les assertions', 'is_correct' => false],
                            ['text' => 'Remplacer tous les integration tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Le property-based testing peut révéler des cas inattendus en générant de nombreuses entrées.',
                    ],
                    [
                        'question' => 'Pourquoi mutation score peut-il être plus informatif que coverage seule ?',
                        'choices' => [
                            ['text' => 'Il indique dans quelle mesure les tests détectent des modifications introduites artificiellement', 'is_correct' => true],
                            ['text' => 'Il mesure uniquement la CPU', 'is_correct' => false],
                            ['text' => 'Il remplace les requirements', 'is_correct' => false],
                            ['text' => 'Il mesure le nombre de developers', 'is_correct' => false],
                        ],
                        'explanation' => 'Mutation score teste indirectement la capacité des assertions à détecter des changements incorrects.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un test oracle ?',
                        'choices' => [
                            ['text' => 'Déterminer si le résultat observé est correct ou acceptable', 'is_correct' => true],
                            ['text' => 'Créer un database index', 'is_correct' => false],
                            ['text' => 'Définir une branch', 'is_correct' => false],
                            ['text' => 'Gérer les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Un test oracle fournit la référence nécessaire pour décider si le comportement est correct.',
                    ],
                    [
                        'question' => 'Pourquoi les end-to-end tests sont-ils coûteux ?',
                        'choices' => [
                            ['text' => 'Ils traversent plusieurs composants et dépendent souvent d’un environnement complexe', 'is_correct' => true],
                            ['text' => 'Ils ne testent aucun comportement', 'is_correct' => false],
                            ['text' => 'Ils sont toujours unitaires', 'is_correct' => false],
                            ['text' => 'Ils ne peuvent jamais échouer', 'is_correct' => false],
                        ],
                        'explanation' => 'Les E2E tests ont souvent plus de setup, plus de dépendances et des temps d’exécution supérieurs.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un test double ?',
                        'choices' => [
                            ['text' => 'Un composant contrôlé utilisé à la place d’une vraie dépendance dans un test', 'is_correct' => true],
                            ['text' => 'Une deuxième database production', 'is_correct' => false],
                            ['text' => 'Un duplicate requirement', 'is_correct' => false],
                            ['text' => 'Un deuxième repository', 'is_correct' => false],
                        ],
                        'explanation' => 'Les test doubles incluent notamment mocks, stubs, fakes et spies.',
                    ],
                    [
                        'question' => 'Pourquoi les tests contractuels sont-ils utiles dans une architecture de services ?',
                        'choices' => [
                            ['text' => 'Ils détectent les incompatibilités d’interface sans nécessiter systématiquement un E2E complet', 'is_correct' => true],
                            ['text' => 'Ils remplacent tous les tests', 'is_correct' => false],
                            ['text' => 'Ils suppriment les APIs', 'is_correct' => false],
                            ['text' => 'Ils empêchent les deployments', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contract tests vérifient les attentes entre consommateurs et fournisseurs.',
                    ],
                    [
                        'question' => 'Quel est le risque d’un test trop couplé à l’implémentation ?',
                        'choices' => [
                            ['text' => 'Il peut échouer après un refactoring correct ou masquer un problème comportemental réel', 'is_correct' => true],
                            ['text' => 'Il garantit toujours la qualité', 'is_correct' => false],
                            ['text' => 'Il réduit les dependencies', 'is_correct' => false],
                            ['text' => 'Il remplace les acceptance tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Les tests doivent idéalement protéger le comportement utile plutôt que des détails internes inutiles.',
                    ],
                    [
                        'question' => 'Pourquoi les quality gates doivent-elles être adaptées au contexte ?',
                        'choices' => [
                            ['text' => 'Un seuil utile dépend du type de système, du risque et des objectifs de qualité', 'is_correct' => true],
                            ['text' => 'Tous les projets ont exactement les mêmes seuils', 'is_correct' => false],
                            ['text' => 'Les metrics sont inutiles', 'is_correct' => false],
                            ['text' => 'Les gates doivent toujours bloquer', 'is_correct' => false],
                        ],
                        'explanation' => 'Les critères doivent refléter le risque et les objectifs réels du produit.',
                    ],
                    [
                        'question' => 'Quel est le but de continuous testing ?',
                        'choices' => [
                            ['text' => 'Fournir un feedback automatisé sur la qualité tout au long du software lifecycle', 'is_correct' => true],
                            ['text' => 'Tester uniquement avant production', 'is_correct' => false],
                            ['text' => 'Supprimer les tests manuels', 'is_correct' => false],
                            ['text' => 'Remplacer CI', 'is_correct' => false],
                        ],
                        'explanation' => 'Continuous testing intègre les validations à plusieurs étapes du cycle de delivery.',
                    ],
                ],
            ],
            [
                'title' => 'Performance Engineering',
                'description' => 'Profiling, scalability, capacity et optimization.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Pourquoi le profiling doit-il précéder une optimisation ciblée ?',
                        'choices' => [
                            ['text' => 'Pour identifier les bottlenecks réels avec des données', 'is_correct' => true],
                            ['text' => 'Pour éviter les benchmarks', 'is_correct' => false],
                            ['text' => 'Pour augmenter la complexité', 'is_correct' => false],
                            ['text' => 'Pour supprimer les metrics', 'is_correct' => false],
                        ],
                        'explanation' => 'Le profiling permet de concentrer les efforts là où ils auront le plus d’impact.',
                    ],
                    [
                        'question' => 'Quelle différence existe entre scalability verticale et horizontale ?',
                        'choices' => [
                            ['text' => 'Verticale augmente les ressources d’une instance ; horizontale ajoute des instances', 'is_correct' => true],
                            ['text' => 'Elles sont identiques', 'is_correct' => false],
                            ['text' => 'Horizontale ajoute uniquement de la RAM', 'is_correct' => false],
                            ['text' => 'Verticale ajoute des servers', 'is_correct' => false],
                        ],
                        'explanation' => 'Vertical scaling augmente les capacités d’un nœud, tandis que horizontal scaling augmente le nombre de nœuds.',
                    ],
                    [
                        'question' => 'Pourquoi un cache distribué introduit-il de nouveaux trade-offs ?',
                        'choices' => [
                            ['text' => 'Il peut améliorer la performance mais introduire consistency, invalidation et network overhead', 'is_correct' => true],
                            ['text' => 'Il supprime toutes les latencies', 'is_correct' => false],
                            ['text' => 'Il garantit toujours la fraîcheur', 'is_correct' => false],
                            ['text' => 'Il remplace toutes les databases', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cache distribué ajoute une infrastructure et des problèmes de cohérence qu’il faut gérer.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un load balancer ?',
                        'choices' => [
                            ['text' => 'Distribuer le trafic entre plusieurs instances selon une stratégie donnée', 'is_correct' => true],
                            ['text' => 'Stocker les passwords', 'is_correct' => false],
                            ['text' => 'Compiler le code', 'is_correct' => false],
                            ['text' => 'Remplacer les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Un load balancer répartit les requêtes et peut contribuer à la disponibilité et à la scalability.',
                    ],
                    [
                        'question' => 'Pourquoi capacity planning est-il important ?',
                        'choices' => [
                            ['text' => 'Pour estimer les ressources nécessaires sous des workloads attendus et des scénarios de croissance', 'is_correct' => true],
                            ['text' => 'Pour éviter les metrics', 'is_correct' => false],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour garantir zéro panne', 'is_correct' => false],
                        ],
                        'explanation' => 'Le capacity planning aide à anticiper les besoins en ressources et les limites du système.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un latency percentile ?',
                        'choices' => [
                            ['text' => 'Une mesure indiquant le temps sous lequel se situe une proportion donnée des requêtes', 'is_correct' => true],
                            ['text' => 'Une moyenne de CPU', 'is_correct' => false],
                            ['text' => 'Une mesure de code coverage', 'is_correct' => false],
                            ['text' => 'Un type de cache', 'is_correct' => false],
                        ],
                        'explanation' => 'P95 ou P99, par exemple, permettent de voir le comportement de la majorité et de la queue des latencies.',
                    ],
                    [
                        'question' => 'Pourquoi P99 peut-il être important ?',
                        'choices' => [
                            ['text' => 'Il révèle le comportement de la queue de distribution qui peut affecter fortement certains utilisateurs', 'is_correct' => true],
                            ['text' => 'Il mesure uniquement le nombre de users', 'is_correct' => false],
                            ['text' => 'Il remplace la moyenne toujours', 'is_correct' => false],
                            ['text' => 'Il indique la taille du code', 'is_correct' => false],
                        ],
                        'explanation' => 'Les percentiles élevés rendent visibles les expériences très lentes que la moyenne peut masquer.',
                    ],
                    [
                        'question' => 'Quel est le danger d’un retry sans limite ?',
                        'choices' => [
                            ['text' => 'Une surcharge potentielle et une amplification des failures', 'is_correct' => true],
                            ['text' => 'Une meilleure disponibilité garantie', 'is_correct' => false],
                            ['text' => 'Une suppression des timeouts', 'is_correct' => false],
                            ['text' => 'Une consistency parfaite', 'is_correct' => false],
                        ],
                        'explanation' => 'Des retries non contrôlés peuvent créer une boucle de surcharge.',
                    ],
                    [
                        'question' => 'Pourquoi benchmark et production metrics doivent-ils être comparés avec prudence ?',
                        'choices' => [
                            ['text' => 'Les workloads et environnements peuvent différer fortement', 'is_correct' => true],
                            ['text' => 'Ils sont toujours identiques', 'is_correct' => false],
                            ['text' => 'Les benchmarks sont inutiles', 'is_correct' => false],
                            ['text' => 'Production ne possède aucune metric', 'is_correct' => false],
                        ],
                        'explanation' => 'Un benchmark synthétique ne représente pas toujours la distribution réelle des workloads.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une performance budget ?',
                        'choices' => [
                            ['text' => 'Définir des limites mesurables de performance à préserver pendant l’évolution du produit', 'is_correct' => true],
                            ['text' => 'Supprimer les tests', 'is_correct' => false],
                            ['text' => 'Garantir un CPU précis', 'is_correct' => false],
                            ['text' => 'Éviter les profiling tools', 'is_correct' => false],
                        ],
                        'explanation' => 'Un performance budget transforme des objectifs de performance en contraintes vérifiables.',
                    ],
                ],
            ],
            [
                'title' => 'Release & Operational Excellence',
                'description' => 'Release engineering, incident response et governance.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif du progressive delivery ?',
                        'choices' => [
                            ['text' => 'Introduire progressivement une version avec observation et capacité de contrôle', 'is_correct' => true],
                            ['text' => 'Déployer tout immédiatement', 'is_correct' => false],
                            ['text' => 'Supprimer le monitoring', 'is_correct' => false],
                            ['text' => 'Éviter les rollback', 'is_correct' => false],
                        ],
                        'explanation' => 'Le progressive delivery réduit le risque en combinant rollout progressif et observability.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un blue-green deployment ?',
                        'choices' => [
                            ['text' => 'Maintenir deux environnements et basculer le trafic entre une version active et une nouvelle version', 'is_correct' => true],
                            ['text' => 'Déployer sans rollback', 'is_correct' => false],
                            ['text' => 'Créer deux repositories', 'is_correct' => false],
                            ['text' => 'Exécuter deux tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Blue-green permet de préparer une nouvelle version séparément puis de basculer le trafic.',
                    ],
                    [
                        'question' => 'Pourquoi un rollback n’est-il pas toujours suffisant ?',
                        'choices' => [
                            ['text' => 'Certaines migrations ou opérations peuvent être non réversibles ou avoir déjà modifié des données', 'is_correct' => true],
                            ['text' => 'Parce que rollback est toujours inutile', 'is_correct' => false],
                            ['text' => 'Parce que Git ne fonctionne pas', 'is_correct' => false],
                            ['text' => 'Parce que les artifacts ne sont jamais versionnés', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rollback applicatif ne suffit pas si les changements de données ou effets externes ne peuvent pas être annulés.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un incident commander ?',
                        'choices' => [
                            ['text' => 'Coordonner la réponse à un incident et faciliter les décisions et communications', 'is_correct' => true],
                            ['text' => 'Écrire toutes les lignes de code', 'is_correct' => false],
                            ['text' => 'Remplacer le monitoring', 'is_correct' => false],
                            ['text' => 'Déployer sans contrôle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incident commander fournit une coordination claire pendant une situation opérationnelle critique.',
                    ],
                    [
                        'question' => 'Pourquoi séparer mitigation et root cause analysis ?',
                        'choices' => [
                            ['text' => 'Restaurer rapidement le service peut être prioritaire avant d’analyser complètement la cause', 'is_correct' => true],
                            ['text' => 'La root cause n’est jamais utile', 'is_correct' => false],
                            ['text' => 'La mitigation empêche toute analyse', 'is_correct' => false],
                            ['text' => 'Les deux sont identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant un incident, réduire l’impact peut être urgent ; l’analyse approfondie peut suivre après la stabilisation.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un SLO ?',
                        'choices' => [
                            ['text' => 'Un objectif mesurable de fiabilité ou performance d’un service', 'is_correct' => true],
                            ['text' => 'Un outil Git', 'is_correct' => false],
                            ['text' => 'Une database table', 'is_correct' => false],
                            ['text' => 'Un design pattern', 'is_correct' => false],
                        ],
                        'explanation' => 'Un SLO exprime une cible mesurable de qualité de service.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un error budget ?',
                        'choices' => [
                            ['text' => 'Permettre d’arbitrer release velocity et reliability selon une tolérance d’erreur définie', 'is_correct' => true],
                            ['text' => 'Garantir zéro erreur', 'is_correct' => false],
                            ['text' => 'Supprimer les incidents', 'is_correct' => false],
                            ['text' => 'Remplacer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'L’error budget donne une marge de tolérance qui aide à décider quand privilégier la stabilité.',
                    ],
                    [
                        'question' => 'Pourquoi les postmortems doivent-ils produire des actions suivies ?',
                        'choices' => [
                            ['text' => 'Sans actions, l’apprentissage de l’incident risque de ne pas améliorer le système', 'is_correct' => true],
                            ['text' => 'Pour augmenter les incidents', 'is_correct' => false],
                            ['text' => 'Pour désigner un coupable', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les actions concrètes transforment les enseignements en améliorations vérifiables.',
                    ],
                    [
                        'question' => 'Pourquoi release observability est-elle importante ?',
                        'choices' => [
                            ['text' => 'Pour détecter rapidement les changements de comportement après une release', 'is_correct' => true],
                            ['text' => 'Pour supprimer les metrics', 'is_correct' => false],
                            ['text' => 'Pour éviter les rollback', 'is_correct' => false],
                            ['text' => 'Pour empêcher les deployments', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer les signaux avant et après une release aide à identifier les regressions.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un change failure rate ?',
                        'choices' => [
                            ['text' => 'La proportion de changements qui provoquent un incident, rollback ou autre failure significative', 'is_correct' => true],
                            ['text' => 'La vitesse du compiler', 'is_correct' => false],
                            ['text' => 'Le nombre de commits uniquement', 'is_correct' => false],
                            ['text' => 'Le nombre de users', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette métrique aide à évaluer la fiabilité du processus de delivery.',
                    ],
                ],
            ],
            [
                'title' => 'Maintainability & Engineering Governance',
                'description' => 'Maintainability, standards, architecture governance et évolution.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Pourquoi définir des engineering standards ?',
                        'choices' => [
                            ['text' => 'Pour établir des pratiques cohérentes et réduire les décisions répétitives', 'is_correct' => true],
                            ['text' => 'Pour empêcher toute innovation', 'is_correct' => false],
                            ['text' => 'Pour supprimer les reviews', 'is_correct' => false],
                            ['text' => 'Pour remplacer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Des standards partagés créent une base cohérente tout en laissant de la place aux exceptions justifiées.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’une architecture review ?',
                        'choices' => [
                            ['text' => 'Évaluer les décisions techniques importantes par rapport aux contraintes et objectifs du système', 'is_correct' => true],
                            ['text' => 'Remplacer les unit tests', 'is_correct' => false],
                            ['text' => 'Déployer en production', 'is_correct' => false],
                            ['text' => 'Créer les requirements', 'is_correct' => false],
                        ],
                        'explanation' => 'Une architecture review permet d’identifier tôt les risques et incohérences importantes.',
                    ],
                    [
                        'question' => 'Pourquoi éviter une governance trop lourde ?',
                        'choices' => [
                            ['text' => 'Elle peut ralentir inutilement les changements et créer du process sans valeur', 'is_correct' => true],
                            ['text' => 'Elle garantit toujours la qualité', 'is_correct' => false],
                            ['text' => 'Elle supprime les bugs', 'is_correct' => false],
                            ['text' => 'Elle rend les systèmes plus simples', 'is_correct' => false],
                        ],
                        'explanation' => 'La governance doit protéger les risques importants sans créer un coût administratif disproportionné.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un technology radar ?',
                        'choices' => [
                            ['text' => 'Un moyen de communiquer des recommandations sur les technologies à adopter, essayer, surveiller ou éviter', 'is_correct' => true],
                            ['text' => 'Un network scanner', 'is_correct' => false],
                            ['text' => 'Un database', 'is_correct' => false],
                            ['text' => 'Un test', 'is_correct' => false],
                        ],
                        'explanation' => 'Un technology radar aide une organisation à partager une position évolutive sur les technologies.',
                    ],
                    [
                        'question' => 'Pourquoi mesurer le coût du changement ?',
                        'choices' => [
                            ['text' => 'Il indique indirectement la maintainability et les zones où la complexité augmente', 'is_correct' => true],
                            ['text' => 'Il remplace les tests', 'is_correct' => false],
                            ['text' => 'Il mesure uniquement le CPU', 'is_correct' => false],
                            ['text' => 'Il empêche les refactoring', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse du coût de changement peut révéler des problèmes de coupling, dette ou architecture.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un architecture fitness function ?',
                        'choices' => [
                            ['text' => 'Automatiser le contrôle de propriétés architecturales importantes', 'is_correct' => true],
                            ['text' => 'Créer des users', 'is_correct' => false],
                            ['text' => 'Remplacer CI', 'is_correct' => false],
                            ['text' => 'Supprimer les code reviews', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle transforme une règle architecturale en contrôle répétable.',
                    ],
                    [
                        'question' => 'Pourquoi conserver les décisions techniques importantes ?',
                        'choices' => [
                            ['text' => 'Pour éviter de perdre le contexte lorsque les personnes ou hypothèses changent', 'is_correct' => true],
                            ['text' => 'Pour augmenter le repository', 'is_correct' => false],
                            ['text' => 'Pour empêcher le refactoring', 'is_correct' => false],
                            ['text' => 'Pour supprimer les discussions', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte historique aide à comprendre pourquoi une décision a été prise.',
                    ],
                    [
                        'question' => 'Quel est le rôle de technical roadmap ?',
                        'choices' => [
                            ['text' => 'Planifier l’évolution technique en fonction des besoins, risques et objectifs du produit', 'is_correct' => true],
                            ['text' => 'Remplacer le product roadmap', 'is_correct' => false],
                            ['text' => 'Créer les tests', 'is_correct' => false],
                            ['text' => 'Définir les passwords', 'is_correct' => false],
                        ],
                        'explanation' => 'Une technical roadmap rend visibles les évolutions techniques nécessaires et leur priorité.',
                    ],
                    [
                        'question' => 'Pourquoi l’obsolescence technologique doit-elle être surveillée ?',
                        'choices' => [
                            ['text' => 'Une technologie vieillissante peut augmenter les risques, coûts de support et difficultés de recrutement ou migration', 'is_correct' => true],
                            ['text' => 'Elle améliore toujours la sécurité', 'is_correct' => false],
                            ['text' => 'Elle supprime les dependencies', 'is_correct' => false],
                            ['text' => 'Elle réduit toujours les coûts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vieillissement technologique peut augmenter le coût et le risque à long terme.',
                    ],
                    [
                        'question' => 'Quel principe aide à équilibrer standardisation et autonomie ?',
                        'choices' => [
                            ['text' => 'Standardiser les éléments à fort risque tout en laissant les équipes libres sur les détails à faible impact', 'is_correct' => true],
                            ['text' => 'Standardiser absolument tout', 'is_correct' => false],
                            ['text' => 'Ne rien standardiser', 'is_correct' => false],
                            ['text' => 'Interdire les exceptions', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne governance standardise surtout les aspects où la cohérence apporte une valeur ou réduit un risque significatif.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'slug' => Str::slug($quizData['title']),
                ],
                [
                    'major_id' => $major->id,
                    'title' => $quizData['title'],
                    'description' => $quizData['description'],
                    'difficulty' => $quizData['difficulty'],
                    'is_active' => true,
                ]
            );

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'question' => $questionData['question'],
                    ],
                    [
                        'explanation' => $questionData['explanation'],
                        'is_active' => true,
                    ]
                );

                Choice::where('question_id', $question->id)->delete();

                // Shuffle the full records, including is_correct.
                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $index => $choiceData) {
                    Choice::create(
                        [
                            'question_id' => $question->id,
                            'choice' => $choiceData['text'],
                            'is_correct' => $choiceData['is_correct'],
                            'order' => $index + 1,
                        ]
                    );
                }
            }
        }
    }
}