<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebDevelopmentAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'web-development')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Analyser l’exécution JavaScript dans le navigateur',
                'description' => 'Raisonner sur les fermetures, l’ordonnancement, les références et le coût des traitements.',
                'difficulty' => 'Advanced',
                'duration' => 26,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Le script exécute console.log("A"); setTimeout(() => console.log("B"), 0); Promise.resolve().then(() => console.log("C")); console.log("D");. Sans autre code, l’ordre affiché est :',
                        'marks' => 2,
                        'explanation' => 'Les instructions synchrones passent d’abord. La réaction de Promise est exécutée comme microtâche avant la tâche du minuteur.',
                        'choices' => [
                            ['text' => 'A, D, C, B', 'is_correct' => true],
                            ['text' => 'A, B, C, D', 'is_correct' => false],
                            ['text' => 'A, C, D, B', 'is_correct' => false],
                            ['text' => 'A, D, B, C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'function compteur() { let n = 0; return () => ++n; } const a = compteur(); const b = compteur();. Après a(); a();, b() renvoie :',
                        'marks' => 1,
                        'explanation' => 'Chaque appel à compteur crée un environnement lexical distinct. b conserve son propre n, indépendant de celui de a.',
                        'choices' => [
                            ['text' => '1', 'is_correct' => true],
                            ['text' => '2', 'is_correct' => false],
                            ['text' => '3', 'is_correct' => false],
                            ['text' => 'undefined', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un même bloc, console.log(prix) précède let prix = 10;. L’exécution de cet accès produit :',
                        'marks' => 1,
                        'explanation' => 'La liaison let existe dans le bloc mais n’est pas accessible avant son initialisation. La remontée des déclarations ne permet pas cet accès.',
                        'choices' => [
                            ['text' => 'Une ReferenceError avant l’initialisation', 'is_correct' => true],
                            ['text' => 'undefined comme avec une déclaration var', 'is_correct' => false],
                            ['text' => '10 grâce à la remontée de sa valeur', 'is_correct' => false],
                            ['text' => 'null après conversion implicite de la liaison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un module JavaScript, const obj = { n: 4, lire() { return this.n; } }; const lire = obj.lire; lire(); est exécuté. Le problème est que :',
                        'marks' => 1,
                        'explanation' => 'Un appel détaché d’une fonction ordinaire ne conserve pas son récepteur. Dans ce contexte strict, this vaut undefined et l’accès à this.n échoue.',
                        'choices' => [
                            ['text' => 'L’appel détaché perd le récepteur obj', 'is_correct' => true],
                            ['text' => 'this reste obj même après extraction de la méthode', 'is_correct' => false],
                            ['text' => 'Une méthode d’objet est automatiquement liée à sa création', 'is_correct' => false],
                            ['text' => 'Le module remplace toujours this par globalThis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une méthode crée un rappel avec une fonction fléchée pour réutiliser son this. Ce choix permet de :',
                        'marks' => 1,
                        'explanation' => 'Une fonction fléchée n’a pas son propre this. Elle réutilise celui de son environnement de création.',
                        'choices' => [
                            ['text' => 'Conserver dans le rappel le this lexical de la méthode qui le crée', 'is_correct' => true],
                            ['text' => 'Choisir this dynamiquement selon chaque appelant', 'is_correct' => false],
                            ['text' => 'Lier this au nœud DOM même sans lien avec la méthode', 'is_correct' => false],
                            ['text' => 'Copier toutes les propriétés de l’objet dans le rappel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'const config = Object.freeze({ api: { timeout: 1000 } }); est exécuté. L’instruction config.api.timeout = 2000 peut encore réussir car :',
                        'marks' => 1,
                        'explanation' => 'Object.freeze agit sur les propriétés directes de l’objet fourni. L’objet api reste modifiable tant qu’il n’est pas lui-même gelé.',
                        'choices' => [
                            ['text' => 'Le gel est superficiel', 'is_correct' => true],
                            ['text' => 'Le gel se propage seulement aux propriétés numériques', 'is_correct' => false],
                            ['text' => 'Le gel disparaît dès que l’objet possède un objet imbriqué', 'is_correct' => false],
                            ['text' => 'Le gel ne commence qu’après la première tentative de modification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction de recherche attend 300 ms sans nouvelle frappe avant d’appeler l’API. Le mécanisme décrit est :',
                        'marks' => 1,
                        'explanation' => 'Un debounce reporte le traitement jusqu’à une période de calme. Un throttle limite plutôt la fréquence pendant une activité continue.',
                        'choices' => [
                            ['text' => 'Un debounce déclenché après une période sans nouvelle saisie', 'is_correct' => true],
                            ['text' => 'Un throttle exécutant systématiquement la première frappe seule', 'is_correct' => false],
                            ['text' => 'Une mémorisation des réponses précédentes sans temporisation', 'is_correct' => false],
                            ['text' => 'Une boucle de requêtes périodiques indépendantes de la saisie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un défilement continu doit mettre à jour une mesure au plus une fois toutes les 100 ms, sans attendre l’arrêt du défilement. Le mécanisme visé est :',
                        'marks' => 1,
                        'explanation' => 'Le throttle limite la cadence tout en autorisant des exécutions pendant l’activité. Une temporisation après inactivité répondrait à une autre exigence.',
                        'choices' => [
                            ['text' => 'Une limitation de cadence par throttle pendant le défilement', 'is_correct' => true],
                            ['text' => 'Un debounce uniquement après la dernière interaction', 'is_correct' => false],
                            ['text' => 'Une exécution pour chaque événement sans limitation', 'is_correct' => false],
                            ['text' => 'Une mémorisation du résultat sans contrôle de cadence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un calcul lourd doit quitter le fil principal et n’a pas besoin de modifier directement le DOM. Une option adaptée est :',
                        'marks' => 1,
                        'explanation' => 'Un Worker exécute du JavaScript dans un contexte distinct et communique par messages. Il n’a pas d’accès direct au DOM du document.',
                        'choices' => [
                            ['text' => 'Un Web Worker', 'is_correct' => true],
                            ['text' => 'Une Promise exécutant le calcul sur le même fil', 'is_correct' => false],
                            ['text' => 'Un setTimeout qui déplace le même calcul sur un autre fil', 'is_correct' => false],
                            ['text' => 'Une fonction async sans suspension pendant le calcul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cache associe des métadonnées à des objets et ne doit pas, à lui seul, empêcher leur collecte mémoire. La structure adaptée est :',
                        'marks' => 1,
                        'explanation' => 'WeakMap ne maintient pas ses clés objets en vie uniquement par leur présence dans la collection. Ses entrées ne sont pas énumérables comme celles de Map.',
                        'choices' => [
                            ['text' => 'WeakMap', 'is_correct' => true],
                            ['text' => 'Map conservée sans suppression d’entrée', 'is_correct' => false],
                            ['text' => 'Array global contenant tous les objets clés', 'is_correct' => false],
                            ['text' => 'Set global contenant tous les objets rencontrés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service traite 10 000 éléments avec await traiter(element) dans une boucle. Chaque appel dépend du résultat précédent. Pour conserver cette dépendance, il faut :',
                        'marks' => 1,
                        'explanation' => 'La concurrence n’est sûre que si les dépendances et les limites de ressources le permettent. Une dépendance réelle impose ici l’ordre des traitements.',
                        'choices' => [
                            ['text' => 'Préserver l’ordre requis en gardant les appels séquentiels', 'is_correct' => true],
                            ['text' => 'Utiliser Promise.all en supposant les dépendances préservées', 'is_correct' => false],
                            ['text' => 'Retirer await sans changer le reste de la logique', 'is_correct' => false],
                            ['text' => 'Lancer toutes les opérations avec le même instant de départ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une interface conserve un gros tableau dans un écouteur ajouté à window à chaque ouverture d’un panneau. Après fermeture, les écouteurs restent attachés. La cause probable de rétention mémoire est :',
                        'marks' => 1,
                        'explanation' => 'Les écouteurs vivants peuvent retenir leur environnement lexical, dont le tableau. Il faut supprimer les écouteurs devenus inutiles ou gérer leur cycle de vie.',
                        'choices' => [
                            ['text' => 'Les écouteurs de window retiennent les fermetures et leur tableau', 'is_correct' => true],
                            ['text' => 'const qui interdit automatiquement toute collecte du tableau', 'is_correct' => false],
                            ['text' => 'Le ramasse-miettes qui libère toujours les écouteurs de window', 'is_correct' => false],
                            ['text' => 'Le DOM qui détruit automatiquement tous les rappels à la fermeture', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Maîtriser les caches et la concurrence HTTP',
                'description' => 'Appliquer les validateurs et les directives de cache sans exposer de données personnalisées.',
                'difficulty' => 'Advanced',
                'duration' => 24,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une réponse porte Cache-Control: no-cache. Un cache conforme peut :',
                        'marks' => 1,
                        'explanation' => 'no-cache impose une validation avant réutilisation ; il n’interdit pas le stockage. no-store exprime cette interdiction.',
                        'choices' => [
                            ['text' => 'Stocker puis revalider avant réutilisation', 'is_correct' => true],
                            ['text' => 'Stocker puis réutiliser librement tant que le fichier existe', 'is_correct' => false],
                            ['text' => 'Ne jamais stocker la réponse même dans un cache privé', 'is_correct' => false],
                            ['text' => 'Remplacer automatiquement tout corps par une réponse vide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réponse sensible doit explicitement ne pas être stockée par les caches HTTP conformes. La directive est :',
                        'marks' => 1,
                        'explanation' => 'no-store interdit le stockage de cette réponse par les caches concernés. Il ne garantit pas l’effacement d’exemplaires déjà conservés ailleurs.',
                        'choices' => [
                            ['text' => 'Cache-Control: no-store', 'is_correct' => true],
                            ['text' => 'Cache-Control: public', 'is_correct' => false],
                            ['text' => 'Cache-Control: max-age=3600', 'is_correct' => false],
                            ['text' => 'Cache-Control: immutable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réponse personnalisée peut être conservée dans le cache privé du navigateur mais pas dans un cache partagé. Utilisez :',
                        'marks' => 1,
                        'explanation' => 'private interdit le stockage par un cache partagé, tout en permettant un cache privé sous réserve des autres directives.',
                        'choices' => [
                            ['text' => 'Cache-Control: private', 'is_correct' => true],
                            ['text' => 'Cache-Control: public', 'is_correct' => false],
                            ['text' => 'Vary: User-Agent uniquement', 'is_correct' => false],
                            ['text' => 'Cache-Control: s-maxage=3600', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le client possède une représentation avec ETag: "v3" et veut vérifier si elle est toujours actuelle. L’en-tête de requête adapté est :',
                        'marks' => 1,
                        'explanation' => 'If-None-Match permet une requête conditionnelle fondée sur un validateur. Pour une lecture inchangée, le serveur peut répondre 304.',
                        'choices' => [
                            ['text' => 'If-None-Match: "v3"', 'is_correct' => true],
                            ['text' => 'If-Match: *', 'is_correct' => false],
                            ['text' => 'Accept: "v3"', 'is_correct' => false],
                            ['text' => 'Content-Encoding: "v3"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un GET conditionnel reçoit 304 Not Modified. Le client doit normalement :',
                        'marks' => 1,
                        'explanation' => '304 ne transporte pas le corps de la représentation. Les métadonnées de la réponse servent notamment à actualiser l’entrée en cache.',
                        'choices' => [
                            ['text' => 'Réutiliser le corps conservé et actualiser ses métadonnées de cache', 'is_correct' => true],
                            ['text' => 'Analyser un nouveau corps JSON obligatoirement présent', 'is_correct' => false],
                            ['text' => 'Traiter 304 comme une redirection vers une autre URL', 'is_correct' => false],
                            ['text' => 'Effacer l’entrée en cache sans examiner les métadonnées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une URL renvoie des contenus différents selon Accept-Language et reste cacheable. L’en-tête de variation approprié est :',
                        'marks' => 1,
                        'explanation' => 'Vary indique quels champs de requête influencent le choix de la représentation, afin qu’un cache ne confonde pas les variantes.',
                        'choices' => [
                            ['text' => 'Vary: Accept-Language', 'is_correct' => true],
                            ['text' => 'Content-Language: Vary', 'is_correct' => false],
                            ['text' => 'Cache-Control: Accept-Language', 'is_correct' => false],
                            ['text' => 'Accept: Vary', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fichier app.a81f.js change de nom à chaque changement de contenu. Il peut recevoir une longue durée de cache car :',
                        'marks' => 1,
                        'explanation' => 'Des URL liées au contenu permettent de conserver longtemps une ancienne ressource sans la confondre avec la nouvelle. Le document HTML doit pointer vers la bonne version.',
                        'choices' => [
                            ['text' => 'Le contenu modifié change aussi d’URL', 'is_correct' => true],
                            ['text' => 'Les navigateurs remplacent tous les fichiers après chaque minute', 'is_correct' => false],
                            ['text' => 'Le hachage du nom interdit au navigateur de conserver le fichier', 'is_correct' => false],
                            ['text' => 'L’extension .js empêche tout intermédiaire de stocker la réponse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux éditeurs ont chargé la version "v7" d’un article. Pour refuser l’écriture du second si le premier a déjà modifié l’article, la requête peut utiliser :',
                        'marks' => 1,
                        'explanation' => 'If-Match conditionne l’écriture à la correspondance du validateur courant. Le serveur doit vérifier et modifier de façon cohérente ; un échec de précondition peut produire 412.',
                        'choices' => [
                            ['text' => 'If-Match: "v7" avec vérification atomique', 'is_correct' => true],
                            ['text' => 'If-None-Match: * sans vérifier la version de l’article', 'is_correct' => false],
                            ['text' => 'Cache-Control: no-cache sans condition sur l’écriture', 'is_correct' => false],
                            ['text' => 'Accept: "v7" avec lecture puis écriture non protégée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cache reçoit une réponse avec max-age=120 et Age: 90. Sans autre délai ni directive, sa fraîcheur restante est environ :',
                        'marks' => 2,
                        'explanation' => 'Age indique ici un âge déjà accumulé de 90 secondes. La durée de fraîcheur de 120 secondes laisse environ 30 secondes.',
                        'choices' => [
                            ['text' => '30 secondes', 'is_correct' => true],
                            ['text' => '90 secondes', 'is_correct' => false],
                            ['text' => '120 secondes supplémentaires', 'is_correct' => false],
                            ['text' => '210 secondes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un CDN sert par erreur le profil d’Amina à Youssef parce qu’une réponse personnalisée a été mise en cache sous une clé commune. La correction doit porter sur :',
                        'marks' => 1,
                        'explanation' => 'Une clé partagée inadaptée ou une politique de cache permissive peut exposer les données. Il faut empêcher ce partage et vérifier aussi les entrées déjà stockées.',
                        'choices' => [
                            ['text' => 'Le stockage et l’isolation des réponses', 'is_correct' => true],
                            ['text' => 'Seulement le délai réseau entre le CDN et l’origine', 'is_correct' => false],
                            ['text' => 'Seulement la minification des données JSON', 'is_correct' => false],
                            ['text' => 'Seulement le tri des utilisateurs dans l’administration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique stale-while-revalidate autorise un cache à répondre avec une version périmée pendant une fenêtre définie. Le compromis est :',
                        'marks' => 1,
                        'explanation' => 'Cette directive autorise une réutilisation temporaire pendant la revalidation. Elle convient uniquement aux données dont cette ancienneté est acceptable.',
                        'choices' => [
                            ['text' => 'Accepter brièvement une version ancienne', 'is_correct' => true],
                            ['text' => 'Garantir une version toujours à jour sans attente', 'is_correct' => false],
                            ['text' => 'Interdire toute revalidation de la ressource', 'is_correct' => false],
                            ['text' => 'Supprimer tous les besoins de contrôle d’expiration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Défendre les frontières de confiance du Web',
                'description' => 'Choisir des protections adaptées aux contextes d’injection, aux cookies et aux requêtes entre origines.',
                'difficulty' => 'Advanced',
                'duration' => 27,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un commentaire utilisateur doit être affiché comme texte dans une page HTML. La protection pertinente est :',
                        'marks' => 1,
                        'explanation' => 'L’encodage de sortie empêche les caractères de contrôle d’être interprétés comme du balisage dans ce contexte. Un autre contexte, comme JavaScript ou une URL, demande ses propres règles.',
                        'choices' => [
                            ['text' => 'Encoder la sortie pour son contexte HTML', 'is_correct' => true],
                            ['text' => 'Retirer seulement les balises script avec une expression régulière', 'is_correct' => false],
                            ['text' => 'Valider uniquement que le texte est encodé en UTF-8', 'is_correct' => false],
                            ['text' => 'Faire confiance à tout texte ayant déjà été enregistré en base', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un éditeur autorise volontairement un sous-ensemble de HTML riche. Avant l’affichage de ce contenu non fiable, il faut :',
                        'marks' => 1,
                        'explanation' => 'Le contenu stocké reste non fiable. Un assainisseur adapté retire les éléments et attributs dangereux tout en conservant le sous-ensemble autorisé.',
                        'choices' => [
                            ['text' => 'Assainir selon une politique HTML adaptée', 'is_correct' => true],
                            ['text' => 'Encoder puis décoder tout le contenu juste avant innerHTML', 'is_correct' => false],
                            ['text' => 'Retirer seulement le mot script sans analyser les attributs', 'is_correct' => false],
                            ['text' => 'Autoriser tous les attributs dès que les balises sont connues', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une CSP utilise un nonce pour autoriser certains scripts intégrés. Le nonce doit être :',
                        'marks' => 1,
                        'explanation' => 'Un nonce réutilisé ou prévisible peut compromettre cette protection. Les scripts autorisés portent la valeur de la réponse ; la CSP complète les autres défenses XSS.',
                        'choices' => [
                            ['text' => 'Imprévisible et renouvelé pour chaque réponse qui autorise les scripts concernés', 'is_correct' => true],
                            ['text' => 'Identique sur toutes les pages pour faciliter le cache', 'is_correct' => false],
                            ['text' => 'Calculé uniquement à partir de l’URL publique', 'is_correct' => false],
                            ['text' => 'Choisi directement par une valeur reçue dans le formulaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le serveur active Content-Security-Policy-Report-Only. La conséquence attendue est :',
                        'marks' => 1,
                        'explanation' => 'Le mode Report-Only permet d’évaluer une politique et de collecter des rapports. Il faut une politique appliquée pour obtenir son effet de blocage.',
                        'choices' => [
                            ['text' => 'Signaler sans appliquer ce blocage', 'is_correct' => true],
                            ['text' => 'Appliquer exactement le même blocage qu’une CSP active', 'is_correct' => false],
                            ['text' => 'Corriger automatiquement les scripts qui violent la politique', 'is_correct' => false],
                            ['text' => 'Bloquer seulement les violations dont le rapport a été reçu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le cookie de session est HttpOnly. En cas de XSS exécuté dans la page, il faut encore considérer que le script pourrait :',
                        'marks' => 1,
                        'explanation' => 'HttpOnly limite la lecture du cookie par JavaScript. Il ne neutralise pas un script qui agit depuis la page avec les privilèges du visiteur.',
                        'choices' => [
                            ['text' => 'Envoyer des actions authentifiées depuis la page sans lire directement le cookie', 'is_correct' => true],
                            ['text' => 'Lire le cookie HttpOnly directement avec document.cookie', 'is_correct' => false],
                            ['text' => 'Être incapable d’envoyer une requête authentifiée', 'is_correct' => false],
                            ['text' => 'Perdre automatiquement tout accès au DOM de la page', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application authentifiée par cookie accepte une modification de compte. Pour limiter le CSRF, une mesure adaptée est :',
                        'marks' => 1,
                        'explanation' => 'Le navigateur peut envoyer les cookies lors de requêtes forgées. Un mécanisme anti-CSRF approprié et des contrôles d’origine peuvent compléter SameSite.',
                        'choices' => [
                            ['text' => 'Valider un jeton anti-CSRF approprié', 'is_correct' => true],
                            ['text' => 'Vérifier uniquement que Content-Type contient du texte', 'is_correct' => false],
                            ['text' => 'Se fier à l’interdiction de lecture CORS du site adverse', 'is_correct' => false],
                            ['text' => 'Garder la modification accessible par un lien GET sans autre protection', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API répond Access-Control-Allow-Origin: * à une requête Fetch avec credentials: "include". Le navigateur :',
                        'marks' => 1,
                        'explanation' => 'Une réponse CORS avec identifiants ne peut pas autoriser l’origine par *. Une origine explicitement autorisée et les autres conditions requises sont nécessaires.',
                        'choices' => [
                            ['text' => 'Refuse d’exposer la réponse au script', 'is_correct' => true],
                            ['text' => 'Accepte le joker dès que credentials vaut include', 'is_correct' => false],
                            ['text' => 'Supprime les cookies puis expose toujours la réponse', 'is_correct' => false],
                            ['text' => 'Accepte automatiquement si les deux domaines utilisent HTTPS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API autorise la lecture CORS depuis un site précis. Cela signifie que :',
                        'marks' => 1,
                        'explanation' => 'CORS contrôle ce qu’un navigateur expose au script. Des requêtes peuvent partir sans lecture autorisée, et les clients hors navigateur ne sont pas soumis à cette politique.',
                        'choices' => [
                            ['text' => 'CORS ne remplace pas l’authentification', 'is_correct' => true],
                            ['text' => 'Une origine autorisée obtient tous les droits sur les ressources', 'is_correct' => false],
                            ['text' => 'Un client hors navigateur ne peut plus envoyer de requête', 'is_correct' => false],
                            ['text' => 'Toute requête non lisible par le script est forcément non envoyée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une requête SQL paramètre les valeurs, mais concatène directement un nom de colonne de tri fourni par le client. Pour sécuriser ce nom, utilisez :',
                        'marks' => 1,
                        'explanation' => 'Les paramètres de valeurs ne servent généralement pas à choisir des identifiants SQL. Il faut traduire les choix du client vers des colonnes connues.',
                        'choices' => [
                            ['text' => 'Une liste fermée de colonnes connues', 'is_correct' => true],
                            ['text' => 'Un paramètre de valeur SQL pour remplacer n’importe quel identifiant', 'is_correct' => false],
                            ['text' => 'Un échappement HTML de l’identifiant reçu', 'is_correct' => false],
                            ['text' => 'Une suppression des espaces sans vérifier le nom final', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service télécharge une image à partir d’une URL fournie par l’utilisateur. Pour prévenir le SSRF, il doit notamment :',
                        'marks' => 1,
                        'explanation' => 'Le contrôle doit porter sur la destination réellement jointe, pas seulement sur la forme du texte. Les redirections, résolutions DNS et restrictions réseau doivent être prises en compte.',
                        'choices' => [
                            ['text' => 'Valider les destinations réellement jointes', 'is_correct' => true],
                            ['text' => 'Exiger seulement une URL HTTPS se terminant par .jpg', 'is_correct' => false],
                            ['text' => 'Vérifier l’URL initiale mais suivre librement ses redirections', 'is_correct' => false],
                            ['text' => 'Retirer seulement le texte localhost sans analyser les adresses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le téléversement accepte un fichier nommé photo.jpg qui contient en réalité un autre format. La validation doit :',
                        'marks' => 1,
                        'explanation' => 'Le nom et le type déclaré par le client sont manipulables. Il faut des contrôles serveur adaptés et un emplacement sans exécution de code téléchargé.',
                        'choices' => [
                            ['text' => 'Vérifier le contenu et ses limites, puis le stocker sans permettre son exécution', 'is_correct' => true],
                            ['text' => 'Faire confiance au type MIME annoncé par le client', 'is_correct' => false],
                            ['text' => 'Valider seulement l’extension du nom fourni', 'is_correct' => false],
                            ['text' => 'Confier la validation uniquement à accept dans le formulaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après connexion, une URL returnTo fournie par le client sert à rediriger le visiteur. Pour éviter une redirection ouverte, il faut :',
                        'marks' => 1,
                        'explanation' => 'La destination doit respecter une politique explicite, par exemple des chemins internes connus. Une chaîne apparemment familière ne suffit pas.',
                        'choices' => [
                            ['text' => 'Restreindre la redirection aux destinations autorisées', 'is_correct' => true],
                            ['text' => 'Accepter toute chaîne dont le début contient le nom du site', 'is_correct' => false],
                            ['text' => 'Accepter toute URL qui utilise une connexion HTTPS', 'is_correct' => false],
                            ['text' => 'Refuser les espaces mais autoriser toutes les autres destinations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application fait confiance à X-Forwarded-For pour limiter les tentatives de connexion. Cet en-tête ne doit être accepté comme source fiable que :',
                        'marks' => 1,
                        'explanation' => 'Un client direct peut forger des en-têtes de transmission. La frontière entre mandataire de confiance et client doit être définie avant d’en tirer une identité réseau.',
                        'choices' => [
                            ['text' => 'Depuis les mandataires approuvés', 'is_correct' => true],
                            ['text' => 'Depuis toute requête portant une liste d’adresses bien formée', 'is_correct' => false],
                            ['text' => 'Depuis un client dont le User-Agent ressemble à un navigateur connu', 'is_correct' => false],
                            ['text' => 'Depuis toute requête HTTPS, indépendamment de son chemin réseau', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Diagnostiquer le rendu et la performance perçue',
                'description' => 'Relier les mesures de terrain aux ressources, au rendu et aux tâches du navigateur.',
                'difficulty' => 'Advanced',
                'duration' => 21,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'La grande image visible dès l’arrivée sur la page est l’élément LCP. Elle porte loading="lazy" et démarre tard. Une correction pertinente est de :',
                        'marks' => 1,
                        'explanation' => 'Une image LCP attendue immédiatement ne devrait généralement pas être chargée paresseusement. Il faut aussi mesurer son poids, sa priorité et la réponse initiale.',
                        'choices' => [
                            ['text' => 'Charger cette image tôt, sans lazy loading', 'is_correct' => true],
                            ['text' => 'Attendre le premier événement de défilement pour définir son URL', 'is_correct' => false],
                            ['text' => 'Ajouter loading="lazy" aussi aux autres ressources visibles', 'is_correct' => false],
                            ['text' => 'Remplacer son URL par une requête lancée après tout le JavaScript', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des images sans dimensions réservées repoussent le texte lorsqu’elles arrivent. La mesure principalement touchée est :',
                        'marks' => 1,
                        'explanation' => 'Le CLS mesure les déplacements de mise en page inattendus. Réserver les dimensions ou le rapport d’aspect des images limite ce problème.',
                        'choices' => [
                            ['text' => 'CLS', 'is_correct' => true],
                            ['text' => 'LCP comme mesure directe de tout déplacement', 'is_correct' => false],
                            ['text' => 'INP comme somme de tous les décalages verticaux', 'is_correct' => false],
                            ['text' => 'TTFB comme mesure des déplacements après réception', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un clic attend une longue tâche JavaScript avant qu’un retour visuel apparaisse. La mesure d’expérience directement concernée est :',
                        'marks' => 1,
                        'explanation' => 'L’INP évalue la latence des interactions jusqu’à l’affichage suivant. Une tâche longue peut retarder le traitement ou la présentation de la réponse.',
                        'choices' => [
                            ['text' => 'INP', 'is_correct' => true],
                            ['text' => 'CLS comme mesure de la durée du gestionnaire', 'is_correct' => false],
                            ['text' => 'TTFB uniquement pour toute interaction après chargement', 'is_correct' => false],
                            ['text' => 'Le taux de succès HTTP sans mesure de latence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une boucle lit offsetHeight puis écrit style.height pour chaque ligne. Le profil montre des calculs de mise en page répétés. Une amélioration est de :',
                        'marks' => 1,
                        'explanation' => 'Alterner lectures dépendantes de la géométrie et écritures de styles peut forcer des mises en page successives. Un regroupement adapté réduit ces allers-retours.',
                        'choices' => [
                            ['text' => 'Séparer les séries de lectures et d’écritures DOM', 'is_correct' => true],
                            ['text' => 'Relire la géométrie immédiatement après chaque écriture', 'is_correct' => false],
                            ['text' => 'Alterner davantage lecture et modification pour chaque ligne', 'is_correct' => false],
                            ['text' => 'Réduire seulement les espaces du code JavaScript', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le serveur produit un horodatage, mais le premier rendu client en génère un autre pendant l’hydratation. Pour éviter l’écart initial, il faut :',
                        'marks' => 1,
                        'explanation' => 'L’hydratation attend une structure initiale cohérente avec le rendu serveur. Les valeurs non déterministes doivent être stabilisées ou mises à jour au bon moment.',
                        'choices' => [
                            ['text' => 'Reprendre l’horodatage serveur au premier rendu client', 'is_correct' => true],
                            ['text' => 'Recalculer l’heure côté client avant toute hydratation', 'is_correct' => false],
                            ['text' => 'Arrondir indépendamment chaque horodatage à la seconde', 'is_correct' => false],
                            ['text' => 'Masquer l’erreur sans aligner les données initiales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une page SSR essaie d’utiliser window pendant son rendu serveur. La correction doit :',
                        'marks' => 1,
                        'explanation' => 'L’environnement serveur ne fournit pas le DOM du navigateur. Les accès à ses API doivent être différés ou protégés selon le framework utilisé.',
                        'choices' => [
                            ['text' => 'Reporter l’accès à la phase navigateur', 'is_correct' => true],
                            ['text' => 'Déclarer window globalement sur le serveur avec une valeur vide', 'is_correct' => false],
                            ['text' => 'Exécuter l’accès dès l’import du module partagé', 'is_correct' => false],
                            ['text' => 'Désactiver seulement les messages d’erreur du rendu serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le JavaScript d’un éditeur lourd est livré à tous les visiteurs, alors que seuls quelques-uns ouvrent cet éditeur. Une optimisation ciblée est de :',
                        'marks' => 1,
                        'explanation' => 'Le découpage du code réduit le téléchargement et l’exécution initiaux pour les visiteurs qui n’utilisent pas cette fonctionnalité. Il ajoute un chargement à gérer lors de l’ouverture.',
                        'choices' => [
                            ['text' => 'Charger séparément le module de l’éditeur', 'is_correct' => true],
                            ['text' => 'Inclure toutes ses extensions dans le paquet d’accueil', 'is_correct' => false],
                            ['text' => 'Précharger toutes ses variantes pour chaque visiteur', 'is_correct' => false],
                            ['text' => 'Désactiver la compression afin de simplifier son analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une mesure de laboratoire est bonne, mais des utilisateurs sur mobile signalent des interactions lentes. La prochaine analyse doit inclure :',
                        'marks' => 1,
                        'explanation' => 'Les conditions réelles varient selon les appareils, réseaux et interactions. Des données de terrain aident à localiser les populations et parcours touchés.',
                        'choices' => [
                            ['text' => 'Examiner les données réelles par appareil et parcours', 'is_correct' => true],
                            ['text' => 'Répéter uniquement le même test sur le poste rapide', 'is_correct' => false],
                            ['text' => 'Remplacer les observations mobiles par la moyenne du laboratoire', 'is_correct' => false],
                            ['text' => 'Retirer les interactions lentes avant de calculer les statistiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le serveur envoie du JavaScript compressé avec gzip. Pour décrire cette transformation du corps, l’en-tête approprié est :',
                        'marks' => 1,
                        'explanation' => 'Content-Encoding décrit l’encodage appliqué à la représentation. Content-Type reste le type du contenu, par exemple un type JavaScript.',
                        'choices' => [
                            ['text' => 'Content-Encoding: gzip', 'is_correct' => true],
                            ['text' => 'Content-Type: gzip', 'is_correct' => false],
                            ['text' => 'Accept: gzip', 'is_correct' => false],
                            ['text' => 'Location: gzip', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le catalogue affiche 20 000 lignes DOM et le défilement ralentit malgré des données déjà en mémoire. Une piste ciblée est :',
                        'marks' => 1,
                        'explanation' => 'Une liste virtualisée limite le nombre d’éléments rendus à une fenêtre utile. Il faut vérifier son impact sur le focus, la recherche et les technologies d’assistance.',
                        'choices' => [
                            ['text' => 'Virtualiser avec une accessibilité vérifiée', 'is_correct' => true],
                            ['text' => 'Conserver toutes les lignes et les dupliquer dans un cache DOM', 'is_correct' => false],
                            ['text' => 'Réduire uniquement le nombre d’appels déjà terminés', 'is_correct' => false],
                            ['text' => 'Trier les 20 000 nœuds après chaque mouvement du pointeur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Concevoir des échanges en temps réel robustes',
                'description' => 'Gérer reconnexion, ordre des messages, autorisations et ressources des connexions persistantes.',
                'difficulty' => 'Advanced',
                'duration' => 25,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un tableau de bord reçoit uniquement des mises à jour du serveur et peut envoyer ses commandes par HTTP. Une solution native adaptée à ce flux descendant est :',
                        'marks' => 1,
                        'explanation' => 'Les SSE conviennent à un flux d’événements textuels du serveur vers le client. WebSocket reste utile lorsqu’un échange bidirectionnel persistant est nécessaire.',
                        'choices' => [
                            ['text' => 'Server-Sent Events avec EventSource', 'is_correct' => true],
                            ['text' => 'WebRTC obligatoire pour toute mise à jour textuelle', 'is_correct' => false],
                            ['text' => 'Un nouveau téléchargement complet à chaque trame d’animation', 'is_correct' => false],
                            ['text' => 'Une boucle synchrone de requêtes bloquant le fil principal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client WebSocket se reconnecte après une interruption. Pour retrouver les événements manqués, le protocole applicatif doit prévoir :',
                        'marks' => 1,
                        'explanation' => 'Une nouvelle connexion ne restaure pas automatiquement l’historique applicatif. Des identifiants, une reprise ou un état complet permettent de combler la coupure.',
                        'choices' => [
                            ['text' => 'Un repère de reprise accompagné d’un moyen de reconstituer l’état manqué', 'is_correct' => true],
                            ['text' => 'Une dépendance à la reprise automatique de l’ancienne connexion TCP', 'is_correct' => false],
                            ['text' => 'Une reconnexion sans historique ni lecture de l’état courant', 'is_correct' => false],
                            ['text' => 'Un délai fixe supposé suffire à reconstituer les événements manqués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application traite deux fois le même événement après reconnexion. Une protection adaptée est de :',
                        'marks' => 1,
                        'explanation' => 'La reprise peut entraîner une nouvelle livraison d’un événement. Le client ou le consommateur doit pouvoir éviter un effet métier répété.',
                        'choices' => [
                            ['text' => 'Dédupliquer les événements déjà appliqués', 'is_correct' => true],
                            ['text' => 'Réappliquer chaque événement, même si son identifiant est connu', 'is_correct' => false],
                            ['text' => 'Déduire l’unicité uniquement de l’heure locale d’arrivée', 'is_correct' => false],
                            ['text' => 'Supposer qu’une nouvelle connexion ne peut recevoir d’ancien message', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des milliers de clients se reconnectent immédiatement après le redémarrage du serveur. Pour éviter une pointe synchronisée, utilisez :',
                        'marks' => 1,
                        'explanation' => 'Un recul progressif limite la cadence ; l’aléa répartit les nouvelles tentatives dans le temps. Des limites et un retour utilisateur restent nécessaires.',
                        'choices' => [
                            ['text' => 'Un recul progressif avec aléa et limite', 'is_correct' => true],
                            ['text' => 'Une attente fixe très courte identique pour tous les clients', 'is_correct' => false],
                            ['text' => 'Une boucle immédiate jusqu’au retour du serveur', 'is_correct' => false],
                            ['text' => 'Plusieurs connexions simultanées par client à chaque échec', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un serveur WebSocket valide la connexion initiale, mais accepte ensuite toute souscription à facture:{id}. Il doit aussi :',
                        'marks' => 1,
                        'explanation' => 'Une connexion authentifiée ne donne pas accès à toutes les ressources. Les souscriptions et les actions demandées doivent être autorisées explicitement.',
                        'choices' => [
                            ['text' => 'Autoriser chaque ressource demandée', 'is_correct' => true],
                            ['text' => 'Autoriser tous les canaux après la seule authentification initiale', 'is_correct' => false],
                            ['text' => 'Se fier à l’absence de lien vers le canal dans l’interface', 'is_correct' => false],
                            ['text' => 'Accepter toute souscription dont l’identifiant est un entier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cookie de session accompagne une ouverture WebSocket depuis une page malveillante. Une défense spécifique lors de l’ouverture est de :',
                        'marks' => 1,
                        'explanation' => 'Le contrôle d’origine des WebSockets doit être prévu par le serveur. Les cookies et les protections applicatives ne doivent pas être supposés suffisants à eux seuls.',
                        'choices' => [
                            ['text' => 'Valider Origin contre la liste autorisée et authentifier la connexion entrante', 'is_correct' => true],
                            ['text' => 'Compter seulement sur les en-têtes CORS des réponses Fetch', 'is_correct' => false],
                            ['text' => 'Accepter toute origine dès qu’un cookie accompagne la requête', 'is_correct' => false],
                            ['text' => 'Vérifier seulement que le client demande le protocole WebSocket', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le navigateur envoie des données plus vite que le réseau ne les transmet. bufferedAmount augmente continuellement. Le client doit :',
                        'marks' => 1,
                        'explanation' => 'bufferedAmount indique la quantité de données en attente d’envoi. L’API WebSocket classique n’impose pas à elle seule une contre-pression complète à l’application.',
                        'choices' => [
                            ['text' => 'Ralentir la production et appliquer une politique bornée à la file d’envoi', 'is_correct' => true],
                            ['text' => 'Continuer à produire en supposant une mémoire illimitée', 'is_correct' => false],
                            ['text' => 'Réessayer chaque envoi immédiatement sur la même connexion saturée', 'is_correct' => false],
                            ['text' => 'Dupliquer les messages pour augmenter leur chance de départ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux serveurs WebSocket hébergent chacun des clients abonnés à la même discussion. Pour diffuser un message à tous, ils ont besoin :',
                        'marks' => 1,
                        'explanation' => 'Un processus ne connaît pas automatiquement les connexions des autres. Un courtier ou un mécanisme équivalent peut distribuer les événements entre instances.',
                        'choices' => [
                            ['text' => 'Une diffusion partagée entre instances', 'is_correct' => true],
                            ['text' => 'Une variable locale identique définie au démarrage de chaque processus', 'is_correct' => false],
                            ['text' => 'Une affinité de session sans relais des messages entre serveurs', 'is_correct' => false],
                            ['text' => 'Une même URL de connexion sans aucun état partagé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un flux de positions envoie 50 mises à jour par seconde, mais l’écran n’a besoin que de la position récente. Pour un client lent, une politique pertinente est de :',
                        'marks' => 1,
                        'explanation' => 'Les événements d’état remplaçables peuvent être regroupés si le contrat le permet. Cette politique ne conviendrait pas à des événements métier tous indispensables.',
                        'choices' => [
                            ['text' => 'Regrouper les positions en attente en gardant la plus récente encore utile', 'is_correct' => true],
                            ['text' => 'Lire toutes les anciennes positions sans limite de retard', 'is_correct' => false],
                            ['text' => 'Retransmettre l’historique complet à chaque nouvelle position', 'is_correct' => false],
                            ['text' => 'Attendre que tous les clients lents aient traité chaque position', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une connexion semble ouverte mais aucun trafic utile ne passe après une coupure silencieuse. Une stratégie de détection est de :',
                        'marks' => 1,
                        'explanation' => 'Un battement ou une vérification de l’activité permet de repérer une connexion devenue inutilisable. Le délai doit tenir compte des conditions réseau et de l’architecture.',
                        'choices' => [
                            ['text' => 'Un battement et un délai d’expiration', 'is_correct' => true],
                            ['text' => 'Le seul état OPEN observé lors de la connexion initiale', 'is_correct' => false],
                            ['text' => 'Un test de présence fondé uniquement sur l’onglet visible', 'is_correct' => false],
                            ['text' => 'Une attente sans limite tant qu’aucune fermeture explicite n’arrive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un utilisateur perd l’accès à un groupe pendant qu’une connexion persistante reste ouverte. Le système doit :',
                        'marks' => 1,
                        'explanation' => 'Les droits peuvent changer après la connexion. Une stratégie de révocation ou de revérification doit empêcher la poursuite d’un accès devenu interdit.',
                        'choices' => [
                            ['text' => 'Révoquer ou revérifier les souscriptions et les actions déjà ouvertes', 'is_correct' => true],
                            ['text' => 'Conserver les droits jusqu’à la prochaine connexion même s’ils changent', 'is_correct' => false],
                            ['text' => 'Retirer le nom du groupe sans modifier sa souscription serveur', 'is_correct' => false],
                            ['text' => 'Modifier seulement les futures pages sans traiter les connexions ouvertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client reçoit des messages contenant un champ type inconnu et une charge non conforme. Le serveur doit avant traitement :',
                        'marks' => 1,
                        'explanation' => 'Un canal persistant reste une entrée non fiable. Validation, limites de taille et gestion explicite des types inconnus protègent la logique et les ressources.',
                        'choices' => [
                            ['text' => 'Valider types, schémas et tailles', 'is_correct' => true],
                            ['text' => 'Accepter toute charge après la seule validation d’ouverture', 'is_correct' => false],
                            ['text' => 'Vérifier seulement que le message contient une propriété type', 'is_correct' => false],
                            ['text' => 'Convertir les types inconnus en commandes par défaut sans contrôle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'JavaScript avancé',
            'Performance Web',
            'Architecture des applications Web',
            'API avancées',
            'Sécurité Web avancée',
            'SSR, CSR et rendu Web',
            'Testing et qualité Web',
            'WebSockets et applications temps réel',
        ];

        DB::transaction(function () use ($subject, $quizzes, $legacyTitles): void {
            foreach ($quizzes as $quizData) {
                $questionCount = count($quizData['questions']);
                $totalMarks = array_sum(array_column($quizData['questions'], 'marks'));

                $quiz = Quiz::updateOrCreate(
                    [
                        'subject_id' => $subject->id,
                        'owner_id' => null,
                        'title' => $quizData['title'],
                    ],
                    [
                        'owner_id' => null,
                        'description' => $quizData['description'],
                        'difficulty' => $quizData['difficulty'],
                        'duration' => $quizData['duration'],
                        'passing_score' => $quizData['passing_score'],
                        'total_marks' => $totalMarks,
                        'is_active' => true,
                    ]
                );

                foreach ($quizData['questions'] as $index => $questionData) {
                    $question = $quiz->questions()->updateOrCreate(
                        ['order' => $index + 1],
                        [
                            'question' => $questionData['question'],
                            'type' => 'multiple_choice',
                            'marks' => $questionData['marks'],
                            'explanation' => $questionData['explanation'],
                        ]
                    );

                    $question->choices()->delete();

                    // Le frontend gère le mélange des choix et des questions.
                    foreach ($questionData['choices'] as $choiceIndex => $choiceData) {
                        $question->choices()->create([
                            'choice_text' => $choiceData['text'],
                            'is_correct' => $choiceData['is_correct'],
                            'order' => $choiceIndex + 1,
                        ]);
                    }
                }

                $quiz->questions()->where('order', '>', $questionCount)->delete();
            }

            // Les anciens quiz restent conservés mais ne doublonnent plus le catalogue actif.
            Quiz::where('subject_id', $subject->id)
                ->whereNull('owner_id')
                ->whereIn('title', $legacyTitles)
                ->whereNotIn('title', array_column($quizzes, 'title'))
                ->update(['is_active' => false]);
        });
    }
}
