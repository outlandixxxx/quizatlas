<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PortfolioManagementBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'portfolio-management')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la gestion de portefeuille',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille d’investissement ?',
                        'explanation' => 'Un portefeuille d\'investissement est un ensemble de plusieurs investissements détenus par un investisseur.',
                        'answers' => [
                            ['text' => 'Un ensemble de plusieurs investissements détenus par un investisseur', 'iscorrect' => true],
                            ['text' => 'Un seul compte bancaire', 'iscorrect' => false],
                            ['text' => 'Un contrat d’assurance uniquement', 'iscorrect' => false],
                            ['text' => 'Une obligation émise par une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général de la gestion de portefeuille ?',
                        'explanation' => 'La gestion de portefeuille cherche un équilibre adapté entre rendement, risque et objectifs propres à l\'investisseur.',
                        'answers' => [
                            ['text' => 'Chercher un équilibre adapté entre rendement, risque et objectifs de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Éviter systématiquement tous les investissements', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement des actions', 'iscorrect' => false],
                            ['text' => 'Garantir un rendement identique chaque année', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il détenir plusieurs actifs ?',
                        'explanation' => 'Détenir plusieurs actifs permet de répartir son capital et de réduire sa dépendance à un seul investissement.',
                        'answers' => [
                            ['text' => 'Pour répartir son capital et réduire sa dépendance à un seul investissement', 'iscorrect' => true],
                            ['text' => 'Pour supprimer toute possibilité de perte', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute analyse financière', 'iscorrect' => false],
                            ['text' => 'Pour garantir que tous les actifs augmentent simultanément', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel des éléments suivants peut faire partie d’un portefeuille ?',
                        'explanation' => 'Un portefeuille peut combiner plusieurs classes d\'actifs, notamment des actions, des obligations et des liquidités.',
                        'answers' => [
                            ['text' => 'Des actions, des obligations et des liquidités', 'iscorrect' => true],
                            ['text' => 'Uniquement des espèces', 'iscorrect' => false],
                            ['text' => 'Uniquement des actions d’une seule entreprise', 'iscorrect' => false],
                            ['text' => 'Uniquement des contrats d’assurance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’appelle-t-on généralement un gestionnaire de portefeuille ?',
                        'explanation' => 'Un gestionnaire de portefeuille est une personne ou une équipe responsable des décisions d\'investissement d\'un portefeuille.',
                        'answers' => [
                            ['text' => 'Une personne ou une équipe responsable des décisions d’investissement d’un portefeuille', 'iscorrect' => true],
                            ['text' => 'Un agent chargé uniquement des opérations bancaires', 'iscorrect' => false],
                            ['text' => 'Un comptable qui prépare uniquement les factures', 'iscorrect' => false],
                            ['text' => 'Un courtier immobilier exclusivement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le profil de l’investisseur est-il important ?',
                        'explanation' => 'Les objectifs, l\'horizon et la tolérance au risque de l\'investisseur influencent directement les choix du portefeuille.',
                        'answers' => [
                            ['text' => 'Parce que les objectifs, l’horizon et la tolérance au risque influencent les choix du portefeuille', 'iscorrect' => true],
                            ['text' => 'Parce que tous les investisseurs doivent avoir le même portefeuille', 'iscorrect' => false],
                            ['text' => 'Parce qu’il détermine uniquement le prix des actions', 'iscorrect' => false],
                            ['text' => 'Parce qu’il supprime les fluctuations du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie l’horizon d’investissement ?',
                        'explanation' => 'L\'horizon d\'investissement est la durée pendant laquelle l\'investisseur prévoit de conserver ou gérer son investissement.',
                        'answers' => [
                            ['text' => 'La durée pendant laquelle l’investisseur prévoit de conserver ou gérer son investissement', 'iscorrect' => true],
                            ['text' => 'Le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le montant du premier dépôt', 'iscorrect' => false],
                            ['text' => 'Le taux de change utilisé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il définir les objectifs avant de construire un portefeuille ?',
                        'explanation' => 'Définir les objectifs permet de choisir une stratégie cohérente avec les besoins et contraintes propres de l\'investisseur.',
                        'answers' => [
                            ['text' => 'Pour choisir une stratégie cohérente avec les besoins et contraintes de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Pour garantir automatiquement des bénéfices', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute diversification', 'iscorrect' => false],
                            ['text' => 'Pour investir sans tenir compte du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément représente une contrainte possible pour un portefeuille ?',
                        'explanation' => 'Un besoin de liquidité à court terme est une contrainte courante qui influence la composition d\'un portefeuille.',
                        'answers' => [
                            ['text' => 'Un besoin de liquidité à court terme', 'iscorrect' => true],
                            ['text' => 'Une garantie de hausse des marchés', 'iscorrect' => false],
                            ['text' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Un rendement futur certain', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux une bonne gestion de portefeuille ?',
                        'explanation' => 'Une bonne gestion de portefeuille cherche à prendre des risques cohérents avec les objectifs et les contraintes propres de l\'investisseur.',
                        'answers' => [
                            ['text' => 'Elle cherche à prendre des risques cohérents avec les objectifs et les contraintes de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Elle consiste à rechercher uniquement les actifs ayant le rendement passé le plus élevé', 'iscorrect' => false],
                            ['text' => 'Elle élimine toutes les pertes possibles', 'iscorrect' => false],
                            ['text' => 'Elle impose le même portefeuille à tous les investisseurs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque et rendement',
                'questions' => [
                    [
                        'question' => 'Que signifie le rendement d’un investissement ?',
                        'explanation' => 'Le rendement correspond à la variation de valeur ou aux revenus générés par un investissement sur une période donnée.',
                        'answers' => [
                            ['text' => 'La variation de valeur ou les revenus générés par un investissement sur une période', 'iscorrect' => true],
                            ['text' => 'Uniquement le montant investi au départ', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le montant des frais bancaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le risque en investissement ?',
                        'explanation' => 'Le risque correspond à l\'incertitude concernant les résultats futurs d\'un investissement.',
                        'answers' => [
                            ['text' => 'L’incertitude concernant les résultats futurs d’un investissement', 'iscorrect' => true],
                            ['text' => 'La certitude de réaliser une perte', 'iscorrect' => false],
                            ['text' => 'Le montant initial investi', 'iscorrect' => false],
                            ['text' => 'Le nombre d’actions achetées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation générale existe entre risque et rendement attendu ?',
                        'explanation' => 'Un rendement attendu plus élevé est généralement associé à une prise de risque plus importante.',
                        'answers' => [
                            ['text' => 'Un rendement attendu plus élevé est généralement associé à une prise de risque plus importante', 'iscorrect' => true],
                            ['text' => 'Un rendement élevé est toujours sans risque', 'iscorrect' => false],
                            ['text' => 'Le risque et le rendement sont toujours identiques', 'iscorrect' => false],
                            ['text' => 'Plus le risque est élevé, plus la perte est certaine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité ?',
                        'explanation' => 'La volatilité est une mesure de l\'ampleur des variations d\'un rendement ou d\'un prix.',
                        'answers' => [
                            ['text' => 'Une mesure de l’ampleur des variations d’un rendement ou d’un prix', 'iscorrect' => true],
                            ['text' => 'Le montant investi initialement', 'iscorrect' => false],
                            ['text' => 'La durée d’un investissement', 'iscorrect' => false],
                            ['text' => 'Le nombre d’investisseurs sur un marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel investissement présente généralement une incertitude de prix plus importante à court terme : une action ou un dépôt bancaire garanti ?',
                        'explanation' => 'Une action est généralement plus exposée aux fluctuations de prix à court terme qu\'un dépôt bancaire garanti.',
                        'answers' => [
                            ['text' => 'Une action', 'iscorrect' => true],
                            ['text' => 'Le dépôt bancaire garanti', 'iscorrect' => false],
                            ['text' => 'Les deux présentent toujours exactement le même risque', 'iscorrect' => false],
                            ['text' => 'Aucun des deux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement passé ne garantit-il pas le rendement futur ?',
                        'explanation' => 'Les conditions économiques et les marchés peuvent évoluer, rendant les performances passées non représentatives des résultats futurs.',
                        'answers' => [
                            ['text' => 'Parce que les conditions économiques et les marchés peuvent évoluer', 'iscorrect' => true],
                            ['text' => 'Parce que les investissements n’ont jamais de rendement', 'iscorrect' => false],
                            ['text' => 'Parce que les prix restent toujours constants', 'iscorrect' => false],
                            ['text' => 'Parce que les investisseurs ne peuvent jamais vendre leurs actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un exemple de risque de marché ?',
                        'explanation' => 'Une baisse générale des marchés financiers est un exemple typique de risque de marché, affectant largement les actifs.',
                        'answers' => [
                            ['text' => 'Une baisse générale des marchés financiers', 'iscorrect' => true],
                            ['text' => 'Une erreur de saisie dans un document interne', 'iscorrect' => false],
                            ['text' => 'Une panne d’ordinateur personnelle', 'iscorrect' => false],
                            ['text' => 'Une erreur dans une adresse postale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il connaître sa tolérance au risque ?',
                        'explanation' => 'Connaître sa tolérance au risque permet d\'éviter de choisir une exposition qu\'il ne serait pas capable de supporter financièrement ou psychologiquement.',
                        'answers' => [
                            ['text' => 'Pour éviter de choisir une exposition qu’il ne serait pas capable de supporter financièrement ou psychologiquement', 'iscorrect' => true],
                            ['text' => 'Pour garantir une performance élevée', 'iscorrect' => false],
                            ['text' => 'Pour empêcher les marchés de fluctuer', 'iscorrect' => false],
                            ['text' => 'Pour supprimer tous les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel portefeuille est généralement considéré comme plus risqué toutes choses égales par ailleurs ?',
                        'explanation' => 'Un portefeuille fortement concentré sur des actifs volatils est généralement plus risqué qu\'un portefeuille diversifié.',
                        'answers' => [
                            ['text' => 'Un portefeuille fortement concentré sur des actifs volatils', 'iscorrect' => true],
                            ['text' => 'Un portefeuille largement diversifié avec des actifs peu corrélés', 'iscorrect' => false],
                            ['text' => 'Un portefeuille composé uniquement de liquidités', 'iscorrect' => false],
                            ['text' => 'Un portefeuille sans exposition aux marchés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que doit faire un investisseur lorsqu’il constate que le risque réel de son portefeuille dépasse largement son objectif ?',
                        'explanation' => 'Il doit réexaminer l\'allocation de son portefeuille et l\'adapter à son profil et à ses objectifs.',
                        'answers' => [
                            ['text' => 'Réexaminer l’allocation et l’adapter à son profil et à ses objectifs', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement le risque', 'iscorrect' => false],
                            ['text' => 'Ignorer le problème', 'iscorrect' => false],
                            ['text' => 'Vendre tous les actifs sans analyse', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Diversification du portefeuille',
                'questions' => [
                    [
                        'question' => 'Quel est le principe de la diversification ?',
                        'explanation' => 'La diversification consiste à répartir les investissements entre plusieurs actifs afin de réduire la dépendance à un seul risque.',
                        'answers' => [
                            ['text' => 'Répartir les investissements entre plusieurs actifs afin de réduire la dépendance à un seul risque', 'iscorrect' => true],
                            ['text' => 'Investir tout le capital dans le meilleur titre', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement des actifs du même secteur', 'iscorrect' => false],
                            ['text' => 'Éviter tous les investissements étrangers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi détenir plusieurs entreprises peut-il réduire le risque spécifique ?',
                        'explanation' => 'Une mauvaise évolution d\'une seule entreprise représente une part plus faible du portefeuille total lorsque celui-ci est diversifié.',
                        'answers' => [
                            ['text' => 'Une mauvaise évolution d’une entreprise représente une part plus faible du portefeuille total', 'iscorrect' => true],
                            ['text' => 'Toutes les entreprises évoluent toujours ensemble', 'iscorrect' => false],
                            ['text' => 'Cela garantit une hausse de toutes les actions', 'iscorrect' => false],
                            ['text' => 'Cela élimine le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle diversification est la plus large ?',
                        'explanation' => 'Une diversification entre différentes classes d\'actifs, secteurs et zones géographiques est la plus large.',
                        'answers' => [
                            ['text' => 'Une diversification entre différentes classes d’actifs, secteurs et zones géographiques', 'iscorrect' => true],
                            ['text' => 'Acheter dix actions du même secteur uniquement', 'iscorrect' => false],
                            ['text' => 'Acheter plusieurs actions d’une même entreprise', 'iscorrect' => false],
                            ['text' => 'Détenir un seul actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est important pour évaluer le bénéfice de diversification entre deux actifs ?',
                        'explanation' => 'La relation entre les rendements de deux actifs, notamment leur corrélation, est essentielle pour évaluer le bénéfice de leur combinaison.',
                        'answers' => [
                            ['text' => 'La relation entre leurs rendements, notamment leur corrélation', 'iscorrect' => true],
                            ['text' => 'Uniquement leur nom', 'iscorrect' => false],
                            ['text' => 'Uniquement leur prix actuel', 'iscorrect' => false],
                            ['text' => 'Leur date de création', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si deux actifs évoluent toujours exactement dans la même direction et avec la même proportion, le bénéfice de diversification est-il important ?',
                        'explanation' => 'Non, car leur comportement parfaitement similaire ne permet pas de réduire le risque en les combinant.',
                        'answers' => [
                            ['text' => 'Non, car leur comportement est parfaitement similaire', 'iscorrect' => true],
                            ['text' => 'Oui, il est maximal', 'iscorrect' => false],
                            ['text' => 'Oui, car ils appartiennent forcément à des secteurs différents', 'iscorrect' => false],
                            ['text' => 'Cela garantit une baisse du risque à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente une diversification géographique ?',
                        'explanation' => 'Investir dans des entreprises de plusieurs pays est un exemple de diversification géographique.',
                        'answers' => [
                            ['text' => 'Investir dans des entreprises de plusieurs pays', 'iscorrect' => true],
                            ['text' => 'Acheter uniquement des actions d’une seule entreprise', 'iscorrect' => false],
                            ['text' => 'Acheter plusieurs titres d’une même société', 'iscorrect' => false],
                            ['text' => 'Détenir uniquement des liquidités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal danger d’un portefeuille très concentré ?',
                        'explanation' => 'Une mauvaise évolution d\'un seul actif peut avoir un impact important sur l\'ensemble d\'un portefeuille très concentré.',
                        'answers' => [
                            ['text' => 'Une mauvaise évolution d’un actif peut avoir un impact important sur l’ensemble du portefeuille', 'iscorrect' => true],
                            ['text' => 'Le rendement devient automatiquement nul', 'iscorrect' => false],
                            ['text' => 'Le portefeuille devient toujours sans risque', 'iscorrect' => false],
                            ['text' => 'Les coûts disparaissent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La diversification garantit-elle l’absence de perte ?',
                        'explanation' => 'Non, elle peut réduire certains risques mais ne supprime pas toutes les pertes possibles, notamment le risque de marché.',
                        'answers' => [
                            ['text' => 'Non, elle peut réduire certains risques mais ne supprime pas toutes les pertes possibles', 'iscorrect' => true],
                            ['text' => 'Oui, toujours', 'iscorrect' => false],
                            ['text' => 'Oui, si le portefeuille contient plus de cinq actifs', 'iscorrect' => false],
                            ['text' => 'Oui, lorsque les actifs sont internationaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une diversification entre secteurs peut-elle être utile ?',
                        'explanation' => 'Les secteurs peuvent être affectés différemment par les cycles économiques et les événements, ce qui peut atténuer l\'impact global sur le portefeuille.',
                        'answers' => [
                            ['text' => 'Les secteurs peuvent être affectés différemment par les cycles économiques et les événements', 'iscorrect' => true],
                            ['text' => 'Tous les secteurs ont exactement les mêmes risques', 'iscorrect' => false],
                            ['text' => 'Elle garantit que tous les secteurs progressent', 'iscorrect' => false],
                            ['text' => 'Elle élimine les taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une diversification excessive ?',
                        'explanation' => 'Une diversification excessive peut rendre le portefeuille difficile à gérer et diluer l\'impact des meilleures opportunités identifiées.',
                        'answers' => [
                            ['text' => 'Le portefeuille peut devenir difficile à gérer et diluer l’impact des meilleures opportunités', 'iscorrect' => true],
                            ['text' => 'Le portefeuille devient automatiquement sans risque', 'iscorrect' => false],
                            ['text' => 'Le rendement devient toujours négatif', 'iscorrect' => false],
                            ['text' => 'La liquidité disparaît toujours', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Allocation des actifs',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’allocation d’actifs ?',
                        'explanation' => 'L\'allocation d\'actifs est la répartition du capital entre différentes catégories d\'investissement.',
                        'answers' => [
                            ['text' => 'La répartition du capital entre différentes catégories d’investissement', 'iscorrect' => true],
                            ['text' => 'Le choix d’une seule action', 'iscorrect' => false],
                            ['text' => 'La vente quotidienne de tous les titres', 'iscorrect' => false],
                            ['text' => 'Le calcul des impôts uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelles catégories peuvent être utilisées dans une allocation d’actifs ?',
                        'explanation' => 'Une allocation d\'actifs peut inclure des actions, des obligations, des liquidités et éventuellement des actifs réels ou alternatifs.',
                        'answers' => [
                            ['text' => 'Actions, obligations, liquidités et éventuellement actifs réels ou alternatifs', 'iscorrect' => true],
                            ['text' => 'Uniquement les actions', 'iscorrect' => false],
                            ['text' => 'Uniquement les devises', 'iscorrect' => false],
                            ['text' => 'Uniquement les obligations d’une seule entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle allocation correspond généralement à un investisseur très prudent ?',
                        'explanation' => 'Un investisseur très prudent privilégie généralement une allocation avec une part relativement importante d\'actifs moins volatils.',
                        'answers' => [
                            ['text' => 'Une allocation avec une part relativement importante d’actifs moins volatils', 'iscorrect' => true],
                            ['text' => 'Une allocation composée uniquement d’actions spéculatives', 'iscorrect' => false],
                            ['text' => 'Une allocation avec uniquement des actifs très risqués', 'iscorrect' => false],
                            ['text' => 'Une allocation sans liquidités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut influencer la part d’actions dans un portefeuille ?',
                        'explanation' => 'L\'horizon d\'investissement et la tolérance au risque sont des facteurs déterminants dans le choix de la part d\'actions.',
                        'answers' => [
                            ['text' => 'L’horizon d’investissement et la tolérance au risque', 'iscorrect' => true],
                            ['text' => 'Uniquement le nom de l’investisseur', 'iscorrect' => false],
                            ['text' => 'Uniquement le jour de la semaine', 'iscorrect' => false],
                            ['text' => 'La couleur du graphique boursier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur à long terme peut-il généralement accepter davantage de volatilité ?',
                        'explanation' => 'Il dispose de davantage de temps pour faire face aux fluctuations temporaires du marché avant d\'avoir besoin de ses fonds.',
                        'answers' => [
                            ['text' => 'Il dispose de davantage de temps pour faire face aux fluctuations temporaires du marché', 'iscorrect' => true],
                            ['text' => 'Il ne peut jamais subir de perte', 'iscorrect' => false],
                            ['text' => 'Les actions deviennent automatiquement sans risque', 'iscorrect' => false],
                            ['text' => 'Les marchés montent toujours sur une courte période', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une allocation stratégique ?',
                        'explanation' => 'Une allocation stratégique est une répartition cible conçue pour répondre aux objectifs à long terme de l\'investisseur.',
                        'answers' => [
                            ['text' => 'Une répartition cible conçue pour répondre aux objectifs à long terme de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Une décision prise uniquement pendant une journée', 'iscorrect' => false],
                            ['text' => 'Une liste de titres sans pondération', 'iscorrect' => false],
                            ['text' => 'Une stratégie qui interdit toute diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une allocation tactique ?',
                        'explanation' => 'Une allocation tactique est une modification temporaire de l\'allocation afin de profiter de certaines opportunités ou conditions de marché.',
                        'answers' => [
                            ['text' => 'Une modification temporaire de l’allocation afin de profiter de certaines opportunités ou conditions de marché', 'iscorrect' => true],
                            ['text' => 'Une allocation qui ne peut jamais être modifiée', 'iscorrect' => false],
                            ['text' => 'Une allocation exclusivement composée de liquidités', 'iscorrect' => false],
                            ['text' => 'Une allocation sans objectif défini', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les liquidités peuvent-elles être présentes dans un portefeuille ?',
                        'explanation' => 'Les liquidités permettent de répondre aux besoins de liquidité et de réduire l\'exposition immédiate aux actifs risqués.',
                        'answers' => [
                            ['text' => 'Pour répondre aux besoins de liquidité et réduire l’exposition immédiate aux actifs risqués', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement élevé', 'iscorrect' => false],
                            ['text' => 'Pour augmenter toujours la volatilité', 'iscorrect' => false],
                            ['text' => 'Pour supprimer tous les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle des obligations dans de nombreux portefeuilles ?',
                        'explanation' => 'Les obligations peuvent apporter des revenus réguliers et diversifier l\'exposition aux actions dans un portefeuille.',
                        'answers' => [
                            ['text' => 'Elles peuvent apporter des revenus et diversifier l’exposition aux actions', 'iscorrect' => true],
                            ['text' => 'Elles garantissent toujours une performance positive', 'iscorrect' => false],
                            ['text' => 'Elles ne présentent jamais de risque', 'iscorrect' => false],
                            ['text' => 'Elles remplacent toutes les autres classes d’actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’allocation d’actifs doit-elle être adaptée à chaque investisseur ?',
                        'explanation' => 'Les objectifs, contraintes, horizon et tolérance au risque diffèrent d\'un investisseur à l\'autre, ce qui exige une allocation personnalisée.',
                        'answers' => [
                            ['text' => 'Les objectifs, contraintes, horizon et tolérance au risque diffèrent d’un investisseur à l’autre', 'iscorrect' => true],
                            ['text' => 'Tous les investisseurs ont les mêmes besoins', 'iscorrect' => false],
                            ['text' => 'Une seule allocation est toujours optimale', 'iscorrect' => false],
                            ['text' => 'Le risque ne dépend jamais de l’investisseur', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Actions et obligations dans un portefeuille',
                'questions' => [
                    [
                        'question' => 'Que représente une action ?',
                        'explanation' => 'Une action représente une part de propriété dans une entreprise.',
                        'answers' => [
                            ['text' => 'Une part de propriété dans une entreprise', 'iscorrect' => true],
                            ['text' => 'Une dette garantie par l’État', 'iscorrect' => false],
                            ['text' => 'Un compte bancaire', 'iscorrect' => false],
                            ['text' => 'Un contrat de location', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement une obligation ?',
                        'explanation' => 'Une obligation représente généralement une créance correspondant à un prêt accordé à un émetteur.',
                        'answers' => [
                            ['text' => 'Une créance représentant un prêt accordé à un émetteur', 'iscorrect' => true],
                            ['text' => 'Une part de propriété dans une entreprise', 'iscorrect' => false],
                            ['text' => 'Une monnaie étrangère', 'iscorrect' => false],
                            ['text' => 'Une assurance automobile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est généralement le principal moteur du rendement d’une action ?',
                        'explanation' => 'Le rendement d\'une action provient généralement de la variation de son prix et des éventuels dividendes versés.',
                        'answers' => [
                            ['text' => 'La variation de son prix et les éventuels dividendes', 'iscorrect' => true],
                            ['text' => 'Un coupon fixe obligatoire', 'iscorrect' => false],
                            ['text' => 'Une rémunération bancaire garantie', 'iscorrect' => false],
                            ['text' => 'Un taux d’intérêt fixé par l’investisseur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel revenu peut verser une obligation ?',
                        'explanation' => 'Une obligation peut verser un coupon selon les conditions prévues par l\'émission.',
                        'answers' => [
                            ['text' => 'Un coupon selon les conditions de l’obligation', 'iscorrect' => true],
                            ['text' => 'Un dividende obligatoire', 'iscorrect' => false],
                            ['text' => 'Une commission de courtage', 'iscorrect' => false],
                            ['text' => 'Une prime d’assurance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est généralement associé aux actions ?',
                        'explanation' => 'Les actions comportent généralement un risque de baisse du cours et de perte en capital.',
                        'answers' => [
                            ['text' => 'Le risque de baisse du cours et de perte en capital', 'iscorrect' => true],
                            ['text' => 'Une garantie permanente du capital', 'iscorrect' => false],
                            ['text' => 'L’absence totale de volatilité', 'iscorrect' => false],
                            ['text' => 'Un coupon fixe obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement important pour une obligation à taux fixe ?',
                        'explanation' => 'Le risque de variation des taux d\'intérêt est particulièrement important pour une obligation à taux fixe, car il affecte son prix de marché.',
                        'answers' => [
                            ['text' => 'Le risque de variation des taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'Le risque que les actions deviennent plus rentables', 'iscorrect' => false],
                            ['text' => 'Le risque de dividende uniquement', 'iscorrect' => false],
                            ['text' => 'Le risque de changer de secteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi combiner actions et obligations peut-il être utile ?',
                        'explanation' => 'Actions et obligations peuvent avoir des caractéristiques de risque et de rendement différentes, ce qui peut améliorer l\'équilibre du portefeuille.',
                        'answers' => [
                            ['text' => 'Parce que leurs caractéristiques de risque et de rendement peuvent être différentes', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils ont toujours des rendements identiques', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations éliminent tout risque', 'iscorrect' => false],
                            ['text' => 'Parce que les actions sont sans volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement au prix d’une obligation à taux fixe lorsque les taux de marché augmentent ?',
                        'explanation' => 'Son prix tend à diminuer, car de nouvelles obligations émises offrent des taux plus attractifs.',
                        'answers' => [
                            ['text' => 'Son prix tend à diminuer', 'iscorrect' => true],
                            ['text' => 'Son prix augmente toujours', 'iscorrect' => false],
                            ['text' => 'Son coupon contractuel double automatiquement', 'iscorrect' => false],
                            ['text' => 'Sa maturité disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une action peut-elle verser un dividende ?',
                        'explanation' => 'Une entreprise peut distribuer une partie de ses bénéfices ou réserves aux actionnaires, selon les règles applicables.',
                        'answers' => [
                            ['text' => 'Une entreprise peut distribuer une partie de ses bénéfices ou réserves aux actionnaires', 'iscorrect' => true],
                            ['text' => 'Parce qu’un dividende est obligatoire pour toutes les entreprises', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations exigent un dividende', 'iscorrect' => false],
                            ['text' => 'Parce que le prix de l’action ne peut jamais baisser', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle peut jouer une combinaison d’actions et d’obligations ?',
                        'explanation' => 'Elle peut créer un portefeuille présentant un équilibre entre potentiel de croissance, revenus et risque.',
                        'answers' => [
                            ['text' => 'Créer un portefeuille présentant un équilibre entre potentiel de croissance, revenus et risque', 'iscorrect' => true],
                            ['text' => 'Garantir l’absence de perte', 'iscorrect' => false],
                            ['text' => 'Supprimer toutes les fluctuations', 'iscorrect' => false],
                            ['text' => 'Garantir le même rendement chaque année', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Construction d’un portefeuille simple',
                'questions' => [
                    [
                        'question' => 'Quelle est la première étape avant de choisir les actifs d’un portefeuille ?',
                        'explanation' => 'Il faut d\'abord définir les objectifs, l\'horizon et le profil de risque de l\'investisseur avant de choisir les actifs.',
                        'answers' => [
                            ['text' => 'Définir les objectifs, l’horizon et le profil de risque de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Acheter immédiatement les actions les plus populaires', 'iscorrect' => false],
                            ['text' => 'Choisir les titres au hasard', 'iscorrect' => false],
                            ['text' => 'Vendre tous les actifs existants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la pondération d’un actif dans un portefeuille ?',
                        'explanation' => 'La pondération d\'un actif est la proportion du portefeuille investie dans cet actif.',
                        'answers' => [
                            ['text' => 'La proportion du portefeuille investie dans cet actif', 'iscorrect' => true],
                            ['text' => 'Le nombre de transactions quotidiennes', 'iscorrect' => false],
                            ['text' => 'Le rendement garanti de l’actif', 'iscorrect' => false],
                            ['text' => 'La date d’achat uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille contient 60 % d’actions et 40 % d’obligations. Que représentent ces pourcentages ?',
                        'explanation' => 'Ces pourcentages représentent les pondérations respectives des deux classes d\'actifs dans le portefeuille.',
                        'answers' => [
                            ['text' => 'Les pondérations respectives des deux classes d’actifs', 'iscorrect' => true],
                            ['text' => 'Le rendement annuel garanti', 'iscorrect' => false],
                            ['text' => 'Le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le montant des frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il surveiller les pondérations d’un portefeuille ?',
                        'explanation' => 'Les variations de prix des différents actifs peuvent modifier la répartition initiale prévue.',
                        'answers' => [
                            ['text' => 'Parce que les variations de prix peuvent modifier la répartition initiale', 'iscorrect' => true],
                            ['text' => 'Parce que les pondérations ne changent jamais', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés garantissent une allocation constante', 'iscorrect' => false],
                            ['text' => 'Parce que le nombre d’actions augmente automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille équilibré au sens général ?',
                        'explanation' => 'Un portefeuille équilibré est un portefeuille dont la composition correspond au profil et aux objectifs définis par l\'investisseur.',
                        'answers' => [
                            ['text' => 'Un portefeuille dont la composition correspond au profil et aux objectifs définis', 'iscorrect' => true],
                            ['text' => 'Un portefeuille composé exactement de 50 % d’actions et 50 % d’obligations pour tout le monde', 'iscorrect' => false],
                            ['text' => 'Un portefeuille sans risque', 'iscorrect' => false],
                            ['text' => 'Un portefeuille qui change tous les jours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les frais doivent-ils être pris en compte lors de la construction d’un portefeuille ?',
                        'explanation' => 'Les frais réduisent le rendement net effectivement obtenu par l\'investisseur.',
                        'answers' => [
                            ['text' => 'Ils réduisent le rendement net obtenu par l’investisseur', 'iscorrect' => true],
                            ['text' => 'Ils augmentent toujours le rendement', 'iscorrect' => false],
                            ['text' => 'Ils n’ont aucun effet sur la performance', 'iscorrect' => false],
                            ['text' => 'Ils garantissent la diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut justifier une part plus importante de liquidités ?',
                        'explanation' => 'Un besoin prochain de financer une dépense importante peut justifier de conserver une part plus importante de liquidités.',
                        'answers' => [
                            ['text' => 'Un besoin prochain de financer une dépense importante', 'iscorrect' => true],
                            ['text' => 'Une volonté d’augmenter fortement le risque', 'iscorrect' => false],
                            ['text' => 'Une absence totale de besoins financiers', 'iscorrect' => false],
                            ['text' => 'Une garantie de hausse des actions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un portefeuille doit-il être cohérent avec l’horizon de placement ?',
                        'explanation' => 'Un horizon court laisse généralement moins de temps pour absorber une baisse temporaire des actifs risqués.',
                        'answers' => [
                            ['text' => 'Un horizon court laisse généralement moins de temps pour absorber une baisse temporaire des actifs risqués', 'iscorrect' => true],
                            ['text' => 'L’horizon n’a aucun rapport avec le risque', 'iscorrect' => false],
                            ['text' => 'Un horizon court garantit toujours une performance élevée', 'iscorrect' => false],
                            ['text' => 'Un horizon long rend tous les actifs sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’établir une allocation cible ?',
                        'explanation' => 'Établir une allocation cible fournit un cadre permettant de contrôler la composition et le niveau de risque du portefeuille.',
                        'answers' => [
                            ['text' => 'Disposer d’un cadre permettant de contrôler la composition et le niveau de risque du portefeuille', 'iscorrect' => true],
                            ['text' => 'Garantir le rendement annuel', 'iscorrect' => false],
                            ['text' => 'Empêcher toute évolution des marchés', 'iscorrect' => false],
                            ['text' => 'Supprimer les frais de transaction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que devrait faire un investisseur si son portefeuille ne correspond plus à son profil de risque ?',
                        'explanation' => 'Il devrait réexaminer la composition de son portefeuille et envisager un ajustement adapté à ses objectifs.',
                        'answers' => [
                            ['text' => 'Réexaminer sa composition et envisager un ajustement adapté à ses objectifs', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement les actifs risqués', 'iscorrect' => false],
                            ['text' => 'Ignorer la situation', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement les actifs ayant récemment augmenté', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Suivi et rééquilibrage',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le rééquilibrage d’un portefeuille ?',
                        'explanation' => 'Le rééquilibrage consiste à ramener les pondérations du portefeuille vers leurs niveaux cibles.',
                        'answers' => [
                            ['text' => 'L’action de ramener les pondérations du portefeuille vers leurs niveaux cibles', 'iscorrect' => true],
                            ['text' => 'La vente obligatoire de tous les actifs', 'iscorrect' => false],
                            ['text' => 'L’achat uniquement d’actions', 'iscorrect' => false],
                            ['text' => 'Le remplacement du gestionnaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pondérations peuvent-elles s’éloigner des objectifs ?',
                        'explanation' => 'Les prix des différentes classes d\'actifs évoluent différemment, ce qui modifie progressivement les pondérations initiales.',
                        'answers' => [
                            ['text' => 'Parce que les prix des différentes classes d’actifs évoluent différemment', 'iscorrect' => true],
                            ['text' => 'Parce que les pondérations sont toujours fixes', 'iscorrect' => false],
                            ['text' => 'Parce que les investisseurs ne possèdent jamais d’actifs', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés cessent de fonctionner', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les actions d’un portefeuille montent fortement, que peut-il se produire ?',
                        'explanation' => 'La part des actions peut devenir supérieure à la pondération cible initialement définie.',
                        'answers' => [
                            ['text' => 'La part des actions peut devenir supérieure à la pondération cible', 'iscorrect' => true],
                            ['text' => 'La part des actions devient automatiquement nulle', 'iscorrect' => false],
                            ['text' => 'Les obligations disparaissent toujours', 'iscorrect' => false],
                            ['text' => 'Le portefeuille devient sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des objectifs du suivi régulier d’un portefeuille ?',
                        'explanation' => 'Le suivi régulier permet de vérifier que le portefeuille reste cohérent avec les objectifs et les contraintes de l\'investisseur.',
                        'answers' => [
                            ['text' => 'Vérifier que le portefeuille reste cohérent avec les objectifs et les contraintes', 'iscorrect' => true],
                            ['text' => 'Prévoir avec certitude le marché', 'iscorrect' => false],
                            ['text' => 'Garantir une hausse quotidienne', 'iscorrect' => false],
                            ['text' => 'Éliminer tous les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel inconvénient peut avoir un rééquilibrage trop fréquent ?',
                        'explanation' => 'Un rééquilibrage trop fréquent peut augmenter les coûts de transaction et le turnover du portefeuille.',
                        'answers' => [
                            ['text' => 'Il peut augmenter les coûts de transaction et le turnover', 'iscorrect' => true],
                            ['text' => 'Il garantit une performance supérieure', 'iscorrect' => false],
                            ['text' => 'Il supprime toujours la volatilité', 'iscorrect' => false],
                            ['text' => 'Il élimine les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rééquilibrage périodique ?',
                        'explanation' => 'Un rééquilibrage périodique est effectué selon un calendrier défini, par exemple chaque trimestre ou chaque année.',
                        'answers' => [
                            ['text' => 'Un rééquilibrage effectué selon un calendrier défini, par exemple chaque trimestre ou chaque année', 'iscorrect' => true],
                            ['text' => 'Un rééquilibrage réalisé uniquement après une perte totale', 'iscorrect' => false],
                            ['text' => 'Un rééquilibrage sans allocation cible', 'iscorrect' => false],
                            ['text' => 'Une stratégie consistant à ne jamais modifier le portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’utiliser des seuils de rééquilibrage ?',
                        'explanation' => 'Les seuils permettent d\'agir uniquement lorsque l\'écart d\'une pondération devient suffisamment important.',
                        'answers' => [
                            ['text' => 'Agir lorsque l’écart d’une pondération devient suffisamment important', 'iscorrect' => true],
                            ['text' => 'Effectuer des transactions chaque jour', 'iscorrect' => false],
                            ['text' => 'Garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Supprimer la nécessité de définir une allocation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les nouveaux apports peuvent-ils faciliter le rééquilibrage ?',
                        'explanation' => 'Ils peuvent être dirigés vers les actifs sous-pondérés sans nécessiter la vente des autres actifs du portefeuille.',
                        'answers' => [
                            ['text' => 'Ils peuvent être dirigés vers les actifs sous-pondérés sans vendre nécessairement les autres actifs', 'iscorrect' => true],
                            ['text' => 'Ils éliminent tout risque de marché', 'iscorrect' => false],
                            ['text' => 'Ils garantissent une hausse des actifs', 'iscorrect' => false],
                            ['text' => 'Ils rendent les actifs illiquides', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que risque-t-on si on ne rééquilibre jamais un portefeuille ?',
                        'explanation' => 'Le profil de risque du portefeuille peut progressivement s\'éloigner du profil initialement prévu.',
                        'answers' => [
                            ['text' => 'Le profil de risque peut progressivement s’éloigner du profil initialement prévu', 'iscorrect' => true],
                            ['text' => 'Le portefeuille devient automatiquement plus prudent', 'iscorrect' => false],
                            ['text' => 'Le rendement devient garanti', 'iscorrect' => false],
                            ['text' => 'Les frais deviennent nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être pris en compte avant un rééquilibrage ?',
                        'explanation' => 'Il faut considérer les coûts, les contraintes fiscales éventuelles et l\'importance de l\'écart par rapport aux cibles.',
                        'answers' => [
                            ['text' => 'Les coûts, les contraintes fiscales éventuelles et l’importance de l’écart par rapport aux cibles', 'iscorrect' => true],
                            ['text' => 'Uniquement le titre ayant le plus augmenté', 'iscorrect' => false],
                            ['text' => 'Uniquement les actualités financières', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre de titres', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Performance d’un portefeuille',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la performance d’un portefeuille ?',
                        'explanation' => 'La performance représente l\'évolution de la valeur du portefeuille, en tenant compte des revenus générés selon la méthode utilisée.',
                        'answers' => [
                            ['text' => 'L’évolution de la valeur du portefeuille, en tenant compte des revenus générés selon la méthode utilisée', 'iscorrect' => true],
                            ['text' => 'Uniquement le montant investi initialement', 'iscorrect' => false],
                            ['text' => 'Le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le nombre de transactions effectuées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la performance à une référence ?',
                        'explanation' => 'Cette comparaison permet de déterminer si la performance est satisfaisante par rapport à un objectif ou un marché comparable.',
                        'answers' => [
                            ['text' => 'Pour déterminer si la performance est satisfaisante par rapport à un objectif ou un marché comparable', 'iscorrect' => true],
                            ['text' => 'Pour garantir que le portefeuille gagne de l’argent', 'iscorrect' => false],
                            ['text' => 'Pour éliminer le risque', 'iscorrect' => false],
                            ['text' => 'Pour remplacer les objectifs de l’investisseur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice de référence ou benchmark ?',
                        'explanation' => 'Un benchmark est une référence utilisée pour comparer la performance d\'un portefeuille.',
                        'answers' => [
                            ['text' => 'Une référence utilisée pour comparer la performance d’un portefeuille', 'iscorrect' => true],
                            ['text' => 'Une garantie de rendement', 'iscorrect' => false],
                            ['text' => 'Un compte bancaire', 'iscorrect' => false],
                            ['text' => 'Un contrat d’assurance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il choisir un benchmark adapté au portefeuille ?',
                        'explanation' => 'Une comparaison pertinente doit refléter l\'univers et le niveau de risque propre du portefeuille analysé.',
                        'answers' => [
                            ['text' => 'Parce qu’une comparaison pertinente doit refléter l’univers et le niveau de risque du portefeuille', 'iscorrect' => true],
                            ['text' => 'Parce que tous les benchmarks sont identiques', 'iscorrect' => false],
                            ['text' => 'Parce qu’un benchmark élevé garantit la performance', 'iscorrect' => false],
                            ['text' => 'Parce que le benchmark élimine les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut réduire la performance nette d’un portefeuille ?',
                        'explanation' => 'Les frais de gestion et les coûts de transaction réduisent directement la performance nette obtenue par l\'investisseur.',
                        'answers' => [
                            ['text' => 'Les frais de gestion et les coûts de transaction', 'iscorrect' => true],
                            ['text' => 'La diversification uniquement', 'iscorrect' => false],
                            ['text' => 'La définition d’un objectif', 'iscorrect' => false],
                            ['text' => 'La surveillance du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la performance doit-elle être analysée avec le risque ?',
                        'explanation' => 'Un rendement élevé peut avoir été obtenu en prenant un niveau de risque beaucoup plus important, ce qui nuance l\'appréciation de la performance.',
                        'answers' => [
                            ['text' => 'Un rendement élevé peut avoir été obtenu en prenant un niveau de risque beaucoup plus important', 'iscorrect' => true],
                            ['text' => 'Le risque n’a aucun rapport avec l’investissement', 'iscorrect' => false],
                            ['text' => 'Un rendement élevé signifie toujours un risque nul', 'iscorrect' => false],
                            ['text' => 'La volatilité garantit le rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une performance positive ?',
                        'explanation' => 'Une performance positive indique une augmentation de la valeur du portefeuille selon la mesure utilisée.',
                        'answers' => [
                            ['text' => 'Une performance indiquant une augmentation de la valeur selon la mesure utilisée', 'iscorrect' => true],
                            ['text' => 'Une garantie de bénéfice futur', 'iscorrect' => false],
                            ['text' => 'Une absence de risque', 'iscorrect' => false],
                            ['text' => 'Une baisse du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il considérer les revenus comme les dividendes ou coupons dans certaines mesures de performance ?',
                        'explanation' => 'Les dividendes et coupons contribuent au rendement total effectivement obtenu par l\'investisseur, au-delà de la seule variation de prix.',
                        'answers' => [
                            ['text' => 'Parce qu’ils contribuent au rendement total obtenu par l’investisseur', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils remplacent toujours la variation des prix', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils sont toujours garantis', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils n’ont aucun lien avec la performance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne performance sur une seule courte période doit-elle être interprétée avec prudence ?',
                        'explanation' => 'Elle peut être influencée par des conditions temporaires ou aléatoires du marché, sans refléter une tendance durable.',
                        'answers' => [
                            ['text' => 'Elle peut être influencée par des conditions temporaires ou aléatoires du marché', 'iscorrect' => true],
                            ['text' => 'Elle garantit toujours la performance future', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque', 'iscorrect' => false],
                            ['text' => 'Elle prouve automatiquement la qualité du gestionnaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une analyse régulière de performance ?',
                        'explanation' => 'Elle vise à comprendre les résultats et à vérifier qu\'ils restent cohérents avec les objectifs et le niveau de risque accepté.',
                        'answers' => [
                            ['text' => 'Comprendre les résultats et vérifier qu’ils restent cohérents avec les objectifs et le niveau de risque accepté', 'iscorrect' => true],
                            ['text' => 'Prévoir chaque mouvement du marché', 'iscorrect' => false],
                            ['text' => 'Garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Éviter toute modification future', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Discipline et comportement de l’investisseur',
                'questions' => [
                    [
                        'question' => 'Pourquoi les émotions peuvent-elles influencer négativement les décisions d’investissement ?',
                        'explanation' => 'Elles peuvent pousser l\'investisseur à prendre des décisions impulsives plutôt qu\'à suivre une stratégie définie à l\'avance.',
                        'answers' => [
                            ['text' => 'Elles peuvent pousser l’investisseur à prendre des décisions impulsives plutôt qu’à suivre une stratégie définie', 'iscorrect' => true],
                            ['text' => 'Elles garantissent toujours de bonnes décisions', 'iscorrect' => false],
                            ['text' => 'Elles suppriment les pertes', 'iscorrect' => false],
                            ['text' => 'Elles rendent les marchés prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement consiste à acheter un actif uniquement parce que son prix vient fortement d’augmenter ?',
                        'explanation' => 'C\'est une décision potentiellement influencée par la poursuite des performances récentes ou le comportement grégaire, plutôt que par une analyse indépendante.',
                        'answers' => [
                            ['text' => 'Une décision potentiellement influencée par la poursuite des performances récentes ou le comportement grégaire', 'iscorrect' => true],
                            ['text' => 'Une diversification parfaite', 'iscorrect' => false],
                            ['text' => 'Une stratégie sans risque', 'iscorrect' => false],
                            ['text' => 'Une allocation stratégique obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi avoir une stratégie écrite peut-il aider un investisseur ?',
                        'explanation' => 'Elle fournit un cadre pour prendre des décisions cohérentes malgré les fluctuations du marché.',
                        'answers' => [
                            ['text' => 'Elle fournit un cadre pour prendre des décisions cohérentes malgré les fluctuations du marché', 'iscorrect' => true],
                            ['text' => 'Elle garantit le rendement', 'iscorrect' => false],
                            ['text' => 'Elle empêche toute perte', 'iscorrect' => false],
                            ['text' => 'Elle rend les marchés prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’aversion aux pertes ?',
                        'explanation' => 'L\'aversion aux pertes est la tendance à ressentir une perte plus fortement qu\'un gain de valeur comparable.',
                        'answers' => [
                            ['text' => 'La tendance à ressentir une perte plus fortement qu’un gain de valeur comparable', 'iscorrect' => true],
                            ['text' => 'La recherche systématique de pertes', 'iscorrect' => false],
                            ['text' => 'Une méthode de calcul du rendement', 'iscorrect' => false],
                            ['text' => 'Une stratégie de diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vendre systématiquement après une baisse importante peut-il être problématique ?',
                        'explanation' => 'L\'investisseur peut transformer une perte temporaire en perte définitive et manquer une éventuelle reprise du marché.',
                        'answers' => [
                            ['text' => 'L’investisseur peut transformer une perte temporaire en perte définitive et manquer une éventuelle reprise', 'iscorrect' => true],
                            ['text' => 'Les marchés remontent toujours immédiatement', 'iscorrect' => false],
                            ['text' => 'Les pertes n’existent jamais', 'iscorrect' => false],
                            ['text' => 'La vente augmente toujours le rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de définir des règles de décision avant une période de forte volatilité ?',
                        'explanation' => 'Définir des règles à l\'avance réduit le risque de décisions impulsives prises sous l\'effet de l\'émotion.',
                        'answers' => [
                            ['text' => 'Réduire le risque de décisions impulsives prises sous l’effet de l’émotion', 'iscorrect' => true],
                            ['text' => 'Garantir une hausse du marché', 'iscorrect' => false],
                            ['text' => 'Éliminer toutes les pertes', 'iscorrect' => false],
                            ['text' => 'Empêcher les prix de fluctuer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de se concentrer uniquement sur les performances récentes ?',
                        'explanation' => 'Les performances récentes ne représentent pas nécessairement les résultats futurs de l\'investissement.',
                        'answers' => [
                            ['text' => 'Les performances récentes ne représentent pas nécessairement les résultats futurs', 'iscorrect' => true],
                            ['text' => 'Les performances récentes sont toujours fausses', 'iscorrect' => false],
                            ['text' => 'Les performances passées n’existent jamais', 'iscorrect' => false],
                            ['text' => 'Les marchés sont toujours constants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut conduire à une concentration excessive ?',
                        'explanation' => 'Investir une part disproportionnée du portefeuille dans les actifs que l\'on préfère personnellement peut conduire à une concentration excessive du risque.',
                        'answers' => [
                            ['text' => 'Investir une part disproportionnée du portefeuille dans les actifs que l’on préfère personnellement', 'iscorrect' => true],
                            ['text' => 'Diversifier entre plusieurs classes d’actifs', 'iscorrect' => false],
                            ['text' => 'Définir des limites de pondération', 'iscorrect' => false],
                            ['text' => 'Rééquilibrer périodiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la discipline est-elle importante en gestion de portefeuille ?',
                        'explanation' => 'Elle aide à respecter une stratégie cohérente même lorsque les marchés deviennent émotionnels ou volatils.',
                        'answers' => [
                            ['text' => 'Elle aide à respecter une stratégie cohérente même lorsque les marchés deviennent émotionnels', 'iscorrect' => true],
                            ['text' => 'Elle garantit que les actifs augmenteront', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque', 'iscorrect' => false],
                            ['text' => 'Elle permet de prévoir tous les marchés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est généralement préférable pour un investisseur débutant ?',
                        'explanation' => 'Construire une stratégie diversifiée et cohérente avec ses objectifs est généralement préférable à chercher des gains rapides.',
                        'answers' => [
                            ['text' => 'Construire une stratégie diversifiée et cohérente avec ses objectifs plutôt que chercher des gains rapides', 'iscorrect' => true],
                            ['text' => 'Investir tout son capital dans un seul actif spéculatif', 'iscorrect' => false],
                            ['text' => 'Suivre chaque rumeur du marché', 'iscorrect' => false],
                            ['text' => 'Modifier son portefeuille chaque jour', 'iscorrect' => false],
                        ],
                    ],
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
                    'description' => $quizData['description'] ?? $quizData['title'],
                    'duration' => 10,
                    'passing_score' => 80,
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

                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $choiceIndex => $answerData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $answerData['text'],
                        'is_correct' => $answerData['iscorrect'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}