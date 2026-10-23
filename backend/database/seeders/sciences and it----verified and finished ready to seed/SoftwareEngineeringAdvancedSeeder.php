<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareEngineeringAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'software-engineering')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Modéliser le domaine et protéger les frontières',
                'description' => 'Choisir des limites de modèle et de cohérence à partir des invariants métier.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Le mot « client » désigne un acheteur dans la vente et un compte facturé dans la comptabilité. Quelle organisation DDD évite de forcer un modèle ambigu commun ?',
                        'marks' => 1,
                        'explanation' => 'Un contexte délimité fixe le sens d’un modèle dans une frontière donnée ; les échanges entre contextes doivent rendre les différences explicites.',
                        'choices' => [
                            ['text' => 'Des contextes délimités aux échanges explicites', 'is_correct' => true],
                            ['text' => 'Une classe Client globale imposant toutes les significations', 'is_correct' => false],
                            ['text' => 'Une table partagée dont chaque service interprète librement les champs', 'is_correct' => false],
                            ['text' => 'Une simple différence de noms de variables dans un même contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une adresse postale est définie par ses champs et n’a pas d’identité métier propre. Quelle modélisation est la plus adaptée ?',
                        'marks' => 1,
                        'explanation' => 'Un objet-valeur représente un concept par ses attributs ; il est souvent conçu comme immuable.',
                        'choices' => [
                            ['text' => 'Un objet-valeur comparé par ses attributs', 'is_correct' => true],
                            ['text' => 'Une entité identifiée uniquement par un numéro technique', 'is_correct' => false],
                            ['text' => 'Un service de domaine sans données', 'is_correct' => false],
                            ['text' => 'Un événement qui remplace chaque lecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une commande conserve son identité malgré une modification de son adresse de livraison. Quel trait la caractérise dans ce modèle ?',
                        'marks' => 1,
                        'explanation' => 'Une entité est suivie par son identité à travers ses évolutions, contrairement à une valeur définie uniquement par ses attributs.',
                        'choices' => [
                            ['text' => 'C’est une entité dont l’identité persiste', 'is_correct' => true],
                            ['text' => 'C’est nécessairement un objet-valeur', 'is_correct' => false],
                            ['text' => 'Son identité dépend uniquement de tous ses champs actuels', 'is_correct' => false],
                            ['text' => 'C’est uniquement un message technique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le total d’une commande doit toujours correspondre à ses lignes après une modification. Quel rôle joue la racine de cet agrégat ?',
                        'marks' => 1,
                        'explanation' => 'La racine contrôle les modifications de l’agrégat pour protéger ses invariants.',
                        'choices' => [
                            ['text' => 'Contrôler les modifications de l’agrégat', 'is_correct' => true],
                            ['text' => 'Permettre à tous les modules d’écrire directement les lignes', 'is_correct' => false],
                            ['text' => 'Dupliquer les règles dans chaque contrôleur', 'is_correct' => false],
                            ['text' => 'Se limiter à donner un nom à la table', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe regroupe tout son catalogue dans un agrégat unique et rencontre beaucoup de contention. Quel réexamen est pertinent ?',
                        'marks' => 1,
                        'explanation' => 'Une frontière d’agrégat doit protéger une cohérence nécessaire sans regrouper inutilement des changements indépendants.',
                        'choices' => [
                            ['text' => 'Redéfinir la frontière autour des invariants synchrones réels', 'is_correct' => true],
                            ['text' => 'Séparer les données au hasard sans examiner les invariants', 'is_correct' => false],
                            ['text' => 'Garder toutes les écritures dans une transaction globale par principe', 'is_correct' => false],
                            ['text' => 'Créer une racine différente pour chaque champ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle de conversion métier n’appartient naturellement à aucune entité ni valeur existante. Où peut-elle être placée ?',
                        'marks' => 1,
                        'explanation' => 'Un service de domaine porte un comportement métier qui ne trouve pas de place naturelle dans une entité ou un objet-valeur.',
                        'choices' => [
                            ['text' => 'Un service de domaine', 'is_correct' => true],
                            ['text' => 'Dans un contrôleur HTTP parce qu’elle est métier', 'is_correct' => false],
                            ['text' => 'Dans une migration de base exécutée à chaque requête', 'is_correct' => false],
                            ['text' => 'Dans un composant de présentation uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un message « CommandeValidée » est émis après la réussite de la validation. Quelle signification doit-il porter ?',
                        'marks' => 1,
                        'explanation' => 'Un événement de domaine décrit un fait passé ; sa publication n’implique pas que tous les effets distants sont terminés.',
                        'choices' => [
                            ['text' => 'Un fait métier survenu', 'is_correct' => true],
                            ['text' => 'Une demande encore non acceptée', 'is_correct' => false],
                            ['text' => 'Une garantie que tous les consommateurs ont déjà fini', 'is_correct' => false],
                            ['text' => 'Un ordre de modifier toutes les bases', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur impose un modèle de données différent du domaine local. Quel rôle attribuer à une couche anticorruption ?',
                        'marks' => 1,
                        'explanation' => 'La couche de traduction protège le sens du modèle local contre les particularités d’un système externe.',
                        'choices' => [
                            ['text' => 'Traduire pour protéger le modèle local', 'is_correct' => true],
                            ['text' => 'Faire adopter toutes les classes du fournisseur au domaine', 'is_correct' => false],
                            ['text' => 'Remplacer chaque validation par un appel au fournisseur', 'is_correct' => false],
                            ['text' => 'Partager directement les tables internes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle métier doit être testable sans serveur web ni base. Quelle direction de dépendance convient ?',
                        'marks' => 1,
                        'explanation' => 'Une architecture à ports et adaptateurs isole le cœur métier des détails d’entrée, de sortie et d’infrastructure.',
                        'choices' => [
                            ['text' => 'Les adaptateurs techniques dépendent des contrats du domaine', 'is_correct' => true],
                            ['text' => 'Le domaine importe le framework et les clients SQL concrets', 'is_correct' => false],
                            ['text' => 'Chaque entité ouvre sa connexion réseau', 'is_correct' => false],
                            ['text' => 'Les tests métier ne passent que par l’interface graphique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle de domaine reprend exactement les tables et ne sait pas exprimer ses invariants sans contrôleur. Quel défaut possible mérite examen ?',
                        'marks' => 1,
                        'explanation' => 'Un schéma utile au stockage ne constitue pas à lui seul un modèle adapté aux comportements et règles du domaine.',
                        'choices' => [
                            ['text' => 'Un modèle dicté par le stockage plutôt que le métier', 'is_correct' => true],
                            ['text' => 'Le domaine est nécessairement trop riche', 'is_correct' => false],
                            ['text' => 'Les tables empêchent toute encapsulation', 'is_correct' => false],
                            ['text' => 'Les tests unitaires doivent être supprimés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle interdit toute dépendance de la couche métier vers l’interface web. Comment en faire un contrôle répétable ?',
                        'marks' => 1,
                        'explanation' => 'Une fonction de conformité architecturale peut vérifier automatiquement une propriété structurelle importante.',
                        'choices' => [
                            ['text' => 'Un test architectural des dépendances', 'is_correct' => true],
                            ['text' => 'Compter les fichiers après chaque livraison', 'is_correct' => false],
                            ['text' => 'Relire seulement le nom des dossiers', 'is_correct' => false],
                            ['text' => 'Reporter le contrôle au premier incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une décision architecturale était fondée sur un faible volume, désormais multiplié par cent. Quelle gestion de son historique est saine ?',
                        'marks' => 1,
                        'explanation' => 'Une décision garde sa valeur historique même si les contraintes justifient ensuite de la remplacer.',
                        'choices' => [
                            ['text' => 'Une nouvelle décision liée à celle qu’elle remplace', 'is_correct' => true],
                            ['text' => 'Effacer l’ancienne décision pour masquer son contexte', 'is_correct' => false],
                            ['text' => 'Considérer toute décision comme irrévocable', 'is_correct' => false],
                            ['text' => 'Changer la solution sans conserver les raisons', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Vérifier au-delà des exemples usuels',
                'description' => 'Explorer des propriétés, des interactions et des hypothèses de vérification.',
                'difficulty' => 'Advanced',
                'duration' => 21,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un outil de mutation signale un mutant survivant qui calcule exactement le même résultat pour toutes les entrées admissibles. Quelle interprétation est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Les mutants équivalents ne peuvent pas être distingués par le comportement attendu ; ils limitent l’interprétation brute du score.',
                        'choices' => [
                            ['text' => 'Un survivant équivalent ne prouve pas une lacune', 'is_correct' => true],
                            ['text' => 'Tout survivant prouve une régression réelle', 'is_correct' => false],
                            ['text' => 'La couverture doit nécessairement être nulle', 'is_correct' => false],
                            ['text' => 'Il faut exposer une variable privée pour le tuer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test de propriété échoue sur une liste de mille éléments puis fournit une liste de deux éléments qui reproduit l’échec. Quel mécanisme facilite ce diagnostic ?',
                        'marks' => 1,
                        'explanation' => 'La réduction, souvent appelée shrinking, cherche un contre-exemple plus petit qui conserve l’échec.',
                        'choices' => [
                            ['text' => 'La réduction du contre-exemple', 'is_correct' => true],
                            ['text' => 'La parallélisation des assertions', 'is_correct' => false],
                            ['text' => 'La duplication de l’entrée initiale', 'is_correct' => false],
                            ['text' => 'La désactivation des cas limites', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur veut rendre obligatoire un champ auparavant facultatif dans les requêtes de ses clients. Quelle preuve aide à détecter la rupture avant déploiement ?',
                        'marks' => 1,
                        'explanation' => 'La nouvelle obligation peut invalider les anciens clients même si le fournisseur compile et fonctionne seul.',
                        'choices' => [
                            ['text' => 'Des tests de contrat couvrant les attentes des consommateurs existants', 'is_correct' => true],
                            ['text' => 'La compilation isolée du fournisseur', 'is_correct' => false],
                            ['text' => 'Un test de style de la nouvelle structure', 'is_correct' => false],
                            ['text' => 'Le nombre de lignes modifiées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un faux dépôt reproduit si fidèlement l’implémentation actuelle que le test réussit malgré une erreur de contrat. Quelle amélioration est pertinente ?',
                        'marks' => 1,
                        'explanation' => 'Un double ne garantit pas la fidélité du système réel ; des tests de contrat et d’intégration couvrent cette limite.',
                        'choices' => [
                            ['text' => 'Tester le contrat et une intégration réelle ciblée', 'is_correct' => true],
                            ['text' => 'Ajouter les mêmes erreurs au faux transport', 'is_correct' => false],
                            ['text' => 'Supprimer les assertions observables', 'is_correct' => false],
                            ['text' => 'Tester seulement les appels privés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un défaut de réservation exige que deux transactions lisent le stock avant qu’aucune n’écrive. Comment rendre le test plus probant ?',
                        'marks' => 1,
                        'explanation' => 'Une coordination explicite reproduit l’entrelacement dangereux plus fiablement qu’une temporisation approximative.',
                        'choices' => [
                            ['text' => 'Un entrelacement coordonné et un invariant final vérifié', 'is_correct' => true],
                            ['text' => 'Ajouter une attente arbitraire et espérer le bon ordre', 'is_correct' => false],
                            ['text' => 'Exécuter les deux réservations successivement', 'is_correct' => false],
                            ['text' => 'Tester uniquement le texte de la réponse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un protocole autorise Créé → Validé → Expédié, mais jamais Créé → Expédié. Quelle vérification exploite directement ce modèle ?',
                        'marks' => 1,
                        'explanation' => 'Les tests fondés sur un modèle comparent les transitions et comportements de l’implémentation aux règles d’un modèle de référence.',
                        'choices' => [
                            ['text' => 'Des tests fondés sur les états et transitions', 'is_correct' => true],
                            ['text' => 'Un test qui ne vérifie que le format des noms d’état', 'is_correct' => false],
                            ['text' => 'Une génération de réponses indépendantes de l’état courant', 'is_correct' => false],
                            ['text' => 'Un test limité au nombre de méthodes du protocole', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe relance automatiquement chaque échec jusqu’à obtenir un succès et déclare la suite fiable. Quel risque reste masqué ?',
                        'marks' => 1,
                        'explanation' => 'Les reprises peuvent collecter des indices mais ne remplacent pas la correction des causes d’instabilité.',
                        'choices' => [
                            ['text' => 'L’instabilité est cachée sans être corrigée', 'is_correct' => true],
                            ['text' => 'Le nombre de reprises prouve l’isolation des tests', 'is_correct' => false],
                            ['text' => 'Un succès final garantit l’absence de course', 'is_correct' => false],
                            ['text' => 'La couverture mesure désormais le déterminisme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un produit respecte sa spécification mais ne correspond pas au travail réel des opérateurs. Quelle distinction explique cet écart ?',
                        'marks' => 1,
                        'explanation' => 'Vérifier vise la conformité à des critères spécifiés ; valider interroge l’adéquation à l’usage et au besoin.',
                        'choices' => [
                            ['text' => 'La vérification de conformité n’a pas suffi à valider l’adéquation au besoin', 'is_correct' => true],
                            ['text' => 'La validation consiste seulement à compiler', 'is_correct' => false],
                            ['text' => 'La vérification garantit toujours l’utilité', 'is_correct' => false],
                            ['text' => 'Les exigences ne participent jamais aux tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le résultat attendu d’un calcul est produit en recopiant le même algorithme dans le test. Quel défaut d’oracle menace la vérification ?',
                        'marks' => 1,
                        'explanation' => 'Un oracle doit apporter une indépendance suffisante : exemples établis, autre formulation ou propriétés utiles.',
                        'choices' => [
                            ['text' => 'La même erreur peut exister dans le code et dans la référence', 'is_correct' => true],
                            ['text' => 'La copie constitue une preuve indépendante', 'is_correct' => false],
                            ['text' => 'Les résultats deviennent nécessairement différents', 'is_correct' => false],
                            ['text' => 'Le langage interdit les références indépendantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une normalisation de texte doit être idempotente. Quelle propriété peut être vérifiée sur des entrées générées ?',
                        'marks' => 1,
                        'explanation' => 'L’idempotence signifie que réappliquer l’opération ne change plus le résultat obtenu après une première application.',
                        'choices' => [
                            ['text' => 'Normaliser deux fois produit le même résultat que normaliser une fois', 'is_correct' => true],
                            ['text' => 'Normaliser deux fois reconstitue toujours l’entrée d’origine', 'is_correct' => false],
                            ['text' => 'Toute normalisation raccourcit le texte de moitié', 'is_correct' => false],
                            ['text' => 'Deux textes différents doivent toujours produire des sorties différentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test synthétique de production crée des données pour vérifier un parcours. Quel encadrement est nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Les vérifications en production doivent limiter leurs effets et éviter de perturber les utilisateurs ou les données métier.',
                        'choices' => [
                            ['text' => 'Des comptes dédiés, des effets bornés et un nettoyage contrôlé', 'is_correct' => true],
                            ['text' => 'L’usage aléatoire de comptes réels', 'is_correct' => false],
                            ['text' => 'Des paiements réels illimités', 'is_correct' => false],
                            ['text' => 'La désactivation des autorisations sur le parcours', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Coordonner des traitements distribués',
                'description' => 'Raisonner sur les doublons, l’ordre, la cohérence et la saturation.',
                'difficulty' => 'Advanced',
                'duration' => 19,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une transaction valide une commande puis le processus tombe avant de publier son événement. Quel mécanisme ferme cette fenêtre de perte ?',
                        'marks' => 1,
                        'explanation' => 'Une outbox enregistre données et événement atomiquement ; un relais peut ensuite publier, avec possibilité de doublons à gérer.',
                        'choices' => [
                            ['text' => 'Une écriture atomique de la commande et de l’outbox', 'is_correct' => true],
                            ['text' => 'Publier uniquement après avoir quitté le processus', 'is_correct' => false],
                            ['text' => 'Garder l’événement dans une variable globale', 'is_correct' => false],
                            ['text' => 'Ajouter un journal texte sans mécanisme de reprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un consommateur enregistre un identifiant de message comme traité avant de modifier les données, dans une transaction différente. Quel risque apparaît ?',
                        'marks' => 1,
                        'explanation' => 'Déduplication et effet métier doivent être coordonnés de façon atomique pour éviter une perte logique.',
                        'choices' => [
                            ['text' => 'Une panne peut faire perdre l’effet métier à la reprise', 'is_correct' => true],
                            ['text' => 'L’effet métier est garanti exactement une fois', 'is_correct' => false],
                            ['text' => 'Le stockage de l’identifiant annule automatiquement les données', 'is_correct' => false],
                            ['text' => 'La file garantit l’atomicité locale du consommateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une saga annule une réservation après un refus de paiement. Quelle limite doit être comprise ?',
                        'marks' => 1,
                        'explanation' => 'Les compensations ne sont pas des retours automatiques parfaits ; elles nécessitent surveillance, reprise et parfois intervention.',
                        'choices' => [
                            ['text' => 'Une compensation est une opération métier qui peut elle-même échouer', 'is_correct' => true],
                            ['text' => 'Elle restaure automatiquement tout l’état distribué à l’octet près', 'is_correct' => false],
                            ['text' => 'Elle équivaut toujours à un rollback SQL global', 'is_correct' => false],
                            ['text' => 'Elle supprime le besoin de suivi d’état', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des événements de versions 8 puis 7 arrivent pour la même entité. Quelle stratégie protège un modèle de lecture qui utilise des versions croissantes ?',
                        'marks' => 1,
                        'explanation' => 'L’ordre d’arrivée réseau n’est pas nécessairement l’ordre métier ; les versions aident à détecter les événements périmés ou manquants.',
                        'choices' => [
                            ['text' => 'Écarter les versions périmées selon la politique prévue', 'is_correct' => true],
                            ['text' => 'Appliquer toujours le dernier message reçu sans examiner sa version', 'is_correct' => false],
                            ['text' => 'Remplacer la version courante par la plus petite', 'is_correct' => false],
                            ['text' => 'Supprimer toutes les versions de l’entité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des milliers de clients retentent un service au même instant après une panne. Quel ajout au délai exponentiel réduit leur synchronisation ?',
                        'marks' => 1,
                        'explanation' => 'La gigue répartit les reprises dans le temps ; limites et budgets restent nécessaires.',
                        'choices' => [
                            ['text' => 'Une variation aléatoire du délai dans des bornes prévues', 'is_correct' => true],
                            ['text' => 'Une remise du délai à zéro pour tous', 'is_correct' => false],
                            ['text' => 'Une suppression de la limite de tentatives', 'is_correct' => false],
                            ['text' => 'Une nouvelle tentative à intervalle strictement identique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une file de traitement secondaire monopolise toutes les connexions et bloque les paiements. Quel motif réduit cette propagation ?',
                        'marks' => 1,
                        'explanation' => 'Un cloisonnement de ressources, appelé bulkhead, limite l’effet d’une saturation sur les autres fonctions.',
                        'choices' => [
                            ['text' => 'Un cloisonnement de ressources par activité', 'is_correct' => true],
                            ['text' => 'Augmenter la priorité de tous les travaux secondaires', 'is_correct' => false],
                            ['text' => 'Partager un pool unique sans limite', 'is_correct' => false],
                            ['text' => 'Supprimer les délais sur les paiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une opération est acceptée mais son résultat n’apparaît dans la vue de lecture qu’après un délai. Quel comportement d’interface est cohérent ?',
                        'marks' => 1,
                        'explanation' => 'Une cohérence différée doit être intégrée au parcours pour éviter des décisions erronées ou des doublons.',
                        'choices' => [
                            ['text' => 'Afficher un état en cours puis confirmer après propagation', 'is_correct' => true],
                            ['text' => 'Affirmer que la demande a échoué dès la première lecture obsolète', 'is_correct' => false],
                            ['text' => 'Présenter l’acceptation comme un traitement final garanti', 'is_correct' => false],
                            ['text' => 'Demander de recréer systématiquement l’opération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un consommateur écrit une projection de lecture distincte du modèle transactionnel. Quel risque de CQRS doit être géré ?',
                        'marks' => 1,
                        'explanation' => 'Séparer modèles de lecture et d’écriture introduit souvent une propagation à suivre et à reconstruire en cas de défaut.',
                        'choices' => [
                            ['text' => 'Le retard ou l’échec de mise à jour de la projection', 'is_correct' => true],
                            ['text' => 'La garantie que toute lecture est immédiatement à jour', 'is_correct' => false],
                            ['text' => 'L’interdiction de reconstruire les projections', 'is_correct' => false],
                            ['text' => 'La disparition des besoins de supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les arrivées dépassent durablement la capacité d’un traitement asynchrone. Quelle mesure évite une croissance mémoire sans borne ?',
                        'marks' => 1,
                        'explanation' => 'La contre-pression et les limites rendent la saturation explicite au lieu de la transformer en panne globale.',
                        'choices' => [
                            ['text' => 'Une file bornée et une politique de régulation ou de refus adaptées', 'is_correct' => true],
                            ['text' => 'Une file en mémoire de taille illimitée', 'is_correct' => false],
                            ['text' => 'Des reprises immédiates pour chaque élément en attente', 'is_correct' => false],
                            ['text' => 'La suppression des mesures de longueur de file', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur de messages annonce « exactement une fois » dans une transaction interne. Quelle vérification reste indispensable avant de promettre cet effet au métier ?',
                        'marks' => 1,
                        'explanation' => 'Une garantie de livraison ou traitement est bornée à un périmètre ; elle ne couvre pas automatiquement les effets externes.',
                        'choices' => [
                            ['text' => 'Le périmètre exact de la garantie annoncée', 'is_correct' => true],
                            ['text' => 'Déduire que chaque courriel sera envoyé une seule fois', 'is_correct' => false],
                            ['text' => 'Retirer toute déduplication externe sans analyse', 'is_correct' => false],
                            ['text' => 'Considérer la garantie indépendante de ses limites de système', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Évaluer une livraison, sa sécurité et son coût',
                'description' => 'Comparer des preuves représentatives plutôt que des garanties implicites.',
                'difficulty' => 'Advanced',
                'duration' => 24,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une migration retire un champ encore lu par l’ancienne version. Quelle méthode de transition préserve la coexistence ?',
                        'marks' => 1,
                        'explanation' => 'Une transition additive puis soustractive limite les incompatibilités entre versions actives.',
                        'choices' => [
                            ['text' => 'Ajouter d’abord la nouvelle représentation, migrer les usages puis retirer l’ancienne', 'is_correct' => true],
                            ['text' => 'Supprimer l’ancien champ avant de publier le code', 'is_correct' => false],
                            ['text' => 'Mettre un délai arbitraire sans mesurer les lecteurs', 'is_correct' => false],
                            ['text' => 'Renommer le champ dans une seule instance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un canari reçoit uniquement des comptes internes alors que la version stable sert le public. Quelle limite affecte la comparaison ?',
                        'marks' => 1,
                        'explanation' => 'Une différence de charge ou de population peut expliquer les métriques indépendamment du changement logiciel.',
                        'choices' => [
                            ['text' => 'Un biais de population et de charge', 'is_correct' => true],
                            ['text' => 'Un canari interne prouve toujours la capacité publique', 'is_correct' => false],
                            ['text' => 'Un taux d’erreur nul annule ce biais', 'is_correct' => false],
                            ['text' => 'La taille de l’artefact suffit à corriger la comparaison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux reconstructions du même code avec les mêmes dépendances donnent des artefacts différents. Quel travail aide à établir la reproductibilité ?',
                        'marks' => 1,
                        'explanation' => 'Une construction reproductible exige des entrées maîtrisées ; horodatages, chemins et outils peuvent introduire des différences qu’il faut comprendre.',
                        'choices' => [
                            ['text' => 'Contrôler les entrées non déterministes de construction', 'is_correct' => true],
                            ['text' => 'Donner le même nom aux deux fichiers sans comparer leur contenu', 'is_correct' => false],
                            ['text' => 'Signer les deux résultats sans analyser les différences', 'is_correct' => false],
                            ['text' => 'Promouvoir l’un des résultats sans conserver sa provenance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une signature d’artefact est valide mais la chaîne de compilation a été compromise. Quelle limite de la signature apparaît ?',
                        'marks' => 1,
                        'explanation' => 'L’intégrité et l’origine ne suffisent pas si la source ou le processus de signature n’est plus digne de confiance.',
                        'choices' => [
                            ['text' => 'Une origine compromise peut signer un contenu malveillant', 'is_correct' => true],
                            ['text' => 'Elle démontre malgré tout l’absence de code malveillant', 'is_correct' => false],
                            ['text' => 'Elle garantit la conformité fonctionnelle', 'is_correct' => false],
                            ['text' => 'Elle remplace l’analyse de provenance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une nomenclature logicielle liste les composants et versions d’un produit. Quelle utilisation est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Une SBOM donne de la visibilité sur les composants ; elle ne constitue pas une certification de sécurité.',
                        'choices' => [
                            ['text' => 'Identifier les dépendances potentiellement concernées par une vulnérabilité', 'is_correct' => true],
                            ['text' => 'Démontrer qu’aucune vulnérabilité n’existe', 'is_correct' => false],
                            ['text' => 'Garantir qu’aucun composant n’est chargé à l’exécution', 'is_correct' => false],
                            ['text' => 'Remplacer la gestion des correctifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle de menaces comporte des flux qui traversent une frontière de confiance. Quel examen est prioritaire sur ces passages ?',
                        'marks' => 1,
                        'explanation' => 'Une frontière de confiance indique où les hypothèses sur l’acteur ou les données changent et où des contrôles sont nécessaires.',
                        'choices' => [
                            ['text' => 'Les données, identités et autorisations contrôlées de part et d’autre', 'is_correct' => true],
                            ['text' => 'La seule volumétrie des flux, sans leur signification', 'is_correct' => false],
                            ['text' => 'Le seul chiffrement au repos, indépendamment des accès', 'is_correct' => false],
                            ['text' => 'Le nombre de machines sans examiner les acteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service désérialise des objets natifs provenant d’Internet. Quelle conception réduit fortement l’exposition ?',
                        'marks' => 1,
                        'explanation' => 'La désérialisation de types arbitraires peut déclencher du comportement ; un échange de données contrôlé réduit cette surface.',
                        'choices' => [
                            ['text' => 'Un schéma de données contrôlé sans classes arbitraires', 'is_correct' => true],
                            ['text' => 'Faire confiance au nom de classe envoyé', 'is_correct' => false],
                            ['text' => 'Activer toutes les méthodes de rappel pour simplifier', 'is_correct' => false],
                            ['text' => 'Ignorer les erreurs de désérialisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle d’autorisation est copiée dans plusieurs services et diverge. Quel objectif de conception est pertinent ?',
                        'marks' => 1,
                        'explanation' => 'La cohérence de politique et son application côté serveur doivent être assurées, sans créer de confiance aveugle dans le client.',
                        'choices' => [
                            ['text' => 'Une politique cohérente dans ses points d’application', 'is_correct' => true],
                            ['text' => 'Supprimer les contrôles dans tous les services sauf l’interface', 'is_correct' => false],
                            ['text' => 'Faire confiance au client pour annoncer ses droits', 'is_correct' => false],
                            ['text' => 'Remplacer les droits par des identifiants difficiles à deviner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un objectif impose un p99 inférieur à 300 ms. Que faut-il ajouter pour que le budget de performance soit exploitable ?',
                        'marks' => 1,
                        'explanation' => 'Un percentile n’est interprétable qu’avec les conditions et la population de mesures associées.',
                        'choices' => [
                            ['text' => 'Le parcours, la charge, les données et la fenêtre de mesure', 'is_correct' => true],
                            ['text' => 'Uniquement le nombre de serveurs', 'is_correct' => false],
                            ['text' => 'Le langage de programmation choisi', 'is_correct' => false],
                            ['text' => 'Le nombre de tests de style', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une clé populaire expire et des milliers de requêtes recalculent simultanément la même valeur. Quelle protection répond à ce pic ?',
                        'marks' => 1,
                        'explanation' => 'Un recalcul partagé et des expirations désynchronisées réduisent les avalanches après une absence de cache.',
                        'choices' => [
                            ['text' => 'Un recalcul coordonné et des expirations réparties', 'is_correct' => true],
                            ['text' => 'Réduire toutes les durées de cache à zéro', 'is_correct' => false],
                            ['text' => 'Lancer un recalcul indépendant par requête', 'is_correct' => false],
                            ['text' => 'Supprimer toute expiration sans examiner la fraîcheur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un benchmark compare une version avec caches chauds à une autre avec caches froids. Quelle conclusion doit être évitée ?',
                        'marks' => 1,
                        'explanation' => 'Les conditions de mesure doivent être comparables pour isoler l’effet du changement.',
                        'choices' => [
                            ['text' => 'Attribuer toute différence observée au changement de code', 'is_correct' => true],
                            ['text' => 'Distinguer les résultats chauds et froids', 'is_correct' => false],
                            ['text' => 'Répéter les mesures dans des conditions comparables', 'is_correct' => false],
                            ['text' => 'Consigner la configuration des essais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un traitement contient une partie strictement séquentielle. Pourquoi ajouter des cœurs ne garantit-il pas un gain proportionnel ?',
                        'marks' => 1,
                        'explanation' => 'La loi d’Amdahl formalise la limite liée à la fraction qui ne bénéficie pas de la parallélisation.',
                        'choices' => [
                            ['text' => 'La partie séquentielle limite l’accélération globale', 'is_correct' => true],
                            ['text' => 'Chaque cœur supprime un verrou automatiquement', 'is_correct' => false],
                            ['text' => 'Tout traitement est parfaitement parallélisable', 'is_correct' => false],
                            ['text' => 'La fréquence réseau augmente avec le nombre de cœurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test de charge appelle un fournisseur de paiement réel. Quelle précaution doit être prise avant son exécution ?',
                        'marks' => 1,
                        'explanation' => 'Une charge de test ne doit pas provoquer des effets métier incontrôlés ; ses dépendances doivent être encadrées.',
                        'choices' => [
                            ['text' => 'Contrôler les effets externes et utiliser un environnement ou simulateur autorisé adapté', 'is_correct' => true],
                            ['text' => 'Compter sur les remboursements après le test', 'is_correct' => false],
                            ['text' => 'Envoyer les mêmes paiements en boucle sans borne', 'is_correct' => false],
                            ['text' => 'Désactiver les logs pour réduire les traces', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Exploiter et faire évoluer un service avec des objectifs',
                'description' => 'Traduire les observations en priorités de fiabilité et en procédures vérifiables.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Une mesure indique 99,7 % de requêtes réussies, pour un objectif fixé à 99,9 %. Comment distinguer les deux notions ?',
                        'marks' => 1,
                        'explanation' => 'Un SLI mesure le service ; un SLO fixe une cible sur cet indicateur et une période données.',
                        'choices' => [
                            ['text' => 'La mesure est un indicateur de service et le seuil est un objectif de service', 'is_correct' => true],
                            ['text' => 'Le seuil est le résultat observé et la mesure est une exigence', 'is_correct' => false],
                            ['text' => 'Les deux sont des numéros de version', 'is_correct' => false],
                            ['text' => 'L’indicateur prouve à lui seul une pénalité contractuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un SLO de réussite de 99 % porte sur 10 000 requêtes admissibles. Quel budget maximal d’échecs correspond à cette définition ?',
                        'marks' => 1,
                        'explanation' => 'Le budget vaut 1 % de 10 000, soit 100 échecs ; les exclusions éventuelles doivent être définies à l’avance.',
                        'choices' => [
                            ['text' => '100 requêtes', 'is_correct' => true],
                            ['text' => '10 requêtes', 'is_correct' => false],
                            ['text' => '990 requêtes', 'is_correct' => false],
                            ['text' => '1 000 requêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le budget d’erreur est consommé très rapidement sur plusieurs fenêtres de mesure. Quelle lecture est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Le taux de consommation du budget relie l’erreur actuelle à la vitesse soutenable pour respecter le SLO.',
                        'choices' => [
                            ['text' => 'Le rythme de dégradation risque d’épuiser le budget avant la fin de la période', 'is_correct' => true],
                            ['text' => 'Le service dispose nécessairement d’une marge supérieure', 'is_correct' => false],
                            ['text' => 'Le budget est recréé intégralement à chaque erreur', 'is_correct' => false],
                            ['text' => 'Le nombre de versions suffit à rétablir le budget', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une alerte nocturne n’a aucune action attendue et aucun impact identifié. Quel ajustement est prioritaire ?',
                        'marks' => 1,
                        'explanation' => 'Une alerte d’astreinte doit correspondre à une situation qui nécessite une action utile.',
                        'choices' => [
                            ['text' => 'Réévaluer le symptôme et l’action attendue', 'is_correct' => true],
                            ['text' => 'Ajouter davantage de destinataires sans changer son sens', 'is_correct' => false],
                            ['text' => 'Transformer chaque log en alerte', 'is_correct' => false],
                            ['text' => 'Masquer toutes les alertes du service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pendant un incident, deux équipes prennent des décisions contradictoires. Quel rôle clarifie la coordination ?',
                        'marks' => 1,
                        'explanation' => 'La coordination explicite répartit l’action, la communication et le suivi sans confondre toutes les responsabilités.',
                        'choices' => [
                            ['text' => 'Un responsable de coordination d’incident avec rôles et communication explicites', 'is_correct' => true],
                            ['text' => 'Un développeur qui modifie silencieusement toutes les configurations', 'is_correct' => false],
                            ['text' => 'Un observateur sans mandat ni canal de décision', 'is_correct' => false],
                            ['text' => 'Un robot qui ferme l’alerte après cinq minutes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les utilisateurs ne peuvent plus payer et la cause exacte n’est pas connue. Quelle priorité est raisonnable ?',
                        'marks' => 1,
                        'explanation' => 'La restauration du service et l’analyse profonde sont complémentaires mais n’ont pas toujours le même ordre d’urgence.',
                        'choices' => [
                            ['text' => 'Rétablir ou réduire l’impact avec une mitigation sûre, puis approfondir la cause', 'is_correct' => true],
                            ['text' => 'Attendre une explication exhaustive avant toute mitigation', 'is_correct' => false],
                            ['text' => 'Supprimer les preuves de l’incident', 'is_correct' => false],
                            ['text' => 'Chercher d’abord un responsable individuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une analyse d’incident se veut sans blâme. Quelle exigence reste nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Une culture sans blâme cherche les conditions systémiques sans abandonner l’apprentissage ni le suivi des actions.',
                        'choices' => [
                            ['text' => 'Examiner les faits et suivre des actions dont la responsabilité est définie', 'is_correct' => true],
                            ['text' => 'Éviter toute action pour ne responsabiliser personne', 'is_correct' => false],
                            ['text' => 'Omettre les décisions prises pendant l’incident', 'is_correct' => false],
                            ['text' => 'Effacer la chronologie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une procédure de reprise demande un accès auquel l’astreinte n’a plus droit. Quelle pratique aurait révélé le défaut ?',
                        'marks' => 1,
                        'explanation' => 'Les procédures doivent être exercées dans des conditions réalistes, y compris les autorisations et dépendances.',
                        'choices' => [
                            ['text' => 'Un exercice de procédure avec les accès réellement disponibles', 'is_correct' => true],
                            ['text' => 'Une revue sans vérifier les permissions', 'is_correct' => false],
                            ['text' => 'Un exercice avec des accès plus larges que ceux de l’astreinte', 'is_correct' => false],
                            ['text' => 'Une vérification limitée à la présence des fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un objectif fixe trente minutes pour rétablir le service et cinq minutes de données perdues au maximum. Quelle association est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Le RTO concerne le délai de reprise ; le RPO concerne l’ancienneté maximale acceptable des données récupérées.',
                        'choices' => [
                            ['text' => 'RTO de trente minutes et RPO de cinq minutes', 'is_correct' => true],
                            ['text' => 'RPO de trente minutes et RTO de cinq minutes', 'is_correct' => false],
                            ['text' => 'Deux objectifs de latence de requête', 'is_correct' => false],
                            ['text' => 'Deux mesures de débit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des sauvegardes sont produites chaque jour sans exercice de restauration. Quelle validation doit être ajoutée ?',
                        'marks' => 1,
                        'explanation' => 'La réussite d’une sauvegarde ne prouve ni l’intégrité de la restauration ni sa durée opérationnelle.',
                        'choices' => [
                            ['text' => 'Restaurer et vérifier l’intégrité ainsi que les délais de reprise', 'is_correct' => true],
                            ['text' => 'Comparer uniquement la taille des archives', 'is_correct' => false],
                            ['text' => 'Augmenter la fréquence sans essayer de restauration', 'is_correct' => false],
                            ['text' => 'Renommer les fichiers pour inclure une date', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une dépendance essentielle approche de la fin de son support. Quel travail préventif est utile ?',
                        'marks' => 1,
                        'explanation' => 'La fin de support peut exposer le produit à des risques de sécurité, d’exploitation et de maintenance.',
                        'choices' => [
                            ['text' => 'Évaluer les risques et préparer une évolution compatible avant l’échéance', 'is_correct' => true],
                            ['text' => 'Attendre obligatoirement la première panne', 'is_correct' => false],
                            ['text' => 'Mettre à jour uniquement son numéro dans la documentation', 'is_correct' => false],
                            ['text' => 'Copier indéfiniment le composant sans analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un identifiant utilisateur est ajouté comme étiquette à chaque métrique et le nombre de séries explose. Quel risque d’observabilité apparaît ?',
                        'marks' => 1,
                        'explanation' => 'Chaque combinaison d’étiquettes peut produire une série distincte ; les dimensions doivent être choisies pour limiter coût, volume et exposition.',
                        'choices' => [
                            ['text' => 'Une explosion de cardinalité et de coût', 'is_correct' => true],
                            ['text' => 'Chaque nouvelle série réduit automatiquement le coût du système', 'is_correct' => false],
                            ['text' => 'Les étiquettes sont sans effet sur les ressources', 'is_correct' => false],
                            ['text' => 'Une métrique avec identifiant remplace toute politique de confidentialité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'Architecture logicielle avancée',
            'Design Patterns avancés',
            'Software Design & Domain Modeling',
            'Testing & Quality Engineering avancé',
            'CI/CD & Release Engineering',
            'Performance & Scalability Engineering',
            'Security Engineering',
            'Reliability, Observability & Maintenance',
        ];

        DB::transaction(function () use ($subject, $quizzes, $legacyTitles): void {
            foreach ($quizzes as $quizData) {
                $questionCount = count($quizData['questions']);
                $totalMarks = array_sum(array_column($quizData['questions'], 'marks'));

                $quiz = Quiz::updateOrCreate(
                    [
                        'subject_id' => $subject->id,
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
