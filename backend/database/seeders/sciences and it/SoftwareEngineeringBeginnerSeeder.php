<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SoftwareEngineeringBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'software-engineering')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — INTRODUCTION AU GÉNIE LOGICIEL
            // ============================================================
            [
                'title' => 'Introduction au génie logiciel',
                'description' => 'Fondamentaux du software development, du cycle de vie logiciel et des bonnes pratiques.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le software engineering ?',
                        'choices' => [
                            ['text' => 'Une discipline de conception et de maintenance de logiciels', 'is_correct' => true],
                            ['text' => 'Un langage de programmation', 'is_correct' => false],
                            ['text' => 'Un système de gestion de fichiers', 'is_correct' => false],
                            ['text' => 'Un protocole réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le software engineering applique des méthodes structurées à la conception, au développement, aux tests et à la maintenance des logiciels.',
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un requirement ?',
                        'choices' => [
                            ['text' => 'Décrire un besoin ou un comportement attendu du système', 'is_correct' => true],
                            ['text' => 'Choisir la couleur de l’éditeur', 'is_correct' => false],
                            ['text' => 'Créer automatiquement une database', 'is_correct' => false],
                            ['text' => 'Compiler le programme', 'is_correct' => false],
                        ],
                        'explanation' => 'Un requirement décrit un besoin, une contrainte ou un comportement attendu du logiciel.',
                    ],
                    [
                        'question' => 'Que signifie software lifecycle ?',
                        'choices' => [
                            ['text' => 'L’ensemble des étapes traversées par un logiciel de sa conception à sa maintenance', 'is_correct' => true],
                            ['text' => 'La durée d’exécution d’une seule fonction', 'is_correct' => false],
                            ['text' => 'La taille du repository', 'is_correct' => false],
                            ['text' => 'Le nombre de développeurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le software lifecycle couvre généralement les phases de conception, développement, test, déploiement et maintenance.',
                    ],
                    [
                        'question' => 'Pourquoi définir les requirements avant le développement ?',
                        'choices' => [
                            ['text' => 'Pour clarifier les besoins et réduire les ambiguïtés', 'is_correct' => true],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour éviter le version control', 'is_correct' => false],
                            ['text' => 'Pour empêcher les changements', 'is_correct' => false],
                        ],
                        'explanation' => 'Des requirements clairs donnent une base commune aux équipes et réduisent les malentendus.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bug ?',
                        'choices' => [
                            ['text' => 'Un comportement du logiciel qui ne correspond pas au comportement attendu', 'is_correct' => true],
                            ['text' => 'Une nouvelle fonctionnalité', 'is_correct' => false],
                            ['text' => 'Un type de database', 'is_correct' => false],
                            ['text' => 'Un outil de déploiement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bug est un défaut qui provoque un comportement incorrect ou inattendu.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser le version control ?',
                        'choices' => [
                            ['text' => 'Pour suivre les changements du code et collaborer avec l’équipe', 'is_correct' => true],
                            ['text' => 'Pour remplacer les tests', 'is_correct' => false],
                            ['text' => 'Pour accélérer le CPU', 'is_correct' => false],
                            ['text' => 'Pour stocker uniquement des images', 'is_correct' => false],
                        ],
                        'explanation' => 'Le version control permet notamment de suivre l’historique, collaborer et revenir à des versions précédentes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une code review ?',
                        'choices' => [
                            ['text' => 'Une vérification du code par un ou plusieurs autres développeurs', 'is_correct' => true],
                            ['text' => 'Une compilation automatique', 'is_correct' => false],
                            ['text' => 'Un test de performance uniquement', 'is_correct' => false],
                            ['text' => 'Une sauvegarde de database', 'is_correct' => false],
                        ],
                        'explanation' => 'La code review aide à détecter les erreurs et à améliorer la qualité et la maintenabilité du code.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un test ?',
                        'choices' => [
                            ['text' => 'Vérifier qu’un comportement attendu est respecté', 'is_correct' => true],
                            ['text' => 'Modifier automatiquement le code', 'is_correct' => false],
                            ['text' => 'Créer un utilisateur', 'is_correct' => false],
                            ['text' => 'Remplacer le requirement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un test vérifie qu’une partie du système se comporte conformément aux attentes.',
                    ],
                    [
                        'question' => 'Pourquoi documenter les décisions importantes ?',
                        'choices' => [
                            ['text' => 'Pour conserver le contexte et faciliter la compréhension future', 'is_correct' => true],
                            ['text' => 'Pour augmenter la taille du code', 'is_correct' => false],
                            ['text' => 'Pour supprimer les commentaires', 'is_correct' => false],
                            ['text' => 'Pour éviter les reviews', 'is_correct' => false],
                        ],
                        'explanation' => 'La documentation des décisions conserve le contexte nécessaire aux futurs changements.',
                    ],
                    [
                        'question' => 'Qu’est-ce que maintenance logicielle ?',
                        'choices' => [
                            ['text' => 'Les activités réalisées après la livraison pour corriger, adapter ou améliorer le logiciel', 'is_correct' => true],
                            ['text' => 'La création du premier fichier', 'is_correct' => false],
                            ['text' => 'Le choix du framework uniquement', 'is_correct' => false],
                            ['text' => 'La suppression du repository', 'is_correct' => false],
                        ],
                        'explanation' => 'La maintenance comprend notamment les corrections, adaptations et améliorations après livraison.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — PROGRAMMING PRACTICES
            // ============================================================
            [
                'title' => 'Programming Practices',
                'description' => 'Bonnes pratiques de programmation et organisation du code.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Que signifie DRY ?',
                        'choices' => [
                            ['text' => 'Don’t Repeat Yourself', 'is_correct' => true],
                            ['text' => 'Deploy Runtime Yourself', 'is_correct' => false],
                            ['text' => 'Data Requires YAML', 'is_correct' => false],
                            ['text' => 'Debug Remote Yearly', 'is_correct' => false],
                        ],
                        'explanation' => 'DRY recommande d’éviter la duplication inutile de connaissances ou de logique.',
                    ],
                    [
                        'question' => 'Que signifie KISS en software design ?',
                        'choices' => [
                            ['text' => 'Keep It Simple, Stupid', 'is_correct' => true],
                            ['text' => 'Keep Interfaces Securely Stored', 'is_correct' => false],
                            ['text' => 'Kernel Is System Software', 'is_correct' => false],
                            ['text' => 'Keep Integration Services Separate', 'is_correct' => false],
                        ],
                        'explanation' => 'KISS encourage des solutions simples plutôt qu’une complexité inutile.',
                    ],
                    [
                        'question' => 'Pourquoi donner des noms explicites aux variables ?',
                        'choices' => [
                            ['text' => 'Pour rendre le code plus compréhensible', 'is_correct' => true],
                            ['text' => 'Pour augmenter la mémoire disponible', 'is_correct' => false],
                            ['text' => 'Pour éviter tous les bugs', 'is_correct' => false],
                            ['text' => 'Pour remplacer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Des noms explicites facilitent la lecture, la maintenance et la review du code.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une function ?',
                        'choices' => [
                            ['text' => 'Un bloc de code destiné à réaliser une opération identifiable', 'is_correct' => true],
                            ['text' => 'Une database', 'is_correct' => false],
                            ['text' => 'Un repository Git', 'is_correct' => false],
                            ['text' => 'Un serveur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une function encapsule une opération et peut recevoir des paramètres et retourner un résultat.',
                    ],
                    [
                        'question' => 'Pourquoi éviter les fonctions trop longues ?',
                        'choices' => [
                            ['text' => 'Elles deviennent plus difficiles à comprendre, tester et maintenir', 'is_correct' => true],
                            ['text' => 'Elles utilisent toujours plus de CPU', 'is_correct' => false],
                            ['text' => 'Elles empêchent toute compilation', 'is_correct' => false],
                            ['text' => 'Elles suppriment les classes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction trop longue concentre souvent plusieurs responsabilités et augmente la difficulté de maintenance.',
                    ],
                    [
                        'question' => 'Qu’est-ce que refactoring ?',
                        'choices' => [
                            ['text' => 'Améliorer la structure interne du code sans changer son comportement attendu', 'is_correct' => true],
                            ['text' => 'Ajouter une nouvelle fonctionnalité obligatoire', 'is_correct' => false],
                            ['text' => 'Supprimer les tests', 'is_correct' => false],
                            ['text' => 'Changer le langage de programmation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refactoring améliore la structure et la lisibilité tout en préservant le comportement fonctionnel.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser des constants pour des valeurs stables ?',
                        'choices' => [
                            ['text' => 'Pour donner un nom explicite et éviter la duplication de valeurs', 'is_correct' => true],
                            ['text' => 'Pour supprimer les variables', 'is_correct' => false],
                            ['text' => 'Pour augmenter la taille des classes', 'is_correct' => false],
                            ['text' => 'Pour désactiver les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Une constante nommée rend l’intention plus claire et facilite les changements centralisés.',
                    ],
                    [
                        'question' => 'Quel est l’avantage d’une responsabilité bien isolée ?',
                        'choices' => [
                            ['text' => 'Elle facilite la compréhension, les tests et les modifications ciblées', 'is_correct' => true],
                            ['text' => 'Elle rend le code toujours plus court', 'is_correct' => false],
                            ['text' => 'Elle supprime toutes les dependencies', 'is_correct' => false],
                            ['text' => 'Elle évite les requirements', 'is_correct' => false],
                        ],
                        'explanation' => 'Une responsabilité bien isolée réduit les effets de bord et simplifie la maintenance.',
                    ],
                    [
                        'question' => 'Pourquoi gérer explicitement les erreurs ?',
                        'choices' => [
                            ['text' => 'Pour produire un comportement prévisible et exploitable en cas de problème', 'is_correct' => true],
                            ['text' => 'Pour cacher tous les bugs', 'is_correct' => false],
                            ['text' => 'Pour éviter toute validation', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne gestion des erreurs permet au système de réagir de façon contrôlée aux situations anormales.',
                    ],
                    [
                        'question' => 'Quel est le but d’un code style cohérent ?',
                        'choices' => [
                            ['text' => 'Faciliter la lecture et la collaboration sur le codebase', 'is_correct' => true],
                            ['text' => 'Augmenter les performances réseau', 'is_correct' => false],
                            ['text' => 'Créer les tables SQL', 'is_correct' => false],
                            ['text' => 'Remplacer les code reviews', 'is_correct' => false],
                        ],
                        'explanation' => 'Un style cohérent réduit le bruit visuel et facilite la collaboration entre développeurs.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — GIT & COLLABORATION
            // ============================================================
            [
                'title' => 'Git & Collaboration',
                'description' => 'Version control, branches, commits et collaboration.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'À quoi sert Git ?',
                        'choices' => [
                            ['text' => 'À suivre l’historique des changements d’un codebase', 'is_correct' => true],
                            ['text' => 'À exécuter une database', 'is_correct' => false],
                            ['text' => 'À remplacer PHP', 'is_correct' => false],
                            ['text' => 'À héberger uniquement des images', 'is_correct' => false],
                        ],
                        'explanation' => 'Git est un distributed version control system utilisé pour gérer l’historique du code et collaborer.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un commit ?',
                        'choices' => [
                            ['text' => 'Un enregistrement d’un ensemble de changements dans l’historique Git', 'is_correct' => true],
                            ['text' => 'Un serveur', 'is_correct' => false],
                            ['text' => 'Une database table', 'is_correct' => false],
                            ['text' => 'Un test', 'is_correct' => false],
                        ],
                        'explanation' => 'Un commit représente un état logique de changements enregistré dans Git.',
                    ],
                    [
                        'question' => 'Pourquoi écrire des commit messages clairs ?',
                        'choices' => [
                            ['text' => 'Pour comprendre rapidement l’intention d’un changement', 'is_correct' => true],
                            ['text' => 'Pour accélérer le CPU', 'is_correct' => false],
                            ['text' => 'Pour supprimer les branches', 'is_correct' => false],
                            ['text' => 'Pour éviter les merges', 'is_correct' => false],
                        ],
                        'explanation' => 'Des messages clairs facilitent la lecture de l’historique et la maintenance.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une branch ?',
                        'choices' => [
                            ['text' => 'Une ligne de développement indépendante dans Git', 'is_correct' => true],
                            ['text' => 'Une table SQL', 'is_correct' => false],
                            ['text' => 'Un endpoint API', 'is_correct' => false],
                            ['text' => 'Un test automatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une branch permet de travailler sur des changements séparément avant leur intégration.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un merge ?',
                        'choices' => [
                            ['text' => 'Intégrer les changements d’une branch dans une autre', 'is_correct' => true],
                            ['text' => 'Supprimer tous les commits', 'is_correct' => false],
                            ['text' => 'Créer une database', 'is_correct' => false],
                            ['text' => 'Compiler une application', 'is_correct' => false],
                        ],
                        'explanation' => 'Le merge combine les historiques de branches selon les changements compatibles.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un merge conflict ?',
                        'choices' => [
                            ['text' => 'Une situation où Git ne peut pas combiner automatiquement certains changements', 'is_correct' => true],
                            ['text' => 'Une panne réseau obligatoire', 'is_correct' => false],
                            ['text' => 'Un bug du compiler', 'is_correct' => false],
                            ['text' => 'Une erreur de database', 'is_correct' => false],
                        ],
                        'explanation' => 'Un conflict apparaît lorsque des changements incompatibles nécessitent une résolution manuelle.',
                    ],
                    [
                        'question' => 'Pourquoi faire des commits petits et cohérents ?',
                        'choices' => [
                            ['text' => 'Pour faciliter la review, le debugging et le rollback', 'is_correct' => true],
                            ['text' => 'Pour augmenter le nombre de bugs', 'is_correct' => false],
                            ['text' => 'Pour éviter Git', 'is_correct' => false],
                            ['text' => 'Pour supprimer l’historique', 'is_correct' => false],
                        ],
                        'explanation' => 'Des commits ciblés sont plus faciles à comprendre, reviewer et revert.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’une pull request ?',
                        'choices' => [
                            ['text' => 'Proposer des changements pour review avant leur intégration', 'is_correct' => true],
                            ['text' => 'Créer automatiquement un serveur', 'is_correct' => false],
                            ['text' => 'Supprimer une branch sans contrôle', 'is_correct' => false],
                            ['text' => 'Remplacer les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pull request fournit un espace de discussion et de review avant le merge.',
                    ],
                    [
                        'question' => 'Pourquoi éviter de commit des secrets ?',
                        'choices' => [
                            ['text' => 'Parce qu’ils peuvent être récupérés depuis l’historique du repository', 'is_correct' => true],
                            ['text' => 'Parce que Git ne supporte pas les fichiers texte', 'is_correct' => false],
                            ['text' => 'Parce qu’ils ralentissent le clavier', 'is_correct' => false],
                            ['text' => 'Parce qu’ils empêchent les branches', 'is_correct' => false],
                        ],
                        'explanation' => 'Même supprimé plus tard, un secret peut rester présent dans l’historique Git.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un tag Git ?',
                        'choices' => [
                            ['text' => 'Un nom permettant de référencer un commit précis, souvent pour une release', 'is_correct' => true],
                            ['text' => 'Une variable PHP', 'is_correct' => false],
                            ['text' => 'Une table database', 'is_correct' => false],
                            ['text' => 'Une branch temporaire obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les tags servent notamment à identifier des versions ou releases précises.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — TESTING FUNDAMENTALS
            // ============================================================
            [
                'title' => 'Testing Fundamentals',
                'description' => 'Unit tests, integration tests et qualité.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un unit test ?',
                        'choices' => [
                            ['text' => 'Un test ciblant une petite unité de comportement de manière isolée', 'is_correct' => true],
                            ['text' => 'Un test uniquement manuel', 'is_correct' => false],
                            ['text' => 'Un test de production uniquement', 'is_correct' => false],
                            ['text' => 'Une migration SQL', 'is_correct' => false],
                        ],
                        'explanation' => 'Un unit test vérifie généralement une unité de code avec des dépendances contrôlées.',
                    ],
                    [
                        'question' => 'Pourquoi automatiser les tests ?',
                        'choices' => [
                            ['text' => 'Pour vérifier rapidement et répétitivement les comportements attendus', 'is_correct' => true],
                            ['text' => 'Pour supprimer le code review', 'is_correct' => false],
                            ['text' => 'Pour empêcher les releases', 'is_correct' => false],
                            ['text' => 'Pour remplacer Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Les tests automatisés fournissent un feedback reproductible après les changements.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un assertion ?',
                        'choices' => [
                            ['text' => 'Une vérification qui compare un résultat avec une attente', 'is_correct' => true],
                            ['text' => 'Une database query uniquement', 'is_correct' => false],
                            ['text' => 'Un deployment', 'is_correct' => false],
                            ['text' => 'Un commit', 'is_correct' => false],
                        ],
                        'explanation' => 'Une assertion exprime une condition qui doit être vraie pour que le test réussisse.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un integration test ?',
                        'choices' => [
                            ['text' => 'Un test vérifiant l’interaction réelle entre plusieurs composants', 'is_correct' => true],
                            ['text' => 'Un test d’une seule variable', 'is_correct' => false],
                            ['text' => 'Un test uniquement visuel', 'is_correct' => false],
                            ['text' => 'Un commit Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Un integration test vérifie une collaboration entre composants, par exemple application et database.',
                    ],
                    [
                        'question' => 'Pourquoi tester les edge cases ?',
                        'choices' => [
                            ['text' => 'Parce que les entrées inhabituelles peuvent révéler des défauts', 'is_correct' => true],
                            ['text' => 'Parce qu’elles sont toujours invalides', 'is_correct' => false],
                            ['text' => 'Pour remplacer les happy paths', 'is_correct' => false],
                            ['text' => 'Pour supprimer les validations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les edge cases couvrent des situations limites souvent oubliées dans les scénarios normaux.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une regression ?',
                        'choices' => [
                            ['text' => 'Un comportement auparavant correct qui devient incorrect après un changement', 'is_correct' => true],
                            ['text' => 'Une nouvelle feature', 'is_correct' => false],
                            ['text' => 'Une release réussie', 'is_correct' => false],
                            ['text' => 'Un commit propre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une regression apparaît lorsqu’une modification casse un comportement qui fonctionnait auparavant.',
                    ],
                    [
                        'question' => 'Pourquoi les tests doivent-ils être fiables ?',
                        'choices' => [
                            ['text' => 'Un test instable réduit la confiance dans les résultats de la suite', 'is_correct' => true],
                            ['text' => 'Pour augmenter les temps de build', 'is_correct' => false],
                            ['text' => 'Pour supprimer les assertions', 'is_correct' => false],
                            ['text' => 'Pour éviter les CI pipelines', 'is_correct' => false],
                        ],
                        'explanation' => 'Une suite fiable permet de distinguer plus facilement les vrais problèmes des faux échecs.',
                    ],
                    [
                        'question' => 'Quel est le but d’un test case ?',
                        'choices' => [
                            ['text' => 'Définir des conditions, entrées et résultats attendus pour vérifier un comportement', 'is_correct' => true],
                            ['text' => 'Créer une branch', 'is_correct' => false],
                            ['text' => 'Configurer un serveur', 'is_correct' => false],
                            ['text' => 'Changer un password', 'is_correct' => false],
                        ],
                        'explanation' => 'Un test case formalise un scénario de vérification.',
                    ],
                    [
                        'question' => 'Pourquoi tester les erreurs ?',
                        'choices' => [
                            ['text' => 'Pour vérifier que le système réagit correctement aux situations invalides ou exceptionnelles', 'is_correct' => true],
                            ['text' => 'Pour éviter les logs', 'is_correct' => false],
                            ['text' => 'Pour supprimer les validations', 'is_correct' => false],
                            ['text' => 'Pour rendre les erreurs silencieuses', 'is_correct' => false],
                        ],
                        'explanation' => 'Les error paths font partie du comportement du système et doivent être vérifiés.',
                    ],
                    [
                        'question' => 'Qu’est-ce que test coverage ?',
                        'choices' => [
                            ['text' => 'Une mesure de la proportion de code ou de comportements exercés par les tests', 'is_correct' => true],
                            ['text' => 'Le nombre de développeurs', 'is_correct' => false],
                            ['text' => 'La taille du repository', 'is_correct' => false],
                            ['text' => 'La vitesse du CPU', 'is_correct' => false],
                        ],
                        'explanation' => 'La coverage donne une indication de ce qui est exercé par les tests, sans garantir à elle seule leur qualité.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — REQUIREMENTS & DESIGN
            // ============================================================
            [
                'title' => 'Requirements & Design',
                'description' => 'Requirements, use cases et conception.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un functional requirement ?',
                        'choices' => [
                            ['text' => 'Une exigence décrivant un comportement ou une fonction attendue', 'is_correct' => true],
                            ['text' => 'Une règle de formatage du code', 'is_correct' => false],
                            ['text' => 'Un serveur', 'is_correct' => false],
                            ['text' => 'Un outil Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Un functional requirement décrit ce que le système doit faire.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un non-functional requirement ?',
                        'choices' => [
                            ['text' => 'Une exigence concernant une qualité comme performance, sécurité ou disponibilité', 'is_correct' => true],
                            ['text' => 'Une simple variable', 'is_correct' => false],
                            ['text' => 'Un commit', 'is_correct' => false],
                            ['text' => 'Une classe PHP', 'is_correct' => false],
                        ],
                        'explanation' => 'Les non-functional requirements décrivent des qualités ou contraintes du système.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un use case ?',
                        'choices' => [
                            ['text' => 'Une description d’une interaction entre un actor et le système pour atteindre un objectif', 'is_correct' => true],
                            ['text' => 'Une database table', 'is_correct' => false],
                            ['text' => 'Un design pattern', 'is_correct' => false],
                            ['text' => 'Un compiler', 'is_correct' => false],
                        ],
                        'explanation' => 'Un use case décrit un objectif utilisateur et les interactions nécessaires pour l’atteindre.',
                    ],
                    [
                        'question' => 'Pourquoi prioriser les requirements ?',
                        'choices' => [
                            ['text' => 'Pour concentrer les efforts sur les besoins ayant le plus de valeur ou de risque', 'is_correct' => true],
                            ['text' => 'Pour supprimer les stakeholders', 'is_correct' => false],
                            ['text' => 'Pour éviter les tests', 'is_correct' => false],
                            ['text' => 'Pour empêcher toute évolution', 'is_correct' => false],
                        ],
                        'explanation' => 'La priorisation aide à gérer les ressources et à livrer d’abord les éléments importants.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une acceptance criterion ?',
                        'choices' => [
                            ['text' => 'Une condition permettant de déterminer si une fonctionnalité est acceptable', 'is_correct' => true],
                            ['text' => 'Un commit Git', 'is_correct' => false],
                            ['text' => 'Un mot de passe', 'is_correct' => false],
                            ['text' => 'Une table SQL', 'is_correct' => false],
                        ],
                        'explanation' => 'Les acceptance criteria rendent le résultat attendu d’une fonctionnalité vérifiable.',
                    ],
                    [
                        'question' => 'Pourquoi éviter les requirements ambigus ?',
                        'choices' => [
                            ['text' => 'Parce que plusieurs interprétations peuvent conduire à des implémentations différentes', 'is_correct' => true],
                            ['text' => 'Parce qu’ils accélèrent les tests', 'is_correct' => false],
                            ['text' => 'Parce qu’ils améliorent toujours la sécurité', 'is_correct' => false],
                            ['text' => 'Parce qu’ils empêchent les bugs', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ambiguïté crée des incompréhensions entre stakeholders et développeurs.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un stakeholder ?',
                        'choices' => [
                            ['text' => 'Une personne ou organisation ayant un intérêt ou une influence sur le système', 'is_correct' => true],
                            ['text' => 'Un type de database', 'is_correct' => false],
                            ['text' => 'Un outil de test', 'is_correct' => false],
                            ['text' => 'Une branch Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Les stakeholders peuvent être utilisateurs, clients, responsables métier ou autres parties concernées.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser un diagramme simple ?',
                        'choices' => [
                            ['text' => 'Pour communiquer visuellement une structure ou un comportement complexe', 'is_correct' => true],
                            ['text' => 'Pour remplacer tout le code', 'is_correct' => false],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour compiler l’application', 'is_correct' => false],
                        ],
                        'explanation' => 'Un diagramme bien choisi peut accélérer la compréhension d’un système ou d’un flux.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un prototype ?',
                        'choices' => [
                            ['text' => 'Une version simplifiée utilisée pour explorer ou valider une idée', 'is_correct' => true],
                            ['text' => 'Une release finale obligatoire', 'is_correct' => false],
                            ['text' => 'Une database production', 'is_correct' => false],
                            ['text' => 'Un commit', 'is_correct' => false],
                        ],
                        'explanation' => 'Un prototype permet d’explorer rapidement une solution ou une interface avant un développement complet.',
                    ],
                    [
                        'question' => 'Pourquoi valider les requirements avec les stakeholders ?',
                        'choices' => [
                            ['text' => 'Pour vérifier que le besoin compris correspond au besoin réel', 'is_correct' => true],
                            ['text' => 'Pour éviter les discussions', 'is_correct' => false],
                            ['text' => 'Pour supprimer la documentation', 'is_correct' => false],
                            ['text' => 'Pour empêcher les changements', 'is_correct' => false],
                        ],
                        'explanation' => 'La validation précoce réduit le risque de développer une solution qui ne répond pas au besoin.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — CLEAN CODE
            // ============================================================
            [
                'title' => 'Clean Code',
                'description' => 'Lisibilité, simplicité et maintenabilité.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal du Clean Code ?',
                        'choices' => [
                            ['text' => 'Rendre le code lisible, compréhensible et maintenable', 'is_correct' => true],
                            ['text' => 'Rendre chaque fichier plus long', 'is_correct' => false],
                            ['text' => 'Supprimer tous les commentaires', 'is_correct' => false],
                            ['text' => 'Éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Clean Code vise notamment la clarté, la simplicité et la facilité de maintenance.',
                    ],
                    [
                        'question' => 'Pourquoi éviter les magic numbers ?',
                        'choices' => [
                            ['text' => 'Parce qu’une valeur non nommée peut cacher son intention', 'is_correct' => true],
                            ['text' => 'Parce qu’ils ralentissent toujours le CPU', 'is_correct' => false],
                            ['text' => 'Parce qu’ils sont interdits par Git', 'is_correct' => false],
                            ['text' => 'Parce qu’ils empêchent les classes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une constante nommée donne du contexte et rend la règle plus explicite.',
                    ],
                    [
                        'question' => 'Pourquoi une classe devrait-elle éviter trop de responsabilités ?',
                        'choices' => [
                            ['text' => 'Pour réduire la complexité et faciliter les changements ciblés', 'is_correct' => true],
                            ['text' => 'Pour augmenter le couplage', 'is_correct' => false],
                            ['text' => 'Pour supprimer les methods', 'is_correct' => false],
                            ['text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Limiter les responsabilités aide à maintenir une forte cohésion et un faible couplage.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une code smell ?',
                        'choices' => [
                            ['text' => 'Un indice qu’un code peut présenter un problème de conception ou de maintenance', 'is_correct' => true],
                            ['text' => 'Un bug toujours confirmé', 'is_correct' => false],
                            ['text' => 'Une erreur réseau', 'is_correct' => false],
                            ['text' => 'Un test', 'is_correct' => false],
                        ],
                        'explanation' => 'Une code smell signale un risque potentiel et peut indiquer un besoin de refactoring.',
                    ],
                    [
                        'question' => 'Pourquoi préférer des fonctions courtes et focalisées ?',
                        'choices' => [
                            ['text' => 'Elles rendent l’intention et le comportement plus faciles à comprendre', 'is_correct' => true],
                            ['text' => 'Elles empêchent les exceptions', 'is_correct' => false],
                            ['text' => 'Elles suppriment les dependencies', 'is_correct' => false],
                            ['text' => 'Elles remplacent les classes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction focalisée est plus facile à lire, tester et modifier.',
                    ],
                    [
                        'question' => 'Quel est le rôle des commentaires ?',
                        'choices' => [
                            ['text' => 'Expliquer surtout le pourquoi lorsqu’il n’est pas évident dans le code', 'is_correct' => true],
                            ['text' => 'Remplacer tous les noms explicites', 'is_correct' => false],
                            ['text' => 'Décrire chaque caractère', 'is_correct' => false],
                            ['text' => 'Supprimer la documentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les commentaires sont particulièrement utiles pour expliquer une décision ou une contrainte non évidente.',
                    ],
                    [
                        'question' => 'Pourquoi éviter le code mort ?',
                        'choices' => [
                            ['text' => 'Il augmente la confusion et le coût de maintenance sans apporter de valeur', 'is_correct' => true],
                            ['text' => 'Il améliore toujours la sécurité', 'is_correct' => false],
                            ['text' => 'Il accélère les tests', 'is_correct' => false],
                            ['text' => 'Il remplace les features', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dead code complique la compréhension et peut être supprimé lorsqu’il n’est plus nécessaire.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser des abstractions avec modération ?',
                        'choices' => [
                            ['text' => 'Une abstraction inutile peut ajouter de la complexité et des indirections', 'is_correct' => true],
                            ['text' => 'Parce que les abstractions sont interdites', 'is_correct' => false],
                            ['text' => 'Parce qu’elles empêchent les tests', 'is_correct' => false],
                            ['text' => 'Parce qu’elles suppriment les interfaces', 'is_correct' => false],
                        ],
                        'explanation' => 'Une abstraction doit répondre à un besoin réel de variation, découplage ou conception.',
                    ],
                    [
                        'question' => 'Pourquoi le naming est-il important ?',
                        'choices' => [
                            ['text' => 'Le nom doit communiquer l’intention de l’élément', 'is_correct' => true],
                            ['text' => 'Il augmente la RAM', 'is_correct' => false],
                            ['text' => 'Il remplace les tests', 'is_correct' => false],
                            ['text' => 'Il empêche les bugs automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bon naming réduit le besoin d’explications externes et facilite la lecture.',
                    ],
                    [
                        'question' => 'Quel est un bénéfice du refactoring régulier ?',
                        'choices' => [
                            ['text' => 'Réduire progressivement la complexité et maintenir une structure saine', 'is_correct' => true],
                            ['text' => 'Supprimer les requirements', 'is_correct' => false],
                            ['text' => 'Éviter le version control', 'is_correct' => false],
                            ['text' => 'Rendre les tests inutiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refactoring continu empêche la complexité de s’accumuler trop fortement.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — AGILE & TEAM PRACTICES
            // ============================================================
            [
                'title' => 'Agile & Team Practices',
                'description' => 'Agile, Scrum, collaboration et feedback.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’Agile ?',
                        'choices' => [
                            ['text' => 'Livrer de la valeur progressivement et s’adapter au feedback', 'is_correct' => true],
                            ['text' => 'Éviter toute planification', 'is_correct' => false],
                            ['text' => 'Interdire les changements', 'is_correct' => false],
                            ['text' => 'Produire uniquement de la documentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Agile favorise les cycles courts, le feedback fréquent et l’adaptation aux changements.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un Sprint ?',
                        'choices' => [
                            ['text' => 'Une période de travail limitée pendant laquelle une équipe réalise un objectif défini', 'is_correct' => true],
                            ['text' => 'Une database', 'is_correct' => false],
                            ['text' => 'Un commit', 'is_correct' => false],
                            ['text' => 'Un serveur', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans Scrum, un Sprint est une time-box pendant laquelle l’équipe travaille vers un Sprint Goal.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un Product Backlog ?',
                        'choices' => [
                            ['text' => 'Contenir les éléments de travail et besoins à considérer pour le produit', 'is_correct' => true],
                            ['text' => 'Stocker les passwords', 'is_correct' => false],
                            ['text' => 'Compiler le code', 'is_correct' => false],
                            ['text' => 'Remplacer Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Product Backlog rassemble les besoins, améliorations et autres éléments à prioriser.',
                    ],
                    [
                        'question' => 'Pourquoi faire une retrospective ?',
                        'choices' => [
                            ['text' => 'Pour identifier ce qui peut être amélioré dans la façon de travailler', 'is_correct' => true],
                            ['text' => 'Pour tester la database', 'is_correct' => false],
                            ['text' => 'Pour remplacer la planning', 'is_correct' => false],
                            ['text' => 'Pour écrire le code', 'is_correct' => false],
                        ],
                        'explanation' => 'La retrospective fournit un espace d’amélioration continue de l’équipe.',
                    ],
                    [
                        'question' => 'Pourquoi le feedback fréquent est-il important ?',
                        'choices' => [
                            ['text' => 'Il permet de détecter rapidement les écarts et d’ajuster la solution', 'is_correct' => true],
                            ['text' => 'Il empêche les releases', 'is_correct' => false],
                            ['text' => 'Il supprime les stakeholders', 'is_correct' => false],
                            ['text' => 'Il remplace les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Un feedback rapide réduit le risque de poursuivre longtemps une mauvaise direction.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une Definition of Done ?',
                        'choices' => [
                            ['text' => 'Un ensemble de critères indiquant qu’un travail peut être considéré comme terminé', 'is_correct' => true],
                            ['text' => 'Une database schema', 'is_correct' => false],
                            ['text' => 'Un commit message', 'is_correct' => false],
                            ['text' => 'Un bug report', 'is_correct' => false],
                        ],
                        'explanation' => 'La Definition of Done établit un niveau de qualité partagé pour considérer un item terminé.',
                    ],
                    [
                        'question' => 'Pourquoi limiter le work in progress ?',
                        'choices' => [
                            ['text' => 'Pour réduire le multitasking et améliorer le flux de travail', 'is_correct' => true],
                            ['text' => 'Pour augmenter les tâches ouvertes', 'is_correct' => false],
                            ['text' => 'Pour éviter les reviews', 'is_correct' => false],
                            ['text' => 'Pour supprimer le planning', 'is_correct' => false],
                        ],
                        'explanation' => 'Limiter le WIP aide l’équipe à terminer les tâches plutôt qu’à accumuler du travail commencé.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une user story ?',
                        'choices' => [
                            ['text' => 'Une description concise d’un besoin utilisateur et de la valeur recherchée', 'is_correct' => true],
                            ['text' => 'Un fichier PHP', 'is_correct' => false],
                            ['text' => 'Une database query', 'is_correct' => false],
                            ['text' => 'Un log', 'is_correct' => false],
                        ],
                        'explanation' => 'Une user story exprime un besoin du point de vue de l’utilisateur ou du stakeholder.',
                    ],
                    [
                        'question' => 'Pourquoi les estimations sont-elles utiles ?',
                        'choices' => [
                            ['text' => 'Pour aider à planifier et discuter de la capacité et de la complexité', 'is_correct' => true],
                            ['text' => 'Pour garantir une date exacte', 'is_correct' => false],
                            ['text' => 'Pour remplacer les requirements', 'is_correct' => false],
                            ['text' => 'Pour empêcher les changements', 'is_correct' => false],
                        ],
                        'explanation' => 'Les estimations sont des outils de planification et de discussion, pas des garanties absolues.',
                    ],
                    [
                        'question' => 'Pourquoi une équipe doit-elle partager les informations importantes ?',
                        'choices' => [
                            ['text' => 'Pour réduire les dépendances individuelles et améliorer la collaboration', 'is_correct' => true],
                            ['text' => 'Pour empêcher les code reviews', 'is_correct' => false],
                            ['text' => 'Pour augmenter les silos', 'is_correct' => false],
                            ['text' => 'Pour supprimer la documentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le partage des connaissances réduit les risques liés à la dépendance envers une seule personne.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — SOFTWARE DELIVERY FUNDAMENTALS
            // ============================================================
            [
                'title' => 'Software Delivery Fundamentals',
                'description' => 'CI/CD, deployment et maintenance.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Que signifie CI ?',
                        'choices' => [
                            ['text' => 'Continuous Integration', 'is_correct' => true],
                            ['text' => 'Code Inspection', 'is_correct' => false],
                            ['text' => 'Central Installation', 'is_correct' => false],
                            ['text' => 'Compiled Interface', 'is_correct' => false],
                        ],
                        'explanation' => 'Continuous Integration consiste à intégrer fréquemment les changements et à exécuter des validations automatisées.',
                    ],
                    [
                        'question' => 'Que signifie CD dans CI/CD ?',
                        'choices' => [
                            ['text' => 'Continuous Delivery ou Continuous Deployment selon le contexte', 'is_correct' => true],
                            ['text' => 'Code Database', 'is_correct' => false],
                            ['text' => 'Central Debugging', 'is_correct' => false],
                            ['text' => 'Compiled Dependency', 'is_correct' => false],
                        ],
                        'explanation' => 'CD peut désigner Continuous Delivery ou Continuous Deployment selon le niveau d’automatisation.',
                    ],
                    [
                        'question' => 'Pourquoi automatiser le build ?',
                        'choices' => [
                            ['text' => 'Pour produire des artifacts de manière reproductible', 'is_correct' => true],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour éviter Git', 'is_correct' => false],
                            ['text' => 'Pour modifier les requirements', 'is_correct' => false],
                        ],
                        'explanation' => 'Une build automatisée et reproductible réduit les erreurs manuelles.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un deployment ?',
                        'choices' => [
                            ['text' => 'Le processus de mise à disposition d’une version du logiciel dans un environnement', 'is_correct' => true],
                            ['text' => 'Un test unitaire', 'is_correct' => false],
                            ['text' => 'Un commit', 'is_correct' => false],
                            ['text' => 'Une database table', 'is_correct' => false],
                        ],
                        'explanation' => 'Le deployment installe ou rend disponible une version du logiciel dans un environnement cible.',
                    ],
                    [
                        'question' => 'Pourquoi séparer les environnements ?',
                        'choices' => [
                            ['text' => 'Pour contrôler les changements et valider avant la production', 'is_correct' => true],
                            ['text' => 'Pour créer plus de bugs', 'is_correct' => false],
                            ['text' => 'Pour éviter les tests', 'is_correct' => false],
                            ['text' => 'Pour supprimer la configuration', 'is_correct' => false],
                        ],
                        'explanation' => 'Des environnements comme development, staging et production permettent des validations progressives.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rollback ?',
                        'choices' => [
                            ['text' => 'Revenir à une version précédente stable après un problème', 'is_correct' => true],
                            ['text' => 'Créer une feature', 'is_correct' => false],
                            ['text' => 'Supprimer Git', 'is_correct' => false],
                            ['text' => 'Changer le framework', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rollback permet de restaurer rapidement une version connue comme stable.',
                    ],
                    [
                        'question' => 'Pourquoi monitorer une application en production ?',
                        'choices' => [
                            ['text' => 'Pour détecter les problèmes et comprendre son comportement réel', 'is_correct' => true],
                            ['text' => 'Pour remplacer les tests', 'is_correct' => false],
                            ['text' => 'Pour éviter les logs', 'is_correct' => false],
                            ['text' => 'Pour supprimer les metrics', 'is_correct' => false],
                        ],
                        'explanation' => 'Le monitoring fournit des informations sur la santé et le comportement du système en production.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un release ?',
                        'choices' => [
                            ['text' => 'Une version du logiciel rendue disponible selon un processus défini', 'is_correct' => true],
                            ['text' => 'Un fichier temporaire', 'is_correct' => false],
                            ['text' => 'Un test', 'is_correct' => false],
                            ['text' => 'Une branch locale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une release correspond à une version préparée et distribuée aux utilisateurs ou environnements concernés.',
                    ],
                    [
                        'question' => 'Pourquoi versionner les artifacts ?',
                        'choices' => [
                            ['text' => 'Pour identifier précisément ce qui a été construit et déployé', 'is_correct' => true],
                            ['text' => 'Pour supprimer le source code', 'is_correct' => false],
                            ['text' => 'Pour éviter les rollback', 'is_correct' => false],
                            ['text' => 'Pour empêcher les builds', 'is_correct' => false],
                        ],
                        'explanation' => 'Le versioning permet de relier un artifact à une source et à une release précise.',
                    ],
                    [
                        'question' => 'Pourquoi documenter une procédure de deployment ?',
                        'choices' => [
                            ['text' => 'Pour rendre les opérations reproductibles et réduire les erreurs humaines', 'is_correct' => true],
                            ['text' => 'Pour éviter toute automatisation', 'is_correct' => false],
                            ['text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['text' => 'Pour augmenter le nombre de commandes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une procédure claire facilite les deployments répétables, notamment pour les nouveaux membres de l’équipe.',
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
                    'duration' => 10,
                    'passing_score' => 80,
                    'total_marks' => 10,
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'] ?? 'Beginner',
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

                /*
                 * Shuffle complete choice records so that is_correct
                 * remains attached to the correct answer.
                 */
                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $choiceIndex => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choiceData['text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}

