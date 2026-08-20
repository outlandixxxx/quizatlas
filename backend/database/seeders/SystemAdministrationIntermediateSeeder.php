<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SystemAdministrationIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'System Administration — SSH & Administration distante — Intermediate #1',
                'slug' => 'system-administration-intermediate-1',
                'description' => 'Quiz Intermediate de System Administration : SSH & Administration distante.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement SSH ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de SSH dans SSH & Administration distante ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi SSH est-il important dans un environnement professionnel ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant SSH ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement SSH ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de SSH dans SSH & Administration distante ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi SSH est-il important dans un environnement professionnel ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant SSH ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement SSH ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de SSH dans SSH & Administration distante ?',
                        'explanation' => 'SSH désigne un protocole permettant notamment une administration distante chiffrée. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un protocole permettant notamment une administration distante chiffrée', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'Telnet', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Services Linux — Intermediate #2',
                'slug' => 'system-administration-intermediate-2',
                'description' => 'Quiz Intermediate de System Administration : Services Linux.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement systemd ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de systemd dans Services Linux ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi systemd est-il important dans un environnement professionnel ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant systemd ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement systemd ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de systemd dans Services Linux ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi systemd est-il important dans un environnement professionnel ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant systemd ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement systemd ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de systemd dans Services Linux ?',
                        'explanation' => 'systemd désigne un système d\'initialisation et de gestion de services Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système d\'initialisation et de gestion de services Linux', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Automatisation — Intermediate #3',
                'slug' => 'system-administration-intermediate-3',
                'description' => 'Quiz Intermediate de System Administration : Automatisation.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement cron ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de cron dans Automatisation ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cron est-il important dans un environnement professionnel ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant cron ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement cron ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de cron dans Automatisation ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cron est-il important dans un environnement professionnel ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant cron ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement cron ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de cron dans Automatisation ?',
                        'explanation' => 'cron désigne un mécanisme permettant de planifier des tâches sous Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de planifier des tâches sous Linux', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'swap', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Windows Automation — Intermediate #4',
                'slug' => 'system-administration-intermediate-4',
                'description' => 'Quiz Intermediate de System Administration : Windows Automation.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement PowerShell ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de PowerShell dans Windows Automation ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi PowerShell est-il important dans un environnement professionnel ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant PowerShell ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement PowerShell ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de PowerShell dans Windows Automation ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi PowerShell est-il important dans un environnement professionnel ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant PowerShell ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement PowerShell ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de PowerShell dans Windows Automation ?',
                        'explanation' => 'PowerShell désigne un shell et langage de scripting utilisé notamment pour administrer Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un shell et langage de scripting utilisé notamment pour administrer Windows', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'GRUB', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Identity Management — Intermediate #5',
                'slug' => 'system-administration-intermediate-5',
                'description' => 'Quiz Intermediate de System Administration : Identity Management.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement Active Directory ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Active Directory dans Identity Management ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Active Directory est-il important dans un environnement professionnel ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant Active Directory ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement Active Directory ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Active Directory dans Identity Management ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Active Directory est-il important dans un environnement professionnel ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant Active Directory ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement Active Directory ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Active Directory dans Identity Management ?',
                        'explanation' => 'Active Directory désigne un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un service d\'annuaire utilisé pour gérer notamment identités et ordinateurs Windows', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'NFS', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Storage Management — Intermediate #6',
                'slug' => 'system-administration-intermediate-6',
                'description' => 'Quiz Intermediate de System Administration : Storage Management.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement RAID ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RAID dans Storage Management ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi RAID est-il important dans un environnement professionnel ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant RAID ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement RAID ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RAID dans Storage Management ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi RAID est-il important dans un environnement professionnel ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant RAID ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement RAID ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de RAID dans Storage Management ?',
                        'explanation' => 'RAID désigne une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une technique combinant plusieurs disques selon différents objectifs de performance ou tolérance aux pannes', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SSH', 'is_correct' => false],
                            ['text' => 'ACL', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Logical Volumes — Intermediate #7',
                'slug' => 'system-administration-intermediate-7',
                'description' => 'Quiz Intermediate de System Administration : Logical Volumes.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement LVM ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de LVM dans Logical Volumes ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi LVM est-il important dans un environnement professionnel ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant LVM ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement LVM ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de LVM dans Logical Volumes ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi LVM est-il important dans un environnement professionnel ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant LVM ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement LVM ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de LVM dans Logical Volumes ?',
                        'explanation' => 'LVM désigne un système de gestion flexible des volumes logiques Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un système de gestion flexible des volumes logiques Linux', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'PowerShell', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Network Security — Intermediate #8',
                'slug' => 'system-administration-intermediate-8',
                'description' => 'Quiz Intermediate de System Administration : Network Security.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement firewall ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de firewall dans Network Security ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi firewall est-il important dans un environnement professionnel ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant firewall ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement firewall ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de firewall dans Network Security ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi firewall est-il important dans un environnement professionnel ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant firewall ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement firewall ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de firewall dans Network Security ?',
                        'explanation' => 'firewall désigne un mécanisme contrôlant le trafic réseau selon des règles. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme contrôlant le trafic réseau selon des règles', 'is_correct' => true],
                            ['text' => 'scheduler', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                            ['text' => 'filesystem', 'is_correct' => false],
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
