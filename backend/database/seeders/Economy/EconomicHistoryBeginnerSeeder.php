<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicHistoryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-history')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’histoire économique',
                'description' => 'Les grandes notions et périodes de l’histoire économique.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    $this->q('Que cherche principalement à étudier l’histoire économique ?', 'L’évolution des activités, des institutions et des structures économiques dans le temps', ['La grammaire des langues anciennes', 'Uniquement les guerres', 'La géographie physique des continents'], 'L’histoire économique analyse la manière dont les activités et les institutions économiques évoluent dans le temps.'),
                    $this->q('Pourquoi la révolution agricole est-elle importante dans l’histoire économique ?', 'Elle a amélioré durablement les techniques et la productivité agricoles', ['Elle a supprimé toute activité commerciale', 'Elle a rendu les villes inutiles', 'Elle a remplacé toutes les activités artisanales'], 'Les progrès agricoles ont augmenté la productivité et ont contribué aux transformations démographiques et économiques.'),
                    $this->q('Quelle activité a joué un rôle majeur dans les premières économies humaines ?', 'L’agriculture', ['La programmation informatique', 'La finance moderne', 'La production automobile'], 'L’agriculture a constitué une activité fondamentale des premières sociétés sédentaires.'),
                    $this->q('Qu’est-ce que la sédentarisation ?', 'Le passage à un mode de vie plus stable dans un lieu donné', ['Le déplacement permanent des populations', 'La disparition de l’agriculture', 'La suppression des échanges'], 'La sédentarisation correspond à l’installation durable des populations, notamment avec le développement de l’agriculture.'),
                    $this->q('Quel facteur favorise historiquement le développement des échanges ?', 'La spécialisation des activités', ['L’absence totale de production', 'La fermeture de toutes les frontières', 'La disparition des marchés'], 'La spécialisation crée des besoins d’échange entre producteurs et régions.'),
                    $this->q('Qu’est-ce qu’une économie de subsistance ?', 'Une économie principalement orientée vers la satisfaction des besoins de base des producteurs', ['Une économie uniquement fondée sur les banques', 'Une économie sans consommation', 'Une économie exclusivement destinée à l’exportation'], 'Dans une économie de subsistance, une grande partie de la production sert directement aux besoins du producteur ou de sa communauté.'),
                    $this->q('Pourquoi les villes ont-elles joué un rôle économique important ?', 'Elles ont concentré les activités commerciales, artisanales et administratives', ['Elles ont supprimé les marchés ruraux', 'Elles ont empêché les échanges', 'Elles ont remplacé toutes les campagnes'], 'Les villes ont souvent été des centres de commerce, de production artisanale et de pouvoir administratif.'),
                    $this->q('Quel est le rôle historique de la monnaie ?', 'Faciliter les échanges et mesurer la valeur des biens', ['Empêcher toute spécialisation', 'Remplacer entièrement la production', 'Supprimer les marchés'], 'La monnaie facilite les transactions et fournit une unité de compte.'),
                    $this->q('Qu’est-ce que la croissance économique sur le long terme ?', 'Une augmentation durable de la production d’une économie', ['Une baisse permanente de la production', 'Une simple variation quotidienne des prix', 'Une disparition du commerce'], 'La croissance économique désigne une augmentation durable de la production de biens et services.'),
                    $this->q('Pourquoi les sources historiques sont-elles importantes pour l’histoire économique ?', 'Elles permettent d’étudier les activités économiques passées', ['Elles permettent de prévoir exactement tous les marchés futurs', 'Elles remplacent toute analyse économique', 'Elles servent uniquement à étudier la littérature'], 'Les archives, statistiques, monnaies et autres sources permettent de reconstituer les économies du passé.'),
                ],
            ],
            [
                'title' => 'Commerce et échanges dans l’histoire',
                'description' => 'Comprendre le développement historique du commerce et des marchés.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    $this->q('Qu’est-ce que le troc ?', 'Un échange direct de biens ou de services sans monnaie', ['Un prêt bancaire', 'Une taxe sur les importations', 'Une forme de monnaie métallique'], 'Le troc repose sur l’échange direct entre deux parties.'),
                    $this->q('Pourquoi l’apparition de la monnaie a-t-elle facilité le commerce ?', 'Elle a réduit les difficultés liées à la recherche d’un échange réciproque', ['Elle a supprimé tous les marchés', 'Elle a interdit le commerce international', 'Elle a empêché la spécialisation'], 'La monnaie évite notamment le problème de la double coïncidence des besoins propre au troc.'),
                    $this->q('Que désigne une route commerciale ?', 'Un itinéraire utilisé régulièrement pour transporter et échanger des marchandises', ['Une route réservée aux armées', 'Un système bancaire', 'Une monnaie internationale'], 'Les routes commerciales reliaient des régions productrices et consommatrices.'),
                    $this->q('Quel effet les ports peuvent-ils avoir sur une économie ?', 'Ils facilitent les échanges maritimes de marchandises', ['Ils empêchent les importations', 'Ils suppriment les activités agricoles', 'Ils rendent les marchés inutiles'], 'Les ports constituent des points importants pour le transport et le commerce maritime.'),
                    $this->q('Qu’est-ce qu’un marché dans une perspective historique ?', 'Un espace ou un système où vendeurs et acheteurs échangent des biens et services', ['Uniquement une institution politique', 'Un système sans vendeurs', 'Un lieu réservé aux banques'], 'Les marchés permettent la rencontre de l’offre et de la demande.'),
                    $this->q('Pourquoi la spécialisation peut-elle stimuler les échanges ?', 'Chaque région ou producteur peut se concentrer sur certaines productions et échanger le surplus', ['Parce qu’elle supprime les besoins', 'Parce qu’elle interdit la division du travail', 'Parce qu’elle empêche les échanges'], 'La spécialisation crée des différences de production qui peuvent rendre les échanges utiles.'),
                    $this->q('Quel rôle ont historiquement joué les foires ?', 'Elles ont facilité les rencontres entre commerçants et acheteurs', ['Elles ont interdit le commerce', 'Elles ont remplacé l’agriculture', 'Elles ont supprimé la monnaie'], 'Les foires étaient des lieux périodiques importants pour le commerce.'),
                    $this->q('Qu’est-ce qu’une importation ?', 'L’achat de biens ou services provenant de l’étranger', ['La vente de biens à l’étranger', 'La production destinée uniquement au marché intérieur', 'Le paiement d’un salaire'], 'Une importation correspond à l’entrée de biens ou services achetés à l’étranger.'),
                    $this->q('Qu’est-ce qu’une exportation ?', 'La vente de biens ou services à l’étranger', ['L’achat de produits étrangers', 'La consommation domestique', 'Le paiement d’une taxe locale'], 'Une exportation correspond à une vente réalisée vers un autre pays.'),
                    $this->q('Pourquoi les échanges internationaux se sont-ils intensifiés avec les progrès des transports ?', 'Les coûts et les délais de transport ont diminué', ['Les marchandises sont devenues inutiles', 'Les frontières ont toutes disparu', 'La production locale a cessé partout'], 'L’amélioration des transports a facilité le déplacement des marchandises sur de longues distances.'),
                ],
            ],
            [
                'title' => 'Révolution industrielle',
                'description' => 'Les causes et conséquences économiques de la révolution industrielle.',
                'duration' => 25,
                'passing_score' => 50,
                'questions' => [
                    $this->q('Qu’est-ce que la révolution industrielle ?', 'Une transformation profonde des techniques, de la production et de l’organisation économique', ['Une simple réforme monétaire', 'Une disparition des machines', 'Une baisse générale de la production'], 'La révolution industrielle transforme les techniques de production, le travail, les transports et les structures économiques.'),
                    $this->q('Quel secteur a été fortement transformé au début de l’industrialisation ?', 'Le textile', ['La téléphonie mobile', 'L’informatique', 'L’aéronautique moderne'], 'Le textile fait partie des secteurs pionniers de l’industrialisation, notamment avec la mécanisation du filage et du tissage.'),
                    $this->q('Pourquoi la machine à vapeur a-t-elle été importante ?', 'Elle a fourni une source d’énergie mécanique utilisable dans plusieurs activités', ['Elle a remplacé la monnaie', 'Elle a supprimé les transports', 'Elle a interdit l’utilisation des machines'], 'La machine à vapeur a contribué à mécaniser la production et à transformer les transports.'),
                    $this->q('Quel phénomène accompagne l’industrialisation ?', 'L’urbanisation', ['La disparition des villes', 'La baisse systématique de la population urbaine', 'La fin du travail industriel'], 'L’industrialisation a favorisé la concentration des emplois et des populations dans les villes.'),
                    $this->q('Qu’est-ce que la mécanisation ?', 'Le recours accru aux machines dans les processus de production', ['Le retour exclusif au travail manuel', 'La suppression de toute production', 'L’abandon des outils'], 'La mécanisation consiste à utiliser des machines pour réaliser une partie croissante des tâches productives.'),
                    $this->q('Quel effet les chemins de fer ont-ils eu sur l’économie ?', 'Ils ont facilité le transport des personnes et des marchandises', ['Ils ont supprimé les marchés', 'Ils ont empêché l’industrialisation', 'Ils ont rendu le commerce impossible'], 'Le chemin de fer a réduit les distances économiques et facilité la circulation des marchandises.'),
                    $this->q('Qu’est-ce que la production en usine ?', 'Une production organisée dans un établissement où travailleurs, machines et activités sont regroupés', ['Une production exclusivement familiale', 'Une production sans outils', 'Une production sans division du travail'], 'Le système d’usine regroupe les moyens de production et organise le travail à une échelle plus importante.'),
                    $this->q('Quel changement social est associé à l’industrialisation ?', 'Le développement d’une classe ouvrière industrielle', ['La disparition de tous les salariés', 'La fin du travail rémunéré', 'La suppression des entreprises'], 'L’industrialisation a créé de nombreux emplois salariés dans les usines et les activités associées.'),
                    $this->q('Pourquoi la productivité peut-elle augmenter avec la mécanisation ?', 'Une machine peut permettre de produire davantage avec une quantité donnée de travail et de capital', ['Parce que les machines empêchent toute production', 'Parce que la production devient toujours nulle', 'Parce que les travailleurs disparaissent automatiquement'], 'La mécanisation peut accroître la quantité produite pour une combinaison donnée de facteurs de production.'),
                    $this->q('Quel est un effet économique possible de l’industrialisation ?', 'Une augmentation de la capacité de production', ['La disparition de tous les échanges', 'La fin de l’innovation', 'La suppression des marchés'], 'L’industrialisation augmente généralement les capacités productives grâce aux machines, à l’énergie et à de nouvelles méthodes.'),
                ],
            ],
            [
                'title' => 'Transformations économiques au XXe siècle',
                'description' => 'Les grandes transformations économiques du XXe siècle.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    $this->q('Quel événement a provoqué une grave crise économique mondiale à partir de 1929 ?', 'Le krach boursier de 1929', ['La révolution numérique', 'La création de l’euro', 'La révolution agricole néolithique'], 'Le krach de Wall Street de 1929 a été suivi d’une profonde crise économique internationale.'),
                    $this->q('Qu’est-ce qu’une Grande Dépression ?', 'Une période prolongée de forte contraction économique et de chômage élevé', ['Une période de croissance exceptionnelle', 'Une réforme fiscale locale', 'Une monnaie nationale'], 'La Grande Dépression désigne la crise économique mondiale des années 1930, marquée notamment par une forte baisse de l’activité et de l’emploi.'),
                    $this->q('Que désigne la reconstruction économique après une guerre ?', 'Le rétablissement et le développement des capacités productives et des infrastructures', ['La suppression de toutes les entreprises', 'L’arrêt permanent du commerce', 'La disparition des investissements'], 'La reconstruction implique notamment la remise en état des infrastructures et des capacités de production.'),
                    $this->q('Qu’est-ce que les Trente Glorieuses ?', 'Une période de forte croissance économique dans plusieurs pays développés après la Seconde Guerre mondiale', ['Une crise économique du Moyen Âge', 'Une période de baisse mondiale de la production', 'Une réforme monétaire médiévale'], 'L’expression désigne généralement les décennies d’après-guerre caractérisées dans plusieurs pays développés par une forte croissance et des transformations sociales.'),
                    $this->q('Quel facteur a contribué à la croissance d’après-guerre ?', 'Les gains de productivité et les investissements', ['La disparition de la technologie', 'La fermeture complète des marchés', 'La baisse systématique de la production'], 'Les investissements et les progrès de productivité ont contribué à l’expansion économique d’après-guerre.'),
                    $this->q('Qu’est-ce que la mondialisation économique ?', 'L’intensification des échanges et des interdépendances économiques entre pays', ['La suppression de toute activité internationale', 'Le retour au troc uniquement local', 'La fermeture des économies'], 'La mondialisation se caractérise par une intensification des flux de biens, services, capitaux et parfois de technologies.'),
                    $this->q('Quel secteur s’est fortement développé avec la révolution numérique ?', 'Les technologies de l’information et de la communication', ['La production de machines à vapeur uniquement', 'Le commerce sans technologie', 'L’agriculture préhistorique'], 'La révolution numérique a favorisé le développement de l’informatique, des télécommunications et des services numériques.'),
                    $this->q('Qu’est-ce qu’une crise pétrolière ?', 'Une forte perturbation économique liée à une hausse importante du prix ou à une rupture de l’approvisionnement en pétrole', ['Une baisse de la production agricole uniquement', 'Une réforme du système bancaire', 'Une augmentation de la production informatique'], 'Les crises pétrolières peuvent augmenter les coûts de production et provoquer des difficultés économiques.'),
                    $this->q('Pourquoi les politiques économiques ont-elles évolué au cours du XXe siècle ?', 'Parce que les économies ont connu des crises, des changements institutionnels et de nouvelles théories économiques', ['Parce que les économies sont restées parfaitement identiques', 'Parce que les marchés ont disparu', 'Parce que la production a cessé'], 'Les changements économiques et les crises ont conduit les États à adapter leurs politiques et leurs institutions.'),
                    $this->q('Quel phénomène caractérise une économie de plus en plus tertiarisée ?', 'La progression de la part des services dans l’emploi et la production', ['La disparition des services', 'La domination exclusive de l’agriculture', 'La suppression des activités commerciales'], 'La tertiarisation correspond à l’importance croissante du secteur des services dans l’économie.'),
                ],
            ],
            [
                'title' => 'Grandes tendances de l’histoire économique',
                'description' => 'Révision des principales transformations économiques sur longue période.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $this->q('Quelle relation existe entre progrès technique et croissance économique ?', 'Le progrès technique peut augmenter la productivité et soutenir la croissance', ['Le progrès technique réduit toujours la production', 'Il empêche toute spécialisation', 'Il supprime nécessairement les échanges'], 'Les innovations peuvent permettre de produire plus efficacement et ainsi contribuer à la croissance.'),
                    $this->q('Pourquoi la démographie est-elle importante pour l’histoire économique ?', 'La taille et la structure de la population influencent l’offre de travail et la demande', ['Elle n’a aucun lien avec l’économie', 'Elle détermine uniquement les taux de change', 'Elle remplace les institutions'], 'La population influence notamment le nombre de travailleurs, la consommation et les besoins en infrastructures.'),
                    $this->q('Qu’est-ce que la division du travail ?', 'La répartition des différentes tâches de production entre plusieurs personnes ou groupes', ['La suppression de toutes les tâches', 'Le retour obligatoire au troc', 'La fin de la spécialisation'], 'La division du travail permet de répartir les tâches et peut améliorer l’efficacité productive.'),
                    $this->q('Quel rôle les institutions jouent-elles dans le développement économique ?', 'Elles définissent des règles qui influencent les comportements économiques', ['Elles empêchent toujours les échanges', 'Elles remplacent toutes les entreprises', 'Elles rendent les ressources infinies'], 'Les institutions, comme les règles juridiques et les droits de propriété, structurent les activités économiques.'),
                    $this->q('Pourquoi les droits de propriété sont-ils importants dans une économie ?', 'Ils définissent les droits liés à l’utilisation et au contrôle des biens', ['Ils suppriment toute propriété', 'Ils empêchent nécessairement l’investissement', 'Ils rendent les biens gratuits'], 'Des droits de propriété clairement définis peuvent faciliter les échanges et l’investissement.'),
                    $this->q('Quel indicateur est couramment utilisé pour mesurer la production d’un pays ?', 'Le produit intérieur brut (PIB)', ['Le taux de change uniquement', 'Le nombre de frontières', 'La superficie agricole uniquement'], 'Le PIB mesure la valeur des biens et services finaux produits sur un territoire pendant une période donnée.'),
                    $this->q('Quelle différence générale existe entre croissance et développement économique ?', 'Le développement inclut des dimensions plus larges que la seule augmentation de la production', ['Les deux notions sont toujours strictement identiques', 'La croissance concerne uniquement les prix', 'Le développement exclut le bien-être'], 'La croissance concerne principalement l’augmentation de la production, tandis que le développement prend aussi en compte des transformations sociales et institutionnelles.'),
                    $this->q('Pourquoi l’énergie est-elle importante dans l’histoire économique ?', 'Les sources d’énergie conditionnent une partie des capacités de production et de transport', ['L’énergie n’a aucun effet sur la production', 'Elle sert uniquement à déterminer les salaires', 'Elle remplace les institutions'], 'Les transformations des sources d’énergie ont accompagné de nombreuses mutations productives et technologiques.'),
                    $this->q('Qu’est-ce qu’une innovation économique ?', 'L’introduction d’un nouveau produit, procédé, organisation ou usage ayant une application économique', ['Une simple répétition sans changement', 'Une suppression de toute technologie', 'Une baisse obligatoire de la productivité'], 'L’innovation peut modifier les produits, les procédés ou l’organisation de l’activité économique.'),
                    $this->q('Pourquoi étudier l’histoire économique aide-t-il à comprendre le présent ?', 'Elle permet de replacer les institutions et les transformations actuelles dans leur évolution historique', ['Elle permet de prédire exactement chaque événement futur', 'Elle rend les statistiques inutiles', 'Elle remplace l’analyse économique actuelle'], 'L’histoire économique apporte un contexte pour comprendre l’origine et l’évolution des structures économiques actuelles.'),
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
                    'major_id' => $subject->major_id,
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'question' => $questionData['question'],
                    ],
                    [
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $index => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choiceData['text'],
                        'is_correct' => $choiceData['correct'],
                        'order' => $index + 1,
                    ]);
                }
            }
        }
    }

    private function q(string $question, string $correct, array $incorrect, string $explanation): array
    {
        return [
            'question' => $question,
            'choices' => [
                ['text' => $correct, 'correct' => true],
                ['text' => $incorrect[0], 'correct' => false],
                ['text' => $incorrect[1], 'correct' => false],
                ['text' => $incorrect[2], 'correct' => false],
            ],
            'explanation' => $explanation,
        ];
    }
}
