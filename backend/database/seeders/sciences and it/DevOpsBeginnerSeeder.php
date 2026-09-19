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
        $subject = Subject::where('slug', 'devops')->firstOrFail();

        $quizzes = [
            [
                'title' => 'DevOps Beginner — Fundamentals',
                'description' => 'Découvrez les concepts fondamentaux de DevOps, de collaboration, d’automatisation et de livraison logicielle.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que signifie DevOps ?',
                        'explanation' => 'DevOps désigne un ensemble de pratiques qui rapprochent le développement et les opérations afin d’améliorer la livraison et l’exploitation des logiciels.',
                        'choices' => [
                            ['choice_text' => 'Une approche combinant développement, opérations, automatisation et collaboration', 'is_correct' => true],
                            ['choice_text' => 'Un langage de programmation', 'is_correct' => false],
                            ['choice_text' => 'Un système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Un protocole réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un objectif important de DevOps ?',
                        'explanation' => 'DevOps cherche notamment à rendre la livraison des logiciels plus rapide, fiable et répétable.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la rapidité et la fiabilité de la livraison logicielle', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les tests', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Séparer totalement les équipes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la collaboration entre développeurs et administrateurs est-elle importante en DevOps ?',
                        'explanation' => 'Une collaboration étroite réduit les silos et améliore la responsabilité collective sur le cycle de vie du logiciel.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les silos et améliorer la responsabilité collective', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les équipes de se spécialiser', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les rôles techniques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’automatisation en DevOps ?',
                        'explanation' => 'L’automatisation consiste à utiliser des outils et scripts pour exécuter des tâches de manière répétable avec moins d’intervention manuelle.',
                        'choices' => [
                            ['choice_text' => 'Utiliser des outils pour exécuter des tâches de manière répétable', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests logiciels', 'is_correct' => false],
                            ['choice_text' => 'Exécuter toutes les tâches uniquement à la main', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi automatiser les tâches répétitives ?',
                        'explanation' => 'L’automatisation réduit certaines erreurs humaines, améliore la cohérence et fait gagner du temps.',
                        'choices' => [
                            ['choice_text' => 'Réduire les erreurs et améliorer la cohérence des opérations', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune erreur ne sera jamais possible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de supervision', 'is_correct' => false],
                            ['choice_text' => 'Rendre les systèmes plus complexes volontairement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que CI dans CI/CD ?',
                        'explanation' => 'CI signifie Continuous Integration et consiste notamment à intégrer fréquemment les changements de code avec des validations automatisées.',
                        'choices' => [
                            ['choice_text' => 'Continuous Integration', 'is_correct' => true],
                            ['choice_text' => 'Code Installation', 'is_correct' => false],
                            ['choice_text' => 'Central Infrastructure', 'is_correct' => false],
                            ['choice_text' => 'Continuous Internet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que CD dans CI/CD peut représenter ?',
                        'explanation' => 'CD peut désigner Continuous Delivery ou Continuous Deployment selon le contexte.',
                        'choices' => [
                            ['choice_text' => 'Continuous Delivery ou Continuous Deployment', 'is_correct' => true],
                            ['choice_text' => 'Code Distribution uniquement', 'is_correct' => false],
                            ['choice_text' => 'Central Database', 'is_correct' => false],
                            ['choice_text' => 'Cloud Development uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests automatisés sont-ils importants dans DevOps ?',
                        'explanation' => 'Ils permettent de détecter rapidement les régressions avant qu’un changement soit livré plus largement.',
                        'choices' => [
                            ['choice_text' => 'Détecter rapidement les régressions lors des changements', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toute validation humaine', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le logiciel est parfait', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le versioning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un système de contrôle de version en DevOps ?',
                        'explanation' => 'Le contrôle de version permet de suivre les changements, collaborer et revenir à des versions précédentes.',
                        'choices' => [
                            ['choice_text' => 'Suivre les changements et faciliter la collaboration et les retours en arrière', 'is_correct' => true],
                            ['choice_text' => 'Stocker uniquement les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification du code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un bénéfice majeur d’une culture DevOps ?',
                        'explanation' => 'DevOps encourage une responsabilité partagée et l’amélioration continue du processus de livraison et d’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Favoriser la responsabilité partagée et l’amélioration continue', 'is_correct' => true],
                            ['choice_text' => 'Créer davantage de silos', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la communication', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mesure de performance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Beginner — Git et contrôle de version',
                'description' => 'Apprenez les commandes et concepts Git essentiels utilisés dans les workflows DevOps.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que Git ?',
                        'explanation' => 'Git est un système distribué de contrôle de version utilisé pour suivre les changements dans les fichiers et le code.',
                        'choices' => [
                            ['choice_text' => 'Un système distribué de contrôle de version', 'is_correct' => true],
                            ['choice_text' => 'Un système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Un serveur Web', 'is_correct' => false],
                            ['choice_text' => 'Un protocole DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande initialise généralement un dépôt Git ?',
                        'explanation' => 'git init crée les structures nécessaires pour qu’un répertoire devienne un dépôt Git.',
                        'choices' => [
                            ['choice_text' => 'git init', 'is_correct' => true],
                            ['choice_text' => 'git start', 'is_correct' => false],
                            ['choice_text' => 'git create', 'is_correct' => false],
                            ['choice_text' => 'git repository', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de voir l’état du dépôt Git ?',
                        'explanation' => 'git status affiche notamment les fichiers modifiés, indexés ou non suivis.',
                        'choices' => [
                            ['choice_text' => 'git status', 'is_correct' => true],
                            ['choice_text' => 'git state', 'is_correct' => false],
                            ['choice_text' => 'git check', 'is_correct' => false],
                            ['choice_text' => 'git info', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande crée un commit ?',
                        'explanation' => 'git commit enregistre les changements placés dans la zone de staging.',
                        'choices' => [
                            ['choice_text' => 'git commit', 'is_correct' => true],
                            ['choice_text' => 'git save', 'is_correct' => false],
                            ['choice_text' => 'git record', 'is_correct' => false],
                            ['choice_text' => 'git store', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert git add ?',
                        'explanation' => 'git add place des changements dans la zone de staging afin qu’ils soient inclus dans le prochain commit.',
                        'choices' => [
                            ['choice_text' => 'Ajouter des changements à la zone de staging', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement une branche distante', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le dépôt', 'is_correct' => false],
                            ['choice_text' => 'Envoyer les changements sur GitHub', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une branche Git ?',
                        'explanation' => 'Une branche permet de travailler sur une ligne de développement distincte sans modifier directement une autre branche.',
                        'choices' => [
                            ['choice_text' => 'Travailler sur une ligne de développement indépendante', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement un serveur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les commits', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’historique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet de récupérer un dépôt distant sur une nouvelle machine ?',
                        'explanation' => 'git clone copie un dépôt distant avec son historique vers un répertoire local.',
                        'choices' => [
                            ['choice_text' => 'git clone', 'is_correct' => true],
                            ['choice_text' => 'git copy', 'is_correct' => false],
                            ['choice_text' => 'git download', 'is_correct' => false],
                            ['choice_text' => 'git fetchall', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande envoie généralement les commits locaux vers un dépôt distant ?',
                        'explanation' => 'git push envoie les références et commits vers le dépôt distant configuré.',
                        'choices' => [
                            ['choice_text' => 'git push', 'is_correct' => true],
                            ['choice_text' => 'git send', 'is_correct' => false],
                            ['choice_text' => 'git upload', 'is_correct' => false],
                            ['choice_text' => 'git publish', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande récupère les changements distants sans les fusionner automatiquement dans la branche courante ?',
                        'explanation' => 'git fetch récupère les références et objets distants sans effectuer automatiquement une fusion.',
                        'choices' => [
                            ['choice_text' => 'git fetch', 'is_correct' => true],
                            ['choice_text' => 'git pullonly', 'is_correct' => false],
                            ['choice_text' => 'git download', 'is_correct' => false],
                            ['choice_text' => 'git sync', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les messages de commit doivent-ils être clairs ?',
                        'explanation' => 'Des messages clairs facilitent la compréhension de l’historique, le debugging et les revues de code.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre l’historique plus compréhensible et faciliter les investigations', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la performance du code', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les merges', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les branches', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Beginner — CI/CD Fundamentals',
                'description' => 'Découvrez les bases des pipelines d’intégration continue, de livraison continue et de déploiement.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le but principal de l’intégration continue ?',
                        'explanation' => 'CI encourage l’intégration fréquente des changements accompagnée de validations automatisées.',
                        'choices' => [
                            ['choice_text' => 'Intégrer fréquemment les changements et détecter rapidement les problèmes', 'is_correct' => true],
                            ['choice_text' => 'Déployer uniquement une fois par an', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le contrôle de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un pipeline CI/CD ?',
                        'explanation' => 'Un pipeline automatise différentes étapes comme la construction, les tests et parfois le déploiement.',
                        'choices' => [
                            ['choice_text' => 'Une suite automatisée d’étapes de build, test et déploiement', 'is_correct' => true],
                            ['choice_text' => 'Un serveur physique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un type de base de données', 'is_correct' => false],
                            ['choice_text' => 'Un langage de programmation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi construire automatiquement une application après un changement de code ?',
                        'explanation' => 'Le build automatisé permet de vérifier rapidement que le code peut être compilé ou empaqueté correctement.',
                        'choices' => [
                            ['choice_text' => 'Détecter rapidement les problèmes de compilation ou de packaging', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence de bugs métier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Remplacer Git', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi exécuter les tests automatiquement dans un pipeline ?',
                        'explanation' => 'Les tests automatisés fournissent un retour rapide sur les régressions et problèmes introduits par les changements.',
                        'choices' => [
                            ['choice_text' => 'Détecter les régressions avant la livraison', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le code est parfait', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute fusion de branches', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les développeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un artefact de build ?',
                        'explanation' => 'Un artefact est un résultat produit par le processus de build, comme un package, une image ou un binaire.',
                        'choices' => [
                            ['choice_text' => 'Un résultat produit par le processus de build et réutilisable pour les étapes suivantes', 'is_correct' => true],
                            ['choice_text' => 'Un utilisateur Git', 'is_correct' => false],
                            ['choice_text' => 'Un serveur DNS', 'is_correct' => false],
                            ['choice_text' => 'Un ticket de support', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser le même artefact entre différents environnements ?',
                        'explanation' => 'Promouvoir le même artefact réduit les différences entre ce qui a été testé et ce qui est finalement déployé.',
                        'choices' => [
                            ['choice_text' => 'Réduire les différences entre l’élément testé et celui déployé', 'is_correct' => true],
                            ['choice_text' => 'Créer plusieurs versions incompatibles', 'is_correct' => false],
                            ['choice_text' => 'Éviter le versioning', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro bug', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pipelines doivent-ils échouer lorsqu’un test critique échoue ?',
                        'explanation' => 'Une étape critique en échec doit généralement empêcher la promotion d’un changement potentiellement incorrect.',
                        'choices' => [
                            ['choice_text' => 'Empêcher la promotion d’un changement qui ne respecte pas les critères', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter volontairement le nombre d’échecs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toutes les branches', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un environnement de staging ?',
                        'explanation' => 'Le staging permet de valider un changement dans un environnement proche de la production avant sa mise en service.',
                        'choices' => [
                            ['choice_text' => 'Tester une version dans un environnement proche de la production', 'is_correct' => true],
                            ['choice_text' => 'Remplacer définitivement la production', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests unitaires', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variables secrètes ne doivent-elles pas être écrites directement dans le pipeline ?',
                        'explanation' => 'Les secrets visibles dans le code ou les logs peuvent être exposés à des utilisateurs non autorisés.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le risque d’exposition des identifiants et secrets', 'is_correct' => true],
                            ['choice_text' => 'Parce que les pipelines ne peuvent pas utiliser de variables', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les déploiements', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage d’un pipeline reproductible ?',
                        'explanation' => 'Un pipeline reproductible exécute les mêmes étapes de manière cohérente, facilitant le diagnostic et la livraison.',
                        'choices' => [
                            ['choice_text' => 'Obtenir des résultats cohérents et faciliter les diagnostics', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de versioning', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Beginner — Docker et conteneurs',
                'description' => 'Apprenez les concepts fondamentaux de Docker, images, conteneurs et registres.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un conteneur ?',
                        'explanation' => 'Un conteneur encapsule une application et ses dépendances dans un environnement isolé utilisant généralement le noyau de l’hôte.',
                        'choices' => [
                            ['choice_text' => 'Un environnement isolé pour exécuter une application et ses dépendances', 'is_correct' => true],
                            ['choice_text' => 'Une machine virtuelle complète dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Un disque physique', 'is_correct' => false],
                            ['choice_text' => 'Un protocole réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une image Docker ?',
                        'explanation' => 'Une image est un modèle immuable utilisé pour créer des conteneurs.',
                        'choices' => [
                            ['choice_text' => 'Un modèle servant à créer des conteneurs', 'is_correct' => true],
                            ['choice_text' => 'Un conteneur toujours en cours d’exécution', 'is_correct' => false],
                            ['choice_text' => 'Un serveur physique', 'is_correct' => false],
                            ['choice_text' => 'Une adresse IP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les images Docker sont-elles généralement versionnées ?',
                        'explanation' => 'Le versioning permet d’identifier précisément la version d’un environnement et de faciliter les déploiements reproductibles.',
                        'choices' => [
                            ['choice_text' => 'Identifier précisément la version d’un environnement logiciel', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les conteneurs automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de vulnérabilités', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un Dockerfile ?',
                        'explanation' => 'Un Dockerfile décrit les étapes nécessaires pour construire une image Docker.',
                        'choices' => [
                            ['choice_text' => 'Décrire comment construire une image Docker', 'is_correct' => true],
                            ['choice_text' => 'Définir les utilisateurs du système hôte', 'is_correct' => false],
                            ['choice_text' => 'Remplacer Git', 'is_correct' => false],
                            ['choice_text' => 'Gérer les sauvegardes physiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de stocker des données critiques uniquement dans le filesystem éphémère d’un conteneur ?',
                        'explanation' => 'Le filesystem du conteneur peut disparaître lorsque le conteneur est supprimé ou recréé.',
                        'choices' => [
                            ['choice_text' => 'Parce que les données peuvent être perdues lors de la recréation du conteneur', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un conteneur ne peut pas lire de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Parce que Docker interdit le stockage', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données deviennent automatiquement publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un volume Docker ?',
                        'explanation' => 'Un volume permet de conserver des données indépendamment du cycle de vie du conteneur.',
                        'choices' => [
                            ['choice_text' => 'Persister les données indépendamment du conteneur', 'is_correct' => true],
                            ['choice_text' => 'Remplacer l’image Docker', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement un cluster', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les images Docker ?',
                        'explanation' => 'Les images peuvent contenir des dépendances ou paquets vulnérables.',
                        'choices' => [
                            ['choice_text' => 'Identifier les vulnérabilités présentes dans les composants de l’image', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’application ne contient aucun bug', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille du CPU', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement tous les paquets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne devrait-on pas utiliser latest comme seule stratégie de versioning d’image ?',
                        'explanation' => 'latest peut pointer vers des contenus différents dans le temps, ce qui réduit la reproductibilité.',
                        'choices' => [
                            ['choice_text' => 'Parce que la même étiquette peut pointer vers des versions différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que Docker interdit latest', 'is_correct' => false],
                            ['choice_text' => 'Parce que latest est toujours vulnérable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les tags ne peuvent jamais être modifiés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un container registry ?',
                        'explanation' => 'Un registry stocke et distribue les images de conteneurs.',
                        'choices' => [
                            ['choice_text' => 'Stocker et distribuer des images de conteneurs', 'is_correct' => true],
                            ['choice_text' => 'Gérer uniquement les utilisateurs Linux', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Déployer toujours automatiquement en production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter les ressources CPU et mémoire d’un conteneur ?',
                        'explanation' => 'Les limites évitent qu’un seul conteneur puisse monopoliser les ressources de l’hôte.',
                        'choices' => [
                            ['choice_text' => 'Empêcher un conteneur de monopoliser les ressources disponibles', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’application ne peut jamais échouer', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement plusieurs conteneurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Beginner — Cloud et Infrastructure',
                'description' => 'Découvrez les bases du cloud, de l’infrastructure automatisée et des environnements modernes.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le cloud computing ?',
                        'explanation' => 'Le cloud permet d’utiliser des ressources informatiques à la demande via des infrastructures accessibles à distance.',
                        'choices' => [
                            ['choice_text' => 'L’utilisation à la demande de ressources informatiques accessibles via un réseau', 'is_correct' => true],
                            ['choice_text' => 'Un système d’exploitation unique', 'is_correct' => false],
                            ['choice_text' => 'Un langage de programmation', 'is_correct' => false],
                            ['choice_text' => 'Un type de câble réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des avantages du cloud pour DevOps ?',
                        'explanation' => 'Les ressources peuvent être provisionnées plus rapidement et intégrées à l’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Provisionner plus rapidement des ressources à l’aide de l’automatisation', 'is_correct' => true],
                            ['choice_text' => 'Éliminer tous les coûts', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’Infrastructure as Code ?',
                        'explanation' => 'IaC consiste à définir l’infrastructure à l’aide de fichiers ou configurations versionnés et automatisables.',
                        'choices' => [
                            ['choice_text' => 'Définir l’infrastructure à l’aide de configurations versionnables et automatisables', 'is_correct' => true],
                            ['choice_text' => 'Administrer uniquement avec une interface graphique', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout versioning', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les systèmes d’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner les fichiers Infrastructure as Code ?',
                        'explanation' => 'Le versioning permet de suivre les changements, effectuer des revues et revenir à une version précédente.',
                        'choices' => [
                            ['choice_text' => 'Suivre les modifications et faciliter les revues et rollbacks', 'is_correct' => true],
                            ['choice_text' => 'Empêcher l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de créer les ressources cloud manuellement pour chaque environnement ?',
                        'explanation' => 'Les opérations manuelles peuvent produire des différences difficiles à reproduire et à maintenir.',
                        'choices' => [
                            ['choice_text' => 'Réduire les différences et la dérive entre environnements', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la complexité volontairement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les mises à jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un réseau virtuel cloud ?',
                        'explanation' => 'Il permet d’organiser la connectivité réseau des ressources cloud selon une architecture contrôlée.',
                        'choices' => [
                            ['choice_text' => 'Organiser et contrôler la connectivité réseau des ressources cloud', 'is_correct' => true],
                            ['choice_text' => 'Stocker les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Construire les images Docker', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les coûts cloud ?',
                        'explanation' => 'Les ressources cloud sont souvent facturées selon leur consommation et peuvent entraîner des coûts inattendus.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter les dépenses inutiles et mieux gérer les ressources', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une disponibilité de 100 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les environnements développement, test et production ?',
                        'explanation' => 'Cette séparation permet de tester les changements sans perturber directement les utilisateurs et systèmes critiques.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’un changement non validé affecte la production', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Donner les mêmes privilèges partout', 'is_correct' => false],
                            ['choice_text' => 'Éviter les déploiements automatisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des tags ou labels sur les ressources cloud ?',
                        'explanation' => 'Les tags peuvent aider à identifier les propriétaires, environnements, coûts et usages des ressources.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’organisation, la gouvernance et l’attribution des coûts', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement les performances', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les permissions IAM', 'is_correct' => false],
                            ['choice_text' => 'Créer des backups automatiquement dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’automatisation est-elle essentielle dans les environnements cloud modernes ?',
                        'explanation' => 'Les environnements cloud peuvent évoluer rapidement et nécessitent des opérations reproductibles pour rester cohérents.',
                        'choices' => [
                            ['choice_text' => 'Gérer rapidement et de manière cohérente des environnements qui évoluent fortement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les opérations de maintenance', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Éviter les contrôles de sécurité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Beginner — Monitoring et observabilité',
                'description' => 'Découvrez les fondamentaux du monitoring, logging, alerting et diagnostic des systèmes.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi surveiller les systèmes en production ?',
                        'explanation' => 'Le monitoring permet de détecter les problèmes de disponibilité, de performance et de ressources.',
                        'choices' => [
                            ['choice_text' => 'Détecter les problèmes de disponibilité et de performance', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute journalisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une métrique ?',
                        'explanation' => 'Une métrique est une mesure numérique utilisée pour observer l’état ou le comportement d’un système.',
                        'choices' => [
                            ['choice_text' => 'Une mesure numérique d’un aspect du système', 'is_correct' => true],
                            ['choice_text' => 'Un fichier source', 'is_correct' => false],
                            ['choice_text' => 'Un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Un serveur virtuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un log ?',
                        'explanation' => 'Un log est un enregistrement d’un événement ou d’une information produite par un système ou une application.',
                        'choices' => [
                            ['choice_text' => 'Un enregistrement d’événements ou d’informations système', 'is_correct' => true],
                            ['choice_text' => 'Une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Une image Docker', 'is_correct' => false],
                            ['choice_text' => 'Une règle firewall', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs sont-ils utiles lors d’un incident ?',
                        'explanation' => 'Ils fournissent des indices sur les erreurs et événements survenus avant ou pendant l’incident.',
                        'choices' => [
                            ['choice_text' => 'Ils aident à comprendre les événements et erreurs survenus', 'is_correct' => true],
                            ['choice_text' => 'Ils corrigent automatiquement le problème', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent tous les tests', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent la disponibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une alerte ?',
                        'explanation' => 'Une alerte signale généralement qu’une condition définie nécessite une attention ou une action.',
                        'choices' => [
                            ['choice_text' => 'Un signal indiquant qu’une condition nécessite potentiellement une action', 'is_correct' => true],
                            ['choice_text' => 'Une sauvegarde automatique', 'is_correct' => false],
                            ['choice_text' => 'Un fichier de configuration', 'is_correct' => false],
                            ['choice_text' => 'Un commit Git', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de créer trop d’alertes ?',
                        'explanation' => 'Une quantité excessive de notifications peut provoquer une fatigue des équipes et faire manquer les alertes réellement importantes.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire la fatigue d’alerte et conserver les signaux importants', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les incidents', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le monitoring', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller l’utilisation CPU ?',
                        'explanation' => 'Une utilisation CPU inhabituelle peut signaler une forte charge ou un comportement anormal d’un processus.',
                        'choices' => [
                            ['choice_text' => 'Identifier les charges importantes ou comportements anormaux', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement l’espace disque', 'is_correct' => false],
                            ['choice_text' => 'Modifier les permissions', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller la mémoire ?',
                        'explanation' => 'Une pression mémoire importante peut dégrader les performances et provoquer l’utilisation du swap.',
                        'choices' => [
                            ['choice_text' => 'Détecter une pression mémoire pouvant affecter les performances', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier le DNS', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller la latence d’une application ?',
                        'explanation' => 'La latence influence directement l’expérience utilisateur et peut révéler un problème de performance.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les dégradations de performance perçues par les utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les erreurs applicatives', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les déploiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des métriques historiques ?',
                        'explanation' => 'L’historique permet de comparer le comportement actuel à des périodes précédentes et d’identifier des tendances.',
                        'choices' => [
                            ['choice_text' => 'Analyser les tendances et comparer les performances dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les anciennes données', 'is_correct' => false],
                            ['choice_text' => 'Éviter le capacity planning', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’une panne ne se reproduira jamais', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Beginner — Sécurité DevOps',
                'description' => 'Découvrez les bases de DevSecOps, gestion des secrets, dépendances et sécurité des pipelines.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que DevSecOps ?',
                        'explanation' => 'DevSecOps intègre les pratiques de sécurité dans le cycle de développement et d’exploitation plutôt que de les traiter uniquement à la fin.',
                        'choices' => [
                            ['choice_text' => 'Intégrer la sécurité dans l’ensemble du cycle DevOps', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les équipes de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Sécuriser uniquement la production manuellement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer DevOps par un système de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas stocker des mots de passe en clair dans Git ?',
                        'explanation' => 'Les dépôts peuvent être clonés et l’historique conserve les anciennes versions des fichiers.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un dépôt ou son historique peut exposer les secrets', 'is_correct' => true],
                            ['choice_text' => 'Parce que Git ne peut stocker que du code', 'is_correct' => false],
                            ['choice_text' => 'Parce que les mots de passe ne sont jamais nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que Git supprime automatiquement les secrets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les dépendances d’une application ?',
                        'explanation' => 'Les bibliothèques utilisées par une application peuvent contenir des vulnérabilités connues.',
                        'choices' => [
                            ['choice_text' => 'Identifier les dépendances présentant des vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le code métier est parfait', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les packages', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests unitaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mettre à jour les dépendances vulnérables ?',
                        'explanation' => 'Une dépendance vulnérable peut exposer l’application même si son propre code est sécurisé.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition aux vulnérabilités connues des composants utilisés', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir l’absence totale de vulnérabilités', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les mises à jour futures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer le principe du moindre privilège aux pipelines CI/CD ?',
                        'explanation' => 'Un pipeline compromis avec des droits trop élevés peut modifier ou supprimer de nombreuses ressources.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact potentiel d’une compromission du pipeline', 'is_correct' => true],
                            ['choice_text' => 'Donner tous les droits au pipeline', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout déploiement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les secrets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les images de conteneurs avant déploiement ?',
                        'explanation' => 'Les images peuvent contenir des bibliothèques ou paquets vulnérables hérités de leur base.',
                        'choices' => [
                            ['choice_text' => 'Détecter des vulnérabilités présentes dans les composants de l’image', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence de tout bug applicatif', 'is_correct' => false],
                            ['choice_text' => 'Supprimer Docker', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification de l’image', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des secrets manager ou mécanismes équivalents ?',
                        'explanation' => 'Ils permettent de stocker, contrôler et faire tourner les secrets sans les intégrer directement au code source.',
                        'choices' => [
                            ['choice_text' => 'Gérer les secrets de manière contrôlée en dehors du code source', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le contrôle de version', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro fuite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sécurité doit-elle être intégrée tôt dans le cycle DevOps ?',
                        'explanation' => 'Détecter les problèmes tôt réduit généralement le coût et la complexité de leur correction.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter et corriger les problèmes de sécurité plus tôt', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter les tests de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les développeurs', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir la sécurité parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi journaliser les actions de déploiement ?',
                        'explanation' => 'La journalisation permet de savoir quels changements ont été réalisés, quand et par quel processus.',
                        'choices' => [
                            ['choice_text' => 'Assurer la traçabilité des changements déployés', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Éviter les audits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les permissions de production doivent-elles être plus restrictives que celles d’un environnement de développement ?',
                        'explanation' => 'La production contient généralement des systèmes et données critiques dont une modification accidentelle aurait un impact plus important.',
                        'choices' => [
                            ['choice_text' => 'Parce que les conséquences d’une erreur ou compromission sont plus importantes en production', 'is_correct' => true],
                            ['choice_text' => 'Parce que le développement ne contient jamais de données', 'is_correct' => false],
                            ['choice_text' => 'Parce que les développeurs ne doivent jamais accéder à aucun système', 'is_correct' => false],
                            ['choice_text' => 'Parce que production ne nécessite aucune automatisation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'DevOps Beginner — Collaboration et culture',
                'description' => 'Comprenez les pratiques humaines et organisationnelles qui rendent une culture DevOps efficace.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi DevOps cherche-t-il à réduire les silos entre équipes ?',
                        'explanation' => 'Les silos peuvent ralentir la communication, la résolution des incidents et la livraison des changements.',
                        'choices' => [
                            ['choice_text' => 'Pour améliorer la communication et accélérer la livraison et le dépannage', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les spécialisations techniques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Pour imposer une seule technologie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une équipe DevOps doit-elle partager la responsabilité de la production ?',
                        'explanation' => 'Une responsabilité partagée encourage les équipes à considérer la fiabilité et l’exploitation pendant le développement.',
                        'choices' => [
                            ['choice_text' => 'Pour que la fiabilité et l’exploitation soient prises en compte pendant le développement', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer l’équipe d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les rotations d’astreinte', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher la collaboration avec la sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rétrospectives sont-elles utiles ?',
                        'explanation' => 'Elles permettent à l’équipe d’identifier ce qui fonctionne et les améliorations possibles.',
                        'choices' => [
                            ['choice_text' => 'Identifier les améliorations possibles dans le processus de travail', 'is_correct' => true],
                            ['choice_text' => 'Attribuer systématiquement la responsabilité d’un problème à une personne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les changements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les postmortems sans blâme sont-ils utiles ?',
                        'explanation' => 'Ils encouragent l’analyse des causes systémiques plutôt que la recherche d’un responsable individuel.',
                        'choices' => [
                            ['choice_text' => 'Favoriser l’apprentissage et corriger les causes systémiques', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute responsabilité', 'is_correct' => false],
                            ['choice_text' => 'Masquer les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer les performances du processus DevOps ?',
                        'explanation' => 'Des métriques comme fréquence de déploiement, délai ou taux d’échec peuvent aider à identifier les points d’amélioration.',
                        'choices' => [
                            ['choice_text' => 'Identifier les goulots d’étranglement et suivre l’amélioration', 'is_correct' => true],
                            ['choice_text' => 'Garantir une performance parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les équipes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’automatisation ne remplace-t-elle pas la culture DevOps ?',
                        'explanation' => 'Les outils facilitent les pratiques mais ne résolvent pas automatiquement les problèmes de communication, responsabilité ou processus.',
                        'choices' => [
                            ['choice_text' => 'Les outils ne suffisent pas à résoudre les problèmes organisationnels et humains', 'is_correct' => true],
                            ['choice_text' => 'L’automatisation est inutile en DevOps', 'is_correct' => false],
                            ['choice_text' => 'La culture n’a aucun rôle technique', 'is_correct' => false],
                            ['choice_text' => 'Les pipelines remplacent les équipes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les équipes DevOps doivent-elles partager les informations sur les incidents ?',
                        'explanation' => 'Une bonne circulation de l’information permet une résolution plus rapide et évite la répétition des erreurs.',
                        'choices' => [
                            ['choice_text' => 'Pour accélérer le diagnostic et favoriser l’apprentissage collectif', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les équipes d’apprendre', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les responsabilités', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les postmortems', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les changements fréquents peuvent-ils être compatibles avec la stabilité ?',
                        'explanation' => 'Des changements petits, automatisés et bien testés peuvent être moins risqués que de gros changements rares.',
                        'choices' => [
                            ['choice_text' => 'Parce que des changements petits et bien automatisés peuvent réduire le risque par livraison', 'is_correct' => true],
                            ['choice_text' => 'Parce que les changements fréquents ne nécessitent aucun test', 'is_correct' => false],
                            ['choice_text' => 'Parce que la production ne peut jamais être affectée', 'is_correct' => false],
                            ['choice_text' => 'Parce que la taille des changements ne compte jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les connaissances opérationnelles importantes ?',
                        'explanation' => 'La documentation évite qu’une information critique dépende uniquement d’une personne et facilite la continuité.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance à une seule personne et faciliter la continuité', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les compétences individuelles', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence d’incident', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute formation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un signe d’une culture DevOps saine ?',
                        'explanation' => 'Une culture saine encourage la collaboration, le feedback, l’apprentissage et l’amélioration continue.',
                        'choices' => [
                            ['choice_text' => 'Collaboration, feedback, responsabilité partagée et amélioration continue', 'is_correct' => true],
                            ['choice_text' => 'Blâme systématique après incident', 'is_correct' => false],
                            ['choice_text' => 'Silos stricts entre équipes', 'is_correct' => false],
                            ['choice_text' => 'Absence de mesure', 'is_correct' => false],
                        ],
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
                    'is_active' => $quizData['is_active'],
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