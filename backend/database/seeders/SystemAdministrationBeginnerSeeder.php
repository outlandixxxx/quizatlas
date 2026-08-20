<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SystemAdministrationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'System Administration — Linux Fundamentals — Beginner #1',
                'slug' => 'system-administration-beginner-1',
                'description' => 'Quiz Beginner de System Administration : Linux Fundamentals.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement Linux ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Linux dans Linux Fundamentals ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Linux est-il important dans un environnement professionnel ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant Linux ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement Linux ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Linux dans Linux Fundamentals ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Linux est-il important dans un environnement professionnel ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant Linux ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement Linux ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Linux dans Linux Fundamentals ?',
                        'explanation' => 'Linux désigne un système d\'exploitation utilisé pour exécuter et administrer des applications et services. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'exploitation utilisé pour exécuter et administrer des applications et services', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'une base de données', 'is_correct' => false],
                            ['text' => 'un périphérique physique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Windows Server — Beginner #2',
                'slug' => 'system-administration-beginner-2',
                'description' => 'Quiz Beginner de System Administration : Windows Server.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement Windows Server ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Windows Server dans Windows Server ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Windows Server est-il important dans un environnement professionnel ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant Windows Server ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement Windows Server ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Windows Server dans Windows Server ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Windows Server est-il important dans un environnement professionnel ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant Windows Server ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement Windows Server ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Windows Server dans Windows Server ?',
                        'explanation' => 'Windows Server désigne une plateforme serveur destinée notamment à fournir et administrer des services Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une plateforme serveur destinée notamment à fournir et administrer des services Windows', 'is_correct' => true],
                            ['text' => 'un navigateur web', 'is_correct' => false],
                            ['text' => 'un switch réseau', 'is_correct' => false],
                            ['text' => 'un système de fichiers Linux', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Users, Groups & Permissions — Beginner #3',
                'slug' => 'system-administration-beginner-3',
                'description' => 'Quiz Beginner de System Administration : Users, Groups & Permissions.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement least privilege ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de least privilege dans Users, Groups & Permissions ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi least privilege est-il important dans un environnement professionnel ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant least privilege ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement least privilege ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de least privilege dans Users, Groups & Permissions ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi least privilege est-il important dans un environnement professionnel ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant least privilege ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement least privilege ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de least privilege dans Users, Groups & Permissions ?',
                        'explanation' => 'least privilege désigne le principe consistant à accorder uniquement les permissions nécessaires. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'le principe consistant à accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['text' => 'le full access', 'is_correct' => false],
                            ['text' => 'le shared root', 'is_correct' => false],
                            ['text' => 'le implicit trust', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Processes & Services — Beginner #4',
                'slug' => 'system-administration-beginner-4',
                'description' => 'Quiz Beginner de System Administration : Processes & Services.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement process ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de process dans Processes & Services ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi process est-il important dans un environnement professionnel ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant process ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement process ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de process dans Processes & Services ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi process est-il important dans un environnement professionnel ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant process ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement process ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de process dans Processes & Services ?',
                        'explanation' => 'process désigne une instance d\'un programme en cours d\'exécution. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une instance d\'un programme en cours d\'exécution', 'is_correct' => true],
                            ['text' => 'un fichier de configuration', 'is_correct' => false],
                            ['text' => 'une adresse IP', 'is_correct' => false],
                            ['text' => 'une partition', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Storage & File Systems — Beginner #5',
                'slug' => 'system-administration-beginner-5',
                'description' => 'Quiz Beginner de System Administration : Storage & File Systems.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement file system ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de file system dans Storage & File Systems ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi file system est-il important dans un environnement professionnel ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant file system ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement file system ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de file system dans Storage & File Systems ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi file system est-il important dans un environnement professionnel ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant file system ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement file system ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de file system dans Storage & File Systems ?',
                        'explanation' => 'file system désigne une structure permettant d\'organiser et gérer les données sur un support. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure permettant d\'organiser et gérer les données sur un support', 'is_correct' => true],
                            ['text' => 'un protocole réseau', 'is_correct' => false],
                            ['text' => 'un compte utilisateur', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Networking & DNS — Beginner #6',
                'slug' => 'system-administration-beginner-6',
                'description' => 'Quiz Beginner de System Administration : Networking & DNS.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement DNS ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de DNS dans Networking & DNS ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi DNS est-il important dans un environnement professionnel ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant DNS ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement DNS ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de DNS dans Networking & DNS ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi DNS est-il important dans un environnement professionnel ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant DNS ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement DNS ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de DNS dans Networking & DNS ?',
                        'explanation' => 'DNS désigne un système permettant notamment de résoudre des noms en adresses IP. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système permettant notamment de résoudre des noms en adresses IP', 'is_correct' => true],
                            ['text' => 'un système de fichiers', 'is_correct' => false],
                            ['text' => 'un gestionnaire de processus', 'is_correct' => false],
                            ['text' => 'un type de mémoire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Security & Hardening — Beginner #7',
                'slug' => 'system-administration-beginner-7',
                'description' => 'Quiz Beginner de System Administration : Security & Hardening.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement hardening ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de hardening dans Security & Hardening ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi hardening est-il important dans un environnement professionnel ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant hardening ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement hardening ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de hardening dans Security & Hardening ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi hardening est-il important dans un environnement professionnel ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant hardening ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement hardening ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de hardening dans Security & Hardening ?',
                        'explanation' => 'hardening désigne la réduction de la surface d\'attaque d\'un système. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'la réduction de la surface d\'attaque d\'un système', 'is_correct' => true],
                            ['text' => 'l\'augmentation des privilèges', 'is_correct' => false],
                            ['text' => 'la suppression des backups', 'is_correct' => false],
                            ['text' => 'l\'ouverture de tous les ports', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Monitoring, Backup & Recovery — Beginner #8',
                'slug' => 'system-administration-beginner-8',
                'description' => 'Quiz Beginner de System Administration : Monitoring, Backup & Recovery.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement backup ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de backup dans Monitoring, Backup & Recovery ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi backup est-il important dans un environnement professionnel ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant backup ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement backup ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de backup dans Monitoring, Backup & Recovery ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi backup est-il important dans un environnement professionnel ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant backup ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement backup ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de backup dans Monitoring, Backup & Recovery ?',
                        'explanation' => 'backup désigne une copie de données permettant notamment une restauration. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une copie de données permettant notamment une restauration', 'is_correct' => true],
                            ['text' => 'un process', 'is_correct' => false],
                            ['text' => 'une adresse MAC', 'is_correct' => false],
                            ['text' => 'un service DNS', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(['subject_id' => $subject->id, 'slug' => $quizData['slug']], [
                'title' => $quizData['title'], 'description' => $quizData['description'],
                'difficulty' => $quizData['difficulty'], 'is_active' => true,
            ]);

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = Question::updateOrCreate(
                    ['quiz_id' => $quiz->id, 'order' => $questionIndex + 1],
                    ['question' => $questionData['question'], 'explanation' => $questionData['explanation']]
                );

                $question->choices()->delete();
                $choices = $questionData['choices'];
                shuffle($choices);
                foreach ($choices as $choiceIndex => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'text' => $choiceData['text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
