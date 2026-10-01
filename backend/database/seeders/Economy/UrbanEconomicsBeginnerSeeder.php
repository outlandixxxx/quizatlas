<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class UrbanEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'urban-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux de l’économie urbaine',
                'description' => 'Notions de base sur les villes, l’urbanisation, la localisation des activités et l’organisation de l’espace urbain.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Pourquoi les villes concentrent-elles souvent de nombreuses activités économiques ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'La proximité entre entreprises, travailleurs, clients et services peut faciliter les échanges',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les terres urbaines sont gratuites',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les transports y sont toujours inexistants',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises n’ont aucun coût',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène décrit le mieux l’urbanisation ?',
                        'explanation' => 'L’urbanisation correspond à l’augmentation de la part de la population vivant dans les zones urbaines. Elle accompagne souvent la transformation des activités et des territoires.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation de la part de la population vivant dans les zones urbaines',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une réduction de toutes les activités agricoles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des loyers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition des transports',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit de s’installer près de nombreuses autres entreprises du même secteur. Quel avantage peut-elle rechercher ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Bénéficier de certaines économies d’agglomération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Éviter toute concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer tous les coûts fonciers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Échapper à la demande locale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur influence directement la localisation d’un ménage dans une ville ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût du logement et le temps de déplacement vers ses activités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement la météo mondiale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement le taux de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement le prix des exportations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix du foncier peut-il être élevé dans un centre-ville très demandé ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que l’espace y est limité alors que de nombreux ménages et activités souhaitent y accéder',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le foncier urbain est toujours subventionné',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les bâtiments n’ont aucun coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les transports y sont gratuits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une économie d’agglomération ?',
                        'explanation' => 'Les économies d’agglomération viennent notamment des avantages liés à la proximité : marché du travail plus large, fournisseurs spécialisés, partage d’informations et accès à des clients.',
                        'choices' => [
                            [
                                'choice_text' => 'Des entreprises partagent un bassin de travailleurs spécialisés et bénéficient de fournisseurs proches',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Chaque entreprise produit totalement isolée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les ménages quittent tous la ville',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les routes sont volontairement fermées',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une famille s’éloigne du centre pour payer un logement moins cher mais doit voyager plus longtemps. Quel arbitrage apparaît ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Un arbitrage entre coût du logement et coût ou temps de transport',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un arbitrage entre salaire et inflation uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse du coût d’opportunité nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de la demande de logements',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est un service urbain ?',
                        'explanation' => 'Les services et infrastructures urbains contribuent à la qualité de vie et à l’attractivité des quartiers. Leur construction et leur entretien utilisent toutefois des ressources financières.',
                        'choices' => [
                            [
                                'choice_text' => 'La collecte des déchets',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le taux de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix mondial du pétrole uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La balance commerciale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la densité de population est-elle importante en économie urbaine ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle influence la demande de logements, de transports et de services dans un espace donné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle fixe automatiquement les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime les coûts de déplacement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle rend tous les biens publics',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat peut accompagner une forte concentration d’emplois dans une même zone ?',
                        'explanation' => 'Le marché du travail urbain dépend de la localisation des entreprises et des travailleurs. L’accessibilité et la diversité des emplois peuvent influencer les décisions de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Une intensification des déplacements domicile-travail vers cette zone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition des trajets domicile-travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la population',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des besoins de transport',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'La structure spatiale d’une ville désigne notamment :',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'La manière dont logements, emplois, commerces et services sont répartis dans l’espace',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le niveau annuel des exportations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le montant des réserves de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La masse monétaire nationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Logement et marché foncier',
                'description' => 'Introduction au marché du logement, aux loyers, aux prix du foncier et aux arbitrages de localisation.',
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Si la demande de logements augmente dans une zone où l’offre est difficile à accroître rapidement, quelle pression peut apparaître ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Une pression à la hausse sur les loyers ou les prix',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine des loyers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la population nationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le foncier situé à proximité d’un grand centre d’emploi peut-il être valorisé ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Il réduit potentiellement certaines distances ou durées de déplacement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il est toujours plus grand',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il élimine les impôts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il supprime les coûts de construction',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville autorise davantage de constructions sur une zone où la demande de logements est forte. Quel effet peut-on envisager à long terme ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation de l’offre de logements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une réduction obligatoire de l’offre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition du foncier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un doublement automatique des salaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel coût est directement associé au fait d’habiter très loin de son lieu de travail ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût du logement peut être plus faible, mais le ménage peut supporter davantage de coûts ou de temps de transport',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le coût de transport disparaît',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le ménage reçoit automatiquement une subvention',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le logement devient un bien public',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux logements de même superficie peuvent-ils avoir des prix différents ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Leur localisation, leur qualité, leur accessibilité et les services environnants peuvent différer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La superficie détermine toujours à elle seule le prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les prix sont indépendants de toute caractéristique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tous les logements urbains ont nécessairement le même prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un ménage compare deux appartements : l’un est moins cher mais très éloigné, l’autre coûte plus cher mais est proche du travail. Quelle approche est pertinente ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Comparer le coût total du logement et des déplacements pour chaque option',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Choisir toujours le logement le moins cher',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer le temps de trajet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Comparer uniquement la couleur des bâtiments',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène peut contribuer à une hausse du prix du foncier autour d’une nouvelle ligne de transport bien connectée ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration de l’accessibilité peut rendre la zone plus attractive',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition des emplois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des services urbains',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement l’offre de logements ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle dépend notamment du nombre de logements disponibles et de la capacité à en construire de nouveaux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle dépend uniquement du revenu des consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne dépend jamais des règles d’urbanisme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est toujours parfaitement flexible à court terme',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une réglementation limite la hauteur des bâtiments dans un quartier très demandé. Quel effet économique peut-elle contribuer à produire ?',
                        'explanation' => 'Les écarts entre quartiers peuvent concerner les revenus, l’emploi, le logement, les transports ou les services. Ces dimensions peuvent interagir et renforcer certains écarts spatiaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut limiter la capacité à augmenter l’offre de logements dans cette zone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle garantit toujours une baisse des loyers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle augmente automatiquement les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime toute demande de logement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logements proches de nombreux services peuvent-ils être plus attractifs ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils réduisent certains coûts de déplacement et donnent un accès plus pratique aux services',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils sont forcément plus grands',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils n’ont jamais de charges',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils sont toujours moins chers',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du revenu d’un ménage peut accroître sa demande pour un logement de meilleure qualité. Quel mécanisme est illustré ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Les préférences et la capacité de paiement influencent la demande de logement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le logement n’est pas un bien économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande de logement ne dépend jamais du revenu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le foncier devient automatiquement abondant',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Transports, déplacements et congestion',
                'description' => 'Comprendre les déplacements urbains, les coûts de transport, la congestion et les effets économiques des réseaux de mobilité.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Qu’appelle-t-on congestion routière ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Une situation où de nombreux véhicules ralentissent mutuellement la circulation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une réduction volontaire des routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse du prix des logements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une absence totale de déplacements',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un conducteur supplémentaire rejoint une route déjà très chargée, quel coût peut-il imposer aux autres usagers ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Un temps de déplacement supplémentaire dû à l’augmentation des ralentissements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique de leur salaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction de leurs dépenses alimentaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse de la population',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les transports publics peuvent-ils avoir un rôle économique important en ville ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils permettent de déplacer de nombreux passagers et peuvent réduire la dépendance à la voiture',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils rendent tous les logements gratuits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils éliminent tout besoin de routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils suppriment les coûts d’exploitation des entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville ouvre une nouvelle station de tramway près d’un quartier résidentiel. Quel changement est plausible ?',
                        'explanation' => 'Les écarts entre quartiers peuvent concerner les revenus, l’emploi, le logement, les transports ou les services. Ces dimensions peuvent interagir et renforcer certains écarts spatiaux.',
                        'choices' => [
                            [
                                'choice_text' => 'L’accessibilité du quartier peut s’améliorer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le quartier devient inaccessible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les emplois disparaissent nécessairement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande de logements tombe automatiquement à zéro',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel coût est un coût de transport urbain ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Le carburant payé pour effectuer un déplacement en voiture',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le revenu fiscal d’un autre pays',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût mondial des céréales uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La masse monétaire internationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le temps de trajet est-il une dimension économique importante ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Le temps consacré au déplacement ne peut pas être utilisé simultanément pour travailler, étudier ou se reposer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le temps n’a jamais de valeur économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il ne dépend jamais de la distance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace toujours le prix du logement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si une route devient beaucoup plus rapide mais que le trafic augmente ensuite fortement, quel phénomène peut apparaître ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Une partie du gain de temps initial peut être réduite par une nouvelle congestion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tous les trajets deviennent gratuits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La route devient inutile immédiatement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix des logements devient nécessairement nul',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une externalité de congestion ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Un automobiliste retarde d’autres usagers en augmentant la densité du trafic',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un piéton lit un livre chez lui',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une entreprise paie son loyer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un ménage cuisine son dîner',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe de congestion peut-elle être envisagée dans certaines villes ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour faire prendre en compte aux usagers une partie du coût qu’ils imposent au réseau congestionné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter automatiquement la vitesse de toutes les voitures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer tous les transports publics',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre l’usage des routes illégal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un ménage choisit entre voiture, bus et vélo pour aller travailler. Quel élément économique peut influencer son choix ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Le prix, le temps, la fiabilité et la commodité de chaque mode',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement la taille de la ville',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement la météo mondiale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement le prix des exportations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne connexion entre plusieurs modes de transport peut-elle améliorer la mobilité ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle facilite les trajets combinant par exemple marche, bus et train',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime toute distance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle interdit les déplacements individuels',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle rend tous les trajets identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Emploi, activités et agglomération',
                'description' => 'Applications sur les marchés du travail urbains, la concentration des emplois et les avantages de proximité entre acteurs.',
                'duration' => 23,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Pourquoi un grand nombre d’entreprises dans une ville peut-il attirer des travailleurs ?',
                        'explanation' => 'Le marché du travail urbain dépend de la localisation des entreprises et des travailleurs. L’accessibilité et la diversité des emplois peuvent influencer les décisions de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’une concentration d’emplois offre davantage d’opportunités professionnelles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les salaires sont toujours identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le logement est toujours gratuit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il n’existe aucune concurrence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise bénéficie d’un bassin local de travailleurs possédant des compétences proches de ses besoins. Quel avantage d’agglomération est illustré ?',
                        'explanation' => 'Les économies d’agglomération viennent notamment des avantages liés à la proximité : marché du travail plus large, fournisseurs spécialisés, partage d’informations et accès à des clients.',
                        'choices' => [
                            [
                                'choice_text' => 'Un meilleur appariement entre emplois et compétences',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des taxes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de la concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse du coût du foncier à zéro',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une forte concentration d’entreprises peut faciliter la diffusion d’idées entre salariés et entreprises voisines. Pourquoi ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'La proximité favorise certains échanges d’informations et de connaissances',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La distance n’a aucun effet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les idées ne circulent jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les entreprises cessent d’innover',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut encourager une entreprise à s’installer dans une grande ville ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'L’accès à un marché de clients relativement important',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’absence totale de clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’interdiction de recruter',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition des services',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les salaires peuvent-ils différer entre deux zones urbaines ?',
                        'explanation' => 'Le marché du travail urbain dépend de la localisation des entreprises et des travailleurs. L’accessibilité et la diversité des emplois peuvent influencer les décisions de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Les niveaux de productivité, de demande de travail et de coût de la vie peuvent être différents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les salaires sont toujours fixés mondialement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les différences régionales sont impossibles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre d’entreprises n’a jamais d’importance',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise trouve plus facilement des fournisseurs spécialisés dans une grande zone industrielle. Quel mécanisme est à l’œuvre ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'La proximité géographique réduit certains coûts de recherche et de coordination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La proximité augmente toujours les coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les fournisseurs deviennent inutiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande disparaît',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si des travailleurs quittent une petite ville pour une métropole offrant davantage d’emplois, quel phénomène observe-t-on ?',
                        'explanation' => 'Le marché du travail urbain dépend de la localisation des entreprises et des travailleurs. L’accessibilité et la diversité des emplois peuvent influencer les décisions de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Une migration liée aux opportunités économiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse du capital humain mondial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique du taux de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression de l’offre de travail',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel effet une meilleure accessibilité d’une zone peut-elle avoir sur les entreprises ?',
                        'explanation' => 'L’accessibilité mesure la facilité avec laquelle un lieu peut être relié à des emplois, services ou autres destinations. Elle dépend notamment du réseau de transport et du temps de trajet.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut élargir leur accès aux travailleurs, clients ou fournisseurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle les coupe des marchés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime leurs coûts fixes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle interdit l’investissement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût de la vie peut-il influencer les choix des travailleurs entre les villes ?',
                        'explanation' => 'Le marché du travail urbain dépend de la localisation des entreprises et des travailleurs. L’accessibilité et la diversité des emplois peuvent influencer les décisions de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Un salaire plus élevé peut être compensé en partie par des dépenses de logement et d’autres coûts plus importants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le salaire nominal est toujours la seule variable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les logements n’ont aucun prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût de la vie n’a aucun rapport avec la localisation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre un marché du travail urbain ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Des entreprises recrutent des travailleurs tandis que ces derniers offrent leur travail en échange d’un salaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un marché réservé uniquement aux logements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un marché sans acheteurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un marché uniquement financier',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle zone d’activités attire des entreprises et des travailleurs. Quel effet peut accompagner cette dynamique ?',
                        'explanation' => 'Le marché du travail urbain dépend de la localisation des entreprises et des travailleurs. L’accessibilité et la diversité des emplois peuvent influencer les décisions de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation de la demande locale de logements et de services',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition automatique des services',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse nécessaire du nombre de ménages',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des transports',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Services publics et qualité de vie urbaine',
                'description' => 'Introduction au rôle des services publics urbains, des infrastructures et de la qualité de vie dans les décisions économiques.',
                'duration' => 21,
                'passing_score' => 54,
                'questions' => [
                    [
                        'question' => 'Lequel est un exemple d’infrastructure urbaine ?',
                        'explanation' => 'Les services et infrastructures urbains contribuent à la qualité de vie et à l’attractivité des quartiers. Leur construction et leur entretien utilisent toutefois des ressources financières.',
                        'choices' => [
                            [
                                'choice_text' => 'Un réseau d’adduction d’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le taux d’inflation mondial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La balance commerciale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le taux de change',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les services publics locaux peuvent-ils influencer la localisation des ménages ?',
                        'explanation' => 'Les services et infrastructures urbains contribuent à la qualité de vie et à l’attractivité des quartiers. Leur construction et leur entretien utilisent toutefois des ressources financières.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils modifient la qualité de vie et les avantages associés à un quartier',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils fixent les salaires privés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils suppriment toute différence entre quartiers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils rendent tous les logements identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une municipalité améliore l’éclairage et la voirie d’un quartier. Quel effet est plausible ?',
                        'explanation' => 'Les écarts entre quartiers peuvent concerner les revenus, l’emploi, le logement, les transports ou les services. Ces dimensions peuvent interagir et renforcer certains écarts spatiaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Le quartier peut devenir plus accessible et plus attractif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le quartier devient nécessairement vide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La population nationale double',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les coûts de transport disparaissent partout',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les parcs urbains peuvent-ils avoir une valeur économique pour les habitants ?',
                        'explanation' => 'Les services et infrastructures urbains contribuent à la qualité de vie et à l’attractivité des quartiers. Leur construction et leur entretien utilisent toutefois des ressources financières.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils offrent des espaces de loisirs et certains bénéfices liés à la qualité de vie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils produisent automatiquement de la monnaie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils remplacent tous les logements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils suppriment les transports',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville investit dans une station de traitement des eaux usées. Quel objectif est directement lié à cet investissement ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Améliorer la qualité de l’environnement et de l’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire le nombre d’emplois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les prix des logements partout',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les réseaux d’eau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la fourniture de services urbains demande-t-elle des ressources financières ?',
                        'explanation' => 'Les services et infrastructures urbains contribuent à la qualité de vie et à l’attractivité des quartiers. Leur construction et leur entretien utilisent toutefois des ressources financières.',
                        'choices' => [
                            [
                                'choice_text' => 'La construction, l’entretien et le fonctionnement des infrastructures ont des coûts',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les infrastructures sont toujours gratuites à produire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les villes n’ont pas de dépenses',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les services publics n’utilisent jamais de travail',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsque plusieurs habitants profitent d’un service sans contribuer suffisamment à son financement ?',
                        'explanation' => 'Les services et infrastructures urbains contribuent à la qualité de vie et à l’attractivité des quartiers. Leur construction et leur entretien utilisent toutefois des ressources financières.',
                        'choices' => [
                            [
                                'choice_text' => 'Une difficulté de financement collectif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique du nombre d’habitants',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine de la productivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse du besoin de maintenance',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une école publique bien desservie par les transports peut rendre un quartier plus attractif pour certaines familles. Pourquoi ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'L’accès à un service recherché augmente l’utilité de la localisation pour ces ménages',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les transports n’ont aucun coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que tous les quartiers deviennent identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le foncier devient gratuit',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur simple peut aider à comparer l’accès à un service urbain ?',
                        'explanation' => 'Les services et infrastructures urbains contribuent à la qualité de vie et à l’attractivité des quartiers. Leur construction et leur entretien utilisent toutefois des ressources financières.',
                        'choices' => [
                            [
                                'choice_text' => 'Le temps moyen nécessaire pour atteindre ce service depuis les logements concernés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement le prix des exportations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le montant des réserves de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La production agricole nationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’entretien d’une route est-il économiquement important ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Une infrastructure dégradée peut augmenter les coûts de déplacement et réduire sa capacité de service',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une route usée améliore toujours les trajets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’entretien n’a aucune relation avec les coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les routes n’ont aucune durée de vie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville investit dans l’accès à l’eau potable dans un quartier mal desservi. Quel objectif social et économique peut être poursuivi ?',
                        'explanation' => 'Les services et infrastructures urbains contribuent à la qualité de vie et à l’attractivité des quartiers. Leur construction et leur entretien utilisent toutefois des ressources financières.',
                        'choices' => [
                            [
                                'choice_text' => 'Améliorer l’accès à un service essentiel et réduire certaines inégalités d’accès',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire volontairement la santé publique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les distances quotidiennes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer tout investissement futur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Développement spatial et disparités urbaines',
                'description' => 'Étude introductive des écarts entre quartiers, de l’étalement urbain, des transports et des politiques de développement spatial.',
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Que signifie une disparité spatiale au sein d’une ville ?',
                        'explanation' => 'Les écarts entre quartiers peuvent concerner les revenus, l’emploi, le logement, les transports ou les services. Ces dimensions peuvent interagir et renforcer certains écarts spatiaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Une différence importante entre zones en matière de revenus, d’emplois, de services ou d’accessibilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une différence uniquement entre pays',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une égalité parfaite entre quartiers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une variation du taux de change',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène décrit l’étalement urbain ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'L’extension des zones bâties vers des espaces plus éloignés du centre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La concentration de toute la population dans un immeuble',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fermeture des routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse de la superficie urbaine',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’étalement urbain peut-il augmenter les besoins de transport ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Les logements et activités sont plus dispersés dans l’espace',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les distances deviennent toujours nulles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les emplois disparaissent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les transports sont inutiles en périphérie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une zone périphérique possède moins d’emplois locaux et dépend fortement du centre-ville. Quel coût peut devenir important ?',
                        'explanation' => 'Le marché du travail urbain dépend de la localisation des entreprises et des travailleurs. L’accessibilité et la diversité des emplois peuvent influencer les décisions de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût quotidien des déplacements domicile-travail',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le coût de change international',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût des exportations agricoles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La masse monétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type de politique peut chercher à réduire les disparités entre quartiers ?',
                        'explanation' => 'Les écarts entre quartiers peuvent concerner les revenus, l’emploi, le logement, les transports ou les services. Ces dimensions peuvent interagir et renforcer certains écarts spatiaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Investir davantage dans les transports et services des zones moins bien desservies',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire les services dans les zones défavorisées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Interdire tout investissement local',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les données urbaines',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une zone bénéficie de nouvelles entreprises, d’emplois et de transports. Quel mécanisme peut renforcer son attractivité ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Des effets cumulatifs entre emplois, accessibilité, ménages et services',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse obligatoire de l’activité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une diminution automatique du capital humain',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écarts de prix du logement peuvent-ils être liés aux disparités urbaines ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Les ménages valorisent différemment les quartiers selon l’accès aux emplois, services, transports et aménités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les logements ont le même emplacement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les prix sont sans rapport avec la localisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les quartiers ne fournissent aucun avantage différent',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une municipalité construit une nouvelle route reliant une périphérie isolée à un centre d’emploi. Quel effet peut-elle chercher à obtenir ?',
                        'explanation' => 'Le marché du travail urbain dépend de la localisation des entreprises et des travailleurs. L’accessibilité et la diversité des emplois peuvent influencer les décisions de localisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire le temps ou le coût d’accès aux opportunités économiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter les distances',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les emplois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire la mobilité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte concentration de pauvreté dans un quartier peut-elle être difficile à corriger rapidement ?',
                        'explanation' => 'Les écarts entre quartiers peuvent concerner les revenus, l’emploi, le logement, les transports ou les services. Ces dimensions peuvent interagir et renforcer certains écarts spatiaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Les difficultés d’emploi, de logement, de transport et de services peuvent se renforcer mutuellement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une seule variable explique toujours la pauvreté',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les quartiers changent instantanément',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les politiques locales n’ont aucun coût',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est pertinent pour étudier l’accessibilité d’un quartier ?',
                        'explanation' => 'Les écarts entre quartiers peuvent concerner les revenus, l’emploi, le logement, les transports ou les services. Ces dimensions peuvent interagir et renforcer certains écarts spatiaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Le nombre d’emplois ou de services accessibles dans un temps de trajet donné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre de billets de banque nationaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La production mondiale de pétrole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le taux de change',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une amélioration du réseau de transport fait baisser la durée de trajet entre une périphérie et le centre. Quel résultat est plausible ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Le marché du travail accessible aux habitants de la périphérie peut s’élargir',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tous les salaires deviennent identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le logement disparaît',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les entreprises cessent de recruter',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Économie urbaine appliquée',
                'description' => 'Cas pratiques pour relier logement, emploi, transport, foncier, congestion et services publics.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une ligne de transport rapide relie un quartier résidentiel à plusieurs zones d’emploi. Quel changement économique est le plus directement attendu ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration de l’accessibilité des travailleurs aux emplois',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition de la demande de travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de tous les loyers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des logements',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un centre-ville attire beaucoup de commerces, mais les loyers commerciaux y sont élevés. Quel compromis peut expliquer ce phénomène ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Les entreprises paient davantage pour une localisation offrant un accès important à la clientèle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les loyers élevés n’ont aucun rapport avec la localisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les commerces n’ont besoin d’aucun client',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le centre-ville est toujours moins accessible',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un ménage quitte un centre-ville pour un logement moins cher en périphérie. Quel coût supplémentaire peut-il devoir supporter ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Des trajets plus longs vers le travail ou les services',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse obligatoire de son revenu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de ses dépenses',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique du prix des transports',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise de logiciels s’installe dans un quartier où se trouvent déjà beaucoup de travailleurs qualifiés. Quel avantage recherche-t-elle probablement ?',
                        'explanation' => 'Les écarts entre quartiers peuvent concerner les revenus, l’emploi, le logement, les transports ou les services. Ces dimensions peuvent interagir et renforcer certains écarts spatiaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Un accès plus facile à une main-d’œuvre spécialisée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une interdiction de recruter',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition de la concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un terrain toujours gratuit',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville instaure un stationnement payant dans une zone très fréquentée. Quel objectif économique peut-elle poursuivre ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Gérer une ressource urbaine rare et réduire certains usages excessifs de l’espace public',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Rendre l’espace public illimité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer toute circulation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir des loyers identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux quartiers ont le même nombre d’habitants, mais l’un a beaucoup plus de commerces et de transports. Que peut-on conclure ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'L’accès aux services et à l’emploi peut différer malgré une population similaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les deux quartiers offrent nécessairement la même qualité de vie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande de logement est forcément identique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les déplacements sont nécessairement identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un nouveau campus universitaire s’installe dans une zone périphérique. Quel effet indirect peut apparaître ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse de la demande pour certains logements et services autour du campus',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse obligatoire du nombre d’étudiants',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des transports',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des emplois locaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un quartier bien desservi devient très recherché. Quel effet peut toucher le marché du logement ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse de la demande peut exercer une pression sur les loyers ou prix si l’offre ne suit pas',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine des loyers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de la construction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la population',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville crée une zone piétonne dans un centre commerçant. Quel résultat peut dépendre de la réaction des usagers et des commerces ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'La fréquentation, les ventes, la mobilité et l’attractivité peuvent évoluer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un résultat identique dans toutes les villes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression automatique des commerces',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une interdiction de toute activité économique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un réseau de bus devient plus fréquent sans que le prix du billet augmente. Quelle réaction peut être envisagée ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Le transport public peut devenir plus attractif pour certains usagers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le transport public devient nécessairement moins utile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande de déplacement disparaît',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les logements deviennent gratuits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville investit dans des écoles, des transports et des espaces verts dans un quartier défavorisé. Quel objectif général peut être poursuivi ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Améliorer les conditions de vie et l’accès aux opportunités dans le quartier',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire volontairement les services',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer toute activité privée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les distances domicile-travail',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Synthèse des mécanismes urbains',
                'description' => 'Révision générale des principaux mécanismes de l’économie urbaine à travers des situations concrètes.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel mécanisme explique le mieux pourquoi certaines activités économiques se regroupent dans une même ville ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Les économies d’agglomération peuvent réduire certains coûts et faciliter les interactions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les entreprises cherchent toujours à s’éloigner des clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La terre urbaine est illimitée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les travailleurs n’ont aucun rôle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si le revenu moyen augmente dans une ville où l’offre de logements de qualité est limitée, que peut-on observer ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse de la demande pour certains logements et une pression possible sur leurs prix',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition du logement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression du marché foncier',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut réduire la congestion sans réduire nécessairement les déplacements utiles ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Une amélioration des transports collectifs et une meilleure gestion du trafic',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une fermeture aléatoire de toutes les routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression des emplois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction de la population par décret',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les villes ont-elles besoin d’un système de transport efficace ?',
                        'explanation' => 'Les déplacements urbains ont des coûts monétaires et temporels. La qualité des transports et la congestion influencent donc les choix de localisation et l’accès aux emplois et services.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les activités, logements et emplois sont répartis dans l’espace et que les déplacements relient ces lieux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les villes n’ont aucun logement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que tous les habitants travaillent au même endroit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le transport est uniquement un loisir',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un quartier possède beaucoup d’emplois mais peu de logements. Quelle tension peut apparaître ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Une demande importante de logements à proximité des emplois',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la demande de logements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition du marché du travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse nécessaire des déplacements',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la proximité entre entreprises et fournisseurs peut-elle améliorer l’organisation économique ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut réduire certains délais et coûts de coordination ou de transport',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle rend les fournisseurs inutiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime tout risque commercial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle rend les biens gratuits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville connaît une forte croissance démographique mais construit peu de logements. Quelle conséquence est plausible ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Une tension accrue sur le marché du logement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine des loyers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition des ménages',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel arbitrage est souvent central dans les choix de localisation résidentielle ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Le compromis entre coût du logement et coût ou temps de déplacement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le compromis entre exportations et importations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le compromis entre inflation et masse monétaire uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le compromis entre dette publique et taux de change',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut choisir entre un site central très cher et un site périphérique moins cher. Quelle comparaison est pertinente ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Comparer les économies de localisation et d’accès du site central à ses coûts supplémentaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Regarder uniquement le loyer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer l’accès aux clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supposer que les deux sites sont identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les aménités urbaines peuvent-elles influencer les prix du logement ?',
                        'explanation' => 'Le marché du logement dépend de la demande, de l’offre, de la localisation et des caractéristiques du bien. Lorsque la demande augmente plus vite que l’offre, les prix ou les loyers peuvent subir une pression à la hausse.',
                        'choices' => [
                            [
                                'choice_text' => 'Les ménages peuvent être prêts à payer davantage pour accéder à certains services, espaces ou caractéristiques appréciées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les aménités n’ont aucune valeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les logements n’ont jamais de prix différent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les services publics réduisent toujours tous les prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général de l’économie urbaine ?',
                        'explanation' => 'La réponse applique un mécanisme fondamental de l’économie urbaine : les choix de localisation dépendent des avantages de proximité, des coûts de déplacement, du prix du foncier et de l’accès aux emplois et aux services.',
                        'choices' => [
                            [
                                'choice_text' => 'Comprendre comment les personnes et les activités choisissent de se localiser et comment fonctionne l’espace urbain',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Calculer uniquement les exportations nationales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Étudier uniquement les banques centrales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mesurer seulement la production agricole',
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