<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SustainableFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sustainable-finance')->firstOrFail();

        $quizzes = [
            [
                'title' => "Fondamentaux de la finance durable et des critères ESG",
                'description' => "Ce quiz introduit les notions essentielles de finance durable, d'ESG et de prise en compte des enjeux environnementaux, sociaux et de gouvernance dans les décisions financières.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Dans une analyse ESG, que recouvrent principalement les trois lettres E, S et G ?",
                        'choices' => [
                            ['choice_text' => "Environnemental, Social et Gouvernance", 'is_correct' => true],
                            ['choice_text' => "Économique, Stratégique et Global", 'is_correct' => false],
                            ['choice_text' => "Énergie, Solvabilité et Gestion", 'is_correct' => false],
                            ['choice_text' => "Éthique, Sécurité et Garantie", 'is_correct' => false],
                        ],
                        'explanation' => "L'ESG signifie Environnemental, Social et Gouvernance. Ces trois dimensions complètent l'analyse financière en examinant notamment les impacts et les pratiques d'une organisation.",
                    ],
                    [
                        'question' => "Une entreprise réduit fortement sa consommation d'eau dans ses usines. Cette action relève d'abord de quelle dimension ESG ?",
                        'choices' => [
                            ['choice_text' => "La dimension environnementale", 'is_correct' => true],
                            ['choice_text' => "La dimension sociale", 'is_correct' => false],
                            ['choice_text' => "La dimension de gouvernance", 'is_correct' => false],
                            ['choice_text' => "Aucune dimension ESG", 'is_correct' => false],
                        ],
                        'explanation' => "La réduction de la consommation d'eau concerne directement l'utilisation des ressources naturelles et relève donc de la dimension environnementale.",
                    ],
                    [
                        'question' => "Pourquoi un investisseur peut-il intégrer des critères ESG dans une analyse financière ?",
                        'choices' => [
                            ['choice_text' => "Parce que certains enjeux ESG peuvent influencer les risques, les coûts ou les perspectives économiques d'une entreprise", 'is_correct' => true],
                            ['choice_text' => "Parce que les critères ESG remplacent toujours les états financiers", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une entreprise ESG est automatiquement rentable", 'is_correct' => false],
                            ['choice_text' => "Parce que les critères ESG garantissent l'absence de risque", 'is_correct' => false],
                        ],
                        'explanation' => "Les enjeux ESG peuvent avoir des conséquences financières, par exemple via les coûts énergétiques, les réglementations, la réputation ou l'accès au financement. Ils ne remplacent toutefois pas l'analyse financière classique et ne garantissent pas une rentabilité.",
                    ],
                    [
                        'question' => "Quel exemple correspond le mieux à un enjeu social ?",
                        'choices' => [
                            ['choice_text' => "La sécurité et les conditions de travail des salariés", 'is_correct' => true],
                            ['choice_text' => "La consommation d'électricité d'un bâtiment", 'is_correct' => false],
                            ['choice_text' => "La composition du conseil d'administration", 'is_correct' => false],
                            ['choice_text' => "Le rendement d'une obligation d'État", 'is_correct' => false],
                        ],
                        'explanation' => "La santé, la sécurité et les conditions de travail relèvent de la dimension sociale de l'ESG.",
                    ],
                    [
                        'question' => "Lequel de ces sujets relève principalement de la gouvernance ?",
                        'choices' => [
                            ['choice_text' => "La structure et le contrôle du conseil d'administration", 'is_correct' => true],
                            ['choice_text' => "Les émissions de gaz à effet de serre", 'is_correct' => false],
                            ['choice_text' => "La consommation d'eau", 'is_correct' => false],
                            ['choice_text' => "La qualité de l'air local", 'is_correct' => false],
                        ],
                        'explanation' => "La gouvernance concerne notamment la composition des organes de décision, les contrôles internes, les droits des actionnaires et la manière dont l'organisation est dirigée.",
                    ],
                    [
                        'question' => "Une banque compare deux entreprises identiques sur le plan financier mais constate que l'une dispose de meilleurs dispositifs de contrôle anticorruption. Pourquoi cela peut-il être pertinent pour l'investisseur ?",
                        'choices' => [
                            ['choice_text' => "Un meilleur contrôle peut réduire certains risques de gouvernance et de réputation", 'is_correct' => true],
                            ['choice_text' => "Cela prouve que l'entreprise aura toujours un cours de bourse plus élevé", 'is_correct' => false],
                            ['choice_text' => "Cela rend inutiles les états financiers", 'is_correct' => false],
                            ['choice_text' => "Cela garantit une croissance du chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "Les mécanismes anticorruption peuvent limiter certains risques juridiques, opérationnels et réputationnels. Ils constituent donc un élément pertinent de l'analyse de gouvernance, sans garantir à eux seuls la performance boursière.",
                    ],
                    [
                        'question' => "Quel énoncé décrit le mieux la finance durable ?",
                        'choices' => [
                            ['choice_text' => "Une approche qui cherche à intégrer les enjeux de durabilité dans les décisions de financement et d'investissement", 'is_correct' => true],
                            ['choice_text' => "Une finance réservée exclusivement aux obligations vertes", 'is_correct' => false],
                            ['choice_text' => "Une méthode qui ignore la rentabilité au profit de critères environnementaux", 'is_correct' => false],
                            ['choice_text' => "Un système qui interdit tout investissement dans les entreprises industrielles", 'is_correct' => false],
                        ],
                        'explanation' => "La finance durable ne se limite pas à un seul produit financier. Elle cherche à intégrer des enjeux de durabilité dans les décisions financières tout en conservant une logique économique.",
                    ],
                    [
                        'question' => "Une société publie de nombreuses données environnementales, mais aucune information sur la gestion des conflits d'intérêts au sein de sa direction. Quelle dimension ESG reste particulièrement peu documentée ?",
                        'choices' => [
                            ['choice_text' => "La gouvernance", 'is_correct' => true],
                            ['choice_text' => "L'environnement", 'is_correct' => false],
                            ['choice_text' => "Le social", 'is_correct' => false],
                            ['choice_text' => "La politique monétaire", 'is_correct' => false],
                        ],
                        'explanation' => "Les conflits d'intérêts, les mécanismes de contrôle et la surveillance de la direction appartiennent principalement à la gouvernance.",
                    ],
                    [
                        'question' => "Un investisseur dit : « Je ne regarde que le score ESG, car il me donne automatiquement le rendement futur ». Quel est le principal problème de ce raisonnement ?",
                        'choices' => [
                            ['choice_text' => "Un score ESG ne constitue pas à lui seul une garantie de performance financière future", 'is_correct' => true],
                            ['choice_text' => "Les scores ESG mesurent uniquement le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Les scores ESG sont toujours calculés à partir des cours boursiers", 'is_correct' => false],
                            ['choice_text' => "Les facteurs ESG ne peuvent jamais avoir de lien avec la finance", 'is_correct' => false],
                        ],
                        'explanation' => "Les données ESG peuvent éclairer l'analyse d'une entreprise, mais elles ne permettent pas à elles seules de garantir un rendement futur. La qualité de l'entreprise, sa valorisation et les conditions de marché restent importantes.",
                    ],
                    [
                        'question' => "Quelle situation illustre le mieux une approche où les facteurs ESG sont intégrés dans l'analyse financière sans constituer un portefeuille exclusivement « vert » ?",
                        'choices' => [
                            ['choice_text' => "Évaluer l'effet d'un futur prix du carbone sur les coûts et la valeur d'une entreprise", 'is_correct' => true],
                            ['choice_text' => "Acheter uniquement des obligations portant le mot « vert » dans leur nom", 'is_correct' => false],
                            ['choice_text' => "Ignorer tous les risques environnementaux parce qu'ils ne figurent pas dans le bilan", 'is_correct' => false],
                            ['choice_text' => "Exclure toute entreprise ayant une activité industrielle, quelle qu'elle soit", 'is_correct' => false],
                        ],
                        'explanation' => "L'intégration ESG consiste notamment à examiner comment des facteurs de durabilité peuvent modifier les risques, les flux de trésorerie ou la valorisation. Elle n'implique pas nécessairement une stratégie d'exclusion totale.",
                    ],
                ],
            ],
            [
                'title' => "Approches d'investissement durable",
                'description' => "Ce quiz compare les principales approches de l'investissement durable : exclusions, sélection ESG, intégration ESG, engagement actionnarial et investissement thématique.",
                'duration' => 22,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Un fonds interdit tout investissement dans les producteurs de tabac. Quelle approche décrit le mieux cette décision ?",
                        'choices' => [
                            ['choice_text' => "L'exclusion", 'is_correct' => true],
                            ['choice_text' => "L'engagement actionnarial", 'is_correct' => false],
                            ['choice_text' => "L'impact investing", 'is_correct' => false],
                            ['choice_text' => "La duration matching", 'is_correct' => false],
                        ],
                        'explanation' => "L'exclusion consiste à écarter certaines activités ou certains émetteurs selon des critères prédéfinis.",
                    ],
                    [
                        'question' => "Le principe du best-in-class consiste généralement à :",
                        'choices' => [
                            ['choice_text' => "Sélectionner, au sein d'un secteur, les entreprises jugées les mieux positionnées selon des critères ESG", 'is_correct' => true],
                            ['choice_text' => "Investir seulement dans les petites entreprises", 'is_correct' => false],
                            ['choice_text' => "Acheter les actions ayant le plus faible cours", 'is_correct' => false],
                            ['choice_text' => "Exclure automatiquement tous les secteurs à forte intensité carbone", 'is_correct' => false],
                        ],
                        'explanation' => "L'approche best-in-class compare les entreprises à leurs pairs et privilégie celles qui obtiennent les meilleures caractéristiques ESG selon la méthode du fonds.",
                    ],
                    [
                        'question' => "Quel est l'objectif principal de l'engagement actionnarial ?",
                        'choices' => [
                            ['choice_text' => "Dialoguer avec les entreprises et utiliser les droits d'actionnaire pour encourager certaines améliorations", 'is_correct' => true],
                            ['choice_text' => "Éviter toute communication avec les dirigeants", 'is_correct' => false],
                            ['choice_text' => "Garantir un dividende minimum", 'is_correct' => false],
                            ['choice_text' => "Remplacer le conseil d'administration de toutes les entreprises détenues", 'is_correct' => false],
                        ],
                        'explanation' => "L'engagement actionnarial cherche à influencer les pratiques d'une entreprise par le dialogue, le vote et d'autres moyens liés aux droits de l'actionnaire.",
                    ],
                    [
                        'question' => "Un gérant sélectionne des entreprises de secteurs différents, mais ajuste chaque valorisation pour tenir compte de leur exposition au risque climatique. Quelle approche est illustrée ?",
                        'choices' => [
                            ['choice_text' => "L'intégration ESG", 'is_correct' => true],
                            ['choice_text' => "Une exclusion sectorielle stricte", 'is_correct' => false],
                            ['choice_text' => "Un simple investissement indiciel sans analyse", 'is_correct' => false],
                            ['choice_text' => "Une stratégie uniquement fondée sur le dividende", 'is_correct' => false],
                        ],
                        'explanation' => "L'intégration ESG consiste à incorporer des facteurs ESG pertinents dans l'analyse d'investissement, notamment lorsqu'ils peuvent affecter les risques ou la valeur économique.",
                    ],
                    [
                        'question' => "Un fonds investit exclusivement dans des entreprises développant des technologies de stockage d'énergie. L'approche est principalement :",
                        'choices' => [
                            ['choice_text' => "Thématique", 'is_correct' => true],
                            ['choice_text' => "Passivement orientée vers toutes les entreprises du marché", 'is_correct' => false],
                            ['choice_text' => "Fondée uniquement sur l'exclusion", 'is_correct' => false],
                            ['choice_text' => "Sans rapport avec la durabilité", 'is_correct' => false],
                        ],
                        'explanation' => "L'investissement thématique se concentre sur un thème précis, par exemple les technologies de transition énergétique, l'eau ou l'efficacité des ressources.",
                    ],
                    [
                        'question' => "Quel énoncé distingue le mieux une exclusion d'un engagement actionnarial ?",
                        'choices' => [
                            ['choice_text' => "L'exclusion retire un émetteur du portefeuille, tandis que l'engagement cherche à influencer ses pratiques tout en pouvant conserver l'investissement", 'is_correct' => true],
                            ['choice_text' => "L'exclusion nécessite toujours de détenir l'action", 'is_correct' => false],
                            ['choice_text' => "L'engagement interdit tout vote en assemblée", 'is_correct' => false],
                            ['choice_text' => "Les deux approches sont strictement identiques", 'is_correct' => false],
                        ],
                        'explanation' => "Une exclusion et un engagement poursuivent des mécanismes différents. Dans l'engagement, l'investisseur conserve souvent sa position afin de disposer d'une influence auprès de l'entreprise.",
                    ],
                    [
                        'question' => "Un fonds choisit les 20 % d'entreprises ayant les meilleures pratiques ESG dans chaque secteur représenté. Cette méthode correspond le mieux à :",
                        'choices' => [
                            ['choice_text' => "Une sélection relative de type best-in-class", 'is_correct' => true],
                            ['choice_text' => "Une exclusion de tous les secteurs", 'is_correct' => false],
                            ['choice_text' => "Une couverture de change", 'is_correct' => false],
                            ['choice_text' => "Une gestion passive sans critère", 'is_correct' => false],
                        ],
                        'explanation' => "Une sélection relative compare les entreprises entre elles et retient les mieux positionnées à l'intérieur de leur univers sectoriel.",
                    ],
                    [
                        'question' => "Pourquoi une stratégie d'investissement durable peut-elle conserver une entreprise à forte émission de carbone ?",
                        'choices' => [
                            ['choice_text' => "Parce que le gérant peut juger que sa trajectoire de transition et ses efforts futurs sont financièrement pertinents", 'is_correct' => true],
                            ['choice_text' => "Parce que les émissions de carbone ne sont jamais importantes", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une entreprise émettrice est automatiquement durable", 'is_correct' => false],
                            ['choice_text' => "Parce que l'ESG interdit de comparer les entreprises", 'is_correct' => false],
                        ],
                        'explanation' => "Certaines approches évaluent la trajectoire de transition, les investissements nécessaires et les risques futurs plutôt que d'exclure automatiquement toute entreprise actuellement exposée à des émissions élevées.",
                    ],
                    [
                        'question' => "Un fonds détient une entreprise et vote régulièrement en assemblée pour demander plus de transparence climatique. Quelle action met-il en œuvre ?",
                        'choices' => [
                            ['choice_text' => "L'engagement actionnarial", 'is_correct' => true],
                            ['choice_text' => "L'exclusion", 'is_correct' => false],
                            ['choice_text' => "Le financement mezzanine", 'is_correct' => false],
                            ['choice_text' => "Le hedging de taux", 'is_correct' => false],
                        ],
                        'explanation' => "Le vote et le dialogue avec l'entreprise sont des outils classiques de l'engagement actionnarial.",
                    ],
                    [
                        'question' => "Quelle approche cherche directement à associer un objectif financier à la production d'un résultat environnemental ou social mesurable ?",
                        'choices' => [
                            ['choice_text' => "L'impact investing", 'is_correct' => true],
                            ['choice_text' => "La simple réplication d'un indice", 'is_correct' => false],
                            ['choice_text' => "La seule exclusion normative", 'is_correct' => false],
                            ['choice_text' => "La gestion de trésorerie à court terme", 'is_correct' => false],
                        ],
                        'explanation' => "L'impact investing vise à générer un impact social ou environnemental intentionnel et mesurable, parallèlement à un objectif financier.",
                    ],
                    [
                        'question' => "Pourquoi est-il utile pour un investisseur de connaître la méthode ESG utilisée par un fonds ?",
                        'choices' => [
                            ['choice_text' => "Parce que deux fonds utilisant le mot « durable » peuvent sélectionner les actifs selon des critères très différents", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les fonds durables ont exactement le même portefeuille", 'is_correct' => false],
                            ['choice_text' => "Parce que la méthode ESG détermine toujours le rendement", 'is_correct' => false],
                            ['choice_text' => "Parce que la méthode ESG remplace les objectifs du client", 'is_correct' => false],
                        ],
                        'explanation' => "La compréhension de la méthodologie permet de savoir comment sont sélectionnés, conservés ou exclus les actifs et d'éviter de supposer que des appellations similaires recouvrent les mêmes pratiques.",
                    ],
                ],
            ],
            [
                'title' => "Green bonds et financement de projets environnementaux",
                'description' => "Ce quiz porte sur les green bonds, l'utilisation des fonds levés, le suivi des projets financés et les principaux risques de compréhension ou de communication.",
                'duration' => 24,
                'passing_score' => 54,
                'questions' => [
                    [
                        'question' => "Qu'est-ce qu'une green bond dans son principe le plus général ?",
                        'choices' => [
                            ['choice_text' => "Une obligation dont les fonds levés sont destinés à financer des projets ou actifs répondant à des objectifs environnementaux définis", 'is_correct' => true],
                            ['choice_text' => "Une action d'une entreprise spécialisée dans l'environnement", 'is_correct' => false],
                            ['choice_text' => "Une obligation dont le coupon est toujours inférieur à celui du marché", 'is_correct' => false],
                            ['choice_text' => "Un titre qui ne comporte aucun risque de crédit", 'is_correct' => false],
                        ],
                        'explanation' => "Une green bond est une obligation dont l'utilisation des fonds levés est orientée vers des projets ou actifs environnementaux selon des critères et une documentation définis.",
                    ],
                    [
                        'question' => "Une entreprise émet une green bond pour financer l'installation de centrales solaires. Le point central pour l'investisseur concerne notamment :",
                        'choices' => [
                            ['choice_text' => "L'utilisation prévue et le suivi des fonds levés selon le cadre annoncé", 'is_correct' => true],
                            ['choice_text' => "Le fait que l'obligation soit toujours sans risque", 'is_correct' => false],
                            ['choice_text' => "L'interdiction de calculer le rendement à l'échéance", 'is_correct' => false],
                            ['choice_text' => "La garantie que le cours montera après l'émission", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une green bond, la crédibilité du dispositif dépend notamment de la destination des fonds, des critères appliqués et des mécanismes de suivi et de reporting annoncés.",
                    ],
                    [
                        'question' => "Une green bond finance réellement un parc solaire, mais son émetteur reste très endetté. Quelle conclusion est la plus juste ?",
                        'choices' => [
                            ['choice_text' => "Le caractère environnemental du projet ne supprime pas le risque de crédit de l'émetteur", 'is_correct' => true],
                            ['choice_text' => "Le risque de défaut devient nul", 'is_correct' => false],
                            ['choice_text' => "Le rendement est automatiquement garanti", 'is_correct' => false],
                            ['choice_text' => "La solvabilité n'a plus aucune importance", 'is_correct' => false],
                        ],
                        'explanation' => "Le statut « vert » porte sur l'utilisation des fonds et certains engagements associés. Il ne transforme pas une obligation risquée en titre sans risque de crédit.",
                    ],
                    [
                        'question' => "Pourquoi un reporting post-émission peut-il être utile pour une green bond ?",
                        'choices' => [
                            ['choice_text' => "Il permet de suivre l'affectation des fonds et, selon le cadre choisi, certains résultats environnementaux", 'is_correct' => true],
                            ['choice_text' => "Il garantit une hausse du prix de l'obligation", 'is_correct' => false],
                            ['choice_text' => "Il remplace totalement l'analyse du risque de crédit", 'is_correct' => false],
                            ['choice_text' => "Il rend inutile la documentation d'émission", 'is_correct' => false],
                        ],
                        'explanation' => "Le reporting améliore la transparence sur l'emploi des fonds et peut documenter les résultats environnementaux associés aux projets financés.",
                    ],
                    [
                        'question' => "Une collectivité utilise le produit d'une obligation verte pour financer des transports publics à faibles émissions. Quel est le lien avec la finance durable ?",
                        'choices' => [
                            ['choice_text' => "Le financement oriente du capital vers une infrastructure ayant un objectif environnemental identifié", 'is_correct' => true],
                            ['choice_text' => "La collectivité ne bénéficie d'aucun financement", 'is_correct' => false],
                            ['choice_text' => "Le projet devient automatiquement rentable", 'is_correct' => false],
                            ['choice_text' => "Le titre devient une action ordinaire", 'is_correct' => false],
                        ],
                        'explanation' => "La finance durable vise notamment à orienter des capitaux vers des projets pouvant répondre à des objectifs environnementaux ou sociaux définis.",
                    ],
                    [
                        'question' => "Un investisseur découvre qu'une émission présentée comme « verte » ne précise presque rien sur l'affectation des fonds. Quel point mérite une attention particulière ?",
                        'choices' => [
                            ['choice_text' => "La qualité du cadre de financement, des critères d'éligibilité et des informations fournies", 'is_correct' => true],
                            ['choice_text' => "Le nombre de salariés de l'investisseur", 'is_correct' => false],
                            ['choice_text' => "Le fait que toutes les obligations vertes aient la même qualité", 'is_correct' => false],
                            ['choice_text' => "L'absence automatique de risque de taux", 'is_correct' => false],
                        ],
                        'explanation' => "Une bonne analyse doit examiner la documentation, les projets éligibles, les mécanismes d'allocation et le reporting prévu. L'étiquette seule ne suffit pas.",
                    ],
                    [
                        'question' => "Une green bond verse un coupon fixe de 4 %. Le mot « green » signifie que :",
                        'choices' => [
                            ['choice_text' => "Le caractère environnemental concerne principalement la destination ou le cadre d'utilisation des fonds, pas une garantie du niveau de coupon", 'is_correct' => true],
                            ['choice_text' => "Le coupon est toujours de 4 % pour toutes les green bonds", 'is_correct' => false],
                            ['choice_text' => "Le titre ne peut jamais perdre de valeur", 'is_correct' => false],
                            ['choice_text' => "Le coupon est indexé automatiquement sur la température mondiale", 'is_correct' => false],
                        ],
                        'explanation' => "Le coupon est une caractéristique financière de l'obligation. Le qualificatif « green » décrit surtout l'utilisation des fonds et le cadre environnemental associé, selon les engagements de l'émission.",
                    ],
                    [
                        'question' => "Quel document ou élément est particulièrement utile pour comprendre quels projets peuvent être financés par une green bond ?",
                        'choices' => [
                            ['choice_text' => "Le cadre de financement durable de l'émission", 'is_correct' => true],
                            ['choice_text' => "Le ticket de caisse d'un investisseur", 'is_correct' => false],
                            ['choice_text' => "Le cours de clôture d'une autre action", 'is_correct' => false],
                            ['choice_text' => "Une publicité sans détail technique", 'is_correct' => false],
                        ],
                        'explanation' => "Le cadre de financement décrit généralement les catégories de projets éligibles, les processus de sélection, la gestion des fonds et le reporting prévu.",
                    ],
                    [
                        'question' => "Une entreprise refinance un ancien projet fossile mais le présente comme « transition verte » sans expliquer les critères utilisés. Quel risque de communication apparaît ?",
                        'choices' => [
                            ['choice_text' => "Un risque de greenwashing ou de présentation trompeuse des caractéristiques environnementales", 'is_correct' => true],
                            ['choice_text' => "Un risque automatique de change", 'is_correct' => false],
                            ['choice_text' => "Un risque automatique de dilution des actionnaires", 'is_correct' => false],
                            ['choice_text' => "Aucun risque, car toute communication environnementale est nécessairement exacte", 'is_correct' => false],
                        ],
                        'explanation' => "Une communication environnementale doit être cohérente avec les faits, la méthode et les objectifs annoncés. Une présentation exagérée ou peu étayée peut conduire à un risque de greenwashing.",
                    ],
                    [
                        'question' => "Quelle différence générale existe entre une green bond et une obligation classique ?",
                        'choices' => [
                            ['choice_text' => "La green bond ajoute un cadre spécifique concernant l'utilisation des fonds à des projets ou actifs environnementaux éligibles", 'is_correct' => true],
                            ['choice_text' => "La green bond est toujours émise par un État", 'is_correct' => false],
                            ['choice_text' => "La green bond ne verse jamais d'intérêt", 'is_correct' => false],
                            ['choice_text' => "La green bond est nécessairement une action cotée", 'is_correct' => false],
                        ],
                        'explanation' => "La différence principale tient au cadre d'utilisation des fonds et aux engagements de transparence associés, tandis que l'instrument reste une obligation avec ses risques financiers classiques.",
                    ],
                    [
                        'question' => "Pour comparer deux green bonds, l'investisseur devrait notamment examiner :",
                        'choices' => [
                            ['choice_text' => "L'émetteur, le risque de crédit, les conditions financières et la qualité du cadre environnemental", 'is_correct' => true],
                            ['choice_text' => "Uniquement la couleur du document de présentation", 'is_correct' => false],
                            ['choice_text' => "Seulement le mot « green » dans le titre", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nombre de pages du prospectus", 'is_correct' => false],
                        ],
                        'explanation' => "Une comparaison sérieuse combine les caractéristiques financières traditionnelles et l'analyse du cadre environnemental de chaque émission.",
                    ],
                    [
                        'question' => "Une entreprise utilise une green bond pour financer plusieurs projets dont seuls certains correspondent aux catégories annoncées. Quel contrôle est particulièrement important ?",
                        'choices' => [
                            ['choice_text' => "Vérifier que les fonds sont effectivement affectés aux projets éligibles selon le cadre annoncé", 'is_correct' => true],
                            ['choice_text' => "Vérifier uniquement que le mot « green » apparaît sur le certificat", 'is_correct' => false],
                            ['choice_text' => "Supposer que tous les projets de l'émetteur sont automatiquement éligibles", 'is_correct' => false],
                            ['choice_text' => "Ignorer l'allocation des fonds après l'émission", 'is_correct' => false],
                        ],
                        'explanation' => "Le suivi de l'allocation permet de vérifier que les fonds levés sont utilisés conformément aux critères et catégories de projets prévus par le cadre de l'émission.",
                    ],
                ],
            ],
            [
                'title' => "Risques climatiques et transition financière",
                'description' => "Ce quiz présente les risques physiques et de transition, leurs effets possibles sur les entreprises et la logique de la transition finance.",
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une usine est régulièrement endommagée par des inondations plus fréquentes. Cela correspond principalement à quel type de risque climatique ?",
                        'choices' => [
                            ['choice_text' => "Un risque physique", 'is_correct' => true],
                            ['choice_text' => "Un risque de transition", 'is_correct' => false],
                            ['choice_text' => "Un risque de dilution", 'is_correct' => false],
                            ['choice_text' => "Un risque de duration", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque physique correspond aux conséquences directes ou indirectes des événements climatiques et de l'évolution des conditions physiques sur les activités économiques.",
                    ],
                    [
                        'question' => "Une nouvelle réglementation augmente fortement le coût du carbone pour certaines industries. Quel type de risque cela illustre-t-il ?",
                        'choices' => [
                            ['choice_text' => "Un risque de transition", 'is_correct' => true],
                            ['choice_text' => "Un risque physique uniquement", 'is_correct' => false],
                            ['choice_text' => "Un risque de change", 'is_correct' => false],
                            ['choice_text' => "Un risque de liquidité bancaire automatiquement", 'is_correct' => false],
                        ],
                        'explanation' => "Les changements réglementaires, technologiques, de marché ou de préférences des consommateurs liés à la transition bas-carbone sont généralement classés parmi les risques de transition.",
                    ],
                    [
                        'question' => "Pourquoi le risque climatique peut-il affecter la valeur d'une entreprise ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il peut modifier les coûts, les revenus, les investissements nécessaires ou les actifs de l'entreprise", 'is_correct' => true],
                            ['choice_text' => "Parce que le climat détermine directement le cours quotidien de toutes les actions", 'is_correct' => false],
                            ['choice_text' => "Parce que toute entreprise climatique est automatiquement rentable", 'is_correct' => false],
                            ['choice_text' => "Parce que le risque climatique remplace tous les autres risques", 'is_correct' => false],
                        ],
                        'explanation' => "Les risques climatiques peuvent avoir des effets financiers via les interruptions d'activité, les investissements, les prix des ressources, la réglementation, la demande ou la dépréciation d'actifs.",
                    ],
                    [
                        'question' => "Une compagnie d'assurance couvre des biens situés dans des zones fortement exposées aux incendies. Pourquoi le changement climatique peut-il être pertinent pour elle ?",
                        'choices' => [
                            ['choice_text' => "Une fréquence ou une sévérité accrue des sinistres peut influencer ses coûts et son exposition au risque", 'is_correct' => true],
                            ['choice_text' => "Parce que les assureurs ne calculent jamais les primes", 'is_correct' => false],
                            ['choice_text' => "Parce que les incendies sont un risque de gouvernance", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les primes deviennent nécessairement nulles", 'is_correct' => false],
                        ],
                        'explanation' => "Pour un assureur, l'évolution de la fréquence ou de l'intensité des événements physiques peut influencer les sinistres, la tarification et la gestion du portefeuille de risques.",
                    ],
                    [
                        'question' => "Qu'entend-on généralement par « transition finance » ?",
                        'choices' => [
                            ['choice_text' => "Le financement de transformations crédibles permettant à des activités très émettrices de réduire progressivement leur impact", 'is_correct' => true],
                            ['choice_text' => "Le financement exclusif de projets déjà totalement décarbonés", 'is_correct' => false],
                            ['choice_text' => "Le financement d'un changement de banque", 'is_correct' => false],
                            ['choice_text' => "Une forme de crédit sans risque", 'is_correct' => false],
                        ],
                        'explanation' => "La transition finance cherche notamment à soutenir la transformation d'activités existantes vers des trajectoires plus compatibles avec des objectifs climatiques, avec une attention portée à la crédibilité des plans de transition.",
                    ],
                    [
                        'question' => "Une entreprise sidérurgique présente un plan d'investissement pour réduire progressivement l'intensité carbone de ses installations. Pour un financeur, l'un des éléments importants est :",
                        'choices' => [
                            ['choice_text' => "La crédibilité du plan, les investissements nécessaires et les progrès mesurables", 'is_correct' => true],
                            ['choice_text' => "La seule couleur du logo de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "L'absence totale d'émissions dès la première année", 'is_correct' => false],
                            ['choice_text' => "Le fait que toute sidérurgie soit automatiquement durable", 'is_correct' => false],
                        ],
                        'explanation' => "L'évaluation d'une transition repose notamment sur les objectifs, les investissements, les indicateurs de progrès et la cohérence du plan avec la transformation annoncée.",
                    ],
                    [
                        'question' => "Quel exemple correspond le mieux à un risque physique aigu ?",
                        'choices' => [
                            ['choice_text' => "Une tempête extrême qui endommage temporairement des infrastructures", 'is_correct' => true],
                            ['choice_text' => "Une taxe carbone progressivement renforcée", 'is_correct' => false],
                            ['choice_text' => "Une préférence des consommateurs pour des produits bas-carbone", 'is_correct' => false],
                            ['choice_text' => "Une nouvelle norme de reporting", 'is_correct' => false],
                        ],
                        'explanation' => "Les événements ponctuels tels que tempêtes, incendies ou inondations sévères constituent des exemples de risques physiques aigus.",
                    ],
                    [
                        'question' => "Quel élément peut être considéré comme un risque de transition lié au marché ?",
                        'choices' => [
                            ['choice_text' => "Une baisse de la demande pour un produit très carboné au profit d'une alternative plus propre", 'is_correct' => true],
                            ['choice_text' => "Une inondation soudaine d'une usine", 'is_correct' => false],
                            ['choice_text' => "Une erreur de saisie comptable", 'is_correct' => false],
                            ['choice_text' => "Une panne informatique sans lien avec la transition", 'is_correct' => false],
                        ],
                        'explanation' => "La transformation des préférences et de la demande vers des produits moins carbonés peut modifier les revenus des entreprises et constitue un risque de transition lié au marché.",
                    ],
                    [
                        'question' => "Pourquoi une banque peut-elle intégrer les risques climatiques dans l'analyse d'un prêt ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'ils peuvent affecter la capacité de remboursement de l'emprunteur ou la valeur des actifs financés", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les prêts sont juridiquement des green bonds", 'is_correct' => false],
                            ['choice_text' => "Parce que le taux d'intérêt ne dépend jamais du risque", 'is_correct' => false],
                            ['choice_text' => "Parce que la banque doit éliminer tout prêt à une entreprise industrielle", 'is_correct' => false],
                        ],
                        'explanation' => "Les risques climatiques peuvent affecter les flux de trésorerie de l'emprunteur et la valeur des garanties. Ils peuvent donc être pertinents dans l'analyse du risque de crédit.",
                    ],
                    [
                        'question' => "Une entreprise investit dans des équipements plus résistants à la chaleur afin de réduire ses pertes futures. Cette action correspond surtout à :",
                        'choices' => [
                            ['choice_text' => "L'adaptation au risque physique", 'is_correct' => true],
                            ['choice_text' => "Une exclusion ESG", 'is_correct' => false],
                            ['choice_text' => "Un investissement passif", 'is_correct' => false],
                            ['choice_text' => "Une opération de change", 'is_correct' => false],
                        ],
                        'explanation' => "L'adaptation vise à réduire la vulnérabilité aux conséquences physiques du changement climatique, par exemple la chaleur, les inondations ou les pénuries d'eau.",
                    ],
                    [
                        'question' => "Une entreprise réduit ses émissions en remplaçant une chaudière au fioul par une solution électrique moins carbonée. Cette action relève principalement de :",
                        'choices' => [
                            ['choice_text' => "L'atténuation ou réduction des émissions", 'is_correct' => true],
                            ['choice_text' => "La gouvernance seulement", 'is_correct' => false],
                            ['choice_text' => "La couverture de change", 'is_correct' => false],
                            ['choice_text' => "La gestion de la liquidité uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "L'atténuation vise à réduire les émissions de gaz à effet de serre ou à augmenter les puits de carbone. Le remplacement d'une source énergétique fortement carbonée peut y contribuer.",
                    ],
                    [
                        'question' => "Une usine investit dans des systèmes d'alerte et des barrières pour limiter les dommages causés par des inondations futures. Quel objectif est principalement recherché ?",
                        'choices' => [
                            ['choice_text' => "Réduire la vulnérabilité aux risques physiques", 'is_correct' => true],
                            ['choice_text' => "Réduire directement le taux de coupon d'une obligation", 'is_correct' => false],
                            ['choice_text' => "Remplacer l'analyse des flux de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Créer automatiquement une green bond", 'is_correct' => false],
                        ],
                        'explanation' => "Les systèmes d'alerte et les protections physiques sont des mesures d'adaptation. Elles cherchent à limiter les conséquences d'un risque climatique physique plutôt qu'à financer directement une réduction des émissions.",
                    ],
                ],
            ],
            [
                'title' => "ESG integration, matérialité et analyse financière",
                'description' => "Ce quiz met l'accent sur l'intégration ESG dans l'analyse, la matérialité financière, les indicateurs pertinents et les limites des scores ESG.",
                'duration' => 27,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Dans une analyse financière, un facteur ESG est particulièrement important lorsqu'il est :",
                        'choices' => [
                            ['choice_text' => "Susceptible d'avoir une influence significative sur les risques, les revenus, les coûts ou la valeur de l'entreprise", 'is_correct' => true],
                            ['choice_text' => "Présent uniquement dans une brochure marketing", 'is_correct' => false],
                            ['choice_text' => "Identique pour toutes les entreprises", 'is_correct' => false],
                            ['choice_text' => "Sans aucun lien avec les activités de l'entreprise", 'is_correct' => false],
                        ],
                        'explanation' => "La matérialité financière dépend de la capacité d'un enjeu à affecter économiquement l'entreprise. Tous les indicateurs ESG n'ont donc pas la même importance pour chaque secteur.",
                    ],
                    [
                        'question' => "Pourquoi les facteurs ESG matériels peuvent-ils différer entre une compagnie minière et une société de logiciels ?",
                        'choices' => [
                            ['choice_text' => "Leur modèle économique, leurs impacts et leurs expositions aux risques ne sont pas les mêmes", 'is_correct' => true],
                            ['choice_text' => "Parce que les critères ESG ne s'appliquent jamais aux logiciels", 'is_correct' => false],
                            ['choice_text' => "Parce que les sociétés de logiciels ne sont pas des entreprises", 'is_correct' => false],
                            ['choice_text' => "Parce que la finance durable interdit toute comparaison", 'is_correct' => false],
                        ],
                        'explanation' => "La matérialité dépend du secteur, du modèle économique et des expositions spécifiques. Les enjeux importants pour une activité minière ne sont pas nécessairement identiques à ceux d'un logiciel.",
                    ],
                    [
                        'question' => "Une entreprise automobile anticipe une hausse du coût des matières premières liées à la transition énergétique. Dans une valorisation DCF, cela peut influencer directement :",
                        'choices' => [
                            ['choice_text' => "Les flux de trésorerie futurs et donc la valeur actuelle estimée", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nombre d'actionnaires", 'is_correct' => false],
                            ['choice_text' => "La date de création de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Le nombre de sièges au conseil", 'is_correct' => false],
                        ],
                        'explanation' => "Si un facteur ESG modifie les coûts ou les flux de trésorerie futurs, il peut affecter directement une valorisation DCF via les cash flows projetés et, éventuellement, le taux d'actualisation.",
                    ],
                    [
                        'question' => "Quel est le principal avantage d'une approche d'intégration ESG ?",
                        'choices' => [
                            ['choice_text' => "Elle permet de relier les facteurs ESG pertinents aux risques et aux hypothèses financières", 'is_correct' => true],
                            ['choice_text' => "Elle garantit un rendement supérieur à tout indice", 'is_correct' => false],
                            ['choice_text' => "Elle évite toute analyse de valorisation", 'is_correct' => false],
                            ['choice_text' => "Elle rend tous les secteurs équivalents", 'is_correct' => false],
                        ],
                        'explanation' => "L'intégration ESG cherche à connecter les informations ESG aux éléments économiques qui influencent la décision d'investissement, plutôt qu'à les traiter comme une simple liste séparée.",
                    ],
                    [
                        'question' => "Un analyste utilise le score ESG d'un fournisseur de données sans vérifier sa méthodologie. Quel problème peut-il rencontrer ?",
                        'choices' => [
                            ['choice_text' => "Les scores peuvent reposer sur des méthodes, pondérations et sources différentes et ne sont pas nécessairement directement comparables", 'is_correct' => true],
                            ['choice_text' => "Tous les scores ESG sont légalement identiques", 'is_correct' => false],
                            ['choice_text' => "Le score ESG contient toujours la valeur intrinsèque exacte de l'action", 'is_correct' => false],
                            ['choice_text' => "Un score ne peut jamais comporter d'estimation", 'is_correct' => false],
                        ],
                        'explanation' => "Les agences et fournisseurs peuvent utiliser des méthodologies différentes. Il est donc important de comprendre les définitions, pondérations et limites du score utilisé.",
                    ],
                    [
                        'question' => "Une entreprise améliore fortement son reporting ESG, mais ses pratiques opérationnelles restent inchangées. Quel point l'analyste doit-il examiner ?",
                        'choices' => [
                            ['choice_text' => "La différence entre la qualité de la communication et les changements réels dans les pratiques", 'is_correct' => true],
                            ['choice_text' => "Le fait que tout reporting supplémentaire crée automatiquement de la valeur", 'is_correct' => false],
                            ['choice_text' => "La suppression des états financiers", 'is_correct' => false],
                            ['choice_text' => "L'impossibilité de vérifier les indicateurs", 'is_correct' => false],
                        ],
                        'explanation' => "Une meilleure divulgation peut améliorer la transparence, mais elle ne prouve pas à elle seule une amélioration opérationnelle. L'analyste doit rapprocher les déclarations des données et des actions observables.",
                    ],
                    [
                        'question' => "Quel exemple illustre une information ESG susceptible de modifier une hypothèse de coûts ?",
                        'choices' => [
                            ['choice_text' => "Un prix du carbone plus élevé qui augmente les dépenses d'une usine", 'is_correct' => true],
                            ['choice_text' => "La couleur du site web de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Le nombre de pages d'un rapport", 'is_correct' => false],
                            ['choice_text' => "Le prénom du directeur financier", 'is_correct' => false],
                        ],
                        'explanation' => "Un prix du carbone plus élevé peut augmenter certains coûts d'exploitation ou d'investissement et peut donc être intégré aux hypothèses financières lorsque cela est pertinent.",
                    ],
                    [
                        'question' => "Une entreprise de distribution dépend fortement d'une région exposée au stress hydrique. Pourquoi cette information peut-elle être financièrement pertinente ?",
                        'choices' => [
                            ['choice_text' => "Une contrainte sur l'eau peut perturber les opérations, augmenter les coûts ou limiter la production", 'is_correct' => true],
                            ['choice_text' => "Le stress hydrique détermine toujours le cours de l'action", 'is_correct' => false],
                            ['choice_text' => "La disponibilité de l'eau n'a jamais d'impact économique", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les distributeurs sont obligés d'être des fonds verts", 'is_correct' => false],
                        ],
                        'explanation' => "La disponibilité des ressources peut affecter les opérations, les coûts et les capacités de production. La pertinence exacte dépend toutefois du modèle économique et de l'exposition de l'entreprise.",
                    ],
                    [
                        'question' => "Quelle pratique améliore la qualité d'une analyse ESG ?",
                        'choices' => [
                            ['choice_text' => "Comparer les indicateurs aux activités, aux concurrents pertinents et aux tendances dans le temps", 'is_correct' => true],
                            ['choice_text' => "Utiliser un seul indicateur quel que soit le secteur", 'is_correct' => false],
                            ['choice_text' => "Ignorer toute donnée quantitative", 'is_correct' => false],
                            ['choice_text' => "Supposer qu'un bon score résout toute question de valorisation", 'is_correct' => false],
                        ],
                        'explanation' => "Une analyse robuste met les données en contexte : secteur, période, trajectoire, modèle économique et comparaison pertinente. Cela évite d'interpréter un indicateur isolé comme une vérité complète.",
                    ],
                    [
                        'question' => "Une entreprise présente un taux d'accidents du travail élevé. Pour une entreprise industrielle, quel type de conséquence financière peut-on raisonnablement examiner ?",
                        'choices' => [
                            ['choice_text' => "Des coûts liés aux arrêts, à la productivité, à l'assurance, à la réglementation ou à la réputation", 'is_correct' => true],
                            ['choice_text' => "Une garantie automatique de hausse du dividende", 'is_correct' => false],
                            ['choice_text' => "L'absence de tout impact financier", 'is_correct' => false],
                            ['choice_text' => "Une baisse automatique du taux de change", 'is_correct' => false],
                        ],
                        'explanation' => "La sécurité au travail peut influencer les coûts, les interruptions, les obligations réglementaires et la réputation. L'analyste doit ensuite mesurer la matérialité réelle pour l'entreprise concernée.",
                    ],
                    [
                        'question' => "Dans un contexte ESG, la matérialité financière signifie principalement :",
                        'choices' => [
                            ['choice_text' => "Qu'un enjeu est suffisamment pertinent pour pouvoir influencer la situation ou la performance économique de l'entreprise", 'is_correct' => true],
                            ['choice_text' => "Que tout enjeu environnemental est automatiquement matériel", 'is_correct' => false],
                            ['choice_text' => "Qu'une information doit être positive pour être utile", 'is_correct' => false],
                            ['choice_text' => "Qu'un indicateur doit être identique dans tous les secteurs", 'is_correct' => false],
                        ],
                        'explanation' => "La matérialité financière concerne la capacité d'un sujet à avoir une influence économique significative. Elle varie selon les entreprises, les secteurs et les périodes.",
                    ],
                ],
            ],
            [
                'title' => "Impact investing et mesure des résultats",
                'description' => "Ce quiz aborde l'investissement à impact, l'intentionnalité, l'additionalité, les indicateurs d'impact et la distinction entre impact et simple sélection ESG.",
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Qu'est-ce qui distingue le plus clairement l'impact investing d'une simple sélection ESG ?",
                        'choices' => [
                            ['choice_text' => "L'impact investing vise intentionnellement un résultat social ou environnemental mesurable en plus de l'objectif financier", 'is_correct' => true],
                            ['choice_text' => "L'impact investing n'a jamais d'objectif financier", 'is_correct' => false],
                            ['choice_text' => "L'impact investing investit uniquement dans des obligations d'État", 'is_correct' => false],
                            ['choice_text' => "Une sélection ESG ne prend jamais en compte les risques", 'is_correct' => false],
                        ],
                        'explanation' => "L'impact investing met l'accent sur l'intentionnalité et la mesure de résultats sociaux ou environnementaux, en parallèle d'un objectif financier.",
                    ],
                    [
                        'question' => "Un fonds finance une entreprise qui fournit des systèmes de purification de l'eau dans des zones mal desservies et suit le nombre de foyers nouvellement servis. Quel élément de l'impact est ainsi documenté ?",
                        'choices' => [
                            ['choice_text' => "Un résultat quantifiable lié à l'objectif d'impact", 'is_correct' => true],
                            ['choice_text' => "Uniquement la gouvernance", 'is_correct' => false],
                            ['choice_text' => "Le taux de change", 'is_correct' => false],
                            ['choice_text' => "La duration de l'obligation", 'is_correct' => false],
                        ],
                        'explanation' => "Le nombre de foyers nouvellement servis est un indicateur permettant de mesurer un résultat lié à l'objectif social ou environnemental poursuivi.",
                    ],
                    [
                        'question' => "Pourquoi l'additionalité est-elle importante dans l'analyse d'un investissement à impact ?",
                        'choices' => [
                            ['choice_text' => "Elle cherche à déterminer si le financement contribue réellement à un changement qui n'aurait pas eu lieu, ou pas dans la même mesure, sans cette intervention", 'is_correct' => true],
                            ['choice_text' => "Elle mesure uniquement le coupon d'une obligation", 'is_correct' => false],
                            ['choice_text' => "Elle remplace la mesure des résultats", 'is_correct' => false],
                            ['choice_text' => "Elle signifie que tout investissement est nécessairement supplémentaire", 'is_correct' => false],
                        ],
                        'explanation' => "L'additionalité aide à distinguer un investissement simplement associé à un résultat positif d'une intervention ayant contribué réellement à ce résultat.",
                    ],
                    [
                        'question' => "Un fonds achète une action cotée d'une grande entreprise simplement parce qu'elle a déjà de bonnes pratiques sociales, sans objectif d'influencer ou de financer un changement particulier. Peut-on automatiquement qualifier cet investissement d'impact investing ?",
                        'choices' => [
                            ['choice_text' => "Non, la présence de bonnes pratiques ESG ne suffit pas à démontrer une intention et un impact mesurable", 'is_correct' => true],
                            ['choice_text' => "Oui, toute entreprise bien notée est automatiquement un investissement à impact", 'is_correct' => false],
                            ['choice_text' => "Oui, si l'action est cotée en bourse", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu'un investissement à impact doit toujours être non coté", 'is_correct' => false],
                        ],
                        'explanation' => "Une bonne performance ESG et un investissement à impact ne sont pas synonymes. Il faut notamment une intention d'impact et un cadre de mesure adapté.",
                    ],
                    [
                        'question' => "Quel indicateur serait le plus directement utile pour évaluer un programme d'accès à l'énergie ?",
                        'choices' => [
                            ['choice_text' => "Le nombre de ménages nouvellement raccordés à une énergie fiable", 'is_correct' => true],
                            ['choice_text' => "La couleur du logo du programme", 'is_correct' => false],
                            ['choice_text' => "La durée du nom du fonds", 'is_correct' => false],
                            ['choice_text' => "Le nombre de réunions du conseil sans lien avec le projet", 'is_correct' => false],
                        ],
                        'explanation' => "Un indicateur d'impact doit être lié directement au résultat recherché. Le nombre de ménages nouvellement raccordés constitue ici un indicateur concret de portée du programme.",
                    ],
                    [
                        'question' => "Pourquoi un investisseur à impact doit-il éviter de mesurer uniquement les montants investis ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'un capital important peut être engagé sans produire le résultat social ou environnemental attendu", 'is_correct' => true],
                            ['choice_text' => "Parce que les montants investis ne sont jamais utiles", 'is_correct' => false],
                            ['choice_text' => "Parce que les investissements à impact n'ont aucun budget", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un petit investissement produit toujours plus d'impact", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant investi mesure une ressource mobilisée, pas nécessairement le résultat obtenu. Une évaluation sérieuse examine aussi les outputs et outcomes pertinents.",
                    ],
                    [
                        'question' => "Une entreprise affirme avoir « évité 100 tonnes de CO2 », mais ne précise ni la méthode ni le scénario de référence. Que devrait faire l'investisseur ?",
                        'choices' => [
                            ['choice_text' => "Demander des informations sur la méthodologie, le périmètre et le scénario de référence", 'is_correct' => true],
                            ['choice_text' => "Accepter le chiffre comme une mesure universelle et incontestable", 'is_correct' => false],
                            ['choice_text' => "Ignorer toute donnée climatique", 'is_correct' => false],
                            ['choice_text' => "Transformer immédiatement l'estimation en résultat financier garanti", 'is_correct' => false],
                        ],
                        'explanation' => "Les indicateurs d'impact doivent être interprétés avec leur méthode, leur périmètre et leurs hypothèses. Sans ces informations, il est difficile d'évaluer la robustesse du chiffre annoncé.",
                    ],
                    [
                        'question' => "Quel énoncé décrit le mieux l'intentionnalité en impact investing ?",
                        'choices' => [
                            ['choice_text' => "L'investisseur cherche délibérément à contribuer à un résultat d'impact identifié", 'is_correct' => true],
                            ['choice_text' => "L'investisseur espère qu'un résultat positif apparaisse par hasard", 'is_correct' => false],
                            ['choice_text' => "L'investisseur refuse tout rendement financier", 'is_correct' => false],
                            ['choice_text' => "L'investisseur ne fixe aucun objectif", 'is_correct' => false],
                        ],
                        'explanation' => "L'intentionnalité signifie que l'objectif d'impact est recherché volontairement et intégré dans la logique de l'investissement.",
                    ],
                    [
                        'question' => "Une PME développe des logements à faible consommation d'énergie pour des ménages à revenus modestes. Quel double objectif peut caractériser un investissement à impact ?",
                        'choices' => [
                            ['choice_text' => "Un objectif financier et un objectif social ou environnemental mesurable", 'is_correct' => true],
                            ['choice_text' => "Uniquement un objectif de communication", 'is_correct' => false],
                            ['choice_text' => "Uniquement une réduction fiscale automatique", 'is_correct' => false],
                            ['choice_text' => "Uniquement une augmentation du nombre d'actionnaires", 'is_correct' => false],
                        ],
                        'explanation' => "L'impact investing combine normalement une logique financière avec une intention et des résultats d'impact documentables.",
                    ],
                    [
                        'question' => "Un fonds d'impact finance une clinique qui dessert une zone sous-équipée. Quel élément permet le mieux de suivre l'impact du projet ?",
                        'choices' => [
                            ['choice_text' => "Des indicateurs tels que le nombre de patients supplémentaires servis et l'amélioration mesurée de l'accès aux soins", 'is_correct' => true],
                            ['choice_text' => "Uniquement la valeur boursière du fonds", 'is_correct' => false],
                            ['choice_text' => "Le nombre de pages du rapport annuel", 'is_correct' => false],
                            ['choice_text' => "La couleur du bâtiment de la clinique", 'is_correct' => false],
                        ],
                        'explanation' => "Les indicateurs d'impact doivent mesurer les résultats liés à l'objectif poursuivi. Dans ce cas, l'accès supplémentaire aux soins constitue un résultat directement pertinent.",
                    ],
                ],
            ],
            [
                'title' => "Disclosure, données ESG et greenwashing",
                'description' => "Ce quiz examine la qualité de l'information ESG, la cohérence des communications, la comparaison des indicateurs et l'identification des situations de greenwashing.",
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Le greenwashing désigne principalement :",
                        'choices' => [
                            ['choice_text' => "Une présentation d'une activité, d'un produit ou d'une entreprise comme plus durable qu'elle ne l'est réellement", 'is_correct' => true],
                            ['choice_text' => "Une réduction réelle des émissions industrielles", 'is_correct' => false],
                            ['choice_text' => "Une hausse du rendement d'une obligation verte", 'is_correct' => false],
                            ['choice_text' => "Un audit financier annuel", 'is_correct' => false],
                        ],
                        'explanation' => "Le greenwashing consiste à donner une image environnementale ou durable trompeuse, exagérée ou insuffisamment étayée par les pratiques et les données réelles.",
                    ],
                    [
                        'question' => "Une société communique largement sur 5 % de ses activités « vertes » mais ne mentionne presque pas que 95 % du chiffre d'affaires provient d'activités fortement carbonées. Quel risque de communication apparaît ?",
                        'choices' => [
                            ['choice_text' => "Un risque de présentation partielle susceptible d'induire l'investisseur en erreur", 'is_correct' => true],
                            ['choice_text' => "Une preuve automatique de neutralité carbone", 'is_correct' => false],
                            ['choice_text' => "Un risque de change", 'is_correct' => false],
                            ['choice_text' => "Aucun risque puisque le chiffre de 5 % est exact", 'is_correct' => false],
                        ],
                        'explanation' => "Une donnée peut être exacte tout en donnant une image trompeuse si son contexte essentiel est omis. La transparence exige de présenter les informations pertinentes de manière équilibrée et compréhensible.",
                    ],
                    [
                        'question' => "Pourquoi la comparabilité des indicateurs ESG peut-elle être difficile ?",
                        'choices' => [
                            ['choice_text' => "Les entreprises peuvent utiliser des périmètres, définitions, méthodes de calcul ou estimations différents", 'is_correct' => true],
                            ['choice_text' => "Toutes les entreprises utilisent obligatoirement la même méthodologie", 'is_correct' => false],
                            ['choice_text' => "Les données ESG sont toujours purement qualitatives", 'is_correct' => false],
                            ['choice_text' => "Les indicateurs ESG ne peuvent jamais être mesurés", 'is_correct' => false],
                        ],
                        'explanation' => "Les différences de périmètre, de méthodes et de qualité des données peuvent limiter la comparabilité. L'analyste doit donc comprendre comment les chiffres ont été produits.",
                    ],
                    [
                        'question' => "Une entreprise affiche l'expression « 100 % durable » sans définir le périmètre concerné. Quelle réaction est la plus appropriée ?",
                        'choices' => [
                            ['choice_text' => "Demander la définition, le périmètre et les éléments permettant d'étayer cette affirmation", 'is_correct' => true],
                            ['choice_text' => "Supposer automatiquement que toute l'entreprise est durable", 'is_correct' => false],
                            ['choice_text' => "Ignorer la question car les mots marketing sont toujours précis", 'is_correct' => false],
                            ['choice_text' => "Conclure que l'entreprise n'a aucun risque", 'is_correct' => false],
                        ],
                        'explanation' => "Une affirmation générale doit être replacée dans son périmètre, sa méthode et ses preuves. Une formule absolue peut être trompeuse si elle ne précise pas ce qu'elle recouvre.",
                    ],
                    [
                        'question' => "Un rapport ESG indique une baisse de 20 % des émissions mais précise qu'une partie de la variation provient d'un changement de périmètre. Que faut-il comprendre ?",
                        'choices' => [
                            ['choice_text' => "La baisse annoncée doit être interprétée en tenant compte de la modification du périmètre", 'is_correct' => true],
                            ['choice_text' => "Le chiffre de 20 % doit être considéré comme une baisse opérationnelle pure", 'is_correct' => false],
                            ['choice_text' => "Le changement de périmètre prouve automatiquement un progrès", 'is_correct' => false],
                            ['choice_text' => "Les émissions ne peuvent plus être comparées dans aucun cas", 'is_correct' => false],
                        ],
                        'explanation' => "Les changements de périmètre, acquisitions, cessions ou méthodes de calcul peuvent affecter les comparaisons dans le temps. Il faut donc distinguer la performance réelle des effets de périmètre.",
                    ],
                    [
                        'question' => "Pourquoi un investisseur peut-il examiner les données ESG sur plusieurs années ?",
                        'choices' => [
                            ['choice_text' => "Pour identifier une tendance et distinguer une amélioration durable d'un changement ponctuel", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une seule année ne peut jamais être analysée", 'is_correct' => false],
                            ['choice_text' => "Parce que les données historiques garantissent le futur", 'is_correct' => false],
                            ['choice_text' => "Parce que les données financières deviennent inutiles", 'is_correct' => false],
                        ],
                        'explanation' => "Une série temporelle permet de voir la trajectoire d'un indicateur, ses fluctuations et parfois la durabilité d'une amélioration. Elle ne garantit toutefois pas les résultats futurs.",
                    ],
                    [
                        'question' => "Une entreprise annonce un objectif de réduction des émissions à 2035. Quel élément est particulièrement utile pour juger la crédibilité du plan ?",
                        'choices' => [
                            ['choice_text' => "Des objectifs intermédiaires, des investissements prévus et des indicateurs de suivi", 'is_correct' => true],
                            ['choice_text' => "La longueur du communiqué de presse", 'is_correct' => false],
                            ['choice_text' => "Le nombre de couleurs utilisées dans le rapport", 'is_correct' => false],
                            ['choice_text' => "L'absence de toute donnée intermédiaire", 'is_correct' => false],
                        ],
                        'explanation' => "Un objectif lointain est plus informatif lorsqu'il est accompagné de jalons intermédiaires, de ressources, d'actions concrètes et d'indicateurs de suivi.",
                    ],
                    [
                        'question' => "Quel exemple constitue le plus clairement un signal d'alerte de greenwashing ?",
                        'choices' => [
                            ['choice_text' => "Une campagne très visible sur quelques projets verts alors que l'entreprise ne fournit presque aucune information sur l'ensemble de ses impacts", 'is_correct' => true],
                            ['choice_text' => "Un rapport qui présente des données détaillées avec leurs limites", 'is_correct' => false],
                            ['choice_text' => "La publication d'une méthode de calcul transparente", 'is_correct' => false],
                            ['choice_text' => "La présentation de résultats positifs et négatifs dans le même rapport", 'is_correct' => false],
                        ],
                        'explanation' => "La mise en avant sélective d'éléments positifs sans fournir le contexte ou les données pertinentes sur l'ensemble des activités peut constituer un signal de greenwashing.",
                    ],
                    [
                        'question' => "Quel comportement réduit le risque de greenwashing dans la communication d'un fonds durable ?",
                        'choices' => [
                            ['choice_text' => "Décrire clairement la méthodologie, les critères, les limites et les principaux risques du fonds", 'is_correct' => true],
                            ['choice_text' => "Utiliser uniquement des termes comme « vert » ou « responsable » sans définition", 'is_correct' => false],
                            ['choice_text' => "Cacher les secteurs exclus et conservés", 'is_correct' => false],
                            ['choice_text' => "Promettre une performance supérieure garantie", 'is_correct' => false],
                        ],
                        'explanation' => "Une communication précise permet à l'investisseur de comprendre ce que le produit cherche à faire, comment il sélectionne les actifs et quelles sont ses limites.",
                    ],
                    [
                        'question' => "Un analyste découvre qu'une entreprise utilise une estimation pour une donnée ESG faute de mesure directe. Quelle approche est la plus raisonnable ?",
                        'choices' => [
                            ['choice_text' => "Examiner la méthode, la qualité de l'estimation et son influence possible sur l'analyse", 'is_correct' => true],
                            ['choice_text' => "Rejeter automatiquement toute donnée estimée", 'is_correct' => false],
                            ['choice_text' => "Considérer toute estimation comme un fait exact", 'is_correct' => false],
                            ['choice_text' => "Ignorer toute incertitude dans les données", 'is_correct' => false],
                        ],
                        'explanation' => "Certaines données ESG reposent sur des estimations. Il faut alors apprécier la méthode, l'incertitude et la matérialité de cette donnée plutôt que de la considérer automatiquement comme fausse ou parfaite.",
                    ],
                    [
                        'question' => "Quelle information permet le mieux de vérifier qu'un fonds suit réellement sa stratégie ESG annoncée ?",
                        'choices' => [
                            ['choice_text' => "La composition du portefeuille, les critères d'investissement et le reporting permettant de relier la stratégie aux actifs détenus", 'is_correct' => true],
                            ['choice_text' => "Le slogan publicitaire du fonds", 'is_correct' => false],
                            ['choice_text' => "La couleur du logo", 'is_correct' => false],
                            ['choice_text' => "Le nombre de pages de son site web", 'is_correct' => false],
                        ],
                        'explanation' => "La vérification repose sur des éléments concrets : méthode, composition, indicateurs, engagements et reporting. Un slogan ne permet pas de confirmer la stratégie appliquée.",
                    ],
                    [
                        'question' => "Un fonds annonce qu'il sélectionne les entreprises ayant une trajectoire climatique crédible. Quel élément renforce le plus la crédibilité de cette affirmation ?",
                        'choices' => [
                            ['choice_text' => "Des critères définis, des données vérifiables et un suivi de l'évolution des entreprises détenues", 'is_correct' => true],
                            ['choice_text' => "L'utilisation fréquente du mot « durable » dans ses publicités", 'is_correct' => false],
                            ['choice_text' => "L'absence de toute information sur les critères", 'is_correct' => false],
                            ['choice_text' => "Une promesse de rendement supérieur garanti", 'is_correct' => false],
                        ],
                        'explanation' => "Une stratégie annoncée est plus crédible lorsqu'elle repose sur une méthodologie explicite, des critères observables et un dispositif de suivi permettant de vérifier la mise en œuvre.",
                    ],
                ],
            ],
            [
                'title' => "Décisions de financement durable : mini-cas",
                'description' => "Des mini-cas simples pour appliquer les notions ESG, de climat, d'impact, de green bonds et de transition finance à des décisions financières concrètes.",
                'duration' => 29,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Une banque étudie un prêt à une entreprise dont les coûts énergétiques représentent une part importante des charges. L'entreprise prévoit de réduire sa consommation de 30 %. Quelle information serait particulièrement utile ?",
                        'choices' => [
                            ['choice_text' => "Le coût du programme, les économies attendues et la capacité du projet à réduire les charges futures", 'is_correct' => true],
                            ['choice_text' => "Uniquement le slogan ESG de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "La couleur des machines", 'is_correct' => false],
                            ['choice_text' => "Le nombre de publications sur les réseaux sociaux", 'is_correct' => false],
                        ],
                        'explanation' => "Pour relier l'ESG à la décision financière, la banque doit examiner les investissements nécessaires, les économies attendues et l'effet possible sur les flux de trésorerie et le risque de crédit.",
                    ],
                    [
                        'question' => "Un fonds doit choisir entre deux entreprises du même secteur. A présente de meilleurs indicateurs ESG mais est valorisée beaucoup plus cher que B. Quelle approche est la plus cohérente avec l'intégration ESG ?",
                        'choices' => [
                            ['choice_text' => "Analyser à la fois les différences ESG et la valorisation, plutôt que de choisir automatiquement A", 'is_correct' => true],
                            ['choice_text' => "Acheter automatiquement A parce que son score ESG est supérieur", 'is_correct' => false],
                            ['choice_text' => "Ignorer complètement la valorisation", 'is_correct' => false],
                            ['choice_text' => "Vendre les deux entreprises sans analyse", 'is_correct' => false],
                        ],
                        'explanation' => "L'intégration ESG ne remplace pas l'analyse financière. L'investisseur peut examiner le profil ESG tout en tenant compte du prix payé et du rendement attendu.",
                    ],
                    [
                        'question' => "Une ville souhaite financer des bus électriques et envisage une green bond. Quelle question doit-elle clarifier avant l'émission ?",
                        'choices' => [
                            ['choice_text' => "Quels projets seront éligibles, comment les fonds seront suivis et comment les résultats seront reportés", 'is_correct' => true],
                            ['choice_text' => "Quelle couleur aura le certificat de l'obligation", 'is_correct' => false],
                            ['choice_text' => "Comment garantir que le marché secondaire montera", 'is_correct' => false],
                            ['choice_text' => "Comment supprimer tout risque de taux", 'is_correct' => false],
                        ],
                        'explanation' => "La crédibilité d'une green bond repose notamment sur un cadre clair d'éligibilité, un processus d'allocation des fonds et un reporting approprié.",
                    ],
                    [
                        'question' => "Une entreprise pétrolière prévoit de réduire progressivement ses émissions, mais ses objectifs sont vagues et non accompagnés d'investissements chiffrés. Quel point devrait préoccuper un financeur ?",
                        'choices' => [
                            ['choice_text' => "La crédibilité et la faisabilité de la trajectoire de transition", 'is_correct' => true],
                            ['choice_text' => "Le fait que toute transition soit impossible", 'is_correct' => false],
                            ['choice_text' => "L'absence de risque de réputation", 'is_correct' => false],
                            ['choice_text' => "Le fait que les émissions ne puissent jamais être mesurées", 'is_correct' => false],
                        ],
                        'explanation' => "Un plan de transition crédible doit généralement être suffisamment précis pour permettre d'évaluer les actions, les ressources, les jalons et les progrès.",
                    ],
                    [
                        'question' => "Un investisseur à impact finance une entreprise sociale et souhaite savoir si son capital a réellement contribué à l'accès à l'eau. Que doit-il rechercher ?",
                        'choices' => [
                            ['choice_text' => "Des indicateurs d'impact et une logique permettant de relier le financement aux résultats observés", 'is_correct' => true],
                            ['choice_text' => "Uniquement le chiffre d'affaires de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Le nombre de réunions du conseil", 'is_correct' => false],
                            ['choice_text' => "Le cours de change de la monnaie locale", 'is_correct' => false],
                        ],
                        'explanation' => "L'analyse d'impact demande des indicateurs de résultats et, lorsque c'est possible, une analyse de la contribution du financement au changement observé.",
                    ],
                    [
                        'question' => "Une société annonce qu'un produit est « bon pour le climat » parce qu'il est recyclable, mais ne précise pas les émissions liées à sa fabrication et à son usage. Que doit faire l'analyste ?",
                        'choices' => [
                            ['choice_text' => "Demander le périmètre de l'affirmation et examiner l'ensemble des informations pertinentes disponibles", 'is_correct' => true],
                            ['choice_text' => "Conclure que le produit est automatiquement neutre en carbone", 'is_correct' => false],
                            ['choice_text' => "Supposer que le recyclage annule toute autre émission", 'is_correct' => false],
                            ['choice_text' => "Ignorer toute donnée environnementale", 'is_correct' => false],
                        ],
                        'explanation' => "Un attribut positif comme la recyclabilité ne suffit pas à caractériser l'ensemble de l'impact climatique. Il faut examiner le périmètre et les autres étapes pertinentes du cycle de vie lorsque les données sont disponibles.",
                    ],
                    [
                        'question' => "Une entreprise agricole est très exposée aux sécheresses mais investit dans l'irrigation et diversifie ses cultures. Comment qualifier ces actions ?",
                        'choices' => [
                            ['choice_text' => "Elles peuvent réduire son exposition à certains risques physiques grâce à l'adaptation", 'is_correct' => true],
                            ['choice_text' => "Elles constituent uniquement des actions de gouvernance", 'is_correct' => false],
                            ['choice_text' => "Elles garantissent l'absence future de pertes", 'is_correct' => false],
                            ['choice_text' => "Elles sont nécessairement des green bonds", 'is_correct' => false],
                        ],
                        'explanation' => "La diversification et les investissements d'adaptation peuvent réduire la vulnérabilité à certains risques physiques, sans supprimer totalement l'incertitude.",
                    ],
                    [
                        'question' => "Un investisseur doit décider entre une obligation verte et une obligation classique du même émetteur avec des caractéristiques financières proches. Quel élément supplémentaire est pertinent pour la green bond ?",
                        'choices' => [
                            ['choice_text' => "La crédibilité de l'utilisation des fonds et du reporting environnemental", 'is_correct' => true],
                            ['choice_text' => "Le fait qu'elle soit toujours plus rentable", 'is_correct' => false],
                            ['choice_text' => "La garantie automatique d'une hausse du cours", 'is_correct' => false],
                            ['choice_text' => "L'absence de risque de défaut", 'is_correct' => false],
                        ],
                        'explanation' => "À caractéristiques financières proches, l'investisseur peut comparer la qualité du cadre environnemental, l'utilisation des fonds et le reporting de la green bond, tout en conservant l'analyse du risque de crédit.",
                    ],
                    [
                        'question' => "Une entreprise a un excellent score ESG global, mais présente une controverse majeure sur un enjeu environnemental qui représente une part importante de son activité. Quelle pratique est la plus prudente ?",
                        'choices' => [
                            ['choice_text' => "Analyser le détail des sous-facteurs et la matérialité de la controverse plutôt que de se limiter au score global", 'is_correct' => true],
                            ['choice_text' => "Ignorer la controverse car le score global est élevé", 'is_correct' => false],
                            ['choice_text' => "Considérer automatiquement l'entreprise comme irresponsable", 'is_correct' => false],
                            ['choice_text' => "Supposer que tous les fournisseurs ESG mesurent la controverse de la même manière", 'is_correct' => false],
                        ],
                        'explanation' => "Un score agrégé peut masquer des différences entre facteurs ou méthodologies. Une analyse financière sérieuse examine les éléments matériels et les limites de la note globale.",
                    ],
                    [
                        'question' => "Une entreprise annonce une baisse de 15 % de ses émissions, mais cette baisse provient en partie de la vente d'une usine très émettrice. Comment interpréter correctement cette information ?",
                        'choices' => [
                            ['choice_text' => "Distinguer l'effet de la cession de l'amélioration réelle des émissions des activités conservées", 'is_correct' => true],
                            ['choice_text' => "Conclure que toutes les usines restantes sont devenues 15 % moins émettrices", 'is_correct' => false],
                            ['choice_text' => "Considérer automatiquement la cession comme une réduction opérationnelle", 'is_correct' => false],
                            ['choice_text' => "Ignorer complètement les données historiques", 'is_correct' => false],
                        ],
                        'explanation' => "Une cession peut réduire les émissions du périmètre publié sans améliorer l'intensité opérationnelle des activités restantes. L'analyste doit donc examiner l'effet de périmètre séparément.",
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
