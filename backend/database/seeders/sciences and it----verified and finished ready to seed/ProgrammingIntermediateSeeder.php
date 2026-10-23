<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProgrammingIntermediateSeeder extends Seeder
{
    private function mc(string $question, string $answer, string $d1, string $d2, string $d3, string $explanation): array
    {
        return ['question' => $question, 'explanation' => $explanation, 'choices' => [
            ['text' => $answer, 'correct' => true], ['text' => $d1, 'correct' => false],
            ['text' => $d2, 'correct' => false], ['text' => $d3, 'correct' => false],
        ]];
    }

    public function run(): void
    {
        $subject = Subject::where('slug', 'programming')->firstOrFail();
        $quizzes = [
            [
                'title' => 'Choisir une structure de données adaptée',
                'description' => 'Résoudre des situations de parcours, recherche et traitement de priorités.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    $this->mc('Le navigateur doit revenir à la page visitée juste avant. Quelle structure correspond naturellement à cette navigation ?', 'Une pile LIFO', 'Une file FIFO', 'Un tableau trié par URL', 'Un graphe sans historique', 'Le retour arrière retire d’abord l’état visité le plus récemment.'),
                    $this->mc('Un serveur doit traiter les demandes dans leur ordre d’arrivée. Quelle structure exprime cette règle ?', 'Une file FIFO', 'Une pile LIFO', 'Un tas min sans priorité', 'Un ensemble qui supprime les répétitions', 'FIFO signifie que le premier élément ajouté est le premier retiré.'),
                    $this->mc('Une application cherche souvent un utilisateur par identifiant et n’a pas besoin d’un ordre trié. Quelle structure peut accélérer ces accès en moyenne ?', 'Une table de hachage', 'Une liste chaînée parcourue depuis le début', 'Une pile parcourue du sommet', 'Une file parcourue jusqu’à la clé', 'Une table de hachage permet souvent les accès moyens en O(1), selon collisions et distribution.'),
                    $this->mc('Une liste chaînée connaît déjà sa tête et doit y ajouter un nouvel élément. Quelle propriété est utile ?', 'L’insertion en tête demande seulement de mettre à jour quelques liens', 'L’accès direct à tout indice est garanti en O(1)', 'Les éléments se trient automatiquement', 'Les références invalides sont impossibles', 'L’ajout en tête est constant lorsque le pointeur sur la tête est disponible.'),
                    $this->mc('Une file de travaux doit extraire à chaque fois la tâche ayant la priorité la plus élevée. Quelle structure convient ?', 'Un tas utilisé comme file de priorité', 'Une pile sans ordre de priorité', 'Une liste parcourue dans l’ordre alphabétique', 'Un tableau de valeurs booléennes', 'Un tas donne un accès efficace à l’élément de priorité maximale ou minimale.'),
                    $this->mc('Un arbre binaire de recherche reçoit les clés déjà triées dans l’ordre croissant. Pourquoi ses recherches peuvent-elles devenir lentes ?', 'Il peut se dégrader en chaîne et atteindre une hauteur proche de n', 'Les nombres triés ne peuvent pas être stockés', 'Un arbre visite toujours un seul nœud', 'La recherche devient nécessairement constante', 'Des insertions ordonnées peuvent produire un arbre déséquilibré et un coût de recherche O(n).'),
                    $this->mc('Un graphe non orienté modélise les routes entre villes. Pour trouver toutes les villes accessibles depuis une origine, quelle approche convient ?', 'Un parcours BFS ou DFS avec marquage des sommets visités', 'Un tri alphabétique des noms de villes', 'Une recherche binaire dans la liste des routes', 'Un tableau sans liens entre villes', 'BFS ou DFS explore les sommets atteignables ; le marquage évite les revisites.'),
                    $this->mc('Deux mots sont des anagrammes si leurs lettres apparaissent avec les mêmes fréquences. Quelle méthode vérifie efficacement cette règle ?', 'Compter chaque caractère dans les deux mots et comparer les comptes', 'Comparer uniquement la première lettre', 'Vérifier que les longueurs sont égales seulement', 'Comparer les codes des deux mots comme des nombres', 'Les fréquences conservent les répétitions, contrairement à un simple ensemble de caractères.'),
                    $this->mc('On veut retirer les doublons d’une séquence sans changer l’ordre des premières occurrences. Quelle démarche est correcte ?', 'Parcourir la séquence, mémoriser les valeurs vues et ajouter les nouvelles au résultat', 'Trier les valeurs puis supprimer toute la séquence', 'Retirer chaque valeur qui apparaît une seule fois', 'Inverser la séquence sans vérifier les valeurs', 'Un ensemble des valeurs rencontrées permet de filtrer tout en conservant l’ordre d’ajout au résultat.'),
                    $this->mc('Deux clés différentes obtiennent le même indice dans une table de hachage. Que doit faire l’implémentation ?', 'Résoudre la collision puis distinguer les clés lors de la recherche', 'Effacer les deux entrées', 'Remplacer les clés par leurs valeurs', 'Refuser toutes les insertions suivantes', 'Les collisions se gèrent par chaînage ou adressage ouvert, avec une comparaison des clés.'),
                ],
            ],
            [
                'title' => 'Concevoir des classes collaboratives',
                'description' => 'Appliquer encapsulation, interfaces et composition à des composants maintenables.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    $this->mc('Une classe Compte expose son solde en écriture publique. Quel risque cela crée-t-il ?', 'Un appelant peut contourner les règles et placer le compte dans un état invalide', 'Le solde devient automatiquement chiffré', 'Les objets ne peuvent plus être créés', 'Le programme accélère forcément', 'L’encapsulation protège les invariants en contrôlant les opérations qui modifient l’état.'),
                    $this->mc('Deux passerelles de paiement doivent pouvoir servir le même processus de commande. Comment limiter le couplage ?', 'Faire dépendre le processus d’une interface implémentée par les deux passerelles', 'Instancier la passerelle concrète dans chaque méthode', 'Copier le processus pour chaque fournisseur', 'Stocker la passerelle dans une chaîne', 'Une abstraction stable permet de remplacer une implémentation sans modifier le code client.'),
                    $this->mc('Une classe Rapport calcule des statistiques, génère un PDF et envoie un courriel. Quelle évolution améliore sa cohésion ?', 'Confier la génération et l’envoi à des composants distincts', 'Ajouter la gestion des paiements à Rapport', 'Rendre tous ses champs publics', 'Créer une sous-classe par adresse destinataire', 'Des responsabilités distinctes changent et se testent plus facilement séparément.'),
                    $this->mc('Une classe dérivée redéfinit une méthode et viole les attentes du code écrit pour la classe de base. Quel principe SOLID est concerné ?', 'La substitution de Liskov', 'La responsabilité unique', 'La ségrégation des interfaces', 'L’inversion de dépendance', 'Un sous-type doit pouvoir remplacer son type de base sans invalider le comportement attendu.'),
                    $this->mc('Un client doit implémenter de nombreuses méthodes qu’il n’utilise jamais. Quel ajustement est pertinent ?', 'Découper le contrat en interfaces plus petites et ciblées', 'Créer une interface encore plus large', 'Rendre toutes les méthodes globales', 'Supprimer les assertions des tests', 'La ségrégation des interfaces évite d’imposer des opérations inutiles aux clients.'),
                    $this->mc('Commande hérite de MoteurPDF uniquement pour réutiliser une méthode d’export. Pourquoi la composition est-elle plus juste ?', 'Une commande utilise un service PDF sans être elle-même un moteur PDF', 'La composition interdit la réutilisation', 'L’héritage est toujours plus lent', 'Une commande ne peut pas posséder de méthode', 'L’héritage exprime une relation de sous-type ; ici il s’agit plutôt d’une collaboration.'),
                    $this->mc('Un service crée lui-même un client HTTP concret, ce qui rend les tests dépendants du réseau. Quelle modification aide ?', 'Injecter le client derrière un contrat remplaçable', 'Créer une connexion réseau dans chaque assertion', 'Masquer toutes les exceptions', 'Remplacer le constructeur par une variable globale', 'L’injection permet d’utiliser un faux client contrôlé lors des tests.'),
                    $this->mc('Une valeur Adresse ne doit pas changer après sa création. Quelle conception exprime cette contrainte ?', 'Un état privé sans opérations de mutation après construction', 'Des propriétés publiques modifiables', 'Un setter sans validation', 'Une variable globale partagée', 'Un objet immuable préserve son état ; une modification produit au besoin un nouvel objet.'),
                    $this->mc('Une méthode renvoie null à la fois quand un élément est absent et quand une panne survient. Quel est le défaut principal ?', 'L’appelant ne peut pas distinguer deux situations qui appellent des réactions différentes', 'La valeur null est toujours une exception', 'Les résultats sont automatiquement triés', 'Les appels deviennent asynchrones', 'Un contrat de retour doit distinguer absence attendue et erreur technique.'),
                    $this->mc('Une méthode contient des branches répétées selon le type concret d’un client. Quel axe d’amélioration mérite examen ?', 'Déléguer le comportement variable à des stratégies ou à des types appropriés', 'Rendre la méthode statique sans autre changement', 'Ouvrir une connexion SQL par branche', 'Renommer le compteur de boucle', 'Des branches par type peuvent signaler un comportement polymorphe, si le domaine le justifie.'),
                    $this->mc('Un composant doit envoyer des notifications par courriel ou SMS, selon la configuration. Quel contrat facilite l’ajout d’un nouveau canal ?', 'Une interface de notification commune aux différents canaux', 'Une condition globale dans chaque écran', 'Une classe qui contient tous les mots de passe', 'Un tableau de classes sans méthodes communes', 'Un contrat commun laisse le composant appelant indépendant du canal concret.'),
                ],
            ],
            [
                'title' => 'Traiter les erreurs et les fichiers externes',
                'description' => 'Préserver les données, valider les entrées et rendre les échecs diagnostiquables.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    $this->mc('Un import échoue au milieu du traitement. Quelle réaction permet à la couche appelante de gérer correctement l’échec ?', 'Signaler l’erreur avec un contexte utile et laisser la couche appropriée décider', 'Capturer toute erreur puis retourner un succès vide', 'Réessayer sans limite immédiatement', 'Afficher la trace technique au client', 'Un échec doit rester observable et les détails techniques ne doivent pas être exposés à l’utilisateur.'),
                    $this->mc('Un bloc catch intercepte une erreur de base de données et ne fait rien. Pourquoi est-ce problématique ?', 'Il masque l’échec et laisse croire que l’opération a abouti', 'Il améliore toujours la cohérence', 'Il annule toute la base automatiquement', 'Il rend la méthode pure', 'Une exception ignorée empêche le diagnostic et peut produire un état applicatif incohérent.'),
                    $this->mc('Un flux doit être fermé même si son écriture échoue. Quel mécanisme garantit le nettoyage ?', 'Un bloc finally ou un mécanisme de gestion des ressources du langage', 'Une instruction placée seulement après l’écriture', 'Un commentaire en tête du fichier', 'Un redémarrage du serveur', 'Le nettoyage doit être exécuté aussi bien après un succès qu’après une exception.'),
                    $this->mc('Un fichier téléversé est traité selon son extension, fournie par le navigateur. Quelle vérification serveur manque ?', 'Vérifier taille, format réel et contraintes de contenu', 'Faire confiance au nom d’origine', 'Exécuter le fichier pour en découvrir le type', 'Accepter une taille illimitée', 'Les métadonnées du client sont contrôlables ; le serveur doit effectuer ses propres validations.'),
                    $this->mc('Un document JSON est syntaxiquement valide, mais ne contient pas le champ requis montant. Que faut-il faire ?', 'Valider sa structure et ses règles métier avant le traitement', 'Trier les clés alphabétiquement', 'Convertir chaque champ en texte sans vérification', 'Réécrire le même document', 'La validité syntaxique JSON ne garantit pas le respect du contrat attendu par l’application.'),
                    $this->mc('Deux tâches écrivent simultanément dans le même fichier. Quel risque doit être pris en compte ?', 'Les données peuvent s’entrelacer ou se remplacer mutuellement', 'Le système fusionne toujours les contenus', 'Le fichier devient transactionnel automatiquement', 'Une écriture désactive l’autre sans erreur', 'Il faut coordonner les accès ou écrire séparément avant une fusion maîtrisée.'),
                    $this->mc('Une configuration importante est réécrite. Quelle stratégie réduit le risque de laisser un fichier partiel ?', 'Écrire un fichier temporaire, le vérifier puis le remplacer de façon atomique si possible', 'Vider le fichier avant de calculer le nouveau contenu', 'Écrire les octets dans un ordre aléatoire', 'Désactiver les erreurs d’écriture', 'Un remplacement atomique évite généralement qu’un lecteur voie un contenu partiellement écrit.'),
                    $this->mc('Des jetons d’accès apparaissent dans les journaux applicatifs. Quelle correction est prioritaire ?', 'Masquer les secrets et restreindre l’accès et la conservation des journaux', 'Conserver les jetons plus longtemps', 'Afficher les journaux sur une page publique', 'Désactiver les droits du système de fichiers', 'Les journaux sont une source de fuite de secrets ; les données sensibles doivent en être exclues.'),
                    $this->mc('Une requête fournit le chemin ../../config/secrets.env à une fonction de lecture. Quelle protection est nécessaire ?', 'Restreindre le chemin à un répertoire autorisé et prévenir la traversée de répertoires', 'Accepter le chemin si sa longueur est courte', 'Ajouter le chemin à la réponse HTTP', 'Remplacer les points par des virgules', 'La validation doit empêcher l’accès à des fichiers en dehors de l’espace prévu.'),
                    $this->mc('Un export contient des listes et objets imbriqués destinés à plusieurs services. Quel avantage offre JSON ?', 'Un format textuel structuré et largement pris en charge', 'Un chiffrement automatique', 'Une garantie de validité métier', 'Des transactions intégrées', 'JSON facilite l’échange de données structurées, mais ne fournit ni chiffrement ni validation métier.'),
                    $this->mc('Une erreur touche la ligne 4 200 d’un import volumineux. Quel journal aide le diagnostic sans exposer les données ?', 'Numéro de ligne, catégorie d’erreur et identifiant de suivi', 'Mot de passe complet de l’utilisateur', 'Contenu intégral des secrets du fichier', 'Le seul mot « erreur »', 'Un contexte corrélable et non sensible est utile à l’équipe tout en limitant l’exposition.'),
                    $this->mc('Un appel réseau échoue parfois temporairement. Quelle stratégie de reprise est raisonnable ?', 'Quelques tentatives espacées avec délai croissant, pour une opération répétable sans dommage', 'Une boucle de reprises sans limite', 'Retenter aussi les erreurs de validation', 'Ignorer le résultat des reprises', 'Les reprises bornées aident pour les erreurs transitoires, mais doivent respecter l’idempotence.'),
                ],
            ],
            [
                'title' => 'Estimer le coût des algorithmes',
                'description' => 'Comparer la croissance du travail et choisir une approche pour des entrées réalistes.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    $this->mc('Une fonction visite les n éléments une fois et effectue un travail constant à chaque étape. Quelle complexité décrit son temps ?', 'O(n)', 'O(1)', 'O(log n)', 'O(n²)', 'Le travail croît proportionnellement au nombre d’éléments parcourus.'),
                    $this->mc('Une recherche binaire divise par deux l’intervalle à chaque étape. Que se passe-t-il approximativement quand la taille double ?', 'Une étape supplémentaire est nécessaire', 'Le nombre d’étapes double', 'Le nombre est divisé par deux', 'La complexité devient quadratique', 'Le nombre d’étapes est logarithmique ; doubler n ajoute environ une comparaison.'),
                    $this->mc('Deux parcours indépendants de n éléments s’exécutent l’un après l’autre. Quelle est la complexité totale ?', 'O(n)', 'O(n²)', 'O(2ⁿ)', 'O(log n)', 'Deux parcours coûtent 2n ; les constantes sont ignorées en notation asymptotique.'),
                    $this->mc('Une boucle de n passages contient une autre boucle de n passages. Quel ordre de croissance domine ?', 'O(n²)', 'O(n)', 'O(log n)', 'O(1)', 'Les deux parcours imbriqués produisent n fois n opérations.'),
                    $this->mc('Une fonction récursive calcule Fibonacci sans mémoriser ses résultats. Pourquoi devient-elle rapidement coûteuse ?', 'Elle recalcule plusieurs fois les mêmes sous-problèmes', 'Elle trie les valeurs à chaque appel', 'Elle ne fait qu’une comparaison par entrée', 'Elle utilise nécessairement O(1) appels', 'La mémorisation ou la programmation dynamique évite de répéter les calculs des mêmes valeurs.'),
                    $this->mc('Un tri quadratique fonctionne sur quelques dizaines d’éléments. Quelle précaution prendre avant de l’utiliser sur un million ?', 'Mesurer et considérer une méthode de croissance plus faible', 'Conclure que la taille ne changera pas le temps', 'Supposer qu’il battra O(n log n)', 'Évaluer seulement la couleur de l’interface', 'Un coût quadratique peut croître fortement ; tailles réelles et contraintes guident le choix.'),
                    $this->mc('Une solution réduit le temps mais consomme davantage de mémoire. Comment décider si elle convient ?', 'Évaluer ensemble les limites de temps, mémoire et taille des entrées', 'Ignorer la mémoire dans tous les cas', 'Choisir uniquement le code le plus court', 'Supposer qu’une complexité favorable gagne toujours', 'L’analyse asymptotique est utile, mais contraintes et mesures réelles participent au choix.'),
                    $this->mc('Une méthode semble rapide sur dix éléments. Quelle vérification manque pour estimer sa capacité à passer à l’échelle ?', 'L’examiner sur des tailles représentatives et croissantes', 'La renommer « rapide »', 'Tester une seule fois sur l’entrée minimale', 'Compter les commentaires', 'Un petit cas ne révèle pas toujours la croissance du coût avec n.'),
                    $this->mc('Une collection est consultée des milliers de fois par clé. Quel investissement peut accélérer ces recherches ?', 'Créer un index adapté en tenant compte de son coût de construction et de maintenance', 'Remplacer chaque accès par une boucle imbriquée', 'Recréer la collection avant chaque consultation', 'Supprimer les clés après chaque recherche', 'Un index accélère les consultations répétées, mais demande de l’espace et des mises à jour.'),
                    $this->mc('Une recherche linéaire peut trouver la cible à la dernière position ou ne pas la trouver. Quelle analyse couvre le travail maximal ?', 'Le pire cas', 'Le cas moyen uniquement', 'La compilation du langage', 'Le nombre de lignes de commentaires', 'Dans le pire cas, tous les éléments doivent être examinés.'),
                ],
            ],
            [
                'title' => 'Écrire des requêtes SQL fiables',
                'description' => 'Filtrer, agréger et modifier les données en protégeant leur cohérence.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    $this->mc('Un tableau de bord doit lister les commandes dont client_id vaut 24. Quelle clause sélectionne ces lignes ?', 'WHERE client_id = 24', 'ORDER BY client_id = 24', 'GROUP BY client_id = 24', 'VALUES client_id = 24', 'WHERE filtre les lignes ; ORDER BY trie, GROUP BY agrège et VALUES sert aux insertions.'),
                    $this->mc('Une saisie utilisateur est transmise à une requête SQL. Quelle méthode protège le mieux sa structure ?', 'Une requête préparée avec paramètre lié', 'Concaténer directement la saisie dans le SQL', 'Retirer uniquement les espaces', 'Masquer le formulaire côté navigateur', 'Les paramètres séparent les valeurs fournies par l’utilisateur du code SQL exécuté.'),
                    $this->mc('Une opération modifie plusieurs tables et doit réussir entièrement ou être annulée. Quel mécanisme employer ?', 'Une transaction avec commit ou rollback', 'Un index pour chaque colonne', 'Une vue SQL', 'Une requête SELECT répétée', 'Une transaction valide l’ensemble des changements ou permet leur annulation.'),
                    $this->mc('Une commande référence le client qui l’a passée. Quelle contrainte garantit l’existence de ce client ?', 'Une clé étrangère vers la table des clients', 'Un index unique sur la date', 'Une valeur par défaut sur le montant', 'Un ordre de tri', 'La clé étrangère préserve l’intégrité de la relation entre commande et client.'),
                    $this->mc('Il faut compter les commandes de chaque client. Quelle construction SQL convient ?', 'GROUP BY client_id avec COUNT(*)', 'ORDER BY COUNT(*) sans agrégation', 'WHERE client_id suivi de INSERT', 'LIMIT client_id', 'Le regroupement rassemble les lignes par client, et COUNT calcule l’effectif de chaque groupe.'),
                    $this->mc('Une suppression vise une seule commande. Pourquoi inclure une condition sur sa clé ?', 'Sans filtre précis, DELETE pourrait toucher toutes les lignes', 'Pour convertir la commande en index', 'Pour accélérer la création de table', 'Pour éviter les contraintes', 'La clé identifie la ligne ciblée ; une suppression sans condition peut vider la table.'),
                    $this->mc('Une jointure renvoie plusieurs fois un client dans un rapport. Quelle cause est probable ?', 'Le client a plusieurs commandes et la jointure produit une ligne par correspondance', 'La clé du client a disparu', 'Les jointures éliminent toujours les doublons', 'Chaque commande devient une table séparée', 'Une relation un-à-plusieurs multiplie les lignes du côté client selon ses commandes.'),
                    $this->mc('Un filtre fréquent parcourt des millions de lignes. Quel changement peut réduire le travail de recherche ?', 'Un index adapté à la colonne filtrée', 'Un commentaire SQL', 'Remplacer les valeurs par NULL', 'Une base par utilisateur', 'Un index accélère souvent les lectures ciblées, mais coûte de l’espace et ralentit certaines écritures.'),
                    $this->mc('Un client réessaie une demande de paiement après un délai réseau. Comment éviter un second débit ?', 'Utiliser une clé d’idempotence vérifiée côté serveur', 'Traiter chaque requête comme nouvelle', 'Allonger la transaction sans autre contrôle', 'Désactiver le bouton seulement dans le navigateur', 'Une clé d’idempotence permet de reconnaître et retourner le résultat de la même opération.'),
                    $this->mc('Deux requêtes concurrentes créent le même courriel alors qu’une seule ligne doit exister. Quelle protection est décisive ?', 'Une contrainte UNIQUE en base et le traitement propre de son conflit', 'Une vérification dans le formulaire uniquement', 'Un commentaire dans le modèle', 'Un tri avant insertion', 'La contrainte en base garantit l’unicité même si les requêtes arrivent simultanément.'),
                    $this->mc('Une transaction garde des verrous pendant plusieurs appels lents à un service externe. Pourquoi la raccourcir ?', 'Les verrous prolongés bloquent les autres transactions et accroissent les conflits', 'Un appel externe garantit l’atomicité SQL', 'La durée n’a aucun effet sur la concurrence', 'Les verrous accélèrent toujours les requêtes', 'Une transaction longue peut retenir des ressources et empêcher d’autres opérations de progresser.'),
                ],
            ],
            [
                'title' => 'Tester des composants en collaboration',
                'description' => 'Choisir les niveaux de test utiles, isoler les dépendances et protéger les comportements.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    $this->mc('Une fonction calcule des frais selon le montant et la zone, sans dépendance externe. Quel test est le plus direct ?', 'Un test unitaire avec des entrées et résultats attendus', 'Un test de charge du site entier', 'Une sauvegarde de production', 'Un test réseau uniquement', 'Le test unitaire vérifie une règle isolée sur des cas contrôlés.'),
                    $this->mc('Deux modules doivent échanger un document JSON conforme au même contrat. Quel test vérifie leur collaboration ?', 'Un test d’intégration', 'Un test de renommage', 'Un test de charge uniquement', 'Une vérification de compilation seulement', 'Le test d’intégration exerce le contrat et les interactions entre composants.'),
                    $this->mc('Un test envoie réellement un courriel à chaque exécution. Comment éviter cet effet externe ?', 'Fournir un transport simulé et vérifier le message produit', 'Utiliser une vraie adresse de client', 'Désactiver les assertions', 'Envoyer deux fois pour confirmer', 'Un faux transport vérifie le comportement sans envoyer de courriel réel.'),
                    $this->mc('Une correction résout un bug reproductible. Quel ajout protège le résultat lors de futures modifications ?', 'Un test de régression qui reproduit le cas', 'Un nouveau fichier README seulement', 'Une variable globale', 'Un renommage de toutes les fonctions', 'Le test garde une preuve exécutable du comportement corrigé.'),
                    $this->mc('Un test passe seul mais échoue après un autre test. Quelle cause faut-il examiner ?', 'Un état partagé ou une dépendance à l’ordre des tests', 'Une complexité logarithmique', 'Une explication trop courte', 'Un nom de test détaillé', 'Les tests isolés ne devraient pas dépendre d’un état laissé par les précédents.'),
                    $this->mc('Un test casse après un refactoring interne alors que l’API publique reste correcte. Quel test est plus robuste ?', 'Un test du comportement observable par l’interface publique', 'Un test des noms de variables locales', 'Un test du nombre de lignes source', 'Aucun test', 'Les tests basés sur le contrat public sont moins liés aux détails d’implémentation.'),
                    $this->mc('Un service HTTP réel rend les tests locaux lents et instables. Quelle approche est adaptée ?', 'Remplacer le service externe par un faux contrôlé dans ces tests', 'Augmenter les délais d’attente sans limite', 'Ignorer les échecs aléatoires', 'Retirer les tests de la pipeline', 'Un faux permet de contrôler les réponses tout en laissant les tests indépendants du réseau.'),
                    $this->mc('Une classe reçoit son client HTTP par injection. Quelle amélioration cela apporte-t-il aux tests ?', 'Le client peut être remplacé par un faux sans changer la classe testée', 'Les requêtes deviennent toujours plus rapides en production', 'Les erreurs réseau disparaissent', 'Le contrat externe est supprimé', 'L’injection rend la dépendance substituable, donc son comportement testable.'),
                    $this->mc('Un test échoue selon l’heure de son exécution. Quelle pratique rend le scénario temporel déterministe ?', 'Utiliser une horloge simulée ou une date fixe contrôlée', 'Attendre que toutes les machines partagent le même fuseau', 'Supprimer toute assertion', 'Générer une date aléatoire à chaque essai', 'Contrôler l’horloge rend le test reproductible indépendamment du temps réel.'),
                    $this->mc('Une suite est instable et échoue parfois sans changement de code. Pourquoi corriger ce problème ?', 'Les échecs intermittents diminuent la confiance et peuvent masquer de vrais défauts', 'Ils prouvent la sécurité du code', 'Ils augmentent forcément la couverture', 'Ils accélèrent les déploiements', 'Un signal de test non fiable rend difficile la distinction entre régression et bruit.'),
                    $this->mc('Une pipeline lance automatiquement les tests avant fusion. Quel bénéfice fournit-elle ?', 'Un retour rapide sur des erreurs avant leur intégration à la branche partagée', 'Une garantie qu’aucun défaut ne subsistera', 'Le remplacement de toute revue humaine', 'L’indépendance automatique de tous les tests', 'L’intégration continue détecte tôt des problèmes, sans prouver l’absence de défauts.'),
                    $this->mc('Une revue modifie le comportement public d’une fonction. Quels éléments doivent rester cohérents ?', 'Le code, les tests et la documentation du contrat', 'Le nom d’auteur seulement', 'Les données sensibles des journaux', 'Uniquement la couleur du bouton', 'Les tests et la documentation doivent refléter le comportement attendu après la modification.'),
                ],
            ],
        ];

        Quiz::where('subject_id', $subject->id)
            ->where('difficulty', 'Intermediate')
            ->whereNotIn('title', array_column($quizzes, 'title'))
            ->update(['is_active' => false]);
        foreach ($quizzes as $quizData) {
            $questionCount = count($quizData['questions']);
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => max(12, (int) ceil($questionCount * 1.25)),
                    'passing_score' => 70,
                    'total_marks' => $questionCount,
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
                ]
            );
            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = $quiz->questions()->updateOrCreate(
                    ['order' => $questionIndex + 1],
                    ['question' => $questionData['question'], 'type' => 'multiple_choice', 'marks' => 1, 'explanation' => $questionData['explanation']]
                );
                $question->choices()->delete();
                foreach ($questionData['choices'] as $choiceIndex => $choiceData) {
                    $question->choices()->create(['choice_text' => $choiceData['text'], 'is_correct' => $choiceData['correct'], 'order' => $choiceIndex + 1]);
                }
            }
            $quiz->questions()->where('order', '>', $questionCount)->delete();
        }
    }
}

