<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MobileDevelopmentBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mobile-development')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — FONDAMENTAUX DU DÉVELOPPEMENT MOBILE
            // ============================================================
            [
                'title' => 'Fondamentaux du développement mobile',
                'description' => 'Introduction aux applications mobiles, aux plateformes, aux appareils et aux concepts fondamentaux du développement mobile.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une application mobile ?',
                        'choices' => [
                            'Un serveur de base de données',
                            'Un logiciel conçu pour fonctionner sur des appareils mobiles',
                            'Un système d’exploitation pour ordinateur',
                            'Un câble réseau'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une application mobile est un logiciel conçu pour fonctionner sur des appareils tels que les smartphones et les tablettes.'
                    ],

                    [
                        'question' => 'Quels sont les deux principaux systèmes d’exploitation utilisés sur les smartphones modernes ?',
                        'choices' => [
                            'Android et iOS',
                            'Windows et Linux',
                            'DOS et Unix',
                            'ChromeOS et Ubuntu'
                        ],
                        'correct' => 0,
                        'explanation' => 'Android et iOS sont les deux principaux systèmes d’exploitation mobiles utilisés sur les smartphones.'
                    ],

                    [
                        'question' => 'Quelle entreprise développe Android ?',
                        'choices' => [
                            'Apple',
                            'Microsoft',
                            'Mozilla',
                            'Google'
                        ],
                        'correct' => 3,
                        'explanation' => 'Android est développé dans l’écosystème de Google et de l’Android Open Source Project.'
                    ],

                    [
                        'question' => 'Quelle entreprise développe iOS ?',
                        'choices' => [
                            'Google',
                            'Apple',
                            'Samsung',
                            'Microsoft'
                        ],
                        'correct' => 1,
                        'explanation' => 'iOS est le système d’exploitation mobile développé par Apple.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un smartphone ?',
                        'choices' => [
                            'Un type de base de données',
                            'Un protocole réseau',
                            'Un appareil mobile disposant de capacités avancées de calcul et de communication',
                            'Un simple téléphone permettant uniquement de passer des appels'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un smartphone combine les fonctions classiques d’un téléphone avec des capacités informatiques, l’accès à Internet et l’exécution d’applications.'
                    ],

                    [
                        'question' => 'À quoi sert principalement un App Store ?',
                        'choices' => [
                            'À programmer des applications',
                            'À gérer des routeurs Wi-Fi',
                            'À créer des bases de données',
                            'À distribuer, installer et mettre à jour des applications'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un App Store permet aux utilisateurs de trouver, installer et mettre à jour des applications.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un mobile SDK ?',
                        'choices' => [
                            'Un kit de développement logiciel destiné à une plateforme',
                            'Une résolution d’écran',
                            'Un moteur de base de données',
                            'Un réseau mobile'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un SDK fournit aux développeurs les outils, bibliothèques, API et ressources nécessaires au développement pour une plateforme.'
                    ],

                    [
                        'question' => 'Que signifie UI ?',
                        'choices' => [
                            'Universal Internet',
                            'User Integration',
                            'User Interface',
                            'User Internet'
                        ],
                        'correct' => 2,
                        'explanation' => 'UI signifie User Interface et désigne l’interface visuelle et interactive d’une application.'
                    ],

                    [
                        'question' => 'Que décrit principalement l’UX ?',
                        'choices' => [
                            'La structure de la base de données',
                            'L’expérience globale de l’utilisateur lorsqu’il interagit avec une application',
                            'Le protocole réseau',
                            'Le langage de programmation'
                        ],
                        'correct' => 1,
                        'explanation' => 'UX signifie User Experience et décrit l’expérience globale vécue par l’utilisateur lors de l’utilisation d’une application.'
                    ],

                    [
                        'question' => 'Pourquoi le responsive design est-il important dans le développement mobile ?',
                        'choices' => [
                            'Il remplace le système d’exploitation',
                            'Il empêche les applications d’utiliser des API',
                            'Il supprime le besoin de tests',
                            'Il permet à l’interface de s’adapter aux différentes tailles d’écran'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les appareils mobiles possèdent différentes tailles et orientations d’écran. Le responsive design permet à l’interface de s’adapter à ces différences.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — COMPOSANTS D’INTERFACE MOBILE
            // ============================================================
            [
                'title' => 'Composants d’interface mobile',
                'description' => 'Les principaux composants d’interface et les interactions courantes utilisés dans les applications mobiles.',
                'questions' => [

                    [
                        'question' => 'Quel composant est généralement utilisé pour permettre à l’utilisateur de saisir du texte ?',
                        'choices' => [
                            'Une image',
                            'Un champ de texte',
                            'Une icône',
                            'Un séparateur'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un champ de texte permet à l’utilisateur de saisir des informations textuelles dans l’application.'
                    ],

                    [
                        'question' => 'Quel composant est généralement utilisé pour déclencher une action ?',
                        'choices' => [
                            'Un arrière-plan',
                            'Un espaceur',
                            'Un bouton',
                            'Une étiquette'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un bouton permet généralement de déclencher une action comme envoyer un formulaire ou naviguer vers un autre écran.'
                    ],

                    [
                        'question' => 'À quoi sert une barre de navigation ?',
                        'choices' => [
                            'À aider l’utilisateur à se déplacer entre les différentes sections de l’application',
                            'À stocker les mots de passe',
                            'À compiler le code',
                            'À se connecter au Wi-Fi'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les composants de navigation permettent à l’utilisateur de passer d’une section ou d’un écran à un autre.'
                    ],

                    [
                        'question' => 'Quel élément est adapté pour afficher une liste d’options sélectionnables ?',
                        'choices' => [
                            'Une image',
                            'Une étiquette de texte',
                            'Une liste',
                            'Un indicateur de progression'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une liste permet d’afficher plusieurs éléments que l’utilisateur peut consulter ou sélectionner.'
                    ],

                    [
                        'question' => 'Que représente généralement une checkbox ?',
                        'choices' => [
                            'Une connexion réseau',
                            'Une sélection indépendante de type activé/désactivé',
                            'Une route de navigation',
                            'Un enregistrement de base de données'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une checkbox représente généralement un choix booléen indépendant qui peut être activé ou désactivé.'
                    ],

                    [
                        'question' => 'À quoi sert un indicateur de progression ?',
                        'choices' => [
                            'À afficher des mots de passe',
                            'À modifier le système d’exploitation',
                            'À créer une base de données',
                            'À indiquer l’avancement d’une opération'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un indicateur de progression informe l’utilisateur qu’une opération est en cours et peut montrer son avancement.'
                    ],

                    [
                        'question' => 'À quoi sert généralement une boîte de dialogue ?',
                        'choices' => [
                            'À afficher une information ou à demander une décision à l’utilisateur',
                            'À installer un système d’exploitation',
                            'À modifier le processeur de l’appareil',
                            'À exécuter un serveur de base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une boîte de dialogue peut afficher une information, un avertissement ou proposer des choix nécessitant une interaction.'
                    ],

                    [
                        'question' => 'Quelle interaction permet généralement de se déplacer verticalement dans un contenu ?',
                        'choices' => [
                            'Un appui long',
                            'Un double appui',
                            'Le défilement',
                            'Un simple appui'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le défilement permet de parcourir un contenu qui dépasse la zone actuellement visible à l’écran.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un geste tactile ?',
                        'choices' => [
                            'Une requête envoyée à un serveur',
                            'Une interaction réalisée à l’aide d’un écran ou d’une surface tactile',
                            'Une requête de base de données',
                            'Un langage de programmation'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les gestes tactiles comprennent notamment le tap, le swipe, le pinch et l’appui long.'
                    ],

                    [
                        'question' => 'Pourquoi les boutons mobiles doivent-ils généralement être suffisamment faciles à toucher ?',
                        'choices' => [
                            'Pour améliorer le débit réseau',
                            'Pour augmenter la taille de la base de données',
                            'Pour réduire les permissions de l’application',
                            'Pour faciliter l’interaction et réduire les erreurs de sélection'
                        ],
                        'correct' => 3,
                        'explanation' => 'Des zones tactiles suffisamment grandes améliorent l’utilisabilité et réduisent les erreurs lors de l’interaction.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — BASES D’ANDROID
            // ============================================================
            [
                'title' => 'Bases du développement Android',
                'description' => 'Les concepts fondamentaux d’Android, les composants d’application et les outils de développement.',
                'questions' => [

                    [
                        'question' => 'Quel langage est officiellement pris en charge pour le développement Android moderne ?',
                        'choices' => [
                            'PHP',
                            'Ruby',
                            'SQL',
                            'Kotlin'
                        ],
                        'correct' => 3,
                        'explanation' => 'Kotlin est l’un des langages principaux du développement Android moderne et bénéficie d’un support officiel de Google.'
                    ],

                    [
                        'question' => 'Quel IDE est couramment utilisé pour développer des applications Android ?',
                        'choices' => [
                            'Android Studio',
                            'Photoshop',
                            'MySQL Workbench',
                            'Eclipse uniquement'
                        ],
                        'correct' => 0,
                        'explanation' => 'Android Studio est l’environnement de développement intégré officiel pour le développement Android.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une Activity Android ?',
                        'choices' => [
                            'Une base de données',
                            'Un protocole réseau',
                            'Un composant représentant généralement un écran ou un point d’entrée d’interaction',
                            'Une feuille de style CSS'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une Activity représente généralement un écran ou un point d’entrée permettant une interaction avec l’utilisateur.'
                    ],

                    [
                        'question' => 'Quel fichier contient des informations importantes sur la configuration et les composants d’une application Android ?',
                        'choices' => [
                            'main.css',
                            'package.json',
                            'AndroidManifest.xml',
                            'index.html'
                        ],
                        'correct' => 2,
                        'explanation' => 'AndroidManifest.xml déclare notamment les composants, permissions et informations importantes de l’application Android.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Android Emulator ?',
                        'choices' => [
                            'Un serveur de base de données',
                            'Un logiciel qui simule un appareil Android',
                            'Un fournisseur cloud',
                            'Un outil de formatage du code'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un Emulator permet aux développeurs de tester une application Android sur un appareil simulé.'
                    ],

                    [
                        'question' => 'À quoi sert une permission Android ?',
                        'choices' => [
                            'À demander l’accès à certaines données ou fonctionnalités protégées de l’appareil',
                            'À modifier les couleurs de l’application',
                            'À créer des pages HTML',
                            'À compiler du SQL'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les permissions contrôlent l’accès de l’application à des ressources protégées comme la caméra, la localisation ou les contacts.'
                    ],

                    [
                        'question' => 'Quel composant Android peut effectuer certaines tâches sans présenter directement une interface utilisateur traditionnelle ?',
                        'choices' => [
                            'TextView',
                            'Button',
                            'ImageView',
                            'Service'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un Service est un composant Android destiné à certaines opérations en arrière-plan ou de longue durée.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’Android SDK ?',
                        'choices' => [
                            'Un téléphone mobile',
                            'Une base de données',
                            'Un ensemble d’outils et d’API destinés au développement Android',
                            'Un langage de programmation'
                        ],
                        'correct' => 2,
                        'explanation' => 'L’Android SDK fournit les API, outils de build et autres ressources nécessaires au développement d’applications Android.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un APK ?',
                        'choices' => [
                            'Un index de base de données',
                            'Un package d’application Android',
                            'Un protocole Web',
                            'Un composant d’interface'
                        ],
                        'correct' => 1,
                        'explanation' => 'APK signifie Android Package. Il s’agit d’un format de package utilisé pour distribuer des applications Android.'
                    ],

                    [
                        'question' => 'À quoi sert principalement Gradle dans un projet Android ?',
                        'choices' => [
                            'À concevoir des images',
                            'À gérer le Wi-Fi',
                            'À créer des tables SQL',
                            'À construire l’application et gérer ses dépendances'
                        ],
                        'correct' => 3,
                        'explanation' => 'Gradle est utilisé pour le build Android, la gestion des dépendances et la configuration du projet.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — BASES D’iOS
            // ============================================================
            [
                'title' => 'Bases du développement iOS',
                'description' => 'Les concepts fondamentaux des applications iOS, de Swift et des outils de développement Apple.',
                'questions' => [

                    [
                        'question' => 'Quel langage est couramment utilisé pour le développement iOS moderne ?',
                        'choices' => [
                            'PHP',
                            'Swift',
                            'SQL',
                            'Python uniquement'
                        ],
                        'correct' => 1,
                        'explanation' => 'Swift est le langage moderne d’Apple couramment utilisé pour développer des applications iOS.'
                    ],

                    [
                        'question' => 'Quel IDE est couramment utilisé pour le développement iOS ?',
                        'choices' => [
                            'Android Studio',
                            'MySQL Workbench',
                            'Xcode',
                            'Eclipse'
                        ],
                        'correct' => 2,
                        'explanation' => 'Xcode est l’environnement de développement d’Apple pour créer des applications destinées à ses plateformes.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’App Store ?',
                        'choices' => [
                            'Une base de données',
                            'Un protocole réseau',
                            'La plateforme de distribution d’applications d’Apple',
                            'Un langage de programmation'
                        ],
                        'correct' => 2,
                        'explanation' => 'L’App Store est la plateforme d’Apple permettant de distribuer des applications aux utilisateurs.'
                    ],

                    [
                        'question' => 'À quoi sert principalement iOS Simulator ?',
                        'choices' => [
                            'À gérer des serveurs',
                            'À créer des bases de données SQL',
                            'À compiler des applications Android',
                            'À tester des applications dans des appareils Apple simulés'
                        ],
                        'correct' => 3,
                        'explanation' => 'iOS Simulator permet de tester des applications dans des environnements simulant différents appareils Apple.'
                    ],

                    [
                        'question' => 'Qu’est-ce que SwiftUI ?',
                        'choices' => [
                            'Une base de données',
                            'Un framework permettant de construire des interfaces avec Swift',
                            'Un protocole réseau',
                            'Un format de package Android'
                        ],
                        'correct' => 1,
                        'explanation' => 'SwiftUI est le framework déclaratif d’Apple permettant de construire des interfaces utilisateur avec Swift.'
                    ],

                    [
                        'question' => 'Qu’est-ce que UIKit ?',
                        'choices' => [
                            'Un framework destiné notamment à construire les interfaces utilisateur iOS',
                            'Un serveur',
                            'Un moteur de base de données',
                            'Un langage de programmation'
                        ],
                        'correct' => 0,
                        'explanation' => 'UIKit fournit des classes et des outils permettant notamment de construire les interfaces et gérer les interactions dans les applications Apple.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un application bundle sur iOS ?',
                        'choices' => [
                            'Une base de données',
                            'Une requête réseau',
                            'Un fichier CSS',
                            'Un package contenant notamment l’exécutable et les ressources de l’application'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un application bundle contient l’exécutable ainsi que les ressources nécessaires au fonctionnement de l’application iOS.'
                    ],

                    [
                        'question' => 'Quel est l’un des objectifs du code signing sur les plateformes Apple ?',
                        'choices' => [
                            'Créer des bases de données',
                            'Améliorer la vitesse du Wi-Fi',
                            'Établir l’identité et l’intégrité de l’application',
                            'Modifier les couleurs de l’interface'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le code signing permet notamment de vérifier l’identité du signataire et l’intégrité du code de l’application.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une View dans un framework d’interface mobile ?',
                        'choices' => [
                            'Une base de données',
                            'Un serveur',
                            'Un élément visuel ou un conteneur affiché à l’utilisateur',
                            'Un câble réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une View est un élément visuel ou un conteneur pouvant afficher du contenu et éventuellement recevoir des interactions.'
                    ],

                    [
                        'question' => 'Pourquoi les Apple Human Interface Guidelines sont-elles importantes ?',
                        'choices' => [
                            'Elles définissent la syntaxe SQL',
                            'Elles remplacent Swift',
                            'Elles configurent les bases de données',
                            'Elles fournissent des recommandations pour créer des interfaces cohérentes et utilisables sur les plateformes Apple'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les Human Interface Guidelines fournissent des recommandations de conception permettant de créer des expériences cohérentes et adaptées aux plateformes Apple.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — DÉVELOPPEMENT CROSS-PLATFORM
            // ============================================================
            [
                'title' => 'Développement mobile Cross-Platform',
                'description' => 'Introduction aux frameworks permettant de développer des applications mobiles destinées à plusieurs plateformes.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le développement mobile Cross-Platform ?',
                        'choices' => [
                            'Le développement exclusivement pour Android',
                            'Le développement d’applications pouvant cibler plusieurs plateformes grâce à du code partagé',
                            'La création de bases de données',
                            'La fabrication de matériel mobile'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le développement Cross-Platform permet de partager une partie importante du code entre plusieurs plateformes mobiles.'
                    ],

                    [
                        'question' => 'Quel framework utilise Dart comme langage de programmation principal ?',
                        'choices' => [
                            'React Native',
                            'Laravel',
                            'Flutter',
                            'Django'
                        ],
                        'correct' => 2,
                        'explanation' => 'Flutter utilise Dart comme langage de programmation principal.'
                    ],

                    [
                        'question' => 'Quelle technologie repose principalement sur JavaScript et les concepts de React pour le développement mobile ?',
                        'choices' => [
                            'React Native',
                            'Flutter',
                            'SwiftUI',
                            'UIKit'
                        ],
                        'correct' => 0,
                        'explanation' => 'React Native utilise les concepts de React et JavaScript ou TypeScript pour développer des applications mobiles.'
                    ],

                    [
                        'question' => 'Quel est l’un des principaux avantages du développement Cross-Platform ?',
                        'choices' => [
                            'Il garantit l’absence totale de bugs',
                            'Il supprime toutes les différences entre plateformes',
                            'Il ne nécessite aucun test',
                            'Il peut réduire la duplication du travail de développement'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le partage du code entre plusieurs plateformes peut réduire le travail de développement et de maintenance.'
                    ],

                    [
                        'question' => 'Quelle limitation doit être prise en compte avec les frameworks Cross-Platform ?',
                        'choices' => [
                            'Certaines fonctionnalités spécifiques à une plateforme peuvent nécessiter du code natif ou des plugins',
                            'Les applications ne peuvent pas utiliser Internet',
                            'Les applications ne peuvent pas afficher d’images',
                            'Les applications ne peuvent pas utiliser le stockage'
                        ],
                        'correct' => 0,
                        'explanation' => 'Certaines API ou fonctionnalités spécifiques à une plateforme peuvent nécessiter une intégration native.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un plugin dans un framework Cross-Platform ?',
                        'choices' => [
                            'Un routeur réseau',
                            'Un écran mobile',
                            'Un package qui ajoute des fonctionnalités ou permet d’intégrer des capacités de la plateforme',
                            'Une base de données'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un plugin ou package peut ajouter des fonctionnalités et permettre l’accès à certaines capacités natives de la plateforme.'
                    ],

                    [
                        'question' => 'Quel est l’objectif d’un platform channel dans certaines architectures Cross-Platform ?',
                        'choices' => [
                            'Créer du CSS',
                            'Communiquer entre le code partagé et le code natif de la plateforme',
                            'Remplacer la base de données',
                            'Stocker les mots de passe'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un platform channel permet, dans certaines architectures, au code partagé de communiquer avec une implémentation native.'
                    ],

                    [
                        'question' => 'Pourquoi les tests sur de vrais appareils restent-ils importants pour les applications Cross-Platform ?',
                        'choices' => [
                            'Les émulateurs ne fonctionnent jamais',
                            'Le code ne peut pas être compilé autrement',
                            'Les appareils réels n’exécutent pas les applications',
                            'Le matériel, les versions d’OS et le comportement des appareils peuvent varier'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les appareils réels peuvent révéler des problèmes de performance, de matériel, de permissions ou de comportement spécifique à une plateforme.'
                    ],

                    [
                        'question' => 'À quoi sert principalement le Hot Reload pendant le développement ?',
                        'choices' => [
                            'À publier l’application',
                            'À créer une base de données',
                            'À visualiser rapidement certaines modifications sans redémarrer complètement l’application',
                            'À signer l’application'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le Hot Reload accélère le développement en permettant d’appliquer rapidement certaines modifications tout en conservant une grande partie de l’état courant.'
                    ],

                    [
                        'question' => 'Quels éléments faut-il notamment prendre en compte pour choisir entre développement natif et Cross-Platform ?',
                        'choices' => [
                            'Uniquement le logo de l’application',
                            'Uniquement la taille de la base de données',
                            'Uniquement la luminosité de l’écran',
                            'Les performances, les fonctionnalités des plateformes, les compétences de l’équipe et la maintenance'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le choix technologique doit tenir compte des performances, des fonctionnalités nécessaires, des compétences de l’équipe et des exigences de maintenance.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — STOCKAGE MOBILE
            // ============================================================
            [
                'title' => 'Données et stockage mobile',
                'description' => 'Stockage local, bases de données, fichiers et gestion des données dans les applications mobiles.',
                'questions' => [

                    [
                        'question' => 'Pourquoi une application mobile peut-elle utiliser un stockage local ?',
                        'choices' => [
                            'Pour augmenter la taille de l’écran',
                            'Pour conserver certaines données disponibles sans contacter un serveur',
                            'Pour remplacer le système d’exploitation',
                            'Pour désactiver le réseau'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le stockage local permet de conserver des données directement sur l’appareil, notamment lorsque la connexion réseau est indisponible.'
                    ],

                    [
                        'question' => 'Quel type de données convient généralement à un stockage simple de type clé-valeur ?',
                        'choices' => [
                            'Des préférences simples telles que des paramètres',
                            'De grands ensembles de données relationnelles',
                            'Du traitement vidéo',
                            'Des tables de routage réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le stockage clé-valeur convient notamment aux préférences et aux paramètres simples de l’application.'
                    ],

                    [
                        'question' => 'Pourquoi une application mobile peut-elle utiliser une base de données locale ?',
                        'choices' => [
                            'Pour contrôler la luminosité de l’écran',
                            'Pour remplacer le processeur',
                            'Pour stocker et interroger des données structurées localement',
                            'Pour créer des câbles réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une base de données locale permet de stocker des données structurées et d’effectuer des requêtes directement sur l’appareil.'
                    ],

                    [
                        'question' => 'Qu’est-ce que SQLite ?',
                        'choices' => [
                            'Un fournisseur cloud',
                            'Un framework d’interface',
                            'Un langage de programmation',
                            'Un moteur de base de données relationnelle léger'
                        ],
                        'correct' => 3,
                        'explanation' => 'SQLite est un moteur de base de données relationnelle embarqué et léger, couramment utilisé dans les applications mobiles.'
                    ],

                    [
                        'question' => 'Pourquoi les données sensibles doivent-elles bénéficier d’une protection supplémentaire sur un appareil mobile ?',
                        'choices' => [
                            'Les appareils peuvent être perdus, volés ou compromis',
                            'Les applications mobiles ne peuvent pas utiliser le chiffrement',
                            'Les données sensibles ne sont jamais stockées',
                            'Les écrans sont toujours publics'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un appareil mobile peut être perdu ou compromis. Les informations sensibles doivent donc être protégées de manière appropriée.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un cache dans une application mobile ?',
                        'choices' => [
                            'Un remplacement permanent du serveur',
                            'Un langage de programmation',
                            'Des données stockées temporairement pour améliorer les performances ou la disponibilité',
                            'Un composant d’interface'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un cache conserve temporairement des données réutilisables afin de réduire les traitements ou les requêtes réseau répétitives.'
                    ],

                    [
                        'question' => 'Que doit faire une application lorsque des données mises en cache deviennent invalides ?',
                        'choices' => [
                            'Les utiliser indéfiniment',
                            'Les supprimer, les actualiser ou les revalider selon la politique de cache',
                            'Supprimer l’application',
                            'Les ignorer systématiquement'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une stratégie d’invalidation du cache permet d’éviter d’utiliser indéfiniment des données obsolètes.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il éviter de stocker inutilement de gros fichiers localement ?',
                        'choices' => [
                            'Cela désactive les notifications',
                            'Cela augmente la vitesse du réseau',
                            'Cela améliore automatiquement le processeur',
                            'Cela peut consommer une quantité importante du stockage disponible'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les appareils mobiles disposent d’un espace de stockage limité. Les fichiers locaux doivent donc être gérés avec précaution.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la conception Offline-First ?',
                        'choices' => [
                            'Une conception permettant à l’application de rester utile même sans connexion réseau',
                            'La désactivation de toutes les requêtes réseau',
                            'L’utilisation exclusive d’ordinateurs de bureau',
                            'La suppression du stockage local'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une application Offline-First est conçue pour continuer à fournir des fonctionnalités utiles même lorsque la connexion réseau est indisponible.'
                    ],

                    [
                        'question' => 'Pourquoi les données locales doivent-elles parfois être synchronisées avec un serveur Backend ?',
                        'choices' => [
                            'Pour désactiver le cache',
                            'Pour supprimer les permissions',
                            'Pour modifier l’écran de l’appareil',
                            'Pour maintenir la cohérence des données entre l’appareil et le système distant'
                        ],
                        'correct' => 3,
                        'explanation' => 'La synchronisation permet de réconcilier les données locales et distantes afin de maintenir leur cohérence.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — RÉSEAUX MOBILES
            // ============================================================
            [
                'title' => 'Bases des réseaux mobiles',
                'description' => 'HTTP, APIs, connectivité, requêtes et communication entre applications mobiles et serveurs.',
                'questions' => [

                    [
                        'question' => 'Quel protocole est couramment utilisé par les applications mobiles pour communiquer avec des Web APIs ?',
                        'choices' => [
                            'HTTP/HTTPS',
                            'FTP uniquement',
                            'SMTP uniquement',
                            'Bluetooth uniquement'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les applications mobiles communiquent couramment avec les APIs Backend en utilisant HTTP ou HTTPS.'
                    ],

                    [
                        'question' => 'Pourquoi HTTPS est-il préférable à HTTP pour les communications sensibles ?',
                        'choices' => [
                            'Il rend l’application utilisable hors ligne',
                            'Il fournit une communication chiffrée grâce à TLS',
                            'Il supprime le serveur',
                            'Il augmente la résolution de l’écran'
                        ],
                        'correct' => 1,
                        'explanation' => 'HTTPS utilise TLS afin de protéger les données échangées entre le client et le serveur.'
                    ],

                    [
                        'question' => 'Quelle méthode HTTP est couramment utilisée pour récupérer des données ?',
                        'choices' => [
                            'POST',
                            'DELETE',
                            'PATCH',
                            'GET'
                        ],
                        'correct' => 3,
                        'explanation' => 'La méthode GET est couramment utilisée pour demander ou récupérer une ressource.'
                    ],

                    [
                        'question' => 'Quelle méthode HTTP est couramment utilisée pour créer une ressource ?',
                        'choices' => [
                            'GET',
                            'HEAD',
                            'POST',
                            'OPTIONS'
                        ],
                        'correct' => 2,
                        'explanation' => 'POST est couramment utilisée pour envoyer des données et créer une nouvelle ressource.'
                    ],

                    [
                        'question' => 'Quel format est couramment utilisé pour échanger des données entre applications mobiles et APIs ?',
                        'choices' => [
                            'JSON',
                            'BMP',
                            'EXE',
                            'CSS'
                        ],
                        'correct' => 0,
                        'explanation' => 'JSON est largement utilisé pour échanger des données structurées entre les applications et les APIs.'
                    ],

                    [
                        'question' => 'Que doit faire une application lorsqu’une requête réseau échoue ?',
                        'choices' => [
                            'Ignorer toutes les erreurs',
                            'Supposer que les données ont été reçues',
                            'Gérer correctement l’erreur et informer l’utilisateur ou effectuer une nouvelle tentative selon le contexte',
                            'Supprimer l’application'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une application mobile doit gérer correctement les erreurs réseau, car la connectivité peut être instable.'
                    ],

                    [
                        'question' => 'Pourquoi la connexion réseau mobile peut-elle être moins fiable qu’une connexion fixe ?',
                        'choices' => [
                            'HTTP ne fonctionne pas sur les téléphones',
                            'Les appareils mobiles ne disposent d’aucun réseau',
                            'Les appareils ne peuvent pas utiliser HTTPS',
                            'L’utilisateur peut se déplacer et les conditions de signal peuvent changer'
                        ],
                        'correct' => 3,
                        'explanation' => 'La puissance du signal, les déplacements, les changements de réseau et la couverture peuvent affecter la connectivité mobile.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un endpoint d’API ?',
                        'choices' => [
                            'Une adresse spécifique par laquelle une API expose une fonctionnalité ou une ressource',
                            'Un écran mobile',
                            'Un bouton d’interface',
                            'Un mot de passe de base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un endpoint identifie une adresse permettant au client d’interagir avec une ressource ou une opération du Backend.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un timeout ?',
                        'choices' => [
                            'Une table de base de données',
                            'Une durée maximale autorisée pour une opération avant qu’elle soit considérée comme échouée',
                            'Un composant d’interface',
                            'Un langage de programmation'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un timeout empêche l’application d’attendre indéfiniment la réponse d’une opération réseau.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il éviter les requêtes réseau inutiles dans une application mobile ?',
                        'choices' => [
                            'Pour désactiver les APIs',
                            'Pour augmenter la consommation de batterie',
                            'Pour empêcher tout mécanisme de cache',
                            'Pour réduire la latence, la consommation de données et la batterie'
                        ],
                        'correct' => 3,
                        'explanation' => 'La réduction des requêtes inutiles peut améliorer les performances et économiser la batterie ainsi que les données mobiles.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — CYCLE DE VIE DES APPLICATIONS
            // ============================================================
            [
                'title' => 'Cycle de vie des applications mobiles',
                'description' => 'États des applications, événements du cycle de vie, tests et notions fondamentales de déploiement.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le cycle de vie d’une application ?',
                        'choices' => [
                            'Le logo de l’application',
                            'Le schéma d’une base de données',
                            'La succession des états et événements traversés par une application pendant son fonctionnement',
                            'Un protocole réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le cycle de vie décrit les différents états et événements d’une application lors de son lancement, son utilisation, sa mise en arrière-plan ou sa terminaison.'
                    ],

                    [
                        'question' => 'Pourquoi les développeurs mobiles doivent-ils comprendre le cycle de vie d’une application ?',
                        'choices' => [
                            'Pour remplacer le système d’exploitation',
                            'Pour gérer correctement les ressources et l’état de l’application',
                            'Pour modifier le matériel du téléphone',
                            'Pour supprimer les tests'
                        ],
                        'correct' => 1,
                        'explanation' => 'La compréhension du cycle de vie aide à sauvegarder l’état, libérer les ressources et gérer correctement les transitions entre les différents états.'
                    ],

                    [
                        'question' => 'Que devrait généralement faire une application lorsqu’elle passe en arrière-plan ?',
                        'choices' => [
                            'Augmenter sa consommation de ressources',
                            'Supprimer ses données',
                            'Effectuer un nombre illimité de requêtes réseau',
                            'Mettre en pause ou réduire les tâches inutiles'
                        ],
                        'correct' => 3,
                        'explanation' => 'Une application en arrière-plan doit généralement éviter de consommer inutilement des ressources et peut devoir interrompre certaines opérations.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’état d’une application ?',
                        'choices' => [
                            'La luminosité de l’écran',
                            'Les informations représentant la situation actuelle de l’application',
                            'Le modèle du téléphone',
                            'Le fournisseur réseau'
                        ],
                        'correct' => 1,
                        'explanation' => 'L’état d’une application contient les informations nécessaires pour représenter ce qu’elle fait ou affiche actuellement.'
                    ],

                    [
                        'question' => 'Pourquoi certaines informations importantes de l’utilisateur doivent-elles être persistées ?',
                        'choices' => [
                            'L’application peut être interrompue ou terminée',
                            'Le réseau est toujours indisponible',
                            'Le téléphone ne peut pas afficher de texte',
                            'Cela rend automatiquement le processeur plus rapide'
                        ],
                        'correct' => 0,
                        'explanation' => 'La persistance permet de restaurer certaines informations après une interruption, une fermeture ou une terminaison de l’application.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Unit Test ?',
                        'choices' => [
                            'Un test du matériel Wi-Fi',
                            'Un test de l’App Store',
                            'Un test portant sur une petite unité de logique de l’application de manière isolée',
                            'Un test manuel de l’ensemble du téléphone'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un Unit Test vérifie une petite partie isolée de la logique de l’application.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Integration Test ?',
                        'choices' => [
                            'Un test portant uniquement sur les couleurs',
                            'Un test de la batterie du téléphone',
                            'Un test de l’icône de l’application',
                            'Un test vérifiant comment plusieurs composants fonctionnent ensemble'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un Integration Test vérifie les interactions entre plusieurs composants ou systèmes.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il tester les applications sur plusieurs tailles d’écran ?',
                        'choices' => [
                            'Tous les appareils possèdent exactement le même écran',
                            'La taille de l’écran n’a aucun impact',
                            'Les développeurs sont les seuls à utiliser différentes tailles d’écran',
                            'La mise en page et les interactions peuvent varier selon les appareils'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les tailles et densités d’écran peuvent affecter la mise en page, la lisibilité et les interactions.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le déploiement d’une application ?',
                        'choices' => [
                            'Écrire une variable',
                            'Créer un bouton',
                            'Concevoir une base de données',
                            'Rendre l’application disponible aux utilisateurs via un canal de distribution approprié'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le déploiement consiste notamment à préparer et distribuer une application afin que les utilisateurs puissent l’installer et l’utiliser.'
                    ],

                    [
                        'question' => 'Pourquoi les mises à jour d’une application sont-elles importantes ?',
                        'choices' => [
                            'Elles peuvent apporter des corrections de bugs, des améliorations de sécurité et de nouvelles fonctionnalités',
                            'Elles augmentent toujours uniquement la taille de l’application',
                            'Elles suppriment tous les besoins de test',
                            'Elles empêchent les utilisateurs d’utiliser l’application'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les mises à jour peuvent corriger des bugs, résoudre des problèmes de sécurité, améliorer les performances et ajouter de nouvelles fonctionnalités.'
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
                    'passing_score' => 50,
                    'total_marks' => 10,
                    'is_active' => true,
                    'difficulty' => 'Beginner',
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

                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

                // Mélange des réponses tout en conservant
                // is_correct avec la bonne réponse.
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

