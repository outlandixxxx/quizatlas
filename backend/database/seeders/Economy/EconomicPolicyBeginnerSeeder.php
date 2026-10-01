<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicPolicyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-policy')->first();
        if (!$subject) {
            $this->command?->warn("Subject 'economic-policy' not found; seeder skipped.");
            return;
        }

        $quizzes = [
            [
                'title' => 'Introduction à la politique économique',
                'description' => 'Notions de base, objectifs et instruments de la politique économique.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    $this->q('Quel est l’objectif général d’une politique économique ?', 'Orienter l’activité économique vers des objectifs collectifs', ['Remplacer toutes les entreprises privées', 'Supprimer les échanges internationaux', 'Fixer le prix de chaque produit'], 'La politique économique regroupe les actions publiques visant certains résultats économiques et sociaux.'),
                    $this->q('Lequel est un objectif macroéconomique courant ?', 'La stabilité des prix', ['La hausse obligatoire de chaque salaire', 'La disparition de toute importation', 'La fixation du prix de chaque action'], 'La stabilité des prix limite les variations générales du niveau des prix.'),
                    $this->q('Que désigne la croissance économique ?', 'L’augmentation durable de la production réelle', ['La hausse ponctuelle de tous les prix', 'La baisse du nombre d’entreprises', 'L’augmentation des importations uniquement'], 'La croissance correspond à une augmentation de la production, généralement mesurée par le PIB réel.'),
                    $this->q('Quel indicateur mesure souvent l’évolution générale des prix ?', 'L’indice des prix à la consommation', ['Le taux de natalité', 'Le nombre de communes', 'Le solde migratoire'], 'L’IPC suit l’évolution du prix d’un panier représentatif de biens et services consommés.'),
                    $this->q('Que signifie le plein emploi dans les objectifs économiques ?', 'Une situation où le chômage involontaire est faible', ['Une situation où personne ne change de travail', 'L’obligation pour tous d’avoir deux emplois', 'La suppression de toute formation'], 'Le plein emploi ne signifie pas nécessairement un chômage nul, mais un niveau faible compatible avec le fonctionnement du marché du travail.'),
                    $this->q('Quel acteur décide généralement du budget de l’État ?', 'Les autorités publiques selon les procédures légales', ['Les ménages individuellement', 'Les entreprises étrangères', 'Les syndicats seuls'], 'Le budget public est préparé et adopté par les institutions compétentes selon les règles du pays.'),
                    $this->q('À quoi sert une politique économique ?', 'À agir sur l’activité et les résultats économiques', ['À garantir un bénéfice à chaque entreprise', 'À empêcher tout changement de prix', 'À remplacer les décisions des ménages'], 'Les politiques économiques cherchent à influencer l’activité, l’emploi, les prix ou la répartition des revenus.'),
                    $this->q('Quel est un exemple d’objectif social associé à la politique économique ?', 'Réduire la pauvreté', ['Augmenter systématiquement les prix', 'Supprimer les services publics', 'Réduire toute activité productive'], 'La réduction de la pauvreté fait partie des objectifs sociaux que peuvent poursuivre les pouvoirs publics.'),
                    $this->q('Pourquoi les objectifs économiques peuvent-ils parfois entrer en tension ?', 'Parce qu’une mesure peut favoriser un objectif tout en en compliquant un autre', ['Parce que les objectifs sont toujours identiques', 'Parce que les ressources sont infinies', 'Parce que les prix ne changent jamais'], 'Par exemple, une relance peut soutenir l’emploi mais aussi accentuer les tensions sur les prix.'),
                    $this->q('Qu’est-ce qu’un indicateur économique ?', 'Une mesure utilisée pour décrire un phénomène économique', ['Une règle de grammaire', 'Un document d’identité', 'Une prévision toujours exacte'], 'Les indicateurs comme le PIB, l’inflation ou le chômage permettent de suivre la situation économique.'),
                ],
            ],
            [
                'title' => 'Politique budgétaire et dépenses publiques',
                'description' => 'Comprendre les recettes, les dépenses et le solde budgétaire.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    $this->q('Quelles sont les deux grandes composantes du budget public ?', 'Les recettes et les dépenses', ['Les exportations et les importations', 'Les salaires et les loisirs', 'Les prix et les quantités'], 'Le budget présente les ressources publiques et les dépenses prévues.'),
                    $this->q('Quelle recette constitue une source importante de financement public ?', 'Les impôts et taxes', ['Les dépenses des ménages', 'Les stocks des magasins', 'Les heures de loisir'], 'Les prélèvements obligatoires financent notamment les services et équipements publics.'),
                    $this->q('Que signifie un déficit budgétaire ?', 'Les dépenses publiques dépassent les recettes sur la période', ['Les recettes dépassent les dépenses', 'Les recettes et dépenses sont nulles', 'Les exportations dépassent les importations'], 'Un déficit apparaît lorsque les dépenses sont supérieures aux recettes budgétaires.'),
                    $this->q('Que signifie un excédent budgétaire ?', 'Les recettes publiques dépassent les dépenses', ['Les dépenses dépassent toujours les recettes', 'L’État n’a aucune recette', 'Le chômage est nul'], 'Un excédent correspond à un solde positif du budget.'),
                    $this->q('Quel est un exemple de dépense publique ?', 'La construction d’une école publique', ['L’achat privé d’un téléphone', 'Le paiement d’un repas familial', 'L’épargne personnelle'], 'Les investissements publics peuvent financer des infrastructures et des équipements collectifs.'),
                    $this->q('Que peut faire une politique budgétaire expansionniste en période de ralentissement ?', 'Augmenter certaines dépenses ou réduire certains impôts', ['Réduire obligatoirement toutes les dépenses', 'Interdire les achats des ménages', 'Supprimer la monnaie'], 'Une impulsion budgétaire peut soutenir la demande globale en augmentant les dépenses ou en diminuant les prélèvements.'),
                    $this->q('Quel effet une hausse des achats publics peut-elle avoir à court terme ?', 'Soutenir la demande et la production', ['Faire disparaître automatiquement l’inflation', 'Réduire nécessairement la production', 'Supprimer les besoins des ménages'], 'Les achats publics constituent une composante de la demande globale.'),
                    $this->q('Comment l’État finance-t-il souvent un déficit budgétaire ?', 'En empruntant', ['En supprimant tous les prix', 'En interdisant l’épargne', 'En annulant les contrats privés'], 'L’emprunt public permet de couvrir temporairement l’écart entre dépenses et recettes.'),
                    $this->q('Qu’est-ce qu’un investissement public ?', 'Une dépense destinée à créer ou améliorer un actif collectif', ['Une dépense uniquement consacrée aux loisirs privés', 'Une taxe sur les importations', 'Une baisse de la population active'], 'Les routes, écoles ou réseaux peuvent constituer des investissements publics.'),
                    $this->q('Pourquoi évaluer les dépenses publiques ?', 'Pour apprécier leurs coûts et leurs effets', ['Pour garantir que toute dépense réussit', 'Pour éviter toute collecte de données', 'Pour supprimer les objectifs publics'], 'L’évaluation aide à comparer les ressources engagées et les résultats obtenus.'),
                ],
            ],
            [
                'title' => 'Politique monétaire et inflation',
                'description' => 'Rôle de la banque centrale, taux d’intérêt et stabilité des prix.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    $this->q('Quel est l’un des rôles principaux d’une banque centrale ?', 'Conduire la politique monétaire', ['Gérer les budgets de chaque famille', 'Produire tous les biens du pays', 'Fixer les notes scolaires'], 'La banque centrale agit sur les conditions monétaires et peut viser la stabilité des prix.'),
                    $this->q('Que désigne l’inflation ?', 'Une hausse générale et durable des prix', ['La baisse du prix d’un seul produit', 'La hausse de la production réelle', 'La diminution de la population'], 'L’inflation concerne le niveau général des prix, et non un seul prix isolé.'),
                    $this->q('Que peut provoquer une hausse du taux directeur ?', 'Un renchérissement du crédit', ['La gratuité automatique des prêts', 'La disparition de l’épargne', 'La baisse certaine de tous les prix'], 'Des taux directeurs plus élevés tendent à augmenter les taux appliqués aux emprunteurs.'),
                    $this->q('Pourquoi une banque centrale peut-elle relever ses taux en période d’inflation élevée ?', 'Pour modérer la demande et les pressions sur les prix', ['Pour augmenter automatiquement les salaires', 'Pour supprimer les impôts', 'Pour accélérer toutes les dépenses'], 'Des conditions de crédit plus strictes peuvent ralentir la demande et contribuer à réduire l’inflation.'),
                    $this->q('Quel est l’effet possible d’une baisse des taux d’intérêt ?', 'Rendre certains emprunts moins coûteux', ['Rendre tout emprunt impossible', 'Supprimer la monnaie en circulation', 'Garantir une hausse immédiate des exportations'], 'Des taux plus bas peuvent encourager le crédit, la consommation et l’investissement.'),
                    $this->q('Que mesure le pouvoir d’achat ?', 'La quantité de biens et services accessible avec un revenu', ['Le nombre de billets dans un portefeuille', 'Le total des exportations', 'Le taux de change uniquement'], 'Le pouvoir d’achat dépend du revenu et du niveau des prix.'),
                    $this->q('Si les prix augmentent plus vite que le revenu nominal, que se passe-t-il généralement ?', 'Le pouvoir d’achat diminue', ['Le pouvoir d’achat augmente toujours', 'Le revenu réel devient infini', 'Le coût de la vie disparaît'], 'Lorsque les prix progressent plus vite que le revenu, le revenu permet d’acheter moins.'),
                    $this->q('Quel canal transmet une partie de la politique monétaire à l’économie ?', 'Les conditions de crédit', ['La météo', 'Le calendrier scolaire', 'La superficie du territoire'], 'Les taux et les conditions de crédit influencent les décisions de consommation et d’investissement.'),
                    $this->q('Qu’est-ce que la stabilité des prix ?', 'Une évolution modérée et prévisible du niveau général des prix', ['Des prix toujours égaux à zéro', 'Une hausse rapide et permanente des prix', 'Un prix unique pour tous les produits'], 'La stabilité des prix vise à éviter une inflation excessive ou une déflation persistante.'),
                    $this->q('Pourquoi la politique monétaire peut-elle agir avec un délai ?', 'Parce que les décisions économiques prennent du temps à réagir', ['Parce que les prix sont toujours fixes', 'Parce que les banques n’accordent jamais de crédit', 'Parce que les ménages ne dépensent rien'], 'Les effets des taux sur le crédit, la demande et les prix se diffusent progressivement.'),
                ],
            ],
            [
                'title' => 'Emploi, chômage et politiques de soutien',
                'description' => 'Mesures économiques pouvant soutenir l’emploi et les compétences.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    $this->q('Qui est généralement compté comme chômeur au sens statistique ?', 'Une personne sans emploi, disponible et en recherche active', ['Toute personne qui étudie', 'Toute personne retraitée', 'Toute personne qui travaille à temps plein'], 'Les définitions statistiques du chômage reposent notamment sur l’absence d’emploi, la disponibilité et la recherche.'),
                    $this->q('Quelle mesure peut aider les personnes à retrouver un emploi ?', 'La formation professionnelle', ['L’interdiction de changer de métier', 'La suppression des offres d’emploi', 'La fermeture des centres de formation'], 'La formation peut améliorer les compétences et faciliter l’adaptation aux besoins des employeurs.'),
                    $this->q('Que désigne le chômage conjoncturel ?', 'Le chômage lié aux fluctuations de l’activité économique', ['Le chômage causé uniquement par la météo', 'Le chômage des personnes retraitées', 'Une hausse générale des prix'], 'Lors d’un ralentissement, les entreprises peuvent réduire leurs embauches ou leurs effectifs.'),
                    $this->q('Quel est un exemple de politique active de l’emploi ?', 'Un accompagnement des demandeurs d’emploi', ['Une hausse automatique de tous les prix', 'La suppression des formations', 'La fermeture des services de placement'], 'Les politiques actives cherchent à faciliter l’accès à l’emploi par l’accompagnement, la formation ou les aides à l’embauche.'),
                    $this->q('Pourquoi les infrastructures peuvent-elles soutenir l’emploi ?', 'Leur construction et leur entretien créent une activité économique', ['Elles suppriment tout besoin de travail', 'Elles font disparaître les entreprises', 'Elles empêchent les échanges'], 'Les projets d’infrastructure mobilisent directement et indirectement des travailleurs.'),
                    $this->q('Que signifie la productivité du travail ?', 'La production réalisée par unité de travail', ['Le nombre de jours fériés', 'Le niveau général des prix', 'Le nombre de consommateurs étrangers'], 'La productivité peut être mesurée par la production par heure travaillée ou par travailleur.'),
                    $this->q('Quel risque peut accompagner une aide à l’embauche mal conçue ?', 'Financer des embauches qui auraient eu lieu sans aide', ['Une disparition certaine de tous les emplois', 'Une baisse automatique des compétences', 'La fin de toute activité économique'], 'L’effet d’aubaine survient lorsque l’aide finance une décision qui aurait été prise de toute façon.'),
                    $this->q('Pourquoi l’accès à la garde d’enfants peut-il influencer l’emploi ?', 'Il peut faciliter la participation au marché du travail', ['Il fixe le taux directeur', 'Il détermine le prix mondial du pétrole', 'Il supprime les besoins de formation'], 'Des services de garde accessibles peuvent aider certains parents à travailler ou à chercher un emploi.'),
                    $this->q('Que cherche à faire une politique de formation ?', 'Adapter ou développer les compétences', ['Fixer les prix de tous les produits', 'Remplacer les entreprises par des écoles', 'Réduire la population active'], 'La formation peut améliorer l’employabilité et accompagner les transformations des métiers.'),
                    $this->q('Pourquoi faut-il distinguer chômage et inactivité ?', 'Les personnes inactives ne sont pas nécessairement disponibles et en recherche d’emploi', ['Les deux termes désignent toujours la même situation', 'Les chômeurs ont tous un emploi', 'Les inactifs sont tous des employeurs'], 'La population active comprend les personnes en emploi et les chômeurs selon la définition statistique.'),
                ],
            ],
            [
                'title' => 'Évaluation et limites des politiques économiques',
                'description' => 'Indicateurs, délais, arbitrages et effets inattendus des mesures publiques.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    $this->q('Pourquoi mesurer les résultats d’une politique économique ?', 'Pour vérifier si les objectifs sont atteints', ['Pour éviter de définir des objectifs', 'Pour garantir un succès à 100 %', 'Pour supprimer toute incertitude'], 'L’évaluation compare les résultats observés aux objectifs et aux ressources mobilisées.'),
                    $this->q('Qu’est-ce qu’un effet inattendu d’une politique ?', 'Une conséquence qui n’était pas l’objectif initial', ['Le résultat prévu dans tous les cas', 'Une donnée sans lien avec la mesure', 'Une dépense toujours nulle'], 'Une mesure peut produire des effets secondaires ou des réactions non anticipées.'),
                    $this->q('Pourquoi comparer une situation avec et sans intervention est-il utile ?', 'Pour mieux estimer l’effet propre de la mesure', ['Pour supprimer les données économiques', 'Pour confondre toutes les causes', 'Pour éviter toute analyse'], 'Une comparaison pertinente aide à distinguer l’effet de la politique des autres évolutions.'),
                    $this->q('Qu’est-ce qu’un arbitrage en politique économique ?', 'Le choix entre plusieurs objectifs ou coûts possibles', ['Une décision sans aucune contrainte', 'Une hausse automatique du PIB', 'Une règle qui interdit toute évaluation'], 'Les ressources étant limitées, les décideurs doivent souvent comparer des objectifs et des coûts.'),
                    $this->q('Pourquoi les politiques économiques peuvent-elles produire leurs effets tardivement ?', 'Les ménages et les entreprises ajustent leurs décisions progressivement', ['Les décisions privées sont instantanées', 'Les indicateurs ne changent jamais', 'Les dépenses publiques n’ont aucun délai'], 'Les décisions de consommation, d’investissement ou d’embauche peuvent réagir avec retard.'),
                    $this->q('Quel indicateur peut aider à suivre l’évolution de l’emploi ?', 'Le taux de chômage', ['Le nombre de jours de pluie', 'La longueur des frontières', 'Le nombre de livres imprimés'], 'Le taux de chômage rapporte le nombre de chômeurs à la population active selon une définition donnée.'),
                    $this->q('Pourquoi faut-il tenir compte de la répartition des revenus ?', 'Parce qu’une moyenne peut masquer des écarts entre les ménages', ['Parce que tous les ménages ont toujours le même revenu', 'Parce que la répartition n’a aucun effet social', 'Parce que les prix sont identiques partout'], 'Des indicateurs de distribution complètent les moyennes et éclairent les inégalités.'),
                    $this->q('Que signifie la soutenabilité de la dette publique ?', 'La capacité à gérer et rembourser la dette dans la durée', ['L’obligation de ne jamais emprunter', 'La hausse permanente des dépenses sans recettes', 'La suppression de tous les impôts'], 'La soutenabilité dépend notamment des taux d’intérêt, de la croissance et des soldes budgétaires futurs.'),
                    $this->q('Pourquoi une politique doit-elle être adaptée au contexte ?', 'Les mêmes mesures peuvent produire des effets différents selon la situation', ['Les économies fonctionnent toutes de façon identique', 'Les besoins publics ne changent jamais', 'Les indicateurs sont inutiles'], 'La conjoncture, les institutions et les caractéristiques locales influencent les effets des mesures.'),
                    $this->q('Quelle source peut fournir des données pour évaluer une politique ?', 'Les statistiques officielles et les enquêtes', ['Les suppositions sans données', 'Les rumeurs uniquement', 'Les préférences d’une seule personne'], 'Les statistiques, enquêtes et études permettent d’étayer l’évaluation et de préciser ses limites.'),
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
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

    private function q(string $question, string $correct, array $incorrect, string $explanation): array
    {
        $choices = [['text' => $correct, 'is_correct' => true]];
        foreach ($incorrect as $choice) {
            $choices[] = ['text' => $choice, 'is_correct' => false];
        }
        return compact('question', 'explanation') + ['choices' => $choices];
    }
}
