<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SoftwareEngineeringIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'computer-science-it')->firstOrFail();

        $subject = $major->subjects()
            ->where('slug', 'software-engineering')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Architecture et Design',
                'description' => 'Intermediate architecture, modularité et design.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel principe favorise des modules avec une forte cohésion et un faible couplage ?',
                        'choices' => [
                            ['text' => 'Regrouper les responsabilités liées et limiter les dépendances entre modules', 'is_correct' => true],
                            ['text' => 'Centraliser toute la logique dans une seule classe', 'is_correct' => false],
                            ['text' => 'Multiplier les dépendances globales', 'is_correct' => false],
                            ['text' => 'Coupler tous les modules à la database', 'is_correct' => false],
                        ],
                        'explanation' => 'La forte cohésion et le faible couplage rendent les modules plus compréhensibles et limitent l’impact des changements.',
                    ],
                    [
                        'question' => 'Pourquoi l’Dependency Injection améliore-t-elle souvent la testability ?',
                        'choices' => [
                            ['text' => 'Elle permet de fournir des dépendances remplaçables, notamment par des test doubles', 'is_correct' => true],
                            ['text' => 'Elle supprime toutes les dépendances', 'is_correct' => false],
                            ['text' => 'Elle interdit les interfaces', 'is_correct' => false],
                            ['text' => 'Elle force l’utilisation d’un Singleton', 'is_correct' => false],
                        ],
                        'explanation' => 'L’injection explicite permet de remplacer une dépendance réelle par une implémentation adaptée au test.',
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’une architecture modulaire ?',
                        'choices' => [
                            ['text' => 'Délimiter les responsabilités et réduire les effets de bord entre parties du système', 'is_correct' => true],
                            ['text' => 'Mettre toute la logique dans un controller', 'is_correct' => false],
                            ['text' => 'Éviter toute abstraction', 'is_correct' => false],
                            ['text' => 'Supprimer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Une architecture modulaire crée des frontières qui rendent le changement et la maintenance plus maîtrisables.',
                    ],
                    [
                        'question' => 'Quel risque est associé à un God Object ?',
                        'choices' => [
                            ['text' => 'Une concentration excessive de responsabilités et un couplage élevé', 'is_correct' => true],
                            ['text' => 'Une meilleure séparation des responsabilités', 'is_correct' => false],
                            ['text' => 'Une isolation parfaite', 'is_correct' => false],
                            ['text' => 'Une réduction automatique de la dette technique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un God Object devient difficile à tester et modifier parce qu’il connaît et gère trop de responsabilités.',
                    ],
                    [
                        'question' => 'Pourquoi l’architecture doit-elle évoluer avec les connaissances du domaine ?',
                        'choices' => [
                            ['text' => 'Les premières hypothèses peuvent être incomplètes ou incorrectes', 'is_correct' => true],
                            ['text' => 'Une architecture ne doit jamais changer', 'is_correct' => false],
                            ['text' => 'Les requirements sont toujours parfaits', 'is_correct' => false],
                            ['text' => 'Les tests empêchent toute évolution', 'is_correct' => false],
                        ],
                        'explanation' => 'Les décisions architecturales doivent être réévaluées lorsque les contraintes et connaissances changent.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un ADR ?',
                        'choices' => [
                            ['text' => 'Documenter le contexte, la décision et les conséquences d’un choix architectural', 'is_correct' => true],
                            ['text' => 'Stocker les passwords', 'is_correct' => false],
                            ['text' => 'Exécuter les tests', 'is_correct' => false],
                            ['text' => 'Remplacer Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Architecture Decision Record conserve la raison d’une décision et facilite sa compréhension future.',
                    ],
                    [
                        'question' => 'Quel principe SOLID favorise l’extension sans modification excessive du code existant ?',
                        'choices' => [
                            ['text' => 'Open/Closed Principle', 'is_correct' => true],
                            ['text' => 'Single Responsibility Principle', 'is_correct' => false],
                            ['text' => 'Liskov Substitution Principle', 'is_correct' => false],
                            ['text' => 'Interface Segregation Principle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Open/Closed Principle encourage des structures extensibles sans modifier constamment leur code stable.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’une interface dans un design découplé ?',
                        'choices' => [
                            ['text' => 'Définir un contrat abstrait permettant plusieurs implémentations', 'is_correct' => true],
                            ['text' => 'Créer automatiquement une database', 'is_correct' => false],
                            ['text' => 'Remplacer les tests', 'is_correct' => false],
                            ['text' => 'Garantir une seule implémentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une interface peut fournir un contrat stable derrière lequel plusieurs implémentations peuvent évoluer.',
                    ],
                    [
                        'question' => 'Quand une abstraction devient-elle suspecte ?',
                        'choices' => [
                            ['text' => 'Lorsqu’elle n’exprime aucune variation ou frontière réelle et ajoute surtout de l’indirection', 'is_correct' => true],
                            ['text' => 'Lorsqu’elle est utilisée dans un test', 'is_correct' => false],
                            ['text' => 'Lorsqu’elle possède une méthode', 'is_correct' => false],
                            ['text' => 'Lorsqu’elle est documentée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une abstraction sans besoin réel peut augmenter la complexité sans bénéfice architectural.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un boundary dans une architecture ?',
                        'choices' => [
                            ['text' => 'Contrôler les dépendances et clarifier les responsabilités entre parties du système', 'is_correct' => true],
                            ['text' => 'Empêcher toute communication', 'is_correct' => false],
                            ['text' => 'Créer uniquement des classes abstraites', 'is_correct' => false],
                            ['text' => 'Supprimer les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les boundaries structurent les dépendances et empêchent la logique de se propager sans contrôle.',
                    ],
                ],
            ],
            [
                'title' => 'Design Patterns',
                'description' => 'Intermediate design patterns et leurs trade-offs.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel pattern encapsule des algorithmes interchangeables ?',
                        'choices' => [
                            ['text' => 'Strategy', 'is_correct' => true],
                            ['text' => 'Singleton', 'is_correct' => false],
                            ['text' => 'Adapter', 'is_correct' => false],
                            ['text' => 'Composite', 'is_correct' => false],
                        ],
                        'explanation' => 'Strategy encapsule des variantes d’un algorithme derrière une abstraction commune.',
                    ],
                    [
                        'question' => 'Quel pattern convertit une interface vers une autre attendue par le client ?',
                        'choices' => [
                            ['text' => 'Adapter', 'is_correct' => true],
                            ['text' => 'Observer', 'is_correct' => false],
                            ['text' => 'Command', 'is_correct' => false],
                            ['text' => 'Builder', 'is_correct' => false],
                        ],
                        'explanation' => 'Adapter traduit une interface existante vers l’interface attendue.',
                    ],
                    [
                        'question' => 'Quel pattern permet d’ajouter dynamiquement des responsabilités à un objet ?',
                        'choices' => [
                            ['text' => 'Decorator', 'is_correct' => true],
                            ['text' => 'Factory', 'is_correct' => false],
                            ['text' => 'Composite', 'is_correct' => false],
                            ['text' => 'Mediator', 'is_correct' => false],
                        ],
                        'explanation' => 'Decorator compose des comportements autour d’un objet sans modifier sa classe.',
                    ],
                    [
                        'question' => 'Quel pattern transforme une action en objet ?',
                        'choices' => [
                            ['text' => 'Command', 'is_correct' => true],
                            ['text' => 'Observer', 'is_correct' => false],
                            ['text' => 'Proxy', 'is_correct' => false],
                            ['text' => 'Adapter', 'is_correct' => false],
                        ],
                        'explanation' => 'Command encapsule une opération et permet notamment queueing, logging ou retry.',
                    ],
                    [
                        'question' => 'Quel problème peut poser un Singleton global ?',
                        'choices' => [
                            ['text' => 'État partagé et dépendances implicites difficiles à tester', 'is_correct' => true],
                            ['text' => 'Une absence totale de state', 'is_correct' => false],
                            ['text' => 'Une meilleure isolation', 'is_correct' => false],
                            ['text' => 'Une impossibilité de créer des objets', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Singleton global peut agir comme un global state et compliquer le testing.',
                    ],
                    [
                        'question' => 'Quel pattern est adapté à une structure arborescente traitée uniformément ?',
                        'choices' => [
                            ['text' => 'Composite', 'is_correct' => true],
                            ['text' => 'Strategy', 'is_correct' => false],
                            ['text' => 'Command', 'is_correct' => false],
                            ['text' => 'Observer', 'is_correct' => false],
                        ],
                        'explanation' => 'Composite permet de traiter leaves et composites via une interface commune.',
                    ],
                    [
                        'question' => 'Pourquoi choisir un pattern doit-il dépendre du problème ?',
                        'choices' => [
                            ['text' => 'Un pattern ajoute une structure et doit donc résoudre un besoin réel', 'is_correct' => true],
                            ['text' => 'Tous les patterns doivent être utilisés', 'is_correct' => false],
                            ['text' => 'Un pattern réduit toujours le code', 'is_correct' => false],
                            ['text' => 'Les patterns remplacent les requirements', 'is_correct' => false],
                        ],
                        'explanation' => 'Les patterns sont des outils ; leur utilisation sans besoin réel peut produire de l’overengineering.',
                    ],
                    [
                        'question' => 'Quel pattern facilite la création d’objets complexes étape par étape ?',
                        'choices' => [
                            ['text' => 'Builder', 'is_correct' => true],
                            ['text' => 'Observer', 'is_correct' => false],
                            ['text' => 'Adapter', 'is_correct' => false],
                            ['text' => 'Proxy', 'is_correct' => false],
                        ],
                        'explanation' => 'Builder sépare la construction progressive d’un objet complexe de sa représentation finale.',
                    ],
                    [
                        'question' => 'Quel est le risque d’un Observer network trop complexe ?',
                        'choices' => [
                            ['text' => 'Des notifications difficiles à tracer et des problèmes de lifecycle', 'is_correct' => true],
                            ['text' => 'Une absence totale d’événements', 'is_correct' => false],
                            ['text' => 'Une compilation impossible', 'is_correct' => false],
                            ['text' => 'Une meilleure isolation automatique', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux observers peuvent créer des dépendances implicites et des chaînes d’effets difficiles à diagnostiquer.',
                    ],
                    [
                        'question' => 'Quel est un bon critère pour évaluer un pattern ?',
                        'choices' => [
                            ['text' => 'Le bénéfice obtenu par rapport à la complexité ajoutée', 'is_correct' => true],
                            ['text' => 'Le nombre de classes créé', 'is_correct' => false],
                            ['text' => 'Le nombre d’interfaces uniquement', 'is_correct' => false],
                            ['text' => 'La longueur du code', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pattern est pertinent lorsque sa structure apporte un bénéfice supérieur à son coût de complexité.',
                    ],
                ],
            ],
            [
                'title' => 'Testing Strategy',
                'description' => 'Intermediate testing strategy, automation et quality.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif du mutation testing ?',
                        'choices' => [
                            ['text' => 'Mesurer la capacité des tests à détecter des modifications artificielles', 'is_correct' => true],
                            ['text' => 'Mesurer uniquement la performance CPU', 'is_correct' => false],
                            ['text' => 'Créer des fixtures', 'is_correct' => false],
                            ['text' => 'Remplacer les unit tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Mutation testing évalue la force réelle d’une suite de tests.',
                    ],
                    [
                        'question' => 'Pourquoi un flaky test est-il problématique ?',
                        'choices' => [
                            ['text' => 'Il produit des résultats non déterministes et réduit la confiance dans la CI', 'is_correct' => true],
                            ['text' => 'Il augmente toujours la coverage', 'is_correct' => false],
                            ['text' => 'Il améliore la fiabilité', 'is_correct' => false],
                            ['text' => 'Il remplace les integration tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Les flaky tests créent du bruit et peuvent faire ignorer des échecs réels.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un contract test ?',
                        'choices' => [
                            ['text' => 'Vérifier qu’un consumer et un provider respectent un contrat partagé', 'is_correct' => true],
                            ['text' => 'Tester uniquement le frontend', 'is_correct' => false],
                            ['text' => 'Mesurer le CPU', 'is_correct' => false],
                            ['text' => 'Remplacer les unit tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contract tests sécurisent les interactions entre composants ou services.',
                    ],
                    [
                        'question' => 'Pourquoi éviter le mocking excessif ?',
                        'choices' => [
                            ['text' => 'Les tests peuvent devenir couplés à l’implémentation plutôt qu’au comportement', 'is_correct' => true],
                            ['text' => 'Les mocks sont toujours impossibles', 'is_correct' => false],
                            ['text' => 'Les tests deviennent toujours plus rapides', 'is_correct' => false],
                            ['text' => 'Les assertions disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'Un test trop dépendant des détails internes peut rester vert alors que le comportement réel est incorrect.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un test pyramid ?',
                        'choices' => [
                            ['text' => 'Une stratégie donnant généralement plus de tests rapides et ciblés que de tests end-to-end coûteux', 'is_correct' => true],
                            ['text' => 'Un type de database', 'is_correct' => false],
                            ['text' => 'Un design pattern', 'is_correct' => false],
                            ['text' => 'Une architecture réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'La test pyramid recommande un volume important de tests unitaires, moins d’intégration et encore moins d’end-to-end.',
                    ],
                    [
                        'question' => 'Pourquoi les tests de performance doivent-ils utiliser des scénarios réalistes ?',
                        'choices' => [
                            ['text' => 'Pour que les mesures représentent mieux les conditions d’utilisation attendues', 'is_correct' => true],
                            ['text' => 'Pour éviter toute metric', 'is_correct' => false],
                            ['text' => 'Pour supprimer les tests fonctionnels', 'is_correct' => false],
                            ['text' => 'Pour empêcher les benchmarks', 'is_correct' => false],
                        ],
                        'explanation' => 'Des workloads réalistes rendent les résultats de performance plus représentatifs.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une quality gate ?',
                        'choices' => [
                            ['text' => 'Bloquer une progression lorsque des critères obligatoires de qualité ne sont pas respectés', 'is_correct' => true],
                            ['text' => 'Déployer sans tests', 'is_correct' => false],
                            ['text' => 'Supprimer CI', 'is_correct' => false],
                            ['text' => 'Éviter les code reviews', 'is_correct' => false],
                        ],
                        'explanation' => 'Une quality gate impose des critères avant une étape du pipeline.',
                    ],
                    [
                        'question' => 'Pourquoi tester les failure paths ?',
                        'choices' => [
                            ['text' => 'Les systèmes doivent aussi avoir un comportement correct lorsque des dépendances ou entrées échouent', 'is_correct' => true],
                            ['text' => 'Les erreurs ne se produisent jamais', 'is_correct' => false],
                            ['text' => 'Les tests ne doivent couvrir que le happy path', 'is_correct' => false],
                            ['text' => 'Les failures sont toujours gérées par l’OS', 'is_correct' => false],
                        ],
                        'explanation' => 'Les failure paths représentent une partie importante de la fiabilité réelle d’un système.',
                    ],
                    [
                        'question' => 'Quelle métrique ne suffit pas à elle seule pour juger la qualité des tests ?',
                        'choices' => [
                            ['text' => 'Code coverage', 'is_correct' => true],
                            ['text' => 'Nombre de développeurs', 'is_correct' => false],
                            ['text' => 'Temps de compilation', 'is_correct' => false],
                            ['text' => 'Taille du repository', 'is_correct' => false],
                        ],
                        'explanation' => 'Une coverage élevée ne garantit pas que les assertions détectent réellement les défauts.',
                    ],
                    [
                        'question' => 'Pourquoi les tests doivent-ils être maintenus comme du production code ?',
                        'choices' => [
                            ['text' => 'Une suite de tests complexe ou fragile peut devenir un obstacle aux changements', 'is_correct' => true],
                            ['text' => 'Les tests n’ont aucune valeur après écriture', 'is_correct' => false],
                            ['text' => 'Les tests sont toujours temporaires', 'is_correct' => false],
                            ['text' => 'Les tests ne peuvent pas contenir de bugs', 'is_correct' => false],
                        ],
                        'explanation' => 'La suite de tests est une partie durable du système et doit rester lisible, fiable et maintenable.',
                    ],
                ],
            ],
            [
                'title' => 'Requirements Engineering',
                'description' => 'Intermediate requirements, validation et gestion du changement.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle différence existe entre functional et non-functional requirement ?',
                        'choices' => [
                            ['text' => 'Le functional décrit ce que le système fait, le non-functional décrit notamment des qualités ou contraintes', 'is_correct' => true],
                            ['text' => 'Ils sont identiques', 'is_correct' => false],
                            ['text' => 'Le non-functional décrit uniquement les users', 'is_correct' => false],
                            ['text' => 'Le functional décrit uniquement la performance', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux types sont complémentaires : comportement fonctionnel et qualités/contraintes du système.',
                    ],
                    [
                        'question' => 'Pourquoi les acceptance criteria sont-ils importants ?',
                        'choices' => [
                            ['text' => 'Ils rendent le résultat attendu vérifiable', 'is_correct' => true],
                            ['text' => 'Ils remplacent les requirements', 'is_correct' => false],
                            ['text' => 'Ils remplacent les tests unitaires', 'is_correct' => false],
                            ['text' => 'Ils empêchent tout changement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les acceptance criteria donnent des conditions concrètes permettant de valider une fonctionnalité.',
                    ],
                    [
                        'question' => 'Qu’est-ce que requirement traceability ?',
                        'choices' => [
                            ['text' => 'La capacité à relier requirements, implémentation et tests', 'is_correct' => true],
                            ['text' => 'Un type de cache', 'is_correct' => false],
                            ['text' => 'Un design pattern', 'is_correct' => false],
                            ['text' => 'Une stratégie Git', 'is_correct' => false],
                        ],
                        'explanation' => 'La traceability aide à vérifier que les besoins sont couverts par la solution et les validations.',
                    ],
                    [
                        'question' => 'Pourquoi gérer le changement des requirements ?',
                        'choices' => [
                            ['text' => 'Parce que les besoins et contraintes peuvent évoluer pendant le projet', 'is_correct' => true],
                            ['text' => 'Parce qu’un requirement ne change jamais', 'is_correct' => false],
                            ['text' => 'Pour supprimer les stakeholders', 'is_correct' => false],
                            ['text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Le changement est normal ; il doit être évalué et géré pour limiter les impacts inattendus.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ambiguity dans un requirement ?',
                        'choices' => [
                            ['text' => 'Une formulation pouvant raisonnablement être interprétée de plusieurs façons', 'is_correct' => true],
                            ['text' => 'Une erreur de syntaxe PHP', 'is_correct' => false],
                            ['text' => 'Un test flaky', 'is_correct' => false],
                            ['text' => 'Un bug de réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ambiguïté peut provoquer des implémentations différentes et des désaccords sur l’acceptation.',
                    ],
                    [
                        'question' => 'Pourquoi prioriser les requirements selon le risque et la valeur ?',
                        'choices' => [
                            ['text' => 'Pour traiter en premier les éléments ayant le plus d’impact sur le produit', 'is_correct' => true],
                            ['text' => 'Pour éviter toute discussion', 'is_correct' => false],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour rendre tout requirement obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La priorisation aide à maximiser la valeur et à réduire les risques importants tôt.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un acceptance test ?',
                        'choices' => [
                            ['text' => 'Un test qui vérifie qu’une fonctionnalité satisfait les critères métier attendus', 'is_correct' => true],
                            ['text' => 'Un test de syntaxe', 'is_correct' => false],
                            ['text' => 'Un test du compiler', 'is_correct' => false],
                            ['text' => 'Un commit', 'is_correct' => false],
                        ],
                        'explanation' => 'Un acceptance test valide le comportement attendu du point de vue du besoin.',
                    ],
                    [
                        'question' => 'Pourquoi impliquer les domain experts ?',
                        'choices' => [
                            ['text' => 'Ils apportent une connaissance métier nécessaire pour éviter des modèles ou règles incorrects', 'is_correct' => true],
                            ['text' => 'Ils remplacent les développeurs', 'is_correct' => false],
                            ['text' => 'Ils écrivent toujours le code', 'is_correct' => false],
                            ['text' => 'Ils remplacent les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Les experts métier contribuent à clarifier les règles et les cas réels du domaine.',
                    ],
                    [
                        'question' => 'Quel est un signe d’un requirement de mauvaise qualité ?',
                        'choices' => [
                            ['text' => 'Il est ambigu, non vérifiable ou contradictoire', 'is_correct' => true],
                            ['text' => 'Il est mesurable', 'is_correct' => false],
                            ['text' => 'Il possède un owner', 'is_correct' => false],
                            ['text' => 'Il est priorisé', 'is_correct' => false],
                        ],
                        'explanation' => 'Un requirement doit idéalement être clair, cohérent et vérifiable.',
                    ],
                    [
                        'question' => 'Pourquoi faire une validation précoce ?',
                        'choices' => [
                            ['text' => 'Pour détecter rapidement les mauvaises interprétations avant qu’elles deviennent coûteuses', 'is_correct' => true],
                            ['text' => 'Pour éviter les prototypes', 'is_correct' => false],
                            ['text' => 'Pour supprimer les stakeholders', 'is_correct' => false],
                            ['text' => 'Pour empêcher les changements', 'is_correct' => false],
                        ],
                        'explanation' => 'Corriger une incompréhension tôt coûte généralement moins cher qu’après une implémentation importante.',
                    ],
                ],
            ],
            [
                'title' => 'Refactoring & Technical Debt',
                'description' => 'Intermediate refactoring, code smells et technical debt.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que technical debt ?',
                        'choices' => [
                            ['text' => 'Le coût futur créé par des compromis techniques qui rendent les changements plus difficiles', 'is_correct' => true],
                            ['text' => 'Une database debt', 'is_correct' => false],
                            ['text' => 'Un bug obligatoire', 'is_correct' => false],
                            ['text' => 'Un type de test', 'is_correct' => false],
                        ],
                        'explanation' => 'La dette technique représente notamment le coût futur des compromis ou solutions temporaires.',
                    ],
                    [
                        'question' => 'Quel est le but du refactoring ?',
                        'choices' => [
                            ['text' => 'Améliorer la structure interne sans modifier le comportement attendu', 'is_correct' => true],
                            ['text' => 'Ajouter une feature', 'is_correct' => false],
                            ['text' => 'Supprimer les tests', 'is_correct' => false],
                            ['text' => 'Changer le business requirement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refactoring vise la qualité interne tout en préservant le comportement.',
                    ],
                    [
                        'question' => 'Quel est un exemple de code smell ?',
                        'choices' => [
                            ['text' => 'Une méthode excessivement longue avec plusieurs responsabilités', 'is_correct' => true],
                            ['text' => 'Un test réussi', 'is_correct' => false],
                            ['text' => 'Un commit documenté', 'is_correct' => false],
                            ['text' => 'Une classe bien cohésive', 'is_correct' => false],
                        ],
                        'explanation' => 'Une méthode longue et multi-responsabilités peut signaler une structure difficile à maintenir.',
                    ],
                    [
                        'question' => 'Pourquoi la technical debt doit-elle être visible ?',
                        'choices' => [
                            ['text' => 'Pour pouvoir arbitrer son remboursement avec les nouvelles fonctionnalités et les risques', 'is_correct' => true],
                            ['text' => 'Pour la supprimer automatiquement', 'is_correct' => false],
                            ['text' => 'Pour éviter les reviews', 'is_correct' => false],
                            ['text' => 'Pour empêcher les releases', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dette visible peut être priorisée selon son coût et son impact.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un duplicated code ?',
                        'choices' => [
                            ['text' => 'Une même logique répétée à plusieurs endroits du codebase', 'is_correct' => true],
                            ['text' => 'Une interface', 'is_correct' => false],
                            ['text' => 'Un test d’intégration', 'is_correct' => false],
                            ['text' => 'Un deployment', 'is_correct' => false],
                        ],
                        'explanation' => 'La duplication augmente le risque que des corrections soient appliquées à un endroit mais oubliées ailleurs.',
                    ],
                    [
                        'question' => 'Pourquoi refactorer en petites étapes ?',
                        'choices' => [
                            ['text' => 'Pour limiter le risque et conserver un feedback fréquent des tests', 'is_correct' => true],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour augmenter la complexité', 'is_correct' => false],
                            ['text' => 'Pour éviter Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Des petits changements permettent de détecter plus rapidement les régressions.',
                    ],
                    [
                        'question' => 'Quel risque présente une abstraction trop générale ?',
                        'choices' => [
                            ['text' => 'Elle peut être difficile à comprendre et ne correspondre précisément à aucun besoin', 'is_correct' => true],
                            ['text' => 'Elle garantit toujours la flexibilité', 'is_correct' => false],
                            ['text' => 'Elle supprime les dependencies', 'is_correct' => false],
                            ['text' => 'Elle réduit toujours le code', 'is_correct' => false],
                        ],
                        'explanation' => 'Une abstraction trop large peut créer des interfaces vagues et des implémentations compliquées.',
                    ],
                    [
                        'question' => 'Pourquoi supprimer le dead code ?',
                        'choices' => [
                            ['text' => 'Il augmente la surface de maintenance et peut tromper les développeurs', 'is_correct' => true],
                            ['text' => 'Il améliore toujours la sécurité', 'is_correct' => false],
                            ['text' => 'Il augmente les tests', 'is_correct' => false],
                            ['text' => 'Il accélère toujours l’application', 'is_correct' => false],
                        ],
                        'explanation' => 'Le code inutilisé ajoute du bruit et des coûts sans apporter de valeur.',
                    ],
                    [
                        'question' => 'Quel indicateur peut révéler une dette croissante ?',
                        'choices' => [
                            ['text' => 'Une augmentation du temps et du risque nécessaires pour effectuer des changements', 'is_correct' => true],
                            ['text' => 'Le nombre de couleurs UI', 'is_correct' => false],
                            ['text' => 'Le nombre de users uniquement', 'is_correct' => false],
                            ['text' => 'La taille de l’écran', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les changements simples deviennent progressivement plus difficiles, la dette ou la complexité peut être en cause.',
                    ],
                    [
                        'question' => 'Pourquoi refactoring et tests sont-ils souvent liés ?',
                        'choices' => [
                            ['text' => 'Les tests fournissent une sécurité contre les régressions pendant la modification de la structure', 'is_correct' => true],
                            ['text' => 'Les tests remplacent le refactoring', 'is_correct' => false],
                            ['text' => 'Le refactoring supprime les tests', 'is_correct' => false],
                            ['text' => 'Ils n’ont aucun rapport', 'is_correct' => false],
                        ],
                        'explanation' => 'Une suite de tests fiable donne un filet de sécurité lors des changements structurels.',
                    ],
                ],
            ],
            [
                'title' => 'CI/CD & DevOps',
                'description' => 'CI/CD, automation et delivery.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Pourquoi une CI pipeline doit-elle être rapide ?',
                        'choices' => [
                            ['text' => 'Pour fournir rapidement un feedback aux développeurs', 'is_correct' => true],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour éviter les commits', 'is_correct' => false],
                            ['text' => 'Pour empêcher les releases', 'is_correct' => false],
                        ],
                        'explanation' => 'Un feedback rapide réduit le temps entre un changement et la détection d’un problème.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un artifact ?',
                        'choices' => [
                            ['text' => 'Un résultat produit par un build, comme un package ou un binary', 'is_correct' => true],
                            ['text' => 'Une branch', 'is_correct' => false],
                            ['text' => 'Un requirement', 'is_correct' => false],
                            ['text' => 'Un user', 'is_correct' => false],
                        ],
                        'explanation' => 'Les artifacts sont les outputs versionnés produits par le processus de build.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser des immutable artifacts ?',
                        'choices' => [
                            ['text' => 'Pour garantir que le même artifact testé peut être promu entre environnements', 'is_correct' => true],
                            ['text' => 'Pour modifier les binaries après production', 'is_correct' => false],
                            ['text' => 'Pour éviter le versioning', 'is_correct' => false],
                            ['text' => 'Pour supprimer les builds', 'is_correct' => false],
                        ],
                        'explanation' => 'Promouvoir le même artifact réduit les différences entre ce qui a été testé et ce qui est déployé.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un canary deployment ?',
                        'choices' => [
                            ['text' => 'Limiter progressivement l’exposition d’une nouvelle version et observer son comportement', 'is_correct' => true],
                            ['text' => 'Déployer sans monitoring', 'is_correct' => false],
                            ['text' => 'Supprimer le rollback', 'is_correct' => false],
                            ['text' => 'Éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Le canary réduit le blast radius et permet de détecter des problèmes avant le rollout complet.',
                    ],
                    [
                        'question' => 'Pourquoi gérer les secrets séparément du code ?',
                        'choices' => [
                            ['text' => 'Pour réduire le risque d’exposition et permettre une gestion adaptée aux environnements', 'is_correct' => true],
                            ['text' => 'Parce que Git interdit les strings', 'is_correct' => false],
                            ['text' => 'Pour supprimer les configuration files', 'is_correct' => false],
                            ['text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Les secrets doivent être stockés dans des mécanismes appropriés et non dans le source control.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rollback ?',
                        'choices' => [
                            ['text' => 'Restaurer une version précédente connue comme stable', 'is_correct' => true],
                            ['text' => 'Créer une nouvelle branch', 'is_correct' => false],
                            ['text' => 'Supprimer les logs', 'is_correct' => false],
                            ['text' => 'Modifier un requirement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rollback est une stratégie de recovery après un problème de deployment.',
                    ],
                    [
                        'question' => 'Pourquoi les pipelines doivent-ils être idempotents ?',
                        'choices' => [
                            ['text' => 'Pour pouvoir être rejoués avec un résultat cohérent sans effets cumulatifs indésirables', 'is_correct' => true],
                            ['text' => 'Pour empêcher les retries', 'is_correct' => false],
                            ['text' => 'Pour supprimer les artifacts', 'is_correct' => false],
                            ['text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'L’idempotence rend les opérations de delivery plus sûres en cas de retry.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt du Infrastructure as Code ?',
                        'choices' => [
                            ['text' => 'Définir l’infrastructure de façon versionnée et reproductible', 'is_correct' => true],
                            ['text' => 'Remplacer les applications', 'is_correct' => false],
                            ['text' => 'Supprimer les servers', 'is_correct' => false],
                            ['text' => 'Éviter Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Infrastructure as Code permet d’automatiser et versionner la configuration de l’infrastructure.',
                    ],
                    [
                        'question' => 'Pourquoi intégrer security checks dans CI/CD ?',
                        'choices' => [
                            ['text' => 'Pour détecter plus tôt les vulnérabilités et réduire le coût de correction', 'is_correct' => true],
                            ['text' => 'Pour supprimer les code reviews', 'is_correct' => false],
                            ['text' => 'Pour empêcher toute release', 'is_correct' => false],
                            ['text' => 'Pour remplacer authentication', 'is_correct' => false],
                        ],
                        'explanation' => 'Détecter les problèmes de sécurité tôt réduit le risque et le coût de remédiation.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un deployment strategy ?',
                        'choices' => [
                            ['text' => 'Définir comment une nouvelle version est introduite et contrôlée dans un environnement', 'is_correct' => true],
                            ['text' => 'Définir les variables PHP', 'is_correct' => false],
                            ['text' => 'Créer une database', 'is_correct' => false],
                            ['text' => 'Écrire les unit tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Une deployment strategy organise le rollout, le monitoring et éventuellement le rollback.',
                    ],
                ],
            ],
            [
                'title' => 'Performance & Reliability',
                'description' => 'Performance, observability et fiabilité.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle métrique mesure le temps nécessaire à une requête ?',
                        'choices' => [
                            ['text' => 'Latency', 'is_correct' => true],
                            ['text' => 'Throughput', 'is_correct' => false],
                            ['text' => 'Coverage', 'is_correct' => false],
                            ['text' => 'Availability', 'is_correct' => false],
                        ],
                        'explanation' => 'La latency représente le temps nécessaire pour obtenir le résultat d’une opération.',
                    ],
                    [
                        'question' => 'Quelle métrique mesure le volume de travail traité par unité de temps ?',
                        'choices' => [
                            ['text' => 'Throughput', 'is_correct' => true],
                            ['text' => 'Latency', 'is_correct' => false],
                            ['text' => 'MTTR', 'is_correct' => false],
                            ['text' => 'Coverage', 'is_correct' => false],
                        ],
                        'explanation' => 'Le throughput mesure la quantité de travail traitée pendant une période.',
                    ],
                    [
                        'question' => 'Pourquoi identifier les bottlenecks ?',
                        'choices' => [
                            ['text' => 'Ils limitent la performance globale et sont de bons candidats pour l’optimisation', 'is_correct' => true],
                            ['text' => 'Ils sont toujours des bugs', 'is_correct' => false],
                            ['text' => 'Ils remplacent les tests', 'is_correct' => false],
                            ['text' => 'Ils empêchent le monitoring', 'is_correct' => false],
                        ],
                        'explanation' => 'Optimiser un bottleneck peut avoir un impact significatif sur la performance globale.',
                    ],
                    [
                        'question' => 'Quel est le rôle du caching ?',
                        'choices' => [
                            ['text' => 'Réduire le coût ou la latency d’accès à des données réutilisées', 'is_correct' => true],
                            ['text' => 'Garantir toujours la fraîcheur', 'is_correct' => false],
                            ['text' => 'Supprimer la database', 'is_correct' => false],
                            ['text' => 'Remplacer les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cache accélère certains accès mais nécessite une stratégie d’invalidation adaptée.',
                    ],
                    [
                        'question' => 'Pourquoi la cache invalidation est-elle délicate ?',
                        'choices' => [
                            ['text' => 'Parce qu’une donnée peut devenir obsolète alors qu’elle est encore présente dans le cache', 'is_correct' => true],
                            ['text' => 'Parce qu’un cache ne stocke rien', 'is_correct' => false],
                            ['text' => 'Parce que les caches ne peuvent jamais expirer', 'is_correct' => false],
                            ['text' => 'Parce que le cache remplace la database', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut définir quand une donnée cacheée doit être considérée comme invalide.',
                    ],
                    [
                        'question' => 'Que signifie observability ?',
                        'choices' => [
                            ['text' => 'La capacité à comprendre l’état interne d’un système à partir de ses outputs', 'is_correct' => true],
                            ['text' => 'La vitesse du CPU', 'is_correct' => false],
                            ['text' => 'La taille du code', 'is_correct' => false],
                            ['text' => 'Le nombre de branches', 'is_correct' => false],
                        ],
                        'explanation' => 'L’observability s’appuie notamment sur logs, metrics et traces pour comprendre le comportement d’un système.',
                    ],
                    [
                        'question' => 'Pourquoi les logs structurés sont-ils utiles ?',
                        'choices' => [
                            ['text' => 'Ils facilitent la recherche, l’agrégation et l’analyse automatisée', 'is_correct' => true],
                            ['text' => 'Ils empêchent les incidents', 'is_correct' => false],
                            ['text' => 'Ils remplacent les metrics', 'is_correct' => false],
                            ['text' => 'Ils suppriment les traces', 'is_correct' => false],
                        ],
                        'explanation' => 'Des logs structurés peuvent être filtrés et analysés plus efficacement par des outils.',
                    ],
                    [
                        'question' => 'Qu’est-ce que MTTR ?',
                        'choices' => [
                            ['text' => 'Mean Time To Recovery', 'is_correct' => true],
                            ['text' => 'Maximum Test Transfer Rate', 'is_correct' => false],
                            ['text' => 'Memory Test Technical Ratio', 'is_correct' => false],
                            ['text' => 'Mean Transaction Test Rule', 'is_correct' => false],
                        ],
                        'explanation' => 'MTTR mesure le temps moyen nécessaire pour restaurer un service après un incident.',
                    ],
                    [
                        'question' => 'Pourquoi avoir des health checks ?',
                        'choices' => [
                            ['text' => 'Pour exposer des signaux permettant de vérifier l’état opérationnel d’un service', 'is_correct' => true],
                            ['text' => 'Pour remplacer les tests unitaires', 'is_correct' => false],
                            ['text' => 'Pour stocker les secrets', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les health checks aident les plateformes et opérateurs à détecter les services indisponibles ou dégradés.',
                    ],
                    [
                        'question' => 'Pourquoi une optimisation doit-elle être mesurée ?',
                        'choices' => [
                            ['text' => 'Pour vérifier qu’elle améliore réellement la métrique ciblée', 'is_correct' => true],
                            ['text' => 'Pour augmenter la complexité', 'is_correct' => false],
                            ['text' => 'Pour éviter le profiling', 'is_correct' => false],
                            ['text' => 'Pour supprimer les benchmarks', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mesures avant et après permettent de confirmer le gain réel et d’éviter les optimisations basées sur des suppositions.',
                    ],
                ],
            ],
            [
                'title' => 'Security Engineering',
                'description' => 'Secure coding, authentication et supply-chain security.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle différence existe entre authentication et authorization ?',
                        'choices' => [
                            ['text' => 'Authentication vérifie l’identité, authorization vérifie les permissions', 'is_correct' => true],
                            ['text' => 'Elles sont identiques', 'is_correct' => false],
                            ['text' => 'Authorization chiffre les passwords', 'is_correct' => false],
                            ['text' => 'Authentication crée les roles', 'is_correct' => false],
                        ],
                        'explanation' => 'Authentication répond à l’identité ; authorization détermine les actions autorisées.',
                    ],
                    [
                        'question' => 'Pourquoi appliquer least privilege ?',
                        'choices' => [
                            ['text' => 'Pour limiter les permissions au strict nécessaire', 'is_correct' => true],
                            ['text' => 'Pour donner tous les droits', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['text' => 'Pour éviter les audits', 'is_correct' => false],
                        ],
                        'explanation' => 'Moins de privilèges réduit l’impact potentiel d’une compromission.',
                    ],
                    [
                        'question' => 'Pourquoi valider les inputs côté serveur ?',
                        'choices' => [
                            ['text' => 'Le client peut être contourné et les données doivent être contrôlées à la boundary de confiance', 'is_correct' => true],
                            ['text' => 'Le client est toujours fiable', 'is_correct' => false],
                            ['text' => 'Pour supprimer les database constraints', 'is_correct' => false],
                            ['text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contrôles serveur restent nécessaires même si le frontend effectue déjà une validation.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser un password hashing algorithm ?',
                        'choices' => [
                            ['text' => 'Pour stocker une représentation difficile à inverser d’un password', 'is_correct' => true],
                            ['text' => 'Pour afficher le password', 'is_correct' => false],
                            ['text' => 'Pour compresser le password', 'is_correct' => false],
                            ['text' => 'Pour générer une UI', 'is_correct' => false],
                        ],
                        'explanation' => 'Un algorithme adapté au password hashing rend les attaques par récupération beaucoup plus coûteuses.',
                    ],
                    [
                        'question' => 'Qu’est-ce que defense in depth ?',
                        'choices' => [
                            ['text' => 'Plusieurs couches de contrôles de sécurité complémentaires', 'is_correct' => true],
                            ['text' => 'Un seul firewall', 'is_correct' => false],
                            ['text' => 'Un seul password', 'is_correct' => false],
                            ['text' => 'Une seule validation', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs contrôles indépendants réduisent la probabilité qu’un seul échec compromette le système.',
                    ],
                    [
                        'question' => 'Pourquoi les dependencies doivent-elles être surveillées ?',
                        'choices' => [
                            ['text' => 'Elles peuvent contenir des vulnérabilités ou être compromises', 'is_correct' => true],
                            ['text' => 'Elles ne présentent aucun risque', 'is_correct' => false],
                            ['text' => 'Elles remplacent authentication', 'is_correct' => false],
                            ['text' => 'Elles sont toujours sûres', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dependencies font partie de la software supply chain et doivent être maintenues et analysées.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une attack surface ?',
                        'choices' => [
                            ['text' => 'L’ensemble des points par lesquels un attaquant peut potentiellement interagir avec le système', 'is_correct' => true],
                            ['text' => 'La surface d’un écran', 'is_correct' => false],
                            ['text' => 'Un database table', 'is_correct' => false],
                            ['text' => 'Un test', 'is_correct' => false],
                        ],
                        'explanation' => 'L’attack surface inclut notamment les endpoints, interfaces, services et composants exposés.',
                    ],
                    [
                        'question' => 'Pourquoi les secrets ne doivent-ils pas être dans Git ?',
                        'choices' => [
                            ['text' => 'L’historique peut les conserver et le repository peut être exposé', 'is_correct' => true],
                            ['text' => 'Git chiffre automatiquement les secrets', 'is_correct' => false],
                            ['text' => 'Ils ne fonctionnent pas avec CI', 'is_correct' => false],
                            ['text' => 'Ils empêchent les merges', 'is_correct' => false],
                        ],
                        'explanation' => 'Même après suppression du fichier, un secret peut rester récupérable dans l’historique.',
                    ],
                    [
                        'question' => 'Quel est le but du threat modeling ?',
                        'choices' => [
                            ['text' => 'Identifier les menaces et choisir des mitigations avant qu’un problème ne survienne', 'is_correct' => true],
                            ['text' => 'Créer des users', 'is_correct' => false],
                            ['text' => 'Écrire des tests UI', 'is_correct' => false],
                            ['text' => 'Choisir une couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le threat modeling aide à anticiper les scénarios d’attaque et à prioriser les protections.',
                    ],
                    [
                        'question' => 'Pourquoi les authorization checks doivent-ils être effectués côté serveur ?',
                        'choices' => [
                            ['text' => 'Le client ne constitue pas une security boundary fiable', 'is_correct' => true],
                            ['text' => 'Le frontend est toujours sécurisé', 'is_correct' => false],
                            ['text' => 'Pour supprimer les roles', 'is_correct' => false],
                            ['text' => 'Pour éviter les sessions', 'is_correct' => false],
                        ],
                        'explanation' => 'Un utilisateur peut modifier ou contourner le client ; le serveur doit donc appliquer les permissions.',
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