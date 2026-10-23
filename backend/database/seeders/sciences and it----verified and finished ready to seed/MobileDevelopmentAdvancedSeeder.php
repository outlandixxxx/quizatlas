<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Choice;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;


class MobileDevelopmentAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mobile-development')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Architecture modulaire et frontières métier',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau avancé.',
                'questions' => [
                    [
                        'question' => 'Une équipe constate que chaque changement dans le stockage impose de modifier plusieurs écrans. Quelle frontière réduit le couplage ?',
                        'choices' => [
                            'Faire dépendre les règles métier du framework de base de données',
                            'Faire dépendre les cas d’usage d’une abstraction de dépôt implémentée par l’infrastructure',
                            'Laisser chaque écran construire sa connexion SQL',
                            'Copier les requêtes dans chaque module fonctionnel',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une abstraction tournée vers le domaine permet de remplacer l’implémentation de stockage sans propager ses détails dans la présentation.'
                    ],
                    [
                        'question' => 'Deux équipes emploient le terme « compte » pour désigner respectivement un client facturé et un utilisateur connecté. Quelle décision évite un modèle partagé ambigu ?',
                        'choices' => [
                            'Laisser chaque service interpréter le même objet à sa manière',
                            'Renommer les champs sans préciser leur sémantique',
                            'Définir des frontières de contexte et traduire explicitement les modèles entre ces domaines',
                            'Fusionner toutes les propriétés dans une seule classe globale',
                        ],
                        'correct' => 2,
                        'explanation' => 'Des contextes bornés maintiennent la cohérence locale des termes et exigent une traduction aux frontières.'
                    ],
                    [
                        'question' => 'Un module de paiement importe directement des classes internes de trois autres modules. Quel indicateur justifie une revue des frontières ?',
                        'choices' => [
                            'Le module possède des tests unitaires',
                            'Le code utilise des interfaces publiques',
                            'Le projet contient plusieurs dossiers',
                            'Les changements internes se propagent largement et les dépendances traversent les domaines',
                        ],
                        'correct' => 3,
                        'explanation' => 'Des dépendances transversales nombreuses signalent des frontières peu stables et augmentent l’impact des modifications.'
                    ],
                    [
                        'question' => 'Une application prévoit plusieurs fournisseurs d’authentification, mais un seul est requis à court terme. Quelle conception reste raisonnable ?',
                        'choices' => [
                            'Isoler l’intégration derrière une interface utile au besoin actuel, sans inventer une plateforme générique prématurée',
                            'Créer une hiérarchie de plugins exhaustive pour tous les fournisseurs imaginables',
                            'Faire importer le SDK du fournisseur dans chaque écran',
                            'Éviter toute séparation même si le SDK est utilisé partout',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une frontière ciblée limite le couplage sans créer de complexité spéculative.'
                    ],
                    [
                        'question' => 'Un événement « commande confirmée » est émis avant la validation transactionnelle en base. Quel risque en découle ?',
                        'choices' => [
                            'La transaction n’a plus besoin de contrôle d’erreur',
                            'Les consommateurs peuvent agir sur une confirmation qui sera finalement annulée',
                            'L’événement devient nécessairement plus fiable',
                            'Les lectures deviennent atomiques automatiquement',
                        ],
                        'correct' => 1,
                        'explanation' => 'Publier trop tôt peut créer un écart entre l’état enregistré et les effets déclenchés. L’émission doit respecter la stratégie transactionnelle.'
                    ],
                    [
                        'question' => 'Une application en croissance a besoin d’équipes autonomes, mais aucun besoin opérationnel ne justifie des services distants séparés. Quelle option peut convenir ?',
                        'choices' => [
                            'Une base partagée modifiée directement par toutes les équipes',
                            'Une seule classe contenant toutes les règles',
                            'Un monolithe modulaire avec des dépendances explicites entre domaines',
                            'Des microservices par écran mobile',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un monolithe modulaire renforce les frontières de code sans imposer la complexité de déploiement distribué.'
                    ],
                    [
                        'question' => 'Une passerelle convertit une API fournisseur dont les concepts ne correspondent pas au modèle métier. Quelle responsabilité lui confier ?',
                        'choices' => [
                            'Faire exposer directement les objets du fournisseur à toutes les vues',
                            'Décider des règles d’autorisation du serveur',
                            'Remplacer les tests de contrat',
                            'Traduire les modèles externes et isoler le domaine de leur vocabulaire',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une couche anticorruption protège le modèle interne en traduisant les concepts externes à la frontière.'
                    ],
                    [
                        'question' => 'Un cas d’usage d’annulation de commande contient des règles métier et des appels directs au SDK de paiement. Comment réduire le couplage ?',
                        'choices' => [
                            'Garder la décision métier dans le cas d’usage et déléguer l’effet externe à une dépendance abstraite',
                            'Déplacer toute la règle dans le callback du bouton',
                            'Mettre la logique dans le schéma SQL',
                            'Dupliquer le cas d’usage pour chaque fournisseur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le cas d’usage orchestre la règle tandis qu’une abstraction encapsule l’intégration concrète.'
                    ],
                    [
                        'question' => 'Un module « profil » dépend d’un module « facturation » uniquement pour afficher le nom du plan. Quel changement réduit la dépendance ?',
                        'choices' => [
                            'Créer une dépendance circulaire',
                            'Exposer une donnée ou un contrat stable adapté au besoin plutôt que l’implémentation interne de facturation',
                            'Importer tout le module et modifier ses tables',
                            'Dupliquer les règles de facturation dans le profil',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un contrat limité au besoin rend les modules moins sensibles aux détails internes et évite les dépendances circulaires.'
                    ],
                    [
                        'question' => 'Lors d’une revue, une interface abstraite ne possède qu’une implémentation et ne permet aucun test ou changement utile. Quelle action est la plus défendable ?',
                        'choices' => [
                            'Conserver toutes les abstractions par principe',
                            'Déplacer le code dans un singleton global',
                            'La supprimer ou la simplifier jusqu’à l’apparition d’un besoin concret',
                            'Ajouter plusieurs interfaces supplémentaires autour d’elle',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les abstractions ont un coût cognitif ; elles sont utiles lorsqu’elles protègent une frontière ou facilitent réellement les tests et l’évolution.'
                    ],
                    [
                        'question' => 'Une équipe découpe un module à chaque écran et les cas d’usage partagent une logique d’un domaine transversal. Quel critère conduit à de meilleures frontières ?',
                        'choices' => [
                            'Créer un module par fichier source',
                            'Dupliquer chaque règle pour garder les écrans indépendants',
                            'Placer les composants ayant une couleur commune ensemble',
                            'Regrouper les responsabilités selon les capacités et règles métier, puis exposer des contrats explicites',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les frontières alignées sur les capacités métier favorisent une cohésion utile et limitent le partage accidentel d’implémentations.'
                    ],
                ],
            ],
            [
                'title' => 'Performance, rendu et mémoire',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau avancé.',
                'questions' => [
                    [
                        'question' => 'Un écran de catalogue saccade lors du défilement. Les mesures montrent surtout des décodages d’images volumineuses sur le thread graphique. Quelle correction cible la cause ?',
                        'choices' => [
                            'Réduire le nombre de tests automatisés',
                            'Décoder des variantes adaptées à la taille affichée et déplacer le travail hors du chemin de rendu',
                            'Augmenter la fréquence des requêtes réseau',
                            'Ajouter une animation de chargement à chaque ligne',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le diagnostic relie les saccades au décodage et à la taille des images ; il faut réduire le coût et éviter de bloquer le rendu.'
                    ],
                    [
                        'question' => 'Le lancement à froid dépasse le budget après l’ajout d’analytique, d’un SDK publicitaire et d’un préchargement non essentiel. Que faire d’abord ?',
                        'choices' => [
                            'Charger davantage de données avant l’affichage',
                            'Supprimer les métriques de démarrage',
                            'Profiler le démarrage puis différer les initialisations non indispensables à la première interaction',
                            'Optimiser au hasard les fonctions les plus longues du dépôt',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le profilage identifie les coûts réels ; différer les tâches non critiques peut raccourcir le chemin jusqu’à l’interface utilisable.'
                    ],
                    [
                        'question' => 'Une image JPEG de petite taille sur disque provoque une forte pression mémoire une fois affichée. Quelle explication est correcte ?',
                        'choices' => [
                            'Un fichier compressé reste toujours petit en mémoire',
                            'Le réseau conserve l’image décodée indéfiniment',
                            'Le décodage réduit nécessairement les dimensions à zéro',
                            'La mémoire dépend surtout des dimensions et du format de l’image décodée, pas seulement de sa taille compressée',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une image est souvent développée en pixels en mémoire ; ses dimensions peuvent produire un bitmap bien plus grand que le fichier.'
                    ],
                    [
                        'question' => 'Un profil montre qu’une liste recrée des milliers de cellules à chaque modification d’un filtre local. Quelle piste mérite un essai mesuré ?',
                        'choices' => [
                            'Limiter le recalcul et le rendu aux éléments affectés, avec une liste virtualisée si elle convient',
                            'Désactiver toute réactivité du filtre',
                            'Garder toutes les cellules visibles hors écran',
                            'Mettre les données de la liste dans les journaux',
                        ],
                        'correct' => 0,
                        'explanation' => 'La virtualisation et une portée de mise à jour réduite diminuent le travail effectué pour les éléments non visibles ou inchangés.'
                    ],
                    [
                        'question' => 'Après optimisation, une métrique synthétique s’améliore mais les utilisateurs signalent toujours des ralentissements sur des appareils anciens. Quelle vérification est nécessaire ?',
                        'choices' => [
                            'Désactiver le suivi des versions',
                            'Comparer les distributions et segments d’appareils en conditions représentatives, pas seulement la moyenne globale',
                            'Ne retenir que la moyenne du téléphone de développement',
                            'Remplacer les mesures par une estimation visuelle',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une moyenne peut masquer une régression concentrée sur des appareils ou conditions spécifiques ; les percentiles et segments sont utiles.'
                    ],
                    [
                        'question' => 'Une animation complexe sollicite durablement GPU et CPU sur un écran fréquemment consulté. Quel compromis évaluer ?',
                        'choices' => [
                            'La rendre permanente pour cacher les délais réseau',
                            'Augmenter sa fréquence sans profilage',
                            'La valeur d’expérience face au coût énergétique et au travail de rendu sur les appareils ciblés',
                            'La supprimer sans observer son usage',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une animation continue a un coût énergétique ; la décision doit s’appuyer sur le bénéfice utilisateur et des mesures représentatives.'
                    ],
                    [
                        'question' => 'Un cache d’images élimine les téléchargements répétés, mais la mémoire augmente sans limite. Quel réglage est le plus approprié ?',
                        'choices' => [
                            'Conserver toutes les images jusqu’à la désinstallation',
                            'Désactiver la libération mémoire de la plateforme',
                            'Ajouter une seconde copie globale du cache',
                            'Une politique de cache bornée avec éviction et libération des ressources hors écran',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un cache doit respecter un budget et évincer les ressources qui ne sont plus utiles.'
                    ],
                    [
                        'question' => 'Le temps de réponse perçu d’une action est bon, mais son opération en arrière-plan consomme beaucoup de CPU. Quelle mesure complète l’analyse ?',
                        'choices' => [
                            'Observer la consommation énergétique et l’utilisation des ressources pendant et après l’action',
                            'Mesurer uniquement le nombre de lignes de code',
                            'Compter les animations de l’écran d’accueil',
                            'Mesurer la taille des icônes',
                        ],
                        'correct' => 0,
                        'explanation' => 'La latence ne suffit pas à caractériser la performance mobile ; CPU, mémoire et énergie comptent aussi.'
                    ],
                    [
                        'question' => 'Une optimisation réduit le nombre de requêtes, mais augmente fortement la durée de conservation de données obsolètes. Quelle approche convient ?',
                        'choices' => [
                            'Ignorer les besoins métier',
                            'Mesurer le compromis et définir explicitement fraîcheur, durée de cache et revalidation',
                            'Garder toujours le cache sans expiration',
                            'Vider le cache après chaque frame',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le caching échange de la réactivité contre la fraîcheur et le stockage ; ces paramètres doivent suivre les exigences du produit.'
                    ],
                    [
                        'question' => 'Un benchmark varie beaucoup entre deux exécutions du même commit. Quelle étape rend la comparaison plus fiable ?',
                        'choices' => [
                            'Inclure les téléchargements aléatoires dans chaque test',
                            'Supprimer les résultats qui ne confirment pas l’hypothèse',
                            'Contrôler l’appareil, l’état thermique, les données et les conditions d’exécution, puis répéter les mesures',
                            'Comparer une seule exécution à un appareil différent',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un benchmark doit limiter les facteurs de variation et rapporter des mesures répétées plutôt que sélectionner un résultat favorable.'
                    ],
                ],
            ],
            [
                'title' => 'Sécurité, stockage et confiance client',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau avancé.',
                'questions' => [
                    [
                        'question' => 'Une clé d’API intégrée au binaire mobile est présentée comme un secret. Quelle conclusion de revue est correcte ?',
                        'choices' => [
                            'Le chiffrement du binaire rend la clé impossible à extraire',
                            'Une clé intégrée remplace le contrôle d’accès serveur',
                            'La clé peut être affichée dans les journaux pour la protéger',
                            'Le binaire distribué peut être inspecté ; un secret durable ne doit pas dépendre de sa confidentialité',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un client livré à des utilisateurs peut être analysé. Les autorisations doivent être contrôlées côté serveur et les secrets protégés hors du binaire.'
                    ],
                    [
                        'question' => 'Un endpoint permet de lire une facture si l’identifiant est connu, sans vérifier son propriétaire. Quel défaut est présent ?',
                        'choices' => [
                            'Une absence de contrôle d’autorisation au niveau de l’objet côté serveur',
                            'Une mauvaise compression de l’interface',
                            'Un problème de cache uniquement local',
                            'Une erreur de navigation sans impact sécurité',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un identifiant difficile à deviner ne remplace pas la vérification que l’utilisateur est autorisé à consulter cet objet.'
                    ],
                    [
                        'question' => 'Le serveur exige du certificate pinning pour l’application. Quel risque opérationnel doit être traité dans la conception ?',
                        'choices' => [
                            'Le pinning garantit que l’API ne sera jamais indisponible',
                            'Un changement légitime de certificats ou de clés peut interrompre les connexions si le renouvellement et les clés de secours sont mal gérés',
                            'Le pinning rend inutile la validation TLS normale',
                            'Le pinning empêche toute interception sur un appareil compromis',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le pinning ajoute une contrainte sur les identités acceptées et doit prévoir rotation, secours et mise à jour sans supprimer la validation TLS.'
                    ],
                    [
                        'question' => 'Une application chiffre un jeton avec une clé codée en dur dans le même binaire. Quel problème subsiste ?',
                        'choices' => [
                            'La clé devient protégée par le serveur automatiquement',
                            'Cette méthode empêche les sauvegardes',
                            'Un attaquant pouvant extraire le binaire peut potentiellement récupérer aussi la clé',
                            'Le chiffrement rend le jeton non sensible',
                        ],
                        'correct' => 2,
                        'explanation' => 'La protection cryptographique dépend de la gestion de la clé ; stocker le secret et sa clé ensemble limite fortement le bénéfice.'
                    ],
                    [
                        'question' => 'Un écran de diagnostic envoie au service d’analytique les adresses e-mail et jetons de session. Quelle action immédiate est la plus pertinente ?',
                        'choices' => [
                            'Conserver les champs pour faciliter les recherches',
                            'Chiffrer les noms de champs tout en gardant leurs valeurs',
                            'Déplacer les mêmes données dans les messages d’erreur',
                            'Supprimer ou masquer ces données des événements, vérifier la collecte déjà transmise et restreindre leur conservation',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les données sensibles ne doivent pas être collectées sans nécessité ; les flux existants et leur rétention doivent aussi être examinés.'
                    ],
                    [
                        'question' => 'Une application permet la localisation en arrière-plan alors qu’une fonction ponctuelle suffit. Quel principe devrait guider la réduction de permission ?',
                        'choices' => [
                            'Ne demander que la portée et la durée d’accès nécessaires au parcours réellement utilisé',
                            'Demander toutes les permissions au premier lancement',
                            'Utiliser la localisation en arrière-plan par défaut',
                            'Masquer la finalité dans le texte de demande',
                        ],
                        'correct' => 0,
                        'explanation' => 'La minimisation des permissions réduit l’exposition des utilisateurs et rend la demande plus compréhensible.'
                    ],
                    [
                        'question' => 'Le mobile cache le bouton « supprimer » aux utilisateurs standard, mais l’API accepte toujours leur requête. Quelle correction est indispensable ?',
                        'choices' => [
                            'Masquer le code de l’écran dans le binaire',
                            'Appliquer la règle de rôle sur le backend pour chaque opération protégée',
                            'Renommer le bouton dans l’application',
                            'Ajouter une animation avant la requête',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’interface peut être modifiée ou contournée ; le serveur doit autoriser ou refuser l’opération indépendamment.'
                    ],
                    [
                        'question' => 'Un jeton d’accès compromis est détecté. Quel mécanisme réduit rapidement sa capacité d’usage ?',
                        'choices' => [
                            'Le renommer dans le client uniquement',
                            'Effacer l’icône de l’application',
                            'Révocation côté serveur et rotation des credentials, selon le protocole utilisé',
                            'Allonger sa durée de vie pour éviter les reconnexions',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un jeton déjà volé ne peut pas être protégé par un changement local seul ; la révocation et la rotation doivent agir sur le mécanisme d’accès.'
                    ],
                    [
                        'question' => 'Un produit conserve les historiques de position sans limite alors qu’une fonction de navigation n’en a besoin que temporairement. Quelle revue faut-il mener ?',
                        'choices' => [
                            'Augmenter la fréquence de collecte',
                            'Copier l’historique dans les logs',
                            'Déplacer les données vers une autre table sans changer leur durée',
                            'Réduire les données et la durée de conservation au besoin déclaré, et prévoir leur suppression',
                        ],
                        'correct' => 3,
                        'explanation' => 'La minimisation porte sur la collecte et la conservation ; une donnée sensible doit être gardée uniquement aussi longtemps que nécessaire.'
                    ],
                    [
                        'question' => 'Un test de sécurité montre que l’application accepte une URL de retour fournie par un deep link. Quel contrôle évite une redirection vers un site arbitraire ?',
                        'choices' => [
                            'Valider la destination contre une liste ou un schéma explicitement autorisé',
                            'Encoder l’URL puis l’accepter sans autre contrôle',
                            'Faire confiance à toute URL provenant d’une notification',
                            'Ouvrir systématiquement le navigateur intégré',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les paramètres de redirection sont des entrées non fiables et doivent être restreints à des destinations approuvées.'
                    ],
                    [
                        'question' => 'Une équipe propose l’obfuscation comme unique réponse au stockage d’une clé privée dans le binaire. Quelle analyse est correcte ?',
                        'choices' => [
                            'Elle rend inutile l’autorisation côté serveur',
                            'L’obfuscation augmente le coût d’analyse mais ne transforme pas un secret embarqué en secret fiable',
                            'Elle garantit que la clé ne peut pas être extraite',
                            'Elle remplace le stockage sécurisé de plateforme',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’obfuscation est une défense limitée ; les secrets durables doivent être gardés hors du client ou protégés par un mécanisme approprié.'
                    ],
                ],
            ],
            [
                'title' => 'Architecture Offline-First et conflits',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau avancé.',
                'questions' => [
                    [
                        'question' => 'Un utilisateur modifie une fiche hors ligne pendant qu’un collègue change le même champ. La règle métier exige de préserver les deux contributions. Quelle approche est préférable ?',
                        'choices' => [
                            'Écraser systématiquement avec l’horodatage du téléphone',
                            'Ignorer toute modification locale',
                            'Fusionner les chaînes sans validation',
                            'Détecter le conflit et présenter ou appliquer une résolution métier qui conserve les changements pertinents',
                        ],
                        'correct' => 3,
                        'explanation' => 'Lorsque les deux changements ont une valeur, un choix automatique simpliste peut perdre du travail ; la résolution doit refléter le domaine.'
                    ],
                    [
                        'question' => 'Une file de mutations réessaie un paiement après un timeout. Quelle garantie doit être obtenue avant d’activer les retries automatiques ?',
                        'choices' => [
                            'La création est dédupliquée ou rendue idempotente par un identifiant de commande reconnu par le serveur',
                            'Le téléphone possède une horloge parfaitement synchronisée',
                            'Le client peut joindre le réseau en continu',
                            'Le timeout est toujours une preuve d’échec côté serveur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le serveur peut avoir traité une requête malgré l’absence de réponse ; les retries doivent éviter les effets en double.'
                    ],
                    [
                        'question' => 'Une synchronisation incrémentale demande seulement les changements depuis le dernier curseur. Le curseur est perdu après corruption locale. Quelle stratégie de récupération est utile ?',
                        'choices' => [
                            'Réutiliser le curseur d’un autre compte',
                            'Effectuer une resynchronisation complète contrôlée ou reconstruire un curseur valide selon le protocole',
                            'Inventer un curseur à partir de l’heure actuelle',
                            'Supposer que rien n’a changé côté serveur',
                        ],
                        'correct' => 1,
                        'explanation' => 'Sans position fiable, le client doit reconstruire un état cohérent plutôt que sauter des mises à jour.'
                    ],
                    [
                        'question' => 'Deux répliques reçoivent des événements dans des ordres différents. Les horloges murales sont décalées. Quel outil de raisonnement aide à distinguer causalité et concurrence ?',
                        'choices' => [
                            'Le numéro de ligne de l’écran',
                            'La durée de l’animation de synchronisation',
                            'Des métadonnées d’ordre logique ou des vector clocks adaptées au modèle de réplication',
                            'La date locale sans information de source',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les horloges logiques peuvent exprimer certaines relations causales sans supposer des horloges physiques parfaitement synchronisées.'
                    ],
                    [
                        'question' => 'Une suppression hors ligne est suivie par une ancienne copie qui se resynchronise et recrée l’élément. Quel mécanisme manque ?',
                        'choices' => [
                            'Un cache plus long dans le client',
                            'Une copie supplémentaire du contenu supprimé',
                            'Une réinitialisation du thème',
                            'Une information de suppression durable, comme un tombstone, conservée assez longtemps pour être propagée',
                        ],
                        'correct' => 3,
                        'explanation' => 'La suppression doit rester représentée jusqu’à ce que les répliques concernées l’aient reçue, sinon une ancienne valeur peut ressusciter.'
                    ],
                    [
                        'question' => 'Une équipe propose un CRDT pour fusionner des modifications. Dans quel cas faut-il encore une analyse métier ?',
                        'choices' => [
                            'Lorsque toutes les opérations ne peuvent pas être fusionnées de manière acceptable pour le sens métier',
                            'Jamais : un CRDT définit toujours la bonne règle de produit',
                            'Uniquement quand il n’y a pas de réseau',
                            'Seulement pour modifier les couleurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les propriétés de convergence techniques n’impliquent pas que la fusion produise toujours un résultat conforme aux règles métier.'
                    ],
                    [
                        'question' => 'Un job de synchronisation est relancé après arrêt du processus. Que faut-il persister pour reprendre sans perdre ni dupliquer l’avancement ?',
                        'choices' => [
                            'Aucune donnée, puisque le système relancera toujours au même point',
                            'Les mutations durables et leurs identifiants, ainsi que les accusés de réception ou checkpoints nécessaires',
                            'Le seul état d’affichage de l’écran',
                            'La dernière animation exécutée',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une reprise fiable nécessite un suivi durable des opérations en attente et de leur traitement côté serveur.'
                    ],
                    [
                        'question' => 'Les utilisateurs consultent des données en cache immédiatement, puis une mise à jour arrive en arrière-plan. Quelle précaution accompagne ce comportement ?',
                        'choices' => [
                            'Supprimer le cache avant chaque ouverture',
                            'Ignorer toute réponse plus récente',
                            'Indiquer ou gérer la fraîcheur et traiter le cas où la revalidation échoue',
                            'Présenter les données anciennes comme forcément actuelles',
                        ],
                        'correct' => 2,
                        'explanation' => 'Servir rapidement le cache est utile, mais l’application doit traiter la fraîcheur et les échecs de revalidation.'
                    ],
                    [
                        'question' => 'Une mutation est appliquée de manière optimiste avant confirmation du serveur. Le serveur refuse la modification. Quel contrat d’interface est requis ?',
                        'choices' => [
                            'Laisser l’état optimiste comme vérité permanente',
                            'Masquer l’erreur tant que l’écran reste ouvert',
                            'Rejouer l’action sans condition',
                            'Rétablir ou réconcilier l’état local et communiquer clairement l’échec',
                        ],
                        'correct' => 3,
                        'explanation' => 'L’optimisme doit avoir une stratégie de rollback ou de reconciliation lorsque la source distante rejette la mutation.'
                    ],
                    [
                        'question' => 'Une application métier doit rester utilisable une journée sans réseau, mais les stocks doivent être exacts avant validation finale. Quelle règle de conception est cohérente ?',
                        'choices' => [
                            'Permettre la consultation et les brouillons hors ligne, puis revalider le stock auprès du serveur avant confirmation définitive',
                            'Confirmer définitivement chaque commande sans vérifier le stock',
                            'Interdire même la consultation hors ligne',
                            'Afficher le cache comme garantie de disponibilité réelle',
                        ],
                        'correct' => 0,
                        'explanation' => 'La conception peut offrir des fonctions hors ligne tout en exigeant une validation autoritative pour une décision qui dépend de données à jour.'
                    ],
                ],
            ],
            [
                'title' => 'Traitements de fond, fiabilité et releases',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau avancé.',
                'questions' => [
                    [
                        'question' => 'Un transfert de fichier volumineux doit reprendre après une interruption système. Quel choix améliore sa fiabilité ?',
                        'choices' => [
                            'Empêcher la mise en veille par une boucle active',
                            'Utiliser le mécanisme de travail en arrière-plan autorisé par la plateforme, avec progression persistée et reprise',
                            'Garder le transfert dans un timer d’écran',
                            'Relancer depuis zéro à chaque ouverture sans identifiant',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les systèmes mobiles contrôlent le travail de fond ; la tâche doit utiliser les mécanismes disponibles et persister assez d’état pour reprendre.'
                    ],
                    [
                        'question' => 'Une synchronisation quotidienne n’a pas besoin d’une heure exacte. Quelle planification est raisonnable sur mobile ?',
                        'choices' => [
                            'Lancer un service permanent sans visibilité',
                            'Effectuer la synchronisation dans chaque frame',
                            'Demander un travail périodique flexible en laissant le système regrouper les exécutions selon ses contraintes',
                            'Réveiller l’appareil à chaque minute par une alarme exacte',
                        ],
                        'correct' => 2,
                        'explanation' => 'Pour un travail non urgent, accepter une exécution flexible permet au système de gérer batterie et ressources.'
                    ],
                    [
                        'question' => 'Un processus d’arrière-plan doit afficher une progression continue et l’utilisateur attend activement le résultat. Quel principe faut-il considérer ?',
                        'choices' => [
                            'Cacher systématiquement le travail au système',
                            'Promettre une durée précise que l’OS ne garantit pas',
                            'Remplacer la tâche par une animation locale',
                            'Utiliser le modèle de travail visible et les permissions ou notifications exigées par la plateforme ciblée',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les tâches perceptibles à l’utilisateur peuvent relever d’un traitement explicitement visible, soumis aux règles de chaque plateforme.'
                    ],
                    [
                        'question' => 'Un rapport de crash augmente uniquement dans la nouvelle version de l’application. Quel contexte aide à confirmer la régression ?',
                        'choices' => [
                            'Comparer les taux par version, appareil et parcours, puis examiner les traces et changements déployés',
                            'Compter le nombre total d’utilisateurs sans période',
                            'Désactiver la collecte d’informations de version',
                            'Comparer le crash à la couleur du thème',
                        ],
                        'correct' => 0,
                        'explanation' => 'La segmentation par version et contexte relie mieux une hausse à une release qu’un compte brut agrégé.'
                    ],
                    [
                        'question' => 'Une release est distribuée à 5 % des utilisateurs et le taux d’erreur augmente au-delà d’un seuil défini. Quelle action correspond au rollout progressif ?',
                        'choices' => [
                            'Ignorer le seuil après le déploiement',
                            'Suspendre l’élargissement, diagnostiquer et revenir en arrière ou corriger selon le plan de release',
                            'Passer immédiatement à 100 % pour obtenir plus de données',
                            'Supprimer les métriques de la version concernée',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le rollout progressif n’est utile que si des signaux et des actions de réaction sont définis à l’avance.'
                    ],
                    [
                        'question' => 'Un feature flag désactive une nouvelle fonction à distance, mais le code de migration de données reste activé. Quel risque faut-il examiner ?',
                        'choices' => [
                            'La migration ne peut pas affecter les anciennes versions',
                            'Le drapeau chiffre la base',
                            'Le drapeau ne neutralise pas les effets de migration déjà exécutés ; la compatibilité des schémas doit être traitée séparément',
                            'Le feature flag annule automatiquement toutes les migrations',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les flags contrôlent généralement l’accès à un comportement, pas l’annulation de transformations persistantes déjà appliquées.'
                    ],
                    [
                        'question' => 'Une mise à jour urgente corrige un défaut, mais un rollback complet pourrait réintroduire une vulnérabilité. Quelle décision de release est la plus sûre ?',
                        'choices' => [
                            'Toujours restaurer la version précédente quelle que soit la vulnérabilité',
                            'Arrêter toute communication de version',
                            'Désactiver les contrôles de sécurité pour faciliter le rollback',
                            'Évaluer les impacts sécurité et compatibilité, puis privilégier une correction contrôlée ou une mitigation adaptée plutôt qu’un retour aveugle',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le rollback n’est pas automatiquement sûr ; il faut comparer le risque de la version actuelle et celui de réintroduire le défaut corrigé.'
                    ],
                    [
                        'question' => 'Un artefact mobile a été compilé sur le poste d’un développeur et signé avec une clé stockée dans le dépôt. Quelles améliorations sont prioritaires ?',
                        'choices' => [
                            'Construire dans un pipeline contrôlé, protéger les secrets de signature et tracer les artefacts produits',
                            'Conserver la clé dans le dépôt mais changer son nom',
                            'Signer chaque build avec une clé personnelle partagée',
                            'Copier manuellement l’artefact sans provenance',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le pipeline et la gestion des secrets protègent la chaîne de livraison et facilitent l’audit de l’artefact distribué.'
                    ],
                    [
                        'question' => 'Une nouvelle dépendance transitive apparaît dans le build sans modification déclarée par l’équipe. Quelle pratique aide à réduire les surprises ?',
                        'choices' => [
                            'Ignorer les dépendances indirectes',
                            'Verrouiller les versions résolues, examiner les changements et surveiller les dépendances de la chaîne de build',
                            'Mettre à jour toutes les dépendances à chaque build sans revue',
                            'Désactiver le fichier de lock',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le contrôle des versions résolues et leur revue renforcent la reproductibilité et la visibilité des risques de supply chain.'
                    ],
                    [
                        'question' => 'Un service d’analytique est indisponible et bloque l’ouverture de l’écran principal. Quelle amélioration de fiabilité est adaptée ?',
                        'choices' => [
                            'Faire dépendre le rendu de la réponse analytique',
                            'Afficher un crash comme état normal',
                            'Découpler l’affichage principal de cette dépendance non critique et prévoir une dégradation fonctionnelle limitée',
                            'Réessayer la connexion avant chaque frame',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une dépendance non essentielle ne devrait pas rendre toute l’application inutilisable ; une dégradation contrôlée maintient les fonctions principales.'
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
                    'duration' => max(18, (int) ceil($questionCount * 18 / 10)),
                    'passing_score' => 65,
                    'total_marks' => $questionCount,
                    'is_active' => true,
                    'difficulty' => 'Advanced',
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
