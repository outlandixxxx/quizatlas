<?php

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

        $quizzesData = [
            [
                'title' => "Les bases de l'assurance et du transfert de risque",
                'description' => "Comprendre pourquoi une entreprise ou un particulier utilise l'assurance et comment fonctionne la mutualisation des risques.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une PME sait qu'un incendie pourrait endommager son local. Quelle est la logique principale d'une assurance incendie ?",
                        'choices' => [
                            [
                                'choice_text' => "Transférer une partie de l'impact financier d'un sinistre à l'assureur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Supprimer totalement la probabilité d'incendie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Garantir que l'entreprise réalisera un bénéfice",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éviter toute obligation de prévention",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'assurance ne supprime pas le risque physique d'incendie. Elle permet surtout de transférer à l'assureur une partie de la conséquence financière d'un sinistre couvert, en échange d'une prime.",
                    ],
                    [
                        'question' => "Pourquoi la mutualisation est-elle importante dans l'assurance ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle permet de répartir le coût de nombreux sinistres sur un ensemble d'assurés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit que chaque assuré récupère exactement sa prime",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle élimine tous les risques individuels",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle permet à chaque assuré de fixer librement l'indemnité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La mutualisation repose sur un portefeuille d'assurés : tous ne subiront pas un sinistre au même moment, ce qui permet de financer les sinistres d'une minorité avec les primes collectées auprès de l'ensemble.",
                    ],
                    [
                        'question' => "Laquelle de ces situations correspond le mieux à un risque assurable ?",
                        'choices' => [
                            [
                                'choice_text' => "Un événement incertain pouvant entraîner une perte financière mesurable",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une perte déjà certaine et connue au moment de la souscription",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un gain spéculatif garanti à court terme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une décision commerciale dont le résultat est déjà réalisé",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un risque assurable doit notamment comporter une incertitude sur sa réalisation et une conséquence financière identifiable. Une perte déjà certaine ne constitue pas un risque transférable par une nouvelle police.",
                    ],
                    [
                        'question' => "Un client choisit une couverture avec une franchise plus élevée. Quel effet est le plus probable ?",
                        'choices' => [
                            [
                                'choice_text' => "La prime peut être plus faible, car le client conserve une part plus importante des petits sinistres",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La prime doit nécessairement doubler",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couverture devient automatiquement illimitée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'assureur prend en charge tous les sinistres sans condition",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une franchise plus élevée augmente la part du risque supportée par l'assuré. À garanties comparables, cela peut conduire à une prime plus faible.",
                    ],
                    [
                        'question' => "Une compagnie d'assurance collecte 1 000 € de prime annuelle auprès d'un client. Que représente cette somme pour le client ?",
                        'choices' => [
                            [
                                'choice_text' => "Le prix payé pour bénéficier de la couverture prévue au contrat",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le montant certain qui lui sera remboursé à l'échéance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une caution récupérée automatiquement sans condition",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le coût uniquement lié aux sinistres déjà déclarés",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La prime est le prix de la couverture d'assurance. Son paiement ne signifie pas qu'un remboursement est dû à l'assuré : une indemnisation dépend de la survenance d'un événement couvert et des conditions du contrat.",
                    ],
                    [
                        'question' => "Pourquoi l'assureur cherche-t-il à couvrir beaucoup de risques similaires plutôt qu'un seul risque isolé ?",
                        'choices' => [
                            [
                                'choice_text' => "Un portefeuille diversifié permet de mieux répartir les sinistres aléatoires",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un portefeuille large supprime toute possibilité de sinistre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela permet de connaître à l'avance le bénéficiaire de chaque indemnité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela rend les exclusions du contrat inutiles",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Plus le portefeuille est bien constitué, plus les sinistres individuels peuvent être répartis entre de nombreux contrats. La mutualisation ne supprime pas la sinistralité, mais elle la rend plus prévisible à l'échelle du portefeuille.",
                    ],
                    [
                        'question' => "Un particulier assure sa maison contre le vol. Le contrat contient une exclusion explicite pour certains biens de très grande valeur. Que signifie cette exclusion ?",
                        'choices' => [
                            [
                                'choice_text' => "Ces biens ne sont pas couverts dans les conditions prévues par le contrat",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'assureur doit obligatoirement les indemniser au double de leur valeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La prime couvre automatiquement tous les biens sans limite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'exclusion ne concerne que les sinistres sans preuve",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une exclusion détermine un risque ou un bien que le contrat ne prend pas en charge, sauf disposition contraire. Le contenu précis de la couverture dépend donc des conditions contractuelles.",
                    ],
                    [
                        'question' => "Quel est le rôle principal d'un contrat d'assurance ?",
                        'choices' => [
                            [
                                'choice_text' => "Définir les risques couverts, les limites, les obligations des parties et les conditions d'indemnisation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir que l'assuré ne subira jamais de dommage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Fixer le cours futur des marchés financiers",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Remplacer les états financiers de l'assuré",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le contrat formalise la couverture : événements garantis, exclusions, plafonds, franchises, obligations de l'assuré et modalités de règlement des sinistres.",
                    ],
                    [
                        'question' => "Pourquoi l'assuré doit-il déclarer correctement les informations importantes lors de la souscription ?",
                        'choices' => [
                            [
                                'choice_text' => "L'assureur utilise ces informations pour apprécier le risque et tarifer la couverture",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que la prime est identique quel que soit le risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer toutes les exclusions du contrat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que l'assureur n'a aucune autre source d'information",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les informations déclarées servent à apprécier le profil de risque et à déterminer les conditions de couverture. Une information inexacte peut donc affecter la décision de souscription ou le contrat.",
                    ],
                    [
                        'question' => "Une entreprise décide de garder en interne de petites pertes très fréquentes mais d'assurer un incendie majeur potentiel. Quelle approche adopte-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle combine rétention du risque et transfert du risque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle élimine tous ses risques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle pratique uniquement la spéculation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace l'assurance par un prêt bancaire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'entreprise conserve les pertes qu'elle peut absorber et transfère un risque potentiellement catastrophique à un assureur. C'est une combinaison classique de rétention et de transfert.",
                    ],
                ],
            ],
            [
                'title' => "Prime, franchise et indemnisation",
                'description' => "S'entraîner à raisonner sur la prime, les franchises, les plafonds et le calcul d'une indemnisation simple.",
                'duration' => 22,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Un contrat prévoit une franchise de 500 €. Le dommage couvert est de 3 200 €. En supposant qu'aucun autre plafond ne s'applique, quelle indemnité est versée ?",
                        'choices' => [
                            [
                                'choice_text' => "2 700 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "3 700 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "500 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "3 200 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La franchise reste à la charge de l'assuré. L'indemnité est donc 3 200 € − 500 € = 2 700 €.",
                    ],
                    [
                        'question' => "Une garantie prévoit un plafond de 10 000 €. Un sinistre couvert entraîne une perte de 12 500 €, sans franchise. Quel montant maximal peut être indemnisé ?",
                        'choices' => [
                            [
                                'choice_text' => "10 000 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "12 500 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "2 500 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "22 500 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le plafond limite l'indemnisation à 10 000 €. La perte supplémentaire de 2 500 € reste à la charge de l'assuré.",
                    ],
                    [
                        'question' => "Une prime annuelle passe de 800 € à 920 €. De combien augmente-t-elle en pourcentage ?",
                        'choices' => [
                            [
                                'choice_text' => "15 %",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "12 %",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "20 %",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "8 %",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'augmentation est de 120 €. Le pourcentage est 120 / 800 = 0,15, soit 15 %.",
                    ],
                    [
                        'question' => "Une police prévoit 400 € de franchise par sinistre. Trois petits sinistres distincts de 250 €, 700 € et 1 000 € surviennent. Quelle indemnité totale reçoit l'assuré si la franchise s'applique séparément à chaque sinistre ?",
                        'choices' => [
                            [
                                'choice_text' => "900 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "950 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "1 150 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "1 550 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les indemnités sont respectivement 0 € pour le sinistre de 250 €, 300 € pour celui de 700 € et 600 € pour celui de 1 000 €. Le total est donc 900 €.",
                    ],
                    [
                        'question' => "Un assureur propose une prime de 1 200 € avec une franchise de 1 000 €, alors qu'une autre offre coûte 1 500 € avec une franchise de 250 €. Quel est le principal arbitrage ?",
                        'choices' => [
                            [
                                'choice_text' => "Le client paie moins de prime mais conserve davantage de risque par sinistre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La première offre couvre automatiquement davantage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La franchise n'a aucun effet sur le risque supporté",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La seconde offre supprime tout risque pour l'assuré",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La première offre coûte moins cher mais la franchise est plus élevée. L'assuré supporte donc davantage les pertes en cas de sinistre, surtout pour les dommages modestes.",
                    ],
                    [
                        'question' => "Une voiture est assurée pour une valeur maximale de 18 000 €. Après un sinistre couvert, le coût de réparation est de 14 000 € et la franchise est de 750 €. Quelle indemnité théorique résulte du contrat ?",
                        'choices' => [
                            [
                                'choice_text' => "13 250 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "14 750 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "18 000 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "750 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le dommage est inférieur au plafond. Après déduction de la franchise, l'indemnité théorique est 14 000 € − 750 € = 13 250 €.",
                    ],
                    [
                        'question' => "Pourquoi une prime n'est-elle pas simplement égale au montant potentiel maximal d'un sinistre ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que le sinistre maximal est rarement réalisé et que la tarification intègre la fréquence, la gravité et d'autres coûts",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que l'assureur ne paie jamais de sinistres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la prime est fixée uniquement par le client",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que tous les contrats ont la même exposition",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La prime tient compte notamment de la fréquence attendue des sinistres, de leur coût potentiel, des frais, du capital et d'autres éléments de tarification. Le montant assuré n'est donc pas égal à la prime.",
                    ],
                    [
                        'question' => "Une entreprise choisit une couverture limitée à 50 000 € pour une valeur exposée de 80 000 €. Quel risque évident apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut rester insuffisamment assurée si la perte dépasse la limite de couverture",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle est automatiquement surassurée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle ne paiera aucune prime",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le contrat devient sans franchise",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une limite de 50 000 € ne protège pas intégralement une exposition de 80 000 €. En cas de sinistre important, une partie de la perte peut rester à la charge de l'entreprise.",
                    ],
                    [
                        'question' => "Avec une franchise fixe, qui supporte normalement la première partie de la perte ?",
                        'choices' => [
                            [
                                'choice_text' => "L'assuré",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'assureur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le courtier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La banque de l'assuré",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La franchise correspond à la part initiale du sinistre restant à la charge de l'assuré, selon les modalités du contrat.",
                    ],
                    [
                        'question' => "Une entreprise paie 24 000 € de primes sur trois ans pour une couverture donnée. Sur la même période, les sinistres indemnisés atteignent 15 000 €. Que peut-on conclure immédiatement ?",
                        'choices' => [
                            [
                                'choice_text' => "Les indemnités reçues sont inférieures aux primes versées sur la période",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'assurance a nécessairement été inutile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'entreprise doit récupérer la différence comme un remboursement automatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'assureur a forcément subi une perte",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "15 000 € d'indemnités sont inférieures à 24 000 € de primes. Cela ne suffit toutefois pas à juger la rentabilité globale, car d'autres coûts et risques entrent dans l'analyse.",
                    ],
                ],
            ],
            [
                'title' => "Sélection des risques et souscription",
                'description' => "Comprendre comment un assureur évalue un risque avant de proposer une couverture.",
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Lors de la souscription d'une assurance habitation, pourquoi l'adresse et le type de bâtiment peuvent-ils être demandés ?",
                        'choices' => [
                            [
                                'choice_text' => "Ils donnent des indications utiles sur l'exposition au risque assuré",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils servent uniquement à calculer la date d'anniversaire du contrat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils déterminent automatiquement le montant d'un éventuel remboursement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils remplacent l'analyse des sinistres passés",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La localisation, les caractéristiques du bâtiment et son usage peuvent modifier l'exposition à certains risques. Ces informations peuvent donc intervenir dans la souscription et la tarification.",
                    ],
                    [
                        'question' => "Un assureur constate que certains clients à très haut risque sont beaucoup plus motivés pour acheter une couverture complète. Quel problème économique cela illustre-t-il principalement ?",
                        'choices' => [
                            [
                                'choice_text' => "La sélection adverse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'arbitrage sans risque",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La sélection adverse apparaît lorsque les personnes présentant les risques les plus élevés sont davantage incitées à rechercher certaines couvertures, ce qui peut détériorer le portefeuille si le risque n'est pas correctement tarifé.",
                    ],
                    [
                        'question' => "Un assureur demande l'historique de sinistres d'une entreprise avant d'accepter une police. Quelle est la raison la plus directe ?",
                        'choices' => [
                            [
                                'choice_text' => "Évaluer l'expérience passée et mieux apprécier le risque à couvrir",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir qu'aucun futur sinistre ne surviendra",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Réduire automatiquement le capital de l'entreprise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Déterminer le cours d'une obligation d'État",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'historique de sinistres apporte une information sur la fréquence et parfois la gravité des événements passés. Il aide donc à apprécier le risque futur, sans le prédire parfaitement.",
                    ],
                    [
                        'question' => "Une usine vient d'installer un système automatique de détection d'incendie. Quel effet cela peut-il avoir lors de la souscription ?",
                        'choices' => [
                            [
                                'choice_text' => "Le système peut réduire certains facteurs de risque et être pris en compte dans l'évaluation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il garantit que l'usine ne subira jamais de sinistre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il supprime automatiquement toutes les exclusions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il rend inutile toute franchise",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les mesures de prévention et de protection peuvent modifier l'exposition au risque. Elles peuvent donc être prises en compte dans l'analyse de souscription et la tarification.",
                    ],
                    [
                        'question' => "Pourquoi un assureur ne peut-il pas tarifer correctement un risque sans connaître des informations pertinentes sur son exposition ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que la prime dépend notamment de la fréquence et de la gravité attendues du risque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que toutes les primes sont imposées au même niveau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que l'assureur ne peut pas utiliser de données historiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la prime est décidée après le sinistre",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La tarification cherche à refléter le coût attendu du risque et les autres charges. Sans informations sur l'exposition, l'évaluation devient moins fiable.",
                    ],
                    [
                        'question' => "Une entreprise demande une assurance cyber et refuse de préciser si ses sauvegardes critiques sont isolées du réseau principal. Pourquoi cette information est-elle pertinente ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut influencer l'évaluation de la vulnérabilité et du risque de perte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle ne concerne que la comptabilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle détermine le taux de change de l'entreprise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle garantit le montant de la franchise",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des sauvegardes isolées peuvent réduire l'impact d'une attaque. Leur présence ou leur absence est donc une information utile pour apprécier l'exposition au risque cyber.",
                    ],
                    [
                        'question' => "Quel rôle joue généralement le souscripteur dans une compagnie d'assurance ?",
                        'choices' => [
                            [
                                'choice_text' => "Évaluer le risque et décider des conditions de couverture selon les règles de souscription",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Réparer les biens endommagés après chaque sinistre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Gérer les moyens de paiement de tous les clients",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Déterminer seul les résultats comptables de l'entreprise assurée",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le souscripteur analyse le risque proposé et détermine, dans le cadre des politiques de la compagnie, s'il peut être assuré et à quelles conditions.",
                    ],
                    [
                        'question' => "Une entreprise présente une forte concentration de stocks dans un seul entrepôt. Pourquoi cette caractéristique peut-elle intéresser l'assureur ?",
                        'choices' => [
                            [
                                'choice_text' => "Une concentration physique peut augmenter la gravité potentielle d'un sinistre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle réduit automatiquement tous les risques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle signifie que l'entreprise n'a besoin d'aucune assurance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle garantit une franchise nulle",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Concentrer beaucoup de stocks au même endroit peut accroître la perte maximale en cas d'incendie ou d'autre événement majeur. C'est donc une caractéristique pertinente pour l'appréciation du risque.",
                    ],
                    [
                        'question' => "Un client omet volontairement une information importante qui augmente fortement son exposition. Quel problème cela peut-il créer ?",
                        'choices' => [
                            [
                                'choice_text' => "Une asymétrie d'information qui perturbe l'évaluation et la tarification du risque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse certaine du taux de change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse automatique de la franchise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une amélioration de la qualité du portefeuille",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Si l'assureur dispose de moins d'informations que le client sur le risque réel, la qualité de la sélection et de la tarification peut être affectée. C'est un cas d'asymétrie d'information.",
                    ],
                    [
                        'question' => "Un assureur choisit d'accepter un risque uniquement jusqu'à une certaine limite interne de montant. Cette limite sert principalement à :",
                        'choices' => [
                            [
                                'choice_text' => "Contrôler l'exposition maximale et éviter une concentration excessive du portefeuille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir un rendement boursier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer la nécessité de réassurance dans tous les cas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Fixer le cours d'une devise",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les limites de souscription permettent de contrôler l'exposition individuelle et cumulée de l'assureur. Elles font partie de la discipline de gestion du portefeuille.",
                    ],
                ],
            ],
            [
                'title' => "Sinistres, règlement et indemnisation",
                'description' => "Analyser le parcours d'un sinistre, la vérification des garanties et les principes d'une indemnisation.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Après un dégât des eaux couvert, pourquoi l'assuré doit-il généralement documenter les dommages ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour permettre à l'assureur d'évaluer le sinistre et le montant de la perte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour rendre le sinistre automatiquement accepté",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer la franchise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour transformer le contrat en assurance-vie",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les photos, factures, rapports et autres justificatifs aident à établir la nature et le coût du dommage et à vérifier sa cohérence avec la garantie.",
                    ],
                    [
                        'question' => "Une entreprise signale un sinistre mais continue d'accumuler des pertes évitables alors qu'une mesure raisonnable aurait pu limiter le dommage. Quel principe de gestion du sinistre est concerné ?",
                        'choices' => [
                            [
                                'choice_text' => "L'obligation de limiter raisonnablement l'aggravation du dommage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La diversification du portefeuille boursier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le calcul du P/E",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La duration obligataire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'assuré est généralement attendu à prendre des mesures raisonnables pour éviter l'aggravation du dommage après un événement. Cela ne signifie pas qu'il doit supporter seul une perte couverte, mais qu'il ne doit pas laisser le dommage s'aggraver inutilement.",
                    ],
                    [
                        'question' => "Un sinistre déclaré concerne un événement explicitement exclu du contrat. Quelle conclusion est la plus directe ?",
                        'choices' => [
                            [
                                'choice_text' => "L'événement n'entre pas dans la garantie prévue par cette police",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'assureur doit toujours payer la totalité de la perte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La franchise devient nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La prime doit être remboursée intégralement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une exclusion limite la portée du contrat. Si le sinistre correspond à une exclusion claire et applicable, il n'est pas couvert par cette garantie.",
                    ],
                    [
                        'question' => "Une machine est endommagée. Le contrat couvre les frais de réparation nécessaires, dans la limite prévue. Pourquoi l'assureur vérifie-t-il les factures ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour rapprocher le montant réclamé du coût réel et admissible de la réparation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour augmenter automatiquement le plafond de garantie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour calculer le rendement du portefeuille actions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer la franchise par une prime",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les justificatifs permettent de vérifier le montant du dommage et de s'assurer qu'il correspond aux dépenses couvertes par le contrat.",
                    ],
                    [
                        'question' => "Une perte couverte de 6 000 € est soumise à une franchise de 1 000 €. Quelle part du sinistre reste normalement à la charge de l'assuré ?",
                        'choices' => [
                            [
                                'choice_text' => "1 000 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "5 000 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "6 000 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "0 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Avec une franchise fixe de 1 000 €, cette première tranche reste à la charge de l'assuré.",
                    ],
                    [
                        'question' => "Pourquoi un expert peut-il être mandaté après un sinistre important ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour évaluer les dommages, analyser les causes et contribuer à l'estimation du préjudice",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour fixer les taux directeurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour choisir la monnaie de facturation de l'assuré",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer définitivement le contrat d'assurance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Pour un sinistre important ou complexe, l'expertise aide à établir les faits, la cause du dommage et son coût avant le règlement.",
                    ],
                    [
                        'question' => "Une entreprise réclame 90 000 € alors que le plafond de la garantie concernée est de 70 000 €. Quel point faut-il vérifier en priorité ?",
                        'choices' => [
                            [
                                'choice_text' => "Le plafond contractuel applicable au sinistre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le cours de l'action de l'assureur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le taux de coupon d'une obligation d'État",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le rendement du compte bancaire de l'assuré",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le plafond de la garantie limite l'indemnisation maximale selon les modalités du contrat. C'est donc un élément central de l'analyse.",
                    ],
                    [
                        'question' => "Le paiement d'une indemnité signifie-t-il automatiquement que l'assureur accepte toute future réclamation liée au même événement ?",
                        'choices' => [
                            [
                                'choice_text' => "Non, chaque paiement dépend de l'étendue de la couverture et des faits concernés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, toutes les pertes futures sont automatiquement couvertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, la police devient illimitée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, mais la prime est annulée pour toujours",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le règlement d'un sinistre ne transforme pas le contrat en couverture illimitée. Les futurs dommages restent soumis aux garanties, exclusions, limites et circonstances du contrat.",
                    ],
                    [
                        'question' => "Après un sinistre, l'assureur récupère une partie de ses paiements auprès du responsable du dommage. Quel mécanisme cela illustre-t-il principalement ?",
                        'choices' => [
                            [
                                'choice_text' => "La subrogation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La capitalisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le levier financier",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La subrogation permet à l'assureur, après indemnisation dans les conditions prévues, d'exercer certains recours contre le responsable du dommage pour récupérer les sommes correspondantes.",
                    ],
                    [
                        'question' => "Une police prévoit une franchise de 500 € et un plafond de 20 000 €. La perte couverte est de 18 000 €. Quel montant est versé avant toute autre condition ?",
                        'choices' => [
                            [
                                'choice_text' => "17 500 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "18 000 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "19 500 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "20 000 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La perte de 18 000 € est inférieure au plafond. Après déduction de la franchise de 500 €, l'indemnité est de 17 500 €.",
                    ],
                ],
            ],
            [
                'title' => "Les grands risques financiers",
                'description' => "Distinguer les principaux risques financiers et comprendre leur impact sur une entreprise ou une institution.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une banque perd de la valeur parce que les taux d'intérêt évoluent défavorablement pour son portefeuille obligataire. De quel risque s'agit-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Du risque de marché",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Du risque opérationnel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Du risque juridique uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Du risque de change uniquement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une variation de taux qui modifie la valeur de marché d'un portefeuille obligataire constitue un exemple de risque de marché.",
                    ],
                    [
                        'question' => "Un client important d'une entreprise tarde fortement à payer une facture et risque de faire défaut. Quel risque est principalement concerné ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque de crédit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque climatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de souscription",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le risque de crédit est lié à la possibilité qu'une contrepartie n'honore pas ses obligations financières.",
                    ],
                    [
                        'question' => "Une société dispose de bénéfices comptables mais manque de liquidités pour régler des fournisseurs cette semaine. Quel problème ressort en premier ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque de liquidité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque d'inflation uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de souscription",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'entreprise peut être rentable sur la durée tout en faisant face à un manque de trésorerie immédiat. C'est précisément une situation de risque de liquidité.",
                    ],
                    [
                        'question' => "Une panne du système informatique empêche une banque de traiter les paiements pendant plusieurs heures. Quel risque est le plus directement concerné ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque opérationnel",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de taux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de crédit souverain",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de portefeuille uniquement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une défaillance de processus, de personnel ou de systèmes relève du risque opérationnel. Ici, la panne informatique perturbe directement les opérations.",
                    ],
                    [
                        'question' => "Une entreprise exporte en dollars mais tient ses comptes principalement en euros. Une baisse du dollar par rapport à l'euro peut réduire la valeur en euros des recettes futures. Quel risque est en jeu ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque de change",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de crédit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de fraude uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de duration",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Lorsque la valeur d'un flux dépend d'une devise étrangère, une variation du taux de change peut modifier sa valeur dans la monnaie de référence de l'entreprise.",
                    ],
                    [
                        'question' => "Quel exemple correspond le mieux à un risque stratégique ?",
                        'choices' => [
                            [
                                'choice_text' => "Lancer une nouvelle activité qui se révèle structurellement moins rentable que prévu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une panne ponctuelle d'un serveur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une erreur de saisie d'un paiement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un défaut sur une facture client",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le risque stratégique concerne les choix et orientations de l'entreprise. Un lancement d'activité mal positionné relève davantage de cette catégorie que d'une simple erreur opérationnelle.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise ne devrait-elle pas regarder uniquement la probabilité d'un risque ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que l'impact financier et la capacité d'absorption de la perte comptent aussi",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que la probabilité n'a aucune utilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que tous les risques ont le même coût",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'un risque probable est toujours négligeable",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Deux risques ayant la même probabilité peuvent avoir des conséquences très différentes. La gestion des risques tient donc compte de la fréquence, de la gravité et de la capacité de l'organisation à absorber la perte.",
                    ],
                    [
                        'question' => "Une compagnie d'assurance détient des actifs très liquides pour pouvoir payer rapidement certaines prestations. Quelle logique de gestion cela illustre-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "La gestion du risque de liquidité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réduction du risque de change à zéro",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression du risque de crédit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La gestion exclusive du risque opérationnel",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des actifs liquides permettent de disposer de ressources rapidement mobilisables pour honorer les sorties de trésorerie attendues ou imprévues.",
                    ],
                    [
                        'question' => "Une entreprise dépend de 80 % de ses ventes d'un seul client. Quel risque apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque de concentration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de duration obligataire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de convexité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de coupon",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une forte dépendance à une seule contrepartie crée un risque de concentration : un problème chez ce client peut affecter fortement les revenus de l'entreprise.",
                    ],
                    [
                        'question' => "Quel indicateur est le plus directement utile pour apprécier la liquidité à court terme d'une entreprise ?",
                        'choices' => [
                            [
                                'choice_text' => "Son niveau de trésorerie disponible et ses sorties de cash à court terme",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le nombre de ses brevets",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La durée moyenne de ses contrats marketing",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de ses salariés uniquement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La liquidité dépend de la capacité à faire face aux paiements à venir. La trésorerie disponible et le calendrier des sorties de cash sont donc particulièrement pertinents.",
                    ],
                ],
            ],
            [
                'title' => "Prévention, atténuation et transfert du risque",
                'description' => "Comparer les différentes réponses possibles à un risque et choisir une mesure adaptée à une situation donnée.",
                'duration' => 26,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Une entreprise installe un système de détection d'incendie avant de souscrire une nouvelle police. Quelle catégorie de réponse au risque représente cette action ?",
                        'choices' => [
                            [
                                'choice_text' => "La réduction ou prévention du risque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le transfert intégral du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'acceptation automatique de la perte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La spéculation sur le sinistre",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Installer des dispositifs de prévention et de protection réduit la probabilité ou la gravité potentielle d'un sinistre. Il s'agit d'une mesure de réduction du risque.",
                    ],
                    [
                        'question' => "Une entreprise conserve volontairement les petites pertes imprévues qu'elle peut absorber sans difficulté. Comment décrit-on cette approche ?",
                        'choices' => [
                            [
                                'choice_text' => "La rétention du risque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La subrogation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La titrisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couverture de change",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La rétention signifie que l'organisation accepte de supporter elle-même une partie du risque, souvent lorsque la perte potentielle est faible ou maîtrisable.",
                    ],
                    [
                        'question' => "Une société signe une police pour couvrir une responsabilité importante envers des tiers. Quelle réponse au risque utilise-t-elle principalement ?",
                        'choices' => [
                            [
                                'choice_text' => "Le transfert du risque financier vers l'assureur dans les limites du contrat",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La suppression du risque opérationnel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couverture automatique du risque de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La rétention intégrale du risque",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'assurance transfère à l'assureur une partie de l'impact financier d'un événement couvert. Le risque physique ou juridique lui-même n'est pas nécessairement éliminé.",
                    ],
                    [
                        'question' => "Pourquoi une franchise peut-elle encourager l'assuré à mieux prévenir les petits sinistres ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'une partie de chaque perte reste à sa charge",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que la franchise augmente toujours la couverture",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'elle garantit un bonus sans sinistre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'elle supprime les exclusions",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Avec une franchise, l'assuré supporte une première partie de la perte. Cela peut renforcer l'incitation économique à éviter les sinistres de faible montant.",
                    ],
                    [
                        'question' => "Une entreprise met en place des procédures de double validation pour les virements importants. Quel risque cherche-t-elle surtout à réduire ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque d'erreur ou de fraude opérationnelle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de baisse d'une obligation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de change des actifs étrangers",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque d'inflation mondiale",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une double validation renforce le contrôle interne et peut réduire les erreurs de paiement ou certaines fraudes. Il s'agit d'une mesure de gestion du risque opérationnel.",
                    ],
                    [
                        'question' => "Un distributeur dépend fortement d'un seul fournisseur critique. Quelle mesure réduit le plus directement le risque de concentration ?",
                        'choices' => [
                            [
                                'choice_text' => "Développer une source d'approvisionnement alternative",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Augmenter uniquement la publicité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Réduire le montant du capital social",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Changer la méthode d'amortissement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Disposer d'un second fournisseur réduit la dépendance à une seule contrepartie et améliore la résilience en cas de rupture.",
                    ],
                    [
                        'question' => "Une entreprise compare le coût d'une assurance à la perte maximale qu'elle pourrait supporter sans difficulté. Quel raisonnement fait-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle arbitre entre transfert du risque et capacité de rétention",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle calcule son taux de change spot",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle estime la convexité d'une obligation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle mesure uniquement son bénéfice comptable",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le choix de couverture dépend du coût du transfert du risque, de la fréquence et gravité possibles des pertes et de la capacité financière de l'entreprise à les retenir.",
                    ],
                    [
                        'question' => "Après avoir réduit un risque grâce à des contrôles internes, une banque achète aussi une assurance spécifique pour certains dommages résiduels. Quelle stratégie combine-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Réduction du risque puis transfert de l'exposition résiduelle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Élimination totale de tous les risques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Spéculation et arbitrage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Uniquement la rétention",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une politique de risque efficace combine souvent plusieurs outils : prévention, contrôles, limitation de l'exposition, puis transfert d'une partie du risque qui reste.",
                    ],
                    [
                        'question' => "Quel comportement est le plus cohérent avec une bonne culture de gestion des risques ?",
                        'choices' => [
                            [
                                'choice_text' => "Identifier les risques avant leur survenance et définir des mesures de réponse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Attendre un incident avant de documenter les risques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Considérer qu'un risque couvert n'a plus besoin d'être surveillé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ne suivre que les risques déjà réalisés",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La gestion des risques est préventive autant que corrective. Les risques doivent être identifiés, évalués, suivis et associés à des réponses adaptées.",
                    ],
                    [
                        'question' => "Une entreprise choisit de ne pas assurer un très petit risque fréquent parce que le coût de la police serait disproportionné par rapport à la perte possible. Quel raisonnement est utilisé ?",
                        'choices' => [
                            [
                                'choice_text' => "Le coût du transfert est comparé à la gravité et à la capacité d'absorption du risque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque est automatiquement considéré comme inexistant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'assurance est toujours plus chère que le sinistre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le contrat n'a aucune utilité juridique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un transfert n'est pas toujours économiquement justifié. Pour les pertes faibles et prévisibles, une rétention maîtrisée peut être rationnelle si l'entreprise peut les absorber.",
                    ],
                ],
            ],
            [
                'title' => "Diversification et gestion des risques d'un portefeuille",
                'description' => "Appliquer les notions de diversification, corrélation et concentration à des situations simples de gestion des risques.",
                'duration' => 28,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Un investisseur place tout son portefeuille dans les actions d'une seule entreprise. Quel risque est particulièrement élevé ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque spécifique lié à cette entreprise",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de franchise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de souscription",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une concentration sur une seule entreprise expose fortement au risque spécifique : résultats décevants, fraude, accident industriel ou autre événement propre à l'émetteur.",
                    ],
                    [
                        'question' => "Pourquoi détenir plusieurs actifs peut-il réduire le risque spécifique d'un portefeuille ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les mauvaises performances de certains actifs peuvent être partiellement compensées par celles d'autres actifs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que tous les actifs deviennent sans risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la diversification garantit un rendement positif",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la volatilité disparaît toujours",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La diversification peut réduire le risque propre aux titres lorsque leurs performances ne sont pas parfaitement corrélées. Elle ne supprime toutefois pas le risque de marché.",
                    ],
                    [
                        'question' => "Un portefeuille contient deux actifs dont les rendements évoluent presque toujours dans la même direction. La diversification entre eux est-elle très puissante ?",
                        'choices' => [
                            [
                                'choice_text' => "Non, car une forte corrélation limite le bénéfice de diversification",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, car une forte corrélation élimine le risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, car la corrélation n'a aucun effet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, mais uniquement parce que les actifs sont liquides",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Plus les actifs sont corrélés positivement, moins la diversification entre eux réduit le risque global. La combinaison d'actifs faiblement corrélés est généralement plus utile pour diversifier.",
                    ],
                    [
                        'question' => "Une compagnie répartit son portefeuille de contrats entre plusieurs régions géographiques au lieu de concentrer tous les risques dans une seule zone. Quelle logique applique-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "La diversification géographique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La subrogation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La capitalisation actuarielle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couverture de taux",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Répartir les expositions entre plusieurs zones peut réduire l'impact d'un événement local touchant une seule région.",
                    ],
                    [
                        'question' => "Quel est le principal danger d'une forte concentration de crédit sur une seule contrepartie ?",
                        'choices' => [
                            [
                                'choice_text' => "Un défaut de cette contrepartie peut provoquer une perte importante",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La contrepartie devient automatiquement plus solvable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque disparaît grâce au volume",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La concentration garantit un rendement plus élevé",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La concentration amplifie l'impact potentiel d'un défaut. La diversification des contreparties est donc un outil important de gestion du risque de crédit.",
                    ],
                    [
                        'question' => "Une banque détient 70 % de ses actifs liquides dans une seule institution financière. Quel risque doit particulièrement attirer son attention ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque de concentration de contrepartie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de coupon",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de franchise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque d'inventaire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Même des actifs liquides peuvent créer une concentration de contrepartie. Un problème chez l'unique institution concernée peut alors affecter une part importante du portefeuille.",
                    ],
                    [
                        'question' => "Un investisseur ajoute une obligation d'État à un portefeuille déjà composé d'actions. Quel peut être l'intérêt principal ?",
                        'choices' => [
                            [
                                'choice_text' => "Modifier le profil global de risque et de diversification du portefeuille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir automatiquement un rendement supérieur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer tout risque de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Remplacer l'analyse financière",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Ajouter une classe d'actifs différente peut modifier la sensibilité du portefeuille aux facteurs de marché et améliorer la diversification selon les corrélations et objectifs.",
                    ],
                    [
                        'question' => "Une entreprise répartit 90 % de ses achats auprès d'un seul fournisseur malgré l'existence d'alternatives. Quel principe de gestion des risques est insuffisamment appliqué ?",
                        'choices' => [
                            [
                                'choice_text' => "La diversification des sources",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La convexité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La subrogation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une forte dépendance à un fournisseur augmente le risque de rupture. Diversifier les sources d'approvisionnement peut réduire cette vulnérabilité.",
                    ],
                    [
                        'question' => "Un portefeuille est bien diversifié mais tous ses actifs chutent pendant une crise mondiale. Quelle notion explique qu'un risque puisse rester présent ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque systématique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de franchise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de souscription",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque administratif uniquement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le risque systématique touche largement le marché et ne peut pas être éliminé simplement en diversifiant entre des actifs exposés au même choc macroéconomique.",
                    ],
                    [
                        'question' => "Quel changement réduit le plus clairement la concentration dans un portefeuille très exposé à une seule action ?",
                        'choices' => [
                            [
                                'choice_text' => "Réduire le poids de cette action et répartir davantage l'exposition",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Augmenter encore cette même position",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Acheter uniquement des produits liés à la même entreprise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer tout suivi du portefeuille",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Réduire le poids d'une position dominante et répartir l'exposition sur plusieurs actifs ou facteurs de risque réduit directement la concentration.",
                    ],
                ],
            ],
            [
                'title' => "Risques opérationnels et contrôle interne",
                'description' => "Identifier les risques issus des processus, des systèmes et des personnes, puis associer des contrôles simples à ces risques.",
                'duration' => 27,
                'passing_score' => 63,
                'questions' => [
                    [
                        'question' => "Un salarié saisit deux fois le même paiement fournisseur dans le système. Quel risque cela illustre-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque opérationnel",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de taux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de change",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L'erreur provient d'un processus ou d'une intervention humaine. Elle relève donc du risque opérationnel.",
                    ],
                    [
                        'question' => "Une entreprise limite les droits de paiement en fonction du rôle des employés. Quel contrôle met-elle en place ?",
                        'choices' => [
                            [
                                'choice_text' => "Une séparation des responsabilités et des droits d'accès",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une couverture de change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un investissement spéculatif",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une modification de la prime d'assurance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Limiter les droits selon les rôles réduit la possibilité qu'une même personne puisse initier et valider seule des opérations sensibles.",
                    ],
                    [
                        'question' => "Pourquoi les rapprochements bancaires sont-ils utiles dans le contrôle financier ?",
                        'choices' => [
                            [
                                'choice_text' => "Ils permettent d'identifier des écarts entre les écritures comptables et les opérations bancaires",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils garantissent que le bénéfice est toujours positif",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils réduisent automatiquement le taux d'intérêt",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils remplacent toutes les procédures de sécurité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le rapprochement bancaire compare la comptabilité interne au relevé bancaire et peut révéler des erreurs, opérations non enregistrées ou anomalies.",
                    ],
                    [
                        'question' => "Une plateforme de paiement tombe en panne pendant une période de forte activité commerciale. Quelle conséquence relève directement du risque opérationnel ?",
                        'choices' => [
                            [
                                'choice_text' => "L'impossibilité temporaire de traiter certaines transactions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une baisse automatique des taux directeurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une hausse certaine du cours d'une action",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une suppression de la franchise d'assurance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La panne d'un système critique peut interrompre le traitement des opérations. C'est une conséquence typique du risque opérationnel.",
                    ],
                    [
                        'question' => "Quel contrôle aide le plus directement à réduire les paiements frauduleux ?",
                        'choices' => [
                            [
                                'choice_text' => "Une validation indépendante des paiements importants",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une augmentation du nombre de campagnes marketing",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La réduction du capital social",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le changement de devise de comptabilité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une validation indépendante crée un second niveau de contrôle et peut empêcher qu'une opération frauduleuse soit exécutée sur la base d'une seule personne ou d'une seule saisie.",
                    ],
                    [
                        'question' => "Une entreprise effectue régulièrement une sauvegarde des données critiques dans un environnement séparé. Quel objectif poursuit-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Améliorer la résilience en cas de panne ou de cyberincident",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Augmenter automatiquement ses marges",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer le risque de crédit client",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Réduire le taux d'inflation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des sauvegardes séparées facilitent la restauration des données après une panne, une erreur ou certaines attaques informatiques.",
                    ],
                    [
                        'question' => "Une procédure exige deux signatures pour engager une dépense importante. Quel est l'avantage principal ?",
                        'choices' => [
                            [
                                'choice_text' => "Réduire le risque d'erreur ou de fraude par un contrôle croisé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir que la dépense sera rentable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éliminer tout risque de liquidité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter le rendement du portefeuille",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un contrôle à deux niveaux limite les décisions ou paiements importants pris sans vérification indépendante. Il ne garantit pas la rentabilité de la dépense.",
                    ],
                    [
                        'question' => "Pourquoi un plan de continuité d'activité est-il important pour une institution financière ?",
                        'choices' => [
                            [
                                'choice_text' => "Il prépare des solutions permettant de maintenir ou reprendre les fonctions critiques après une perturbation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il supprime tous les risques de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il remplace les contrats d'assurance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il garantit un bénéfice minimal",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le plan de continuité prépare l'organisation à faire face à des interruptions majeures et à reprendre les processus critiques dans des délais maîtrisés.",
                    ],
                    [
                        'question' => "Une banque constate qu'un même employé peut créer un nouveau bénéficiaire et valider immédiatement un gros virement. Quel point de contrôle semble faible ?",
                        'choices' => [
                            [
                                'choice_text' => "La séparation des tâches",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La diversification du portefeuille",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couverture de change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La politique de dividende",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Permettre à une seule personne de créer une contrepartie et de valider ensuite un paiement important augmente le risque de fraude ou d'erreur. La séparation des tâches est alors insuffisante.",
                    ],
                    [
                        'question' => "Quel comportement indique une culture de contrôle saine ?",
                        'choices' => [
                            [
                                'choice_text' => "Signaler les anomalies et les traiter avant qu'elles ne deviennent des incidents majeurs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Cacher les erreurs pour préserver les indicateurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Attendre un audit externe pour toute correction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Considérer qu'un contrôle est inutile s'il n'y a jamais eu de fraude",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une bonne culture de contrôle favorise la remontée rapide des anomalies, leur analyse et la mise en place d'actions correctives avant aggravation.",
                    ],
                ],
            ],
            [
                'title' => "Mini-cas d'assurance et de gestion des risques",
                'description' => "Mettre en pratique les notions de couverture, franchise, concentration, prévention et arbitrage risque-coût.",
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Une PME possède 100 000 € de stock dans un entrepôt. Elle choisit une couverture maximale de 70 000 €. Après un incendie couvert, la perte est de 60 000 €, avec une franchise de 2 000 €. Quelle indemnité théorique obtient-elle, avant toute autre clause ?",
                        'choices' => [
                            [
                                'choice_text' => "58 000 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "60 000 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "68 000 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "70 000 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La perte de 60 000 € reste sous le plafond de 70 000 €. Après la franchise de 2 000 €, l'indemnité théorique est de 58 000 €.",
                    ],
                    [
                        'question' => "Une entreprise a 50 000 € de trésorerie disponible et doit régler 80 000 € de fournisseurs dans dix jours. Sans financement complémentaire, quel risque est le plus évident ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque de liquidité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de souscription",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de diversification",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La trésorerie disponible ne couvre pas les sorties prévues à court terme. L'entreprise doit donc anticiper un besoin de financement ou de liquidité.",
                    ],
                    [
                        'question' => "Un portefeuille d'assurances contient 60 % de contrats liés à des bâtiments situés dans une même zone exposée aux inondations. Quel problème apparaît en priorité ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque de concentration géographique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de franchise insuffisante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de change",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une forte concentration géographique peut provoquer de nombreux sinistres simultanés si un événement régional survient. Le portefeuille devient alors plus vulnérable à un risque agrégé.",
                    ],
                    [
                        'question' => "Un assureur propose une franchise plus élevée à une entreprise qui met en place de solides mesures de prévention. Quel est le raisonnement économique possible ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque résiduel peut être mieux maîtrisé et l'assuré accepte de conserver une part plus importante des petites pertes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La franchise élevée signifie que l'entreprise n'a plus besoin d'assurance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La prévention garantit qu'aucun sinistre ne surviendra",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le contrat devient automatiquement sans plafond",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les mesures de prévention peuvent réduire l'exposition, tandis qu'une franchise plus élevée fait supporter à l'assuré une partie plus importante des pertes. Le coût global du transfert peut alors être mieux ajusté.",
                    ],
                    [
                        'question' => "Une entreprise dépend d'un client qui représente 65 % de son chiffre d'affaires. Quel scénario serait particulièrement préoccupant ?",
                        'choices' => [
                            [
                                'choice_text' => "La perte de ce client provoque une baisse majeure des revenus et de la trésorerie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le client augmente légèrement le nombre de commandes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'entreprise réduit une dépense non essentielle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le client paie une facture à temps",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une concentration commerciale de 65 % crée une forte dépendance. La perte du client peut provoquer un choc important sur les revenus et la liquidité.",
                    ],
                    [
                        'question' => "Un assureur reçoit 2 000 déclarations de petits dégâts identiques après une tempête locale. Pourquoi la diversification géographique peut-elle être utile pour son portefeuille ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut limiter la dépendance à un même événement régional",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit que toutes les primes augmentent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime le risque climatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle empêche tout sinistre groupé",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Répartir les risques entre plusieurs régions peut réduire l'impact d'un événement local. Cela ne supprime cependant pas le risque climatique ou catastrophique.",
                    ],
                    [
                        'question' => "Une entreprise hésite entre payer 12 000 € de prime annuelle pour une couverture large ou conserver elle-même un risque dont la perte maximale raisonnablement estimée est de 10 000 €. Quelle question devrait-elle examiner ?",
                        'choices' => [
                            [
                                'choice_text' => "Si le coût de la prime et les conditions de couverture justifient le transfert par rapport à sa capacité de rétention",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Si la prime est toujours récupérée à la fin de l'année",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Si l'assurance augmente automatiquement le chiffre d'affaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Si la perte maximale sera forcément réalisée",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le choix dépend de la capacité financière à absorber la perte, de sa probabilité, de l'intérêt des garanties et du coût du transfert. Comparer seulement 12 000 € et 10 000 € ne suffit pas sans examiner l'ensemble du risque.",
                    ],
                    [
                        'question' => "Après une tentative de fraude, une entreprise renforce les contrôles et souscrit une couverture contre certaines pertes résiduelles. Quelle conclusion est la plus juste ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle combine prévention, réduction du risque et transfert d'une partie de l'exposition",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle a supprimé tout risque futur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle n'a plus besoin de contrôles internes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace son système comptable par une assurance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les contrôles réduisent le risque, tandis que l'assurance peut transférer une partie des conséquences financières résiduelles. Aucune de ces mesures ne rend le risque nul.",
                    ],
                    [
                        'question' => "Une société a plusieurs assurances couvrant des événements différents. Pourquoi doit-elle tout de même connaître précisément les exclusions et plafonds de chaque contrat ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'un risque apparemment couvert peut être limité, exclu ou plafonné selon la police",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que toutes les assurances ont exactement les mêmes garanties",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'une assurance couvre automatiquement toutes les pertes d'exploitation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les plafonds n'ont aucun effet en cas de sinistre",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La présence de plusieurs polices ne signifie pas que tous les risques sont intégralement couverts. Les garanties, exclusions, franchises et limites doivent être examinées contrat par contrat.",
                    ],
                    [
                        'question' => "Une entreprise choisit d'assurer un risque catastrophique mais conserve en interne les petites pertes de fonctionnement. Quelle logique de portefeuille applique-t-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle réserve le transfert aux risques lourds et utilise la rétention pour les pertes courantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle transfère tous ses risques sans exception",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle élimine les petits risques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle traite uniquement le risque de marché",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une stratégie équilibrée peut combiner assurance pour les pertes potentiellement très importantes et rétention pour les pertes fréquentes que l'entreprise peut absorber.",
                    ],
                ],
            ],
            [
                'title' => "Quiz d'application : diagnostiquer le risque",
                'description' => "Un ensemble de situations courtes pour vérifier la capacité à identifier le risque dominant et la réponse la plus adaptée.",
                'duration' => 29,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Une entreprise a beaucoup de clients, mais 75 % de ses créances sont concentrées sur trois groupes. Quel risque mérite une surveillance renforcée ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque de concentration de crédit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de franchise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de coupon",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La forte concentration des créances sur trois groupes augmente l'impact potentiel d'un problème de paiement chez l'un d'eux.",
                    ],
                    [
                        'question' => "Une entreprise emprunte à taux variable alors que ses revenus sont relativement stables. Une forte hausse des taux augmente ses charges financières. Quel risque subit-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Un risque de taux d'intérêt",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque de souscription",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de catastrophe naturelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un risque de franchise",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Avec un emprunt à taux variable, une hausse des taux augmente le coût des intérêts. L'entreprise est donc exposée au risque de taux.",
                    ],
                    [
                        'question' => "Un client âgé achète une assurance-vie sans comprendre certaines exclusions parce que le produit lui a été présenté trop rapidement. Quel point de gestion des risques commerciaux est le plus pertinent ?",
                        'choices' => [
                            [
                                'choice_text' => "La qualité de l'information et la compréhension du produit par le client",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La duration de l'obligation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le taux de change spot",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La convexité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une bonne information du client fait partie d'une distribution responsable. Une compréhension insuffisante des garanties peut créer des litiges et un risque de conduite.",
                    ],
                    [
                        'question' => "Une banque conserve un coussin de trésorerie important même lorsqu'aucun incident de paiement n'est prévu. Pourquoi ?",
                        'choices' => [
                            [
                                'choice_text' => "Pour pouvoir absorber des sorties imprévues et maintenir sa capacité de paiement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour supprimer définitivement le risque de crédit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour garantir la hausse des marchés actions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour éviter toute réglementation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un coussin de liquidité sert précisément à faire face à des sorties inattendues ou à des tensions de marché sans dépendre immédiatement d'un financement incertain.",
                    ],
                    [
                        'question' => "Un assuré demande une couverture très large mais souhaite aussi une franchise minimale. Quel est le principal compromis économique ?",
                        'choices' => [
                            [
                                'choice_text' => "Une couverture plus large et une franchise plus faible tendent à augmenter le coût du transfert",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La prime devient forcément nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de l'assuré disparaît sans coût",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La franchise n'a aucun lien avec le prix",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "À garanties comparables, une couverture plus généreuse et une faible franchise laissent moins de risque à la charge de l'assuré. Le prix de la couverture peut donc être plus élevé.",
                    ],
                    [
                        'question' => "Une compagnie voit les demandes d'indemnisation augmenter après une modification de son processus de déclaration en ligne. Avant de conclure que la sinistralité a explosé, que doit-elle vérifier ?",
                        'choices' => [
                            [
                                'choice_text' => "Si la hausse vient du canal de déclaration, du volume de dossiers ou d'un véritable changement de sinistres",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Si toutes les primes sont devenues nulles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Si les taux d'intérêt ont doublé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Si les franchises ont disparu de tous les contrats",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une hausse des déclarations peut venir de facteurs de processus ou de volume. Il faut distinguer une augmentation des signalements d'une augmentation réelle de la fréquence ou du coût des sinistres.",
                    ],
                    [
                        'question' => "Une PME a une assurance incendie mais aucun plan de sauvegarde informatique. Pourquoi l'assurance ne remplace-t-elle pas ce plan ?",
                        'choices' => [
                            [
                                'choice_text' => "L'assurance peut compenser une partie d'une perte financière, tandis que le plan de sauvegarde aide à maintenir ou restaurer l'activité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'assurance sauvegarde automatiquement les fichiers",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le plan de sauvegarde ne sert qu'à calculer la prime",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'assurance supprime toute panne informatique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le transfert financier et la continuité opérationnelle sont deux leviers différents. Une assurance peut réduire l'impact financier sans permettre à elle seule de restaurer les systèmes ou les données.",
                    ],
                    [
                        'question' => "Une entreprise veut réduire le risque de fraude sur les paiements. Quelle mesure est la plus cohérente ?",
                        'choices' => [
                            [
                                'choice_text' => "Mettre en place une séparation des tâches et une validation indépendante",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Augmenter uniquement le budget publicitaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Réduire le nombre de fournisseurs sans analyse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter la durée des immobilisations",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La séparation des tâches et la validation indépendante sont des contrôles classiques contre les erreurs et certaines fraudes sur les paiements.",
                    ],
                    [
                        'question' => "Un portefeuille d'assurance contient plusieurs risques indépendants et une petite partie de risques fortement corrélés lors d'une catastrophe. Pourquoi la seconde partie peut-elle être particulièrement dangereuse ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que plusieurs sinistres peuvent survenir en même temps et dépasser les hypothèses habituelles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les risques indépendants sont toujours plus coûteux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la corrélation réduit toujours les pertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que l'assureur ne paie jamais les risques corrélés",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La corrélation positive en situation de catastrophe peut provoquer un grand nombre de sinistres simultanés. Le risque agrégé devient alors beaucoup plus important.",
                    ],
                    [
                        'question' => "Un responsable financier constate que les pertes possibles sont limitées mais fréquentes et faciles à budgéter. Quelle réponse peut être pertinente ?",
                        'choices' => [
                            [
                                'choice_text' => "Une rétention partielle ou complète, si la capacité financière de l'entreprise le permet",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une assurance illimitée dans tous les cas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression des contrôles internes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'investissement de toute la trésorerie en actifs risqués",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Lorsque les pertes sont fréquentes, de faible montant et absorbables, les retenir peut être économiquement pertinent, sous réserve de la capacité financière de l'entreprise.",
                    ],
                ],
            ],
        ];

        foreach ($quizzesData as $quizData) {
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
