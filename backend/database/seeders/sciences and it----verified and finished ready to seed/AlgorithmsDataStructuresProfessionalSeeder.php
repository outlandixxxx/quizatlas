<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AlgorithmsDataStructuresProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algorithms-data-structures')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Analyse algorithmique avancée et optimisation',
                'description' => 'Résolution de récurrences et analyse de coûts dans des algorithmes récursifs.',
                'questions' => [
                    $this->q('Un algorithme divise un problème en trois sous-problèmes de taille n/2 et fusionne leurs résultats en Θ(n). Quelle est sa complexité ?', ['Θ(n log n)', 'Θ(n^log₂3)', 'Θ(n²)', 'Θ(log n)'], 1, 'Le coût des sous-problèmes domine le coût linéaire de fusion : le cas 1 du théorème maître donne Θ(n^log₂3).'),
                    $this->q('La récurrence T(n) = 2T(n/2) + Θ(n²) décrit une division en deux sous-problèmes et une fusion quadratique. Quel terme domine ?', ['Le travail de fusion à la racine', 'La profondeur logarithmique seule', 'Les feuilles, pour un coût total Θ(n)', 'Les deux sous-problèmes donnent Θ(n log n)'], 0, 'À chaque niveau, le coût total décroît géométriquement depuis Θ(n²) à la racine. La somme reste Θ(n²).'),
                    $this->q('Une procédure effectue un appel sur une entrée de taille n−1 et un travail constant. Quelle récurrence et quelle complexité conviennent ?', ['T(n)=T(n−1)+Θ(1), donc Θ(n)', 'T(n)=2T(n/2)+Θ(1), donc Θ(log n)', 'T(n)=T(n−1)+Θ(n), donc Θ(log n)', 'T(n)=T(n/2)+Θ(n), donc Θ(n²)'], 0, 'Chaque appel réduit la taille d’une unité. Il y a Θ(n) appels, chacun ajoutant un coût constant.'),
                    $this->q('Pour T(n)=2T(n/2)+Θ(n), quelle interprétation de l’arbre de récursion conduit au résultat ?', ['Chaque niveau coûte Θ(n) et il y a Θ(log n) niveaux', 'Le coût double à chaque niveau, sur n niveaux', 'Seule la racine coûte Θ(n)', 'Le coût des feuilles est Θ(n²)'], 0, 'À chaque niveau, le nombre de sous-problèmes augmente tandis que leur taille diminue, pour un coût total Θ(n) par niveau sur Θ(log n) niveaux.'),
                    $this->q('Une boucle extérieure effectue les tailles 1, 2, 4, …, n. À chaque étape de taille k, une boucle intérieure traite k éléments. Quel est le coût total ?', ['Θ(n)', 'Θ(log n)', 'Θ(n log n)', 'Θ(n²)'], 0, 'La somme 1+2+4+…+n est géométrique et vaut Θ(n), même si la boucle extérieure comporte Θ(log n) étapes.'),
                    $this->q('Un algorithme effectue n opérations de coût log n chacune, puis un tri en Θ(n log n). Quelle est sa complexité totale ?', ['Θ(n)', 'Θ(n log n)', 'Θ(n log² n)', 'Θ(n²)'], 1, 'Les deux parties coûtent Θ(n log n). Leur somme reste du même ordre.'),
                    $this->q('Quelle affirmation distingue correctement une borne O d’une borne Θ ?', ['O donne une borne supérieure asymptotique; Θ donne une borne supérieure et inférieure du même ordre', 'O est toujours le coût exact; Θ est seulement une borne inférieure', 'Θ ne s’applique qu’à la mémoire', 'O et Θ sont interchangeables dans tous les contextes'], 0, 'O exprime une borne supérieure asymptotique. Θ exprime une croissance encadrée par des bornes supérieure et inférieure de même ordre.'),
                    $this->q('On sait seulement qu’un algorithme prend O(n²) opérations. Peut-on conclure qu’il prend Θ(n²) ?', ['Oui, toute borne O est exacte', 'Non, il pourrait aussi prendre Θ(n)', 'Oui, si n est grand', 'Non, une complexité Θ ne peut jamais être donnée'], 1, 'Une borne supérieure O(n²) autorise un coût inférieur, par exemple Θ(n). Il faut une borne inférieure correspondante pour conclure Θ(n²).'),
                    $this->q('Une méthode de hachage donne un temps espéré Θ(1) par recherche, mais un pire cas Θ(n). Quelle phrase est rigoureuse ?', ['La recherche est toujours Θ(1)', 'Le temps espéré est Θ(1), mais le pire cas reste Θ(n)', 'Le temps amorti est nécessairement Θ(1)', 'Le pire cas est Θ(log n)'], 1, 'Le coût espéré dépend du modèle probabiliste; il ne supprime pas le pire cas déterministe.'),
                    $this->q('Un algorithme a un coût Θ(n log n) au meilleur cas et Θ(n²) au pire cas. Quel énoncé décrit correctement son coût sans préciser le cas ?', ['Θ(n log n) dans toutes les exécutions', 'Θ(n²) dans toutes les exécutions', 'Il faut préciser le cas analysé; le pire cas est Θ(n²)', 'La complexité est Θ(n log² n)'], 2, 'Les analyses meilleur et pire cas diffèrent. Sans hypothèse sur les entrées, on ne peut pas annoncer une seule de ces bornes comme coût de toutes les exécutions.'),
                ],
            ],
            [
                'title' => 'Structures de données avancées',
                'description' => 'Coûts de séquences d’opérations, potentiel et redimensionnement dynamique.',
                'questions' => [
                    $this->q('Un tableau dynamique double sa capacité lorsqu’il est plein. Pour une séquence de n ajouts, quel coût total de copies est obtenu ?', ['Θ(log n)', 'Θ(n)', 'Θ(n log n)', 'Θ(n²)'], 1, 'Les copies ont des tailles 1, 2, 4, …; leur somme est inférieure à 2n, donc Θ(n).'),
                    $this->q('Dans un tableau dynamique à croissance géométrique, quel coût amorti par ajout découle du résultat précédent ?', ['Θ(1)', 'Θ(log n)', 'Θ(n)', 'Θ(n log n)'], 0, 'Le coût total d’une séquence de n ajouts est Θ(n); ramené aux n ajouts, le coût amorti est Θ(1).'),
                    $this->q('Une pile initialement vide autorise PUSH et POP-MULTIPLE(k), qui retire jusqu’à k éléments. Sur une séquence de m opérations, quelle borne amortie par opération est garantie ?', ['O(m)', 'O(log m)', 'O(1)', 'O(k) pour toute la séquence'], 2, 'Chaque élément ne peut être retiré qu’après avoir été ajouté. Le nombre total de retraits sur la séquence est donc borné par le nombre d’ajouts.'),
                    $this->q('Quelle fonction de potentiel convient à une pile pour analyser PUSH et POP-MULTIPLE ?', ['Le nombre d’éléments présents dans la pile', 'La capacité maximale théorique de la mémoire', 'Le nombre d’opérations futures encore inconnues', 'La somme des valeurs stockées dans la pile'], 0, 'Le nombre d’éléments mesure le crédit accumulé : PUSH l’augmente et les retraits le consomment.'),
                    $this->q('Un compteur binaire est incrémenté n fois. En comptant chaque changement de bit, combien de changements se produisent au total ?', ['Θ(log n)', 'Θ(n)', 'Θ(n log n)', 'Θ(n²)'], 1, 'Le bit de poids faible change à chaque incrément; les bits suivants changent de moins en moins souvent. La somme est Θ(n).'),
                    $this->q('Quelle distinction est correcte entre coût amorti et coût moyen probabiliste ?', ['Le coût amorti borne une séquence déterministe; le coût moyen dépend d’une distribution de probabilité', 'Le coût amorti exige un tirage aléatoire', 'Le coût moyen est toujours pire que le pire cas', 'Les deux termes désignent uniquement le coût d’une opération isolée'], 0, 'L’analyse amortie répartit le coût sur une séquence sans hypothèse probabiliste sur les entrées.'),
                    $this->q('Dans la méthode comptable, les crédits accumulés sur des opérations peu coûteuses servent à quoi ?', ['Payer des opérations futures plus coûteuses', 'Réduire le nombre d’éléments de la structure', 'Remplacer la preuve du pire cas', 'Calculer une probabilité de succès'], 0, 'La méthode comptable attribue un coût amorti et conserve un crédit pour financer les opérations coûteuses ultérieures.'),
                    $this->q('Un algorithme utilise un tableau qui double sa capacité, mais copie tous les éléments lors de chaque agrandissement. Quelle modification ferait perdre la garantie habituelle Θ(1) amorti pour append ?', ['Agrandir la capacité d’une constante fixe à chaque saturation', 'Doubler la capacité à chaque saturation', 'Commencer avec une capacité positive', 'Copier les éléments dans le nouvel espace'], 0, 'Une hausse fixe peut provoquer Θ(n) agrandissements et une somme de copies quadratique.'),
                    $this->q('Une opération coûte Θ(n) une fois toutes les n opérations, et Θ(1) autrement. Quelle affirmation décrit la séquence ?', ['Le coût amorti peut être Θ(1) par opération', 'Chaque opération coûte Θ(n) au pire', 'Le coût amorti est Θ(n²)', 'Le coût moyen exige une distribution uniforme'], 0, 'Sur n opérations, le coût exceptionnel Θ(n) et les coûts constants des autres opérations donnent un coût total Θ(n).'),
                    $this->q('Quelle condition doit respecter une fonction de potentiel dans une preuve amortie classique ?', ['Le potentiel reste généralement non négatif et représente le crédit stocké', 'Elle doit être égale au temps réel de chaque opération', 'Elle doit dépendre d’un générateur aléatoire', 'Elle doit diminuer à chaque opération'], 0, 'La borne amortie utilise la variation du potentiel; un potentiel non négatif permet de borner le coût total par les coûts amortis.'),
                ],
            ],
            [
                'title' => 'Graph Algorithms professionnels',
                'description' => 'Choix et analyse d’algorithmes de chemins, de connexité et de flot.',
                'questions' => [
                    $this->q('Un graphe pondéré contient des arêtes négatives mais aucun cycle négatif accessible. Quel algorithme à source unique convient ?', ['Dijkstra', 'Bellman-Ford', 'Prim', 'BFS'], 1, 'Bellman-Ford accepte les poids négatifs et peut aussi détecter un cycle négatif accessible.'),
                    $this->q('Un graphe est acyclique et ses arêtes peuvent avoir des poids négatifs. Quelle méthode calcule les plus courts chemins depuis une source en O(V+E) ?', ['Relâcher les arêtes dans un ordre topologique', 'Appliquer Dijkstra avec un tas binaire', 'Lancer BFS sur les sommets', 'Trier les poids puis appliquer Kruskal'], 0, 'Dans un DAG, l’ordre topologique permet de traiter chaque sommet et chaque arête une seule fois, même avec des poids négatifs.'),
                    $this->q('Après Floyd-Warshall, une valeur diagonale dist[i][i] est négative. Que révèle-t-elle ?', ['Un cycle négatif accessible depuis i', 'Un arbre couvrant minimal', 'Une composante fortement connexe isolée', 'Une erreur obligatoire dans l’initialisation'], 0, 'Une distance de i vers lui-même inférieure à zéro indique un cycle de poids négatif qui revient à i.'),
                    $this->q('Pour un graphe clairsemé, Dijkstra utilise une liste d’adjacence et un tas binaire. Quelle borne classique convient ?', ['O(V²)', 'O((V+E) log V)', 'O(VE²)', 'O(E log E + V²)'], 1, 'Avec un tas binaire, les extractions et mises à jour prioritaires donnent la borne O((V+E) log V).'),
                    $this->q('Pour un graphe non dirigé connexe avec E arêtes, quelle phase domine généralement Kruskal ?', ['Le tri des arêtes, en O(E log E)', 'Une recherche exhaustive de tous les arbres, en O(2^E)', 'Une recherche binaire sur les sommets, en O(log V)', 'Le tri topologique, en O(V+E)'], 0, 'Kruskal trie les arêtes puis effectue les opérations Union-Find; le tri domine généralement.'),
                    $this->q('Un graphe dirigé comporte V sommets et E arêtes. Quelle complexité garantit Tarjan pour ses composantes fortement connexes ?', ['O(V+E)', 'O(V²)', 'O(E log V)', 'O(VE)'], 0, 'Tarjan effectue un parcours en profondeur avec un travail constant par sommet et par arête.'),
                    $this->q('Dans Edmonds-Karp, quel choix est fait pour le chemin augmentant dans le graphe résiduel ?', ['Un chemin avec le moins d’arêtes, trouvé par BFS', 'Le chemin de poids total minimal, trouvé par Dijkstra', 'Un chemin choisi parmi les arbres couvrants', 'Le chemin ayant le plus grand nombre de sommets'], 0, 'Edmonds-Karp choisit un chemin augmentant de longueur minimale en nombre d’arêtes à l’aide de BFS.'),
                    $this->q('Une implémentation de flot maximal met à jour les capacités résiduelles dans les deux sens. À quoi servent les arêtes résiduelles inverses ?', ['Annuler ou réorienter une partie d’un flot déjà envoyé', 'Garantir que toutes les capacités deviennent nulles', 'Trier les chemins augmentants', 'Détecter les cycles négatifs de poids'], 0, 'Une arête inverse représente la possibilité de revenir sur un choix de flot antérieur lors d’une augmentation ultérieure.'),
                    $this->q('Pour un graphe clairsemé, pourquoi une liste d’adjacence est-elle généralement préférable à une matrice pour un parcours ?', ['Elle stocke les arêtes existantes en O(V+E)', 'Elle garantit une recherche d’arête en O(1) sans coût mémoire', 'Elle trie automatiquement les voisins', 'Elle permet des poids négatifs sans vérification'], 0, 'La liste d’adjacence occupe O(V+E), alors qu’une matrice occupe O(V²), ce qui est avantageux lorsque E est bien inférieur à V².'),
                    $this->q('Une application demande les distances entre toutes les paires de sommets pour V modéré et un graphe dense. Quel choix est approprié ?', ['Floyd-Warshall en O(V³)', 'BFS depuis une seule source en O(V+E)', 'Kruskal en O(E log E)', 'Tarjan en O(V+E)'], 0, 'Floyd-Warshall calcule toutes les distances par paires; il est souvent adapté à des graphes denses de taille modérée.'),
                ],
            ],
            [
                'title' => 'Dynamic Programming avancée',
                'description' => 'Définition d’états, transitions, reconstruction et optimisation de mémoire.',
                'questions' => [
                    $this->q('Dans une DP de sac à dos 0/1, les capacités sont parcourues en ordre décroissant. Pourquoi ?', ['Pour éviter de réutiliser plusieurs fois le même objet dans une même itération', 'Pour trier les objets par poids', 'Pour garantir une solution gloutonne', 'Pour réduire le nombre d’objets à zéro'], 0, 'L’ordre décroissant empêche une valeur mise à jour avec l’objet courant de servir à nouveau pendant cette même itération.'),
                    $this->q('Une DP de sac à dos non borné doit autoriser plusieurs copies d’un objet. Quel sens de parcours de capacité est généralement utilisé ?', ['Croissant', 'Décroissant', 'Aléatoire', 'Aucun ordre ne convient'], 0, 'Le parcours croissant permet de réutiliser une valeur mise à jour avec l’objet courant, ce qui représente les copies illimitées.'),
                    $this->q('Une DP d’édition de deux chaînes de longueurs n et m ne doit renvoyer que la distance, sans reconstruire les opérations. Quelle optimisation mémoire est possible ?', ['Garder seulement la ligne précédente et la ligne courante', 'Conserver uniquement la diagonale principale', 'Remplacer la table par un tas', 'Supprimer les états de la dernière ligne'], 0, 'Chaque cellule dépend d’un petit voisinage immédiat; deux lignes suffisent pour calculer la distance finale.'),
                    $this->q('Une DP de sous-séquence croissante maintient tails[k], la plus petite terminaison d’une sous-séquence de longueur k+1. Que représente tails à la fin ?', ['Les longueurs sont exactes, mais ses valeurs ne forment pas nécessairement la sous-séquence recherchée', 'La sous-séquence optimale complète dans tous les cas', 'Les éléments triés de l’entrée', 'Les seules valeurs qui apparaissent une fois'], 0, 'La méthode donne la longueur optimale; pour reconstruire une sous-séquence, il faut aussi conserver des prédécesseurs.'),
                    $this->q('Une DP sur sous-ensembles utilise un masque de n bits et parcourt chaque sommet suivant. Quelle complexité temporelle typique obtient-on ?', ['O(n·2^n)', 'O(n²)', 'O(2n)', 'O(n log n)'], 0, 'Il existe 2^n masques et jusqu’à n transitions par masque.'),
                    $this->q('La transition d’un état DP dépend uniquement des états du niveau précédent. Quelle technique réduit l’espace de O(nm) à O(m) ?', ['Tableau glissant de deux lignes', 'Mémoïsation de toutes les branches', 'Tri des états par valeur', 'Arbre de segments'], 0, 'Il suffit de conserver le niveau précédent et celui en cours, car les niveaux plus anciens ne seront plus consultés.'),
                    $this->q('Un problème possède des états cycliques et des dépendances mutuelles. Pourquoi un simple ordre topologique de DP ne suffit-il pas directement ?', ['Un ordre topologique n’existe que pour un graphe d’états acyclique', 'La DP exige toujours une récursion', 'Les cycles rendent toute mémorisation impossible', 'Un graphe cyclique ne peut contenir aucun état final'], 0, 'La tabulation topologique suppose un graphe de dépendances acyclique; un cycle exige une autre formulation ou un traitement spécifique.'),
                    $this->q('Pour reconstruire un chemin optimal après une DP de plus courts chemins dans un DAG, quelle information faut-il généralement conserver ?', ['Le prédécesseur choisi pour chaque sommet', 'Seulement le nombre total de sommets', 'La capacité du plus grand tableau', 'Le degré entrant initial uniquement'], 0, 'Les prédécesseurs permettent de remonter depuis la destination jusqu’à la source en suivant les décisions optimales.'),
                    $this->q('Une DP a n états; chaque état examine les n états précédents. Quel changement de conception peut réduire le coût si les coûts de transition ont une structure monotone prouvée ?', ['Employer une optimisation spécialisée de transition, après vérification de ses hypothèses', 'Remplacer toutes les valeurs par zéro', 'Mémoriser uniquement le dernier état', 'Passer automatiquement à un algorithme glouton'], 0, 'Certaines propriétés, comme la monotonie ou la structure Monge, permettent des optimisations, mais seulement si leurs conditions sont démontrées.'),
                    $this->q('Dans une DP de chaîne, l’état dp[i][j] représente la meilleure solution pour les préfixes de longueurs i et j. Quelle précaution est essentielle pour une transition valide ?', ['Définir précisément les cas de base et les indices correspondant aux préfixes vides', 'Initialiser toutes les cases à la longueur maximale', 'Ignorer les préfixes de longueur zéro', 'Trier les deux chaînes avant le calcul'], 0, 'Les cas de base définissent les sous-problèmes vides et empêchent des accès ou résultats incorrects aux bords de la table.'),
                ],
            ],
            [
                'title' => 'String Algorithms professionnels',
                'description' => 'Recherche de motifs, structures de suffixes, hachage roulant et recherche multiple.',
                'questions' => [
                    $this->q('KMP cherche un motif de longueur m dans un texte de longueur n. Quelle borne inclut la précomputation de sa table LPS ?', ['O(n+m)', 'O(nm)', 'O(n log m)', 'O(m²+n)'], 0, 'La table LPS se construit en O(m) et le parcours du texte en O(n).'),
                    $this->q('Dans KMP, après une correspondance partielle suivie d’un échec, que permet la table LPS ?', ['Reprendre au plus long préfixe déjà compatible sans revenir en arrière dans le texte', 'Trier le motif avant la recherche', 'Ignorer tous les caractères suivants', 'Calculer une distance d’édition'], 0, 'LPS indique le préfixe qui peut encore correspondre après l’échec, évitant de retester les caractères déjà validés.'),
                    $this->q('Rabin-Karp compare les hashes du motif et d’une fenêtre du texte. Que faut-il faire lorsque les hashes sont égaux ?', ['Comparer les caractères pour confirmer la correspondance', 'Accepter la correspondance sans vérification', 'Recalculer le hash avec un autre alphabet', 'Supprimer la fenêtre du texte'], 0, 'Une collision de hash est possible; la comparaison exacte évite d’annoncer une fausse occurrence.'),
                    $this->q('On recherche simultanément un grand ensemble de motifs dans un texte. Quelle structure et quel mécanisme sont au cœur d’Aho-Corasick ?', ['Trie avec liens d’échec', 'Arbre AVL avec rotations', 'Table de hachage sans liens', 'Tas binaire avec priorité'], 0, 'Le trie partage les préfixes des motifs et les liens d’échec permettent de poursuivre la recherche après une divergence.'),
                    $this->q('Dans un algorithme Z, que représente Z[i] pour une chaîne s ?', ['La longueur du plus long préfixe de s qui commence aussi à la position i', 'Le nombre de caractères distincts après i', 'La distance d’édition entre s et son suffixe', 'La longueur du plus long palindrome centré en i'], 0, 'La fonction Z compare le suffixe commençant en i avec le préfixe de la chaîne.'),
                    $this->q('Un suffix array trie tous les suffixes d’une chaîne. Quelle information LCP fournit-elle entre suffixes voisins dans cet ordre ?', ['La longueur de leur plus long préfixe commun', 'La distance entre leurs positions de départ', 'Le nombre de caractères uniques du texte', 'La longueur du plus court palindrome'], 0, 'LCP signifie plus long préfixe commun et complète le suffix array pour les recherches de sous-chaînes.'),
                    $this->q('Quel algorithme calcule en temps linéaire le plus long palindrome centré autour de chaque position d’une chaîne ?', ['Manacher', 'Kruskal', 'KMP uniquement', 'Floyd-Warshall'], 0, 'Manacher maintient un palindrome connu et exploite sa symétrie pour obtenir un temps linéaire.'),
                    $this->q('Une recherche naïve compare un motif de longueur m à chaque position d’un texte de longueur n. Quelle borne de pire cas est possible ?', ['O(nm)', 'O(n+m)', 'O(log n)', 'O(m log n)'], 0, 'À chacune des O(n) positions, jusqu’à m caractères peuvent être comparés.'),
                    $this->q('Pourquoi un suffix automaton est-il utile pour compter les sous-chaînes distinctes d’une chaîne ?', ['Il représente toutes les sous-chaînes comme chemins dans un automate compact', 'Il stocke chaque sous-chaîne séparément dans un tableau', 'Il trie les caractères sans conserver leurs positions', 'Il supprime les suffixes répétés du texte'], 0, 'Les états et transitions du suffix automaton regroupent de nombreuses sous-chaînes et permettent un comptage efficace.'),
                    $this->q('Un hash roulant utilise une fenêtre de longueur m. Quel avantage apporte la mise à jour roulante ?', ['Calculer le hash suivant sans recalculer les m caractères', 'Garantir l’absence de collisions', 'Trier les fenêtres par ordre lexicographique', 'Remplacer toute vérification des caractères'], 0, 'La mise à jour retire la contribution de l’ancien caractère et ajoute celle du nouveau en temps constant, sous le schéma adapté.'),
                ],
            ],
            [
                'title' => 'Range Queries et structures avancées',
                'description' => 'Choix de structures pour les mises à jour, requêtes d’intervalles et versions historiques.',
                'questions' => [
                    $this->q('Une application effectue des sommes d’intervalle et des mises à jour ponctuelles fréquentes. Quelle structure offre généralement O(log n) pour les deux ?', ['Segment tree', 'Sparse table statique', 'Trie', 'Pile monotone uniquement'], 0, 'Un segment tree permet de mettre à jour un chemin racine-feuille et de combiner les segments d’une requête en O(log n).'),
                    $this->q('Une mise à jour ajoute x à chaque valeur d’un intervalle [l,r] et les requêtes demandent des sommes. Que stocke lazy propagation sur un nœud couvrant L éléments ?', ['La mise à jour différée x et une somme augmentée de x·L', 'Seulement le nouvel élément en position l', 'La somme inchangée jusqu’à la feuille', 'La valeur minimale de tout le tableau'], 0, 'Ajouter x à chacun des L éléments augmente la somme du segment de x·L; l’étiquette permet de différer la propagation.'),
                    $this->q('Une structure doit répondre à des minimums d’intervalles sur un tableau statique, sans mises à jour. Quel choix permet souvent O(1) par requête après prétraitement ?', ['Sparse table', 'Fenwick tree avec mises à jour', 'Pile de récursion', 'Union-Find'], 0, 'Pour une opération idempotente comme le minimum, deux blocs prétraités peuvent couvrir la requête en O(1).'),
                    $this->q('Pourquoi la même méthode de deux blocs chevauchants n’est-elle pas directement valide pour une somme d’intervalle ?', ['Les éléments chevauchants seraient comptés deux fois', 'La somme n’est pas associative', 'Une table clairsemée ne stocke que des valeurs négatives', 'Les intervalles de somme sont toujours vides'], 0, 'Le minimum est idempotent sur les doublons, mais l’addition ne l’est pas; le chevauchement double-compterait des éléments.'),
                    $this->q('Une requête demande les sommes préfixes et les mises à jour ponctuelles sont additives. Quelle structure est la plus simple et compacte ?', ['Fenwick tree', 'Suffix tree', 'Sparse table sans modification', 'Tas Fibonacci'], 0, 'Un Fenwick tree prend O(log n) pour une mise à jour ponctuelle et une somme préfixe.'),
                    $this->q('Une requête demande la somme sur [l,r] avec un Fenwick tree de sommes préfixes. Quelle formule convient ?', ['prefix(r) − prefix(l−1)', 'prefix(r) + prefix(l)', 'prefix(l) − prefix(r)', 'prefix(r−l)'], 0, 'La différence des deux sommes préfixes retire la partie située avant l.'),
                    $this->q('Une application doit interroger d’anciennes versions d’un tableau après chaque mise à jour ponctuelle. Quelle idée caractérise un segment tree persistant ?', ['Créer de nouveaux nœuds sur le chemin modifié et partager les autres', 'Copier intégralement le tableau à chaque requête', 'Supprimer les anciennes racines', 'Recalculer toutes les versions depuis zéro'], 0, 'La persistance conserve les racines précédentes et ne copie que le chemin affecté, en partageant les sous-arbres inchangés.'),
                    $this->q('Les valeurs d’entrée sont très grandes mais seules leur comparaison et leur ordre comptent. À quoi sert la compression de coordonnées ?', ['Remplacer les valeurs par des rangs compacts en préservant l’ordre', 'Arrondir les valeurs à zéro', 'Mélanger les valeurs pour réduire les collisions', 'Convertir le tableau en graphe non dirigé'], 0, 'La compression remplace chaque valeur distincte par son rang, ce qui réduit l’univers sans modifier l’ordre relatif.'),
                    $this->q('Un tableau change rarement, mais chaque requête demande un minimum sur un intervalle. Pourquoi un segment tree peut-il être moins adapté qu’une Sparse Table ?', ['Il nécessite davantage de travail par requête alors qu’aucune mise à jour n’est requise', 'Il ne peut pas calculer de minimum', 'Il exige des valeurs triées', 'Il ne fonctionne qu’avec des intervalles de puissance de deux'], 0, 'La Sparse Table exploite le caractère statique et répond souvent en O(1); le segment tree répond classiquement en O(log n).'),
                    $this->q('Une mise à jour d’intervalle est appliquée à un nœud mais pas encore à ses enfants. Quand faut-il propager son étiquette différée ?', ['Avant de descendre dans les enfants pour une opération qui en dépend', 'Après la suppression de la racine seulement', 'À chaque accès mémoire du programme', 'Jamais, même si une requête descend dans le segment'], 0, 'La propagation est nécessaire avant de traiter des sous-segments, afin que leurs valeurs restent cohérentes.'),
                ],
            ],
            [
                'title' => 'Amortized Analysis et Randomized Algorithms',
                'description' => 'Analyse des garanties, échantillonnage et résistance aux entrées adversariales.',
                'questions' => [
                    $this->q('Un algorithme Las Vegas renvoie toujours une réponse correcte, mais son temps varie selon les tirages. Quelle propriété est aléatoire ?', ['Le temps d’exécution', 'La validité de la réponse', 'La définition de l’entrée', 'Le nombre de solutions possibles'], 0, 'Un algorithme Las Vegas garantit la correction; l’aléa influe sur son temps d’exécution.'),
                    $this->q('Un algorithme Monte Carlo termine dans une durée bornée, mais peut rarement se tromper. Que doit-on préciser ?', ['La probabilité et le sens de l’erreur', 'Seulement sa consommation mémoire moyenne', 'Le nombre d’éléments triés', 'Le degré maximal du graphe'], 0, 'La garantie d’un algorithme Monte Carlo comprend une borne sur la probabilité d’erreur, parfois unilatérale.'),
                    $this->q('Pour Quick Sort avec pivot choisi uniformément au hasard, quelle complexité temporelle est espérée ?', ['O(n log n)', 'O(n²) dans toute exécution', 'O(log n)', 'O(n) dans toute exécution'], 0, 'Le pivot aléatoire donne une profondeur moyenne logarithmique et un travail attendu O(n log n), même si un mauvais tirage reste possible.'),
                    $this->q('Un adversaire connaît les données mais pas les tirages indépendants utilisés par un algorithme randomisé. Quel bénéfice peut en résulter ?', ['Il devient plus difficile de construire systématiquement une entrée défavorable', 'La correction est garantie sans preuve', 'La complexité devient toujours O(n)', 'Les données n’ont plus besoin d’être validées'], 0, 'L’aléa secret ou indépendant de l’entrée peut réduire la capacité d’un adversaire à prévoir les décisions internes.'),
                    $this->q('Un flux contient N éléments et la mémoire ne peut en garder que k. Quelle méthode fournit un échantillon uniforme de taille k en un seul passage ?', ['Reservoir sampling', 'Tri complet du flux', 'Recherche binaire', 'DFS'], 0, 'Reservoir sampling maintient un échantillon uniforme sans connaître N à l’avance et sans stocker tout le flux.'),
                    $this->q('Dans Miller–Rabin, un témoin détecte qu’un nombre impair composé est composé. Quel type d’erreur subsiste après plusieurs tours indépendants ?', ['Un composé peut être déclaré probablement premier', 'Un nombre premier peut être déclaré composé', 'Les deux erreurs sont certaines', 'Aucune réponse probabiliste n’est produite'], 0, 'Le test standard a une erreur unilatérale : un nombre premier passe, tandis qu’un composé peut exceptionnellement passer comme probablement premier.'),
                    $this->q('Une famille de fonctions de hachage universelle est choisie au hasard. Quel objectif vise cette propriété ?', ['Limiter le nombre attendu de collisions pour une paire de clés distinctes', 'Garantir zéro collision pour toutes les clés', 'Trier les clés en temps linéaire', 'Éviter le besoin de gérer les collisions'], 0, 'L’universalité borne la probabilité que deux clés distinctes entrent en collision sous un choix aléatoire de fonction.'),
                    $this->q('Pour estimer une quantité par simulation, l’erreur-type empirique diminue approximativement comme quoi lorsque le nombre d’échantillons indépendants passe de m à 4m ?', ['Elle est divisée par 2', 'Elle est multipliée par 4', 'Elle ne change jamais', 'Elle est divisée par 4 au carré'], 0, 'L’erreur-type décroît comme 1/√m; multiplier le nombre d’échantillons par quatre la divise par deux.'),
                    $this->q('Un protocole probabiliste accepte avec forte probabilité les instances positives et rejette toujours les instances négatives. De quel type de garantie s’agit-il ?', ['Erreur unilatérale', 'Erreur bilatérale obligatoire', 'Garantie déterministe parfaite', 'Complexité amortie'], 0, 'L’algorithme peut se tromper dans un seul sens : c’est une erreur unilatérale.'),
                    $this->q('Pourquoi répéter un test Monte Carlo indépendant peut-il réduire son risque d’erreur ?', ['Les probabilités d’échec se combinent et diminuent avec une règle de décision appropriée', 'Les mêmes tirages sont automatiquement annulés', 'Chaque répétition augmente nécessairement l’erreur', 'La répétition transforme l’algorithme en Las Vegas'], 0, 'Des répétitions indépendantes suivies d’un vote ou d’une règle adaptée peuvent réduire exponentiellement la probabilité d’erreur.'),
                ],
            ],
            [
                'title' => 'Algorithm Design et résolution de problèmes',
                'description' => 'Analyse de difficultés, réductions polynomiales et choix de méthodes exactes ou approchées.',
                'questions' => [
                    $this->q('Pour montrer qu’un nouveau problème B est NP-difficile, quel sens de réduction utilise-t-on depuis un problème A déjà NP-difficile ?', ['A ≤p B', 'B ≤p A', 'A = B uniquement', 'A ∩ B = ∅'], 0, 'Si chaque instance de A se transforme polynomialement en instance de B, un solveur polynomial pour B résoudrait A.'),
                    $this->q('Quelle condition supplémentaire rend un problème NP-complet plutôt que simplement NP-difficile ?', ['Il appartient aussi à NP', 'Il n’a aucune solution', 'Il est résolu par un algorithme glouton', 'Il possède une entrée de taille constante'], 0, 'Un problème NP-complet est à la fois dans NP et NP-difficile.'),
                    $this->q('Le sac à dos 0/1 se résout en O(nW) par programmation dynamique. Pourquoi cette complexité n’est-elle pas polynomiale en taille binaire de l’entrée ?', ['W peut être exponentiel par rapport au nombre de bits nécessaires pour l’écrire', 'n est toujours exponentiel', 'La table ne dépend pas de W', 'L’entrée contient obligatoirement toutes les solutions'], 0, 'O(nW) est pseudo-polynomial : la valeur numérique W peut être beaucoup plus grande que la longueur de sa représentation binaire.'),
                    $this->q('Pour un problème de minimisation, un algorithme d’approximation de facteur ρ garantit quoi ?', ['Sa solution a un coût au plus ρ fois l’optimum', 'Sa solution vaut exactement l’optimum avec probabilité ρ', 'Il utilise au plus ρ unités de mémoire', 'Il termine toujours en O(ρ)'], 0, 'Pour une minimisation, la garantie usuelle est coût(solution) ≤ ρ·OPT, avec ρ ≥ 1.'),
                    $this->q('Un schéma PTAS est proposé pour un problème d’optimisation. Quel compromis caractérise généralement ce schéma ?', ['Pour tout ε fixe, une approximation 1+ε avec un temps polynomial en la taille de l’entrée', 'Une solution exacte en temps constant', 'Une approximation fixe indépendante de ε', 'Un temps polynomial conjointement en l’entrée et 1/ε dans tous les cas'], 0, 'Un PTAS permet de choisir une précision constante ε; le temps est polynomial en l’entrée pour chaque ε fixé, mais peut dépendre fortement de 1/ε.'),
                    $this->q('Dans Branch and Bound pour une maximisation, une borne supérieure d’un sous-problème est inférieure ou égale à la meilleure solution déjà trouvée. Que peut-on faire ?', ['Élaguer ce sous-problème sans perdre l’optimalité', 'Le déclarer automatiquement optimal', 'Le convertir en problème de flot', 'Redémarrer la recherche sans borne'], 0, 'Aucune solution de cette branche ne peut dépasser l’incumbent; l’explorer ne peut donc améliorer la solution actuelle.'),
                    $this->q('Quelle différence caractérise principalement Backtracking et Branch and Bound ?', ['Branch and Bound utilise des bornes pour éliminer les branches qui ne peuvent améliorer l’optimum', 'Backtracking exige toujours un graphe pondéré', 'Branch and Bound ne cherche jamais de solution exacte', 'Backtracking utilise obligatoirement une heuristique aléatoire'], 0, 'Les deux explorent un espace de choix, mais Branch and Bound s’appuie sur des bornes d’objectif pour couper les branches non compétitives.'),
                    $this->q('Un problème est FPT par paramètre k si son temps est borné par quelle forme ?', ['f(k)·n^c, où c est indépendant de k', 'n^k pour toute constante k', '2^n·f(k)', 'k·n^k uniquement'], 0, 'La définition FPT sépare la dépendance arbitraire au paramètre dans f(k) et une puissance fixe de la taille n.'),
                    $this->q('Un certificat d’une réponse « oui » à une instance NP est fourni. Quelle propriété doit avoir le vérificateur ?', ['Vérifier le certificat en temps polynomial en la taille de l’instance', 'Trouver une solution optimale en temps constant', 'Énumérer tous les certificats possibles', 'Vérifier seulement les instances de taille paire'], 0, 'NP caractérise les problèmes dont les certificats oui peuvent être vérifiés en temps polynomial.'),
                    $this->q('Un problème d’optimisation exact est trop coûteux, mais une garantie de qualité est exigée. Quel choix est le plus justifié ?', ['Un algorithme d’approximation avec garantie démontrée', 'Une heuristique sans mesure ni garantie présentée comme optimale', 'Un tri des entrées sans rapport avec l’objectif', 'Une récursion exhaustive sans borne'], 0, 'Une approximation fournit une solution réalisable accompagnée d’une borne de qualité, contrairement à une heuristique non analysée.'),
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => 20,
                    'passing_score' => 50,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Professional',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $index + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();
                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

                shuffle($choices);

                foreach ($choices as $choiceIndex => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['choice_text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }

    private function q(string $question, array $choices, int $correct, string $explanation): array
    {
        return [
            'question' => $question,
            'choices' => $choices,
            'correct' => $correct,
            'explanation' => $explanation,
        ];
    }
}
