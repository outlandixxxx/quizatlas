<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SystemAdministrationAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'System Administration — Mandatory Access Control — Advanced #1',
                'slug' => 'system-administration-advanced-1',
                'description' => 'Quiz Advanced de System Administration : Mandatory Access Control.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement SELinux ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de SELinux dans Mandatory Access Control ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi SELinux est-il important dans un environnement professionnel ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant SELinux ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement SELinux ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de SELinux dans Mandatory Access Control ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi SELinux est-il important dans un environnement professionnel ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant SELinux ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement SELinux ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de SELinux dans Mandatory Access Control ?',
                        'explanation' => 'SELinux désigne un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme de contrôle d\'accès obligatoire fondé sur des politiques', 'is_correct' => true],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'RAID', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Application Security — Advanced #2',
                'slug' => 'system-administration-advanced-2',
                'description' => 'Quiz Advanced de System Administration : Application Security.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement AppArmor ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de AppArmor dans Application Security ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi AppArmor est-il important dans un environnement professionnel ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant AppArmor ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement AppArmor ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de AppArmor dans Application Security ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi AppArmor est-il important dans un environnement professionnel ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant AppArmor ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement AppArmor ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de AppArmor dans Application Security ?',
                        'explanation' => 'AppArmor désigne un mécanisme utilisant des profils pour restreindre les capacités d\'applications. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme utilisant des profils pour restreindre les capacités d\'applications', 'is_correct' => true],
                            ['text' => 'systemd', 'is_correct' => false],
                            ['text' => 'LVM', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Resource Isolation — Advanced #3',
                'slug' => 'system-administration-advanced-3',
                'description' => 'Quiz Advanced de System Administration : Resource Isolation.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement cgroups ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de cgroups dans Resource Isolation ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cgroups est-il important dans un environnement professionnel ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant cgroups ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement cgroups ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de cgroups dans Resource Isolation ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cgroups est-il important dans un environnement professionnel ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant cgroups ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement cgroups ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de cgroups dans Resource Isolation ?',
                        'explanation' => 'cgroups désigne un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme permettant de contrôler et comptabiliser l\'utilisation de ressources par des groupes de processus', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'sudo', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — System Isolation — Advanced #4',
                'slug' => 'system-administration-advanced-4',
                'description' => 'Quiz Advanced de System Administration : System Isolation.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement namespaces ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de namespaces dans System Isolation ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi namespaces est-il important dans un environnement professionnel ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant namespaces ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement namespaces ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de namespaces dans System Isolation ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi namespaces est-il important dans un environnement professionnel ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant namespaces ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement namespaces ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de namespaces dans System Isolation ?',
                        'explanation' => 'namespaces désigne un mécanisme Linux permettant d\'isoler certaines ressources entre environnements. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un mécanisme Linux permettant d\'isoler certaines ressources entre environnements', 'is_correct' => true],
                            ['text' => 'RAID', 'is_correct' => false],
                            ['text' => 'cron', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — File Metadata — Advanced #5',
                'slug' => 'system-administration-advanced-5',
                'description' => 'Quiz Advanced de System Administration : File Metadata.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement inode ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de inode dans File Metadata ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi inode est-il important dans un environnement professionnel ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant inode ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement inode ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de inode dans File Metadata ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi inode est-il important dans un environnement professionnel ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant inode ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement inode ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de inode dans File Metadata ?',
                        'explanation' => 'inode désigne une structure contenant notamment les métadonnées d\'un fichier. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'une structure contenant notamment les métadonnées d\'un fichier', 'is_correct' => true],
                            ['text' => 'socket', 'is_correct' => false],
                            ['text' => 'PID', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Open Resources — Advanced #6',
                'slug' => 'system-administration-advanced-6',
                'description' => 'Quiz Advanced de System Administration : Open Resources.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement file descriptor ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de file descriptor dans Open Resources ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi file descriptor est-il important dans un environnement professionnel ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant file descriptor ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement file descriptor ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de file descriptor dans Open Resources ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi file descriptor est-il important dans un environnement professionnel ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant file descriptor ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement file descriptor ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de file descriptor dans Open Resources ?',
                        'explanation' => 'file descriptor désigne un identifiant utilisé par un process pour référencer une ressource ouverte. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un identifiant utilisé par un process pour référencer une ressource ouverte', 'is_correct' => true],
                            ['text' => 'inode', 'is_correct' => false],
                            ['text' => 'subnet', 'is_correct' => false],
                            ['text' => 'service account', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — Traffic Management — Advanced #7',
                'slug' => 'system-administration-advanced-7',
                'description' => 'Quiz Advanced de System Administration : Traffic Management.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement reverse proxy ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de reverse proxy dans Traffic Management ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi reverse proxy est-il important dans un environnement professionnel ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant reverse proxy ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement reverse proxy ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de reverse proxy dans Traffic Management ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi reverse proxy est-il important dans un environnement professionnel ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant reverse proxy ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement reverse proxy ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de reverse proxy dans Traffic Management ?',
                        'explanation' => 'reverse proxy désigne un serveur intermédiaire transmettant les requêtes vers des backends. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un serveur intermédiaire transmettant les requêtes vers des backends', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'RAID controller', 'is_correct' => false],
                            ['text' => 'package manager', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'System Administration — System Load — Advanced #8',
                'slug' => 'system-administration-advanced-8',
                'description' => 'Quiz Advanced de System Administration : System Load.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation décrit correctement load average ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de load average dans System Load ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi load average est-il important dans un environnement professionnel ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant load average ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement load average ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de load average dans System Load ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi load average est-il important dans un environnement professionnel ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est exact concernant load average ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit correctement load average ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de load average dans System Load ?',
                        'explanation' => 'load average désigne un indicateur aidant à analyser la charge d\'un système Unix/Linux. Ce mécanisme répond directement au besoin décrit et doit être utilisé selon les exigences de l\'environnement.',
                        'choices' => [
                            ['text' => 'un indicateur aidant à analyser la charge d\'un système Unix/Linux', 'is_correct' => true],
                            ['text' => 'disk label', 'is_correct' => false],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'file permission', 'is_correct' => false],
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
