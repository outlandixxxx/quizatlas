<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebDevelopmentIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'web-development')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Adapter une interface aux écrans et au clavier',
                'description' => 'Résoudre des situations de mise en page, de navigation et d’accessibilité courantes.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un conteneur Flexbox utilise flex-direction: column. Pour répartir ses enfants sur son axe principal, intervenez avec :',
                        'marks' => 1,
                        'explanation' => 'L’axe principal suit flex-direction : il est vertical ici. justify-content agit sur cet axe ; align-items agit sur l’axe transversal.',
                        'choices' => [
                            ['text' => 'justify-content', 'is_correct' => true],
                            ['text' => 'align-items', 'is_correct' => false],
                            ['text' => 'text-align', 'is_correct' => false],
                            ['text' => 'vertical-align', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une grille doit proposer trois colonnes de même fraction, autorisées à rétrécir malgré un contenu long. La définition adaptée est :',
                        'marks' => 1,
                        'explanation' => 'minmax(0, 1fr) évite un minimum automatique lié au contenu pour chaque piste. Trois colonnes à 100 % dépasseraient le conteneur.',
                        'choices' => [
                            ['text' => 'repeat(3, minmax(0, 1fr))', 'is_correct' => true],
                            ['text' => 'repeat(3, 100%)', 'is_correct' => false],
                            ['text' => 'repeat(3, 100vw)', 'is_correct' => false],
                            ['text' => '1fr 2fr 3fr', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un enfant Flexbox refuse de rétrécir et déborde à cause d’un texte long. La correction ciblée à essayer sur cet enfant est :',
                        'marks' => 1,
                        'explanation' => 'Le minimum automatique d’un élément flexible peut empêcher sa réduction. min-width: 0 autorise cette réduction ; il faut ensuite choisir comment traiter le texte débordant.',
                        'choices' => [
                            ['text' => 'min-width: 0;', 'is_correct' => true],
                            ['text' => 'min-width: 100vw;', 'is_correct' => false],
                            ['text' => 'flex-shrink: 0;', 'is_correct' => false],
                            ['text' => 'white-space: nowrap;', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un titre utilise font-size: 2rem. Cette unité est relative à :',
                        'marks' => 1,
                        'explanation' => 'rem prend pour référence la taille de police de la racine du document. em dépend du contexte de taille de police concerné.',
                        'choices' => [
                            ['text' => 'La taille de police de l’élément racine', 'is_correct' => true],
                            ['text' => 'La largeur du conteneur', 'is_correct' => false],
                            ['text' => 'La taille de police du parent immédiat', 'is_correct' => false],
                            ['text' => 'La hauteur de la fenêtre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une page change d’apparence lorsque la fenêtre ne dépasse pas 600 px. La condition appropriée est :',
                        'marks' => 1,
                        'explanation' => 'max-width limite l’application de la règle aux fenêtres dont la largeur est au plus égale au seuil. min-width exprimerait la condition inverse.',
                        'choices' => [
                            ['text' => '@media (max-width: 600px)', 'is_correct' => true],
                            ['text' => '@media (min-width: 600px)', 'is_correct' => false],
                            ['text' => '@supports (width: 600px)', 'is_correct' => false],
                            ['text' => '@font-face (max-width: 600px)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe remonte visuellement le bouton de validation avec order, mais laisse son emplacement HTML en fin de formulaire. Le risque à vérifier est :',
                        'marks' => 1,
                        'explanation' => 'La réorganisation visuelle Flexbox ne réécrit pas l’ordre du DOM. Le parcours séquentiel peut donc devenir incohérent avec ce que voit le visiteur.',
                        'choices' => [
                            ['text' => 'Un décalage entre ordre visuel et parcours au clavier', 'is_correct' => true],
                            ['text' => 'Une suppression automatique du bouton du DOM', 'is_correct' => false],
                            ['text' => 'Une annulation systématique de tous les clics', 'is_correct' => false],
                            ['text' => 'Une transformation du bouton en champ texte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le CSS contient p { color: black; } puis .fiche p { color: green; }, sans autres règles. Le paragraphe de .fiche apparaît :',
                        'marks' => 1,
                        'explanation' => 'Le sélecteur .fiche p a une spécificité supérieure à p dans les mêmes conditions de cascade. Il l’emporte pour color.',
                        'choices' => [
                            ['text' => 'Vert', 'is_correct' => true],
                            ['text' => 'Noir', 'is_correct' => false],
                            ['text' => 'Transparent', 'is_correct' => false],
                            ['text' => 'Avec la couleur définie par le dernier clic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une interface utilise --accent: #b45309. Pour appliquer cette propriété personnalisée au texte, écrivez :',
                        'marks' => 1,
                        'explanation' => 'var() lit une propriété personnalisée CSS. Une valeur de repli peut être fournie après une virgule.',
                        'choices' => [
                            ['text' => 'color: var(--accent);', 'is_correct' => true],
                            ['text' => 'color: --accent;', 'is_correct' => false],
                            ['text' => 'var: color(--accent);', 'is_correct' => false],
                            ['text' => 'color: attr(--accent);', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un menu ne s’ouvre qu’au survol, ce qui exclut les utilisateurs au clavier. Une correction adaptée est de :',
                        'marks' => 1,
                        'explanation' => 'Une interaction ne doit pas dépendre uniquement du survol. Un bouton natif et un état d’ouverture exposé rendent l’action plus accessible.',
                        'choices' => [
                            ['text' => 'Prévoir un bouton et un fonctionnement au clavier avec état explicite', 'is_correct' => true],
                            ['text' => 'Ajouter seulement une transition plus lente', 'is_correct' => false],
                            ['text' => 'Déplacer les liens hors du document', 'is_correct' => false],
                            ['text' => 'Ajouter tabindex="-1" à tous les liens', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un bouton contient uniquement une icône de loupe et ne possède aucun nom accessible. La correction appropriée est :',
                        'marks' => 1,
                        'explanation' => 'Un bouton doit avoir un nom qui décrit son action. Un texte adapté ou aria-label peut le fournir pour un bouton à icône.',
                        'choices' => [
                            ['text' => 'Lui fournir un nom tel que « Rechercher »', 'is_correct' => true],
                            ['text' => 'Ajouter seulement une largeur CSS', 'is_correct' => false],
                            ['text' => 'Lui donner role="img" à la place de son rôle de bouton', 'is_correct' => false],
                            ['text' => 'Ajouter aria-hidden="true" au bouton entier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le site anime fortement une bannière. Pour respecter une préférence utilisateur de réduction des mouvements, utilisez :',
                        'marks' => 1,
                        'explanation' => 'La requête média prefers-reduced-motion permet d’adapter les animations à cette préférence. Le contenu et les actions doivent rester disponibles.',
                        'choices' => [
                            ['text' => 'prefers-reduced-motion', 'is_correct' => true],
                            ['text' => 'prefers-color-scheme', 'is_correct' => false],
                            ['text' => 'forced-colors seulement', 'is_correct' => false],
                            ['text' => 'orientation: landscape', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Transformer les données sans effets inattendus',
                'description' => 'Interpréter des tableaux, des objets et des valeurs JavaScript dans une interface.',
                'difficulty' => 'Intermediate',
                'duration' => 19,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'L’expression [2, 4, 6].map(n => n / 2) produit :',
                        'marks' => 1,
                        'explanation' => 'map crée un nouveau tableau à partir des résultats du rappel. L’opération ne modifie pas ici le tableau d’origine.',
                        'choices' => [
                            ['text' => '[1, 2, 3]', 'is_correct' => true],
                            ['text' => '[2, 4, 6]', 'is_correct' => false],
                            ['text' => '6', 'is_correct' => false],
                            ['text' => '[2, 4, 6, 2]', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une liste de produits doit conserver uniquement ceux dont stock > 0. La méthode appropriée est :',
                        'marks' => 1,
                        'explanation' => 'filter sélectionne les éléments dont le prédicat est vrai. map transforme chaque élément sans sélectionner à lui seul une sous-liste.',
                        'choices' => [
                            ['text' => 'filter', 'is_correct' => true],
                            ['text' => 'map', 'is_correct' => false],
                            ['text' => 'forEach', 'is_correct' => false],
                            ['text' => 'join', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le total des prix [10, 20, 5] est calculé avec reduce((s, p) => s + p, 0). Le résultat est :',
                        'marks' => 1,
                        'explanation' => 'L’accumulateur commence à 0 et additionne des nombres : 10 + 20 + 5 = 35.',
                        'choices' => [
                            ['text' => '35', 'is_correct' => true],
                            ['text' => '0', 'is_correct' => false],
                            ['text' => '25', 'is_correct' => false],
                            ['text' => '"10205"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le code utilise const limite = configuration.limite ?? 20; avec configuration.limite égal à 0. limite vaut :',
                        'marks' => 1,
                        'explanation' => '?? ne remplace que null ou undefined. Une valeur valide comme 0 est conservée, contrairement à un repli fondé sur ||.',
                        'choices' => [
                            ['text' => '0', 'is_correct' => true],
                            ['text' => '20', 'is_correct' => false],
                            ['text' => 'null', 'is_correct' => false],
                            ['text' => 'undefined', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'const original = { adresse: { ville: "Rabat" } }; const copie = { ...original }; copie.adresse.ville = "Fès";. La ville dans original devient :',
                        'marks' => 1,
                        'explanation' => 'La décomposition copie superficiellement les propriétés. Les deux objets partagent encore le même objet adresse imbriqué.',
                        'choices' => [
                            ['text' => 'Fès', 'is_correct' => true],
                            ['text' => 'Rabat', 'is_correct' => false],
                            ['text' => 'undefined', 'is_correct' => false],
                            ['text' => 'Une copie indépendante de Rabat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un tri numérique croissant doit classer [2, 10, 1]. La comparaison à fournir à sort est :',
                        'marks' => 1,
                        'explanation' => 'Sans comparateur, sort compare habituellement les représentations en chaînes. a - b fournit une comparaison numérique croissante.',
                        'choices' => [
                            ['text' => '(a, b) => a - b', 'is_correct' => true],
                            ['text' => '(a, b) => b - a', 'is_correct' => false],
                            ['text' => '(a, b) => a === b', 'is_correct' => false],
                            ['text' => 'Aucun comparateur, quel que soit le contenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le développeur veut trier un tableau sans modifier l’original, avec les méthodes classiques. Choisissez l’expression.',
                        'marks' => 1,
                        'explanation' => 'La décomposition crée un tableau distinct avant le tri. sort et reverse modifient directement le tableau sur lequel ils sont appelés.',
                        'choices' => [
                            ['text' => '[...notes].sort((a, b) => a - b)', 'is_correct' => true],
                            ['text' => 'notes.sort((a, b) => a - b)', 'is_correct' => false],
                            ['text' => 'notes.reverse().sort()', 'is_correct' => false],
                            ['text' => 'notes.push(0).sort()', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La valeur utilisateur peut être absente. L’expression utilisateur?.profil?.nom renvoie undefined si profil est null, au lieu de :',
                        'marks' => 1,
                        'explanation' => 'Le chaînage optionnel interrompt l’accès quand une base de la chaîne est null ou undefined. Il ne crée pas les objets manquants.',
                        'choices' => [
                            ['text' => 'Lever une erreur lors de cet accès', 'is_correct' => true],
                            ['text' => 'Créer automatiquement un profil vide', 'is_correct' => false],
                            ['text' => 'Retourner systématiquement la chaîne "null"', 'is_correct' => false],
                            ['text' => 'Modifier utilisateur en tableau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le code const { nom: libelle } = { nom: "Atlas" }; définit :',
                        'marks' => 1,
                        'explanation' => 'Dans une déstructuration d’objet, nom désigne la propriété extraite et libelle le nom de la variable créée.',
                        'choices' => [
                            ['text' => 'Une variable libelle valant "Atlas"', 'is_correct' => true],
                            ['text' => 'Une variable nom valant "libelle"', 'is_correct' => false],
                            ['text' => 'Deux variables nom et libelle', 'is_correct' => false],
                            ['text' => 'Une propriété globale appelée Atlas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction de mise en forme n’a besoin ni du DOM ni d’un état global. Pour la rendre simple à tester, elle doit idéalement :',
                        'marks' => 1,
                        'explanation' => 'Une fonction pure évite les effets externes et produit un résultat reproductible pour les mêmes entrées. Cela facilite des tests ciblés.',
                        'choices' => [
                            ['text' => 'Retourner un résultat déterminé par ses arguments', 'is_correct' => true],
                            ['text' => 'Modifier une variable globale de compteur', 'is_correct' => false],
                            ['text' => 'Lire l’heure système à chaque appel', 'is_correct' => false],
                            ['text' => 'Changer les champs du formulaire reçu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La saisie d’un champ numérique est la chaîne "12". Avant une addition métier, le code doit :',
                        'marks' => 1,
                        'explanation' => 'Les valeurs de formulaire sont souvent des chaînes. Une conversion explicite doit être accompagnée de contrôles, notamment contre NaN et les valeurs hors limites.',
                        'choices' => [
                            ['text' => 'Convertir puis vérifier que le nombre respecte les contraintes', 'is_correct' => true],
                            ['text' => 'Utiliser + directement avec n’importe quelle valeur reçue', 'is_correct' => false],
                            ['text' => 'Remplacer systématiquement la saisie par zéro', 'is_correct' => false],
                            ['text' => 'Vérifier seulement la longueur de la chaîne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le formulaire fournit "abc" à Number(). Le résultat à détecter est :',
                        'marks' => 1,
                        'explanation' => 'Number("abc") ne produit pas de nombre valide. Number.isNaN permet de tester le résultat sans confondre cette situation avec zéro.',
                        'choices' => [
                            ['text' => 'NaN', 'is_correct' => true],
                            ['text' => '0', 'is_correct' => false],
                            ['text' => 'null', 'is_correct' => false],
                            ['text' => '1', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Charger des données et gérer les échecs',
                'description' => 'Maîtriser les Promises, Fetch, les réponses HTTP et les requêtes concurrentes.',
                'difficulty' => 'Intermediate',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'fetch reçoit normalement une réponse HTTP 404 depuis le serveur, sans erreur réseau ni blocage du navigateur. Sa Promise :',
                        'marks' => 1,
                        'explanation' => 'Fetch ne rejette pas automatiquement les statuts HTTP d’erreur. Le code doit examiner response.ok ou response.status.',
                        'choices' => [
                            ['text' => 'Est accomplie avec un objet Response', 'is_correct' => true],
                            ['text' => 'Est toujours rejetée à cause du statut 404', 'is_correct' => false],
                            ['text' => 'Reste pending jusqu’à une réponse 200', 'is_correct' => false],
                            ['text' => 'Renvoie directement le texte JSON', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après const response = await fetch(url), le corps JSON doit être lu. L’instruction adaptée est :',
                        'marks' => 1,
                        'explanation' => 'response.json() lit le corps de façon asynchrone et analyse le JSON. La méthode peut rejeter si le corps n’est pas un JSON valide.',
                        'choices' => [
                            ['text' => 'const data = await response.json();', 'is_correct' => true],
                            ['text' => 'const data = response.json;', 'is_correct' => false],
                            ['text' => 'const data = JSON.parse(response);', 'is_correct' => false],
                            ['text' => 'const data = await response.status;', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction async atteint return 7;. L’appel à cette fonction fournit :',
                        'marks' => 1,
                        'explanation' => 'Une fonction async retourne toujours une Promise. Une valeur retournée normalement devient sa valeur d’accomplissement.',
                        'choices' => [
                            ['text' => 'Une Promise accomplie avec 7', 'is_correct' => true],
                            ['text' => 'Le nombre 7 directement', 'is_correct' => false],
                            ['text' => 'Une fonction contenant 7', 'is_correct' => false],
                            ['text' => 'Une Promise nécessairement rejetée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une Promise a reçu comme résolution une autre Promise encore en attente. Il est exact de dire que la première :',
                        'marks' => 1,
                        'explanation' => 'La résolution peut lier une Promise au résultat futur d’une autre. « Résolue » et « accomplie » ne sont donc pas synonymes.',
                        'choices' => [
                            ['text' => 'Peut être résolue tout en restant pending', 'is_correct' => true],
                            ['text' => 'Est nécessairement fulfilled immédiatement', 'is_correct' => false],
                            ['text' => 'Est nécessairement rejected immédiatement', 'is_correct' => false],
                            ['text' => 'Perd tous ses gestionnaires then', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Trois lectures indépendantes démarrent ensemble avec Promise.all([a, b, c]). Les valeurs de réussite sont fournies :',
                        'marks' => 1,
                        'explanation' => 'Promise.all conserve l’ordre des entrées dans son tableau de résultats, même si les opérations terminent dans un autre ordre.',
                        'choices' => [
                            ['text' => 'Dans l’ordre a, b, c de l’entrée', 'is_correct' => true],
                            ['text' => 'Dans l’ordre des fins d’exécution', 'is_correct' => false],
                            ['text' => 'Dans l’ordre alphabétique de leurs URL', 'is_correct' => false],
                            ['text' => 'Dans un ordre différent à chaque lecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une des Promises passées à Promise.all est rejetée. Sans mécanisme supplémentaire, les autres opérations :',
                        'marks' => 1,
                        'explanation' => 'Promise.all rejette son résultat lorsqu’une entrée est rejetée, mais ne fournit pas une annulation automatique des autres opérations.',
                        'choices' => [
                            ['text' => 'Ne sont pas automatiquement annulées', 'is_correct' => true],
                            ['text' => 'Sont toutes annulées immédiatement', 'is_correct' => false],
                            ['text' => 'Recommencent depuis le début', 'is_correct' => false],
                            ['text' => 'Deviennent automatiquement des réponses HTTP 500', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un écran doit afficher le résultat de chaque téléchargement, y compris ceux qui échouent. L’agrégateur le plus adapté est :',
                        'marks' => 1,
                        'explanation' => 'allSettled attend chaque issue et retourne pour chaque entrée son statut et sa valeur ou sa raison de rejet.',
                        'choices' => [
                            ['text' => 'Promise.allSettled', 'is_correct' => true],
                            ['text' => 'Promise.race', 'is_correct' => false],
                            ['text' => 'Promise.any', 'is_correct' => false],
                            ['text' => 'JSON.stringify', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une recherche envoie une requête pour « ra », puis pour « rabat ». La première termine après la seconde. Pour ne pas afficher d’anciens résultats, il faut :',
                        'marks' => 1,
                        'explanation' => 'Un identifiant de requête ou la comparaison avec la saisie courante évite qu’une réponse obsolète écrase l’état récent. L’annulation peut compléter cette protection.',
                        'choices' => [
                            ['text' => 'N’appliquer que la réponse correspondant à la recherche courante', 'is_correct' => true],
                            ['text' => 'Toujours afficher la dernière réponse arrivée', 'is_correct' => false],
                            ['text' => 'Fusionner toutes les réponses sans distinction', 'is_correct' => false],
                            ['text' => 'Désactiver définitivement la recherche après un appel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une requête Fetch doit pouvoir être interrompue par l’interface. L’API à employer est :',
                        'marks' => 1,
                        'explanation' => 'Le signal d’un AbortController peut être transmis à fetch. L’annulation côté client ne garantit pas l’annulation d’une opération déjà engagée au serveur.',
                        'choices' => [
                            ['text' => 'AbortController avec son signal', 'is_correct' => true],
                            ['text' => 'JSON.parse avec un délai', 'is_correct' => false],
                            ['text' => 'Promise.all sans argument', 'is_correct' => false],
                            ['text' => 'setInterval sur response.status', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le bouton reste bloqué en état « Chargement » après une erreur. Pour rétablir cet état lors d’un succès comme d’un échec, placez le nettoyage dans :',
                        'marks' => 1,
                        'explanation' => 'finally s’exécute à la sortie du bloc try/catch, ce qui convient au nettoyage d’un indicateur de chargement.',
                        'choices' => [
                            ['text' => 'finally', 'is_correct' => true],
                            ['text' => 'Le début de try seulement', 'is_correct' => false],
                            ['text' => 'Le gestionnaire de clic suivant', 'is_correct' => false],
                            ['text' => 'Une feuille CSS séparée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Concevoir un petit service HTTP fiable',
                'description' => 'Appliquer les méthodes HTTP, la validation, les droits et les accès aux données.',
                'difficulty' => 'Intermediate',
                'duration' => 21,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'POST /articles crée effectivement un article. Le statut de réussite adapté, accompagné si possible de l’adresse de la ressource, est :',
                        'marks' => 1,
                        'explanation' => '201 indique la création d’une ou plusieurs ressources. Location peut identifier la ressource principale créée.',
                        'choices' => [
                            ['text' => '201 Created', 'is_correct' => true],
                            ['text' => '204 No Content dans tous les cas', 'is_correct' => false],
                            ['text' => '304 Not Modified', 'is_correct' => false],
                            ['text' => '401 Unauthorized', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une modification partielle ne transmet que le titre d’un article. L’API définit explicitement ce contrat de mise à jour partielle avec :',
                        'marks' => 1,
                        'explanation' => 'PATCH est destiné à appliquer une modification partielle selon le format convenu. PUT décrit le remplacement de l’état de la ressource cible.',
                        'choices' => [
                            ['text' => 'PATCH', 'is_correct' => true],
                            ['text' => 'GET', 'is_correct' => false],
                            ['text' => 'HEAD', 'is_correct' => false],
                            ['text' => 'OPTIONS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une suppression réussie ne renvoie aucun corps. Le serveur choisit 204. Le client doit :',
                        'marks' => 1,
                        'explanation' => 'Une réponse 204 ne contient pas de contenu. Un client générique doit distinguer ce cas d’une réponse JSON à analyser.',
                        'choices' => [
                            ['text' => 'Traiter le succès sans exiger de JSON', 'is_correct' => true],
                            ['text' => 'Appeler response.json() sans vérifier le statut', 'is_correct' => false],
                            ['text' => 'Considérer toute réponse vide comme une panne', 'is_correct' => false],
                            ['text' => 'Réessayer jusqu’à recevoir un corps', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un utilisateur authentifié tente une action qui lui est interdite. Le serveur peut répondre :',
                        'marks' => 1,
                        'explanation' => '403 signifie que le serveur refuse la requête. Selon sa politique de confidentialité, une API peut aussi masquer l’existence de certaines ressources par 404.',
                        'choices' => [
                            ['text' => '403 Forbidden', 'is_correct' => true],
                            ['text' => '201 Created', 'is_correct' => false],
                            ['text' => '301 Moved Permanently', 'is_correct' => false],
                            ['text' => '100 Continue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le client peut envoyer prix=-20 alors que le prix doit être positif. La vérification décisive doit se faire :',
                        'marks' => 1,
                        'explanation' => 'La validation côté serveur applique les contraintes même si le client est contourné. Des contraintes en base peuvent compléter cette protection.',
                        'choices' => [
                            ['text' => 'Dans la validation serveur avant l’écriture', 'is_correct' => true],
                            ['text' => 'Dans l’attribut min du HTML uniquement', 'is_correct' => false],
                            ['text' => 'Dans le texte d’aide du formulaire', 'is_correct' => false],
                            ['text' => 'Dans le nom de la variable du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une requête SQL recherche un courriel saisi par l’utilisateur. L’approche sûre est de :',
                        'marks' => 1,
                        'explanation' => 'Les paramètres séparent les valeurs du code SQL. Un échappement HTML protège un autre contexte et ne remplace pas cette séparation.',
                        'choices' => [
                            ['text' => 'Lier la valeur à un paramètre de requête', 'is_correct' => true],
                            ['text' => 'Concaténer la valeur après suppression des espaces', 'is_correct' => false],
                            ['text' => 'Échapper seulement les caractères HTML', 'is_correct' => false],
                            ['text' => 'Convertir toute la requête SQL en JSON', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La réponse JSON d’un profil doit exposer nom et ville, mais jamais password_hash. Le serveur doit :',
                        'marks' => 1,
                        'explanation' => 'Toute donnée transmise au client est déjà exposée. La sélection des champs doit se faire avant l’envoi de la réponse.',
                        'choices' => [
                            ['text' => 'Définir explicitement les champs de sortie autorisés', 'is_correct' => true],
                            ['text' => 'Sérialiser toutes les colonnes puis les masquer en CSS', 'is_correct' => false],
                            ['text' => 'Envoyer le hachage avec un nom abrégé', 'is_correct' => false],
                            ['text' => 'Confier le retrait au navigateur après réception', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'GET /articles retourne des milliers de lignes. La pagination doit principalement être appliquée :',
                        'marks' => 1,
                        'explanation' => 'Limiter et ordonner les résultats côté serveur réduit les données lues et transférées. Masquer ensuite des lignes ne réduit pas le transfert.',
                        'choices' => [
                            ['text' => 'Dans la requête serveur avant le transfert', 'is_correct' => true],
                            ['text' => 'Après le transfert complet dans le navigateur', 'is_correct' => false],
                            ['text' => 'Dans la compression des images', 'is_correct' => false],
                            ['text' => 'En cachant des lignes avec display: none', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une mise à jour doit modifier une commande et ses lignes sans laisser d’état partiel. Regroupez les écritures dans :',
                        'marks' => 1,
                        'explanation' => 'Une transaction permet de valider ou d’annuler ensemble les écritures concernées. Elle ne rend pas automatiquement atomiques les appels à des services externes.',
                        'choices' => [
                            ['text' => 'Une transaction de base de données', 'is_correct' => true],
                            ['text' => 'Deux réponses HTTP indépendantes', 'is_correct' => false],
                            ['text' => 'Une seule variable JavaScript globale', 'is_correct' => false],
                            ['text' => 'Un cache navigateur partagé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chaque article affiché déclenche une nouvelle requête SQL pour son auteur. Le chargement passe de 1 à 51 requêtes pour 50 articles. Une correction fréquente est :',
                        'marks' => 1,
                        'explanation' => 'Le préchargement des relations peut éviter ce schéma N+1. Il faut vérifier les requêtes réellement exécutées et les données nécessaires.',
                        'choices' => [
                            ['text' => 'Précharger les relations nécessaires', 'is_correct' => true],
                            ['text' => 'Ajouter une requête par champ de l’auteur', 'is_correct' => false],
                            ['text' => 'Retourner toutes les tables au navigateur', 'is_correct' => false],
                            ['text' => 'Changer seulement le statut HTTP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le serveur reçoit /factures/87. Pour empêcher un client de lire la facture d’un autre client, il doit :',
                        'marks' => 1,
                        'explanation' => 'Une authentification générale ne suffit pas à autoriser l’accès à un objet. Le contrôle doit tenir compte de l’utilisateur et de la facture visée.',
                        'choices' => [
                            ['text' => 'Vérifier le droit sur cette facture précise', 'is_correct' => true],
                            ['text' => 'Vérifier seulement que 87 est un entier', 'is_correct' => false],
                            ['text' => 'Masquer le lien dans le menu', 'is_correct' => false],
                            ['text' => 'Accepter tout utilisateur connecté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le client veut annoncer qu’il préfère une réponse JSON, indépendamment du format de son propre corps de requête. Il envoie :',
                        'marks' => 1,
                        'explanation' => 'Accept exprime les types de représentation souhaités pour la réponse. Content-Type décrit le corps envoyé, ce qui répond à une autre question.',
                        'choices' => [
                            ['text' => 'Accept: application/json', 'is_correct' => true],
                            ['text' => 'Content-Type: application/json', 'is_correct' => false],
                            ['text' => 'Content-Encoding: application/json', 'is_correct' => false],
                            ['text' => 'Location: application/json', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un traitement appelle un service externe qui ne répond plus. Une protection minimale consiste à :',
                        'marks' => 1,
                        'explanation' => 'Un délai d’attente évite de bloquer indéfiniment les ressources du serveur. La stratégie de reprise dépend ensuite de l’opération et de ses effets.',
                        'choices' => [
                            ['text' => 'Définir un délai d’attente et traiter explicitement son dépassement', 'is_correct' => true],
                            ['text' => 'Attendre indéfiniment pour garantir la réussite', 'is_correct' => false],
                            ['text' => 'Relancer une boucle sans pause', 'is_correct' => false],
                            ['text' => 'Supprimer tous les messages d’erreur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Organiser une interface à composants',
                'description' => 'Gérer l’état, les événements et les ressources dans une application à navigation côté client.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Une liste filtre ses éléments à partir de produits et de texteRecherche. Pour éviter les incohérences, la liste affichée devrait être :',
                        'marks' => 1,
                        'explanation' => 'Un état dérivé limite les copies à synchroniser. Lorsque les sources changent, le calcul peut produire la nouvelle liste.',
                        'choices' => [
                            ['text' => 'Une valeur dérivée de ces deux sources', 'is_correct' => true],
                            ['text' => 'Une troisième copie modifiée indépendamment partout', 'is_correct' => false],
                            ['text' => 'Une variable globale sans lien avec le filtre', 'is_correct' => false],
                            ['text' => 'Une valeur enregistrée une seule fois au lancement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un composant enfant reçoit un article et propose son archivage. Une organisation claire consiste à :',
                        'marks' => 1,
                        'explanation' => 'Un événement ou rappel explicite rend le changement traçable. Le composant responsable applique l’opération et actualise l’état.',
                        'choices' => [
                            ['text' => 'Émettre une intention d’archivage vers le responsable de l’état', 'is_correct' => true],
                            ['text' => 'Modifier silencieusement toutes les données du parent', 'is_correct' => false],
                            ['text' => 'Appeler tous les composants voisins', 'is_correct' => false],
                            ['text' => 'Rechercher le parent par son texte dans le DOM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une liste est réordonnée mais les composants conservent de mauvaises valeurs locales car leur identité suit l’index. La correction est de :',
                        'marks' => 1,
                        'explanation' => 'Une clé stable permet de suivre le même élément à travers un réordonnancement. L’index identifie une position, pas nécessairement l’objet métier.',
                        'choices' => [
                            ['text' => 'Utiliser une clé stable propre à chaque élément', 'is_correct' => true],
                            ['text' => 'Utiliser le nombre total comme clé de chaque ligne', 'is_correct' => false],
                            ['text' => 'Générer une nouvelle clé aléatoire à chaque rendu', 'is_correct' => false],
                            ['text' => 'Retirer tous les identifiants métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un composant crée un intervalle à son montage puis disparaît. À sa destruction, il doit :',
                        'marks' => 1,
                        'explanation' => 'Le nettoyage des ressources évite les traitements inutiles et les mises à jour d’un composant disparu. Le même principe concerne les abonnements et certains écouteurs.',
                        'choices' => [
                            ['text' => 'Libérer l’intervalle qu’il a créé', 'is_correct' => true],
                            ['text' => 'Créer un second intervalle de contrôle', 'is_correct' => false],
                            ['text' => 'Réinitialiser toute l’application', 'is_correct' => false],
                            ['text' => 'Conserver l’intervalle pour chaque ancienne instance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux pages utilisent les mêmes appels API et les mêmes règles de transformation. Une bonne extraction consiste à :',
                        'marks' => 1,
                        'explanation' => 'Un service partagé évite la divergence des traitements communs et facilite leur vérification. Il doit garder une responsabilité cohérente.',
                        'choices' => [
                            ['text' => 'Centraliser ces règles dans un service partagé', 'is_correct' => true],
                            ['text' => 'Copier les appels puis les modifier séparément', 'is_correct' => false],
                            ['text' => 'Ajouter les règles dans chaque fichier CSS', 'is_correct' => false],
                            ['text' => 'Lire les réponses depuis le texte du DOM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’URL /cours/42 fonctionne par navigation interne, mais renvoie 404 après actualisation. Le serveur d’une SPA doit, pour une route applicative valide :',
                        'marks' => 1,
                        'explanation' => 'Le serveur reçoit directement la route lors d’une actualisation. Une configuration de repli est nécessaire, sans masquer les vraies erreurs des API ou des fichiers statiques.',
                        'choices' => [
                            ['text' => 'Fournir l’entrée HTML de la SPA', 'is_correct' => true],
                            ['text' => 'Répondre avec un fichier JavaScript nommé 42', 'is_correct' => false],
                            ['text' => 'Supprimer la route du navigateur', 'is_correct' => false],
                            ['text' => 'Convertir la route en feuille CSS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un composant d’édition doit avertir avant de quitter une page contenant des modifications non enregistrées. Le mécanisme frontend adapté est :',
                        'marks' => 1,
                        'explanation' => 'Une garde ou un mécanisme équivalent peut demander confirmation avant une navigation interne. Les fermetures d’onglet et navigations externes nécessitent aussi une gestion adaptée aux possibilités du navigateur.',
                        'choices' => [
                            ['text' => 'Une interception de navigation liée à l’état non enregistré', 'is_correct' => true],
                            ['text' => 'Un rafraîchissement automatique à chaque frappe', 'is_correct' => false],
                            ['text' => 'La suppression de l’historique entier du navigateur', 'is_correct' => false],
                            ['text' => 'Une redirection vers l’accueil après toute saisie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le détail d’un article affiche « introuvable » pendant le chargement initial. Il faut distinguer :',
                        'marks' => 1,
                        'explanation' => 'Une absence temporaire de données n’est pas une preuve d’inexistence. Des états explicites permettent de produire un message juste.',
                        'choices' => [
                            ['text' => 'Chargement, réussite vide et échec', 'is_correct' => true],
                            ['text' => 'La couleur des trois premiers titres', 'is_correct' => false],
                            ['text' => 'Les tailles des fichiers Git', 'is_correct' => false],
                            ['text' => 'Les noms des navigateurs uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une URL doit conserver le filtre choisi pour qu’un lien puisse être partagé. L’emplacement adapté pour ce filtre non sensible est :',
                        'marks' => 1,
                        'explanation' => 'Un paramètre permet de reconstruire l’état de recherche lors de l’ouverture du lien. Les informations sensibles ne doivent pas y être placées.',
                        'choices' => [
                            ['text' => 'Un paramètre de l’URL', 'is_correct' => true],
                            ['text' => 'Une variable locale perdue à l’actualisation', 'is_correct' => false],
                            ['text' => 'Une propriété CSS', 'is_correct' => false],
                            ['text' => 'Un mot de passe de session', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après l’enregistrement d’un article, le composant affiche immédiatement les valeurs de sa requête, alors que le serveur normalise le titre. Pour refléter l’état enregistré, utilisez :',
                        'marks' => 1,
                        'explanation' => 'Le serveur peut normaliser, enrichir ou refuser certaines valeurs. Sa réponse de réussite permet d’aligner l’interface sur l’état réellement conservé.',
                        'choices' => [
                            ['text' => 'Les données confirmées par le serveur', 'is_correct' => true],
                            ['text' => 'La saisie initiale dans tous les cas', 'is_correct' => false],
                            ['text' => 'Une valeur fixe de démonstration', 'is_correct' => false],
                            ['text' => 'Le dernier article consulté par un autre utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un composant de bouton est réutilisé dans plusieurs formulaires. Pour éviter les soumissions involontaires, son interface doit notamment :',
                        'marks' => 1,
                        'explanation' => 'Un composant réutilisable doit préserver la sémantique native et exposer les choix qui changent son comportement, dont le type button ou submit.',
                        'choices' => [
                            ['text' => 'Gérer explicitement le type HTML du bouton', 'is_correct' => true],
                            ['text' => 'Appliquer toujours type="submit" sans option', 'is_correct' => false],
                            ['text' => 'Remplacer le bouton par un span cliquable', 'is_correct' => false],
                            ['text' => 'Retirer tous les événements clavier', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Vérifier le projet avant sa livraison',
                'description' => 'Choisir des tests utiles et rendre l’installation et les essais reproductibles.',
                'difficulty' => 'Intermediate',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Une fonction calcule une remise sans accès externe. Le test le plus ciblé vérifie :',
                        'marks' => 1,
                        'explanation' => 'Un test unitaire vérifie précisément le contrat de la fonction, notamment ses limites et ses entrées invalides si elles font partie du contrat.',
                        'choices' => [
                            ['text' => 'Les résultats pour des entrées et limites définies', 'is_correct' => true],
                            ['text' => 'Seulement le nombre de lignes de son fichier source', 'is_correct' => false],
                            ['text' => 'Seulement le nom de la variable qui contient le résultat', 'is_correct' => false],
                            ['text' => 'La copie exacte du code de calcul sans résultat attendu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’inscription doit être vérifiée depuis la saisie du formulaire jusqu’à la confirmation visible. Le test adapté est :',
                        'marks' => 1,
                        'explanation' => 'Un test de bout en bout traverse les composants nécessaires au parcours utilisateur. Il complète les tests plus ciblés.',
                        'choices' => [
                            ['text' => 'Un test de bout en bout', 'is_correct' => true],
                            ['text' => 'Un test de couleur isolé', 'is_correct' => false],
                            ['text' => 'Une analyse de syntaxe uniquement', 'is_correct' => false],
                            ['text' => 'Une mesure de taille du dépôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test attend toujours exactement deux secondes avant de cliquer et échoue parfois sur une machine lente. Une correction pertinente est de :',
                        'marks' => 1,
                        'explanation' => 'Une attente liée à l’état attendu évite une dépendance arbitraire à la vitesse de la machine. Un délai maximal permet de signaler un véritable échec.',
                        'choices' => [
                            ['text' => 'Attendre un état observable avec un délai maximal', 'is_correct' => true],
                            ['text' => 'Allonger l’attente fixe de deux à trois secondes sur toute machine', 'is_correct' => false],
                            ['text' => 'Ignorer l’échec si le clic finit par fonctionner après plusieurs relances', 'is_correct' => false],
                            ['text' => 'Supprimer l’assertion qui vérifie que le bouton est disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La suite passe uniquement lorsque les tests s’exécutent dans un ordre précis. Il faut chercher :',
                        'marks' => 1,
                        'explanation' => 'Des tests indépendants ne doivent pas dépendre des traces laissées par un autre test. Les données et ressources doivent être isolées ou remises en état.',
                        'choices' => [
                            ['text' => 'Un état partagé ou un nettoyage incomplet', 'is_correct' => true],
                            ['text' => 'Un besoin de conserver l’ordre actuel comme garantie suffisante', 'is_correct' => false],
                            ['text' => 'Une nécessité de masquer les échecs des tests exécutés en dernier', 'is_correct' => false],
                            ['text' => 'Une erreur résolue en réutilisant les données du premier test partout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut réinstaller les dépendances verrouillées dans un environnement d’intégration continue. La commande npm courante adaptée est :',
                        'marks' => 1,
                        'explanation' => 'npm ci utilise le fichier de verrouillage et exige sa cohérence avec package.json. Cette commande convient à une installation automatisée reproductible.',
                        'choices' => [
                            ['text' => 'npm ci', 'is_correct' => true],
                            ['text' => 'npm init', 'is_correct' => false],
                            ['text' => 'npm outdated', 'is_correct' => false],
                            ['text' => 'npm search', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vérification statique signale une variable inutilisée avant toute exécution. Elle provient typiquement de :',
                        'marks' => 1,
                        'explanation' => 'Un linter analyse le code et signale des problèmes selon ses règles. Cela ne remplace pas les tests du comportement.',
                        'choices' => [
                            ['text' => 'Un analyseur de code ou linter', 'is_correct' => true],
                            ['text' => 'Un équilibreur de charge', 'is_correct' => false],
                            ['text' => 'Une sauvegarde SQL', 'is_correct' => false],
                            ['text' => 'Un enregistrement DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le correctif d’un bug de calcul est prêt. Pour éviter son retour, ajoutez :',
                        'marks' => 1,
                        'explanation' => 'Un test de régression exprime le comportement attendu et échoue si le défaut est réintroduit.',
                        'choices' => [
                            ['text' => 'Un test reproduisant le défaut corrigé', 'is_correct' => true],
                            ['text' => 'Un commentaire affirmant que le calcul ne contient plus de défaut', 'is_correct' => false],
                            ['text' => 'Un test qui accepte indifféremment le résultat ancien ou le nouveau', 'is_correct' => false],
                            ['text' => 'Un test qui vérifie seulement l’absence d’erreur de syntaxe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une page affiche un faux succès quand l’API renvoie une erreur de validation. Un test utile doit simuler :',
                        'marks' => 1,
                        'explanation' => 'Le scénario d’échec vérifie le contrat entre réponse API et état de l’interface. Le parcours de réussite ne couvre pas ce risque.',
                        'choices' => [
                            ['text' => 'Un refus de validation et son affichage', 'is_correct' => true],
                            ['text' => 'Une réponse 200 contenant uniquement les données idéales', 'is_correct' => false],
                            ['text' => 'Une panne réseau sans jamais simuler le refus de validation', 'is_correct' => false],
                            ['text' => 'Une capture de la page sans vérifier son message de résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une dépendance doit être mise à jour. Avant de livrer, l’équipe doit :',
                        'marks' => 1,
                        'explanation' => 'Une compilation réussie ne prouve pas la compatibilité du comportement. Les changements annoncés orientent les vérifications nécessaires.',
                        'choices' => [
                            ['text' => 'Examiner les changements et tester les usages affectés', 'is_correct' => true],
                            ['text' => 'Accepter la nouvelle version dès que l’installation se termine', 'is_correct' => false],
                            ['text' => 'Vérifier seulement que le nom du paquet reste identique', 'is_correct' => false],
                            ['text' => 'Supprimer les tests qui échouent avec la nouvelle version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test de date utilise new Date() et échoue autour de minuit. Pour le rendre reproductible, une correction adaptée est de :',
                        'marks' => 1,
                        'explanation' => 'Une horloge injectée ou simulée permet de tester des instants choisis, y compris les changements de jour. Il faut restaurer l’horloge après le test pour ne pas affecter les autres.',
                        'choices' => [
                            ['text' => 'Contrôler l’horloge utilisée par le code testé', 'is_correct' => true],
                            ['text' => 'Exécuter les tests uniquement avant midi sur le poste habituel', 'is_correct' => false],
                            ['text' => 'Retirer toutes les vérifications qui portent sur une date', 'is_correct' => false],
                            ['text' => 'Transformer les échecs autour de minuit en réussites automatiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'HTML avancé et accessibilité',
            'CSS avancé et Responsive Design',
            'JavaScript intermédiaire',
            'DOM, événements et formulaires',
            'HTTP, REST et API',
            'Asynchronous JavaScript et Fetch',
            'Frontend et architecture',
            'Sécurité et bonnes pratiques Web',
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
