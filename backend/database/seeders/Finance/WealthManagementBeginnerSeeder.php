<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WealthManagementBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'wealth-management')->firstOrFail();

        $quizzes = [
            [
                'title' => "Comprendre les objectifs et le profil d'un client patrimonial",
                'description' => "Évaluer les objectifs, l'horizon et la tolérance au risque d'un client avant de construire une stratégie patrimoniale.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un client de 32 ans dispose d'une épargne stable et n'aura probablement pas besoin de cet argent avant 15 ans. Quelle information reste la plus importante avant de déterminer son allocation ?",
                        'explanation' => "L'horizon long est utile, mais l'allocation doit aussi tenir compte de la capacité et de la volonté du client à supporter des baisses temporaires. Les autres éléments ne déterminent pas le profil de risque.",
                        'choices' => [
                            ['choice_text' => "Sa tolérance aux pertes temporaires", 'is_correct' => true],
                            ['choice_text' => "La couleur de son véhicule", 'is_correct' => false],
                            ['choice_text' => "Le nombre de banques qu'il connaît", 'is_correct' => false],
                            ['choice_text' => "La marque de son ordinateur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cliente souhaite financer l'achat de sa résidence principale dans 18 mois. Pourquoi une allocation très exposée aux actions serait-elle difficile à justifier pour cette somme précise ?",
                        'explanation' => "Le besoin est proche et la date de dépense est relativement certaine. Une baisse de marché juste avant l'achat pourrait réduire fortement le capital disponible.",
                        'choices' => [
                            ['choice_text' => "Le marché actions peut subir une baisse au mauvais moment", 'is_correct' => true],
                            ['choice_text' => "Les actions ne produisent jamais de revenus", 'is_correct' => false],
                            ['choice_text' => "Les actions sont toujours moins liquides que l'immobilier", 'is_correct' => false],
                            ['choice_text' => "Les actions ont toujours une échéance fixe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur affirme qu'il peut accepter une baisse de 20 % parce qu'il pense que le marché remontera vite. Quelle notion faut-il encore tester ?",
                        'explanation' => "La tolérance psychologique ne suffit pas. Il faut aussi vérifier la capacité réelle à absorber une perte sans compromettre des dépenses ou objectifs importants.",
                        'choices' => [
                            ['choice_text' => "Sa capacité financière à supporter cette baisse", 'is_correct' => true],
                            ['choice_text' => "Son groupe sanguin", 'is_correct' => false],
                            ['choice_text' => "La durée de ses trajets quotidiens", 'is_correct' => false],
                            ['choice_text' => "La marque de sa banque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client a deux objectifs : constituer une réserve de sécurité dans deux ans et financer sa retraite dans vingt ans. Quelle approche est la plus cohérente ?",
                        'explanation' => "Des horizons différents justifient des niveaux de risque et de liquidité différents. Il est souvent plus clair de raisonner par poches ou objectifs.",
                        'choices' => [
                            ['choice_text' => "Séparer les poches d'investissement selon l'horizon et le besoin", 'is_correct' => true],
                            ['choice_text' => "Investir tout le patrimoine dans un seul actif", 'is_correct' => false],
                            ['choice_text' => "Choisir le même niveau de risque pour les deux objectifs", 'is_correct' => false],
                            ['choice_text' => "Reporter les deux décisions jusqu'à la retraite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d'un entretien, un client répond qu'il veut une croissance élevée mais ne supporte aucune baisse de valeur. Quelle est la difficulté principale ?",
                        'explanation' => "Une forte croissance potentielle implique généralement une certaine incertitude. Le rôle du conseiller est de clarifier ce compromis plutôt que de promettre simultanément rendement élevé et absence de risque.",
                        'choices' => [
                            ['choice_text' => "Ses objectifs de rendement et sa tolérance au risque sont en tension", 'is_correct' => true],
                            ['choice_text' => "Il a forcément besoin d'un produit garanti", 'is_correct' => false],
                            ['choice_text' => "La diversification devient inutile", 'is_correct' => false],
                            ['choice_text' => "La durée d'investissement n'a plus d'importance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une famille dispose de trois ans de dépenses courantes déjà couvertes et d'un patrimoine financier destiné à un objectif dans quinze ans. Quel principe général est pertinent ?",
                        'explanation' => "Une somme destinée à un objectif lointain peut généralement absorber davantage de fluctuations qu'une réserve immédiatement disponible.",
                        'choices' => [
                            ['choice_text' => "Le portefeuille de long terme peut prendre davantage de risque que la réserve de court terme", 'is_correct' => true],
                            ['choice_text' => "Les deux montants doivent obligatoirement avoir la même allocation", 'is_correct' => false],
                            ['choice_text' => "La réserve de court terme devrait être investie comme un portefeuille actions", 'is_correct' => false],
                            ['choice_text' => "L'horizon n'influence jamais le choix des actifs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client change de situation professionnelle et prévoit des revenus beaucoup plus irréguliers. Que faut-il revoir en priorité ?",
                        'explanation' => "Des revenus moins prévisibles peuvent réduire la capacité à supporter une baisse et augmenter le besoin de liquidité. Le profil patrimonial doit donc être réévalué.",
                        'choices' => [
                            ['choice_text' => "Sa capacité de risque et ses besoins de liquidité", 'is_correct' => true],
                            ['choice_text' => "Uniquement la performance passée de ses actions", 'is_correct' => false],
                            ['choice_text' => "Le nombre de lignes du portefeuille sans autre analyse", 'is_correct' => false],
                            ['choice_text' => "Le nom du gestionnaire du fonds", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi demander à un client ses pertes qu'il a réellement vécues dans le passé peut-il être utile lors du profilage ?",
                        'explanation' => "La réaction à une perte réellement vécue apporte une information comportementale utile, même si elle ne remplace ni l'analyse financière ni les objectifs.",
                        'choices' => [
                            ['choice_text' => "Cela aide à comprendre sa réaction face au risque réel", 'is_correct' => true],
                            ['choice_text' => "Cela permet de prédire exactement les rendements futurs", 'is_correct' => false],
                            ['choice_text' => "Cela évite toute diversification", 'is_correct' => false],
                            ['choice_text' => "Cela remplace l'analyse de ses objectifs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cliente veut financer les études de son enfant dans quatre ans avec un montant déjà disponible. Quel facteur doit peser fortement dans la décision ?",
                        'explanation' => "À quatre ans d'un objectif identifié, une perte importante à l'approche de l'échéance peut être très pénalisante. La stabilité du capital devient donc un élément central.",
                        'choices' => [
                            ['choice_text' => "La protection du capital nécessaire à la date prévue", 'is_correct' => true],
                            ['choice_text' => "La recherche du rendement maximal quelle que soit la volatilité", 'is_correct' => false],
                            ['choice_text' => "Le nombre de titres détenus", 'is_correct' => false],
                            ['choice_text' => "La performance d'un indice sur une seule semaine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel document ou information est particulièrement utile pour relier les objectifs d'un client à son portefeuille ?",
                        'explanation' => "Une vision consolidée permet de comprendre le patrimoine dans son ensemble et de vérifier que les investissements servent réellement les objectifs du client.",
                        'choices' => [
                            ['choice_text' => "Une vue consolidée de ses actifs, dettes, flux et objectifs", 'is_correct' => true],
                            ['choice_text' => "Uniquement son relevé bancaire du mois dernier", 'is_correct' => false],
                            ['choice_text' => "Seulement la liste de ses actions", 'is_correct' => false],
                            ['choice_text' => "Uniquement sa déclaration de revenus d'une année ancienne", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur souhaite un portefeuille très dynamique alors qu'une grande partie de son patrimoine sera utilisée pour un projet dans un an. Quelle question faut-il poser avant toute décision ?",
                        'explanation' => "La première question concerne le besoin de liquidité et l'échéance du projet. Sans cette information, le niveau de risque du portefeuille peut être mal calibré.",
                        'choices' => [
                            ['choice_text' => "Quelle somme doit rester disponible et à quelle date précise ?", 'is_correct' => true],
                            ['choice_text' => "Quel est le secteur le plus à la mode ?", 'is_correct' => false],
                            ['choice_text' => "Quelle action a le plus progressé cette semaine ?", 'is_correct' => false],
                            ['choice_text' => "Quel est le dividende le plus élevé ?", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Construire une allocation d'actifs cohérente",
                'description' => "Mettre en relation objectifs, horizon et profil de risque pour répartir un patrimoine entre plusieurs classes d'actifs.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un patrimoine de 500 000 € est réparti à 60 % en obligations et 40 % en actions. Quelle est la valeur investie en actions ?",
                        'explanation' => "40 % de 500 000 € correspondent à 200 000 €. Le calcul est 500 000 × 0,40 = 200 000 €.",
                        'choices' => [
                            ['choice_text' => "200 000 €", 'is_correct' => true],
                            ['choice_text' => "250 000 €", 'is_correct' => false],
                            ['choice_text' => "300 000 €", 'is_correct' => false],
                            ['choice_text' => "400 000 €", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur prudent a un besoin important de liquidité dans deux ans et un autre objectif à quinze ans. Quelle construction est la plus logique ?",
                        'explanation' => "Le portefeuille doit refléter les échéances. Une poche de court terme privilégie généralement la stabilité et la liquidité, tandis que l'objectif lointain peut supporter davantage de volatilité.",
                        'choices' => [
                            ['choice_text' => "Une allocation différenciée selon les horizons", 'is_correct' => true],
                            ['choice_text' => "100 % actions pour tous les objectifs", 'is_correct' => false],
                            ['choice_text' => "100 % actifs illiquides pour tous les objectifs", 'is_correct' => false],
                            ['choice_text' => "Une allocation identique indépendamment des objectifs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si la part des actions d'un portefeuille passe de 40 % à 55 % uniquement parce que les actions ont fortement progressé, que s'est-il produit ?",
                        'explanation' => "La hausse des actions modifie les poids relatifs du portefeuille. Sans intervention, la pondération actions peut dépasser le niveau initialement retenu.",
                        'choices' => [
                            ['choice_text' => "L'exposition au risque actions a augmenté mécaniquement", 'is_correct' => true],
                            ['choice_text' => "Le risque global a forcément diminué", 'is_correct' => false],
                            ['choice_text' => "Le portefeuille est devenu automatiquement plus diversifié", 'is_correct' => false],
                            ['choice_text' => "La volatilité n'a plus d'importance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'intérêt principal d'une allocation stratégique définie à l'avance ?",
                        'explanation' => "Une allocation stratégique sert de référence et limite les décisions improvisées. Elle ne garantit ni rendement ni absence de risque.",
                        'choices' => [
                            ['choice_text' => "Donner un cadre stable aux décisions d'investissement", 'is_correct' => true],
                            ['choice_text' => "Garantir une performance positive chaque année", 'is_correct' => false],
                            ['choice_text' => "Supprimer tous les risques", 'is_correct' => false],
                            ['choice_text' => "Permettre de prévoir exactement les marchés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un portefeuille est destiné à une retraite dans vingt ans. Pourquoi la capacité à supporter une volatilité temporaire peut-elle être plus élevée qu'avec un projet dans six mois ?",
                        'explanation' => "Un horizon long laisse davantage de temps pour traverser plusieurs phases de marché avant le besoin de liquidité.",
                        'choices' => [
                            ['choice_text' => "Le temps permet davantage de supporter les fluctuations intermédiaires", 'is_correct' => true],
                            ['choice_text' => "Les actions deviennent sans risque après dix ans", 'is_correct' => false],
                            ['choice_text' => "Les obligations perdent toujours de la valeur à court terme", 'is_correct' => false],
                            ['choice_text' => "Le capital n'est plus nécessaire après vingt ans", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client demande de placer 100 % de son patrimoine financier dans une seule action qu'il connaît très bien. Quel problème apparaît immédiatement ?",
                        'explanation' => "Même si l'entreprise est bien connue, une seule action expose fortement le patrimoine à un risque spécifique.",
                        'choices' => [
                            ['choice_text' => "Une forte concentration du risque", 'is_correct' => true],
                            ['choice_text' => "Une diversification excessive", 'is_correct' => false],
                            ['choice_text' => "Une absence totale de risque de marché", 'is_correct' => false],
                            ['choice_text' => "Une garantie du capital", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une allocation comporte 50 % d'actions, 30 % d'obligations et 20 % d'actifs monétaires. Quelle est la part des actifs autres que les actions ?",
                        'explanation' => "Les actifs autres que les actions représentent 30 % + 20 %, soit 50 % du portefeuille.",
                        'choices' => [
                            ['choice_text' => "50 %", 'is_correct' => true],
                            ['choice_text' => "30 %", 'is_correct' => false],
                            ['choice_text' => "70 %", 'is_correct' => false],
                            ['choice_text' => "80 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel raisonnement est le plus pertinent lorsqu'un client compare deux portefeuilles ayant des rendements attendus proches ?",
                        'explanation' => "Le rendement attendu n'est qu'un élément de la décision. Le risque, la liquidité, les coûts et les objectifs doivent aussi être pris en compte.",
                        'choices' => [
                            ['choice_text' => "Examiner aussi le risque, la liquidité, les coûts et la cohérence avec ses objectifs", 'is_correct' => true],
                            ['choice_text' => "Choisir automatiquement celui dont le nom est le plus connu", 'is_correct' => false],
                            ['choice_text' => "Choisir celui qui a le plus de titres", 'is_correct' => false],
                            ['choice_text' => "Comparer uniquement la performance du dernier mois", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un portefeuille contient 300 000 € d'actions, 100 000 € d'obligations et 100 000 € de liquidités. Quel est son poids en actions ?",
                        'explanation' => "Le patrimoine financier total vaut 500 000 €. La part actions est donc 300 000 / 500 000 = 60 %.",
                        'choices' => [
                            ['choice_text' => "40 %", 'is_correct' => false],
                            ['choice_text' => "50 %", 'is_correct' => true],
                            ['choice_text' => "60 %", 'is_correct' => false],
                            ['choice_text' => "75 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le principal intérêt de raisonner en termes d'allocation plutôt qu'en choisissant uniquement des titres individuels ?",
                        'explanation' => "L'allocation permet de piloter la structure globale du patrimoine avant de sélectionner les investissements à l'intérieur de chaque poche.",
                        'choices' => [
                            ['choice_text' => "On maîtrise d'abord l'exposition globale à plusieurs moteurs de risque", 'is_correct' => true],
                            ['choice_text' => "On élimine les pertes possibles", 'is_correct' => false],
                            ['choice_text' => "On garantit une meilleure performance", 'is_correct' => false],
                            ['choice_text' => "On n'a plus besoin de suivre les objectifs", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Diversification et concentration du patrimoine",
                'description' => "Analyser les bénéfices d'une diversification réelle et repérer les risques de concentration souvent invisibles.",
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Un couple possède une résidence principale, des actions de son employeur et des obligations émises par la même entreprise. Quel risque mérite une attention particulière ?",
                        'explanation' => "La résidence et l'emploi peuvent déjà exposer le ménage à l'économie locale, tandis que les titres de l'employeur ajoutent un risque spécifique important.",
                        'choices' => [
                            ['choice_text' => "La concentration de leur patrimoine sur un même émetteur", 'is_correct' => true],
                            ['choice_text' => "Un excès de diversification", 'is_correct' => false],
                            ['choice_text' => "L'absence de toute corrélation possible", 'is_correct' => false],
                            ['choice_text' => "Une surliquidité automatique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi détenir plusieurs actions appartenant au même secteur ne constitue-t-il pas nécessairement une diversification suffisante ?",
                        'explanation' => "Des entreprises différentes peuvent réagir de façon similaire à un même choc sectoriel. Diversifier signifie aussi diversifier les sources de risque.",
                        'choices' => [
                            ['choice_text' => "Elles peuvent rester exposées au même facteur sectoriel", 'is_correct' => true],
                            ['choice_text' => "Elles ont toutes des monnaies différentes", 'is_correct' => false],
                            ['choice_text' => "Elles ont obligatoirement des risques opposés", 'is_correct' => false],
                            ['choice_text' => "Elles garantissent toutes le capital", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une famille détient 70 % de son patrimoine financier dans l'immobilier locatif et souhaite ajouter une nouvelle exposition à l'immobilier coté. Quel point doit être examiné ?",
                        'explanation' => "Ajouter un actif similaire à une exposition déjà dominante peut renforcer la concentration plutôt que la réduire.",
                        'choices' => [
                            ['choice_text' => "Le risque de concentration sur une même classe d'actifs", 'is_correct' => true],
                            ['choice_text' => "Le fait que l'immobilier coté soit toujours sans risque", 'is_correct' => false],
                            ['choice_text' => "L'obligation de vendre tous les placements financiers", 'is_correct' => false],
                            ['choice_text' => "La disparition automatique du risque de liquidité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux fonds détiennent chacun 50 actions, mais leurs principaux secteurs et titres sont presque identiques. Peut-on conclure que le portefeuille est très diversifié simplement parce qu'il possède deux fonds ?",
                        'explanation' => "Le nombre de produits ne suffit pas. Il faut regarder les positions sous-jacentes et les facteurs de risque communs.",
                        'choices' => [
                            ['choice_text' => "Non, car les expositions sous-jacentes peuvent être fortement redondantes", 'is_correct' => true],
                            ['choice_text' => "Oui, deux fonds suffisent toujours", 'is_correct' => false],
                            ['choice_text' => "Oui, la diversification dépend uniquement du nombre de fonds", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu'un portefeuille ne peut contenir que des actions", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur reçoit une prime importante de son employeur et envisage de conserver à la fois cette somme et ses investissements en actions de l'employeur. Quelle question est utile ?",
                        'explanation' => "Le lien entre revenu professionnel et patrimoine financier peut accentuer le risque de concentration. Une analyse globale est donc nécessaire.",
                        'choices' => [
                            ['choice_text' => "Quelle part de son patrimoine et de ses revenus dépend déjà du même employeur ?", 'is_correct' => true],
                            ['choice_text' => "Quel est le rendement de l'action sur une journée ?", 'is_correct' => false],
                            ['choice_text' => "Quel est le nom du dirigeant ?", 'is_correct' => false],
                            ['choice_text' => "Combien de produits financiers possède sa banque ?", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une diversification géographique peut-elle réduire certains risques ?",
                        'explanation' => "Les cycles économiques, les devises et les politiques diffèrent selon les pays, ce qui peut réduire certaines concentrations de risque, sans les éliminer.",
                        'choices' => [
                            ['choice_text' => "Oui, car les économies et marchés ne réagissent pas toujours de la même façon", 'is_correct' => true],
                            ['choice_text' => "Non, tous les pays évoluent toujours ensemble", 'is_correct' => false],
                            ['choice_text' => "Oui, car elle garantit un rendement positif", 'is_correct' => false],
                            ['choice_text' => "Non, elle ne change jamais le risque de portefeuille", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cliente détient cinq actions technologiques très volatiles et pense être diversifiée parce qu'elle possède cinq lignes. Quelle remarque est la plus pertinente ?",
                        'explanation' => "La diversification se mesure par les risques communs, pas simplement par le nombre de lignes. Cinq sociétés du même segment peuvent rester très corrélées.",
                        'choices' => [
                            ['choice_text' => "Le nombre de lignes est insuffisant pour juger la diversification; il faut examiner les expositions communes", 'is_correct' => true],
                            ['choice_text' => "Cinq actions signifient automatiquement une diversification parfaite", 'is_correct' => false],
                            ['choice_text' => "La volatilité devient nulle à partir de cinq lignes", 'is_correct' => false],
                            ['choice_text' => "Le secteur n'a aucune importance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la diversification peut-elle être particulièrement utile pour un investisseur non professionnel ?",
                        'explanation' => "La diversification limite l'effet d'un choc spécifique sur une seule position. Elle ne protège pas contre toutes les baisses de marché.",
                        'choices' => [
                            ['choice_text' => "Elle réduit l'impact d'une mauvaise nouvelle touchant un seul actif", 'is_correct' => true],
                            ['choice_text' => "Elle empêche tous les marchés de baisser", 'is_correct' => false],
                            ['choice_text' => "Elle garantit un rendement supérieur", 'is_correct' => false],
                            ['choice_text' => "Elle supprime le besoin d'épargne de précaution", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un patrimoine est partagé entre actions, obligations de plusieurs émetteurs et liquidités. Quel bénéfice supplémentaire offre la diversification entre émetteurs obligataires ?",
                        'explanation' => "Plusieurs émetteurs permettent de limiter le poids du risque de crédit spécifique d'un seul débiteur.",
                        'choices' => [
                            ['choice_text' => "Elle peut réduire le risque qu'un seul émetteur en difficulté affecte toute la poche obligataire", 'is_correct' => true],
                            ['choice_text' => "Elle augmente toujours le rendement", 'is_correct' => false],
                            ['choice_text' => "Elle supprime le risque de taux", 'is_correct' => false],
                            ['choice_text' => "Elle garantit la valeur nominale de toutes les obligations", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une famille possède une entreprise non cotée qui représente 45 % de son patrimoine. Que faut-il éviter lorsqu'elle définit le reste de son allocation ?",
                        'explanation' => "La valeur d'une entreprise non cotée fait partie du patrimoine global. Elle peut même concentrer fortement le risque entrepreneurial et professionnel.",
                        'choices' => [
                            ['choice_text' => "Ignorer cette concentration parce que l'entreprise n'est pas cotée", 'is_correct' => false],
                            ['choice_text' => "Tenir compte de cette exposition globale", 'is_correct' => true],
                            ['choice_text' => "Analyser les autres actifs uniquement séparément", 'is_correct' => false],
                            ['choice_text' => "Considérer que l'entreprise ne comporte aucun risque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit le mieux une diversification efficace ?",
                        'explanation' => "La diversification vise à répartir les risques entre plusieurs moteurs de performance, pas simplement à multiplier les produits détenus.",
                        'choices' => [
                            ['choice_text' => "Répartir le patrimoine entre des actifs dont les risques ne sont pas parfaitement identiques", 'is_correct' => true],
                            ['choice_text' => "Multiplier les produits financiers sans regarder leurs positions", 'is_correct' => false],
                            ['choice_text' => "Acheter uniquement les actifs les plus performants", 'is_correct' => false],
                            ['choice_text' => "Éviter toute classe d'actifs moins rentable sur une période", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si deux actifs ont des comportements presque parfaitement identiques, leur combinaison apporte-t-elle nécessairement beaucoup de diversification ?",
                        'explanation' => "Des actifs très corrélés apportent moins de réduction du risque spécifique lorsqu'ils sont combinés.",
                        'choices' => [
                            ['choice_text' => "Non, car leur risque peut rester très similaire", 'is_correct' => true],
                            ['choice_text' => "Oui, deux actifs suffisent toujours", 'is_correct' => false],
                            ['choice_text' => "Oui, quelle que soit leur corrélation", 'is_correct' => false],
                            ['choice_text' => "Non, parce que la diversification est impossible", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Rééquilibrage et suivi d'un portefeuille",
                'description' => "Comprendre quand et comment rééquilibrer un portefeuille sans confondre suivi discipliné et réactions émotionnelles.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un portefeuille devait rester à 60 % en actions et 40 % en obligations. Après une forte hausse des actions, il est passé à 68 % d'actions. Quelle action correspond au rééquilibrage ?",
                        'explanation' => "Le rééquilibrage consiste à ramener le portefeuille vers l'allocation cible. Ici, l'exposition actions a dépassé son poids prévu.",
                        'choices' => [
                            ['choice_text' => "Vendre une partie des actions ou acheter des obligations pour revenir vers la cible", 'is_correct' => true],
                            ['choice_text' => "Acheter encore davantage d'actions", 'is_correct' => false],
                            ['choice_text' => "Ne rien faire par principe", 'is_correct' => false],
                            ['choice_text' => "Vendre toutes les obligations", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un rééquilibrage peut-il conduire à vendre un actif qui a récemment bien performé ?",
                        'explanation' => "Le but est de maintenir une exposition cohérente avec le profil défini. Une forte hausse peut mécaniquement faire dépasser le poids cible d'une classe d'actifs.",
                        'choices' => [
                            ['choice_text' => "Parce que la discipline d'allocation prime sur la poursuite automatique de la hausse", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un actif performant devient forcément sans valeur", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il faut toujours vendre après une hausse", 'is_correct' => false],
                            ['choice_text' => "Parce que le rééquilibrage vise à maximiser la performance du dernier mois", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur rééquilibre son portefeuille tous les mois sans tenir compte des coûts de transaction ou des écarts minimes. Quel problème peut apparaître ?",
                        'explanation' => "Des ajustements trop fréquents pour de petits écarts peuvent générer des coûts sans bénéfice proportionnel. Des seuils ou une fréquence raisonnable peuvent être utilisés.",
                        'choices' => [
                            ['choice_text' => "Des coûts et opérations inutiles", 'is_correct' => true],
                            ['choice_text' => "Une disparition du risque de marché", 'is_correct' => false],
                            ['choice_text' => "Une garantie de rendement", 'is_correct' => false],
                            ['choice_text' => "Un portefeuille automatiquement plus diversifié", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le portefeuille d'un client est à 55 % actions alors que sa cible stratégique est 50 %. L'écart est faible et les coûts sont élevés. Quelle approche peut être envisagée ?",
                        'explanation' => "Le rééquilibrage peut être effectué de manière proportionnée. Les nouveaux apports peuvent aussi servir à corriger les écarts sans ventes immédiates.",
                        'choices' => [
                            ['choice_text' => "Attendre un seuil ou utiliser progressivement les nouveaux flux pour rééquilibrer", 'is_correct' => true],
                            ['choice_text' => "Vendre immédiatement la totalité des actions", 'is_correct' => false],
                            ['choice_text' => "Doubler le risque pour revenir à la cible", 'is_correct' => false],
                            ['choice_text' => "Abandonner définitivement l'allocation stratégique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il éviter de confondre rééquilibrage et market timing ?",
                        'explanation' => "Le rééquilibrage est une discipline de gestion des poids. Le market timing repose sur des anticipations de marché qui peuvent se révéler erronées.",
                        'choices' => [
                            ['choice_text' => "Le rééquilibrage vise une allocation cible, tandis que le market timing cherche à anticiper les mouvements de marché", 'is_correct' => true],
                            ['choice_text' => "Les deux méthodes sont identiques", 'is_correct' => false],
                            ['choice_text' => "Le rééquilibrage consiste toujours à prévoir les cours", 'is_correct' => false],
                            ['choice_text' => "Le market timing ne concerne que les obligations", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client demande de modifier son allocation après trois jours de baisse des marchés. Quelle question faut-il poser en premier ?",
                        'explanation' => "Une baisse de marché n'implique pas automatiquement que la stratégie doit changer. Il faut distinguer changement structurel de situation et réaction émotionnelle.",
                        'choices' => [
                            ['choice_text' => "Son objectif ou son profil ont-ils changé, ou réagit-il seulement à la volatilité ?", 'is_correct' => true],
                            ['choice_text' => "Quelle action peut être achetée aujourd'hui ?", 'is_correct' => false],
                            ['choice_text' => "Quelle banque a le plus de publicité ?", 'is_correct' => false],
                            ['choice_text' => "Quel titre a baissé le plus ?", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une allocation tactique peut-elle exister à côté d'une allocation stratégique ?",
                        'explanation' => "Une gestion peut combiner une allocation stratégique de référence et des écarts tactiques, à condition que ces écarts soient définis et maîtrisés.",
                        'choices' => [
                            ['choice_text' => "Oui, si elle reste encadrée par des limites et une gouvernance claires", 'is_correct' => true],
                            ['choice_text' => "Non, jamais", 'is_correct' => false],
                            ['choice_text' => "Oui, mais uniquement pour garantir le rendement", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu'une allocation ne peut avoir qu'une seule composante", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d'une revue annuelle, les revenus du client ont fortement augmenté mais ses objectifs restent identiques. Quel élément doit être réexaminé ?",
                        'explanation' => "L'amélioration de la situation financière peut modifier les montants investissables et la capacité à supporter le risque. Le portefeuille doit être revu dans son ensemble.",
                        'choices' => [
                            ['choice_text' => "Sa capacité d'épargne et éventuellement sa capacité de risque", 'is_correct' => true],
                            ['choice_text' => "Uniquement le cours de son action préférée", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nombre de fonds détenus", 'is_correct' => false],
                            ['choice_text' => "Aucun élément, car un portefeuille ne change jamais", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel indicateur pratique peut aider à surveiller un portefeuille sans remplacer l'analyse globale ?",
                        'explanation' => "L'écart par rapport aux cibles est un indicateur simple de dérive. Il doit toutefois être interprété avec les objectifs, coûts et contraintes du client.",
                        'choices' => [
                            ['choice_text' => "L'écart entre les poids réels et les poids cibles", 'is_correct' => true],
                            ['choice_text' => "La couleur des graphiques", 'is_correct' => false],
                            ['choice_text' => "Le nombre de notifications reçues", 'is_correct' => false],
                            ['choice_text' => "Le montant de publicité d'un fonds", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client retire régulièrement de l'argent de son portefeuille pour financer ses dépenses. Quel effet cela peut-il avoir sur le rééquilibrage ?",
                        'explanation' => "Les flux de trésorerie constituent une occasion de corriger progressivement l'allocation sans nécessairement vendre chaque position en écart.",
                        'choices' => [
                            ['choice_text' => "Les retraits et nouveaux apports peuvent être utilisés pour ajuster les pondérations", 'is_correct' => true],
                            ['choice_text' => "Ils rendent le rééquilibrage impossible", 'is_correct' => false],
                            ['choice_text' => "Ils garantissent une meilleure performance", 'is_correct' => false],
                            ['choice_text' => "Ils suppriment les contraintes de liquidité", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Liquidité, revenus et préservation du patrimoine",
                'description' => "Arbitrer entre rendement, liquidité et préservation du capital dans des situations patrimoniales courantes.",
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Une cliente de 60 ans souhaite financer les cinq prochaines années de retraits grâce à son patrimoine. Quel risque mérite une attention particulière ?",
                        'explanation' => "Des retraits proches combinés à une baisse de marché peuvent forcer la vente à perte. La gestion de liquidité et de séquence des rendements devient importante.",
                        'choices' => [
                            ['choice_text' => "Devoir vendre des actifs risqués après une forte baisse de marché", 'is_correct' => true],
                            ['choice_text' => "Une diversification trop importante", 'is_correct' => false],
                            ['choice_text' => "Une absence de rendement sur les actions mondiales", 'is_correct' => false],
                            ['choice_text' => "Le fait que toutes les obligations aient la même échéance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur veut conserver une réserve immédiatement disponible pour six mois de dépenses. Quel critère est prioritaire pour cette poche ?",
                        'explanation' => "Une réserve de court terme sert d'abord à financer des besoins prévisibles ou urgents. La liquidité et la stabilité priment sur la recherche de rendement élevé.",
                        'choices' => [
                            ['choice_text' => "Disponibilité et stabilité du capital", 'is_correct' => true],
                            ['choice_text' => "Rendement maximal sans limite de risque", 'is_correct' => false],
                            ['choice_text' => "Durée maximale d'immobilisation", 'is_correct' => false],
                            ['choice_text' => "Exposition maximale aux actions", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un portefeuille génère 24 000 € de revenus annuels sur un patrimoine de 600 000 €. Quel est le rendement courant simple ?",
                        'explanation' => "Le rendement courant simple est de 24 000 / 600 000 = 0,04, soit 4 %.",
                        'choices' => [
                            ['choice_text' => "2 %", 'is_correct' => false],
                            ['choice_text' => "4 %", 'is_correct' => true],
                            ['choice_text' => "6 %", 'is_correct' => false],
                            ['choice_text' => "8 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client compare deux placements : A rapporte 5 % avec une faible liquidité, B rapporte 4,5 % avec une liquidité élevée. Quel raisonnement est le plus pertinent ?",
                        'explanation' => "Une différence de rendement doit être mise en relation avec la possibilité et la date d'utiliser l'argent. Le meilleur choix dépend du besoin réel.",
                        'choices' => [
                            ['choice_text' => "Le choix dépend du besoin de liquidité et pas seulement du taux affiché", 'is_correct' => true],
                            ['choice_text' => "A est toujours meilleur car son taux est supérieur", 'is_correct' => false],
                            ['choice_text' => "B est toujours meilleur car il est plus liquide", 'is_correct' => false],
                            ['choice_text' => "Le rendement suffit à prendre la décision", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une gestion patrimoniale doit-elle distinguer rendement et préservation du capital ?",
                        'explanation' => "Un investisseur peut avoir plusieurs poches avec des objectifs différents. Certaines chercheront la croissance, d'autres prioriseront la stabilité et la disponibilité.",
                        'choices' => [
                            ['choice_text' => "Parce qu'un objectif de croissance n'est pas identique à un objectif de stabilité du capital", 'is_correct' => true],
                            ['choice_text' => "Parce que les deux notions sont exactement opposées", 'is_correct' => false],
                            ['choice_text' => "Parce que le capital ne peut jamais diminuer", 'is_correct' => false],
                            ['choice_text' => "Parce que le rendement n'existe que pour les actions", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une obligation arrive à échéance dans neuf mois et son montant correspond presque exactement à une dépense prévue à cette date. Pourquoi cette correspondance peut-elle être utile ?",
                        'explanation' => "Faire correspondre certains flux à des dépenses futures peut limiter le risque de marché autour d'une échéance précise.",
                        'choices' => [
                            ['choice_text' => "Elle réduit le risque de devoir vendre un actif volatil au moment du besoin", 'is_correct' => true],
                            ['choice_text' => "Elle augmente automatiquement le rendement", 'is_correct' => false],
                            ['choice_text' => "Elle supprime tous les risques financiers", 'is_correct' => false],
                            ['choice_text' => "Elle rend le portefeuille inutile", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un retraité souhaite recevoir un revenu régulier tout en conservant une partie de son patrimoine pour l'avenir. Quelle approche est raisonnable ?",
                        'explanation' => "Une stratégie de retrait doit tenir compte du montant annuel, de l'horizon, des actifs disponibles et de la nécessité de préserver une partie du patrimoine.",
                        'choices' => [
                            ['choice_text' => "Définir une stratégie de retrait compatible avec la durée prévue et la structure du portefeuille", 'is_correct' => true],
                            ['choice_text' => "Vendre la totalité du patrimoine dès la première année", 'is_correct' => false],
                            ['choice_text' => "Investir toute la somme dans l'actif le plus risqué", 'is_correct' => false],
                            ['choice_text' => "Ignorer les besoins futurs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le risque principal d'investir une somme destinée à être utilisée dans trois mois dans un actif très volatil ?",
                        'explanation' => "L'horizon court laisse peu de temps pour récupérer une baisse. Une forte volatilité est donc peu compatible avec un besoin imminent et certain.",
                        'choices' => [
                            ['choice_text' => "Une baisse peut survenir avant la date du besoin", 'is_correct' => true],
                            ['choice_text' => "Le rendement devient garanti", 'is_correct' => false],
                            ['choice_text' => "La liquidité augmente automatiquement", 'is_correct' => false],
                            ['choice_text' => "Le risque disparaît grâce à l'horizon court", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un patrimoine comporte des actifs financiers mais aussi une entreprise familiale illiquide. Pourquoi cette dernière doit-elle être prise en compte dans la gestion des liquidités ?",
                        'explanation' => "La valeur patrimoniale ne signifie pas disponibilité immédiate. Un actif illiquide peut obliger à prévoir séparément des réserves de cash.",
                        'choices' => [
                            ['choice_text' => "Une grande partie du patrimoine peut être difficile à convertir rapidement en cash", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une entreprise familiale est toujours liquide", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle élimine les besoins de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle garantit les dépenses futures", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cliente reçoit des revenus trimestriels irréguliers. Quelle pratique peut faciliter la gestion de son patrimoine ?",
                        'explanation' => "Une vision des entrées et sorties permet d'éviter de vendre des actifs au mauvais moment et de mieux dimensionner la réserve de liquidité.",
                        'choices' => [
                            ['choice_text' => "Construire un budget de flux et un coussin de liquidité adapté", 'is_correct' => true],
                            ['choice_text' => "Investir chaque euro sans réserve", 'is_correct' => false],
                            ['choice_text' => "Ignorer les périodes de revenus faibles", 'is_correct' => false],
                            ['choice_text' => "Maintenir exactement le même montant de retrait chaque semaine sans analyse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un actif rapporte 7 % avant coûts et fiscalité, mais 1,5 point de pourcentage de coûts et prélèvements réduit le résultat final. Quel rendement simplifié reste-t-il ?",
                        'explanation' => "Dans cette simplification, 7 % - 1,5 % = 5,5 %. En pratique, la fiscalité dépend du cadre applicable et de la nature du revenu.",
                        'choices' => [
                            ['choice_text' => "5,5 %", 'is_correct' => true],
                            ['choice_text' => "6 %", 'is_correct' => false],
                            ['choice_text' => "8,5 %", 'is_correct' => false],
                            ['choice_text' => "4,5 %", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Transmission et gestion des grands objectifs",
                'description' => "Relier gestion de patrimoine, horizon de vie, transmission et besoins futurs dans des cas pratiques.",
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Un client souhaite financer les études de ses enfants et préparer sa retraite tout en transmettant une partie de son patrimoine. Quelle approche est la plus claire ?",
                        'explanation' => "La segmentation par objectifs permet d'aligner horizon, liquidité et risque avec chaque besoin patrimonial.",
                        'choices' => [
                            ['choice_text' => "Définir séparément les objectifs, leurs échéances et les montants nécessaires", 'is_correct' => true],
                            ['choice_text' => "Mettre tous les objectifs dans une seule poche sans horizon", 'is_correct' => false],
                            ['choice_text' => "Choisir un seul actif pour tout financer", 'is_correct' => false],
                            ['choice_text' => "Ignorer les objectifs futurs non encore chiffrés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un horizon très long n'autorise-t-il pas à ignorer complètement le risque ?",
                        'explanation' => "Le temps aide à traverser certaines fluctuations, mais il ne supprime ni les besoins intermédiaires ni la possibilité de pertes importantes.",
                        'choices' => [
                            ['choice_text' => "Parce que des besoins intermédiaires, des changements de situation ou une mauvaise capacité à supporter les pertes peuvent subsister", 'is_correct' => true],
                            ['choice_text' => "Parce que le risque disparaît après dix ans", 'is_correct' => false],
                            ['choice_text' => "Parce que les marchés sont toujours positifs à long terme", 'is_correct' => false],
                            ['choice_text' => "Parce que le client ne peut plus changer d'objectif", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une famille prévoit de financer une donation importante dans huit ans. Quelle information financière doit être clarifiée avant de construire la poche correspondante ?",
                        'explanation' => "Le montant et la date déterminent le besoin de financement. La flexibilité de l'échéance permet aussi d'apprécier la capacité à absorber des fluctuations.",
                        'choices' => [
                            ['choice_text' => "Le montant cible, son échéance et la flexibilité de la date", 'is_correct' => true],
                            ['choice_text' => "Le nom de la banque préférée uniquement", 'is_correct' => false],
                            ['choice_text' => "Le meilleur titre du mois", 'is_correct' => false],
                            ['choice_text' => "La couleur des documents patrimoniaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur a atteint un objectif patrimonial majeur et son horizon de placement vient de raccourcir. Que peut-il être nécessaire de faire ?",
                        'explanation' => "Lorsque l'échéance approche, la capacité à supporter une baisse peut diminuer. Une réduction progressive du risque peut être cohérente avec le nouvel horizon.",
                        'choices' => [
                            ['choice_text' => "Réduire progressivement le risque de la poche concernée", 'is_correct' => true],
                            ['choice_text' => "Augmenter systématiquement la volatilité", 'is_correct' => false],
                            ['choice_text' => "Conserver la même allocation sans réexamen", 'is_correct' => false],
                            ['choice_text' => "Vendre tous les actifs immédiatement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client souhaite transmettre une partie de son patrimoine mais a encore besoin d'une partie des revenus produits par ce patrimoine. Quel compromis doit être examiné ?",
                        'explanation' => "La stratégie de transmission doit rester compatible avec les besoins du donateur. Le montant et le calendrier doivent être analysés avec les besoins de revenus et de liquidité.",
                        'choices' => [
                            ['choice_text' => "Le montant transmis, le besoin de revenus et l'horizon du client", 'is_correct' => true],
                            ['choice_text' => "Uniquement le rendement passé", 'is_correct' => false],
                            ['choice_text' => "Uniquement la valeur actuelle des actions", 'is_correct' => false],
                            ['choice_text' => "La suppression de toute réserve de liquidité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un plan patrimonial, pourquoi faut-il prévoir des scénarios de dépenses imprévues ?",
                        'explanation' => "Les imprévus peuvent perturber un plan trop rigide. Une réserve ou une marge de sécurité réduit le risque de ventes forcées.",
                        'choices' => [
                            ['choice_text' => "Pour éviter que des besoins non anticipés obligent à vendre des actifs dans de mauvaises conditions", 'is_correct' => true],
                            ['choice_text' => "Pour garantir que les marchés monteront", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toute assurance", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter automatiquement le risque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une personne de 45 ans reçoit un héritage important. Quelle erreur serait la plus facile à éviter avec une démarche patrimoniale structurée ?",
                        'explanation' => "Un apport important modifie rapidement la structure patrimoniale. Une analyse préalable évite de prendre une décision unique sans tenir compte de l'ensemble de la situation.",
                        'choices' => [
                            ['choice_text' => "Investir immédiatement la totalité sans vérifier objectifs, liquidité et concentration", 'is_correct' => true],
                            ['choice_text' => "Analyser ses dettes", 'is_correct' => false],
                            ['choice_text' => "Construire une réserve de sécurité", 'is_correct' => false],
                            ['choice_text' => "Faire l'inventaire de ses actifs existants", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client souhaite financer une retraite flexible plutôt qu'une date fixe. Quel élément prend davantage d'importance ?",
                        'explanation' => "Avec une retraite flexible, la stratégie peut intégrer des retraits ajustables selon les marchés et les besoins, ce qui offre davantage de marge de manœuvre.",
                        'choices' => [
                            ['choice_text' => "La capacité du portefeuille à soutenir différents niveaux de retraits selon les années", 'is_correct' => true],
                            ['choice_text' => "Une échéance unique qui ne bougera jamais", 'is_correct' => false],
                            ['choice_text' => "Le nombre de titres dans le portefeuille", 'is_correct' => false],
                            ['choice_text' => "Le rendement d'une seule année", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'intérêt d'une revue patrimoniale après un mariage, une naissance ou un changement majeur de carrière ?",
                        'explanation' => "Les événements de vie modifient souvent les flux et priorités. La stratégie patrimoniale doit donc être réexaminée plutôt que figée.",
                        'choices' => [
                            ['choice_text' => "Ces événements peuvent modifier les objectifs, charges, revenus et besoins de protection", 'is_correct' => true],
                            ['choice_text' => "Ils ne changent jamais les besoins financiers", 'is_correct' => false],
                            ['choice_text' => "Ils rendent inutile toute diversification", 'is_correct' => false],
                            ['choice_text' => "Ils imposent automatiquement un portefeuille actions", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il distinguer patrimoine financier et patrimoine total ?",
                        'explanation' => "Une décision sur les placements financiers peut être inadaptée si elle ignore les autres actifs et les passifs qui composent le patrimoine global.",
                        'choices' => [
                            ['choice_text' => "Parce que l'immobilier, l'entreprise, les dettes et autres actifs influencent le risque global", 'is_correct' => true],
                            ['choice_text' => "Parce que seul le patrimoine financier a une valeur", 'is_correct' => false],
                            ['choice_text' => "Parce que les dettes ne sont jamais pertinentes", 'is_correct' => false],
                            ['choice_text' => "Parce que l'immobilier ne comporte aucun risque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un couple a un patrimoine financier élevé mais une dette importante à taux variable. Que faut-il intégrer dans l'analyse ?",
                        'explanation' => "La dette est une composante essentielle du bilan patrimonial. Son coût et son exposition aux taux peuvent modifier la stratégie globale.",
                        'choices' => [
                            ['choice_text' => "Le coût et le risque de la dette, pas seulement le rendement du portefeuille", 'is_correct' => true],
                            ['choice_text' => "Uniquement la performance des actions", 'is_correct' => false],
                            ['choice_text' => "Uniquement la taille du portefeuille", 'is_correct' => false],
                            ['choice_text' => "La dette comme un actif sans risque", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Fiscalité et décisions patrimoniales",
                'description' => "Intégrer les considérations fiscales générales sans supposer une législation particulière, et raisonner en rendement net.",
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Deux placements ont le même rendement brut attendu mais des fiscalités différentes selon la situation du client. Quel indicateur est particulièrement pertinent pour comparer les options ?",
                        'explanation' => "Pour le client, ce qui compte est le résultat net pertinent après coûts et fiscalité dans son cadre réel. Les règles exactes doivent être vérifiées selon la juridiction et la situation.",
                        'choices' => [
                            ['choice_text' => "Le rendement net après coûts et fiscalité applicable", 'is_correct' => true],
                            ['choice_text' => "Le rendement brut uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de transactions", 'is_correct' => false],
                            ['choice_text' => "La durée du contrat indépendamment des besoins", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un fonds affiche 6 % de rendement avant frais et les coûts annuels représentent 0,8 point. Quel rendement simplifié reste avant fiscalité ?",
                        'explanation' => "Dans cette approximation, 6 % - 0,8 % = 5,2 %. Il s'agit d'un calcul simplifié des coûts, sans préjuger de la fiscalité.",
                        'choices' => [
                            ['choice_text' => "5,2 %", 'is_correct' => true],
                            ['choice_text' => "5,8 %", 'is_correct' => false],
                            ['choice_text' => "6,8 %", 'is_correct' => false],
                            ['choice_text' => "4,2 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi comparer uniquement le taux d'un placement peut-il conduire à une mauvaise décision patrimoniale ?",
                        'explanation' => "Un placement doit être évalué dans son contexte. Un taux supérieur peut être compensé par des coûts ou des risques plus élevés ou par une moindre liquidité.",
                        'choices' => [
                            ['choice_text' => "Parce que le résultat dépend aussi des coûts, de la fiscalité, du risque et de la liquidité", 'is_correct' => true],
                            ['choice_text' => "Parce que le taux n'a jamais d'importance", 'is_correct' => false],
                            ['choice_text' => "Parce que les coûts sont identiques partout", 'is_correct' => false],
                            ['choice_text' => "Parce que la liquidité est toujours garantie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client demande quel investissement est fiscalement 'le meilleur' sans préciser son pays ni sa situation. Quelle réponse méthodologique est correcte ?",
                        'explanation' => "La fiscalité dépend de la juridiction, de la nature du produit et de la situation du contribuable. Une conclusion sérieuse nécessite ces informations.",
                        'choices' => [
                            ['choice_text' => "Demander la juridiction et la situation avant de conclure", 'is_correct' => true],
                            ['choice_text' => "Choisir automatiquement l'actif au rendement brut le plus élevé", 'is_correct' => false],
                            ['choice_text' => "Inventer une règle fiscale générale", 'is_correct' => false],
                            ['choice_text' => "Supposer qu'une seule règle s'applique partout", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une enveloppe d'investissement permet de différer certaines impositions. Quel effet général cela peut-il avoir ?",
                        'explanation' => "Le report d'imposition peut laisser davantage de capital investi pendant une période donnée. Cela ne signifie pas que toute fiscalité disparaît ni que le risque diminue.",
                        'choices' => [
                            ['choice_text' => "Le calendrier des impôts peut être différent et le capital peut bénéficier plus longtemps de la capitalisation", 'is_correct' => true],
                            ['choice_text' => "Les placements deviennent sans risque", 'is_correct' => false],
                            ['choice_text' => "Le rendement brut est automatiquement augmenté", 'is_correct' => false],
                            ['choice_text' => "Toutes les taxes sont supprimées définitivement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client hésite entre un placement avec frais d'entrée élevés et un placement comparable avec frais plus faibles. Quelle approche doit-il adopter ?",
                        'explanation' => "Les frais d'entrée et récurrents peuvent réduire le rendement effectif. L'analyse doit porter sur l'ensemble des coûts et la durée de détention.",
                        'choices' => [
                            ['choice_text' => "Comparer le coût total et son impact sur le rendement net sur la durée prévue", 'is_correct' => true],
                            ['choice_text' => "Choisir toujours le produit au rendement annoncé le plus élevé", 'is_correct' => false],
                            ['choice_text' => "Ignorer les frais car ils sont secondaires", 'is_correct' => false],
                            ['choice_text' => "Comparer uniquement les deux publicités", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la fiscalité ne doit-elle pas être l'unique moteur d'une décision d'investissement ?",
                        'explanation' => "Un produit fiscalement intéressant peut rester inadapté si son risque, sa liquidité ou ses coûts ne correspondent pas au besoin du client.",
                        'choices' => [
                            ['choice_text' => "Un avantage fiscal ne compense pas nécessairement un risque, des coûts ou une mauvaise adéquation avec l'objectif", 'is_correct' => true],
                            ['choice_text' => "Parce que la fiscalité n'existe pas", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un avantage fiscal garantit le rendement", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les investisseurs ont les mêmes besoins", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une stratégie génère 8 % brut avec 1 % de coûts. Une autre génère 7 % brut avec 0,2 % de coûts. Hors fiscalité, laquelle a le rendement net simplifié le plus élevé ?",
                        'explanation' => "La première donne 8 % - 1 % = 7 %. La seconde donne 7 % - 0,2 % = 6,8 %. Dans cette simplification, la première est supérieure de 0,2 point.",
                        'choices' => [
                            ['choice_text' => "La première, à 7 %", 'is_correct' => true],
                            ['choice_text' => "La seconde, à 6,8 %", 'is_correct' => false],
                            ['choice_text' => "Les deux, à 7 %", 'is_correct' => false],
                            ['choice_text' => "La seconde, à 7,2 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lorsqu'un produit présente un avantage fiscal, pourquoi faut-il lire les conditions de détention et de sortie ?",
                        'explanation' => "Les dispositifs fiscaux sont généralement associés à des conditions. Il faut vérifier leur fonctionnement réel avant de conclure sur leur intérêt.",
                        'choices' => [
                            ['choice_text' => "Parce que l'avantage peut dépendre de règles, de délais ou de conditions spécifiques", 'is_correct' => true],
                            ['choice_text' => "Parce que les conditions n'ont jamais d'importance", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les enveloppes sont identiques", 'is_correct' => false],
                            ['choice_text' => "Parce que la sortie est toujours libre sans conséquence", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur change de pays de résidence fiscale. Que faut-il envisager avant de conserver sa stratégie sans modification ?",
                        'explanation' => "Un changement de résidence peut modifier les règles fiscales et déclaratives. La stratégie doit être revalidée dans le nouveau cadre.",
                        'choices' => [
                            ['choice_text' => "Réexaminer la fiscalité et les obligations applicables à sa nouvelle situation", 'is_correct' => true],
                            ['choice_text' => "Ne rien vérifier", 'is_correct' => false],
                            ['choice_text' => "Vendre tous les actifs sans analyse", 'is_correct' => false],
                            ['choice_text' => "Considérer que les règles restent forcément identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel principe simple aide à comparer deux solutions patrimoniales ayant des coûts différents ?",
                        'explanation' => "Le rendement net permet d'intégrer plus correctement l'effet des frais, et l'horizon permet d'apprécier leur impact cumulé.",
                        'choices' => [
                            ['choice_text' => "Regarder le rendement net attendu sur l'horizon pertinent", 'is_correct' => true],
                            ['choice_text' => "Comparer seulement le rendement publicitaire", 'is_correct' => false],
                            ['choice_text' => "Ignorer les frais récurrents", 'is_correct' => false],
                            ['choice_text' => "Choisir systématiquement le produit le plus complexe", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques de gestion de patrimoine",
                'description' => "Résoudre des situations patrimoniales variées et justifier une décision d'allocation ou de gestion.",
                'duration' => 30,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => "Un investisseur reçoit 1 500 € de dividendes par trimestre. Quel revenu annuel cela représente-t-il, avant fiscalité et en supposant quatre trimestres identiques ?",
                        'explanation' => "1 500 € × 4 = 6 000 € par an. Le calcul ne tient pas compte de l'évolution future des dividendes ni de la fiscalité.",
                        'choices' => [
                            ['choice_text' => "3 000 €", 'is_correct' => false],
                            ['choice_text' => "4 500 €", 'is_correct' => false],
                            ['choice_text' => "6 000 €", 'is_correct' => true],
                            ['choice_text' => "7 500 €", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client possède 1 000 000 € de patrimoine financier, dont 100 000 € en liquidités. Quel est le poids des liquidités ?",
                        'explanation' => "100 000 / 1 000 000 = 10 %. Les liquidités représentent donc 10 % du patrimoine financier.",
                        'choices' => [
                            ['choice_text' => "5 %", 'is_correct' => false],
                            ['choice_text' => "10 %", 'is_correct' => true],
                            ['choice_text' => "20 %", 'is_correct' => false],
                            ['choice_text' => "25 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une famille souhaite retirer 30 000 € par an d'un patrimoine de 750 000 €. Quel taux de retrait initial cela représente-t-il ?",
                        'explanation' => "30 000 / 750 000 = 0,04, soit un taux de retrait initial de 4 %. La soutenabilité future dépend ensuite des rendements, de l'inflation et de l'évolution des retraits.",
                        'choices' => [
                            ['choice_text' => "2 %", 'is_correct' => false],
                            ['choice_text' => "4 %", 'is_correct' => true],
                            ['choice_text' => "5 %", 'is_correct' => false],
                            ['choice_text' => "6 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un portefeuille comprend 400 000 € d'actions, 300 000 € d'obligations et 100 000 € de liquidités. Quel est le poids combiné des obligations et des liquidités ?",
                        'explanation' => "Le total du patrimoine est de 800 000 €. Obligations + liquidités = 400 000 €, soit 50 %. Correction: 400 000 / 800 000 = 50 %.",
                        'choices' => [
                            ['choice_text' => "40 %", 'is_correct' => false],
                            ['choice_text' => "50 %", 'is_correct' => false],
                            ['choice_text' => "60 %", 'is_correct' => true],
                            ['choice_text' => "70 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une erreur apparaît dans l'information client : une résidence principale de 600 000 € a été oubliée dans le bilan patrimonial. Pourquoi cela peut-il changer l'analyse ?",
                        'explanation' => "Oublier un actif important fausse la vision du patrimoine total et peut conduire à une mauvaise appréciation de la concentration, de la liquidité et des besoins.",
                        'choices' => [
                            ['choice_text' => "Le patrimoine total et la concentration des risques sont sous-estimés", 'is_correct' => true],
                            ['choice_text' => "Cela ne change jamais rien", 'is_correct' => false],
                            ['choice_text' => "Le portefeuille financier devient automatiquement plus risqué", 'is_correct' => false],
                            ['choice_text' => "La dette disparaît", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur reçoit 50 000 € supplémentaires et souhaite réduire une concentration excessive en actions de son employeur. Quelle utilisation des nouveaux fonds peut être pertinente ?",
                        'explanation' => "Les nouveaux apports peuvent servir à corriger une concentration sans nécessairement vendre immédiatement la position existante.",
                        'choices' => [
                            ['choice_text' => "Les orienter vers des actifs diversifiés selon la stratégie cible", 'is_correct' => true],
                            ['choice_text' => "Acheter encore davantage d'actions de l'employeur", 'is_correct' => false],
                            ['choice_text' => "Les laisser sans objectif", 'is_correct' => false],
                            ['choice_text' => "Les investir intégralement dans le même secteur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client a besoin de 40 000 € dans douze mois. Son portefeuille contient 35 000 € d'actifs très liquides et 100 000 € d'actifs risqués. Quelle question devrait être posée ?",
                        'explanation' => "La première question est celle du financement du besoin certain. Le déficit de liquidité doit être identifié avant toute nouvelle prise de risque.",
                        'choices' => [
                            ['choice_text' => "Comment couvrir les 5 000 € manquants sans dépendre d'une vente d'actifs risqués au mauvais moment ?", 'is_correct' => true],
                            ['choice_text' => "Quelle action risquée acheter ensuite ?", 'is_correct' => false],
                            ['choice_text' => "Comment augmenter la volatilité du portefeuille ?", 'is_correct' => false],
                            ['choice_text' => "Comment supprimer toute diversification ?", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client demande de conserver 20 % de son portefeuille en cash permanent. Que faut-il vérifier avant d'accepter cette règle comme définitive ?",
                        'explanation' => "Une poche de cash peut être utile, mais son niveau doit être justifié par les besoins, le coût d'opportunité et la stratégie globale.",
                        'choices' => [
                            ['choice_text' => "Le coût d'opportunité, les besoins réels de liquidité et les objectifs", 'is_correct' => true],
                            ['choice_text' => "Uniquement le niveau des taux d'hier", 'is_correct' => false],
                            ['choice_text' => "Le nombre de banques utilisées", 'is_correct' => false],
                            ['choice_text' => "La performance de la Bourse sur un mois", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une allocation cible est 50 % actions et 50 % obligations. Après les mouvements de marché, le portefeuille vaut 540 000 € dont 324 000 € d'actions. Quel est le poids des actions ?",
                        'explanation' => "324 000 / 540 000 = 0,60, soit 60 %. Le portefeuille a donc dérivé de sa cible de 50 %.",
                        'choices' => [
                            ['choice_text' => "50 %", 'is_correct' => false],
                            ['choice_text' => "55 %", 'is_correct' => false],
                            ['choice_text' => "60 %", 'is_correct' => true],
                            ['choice_text' => "65 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le meilleur réflexe lorsqu'un client présente un portefeuille composé de produits achetés au fil des années sans logique commune ?",
                        'explanation' => "Une analyse consolidée permet d'identifier les doublons, concentrations, coûts et inadéquations avant de prendre une décision.",
                        'choices' => [
                            ['choice_text' => "Reconstruire d'abord une vue consolidée par objectifs, risques, coûts et liquidité", 'is_correct' => true],
                            ['choice_text' => "Ajouter d'autres produits immédiatement", 'is_correct' => false],
                            ['choice_text' => "Conserver tout parce que les produits sont anciens", 'is_correct' => false],
                            ['choice_text' => "Vendre automatiquement les cinq plus petits", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur a un portefeuille diversifié mais 80 % de ses revenus professionnels dépendent d'un seul secteur cyclique. Pourquoi cela compte-t-il ?",
                        'explanation' => "Le patrimoine doit être analysé globalement. Un risque professionnel élevé peut justifier une exposition financière différente de celle d'un client dont les revenus sont plus diversifiés.",
                        'choices' => [
                            ['choice_text' => "Son risque économique global est plus concentré que ne le montre le portefeuille financier", 'is_correct' => true],
                            ['choice_text' => "Les revenus professionnels n'ont aucun lien avec le patrimoine", 'is_correct' => false],
                            ['choice_text' => "La diversification financière devient impossible", 'is_correct' => false],
                            ['choice_text' => "Le portefeuille devient automatiquement sans risque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cliente souhaite augmenter son niveau de risque parce que son portefeuille a sous-performé pendant trois mois. Quel élément doit être examiné avant de modifier l'allocation ?",
                        'explanation' => "Trois mois sont une période très courte pour juger une stratégie patrimoniale. Il faut examiner son adéquation au profil et aux objectifs avant de changer le niveau de risque.",
                        'choices' => [
                            ['choice_text' => "La qualité de la stratégie par rapport aux objectifs et au profil, plutôt que la seule performance de court terme", 'is_correct' => true],
                            ['choice_text' => "Le titre ayant le plus monté cette semaine", 'is_correct' => false],
                            ['choice_text' => "La meilleure publicité financière du mois", 'is_correct' => false],
                            ['choice_text' => "La quantité de notifications de marché", 'is_correct' => false],
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
