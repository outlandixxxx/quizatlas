<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Choice;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;


class MobileDevelopmentProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mobile-development')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Architecture de domaine et modularité à l’échelle',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau professionnel.',
                'questions' => [
                    [
                        'question' => 'Une migration d’API oblige plusieurs équipes à modifier leurs règles métier car les modèles externes sont utilisés partout. Quelle refonte crée une frontière durable ?',
                        'choices' => [
                            'Créer un modèle global unique sans adapter les sémantiques',
                            'Traduire les objets du fournisseur à l’entrée et exposer un modèle interne stable aux cas d’usage',
                            'Copier les types externes dans chaque module',
                            'Faire dépendre le domaine directement du SDK réseau',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une traduction à la frontière protège le domaine des changements de contrat et évite la propagation des détails du fournisseur.'
                    ],
                    [
                        'question' => 'Une équipe définit un bounded context « paiement », mais son modèle reprend les états internes du prestataire. Quel signe montre que la frontière est inefficace ?',
                        'choices' => [
                            'Le contexte publie des événements métier',
                            'Les autres domaines utilisent une API explicite',
                            'Le vocabulaire externe dicte les décisions et états du domaine interne',
                            'Le contexte a des tests de contrat',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une frontière bornée doit préserver une sémantique cohérente ; sinon les concepts du fournisseur contaminent le modèle métier.'
                    ],
                    [
                        'question' => 'Une plateforme mobile comprend des modules métier autonomes compilés dans un seul binaire. Quelle propriété soutient le mieux un monolithe modulaire ?',
                        'choices' => [
                            'Un accès direct de tous les modules à toutes les tables',
                            'Des cycles de dépendance acceptés comme règle',
                            'La duplication des règles métier dans chaque interface',
                            'Des dépendances orientées et contrôlées, avec des interfaces publiques limitées entre modules',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les frontières sont utiles si les dépendances restent explicites et évitent les cycles malgré le déploiement unique.'
                    ],
                    [
                        'question' => 'Une décision de domaine émet un événement avant que la transaction locale ne soit durable. Le processus tombe entre les deux étapes. Quelle incohérence est possible ?',
                        'choices' => [
                            'Les consommateurs observent un événement dont l’état métier n’a pas été validé durablement',
                            'La transaction devient atomique par l’événement',
                            'Le stockage local est automatiquement restauré',
                            'Les événements ne peuvent pas être perdus',
                        ],
                        'correct' => 0,
                        'explanation' => 'La publication et le commit doivent être coordonnés, souvent avec un outbox ou un mécanisme équivalent, pour éviter les écarts.'
                    ],
                    [
                        'question' => 'Une interface « UserRepository » est utilisée par trois cas d’usage mais aucun ne partage la même sémantique de lecture. Quelle revue est nécessaire ?',
                        'choices' => [
                            'Remplacer l’interface par un singleton global',
                            'Vérifier si le contrat représente une capacité cohérente ou s’il doit être scindé selon les besoins métier',
                            'Ajouter d’autres méthodes à l’interface pour tous les besoins futurs',
                            'Faire exposer directement les tables à tous les appelants',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une abstraction trop large mélange des besoins distincts ; ses contrats doivent refléter des capacités cohérentes.'
                    ],
                    [
                        'question' => 'Deux modules fonctionnels importent mutuellement leurs modèles internes. Quel risque découle de cette dépendance cyclique ?',
                        'choices' => [
                            'Les tests d’intégration ne sont plus nécessaires',
                            'Les frontières sont plus fortes',
                            'Les changements deviennent difficiles à isoler et l’ordre de compilation ou d’évolution se complique',
                            'La cohésion augmente nécessairement',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les cycles brouillent la propriété des modèles et propagent les changements à travers plusieurs domaines.'
                    ],
                    [
                        'question' => 'Une équipe veut remplacer une base locale pour permettre une nouvelle stratégie hors ligne. Quelle séparation rend ce changement moins risqué ?',
                        'choices' => [
                            'Faire construire la base par chaque écran',
                            'Importer les requêtes SQL dans les règles métier',
                            'Copier les données dans chaque composant',
                            'Faire dépendre les cas d’usage d’un contrat de persistance, implémenté par l’adaptateur local',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une dépendance vers un contrat métier permet de changer l’adaptateur sans réécrire les règles applicatives.'
                    ],
                    [
                        'question' => 'Une architecture introduit des interfaces pour chaque classe alors que les implémentations ne varient pas et ne sont pas testées séparément. Quel coût est probable ?',
                        'choices' => [
                            'Une charge cognitive supplémentaire sans frontière ou capacité de remplacement utile',
                            'Une garantie automatique de scalabilité',
                            'Une élimination de la dette technique',
                            'Une meilleure performance de rendu',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les abstractions inutiles compliquent la navigation et le changement sans apporter de bénéfice concret.'
                    ],
                    [
                        'question' => 'Une mise à jour de configuration réseau modifie une règle de calcul métier. Quelle dépendance est probablement inversée ?',
                        'choices' => [
                            'La présentation dépend du domaine',
                            'Le domaine dépend d’un détail d’infrastructure plutôt que d’une abstraction stable',
                            'Le module réseau dépend d’un contrat',
                            'Le cas d’usage est testé isolément',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les règles métier devraient rester indépendantes de la configuration technique, qui est fournie via des ports ou dépendances adaptées.'
                    ],
                    [
                        'question' => 'Plusieurs domaines ont besoin de l’identité d’un utilisateur, mais leurs règles divergent. Quelle stratégie évite d’imposer un modèle universel fragile ?',
                        'choices' => [
                            'Copier intégralement les données personnelles dans chaque domaine',
                            'Laisser un domaine modifier les tables internes des autres',
                            'Partager un identifiant stable et laisser chaque contexte exprimer les concepts dont il est responsable',
                            'Fusionner toutes les règles dans un objet utilisateur central',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une référence stable peut être partagée sans imposer un modèle métier unique à des contextes distincts.'
                    ],
                    [
                        'question' => 'Un domaine commande importe directement les classes d’un SDK de paiement, qui change fréquemment. Quelle direction de dépendance améliore la stabilité ?',
                        'choices' => [
                            'Le domaine suit chaque changement du SDK',
                            'Le SDK devient le modèle métier de tous les modules',
                            'Chaque écran appelle le SDK directement',
                            'Le domaine définit un port adapté à ses besoins et un adaptateur traduit vers le SDK',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le port exprime le besoin métier ; l’adaptateur isole les détails variables de l’intégration.'
                    ],
                ],
            ],
            [
                'title' => 'Gestion d’état complexe et concurrence',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau professionnel.',
                'questions' => [
                    [
                        'question' => 'Deux chargements parallèles du même écran se terminent dans l’ordre inverse. Le plus ancien remplace l’état plus récent. Quel mécanisme répond au problème ?',
                        'choices' => [
                            'Un tri alphabétique des réponses',
                            'Un numéro de génération ou une annulation qui empêche un résultat obsolète de publier son état',
                            'Une durée d’attente identique pour toutes les requêtes',
                            'Une variable globale modifiée par chaque callback',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une génération ou un jeton d’annulation permet de reconnaître le résultat devenu périmé et de préserver l’état courant.'
                    ],
                    [
                        'question' => 'Une interface de paiement combine statut du paiement, validation 3-D Secure et état réseau dans plusieurs booléens. Des combinaisons impossibles apparaissent. Quelle modélisation est plus sûre ?',
                        'choices' => [
                            'Laisser les vues décider chacune de l’état final',
                            'Réinitialiser les valeurs à chaque rendu',
                            'Définir une machine à états avec transitions autorisées et données associées à chaque état',
                            'Ajouter davantage de booléens indépendants',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une machine à états rend explicites les transitions et empêche les combinaisons incohérentes.'
                    ],
                    [
                        'question' => 'Une liste conserve une copie locale de chaque entité dans plusieurs sections. Une modification du titre doit invalider cinq copies. Quelle normalisation aide ?',
                        'choices' => [
                            'Dupliquer les objets dans chaque arbre de vue',
                            'Remplacer les identifiants par des index d’affichage',
                            'Recharger toutes les sections depuis l’API à chaque caractère saisi',
                            'Stocker les entités une fois par identifiant et référencer ces identifiants dans les collections',
                        ],
                        'correct' => 3,
                        'explanation' => 'La normalisation réduit les copies de la même entité et centralise les mises à jour.'
                    ],
                    [
                        'question' => 'Un utilisateur modifie optimistement un profil, puis une réponse plus ancienne arrive du serveur. Comment éviter qu’elle n’écrase une modification ultérieure ?',
                        'choices' => [
                            'Comparer les versions ou mutations et appliquer une politique de réconciliation tenant compte de leur ordre',
                            'Accepter toute réponse reçue en dernier',
                            'Ignorer définitivement les réponses serveur',
                            'Mettre toutes les données dans le même booléen',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’ordre d’arrivée ne reflète pas toujours l’ordre logique ; des versions ou identifiants de mutation permettent une réconciliation correcte.'
                    ],
                    [
                        'question' => 'Un écran affiche un toast et l’état du formulaire persiste après la fermeture. Quelle distinction d’état devrait guider leur durée de vie ?',
                        'choices' => [
                            'Les deux sont nécessairement des données métier côté serveur',
                            'Le toast est un effet transitoire, tandis que le brouillon peut être un état durable selon l’exigence produit',
                            'Les deux doivent être persistés pour toujours',
                            'Les deux doivent disparaître à chaque frame',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les événements ponctuels et les données à restaurer n’ont pas les mêmes besoins de cycle de vie ni de persistance.'
                    ],
                    [
                        'question' => 'Une équipe stocke dans l’état à la fois les articles et leur nombre total, qui est leur somme. Quel compromis est le plus sain ?',
                        'choices' => [
                            'Stocker uniquement le total et reconstruire les articles au hasard',
                            'Dupliquer le total dans chaque ligne',
                            'Calculer le total depuis les articles, sauf si une mesure justifie un cache dérivé correctement invalidé',
                            'Modifier les deux valeurs manuellement sans règle commune',
                        ],
                        'correct' => 2,
                        'explanation' => 'La dérivation évite les incohérences ; une matérialisation éventuelle doit avoir une invalidation explicite et un besoin mesuré.'
                    ],
                    [
                        'question' => 'Une commande est marquée « réussie » dans l’état global avant d’être confirmée par le backend. Quelle règle protège la cohérence ?',
                        'choices' => [
                            'Utiliser le même état pour attente et succès confirmé',
                            'Supprimer l’erreur serveur du modèle',
                            'Empêcher toute mise à jour locale avant un redémarrage',
                            'Représenter l’état optimiste comme en attente et prévoir rollback ou reconciliation selon le résultat autoritatif',
                        ],
                        'correct' => 3,
                        'explanation' => 'Distinguer attente et confirmation permet de préserver une expérience réactive sans présenter une réussite non validée.'
                    ],
                    [
                        'question' => 'Une souscription à un flux survit à la fermeture d’un module et conserve son état dans un store partagé. Quel contrôle de conception est central ?',
                        'choices' => [
                            'Définir clairement le propriétaire de la souscription et sa durée de vie, puis la libérer au bon moment',
                            'Créer une nouvelle souscription à chaque rendu',
                            'Rendre tous les flux globaux',
                            'Ignorer les fuites tant que l’écran fonctionne',
                        ],
                        'correct' => 0,
                        'explanation' => 'La durée de vie des abonnements doit correspondre à celle du propriétaire afin d’éviter les ressources retenues et événements tardifs.'
                    ],
                    [
                        'question' => 'Une restauration d’état après destruction du processus recharge aussi un indicateur « dialogue ouvert » obsolète. Quelle approche améliore le résultat ?',
                        'choices' => [
                            'Enregistrer les callbacks exécutables dans le stockage',
                            'Persister les données métier nécessaires mais reconstruire les effets transitoires selon le contexte restauré',
                            'Sauvegarder systématiquement chaque détail visuel',
                            'Ne jamais restaurer les données utilisateur',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’état transitoire peut ne plus être pertinent après une interruption ; il faut restaurer selon la sémantique du parcours.'
                    ],
                    [
                        'question' => 'Un store central est devenu une API implicite utilisée par toutes les fonctionnalités. Quel risque faut-il traiter ?',
                        'choices' => [
                            'Les tests deviennent nécessairement plus fiables',
                            'Les modules sont désormais indépendants',
                            'Le couplage caché et l’absence de propriété claire des mutations compliquent l’évolution',
                            'L’état central est toujours plus rapide',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un store global sans contrats explicites rend le flux de données et les responsabilités de mise à jour difficiles à suivre.'
                    ],
                ],
            ],
            [
                'title' => 'Systèmes distribués, synchronisation et cohérence',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau professionnel.',
                'questions' => [
                    [
                        'question' => 'Un client mobile rejoue une mutation après un timeout, tandis que le serveur avait déjà validé la première tentative. Quelle protection définit le contrat ?',
                        'choices' => [
                            'Une attente plus longue avant chaque retry',
                            'Un identifiant aléatoire différent à chaque tentative',
                            'La désactivation des accusés de réception',
                            'Une clé d’idempotence conservée par le serveur pour reconnaître la même opération logique',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le serveur doit relier les tentatives répétées à une même commande afin que le retry ne duplique pas l’effet.'
                    ],
                    [
                        'question' => 'Deux répliques modifient des champs différents d’un même document hors ligne. La fusion automatique est possible. Quelle condition est indispensable ?',
                        'choices' => [
                            'La règle de fusion doit préserver les invariants métier et traiter les modifications réellement concurrentes',
                            'Les horloges des appareils doivent afficher la même heure exacte',
                            'Le dernier paquet reçu doit toujours gagner',
                            'La fusion doit ignorer les identifiants de champ',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une fusion technique correcte doit aussi maintenir le sens et les invariants du domaine.'
                    ],
                    [
                        'question' => 'Une horloge serveur et une horloge mobile diffèrent de plusieurs minutes. Pourquoi un tri par timestamp seul ne prouve-t-il pas la causalité ?',
                        'choices' => [
                            'La causalité est déterminée par le fuseau affiché',
                            'Les horloges physiques peuvent être décalées et l’ordre des événements peut être partiel',
                            'Un timestamp inclut toujours l’identité de la réplique',
                            'Toutes les opérations utilisent la même source horaire',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les temps muraux ne garantissent pas l’ordre causal dans un système distribué ; des métadonnées logiques peuvent être nécessaires.'
                    ],
                    [
                        'question' => 'Un système utilise un vector clock et observe deux versions incomparables. Quelle interprétation est appropriée ?',
                        'choices' => [
                            'L’une des versions est nécessairement corrompue',
                            'Les horloges indiquent un ordre total sans ambiguïté',
                            'Les modifications sont concurrentes selon l’information causale représentée et nécessitent une règle de résolution',
                            'La version ayant le plus de composantes gagne toujours',
                        ],
                        'correct' => 2,
                        'explanation' => 'Des vecteurs incomparables indiquent généralement que chacune des versions a avancé sans observer l’autre.'
                    ],
                    [
                        'question' => 'Un tombstone est supprimé après une courte période, mais certains appareils restent hors ligne plus longtemps. Quel risque en découle ?',
                        'choices' => [
                            'Les suppressions deviennent irréversibles côté serveur',
                            'La base se chiffre deux fois',
                            'Le tombstone empêche les mises à jour valides',
                            'Un appareil ancien peut renvoyer une entité supprimée faute d’avoir reçu le marqueur',
                        ],
                        'correct' => 3,
                        'explanation' => 'La rétention du marqueur doit couvrir les retards possibles des répliques ou être remplacée par un protocole de resynchronisation sûr.'
                    ],
                    [
                        'question' => 'Une synchronisation par curseur saute des mises à jour si plusieurs changements partagent le même timestamp. Quel type de curseur est plus robuste ?',
                        'choices' => [
                            'Un token de continuation opaque défini par le serveur ou un ordre stable combinant temps et identifiant',
                            'L’heure locale arrondie à la minute',
                            'Le nombre de lignes visibles à l’écran',
                            'Le nom du dernier champ modifié',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un curseur doit permettre une progression stable même lorsque plusieurs événements ont une date identique.'
                    ],
                    [
                        'question' => 'Un CRDT converge techniquement, mais la somme des dépenses fusionnées dépasse une limite métier. Quelle conclusion est correcte ?',
                        'choices' => [
                            'Une fusion convergente ne peut pas produire de doublons',
                            'La convergence ne remplace pas la validation d’invariants métier ni le choix d’un modèle adapté',
                            'Le CRDT garantit automatiquement le respect de toute limite',
                            'La limite doit être supprimée',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les propriétés de convergence ne garantissent pas à elles seules la validité métier de chaque état fusionné.'
                    ],
                    [
                        'question' => 'Un appareil synchronise régulièrement toutes les entités complètes, y compris des pièces jointes lourdes inchangées. Quelle évolution réduit le coût ?',
                        'choices' => [
                            'Désactiver le cache local',
                            'Compresser les identifiants sans changer le protocole',
                            'Synchroniser des changements incrémentaux et transférer les pièces jointes seulement si leur version a changé',
                            'Augmenter la fréquence des synchronisations complètes',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un protocole incrémental évite les transferts répétés et peut diminuer bande passante, énergie et latence.'
                    ],
                    [
                        'question' => 'Une file durable contient une opération dont le schéma a changé après mise à jour de l’application. Que faut-il prévoir ?',
                        'choices' => [
                            'Décoder toute ancienne commande avec le modèle courant sans validation',
                            'Supprimer silencieusement la file',
                            'Exécuter la commande sur le nouveau schéma au hasard',
                            'Versionner et migrer ou rejeter explicitement les commandes en attente selon un contrat métier sûr',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les mutations persistées survivent aux versions du code ; leur format et leur compatibilité doivent être gérés.'
                    ],
                    [
                        'question' => 'Un système affiche immédiatement des données locales puis revalide en arrière-plan. Une autre personne a modifié les données depuis. Quel comportement client doit être défini ?',
                        'choices' => [
                            'Comment présenter la version récente et préserver toute modification locale concurrente',
                            'Remplacer toujours les données locales sans examen',
                            'Ignorer la réponse distante',
                            'Redémarrer l’appareil avant l’actualisation',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le modèle stale-while-revalidate exige une règle de reconciliation quand des modifications locales ou distantes se chevauchent.'
                    ],
                    [
                        'question' => 'Une région distante reçoit des mutations en double et l’API journalise une seule réponse. Quel identifiant permet de suivre l’opération à travers plusieurs tentatives ?',
                        'choices' => [
                            'Une chaîne aléatoire non persistée',
                            'Un identifiant stable de commande ou de corrélation conservé à travers les retries',
                            'Un timestamp local nouveau à chaque tentative',
                            'Le numéro de ligne affiché à l’écran',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un identifiant stable relie les tentatives d’une même opération et aide à dédupliquer ainsi qu’à diagnostiquer son traitement.'
                    ],
                ],
            ],
            [
                'title' => 'Sécurité mobile, identité et confidentialité',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau professionnel.',
                'questions' => [
                    [
                        'question' => 'Une API mobile applique une autorisation par rôle dans l’interface et dans le serveur, mais n’isole pas les lignes par propriétaire. Quel contrôle reste manquant ?',
                        'choices' => [
                            'Une autre vérification de la couleur de l’écran',
                            'Un certificat différent par bouton',
                            'Une validation du nom de l’application uniquement',
                            'L’autorisation au niveau de chaque objet demandé ou modifié',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les contrôles de rôle ne suffisent pas toujours ; le serveur doit vérifier que l’utilisateur a accès à l’objet précis.'
                    ],
                    [
                        'question' => 'Une application stocke un refresh token à longue durée dans un fichier privé, mais en clair. Quelle amélioration réduit l’exposition ?',
                        'choices' => [
                            'Utiliser les mécanismes sécurisés disponibles sur la plateforme et limiter portée, durée et révocation du jeton',
                            'Encoder le fichier en Base64',
                            'Masquer son nom dans le système de fichiers',
                            'Copier le jeton dans les logs pour le retrouver',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le stockage privé n’est pas un chiffrement ; des protections de plateforme et un cycle de vie des credentials réduisent le risque.'
                    ],
                    [
                        'question' => 'Une politique de certificate pinning ne contient qu’une seule clé et aucun plan de rotation. Quel scénario de panne est prévisible ?',
                        'choices' => [
                            'La clé devient automatiquement renouvelable par le client',
                            'Le renouvellement de la clé peut bloquer les clients installés jusqu’à ce qu’ils reçoivent une mise à jour compatible',
                            'Le serveur cesse de présenter un certificat',
                            'TLS ignore toute date d’expiration',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le pinning restreint les identités acceptées ; des pins de secours et une procédure de rotation sont nécessaires pour éviter une rupture.'
                    ],
                    [
                        'question' => 'Une équipe chiffre les données personnelles avant stockage, mais conserve la clé dans la même base locale. Quelle propriété est compromise ?',
                        'choices' => [
                            'La compatibilité du thème sombre',
                            'L’ordre des migrations',
                            'La séparation et la protection de la clé, nécessaires pour que le chiffrement apporte une défense réelle',
                            'La lisibilité du code source uniquement',
                        ],
                        'correct' => 2,
                        'explanation' => 'Si les données et la clé sont récupérables ensemble, le chiffrement protège peu contre l’accès au stockage.'
                    ],
                    [
                        'question' => 'Un SDK d’analytique reçoit l’identifiant d’un utilisateur, ses coordonnées et son historique complet. Quel principe oriente une réduction de collecte ?',
                        'choices' => [
                            'La collecte maximale pour anticiper des usages futurs',
                            'L’agrégation après conservation indéfinie de données brutes',
                            'Le partage identique avec tous les fournisseurs',
                            'La minimisation : ne transmettre que les données nécessaires à une finalité définie et limiter leur conservation',
                        ],
                        'correct' => 3,
                        'explanation' => 'La minimisation réduit les risques de confidentialité en liant chaque donnée à un besoin précis.'
                    ],
                    [
                        'question' => 'Une permission de localisation est demandée dès le lancement, avant que l’utilisateur utilise la carte. Quel changement améliore la transparence et la proportionnalité ?',
                        'choices' => [
                            'Expliquer la finalité au moment du besoin et demander seulement le niveau d’accès nécessaire',
                            'Demander aussi microphone et contacts pour compléter le profil',
                            'Masquer l’explication dans les conditions générales',
                            'Activer l’accès en arrière-plan pour tous',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une demande contextuelle aide l’utilisateur à comprendre l’accès et limite la permission à la fonctionnalité concernée.'
                    ],
                    [
                        'question' => 'Un incident révèle qu’un jeton apparaissait dans des traces centralisées pendant six mois. Quelles actions sont nécessaires au-delà du correctif de code ?',
                        'choices' => [
                            'Demander aux utilisateurs de désinstaller sans analyser l’incident',
                            'Supprimer ou restreindre les traces concernées, évaluer l’exposition et révoquer les credentials affectés',
                            'Changer uniquement le nom du champ dans le prochain build',
                            'Conserver les traces pour l’audit sans contrôle d’accès',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les secrets déjà collectés restent exposés ; la réponse doit traiter l’historique, l’accès et le cycle de vie des credentials.'
                    ],
                    [
                        'question' => 'Une application ouvre un schéma URL personnalisé qui peut être revendiqué par une autre application. Quelle mesure évite de faire confiance aveuglément à l’appelant ?',
                        'choices' => [
                            'Masquer l’URL dans l’interface',
                            'Désactiver l’authentification pour les deep links',
                            'Valider l’appel, les paramètres et l’autorisation de la ressource comme des entrées externes',
                            'Considérer le schéma comme une preuve d’identité',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un lien entrant peut provenir d’un tiers ; il ne constitue pas une preuve d’identité ni d’autorisation.'
                    ],
                    [
                        'question' => 'Un appareil compromis peut inspecter la mémoire de l’application. Quelle affirmation est réaliste pour la protection des données ?',
                        'choices' => [
                            'Le stockage sécurisé garantit une invulnérabilité complète',
                            'Le code obfusqué remplace l’autorisation serveur',
                            'La mémoire d’un client est une frontière de confiance absolue',
                            'Les contrôles locaux réduisent certains risques mais le serveur doit limiter les privilèges et l’exposition des données',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les protections locales sont utiles mais ne rendent pas un terminal contrôlé par un attaquant totalement fiable.'
                    ],
                    [
                        'question' => 'Une fonctionnalité recueille la position uniquement pour calculer une suggestion puis n’en a plus besoin. Quelle politique réduit l’exposition ?',
                        'choices' => [
                            'Traiter la donnée au niveau nécessaire puis la supprimer ou la garder seulement selon une durée justifiée',
                            'Archiver la position exacte sans limite',
                            'Copier la position dans chaque journal technique',
                            'Conserver aussi tous les trajets futurs par défaut',
                        ],
                        'correct' => 0,
                        'explanation' => 'La limitation de conservation complète la minimisation de collecte et évite de garder une donnée sensible sans finalité.'
                    ],
                ],
            ],
            [
                'title' => 'Performance à grande échelle et observabilité',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau professionnel.',
                'questions' => [
                    [
                        'question' => 'Une régression de démarrage apparaît seulement sur les appareils d’entrée de gamme. Quelle instrumentation aide à localiser le problème ?',
                        'choices' => [
                            'Désactiver les traces de démarrage en production',
                            'Mesurer les étapes du démarrage et segmenter les percentiles par classe d’appareil et version',
                            'Suivre seulement la moyenne sur le téléphone le plus récent',
                            'Compter les lignes de code exécutées',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les mesures segmentées et les étapes instrumentées montrent où la régression se concentre et évitent qu’une moyenne la masque.'
                    ],
                    [
                        'question' => 'Le taux de crash global reste stable, mais les sessions sans crash chutent après une release. Comment interpréter ce signal ?',
                        'choices' => [
                            'Une session sans crash mesure la taille de l’application',
                            'La release ne peut pas être responsable si le taux global est stable',
                            'Le nombre ou la répartition des crashes par session a pu changer malgré une moyenne globale trompeuse',
                            'Les métriques sont contradictoires et l’une doit être supprimée',
                        ],
                        'correct' => 2,
                        'explanation' => 'Des métriques complémentaires décrivent des aspects différents ; il faut examiner leur définition, période et segmentation.'
                    ],
                    [
                        'question' => 'Une trace distribuée montre qu’une requête est lente côté mobile, mais les logs serveur indiquent un traitement rapide. Quelle donnée complète l’analyse ?',
                        'choices' => [
                            'Le nombre d’écrans dans l’application',
                            'La couleur de l’indicateur de chargement',
                            'La taille du dépôt Git',
                            'La décomposition du temps client en attente réseau, file d’attente, parsing et rendu, corrélée à la trace',
                        ],
                        'correct' => 3,
                        'explanation' => 'La latence perçue inclut les étapes client et réseau ; une corrélation avec des traces aide à isoler le segment lent.'
                    ],
                    [
                        'question' => 'Un taux de crash faible masque des échecs fréquents de sauvegarde qui ne font pas planter l’application. Quelle instrumentation est utile ?',
                        'choices' => [
                            'Une métrique métier de réussite/échec de sauvegarde, avec contexte non sensible et version',
                            'Uniquement le rapport de crash natif',
                            'La taille du cache local',
                            'La fréquence de rafraîchissement du thème',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’observabilité doit suivre les résultats métier importants, pas seulement les arrêts du processus.'
                    ],
                    [
                        'question' => 'Une alerte déclenche des centaines de notifications par une erreur intermittente connue. Quel ajustement améliore son utilité ?',
                        'choices' => [
                            'Masquer l’incident jusqu’à la prochaine release',
                            'Définir un seuil et une fenêtre fondés sur l’impact, regrouper les événements et préciser une action de réponse',
                            'Supprimer toutes les alertes de production',
                            'Alerter sur chaque événement isolément',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une alerte exploitable signale une dégradation actionnable sans générer un bruit qui nuit à la réaction.'
                    ],
                    [
                        'question' => 'Les logs de production incluent des identifiants de requête mais pas de jetons ni de contenu personnel. Quelle valeur apporte une structure cohérente ?',
                        'choices' => [
                            'Chiffrer automatiquement toutes les requêtes',
                            'Éliminer le besoin de métriques',
                            'Filtrer et corréler les événements sans dépendre de chaînes libres fragiles',
                            'Garantir que le code ne contient aucun défaut',
                        ],
                        'correct' => 2,
                        'explanation' => 'Des champs structurés facilitent les recherches et la corrélation, tout en restant soumis aux règles de minimisation.'
                    ],
                    [
                        'question' => 'Une amélioration réduit la latence moyenne de 20 %, mais le percentile 99 se dégrade nettement. Quelle conclusion convient ?',
                        'choices' => [
                            'La moyenne prouve que tous les utilisateurs sont plus rapides',
                            'Le percentile 99 est toujours inutile sur mobile',
                            'Supprimer les mesures extrêmes suffit',
                            'Les cas extrêmes se sont aggravés ; il faut comprendre leur cause avant de conclure à une amélioration globale',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les percentiles élevés décrivent les expériences lentes subies par une partie des utilisateurs et ne doivent pas être masqués par la moyenne.'
                    ],
                    [
                        'question' => 'Un budget de performance doit empêcher une croissance lente de la taille du binaire. Quelle intégration le rend actionnable ?',
                        'choices' => [
                            'Mesurer l’artefact à chaque build et faire échouer ou examiner les dépassements d’un seuil convenu',
                            'Vérifier la taille uniquement après la sortie annuelle',
                            'Remplacer la mesure par une estimation du nombre de dépendances',
                            'Supprimer les anciennes mesures',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un budget devient utile s’il est mesuré régulièrement et associé à une décision en cas de dépassement.'
                    ],
                    [
                        'question' => 'Une application conserve des journaux de diagnostic 90 jours, alors que les incidents sont généralement résolus en une semaine. Quel examen faut-il faire ?',
                        'choices' => [
                            'Désactiver tout contrôle d’accès',
                            'Réévaluer la durée et l’accès selon les besoins de diagnostic, les risques et les obligations applicables',
                            'Prolonger la conservation sans motif',
                            'Copier les logs dans les profils utilisateur',
                        ],
                        'correct' => 1,
                        'explanation' => 'La rétention doit correspondre à une finalité documentée et tenir compte de la sensibilité des informations collectées.'
                    ],
                    [
                        'question' => 'Une amélioration mémoire est testée uniquement avec une liste de dix éléments, alors que la production en affiche des milliers. Quelle validation est nécessaire ?',
                        'choices' => [
                            'Ajouter une pause entre chaque élément',
                            'Mesurer seulement la taille du fichier source',
                            'Profiler une charge représentative et vérifier les tendances de mémoire et de rendu à l’échelle cible',
                            'Conclure que la consommation est linéaire et faible sans mesure',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un scénario minuscule peut masquer les coûts qui apparaissent à l’échelle réelle ; la charge de test doit refléter l’usage.'
                    ],
                    [
                        'question' => 'Un rapport d’exception contient la stack trace complète mais ne précise ni la version ni le modèle d’appareil. Quelle donnée de contexte non sensible améliore le diagnostic ?',
                        'choices' => [
                            'Le jeton d’accès complet de l’utilisateur',
                            'Le contenu intégral de toutes les requêtes privées',
                            'Le mot de passe de la base locale',
                            'La version de l’application, la plateforme et un identifiant de parcours pseudonyme pertinent',
                        ],
                        'correct' => 3,
                        'explanation' => 'La version et le contexte technique aident à isoler une régression ; les secrets et données personnelles ne sont pas nécessaires.'
                    ],
                ],
            ],
            [
                'title' => 'Qualité logicielle, tests et résilience',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau professionnel.',
                'questions' => [
                    [
                        'question' => 'Une suite possède de nombreux tests UI lents et peu de tests unitaires, alors que les règles métier sont déterministes. Quel rééquilibrage est pertinent ?',
                        'choices' => [
                            'Conserver uniquement les vérifications manuelles',
                            'Couvrir largement les règles isolées par des tests rapides et réserver les tests UI aux parcours à risque',
                            'Supprimer tous les tests UI et métier',
                            'Transformer chaque règle en test end-to-end',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une pyramide équilibrée utilise des tests rapides pour la logique et un nombre plus limité de parcours complets coûteux.'
                    ],
                    [
                        'question' => 'Un fournisseur d’API et son client mobile changent séparément. Quel test vérifie les attentes partagées sans lancer tout le produit ?',
                        'choices' => [
                            'Un benchmark de mémoire',
                            'Un test unitaire sans interface ni contrat réseau',
                            'Un test de contrat portant sur les requêtes, réponses et règles convenues entre consumer et provider',
                            'Un test de couleur sur l’écran d’accueil',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le contract testing rend explicites les hypothèses d’interface entre systèmes et détecte leur divergence.'
                    ],
                    [
                        'question' => 'Une mutation introduit une erreur dans une règle de calcul, mais toute la suite de tests passe. Quelle technique évalue la capacité de détection ?',
                        'choices' => [
                            'Le test de charge uniquement',
                            'La mesure de couverture seule',
                            'La suppression des assertions',
                            'Le mutation testing, en introduisant des changements contrôlés et en vérifiant que les tests les détectent',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le mutation testing vérifie que des défauts artificiels représentatifs font échouer les tests concernés.'
                    ],
                    [
                        'question' => 'Un test passe ou échoue selon le temps de réponse d’un vrai service externe. Quelle correction améliore la déterminisme de la CI ?',
                        'choices' => [
                            'Contrôler la dépendance externe via un faux ou contrat simulé et isoler les tests réels',
                            'Augmenter le timeout à une heure',
                            'Relancer automatiquement tout échec jusqu’au succès',
                            'Supprimer l’assertion de résultat',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les tests doivent éviter les fluctuations incontrôlées d’un réseau ou service tiers pour fournir un signal fiable.'
                    ],
                    [
                        'question' => 'Une suite vérifie des noms de méthodes privées et casse après un refactoring sans changement fonctionnel. Quel principe de test manque ?',
                        'choices' => [
                            'Désactiver l’intégration continue',
                            'Tester les contrats et comportements observables plutôt que la forme interne de l’implémentation',
                            'Ajouter davantage de tests sur les détails privés',
                            'Interdire les changements de code',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les tests centrés sur le comportement restent plus stables lorsque l’implémentation interne évolue.'
                    ],
                    [
                        'question' => 'Une opération de paiement doit être disponible même si le service de recommandations est en panne. Quel mécanisme de résilience est approprié ?',
                        'choices' => [
                            'Réessayer le service dans une boucle infinie',
                            'Mélanger la recommandation à la transaction',
                            'Isoler la dépendance non critique et dégrader cette fonction sans bloquer le paiement',
                            'Faire échouer toute l’application lorsque la recommandation expire',
                        ],
                        'correct' => 2,
                        'explanation' => 'L’isolation et la dégradation contrôlée empêchent une panne partielle d’entraîner une panne de fonction critique.'
                    ],
                    [
                        'question' => 'Un circuit breaker s’ouvre après plusieurs erreurs d’un service distant. Quel comportement est attendu pendant l’ouverture ?',
                        'choices' => [
                            'Continuer à envoyer toutes les requêtes sans limite',
                            'Effacer l’état local de l’utilisateur',
                            'Déclarer tous les appels réussis',
                            'Échouer rapidement ou servir une solution de repli selon le contrat, puis réévaluer le service après une période définie',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le circuit breaker limite les appels vers une dépendance défaillante et laisse une voie de reprise contrôlée.'
                    ],
                    [
                        'question' => 'Une quality gate CI vérifie seulement que le projet compile. Quel ajout renforce réellement la décision de livraison ?',
                        'choices' => [
                            'Des contrôles adaptés au risque comme tests, analyse statique et vérification de dépendances, avec critères explicites',
                            'Une augmentation du nombre de branches Git',
                            'Une copie du binaire dans le dépôt source',
                            'La suppression des rapports de test',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une gate doit vérifier des propriétés pertinentes de qualité et de sécurité avant la promotion de l’artefact.'
                    ],
                    [
                        'question' => 'Une mesure de couverture augmente après ajout d’assertions qui ne vérifient aucune valeur attendue. Quelle revue faut-il mener ?',
                        'choices' => [
                            'Ajouter des tests identiques sur chaque ligne',
                            'Examiner si les tests expriment les exigences et échouent quand le comportement devient incorrect',
                            'Récompenser uniquement le pourcentage de couverture',
                            'Supprimer la couverture de tout rapport',
                        ],
                        'correct' => 1,
                        'explanation' => 'La qualité d’un test dépend de sa capacité à détecter un défaut pertinent, pas seulement des lignes exécutées.'
                    ],
                    [
                        'question' => 'Une application subit une panne partielle lors d’une perte de réseau et affiche uniquement un écran bloqué. Quelle propriété de conception corrige le parcours ?',
                        'choices' => [
                            'Remplacer les erreurs par un succès local permanent',
                            'Cacher tout indicateur de connectivité',
                            'Maintenir les opérations qui peuvent fonctionner localement et présenter clairement les fonctions temporairement indisponibles',
                            'Réessayer toutes les opérations sans fin',
                        ],
                        'correct' => 2,
                        'explanation' => 'La résilience mobile consiste à traiter les défaillances partielles et à préserver une utilité honnête lorsque c’est possible.'
                    ],
                ],
            ],
            [
                'title' => 'Releases, livraison et chaîne logicielle',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau professionnel.',
                'questions' => [
                    [
                        'question' => 'Une équipe mobile publie progressivement une nouvelle version et observe une hausse du taux d’échec d’un parcours critique. Quelle réponse respecte l’objectif du rollout ?',
                        'choices' => [
                            'Accélérer vers 100 % avant que les données soient complètes',
                            'Désactiver le monitoring pour éviter les faux positifs',
                            'Effacer les versions précédentes des métriques',
                            'Suspendre l’expansion, confirmer le signal et déclencher la mitigation ou le rollback défini',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un rollout progressif réduit l’exposition seulement si les signaux conduisent à une action avant généralisation.'
                    ],
                    [
                        'question' => 'Un feature flag distant masque une fonction, mais la version mobile contient déjà une migration incompatible avec les versions précédentes. Quelle conclusion ?',
                        'choices' => [
                            'Le flag ne garantit pas la compatibilité des données ; les migrations doivent être conçues séparément pour le déploiement progressif',
                            'Le flag annule les migrations automatiquement',
                            'La base locale ne peut pas être affectée par le binaire',
                            'Le rollback restaure toujours les données anciennes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les flags contrôlent une fonctionnalité mais ne rendent pas réversible une transformation de données.'
                    ],
                    [
                        'question' => 'Une release doit être attribuée à une source et reproduite lors d’un audit. Quelles informations le pipeline devrait-il conserver ?',
                        'choices' => [
                            'Le mot de passe de signature dans le journal',
                            'Révisions source, versions de dépendances, paramètres de build, provenance et empreinte de l’artefact',
                            'Uniquement le nom commercial de l’application',
                            'La capture d’écran du dernier build',
                        ],
                        'correct' => 1,
                        'explanation' => 'La provenance relie l’artefact à ses entrées contrôlées sans exposer les secrets.'
                    ],
                    [
                        'question' => 'Une clé de signature est utilisée à la fois par tous les développeurs et stockée dans le dépôt. Quel contrôle corrige les deux risques ?',
                        'choices' => [
                            'L’envoyer par messagerie à toute l’équipe',
                            'Le renommer comme variable publique',
                            'Déplacer le secret vers un coffre ou service sécurisé, limiter ses accès et auditer son utilisation',
                            'Le compresser avant de le laisser dans le dépôt',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les clés de signature permettent des releases sensibles et doivent être protégées avec accès restreint et traçabilité.'
                    ],
                    [
                        'question' => 'Une dépendance indirecte reçoit une mise à jour majeure automatiquement dans le pipeline. Pourquoi verrouiller ou contrôler la résolution ?',
                        'choices' => [
                            'Empêcher toute mise à jour de sécurité pour toujours',
                            'Rendre les artefacts plus volumineux',
                            'Supprimer les dépendances transitives',
                            'Éviter qu’un build change de comportement sans changement de source ou revue explicite',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un fichier de verrouillage rend les versions résolues prévisibles ; les mises à jour restent possibles avec une revue.'
                    ],
                    [
                        'question' => 'Une version mobile corrige une vulnérabilité, mais une fraction des utilisateurs restera sur l’ancienne version. Quelle mesure réduit l’exposition côté service ?',
                        'choices' => [
                            'Évaluer les contrôles serveur et compatibilité nécessaires pour refuser ou limiter les clients vulnérables',
                            'Supposer que tous les utilisateurs installent immédiatement la mise à jour',
                            'Masquer la note de version',
                            'Prolonger indéfiniment le support de l’ancien protocole',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les binaires mobiles ne sont pas mis à jour simultanément ; le service doit tenir compte des versions encore en circulation.'
                    ],
                    [
                        'question' => 'Un rollback d’application corrige un défaut d’interface mais réintroduit une version client incapable de lire le schéma serveur actuel. Quel manque de stratégie apparaît ?',
                        'choices' => [
                            'La mise en cache de l’icône',
                            'La compatibilité ascendante et descendante des contrats de données pendant la fenêtre de déploiement',
                            'La taille du logo de l’application',
                            'La présence de tests unitaires uniquement',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les releases client et serveur se chevauchent ; leurs contrats doivent tolérer les versions simultanément déployées.'
                    ],
                    [
                        'question' => 'Une modification est activée pour 1 % d’utilisateurs via un flag. Quelle dimension doit limiter la population au-delà du simple pourcentage ?',
                        'choices' => [
                            'La couleur du bouton activé',
                            'Le nombre d’écrans du build',
                            'Des segments pertinents et des garde-fous comme version, région ou cohorte, selon l’impact métier',
                            'Le hasard sans métrique ni critère de retour',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le ciblage doit produire une exposition utile à évaluer et éviter de toucher des clients incompatibles ou groupes exclus.'
                    ],
                    [
                        'question' => 'Une dépendance compromise pourrait s’exécuter durant le build et modifier l’artefact. Quelle surface de la chaîne est principalement concernée ?',
                        'choices' => [
                            'Le design du menu de navigation',
                            'La durée du cache des images',
                            'Le taux de rafraîchissement de l’écran',
                            'La chaîne d’approvisionnement logicielle et l’intégrité des entrées de build',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les dépendances, outils et environnements de build font partie des éléments à protéger et vérifier.'
                    ],
                    [
                        'question' => 'Une application introduit une nouvelle permission nécessitant une explication et une revue de confidentialité. À quel moment intégrer cette analyse ?',
                        'choices' => [
                            'Avant la release, avec les changements de produit, de données, de plateforme et de communication utilisateur',
                            'Après publication si les utilisateurs se plaignent',
                            'Uniquement après une panne de serveur',
                            'Jamais si le code compile',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une release de qualité inclut la conformité du parcours de permission et la communication, pas seulement la réussite technique du build.'
                    ],
                    [
                        'question' => 'Un service local continue de répondre malgré l’indisponibilité d’un service distant, mais les données affichées ont une fraîcheur variable. Quelle information aide l’utilisateur à interpréter le résultat ?',
                        'choices' => [
                            'Un message d’erreur générique au démarrage',
                            'La date ou l’état de dernière synchronisation, avec une action de mise à jour si disponible',
                            'Une mention « temps réel » quel que soit l’état réseau',
                            'La suppression de toute indication de fraîcheur',
                        ],
                        'correct' => 1,
                        'explanation' => 'Lorsque le système se dégrade gracieusement, indiquer la fraîcheur évite de présenter des données locales comme certaines ou actuelles.'
                    ],
                ],
            ],
            [
                'title' => 'Conception de systèmes et objectifs opérationnels',
                'description' => 'Évaluation de décisions et de pratiques de développement mobile de niveau professionnel.',
                'questions' => [
                    [
                        'question' => 'Une équipe compare une solution native et une solution partagée. Quel élément devrait structurer la décision avant le choix du framework ?',
                        'choices' => [
                            'La popularité seule d’un framework',
                            'Le nombre maximal de dépendances disponibles',
                            'La préférence du premier développeur consulté',
                            'Les exigences de performance, d’intégration plateforme, de maintenabilité, d’équipe et d’exploitation',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le choix doit découler des contraintes et objectifs du produit plutôt que d’une préférence isolée.'
                    ],
                    [
                        'question' => 'Un SLO de latence est défini pour l’API, mais aucune mesure côté application ne capture le temps perçu par l’utilisateur. Quel angle manque ?',
                        'choices' => [
                            'La latence de bout en bout, incluant réseau, traitement client et présentation du résultat',
                            'La taille du fichier de traduction',
                            'Le nombre de branches Git',
                            'La durée des tests unitaires seulement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un objectif serveur ne représente pas nécessairement l’expérience utilisateur complète du parcours mobile.'
                    ],
                    [
                        'question' => 'Un error budget est presque épuisé, mais une release urgente ajoute une nouvelle fonctionnalité non critique. Quelle décision opérationnelle est cohérente ?',
                        'choices' => [
                            'Ignorer le SLO jusqu’au prochain trimestre',
                            'Prioriser la fiabilité et limiter les changements risqués jusqu’au retour dans la cible convenue',
                            'Publier davantage pour utiliser le budget restant',
                            'Désactiver les mesures de disponibilité',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’error budget aide à équilibrer livraison et fiabilité ; son épuisement signale de réduire le risque et d’améliorer le service.'
                    ],
                    [
                        'question' => 'Une file d’événements croît plus vite que son consumer lors d’une période de pointe. Quel mécanisme évite la saturation ?',
                        'choices' => [
                            'Créer des événements en double',
                            'Ignorer les délais de traitement',
                            'Appliquer de la backpressure, borner la file ou ralentir les producteurs selon le contrat',
                            'Augmenter sans limite la mémoire de la file',
                        ],
                        'correct' => 2,
                        'explanation' => 'La backpressure contrôle le débit pour éviter que le producteur n’accumule un travail que les consommateurs ne peuvent absorber.'
                    ],
                    [
                        'question' => 'Une panne réseau ne touche que l’envoi de pièces jointes, mais l’application bloque aussi la lecture des documents déjà téléchargés. Quelle séparation améliore la résilience ?',
                        'choices' => [
                            'Faire dépendre toutes les opérations de la même requête',
                            'Supprimer les documents locaux',
                            'Réessayer l’envoi avant chaque lecture',
                            'Isoler les capacités dépendantes du réseau de celles qui peuvent fonctionner depuis le stockage local',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une défaillance partielle doit rester circonscrite ; les fonctions locales n’ont pas à attendre un service indisponible.'
                    ],
                    [
                        'question' => 'Un système doit garantir qu’une commande de stock ne dépasse jamais la quantité disponible malgré les requêtes concurrentes. Où placer la garantie finale ?',
                        'choices' => [
                            'Dans le service ou stockage autoritatif qui réalise une opération atomique ou un contrôle de concurrence',
                            'Uniquement dans le compteur affiché par chaque client',
                            'Dans un message d’avertissement visuel',
                            'Dans l’horodatage du téléphone',
                        ],
                        'correct' => 0,
                        'explanation' => 'Plusieurs clients peuvent agir simultanément ; le contrôle d’invariant doit être appliqué à la source autoritative.'
                    ],
                    [
                        'question' => 'Une dette technique est reportée pour livrer rapidement une intégration. Quel suivi transforme ce compromis en décision maîtrisée ?',
                        'choices' => [
                            'Présenter le raccourci comme une architecture définitive',
                            'Documenter le risque, l’impact, le propriétaire et les conditions de remboursement ou de réévaluation',
                            'Laisser l’implémentation sans trace',
                            'Supprimer les tests pour gagner du temps',
                        ],
                        'correct' => 1,
                        'explanation' => 'La dette technique est un coût futur ; rendre le compromis visible permet de le prioriser et de le réévaluer.'
                    ],
                    [
                        'question' => 'Une app dépend de trois services distants pour afficher une page d’accueil, alors qu’un seul fournit le contenu essentiel. Quelle conception limite l’impact des pannes ?',
                        'choices' => [
                            'Afficher une page blanche en cas d’échec d’un seul service',
                            'Réessayer les trois services en parallèle sans limite',
                            'Identifier les dépendances critiques, charger le contenu essentiel indépendamment et dégrader les widgets secondaires',
                            'Attendre la réussite de tous les services avant tout rendu',
                        ],
                        'correct' => 2,
                        'explanation' => 'La décomposition par criticité permet d’afficher l’essentiel même si une dépendance secondaire échoue.'
                    ],
                    [
                        'question' => 'Une équipe doit choisir entre cohérence immédiate et disponibilité hors ligne pour un brouillon modifiable sur plusieurs appareils. Quelle démarche est la plus solide ?',
                        'choices' => [
                            'Choisir eventual consistency sans examiner l’usage',
                            'Exiger une connexion permanente sans validation produit',
                            'Fusionner toutes les versions en concaténant le texte',
                            'Définir les invariants métier, les conflits acceptables et l’expérience de reconciliation avant de choisir le modèle de cohérence',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le niveau de cohérence est un compromis produit et technique ; il doit découler des invariants et du coût des conflits.'
                    ],
                    [
                        'question' => 'Une architecture satisfait les fonctions demandées mais échoue à diagnostiquer les incidents et à migrer ses données. Quelle évaluation est juste ?',
                        'choices' => [
                            'Les exigences non fonctionnelles et l’exploitabilité n’ont pas été suffisamment intégrées à la conception',
                            'Les fonctions métier sont toujours suffisantes pour une production',
                            'L’observabilité appartient uniquement au support',
                            'Les migrations sont indépendantes de l’architecture',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une architecture opérationnelle doit aussi couvrir fiabilité, observabilité, sécurité et évolution des données.'
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
                    'duration' => max(20, (int) ceil($questionCount * 20 / 10)),
                    'passing_score' => 70,
                    'total_marks' => $questionCount,
                    'is_active' => true,
                    'difficulty' => 'Professional',
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
