<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DevOpsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'dev-ops')->firstOrFail();

        $quizzes = [
            [
                'title' => 'DevOps — Intermediate — Quiz 1',
                'description' => 'Quiz Intermediate couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement quality gate ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle qui empêche une pipeline de progresser lorsque des critères obligatoires ne sont pas satisfaits', 'is_correct' => true],
                            ['choice_text' => 'un deployment sans vérification', 'is_correct' => false],
                            ['choice_text' => 'un secret manager', 'is_correct' => false],
                            ['choice_text' => 'un DNS record', 'is_correct' => false],
                        ],
                        'explanation' => 'quality gate correspond à un contrôle qui empêche une pipeline de progresser lorsque des critères obligatoires ne sont pas satisfaits.',
                    ],
                    [
                        'question' => 'Quelle application de quality gate est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle qui empêche une pipeline de progresser lorsque des critères obligatoires ne sont pas satisfaits', 'is_correct' => true],
                            ['choice_text' => 'un deployment sans vérification', 'is_correct' => false],
                            ['choice_text' => 'un secret manager', 'is_correct' => false],
                            ['choice_text' => 'un DNS record', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, quality gate permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à quality gate ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle qui empêche une pipeline de progresser lorsque des critères obligatoires ne sont pas satisfaits', 'is_correct' => true],
                            ['choice_text' => 'un deployment sans vérification', 'is_correct' => false],
                            ['choice_text' => 'un secret manager', 'is_correct' => false],
                            ['choice_text' => 'un DNS record', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que quality gate apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à quality gate est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle qui empêche une pipeline de progresser lorsque des critères obligatoires ne sont pas satisfaits', 'is_correct' => true],
                            ['choice_text' => 'un deployment sans vérification', 'is_correct' => false],
                            ['choice_text' => 'un secret manager', 'is_correct' => false],
                            ['choice_text' => 'un DNS record', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par quality gate, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement artifact promotion ?',
                        'choices' => [
                            ['choice_text' => 'promouvoir le même artifact entre plusieurs environments', 'is_correct' => true],
                            ['choice_text' => 'recompiler chaque environment', 'is_correct' => false],
                            ['choice_text' => 'modifier l\'artifact manuellement', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'artifact promotion correspond à promouvoir le même artifact entre plusieurs environments.',
                    ],
                    [
                        'question' => 'Quelle application de artifact promotion est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'promouvoir le même artifact entre plusieurs environments', 'is_correct' => true],
                            ['choice_text' => 'recompiler chaque environment', 'is_correct' => false],
                            ['choice_text' => 'modifier l\'artifact manuellement', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, artifact promotion permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à artifact promotion ?',
                        'choices' => [
                            ['choice_text' => 'promouvoir le même artifact entre plusieurs environments', 'is_correct' => true],
                            ['choice_text' => 'recompiler chaque environment', 'is_correct' => false],
                            ['choice_text' => 'modifier l\'artifact manuellement', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que artifact promotion apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à artifact promotion est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'promouvoir le même artifact entre plusieurs environments', 'is_correct' => true],
                            ['choice_text' => 'recompiler chaque environment', 'is_correct' => false],
                            ['choice_text' => 'modifier l\'artifact manuellement', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par artifact promotion, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement configuration management ?',
                        'choices' => [
                            ['choice_text' => 'maintenir automatiquement une configuration cohérente sur plusieurs systèmes', 'is_correct' => true],
                            ['choice_text' => 'modifier chaque serveur à la main', 'is_correct' => false],
                            ['choice_text' => 'supprimer les standards', 'is_correct' => false],
                            ['choice_text' => 'éviter le versioning', 'is_correct' => false],
                        ],
                        'explanation' => 'configuration management correspond à maintenir automatiquement une configuration cohérente sur plusieurs systèmes.',
                    ],
                    [
                        'question' => 'Quelle application de configuration management est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'maintenir automatiquement une configuration cohérente sur plusieurs systèmes', 'is_correct' => true],
                            ['choice_text' => 'modifier chaque serveur à la main', 'is_correct' => false],
                            ['choice_text' => 'supprimer les standards', 'is_correct' => false],
                            ['choice_text' => 'éviter le versioning', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, configuration management permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Intermediate — Quiz 2',
                'description' => 'Quiz Intermediate couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à configuration management ?',
                        'choices' => [
                            ['choice_text' => 'maintenir automatiquement une configuration cohérente sur plusieurs systèmes', 'is_correct' => true],
                            ['choice_text' => 'modifier chaque serveur à la main', 'is_correct' => false],
                            ['choice_text' => 'supprimer les standards', 'is_correct' => false],
                            ['choice_text' => 'éviter le versioning', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que configuration management apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à configuration management est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'maintenir automatiquement une configuration cohérente sur plusieurs systèmes', 'is_correct' => true],
                            ['choice_text' => 'modifier chaque serveur à la main', 'is_correct' => false],
                            ['choice_text' => 'supprimer les standards', 'is_correct' => false],
                            ['choice_text' => 'éviter le versioning', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par configuration management, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement configuration drift ?',
                        'choices' => [
                            ['choice_text' => 'une divergence entre l\'état déclaré ou attendu et l\'état réel', 'is_correct' => true],
                            ['choice_text' => 'un build réussi', 'is_correct' => false],
                            ['choice_text' => 'un backup valide', 'is_correct' => false],
                            ['choice_text' => 'une metric stable', 'is_correct' => false],
                        ],
                        'explanation' => 'configuration drift correspond à une divergence entre l\'état déclaré ou attendu et l\'état réel.',
                    ],
                    [
                        'question' => 'Quelle application de configuration drift est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une divergence entre l\'état déclaré ou attendu et l\'état réel', 'is_correct' => true],
                            ['choice_text' => 'un build réussi', 'is_correct' => false],
                            ['choice_text' => 'un backup valide', 'is_correct' => false],
                            ['choice_text' => 'une metric stable', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, configuration drift permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à configuration drift ?',
                        'choices' => [
                            ['choice_text' => 'une divergence entre l\'état déclaré ou attendu et l\'état réel', 'is_correct' => true],
                            ['choice_text' => 'un build réussi', 'is_correct' => false],
                            ['choice_text' => 'un backup valide', 'is_correct' => false],
                            ['choice_text' => 'une metric stable', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que configuration drift apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à configuration drift est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une divergence entre l\'état déclaré ou attendu et l\'état réel', 'is_correct' => true],
                            ['choice_text' => 'un build réussi', 'is_correct' => false],
                            ['choice_text' => 'un backup valide', 'is_correct' => false],
                            ['choice_text' => 'une metric stable', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par configuration drift, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement idempotence ?',
                        'choices' => [
                            ['choice_text' => 'la propriété d\'une opération pouvant être répétée sans provoquer de changements indésirables supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'une exécution aléatoire', 'is_correct' => false],
                            ['choice_text' => 'une mutation non contrôlée', 'is_correct' => false],
                            ['choice_text' => 'une opération non déterministe', 'is_correct' => false],
                        ],
                        'explanation' => 'idempotence correspond à la propriété d\'une opération pouvant être répétée sans provoquer de changements indésirables supplémentaires.',
                    ],
                    [
                        'question' => 'Quelle application de idempotence est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'la propriété d\'une opération pouvant être répétée sans provoquer de changements indésirables supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'une exécution aléatoire', 'is_correct' => false],
                            ['choice_text' => 'une mutation non contrôlée', 'is_correct' => false],
                            ['choice_text' => 'une opération non déterministe', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, idempotence permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à idempotence ?',
                        'choices' => [
                            ['choice_text' => 'la propriété d\'une opération pouvant être répétée sans provoquer de changements indésirables supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'une exécution aléatoire', 'is_correct' => false],
                            ['choice_text' => 'une mutation non contrôlée', 'is_correct' => false],
                            ['choice_text' => 'une opération non déterministe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que idempotence apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à idempotence est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'la propriété d\'une opération pouvant être répétée sans provoquer de changements indésirables supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'une exécution aléatoire', 'is_correct' => false],
                            ['choice_text' => 'une mutation non contrôlée', 'is_correct' => false],
                            ['choice_text' => 'une opération non déterministe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par idempotence, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Intermediate — Quiz 3',
                'description' => 'Quiz Intermediate couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement Kubernetes ?',
                        'choices' => [
                            ['choice_text' => 'une plateforme d\'orchestration de containers', 'is_correct' => true],
                            ['choice_text' => 'un système de version control', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                            ['choice_text' => 'un text editor', 'is_correct' => false],
                        ],
                        'explanation' => 'Kubernetes correspond à une plateforme d\'orchestration de containers.',
                    ],
                    [
                        'question' => 'Quelle application de Kubernetes est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une plateforme d\'orchestration de containers', 'is_correct' => true],
                            ['choice_text' => 'un système de version control', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                            ['choice_text' => 'un text editor', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Kubernetes permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Kubernetes ?',
                        'choices' => [
                            ['choice_text' => 'une plateforme d\'orchestration de containers', 'is_correct' => true],
                            ['choice_text' => 'un système de version control', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                            ['choice_text' => 'un text editor', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Kubernetes apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Kubernetes est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une plateforme d\'orchestration de containers', 'is_correct' => true],
                            ['choice_text' => 'un système de version control', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                            ['choice_text' => 'un text editor', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Kubernetes, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Pod ?',
                        'choices' => [
                            ['choice_text' => 'l\'unité de déploiement de base de Kubernetes pouvant contenir un ou plusieurs containers liés', 'is_correct' => true],
                            ['choice_text' => 'un repository Git', 'is_correct' => false],
                            ['choice_text' => 'un DNS zone', 'is_correct' => false],
                            ['choice_text' => 'un physical server', 'is_correct' => false],
                        ],
                        'explanation' => 'Pod correspond à l\'unité de déploiement de base de Kubernetes pouvant contenir un ou plusieurs containers liés.',
                    ],
                    [
                        'question' => 'Quelle application de Pod est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'l\'unité de déploiement de base de Kubernetes pouvant contenir un ou plusieurs containers liés', 'is_correct' => true],
                            ['choice_text' => 'un repository Git', 'is_correct' => false],
                            ['choice_text' => 'un DNS zone', 'is_correct' => false],
                            ['choice_text' => 'un physical server', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Pod permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Pod ?',
                        'choices' => [
                            ['choice_text' => 'l\'unité de déploiement de base de Kubernetes pouvant contenir un ou plusieurs containers liés', 'is_correct' => true],
                            ['choice_text' => 'un repository Git', 'is_correct' => false],
                            ['choice_text' => 'un DNS zone', 'is_correct' => false],
                            ['choice_text' => 'un physical server', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Pod apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Pod est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'l\'unité de déploiement de base de Kubernetes pouvant contenir un ou plusieurs containers liés', 'is_correct' => true],
                            ['choice_text' => 'un repository Git', 'is_correct' => false],
                            ['choice_text' => 'un DNS zone', 'is_correct' => false],
                            ['choice_text' => 'un physical server', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Pod, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Kubernetes Service ?',
                        'choices' => [
                            ['choice_text' => 'une abstraction fournissant un accès réseau stable vers des Pods', 'is_correct' => true],
                            ['choice_text' => 'un Dockerfile', 'is_correct' => false],
                            ['choice_text' => 'un secret humain', 'is_correct' => false],
                            ['choice_text' => 'un CI runner', 'is_correct' => false],
                        ],
                        'explanation' => 'Kubernetes Service correspond à une abstraction fournissant un accès réseau stable vers des Pods.',
                    ],
                    [
                        'question' => 'Quelle application de Kubernetes Service est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une abstraction fournissant un accès réseau stable vers des Pods', 'is_correct' => true],
                            ['choice_text' => 'un Dockerfile', 'is_correct' => false],
                            ['choice_text' => 'un secret humain', 'is_correct' => false],
                            ['choice_text' => 'un CI runner', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Kubernetes Service permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Intermediate — Quiz 4',
                'description' => 'Quiz Intermediate couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Kubernetes Service ?',
                        'choices' => [
                            ['choice_text' => 'une abstraction fournissant un accès réseau stable vers des Pods', 'is_correct' => true],
                            ['choice_text' => 'un Dockerfile', 'is_correct' => false],
                            ['choice_text' => 'un secret humain', 'is_correct' => false],
                            ['choice_text' => 'un CI runner', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Kubernetes Service apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Kubernetes Service est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une abstraction fournissant un accès réseau stable vers des Pods', 'is_correct' => true],
                            ['choice_text' => 'un Dockerfile', 'is_correct' => false],
                            ['choice_text' => 'un secret humain', 'is_correct' => false],
                            ['choice_text' => 'un CI runner', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Kubernetes Service, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement readiness probe ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle indiquant si un workload est prêt à recevoir du trafic', 'is_correct' => true],
                            ['choice_text' => 'un build artifact', 'is_correct' => false],
                            ['choice_text' => 'un Git tag', 'is_correct' => false],
                            ['choice_text' => 'un database migration', 'is_correct' => false],
                        ],
                        'explanation' => 'readiness probe correspond à un contrôle indiquant si un workload est prêt à recevoir du trafic.',
                    ],
                    [
                        'question' => 'Quelle application de readiness probe est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle indiquant si un workload est prêt à recevoir du trafic', 'is_correct' => true],
                            ['choice_text' => 'un build artifact', 'is_correct' => false],
                            ['choice_text' => 'un Git tag', 'is_correct' => false],
                            ['choice_text' => 'un database migration', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, readiness probe permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à readiness probe ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle indiquant si un workload est prêt à recevoir du trafic', 'is_correct' => true],
                            ['choice_text' => 'un build artifact', 'is_correct' => false],
                            ['choice_text' => 'un Git tag', 'is_correct' => false],
                            ['choice_text' => 'un database migration', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que readiness probe apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à readiness probe est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle indiquant si un workload est prêt à recevoir du trafic', 'is_correct' => true],
                            ['choice_text' => 'un build artifact', 'is_correct' => false],
                            ['choice_text' => 'un Git tag', 'is_correct' => false],
                            ['choice_text' => 'un database migration', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par readiness probe, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement resource limits ?',
                        'choices' => [
                            ['choice_text' => 'des contraintes qui limitent la consommation de ressources d\'un workload', 'is_correct' => true],
                            ['choice_text' => 'des règles de versioning', 'is_correct' => false],
                            ['choice_text' => 'des logs centralisés', 'is_correct' => false],
                            ['choice_text' => 'des branches Git', 'is_correct' => false],
                        ],
                        'explanation' => 'resource limits correspond à des contraintes qui limitent la consommation de ressources d\'un workload.',
                    ],
                    [
                        'question' => 'Quelle application de resource limits est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'des contraintes qui limitent la consommation de ressources d\'un workload', 'is_correct' => true],
                            ['choice_text' => 'des règles de versioning', 'is_correct' => false],
                            ['choice_text' => 'des logs centralisés', 'is_correct' => false],
                            ['choice_text' => 'des branches Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, resource limits permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à resource limits ?',
                        'choices' => [
                            ['choice_text' => 'des contraintes qui limitent la consommation de ressources d\'un workload', 'is_correct' => true],
                            ['choice_text' => 'des règles de versioning', 'is_correct' => false],
                            ['choice_text' => 'des logs centralisés', 'is_correct' => false],
                            ['choice_text' => 'des branches Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que resource limits apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à resource limits est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'des contraintes qui limitent la consommation de ressources d\'un workload', 'is_correct' => true],
                            ['choice_text' => 'des règles de versioning', 'is_correct' => false],
                            ['choice_text' => 'des logs centralisés', 'is_correct' => false],
                            ['choice_text' => 'des branches Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par resource limits, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Intermediate — Quiz 5',
                'description' => 'Quiz Intermediate couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement DevSecOps ?',
                        'choices' => [
                            ['choice_text' => 'intégrer la sécurité dans tout le software delivery lifecycle', 'is_correct' => true],
                            ['choice_text' => 'placer toute la sécurité après production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'remplacer CI/CD', 'is_correct' => false],
                        ],
                        'explanation' => 'DevSecOps correspond à intégrer la sécurité dans tout le software delivery lifecycle.',
                    ],
                    [
                        'question' => 'Quelle application de DevSecOps est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'intégrer la sécurité dans tout le software delivery lifecycle', 'is_correct' => true],
                            ['choice_text' => 'placer toute la sécurité après production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'remplacer CI/CD', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, DevSecOps permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à DevSecOps ?',
                        'choices' => [
                            ['choice_text' => 'intégrer la sécurité dans tout le software delivery lifecycle', 'is_correct' => true],
                            ['choice_text' => 'placer toute la sécurité après production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'remplacer CI/CD', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que DevSecOps apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à DevSecOps est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'intégrer la sécurité dans tout le software delivery lifecycle', 'is_correct' => true],
                            ['choice_text' => 'placer toute la sécurité après production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'remplacer CI/CD', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par DevSecOps, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement SAST ?',
                        'choices' => [
                            ['choice_text' => 'analyser statiquement le code pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'scanner uniquement le réseau', 'is_correct' => false],
                            ['choice_text' => 'déployer une image', 'is_correct' => false],
                            ['choice_text' => 'gérer le DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'SAST correspond à analyser statiquement le code pour détecter certaines vulnérabilités.',
                    ],
                    [
                        'question' => 'Quelle application de SAST est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'analyser statiquement le code pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'scanner uniquement le réseau', 'is_correct' => false],
                            ['choice_text' => 'déployer une image', 'is_correct' => false],
                            ['choice_text' => 'gérer le DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, SAST permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à SAST ?',
                        'choices' => [
                            ['choice_text' => 'analyser statiquement le code pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'scanner uniquement le réseau', 'is_correct' => false],
                            ['choice_text' => 'déployer une image', 'is_correct' => false],
                            ['choice_text' => 'gérer le DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que SAST apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à SAST est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'analyser statiquement le code pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'scanner uniquement le réseau', 'is_correct' => false],
                            ['choice_text' => 'déployer une image', 'is_correct' => false],
                            ['choice_text' => 'gérer le DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par SAST, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement DAST ?',
                        'choices' => [
                            ['choice_text' => 'tester une application en fonctionnement pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'analyser uniquement Git', 'is_correct' => false],
                            ['choice_text' => 'créer des containers', 'is_correct' => false],
                            ['choice_text' => 'remplacer IAM', 'is_correct' => false],
                        ],
                        'explanation' => 'DAST correspond à tester une application en fonctionnement pour détecter certaines vulnérabilités.',
                    ],
                    [
                        'question' => 'Quelle application de DAST est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'tester une application en fonctionnement pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'analyser uniquement Git', 'is_correct' => false],
                            ['choice_text' => 'créer des containers', 'is_correct' => false],
                            ['choice_text' => 'remplacer IAM', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, DAST permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Intermediate — Quiz 6',
                'description' => 'Quiz Intermediate couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à DAST ?',
                        'choices' => [
                            ['choice_text' => 'tester une application en fonctionnement pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'analyser uniquement Git', 'is_correct' => false],
                            ['choice_text' => 'créer des containers', 'is_correct' => false],
                            ['choice_text' => 'remplacer IAM', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que DAST apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à DAST est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'tester une application en fonctionnement pour détecter certaines vulnérabilités', 'is_correct' => true],
                            ['choice_text' => 'analyser uniquement Git', 'is_correct' => false],
                            ['choice_text' => 'créer des containers', 'is_correct' => false],
                            ['choice_text' => 'remplacer IAM', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par DAST, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement dependency scanning ?',
                        'choices' => [
                            ['choice_text' => 'analyser les dependencies pour identifier des vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'supprimer toutes les dependencies', 'is_correct' => false],
                            ['choice_text' => 'modifier les requirements sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'remplacer le compiler', 'is_correct' => false],
                        ],
                        'explanation' => 'dependency scanning correspond à analyser les dependencies pour identifier des vulnérabilités connues.',
                    ],
                    [
                        'question' => 'Quelle application de dependency scanning est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'analyser les dependencies pour identifier des vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'supprimer toutes les dependencies', 'is_correct' => false],
                            ['choice_text' => 'modifier les requirements sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'remplacer le compiler', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, dependency scanning permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à dependency scanning ?',
                        'choices' => [
                            ['choice_text' => 'analyser les dependencies pour identifier des vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'supprimer toutes les dependencies', 'is_correct' => false],
                            ['choice_text' => 'modifier les requirements sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'remplacer le compiler', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que dependency scanning apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à dependency scanning est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'analyser les dependencies pour identifier des vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'supprimer toutes les dependencies', 'is_correct' => false],
                            ['choice_text' => 'modifier les requirements sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'remplacer le compiler', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par dependency scanning, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement remote state ?',
                        'choices' => [
                            ['choice_text' => 'un state IaC stocké dans un backend partagé et contrôlé', 'is_correct' => true],
                            ['choice_text' => 'un local file temporaire', 'is_correct' => false],
                            ['choice_text' => 'un DNS cache', 'is_correct' => false],
                            ['choice_text' => 'un container image', 'is_correct' => false],
                        ],
                        'explanation' => 'remote state correspond à un state IaC stocké dans un backend partagé et contrôlé.',
                    ],
                    [
                        'question' => 'Quelle application de remote state est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un state IaC stocké dans un backend partagé et contrôlé', 'is_correct' => true],
                            ['choice_text' => 'un local file temporaire', 'is_correct' => false],
                            ['choice_text' => 'un DNS cache', 'is_correct' => false],
                            ['choice_text' => 'un container image', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, remote state permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à remote state ?',
                        'choices' => [
                            ['choice_text' => 'un state IaC stocké dans un backend partagé et contrôlé', 'is_correct' => true],
                            ['choice_text' => 'un local file temporaire', 'is_correct' => false],
                            ['choice_text' => 'un DNS cache', 'is_correct' => false],
                            ['choice_text' => 'un container image', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que remote state apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à remote state est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un state IaC stocké dans un backend partagé et contrôlé', 'is_correct' => true],
                            ['choice_text' => 'un local file temporaire', 'is_correct' => false],
                            ['choice_text' => 'un DNS cache', 'is_correct' => false],
                            ['choice_text' => 'un container image', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par remote state, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Intermediate — Quiz 7',
                'description' => 'Quiz Intermediate couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement state locking ?',
                        'choices' => [
                            ['choice_text' => 'empêcher plusieurs opérations IaC concurrentes de modifier le même state', 'is_correct' => true],
                            ['choice_text' => 'augmenter le CPU', 'is_correct' => false],
                            ['choice_text' => 'supprimer le state', 'is_correct' => false],
                            ['choice_text' => 'créer des branches Git', 'is_correct' => false],
                        ],
                        'explanation' => 'state locking correspond à empêcher plusieurs opérations IaC concurrentes de modifier le même state.',
                    ],
                    [
                        'question' => 'Quelle application de state locking est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'empêcher plusieurs opérations IaC concurrentes de modifier le même state', 'is_correct' => true],
                            ['choice_text' => 'augmenter le CPU', 'is_correct' => false],
                            ['choice_text' => 'supprimer le state', 'is_correct' => false],
                            ['choice_text' => 'créer des branches Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, state locking permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à state locking ?',
                        'choices' => [
                            ['choice_text' => 'empêcher plusieurs opérations IaC concurrentes de modifier le même state', 'is_correct' => true],
                            ['choice_text' => 'augmenter le CPU', 'is_correct' => false],
                            ['choice_text' => 'supprimer le state', 'is_correct' => false],
                            ['choice_text' => 'créer des branches Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que state locking apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à state locking est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'empêcher plusieurs opérations IaC concurrentes de modifier le même state', 'is_correct' => true],
                            ['choice_text' => 'augmenter le CPU', 'is_correct' => false],
                            ['choice_text' => 'supprimer le state', 'is_correct' => false],
                            ['choice_text' => 'créer des branches Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par state locking, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement feature flag ?',
                        'choices' => [
                            ['choice_text' => 'activer ou désactiver une fonctionnalité indépendamment du deployment', 'is_correct' => true],
                            ['choice_text' => 'remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'créer un cluster', 'is_correct' => false],
                            ['choice_text' => 'modifier le kernel', 'is_correct' => false],
                        ],
                        'explanation' => 'feature flag correspond à activer ou désactiver une fonctionnalité indépendamment du deployment.',
                    ],
                    [
                        'question' => 'Quelle application de feature flag est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'activer ou désactiver une fonctionnalité indépendamment du deployment', 'is_correct' => true],
                            ['choice_text' => 'remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'créer un cluster', 'is_correct' => false],
                            ['choice_text' => 'modifier le kernel', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, feature flag permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à feature flag ?',
                        'choices' => [
                            ['choice_text' => 'activer ou désactiver une fonctionnalité indépendamment du deployment', 'is_correct' => true],
                            ['choice_text' => 'remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'créer un cluster', 'is_correct' => false],
                            ['choice_text' => 'modifier le kernel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que feature flag apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à feature flag est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'activer ou désactiver une fonctionnalité indépendamment du deployment', 'is_correct' => true],
                            ['choice_text' => 'remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'créer un cluster', 'is_correct' => false],
                            ['choice_text' => 'modifier le kernel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par feature flag, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement canary deployment ?',
                        'choices' => [
                            ['choice_text' => 'déployer une nouvelle version à une petite partie du trafic avant généralisation', 'is_correct' => true],
                            ['choice_text' => 'déployer partout immédiatement', 'is_correct' => false],
                            ['choice_text' => 'supprimer monitoring', 'is_correct' => false],
                            ['choice_text' => 'éviter rollback', 'is_correct' => false],
                        ],
                        'explanation' => 'canary deployment correspond à déployer une nouvelle version à une petite partie du trafic avant généralisation.',
                    ],
                    [
                        'question' => 'Quelle application de canary deployment est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'déployer une nouvelle version à une petite partie du trafic avant généralisation', 'is_correct' => true],
                            ['choice_text' => 'déployer partout immédiatement', 'is_correct' => false],
                            ['choice_text' => 'supprimer monitoring', 'is_correct' => false],
                            ['choice_text' => 'éviter rollback', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, canary deployment permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Intermediate — Quiz 8',
                'description' => 'Quiz Intermediate couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à canary deployment ?',
                        'choices' => [
                            ['choice_text' => 'déployer une nouvelle version à une petite partie du trafic avant généralisation', 'is_correct' => true],
                            ['choice_text' => 'déployer partout immédiatement', 'is_correct' => false],
                            ['choice_text' => 'supprimer monitoring', 'is_correct' => false],
                            ['choice_text' => 'éviter rollback', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que canary deployment apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à canary deployment est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'déployer une nouvelle version à une petite partie du trafic avant généralisation', 'is_correct' => true],
                            ['choice_text' => 'déployer partout immédiatement', 'is_correct' => false],
                            ['choice_text' => 'supprimer monitoring', 'is_correct' => false],
                            ['choice_text' => 'éviter rollback', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par canary deployment, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement runbook ?',
                        'choices' => [
                            ['choice_text' => 'un document décrivant une procédure opérationnelle reproductible', 'is_correct' => true],
                            ['choice_text' => 'une container image', 'is_correct' => false],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un database schema', 'is_correct' => false],
                        ],
                        'explanation' => 'runbook correspond à un document décrivant une procédure opérationnelle reproductible.',
                    ],
                    [
                        'question' => 'Quelle application de runbook est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un document décrivant une procédure opérationnelle reproductible', 'is_correct' => true],
                            ['choice_text' => 'une container image', 'is_correct' => false],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un database schema', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, runbook permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à runbook ?',
                        'choices' => [
                            ['choice_text' => 'un document décrivant une procédure opérationnelle reproductible', 'is_correct' => true],
                            ['choice_text' => 'une container image', 'is_correct' => false],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un database schema', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que runbook apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à runbook est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un document décrivant une procédure opérationnelle reproductible', 'is_correct' => true],
                            ['choice_text' => 'une container image', 'is_correct' => false],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un database schema', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par runbook, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement DORA metrics ?',
                        'choices' => [
                            ['choice_text' => 'des métriques utilisées pour analyser certaines dimensions du software delivery', 'is_correct' => true],
                            ['choice_text' => 'des métriques CPU uniquement', 'is_correct' => false],
                            ['choice_text' => 'un format de logs', 'is_correct' => false],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'DORA metrics correspond à des métriques utilisées pour analyser certaines dimensions du software delivery.',
                    ],
                    [
                        'question' => 'Quelle application de DORA metrics est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'des métriques utilisées pour analyser certaines dimensions du software delivery', 'is_correct' => true],
                            ['choice_text' => 'des métriques CPU uniquement', 'is_correct' => false],
                            ['choice_text' => 'un format de logs', 'is_correct' => false],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, DORA metrics permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à DORA metrics ?',
                        'choices' => [
                            ['choice_text' => 'des métriques utilisées pour analyser certaines dimensions du software delivery', 'is_correct' => true],
                            ['choice_text' => 'des métriques CPU uniquement', 'is_correct' => false],
                            ['choice_text' => 'un format de logs', 'is_correct' => false],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que DORA metrics apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à DORA metrics est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'des métriques utilisées pour analyser certaines dimensions du software delivery', 'is_correct' => true],
                            ['choice_text' => 'des métriques CPU uniquement', 'is_correct' => false],
                            ['choice_text' => 'un format de logs', 'is_correct' => false],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par DORA metrics, car ce mécanisme répond directement à la contrainte opérationnelle.',
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
