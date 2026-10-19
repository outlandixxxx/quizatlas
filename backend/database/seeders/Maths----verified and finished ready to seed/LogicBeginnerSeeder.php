<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LogicBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'logic')->firstOrFail();

        $settings = [
            'duration' => 20,
            'passing_score' => 60,
        ];

        $makeQuestion = static function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ): array {
            return [
                'question' => $question,
                'choices' => [
                    ['choice_text' => $correct, 'is_correct' => true],
                    ['choice_text' => $wrong1, 'is_correct' => false],
                    ['choice_text' => $wrong2, 'is_correct' => false],
                    ['choice_text' => $wrong3, 'is_correct' => false],
                ],
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => "Propositions et valeurs de vérité",
                'description' => "Identifier les propositions logiques et déterminer leurs valeurs de vérité.",
                'questions' => [
                    $makeQuestion("Laquelle des phrases suivantes est une proposition logique ?", "7 est un nombre premier.", "Ferme la fenêtre.", "Quel jour sommes-nous ?", "Quelle belle journée !", "Une proposition logique est une phrase déclarative à laquelle on peut attribuer une valeur de vérité."),
                    $makeQuestion("Quelle est la valeur de vérité de « 12 est divisible par 3 » ?", "Vraie", "Fausse", "Indéterminée", "Cela dépend du contexte", "12 = 3 × 4, donc l'affirmation est vraie."),
                    $makeQuestion("Quelle phrase n'est pas une proposition logique ?", "x + 1 = 4.", "Paris est en France.", "2 + 5 = 8.", "10 est supérieur à 6.", "La valeur de vérité de x + 1 = 4 dépend de x ; c'est une phrase ouverte."),
                    $makeQuestion("Si P signifie « 9 < 4 », quelle est la valeur de vérité de P ?", "Fausse", "Vraie", "À la fois vraie et fausse", "Impossible à déterminer", "9 n'est pas inférieur à 4, donc P est fausse."),
                    $makeQuestion("Quelle notation représente la négation d'une proposition P ?", "¬P", "P²", "1/P", "P + 1", "Le symbole ¬ signifie « non » et indique la négation de P."),
                    $makeQuestion("Si P est vraie, quelle est la valeur de ¬P ?", "Fausse", "Vraie", "Indéterminée", "Toujours vraie", "La négation inverse la valeur de vérité de la proposition."),
                    $makeQuestion("Laquelle est une proposition dont la valeur de vérité peut être déterminée immédiatement ?", "5 × 2 = 10.", "Ferme le cahier.", "Est-ce que 5 × 2 = 10 ?", "Quelle surprise !", "« 5 × 2 = 10 » est une affirmation déclarative vraie."),
                    $makeQuestion("Si Q est fausse, que peut-on dire de ¬Q ?", "¬Q est vraie.", "¬Q est fausse.", "¬Q n'a pas de valeur.", "Q et ¬Q sont toujours fausses.", "La négation d'une proposition fausse est vraie."),
                    $makeQuestion("Pourquoi « Ouvre la porte » n'est-elle pas une proposition logique ?", "C'est un ordre, pas une affirmation.", "Elle est trop courte.", "Elle contient un verbe.", "Elle est forcément fausse.", "Un ordre n'est pas une affirmation à laquelle on attribue une valeur de vérité."),
                    $makeQuestion("La proposition « 15 est un nombre pair » est :", "Fausse", "Vraie", "Une question", "Une phrase ouverte", "15 est impair, donc cette proposition est fausse."),
                ],
            ],
            [
                'title' => "Connecteurs logiques",
                'description' => "Utiliser la négation, la conjonction et la disjonction dans des situations simples.",
                'questions' => [
                    $makeQuestion("Dans « P et Q », quel connecteur logique est utilisé ?", "La conjonction", "La disjonction", "La négation", "L'implication", "Le mot « et » correspond à la conjonction P ∧ Q."),
                    $makeQuestion("Quand P et Q sont toutes les deux vraies, quelle est la valeur de P ∧ Q ?", "Vraie", "Fausse", "Indéterminée", "Elle dépend de P seulement", "Une conjonction est vraie uniquement lorsque ses deux propositions sont vraies."),
                    $makeQuestion("Quand P est vraie et Q est fausse, quelle est la valeur de P ∧ Q ?", "Fausse", "Vraie", "Toujours vraie", "Indéterminée", "Le ET exige que les deux propositions soient vraies."),
                    $makeQuestion("Pour le OU logique inclusif, dans quel cas P ∨ Q est-il faux ?", "Quand P et Q sont fausses.", "Quand P est vraie et Q fausse.", "Quand P est fausse et Q vraie.", "Quand P et Q sont vraies.", "Le OU inclusif est faux uniquement lorsque les deux propositions sont fausses."),
                    $makeQuestion("Si P est fausse et Q est vraie, quelle est la valeur de P ∨ Q ?", "Vraie", "Fausse", "Toujours fausse", "Impossible à savoir", "Il suffit qu'au moins une des deux propositions soit vraie pour que le OU soit vrai."),
                    $makeQuestion("Que signifie l'expression ¬P en langage courant ?", "Non P", "P et Q", "P ou Q", "P implique Q", "Le symbole ¬ placé devant P signifie « non P »."),
                    $makeQuestion("Si P est vraie et Q est fausse, quelle expression est vraie ?", "P ∨ Q", "P ∧ Q", "¬P", "¬P ∧ Q", "P est vraie, donc P ∨ Q est vraie."),
                    $makeQuestion("Quelle expression signifie « P et non Q » ?", "P ∧ ¬Q", "P ∨ ¬Q", "¬P ∧ Q", "¬(P ∧ Q)", "On combine P avec la négation de Q par une conjonction."),
                    $makeQuestion("Un système donne accès si mot de passe valide OU code de secours valide. Quelle condition suffit ?", "Au moins l'une des deux conditions doit être vraie.", "Les deux doivent être fausses.", "Les deux doivent être vraies.", "Le mot de passe doit forcément être faux.", "Avec un OU logique, une seule condition vraie suffit."),
                    $makeQuestion("Quelle situation correspond à une conjonction vraie ?", "La porte est ouverte et la lumière est allumée.", "La porte est ouverte ou la lumière est allumée.", "La porte n'est pas ouverte.", "La lumière est éteinte.", "Le ET logique est vrai lorsque les deux conditions le sont simultanément."),
                ],
            ],
            [
                'title' => "Implication et équivalence",
                'description' => "Comprendre l'implication, la converse, la contraposée et l'équivalence logique.",
                'questions' => [
                    $makeQuestion("Dans une implication P → Q, quand l'implication est-elle fausse ?", "Quand P est vraie et Q est fausse.", "Quand P est fausse et Q vraie.", "Quand P et Q sont vraies.", "Quand P et Q sont fausses.", "C'est le seul cas où une implication est fausse."),
                    $makeQuestion("Si P → Q est vraie et P est vraie, que peut-on conclure ?", "Q est vraie.", "Q est fausse.", "P devient fausse.", "Rien sur Q.", "Une prémisse vraie dans une implication vraie entraîne une conclusion vraie."),
                    $makeQuestion("Quelle est la contraposée de P → Q ?", "¬Q → ¬P", "Q → P", "¬P → ¬Q", "P ∧ Q", "La contraposée inverse les deux propositions et les nie."),
                    $makeQuestion("Comment appelle-t-on Q → P lorsqu'on part de P → Q ?", "La converse", "La contraposée", "La négation", "La conjonction", "La converse s'obtient en échangeant P et Q."),
                    $makeQuestion("Une condition suffisante est une condition qui :", "garantit le résultat lorsqu'elle est satisfaite.", "est toujours fausse.", "n'a aucun lien avec le résultat.", "interdit toujours le résultat.", "P est suffisante pour Q lorsque P → Q."),
                    $makeQuestion("Une condition nécessaire pour Q doit être :", "présente dès que Q est vraie.", "toujours facultative.", "toujours fausse.", "sans rapport avec Q.", "Si P est nécessaire à Q, alors Q → P."),
                    $makeQuestion("Que signifie P ↔ Q ?", "P si et seulement si Q.", "P seulement.", "P ou Q mais pas les deux.", "Non P et non Q.", "Le symbole ↔ indique une équivalence logique."),
                    $makeQuestion("Quand P ↔ Q est-elle vraie ?", "Lorsque P et Q ont la même valeur de vérité.", "Seulement quand P est vraie.", "Quand P et Q ont des valeurs différentes.", "Toujours.", "Une équivalence est vraie quand les deux propositions sont toutes les deux vraies ou toutes les deux fausses."),
                    $makeQuestion("Dans « Si un nombre est multiple de 4, alors il est pair », être multiple de 4 est :", "une condition suffisante pour être pair.", "une condition nécessaire pour être pair.", "une condition impossible.", "le contraire d'être pair.", "Tout multiple de 4 est pair, donc être multiple de 4 suffit pour garantir que le nombre est pair."),
                    $makeQuestion("La négation de P → Q est équivalente à :", "P ∧ ¬Q", "¬P ∧ Q", "P ∨ Q", "¬P ∨ Q", "L'implication échoue seulement quand P est vraie et Q est fausse."),
                ],
            ],
            [
                'title' => "Tables de vérité",
                'description' => "Construire et lire des tables de vérité pour des expressions logiques élémentaires.",
                'questions' => [
                    $makeQuestion("Combien de lignes comporte une table de vérité avec une seule proposition P ?", "2", "1", "3", "4", "P possède deux valeurs possibles : vraie ou fausse."),
                    $makeQuestion("Combien de lignes comporte une table de vérité avec deux propositions P et Q ?", "4", "2", "3", "8", "Avec deux propositions, il y a 2² = 4 combinaisons."),
                    $makeQuestion("Quelle ligne correspond à P ∧ Q vraie ?", "P vraie et Q vraie", "P fausse et Q fausse", "P vraie et Q fausse", "P fausse et Q vraie", "La conjonction est vraie uniquement lorsque P et Q sont vraies."),
                    $makeQuestion("Quelle ligne rend P ∨ Q fausse ?", "P fausse et Q fausse", "P vraie et Q vraie", "P vraie et Q fausse", "P fausse et Q vraie", "Le OU inclusif n'est faux que lorsque ses deux composantes sont fausses."),
                    $makeQuestion("Si P est fausse, quelle valeur apparaît dans la colonne de ¬P ?", "Vraie", "Fausse", "Les deux", "Aucune", "La négation transforme une valeur fausse en valeur vraie."),
                    $makeQuestion("Pour P vraie et Q fausse, quelle est la valeur de P → Q ?", "Fausse", "Vraie", "Toujours vraie", "Indéterminée", "P vraie avec Q fausse constitue l'unique cas de fausseté de l'implication."),
                    $makeQuestion("Pour P fausse et Q fausse, quelle est la valeur de P → Q ?", "Vraie", "Fausse", "Indéterminée", "Elle dépend seulement de Q", "Une implication dont la prémisse est fausse est vraie en logique classique."),
                    $makeQuestion("Combien de lignes sont nécessaires pour trois propositions P, Q et R ?", "8", "4", "6", "9", "Avec trois propositions, le nombre de combinaisons est 2³ = 8."),
                    $makeQuestion("Pourquoi remplit-on toutes les combinaisons de V et F dans une table de vérité ?", "Pour vérifier l'expression dans tous les cas possibles.", "Pour supprimer les propositions fausses.", "Pour rendre la table plus longue.", "Pour éviter les connecteurs.", "La table de vérité permet une vérification systématique de l'expression."),
                    $makeQuestion("Quelle expression a toujours la même valeur que P ∧ V ?", "P", "¬P", "V", "F", "La conjonction avec une proposition toujours vraie ne change pas P."),
                ],
            ],
            [
                'title' => "Équivalences et lois de De Morgan",
                'description' => "Reconnaître des équivalences logiques simples et appliquer les lois de De Morgan.",
                'questions' => [
                    $makeQuestion("Quelle est une équivalence correcte de ¬(P ∧ Q) ?", "¬P ∨ ¬Q", "¬P ∧ ¬Q", "P ∧ Q", "P ∨ Q", "La première loi de De Morgan donne ¬(P ∧ Q) ≡ ¬P ∨ ¬Q."),
                    $makeQuestion("Quelle est une équivalence correcte de ¬(P ∨ Q) ?", "¬P ∧ ¬Q", "¬P ∨ ¬Q", "P ∧ Q", "P ∨ Q", "La seconde loi de De Morgan donne ¬(P ∨ Q) ≡ ¬P ∧ ¬Q."),
                    $makeQuestion("Quelle expression est équivalente à ¬¬P ?", "P", "¬P", "P ∧ P", "P ∨ ¬P", "Deux négations successives s'annulent."),
                    $makeQuestion("Quelle expression signifie « au moins une des propositions P ou Q est vraie » ?", "P ∨ Q", "P ∧ Q", "¬P ∨ ¬Q", "¬(P ∨ Q)", "Le OU inclusif exprime qu'une ou les deux propositions sont vraies."),
                    $makeQuestion("Quelle expression est équivalente à P ∧ V ?", "P", "¬P", "V", "F", "V est l'élément neutre du ET : P ∧ V = P."),
                    $makeQuestion("Quelle expression est équivalente à P ∨ F ?", "P", "¬P", "V", "F", "F est l'élément neutre du OU : P ∨ F = P."),
                    $makeQuestion("Quelle expression est toujours vraie ?", "P ∨ ¬P", "P ∧ ¬P", "P ∧ F", "¬P ∧ F", "Une proposition est soit vraie, soit fausse ; P ∨ ¬P est donc toujours vraie."),
                    $makeQuestion("Quelle expression est toujours fausse ?", "P ∧ ¬P", "P ∨ ¬P", "P ∨ V", "¬P ∨ V", "P et ¬P ne peuvent pas être vraies simultanément."),
                    $makeQuestion("« Il n'est pas vrai que P et Q » est équivalent à :", "¬P ∨ ¬Q", "¬P ∧ ¬Q", "P ∧ Q", "P ∨ Q", "La négation d'une conjonction devient le OU des négations."),
                    $makeQuestion("Deux expressions sont logiquement équivalentes lorsqu'elles :", "ont la même valeur de vérité dans tous les cas.", "ont forcément le même nombre de symboles.", "contiennent exactement les mêmes lettres dans le même ordre.", "sont écrites avec les mêmes mots.", "L'équivalence signifie que les deux expressions se comportent de façon identique pour toutes les valeurs possibles."),
                ],
            ],
            [
                'title' => "Raisonnement logique",
                'description' => "Appliquer des raisonnements valides et repérer les erreurs classiques de déduction.",
                'questions' => [
                    $makeQuestion("On sait P → Q et P est vraie. Quelle conclusion est valide ?", "Q est vraie.", "Q est fausse.", "P devient fausse.", "Aucune conclusion n'est possible.", "C'est le raisonnement direct, ou modus ponens."),
                    $makeQuestion("On sait P → Q et Q est fausse. Que peut-on conclure ?", "P est fausse.", "P est vraie.", "Q est vraie.", "Rien sur P.", "Par contraposée, ¬Q entraîne ¬P."),
                    $makeQuestion("Le raisonnement « P → Q, Q vraie, donc P vraie » est-il toujours valide ?", "Non, c'est l'affirmation du conséquent.", "Oui, toujours.", "Oui, seulement si P est fausse.", "Il est valide pour toute implication.", "Q peut être vraie pour une autre raison ; on ne peut donc pas inverser automatiquement l'implication."),
                    $makeQuestion("Quel raisonnement est valide ?", "P → Q, P, donc Q.", "P → Q, Q, donc P.", "P → Q, ¬P, donc ¬Q.", "P ∨ Q, donc P ∧ Q.", "La première forme est un modus ponens, un schéma de raisonnement valide."),
                    $makeQuestion("Une règle dit : « Si un étudiant valide le module, alors il obtient le certificat ». Il a validé le module. Que conclure ?", "Il obtient le certificat.", "Il n'obtient pas le certificat.", "Il doit refaire le module.", "On ne peut rien conclure.", "La prémisse de l'implication est vraie, donc sa conclusion est vraie."),
                    $makeQuestion("Pourquoi P → Q ne signifie-t-il pas que P et Q sont forcément vraies ?", "Parce que l'implication peut être vraie lorsque P est fausse.", "Parce qu'une implication est toujours fausse.", "Parce que Q n'existe pas.", "Parce que P et Q sont toujours opposées.", "En logique classique, P → Q est vraie lorsque P est fausse, quelle que soit la valeur de Q."),
                    $makeQuestion("De P → Q et ¬Q, peut-on déduire ¬P ?", "Oui, par contraposée.", "Non, jamais.", "Oui, mais seulement si Q est vraie.", "Non, car P et Q sont indépendantes.", "La contraposée de P → Q est ¬Q → ¬P."),
                    $makeQuestion("Une condition P est nécessaire à Q lorsque :", "Q vraie entraîne P vraie.", "P vraie entraîne toujours Q fausse.", "P peut être absente quand Q est vraie.", "P et Q sont toujours fausses.", "Une condition nécessaire doit être présente chaque fois que le résultat est obtenu."),
                    $makeQuestion("Quelle méthode aide à vérifier complètement une identité logique ?", "Construire une table de vérité.", "Supprimer les parenthèses au hasard.", "Changer les lettres P et Q.", "Ignorer les valeurs de vérité.", "La table de vérité compare les expressions dans toutes les combinaisons possibles."),
                    $makeQuestion("Quelle erreur consiste à conclure P à partir de P → Q et Q ?", "Affirmation du conséquent", "Modus ponens", "Contraposée", "Double négation", "Q peut être vraie sans que P le soit ; la converse n'est donc pas automatiquement valide."),
                ],
            ],
            [
                'title' => "Quantificateurs et négation",
                'description' => "Introduire les quantificateurs universel et existentiel et apprendre à nier des énoncés quantifiés.",
                'questions' => [
                    $makeQuestion("Que signifie le quantificateur ∀ ?", "Pour tout", "Il existe", "Il n'existe pas", "Peut-être", "∀ se lit « pour tout » ou « pour chaque »."),
                    $makeQuestion("Que signifie le quantificateur ∃ ?", "Il existe au moins un", "Pour tout", "Aucun", "Toujours", "∃ affirme l'existence d'au moins un élément qui vérifie la propriété."),
                    $makeQuestion("Quelle traduction correspond à ∀x, P(x) ?", "Pour tout x, P(x) est vraie.", "Il existe un x tel que P(x).", "Aucun x ne vérifie P(x).", "P(x) est parfois vraie.", "Le quantificateur universel impose la propriété à chaque élément du domaine."),
                    $makeQuestion("Quelle traduction correspond à ∃x, P(x) ?", "Il existe au moins un x tel que P(x) est vraie.", "Pour tout x, P(x) est vraie.", "P(x) est toujours fausse.", "P(x) n'est définie pour aucun x.", "Le quantificateur existentiel demande au moins un exemple."),
                    $makeQuestion("Quelle est la négation de « Tous les étudiants sont présents » ?", "Au moins un étudiant n'est pas présent.", "Aucun étudiant n'est présent.", "Tous les étudiants sont absents.", "Tous les étudiants sont présents deux fois.", "La négation d'une affirmation universelle demande un contre-exemple."),
                    $makeQuestion("La négation de « Il existe un nombre entier pair » est :", "Aucun entier n'est pair.", "Tous les entiers sont pairs.", "Il existe un entier impair.", "Certains entiers sont pairs.", "Nier « il existe » revient à dire qu'aucun élément ne vérifie la propriété."),
                    $makeQuestion("Si ∀x, P(x) est vraie, laquelle est nécessairement vraie ?", "P(a) est vraie pour tout a du domaine.", "P(a) est fausse pour tout a.", "Il n'existe aucun a.", "P est vraie pour un seul élément.", "L'affirmation universelle signifie que chaque élément du domaine possède la propriété."),
                    $makeQuestion("« Il existe un étudiant qui réussit le test » se traduit par :", "∃x, Réussit(x)", "∀x, Réussit(x)", "∀x, ¬Réussit(x)", "∃x, ¬Réussit(x)", "L'expression indique l'existence d'au moins un étudiant qui réussit."),
                    $makeQuestion("Quelle est la négation de ∀x, P(x) ?", "∃x, ¬P(x)", "∀x, ¬P(x)", "∃x, P(x)", "¬P(x) pour un x choisi au hasard", "La négation de « pour tout » devient « il existe » avec la propriété niée."),
                    $makeQuestion("Quelle est la négation de ∃x, P(x) ?", "∀x, ¬P(x)", "∃x, ¬P(x)", "∀x, P(x)", "P(x) est parfois vraie", "Dire qu'il n'existe aucun x satisfaisant P revient à dire que tous les x ne satisfont pas P."),
                ],
            ],
            [
                'title' => "Traduction et révision pratique",
                'description' => "Traduire des phrases courantes en logique et mobiliser les règles de base dans des situations concrètes.",
                'questions' => [
                    $makeQuestion("P = « Il pleut » et Q = « Je prends un parapluie ». Quelle formule traduit « Il pleut et je prends un parapluie » ?", "P ∧ Q", "P ∨ Q", "¬P ∧ Q", "P → Q", "Le mot « et » se traduit par le connecteur ∧."),
                    $makeQuestion("P = « le serveur répond » et Q = « le service est disponible ». Que signifie P ∨ Q ?", "Au moins l'une des deux propositions est vraie.", "Les deux sont forcément vraies.", "P implique Q.", "Les deux sont forcément fausses.", "Le OU inclusif demande au moins une proposition vraie."),
                    $makeQuestion("P = « le compte est actif ». Comment écrire « le compte n'est pas actif » ?", "¬P", "P ∧ P", "P ∨ P", "P → P", "La négation de P est notée ¬P."),
                    $makeQuestion("P = « il fait froid » et Q = « je mets un manteau ». Comment traduire « S'il fait froid, alors je mets un manteau » ?", "P → Q", "Q → P", "P ∧ Q", "P ∨ Q", "La structure « si P, alors Q » correspond à l'implication P → Q."),
                    $makeQuestion("P = « je viens » et Q = « tu m'appelles ». « Je viens seulement si tu m'appelles » signifie :", "P → Q", "Q → P", "P ∧ Q", "P ∨ Q", "« P seulement si Q » signifie que Q est nécessaire à P, donc P → Q."),
                    $makeQuestion("« Pour être admis, il faut avoir validé le module » signifie, avec A = admis et V = validé :", "A → V", "V → A", "A ∧ V", "¬A → V", "Valider est une condition nécessaire à l'admission, donc A → V."),
                    $makeQuestion("P ↔ Q signifie :", "P si et seulement si Q.", "P seulement.", "P ou Q mais pas les deux.", "Non P et non Q.", "L'équivalence affirme que P et Q s'impliquent mutuellement."),
                    $makeQuestion("Quelle formule traduit « Ni P ni Q » ?", "¬P ∧ ¬Q", "P ∨ Q", "¬P ∨ Q", "P → ¬Q", "« Ni P ni Q » signifie que P est fausse et que Q est fausse."),
                    $makeQuestion("Un logiciel autorise une action si utilisateur connecté ET droit administrateur. Quand l'action est-elle autorisée ?", "Quand les deux conditions sont vraies.", "Quand seule la première est vraie.", "Quand seule la seconde est vraie.", "Quand les deux sont fausses.", "Le ET logique exige que les deux conditions soient satisfaites."),
                    $makeQuestion("Une règle dit « Si le paiement est accepté, alors la commande est confirmée ». Quelle affirmation est garantie ?", "Paiement accepté implique commande confirmée.", "Commande confirmée implique toujours paiement accepté.", "Paiement refusé implique commande confirmée.", "La commande est toujours refusée.", "Il faut respecter le sens de l'implication donnée ; sa converse n'est pas automatiquement vraie."),
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
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];
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
}
