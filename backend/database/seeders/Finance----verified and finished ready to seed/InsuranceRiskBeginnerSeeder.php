<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class InsuranceRiskBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'insurance-risk')->firstOrFail();

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 22, 'passing_score' => 58],
            ['duration' => 24, 'passing_score' => 58],
            ['duration' => 23, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 62],
            ['duration' => 28, 'passing_score' => 62],
            ['duration' => 27, 'passing_score' => 63],
            ['duration' => 30, 'passing_score' => 65],
            ['duration' => 29, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Les bases de l\'assurance et du transfert de risque',
                'description' => 'Comprendre pourquoi une entreprise ou un particulier utilise l\'assurance et comment fonctionne la mutualisation des risques.',
                'questions' => [
                    [
                        'question' => 'Une PME sait qu\'un incendie pourrait endommager son local. Quelle est la logique principale d\'une assurance incendie ?',
                        'explanation' => 'L\'assurance ne supprime pas le risque physique d\'incendie. Elle permet surtout de transférer à l\'assureur une partie de la conséquence financière d\'un sinistre couvert, en échange d\'une prime.',
                        'choices' => [
                            ['choice_text' => 'Réduire la probabilité qu\'un incendie se produise dans les locaux', 'is_correct' => false],
                            ['choice_text' => 'Transférer une partie de l\'impact financier d\'un sinistre à l\'assureur', 'is_correct' => true],
                            ['choice_text' => 'Garantir à l\'entreprise une indemnité égale à son chiffre d\'affaires annuel', 'is_correct' => false],
                            ['choice_text' => 'Se décharger de l\'obligation de respecter les normes de sécurité du local', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la mutualisation est-elle importante dans l\'assurance ?',
                        'explanation' => 'La mutualisation repose sur un portefeuille d\'assurés : tous ne subiront pas un sinistre au même moment, ce qui permet de financer les sinistres d\'une minorité avec les primes collectées auprès de l\'ensemble.',
                        'choices' => [
                            ['choice_text' => 'Elle permet à l\'assureur de réclamer à chaque assuré le coût exact de son propre sinistre', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de réduire la probabilité qu\'un sinistre se produise chez chaque assuré', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de répartir le coût de nombreux sinistres sur un ensemble d\'assurés', 'is_correct' => true],
                            ['choice_text' => 'Elle permet à l\'assuré de choisir lui-même les risques que l\'assureur accepte de couvrir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces situations correspond le mieux à un risque assurable ?',
                        'explanation' => 'Un risque assurable doit notamment comporter une incertitude sur sa réalisation et une conséquence financière identifiable. Une perte déjà certaine ne constitue pas un risque transférable par une nouvelle police.',
                        'choices' => [
                            ['choice_text' => 'Une perte déjà certaine et connue au moment de la souscription', 'is_correct' => false],
                            ['choice_text' => 'Un événement dépendant de la seule volonté de l\'assuré et pouvant lui rapporter un gain', 'is_correct' => false],
                            ['choice_text' => 'Un événement incertain pouvant entraîner une perte financière mesurable', 'is_correct' => true],
                            ['choice_text' => 'Une fluctuation de cours dont l\'issue incertaine peut rapporter un gain comme une perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client choisit une couverture avec une franchise plus élevée. Quel effet est le plus probable ?',
                        'explanation' => 'Une franchise plus élevée augmente la part du risque supportée par l\'assuré. À garanties comparables, cela peut conduire à une prime plus faible.',
                        'choices' => [
                            ['choice_text' => 'La prime doit être plus élevée, car l\'assureur supporte une part plus importante des petits sinistres', 'is_correct' => false],
                            ['choice_text' => 'La prime peut être plus faible, car le client conserve une part plus importante des petits sinistres', 'is_correct' => true],
                            ['choice_text' => 'La prime reste identique, car la franchise ne modifie pas la répartition des pertes entre les parties', 'is_correct' => false],
                            ['choice_text' => 'La prime peut être plus faible, car l\'assureur n\'indemnise plus que les sinistres supérieurs au plafond', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une compagnie d\'assurance collecte 1 000 € de prime annuelle auprès d\'un client. Que représente cette somme pour le client ?',
                        'explanation' => 'La prime est le prix de la couverture d\'assurance. Son paiement ne signifie pas qu\'un remboursement est dû à l\'assuré : une indemnisation dépend de la survenance d\'un événement couvert et des conditions du contrat.',
                        'choices' => [
                            ['choice_text' => 'Un dépôt de garantie restitué à l\'assuré à la fin du contrat s\'il n\'y a pas eu de sinistre', 'is_correct' => false],
                            ['choice_text' => 'Le prix payé pour bénéficier de la couverture prévue au contrat', 'is_correct' => true],
                            ['choice_text' => 'Une avance sur l\'indemnité future que l\'assureur versera en cas de sinistre', 'is_correct' => false],
                            ['choice_text' => 'La part des dommages restant à la charge de l\'assuré après un sinistre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'assureur cherche-t-il à couvrir beaucoup de risques similaires plutôt qu\'un seul risque isolé ?',
                        'explanation' => 'Plus le portefeuille est bien constitué, plus les sinistres individuels peuvent être répartis entre de nombreux contrats. La mutualisation ne supprime pas la sinistralité, mais elle la rend plus prévisible à l\'échelle du portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Un portefeuille large supprime toute possibilité de sinistre', 'is_correct' => false],
                            ['choice_text' => 'Cela permet de connaître à l\'avance le bénéficiaire de chaque indemnité', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille diversifié permet de mieux répartir les sinistres aléatoires', 'is_correct' => true],
                            ['choice_text' => 'Cela rend les exclusions du contrat inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un particulier assure sa maison contre le vol. Le contrat contient une exclusion explicite pour certains biens de très grande valeur. Que signifie cette exclusion ?',
                        'explanation' => 'Une exclusion détermine un risque ou un bien que le contrat ne prend pas en charge, sauf disposition contraire. Le contenu précis de la couverture dépend donc des conditions contractuelles.',
                        'choices' => [
                            ['choice_text' => 'Ces biens sont couverts, mais l\'indemnité est plafonnée à une fraction de leur valeur', 'is_correct' => false],
                            ['choice_text' => 'Ces biens bénéficient d\'une garantie renforcée avec une franchise réduite par rapport aux autres', 'is_correct' => false],
                            ['choice_text' => 'Ces biens sont couverts normalement, mais la prime est majorée pour tenir compte de leur valeur', 'is_correct' => false],
                            ['choice_text' => 'Ces biens ne sont pas couverts dans les conditions prévues par le contrat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d\'un contrat d\'assurance ?',
                        'explanation' => 'Le contrat formalise la couverture : événements garantis, exclusions, plafonds, franchises, obligations de l\'assuré et modalités de règlement des sinistres.',
                        'choices' => [
                            ['choice_text' => 'Déterminer le montant du capital de l\'assureur, ses placements et la rémunération de ses dirigeants', 'is_correct' => false],
                            ['choice_text' => 'Établir les causes de chaque sinistre et désigner le responsable devant les tribunaux', 'is_correct' => false],
                            ['choice_text' => 'Définir les risques couverts, les limites, les obligations des parties et les conditions d\'indemnisation', 'is_correct' => true],
                            ['choice_text' => 'Fixer la valeur de revente des biens de l\'assuré et le rendement attendu de ses placements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'assuré doit-il déclarer correctement les informations importantes lors de la souscription ?',
                        'explanation' => 'Les informations déclarées servent à apprécier le profil de risque et à déterminer les conditions de couverture. Une information inexacte peut donc affecter la décision de souscription ou le contrat.',
                        'choices' => [
                            ['choice_text' => 'L\'assureur utilise ces informations pour calculer le rendement de ses placements financiers', 'is_correct' => false],
                            ['choice_text' => 'L\'assureur utilise ces informations pour s\'assurer que l\'assuré peut rembourser un crédit', 'is_correct' => false],
                            ['choice_text' => 'L\'assureur utilise ces informations pour fixer une franchise unique applicable à l\'ensemble du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'L\'assureur utilise ces informations pour apprécier le risque et tarifer la couverture', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise décide de garder en interne de petites pertes très fréquentes mais d\'assurer un incendie majeur potentiel. Quelle approche adopte-t-elle ?',
                        'explanation' => 'L\'entreprise conserve les pertes qu\'elle peut absorber et transfère un risque potentiellement catastrophique à un assureur. C\'est une combinaison classique de rétention et de transfert.',
                        'choices' => [
                            ['choice_text' => 'Elle combine évitement du risque et réduction de la fréquence des sinistres', 'is_correct' => false],
                            ['choice_text' => 'Elle combine diversification du portefeuille et couverture de change', 'is_correct' => false],
                            ['choice_text' => 'Elle combine mutualisation du risque et assurance de ses petites pertes', 'is_correct' => false],
                            ['choice_text' => 'Elle combine rétention du risque et transfert du risque', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prime, franchise et indemnisation',
                'description' => 'S\'entraîner à raisonner sur la prime, les franchises, les plafonds et le calcul d\'une indemnisation simple.',
                'questions' => [
                    [
                        'question' => 'Un contrat prévoit une franchise absolue de 500 €. Le dommage couvert est de 3 200 €. En supposant qu\'aucun autre plafond ne s\'applique, quelle indemnité est versée ?',
                        'explanation' => 'La franchise reste à la charge de l\'assuré. L\'indemnité est donc 3 200 € − 500 € = 2 700 €.',
                        'choices' => [
                            ['choice_text' => '500 €', 'is_correct' => false],
                            ['choice_text' => '2 700 €', 'is_correct' => true],
                            ['choice_text' => '3 200 €', 'is_correct' => false],
                            ['choice_text' => '3 700 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une garantie prévoit un plafond de 10 000 €. Un sinistre couvert entraîne une perte de 12 500 €, sans franchise. Quel montant maximal peut être indemnisé ?',
                        'explanation' => 'Le plafond limite l\'indemnisation à 10 000 €. La perte supplémentaire de 2 500 € reste à la charge de l\'assuré.',
                        'choices' => [
                            ['choice_text' => '2 500 €', 'is_correct' => false],
                            ['choice_text' => '10 000 €', 'is_correct' => true],
                            ['choice_text' => '12 500 €', 'is_correct' => false],
                            ['choice_text' => '22 500 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une prime annuelle passe de 800 € à 920 €. De combien augmente-t-elle en pourcentage ?',
                        'explanation' => 'L\'augmentation est de 120 €. Le pourcentage est 120 / 800 = 0,15, soit 15 %.',
                        'choices' => [
                            ['choice_text' => '8 %', 'is_correct' => false],
                            ['choice_text' => '12 %', 'is_correct' => false],
                            ['choice_text' => '15 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une police prévoit une franchise absolue de 400 € par sinistre. Trois petits sinistres distincts de 250 €, 700 € et 1 000 € surviennent. Quelle indemnité totale reçoit l\'assuré si la franchise s\'applique séparément à chaque sinistre ?',
                        'explanation' => 'Les indemnités sont respectivement 0 € pour le sinistre de 250 €, 300 € pour celui de 700 € et 600 € pour celui de 1 000 €. Le total est donc 900 €.',
                        'choices' => [
                            ['choice_text' => '900 €', 'is_correct' => true],
                            ['choice_text' => '950 €', 'is_correct' => false],
                            ['choice_text' => '1 150 €', 'is_correct' => false],
                            ['choice_text' => '1 550 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un assureur propose une prime de 1 200 € avec une franchise absolue de 1 000 €, alors qu\'une autre offre coûte 1 500 € avec une franchise de 250 €. Quel est le principal arbitrage ?',
                        'explanation' => 'La première offre coûte moins cher mais la franchise est plus élevée. L\'assuré supporte donc davantage les pertes en cas de sinistre, surtout pour les dommages modestes.',
                        'choices' => [
                            ['choice_text' => 'Le client paie moins de prime mais conserve davantage de risque par sinistre', 'is_correct' => true],
                            ['choice_text' => 'Le client paie moins de prime et obtient une indemnisation plus élevée par sinistre', 'is_correct' => false],
                            ['choice_text' => 'Le client paie plus de prime mais conserve davantage de risque par sinistre', 'is_correct' => false],
                            ['choice_text' => 'Le client réduit sa prime mais augmente le plafond d\'indemnisation de chaque sinistre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une voiture est assurée pour une valeur maximale de 18 000 €. Après un sinistre couvert, le coût de réparation est de 14 000 € et la franchise absolue est de 750 €. Quelle indemnité théorique résulte du contrat ?',
                        'explanation' => 'Le dommage est inférieur au plafond. Après déduction de la franchise, l\'indemnité théorique est 14 000 € − 750 € = 13 250 €.',
                        'choices' => [
                            ['choice_text' => '750 €', 'is_correct' => false],
                            ['choice_text' => '13 250 €', 'is_correct' => true],
                            ['choice_text' => '14 750 €', 'is_correct' => false],
                            ['choice_text' => '18 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une prime n\'est-elle pas simplement égale au montant potentiel maximal d\'un sinistre ?',
                        'explanation' => 'La prime tient compte notamment de la fréquence attendue des sinistres, de leur coût potentiel, des frais, du capital et d\'autres éléments de tarification. Le montant assuré n\'est donc pas égal à la prime.',
                        'choices' => [
                            ['choice_text' => 'Parce que la prime est calculée sur le coût moyen des sinistres passés, sans tenir compte des frais de gestion', 'is_correct' => false],
                            ['choice_text' => 'Parce que la prime est un pourcentage fixe du capital assuré, identique pour tous les types de risques', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant de la prime dépend de la capacité de paiement de l\'assuré et non du niveau du risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que le sinistre maximal est rarement réalisé et que la tarification intègre la fréquence, la gravité et d\'autres coûts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit une couverture limitée à 50 000 € pour une valeur exposée de 80 000 €. Quel risque évident apparaît ?',
                        'explanation' => 'Une limite de 50 000 € ne protège pas intégralement une exposition de 80 000 €. En cas de sinistre important, une partie de la perte peut rester à la charge de l\'entreprise.',
                        'choices' => [
                            ['choice_text' => 'Elle peut rester insuffisamment assurée si la perte dépasse la limite de couverture', 'is_correct' => true],
                            ['choice_text' => 'Elle peut être surassurée et payer une prime trop élevée par rapport au risque réel', 'is_correct' => false],
                            ['choice_text' => 'Elle peut perdre son droit à indemnité si la valeur exposée dépasse la limite de couverture', 'is_correct' => false],
                            ['choice_text' => 'Elle peut être indemnisée deux fois si la perte dépasse la limite de couverture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec une franchise absolue fixe, qui supporte normalement la première partie de la perte ?',
                        'explanation' => 'La franchise absolue correspond à la part initiale du sinistre restant à la charge de l\'assuré, selon les modalités du contrat.',
                        'choices' => [
                            ['choice_text' => 'L\'assureur', 'is_correct' => false],
                            ['choice_text' => 'Le courtier', 'is_correct' => false],
                            ['choice_text' => 'La banque de l\'assuré', 'is_correct' => false],
                            ['choice_text' => 'L\'assuré', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise paie 24 000 € de primes sur trois ans pour une couverture donnée. Sur la même période, les sinistres indemnisés atteignent 15 000 €. Que peut-on conclure immédiatement ?',
                        'explanation' => '15 000 € d\'indemnités sont inférieures à 24 000 € de primes. Cela ne suffit toutefois pas à juger la rentabilité globale, car d\'autres coûts et risques entrent dans l\'analyse.',
                        'choices' => [
                            ['choice_text' => 'Les indemnités reçues sont supérieures aux primes versées sur la période', 'is_correct' => false],
                            ['choice_text' => 'Les primes versées ont été remboursées en totalité sous forme d\'indemnités', 'is_correct' => false],
                            ['choice_text' => 'Les indemnités reçues sont inférieures aux primes versées sur la période', 'is_correct' => true],
                            ['choice_text' => 'Les sinistres indemnisés représentent plus de 80 % des primes versées sur la période', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sélection des risques et souscription',
                'description' => 'Comprendre comment un assureur évalue un risque avant de proposer une couverture.',
                'questions' => [
                    [
                        'question' => 'Lors de la souscription d\'une assurance habitation, pourquoi l\'adresse et le type de bâtiment peuvent-ils être demandés ?',
                        'explanation' => 'La localisation, les caractéristiques du bâtiment et son usage peuvent modifier l\'exposition à certains risques. Ces informations peuvent donc intervenir dans la souscription et la tarification.',
                        'choices' => [
                            ['choice_text' => 'Ils donnent des indications utiles sur l\'exposition au risque assuré', 'is_correct' => true],
                            ['choice_text' => 'Ils permettent de vérifier la solvabilité bancaire du futur assuré avant la signature', 'is_correct' => false],
                            ['choice_text' => 'Ils servent à fixer une franchise identique pour l\'ensemble des habitations du quartier', 'is_correct' => false],
                            ['choice_text' => 'Ils servent à estimer le prix de vente du bâtiment sur le marché immobilier local', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un assureur constate que certains clients à très haut risque sont beaucoup plus motivés pour acheter une couverture complète. Quel problème économique cela illustre-t-il principalement ?',
                        'explanation' => 'La sélection adverse apparaît lorsque les personnes présentant les risques les plus élevés sont davantage incitées à rechercher certaines couvertures, ce qui peut détériorer le portefeuille si le risque n\'est pas correctement tarifé.',
                        'choices' => [
                            ['choice_text' => 'L\'aléa moral', 'is_correct' => false],
                            ['choice_text' => 'La subrogation', 'is_correct' => false],
                            ['choice_text' => 'La réassurance', 'is_correct' => false],
                            ['choice_text' => 'La sélection adverse', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un assureur demande l\'historique de sinistres d\'une entreprise avant d\'accepter une police. Quelle est la raison la plus directe ?',
                        'explanation' => 'L\'historique de sinistres apporte une information sur la fréquence et parfois la gravité des événements passés. Il aide donc à apprécier le risque futur, sans le prédire parfaitement.',
                        'choices' => [
                            ['choice_text' => 'Mesurer la solvabilité de l\'entreprise afin de lui accorder un crédit à taux réduit', 'is_correct' => false],
                            ['choice_text' => 'Évaluer l\'expérience passée et mieux apprécier le risque à couvrir', 'is_correct' => true],
                            ['choice_text' => 'Fixer d\'avance le montant des indemnités qui seront versées lors des sinistres futurs', 'is_correct' => false],
                            ['choice_text' => 'Vérifier le respect des obligations fiscales de l\'entreprise avant l\'émission de la police', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une usine vient d\'installer un système automatique de détection d\'incendie. Quel effet cela peut-il avoir lors de la souscription ?',
                        'explanation' => 'Les mesures de prévention et de protection peuvent modifier l\'exposition au risque. Elles peuvent donc être prises en compte dans l\'analyse de souscription et la tarification.',
                        'choices' => [
                            ['choice_text' => 'Le système peut augmenter la prime, car l\'assureur considère l\'usine comme plus exposée au feu', 'is_correct' => false],
                            ['choice_text' => 'Le système peut réduire certains facteurs de risque et être pris en compte dans l\'évaluation', 'is_correct' => true],
                            ['choice_text' => 'Le système est ignoré, car l\'assureur ne retient que la valeur des bâtiments dans son évaluation', 'is_correct' => false],
                            ['choice_text' => 'Le système dispense l\'usine de déclarer ses autres risques d\'incendie lors de la souscription', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un assureur ne peut-il pas tarifer correctement un risque sans connaître des informations pertinentes sur son exposition ?',
                        'explanation' => 'La tarification cherche à refléter le coût attendu du risque et les autres charges. Sans informations sur l\'exposition, l\'évaluation devient moins fiable.',
                        'choices' => [
                            ['choice_text' => 'Parce que la prime dépend principalement du chiffre d\'affaires déclaré par l\'assuré', 'is_correct' => false],
                            ['choice_text' => 'Parce que la prime est fixée par la loi selon la catégorie d\'activité de l\'assuré', 'is_correct' => false],
                            ['choice_text' => 'Parce que la prime est calculée à partir du rendement des placements financiers de l\'assureur', 'is_correct' => false],
                            ['choice_text' => 'Parce que la prime dépend notamment de la fréquence et de la gravité attendues du risque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise demande une assurance cyber et refuse de préciser si ses sauvegardes critiques sont isolées du réseau principal. Pourquoi cette information est-elle pertinente ?',
                        'explanation' => 'Des sauvegardes isolées peuvent réduire l\'impact d\'une attaque. Leur présence ou leur absence est donc une information utile pour apprécier l\'exposition au risque cyber.',
                        'choices' => [
                            ['choice_text' => 'Elle sert surtout à évaluer la valeur comptable du matériel informatique de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de fixer le niveau de rémunération des équipes informatiques de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle peut influencer l\'évaluation de la vulnérabilité et du risque de perte', 'is_correct' => true],
                            ['choice_text' => 'Elle sert à déterminer si l\'assureur devra rembourser les primes en cas d\'attaque réussie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue généralement le souscripteur dans une compagnie d\'assurance ?',
                        'explanation' => 'Le souscripteur analyse le risque proposé et détermine, dans le cadre des politiques de la compagnie, s\'il peut être assuré et à quelles conditions.',
                        'choices' => [
                            ['choice_text' => 'Évaluer les dommages après sinistre et fixer le montant des indemnités à verser', 'is_correct' => false],
                            ['choice_text' => 'Vendre les contrats aux clients et percevoir une commission sur chaque police vendue', 'is_correct' => false],
                            ['choice_text' => 'Évaluer le risque et décider des conditions de couverture selon les règles de souscription', 'is_correct' => true],
                            ['choice_text' => 'Placer les primes collectées sur les marchés financiers et suivre le rendement des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise présente une forte concentration de stocks dans un seul entrepôt. Pourquoi cette caractéristique peut-elle intéresser l\'assureur ?',
                        'explanation' => 'Concentrer beaucoup de stocks au même endroit peut accroître la perte maximale en cas d\'incendie ou d\'autre événement majeur. C\'est donc une caractéristique pertinente pour l\'appréciation du risque.',
                        'choices' => [
                            ['choice_text' => 'Une concentration physique réduit la gravité d\'un sinistre en facilitant la surveillance', 'is_correct' => false],
                            ['choice_text' => 'Une concentration physique peut augmenter la gravité potentielle d\'un sinistre', 'is_correct' => true],
                            ['choice_text' => 'Une concentration physique indique que l\'entreprise a probablement des difficultés de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Une concentration physique permet à l\'assureur de supprimer la franchise sur ce site', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client omet volontairement une information importante qui augmente fortement son exposition. Quel problème cela peut-il créer ?',
                        'explanation' => 'Si l\'assureur dispose de moins d\'informations que le client sur le risque réel, la qualité de la sélection et de la tarification peut être affectée. C\'est un cas d\'asymétrie d\'information.',
                        'choices' => [
                            ['choice_text' => 'Une asymétrie d\'information qui perturbe l\'évaluation et la tarification du risque', 'is_correct' => true],
                            ['choice_text' => 'Un excès de diversification qui perturbe la répartition des sinistres au sein du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Une surévaluation des biens assurés qui augmente mécaniquement le montant de la franchise', 'is_correct' => false],
                            ['choice_text' => 'Un défaut de liquidité de l\'assureur qui retarde le paiement des indemnités aux assurés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un assureur choisit d\'accepter un risque uniquement jusqu\'à une certaine limite interne de montant. Cette limite sert principalement à :',
                        'explanation' => 'Les limites de souscription permettent de contrôler l\'exposition individuelle et cumulée de l\'assureur. Elles font partie de la discipline de gestion du portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Assurer à chaque client une indemnisation égale à la valeur de remplacement de son bien', 'is_correct' => false],
                            ['choice_text' => 'Fixer le prix de chaque contrat d\'après le rendement des placements de la compagnie', 'is_correct' => false],
                            ['choice_text' => 'Répartir les sinistres entre les assurés selon leur ancienneté dans le portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Contrôler l\'exposition maximale et éviter une concentration excessive du portefeuille', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sinistres, règlement et indemnisation',
                'description' => 'Analyser le parcours d\'un sinistre, la vérification des garanties et les principes d\'une indemnisation.',
                'questions' => [
                    [
                        'question' => 'Après un dégât des eaux couvert, pourquoi l\'assuré doit-il généralement documenter les dommages ?',
                        'explanation' => 'Les photos, factures, rapports et autres justificatifs aident à établir la nature et le coût du dommage et à vérifier sa cohérence avec la garantie.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre à l\'assuré de renégocier le montant de sa franchise après la survenance du sinistre', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre à l\'assureur de contrôler que les primes ont été payées à chaque échéance', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre à l\'assureur de répartir le coût du sinistre entre les autres assurés du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre à l\'assureur d\'évaluer le sinistre et le montant de la perte', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise signale un sinistre mais continue d\'accumuler des pertes évitables alors qu\'une mesure raisonnable aurait pu limiter le dommage. Quel principe de gestion du sinistre est concerné ?',
                        'explanation' => 'L\'assuré est généralement attendu à prendre des mesures raisonnables pour éviter l\'aggravation du dommage après un événement. Cela ne signifie pas qu\'il doit supporter seul une perte couverte, mais qu\'il ne doit pas laisser le dommage s\'aggraver inutilement.',
                        'choices' => [
                            ['choice_text' => 'L\'obligation de limiter raisonnablement l\'aggravation du dommage', 'is_correct' => true],
                            ['choice_text' => 'L\'obligation de déclarer à l\'assureur les sinistres antérieurs à la souscription du contrat', 'is_correct' => false],
                            ['choice_text' => 'Le droit de l\'assureur de se retourner contre le responsable du dommage', 'is_correct' => false],
                            ['choice_text' => 'L\'obligation de payer la franchise avant tout règlement de l\'assureur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un sinistre déclaré concerne un événement explicitement exclu du contrat. Quelle conclusion est la plus directe ?',
                        'explanation' => 'Une exclusion limite la portée du contrat. Si le sinistre correspond à une exclusion claire et applicable, il n\'est pas couvert par cette garantie.',
                        'choices' => [
                            ['choice_text' => 'L\'événement n\'entre pas dans la garantie prévue par cette police', 'is_correct' => true],
                            ['choice_text' => 'L\'événement est couvert, mais l\'assureur peut exiger une prime supplémentaire avant de payer', 'is_correct' => false],
                            ['choice_text' => 'L\'événement est couvert, mais l\'indemnité est limitée au montant de la franchise', 'is_correct' => false],
                            ['choice_text' => 'L\'événement est pris en charge, mais après un délai de carence d\'un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une machine est endommagée. Le contrat couvre les frais de réparation nécessaires, dans la limite prévue. Pourquoi l\'assureur vérifie-t-il les factures ?',
                        'explanation' => 'Les justificatifs permettent de vérifier le montant du dommage et de s\'assurer qu\'il correspond aux dépenses couvertes par le contrat.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que l\'entreprise a réglé l\'ensemble de ses primes avant la survenance du dommage', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer le montant de la prime que l\'entreprise devra payer lors du prochain renouvellement', 'is_correct' => false],
                            ['choice_text' => 'Pour rapprocher le montant réclamé du coût réel et admissible de la réparation', 'is_correct' => true],
                            ['choice_text' => 'Pour répartir le coût de la réparation entre l\'entreprise et le fabricant de la machine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une perte couverte de 6 000 € est soumise à une franchise absolue de 1 000 €. Quelle part du sinistre reste normalement à la charge de l\'assuré ?',
                        'explanation' => 'Avec une franchise absolue fixe de 1 000 €, cette première tranche reste à la charge de l\'assuré.',
                        'choices' => [
                            ['choice_text' => '0 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => true],
                            ['choice_text' => '5 000 €', 'is_correct' => false],
                            ['choice_text' => '6 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un expert peut-il être mandaté après un sinistre important ?',
                        'explanation' => 'Pour un sinistre important ou complexe, l\'expertise aide à établir les faits, la cause du dommage et son coût avant le règlement.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer les dommages, analyser les causes et contribuer à l\'estimation du préjudice', 'is_correct' => true],
                            ['choice_text' => 'Pour négocier à la place de l\'assuré la prime et la franchise du contrat lors de son renouvellement', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que le contrat est toujours en vigueur et que les primes ont été versées', 'is_correct' => false],
                            ['choice_text' => 'Pour réparer les biens endommagés et facturer directement les travaux à l\'assureur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réclame 90 000 € alors que le plafond de la garantie concernée est de 70 000 €. Quel point faut-il vérifier en priorité ?',
                        'explanation' => 'Le plafond de la garantie limite l\'indemnisation maximale selon les modalités du contrat. C\'est donc un élément central de l\'analyse.',
                        'choices' => [
                            ['choice_text' => 'La date de la dernière révision tarifaire du contrat', 'is_correct' => false],
                            ['choice_text' => 'Le montant de la prime payée par l\'assuré l\'an dernier', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de contrats détenus par l\'assureur dans la région', 'is_correct' => false],
                            ['choice_text' => 'Le plafond contractuel applicable au sinistre', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le paiement d\'une indemnité signifie-t-il automatiquement que l\'assureur accepte toute future réclamation liée au même événement ?',
                        'explanation' => 'Le règlement d\'un sinistre ne transforme pas le contrat en couverture illimitée. Les futurs dommages restent soumis aux garanties, exclusions, limites et circonstances du contrat.',
                        'choices' => [
                            ['choice_text' => 'Oui, car le paiement vaut reconnaissance par l\'assureur de toutes les conséquences de l\'événement', 'is_correct' => false],
                            ['choice_text' => 'Non, chaque paiement dépend de l\'étendue de la couverture et des faits concernés', 'is_correct' => true],
                            ['choice_text' => 'Oui, car l\'assureur renonce alors à invoquer les exclusions et les plafonds du contrat', 'is_correct' => false],
                            ['choice_text' => 'Non, car l\'assureur ne peut verser qu\'une seule indemnité au cours de la durée du contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après un sinistre, l\'assureur récupère une partie de ses paiements auprès du responsable du dommage. Quel mécanisme cela illustre-t-il principalement ?',
                        'explanation' => 'La subrogation permet à l\'assureur, après indemnisation dans les conditions prévues, d\'exercer certains recours contre le responsable du dommage pour récupérer les sommes correspondantes.',
                        'choices' => [
                            ['choice_text' => 'La réassurance', 'is_correct' => false],
                            ['choice_text' => 'La subrogation', 'is_correct' => true],
                            ['choice_text' => 'La mutualisation', 'is_correct' => false],
                            ['choice_text' => 'La franchise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une police prévoit une franchise absolue de 500 € et un plafond de 20 000 €. La perte couverte est de 18 000 €. Quel montant est versé avant toute autre condition ?',
                        'explanation' => 'La perte de 18 000 € est inférieure au plafond. Après déduction de la franchise de 500 €, l\'indemnité est de 17 500 €.',
                        'choices' => [
                            ['choice_text' => '17 500 €', 'is_correct' => true],
                            ['choice_text' => '18 000 €', 'is_correct' => false],
                            ['choice_text' => '19 500 €', 'is_correct' => false],
                            ['choice_text' => '20 000 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Les grands risques financiers',
                'description' => 'Distinguer les principaux risques financiers et comprendre leur impact sur une entreprise ou une institution.',
                'questions' => [
                    [
                        'question' => 'Une banque perd de la valeur parce que les taux d\'intérêt évoluent défavorablement pour son portefeuille obligataire. De quel risque s\'agit-il ?',
                        'explanation' => 'Une variation de taux qui modifie la valeur de marché d\'un portefeuille obligataire constitue un exemple de risque de marché.',
                        'choices' => [
                            ['choice_text' => 'Du risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'Du risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Du risque de marché', 'is_correct' => true],
                            ['choice_text' => 'Du risque opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client important d\'une entreprise tarde fortement à payer une facture et risque de faire défaut. Quel risque est principalement concerné ?',
                        'explanation' => 'Le risque de crédit est lié à la possibilité qu\'une contrepartie n\'honore pas ses obligations financières.',
                        'choices' => [
                            ['choice_text' => 'Le risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Le risque climatique', 'is_correct' => false],
                            ['choice_text' => 'Le risque de souscription', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société dispose de bénéfices comptables mais manque de liquidités pour régler des fournisseurs cette semaine. Quel problème ressort en premier ?',
                        'explanation' => 'L\'entreprise peut être rentable sur la durée tout en faisant face à un manque de trésorerie immédiat. C\'est précisément une situation de risque de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Un risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Un risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Un risque de souscription', 'is_correct' => false],
                            ['choice_text' => 'Un risque de concentration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une panne du système informatique empêche une banque de traiter les paiements pendant plusieurs heures. Quel risque est le plus directement concerné ?',
                        'explanation' => 'Une défaillance de processus, de personnel ou de systèmes relève du risque opérationnel. Ici, la panne informatique perturbe directement les opérations.',
                        'choices' => [
                            ['choice_text' => 'Le risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'Le risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Le risque opérationnel', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise exporte en dollars mais tient ses comptes principalement en euros. Une baisse du dollar par rapport à l\'euro peut réduire la valeur en euros des recettes futures. Quel risque est en jeu ?',
                        'explanation' => 'Lorsque la valeur d\'un flux dépend d\'une devise étrangère, une variation du taux de change peut modifier sa valeur dans la monnaie de référence de l\'entreprise.',
                        'choices' => [
                            ['choice_text' => 'Le risque de taux d\'intérêt', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change', 'is_correct' => true],
                            ['choice_text' => 'Le risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'Le risque de souscription', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond le mieux à un risque stratégique ?',
                        'explanation' => 'Le risque stratégique concerne les choix et orientations de l\'entreprise. Un lancement d\'activité mal positionné relève davantage de cette catégorie que d\'une simple erreur opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Une panne informatique qui bloque temporairement le traitement des commandes clients', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de saisie qui entraîne le double paiement d\'une facture fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un client important qui ne règle pas une facture échue depuis trois mois', 'is_correct' => false],
                            ['choice_text' => 'Lancer une nouvelle activité qui se révèle structurellement moins rentable que prévu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ne devrait-elle pas regarder uniquement la probabilité d\'un risque ?',
                        'explanation' => 'Deux risques ayant la même probabilité peuvent avoir des conséquences très différentes. La gestion des risques tient donc compte de la fréquence, de la gravité et de la capacité de l\'organisation à absorber la perte.',
                        'choices' => [
                            ['choice_text' => 'Parce que la probabilité est impossible à estimer et que seule la gravité doit être retenue', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'impact financier d\'un risque se déduit directement de sa probabilité de survenance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les risques les plus probables sont ceux qui coûtent le plus cher à l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'impact financier et la capacité d\'absorption de la perte comptent aussi', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une compagnie d\'assurance détient des actifs très liquides pour pouvoir payer rapidement certaines prestations. Quelle logique de gestion cela illustre-t-il ?',
                        'explanation' => 'Des actifs liquides permettent de disposer de ressources rapidement mobilisables pour honorer les sorties de trésorerie attendues ou imprévues.',
                        'choices' => [
                            ['choice_text' => 'La gestion du risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'La gestion du risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'La gestion du risque de souscription', 'is_correct' => false],
                            ['choice_text' => 'La gestion du risque de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dépend de 80 % de ses ventes d\'un seul client. Quel risque apparaît ?',
                        'explanation' => 'Une forte dépendance à une seule contrepartie crée un risque de concentration : un problème chez ce client peut affecter fortement les revenus de l\'entreprise.',
                        'choices' => [
                            ['choice_text' => 'Un risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change', 'is_correct' => false],
                            ['choice_text' => 'Un risque de souscription', 'is_correct' => false],
                            ['choice_text' => 'Un risque de concentration', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est le plus directement utile pour apprécier la liquidité à court terme d\'une entreprise ?',
                        'explanation' => 'La liquidité dépend de la capacité à faire face aux paiements à venir. La trésorerie disponible et le calendrier des sorties de cash sont donc particulièrement pertinents.',
                        'choices' => [
                            ['choice_text' => 'Son chiffre d\'affaires cumulé et le nombre de ses clients actifs sur l\'année', 'is_correct' => false],
                            ['choice_text' => 'La valeur comptable de ses immobilisations et de ses stocks à long terme', 'is_correct' => false],
                            ['choice_text' => 'Son niveau de trésorerie disponible et ses sorties de cash à court terme', 'is_correct' => true],
                            ['choice_text' => 'Le rendement de ses placements en actions et la valeur de son capital social', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prévention, atténuation et transfert du risque',
                'description' => 'Comparer les différentes réponses possibles à un risque et choisir une mesure adaptée à une situation donnée.',
                'questions' => [
                    [
                        'question' => 'Une entreprise installe un système de détection d\'incendie avant de souscrire une nouvelle police. Quelle catégorie de réponse au risque représente cette action ?',
                        'explanation' => 'Installer des dispositifs de prévention et de protection réduit la probabilité ou la gravité potentielle d\'un sinistre. Il s\'agit d\'une mesure de réduction du risque.',
                        'choices' => [
                            ['choice_text' => 'Le transfert du risque à un assureur', 'is_correct' => false],
                            ['choice_text' => 'La rétention du risque par l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'La réduction ou prévention du risque', 'is_correct' => true],
                            ['choice_text' => 'L\'évitement total de l\'activité exposée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise conserve volontairement les petites pertes imprévues qu\'elle peut absorber sans difficulté. Comment décrit-on cette approche ?',
                        'explanation' => 'La rétention signifie que l\'organisation accepte de supporter elle-même une partie du risque, souvent lorsque la perte potentielle est faible ou maîtrisable.',
                        'choices' => [
                            ['choice_text' => 'Le transfert du risque', 'is_correct' => false],
                            ['choice_text' => 'La rétention du risque', 'is_correct' => true],
                            ['choice_text' => 'L\'évitement du risque', 'is_correct' => false],
                            ['choice_text' => 'La prévention du risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société signe une police pour couvrir une responsabilité importante envers des tiers. Quelle réponse au risque utilise-t-elle principalement ?',
                        'explanation' => 'L\'assurance transfère à l\'assureur une partie de l\'impact financier d\'un événement couvert. Le risque physique ou juridique lui-même n\'est pas nécessairement éliminé.',
                        'choices' => [
                            ['choice_text' => 'Le transfert du risque financier vers l\'assureur dans les limites du contrat', 'is_correct' => true],
                            ['choice_text' => 'L\'évitement du risque, en cessant l\'activité qui génère la responsabilité envers les tiers', 'is_correct' => false],
                            ['choice_text' => 'La rétention du risque, l\'entreprise supportant elle-même les réclamations des tiers', 'is_correct' => false],
                            ['choice_text' => 'La prévention du risque, en supprimant la possibilité de réclamation des tiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une franchise peut-elle encourager l\'assuré à mieux prévenir les petits sinistres ?',
                        'explanation' => 'Avec une franchise, l\'assuré supporte une première partie de la perte. Cela peut renforcer l\'incitation économique à éviter les sinistres de faible montant.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'une partie de chaque perte reste à sa charge', 'is_correct' => true],
                            ['choice_text' => 'Parce que la franchise est remboursée par l\'assureur en l\'absence de tout sinistre', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'assureur impose des inspections régulières des locaux de l\'assuré', 'is_correct' => false],
                            ['choice_text' => 'Parce que la franchise réduit le plafond de garantie après chaque petit sinistre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise met en place des procédures de double validation pour les virements importants. Quel risque cherche-t-elle surtout à réduire ?',
                        'explanation' => 'Une double validation renforce le contrôle interne et peut réduire les erreurs de paiement ou certaines fraudes. Il s\'agit d\'une mesure de gestion du risque opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Le risque de liquidité lié à la gestion de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux sur les emprunts à taux variable', 'is_correct' => false],
                            ['choice_text' => 'Le risque d\'erreur ou de fraude opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Le risque de crédit lié aux clients en retard de paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un distributeur dépend fortement d\'un seul fournisseur critique. Quelle mesure réduit le plus directement le risque de concentration ?',
                        'explanation' => 'Disposer d\'un second fournisseur réduit la dépendance à une seule contrepartie et améliore la résilience en cas de rupture.',
                        'choices' => [
                            ['choice_text' => 'Développer une source d\'approvisionnement alternative', 'is_correct' => true],
                            ['choice_text' => 'Négocier une remise de volume supplémentaire auprès du fournisseur actuel', 'is_correct' => false],
                            ['choice_text' => 'Passer des commandes plus importantes pour sécuriser le stock auprès de ce fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Souscrire une assurance de change sur les achats effectués auprès de ce fournisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise compare le coût d\'une assurance à la perte maximale qu\'elle pourrait supporter sans difficulté. Quel raisonnement fait-elle ?',
                        'explanation' => 'Le choix de couverture dépend du coût du transfert du risque, de la fréquence et gravité possibles des pertes et de la capacité financière de l\'entreprise à les retenir.',
                        'choices' => [
                            ['choice_text' => 'Elle arbitre entre transfert du risque et capacité de rétention', 'is_correct' => true],
                            ['choice_text' => 'Elle arbitre entre diversification du portefeuille et couverture du risque de change', 'is_correct' => false],
                            ['choice_text' => 'Elle arbitre entre prévention du risque et réduction de ses frais de personnel', 'is_correct' => false],
                            ['choice_text' => 'Elle arbitre entre financement par dette et financement par augmentation de capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après avoir réduit un risque grâce à des contrôles internes, une banque achète aussi une assurance spécifique pour certains dommages résiduels. Quelle stratégie combine-t-elle ?',
                        'explanation' => 'Une politique de risque efficace combine souvent plusieurs outils : prévention, contrôles, limitation de l\'exposition, puis transfert d\'une partie du risque qui reste.',
                        'choices' => [
                            ['choice_text' => 'Transfert du risque puis rétention intégrale de l\'exposition résiduelle', 'is_correct' => false],
                            ['choice_text' => 'Réduction du risque puis transfert de l\'exposition résiduelle', 'is_correct' => true],
                            ['choice_text' => 'Évitement de l\'activité puis diversification de l\'exposition résiduelle', 'is_correct' => false],
                            ['choice_text' => 'Rétention des petites pertes puis diversification de l\'exposition résiduelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement est le plus cohérent avec une bonne culture de gestion des risques ?',
                        'explanation' => 'La gestion des risques est préventive autant que corrective. Les risques doivent être identifiés, évalués, suivis et associés à des réponses adaptées.',
                        'choices' => [
                            ['choice_text' => 'Documenter les risques après leur réalisation afin d\'en tirer des enseignements', 'is_correct' => false],
                            ['choice_text' => 'Déléguer entièrement la gestion des risques à l\'assureur une fois la police signée', 'is_correct' => false],
                            ['choice_text' => 'Identifier les risques avant leur survenance et définir des mesures de réponse', 'is_correct' => true],
                            ['choice_text' => 'Concentrer le suivi sur les risques les plus faciles à mesurer, quelle que soit leur gravité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit de ne pas assurer un très petit risque fréquent parce que le coût de la police serait disproportionné par rapport à la perte possible. Quel raisonnement est utilisé ?',
                        'explanation' => 'Un transfert n\'est pas toujours économiquement justifié. Pour les pertes faibles et prévisibles, une rétention maîtrisée peut être rationnelle si l\'entreprise peut les absorber.',
                        'choices' => [
                            ['choice_text' => 'Le coût du transfert est comparé au rendement boursier attendu et à la valeur de marché de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le coût du transfert est comparé à la gravité et à la capacité d\'absorption du risque', 'is_correct' => true],
                            ['choice_text' => 'Le risque est jugé trop faible pour être suivi et il est retiré du registre des risques', 'is_correct' => false],
                            ['choice_text' => 'Le coût de la police est comparé aux primes payées par les autres entreprises du même secteur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Diversification et gestion des risques d\'un portefeuille',
                'description' => 'Appliquer les notions de diversification, corrélation et concentration à des situations simples de gestion des risques.',
                'questions' => [
                    [
                        'question' => 'Un investisseur place tout son portefeuille dans les actions d\'une seule entreprise. Quel risque est particulièrement élevé ?',
                        'explanation' => 'Une concentration sur une seule entreprise expose fortement au risque spécifique : résultats décevants, fraude, accident industriel ou autre événement propre à l\'émetteur.',
                        'choices' => [
                            ['choice_text' => 'Le risque systématique lié à l\'ensemble du marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux lié aux obligations d\'État', 'is_correct' => false],
                            ['choice_text' => 'Le risque spécifique lié à cette entreprise', 'is_correct' => true],
                            ['choice_text' => 'Le risque de liquidité lié aux dépôts bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi détenir plusieurs actifs peut-il réduire le risque spécifique d\'un portefeuille ?',
                        'explanation' => 'La diversification peut réduire le risque propre aux titres lorsque leurs performances ne sont pas parfaitement corrélées. Elle ne supprime toutefois pas le risque de marché.',
                        'choices' => [
                            ['choice_text' => 'Parce que le rendement de chaque actif augmente mécaniquement lorsque le nombre d\'actifs détenus s\'accroît', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur de chaque actif se trouve protégée contre la baisse par la présence des autres titres', 'is_correct' => false],
                            ['choice_text' => 'Parce que le gérant peut revendre les actifs en baisse avant que leur prix ne diminue réellement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les mauvaises performances de certains actifs peuvent être partiellement compensées par celles d\'autres actifs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille contient deux actifs dont les rendements évoluent presque toujours dans la même direction. La diversification entre eux est-elle très puissante ?',
                        'explanation' => 'Plus les actifs sont corrélés positivement, moins la diversification entre eux réduit le risque global. La combinaison d\'actifs faiblement corrélés est généralement plus utile pour diversifier.',
                        'choices' => [
                            ['choice_text' => 'Oui, car des rendements proches se compensent mutuellement et réduisent le risque global', 'is_correct' => false],
                            ['choice_text' => 'Non, car une forte corrélation limite le bénéfice de diversification', 'is_correct' => true],
                            ['choice_text' => 'Oui, car les pertes de l\'un des actifs sont compensées par les gains de l\'autre', 'is_correct' => false],
                            ['choice_text' => 'Non, car la corrélation n\'a d\'effet que sur le rendement et pas sur le risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une compagnie répartit son portefeuille de contrats entre plusieurs régions géographiques au lieu de concentrer tous les risques dans une seule zone. Quelle logique applique-t-elle ?',
                        'explanation' => 'Répartir les expositions entre plusieurs zones peut réduire l\'impact d\'un événement local touchant une seule région.',
                        'choices' => [
                            ['choice_text' => 'La diversification géographique', 'is_correct' => true],
                            ['choice_text' => 'La spécialisation sectorielle', 'is_correct' => false],
                            ['choice_text' => 'La réassurance proportionnelle', 'is_correct' => false],
                            ['choice_text' => 'La rétention du risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal danger d\'une forte concentration de crédit sur une seule contrepartie ?',
                        'explanation' => 'La concentration amplifie l\'impact potentiel d\'un défaut. La diversification des contreparties est donc un outil important de gestion du risque de crédit.',
                        'choices' => [
                            ['choice_text' => 'Une faible diversification des devises du portefeuille expose à des pertes de change', 'is_correct' => false],
                            ['choice_text' => 'Le coût de la surveillance de cette contrepartie dépasse le revenu d\'intérêts qu\'elle verse', 'is_correct' => false],
                            ['choice_text' => 'Un défaut de cette contrepartie peut provoquer une perte importante', 'is_correct' => true],
                            ['choice_text' => 'Le portefeuille perd sa liquidité parce que la contrepartie ne peut plus être remplacée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque détient 70 % de ses actifs liquides dans une seule institution financière. Quel risque doit particulièrement attirer son attention ?',
                        'explanation' => 'Même des actifs liquides peuvent créer une concentration de contrepartie. Un problème chez l\'unique institution concernée peut alors affecter une part importante du portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Le risque de taux sur les placements à long terme', 'is_correct' => false],
                            ['choice_text' => 'Le risque de souscription lié aux contrats vendus', 'is_correct' => false],
                            ['choice_text' => 'Le risque de concentration de contrepartie', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change sur les dépôts en devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur ajoute une obligation d\'État à un portefeuille déjà composé d\'actions. Quel peut être l\'intérêt principal ?',
                        'explanation' => 'Ajouter une classe d\'actifs différente peut modifier la sensibilité du portefeuille aux facteurs de marché et améliorer la diversification selon les corrélations et objectifs.',
                        'choices' => [
                            ['choice_text' => 'Augmenter la part du portefeuille exposée aux fluctuations du marché actions', 'is_correct' => false],
                            ['choice_text' => 'Éliminer le risque de taux d\'intérêt tout en conservant le potentiel de hausse des actions', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le risque de marché par un risque de crédit que l\'investisseur maîtrise pleinement', 'is_correct' => false],
                            ['choice_text' => 'Modifier le profil global de risque et de diversification du portefeuille', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise répartit 90 % de ses achats auprès d\'un seul fournisseur malgré l\'existence d\'alternatives. Quel principe de gestion des risques est insuffisamment appliqué ?',
                        'explanation' => 'Une forte dépendance à un fournisseur augmente le risque de rupture. Diversifier les sources d\'approvisionnement peut réduire cette vulnérabilité.',
                        'choices' => [
                            ['choice_text' => 'La diversification des sources', 'is_correct' => true],
                            ['choice_text' => 'La spécialisation des achats', 'is_correct' => false],
                            ['choice_text' => 'La couverture de change', 'is_correct' => false],
                            ['choice_text' => 'La rétention des pertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille est bien diversifié mais tous ses actifs chutent pendant une crise mondiale. Quelle notion explique qu\'un risque puisse rester présent ?',
                        'explanation' => 'Le risque systématique touche largement le marché et ne peut pas être éliminé simplement en diversifiant entre des actifs exposés au même choc macroéconomique.',
                        'choices' => [
                            ['choice_text' => 'Le risque spécifique à l\'émetteur', 'is_correct' => false],
                            ['choice_text' => 'Le risque systématique', 'is_correct' => true],
                            ['choice_text' => 'Le risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Le risque opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel changement réduit le plus clairement la concentration dans un portefeuille très exposé à une seule action ?',
                        'explanation' => 'Réduire le poids d\'une position dominante et répartir l\'exposition sur plusieurs actifs ou facteurs de risque réduit directement la concentration.',
                        'choices' => [
                            ['choice_text' => 'Réduire le poids de cette action et répartir davantage l\'exposition', 'is_correct' => true],
                            ['choice_text' => 'Remplacer cette action par celle d\'un concurrent direct du même secteur', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de lignes du portefeuille pour simplifier le suivi des positions', 'is_correct' => false],
                            ['choice_text' => 'Conserver la position en la finançant par un emprunt à taux fixe', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risques opérationnels et contrôle interne',
                'description' => 'Identifier les risques issus des processus, des systèmes et des personnes, puis associer des contrôles simples à ces risques.',
                'questions' => [
                    [
                        'question' => 'Un salarié saisit deux fois le même paiement fournisseur dans le système. Quel risque cela illustre-t-il ?',
                        'explanation' => 'L\'erreur provient d\'un processus ou d\'une intervention humaine. Elle relève donc du risque opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Un risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Un risque opérationnel', 'is_correct' => true],
                            ['choice_text' => 'Un risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'Un risque de souscription', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise limite les droits de paiement en fonction du rôle des employés. Quel contrôle met-elle en place ?',
                        'explanation' => 'Limiter les droits selon les rôles réduit la possibilité qu\'une même personne puisse initier et valider seule des opérations sensibles.',
                        'choices' => [
                            ['choice_text' => 'Une diversification des moyens de paiement et des devises', 'is_correct' => false],
                            ['choice_text' => 'Une centralisation des pouvoirs de validation chez un seul responsable', 'is_correct' => false],
                            ['choice_text' => 'Une délégation des paiements à un établissement bancaire externe', 'is_correct' => false],
                            ['choice_text' => 'Une séparation des responsabilités et des droits d\'accès', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rapprochements bancaires sont-ils utiles dans le contrôle financier ?',
                        'explanation' => 'Le rapprochement bancaire compare la comptabilité interne au relevé bancaire et peut révéler des erreurs, opérations non enregistrées ou anomalies.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de comparer le chiffre d\'affaires de l\'entreprise à celui de ses concurrents directs', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent de déterminer le montant des intérêts que la banque doit verser à l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent de vérifier que les stocks physiques correspondent aux stocks enregistrés', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent d\'identifier des écarts entre les écritures comptables et les opérations bancaires', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une plateforme de paiement tombe en panne pendant une période de forte activité commerciale. Quelle conséquence relève directement du risque opérationnel ?',
                        'explanation' => 'La panne d\'un système critique peut interrompre le traitement des opérations. C\'est une conséquence typique du risque opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Une perte de valeur d\'un portefeuille obligataire due à la hausse des taux', 'is_correct' => false],
                            ['choice_text' => 'L\'impossibilité temporaire de traiter certaines transactions', 'is_correct' => true],
                            ['choice_text' => 'Un défaut de paiement d\'un client important sur plusieurs factures', 'is_correct' => false],
                            ['choice_text' => 'Une variation défavorable du taux de change sur les ventes en devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle aide le plus directement à réduire les paiements frauduleux ?',
                        'explanation' => 'Une validation indépendante crée un second niveau de contrôle et peut empêcher qu\'une opération frauduleuse soit exécutée sur la base d\'une seule personne ou d\'une seule saisie.',
                        'choices' => [
                            ['choice_text' => 'Une diversification des banques utilisées pour les paiements importants', 'is_correct' => false],
                            ['choice_text' => 'Une couverture de change sur les paiements effectués en devises', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du nombre de fournisseurs référencés par l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une validation indépendante des paiements importants', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise effectue régulièrement une sauvegarde des données critiques dans un environnement séparé. Quel objectif poursuit-elle ?',
                        'explanation' => 'Des sauvegardes séparées facilitent la restauration des données après une panne, une erreur ou certaines attaques informatiques.',
                        'choices' => [
                            ['choice_text' => 'Réduire le coût de ses abonnements informatiques en libérant de l\'espace de stockage', 'is_correct' => false],
                            ['choice_text' => 'Améliorer la résilience en cas de panne ou de cyberincident', 'is_correct' => true],
                            ['choice_text' => 'Empêcher définitivement toute attaque informatique contre son système principal', 'is_correct' => false],
                            ['choice_text' => 'Respecter l\'obligation de transmettre ses données financières aux investisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une procédure exige deux signatures pour engager une dépense importante. Quel est l\'avantage principal ?',
                        'explanation' => 'Un contrôle à deux niveaux limite les décisions ou paiements importants pris sans vérification indépendante. Il ne garantit pas la rentabilité de la dépense.',
                        'choices' => [
                            ['choice_text' => 'Accélérer le traitement des dépenses en limitant le nombre de vérifications nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Obtenir une réduction de la prime d\'assurance sur les dépenses de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Réduire le risque d\'erreur ou de fraude par un contrôle croisé', 'is_correct' => true],
                            ['choice_text' => 'Transférer à la banque la responsabilité des dépenses engagées par l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un plan de continuité d\'activité est-il important pour une institution financière ?',
                        'explanation' => 'Le plan de continuité prépare l\'organisation à faire face à des interruptions majeures et à reprendre les processus critiques dans des délais maîtrisés.',
                        'choices' => [
                            ['choice_text' => 'Il fixe les montants d\'indemnisation que l\'assureur devra verser après une interruption d\'activité', 'is_correct' => false],
                            ['choice_text' => 'Il définit la répartition des bénéfices entre les actionnaires en cas de forte baisse de l\'activité', 'is_correct' => false],
                            ['choice_text' => 'Il organise la diversification des placements pour compenser les pertes en cas de choc de marché', 'is_correct' => false],
                            ['choice_text' => 'Il prépare des solutions permettant de maintenir ou reprendre les fonctions critiques après une perturbation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque constate qu\'un même employé peut créer un nouveau bénéficiaire et valider immédiatement un gros virement. Quel point de contrôle semble faible ?',
                        'explanation' => 'Permettre à une seule personne de créer une contrepartie et de valider ensuite un paiement important augmente le risque de fraude ou d\'erreur. La séparation des tâches est alors insuffisante.',
                        'choices' => [
                            ['choice_text' => 'La sauvegarde des données', 'is_correct' => false],
                            ['choice_text' => 'Le plan de continuité', 'is_correct' => false],
                            ['choice_text' => 'La séparation des tâches', 'is_correct' => true],
                            ['choice_text' => 'La politique de provisionnement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement indique une culture de contrôle saine ?',
                        'explanation' => 'Une bonne culture de contrôle favorise la remontée rapide des anomalies, leur analyse et la mise en place d\'actions correctives avant aggravation.',
                        'choices' => [
                            ['choice_text' => 'Corriger les anomalies en interne sans les signaler afin de préserver la réputation de l\'équipe', 'is_correct' => false],
                            ['choice_text' => 'Réserver la détection des anomalies aux auditeurs externes lors de leur contrôle annuel', 'is_correct' => false],
                            ['choice_text' => 'Signaler les anomalies et les traiter avant qu\'elles ne deviennent des incidents majeurs', 'is_correct' => true],
                            ['choice_text' => 'Limiter les contrôles aux opérations d\'un montant élevé et ignorer les petits écarts répétés', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mini-cas d\'assurance et de gestion des risques',
                'description' => 'Mettre en pratique les notions de couverture, franchise, concentration, prévention et arbitrage risque-coût.',
                'questions' => [
                    [
                        'question' => 'Une PME possède 100 000 € de stock dans un entrepôt. Elle choisit un plafond de garantie de 70 000 €. Après un incendie couvert, la perte est de 60 000 €, avec une franchise absolue de 2 000 €. En supposant que la règle proportionnelle ne s\'applique pas et qu\'aucune autre clause n\'intervient, quelle indemnité obtient-elle ?',
                        'explanation' => 'La perte de 60 000 € reste sous le plafond de 70 000 €. Après la franchise de 2 000 €, l\'indemnité théorique est de 58 000 €.',
                        'choices' => [
                            ['choice_text' => '58 000 €', 'is_correct' => true],
                            ['choice_text' => '60 000 €', 'is_correct' => false],
                            ['choice_text' => '68 000 €', 'is_correct' => false],
                            ['choice_text' => '70 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 50 000 € de trésorerie disponible et doit régler 80 000 € de fournisseurs dans dix jours. Sans financement complémentaire, quel risque est le plus évident ?',
                        'explanation' => 'La trésorerie disponible ne couvre pas les sorties prévues à court terme. L\'entreprise doit donc anticiper un besoin de financement ou de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Un risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Un risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Un risque de concentration', 'is_correct' => false],
                            ['choice_text' => 'Un risque de souscription', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille d\'assurances contient 60 % de contrats liés à des bâtiments situés dans une même zone exposée aux inondations. Quel problème apparaît en priorité ?',
                        'explanation' => 'Une forte concentration géographique peut provoquer de nombreux sinistres simultanés si un événement régional survient. Le portefeuille devient alors plus vulnérable à un risque agrégé.',
                        'choices' => [
                            ['choice_text' => 'Un risque de concentration géographique', 'is_correct' => true],
                            ['choice_text' => 'Un risque de sélection adverse', 'is_correct' => false],
                            ['choice_text' => 'Un risque d\'aléa moral', 'is_correct' => false],
                            ['choice_text' => 'Un risque de taux d\'intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un assureur propose une franchise plus élevée à une entreprise qui met en place de solides mesures de prévention. Quel est le raisonnement économique possible ?',
                        'explanation' => 'Les mesures de prévention peuvent réduire l\'exposition, tandis qu\'une franchise plus élevée fait supporter à l\'assuré une partie plus importante des pertes. Le coût global du transfert peut alors être mieux ajusté.',
                        'choices' => [
                            ['choice_text' => 'Le risque résiduel peut être mieux maîtrisé et l\'assuré accepte de conserver une part plus importante des petites pertes', 'is_correct' => true],
                            ['choice_text' => 'Le risque devient plus élevé et l\'assureur impose une franchise plus forte pour limiter les petites déclarations', 'is_correct' => false],
                            ['choice_text' => 'La prévention supprime le besoin de plafond et l\'assuré accepte de conserver les sinistres les plus importants', 'is_correct' => false],
                            ['choice_text' => 'La franchise reporte sur l\'assureur les petites pertes, ce qui permet à l\'entreprise de réduire sa prévention', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un assureur estime à 2 % la probabilité annuelle d\'un sinistre de 50 000 € sur un contrat donné. Quel est le coût moyen attendu de ce risque par an et par contrat ?',
                        'explanation' => 'Le coût moyen attendu est la probabilité multipliée par le montant du sinistre : 0,02 × 50 000 € = 1 000 €. C\'est une base de la prime, à laquelle s\'ajoutent notamment les frais de gestion.',
                        'choices' => [
                            ['choice_text' => '250 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => true],
                            ['choice_text' => '2 500 €', 'is_correct' => false],
                            ['choice_text' => '50 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un assureur reçoit 2 000 déclarations de petits dégâts identiques après une tempête locale. Pourquoi la diversification géographique peut-elle être utile pour son portefeuille ?',
                        'explanation' => 'Répartir les risques entre plusieurs régions peut réduire l\'impact d\'un événement local. Cela ne supprime cependant pas le risque climatique ou catastrophique.',
                        'choices' => [
                            ['choice_text' => 'Elle permet d\'éviter à l\'assureur le paiement des sinistres causés par une tempête locale', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace le besoin de fonds propres pour payer les indemnités après la tempête', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit mécaniquement la probabilité qu\'une tempête touche la région de l\'assureur', 'is_correct' => false],
                            ['choice_text' => 'Elle peut limiter la dépendance à un même événement régional', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise hésite entre payer 12 000 € de prime annuelle pour une couverture large ou conserver elle-même un risque dont la perte maximale raisonnablement estimée est de 10 000 €. Quelle question devrait-elle examiner ?',
                        'explanation' => 'Le choix dépend de la capacité financière à absorber la perte, de sa probabilité, de l\'intérêt des garanties et du coût du transfert. Comparer seulement 12 000 € et 10 000 € ne suffit pas sans examiner l\'ensemble du risque.',
                        'choices' => [
                            ['choice_text' => 'Si la prime de 12 000 € dépasse la perte maximale de 10 000 €, ce qui suffit à écarter l\'assurance', 'is_correct' => false],
                            ['choice_text' => 'Si le rendement attendu des placements de l\'assureur permet de réduire le montant de la prime', 'is_correct' => false],
                            ['choice_text' => 'Si le coût de la prime et les conditions de couverture justifient le transfert par rapport à sa capacité de rétention', 'is_correct' => true],
                            ['choice_text' => 'Si le courtier propose une commission plus faible que celle des autres compagnies du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une tentative de fraude, une entreprise renforce les contrôles et souscrit une couverture contre certaines pertes résiduelles. Quelle conclusion est la plus juste ?',
                        'explanation' => 'Les contrôles réduisent le risque, tandis que l\'assurance peut transférer une partie des conséquences financières résiduelles. Aucune de ces mesures ne rend le risque nul.',
                        'choices' => [
                            ['choice_text' => 'Elle combine prévention et élimination définitive du risque de fraude par l\'assurance', 'is_correct' => false],
                            ['choice_text' => 'Elle combine prévention, réduction du risque et transfert d\'une partie de l\'exposition', 'is_correct' => true],
                            ['choice_text' => 'Elle combine rétention du risque et évitement de toute activité exposée à la fraude', 'is_correct' => false],
                            ['choice_text' => 'Elle combine transfert du risque et suppression des contrôles devenus redondants avec l\'assurance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société a plusieurs assurances couvrant des événements différents. Pourquoi doit-elle tout de même connaître précisément les exclusions et plafonds de chaque contrat ?',
                        'explanation' => 'La présence de plusieurs polices ne signifie pas que tous les risques sont intégralement couverts. Les garanties, exclusions, franchises et limites doivent être examinées contrat par contrat.',
                        'choices' => [
                            ['choice_text' => 'Parce que les exclusions ne s\'appliquent qu\'aux contrats souscrits auprès de plusieurs assureurs différents', 'is_correct' => false],
                            ['choice_text' => 'Parce que les plafonds de chaque contrat s\'additionnent pour couvrir l\'ensemble des pertes de la société', 'is_correct' => false],
                            ['choice_text' => 'Parce que la franchise d\'un contrat s\'applique à l\'ensemble des autres polices de la société', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un risque apparemment couvert peut être limité, exclu ou plafonné selon la police', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un assureur cède à un réassureur une partie de ses risques, en lui reversant une partie des primes, afin de limiter ses pertes en cas de catastrophe. De quelle opération s\'agit-il ?',
                        'explanation' => 'La réassurance est l\'assurance de l\'assureur : il transfère à un réassureur une partie de ses risques et lui verse une partie des primes, ce qui limite l\'impact d\'une catastrophe sur ses résultats.',
                        'choices' => [
                            ['choice_text' => 'La réassurance', 'is_correct' => true],
                            ['choice_text' => 'La coassurance', 'is_correct' => false],
                            ['choice_text' => 'La subrogation', 'is_correct' => false],
                            ['choice_text' => 'La mutualisation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Quiz d\'application : diagnostiquer le risque',
                'description' => 'Un ensemble de situations courtes pour vérifier la capacité à identifier le risque dominant et la réponse la plus adaptée.',
                'questions' => [
                    [
                        'question' => 'Une entreprise a beaucoup de clients, mais 75 % de ses créances sont concentrées sur trois groupes. Quel risque mérite une surveillance renforcée ?',
                        'explanation' => 'La forte concentration des créances sur trois groupes augmente l\'impact potentiel d\'un problème de paiement chez l\'un d\'eux.',
                        'choices' => [
                            ['choice_text' => 'Le risque de change sur les créances en devises', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux sur les emprunts à taux variable', 'is_correct' => false],
                            ['choice_text' => 'Le risque de concentration de crédit', 'is_correct' => true],
                            ['choice_text' => 'Le risque opérationnel de saisie des factures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise emprunte à taux variable alors que ses revenus sont relativement stables. Une forte hausse des taux augmente ses charges financières. Quel risque subit-elle ?',
                        'explanation' => 'Avec un emprunt à taux variable, une hausse des taux augmente le coût des intérêts. L\'entreprise est donc exposée au risque de taux.',
                        'choices' => [
                            ['choice_text' => 'Un risque de change', 'is_correct' => false],
                            ['choice_text' => 'Un risque de taux d\'intérêt', 'is_correct' => true],
                            ['choice_text' => 'Un risque de souscription', 'is_correct' => false],
                            ['choice_text' => 'Un risque de concentration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client âgé achète une assurance-vie sans comprendre certaines exclusions parce que le produit lui a été présenté trop rapidement. Quel point de gestion des risques commerciaux est le plus pertinent ?',
                        'explanation' => 'Une bonne information du client fait partie d\'une distribution responsable. Une compréhension insuffisante des garanties peut créer des litiges et un risque de conduite.',
                        'choices' => [
                            ['choice_text' => 'La qualité de l\'information et la compréhension du produit par le client', 'is_correct' => true],
                            ['choice_text' => 'Le rendement des placements de l\'assureur et la solvabilité de la compagnie', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de franchise appliqué aux contrats vendus à des clients du même âge', 'is_correct' => false],
                            ['choice_text' => 'La fréquence des sinistres observée sur l\'ensemble des contrats du portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque conserve un coussin de trésorerie important même lorsqu\'aucun incident de paiement n\'est prévu. Pourquoi ?',
                        'explanation' => 'Un coussin de liquidité sert précisément à faire face à des sorties inattendues ou à des tensions de marché sans dépendre immédiatement d\'un financement incertain.',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter son rendement en immobilisant des fonds sur des placements de long terme', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer ses fonds propres lorsque ses pertes dépassent son résultat annuel', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire le risque de défaut de ses clients emprunteurs en limitant ses crédits', 'is_correct' => false],
                            ['choice_text' => 'Pour pouvoir absorber des sorties imprévues et maintenir sa capacité de paiement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un assuré demande une couverture très large mais souhaite aussi une franchise minimale. Quel est le principal compromis économique ?',
                        'explanation' => 'À garanties comparables, une couverture plus généreuse et une faible franchise laissent moins de risque à la charge de l\'assuré. Le prix de la couverture peut donc être plus élevé.',
                        'choices' => [
                            ['choice_text' => 'Une couverture plus large et une franchise plus faible tendent à réduire le coût du transfert', 'is_correct' => false],
                            ['choice_text' => 'Une couverture plus large tend à diminuer le coût du transfert, car le risque est mieux réparti', 'is_correct' => false],
                            ['choice_text' => 'Une franchise plus faible tend à réduire la prime, car l\'assureur supporte moins de petits sinistres', 'is_correct' => false],
                            ['choice_text' => 'Une couverture plus large et une franchise plus faible tendent à augmenter le coût du transfert', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une compagnie voit les demandes d\'indemnisation augmenter après une modification de son processus de déclaration en ligne. Avant de conclure que la sinistralité a explosé, que doit-elle vérifier ?',
                        'explanation' => 'Une hausse des déclarations peut venir de facteurs de processus ou de volume. Il faut distinguer une augmentation des signalements d\'une augmentation réelle de la fréquence ou du coût des sinistres.',
                        'choices' => [
                            ['choice_text' => 'Si le rendement des placements de la compagnie a baissé pendant la période de mise en ligne', 'is_correct' => false],
                            ['choice_text' => 'Si la prime moyenne a augmenté dans les mêmes proportions que le nombre de déclarations', 'is_correct' => false],
                            ['choice_text' => 'Si la hausse vient du canal de déclaration, du volume de dossiers ou d\'un véritable changement de sinistres', 'is_correct' => true],
                            ['choice_text' => 'Si les réassureurs ont modifié leurs conditions de cession pour l\'exercice en cours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une PME a une assurance incendie mais aucun plan de sauvegarde informatique. Pourquoi l\'assurance ne remplace-t-elle pas ce plan ?',
                        'explanation' => 'Le transfert financier et la continuité opérationnelle sont deux leviers différents. Une assurance peut réduire l\'impact financier sans permettre à elle seule de restaurer les systèmes ou les données.',
                        'choices' => [
                            ['choice_text' => 'Le plan de sauvegarde transfère le risque informatique à l\'assureur, tandis que l\'assurance reconstitue les fichiers perdus', 'is_correct' => false],
                            ['choice_text' => 'L\'assurance et le plan de sauvegarde ont le même objectif, mais le plan est moins coûteux à mettre en place', 'is_correct' => false],
                            ['choice_text' => 'L\'assurance peut compenser une partie d\'une perte financière, tandis que le plan de sauvegarde aide à maintenir ou restaurer l\'activité', 'is_correct' => true],
                            ['choice_text' => 'L\'assurance incendie évite la survenue d\'un incendie, tandis que le plan de sauvegarde n\'en limite que les conséquences financières', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut réduire le risque de fraude sur les paiements. Quelle mesure est la plus cohérente ?',
                        'explanation' => 'La séparation des tâches et la validation indépendante sont des contrôles classiques contre les erreurs et certaines fraudes sur les paiements.',
                        'choices' => [
                            ['choice_text' => 'Concentrer la validation des paiements chez un seul responsable de confiance', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de virements en regroupant les paiements en fin de mois', 'is_correct' => false],
                            ['choice_text' => 'Souscrire une assurance contre les variations de change sur les fournisseurs étrangers', 'is_correct' => false],
                            ['choice_text' => 'Mettre en place une séparation des tâches et une validation indépendante', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille d\'assurance contient plusieurs risques indépendants et une petite partie de risques fortement corrélés lors d\'une catastrophe. Pourquoi la seconde partie peut-elle être particulièrement dangereuse ?',
                        'explanation' => 'La corrélation positive en situation de catastrophe peut provoquer un grand nombre de sinistres simultanés. Le risque agrégé devient alors beaucoup plus important.',
                        'choices' => [
                            ['choice_text' => 'Parce que la corrélation fait baisser la prime de l\'ensemble des risques indépendants du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Parce que ces risques sont sinistrés plus souvent que les risques indépendants en période normale', 'is_correct' => false],
                            ['choice_text' => 'Parce que plusieurs sinistres peuvent survenir en même temps et dépasser les hypothèses habituelles', 'is_correct' => true],
                            ['choice_text' => 'Parce que les risques corrélés sont exclus des garanties lorsque la catastrophe est déclarée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après avoir souscrit une assurance très complète, un assuré devient moins vigilant et néglige certaines mesures de prévention. Quel phénomène cela illustre-t-il ?',
                        'explanation' => 'L\'aléa moral désigne le changement de comportement d\'un assuré qui, se sachant couvert, prend moins de précautions. Il se distingue de la sélection adverse, qui concerne le profil des clients au moment de la souscription.',
                        'choices' => [
                            ['choice_text' => 'L\'aléa moral', 'is_correct' => true],
                            ['choice_text' => 'La sélection adverse', 'is_correct' => false],
                            ['choice_text' => 'La subrogation', 'is_correct' => false],
                            ['choice_text' => 'La mutualisation', 'is_correct' => false],
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
