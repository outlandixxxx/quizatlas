<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProgrammingBeginnerSeeder extends Seeder
{
    private function mc(string $question, string $answer, string $d1, string $d2, string $d3, string $explanation): array
    {
        return [
            'question' => $question,
            'explanation' => $explanation,
            'choices' => [
                ['text' => $answer, 'correct' => true],
                ['text' => $d1, 'correct' => false],
                ['text' => $d2, 'correct' => false],
                ['text' => $d3, 'correct' => false],
            ],
        ];
    }

    public function run(): void
    {
        $subject = Subject::where('slug', 'programming')->firstOrFail();
        $quizzes = [
            [
                'title' => 'Programmer ses premiers traitements',
                'description' => 'Lire des consignes, suivre un algorithme simple et repérer une erreur de logique.',
                'difficulty' => 'Beginner',
                'questions' => [
                    $this->mc('Une équipe décrit sur papier les étapes de calcul d’un total avant de choisir un langage. Comment appelle-t-on cette suite organisée d’étapes ?', 'Un algorithme', 'Un compilateur', 'Une base de données', 'Une interface', 'Un algorithme décrit une méthode finie et ordonnée pour résoudre un problème, indépendamment de son implémentation dans un langage.'),
                    $this->mc('Le même calcul doit fonctionner dans plusieurs langages. Quelle formulation facilite le plus cette réutilisation ?', 'Décrire les étapes sans dépendre de la syntaxe d’un langage particulier', 'Écrire directement une fonction dans un langage choisi', 'Lister seulement les résultats attendus sans décrire le traitement', 'Traduire l’algorithme en instructions machine avant de le valider', 'Une description indépendante du langage peut ensuite être traduite en plusieurs implémentations.'),
                    $this->mc('Dans un programme de réservation, le nombre de places restantes change après chaque inscription. Où faut-il stocker cette valeur ?', 'Dans une variable', 'Dans un commentaire', 'Dans le nom du fichier', 'Dans une constante qui ne peut jamais changer', 'Une variable représente une valeur que le programme peut consulter et mettre à jour pendant son exécution.'),
                    $this->mc('Une consigne dit : « si le solde est suffisant, valider le paiement ; sinon, afficher un refus ». Quelle construction exprime cette bifurcation ?', 'Une condition avec deux branches', 'Une boucle sans condition de sortie', 'Une déclaration de constante', 'Une fonction récursive obligatoire', 'La condition choisit une branche selon que le test est vrai ou faux.'),
                    $this->mc('Le programme doit afficher « Bonjour » cinq fois. Quelle approche évite de recopier cinq fois la même instruction ?', 'Utiliser une boucle avec un nombre de répétitions adapté', 'Utiliser une condition évaluée une seule fois', 'Appeler une fonction une seule fois sans répétition', 'Écrire cinq instructions d’affichage séparées', 'Une boucle répète une instruction et limite la duplication du code.'),
                    $this->mc('Un débutant écrit `prix = 20` puis `prix = prix + 5`. Quelle valeur contient `prix` après la seconde instruction ?', '25', '20', '5', 'L’expression est invalide car une variable ne peut pas être relue', 'Le membre de droite est évalué avec l’ancienne valeur, puis le résultat 25 est affecté à `prix`.'),
                    $this->mc('Le code compile, mais le programme affiche un total incorrect pour certains paniers. Quel type de problème faut-il d’abord suspecter ?', 'Une erreur de logique dans le calcul', 'Une erreur de syntaxe forcément', 'Un problème de connexion réseau forcément', 'Une erreur de traduction du commentaire', 'Un programme peut respecter la syntaxe tout en appliquant une formule ou une règle métier incorrecte.'),
                    $this->mc('Une équipe souhaite expliquer pourquoi une variable `total` reçoit une valeur précise pendant un test. Quelle action aide le mieux à localiser le problème ?', 'Exécuter le programme pas à pas en observant les valeurs', 'Renommer tous les fichiers au hasard', 'Supprimer les conditions du programme', 'Relancer la compilation sans lire le résultat', 'Le débogage permet d’observer l’exécution et les valeurs pour retrouver l’étape où le résultat diverge.'),
                    $this->mc('Dans un pseudo-code, on teste `âge >= 18`. Quel est le résultat du test pour `âge = 16` ?', 'Faux', 'Vrai', 'Le test renvoie nécessairement le nombre 18', 'Le programme crée automatiquement une boucle', 'Seize n’est pas supérieur ou égal à dix-huit : la comparaison est donc fausse.'),
                    $this->mc('Un collègue veut vérifier un algorithme avant de l’écrire en JavaScript. Quelle démarche est la plus utile ?', 'Le tester sur quelques exemples, dont un cas limite', 'Relire uniquement les noms des variables', 'Supprimer les étapes intermédiaires pour aller plus vite', 'Tester un seul exemple déjà connu comme valide', 'Des exemples simples et limites aident à vérifier que les étapes couvrent les situations prévues.'),
                ],
            ],
            [
                'title' => 'Valeurs, types et expressions',
                'description' => 'Manipuler des nombres, du texte et des valeurs logiques dans des cas courants.',
                'difficulty' => 'Beginner',
                'questions' => [
                    $this->mc('Un formulaire demande le prénom d’un client. Quel type de donnée convient pour conserver sa réponse ?', 'Une chaîne de caractères', 'Un booléen', 'Un nombre entier', 'Une fonction', 'Un prénom est du texte, même s’il contient des chiffres ou des espaces.'),
                    $this->mc('Le programme conserve le nombre d’articles dans un panier, toujours sous forme de nombre entier. Quel type est le plus adapté ?', 'Un entier', 'Une chaîne de caractères', 'Un booléen', 'Un fichier', 'Un entier représente un nombre sans partie décimale, comme le nombre d’articles.'),
                    $this->mc('Un système enregistre si une adresse a été vérifiée ou non. Quelle représentation est la plus naturelle ?', 'Une valeur booléenne', 'Une liste de caractères obligatoire', 'Un nombre décimal', 'Une classe de base de données', 'Un booléen représente deux états logiques, généralement vrai et faux.'),
                    $this->mc('Une valeur saisie dans un champ arrive sous forme de texte : « 42 ». Le programme doit effectuer une addition. Que faut-il faire avant le calcul ?', 'Convertir la valeur en nombre après avoir vérifié qu’elle est valide', 'Concaténer directement le texte avec le nombre', 'La convertir en commentaire', 'La placer dans le nom d’une fonction', 'La conversion explicite évite de traiter « 42 » comme du texte lors d’une opération numérique.'),
                    $this->mc('Un taux de remise peut valoir 12,5 %. Quel type convient mieux qu’un entier si la précision décimale doit être conservée ?', 'Un nombre décimal', 'Un booléen', 'Une chaîne utilisée sans conversion', 'Un tableau vide', 'Un nombre décimal peut représenter une fraction, contrairement à un entier.'),
                    $this->mc('Après une série de calculs, le prix affiché présente un petit écart d’arrondi. Quelle précaution est pertinente pour des montants financiers ?', 'Utiliser une représentation décimale ou entière en centimes adaptée au domaine', 'Comparer des flottants avec une égalité exacte dans tous les cas', 'Ajouter des décimales au hasard jusqu’à disparition de l’écart', 'Stocker le montant dans un booléen', 'Les flottants binaires ne représentent pas exactement toutes les fractions décimales ; les montants exigent une stratégie d’arrondi explicite.'),
                    $this->mc('Un développeur écrit `a = 7` puis `b = a + 3`. Quelle valeur est affectée à `b` ?', '10', '7', '3', '73', 'L’opérateur `+` effectue ici une addition numérique : sept plus trois donne dix.'),
                    $this->mc('Dans un langage où `+` concatène deux chaînes, quel résultat obtient-on avec « 20 » + « 4 » ?', '« 204 »', '24', '« 20 + 4 »', 'Une erreur dans tous les langages', 'Lorsque les deux opérandes sont des chaînes, `+` peut les concaténer ; son comportement dépend du langage et des types.'),
                    $this->mc('Une constante `TAUX_TVA` est définie au démarrage et ne doit pas être réaffectée pendant le calcul. Quel est l’intérêt de ce choix ?', 'Rendre explicite qu’une valeur ne doit pas varier et éviter sa modification accidentelle', 'Rendre le programme automatiquement plus rapide', 'Transformer la valeur en texte', 'Empêcher toute fonction de lire la valeur', 'Une constante exprime une valeur stable et aide à prévenir les réaffectations involontaires.'),
                    $this->mc('Une expression calcule `2 + 3 * 4`. Quel résultat obtient-on avec la priorité arithmétique usuelle ?', '14', '20', '24', '9', 'La multiplication est évaluée avant l’addition : 3 × 4 = 12, puis 2 + 12 = 14.'),
                    $this->mc('Une condition compare `score >= 50`. Quel type de résultat la comparaison produit-elle généralement ?', 'Une valeur vraie ou fausse', 'Toujours le nombre 50', 'Une chaîne contenant le nom du joueur', 'Un nouveau score', 'Une comparaison produit une valeur logique utilisable ensuite par une condition.'),
                    $this->mc('Le programme doit calculer une moyenne mais reçoit parfois un champ vide. Quelle vérification faut-il ajouter avant la division ?', 'Vérifier la présence et la validité des valeurs, puis traiter le cas sans donnée', 'Remplacer systématiquement le champ vide par 100', 'Diviser par le texte vide', 'Ignorer le nombre de valeurs utilisées', 'Valider les entrées et traiter explicitement l’absence de valeurs évite des résultats incohérents ou une division invalide.'),
                ],
            ],
            [
                'title' => 'Conditions et répétitions en pratique',
                'description' => 'Choisir entre branchement et répétition pour contrôler le déroulement d’un programme.',
                'difficulty' => 'Beginner',
                'questions' => [
                    $this->mc('Une boutique applique la livraison gratuite aux commandes d’au moins 500 dirhams. Quelle règle traduit correctement cette politique ?', 'Si le total est supérieur ou égal à 500, appliquer la gratuité ; sinon, facturer la livraison', 'Répéter le calcul du total jusqu’à atteindre 500', 'Appliquer la gratuité à toutes les commandes', 'Diminuer le total de 500 avant de choisir', 'Une condition teste le seuil ; ses branches appliquent l’une ou l’autre règle.'),
                    $this->mc('Pour afficher chaque nom d’une liste de participants, quelle construction est généralement la plus claire ?', 'Une boucle qui parcourt les éléments de la liste', 'Une condition qui ne s’exécute qu’une fois', 'Une constante par participant', 'Une exception pour chaque nom', 'Une boucle de parcours applique le même traitement à chaque élément.'),
                    $this->mc('Une boucle `while` dépend d’une condition qui n’est jamais modifiée dans son corps. Quel risque faut-il vérifier ?', 'La boucle peut ne jamais se terminer', 'La boucle convertit la condition en fonction', 'La boucle s’exécute forcément une seule fois', 'La boucle supprime automatiquement sa condition', 'Si la condition reste vraie, l’exécution continue indéfiniment, sauf interruption externe.'),
                    $this->mc('Le programme demande un code jusqu’à ce que l’utilisateur saisisse le bon. Quelle information doit évoluer pour permettre la sortie ?', 'La valeur saisie ou l’état testé par la condition', 'Le nom du fichier source', 'Le nombre de commentaires', 'La couleur de l’interface', 'La boucle doit relire une valeur ou modifier un état dont dépend la condition d’arrêt.'),
                    $this->mc('Une liste contient les nombres 4, 7 et 9. Le programme doit additionner chaque élément une seule fois. Quelle stratégie convient ?', 'Initialiser un accumulateur puis l’augmenter à chaque passage de la boucle', 'Réinitialiser le total à zéro à chaque élément', 'Comparer chaque élément au nom du tableau', 'Arrêter avant le premier passage', 'Un accumulateur conserve le total partiel et reçoit successivement la valeur de chaque élément.'),
                    $this->mc('Un programme vérifie le mot de passe puis vérifie le compte actif. Les deux conditions doivent être vraies. Quel opérateur logique exprime cette exigence ?', 'ET logique', 'OU logique', 'NON appliqué au hasard', 'Addition de chaînes', 'Avec ET, le résultat est vrai uniquement si les deux tests sont vrais.'),
                    $this->mc('Un utilisateur peut se connecter avec son courriel ou son numéro de téléphone. Quelle relation logique faut-il entre ces deux tests ?', 'OU logique', 'ET logique', 'Une soustraction', 'Une affectation', 'OU accepte que l’un des deux identifiants soit valide.'),
                    $this->mc('La boucle traite les lignes d’un fichier et doit ignorer celles qui sont vides. Quel choix évite d’exécuter le traitement principal pour ces lignes ?', 'Passer directement à l’itération suivante', 'Terminer tout le programme à la première ligne vide', 'Réinitialiser le fichier source', 'Répéter le traitement deux fois', 'Une instruction de type `continue` saute le reste de l’itération courante et reprend à la suivante.'),
                    $this->mc('Un résultat de recherche est trouvé au milieu d’une liste, et aucun autre élément n’a besoin d’être examiné. Quelle décision est raisonnable ?', 'Quitter la boucle de recherche', 'Remettre l’indice à zéro sans condition', 'Poursuivre jusqu’à la fin dans tous les cas', 'Remplacer la liste par une chaîne', 'Interrompre la boucle dès que le résultat recherché est trouvé évite un parcours inutile.'),
                    $this->mc('Une équipe hésite entre une condition et une boucle pour traiter un seul paiement lorsque son statut est « en attente ». Quel outil convient ?', 'Une condition, car il faut choisir un traitement selon un état', 'Une boucle infinie, car tout statut doit être répété', 'Une fonction récursive obligatoire', 'Un tableau de boucles', 'La condition choisit une action selon l’état ; une boucle n’est utile que si le traitement doit se répéter.'),
                    $this->mc('Une boucle `for` commence à 0 et s’arrête avant 4. Combien de passages effectue-t-elle si l’indice augmente de 1 ?', '4 passages', '3 passages', '5 passages', 'Aucun passage', 'Les valeurs d’indice sont 0, 1, 2 et 3 : cela fait quatre passages.'),
                    $this->mc('Un formulaire accepte une note uniquement de 0 à 20 inclus. Quelle validation représente correctement les bornes ?', 'Refuser si la note est inférieure à 0 ou supérieure à 20', 'Refuser si la note est égale à 0 ou à 20', 'Accepter seulement les notes supérieures à 20', 'Tester uniquement si le champ est vide', 'Les bornes sont incluses ; les valeurs invalides se trouvent strictement en dessous de 0 ou au-dessus de 20.'),
                ],
            ],
            [
                'title' => 'Fonctions, listes et texte',
                'description' => 'Organiser de petites tâches réutilisables et manipuler des collections de données.',
                'difficulty' => 'Beginner',
                'questions' => [
                    $this->mc('Une application calcule le montant TTC à plusieurs endroits. Quelle amélioration réduit les divergences entre ces calculs ?', 'Placer le calcul dans une fonction réutilisable', 'Copier la formule dans chaque écran', 'Remplacer la formule par un commentaire', 'Créer une variable globale différente dans chaque fichier', 'Une fonction centralise le calcul ; une correction peut alors être appliquée à un seul endroit.'),
                    $this->mc('Une fonction `calculerTTC(prix, taux)` reçoit deux informations nécessaires au calcul. Comment appelle-t-on ces valeurs fournies à la fonction ?', 'Des paramètres ou arguments', 'Des commentaires', 'Des exceptions', 'Des index de tableau', 'Les paramètres représentent les entrées attendues par la fonction ; les arguments sont les valeurs passées lors de son appel.'),
                    $this->mc('La fonction `estMajeur(age)` doit permettre au code appelant de décider quoi afficher. Que devrait-elle renvoyer ?', 'Un résultat booléen', 'Un message affiché directement dans tous les cas', 'Le contenu complet du programme', 'Une nouvelle classe obligatoire', 'La fonction renvoie vrai ou faux ; l’appelant choisit ensuite la présentation adaptée.'),
                    $this->mc('Une fonction reçoit un tableau et doit renvoyer le plus grand nombre sans modifier le tableau original. Quel contrat est le plus clair ?', 'Décrire qu’elle renvoie le maximum et laisse l’entrée intacte', 'Ne rien préciser sur la valeur renvoyée', 'Supprimer la moitié du tableau sans avertissement', 'Afficher tous les éléments à la place du résultat', 'Un contrat explicite précise le résultat attendu et les effets autorisés sur les entrées.'),
                    $this->mc('Une équipe a créé une fonction qui valide une adresse électronique et l’utilise dans trois formulaires. Quel bénéfice concret obtient-elle ?', 'La même règle est appliquée de façon cohérente et peut être corrigée en un seul endroit', 'Les formulaires n’ont plus besoin de recevoir de données', 'La fonction supprime les erreurs de réseau', 'L’adresse est automatiquement certifiée par le fournisseur', 'La réutilisation aide à garder un comportement cohérent, sans garantir à elle seule la validité réelle d’une adresse.'),
                    $this->mc('Une liste contient les noms de quatre candidats. Quel accès désigne généralement le premier élément dans un langage à indexation commençant à zéro ?', 'L’indice 0', 'L’indice 1 dans tous les langages', 'L’indice 4', 'L’indice -4 obligatoirement', 'Dans les langages courants à indices zéro, le premier élément se trouve à l’indice 0.'),
                    $this->mc('Un code lit `notes[5]` alors que la liste contient cinq notes. Quel problème est probable dans un langage à indices commençant à zéro ?', 'L’indice est hors des limites de la liste', 'La sixième note est créée automatiquement', 'La liste se trie toute seule', 'La valeur est forcément égale à zéro', 'Une liste de cinq éléments possède les indices 0 à 4 ; l’indice 5 dépasse donc ses limites.'),
                    $this->mc('Une application assemble « Bonjour » et le prénom « Lina » pour produire un message. Quelle opération réalise cette combinaison de texte ?', 'La concaténation', 'La comparaison numérique', 'La division entière', 'La déclaration d’une classe', 'La concaténation met bout à bout des chaînes pour former un nouveau texte.'),
                    $this->mc('Un champ de recherche doit ignorer les espaces placés avant et après un nom. Quelle transformation est adaptée ?', 'Supprimer les espaces en début et en fin de chaîne', 'Supprimer toutes les lettres majuscules', 'Convertir le nom en nombre', 'Ajouter des espaces jusqu’à une longueur fixe sans règle', 'Une opération de suppression des espaces périphériques normalise la saisie sans modifier les espaces internes.'),
                    $this->mc('Un texte contient le nom d’un produit. L’application veut savoir si la saisie contient le mot « café ». Quelle opération faut-il utiliser ?', 'Une recherche de sous-chaîne', 'Une addition arithmétique', 'Une conversion en booléen sans test', 'Un tri numérique', 'La recherche de sous-chaîne vérifie si une séquence de caractères apparaît dans une autre.'),
                ],
            ],
            [
                'title' => 'Lire, tester et corriger un programme',
                'description' => 'Analyser des messages d’erreur, vérifier des entrées et améliorer la lisibilité du code.',
                'difficulty' => 'Beginner',
                'questions' => [
                    $this->mc('Après avoir oublié une parenthèse, le compilateur signale une erreur avant le lancement du programme. De quel problème s’agit-il ?', 'Une erreur de syntaxe', 'Une erreur de performance', 'Une panne matérielle certaine', 'Une erreur de traduction utilisateur', 'La syntaxe concerne la forme valide du code ; une erreur de syntaxe empêche généralement son analyse ou sa compilation.'),
                    $this->mc('Le programme démarre, puis plante lorsqu’il divise par zéro. À quel moment l’erreur survient-elle ?', 'À l’exécution', 'Pendant la rédaction d’un commentaire', 'Lors du choix du nom du projet', 'Avant que le code ne soit enregistré', 'L’opération invalide se produit pendant l’exécution, une fois le programme lancé.'),
                    $this->mc('Une personne signale que la date « 31/02/2026 » est acceptée par le formulaire. Quelle partie faut-il renforcer ?', 'La validation des données selon les règles du calendrier', 'La couleur du bouton de validation', 'Le nom du fichier JavaScript', 'Le nombre de commentaires dans le code', 'Un format peut respecter une apparence attendue sans correspondre à une date réelle ; il faut vérifier les valeurs calendaires.'),
                    $this->mc('Un test échoue seulement lorsque la liste est vide. Quelle catégorie de cas mérite d’être ajoutée aux tests ?', 'Un cas limite ou une entrée vide', 'Un deuxième nom de variable', 'Une capture de l’écran d’accueil', 'Un commentaire plus long', 'Les collections vides sont des cas limites qui révèlent souvent des hypothèses cachées dans le code.'),
                    $this->mc('Un test vérifie que `2 + 3` donne 5, puis que `0 + 0` donne 0. Pourquoi tester plusieurs entrées ?', 'Pour vérifier que le comportement fonctionne dans des situations différentes', 'Pour rendre le calcul plus rapide', 'Pour remplacer le programme par ses tests', 'Pour imposer que tous les résultats soient identiques', 'Plusieurs cas couvrent des entrées variées et peuvent révéler des défauts qu’un seul exemple ne détecte pas.'),
                    $this->mc('Un collègue doit comprendre le rôle d’une variable lors d’une revue. Quel nom est le plus parlant pour stocker le nombre d’inscriptions validées ?', '`nombreInscriptionsValidees`', '`x`', '`temp2`', '`donneesFinalesEtAutres`', 'Un nom qui décrit le contenu rend le code plus lisible et limite les interprétations ambiguës.'),
                    $this->mc('Une fonction de 80 lignes traite la saisie, calcule un tarif et envoie un courriel. Quelle refactorisation améliorerait le plus sa compréhension ?', 'Séparer ces responsabilités en fonctions aux rôles clairs', 'Renommer toute la fonction `faireTout`', 'Ajouter une seule variable globale', 'Supprimer les tests associés', 'Des fonctions plus ciblées clarifient les étapes et facilitent les tests et les changements.'),
                    $this->mc('Un message d’erreur destiné à un utilisateur affiche une trace technique avec des chemins internes. Quelle correction est préférable ?', 'Afficher un message compréhensible et conserver les détails techniques dans des journaux protégés', 'Afficher davantage de chemins internes', 'Désactiver toute journalisation', 'Montrer le mot de passe utilisé pendant la requête', 'L’interface doit aider l’utilisateur sans exposer de détails sensibles ; les informations techniques restent dans des journaux accessibles aux personnes autorisées.'),
                    $this->mc('Une variable `solde` est attendue comme nombre, mais une saisie contient « dix ». Quelle protection est la plus directe ?', 'Valider le type et le format avant le calcul', 'Ajouter la chaîne à toutes les opérations', 'Ignorer la saisie et annoncer un succès', 'Convertir automatiquement tout texte en 10', 'La validation doit confirmer que l’entrée peut être interprétée comme un nombre avant tout calcul.'),
                    $this->mc('Un développeur corrige une erreur et veut éviter qu’elle réapparaisse lors d’une modification future. Que devrait-il ajouter ?', 'Un test qui reproduit le cas défectueux et vérifie le résultat attendu', 'Un commentaire qui dit que le code est corrigé', 'Un délai arbitraire avant chaque exécution', 'Une copie du programme dans un autre dossier', 'Un test de régression garde une vérification exécutable du comportement corrigé.'),
                    $this->mc('Une équipe reçoit deux résultats contradictoires pour une fonctionnalité. Quelle information rend le rapport de bug le plus exploitable ?', 'Les étapes pour reproduire le problème et le résultat observé', 'Le nom du fond d’écran du développeur', 'Une liste de tous les fichiers du projet sans contexte', 'Une opinion sans exemple', 'Des étapes reproductibles aident à observer le défaut et à isoler sa cause.'),
                    $this->mc('Une personne copie une solution trouvée en ligne sans la comprendre. Quelle pratique réduit le risque d’introduire un défaut ?', 'Lire le code, vérifier ses hypothèses et le tester dans le contexte du projet', 'Le fusionner immédiatement sans exécution', 'Supprimer les noms de variables', 'Masquer les avertissements du compilateur', 'Une solution doit être comprise et vérifiée avec les exigences et l’environnement réels du projet.'),
                ],
            ],
        ];

        Quiz::where('subject_id', $subject->id)
            ->where('difficulty', 'Beginner')
            ->whereNotIn('title', array_column($quizzes, 'title'))
            ->update(['is_active' => false]);
        foreach ($quizzes as $quizData) {
            $questionCount = count($quizData['questions']);
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => max(10, (int) ceil($questionCount * 0.8)),
                    'passing_score' => 70,
                    'total_marks' => $questionCount,
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
                ]
            );

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = $quiz->questions()->updateOrCreate(
                    ['order' => $questionIndex + 1],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );
                $question->choices()->delete();
                foreach ($questionData['choices'] as $choiceIndex => $choiceData) {
                    $question->choices()->create([
                        'choice_text' => $choiceData['text'],
                        'is_correct' => $choiceData['correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
            $quiz->questions()->where('order', '>', $questionCount)->delete();
        }
    }
}
