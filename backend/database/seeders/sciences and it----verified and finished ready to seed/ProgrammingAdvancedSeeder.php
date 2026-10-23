<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProgrammingAdvancedSeeder extends Seeder
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
                'title' => 'Optimiser des algorithmes sous contrainte',
                'description' => 'Analyser le coût des traitements et choisir des stratégies adaptées aux entrées.',
                'difficulty' => 'Advanced',
                'questions' => [
                    $this->mc('Un tri rapide utilise toujours le premier élément comme pivot. Sur une entrée déjà triée, quel risque apparaît ?', 'Les partitions deviennent très déséquilibrées et le coût peut atteindre O(n²)', 'Le coût devient O(1)', 'Le tri devient toujours stable', 'La mémoire devient nulle', 'Des partitions de tailles n−1 et zéro entraînent une profondeur linéaire et un coût quadratique.'),
                    $this->mc('Une fonction récursive résout plusieurs fois les mêmes états. La mémoire disponible est suffisante pour conserver les résultats. Quelle technique réduit le travail répété ?', 'La mémoïsation', 'L’ajout de récursions supplémentaires', 'Le mélange aléatoire des entrées', 'La suppression des cas de base', 'La mémoïsation associe un résultat à chaque état déjà calculé.'),
                    $this->mc('Un problème possède des sous-problèmes qui se recouvrent et une solution optimale construite à partir de solutions optimales plus petites. Quelle approche est indiquée ?', 'La programmation dynamique', 'Un parcours aléatoire', 'Une recherche binaire sans ordre', 'Une boucle qui oublie les états précédents', 'Ces propriétés permettent de calculer et réutiliser les solutions des sous-problèmes.'),
                    $this->mc('Une méthode gloutonne choisit localement l’activité qui finit le plus tôt. Pourquoi peut-elle être optimale pour la sélection d’activités compatibles ?', 'Une preuve propre à ce problème montre que ce choix local préserve une solution optimale', 'Toute méthode gloutonne est optimale pour chaque problème', 'Les activités ont toutes la même durée', 'Les données sont automatiquement triées par prix', 'Un choix glouton nécessite une démonstration liée aux propriétés du problème.'),
                    $this->mc('Dijkstra est lancé sur un graphe avec des poids négatifs. Pourquoi ses distances peuvent-elles être erronées ?', 'Un sommet considéré définitif peut ensuite être atteint par un chemin plus court', 'Les graphes pondérés ne sont jamais pris en charge', 'Les nombres négatifs ne peuvent pas être additionnés', 'L’algorithme ignore toujours le sommet de départ', 'La correction de Dijkstra repose sur des poids non négatifs.'),
                    $this->mc('Un graphe contient des poids négatifs, mais aucun cycle négatif accessible depuis la source. Quel algorithme convient pour les plus courts chemins ?', 'Bellman-Ford', 'Dijkstra inchangé', 'Un parcours en profondeur seul', 'Un tri topologique de tout graphe', 'Bellman-Ford gère les poids négatifs et peut détecter des cycles négatifs accessibles.'),
                    $this->mc('Une optimisation complexifie le code, mais aucune mesure ne montre un ralentissement. Quelle démarche est la plus défendable ?', 'Profiler un scénario représentatif puis cibler le goulot mesuré', 'Réécrire les composants les plus anciens', 'Optimiser chaque boucle avant de mesurer', 'Ajouter un cache à toutes les méthodes', 'Le profilage distingue les coûts réels des suppositions et limite la complexité inutile.'),
                    $this->mc('Une recherche binaire est utilisée dans un tableau trié, mais ses comparaisons n’utilisent pas le même ordre que le tri. Quel défaut en résulte ?', 'Elle peut éliminer la moitié qui contient pourtant la cible', 'Elle devient toujours quadratique', 'Le tableau se retrie à chaque comparaison', 'Elle renvoie toujours une cible', 'La recherche binaire exige un ordre cohérent entre le tri et les comparaisons.'),
                    $this->mc('Une opération vectorisée accélère le traitement de millions de nombres. Quelle explication est plausible ?', 'Une implémentation optimisée réduit le coût des boucles interprétées', 'La vectorisation supprime toute allocation mémoire', 'Chaque valeur est calculée deux fois', 'Aucune opération n’est exécutée', 'Les primitives vectorisées peuvent exploiter des implémentations bas niveau optimisées.'),
                    $this->mc('Un algorithme respecte le délai mais dépasse la mémoire autorisée. Quel axe faut-il examiner ?', 'Les structures et données intermédiaires conservées en mémoire', 'La couleur de l’interface', 'Le nom des variables locales', 'La fréquence des commentaires', 'Le dépassement porte sur l’espace utilisé ; réduire les allocations ou l’état conservé est pertinent.'),
                ],
            ],
            [
                'title' => 'Structures et parcours de graphes',
                'description' => 'Sélectionner des structures adaptées aux graphes, préfixes et priorités.',
                'difficulty' => 'Advanced',
                'questions' => [
                    $this->mc('Une carte représente des routes non pondérées et doit trouver le trajet ayant le moins d’arêtes. Quel parcours donne cette garantie ?', 'Un parcours en largeur', 'Un parcours en profondeur', 'Un tri alphabétique des villes', 'Un parcours aléatoire', 'BFS explore les sommets par couches de distance en nombre d’arêtes.'),
                    $this->mc('Un dictionnaire volumineux doit répondre rapidement aux recherches de préfixes. Quelle structure exploite le partage des débuts de mots ?', 'Un trie', 'Une pile', 'Un tas binaire', 'Une file simple', 'Un trie organise les chemins par caractère et partage les préfixes communs.'),
                    $this->mc('Des connexions sont ajoutées progressivement et le système vérifie souvent si deux sommets appartiennent à la même composante. Quelle structure convient ?', 'Union-Find avec compression de chemin et union par rang', 'Une pile reconstruite pour chaque test', 'Un tableau trié par nom', 'Une file de priorité', 'Union-Find prend en charge efficacement les unions et les tests de connexion successifs.'),
                    $this->mc('Lors de l’ajout d’une arête dans un graphe non orienté, quand Union-Find détecte-t-il un cycle ?', 'Lorsque les deux extrémités sont déjà dans la même composante', 'Lorsque les deux extrémités ont des noms différents', 'Quand le graphe a plus de deux sommets', 'Dès que le graphe contient une arête', 'Relier deux sommets déjà connectés ferme un cycle.'),
                    $this->mc('Un graphe creux comporte beaucoup de sommets et peu d’arêtes. Quelle représentation évite de stocker toutes les paires possibles ?', 'Une liste d’adjacence', 'Une matrice dense', 'Un tableau de toutes les paires', 'Une chaîne de caractères', 'La liste d’adjacence ne conserve que les voisins réellement reliés.'),
                    $this->mc('Une application extrait fréquemment le minimum d’un ensemble tout en ajoutant des valeurs. Quelle structure offre habituellement ces opérations en O(log n) ?', 'Un tas binaire min', 'Une pile', 'Une liste non triée', 'Un tableau sans ordre', 'Un tas min maintient le minimum à la racine et réorganise les éléments selon sa hauteur.'),
                    $this->mc('Une insertion dans un arbre AVL provoque une rotation. Quelle propriété cette rotation rétablit-elle ?', 'Un facteur d’équilibre borné tout en conservant l’ordre de recherche', 'Un nombre identique de nœuds dans chaque sous-arbre', 'L’absence de feuilles', 'Un ordre alphabétique des méthodes', 'Les rotations rééquilibrent l’arbre sans violer son ordre de recherche binaire.'),
                    $this->mc('Une fonction de hachage place trop de clés dans les mêmes compartiments. Quelle dégradation est probable ?', 'Les recherches peuvent approcher un parcours linéaire', 'Les clés deviennent automatiquement triées', 'Les insertions coûtent toujours O(1)', 'Les collisions garantissent une meilleure distribution', 'Les longues chaînes de collision augmentent le travail des recherches et insertions.'),
                    $this->mc('Une recherche DFS dans un graphe orienté doit repérer les sommets encore actifs dans la récursion. Pourquoi ?', 'Une arête vers un sommet actif révèle un retour dans le chemin courant', 'Toute arête vers un sommet visité prouve toujours un cycle', 'DFS ne revisite jamais un sommet', 'Un sommet actif est isolé', 'Une arête vers un ancêtre actif indique un cycle ; une arête vers un sommet terminé ne suffit pas.'),
                    $this->mc('Une structure offre des opérations rapides mais impose des invariants difficiles à maintenir. Quel critère de choix est négligé ?', 'La simplicité de correction et de maintenance dans le contexte du projet', 'La couleur des données', 'La longueur des noms de fichiers', 'Le nombre de commentaires uniquement', 'Les performances doivent être mises en balance avec les invariants et le coût de maintenance.'),
                    $this->mc('Une table de hachage utilise une fonction qui ne dépend que d’une partie des clés. Quelle amélioration est la plus pertinente ?', 'Choisir une fonction qui distribue mieux les clés attendues', 'Trier les valeurs après chaque accès', 'Supprimer toutes les collisions par hypothèse', 'Remplacer la table par une pile', 'Une meilleure distribution réduit le nombre de collisions pour la charge réelle.'),
                ],
            ],
            [
                'title' => 'Appliquer les motifs de conception avec discernement',
                'description' => 'Relier les motifs et principes de conception à des problèmes de maintenance concrets.',
                'difficulty' => 'Advanced',
                'questions' => [
                    $this->mc('Chaque nouveau mode de livraison ajoute une branche à un service central. Quelle conception isole plus proprement ces variantes ?', 'Des stratégies de livraison respectant un contrat commun', 'Une variable globale', 'Une sous-classe de contrôleur par client', 'Un bloc catch autour du service', 'Une stratégie encapsule un comportement interchangeable et limite la croissance des conditions.'),
                    $this->mc('Une bibliothèque historique doit être utilisée derrière une interface moderne sans être modifiée. Quel motif traduit son interface ?', 'Adapter', 'Observer', 'Singleton', 'Builder', 'Adapter convertit l’interface existante vers le contrat attendu par le client.'),
                    $this->mc('Plusieurs vues doivent être averties lorsqu’un modèle change. Quel motif formalise cette relation ?', 'Observer', 'Factory Method', 'Decorator', 'Prototype', 'Observer permet à un sujet de notifier ses abonnés lors d’un changement.'),
                    $this->mc('Un flux doit recevoir dynamiquement chiffrement puis compression sans sous-classe pour chaque combinaison. Quel motif convient ?', 'Decorator', 'Singleton', 'Repository', 'State', 'Decorator enveloppe un objet et ajoute des comportements en conservant le contrat commun.'),
                    $this->mc('Une hiérarchie de classes devient profonde et chaque niveau apporte peu de valeur métier. Quel risque augmente ?', 'Les contrats hérités et les effets de changement deviennent difficiles à comprendre', 'Les performances sont toujours multipliées', 'Le polymorphisme disparaît automatiquement', 'Les objets ne peuvent plus être créés', 'Les spécialisations profondes compliquent le raisonnement sur les invariants hérités.'),
                    $this->mc('Un module métier instancie directement plusieurs fournisseurs concrets. Que suggère l’inversion des dépendances ?', 'Faire dépendre le module d’abstractions et injecter les implémentations', 'Ajouter davantage de constructions concrètes', 'Faire dépendre les abstractions des fournisseurs', 'Déplacer les noms de classes dans les commentaires', 'Les politiques métier doivent dépendre de contrats stables, non des détails techniques.'),
                    $this->mc('Une interface oblige ses implémentations à fournir des opérations impossibles pour certaines d’entre elles. Quel problème faut-il revoir ?', 'Un contrat trop large ou mal séparé', 'La taille de la police des journaux', 'Le nombre de dépendances de test', 'Le nom du constructeur uniquement', 'La ségrégation des interfaces évite d’imposer des méthodes inutiles ou incohérentes.'),
                    $this->mc('La création d’un rapport complexe comporte plusieurs étapes optionnelles qui rendent le constructeur illisible. Quel motif peut clarifier la construction ?', 'Builder', 'Observer', 'Flyweight', 'Proxy', 'Builder rend explicites les étapes d’assemblage d’un objet complexe.'),
                    $this->mc('Un singleton global contient une connexion mutable et complique les tests concurrents. Quelle option mérite d’être envisagée ?', 'Une dépendance explicite avec un cycle de vie géré', 'Un second singleton pour les tests', 'Des propriétés publiques', 'Ignorer l’état partagé', 'Un état global partagé complique isolation, cycle de vie et concurrence.'),
                    $this->mc('Une petite fonctionnalité n’a pas encore de variantes, mais l’équipe souhaite introduire plusieurs motifs par anticipation. Quelle recommandation est saine ?', 'N’ajouter une abstraction que si elle clarifie un besoin concret ou une évolution probable', 'Appliquer chaque motif au moins une fois', 'Remplacer toute fonction par une classe', 'Créer l’arborescence avant de comprendre le besoin', 'Une abstraction non justifiée ajoute de la complexité sans bénéfice établi.'),
                    $this->mc('Un décorateur modifie la signature attendue par les clients de l’objet qu’il enveloppe. Quelle conséquence probable en découle ?', 'Les clients ne peuvent plus utiliser le décorateur comme substitut de l’objet', 'Le décorateur devient toujours un adaptateur valide', 'Les instances cessent d’exister', 'La mémoire devient constante', 'Le décorateur doit normalement conserver le contrat de l’interface décorée.'),
                    $this->mc('Un module expose partout une classe concrète propriétaire au lieu d’un contrat partagé. Quel coût cela entraîne-t-il ?', 'Un couplage qui propage le détail d’implémentation aux consommateurs', 'Une meilleure indépendance entre modules', 'L’absence de besoin de tests', 'Une garantie de compatibilité permanente', 'Un contrat abstrait limite la propagation de détails et facilite le remplacement.'),
                ],
            ],
            [
                'title' => 'Évaluer les frontières d’une architecture',
                'description' => 'Examiner cohésion, résilience et coûts des systèmes distribués.',
                'difficulty' => 'Advanced',
                'questions' => [
                    $this->mc('Une modification de l’interface impose des changements dans le domaine, la base et les tests. Quel défaut est probablement présent ?', 'Des responsabilités ou dépendances trop couplées', 'Une mémoire forcément insuffisante', 'Des couches parfaitement isolées', 'Un cache trop rapide', 'Une séparation efficace limite la propagation des changements entre responsabilités.'),
                    $this->mc('Une équipe extrait un microservice mais garde des dépendances fortes sur les tables du monolithe. Quel coût ajoute-t-elle ?', 'Les pannes réseau et opérations distribuées sans véritable autonomie des données', 'Une atomicité globale garantie', 'La disparition des pannes partielles', 'Une compilation automatiquement plus simple', 'La distribution ajoute des modes de panne tandis que le partage de tables maintient le couplage.'),
                    $this->mc('Deux services indépendants modifient chacun leur stockage lors d’un processus métier. Pourquoi une transaction SQL locale ne suffit-elle pas ?', 'Elle ne couvre pas automatiquement plusieurs bases et appels réseau indépendants', 'SQL interdit toute modification distante', 'Les services ne peuvent pas écrire de données', 'Les bases deviennent toujours en lecture seule', 'Une transaction locale n’apporte pas d’atomicité globale entre services distincts.'),
                    $this->mc('Un service distant lent épuise le pool de connexions de l’application. Quelle combinaison réduit la propagation de la panne ?', 'Timeouts, limites de concurrence et circuit breaker', 'Des reprises illimitées sans pause', 'Un pool de taille infinie', 'La suppression des métriques', 'Ces protections bornent les ressources et suspendent temporairement les appels à un service défaillant.'),
                    $this->mc('Un cache accélère les lectures mais une modification apparaît avec retard. Quel compromis explique cela ?', 'La cohérence dépend de l’expiration et de l’invalidation du cache', 'Tout cache garantit les données les plus récentes', 'Le cache remplace les transactions', 'L’expiration rend les données immuables', 'La stratégie d’invalidation détermine quand les valeurs mises en cache sont actualisées.'),
                    $this->mc('Plusieurs instances doivent lire les mêmes sessions temporaires. Quel stockage est approprié ?', 'Un magasin partagé accessible aux instances', 'Une variable locale indépendante dans chaque processus', 'Un fichier local différent sans synchronisation', 'Une constante compilée dans l’application', 'Un stockage partagé rend les sessions disponibles quelle que soit l’instance qui reçoit la requête.'),
                    $this->mc('Un domaine métier doit rester indépendant du framework HTTP. Où convertir la requête vers une commande métier ?', 'À la frontière d’entrée, avant l’appel du domaine', 'Dans chaque entité métier', 'Dans les scripts SQL', 'Dans le cache', 'L’adaptateur d’entrée traduit le protocole sans faire dépendre le domaine du transport.'),
                    $this->mc('Un traitement de message peut échouer temporairement. Quelle séquence réduit le risque de perte du message ?', 'Acquitter après succès et prévoir une reprise ou une file d’échec', 'Supprimer avant le traitement', 'Acquitter immédiatement même en cas d’échec', 'Traiter seulement en mémoire volatile', 'L’acquittement différé et la reprise conservent les messages dont le traitement échoue.'),
                    $this->mc('Une API Gateway concentre aussi toute la logique métier de plusieurs services. Quel risque apparaît ?', 'Un composant central couplé qui devient difficile à faire évoluer', 'Une meilleure séparation automatique', 'La disparition des besoins d’observabilité', 'L’indépendance garantie des services', 'Une passerelle peut gérer le routage et des préoccupations transversales ; le domaine centralisé devient un goulot.'),
                    $this->mc('Une application doit survivre à la perte d’une région. Quelle capacité faut-il vérifier en plus de répliquer les serveurs ?', 'La réplication cohérente des données et la procédure de bascule', 'La couleur des tableaux de bord', 'Le nombre de commentaires source', 'La fréquence de renommage des classes', 'La disponibilité dépend aussi des données, du routage et d’une bascule maîtrisée.'),
                    $this->mc('Un cache distribué augmente la latence d’une opération simple. Quelle mesure déterminera s’il reste utile ?', 'Mesurer le coût complet des lectures, écritures et invalidations', 'Allonger toutes les durées de cache', 'Ajouter des couches de cache sans mesure', 'Supprimer les traces de requête', 'Un cache a lui-même un coût ; les mesures de bout en bout révèlent son bénéfice réel.'),
                    $this->mc('Chaque fonctionnalité impose des appels entre des microservices découpés par couche technique. Quel principe de découpage mérite révision ?', 'Créer des frontières alignées sur des capacités métier cohésives', 'Faire obligatoirement un service par couche', 'Partager une base unique entre chaque instance', 'Déployer chaque classe séparément', 'Des frontières cohésives réduisent les interactions réseau et les changements coordonnés.'),
                    $this->mc('Une commande est enregistrée même si le fournisseur de courriel est momentanément indisponible. Quelle architecture rend cela possible ?', 'Enregistrer durablement un message à traiter de façon asynchrone', 'Inclure l’envoi dans la transaction SQL sans délai maximal', 'Annuler toute commande si un courriel tarde', 'Désactiver les confirmations', 'Un traitement asynchrone durable découple le succès métier de la disponibilité du fournisseur.'),
                ],
            ],
            [
                'title' => 'Diagnostiquer les accès aux données',
                'description' => 'Analyser index, transactions, chargements ORM et anomalies concurrentes.',
                'difficulty' => 'Advanced',
                'questions' => [
                    $this->mc('Une requête ralentit à mesure que la table grandit. Quel outil fournit d’abord des indices sur le parcours choisi par le moteur ?', 'EXPLAIN ou un plan d’exécution équivalent', 'Un reformatage du contrôleur', 'Une capture du formulaire', 'Un index sur chaque champ sans analyse', 'Le plan d’exécution décrit les scans, jointures et estimations du moteur.'),
                    $this->mc('Un index améliore les filtres, mais ralentit les insertions. Pourquoi ?', 'Le moteur doit aussi maintenir l’index lors des écritures', 'Un index interdit toute insertion', 'Les valeurs sont envoyées au client deux fois', 'L’index trie les journaux externes', 'Les index ont un coût d’espace et de mise à jour à chaque modification pertinente.'),
                    $this->mc('Une requête filtre par client_id puis par date. Que faut-il examiner avant de créer un index composite ?', 'L’ordre des colonnes par rapport aux prédicats et requêtes réels', 'L’ordre des colonnes n’a jamais d’importance', 'L’index remplace toutes les contraintes', 'La dernière colonne doit toujours être la clé primaire', 'Les moteurs exploitent souvent les préfixes d’un index composite ; l’ordre influe sur ses usages possibles.'),
                    $this->mc('Un ORM lit les commandes puis exécute une requête client par commande. Quel problème est présent ?', 'Le problème N+1 de chargement des relations', 'Un deadlock certain', 'Une injection SQL', 'Une erreur de sérialisation numérique', 'Une requête additionnelle par objet fait croître inutilement le nombre d’accès SQL.'),
                    $this->mc('Le chargement anticipé corrige N+1 mais ramène trop de données. Quel ajustement peut réduire l’empreinte ?', 'Limiter les colonnes et relations sélectionnées et paginer ou charger par lots', 'Charger toutes les tables', 'Supprimer les limites de résultats', 'Utiliser SELECT * partout', 'Réduire les données lues diminue mémoire et trafic sans annuler le gain du chargement groupé.'),
                    $this->mc('Deux transactions lisent la dernière unité en stock puis la décrémentent en parallèle. Quel défaut peut survenir sans protection ?', 'Vendre deux fois la même unité', 'Normaliser automatiquement la table', 'Supprimer la clé primaire', 'Mettre le stock en cache permanent', 'La lecture et mise à jour doivent être atomiques ou synchronisées pour éviter la course.'),
                    $this->mc('Un index unique est ajouté à une colonne qui contient déjà des doublons. Quel résultat attendre ?', 'La création échoue tant que les doublons ne sont pas traités', 'Les doublons fusionnent sans perte', 'Les lignes sont renommées automatiquement', 'L’index devient une clé étrangère', 'Une contrainte d’unicité ne peut pas être établie sur des données qui la violent.'),
                    $this->mc('Un transfert doit débiter un compte et créditer l’autre, sans état intermédiaire partiel. Quelle propriété ACID est essentielle ?', 'L’atomicité', 'La durabilité uniquement', 'L’isolation uniquement', 'La cohérence uniquement', 'L’atomicité applique les deux changements ensemble ou aucun.'),
                    $this->mc('Des lectures non répétables apparaissent lors de modifications concurrentes. Quel paramètre faut-il étudier ?', 'Le niveau d’isolation transactionnelle', 'La taille des journaux applicatifs', 'Le nombre de composants UI', 'Le format des versions Git', 'Le niveau d’isolation détermine les anomalies concurrentes qu’une transaction peut observer.'),
                    $this->mc('Une transaction garde des verrous pendant un appel API lent. Quel risque opérationnel en découle ?', 'Les autres transactions peuvent attendre plus longtemps sur les ressources verrouillées', 'L’API distante rejoint automatiquement la transaction SQL', 'La cohérence distribuée est garantie', 'Les index sont supprimés', 'La durée de l’appel externe prolonge la détention des verrous sans fournir une transaction distribuée.'),
                ],
            ],
            [
                'title' => 'Protéger les applications et les API',
                'description' => 'Prévenir les vulnérabilités en validant les autorisations et les sorties serveur.',
                'difficulty' => 'Advanced',
                'questions' => [
                    $this->mc('Une page affiche un commentaire saisi par un visiteur. Quelle mesure évite que le texte soit exécuté comme du code actif ?', 'Encoder la sortie selon le contexte HTML', 'Valider seulement dans le navigateur', 'Stocker le texte en Base64', 'Autoriser toutes les balises sans règle', 'L’encodage contextuel fait afficher les caractères spéciaux comme des données.'),
                    $this->mc('Un utilisateur authentifié change un identifiant dans l’URL et consulte une ressource appartenant à un autre compte. Quel contrôle manque ?', 'L’autorisation côté serveur sur la ressource demandée', 'Le chiffrement TLS uniquement', 'La validation du JSON seulement', 'La limitation de taille de réponse', 'L’authentification identifie l’acteur ; l’autorisation vérifie son droit sur chaque objet.'),
                    $this->mc('Un jeton d’accès est transmis dans une URL et se retrouve dans l’historique et les journaux. Quel risque est créé ?', 'Un tiers peut récupérer et réutiliser le jeton', 'Le jeton est automatiquement haché', 'Toutes les URL sont chiffrées de bout en bout partout', 'Les journaux effacent les secrets automatiquement', 'Les URL se propagent dans l’historique, les logs et parfois les référents ; elles ne conviennent pas aux secrets.'),
                    $this->mc('Un navigateur envoie automatiquement le cookie de session lors d’une action déclenchée par un autre site. Quelle défense aide contre CSRF ?', 'Un jeton anti-CSRF et une politique de cookies adaptée', 'Un échappement HTML seul', 'Un hachage des mots de passe', 'Une requête SQL paramétrée seule', 'CSRF exploite les justificatifs joints automatiquement ; jetons et attributs de cookie limitent ce risque.'),
                    $this->mc('Une base stocke les mots de passe avec un chiffrement réversible. Quelle pratique est préférable ?', 'Un hachage lent spécialisé avec sel unique par mot de passe', 'Un encodage Base64', 'Une clé de chiffrement dans le dépôt', 'Une empreinte rapide identique pour tous', 'Un algorithme dédié ralentit les essais hors ligne et le sel empêche les empreintes identiques pour des mots identiques.'),
                    $this->mc('Une API publique reçoit un grand volume de requêtes répétées. Quelle mesure borne l’abus sans authentifier les appels ?', 'Un rate limiting adapté aux routes et aux clients', 'Rendre tous les endpoints publics', 'Augmenter indéfiniment le pool de connexions', 'Ignorer l’origine et le volume des requêtes', 'Le rate limiting contrôle le débit, mais ne remplace pas l’authentification ni l’autorisation.'),
                    $this->mc('Un utilisateur est authentifié mais ne dispose pas du droit requis. Quelle réponse HTTP convient généralement ?', '403 Forbidden', '201 Created', '304 Not Modified', '101 Switching Protocols', '401 concerne l’authentification manquante ou invalide ; 403 exprime un refus d’accès.'),
                    $this->mc('Une réponse de production révèle une requête SQL et des chemins internes. Quelle pratique est plus sûre ?', 'Retourner un message générique avec identifiant de suivi et journaliser les détails de façon protégée', 'Afficher plus de variables serveur', 'Renvoyer le fichier de configuration', 'Ouvrir les journaux au public', 'La réponse publique ne doit pas divulguer d’informations internes ; les détails restent accessibles aux personnes autorisées.'),
                    $this->mc('Une clé API active est trouvée dans un dépôt public. Quelle action répond au risque immédiat ?', 'Révoquer ou renouveler la clé et vérifier son utilisation', 'Supprimer uniquement le dernier commit et garder la clé', 'Renommer le fichier sans invalider le secret', 'Ajouter la clé aux commentaires', 'Une clé publiée doit être considérée compromise ; l’invalider précède le nettoyage historique.'),
                    $this->mc('Une requête de création accepte un champ role=admin envoyé par le client. Quelle règle doit s’appliquer ?', 'Le serveur doit établir et autoriser lui-même les champs de privilège', 'Le client est toujours la source de vérité', 'Encoder le champ en HTML', 'Journaliser le rôle dans la réponse', 'Les champs de sécurité ne doivent pas être contrôlés par l’utilisateur qui demande la création.'),
                    $this->mc('Une API autorise toute origine avec des cookies d’authentification. Quel risque de configuration faut-il corriger ?', 'Une politique CORS trop permissive combinée aux credentials', 'La compression des réponses', 'La possibilité d’envoyer une requête GET', 'La complexité d’un index SQL', 'Les origines et credentials doivent être restreints et combinés à des protections CSRF pertinentes.'),
                    $this->mc('Les journaux applicatifs conservent des jetons et sont accessibles à de nombreux employés. Quelle mesure est prioritaire ?', 'Masquer les secrets et limiter accès et durée de conservation', 'Augmenter la verbosité publique', 'Copier les journaux dans les réponses API', 'Désactiver la rotation', 'La minimisation et le contrôle d’accès réduisent le risque de fuite à partir des logs.'),
                ],
            ],
            [
                'title' => 'Mesurer et livrer des logiciels fiables',
                'description' => 'Relier profilage, tests, déploiements et observabilité aux incidents de production.',
                'difficulty' => 'Advanced',
                'questions' => [
                    $this->mc('Une API est lente, mais l’équipe ignore si le coût vient de SQL, du réseau ou du calcul. Quelle première démarche produit des preuves ?', 'Profiler ou tracer un scénario représentatif', 'Réécrire entièrement le service', 'Allonger tous les délais', 'Supprimer les journaux', 'Le profilage attribue le temps aux étapes et révèle le goulot avant l’optimisation.'),
                    $this->mc('Un microbenchmark est rapide, mais le service reste lent en charge réelle. Quelle cause peut expliquer l’écart ?', 'Le test ne reproduit pas la contention, le réseau, la base ou la concurrence de production', 'Les benchmarks isolés sont toujours représentatifs', 'La charge réduit forcément la latence', 'La compilation supprime les accès concurrents', 'Les conditions réelles peuvent faire apparaître des coûts absents d’un test isolé.'),
                    $this->mc('Une pipeline teste et compile le code mais laisse un humain déclencher le déploiement. Quelle affirmation est correcte ?', 'L’intégration continue est automatisée ; la mise en production reste une étape distincte', 'CI signifie toujours déploiement automatique', 'CD désigne seulement les tests unitaires', 'Une pipeline ne produit pas de résultat vérifiable', 'CI valide et intègre les changements ; livraison ou déploiement décrivent les étapes de mise à disposition.'),
                    $this->mc('Une version doit être déployée sans interruption visible. Quelle stratégie est adaptée ?', 'Remplacer progressivement les instances et vérifier leur état de santé', 'Arrêter toutes les instances avant de construire la nouvelle', 'Déployer sans contrôles ni retour arrière', 'Supprimer les anciennes instances sans validation', 'Un déploiement progressif maintient la capacité et valide les nouvelles instances avant généralisation.'),
                    $this->mc('Un nouveau schéma de base casse l’ancienne version pendant un déploiement progressif. Quelle méthode réduit ce risque ?', 'Étendre le schéma de façon compatible, migrer les usages puis retirer l’ancien champ', 'Renommer le champ immédiatement', 'Bloquer tout accès à la base', 'Modifier le schéma sans plan', 'Une migration en étapes permet aux anciennes et nouvelles versions de coexister temporairement.'),
                    $this->mc('Une régression apparaît après publication. Quelle capacité réduit le délai de rétablissement ?', 'Un rollback testé avec artefacts versionnés', 'Une réécriture manuelle immédiate', 'La suppression des métriques', 'La désactivation du contrôle de version', 'Une procédure de rollback préparée réduit le temps et le risque d’une restauration improvisée.'),
                    $this->mc('Les journaux de plusieurs services ne permettent pas de relier les étapes d’une même requête. Quel ajout aide ?', 'Un identifiant de corrélation propagé entre les services', 'Un nouvel identifiant aléatoire à chaque ligne', 'Le mot de passe de la requête', 'La suppression des horodatages', 'Un identifiant commun permet de suivre le parcours à travers les composants.'),
                    $this->mc('Un tableau de bord doit alerter l’équipe lorsqu’une dégradation affecte plusieurs utilisateurs. Quel indicateur agrégé est le plus pertinent ?', 'Le taux d’erreur ou la latence mesurés sur une fenêtre', 'Le contenu intégral de chaque requête', 'Les noms de variables locales', 'Le nombre de commentaires modifiés', 'Les métriques agrégées décrivent l’état du service et peuvent déclencher des seuils pertinents.'),
                    $this->mc('Une fonctionnalité lancée conserve son feature flag plusieurs mois. Quel coût apparaît ?', 'Des branches et combinaisons supplémentaires à maintenir jusqu’au retrait du flag', 'La couverture augmente automatiquement', 'Les régressions deviennent impossibles', 'Le déploiement n’est plus requis', 'Les flags facilitent le lancement progressif mais ajoutent une dette s’ils ne sont pas supprimés.'),
                    $this->mc('Le taux de couverture monte, mais une régression métier ne fait pas échouer les tests. Que faut-il améliorer ?', 'La pertinence des scénarios et les assertions qui vérifient les résultats attendus', 'La couleur de l’outil de couverture', 'Le nombre d’espaces', 'La fréquence de commit uniquement', 'La couverture montre quels chemins sont exécutés, pas si le comportement est correctement asserté.'),
                    $this->mc('Un défaut apparaît uniquement lors de deux réservations simultanées. Quel test complète utilement les tests unitaires ?', 'Un scénario d’intégration concurrent qui reproduit les accès simultanés', 'Un test de formatage', 'La suppression des assertions unitaires', 'Un changement du nom du dépôt', 'Les tests de concurrence vérifient les interactions qui ne sont pas visibles dans un appel isolé.'),
                    $this->mc('Une équipe veut savoir si un déploiement a empiré l’expérience utilisateur. Quelle comparaison est utile ?', 'Comparer les indicateurs de latence et d’erreur avant et après sur les mêmes fenêtres', 'Comparer le nombre de fichiers du dépôt', 'Supprimer les événements de la nouvelle version', 'Examiner uniquement le temps de compilation', 'Une comparaison temporelle cohérente permet de relier un changement aux résultats opérationnels.'),
                ],
            ],
        ];

        Quiz::where('subject_id', $subject->id)
            ->whereIn('title', [
                'Algorithmes avancés et optimisation',
                'Structures de données avancées',
                'Programmation orientée objet avancée',
                'Design Patterns',
                'Architecture logicielle',
                'Bases de données avancées',
                'API, sécurité et développement Web',
                'Tests, performance et qualité logicielle',
            ])
            ->update(['is_active' => false]);
        foreach ($quizzes as $quizData) {
            $questionCount = count($quizData['questions']);
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => max(15, (int) ceil($questionCount * 1.6)),
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

