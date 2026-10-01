<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class HealthEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'health-economics')->firstOrFail();

        $quizDataList = [
            [
                'title' => 'Fondamentaux de l’économie de la santé',
                'description' => 'Introduction aux notions essentielles de l’économie de la santé, aux arbitrages entre ressources, santé et soins médicaux.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Pourquoi l’économie de la santé s’intéresse-t-elle à l’utilisation des ressources médicales ?',
                        'explanation' => 'Les ressources disponibles pour les soins, comme le personnel, les équipements et les budgets, sont limitées. L’économie de la santé étudie donc comment les utiliser au mieux face à des besoins multiples.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les ressources consacrées à la santé sont limitées alors que les besoins sont nombreux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les soins ont le même coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les ressources médicales sont infinies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les décisions de santé n’ont aucune dimension économique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction décrit le mieux la santé et les soins de santé ?',
                        'explanation' => 'La santé constitue l’objectif ou le résultat recherché. Les soins médicaux, la prévention et d’autres facteurs contribuent à cet objectif, mais ils ne sont pas synonymes de santé.',
                        'choices' => [
                            [
                                'choice_text' => 'La santé est un résultat ou un état recherché, tandis que les soins constituent l’un des moyens utilisés pour l’améliorer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La santé est uniquement un service acheté en pharmacie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les soins et la santé sont exactement la même chose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les soins n’ont aucun effet possible sur la santé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un hôpital dispose d’un budget limité et doit financer soit un scanner supplémentaire, soit davantage de consultations. Quel concept décrit la valeur de l’alternative abandonnée ?',
                        'explanation' => 'Le coût d’opportunité correspond à la valeur de la meilleure alternative abandonnée lorsqu’une ressource est utilisée pour un autre objectif.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût d’opportunité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le coût fixe',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande dérivée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La productivité moyenne',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une personne consulte un médecin parce qu’elle a besoin d’un diagnostic. Dans ce cas, la demande de consultation est principalement liée à :',
                        'explanation' => 'La demande de soins est souvent une demande dérivée : le patient cherche le service médical parce qu’il valorise l’amélioration ou la préservation de sa santé.',
                        'choices' => [
                            [
                                'choice_text' => 'La recherche d’une amélioration ou d’une protection de sa santé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La volonté de louer un local',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La quantité de monnaie en circulation uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse du prix des transports uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre une contrainte de rareté dans un système de santé ?',
                        'explanation' => 'La rareté signifie qu’une ressource disponible en quantité limitée ne peut pas satisfaire toutes les utilisations possibles. Les lits hospitaliers sont un exemple de ressource rare.',
                        'choices' => [
                            [
                                'choice_text' => 'Deux services souhaitent utiliser le même nombre limité de lits hospitaliers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tous les services disposent d’un nombre illimité de lits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les médicaments sont gratuits et disponibles sans limite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de patients est toujours nul',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces situations relève principalement de l’équité en santé ?',
                        'explanation' => 'L’équité concerne la répartition des possibilités et des ressources de façon jugée juste. En santé, elle inclut notamment les différences d’accès selon les groupes de population.',
                        'choices' => [
                            [
                                'choice_text' => 'Chercher à garantir un accès raisonnable aux soins aux personnes défavorisées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Produire un maximum de consultations quel que soit leur accès',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire le nombre de professionnels',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser un budget sans tenir compte des différences d’accès',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un programme médical permet de traiter 1 000 patients avec les mêmes ressources qui permettaient auparavant d’en traiter 800. Que suggère ce résultat ?',
                        'explanation' => 'La productivité compare la quantité de services ou de résultats obtenus aux ressources utilisées. Traiter davantage de patients avec les mêmes ressources indique une productivité plus élevée, toutes choses égales par ailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration de la productivité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition de la rareté',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la qualité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine du prix des soins',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond le mieux à une action de prévention ?',
                        'explanation' => 'La prévention cherche à réduire la probabilité ou la gravité future d’un problème de santé. La vaccination est un exemple classique de prévention primaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Une vaccination destinée à réduire le risque de maladie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une intervention réalisée uniquement après une fracture',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La facturation d’une consultation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le paiement d’un loyer hospitalier',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la santé est-elle souvent influencée par des facteurs autres que les soins médicaux ?',
                        'explanation' => 'L’état de santé dépend de nombreux déterminants. Les soins comptent, mais les conditions de vie, l’environnement et les comportements jouent également un rôle.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que l’alimentation, l’environnement, les conditions de travail et le revenu peuvent aussi agir sur la santé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les soins médicaux n’ont jamais aucun effet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que seuls les médicaments déterminent la santé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les services publics n’influencent pas les conditions de vie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux l’efficacité économique dans un système de santé ?',
                        'explanation' => 'L’efficacité économique consiste à utiliser les ressources de manière à obtenir le meilleur résultat possible compte tenu des contraintes, et pas simplement à dépenser davantage ou moins.',
                        'choices' => [
                            [
                                'choice_text' => 'Obtenir le plus de résultats de santé possibles compte tenu des ressources disponibles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Dépensez toujours le budget maximal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire toutes les dépenses, même si les résultats se dégradent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Financer uniquement les soins les plus coûteux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple montre que le coût monétaire n’est pas le seul coût d’un soin ?',
                        'explanation' => 'Les décisions de santé peuvent inclure des coûts monétaires et des coûts en temps, en déplacement ou en perte de travail. Ces coûts non monétaires peuvent influencer l’utilisation des soins.',
                        'choices' => [
                            [
                                'choice_text' => 'Un patient doit aussi consacrer du temps au trajet et à l’attente avant la consultation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le patient ne dépense jamais de temps',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seul le prix affiché compte dans toute décision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le temps n’a aucune valeur pour les patients',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Demande de soins et comportements des patients',
                'description' => 'Étude introductive des facteurs qui influencent la demande de soins et les décisions des patients.',
                'duration' => 22,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => 'Si le prix payé directement par un patient pour une consultation augmente, et que les autres facteurs restent inchangés, quel effet peut-on généralement attendre ?',
                        'explanation' => 'Toutes choses égales par ailleurs, une hausse du prix supporté par le patient réduit généralement la quantité demandée d’un service de santé.',
                        'choices' => [
                            [
                                'choice_text' => 'Une diminution de la quantité de consultations demandées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une augmentation certaine de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucun effet possible sur la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une multiplication automatique des médecins',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une personne peut-elle demander des soins même lorsque le prix n’est pas le seul facteur en jeu ?',
                        'explanation' => 'La demande de soins dépend de plusieurs éléments : état de santé, prix, revenu, assurance, disponibilité des services, temps d’attente et informations notamment.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la perception du besoin de santé et les caractéristiques de la maladie influencent aussi la demande',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le prix n’a jamais aucun rôle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les patients connaissent toujours leurs diagnostics avec certitude',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’offre crée toujours exactement la même demande',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une assurance rembourse une grande partie du coût d’une consultation. Quel mécanisme peut rendre les consultations moins coûteuses pour l’assuré ?',
                        'explanation' => 'Lorsque l’assurance prend en charge une partie du prix, le montant payé directement au moment du soin diminue. Cela peut modifier la quantité de soins demandée.',
                        'choices' => [
                            [
                                'choice_text' => 'La baisse du prix direct payé au moment du recours',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La baisse de la qualité de tous les soins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression de la demande de soins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La hausse automatique du coût des médicaments',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un patient doit parcourir 80 kilomètres pour consulter un spécialiste. Même si la consultation est peu chère, que représente le déplacement ?',
                        'explanation' => 'Le coût d’accès comprend aussi les dépenses et le temps liés au déplacement. Une grande distance peut donc freiner la demande même lorsque le prix de la consultation est faible.',
                        'choices' => [
                            [
                                'choice_text' => 'Un coût d’accès qui peut réduire le recours aux soins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une subvention publique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse du salaire du médecin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une amélioration automatique de la qualité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi parle-t-on souvent de demande dérivée dans les soins de santé ?',
                        'explanation' => 'Le service médical n’est généralement pas recherché pour lui-même : il contribue à atteindre un état de santé souhaité. La demande de soins dérive donc de la demande de santé.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les patients demandent des soins pour améliorer ou préserver leur santé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les soins sont demandés uniquement pour leur valeur de revente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les patients demandent toujours un médicament particulier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la demande est fixée par le gouvernement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une personne reporte régulièrement un contrôle médical parce que le rendez-vous exige deux heures de trajet et d’attente. Quel facteur explique le mieux ce comportement ?',
                        'explanation' => 'Le temps consacré au déplacement et à l’attente est un coût pour le patient. Plus ce coût est élevé, plus il peut décourager certains recours aux soins.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût en temps du recours aux soins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine de la gravité de la maladie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une augmentation de la capacité hospitalière',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une amélioration du revenu du médecin',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel changement peut augmenter la demande de soins préventifs ?',
                        'explanation' => 'Une meilleure information peut rendre les bénéfices de la prévention plus visibles et encourager les personnes à recourir à des examens ou services préventifs.',
                        'choices' => [
                            [
                                'choice_text' => 'Une meilleure information sur les bénéfices d’une détection précoce',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une fermeture du centre de santé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse des distances jusqu’au centre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction de l’information disponible',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une famille dont le revenu augmente consacre une partie supplémentaire de son budget à certains soins non urgents. Quelle explication est cohérente ?',
                        'explanation' => 'Le revenu influence la capacité à supporter les dépenses directes et les coûts associés aux soins. Son effet peut cependant varier selon le type de soin.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse du revenu peut permettre de consommer davantage certains services de santé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse du revenu interdit tout recours aux soins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le revenu n’a aucune relation possible avec les soins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les soins deviennent nécessairement gratuits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux centres proposent le même examen au même tarif, mais l’un offre un rendez-vous beaucoup plus rapidement. Quelle différence peut influencer la demande ?',
                        'explanation' => 'Le temps d’attente fait partie du coût total du recours aux soins. À prix égal, un délai plus court peut rendre un centre plus attractif.',
                        'choices' => [
                            [
                                'choice_text' => 'Le temps d’attente',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le taux de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La quantité de monnaie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La superficie agricole',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une maladie devient plus fréquente dans une population. Toutes choses égales par ailleurs, quelle pression cela peut-il exercer sur la demande de soins ?',
                        'explanation' => 'Une fréquence plus élevée de la maladie augmente généralement le nombre de personnes ayant besoin d’un diagnostic, d’un traitement ou d’un suivi, ce qui peut accroître la demande.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation de la demande de certains soins liés à cette maladie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse obligatoire du nombre de patients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse nécessaire des besoins de santé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre une décision de consommation de soins influencée par l’incertitude ?',
                        'explanation' => 'L’assurance répond à l’incertitude sur la survenue et le coût de problèmes de santé. Elle permet de transférer une partie du risque financier.',
                        'choices' => [
                            [
                                'choice_text' => 'Souscrire une assurance pour se protéger contre une dépense médicale imprévue',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Acheter un bien dont le prix est connu avec certitude',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Choisir un médicament dont le prix est nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter toute dépense parce que le revenu est fixe',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Offre de soins et organisation des services',
                'description' => 'Notions de base sur les professionnels de santé, les capacités de production, les coûts et l’organisation de l’offre de soins.',
                'duration' => 24,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans un cabinet médical, quel élément peut limiter le nombre de consultations réalisées pendant une journée ?',
                        'explanation' => 'Le temps de travail disponible constitue une contrainte de capacité. Un médecin ne peut pas réaliser un nombre illimité de consultations pendant une journée donnée.',
                        'choices' => [
                            [
                                'choice_text' => 'Le nombre d’heures de travail disponibles du médecin',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur des murs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le niveau de pluie dans une autre région',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de billets en circulation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente un coût fixe pour un cabinet sur une période donnée ?',
                        'explanation' => 'Un coût fixe ne varie pas directement avec le nombre de patients à court terme. Le loyer est généralement un exemple de coût fixe, contrairement aux consommables par patient.',
                        'choices' => [
                            [
                                'choice_text' => 'Le loyer du local',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les gants utilisés pour chaque patient',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les médicaments consommés lors de chaque acte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les consommables directement utilisés par consultation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément correspond plutôt à un coût variable d’un service de soins ?',
                        'explanation' => 'Un coût variable évolue avec le niveau d’activité. Les consommables utilisés pour chaque patient augmentent lorsque le nombre d’actes augmente.',
                        'choices' => [
                            [
                                'choice_text' => 'Les consommables utilisés pour chaque patient',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le loyer annuel du bâtiment',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’amortissement d’un bâtiment déjà acquis',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût d’une licence logicielle fixe',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un centre de santé réussit à recevoir davantage de patients par heure sans augmenter le nombre de professionnels. Quelle évolution décrit le mieux cette situation ?',
                        'explanation' => 'La productivité augmente lorsque davantage de services sont produits avec une même quantité de ressources. Il faut cependant aussi vérifier que la qualité des soins reste satisfaisante.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse de la productivité du service',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition des coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction certaine de la qualité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un manque de médecins dans une région rurale peut-il limiter l’accès aux soins ?',
                        'explanation' => 'L’accès dépend notamment de la disponibilité géographique des professionnels. Une offre insuffisante peut entraîner des déplacements plus longs ou des délais d’attente plus élevés.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que l’offre locale de soins est insuffisante par rapport aux besoins de la population',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la demande disparaît dans les zones rurales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les routes deviennent automatiquement gratuites',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les patients n’ont aucun besoin de prévention',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un hôpital utilise ses blocs opératoires presque uniquement le matin et reste sous-utilisé l’après-midi. Quel problème économique peut-on identifier ?',
                        'explanation' => 'Une capacité sous-utilisée signifie qu’une partie des ressources installées pourrait produire davantage de services sans être utilisée pendant certaines périodes.',
                        'choices' => [
                            [
                                'choice_text' => 'Une capacité disponible qui n’est pas pleinement utilisée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une diminution nécessaire des coûts variables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une pénurie nationale de médicaments',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une liste d’attente se forme lorsque le nombre de demandes de rendez-vous dépasse temporairement les créneaux disponibles. Quel mécanisme décrit la situation ?',
                        'explanation' => 'Une file d’attente apparaît lorsque la capacité disponible ne suffit pas à servir immédiatement toutes les demandes. Le temps devient alors un mécanisme d’allocation.',
                        'choices' => [
                            [
                                'choice_text' => 'La demande excède la capacité de service disponible à court terme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’offre est infinie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les patients n’expriment aucune demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les coûts variables sont nuls',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une structure de soins, quelle décision peut améliorer l’utilisation du personnel sans augmenter immédiatement les effectifs ?',
                        'explanation' => 'Adapter les horaires à la demande peut réduire certaines périodes de sous-utilisation et mieux répartir les ressources humaines disponibles.',
                        'choices' => [
                            [
                                'choice_text' => 'Mieux répartir les horaires entre les périodes de forte et de faible demande',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fermer tous les créneaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les rendez-vous',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire systématiquement les heures d’ouverture',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un système de paiement récompense davantage le nombre d’actes réalisés que la coordination des soins. Quel effet incitatif peut apparaître ?',
                        'explanation' => 'Les modes de rémunération influencent les incitations des prestataires. Lorsqu’un paiement est lié au nombre d’actes, il peut encourager un volume plus élevé de prestations, toutes choses égales par ailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Un professionnel peut être davantage incité à réaliser davantage d’actes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre d’actes devient nécessairement nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les patients perdent automatiquement tout accès aux soins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût des soins devient toujours égal à zéro',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue l’information sur les compétences d’un professionnel de santé pour un patient ?',
                        'explanation' => 'Les patients ne connaissent pas toujours parfaitement la qualité technique d’un prestataire. Les informations et signaux disponibles peuvent donc influencer leurs choix.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut aider le patient à choisir entre différents prestataires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle fixe le prix de tous les médicaments',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime l’incertitude sur tous les traitements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace l’examen médical',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une clinique investit dans un logiciel qui réduit le temps administratif par patient. Quel effet économique est plausible ?',
                        'explanation' => 'Réduire un temps administratif inutile peut libérer des ressources. Le gain peut être utilisé pour augmenter la capacité de soins ou améliorer l’organisation du service.',
                        'choices' => [
                            [
                                'choice_text' => 'Davantage de temps peut être consacré aux activités de soins ou à d’autres tâches utiles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre de patients doit forcément diminuer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût de tous les médicaments devient nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande de santé disparaît',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Assurance maladie et partage des risques',
                'description' => 'Introduction au fonctionnement de l’assurance maladie, au partage du risque financier et aux principaux comportements qu’elle peut influencer.',
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Quel est le principe fondamental d’une assurance maladie ?',
                        'explanation' => 'L’assurance mutualise les risques : chacun contribue au financement du système et les dépenses élevées de certains sont partiellement couvertes par la mutualisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Répartir entre plusieurs assurés le risque financier lié à des dépenses de santé incertaines',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Garantir que personne ne tombera jamais malade',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Rendre tous les soins gratuits sans financement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer tous les coûts de santé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une prime d’assurance correspond principalement à :',
                        'explanation' => 'La prime est le paiement effectué pour obtenir la couverture d’assurance pendant une période donnée, selon les conditions du contrat.',
                        'choices' => [
                            [
                                'choice_text' => 'La somme payée pour bénéficier de la couverture prévue par le contrat',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La somme versée uniquement après un sinistre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le montant d’un ticket modérateur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix d’un médicament',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un patient doit payer 100 dirhams de sa poche lors d’une consultation couverte. Ce paiement direct peut être appelé :',
                        'explanation' => 'Une participation financière est la partie du coût que le patient paie directement au moment du soin, selon les règles de couverture.',
                        'choices' => [
                            [
                                'choice_text' => 'Une participation financière du patient',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une subvention aux médecins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une prime de risque climatique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un salaire hospitalier',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une personne averse au risque peut-elle avoir intérêt à s’assurer ?',
                        'explanation' => 'L’assurance réduit le risque financier supporté directement par l’individu. Une personne averse au risque peut valoriser cette protection même si elle ne tombe finalement pas malade.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire l’incertitude liée à une dépense médicale potentiellement importante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour garantir un revenu salarial plus élevé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute maladie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre les soins toujours plus nombreux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre l’aléa moral en assurance santé ?',
                        'explanation' => 'L’aléa moral désigne un changement de comportement après la couverture du risque. En santé, une couverture généreuse peut réduire le coût direct perçu par le patient et modifier certains recours aux soins.',
                        'choices' => [
                            [
                                'choice_text' => 'Une personne davantage couverte consomme certains soins supplémentaires parce qu’elle supporte une part plus faible du coût au moment du recours',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une personne non assurée réduit toujours ses soins préventifs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une compagnie choisit ses bâtiments administratifs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un hôpital embauche un médecin',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation correspond à la sélection adverse ?',
                        'explanation' => 'La sélection adverse apparaît lorsque les personnes connaissent mieux leur propre risque que l’assureur et que cette différence d’information influence la composition du groupe assuré.',
                        'choices' => [
                            [
                                'choice_text' => 'Les personnes qui anticipent des dépenses de santé élevées sont particulièrement motivées à souscrire une assurance lorsqu’elles peuvent choisir librement leur couverture',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tous les assurés ont exactement le même risque',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les personnes à faible risque achètent toujours plus d’assurance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le médecin fixe la prime sans information',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’assurance peut-elle rencontrer un problème d’information asymétrique ?',
                        'explanation' => 'L’asymétrie d’information signifie que les parties à une transaction ne disposent pas nécessairement des mêmes informations. C’est fréquent dans les relations de soins et d’assurance.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le patient ou le professionnel peut disposer d’informations que l’autre partie ne possède pas',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tout le monde connaît exactement la qualité et les besoins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les prix sont toujours publics',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les informations médicales sont identiques pour tous',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme permet de limiter certains comportements de surconsommation liés à une assurance ?',
                        'explanation' => 'Une participation financière laisse au patient une partie du coût de certaines prestations et peut réduire la demande de soins à faible bénéfice, même si son niveau doit être conçu avec prudence pour ne pas freiner des soins nécessaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Une participation financière raisonnable du patient',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une couverture illimitée sans aucune règle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des contrats',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’absence totale d’information',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif économique principal de la mutualisation des risques ?',
                        'explanation' => 'La mutualisation répartit les dépenses imprévues entre les membres d’un groupe, ce qui rend la charge financière individuelle plus prévisible.',
                        'choices' => [
                            [
                                'choice_text' => 'Partager les coûts des événements coûteux entre un grand nombre de personnes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Faire payer uniquement les personnes malades après coup',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éliminer toute incertitude biologique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir le même niveau de santé à tous',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une famille paie une prime mensuelle même pendant une période où aucun de ses membres ne consulte. Quelle logique explique ce paiement ?',
                        'explanation' => 'Une assurance est un paiement en échange d’une protection contre un risque. L’absence de sinistre pendant une période ne signifie pas que la couverture n’a aucune valeur.',
                        'choices' => [
                            [
                                'choice_text' => 'La famille paie pour être protégée contre des dépenses futures incertaines',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La prime est une récompense pour ne pas consulter',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La famille achète automatiquement des médicaments',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La prime garantit l’absence de risque médical',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une couverture d’assurance sur les dépenses directement payées par un patient lors d’un soin couvert ?',
                        'explanation' => 'La couverture d’assurance prend en charge une partie du coût selon le contrat. Le patient peut donc payer moins directement, tout en supportant éventuellement une prime et une participation.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut les réduire selon le niveau de prise en charge',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle les augmente toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle les rend nécessairement nulles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut jamais les modifier',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Coûts, efficacité et allocation des ressources de santé',
                'description' => 'Initiation aux différents coûts des soins et aux outils simples utilisés pour comparer des interventions de santé.',
                'duration' => 26,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Le coût d’un programme de dépistage comprend 100 000 dirhams de personnel et de matériel. Ces dépenses constituent principalement :',
                        'explanation' => 'Les coûts directs correspondent aux ressources consommées directement pour mettre en œuvre une intervention, comme le personnel, les équipements ou les consommables.',
                        'choices' => [
                            [
                                'choice_text' => 'Des coûts directs du programme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Des coûts d’opportunité uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des revenus des patients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des recettes fiscales automatiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un patient doit s’absenter de son travail pour suivre plusieurs séances de traitement. Quelle catégorie de coût peut représenter cette perte de temps de travail ?',
                        'explanation' => 'Les coûts indirects peuvent inclure la perte de temps de travail ou de production liée à une maladie ou à son traitement.',
                        'choices' => [
                            [
                                'choice_text' => 'Un coût indirect',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un coût fixe du bâtiment',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une recette hospitalière',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une subvention',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux programmes produisent le même résultat de santé, mais le programme A coûte moins cher. Quel critère simple peut justifier le choix de A ?',
                        'explanation' => 'Lorsque les résultats sont équivalents, comparer les coûts permet de retenir l’intervention qui atteint le même objectif avec moins de ressources.',
                        'choices' => [
                            [
                                'choice_text' => 'À résultat identique, A utilise moins de ressources',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A a nécessairement une meilleure qualité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'B est forcément plus innovant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A est toujours financé par l’État',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une analyse coût-efficacité compare principalement :',
                        'explanation' => 'L’analyse coût-efficacité met en regard les ressources consommées et les effets de santé obtenus. Elle aide à comparer plusieurs options qui poursuivent un objectif de santé.',
                        'choices' => [
                            [
                                'choice_text' => 'Les coûts d’interventions avec leurs résultats de santé mesurés dans une unité appropriée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement les prix des médicaments',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement les salaires des médecins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre d’assurés sans leurs résultats',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une analyse coût-bénéfice, les bénéfices sont exprimés :',
                        'explanation' => 'L’analyse coût-bénéfice convertit les coûts et les bénéfices en unités monétaires afin de comparer leur valeur économique globale.',
                        'choices' => [
                            [
                                'choice_text' => 'En valeur monétaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement en nombre de patients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'En heures de consultation seulement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'En kilomètres parcourus',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre une économie d’échelle dans les soins ?',
                        'explanation' => 'Il existe une économie d’échelle lorsque l’augmentation de la production permet, dans certaines conditions, de réduire le coût moyen par unité de service.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût moyen par examen diminue lorsque le volume traité augmente, dans certaines conditions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le coût de chaque examen augmente toujours avec le volume',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de patients diminue lorsque la production augmente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les équipements deviennent gratuits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un hôpital dépense 50 000 dirhams pour un programme qui évite 100 cas d’une maladie. Quel est le coût moyen par cas évité ?',
                        'explanation' => 'Le coût moyen par cas évité se calcule en divisant 50 000 par 100, soit 500 dirhams par cas évité.',
                        'choices' => [
                            [
                                'choice_text' => '500 dirhams',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '50 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5 000 dirhams',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’opportunité est-il important lorsqu’un ministère finance un nouvel hôpital ?',
                        'explanation' => 'Même une dépense utile a un coût d’opportunité : les ressources engagées dans un projet ne sont plus disponibles pour d’autres usages.',
                        'choices' => [
                            [
                                'choice_text' => 'Les fonds utilisés pour l’hôpital ne peuvent pas être consacrés simultanément à d’autres priorités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le ministère reçoit toujours les mêmes ressources supplémentaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le financement n’a jamais d’alternative',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le budget public est illimité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat indique une utilisation plus efficace d’une ressource, toutes choses égales par ailleurs ?',
                        'explanation' => 'L’efficacité productive consiste à obtenir davantage de production pour une quantité donnée de ressources, ou la même production avec moins de ressources.',
                        'choices' => [
                            [
                                'choice_text' => 'Obtenir davantage de services de santé avec la même quantité de ressources',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Dépenser davantage pour le même résultat',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire les services sans réduire les ressources',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Acheter plus d’équipements sans les utiliser',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un service doit choisir entre deux projets dans une enveloppe budgétaire limitée. Pourquoi ne peut-il pas financer toutes les propositions utiles ?',
                        'explanation' => 'La contrainte budgétaire oblige à hiérarchiser les usages des ressources rares. C’est l’un des fondements de l’analyse économique.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le budget et les ressources disponibles sont limités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’aucun projet n’a de valeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les ressources médicales sont infinies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les besoins de santé sont toujours faibles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut être utile pour comparer le coût de deux méthodes produisant le même nombre de consultations ?',
                        'explanation' => 'Lorsque le nombre de consultations est comparable, le coût total ou le coût moyen permet de comparer les ressources mobilisées par les deux méthodes.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût total ou le coût moyen par consultation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur des locaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La taille de la ville',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de congés du personnel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prévention, santé publique et accès aux soins',
                'description' => 'Analyse introductive des politiques de prévention, des externalités de santé publique et des obstacles à l’accès aux soins.',
                'duration' => 24,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => 'Pourquoi la vaccination peut-elle produire un bénéfice pour des personnes autres que la personne vaccinée ?',
                        'explanation' => 'Certaines vaccinations réduisent la probabilité de transmettre une infection. Le bénéfice ne concerne donc pas uniquement la personne vaccinée : c’est un exemple d’externalité positive possible.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’une réduction de la transmission peut diminuer le risque d’exposition d’autres personnes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les vaccins augmentent toujours les revenus',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les soins deviennent automatiquement gratuits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la vaccination supprime toutes les maladies',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à la prévention secondaire ?',
                        'explanation' => 'La prévention secondaire vise à détecter une maladie ou un problème de santé à un stade précoce, souvent avant l’apparition de complications importantes.',
                        'choices' => [
                            [
                                'choice_text' => 'Le dépistage d’une maladie afin de la détecter tôt',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La construction d’une route',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La rééducation après un accident déjà survenu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La production de médicaments sans utilisation clinique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la prévention peut-elle être économiquement intéressante même si elle exige une dépense immédiate ?',
                        'explanation' => 'Une intervention préventive consomme des ressources aujourd’hui mais peut éviter des problèmes futurs. Son intérêt dépend du coût de l’intervention et des bénéfices de santé obtenus.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elle peut réduire plus tard le nombre de maladies ou les coûts associés à leur prise en charge',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toute prévention rapporte nécessairement de l’argent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle ne demande jamais de ressources',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les maladies disparaissent après toute dépense',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une clinique est située loin des transports publics et ses consultations sont difficiles d’accès pour certains habitants. Quel type d’inégalité s’agit-il principalement ?',
                        'explanation' => 'La distance et la disponibilité du transport constituent des obstacles géographiques à l’accès. Ils peuvent conduire certains habitants à utiliser moins les soins.',
                        'choices' => [
                            [
                                'choice_text' => 'Une inégalité d’accès géographique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une inflation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une différence de productivité agricole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une asymétrie de taux de change',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une personne renonce à un traitement parce que le reste à payer dépasse largement son budget. Quel obstacle est illustré ?',
                        'explanation' => 'Lorsque le coût direct du soin dépasse les capacités financières d’un ménage, le prix et les dépenses restant à sa charge deviennent un obstacle à l’accès.',
                        'choices' => [
                            [
                                'choice_text' => 'Une barrière financière',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une barrière climatique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une pénurie de médecins dans le monde entier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un excès d’information',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel service de santé publique est souvent associé à la prévention collective ?',
                        'explanation' => 'Les campagnes de vaccination peuvent produire des bénéfices individuels et collectifs en réduisant la transmission de certaines maladies.',
                        'choices' => [
                            [
                                'choice_text' => 'Une campagne de vaccination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le paiement d’un loyer privé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La vente de vêtements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le remplacement d’un téléphone',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pouvoirs publics peuvent-ils soutenir certaines actions de santé publique qui créent des bénéfices pour des tiers ?',
                        'explanation' => 'Lorsqu’une activité crée un bénéfice pour d’autres personnes, le décideur privé peut ne pas prendre en compte toute sa valeur sociale. Une intervention publique peut alors chercher à corriger cette différence.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le marché peut ne pas tenir compte de tous les bénéfices sociaux de l’action',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les bénéfices sociaux sont toujours nuls',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les individus n’ont jamais d’intérêt privé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une politique publique supprime tous les marchés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un programme d’éducation nutritionnelle permet à des ménages de mieux comprendre les risques associés à certaines habitudes alimentaires. Quel mécanisme peut expliquer son intérêt ?',
                        'explanation' => 'L’information influence les choix lorsque les individus ne connaissent pas parfaitement les effets de leurs comportements. Une meilleure information peut donc modifier les décisions de santé.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration de l’information disponible pour les décisions de santé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique du prix des aliments',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse mécanique de tous les revenus',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression de la demande alimentaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région dispose d’un grand nombre de médecins mais très peu de centres de soins dans les zones éloignées. Quelle conclusion est la plus prudente ?',
                        'explanation' => 'L’accès dépend aussi de la localisation des services, des transports et des horaires. Une moyenne régionale de médecins peut cacher des disparités spatiales importantes.',
                        'choices' => [
                            [
                                'choice_text' => 'Le nombre total de professionnels ne garantit pas à lui seul un accès géographique satisfaisant',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’accès est nécessairement parfait',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tous les habitants bénéficient du même temps de trajet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La distance ne joue aucun rôle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre une dépense de santé catastrophique pour un ménage ?',
                        'explanation' => 'On parle de dépense catastrophique lorsque les dépenses de santé représentent une charge financière suffisamment importante pour menacer le niveau de vie du ménage.',
                        'choices' => [
                            [
                                'choice_text' => 'Une dépense médicale très élevée oblige le ménage à réduire fortement des dépenses essentielles ou à vendre des actifs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une consultation facilement payée sans effet sur le budget',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une petite dépense prévue dans le budget mensuel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un achat de produit non médical',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi améliorer l’accès à la prévention peut-il avoir un effet au-delà du nombre de consultations ?',
                        'explanation' => 'Un meilleur accès à la prévention peut favoriser une détection plus précoce et réduire certains risques. L’effet réel dépend cependant de l’efficacité de l’intervention et de son utilisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un recours précoce peut contribuer à éviter certaines complications et à améliorer les résultats de santé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’une consultation préventive garantit toute bonne santé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la prévention remplace toujours tous les traitements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’accès ne change jamais les résultats',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Asymétrie d’information et marchés de santé',
                'description' => 'Comprendre pourquoi les marchés de santé diffèrent d’autres marchés, notamment en raison de l’information et des décisions médicales.',
                'duration' => 25,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Pourquoi l’information est-elle souvent asymétrique entre un médecin et un patient ?',
                        'explanation' => 'Le professionnel de santé possède une expertise que le patient ne peut généralement pas reproduire. Cette différence de connaissance est une forme d’asymétrie d’information.',
                        'choices' => [
                            [
                                'choice_text' => 'Le médecin dispose généralement de connaissances médicales spécialisées que le patient ne possède pas',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le patient connaît toujours mieux le diagnostic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux disposent toujours des mêmes compétences',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’information médicale est inutile dans une consultation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un patient ne sait pas s’il a besoin d’un examen spécialisé et dépend du conseil du professionnel. Quelle caractéristique du marché est illustrée ?',
                        'explanation' => 'Le patient ne peut pas toujours évaluer lui-même la nécessité d’un examen. L’expertise médicale joue donc un rôle dans la décision, contrairement à certains marchés où le consommateur connaît mieux le produit.',
                        'choices' => [
                            [
                                'choice_text' => 'Le rôle important de l’expertise du professionnel dans la décision de soins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une concurrence parfaite sur l’information',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une absence totale d’incertitude',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un marché sans offre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut correspondre à une demande induite par le prestataire ?',
                        'explanation' => 'La demande induite désigne, dans ce contexte, l’influence du prestataire sur les décisions de recours aux soins grâce à son information ou à son autorité professionnelle.',
                        'choices' => [
                            [
                                'choice_text' => 'Un professionnel influence le volume de soins demandés par le patient en utilisant son avantage d’information',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le patient choisit seul sans aucune information médicale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le patient reçoit une facture identique quel que soit le soin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix du logement augmente dans une autre ville',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les patients ont-ils parfois du mal à comparer la qualité de deux hôpitaux ?',
                        'explanation' => 'La qualité des soins est souvent complexe, multidimensionnelle et difficile à observer directement. Les patients utilisent donc des informations, recommandations ou indicateurs disponibles.',
                        'choices' => [
                            [
                                'choice_text' => 'La qualité médicale est souvent difficile à observer avant ou même immédiatement après le traitement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les patients connaissent toujours tous les indicateurs cliniques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les hôpitaux ne produisent aucun service',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La qualité n’a jamais d’importance',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut réduire certains problèmes liés à l’asymétrie d’information ?',
                        'explanation' => 'Des informations fiables peuvent aider les patients, les financeurs et les professionnels à mieux comparer les options, même si elles ne suppriment pas toute asymétrie d’information.',
                        'choices' => [
                            [
                                'choice_text' => 'La publication d’informations fiables sur la qualité ou les résultats des établissements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La suppression de toute information',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’interdiction de comparer les services',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réduction de la transparence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un patient accepte un traitement parce qu’il fait confiance à la recommandation de son médecin. Quelle ressource économique joue ici un rôle important ?',
                        'explanation' => 'Dans la relation de soins, la confiance peut faciliter la prise de décision lorsque le patient ne peut pas évaluer seul tous les aspects techniques du traitement.',
                        'choices' => [
                            [
                                'choice_text' => 'La confiance fondée sur l’expertise et l’information du professionnel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un quota d’importation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un tarif douanier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une subvention agricole',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité d’un soin peut-elle être difficile à mesurer avec un seul indicateur ?',
                        'explanation' => 'La qualité des soins est multidimensionnelle. Un indicateur unique peut donc être insuffisant pour représenter toutes ses composantes.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elle peut inclure plusieurs dimensions, comme l’efficacité, la sécurité et l’expérience du patient',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la qualité n’existe pas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un seul chiffre suffit toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les patients ne peuvent jamais avoir d’opinion',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une clinique signale publiquement ses délais moyens d’attente et certains résultats de soins. Quel rôle cette information peut-elle jouer ?',
                        'explanation' => 'Des indicateurs publics peuvent améliorer la transparence et aider à comparer les prestataires, sans toutefois éliminer toutes les incertitudes.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut réduire une partie de l’incertitude des patients et financeurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime tous les risques médicaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle garantit que tous les établissements ont la même qualité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle rend les soins gratuits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une relation d’assurance, quel acteur peut connaître davantage son risque individuel de maladie avant la souscription ?',
                        'explanation' => 'L’assuré possède souvent des informations privées sur son état de santé, ses antécédents ou son comportement. Cette information privée peut contribuer à la sélection adverse.',
                        'choices' => [
                            [
                                'choice_text' => 'L’assuré',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le bâtiment de l’hôpital',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le ministère des transports',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le fournisseur d’électricité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un professionnel peut-il jouer un rôle de conseiller et de prestataire en même temps ?',
                        'explanation' => 'La relation médecin-patient combine production du service et conseil. Le professionnel utilise son expertise pour aider le patient à décider, ce qui crée aussi des enjeux de confiance et d’incitation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il possède des connaissances permettant de recommander des soins que le patient ne peut pas toujours évaluer seul',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le patient n’a aucun droit de décision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le professionnel fixe tous les budgets publics',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les soins sont automatiquement gratuits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe peut améliorer la décision d’un patient sans lui dicter systématiquement un choix unique ?',
                        'explanation' => 'Une information claire sur les bénéfices, risques et alternatives peut améliorer la qualité des décisions lorsque le patient doit choisir entre plusieurs options.',
                        'choices' => [
                            [
                                'choice_text' => 'Présenter une information claire et comparable sur les options de soins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Masquer les risques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Interdire toute question au professionnel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Présenter volontairement des informations contradictoires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Politique de santé et couverture des populations',
                'description' => 'Applications introductives sur le rôle des pouvoirs publics, la couverture des soins, les incitations et les objectifs d’un système de santé.',
                'duration' => 27,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Quel est un objectif courant d’une politique de couverture santé ?',
                        'explanation' => 'La couverture santé vise notamment à protéger les ménages contre le coût des soins et à améliorer leur capacité à accéder aux services nécessaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire les obstacles financiers à l’accès aux soins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter volontairement les maladies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer toute prévention',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire l’information disponible',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pouvoirs publics interviennent-ils souvent dans le secteur de la santé ?',
                        'explanation' => 'Le secteur de la santé présente plusieurs caractéristiques particulières : information asymétrique, externalités de santé publique, incertitude et préoccupations d’équité, qui peuvent justifier différentes formes d’intervention.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le marché de la santé comporte notamment des problèmes d’information, d’externalités et d’équité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les marchés privés sont interdits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la santé ne nécessite aucune ressource',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les patients connaissent toujours parfaitement tous les traitements',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique rend un vaccin de base financièrement accessible à une large population. Quel objectif économique est notamment poursuivi ?',
                        'explanation' => 'Réduire la barrière financière peut accroître l’utilisation d’une intervention préventive. Lorsque celle-ci produit aussi des bénéfices pour d’autres personnes, l’effet social peut être supérieur à l’effet individuel.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter l’utilisation d’une prévention qui peut produire des bénéfices individuels et collectifs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire la protection des personnes non vaccinées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer toute dépense publique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire l’offre de prévention',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle une autorité sanitaire peut-elle jouer sur la qualité des services ?',
                        'explanation' => 'La réglementation peut établir des exigences minimales de sécurité, de compétence ou de qualité afin de protéger les patients et de réduire certains risques.',
                        'choices' => [
                            [
                                'choice_text' => 'Fixer ou contrôler certaines normes de sécurité et de qualité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Déterminer les goûts alimentaires de chaque personne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir qu’aucun soin ne sera jamais nécessaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer toute innovation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique de santé cherche à réduire les écarts d’accès entre zones urbaines et rurales. Quelle mesure correspond directement à cet objectif ?',
                        'explanation' => 'Pour réduire une disparité géographique, une politique peut agir sur la localisation des professionnels, des établissements et des moyens de transport ou de télémédecine.',
                        'choices' => [
                            [
                                'choice_text' => 'Renforcer les services et les professionnels dans les zones sous-dotées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fermer les centres ruraux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Concentrer toutes les ressources dans une seule ville',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les distances jusqu’aux soins',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un budget de santé doit-il faire l’objet d’un arbitrage entre plusieurs programmes ?',
                        'explanation' => 'Un budget limité oblige les décideurs à comparer des usages alternatifs. Financer davantage un programme signifie généralement consacrer moins de ressources à d’autres utilisations.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les ressources publiques sont limitées et que chaque dépense a un coût d’opportunité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les besoins sont toujours identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les ressources publiques sont infinies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un programme n’utilise jamais de ressources',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique de santé rémunère davantage les établissements qui atteignent certains indicateurs de qualité. Quelle logique économique utilise-t-elle ?',
                        'explanation' => 'Les règles de paiement peuvent influencer le comportement des prestataires. Lier une partie de la rémunération à certains résultats crée une incitation à améliorer ces résultats.',
                        'choices' => [
                            [
                                'choice_text' => 'Modifier les incitations des prestataires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer toute mesure de qualité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir que les indicateurs ne servent à rien',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire automatiquement tous les coûts',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut apparaître si une couverture publique est très généreuse pour des soins à faible bénéfice mais limitée pour des soins essentiels ?',
                        'explanation' => 'Les ressources de santé étant limitées, le mode de couverture influence leur allocation. Une couverture mal conçue peut financer fortement certains services au détriment d’autres priorités.',
                        'choices' => [
                            [
                                'choice_text' => 'Les ressources peuvent être orientées d’une manière qui ne correspond pas aux priorités de santé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tous les besoins sont automatiquement satisfaits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le budget devient illimité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La prévention devient inutile',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle mesure améliore directement la protection financière d’un ménage face aux soins coûteux ?',
                        'explanation' => 'La protection financière vise à éviter qu’un problème de santé transforme une dépense médicale en choc budgétaire majeur pour le ménage.',
                        'choices' => [
                            [
                                'choice_text' => 'Une couverture qui limite la part des dépenses restant à sa charge',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse du prix des soins sans couverture',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction des services essentiels',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une interdiction de l’assurance',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’évaluation d’une politique de santé ne doit-elle pas considérer uniquement le nombre de consultations ?',
                        'explanation' => 'Une hausse du volume de soins n’est pas nécessairement synonyme d’amélioration de la santé. L’évaluation doit mettre en relation ressources, utilisation, qualité et résultats.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il faut aussi examiner les résultats de santé, les coûts et éventuellement la qualité des soins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les consultations n’utilisent aucune ressource',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le volume est toujours inutile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la qualité n’a aucun lien avec les soins',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un programme atteint davantage de personnes mais avec une dépense par personne beaucoup plus élevée. Quelle question d’évaluation est pertinente ?',
                        'explanation' => 'L’évaluation économique compare les ressources supplémentaires engagées avec les bénéfices obtenus. Une couverture plus large doit être appréciée au regard de son coût et de ses résultats.',
                        'choices' => [
                            [
                                'choice_text' => 'Le gain supplémentaire de couverture justifie-t-il les ressources additionnelles mobilisées ?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le coût n’a aucune importance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toute hausse du nombre de bénéficiaires est automatiquement efficace',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les dépenses supplémentaires ne peuvent jamais avoir de coût d’opportunité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cas pratiques de health economics',
                'description' => 'Quiz de synthèse sur les choix de financement, les coûts, l’assurance, l’accès et les décisions de santé dans des situations concrètes.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Un centre de santé dispose de 10 infirmiers et peut recevoir 200 patients par semaine. Après réorganisation, il reçoit 240 patients avec le même effectif. Que peut-on en déduire, toutes choses égales par ailleurs ?',
                        'explanation' => 'Avec le même effectif, le centre produit davantage de consultations. Cela correspond à une hausse de la productivité, même si l’évaluation complète doit aussi vérifier la qualité.',
                        'choices' => [
                            [
                                'choice_text' => 'La productivité du personnel a augmenté',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La demande de santé a disparu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût des soins est devenu nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre d’infirmiers a augmenté',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une famille fait face à une facture médicale de 12 000 dirhams et son assurance prend en charge 75 % de la dépense. Combien reste-t-il à sa charge ?',
                        'explanation' => 'L’assurance couvre 75 % de 12 000, soit 9 000 dirhams. La part restante est donc de 12 000 − 9 000 = 3 000 dirhams.',
                        'choices' => [
                            [
                                'choice_text' => '3 000 dirhams',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1 500 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3 000 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9 000 dirhams',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux programmes de prévention coûtent respectivement 40 000 et 60 000 dirhams. Le premier évite 80 cas et le second 100 cas. Lequel a le coût par cas évité le plus faible ?',
                        'explanation' => 'Le premier coûte 40 000 ÷ 80 = 500 dirhams par cas évité. Le second coûte 60 000 ÷ 100 = 600 dirhams. Le coût par cas évité est donc plus faible pour le premier.',
                        'choices' => [
                            [
                                'choice_text' => 'Le premier programme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le deuxième programme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux ont exactement le même coût par cas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Impossible à calculer',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un patient assuré paie 20 % d’une facture de 500 dirhams. Quel montant paie-t-il directement ?',
                        'explanation' => 'La participation directe représente 20 % de 500, soit 0,20 × 500 = 100 dirhams.',
                        'choices' => [
                            [
                                'choice_text' => '100 dirhams',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '20 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '400 dirhams',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région construit une clinique dans une zone très éloignée d’un hôpital central. Quelle contrainte d’accès cherche-t-elle principalement à réduire ?',
                        'explanation' => 'Implanter un service plus près des habitants réduit la distance à parcourir et peut donc améliorer l’accès géographique aux soins.',
                        'choices' => [
                            [
                                'choice_text' => 'La distance géographique pour les habitants concernés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le risque d’inflation nationale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix du pétrole mondial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût de la dette publique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Après une campagne d’éducation, davantage de personnes connaissent les signes précoces d’une maladie et consultent rapidement. Quel mécanisme est illustré ?',
                        'explanation' => 'Une meilleure information peut réduire l’incertitude et modifier les décisions. Dans ce cas, elle encourage un recours plus précoce, potentiellement utile pour la prise en charge.',
                        'choices' => [
                            [
                                'choice_text' => 'L’information peut modifier la demande de soins et favoriser un recours plus précoce',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’information supprime le coût des soins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La prévention réduit nécessairement tous les prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande ne dépend jamais des connaissances',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une assurance réduit fortement le coût direct d’un examen peu nécessaire. Certains assurés en demandent alors davantage. Quel concept cela illustre-t-il le mieux ?',
                        'explanation' => 'L’aléa moral décrit une modification du comportement après couverture d’un risque. La baisse du coût direct peut encourager certains recours supplémentaires.',
                        'choices' => [
                            [
                                'choice_text' => 'L’aléa moral',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La sélection adverse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une économie d’échelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût fixe',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un assureur constate que les personnes qui savent avoir un risque médical élevé souscrivent davantage une couverture très généreuse. Quel problème doit-il prendre en compte ?',
                        'explanation' => 'Lorsque les individus disposent d’informations privées sur leur propre risque, les personnes à risque élevé peuvent être plus enclines à demander une couverture généreuse. C’est le mécanisme de sélection adverse.',
                        'choices' => [
                            [
                                'choice_text' => 'La sélection adverse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le coût marginal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La congestion routière',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un hôpital doit choisir entre deux équipements : l’un permet 1 000 examens pour 200 000 dirhams, l’autre 1 200 examens pour 300 000 dirhams. Quel est le coût moyen par examen pour le premier ?',
                        'explanation' => 'Le coût moyen du premier équipement est de 200 000 ÷ 1 000 = 200 dirhams par examen.',
                        'choices' => [
                            [
                                'choice_text' => '200 dirhams',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '120 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '200 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '300 dirhams',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville finance une campagne de vaccination qui réduit aussi la transmission d’une maladie aux personnes non vaccinées. Quel type de bénéfice supplémentaire est observé ?',
                        'explanation' => 'Une personne vaccinée peut contribuer à réduire la transmission et donc le risque pour d’autres personnes. Ce bénéfice pour des tiers est une externalité positive.',
                        'choices' => [
                            [
                                'choice_text' => 'Un bénéfice externe pour d’autres personnes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un coût fixe privé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un bénéfice uniquement comptable',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un ministère compare deux interventions ayant le même coût. La première améliore davantage un indicateur important de santé. Quelle conclusion économique simple peut-on tirer ?',
                        'explanation' => 'À coût égal, obtenir de meilleurs résultats de santé signifie que l’intervention utilise les ressources plus efficacement selon l’objectif mesuré.',
                        'choices' => [
                            [
                                'choice_text' => 'La première produit davantage de résultats de santé pour le même coût',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La seconde est nécessairement plus équitable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux sont identiques en efficacité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La première a nécessairement un coût supérieur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizDataList as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
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