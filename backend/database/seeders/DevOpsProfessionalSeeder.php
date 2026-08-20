<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DevOpsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'dev-ops')->firstOrFail();

        $quizzes = [
            [
                'title' => 'DevOps — Professional — Quiz 1',
                'description' => 'Quiz Professional couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Professional',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement multi-window burn rate ?',
                        'choices' => [
                            ['choice_text' => 'analyser la vitesse de consommation d\'un error budget sur plusieurs horizons temporels', 'is_correct' => true],
                            ['choice_text' => 'mesurer la RAM', 'is_correct' => false],
                            ['choice_text' => 'calculer un checksum', 'is_correct' => false],
                            ['choice_text' => 'planifier les commits', 'is_correct' => false],
                        ],
                        'explanation' => 'multi-window burn rate correspond à analyser la vitesse de consommation d\'un error budget sur plusieurs horizons temporels.',
                    ],
                    [
                        'question' => 'Quelle application de multi-window burn rate est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'analyser la vitesse de consommation d\'un error budget sur plusieurs horizons temporels', 'is_correct' => true],
                            ['choice_text' => 'mesurer la RAM', 'is_correct' => false],
                            ['choice_text' => 'calculer un checksum', 'is_correct' => false],
                            ['choice_text' => 'planifier les commits', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, multi-window burn rate permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à multi-window burn rate ?',
                        'choices' => [
                            ['choice_text' => 'analyser la vitesse de consommation d\'un error budget sur plusieurs horizons temporels', 'is_correct' => true],
                            ['choice_text' => 'mesurer la RAM', 'is_correct' => false],
                            ['choice_text' => 'calculer un checksum', 'is_correct' => false],
                            ['choice_text' => 'planifier les commits', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que multi-window burn rate apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à multi-window burn rate est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'analyser la vitesse de consommation d\'un error budget sur plusieurs horizons temporels', 'is_correct' => true],
                            ['choice_text' => 'mesurer la RAM', 'is_correct' => false],
                            ['choice_text' => 'calculer un checksum', 'is_correct' => false],
                            ['choice_text' => 'planifier les commits', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par multi-window burn rate, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement failure domain ?',
                        'choices' => [
                            ['choice_text' => 'une zone dans laquelle une cause commune peut provoquer plusieurs failures', 'is_correct' => true],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un package registry', 'is_correct' => false],
                            ['choice_text' => 'une metric', 'is_correct' => false],
                        ],
                        'explanation' => 'failure domain correspond à une zone dans laquelle une cause commune peut provoquer plusieurs failures.',
                    ],
                    [
                        'question' => 'Quelle application de failure domain est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une zone dans laquelle une cause commune peut provoquer plusieurs failures', 'is_correct' => true],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un package registry', 'is_correct' => false],
                            ['choice_text' => 'une metric', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, failure domain permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à failure domain ?',
                        'choices' => [
                            ['choice_text' => 'une zone dans laquelle une cause commune peut provoquer plusieurs failures', 'is_correct' => true],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un package registry', 'is_correct' => false],
                            ['choice_text' => 'une metric', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que failure domain apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à failure domain est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une zone dans laquelle une cause commune peut provoquer plusieurs failures', 'is_correct' => true],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un package registry', 'is_correct' => false],
                            ['choice_text' => 'une metric', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par failure domain, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement game day ?',
                        'choices' => [
                            ['choice_text' => 'un exercice contrôlé destiné à tester la réponse d\'une organisation à des scenarios de failure', 'is_correct' => true],
                            ['choice_text' => 'une release normale', 'is_correct' => false],
                            ['choice_text' => 'un backup automatique', 'is_correct' => false],
                            ['choice_text' => 'un code review', 'is_correct' => false],
                        ],
                        'explanation' => 'game day correspond à un exercice contrôlé destiné à tester la réponse d\'une organisation à des scenarios de failure.',
                    ],
                    [
                        'question' => 'Quelle application de game day est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un exercice contrôlé destiné à tester la réponse d\'une organisation à des scenarios de failure', 'is_correct' => true],
                            ['choice_text' => 'une release normale', 'is_correct' => false],
                            ['choice_text' => 'un backup automatique', 'is_correct' => false],
                            ['choice_text' => 'un code review', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, game day permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Professional — Quiz 2',
                'description' => 'Quiz Professional couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Professional',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à game day ?',
                        'choices' => [
                            ['choice_text' => 'un exercice contrôlé destiné à tester la réponse d\'une organisation à des scenarios de failure', 'is_correct' => true],
                            ['choice_text' => 'une release normale', 'is_correct' => false],
                            ['choice_text' => 'un backup automatique', 'is_correct' => false],
                            ['choice_text' => 'un code review', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que game day apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à game day est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un exercice contrôlé destiné à tester la réponse d\'une organisation à des scenarios de failure', 'is_correct' => true],
                            ['choice_text' => 'une release normale', 'is_correct' => false],
                            ['choice_text' => 'un backup automatique', 'is_correct' => false],
                            ['choice_text' => 'un code review', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par game day, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement disaster recovery ?',
                        'choices' => [
                            ['choice_text' => 'les stratégies et procédures permettant de restaurer des services après un incident majeur', 'is_correct' => true],
                            ['choice_text' => 'un build process', 'is_correct' => false],
                            ['choice_text' => 'un Git workflow', 'is_correct' => false],
                            ['choice_text' => 'un CSS framework', 'is_correct' => false],
                        ],
                        'explanation' => 'disaster recovery correspond à les stratégies et procédures permettant de restaurer des services après un incident majeur.',
                    ],
                    [
                        'question' => 'Quelle application de disaster recovery est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'les stratégies et procédures permettant de restaurer des services après un incident majeur', 'is_correct' => true],
                            ['choice_text' => 'un build process', 'is_correct' => false],
                            ['choice_text' => 'un Git workflow', 'is_correct' => false],
                            ['choice_text' => 'un CSS framework', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, disaster recovery permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à disaster recovery ?',
                        'choices' => [
                            ['choice_text' => 'les stratégies et procédures permettant de restaurer des services après un incident majeur', 'is_correct' => true],
                            ['choice_text' => 'un build process', 'is_correct' => false],
                            ['choice_text' => 'un Git workflow', 'is_correct' => false],
                            ['choice_text' => 'un CSS framework', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que disaster recovery apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à disaster recovery est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'les stratégies et procédures permettant de restaurer des services après un incident majeur', 'is_correct' => true],
                            ['choice_text' => 'un build process', 'is_correct' => false],
                            ['choice_text' => 'un Git workflow', 'is_correct' => false],
                            ['choice_text' => 'un CSS framework', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par disaster recovery, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement RPO ?',
                        'choices' => [
                            ['choice_text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['choice_text' => 'le temps de recovery', 'is_correct' => false],
                            ['choice_text' => 'le CPU usage', 'is_correct' => false],
                            ['choice_text' => 'le nombre de users', 'is_correct' => false],
                        ],
                        'explanation' => 'RPO correspond à la quantité maximale de données qu\'une organisation accepte de perdre.',
                    ],
                    [
                        'question' => 'Quelle application de RPO est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['choice_text' => 'le temps de recovery', 'is_correct' => false],
                            ['choice_text' => 'le CPU usage', 'is_correct' => false],
                            ['choice_text' => 'le nombre de users', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, RPO permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à RPO ?',
                        'choices' => [
                            ['choice_text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['choice_text' => 'le temps de recovery', 'is_correct' => false],
                            ['choice_text' => 'le CPU usage', 'is_correct' => false],
                            ['choice_text' => 'le nombre de users', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que RPO apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à RPO est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'la quantité maximale de données qu\'une organisation accepte de perdre', 'is_correct' => true],
                            ['choice_text' => 'le temps de recovery', 'is_correct' => false],
                            ['choice_text' => 'le CPU usage', 'is_correct' => false],
                            ['choice_text' => 'le nombre de users', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par RPO, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Professional — Quiz 3',
                'description' => 'Quiz Professional couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Professional',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement RTO ?',
                        'choices' => [
                            ['choice_text' => 'la durée cible maximale pour restaurer un service', 'is_correct' => true],
                            ['choice_text' => 'la quantité de données perdue', 'is_correct' => false],
                            ['choice_text' => 'la taille d\'un artifact', 'is_correct' => false],
                            ['choice_text' => 'la latency réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'RTO correspond à la durée cible maximale pour restaurer un service.',
                    ],
                    [
                        'question' => 'Quelle application de RTO est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'la durée cible maximale pour restaurer un service', 'is_correct' => true],
                            ['choice_text' => 'la quantité de données perdue', 'is_correct' => false],
                            ['choice_text' => 'la taille d\'un artifact', 'is_correct' => false],
                            ['choice_text' => 'la latency réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, RTO permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à RTO ?',
                        'choices' => [
                            ['choice_text' => 'la durée cible maximale pour restaurer un service', 'is_correct' => true],
                            ['choice_text' => 'la quantité de données perdue', 'is_correct' => false],
                            ['choice_text' => 'la taille d\'un artifact', 'is_correct' => false],
                            ['choice_text' => 'la latency réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que RTO apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à RTO est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'la durée cible maximale pour restaurer un service', 'is_correct' => true],
                            ['choice_text' => 'la quantité de données perdue', 'is_correct' => false],
                            ['choice_text' => 'la taille d\'un artifact', 'is_correct' => false],
                            ['choice_text' => 'la latency réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par RTO, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement MTTR ?',
                        'choices' => [
                            ['choice_text' => 'le temps moyen nécessaire pour restaurer ou réparer un service après une failure', 'is_correct' => true],
                            ['choice_text' => 'le temps de build uniquement', 'is_correct' => false],
                            ['choice_text' => 'le nombre de releases', 'is_correct' => false],
                            ['choice_text' => 'le nombre de branches', 'is_correct' => false],
                        ],
                        'explanation' => 'MTTR correspond à le temps moyen nécessaire pour restaurer ou réparer un service après une failure.',
                    ],
                    [
                        'question' => 'Quelle application de MTTR est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'le temps moyen nécessaire pour restaurer ou réparer un service après une failure', 'is_correct' => true],
                            ['choice_text' => 'le temps de build uniquement', 'is_correct' => false],
                            ['choice_text' => 'le nombre de releases', 'is_correct' => false],
                            ['choice_text' => 'le nombre de branches', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, MTTR permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à MTTR ?',
                        'choices' => [
                            ['choice_text' => 'le temps moyen nécessaire pour restaurer ou réparer un service après une failure', 'is_correct' => true],
                            ['choice_text' => 'le temps de build uniquement', 'is_correct' => false],
                            ['choice_text' => 'le nombre de releases', 'is_correct' => false],
                            ['choice_text' => 'le nombre de branches', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que MTTR apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à MTTR est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'le temps moyen nécessaire pour restaurer ou réparer un service après une failure', 'is_correct' => true],
                            ['choice_text' => 'le temps de build uniquement', 'is_correct' => false],
                            ['choice_text' => 'le nombre de releases', 'is_correct' => false],
                            ['choice_text' => 'le nombre de branches', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par MTTR, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement supply-chain security ?',
                        'choices' => [
                            ['choice_text' => 'la sécurité des dependencies, build tools, artifacts et processus utilisés pour livrer le logiciel', 'is_correct' => true],
                            ['choice_text' => 'la sécurité d\'un seul endpoint', 'is_correct' => false],
                            ['choice_text' => 'le style du code', 'is_correct' => false],
                            ['choice_text' => 'la gestion d\'un seul user', 'is_correct' => false],
                        ],
                        'explanation' => 'supply-chain security correspond à la sécurité des dependencies, build tools, artifacts et processus utilisés pour livrer le logiciel.',
                    ],
                    [
                        'question' => 'Quelle application de supply-chain security est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'la sécurité des dependencies, build tools, artifacts et processus utilisés pour livrer le logiciel', 'is_correct' => true],
                            ['choice_text' => 'la sécurité d\'un seul endpoint', 'is_correct' => false],
                            ['choice_text' => 'le style du code', 'is_correct' => false],
                            ['choice_text' => 'la gestion d\'un seul user', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, supply-chain security permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Professional — Quiz 4',
                'description' => 'Quiz Professional couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Professional',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à supply-chain security ?',
                        'choices' => [
                            ['choice_text' => 'la sécurité des dependencies, build tools, artifacts et processus utilisés pour livrer le logiciel', 'is_correct' => true],
                            ['choice_text' => 'la sécurité d\'un seul endpoint', 'is_correct' => false],
                            ['choice_text' => 'le style du code', 'is_correct' => false],
                            ['choice_text' => 'la gestion d\'un seul user', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que supply-chain security apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à supply-chain security est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'la sécurité des dependencies, build tools, artifacts et processus utilisés pour livrer le logiciel', 'is_correct' => true],
                            ['choice_text' => 'la sécurité d\'un seul endpoint', 'is_correct' => false],
                            ['choice_text' => 'le style du code', 'is_correct' => false],
                            ['choice_text' => 'la gestion d\'un seul user', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par supply-chain security, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement SBOM ?',
                        'choices' => [
                            ['choice_text' => 'un inventaire exploitable des composants présents dans un logiciel ou artifact', 'is_correct' => true],
                            ['choice_text' => 'un router configuration', 'is_correct' => false],
                            ['choice_text' => 'un deployment script', 'is_correct' => false],
                            ['choice_text' => 'une métrique CPU', 'is_correct' => false],
                        ],
                        'explanation' => 'SBOM correspond à un inventaire exploitable des composants présents dans un logiciel ou artifact.',
                    ],
                    [
                        'question' => 'Quelle application de SBOM est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un inventaire exploitable des composants présents dans un logiciel ou artifact', 'is_correct' => true],
                            ['choice_text' => 'un router configuration', 'is_correct' => false],
                            ['choice_text' => 'un deployment script', 'is_correct' => false],
                            ['choice_text' => 'une métrique CPU', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, SBOM permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à SBOM ?',
                        'choices' => [
                            ['choice_text' => 'un inventaire exploitable des composants présents dans un logiciel ou artifact', 'is_correct' => true],
                            ['choice_text' => 'un router configuration', 'is_correct' => false],
                            ['choice_text' => 'un deployment script', 'is_correct' => false],
                            ['choice_text' => 'une métrique CPU', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que SBOM apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à SBOM est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un inventaire exploitable des composants présents dans un logiciel ou artifact', 'is_correct' => true],
                            ['choice_text' => 'un router configuration', 'is_correct' => false],
                            ['choice_text' => 'un deployment script', 'is_correct' => false],
                            ['choice_text' => 'une métrique CPU', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par SBOM, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement artifact provenance ?',
                        'choices' => [
                            ['choice_text' => 'les informations retraçant l\'origine et le processus de production d\'un artifact', 'is_correct' => true],
                            ['choice_text' => 'une IP address', 'is_correct' => false],
                            ['choice_text' => 'un Docker port', 'is_correct' => false],
                            ['choice_text' => 'un Git user', 'is_correct' => false],
                        ],
                        'explanation' => 'artifact provenance correspond à les informations retraçant l\'origine et le processus de production d\'un artifact.',
                    ],
                    [
                        'question' => 'Quelle application de artifact provenance est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'les informations retraçant l\'origine et le processus de production d\'un artifact', 'is_correct' => true],
                            ['choice_text' => 'une IP address', 'is_correct' => false],
                            ['choice_text' => 'un Docker port', 'is_correct' => false],
                            ['choice_text' => 'un Git user', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, artifact provenance permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à artifact provenance ?',
                        'choices' => [
                            ['choice_text' => 'les informations retraçant l\'origine et le processus de production d\'un artifact', 'is_correct' => true],
                            ['choice_text' => 'une IP address', 'is_correct' => false],
                            ['choice_text' => 'un Docker port', 'is_correct' => false],
                            ['choice_text' => 'un Git user', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que artifact provenance apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à artifact provenance est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'les informations retraçant l\'origine et le processus de production d\'un artifact', 'is_correct' => true],
                            ['choice_text' => 'une IP address', 'is_correct' => false],
                            ['choice_text' => 'un Docker port', 'is_correct' => false],
                            ['choice_text' => 'un Git user', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par artifact provenance, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Professional — Quiz 5',
                'description' => 'Quiz Professional couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Professional',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement ephemeral credentials ?',
                        'choices' => [
                            ['choice_text' => 'des credentials temporaires dont la durée de vie est limitée', 'is_correct' => true],
                            ['choice_text' => 'des passwords partagés', 'is_correct' => false],
                            ['choice_text' => 'des secrets permanents', 'is_correct' => false],
                            ['choice_text' => 'un token public', 'is_correct' => false],
                        ],
                        'explanation' => 'ephemeral credentials correspond à des credentials temporaires dont la durée de vie est limitée.',
                    ],
                    [
                        'question' => 'Quelle application de ephemeral credentials est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'des credentials temporaires dont la durée de vie est limitée', 'is_correct' => true],
                            ['choice_text' => 'des passwords partagés', 'is_correct' => false],
                            ['choice_text' => 'des secrets permanents', 'is_correct' => false],
                            ['choice_text' => 'un token public', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, ephemeral credentials permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à ephemeral credentials ?',
                        'choices' => [
                            ['choice_text' => 'des credentials temporaires dont la durée de vie est limitée', 'is_correct' => true],
                            ['choice_text' => 'des passwords partagés', 'is_correct' => false],
                            ['choice_text' => 'des secrets permanents', 'is_correct' => false],
                            ['choice_text' => 'un token public', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que ephemeral credentials apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à ephemeral credentials est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'des credentials temporaires dont la durée de vie est limitée', 'is_correct' => true],
                            ['choice_text' => 'des passwords partagés', 'is_correct' => false],
                            ['choice_text' => 'des secrets permanents', 'is_correct' => false],
                            ['choice_text' => 'un token public', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par ephemeral credentials, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement two-person control ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle exigeant la validation ou participation de deux rôles pour une opération critique', 'is_correct' => true],
                            ['choice_text' => 'un compte partagé', 'is_correct' => false],
                            ['choice_text' => 'un accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'une approval automatique unique', 'is_correct' => false],
                        ],
                        'explanation' => 'two-person control correspond à un contrôle exigeant la validation ou participation de deux rôles pour une opération critique.',
                    ],
                    [
                        'question' => 'Quelle application de two-person control est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle exigeant la validation ou participation de deux rôles pour une opération critique', 'is_correct' => true],
                            ['choice_text' => 'un compte partagé', 'is_correct' => false],
                            ['choice_text' => 'un accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'une approval automatique unique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, two-person control permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à two-person control ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle exigeant la validation ou participation de deux rôles pour une opération critique', 'is_correct' => true],
                            ['choice_text' => 'un compte partagé', 'is_correct' => false],
                            ['choice_text' => 'un accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'une approval automatique unique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que two-person control apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à two-person control est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle exigeant la validation ou participation de deux rôles pour une opération critique', 'is_correct' => true],
                            ['choice_text' => 'un compte partagé', 'is_correct' => false],
                            ['choice_text' => 'un accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'une approval automatique unique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par two-person control, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement platform engineering ?',
                        'choices' => [
                            ['choice_text' => 'une approche consistant à construire une plateforme interne self-service pour les équipes de développement', 'is_correct' => true],
                            ['choice_text' => 'remplacer toutes les équipes', 'is_correct' => false],
                            ['choice_text' => 'gérer seulement DNS', 'is_correct' => false],
                            ['choice_text' => 'supprimer DevOps', 'is_correct' => false],
                        ],
                        'explanation' => 'platform engineering correspond à une approche consistant à construire une plateforme interne self-service pour les équipes de développement.',
                    ],
                    [
                        'question' => 'Quelle application de platform engineering est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'une approche consistant à construire une plateforme interne self-service pour les équipes de développement', 'is_correct' => true],
                            ['choice_text' => 'remplacer toutes les équipes', 'is_correct' => false],
                            ['choice_text' => 'gérer seulement DNS', 'is_correct' => false],
                            ['choice_text' => 'supprimer DevOps', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, platform engineering permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Professional — Quiz 6',
                'description' => 'Quiz Professional couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Professional',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à platform engineering ?',
                        'choices' => [
                            ['choice_text' => 'une approche consistant à construire une plateforme interne self-service pour les équipes de développement', 'is_correct' => true],
                            ['choice_text' => 'remplacer toutes les équipes', 'is_correct' => false],
                            ['choice_text' => 'gérer seulement DNS', 'is_correct' => false],
                            ['choice_text' => 'supprimer DevOps', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que platform engineering apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à platform engineering est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'une approche consistant à construire une plateforme interne self-service pour les équipes de développement', 'is_correct' => true],
                            ['choice_text' => 'remplacer toutes les équipes', 'is_correct' => false],
                            ['choice_text' => 'gérer seulement DNS', 'is_correct' => false],
                            ['choice_text' => 'supprimer DevOps', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par platform engineering, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement golden path ?',
                        'choices' => [
                            ['choice_text' => 'un workflow recommandé, supporté et standardisé pour un cas courant', 'is_correct' => true],
                            ['choice_text' => 'une obligation absolue sans exception', 'is_correct' => false],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un server physique', 'is_correct' => false],
                        ],
                        'explanation' => 'golden path correspond à un workflow recommandé, supporté et standardisé pour un cas courant.',
                    ],
                    [
                        'question' => 'Quelle application de golden path est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un workflow recommandé, supporté et standardisé pour un cas courant', 'is_correct' => true],
                            ['choice_text' => 'une obligation absolue sans exception', 'is_correct' => false],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un server physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, golden path permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à golden path ?',
                        'choices' => [
                            ['choice_text' => 'un workflow recommandé, supporté et standardisé pour un cas courant', 'is_correct' => true],
                            ['choice_text' => 'une obligation absolue sans exception', 'is_correct' => false],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un server physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que golden path apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à golden path est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un workflow recommandé, supporté et standardisé pour un cas courant', 'is_correct' => true],
                            ['choice_text' => 'une obligation absolue sans exception', 'is_correct' => false],
                            ['choice_text' => 'un Git branch', 'is_correct' => false],
                            ['choice_text' => 'un server physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par golden path, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement developer experience ?',
                        'choices' => [
                            ['choice_text' => 'la qualité de l\'expérience des développeurs lors de la construction, livraison et maintenance des services', 'is_correct' => true],
                            ['choice_text' => 'la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'la taille du repository', 'is_correct' => false],
                            ['choice_text' => 'le nombre de servers', 'is_correct' => false],
                        ],
                        'explanation' => 'developer experience correspond à la qualité de l\'expérience des développeurs lors de la construction, livraison et maintenance des services.',
                    ],
                    [
                        'question' => 'Quelle application de developer experience est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'la qualité de l\'expérience des développeurs lors de la construction, livraison et maintenance des services', 'is_correct' => true],
                            ['choice_text' => 'la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'la taille du repository', 'is_correct' => false],
                            ['choice_text' => 'le nombre de servers', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, developer experience permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à developer experience ?',
                        'choices' => [
                            ['choice_text' => 'la qualité de l\'expérience des développeurs lors de la construction, livraison et maintenance des services', 'is_correct' => true],
                            ['choice_text' => 'la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'la taille du repository', 'is_correct' => false],
                            ['choice_text' => 'le nombre de servers', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que developer experience apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à developer experience est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'la qualité de l\'expérience des développeurs lors de la construction, livraison et maintenance des services', 'is_correct' => true],
                            ['choice_text' => 'la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'la taille du repository', 'is_correct' => false],
                            ['choice_text' => 'le nombre de servers', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par developer experience, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Professional — Quiz 7',
                'description' => 'Quiz Professional couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Professional',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel énoncé décrit correctement service catalog ?',
                        'choices' => [
                            ['choice_text' => 'un registre présentant services, owners, dépendances et informations opérationnelles', 'is_correct' => true],
                            ['choice_text' => 'un container image', 'is_correct' => false],
                            ['choice_text' => 'un source file', 'is_correct' => false],
                            ['choice_text' => 'un DNS query', 'is_correct' => false],
                        ],
                        'explanation' => 'service catalog correspond à un registre présentant services, owners, dépendances et informations opérationnelles.',
                    ],
                    [
                        'question' => 'Quelle application de service catalog est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un registre présentant services, owners, dépendances et informations opérationnelles', 'is_correct' => true],
                            ['choice_text' => 'un container image', 'is_correct' => false],
                            ['choice_text' => 'un source file', 'is_correct' => false],
                            ['choice_text' => 'un DNS query', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, service catalog permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à service catalog ?',
                        'choices' => [
                            ['choice_text' => 'un registre présentant services, owners, dépendances et informations opérationnelles', 'is_correct' => true],
                            ['choice_text' => 'un container image', 'is_correct' => false],
                            ['choice_text' => 'un source file', 'is_correct' => false],
                            ['choice_text' => 'un DNS query', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que service catalog apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à service catalog est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un registre présentant services, owners, dépendances et informations opérationnelles', 'is_correct' => true],
                            ['choice_text' => 'un container image', 'is_correct' => false],
                            ['choice_text' => 'un source file', 'is_correct' => false],
                            ['choice_text' => 'un DNS query', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par service catalog, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement architecture fitness function ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle automatisé vérifiant qu\'une propriété architecturale importante reste respectée', 'is_correct' => true],
                            ['choice_text' => 'un unit test métier uniquement', 'is_correct' => false],
                            ['choice_text' => 'un firewall', 'is_correct' => false],
                            ['choice_text' => 'un backup', 'is_correct' => false],
                        ],
                        'explanation' => 'architecture fitness function correspond à un contrôle automatisé vérifiant qu\'une propriété architecturale importante reste respectée.',
                    ],
                    [
                        'question' => 'Quelle application de architecture fitness function est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle automatisé vérifiant qu\'une propriété architecturale importante reste respectée', 'is_correct' => true],
                            ['choice_text' => 'un unit test métier uniquement', 'is_correct' => false],
                            ['choice_text' => 'un firewall', 'is_correct' => false],
                            ['choice_text' => 'un backup', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, architecture fitness function permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à architecture fitness function ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle automatisé vérifiant qu\'une propriété architecturale importante reste respectée', 'is_correct' => true],
                            ['choice_text' => 'un unit test métier uniquement', 'is_correct' => false],
                            ['choice_text' => 'un firewall', 'is_correct' => false],
                            ['choice_text' => 'un backup', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que architecture fitness function apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à architecture fitness function est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un contrôle automatisé vérifiant qu\'une propriété architecturale importante reste respectée', 'is_correct' => true],
                            ['choice_text' => 'un unit test métier uniquement', 'is_correct' => false],
                            ['choice_text' => 'un firewall', 'is_correct' => false],
                            ['choice_text' => 'un backup', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par architecture fitness function, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement ADR ?',
                        'choices' => [
                            ['choice_text' => 'un document conservant contexte, décision et conséquences d\'un choix architectural', 'is_correct' => true],
                            ['choice_text' => 'un artifact binaire', 'is_correct' => false],
                            ['choice_text' => 'un secret', 'is_correct' => false],
                            ['choice_text' => 'un user account', 'is_correct' => false],
                        ],
                        'explanation' => 'ADR correspond à un document conservant contexte, décision et conséquences d\'un choix architectural.',
                    ],
                    [
                        'question' => 'Quelle application de ADR est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'un document conservant contexte, décision et conséquences d\'un choix architectural', 'is_correct' => true],
                            ['choice_text' => 'un artifact binaire', 'is_correct' => false],
                            ['choice_text' => 'un secret', 'is_correct' => false],
                            ['choice_text' => 'un user account', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, ADR permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                ],
            ],
            [
                'title' => 'DevOps — Professional — Quiz 8',
                'description' => 'Quiz Professional couvrant des concepts de DevOps, automation, delivery, security et operations.',
                'difficulty' => 'Professional',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à ADR ?',
                        'choices' => [
                            ['choice_text' => 'un document conservant contexte, décision et conséquences d\'un choix architectural', 'is_correct' => true],
                            ['choice_text' => 'un artifact binaire', 'is_correct' => false],
                            ['choice_text' => 'un secret', 'is_correct' => false],
                            ['choice_text' => 'un user account', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que ADR apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à ADR est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'un document conservant contexte, décision et conséquences d\'un choix architectural', 'is_correct' => true],
                            ['choice_text' => 'un artifact binaire', 'is_correct' => false],
                            ['choice_text' => 'un secret', 'is_correct' => false],
                            ['choice_text' => 'un user account', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par ADR, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement change failure rate ?',
                        'choices' => [
                            ['choice_text' => 'la proportion de changements entraînant une failure significative, rollback ou incident', 'is_correct' => true],
                            ['choice_text' => 'la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'le nombre de commits', 'is_correct' => false],
                            ['choice_text' => 'la taille du pipeline', 'is_correct' => false],
                        ],
                        'explanation' => 'change failure rate correspond à la proportion de changements entraînant une failure significative, rollback ou incident.',
                    ],
                    [
                        'question' => 'Quelle application de change failure rate est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'la proportion de changements entraînant une failure significative, rollback ou incident', 'is_correct' => true],
                            ['choice_text' => 'la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'le nombre de commits', 'is_correct' => false],
                            ['choice_text' => 'la taille du pipeline', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, change failure rate permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à change failure rate ?',
                        'choices' => [
                            ['choice_text' => 'la proportion de changements entraînant une failure significative, rollback ou incident', 'is_correct' => true],
                            ['choice_text' => 'la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'le nombre de commits', 'is_correct' => false],
                            ['choice_text' => 'la taille du pipeline', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que change failure rate apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à change failure rate est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'la proportion de changements entraînant une failure significative, rollback ou incident', 'is_correct' => true],
                            ['choice_text' => 'la vitesse CPU', 'is_correct' => false],
                            ['choice_text' => 'le nombre de commits', 'is_correct' => false],
                            ['choice_text' => 'la taille du pipeline', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par change failure rate, car ce mécanisme répond directement à la contrainte opérationnelle.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement lead time for changes ?',
                        'choices' => [
                            ['choice_text' => 'le temps entre le début ou création d\'un changement et sa mise en production selon la définition retenue', 'is_correct' => true],
                            ['choice_text' => 'le temps de réponse DNS', 'is_correct' => false],
                            ['choice_text' => 'la durée d\'un backup', 'is_correct' => false],
                            ['choice_text' => 'le temps d\'un reboot', 'is_correct' => false],
                        ],
                        'explanation' => 'lead time for changes correspond à le temps entre le début ou création d\'un changement et sa mise en production selon la définition retenue.',
                    ],
                    [
                        'question' => 'Quelle application de lead time for changes est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'le temps entre le début ou création d\'un changement et sa mise en production selon la définition retenue', 'is_correct' => true],
                            ['choice_text' => 'le temps de réponse DNS', 'is_correct' => false],
                            ['choice_text' => 'la durée d\'un backup', 'is_correct' => false],
                            ['choice_text' => 'le temps d\'un reboot', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, lead time for changes permet de répondre au besoin décrit tout en conservant une approche reproductible et contrôlable.',
                    ],
                    [
                        'question' => 'Quel choix correspond le mieux à une bonne pratique liée à lead time for changes ?',
                        'choices' => [
                            ['choice_text' => 'le temps entre le début ou création d\'un changement et sa mise en production selon la définition retenue', 'is_correct' => true],
                            ['choice_text' => 'le temps de réponse DNS', 'is_correct' => false],
                            ['choice_text' => 'la durée d\'un backup', 'is_correct' => false],
                            ['choice_text' => 'le temps d\'un reboot', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix est pertinent parce que lead time for changes apporte directement la capacité décrite.',
                    ],
                    [
                        'question' => 'Une équipe rencontre ce scénario. Quelle décision liée à lead time for changes est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'le temps entre le début ou création d\'un changement et sa mise en production selon la définition retenue', 'is_correct' => true],
                            ['choice_text' => 'le temps de réponse DNS', 'is_correct' => false],
                            ['choice_text' => 'la durée d\'un backup', 'is_correct' => false],
                            ['choice_text' => 'le temps d\'un reboot', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scénario est traité par lead time for changes, car ce mécanisme répond directement à la contrainte opérationnelle.',
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
