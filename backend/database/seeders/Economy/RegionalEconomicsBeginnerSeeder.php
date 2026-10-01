<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class RegionalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'regional-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux de l’économie régionale',
                'description' => 'Notions de base sur les régions, la localisation de l’activité économique et les écarts territoriaux.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Que cherche principalement à étudier l’économie régionale ?',
                        'explanation' => 'L’économie régionale analyse la manière dont les activités, les emplois et les revenus se répartissent entre les territoires et les facteurs qui expliquent ces différences.',
                        'choices' => [
                            [
                                'choice_text' => 'La répartition géographique des activités économiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le fonctionnement biologique des cultures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La composition chimique des métaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La formation des nuages',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région concentre de nombreuses entreprises d’un même secteur. Quelle notion décrit le mieux cette situation ?',
                        'explanation' => 'La spécialisation régionale signifie qu’un territoire concentre une part importante de ses activités dans certains secteurs.',
                        'choices' => [
                            [
                                'choice_text' => 'La spécialisation régionale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La dépréciation monétaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La consommation autonome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La comptabilité nationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la présence d’une route rapide peut-elle influencer la localisation d’une entreprise ?',
                        'explanation' => 'Une bonne infrastructure réduit certains coûts de transport et facilite l’accès aux fournisseurs, aux salariés et aux clients.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut réduire les coûts de transport et améliorer l’accessibilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime toute concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle garantit un salaire identique dans toutes les régions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle empêche les migrations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux régions ont des structures productives très différentes. Que peut-on en déduire ?',
                        'explanation' => 'Des structures productives différentes peuvent conduire à des profils d’emploi et de revenus différents.',
                        'choices' => [
                            [
                                'choice_text' => 'Leurs économies peuvent être spécialisées dans des activités différentes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles ont nécessairement le même niveau de revenu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles utilisent exactement les mêmes infrastructures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles ont forcément la même population',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur compare directement la production économique d’une région à sa population ?',
                        'explanation' => 'Le PIB par habitant rapporte le PIB d’une région à son nombre d’habitants et permet une comparaison de production moyenne par personne.',
                        'choices' => [
                            [
                                'choice_text' => 'Le PIB par habitant',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le taux de natalité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La superficie totale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de communes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région offre des emplois mieux rémunérés dans un secteur en expansion. Quel effet peut-on attendre sur les travailleurs ?',
                        'explanation' => 'Des travailleurs peuvent être attirés vers cette région si les gains attendus compensent les coûts du déplacement.',
                        'choices' => [
                            [
                                'choice_text' => 'Une attraction possible de travailleurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition automatique des emplois locaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine de la population',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des infrastructures',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’entend-on par disparités régionales ?',
                        'explanation' => 'Les disparités régionales désignent des différences observées entre territoires, par exemple en matière de revenus, d’emploi ou d’accès aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Des écarts économiques et sociaux entre territoires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse uniforme des prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une identité complète entre régions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une variation quotidienne du climat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit un emplacement proche de ses principaux clients. Quel facteur de localisation utilise-t-elle ?',
                        'explanation' => 'La proximité des clients peut réduire les coûts de livraison et améliorer le service, ce qui influence la localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'L’accessibilité au marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La masse monétaire nationale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le taux de fécondité mondial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le stock d’or',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région dispose d’une université importante qui forme des diplômés chaque année. Quel avantage régional peut en résulter ?',
                        'explanation' => 'Une offre de compétences qualifiées peut attirer ou retenir des activités économiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Un renforcement du capital humain local',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique des droits de douane',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition des besoins en transport',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine de tous les loyers',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ressources naturelles peuvent-elles influencer la localisation d’activités ?',
                        'explanation' => 'Certaines activités dépendent fortement de ressources qu’il est coûteux ou impossible de déplacer sur de longues distances.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles peuvent rendre certains sites plus attractifs pour des activités spécifiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles fixent toujours les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles rendent toutes les régions identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles suppriment la demande locale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région rurale développe une activité touristique autour de son patrimoine. Quel principe économique illustre cette décision ?',
                        'explanation' => 'Le territoire valorise un atout local afin de diversifier son activité et ses revenus.',
                        'choices' => [
                            [
                                'choice_text' => 'La valorisation d’un avantage territorial',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La suppression de la spécialisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La nationalisation automatique des entreprises',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse obligatoire des prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Localisation des entreprises et spécialisation',
                'description' => 'Applications simples sur les facteurs de localisation, les coûts, la spécialisation et la diversification régionales.',
                'duration' => 22,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => 'Une entreprise agroalimentaire choisit une implantation proche des producteurs agricoles. Quel avantage recherche-t-elle principalement ?',
                        'explanation' => 'Une proximité avec les fournisseurs peut réduire certains coûts de transport et faciliter l’approvisionnement.',
                        'choices' => [
                            [
                                'choice_text' => 'La proximité des intrants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique de la demande mondiale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse des compétences locales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression du risque commercial',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut pousser une entreprise à s’installer dans une grande ville ?',
                        'explanation' => 'Un marché de consommateurs important peut rendre la ville attractive malgré des coûts fonciers plus élevés.',
                        'choices' => [
                            [
                                'choice_text' => 'L’accès à un grand marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’absence totale de concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La gratuité des terrains',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition des transports',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région se spécialise fortement dans le textile et devient très dépendante de ce secteur. Quel risque peut apparaître ?',
                        'explanation' => 'Un choc touchant le textile peut avoir un effet important sur l’emploi et le revenu régional.',
                        'choices' => [
                            [
                                'choice_text' => 'Une forte exposition à un choc sectoriel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une indépendance totale vis-à-vis du marché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine du coût du travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression de toute migration',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une région peut-elle chercher à diversifier ses activités économiques ?',
                        'explanation' => 'La diversification peut réduire la dépendance à un seul secteur et rendre le territoire plus résilient à certains chocs.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire la dépendance à un seul secteur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour empêcher les échanges avec les autres régions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour garantir un prix unique de tous les biens',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer toute spécialisation productive',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une usine choisit un site où la main-d’œuvre nécessaire est disponible en quantité suffisante. Quel facteur de localisation est mobilisé ?',
                        'explanation' => 'La disponibilité de la main-d’œuvre adaptée fait partie des déterminants classiques de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'La disponibilité du travail',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La pente des obligations publiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le niveau des exportations mondiales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le stock de monnaie historique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise s’installe près d’autres entreprises qui utilisent les mêmes fournisseurs et services. Quel bénéfice peut-elle rechercher ?',
                        'explanation' => 'La concentration d’activités peut faciliter l’accès aux fournisseurs spécialisés, aux compétences et à certains services.',
                        'choices' => [
                            [
                                'choice_text' => 'Les avantages de l’agglomération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La fermeture du marché local',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition des économies d’échelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La hausse mécanique de tous les coûts',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une activité utilise beaucoup de foncier industriel mais peu de travailleurs. Quel élément peut peser fortement dans son choix d’emplacement ?',
                        'explanation' => 'Pour une activité très consommatrice d’espace, le coût et la disponibilité du terrain peuvent être déterminants.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût du foncier',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre de touristes étrangers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le taux de change nominal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre d’écoles primaires du pays',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit un site où l’électricité est fiable et disponible. Pourquoi ?',
                        'explanation' => 'Une infrastructure énergétique fiable réduit le risque d’interruptions de production.',
                        'choices' => [
                            [
                                'choice_text' => 'La fiabilité des infrastructures',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La suppression des coûts fixes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La garantie d’un monopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La diminution automatique de la demande',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux régions ont la même taille de population, mais l’une est beaucoup plus spécialisée. Quelle affirmation est correcte ?',
                        'explanation' => 'La taille de la population ne suffit pas à décrire la structure productive d’une région.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles peuvent avoir des structures économiques très différentes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles ont forcément le même PIB',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles ont nécessairement le même chômage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles produisent toujours les mêmes biens',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région proche d’un grand port attire des activités tournées vers le commerce extérieur. Quel mécanisme est plausible ?',
                        'explanation' => 'La proximité du port peut réduire certains coûts logistiques et faciliter les échanges avec l’extérieur.',
                        'choices' => [
                            [
                                'choice_text' => 'Un meilleur accès aux échanges',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des taxes locales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition des importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction certaine de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre le mieux la diversification régionale ?',
                        'explanation' => 'Une région où l’agriculture, l’industrie légère, les services et le tourisme sont tous présents.',
                        'choices' => [
                            [
                                'choice_text' => 'La présence de plusieurs secteurs significatifs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La domination absolue d’un seul secteur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’absence d’activités de service',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La dépendance à un unique produit',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Disparités régionales et emploi',
                'description' => 'Comprendre les écarts d’emploi, de productivité et de revenus entre territoires ainsi que leurs causes possibles.',
                'duration' => 21,
                'passing_score' => 54,
                'questions' => [
                    [
                        'question' => 'Une région connaît un taux de chômage durablement supérieur à celui d’une autre. Que peut-on étudier pour expliquer cet écart ?',
                        'explanation' => 'Les différences sectorielles, les compétences, la mobilité, les infrastructures et la demande de travail peuvent contribuer à expliquer les écarts.',
                        'choices' => [
                            [
                                'choice_text' => 'La structure de l’économie et du marché du travail',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement la météo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement la superficie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de jours fériés nationaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise ferme une usine importante dans une petite région industrielle. Quel effet local peut être direct ?',
                        'explanation' => 'La fermeture réduit la demande de travail et peut aussi affecter les activités qui fournissent des biens ou services à l’usine.',
                        'choices' => [
                            [
                                'choice_text' => 'Une baisse locale de l’emploi',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine de l’emploi',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une augmentation automatique du PIB régional',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse obligatoire des prix alimentaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux régions ont le même nombre d’habitants mais des niveaux de productivité très différents. Quel résultat est plausible ?',
                        'explanation' => 'À population égale, une région plus productive peut générer davantage de production par habitant.',
                        'choices' => [
                            [
                                'choice_text' => 'Un PIB par habitant potentiellement plus élevé dans la région la plus productive',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un même PIB par habitant obligatoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une même spécialisation sectorielle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un même niveau de chômage garanti',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la mobilité des travailleurs peut-elle réduire certains écarts régionaux ?',
                        'explanation' => 'Les travailleurs peuvent se déplacer vers les régions où les possibilités d’emploi sont meilleures, lorsque les coûts de mobilité restent supportables.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut rapprocher les travailleurs des emplois disponibles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle augmente automatiquement les salaires partout',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime les différences de coût de la vie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle rend toutes les régions identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région perd plusieurs jeunes diplômés qui partent travailler ailleurs. Quel risque peut apparaître ?',
                        'explanation' => 'Le départ de travailleurs qualifiés peut réduire le capital humain disponible localement.',
                        'choices' => [
                            [
                                'choice_text' => 'Un affaiblissement possible du capital humain régional',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine de la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique du prix des logements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition des besoins de formation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une collectivité finance une formation adaptée aux besoins des entreprises locales. Quel objectif économique est le plus direct ?',
                        'explanation' => 'La formation peut réduire l’écart entre les compétences disponibles et les compétences recherchées.',
                        'choices' => [
                            [
                                'choice_text' => 'Améliorer l’adéquation des compétences',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire la superficie régionale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter le prix du foncier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les migrations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une disparité d’accès aux services ?',
                        'explanation' => 'Des habitants d’une région disposent de moins d’établissements de santé accessibles à proximité que ceux d’une autre région.',
                        'choices' => [
                            [
                                'choice_text' => 'Un accès différent à un service essentiel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une différence de couleur des bâtiments',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une différence de calendrier scolaire national',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une variation du taux de change',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région investit dans des routes et une connexion Internet plus fiable. Quel effet peut être recherché ?',
                        'explanation' => 'Une meilleure accessibilité peut faciliter l’activité des entreprises et l’accès aux marchés et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire certains coûts d’accès et améliorer l’attractivité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Garantir un prix unique pour tous les biens',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer la concurrence régionale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire automatiquement les salaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région affiche un revenu moyen élevé, mais de fortes différences entre ménages. Que faut-il éviter de conclure ?',
                        'explanation' => 'Un revenu moyen élevé ne signifie pas que tous les ménages ont des revenus élevés ou similaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Que tous les ménages vivent nécessairement dans de bonnes conditions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Que les inégalités peuvent exister',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Que la moyenne ne décrit pas toute la distribution',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Que la répartition des revenus mérite une analyse distincte',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un territoire dépend d’un seul employeur majeur. Quel choc local serait particulièrement important ?',
                        'explanation' => 'Une réduction de l’activité de cet employeur peut provoquer une baisse notable de l’emploi local.',
                        'choices' => [
                            [
                                'choice_text' => 'Une baisse d’activité de l’employeur principal',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une légère variation d’un secteur absent du territoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse des exportations mondiales sans effet local',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse du taux de change national sans autre changement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer uniquement le nombre total d’emplois peut-il être insuffisant entre régions ?',
                        'explanation' => 'Il faut aussi considérer la population, le taux d’activité, le chômage et la structure des emplois.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la taille de la population et les taux du marché du travail comptent aussi',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que seuls les salaires importent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les emplois n’ont aucune valeur informative',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un emploi est toujours identique quel que soit le lieu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Migration et mobilité régionale',
                'description' => 'Applications sur les déplacements des personnes, les incitations économiques et les effets possibles sur les territoires.',
                'duration' => 23,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Quel est un motif économique classique de migration vers une autre région ?',
                        'explanation' => 'Une personne peut se déplacer pour accéder à de meilleures opportunités d’emploi ou de revenu.',
                        'choices' => [
                            [
                                'choice_text' => 'La recherche de meilleures opportunités économiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La suppression de toute dépense',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La garantie d’un logement gratuit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’absence de toute contrainte familiale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région offre davantage d’emplois mais aussi des loyers plus élevés. Que doit considérer un travailleur ?',
                        'explanation' => 'Le gain attendu doit être comparé au coût de la vie et aux autres coûts du déplacement.',
                        'choices' => [
                            [
                                'choice_text' => 'Les avantages et les coûts de la migration',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement le salaire nominal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement le coût du logement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement la distance géographique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quand une région reçoit de nouveaux travailleurs, quelle pression peut apparaître sur certains services locaux ?',
                        'explanation' => 'Une population supplémentaire peut accroître la demande de logements, transports, écoles ou autres services.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse de la demande de certains services',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de tous les prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition du marché du travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction certaine des déplacements',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un travailleur quitte une région où les emplois sont rares pour une région où une entreprise recrute. Quel mécanisme est illustré ?',
                        'explanation' => 'Les différences de perspectives d’emploi peuvent influencer les flux migratoires.',
                        'choices' => [
                            [
                                'choice_text' => 'Le rôle des écarts d’opportunités d’emploi',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La fixation nationale des loyers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition des coûts de mobilité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse obligatoire des salaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel effet positif la migration peut-elle avoir sur la région d’accueil ?',
                        'explanation' => 'Elle peut augmenter l’offre de travail et soutenir la demande locale de biens et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Un apport possible de main-d’œuvre et de demande locale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine de l’activité économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des entreprises existantes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction automatique de la population active',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région perd régulièrement des actifs vers d’autres territoires. Quel problème peut devenir plus difficile ?',
                        'explanation' => 'Le territoire peut rencontrer des difficultés à renouveler certaines compétences et emplois.',
                        'choices' => [
                            [
                                'choice_text' => 'Le renouvellement de la main-d’œuvre locale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La saturation des logements dans la région de départ',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse des besoins en services publics',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition de toute spécialisation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de déménagement peuvent-ils limiter la mobilité des travailleurs ?',
                        'explanation' => 'Ils rendent le déplacement plus coûteux et réduisent le gain net attendu d’une migration.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils diminuent le bénéfice net attendu du déplacement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils augmentent toujours le salaire d’accueil',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils rendent tous les emplois identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils suppriment le différentiel de productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région investit dans la reconnaissance des compétences des nouveaux arrivants. Quel objectif peut-elle viser ?',
                        'explanation' => 'Faciliter l’insertion des travailleurs dans les emplois correspondant à leurs compétences.',
                        'choices' => [
                            [
                                'choice_text' => 'Améliorer l’appariement entre compétences et emplois',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire la taille de la population active',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter le prix des transports',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer la concurrence pour les entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement un effet possible d’une migration sur le marché du travail local ?',
                        'explanation' => 'L’effet dépend notamment des compétences des migrants et de la capacité de l’économie locale à créer des emplois.',
                        'choices' => [
                            [
                                'choice_text' => 'L’effet peut varier selon la structure de l’offre et de la demande de travail',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’effet est toujours une baisse des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’effet est toujours une hausse des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La migration n’a jamais d’effet économique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une étudiante choisit de rester dans sa région parce qu’un emploi proche compense un salaire plus élevé ailleurs. Que montre cette décision ?',
                        'explanation' => 'La mobilité dépend d’un arbitrage entre gains économiques et coûts personnels ou financiers du déplacement.',
                        'choices' => [
                            [
                                'choice_text' => 'Un arbitrage entre le gain attendu et le coût de mobilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une préférence pour la spécialisation régionale uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une absence d’incitation économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une décision indépendante du marché du travail',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une amélioration du transport ferroviaire réduit fortement le temps de trajet entre deux régions. Quel effet peut-elle favoriser ?',
                        'explanation' => 'Elle peut faciliter les déplacements domicile-travail et donc élargir le bassin d’emploi accessible.',
                        'choices' => [
                            [
                                'choice_text' => 'Un élargissement du bassin d’emploi accessible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition des emplois dans les deux régions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une fermeture des marchés du travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Infrastructures et développement régional',
                'description' => 'Étudier le rôle des transports, du numérique et des équipements collectifs dans l’activité régionale.',
                'duration' => 24,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Pourquoi les infrastructures de transport sont-elles importantes pour une région ?',
                        'explanation' => 'Elles facilitent la circulation des personnes et des marchandises et peuvent réduire certains coûts de distance.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles améliorent la connectivité entre les marchés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles garantissent un taux de chômage nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles suppriment le coût du foncier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles fixent les prix des biens',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle route réduit de 20 minutes le trajet entre une zone industrielle et un port. Quel effet peut-elle avoir ?',
                        'explanation' => 'Elle peut réduire certains coûts logistiques et rendre la localisation plus attractive.',
                        'choices' => [
                            [
                                'choice_text' => 'Améliorer l’accès aux échanges',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire automatiquement les impôts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer la concurrence internationale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir une hausse de tous les salaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une bonne connexion Internet peut être particulièrement utile à une entreprise de services numériques située en région éloignée. Pourquoi ?',
                        'explanation' => 'Elle permet de vendre certains services à distance et réduit l’importance de la distance pour certaines activités.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut réduire certaines contraintes liées à la distance',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle rend toutes les activités agricoles inutiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime la nécessité de compétences',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle garantit un marché local illimité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une infrastructure publique ?',
                        'explanation' => 'Une ligne de transport collectif financée et gérée pour desservir la population.',
                        'choices' => [
                            [
                                'choice_text' => 'Une infrastructure de transport collectif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une préférence des consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un salaire privé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une récolte agricole',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région améliore son réseau d’eau potable pour les ménages et les entreprises. Quel bénéfice économique est plausible ?',
                        'explanation' => 'Une meilleure infrastructure peut améliorer la qualité de vie et soutenir certaines activités productives.',
                        'choices' => [
                            [
                                'choice_text' => 'Un soutien au bien-être et à l’activité économique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse obligatoire des exportations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique du chômage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une infrastructure ne crée-t-elle pas nécessairement de développement régional à elle seule ?',
                        'explanation' => 'Son effet dépend aussi de la demande, des compétences, des entreprises et de la façon dont elle est utilisée.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que ses effets dépendent de son utilisation et du contexte local',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’une route n’a jamais d’effet économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que toute infrastructure réduit la production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les infrastructures remplacent les travailleurs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un projet de transport relie plusieurs petites villes à une métropole régionale. Quel mécanisme est recherché ?',
                        'explanation' => 'Le projet peut agrandir le marché accessible et faciliter la circulation des travailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Une meilleure intégration fonctionnelle du territoire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une séparation plus forte des marchés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction du nombre de consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une fermeture des échanges locaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une zone industrielle dispose d’un réseau électrique instable. Quelle conséquence économique est plausible ?',
                        'explanation' => 'Les interruptions peuvent augmenter les coûts et réduire la fiabilité de la production.',
                        'choices' => [
                            [
                                'choice_text' => 'Des coûts de production et des risques d’interruption plus élevés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine de la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des loyers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression de la concurrence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur simple peut aider à mesurer l’accessibilité d’une région ?',
                        'explanation' => 'Le temps ou le coût nécessaire pour atteindre des marchés ou des services importants.',
                        'choices' => [
                            [
                                'choice_text' => 'Le temps ou le coût d’accès aux marchés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur moyenne des bâtiments',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de jours de pluie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le stock d’espèces monétaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région rurale reste mal connectée aux marchés malgré des coûts de production faibles. Quel problème peut-elle rencontrer ?',
                        'explanation' => 'Les producteurs peuvent avoir des difficultés à vendre leur production dans de bonnes conditions.',
                        'choices' => [
                            [
                                'choice_text' => 'Des coûts d’accès au marché trop élevés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une demande locale toujours insuffisante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une production impossible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une interdiction de spécialisation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une infrastructure commune est utilisée par de nombreuses entreprises. Quel avantage économique possible peut-elle offrir ?',
                        'explanation' => 'Elle peut réduire certains coûts de coordination ou d’accès pour plusieurs activités en même temps.',
                        'choices' => [
                            [
                                'choice_text' => 'Des économies de réseau ou d’usage collectif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un monopole privé automatique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des coûts fixes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse garantie des prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Agglomération et économies régionales',
                'description' => 'Notions introductives sur la concentration spatiale des activités et les économies d’agglomération.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Que signifie une économie d’agglomération ?',
                        'explanation' => 'Il s’agit d’avantages économiques qui apparaissent lorsque des activités et des travailleurs sont concentrés dans un même espace.',
                        'choices' => [
                            [
                                'choice_text' => 'Des gains liés à la concentration géographique des activités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse uniforme des prix agricoles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une politique de change régionale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression du commerce',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville regroupe des entreprises technologiques, des ingénieurs et des formations spécialisées. Quel mécanisme peut expliquer cette concentration ?',
                        'explanation' => 'La proximité facilite les échanges de connaissances et l’appariement entre entreprises et travailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'La circulation des compétences et des connaissances',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La disparition des spécialisations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réduction de l’offre de travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fermeture des marchés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles bénéficier de la proximité de fournisseurs spécialisés ?',
                        'explanation' => 'La proximité peut réduire certains coûts de recherche, de transport et de coordination.',
                        'choices' => [
                            [
                                'choice_text' => 'Une baisse possible de certains coûts de coordination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse obligatoire des distances',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression de la demande intermédiaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une diminution automatique de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une forte concentration d’activités finit par provoquer des embouteillages importants. Que montre cette situation ?',
                        'explanation' => 'Les bénéfices de l’agglomération peuvent être accompagnés de coûts liés à la congestion.',
                        'choices' => [
                            [
                                'choice_text' => 'La présence possible de déséconomies de congestion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’agglomération n’a aucun avantage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les infrastructures sont toujours suffisantes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les transports sont gratuits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région attire plusieurs entreprises du même domaine après l’installation d’un premier groupe d’entreprises. Quel phénomène peut être observé ?',
                        'explanation' => 'La présence d’activités déjà implantées peut rendre le territoire plus attractif pour d’autres activités liées.',
                        'choices' => [
                            [
                                'choice_text' => 'Un effet d’attraction cumulative',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition du capital humain',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des externalités',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un isolement économique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre un avantage d’agglomération lié au marché du travail ?',
                        'explanation' => 'Une entreprise trouve plus facilement un salarié spécialisé dans une région où de nombreuses entreprises recherchent la même compétence.',
                        'choices' => [
                            [
                                'choice_text' => 'Un meilleur appariement entre offres et compétences',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une suppression de la mobilité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse nécessaire des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une diminution du nombre d’entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une agglomération peut-elle encourager l’innovation ?',
                        'explanation' => 'La proximité facilite les échanges informels, la circulation des idées et les collaborations.',
                        'choices' => [
                            [
                                'choice_text' => 'La proximité facilite certaines interactions de connaissances',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La concentration interdit les nouveaux produits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’innovation dépend seulement de la distance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les idées ne circulent jamais entre entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise quitte un centre-ville très dense pour une zone périphérique moins chère. Quelle considération peut motiver ce choix ?',
                        'explanation' => 'Elle peut arbitrer entre les avantages de proximité et le coût plus faible du foncier.',
                        'choices' => [
                            [
                                'choice_text' => 'Un arbitrage entre avantages d’agglomération et coût du foncier',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une obligation de quitter la région',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition des marchés urbains',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel coût est typiquement associé à une ville très dense ?',
                        'explanation' => 'La congestion routière peut augmenter les temps de déplacement et les coûts pour les usagers.',
                        'choices' => [
                            [
                                'choice_text' => 'La congestion des transports',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition du commerce',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique du nombre d’emplois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des services',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une concentration de restaurants et de commerces dans un quartier attire davantage de visiteurs. Quel mécanisme peut être à l’œuvre ?',
                        'explanation' => 'La concentration offre plus de choix aux consommateurs et peut renforcer l’attractivité du lieu.',
                        'choices' => [
                            [
                                'choice_text' => 'Un avantage de variété et de proximité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse obligatoire de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un isolement des entreprises',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des économies d’échelle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé résume correctement l’agglomération ?',
                        'explanation' => 'La concentration spatiale peut apporter des avantages, mais aussi générer des coûts comme la congestion ou des prix fonciers élevés.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle combine des avantages et des coûts possibles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle produit uniquement des avantages',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle produit uniquement des coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle n’a aucun lien avec l’économie régionale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Politiques de développement régional',
                'description' => 'Comprendre les instruments utilisés pour réduire certaines disparités et soutenir l’attractivité économique des territoires.',
                'duration' => 23,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => 'Pourquoi une politique de développement régional peut-elle être mise en place ?',
                        'explanation' => 'Elle peut chercher à réduire certaines disparités territoriales et à améliorer les opportunités économiques dans les régions moins favorisées.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire certains écarts territoriaux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer toute concurrence entre régions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre tous les secteurs identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour fixer un prix unique du foncier',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une collectivité finance un programme de formation dans une région où les entreprises signalent un manque de compétences. Quel objectif vise-t-elle ?',
                        'explanation' => 'La formation vise à améliorer l’adéquation entre la main-d’œuvre disponible et les besoins des entreprises.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire les pénuries de compétences',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter le coût du travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer la mobilité professionnelle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une aide publique encourage l’installation d’entreprises dans une région en difficulté. Quel effet direct cherche-t-elle souvent ?',
                        'explanation' => 'Elle cherche à rendre la localisation plus attractive et à stimuler l’investissement local.',
                        'choices' => [
                            [
                                'choice_text' => 'Stimuler l’investissement régional',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire automatiquement la demande locale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les activités existantes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Interdire les importations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique régionale doit-elle considérer son coût budgétaire ?',
                        'explanation' => 'Les ressources publiques sont limitées et les montants consacrés au programme ont des usages alternatifs.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les fonds publics ont un coût d’opportunité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toute dépense publique est gratuite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le budget ne concerne pas les régions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une subvention ne modifie jamais les comportements',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région investit dans une université et des centres de formation. Quel effet de long terme peut être recherché ?',
                        'explanation' => 'L’investissement peut renforcer le capital humain et l’attractivité du territoire.',
                        'choices' => [
                            [
                                'choice_text' => 'Renforcer le capital humain régional',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire le nombre de diplômés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les coûts de transport',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les activités innovantes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un programme régional finance une route vers une zone industrielle mais aucun projet privé n’apparaît. Quelle conclusion prudente peut-on tirer ?',
                        'explanation' => 'L’infrastructure seule ne suffit pas nécessairement ; d’autres conditions peuvent être nécessaires pour attirer l’activité.',
                        'choices' => [
                            [
                                'choice_text' => 'L’effet dépend aussi d’autres conditions économiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Toute infrastructure est inutile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les entreprises ne réagissent jamais aux coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La route réduit toujours la production',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important lorsqu’une région cherche à attirer un secteur particulier ?',
                        'explanation' => 'Elle doit tenir compte de ses compétences, de ses infrastructures et des liens avec les activités déjà présentes.',
                        'choices' => [
                            [
                                'choice_text' => 'La cohérence avec les ressources et les compétences locales',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La priorité à un secteur sans analyser le territoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’absence totale d’infrastructures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des activités existantes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique soutient plusieurs secteurs au lieu d’un seul. Quel objectif peut-elle poursuivre ?',
                        'explanation' => 'Elle peut chercher à diversifier l’économie régionale et à réduire l’exposition à un choc sectoriel.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire la dépendance à un seul secteur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter la spécialisation absolue',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éliminer toute concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire le capital humain',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région reçoit des fonds pour améliorer son transport public. Pourquoi cela peut-il aider le marché du travail ?',
                        'explanation' => 'De meilleurs transports peuvent élargir la zone dans laquelle les travailleurs peuvent accepter un emploi.',
                        'choices' => [
                            [
                                'choice_text' => 'Élargir le bassin d’emploi accessible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire la productivité des travailleurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les emplois périphériques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Rendre les déplacements impossibles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut être suivi pour évaluer une politique de développement régional ?',
                        'explanation' => 'L’évolution de l’emploi, du revenu, de la productivité ou de l’accès aux services peut fournir des informations utiles.',
                        'choices' => [
                            [
                                'choice_text' => 'L’évolution de plusieurs résultats économiques et sociaux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement le nombre de bâtiments publics',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement la superficie de la région',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement la météo',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique régionale ne doit-elle pas être jugée seulement sur le nombre d’entreprises installées ?',
                        'explanation' => 'Le nombre d’entreprises ne renseigne pas à lui seul sur la qualité des emplois, la productivité ou la durabilité des résultats.',
                        'choices' => [
                            [
                                'choice_text' => 'Il faut aussi examiner la qualité et les effets économiques des résultats',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre d’entreprises n’a jamais d’intérêt',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seuls les loyers sont importants',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La création d’entreprise garantit toujours le développement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Spécialisation, chocs et résilience régionale',
                'description' => 'Exercices de synthèse sur les spécialisations territoriales, les chocs économiques et la capacité d’adaptation des régions.',
                'duration' => 26,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Une région dépend fortement des exportations d’un seul produit. Pourquoi est-elle vulnérable à une baisse mondiale de sa demande ?',
                        'explanation' => 'Une baisse de la demande peut toucher simultanément la production, l’emploi et les revenus liés au secteur dominant.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un même choc peut affecter une grande partie de l’économie régionale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la demande locale disparaît forcément',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les infrastructures deviennent inutiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la population cesse de travailler',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel territoire est généralement plus diversifié ?',
                        'explanation' => 'Celui où plusieurs secteurs représentent des parts significatives de l’emploi et de la production.',
                        'choices' => [
                            [
                                'choice_text' => 'Une région où plusieurs secteurs sont importants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une région dépendant d’un seul produit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une région sans activité de services',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une région avec un seul employeur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région connaît une fermeture d’usines mais possède aussi un secteur de services en croissance. Quel avantage cela peut-il offrir ?',
                        'explanation' => 'Le secteur en croissance peut absorber une partie des travailleurs et des dépenses perdues dans le secteur en déclin.',
                        'choices' => [
                            [
                                'choice_text' => 'Une capacité d’amortir partiellement le choc',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une garantie de stabilité parfaite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition du chômage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique de tous les salaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région agricole adopte des activités de transformation alimentaire locales. Quel effet peut-elle rechercher ?',
                        'explanation' => 'Transformer localement certains produits peut créer davantage de valeur et diversifier les activités.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter la valeur ajoutée locale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire le nombre d’activités',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les marchés extérieurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Baisser automatiquement la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les liens entre secteurs sont-ils importants lors d’un choc régional ?',
                        'explanation' => 'Un choc dans un secteur peut se transmettre à ses fournisseurs, prestataires et commerces locaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Les secteurs peuvent être reliés par des relations de demande et d’offre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Chaque secteur est totalement isolé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les entreprises ne dépendent jamais de fournisseurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les marchés régionaux sont toujours indépendants',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région améliore les compétences numériques de ses travailleurs après une baisse d’emploi industriel. Quel objectif peut-elle poursuivre ?',
                        'explanation' => 'Elle cherche à faciliter la reconversion vers de nouvelles activités.',
                        'choices' => [
                            [
                                'choice_text' => 'Favoriser la reconversion professionnelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire les compétences disponibles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter la dépendance à l’industrie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer la mobilité professionnelle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région conserve une forte spécialisation mais développe aussi des infrastructures modernes et des services. Quel effet peut-on attendre sur sa résilience ?',
                        'explanation' => 'Une meilleure infrastructure et plus de services peuvent faciliter l’adaptation, même si la spécialisation reste importante.',
                        'choices' => [
                            [
                                'choice_text' => 'Une capacité d’adaptation potentiellement renforcée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une vulnérabilité nécessairement nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de toute spécialisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de l’emploi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un choc réduit la production d’un secteur régional, mais la demande pour d’autres services augmente. Quel mécanisme peut compenser partiellement la perte initiale ?',
                        'explanation' => 'La réallocation de l’emploi et des dépenses vers les secteurs encore dynamiques peut amortir le choc.',
                        'choices' => [
                            [
                                'choice_text' => 'Une réallocation des ressources vers les secteurs dynamiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une suppression de toute demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une interdiction de mobilité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre le mieux une dépendance économique régionale ?',
                        'explanation' => 'Une grande partie des emplois d’une région dépend d’un même secteur ou d’un même groupe d’entreprises.',
                        'choices' => [
                            [
                                'choice_text' => 'Une forte concentration des emplois autour d’une activité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une économie composée de nombreux secteurs équilibrés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une faible spécialisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une grande diversité d’employeurs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région exportatrice subit une hausse soudaine du coût du transport. Quel effet peut apparaître ?',
                        'explanation' => 'Les produits peuvent devenir moins compétitifs sur les marchés extérieurs si le surcoût est important.',
                        'choices' => [
                            [
                                'choice_text' => 'Une baisse possible de la compétitivité-coût',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine des exportations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition du coût logistique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une augmentation automatique de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capacité d’adaptation d’une région dépend-elle aussi du capital humain ?',
                        'explanation' => 'Des travailleurs mieux formés peuvent plus facilement se reconvertir lorsque la structure des emplois change.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les compétences facilitent la reconversion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la formation fixe les prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le capital humain remplace les infrastructures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les travailleurs ne changent jamais d’activité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cas pratiques d’économie régionale',
                'description' => 'Mise en application des notions de localisation, mobilité, infrastructures, agglomération et politique régionale.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une nouvelle entreprise choisit une région où le terrain est abordable, les routes sont bonnes et plusieurs salariés qualifiés sont disponibles. Quelle conclusion est la plus pertinente ?',
                        'explanation' => 'La décision combine plusieurs facteurs de localisation plutôt qu’un seul déterminant.',
                        'choices' => [
                            [
                                'choice_text' => 'Le choix résulte de plusieurs conditions territoriales favorables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seul le prix du terrain compte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La population n’a aucun rôle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les infrastructures ne sont jamais pertinentes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région A a un PIB de 20 milliards de dirhams et 2 millions d’habitants. Quel est son PIB par habitant ?',
                        'explanation' => 'Le PIB par habitant se calcule en divisant le PIB total par la population. Ici, 20 milliards ÷ 2 millions = 10 000 dirhams par habitant.',
                        'choices' => [
                            [
                                'choice_text' => '10 000 dirhams',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1 000 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5 000 dirhams',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20 000 dirhams',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région montagneuse dispose de coûts de transport élevés mais d’un patrimoine naturel attractif. Quelle stratégie peut contribuer à son développement ?',
                        'explanation' => 'La région peut valoriser le tourisme et améliorer progressivement son accessibilité afin de réduire sa dépendance à des activités peu adaptées au territoire.',
                        'choices' => [
                            [
                                'choice_text' => 'Valoriser un atout local tout en améliorant l’accessibilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Abandonner toute activité économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Interdire les visiteurs extérieurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les infrastructures de transport',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville moyenne se situe entre plusieurs bassins de production et de consommation. Quel rôle peut-elle jouer ?',
                        'explanation' => 'Sa position peut lui permettre de fournir des services, des emplois et des fonctions logistiques aux territoires voisins.',
                        'choices' => [
                            [
                                'choice_text' => 'Un pôle de services et d’échanges pour les territoires voisins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un espace sans fonction économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un marché totalement isolé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une région indépendante des transports',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise hésite entre deux régions. La région X a une main-d’œuvre moins chère, tandis que la région Y a des salariés plus productifs et de meilleures infrastructures. Que doit comparer l’entreprise ?',
                        'explanation' => 'Elle doit comparer le coût et la qualité des facteurs de production ainsi que les autres coûts liés à chaque localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût total et la productivité associés à chaque localisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement le salaire nominal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement la superficie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement la population totale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une amélioration des transports permet à un travailleur de faire 90 minutes de trajet au lieu de 150 minutes pour rejoindre un bassin d’emploi. Quel effet économique est le plus direct ?',
                        'explanation' => 'La baisse du temps de trajet peut rendre accessibles davantage d’emplois sans déménagement.',
                        'choices' => [
                            [
                                'choice_text' => 'Un élargissement de la zone d’emploi accessible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une suppression des emplois locaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique du salaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une diminution certaine de la population active',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région A produit 50 unités avec 10 travailleurs et une région B produit 72 unités avec 12 travailleurs. Quelle région a la productivité moyenne du travail la plus élevée ?',
                        'explanation' => 'La productivité est de 5 unités par travailleur dans A et de 6 dans B ; B est donc plus productive selon cet indicateur.',
                        'choices' => [
                            [
                                'choice_text' => 'La région B, avec 6 unités par travailleur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La région A, avec 5 unités par travailleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux régions, avec 5 unités par travailleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Impossible à comparer',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région réduit fortement les délais administratifs pour créer une entreprise. Pourquoi cette mesure peut-elle soutenir l’activité ?',
                        'explanation' => 'Des démarches plus simples peuvent réduire certains coûts d’entrée et faciliter la création ou l’implantation d’entreprises.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut réduire certains coûts administratifs d’entrée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle garantit la réussite de chaque entreprise',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime la concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle fixe les profits des entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région développe un parc d’activités proche d’une université et d’un réseau de transport. Quel objectif territorial peut-elle rechercher ?',
                        'explanation' => 'Cette combinaison peut rapprocher entreprises, compétences et infrastructures et favoriser l’attractivité économique.',
                        'choices' => [
                            [
                                'choice_text' => 'Créer un environnement favorable à l’activité et à l’emploi',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Séparer les entreprises des travailleurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire l’offre de compétences',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éloigner les activités des marchés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région reçoit des investissements mais une grande partie des bénéfices repart vers d’autres territoires. Quelle question est utile pour évaluer l’impact local ?',
                        'explanation' => 'Il faut examiner les emplois, revenus et achats locaux réellement générés par ces investissements.',
                        'choices' => [
                            [
                                'choice_text' => 'Mesurer les retombées économiques effectivement conservées localement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Compter seulement le nombre de bâtiments construits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Observer uniquement la superficie occupée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer les fournisseurs locaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une région voisine adopte une politique similaire pour attirer les mêmes entreprises. Que doit considérer un décideur régional ?',
                        'explanation' => 'La politique doit être évaluée en tenant compte des avantages propres du territoire et des coûts de la concurrence entre régions.',
                        'choices' => [
                            [
                                'choice_text' => 'Les avantages relatifs du territoire et le coût de la politique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement le montant de l’aide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement le nombre d’habitants',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement la distance à la capitale',
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