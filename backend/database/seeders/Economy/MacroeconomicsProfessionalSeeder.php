```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MacroeconomicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'macroeconomics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité macroéconomique et mesure de l’activité',
                'questions' => [
                    [
                        'question' => 'Pourquoi la distinction entre PIB nominal et PIB réel est-elle fondamentale pour l’analyse macroéconomique ?',
                        'answers' => [
                            ['answer' => 'Elle permet de distinguer une variation de la production réelle d’une variation des prix', 'iscorrect' => true],
                            ['answer' => 'Elle élimine toutes les erreurs statistiques', 'iscorrect' => false],
                            ['answer' => 'Elle mesure directement le bien-être individuel', 'iscorrect' => false],
                            ['answer' => 'Elle exclut automatiquement les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur ajoutée est-elle essentielle dans le calcul du PIB ?',
                        'answers' => [
                            ['answer' => 'Elle évite le double comptage des biens intermédiaires en mesurant la contribution nette de chaque étape productive', 'iscorrect' => true],
                            ['answer' => 'Elle mesure uniquement les profits des entreprises', 'iscorrect' => false],
                            ['answer' => 'Elle exclut les salaires', 'iscorrect' => false],
                            ['answer' => 'Elle correspond uniquement aux exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du PIB nominal peut-elle ne pas refléter une hausse équivalente de la production réelle ?',
                        'answers' => [
                            ['answer' => 'Une partie de la hausse peut provenir de l’augmentation du niveau général des prix', 'iscorrect' => true],
                            ['answer' => 'Le PIB nominal exclut toujours les variations de prix', 'iscorrect' => false],
                            ['answer' => 'La production réelle augmente toujours davantage que le PIB nominal', 'iscorrect' => false],
                            ['answer' => 'Les prix n’ont aucun rôle dans le PIB nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le PIB par habitant doit-il être interprété avec prudence ?',
                        'answers' => [
                            ['answer' => 'Il ne décrit ni parfaitement la distribution des revenus ni toutes les dimensions du bien-être', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement l’inflation', 'iscorrect' => false],
                            ['answer' => 'Il exclut toujours les services', 'iscorrect' => false],
                            ['answer' => 'Il est toujours identique au revenu médian', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les révisions du PIB peuvent-elles modifier l’analyse d’une période historique ?',
                        'answers' => [
                            ['answer' => 'De nouvelles données et méthodes peuvent conduire à modifier les estimations antérieures', 'iscorrect' => true],
                            ['answer' => 'Le PIB est mesuré sans aucune incertitude', 'iscorrect' => false],
                            ['answer' => 'Les données économiques ne sont jamais révisées', 'iscorrect' => false],
                            ['answer' => 'Les révisions concernent uniquement les taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les activités non marchandes sont-elles difficiles à valoriser dans les comptes nationaux ?',
                        'answers' => [
                            ['answer' => 'Elles ne disposent pas toujours d’un prix de marché observable permettant d’en mesurer directement la valeur', 'iscorrect' => true],
                            ['answer' => 'Elles n’ont jamais aucune utilité économique', 'iscorrect' => false],
                            ['answer' => 'Elles sont toujours interdites', 'iscorrect' => false],
                            ['answer' => 'Elles sont toujours exportées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre PIB et revenu national brut ?',
                        'answers' => [
                            ['answer' => 'Le PIB repose sur la production située sur le territoire tandis que le revenu national brut tient compte des revenus primaires avec le reste du monde', 'iscorrect' => true],
                            ['answer' => 'Le PIB mesure uniquement les revenus des ménages', 'iscorrect' => false],
                            ['answer' => 'Le revenu national brut exclut toute activité extérieure', 'iscorrect' => false],
                            ['answer' => 'Les deux indicateurs sont nécessairement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variations de stocks sont-elles intégrées à l’investissement ?',
                        'answers' => [
                            ['answer' => 'Une production non vendue reste une ressource produite et accumulée sous forme de stocks', 'iscorrect' => true],
                            ['answer' => 'Les stocks représentent uniquement des importations', 'iscorrect' => false],
                            ['answer' => 'Les stocks ne correspondent à aucune production', 'iscorrect' => false],
                            ['answer' => 'Les stocks sont toujours consommés immédiatement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le PIB ne doit-il pas être interprété comme une mesure parfaite du progrès social ?',
                        'answers' => [
                            ['answer' => 'Il ne capture pas entièrement les inégalités, l’environnement, le loisir et certains aspects qualitatifs de la vie', 'iscorrect' => true],
                            ['answer' => 'Il ne mesure aucune activité économique', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement les transferts sociaux', 'iscorrect' => false],
                            ['answer' => 'Il inclut parfaitement tous les services non marchands', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le déflateur du PIB peut-il différer d’un indice des prix à la consommation ?',
                        'answers' => [
                            ['answer' => 'Leurs paniers et leurs périmètres économiques ne sont pas identiques', 'iscorrect' => true],
                            ['answer' => 'Les deux indicateurs utilisent nécessairement exactement les mêmes biens', 'iscorrect' => false],
                            ['answer' => 'Le déflateur mesure uniquement les importations', 'iscorrect' => false],
                            ['answer' => 'L’indice des prix à la consommation ne mesure aucun prix', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modèle keynésien, multiplicateur et demande globale',
                'questions' => [
                    [
                        'question' => 'Dans le modèle keynésien simple, pourquoi une dépense autonome peut-elle produire un effet amplifié sur le revenu ?',
                        'answers' => [
                            ['answer' => 'La dépense initiale crée des revenus supplémentaires dont une partie est redépensée', 'iscorrect' => true],
                            ['answer' => 'Les ménages épargnent toujours la totalité du revenu supplémentaire', 'iscorrect' => false],
                            ['answer' => 'Les importations augmentent toujours le revenu intérieur', 'iscorrect' => false],
                            ['answer' => 'L’investissement ne génère jamais de revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une propension marginale à consommer plus élevée augmente-t-elle généralement le multiplicateur ?',
                        'answers' => [
                            ['answer' => 'Une plus grande part du revenu supplémentaire est transformée en nouvelle dépense', 'iscorrect' => true],
                            ['answer' => 'Elle réduit automatiquement la consommation', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours les importations sans autre effet', 'iscorrect' => false],
                            ['answer' => 'Elle rend l’investissement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ouverture commerciale réduit-elle généralement le multiplicateur domestique ?',
                        'answers' => [
                            ['answer' => 'Une partie de la dépense supplémentaire se dirige vers la production étrangère', 'iscorrect' => true],
                            ['answer' => 'Les exportations deviennent toujours nulles', 'iscorrect' => false],
                            ['answer' => 'La consommation devient indépendante du revenu', 'iscorrect' => false],
                            ['answer' => 'L’épargne disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les impôts réduisent-ils la puissance du multiplicateur ?',
                        'answers' => [
                            ['answer' => 'Ils réduisent le revenu disponible et donc la part du revenu supplémentaire consacrée à la consommation', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent toujours la consommation', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent nécessairement les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent automatiquement l’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la confiance des ménages est-elle une variable macroéconomique importante ?',
                        'answers' => [
                            ['answer' => 'Une variation de confiance peut modifier la consommation et amplifier ou ralentir les fluctuations de la demande', 'iscorrect' => true],
                            ['answer' => 'La confiance détermine directement les taux de change', 'iscorrect' => false],
                            ['answer' => 'Elle ne concerne que les entreprises', 'iscorrect' => false],
                            ['answer' => 'Elle n’affecte jamais les décisions économiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’investissement est-il particulièrement sensible aux anticipations ?',
                        'answers' => [
                            ['answer' => 'Les projets d’investissement dépendent de la demande future attendue, des coûts de financement et de la rentabilité anticipée', 'iscorrect' => true],
                            ['answer' => 'L’investissement est décidé uniquement par le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ignorent toujours les conditions financières', 'iscorrect' => false],
                            ['answer' => 'La rentabilité future n’a aucune importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de l’épargne peut-elle provoquer un ralentissement à court terme ?',
                        'answers' => [
                            ['answer' => Si elle réduit la consommation sans être compensée par une hausse de l’investissement, la demande globale peut diminuer', 'iscorrect' => true],
                            ['answer' => L’épargne augmente toujours directement la consommation', 'iscorrect' => false],
                            ['answer' => L’épargne réduit toujours la capacité productive', 'iscorrect' => false],
                            ['answer' => L’épargne augmente automatiquement les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme décrit le paradoxe de l’épargne ?',
                        'answers' => [
                            ['answer' => 'Une hausse collective de la volonté d’épargner peut réduire le revenu global et limiter l’augmentation effective de l’épargne', 'iscorrect' => true],
                            ['answer' => 'Toute hausse de l’épargne augmente toujours le PIB', 'iscorrect' => false],
                            ['answer' => 'L’épargne n’est jamais liée au revenu', 'iscorrect' => false],
                            ['answer' => 'Le paradoxe existe uniquement dans les économies exportatrices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire expansionniste peut-elle avoir un multiplicateur plus faible qu’attendu ?',
                        'answers' => [
                            ['answer' => 'Les ménages peuvent épargner davantage, les importations augmenter, les prix réagir ou les taux d’intérêt se modifier', 'iscorrect' => true],
                            ['answer' => 'Les dépenses publiques sont toujours intégralement consommées', 'iscorrect' => false],
                            ['answer' => 'Les importations sont toujours nulles', 'iscorrect' => false],
                            ['answer' => 'Les prix restent nécessairement fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur est-il un concept dépendant du modèle ?',
                        'answers' => [
                            ['answer' => 'Sa taille varie selon les hypothèses sur les impôts, les importations, les taux d’intérêt, les prix et les comportements', 'iscorrect' => true],
                            ['answer' => 'Il possède toujours exactement la même valeur', 'iscorrect' => false],
                            ['answer' => 'Il ne dépend jamais de la consommation', 'iscorrect' => false],
                            ['answer' => 'Il est identique dans toutes les économies', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Croissance économique et théorie de la productivité',
                'questions' => [
                    [
                        'question' => 'Pourquoi les rendements décroissants du capital limitent-ils l’accumulation comme moteur unique de croissance ?',
                        'answers' => [
                            ['answer' => 'Les gains de production supplémentaires provenant d’unités additionnelles de capital tendent à diminuer lorsque les autres facteurs restent constants', 'iscorrect' => true],
                            ['answer' => 'Le capital n’augmente jamais la production', 'iscorrect' => false],
                            ['answer' => 'Le capital devient automatiquement gratuit', 'iscorrect' => false],
                            ['answer' => 'Les rendements restent constants quelle que soit la quantité de capital', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le progrès technologique peut-il soutenir la croissance malgré les rendements décroissants du capital ?',
                        'answers' => [
                            ['answer' => 'Il peut améliorer l’efficacité globale des facteurs et déplacer la capacité productive', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Il rend les ressources totalement illimitées', 'iscorrect' => false],
                            ['answer' => 'Il supprime le besoin de compétences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’accumulation de capital humain peut-elle produire des externalités positives ?',
                        'answers' => [
                            ['answer' => 'Les compétences d’une personne peuvent améliorer la productivité ou les possibilités d’autres personnes', 'iscorrect' => true],
                            ['answer' => 'Le capital humain ne bénéficie qu’à son détenteur', 'iscorrect' => false],
                            ['answer' => 'L’éducation réduit toujours la productivité collective', 'iscorrect' => false],
                            ['answer' => 'Les externalités concernent uniquement l’environnement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des institutions influence-t-elle la croissance à long terme ?',
                        'answers' => [
                            ['answer' => 'Elle influence la sécurité des droits, les incitations à investir et les coûts de transaction', 'iscorrect' => true],
                            ['answer' => 'Elle détermine uniquement le niveau de l’inflation', 'iscorrect' => false],
                            ['answer' => 'Elle remplace les facteurs de production', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours une croissance identique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance tirée uniquement par l’augmentation des facteurs peut-elle être difficile à maintenir ?',
                        'answers' => [
                            ['answer' => 'Les facteurs peuvent être soumis à des rendements décroissants et à des contraintes quantitatives', 'iscorrect' => true],
                            ['answer' => 'Les facteurs sont toujours illimités', 'iscorrect' => false],
                            ['answer' => 'La productivité ne joue aucun rôle', 'iscorrect' => false],
                            ['answer' => 'La technologie ralentit toujours lorsque les facteurs augmentent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la productivité multifactorielle est-elle importante dans l’analyse de la croissance ?',
                        'answers' => [
                            ['answer' => 'Elle contribue à expliquer la croissance qui ne provient pas simplement de l’augmentation mesurée des quantités de facteurs', 'iscorrect' => true],
                            ['answer' => 'Elle mesure uniquement le nombre de travailleurs', 'iscorrect' => false],
                            ['answer' => 'Elle correspond uniquement à l’investissement public', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement la croissance des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les infrastructures numériques peuvent-elles augmenter la productivité ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent réduire les coûts de communication, accélérer la circulation de l’information et faciliter la coordination', 'iscorrect' => true],
                            ['answer' => 'Elles rendent toutes les entreprises monopolistiques', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent nécessairement le capital humain', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent la diffusion technologique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la santé publique peut-elle être considérée comme un facteur de croissance ?',
                        'answers' => [
                            ['answer' => 'Une meilleure santé peut accroître la capacité de travailler, d’apprendre et d’investir dans le capital humain', 'iscorrect' => true],
                            ['answer' => 'La santé n’affecte jamais la productivité', 'iscorrect' => false],
                            ['answer' => 'Elle diminue toujours la participation au travail', 'iscorrect' => false],
                            ['answer' => 'Elle remplace entièrement l’éducation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’innovation endogène peut-elle soutenir durablement la croissance ?',
                        'answers' => [
                            ['answer' => 'Les investissements en connaissances, recherche et innovation peuvent créer de nouvelles possibilités productives', 'iscorrect' => true],
                            ['answer' => 'L’innovation réduit toujours la capacité productive', 'iscorrect' => false],
                            ['answer' => 'Les connaissances se déprécient toujours immédiatement', 'iscorrect' => false],
                            ['answer' => 'Les entreprises n’ont aucune incitation à innover', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le niveau de développement initial peut-il influencer les possibilités de croissance futures ?',
                        'answers' => [
                            ['answer' => Les capacités institutionnelles, le capital humain, les infrastructures et les technologies disponibles influencent les trajectoires de croissance', 'iscorrect' => true],
                            ['answer' => 'Tous les pays disposent nécessairement des mêmes conditions initiales', 'iscorrect' => false],
                            ['answer' => 'Le développement initial n’a aucun effet', 'iscorrect' => false],
                            ['answer' => 'La technologie est identique partout', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché du travail, salaires et chômage',
                'questions' => [
                    [
                        'question' => 'Pourquoi une hausse de la productivité du travail peut-elle augmenter les salaires réels à long terme ?',
                        'answers' => [
                            ['answer' => 'Elle augmente la valeur produite par unité de travail et donc la capacité de rémunération du travail', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours la demande de travail', 'iscorrect' => false],
                            ['answer' => 'Elle rend les salaires indépendants de la production', 'iscorrect' => false],
                            ['answer' => 'Elle supprime le coût du travail', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de la demande globale peut-elle augmenter l’emploi à court terme ?',
                        'answers' => [
                            ['answer' => 'Lorsque les capacités ne sont pas pleinement utilisées, les entreprises peuvent augmenter la production et les embauches', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours la production', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ignorent toujours la demande', 'iscorrect' => false],
                            ['answer' => 'Le chômage devient automatiquement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de chômage peut-il être trompeur s’il est analysé seul ?',
                        'answers' => [
                            ['answer' => 'Il ne renseigne pas à lui seul sur le taux de participation, le sous-emploi ou la durée du chômage', 'iscorrect' => true],
                            ['answer' => 'Il mesure parfaitement toutes les caractéristiques du marché du travail', 'iscorrect' => false],
                            ['answer' => 'Il mesure directement la productivité', 'iscorrect' => false],
                            ['answer' => 'Il est indépendant de la population active', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un salaire d’efficience ?',
                        'answers' => [
                            ['answer' => 'Un salaire supérieur au niveau qui équilibrerait nécessairement l’offre et la demande, pouvant augmenter l’effort, la fidélité ou la sélection des travailleurs', 'iscorrect' => true],
                            ['answer' => 'Un salaire fixé par la banque centrale', 'iscorrect' => false],
                            ['answer' => 'Un salaire toujours inférieur au salaire de marché', 'iscorrect' => false],
                            ['answer' => 'Un salaire obligatoire pour tous les secteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le salaire minimum peut-il produire des effets différents selon le marché du travail ?',
                        'answers' => [
                            ['answer' => 'Les effets dépendent notamment du niveau du salaire minimum, du pouvoir de marché des employeurs et des élasticités', 'iscorrect' => true],
                            ['answer' => 'Tous les marchés du travail sont identiques', 'iscorrect' => false],
                            ['answer' => 'Le salaire minimum n’influence jamais l’emploi', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs n’ont aucune préférence professionnelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la mobilité géographique peut-elle réduire certaines formes de chômage structurel ?',
                        'answers' => [
                            ['answer' => 'Elle permet aux travailleurs de se rapprocher des régions où les emplois correspondant à leurs compétences sont disponibles', 'iscorrect' => true],
                            ['answer' => 'Elle supprime la demande de travail', 'iscorrect' => false],
                            ['answer' => 'Elle rend les emplois identiques partout', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours les salaires réels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les inadéquations de compétences peuvent-elles coexister avec des offres d’emploi non pourvues ?',
                        'answers' => [
                            ['answer' => 'Les compétences des personnes sans emploi peuvent différer de celles recherchées par les entreprises', 'iscorrect' => true],
                            ['answer' => 'Toutes les compétences sont parfaitement substituables', 'iscorrect' => false],
                            ['answer' => 'Les postes vacants signifient nécessairement une absence de chômage', 'iscorrect' => false],
                            ['answer' => 'Les entreprises refusent toujours toute candidature', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une récession prolongée peut-elle avoir des effets persistants sur le marché du travail ?',
                        'answers' => [
                            ['answer' => 'Une durée prolongée du chômage peut entraîner une dépréciation des compétences et un éloignement du marché du travail', 'iscorrect' => true],
                            ['answer' => 'Les compétences augmentent toujours sans emploi', 'iscorrect' => false],
                            ['answer' => 'Les employeurs recrutent automatiquement tous les chômeurs', 'iscorrect' => false],
                            ['answer' => 'Une récession augmente toujours l’expérience professionnelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques d’emploi doivent-elles distinguer chômage cyclique et structurel ?',
                        'answers' => [
                            ['answer' => 'Les instruments adaptés ne sont pas les mêmes : soutien à la demande pour le cyclique, réformes du marché du travail et des compétences pour le structurel', 'iscorrect' => true],
                            ['answer' => 'Les deux types de chômage ont exactement les mêmes causes', 'iscorrect' => false],
                            ['answer' => 'Le chômage structurel disparaît toujours avec la croissance', 'iscorrect' => false],
                            ['answer' => 'Le chômage cyclique ne dépend jamais de l’activité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la négociation salariale peut-elle contribuer à la dynamique de l’inflation ?',
                        'answers' => [
                            ['answer' => Des hausses de salaires intégrant une forte inflation anticipée peuvent influencer les coûts et les prix futurs', 'iscorrect' => true],
                            ['answer' => 'Les salaires n’influencent jamais les coûts', 'iscorrect' => false],
                            ['answer' => 'L’inflation réduit toujours les salaires nominaux', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ignorent toujours leurs coûts salariaux', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique monétaire, taux d’intérêt et transmission',
                'questions' => [
                    [
                        'question' => 'Pourquoi une banque centrale augmente-t-elle généralement son taux directeur lorsque les pressions inflationnistes deviennent trop fortes ?',
                        'answers' => [
                            ['answer' => 'Pour resserrer les conditions financières et réduire progressivement certaines composantes de la demande', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter automatiquement la consommation', 'iscorrect' => false],
                            ['answer' => 'Pour réduire immédiatement les impôts', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter directement les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux peut-elle ralentir le marché immobilier ?',
                        'answers' => [
                            ['answer' => 'Elle augmente le coût du crédit et peut réduire la demande de logements financés par emprunt', 'iscorrect' => true],
                            ['answer' => 'Elle rend toujours les crédits moins chers', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement les revenus immobiliers', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tout financement bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le canal du crédit ?',
                        'answers' => [
                            ['answer' => 'Le mécanisme par lequel les conditions de financement et l’offre de crédit influencent les décisions de consommation et d’investissement', 'iscorrect' => true],
                            ['answer' => 'Le canal par lequel les impôts déterminent les exportations', 'iscorrect' => false],
                            ['answer' => 'Le canal qui relie uniquement les salaires au chômage', 'iscorrect' => false],
                            ['answer' => 'Le canal des dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de change constitue-t-il un canal de transmission monétaire ?',
                        'answers' => [
                            ['answer' => 'Les variations de taux peuvent influencer les flux financiers, la valeur de la monnaie et les prix relatifs des biens échangés', 'iscorrect' => true],
                            ['answer' => 'Le taux de change ne concerne que les importateurs', 'iscorrect' => false],
                            ['answer' => 'Il n’affecte jamais les prix', 'iscorrect' => false],
                            ['answer' => 'Il n’a aucun effet sur les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations sont-elles centrales dans la transmission monétaire moderne ?',
                        'answers' => [
                            ['answer' => 'Les décisions présentes dépendent des anticipations sur les taux, les revenus et les prix futurs', 'iscorrect' => true],
                            ['answer' => 'Les agents ignorent toujours les décisions futures de la banque centrale', 'iscorrect' => false],
                            ['answer' => 'Les anticipations ne concernent que les marchés financiers', 'iscorrect' => false],
                            ['answer' => 'Les prix ne dépendent jamais des anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle utiliser une communication prospective ?',
                        'answers' => [
                            ['answer' => 'Pour influencer les anticipations concernant l’évolution future de la politique monétaire', 'iscorrect' => true],
                            ['answer' => 'Pour fixer directement les salaires', 'iscorrect' => false],
                            ['answer' => 'Pour remplacer toutes les opérations monétaires', 'iscorrect' => false],
                            ['answer' => 'Pour garantir une croissance fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire restrictive peut-elle réduire l’inflation mais aussi l’emploi ?',
                        'answers' => [
                            ['answer' => 'La réduction de la demande globale peut ralentir la production et la demande de travail', 'iscorrect' => true],
                            ['answer' => 'Les taux élevés augmentent toujours l’emploi', 'iscorrect' => false],
                            ['answer' => 'La demande reste nécessairement inchangée', 'iscorrect' => false],
                            ['answer' => 'L’emploi n’a aucun lien avec l’activité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets d’une politique monétaire peuvent-ils être différents selon les ménages ?',
                        'answers' => [
                            ['answer' => 'Les ménages diffèrent par leur endettement, leur patrimoine, leurs revenus et leur exposition aux taux d’intérêt', 'iscorrect' => true],
                            ['answer' => 'Tous les ménages ont exactement le même bilan', 'iscorrect' => false],
                            ['answer' => 'Les taux affectent uniquement les banques', 'iscorrect' => false],
                            ['answer' => 'Les ménages ne possèdent jamais d’actifs financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale ne peut-elle pas toujours stabiliser simultanément inflation et activité après un choc d’offre ?',
                        'answers' => [
                            ['answer' => 'Le choc peut réduire la production tout en augmentant les prix, créant un arbitrage à court terme', 'iscorrect' => true],
                            ['answer' => 'Les chocs d’offre n’affectent jamais l’activité', 'iscorrect' => false],
                            ['answer' => 'Les prix ne réagissent jamais aux coûts', 'iscorrect' => false],
                            ['answer' => 'Une politique restrictive augmente toujours la production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité de la banque centrale réduit-elle potentiellement le coût de la désinflation ?',
                        'answers' => [
                            ['answer' => Des anticipations mieux ancrées peuvent limiter l’incorporation d’une inflation élevée dans les salaires et les prix', 'iscorrect' => true],
                            ['answer' => La crédibilité augmente directement la productivité', 'iscorrect' => false],
                            ['answer' => Elle supprime tous les chocs énergétiques', 'iscorrect' => false],
                            ['answer' => Elle rend les prix fixes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique budgétaire, dette et soutenabilité',
                'questions' => [
                    [
                        'question' => 'Quelle différence existe entre déficit budgétaire et dette publique ?',
                        'answers' => [
                            ['answer' => 'Le déficit est un flux sur une période tandis que la dette est un stock accumulé', 'iscorrect' => true],
                            ['answer' => 'Le déficit est un stock et la dette un flux', 'iscorrect' => false],
                            ['answer' => 'Les deux termes désignent exactement le même indicateur', 'iscorrect' => false],
                            ['answer' => 'Le déficit ne concerne que les ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ratio dette/PIB est-il utilisé pour analyser la soutenabilité budgétaire ?',
                        'answers' => [
                            ['answer' => 'Il compare le stock de dette à la taille de l’économie capable de générer des revenus et des recettes publiques', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement les intérêts', 'iscorrect' => false],
                            ['answer' => 'Il représente la totalité des dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Il mesure directement le patrimoine privé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance nominale peut-elle réduire le ratio dette/PIB même sans baisse de la dette nominale ?',
                        'answers' => [
                            ['answer' => 'Le PIB nominal augmente et accroît le dénominateur du ratio', 'iscorrect' => true],
                            ['answer' => 'La dette disparaît automatiquement', 'iscorrect' => false],
                            ['answer' => 'Les intérêts deviennent toujours nuls', 'iscorrect' => false],
                            ['answer' => 'La croissance nominale réduit nécessairement les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le solde primaire ?',
                        'answers' => [
                            ['answer' => 'Le solde budgétaire avant les charges d’intérêts sur la dette', 'iscorrect' => true],
                            ['answer' => 'Le solde commercial', 'iscorrect' => false],
                            ['answer' => 'Le solde des exportations', 'iscorrect' => false],
                            ['answer' => 'Le solde des ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette élevée peut-elle devenir plus difficile à gérer lorsque les taux augmentent fortement ?',
                        'answers' => [
                            ['answer' => 'Le coût du refinancement et des nouveaux emprunts peut augmenter, ce qui accroît la charge d’intérêts', 'iscorrect' => true],
                            ['answer' => 'Les taux élevés réduisent toujours les intérêts', 'iscorrect' => false],
                            ['answer' => 'Les taux n’influencent jamais les finances publiques', 'iscorrect' => false],
                            ['answer' => 'La dette devient automatiquement moins importante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les multiplicateurs budgétaires peuvent-ils être différents selon le cycle économique ?',
                        'answers' => [
                            ['answer' => Les capacités inutilisées, la réaction de la politique monétaire, la propension à consommer et l’ouverture commerciale peuvent varier', 'iscorrect' => true],
                            ['answer' => 'Le multiplicateur est toujours identique', 'iscorrect' => false],
                            ['answer' => 'Les ménages ont toujours la même propension à consommer', 'iscorrect' => false],
                            ['answer' => 'La politique monétaire ne réagit jamais aux dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une consolidation budgétaire peut-elle améliorer la crédibilité financière tout en réduisant l’activité à court terme ?',
                        'answers' => [
                            ['answer' => 'La réduction du déficit peut rassurer les financeurs mais diminuer simultanément la demande globale', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours les dépenses privées', 'iscorrect' => false],
                            ['answer' => 'Elle réduit nécessairement les taux immédiatement', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet sur le secteur privé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques d’investissement peuvent-elles avoir un effet différent des dépenses courantes ?',
                        'answers' => [
                            ['answer' => Elles peuvent soutenir la demande à court terme tout en augmentant potentiellement la capacité productive future', 'iscorrect' => true],
                            ['answer' => 'Elles n’ont jamais d’effet sur la demande', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent toujours le capital public', 'iscorrect' => false],
                            ['answer' => 'Elles sont toujours entièrement consommées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la composition de la consolidation budgétaire est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Les réductions de dépenses et les hausses d’impôts n’ont pas nécessairement les mêmes effets sur la demande, l’offre et les inégalités', 'iscorrect' => true],
                            ['answer' => 'Toutes les mesures budgétaires ont exactement le même effet', 'iscorrect' => false],
                            ['answer' => 'Seules les recettes publiques sont importantes', 'iscorrect' => false],
                            ['answer' => 'La composition ne concerne que la comptabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité budgétaire peut-elle influencer les taux d’intérêt souverains ?',
                        'answers' => [
                            ['answer' => Une perception accrue du risque de soutenabilité peut augmenter la prime exigée par les investisseurs', 'iscorrect' => true],
                            ['answer' => 'La crédibilité ne concerne jamais les marchés financiers', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs demandent toujours le même taux', 'iscorrect' => false],
                            ['answer' => 'Le risque souverain est toujours nul', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie ouverte, change et vulnérabilités externes',
                'questions' => [
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle améliorer les exportations seulement avec un délai ?',
                        'answers' => [
                            ['answer' => Les contrats, les habitudes commerciales et l’ajustement des quantités peuvent retarder la réaction des volumes échangés', 'iscorrect' => true],
                            ['answer' => Les exportations réagissent toujours instantanément', 'iscorrect' => false],
                            ['answer' => Les entreprises ne modifient jamais leur production', 'iscorrect' => false],
                            ['answer' => Le taux de change n’affecte pas les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte proportion de dette en devise étrangère augmente-t-elle le risque macroéconomique ?',
                        'answers' => [
                            ['answer' => 'Une dépréciation de la monnaie nationale augmente la valeur de cette dette en monnaie domestique', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation réduit toujours le service de la dette étrangère', 'iscorrect' => false],
                            ['answer' => 'Le taux de change ne modifie jamais la dette', 'iscorrect' => false],
                            ['answer' => 'Les exportations deviennent toujours nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un arrêt brutal des entrées de capitaux peut-il provoquer une contraction économique ?',
                        'answers' => [
                            ['answer' => 'Le financement externe devient plus rare, les conditions financières se durcissent et les dépenses peuvent être réduites', 'iscorrect' => true],
                            ['answer' => 'Les entrées de capitaux n’affectent jamais le financement', 'iscorrect' => false],
                            ['answer' => 'Le crédit devient automatiquement moins cher', 'iscorrect' => false],
                            ['answer' => 'Les investissements augmentent nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les réserves de change peuvent-elles être utiles à une banque centrale ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent contribuer à absorber certaines tensions extérieures et à fournir des moyens de règlement internationaux', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent toujours un taux de change fixe', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent complètement les exportations', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute sortie de capitaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte dépendance aux importations d’énergie peut-elle accroître l’inflation domestique ?',
                        'answers' => [
                            ['answer' => 'Une hausse du prix mondial de l’énergie peut augmenter les coûts de production et de transport intérieurs', 'iscorrect' => true],
                            ['answer' => 'Les prix mondiaux n’ont aucun effet sur les coûts domestiques', 'iscorrect' => false],
                            ['answer' => 'Les importations réduisent toujours les coûts', 'iscorrect' => false],
                            ['answer' => 'L’énergie importée n’est jamais utilisée dans la production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chaînes de valeur mondiales peuvent-elles amplifier un choc extérieur ?',
                        'answers' => [
                            ['answer' => 'Une perturbation dans un maillon peut affecter plusieurs étapes de production dans différents pays', 'iscorrect' => true],
                            ['answer' => 'Elles rendent les pays totalement autonomes', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute transmission des chocs', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent toujours les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déficit courant durable peut-il augmenter la dépendance à l’égard des capitaux étrangers ?',
                        'answers' => [
                            ['answer' => 'Le pays doit financer l’écart entre ses dépenses extérieures courantes et les revenus correspondants', 'iscorrect' => true],
                            ['answer' => 'Un déficit courant élimine toujours les besoins de financement', 'iscorrect' => false],
                            ['answer' => 'Les flux de capitaux deviennent inutiles', 'iscorrect' => false],
                            ['answer' => 'Les exportations couvrent toujours intégralement les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les termes de l’échange peuvent-ils influencer le revenu réel d’un pays ?',
                        'answers' => [
                            ['answer' => 'Une modification relative des prix des exportations et des importations change le pouvoir d’achat externe d’un pays', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent uniquement le chômage', 'iscorrect' => false],
                            ['answer' => 'Ils n’affectent jamais le revenu réel', 'iscorrect' => false],
                            ['answer' => 'Ils dépendent uniquement des dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un protectionnisme élevé peut-il affecter l’investissement ?',
                        'answers' => [
                            ['answer' => 'Il peut protéger certains secteurs mais aussi renchérir les équipements ou intrants importés et accroître l’incertitude', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours le coût du capital', 'iscorrect' => false],
                            ['answer' => 'Il garantit toujours une hausse de l’investissement', 'iscorrect' => false],
                            ['answer' => 'Les entreprises n’utilisent jamais de biens importés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la vulnérabilité extérieure dépend-elle aussi de la structure des exportations ?',
                        'answers' => [
                            ['answer' => 'Une forte concentration sur quelques produits ou marchés peut exposer davantage les revenus externes aux chocs spécifiques', 'iscorrect' => true],
                            ['answer' => 'La diversification des exportations augmente toujours la vulnérabilité', 'iscorrect' => false],
                            ['answer' => 'La structure des exportations est sans importance', 'iscorrect' => false],
                            ['answer' => 'Tous les produits exportés subissent exactement les mêmes chocs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cycle économique, offre globale et ajustements',
                'questions' => [
                    [
                        'question' => 'Pourquoi une demande globale excessive peut-elle générer de l’inflation ?',
                        'answers' => [
                            ['answer' => 'Lorsque les capacités productives sont contraintes, une hausse de la demande peut faire pression sur les prix et les salaires', 'iscorrect' => true],
                            ['answer' => 'La demande ne peut jamais influencer les prix', 'iscorrect' => false],
                            ['answer' => 'Une demande forte réduit toujours les salaires', 'iscorrect' => false],
                            ['answer' => 'La capacité productive devient automatiquement illimitée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc d’offre négatif peut-il réduire le PIB réel ?',
                        'answers' => [
                            ['answer' => 'Il peut réduire la capacité productive ou augmenter les coûts, ce qui limite la production rentable', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Il réduit automatiquement les coûts', 'iscorrect' => false],
                            ['answer' => 'Il augmente toujours l’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’output gap ?',
                        'answers' => [
                            ['answer' => 'L’écart entre la production effective et une estimation de la production potentielle', 'iscorrect' => true],
                            ['answer' => 'L’écart entre exportations et importations uniquement', 'iscorrect' => false],
                            ['answer' => 'L’écart entre salaire nominal et salaire réel uniquement', 'iscorrect' => false],
                            ['answer' => 'L’écart entre dette et déficit publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un output gap négatif est-il associé à des ressources sous-utilisées ?',
                        'answers' => [
                            ['answer' => 'La production effective est inférieure au niveau estimé compatible avec une utilisation normale des capacités', 'iscorrect' => true],
                            ['answer' => 'La production effective dépasse toujours la capacité', 'iscorrect' => false],
                            ['answer' => 'L’inflation doit être nulle', 'iscorrect' => false],
                            ['answer' => 'Les exportations sont nécessairement supérieures aux importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une récession peut-elle avoir des effets persistants sur la productivité ?',
                        'answers' => [
                            ['answer' => Une faible demande peut réduire l’investissement, l’apprentissage par la pratique et l’accumulation de capital', 'iscorrect' => true],
                            ['answer' => Une récession augmente toujours l’investissement', 'iscorrect' => false],
                            ['answer' => La productivité ne dépend jamais du capital', 'iscorrect' => false],
                            ['answer' => Les entreprises investissent toujours davantage pendant une crise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles réduire fortement leur investissement pendant un ralentissement ?',
                        'answers' => [
                            ['answer' => 'Les perspectives de demande et de rentabilité deviennent plus incertaines, et le financement peut devenir plus coûteux', 'iscorrect' => true],
                            ['answer' => 'Les entreprises deviennent automatiquement plus optimistes', 'iscorrect' => false],
                            ['answer' => 'Le coût du capital disparaît', 'iscorrect' => false],
                            ['answer' => 'La demande future augmente nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques peuvent-ils réduire la profondeur d’une récession ?',
                        'answers' => [
                            ['answer' => 'Ils soutiennent le revenu des ménages et réduisent automatiquement certaines variations de la demande', 'iscorrect' => true],
                            ['answer' => 'Ils empêchent toujours la production de baisser', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent toujours les impôts pendant une récession', 'iscorrect' => false],
                            ['answer' => 'Ils réduisent automatiquement les transferts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de relance peut-elle avoir un effet plus limité lorsque l’économie est proche de sa capacité maximale ?',
                        'answers' => [
                            ['answer' => 'Une part croissante de l’effet peut se traduire par des tensions sur les prix plutôt que par une hausse durable de la production réelle', 'iscorrect' => true],
                            ['answer' => 'La capacité maximale signifie toujours chômage élevé', 'iscorrect' => false],
                            ['answer' => 'La demande supplémentaire n’a aucun effet', 'iscorrect' => false],
                            ['answer' => 'Les prix ne réagissent jamais aux contraintes de capacité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique économique doit-elle tenir compte de la nature du choc ?',
                        'answers' => [
                            ['answer' => Une réponse adaptée à un choc de demande peut être inadaptée à un choc d’offre ou à une crise financière', 'iscorrect' => true],
                            ['answer' => Tous les chocs ont exactement les mêmes effets', 'iscorrect' => false],
                            ['answer' => Les politiques économiques fonctionnent indépendamment du contexte', 'iscorrect' => false],
                            ['answer' => Les chocs d’offre et de demande sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une crise financière peut-elle amplifier une récession initiale ?',
                        'answers' => [
                            ['answer' => 'La dégradation des bilans bancaires peut réduire le crédit et accentuer la contraction de la consommation et de l’investissement', 'iscorrect' => true],
                            ['answer' => 'Les banques prêtent toujours davantage en période de crise', 'iscorrect' => false],
                            ['answer' => 'Les contraintes financières n’affectent jamais les entreprises', 'iscorrect' => false],
                            ['answer' => 'Les ménages ne dépendent jamais du crédit', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Professional',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Les réponses sont mélangées afin que la bonne réponse ne soit pas systématiquement la première.
                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['answer'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
