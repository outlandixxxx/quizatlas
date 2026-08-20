<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DevOpsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'dev-ops')->firstOrFail();

        $quizzes = [
            [
                'title' => 'DevOps — Beginner — Quiz 1',
                'description' => 'Quiz Beginner couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement DevOps ?',
                        'choices' => [
                            ['choice_text' => 'une culture et un ensemble de pratiques qui rapprochent développement et opérations', 'is_correct' => true],
                            ['choice_text' => 'un langage de programmation', 'is_correct' => false],
                            ['choice_text' => 'un système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'DevOps correspond à une culture et un ensemble de pratiques qui rapprochent développement et opérations.',
                    ],
                    [
                        'question' => 'Quelle application de DevOps est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une culture et un ensemble de pratiques qui rapprochent développement et opérations', 'is_correct' => true],
                            ['choice_text' => 'un langage de programmation', 'is_correct' => false],
                            ['choice_text' => 'un système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, DevOps permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à DevOps ?',
                        'choices' => [
                            ['choice_text' => 'une culture et un ensemble de pratiques qui rapprochent développement et opérations', 'is_correct' => true],
                            ['choice_text' => 'un langage de programmation', 'is_correct' => false],
                            ['choice_text' => 'un système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que DevOps apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à DevOps est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une culture et un ensemble de pratiques qui rapprochent développement et opérations', 'is_correct' => true],
                            ['choice_text' => 'un langage de programmation', 'is_correct' => false],
                            ['choice_text' => 'un système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par DevOps, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Git ?',
                        'choices' => [
                            ['choice_text' => 'un système de version control permettant de suivre les changements du code', 'is_correct' => true],
                            ['choice_text' => 'un orchestrateur', 'is_correct' => false],
                            ['choice_text' => 'un firewall', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                        ],
                        'explanation' => 'Git correspond à un système de version control permettant de suivre les changements du code.',
                    ],
                    [
                        'question' => 'Quelle application de Git est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un système de version control permettant de suivre les changements du code', 'is_correct' => true],
                            ['choice_text' => 'un orchestrateur', 'is_correct' => false],
                            ['choice_text' => 'un firewall', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Git permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Git ?',
                        'choices' => [
                            ['choice_text' => 'un système de version control permettant de suivre les changements du code', 'is_correct' => true],
                            ['choice_text' => 'un orchestrateur', 'is_correct' => false],
                            ['choice_text' => 'un firewall', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Git apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Git est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un système de version control permettant de suivre les changements du code', 'is_correct' => true],
                            ['choice_text' => 'un orchestrateur', 'is_correct' => false],
                            ['choice_text' => 'un firewall', 'is_correct' => false],
                            ['choice_text' => 'un database engine', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Git, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Continuous Integration ?',
                        'choices' => [
                            ['choice_text' => 'intégrer fréquemment les changements et exécuter automatiquement des vérifications', 'is_correct' => true],
                            ['choice_text' => 'déployer sans tests', 'is_correct' => false],
                            ['choice_text' => 'supprimer Git', 'is_correct' => false],
                            ['choice_text' => 'éviter les builds', 'is_correct' => false],
                        ],
                        'explanation' => 'Continuous Integration correspond à intégrer fréquemment les changements et exécuter automatiquement des vérifications.',
                    ],
                    [
                        'question' => 'Quelle application de Continuous Integration est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'intégrer fréquemment les changements et exécuter automatiquement des vérifications', 'is_correct' => true],
                            ['choice_text' => 'déployer sans tests', 'is_correct' => false],
                            ['choice_text' => 'supprimer Git', 'is_correct' => false],
                            ['choice_text' => 'éviter les builds', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Continuous Integration permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Beginner — Quiz 2',
                'description' => 'Quiz Beginner couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Continuous Integration ?',
                        'choices' => [
                            ['choice_text' => 'intégrer fréquemment les changements et exécuter automatiquement des vérifications', 'is_correct' => true],
                            ['choice_text' => 'déployer sans tests', 'is_correct' => false],
                            ['choice_text' => 'supprimer Git', 'is_correct' => false],
                            ['choice_text' => 'éviter les builds', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Continuous Integration apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Continuous Integration est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'intégrer fréquemment les changements et exécuter automatiquement des vérifications', 'is_correct' => true],
                            ['choice_text' => 'déployer sans tests', 'is_correct' => false],
                            ['choice_text' => 'supprimer Git', 'is_correct' => false],
                            ['choice_text' => 'éviter les builds', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Continuous Integration, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Continuous Delivery ?',
                        'choices' => [
                            ['choice_text' => 'maintenir le logiciel dans un état pouvant être livré de manière fiable', 'is_correct' => true],
                            ['choice_text' => 'déployer uniquement une fois par an', 'is_correct' => false],
                            ['choice_text' => 'recompiler manuellement en production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les artifacts', 'is_correct' => false],
                        ],
                        'explanation' => 'Continuous Delivery correspond à maintenir le logiciel dans un état pouvant être livré de manière fiable.',
                    ],
                    [
                        'question' => 'Quelle application de Continuous Delivery est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'maintenir le logiciel dans un état pouvant être livré de manière fiable', 'is_correct' => true],
                            ['choice_text' => 'déployer uniquement une fois par an', 'is_correct' => false],
                            ['choice_text' => 'recompiler manuellement en production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les artifacts', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Continuous Delivery permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Continuous Delivery ?',
                        'choices' => [
                            ['choice_text' => 'maintenir le logiciel dans un état pouvant être livré de manière fiable', 'is_correct' => true],
                            ['choice_text' => 'déployer uniquement une fois par an', 'is_correct' => false],
                            ['choice_text' => 'recompiler manuellement en production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les artifacts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Continuous Delivery apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Continuous Delivery est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'maintenir le logiciel dans un état pouvant être livré de manière fiable', 'is_correct' => true],
                            ['choice_text' => 'déployer uniquement une fois par an', 'is_correct' => false],
                            ['choice_text' => 'recompiler manuellement en production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les artifacts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Continuous Delivery, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement CI/CD pipeline ?',
                        'choices' => [
                            ['choice_text' => 'automatiser des étapes comme build, test et deployment', 'is_correct' => true],
                            ['choice_text' => 'gérer uniquement les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'remplacer les développeurs', 'is_correct' => false],
                            ['choice_text' => 'configurer uniquement DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'CI/CD pipeline correspond à automatiser des étapes comme build, test et deployment.',
                    ],
                    [
                        'question' => 'Quelle application de CI/CD pipeline est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'automatiser des étapes comme build, test et deployment', 'is_correct' => true],
                            ['choice_text' => 'gérer uniquement les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'remplacer les développeurs', 'is_correct' => false],
                            ['choice_text' => 'configurer uniquement DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, CI/CD pipeline permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à CI/CD pipeline ?',
                        'choices' => [
                            ['choice_text' => 'automatiser des étapes comme build, test et deployment', 'is_correct' => true],
                            ['choice_text' => 'gérer uniquement les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'remplacer les développeurs', 'is_correct' => false],
                            ['choice_text' => 'configurer uniquement DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que CI/CD pipeline apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à CI/CD pipeline est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'automatiser des étapes comme build, test et deployment', 'is_correct' => true],
                            ['choice_text' => 'gérer uniquement les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'remplacer les développeurs', 'is_correct' => false],
                            ['choice_text' => 'configurer uniquement DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par CI/CD pipeline, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Beginner — Quiz 3',
                'description' => 'Quiz Beginner couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement artifact ?',
                        'choices' => [
                            ['choice_text' => 'un résultat produit par un build et destiné à être testé ou déployé', 'is_correct' => true],
                            ['choice_text' => 'un compte utilisateur', 'is_correct' => false],
                            ['choice_text' => 'un protocole', 'is_correct' => false],
                            ['choice_text' => 'une branche Git', 'is_correct' => false],
                        ],
                        'explanation' => 'artifact correspond à un résultat produit par un build et destiné à être testé ou déployé.',
                    ],
                    [
                        'question' => 'Quelle application de artifact est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un résultat produit par un build et destiné à être testé ou déployé', 'is_correct' => true],
                            ['choice_text' => 'un compte utilisateur', 'is_correct' => false],
                            ['choice_text' => 'un protocole', 'is_correct' => false],
                            ['choice_text' => 'une branche Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, artifact permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à artifact ?',
                        'choices' => [
                            ['choice_text' => 'un résultat produit par un build et destiné à être testé ou déployé', 'is_correct' => true],
                            ['choice_text' => 'un compte utilisateur', 'is_correct' => false],
                            ['choice_text' => 'un protocole', 'is_correct' => false],
                            ['choice_text' => 'une branche Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que artifact apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à artifact est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un résultat produit par un build et destiné à être testé ou déployé', 'is_correct' => true],
                            ['choice_text' => 'un compte utilisateur', 'is_correct' => false],
                            ['choice_text' => 'un protocole', 'is_correct' => false],
                            ['choice_text' => 'une branche Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par artifact, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Docker ?',
                        'choices' => [
                            ['choice_text' => 'une plateforme permettant notamment de construire et exécuter des containers', 'is_correct' => true],
                            ['choice_text' => 'un système de version control', 'is_correct' => false],
                            ['choice_text' => 'un DNS server', 'is_correct' => false],
                            ['choice_text' => 'un hypervisor uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Docker correspond à une plateforme permettant notamment de construire et exécuter des containers.',
                    ],
                    [
                        'question' => 'Quelle application de Docker est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une plateforme permettant notamment de construire et exécuter des containers', 'is_correct' => true],
                            ['choice_text' => 'un système de version control', 'is_correct' => false],
                            ['choice_text' => 'un DNS server', 'is_correct' => false],
                            ['choice_text' => 'un hypervisor uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Docker permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Docker ?',
                        'choices' => [
                            ['choice_text' => 'une plateforme permettant notamment de construire et exécuter des containers', 'is_correct' => true],
                            ['choice_text' => 'un système de version control', 'is_correct' => false],
                            ['choice_text' => 'un DNS server', 'is_correct' => false],
                            ['choice_text' => 'un hypervisor uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Docker apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Docker est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une plateforme permettant notamment de construire et exécuter des containers', 'is_correct' => true],
                            ['choice_text' => 'un système de version control', 'is_correct' => false],
                            ['choice_text' => 'un DNS server', 'is_correct' => false],
                            ['choice_text' => 'un hypervisor uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Docker, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Dockerfile ?',
                        'choices' => [
                            ['choice_text' => 'un fichier décrivant les étapes de construction d\'une container image', 'is_correct' => true],
                            ['choice_text' => 'un fichier de routing', 'is_correct' => false],
                            ['choice_text' => 'un fichier de permissions Linux', 'is_correct' => false],
                            ['choice_text' => 'un fichier SQL', 'is_correct' => false],
                        ],
                        'explanation' => 'Dockerfile correspond à un fichier décrivant les étapes de construction d\'une container image.',
                    ],
                    [
                        'question' => 'Quelle application de Dockerfile est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un fichier décrivant les étapes de construction d\'une container image', 'is_correct' => true],
                            ['choice_text' => 'un fichier de routing', 'is_correct' => false],
                            ['choice_text' => 'un fichier de permissions Linux', 'is_correct' => false],
                            ['choice_text' => 'un fichier SQL', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Dockerfile permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Beginner — Quiz 4',
                'description' => 'Quiz Beginner couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Dockerfile ?',
                        'choices' => [
                            ['choice_text' => 'un fichier décrivant les étapes de construction d\'une container image', 'is_correct' => true],
                            ['choice_text' => 'un fichier de routing', 'is_correct' => false],
                            ['choice_text' => 'un fichier de permissions Linux', 'is_correct' => false],
                            ['choice_text' => 'un fichier SQL', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Dockerfile apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Dockerfile est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un fichier décrivant les étapes de construction d\'une container image', 'is_correct' => true],
                            ['choice_text' => 'un fichier de routing', 'is_correct' => false],
                            ['choice_text' => 'un fichier de permissions Linux', 'is_correct' => false],
                            ['choice_text' => 'un fichier SQL', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Dockerfile, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement container registry ?',
                        'choices' => [
                            ['choice_text' => 'un service permettant de stocker et distribuer des container images', 'is_correct' => true],
                            ['choice_text' => 'un scheduler', 'is_correct' => false],
                            ['choice_text' => 'un database server', 'is_correct' => false],
                            ['choice_text' => 'un monitoring agent', 'is_correct' => false],
                        ],
                        'explanation' => 'container registry correspond à un service permettant de stocker et distribuer des container images.',
                    ],
                    [
                        'question' => 'Quelle application de container registry est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un service permettant de stocker et distribuer des container images', 'is_correct' => true],
                            ['choice_text' => 'un scheduler', 'is_correct' => false],
                            ['choice_text' => 'un database server', 'is_correct' => false],
                            ['choice_text' => 'un monitoring agent', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, container registry permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à container registry ?',
                        'choices' => [
                            ['choice_text' => 'un service permettant de stocker et distribuer des container images', 'is_correct' => true],
                            ['choice_text' => 'un scheduler', 'is_correct' => false],
                            ['choice_text' => 'un database server', 'is_correct' => false],
                            ['choice_text' => 'un monitoring agent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que container registry apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à container registry est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un service permettant de stocker et distribuer des container images', 'is_correct' => true],
                            ['choice_text' => 'un scheduler', 'is_correct' => false],
                            ['choice_text' => 'un database server', 'is_correct' => false],
                            ['choice_text' => 'un monitoring agent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par container registry, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement Infrastructure as Code ?',
                        'choices' => [
                            ['choice_text' => 'une approche consistant à définir l\'infrastructure de manière versionnée et automatisable', 'is_correct' => true],
                            ['choice_text' => 'une configuration exclusivement manuelle', 'is_correct' => false],
                            ['choice_text' => 'un protocole', 'is_correct' => false],
                            ['choice_text' => 'un format image', 'is_correct' => false],
                        ],
                        'explanation' => 'Infrastructure as Code correspond à une approche consistant à définir l\'infrastructure de manière versionnée et automatisable.',
                    ],
                    [
                        'question' => 'Quelle application de Infrastructure as Code est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une approche consistant à définir l\'infrastructure de manière versionnée et automatisable', 'is_correct' => true],
                            ['choice_text' => 'une configuration exclusivement manuelle', 'is_correct' => false],
                            ['choice_text' => 'un protocole', 'is_correct' => false],
                            ['choice_text' => 'un format image', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Infrastructure as Code permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Infrastructure as Code ?',
                        'choices' => [
                            ['choice_text' => 'une approche consistant à définir l\'infrastructure de manière versionnée et automatisable', 'is_correct' => true],
                            ['choice_text' => 'une configuration exclusivement manuelle', 'is_correct' => false],
                            ['choice_text' => 'un protocole', 'is_correct' => false],
                            ['choice_text' => 'un format image', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Infrastructure as Code apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Infrastructure as Code est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une approche consistant à définir l\'infrastructure de manière versionnée et automatisable', 'is_correct' => true],
                            ['choice_text' => 'une configuration exclusivement manuelle', 'is_correct' => false],
                            ['choice_text' => 'un protocole', 'is_correct' => false],
                            ['choice_text' => 'un format image', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Infrastructure as Code, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Beginner — Quiz 5',
                'description' => 'Quiz Beginner couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement Terraform ?',
                        'choices' => [
                            ['choice_text' => 'un outil couramment utilisé pour Infrastructure as Code', 'is_correct' => true],
                            ['choice_text' => 'un packet analyzer', 'is_correct' => false],
                            ['choice_text' => 'un web server', 'is_correct' => false],
                            ['choice_text' => 'un code editor', 'is_correct' => false],
                        ],
                        'explanation' => 'Terraform correspond à un outil couramment utilisé pour Infrastructure as Code.',
                    ],
                    [
                        'question' => 'Quelle application de Terraform est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un outil couramment utilisé pour Infrastructure as Code', 'is_correct' => true],
                            ['choice_text' => 'un packet analyzer', 'is_correct' => false],
                            ['choice_text' => 'un web server', 'is_correct' => false],
                            ['choice_text' => 'un code editor', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, Terraform permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à Terraform ?',
                        'choices' => [
                            ['choice_text' => 'un outil couramment utilisé pour Infrastructure as Code', 'is_correct' => true],
                            ['choice_text' => 'un packet analyzer', 'is_correct' => false],
                            ['choice_text' => 'un web server', 'is_correct' => false],
                            ['choice_text' => 'un code editor', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que Terraform apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à Terraform est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un outil couramment utilisé pour Infrastructure as Code', 'is_correct' => true],
                            ['choice_text' => 'un packet analyzer', 'is_correct' => false],
                            ['choice_text' => 'un web server', 'is_correct' => false],
                            ['choice_text' => 'un code editor', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par Terraform, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement monitoring ?',
                        'choices' => [
                            ['choice_text' => 'observer l\'état, la santé et les performances d\'un système', 'is_correct' => true],
                            ['choice_text' => 'modifier automatiquement toutes les applications', 'is_correct' => false],
                            ['choice_text' => 'remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'créer des accounts', 'is_correct' => false],
                        ],
                        'explanation' => 'monitoring correspond à observer l\'état, la santé et les performances d\'un système.',
                    ],
                    [
                        'question' => 'Quelle application de monitoring est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'observer l\'état, la santé et les performances d\'un système', 'is_correct' => true],
                            ['choice_text' => 'modifier automatiquement toutes les applications', 'is_correct' => false],
                            ['choice_text' => 'remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'créer des accounts', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, monitoring permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à monitoring ?',
                        'choices' => [
                            ['choice_text' => 'observer l\'état, la santé et les performances d\'un système', 'is_correct' => true],
                            ['choice_text' => 'modifier automatiquement toutes les applications', 'is_correct' => false],
                            ['choice_text' => 'remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'créer des accounts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que monitoring apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à monitoring est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'observer l\'état, la santé et les performances d\'un système', 'is_correct' => true],
                            ['choice_text' => 'modifier automatiquement toutes les applications', 'is_correct' => false],
                            ['choice_text' => 'remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'créer des accounts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par monitoring, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement logs ?',
                        'choices' => [
                            ['choice_text' => 'des traces enregistrant des événements ou activités d\'un système', 'is_correct' => true],
                            ['choice_text' => 'des containers', 'is_correct' => false],
                            ['choice_text' => 'des branches', 'is_correct' => false],
                            ['choice_text' => 'des certificats', 'is_correct' => false],
                        ],
                        'explanation' => 'logs correspond à des traces enregistrant des événements ou activités d\'un système.',
                    ],
                    [
                        'question' => 'Quelle application de logs est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'des traces enregistrant des événements ou activités d\'un système', 'is_correct' => true],
                            ['choice_text' => 'des containers', 'is_correct' => false],
                            ['choice_text' => 'des branches', 'is_correct' => false],
                            ['choice_text' => 'des certificats', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, logs permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Beginner — Quiz 6',
                'description' => 'Quiz Beginner couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à logs ?',
                        'choices' => [
                            ['choice_text' => 'des traces enregistrant des événements ou activités d\'un système', 'is_correct' => true],
                            ['choice_text' => 'des containers', 'is_correct' => false],
                            ['choice_text' => 'des branches', 'is_correct' => false],
                            ['choice_text' => 'des certificats', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que logs apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à logs est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'des traces enregistrant des événements ou activités d\'un système', 'is_correct' => true],
                            ['choice_text' => 'des containers', 'is_correct' => false],
                            ['choice_text' => 'des branches', 'is_correct' => false],
                            ['choice_text' => 'des certificats', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par logs, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement rollback ?',
                        'choices' => [
                            ['choice_text' => 'revenir à une version précédemment stable', 'is_correct' => true],
                            ['choice_text' => 'ajouter une feature', 'is_correct' => false],
                            ['choice_text' => 'supprimer le repository', 'is_correct' => false],
                            ['choice_text' => 'changer le langage', 'is_correct' => false],
                        ],
                        'explanation' => 'rollback correspond à revenir à une version précédemment stable.',
                    ],
                    [
                        'question' => 'Quelle application de rollback est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'revenir à une version précédemment stable', 'is_correct' => true],
                            ['choice_text' => 'ajouter une feature', 'is_correct' => false],
                            ['choice_text' => 'supprimer le repository', 'is_correct' => false],
                            ['choice_text' => 'changer le langage', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, rollback permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à rollback ?',
                        'choices' => [
                            ['choice_text' => 'revenir à une version précédemment stable', 'is_correct' => true],
                            ['choice_text' => 'ajouter une feature', 'is_correct' => false],
                            ['choice_text' => 'supprimer le repository', 'is_correct' => false],
                            ['choice_text' => 'changer le langage', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que rollback apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à rollback est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'revenir à une version précédemment stable', 'is_correct' => true],
                            ['choice_text' => 'ajouter une feature', 'is_correct' => false],
                            ['choice_text' => 'supprimer le repository', 'is_correct' => false],
                            ['choice_text' => 'changer le langage', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par rollback, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement secrets management ?',
                        'choices' => [
                            ['choice_text' => 'gérer les credentials et secrets avec des mécanismes d\'accès contrôlés', 'is_correct' => true],
                            ['choice_text' => 'publier les passwords', 'is_correct' => false],
                            ['choice_text' => 'stocker les tokens dans Git', 'is_correct' => false],
                            ['choice_text' => 'désactiver authentication', 'is_correct' => false],
                        ],
                        'explanation' => 'secrets management correspond à gérer les credentials et secrets avec des mécanismes d\'accès contrôlés.',
                    ],
                    [
                        'question' => 'Quelle application de secrets management est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'gérer les credentials et secrets avec des mécanismes d\'accès contrôlés', 'is_correct' => true],
                            ['choice_text' => 'publier les passwords', 'is_correct' => false],
                            ['choice_text' => 'stocker les tokens dans Git', 'is_correct' => false],
                            ['choice_text' => 'désactiver authentication', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, secrets management permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à secrets management ?',
                        'choices' => [
                            ['choice_text' => 'gérer les credentials et secrets avec des mécanismes d\'accès contrôlés', 'is_correct' => true],
                            ['choice_text' => 'publier les passwords', 'is_correct' => false],
                            ['choice_text' => 'stocker les tokens dans Git', 'is_correct' => false],
                            ['choice_text' => 'désactiver authentication', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que secrets management apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à secrets management est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'gérer les credentials et secrets avec des mécanismes d\'accès contrôlés', 'is_correct' => true],
                            ['choice_text' => 'publier les passwords', 'is_correct' => false],
                            ['choice_text' => 'stocker les tokens dans Git', 'is_correct' => false],
                            ['choice_text' => 'désactiver authentication', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par secrets management, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Beginner — Quiz 7',
                'description' => 'Quiz Beginner couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement automation ?',
                        'choices' => [
                            ['choice_text' => 'utiliser des outils ou scripts pour exécuter des tâches de façon reproductible', 'is_correct' => true],
                            ['choice_text' => 'augmenter le travail manuel', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'éviter toute standardisation', 'is_correct' => false],
                        ],
                        'explanation' => 'automation correspond à utiliser des outils ou scripts pour exécuter des tâches de façon reproductible.',
                    ],
                    [
                        'question' => 'Quelle application de automation est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'utiliser des outils ou scripts pour exécuter des tâches de façon reproductible', 'is_correct' => true],
                            ['choice_text' => 'augmenter le travail manuel', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'éviter toute standardisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, automation permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à automation ?',
                        'choices' => [
                            ['choice_text' => 'utiliser des outils ou scripts pour exécuter des tâches de façon reproductible', 'is_correct' => true],
                            ['choice_text' => 'augmenter le travail manuel', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'éviter toute standardisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que automation apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à automation est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'utiliser des outils ou scripts pour exécuter des tâches de façon reproductible', 'is_correct' => true],
                            ['choice_text' => 'augmenter le travail manuel', 'is_correct' => false],
                            ['choice_text' => 'supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'éviter toute standardisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par automation, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement deployment ?',
                        'choices' => [
                            ['choice_text' => 'rendre une version disponible dans un environnement', 'is_correct' => true],
                            ['choice_text' => 'créer une branche', 'is_correct' => false],
                            ['choice_text' => 'écrire une documentation', 'is_correct' => false],
                            ['choice_text' => 'modifier un DNS record uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'deployment correspond à rendre une version disponible dans un environnement.',
                    ],
                    [
                        'question' => 'Quelle application de deployment est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'rendre une version disponible dans un environnement', 'is_correct' => true],
                            ['choice_text' => 'créer une branche', 'is_correct' => false],
                            ['choice_text' => 'écrire une documentation', 'is_correct' => false],
                            ['choice_text' => 'modifier un DNS record uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, deployment permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à deployment ?',
                        'choices' => [
                            ['choice_text' => 'rendre une version disponible dans un environnement', 'is_correct' => true],
                            ['choice_text' => 'créer une branche', 'is_correct' => false],
                            ['choice_text' => 'écrire une documentation', 'is_correct' => false],
                            ['choice_text' => 'modifier un DNS record uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que deployment apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à deployment est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'rendre une version disponible dans un environnement', 'is_correct' => true],
                            ['choice_text' => 'créer une branche', 'is_correct' => false],
                            ['choice_text' => 'écrire une documentation', 'is_correct' => false],
                            ['choice_text' => 'modifier un DNS record uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par deployment, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement observability ?',
                        'choices' => [
                            ['choice_text' => 'comprendre l\'état interne d\'un système à partir de logs, metrics et traces', 'is_correct' => true],
                            ['choice_text' => 'supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'mesurer uniquement le CPU', 'is_correct' => false],
                            ['choice_text' => 'gérer les users', 'is_correct' => false],
                        ],
                        'explanation' => 'observability correspond à comprendre l\'état interne d\'un système à partir de logs, metrics et traces.',
                    ],
                    [
                        'question' => 'Quelle application de observability est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'comprendre l\'état interne d\'un système à partir de logs, metrics et traces', 'is_correct' => true],
                            ['choice_text' => 'supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'mesurer uniquement le CPU', 'is_correct' => false],
                            ['choice_text' => 'gérer les users', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, observability permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Beginner — Quiz 8',
                'description' => 'Quiz Beginner couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à observability ?',
                        'choices' => [
                            ['choice_text' => 'comprendre l\'état interne d\'un système à partir de logs, metrics et traces', 'is_correct' => true],
                            ['choice_text' => 'supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'mesurer uniquement le CPU', 'is_correct' => false],
                            ['choice_text' => 'gérer les users', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que observability apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à observability est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'comprendre l\'état interne d\'un système à partir de logs, metrics et traces', 'is_correct' => true],
                            ['choice_text' => 'supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'mesurer uniquement le CPU', 'is_correct' => false],
                            ['choice_text' => 'gérer les users', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par observability, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement health check ?',
                        'choices' => [
                            ['choice_text' => 'vérifier automatiquement qu\'un service est opérationnel', 'is_correct' => true],
                            ['choice_text' => 'créer une image', 'is_correct' => false],
                            ['choice_text' => 'modifier un commit', 'is_correct' => false],
                            ['choice_text' => 'configurer une branche', 'is_correct' => false],
                        ],
                        'explanation' => 'health check correspond à vérifier automatiquement qu\'un service est opérationnel.',
                    ],
                    [
                        'question' => 'Quelle application de health check est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'vérifier automatiquement qu\'un service est opérationnel', 'is_correct' => true],
                            ['choice_text' => 'créer une image', 'is_correct' => false],
                            ['choice_text' => 'modifier un commit', 'is_correct' => false],
                            ['choice_text' => 'configurer une branche', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, health check permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à health check ?',
                        'choices' => [
                            ['choice_text' => 'vérifier automatiquement qu\'un service est opérationnel', 'is_correct' => true],
                            ['choice_text' => 'créer une image', 'is_correct' => false],
                            ['choice_text' => 'modifier un commit', 'is_correct' => false],
                            ['choice_text' => 'configurer une branche', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que health check apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à health check est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'vérifier automatiquement qu\'un service est opérationnel', 'is_correct' => true],
                            ['choice_text' => 'créer une image', 'is_correct' => false],
                            ['choice_text' => 'modifier un commit', 'is_correct' => false],
                            ['choice_text' => 'configurer une branche', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par health check, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement backup ?',
                        'choices' => [
                            ['choice_text' => 'une copie de données utilisée notamment pour restaurer après une perte', 'is_correct' => true],
                            ['choice_text' => 'un process', 'is_correct' => false],
                            ['choice_text' => 'un container', 'is_correct' => false],
                            ['choice_text' => 'un package manager', 'is_correct' => false],
                        ],
                        'explanation' => 'backup correspond à une copie de données utilisée notamment pour restaurer après une perte.',
                    ],
                    [
                        'question' => 'Quelle application de backup est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une copie de données utilisée notamment pour restaurer après une perte', 'is_correct' => true],
                            ['choice_text' => 'un process', 'is_correct' => false],
                            ['choice_text' => 'un container', 'is_correct' => false],
                            ['choice_text' => 'un package manager', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, backup permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à backup ?',
                        'choices' => [
                            ['choice_text' => 'une copie de données utilisée notamment pour restaurer après une perte', 'is_correct' => true],
                            ['choice_text' => 'un process', 'is_correct' => false],
                            ['choice_text' => 'un container', 'is_correct' => false],
                            ['choice_text' => 'un package manager', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que backup apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à backup est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une copie de données utilisée notamment pour restaurer après une perte', 'is_correct' => true],
                            ['choice_text' => 'un process', 'is_correct' => false],
                            ['choice_text' => 'un container', 'is_correct' => false],
                            ['choice_text' => 'un package manager', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par backup, car ce mécanisme répond directement à la contrainte opérationnelle.',
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
