<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ITArchitectureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'it-architecture')->firstOrFail();

        $quizzes = [
            [
                'title' => 'IT Architecture Beginner — Architecture Fundamentals',
                'description' => 'Découvrez les principes fondamentaux de l’architecture informatique, les composants d’un système et les responsabilités d’un architecte.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’architecture informatique ?',
                        'explanation' => 'L’architecture décrit la structure d’un système, ses composants, leurs relations et les principes qui guident sa conception.',
                        'choices' => [
                            ['choice_text' => 'La structure d’un système, ses composants et leurs relations', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le code source d’une application', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la configuration du réseau', 'is_correct' => false],
                            ['choice_text' => 'Le planning d’une équipe de développement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une bonne architecture ?',
                        'explanation' => 'Une architecture doit répondre aux besoins fonctionnels tout en prenant en compte performance, sécurité, évolutivité, disponibilité et maintenabilité.',
                        'choices' => [
                            ['choice_text' => 'Répondre aux besoins tout en maîtrisant les contraintes techniques et métier', 'is_correct' => true],
                            ['choice_text' => 'Maximiser le nombre de technologies utilisées', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Rendre le système le plus complexe possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence décrit le mieux une exigence fonctionnelle et une exigence non fonctionnelle ?',
                        'explanation' => 'Une exigence fonctionnelle décrit ce que le système doit faire. Une exigence non fonctionnelle décrit notamment comment il doit se comporter.',
                        'choices' => [
                            ['choice_text' => 'La fonction décrit ce que le système fait, la non-fonctionnelle décrit notamment ses qualités et contraintes', 'is_correct' => true],
                            ['choice_text' => 'Les deux désignent exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'Une exigence fonctionnelle concerne uniquement le matériel', 'is_correct' => false],
                            ['choice_text' => 'Une exigence non fonctionnelle concerne uniquement les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un architecte doit-il comprendre le contexte métier ?',
                        'explanation' => 'Une solution techniquement élégante peut être inadaptée si elle ne répond pas aux objectifs, contraintes ou priorités de l’organisation.',
                        'choices' => [
                            ['choice_text' => 'Pour aligner les choix techniques sur les objectifs et contraintes métier', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer les responsables métier', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute discussion technique', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir les technologies uniquement selon leur popularité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un composant architectural ?',
                        'explanation' => 'Un composant est une partie identifiable du système qui possède une responsabilité ou une fonction précise.',
                        'choices' => [
                            ['choice_text' => 'Une partie identifiable du système avec une responsabilité définie', 'is_correct' => true],
                            ['choice_text' => 'Uniquement un serveur physique', 'is_correct' => false],
                            ['choice_text' => 'Uniquement une base de données', 'is_correct' => false],
                            ['choice_text' => 'Un document de projet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les responsabilités entre composants ?',
                        'explanation' => 'Une séparation claire des responsabilités facilite la compréhension, le changement, le test et la maintenance du système.',
                        'choices' => [
                            ['choice_text' => 'Réduire le couplage et faciliter la maintenance', 'is_correct' => true],
                            ['choice_text' => 'Multiplier volontairement les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les composants de communiquer', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les interfaces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le couplage entre deux composants ?',
                        'explanation' => 'Le couplage représente le degré de dépendance entre deux composants.',
                        'choices' => [
                            ['choice_text' => 'Le degré de dépendance entre deux composants', 'is_correct' => true],
                            ['choice_text' => 'La quantité de mémoire disponible', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du processeur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’utilisateurs connectés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi favoriser une architecture faiblement couplée ?',
                        'explanation' => 'Un faible couplage réduit l’impact des changements et facilite l’évolution indépendante des composants.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre aux composants d’évoluer avec moins d’impact mutuel', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les échanges entre composants', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une performance maximale', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les décisions architecturales importantes ?',
                        'explanation' => 'La documentation conserve le contexte, les alternatives et les raisons ayant conduit à une décision.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre plus tard pourquoi certains choix ont été faits', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute évolution du système', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les réunions techniques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’un architecte IT ?',
                        'explanation' => 'L’architecte relie les besoins métier et techniques et définit une structure cohérente pour le système.',
                        'choices' => [
                            ['choice_text' => 'Définir une solution cohérente alignée sur les besoins et contraintes', 'is_correct' => true],
                            ['choice_text' => 'Écrire seul tout le code du projet', 'is_correct' => false],
                            ['choice_text' => 'Administrer uniquement les comptes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les équipes opérationnelles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Beginner — Architecture en couches',
                'description' => 'Apprenez les principes de l’architecture en couches, la séparation des responsabilités et les interactions entre couches.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principe d’une architecture en couches ?',
                        'explanation' => 'Les responsabilités sont réparties dans différentes couches qui collaborent selon des règles définies.',
                        'choices' => [
                            ['choice_text' => 'Organiser les responsabilités du système en niveaux distincts', 'is_correct' => true],
                            ['choice_text' => 'Mettre toute la logique dans un seul fichier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les interfaces entre composants', 'is_correct' => false],
                            ['choice_text' => 'Utiliser une base de données par utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue généralement la couche de présentation ?',
                        'explanation' => 'Elle gère l’interaction avec les utilisateurs ou les clients du système.',
                        'choices' => [
                            ['choice_text' => 'Gérer la présentation et les interactions avec le client', 'is_correct' => true],
                            ['choice_text' => 'Stocker toutes les données de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Administrer directement le matériel', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue généralement une couche métier ?',
                        'explanation' => 'Elle contient les règles et traitements métier de l’application.',
                        'choices' => [
                            ['choice_text' => 'Implémenter les règles et traitements métier', 'is_correct' => true],
                            ['choice_text' => 'Afficher uniquement les boutons de l’interface', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Gérer uniquement les câbles réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue généralement la couche d’accès aux données ?',
                        'explanation' => 'Elle permet au reste du système d’interagir avec les bases de données ou mécanismes de persistance.',
                        'choices' => [
                            ['choice_text' => 'Encapsuler l’accès aux mécanismes de stockage et de persistance', 'is_correct' => true],
                            ['choice_text' => 'Gérer uniquement l’interface utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la logique métier', 'is_correct' => false],
                            ['choice_text' => 'Contrôler les utilisateurs physiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer la présentation de la logique métier ?',
                        'explanation' => 'Cette séparation permet notamment de modifier l’interface sans réécrire les règles métier.',
                        'choices' => [
                            ['choice_text' => 'Permettre à l’interface et aux règles métier d’évoluer plus indépendamment', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute communication entre elles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests métier', 'is_correct' => false],
                            ['choice_text' => 'Créer une base de données supplémentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage d’une séparation claire des responsabilités ?',
                        'explanation' => 'Chaque couche devient plus compréhensible et les changements sont plus faciles à localiser.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la maintenance, les tests et l’évolution', 'is_correct' => true],
                            ['choice_text' => 'Augmenter volontairement les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Empêcher la réutilisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les interfaces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une couche ne devrait-elle pas dépendre inutilement de détails internes d’une autre couche ?',
                        'explanation' => 'Une dépendance excessive aux détails internes augmente le couplage et rend les changements plus risqués.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le couplage et protéger les composants contre les changements internes', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute abstraction', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les API', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une architecture en couches doit-elle obligatoirement comporter exactement trois couches ?',
                        'explanation' => 'Le nombre de couches dépend du système. L’essentiel est la séparation cohérente des responsabilités.',
                        'choices' => [
                            ['choice_text' => 'Non, le nombre de couches dépend des responsabilités et du contexte', 'is_correct' => true],
                            ['choice_text' => 'Oui, trois couches sont toujours obligatoires', 'is_correct' => false],
                            ['choice_text' => 'Oui, exactement cinq couches sont nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Oui, les couches doivent toujours être matérielles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si toutes les responsabilités sont mélangées dans un seul composant ?',
                        'explanation' => 'Le composant devient difficile à comprendre, modifier et tester.',
                        'choices' => [
                            ['choice_text' => 'Le composant devient difficile à maintenir et à faire évoluer', 'is_correct' => true],
                            ['choice_text' => 'Le système devient automatiquement plus sécurisé', 'is_correct' => false],
                            ['choice_text' => 'Les performances deviennent toujours meilleures', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances disparaissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture en couches aide-t-elle les tests ?',
                        'explanation' => 'Les responsabilités séparées permettent de tester certaines parties indépendamment ou avec des dépendances simulées.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de tester des responsabilités distinctes plus facilement', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime le besoin de tests d’intégration', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit que tous les tests réussiront', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les tests unitaires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Beginner — Réseaux et intégration',
                'description' => 'Découvrez comment les systèmes communiquent grâce aux réseaux, APIs et mécanismes d’intégration.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle d’une API dans une architecture ?',
                        'explanation' => 'Une API définit une manière contrôlée pour qu’un système ou composant interagisse avec un autre.',
                        'choices' => [
                            ['choice_text' => 'Définir comment un composant peut interagir avec un autre', 'is_correct' => true],
                            ['choice_text' => 'Stocker uniquement les fichiers utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Garantir la disponibilité du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une interface plutôt qu’un accès direct aux détails internes d’un composant ?',
                        'explanation' => 'L’interface masque l’implémentation interne et réduit le couplage.',
                        'choices' => [
                            ['choice_text' => 'Pour découpler les consommateurs de l’implémentation interne', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute communication', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les composants identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole est très courant pour les APIs Web modernes ?',
                        'explanation' => 'HTTP/HTTPS est couramment utilisé pour exposer et consommer des APIs Web.',
                        'choices' => [
                            ['choice_text' => 'HTTP/HTTPS', 'is_correct' => true],
                            ['choice_text' => 'SMTP uniquement', 'is_correct' => false],
                            ['choice_text' => 'FTP uniquement', 'is_correct' => false],
                            ['choice_text' => 'DHCP uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi HTTPS est-il préféré à HTTP pour les communications sensibles ?',
                        'explanation' => 'HTTPS protège les communications HTTP grâce au chiffrement TLS.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il protège la communication grâce à TLS', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ne nécessite aucun serveur', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il remplace DNS', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il garantit que l’application est sans bug', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les systèmes distribués ont-ils besoin de contrats d’interface clairs ?',
                        'explanation' => 'Les composants évoluent indépendamment et doivent comprendre précisément les formats et comportements attendus.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre aux composants de communiquer de manière prévisible', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute évolution indépendante', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro panne réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une intégration synchrone ?',
                        'explanation' => 'Dans une communication synchrone, le demandeur attend généralement une réponse avant de poursuivre.',
                        'choices' => [
                            ['choice_text' => 'Le demandeur attend généralement une réponse avant de poursuivre', 'is_correct' => true],
                            ['choice_text' => 'Aucune réponse n’est jamais possible', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes ne communiquent pas', 'is_correct' => false],
                            ['choice_text' => 'La communication passe toujours par une base de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une intégration asynchrone ?',
                        'explanation' => 'Dans un modèle asynchrone, l’émetteur peut envoyer un message sans attendre immédiatement la fin du traitement.',
                        'choices' => [
                            ['choice_text' => 'L’émetteur peut poursuivre sans attendre immédiatement le traitement final', 'is_correct' => true],
                            ['choice_text' => 'L’émetteur bloque toujours jusqu’à la réponse', 'is_correct' => false],
                            ['choice_text' => 'La communication est impossible entre systèmes', 'is_correct' => false],
                            ['choice_text' => 'Elle nécessite toujours une API REST', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une file de messages entre certains composants ?',
                        'explanation' => 'Une file peut découpler les producteurs et consommateurs et absorber certaines variations de charge.',
                        'choices' => [
                            ['choice_text' => 'Découpler les composants et absorber certaines variations de charge', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro erreur de traitement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une API doit-elle documenter ses entrées et sorties ?',
                        'explanation' => 'Une documentation claire aide les consommateurs à utiliser correctement l’interface.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre aux consommateurs de comprendre le contrat d’utilisation', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter tout changement futur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi gérer les erreurs de communication dans une architecture distribuée ?',
                        'explanation' => 'Les réseaux et services distants peuvent être lents, indisponibles ou retourner des erreurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un composant distant peut échouer ou devenir temporairement indisponible', 'is_correct' => true],
                            ['choice_text' => 'Parce que les réseaux sont toujours parfaits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une API ne peut jamais répondre', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les dépendances', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Beginner — Données et persistance',
                'description' => 'Apprenez les bases de la persistance des données, bases de données et choix de stockage.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une application a-t-elle généralement besoin d’un mécanisme de persistance ?',
                        'explanation' => 'La persistance permet de conserver les données au-delà de la durée de vie d’un processus.',
                        'choices' => [
                            ['choice_text' => 'Conserver les données au-delà de l’exécution immédiate de l’application', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la mémoire du serveur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les APIs', 'is_correct' => false],
                            ['choice_text' => 'Garantir la sécurité du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle caractéristique distingue principalement une base relationnelle ?',
                        'explanation' => 'Les bases relationnelles organisent les données selon des tables et relations et utilisent généralement SQL.',
                        'choices' => [
                            ['choice_text' => 'Elle organise principalement les données en tables avec des relations définies', 'is_correct' => true],
                            ['choice_text' => 'Elle ne peut stocker que des images', 'is_correct' => false],
                            ['choice_text' => 'Elle ne permet aucune requête', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toujours un système de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi choisir un type de stockage en fonction du besoin ?',
                        'explanation' => 'Les applications ont des exigences différentes en matière de structure, performance, volume et mode d’accès.',
                        'choices' => [
                            ['choice_text' => 'Parce que les besoins de données, accès et performances varient selon les applications', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul stockage convient toujours à tout', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bases de données sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que le stockage n’affecte jamais l’architecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une clé primaire ?',
                        'explanation' => 'Elle identifie de manière unique une ligne dans une table relationnelle.',
                        'choices' => [
                            ['choice_text' => 'Un identifiant unique d’une ligne dans une table', 'is_correct' => true],
                            ['choice_text' => 'Un mot de passe administrateur', 'is_correct' => false],
                            ['choice_text' => 'Une clé réseau', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde de la base', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sauvegardes font-elles partie de l’architecture des données ?',
                        'explanation' => 'Une architecture de données doit prévoir la restauration en cas de panne, erreur, suppression ou incident.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre la récupération après certains incidents ou pertes de données', 'is_correct' => true],
                            ['choice_text' => 'Pour accélérer automatiquement les requêtes', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les transactions', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer toutes les erreurs utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les données transactionnelles et analytiques dans certaines architectures ?',
                        'explanation' => 'Les usages transactionnels et analytiques ont souvent des profils de charge différents.',
                        'choices' => [
                            ['choice_text' => 'Leurs besoins de performance et de requêtes peuvent être très différents', 'is_correct' => true],
                            ['choice_text' => 'Les données transactionnelles ne peuvent jamais être analysées', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes analytiques ne stockent aucune donnée', 'is_correct' => false],
                            ['choice_text' => 'SQL empêche toute analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture de données doit-elle considérer la qualité des données ?',
                        'explanation' => 'Des données incomplètes ou incorrectes peuvent produire des résultats erronés même si le système fonctionne techniquement.',
                        'choices' => [
                            ['choice_text' => 'La qualité des données influence directement la valeur produite par le système', 'is_correct' => true],
                            ['choice_text' => 'La qualité est toujours garantie par la base de données', 'is_correct' => false],
                            ['choice_text' => 'La qualité ne concerne que les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'La qualité n’a aucun lien avec l’architecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi chiffrer certaines données au repos ?',
                        'explanation' => 'Le chiffrement au repos réduit le risque d’exposition des données si le support ou l’environnement de stockage est compromis.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’exposition des données stockées', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun compte ne sera compromis', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la vitesse des requêtes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les contrôles d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir une politique de rétention des données ?',
                        'explanation' => 'Toutes les données ne doivent pas nécessairement être conservées indéfiniment et la conservation entraîne des coûts et responsabilités.',
                        'choices' => [
                            ['choice_text' => 'Définir combien de temps les données doivent être conservées selon leur besoin', 'is_correct' => true],
                            ['choice_text' => 'Conserver toujours toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute gouvernance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture doit-elle prévoir la restauration des données et pas seulement leur sauvegarde ?',
                        'explanation' => 'Une sauvegarde inutilisable ne répond pas au besoin de continuité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une sauvegarde n’a de valeur opérationnelle que si les données peuvent être restaurées', 'is_correct' => true],
                            ['choice_text' => 'Parce que les sauvegardes sont toujours corrompues', 'is_correct' => false],
                            ['choice_text' => 'Parce que la restauration est indépendante des sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données ne doivent jamais être restaurées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Beginner — Disponibilité et performance',
                'description' => 'Découvrez les notions de disponibilité, capacité, latence, scalabilité et résilience.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que signifie la disponibilité d’un système ?',
                        'explanation' => 'La disponibilité représente la capacité du service à être accessible et fonctionnel lorsqu’il est nécessaire.',
                        'choices' => [
                            ['choice_text' => 'La capacité du service à être accessible et fonctionnel au moment attendu', 'is_correct' => true],
                            ['choice_text' => 'La quantité de code produite', 'is_correct' => false],
                            ['choice_text' => 'La taille du disque', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de développeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la latence ?',
                        'explanation' => 'La latence mesure le délai nécessaire pour obtenir une réponse ou accomplir une opération.',
                        'choices' => [
                            ['choice_text' => 'Le temps nécessaire pour obtenir une réponse ou terminer une opération', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de serveurs disponibles', 'is_correct' => false],
                            ['choice_text' => 'La quantité de stockage', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’utilisateurs inscrits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le throughput ?',
                        'explanation' => 'Le throughput mesure la quantité de travail traitée pendant une période donnée.',
                        'choices' => [
                            ['choice_text' => 'La quantité de travail traitée pendant une période donnée', 'is_correct' => true],
                            ['choice_text' => 'Le temps de réponse d’une seule requête', 'is_correct' => false],
                            ['choice_text' => 'La taille d’un fichier', 'is_correct' => false],
                            ['choice_text' => 'La quantité de RAM disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la scalabilité horizontale ?',
                        'explanation' => 'Elle consiste à augmenter la capacité en ajoutant davantage d’instances ou de nœuds.',
                        'choices' => [
                            ['choice_text' => 'Augmenter la capacité en ajoutant davantage d’instances', 'is_correct' => true],
                            ['choice_text' => 'Augmenter uniquement la RAM d’un seul serveur', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de serveurs', 'is_correct' => false],
                            ['choice_text' => 'Changer uniquement le système de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la scalabilité verticale ?',
                        'explanation' => 'Elle consiste à augmenter les ressources d’une machine existante, comme CPU ou mémoire.',
                        'choices' => [
                            ['choice_text' => 'Augmenter les ressources d’une machine existante', 'is_correct' => true],
                            ['choice_text' => 'Ajouter de nouvelles régions cloud', 'is_correct' => false],
                            ['choice_text' => 'Créer plusieurs copies du code', 'is_correct' => false],
                            ['choice_text' => 'Déplacer les utilisateurs vers un autre service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un load balancer peut-il améliorer une architecture ?',
                        'explanation' => 'Il peut répartir le trafic entre plusieurs instances et retirer certaines instances défaillantes.',
                        'choices' => [
                            ['choice_text' => 'Répartir le trafic et contribuer à la disponibilité du service', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ajouter des serveurs ne résout-il pas toujours un problème de performance ?',
                        'explanation' => 'Le goulot d’étranglement peut être situé dans un autre composant comme une base de données ou un réseau.',
                        'choices' => [
                            ['choice_text' => 'Le goulot d’étranglement peut se trouver ailleurs dans le système', 'is_correct' => true],
                            ['choice_text' => 'Les serveurs supplémentaires ralentissent toujours le système', 'is_correct' => false],
                            ['choice_text' => 'La performance ne dépend jamais de l’architecture', 'is_correct' => false],
                            ['choice_text' => 'Un load balancer résout automatiquement tous les bottlenecks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs instances d’un service critique ?',
                        'explanation' => 'Plusieurs instances peuvent réduire la dépendance à une seule machine et faciliter la disponibilité.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact d’une panne d’une seule instance', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun logiciel ne tombera en panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture doit-elle prévoir les pics de charge ?',
                        'explanation' => 'Une charge supérieure à la normale peut provoquer saturation, latence ou indisponibilité si elle n’est pas anticipée.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une augmentation de charge provoque une dégradation majeure', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la charge restera toujours stable', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de performance', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs d’accéder au système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer la performance après une modification architecturale ?',
                        'explanation' => 'Une modification supposée améliorer les performances peut produire un résultat différent en conditions réelles.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que le changement améliore réellement le comportement observé', 'is_correct' => true],
                            ['choice_text' => 'Garantir une amélioration dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute comparaison', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques précédentes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Beginner — Sécurité architecturale',
                'description' => 'Découvrez les principes essentiels de sécurité à intégrer dans la conception des architectures IT.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi la sécurité doit-elle être considérée dès la conception de l’architecture ?',
                        'explanation' => 'Intégrer la sécurité tôt réduit le risque de devoir corriger des choix structurels coûteux après le déploiement.',
                        'choices' => [
                            ['choice_text' => 'Pour intégrer les contrôles de sécurité avant que les choix techniques ne deviennent difficiles à modifier', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute fonctionnalité métier', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le système plus complexe volontairement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe du moindre privilège ?',
                        'explanation' => 'Chaque utilisateur ou composant doit disposer uniquement des droits nécessaires à son rôle.',
                        'choices' => [
                            ['choice_text' => 'Accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Donner les droits administrateur à tout le monde', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les comptes', 'is_correct' => false],
                            ['choice_text' => 'Partager les identifiants entre équipes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi segmenter un réseau ou une architecture ?',
                        'explanation' => 'La segmentation limite les communications inutiles et peut réduire l’impact d’une compromission.',
                        'choices' => [
                            ['choice_text' => 'Limiter les communications et réduire le rayon d’impact d’un incident', 'is_correct' => true],
                            ['choice_text' => 'Permettre tous les flux sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les services réseau', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité absolue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi chiffrer les communications sensibles ?',
                        'explanation' => 'Le chiffrement protège les données en transit contre certaines interceptions.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’exposition des données pendant leur transmission', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence de vulnérabilités applicatives', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi protéger les secrets et clés utilisés par une architecture ?',
                        'explanation' => 'Une clé ou un secret compromis peut donner accès à des ressources sensibles.',
                        'choices' => [
                            ['choice_text' => 'Limiter le risque d’accès non autorisé aux ressources protégées', 'is_correct' => true],
                            ['choice_text' => 'Parce que les secrets ne servent qu’en développement', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des comptes individuels ?',
                        'explanation' => 'Les comptes individuels facilitent la traçabilité et la gestion précise des permissions.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la traçabilité et le contrôle des accès', 'is_correct' => true],
                            ['choice_text' => 'Partager plus facilement les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les audits', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’un compte ne sera jamais compromis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi appliquer une défense en profondeur ?',
                        'explanation' => 'Plusieurs couches de protection réduisent l’impact lorsqu’une seule mesure est contournée.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une seule défaillance de sécurité donne un accès complet', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les protections secondaires', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro attaque', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute communication entre composants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs de sécurité sont-ils importants dans une architecture ?',
                        'explanation' => 'Ils fournissent des informations utiles pour détecter, diagnostiquer et analyser des événements suspects.',
                        'choices' => [
                            ['choice_text' => 'Fournir de la visibilité sur les événements utiles à la détection et aux investigations', 'is_correct' => true],
                            ['choice_text' => 'Empêcher automatiquement toutes les attaques', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi désactiver les services qui ne sont pas nécessaires ?',
                        'explanation' => 'Les services inutiles peuvent augmenter la surface d’attaque et la complexité opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Réduire la surface d’attaque et la complexité du système', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les services réseau', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Éviter les mises à jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles d’accès doivent-ils correspondre aux responsabilités réelles ?',
                        'explanation' => 'Des droits excessifs ou obsolètes augmentent le risque de mauvaise utilisation ou de compromission.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter que les utilisateurs ou services disposent de droits inutiles', 'is_correct' => true],
                            ['choice_text' => 'Pour donner des privilèges permanents', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la segmentation', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’audit', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Beginner — Cloud et systèmes modernes',
                'description' => 'Découvrez les fondamentaux des architectures cloud, conteneurs, services managés et approches modernes.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le cloud peut-il simplifier certains déploiements architecturaux ?',
                        'explanation' => 'Les services cloud permettent de provisionner rapidement des ressources sans construire toute l’infrastructure physique correspondante.',
                        'choices' => [
                            ['choice_text' => 'Il permet de provisionner rapidement certaines ressources à la demande', 'is_correct' => true],
                            ['choice_text' => 'Il supprime toute gestion d’infrastructure', 'is_correct' => false],
                            ['choice_text' => 'Il garantit zéro coût', 'is_correct' => false],
                            ['choice_text' => 'Il rend toutes les applications identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un service managé dans le cloud ?',
                        'explanation' => 'Un service managé réduit généralement une partie du travail opérationnel nécessaire pour exploiter le composant.',
                        'choices' => [
                            ['choice_text' => 'Réduire une partie de la charge opérationnelle liée à la gestion du composant', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute responsabilité de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute configuration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle toujours considérer les coûts ?',
                        'explanation' => 'Les ressources cloud sont consommées et facturées selon différents modèles et les choix architecturaux influencent directement les dépenses.',
                        'choices' => [
                            ['choice_text' => 'Les choix d’architecture influencent directement la consommation et les coûts', 'is_correct' => true],
                            ['choice_text' => 'Le cloud est toujours gratuit', 'is_correct' => false],
                            ['choice_text' => 'Les coûts sont indépendants de l’architecture', 'is_correct' => false],
                            ['choice_text' => 'Le cloud supprime toute contrainte financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conteneurs sont-ils intéressants dans certaines architectures ?',
                        'explanation' => 'Ils permettent de packager une application avec ses dépendances dans un environnement plus facilement reproductible.',
                        'choices' => [
                            ['choice_text' => 'Ils facilitent le packaging et le déploiement cohérent d’applications', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent toujours les machines virtuelles', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent zéro vulnérabilité', 'is_correct' => false],
                            ['choice_text' => 'Ils ne nécessitent jamais de ressources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs zones de disponibilité pour un service critique ?',
                        'explanation' => 'Répartir les instances réduit la dépendance à un seul emplacement physique ou logique.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact d’une panne affectant une seule zone', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Éviter le monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des frontières claires entre environnements cloud ?',
                        'explanation' => 'La séparation des environnements limite les erreurs de configuration et facilite la gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’un changement dans un environnement affecte un autre', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les environnements ont des données identiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle prévoir la surveillance des ressources ?',
                        'explanation' => 'Le monitoring permet de détecter les problèmes, les coûts anormaux et les besoins de capacité.',
                        'choices' => [
                            ['choice_text' => 'Pour suivre la santé, les performances et la consommation des ressources', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer automatiquement toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro panne', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les systèmes cloud doivent-ils prévoir une stratégie de sauvegarde ?',
                        'explanation' => 'Le fait qu’un système soit dans le cloud ne supprime pas les risques d’erreur, corruption, suppression ou compromission.',
                        'choices' => [
                            ['choice_text' => 'Parce que le cloud ne supprime pas le besoin de récupération des données', 'is_correct' => true],
                            ['choice_text' => 'Parce que les fournisseurs ne stockent jamais les données', 'is_correct' => false],
                            ['choice_text' => 'Parce que les sauvegardes sont inutiles dans le cloud', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les données cloud sont automatiquement immuables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture moderne doit-elle prévoir l’évolutivité ?',
                        'explanation' => 'Les volumes de trafic, données et utilisateurs peuvent évoluer dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir répondre à la croissance des usages sans refonte permanente', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le système ne changera jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute maintenance', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture cloud doit-elle aussi prévoir une stratégie de sortie ?',
                        'explanation' => 'Une organisation peut avoir besoin de changer de technologie ou de fournisseur pour des raisons de coût, réglementation ou stratégie.',
                        'choices' => [
                            ['choice_text' => 'Préparer une éventuelle migration et limiter les dépendances excessives', 'is_correct' => true],
                            ['choice_text' => 'Empêcher l’utilisation du cloud', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune migration ne sera nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les abstractions', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Beginner — Cas pratiques d’architecture',
                'description' => 'Mettez en pratique les principes fondamentaux d’architecture à travers des situations concrètes.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une application doit servir progressivement plus d’utilisateurs. Quelle préoccupation architecturale devient importante ?',
                        'explanation' => 'L’architecture doit pouvoir absorber l’augmentation du trafic sans dégradation excessive du service.',
                        'choices' => [
                            ['choice_text' => 'La scalabilité', 'is_correct' => true],
                            ['choice_text' => 'La couleur de l’interface', 'is_correct' => false],
                            ['choice_text' => 'Le nom du serveur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le format des commentaires du code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut éviter qu’une panne d’un seul serveur arrête une application critique. Quel concept est pertinent ?',
                        'explanation' => 'La redondance permet de disposer de plusieurs instances capables de prendre le relais.',
                        'choices' => [
                            ['choice_text' => 'La redondance et la haute disponibilité', 'is_correct' => true],
                            ['choice_text' => 'La compression des fichiers', 'is_correct' => false],
                            ['choice_text' => 'La documentation seule', 'is_correct' => false],
                            ['choice_text' => 'Le versioning Git uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe souhaite remplacer une base de données sans modifier toutes les applications qui l’utilisent. Quel principe est utile ?',
                        'explanation' => 'Une abstraction ou interface stable réduit la dépendance directe à une implémentation particulière.',
                        'choices' => [
                            ['choice_text' => 'Découpler l’application de l’implémentation de stockage', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de dépendances directes', 'is_correct' => false],
                            ['choice_text' => 'Mettre toutes les données dans le code', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les interfaces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API reçoit beaucoup de requêtes et certaines deviennent très lentes. Quelle première démarche est raisonnable ?',
                        'explanation' => 'Avant d’ajouter des ressources, il faut identifier le véritable goulot grâce aux métriques et au diagnostic.',
                        'choices' => [
                            ['choice_text' => 'Mesurer la latence et identifier le composant responsable du ralentissement', 'is_correct' => true],
                            ['choice_text' => 'Ajouter immédiatement dix serveurs sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Changer toutes les technologies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service doit pouvoir continuer à fonctionner même si un composant secondaire tombe temporairement. Quel principe est pertinent ?',
                        'explanation' => 'La conception tolérante aux pannes permet au système de continuer avec une capacité réduite ou un mécanisme alternatif.',
                        'choices' => [
                            ['choice_text' => 'La tolérance aux pannes et les mécanismes de fallback', 'is_correct' => true],
                            ['choice_text' => 'Le couplage fort', 'is_correct' => false],
                            ['choice_text' => 'L’absence de monitoring', 'is_correct' => false],
                            ['choice_text' => 'La suppression des dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation souhaite rendre ses environnements reproductibles. Quelle pratique est particulièrement adaptée ?',
                        'explanation' => 'Décrire l’infrastructure dans des fichiers versionnés permet de reconstruire des environnements cohérents.',
                        'choices' => [
                            ['choice_text' => 'Utiliser l’Infrastructure as Code', 'is_correct' => true],
                            ['choice_text' => 'Configurer chaque serveur manuellement', 'is_correct' => false],
                            ['choice_text' => 'Copier uniquement les captures d’écran', 'is_correct' => false],
                            ['choice_text' => 'Éviter le contrôle de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise doit protéger les communications entre ses services. Quel mécanisme est généralement approprié ?',
                        'explanation' => 'Le chiffrement des communications protège les données pendant leur transmission.',
                        'choices' => [
                            ['choice_text' => 'Utiliser des communications chiffrées', 'is_correct' => true],
                            ['choice_text' => 'Désactiver toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Partager les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Ouvrir tous les ports', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application critique doit être restaurée après une panne majeure. Quel élément architectural doit avoir été prévu ?',
                        'explanation' => 'La reprise dépend des sauvegardes, procédures, ressources et dépendances nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Une stratégie de sauvegarde et de reprise', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une interface graphique', 'is_correct' => false],
                            ['choice_text' => 'Uniquement plusieurs développeurs', 'is_correct' => false],
                            ['choice_text' => 'Uniquement une base de données plus grande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe remarque que chaque nouvelle fonctionnalité nécessite de modifier de nombreux composants. Quel problème architectural cela peut-il révéler ?',
                        'explanation' => 'Des changements répandus peuvent indiquer un couplage trop fort ou une mauvaise séparation des responsabilités.',
                        'choices' => [
                            ['choice_text' => 'Un couplage excessif entre les composants', 'is_correct' => true],
                            ['choice_text' => 'Un manque de stockage uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une mauvaise résolution DNS', 'is_correct' => false],
                            ['choice_text' => 'Une mémoire RAM trop grande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une bonne décision architecturale ?',
                        'explanation' => 'Une décision architecturale doit être adaptée au contexte, justifiée par les besoins et équilibrer plusieurs contraintes.',
                        'choices' => [
                            ['choice_text' => 'Choisir une solution adaptée au contexte en équilibrant besoins, contraintes et risques', 'is_correct' => true],
                            ['choice_text' => 'Choisir toujours la technologie la plus récente', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours la solution la moins chère', 'is_correct' => false],
                            ['choice_text' => 'Choisir la solution la plus complexe', 'is_correct' => false],
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