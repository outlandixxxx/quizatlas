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
        $subject = Subject::where('slug', 'dev-ops')->firstOrFail();

        $quizzes = [
            [
                'title' => 'DevOps — Advanced — Quiz 1',
                'description' => 'Quiz Advanced couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Advanced',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement loose coupling ?',
                        'choices' => [
                            ['choice_text' => 'réduire les dépendances fortes entre composants afin de faciliter leur évolution', 'is_correct' => true],
                            ['choice_text' => 'centraliser tout l\'état', 'is_correct' => false],
                            ['choice_text' => 'lier tous les services à une table', 'is_correct' => false],
                            ['choice_text' => 'supprimer les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'loose coupling correspond à réduire les dépendances fortes entre composants afin de faciliter leur évolution.',
                    ],
                    [
                        'question' => 'Quelle application de loose coupling est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'réduire les dépendances fortes entre composants afin de faciliter leur évolution', 'is_correct' => true],
                            ['choice_text' => 'centraliser tout l\'état', 'is_correct' => false],
                            ['choice_text' => 'lier tous les services à une table', 'is_correct' => false],
                            ['choice_text' => 'supprimer les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, loose coupling permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à loose coupling ?',
                        'choices' => [
                            ['choice_text' => 'réduire les dépendances fortes entre composants afin de faciliter leur évolution', 'is_correct' => true],
                            ['choice_text' => 'centraliser tout l\'état', 'is_correct' => false],
                            ['choice_text' => 'lier tous les services à une table', 'is_correct' => false],
                            ['choice_text' => 'supprimer les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que loose coupling apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à loose coupling est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'réduire les dépendances fortes entre composants afin de faciliter leur évolution', 'is_correct' => true],
                            ['choice_text' => 'centraliser tout l\'état', 'is_correct' => false],
                            ['choice_text' => 'lier tous les services à une table', 'is_correct' => false],
                            ['choice_text' => 'supprimer les APIs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par loose coupling, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement event-driven architecture ?',
                        'choices' => [
                            ['choice_text' => 'faire communiquer les composants au moyen d\'événements', 'is_correct' => true],
                            ['choice_text' => 'forcer toutes les communications synchrones', 'is_correct' => false],
                            ['choice_text' => 'supprimer les queues', 'is_correct' => false],
                            ['choice_text' => 'centraliser chaque consumer', 'is_correct' => false],
                        ],
                        'explanation' => 'event-driven architecture correspond à faire communiquer les composants au moyen d\'événements.',
                    ],
                    [
                        'question' => 'Quelle application de event-driven architecture est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'faire communiquer les composants au moyen d\'événements', 'is_correct' => true],
                            ['choice_text' => 'forcer toutes les communications synchrones', 'is_correct' => false],
                            ['choice_text' => 'supprimer les queues', 'is_correct' => false],
                            ['choice_text' => 'centraliser chaque consumer', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, event-driven architecture permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à event-driven architecture ?',
                        'choices' => [
                            ['choice_text' => 'faire communiquer les composants au moyen d\'événements', 'is_correct' => true],
                            ['choice_text' => 'forcer toutes les communications synchrones', 'is_correct' => false],
                            ['choice_text' => 'supprimer les queues', 'is_correct' => false],
                            ['choice_text' => 'centraliser chaque consumer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que event-driven architecture apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à event-driven architecture est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'faire communiquer les composants au moyen d\'événements', 'is_correct' => true],
                            ['choice_text' => 'forcer toutes les communications synchrones', 'is_correct' => false],
                            ['choice_text' => 'supprimer les queues', 'is_correct' => false],
                            ['choice_text' => 'centraliser chaque consumer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par event-driven architecture, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement microservices ?',
                        'choices' => [
                            ['choice_text' => 'décomposer une application en services relativement autonomes', 'is_correct' => true],
                            ['choice_text' => 'une seule application monolithique obligatoire', 'is_correct' => false],
                            ['choice_text' => 'un système sans réseau', 'is_correct' => false],
                            ['choice_text' => 'un seul process', 'is_correct' => false],
                        ],
                        'explanation' => 'microservices correspond à décomposer une application en services relativement autonomes.',
                    ],
                    [
                        'question' => 'Quelle application de microservices est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'décomposer une application en services relativement autonomes', 'is_correct' => true],
                            ['choice_text' => 'une seule application monolithique obligatoire', 'is_correct' => false],
                            ['choice_text' => 'un système sans réseau', 'is_correct' => false],
                            ['choice_text' => 'un seul process', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, microservices permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Advanced — Quiz 2',
                'description' => 'Quiz Advanced couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Advanced',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à microservices ?',
                        'choices' => [
                            ['choice_text' => 'décomposer une application en services relativement autonomes', 'is_correct' => true],
                            ['choice_text' => 'une seule application monolithique obligatoire', 'is_correct' => false],
                            ['choice_text' => 'un système sans réseau', 'is_correct' => false],
                            ['choice_text' => 'un seul process', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que microservices apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à microservices est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'décomposer une application en services relativement autonomes', 'is_correct' => true],
                            ['choice_text' => 'une seule application monolithique obligatoire', 'is_correct' => false],
                            ['choice_text' => 'un système sans réseau', 'is_correct' => false],
                            ['choice_text' => 'un seul process', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par microservices, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement circuit breaker ?',
                        'choices' => [
                            ['choice_text' => 'limiter les appels vers une dépendance défaillante pour éviter les cascading failures', 'is_correct' => true],
                            ['choice_text' => 'réessayer indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'ignorer les timeouts', 'is_correct' => false],
                            ['choice_text' => 'supprimer les metrics', 'is_correct' => false],
                        ],
                        'explanation' => 'circuit breaker correspond à limiter les appels vers une dépendance défaillante pour éviter les cascading failures.',
                    ],
                    [
                        'question' => 'Quelle application de circuit breaker est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'limiter les appels vers une dépendance défaillante pour éviter les cascading failures', 'is_correct' => true],
                            ['choice_text' => 'réessayer indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'ignorer les timeouts', 'is_correct' => false],
                            ['choice_text' => 'supprimer les metrics', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, circuit breaker permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à circuit breaker ?',
                        'choices' => [
                            ['choice_text' => 'limiter les appels vers une dépendance défaillante pour éviter les cascading failures', 'is_correct' => true],
                            ['choice_text' => 'réessayer indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'ignorer les timeouts', 'is_correct' => false],
                            ['choice_text' => 'supprimer les metrics', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que circuit breaker apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à circuit breaker est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'limiter les appels vers une dépendance défaillante pour éviter les cascading failures', 'is_correct' => true],
                            ['choice_text' => 'réessayer indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'ignorer les timeouts', 'is_correct' => false],
                            ['choice_text' => 'supprimer les metrics', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par circuit breaker, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement timeouts ?',
                        'choices' => [
                            ['choice_text' => 'limiter la durée pendant laquelle un service attend une dépendance', 'is_correct' => true],
                            ['choice_text' => 'garantir que la dépendance répond', 'is_correct' => false],
                            ['choice_text' => 'supprimer les retries', 'is_correct' => false],
                            ['choice_text' => 'rendre les appels instantanés', 'is_correct' => false],
                        ],
                        'explanation' => 'timeouts correspond à limiter la durée pendant laquelle un service attend une dépendance.',
                    ],
                    [
                        'question' => 'Quelle application de timeouts est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'limiter la durée pendant laquelle un service attend une dépendance', 'is_correct' => true],
                            ['choice_text' => 'garantir que la dépendance répond', 'is_correct' => false],
                            ['choice_text' => 'supprimer les retries', 'is_correct' => false],
                            ['choice_text' => 'rendre les appels instantanés', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, timeouts permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à timeouts ?',
                        'choices' => [
                            ['choice_text' => 'limiter la durée pendant laquelle un service attend une dépendance', 'is_correct' => true],
                            ['choice_text' => 'garantir que la dépendance répond', 'is_correct' => false],
                            ['choice_text' => 'supprimer les retries', 'is_correct' => false],
                            ['choice_text' => 'rendre les appels instantanés', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que timeouts apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à timeouts est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'limiter la durée pendant laquelle un service attend une dépendance', 'is_correct' => true],
                            ['choice_text' => 'garantir que la dépendance répond', 'is_correct' => false],
                            ['choice_text' => 'supprimer les retries', 'is_correct' => false],
                            ['choice_text' => 'rendre les appels instantanés', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par timeouts, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Advanced — Quiz 3',
                'description' => 'Quiz Advanced couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Advanced',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement exponential backoff ?',
                        'choices' => [
                            ['choice_text' => 'augmenter progressivement l\'intervalle entre les retries', 'is_correct' => true],
                            ['choice_text' => 'augmenter sans limite la fréquence', 'is_correct' => false],
                            ['choice_text' => 'supprimer les retries', 'is_correct' => false],
                            ['choice_text' => 'forcer une synchronisation', 'is_correct' => false],
                        ],
                        'explanation' => 'exponential backoff correspond à augmenter progressivement l\'intervalle entre les retries.',
                    ],
                    [
                        'question' => 'Quelle application de exponential backoff est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'augmenter progressivement l\'intervalle entre les retries', 'is_correct' => true],
                            ['choice_text' => 'augmenter sans limite la fréquence', 'is_correct' => false],
                            ['choice_text' => 'supprimer les retries', 'is_correct' => false],
                            ['choice_text' => 'forcer une synchronisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, exponential backoff permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à exponential backoff ?',
                        'choices' => [
                            ['choice_text' => 'augmenter progressivement l\'intervalle entre les retries', 'is_correct' => true],
                            ['choice_text' => 'augmenter sans limite la fréquence', 'is_correct' => false],
                            ['choice_text' => 'supprimer les retries', 'is_correct' => false],
                            ['choice_text' => 'forcer une synchronisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que exponential backoff apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à exponential backoff est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'augmenter progressivement l\'intervalle entre les retries', 'is_correct' => true],
                            ['choice_text' => 'augmenter sans limite la fréquence', 'is_correct' => false],
                            ['choice_text' => 'supprimer les retries', 'is_correct' => false],
                            ['choice_text' => 'forcer une synchronisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par exponential backoff, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement idempotency key ?',
                        'choices' => [
                            ['choice_text' => 'identifier une opération afin d\'éviter des effets métier dupliqués lors des retries', 'is_correct' => true],
                            ['choice_text' => 'un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'une clé de chiffrement réseau', 'is_correct' => false],
                            ['choice_text' => 'un Git tag', 'is_correct' => false],
                        ],
                        'explanation' => 'idempotency key correspond à identifier une opération afin d\'éviter des effets métier dupliqués lors des retries.',
                    ],
                    [
                        'question' => 'Quelle application de idempotency key est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'identifier une opération afin d\'éviter des effets métier dupliqués lors des retries', 'is_correct' => true],
                            ['choice_text' => 'un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'une clé de chiffrement réseau', 'is_correct' => false],
                            ['choice_text' => 'un Git tag', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, idempotency key permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à idempotency key ?',
                        'choices' => [
                            ['choice_text' => 'identifier une opération afin d\'éviter des effets métier dupliqués lors des retries', 'is_correct' => true],
                            ['choice_text' => 'un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'une clé de chiffrement réseau', 'is_correct' => false],
                            ['choice_text' => 'un Git tag', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que idempotency key apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à idempotency key est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'identifier une opération afin d\'éviter des effets métier dupliqués lors des retries', 'is_correct' => true],
                            ['choice_text' => 'un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'une clé de chiffrement réseau', 'is_correct' => false],
                            ['choice_text' => 'un Git tag', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par idempotency key, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement service mesh ?',
                        'choices' => [
                            ['choice_text' => 'une couche fournissant des fonctions réseau entre services comme mTLS, routing et telemetry', 'is_correct' => true],
                            ['choice_text' => 'un source repository', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                            ['choice_text' => 'un package manager', 'is_correct' => false],
                        ],
                        'explanation' => 'service mesh correspond à une couche fournissant des fonctions réseau entre services comme mTLS, routing et telemetry.',
                    ],
                    [
                        'question' => 'Quelle application de service mesh est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une couche fournissant des fonctions réseau entre services comme mTLS, routing et telemetry', 'is_correct' => true],
                            ['choice_text' => 'un source repository', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                            ['choice_text' => 'un package manager', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, service mesh permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Advanced — Quiz 4',
                'description' => 'Quiz Advanced couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Advanced',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à service mesh ?',
                        'choices' => [
                            ['choice_text' => 'une couche fournissant des fonctions réseau entre services comme mTLS, routing et telemetry', 'is_correct' => true],
                            ['choice_text' => 'un source repository', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                            ['choice_text' => 'un package manager', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que service mesh apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à service mesh est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une couche fournissant des fonctions réseau entre services comme mTLS, routing et telemetry', 'is_correct' => true],
                            ['choice_text' => 'un source repository', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                            ['choice_text' => 'un package manager', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par service mesh, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement SLO ?',
                        'choices' => [
                            ['choice_text' => 'un objectif quantifié de niveau de service', 'is_correct' => true],
                            ['choice_text' => 'un log', 'is_correct' => false],
                            ['choice_text' => 'un artifact', 'is_correct' => false],
                            ['choice_text' => 'un process', 'is_correct' => false],
                        ],
                        'explanation' => 'SLO correspond à un objectif quantifié de niveau de service.',
                    ],
                    [
                        'question' => 'Quelle application de SLO est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un objectif quantifié de niveau de service', 'is_correct' => true],
                            ['choice_text' => 'un log', 'is_correct' => false],
                            ['choice_text' => 'un artifact', 'is_correct' => false],
                            ['choice_text' => 'un process', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, SLO permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à SLO ?',
                        'choices' => [
                            ['choice_text' => 'un objectif quantifié de niveau de service', 'is_correct' => true],
                            ['choice_text' => 'un log', 'is_correct' => false],
                            ['choice_text' => 'un artifact', 'is_correct' => false],
                            ['choice_text' => 'un process', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que SLO apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à SLO est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un objectif quantifié de niveau de service', 'is_correct' => true],
                            ['choice_text' => 'un log', 'is_correct' => false],
                            ['choice_text' => 'un artifact', 'is_correct' => false],
                            ['choice_text' => 'un process', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par SLO, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement error budget ?',
                        'choices' => [
                            ['choice_text' => 'une marge de défaillance acceptable dérivée d\'un SLO', 'is_correct' => true],
                            ['choice_text' => 'un budget financier global', 'is_correct' => false],
                            ['choice_text' => 'un container limit', 'is_correct' => false],
                            ['choice_text' => 'un dashboard', 'is_correct' => false],
                        ],
                        'explanation' => 'error budget correspond à une marge de défaillance acceptable dérivée d\'un SLO.',
                    ],
                    [
                        'question' => 'Quelle application de error budget est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une marge de défaillance acceptable dérivée d\'un SLO', 'is_correct' => true],
                            ['choice_text' => 'un budget financier global', 'is_correct' => false],
                            ['choice_text' => 'un container limit', 'is_correct' => false],
                            ['choice_text' => 'un dashboard', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, error budget permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à error budget ?',
                        'choices' => [
                            ['choice_text' => 'une marge de défaillance acceptable dérivée d\'un SLO', 'is_correct' => true],
                            ['choice_text' => 'un budget financier global', 'is_correct' => false],
                            ['choice_text' => 'un container limit', 'is_correct' => false],
                            ['choice_text' => 'un dashboard', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que error budget apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à error budget est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une marge de défaillance acceptable dérivée d\'un SLO', 'is_correct' => true],
                            ['choice_text' => 'un budget financier global', 'is_correct' => false],
                            ['choice_text' => 'un container limit', 'is_correct' => false],
                            ['choice_text' => 'un dashboard', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par error budget, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Advanced — Quiz 5',
                'description' => 'Quiz Advanced couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Advanced',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement burn-rate alert ?',
                        'choices' => [
                            ['choice_text' => 'une alerte indiquant une consommation trop rapide de l\'error budget', 'is_correct' => true],
                            ['choice_text' => 'une mesure du disque', 'is_correct' => false],
                            ['choice_text' => 'un test unitaire', 'is_correct' => false],
                            ['choice_text' => 'un Git hook', 'is_correct' => false],
                        ],
                        'explanation' => 'burn-rate alert correspond à une alerte indiquant une consommation trop rapide de l\'error budget.',
                    ],
                    [
                        'question' => 'Quelle application de burn-rate alert est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une alerte indiquant une consommation trop rapide de l\'error budget', 'is_correct' => true],
                            ['choice_text' => 'une mesure du disque', 'is_correct' => false],
                            ['choice_text' => 'un test unitaire', 'is_correct' => false],
                            ['choice_text' => 'un Git hook', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, burn-rate alert permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à burn-rate alert ?',
                        'choices' => [
                            ['choice_text' => 'une alerte indiquant une consommation trop rapide de l\'error budget', 'is_correct' => true],
                            ['choice_text' => 'une mesure du disque', 'is_correct' => false],
                            ['choice_text' => 'un test unitaire', 'is_correct' => false],
                            ['choice_text' => 'un Git hook', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que burn-rate alert apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à burn-rate alert est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une alerte indiquant une consommation trop rapide de l\'error budget', 'is_correct' => true],
                            ['choice_text' => 'une mesure du disque', 'is_correct' => false],
                            ['choice_text' => 'un test unitaire', 'is_correct' => false],
                            ['choice_text' => 'un Git hook', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par burn-rate alert, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Horizontal Pod Autoscaler ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme Kubernetes ajustant le nombre de Pods selon des métriques', 'is_correct' => true],
                            ['choice_text' => 'un image builder', 'is_correct' => false],
                            ['choice_text' => 'un secret manager', 'is_correct' => false],
                            ['choice_text' => 'un registry', 'is_correct' => false],
                        ],
                        'explanation' => 'Horizontal Pod Autoscaler correspond à un mécanisme Kubernetes ajustant le nombre de Pods selon des métriques.',
                    ],
                    [
                        'question' => 'Quelle application de Horizontal Pod Autoscaler est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme Kubernetes ajustant le nombre de Pods selon des métriques', 'is_correct' => true],
                            ['choice_text' => 'un image builder', 'is_correct' => false],
                            ['choice_text' => 'un secret manager', 'is_correct' => false],
                            ['choice_text' => 'un registry', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Horizontal Pod Autoscaler permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Horizontal Pod Autoscaler ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme Kubernetes ajustant le nombre de Pods selon des métriques', 'is_correct' => true],
                            ['choice_text' => 'un image builder', 'is_correct' => false],
                            ['choice_text' => 'un secret manager', 'is_correct' => false],
                            ['choice_text' => 'un registry', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Horizontal Pod Autoscaler apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Horizontal Pod Autoscaler est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme Kubernetes ajustant le nombre de Pods selon des métriques', 'is_correct' => true],
                            ['choice_text' => 'un image builder', 'is_correct' => false],
                            ['choice_text' => 'un secret manager', 'is_correct' => false],
                            ['choice_text' => 'un registry', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Horizontal Pod Autoscaler, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement NetworkPolicy ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme Kubernetes contrôlant certains flux réseau entre workloads', 'is_correct' => true],
                            ['choice_text' => 'un build tool', 'is_correct' => false],
                            ['choice_text' => 'un Git workflow', 'is_correct' => false],
                            ['choice_text' => 'un storage class', 'is_correct' => false],
                        ],
                        'explanation' => 'NetworkPolicy correspond à un mécanisme Kubernetes contrôlant certains flux réseau entre workloads.',
                    ],
                    [
                        'question' => 'Quelle application de NetworkPolicy est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme Kubernetes contrôlant certains flux réseau entre workloads', 'is_correct' => true],
                            ['choice_text' => 'un build tool', 'is_correct' => false],
                            ['choice_text' => 'un Git workflow', 'is_correct' => false],
                            ['choice_text' => 'un storage class', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, NetworkPolicy permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Advanced — Quiz 6',
                'description' => 'Quiz Advanced couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Advanced',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à NetworkPolicy ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme Kubernetes contrôlant certains flux réseau entre workloads', 'is_correct' => true],
                            ['choice_text' => 'un build tool', 'is_correct' => false],
                            ['choice_text' => 'un Git workflow', 'is_correct' => false],
                            ['choice_text' => 'un storage class', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que NetworkPolicy apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à NetworkPolicy est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme Kubernetes contrôlant certains flux réseau entre workloads', 'is_correct' => true],
                            ['choice_text' => 'un build tool', 'is_correct' => false],
                            ['choice_text' => 'un Git workflow', 'is_correct' => false],
                            ['choice_text' => 'un storage class', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par NetworkPolicy, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement PodDisruptionBudget ?',
                        'choices' => [
                            ['choice_text' => 'une politique limitant certaines disruptions volontaires simultanées de Pods', 'is_correct' => true],
                            ['choice_text' => 'un container registry', 'is_correct' => false],
                            ['choice_text' => 'un CI job', 'is_correct' => false],
                            ['choice_text' => 'un database index', 'is_correct' => false],
                        ],
                        'explanation' => 'PodDisruptionBudget correspond à une politique limitant certaines disruptions volontaires simultanées de Pods.',
                    ],
                    [
                        'question' => 'Quelle application de PodDisruptionBudget est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une politique limitant certaines disruptions volontaires simultanées de Pods', 'is_correct' => true],
                            ['choice_text' => 'un container registry', 'is_correct' => false],
                            ['choice_text' => 'un CI job', 'is_correct' => false],
                            ['choice_text' => 'un database index', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, PodDisruptionBudget permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à PodDisruptionBudget ?',
                        'choices' => [
                            ['choice_text' => 'une politique limitant certaines disruptions volontaires simultanées de Pods', 'is_correct' => true],
                            ['choice_text' => 'un container registry', 'is_correct' => false],
                            ['choice_text' => 'un CI job', 'is_correct' => false],
                            ['choice_text' => 'un database index', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que PodDisruptionBudget apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à PodDisruptionBudget est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une politique limitant certaines disruptions volontaires simultanées de Pods', 'is_correct' => true],
                            ['choice_text' => 'un container registry', 'is_correct' => false],
                            ['choice_text' => 'un CI job', 'is_correct' => false],
                            ['choice_text' => 'un database index', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par PodDisruptionBudget, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement SBOM ?',
                        'choices' => [
                            ['choice_text' => 'un inventaire des composants logiciels présents dans un artifact', 'is_correct' => true],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                            ['choice_text' => 'une image Docker', 'is_correct' => false],
                            ['choice_text' => 'un log formatter', 'is_correct' => false],
                        ],
                        'explanation' => 'SBOM correspond à un inventaire des composants logiciels présents dans un artifact.',
                    ],
                    [
                        'question' => 'Quelle application de SBOM est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un inventaire des composants logiciels présents dans un artifact', 'is_correct' => true],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                            ['choice_text' => 'une image Docker', 'is_correct' => false],
                            ['choice_text' => 'un log formatter', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, SBOM permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à SBOM ?',
                        'choices' => [
                            ['choice_text' => 'un inventaire des composants logiciels présents dans un artifact', 'is_correct' => true],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                            ['choice_text' => 'une image Docker', 'is_correct' => false],
                            ['choice_text' => 'un log formatter', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que SBOM apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à SBOM est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un inventaire des composants logiciels présents dans un artifact', 'is_correct' => true],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                            ['choice_text' => 'une image Docker', 'is_correct' => false],
                            ['choice_text' => 'un log formatter', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par SBOM, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Advanced — Quiz 7',
                'description' => 'Quiz Advanced couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Advanced',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement provenance ?',
                        'choices' => [
                            ['choice_text' => 'les informations permettant de comprendre comment et avec quels inputs un artifact a été produit', 'is_correct' => true],
                            ['choice_text' => 'une IP address', 'is_correct' => false],
                            ['choice_text' => 'un port TCP', 'is_correct' => false],
                            ['choice_text' => 'un user role', 'is_correct' => false],
                        ],
                        'explanation' => 'provenance correspond à les informations permettant de comprendre comment et avec quels inputs un artifact a été produit.',
                    ],
                    [
                        'question' => 'Quelle application de provenance est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'les informations permettant de comprendre comment et avec quels inputs un artifact a été produit', 'is_correct' => true],
                            ['choice_text' => 'une IP address', 'is_correct' => false],
                            ['choice_text' => 'un port TCP', 'is_correct' => false],
                            ['choice_text' => 'un user role', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, provenance permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à provenance ?',
                        'choices' => [
                            ['choice_text' => 'les informations permettant de comprendre comment et avec quels inputs un artifact a été produit', 'is_correct' => true],
                            ['choice_text' => 'une IP address', 'is_correct' => false],
                            ['choice_text' => 'un port TCP', 'is_correct' => false],
                            ['choice_text' => 'un user role', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que provenance apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à provenance est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'les informations permettant de comprendre comment et avec quels inputs un artifact a été produit', 'is_correct' => true],
                            ['choice_text' => 'une IP address', 'is_correct' => false],
                            ['choice_text' => 'un port TCP', 'is_correct' => false],
                            ['choice_text' => 'un user role', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par provenance, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement policy-as-code ?',
                        'choices' => [
                            ['choice_text' => 'exprimer des règles de sécurité ou conformité sous une forme automatisable et versionnée', 'is_correct' => true],
                            ['choice_text' => 'un firewall physique', 'is_correct' => false],
                            ['choice_text' => 'un dashboard', 'is_correct' => false],
                            ['choice_text' => 'un manual checklist', 'is_correct' => false],
                        ],
                        'explanation' => 'policy-as-code correspond à exprimer des règles de sécurité ou conformité sous une forme automatisable et versionnée.',
                    ],
                    [
                        'question' => 'Quelle application de policy-as-code est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'exprimer des règles de sécurité ou conformité sous une forme automatisable et versionnée', 'is_correct' => true],
                            ['choice_text' => 'un firewall physique', 'is_correct' => false],
                            ['choice_text' => 'un dashboard', 'is_correct' => false],
                            ['choice_text' => 'un manual checklist', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, policy-as-code permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à policy-as-code ?',
                        'choices' => [
                            ['choice_text' => 'exprimer des règles de sécurité ou conformité sous une forme automatisable et versionnée', 'is_correct' => true],
                            ['choice_text' => 'un firewall physique', 'is_correct' => false],
                            ['choice_text' => 'un dashboard', 'is_correct' => false],
                            ['choice_text' => 'un manual checklist', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que policy-as-code apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à policy-as-code est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'exprimer des règles de sécurité ou conformité sous une forme automatisable et versionnée', 'is_correct' => true],
                            ['choice_text' => 'un firewall physique', 'is_correct' => false],
                            ['choice_text' => 'un dashboard', 'is_correct' => false],
                            ['choice_text' => 'un manual checklist', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par policy-as-code, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement feature flags ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme pour contrôler l\'activation fonctionnelle indépendamment du deployment', 'is_correct' => true],
                            ['choice_text' => 'un compiler', 'is_correct' => false],
                            ['choice_text' => 'un database', 'is_correct' => false],
                            ['choice_text' => 'un DNS resolver', 'is_correct' => false],
                        ],
                        'explanation' => 'feature flags correspond à un mécanisme pour contrôler l\'activation fonctionnelle indépendamment du deployment.',
                    ],
                    [
                        'question' => 'Quelle application de feature flags est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme pour contrôler l\'activation fonctionnelle indépendamment du deployment', 'is_correct' => true],
                            ['choice_text' => 'un compiler', 'is_correct' => false],
                            ['choice_text' => 'un database', 'is_correct' => false],
                            ['choice_text' => 'un DNS resolver', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, feature flags permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Advanced — Quiz 8',
                'description' => 'Quiz Advanced couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Advanced',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à feature flags ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme pour contrôler l\'activation fonctionnelle indépendamment du deployment', 'is_correct' => true],
                            ['choice_text' => 'un compiler', 'is_correct' => false],
                            ['choice_text' => 'un database', 'is_correct' => false],
                            ['choice_text' => 'un DNS resolver', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que feature flags apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à feature flags est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un mécanisme pour contrôler l\'activation fonctionnelle indépendamment du deployment', 'is_correct' => true],
                            ['choice_text' => 'un compiler', 'is_correct' => false],
                            ['choice_text' => 'un database', 'is_correct' => false],
                            ['choice_text' => 'un DNS resolver', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par feature flags, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement performance budget ?',
                        'choices' => [
                            ['choice_text' => 'une limite mesurable de performance à préserver pendant l\'évolution d\'un produit', 'is_correct' => true],
                            ['choice_text' => 'un budget financier', 'is_correct' => false],
                            ['choice_text' => 'un secret', 'is_correct' => false],
                            ['choice_text' => 'un user account', 'is_correct' => false],
                        ],
                        'explanation' => 'performance budget correspond à une limite mesurable de performance à préserver pendant l\'évolution d\'un produit.',
                    ],
                    [
                        'question' => 'Quelle application de performance budget est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une limite mesurable de performance à préserver pendant l\'évolution d\'un produit', 'is_correct' => true],
                            ['choice_text' => 'un budget financier', 'is_correct' => false],
                            ['choice_text' => 'un secret', 'is_correct' => false],
                            ['choice_text' => 'un user account', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, performance budget permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à performance budget ?',
                        'choices' => [
                            ['choice_text' => 'une limite mesurable de performance à préserver pendant l\'évolution d\'un produit', 'is_correct' => true],
                            ['choice_text' => 'un budget financier', 'is_correct' => false],
                            ['choice_text' => 'un secret', 'is_correct' => false],
                            ['choice_text' => 'un user account', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que performance budget apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à performance budget est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une limite mesurable de performance à préserver pendant l\'évolution d\'un produit', 'is_correct' => true],
                            ['choice_text' => 'un budget financier', 'is_correct' => false],
                            ['choice_text' => 'un secret', 'is_correct' => false],
                            ['choice_text' => 'un user account', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par performance budget, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement bulkhead ?',
                        'choices' => [
                            ['choice_text' => 'isoler des ressources pour empêcher qu\'une failure épuise tout le système', 'is_correct' => true],
                            ['choice_text' => 'partager toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'supprimer les limits', 'is_correct' => false],
                            ['choice_text' => 'désactiver les queues', 'is_correct' => false],
                        ],
                        'explanation' => 'bulkhead correspond à isoler des ressources pour empêcher qu\'une failure épuise tout le système.',
                    ],
                    [
                        'question' => 'Quelle application de bulkhead est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'isoler des ressources pour empêcher qu\'une failure épuise tout le système', 'is_correct' => true],
                            ['choice_text' => 'partager toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'supprimer les limits', 'is_correct' => false],
                            ['choice_text' => 'désactiver les queues', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, bulkhead permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à bulkhead ?',
                        'choices' => [
                            ['choice_text' => 'isoler des ressources pour empêcher qu\'une failure épuise tout le système', 'is_correct' => true],
                            ['choice_text' => 'partager toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'supprimer les limits', 'is_correct' => false],
                            ['choice_text' => 'désactiver les queues', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que bulkhead apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à bulkhead est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'isoler des ressources pour empêcher qu\'une failure épuise tout le système', 'is_correct' => true],
                            ['choice_text' => 'partager toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'supprimer les limits', 'is_correct' => false],
                            ['choice_text' => 'désactiver les queues', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par bulkhead, car ce mécanisme répond directement à la contrainte opérationnelle.',
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
                    'is_active' => true,
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
