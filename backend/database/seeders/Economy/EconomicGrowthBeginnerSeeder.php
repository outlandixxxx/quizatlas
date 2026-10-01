<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicGrowthBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-growth')->first();

        if (!$subject) {
            $this->command?->warn("Subject 'economic-growth' not found. Seeder skipped.");
            return;
        }

        $quizzes = [
            [
                'title' => 'Les notions fondamentales de la croissance économique',
                'description' => 'Découvrez les définitions et les indicateurs de base de la croissance économique.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    self::q('Que désigne généralement la croissance économique ?', ['Une augmentation durable de la production de biens et services', 'Une baisse générale des prix', 'Une hausse du chômage uniquement', 'Une diminution de la population'], 0, 'La croissance économique correspond à l’augmentation de la production réelle d’une économie au fil du temps.'),
                    self::q('Quel indicateur est couramment utilisé pour mesurer la croissance économique ?', ['Le taux de croissance du PIB réel', 'Le nombre de jours fériés', 'Le taux de change seul', 'Le nombre de communes'], 0, 'Le taux de variation du PIB réel permet de mesurer l’évolution du volume de production en neutralisant l’effet des prix.'),
                    self::q('Pourquoi utilise-t-on le PIB réel plutôt que le PIB nominal pour comparer la production dans le temps ?', ['Pour tenir compte de l’évolution des prix', 'Pour compter uniquement les importations', 'Pour exclure les services', 'Pour mesurer directement le bonheur'], 0, 'Le PIB réel corrige l’effet de l’inflation afin de mieux isoler l’évolution des quantités produites.'),
                    self::q('Que signifie un taux de croissance du PIB réel de 3 % ?', ['La production réelle a augmenté de 3 % sur la période', 'Les prix ont nécessairement augmenté de 3 %', 'Le chômage a baissé de 3 points', 'Les exportations représentent 3 % du PIB'], 0, 'Un taux de 3 % indique une hausse de 3 % du PIB réel par rapport à la période précédente.'),
                    self::q('Que mesure le PIB par habitant ?', ['La production moyenne par personne', 'Le revenu exact de chaque ménage', 'Le nombre total d’entreprises', 'La valeur des seules exportations'], 0, 'Le PIB par habitant est le PIB divisé par la population. Il donne une moyenne, pas la répartition des revenus.'),
                    self::q('Une hausse du PIB nominal peut provenir…', ['D’une hausse des quantités produites ou des prix', 'Uniquement d’une hausse des quantités', 'Uniquement d’une baisse des prix', 'Toujours d’une hausse de la productivité'], 0, 'Le PIB nominal est évalué aux prix courants : il peut augmenter avec la production, les prix, ou les deux.'),
                    self::q('Quelle situation correspond à une récession dans une définition courante simplifiée ?', ['Une baisse de l’activité économique pendant plusieurs périodes', 'Une hausse continue de la production', 'Une augmentation ponctuelle des exportations', 'Une stabilité des prix'], 0, 'La récession désigne une contraction notable de l’activité économique; la règle de deux trimestres négatifs est une convention courante, pas une définition universelle.'),
                    self::q('La croissance économique est dite « extensive » lorsqu’elle provient surtout…', ['De l’augmentation des quantités de facteurs utilisés', 'D’une meilleure organisation uniquement', 'D’une baisse du nombre d’heures travaillées', 'D’une diminution du capital'], 0, 'La croissance extensive repose notamment sur davantage de travail ou de capital mobilisé.'),
                    self::q('La croissance est dite « intensive » lorsqu’elle repose principalement sur…', ['Une amélioration de l’efficacité et de la productivité', 'Une augmentation automatique de la population', 'Une hausse des prix seulement', 'Une baisse des compétences'], 0, 'La croissance intensive provient d’une utilisation plus productive des facteurs, par exemple grâce au progrès technique.'),
                    self::q('Le PIB mesure principalement…', ['La valeur des biens et services finaux produits sur un territoire pendant une période', 'La richesse totale accumulée depuis toujours', 'Les seules dépenses publiques', 'La totalité des échanges financiers'], 0, 'Le PIB mesure la production finale réalisée sur le territoire pendant une période donnée.'),
                ],
            ],
            [
                'title' => 'Les facteurs de la croissance économique',
                'description' => 'Identifiez le rôle du travail, du capital, des compétences et de la technologie.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    self::q('Quel exemple représente le capital physique ?', ['Une machine utilisée dans une usine', 'Le niveau de santé d’un salarié', 'Une règle de droit', 'La confiance des consommateurs'], 0, 'Le capital physique comprend les équipements, bâtiments et machines utilisés pour produire.'),
                    self::q('Que désigne le capital humain ?', ['Les connaissances, compétences et capacités des personnes', 'Les bâtiments des entreprises', 'Les réserves de devises', 'Les matières premières uniquement'], 0, 'Le capital humain regroupe notamment l’éducation, les compétences et l’expérience qui améliorent la capacité productive.'),
                    self::q('Comment l’éducation peut-elle contribuer à la croissance ?', ['En renforçant les compétences et la productivité', 'En supprimant automatiquement toute inflation', 'En réduisant toujours la population active', 'En remplaçant toutes les machines'], 0, 'L’éducation peut améliorer les compétences, faciliter l’innovation et accroître la productivité du travail.'),
                    self::q('Quel rôle joue l’investissement dans la croissance ?', ['Il peut augmenter ou moderniser le capital productif', 'Il réduit toujours la capacité de production', 'Il concerne uniquement les achats des ménages', 'Il n’a aucun lien avec la production'], 0, 'L’investissement productif permet d’ajouter ou de renouveler les équipements et infrastructures.'),
                    self::q('La productivité du travail mesure généralement…', ['La production réalisée par unité de travail', 'Le nombre de consommateurs par entreprise', 'Le taux d’inflation annuel', 'La valeur des importations'], 0, 'La productivité du travail rapporte la production à une quantité de travail, par exemple par heure travaillée.'),
                    self::q('Le progrès technique peut soutenir la croissance en…', ['Permettant de produire davantage ou mieux avec les mêmes ressources', 'Faisant nécessairement disparaître toute dépense', 'Réduisant toujours la qualité', 'Supprimant le besoin de compétences'], 0, 'Les innovations techniques et organisationnelles peuvent améliorer l’efficacité productive.'),
                    self::q('Une infrastructure de transport efficace peut favoriser la croissance parce qu’elle…', ['Réduit certains coûts et facilite les échanges', 'Empêche la circulation des marchandises', 'Remplace toutes les entreprises', 'Garantit des profits identiques'], 0, 'Les routes, ports et réseaux fiables facilitent la mobilité des personnes et des biens et peuvent réduire les coûts.'),
                    self::q('Pourquoi la santé de la population peut-elle influencer la croissance ?', ['Elle peut améliorer la capacité à travailler et à apprendre', 'Elle détermine seule le prix des produits', 'Elle rend inutile l’investissement', 'Elle supprime les cycles économiques'], 0, 'Une meilleure santé peut favoriser la participation au travail, l’apprentissage et la productivité.'),
                    self::q('Quel exemple illustre une amélioration de l’organisation productive ?', ['Réorganiser les tâches pour réduire les pertes de temps', 'Augmenter les prix sans changer la production', 'Stocker des produits inutilisés sans raison', 'Réduire la formation de tous les salariés'], 0, 'Une meilleure organisation peut permettre d’obtenir davantage de production avec les mêmes ressources.'),
                    self::q('Pourquoi les ressources naturelles ne suffisent-elles pas à garantir une croissance durable ?', ['Leur utilisation dépend aussi des institutions, des compétences et des choix d’investissement', 'Elles rendent l’éducation inutile', 'Elles assurent toujours une répartition égale des revenus', 'Elles font disparaître les contraintes environnementales'], 0, 'Les ressources peuvent contribuer à la production, mais leur transformation en développement dépend de nombreux facteurs économiques et institutionnels.'),
                ],
            ],
            [
                'title' => 'Productivité et progrès technique',
                'description' => 'Comprenez les gains de productivité, l’innovation et leurs effets économiques.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    self::q('Une entreprise produit 120 unités avec 10 travailleurs. Sa production par travailleur est de…', ['12 unités', '10 unités', '1200 unités', '0,12 unité'], 0, 'La productivité par travailleur est 120 ÷ 10 = 12 unités.'),
                    self::q('Si la production augmente alors que le nombre d’heures travaillées reste stable, la productivité horaire…', ['Augmente', 'Diminue nécessairement', 'Reste toujours nulle', 'Ne peut pas être calculée'], 0, 'Avec davantage de production pour le même volume d’heures, la production par heure augmente.'),
                    self::q('Qu’appelle-t-on innovation de procédé ?', ['Une nouvelle méthode de production', 'La création d’un nouveau slogan publicitaire uniquement', 'Une hausse générale des impôts', 'Une variation du taux de change'], 0, 'L’innovation de procédé concerne la manière de produire ou de distribuer un bien ou service.'),
                    self::q('Quel est un effet possible de l’automatisation ?', ['Une hausse de la productivité pour certaines tâches', 'La disparition certaine de tous les emplois', 'Une baisse automatique de toute production', 'La suppression de la demande'], 0, 'L’automatisation peut accroître la productivité de certaines tâches, tout en transformant les emplois et les compétences demandées.'),
                    self::q('Pourquoi les entreprises investissent-elles parfois dans la recherche et développement ?', ['Pour créer ou améliorer des produits et procédés', 'Pour empêcher toute innovation', 'Pour fixer directement la population', 'Pour remplacer les comptes nationaux'], 0, 'La recherche et développement vise notamment à produire des connaissances et des innovations.'),
                    self::q('Qu’est-ce qu’une externalité positive de la connaissance ?', ['Des bénéfices pour d’autres acteurs que celui qui a créé la connaissance', 'Une taxe payée par chaque consommateur', 'Une baisse certaine des salaires', 'Une interdiction de diffuser les idées'], 0, 'Les connaissances peuvent se diffuser et profiter à d’autres entreprises ou personnes sans paiement intégral.'),
                    self::q('Pourquoi la concurrence peut-elle encourager l’innovation ?', ['Les entreprises cherchent à améliorer leurs produits ou réduire leurs coûts', 'Elle garantit que toutes les entreprises innovent au même rythme', 'Elle supprime tout risque commercial', 'Elle empêche les nouveaux produits'], 0, 'La concurrence peut inciter les entreprises à se différencier et à améliorer leur efficacité, même si les effets varient selon les marchés.'),
                    self::q('Une hausse de productivité peut permettre…', ['De produire à moindre coût unitaire, toutes choses égales par ailleurs', 'D’augmenter toujours les coûts unitaires', 'De supprimer la nécessité de vendre', 'De garantir un salaire identique dans toutes les entreprises'], 0, 'Lorsque les autres coûts restent stables, davantage de production par unité de travail peut réduire le coût unitaire.'),
                    self::q('Quelle différence existe entre invention et innovation ?', ['L’invention crée une idée ou une technique; l’innovation la met en application économique', 'Ce sont toujours deux mots strictement identiques', 'L’innovation précède nécessairement toute invention', 'L’invention concerne uniquement la publicité'], 0, 'Une invention peut devenir une innovation lorsqu’elle est mise en œuvre ou diffusée dans une activité économique.'),
                    self::q('Pourquoi les gains de productivité ne se traduisent-ils pas automatiquement par une hausse identique des salaires ?', ['Le partage des gains dépend notamment du marché du travail et du pouvoir de négociation', 'La productivité ne concerne jamais les entreprises', 'Les salaires sont toujours fixés par le PIB', 'Les gains sont obligatoirement versés aux consommateurs'], 0, 'La répartition des gains entre salaires, prix et profits dépend de plusieurs institutions et rapports économiques.'),
                ],
            ],
            [
                'title' => 'Croissance, développement et limites',
                'description' => 'Distinguez croissance et développement et étudiez leurs limites sociales et environnementales.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    self::q('Quelle distinction décrit le mieux croissance et développement ?', ['La croissance mesure l’augmentation de la production; le développement inclut des transformations du bien-être et des capacités', 'Le développement est uniquement la hausse des prix', 'La croissance mesure seulement la santé', 'Les deux notions sont toujours identiques'], 0, 'La croissance est une évolution quantitative de la production, tandis que le développement couvre des dimensions plus larges.'),
                    self::q('Pourquoi le PIB par habitant ne décrit-il pas à lui seul le bien-être ?', ['Il ne renseigne pas complètement sur la répartition des revenus ni sur la qualité de vie', 'Il mesure précisément le bonheur de chaque personne', 'Il inclut directement toutes les activités non rémunérées', 'Il indique le revenu de chaque ménage'], 0, 'Une moyenne ne montre pas les inégalités et le PIB ne mesure pas directement toutes les dimensions du bien-être.'),
                    self::q('Que signifie une croissance inclusive ?', ['Une croissance dont les possibilités et les bénéfices sont largement partagés', 'Une croissance réservée à un seul secteur', 'Une croissance sans aucune activité économique', 'Une hausse du PIB nominal uniquement'], 0, 'La croissance inclusive cherche à élargir la participation aux opportunités économiques et à mieux partager les bénéfices.'),
                    self::q('Pourquoi la croissance peut-elle exercer une pression sur l’environnement ?', ['La production peut consommer des ressources et générer des pollutions', 'Toute production est sans impact écologique', 'La croissance réduit toujours les émissions', 'Les ressources naturelles sont infinies'], 0, 'Selon les techniques et les modes de consommation, l’activité peut utiliser des ressources et produire des déchets ou émissions.'),
                    self::q('Que vise le développement durable ?', ['Répondre aux besoins présents sans compromettre la capacité des générations futures', 'Maximiser uniquement la production à court terme', 'Interdire toute activité économique', 'Remplacer les services publics par des entreprises'], 0, 'Le développement durable cherche à concilier les dimensions économiques, sociales et environnementales dans le temps.'),
                    self::q('Qu’est-ce que la croissance verte ?', ['Une croissance cherchant à réduire les pressions environnementales et à mieux utiliser les ressources', 'Une croissance mesurée uniquement par la couleur des produits', 'Une hausse obligatoire de toutes les émissions', 'Une économie sans innovation'], 0, 'La croissance verte associe l’activité économique à une utilisation plus efficiente des ressources et à la réduction des dommages environnementaux.'),
                    self::q('Un indice de développement humain combine notamment…', ['Santé, éducation et niveau de vie', 'Uniquement les exportations', 'Seulement les recettes fiscales', 'La population et la superficie seulement'], 0, 'L’IDH repose sur des indicateurs liés à la santé, à l’éducation et au niveau de vie.'),
                    self::q('Pourquoi la répartition des revenus importe-t-elle dans l’analyse du développement ?', ['Parce que des moyennes similaires peuvent cacher des niveaux de vie très différents', 'Parce que les inégalités n’ont aucun effet social', 'Parce que le PIB indique le revenu de chacun', 'Parce que la répartition remplace la production'], 0, 'La distribution des revenus aide à comprendre qui bénéficie de l’activité économique et les conditions de vie de la population.'),
                    self::q('Que désigne une croissance potentielle ?', ['Le rythme de production soutenable à moyen terme sans tensions excessives', 'La production maximale atteinte en une seule journée', 'La croissance réelle mesurée chaque mois', 'Le total des recettes d’exportation'], 0, 'La croissance potentielle est une estimation de la capacité de production durable de l’économie.'),
                    self::q('Pourquoi faut-il interpréter les indicateurs économiques avec prudence ?', ['Chaque indicateur éclaire certaines dimensions et en laisse d’autres de côté', 'Un indicateur résume parfaitement toute la société', 'Les données ne changent jamais', 'Les indicateurs sont tous des mesures du bonheur'], 0, 'Les indicateurs sont utiles mais partiels; leur interprétation dépend de leur définition, de leur qualité et du contexte.'),
                ],
            ],
            [
                'title' => 'Modèles simples et politiques de croissance',
                'description' => 'Appliquez des raisonnements élémentaires sur l’épargne, l’investissement et les politiques favorables à la croissance.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    self::q('Dans un modèle simple, l’investissement contribue à la croissance en…', ['Accroissant le stock de capital productif', 'Réduisant nécessairement le capital', 'Faisant disparaître l’épargne', 'Mesurant uniquement les prix'], 0, 'L’investissement ajoute ou renouvelle des équipements et peut accroître les capacités de production.'),
                    self::q('Dans une économie simplifiée sans échanges extérieurs, l’épargne peut financer…', ['L’investissement', 'Uniquement les importations', 'La consommation publique seulement', 'La totalité des salaires automatiquement'], 0, 'Dans une représentation macroéconomique simplifiée, l’épargne contribue au financement de l’investissement via le système financier.'),
                    self::q('Pourquoi la stabilité des règles et des institutions peut-elle favoriser l’investissement ?', ['Elle réduit certaines incertitudes pour les acteurs économiques', 'Elle garantit un profit sans risque', 'Elle supprime tout changement technologique', 'Elle rend les infrastructures inutiles'], 0, 'Des règles prévisibles et appliquées peuvent faciliter les décisions d’investissement à long terme.'),
                    self::q('Quel rôle les infrastructures publiques peuvent-elles jouer dans la croissance ?', ['Soutenir la productivité et connecter les marchés', 'Remplacer toutes les entreprises privées', 'Garantir un taux de croissance précis', 'Empêcher la mobilité des travailleurs'], 0, 'Les infrastructures de transport, d’énergie et de communication peuvent réduire les coûts et faciliter l’activité.'),
                    self::q('Pourquoi l’accès au financement peut-il compter pour les petites entreprises ?', ['Il peut leur permettre d’investir et de développer leur activité', 'Il garantit toujours leur réussite', 'Il supprime la nécessité d’un marché', 'Il remplace toutes les compétences'], 0, 'Le financement peut aider à acheter des équipements, recruter ou innover, sans garantir le succès du projet.'),
                    self::q('Une politique de formation professionnelle peut soutenir la croissance en…', ['Adaptant les compétences aux besoins productifs', 'Réduisant toujours la productivité', 'Fixant les prix de tous les biens', 'Empêchant les changements de métier'], 0, 'La formation peut renforcer les compétences et faciliter l’adaptation aux transformations économiques.'),
                    self::q('Pourquoi la diversification de l’économie peut-elle être utile ?', ['Elle peut réduire la dépendance à un nombre limité de produits ou secteurs', 'Elle rend toute crise impossible', 'Elle empêche le commerce', 'Elle garantit des recettes publiques constantes'], 0, 'Une base productive diversifiée peut réduire l’exposition aux chocs touchant un secteur particulier.'),
                    self::q('Que peut provoquer une hausse durable de la productivité, toutes choses égales par ailleurs ?', ['Une augmentation de la production possible avec les mêmes facteurs', 'Une baisse obligatoire du PIB réel', 'Une disparition de l’investissement', 'Une hausse automatique des inégalités'], 0, 'Une productivité plus élevée permet de produire davantage avec les mêmes ressources, sous réserve des autres conditions.'),
                    self::q('Pourquoi les politiques de croissance doivent-elles tenir compte de l’environnement ?', ['Pour limiter les coûts écologiques et préserver les ressources à long terme', 'Parce que l’environnement n’a aucun lien avec l’économie', 'Pour supprimer tous les échanges', 'Pour mesurer uniquement le PIB nominal'], 0, 'Les dommages environnementaux et l’épuisement des ressources peuvent affecter le bien-être et les possibilités de production futures.'),
                    self::q('Quel énoncé résume une approche équilibrée de la croissance ?', ['Associer productivité, investissement, compétences et attention aux effets sociaux et environnementaux', 'Se concentrer uniquement sur la hausse des prix', 'Augmenter la production sans considérer les ressources', 'Remplacer tous les indicateurs par un seul chiffre'], 0, 'La croissance durable dépend de plusieurs facteurs et doit être étudiée avec ses effets sociaux et environnementaux.'),
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
                        'choice' => $choiceData['text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }

        $this->command?->info('Economic Growth beginner quizzes seeded successfully.');
    }

    private static function q(string $question, array $wrongAnswers, int $correctIndex, string $explanation): array
    {
        $choices = [];
        foreach ($wrongAnswers as $index => $answer) {
            $choices[] = ['text' => $answer, 'is_correct' => $index === $correctIndex];
        }

        return [
            'question' => $question,
            'choices' => $choices,
            'explanation' => $explanation,
        ];
    }
}
