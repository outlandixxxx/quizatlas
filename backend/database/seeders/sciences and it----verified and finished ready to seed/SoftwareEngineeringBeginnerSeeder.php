<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareEngineeringBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'software-engineering')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comprendre un besoin et préparer sa validation',
                'description' => 'Un logiciel utile commence par un besoin clair, un périmètre partagé et des critères vérifiables.',
                'difficulty' => 'Beginner',
                'duration' => 13,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Le responsable demande un bouton permettant d’annuler une réservation. À quelle catégorie appartient ce besoin ?',
                        'marks' => 1,
                        'explanation' => 'L’exigence décrit une action que le logiciel doit permettre. Les contraintes de qualité décrivent plutôt les conditions de réalisation du service.',
                        'choices' => [
                            ['text' => 'Une exigence fonctionnelle', 'is_correct' => true],
                            ['text' => 'Une contrainte de temps de réponse', 'is_correct' => false],
                            ['text' => 'Une convention de nommage', 'is_correct' => false],
                            ['text' => 'Une règle de gestion des versions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La demande « le site doit être rapide » ne permet pas de décider si le résultat convient. Quelle reformulation est vérifiable ?',
                        'marks' => 1,
                        'explanation' => 'Une exigence de performance précise un indicateur, un seuil et les conditions de mesure.',
                        'choices' => [
                            ['text' => 'Pour le parcours et la charge définis, 95 % des réponses arrivent en moins de deux secondes', 'is_correct' => true],
                            ['text' => 'Le site utilise un langage réputé rapide', 'is_correct' => false],
                            ['text' => 'L’équipe optimise les écrans quand elle le peut', 'is_correct' => false],
                            ['text' => 'La page semble fluide à son développeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux utilisateurs interprètent différemment le mot « dossier validé ». Que faire avant de développer le traitement ?',
                        'marks' => 1,
                        'explanation' => 'Clarifier le vocabulaire évite d’implémenter une règle fondée sur des interprétations incompatibles.',
                        'choices' => [
                            ['text' => 'Définir ensemble les états et les conditions de validation', 'is_correct' => true],
                            ['text' => 'Retenir l’interprétation du premier utilisateur interrogé', 'is_correct' => false],
                            ['text' => 'Conserver les deux sens dans le même champ sans distinction', 'is_correct' => false],
                            ['text' => 'Reporter la définition après la livraison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe montre une maquette cliquable pour vérifier l’enchaînement des écrans. Que peut-elle principalement apprendre à ce stade ?',
                        'marks' => 1,
                        'explanation' => 'Une maquette aide à valider l’usage et la compréhension du parcours, sans démontrer le fonctionnement technique complet.',
                        'choices' => [
                            ['text' => 'Si le parcours proposé correspond aux usages attendus', 'is_correct' => true],
                            ['text' => 'Si la base résistera à mille écritures simultanées', 'is_correct' => false],
                            ['text' => 'Si le code serveur ne contient aucune vulnérabilité', 'is_correct' => false],
                            ['text' => 'Si toutes les fonctions sont déjà implémentées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le premier lot d’un produit doit être livré rapidement. Quelle sélection de fonctionnalités est la plus cohérente ?',
                        'marks' => 1,
                        'explanation' => 'Un périmètre réduit mais complet permet de confronter tôt une valeur réelle aux utilisateurs.',
                        'choices' => [
                            ['text' => 'Un parcours essentiel utilisable de bout en bout', 'is_correct' => true],
                            ['text' => 'Tous les écrans commencés, même si aucun parcours ne fonctionne', 'is_correct' => false],
                            ['text' => 'Les fonctionnalités les plus simples, sans rapport avec l’objectif', 'is_correct' => false],
                            ['text' => 'Toutes les options avancées avant le parcours principal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une remise est accordée à partir de 500 dirhams, seuil inclus. Quel exemple doit figurer dans les critères d’acceptation ?',
                        'marks' => 1,
                        'explanation' => 'L’expression « à partir de » inclut la valeur du seuil. Un exemple concret prévient l’erreur de borne.',
                        'choices' => [
                            ['text' => 'Une commande de 500 dirhams bénéficie de la remise', 'is_correct' => true],
                            ['text' => 'Une commande de 500 dirhams est exclue de la remise', 'is_correct' => false],
                            ['text' => 'Seules les commandes strictement supérieures à 500 bénéficient de la remise', 'is_correct' => false],
                            ['text' => 'Le seuil dépend du navigateur utilisé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonctionnalité est correctement programmée, mais les utilisateurs expliquent qu’elle ne résout pas leur problème. Quel travail a surtout manqué ?',
                        'marks' => 1,
                        'explanation' => 'Un résultat conforme au code prévu peut rester inutile si le besoin réel n’a pas été compris et validé.',
                        'choices' => [
                            ['text' => 'La validation du besoin et de l’usage', 'is_correct' => true],
                            ['text' => 'La compilation du code', 'is_correct' => false],
                            ['text' => 'Le rangement des fichiers source', 'is_correct' => false],
                            ['text' => 'La création d’une branche Git', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un logiciel déjà utilisé doit s’adapter à une nouvelle règle de calcul. Comment qualifier principalement cette intervention ?',
                        'marks' => 1,
                        'explanation' => 'La maintenance comprend aussi l’adaptation et l’évolution d’un logiciel en service, pas seulement la correction de défauts.',
                        'choices' => [
                            ['text' => 'Une évolution dans le cadre de sa maintenance', 'is_correct' => true],
                            ['text' => 'Une compilation sans changement', 'is_correct' => false],
                            ['text' => 'Un simple déplacement de fichiers', 'is_correct' => false],
                            ['text' => 'Une installation initiale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe suppose que chaque client possède une adresse électronique. Quelle démarche réduit le risque avant de rendre ce champ obligatoire ?',
                        'marks' => 1,
                        'explanation' => 'Une hypothèse qui influence le parcours doit être confrontée aux situations réelles avant de devenir une contrainte.',
                        'choices' => [
                            ['text' => 'Vérifier cette hypothèse auprès des personnes concernées', 'is_correct' => true],
                            ['text' => 'Considérer l’hypothèse comme vraie parce qu’elle facilite le code', 'is_correct' => false],
                            ['text' => 'Attendre les premiers blocages après lancement', 'is_correct' => false],
                            ['text' => 'Remplacer les adresses absentes par une valeur inventée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un critère indique « l’utilisateur reçoit une confirmation ». Quelle précision manque pour rendre le résultat observable ?',
                        'marks' => 1,
                        'explanation' => 'Un critère d’acceptation décrit ce qui sera observé et dans quelles conditions, sans imposer les détails internes inutiles.',
                        'choices' => [
                            ['text' => 'Le canal et l’événement qui déclenchent la confirmation', 'is_correct' => true],
                            ['text' => 'La date de début du développement', 'is_correct' => false],
                            ['text' => 'Le nombre de personnes chargées de le coder', 'is_correct' => false],
                            ['text' => 'L’estimation technique en heures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle règle modifie la validité d’une inscription. Quels éléments doivent être revus ensemble ?',
                        'marks' => 1,
                        'explanation' => 'Les exigences et leurs vérifications doivent rester cohérentes lorsque le comportement attendu change.',
                        'choices' => [
                            ['text' => 'La description de la règle, les critères d’acceptation et les tests concernés', 'is_correct' => true],
                            ['text' => 'Les tests seulement, en conservant une règle écrite contradictoire', 'is_correct' => false],
                            ['text' => 'La documentation seulement, sans changer le comportement', 'is_correct' => false],
                            ['text' => 'Le planning seulement, sans actualiser la règle ni ses tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le commanditaire et le service d’assistance participent à un atelier. Pourquoi écouter les deux ?',
                        'marks' => 1,
                        'explanation' => 'Les parties prenantes apportent des perspectives différentes sur l’usage, l’exploitation et les objectifs du produit.',
                        'choices' => [
                            ['text' => 'Ils apportent des besoins et des contraintes complémentaires', 'is_correct' => true],
                            ['text' => 'Le service d’assistance remplace automatiquement le commanditaire', 'is_correct' => false],
                            ['text' => 'Seul le commanditaire peut observer un problème d’usage', 'is_correct' => false],
                            ['text' => 'Leur présence dispense de vérifier les décisions', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Rendre un changement compréhensible',
                'description' => 'Lire et modifier le code sans introduire de responsabilités ou de dépendances inutiles.',
                'difficulty' => 'Beginner',
                'duration' => 11,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Une variable contient le nombre de demandes encore à traiter. Quel nom exprime le mieux ce rôle ?',
                        'marks' => 1,
                        'explanation' => 'Un nom utile distingue la donnée représentée des autres valeurs proches du domaine.',
                        'choices' => [
                            ['text' => 'nombreDemandesEnAttente', 'is_correct' => true],
                            ['text' => 'nombreDemandesTraitees', 'is_correct' => false],
                            ['text' => 'nombreDemandesTotal', 'is_correct' => false],
                            ['text' => 'derniereDemande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le même taux apparaît sous forme de nombre brut dans plusieurs fonctions. Quelle amélioration facilite une modification cohérente ?',
                        'marks' => 1,
                        'explanation' => 'Une valeur nommée évite de chercher des nombres ambigus et réduit le risque de corrections partielles.',
                        'choices' => [
                            ['text' => 'Une valeur nommée et centralisée avec un rôle explicite', 'is_correct' => true],
                            ['text' => 'Une copie différente du taux dans chaque fonction', 'is_correct' => false],
                            ['text' => 'Le remplacement du nombre par sa représentation textuelle', 'is_correct' => false],
                            ['text' => 'Un commentaire contenant le nouveau taux sans modifier les calculs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une méthode est divisée en petites fonctions sans changer son résultat ni ses effets observables. Comment qualifier ce travail ?',
                        'marks' => 1,
                        'explanation' => 'La refactorisation améliore la structure interne en préservant le comportement observable.',
                        'choices' => [
                            ['text' => 'Une refactorisation', 'is_correct' => true],
                            ['text' => 'Une nouvelle fonctionnalité', 'is_correct' => false],
                            ['text' => 'Une modification des exigences', 'is_correct' => false],
                            ['text' => 'Une migration de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux écrans appliquent la même règle de remise, et une correction n’est faite que dans l’un des deux. Quel défaut a favorisé cette divergence ?',
                        'marks' => 1,
                        'explanation' => 'Centraliser une règle réellement commune aide à garder les comportements cohérents lors des évolutions.',
                        'choices' => [
                            ['text' => 'La duplication d’une règle métier', 'is_correct' => true],
                            ['text' => 'Une validation trop précise', 'is_correct' => false],
                            ['text' => 'Un historique Git trop détaillé', 'is_correct' => false],
                            ['text' => 'Un test trop indépendant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction vérifie une commande, écrit un fichier et envoie une notification. Quelle séparation rend les changements plus faciles à suivre ?',
                        'marks' => 1,
                        'explanation' => 'Des responsabilités cohérentes limitent l’impact d’une modification et facilitent les vérifications ciblées.',
                        'choices' => [
                            ['text' => 'Des composants aux responsabilités distinctes, coordonnés par un traitement clair', 'is_correct' => true],
                            ['text' => 'Une seule fonction plus longue avec davantage de paramètres', 'is_correct' => false],
                            ['text' => 'La même fonction recopiée dans chaque écran', 'is_correct' => false],
                            ['text' => 'Un champ global qui choisit silencieusement le traitement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un commentaire explique une règle inhabituelle imposée par un système partenaire. Pourquoi est-il utile ?',
                        'marks' => 1,
                        'explanation' => 'Un commentaire utile documente notamment l’intention ou une contrainte qui ne se déduit pas des instructions.',
                        'choices' => [
                            ['text' => 'Il conserve une raison qui n’est pas évidente à la lecture du code', 'is_correct' => true],
                            ['text' => 'Il remplace les tests de compatibilité', 'is_correct' => false],
                            ['text' => 'Il garantit que le partenaire ne changera jamais', 'is_correct' => false],
                            ['text' => 'Il évite de nommer les variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une ancienne fonction semble inutilisée. Quelle vérification précède sa suppression ?',
                        'marks' => 1,
                        'explanation' => 'Certains usages peuvent venir de configuration ou de mécanismes dynamiques ; l’absence d’appel évident ne suffit pas toujours.',
                        'choices' => [
                            ['text' => 'Rechercher ses appels et vérifier les usages indirects possibles', 'is_correct' => true],
                            ['text' => 'Se fier uniquement à sa date de création', 'is_correct' => false],
                            ['text' => 'La supprimer si son nom paraît ancien', 'is_correct' => false],
                            ['text' => 'La conserver seulement pour augmenter la couverture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une revue repère une règle de calcul incorrecte que les tests n’ont pas détectée. Quelle conclusion est raisonnable ?',
                        'marks' => 1,
                        'explanation' => 'Différents moyens de vérification détectent des catégories de problèmes différentes.',
                        'choices' => [
                            ['text' => 'La revue et les tests sont des moyens complémentaires', 'is_correct' => true],
                            ['text' => 'La revue rend désormais les tests inutiles', 'is_correct' => false],
                            ['text' => 'Tous les tests automatiques sont sans valeur', 'is_correct' => false],
                            ['text' => 'La compilation aurait nécessairement trouvé le défaut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux modules doivent évoluer séparément. Quelle conception limite la propagation d’un changement interne ?',
                        'marks' => 1,
                        'explanation' => 'Des frontières explicites permettent de changer une implémentation sans imposer de changements inutiles aux consommateurs.',
                        'choices' => [
                            ['text' => 'Un contrat explicite et peu de dépendances entre les modules', 'is_correct' => true],
                            ['text' => 'L’accès direct aux détails internes de chaque module', 'is_correct' => false],
                            ['text' => 'Une configuration globale modifiée par tous les modules', 'is_correct' => false],
                            ['text' => 'Des copies mutables des mêmes règles dans chaque module', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction échoue et son appelant reçoit seulement « problème ». Quelle information aiderait sans divulguer de secret ?',
                        'marks' => 1,
                        'explanation' => 'Un signal d’erreur précis et sûr permet de réagir et de diagnostiquer sans exposer des données confidentielles.',
                        'choices' => [
                            ['text' => 'La catégorie d’échec et un contexte non sensible', 'is_correct' => true],
                            ['text' => 'Le mot de passe utilisé lors de l’appel', 'is_correct' => false],
                            ['text' => 'La totalité des variables d’environnement', 'is_correct' => false],
                            ['text' => 'Une indication de succès pour éviter l’inquiétude', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Collaborer avec Git',
                'description' => 'Suivre des changements cohérents et intégrer le travail d’une équipe avec précaution.',
                'difficulty' => 'Beginner',
                'duration' => 12,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Une correction touche une règle et son test associé. Quel contenu forme le meilleur commit ?',
                        'marks' => 1,
                        'explanation' => 'Un commit cohérent exprime une intention et regroupe les changements nécessaires à cette intention.',
                        'choices' => [
                            ['text' => 'La correction et le test qui la vérifie', 'is_correct' => true],
                            ['text' => 'La correction mélangée à plusieurs changements indépendants', 'is_correct' => false],
                            ['text' => 'Le test sans la correction qu’il exige', 'is_correct' => false],
                            ['text' => 'Uniquement le message de commit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonctionnalité doit être développée sans modifier immédiatement la branche partagée. Quel outil Git convient ?',
                        'marks' => 1,
                        'explanation' => 'Une branche permet de faire évoluer une ligne de travail avant son intégration.',
                        'choices' => [
                            ['text' => 'Une branche de travail', 'is_correct' => true],
                            ['text' => 'Un tag de version', 'is_correct' => false],
                            ['text' => 'Un fichier ignoré', 'is_correct' => false],
                            ['text' => 'Un message de fusion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une demande de fusion est ouverte avant intégration. Quel est son rôle dans le travail collectif ?',
                        'marks' => 1,
                        'explanation' => 'La demande de fusion organise la discussion et les contrôles avant l’intégration.',
                        'choices' => [
                            ['text' => 'Présenter le changement pour discussion, revue et vérifications', 'is_correct' => true],
                            ['text' => 'Remplacer le dépôt distant par une copie locale', 'is_correct' => false],
                            ['text' => 'Garantir à elle seule l’absence de défaut', 'is_correct' => false],
                            ['text' => 'Effacer l’historique des autres développeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux branches modifient les mêmes lignes et Git signale un conflit. Quelle résolution est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Une résolution doit préserver le comportement attendu, pas seulement supprimer les marqueurs de conflit.',
                        'choices' => [
                            ['text' => 'Construire le résultat voulu en tenant compte des deux intentions, puis le tester', 'is_correct' => true],
                            ['text' => 'Garder systématiquement la version la plus récente', 'is_correct' => false],
                            ['text' => 'Supprimer tout le fichier en conflit', 'is_correct' => false],
                            ['text' => 'Choisir au hasard un côté du conflit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un commit fautif a déjà été partagé. Quelle opération ajoute normalement une annulation traçable sans réécrire cet historique ?',
                        'marks' => 1,
                        'explanation' => 'Revert crée un nouveau commit inverse ; il évite de réécrire l’historique déjà utilisé par d’autres personnes.',
                        'choices' => [
                            ['text' => 'git revert', 'is_correct' => true],
                            ['text' => 'git reset --hard suivi d’un envoi forcé systématique', 'is_correct' => false],
                            ['text' => 'git status', 'is_correct' => false],
                            ['text' => 'git tag', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une clé d’accès réelle est envoyée sur un dépôt public. Quelle action est prioritaire ?',
                        'marks' => 1,
                        'explanation' => 'Retirer une copie ne supprime pas les copies déjà consultées ; le secret exposé doit être invalidé.',
                        'choices' => [
                            ['text' => 'Révoquer ou renouveler la clé exposée', 'is_correct' => true],
                            ['text' => 'Supprimer uniquement la ligne du dernier fichier', 'is_correct' => false],
                            ['text' => 'Renommer le fichier qui contient la clé', 'is_correct' => false],
                            ['text' => 'Rendre le message de commit moins visible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe veut retrouver précisément le commit livré en version 1.2.0. Quel repère Git est adapté ?',
                        'marks' => 1,
                        'explanation' => 'Un tag fournit un repère de version ; une convention peut aussi protéger ou signer les tags de livraison.',
                        'choices' => [
                            ['text' => 'Un tag associé au commit livré', 'is_correct' => true],
                            ['text' => 'Une branche locale déplacée chaque jour', 'is_correct' => false],
                            ['text' => 'Un fichier non suivi nommé version', 'is_correct' => false],
                            ['text' => 'Un commentaire dans une conversation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un développeur souhaite récupérer les références distantes sans fusionner immédiatement les changements. Quelle commande répond à ce besoin ?',
                        'marks' => 1,
                        'explanation' => 'Fetch récupère les objets et références distantes sans intégrer automatiquement leur contenu à la branche courante.',
                        'choices' => [
                            ['text' => 'git fetch', 'is_correct' => true],
                            ['text' => 'git merge', 'is_correct' => false],
                            ['text' => 'git commit', 'is_correct' => false],
                            ['text' => 'git revert', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fichier déjà suivi est ajouté à .gitignore. Quel résultat faut-il comprendre ?',
                        'marks' => 1,
                        'explanation' => 'Gitignore concerne principalement les fichiers non suivis ; il ne retire pas rétroactivement un fichier de l’index.',
                        'choices' => [
                            ['text' => 'Il reste suivi tant qu’il n’est pas retiré de l’index', 'is_correct' => true],
                            ['text' => 'Son historique est effacé automatiquement', 'is_correct' => false],
                            ['text' => 'Il disparaît du disque immédiatement', 'is_correct' => false],
                            ['text' => 'Il devient chiffré dans le dépôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une branche est fusionnée et le code compile. Quelle vérification reste nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Une fusion syntaxiquement valide peut combiner des changements incompatibles sur le plan fonctionnel.',
                        'choices' => [
                            ['text' => 'Exécuter les tests pertinents sur le résultat de la fusion', 'is_correct' => true],
                            ['text' => 'Conclure que les comportements sont tous corrects', 'is_correct' => false],
                            ['text' => 'Vérifier seulement que Git ne signale plus de conflit', 'is_correct' => false],
                            ['text' => 'Créer un tag avant toute vérification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une modification locale n’a pas été enregistrée dans Git ni sauvegardée ailleurs. Quelle affirmation est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Git ne sauvegarde pas automatiquement toutes les modifications locales sur le serveur distant.',
                        'choices' => [
                            ['text' => 'Le dépôt distant ne protège pas encore ce travail local', 'is_correct' => true],
                            ['text' => 'Le dépôt distant contient nécessairement chaque modification du disque', 'is_correct' => false],
                            ['text' => 'La création d’une branche a envoyé tous les fichiers', 'is_correct' => false],
                            ['text' => 'Un tag distant inclut les fichiers non suivis', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Vérifier un comportement et décrire un défaut',
                'description' => 'Construire des vérifications utiles et interpréter leurs limites.',
                'difficulty' => 'Beginner',
                'duration' => 14,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un test compare le total calculé à un total attendu. Quelle partie du test réalise cette vérification ?',
                        'marks' => 1,
                        'explanation' => 'Une assertion exprime une attente dont l’échec doit faire échouer le test.',
                        'choices' => [
                            ['text' => 'Une assertion', 'is_correct' => true],
                            ['text' => 'Une donnée de préparation', 'is_correct' => false],
                            ['text' => 'Un commentaire', 'is_correct' => false],
                            ['text' => 'Un nom de scénario', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle de remise est vérifiée avec des données en mémoire, sans réseau ni base. Quel niveau de test est le plus adapté ?',
                        'marks' => 1,
                        'explanation' => 'Le test unitaire vise une unité de comportement isolée des systèmes externes.',
                        'choices' => [
                            ['text' => 'Un test unitaire', 'is_correct' => true],
                            ['text' => 'Un test de bout en bout', 'is_correct' => false],
                            ['text' => 'Un test de restauration', 'is_correct' => false],
                            ['text' => 'Un test de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test vérifie qu’une requête écrite par l’application fonctionne avec une vraie base de test. Que vérifie-t-il surtout ?',
                        'marks' => 1,
                        'explanation' => 'Le test exerce la collaboration réelle de deux composants, ici le code et le stockage.',
                        'choices' => [
                            ['text' => 'L’intégration entre le code et la base', 'is_correct' => true],
                            ['text' => 'Un calcul isolé sans dépendance', 'is_correct' => false],
                            ['text' => 'La facilité d’usage par un client', 'is_correct' => false],
                            ['text' => 'La capacité maximale de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un scénario ouvre le navigateur, crée une commande et vérifie sa confirmation. Comment qualifier sa portée ?',
                        'marks' => 1,
                        'explanation' => 'Le scénario traverse plusieurs couches pour vérifier un parcours complet.',
                        'choices' => [
                            ['text' => 'Un test de bout en bout', 'is_correct' => true],
                            ['text' => 'Une simple analyse de style', 'is_correct' => false],
                            ['text' => 'Un test unitaire de fonction pure', 'is_correct' => false],
                            ['text' => 'Une revue de code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une saisie accepte les entiers de 1 à 10 inclus. Quel jeu cible bien les bornes ?',
                        'marks' => 1,
                        'explanation' => 'Les valeurs juste à l’extérieur et sur les bornes vérifient les limites et leur caractère inclusif.',
                        'choices' => [
                            ['text' => '0, 1, 10 et 11', 'is_correct' => true],
                            ['text' => '4, 5, 6 et 7 seulement', 'is_correct' => false],
                            ['text' => '1 et 10 comme valeurs obligatoirement refusées', 'is_correct' => false],
                            ['text' => '100 et 200 seulement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une correction résout un défaut sur les paniers vides. Quel test protège directement cette correction ?',
                        'marks' => 1,
                        'explanation' => 'Un test de régression garde une vérification exécutable du cas qui était défectueux.',
                        'choices' => [
                            ['text' => 'Un test qui reproduit le panier vide et vérifie le résultat attendu', 'is_correct' => true],
                            ['text' => 'Un test qui ne crée que des paniers remplis', 'is_correct' => false],
                            ['text' => 'Un test qui vérifie seulement le nom de la fonction', 'is_correct' => false],
                            ['text' => 'Un test qui ignore toute erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test passe seul mais échoue après un autre. Quelle première action traite une cause fréquente de ce problème ?',
                        'marks' => 1,
                        'explanation' => 'Un état laissé par un autre test crée une dépendance à l’ordre et nuit à l’isolation.',
                        'choices' => [
                            ['text' => 'Vérifier puis isoler ou réinitialiser les données partagées', 'is_correct' => true],
                            ['text' => 'Allonger tous les délais sans chercher de cause', 'is_correct' => false],
                            ['text' => 'Supprimer l’assertion qui échoue', 'is_correct' => false],
                            ['text' => 'Relancer jusqu’au succès en ignorant les échecs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test de date échoue seulement à minuit. Quel changement le rend plus prévisible ?',
                        'marks' => 1,
                        'explanation' => 'Contrôler le temps retire une dépendance à l’instant réel et rend les résultats reproductibles.',
                        'choices' => [
                            ['text' => 'Fournir une horloge contrôlée dans le scénario', 'is_correct' => true],
                            ['text' => 'Relancer le test jusqu’au succès', 'is_correct' => false],
                            ['text' => 'Retirer l’assertion sur la date', 'is_correct' => false],
                            ['text' => 'Ajouter une attente fixe de dix secondes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La couverture affiche 100 %, mais un calcul faux ne fait échouer aucun test. Quelle conclusion s’impose ?',
                        'marks' => 1,
                        'explanation' => 'La couverture mesure l’exécution du code, pas la pertinence de toutes les attentes vérifiées.',
                        'choices' => [
                            ['text' => 'Les lignes exécutées ne sont pas nécessairement vérifiées par de bonnes assertions', 'is_correct' => true],
                            ['text' => 'Une couverture de 100 % garantit la justesse du calcul', 'is_correct' => false],
                            ['text' => 'Le calcul ne peut pas être testé', 'is_correct' => false],
                            ['text' => 'Le compilateur a validé la règle métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe livre après un seul exemple réussi. Quelle affirmation sur les tests est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Une suite couvre un ensemble de situations ; son succès ne constitue pas une preuve générale d’absence de défaut.',
                        'choices' => [
                            ['text' => 'Des tests apportent de la confiance sur les cas examinés sans prouver l’absence de tout défaut', 'is_correct' => true],
                            ['text' => 'Un test réussi garantit toutes les entrées possibles', 'is_correct' => false],
                            ['text' => 'Un test qui compile suffit pour accepter la fonctionnalité', 'is_correct' => false],
                            ['text' => 'Les défauts restants sont nécessairement matériels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rapport de défaut indique seulement « ça ne marche pas ». Quel complément aide le plus à reproduire le problème ?',
                        'marks' => 1,
                        'explanation' => 'Des informations reproductibles permettent d’observer le défaut et de vérifier ensuite sa correction.',
                        'choices' => [
                            ['text' => 'Les étapes, le résultat attendu, le résultat observé et le contexte utile', 'is_correct' => true],
                            ['text' => 'La seule référence de version sans description du problème', 'is_correct' => false],
                            ['text' => 'Une capture sans indication du parcours', 'is_correct' => false],
                            ['text' => 'Une hypothèse de cause sans résultat observé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un import doit refuser une ligne sans identifiant. Quel scénario manque si seuls les imports valides sont testés ?',
                        'marks' => 1,
                        'explanation' => 'Les chemins d’échec font partie du comportement attendu et doivent aussi être vérifiés.',
                        'choices' => [
                            ['text' => 'Un test du chemin de refus avec une entrée invalide', 'is_correct' => true],
                            ['text' => 'Un deuxième test identique de succès', 'is_correct' => false],
                            ['text' => 'Un test qui contourne la validation', 'is_correct' => false],
                            ['text' => 'Une vérification du nom de fichier sans examiner les lignes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un utilisateur valide un scénario métier avec un représentant de l’équipe. À quoi sert cette vérification d’acceptation ?',
                        'marks' => 1,
                        'explanation' => 'L’acceptation relie un comportement observable aux besoins et critères établis avec les parties prenantes.',
                        'choices' => [
                            ['text' => 'Vérifier le résultat par rapport aux critères convenus', 'is_correct' => true],
                            ['text' => 'Mesurer le nombre d’instructions machine', 'is_correct' => false],
                            ['text' => 'Prouver la sécurité de toute l’application', 'is_correct' => false],
                            ['text' => 'Remplacer tous les tests unitaires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Livrer et progresser en équipe',
                'description' => 'Préparer des versions identifiables et apprendre des retours d’usage.',
                'difficulty' => 'Beginner',
                'duration' => 11,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Chaque changement intégré déclenche une compilation et des tests automatisés. Quelle pratique reconnaît-on ?',
                        'marks' => 1,
                        'explanation' => 'L’intégration continue fournit un retour automatisé fréquent sur les changements réunis dans le code partagé.',
                        'choices' => [
                            ['text' => 'L’intégration continue', 'is_correct' => true],
                            ['text' => 'Une revue d’acceptation manuelle', 'is_correct' => false],
                            ['text' => 'Une sauvegarde hebdomadaire', 'is_correct' => false],
                            ['text' => 'Une installation locale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une version est prête à être déployée après validation, mais une personne décide du moment de mise en production. Quelle description est précise ?',
                        'marks' => 1,
                        'explanation' => 'La livraison continue maintient le logiciel déployable ; le déploiement continu pousse automatiquement les changements admissibles en production.',
                        'choices' => [
                            ['text' => 'Une livraison continue avec déclenchement de production contrôlé', 'is_correct' => true],
                            ['text' => 'Un déploiement continu automatique obligatoire', 'is_correct' => false],
                            ['text' => 'Une absence d’automatisation', 'is_correct' => false],
                            ['text' => 'Une simple compilation locale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La même application est testée puis publiée. Comment identifier précisément ce qui a été livré ?',
                        'marks' => 1,
                        'explanation' => 'Un artefact identifiable permet de relier code, vérifications et déploiement.',
                        'choices' => [
                            ['text' => 'Conserver un artefact versionné relié au code source correspondant', 'is_correct' => true],
                            ['text' => 'Reconstruire une version différente sans conserver sa référence', 'is_correct' => false],
                            ['text' => 'Réutiliser le nom « dernier » sans historique', 'is_correct' => false],
                            ['text' => 'Noter seulement la date dans une discussion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les tests utilisent par erreur les identifiants de la base de production. Quelle séparation manque ?',
                        'marks' => 1,
                        'explanation' => 'Les environnements doivent limiter les risques d’interactions involontaires avec les données réelles.',
                        'choices' => [
                            ['text' => 'Des configurations et accès propres à chaque environnement', 'is_correct' => true],
                            ['text' => 'Une convention de nommage des fonctions', 'is_correct' => false],
                            ['text' => 'Un nouveau thème graphique', 'is_correct' => false],
                            ['text' => 'Une branche par utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une version se déploie sans erreur technique, mais ses utilisateurs reçoivent davantage d’échecs. Que faut-il observer après livraison ?',
                        'marks' => 1,
                        'explanation' => 'Une opération de déploiement réussie ne démontre pas que le service rendu fonctionne correctement.',
                        'choices' => [
                            ['text' => 'Les erreurs et les parcours réellement utilisés, pas seulement le succès du script', 'is_correct' => true],
                            ['text' => 'Uniquement le code de sortie du script', 'is_correct' => false],
                            ['text' => 'L’installation des fichiers sans exercer de parcours', 'is_correct' => false],
                            ['text' => 'Le seul statut vert de la compilation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une ancienne version doit être remise en service après un incident. Quel point peut compliquer le retour ?',
                        'marks' => 1,
                        'explanation' => 'Un retour du code n’annule pas automatiquement les transformations de données effectuées par la nouvelle version.',
                        'choices' => [
                            ['text' => 'Les données ou le schéma peuvent ne plus être compatibles avec l’ancien code', 'is_correct' => true],
                            ['text' => 'Le fait que la nouvelle version a été compilée', 'is_correct' => false],
                            ['text' => 'La présence d’un tag sur l’ancienne version', 'is_correct' => false],
                            ['text' => 'Le lancement des tests unitaires de l’ancienne version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe montre régulièrement des fonctionnalités utilisables aux utilisateurs. Quel bénéfice recherche-t-elle ?',
                        'marks' => 1,
                        'explanation' => 'Des retours fréquents réduisent le délai avant de découvrir une mauvaise hypothèse produit.',
                        'choices' => [
                            ['text' => 'Corriger tôt les écarts entre solution et besoin', 'is_correct' => true],
                            ['text' => 'Interdire toute évolution du périmètre', 'is_correct' => false],
                            ['text' => 'Remplacer les critères d’acceptation', 'is_correct' => false],
                            ['text' => 'Garantir un planning immuable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe déclare un élément terminé, mais les tests et la documentation indispensables restent à faire. Quel repère commun manque ?',
                        'marks' => 1,
                        'explanation' => 'La définition de terminé établit les exigences de qualité communes à un incrément réellement achevé.',
                        'choices' => [
                            ['text' => 'Une définition de « terminé » partagée', 'is_correct' => true],
                            ['text' => 'Une estimation plus optimiste', 'is_correct' => false],
                            ['text' => 'Une liste de tâches commencées', 'is_correct' => false],
                            ['text' => 'Une confirmation fondée sur le seul code écrit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une rétrospective relève que les revues restent bloquées plusieurs jours. Quelle suite donne de la valeur à la réunion ?',
                        'marks' => 1,
                        'explanation' => 'Une rétrospective sert à améliorer le fonctionnement de l’équipe par des expérimentations suivies.',
                        'choices' => [
                            ['text' => 'Choisir une action concrète, un responsable et un moyen de vérifier son effet', 'is_correct' => true],
                            ['text' => 'Reprendre la même discussion sans décision à chaque réunion', 'is_correct' => false],
                            ['text' => 'Ajouter le constat au backlog sans jamais le prioriser', 'is_correct' => false],
                            ['text' => 'Supprimer les revues pour livrer plus vite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe commence beaucoup de tâches mais en termine peu. Quel changement aide généralement le flux de travail ?',
                        'marks' => 1,
                        'explanation' => 'Une limite de travail en cours aide à réduire la dispersion et rend les blocages visibles.',
                        'choices' => [
                            ['text' => 'Limiter le travail en cours et terminer les éléments engagés', 'is_correct' => true],
                            ['text' => 'Commencer encore plus de tâches pour occuper chacun', 'is_correct' => false],
                            ['text' => 'Mesurer uniquement le nombre de tâches ouvertes', 'is_correct' => false],
                            ['text' => 'Éviter de signaler les blocages', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'Introduction au génie logiciel',
            'Programming Practices',
            'Git & Collaboration',
            'Testing Fundamentals',
            'Requirements & Design',
            'Clean Code',
            'Agile & Team Practices',
            'Software Delivery Fundamentals',
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
