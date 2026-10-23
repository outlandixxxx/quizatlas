<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Choice;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;


class MobileDevelopmentIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mobile-development')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Gestion de l’état et interfaces réactives',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau intermédiaire.',
                'questions' => [
                    [
                        'question' => 'Dans un écran de panier, le total affiché diverge parfois du total calculé au paiement. L’équipe conserve deux copies modifiables du même panier. Quelle correction réduit le risque de divergence ?',
                        'choices' => [
                            'Recalculer le total uniquement à la fermeture de l’écran',
                            'Faire du panier une source de vérité unique et calculer le total à partir de ses lignes',
                            'Mettre à jour séparément le total à chaque interaction',
                            'Conserver une copie dans chaque widget',
                        ],
                        'correct' => 1,
                        'explanation' => 'Deux valeurs modifiables pour la même donnée peuvent diverger. Le total dérivé doit être calculé depuis la source de vérité.'
                    ],
                    [
                        'question' => 'Un formulaire affiche la liste des villes correspondant au texte saisi. Les résultats arrivent de manière asynchrone et une ancienne réponse remplace parfois la plus récente. Quelle stratégie traite ce défaut ?',
                        'choices' => [
                            'Bloquer le champ jusqu’à la fermeture de l’application',
                            'Garder uniquement la première réponse reçue',
                            'Associer chaque recherche à sa requête et ignorer les réponses devenues obsolètes',
                            'Mettre toutes les réponses dans une file sans vérifier leur ordre',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les requêtes concurrentes peuvent finir dans un ordre différent de leur lancement. Il faut annuler ou ignorer le résultat d’une requête périmée.'
                    ],
                    [
                        'question' => 'Après une rotation d’écran, un filtre sélectionné est perdu alors que la liste reste affichée. Le filtre est détenu uniquement par le composant visuel. Où le placer ?',
                        'choices' => [
                            'Dans une variable globale mutable partagée par tous les écrans',
                            'Dans le texte du titre de la page',
                            'Dans une constante reconstruite à chaque rendu',
                            'Dans un état conservé par le composant de niveau approprié ou son modèle de présentation',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un état qui doit survivre à la recréation de l’interface ne doit pas dépendre uniquement de la vue éphémère.'
                    ],
                    [
                        'question' => 'Une vue se redessine à chaque mise à jour d’un compteur sans rapport avec elle. Quel ajustement est le plus pertinent ?',
                        'choices' => [
                            'Limiter les abonnements aux données réellement utilisées par cette vue',
                            'Déplacer toutes les données dans un état global',
                            'Désactiver les mises à jour de l’interface',
                            'Ajouter un délai fixe à chaque rendu',
                        ],
                        'correct' => 0,
                        'explanation' => 'Réduire la portée des dépendances évite des reconstructions inutiles tout en conservant les mises à jour nécessaires.'
                    ],
                    [
                        'question' => 'Un écran de profil combine le résultat d’une API, un indicateur de chargement et un message d’erreur indépendant. Quelle représentation aide à éviter des combinaisons impossibles, comme « chargement » et « erreur finale » simultanément ?',
                        'choices' => [
                            'Une variable globale sans propriétaire',
                            'Un état explicite avec des variantes exclusives, par exemple chargement, succès ou échec',
                            'Trois booléens indépendants sans règle de transition',
                            'Un seul texte libre modifié depuis plusieurs callbacks',
                        ],
                        'correct' => 1,
                        'explanation' => 'Des variantes d’état explicites rendent les états valides et leurs transitions plus faciles à contrôler.'
                    ],
                    [
                        'question' => 'Le bouton « Enregistrer » est touché deux fois avant la réponse du serveur, créant deux demandes identiques. Quel comportement côté interface est le plus adapté ?',
                        'choices' => [
                            'Masquer toute erreur reçue du serveur',
                            'Créer deux états locaux séparés pour la même opération',
                            'Désactiver temporairement l’action ou dédupliquer la commande en cours',
                            'Relancer immédiatement la demande avec un délai plus court',
                        ],
                        'correct' => 2,
                        'explanation' => 'La prévention des doubles soumissions évite les opérations dupliquées et donne un retour clair pendant le traitement.'
                    ],
                    [
                        'question' => 'Une application conserve en mémoire le résultat d’une recherche et l’écran recalcule le même tri à chaque rendu. Le tri n’est pas coûteux et dépend directement des résultats. Quelle approche est la plus simple ?',
                        'choices' => [
                            'Persister une seconde copie du résultat trié sur disque',
                            'Mettre le tri dans un service réseau',
                            'Dupliquer la liste pour chaque composant',
                            'Dériver le résultat trié des données et du critère de tri, puis le mémoriser seulement si le profilage le justifie',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une donnée calculable ne devrait pas devenir une source de vérité supplémentaire. La mémorisation est utile si son coût est mesuré.'
                    ],
                    [
                        'question' => 'Un composant conserve un abonnement à un flux après avoir quitté l’écran. Quel risque est le plus direct ?',
                        'choices' => [
                            'Des ressources retenues et des mises à jour adressées à un écran qui n’est plus actif',
                            'Une meilleure garantie de cohérence des données',
                            'Une réduction automatique de la consommation mémoire',
                            'La conversion du flux en requête HTTP',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un abonnement non libéré peut retenir des objets et déclencher des callbacks après la fin de vie de l’écran.'
                    ],
                    [
                        'question' => 'Une équipe veut tester la logique de validation d’un formulaire sans lancer l’interface. Quel découpage facilite ce test ?',
                        'choices' => [
                            'Utiliser la base de production comme oracle',
                            'Extraire les règles de validation dans une fonction ou un composant indépendant de la vue',
                            'Déclencher la validation uniquement depuis le rendu graphique',
                            'Stocker les règles dans des chaînes de traduction',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une logique métier indépendante de l’interface peut être testée rapidement avec des entrées et résultats contrôlés.'
                    ],
                    [
                        'question' => 'L’utilisateur quitte un écran pendant une requête de détail. Le résultat arrive ensuite et modifie un état partagé. Quelle précaution est la plus utile ?',
                        'choices' => [
                            'Conserver toutes les requêtes jusqu’au prochain démarrage',
                            'Ignorer systématiquement tous les résultats asynchrones',
                            'Annuler la requête si possible ou vérifier que le contexte demandeur est encore valide avant de publier le résultat',
                            'Réafficher automatiquement l’écran quitté',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le cycle de vie de l’écran doit être pris en compte afin qu’un résultat tardif ne produise pas d’effet indésirable.'
                    ],
                    [
                        'question' => 'Après une erreur de validation, le modèle conserve aussi le message de succès de la requête précédente. Quelle transition évite cet état contradictoire ?',
                        'choices' => [
                            'Ajouter le nouveau message sans retirer l’ancien',
                            'Conserver un booléen de succès indépendant de toute requête',
                            'Réutiliser le résultat de la soumission précédente',
                            'Réinitialiser ou remplacer l’état de résultat au début de la nouvelle soumission',
                        ],
                        'correct' => 3,
                        'explanation' => 'Chaque soumission doit produire un état cohérent lié à cette opération, sans laisser un succès obsolète coexister avec l’échec courant.'
                    ],
                ],
            ],
            [
                'title' => 'Navigation, liens profonds et parcours',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau intermédiaire.',
                'questions' => [
                    [
                        'question' => 'Depuis une notification, un utilisateur ouvre directement la facture 482. Il n’est pas connecté. Quel parcours respecte à la fois le lien et la protection des données ?',
                        'choices' => [
                            'Faire confiance à l’identifiant inclus dans le lien',
                            'Mémoriser la destination, authentifier l’utilisateur, vérifier son accès puis ouvrir la facture',
                            'Afficher la facture avant l’authentification puis masquer son contenu',
                            'Rediriger vers l’accueil en supprimant toujours la destination',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un deep link ne confère aucun droit. Il faut authentifier et autoriser l’accès avant de présenter la ressource.'
                    ],
                    [
                        'question' => 'Dans un flux d’achat, le bouton Retour devrait ramener de la confirmation au récapitulatif, sans recréer le panier. Quel modèle de navigation convient ?',
                        'choices' => [
                            'Ouvrir chaque écran dans une pile indépendante sans règle de retour',
                            'Traiter le bouton Retour comme une fermeture de session',
                            'Empiler les écrans du parcours et retirer l’écran courant au retour',
                            'Remplacer à chaque étape toute la pile par un nouvel écran',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une pile cohérente conserve l’historique utile et permet de revenir à l’étape précédente.'
                    ],
                    [
                        'question' => 'Un lien externe contient un identifiant de commande absent ou mal formé. Que doit faire le routeur ?',
                        'choices' => [
                            'Construire directement une requête SQL avec le texte reçu',
                            'Remplacer l’identifiant manquant par celui de la dernière commande',
                            'Ignorer toute validation car le lien vient du système',
                            'Valider le paramètre, puis afficher un état d’erreur ou une destination de secours adaptée',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les données d’un lien externe sont des entrées non fiables et doivent être validées avant utilisation.'
                    ],
                    [
                        'question' => 'Un onglet conserve sa position de défilement quand l’utilisateur passe à un autre onglet puis revient. Quelle exigence d’architecture exprime ce comportement ?',
                        'choices' => [
                            'Chaque flux d’onglet conserve son propre état de navigation et de présentation',
                            'Tous les onglets partagent obligatoirement le même écran courant',
                            'Le changement d’onglet doit vider toute l’application',
                            'La position doit être codée en dur dans la vue',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les piles ou états indépendants par onglet permettent de reprendre un parcours sans effacer celui des autres sections.'
                    ],
                    [
                        'question' => 'Une boîte de confirmation s’ouvre au-dessus d’un formulaire et l’utilisateur peut l’annuler sans perdre ses saisies. Pourquoi une présentation modale est-elle adaptée ?',
                        'choices' => [
                            'Elle empêche le système de gérer le bouton Retour',
                            'Elle garde le formulaire comme contexte sous-jacent pendant l’action ciblée',
                            'Elle transforme le formulaire en donnée persistante',
                            'Elle garantit que la confirmation sera acceptée',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une modale permet une décision ponctuelle tout en conservant le contexte de l’écran d’origine.'
                    ],
                    [
                        'question' => 'Une notification et un lien web peuvent ouvrir le même écran de réservation. Comment éviter deux implémentations divergentes ?',
                        'choices' => [
                            'Interdire l’ouverture depuis le navigateur',
                            'Créer un identifiant d’écran différent pour chaque source',
                            'Faire converger les deux entrées vers une résolution de route commune avec validation des paramètres',
                            'Copier le code de navigation dans chaque gestionnaire',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une résolution commune centralise le traitement des paramètres et limite les différences entre points d’entrée.'
                    ],
                    [
                        'question' => 'Après connexion, l’utilisateur revient à l’accueil au lieu de l’article qu’il avait demandé via un lien profond. Quel élément manque probablement ?',
                        'choices' => [
                            'Une nouvelle pile pour chaque requête réseau',
                            'La suppression des paramètres de route',
                            'Une animation plus longue',
                            'La conservation puis la reprise de la destination initiale après authentification',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le parcours d’authentification doit reprendre la destination autorisée qui avait déclenché la redirection.'
                    ],
                    [
                        'question' => 'Un écran de paiement est ouvert deux fois par une succession rapide de taps. Quel garde-fou réduit le risque de doublons ?',
                        'choices' => [
                            'Rendre la transition ou la commande idempotente et empêcher les navigations répétées en cours',
                            'Créer un nouvel écran pour chaque tap',
                            'Désactiver la validation du formulaire',
                            'Conserver plusieurs gestionnaires de navigation actifs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un garde-fou de navigation et une commande idempotente évitent que des interactions répétées déclenchent plusieurs paiements.'
                    ],
                    [
                        'question' => 'Une destination peut être ouverte depuis plusieurs endroits, mais certains utilisateurs n’ont pas le rôle requis. À quel niveau vérifier ce rôle ?',
                        'choices' => [
                            'Dans le nom de la route',
                            'Dans la logique d’accès à la ressource, et aussi côté serveur pour toute donnée protégée',
                            'Uniquement dans le libellé du bouton qui ouvre l’écran',
                            'Uniquement dans l’animation de transition',
                        ],
                        'correct' => 1,
                        'explanation' => 'Masquer un bouton améliore l’interface mais ne remplace pas un contrôle d’autorisation sur les opérations et données protégées.'
                    ],
                    [
                        'question' => 'Une application affiche un écran de détail dans une modale depuis la recherche. Quelle information devrait guider le choix entre modale et navigation classique ?',
                        'choices' => [
                            'Le nombre de dépendances du projet',
                            'La taille de la base locale',
                            'La relation du détail avec le parcours courant et la manière dont l’utilisateur doit revenir',
                            'La couleur dominante de l’icône de l’application',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le mode de présentation se choisit selon le contexte du parcours, la portée de l’action et le comportement de retour attendu.'
                    ],
                ],
            ],
            [
                'title' => 'API, erreurs et sécurité des échanges',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau intermédiaire.',
                'questions' => [
                    [
                        'question' => 'Le serveur répond 401 après expiration du jeton d’accès. Quel traitement client est généralement approprié ?',
                        'choices' => [
                            'Répéter indéfiniment la même requête avec le jeton expiré',
                            'Transformer la réponse en succès vide',
                            'Afficher les données en cache comme si elles étaient à jour',
                            'Tenter un renouvellement contrôlé si le mécanisme le prévoit, sinon demander une nouvelle authentification',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un 401 indique un problème d’authentification ; une stratégie de renouvellement bornée ou une reconnexion est préférable aux retries aveugles.'
                    ],
                    [
                        'question' => 'Le serveur renvoie 403 pour une ressource. L’application propose de modifier l’identifiant dans l’URL jusqu’à obtenir 200. Quel principe cette approche viole-t-elle ?',
                        'choices' => [
                            'L’autorisation doit être décidée par le serveur pour l’utilisateur et la ressource concernés',
                            'Les réponses JSON doivent être triées alphabétiquement',
                            'Les requêtes GET doivent contenir un corps',
                            'Les erreurs HTTP doivent être ignorées sur mobile',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un client ne peut pas contourner une décision d’accès en changeant un identifiant. Le serveur doit appliquer les règles d’autorisation.'
                    ],
                    [
                        'question' => 'Après une mise à jour du backend, un champ auparavant obligatoire peut être absent. Quelle adaptation rend le décodage plus robuste ?',
                        'choices' => [
                            'Désactiver la validation des réponses',
                            'Modéliser explicitement le champ comme optionnel lorsque le contrat le permet et traiter son absence',
                            'Remplacer toute réponse invalide par une valeur aléatoire',
                            'Faire planter l’application au premier champ manquant',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le modèle client doit refléter le contrat réel et prévoir les cas d’absence ou d’erreur sans masquer une incompatibilité importante.'
                    ],
                    [
                        'question' => 'Une recherche déclenchée à chaque frappe envoie trop de requêtes. Quel réglage réduit le trafic sans retarder excessivement le retour ?',
                        'choices' => [
                            'Télécharger toutes les données de l’API au démarrage',
                            'Mettre les frappes en cache permanent avant validation',
                            'Appliquer un debounce court, annuler les recherches obsolètes et éventuellement dédupliquer les demandes',
                            'Appliquer un retry immédiat à chaque frappe',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le debounce regroupe les saisies rapprochées ; l’annulation et la déduplication empêchent le travail devenu inutile.'
                    ],
                    [
                        'question' => 'Le client doit réessayer une création de commande après un timeout, sans savoir si le serveur l’a déjà traitée. Quelle protection côté API est la plus pertinente ?',
                        'choices' => [
                            'Changer l’identifiant de commande à chaque tentative',
                            'Réessayer sans limite en HTTP POST',
                            'Désactiver les timeouts',
                            'Envoyer une clé d’idempotence prise en charge par le serveur',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un timeout ne prouve pas que le serveur n’a rien exécuté. Une clé d’idempotence permet de reconnaître les tentatives répétées.'
                    ],
                    [
                        'question' => 'Une erreur réseau survient pendant le chargement du profil. Quelle interface communique correctement l’état et laisse une action de récupération ?',
                        'choices' => [
                            'Conserver les données utilisables si elles existent, expliquer l’échec et proposer une nouvelle tentative',
                            'Afficher un écran vide sans action',
                            'Indiquer que le profil a été supprimé',
                            'Réessayer en boucle sans informer l’utilisateur',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’interface doit distinguer l’échec réseau des données absentes et proposer une récupération appropriée.'
                    ],
                    [
                        'question' => 'Une réponse contient un jeton d’accès. Où ne faut-il surtout pas le recopier ?',
                        'choices' => [
                            'Dans l’en-tête d’autorisation transmis au serveur',
                            'Dans les journaux applicatifs ou les rapports d’erreur non protégés',
                            'Dans le stockage sécurisé prévu par la plateforme, si nécessaire',
                            'Dans la mémoire utilisée pour l’appel en cours',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les journaux sont souvent collectés et consultables. Un jeton y exposé peut permettre un accès non autorisé.'
                    ],
                    [
                        'question' => 'Une application utilise HTTPS mais accepte tous les certificats lors d’une erreur de validation. Quel est le problème ?',
                        'choices' => [
                            'Elle transforme automatiquement HTTP en TLS',
                            'Elle protège le jeton même si la connexion est interceptée',
                            'Cette exception annule l’authentification normale du serveur et ouvre la voie à une interception',
                            'Elle améliore la vérification du nom d’hôte',
                        ],
                        'correct' => 2,
                        'explanation' => 'HTTPS n’est sûr que si la validation TLS reste effective ; accepter tout certificat supprime une défense essentielle.'
                    ],
                    [
                        'question' => 'Un backend renvoie un code 500 pour une opération de lecture. Pourquoi ne faut-il pas traiter cette réponse comme un résultat vide normal ?',
                        'choices' => [
                            'Un code 500 signifie toujours que la ressource n’existe pas',
                            'Les réponses d’erreur ne contiennent jamais de contexte utile',
                            'Une liste vide est nécessairement équivalente à une panne',
                            'Elle signale une défaillance serveur distincte d’une réponse réussie sans élément',
                        ],
                        'correct' => 3,
                        'explanation' => 'Distinguer panne et absence de résultat permet d’afficher un état juste et de choisir une stratégie de reprise adaptée.'
                    ],
                    [
                        'question' => 'Une API renvoie une date dans un format inattendu. Quelle démarche évite de propager une valeur mal interprétée dans l’interface ?',
                        'choices' => [
                            'Valider le format au décodage et traiter explicitement l’échec de conversion',
                            'Convertir silencieusement toute chaîne en date locale',
                            'Afficher la chaîne comme date confirmée',
                            'Remplacer la date par l’heure actuelle',
                        ],
                        'correct' => 0,
                        'explanation' => 'La validation au point d’entrée empêche une donnée mal formée de devenir un état métier trompeur.'
                    ],
                    [
                        'question' => 'Le client reçoit 429 avec une indication de délai de reprise. Quel comportement respecte le mieux cette réponse ?',
                        'choices' => [
                            'Créer davantage de requêtes parallèles',
                            'Différer la nouvelle tentative selon l’indication du serveur et appliquer une limite de retries',
                            'Relancer immédiatement en boucle',
                            'Convertir 429 en 200 dans le modèle local',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le code 429 signale une limitation de débit ; le client doit respecter le délai fourni et éviter d’aggraver la charge.'
                    ],
                ],
            ],
            [
                'title' => 'Persistance locale et synchronisation',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau intermédiaire.',
                'questions' => [
                    [
                        'question' => 'Une note est créée hors ligne, puis l’application est arrêtée avant le retour du réseau. Quelle conception évite de perdre l’action ?',
                        'choices' => [
                            'Garder la note uniquement dans la mémoire de l’écran',
                            'Attendre le réseau avant toute saisie',
                            'Effacer le brouillon lors de la fermeture',
                            'Enregistrer durablement la note et la mutation en attente avant d’annoncer qu’elles sont conservées',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une mutation hors ligne doit être persistée localement si l’application promet qu’elle survivra à un redémarrage.'
                    ],
                    [
                        'question' => 'Deux appareils modifient le même texte hors ligne. À la reconnexion, le système choisit toujours la version ayant l’horodatage le plus récent. Quel risque faut-il expliquer ?',
                        'choices' => [
                            'Une modification concurrente peut être écrasée sans que son auteur le sache',
                            'La synchronisation devient impossible même sans conflit',
                            'Les horodatages empêchent tout décalage d’horloge',
                            'La version la plus récente contient toujours le meilleur contenu',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le choix « dernier écrit gagnant » est simple mais peut supprimer une modification valide ; le produit doit définir une règle de conflit adaptée.'
                    ],
                    [
                        'question' => 'Une synchronisation redémarre après interruption et rejoue les mêmes opérations en attente. Quelle propriété rend ce mécanisme plus sûr ?',
                        'choices' => [
                            'La file est vidée avant l’envoi',
                            'Les opérations sont idempotentes ou identifiées de façon à éviter les effets en double',
                            'Chaque retry reçoit un nouvel identifiant logique',
                            'Le client ignore les accusés de réception',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les retries sont normaux dans un réseau mobile ; la déduplication côté client ou serveur limite les doubles effets.'
                    ],
                    [
                        'question' => 'Une base locale change de schéma entre deux versions de l’application. Quel mécanisme protège les données existantes ?',
                        'choices' => [
                            'Une modification du seul modèle d’interface',
                            'Une mise à jour silencieuse sans connaître la version stockée',
                            'Une migration versionnée qui transforme explicitement l’ancien schéma vers le nouveau',
                            'La suppression systématique de la base au lancement',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les migrations décrivent les transformations nécessaires à partir de la version réellement présente sur l’appareil.'
                    ],
                    [
                        'question' => 'Un cache conserve une liste de tarifs qui peut changer quotidiennement. Quelle politique répond au besoin de fraîcheur ?',
                        'choices' => [
                            'Garder la première réponse sans date d’expiration',
                            'Vider le cache à chaque rendu',
                            'Remplacer le cache par un état global non persistant',
                            'Définir une durée de validité ou une revalidation et afficher clairement les données périmées si nécessaire',
                        ],
                        'correct' => 3,
                        'explanation' => 'La stratégie doit équilibrer disponibilité hors ligne et fraîcheur ; l’invalidation doit être définie explicitement.'
                    ],
                    [
                        'question' => 'Une liste locale est modifiée hors ligne tandis que le serveur reçoit aussi des changements. À quoi sert la phase de réconciliation ?',
                        'choices' => [
                            'À comparer les versions et appliquer la règle de résolution prévue pour les divergences',
                            'À remplacer systématiquement toutes les données locales par celles du serveur',
                            'À chiffrer les enregistrements après coup',
                            'À supprimer les éléments sans connexion',
                        ],
                        'correct' => 0,
                        'explanation' => 'La réconciliation détermine comment traiter les changements divergents selon les règles métier, plutôt que d’écraser aveuglément un côté.'
                    ],
                    [
                        'question' => 'Un dépôt de données choisit entre cache local et API. Quel avantage apporte une couche Repository bien définie ?',
                        'choices' => [
                            'Elle transforme automatiquement chaque API en base locale',
                            'Elle centralise l’accès aux sources et peut exposer une interface cohérente au reste de l’application',
                            'Elle garantit que les données ne deviennent jamais obsolètes',
                            'Elle supprime le besoin de définir une stratégie de synchronisation',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le repository masque les détails de source mais la fraîcheur et la synchronisation exigent toujours une politique explicite.'
                    ],
                    [
                        'question' => 'Une application stocke localement un jeton de session. Quelle mesure est la plus appropriée ?',
                        'choices' => [
                            'L’ajouter aux journaux pour le retrouver',
                            'Le partager dans un fichier accessible à tous les composants',
                            'Utiliser le stockage sécurisé de la plateforme et limiter la durée et les droits du jeton',
                            'Le placer dans une préférence en clair pour simplifier le débogage',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les mécanismes sécurisés de la plateforme et des jetons à portée limitée réduisent l’impact d’un accès local non autorisé.'
                    ],
                    [
                        'question' => 'Un enregistrement supprimé localement réapparaît à la prochaine synchronisation depuis un autre appareil. Quel élément manque probablement ?',
                        'choices' => [
                            'Une copie supplémentaire de l’enregistrement dans l’interface',
                            'Un cache de durée plus longue',
                            'Une requête de lecture lancée avant le démarrage',
                            'Une représentation durable de la suppression, propagée aux autres répliques',
                        ],
                        'correct' => 3,
                        'explanation' => 'Sans signal de suppression synchronisable, une autre réplique peut considérer que l’élément existe encore et le renvoyer.'
                    ],
                    [
                        'question' => 'L’équipe veut permettre la consultation hors ligne, mais les données peuvent contenir des informations sensibles. Quel arbitrage doit être documenté ?',
                        'choices' => [
                            'Quelles données sont nécessaires hors ligne, combien de temps les garder et comment les protéger',
                            'Le nombre de couleurs de l’écran hors ligne',
                            'L’ordre des boutons de navigation',
                            'Le fournisseur de l’IDE',
                        ],
                        'correct' => 0,
                        'explanation' => 'La disponibilité hors ligne doit être mise en balance avec la minimisation, la durée de conservation et la protection des données locales.'
                    ],
                ],
            ],
            [
                'title' => 'Tests et architecture applicative',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau intermédiaire.',
                'questions' => [
                    [
                        'question' => 'Une règle calcule les frais de livraison selon le pays et le montant du panier. Quel test est le plus rapide à écrire pour couvrir les cas limites sans réseau ?',
                        'choices' => [
                            'Un test d’intégration dépendant de l’API réelle',
                            'Un test unitaire de la règle avec plusieurs entrées et résultats attendus',
                            'Un test manuel uniquement sur un téléphone de production',
                            'Un test de navigation qui n’exécute pas le calcul',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une logique déterministe isolée se prête à des tests unitaires rapides, y compris les limites et cas d’erreur.'
                    ],
                    [
                        'question' => 'Un test d’écran échoue parfois parce que la réponse API arrive à des instants différents. Quelle amélioration donne un résultat plus fiable ?',
                        'choices' => [
                            'Désactiver les assertions sur les données',
                            'Relancer le test jusqu’à ce qu’il réussisse',
                            'Remplacer le service distant par un faux contrôlable et synchroniser explicitement l’attente',
                            'Ajouter une pause arbitraire de plusieurs secondes à chaque test',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une dépendance de test déterministe permet de contrôler les réponses et le moment où elles surviennent.'
                    ],
                    [
                        'question' => 'Une couverture de code atteint 95 %, mais les tests ne vérifient jamais le montant final facturé. Que conclure ?',
                        'choices' => [
                            'Le produit est nécessairement exempt de défauts',
                            'Il faut supprimer les tests du calcul',
                            'Le pourcentage garantit la conformité métier',
                            'La couverture seule ne prouve pas que les comportements critiques sont correctement vérifiés',
                        ],
                        'correct' => 3,
                        'explanation' => 'La couverture mesure l’exécution du code, pas la pertinence des assertions ni la validité des exigences testées.'
                    ],
                    [
                        'question' => 'Un écran réalise directement des requêtes HTTP et convertit lui-même les réponses en modèles métier. Quel découpage facilite les tests et l’évolution ?',
                        'choices' => [
                            'Confier l’accès aux données à une couche dédiée et garder l’écran centré sur la présentation',
                            'Déplacer les requêtes dans chaque bouton',
                            'Mettre tout le code dans une classe globale unique',
                            'Faire dépendre le modèle métier des widgets visuels',
                        ],
                        'correct' => 0,
                        'explanation' => 'La séparation entre présentation et accès aux données réduit le couplage et permet de tester chaque responsabilité séparément.'
                    ],
                    [
                        'question' => 'Une classe construit elle-même une base de données concrète et le client HTTP dans son constructeur. Pourquoi injecter ces dépendances ?',
                        'choices' => [
                            'Pour rendre toutes les classes globales',
                            'Pour permettre de remplacer les implémentations, notamment par des doublures de test',
                            'Pour garantir qu’aucune dépendance n’existe',
                            'Pour exécuter le réseau sur le thread graphique',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’injection sépare la construction des dépendances de leur usage et facilite les tests ainsi que les changements d’implémentation.'
                    ],
                    [
                        'question' => 'Une suite de tests d’interface vérifie les noms privés de méthodes internes. Après un refactoring sans changement visible, elle casse. Quelle révision rend les tests plus robustes ?',
                        'choices' => [
                            'Supprimer tout test d’interface',
                            'Désactiver le refactoring',
                            'Vérifier les comportements observables et les résultats accessibles à l’utilisateur',
                            'Ajouter encore plus d’assertions sur les méthodes privées',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les tests axés sur le contrat visible tolèrent mieux les changements internes qui ne modifient pas le comportement.'
                    ],
                    [
                        'question' => 'Un défaut apparaît seulement quand le dépôt, la base locale et l’API sont combinés. Quel niveau de test complète les tests unitaires ?',
                        'choices' => [
                            'Un test de couleur de thème',
                            'Un test unitaire isolé du dépôt seulement',
                            'Un test de compilation sans exécution',
                            'Un test d’intégration couvrant les interactions entre ces composants',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un test d’intégration valide les interactions réelles entre plusieurs éléments, là où un test unitaire les isole.'
                    ],
                    [
                        'question' => 'Une petite application à deux écrans reçoit une proposition de dizaines d’interfaces et de modules génériques. Quel critère devrait guider la décision ?',
                        'choices' => [
                            'Adopter les abstractions qui répondent à un besoin observable sans ajouter une complexité disproportionnée',
                            'Créer toutes les abstractions pour anticiper toute évolution imaginable',
                            'Éviter toute séparation de responsabilités',
                            'Choisir selon le nombre de fichiers générés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une architecture doit répondre au niveau de complexité réel ; une abstraction prématurée peut rendre le code plus difficile à comprendre.'
                    ],
                    [
                        'question' => 'Un test de synchronisation dépend d’un service tiers indisponible une fois sur dix. Quelle séparation améliore la stabilité de la CI ?',
                        'choices' => [
                            'Remplacer les assertions par des captures d’écran',
                            'Tester le contrat avec des réponses contrôlées en CI et réserver les vérifications réelles à une suite adaptée',
                            'Réessayer tous les tests sans limite',
                            'Ignorer les échecs lorsqu’ils concernent le réseau',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les tests ordinaires doivent être reproductibles ; des tests dépendant d’un tiers peuvent être isolés et surveillés séparément.'
                    ],
                    [
                        'question' => 'Une équipe ajoute une correction et veut savoir si elle a cassé un parcours existant de connexion. Quelle pratique aide le plus à chaque modification ?',
                        'choices' => [
                            'Supprimer l’ancien scénario de test',
                            'Tester seulement sur l’appareil du développeur',
                            'Conserver un test de non-régression du parcours concerné dans le pipeline',
                            'Vérifier uniquement que le projet compile',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un test de non-régression automatise la vérification répétée du comportement qui avait déjà connu un défaut.'
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $questionCount = count($quizData['questions']);
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => max(15, (int) ceil($questionCount * 15 / 10)),
                    'passing_score' => 60,
                    'total_marks' => $questionCount,
                    'is_active' => true,
                    'difficulty' => 'Intermediate',
                ]
            );

                foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    ['quiz_id' => $quiz->id, 'order' => $index + 1],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );
                $question->choices()->delete();
                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
