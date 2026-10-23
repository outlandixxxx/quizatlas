<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebDevelopmentProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'web-development')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Préserver les invariants métier sous concurrence',
                'description' => 'Évaluer les écritures concurrentes, les transactions et la cohérence des données d’une application Web.',
                'difficulty' => 'Professional',
                'duration' => 26,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Deux requêtes lisent stock = 1 puis vendent chacune un article avant d’écrire stock = 0. Une correction robuste consiste à :',
                        'marks' => 1,
                        'explanation' => 'Une écriture atomique conditionnée à stock > 0 évite que deux ventes consomment la même unité. L’échec de la condition doit être géré explicitement.',
                        'choices' => [
                            ['text' => 'Décrémenter si stock > 0 dans une mise à jour atomique', 'is_correct' => true],
                            ['text' => 'Lire le stock deux fois avant une écriture non conditionnelle', 'is_correct' => false],
                            ['text' => 'Désactiver le bouton après le premier clic de chaque navigateur', 'is_correct' => false],
                            ['text' => 'Écrire le stock dans une transaction sans protéger la lecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux inscriptions concurrentes utilisent le même courriel normalisé. Le code vérifie d’abord son absence par SELECT. Pour garantir l’unicité, il faut aussi :',
                        'marks' => 1,
                        'explanation' => 'Deux lectures peuvent toutes deux conclure à l’absence. La contrainte unique tranche lors de l’écriture ; l’application doit traduire le conflit en réponse compréhensible.',
                        'choices' => [
                            ['text' => 'Imposer une contrainte unique et gérer le conflit', 'is_correct' => true],
                            ['text' => 'Faire deux SELECT successifs avant chaque insertion', 'is_correct' => false],
                            ['text' => 'Mettre en cache les courriels déjà consultés', 'is_correct' => false],
                            ['text' => 'Verrouiller seulement le formulaire dans chaque navigateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une transaction enregistre une commande, puis l’application doit publier un événement. Un arrêt entre validation SQL et publication fait perdre l’événement. Le schéma adapté est :',
                        'marks' => 1,
                        'explanation' => 'L’outbox conserve l’intention de publication avec l’écriture métier. Un relais publie ensuite les événements ; les doublons et les reprises doivent aussi être prévus.',
                        'choices' => [
                            ['text' => 'Une outbox enregistrée avec la commande dans la transaction', 'is_correct' => true],
                            ['text' => 'Publier après le commit sans mémoriser l’intention d’envoi', 'is_correct' => false],
                            ['text' => 'Publier avant le commit sans gérer son éventuelle annulation', 'is_correct' => false],
                            ['text' => 'Confirmer au client puis publier seulement dans sa page', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le serveur valide une écriture, mais la lecture suivante est envoyée à une réplique en retard. Pour garantir à cet utilisateur la lecture de son écriture, une stratégie est de :',
                        'marks' => 1,
                        'explanation' => 'La cohérence après écriture exige une politique explicite de routage ou de synchronisation. Un succès d’écriture ne garantit pas que chaque réplique soit déjà à jour.',
                        'choices' => [
                            ['text' => 'Diriger cette lecture vers une source qui a déjà appliqué l’écriture confirmée', 'is_correct' => true],
                            ['text' => 'Choisir la réplique dont le ping réseau est le plus court', 'is_correct' => false],
                            ['text' => 'Réduire la durée du cache sans suivre le retard des répliques', 'is_correct' => false],
                            ['text' => 'Répartir les lectures aléatoirement après chaque écriture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un calcul financier exige des montants exacts au centime. Le choix de représentation adapté est :',
                        'marks' => 1,
                        'explanation' => 'Les flottants binaires ne représentent pas exactement toutes les fractions décimales. Des unités minimales entières ou un type décimal adapté permettent de maîtriser l’arrondi.',
                        'choices' => [
                            ['text' => 'Des entiers en unités monétaires minimales ou un type décimal avec règles d’arrondi', 'is_correct' => true],
                            ['text' => 'Utiliser un flottant binaire et arrondir uniquement son affichage', 'is_correct' => false],
                            ['text' => 'Stocker des chaînes libres et les comparer alphabétiquement', 'is_correct' => false],
                            ['text' => 'Arrondir tous les montants à l’euro avant de les additionner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux médecins peuvent quitter une garde, mais au moins un doit rester. Chacun voit l’autre présent et modifie sa propre ligne dans des transactions concurrentes. Le risque à traiter est :',
                        'marks' => 1,
                        'explanation' => 'Des écritures sur des lignes différentes peuvent violer un invariant commun selon l’isolement. Une stratégie de verrouillage cohérente ou un isolement sérialisable avec reprises peut être nécessaire.',
                        'choices' => [
                            ['text' => 'Une écriture biaisée qui exige de protéger l’invariant commun à plusieurs lignes', 'is_correct' => true],
                            ['text' => 'Une lecture sale nécessairement interdite par tout instantané', 'is_correct' => false],
                            ['text' => 'Un simple conflit de clé primaire sur une même ligne', 'is_correct' => false],
                            ['text' => 'Un interblocage garanti dès que deux lignes sont modifiées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La base annule une transaction victime d’un interblocage. La reprise applicative doit :',
                        'marks' => 1,
                        'explanation' => 'Une transaction annulée doit être recommencée selon le comportement de la base. Les effets externes, limites de tentatives et délais doivent être maîtrisés.',
                        'choices' => [
                            ['text' => 'Rejouer l’ensemble de la transaction lorsque c’est sûr, avec un nombre limité d’essais', 'is_correct' => true],
                            ['text' => 'Rejouer la dernière instruction dans une transaction déjà annulée', 'is_correct' => false],
                            ['text' => 'Confirmer l’opération puisque la première instruction a réussi', 'is_correct' => false],
                            ['text' => 'Rejouer sans limite, même si des effets externes ont déjà eu lieu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une transaction de commande appelle un service de messagerie lent tout en gardant ses verrous SQL. Une amélioration est de :',
                        'marks' => 1,
                        'explanation' => 'Un appel réseau long prolonge inutilement les verrous. Une publication durable après validation évite de confondre transaction SQL et livraison externe.',
                        'choices' => [
                            ['text' => 'Garder une transaction courte et confier l’envoi à un mécanisme durable après validation', 'is_correct' => true],
                            ['text' => 'Allonger le délai réseau en conservant les mêmes verrous', 'is_correct' => false],
                            ['text' => 'Remplacer l’envoi par plusieurs essais dans la transaction', 'is_correct' => false],
                            ['text' => 'Envoyer avant le commit sans gérer l’annulation métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une suppression logique conserve une ligne marquée deleted_at. Un nouveau compte tente de réutiliser son identifiant unique. Avant de coder, il faut :',
                        'marks' => 1,
                        'explanation' => 'La suppression logique ne retire pas la ligne de la base. Unicité, historique et restauration doivent suivre une politique compatible.',
                        'choices' => [
                            ['text' => 'Aligner unicité, réutilisation et restauration', 'is_correct' => true],
                            ['text' => 'Ajouter deleted_at en supposant que l’index ignore la ligne', 'is_correct' => false],
                            ['text' => 'Réutiliser l’identifiant sans vérifier l’effet d’une restauration', 'is_correct' => false],
                            ['text' => 'Supprimer la contrainte en se fiant au formulaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une liste paginée exige un résultat stable pour un même jeu de données et trie seulement par created_at, dont plusieurs valeurs sont égales. Ajoutez :',
                        'marks' => 1,
                        'explanation' => 'Un critère unique départage les égalités et fournit un ordre total. Sans lui, des éléments peuvent changer de position entre lectures, même sans changement métier.',
                        'choices' => [
                            ['text' => 'Départager les dates égales par un identifiant unique', 'is_correct' => true],
                            ['text' => 'Trier chaque page par sa position lors du rendu', 'is_correct' => false],
                            ['text' => 'Augmenter la taille des pages sans départager les dates égales', 'is_correct' => false],
                            ['text' => 'Garder created_at seul en ajoutant un cache de courte durée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Faire évoluer une API utilisée par plusieurs clients',
                'description' => 'Préserver les contrats, gérer les gros traitements et rendre les erreurs et les dates interprétables.',
                'difficulty' => 'Professional',
                'duration' => 29,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une application mobile ancienne est encore largement utilisée. Renommer immédiatement un champ requis dans la même version d’API risque de :',
                        'marks' => 1,
                        'explanation' => 'Une évolution de contrat doit prévoir la compatibilité ou une transition versionnée. Le déploiement du serveur ne met pas instantanément à jour tous les clients.',
                        'choices' => [
                            ['text' => 'Rompre les clients qui utilisent l’ancien champ', 'is_correct' => true],
                            ['text' => 'Mettre automatiquement à jour les anciens clients mobiles', 'is_correct' => false],
                            ['text' => 'Modifier seulement les clients dont le cache a expiré', 'is_correct' => false],
                            ['text' => 'Préserver la compatibilité dès lors que le JSON reste valide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une liste à fort volume reçoit de nouvelles entrées pendant la navigation. Pour réduire les décalages liés aux insertions en tête, une stratégie adaptée est de :',
                        'marks' => 1,
                        'explanation' => 'Une pagination par clé peut continuer après une position stable. Ses garanties dépendent du tri, des modifications possibles et de la cohérence attendue.',
                        'choices' => [
                            ['text' => 'Utiliser un curseur sur un ordre total stable', 'is_correct' => true],
                            ['text' => 'Augmenter offset à chaque page sans considérer les insertions', 'is_correct' => false],
                            ['text' => 'Trier chaque sous-ensemble après l’application de LIMIT', 'is_correct' => false],
                            ['text' => 'Mémoriser uniquement le nombre de lignes déjà affichées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un PATCH doit distinguer « ne pas modifier la date » de « supprimer la date ». Le contrat doit préciser :',
                        'marks' => 1,
                        'explanation' => 'L’absence d’un champ et une valeur explicitement nulle peuvent avoir des sens différents. Le contrat et la validation doivent préserver cette distinction.',
                        'choices' => [
                            ['text' => 'Distinguer champ absent et valeur null', 'is_correct' => true],
                            ['text' => 'Traiter toute omission comme une demande de suppression', 'is_correct' => false],
                            ['text' => 'Confondre null, chaîne vide et date absente dans tous les cas', 'is_correct' => false],
                            ['text' => 'Déduire les suppressions de l’ordre des propriétés reçues', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une exportation prend plusieurs minutes. Le serveur accepte le travail et renvoie 202. La réponse doit permettre au client de :',
                        'marks' => 1,
                        'explanation' => '202 signifie que le traitement a été accepté, pas terminé. Un identifiant de tâche et un point de suivi permettent de distinguer attente, réussite et échec.',
                        'choices' => [
                            ['text' => 'Consulter la progression et le résultat sans assimiler acceptation et succès final', 'is_correct' => true],
                            ['text' => 'Traiter 202 comme une preuve de réussite de l’export', 'is_correct' => false],
                            ['text' => 'Créer un nouveau travail à chaque demande de progression', 'is_correct' => false],
                            ['text' => 'Déduire le résultat final de la seule taille de la réponse initiale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le champ statut accepte actuellement brouillon et publie. Ajouter archive peut casser des clients dont le code refuse toute autre valeur. Avant la livraison, il faut :',
                        'marks' => 1,
                        'explanation' => 'Un ajout d’énumération peut être incompatible pour un consommateur strict. La compatibilité dépend du contrat et des comportements réels des clients.',
                        'choices' => [
                            ['text' => 'Vérifier les consommateurs et organiser la transition', 'is_correct' => true],
                            ['text' => 'Considérer tout ajout d’énumération comme rétrocompatible', 'is_correct' => false],
                            ['text' => 'Remplacer simultanément toutes les anciennes valeurs', 'is_correct' => false],
                            ['text' => 'Déployer d’abord puis supprimer les erreurs des anciens clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une date d’anniversaire est envoyée comme un instant UTC à minuit, puis affichée la veille dans un autre fuseau. Le contrat aurait dû modéliser :',
                        'marks' => 1,
                        'explanation' => 'Une date civile et un instant sont des notions différentes. Un anniversaire ne doit pas subir une conversion de fuseau comme un horodatage d’événement.',
                        'choices' => [
                            ['text' => 'Une date civile indépendante d’un fuseau', 'is_correct' => true],
                            ['text' => 'Un instant UTC obligatoirement affiché en heure locale', 'is_correct' => false],
                            ['text' => 'Une durée écoulée depuis le dernier changement d’heure', 'is_correct' => false],
                            ['text' => 'Une date obtenue à partir du fuseau du serveur uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API retourne uniquement des phrases d’erreur traduites, que les clients analysent pour décider de leur comportement. Une amélioration est de :',
                        'marks' => 1,
                        'explanation' => 'Les messages peuvent changer selon la langue ou la rédaction. Un code stable sert au traitement automatique et un message adapté sert à l’utilisateur.',
                        'choices' => [
                            ['text' => 'Ajouter des codes stables et des détails structurés', 'is_correct' => true],
                            ['text' => 'Figer les phrases françaises comme seul contrat technique', 'is_correct' => false],
                            ['text' => 'Transformer chaque erreur en succès avec un champ texte', 'is_correct' => false],
                            ['text' => 'Employer le même code générique pour toutes les décisions du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une requête GraphQL très imbriquée peut déclencher un coût élevé malgré un petit corps HTTP. Le contrôle doit inclure :',
                        'marks' => 1,
                        'explanation' => 'La taille de la requête ne suffit pas à estimer son coût. La profondeur, les multiplications de relations et les limites de résultats influencent le travail réel.',
                        'choices' => [
                            ['text' => 'Borner la complexité et les volumes calculés', 'is_correct' => true],
                            ['text' => 'Limiter seulement le nombre de caractères du corps HTTP', 'is_correct' => false],
                            ['text' => 'Compter les connexions sans analyser les opérations reçues', 'is_correct' => false],
                            ['text' => 'Appliquer le même coût à toutes les requêtes authentifiées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une importation de 2 Go est lue intégralement en mémoire avant validation. Pour limiter le risque d’épuisement, privilégiez :',
                        'marks' => 1,
                        'explanation' => 'Un traitement borné évite une consommation proportionnelle à tout le fichier en mémoire. Les limites de taille, de temps et la stratégie de reprise doivent être explicites.',
                        'choices' => [
                            ['text' => 'Traiter le fichier par flux ou lots bornés, avec une gestion explicite des erreurs', 'is_correct' => true],
                            ['text' => 'Lire deux copies complètes pour comparer leur contenu', 'is_correct' => false],
                            ['text' => 'Relever seulement le délai HTTP sans borner la mémoire', 'is_correct' => false],
                            ['text' => 'Encoder d’abord tout le fichier en Base64 dans une variable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une commande d’API accepte un objet JSON et le transmet directement à la mise à jour d’un modèle contenant role et owner_id. Il faut :',
                        'marks' => 1,
                        'explanation' => 'La validité syntaxique du JSON ne donne aucun droit sur ses propriétés. Une liste de champs autorisés empêche une modification massive de données sensibles.',
                        'choices' => [
                            ['text' => 'Autoriser explicitement les champs modifiables', 'is_correct' => true],
                            ['text' => 'Accepter les champs supplémentaires si leur type est valide', 'is_correct' => false],
                            ['text' => 'Exclure password mais accepter tout autre champ du modèle', 'is_correct' => false],
                            ['text' => 'Se fier aux seuls champs visibles dans le formulaire officiel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client envoie un champ supplémentaire inconnu. La bonne politique de traitement doit être :',
                        'marks' => 1,
                        'explanation' => 'Ignorer ou refuser les champs inconnus relève du contrat. La politique doit rester cohérente, documentée et compatible avec les évolutions prévues.',
                        'choices' => [
                            ['text' => 'Fixer une politique contractuelle et la tester', 'is_correct' => true],
                            ['text' => 'Refuser par une erreur 500 tous les champs inconnus', 'is_correct' => false],
                            ['text' => 'Stocker les champs inconnus dans les colonnes de même nom', 'is_correct' => false],
                            ['text' => 'Accepter silencieusement toute extension même si elle change les droits', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sécuriser les parcours d’identité et de session',
                'description' => 'Évaluer les flux fédérés, la validation des jetons et les changements de privilèges.',
                'difficulty' => 'Professional',
                'duration' => 31,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une SPA utilise le flux Authorization Code d’OAuth avec un fournisseur compatible. PKCE protège notamment contre :',
                        'marks' => 1,
                        'explanation' => 'PKCE lie l’échange du code à un vérificateur détenu par le client initiateur. Il ne remplace pas les autres contrôles de sécurité du flux.',
                        'choices' => [
                            ['text' => 'L’échange d’un code intercepté sans son vérificateur', 'is_correct' => true],
                            ['text' => 'L’exécution de tous les scripts injectés dans le client', 'is_correct' => false],
                            ['text' => 'La réutilisation de tout jeton d’accès après son émission', 'is_correct' => false],
                            ['text' => 'Le vol du compte chez le fournisseur d’identité lui-même', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une connexion OpenID Connect, le client a envoyé un nonce. Lorsqu’il reçoit un ID Token, il doit :',
                        'marks' => 1,
                        'explanation' => 'Le nonce lie le jeton à la tentative d’authentification concernée et aide à prévenir certains rejouements. Les autres validations du jeton restent nécessaires.',
                        'choices' => [
                            ['text' => 'Comparer avec le nonce attendu pour cette connexion', 'is_correct' => true],
                            ['text' => 'Vérifier seulement sa présence dans le jeton reçu', 'is_correct' => false],
                            ['text' => 'Le comparer au nonce du dernier utilisateur connecté', 'is_correct' => false],
                            ['text' => 'Accepter toute valeur signée sans la relier à la demande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API reçoit un JWT correctement signé mais destiné à une autre API. Elle doit :',
                        'marks' => 1,
                        'explanation' => 'Une signature valide ne prouve pas que le jeton est destiné au service courant. Émetteur, audience, échéances et règles de validation doivent correspondre au contrat.',
                        'choices' => [
                            ['text' => 'Refuser le jeton dont l’audience ne vise pas le service', 'is_correct' => true],
                            ['text' => 'L’accepter dès que la signature et la date sont valides', 'is_correct' => false],
                            ['text' => 'Utiliser le premier champ aud sans vérifier sa valeur', 'is_correct' => false],
                            ['text' => 'Réécrire localement l’audience puis continuer le traitement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un validateur JWT choisit librement sa méthode de vérification à partir du champ alg reçu. Une protection nécessaire est de :',
                        'marks' => 1,
                        'explanation' => 'Le contenu non fiable du jeton ne doit pas définir seul la politique cryptographique. Les clés et algorithmes doivent être liés à une configuration de confiance.',
                        'choices' => [
                            ['text' => 'Imposer une liste d’algorithmes de confiance', 'is_correct' => true],
                            ['text' => 'Accepter l’algorithme annoncé dès que kid est présent', 'is_correct' => false],
                            ['text' => 'Désactiver la vérification si aucun algorithme n’est reconnu', 'is_correct' => false],
                            ['text' => 'Essayer toutes les méthodes, y compris une vérification sans signature', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le fournisseur change ses clés de signature et un jeton présente un nouveau kid. Le service doit :',
                        'marks' => 1,
                        'explanation' => 'La rotation exige une gestion de cache et de rafraîchissement des clés fiable. Un jeton ne doit pas imposer une source de clés non approuvée.',
                        'choices' => [
                            ['text' => 'Rafraîchir de façon contrôlée les clés depuis la source de confiance avant validation', 'is_correct' => true],
                            ['text' => 'Suivre une URL de clé arbitraire incluse dans le jeton', 'is_correct' => false],
                            ['text' => 'Accepter provisoirement toute signature portant ce nouveau kid', 'is_correct' => false],
                            ['text' => 'Vérifier avec la première clé existante sans contrôler sa compatibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’identifiant de session reste inchangé après connexion avec élévation des droits. Une protection contre la fixation de session est de :',
                        'marks' => 1,
                        'explanation' => 'Une nouvelle session de privilèges doit éviter de réutiliser un identifiant éventuellement connu avant l’authentification. Le mécanisme doit aussi préserver les données nécessaires sans conserver l’ancien accès.',
                        'choices' => [
                            ['text' => 'Renouveler l’identifiant lors de l’élévation et invalider l’ancienne session', 'is_correct' => true],
                            ['text' => 'Conserver l’identifiant puis allonger sa durée d’expiration', 'is_correct' => false],
                            ['text' => 'Associer le nouveau rôle au même identifiant sans autre mesure', 'is_correct' => false],
                            ['text' => 'Modifier seulement les permissions exposées dans le navigateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une opération modifie le compte bancaire de versement. Même avec une session déjà ouverte, une protection adaptée est de :',
                        'marks' => 1,
                        'explanation' => 'Une opération sensible peut exiger une preuve plus récente ou plus forte. Le contrôle doit être appliqué au serveur et accompagné d’une vérification des droits.',
                        'choices' => [
                            ['text' => 'Exiger une preuve récente ou renforcée selon le risque', 'is_correct' => true],
                            ['text' => 'Se fier à toute session encore valide, quelle que soit sa durée', 'is_correct' => false],
                            ['text' => 'Accepter une confirmation JavaScript sans nouvelle preuve au serveur', 'is_correct' => false],
                            ['text' => 'Vérifier le format bancaire mais ignorer le contexte de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un lien de réinitialisation de mot de passe reste réutilisable après succès. Le système doit :',
                        'marks' => 1,
                        'explanation' => 'Un jeton de réinitialisation doit être imprévisible, lié à la bonne opération, limité dans le temps et à usage unique. Son stockage doit aussi éviter une exploitation directe en cas de fuite.',
                        'choices' => [
                            ['text' => 'Expiration courte et invalidation après usage', 'is_correct' => true],
                            ['text' => 'Expiration courte sans jamais invalider après un succès', 'is_correct' => false],
                            ['text' => 'Même jeton réutilisable jusqu’au prochain changement de courriel', 'is_correct' => false],
                            ['text' => 'Jeton fondé uniquement sur le courriel public et la date', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La déconnexion révoque le jeton de renouvellement, mais un JWT d’accès déjà émis reste valide dix minutes. Pour une révocation immédiate exigée par le métier, il faut :',
                        'marks' => 1,
                        'explanation' => 'Un jeton autonome valide peut rester utilisable jusqu’à son expiration. Une révocation immédiate exige un état ou un contrôle supplémentaire adapté à l’architecture.',
                        'choices' => [
                            ['text' => 'Vérifier aussi un état de révocation serveur', 'is_correct' => true],
                            ['text' => 'Effacer seulement la copie du jeton dans le navigateur courant', 'is_correct' => false],
                            ['text' => 'Révoquer le renouvellement en supposant l’accès déjà invalidé', 'is_correct' => false],
                            ['text' => 'Changer l’écran de connexion sans modifier les contrôles d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un export multi-organisations s’exécute dans un travailleur partagé après la requête initiale. Pour éviter qu’il utilise l’organisation du travail précédent, il faut :',
                        'marks' => 1,
                        'explanation' => 'Un travail différé ne doit pas dépendre d’un contexte de requête implicite ou réutilisé. Son identité, son périmètre et les contrôles requis doivent être explicites, avec une isolation des lectures et un nettoyage de l’état partagé.',
                        'choices' => [
                            ['text' => 'Être validée contre les droits de l’identité', 'is_correct' => true],
                            ['text' => 'Réutiliser la dernière organisation conservée dans une variable globale', 'is_correct' => false],
                            ['text' => 'Choisir la première organisation accessible à la base au démarrage', 'is_correct' => false],
                            ['text' => 'Déduire l’organisation du nom du fichier exporté après les lectures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cookie doit être envoyé lors de requêtes réellement intersites dans un scénario prévu. SameSite=None nécessite notamment Secure, mais :',
                        'marks' => 1,
                        'explanation' => 'SameSite=None et Secure ne neutralisent pas les restrictions de cookies tiers. Le parcours doit être testé dans ses contextes réels et conserver ses protections CSRF.',
                        'choices' => [
                            ['text' => 'Les politiques de cookies tiers peuvent toujours le bloquer', 'is_correct' => true],
                            ['text' => 'L’envoi intersite est alors garanti dans tous les contextes', 'is_correct' => false],
                            ['text' => 'La protection anti-CSRF devient inutile dans tous les parcours', 'is_correct' => false],
                            ['text' => 'La politique CORS autorise automatiquement chaque origine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client utilise le champ email d’un ID Token comme identifiant permanent de compte, alors que l’adresse peut changer. Pour identifier le sujet chez l’émetteur, préférez :',
                        'marks' => 1,
                        'explanation' => 'sub identifie le sujet dans le contexte de l’émetteur. Un courriel ou un nom affiché peut changer et ne constitue pas nécessairement une clé stable.',
                        'choices' => [
                            ['text' => 'Le couple iss et sub validés', 'is_correct' => true],
                            ['text' => 'Le courriel actuel, supposé immuable chez tous les fournisseurs', 'is_correct' => false],
                            ['text' => 'Le nom affiché, supposé unique dans toutes les organisations', 'is_correct' => false],
                            ['text' => 'L’identifiant de session, réutilisé comme clé permanente du compte', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Déployer sans rompre les clients en cours d’utilisation',
                'description' => 'Planifier les migrations, les ressources statiques et les livraisons progressives.',
                'difficulty' => 'Professional',
                'duration' => 26,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une nouvelle version renomme une colonne tandis que l’ancienne version tourne encore. La stratégie compatible est de :',
                        'marks' => 1,
                        'explanation' => 'Une approche d’extension puis contraction permet la coexistence des versions. Le retrait n’intervient qu’après migration des consommateurs et des données.',
                        'choices' => [
                            ['text' => 'Ajouter un contrat compatible, migrer les usages et données, puis retirer l’ancien', 'is_correct' => true],
                            ['text' => 'Renommer puis rétablir la colonne si une erreur est observée', 'is_correct' => false],
                            ['text' => 'Supprimer l’ancien schéma avant de déployer les nouveaux lecteurs', 'is_correct' => false],
                            ['text' => 'Migrer seulement la moitié des instances sans compatibilité prévue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un navigateur ouvert depuis une heure demande un ancien fragment JavaScript après un nouveau déploiement. Pour éviter un échec, il faut :',
                        'marks' => 1,
                        'explanation' => 'Des clients déjà chargés peuvent demander plus tard d’anciens fragments. Leur rétention doit suivre la stratégie de déploiement et de cache.',
                        'choices' => [
                            ['text' => 'Conserver les fragments encore référencés', 'is_correct' => true],
                            ['text' => 'Supprimer les anciens fragments dès que le nouveau build existe', 'is_correct' => false],
                            ['text' => 'Retourner index.html pour chaque fragment ancien demandé', 'is_correct' => false],
                            ['text' => 'Réutiliser les mêmes noms en leur donnant un cache immuable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le serveur SPA renvoie index.html avec statut 200 pour /api/inconnue. Le client tente d’analyser ce HTML comme du JSON. La configuration doit :',
                        'marks' => 1,
                        'explanation' => 'Le repli SPA ne doit pas masquer une route API absente ou une erreur de ressource. Chaque espace de routes doit conserver ses statuts et types de réponse.',
                        'choices' => [
                            ['text' => 'Séparer le repli des routes frontend du traitement et des erreurs de l’API', 'is_correct' => true],
                            ['text' => 'Renvoyer ce HTML en annonçant application/json', 'is_correct' => false],
                            ['text' => 'Transformer toutes les erreurs API en redirections vers l’accueil', 'is_correct' => false],
                            ['text' => 'Conserver le repli puis retirer le parseur JSON du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service worker sert une ancienne interface incompatible avec la nouvelle API. Le plan de livraison doit inclure :',
                        'marks' => 1,
                        'explanation' => 'Un service worker peut continuer à servir une version précédente. Activation, invalidation et compatibilité doivent être prévues avec les clients déjà ouverts.',
                        'choices' => [
                            ['text' => 'Versionner les caches et prévoir la transition des clients déjà servis par le service worker', 'is_correct' => true],
                            ['text' => 'Supposer que le nouveau serveur remplace tous les caches locaux', 'is_correct' => false],
                            ['text' => 'Vider seulement le CDN sans examiner le service worker', 'is_correct' => false],
                            ['text' => 'Ajouter une durée de cache longue à toutes les réponses d’API', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un retour à la version applicative précédente est envisagé après une migration destructrice. Avant de le lancer, vérifiez :',
                        'marks' => 1,
                        'explanation' => 'Un retour du code ne restaure pas automatiquement le schéma ni les données supprimées. La compatibilité et la récupération doivent être préparées avant une migration irréversible.',
                        'choices' => [
                            ['text' => 'Vérifier la compatibilité avec le schéma actuel', 'is_correct' => true],
                            ['text' => 'Supposer que revenir au code annule les écritures déjà faites', 'is_correct' => false],
                            ['text' => 'Tester seulement que l’ancienne page de connexion s’affiche', 'is_correct' => false],
                            ['text' => 'Restaurer uniquement les fichiers applicatifs sans analyser les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le déploiement progressif atteint 5 % des utilisateurs. Pour décider de poursuivre, comparez notamment :',
                        'marks' => 1,
                        'explanation' => 'Une livraison partielle doit être évaluée sur ses effets réels et ses populations. Un agrégat global peut masquer un échec grave limité aux nouveaux utilisateurs.',
                        'choices' => [
                            ['text' => 'Comparer la cohorte sur ses parcours et erreurs', 'is_correct' => true],
                            ['text' => 'Vérifier uniquement le statut de démarrage des instances', 'is_correct' => false],
                            ['text' => 'Observer seulement le taux d’erreur global non segmenté', 'is_correct' => false],
                            ['text' => 'Continuer dès que le nombre de fichiers copiés correspond au build', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le pipeline reconstruit séparément une version testée puis une version destinée à la production. Pour réduire un écart de dépendances ou de compilation, privilégiez :',
                        'marks' => 1,
                        'explanation' => 'Promouvoir le même artefact réduit les écarts entre ce qui a été testé et ce qui est livré. Les configurations et secrets d’environnement doivent rester gérés correctement.',
                        'choices' => [
                            ['text' => 'Promouvoir entre environnements l’artefact déjà construit et vérifié', 'is_correct' => true],
                            ['text' => 'Recompiler avec les dernières dépendances à chaque environnement', 'is_correct' => false],
                            ['text' => 'Appliquer des retouches manuelles à l’artefact de production', 'is_correct' => false],
                            ['text' => 'Choisir un paquet équivalent uniquement d’après son nom de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une reprise de données porte sur dix millions de lignes et peut être interrompue. Le traitement doit idéalement :',
                        'marks' => 1,
                        'explanation' => 'Des lots bornés, un repère de progression et des opérations rejouables limitent le coût d’une interruption. Il faut aussi suivre la charge et les résultats.',
                        'choices' => [
                            ['text' => 'Avancer par lots avec un point de reprise durable et des opérations rejouables', 'is_correct' => true],
                            ['text' => 'Repartir de zéro après chaque arrêt en écrasant toutes les lignes', 'is_correct' => false],
                            ['text' => 'Charger toutes les lignes avant de mémoriser la progression', 'is_correct' => false],
                            ['text' => 'Compter sur un délai HTTP très long comme seul mécanisme de reprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle instance n’a pas terminé son initialisation mais reçoit déjà des requêtes. Le routage doit attendre :',
                        'marks' => 1,
                        'explanation' => 'Le démarrage d’un processus ne prouve pas que l’application est prête. Une vérification de disponibilité doit refléter les prérequis utiles sans provoquer de retraits en cascade inutiles.',
                        'choices' => [
                            ['text' => 'Un contrôle de disponibilité reflétant la capacité réelle à recevoir ce trafic', 'is_correct' => true],
                            ['text' => 'Le seul fait que son processus possède un identifiant système', 'is_correct' => false],
                            ['text' => 'Le premier message de démarrage, avant la fin de l’initialisation', 'is_correct' => false],
                            ['text' => 'Une attente fixe identique, quelle que soit la durée réelle de démarrage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script tiers chargé sur la page de paiement est modifié chez son fournisseur. Pour maîtriser ce risque, l’équipe doit :',
                        'marks' => 1,
                        'explanation' => 'Un script tiers peut agir dans le contexte de la page. Une version maîtrisée, une intégrité vérifiée quand elle est applicable et des restrictions adaptées réduisent cette exposition.',
                        'choices' => [
                            ['text' => 'Réduire et maîtriser les scripts tiers, leur provenance et leur intégrité quand elle est vérifiable', 'is_correct' => true],
                            ['text' => 'Faire confiance à tout script dont l’adresse commence par https', 'is_correct' => false],
                            ['text' => 'Autoriser tous les scripts du fournisseur sans suivi de version', 'is_correct' => false],
                            ['text' => 'Vérifier uniquement la disponibilité du domaine avant chargement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Dimensionner et observer un service Web',
                'description' => 'Interpréter la capacité, les files, les percentiles et les coûts avec des hypothèses explicites.',
                'difficulty' => 'Professional',
                'duration' => 38,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un service stable reçoit 200 requêtes par seconde et leur durée moyenne dans le système est 0,25 seconde. Le nombre moyen de requêtes présentes est environ :',
                        'marks' => 2,
                        'explanation' => 'Selon la relation de Little en régime stable, le nombre moyen est le débit multiplié par le temps moyen : 200 × 0,25 = 50.',
                        'choices' => [
                            ['text' => '50', 'is_correct' => true],
                            ['text' => '800', 'is_correct' => false],
                            ['text' => '200', 'is_correct' => false],
                            ['text' => '0,25', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Six instances ouvrent chacune jusqu’à 25 connexions SQL. La base autorise 120 connexions et 20 sont réservées à d’autres usages. Le plan actuel :',
                        'marks' => 2,
                        'explanation' => 'Les pools peuvent totaliser 6 × 25 = 150 connexions. La capacité utilisable par l’application est 120 − 20 = 100 ; le dimensionnement doit être revu.',
                        'choices' => [
                            ['text' => '150 connexions possibles pour 100 disponibles', 'is_correct' => true],
                            ['text' => '25 connexions possibles pour 100 disponibles', 'is_correct' => false],
                            ['text' => '100 connexions possibles pour 150 disponibles', 'is_correct' => false],
                            ['text' => '120 connexions possibles pour 20 disponibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le trafic est de 1 000 lectures par seconde. Un cache avec 90 % de succès évite la base pour ces succès ; chaque échec fait une lecture SQL. La charge SQL attendue est :',
                        'marks' => 2,
                        'explanation' => 'Sous ces hypothèses, 10 % des lectures atteignent la base : 1 000 × 0,10 = 100. Les écritures et autres requêtes ne sont pas incluses.',
                        'choices' => [
                            ['text' => '100 lectures par seconde', 'is_correct' => true],
                            ['text' => '900 lectures par seconde', 'is_correct' => false],
                            ['text' => '1 000 lectures par seconde', 'is_correct' => false],
                            ['text' => '10 lectures par seconde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un objet très demandé expire et des centaines de requêtes recalculent simultanément sa valeur. Une défense contre cet emballement est de :',
                        'marks' => 1,
                        'explanation' => 'La coalescence des demandes réduit les recalculs concurrents. L’étalement des expirations et une valeur ancienne acceptable peuvent compléter cette stratégie.',
                        'choices' => [
                            ['text' => 'Coordonner les recalculs et étaler les expirations', 'is_correct' => true],
                            ['text' => 'Expirer toutes les clés voisines au même instant', 'is_correct' => false],
                            ['text' => 'Multiplier les recalculs concurrents dès la première expiration', 'is_correct' => false],
                            ['text' => 'Augmenter seulement les tentatives SQL sans limiter leur concurrence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le cache est réparti par clé, mais une seule clé concentre 70 % des demandes. Ajouter des partitions ne résout pas nécessairement le problème car :',
                        'marks' => 1,
                        'explanation' => 'Une répartition uniforme des clés ne garantit pas une répartition uniforme du trafic. Une clé très sollicitée demande une stratégie spécifique de diffusion ou de mise en cache.',
                        'choices' => [
                            ['text' => 'Une seule destination peut rester saturée', 'is_correct' => true],
                            ['text' => 'Chaque demande de cette clé est répartie uniformément par définition', 'is_correct' => false],
                            ['text' => 'Une nouvelle partition réplique automatiquement toute clé populaire', 'is_correct' => false],
                            ['text' => 'Le trafic de la clé diminue nécessairement avec sa taille de valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réponse compressée pèse 200 ko décimaux et est envoyée 500 fois par seconde. Hors surcoûts, le débit sortant vaut :',
                        'marks' => 2,
                        'explanation' => '200 000 × 500 = 100 000 000 octets par seconde. Un octet représente huit bits, soit environ 800 millions de bits par seconde.',
                        'choices' => [
                            ['text' => '100 Mo/s, soit environ 800 Mbit/s', 'is_correct' => true],
                            ['text' => '100 Mbit/s, soit environ 12,5 Mo/s', 'is_correct' => false],
                            ['text' => '10 Mo/s, soit environ 80 Mbit/s', 'is_correct' => false],
                            ['text' => '1 Mo/s, soit environ 8 Mbit/s', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une métrique porte user_id et request_id comme étiquettes pour chaque requête. Le risque principal est :',
                        'marks' => 1,
                        'explanation' => 'Des valeurs très nombreuses créent beaucoup de séries distinctes. Les identifiants détaillés conviennent plutôt à des journaux ou traces avec une politique adaptée.',
                        'choices' => [
                            ['text' => 'Une multiplication des séries et du coût à cause des valeurs presque toutes distinctes', 'is_correct' => true],
                            ['text' => 'Une agrégation plus fine sans effet sur le nombre de séries', 'is_correct' => false],
                            ['text' => 'Un stockage fixe dès lors que chaque valeur est une chaîne courte', 'is_correct' => false],
                            ['text' => 'Un problème uniquement si le nombre de serveurs dépasse cent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La moyenne de latence reste à 120 ms alors que certains clients attendent plusieurs secondes. Pour étudier ce phénomène, regardez :',
                        'marks' => 1,
                        'explanation' => 'Une moyenne peut masquer une longue traîne. Les percentiles et segmentations aident à identifier des lenteurs subies par une partie des requêtes.',
                        'choices' => [
                            ['text' => 'Les percentiles élevés et les distributions segmentées selon les parcours', 'is_correct' => true],
                            ['text' => 'La moyenne globale en retirant tous les appels lents', 'is_correct' => false],
                            ['text' => 'Le maximum d’un seul serveur choisi une fois par jour', 'is_correct' => false],
                            ['text' => 'Le débit total sans aucune mesure de durée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux serveurs ont des p95 différents. Pour calculer le p95 global, il faut :',
                        'marks' => 1,
                        'explanation' => 'Les percentiles ne se combinent pas par une simple moyenne. Des histogrammes compatibles peuvent permettre une estimation agrégée pondérée par les observations.',
                        'choices' => [
                            ['text' => 'Des observations ou distributions compatibles à agréger', 'is_correct' => true],
                            ['text' => 'Faire la moyenne des deux p95 même avec des volumes différents', 'is_correct' => false],
                            ['text' => 'Pondérer les deux p95 par le nombre de requêtes et appeler cela un p95 exact', 'is_correct' => false],
                            ['text' => 'Retenir le plus élevé comme percentile global exact', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les travailleurs terminent 80 tâches par seconde, mais 100 nouvelles tâches arrivent chaque seconde pendant dix minutes. Sans autre effet, la file augmente de :',
                        'marks' => 2,
                        'explanation' => 'Le déficit de traitement est de 20 tâches par seconde pendant 600 secondes : 20 × 600 = 12 000 tâches.',
                        'choices' => [
                            ['text' => '12 000 tâches', 'is_correct' => true],
                            ['text' => '2 000 tâches', 'is_correct' => false],
                            ['text' => '600 tâches', 'is_correct' => false],
                            ['text' => '48 000 tâches', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nombre de tâches en file paraît faible, mais une tâche prioritaire attend depuis une heure. Une mesure complémentaire utile est :',
                        'marks' => 1,
                        'explanation' => 'La longueur d’une file ne révèle ni l’ancienneté ni les différences de priorité. L’âge et les délais par catégorie éclairent l’expérience métier.',
                        'choices' => [
                            ['text' => 'L’âge des tâches par catégorie', 'is_correct' => true],
                            ['text' => 'Le nombre de travailleurs sans aucune mesure d’attente', 'is_correct' => false],
                            ['text' => 'Le volume total terminé depuis le lancement du service', 'is_correct' => false],
                            ['text' => 'La longueur globale de la file sans distinguer les priorités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La requête filtre tenant_id, trie created_at puis id et récupère une petite page. Le choix d’un index doit :',
                        'marks' => 1,
                        'explanation' => 'Un index composé peut soutenir le filtre et le tri, mais son utilité dépend des requêtes, de la distribution et des coûts d’écriture. Le plan d’exécution doit confirmer le bénéfice.',
                        'choices' => [
                            ['text' => 'Valider l’index avec les filtres, le tri et le plan réel', 'is_correct' => true],
                            ['text' => 'Créer un index sur chaque champ sans vérifier le plan', 'is_correct' => false],
                            ['text' => 'Choisir l’ordre des colonnes selon leur nom alphabétique', 'is_correct' => false],
                            ['text' => 'Ignorer le coût des écritures dès qu’une lecture devient plus rapide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans PostgreSQL, un ingénieur veut lancer EXPLAIN ANALYZE sur un UPDATE de production pour observer son coût. Il doit savoir que :',
                        'marks' => 1,
                        'explanation' => 'EXPLAIN ANALYZE exécute l’instruction. Sur une écriture, ses effets et sa charge exigent une précaution explicite ; une simple intention d’observer ne les annule pas.',
                        'choices' => [
                            ['text' => 'L’instruction est exécutée, avec ses effets et sa consommation de ressources', 'is_correct' => true],
                            ['text' => 'L’instruction est seulement simulée, même avec ANALYZE', 'is_correct' => false],
                            ['text' => 'Les écritures sont automatiquement annulées par EXPLAIN', 'is_correct' => false],
                            ['text' => 'Les verrous et les déclencheurs sont systématiquement désactivés', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Limiter les pannes et les effets des reprises',
                'description' => 'Raisonner sur les paiements incertains, les budgets de temps et la fiabilité mesurée.',
                'difficulty' => 'Professional',
                'duration' => 31,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un paiement a peut-être réussi, mais la réponse du prestataire est perdue. Avant un nouvel encaissement, le service doit :',
                        'marks' => 1,
                        'explanation' => 'Une interruption de réponse laisse un résultat incertain. Une référence stable et la consultation ou réconciliation de l’état évitent de confondre échec de transport et échec du paiement.',
                        'choices' => [
                            ['text' => 'Retrouver l’état du paiement avec une référence stable et une stratégie d’idempotence', 'is_correct' => true],
                            ['text' => 'Débiter à nouveau avec une référence différente à chaque essai', 'is_correct' => false],
                            ['text' => 'Assimiler l’absence de réponse à un refus certain du prestataire', 'is_correct' => false],
                            ['text' => 'Considérer le paiement réussi dès l’ouverture de la connexion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux demandes portent la même clé d’idempotence mais des montants différents. La politique du serveur doit :',
                        'marks' => 1,
                        'explanation' => 'Une clé doit être liée à la même opération et à ses paramètres pertinents. Une réutilisation divergente doit être détectée et traitée comme un conflit.',
                        'choices' => [
                            ['text' => 'Refuser selon le contrat cette clé déjà associée à des paramètres différents', 'is_correct' => true],
                            ['text' => 'Exécuter les deux paiements en conservant la même clé', 'is_correct' => false],
                            ['text' => 'Répondre avec le premier résultat sans comparer les paramètres', 'is_correct' => false],
                            ['text' => 'Remplacer silencieusement les paramètres de l’opération précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un appel dispose d’un budget global de deux secondes et a déjà consommé 1,6 seconde. Son prochain appel aval devrait :',
                        'marks' => 1,
                        'explanation' => 'Les budgets de temps doivent se propager pour limiter l’attente totale. Un délai indépendant complet à chaque niveau peut dépasser fortement la limite utilisateur.',
                        'choices' => [
                            ['text' => 'Limiter l’appel au budget restant, soit au plus 0,4 seconde dans cet exemple', 'is_correct' => true],
                            ['text' => 'Réattribuer deux secondes entières à chaque service aval', 'is_correct' => false],
                            ['text' => 'Ajouter le temps déjà écoulé au délai du prochain appel', 'is_correct' => false],
                            ['text' => 'Ignorer le budget global dès qu’un appel est interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Trois niveaux de services effectuent chacun jusqu’à trois tentatives pour une même opération aval. Dans le pire cas, le dernier service peut recevoir :',
                        'marks' => 2,
                        'explanation' => 'Les reprises peuvent se multiplier : 3 × 3 × 3 = 27. Elles doivent être coordonnées et bornées plutôt que superposées sans budget.',
                        'choices' => [
                            ['text' => '27 tentatives', 'is_correct' => true],
                            ['text' => '9 tentatives', 'is_correct' => false],
                            ['text' => '6 tentatives', 'is_correct' => false],
                            ['text' => '3 tentatives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un circuit de protection s’ouvre après des échecs répétés. Pour savoir si le service est rétabli, une phase semi-ouverte doit :',
                        'marks' => 1,
                        'explanation' => 'Des appels limités testent la reprise sans recréer immédiatement la surcharge. Leur résultat détermine la fermeture ou la réouverture du circuit.',
                        'choices' => [
                            ['text' => 'Laisser passer un petit nombre d’appels pour vérifier prudemment le rétablissement', 'is_correct' => true],
                            ['text' => 'Libérer toutes les requêtes en attente au même instant', 'is_correct' => false],
                            ['text' => 'Déclarer la reprise dès qu’un délai fixe est écoulé', 'is_correct' => false],
                            ['text' => 'Tester seulement que le processus distant existe sans appel utile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le service de recommandations ralentit et occupe tous les travailleurs du site, bloquant les achats. Une isolation utile est de :',
                        'marks' => 1,
                        'explanation' => 'Des limites séparées empêchent une dépendance secondaire d’épuiser toutes les ressources. Cette isolation doit être dimensionnée selon les parcours critiques.',
                        'choices' => [
                            ['text' => 'Isoler et borner ses ressources', 'is_correct' => true],
                            ['text' => 'Lui donner accès sans limite au pool partagé du paiement', 'is_correct' => false],
                            ['text' => 'Augmenter les délais d’attente sur le même pool saturé', 'is_correct' => false],
                            ['text' => 'Ajouter des reprises synchrones dans chaque travailleur déjà bloqué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une dépendance de tarification est indisponible. Afficher le dernier prix connu puis encaisser sans contrôle peut être dangereux. Le mode dégradé doit :',
                        'marks' => 1,
                        'explanation' => 'Un repli n’est acceptable que si ses effets restent valides pour le métier. Une consultation approximative et un engagement financier n’ont pas les mêmes exigences.',
                        'choices' => [
                            ['text' => 'Vérifier que le prix de repli reste valide pour l’engagement financier envisagé', 'is_correct' => true],
                            ['text' => 'Encaisser systématiquement avec le prix présent en cache', 'is_correct' => false],
                            ['text' => 'Retenir le dernier prix affiché par le navigateur comme autorité', 'is_correct' => false],
                            ['text' => 'Valider toute commande pourvu que la réponse HTTP soit rapide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un objectif de disponibilité est de 99,9 % sur 30 jours, mesuré en durée et sans exclusion. Le budget d’indisponibilité est :',
                        'marks' => 2,
                        'explanation' => 'Trente jours représentent 43 200 minutes. Le taux d’erreur autorisé est 0,1 %, soit 43 200 × 0,001 = 43,2 minutes.',
                        'choices' => [
                            ['text' => '43,2 minutes', 'is_correct' => true],
                            ['text' => '4,32 minutes', 'is_correct' => false],
                            ['text' => '432 minutes', 'is_correct' => false],
                            ['text' => '30 minutes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une panne consomme presque tout le budget d’erreur alors que les métriques CPU restent normales. Une alerte pertinente doit prioritairement suivre :',
                        'marks' => 1,
                        'explanation' => 'Un service peut être inutilisable sans saturation CPU. Les indicateurs doivent refléter la réussite attendue par les utilisateurs et la consommation du budget d’erreur.',
                        'choices' => [
                            ['text' => 'Les échecs des parcours utilisateur définis par l’objectif de service', 'is_correct' => true],
                            ['text' => 'Le CPU seul comme preuve d’un service utilisable', 'is_correct' => false],
                            ['text' => 'Le nombre de processus démarrés sans essai fonctionnel', 'is_correct' => false],
                            ['text' => 'La disponibilité du serveur HTTP sans vérifier les transactions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pendant un incident, la dernière livraison correspond au début des erreurs et un retour compatible est disponible. La priorité immédiate est de :',
                        'marks' => 1,
                        'explanation' => 'La réduction d’impact peut précéder l’analyse complète. Les actions doivent être suivies et les preuves conservées pour comprendre ensuite les causes.',
                        'choices' => [
                            ['text' => 'Réduire l’impact avec une action maîtrisée tout en gardant les preuves utiles à l’analyse', 'is_correct' => true],
                            ['text' => 'Attendre la cause complète malgré un retour sûr disponible', 'is_correct' => false],
                            ['text' => 'Effacer les anciennes traces avant toute investigation', 'is_correct' => false],
                            ['text' => 'Appliquer plusieurs changements ensemble sans mesurer leurs effets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le service reçoit 429 avec Retry-After. Un client correctement conçu doit :',
                        'marks' => 1,
                        'explanation' => 'Retry-After peut guider le délai avant une nouvelle tentative. Le client doit aussi tenir compte de son budget, de l’opération et de l’abandon éventuel par l’utilisateur.',
                        'choices' => [
                            ['text' => 'Une reprise limitée tenant compte de Retry-After et du budget disponible', 'is_correct' => true],
                            ['text' => 'Une reprise immédiate en parallèle sur chaque erreur 429', 'is_correct' => false],
                            ['text' => 'Une nouvelle authentification obligatoire après toute réponse 429', 'is_correct' => false],
                            ['text' => 'Une attente exactement identique pour tous les clients sans budget global', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Valider les parcours réels et la qualité durable',
                'description' => 'Associer accessibilité, essais de concurrence, confidentialité et retour d’expérience.',
                'difficulty' => 'Professional',
                'duration' => 26,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une fenêtre modale de confirmation s’ouvre au-dessus de la page. Pour un parcours clavier cohérent, il faut notamment :',
                        'marks' => 1,
                        'explanation' => 'Une modale exige une gestion du focus et des commandes de fermeture cohérente avec sa sémantique. Le visiteur doit savoir où il se trouve et pouvoir poursuivre son action.',
                        'choices' => [
                            ['text' => 'Placer le focus de façon adaptée dans la modale, puis fournir un retour cohérent à sa fermeture', 'is_correct' => true],
                            ['text' => 'Bloquer seulement les clics, sans modifier le parcours clavier', 'is_correct' => false],
                            ['text' => 'Laisser la tabulation atteindre tous les liens masqués derrière la modale', 'is_correct' => false],
                            ['text' => 'Fermer la fenêtre sans restituer de point de reprise au clavier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un outil automatique ne signale aucune erreur d’accessibilité. Avant de conclure, il faut encore :',
                        'marks' => 1,
                        'explanation' => 'L’automatisation ne couvre qu’une partie des critères et usages. Des parcours réels révèlent notamment des problèmes d’ordre, de compréhension et de gestion du focus.',
                        'choices' => [
                            ['text' => 'Compléter l’analyse par des parcours au clavier et avec des technologies d’assistance', 'is_correct' => true],
                            ['text' => 'Conclure à une conformité complète dès que le score atteint 100', 'is_correct' => false],
                            ['text' => 'Ne vérifier que les pages où l’outil a signalé un problème', 'is_correct' => false],
                            ['text' => 'Remplacer toute navigation clavier par un second passage automatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un tableau de cours actualise ses valeurs dix fois par seconde dans une région aria-live="assertive". Pour éviter d’interrompre constamment la lecture, il faut :',
                        'marks' => 1,
                        'explanation' => 'Les annonces doivent aider l’utilisateur sans saturer le lecteur d’écran. La fréquence, la priorité et la pertinence des messages doivent être conçues et testées.',
                        'choices' => [
                            ['text' => 'Réduire et regrouper les annonces, avec une priorité correspondant à leur urgence réelle', 'is_correct' => true],
                            ['text' => 'Annoncer chaque cellule séparément avec la priorité maximale', 'is_correct' => false],
                            ['text' => 'Lire tout le tableau à chaque modification numérique', 'is_correct' => false],
                            ['text' => 'Déplacer le focus vers la région à chaque nouvelle valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un site français contient un long passage en anglais que le lecteur d’écran prononce mal. Une correction sémantique est de :',
                        'marks' => 1,
                        'explanation' => 'Une indication de langue locale permet aux technologies d’assistance d’adapter leur prononciation sans changer la langue principale du document.',
                        'choices' => [
                            ['text' => 'Déclarer lang="en" sur le passage en anglais sans changer la langue principale du document', 'is_correct' => true],
                            ['text' => 'Modifier seulement le titre du document en anglais', 'is_correct' => false],
                            ['text' => 'Ajouter aria-label="English" sans déclarer la langue du contenu', 'is_correct' => false],
                            ['text' => 'Changer la police en supposant qu’elle détermine la prononciation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La version arabe inverse toute la page avec une transformation visuelle, mais les numéros et champs deviennent difficiles à utiliser. Une meilleure base est de :',
                        'marks' => 1,
                        'explanation' => 'La direction du document et les propriétés logiques prennent en compte le sens d’écriture. Les dates, nombres, URLs et passages mixtes demandent des essais spécifiques.',
                        'choices' => [
                            ['text' => 'Utiliser dir et des propriétés logiques', 'is_correct' => true],
                            ['text' => 'Inverser les caractères de chaque chaîne avant de l’afficher', 'is_correct' => false],
                            ['text' => 'Appliquer une symétrie visuelle à tous les contrôles natifs', 'is_correct' => false],
                            ['text' => 'Réorganiser seulement les pixels sans vérifier l’ordre de lecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test du stock lance les achats l’un après l’autre et ne reproduit pas une survente. Pour vérifier la protection de concurrence, il faut :',
                        'marks' => 1,
                        'explanation' => 'Une anomalie de concurrence exige des opérations simultanées ou une orchestration qui expose leur chevauchement. Un parcours séquentiel peut toujours réussir sans exercer cette protection.',
                        'choices' => [
                            ['text' => 'Faire réellement se chevaucher les transactions dans un scénario de test contrôlé', 'is_correct' => true],
                            ['text' => 'Répéter le même achat séquentiel sur une base réinitialisée', 'is_correct' => false],
                            ['text' => 'Attendre la fin du premier achat avant de lancer le second', 'is_correct' => false],
                            ['text' => 'Tester seulement le calcul du total hors de toute écriture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une modification optimiste masque une ligne immédiatement, mais la suppression serveur échoue. Le contrat d’interface doit prévoir :',
                        'marks' => 1,
                        'explanation' => 'Une interface optimiste peut diverger du serveur. L’échec doit rétablir un état cohérent et permettre à l’utilisateur de comprendre la situation.',
                        'choices' => [
                            ['text' => 'Rétablir ou réconcilier l’état avec le serveur et expliquer le refus à l’utilisateur', 'is_correct' => true],
                            ['text' => 'Conserver la suppression visuelle et afficher un succès local', 'is_correct' => false],
                            ['text' => 'Réessayer sans limite en masquant le refus du serveur', 'is_correct' => false],
                            ['text' => 'Annuler aussi les changements indépendants des autres utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour diagnostiquer un incident d’authentification, l’équipe propose de journaliser tous les cookies et jetons. Il vaut mieux :',
                        'marks' => 1,
                        'explanation' => 'Les journaux doivent permettre l’analyse sans devenir une source de vol d’identifiants. Il faut maîtriser les champs, l’accès et la conservation.',
                        'choices' => [
                            ['text' => 'Tracer le diagnostic sans secrets', 'is_correct' => true],
                            ['text' => 'Conserver les jetons complets dans un journal peu consulté', 'is_correct' => false],
                            ['text' => 'Copier les cookies dans les URL de suivi pour faciliter les recherches', 'is_correct' => false],
                            ['text' => 'Journaliser les mots de passe uniquement pendant les incidents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux de couverture de code de 100 % est annoncé. L’affirmation justifiée est :',
                        'marks' => 1,
                        'explanation' => 'La couverture mesure une exécution selon un périmètre défini. Elle ne juge ni la pertinence des cas ni la force des assertions.',
                        'choices' => [
                            ['text' => 'Le code mesuré a été exécuté, ce qui ne prouve pas la qualité des cas et des assertions', 'is_correct' => true],
                            ['text' => 'Toutes les assertions vérifient nécessairement le bon résultat', 'is_correct' => false],
                            ['text' => 'Tous les droits et toutes les limites ont forcément été testés', 'is_correct' => false],
                            ['text' => 'Tous les environnements et appareils sont déjà couverts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après plusieurs incidents semblables, chaque correctif ajoute seulement une nouvelle alerte. Pour réduire durablement la répétition, il faut :',
                        'marks' => 1,
                        'explanation' => 'Un retour d’expérience utile relie les faits aux facteurs techniques et organisationnels, puis à des actions suivies. Une alerte supplémentaire ne supprime pas nécessairement la cause.',
                        'choices' => [
                            ['text' => 'Suivre des actions sur les causes contributives', 'is_correct' => true],
                            ['text' => 'Ajouter une alerte identique après chaque incident', 'is_correct' => false],
                            ['text' => 'Changer le responsable sans analyser les conditions techniques', 'is_correct' => false],
                            ['text' => 'Clore l’incident dès que la page d’accueil répond à nouveau', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'Architecture Web professionnelle',
            'Performance et scalabilité Web',
            'Sécurité Web professionnelle',
            'API et systèmes distribués',
            'CI/CD et DevOps Web',
            'Monitoring et observabilité',
            'Backend et bases de données avancés',
            'Conception Web professionnelle',
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
