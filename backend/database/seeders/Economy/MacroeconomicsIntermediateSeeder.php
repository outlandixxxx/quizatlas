```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MacroeconomicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'macroeconomics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité nationale et agrégats',
                'questions' => [
                    [
                        'question' => 'Quelle identité simplifiée représente le PIB par l\'approche des dépenses dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'PIB = C + I + G + (X - M)', 'iscorrect' => true],
                            ['answer' => 'PIB = C + I - G + (M - X)', 'iscorrect' => false],
                            ['answer' => 'PIB = C + G - I + X + M', 'iscorrect' => false],
                            ['answer' => 'PIB = C + I + G + X + M', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le PIB réel est-il généralement plus adapté que le PIB nominal pour mesurer la croissance ?',
                        'answers' => [
                            ['answer' => 'Il limite l\'effet des variations générales des prix sur la mesure de la production', 'iscorrect' => true],
                            ['answer' => 'Il exclut toutes les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Il mesure directement le bien-être individuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre une variable nominale et une variable réelle ?',
                        'answers' => [
                            ['answer' => 'Une variable réelle est ajustée pour tenir compte des variations de prix, selon la méthode utilisée', 'iscorrect' => true],
                            ['answer' => 'Une variable nominale est toujours plus élevée qu\'une variable réelle', 'iscorrect' => false],
                            ['answer' => 'Une variable réelle ne peut jamais être mesurée en monnaie', 'iscorrect' => false],
                            ['answer' => 'Les deux concepts sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le déflateur du PIB ?',
                        'answers' => [
                            ['answer' => 'Un indice de prix reflétant l\'évolution des prix des biens et services finaux produits dans l\'économie', 'iscorrect' => true],
                            ['answer' => 'Un indicateur du chômage uniquement', 'iscorrect' => false],
                            ['answer' => 'Un indice limité aux biens importés', 'iscorrect' => false],
                            ['answer' => 'Une mesure directe du patrimoine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur ajoutée est-elle importante dans la comptabilité nationale ?',
                        'answers' => [
                            ['answer' => 'Elle permet d\'éviter le double comptage en mesurant la contribution de chaque étape de production', 'iscorrect' => true],
                            ['answer' => 'Elle mesure uniquement les bénéfices des banques', 'iscorrect' => false],
                            ['answer' => 'Elle exclut toujours les salaires', 'iscorrect' => false],
                            ['answer' => 'Elle correspond uniquement aux exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une variation du PIB par habitant ?',
                        'answers' => [
                            ['answer' => 'Elle indique comment la production moyenne rapportée à la population évolue', 'iscorrect' => true],
                            ['answer' => 'Elle mesure directement le patrimoine moyen', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement les inégalités', 'iscorrect' => false],
                            ['answer' => 'Elle correspond toujours au revenu disponible moyen', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le PIB ne permet-il pas à lui seul d\'évaluer complètement le niveau de vie ?',
                        'answers' => [
                            ['answer' => 'Il ne reflète pas parfaitement les inégalités, la qualité environnementale, le loisir et certaines activités non marchandes', 'iscorrect' => true],
                            ['answer' => 'Il ne mesure aucune production marchande', 'iscorrect' => false],
                            ['answer' => 'Il exclut toujours les services', 'iscorrect' => false],
                            ['answer' => 'Il mesure directement le bonheur individuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du PIB nominal supérieure à celle du PIB réel peut notamment indiquer :',
                        'answers' => [
                            ['answer' => 'Une contribution des variations de prix à la hausse du PIB nominal', 'iscorrect' => true],
                            ['answer' => 'Une baisse certaine de la production', 'iscorrect' => false],
                            ['answer' => 'Une baisse automatique du chômage', 'iscorrect' => false],
                            ['answer' => 'Une disparition des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans l\'approche par les revenus, le PIB est lié notamment à :',
                        'answers' => [
                            ['answer' => 'La rémunération des facteurs de production et certains impôts nets des subventions', 'iscorrect' => true],
                            ['answer' => 'Uniquement aux dépenses des ménages', 'iscorrect' => false],
                            ['answer' => 'Uniquement aux exportations', 'iscorrect' => false],
                            ['answer' => 'Uniquement à la dette publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variations des stocks sont-elles prises en compte dans l\'investissement ?',
                        'answers' => [
                            ['answer' => 'Une production non vendue peut représenter une accumulation de stocks et donc une utilisation de ressources productives', 'iscorrect' => true],
                            ['answer' => 'Les stocks ne représentent aucune production', 'iscorrect' => false],
                            ['answer' => 'Les stocks sont toujours des exportations', 'iscorrect' => false],
                            ['answer' => 'Ils sont déjà entièrement comptés dans les importations', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Consommation, épargne et multiplicateur',
                'questions' => [
                    [
                        'question' => 'Dans un modèle keynésien simple, que représente la propension marginale à consommer ?',
                        'answers' => [
                            ['answer' => 'La part d\'une unité supplémentaire de revenu qui est consacrée à la consommation', 'iscorrect' => true],
                            ['answer' => 'La part du revenu consacrée à l\'épargne totale', 'iscorrect' => false],
                            ['answer' => 'La part des dépenses publiques dans le PIB', 'iscorrect' => false],
                            ['answer' => 'La part des exportations dans les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle simple sans impôts ni commerce extérieur, le multiplicateur des dépenses autonomes dépend principalement de :',
                        'answers' => [
                            ['answer' => 'La propension marginale à consommer', 'iscorrect' => true],
                            ['answer' => 'La population active uniquement', 'iscorrect' => false],
                            ['answer' => 'Le taux de chômage uniquement', 'iscorrect' => false],
                            ['answer' => 'Le niveau des exportations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse initiale de l\'investissement peut-elle produire une hausse plus importante du revenu national dans un modèle simple ?',
                        'answers' => [
                            ['answer' => 'Le revenu supplémentaire crée de nouvelles dépenses de consommation qui génèrent à leur tour du revenu', 'iscorrect' => true],
                            ['answer' => 'L\'investissement n\'a aucun coût d\'opportunité', 'iscorrect' => false],
                            ['answer' => 'Les importations augmentent toujours la production domestique', 'iscorrect' => false],
                            ['answer' => 'Les ménages consacrent automatiquement tout leur revenu à l\'épargne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la propension marginale à consommer augmente, le multiplicateur simple augmente-t-il généralement ?',
                        'answers' => [
                            ['answer' => 'Oui, car une plus grande part du revenu supplémentaire est redépensée', 'iscorrect' => true],
                            ['answer' => 'Non, il diminue toujours', 'iscorrect' => false],
                            ['answer' => 'Il devient automatiquement égal à zéro', 'iscorrect' => false],
                            ['answer' => 'Il ne dépend jamais de la consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'épargne constitue-t-elle une fuite dans un modèle simple de demande globale ?',
                        'answers' => [
                            ['answer' => 'Une partie du revenu n\'est pas immédiatement consacrée à la consommation', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours directement les importations', 'iscorrect' => false],
                            ['answer' => 'Elle réduit nécessairement le capital', 'iscorrect' => false],
                            ['answer' => 'Elle représente uniquement une dépense publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les impôts réduisent-ils généralement le multiplicateur par rapport à un modèle sans impôts ?',
                        'answers' => [
                            ['answer' => 'Une partie du revenu supplémentaire est prélevée et ne peut pas être entièrement dépensée par les ménages', 'iscorrect' => true],
                            ['answer' => 'Les impôts augmentent automatiquement la consommation', 'iscorrect' => false],
                            ['answer' => 'Les impôts éliminent l\'investissement', 'iscorrect' => false],
                            ['answer' => 'Les ménages dépensent toujours plus lorsqu\'ils paient davantage d\'impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les importations réduisent-elles le multiplicateur domestique ?',
                        'answers' => [
                            ['answer' => 'Une partie de la demande supplémentaire se dirige vers la production étrangère', 'iscorrect' => true],
                            ['answer' => 'Les importations augmentent toujours la production intérieure', 'iscorrect' => false],
                            ['answer' => 'Les importations constituent une composante du PIB qui est ajoutée deux fois', 'iscorrect' => false],
                            ['answer' => 'Les exportations disparaissent automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une baisse de la confiance des ménages dans le modèle keynésien simple ?',
                        'answers' => [
                            ['answer' => 'Une baisse de la consommation autonome et donc de la demande globale', 'iscorrect' => true],
                            ['answer' => 'Une hausse automatique de l\'investissement', 'iscorrect' => false],
                            ['answer' => 'Une augmentation certaine des exportations', 'iscorrect' => false],
                            ['answer' => 'Une hausse obligatoire des dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la demande globale peut-elle rester faible malgré une capacité productive élevée ?',
                        'answers' => [
                            ['answer' => 'Les dépenses de consommation, d\'investissement, publiques et extérieures peuvent être insuffisantes', 'iscorrect' => true],
                            ['answer' => 'La capacité productive détermine toujours automatiquement la demande', 'iscorrect' => false],
                            ['answer' => 'Une capacité productive élevée supprime l\'épargne', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne peuvent jamais réduire leur investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle simple, pourquoi une hausse des dépenses publiques peut-elle avoir un effet amplifié sur le revenu ?',
                        'answers' => [
                            ['answer' => 'La dépense publique initiale peut générer des revenus supplémentaires puis de nouvelles dépenses privées', 'iscorrect' => true],
                            ['answer' => 'Les dépenses publiques sont toujours entièrement épargnées', 'iscorrect' => false],
                            ['answer' => 'Le PIB ne dépend pas de la demande', 'iscorrect' => false],
                            ['answer' => 'Les ménages réduisent toujours leur consommation lorsque le gouvernement dépense', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché du travail, emploi et chômage',
                'questions' => [
                    [
                        'question' => 'Pourquoi la demande de travail est-elle considérée comme dérivée ?',
                        'answers' => [
                            ['answer' => 'Elle dépend notamment de la demande pour les biens et services produits par le travail', 'iscorrect' => true],
                            ['answer' => 'Elle est indépendante de la production', 'iscorrect' => false],
                            ['answer' => 'Elle dépend uniquement des préférences des travailleurs', 'iscorrect' => false],
                            ['answer' => 'Elle est déterminée uniquement par le gouvernement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le chômage frictionnel ?',
                        'answers' => [
                            ['answer' => 'Le chômage lié notamment aux transitions entre emplois et aux recherches nécessaires pour trouver une correspondance professionnelle', 'iscorrect' => true],
                            ['answer' => 'Le chômage provoqué uniquement par une récession', 'iscorrect' => false],
                            ['answer' => 'Le chômage lié uniquement à la technologie', 'iscorrect' => false],
                            ['answer' => 'Le chômage qui n\'apparaît que dans les monopoles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le chômage structurel ?',
                        'answers' => [
                            ['answer' => 'Un chômage associé à des inadéquations durables entre les compétences ou localisations disponibles et les emplois', 'iscorrect' => true],
                            ['answer' => 'Un chômage uniquement saisonnier', 'iscorrect' => false],
                            ['answer' => 'Un chômage dû uniquement à une baisse d\'un seul prix', 'iscorrect' => false],
                            ['answer' => 'Un chômage provoqué exclusivement par les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le chômage cyclique ?',
                        'answers' => [
                            ['answer' => 'Le chômage associé aux variations de l\'activité économique autour de son niveau soutenable', 'iscorrect' => true],
                            ['answer' => 'Le chômage causé uniquement par les changements de carrière', 'iscorrect' => false],
                            ['answer' => 'Le chômage qui existe uniquement pendant les périodes d\'inflation nulle', 'iscorrect' => false],
                            ['answer' => 'Le chômage permanent de certaines professions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de chômage peut-il diminuer sans que l\'emploi augmente fortement ?',
                        'answers' => [
                            ['answer' => 'Des personnes peuvent sortir de la population active si elles cessent de rechercher un emploi', 'iscorrect' => true],
                            ['answer' => 'Le taux de chômage mesure directement l\'emploi', 'iscorrect' => false],
                            ['answer' => 'Tous les chômeurs trouvent nécessairement un emploi', 'iscorrect' => false],
                            ['answer' => 'La population active est toujours constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le taux de participation ?',
                        'answers' => [
                            ['answer' => 'La part de la population en âge de travailler qui participe à la population active selon la définition retenue', 'iscorrect' => true],
                            ['answer' => 'La part des chômeurs dans la population active', 'iscorrect' => false],
                            ['answer' => 'La part des travailleurs dans le PIB', 'iscorrect' => false],
                            ['answer' => 'La part des exportations dans la production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la formation professionnelle peut-elle réduire le chômage structurel ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer l\'adéquation entre les compétences offertes et celles demandées sur le marché du travail', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le nombre d\'emplois disponibles', 'iscorrect' => false],
                            ['answer' => 'Elle supprime la mobilité du travail', 'iscorrect' => false],
                            ['answer' => 'Elle garantit automatiquement un emploi pour chaque participant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chômage de longue durée peut-il être auto-entretenu ?',
                        'answers' => [
                            ['answer' => 'La perte de compétences, de réseaux et de signaux professionnels peut réduire la probabilité de retour à l\'emploi', 'iscorrect' => true],
                            ['answer' => 'La longue durée augmente toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Les employeurs recrutent automatiquement les chômeurs de longue durée', 'iscorrect' => false],
                            ['answer' => 'Les compétences deviennent toujours plus rares lorsqu\'elles ne sont pas utilisées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une hausse de la demande globale sur l\'emploi à court terme ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter la production et donc la demande de travail lorsque les capacités ne sont pas pleinement utilisées', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours l\'emploi', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut jamais influencer les entreprises', 'iscorrect' => false],
                            ['answer' => 'Elle augmente uniquement les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le salaire réel est-il important dans l\'analyse du marché du travail ?',
                        'answers' => [
                            ['answer' => 'Il mesure la quantité de biens et services que la rémunération permet effectivement d\'acheter', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement les profits', 'iscorrect' => false],
                            ['answer' => 'Il correspond toujours au salaire nominal', 'iscorrect' => false],
                            ['answer' => 'Il ne dépend jamais du niveau des prix', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Inflation, chômage et courbe de Phillips',
                'questions' => [
                    [
                        'question' => 'Que cherche à représenter la courbe de Phillips dans sa version simple ?',
                        'answers' => [
                            ['answer' => 'Une relation empirique ou théorique entre inflation et chômage à certains horizons', 'iscorrect' => true],
                            ['answer' => 'Une relation directe entre PIB et exportations', 'iscorrect' => false],
                            ['answer' => 'Une relation entre monnaie et dette publique uniquement', 'iscorrect' => false],
                            ['answer' => 'Une relation entre salaires et importations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le compromis inflation-chômage de court terme n\'est-il pas nécessairement permanent ?',
                        'answers' => [
                            ['answer' => 'Les anticipations d\'inflation et les ajustements des agents peuvent modifier la relation au fil du temps', 'iscorrect' => true],
                            ['answer' => 'Le chômage reste toujours constant', 'iscorrect' => false],
                            ['answer' => 'Les prix sont fixes à long terme', 'iscorrect' => false],
                            ['answer' => 'Les anticipations n\'influencent jamais les comportements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une inflation anticipée ?',
                        'answers' => [
                            ['answer' => 'Une hausse des prix que les agents économiques s\'attendent à observer dans le futur', 'iscorrect' => true],
                            ['answer' => 'Une inflation déjà observée uniquement', 'iscorrect' => false],
                            ['answer' => 'Une baisse des prix prévue', 'iscorrect' => false],
                            ['answer' => 'Une variation imprévisible du PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations d\'inflation peuvent-elles influencer les salaires nominaux ?',
                        'answers' => [
                            ['answer' => 'Les travailleurs et employeurs peuvent intégrer la hausse attendue des prix dans les négociations salariales', 'iscorrect' => true],
                            ['answer' => 'Les salaires nominaux sont totalement indépendants des prix anticipés', 'iscorrect' => false],
                            ['answer' => 'Les anticipations réduisent toujours les salaires', 'iscorrect' => false],
                            ['answer' => 'Les contrats ne prennent jamais en compte l\'inflation future', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc d\'offre négatif peut-il provoquer à la fois inflation et chômage ?',
                        'answers' => [
                            ['answer' => 'Il peut augmenter les coûts de production tout en réduisant la production', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours les prix et augmente la production', 'iscorrect' => false],
                            ['answer' => 'Il augmente toujours l\'emploi', 'iscorrect' => false],
                            ['answer' => 'Il augmente nécessairement la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que la stagflation ?',
                        'answers' => [
                            ['answer' => 'Une situation combinant une inflation élevée avec une faiblesse de l\'activité économique et de l\'emploi', 'iscorrect' => true],
                            ['answer' => 'Une situation de croissance forte avec inflation nulle', 'iscorrect' => false],
                            ['answer' => 'Une baisse des prix accompagnée d\'un plein emploi', 'iscorrect' => false],
                            ['answer' => 'Une hausse des exportations sans inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle rencontrer un dilemme après un choc d\'offre ?',
                        'answers' => [
                            ['answer' => 'Une politique qui réduit l\'inflation peut aussi freiner davantage l\'activité économique à court terme', 'iscorrect' => true],
                            ['answer' => 'Les chocs d\'offre n\'affectent jamais les prix', 'iscorrect' => false],
                            ['answer' => 'Le chômage augmente toujours lorsque les taux baissent', 'iscorrect' => false],
                            ['answer' => 'L\'activité et les prix évoluent toujours dans la même direction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'ancrage des anticipations d\'inflation est-il important ?',
                        'answers' => [
                            ['answer' => 'Des anticipations stables peuvent réduire le risque de mécanismes auto-entretenus de hausse des salaires et des prix', 'iscorrect' => true],
                            ['answer' => 'Il garantit que tous les prix restent constants', 'iscorrect' => false],
                            ['answer' => 'Il élimine tous les chocs d\'offre', 'iscorrect' => false],
                            ['answer' => 'Il supprime le chômage frictionnel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chômage naturel ou structurel n\'est-il pas nécessairement égal à zéro ?',
                        'answers' => [
                            ['answer' => 'La recherche d\'emploi, les transitions et les inadéquations de compétences subsistent même lorsque l\'économie fonctionne normalement', 'iscorrect' => true],
                            ['answer' => 'Tous les travailleurs sont toujours employés immédiatement', 'iscorrect' => false],
                            ['answer' => 'Le chômage n\'existe que pendant les crises financières', 'iscorrect' => false],
                            ['answer' => 'La mobilité du travail est parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques visant à réduire durablement le chômage doivent-elles aller au-delà de la demande globale ?',
                        'answers' => [
                            ['answer' => 'Le chômage structurel peut nécessiter des politiques de formation, de mobilité, d\'information et de fonctionnement du marché du travail', 'iscorrect' => true],
                            ['answer' => 'La demande globale suffit toujours à résoudre tous les problèmes du marché du travail', 'iscorrect' => false],
                            ['answer' => 'La formation n\'a aucun rôle économique', 'iscorrect' => false],
                            ['answer' => 'La mobilité n\'influence jamais l\'emploi', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Monnaie, création monétaire et système financier',
                'questions' => [
                    [
                        'question' => 'Quelles sont les trois fonctions classiques de la monnaie ?',
                        'answers' => [
                            ['answer' => 'Moyen d\'échange, unité de compte et réserve de valeur', 'iscorrect' => true],
                            ['answer' => 'Moyen de production, facteur travail et actif physique', 'iscorrect' => false],
                            ['answer' => 'Instrument fiscal, budget public et dette', 'iscorrect' => false],
                            ['answer' => 'Exportation, importation et investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la monnaie facilite-t-elle les échanges ?',
                        'answers' => [
                            ['answer' => 'Elle évite la nécessité d\'une double coïncidence des besoins comme dans le troc', 'iscorrect' => true],
                            ['answer' => 'Elle supprime la rareté', 'iscorrect' => false],
                            ['answer' => 'Elle rend tous les biens gratuits', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les préférences individuelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d\'une banque commerciale dans le système financier ?',
                        'answers' => [
                            ['answer' => 'Elle collecte notamment des dépôts et accorde des crédits selon les conditions de marché et les règles applicables', 'iscorrect' => true],
                            ['answer' => 'Elle fixe directement le taux d\'inflation', 'iscorrect' => false],
                            ['answer' => 'Elle produit uniquement des biens industriels', 'iscorrect' => false],
                            ['answer' => 'Elle remplace la banque centrale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la création monétaire par le crédit bancaire dans une description simplifiée ?',
                        'answers' => [
                            ['answer' => 'L\'octroi de crédits peut créer des dépôts bancaires supplémentaires, sous réserve des contraintes du système bancaire', 'iscorrect' => true],
                            ['answer' => 'Les banques impriment toujours physiquement la totalité de la monnaie créée', 'iscorrect' => false],
                            ['answer' => 'Toute création de crédit détruit automatiquement les dépôts', 'iscorrect' => false],
                            ['answer' => 'La monnaie ne peut jamais être liée au crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les réserves bancaires sont-elles importantes ?',
                        'answers' => [
                            ['answer' => 'Elles contribuent à la capacité des banques à régler leurs obligations et à gérer leur liquidité', 'iscorrect' => true],
                            ['answer' => 'Elles sont identiques aux bénéfices', 'iscorrect' => false],
                            ['answer' => 'Elles représentent uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent directement les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que la liquidité ?',
                        'answers' => [
                            ['answer' => 'La facilité avec laquelle un actif peut être converti en moyen de paiement avec peu de perte de valeur', 'iscorrect' => true],
                            ['answer' => 'La rentabilité annuelle d\'une entreprise', 'iscorrect' => false],
                            ['answer' => 'Le niveau d\'inflation', 'iscorrect' => false],
                            ['answer' => 'La capacité de production d\'une économie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle intervenir comme prêteur en dernier ressort ?',
                        'answers' => [
                            ['answer' => 'Pour fournir de la liquidité à des institutions solvables confrontées à des difficultés temporaires de financement selon les règles applicables', 'iscorrect' => true],
                            ['answer' => 'Pour garantir tous les profits bancaires', 'iscorrect' => false],
                            ['answer' => 'Pour financer toutes les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Pour fixer tous les taux de crédit privés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque augmente lorsque les banques accordent des crédits excessivement risqués ?',
                        'answers' => [
                            ['answer' => 'Le risque de pertes importantes et d\'instabilité financière', 'iscorrect' => true],
                            ['answer' => 'Le risque d\'une baisse automatique du PIB potentiel', 'iscorrect' => false],
                            ['answer' => 'La disparition de toute liquidité internationale', 'iscorrect' => false],
                            ['answer' => 'Une baisse obligatoire de la demande de monnaie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la confiance est-elle importante dans le système bancaire ?',
                        'answers' => [
                            ['answer' => 'Une perte de confiance peut provoquer des retraits rapides et des tensions de liquidité', 'iscorrect' => true],
                            ['answer' => 'La confiance ne joue aucun rôle dans les banques', 'iscorrect' => false],
                            ['answer' => 'Elle détermine directement le PIB', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les risques de crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réglementation bancaire existe-t-elle notamment ?',
                        'answers' => [
                            ['answer' => 'Pour limiter certains risques, protéger les déposants et renforcer la stabilité du système financier', 'iscorrect' => true],
                            ['answer' => 'Pour garantir tous les investissements', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les banques privées', 'iscorrect' => false],
                            ['answer' => 'Pour fixer directement tous les prix de l\'économie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Commerce international et balance des paiements',
                'questions' => [
                    [
                        'question' => 'Pourquoi un pays peut-il avoir un déficit commercial tout en ayant une économie en croissance ?',
                        'answers' => [
                            ['answer' => 'Les importations peuvent dépasser les exportations tandis que la demande et la production domestiques augmentent', 'iscorrect' => true],
                            ['answer' => 'Un déficit commercial signifie nécessairement une récession', 'iscorrect' => false],
                            ['answer' => 'Les pays en croissance n\'importent jamais', 'iscorrect' => false],
                            ['answer' => 'Les exportations déterminent seules la croissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le compte courant de la balance des paiements ?',
                        'answers' => [
                            ['answer' => 'Il comprend notamment les échanges de biens et services ainsi que certains revenus primaires et transferts courants', 'iscorrect' => true],
                            ['answer' => 'Il comprend uniquement les investissements directs', 'iscorrect' => false],
                            ['answer' => 'Il comprend uniquement les réserves de change', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle améliorer les exportations ?',
                        'answers' => [
                            ['answer' => 'Les biens domestiques peuvent devenir relativement moins chers pour les acheteurs étrangers', 'iscorrect' => true],
                            ['answer' => 'Les exportations deviennent toujours plus chères', 'iscorrect' => false],
                            ['answer' => 'La dépréciation supprime les capacités productives', 'iscorrect' => false],
                            ['answer' => 'Les exportations deviennent indépendantes des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une monnaie appréciée peut-elle réduire les exportations ?',
                        'answers' => [
                            ['answer' => 'Les produits domestiques peuvent devenir relativement plus chers sur les marchés étrangers', 'iscorrect' => true],
                            ['answer' => 'Les entreprises exportatrices deviennent automatiquement plus productives', 'iscorrect' => false],
                            ['answer' => 'Les importations deviennent nécessairement nulles', 'iscorrect' => false],
                            ['answer' => 'La demande étrangère devient toujours infinie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un déficit du compte courant indique généralement ?',
                        'answers' => [
                            ['answer' => 'Les dépenses envers le reste du monde dépassent les revenus correspondants sur les postes courants considérés', 'iscorrect' => true],
                            ['answer' => 'Les exportations sont nécessairement nulles', 'iscorrect' => false],
                            ['answer' => 'Le PIB est nécessairement en baisse', 'iscorrect' => false],
                            ['answer' => 'L\'investissement domestique est toujours nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pays ayant un déficit courant doit-il généralement être financé d\'une manière ou d\'une autre ?',
                        'answers' => [
                            ['answer' => 'Le déficit implique un besoin de financement qui peut être couvert par des entrées de capitaux ou une diminution d\'actifs extérieurs', 'iscorrect' => true],
                            ['answer' => 'Les déficits courants n\'ont aucun lien avec les flux financiers', 'iscorrect' => false],
                            ['answer' => 'Un déficit courant crée automatiquement des réserves', 'iscorrect' => false],
                            ['answer' => 'Le financement est toujours fourni par les exportations futures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte dépendance à des importations essentielles peut-elle accroître la vulnérabilité macroéconomique ?',
                        'answers' => [
                            ['answer' => 'Une perturbation extérieure peut provoquer une hausse des coûts et une pénurie de certains biens', 'iscorrect' => true],
                            ['answer' => 'Les importations rendent toujours l\'économie plus stable', 'iscorrect' => false],
                            ['answer' => 'Les prix mondiaux n\'affectent jamais les prix domestiques', 'iscorrect' => false],
                            ['answer' => 'Les chaînes d\'approvisionnement internationales n\'ont aucun rôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage du commerce international pour une économie ?',
                        'answers' => [
                            ['answer' => 'Il peut permettre la spécialisation, l\'accès à des biens plus variés et des gains d\'efficacité', 'iscorrect' => true],
                            ['answer' => 'Il supprime toute concurrence domestique', 'iscorrect' => false],
                            ['answer' => 'Il garantit toujours un excédent commercial', 'iscorrect' => false],
                            ['answer' => 'Il élimine tous les chocs extérieurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique protectionniste peut-elle avoir des coûts pour les entreprises ?',
                        'answers' => [
                            ['answer' => 'Des droits de douane sur les intrants peuvent augmenter leurs coûts de production', 'iscorrect' => true],
                            ['answer' => 'La protection réduit toujours les coûts', 'iscorrect' => false],
                            ['answer' => 'Les entreprises utilisent uniquement des biens domestiques', 'iscorrect' => false],
                            ['answer' => 'Les importations sont toujours des produits finaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux de capitaux sont-ils liés au commerce extérieur ?',
                        'answers' => [
                            ['answer' => 'Les déséquilibres courants et financiers sont liés dans la comptabilité de la balance des paiements', 'iscorrect' => true],
                            ['answer' => 'Les flux financiers ne peuvent jamais accompagner les échanges', 'iscorrect' => false],
                            ['answer' => 'Les exportations ne produisent jamais de revenus', 'iscorrect' => false],
                            ['answer' => 'Le commerce extérieur est indépendant de tout flux financier', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cycles économiques et politiques de stabilisation',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'un choc de demande ?',
                        'answers' => [
                            ['answer' => 'Une variation exogène d\'une ou plusieurs composantes de la demande globale', 'iscorrect' => true],
                            ['answer' => 'Une variation automatique de la productivité', 'iscorrect' => false],
                            ['answer' => 'Une hausse obligatoire du capital productif', 'iscorrect' => false],
                            ['answer' => 'Une variation uniquement des ressources naturelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un choc d\'offre ?',
                        'answers' => [
                            ['answer' => 'Un changement affectant les coûts, la productivité ou la capacité de production', 'iscorrect' => true],
                            ['answer' => 'Un changement uniquement de la consommation', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique des dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Une variation uniquement du taux de chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc de demande négatif peut-il augmenter le chômage à court terme ?',
                        'answers' => [
                            ['answer' => 'Les entreprises vendent moins, réduisent leur production et peuvent diminuer l\'emploi', 'iscorrect' => true],
                            ['answer' => 'Les entreprises augmentent toujours leurs embauches', 'iscorrect' => false],
                            ['answer' => 'La productivité augmente nécessairement', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs quittent automatiquement la population active', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle jouent les stabilisateurs automatiques pendant une récession ?',
                        'answers' => [
                            ['answer' => 'Ils soutiennent automatiquement le revenu et la demande à travers le système fiscal et certaines dépenses', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent toujours les impôts', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment les dépenses sociales', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute baisse du PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les délais de politique économique sont-ils importants ?',
                        'answers' => [
                            ['answer' => 'Une mesure peut avoir des effets lorsque la situation économique a déjà changé', 'iscorrect' => true],
                            ['answer' => 'Les politiques ont toujours des effets instantanés', 'iscorrect' => false],
                            ['answer' => 'Les anticipations n\'ont aucun rôle', 'iscorrect' => false],
                            ['answer' => 'Les décisions économiques restent toujours valables à l\'identique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un output gap négatif ?',
                        'answers' => [
                            ['answer' => 'Une production effective inférieure à une estimation de la production potentielle', 'iscorrect' => true],
                            ['answer' => 'Une inflation négative uniquement', 'iscorrect' => false],
                            ['answer' => 'Un déficit commercial', 'iscorrect' => false],
                            ['answer' => 'Un chômage nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire expansionniste peut-elle soutenir l\'activité ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire les coûts de financement et soutenir certaines composantes de la demande', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours les impôts', 'iscorrect' => false],
                            ['answer' => 'Elle réduit nécessairement la consommation', 'iscorrect' => false],
                            ['answer' => 'Elle diminue toujours l\'investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire expansionniste peut-elle avoir des effets inflationnistes ?',
                        'answers' => [
                            ['answer' => 'Une hausse de la demande globale peut créer des pressions sur les ressources et les prix lorsque les capacités sont contraintes', 'iscorrect' => true],
                            ['answer' => 'Les dépenses publiques réduisent toujours les prix', 'iscorrect' => false],
                            ['answer' => 'La demande globale n\'influence jamais les prix', 'iscorrect' => false],
                            ['answer' => 'L\'inflation dépend uniquement des importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique restrictive peut-elle être utilisée lorsque l\'économie connaît une demande excessive ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire la pression de la demande globale sur les capacités de production et les prix', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours le PIB à court terme', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une baisse du chômage', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement les dépenses des ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les autorités peuvent-elles rencontrer un arbitrage entre inflation et activité ?',
                        'answers' => [
                            ['answer' => 'Certaines mesures de ralentissement de l\'inflation peuvent également réduire la demande et l\'emploi à court terme', 'iscorrect' => true],
                            ['answer' => 'Inflation et activité évoluent toujours indépendamment', 'iscorrect' => false],
                            ['answer' => 'Une baisse de l\'inflation augmente nécessairement le PIB', 'iscorrect' => false],
                            ['answer' => 'Le chômage ne dépend jamais de l\'activité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Intermediate',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses pour éviter une position fixe de la bonne réponse.
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
