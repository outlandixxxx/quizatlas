<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class ComputerScienceMajorSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::updateOrCreate(
            [
                'slug' => 'computer-science-it',
            ],
            [
                'name' => 'Informatique & IT',
                'description' => 'Informatique, technologies de l’information, développement logiciel, réseaux, cybersécurité, données et technologies associées.',
                'is_active' => true,
                'icon' => 'computer',
            ]
        );

        $subjects = [
            [
                'name' => 'Programmation',
                'description' => 'Langages de programmation, concepts de programmation, syntaxe, paradigmes et fondamentaux du développement logiciel.',
            ],
            [
                'name' => 'Algorithmes & Structures de données',
                'description' => 'Algorithmes, analyse de complexité, structures de données et résolution de problèmes computationnels.',
            ],
            [
                'name' => 'Bases de données & SQL',
                'description' => 'Bases de données relationnelles, SQL, conception de bases de données, requêtes et gestion des bases de données.',
            ],
            [
                'name' => 'Développement Web',
                'description' => 'Frontend, backend, HTTP, APIs et technologies modernes de développement Web.',
            ],
            [
                'name' => 'Développement Mobile',
                'description' => 'Développement d’applications mobiles, architectures mobiles et technologies Android, iOS et cross-platform.',
            ],
            [
                'name' => 'Génie logiciel',
                'description' => 'Méthodologies de développement logiciel, architecture, tests, design patterns et maintenance.',
            ],
            [
                'name' => 'Réseaux informatiques',
                'description' => 'Fondamentaux des réseaux, TCP/IP, routage, switching, protocoles et architecture réseau.',
            ],
            [
                'name' => 'Systèmes d’exploitation',
                'description' => 'Processus, threads, gestion de la mémoire, systèmes de fichiers et concepts des systèmes d’exploitation.',
            ],
            [
                'name' => 'Cybersécurité',
                'description' => 'Principes de sécurité, vulnérabilités, authentification, cryptographie et sécurité défensive.',
            ],
            [
                'name' => 'Cloud Computing',
                'description' => 'Architecture Cloud, virtualisation, services Cloud, containers et concepts de déploiement.',
            ],
            [
                'name' => 'Intelligence artificielle',
                'description' => 'Fondamentaux de l’intelligence artificielle, machine learning, réseaux neuronaux et systèmes intelligents.',
            ],
            [
                'name' => 'Data Science',
                'description' => 'Analyse de données, statistiques, traitement des données et fondamentaux du machine learning.',
            ],
            [
                'name' => 'Administration système',
                'description' => 'Linux, Windows Server, configuration système, monitoring et administration des systèmes.',
            ],
            [
                'name' => 'DevOps',
                'description' => 'CI/CD, automatisation, containers, infrastructure et pratiques de software delivery.',
            ],
            [
                'name' => 'Architecture IT',
                'description' => 'Architecture des systèmes d’information, systèmes distribués, architecture d’entreprise et conception technique.',
            ],
        ];

        foreach ($subjects as $subject) {
            $major->subjects()->updateOrCreate(
                [
                    'slug' => \Illuminate\Support\Str::slug($subject['name']),
                ],
                [
                    'name' => $subject['name'],
                    'description' => $subject['description'],
                    'is_active' => true,
                ]
            );
        }
    }
}