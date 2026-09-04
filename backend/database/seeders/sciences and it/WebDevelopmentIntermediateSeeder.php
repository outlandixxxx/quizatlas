<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WebDevelopmentIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'web-development')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — HTML AVANCÉ ET ACCESSIBILITÉ
            // ============================================================
            [
                'title' => 'HTML avancé et accessibilité',
                'description' => 'Approfondissez la structure HTML, les éléments sémantiques et les bases de l’accessibilité.',
                'questions' => [
                    [
                        'question' => 'Quel élément HTML est le plus approprié pour représenter la navigation principale d’un site ?',
                        'choices' => ['<nav>', '<section>', '<aside>', '<menu-content>'],
                        'correct' => 0,
                        'explanation' => '<nav> représente une section contenant des liens de navigation.'
                    ],
                    [
                        'question' => 'Quel élément représente le contenu principal d’une page HTML ?',
                        'choices' => ['<content>', '<main>', '<primary>', '<article-main>'],
                        'correct' => 1,
                        'explanation' => '<main> représente le contenu principal du document.'
                    ],
                    [
                        'question' => 'Quel élément est particulièrement adapté à un contenu autonome pouvant être distribué indépendamment ?',
                        'choices' => ['<div>', '<span>', '<article>', '<content>'],
                        'correct' => 2,
                        'explanation' => '<article> est destiné à un contenu autonome comme un article, une publication ou une actualité.'
                    ],
                    [
                        'question' => 'Quel attribut permet d’associer un <label> à un champ de formulaire ?',
                        'choices' => ['target', 'bind', 'input-id', 'for'],
                        'correct' => 3,
                        'explanation' => 'L’attribut for du <label> doit correspondre à l’id du champ concerné.'
                    ],
                    [
                        'question' => 'Quel attribut permet de rendre un champ obligatoire dans un formulaire HTML ?',
                        'choices' => ['required', 'mandatory', 'validate', 'must-fill'],
                        'correct' => 0,
                        'explanation' => 'L’attribut required indique qu’un champ doit être rempli avant la soumission.'
                    ],
                    [
                        'question' => 'Quel attribut permet de fournir une indication temporaire dans un champ de formulaire ?',
                        'choices' => ['hint', 'placeholder', 'description', 'input-help'],
                        'correct' => 1,
                        'explanation' => 'placeholder affiche une indication lorsque le champ est vide.'
                    ],
                    [
                        'question' => 'Pourquoi l’attribut alt est-il important pour les images ?',
                        'choices' => [
                            'Il augmente automatiquement la résolution',
                            'Il compresse l’image',
                            'Il fournit une alternative textuelle',
                            'Il convertit l’image en SVG'
                        ],
                        'correct' => 2,
                        'explanation' => 'alt fournit une description textuelle utile notamment aux utilisateurs de technologies d’assistance.'
                    ],
                    [
                        'question' => 'Quel attribut peut être utilisé pour indiquer la langue principale du document HTML ?',
                        'choices' => ['language', 'locale', 'document-lang', 'lang'],
                        'correct' => 3,
                        'explanation' => 'L’attribut lang sur l’élément html indique la langue du document.'
                    ],
                    [
                        'question' => 'Quel élément est généralement utilisé pour regrouper un contenu complémentaire au contenu principal ?',
                        'choices' => ['<aside>', '<extra>', '<secondary>', '<complement>'],
                        'correct' => 0,
                        'explanation' => '<aside> représente généralement un contenu indirectement lié au contenu principal.'
                    ],
                    [
                        'question' => 'Quel attribut HTML permet d’améliorer l’autocomplétion des formulaires ?',
                        'choices' => ['suggest', 'autocomplete', 'autofill', 'complete'],
                        'correct' => 1,
                        'explanation' => 'autocomplete indique au navigateur comment gérer les suggestions de remplissage.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — CSS AVANCÉ
            // ============================================================
            [
                'title' => 'CSS avancé et Responsive Design',
                'description' => 'Approfondissez Flexbox, Grid, responsive design et les techniques modernes de CSS.',
                'questions' => [
                    [
                        'question' => 'Quelle propriété Flexbox permet d’aligner les éléments sur l’axe principal ?',
                        'choices' => ['justify-content', 'align-items', 'flex-align', 'main-align'],
                        'correct' => 0,
                        'explanation' => 'justify-content contrôle l’alignement des éléments sur l’axe principal.'
                    ],
                    [
                        'question' => 'Quelle propriété Flexbox contrôle généralement l’alignement sur l’axe transversal ?',
                        'choices' => ['justify-items', 'align-items', 'cross-content', 'flex-position'],
                        'correct' => 1,
                        'explanation' => 'align-items contrôle l’alignement des éléments sur l’axe transversal.'
                    ],
                    [
                        'question' => 'Quelle propriété permet de définir plusieurs colonnes avec CSS Grid ?',
                        'choices' => ['grid-columns', 'columns-grid', 'grid-template-columns', 'template-columns-grid'],
                        'correct' => 2,
                        'explanation' => 'grid-template-columns définit les colonnes d’une grille CSS.'
                    ],
                    [
                        'question' => 'Quelle unité est particulièrement utile pour créer des tailles relatives à la largeur de la fenêtre ?',
                        'choices' => ['px', 'pt', 'cm', 'vw'],
                        'correct' => 3,
                        'explanation' => 'vw représente 1 % de la largeur de la fenêtre.'
                    ],
                    [
                        'question' => 'Quelle règle CSS permet d’appliquer des styles selon certaines caractéristiques de l’écran ?',
                        'choices' => ['@media', '@screen', '@responsive', '@device'],
                        'correct' => 0,
                        'explanation' => '@media permet d’appliquer des règles conditionnelles, notamment selon la taille de l’écran.'
                    ],
                    [
                        'question' => 'Quel pseudo-class est utilisé lorsqu’un utilisateur survole un élément ?',
                        'choices' => [':over', ':hover', ':mouse', ':focus-hover'],
                        'correct' => 1,
                        'explanation' => ':hover s’applique lorsqu’un pointeur survole un élément.'
                    ],
                    [
                        'question' => 'Quelle propriété permet de contrôler l’ordre des éléments Flexbox ?',
                        'choices' => ['position', 'flex-index', 'order', 'sequence'],
                        'correct' => 2,
                        'explanation' => 'La propriété order permet de modifier l’ordre visuel des éléments Flexbox.'
                    ],
                    [
                        'question' => 'Quelle propriété permet de contrôler si le contenu débordant doit être masqué ou affiché ?',
                        'choices' => ['overflow', 'content-flow', 'over-display', 'clip-content'],
                        'correct' => 0,
                        'explanation' => 'overflow contrôle le comportement du contenu qui dépasse les dimensions de son conteneur.'
                    ],
                    [
                        'question' => 'Quelle fonction CSS permet de calculer une valeur à partir de plusieurs unités ou valeurs ?',
                        'choices' => ['compute()', 'calc()', 'calculate-css()', 'value()'],
                        'correct' => 1,
                        'explanation' => 'calc() permet d’effectuer des calculs directement dans les valeurs CSS.'
                    ],
                    [
                        'question' => 'Quel mécanisme CSS permet de définir des variables réutilisables ?',
                        'choices' => ['@variable', '$variable', '--custom-property', '#variable'],
                        'correct' => 2,
                        'explanation' => 'Les custom properties CSS utilisent généralement une syntaxe comme --primary-color.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — JAVASCRIPT AVANCÉ
            // ============================================================
            [
                'title' => 'JavaScript intermédiaire',
                'description' => 'Approfondissez les fonctions, objets, tableaux et concepts modernes de JavaScript.',
                'questions' => [
                    [
                        'question' => 'Quelle méthode permet de transformer chaque élément d’un Array et de retourner un nouvel Array ?',
                        'choices' => ['map()', 'transformArray()', 'changeAll()', 'convertEach()'],
                        'correct' => 0,
                        'explanation' => 'map() crée un nouvel Array contenant les résultats de la fonction appliquée à chaque élément.'
                    ],
                    [
                        'question' => 'Quelle méthode permet de conserver uniquement les éléments respectant une condition ?',
                        'choices' => ['select()', 'filter()', 'where()', 'keep()'],
                        'correct' => 1,
                        'explanation' => 'filter() retourne un nouvel Array contenant les éléments qui satisfont une condition.'
                    ],
                    [
                        'question' => 'Quelle méthode permet de réduire un Array à une seule valeur ?',
                        'choices' => ['combine()', 'merge()', 'reduce()', 'collapse()'],
                        'correct' => 2,
                        'explanation' => 'reduce() permet d’accumuler les éléments d’un Array afin d’obtenir une valeur finale.'
                    ],
                    [
                        'question' => 'Quel opérateur permet de fournir une valeur par défaut lorsqu’une valeur est null ou undefined ?',
                        'choices' => ['|| uniquement', '??', 'default', '?:'],
                        'correct' => 1,
                        'explanation' => 'L’opérateur ??, appelé nullish coalescing operator, utilise la valeur de droite si celle de gauche est null ou undefined.'
                    ],
                    [
                        'question' => 'Que permet principalement la destructuring assignment ?',
                        'choices' => [
                            'Supprimer automatiquement les objets',
                            'Extraire des valeurs depuis des Arrays ou Objects',
                            'Convertir JavaScript en CSS',
                            'Compiler du code'
                        ],
                        'correct' => 1,
                        'explanation' => 'La destructuring assignment permet d’extraire facilement des valeurs depuis des Arrays ou Objects.'
                    ],
                    [
                        'question' => 'Quel mot-clé permet de définir une fonction asynchrone ?',
                        'choices' => ['async', 'await-only', 'promise', 'defer-function'],
                        'correct' => 0,
                        'explanation' => 'Le mot-clé async permet de déclarer une fonction qui retourne une Promise.'
                    ],
                    [
                        'question' => 'Quel mot-clé permet d’attendre le résultat d’une Promise dans une fonction async ?',
                        'choices' => ['wait', 'pause', 'await', 'promise-result'],
                        'correct' => 2,
                        'explanation' => 'await suspend l’exécution de la fonction async jusqu’à la résolution ou le rejet de la Promise.'
                    ],
                    [
                        'question' => 'Quel type de valeur représente le résultat futur d’une opération asynchrone ?',
                        'choices' => ['Callback', 'Promise', 'AsyncValue', 'FutureOnly'],
                        'correct' => 1,
                        'explanation' => 'Une Promise représente une opération asynchrone qui peut être résolue ou rejetée.'
                    ],
                    [
                        'question' => 'Quel opérateur permet de vérifier le type d’une valeur en JavaScript ?',
                        'choices' => ['typeof', 'typeOfValue', 'checkType', 'instance-type'],
                        'correct' => 0,
                        'explanation' => 'typeof retourne une chaîne indiquant le type de la valeur.'
                    ],
                    [
                        'question' => 'Quelle syntaxe permet de copier les propriétés d’un Object dans un autre Object ?',
                        'choices' => ['Object.copy()', '...spread', 'copy-object', 'Object.merge-only'],
                        'correct' => 1,
                        'explanation' => 'Le spread operator ... permet notamment de copier ou fusionner des propriétés d’Objects.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — DOM ET FORMULAIRES
            // ============================================================
            [
                'title' => 'DOM, événements et formulaires',
                'description' => 'Approfondissez la manipulation du DOM et la gestion des formulaires avec JavaScript.',
                'questions' => [
                    [
                        'question' => 'Quelle propriété permet d’accéder à la valeur actuelle d’un champ input ?',
                        'choices' => ['value', 'inputValue', 'current', 'field-content'],
                        'correct' => 0,
                        'explanation' => 'La propriété value permet de lire ou modifier la valeur d’un champ de formulaire.'
                    ],
                    [
                        'question' => 'Quel événement est généralement déclenché lorsqu’un formulaire est soumis ?',
                        'choices' => ['send', 'submit', 'form-send', 'post-form'],
                        'correct' => 1,
                        'explanation' => 'L’événement submit est déclenché lors de la soumission d’un formulaire.'
                    ],
                    [
                        'question' => 'Quelle méthode permet de supprimer un écouteur d’événement ?',
                        'choices' => ['removeEvent()', 'deleteListener()', 'removeEventListener()', 'detachEventOnly()'],
                        'correct' => 2,
                        'explanation' => 'removeEventListener() permet de supprimer un gestionnaire d’événement précédemment ajouté.'
                    ],
                    [
                        'question' => 'Quel objet représente généralement l’événement déclenché par l’utilisateur ?',
                        'choices' => ['action', 'eventData', 'userEvent', 'event'],
                        'correct' => 3,
                        'explanation' => 'L’objet event contient notamment des informations sur l’événement qui vient de se produire.'
                    ],
                    [
                        'question' => 'Quelle propriété permet de connaître l’élément sur lequel l’événement a été déclenché ?',
                        'choices' => ['target', 'sourceElement', 'origin', 'clickedElement'],
                        'correct' => 0,
                        'explanation' => 'event.target représente l’élément sur lequel l’événement a été déclenché.'
                    ],
                    [
                        'question' => 'Qu’est-ce que l’event bubbling ?',
                        'choices' => [
                            'La suppression automatique des événements',
                            'La propagation d’un événement des éléments enfants vers leurs ancêtres',
                            'La création d’un nouvel événement',
                            'Le blocage du DOM'
                        ],
                        'correct' => 1,
                        'explanation' => 'Lors du bubbling, un événement remonte de l’élément cible vers ses éléments parents.'
                    ],
                    [
                        'question' => 'Quelle méthode permet de sélectionner plusieurs éléments correspondant à un sélecteur CSS ?',
                        'choices' => ['querySelector()', 'selectAll()', 'querySelectorAll()', 'findAllCSS()'],
                        'correct' => 2,
                        'explanation' => 'querySelectorAll() retourne une collection des éléments correspondant au sélecteur.'
                    ],
                    [
                        'question' => 'Quel objet permet d’accéder au document HTML courant ?',
                        'choices' => ['page', 'htmlDocument', 'browserDocument', 'document'],
                        'correct' => 3,
                        'explanation' => 'L’objet document représente le document HTML chargé dans le navigateur.'
                    ],
                    [
                        'question' => 'Pourquoi utiliser event.preventDefault() lors de la validation personnalisée d’un formulaire ?',
                        'choices' => [
                            'Pour empêcher la soumission automatique',
                            'Pour supprimer le formulaire',
                            'Pour désactiver JavaScript',
                            'Pour modifier le CSS'
                        ],
                        'correct' => 0,
                        'explanation' => 'preventDefault() empêche le comportement par défaut, ce qui permet notamment de gérer la validation avec JavaScript.'
                    ],
                    [
                        'question' => 'Quelle technique permet de gérer des événements provenant d’éléments ajoutés dynamiquement ?',
                        'choices' => ['Event freezing', 'Event delegation', 'Dynamic event blocking', 'DOM locking'],
                        'correct' => 1,
                        'explanation' => 'Event delegation consiste à écouter l’événement sur un élément parent et à identifier sa cible.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — HTTP / REST / API
            // ============================================================
            [
                'title' => 'HTTP, REST et API',
                'description' => 'Approfondissez les méthodes HTTP, les API REST et les codes de réponse.',
                'questions' => [
                    [
                        'question' => 'Quelle méthode HTTP est généralement utilisée pour remplacer complètement une ressource ?',
                        'choices' => ['PUT', 'PATCH', 'REPLACE', 'UPDATE'],
                        'correct' => 0,
                        'explanation' => 'PUT est généralement utilisé pour remplacer complètement une ressource.'
                    ],
                    [
                        'question' => 'Quelle méthode HTTP est généralement utilisée pour modifier partiellement une ressource ?',
                        'choices' => ['PUT', 'PATCH', 'MODIFY', 'CHANGE'],
                        'correct' => 1,
                        'explanation' => 'PATCH est destinée aux modifications partielles d’une ressource.'
                    ],
                    [
                        'question' => 'Quel code HTTP indique généralement qu’un utilisateur est authentifié mais n’a pas les permissions nécessaires ?',
                        'choices' => ['401', '404', '403', '500'],
                        'correct' => 2,
                        'explanation' => '403 Forbidden indique que le serveur comprend la requête mais refuse l’accès.'
                    ],
                    [
                        'question' => 'Quel code HTTP correspond généralement à une redirection permanente ?',
                        'choices' => ['302', '307', '301', '3080'],
                        'correct' => 2,
                        'explanation' => '301 Moved Permanently indique généralement une redirection permanente.'
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un endpoint API ?',
                        'choices' => [
                            'Un point d’accès à une ressource ou opération',
                            'Un serveur physique uniquement',
                            'Un fichier CSS',
                            'Une base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un endpoint représente généralement une URL permettant d’accéder à une ressource ou opération.'
                    ],
                    [
                        'question' => 'Quel format permet généralement de représenter des données sous forme clé-valeur ?',
                        'choices' => ['XML-only', 'JSON', 'HTML', 'CSS'],
                        'correct' => 1,
                        'explanation' => 'JSON représente des données structurées sous forme notamment d’objets clé-valeur.'
                    ],
                    [
                        'question' => 'Que signifie CORS ?',
                        'choices' => [
                            'Client Object Request Security',
                            'Cross-Origin Resource Sharing',
                            'Cross-Origin Request System',
                            'Client Origin Response Service'
                        ],
                        'correct' => 1,
                        'explanation' => 'CORS signifie Cross-Origin Resource Sharing et contrôle notamment les requêtes entre différentes origins.'
                    ],
                    [
                        'question' => 'Pourquoi utiliser un token dans une API ?',
                        'choices' => [
                            'Pour styliser les réponses',
                            'Pour remplacer JSON',
                            'Pour identifier ou authentifier une requête',
                            'Pour accélérer CSS'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un token peut permettre au serveur d’identifier ou d’authentifier le client qui effectue la requête.'
                    ],
                    [
                        'question' => 'Une API REST est généralement dite stateless lorsque :',
                        'choices' => [
                            'Le serveur ne conserve pas l’état de session du client entre les requêtes',
                            'Elle ne possède aucune base de données',
                            'Elle n’utilise jamais JSON',
                            'Elle ne possède aucun endpoint'
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans une architecture stateless, chaque requête contient les informations nécessaires à son traitement.'
                    ],
                    [
                        'question' => 'Quel header indique généralement le format des données envoyées dans le body ?',
                        'choices' => ['Accept', 'Content-Type', 'Data-Type', 'Request-Format'],
                        'correct' => 1,
                        'explanation' => 'Content-Type indique le type de contenu envoyé, par exemple application/json.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — ASYNCHRONOUS JAVASCRIPT
            // ============================================================
            [
                'title' => 'Asynchronous JavaScript et Fetch',
                'description' => 'Travaillez avec Fetch API, Promises et les opérations asynchrones.',
                'questions' => [
                    [
                        'question' => 'Que retourne généralement fetch() ?',
                        'choices' => ['Une Promise', 'Un Array', 'Un Object DOM', 'Une String'],
                        'correct' => 0,
                        'explanation' => 'fetch() retourne une Promise qui sera résolue avec une Response.'
                    ],
                    [
                        'question' => 'Quelle méthode permet généralement de récupérer une réponse JSON depuis une Response ?',
                        'choices' => ['response.parse()', 'response.json()', 'response.toJSON()', 'JSON.response()'],
                        'correct' => 1,
                        'explanation' => 'response.json() lit le body et le transforme en valeur JavaScript.'
                    ],
                    [
                        'question' => 'Quelle méthode d’une Promise est appelée lorsque l’opération réussit ?',
                        'choices' => ['success()', 'resolve()', 'then()', 'complete()'],
                        'correct' => 2,
                        'explanation' => 'then() permet de traiter la valeur produite lorsque la Promise est résolue.'
                    ],
                    [
                        'question' => 'Quelle méthode permet généralement de gérer une erreur dans une chaîne de Promises ?',
                        'choices' => ['error()', 'catch()', 'fail()', 'exception()'],
                        'correct' => 1,
                        'explanation' => 'catch() permet de gérer le rejet d’une Promise.'
                    ],
                    [
                        'question' => 'Quel état indique qu’une Promise a réussi ?',
                        'choices' => ['resolved', 'pending', 'waiting', 'created'],
                        'correct' => 0,
                        'explanation' => 'Une Promise résolue est généralement considérée comme fulfilled.'
                    ],
                    [
                        'question' => 'Quel état indique qu’une Promise n’a pas encore terminé son opération ?',
                        'choices' => ['fulfilled', 'pending', 'rejected', 'finished'],
                        'correct' => 1,
                        'explanation' => 'pending indique que la Promise est encore en attente.'
                    ],
                    [
                        'question' => 'Que permet Promise.all() ?',
                        'choices' => [
                            'Annuler toutes les Promises',
                            'Créer une seule Promise vide',
                            'Attendre plusieurs Promises et obtenir leurs résultats',
                            'Transformer les Promises en callbacks'
                        ],
                        'correct' => 2,
                        'explanation' => 'Promise.all() attend la résolution de toutes les Promises fournies.'
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement si une Promise de Promise.all() est rejetée ?',
                        'choices' => [
                            'Toutes les Promises sont automatiquement résolues',
                            'Le résultat est toujours retourné',
                            'Le navigateur redémarre',
                            'Promise.all() est rejetée'
                        ],
                        'correct' => 3,
                        'explanation' => 'Promise.all() est rejetée dès qu’une des Promises fournies est rejetée.'
                    ],
                    [
                        'question' => 'Quel avantage principal offre async/await ?',
                        'choices' => [
                            'Rendre le code asynchrone plus lisible',
                            'Supprimer les Promises',
                            'Bloquer le navigateur',
                            'Remplacer HTTP'
                        ],
                        'correct' => 0,
                        'explanation' => 'async/await permet d’écrire du code asynchrone avec une syntaxe plus proche du code synchrone.'
                    ],
                    [
                        'question' => 'Dans une fonction async, que fait await lorsqu’il attend une Promise ?',
                        'choices' => [
                            'Il bloque tout le navigateur',
                            'Il suspend l’exécution de cette fonction jusqu’au résultat de la Promise',
                            'Il supprime la Promise',
                            'Il transforme la Promise en String'
                        ],
                        'correct' => 1,
                        'explanation' => 'await suspend l’exécution de la fonction async sans bloquer globalement le thread JavaScript.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — FRONTEND ET ARCHITECTURE
            // ============================================================
            [
                'title' => 'Frontend et architecture',
                'description' => 'Concepts intermédiaires liés aux applications Frontend modernes et à leur organisation.',
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt principal des composants dans une application Frontend moderne ?',
                        'choices' => [
                            'Réutiliser et organiser l’interface',
                            'Remplacer HTTP',
                            'Supprimer JavaScript',
                            'Créer uniquement des tables SQL'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les composants permettent de structurer l’interface en unités réutilisables et maintenables.'
                    ],
                    [
                        'question' => 'Que signifie SPA ?',
                        'choices' => [
                            'Server Page Application',
                            'Single Page Application',
                            'Simple Programming Architecture',
                            'Static Page API'
                        ],
                        'correct' => 1,
                        'explanation' => 'SPA signifie Single Page Application.'
                    ],
                    [
                        'question' => 'Dans une SPA, quel mécanisme permet généralement de changer de vue sans recharger toute la page ?',
                        'choices' => ['SQL', 'HTTP uniquement', 'Client-side routing', 'DNS'],
                        'correct' => 2,
                        'explanation' => 'Le client-side routing permet de changer de vue côté navigateur sans rechargement complet.'
                    ],
                    [
                        'question' => 'Pourquoi séparer les composants en petites unités ?',
                        'choices' => [
                            'Pour augmenter la complexité',
                            'Pour empêcher la réutilisation',
                            'Pour supprimer les tests',
                            'Pour améliorer organisation, réutilisation et maintenance'
                        ],
                        'correct' => 3,
                        'explanation' => 'Des composants bien séparés facilitent la maintenance, les tests et la réutilisation.'
                    ],
                    [
                        'question' => 'Quel est le rôle d’un state management dans une application complexe ?',
                        'choices' => [
                            'Gérer et partager l’état de l’application',
                            'Créer des images',
                            'Remplacer HTML',
                            'Modifier DNS'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le state management aide à gérer les données et états partagés entre différentes parties de l’application.'
                    ],
                    [
                        'question' => 'Pourquoi utiliser un service pour accéder à une API plutôt que de répéter le code dans chaque composant ?',
                        'choices' => [
                            'Pour supprimer les requêtes',
                            'Pour centraliser la logique et favoriser la réutilisation',
                            'Pour empêcher les tests',
                            'Pour rendre l’API publique'
                        ],
                        'correct' => 1,
                        'explanation' => 'Centraliser les appels API réduit la duplication et facilite la maintenance.'
                    ],
                    [
                        'question' => 'Quel principe consiste à éviter de répéter inutilement le même code ?',
                        'choices' => ['KISS', 'SOLID', 'DRY', 'REST'],
                        'correct' => 2,
                        'explanation' => 'DRY signifie Don’t Repeat Yourself.'
                    ],
                    [
                        'question' => 'Quel outil est généralement utilisé pour installer et gérer les packages JavaScript ?',
                        'choices' => ['Git', 'Nginx', 'npm', 'Apache'],
                        'correct' => 2,
                        'explanation' => 'npm est un gestionnaire de packages largement utilisé dans l’écosystème JavaScript.'
                    ],
                    [
                        'question' => 'Quel fichier décrit généralement les dépendances d’un projet npm ?',
                        'choices' => ['package.json', 'dependencies.js', 'npm.config', 'packages.lock'],
                        'correct' => 0,
                        'explanation' => 'package.json contient notamment les métadonnées et dépendances du projet.'
                    ],
                    [
                        'question' => 'Pourquoi utiliser des environment variables dans une application Web ?',
                        'choices' => [
                            'Pour stocker tous les secrets dans le frontend',
                            'Pour séparer certaines configurations du code source',
                            'Pour remplacer HTML',
                            'Pour supprimer les API'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les environment variables permettent notamment de séparer la configuration du code, tout en évitant de placer certaines valeurs directement dans le code.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — SÉCURITÉ WEB
            // ============================================================
            [
                'title' => 'Sécurité et bonnes pratiques Web',
                'description' => 'Découvrez les principales vulnérabilités Web et les bonnes pratiques de sécurité.',
                'questions' => [
                    [
                        'question' => 'Que signifie XSS ?',
                        'choices' => [
                            'Cross-Site Scripting',
                            'Cross Server Security',
                            'External Script System',
                            'Web Script Service'
                        ],
                        'correct' => 0,
                        'explanation' => 'XSS signifie Cross-Site Scripting et concerne l’injection de contenu scripté dans une application Web.'
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une protection CSRF ?',
                        'choices' => [
                            'Empêcher la compression',
                            'Empêcher certaines requêtes forgées effectuées au nom d’un utilisateur',
                            'Accélérer JavaScript',
                            'Protéger uniquement les images'
                        ],
                        'correct' => 1,
                        'explanation' => 'La protection CSRF vise à empêcher qu’un site malveillant provoque certaines actions non désirées sur un autre site où l’utilisateur est authentifié.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il valider les données reçues du client côté serveur ?',
                        'choices' => [
                            'Parce que le client est toujours fiable',
                            'Pour modifier CSS',
                            'Parce que les données du client peuvent être manipulées',
                            'Pour éviter HTTP'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les données provenant du client doivent être considérées comme non fiables et validées côté serveur.'
                    ],
                    [
                        'question' => 'Quelle pratique est recommandée pour stocker les mots de passe ?',
                        'choices' => [
                            'Les stocker en texte clair',
                            'Les encoder en Base64 uniquement',
                            'Les stocker dans JavaScript',
                            'Utiliser un algorithme de hashing adapté aux mots de passe'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les mots de passe doivent être stockés avec un hashing adapté, comme Argon2 ou bcrypt, et jamais en texte clair.'
                    ],
                    [
                        'question' => 'Pourquoi HTTPS est-il important pour la sécurité ?',
                        'choices' => [
                            'Il protège les communications grâce à TLS',
                            'Il empêche tous les bugs',
                            'Il remplace les permissions',
                            'Il supprime les utilisateurs inconnus'
                        ],
                        'correct' => 0,
                        'explanation' => 'HTTPS utilise TLS pour protéger les communications entre client et serveur.'
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’une application construit directement du HTML à partir de données utilisateur non contrôlées ?',
                        'choices' => [
                            'SQL uniquement',
                            'XSS',
                            'DNS',
                            'RAM overflow automatiquement'
                        ],
                        'correct' => 1,
                        'explanation' => 'Insérer des données non contrôlées dans du HTML peut permettre une attaque XSS.'
                    ],
                    [
                        'question' => 'Pourquoi les secrets API ne doivent-ils généralement pas être placés directement dans le code Frontend ?',
                        'choices' => [
                            'Parce que le Frontend est visible par le client',
                            'Parce que JavaScript ne supporte pas les secrets',
                            'Parce que HTTP les supprime',
                            'Parce que CSS les bloque'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le code Frontend livré au navigateur peut être inspecté par l’utilisateur. Un secret placé dans ce code ne doit donc pas être considéré comme secret.'
                    ],
                    [
                        'question' => 'Quel principe de sécurité consiste à donner uniquement les permissions nécessaires ?',
                        'choices' => [
                            'Maximum Access',
                            'Open Access',
                            'Least Privilege',
                            'Full Permission'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le principe du Least Privilege consiste à limiter les permissions au strict nécessaire.'
                    ],
                    [
                        'question' => 'Pourquoi limiter les tentatives de connexion peut-il améliorer la sécurité ?',
                        'choices' => [
                            'Pour empêcher HTML',
                            'Pour réduire les attaques automatisées comme le brute force',
                            'Pour supprimer les sessions',
                            'Pour accélérer CSS'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le rate limiting permet notamment de ralentir les tentatives automatisées et les attaques par brute force.'
                    ],
                    [
                        'question' => 'Quelle pratique est recommandée pour les données sensibles ?',
                        'choices' => [
                            'Les afficher dans les logs publics',
                            'Les envoyer dans l’URL sans protection',
                            'Les protéger et limiter leur exposition',
                            'Les stocker dans le HTML'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les données sensibles doivent être protégées, minimisées et ne pas être exposées inutilement.'
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
                    'difficulty' => 'Intermediate',
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