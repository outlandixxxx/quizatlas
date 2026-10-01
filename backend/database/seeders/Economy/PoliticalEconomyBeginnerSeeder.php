<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PoliticalEconomyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'political-economy')->first();

        if (!$subject) {
            $this->command?->warn("Subject 'political-economy' not found. Seeder skipped.");
            return;
        }

        $quizzes = [
            [
                'title' => 'Introduction à l’économie politique',
                'description' => 'Découvrez les liens entre économie, institutions et décisions collectives.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    self::q('Quel est l’objet principal de l’économie politique ?', 'Étudier les relations entre l’économie et les choix collectifs', ['Étudier uniquement la comptabilité des entreprises', 'Décrire seulement les phénomènes météorologiques', 'Analyser exclusivement les goûts artistiques'], 'Elle examine notamment comment les institutions et les décisions publiques influencent la production, la répartition et les échanges.'),
                    self::q('Que désigne généralement une institution en économie politique ?', 'Une règle ou une organisation qui encadre les comportements', ['Un produit vendu sur un marché', 'Une variation quotidienne des prix', 'Une ressource naturelle uniquement'], 'Les institutions comprennent des règles formelles et informelles qui structurent les interactions économiques et politiques.'),
                    self::q('Quel exemple correspond à une institution formelle ?', 'Une loi encadrant les contrats', ['Une préférence personnelle', 'Une habitude de consommation individuelle', 'Une mode passagère'], 'Les lois sont des règles écrites adoptées par des autorités reconnues.'),
                    self::q('Pourquoi les décisions politiques peuvent-elles avoir des effets économiques ?', 'Parce qu’elles modifient les règles, les dépenses ou les prélèvements', ['Parce qu’elles suppriment toujours la rareté', 'Parce qu’elles rendent tous les biens gratuits', 'Parce qu’elles éliminent tout échange'], 'Les politiques publiques peuvent agir sur les incitations, les revenus, les coûts et l’accès aux biens collectifs.'),
                    self::q('Que signifie le terme « intérêt collectif » ?', 'Un objectif concernant la société ou une communauté', ['Le bénéfice d’une seule entreprise dans tous les cas', 'Le revenu d’un seul consommateur', 'Le prix d’un produit particulier'], 'L’intérêt collectif renvoie à des objectifs ou besoins partagés, même si les citoyens peuvent être en désaccord sur leur définition.'),
                    self::q('Quel acteur prend des décisions publiques dans un pays ?', 'Les autorités publiques', ['Uniquement les consommateurs étrangers', 'Seulement les détaillants', 'Les organismes météorologiques'], 'Les autorités publiques, selon les institutions du pays, élaborent et mettent en œuvre des décisions collectives.'),
                    self::q('Que cherche à expliquer l’analyse des institutions ?', 'Comment les règles influencent les comportements et les résultats', ['Comment choisir une couleur de produit', 'Comment prévoir chaque événement avec certitude', 'Comment supprimer tous les besoins humains'], 'Les règles peuvent modifier les incitations et les possibilités offertes aux acteurs économiques.'),
                    self::q('Quel est un exemple de choix collectif ?', 'Décider du financement d’une école publique', ['Choisir son petit-déjeuner personnel', 'Acheter un vêtement pour soi', 'Sélectionner une chanson à écouter seul'], 'Le financement d’une école publique concerne une décision collective et l’utilisation de ressources publiques.'),
                    self::q('Pourquoi l’économie politique s’intéresse-t-elle au pouvoir ?', 'Parce que le pouvoir peut influencer les décisions et la répartition des ressources', ['Parce que le pouvoir remplace toutes les ressources', 'Parce que le pouvoir rend les marchés inexistants', 'Parce que le pouvoir n’a jamais d’effet économique'], 'Les rapports de pouvoir peuvent influencer les règles, les politiques et la distribution des avantages et des coûts.'),
                    self::q('Quelle affirmation décrit le mieux une approche d’économie politique ?', 'Elle étudie les interactions entre intérêts économiques et décisions politiques', ['Elle étudie uniquement les opérations mathématiques', 'Elle se limite aux phénomènes biologiques', 'Elle traite seulement des stratégies publicitaires'], 'Cette approche relie les comportements économiques au cadre politique et institutionnel.'),
                ],
            ],
            [
                'title' => 'État, marché et biens collectifs',
                'description' => 'Comprenez les rôles possibles de l’État et les caractéristiques des biens collectifs.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    self::q('Quel est un rôle économique courant de l’État ?', 'Fournir certains services collectifs et établir des règles', ['Fixer personnellement chaque choix privé', 'Éliminer toute activité marchande', 'Garantir un profit à chaque entreprise'], 'L’État peut fournir des services, établir des règles et intervenir lorsque des problèmes collectifs se présentent.'),
                    self::q('Quelle caractéristique correspond à un bien public pur ?', 'Il est non rival et difficilement excluable', ['Il est toujours vendu à l’unité', 'Sa consommation réduit nécessairement celle des autres', 'Il est réservé à un seul acheteur'], 'La non-rivalité signifie que l’usage par une personne ne réduit pas celui des autres; la non-exclusion est difficile ou coûteuse.'),
                    self::q('Lequel est souvent cité comme exemple de bien public ?', 'L’éclairage public d’une rue', ['Une paire de chaussures', 'Un repas au restaurant', 'Un téléphone personnel'], 'L’éclairage d’une rue peut profiter simultanément à de nombreuses personnes sans exclusion facile.'),
                    self::q('Que désigne une externalité négative ?', 'Un coût imposé à des tiers sans compensation directe', ['Un bénéfice reçu par le producteur uniquement', 'Une baisse volontaire du prix', 'Une hausse de salaire automatique'], 'La pollution peut imposer des coûts à des personnes qui ne participent pas directement à la transaction.'),
                    self::q('Quel instrument peut contribuer à réduire une externalité négative ?', 'Une taxe liée au dommage causé', ['Une subvention à toute pollution', 'La suppression de toute information', 'L’interdiction de mesurer les émissions'], 'Une taxe bien conçue peut intégrer une partie du coût social dans le coût privé de l’activité.'),
                    self::q('Que signifie la redistribution des revenus ?', 'Modifier la répartition des revenus par des prélèvements et des transferts', ['Échanger uniquement des devises étrangères', 'Augmenter tous les prix de façon identique', 'Remplacer les salaires par des biens'], 'Les impôts et les prestations peuvent modifier les revenus disponibles des ménages.'),
                    self::q('Quel est un exemple de dépense publique ?', 'La construction d’un hôpital public', ['L’achat privé d’un ordinateur', 'Le paiement d’un repas familial', 'L’épargne personnelle d’un salarié'], 'La construction d’un hôpital financé par les autorités constitue une dépense publique.'),
                    self::q('Pourquoi un marché peut-il ne pas fournir assez d’un bien public ?', 'Parce qu’il est difficile de faire payer chaque bénéficiaire', ['Parce que les biens publics n’ont aucune utilité', 'Parce que les consommateurs ne prennent jamais de décisions', 'Parce que les biens publics sont toujours abondants'], 'Le problème du passager clandestin peut réduire les incitations à financer volontairement le bien.'),
                    self::q('Que vise généralement une réglementation économique ?', 'Encadrer certaines activités et limiter des risques ou abus', ['Remplacer toute décision individuelle', 'Assurer que chaque prix reste inchangé pour toujours', 'Interdire toute innovation'], 'La réglementation fixe des règles afin d’atteindre des objectifs tels que la sécurité, la concurrence ou la protection des consommateurs.'),
                    self::q('Quel compromis peut accompagner une politique publique ?', 'Un objectif collectif peut entraîner des coûts ou des effets secondaires', ['Toute politique est sans coût', 'Les ressources publiques sont illimitées', 'Les décisions publiques n’affectent jamais les individus'], 'Les politiques utilisent des ressources rares et peuvent produire des effets différents selon les groupes.'),
                ],
            ],
            [
                'title' => 'Vote et décisions collectives',
                'description' => 'Explorez les mécanismes de vote et les difficultés du choix collectif.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    self::q('À quoi sert principalement une élection dans un système représentatif ?', 'Permettre aux citoyens de choisir leurs représentants', ['Fixer directement chaque prix de marché', 'Supprimer les institutions', 'Remplacer toutes les lois par des sondages'], 'Les élections permettent aux citoyens de sélectionner des représentants selon des règles établies.'),
                    self::q('Que signifie la règle de la majorité simple ?', 'L’option qui obtient plus de voix que chacune des autres l’emporte', ['Toute option doit obtenir 100 % des voix', 'Le choix revient toujours au candidat le plus âgé', 'Les votes ne sont pas comptés'], 'Dans une décision à deux options, la majorité simple signifie généralement plus de la moitié des suffrages exprimés.'),
                    self::q('Qu’est-ce qu’un problème d’action collective ?', 'Une difficulté à coordonner des personnes autour d’un objectif commun', ['Une décision prise par une seule personne sans interaction', 'Une hausse automatique de productivité', 'Une transaction toujours bénéfique à tous'], 'Même si un objectif est partagé, chacun peut avoir des incitations à laisser les autres supporter les coûts.'),
                    self::q('Que désigne le comportement de passager clandestin ?', 'Profiter d’un avantage collectif sans contribuer à son financement', ['Payer volontairement sa part', 'Produire un bien privé pour le marché', 'Participer à une consultation publique'], 'Le passager clandestin bénéficie du résultat collectif sans contribuer comme les autres, lorsque l’exclusion est difficile.'),
                    self::q('Pourquoi les préférences des citoyens peuvent-elles diverger ?', 'Parce que leurs besoins, revenus et priorités diffèrent', ['Parce que tous les citoyens ont toujours les mêmes intérêts', 'Parce que les ressources sont infinies', 'Parce que les décisions collectives sont sans conséquence'], 'Les citoyens peuvent évaluer différemment les coûts et bénéfices d’une politique selon leur situation.'),
                    self::q('Quel est l’objectif d’une consultation publique ?', 'Recueillir des avis sur une décision ou un projet', ['Garantir que tous les avis seront identiques', 'Remplacer automatiquement une élection', 'Supprimer les informations du projet'], 'La consultation permet aux autorités de recueillir des observations, sans nécessairement rendre chaque avis contraignant.'),
                    self::q('Qu’est-ce qu’un compromis politique ?', 'Un accord qui combine partiellement des positions différentes', ['Une décision qui satisfait nécessairement tout le monde', 'Une absence totale de négociation', 'Une règle sans aucun coût'], 'Un compromis peut rapprocher des positions, mais chaque partie peut devoir accepter des concessions.'),
                    self::q('Quel risque existe lorsque les citoyens disposent de peu d’informations ?', 'Leurs choix peuvent reposer sur une compréhension incomplète des enjeux', ['Les décisions deviennent toujours parfaitement efficaces', 'Les coûts publics disparaissent', 'Les préférences deviennent identiques'], 'Une information limitée peut compliquer l’évaluation des propositions et de leurs conséquences.'),
                    self::q('Quel élément favorise une décision collective éclairée ?', 'L’accès à des informations fiables et compréhensibles', ['La dissimulation systématique des coûts', 'L’absence de débat', 'La suppression des données pertinentes'], 'Des informations accessibles aident les citoyens à comparer les objectifs, les coûts et les effets attendus.'),
                    self::q('Pourquoi les règles de vote sont-elles importantes ?', 'Elles déterminent comment les préférences sont transformées en décision', ['Elles garantissent que chacun préfère le même résultat', 'Elles suppriment les désaccords', 'Elles rendent les ressources illimitées'], 'Les règles de vote influencent la manière dont les choix individuels aboutissent à une décision collective.'),
                ],
            ],
            [
                'title' => 'Intérêts, groupes de pression et incitations',
                'description' => 'Identifiez les intérêts organisés, les incitations et les risques de recherche de rente.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    self::q('Qu’est-ce qu’un groupe de pression ?', 'Un groupe qui cherche à influencer les décisions publiques', ['Un groupe qui fixe tous les prix du pays', 'Une institution météorologique', 'Une entreprise sans activité organisée'], 'Un groupe de pression défend des intérêts ou des causes auprès des décideurs publics.'),
                    self::q('Quel exemple correspond à un groupe d’intérêt économique ?', 'Une association professionnelle qui défend ses membres', ['Un consommateur qui choisit un fruit', 'Un phénomène naturel', 'Un produit vendu en magasin'], 'Une association professionnelle peut chercher à influencer les règles qui concernent son secteur.'),
                    self::q('Que signifie une incitation ?', 'Un avantage ou un coût qui peut modifier un comportement', ['Une règle qui n’a aucun effet possible', 'Une ressource toujours gratuite', 'Une préférence nécessairement innée'], 'Les acteurs peuvent adapter leurs décisions lorsque les coûts ou les bénéfices changent.'),
                    self::q('Que désigne la recherche de rente ?', 'Chercher à obtenir un avantage économique par l’influence sur les règles plutôt que par la création de valeur', ['Améliorer un produit pour satisfaire les clients', 'Former des salariés à une nouvelle compétence', 'Réduire les déchets de production'], 'La recherche de rente vise des avantages protégés ou transférés, parfois au détriment de l’efficacité collective.'),
                    self::q('Quel risque peut découler d’un conflit d’intérêts ?', 'Une décision peut favoriser un intérêt privé au détriment de la mission publique', ['La disparition automatique de toute règle', 'La baisse certaine de tous les prix', 'L’augmentation garantie de la concurrence'], 'Un conflit d’intérêts peut compromettre l’impartialité si un intérêt personnel influence une décision officielle.'),
                    self::q('Pourquoi la transparence des décisions publiques est-elle utile ?', 'Elle facilite le contrôle et la compréhension des décisions', ['Elle garantit l’absence de tout désaccord', 'Elle supprime les coûts administratifs dans tous les cas', 'Elle remplace toutes les institutions'], 'La transparence permet aux citoyens et aux organismes de contrôle d’examiner les décisions et leurs justifications.'),
                    self::q('Quel mécanisme peut limiter les abus de pouvoir ?', 'Des contrôles indépendants et des règles de responsabilité', ['L’absence de toute vérification', 'La suppression des documents publics', 'La concentration sans limite des décisions'], 'Les mécanismes de contrôle contribuent à détecter les abus et à demander des comptes aux responsables.'),
                    self::q('Comment un lobby peut-il agir légalement ?', 'En transmettant des arguments et des informations aux décideurs', ['En remplaçant les résultats d’une élection', 'En imposant seul une loi', 'En supprimant le débat public'], 'Le lobbying peut prendre la forme de rencontres ou de contributions; son encadrement varie selon les pays.'),
                    self::q('Quel problème peut apparaître si un petit groupe reçoit un avantage concentré et que les coûts sont répartis sur beaucoup de personnes ?', 'Le groupe bénéficiaire peut être plus fortement mobilisé', ['Tous les citoyens auront nécessairement la même motivation', 'L’avantage disparaîtra toujours immédiatement', 'Les coûts deviennent inexistants'], 'Les bénéficiaires concentrés ont parfois une incitation plus forte à s’organiser que les personnes qui supportent chacune un faible coût.'),
                    self::q('Quel principe contribue à limiter la corruption ?', 'Des procédures claires, contrôlables et appliquées de façon impartiale', ['Des décisions secrètes sans contrôle', 'L’absence de sanctions', 'La suppression de la traçabilité'], 'Des procédures transparentes, des contrôles et des sanctions crédibles peuvent réduire les possibilités de corruption.'),
                ],
            ],
            [
                'title' => 'Institutions, inégalités et politiques publiques',
                'description' => 'Révisez les liens entre institutions, répartition des ressources et choix publics.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    self::q('Que mesure généralement une inégalité de revenu ?', 'La différence de répartition des revenus entre personnes ou ménages', ['Le nombre de produits dans un magasin', 'La quantité de pluie annuelle', 'La distance entre deux villes'], 'Les indicateurs d’inégalité décrivent comment les revenus sont répartis dans une population.'),
                    self::q('Quel est un objectif possible d’une politique de redistribution ?', 'Réduire certaines inégalités de revenu disponible', ['Rendre tous les prix identiques', 'Supprimer toute activité privée', 'Garantir le même métier à chacun'], 'La redistribution par les impôts et transferts peut réduire les écarts de revenu disponible.'),
                    self::q('Que signifie la progressivité d’un impôt sur le revenu ?', 'Le taux moyen d’imposition augmente avec le revenu imposable', ['Le montant payé est identique pour tous', 'Le taux diminue toujours quand le revenu augmente', 'L’impôt ne dépend jamais du revenu'], 'Dans un système progressif, les revenus plus élevés supportent généralement un taux moyen plus élevé.'),
                    self::q('Pourquoi les institutions peuvent-elles influencer la croissance économique ?', 'Elles contribuent à définir les règles de propriété, les contrats et la confiance', ['Elles déterminent seules la météo', 'Elles rendent le travail inutile', 'Elles éliminent toute incertitude'], 'Des institutions prévisibles peuvent faciliter l’investissement, les échanges et la coopération.'),
                    self::q('Que désigne la sécurité des droits de propriété ?', 'La protection reconnue des droits sur les biens et leur usage', ['L’interdiction de posséder des biens', 'La garantie que les biens n’ont aucun prix', 'La suppression de tous les contrats'], 'Des droits de propriété clairement définis et protégés peuvent soutenir l’investissement et les échanges.'),
                    self::q('Quel est un exemple de politique sociale ?', 'Une aide financière destinée aux ménages éligibles', ['Une campagne publicitaire privée', 'Une décision individuelle d’achat', 'Une variation du taux de change sans intervention publique'], 'Les aides sociales visent notamment à soutenir les personnes ou ménages répondant à des critères définis.'),
                    self::q('Pourquoi évaluer une politique publique après sa mise en œuvre ?', 'Pour examiner ses résultats et ajuster les mesures si nécessaire', ['Pour garantir qu’elle ne coûte rien', 'Pour éviter toute collecte de données', 'Pour empêcher toute comparaison'], 'L’évaluation compare les objectifs, les moyens et les résultats afin d’améliorer les décisions futures.'),
                    self::q('Qu’est-ce qu’un indicateur de pauvreté ?', 'Une mesure permettant d’estimer la situation de personnes sous un seuil ou selon des critères', ['Un indice du prix d’un seul produit', 'Une mesure du nombre de commerces', 'Une prévision météorologique'], 'Les indicateurs de pauvreté utilisent des seuils monétaires ou des dimensions complémentaires selon la méthode retenue.'),
                    self::q('Quel arbitrage peut exister dans une politique économique ?', 'La recherche d’équité peut nécessiter des ressources et modifier certaines incitations', ['L’équité et les coûts n’ont jamais de lien', 'Toute mesure produit uniquement des bénéfices', 'Les ressources publiques sont illimitées'], 'Les politiques doivent souvent considérer simultanément leurs objectifs d’équité, leur financement et leurs effets sur les comportements.'),
                    self::q('Quelle proposition décrit une institution démocratique ?', 'Une règle ou un organe permettant la participation et le contrôle des autorités', ['Une entreprise qui vend des biens', 'Une préférence individuelle sans cadre commun', 'Un marché sans aucune règle'], 'Les institutions démocratiques organisent notamment la représentation, la participation et les mécanismes de contrôle du pouvoir.'),
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'difficulty' => 'Beginner',
                    'owner_id' => null,
                    'is_active' => true,
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    ['quiz_id' => $quiz->id, 'question' => $questionData['question']],
                    [
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                        'order' => $index + 1,
                    ]
                );

                $question->choices()->delete();
                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $choiceIndex => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choiceData['text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }

    private static function q(string $question, string $correct, array $incorrect, string $explanation): array
    {
        $choices = [['text' => $correct, 'is_correct' => true]];
        foreach ($incorrect as $choice) {
            $choices[] = ['text' => $choice, 'is_correct' => false];
        }

        return compact('question', 'choices', 'explanation');
    }
}
