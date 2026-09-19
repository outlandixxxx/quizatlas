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
                        'answers' => [
                            ['text' => 'Un ensemble de plusieurs investissements détenus par un investisseur', 'iscorrect' => true],
                            ['text' => 'Un seul compte bancaire', 'iscorrect' => false],
                            ['text' => 'Un contrat d’assurance uniquement', 'iscorrect' => false],
                            ['text' => 'Une obligation émise par une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général de la gestion de portefeuille ?',
                        'answers' => [
                            ['text' => 'Chercher un équilibre adapté entre rendement, risque et objectifs de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Éviter systématiquement tous les investissements', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement des actions', 'iscorrect' => false],
                            ['text' => 'Garantir un rendement identique chaque année', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il détenir plusieurs actifs ?',
                        'answers' => [
                            ['text' => 'Pour répartir son capital et réduire sa dépendance à un seul investissement', 'iscorrect' => true],
                            ['text' => 'Pour supprimer toute possibilité de perte', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute analyse financière', 'iscorrect' => false],
                            ['text' => 'Pour garantir que tous les actifs augmentent simultanément', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel des éléments suivants peut faire partie d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Des actions, des obligations et des liquidités', 'iscorrect' => true],
                            ['text' => 'Uniquement des espèces', 'iscorrect' => false],
                            ['text' => 'Uniquement des actions d’une seule entreprise', 'iscorrect' => false],
                            ['text' => 'Uniquement des contrats d’assurance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’appelle-t-on généralement un gestionnaire de portefeuille ?',
                        'answers' => [
                            ['text' => 'Une personne ou une équipe responsable des décisions d’investissement d’un portefeuille', 'iscorrect' => true],
                            ['text' => 'Un agent chargé uniquement des opérations bancaires', 'iscorrect' => false],
                            ['text' => 'Un comptable qui prépare uniquement les factures', 'iscorrect' => false],
                            ['text' => 'Un courtier immobilier exclusivement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le profil de l’investisseur est-il important ?',
                        'answers' => [
                            ['text' => 'Parce que les objectifs, l’horizon et la tolérance au risque influencent les choix du portefeuille', 'iscorrect' => true],
                            ['text' => 'Parce que tous les investisseurs doivent avoir le même portefeuille', 'iscorrect' => false],
                            ['text' => 'Parce qu’il détermine uniquement le prix des actions', 'iscorrect' => false],
                            ['text' => 'Parce qu’il supprime les fluctuations du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie l’horizon d’investissement ?',
                        'answers' => [
                            ['text' => 'La durée pendant laquelle l’investisseur prévoit de conserver ou gérer son investissement', 'iscorrect' => true],
                            ['text' => 'Le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le montant du premier dépôt', 'iscorrect' => false],
                            ['text' => 'Le taux de change utilisé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il définir les objectifs avant de construire un portefeuille ?',
                        'answers' => [
                            ['text' => 'Pour choisir une stratégie cohérente avec les besoins et contraintes de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Pour garantir automatiquement des bénéfices', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute diversification', 'iscorrect' => false],
                            ['text' => 'Pour investir sans tenir compte du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément représente une contrainte possible pour un portefeuille ?',
                        'answers' => [
                            ['text' => 'Un besoin de liquidité à court terme', 'iscorrect' => true],
                            ['text' => 'Une garantie de hausse des marchés', 'iscorrect' => false],
                            ['text' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Un rendement futur certain', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux une bonne gestion de portefeuille ?',
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
                        'answers' => [
                            ['text' => 'La variation de valeur ou les revenus générés par un investissement sur une période', 'iscorrect' => true],
                            ['text' => 'Uniquement le montant investi au départ', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le montant des frais bancaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le risque en investissement ?',
                        'answers' => [
                            ['text' => 'L’incertitude concernant les résultats futurs d’un investissement', 'iscorrect' => true],
                            ['text' => 'La certitude de réaliser une perte', 'iscorrect' => false],
                            ['text' => 'Le montant initial investi', 'iscorrect' => false],
                            ['text' => 'Le nombre d’actions achetées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation générale existe entre risque et rendement attendu ?',
                        'answers' => [
                            ['text' => 'Un rendement attendu plus élevé est généralement associé à une prise de risque plus importante', 'iscorrect' => true],
                            ['text' => 'Un rendement élevé est toujours sans risque', 'iscorrect' => false],
                            ['text' => 'Le risque et le rendement sont toujours identiques', 'iscorrect' => false],
                            ['text' => 'Plus le risque est élevé, plus la perte est certaine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité ?',
                        'answers' => [
                            ['text' => 'Une mesure de l’ampleur des variations d’un rendement ou d’un prix', 'iscorrect' => true],
                            ['text' => 'Le montant investi initialement', 'iscorrect' => false],
                            ['text' => 'La durée d’un investissement', 'iscorrect' => false],
                            ['text' => 'Le nombre d’investisseurs sur un marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel investissement présente généralement une incertitude de prix plus importante à court terme : une action ou un dépôt bancaire garanti ?',
                        'answers' => [
                            ['text' => 'Une action', 'iscorrect' => true],
                            ['text' => 'Le dépôt bancaire garanti', 'iscorrect' => false],
                            ['text' => 'Les deux présentent toujours exactement le même risque', 'iscorrect' => false],
                            ['text' => 'Aucun des deux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement passé ne garantit-il pas le rendement futur ?',
                        'answers' => [
                            ['text' => 'Parce que les conditions économiques et les marchés peuvent évoluer', 'iscorrect' => true],
                            ['text' => 'Parce que les investissements n’ont jamais de rendement', 'iscorrect' => false],
                            ['text' => 'Parce que les prix restent toujours constants', 'iscorrect' => false],
                            ['text' => 'Parce que les investisseurs ne peuvent jamais vendre leurs actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un exemple de risque de marché ?',
                        'answers' => [
                            ['text' => 'Une baisse générale des marchés financiers', 'iscorrect' => true],
                            ['text' => 'Une erreur de saisie dans un document interne', 'iscorrect' => false],
                            ['text' => 'Une panne d’ordinateur personnelle', 'iscorrect' => false],
                            ['text' => 'Une erreur dans une adresse postale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il connaître sa tolérance au risque ?',
                        'answers' => [
                            ['text' => 'Pour éviter de choisir une exposition qu’il ne serait pas capable de supporter financièrement ou psychologiquement', 'iscorrect' => true],
                            ['text' => 'Pour garantir une performance élevée', 'iscorrect' => false],
                            ['text' => 'Pour empêcher les marchés de fluctuer', 'iscorrect' => false],
                            ['text' => 'Pour supprimer tous les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel portefeuille est généralement considéré comme plus risqué toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['text' => 'Un portefeuille fortement concentré sur des actifs volatils', 'iscorrect' => true],
                            ['text' => 'Un portefeuille largement diversifié avec des actifs peu corrélés', 'iscorrect' => false],
                            ['text' => 'Un portefeuille composé uniquement de liquidités', 'iscorrect' => false],
                            ['text' => 'Un portefeuille sans exposition aux marchés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que doit faire un investisseur lorsqu’il constate que le risque réel de son portefeuille dépasse largement son objectif ?',
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
                        'answers' => [
                            ['text' => 'Répartir les investissements entre plusieurs actifs afin de réduire la dépendance à un seul risque', 'iscorrect' => true],
                            ['text' => 'Investir tout le capital dans le meilleur titre', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement des actifs du même secteur', 'iscorrect' => false],
                            ['text' => 'Éviter tous les investissements étrangers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi détenir plusieurs entreprises peut-il réduire le risque spécifique ?',
                        'answers' => [
                            ['text' => 'Une mauvaise évolution d’une entreprise représente une part plus faible du portefeuille total', 'iscorrect' => true],
                            ['text' => 'Toutes les entreprises évoluent toujours ensemble', 'iscorrect' => false],
                            ['text' => 'Cela garantit une hausse de toutes les actions', 'iscorrect' => false],
                            ['text' => 'Cela élimine le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle diversification est la plus large ?',
                        'answers' => [
                            ['text' => 'Une diversification entre différentes classes d’actifs, secteurs et zones géographiques', 'iscorrect' => true],
                            ['text' => 'Acheter dix actions du même secteur uniquement', 'iscorrect' => false],
                            ['text' => 'Acheter plusieurs actions d’une même entreprise', 'iscorrect' => false],
                            ['text' => 'Détenir un seul actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est important pour évaluer le bénéfice de diversification entre deux actifs ?',
                        'answers' => [
                            ['text' => 'La relation entre leurs rendements, notamment leur corrélation', 'iscorrect' => true],
                            ['text' => 'Uniquement leur nom', 'iscorrect' => false],
                            ['text' => 'Uniquement leur prix actuel', 'iscorrect' => false],
                            ['text' => 'Leur date de création', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si deux actifs évoluent toujours exactement dans la même direction et avec la même proportion, le bénéfice de diversification est-il important ?',
                        'answers' => [
                            ['text' => 'Non, car leur comportement est parfaitement similaire', 'iscorrect' => true],
                            ['text' => 'Oui, il est maximal', 'iscorrect' => false],
                            ['text' => 'Oui, car ils appartiennent forcément à des secteurs différents', 'iscorrect' => false],
                            ['text' => 'Cela garantit une baisse du risque à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente une diversification géographique ?',
                        'answers' => [
                            ['text' => 'Investir dans des entreprises de plusieurs pays', 'iscorrect' => true],
                            ['text' => 'Acheter uniquement des actions d’une seule entreprise', 'iscorrect' => false],
                            ['text' => 'Acheter plusieurs titres d’une même société', 'iscorrect' => false],
                            ['text' => 'Détenir uniquement des liquidités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal danger d’un portefeuille très concentré ?',
                        'answers' => [
                            ['text' => 'Une mauvaise évolution d’un actif peut avoir un impact important sur l’ensemble du portefeuille', 'iscorrect' => true],
                            ['text' => 'Le rendement devient automatiquement nul', 'iscorrect' => false],
                            ['text' => 'Le portefeuille devient toujours sans risque', 'iscorrect' => false],
                            ['text' => 'Les coûts disparaissent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La diversification garantit-elle l’absence de perte ?',
                        'answers' => [
                            ['text' => 'Non, elle peut réduire certains risques mais ne supprime pas toutes les pertes possibles', 'iscorrect' => true],
                            ['text' => 'Oui, toujours', 'iscorrect' => false],
                            ['text' => 'Oui, si le portefeuille contient plus de cinq actifs', 'iscorrect' => false],
                            ['text' => 'Oui, lorsque les actifs sont internationaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une diversification entre secteurs peut-elle être utile ?',
                        'answers' => [
                            ['text' => 'Les secteurs peuvent être affectés différemment par les cycles économiques et les événements', 'iscorrect' => true],
                            ['text' => 'Tous les secteurs ont exactement les mêmes risques', 'iscorrect' => false],
                            ['text' => 'Elle garantit que tous les secteurs progressent', 'iscorrect' => false],
                            ['text' => 'Elle élimine les taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une diversification excessive ?',
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
                        'answers' => [
                            ['text' => 'La répartition du capital entre différentes catégories d’investissement', 'iscorrect' => true],
                            ['text' => 'Le choix d’une seule action', 'iscorrect' => false],
                            ['text' => 'La vente quotidienne de tous les titres', 'iscorrect' => false],
                            ['text' => 'Le calcul des impôts uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelles catégories peuvent être utilisées dans une allocation d’actifs ?',
                        'answers' => [
                            ['text' => 'Actions, obligations, liquidités et éventuellement actifs réels ou alternatifs', 'iscorrect' => true],
                            ['text' => 'Uniquement les actions', 'iscorrect' => false],
                            ['text' => 'Uniquement les devises', 'iscorrect' => false],
                            ['text' => 'Uniquement les obligations d’une seule entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle allocation correspond généralement à un investisseur très prudent ?',
                        'answers' => [
                            ['text' => 'Une allocation avec une part relativement importante d’actifs moins volatils', 'iscorrect' => true],
                            ['text' => 'Une allocation composée uniquement d’actions spéculatives', 'iscorrect' => false],
                            ['text' => 'Une allocation avec uniquement des actifs très risqués', 'iscorrect' => false],
                            ['text' => 'Une allocation sans liquidités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut influencer la part d’actions dans un portefeuille ?',
                        'answers' => [
                            ['text' => 'L’horizon d’investissement et la tolérance au risque', 'iscorrect' => true],
                            ['text' => 'Uniquement le nom de l’investisseur', 'iscorrect' => false],
                            ['text' => 'Uniquement le jour de la semaine', 'iscorrect' => false],
                            ['text' => 'La couleur du graphique boursier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur à long terme peut-il généralement accepter davantage de volatilité ?',
                        'answers' => [
                            ['text' => 'Il dispose de davantage de temps pour faire face aux fluctuations temporaires du marché', 'iscorrect' => true],
                            ['text' => 'Il ne peut jamais subir de perte', 'iscorrect' => false],
                            ['text' => 'Les actions deviennent automatiquement sans risque', 'iscorrect' => false],
                            ['text' => 'Les marchés montent toujours sur une courte période', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une allocation stratégique ?',
                        'answers' => [
                            ['text' => 'Une répartition cible conçue pour répondre aux objectifs à long terme de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Une décision prise uniquement pendant une journée', 'iscorrect' => false],
                            ['text' => 'Une liste de titres sans pondération', 'iscorrect' => false],
                            ['text' => 'Une stratégie qui interdit toute diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une allocation tactique ?',
                        'answers' => [
                            ['text' => 'Une modification temporaire de l’allocation afin de profiter de certaines opportunités ou conditions de marché', 'iscorrect' => true],
                            ['text' => 'Une allocation qui ne peut jamais être modifiée', 'iscorrect' => false],
                            ['text' => 'Une allocation exclusivement composée de liquidités', 'iscorrect' => false],
                            ['text' => 'Une allocation sans objectif défini', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les liquidités peuvent-elles être présentes dans un portefeuille ?',
                        'answers' => [
                            ['text' => 'Pour répondre aux besoins de liquidité et réduire l’exposition immédiate aux actifs risqués', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement élevé', 'iscorrect' => false],
                            ['text' => 'Pour augmenter toujours la volatilité', 'iscorrect' => false],
                            ['text' => 'Pour supprimer tous les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle des obligations dans de nombreux portefeuilles ?',
                        'answers' => [
                            ['text' => 'Elles peuvent apporter des revenus et diversifier l’exposition aux actions', 'iscorrect' => true],
                            ['text' => 'Elles garantissent toujours une performance positive', 'iscorrect' => false],
                            ['text' => 'Elles ne présentent jamais de risque', 'iscorrect' => false],
                            ['text' => 'Elles remplacent toutes les autres classes d’actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’allocation d’actifs doit-elle être adaptée à chaque investisseur ?',
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
                        'answers' => [
                            ['text' => 'Une part de propriété dans une entreprise', 'iscorrect' => true],
                            ['text' => 'Une dette garantie par l’État', 'iscorrect' => false],
                            ['text' => 'Un compte bancaire', 'iscorrect' => false],
                            ['text' => 'Un contrat de location', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement une obligation ?',
                        'answers' => [
                            ['text' => 'Une créance représentant un prêt accordé à un émetteur', 'iscorrect' => true],
                            ['text' => 'Une part de propriété dans une entreprise', 'iscorrect' => false],
                            ['text' => 'Une monnaie étrangère', 'iscorrect' => false],
                            ['text' => 'Une assurance automobile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est généralement le principal moteur du rendement d’une action ?',
                        'answers' => [
                            ['text' => 'La variation de son prix et les éventuels dividendes', 'iscorrect' => true],
                            ['text' => 'Un coupon fixe obligatoire', 'iscorrect' => false],
                            ['text' => 'Une rémunération bancaire garantie', 'iscorrect' => false],
                            ['text' => 'Un taux d’intérêt fixé par l’investisseur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel revenu peut verser une obligation ?',
                        'answers' => [
                            ['text' => 'Un coupon selon les conditions de l’obligation', 'iscorrect' => true],
                            ['text' => 'Un dividende obligatoire', 'iscorrect' => false],
                            ['text' => 'Une commission de courtage', 'iscorrect' => false],
                            ['text' => 'Une prime d’assurance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est généralement associé aux actions ?',
                        'answers' => [
                            ['text' => 'Le risque de baisse du cours et de perte en capital', 'iscorrect' => true],
                            ['text' => 'Une garantie permanente du capital', 'iscorrect' => false],
                            ['text' => 'L’absence totale de volatilité', 'iscorrect' => false],
                            ['text' => 'Un coupon fixe obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement important pour une obligation à taux fixe ?',
                        'answers' => [
                            ['text' => 'Le risque de variation des taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'Le risque que les actions deviennent plus rentables', 'iscorrect' => false],
                            ['text' => 'Le risque de dividende uniquement', 'iscorrect' => false],
                            ['text' => 'Le risque de changer de secteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi combiner actions et obligations peut-il être utile ?',
                        'answers' => [
                            ['text' => 'Parce que leurs caractéristiques de risque et de rendement peuvent être différentes', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils ont toujours des rendements identiques', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations éliminent tout risque', 'iscorrect' => false],
                            ['text' => 'Parce que les actions sont sans volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement au prix d’une obligation à taux fixe lorsque les taux de marché augmentent ?',
                        'answers' => [
                            ['text' => 'Son prix tend à diminuer', 'iscorrect' => true],
                            ['text' => 'Son prix augmente toujours', 'iscorrect' => false],
                            ['text' => 'Son coupon contractuel double automatiquement', 'iscorrect' => false],
                            ['text' => 'Sa maturité disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une action peut-elle verser un dividende ?',
                        'answers' => [
                            ['text' => 'Une entreprise peut distribuer une partie de ses bénéfices ou réserves aux actionnaires', 'iscorrect' => true],
                            ['text' => 'Parce qu’un dividende est obligatoire pour toutes les entreprises', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations exigent un dividende', 'iscorrect' => false],
                            ['text' => 'Parce que le prix de l’action ne peut jamais baisser', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle peut jouer une combinaison d’actions et d’obligations ?',
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
                        'answers' => [
                            ['text' => 'Définir les objectifs, l’horizon et le profil de risque de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Acheter immédiatement les actions les plus populaires', 'iscorrect' => false],
                            ['text' => 'Choisir les titres au hasard', 'iscorrect' => false],
                            ['text' => 'Vendre tous les actifs existants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la pondération d’un actif dans un portefeuille ?',
                        'answers' => [
                            ['text' => 'La proportion du portefeuille investie dans cet actif', 'iscorrect' => true],
                            ['text' => 'Le nombre de transactions quotidiennes', 'iscorrect' => false],
                            ['text' => 'Le rendement garanti de l’actif', 'iscorrect' => false],
                            ['text' => 'La date d’achat uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille contient 60 % d’actions et 40 % d’obligations. Que représentent ces pourcentages ?',
                        'answers' => [
                            ['text' => 'Les pondérations respectives des deux classes d’actifs', 'iscorrect' => true],
                            ['text' => 'Le rendement annuel garanti', 'iscorrect' => false],
                            ['text' => 'Le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le montant des frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il surveiller les pondérations d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Parce que les variations de prix peuvent modifier la répartition initiale', 'iscorrect' => true],
                            ['text' => 'Parce que les pondérations ne changent jamais', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés garantissent une allocation constante', 'iscorrect' => false],
                            ['text' => 'Parce que le nombre d’actions augmente automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille équilibré au sens général ?',
                        'answers' => [
                            ['text' => 'Un portefeuille dont la composition correspond au profil et aux objectifs définis', 'iscorrect' => true],
                            ['text' => 'Un portefeuille composé exactement de 50 % d’actions et 50 % d’obligations pour tout le monde', 'iscorrect' => false],
                            ['text' => 'Un portefeuille sans risque', 'iscorrect' => false],
                            ['text' => 'Un portefeuille qui change tous les jours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les frais doivent-ils être pris en compte lors de la construction d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Ils réduisent le rendement net obtenu par l’investisseur', 'iscorrect' => true],
                            ['text' => 'Ils augmentent toujours le rendement', 'iscorrect' => false],
                            ['text' => 'Ils n’ont aucun effet sur la performance', 'iscorrect' => false],
                            ['text' => 'Ils garantissent la diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut justifier une part plus importante de liquidités ?',
                        'answers' => [
                            ['text' => 'Un besoin prochain de financer une dépense importante', 'iscorrect' => true],
                            ['text' => 'Une volonté d’augmenter fortement le risque', 'iscorrect' => false],
                            ['text' => 'Une absence totale de besoins financiers', 'iscorrect' => false],
                            ['text' => 'Une garantie de hausse des actions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un portefeuille doit-il être cohérent avec l’horizon de placement ?',
                        'answers' => [
                            ['text' => 'Un horizon court laisse généralement moins de temps pour absorber une baisse temporaire des actifs risqués', 'iscorrect' => true],
                            ['text' => 'L’horizon n’a aucun rapport avec le risque', 'iscorrect' => false],
                            ['text' => 'Un horizon court garantit toujours une performance élevée', 'iscorrect' => false],
                            ['text' => 'Un horizon long rend tous les actifs sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’établir une allocation cible ?',
                        'answers' => [
                            ['text' => 'Disposer d’un cadre permettant de contrôler la composition et le niveau de risque du portefeuille', 'iscorrect' => true],
                            ['text' => 'Garantir le rendement annuel', 'iscorrect' => false],
                            ['text' => 'Empêcher toute évolution des marchés', 'iscorrect' => false],
                            ['text' => 'Supprimer les frais de transaction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que devrait faire un investisseur si son portefeuille ne correspond plus à son profil de risque ?',
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
                        'answers' => [
                            ['text' => 'L’action de ramener les pondérations du portefeuille vers leurs niveaux cibles', 'iscorrect' => true],
                            ['text' => 'La vente obligatoire de tous les actifs', 'iscorrect' => false],
                            ['text' => 'L’achat uniquement d’actions', 'iscorrect' => false],
                            ['text' => 'Le remplacement du gestionnaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pondérations peuvent-elles s’éloigner des objectifs ?',
                        'answers' => [
                            ['text' => 'Parce que les prix des différentes classes d’actifs évoluent différemment', 'iscorrect' => true],
                            ['text' => 'Parce que les pondérations sont toujours fixes', 'iscorrect' => false],
                            ['text' => 'Parce que les investisseurs ne possèdent jamais d’actifs', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés cessent de fonctionner', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les actions d’un portefeuille montent fortement, que peut-il se produire ?',
                        'answers' => [
                            ['text' => 'La part des actions peut devenir supérieure à la pondération cible', 'iscorrect' => true],
                            ['text' => 'La part des actions devient automatiquement nulle', 'iscorrect' => false],
                            ['text' => 'Les obligations disparaissent toujours', 'iscorrect' => false],
                            ['text' => 'Le portefeuille devient sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des objectifs du suivi régulier d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Vérifier que le portefeuille reste cohérent avec les objectifs et les contraintes', 'iscorrect' => true],
                            ['text' => 'Prévoir avec certitude le marché', 'iscorrect' => false],
                            ['text' => 'Garantir une hausse quotidienne', 'iscorrect' => false],
                            ['text' => 'Éliminer tous les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel inconvénient peut avoir un rééquilibrage trop fréquent ?',
                        'answers' => [
                            ['text' => 'Il peut augmenter les coûts de transaction et le turnover', 'iscorrect' => true],
                            ['text' => 'Il garantit une performance supérieure', 'iscorrect' => false],
                            ['text' => 'Il supprime toujours la volatilité', 'iscorrect' => false],
                            ['text' => 'Il élimine les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rééquilibrage périodique ?',
                        'answers' => [
                            ['text' => 'Un rééquilibrage effectué selon un calendrier défini, par exemple chaque trimestre ou chaque année', 'iscorrect' => true],
                            ['text' => 'Un rééquilibrage réalisé uniquement après une perte totale', 'iscorrect' => false],
                            ['text' => 'Un rééquilibrage sans allocation cible', 'iscorrect' => false],
                            ['text' => 'Une stratégie consistant à ne jamais modifier le portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’utiliser des seuils de rééquilibrage ?',
                        'answers' => [
                            ['text' => 'Agir lorsque l’écart d’une pondération devient suffisamment important', 'iscorrect' => true],
                            ['text' => 'Effectuer des transactions chaque jour', 'iscorrect' => false],
                            ['text' => 'Garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Supprimer la nécessité de définir une allocation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les nouveaux apports peuvent-ils faciliter le rééquilibrage ?',
                        'answers' => [
                            ['text' => 'Ils peuvent être dirigés vers les actifs sous-pondérés sans vendre nécessairement les autres actifs', 'iscorrect' => true],
                            ['text' => 'Ils éliminent tout risque de marché', 'iscorrect' => false],
                            ['text' => 'Ils garantissent une hausse des actifs', 'iscorrect' => false],
                            ['text' => 'Ils rendent les actifs illiquides', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que risque-t-on si on ne rééquilibre jamais un portefeuille ?',
                        'answers' => [
                            ['text' => 'Le profil de risque peut progressivement s’éloigner du profil initialement prévu', 'iscorrect' => true],
                            ['text' => 'Le portefeuille devient automatiquement plus prudent', 'iscorrect' => false],
                            ['text' => 'Le rendement devient garanti', 'iscorrect' => false],
                            ['text' => 'Les frais deviennent nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être pris en compte avant un rééquilibrage ?',
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
                        'answers' => [
                            ['text' => 'L’évolution de la valeur du portefeuille, en tenant compte des revenus générés selon la méthode utilisée', 'iscorrect' => true],
                            ['text' => 'Uniquement le montant investi initialement', 'iscorrect' => false],
                            ['text' => 'Le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le nombre de transactions effectuées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la performance à une référence ?',
                        'answers' => [
                            ['text' => 'Pour déterminer si la performance est satisfaisante par rapport à un objectif ou un marché comparable', 'iscorrect' => true],
                            ['text' => 'Pour garantir que le portefeuille gagne de l’argent', 'iscorrect' => false],
                            ['text' => 'Pour éliminer le risque', 'iscorrect' => false],
                            ['text' => 'Pour remplacer les objectifs de l’investisseur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice de référence ou benchmark ?',
                        'answers' => [
                            ['text' => 'Une référence utilisée pour comparer la performance d’un portefeuille', 'iscorrect' => true],
                            ['text' => 'Une garantie de rendement', 'iscorrect' => false],
                            ['text' => 'Un compte bancaire', 'iscorrect' => false],
                            ['text' => 'Un contrat d’assurance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il choisir un benchmark adapté au portefeuille ?',
                        'answers' => [
                            ['text' => 'Parce qu’une comparaison pertinente doit refléter l’univers et le niveau de risque du portefeuille', 'iscorrect' => true],
                            ['text' => 'Parce que tous les benchmarks sont identiques', 'iscorrect' => false],
                            ['text' => 'Parce qu’un benchmark élevé garantit la performance', 'iscorrect' => false],
                            ['text' => 'Parce que le benchmark élimine les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut réduire la performance nette d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Les frais de gestion et les coûts de transaction', 'iscorrect' => true],
                            ['text' => 'La diversification uniquement', 'iscorrect' => false],
                            ['text' => 'La définition d’un objectif', 'iscorrect' => false],
                            ['text' => 'La surveillance du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la performance doit-elle être analysée avec le risque ?',
                        'answers' => [
                            ['text' => 'Un rendement élevé peut avoir été obtenu en prenant un niveau de risque beaucoup plus important', 'iscorrect' => true],
                            ['text' => 'Le risque n’a aucun rapport avec l’investissement', 'iscorrect' => false],
                            ['text' => 'Un rendement élevé signifie toujours un risque nul', 'iscorrect' => false],
                            ['text' => 'La volatilité garantit le rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une performance positive ?',
                        'answers' => [
                            ['text' => 'Une performance indiquant une augmentation de la valeur selon la mesure utilisée', 'iscorrect' => true],
                            ['text' => 'Une garantie de bénéfice futur', 'iscorrect' => false],
                            ['text' => 'Une absence de risque', 'iscorrect' => false],
                            ['text' => 'Une baisse du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il considérer les revenus comme les dividendes ou coupons dans certaines mesures de performance ?',
                        'answers' => [
                            ['text' => 'Parce qu’ils contribuent au rendement total obtenu par l’investisseur', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils remplacent toujours la variation des prix', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils sont toujours garantis', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils n’ont aucun lien avec la performance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne performance sur une seule courte période doit-elle être interprétée avec prudence ?',
                        'answers' => [
                            ['text' => 'Elle peut être influencée par des conditions temporaires ou aléatoires du marché', 'iscorrect' => true],
                            ['text' => 'Elle garantit toujours la performance future', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque', 'iscorrect' => false],
                            ['text' => 'Elle prouve automatiquement la qualité du gestionnaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une analyse régulière de performance ?',
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
                        'answers' => [
                            ['text' => 'Elles peuvent pousser l’investisseur à prendre des décisions impulsives plutôt qu’à suivre une stratégie définie', 'iscorrect' => true],
                            ['text' => 'Elles garantissent toujours de bonnes décisions', 'iscorrect' => false],
                            ['text' => 'Elles suppriment les pertes', 'iscorrect' => false],
                            ['text' => 'Elles rendent les marchés prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement consiste à acheter un actif uniquement parce que son prix vient fortement d’augmenter ?',
                        'answers' => [
                            ['text' => 'Une décision potentiellement influencée par la poursuite des performances récentes ou le comportement grégaire', 'iscorrect' => true],
                            ['text' => 'Une diversification parfaite', 'iscorrect' => false],
                            ['text' => 'Une stratégie sans risque', 'iscorrect' => false],
                            ['text' => 'Une allocation stratégique obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi avoir une stratégie écrite peut-il aider un investisseur ?',
                        'answers' => [
                            ['text' => 'Elle fournit un cadre pour prendre des décisions cohérentes malgré les fluctuations du marché', 'iscorrect' => true],
                            ['text' => 'Elle garantit le rendement', 'iscorrect' => false],
                            ['text' => 'Elle empêche toute perte', 'iscorrect' => false],
                            ['text' => 'Elle rend les marchés prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’aversion aux pertes ?',
                        'answers' => [
                            ['text' => 'La tendance à ressentir une perte plus fortement qu’un gain de valeur comparable', 'iscorrect' => true],
                            ['text' => 'La recherche systématique de pertes', 'iscorrect' => false],
                            ['text' => 'Une méthode de calcul du rendement', 'iscorrect' => false],
                            ['text' => 'Une stratégie de diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vendre systématiquement après une baisse importante peut-il être problématique ?',
                        'answers' => [
                            ['text' => 'L’investisseur peut transformer une perte temporaire en perte définitive et manquer une éventuelle reprise', 'iscorrect' => true],
                            ['text' => 'Les marchés remontent toujours immédiatement', 'iscorrect' => false],
                            ['text' => 'Les pertes n’existent jamais', 'iscorrect' => false],
                            ['text' => 'La vente augmente toujours le rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de définir des règles de décision avant une période de forte volatilité ?',
                        'answers' => [
                            ['text' => 'Réduire le risque de décisions impulsives prises sous l’effet de l’émotion', 'iscorrect' => true],
                            ['text' => 'Garantir une hausse du marché', 'iscorrect' => false],
                            ['text' => 'Éliminer toutes les pertes', 'iscorrect' => false],
                            ['text' => 'Empêcher les prix de fluctuer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de se concentrer uniquement sur les performances récentes ?',
                        'answers' => [
                            ['text' => 'Les performances récentes ne représentent pas nécessairement les résultats futurs', 'iscorrect' => true],
                            ['text' => 'Les performances récentes sont toujours fausses', 'iscorrect' => false],
                            ['text' => 'Les performances passées n’existent jamais', 'iscorrect' => false],
                            ['text' => 'Les marchés sont toujours constants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut conduire à une concentration excessive ?',
                        'answers' => [
                            ['text' => 'Investir une part disproportionnée du portefeuille dans les actifs que l’on préfère personnellement', 'iscorrect' => true],
                            ['text' => 'Diversifier entre plusieurs classes d’actifs', 'iscorrect' => false],
                            ['text' => 'Définir des limites de pondération', 'iscorrect' => false],
                            ['text' => 'Rééquilibrer périodiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la discipline est-elle importante en gestion de portefeuille ?',
                        'answers' => [
                            ['text' => 'Elle aide à respecter une stratégie cohérente même lorsque les marchés deviennent émotionnels', 'iscorrect' => true],
                            ['text' => 'Elle garantit que les actifs augmenteront', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque', 'iscorrect' => false],
                            ['text' => 'Elle permet de prévoir tous les marchés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est généralement préférable pour un investisseur débutant ?',
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