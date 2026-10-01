<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class InternationalTradeBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'international-trade')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de l’échange international',
                'description' => 'Introduction aux importations, aux exportations, à la spécialisation et aux raisons économiques des échanges entre pays.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une entreprise marocaine vend des pièces automobiles à un client situé en Espagne. Cette opération est :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'une exportation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une importation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une subvention',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une production non marchande',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un pays achète du blé produit à l’étranger, le blé acheté est :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'une importation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une exportation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un quota',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un droit de douane',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pays ont-ils intérêt à échanger certains biens et services ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’ils peuvent tirer parti de leurs différences de ressources, de coûts et de spécialisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’aucun pays ne peut produire de nourriture',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les prix sont toujours identiques entre pays',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le commerce fait disparaître toute rareté',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre le mieux la spécialisation internationale ?',
                        'explanation' => 'La spécialisation et l’échange peuvent permettre une utilisation plus efficace des ressources et créer des gains mutuels. Les effets peuvent toutefois différer selon les secteurs et les groupes.',
                        'choices' => [
                            [
                                'choice_text' => 'Un pays concentre relativement plus de ressources sur les biens pour lesquels il est le plus efficace',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Chaque pays produit exactement les mêmes quantités de tous les biens',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un pays interdit toute production destinée à l’étranger',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Deux pays cessent complètement d’échanger',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si la valeur des exportations de biens est supérieure à celle des importations de biens pendant une période donnée, le pays présente :',
                        'explanation' => 'Une exportation est une vente à l’étranger et une importation est un achat à l’étranger. La distinction permet de suivre le sens des échanges entre une économie et le reste du monde.',
                        'choices' => [
                            [
                                'choice_text' => 'un excédent commercial',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un déficit commercial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un quota commercial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une autarcie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine achète une machine fabriquée en Allemagne pour l’utiliser dans son usine. Pour le Maroc, il s’agit :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'd’une importation de bien',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'd’une exportation de bien',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'd’une taxe à l’exportation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'd’une subvention',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une économie commence à vendre à l’étranger une partie de ses fruits qu’elle ne vendait auparavant que sur le marché intérieur. Elle :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'augmente ses exportations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'augmente nécessairement ses importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'impose automatiquement un quota',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'réduit automatiquement son offre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation distingue correctement commerce intérieur et commerce international ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Le commerce international concerne les échanges entre pays, tandis que le commerce intérieur se déroule à l’intérieur d’un pays',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le commerce international concerne uniquement les services',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le commerce intérieur implique toujours plusieurs monnaies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux expressions désignent exactement la même chose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle un prix international peut-il jouer dans une décision de commerce ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Il aide à comparer les conditions d’achat et de vente entre différents marchés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il fixe automatiquement tous les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il interdit les échanges lorsque les revenus diffèrent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace les politiques publiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise importe des composants puis exporte le produit qu’elle assemble. Quelle conclusion est correcte ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut être à la fois importatrice et exportatrice',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle est uniquement importatrice',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est uniquement exportatrice',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne participe pas au commerce international',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat peut découler de la spécialisation et de l’échange ?',
                        'explanation' => 'La spécialisation et l’échange peuvent permettre une utilisation plus efficace des ressources et créer des gains mutuels. Les effets peuvent toutefois différer selon les secteurs et les groupes.',
                        'choices' => [
                            [
                                'choice_text' => 'Un pays peut obtenir certains biens à un coût d’opportunité inférieur à celui de leur production nationale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Chaque pays doit devenir autosuffisant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les échanges suppriment les coûts de transport',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La spécialisation rend les besoins des ménages identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Avantage absolu et avantage comparatif',
                'description' => 'Appliquer simplement les notions d’avantage absolu, d’avantage comparatif et de coût d’opportunité.',
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Un pays produit davantage de café qu’un autre avec la même quantité de ressources. Cette situation correspond à :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'un avantage absolu',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un avantage comparatif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un quota',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un déficit commercial',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux pays peuvent-ils avoir intérêt à échanger même si l’un est plus productif dans les deux biens ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Oui, si leurs coûts d’opportunité diffèrent',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement si leurs monnaies sont identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement si leurs salaires sont égaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'L’avantage comparatif repose principalement sur :',
                        'explanation' => 'L’avantage comparatif repose sur le coût d’opportunité : un pays gagne à se spécialiser relativement davantage dans les activités pour lesquelles il renonce à moins d’autres possibilités.',
                        'choices' => [
                            [
                                'choice_text' => 'le coût d’opportunité relatif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la taille de la population',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le montant des réserves de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le niveau absolu des exportations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le pays A renonce à 1 tonne de blé pour produire 2 tonnes de maïs. Le pays B renonce à 1 tonne de blé pour produire 4 tonnes de maïs. Qui a le coût d’opportunité le plus faible pour le maïs ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Le pays B',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pays A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux ont le même coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Impossible à déterminer',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le pays X peut produire soit 10 unités de café, soit 20 unités de cacao avec les mêmes ressources. Le coût d’opportunité d’une unité de café est :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => '2 unités de cacao',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0,5 unité de cacao',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 unités de cacao',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20 unités de cacao',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pays possède un avantage absolu dans deux produits, mais un avantage comparatif dans un seul. Quelle stratégie est cohérente avec le raisonnement économique ?',
                        'explanation' => 'L’avantage comparatif repose sur le coût d’opportunité : un pays gagne à se spécialiser relativement davantage dans les activités pour lesquelles il renonce à moins d’autres possibilités.',
                        'choices' => [
                            [
                                'choice_text' => 'Se spécialiser relativement davantage dans le produit où le coût d’opportunité est le plus faible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Produire les deux biens en quantités égales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Importer les deux biens',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Arrêter toute exportation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’avantage comparatif reste-t-il pertinent entre des pays de productivité différente ?',
                        'explanation' => 'L’avantage comparatif repose sur le coût d’opportunité : un pays gagne à se spécialiser relativement davantage dans les activités pour lesquelles il renonce à moins d’autres possibilités.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les coûts d’opportunité peuvent être différents même lorsque les niveaux de productivité absolue diffèrent',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les pays ont la même technologie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le commerce ne dépend jamais des coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le coût d’opportunité est toujours nul',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si un pays renonce à moins d’autres biens pour produire une unité de textile qu’un autre pays, il possède dans le textile :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'un avantage comparatif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un avantage absolu automatique dans tous les biens',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un quota',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un déficit commercial',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif poursuit la spécialisation fondée sur l’avantage comparatif ?',
                        'explanation' => 'L’avantage comparatif repose sur le coût d’opportunité : un pays gagne à se spécialiser relativement davantage dans les activités pour lesquelles il renonce à moins d’autres possibilités.',
                        'choices' => [
                            [
                                'choice_text' => 'Utiliser davantage les ressources dans les activités où le sacrifice relatif est le plus faible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire volontairement la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer toute production locale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter toute concurrence étrangère',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle erreur faut-il éviter lorsqu’on analyse l’avantage comparatif ?',
                        'explanation' => 'L’avantage comparatif repose sur le coût d’opportunité : un pays gagne à se spécialiser relativement davantage dans les activités pour lesquelles il renonce à moins d’autres possibilités.',
                        'choices' => [
                            [
                                'choice_text' => 'Le confondre avec l’avantage absolu',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Comparer les coûts d’opportunité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Examiner les possibilités de spécialisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tenir compte des ressources disponibles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si le coût d’opportunité du bien A est plus faible au Maroc qu’en France, quelle spécialisation est cohérente ?',
                        'explanation' => 'La spécialisation et l’échange peuvent permettre une utilisation plus efficace des ressources et créer des gains mutuels. Les effets peuvent toutefois différer selon les secteurs et les groupes.',
                        'choices' => [
                            [
                                'choice_text' => 'Le Maroc peut se spécialiser relativement davantage dans A',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La France doit nécessairement se spécialiser dans A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucun échange n’est possible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux pays doivent produire exactement la même quantité de A',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Droits de douane et quotas',
                'description' => 'Comprendre les principales barrières commerciales et leurs effets simples sur les marchés et les acteurs.',
                'duration' => 22,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => 'Un droit de douane est :',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'une taxe appliquée à un produit importé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une limite quantitative sur les exportations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une subvention versée à tous les consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une interdiction de produire localement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un quota d’importation est :',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'une limite quantitative imposée aux importations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une taxe sur les revenus des entreprises',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une aide aux exportateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse obligatoire des coûts de transport',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un gouvernement peut instaurer un droit de douane notamment pour :',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'protéger temporairement certains producteurs nationaux de la concurrence étrangère',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'garantir que les importations deviennent gratuites',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer toute demande intérieure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'interdire toute exportation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si un droit de douane augmente le prix intérieur d’un bien importé, que peuvent subir les consommateurs ?',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'Un prix plus élevé et une quantité achetée plus faible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un prix plus faible et une quantité illimitée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucun changement possible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une subvention automatique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence essentielle entre un quota et un droit de douane ?',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'Le quota limite directement la quantité importée, tandis que le droit de douane agit directement par une taxe',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le quota est une taxe et le tarif est une quantité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils sont juridiquement identiques dans tous les cas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le droit de douane concerne seulement les exportations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pays réduit de 100 000 à 60 000 unités le quota d’importation d’un produit. La quantité maximale autorisée :',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'diminue',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'augmente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'reste forcément identique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'devient illimitée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les barrières commerciales peuvent-elles représenter un coût économique ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles peuvent réduire certains gains de l’échange et renchérir les produits importés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles augmentent toujours la productivité mondiale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles rendent tous les marchés parfaitement concurrentiels',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles éliminent les coûts de production',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une taxe sur les chaussures importées peut favoriser directement :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'les producteurs nationaux concurrents des importations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'les consommateurs qui achètent les chaussures taxées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les importateurs qui paient la taxe',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tous les acteurs dans la même mesure',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique dite protectionniste cherche notamment à :',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'protéger certaines activités nationales de la concurrence étrangère',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'supprimer toutes les barrières commerciales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'augmenter systématiquement les importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'interdire toute production nationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les consommateurs peuvent-ils supporter une partie du coût d’une protection commerciale ?',
                        'explanation' => 'L’ouverture commerciale modifie les prix, les quantités et la structure de la production. Les conséquences peuvent donc être différentes pour les consommateurs, producteurs et travailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les biens concernés peuvent devenir plus chers ou moins disponibles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’ils reçoivent toujours une compensation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que leurs revenus doublent automatiquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les importations deviennent gratuites',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir un quota contraignant ?',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'La quantité importée reste limitée même si la demande serait plus élevée au prix sans quota',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les exportations nationales doublent nécessairement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande intérieure disparaît',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les producteurs étrangers peuvent vendre sans limite',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Libre-échange et gains du commerce',
                'description' => 'Révision des gains possibles du commerce, de la spécialisation et des effets différenciés de l’ouverture commerciale.',
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Le libre-échange désigne principalement :',
                        'explanation' => 'La spécialisation et l’échange peuvent permettre une utilisation plus efficace des ressources et créer des gains mutuels. Les effets peuvent toutefois différer selon les secteurs et les groupes.',
                        'choices' => [
                            [
                                'choice_text' => 'des échanges internationaux relativement peu entravés par des barrières commerciales',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'l’interdiction des importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la fixation de tous les prix par l’État',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la fermeture économique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’échange peut-il permettre une consommation plus élevée qu’en autarcie ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la spécialisation peut améliorer l’utilisation globale des ressources',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les ressources deviennent infinies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les coûts de production disparaissent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les besoins humains diminuent',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise importe une pièce moins chère qu’elle ne pourrait la produire avec ses propres ressources. Elle cherche notamment à :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'réduire son coût et utiliser ses ressources plus efficacement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'augmenter son coût d’opportunité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer sa production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'éliminer toute concurrence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est un gain possible du commerce pour les consommateurs ?',
                        'explanation' => 'L’ouverture commerciale modifie les prix, les quantités et la structure de la production. Les conséquences peuvent donc être différentes pour les consommateurs, producteurs et travailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Accéder à davantage de variétés ou à des prix plus bas pour certains biens',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Être obligés d’acheter un produit unique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Perdre tout choix entre fournisseurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Payer nécessairement plus cher tous les biens',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'La spécialisation peut améliorer la productivité lorsqu’elle permet :',
                        'explanation' => 'La spécialisation et l’échange peuvent permettre une utilisation plus efficace des ressources et créer des gains mutuels. Les effets peuvent toutefois différer selon les secteurs et les groupes.',
                        'choices' => [
                            [
                                'choice_text' => 'une meilleure utilisation des compétences et des ressources dans certaines activités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la suppression de la division du travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse systématique des compétences',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l’interdiction de l’investissement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pays échange des fruits contre des machines avec un autre pays. Cette opération illustre :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'la possibilité d’obtenir des biens grâce à la spécialisation et à l’échange',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la disparition de la rareté',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une économie sans production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un quota d’importation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation sur les gains du commerce est correcte ?',
                        'explanation' => 'La spécialisation et l’échange peuvent permettre une utilisation plus efficace des ressources et créer des gains mutuels. Les effets peuvent toutefois différer selon les secteurs et les groupes.',
                        'choices' => [
                            [
                                'choice_text' => 'Les gains totaux peuvent être positifs sans être identiques pour tous les groupes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Chaque individu gagne nécessairement la même somme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le commerce ne peut produire aucun gain',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tous les secteurs nationaux bénéficient toujours de la même manière',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certains travailleurs peuvent-ils être affectés négativement par une ouverture commerciale ?',
                        'explanation' => 'L’ouverture commerciale modifie les prix, les quantités et la structure de la production. Les conséquences peuvent donc être différentes pour les consommateurs, producteurs et travailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que certains secteurs exposés à la concurrence étrangère peuvent perdre de l’activité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toute importation détruit automatiquement un emploi',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le commerce supprime tous les emplois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les salaires sont fixés par les exportateurs étrangers',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une hausse de la productivité dans un secteur exportateur peut permettre :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'd’augmenter sa capacité à servir la demande étrangère',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'de réduire automatiquement toutes les exportations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'de supprimer toutes les importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'de fermer le marché intérieur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ajustement à l’ouverture commerciale peut-il prendre du temps ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les travailleurs et les capitaux ne se déplacent pas instantanément entre secteurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les ressources ne changent jamais d’usage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les consommateurs ne modifient jamais leur demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le commerce n’affecte aucun secteur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle mesure peut aider des travailleurs touchés par une transformation sectorielle liée au commerce ?',
                        'explanation' => 'L’ouverture commerciale modifie les prix, les quantités et la structure de la production. Les conséquences peuvent donc être différentes pour les consommateurs, producteurs et travailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'La formation et l’aide à la reconversion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’interdiction permanente des importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des entreprises exportatrices',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une taxe sur chaque emploi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Balance commerciale et échanges de services',
                'description' => 'Lire un solde commercial simple et distinguer échanges de biens et de services.',
                'duration' => 21,
                'passing_score' => 54,
                'questions' => [
                    [
                        'question' => 'La balance commerciale des marchandises compare principalement :',
                        'explanation' => 'Le solde commercial des biens se calcule en faisant exportations moins importations. Un solde positif correspond à un excédent et un solde négatif à un déficit.',
                        'choices' => [
                            [
                                'choice_text' => 'la valeur des exportations et des importations de biens',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'les dépenses publiques et les recettes fiscales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les salaires et les profits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les investissements et l’épargne',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pays exporte pour 120 milliards de dirhams de biens et importe pour 150 milliards. Son solde commercial est de :',
                        'explanation' => 'Le solde commercial des biens se calcule en faisant exportations moins importations. Un solde positif correspond à un excédent et un solde négatif à un déficit.',
                        'choices' => [
                            [
                                'choice_text' => '-30 milliards de dirhams',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '+30 milliards de dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '270 milliards de dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '-270 milliards de dirhams',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un solde commercial négatif signifie que, pour les biens considérés :',
                        'explanation' => 'Le solde commercial des biens se calcule en faisant exportations moins importations. Un solde positif correspond à un excédent et un solde négatif à un déficit.',
                        'choices' => [
                            [
                                'choice_text' => 'la valeur des importations dépasse celle des exportations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la valeur des exportations dépasse celle des importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'aucun échange n’a lieu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les exportations sont nulles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle importer des biens intermédiaires ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour les utiliser dans sa propre production',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour les détruire immédiatement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour réduire mécaniquement ses exportations à zéro',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute utilisation de capital',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pays augmente ses exportations et ses importations simultanément. Que peut-on conclure sans connaître les montants ?',
                        'explanation' => 'Une exportation est une vente à l’étranger et une importation est un achat à l’étranger. La distinction permet de suivre le sens des échanges entre une économie et le reste du monde.',
                        'choices' => [
                            [
                                'choice_text' => 'Le solde commercial peut augmenter, diminuer ou rester stable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le solde devient nécessairement positif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le solde devient nécessairement négatif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pays devient automatiquement autarcique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine fournit des services informatiques à une entreprise canadienne. Pour le Maroc, il s’agit :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'd’une exportation de services',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'd’une importation de services',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'd’un droit de douane',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'd’un quota',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le solde commercial ne suffit-il pas à décrire toute la situation économique internationale d’un pays ?',
                        'explanation' => 'Le solde commercial des biens se calcule en faisant exportations moins importations. Un solde positif correspond à un excédent et un solde négatif à un déficit.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il ne couvre qu’une partie des relations économiques extérieures',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il mesure directement le chômage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il remplace le PIB',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il mesure directement le niveau de vie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si le prix mondial du pétrole augmente et que la quantité importée reste stable, quelle conséquence est possible pour un pays importateur net de pétrole ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'La valeur de ses importations augmente et son solde commercial peut se dégrader',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Son solde commercial s’améliore nécessairement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les importations deviennent nulles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le solde commercial reste forcément inchangé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des exportations peut soutenir l’activité des entreprises nationales parce que :',
                        'explanation' => 'Une exportation est une vente à l’étranger et une importation est un achat à l’étranger. La distinction permet de suivre le sens des échanges entre une économie et le reste du monde.',
                        'choices' => [
                            [
                                'choice_text' => 'une demande étrangère plus forte peut entraîner davantage de production',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'les exportations réduisent toujours les ventes nationales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les importations deviennent automatiquement nulles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les entreprises cessent d’utiliser du capital',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction est correcte ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Une exportation est une vente à l’étranger, tandis qu’une importation est un achat à l’étranger',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une exportation est toujours un achat',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une importation est toujours une vente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux termes sont synonymes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les services font-ils partie du commerce international ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que des services comme le tourisme, le transport ou l’informatique peuvent être vendus à des clients étrangers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que seuls les services traversent les frontières',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les biens ne sont jamais échangés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les services ne créent aucune valeur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mondialisation et chaînes de valeur',
                'description' => 'Découvrir la fragmentation internationale de la production et les avantages et vulnérabilités liés à l’interdépendance.',
                'duration' => 26,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Une entreprise conçoit un appareil dans un pays, achète des composants à l’étranger et effectue l’assemblage dans un troisième pays. Cette organisation illustre :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'une chaîne de valeur internationale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une économie autarcique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un quota d’importation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une politique monétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle répartir les étapes de production entre plusieurs pays ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour tirer parti de coûts, compétences, technologies ou ressources différents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour empêcher toute spécialisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les coûts sont toujours identiques partout',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter les échanges',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque accompagne une forte interdépendance des chaînes de valeur ?',
                        'explanation' => 'Les chaînes de valeur internationales répartissent différentes étapes de production entre pays. Cette organisation peut améliorer l’efficacité, tout en créant une dépendance aux fournisseurs et à la logistique internationale.',
                        'choices' => [
                            [
                                'choice_text' => 'Une perturbation dans un pays peut affecter la production dans d’autres pays',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les entreprises deviennent totalement indépendantes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les importations deviennent toujours moins chères',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les stocks deviennent infinis',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une usine marocaine importe des composants électroniques puis exporte un produit assemblé. Elle :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'combine importations d’intrants et exportation d’un produit',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ne participe pas au commerce international',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'réalise uniquement des importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'réalise uniquement des exportations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'La fragmentation internationale de la production peut être facilitée par :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'des coûts de transport et de communication plus faibles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la fermeture des frontières',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la disparition des réseaux logistiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l’interdiction des services',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage une entreprise peut-elle rechercher en spécialisant une usine dans une seule étape ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Développer une expertise et une efficacité particulières dans cette étape',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Produire toutes les étapes dans le même lieu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire nécessairement sa productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Empêcher toute exportation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une pénurie d’un intrant dans un pays peut-elle interrompre une production dans un autre ?',
                        'explanation' => 'Les chaînes de valeur internationales répartissent différentes étapes de production entre pays. Cette organisation peut améliorer l’efficacité, tout en créant une dépendance aux fournisseurs et à la logistique internationale.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que certaines étapes dépendent d’un approvisionnement régulier en composants étrangers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les chaînes internationales n’utilisent aucun intrant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les stocks sont toujours illimités',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les retards logistiques n’affectent jamais la production',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple est une importation intermédiaire ?',
                        'explanation' => 'Une exportation est une vente à l’étranger et une importation est un achat à l’étranger. La distinction permet de suivre le sens des échanges entre une économie et le reste du monde.',
                        'choices' => [
                            [
                                'choice_text' => 'Un fabricant achète à l’étranger un composant qu’il incorporera à son produit final',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un ménage vend une voiture à un voisin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une entreprise paie son loyer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un gouvernement perçoit une taxe',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la mondialisation peut-elle modifier la structure de l’emploi ?',
                        'explanation' => 'Les chaînes de valeur internationales répartissent différentes étapes de production entre pays. Cette organisation peut améliorer l’efficacité, tout en créant une dépendance aux fournisseurs et à la logistique internationale.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que l’activité peut se déplacer entre secteurs selon leur exposition à la concurrence et à la demande mondiale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les emplois deviennent identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les exportations ne nécessitent aucun travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises cessent d’utiliser du capital',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une petite entreprise commence à vendre en ligne à des clients étrangers. Elle :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'élargit son marché potentiel au-delà du marché national',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ferme son activité internationale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'augmente nécessairement ses importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'élimine la concurrence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pays dépend fortement d’un petit nombre de fournisseurs étrangers pour un composant stratégique. Quel enjeu apparaît ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Une vulnérabilité à une rupture d’approvisionnement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une absence de toute spécialisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition de la demande intérieure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression du commerce international',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Taux de change et commerce',
                'description' => 'Comprendre le rôle du taux de change dans les prix des importations, la compétitivité des exportations et les décisions des entreprises.',
                'duration' => 25,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Le taux de change correspond notamment :',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'à la valeur d’une monnaie exprimée dans une autre monnaie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'au niveau de chômage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'à la quantité produite par une entreprise',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'au montant des dépenses publiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si l’euro devient plus cher en dirhams, un produit facturé en euros coûte, toutes choses égales par ailleurs, en dirhams :',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'plus cher',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'moins cher',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours autant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'zéro',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une dépréciation du dirham peut rendre certains produits marocains moins chers pour des acheteurs étrangers. Quel effet potentiel peut en résulter ?',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration de leur compétitivité-prix',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des exportations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de la demande étrangère',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine des ventes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle renchérir certaines importations ?',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il faut davantage de monnaie nationale pour acheter une même quantité de devise étrangère',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les produits étrangers disparaissent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les exportateurs étrangers cessent de vendre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les prix mondiaux deviennent nuls',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine achète une machine facturée en dollars. Si le dollar devient plus cher en dirhams, son coût d’achat en dirhams peut :',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'augmenter',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'diminuer nécessairement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'devenir nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'rester obligatoirement identique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel lien simple existe entre taux de change et commerce extérieur ?',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'Le taux de change modifie les prix relatifs des biens échangés entre pays',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il détermine uniquement les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace les droits de douane',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il fixe les quantités produites dans toutes les usines',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une appréciation de la monnaie nationale peut rendre les exportations :',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'relativement plus coûteuses pour les acheteurs étrangers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'toujours gratuites',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'nécessairement plus compétitives',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'automatiquement interdites',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il préciser « toutes choses égales par ailleurs » ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les échanges dépendent aussi des revenus, des prix, de la demande et d’autres facteurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le taux de change n’a aucun effet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les importations sont toujours fixes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les consommateurs ne jouent aucun rôle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une importation devient plus chère à cause du taux de change. Qui est directement concerné ?',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'Les ménages ou entreprises qui achètent ce produit importé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement les exportateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement le gouvernement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Personne',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple est directement lié au taux de change ?',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'Le prix en dirhams d’un ordinateur dont le prix est fixé en dollars',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La superficie d’une exploitation agricole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de jours fériés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La pluviométrie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de change est-il important pour un exportateur qui reçoit des dollars ?',
                        'explanation' => 'Le taux de change modifie le prix relatif des biens entre pays. Une variation de la monnaie peut donc changer le coût des importations et la compétitivité-prix des exportations.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il détermine la valeur en monnaie nationale de ses recettes en dollars',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il fixe son nombre de salariés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il supprime ses coûts de production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il détermine directement ses stocks',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision générale du commerce international',
                'description' => 'Synthèse des concepts essentiels : spécialisation, avantages comparatifs, barrières commerciales, balance commerciale, mondialisation et taux de change.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle combinaison est entièrement correcte ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Exportation = vente à l’étranger ; importation = achat à l’étranger ; tarif = taxe sur une importation ; quota = limite quantitative',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Exportation = achat à l’étranger ; importation = vente à l’étranger ; tarif = quantité ; quota = taxe',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Exportation = taxe ; importation = subvention ; tarif = salaire ; quota = profit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Exportation = production locale ; importation = consommation locale ; tarif = bénéfice ; quota = revenu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pays impose un tarif sur les vêtements importés. Son objectif immédiat sur le marché intérieur est notamment de :',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'rendre les vêtements importés plus chers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'réduire le prix des importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'augmenter automatiquement la quantité importée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer la production nationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pays réduit ses barrières commerciales et met en place une aide à la reconversion pour les travailleurs touchés. Cette approche combine :',
                        'explanation' => 'L’ouverture commerciale modifie les prix, les quantités et la structure de la production. Les conséquences peuvent donc être différentes pour les consommateurs, producteurs et travailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'ouverture commerciale et accompagnement de l’ajustement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'fermeture commerciale et autarcie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'réduction de la spécialisation et interdiction des échanges',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'suppression des exportations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit de produire davantage le bien pour lequel son coût d’opportunité est relativement faible. Elle applique :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'le principe de l’avantage comparatif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'le principe du quota',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la logique du déficit commercial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la protection tarifaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un consommateur peut-il bénéficier d’une baisse d’un droit de douane ?',
                        'explanation' => 'Un droit de douane est une taxe sur une importation, alors qu’un quota limite directement la quantité importée. Ces mesures peuvent protéger certaines activités mais aussi augmenter les prix ou réduire le choix.',
                        'choices' => [
                            [
                                'choice_text' => 'Il peut accéder à des produits importés moins chers ou à un choix plus large',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il devient automatiquement exportateur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tous les salaires augmentent nécessairement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La production nationale disparaît toujours',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel scénario correspond à un déficit commercial de biens ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Les importations de biens valent 90 milliards de dirhams et les exportations 70 milliards',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les exportations valent 90 et les importations 70',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les exportations et importations valent chacune 80',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pays n’échange aucun bien',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux pays se spécialisent selon leurs avantages comparatifs puis échangent. Le résultat recherché est :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'une meilleure utilisation des ressources et des gains d’échange potentiels',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'des économies identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la disparition de toute production locale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l’interdiction des biens étrangers',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une restriction commerciale réduit les importations d’un produit mais augmente son prix intérieur. Quelle tension peut apparaître ?',
                        'explanation' => 'Une exportation est une vente à l’étranger et une importation est un achat à l’étranger. La distinction permet de suivre le sens des échanges entre une économie et le reste du monde.',
                        'choices' => [
                            [
                                'choice_text' => 'La protection de certains producteurs peut s’accompagner d’un coût pour les consommateurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les consommateurs gagnent toujours et les producteurs perdent toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tous les groupes gagnent exactement autant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Personne n’est affecté',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une économie dont une part importante de la production et de la consommation est liée aux échanges extérieurs est :',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'fortement intégrée au commerce international',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'en situation d’autarcie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'isolée des marchés mondiaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'forcément en déficit commercial',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser séparément les effets d’une politique commerciale sur consommateurs, producteurs et travailleurs ?',
                        'explanation' => 'L’ouverture commerciale modifie les prix, les quantités et la structure de la production. Les conséquences peuvent donc être différentes pour les consommateurs, producteurs et travailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’une même mesure peut produire des effets différents selon les groupes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que seuls les exportateurs sont concernés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les consommateurs ne paient jamais les prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les travailleurs ne dépendent d’aucun secteur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle idée résume le mieux le commerce international au niveau débutant ?',
                        'explanation' => 'La réponse applique le concept de commerce international présenté dans la situation. L’idée centrale est de comparer les coûts, les ressources, les prix et les possibilités de spécialisation.',
                        'choices' => [
                            [
                                'choice_text' => 'La spécialisation selon les avantages comparatifs peut créer des gains d’échange, tandis que les politiques commerciales modifient les conditions et la répartition de ces gains',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Toute importation est nuisible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le commerce rend automatiquement tous les pays riches de la même façon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Libre-échange et protectionnisme ont toujours exactement les mêmes effets',
                                'is_correct' => false,
                            ],
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