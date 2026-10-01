<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PersonalFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'personal-finance')->firstOrFail();

        $quizzes = [
            [
                'title' => "Construire un budget qui tient dans la vraie vie",
                'description' => "Budget, revenus, dépenses fixes et variables, arbitrages et suivi mensuel.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Samira reçoit 7 500 MAD par mois. Elle paie 2 800 MAD de loyer, 900 MAD pour les courses, 450 MAD de transport et environ 650 MAD de loisirs. Combien lui reste-t-il avant les autres dépenses ?",
                        'choices' => [
                            ['choice_text' => "2 700 MAD", 'is_correct' => true],
                            ['choice_text' => "2 950 MAD", 'is_correct' => false],
                            ['choice_text' => "3 150 MAD", 'is_correct' => false],
                            ['choice_text' => "2 350 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "On additionne les dépenses indiquées : 2 800 + 900 + 450 + 650 = 4 800 MAD. Il reste donc 7 500 - 4 800 = 2 700 MAD. Ce montant doit encore couvrir les dépenses qui ne figurent pas dans la liste.",
                    ],
                    [
                        'question' => "Un ménage constate que ses dépenses dépassent régulièrement ses revenus de 400 MAD. Quelle action est la plus adaptée en premier lieu ?",
                        'choices' => [
                            ['choice_text' => "Identifier précisément les postes qui créent le déficit avant de chercher à le financer", 'is_correct' => true],
                            ['choice_text' => "Augmenter immédiatement les achats payés à crédit", 'is_correct' => false],
                            ['choice_text' => "Reporter toutes les dépenses sur le mois suivant", 'is_correct' => false],
                            ['choice_text' => "Investir davantage pour compenser rapidement le déficit", 'is_correct' => false],
                        ],
                        'explanation' => "Un déficit mensuel récurrent signale un problème de flux de trésorerie. Avant d'ajouter de la dette ou de prendre davantage de risque, il faut comprendre les postes responsables et agir sur les dépenses ou les revenus.",
                    ],
                    [
                        'question' => "Lequel de ces postes est généralement considéré comme une dépense variable ?",
                        'choices' => [
                            ['choice_text' => "Les sorties au restaurant", 'is_correct' => true],
                            ['choice_text' => "Le loyer contractuel mensuel", 'is_correct' => false],
                            ['choice_text' => "Une mensualité fixe de prêt", 'is_correct' => false],
                            ['choice_text' => "Une prime d’assurance annuelle déjà contractualisée", 'is_correct' => false],
                        ],
                        'explanation' => "Les dépenses variables peuvent évoluer d'un mois à l'autre selon les choix et la consommation. Les autres exemples sont généralement plus prévisibles dans leur montant à court terme, même si certaines peuvent évoluer dans le temps.",
                    ],
                    [
                        'question' => "Youssef veut suivre son budget sans passer des heures chaque soir. Quelle méthode est la plus simple pour commencer ?",
                        'choices' => [
                            ['choice_text' => "Regrouper les dépenses par grandes catégories et faire un point une fois par semaine", 'is_correct' => true],
                            ['choice_text' => "Noter uniquement les achats supérieurs à 1 000 MAD", 'is_correct' => false],
                            ['choice_text' => "Ignorer les petites dépenses car elles ne comptent jamais", 'is_correct' => false],
                            ['choice_text' => "Attendre la fin de l'année pour comparer revenus et dépenses", 'is_correct' => false],
                        ],
                        'explanation' => "Le suivi n'a pas besoin d'être complexe pour être utile. Les catégories principales et un contrôle régulier permettent déjà de voir les écarts entre le budget prévu et la réalité.",
                    ],
                    [
                        'question' => "Un budget prévoit 1 200 MAD de dépenses alimentaires, mais le ménage en dépense 1 450 MAD. L'écart est de :",
                        'choices' => [
                            ['choice_text' => "250 MAD au-dessus du budget", 'is_correct' => true],
                            ['choice_text' => "250 MAD en dessous du budget", 'is_correct' => false],
                            ['choice_text' => "650 MAD au-dessus du budget", 'is_correct' => false],
                            ['choice_text' => "17 % en dessous du budget", 'is_correct' => false],
                        ],
                        'explanation' => "L'écart est 1 450 - 1 200 = 250 MAD. La dépense réelle est donc supérieure de 250 MAD au montant prévu.",
                    ],
                    [
                        'question' => "Pourquoi est-il utile de séparer les dépenses essentielles des dépenses discrétionnaires ?",
                        'choices' => [
                            ['choice_text' => "Pour savoir plus facilement où ajuster le budget lorsque les revenus baissent", 'is_correct' => true],
                            ['choice_text' => "Parce que les dépenses discrétionnaires sont toujours inutiles", 'is_correct' => false],
                            ['choice_text' => "Parce que les dépenses essentielles ne peuvent jamais être réduites", 'is_correct' => false],
                            ['choice_text' => "Pour éviter de calculer le revenu disponible", 'is_correct' => false],
                        ],
                        'explanation' => "Cette distinction aide à hiérarchiser les décisions. En cas de baisse de revenu, les dépenses non essentielles offrent souvent davantage de marge d'ajustement à court terme.",
                    ],
                    [
                        'question' => "Une personne gagne 9 000 MAD nets et consacre 3 000 MAD à l'ensemble de ses charges de logement. Quel est le poids du logement dans son revenu net ?",
                        'choices' => [
                            ['choice_text' => "33,3 %", 'is_correct' => true],
                            ['choice_text' => "25 %", 'is_correct' => false],
                            ['choice_text' => "30 %", 'is_correct' => false],
                            ['choice_text' => "40 %", 'is_correct' => false],
                        ],
                        'explanation' => "On calcule 3 000 / 9 000 = 0,3333, soit environ 33,3 %. Le ratio permet d'évaluer le poids du logement dans le budget mensuel.",
                    ],
                    [
                        'question' => "Après trois mois de suivi, un étudiant remarque que ses achats impulsifs viennent presque toujours des livraisons de repas. Quelle décision est la plus cohérente avec son observation ?",
                        'choices' => [
                            ['choice_text' => "Fixer une limite mensuelle spécifique aux livraisons et suivre ce poste séparément", 'is_correct' => true],
                            ['choice_text' => "Supprimer toute épargne jusqu'à ce que les dépenses baissent", 'is_correct' => false],
                            ['choice_text' => "Augmenter sa limite de carte pour avoir plus de marge", 'is_correct' => false],
                            ['choice_text' => "Ne plus regarder ses dépenses pendant quelques mois", 'is_correct' => false],
                        ],
                        'explanation' => "Le suivi a précisément servi à identifier un comportement précis. Une limite ciblée est plus facile à appliquer qu'une règle vague sur toutes les dépenses.",
                    ],
                    [
                        'question' => "Quel indicateur correspond le mieux à l'argent réellement disponible après les dépenses courantes ?",
                        'choices' => [
                            ['choice_text' => "Le revenu disponible après dépenses", 'is_correct' => true],
                            ['choice_text' => "Le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "La capitalisation boursière", 'is_correct' => false],
                            ['choice_text' => "Le nominal d'une obligation", 'is_correct' => false],
                        ],
                        'explanation' => "Pour un ménage, l'argent disponible après les dépenses courantes correspond à la part du revenu qui peut ensuite servir à l'épargne, au remboursement anticipé d'une dette ou à d'autres objectifs.",
                    ],
                    [
                        'question' => "Une dépense annuelle de 6 000 MAD n'est pas mensuelle, mais elle est prévisible. Quel réflexe budgétaire est pertinent ?",
                        'choices' => [
                            ['choice_text' => "Mettre de côté environ 500 MAD par mois pour préparer cette dépense", 'is_correct' => true],
                            ['choice_text' => "Ignorer la dépense car elle n'apparaît qu'une fois par an", 'is_correct' => false],
                            ['choice_text' => "La payer systématiquement avec un crédit renouvelable", 'is_correct' => false],
                            ['choice_text' => "Attendre le mois de paiement pour commencer à épargner", 'is_correct' => false],
                        ],
                        'explanation' => "6 000 / 12 = 500 MAD par mois. Lisser une dépense prévisible permet d'éviter un choc de trésorerie lorsqu'elle arrive.",
                    ],
                ],
            ],

            [
                'title' => "Épargne de précaution et sécurité financière",
                'description' => "Fonds d'urgence, objectifs d'épargne, liquidité et gestion des imprévus.",
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Pourquoi un fonds d'urgence doit-il être facilement accessible ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il sert à faire face à des dépenses imprévues sans devoir vendre rapidement un placement risqué", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il doit obligatoirement être investi en actions", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un fonds d'urgence doit rechercher le rendement maximal", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il remplace toutes les assurances", 'is_correct' => false],
                        ],
                        'explanation' => "La priorité d'un fonds d'urgence est la disponibilité du capital et la stabilité de sa valeur. Son rôle n'est pas de maximiser le rendement mais d'absorber les imprévus.",
                    ],
                    [
                        'question' => "Le ménage de Nadia dépense en moyenne 5 000 MAD par mois pour ses besoins essentiels. Une réserve équivalente à trois mois représente :",
                        'choices' => [
                            ['choice_text' => "15 000 MAD", 'is_correct' => true],
                            ['choice_text' => "8 000 MAD", 'is_correct' => false],
                            ['choice_text' => "12 500 MAD", 'is_correct' => false],
                            ['choice_text' => "20 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Trois mois de dépenses essentielles correspondent à 5 000 × 3 = 15 000 MAD. La logique consiste à relier la taille de la réserve aux dépenses à couvrir.",
                    ],
                    [
                        'question' => "Une personne possède déjà un fonds d'urgence suffisant et économise chaque mois pour acheter une voiture dans deux ans. Quelle caractéristique devrait surtout guider le choix du placement ?",
                        'choices' => [
                            ['choice_text' => "La préservation du capital et une bonne visibilité sur l'épargne à l'horizon prévu", 'is_correct' => true],
                            ['choice_text' => "La recherche du rendement le plus élevé possible, sans tenir compte du risque", 'is_correct' => false],
                            ['choice_text' => "Un placement dont la valeur peut fortement baisser au moment de l'achat", 'is_correct' => false],
                            ['choice_text' => "Un actif choisi uniquement parce qu'il a très bien performé l'an dernier", 'is_correct' => false],
                        ],
                        'explanation' => "Avec un horizon relativement court et un objectif précis, une forte volatilité peut mettre en danger le montant disponible au moment où l'argent est nécessaire.",
                    ],
                    [
                        'question' => "Karim met 1 000 MAD de côté chaque mois. Après six mois, hors intérêts, il devrait avoir :",
                        'choices' => [
                            ['choice_text' => "6 000 MAD", 'is_correct' => true],
                            ['choice_text' => "5 500 MAD", 'is_correct' => false],
                            ['choice_text' => "6 500 MAD", 'is_correct' => false],
                            ['choice_text' => "7 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "À raison de 1 000 MAD par mois pendant six mois, l'épargne cumulée est de 1 000 × 6 = 6 000 MAD, en supposant qu'aucun retrait ni intérêt ne soit pris en compte.",
                    ],
                    [
                        'question' => "Quel est le principal avantage de programmer automatiquement un virement vers un compte d'épargne juste après la réception du salaire ?",
                        'choices' => [
                            ['choice_text' => "Cela transforme l'épargne en priorité plutôt qu'en simple montant restant en fin de mois", 'is_correct' => true],
                            ['choice_text' => "Cela garantit un rendement positif quel que soit le placement", 'is_correct' => false],
                            ['choice_text' => "Cela évite toute dépense imprévue", 'is_correct' => false],
                            ['choice_text' => "Cela supprime automatiquement toutes les dettes", 'is_correct' => false],
                        ],
                        'explanation' => "L'automatisation aide à rendre le comportement d'épargne régulier. Elle ne crée pas de rendement à elle seule et ne remplace pas un budget.",
                    ],
                    [
                        'question' => "Une épargne de 24 000 MAD sert de réserve et les dépenses essentielles sont de 8 000 MAD par mois. Environ combien de mois cette réserve couvre-t-elle ?",
                        'choices' => [
                            ['choice_text' => "3 mois", 'is_correct' => true],
                            ['choice_text' => "2 mois", 'is_correct' => false],
                            ['choice_text' => "4 mois", 'is_correct' => false],
                            ['choice_text' => "6 mois", 'is_correct' => false],
                        ],
                        'explanation' => "24 000 / 8 000 = 3. La réserve représente donc environ trois mois de dépenses essentielles.",
                    ],
                    [
                        'question' => "Lequel de ces événements correspond le mieux à l'usage d'un fonds d'urgence ?",
                        'choices' => [
                            ['choice_text' => "Une réparation automobile nécessaire après une panne imprévue", 'is_correct' => true],
                            ['choice_text' => "Un voyage de vacances planifié dix mois à l'avance", 'is_correct' => false],
                            ['choice_text' => "L'achat volontaire d'un smartphone plus récent", 'is_correct' => false],
                            ['choice_text' => "Une sortie mensuelle au restaurant", 'is_correct' => false],
                        ],
                        'explanation' => "Le fonds d'urgence est destiné aux chocs financiers imprévus et importants. Les dépenses planifiées doivent normalement être financées par une épargne dédiée.",
                    ],
                    [
                        'question' => "Une personne a une réserve de précaution mais utilise régulièrement sa carte de crédit jusqu'à la limite. Que révèle surtout cette situation ?",
                        'choices' => [
                            ['choice_text' => "La présence d'une réserve ne compense pas un budget courant déséquilibré", 'is_correct' => true],
                            ['choice_text' => "La carte de crédit est toujours une forme d'épargne", 'is_correct' => false],
                            ['choice_text' => "Il faut investir le fonds d'urgence en actifs plus risqués", 'is_correct' => false],
                            ['choice_text' => "Le niveau d'épargne est automatiquement suffisant", 'is_correct' => false],
                        ],
                        'explanation' => "Une réserve protège contre les imprévus, mais elle ne doit pas servir à financer durablement un déficit mensuel. Les deux sujets doivent être traités séparément.",
                    ],
                    [
                        'question' => "Quel facteur peut justifier un fonds d'urgence plus important pour un ménage ?",
                        'choices' => [
                            ['choice_text' => "Des revenus instables ou fortement variables", 'is_correct' => true],
                            ['choice_text' => "Une dépense de loisir très faible", 'is_correct' => false],
                            ['choice_text' => "L'utilisation d'un budget annuel", 'is_correct' => false],
                            ['choice_text' => "Le fait de suivre ses dépenses chaque semaine", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les revenus sont irréguliers, le risque d'une période de trésorerie tendue peut être plus élevé. Une réserve plus importante peut alors apporter davantage de marge de sécurité.",
                    ],
                    [
                        'question' => "L'épargne destinée à un apport immobilier dans quatre ans ne devrait pas être gérée exactement comme une épargne destinée à un achat dans deux semaines. Pourquoi ?",
                        'choices' => [
                            ['choice_text' => "Parce que l'horizon et la capacité à supporter les fluctuations de valeur ne sont pas les mêmes", 'is_correct' => true],
                            ['choice_text' => "Parce que l'épargne longue est toujours sans risque", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un horizon plus long interdit toute diversification", 'is_correct' => false],
                            ['choice_text' => "Parce que l'épargne court terme doit obligatoirement être investie en actions", 'is_correct' => false],
                        ],
                        'explanation' => "L'horizon influence le niveau de volatilité qu'une personne peut raisonnablement accepter avant d'utiliser son argent. L'allocation doit donc tenir compte de la date de l'objectif.",
                    ],
                ],
            ],

            [
                'title' => "Crédit, intérêts et remboursement des dettes",
                'description' => "Coût du crédit, mensualités, dette et arbitrages de remboursement.",
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un prêt de 10 000 MAD porte un taux annuel simple de 6 % pour une année. Quel est l'intérêt correspondant sur cette année, hors frais ?",
                        'choices' => [
                            ['choice_text' => "600 MAD", 'is_correct' => true],
                            ['choice_text' => "60 MAD", 'is_correct' => false],
                            ['choice_text' => "1 060 MAD", 'is_correct' => false],
                            ['choice_text' => "940 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Avec un taux simple de 6 %, l'intérêt est 10 000 × 0,06 = 600 MAD. Le coût total du crédit réel peut être supérieur si des frais ou des assurances s'ajoutent.",
                    ],
                    [
                        'question' => "Une banque propose deux crédits de même montant. Le premier affiche un taux plus bas mais des frais importants. Le second affiche un taux légèrement plus élevé sans frais significatifs. Que faut-il comparer ?",
                        'choices' => [
                            ['choice_text' => "Le coût total du crédit et les conditions de chaque offre", 'is_correct' => true],
                            ['choice_text' => "Uniquement le taux nominal affiché en gros sur la publicité", 'is_correct' => false],
                            ['choice_text' => "Uniquement la durée, sans regarder les frais", 'is_correct' => false],
                            ['choice_text' => "Uniquement le montant de la première mensualité", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux seul ne résume pas le coût d'un financement. Les frais, la durée et les autres charges influencent le coût total supporté par l'emprunteur.",
                    ],
                    [
                        'question' => "Que se passe-t-il généralement lorsque la durée d'un prêt est allongée, à taux et conditions comparables ?",
                        'choices' => [
                            ['choice_text' => "La mensualité peut diminuer, mais le coût total des intérêts peut augmenter", 'is_correct' => true],
                            ['choice_text' => "La mensualité et le coût total diminuent toujours ensemble", 'is_correct' => false],
                            ['choice_text' => "Le montant emprunté devient automatiquement plus faible", 'is_correct' => false],
                            ['choice_text' => "Les intérêts disparaissent après la première année", 'is_correct' => false],
                        ],
                        'explanation' => "Une durée plus longue répartit le remboursement sur davantage de périodes. Cela peut alléger la mensualité, mais les intérêts peuvent être versés sur une période plus longue.",
                    ],
                    [
                        'question' => "Le remboursement anticipé d'une dette à taux élevé peut être financièrement intéressant notamment parce qu'il :",
                        'choices' => [
                            ['choice_text' => "réduit les intérêts futurs qui auraient été payés sur le capital restant", 'is_correct' => true],
                            ['choice_text' => "garantit un rendement boursier supérieur à 10 %", 'is_correct' => false],
                            ['choice_text' => "augmente automatiquement le revenu mensuel", 'is_correct' => false],
                            ['choice_text' => "supprime tous les risques financiers du ménage", 'is_correct' => false],
                        ],
                        'explanation' => "En réduisant le capital dû plus tôt, l'emprunteur limite généralement les intérêts futurs associés à ce capital. L'intérêt exact dépend du contrat et des conditions de remboursement.",
                    ],
                    [
                        'question' => "Un ménage rembourse 3 200 MAD de dettes chaque mois pour un revenu net de 10 000 MAD. La charge de dette représente :",
                        'choices' => [
                            ['choice_text' => "32 % du revenu net", 'is_correct' => true],
                            ['choice_text' => "23,8 % du revenu net", 'is_correct' => false],
                            ['choice_text' => "38 % du revenu net", 'is_correct' => false],
                            ['choice_text' => "320 % du revenu net", 'is_correct' => false],
                        ],
                        'explanation' => "On calcule 3 200 / 10 000 = 0,32, soit 32 %. Cet indicateur permet de juger le poids du service de la dette dans le budget.",
                    ],
                    [
                        'question' => "Une personne possède une dette de carte de crédit coûteuse et un petit fonds d'urgence. Quel arbitrage mérite d'être examiné avant un remboursement massif de la dette ?",
                        'choices' => [
                            ['choice_text' => "Garder une réserve minimale pour éviter de devoir reprendre une dette au moindre imprévu", 'is_correct' => true],
                            ['choice_text' => "Utiliser toute la réserve, sans exception, pour solder la dette", 'is_correct' => false],
                            ['choice_text' => "Augmenter les achats à crédit pour améliorer sa trésorerie", 'is_correct' => false],
                            ['choice_text' => "Ignorer le taux de la dette puisqu'il s'agit d'une dette personnelle", 'is_correct' => false],
                        ],
                        'explanation' => "Un remboursement de dette peut être judicieux, mais vider totalement la réserve peut créer un nouveau risque. Il faut trouver un équilibre entre réduction des intérêts et maintien d'une marge de sécurité.",
                    ],
                    [
                        'question' => "Le taux d'intérêt d'un crédit est généralement un élément central du coût d'emprunt parce qu'il :",
                        'choices' => [
                            ['choice_text' => "rémunère le prêteur en contrepartie de l'utilisation du capital dans le temps", 'is_correct' => true],
                            ['choice_text' => "représente toujours le montant total des frais du contrat", 'is_correct' => false],
                            ['choice_text' => "mesure directement le patrimoine de l'emprunteur", 'is_correct' => false],
                            ['choice_text' => "garantit que l'emprunteur ne peut pas faire défaut", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux rémunère le prêteur pour le temps et le risque associés au financement. D'autres composantes peuvent également entrer dans le coût total du crédit.",
                    ],
                    [
                        'question' => "Imaginons qu'un emprunteur compare une dette à 4 % et une autre à 9 %, pour des montants et des durées proches. Sans autre différence importante, laquelle est généralement la plus coûteuse ?",
                        'choices' => [
                            ['choice_text' => "La dette à 9 %", 'is_correct' => true],
                            ['choice_text' => "La dette à 4 %", 'is_correct' => false],
                            ['choice_text' => "Les deux sont forcément identiques", 'is_correct' => false],
                            ['choice_text' => "Impossible de savoir même si les montants et durées sont proches", 'is_correct' => false],
                        ],
                        'explanation' => "À conditions comparables, un taux plus élevé signifie un coût financier plus important sur le capital emprunté. Les frais et la structure exacte du contrat doivent néanmoins être vérifiés pour une comparaison complète.",
                    ],
                    [
                        'question' => "Pourquoi une dette à taux variable peut-elle être plus difficile à gérer qu'une dette à taux fixe ?",
                        'choices' => [
                            ['choice_text' => "Parce que le coût futur des intérêts peut évoluer lorsque le taux de référence change", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elle ne peut jamais être remboursée", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle ne comporte aucun calendrier de paiement", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle est toujours plus chère quel que soit le marché", 'is_correct' => false],
                        ],
                        'explanation' => "Avec un taux variable, une hausse du taux applicable peut augmenter les intérêts et donc la mensualité ou le coût du financement. Le risque est lié à l'incertitude sur les conditions futures.",
                    ],
                    [
                        'question' => "Une banque exige un apport personnel plus élevé pour un crédit immobilier. Du point de vue du prêteur, cela peut notamment :",
                        'choices' => [
                            ['choice_text' => "réduire son exposition au financement du bien et fournir un coussin en cas de baisse de valeur", 'is_correct' => true],
                            ['choice_text' => "garantir que le bien prendra de la valeur", 'is_correct' => false],
                            ['choice_text' => "supprimer tout risque de défaut", 'is_correct' => false],
                            ['choice_text' => "transformer automatiquement le prêt en investissement sans risque", 'is_correct' => false],
                        ],
                        'explanation' => "Un apport plus important signifie que l'emprunteur finance davantage le projet avec ses propres fonds. Cela peut réduire le montant du prêt et la perte potentielle du prêteur si le bien vaut moins que prévu.",
                    ],
                ],
            ],

            [
                'title' => "Comprendre le coût réel d'un financement",
                'description' => "Taux, frais, mensualités, coût total et comparaison de solutions de financement.",
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une offre de crédit indique un taux annuel de 5 % sur un capital de 20 000 MAD, en supposant un calcul simple sur un an et sans autres frais. Quel intérêt correspond à cette hypothèse ?",
                        'choices' => [
                            ['choice_text' => "1 000 MAD", 'is_correct' => true],
                            ['choice_text' => "100 MAD", 'is_correct' => false],
                            ['choice_text' => "1 500 MAD", 'is_correct' => false],
                            ['choice_text' => "4 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "20 000 × 5 % = 1 000 MAD. Il s'agit d'un calcul pédagogique simplifié ; un crédit réel dépend du calendrier de remboursement et de l'ensemble des frais contractuels.",
                    ],
                    [
                        'question' => "Deux cartes proposent le même plafond. La première a des frais annuels élevés mais un coût faible en cas de remboursement intégral chaque mois. La seconde a peu de frais annuels mais un taux élevé sur le solde reporté. Pour une personne qui paie toujours le solde intégral, quel élément peut devenir particulièrement important ?",
                        'choices' => [
                            ['choice_text' => "Les frais annuels et les autres frais effectivement supportés", 'is_correct' => true],
                            ['choice_text' => "Le taux appliqué au solde qu'elle ne laisse jamais courir", 'is_correct' => false],
                            ['choice_text' => "Le plafond, même si elle ne l'utilise jamais", 'is_correct' => false],
                            ['choice_text' => "La variation quotidienne du taux directeur", 'is_correct' => false],
                        ],
                        'explanation' => "Si le solde est toujours remboursé avant de générer des intérêts, le taux sur le crédit reporté devient moins déterminant. Les frais réellement payés prennent alors davantage de poids dans la comparaison.",
                    ],
                    [
                        'question' => "Un prêt prévoit un taux de 8 % et 1 200 MAD de frais initiaux sur un montant de 30 000 MAD. Pourquoi faut-il prendre en compte les 1 200 MAD dans l'analyse ?",
                        'choices' => [
                            ['choice_text' => "Parce que l'emprunteur supporte effectivement cette charge, même si elle n'est pas incluse dans le taux nominal", 'is_correct' => true],
                            ['choice_text' => "Parce que les frais réduisent automatiquement le montant du taux à 0 %", 'is_correct' => false],
                            ['choice_text' => "Parce que les frais représentent toujours exactement 8 % du prêt", 'is_correct' => false],
                            ['choice_text' => "Parce que les frais garantissent le remboursement", 'is_correct' => false],
                        ],
                        'explanation' => "Le coût économique du financement comprend les charges réellement supportées. Un taux affiché ne suffit donc pas à comparer deux offres si leurs frais diffèrent fortement.",
                    ],
                    [
                        'question' => "Une personne hésite entre rembourser une dette à 10 % et placer la même somme sur un produit dont le rendement attendu est de 4 %, toutes choses égales par ailleurs. Quel raisonnement de base est pertinent ?",
                        'choices' => [
                            ['choice_text' => "Rembourser la dette élimine un coût certain proche de 10 %, alors que le rendement de 4 % est un rendement attendu du placement", 'is_correct' => true],
                            ['choice_text' => "Le placement est forcément meilleur car il produit un revenu", 'is_correct' => false],
                            ['choice_text' => "Les deux choix sont mathématiquement identiques", 'is_correct' => false],
                            ['choice_text' => "Le taux de la dette ne compte pas tant qu'elle est personnelle", 'is_correct' => false],
                        ],
                        'explanation' => "Le remboursement d'une dette coûteuse procure une économie d'intérêts qui, dans l'exemple, est connue à l'avance sous réserve des conditions du contrat. Le rendement d'un investissement est, lui, incertain.",
                    ],
                    [
                        'question' => "Quel élément peut rendre une offre de crédit plus difficile à comparer même lorsque les taux annoncés semblent proches ?",
                        'choices' => [
                            ['choice_text' => "Des différences de frais, de durée, d'assurance ou de structure de remboursement", 'is_correct' => true],
                            ['choice_text' => "Le simple fait que les deux banques utilisent le même type de monnaie", 'is_correct' => false],
                            ['choice_text' => "La couleur de la carte remise au client", 'is_correct' => false],
                            ['choice_text' => "Le jour de la semaine où la demande est déposée", 'is_correct' => false],
                        ],
                        'explanation' => "Une comparaison sérieuse doit regarder l'ensemble des conditions économiques du financement. Deux taux proches peuvent conduire à des coûts différents si les autres paramètres changent.",
                    ],
                    [
                        'question' => "Une personne emprunte 50 000 MAD et rembourse progressivement le capital. Pourquoi les intérêts d'un prêt amortissable diminuent-ils généralement au fil du temps, à taux constant ?",
                        'choices' => [
                            ['choice_text' => "Parce que les intérêts sont calculés sur un capital restant dû qui diminue", 'is_correct' => true],
                            ['choice_text' => "Parce que la banque réduit automatiquement son taux chaque mois", 'is_correct' => false],
                            ['choice_text' => "Parce que les intérêts cessent après la moitié du prêt", 'is_correct' => false],
                            ['choice_text' => "Parce que les intérêts sont calculés uniquement sur le premier mois", 'is_correct' => false],
                        ],
                        'explanation' => "Dans un prêt amortissable classique, le capital restant dû baisse avec les remboursements. À taux constant, la composante d'intérêts diminue donc généralement au fil du temps.",
                    ],
                    [
                        'question' => "Une offre propose une mensualité très basse uniquement parce que la durée du crédit est nettement plus longue. Quel risque de lecture faut-il éviter ?",
                        'choices' => [
                            ['choice_text' => "Confondre une mensualité plus faible avec un coût total plus faible", 'is_correct' => true],
                            ['choice_text' => "Penser qu'une durée plus longue réduit toujours le capital emprunté", 'is_correct' => false],
                            ['choice_text' => "Conclure que le crédit est sans intérêt", 'is_correct' => false],
                            ['choice_text' => "Supposer que toutes les mensualités sont des dépenses variables", 'is_correct' => false],
                        ],
                        'explanation' => "La mensualité mesure l'effort périodique, pas à elle seule le coût total. Une durée prolongée peut augmenter le cumul des intérêts même si chaque paiement mensuel est plus léger.",
                    ],
                    [
                        'question' => "Un emprunteur reçoit une proposition de refinancement à un taux plus faible, mais avec des frais importants. Quelle première vérification est logique ?",
                        'choices' => [
                            ['choice_text' => "Comparer l'économie d'intérêts attendue aux frais de refinancement sur l'horizon prévu", 'is_correct' => true],
                            ['choice_text' => "Accepter automatiquement parce que le nouveau taux est plus faible", 'is_correct' => false],
                            ['choice_text' => "Refuser automatiquement parce que tout refinancement est défavorable", 'is_correct' => false],
                            ['choice_text' => "Comparer seulement la date de signature", 'is_correct' => false],
                        ],
                        'explanation' => "Le refinancement n'est intéressant que si les économies générées par les nouvelles conditions compensent les coûts de mise en place et les éventuelles pénalités.",
                    ],
                    [
                        'question' => "Un ménage utilise un découvert bancaire chaque mois pendant plusieurs années. Quel signal budgétaire mérite une attention particulière ?",
                        'choices' => [
                            ['choice_text' => "Le découvert est devenu un mode de financement permanent d'un déficit récurrent", 'is_correct' => true],
                            ['choice_text' => "Le ménage dispose nécessairement d'une excellente gestion de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Le découvert constitue automatiquement une épargne liquide", 'is_correct' => false],
                            ['choice_text' => "Le coût du découvert ne dépend jamais du contrat", 'is_correct' => false],
                        ],
                        'explanation' => "Un découvert utilisé ponctuellement peut absorber un décalage temporaire. Utilisé en permanence, il peut signaler que les dépenses courantes dépassent régulièrement les ressources disponibles.",
                    ],
                    [
                        'question' => "Quel réflexe est le plus utile avant de signer un nouveau crédit important ?",
                        'choices' => [
                            ['choice_text' => "Vérifier l'ensemble des coûts, la mensualité, la durée, les conditions et l'impact sur le budget", 'is_correct' => true],
                            ['choice_text' => "Regarder uniquement le montant que la banque accepte de prêter", 'is_correct' => false],
                            ['choice_text' => "Choisir l'offre dont la publicité est la plus claire", 'is_correct' => false],
                            ['choice_text' => "Prendre la durée maximale pour réduire la mensualité dans tous les cas", 'is_correct' => false],
                        ],
                        'explanation' => "Un crédit est une décision de trésorerie qui engage le ménage sur plusieurs périodes. L'analyse doit relier le coût du financement aux capacités réelles de remboursement.",
                    ],
                ],
            ],

            [
                'title' => "Premiers pas dans l'investissement",
                'description' => "Risque, rendement, diversification, horizon et choix d'investissement.",
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Lina veut investir l'argent dont elle aura besoin dans six mois pour payer ses études. Quel élément doit peser fortement dans sa décision ?",
                        'choices' => [
                            ['choice_text' => "La nécessité de préserver la disponibilité et la valeur du capital à court terme", 'is_correct' => true],
                            ['choice_text' => "La recherche du rendement le plus élevé possible, quel que soit le risque", 'is_correct' => false],
                            ['choice_text' => "Le fait que l'actif soit populaire sur les réseaux sociaux", 'is_correct' => false],
                            ['choice_text' => "L'achat systématique d'actions individuelles très volatiles", 'is_correct' => false],
                        ],
                        'explanation' => "Un horizon très court laisse peu de temps pour absorber une baisse de marché. La sécurité et la liquidité sont donc particulièrement importantes pour une somme destinée à une dépense proche.",
                    ],
                    [
                        'question' => "Pourquoi la diversification peut-elle être utile dans un portefeuille personnel ?",
                        'choices' => [
                            ['choice_text' => "Elle peut réduire l'impact d'une mauvaise performance d'un seul actif ou secteur", 'is_correct' => true],
                            ['choice_text' => "Elle garantit qu'aucun investissement ne pourra jamais perdre de valeur", 'is_correct' => false],
                            ['choice_text' => "Elle garantit automatiquement un rendement supérieur au marché", 'is_correct' => false],
                            ['choice_text' => "Elle supprime tout besoin de suivre ses objectifs", 'is_correct' => false],
                        ],
                        'explanation' => "La diversification répartit le risque entre plusieurs actifs dont les performances ne sont pas parfaitement identiques. Elle réduit certains risques spécifiques mais ne supprime pas le risque de marché.",
                    ],
                    [
                        'question' => "Une action passe de 100 MAD à 110 MAD hors dividende. Le rendement en capital est de :",
                        'choices' => [
                            ['choice_text' => "10 %", 'is_correct' => true],
                            ['choice_text' => "9,09 %", 'is_correct' => false],
                            ['choice_text' => "11 %", 'is_correct' => false],
                            ['choice_text' => "1 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le gain est de 10 MAD sur un investissement initial de 100 MAD. Le rendement en capital est donc 10 / 100 = 10 %.",
                    ],
                    [
                        'question' => "Un investisseur répartit son épargne entre plusieurs entreprises de secteurs différents. Quelle logique cherche-t-il surtout à appliquer ?",
                        'choices' => [
                            ['choice_text' => "La diversification", 'is_correct' => true],
                            ['choice_text' => "Le levier financier", 'is_correct' => false],
                            ['choice_text' => "L'amortissement comptable", 'is_correct' => false],
                            ['choice_text' => "La titrisation", 'is_correct' => false],
                        ],
                        'explanation' => "Répartir les investissements entre secteurs et entreprises différents vise à éviter qu'un seul événement affecte l'ensemble du portefeuille de la même manière.",
                    ],
                    [
                        'question' => "Un fonds a produit 8 % sur une année alors qu'un autre a produit 5 %. Peut-on conclure immédiatement que le premier est meilleur pour tous les investisseurs ?",
                        'choices' => [
                            ['choice_text' => "Non, il faut aussi considérer le risque, l'horizon, les frais et les objectifs de l'investisseur", 'is_correct' => true],
                            ['choice_text' => "Oui, le rendement historique suffit toujours", 'is_correct' => false],
                            ['choice_text' => "Oui, à condition que les deux fonds existent depuis au moins un an", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu'un rendement de 8 % est nécessairement faux", 'is_correct' => false],
                        ],
                        'explanation' => "Un rendement plus élevé sur une période donnée ne donne pas, à lui seul, une conclusion générale sur la qualité d'un investissement. Le rendement doit être mis en regard du risque et du besoin de l'investisseur.",
                    ],
                    [
                        'question' => "Quel est le principal problème lorsqu'une personne investit toutes ses économies dans une seule action parce qu'elle connaît bien l'entreprise ?",
                        'choices' => [
                            ['choice_text' => "Une concentration élevée du risque", 'is_correct' => true],
                            ['choice_text' => "Une diversification excessive", 'is_correct' => false],
                            ['choice_text' => "Une baisse automatique du rendement", 'is_correct' => false],
                            ['choice_text' => "Une impossibilité de recevoir des dividendes", 'is_correct' => false],
                        ],
                        'explanation' => "Même lorsqu'un investisseur connaît bien une entreprise, il reste exposé aux risques propres à celle-ci. Concentrer tout son patrimoine augmente l'impact potentiel d'un problème spécifique.",
                    ],
                    [
                        'question' => "Une obligation détenue jusqu'à l'échéance peut rembourser son nominal sous réserve du respect des engagements de l'émetteur. Pourquoi le risque de crédit reste-t-il important ?",
                        'choices' => [
                            ['choice_text' => "Parce que l'émetteur peut ne pas être capable de payer les flux promis", 'is_correct' => true],
                            ['choice_text' => "Parce que le nominal change chaque jour par définition", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une obligation ne verse jamais d'intérêts", 'is_correct' => false],
                            ['choice_text' => "Parce que l'échéance élimine toute possibilité de perte", 'is_correct' => false],
                        ],
                        'explanation' => "La promesse de remboursement dépend de la capacité de l'émetteur à respecter ses obligations. Le risque de crédit ne disparaît donc pas simplement parce qu'une obligation a une échéance définie.",
                    ],
                    [
                        'question' => "Une personne investit 2 000 MAD dans un actif et le revend 2 300 MAD, sans dividendes ni frais. Son gain nominal est de :",
                        'choices' => [
                            ['choice_text' => "300 MAD", 'is_correct' => true],
                            ['choice_text' => "15 MAD", 'is_correct' => false],
                            ['choice_text' => "2 300 MAD", 'is_correct' => false],
                            ['choice_text' => "30 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le gain en valeur est 2 300 - 2 000 = 300 MAD. Le rendement correspondant serait de 300 / 2 000 = 15 %.",
                    ],
                    [
                        'question' => "Quel comportement est le plus compatible avec une démarche d'investissement disciplinée ?",
                        'choices' => [
                            ['choice_text' => "Définir un objectif, un horizon et un niveau de risque avant de choisir les actifs", 'is_correct' => true],
                            ['choice_text' => "Acheter uniquement ce qui vient de fortement monter", 'is_correct' => false],
                            ['choice_text' => "Modifier son portefeuille chaque fois qu'une rumeur apparaît en ligne", 'is_correct' => false],
                            ['choice_text' => "Emprunter systématiquement pour augmenter les montants investis", 'is_correct' => false],
                        ],
                        'explanation' => "Une démarche structurée commence par les objectifs et les contraintes de l'investisseur. Les produits viennent ensuite, plutôt que l'inverse.",
                    ],
                    [
                        'question' => "Un investisseur reçoit 80 MAD de dividendes sur une position achetée 2 000 MAD, sans variation de cours. Le rendement du dividende est de :",
                        'choices' => [
                            ['choice_text' => "4 %", 'is_correct' => true],
                            ['choice_text' => "8 %", 'is_correct' => false],
                            ['choice_text' => "0,4 %", 'is_correct' => false],
                            ['choice_text' => "16 %", 'is_correct' => false],
                        ],
                        'explanation' => "80 / 2 000 = 0,04, soit 4 %. Ici, aucun gain ou perte en capital n'est pris en compte.",
                    ],
                    [
                        'question' => "Pourquoi les frais de placement méritent-ils de l'attention sur une longue période ?",
                        'choices' => [
                            ['choice_text' => "Parce que des frais répétés réduisent le capital qui reste investi et peut produire des rendements futurs", 'is_correct' => true],
                            ['choice_text' => "Parce que les frais garantissent toujours une meilleure performance", 'is_correct' => false],
                            ['choice_text' => "Parce que les frais sont toujours récupérés à la vente", 'is_correct' => false],
                            ['choice_text' => "Parce que les frais n'ont d'impact que la première année", 'is_correct' => false],
                        ],
                        'explanation' => "Sur une longue période, une charge récurrente diminue non seulement le montant payé, mais aussi le capital qui aurait pu rester investi et générer lui-même des rendements.",
                    ],
                ],
            ],

            [
                'title' => "Planifier un projet et son financement",
                'description' => "Objectifs financiers, horizon, épargne programmée et arbitrages entre projets.",
                'duration' => 28,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Mouna souhaite constituer 36 000 MAD pour un projet dans 24 mois, sans tenir compte des intérêts. Combien doit-elle épargner en moyenne par mois ?",
                        'choices' => [
                            ['choice_text' => "1 500 MAD", 'is_correct' => true],
                            ['choice_text' => "1 200 MAD", 'is_correct' => false],
                            ['choice_text' => "1 800 MAD", 'is_correct' => false],
                            ['choice_text' => "2 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "36 000 / 24 = 1 500 MAD par mois. Le calcul est volontairement simple et suppose aucun rendement, frais ou variation du montant à épargner.",
                    ],
                    [
                        'question' => "Une famille prépare à la fois un projet immobilier dans trois ans et des vacances dans quatre mois. Pourquoi les deux objectifs peuvent-ils nécessiter des poches d'épargne distinctes ?",
                        'choices' => [
                            ['choice_text' => "Leur horizon et le niveau de risque acceptable avant utilisation ne sont pas les mêmes", 'is_correct' => true],
                            ['choice_text' => "Parce que toute épargne doit être placée dans des banques différentes", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un objectif long terme ne peut jamais être liquide", 'is_correct' => false],
                            ['choice_text' => "Parce que les vacances sont nécessairement un investissement", 'is_correct' => false],
                        ],
                        'explanation' => "Une dépense proche doit généralement être protégée contre une forte baisse de valeur, tandis qu'un projet plus lointain peut parfois supporter davantage de fluctuations selon les objectifs et contraintes du ménage.",
                    ],
                    [
                        'question' => "Un ménage augmente ses dépenses de logement de 1 000 MAD par mois sans augmenter ses revenus. Quel sera l'effet immédiat sur sa capacité d'épargne, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Elle diminuera de 1 000 MAD par mois", 'is_correct' => true],
                            ['choice_text' => "Elle augmentera de 1 000 MAD par mois", 'is_correct' => false],
                            ['choice_text' => "Elle ne changera jamais", 'is_correct' => false],
                            ['choice_text' => "Elle diminuera de seulement 100 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse de dépense sans hausse de revenu réduit mécaniquement le montant disponible pour l'épargne ou d'autres usages de trésorerie.",
                    ],
                    [
                        'question' => "Une personne a deux objectifs : rembourser une dette chère et financer un voyage dans six mois. Quelle approche est généralement raisonnable ?",
                        'choices' => [
                            ['choice_text' => "Tenir compte du coût de la dette, de la priorité du voyage et d'une réserve minimale pour les imprévus", 'is_correct' => true],
                            ['choice_text' => "Financer d'abord le voyage quel que soit le taux de la dette", 'is_correct' => false],
                            ['choice_text' => "Solder la dette en vidant toute épargne sans conserver aucune réserve", 'is_correct' => false],
                            ['choice_text' => "Emprunter pour le voyage et investir en même temps toute l'épargne disponible", 'is_correct' => false],
                        ],
                        'explanation' => "Les décisions financières sont souvent des arbitrages. Il faut considérer le coût certain de la dette, l'importance de l'objectif et la nécessité de garder un coussin de liquidité.",
                    ],
                    [
                        'question' => "Le budget d'un projet prévoit une dépense de 50 000 MAD, mais la personne dispose seulement de 42 000 MAD. Le manque à financer est de :",
                        'choices' => [
                            ['choice_text' => "8 000 MAD", 'is_correct' => true],
                            ['choice_text' => "7 000 MAD", 'is_correct' => false],
                            ['choice_text' => "9 000 MAD", 'is_correct' => false],
                            ['choice_text' => "12 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "50 000 - 42 000 = 8 000 MAD. Ce montant peut ensuite être couvert par une épargne supplémentaire, une réduction du budget ou un financement, selon le contexte.",
                    ],
                    [
                        'question' => "Une personne souhaite acheter un ordinateur de 12 000 MAD dans 12 mois. Quel montant mensuel faut-il mettre de côté, hors rendement et frais, pour atteindre exactement l'objectif ?",
                        'choices' => [
                            ['choice_text' => "1 000 MAD", 'is_correct' => true],
                            ['choice_text' => "900 MAD", 'is_correct' => false],
                            ['choice_text' => "1 200 MAD", 'is_correct' => false],
                            ['choice_text' => "1 500 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "12 000 / 12 = 1 000 MAD par mois. Une épargne programmée rend l'objectif plus facile à intégrer dans le budget courant.",
                    ],
                    [
                        'question' => "Quel est l'intérêt d'un objectif financier chiffré et daté ?",
                        'choices' => [
                            ['choice_text' => "Il permet de calculer un effort d'épargne et de vérifier régulièrement si l'on est sur la bonne trajectoire", 'is_correct' => true],
                            ['choice_text' => "Il garantit que le projet coûtera exactement le même montant", 'is_correct' => false],
                            ['choice_text' => "Il empêche toute variation des revenus", 'is_correct' => false],
                            ['choice_text' => "Il rend inutile tout suivi budgétaire", 'is_correct' => false],
                        ],
                        'explanation' => "Un objectif quantifié donne un repère concret. Il ne garantit pas le coût futur, mais il facilite l'ajustement de l'épargne lorsque la situation change.",
                    ],
                    [
                        'question' => "Un couple dispose d'un revenu confortable mais réalise chaque mois de nombreux achats imprévus. Le problème principal peut venir :",
                        'choices' => [
                            ['choice_text' => "d'un manque de visibilité sur les sorties de trésorerie, même lorsque le revenu est suffisant", 'is_correct' => true],
                            ['choice_text' => "du fait qu'un revenu élevé interdit toute gestion budgétaire", 'is_correct' => false],
                            ['choice_text' => "d'un besoin automatique d'augmenter la dette", 'is_correct' => false],
                            ['choice_text' => "du fait qu'un budget n'est utile qu'aux ménages à faible revenu", 'is_correct' => false],
                        ],
                        'explanation' => "La gestion financière ne dépend pas uniquement du niveau de revenu. Une bonne visibilité sur les flux permet d'éviter que des dépenses dispersées ne réduisent progressivement la capacité d'épargne.",
                    ],
                    [
                        'question' => "Pour financer un projet dans six mois, quel événement serait le plus préoccupant ?",
                        'choices' => [
                            ['choice_text' => "Une forte baisse de valeur du placement au moment où l'argent doit être utilisé", 'is_correct' => true],
                            ['choice_text' => "Une augmentation temporaire de la liquidité du placement", 'is_correct' => false],
                            ['choice_text' => "La réception d'un relevé mensuel", 'is_correct' => false],
                            ['choice_text' => "Une baisse des frais bancaires", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque la date de dépense est proche, une baisse de valeur peut laisser le capital insuffisant. Le choix du placement doit donc être cohérent avec l'horizon.",
                    ],
                    [
                        'question' => "Une épargne mensuelle de 750 MAD est augmentée à 900 MAD. De combien l'effort d'épargne augmente-t-il par mois ?",
                        'choices' => [
                            ['choice_text' => "150 MAD", 'is_correct' => true],
                            ['choice_text' => "100 MAD", 'is_correct' => false],
                            ['choice_text' => "250 MAD", 'is_correct' => false],
                            ['choice_text' => "1 650 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "900 - 750 = 150 MAD. Une petite hausse régulière de l'épargne peut faire une différence importante sur un objectif de moyen terme.",
                    ],
                ],
            ],

            [
                'title' => "Protection du patrimoine et assurance",
                'description' => "Risques personnels, assurance, franchises, couverture et gestion des pertes potentielles.",
                'duration' => 29,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "À quoi sert principalement une assurance habitation ?",
                        'choices' => [
                            ['choice_text' => "À transférer à l'assureur certains risques prévus par le contrat, en échange d'une prime", 'is_correct' => true],
                            ['choice_text' => "À garantir automatiquement une hausse de la valeur du logement", 'is_correct' => false],
                            ['choice_text' => "À remplacer totalement un fonds d'urgence", 'is_correct' => false],
                            ['choice_text' => "À supprimer tous les risques financiers du ménage", 'is_correct' => false],
                        ],
                        'explanation' => "L'assurance permet de transférer certains risques à un assureur selon les garanties prévues. Elle ne couvre pas tout et ne remplace pas les autres outils de gestion financière.",
                    ],
                    [
                        'question' => "Une police prévoit une franchise de 2 000 MAD. Si un sinistre couvert entraîne une perte de 7 000 MAD et qu'aucune autre limite ne s'applique, quelle part est théoriquement à la charge de l'assuré au titre de la franchise ?",
                        'choices' => [
                            ['choice_text' => "2 000 MAD", 'is_correct' => true],
                            ['choice_text' => "5 000 MAD", 'is_correct' => false],
                            ['choice_text' => "7 000 MAD", 'is_correct' => false],
                            ['choice_text' => "9 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "La franchise correspond à la part du sinistre qui reste à la charge de l'assuré selon les conditions du contrat. Dans cet exemple simplifié, elle est de 2 000 MAD.",
                    ],
                    [
                        'question' => "Pourquoi une personne ayant des revenus dépendant fortement de son travail peut-elle accorder une attention particulière à l'assurance incapacité ou invalidité selon sa situation ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une interruption de capacité de travail peut réduire fortement ses revenus", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une assurance garantit toujours une hausse de salaire", 'is_correct' => false],
                            ['choice_text' => "Parce que le risque de baisse de revenu concerne uniquement les retraités", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une assurance remplace automatiquement toute épargne", 'is_correct' => false],
                        ],
                        'explanation' => "Le besoin d'assurance dépend de la vulnérabilité financière du ménage. Si une incapacité peut interrompre une source essentielle de revenu, la protection contre ce risque peut devenir importante.",
                    ],
                    [
                        'question' => "Quel est le rôle économique d'une franchise plus élevée, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "L'assuré supporte une part plus importante des petits sinistres et la prime peut être plus faible", 'is_correct' => true],
                            ['choice_text' => "L'assureur couvre automatiquement tous les petits sinistres", 'is_correct' => false],
                            ['choice_text' => "La couverture devient nécessairement plus large", 'is_correct' => false],
                            ['choice_text' => "Le risque assuré disparaît", 'is_correct' => false],
                        ],
                        'explanation' => "Une franchise plus élevée réduit la part des pertes transférées à l'assureur pour les sinistres de faible montant. En contrepartie, le coût de la prime peut être inférieur selon le contrat.",
                    ],
                    [
                        'question' => "Une personne possède un bien de grande valeur mais une assurance avec une couverture très inférieure à la valeur réelle. Quel problème peut se poser ?",
                        'choices' => [
                            ['choice_text' => "Une perte importante pourrait ne pas être entièrement indemnisée", 'is_correct' => true],
                            ['choice_text' => "Le bien devient automatiquement plus rentable", 'is_correct' => false],
                            ['choice_text' => "L'assureur doit toujours payer la totalité de la valeur du bien", 'is_correct' => false],
                            ['choice_text' => "La sous-assurance augmente mécaniquement le rendement du portefeuille", 'is_correct' => false],
                        ],
                        'explanation' => "Le niveau de couverture doit être cohérent avec le risque et la valeur à protéger. Une couverture insuffisante peut laisser une perte résiduelle importante à la charge du propriétaire.",
                    ],
                    [
                        'question' => "Pourquoi lire les exclusions d'une police d'assurance est-il aussi important que regarder le montant de la prime ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une garantie ne produit une protection que dans le périmètre défini par le contrat", 'is_correct' => true],
                            ['choice_text' => "Parce que les exclusions déterminent toujours le rendement du portefeuille", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une prime élevée signifie automatiquement une couverture complète", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une assurance sans exclusion n'existe jamais", 'is_correct' => false],
                        ],
                        'explanation' => "Le prix d'une assurance ne suffit pas à évaluer sa protection. Les exclusions, plafonds, franchises et conditions précisent les situations réellement couvertes.",
                    ],
                    [
                        'question' => "Quel exemple représente le mieux un risque assurable classique ?",
                        'choices' => [
                            ['choice_text' => "Le risque qu'un logement subisse un dommage couvert par une police", 'is_correct' => true],
                            ['choice_text' => "La volonté d'obtenir une forte plus-value sur une action", 'is_correct' => false],
                            ['choice_text' => "La certitude qu'un placement dépassera 10 %", 'is_correct' => false],
                            ['choice_text' => "L'envie de gagner un concours", 'is_correct' => false],
                        ],
                        'explanation' => "L'assurance est conçue pour certains événements incertains pouvant provoquer une perte et répondant aux conditions du contrat. Une recherche volontaire de gain n'est pas, en elle-même, un risque assurable au sens classique.",
                    ],
                    [
                        'question' => "Un ménage a peu d'épargne disponible mais plusieurs personnes à charge. Quel raisonnement est pertinent lorsqu'il examine sa couverture d'assurance ?",
                        'choices' => [
                            ['choice_text' => "Prioriser les risques qui pourraient provoquer un choc financier difficile à absorber", 'is_correct' => true],
                            ['choice_text' => "Assurer uniquement les biens les moins importants", 'is_correct' => false],
                            ['choice_text' => "Choisir les assurances uniquement en fonction de leur publicité", 'is_correct' => false],
                            ['choice_text' => "Supprimer toutes les assurances et utiliser systématiquement le crédit", 'is_correct' => false],
                        ],
                        'explanation' => "La gestion du risque consiste à examiner la gravité possible d'un événement et la capacité du ménage à supporter la perte. Les risques majeurs et difficiles à financer par soi-même méritent une attention particulière.",
                    ],
                    [
                        'question' => "Une personne compare deux assurances affichant le même prix. L'une a une franchise de 500 MAD, l'autre de 2 500 MAD. Que ne peut-on pas conclure à partir du prix seul ?",
                        'choices' => [
                            ['choice_text' => "Que les deux contrats offrent exactement le même niveau de protection", 'is_correct' => true],
                            ['choice_text' => "Que la franchise est un élément du contrat", 'is_correct' => false],
                            ['choice_text' => "Que les conditions doivent être lues avant de choisir", 'is_correct' => false],
                            ['choice_text' => "Que le montant réellement supporté par l'assuré peut différer", 'is_correct' => false],
                        ],
                        'explanation' => "Deux contrats au même prix peuvent différer par les franchises, plafonds, exclusions et garanties. Le niveau de protection ne doit donc pas être résumé par la seule prime.",
                    ],
                    [
                        'question' => "Quel réflexe est cohérent lors d'une revue annuelle des assurances personnelles ?",
                        'choices' => [
                            ['choice_text' => "Vérifier que les montants assurés et les garanties correspondent encore à la situation du ménage", 'is_correct' => true],
                            ['choice_text' => "Conserver les contrats inchangés quelle que soit l'évolution de la situation", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute couverture devenue moins utilisée sans lire le contrat", 'is_correct' => false],
                            ['choice_text' => "Évaluer uniquement le montant de la prime et ignorer les garanties", 'is_correct' => false],
                        ],
                        'explanation' => "Un changement de logement, de revenus, de famille ou de patrimoine peut modifier les besoins de protection. Une revue périodique permet d'identifier les écarts entre le risque actuel et les garanties existantes.",
                    ],
                ],
            ],

            [
                'title' => "Préparer sa retraite et ses objectifs de long terme",
                'description' => "Horizon long, effort d'épargne, inflation, capitalisation et préparation financière.",
                'duration' => 31,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Pourquoi commencer à épargner tôt pour un objectif de retraite peut-il être avantageux ?",
                        'choices' => [
                            ['choice_text' => "Parce que le capital peut rester investi plus longtemps et bénéficier de la capitalisation des rendements", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un investissement long terme ne comporte jamais de risque", 'is_correct' => false],
                            ['choice_text' => "Parce que les revenus sont garantis dès la première année", 'is_correct' => false],
                            ['choice_text' => "Parce que l'inflation disparaît avec un horizon long", 'is_correct' => false],
                        ],
                        'explanation' => "Le temps permet aux rendements de s'ajouter au capital puis de produire à leur tour des rendements. La capitalisation peut donc jouer un rôle important sur de longues périodes.",
                    ],
                    [
                        'question' => "Une personne met 1 500 MAD de côté chaque mois pendant 12 mois, sans rendement. Quel capital aura-t-elle accumulé ?",
                        'choices' => [
                            ['choice_text' => "18 000 MAD", 'is_correct' => true],
                            ['choice_text' => "15 000 MAD", 'is_correct' => false],
                            ['choice_text' => "16 500 MAD", 'is_correct' => false],
                            ['choice_text' => "20 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "1 500 × 12 = 18 000 MAD. La calcul suppose qu'aucun intérêt ni aucun retrait n'intervient pendant la période.",
                    ],
                    [
                        'question' => "Pourquoi une inflation durable peut-elle modifier le montant à prévoir pour la retraite ?",
                        'choices' => [
                            ['choice_text' => "Parce que le coût futur des biens et services peut être supérieur à leur coût actuel", 'is_correct' => true],
                            ['choice_text' => "Parce que l'inflation garantit un meilleur rendement réel", 'is_correct' => false],
                            ['choice_text' => "Parce que les dépenses de retraite deviennent automatiquement nulles", 'is_correct' => false],
                            ['choice_text' => "Parce que l'inflation réduit toujours les prix", 'is_correct' => false],
                        ],
                        'explanation' => "Avec l'inflation, un même montant nominal permet généralement d'acheter moins de biens et services au fil du temps. La planification doit donc tenir compte du pouvoir d'achat futur.",
                    ],
                    [
                        'question' => "Un investisseur de 30 ans et une personne de 62 ans ont exactement le même objectif de retraite à court terme. Leurs allocations peuvent-elles être identiques ?",
                        'choices' => [
                            ['choice_text' => "Pas nécessairement, car l'horizon, la capacité à supporter les fluctuations et les besoins de retrait peuvent différer", 'is_correct' => true],
                            ['choice_text' => "Oui, l'âge n'a jamais aucun lien avec la gestion du risque", 'is_correct' => false],
                            ['choice_text' => "Oui, parce que tous les objectifs de retraite sont identiques", 'is_correct' => false],
                            ['choice_text' => "Non, parce que la personne de 30 ans doit obligatoirement investir uniquement en liquidités", 'is_correct' => false],
                        ],
                        'explanation' => "L'allocation dépend de plusieurs facteurs : horizon, besoin de revenus, tolérance au risque, capacité à supporter les pertes et situation globale. L'âge n'est qu'un élément parmi d'autres.",
                    ],
                    [
                        'question' => "Une épargne rapporte 6 % alors que l'inflation est de 3 %, sans tenir compte des impôts et frais. Le rendement réel approximatif est proche de :",
                        'choices' => [
                            ['choice_text' => "3 %", 'is_correct' => true],
                            ['choice_text' => "9 %", 'is_correct' => false],
                            ['choice_text' => "18 %", 'is_correct' => false],
                            ['choice_text' => "0,5 %", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une approximation pédagogique, on peut retenir 6 % - 3 % = 3 %. Le calcul exact du rendement réel est (1,06 / 1,03) - 1, légèrement inférieur à 3 %.",
                    ],
                    [
                        'question' => "Une personne approche de la date où elle devra commencer à retirer régulièrement une partie de son épargne retraite. Pourquoi la liquidité devient-elle particulièrement importante ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elle doit pouvoir financer les retraits sans dépendre d'une vente forcée d'un actif au mauvais moment", 'is_correct' => true],
                            ['choice_text' => "Parce que la liquidité garantit un rendement supérieur", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les actifs deviennent liquides à l'échéance", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un portefeuille de retraite ne doit plus contenir aucun actif financier", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsqu'une personne commence à retirer de l'argent, le besoin de liquidité et la gestion du risque de séquence des rendements prennent davantage d'importance. Le portefeuille doit pouvoir financer les besoins prévus.",
                    ],
                    [
                        'question' => "Quel est le rôle d'un plan d'épargne à long terme bien défini ?",
                        'choices' => [
                            ['choice_text' => "Relier un objectif financier à un effort d'épargne, un horizon et une stratégie cohérente", 'is_correct' => true],
                            ['choice_text' => "Garantir le rendement futur d'un portefeuille", 'is_correct' => false],
                            ['choice_text' => "Éviter toute variation des marchés", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute décision future", 'is_correct' => false],
                        ],
                        'explanation' => "Un plan fournit une structure de décision. Il n'élimine pas l'incertitude, mais permet de suivre les progrès et d'ajuster la stratégie lorsque les conditions changent.",
                    ],
                    [
                        'question' => "Un salarié augmente son épargne mensuelle de 1 000 à 1 200 MAD. Sur une année, l'effort supplémentaire représente :",
                        'choices' => [
                            ['choice_text' => "2 400 MAD", 'is_correct' => true],
                            ['choice_text' => "1 200 MAD", 'is_correct' => false],
                            ['choice_text' => "3 600 MAD", 'is_correct' => false],
                            ['choice_text' => "12 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "L'effort supplémentaire est de 200 MAD par mois. Sur 12 mois, cela représente 200 × 12 = 2 400 MAD de capital additionnel, hors rendement.",
                    ],
                    [
                        'question' => "Quel élément peut conduire une personne à relever progressivement son effort d'épargne au fil de sa carrière ?",
                        'choices' => [
                            ['choice_text' => "Une hausse de revenus qui permet d'épargner une partie de l'augmentation sans réduire le niveau de vie dans la même proportion", 'is_correct' => true],
                            ['choice_text' => "L'idée que les objectifs financiers disparaissent lorsque le salaire augmente", 'is_correct' => false],
                            ['choice_text' => "La volonté d'augmenter automatiquement toutes les dépenses", 'is_correct' => false],
                            ['choice_text' => "Le fait que l'inflation rende toujours l'épargne inutile", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les revenus progressent, conserver une partie de la hausse pour l'épargne peut améliorer la capacité à atteindre les objectifs de long terme. Il s'agit d'un arbitrage entre consommation et épargne.",
                    ],
                    [
                        'question' => "Une personne économise uniquement en conservant de l'argent liquide pendant vingt ans. Quel risque financier évident doit-elle prendre en compte ?",
                        'choices' => [
                            ['choice_text' => "La perte de pouvoir d'achat due à l'inflation", 'is_correct' => true],
                            ['choice_text' => "Une hausse automatique du capital réel", 'is_correct' => false],
                            ['choice_text' => "Une diversification excessive", 'is_correct' => false],
                            ['choice_text' => "Un rendement réel garanti de 10 %", 'is_correct' => false],
                        ],
                        'explanation' => "Même si le montant nominal reste inchangé, l'inflation peut réduire ce qu'il permet d'acheter. Pour un horizon long, la gestion du pouvoir d'achat devient donc importante.",
                    ],
                    [
                        'question' => "Pourquoi faut-il revoir périodiquement un plan de retraite personnel ?",
                        'choices' => [
                            ['choice_text' => "Parce que les revenus, les objectifs, la composition du foyer, l'horizon et les marchés peuvent évoluer", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un plan est faux dès qu'il a plus d'un an", 'is_correct' => false],
                            ['choice_text' => "Parce que les marchés exigent toujours une modification mensuelle du portefeuille", 'is_correct' => false],
                            ['choice_text' => "Parce que toute revue entraîne nécessairement un investissement supplémentaire", 'is_correct' => false],
                        ],
                        'explanation' => "Une bonne planification est dynamique. Elle doit être mise à jour lorsque les hypothèses importantes changent, sans pour autant conduire à des modifications impulsives à chaque variation du marché.",
                    ],
                ],
            ],

            [
                'title' => "Gérer les décisions financières au quotidien",
                'description' => "Choix courants, habitudes, trésorerie personnelle et arbitrages entre sécurité et rendement.",
                'duration' => 25,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Un salarié reçoit une prime exceptionnelle de 20 000 MAD. Il possède une dette coûteuse, peu d'épargne de précaution et un projet de moyen terme. Quelle approche est la plus saine ?",
                        'choices' => [
                            ['choice_text' => "Répartir la prime en fonction des priorités : sécurité de trésorerie, dette coûteuse et objectifs", 'is_correct' => true],
                            ['choice_text' => "Dépenser toute la prime immédiatement puisqu'elle n'était pas prévue", 'is_correct' => false],
                            ['choice_text' => "Investir toute la prime sur l'actif le plus risqué disponible", 'is_correct' => false],
                            ['choice_text' => "Utiliser la prime uniquement pour augmenter la limite de crédit", 'is_correct' => false],
                        ],
                        'explanation' => "Une rentrée exceptionnelle offre une occasion de renforcer plusieurs dimensions de la situation financière. L'allocation doit tenir compte de la dette, de la réserve et des objectifs plutôt que d'une seule priorité.",
                    ],
                    [
                        'question' => "Une dépense de 300 MAD paraît faible isolément, mais elle est répétée quatre fois par semaine. Quel risque de gestion faut-il reconnaître ?",
                        'choices' => [
                            ['choice_text' => "Des petites dépenses fréquentes peuvent représenter une somme importante sur un mois", 'is_correct' => true],
                            ['choice_text' => "Une petite dépense ne peut jamais avoir d'effet sur l'épargne", 'is_correct' => false],
                            ['choice_text' => "Les dépenses fréquentes réduisent automatiquement les intérêts d'une dette", 'is_correct' => false],
                            ['choice_text' => "Le nombre de transactions n'a aucune importance", 'is_correct' => false],
                        ],
                        'explanation' => "300 × 4 = 1 200 MAD par semaine, soit environ 4 800 MAD sur quatre semaines. La fréquence transforme un petit montant unitaire en poste budgétaire significatif.",
                    ],
                    [
                        'question' => "Pourquoi un budget mensuel devrait-il distinguer les dépenses réellement payées d'une dépense annuelle provisionnée ?",
                        'choices' => [
                            ['choice_text' => "Pour ne pas sous-estimer le coût mensuel réel des dépenses prévisibles mais irrégulières", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une dépense annuelle n'a aucun impact sur la trésorerie", 'is_correct' => false],
                            ['choice_text' => "Pour éviter de comptabiliser les assurances", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un budget ne doit jamais prévoir l'avenir", 'is_correct' => false],
                        ],
                        'explanation' => "Même si le paiement n'a lieu qu'une fois, une dépense annuelle doit être anticipée pour ne pas créer un trou de trésorerie le mois du paiement.",
                    ],
                    [
                        'question' => "Un achat de 5 000 MAD est présenté avec une remise de 20 %. Quel est son prix après remise ?",
                        'choices' => [
                            ['choice_text' => "4 000 MAD", 'is_correct' => true],
                            ['choice_text' => "4 500 MAD", 'is_correct' => false],
                            ['choice_text' => "3 800 MAD", 'is_correct' => false],
                            ['choice_text' => "4 200 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Une remise de 20 % signifie que l'on paie 80 % du prix initial : 5 000 × 0,80 = 4 000 MAD.",
                    ],
                    [
                        'question' => "Une personne compare deux achats : l'un coûte 6 000 MAD immédiatement, l'autre 7 200 MAD en plusieurs paiements sans avantage particulier. Quel point faut-il au minimum regarder avant de choisir la seconde solution ?",
                        'choices' => [
                            ['choice_text' => "Le coût total payé et les conditions des paiements différés", 'is_correct' => true],
                            ['choice_text' => "Uniquement la petite mensualité affichée", 'is_correct' => false],
                            ['choice_text' => "Le nombre de lignes sur le contrat, sans regarder les montants", 'is_correct' => false],
                            ['choice_text' => "Le fait que le paiement fractionné soit toujours moins cher", 'is_correct' => false],
                        ],
                        'explanation' => "Une mensualité faible peut donner l'impression d'un achat moins cher alors que le total payé est supérieur. Le coût total doit donc être vérifié.",
                    ],
                    [
                        'question' => "Quel signal suggère qu'un ménage devrait revoir ses habitudes de dépenses ?",
                        'choices' => [
                            ['choice_text' => "Le recours fréquent à l'épargne de précaution pour payer des dépenses courantes", 'is_correct' => true],
                            ['choice_text' => "Le fait de faire un budget mensuel", 'is_correct' => false],
                            ['choice_text' => "Le fait de conserver des factures", 'is_correct' => false],
                            ['choice_text' => "Une hausse de revenu accompagnée d'une hausse de l'épargne", 'is_correct' => false],
                        ],
                        'explanation' => "La réserve d'urgence est destinée aux imprévus. Lorsqu'elle sert régulièrement à couvrir les dépenses courantes, cela peut indiquer un déséquilibre budgétaire structurel.",
                    ],
                    [
                        'question' => "Une personne garde 30 000 MAD sur un compte très liquide alors qu'elle n'a aucun besoin immédiat de cette somme et dispose déjà d'une réserve suffisante. Quel sujet mérite d'être examiné ?",
                        'choices' => [
                            ['choice_text' => "Le coût d'opportunité de conserver tout le capital sans objectif précis", 'is_correct' => true],
                            ['choice_text' => "Le fait que la liquidité soit toujours inutile", 'is_correct' => false],
                            ['choice_text' => "La nécessité de dépenser la totalité de l'argent", 'is_correct' => false],
                            ['choice_text' => "La garantie que le compte liquide produira le meilleur rendement", 'is_correct' => false],
                        ],
                        'explanation' => "La liquidité a une valeur, mais conserver davantage de cash que nécessaire peut avoir un coût d'opportunité si une partie pourrait être affectée à des objectifs de plus long terme avec un profil de risque adapté.",
                    ],
                    [
                        'question' => "Une personne reçoit son salaire le 28 du mois mais paie son loyer le 2. Pourquoi peut-elle avoir besoin de suivre son calendrier de trésorerie même avec un revenu suffisant ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'un décalage entre les encaissements et les paiements peut créer un besoin de liquidité temporaire", 'is_correct' => true],
                            ['choice_text' => "Parce que le revenu devient plus faible pendant quatre jours", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un budget annuel élimine les paiements récurrents", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un salaire ne peut jamais couvrir un loyer", 'is_correct' => false],
                        ],
                        'explanation' => "Le niveau de revenu n'est pas le seul sujet : le calendrier des entrées et sorties compte aussi. Un suivi de trésorerie permet d'anticiper les périodes de tension temporaire.",
                    ],
                    [
                        'question' => "Quel est un exemple de coût d'opportunité en finance personnelle ?",
                        'choices' => [
                            ['choice_text' => "Le rendement potentiel auquel on renonce en conservant une somme dans une option plutôt qu'une autre", 'is_correct' => true],
                            ['choice_text' => "Les frais affichés sur une facture d'électricité", 'is_correct' => false],
                            ['choice_text' => "Le montant du salaire avant impôts", 'is_correct' => false],
                            ['choice_text' => "Le nombre de transactions sur un relevé bancaire", 'is_correct' => false],
                        ],
                        'explanation' => "Le coût d'opportunité correspond à la valeur de la meilleure alternative abandonnée. Il aide à comparer les usages possibles d'une même somme d'argent.",
                    ],
                    [
                        'question' => "Une personne veut réduire ses dépenses mais ne sait pas par où commencer. Quel premier pas est le plus utile ?",
                        'choices' => [
                            ['choice_text' => "Analyser quelques mois de dépenses pour repérer les postes réellement importants et les dépenses répétitives", 'is_correct' => true],
                            ['choice_text' => "Supprimer automatiquement toutes les petites dépenses", 'is_correct' => false],
                            ['choice_text' => "Emprunter davantage pour augmenter son budget", 'is_correct' => false],
                            ['choice_text' => "Changer tous ses placements avant de regarder ses dépenses", 'is_correct' => false],
                        ],
                        'explanation' => "Une analyse des données réelles permet de cibler les postes sur lesquels une réduction peut avoir un impact durable. Les décisions prises sans diagnostic risquent d'être inefficaces.",
                    ],
                ],
            ],

            [
                'title' => "Cas pratiques de finance personnelle",
                'description' => "Mises en situation intégrées pour relier budget, dette, épargne, investissement et gestion du risque.",
                'duration' => 34,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Omar gagne 12 000 MAD nets. Ses dépenses essentielles sont de 7 000 MAD, ses dépenses discrétionnaires de 2 000 MAD et il rembourse 1 500 MAD de dettes. Combien lui reste-t-il avant toute nouvelle épargne ?",
                        'choices' => [
                            ['choice_text' => "1 500 MAD", 'is_correct' => true],
                            ['choice_text' => "2 500 MAD", 'is_correct' => false],
                            ['choice_text' => "1 000 MAD", 'is_correct' => false],
                            ['choice_text' => "3 500 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Les sorties indiquées totalisent 7 000 + 2 000 + 1 500 = 10 500 MAD. Il reste donc 12 000 - 10 500 = 1 500 MAD avant une nouvelle affectation.",
                    ],
                    [
                        'question' => "Le même ménage dispose de 18 000 MAD d'épargne liquide. Si ses dépenses essentielles sont de 6 000 MAD par mois, quelle durée de couverture cela représente-t-il ?",
                        'choices' => [
                            ['choice_text' => "3 mois", 'is_correct' => true],
                            ['choice_text' => "2 mois", 'is_correct' => false],
                            ['choice_text' => "4 mois", 'is_correct' => false],
                            ['choice_text' => "6 mois", 'is_correct' => false],
                        ],
                        'explanation' => "18 000 / 6 000 = 3 mois. Le ratio est obtenu en rapportant la réserve aux dépenses essentielles mensuelles.",
                    ],
                    [
                        'question' => "Nora rembourse une dette à 11 % et envisage de placer une somme disponible sur un produit offrant un rendement attendu de 5 %. Quelle différence fondamentale doit-elle garder en tête ?",
                        'choices' => [
                            ['choice_text' => "L'économie d'intérêts liée au remboursement est plus certaine que le rendement futur du placement", 'is_correct' => true],
                            ['choice_text' => "Le placement à 5 % est forcément plus rentable car c'est un investissement", 'is_correct' => false],
                            ['choice_text' => "Une dette à 11 % ne génère aucun coût réel", 'is_correct' => false],
                            ['choice_text' => "Les deux pourcentages sont directement équivalents quel que soit le risque", 'is_correct' => false],
                        ],
                        'explanation' => "Le remboursement anticipé d'une dette supprime des intérêts futurs selon les conditions du contrat. Le rendement d'un placement est, lui, soumis à l'incertitude et au risque.",
                    ],
                    [
                        'question' => "Une famille a 50 000 MAD disponibles. Elle doit payer 40 000 MAD pour un projet dans deux mois et souhaite investir les 10 000 MAD restants à long terme. Quel principe de base applique-t-elle en séparant les deux montants ?",
                        'choices' => [
                            ['choice_text' => "Elle aligne le niveau de risque et de liquidité sur l'horizon de chaque besoin", 'is_correct' => true],
                            ['choice_text' => "Elle évite toute diversification", 'is_correct' => false],
                            ['choice_text' => "Elle considère les deux sommes comme ayant exactement le même horizon", 'is_correct' => false],
                            ['choice_text' => "Elle transforme automatiquement le projet à deux mois en investissement", 'is_correct' => false],
                        ],
                        'explanation' => "Les 40 000 MAD sont nécessaires très bientôt et doivent donc être protégés contre une forte fluctuation. Les 10 000 MAD destinés au long terme peuvent être étudiés selon une autre logique d'allocation.",
                    ],
                    [
                        'question' => "Un portefeuille personnel contient 90 % d'une seule action et 10 % de liquidités. Quel risque spécifique est particulièrement évident ?",
                        'choices' => [
                            ['choice_text' => "Le risque de concentration", 'is_correct' => true],
                            ['choice_text' => "Le risque de diversification excessive", 'is_correct' => false],
                            ['choice_text' => "Le risque que toutes les classes d'actifs évoluent parfaitement à l'identique", 'is_correct' => false],
                            ['choice_text' => "L'absence totale de risque de marché", 'is_correct' => false],
                        ],
                        'explanation' => "Avec 90 % dans une seule action, un événement propre à cette entreprise peut affecter fortement la valeur du patrimoine. La concentration est donc élevée.",
                    ],
                    [
                        'question' => "Un ménage dépense 9 000 MAD par mois mais ne met presque rien de côté malgré un revenu de 12 000 MAD. Quel est son taux d'épargne mensuel approximatif ?",
                        'choices' => [
                            ['choice_text' => "25 %", 'is_correct' => true],
                            ['choice_text' => "30 %", 'is_correct' => false],
                            ['choice_text' => "20 %", 'is_correct' => false],
                            ['choice_text' => "33,3 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant théoriquement non dépensé est 12 000 - 9 000 = 3 000 MAD. Le taux d'épargne est 3 000 / 12 000 = 25 %.",
                    ],
                    [
                        'question' => "Une personne gagne 10 000 MAD et décide d'augmenter son épargne de 500 à 800 MAD par mois en réduisant certains loisirs. Quelle est la hausse annuelle de l'épargne, hors rendement ?",
                        'choices' => [
                            ['choice_text' => "3 600 MAD", 'is_correct' => true],
                            ['choice_text' => "2 400 MAD", 'is_correct' => false],
                            ['choice_text' => "300 MAD", 'is_correct' => false],
                            ['choice_text' => "9 600 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "L'effort supplémentaire est de 800 - 500 = 300 MAD par mois. Sur douze mois, 300 × 12 = 3 600 MAD.",
                    ],
                    [
                        'question' => "Une personne envisage un placement très volatil pour un projet prévu dans trois mois. Quel élément doit l'alerter avant même d'analyser le rendement attendu ?",
                        'choices' => [
                            ['choice_text' => "La possibilité que la valeur baisse fortement juste avant la date du projet", 'is_correct' => true],
                            ['choice_text' => "Le fait que la liquidité soit toujours un défaut", 'is_correct' => false],
                            ['choice_text' => "La certitude qu'un actif volatil rapporte plus sur trois mois", 'is_correct' => false],
                            ['choice_text' => "L'absence totale de lien entre horizon et risque", 'is_correct' => false],
                        ],
                        'explanation' => "Sur un horizon très court, une baisse temporaire peut devenir une perte difficile à attendre. Le risque doit donc être évalué en fonction du calendrier réel du besoin.",
                    ],
                    [
                        'question' => "Quel comportement illustre le mieux une gestion financière personnelle cohérente ?",
                        'choices' => [
                            ['choice_text' => "Conserver une réserve adaptée, maîtriser les dettes coûteuses et investir selon ses objectifs et son horizon", 'is_correct' => true],
                            ['choice_text' => "Chercher le rendement maximal avec toute son épargne", 'is_correct' => false],
                            ['choice_text' => "Éviter toute forme de dette même lorsqu'un financement raisonnable est utile", 'is_correct' => false],
                            ['choice_text' => "Changer d'investissement chaque semaine pour suivre les marchés", 'is_correct' => false],
                        ],
                        'explanation' => "Une situation financière saine combine plusieurs dimensions : liquidité pour les imprévus, dette maîtrisée, protection contre certains risques et investissement cohérent avec les objectifs. Il n'existe pas un seul levier universel.",
                    ],
                    [
                        'question' => "Une personne possède une réserve de trois mois, aucune dette coûteuse et un horizon de placement de quinze ans. Quelle question devient particulièrement importante avant de choisir un investissement ?",
                        'choices' => [
                            ['choice_text' => "Quel niveau de risque elle peut supporter pour cet objectif et quelle allocation correspond à son horizon", 'is_correct' => true],
                            ['choice_text' => "Quelle action a gagné le plus la semaine dernière", 'is_correct' => false],
                            ['choice_text' => "Comment dépenser toute la réserve d'urgence", 'is_correct' => false],
                            ['choice_text' => "Comment supprimer toute volatilité du marché", 'is_correct' => false],
                        ],
                        'explanation' => "Une fois les besoins de court terme et les dettes coûteuses maîtrisés, la décision d'investissement peut davantage se concentrer sur l'horizon, le risque accepté et les objectifs de long terme.",
                    ],
                    [
                        'question' => "Pourquoi une même recommandation financière ne convient-elle pas nécessairement à deux personnes ayant le même revenu ?",
                        'choices' => [
                            ['choice_text' => "Parce que leurs dettes, patrimoine, objectifs, horizon, charges familiales et tolérance au risque peuvent être différents", 'is_correct' => true],
                            ['choice_text' => "Parce que le revenu n'a jamais aucun rôle dans une décision financière", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les personnes à revenu égal ont automatiquement des besoins opposés", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une décision financière dépend uniquement de l'âge", 'is_correct' => false],
                        ],
                        'explanation' => "Le revenu est une donnée importante, mais il ne suffit pas. La situation financière globale et les objectifs personnels déterminent aussi les choix pertinents.",
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
