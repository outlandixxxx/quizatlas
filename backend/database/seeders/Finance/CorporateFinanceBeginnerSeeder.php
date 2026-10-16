<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CorporateFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'corporate-finance')->firstOrFail();

        $quizSettings = [
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
        ];

        $quizzes = [
            [
                'title' => 'Finance d’entreprise — Introduction',
                'description' => 'Découvrez les objectifs, acteurs et décisions fondamentales de la finance d’entreprise.',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de la finance d’entreprise ?',
                        'explanation' => 'La finance d’entreprise vise notamment à gérer les ressources financières et à soutenir les décisions créatrices de valeur.',
                        'choices' => [
                            ['choice_text' => 'Tenir la comptabilité et établir les états financiers destinés aux autorités et aux tiers', 'is_correct' => false],
                            ['choice_text' => 'Optimiser le chiffre d’affaires grâce à la politique commerciale et à la fixation des prix', 'is_correct' => false],
                            ['choice_text' => 'Assurer le respect des obligations fiscales et sociales de l’entreprise chaque année', 'is_correct' => false],
                            ['choice_text' => 'Prendre de bonnes décisions d’investissement, de financement et de gestion financière', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelles sont les trois grandes décisions classiques de la finance d’entreprise ?',
                        'explanation' => 'Les trois grandes décisions concernent l’investissement, le financement et la gestion des ressources financières à court terme.',
                        'choices' => [
                            ['choice_text' => 'Investissement, production et gestion commerciale courante', 'is_correct' => false],
                            ['choice_text' => 'Investissement, financement et gestion financière courante', 'is_correct' => true],
                            ['choice_text' => 'Comptabilité, fiscalité et contrôle de gestion des opérations', 'is_correct' => false],
                            ['choice_text' => 'Planification, budgétisation et reporting réglementaire de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une décision d’investissement ?',
                        'explanation' => 'Elle consiste à décider comment utiliser les ressources de l’entreprise pour acquérir des actifs ou financer des projets.',
                        'choices' => [
                            ['choice_text' => 'Décider dans quels projets ou actifs l’entreprise doit engager ses ressources', 'is_correct' => true],
                            ['choice_text' => 'Décider comment l’entreprise se procure les capitaux nécessaires à ses projets', 'is_correct' => false],
                            ['choice_text' => 'Décider quelle part des bénéfices est distribuée aux actionnaires chaque année', 'is_correct' => false],
                            ['choice_text' => 'Décider comment gérer au quotidien les encaissements et paiements de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une décision de financement ?',
                        'explanation' => 'Elle consiste à déterminer comment l’entreprise va obtenir les ressources nécessaires à ses investissements.',
                        'choices' => [
                            ['choice_text' => 'Choisir dans quels projets investir les ressources dont dispose l’entreprise aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'Choisir comment organiser la production et les achats de matières premières de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Choisir comment financer les besoins de l’entreprise entre dette et capitaux propres notamment', 'is_correct' => true],
                            ['choice_text' => 'Choisir comment gérer les stocks, les créances clients et les délais de paiement des fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la trésorerie est-elle importante pour une entreprise ?',
                        'explanation' => 'La trésorerie permet notamment de payer les obligations courantes et de maintenir la continuité des activités.',
                        'choices' => [
                            ['choice_text' => 'Elle mesure la richesse créée par l’entreprise sur l’ensemble de son existence', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de faire face aux décaissements et aux besoins financiers courants', 'is_correct' => true],
                            ['choice_text' => 'Elle correspond au bénéfice comptable réalisé pendant l’exercice écoulé', 'is_correct' => false],
                            ['choice_text' => 'Elle représente la valeur des immobilisations détenues par l’entreprise à long terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un investisseur attend généralement d’un investissement dans une entreprise ?',
                        'explanation' => 'L’investisseur cherche généralement une rémunération en fonction du rendement et du risque supporté.',
                        'choices' => [
                            ['choice_text' => 'Un revenu fixe identique quel que soit le niveau de risque de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un droit de gérer l’entreprise au quotidien en échange de son apport', 'is_correct' => false],
                            ['choice_text' => 'Une rémunération du capital en fonction du rendement et du risque', 'is_correct' => true],
                            ['choice_text' => 'Le remboursement du capital apporté, comme pour un dépôt bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque est-il important dans une décision financière ?',
                        'explanation' => 'Deux investissements peuvent offrir des rendements différents avec des niveaux de risque très différents.',
                        'choices' => [
                            ['choice_text' => 'Parce que le risque détermine à lui seul le montant du chiffre d’affaires futur', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un risque plus élevé entraîne un rendement plus faible pour l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le risque est supporté par les prêteurs mais pas par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un rendement attendu doit être évalué en fonction du risque assumé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ne doit-elle pas confondre bénéfice et trésorerie ?',
                        'explanation' => 'Le bénéfice comptable et les flux de trésorerie suivent des mécanismes différents.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un bénéfice comptable ne signifie pas nécessairement que le même montant est disponible en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que le bénéfice mesure les encaissements de l’exercice, alors que la trésorerie mesure les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice comptable est calculé en tenant compte des flux de trésorerie futurs actualisés', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie correspond au bénéfice net diminué des dividendes versés aux actionnaires de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle rechercher un équilibre entre dette et capitaux propres ?',
                        'explanation' => 'La dette peut fournir un financement mais augmente aussi les obligations financières et donc le risque.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir le coût de financement le plus bas possible, quel que soit le niveau de risque', 'is_correct' => false],
                            ['choice_text' => 'Pour financer ses besoins tout en maîtrisant le coût et le risque du financement', 'is_correct' => true],
                            ['choice_text' => 'Pour répartir le financement à parts égales entre dette et capitaux propres dans le bilan', 'is_correct' => false],
                            ['choice_text' => 'Pour maximiser la rentabilité des actionnaires en utilisant le plus de dette possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’un directeur financier ?',
                        'explanation' => 'Le directeur financier contribue notamment aux décisions d’investissement, de financement, de trésorerie et de performance financière.',
                        'choices' => [
                            ['choice_text' => 'Piloter les ressources financières et contribuer aux décisions stratégiques de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Tenir la comptabilité générale et préparer les déclarations fiscales de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Diriger la production et la logistique pour réduire les coûts d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Négocier les contrats avec les clients et définir la politique commerciale et tarifaire de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finance d’entreprise — Valeur temps de l’argent',
                'description' => 'Apprenez les concepts fondamentaux de valeur actuelle, valeur future et actualisation.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la valeur temps de l’argent ?',
                        'explanation' => 'Un montant disponible aujourd’hui peut être investi et générer un rendement, ce qui le rend différent du même montant reçu plus tard.',
                        'choices' => [
                            ['choice_text' => 'L’idée que la valeur d’une somme dépend de la devise utilisée et non de la date à laquelle elle est reçue', 'is_correct' => false],
                            ['choice_text' => 'L’idée que le prix des biens augmente avec le temps, sans lien avec les placements possibles', 'is_correct' => false],
                            ['choice_text' => 'L’idée qu’un montant reçu plus tard vaut plus qu’un montant immédiat, car il est mieux protégé du risque', 'is_correct' => false],
                            ['choice_text' => 'L’idée qu’un montant aujourd’hui peut avoir une valeur différente du même montant reçu dans le futur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi 1 000 € aujourd’hui peuvent-ils être préférables à 1 000 € dans un an ?',
                        'explanation' => 'Les 1 000 € disponibles aujourd’hui peuvent potentiellement être investis et produire un rendement.',
                        'choices' => [
                            ['choice_text' => 'Parce que les entreprises ne peuvent pas investir des montants reçus en fin d’année', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’argent reçu plus tard peut être investi plus longtemps et rapporte donc davantage', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’argent disponible aujourd’hui peut être investi et générer un rendement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les montants futurs sont comptabilisés au bilan à une valeur plus faible que leur valeur réelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur future ?',
                        'explanation' => 'La valeur future représente la valeur qu’un montant actuel atteindrait après application d’un taux sur une période.',
                        'choices' => [
                            ['choice_text' => 'La valeur à laquelle un flux futur est ramené aujourd’hui après actualisation', 'is_correct' => false],
                            ['choice_text' => 'La valeur de revente estimée d’un actif à la fin de sa durée d’utilisation', 'is_correct' => false],
                            ['choice_text' => 'La valeur comptable que l’entreprise prévoit d’inscrire à son bilan à la clôture suivante', 'is_correct' => false],
                            ['choice_text' => 'La valeur qu’un montant présent peut atteindre après capitalisation sur une période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si 1 000 € sont placés à 5 % pendant un an, quelle valeur future simple obtient-on avant impôts et frais ?',
                        'explanation' => '1 000 × 1,05 = 1 050 €.',
                        'choices' => [
                            ['choice_text' => '950 €', 'is_correct' => false],
                            ['choice_text' => '1 005 €', 'is_correct' => false],
                            ['choice_text' => '1 050 €', 'is_correct' => true],
                            ['choice_text' => '1 500 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’actualisation ?',
                        'explanation' => 'L’actualisation consiste à convertir un flux futur en une valeur exprimée en monnaie d’aujourd’hui.',
                        'choices' => [
                            ['choice_text' => 'Convertir un montant futur en sa valeur équivalente aujourd’hui', 'is_correct' => true],
                            ['choice_text' => 'Convertir un montant présent en sa valeur équivalente à une date future', 'is_correct' => false],
                            ['choice_text' => 'Ajuster un montant en fonction de la variation du niveau général des prix', 'is_correct' => false],
                            ['choice_text' => 'Répartir le coût d’un investissement sur sa durée d’utilisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet a généralement un taux d’actualisation plus élevé sur la valeur actuelle d’un flux futur ?',
                        'explanation' => 'Un taux d’actualisation plus élevé réduit davantage la valeur actuelle du flux futur.',
                        'choices' => [
                            ['choice_text' => 'Il augmente généralement la valeur actuelle', 'is_correct' => false],
                            ['choice_text' => 'Il réduit généralement la valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'Il laisse généralement la valeur actuelle inchangée', 'is_correct' => false],
                            ['choice_text' => 'Il modifie la valeur future mais pas la valeur actuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux projets ayant le même montant total de flux peuvent-ils avoir des valeurs différentes ?',
                        'explanation' => 'La date à laquelle les flux sont reçus influence leur valeur actuelle.',
                        'choices' => [
                            ['choice_text' => 'Parce que le taux d’actualisation varie avec la devise des flux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux les plus éloignés ont davantage de valeur actuelle', 'is_correct' => false],
                            ['choice_text' => 'Parce que le calendrier des flux peut être différent', 'is_correct' => true],
                            ['choice_text' => 'Parce que seul le dernier flux est pris en compte dans l’actualisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inflation est-elle importante lorsqu’on compare des montants reçus à des dates différentes ?',
                        'explanation' => 'L’inflation réduit généralement le pouvoir d’achat de la monnaie dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut réduire le pouvoir d’achat futur de la monnaie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle augmente le pouvoir d’achat d’une somme reçue plus tard', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle modifie le montant nominal inscrit sur le contrat de paiement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle équivaut au taux d’intérêt demandé par les banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capitalisation composée est-elle différente de la capitalisation simple ?',
                        'explanation' => 'Avec la capitalisation composée, les intérêts accumulés peuvent eux-mêmes produire des intérêts.',
                        'choices' => [
                            ['choice_text' => 'Parce que le taux d’intérêt est calculé sur le capital de départ à chaque période', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts accumulés peuvent eux-mêmes générer des intérêts', 'is_correct' => true],
                            ['choice_text' => 'Parce que le capital est remboursé au fur et à mesure de la période', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux d’intérêt est relevé à chaque nouvelle période de placement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur temps de l’argent est-elle essentielle en finance d’entreprise ?',
                        'explanation' => 'Elle permet de comparer des flux à des dates différentes et d’évaluer des projets d’investissement.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de mesurer le bénéfice comptable d’un exercice avec précision', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de prévoir avec exactitude le montant des flux futurs de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de déterminer le niveau d’endettement maximal de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de comparer des flux intervenant à des dates différentes', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finance d’entreprise — Valeur actuelle nette et investissements',
                'description' => 'Découvrez les principes de base de la VAN et de l’évaluation des projets.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la valeur actuelle nette ?',
                        'explanation' => 'La VAN compare la valeur actuelle des flux futurs d’un projet au montant investi initialement.',
                        'choices' => [
                            ['choice_text' => 'Le total des flux futurs prévus moins l’investissement initial, sans actualisation', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle des flux futurs divisée par l’investissement initial', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle des flux futurs moins l’investissement initial', 'is_correct' => true],
                            ['choice_text' => 'Le flux annuel moyen divisé par l’investissement initial', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement une VAN positive ?',
                        'explanation' => 'Une VAN positive signifie que les flux actualisés dépassent l’investissement initial au taux retenu.',
                        'choices' => [
                            ['choice_text' => 'Le projet rapporte un rendement inférieur au coût du capital utilisé dans l’analyse', 'is_correct' => false],
                            ['choice_text' => 'Le projet permet de récupérer l’investissement initial sans créer de valeur', 'is_correct' => false],
                            ['choice_text' => 'Le projet génère un bénéfice comptable positif pour chacune des années étudiées', 'is_correct' => false],
                            ['choice_text' => 'Le projet offre un rendement supérieur au coût du capital utilisé dans l’analyse', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’actualisation est-il important dans le calcul de la VAN ?',
                        'explanation' => 'Il détermine la valeur actuelle des flux futurs et influence donc directement la VAN.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il influence la valeur actuelle des flux futurs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il détermine le montant de l’investissement initial du projet', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il fixe la durée de vie du projet étudié', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il modifie les flux de trésorerie prévus chaque année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet coûte 100 000 € et génère une valeur actuelle des flux de 130 000 €. Quelle est la VAN simplifiée ?',
                        'explanation' => '130 000 € - 100 000 € = 30 000 €.',
                        'choices' => [
                            ['choice_text' => '30 000 €', 'is_correct' => true],
                            ['choice_text' => '100 000 €', 'is_correct' => false],
                            ['choice_text' => '130 000 €', 'is_correct' => false],
                            ['choice_text' => '230 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un projet présentant une VAN positive n’est-il pas nécessairement sans risque ?',
                        'explanation' => 'Les prévisions peuvent être différentes de la réalité.',
                        'choices' => [
                            ['choice_text' => 'Parce que la VAN est calculée à partir de flux passés dont le montant est parfaitement connu', 'is_correct' => false],
                            ['choice_text' => 'Parce que la VAN dépend d’hypothèses concernant les flux, les coûts et le taux d’actualisation', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux d’actualisation est fixé par la loi et ne varie pas selon les projets', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une VAN positive mesure le bénéfice comptable du projet et non sa valeur actuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer les flux pertinents d’investissement des flux historiques ?',
                        'explanation' => 'Les coûts déjà engagés ne sont généralement pas modifiés par la nouvelle décision.',
                        'choices' => [
                            ['choice_text' => 'Parce que les flux historiques sont comptabilisés en charges et pas en trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux passés sont déjà actualisés au taux de l’année en cours', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux historiques sont généralement plus élevés que les flux prévisionnels', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts déjà engagés ne changent généralement pas selon la décision future', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les besoins en fonds de roulement doivent-ils être intégrés dans l’analyse d’un investissement ?',
                        'explanation' => 'Un projet peut nécessiter des stocks ou créances supplémentaires qui consomment de la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils représentent un produit encaissé dès le lancement du projet', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils remplacent le montant de l’investissement initial dans le calcul', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils peuvent générer des besoins de trésorerie supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils sont déjà inclus dans le taux d’actualisation retenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur résiduelle d’un investissement peut-elle influencer sa VAN ?',
                        'explanation' => 'La valeur récupérée en fin de projet constitue un flux futur qui doit être pris en compte.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle représente un flux futur qui peut avoir une valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle correspond au coût d’achat de l’investissement initial', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle correspond aux amortissements cumulés qui réduisent la valeur comptable', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle indique le taux de rendement exigé en fin de projet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la VAN de plusieurs projets peut-il aider à choisir entre plusieurs investissements ?',
                        'explanation' => 'La VAN mesure la valeur créée au taux d’actualisation retenu, sous réserve de cohérence des hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle permet de classer les projets selon leur chiffre d’affaires annuel', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle mesure le temps nécessaire pour récupérer l’investissement initial', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle indique directement le projet dont la durée de vie est la plus longue', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle fournit une mesure de la valeur créée selon les hypothèses retenues', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne analyse d’investissement ?',
                        'explanation' => 'Une analyse complète considère les flux pertinents, le calendrier, le risque et le coût du capital.',
                        'choices' => [
                            ['choice_text' => 'Évaluer les flux différentiels, leur calendrier, leur risque et leur valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'Comparer le bénéfice comptable moyen de chaque projet au capital investi', 'is_correct' => false],
                            ['choice_text' => 'Retenir le projet dont le délai de récupération est le plus court', 'is_correct' => false],
                            ['choice_text' => 'Privilégier le projet qui offre le chiffre d’affaires le plus élevé dès la première année', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finance d’entreprise — Coût du capital',
                'description' => 'Comprenez les principes fondamentaux du coût des différentes sources de financement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le coût du capital ?',
                        'explanation' => 'Le coût du capital représente le rendement exigé par les apporteurs de capitaux compte tenu du risque.',
                        'choices' => [
                            ['choice_text' => 'Le taux d’intérêt facturé par la banque sur le dernier emprunt contracté par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le montant des dividendes effectivement versés aux actionnaires pendant l’année', 'is_correct' => false],
                            ['choice_text' => 'Le rendement exigé par les apporteurs de financement pour fournir du capital à l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Le total des charges financières supportées par l’entreprise sur les emprunts de l’exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût de la dette est-il généralement lié aux taux d’intérêt ?',
                        'explanation' => 'Les prêteurs demandent une rémunération en contrepartie des fonds prêtés et du risque.',
                        'choices' => [
                            ['choice_text' => 'Parce que les intérêts versés sont fixés par les actionnaires de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prêteurs demandent une rémunération pour fournir les fonds', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’intérêt représente un bénéfice distribué aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que les taux d’intérêt sont déterminés par le chiffre d’affaires de l’emprunteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres ont-ils aussi un coût pour l’entreprise ?',
                        'explanation' => 'Les actionnaires attendent un rendement en compensation du risque qu’ils supportent.',
                        'choices' => [
                            ['choice_text' => 'Parce que les actionnaires reçoivent des intérêts contractuels fixés à l’avance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires exigent également une rémunération du capital investi', 'is_correct' => true],
                            ['choice_text' => 'Parce que les capitaux propres doivent être remboursés à une date d’échéance précise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres sont comptabilisés en charges au compte de résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût moyen pondéré du capital combine-t-il plusieurs sources de financement ?',
                        'explanation' => 'Une entreprise peut être financée par plusieurs sources ayant des coûts différents.',
                        'choices' => [
                            ['choice_text' => 'Parce que la loi impose de financer l’entreprise à parts égales par dette et capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût de la dette s’ajoute simplement au coût des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entreprise peut utiliser plusieurs sources de capitaux ayant des coûts différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que le calcul retient la source de financement la moins chère et ignore les autres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque influence-t-il généralement le coût des capitaux propres ?',
                        'explanation' => 'Les investisseurs demandent généralement une rémunération plus importante lorsqu’ils supportent davantage de risque.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un risque plus élevé peut conduire les investisseurs à exiger un rendement plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un risque plus élevé peut conduire les investisseurs à accepter un rendement plus faible', 'is_correct' => false],
                            ['choice_text' => 'Parce que le risque de l’entreprise détermine le taux d’intérêt légal appliqué à ses dettes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le risque fait varier la valeur nominale des actions déjà émises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ne doit-elle pas choisir automatiquement la source de financement au taux apparent le plus faible ?',
                        'explanation' => 'Le risque, les garanties, la flexibilité, les coûts annexes et les conséquences sur la structure financière doivent être considérés.',
                        'choices' => [
                            ['choice_text' => 'Parce que le taux le plus faible est réservé aux entreprises déjà fortement endettées', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux apparent est identique quelle que soit la source de financement choisie', 'is_correct' => false],
                            ['choice_text' => 'Parce que seule la durée du financement compte, le taux n’ayant qu’une importance secondaire', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il faut aussi considérer le risque, les conditions et les effets sur la structure financière', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût du capital est-il important dans l’évaluation des projets ?',
                        'explanation' => 'Il sert notamment de référence pour comparer le rendement d’un projet au coût des ressources utilisées.',
                        'choices' => [
                            ['choice_text' => 'Il indique le montant exact des flux de trésorerie que le projet va dégager', 'is_correct' => false],
                            ['choice_text' => 'Il fournit une référence pour juger si le rendement attendu d’un projet est suffisant', 'is_correct' => true],
                            ['choice_text' => 'Il mesure la part des bénéfices de l’entreprise qui doit être distribuée aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Il détermine le nombre d’années pendant lesquelles le projet doit rester exploité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation du poids de la dette peut-elle modifier le coût global du capital ?',
                        'explanation' => 'La composition du financement change et le risque financier peut également évoluer.',
                        'choices' => [
                            ['choice_text' => 'Parce que la dette étant moins chère que les capitaux propres, elle fait disparaître le coût de ces derniers', 'is_correct' => false],
                            ['choice_text' => 'Parce que la proportion de dette fixe le montant du chiffre d’affaires de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’augmentation de la dette réduit la valeur nominale des actions déjà émises', 'is_correct' => false],
                            ['choice_text' => 'Parce que le poids relatif des sources et le risque financier de l’entreprise peuvent changer', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle éviter d’utiliser un taux d’actualisation incohérent avec le risque du projet ?',
                        'explanation' => 'Un taux inadapté peut surévaluer ou sous-évaluer les projets.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un taux inadapté modifie le montant de l’investissement initial que l’entreprise doit décaisser', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un taux inadapté fait changer la durée légale d’amortissement du projet', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un taux inadapté peut conduire à une mauvaise évaluation de la valeur du projet', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un taux supérieur au taux du marché est interdit pour l’évaluation des projets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise est financée à 50 % par de la dette à 4 % et à 50 % par des capitaux propres à 10 %. Quel est son coût moyen pondéré du capital, sans tenir compte de l’impôt ?',
                        'explanation' => '0,5 × 4 % + 0,5 × 10 % = 7 %.',
                        'choices' => [
                            ['choice_text' => '4 %', 'is_correct' => false],
                            ['choice_text' => '7 %', 'is_correct' => true],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '14 %', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finance d’entreprise — Structure financière et endettement',
                'description' => 'Découvrez les principes fondamentaux de la dette, des capitaux propres et du levier financier.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’endettement financier ?',
                        'explanation' => 'Il correspond au recours à des financements qui créent une obligation de remboursement.',
                        'choices' => [
                            ['choice_text' => 'L’ensemble des apports des actionnaires inscrits au capital de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le niveau des charges d’exploitation à payer dans les prochains mois', 'is_correct' => false],
                            ['choice_text' => 'Le déficit de trésorerie constaté à la clôture de l’exercice comptable', 'is_correct' => false],
                            ['choice_text' => 'Le recours à des financements créant des obligations de remboursement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage potentiel de la dette pour une entreprise ?',
                        'explanation' => 'La dette permet de financer un projet sans diluer directement les propriétaires, tout en créant des obligations financières.',
                        'choices' => [
                            ['choice_text' => 'Elle peut permettre de financer des investissements sans dilution immédiate des actionnaires', 'is_correct' => true],
                            ['choice_text' => 'Elle peut permettre de financer des projets sans engagement de remboursement à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Elle peut permettre d’éliminer le risque de faillite en cas de baisse prolongée des ventes', 'is_correct' => false],
                            ['choice_text' => 'Elle peut permettre de réduire le coût des capitaux propres sans modifier le risque des actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque majeur d’un endettement élevé ?',
                        'explanation' => 'Des obligations fixes élevées peuvent accroître le risque de tension financière lorsque les résultats baissent.',
                        'choices' => [
                            ['choice_text' => 'Une dilution de la part de chaque actionnaire dans le capital de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du risque de difficulté à respecter les obligations financières', 'is_correct' => true],
                            ['choice_text' => 'Une perte de contrôle de l’entreprise par ses actionnaires dès le premier emprunt', 'is_correct' => false],
                            ['choice_text' => 'Une diminution du bénéfice comptable liée à la hausse des charges d’amortissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres peuvent-ils renforcer la flexibilité financière ?',
                        'explanation' => 'Ils ne créent généralement pas les mêmes obligations fixes de remboursement qu’une dette.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent réduire le coût de financement en dessous de celui de la dette', 'is_correct' => false],
                            ['choice_text' => 'Ils peuvent augmenter les intérêts déductibles du résultat imposable', 'is_correct' => false],
                            ['choice_text' => 'Ils peuvent réduire la dépendance à des remboursements fixes liés à la dette', 'is_correct' => true],
                            ['choice_text' => 'Ils peuvent permettre de rembourser les actionnaires à des dates fixées à l’avance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise fortement endettée peut-elle être plus sensible à une baisse des bénéfices ?',
                        'explanation' => 'Les intérêts et remboursements restent dus même lorsque le résultat diminue.',
                        'choices' => [
                            ['choice_text' => 'Parce que les actionnaires deviennent prioritaires sur les créanciers lorsque les bénéfices baissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts de la dette sont calculés en proportion du bénéfice réalisé', 'is_correct' => false],
                            ['choice_text' => 'Parce que la baisse des résultats entraîne la hausse immédiate de la valeur des dettes inscrites au bilan', 'is_correct' => false],
                            ['choice_text' => 'Parce que les obligations financières peuvent rester élevées malgré la baisse des résultats', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la structure financière doit-elle être adaptée au secteur de l’entreprise ?',
                        'explanation' => 'Les secteurs ont des niveaux de stabilité des flux, besoins d’investissement et risques différents.',
                        'choices' => [
                            ['choice_text' => 'Parce que la réglementation fixe le taux d’endettement obligatoire de chaque secteur d’activité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les besoins de financement, risques et flux de trésorerie diffèrent selon les secteurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque secteur impose un type de financement unique que l’entreprise doit suivre', 'is_correct' => false],
                            ['choice_text' => 'Parce que seules les grandes entreprises d’un secteur ont accès à la dette bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle surveiller ses échéances de dette ?',
                        'explanation' => 'Les remboursements futurs peuvent créer des besoins importants de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Pour savoir à quelle date les actionnaires pourront exiger la restitution de leur capital', 'is_correct' => false],
                            ['choice_text' => 'Pour pouvoir modifier le montant des intérêts dus en cas de baisse des ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour s’assurer qu’elle pourra disposer des liquidités nécessaires aux dates prévues', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer le bénéfice comptable de l’exercice avec plus de précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification des sources de financement peut-elle être utile ?',
                        'explanation' => 'Elle réduit la dépendance à une seule source ou un seul prêteur.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire la dépendance envers une seule source de financement', 'is_correct' => true],
                            ['choice_text' => 'Elle peut simplifier la gestion en limitant les relations avec les prêteurs', 'is_correct' => false],
                            ['choice_text' => 'Elle peut éviter à l’entreprise de payer des intérêts sur ses emprunts', 'is_correct' => false],
                            ['choice_text' => 'Elle peut faire disparaître le risque lié aux variations des taux d’intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un niveau de dette modéré peut-il être différent d’un niveau de dette élevé en termes de risque ?',
                        'explanation' => 'Plus la dette augmente, plus les obligations fixes peuvent peser sur la capacité financière.',
                        'choices' => [
                            ['choice_text' => 'Parce que les intérêts d’une dette modérée sont déductibles, ce qui supprime le risque financier', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût de la dette baisse lorsque l’entreprise emprunte davantage, ce qui réduit le risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette modérée est remboursée par les actionnaires en cas de difficulté', 'is_correct' => false],
                            ['choice_text' => 'Parce que le niveau d’obligations fixes et le risque financier peuvent augmenter avec l’endettement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne gestion de la structure financière ?',
                        'explanation' => 'Il faut rechercher un financement adapté aux risques, aux flux et aux objectifs stratégiques.',
                        'choices' => [
                            ['choice_text' => 'Retenir le financement au coût nominal le plus bas, sans tenir compte des autres critères', 'is_correct' => false],
                            ['choice_text' => 'Aligner la proportion de dette sur celle des entreprises du même secteur, quelle que soit la situation', 'is_correct' => false],
                            ['choice_text' => 'Choisir un équilibre de financement compatible avec le risque, la flexibilité et les besoins de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Privilégier le financement par capitaux propres pour réduire au maximum les obligations de remboursement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finance d’entreprise — Dividendes et politique financière',
                'description' => 'Comprenez les principes de base de la distribution des bénéfices et de leur réinvestissement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un dividende ?',
                        'explanation' => 'Un dividende est une distribution d’une partie des résultats ou ressources disponibles aux actionnaires selon les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Une distribution destinée aux actionnaires', 'is_correct' => true],
                            ['choice_text' => 'Une dette envers les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Une charge salariale', 'is_correct' => false],
                            ['choice_text' => 'Un investissement dans une immobilisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle choisir de conserver ses bénéfices ?',
                        'explanation' => 'Les bénéfices conservés peuvent financer la croissance, les investissements ou renforcer la structure financière.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’impôt sur les sociétés en évitant de les inscrire au résultat', 'is_correct' => false],
                            ['choice_text' => 'Pour financer des investissements ou renforcer ses ressources financières', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer l’obligation de payer des intérêts sur ses emprunts', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire le nombre d’actionnaires au capital de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise un bénéfice de 200 000 € et en distribue 40 % sous forme de dividendes. Quel montant reste dans l’entreprise ?',
                        'explanation' => 'Dividendes : 200 000 × 40 % = 80 000 € ; montant conservé : 200 000 - 80 000 = 120 000 €.',
                        'choices' => [
                            ['choice_text' => '80 000 €', 'is_correct' => false],
                            ['choice_text' => '120 000 €', 'is_correct' => true],
                            ['choice_text' => '160 000 €', 'is_correct' => false],
                            ['choice_text' => '200 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique de dividende doit-elle être cohérente avec la stratégie d’investissement ?',
                        'explanation' => 'Des dividendes élevés peuvent réduire les ressources disponibles pour financer la croissance.',
                        'choices' => [
                            ['choice_text' => 'Parce que les dividendes versés augmentent le montant des projets que l’entreprise peut financer', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux de dividende détermine le taux d’actualisation des projets de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que le dividende est fixé par la banque qui finance les investissements', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ressources distribuées ne sont plus disponibles pour financer les investissements', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise en forte croissance peut-elle préférer conserver une plus grande partie de ses bénéfices ?',
                        'explanation' => 'La croissance peut exiger des investissements et du fonds de roulement supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Parce que ses besoins d’investissement et de financement peuvent être importants', 'is_correct' => true],
                            ['choice_text' => 'Parce que son cours de bourse baisse dès qu’elle verse un premier dividende', 'is_correct' => false],
                            ['choice_text' => 'Parce que la croissance réduit son besoin en fonds de roulement et libère de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une entreprise en croissance ne peut pas s’endetter auprès des banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel peut être un avantage d’une politique de dividende stable ?',
                        'explanation' => 'Une stabilité relative peut rendre les distributions plus prévisibles pour les actionnaires.',
                        'choices' => [
                            ['choice_text' => 'Elle peut permettre de maximiser le cours de l’action à court terme', 'is_correct' => false],
                            ['choice_text' => 'Elle peut permettre de financer les investissements sans recourir à la dette', 'is_correct' => false],
                            ['choice_text' => 'Elle peut offrir davantage de prévisibilité aux actionnaires', 'is_correct' => true],
                            ['choice_text' => 'Elle peut éviter à l’entreprise d’avoir à tenir compte de sa trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle considérer sa situation de trésorerie avant une distribution importante ?',
                        'explanation' => 'Une distribution importante réduit les liquidités disponibles pour les obligations et projets.',
                        'choices' => [
                            ['choice_text' => 'Pour fixer le dividende en fonction du cours de l’action à la date de versement', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier qu’elle peut distribuer sans compromettre ses besoins financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour s’assurer que le dividende sera déductible du résultat imposable', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer le bénéfice comptable à répartir entre les actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les attentes des actionnaires peuvent-elles influencer la politique de dividende ?',
                        'explanation' => 'Les investisseurs peuvent avoir des préférences différentes en matière de revenu et de croissance.',
                        'choices' => [
                            ['choice_text' => 'Parce que les actionnaires peuvent imposer à l’entreprise la distribution de l’ensemble de sa trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant du dividende est fixé par la bourse selon l’évolution des cours', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires paient eux-mêmes l’impôt sur les bénéfices de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires peuvent avoir des préférences différentes concernant revenu et croissance', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des bénéfices peut-il parfois créer davantage de valeur qu’un dividende immédiat ?',
                        'explanation' => 'Des ressources réinvesties dans des projets créant suffisamment de valeur peuvent produire un rendement supérieur.',
                        'choices' => [
                            ['choice_text' => 'Parce que les bénéfices conservés augmentent le dividende déjà versé aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices conservés ne sont pas imposés tant qu’ils restent dans l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices réinvestis peuvent financer des projets créant davantage de valeur', 'is_correct' => true],
                            ['choice_text' => 'Parce que les bénéfices conservés sont comptabilisés comme une dette envers les actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne politique de distribution ?',
                        'explanation' => 'La distribution doit être cohérente avec les besoins d’investissement, la liquidité et les objectifs financiers.',
                        'choices' => [
                            ['choice_text' => 'Équilibrer rémunération des actionnaires, investissements futurs et solidité financière', 'is_correct' => true],
                            ['choice_text' => 'Aligner le dividende sur celui du concurrent le plus proche, quelle que soit la situation', 'is_correct' => false],
                            ['choice_text' => 'Verser le dividende le plus élevé possible pour maintenir le cours de l’action', 'is_correct' => false],
                            ['choice_text' => 'Réduire le dividende à zéro dès que l’entreprise réalise des investissements', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finance d’entreprise — Gestion du fonds de roulement',
                'description' => 'Découvrez la gestion des créances, stocks, dettes fournisseurs et besoins de trésorerie.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le besoin en fonds de roulement ?',
                        'explanation' => 'Il correspond au besoin de financement généré par le décalage entre les flux liés à l’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Le besoin de financement généré par le cycle d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Le montant de trésorerie disponible en banque à la clôture de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Le besoin de financement lié aux investissements en immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Le total des dettes à court terme remboursables dans l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des créances clients peut-elle augmenter le besoin de financement ?',
                        'explanation' => 'Les ventes non encaissées représentent des ressources immobilisées dans les créances.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entreprise doit payer ses fournisseurs plus tôt lorsque ses ventes augmentent', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entreprise finance davantage de ventes avant de recevoir les encaissements', 'is_correct' => true],
                            ['choice_text' => 'Parce que les créances clients sont comptabilisées en dettes envers les clients', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances clients réduisent immédiatement le chiffre d’affaires de l’exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation des dettes fournisseurs peut-elle réduire le besoin de financement à court terme ?',
                        'explanation' => 'Des délais fournisseurs plus longs permettent à l’entreprise de conserver sa trésorerie plus longtemps.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entreprise obtient des fournisseurs une réduction du prix des marchandises achetées', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entreprise encaisse plus rapidement les paiements de ses clients', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entreprise conserve temporairement sa trésorerie avant de régler les fournisseurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dettes fournisseurs sont déduites du chiffre d’affaires de l’exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un niveau excessif de stocks peut-il augmenter le besoin de financement ?',
                        'explanation' => 'Les stocks immobilisent des ressources financières jusqu’à leur vente.',
                        'choices' => [
                            ['choice_text' => 'Parce que les stocks augmentent la dette envers les fournisseurs sans impact sur la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks génèrent des encaissements dès leur entrée en magasin', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur des stocks est ajoutée au capital social de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une partie de la trésorerie est immobilisée dans des marchandises non encore vendues', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise en croissance peut-elle avoir besoin de plus de financement même si elle est rentable ?',
                        'explanation' => 'La croissance peut augmenter les stocks, créances et investissements avant les encaissements associés.',
                        'choices' => [
                            ['choice_text' => 'Parce que la croissance peut consommer de la trésorerie dans les créances, stocks et investissements', 'is_correct' => true],
                            ['choice_text' => 'Parce que les entreprises rentables ne peuvent pas utiliser leurs bénéfices pour financer leur activité', 'is_correct' => false],
                            ['choice_text' => 'Parce que la croissance des ventes réduit mécaniquement le résultat net de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clients paient d’avance, ce qui oblige l’entreprise à rembourser des acomptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à évaluer la rapidité de recouvrement des clients ?',
                        'explanation' => 'Le délai moyen de paiement client mesure approximativement le temps nécessaire pour encaisser les créances.',
                        'choices' => [
                            ['choice_text' => 'Le délai moyen de règlement des fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Le délai moyen d’écoulement des stocks', 'is_correct' => false],
                            ['choice_text' => 'La marge commerciale réalisée sur les ventes', 'is_correct' => false],
                            ['choice_text' => 'Le délai moyen de paiement des clients', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réduire le délai de paiement client peut-il améliorer la trésorerie ?',
                        'explanation' => 'Les ventes sont converties plus rapidement en encaissements.',
                        'choices' => [
                            ['choice_text' => 'Parce que le chiffre d’affaires augmente dès que les délais sont raccourcis', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances sont transformées plus rapidement en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dettes fournisseurs sont remboursées plus lentement', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant des créances clients est annulé dans les comptes de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle équilibrer ses objectifs commerciaux et sa politique de crédit client ?',
                        'explanation' => 'Des conditions de crédit généreuses peuvent favoriser les ventes mais augmenter le risque de crédit et le besoin de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un crédit client plus généreux réduit le risque d’impayés tout en diminuant le besoin de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un délai de paiement plus court améliore les ventes sans conséquence sur la relation avec les clients', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un crédit client plus généreux peut soutenir les ventes tout en augmentant les risques et besoins de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un crédit client plus généreux modifie la marge commerciale mais laisse la trésorerie intacte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rotation des stocks est-elle importante dans la gestion financière ?',
                        'explanation' => 'Une rotation plus rapide peut libérer des ressources immobilisées dans les stocks.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle indique le rythme auquel les clients règlent les factures émises par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle mesure la rentabilité des capitaux propres investis dans les stocks', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle détermine le prix auquel l’entreprise doit vendre ses marchandises en stock', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle indique la vitesse à laquelle les ressources immobilisées dans les stocks sont renouvelées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif résume une bonne gestion du fonds de roulement ?',
                        'explanation' => 'L’objectif est de soutenir l’activité tout en évitant une immobilisation excessive de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Soutenir l’activité tout en maîtrisant les ressources immobilisées dans le cycle d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Réduire le fonds de roulement à zéro afin de ne plus immobiliser de ressources', 'is_correct' => false],
                            ['choice_text' => 'Maximiser les stocks et les délais clients pour favoriser le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Réduire au minimum les stocks et les créances afin de ne plus immobiliser de ressources dans l’exploitation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finance d’entreprise — Financement et gestion de trésorerie',
                'description' => 'Comprenez les mécanismes fondamentaux du financement à court et long terme.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise établit-elle une prévision de trésorerie ?',
                        'explanation' => 'Elle permet d’anticiper les besoins de liquidité et les éventuels excédents.',
                        'choices' => [
                            ['choice_text' => 'Pour constater a posteriori les flux de trésorerie réellement observés au cours de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Pour anticiper les encaissements, décaissements et besoins futurs de financement', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer la valeur actuelle nette des investissements envisagés par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le montant des impôts et des cotisations sociales à déclarer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déficit temporaire de trésorerie ne signifie-t-il pas nécessairement que l’entreprise est non rentable ?',
                        'explanation' => 'Un décalage temporaire entre encaissements et décaissements peut créer un besoin de financement malgré une activité rentable.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un déficit de trésorerie correspond à une perte comptable qui sera compensée plus tard', 'is_correct' => false],
                            ['choice_text' => 'Parce que le déficit de trésorerie est calculé avant la prise en compte des ventes de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un décalage de trésorerie peut être lié au cycle d’exploitation ou aux investissements', 'is_correct' => true],
                            ['choice_text' => 'Parce que la rentabilité d’une entreprise se mesure par son niveau d’endettement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une ligne de crédit à court terme peut-elle être utilisée ?',
                        'explanation' => 'Elle peut aider à couvrir des besoins temporaires de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Pour financer durablement l’achat d’équipements et d’immeubles', 'is_correct' => false],
                            ['choice_text' => 'Pour compenser une baisse structurelle des ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le capital sans solliciter les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour couvrir temporairement des besoins de trésorerie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle éviter de financer un actif très long terme uniquement avec des ressources très court terme ?',
                        'explanation' => 'Le financement doit tenir compte de la durée de vie et des flux générés par l’actif afin de réduire le risque de refinancement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle pourrait devoir refinancer fréquemment un actif qui génère des flux sur une longue période', 'is_correct' => true],
                            ['choice_text' => 'Parce que la réglementation interdit de financer des immobilisations par des ressources à court terme', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût des financements à court terme est fixé à un taux supérieur par la loi', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’actif perdrait sa valeur comptable dès que le financement arrive à échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle conserver une réserve de liquidité ?',
                        'explanation' => 'Une réserve de liquidité protège contre les imprévus et permet de saisir des opportunités.',
                        'choices' => [
                            ['choice_text' => 'Pour maximiser le rendement des actionnaires grâce aux intérêts perçus', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la prévision de trésorerie et le suivi des encaissements', 'is_correct' => false],
                            ['choice_text' => 'Pour faire face aux imprévus et préserver sa flexibilité financière', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire l’impôt sur les sociétés dû au titre de l’exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs options de financement ?',
                        'explanation' => 'Les options diffèrent par leur coût, maturité, flexibilité, garanties et risque.',
                        'choices' => [
                            ['choice_text' => 'Pour retenir l’option dont le taux d’intérêt nominal est le plus bas', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir selon le coût, la durée, la flexibilité et le risque', 'is_correct' => true],
                            ['choice_text' => 'Pour répartir le financement à parts égales entre banques et actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir l’option dont la durée est la plus longue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle surveiller sa trésorerie même lorsqu’elle dispose d’une ligne de crédit ?',
                        'explanation' => 'Une ligne de crédit peut avoir des limites, échéances, conditions ou covenants.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une ligne de crédit est comptabilisée comme un encaissement définitif', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une ligne de crédit est conclue sans date d’échéance et ne peut pas être révisée', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant de la ligne s’ajoute aux capitaux propres de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la ligne peut être limitée, coûteuse ou soumise à certaines conditions', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les échéances de dette doivent-elles être intégrées à la planification de trésorerie ?',
                        'explanation' => 'Les remboursements représentent des sorties de liquidité importantes à certaines dates.',
                        'choices' => [
                            ['choice_text' => 'Parce que les échéances de dette réduisent le chiffre d’affaires de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les remboursements créent des décaissements futurs à anticiper', 'is_correct' => true],
                            ['choice_text' => 'Parce que les remboursements sont comptabilisés en produits au compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que les remboursements s’annulent avec les encaissements clients de la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion de trésorerie doit-elle intégrer plusieurs scénarios ?',
                        'explanation' => 'Les encaissements et décaissements futurs peuvent évoluer différemment selon les conditions commerciales.',
                        'choices' => [
                            ['choice_text' => 'Pour retenir le scénario le plus favorable dans le calcul du budget', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer la valeur de l’entreprise selon plusieurs taux d’actualisation', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer la résilience de la liquidité face à différents scénarios', 'is_correct' => true],
                            ['choice_text' => 'Pour limiter le nombre de prévisions que l’équipe financière doit mettre à jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne gestion financière de la trésorerie ?',
                        'explanation' => 'Il faut assurer la liquidité nécessaire tout en optimisant l’utilisation des ressources.',
                        'choices' => [
                            ['choice_text' => 'Maintenir une liquidité suffisante tout en utilisant efficacement les ressources financières', 'is_correct' => true],
                            ['choice_text' => 'Conserver le maximum de trésorerie disponible afin de réduire au plus bas le risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Réduire la trésorerie au minimum pour maximiser le rendement des capitaux employés', 'is_correct' => false],
                            ['choice_text' => 'Éviter le financement externe afin de dépendre le moins possible des banques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
