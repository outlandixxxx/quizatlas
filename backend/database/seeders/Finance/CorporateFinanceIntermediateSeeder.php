<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CorporateFinanceIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'corporate-finance')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Finance d’entreprise — Analyse des investissements',
                'description' => 'Évaluez les projets d’investissement à partir des flux de trésorerie, de la VAN et du risque.',
                'questions' => [
                    [
                        'question' => 'Pourquoi utilise-t-on les flux de trésorerie plutôt que le bénéfice comptable pour évaluer un investissement ?',
                        'explanation' => 'La valeur d’un investissement dépend des encaissements et décaissements réellement générés dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Parce que les flux de trésorerie reflètent les encaissements et décaissements générés par le projet', 'is_correct' => true],
                            ['choice_text' => 'Parce que le bénéfice comptable est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux de trésorerie ne tiennent jamais compte du temps', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements ne produisent jamais de bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un flux de trésorerie différentiel ?',
                        'explanation' => 'Il représente la variation de trésorerie attribuable à la décision d’investissement étudiée.',
                        'choices' => [
                            ['choice_text' => 'La variation des flux de trésorerie causée par l’acceptation du projet', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires total de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les coûts déjà engagés', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice comptable avant impôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût irrécupérable dans une décision d’investissement ?',
                        'explanation' => 'Il s’agit d’un coût déjà engagé qui ne peut pas être récupéré et qui ne dépend donc pas de la décision actuelle.',
                        'choices' => [
                            ['choice_text' => 'Un coût déjà engagé qui ne sera pas modifié par la décision actuelle', 'is_correct' => true],
                            ['choice_text' => 'Un coût futur directement causé par le projet', 'is_correct' => false],
                            ['choice_text' => 'Un revenu futur du projet', 'is_correct' => false],
                            ['choice_text' => 'Une économie fiscale future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts d’opportunité doivent-ils être pris en compte ?',
                        'explanation' => 'L’utilisation d’une ressource dans un projet peut empêcher son utilisation pour une autre activité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’utiliser une ressource peut faire perdre une autre possibilité économique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils sont toujours enregistrés comme dettes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils représentent uniquement des dépenses passées', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont toujours égaux à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les amortissements peuvent-ils influencer les flux de trésorerie indirectement ?',
                        'explanation' => 'L’amortissement n’est pas un décaissement, mais il peut réduire le résultat imposable et donc les impôts.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent produire une économie d’impôt sans constituer un décaissement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils représentent toujours une sortie de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils augmentent directement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils remplacent les investissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une VAN de 25 000 € signifie principalement que :',
                        'explanation' => 'Une VAN positive indique une création de valeur selon les flux et le taux d’actualisation retenus.',
                        'choices' => [
                            ['choice_text' => 'Le projet crée une valeur actuelle nette de 25 000 € selon les hypothèses retenues', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires du projet est de 25 000 €', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice annuel sera toujours de 25 000 €', 'is_correct' => false],
                            ['choice_text' => 'Le projet ne comporte aucun risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de sensibilité est-elle utile ?',
                        'explanation' => 'Elle montre comment la rentabilité d’un projet évolue lorsque certaines hypothèses changent.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer l’effet de variations des hypothèses sur les résultats du projet', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir la VAN positive', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les flux de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque d’un projet doit-il être cohérent avec le taux d’actualisation utilisé ?',
                        'explanation' => 'Un taux trop faible pour un projet risqué peut surestimer sa valeur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un taux inadapté peut conduire à une mauvaise estimation de la valeur du projet', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les projets ont le même risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que le risque n’affecte jamais la valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux d’actualisation est toujours nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un scénario pessimiste dans l’analyse d’un investissement ?',
                        'explanation' => 'Il permet d’évaluer la résistance du projet à des conditions défavorables.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la capacité du projet à résister à des hypothèses défavorables', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les ventes augmenteront', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le scénario de base', 'is_correct' => false],
                            ['choice_text' => 'Calculer uniquement les impôts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle réexaminer régulièrement ses investissements ?',
                        'explanation' => 'Les hypothèses initiales, les coûts, les marchés et les flux peuvent évoluer.',
                        'choices' => [
                            ['choice_text' => 'Parce que les conditions économiques et les flux prévus peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un investissement est toujours identique dans le temps', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prévisions sont toujours exactes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la VAN devient automatiquement nulle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Structure du capital',
                'description' => 'Analysez les choix entre dette, capitaux propres et différentes structures de financement.',
                'questions' => [
                    [
                        'question' => 'Qu’appelle-t-on structure du capital ?',
                        'explanation' => 'Elle décrit principalement la combinaison des différentes sources de financement à long terme.',
                        'choices' => [
                            ['choice_text' => 'La combinaison de dette et de capitaux propres utilisée pour financer l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'La composition des stocks uniquement', 'is_correct' => false],
                            ['choice_text' => 'La répartition des salariés', 'is_correct' => false],
                            ['choice_text' => 'La composition du chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet potentiel l’endettement exerce-t-il sur le rendement des capitaux propres ?',
                        'explanation' => 'Le levier financier peut amplifier le rendement des capitaux propres lorsque le rendement économique dépasse le coût de la dette, mais il amplifie aussi les pertes.',
                        'choices' => [
                            ['choice_text' => 'Il peut amplifier aussi bien les rendements que les pertes des actionnaires', 'is_correct' => true],
                            ['choice_text' => 'Il garantit toujours une hausse du rendement', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucun effet sur le risque', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les obligations financières', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’effet de levier financier ?',
                        'explanation' => 'Il décrit l’effet de l’endettement sur le rendement et le risque supportés par les actionnaires.',
                        'choices' => [
                            ['choice_text' => 'L’effet de l’endettement sur le rendement et le risque des capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'L’effet des stocks sur le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'L’effet des dividendes sur les ventes', 'is_correct' => false],
                            ['choice_text' => 'L’effet des salaires sur les immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle préférer les capitaux propres à une dette supplémentaire ?',
                        'explanation' => 'Lorsque l’endettement devient élevé, une nouvelle dette peut augmenter fortement le risque financier.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter l’augmentation du risque financier et des obligations fixes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les capitaux propres n’ont aucun coût', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette est toujours interdite', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires ne prennent jamais de risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des principaux risques d’un niveau élevé de dette ?',
                        'explanation' => 'Les paiements d’intérêts et remboursements peuvent devenir difficiles à supporter lorsque les flux diminuent.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation du risque de difficultés financières', 'is_correct' => true],
                            ['choice_text' => 'Une disparition automatique des intérêts', 'is_correct' => false],
                            ['choice_text' => 'Une garantie de bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation certaine des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intérêts de la dette peuvent-ils avoir un avantage fiscal dans certains systèmes fiscaux ?',
                        'explanation' => 'Les intérêts peuvent être déductibles fiscalement selon la réglementation applicable.',
                        'choices' => [
                            ['choice_text' => 'Parce que les intérêts peuvent être déductibles du résultat imposable selon les règles fiscales', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute dette est exonérée d’impôt', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts sont toujours des revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes sont toujours déductibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’avantage fiscal de la dette ne signifie-t-il pas qu’il faut maximiser l’endettement ?',
                        'explanation' => 'L’endettement supplémentaire augmente aussi le risque financier et les coûts potentiels de difficultés financières.',
                        'choices' => [
                            ['choice_text' => 'Parce que les bénéfices fiscaux doivent être comparés aux risques et coûts supplémentaires de la dette', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette ne comporte jamais d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres sont toujours gratuits', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’avantage fiscal augmente toujours avec le risque sans limite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une difficulté financière ?',
                        'explanation' => 'Elle survient lorsqu’une entreprise rencontre des difficultés à respecter ses obligations financières.',
                        'choices' => [
                            ['choice_text' => 'Une situation dans laquelle l’entreprise rencontre des difficultés à respecter ses engagements financiers', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique des bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Une hausse certaine de la valeur boursière', 'is_correct' => false],
                            ['choice_text' => 'Une baisse obligatoire du chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stabilité des flux de trésorerie peut-elle influencer la capacité d’endettement ?',
                        'explanation' => 'Des flux plus prévisibles facilitent généralement le service de la dette.',
                        'choices' => [
                            ['choice_text' => 'Des flux prévisibles facilitent généralement le paiement des intérêts et remboursements', 'is_correct' => true],
                            ['choice_text' => 'Les flux stables empêchent toute dette', 'is_correct' => false],
                            ['choice_text' => 'Les flux stables rendent les intérêts inutiles', 'is_correct' => false],
                            ['choice_text' => 'La stabilité des flux n’a aucun rapport avec la dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider le choix de la structure du capital ?',
                        'explanation' => 'La structure doit équilibrer coût du financement, risque, flexibilité et objectifs stratégiques.',
                        'choices' => [
                            ['choice_text' => 'Rechercher un équilibre entre coût du capital, risque financier et flexibilité', 'is_correct' => true],
                            ['choice_text' => 'Maximiser systématiquement la dette', 'is_correct' => false],
                            ['choice_text' => 'Éviter systématiquement toute dette', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement le financement au taux nominal le plus bas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Coût du capital et WACC',
                'description' => 'Approfondissez le coût des capitaux propres, de la dette et le coût moyen pondéré du capital.',
                'questions' => [
                    [
                        'question' => 'Que représente le WACC ?',
                        'explanation' => 'Le WACC représente le coût moyen pondéré des différentes sources de financement de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Le coût moyen pondéré des différentes sources de capitaux', 'is_correct' => true],
                            ['choice_text' => 'Le coût des stocks', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires moyen', 'is_correct' => false],
                            ['choice_text' => 'Le rendement comptable des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pondérations sont-elles utilisées dans le WACC ?',
                        'explanation' => 'Chaque source de financement représente une proportion différente du financement total.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque source représente une part différente du financement total', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les financements ont exactement le même poids', 'is_correct' => false],
                            ['choice_text' => 'Parce que le WACC ignore les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Parce que les taux ne sont jamais nécessaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût des capitaux propres est-il généralement supérieur au coût de la dette ?',
                        'explanation' => 'Les actionnaires sont généralement exposés à davantage de risque et sont rémunérés après les créanciers.',
                        'choices' => [
                            ['choice_text' => 'Parce que les actionnaires supportent généralement davantage de risque que les créanciers', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette est toujours plus risquée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires reçoivent un intérêt garanti', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres sont sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le bêta d’une action dans le modèle d’évaluation des actifs financiers ?',
                        'explanation' => 'Le bêta mesure la sensibilité du rendement du titre aux mouvements du marché.',
                        'choices' => [
                            ['choice_text' => 'La sensibilité du rendement du titre aux variations du marché', 'is_correct' => true],
                            ['choice_text' => 'Le niveau de dette comptable', 'is_correct' => false],
                            ['choice_text' => 'Le montant des dividendes', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires futur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement un bêta supérieur à 1 ?',
                        'explanation' => 'Un bêta supérieur à 1 indique une sensibilité supérieure à celle du marché.',
                        'choices' => [
                            ['choice_text' => 'Le titre tend à être plus sensible aux mouvements du marché que le marché lui-même', 'is_correct' => true],
                            ['choice_text' => 'Le titre est sans risque', 'is_correct' => false],
                            ['choice_text' => 'Le titre ne varie jamais', 'is_correct' => false],
                            ['choice_text' => 'Le titre possède toujours une dette élevée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle CAPM, pourquoi ajoute-t-on une prime de risque au taux sans risque ?',
                        'explanation' => 'La prime rémunère l’exposition au risque systématique.',
                        'choices' => [
                            ['choice_text' => 'Pour rémunérer le risque systématique supporté par l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer le risque', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer les stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût de la dette doit-il parfois être considéré après impôt dans le WACC ?',
                        'explanation' => 'Lorsque les intérêts sont fiscalement déductibles, le coût effectif de la dette peut être réduit par l’économie d’impôt.',
                        'choices' => [
                            ['choice_text' => 'Parce que la déductibilité fiscale des intérêts peut réduire le coût effectif de la dette', 'is_correct' => true],
                            ['choice_text' => 'Parce que les intérêts sont toujours exonérés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres sont déductibles', 'is_correct' => false],
                            ['choice_text' => 'Parce que le WACC ne tient jamais compte de la fiscalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le WACC peut-il évoluer lorsque la structure financière change ?',
                        'explanation' => 'Les pondérations et le risque de chaque source de financement peuvent évoluer.',
                        'choices' => [
                            ['choice_text' => 'Parce que les pondérations et les coûts des différentes sources peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Parce que le WACC est toujours fixe', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette n’a aucun effet sur le risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres disparaissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un WACC unique pour tous les projets peut-il être problématique ?',
                        'explanation' => 'Des projets ayant des risques différents peuvent nécessiter des taux d’actualisation différents.',
                        'choices' => [
                            ['choice_text' => 'Parce que les projets peuvent présenter des profils de risque différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les projets ont toujours le même risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que le WACC ne contient jamais de taux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les projets ne génèrent jamais de flux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du WACC dans une analyse de VAN ?',
                        'is_correct' => true,
                        'explanation' => 'Lorsqu’il est approprié au risque du projet, le WACC peut servir de taux de référence pour actualiser les flux.',
                        'choices' => [
                            ['choice_text' => 'Il peut servir de taux de référence pour actualiser les flux d’un projet présentant un risque cohérent', 'is_correct' => true],
                            ['choice_text' => 'Il représente le bénéfice du projet', 'is_correct' => false],
                            ['choice_text' => 'Il représente le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Il garantit une VAN positive', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Analyse financière et ratios',
                'description' => 'Utilisez les principaux ratios pour analyser la performance et la situation financière d’une entreprise.',
                'questions' => [
                    [
                        'question' => 'Que mesure la rentabilité des capitaux propres ?',
                        'explanation' => 'Elle mesure le rendement obtenu par rapport aux capitaux propres investis.',
                        'choices' => [
                            ['choice_text' => 'Le rendement généré par les capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Le délai de paiement des clients', 'is_correct' => false],
                            ['choice_text' => 'La rotation des stocks uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le montant des dettes fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure la marge nette ?',
                        'explanation' => 'Elle indique la proportion du chiffre d’affaires qui reste sous forme de résultat net.',
                        'choices' => [
                            ['choice_text' => 'La part du chiffre d’affaires transformée en résultat net', 'is_correct' => true],
                            ['choice_text' => 'La durée moyenne des dettes', 'is_correct' => false],
                            ['choice_text' => 'Le montant des stocks', 'is_correct' => false],
                            ['choice_text' => 'La valeur des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les ratios sur plusieurs années ?',
                        'explanation' => 'L’évolution des ratios permet d’identifier les tendances de performance et de risque.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les tendances de performance et de situation financière', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul ratio suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données comptables', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une rentabilité future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer un ratio de liquidité très faible ?',
                        'is_correct' => true,
                        'explanation' => 'Un ratio faible peut signaler une capacité limitée à couvrir les obligations à court terme.',
                        'choices' => [
                            ['choice_text' => 'Une capacité potentiellement faible à faire face aux obligations à court terme', 'is_correct' => true],
                            ['choice_text' => 'Une rentabilité toujours élevée', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de dette', 'is_correct' => false],
                            ['choice_text' => 'Une croissance garantie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ratio d’endettement élevé doit-il être analysé avec prudence ?',
                        'is_correct' => true,
                        'explanation' => 'Un endettement élevé peut augmenter le risque financier, mais son interprétation dépend du secteur et de la capacité de l’entreprise à générer des flux.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut signaler une exposition importante aux obligations financières', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un endettement élevé garantit toujours la faillite', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il mesure uniquement les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ROA et le ROE ne mesurent-ils pas exactement la même chose ?',
                        'is_correct' => true,
                        'explanation' => 'Le ROA rapporte la performance aux actifs, tandis que le ROE se concentre sur les capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils rapportent la performance à des bases de financement différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils mesurent tous deux uniquement les stocks', 'is_correct' => false],
                            ['choice_text' => 'Parce que le ROE mesure le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que le ROA mesure uniquement les dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ROE élevé n’est-il pas nécessairement synonyme d’une excellente performance opérationnelle ?',
                        'is_correct' => true,
                        'explanation' => 'Un fort endettement peut amplifier le ROE sans que la performance opérationnelle soit proportionnellement meilleure.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’endettement peut amplifier le rendement des capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Parce que le ROE mesure uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que le ROE ne dépend jamais du financement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un ROE élevé signifie toujours zéro risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ratios doivent-ils être comparés à ceux d’entreprises similaires ?',
                        'is_correct' => true,
                        'explanation' => 'Les normes financières diffèrent selon les secteurs et modèles économiques.',
                        'choices' => [
                            ['choice_text' => 'Parce que les niveaux de ratios peuvent varier fortement selon le secteur et le modèle économique', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les entreprises ont les mêmes ratios', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ratios ne peuvent jamais être comparés dans le temps', 'is_correct' => false],
                            ['choice_text' => 'Parce que les concurrents ont toujours les mêmes résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut signaler une forte augmentation du délai de recouvrement client ?',
                        'is_correct' => true,
                        'explanation' => 'Elle peut indiquer un ralentissement des encaissements ou un assouplissement du crédit client.',
                        'choices' => [
                            ['choice_text' => 'Une immobilisation plus importante de trésorerie dans les créances clients', 'is_correct' => true],
                            ['choice_text' => 'Une disparition des créances', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique des ventes', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation certaine de la marge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse financière ne doit-elle pas reposer sur un seul ratio ?',
                        'is_correct' => true,
                        'explanation' => 'Chaque ratio fournit une information partielle sur la performance, la liquidité ou le risque.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un ratio ne fournit qu’une vision partielle de la situation financière', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ratios sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un ratio mesure toute la performance de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les états financiers ne contiennent aucune information', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Gestion du risque financier',
                'description' => 'Identifiez et analysez les principaux risques financiers auxquels une entreprise peut être exposée.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque financier ?',
                        'explanation' => 'Il désigne la possibilité que les résultats ou flux financiers diffèrent défavorablement des attentes.',
                        'choices' => [
                            ['choice_text' => 'La possibilité que les résultats financiers diffèrent défavorablement des attentes', 'is_correct' => true],
                            ['choice_text' => 'Une garantie de perte', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale d’incertitude', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le risque lié aux stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de taux d’intérêt ?',
                        'explanation' => 'Il correspond à l’impact potentiel des variations des taux sur les coûts de financement ou la valeur de certains actifs et passifs.',
                        'choices' => [
                            ['choice_text' => 'Le risque lié aux variations des taux d’intérêt', 'is_correct' => true],
                            ['choice_text' => 'Le risque de baisse des ventes uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le risque lié exclusivement aux stocks', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de change ?',
                        'explanation' => 'Il résulte des variations des taux de change qui peuvent affecter les flux et résultats d’une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Le risque que les variations des devises affectent les résultats ou flux financiers', 'is_correct' => true],
                            ['choice_text' => 'Le risque de variation des salaires', 'is_correct' => false],
                            ['choice_text' => 'Le risque de variation des stocks uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le risque d’une hausse des dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise exportatrice peut-elle être exposée au risque de change ?',
                        'is_correct' => true,
                        'explanation' => 'Les recettes en devises peuvent avoir une valeur différente en monnaie nationale lorsque le taux de change varie.',
                        'choices' => [
                            ['choice_text' => 'Parce que la valeur des recettes en devises peut varier lorsqu’elles sont converties', 'is_correct' => true],
                            ['choice_text' => 'Parce que les exportations ne génèrent jamais de revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce que le change ne concerne que les banques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les devises ont toujours une valeur fixe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de liquidité ?',
                        'explanation' => 'Il correspond au risque de ne pas disposer des liquidités nécessaires au moment où elles sont requises.',
                        'choices' => [
                            ['choice_text' => 'Le risque de ne pas disposer de suffisamment de liquidités pour respecter les obligations à échéance', 'is_correct' => true],
                            ['choice_text' => 'Le risque d’une hausse du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Le risque de croissance trop rapide uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le risque de bénéfice trop élevé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de crédit client est-il important ?',
                        'is_correct' => true,
                        'explanation' => 'Un client peut payer en retard ou ne pas payer, ce qui affecte les flux de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un client peut payer en retard ou ne pas respecter son obligation de paiement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les clients paient toujours comptant', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances sont toujours des revenus encaissés', 'is_correct' => false],
                            ['choice_text' => 'Parce que le crédit client n’a aucun effet sur la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification peut-elle réduire certains risques financiers ?',
                        'is_correct' => true,
                        'explanation' => 'Une exposition répartie entre plusieurs activités, clients ou marchés peut réduire la dépendance à une seule source.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut réduire la dépendance à une seule activité, source ou contrepartie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle élimine tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle garantit un rendement fixe', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime la nécessité de gérer la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios sont-ils utiles dans la gestion du risque ?',
                        'explanation' => 'Ils permettent d’étudier les conséquences de plusieurs évolutions possibles des variables financières.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer les conséquences de différentes hypothèses économiques et financières', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir le scénario le plus favorable', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute prévision', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les risques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise fortement endettée est-elle plus exposée au risque financier ?',
                        'is_correct' => true,
                        'explanation' => 'Les obligations fixes de dette augmentent la sensibilité de la situation financière aux variations des flux.',
                        'choices' => [
                            ['choice_text' => 'Parce que ses obligations financières fixes peuvent peser davantage lorsque les flux diminuent', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette augmente toujours les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts disparaissent en période difficile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres deviennent sans valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel dans la gestion du risque financier ?',
                        'is_correct' => true,
                        'explanation' => 'Le risque doit être identifié, mesuré, surveillé et géré en fonction des objectifs de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Identifier, mesurer, surveiller et maîtriser les risques significatifs', 'is_correct' => true],
                            ['choice_text' => 'Ignorer les risques lorsqu’ils sont difficiles à mesurer', 'is_correct' => false],
                            ['choice_text' => 'Éliminer toutes les activités risquées', 'is_correct' => false],
                            ['choice_text' => 'Accepter tous les risques sans analyse', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Politique de dividende',
                'description' => 'Analysez les décisions de distribution, de rétention et leurs effets sur le financement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un taux de distribution ?',
                        'explanation' => 'Il représente la proportion du résultat distribuée aux actionnaires sous forme de dividendes.',
                        'choices' => [
                            ['choice_text' => 'La proportion du résultat distribuée sous forme de dividendes', 'is_correct' => true],
                            ['choice_text' => 'La proportion de dette remboursée', 'is_correct' => false],
                            ['choice_text' => 'Le taux de croissance du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Le coût des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le taux de rétention ?',
                        'explanation' => 'Il représente la part du résultat conservée dans l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'La proportion du résultat conservée et non distribuée', 'is_correct' => true],
                            ['choice_text' => 'La proportion de dette à court terme', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’imposition', 'is_correct' => false],
                            ['choice_text' => 'Le rendement des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ayant de nombreux projets rentables peut-elle réduire son taux de distribution ?',
                        'is_correct' => true,
                        'explanation' => 'Elle peut conserver davantage de bénéfices pour financer ses investissements.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver davantage de ressources destinées au financement de ses investissements', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle ne réalise jamais de bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes augmentent automatiquement les investissements', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires ne reçoivent jamais de dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rachat d’actions peut-il constituer une autre forme de distribution aux actionnaires ?',
                        'is_correct' => true,
                        'explanation' => 'L’entreprise utilise des ressources pour racheter ses propres actions, ce qui restitue du capital aux actionnaires vendeurs.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entreprise restitue des ressources aux actionnaires en rachetant ses propres actions', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un rachat est toujours une dette', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un rachat augmente toujours la dette', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires ne reçoivent jamais de ressources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle éviter de financer une distribution excessive par une dette non soutenable ?',
                        'is_correct' => true,
                        'explanation' => 'Une distribution financée par une dette excessive peut fragiliser la structure financière.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut augmenter inutilement le risque financier de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette ne peut jamais financer une activité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes sont toujours interdits', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’endettement réduit toujours les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis existe entre distribution et réinvestissement des bénéfices ?',
                        'is_correct' => true,
                        'explanation' => 'Une distribution plus importante laisse moins de ressources internes pour financer les projets.',
                        'choices' => [
                            ['choice_text' => 'Distribuer davantage peut réduire les ressources internes disponibles pour les investissements', 'is_correct' => true],
                            ['choice_text' => 'Distribuer davantage augmente toujours les ressources internes', 'is_correct' => false],
                            ['choice_text' => 'Les deux décisions sont totalement indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Le réinvestissement ne nécessite jamais de financement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stabilité du dividende peut-elle être importante pour certains investisseurs ?',
                        'is_correct' => true,
                        'explanation' => 'Certains investisseurs recherchent une source de revenu relativement prévisible.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut offrir une certaine prévisibilité du revenu versé', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle garantit le cours de l’action', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle élimine le risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle garantit toujours une hausse des bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique de dividende peut-elle envoyer un signal au marché ?',
                        'is_correct' => true,
                        'explanation' => 'Les investisseurs peuvent interpréter certaines modifications de distribution comme une information sur les perspectives de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Parce que les investisseurs peuvent interpréter les changements de distribution comme une information', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un dividende contient toujours une prévision officielle', 'is_correct' => false],
                            ['choice_text' => 'Parce que le marché ignore les décisions financières', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes déterminent automatiquement les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise mature peut-elle avoir une politique de distribution différente d’une jeune entreprise en croissance ?',
                        'is_correct' => true,
                        'explanation' => 'Une entreprise mature peut avoir moins d’opportunités d’investissement rentables et davantage de flux disponibles.',
                        'choices' => [
                            ['choice_text' => 'Parce que leurs besoins d’investissement et leurs possibilités de croissance peuvent être différents', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une jeune entreprise ne peut jamais réaliser de bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une entreprise mature ne peut jamais investir', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes sont interdits aux entreprises en croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif doit guider une politique de distribution cohérente ?',
                        'is_correct' => true,
                        'explanation' => 'La politique doit être compatible avec les besoins d’investissement, la trésorerie et la création de valeur.',
                        'choices' => [
                            ['choice_text' => 'Équilibrer la rémunération des actionnaires et le financement des opportunités créatrices de valeur', 'is_correct' => true],
                            ['choice_text' => 'Distribuer toujours 100 % du résultat', 'is_correct' => false],
                            ['choice_text' => 'Ne jamais distribuer de ressources', 'is_correct' => false],
                            ['choice_text' => 'Financer tous les dividendes par une nouvelle dette', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Fonds de roulement et cycle d’exploitation',
                'description' => 'Approfondissez la gestion des stocks, créances, fournisseurs et cycle de conversion de trésorerie.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le cycle de conversion de trésorerie ?',
                        'explanation' => 'Il mesure le temps pendant lequel les ressources financières restent engagées dans le cycle d’exploitation avant récupération par les encaissements.',
                        'choices' => [
                            ['choice_text' => 'La durée entre le paiement des ressources d’exploitation et l’encaissement des ventes correspondantes', 'is_correct' => true],
                            ['choice_text' => 'La durée de vie des immobilisations', 'is_correct' => false],
                            ['choice_text' => 'La durée d’un emprunt bancaire', 'is_correct' => false],
                            ['choice_text' => 'La période fiscale annuelle uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet une réduction du délai de recouvrement des clients peut-elle avoir sur le cycle de trésorerie ?',
                        'is_correct' => true,
                        'explanation' => 'Des encaissements plus rapides réduisent le temps pendant lequel les ressources sont immobilisées.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire le cycle de conversion de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours les stocks', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente toujours les dettes bancaires', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les ventes à crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle négocier des délais fournisseurs plus longs ?',
                        'is_correct' => true,
                        'explanation' => 'Des délais plus longs peuvent réduire temporairement le besoin de financement du cycle d’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver plus longtemps sa trésorerie avant de régler ses fournisseurs', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les dettes en bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réduction excessive des stocks peut-elle aussi être problématique ?',
                        'is_correct' => true,
                        'explanation' => 'Des stocks insuffisants peuvent provoquer des ruptures et perturber les ventes ou la production.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut provoquer des ruptures de stock et perturber l’activité', 'is_correct' => true],
                            ['choice_text' => 'Parce que les stocks sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle augmente toujours les coûts financiers', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle empêche tout encaissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion du crédit client doit-elle tenir compte du risque de défaut ?',
                        'is_correct' => true,
                        'explanation' => 'Des conditions de crédit généreuses peuvent augmenter les créances douteuses et les pertes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un délai plus généreux peut accroître le risque de non-paiement', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les clients paient toujours à temps', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances sont toujours sans risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes à crédit sont toujours interdites', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le fonds de roulement net global est-il important dans l’équilibre financier ?',
                        'is_correct' => true,
                        'explanation' => 'Il permet d’apprécier dans quelle mesure les ressources stables couvrent les besoins liés aux actifs à long terme et à l’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Il aide à apprécier l’équilibre entre ressources stables et besoins de financement', 'is_correct' => true],
                            ['choice_text' => 'Il mesure uniquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Il représente uniquement les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours égal à la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance du chiffre d’affaires peut-elle augmenter le BFR ?',
                        'is_correct' => true,
                        'explanation' => 'Une activité plus importante peut nécessiter davantage de stocks et de créances.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une activité plus importante peut nécessiter davantage de stocks et de créances', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires est toujours payé immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la croissance réduit toujours les créances', 'is_correct' => false],
                            ['choice_text' => 'Parce que le BFR ne dépend jamais de l’activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le cycle d’exploitation diffère-t-il selon les secteurs ?',
                        'is_correct' => true,
                        'explanation' => 'Les délais de production, stockage, vente et paiement varient fortement selon les activités.',
                        'choices' => [
                            ['choice_text' => 'Parce que les délais de production, stockage, vente et paiement varient selon les activités', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les entreprises ont les mêmes cycles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fournisseurs ne sont jamais impliqués', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks n’existent que dans l’industrie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur aide à mesurer la durée moyenne d’immobilisation des stocks ?',
                        'is_correct' => true,
                        'explanation' => 'Le délai moyen de stockage permet d’évaluer le temps pendant lequel les stocks restent détenus.',
                        'choices' => [
                            ['choice_text' => 'Le délai moyen de stockage', 'is_correct' => true],
                            ['choice_text' => 'Le coût moyen des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Le taux de distribution', 'is_correct' => false],
                            ['choice_text' => 'Le rendement du dividende', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une bonne gestion du cycle de trésorerie ?',
                        'is_correct' => true,
                        'explanation' => 'L’entreprise cherche à réduire les ressources inutilement immobilisées sans dégrader son activité.',
                        'choices' => [
                            ['choice_text' => 'Réduire les immobilisations financières inutiles tout en maintenant la continuité de l’activité', 'is_correct' => true],
                            ['choice_text' => 'Maximiser les stocks', 'is_correct' => false],
                            ['choice_text' => 'Allonger systématiquement les délais clients', 'is_correct' => false],
                            ['choice_text' => 'Payer systématiquement tous les fournisseurs avant échéance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Fusions et acquisitions',
                'description' => 'Découvrez les notions essentielles liées aux opérations de fusion, acquisition et création de synergies.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une acquisition ?',
                        'explanation' => 'Une acquisition consiste pour une entreprise à prendre le contrôle d’une autre entreprise ou de certains de ses actifs.',
                        'choices' => [
                            ['choice_text' => 'L’opération par laquelle une entreprise prend le contrôle d’une autre entreprise ou de certains actifs', 'is_correct' => true],
                            ['choice_text' => 'Une simple réduction de coûts', 'is_correct' => false],
                            ['choice_text' => 'Un emprunt bancaire ordinaire', 'is_correct' => false],
                            ['choice_text' => 'Une distribution de dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une synergie dans une opération de fusion-acquisition ?',
                        'explanation' => 'Une synergie correspond à une valeur supplémentaire pouvant résulter de la combinaison de deux entreprises.',
                        'choices' => [
                            ['choice_text' => 'Une valeur ou économie supplémentaire résultant de la combinaison des activités', 'is_correct' => true],
                            ['choice_text' => 'Une dette automatiquement créée', 'is_correct' => false],
                            ['choice_text' => 'Une perte obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Un dividende exceptionnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle rechercher des synergies de coûts ?',
                        'is_correct' => true,
                        'explanation' => 'La combinaison des activités peut permettre d’éliminer certains coûts redondants.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire certains coûts redondants après la combinaison des activités', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement toutes les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tous les salariés', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute intégration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les synergies de revenus sont-elles différentes des synergies de coûts ?',
                        'is_correct' => true,
                        'explanation' => 'Les synergies de revenus cherchent à augmenter les ventes ou marges, tandis que les synergies de coûts réduisent certaines dépenses.',
                        'choices' => [
                            ['choice_text' => 'Elles reposent notamment sur une augmentation des ventes ou des revenus plutôt que sur une réduction des coûts', 'is_correct' => true],
                            ['choice_text' => 'Elles concernent uniquement les dettes', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toujours garanties', 'is_correct' => false],
                            ['choice_text' => 'Elles représentent uniquement les économies fiscales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valorisation de la cible est-elle essentielle dans une acquisition ?',
                        'is_correct' => true,
                        'explanation' => 'L’acquéreur doit déterminer si le prix payé est cohérent avec la valeur économique attendue.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si le prix payé est cohérent avec la valeur et les avantages attendus', 'is_correct' => true],
                            ['choice_text' => 'Parce que le prix n’a aucun effet sur la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une acquisition est toujours rentable', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d’analyser les flux futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une acquisition peut-elle détruire de la valeur ?',
                        'is_correct' => true,
                        'explanation' => 'Un prix excessif, des synergies surestimées ou une mauvaise intégration peuvent détruire de la valeur.',
                        'choices' => [
                            ['choice_text' => 'Parce que le prix payé peut être excessif ou que les synergies peuvent être surestimées', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute acquisition réduit automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les synergies sont toujours négatives', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une cible ne possède jamais d’actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le financement d’une acquisition est-il une décision importante ?',
                        'is_correct' => true,
                        'explanation' => 'Le choix entre dette, trésorerie et actions influence le risque et la structure financière.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il influence le risque, le coût du financement et la structure du capital', 'is_correct' => true],
                            ['choice_text' => 'Parce que le financement n’a aucun effet après l’acquisition', 'is_correct' => false],
                            ['choice_text' => 'Parce que seule la trésorerie peut financer une acquisition', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette est toujours préférable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’intégration après une acquisition est-elle importante ?',
                        'is_correct' => true,
                        'explanation' => 'Les synergies prévues doivent être effectivement réalisées après la transaction.',
                        'choices' => [
                            ['choice_text' => 'Parce que les bénéfices attendus de l’opération doivent être effectivement réalisés', 'is_correct' => true],
                            ['choice_text' => 'Parce que la transaction se termine avant l’intégration', 'is_correct' => false],
                            ['choice_text' => 'Parce que les salariés n’ont aucun rôle dans une acquisition', 'is_correct' => false],
                            ['choice_text' => 'Parce que les synergies sont automatiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la due diligence est-elle importante ?',
                        'is_correct' => true,
                        'explanation' => 'Elle permet d’examiner les informations financières, juridiques, commerciales et opérationnelles de la cible.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les risques, engagements et caractéristiques de la cible avant la transaction', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir une hausse du cours', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les négociations', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une décision d’acquisition ?',
                        'is_correct' => true,
                        'explanation' => 'L’acquisition doit être évaluée selon sa valeur économique, ses risques, son prix et sa capacité à créer de la valeur.',
                        'choices' => [
                            ['choice_text' => 'Évaluer le prix, les synergies, les risques, le financement et la valeur créée', 'is_correct' => true],
                            ['choice_text' => 'Acheter systématiquement l’entreprise la plus grande', 'is_correct' => false],
                            ['choice_text' => 'Se baser uniquement sur le chiffre d’affaires de la cible', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le coût du financement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Gouvernance et création de valeur',
                'description' => 'Analysez la création de valeur, les conflits d’intérêts et les mécanismes de gouvernance financière.',
                'questions' => [
                    [
                        'question' => 'Que signifie créer de la valeur pour les actionnaires ?',
                        'is_correct' => true,
                        'explanation' => 'La création de valeur implique notamment que les rendements obtenus compensent le coût des capitaux investis.',
                        'choices' => [
                            ['choice_text' => 'Générer une performance suffisante pour rémunérer le capital compte tenu du risque', 'is_correct' => true],
                            ['choice_text' => 'Augmenter uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Réduire systématiquement tous les coûts', 'is_correct' => false],
                            ['choice_text' => 'Augmenter uniquement les dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chiffre d’affaires seul ne suffit-il pas pour mesurer la création de valeur ?',
                        'is_correct' => true,
                        'explanation' => 'Une hausse des ventes peut nécessiter beaucoup de capital et générer une rentabilité insuffisante.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une croissance des ventes peut nécessiter beaucoup de ressources sans générer un rendement suffisant', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires n’existe jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes sont toujours des pertes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffre d’affaires mesure directement le risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un conflit d’agence ?',
                        'is_correct' => true,
                        'explanation' => 'Il peut apparaître lorsque les intérêts des dirigeants et ceux des propriétaires ne sont pas parfaitement alignés.',
                        'choices' => [
                            ['choice_text' => 'Un conflit potentiel entre les intérêts des dirigeants et ceux des propriétaires', 'is_correct' => true],
                            ['choice_text' => 'Un conflit entre deux fournisseurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une différence entre deux taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de calcul fiscal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gouvernance d’entreprise est-elle importante ?',
                        'is_correct' => true,
                        'explanation' => 'Elle contribue à encadrer les décisions des dirigeants et à protéger les intérêts des différentes parties prenantes.',
                        'choices' => [
                            ['choice_text' => 'Pour encadrer la prise de décision et limiter certains conflits d’intérêts', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les risques financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir chaque investissement', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la comptabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle le conseil d’administration peut-il jouer dans la gouvernance financière ?',
                        'is_correct' => true,
                        'explanation' => 'Il peut superviser la direction et contribuer au contrôle des décisions stratégiques et financières.',
                        'choices' => [
                            ['choice_text' => 'Superviser la direction et contribuer au contrôle des décisions stratégiques', 'is_correct' => true],
                            ['choice_text' => 'Gérer uniquement les stocks', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les salariés', 'is_correct' => false],
                            ['choice_text' => 'Déterminer automatiquement les taux de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rémunération des dirigeants peut-elle être liée à la performance ?',
                        'is_correct' => true,
                        'explanation' => 'Un système bien conçu peut contribuer à aligner les intérêts des dirigeants avec ceux des propriétaires.',
                        'choices' => [
                            ['choice_text' => 'Pour favoriser l’alignement entre les décisions des dirigeants et les objectifs de création de valeur', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir une hausse du cours dans toutes les situations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tout salaire fixe', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer les risques de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle surveiller le rendement du capital investi ?',
                        'is_correct' => true,
                        'explanation' => 'Il permet de comparer la performance économique aux ressources mobilisées et au coût du capital.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier si les ressources investies génèrent une performance suffisante', 'is_correct' => true],
                            ['choice_text' => 'Pour mesurer uniquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les dividendes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les investissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance rapide peut-elle détruire de la valeur ?',
                        'is_correct' => true,
                        'explanation' => 'Si les investissements nécessaires à la croissance rapportent moins que leur coût du capital, la croissance peut détruire de la valeur.',
                        'choices' => [
                            ['choice_text' => 'Parce que les nouveaux investissements peuvent générer un rendement inférieur au coût du capital', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute croissance est négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes réduisent toujours les bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements n’ont jamais de rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les informations financières doivent-elles être fiables et transparentes ?',
                        'is_correct' => true,
                        'explanation' => 'Les investisseurs et créanciers utilisent ces informations pour prendre leurs décisions.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre aux investisseurs et créanciers de prendre des décisions mieux informées', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir automatiquement la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute concurrence', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les audits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume la création de valeur financière ?',
                        'is_correct' => true,
                        'explanation' => 'La création de valeur dépend de la capacité à obtenir des rendements supérieurs au coût des ressources mobilisées, compte tenu du risque.',
                        'choices' => [
                            ['choice_text' => 'Investir dans des activités dont le rendement attendu est suffisant par rapport au coût du capital et au risque', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les ventes quelle que soit la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Réduire les investissements au minimum', 'is_correct' => false],
                            ['choice_text' => 'Distribuer systématiquement tous les bénéfices', 'is_correct' => false],
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
                    'description' => $quizData['description'],
                    'duration' => 25,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Intermediate',
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