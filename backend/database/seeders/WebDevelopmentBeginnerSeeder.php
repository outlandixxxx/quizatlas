<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WebDevelopmentBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'web-development')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — INTRODUCTION AU WEB
            // ============================================================
            [
                'title' => 'Introduction au développement Web',
                'description' => 'Découvrez les concepts fondamentaux du Web et du développement Web.',
                'questions' => [

                    [
                        'question' => 'Que signifie WWW ?',
                        'choices' => [
                            'World Web Window',
                            'World Wide Web',
                            'Web World Wide',
                            'Wide World Website',
                        ],
                        'correct' => 1,
                        'explanation' => 'WWW signifie World Wide Web, le système de documents et ressources accessibles via Internet.'
                    ],

                    [
                        'question' => 'Quel langage est principalement utilisé pour structurer une page Web ?',
                        'choices' => [
                            'HTML',
                            'CSS',
                            'SQL',
                            'PHP',
                        ],
                        'correct' => 0,
                        'explanation' => 'HTML est utilisé pour définir la structure et le contenu d’une page Web.'
                    ],

                    [
                        'question' => 'Quel langage est principalement utilisé pour styliser une page Web ?',
                        'choices' => [
                            'JavaScript',
                            'HTML',
                            'CSS',
                            'SQL',
                        ],
                        'correct' => 2,
                        'explanation' => 'CSS permet de définir l’apparence, la mise en page et le style des éléments HTML.'
                    ],

                    [
                        'question' => 'Quel langage permet principalement d’ajouter des interactions à une page Web côté client ?',
                        'choices' => [
                            'HTML',
                            'CSS',
                            'SQL',
                            'JavaScript',
                        ],
                        'correct' => 3,
                        'explanation' => 'JavaScript permet d’ajouter des comportements et des interactions dynamiques dans le navigateur.'
                    ],

                    [
                        'question' => 'Quel logiciel permet généralement à un utilisateur de consulter un site Web ?',
                        'choices' => [
                            'Un navigateur Web',
                            'Un compilateur',
                            'Un serveur SQL',
                            'Un éditeur de texte uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un navigateur Web comme Chrome, Firefox ou Safari permet d’accéder aux sites Web.'
                    ],

                    [
                        'question' => 'Que représente généralement une URL ?',
                        'choices' => [
                            'Un langage de programmation',
                            'Une adresse permettant d’identifier une ressource sur le Web',
                            'Un type de serveur',
                            'Une base de données',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une URL identifie l’emplacement d’une ressource accessible via un protocole comme HTTP ou HTTPS.'
                    ],

                    [
                        'question' => 'Quel protocole est principalement utilisé pour transférer des ressources sur le Web ?',
                        'choices' => [
                            'FTP uniquement',
                            'SSH',
                            'HTTP',
                            'SMTP',
                        ],
                        'correct' => 2,
                        'explanation' => 'HTTP est le protocole fondamental utilisé pour les échanges entre navigateurs et serveurs Web.'
                    ],

                    [
                        'question' => 'Que signifie HTTPS ?',
                        'choices' => [
                            'HyperText Transfer Protocol Secure',
                            'HyperText Transfer Program System',
                            'High Transfer Text Protocol Secure',
                            'Hyper Transfer Terminal Protocol Service',
                        ],
                        'correct' => 0,
                        'explanation' => 'HTTPS correspond à HTTP sécurisé grâce notamment au chiffrement TLS.'
                    ],

                    [
                        'question' => 'Quel élément reçoit généralement les requêtes provenant d’un navigateur ?',
                        'choices' => [
                            'Le clavier',
                            'Le serveur Web',
                            'Le fichier CSS',
                            'Le navigateur lui-même',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le serveur Web reçoit les requêtes HTTP et renvoie généralement les ressources demandées.'
                    ],

                    [
                        'question' => 'Quel est le rôle principal d’un serveur Web ?',
                        'choices' => [
                            'Créer uniquement des images',
                            'Modifier le navigateur de l’utilisateur',
                            'Stocker uniquement des mots de passe',
                            'Répondre aux requêtes Web et fournir des ressources',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un serveur Web traite les requêtes et fournit les ressources ou réponses demandées.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — HTML
            // ============================================================
            [
                'title' => 'HTML et structure des pages',
                'description' => 'Quiz sur les bases du HTML et la structure d’une page Web.',
                'questions' => [

                    [
                        'question' => 'Que signifie HTML ?',
                        'choices' => [
                            'HyperText Markup Language',
                            'HighText Machine Language',
                            'Hyper Transfer Markup Language',
                            'Home Tool Markup Language',
                        ],
                        'correct' => 0,
                        'explanation' => 'HTML signifie HyperText Markup Language.'
                    ],

                    [
                        'question' => 'Quelle balise HTML représente généralement le titre principal d’une page ou d’une section ?',
                        'choices' => [
                            '<p>',
                            '<h1>',
                            '<title>',
                            '<header>',
                        ],
                        'correct' => 1,
                        'explanation' => '<h1> représente généralement le titre de niveau principal dans le contenu de la page.'
                    ],

                    [
                        'question' => 'Quelle balise permet de créer un paragraphe ?',
                        'choices' => [
                            '<text>',
                            '<paragraph>',
                            '<p>',
                            '<para>',
                        ],
                        'correct' => 2,
                        'explanation' => 'La balise <p> représente un paragraphe HTML.'
                    ],

                    [
                        'question' => 'Quelle balise permet de créer un lien hypertexte ?',
                        'choices' => [
                            '<link>',
                            '<url>',
                            '<href>',
                            '<a>',
                        ],
                        'correct' => 3,
                        'explanation' => 'La balise <a> est utilisée pour créer un lien hypertexte.'
                    ],

                    [
                        'question' => 'Quel attribut indique généralement la destination d’un lien <a> ?',
                        'choices' => [
                            'src',
                            'href',
                            'link',
                            'url',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’attribut href indique l’URL ou la destination du lien.'
                    ],

                    [
                        'question' => 'Quelle balise permet d’afficher une image ?',
                        'choices' => [
                            '<img>',
                            '<image>',
                            '<picture-only>',
                            '<src>',
                        ],
                        'correct' => 0,
                        'explanation' => 'La balise <img> permet d’intégrer une image dans une page HTML.'
                    ],

                    [
                        'question' => 'Quel attribut fournit généralement une description alternative d’une image ?',
                        'choices' => [
                            'description',
                            'alternative',
                            'alt',
                            'text',
                        ],
                        'correct' => 2,
                        'explanation' => 'L’attribut alt fournit un texte alternatif pour l’image, notamment utile pour l’accessibilité.'
                    ],

                    [
                        'question' => 'Quelle balise représente une liste non ordonnée ?',
                        'choices' => [
                            '<ol>',
                            '<list>',
                            '<li>',
                            '<ul>',
                        ],
                        'correct' => 3,
                        'explanation' => '<ul> représente une liste non ordonnée, tandis que <li> représente ses éléments.'
                    ],

                    [
                        'question' => 'Quelle balise représente un élément d’une liste ?',
                        'choices' => [
                            '<item>',
                            '<li>',
                            '<list-item>',
                            '<element>',
                        ],
                        'correct' => 1,
                        'explanation' => '<li> représente un élément de liste.'
                    ],

                    [
                        'question' => 'Quelle balise HTML contient généralement le contenu visible principal de la page ?',
                        'choices' => [
                            '<body>',
                            '<head>',
                            '<meta>',
                            '<html-info>',
                        ],
                        'correct' => 0,
                        'explanation' => 'La balise <body> contient le contenu visible de la page Web.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — CSS
            // ============================================================
            [
                'title' => 'CSS et mise en forme',
                'description' => 'Découvrez les bases du CSS et la mise en forme des pages Web.',
                'questions' => [

                    [
                        'question' => 'Que signifie CSS ?',
                        'choices' => [
                            'Computer Style System',
                            'Cascading Style Sheets',
                            'Creative Styling System',
                            'Cascading System Style',
                        ],
                        'correct' => 1,
                        'explanation' => 'CSS signifie Cascading Style Sheets.'
                    ],

                    [
                        'question' => 'Quelle propriété CSS permet de modifier la couleur du texte ?',
                        'choices' => [
                            'font-color',
                            'text-style',
                            'color',
                            'foreground',
                        ],
                        'correct' => 2,
                        'explanation' => 'La propriété color permet de définir la couleur du texte.'
                    ],

                    [
                        'question' => 'Quelle propriété CSS permet de modifier la couleur d’arrière-plan ?',
                        'choices' => [
                            'background-color',
                            'color-background',
                            'bg',
                            'background-style',
                        ],
                        'correct' => 0,
                        'explanation' => 'background-color permet de définir la couleur d’arrière-plan d’un élément.'
                    ],

                    [
                        'question' => 'Quelle propriété permet de modifier la taille du texte ?',
                        'choices' => [
                            'text-size',
                            'font-size',
                            'size-font',
                            'letter-size',
                        ],
                        'correct' => 1,
                        'explanation' => 'font-size permet de définir la taille de la police.'
                    ],

                    [
                        'question' => 'Quel sélecteur CSS cible un élément ayant la classe "menu" ?',
                        'choices' => [
                            '#menu',
                            'menu',
                            '.menu',
                            '*menu',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le point . est utilisé pour sélectionner une classe en CSS.'
                    ],

                    [
                        'question' => 'Quel sélecteur CSS cible un élément ayant l’identifiant "header" ?',
                        'choices' => [
                            '.header',
                            'header',
                            '*header',
                            '#header',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le symbole # permet de sélectionner un élément par son id.'
                    ],

                    [
                        'question' => 'Quelle propriété CSS permet de définir l’espace intérieur d’un élément ?',
                        'choices' => [
                            'padding',
                            'margin',
                            'spacing',
                            'inside-space',
                        ],
                        'correct' => 0,
                        'explanation' => 'padding définit l’espace intérieur entre le contenu et la bordure.'
                    ],

                    [
                        'question' => 'Quelle propriété définit généralement l’espace extérieur d’un élément ?',
                        'choices' => [
                            'padding',
                            'margin',
                            'outside',
                            'gap-only',
                        ],
                        'correct' => 1,
                        'explanation' => 'margin définit l’espace extérieur autour d’un élément.'
                    ],

                    [
                        'question' => 'Quelle valeur de display permet d’utiliser le système Flexbox ?',
                        'choices' => [
                            'display: box',
                            'display: flexbox',
                            'display: flex',
                            'display: flexible',
                        ],
                        'correct' => 2,
                        'explanation' => 'display: flex active le modèle de mise en page Flexbox.'
                    ],

                    [
                        'question' => 'Quelle propriété permet d’arrondir les coins d’un élément ?',
                        'choices' => [
                            'corner-radius',
                            'radius',
                            'border-round',
                            'border-radius',
                        ],
                        'correct' => 3,
                        'explanation' => 'border-radius permet d’arrondir les coins d’un élément.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — JAVASCRIPT
            // ============================================================
            [
                'title' => 'JavaScript — fondamentaux',
                'description' => 'Quiz d’introduction aux concepts fondamentaux de JavaScript.',
                'questions' => [

                    [
                        'question' => 'Quel langage est principalement utilisé pour ajouter de la logique côté navigateur ?',
                        'choices' => [
                            'JavaScript',
                            'HTML',
                            'CSS',
                            'SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'JavaScript permet d’exécuter de la logique et de créer des interactions côté navigateur.'
                    ],

                    [
                        'question' => 'Quel mot-clé permet de déclarer une variable dont la valeur ne sera pas réassignée ?',
                        'choices' => [
                            'var',
                            'const',
                            'fixed',
                            'static',
                        ],
                        'correct' => 1,
                        'explanation' => 'const permet de déclarer une variable qui ne peut pas être réassignée.'
                    ],

                    [
                        'question' => 'Quel mot-clé permet de déclarer une variable dont la valeur peut être réassignée ?',
                        'choices' => [
                            'const',
                            'fixed',
                            'let',
                            'immutable',
                        ],
                        'correct' => 2,
                        'explanation' => 'let permet de déclarer une variable dont la valeur peut être réassignée.'
                    ],

                    [
                        'question' => 'Quel opérateur permet de comparer à la fois la valeur et le type en JavaScript ?',
                        'choices' => [
                            '==',
                            '=',
                            '!== seulement',
                            '===',
                        ],
                        'correct' => 3,
                        'explanation' => '=== effectue une comparaison stricte de la valeur et du type.'
                    ],

                    [
                        'question' => 'Quel type représente une valeur vraie ou fausse ?',
                        'choices' => [
                            'Boolean',
                            'String',
                            'Number',
                            'Object',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le type Boolean contient les valeurs true et false.'
                    ],

                    [
                        'question' => 'Quelle méthode permet d’ajouter un élément à la fin d’un Array ?',
                        'choices' => [
                            'add()',
                            'push()',
                            'append()',
                            'insertEnd()',
                        ],
                        'correct' => 1,
                        'explanation' => 'La méthode push() ajoute un ou plusieurs éléments à la fin d’un Array.'
                    ],

                    [
                        'question' => 'Quelle méthode permet de supprimer le dernier élément d’un Array ?',
                        'choices' => [
                            'removeLast()',
                            'delete()',
                            'pop()',
                            'remove()',
                        ],
                        'correct' => 2,
                        'explanation' => 'La méthode pop() supprime et retourne le dernier élément d’un Array.'
                    ],

                    [
                        'question' => 'Quelle syntaxe permet généralement d’écrire une fonction fléchée ?',
                        'choices' => [
                            'function => ()',
                            'arrow function()',
                            'function -> {}',
                            '() => {}',
                        ],
                        'correct' => 3,
                        'explanation' => 'La syntaxe () => {} permet de définir une Arrow Function.'
                    ],

                    [
                        'question' => 'Quel objet permet généralement d’afficher des messages dans la console du navigateur ?',
                        'choices' => [
                            'console',
                            'browser',
                            'debuggerOnly',
                            'windowLog',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’objet console permet notamment d’utiliser console.log() pour afficher des informations.'
                    ],

                    [
                        'question' => 'Quelle fonction permet de convertir une chaîne JSON en objet JavaScript ?',
                        'choices' => [
                            'JSON.stringify()',
                            'JSON.parse()',
                            'JSON.convert()',
                            'JSON.object()',
                        ],
                        'correct' => 1,
                        'explanation' => 'JSON.parse() transforme une chaîne JSON valide en valeur JavaScript.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — DOM
            // ============================================================
            [
                'title' => 'DOM et interactions',
                'description' => 'Quiz sur le DOM et les interactions entre JavaScript et HTML.',
                'questions' => [

                    [
                        'question' => 'Que signifie DOM ?',
                        'choices' => [
                            'Document Object Model',
                            'Data Object Management',
                            'Document Online Model',
                            'Dynamic Object Method',
                        ],
                        'correct' => 0,
                        'explanation' => 'DOM signifie Document Object Model.'
                    ],

                    [
                        'question' => 'Quelle méthode permet de sélectionner un élément par son id ?',
                        'choices' => [
                            'document.findId()',
                            'document.getElementById()',
                            'document.selectId()',
                            'document.id()',
                        ],
                        'correct' => 1,
                        'explanation' => 'document.getElementById() permet de sélectionner un élément grâce à son id.'
                    ],

                    [
                        'question' => 'Quelle méthode permet de sélectionner le premier élément correspondant à un sélecteur CSS ?',
                        'choices' => [
                            'query()',
                            'selectFirst()',
                            'querySelector()',
                            'findCSS()',
                        ],
                        'correct' => 2,
                        'explanation' => 'querySelector() retourne le premier élément correspondant au sélecteur CSS.'
                    ],

                    [
                        'question' => 'Quelle méthode permet d’attacher un gestionnaire d’événement à un élément ?',
                        'choices' => [
                            'addEvent()',
                            'event()',
                            'listenEvent()',
                            'addEventListener()',
                        ],
                        'correct' => 3,
                        'explanation' => 'addEventListener() permet d’écouter des événements comme click, submit ou input.'
                    ],

                    [
                        'question' => 'Quel événement est déclenché lorsqu’un utilisateur clique généralement sur un élément ?',
                        'choices' => [
                            'click',
                            'press',
                            'tapOnly',
                            'select',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’événement click est déclenché lorsqu’un utilisateur effectue un clic.'
                    ],

                    [
                        'question' => 'Quelle propriété permet de modifier le contenu texte d’un élément ?',
                        'choices' => [
                            'textValue',
                            'textContent',
                            'contentTextOnly',
                            'innerString',
                        ],
                        'correct' => 1,
                        'explanation' => 'textContent permet de lire ou modifier le contenu textuel d’un élément.'
                    ],

                    [
                        'question' => 'Quelle propriété permet de modifier directement le HTML interne d’un élément ?',
                        'choices' => [
                            'htmlContent',
                            'contentHTML',
                            'innerHTML',
                            'insideHTMLOnly',
                        ],
                        'correct' => 2,
                        'explanation' => 'innerHTML permet de lire ou modifier le HTML contenu dans un élément.'
                    ],

                    [
                        'question' => 'Quelle méthode permet de créer un nouvel élément HTML en JavaScript ?',
                        'choices' => [
                            'document.newElement()',
                            'document.create()',
                            'document.addElement()',
                            'document.createElement()',
                        ],
                        'correct' => 3,
                        'explanation' => 'document.createElement() crée un nouvel élément DOM.'
                    ],

                    [
                        'question' => 'Quelle méthode permet généralement d’ajouter un élément à un autre élément du DOM ?',
                        'choices' => [
                            'appendChild()',
                            'addChildOnly()',
                            'insertElementOnly()',
                            'pushElement()',
                        ],
                        'correct' => 0,
                        'explanation' => 'appendChild() permet d’ajouter un nœud enfant à un élément.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser preventDefault() dans un événement ?',
                        'choices' => [
                            'Pour supprimer l’élément',
                            'Pour empêcher le comportement par défaut du navigateur',
                            'Pour recharger automatiquement la page',
                            'Pour créer une API',
                        ],
                        'correct' => 1,
                        'explanation' => 'preventDefault() empêche le comportement par défaut associé à un événement.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — HTTP
            // ============================================================
            [
                'title' => 'HTTP et fonctionnement du Web',
                'description' => 'Comprenez les bases du protocole HTTP et des échanges client-serveur.',
                'questions' => [

                    [
                        'question' => 'Quel modèle décrit généralement les échanges entre un navigateur et un serveur Web ?',
                        'choices' => [
                            'Client-Serveur',
                            'Peer-only',
                            'Database-only',
                            'Compiler-Interpreter',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le navigateur agit généralement comme client et communique avec un serveur.'
                    ],

                    [
                        'question' => 'Quelle méthode HTTP est généralement utilisée pour récupérer une ressource ?',
                        'choices' => [
                            'SEND',
                            'GET',
                            'FETCH-ONLY',
                            'READ',
                        ],
                        'correct' => 1,
                        'explanation' => 'GET est utilisée pour demander une représentation d’une ressource.'
                    ],

                    [
                        'question' => 'Quelle méthode HTTP est généralement utilisée pour créer une nouvelle ressource ?',
                        'choices' => [
                            'GET',
                            'PATCH',
                            'POST',
                            'READ',
                        ],
                        'correct' => 2,
                        'explanation' => 'POST est couramment utilisée pour soumettre des données et créer une nouvelle ressource.'
                    ],

                    [
                        'question' => 'Que signifie généralement le code HTTP 404 ?',
                        'choices' => [
                            'Serveur disponible',
                            'Authentification réussie',
                            'Requête créée',
                            'Ressource non trouvée',
                        ],
                        'correct' => 3,
                        'explanation' => 'HTTP 404 signifie généralement que la ressource demandée n’a pas été trouvée.'
                    ],

                    [
                        'question' => 'Que signifie généralement le code HTTP 200 ?',
                        'choices' => [
                            'Succès',
                            'Erreur serveur',
                            'Non autorisé',
                            'Ressource absente',
                        ],
                        'correct' => 0,
                        'explanation' => 'HTTP 200 indique généralement que la requête a été traitée avec succès.'
                    ],

                    [
                        'question' => 'Que signifie généralement le code HTTP 401 ?',
                        'choices' => [
                            'Not Found',
                            'Unauthorized',
                            'Server Error',
                            'Created',
                        ],
                        'correct' => 1,
                        'explanation' => 'HTTP 401 indique généralement qu’une authentification est nécessaire ou invalide.'
                    ],

                    [
                        'question' => 'Que signifie généralement le code HTTP 500 ?',
                        'choices' => [
                            'Client Redirect',
                            'Unauthorized',
                            'Internal Server Error',
                            'Not Found',
                        ],
                        'correct' => 2,
                        'explanation' => 'HTTP 500 indique généralement une erreur interne du serveur.'
                    ],

                    [
                        'question' => 'Dans une requête HTTP, où trouve-t-on généralement des informations comme Content-Type ?',
                        'choices' => [
                            'Dans l’URL uniquement',
                            'Dans le body uniquement',
                            'Dans le code HTML',
                            'Dans les headers',
                        ],
                        'correct' => 3,
                        'explanation' => 'Content-Type est un header HTTP indiquant notamment le type de contenu transmis.'
                    ],

                    [
                        'question' => 'Quel format est très couramment utilisé pour échanger des données avec une API Web ?',
                        'choices' => [
                            'JSON',
                            'EXE',
                            'PNG uniquement',
                            'CSS',
                        ],
                        'correct' => 0,
                        'explanation' => 'JSON est largement utilisé pour échanger des données structurées entre applications Web.'
                    ],

                    [
                        'question' => 'Que représente généralement le body d’une requête HTTP ?',
                        'choices' => [
                            'Le nom du navigateur uniquement',
                            'Les données envoyées avec la requête',
                            'L’adresse IP uniquement',
                            'Le protocole DNS',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le body peut contenir les données envoyées au serveur, notamment avec POST ou PUT.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — API ET WEB DYNAMIQUE
            // ============================================================
            [
                'title' => 'API et Web dynamique',
                'description' => 'Introduction aux API et aux échanges dynamiques entre applications Web.',
                'questions' => [

                    [
                        'question' => 'Que signifie API ?',
                        'choices' => [
                            'Application Programming Interface',
                            'Application Process Internet',
                            'Advanced Programming Internet',
                            'Application Protocol Integration',
                        ],
                        'correct' => 0,
                        'explanation' => 'API signifie Application Programming Interface.'
                    ],

                    [
                        'question' => 'Quel est le rôle principal d’une API Web ?',
                        'choices' => [
                            'Créer uniquement des pages HTML',
                            'Permettre à des applications de communiquer entre elles',
                            'Remplacer le navigateur',
                            'Créer des fichiers CSS',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une API Web permet à différents logiciels ou composants d’échanger des données et des fonctionnalités.'
                    ],

                    [
                        'question' => 'Que signifie généralement REST dans le contexte des API ?',
                        'choices' => [
                            'Remote Execution System Technology',
                            'Request Engine Standard Transfer',
                            'Representational State Transfer',
                            'Resource Execution Server Technology',
                        ],
                        'correct' => 2,
                        'explanation' => 'REST signifie Representational State Transfer.'
                    ],

                    [
                        'question' => 'Quel format est souvent retourné par une API REST moderne ?',
                        'choices' => [
                            'EXE',
                            'CSS',
                            'HTML uniquement',
                            'JSON',
                        ],
                        'correct' => 3,
                        'explanation' => 'JSON est l’un des formats les plus couramment utilisés par les API REST.'
                    ],

                    [
                        'question' => 'Quel code HTTP est généralement utilisé lorsqu’une ressource est créée avec succès ?',
                        'choices' => [
                            '201',
                            '404',
                            '500',
                            '301',
                        ],
                        'correct' => 0,
                        'explanation' => 'HTTP 201 Created indique généralement qu’une ressource a été créée avec succès.'
                    ],

                    [
                        'question' => 'Quel est l’intérêt principal d’une API dans une application mobile ?',
                        'choices' => [
                            'Remplacer le système d’exploitation',
                            'Permettre à l’application mobile de communiquer avec le backend',
                            'Créer les icônes uniquement',
                            'Modifier automatiquement le téléphone',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’application mobile peut utiliser une API pour récupérer ou envoyer des données au backend.'
                    ],

                    [
                        'question' => 'Quelle technologie permet à JavaScript de réaliser des requêtes HTTP modernes ?',
                        'choices' => [
                            'HTMLRequest',
                            'CSSRequest',
                            'Fetch API',
                            'DOMRequestOnly',
                        ],
                        'correct' => 2,
                        'explanation' => 'La Fetch API permet d’effectuer des requêtes réseau depuis JavaScript.'
                    ],

                    [
                        'question' => 'Pourquoi une API utilise-t-elle souvent l’authentification ?',
                        'choices' => [
                            'Pour modifier le CSS',
                            'Pour accélérer HTML',
                            'Pour créer des images',
                            'Pour contrôler l’accès aux ressources protégées',
                        ],
                        'correct' => 3,
                        'explanation' => 'L’authentification permet d’identifier l’utilisateur ou le client avant d’autoriser l’accès à certaines ressources.'
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’une API endpoint ?',
                        'choices' => [
                            'Exposer une ressource ou une opération accessible via une adresse définie',
                            'Créer automatiquement une base de données',
                            'Remplacer CSS',
                            'Compiler JavaScript',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un endpoint représente généralement un point d’accès à une ressource ou une opération d’une API.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il généralement valider les données reçues par une API ?',
                        'choices' => [
                            'Pour rendre le CSS plus rapide',
                            'Pour garantir que les données respectent les règles attendues et réduire les risques',
                            'Pour supprimer HTTP',
                            'Pour empêcher toutes les requêtes GET',
                        ],
                        'correct' => 1,
                        'explanation' => 'La validation permet de vérifier la conformité des données et constitue une mesure importante de robustesse et de sécurité.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — WEB MODERNE
            // ============================================================
            [
                'title' => 'Bases du Web moderne',
                'description' => 'Quiz récapitulatif sur les concepts essentiels du développement Web moderne.',
                'questions' => [

                    [
                        'question' => 'Quel trio constitue la base classique du développement Frontend ?',
                        'choices' => [
                            'HTML, CSS et JavaScript',
                            'PHP, SQL et Bash',
                            'Python, Java et C++',
                            'Laravel, MySQL et Linux',
                        ],
                        'correct' => 0,
                        'explanation' => 'HTML structure le contenu, CSS gère la présentation et JavaScript ajoute principalement la logique et les interactions côté client.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le Responsive Web Design ?',
                        'choices' => [
                            'Une méthode pour supprimer les animations',
                            'Une approche permettant à une interface de s’adapter à différentes tailles d’écran',
                            'Une méthode de stockage SQL',
                            'Un protocole HTTP',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le Responsive Web Design permet de concevoir des interfaces adaptées aux différents appareils et tailles d’écran.'
                    ],

                    [
                        'question' => 'Quelle technologie CSS est particulièrement adaptée aux mises en page en deux dimensions ?',
                        'choices' => [
                            'Float uniquement',
                            'Position uniquement',
                            'CSS Grid',
                            'Text Align',
                        ],
                        'correct' => 2,
                        'explanation' => 'CSS Grid est conçu pour gérer des mises en page en lignes et colonnes.'
                    ],

                    [
                        'question' => 'Quel outil permet généralement d’inspecter HTML, CSS et JavaScript dans un navigateur ?',
                        'choices' => [
                            'SQL Manager',
                            'Terminal uniquement',
                            'Compiler',
                            'Developer Tools',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les Developer Tools du navigateur permettent notamment d’inspecter le DOM, le CSS, le réseau et JavaScript.'
                    ],

                    [
                        'question' => 'Quel est le rôle d’un framework Frontend comme Angular ou React ?',
                        'choices' => [
                            'Faciliter la création et l’organisation d’interfaces Web dynamiques',
                            'Remplacer Internet',
                            'Créer uniquement des bases de données',
                            'Remplacer HTTP',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les frameworks et bibliothèques Frontend fournissent des outils et abstractions pour construire des interfaces modernes.'
                    ],

                    [
                        'question' => 'Quel est le rôle principal d’un backend dans une application Web ?',
                        'choices' => [
                            'Changer la résolution de l’écran',
                            'Gérer notamment la logique serveur, les données et les API',
                            'Créer uniquement des animations CSS',
                            'Remplacer le navigateur',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le backend traite notamment la logique métier, les accès aux données et les requêtes API.'
                    ],

                    [
                        'question' => 'Pourquoi séparer Frontend et Backend peut-il être utile ?',
                        'choices' => [
                            'Pour supprimer les API',
                            'Pour empêcher les utilisateurs d’utiliser le site',
                            'Pour séparer les responsabilités et permettre une architecture plus organisée',
                            'Pour éviter HTML',
                        ],
                        'correct' => 2,
                        'explanation' => 'La séparation permet notamment de distinguer la présentation et les interactions côté client de la logique côté serveur.'
                    ],

                    [
                        'question' => 'Quel outil permet de gérer les versions du code source ?',
                        'choices' => [
                            'HTML',
                            'CSS',
                            'HTTP',
                            'Git',
                        ],
                        'correct' => 3,
                        'explanation' => 'Git est un système de contrôle de version largement utilisé dans le développement logiciel.'
                    ],

                    [
                        'question' => 'Pourquoi HTTPS est-il important pour un site Web moderne ?',
                        'choices' => [
                            'Il protège les communications entre le client et le serveur grâce à TLS',
                            'Il remplace JavaScript',
                            'Il accélère toujours le serveur',
                            'Il supprime les cookies',
                        ],
                        'correct' => 0,
                        'explanation' => 'HTTPS protège les échanges réseau grâce au chiffrement et à l’authentification du serveur via TLS.'
                    ],

                    [
                        'question' => 'Quelle pratique est importante avant de mettre une application Web en production ?',
                        'choices' => [
                            'Supprimer tous les tests',
                            'Tester l’application et vérifier notamment sécurité, performances et configuration',
                            'Désactiver HTTPS',
                            'Afficher les secrets dans le frontend',
                        ],
                        'correct' => 1,
                        'explanation' => 'Avant la production, il est important de vérifier le fonctionnement, la sécurité, les performances et la configuration de l’application.'
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

               // Pair each choice with whether it's correct, then shuffle
                $choicePairs = [];
                foreach ($questionData['choices'] as $idx => $text) {
                    $choicePairs[] = [
                        'text' => $text,
                        'is_correct' => $idx === $questionData['correct'],
                    ];
                }
                shuffle($choicePairs);

                foreach ($choicePairs as $order => $pair) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $pair['text'],
                        'is_correct' => $pair['is_correct'],
                        'order' => $order + 1,
                    ]);
                }
            }
        }
    }
}