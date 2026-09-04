<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SoftwareEngineeringAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'computer-science-it')->firstOrFail();

        $subject = $major->subjects()
            ->where('slug', 'genie-logiciel')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Architecture logicielle avancée',
                'description' => 'Architecture, modularité, design principles et décisions techniques pour les systèmes logiciels complexes.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de l’Hexagonal Architecture ?',
                        'choices' => [
                            ['text' => 'Isoler le domaine des détails techniques externes', 'is_correct' => true],
                            ['text' => 'Supprimer toutes les interfaces', 'is_correct' => false],
                            ['text' => 'Remplacer les tests unitaires par des tests UI', 'is_correct' => false],
                            ['text' => 'Forcer l’utilisation d’une seule base de données', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Hexagonal Architecture cherche à isoler le domaine et les use cases des détails externes grâce à des ports et des adapters.',
                    ],
                    [
                        'question' => 'Dans une architecture Clean Architecture, quelle dépendance est généralement recherchée ?',
                        'choices' => [
                            ['text' => 'Les couches externes dépendent des règles métier', 'is_correct' => true],
                            ['text' => 'Les règles métier dépendent directement du framework UI', 'is_correct' => false],
                            ['text' => 'La base de données définit les règles métier', 'is_correct' => false],
                            ['text' => 'Le controller dépend directement de toutes les tables', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Dependency Rule privilégie une dépendance vers l’intérieur : les règles métier restent indépendantes des détails externes.',
                    ],
                    [
                        'question' => 'Quel problème un module avec une forte cohésion et un faible couplage cherche-t-il principalement à réduire ?',
                        'choices' => [
                            ['text' => 'L’impact des changements entre modules', 'is_correct' => true],
                            ['text' => 'La capacité à tester le module', 'is_correct' => false],
                            ['text' => 'La lisibilité du code', 'is_correct' => false],
                            ['text' => 'La séparation des responsabilités', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forte cohésion concentre les responsabilités liées et un faible couplage limite les effets de propagation des changements.',
                    ],
                    [
                        'question' => 'Pourquoi l’abstraction prématurée peut-elle être dangereuse ?',
                        'choices' => [
                            ['text' => 'Elle peut figer une conception avant que les variations réelles soient connues', 'is_correct' => true],
                            ['text' => 'Elle empêche toujours la compilation', 'is_correct' => false],
                            ['text' => 'Elle supprime automatiquement les bugs', 'is_correct' => false],
                            ['text' => 'Elle rend les tests impossibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une abstraction créée trop tôt peut introduire une complexité inutile et reposer sur des hypothèses qui évolueront.',
                    ],
                    [
                        'question' => 'Quel principe SOLID est directement associé à l’idée qu’un module doit avoir une seule raison de changer ?',
                        'choices' => [
                            ['text' => 'Single Responsibility Principle', 'is_correct' => true],
                            ['text' => 'Open/Closed Principle', 'is_correct' => false],
                            ['text' => 'Liskov Substitution Principle', 'is_correct' => false],
                            ['text' => 'Dependency Inversion Principle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Single Responsibility Principle recommande de regrouper les responsabilités qui changent pour une même raison.',
                    ],
                    [
                        'question' => 'Quel est un risque majeur d’un God Object ?',
                        'choices' => [
                            ['text' => 'Il concentre trop de responsabilités et devient difficile à tester et modifier', 'is_correct' => true],
                            ['text' => 'Il empêche toute utilisation de polymorphism', 'is_correct' => false],
                            ['text' => 'Il réduit toujours le couplage', 'is_correct' => false],
                            ['text' => 'Il garantit une meilleure séparation des responsabilités', 'is_correct' => false],
                        ],
                        'explanation' => 'Un God Object concentre de nombreuses responsabilités, ce qui augmente le couplage et le coût de maintenance.',
                    ],
                    [
                        'question' => 'Quel est le but principal du Dependency Inversion Principle ?',
                        'choices' => [
                            ['text' => 'Faire dépendre les politiques de haut niveau d’abstractions plutôt que de détails', 'is_correct' => true],
                            ['text' => 'Supprimer toutes les dépendances', 'is_correct' => false],
                            ['text' => 'Faire dépendre le domaine des frameworks', 'is_correct' => false],
                            ['text' => 'Éviter toute interface', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Dependency Inversion Principle place les abstractions au centre afin que les détails techniques puissent être remplacés plus facilement.',
                    ],
                    [
                        'question' => 'Quand un modular monolith est-il souvent préférable à des microservices ?',
                        'choices' => [
                            ['text' => 'Lorsque les frontières métier sont encore stables mais que la complexité opérationnelle distribuée serait excessive', 'is_correct' => true],
                            ['text' => 'Uniquement lorsque le système n’a aucune base de données', 'is_correct' => false],
                            ['text' => 'Toujours pour les systèmes à très grande échelle', 'is_correct' => false],
                            ['text' => 'Uniquement lorsqu’il n’existe aucune API', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modular monolith peut offrir des frontières fortes entre modules sans ajouter immédiatement les coûts opérationnels d’un système distribué.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’architectural erosion ?',
                        'choices' => [
                            ['text' => 'La dégradation progressive des principes et frontières architecturaux au fil des changements', 'is_correct' => true],
                            ['text' => 'L’optimisation automatique du code', 'is_correct' => false],
                            ['text' => 'La réduction de la taille des binaries', 'is_correct' => false],
                            ['text' => 'La migration d’une base SQL vers NoSQL', 'is_correct' => false],
                        ],
                        'explanation' => 'L’architectural erosion apparaît lorsque les changements successifs contournent progressivement les règles et frontières prévues.',
                    ],
                    [
                        'question' => 'Quel artefact est particulièrement utile pour documenter une décision architecturale importante ?',
                        'choices' => [
                            ['text' => 'ADR (Architecture Decision Record)', 'is_correct' => true],
                            ['text' => 'CSS stylesheet', 'is_correct' => false],
                            ['text' => 'Unit test fixture', 'is_correct' => false],
                            ['text' => 'Database index', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ADR capture le contexte, la décision et les conséquences d’un choix architectural, ce qui facilite son évolution et sa compréhension.',
                    ],
                ],
            ],
            [
                'title' => 'Design Patterns avancés',
                'description' => 'Application raisonnée des design patterns, trade-offs et gestion de la complexité.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel problème le Strategy Pattern résout-il principalement ?',
                        'choices' => [
                            ['text' => 'Permettre de remplacer un algorithme ou comportement encapsulé sans modifier le client', 'is_correct' => true],
                            ['text' => 'Créer automatiquement une base de données', 'is_correct' => false],
                            ['text' => 'Gérer les transactions distribuées', 'is_correct' => false],
                            ['text' => 'Remplacer tous les interfaces', 'is_correct' => false],
                        ],
                        'explanation' => 'Strategy encapsule plusieurs algorithmes interchangeables derrière une abstraction commune.',
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un Singleton global dans une application complexe ?',
                        'choices' => [
                            ['text' => 'Il introduit un état partagé et un couplage implicite difficiles à tester', 'is_correct' => true],
                            ['text' => 'Il interdit toute création d’objet', 'is_correct' => false],
                            ['text' => 'Il garantit une isolation parfaite', 'is_correct' => false],
                            ['text' => 'Il force toutes les classes à être immutable', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Singleton global agit souvent comme une variable globale et complique le testing, le lifecycle management et le raisonnement sur les dépendances.',
                    ],
                    [
                        'question' => 'Quel est l’objectif du Decorator Pattern ?',
                        'choices' => [
                            ['text' => 'Ajouter dynamiquement des responsabilités à un objet sans modifier sa classe', 'is_correct' => true],
                            ['text' => 'Créer une hiérarchie de bases de données', 'is_correct' => false],
                            ['text' => 'Remplacer un compiler', 'is_correct' => false],
                            ['text' => 'Synchroniser deux services', 'is_correct' => false],
                        ],
                        'explanation' => 'Decorator permet de composer des comportements autour d’un objet tout en conservant son interface.',
                    ],
                    [
                        'question' => 'Dans quel cas le Adapter Pattern est-il particulièrement approprié ?',
                        'choices' => [
                            ['text' => 'Lorsqu’une interface existante doit être rendue compatible avec une autre interface attendue', 'is_correct' => true],
                            ['text' => 'Lorsqu’il faut stocker un password', 'is_correct' => false],
                            ['text' => 'Lorsqu’il faut mesurer la CPU', 'is_correct' => false],
                            ['text' => 'Lorsqu’il faut remplacer un operating system', 'is_correct' => false],
                        ],
                        'explanation' => 'Adapter traduit l’interface d’un composant existant vers l’interface attendue par le client.',
                    ],
                    [
                        'question' => 'Quel est le principal avantage du Factory Method ?',
                        'choices' => [
                            ['text' => 'Encapsuler la décision de création d’un objet derrière une abstraction', 'is_correct' => true],
                            ['text' => 'Garantir qu’un objet est global', 'is_correct' => false],
                            ['text' => 'Éviter tout polymorphism', 'is_correct' => false],
                            ['text' => 'Supprimer le besoin de constructors', 'is_correct' => false],
                        ],
                        'explanation' => 'Factory Method sépare le code client des détails concrets de création des objets.',
                    ],
                    [
                        'question' => 'Quel pattern est adapté à une structure arborescente où les objets individuels et les groupes doivent être traités uniformément ?',
                        'choices' => [
                            ['text' => 'Composite', 'is_correct' => true],
                            ['text' => 'Observer', 'is_correct' => false],
                            ['text' => 'Command', 'is_correct' => false],
                            ['text' => 'Proxy', 'is_correct' => false],
                        ],
                        'explanation' => 'Composite permet de manipuler de manière uniforme des leaves et des composites dans une structure hiérarchique.',
                    ],
                    [
                        'question' => 'Quel problème l’Observer Pattern peut-il créer s’il est mal utilisé ?',
                        'choices' => [
                            ['text' => 'Des chaînes de notifications difficiles à suivre et des dépendances implicites', 'is_correct' => true],
                            ['text' => 'Une impossibilité totale de notifier les observers', 'is_correct' => false],
                            ['text' => 'Une absence de polymorphism', 'is_correct' => false],
                            ['text' => 'Une suppression automatique des events', 'is_correct' => false],
                        ],
                        'explanation' => 'Un réseau complexe d’observers peut créer des effets de bord, des cycles et des problèmes de lifecycle.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt du Command Pattern dans une application métier ?',
                        'choices' => [
                            ['text' => 'Encapsuler une opération sous forme d’objet afin de permettre notamment queueing, logging ou retry', 'is_correct' => true],
                            ['text' => 'Supprimer les transactions', 'is_correct' => false],
                            ['text' => 'Remplacer les repositories', 'is_correct' => false],
                            ['text' => 'Forcer un seul utilisateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Command transforme une opération en objet manipulable, ce qui facilite l’historisation, l’exécution différée et certains mécanismes de retry.',
                    ],
                    [
                        'question' => 'Pourquoi le Repository Pattern ne doit-il pas être utilisé comme simple wrapper inutile autour d’un ORM ?',
                        'choices' => [
                            ['text' => 'Il peut ajouter une abstraction sans valeur si aucune frontière métier ou technique réelle n’est apportée', 'is_correct' => true],
                            ['text' => 'Il interdit l’utilisation de SQL', 'is_correct' => false],
                            ['text' => 'Il rend toute architecture impossible', 'is_correct' => false],
                            ['text' => 'Il supprime les migrations', 'is_correct' => false],
                        ],
                        'explanation' => 'Une abstraction n’est utile que si elle clarifie une frontière, encapsule une variation ou améliore réellement le design.',
                    ],
                    [
                        'question' => 'Quel est un signe qu’un design pattern est utilisé comme overengineering ?',
                        'choices' => [
                            ['text' => 'Le pattern ajoute davantage de complexité que le problème qu’il résout', 'is_correct' => true],
                            ['text' => 'Le code contient une interface', 'is_correct' => false],
                            ['text' => 'Le projet possède des tests', 'is_correct' => false],
                            ['text' => 'Le système utilise dependency injection', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pattern doit résoudre un problème concret ; s’il augmente surtout le nombre de classes et d’indirections, il peut devenir contre-productif.',
                    ],
                ],
            ],
            [
                'title' => 'Software Design & Domain Modeling',
                'description' => 'Domain modeling, bounded contexts, invariants et conception de modèles métier complexes.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un invariant métier ?',
                        'choices' => [
                            ['text' => 'Une règle qui doit rester vraie pour un état métier valide', 'is_correct' => true],
                            ['text' => 'Une règle CSS', 'is_correct' => false],
                            ['text' => 'Un endpoint HTTP', 'is_correct' => false],
                            ['text' => 'Un fichier de configuration', 'is_correct' => false],
                        ],
                        'explanation' => 'Un invariant exprime une contrainte métier qui doit être préservée par les opérations du domaine.',
                    ],
                    [
                        'question' => 'Pourquoi encapsuler les invariants dans le domain model ?',
                        'choices' => [
                            ['text' => 'Pour empêcher les clients externes de créer facilement des états métier invalides', 'is_correct' => true],
                            ['text' => 'Pour accélérer automatiquement le réseau', 'is_correct' => false],
                            ['text' => 'Pour supprimer les transactions', 'is_correct' => false],
                            ['text' => 'Pour éviter tous les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'L’encapsulation permet au modèle de protéger ses propres règles plutôt que de dépendre de contrôles dispersés.',
                    ],
                    [
                        'question' => 'Dans Domain-Driven Design, que représente principalement un Value Object ?',
                        'choices' => [
                            ['text' => 'Un objet défini par ses valeurs et généralement sans identité propre', 'is_correct' => true],
                            ['text' => 'Une table toujours persistée', 'is_correct' => false],
                            ['text' => 'Un service réseau', 'is_correct' => false],
                            ['text' => 'Un utilisateur authentifié', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Value Object est caractérisé par ses attributs et peut généralement être immutable.',
                    ],
                    [
                        'question' => 'Quelle est la caractéristique principale d’une Entity dans DDD ?',
                        'choices' => [
                            ['text' => 'Elle possède une identité qui reste pertinente au cours de son lifecycle', 'is_correct' => true],
                            ['text' => 'Elle ne possède jamais d’état', 'is_correct' => false],
                            ['text' => 'Elle est toujours un Value Object', 'is_correct' => false],
                            ['text' => 'Elle doit être une table SQL', 'is_correct' => false],
                        ],
                        'explanation' => 'Une Entity est définie principalement par son identité plutôt que par la seule valeur de ses attributs.',
                    ],
                    [
                        'question' => 'À quoi sert un Aggregate Boundary ?',
                        'choices' => [
                            ['text' => 'À définir une frontière de cohérence transactionnelle autour d’un ensemble d’objets métier', 'is_correct' => true],
                            ['text' => 'À choisir la couleur d’une UI', 'is_correct' => false],
                            ['text' => 'À compresser des données', 'is_correct' => false],
                            ['text' => 'À gérer uniquement les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Aggregate Boundary délimite les invariants qui doivent être maintenus ensemble lors des changements métier.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un Aggregate Root ?',
                        'choices' => [
                            ['text' => 'Être le point d’entrée contrôlé vers les objets de l’Aggregate', 'is_correct' => true],
                            ['text' => 'Être toujours une table SQL', 'is_correct' => false],
                            ['text' => 'Remplacer le message broker', 'is_correct' => false],
                            ['text' => 'Exécuter tous les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Les modifications d’un Aggregate passent généralement par son Aggregate Root afin de protéger ses invariants.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un Domain Service ?',
                        'choices' => [
                            ['text' => 'Un service contenant une opération métier qui ne s’intègre naturellement dans une Entity ou un Value Object', 'is_correct' => true],
                            ['text' => 'Un service qui ne contient que des requêtes HTTP', 'is_correct' => false],
                            ['text' => 'Un cache global', 'is_correct' => false],
                            ['text' => 'Un composant exclusivement UI', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Domain Service exprime une logique métier significative qui ne possède pas naturellement de propriétaire unique dans le modèle.',
                    ],
                    [
                        'question' => 'Pourquoi un Bounded Context est-il important dans DDD ?',
                        'choices' => [
                            ['text' => 'Il définit une frontière où un modèle et son langage métier gardent une signification cohérente', 'is_correct' => true],
                            ['text' => 'Il impose une seule base de données', 'is_correct' => false],
                            ['text' => 'Il remplace les tests d’intégration', 'is_correct' => false],
                            ['text' => 'Il interdit les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Bounded Context limite le sens d’un modèle et évite de vouloir imposer un modèle universel à tous les domaines.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un Anti-Corruption Layer ?',
                        'choices' => [
                            ['text' => 'Une couche qui protège un modèle interne contre les concepts incompatibles d’un système externe', 'is_correct' => true],
                            ['text' => 'Un mécanisme de chiffrement', 'is_correct' => false],
                            ['text' => 'Un type de database index', 'is_correct' => false],
                            ['text' => 'Un test UI', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Anti-Corruption Layer traduit les concepts externes afin qu’ils ne contaminent pas directement le modèle interne.',
                    ],
                    [
                        'question' => 'Pourquoi le ubiquitous language est-il important en DDD ?',
                        'choices' => [
                            ['text' => 'Il aligne le vocabulaire du code, du modèle et des experts métier', 'is_correct' => true],
                            ['text' => 'Il remplace le compiler', 'is_correct' => false],
                            ['text' => 'Il définit automatiquement les APIs', 'is_correct' => false],
                            ['text' => 'Il empêche toute évolution du domaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ubiquitous language réduit les ambiguïtés entre les experts métier et les développeurs en utilisant un vocabulaire partagé.',
                    ],
                ],
            ],
            [
                'title' => 'Testing & Quality Engineering avancé',
                'description' => 'Testing strategy, test doubles, property-based testing, mutation testing et quality gates.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal du mutation testing ?',
                        'choices' => [
                            ['text' => 'Évaluer si les tests détectent des modifications artificielles du comportement', 'is_correct' => true],
                            ['text' => 'Mesurer la consommation mémoire', 'is_correct' => false],
                            ['text' => 'Remplacer tous les integration tests', 'is_correct' => false],
                            ['text' => 'Tester uniquement l’UI', 'is_correct' => false],
                        ],
                        'explanation' => 'Mutation testing introduit de petites modifications dans le code et vérifie si la suite de tests les détecte.',
                    ],
                    [
                        'question' => 'Pourquoi un test flaky est-il particulièrement dangereux dans CI/CD ?',
                        'choices' => [
                            ['text' => 'Il peut produire des échecs non déterministes et réduire la confiance dans le pipeline', 'is_correct' => true],
                            ['text' => 'Il garantit une meilleure couverture', 'is_correct' => false],
                            ['text' => 'Il accélère toujours les builds', 'is_correct' => false],
                            ['text' => 'Il empêche toute regression', 'is_correct' => false],
                        ],
                        'explanation' => 'Les flaky tests créent des faux signaux et peuvent conduire l’équipe à ignorer de vrais échecs.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un contract test ?',
                        'choices' => [
                            ['text' => 'Vérifier qu’un consumer et un provider respectent un contrat d’interface attendu', 'is_correct' => true],
                            ['text' => 'Tester uniquement les performances GPU', 'is_correct' => false],
                            ['text' => 'Remplacer tous les unit tests', 'is_correct' => false],
                            ['text' => 'Valider la couleur d’un bouton', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contract tests vérifient les attentes partagées entre systèmes communicants.',
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’un test property-based ?',
                        'choices' => [
                            ['text' => 'Explorer automatiquement de nombreuses entrées selon des propriétés invariantes', 'is_correct' => true],
                            ['text' => 'Tester uniquement un exemple fixe', 'is_correct' => false],
                            ['text' => 'Éviter toute assertion', 'is_correct' => false],
                            ['text' => 'Supprimer les edge cases', 'is_correct' => false],
                        ],
                        'explanation' => 'Le property-based testing génère de nombreuses données et vérifie des propriétés générales plutôt qu’une liste limitée d’exemples.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de mocker excessivement les dépendances ?',
                        'choices' => [
                            ['text' => 'Les tests peuvent devenir couplés à l’implémentation et perdre leur valeur comportementale', 'is_correct' => true],
                            ['text' => 'Les mocks sont toujours plus lents', 'is_correct' => false],
                            ['text' => 'Les tests ne peuvent plus compiler', 'is_correct' => false],
                            ['text' => 'Les assertions deviennent impossibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Un mocking excessif peut faire réussir des tests alors que le comportement réel du système est incorrect.',
                    ],
                    [
                        'question' => 'Quelle est une caractéristique d’un bon integration test ?',
                        'choices' => [
                            ['text' => 'Il vérifie une interaction réelle entre plusieurs composants pertinents avec un scope maîtrisé', 'is_correct' => true],
                            ['text' => 'Il teste chaque private method séparément', 'is_correct' => false],
                            ['text' => 'Il dépend toujours d’un service de production', 'is_correct' => false],
                            ['text' => 'Il ne contient aucune assertion', 'is_correct' => false],
                        ],
                        'explanation' => 'Un integration test doit couvrir une frontière réelle tout en restant suffisamment ciblé pour diagnostiquer les problèmes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une regression test suite ?',
                        'choices' => [
                            ['text' => 'Une suite qui vérifie que des comportements précédemment valides restent corrects après des changements', 'is_correct' => true],
                            ['text' => 'Une suite uniquement exécutée avant le premier commit', 'is_correct' => false],
                            ['text' => 'Une suite de benchmarks GPU', 'is_correct' => false],
                            ['text' => 'Une suite qui ne teste que les erreurs de syntaxe', 'is_correct' => false],
                        ],
                        'explanation' => 'Les regression tests protègent les fonctionnalités existantes contre les effets secondaires des changements.',
                    ],
                    [
                        'question' => 'Pourquoi la testability doit-elle influencer l’architecture ?',
                        'choices' => [
                            ['text' => 'Une architecture testable rend les comportements observables et les dépendances remplaçables', 'is_correct' => true],
                            ['text' => 'Parce que les tests remplacent la production', 'is_correct' => false],
                            ['text' => 'Parce que chaque classe doit avoir dix tests', 'is_correct' => false],
                            ['text' => 'Parce que l’architecture ne doit jamais utiliser d’abstraction', 'is_correct' => false],
                        ],
                        'explanation' => 'La testability est facilitée par des frontières claires, des dépendances explicites et des composants avec des responsabilités maîtrisées.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’une quality gate dans CI/CD ?',
                        'choices' => [
                            ['text' => 'Empêcher la progression du pipeline lorsque des critères de qualité obligatoires ne sont pas satisfaits', 'is_correct' => true],
                            ['text' => 'Déployer sans validation', 'is_correct' => false],
                            ['text' => 'Remplacer le version control', 'is_correct' => false],
                            ['text' => 'Créer automatiquement les requirements', 'is_correct' => false],
                        ],
                        'explanation' => 'Une quality gate peut contrôler les tests, la static analysis, la sécurité ou d’autres critères avant une release.',
                    ],
                    [
                        'question' => 'Pourquoi les tests end-to-end ne doivent-ils généralement pas constituer la majorité des tests ?',
                        'choices' => [
                            ['text' => 'Ils sont souvent plus lents, plus coûteux et plus fragiles que les tests unitaires', 'is_correct' => true],
                            ['text' => 'Ils ne peuvent jamais détecter de bugs', 'is_correct' => false],
                            ['text' => 'Ils ne testent aucune fonctionnalité', 'is_correct' => false],
                            ['text' => 'Ils sont toujours plus simples à maintenir', 'is_correct' => false],
                        ],
                        'explanation' => 'Les end-to-end tests sont précieux mais leur coût et leur fragilité justifient généralement un nombre plus limité.',
                    ],
                ],
            ],
            [
                'title' => 'CI/CD & Release Engineering',
                'description' => 'Build automation, deployment strategies, versioning, rollback et release governance.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif d’un pipeline CI ?',
                        'choices' => [
                            ['text' => 'Valider automatiquement les changements intégrés au codebase avec des contrôles reproductibles', 'is_correct' => true],
                            ['text' => 'Déployer directement en production sans tests', 'is_correct' => false],
                            ['text' => 'Remplacer Git', 'is_correct' => false],
                            ['text' => 'Supprimer les code reviews', 'is_correct' => false],
                        ],
                        'explanation' => 'La Continuous Integration cherche à intégrer fréquemment les changements et à détecter rapidement les problèmes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une reproducible build ?',
                        'choices' => [
                            ['text' => 'Une build qui produit un résultat équivalent lorsque les mêmes inputs contrôlés sont utilisés', 'is_correct' => true],
                            ['text' => 'Une build exécutée uniquement sur un ordinateur', 'is_correct' => false],
                            ['text' => 'Une build sans dependencies', 'is_correct' => false],
                            ['text' => 'Une build sans version', 'is_correct' => false],
                        ],
                        'explanation' => 'La reproductibilité réduit les différences inattendues entre environnements et facilite l’audit des artifacts.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser un artifact repository ?',
                        'choices' => [
                            ['text' => 'Pour stocker et versionner les artifacts produits par les pipelines', 'is_correct' => true],
                            ['text' => 'Pour remplacer le source control', 'is_correct' => false],
                            ['text' => 'Pour héberger uniquement des passwords', 'is_correct' => false],
                            ['text' => 'Pour supprimer les builds', 'is_correct' => false],
                        ],
                        'explanation' => 'Un artifact repository permet de conserver et distribuer des packages et binaries versionnés.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un canary deployment ?',
                        'choices' => [
                            ['text' => 'Un déploiement exposé initialement à une petite portion du trafic avant généralisation', 'is_correct' => true],
                            ['text' => 'Un déploiement sans monitoring', 'is_correct' => false],
                            ['text' => 'Une migration uniquement locale', 'is_correct' => false],
                            ['text' => 'Un rollback automatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le canary deployment réduit le blast radius et permet d’observer la nouvelle version avant un rollout complet.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un rollback ?',
                        'choices' => [
                            ['text' => 'Revenir rapidement à une version stable lorsqu’une release introduit un problème critique', 'is_correct' => true],
                            ['text' => 'Ajouter des fonctionnalités', 'is_correct' => false],
                            ['text' => 'Supprimer les logs', 'is_correct' => false],
                            ['text' => 'Modifier les requirements', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rollback constitue un mécanisme de recovery après une release défaillante.',
                    ],
                    [
                        'question' => 'Pourquoi les deployment scripts doivent-ils être idempotents autant que possible ?',
                        'choices' => [
                            ['text' => 'Pour pouvoir être rejoués sans provoquer des changements incorrects ou cumulatifs', 'is_correct' => true],
                            ['text' => 'Pour empêcher tout deployment', 'is_correct' => false],
                            ['text' => 'Pour supprimer les migrations', 'is_correct' => false],
                            ['text' => 'Pour éviter les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'L’idempotence réduit les risques lorsqu’un pipeline doit être relancé après une interruption ou un échec.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un semantic versioning cohérent ?',
                        'choices' => [
                            ['text' => 'Communiquer de manière standardisée la nature des changements et leur compatibilité attendue', 'is_correct' => true],
                            ['text' => 'Garantir l’absence de bugs', 'is_correct' => false],
                            ['text' => 'Remplacer les tests', 'is_correct' => false],
                            ['text' => 'Empêcher les breaking changes', 'is_correct' => false],
                        ],
                        'explanation' => 'Semantic Versioning fournit une convention pour signaler les changements compatibles, les nouvelles fonctionnalités et les breaking changes.',
                    ],
                    [
                        'question' => 'Pourquoi les secrets ne doivent-ils pas être commités dans le repository ?',
                        'choices' => [
                            ['text' => 'Un repository peut être copié, exposé ou consulté par des personnes qui ne doivent pas connaître ces secrets', 'is_correct' => true],
                            ['text' => 'Git chiffre automatiquement tous les secrets', 'is_correct' => false],
                            ['text' => 'Les secrets ralentissent le compiler', 'is_correct' => false],
                            ['text' => 'Les secrets ne fonctionnent jamais en production', 'is_correct' => false],
                        ],
                        'explanation' => 'Les secrets doivent être gérés via un secret manager ou des mécanismes sécurisés adaptés à l’environnement.',
                    ],
                    [
                        'question' => 'Qu’est-ce que progressive delivery ?',
                        'choices' => [
                            ['text' => 'Déployer progressivement une modification tout en observant son impact et en conservant des mécanismes de contrôle', 'is_correct' => true],
                            ['text' => 'Déployer toutes les fonctionnalités simultanément', 'is_correct' => false],
                            ['text' => 'Désactiver le monitoring', 'is_correct' => false],
                            ['text' => 'Supprimer le rollback', 'is_correct' => false],
                        ],
                        'explanation' => 'Le progressive delivery combine rollout contrôlé, observability et capacité de recovery.',
                    ],
                    [
                        'question' => 'Pourquoi un pipeline CI/CD doit-il être observable ?',
                        'choices' => [
                            ['text' => 'Pour identifier rapidement les échecs, leurs causes et l’état de chaque étape', 'is_correct' => true],
                            ['text' => 'Pour éviter les logs', 'is_correct' => false],
                            ['text' => 'Pour rendre les builds aléatoires', 'is_correct' => false],
                            ['text' => 'Pour empêcher les notifications', 'is_correct' => false],
                        ],
                        'explanation' => 'L’observability du pipeline facilite le diagnostic et réduit le temps nécessaire pour restaurer un workflow de delivery.',
                    ],
                ],
            ],
            [
                'title' => 'Performance & Scalability Engineering',
                'description' => 'Performance profiling, caching, concurrency, scalability et optimisation fondée sur les mesures.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Pourquoi faut-il profiler avant d’optimiser une application ?',
                        'choices' => [
                            ['text' => 'Pour identifier les vrais bottlenecks au lieu d’optimiser selon des suppositions', 'is_correct' => true],
                            ['text' => 'Pour augmenter automatiquement la complexité', 'is_correct' => false],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour éviter toute mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'Le profiling permet de concentrer l’effort d’optimisation sur les parties qui ont réellement un impact.',
                    ],
                    [
                        'question' => 'Quel est le principal danger d’une optimisation prématurée ?',
                        'choices' => [
                            ['text' => 'Elle peut augmenter la complexité sans résoudre un problème mesuré', 'is_correct' => true],
                            ['text' => 'Elle garantit toujours de meilleures performances', 'is_correct' => false],
                            ['text' => 'Elle supprime les dependencies', 'is_correct' => false],
                            ['text' => 'Elle rend le code plus simple', 'is_correct' => false],
                        ],
                        'explanation' => 'Une optimisation non guidée par des mesures peut produire une architecture plus complexe sans gain significatif.',
                    ],
                    [
                        'question' => 'Quel est le but principal d’un cache ?',
                        'choices' => [
                            ['text' => 'Réduire le coût ou la latence d’accès à une donnée réutilisée', 'is_correct' => true],
                            ['text' => 'Garantir que les données sont toujours à jour', 'is_correct' => false],
                            ['text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['text' => 'Supprimer la persistence', 'is_correct' => false],
                        ],
                        'explanation' => 'Le caching peut réduire les accès coûteux, mais il introduit des problèmes de staleness et d’invalidation.',
                    ],
                    [
                        'question' => 'Pourquoi l’invalidation de cache est-elle difficile ?',
                        'choices' => [
                            ['text' => 'Parce qu’il faut déterminer quand une donnée mise en cache n’est plus valide', 'is_correct' => true],
                            ['text' => 'Parce qu’un cache ne peut jamais expirer', 'is_correct' => false],
                            ['text' => 'Parce qu’un cache ne contient aucune donnée', 'is_correct' => false],
                            ['text' => 'Parce que les caches ne peuvent pas être distribués', 'is_correct' => false],
                        ],
                        'explanation' => 'La cache invalidation nécessite de définir correctement la durée de validité et les événements qui rendent les données obsolètes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bottleneck ?',
                        'choices' => [
                            ['text' => 'Une ressource ou étape qui limite la performance globale du système', 'is_correct' => true],
                            ['text' => 'Une fonctionnalité UI', 'is_correct' => false],
                            ['text' => 'Une base de données vide', 'is_correct' => false],
                            ['text' => 'Un type de test', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bottleneck limite le débit ou augmente la latence du système et doit être identifié avant une optimisation ciblée.',
                    ],
                    [
                        'question' => 'Pourquoi la contention peut-elle réduire les performances concurrentes ?',
                        'choices' => [
                            ['text' => 'Plusieurs workers se disputent une ressource partagée limitée', 'is_correct' => true],
                            ['text' => 'Elle garantit toujours un parallélisme parfait', 'is_correct' => false],
                            ['text' => 'Elle supprime les locks', 'is_correct' => false],
                            ['text' => 'Elle élimine les shared resources', 'is_correct' => false],
                        ],
                        'explanation' => 'La contention augmente l’attente et peut annuler une partie des bénéfices de la concurrence.',
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre throughput et latency ?',
                        'choices' => [
                            ['text' => 'Le throughput mesure une quantité de travail par unité de temps, tandis que la latency mesure le temps nécessaire à une opération', 'is_correct' => true],
                            ['text' => 'Ils mesurent exactement la même chose', 'is_correct' => false],
                            ['text' => 'La latency mesure uniquement la mémoire', 'is_correct' => false],
                            ['text' => 'Le throughput mesure uniquement le CPU', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces métriques sont complémentaires : un système peut avoir un bon throughput tout en présentant une latency élevée.',
                    ],
                    [
                        'question' => 'Pourquoi la backpressure est-elle importante dans un système asynchrone ?',
                        'choices' => [
                            ['text' => 'Elle évite qu’un producer génère du travail plus vite que les consumers ne peuvent le traiter', 'is_correct' => true],
                            ['text' => 'Elle augmente toujours la mémoire', 'is_correct' => false],
                            ['text' => 'Elle supprime les queues', 'is_correct' => false],
                            ['text' => 'Elle interdit la concurrence', 'is_correct' => false],
                        ],
                        'explanation' => 'La backpressure protège les consumers et les ressources contre une accumulation incontrôlée de travail.',
                    ],
                    [
                        'question' => 'Quel est le principal avantage du horizontal scaling ?',
                        'choices' => [
                            ['text' => 'Ajouter plusieurs instances pour augmenter la capacité globale du système', 'is_correct' => true],
                            ['text' => 'Augmenter uniquement la RAM d’une machine', 'is_correct' => false],
                            ['text' => 'Supprimer les load balancers', 'is_correct' => false],
                            ['text' => 'Rendre le système single-threaded', 'is_correct' => false],
                        ],
                        'explanation' => 'Le horizontal scaling augmente la capacité en ajoutant des instances et peut améliorer la résilience lorsqu’il est correctement conçu.',
                    ],
                    [
                        'question' => 'Pourquoi une performance target doit-elle être mesurable ?',
                        'choices' => [
                            ['text' => 'Pour permettre de comparer objectivement les résultats et de détecter les regressions', 'is_correct' => true],
                            ['text' => 'Pour empêcher tout profiling', 'is_correct' => false],
                            ['text' => 'Pour éviter les benchmarks', 'is_correct' => false],
                            ['text' => 'Pour rendre les requirements vagues', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cible mesurable permet de vérifier si une optimisation ou une release respecte les objectifs définis.',
                    ],
                ],
            ],
            [
                'title' => 'Security Engineering',
                'description' => 'Secure software design, threat modeling, authentication, authorization et supply-chain security.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif du threat modeling ?',
                        'choices' => [
                            ['text' => 'Identifier les assets, menaces, attack surfaces et mitigations avant ou pendant la conception', 'is_correct' => true],
                            ['text' => 'Créer uniquement des passwords', 'is_correct' => false],
                            ['text' => 'Remplacer les tests', 'is_correct' => false],
                            ['text' => 'Configurer l’UI', 'is_correct' => false],
                        ],
                        'explanation' => 'Le threat modeling structure l’analyse des risques et aide à choisir des mitigations adaptées.',
                    ],
                    [
                        'question' => 'Pourquoi le client ne doit-il pas être considéré comme une trusted security boundary ?',
                        'choices' => [
                            ['text' => 'Un utilisateur peut modifier le client ou contourner sa logique', 'is_correct' => true],
                            ['text' => 'Le client ne peut jamais exécuter de code', 'is_correct' => false],
                            ['text' => 'Le client est toujours chiffré', 'is_correct' => false],
                            ['text' => 'Le client est impossible à analyser', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute décision de sécurité critique doit être vérifiée côté serveur ou dans une boundary réellement fiable.',
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre authentication et authorization ?',
                        'choices' => [
                            ['text' => 'Authentication vérifie l’identité, tandis qu’authorization détermine les permissions', 'is_correct' => true],
                            ['text' => 'Authentication détermine les permissions et authorization vérifie l’identité', 'is_correct' => false],
                            ['text' => 'Elles sont strictement identiques', 'is_correct' => false],
                            ['text' => 'Authorization remplace le chiffrement', 'is_correct' => false],
                        ],
                        'explanation' => 'Authentication répond à « qui êtes-vous ? », tandis qu’authorization répond à « que pouvez-vous faire ? ».',
                    ],
                    [
                        'question' => 'Pourquoi le principle of least privilege est-il important ?',
                        'choices' => [
                            ['text' => 'Il limite les permissions aux besoins réels afin de réduire l’impact d’une compromission', 'is_correct' => true],
                            ['text' => 'Il donne tous les droits aux utilisateurs', 'is_correct' => false],
                            ['text' => 'Il supprime l’authentication', 'is_correct' => false],
                            ['text' => 'Il empêche les audits', 'is_correct' => false],
                        ],
                        'explanation' => 'Moins de privilèges inutiles signifie généralement une blast radius plus faible en cas de compromission.',
                    ],
                    [
                        'question' => 'Qu’est-ce que defense in depth ?',
                        'choices' => [
                            ['text' => 'Utiliser plusieurs contrôles de sécurité indépendants afin qu’un échec isolé ne compromette pas tout le système', 'is_correct' => true],
                            ['text' => 'Utiliser un seul password complexe', 'is_correct' => false],
                            ['text' => 'Supprimer les logs', 'is_correct' => false],
                            ['text' => 'Désactiver les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Defense in depth combine plusieurs couches comme authentication, authorization, encryption, validation et monitoring.',
                    ],
                    [
                        'question' => 'Pourquoi les secrets doivent-ils avoir une durée de vie limitée lorsque possible ?',
                        'choices' => [
                            ['text' => 'Cela réduit la fenêtre d’exploitation d’un secret compromis', 'is_correct' => true],
                            ['text' => 'Cela rend les secrets publics', 'is_correct' => false],
                            ['text' => 'Cela supprime les rotations', 'is_correct' => false],
                            ['text' => 'Cela empêche toute authentication', 'is_correct' => false],
                        ],
                        'explanation' => 'Un secret à durée de vie limitée réduit le temps pendant lequel un attaquant peut l’utiliser.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un password hashing algorithm moderne ?',
                        'choices' => [
                            ['text' => 'Stocker une représentation difficile à inverser d’un password avec un mécanisme adapté au password hashing', 'is_correct' => true],
                            ['text' => 'Chiffrer toutes les bases de données', 'is_correct' => false],
                            ['text' => 'Générer des tokens JWT', 'is_correct' => false],
                            ['text' => 'Compresser les passwords', 'is_correct' => false],
                        ],
                        'explanation' => 'Un password hashing algorithm comme Argon2 est conçu pour rendre les attaques par brute force plus coûteuses.',
                    ],
                    [
                        'question' => 'Pourquoi les dependencies sont-elles une partie importante de la supply-chain security ?',
                        'choices' => [
                            ['text' => 'Une dependency compromise peut introduire du code malveillant dans l’application', 'is_correct' => true],
                            ['text' => 'Les dependencies ne peuvent jamais contenir de vulnérabilités', 'is_correct' => false],
                            ['text' => 'Les dependencies sont toujours auditées', 'is_correct' => false],
                            ['text' => 'Elles remplacent le compiler', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaîne logicielle inclut les packages et outils utilisés pour construire le produit ; ils constituent donc une surface de risque.',
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de input validation côté serveur ?',
                        'choices' => [
                            ['text' => 'Empêcher des données invalides ou malicieuses d’atteindre des opérations sensibles', 'is_correct' => true],
                            ['text' => 'Améliorer uniquement le rendu UI', 'is_correct' => false],
                            ['text' => 'Remplacer authorization', 'is_correct' => false],
                            ['text' => 'Supprimer les database constraints', 'is_correct' => false],
                        ],
                        'explanation' => 'La validation côté serveur protège la boundary de confiance même lorsque le client est contourné.',
                    ],
                    [
                        'question' => 'Pourquoi les security logs doivent-ils être protégés contre la modification non autorisée ?',
                        'choices' => [
                            ['text' => 'Parce qu’ils peuvent être nécessaires pour détecter, comprendre et auditer un incident', 'is_correct' => true],
                            ['text' => 'Parce que les logs ne servent jamais après un incident', 'is_correct' => false],
                            ['text' => 'Pour réduire la sécurité', 'is_correct' => false],
                            ['text' => 'Pour empêcher tout monitoring', 'is_correct' => false],
                        ],
                        'explanation' => 'Des logs fiables sont essentiels à l’investigation et à l’audit ; leur intégrité doit donc être protégée.',
                    ],
                ],
            ],
            [
                'title' => 'Reliability, Observability & Maintenance',
                'description' => 'Production reliability, observability, incident response, technical debt et long-term maintainability.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quels sont les trois piliers classiques de l’observability ?',
                        'choices' => [
                            ['text' => 'Logs, metrics et traces', 'is_correct' => true],
                            ['text' => 'Controllers, models et views', 'is_correct' => false],
                            ['text' => 'Git, Docker et SQL', 'is_correct' => false],
                            ['text' => 'CPU, RAM et disk', 'is_correct' => false],
                        ],
                        'explanation' => 'Logs, metrics et distributed traces fournissent des perspectives complémentaires sur le comportement d’un système.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un SLO ?',
                        'choices' => [
                            ['text' => 'Un objectif mesurable de fiabilité ou de performance d’un service', 'is_correct' => true],
                            ['text' => 'Un type de database', 'is_correct' => false],
                            ['text' => 'Un design pattern', 'is_correct' => false],
                            ['text' => 'Un outil de compilation', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Service Level Objective définit une cible mesurable, par exemple une disponibilité ou une latency maximale.',
                    ],
                    [
                        'question' => 'À quoi sert un error budget ?',
                        'choices' => [
                            ['text' => 'À équilibrer la fiabilité attendue avec la capacité à livrer des changements', 'is_correct' => true],
                            ['text' => 'À garantir zéro incident', 'is_correct' => false],
                            ['text' => 'À supprimer le monitoring', 'is_correct' => false],
                            ['text' => 'À remplacer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'L’error budget traduit la tolérance aux erreurs en une contrainte opérationnelle qui aide à arbitrer reliability et release velocity.',
                    ],
                    [
                        'question' => 'Pourquoi les alertes doivent-elles être orientées vers des symptômes importants ?',
                        'choices' => [
                            ['text' => 'Pour réduire le bruit et permettre une réaction rapide aux problèmes qui affectent réellement les utilisateurs', 'is_correct' => true],
                            ['text' => 'Pour maximiser le nombre d’alertes', 'is_correct' => false],
                            ['text' => 'Pour supprimer les metrics', 'is_correct' => false],
                            ['text' => 'Pour empêcher les incidents', 'is_correct' => false],
                        ],
                        'explanation' => 'Des alertes trop nombreuses ou trop sensibles créent de l’alert fatigue et diminuent la capacité de réaction.',
                    ],
                    [
                        'question' => 'Qu’est-ce que MTTR ?',
                        'choices' => [
                            ['text' => 'Mean Time To Recovery ou durée moyenne nécessaire pour restaurer le service', 'is_correct' => true],
                            ['text' => 'Maximum Test Throughput Rate', 'is_correct' => false],
                            ['text' => 'Memory Transfer Technical Ratio', 'is_correct' => false],
                            ['text' => 'Mobile Test Timing Rule', 'is_correct' => false],
                        ],
                        'explanation' => 'MTTR mesure le temps moyen nécessaire pour rétablir le service après un incident.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un postmortem sans blame ?',
                        'choices' => [
                            ['text' => 'Comprendre les causes systémiques et améliorer les mécanismes afin d’éviter la répétition des incidents', 'is_correct' => true],
                            ['text' => 'Identifier uniquement une personne responsable', 'is_correct' => false],
                            ['text' => 'Supprimer les logs d’incident', 'is_correct' => false],
                            ['text' => 'Éviter toute action corrective', 'is_correct' => false],
                        ],
                        'explanation' => 'Un blameless postmortem cherche à apprendre de l’incident et à améliorer le système plutôt qu’à punir un individu.',
                    ],
                    [
                        'question' => 'Pourquoi la technical debt doit-elle être suivie explicitement ?',
                        'choices' => [
                            ['text' => 'Elle peut augmenter progressivement le coût des changements et réduire la capacité d’évolution', 'is_correct' => true],
                            ['text' => 'Elle disparaît automatiquement avec le temps', 'is_correct' => false],
                            ['text' => 'Elle garantit une meilleure architecture', 'is_correct' => false],
                            ['text' => 'Elle ne concerne que les databases', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dette technique non maîtrisée peut ralentir les changements, augmenter les risques et rendre la maintenance plus coûteuse.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un runbook ?',
                        'choices' => [
                            ['text' => 'Un document opérationnel décrivant les procédures à suivre pour des tâches ou incidents connus', 'is_correct' => true],
                            ['text' => 'Un fichier contenant uniquement du source code', 'is_correct' => false],
                            ['text' => 'Une database migration', 'is_correct' => false],
                            ['text' => 'Un design pattern', 'is_correct' => false],
                        ],
                        'explanation' => 'Un runbook transforme les connaissances opérationnelles en procédures reproductibles pour les équipes.',
                    ],
                    [
                        'question' => 'Pourquoi les dependency upgrades régulières sont-elles importantes ?',
                        'choices' => [
                            ['text' => 'Elles permettent de traiter plus tôt les vulnérabilités, incompatibilités et coûts de migration', 'is_correct' => true],
                            ['text' => 'Elles empêchent tout changement de code', 'is_correct' => false],
                            ['text' => 'Elles garantissent zéro bug', 'is_correct' => false],
                            ['text' => 'Elles suppriment les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Des upgrades régulières évitent de laisser les dependencies devenir trop anciennes et difficiles à migrer.',
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement utile pour détecter une régression de latency en production ?',
                        'choices' => [
                            ['text' => 'Un metric de latency segmenté par endpoint ou opération', 'is_correct' => true],
                            ['text' => 'Le nombre de lignes de code', 'is_correct' => false],
                            ['text' => 'La taille du repository', 'is_correct' => false],
                            ['text' => 'Le nombre de fichiers CSS', 'is_correct' => false],
                        ],
                        'explanation' => 'Une metric de latency suffisamment détaillée permet d’identifier les opérations qui se dégradent et d’en suivre l’évolution.',
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

                $choices = $questionData['choices'];

                // Shuffle the complete choice records so the is_correct flag
                // remains attached to the correct answer.
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