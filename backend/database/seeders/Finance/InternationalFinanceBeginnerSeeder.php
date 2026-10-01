<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class InternationalFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'international-finance')->firstOrFail();

        $quizzes = [
            [
                'title' => "Comprendre les flux de capitaux internationaux",
                'description' => "Lecture simple des mouvements de capitaux entre pays et des raisons économiques qui poussent les entreprises et investisseurs à franchir les frontières.",
                'duration' => 22,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Un fonds d'investissement marocain achète des obligations émises par une entreprise américaine. Comment qualifier cette opération du point de vue du fonds ?",
                        'choices' => [
                            ['choice_text' => "Un investissement financier transfrontalier", 'is_correct' => true],
                            ['choice_text' => "Une opération purement domestique", 'is_correct' => false],
                            ['choice_text' => "Une opération sans exposition au marché étranger", 'is_correct' => false],
                            ['choice_text' => "Un simple échange de stocks physiques", 'is_correct' => false],
                        ],
                        'explanation' => "Le fonds place son capital dans un actif émis par une entité étrangère. Il s'agit donc d'un investissement financier transfrontalier.",
                    ],
                    [
                        'question' => "Pourquoi un investisseur peut-il chercher des opportunités à l'étranger même si son marché domestique reste attractif ?",
                        'choices' => [
                            ['choice_text' => "Pour élargir l'univers d'investissement et diversifier certains risques", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un portefeuille international ne peut jamais perdre de valeur", 'is_correct' => false],
                            ['choice_text' => "Parce que les marchés domestiques sont toujours fermés", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer totalement le risque de change", 'is_correct' => false],
                        ],
                        'explanation' => "L'investissement international augmente le nombre d'opportunités accessibles. Il peut apporter une diversification, mais introduit aussi de nouvelles sources de risque.",
                    ],
                    [
                        'question' => "Une entreprise française reçoit 100 000 USD et, au moment de l'encaissement, 1 USD vaut 0,90 EUR. Quel montant en euros reçoit-elle avant frais ?",
                        'choices' => [
                            ['choice_text' => "90 000 EUR", 'is_correct' => true],
                            ['choice_text' => "100 900 EUR", 'is_correct' => false],
                            ['choice_text' => "111 111 EUR", 'is_correct' => false],
                            ['choice_text' => "9 000 EUR", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant est 100 000 × 0,90 = 90 000 EUR. On suppose ici l'absence de frais et un taux de conversion simple.",
                    ],
                    [
                        'question' => "Un investisseur conserve une obligation étrangère. Même si le prix de l'obligation ne change pas dans sa devise d'origine, son rendement en dirhams peut-il changer ?",
                        'choices' => [
                            ['choice_text' => "Oui, à cause de l'évolution du taux de change", 'is_correct' => true],
                            ['choice_text' => "Non, jamais", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement si l'obligation cesse de verser un coupon", 'is_correct' => false],
                            ['choice_text' => "Non, car une devise étrangère garde toujours la même valeur", 'is_correct' => false],
                        ],
                        'explanation' => "La performance mesurée en dirhams dépend à la fois de l'actif étranger et du taux de conversion entre la devise étrangère et le dirham.",
                    ],
                    [
                        'question' => "Une entreprise ouvre une usine au Portugal afin de produire directement sur place. Quelle motivation économique correspond le mieux à cette décision ?",
                        'choices' => [
                            ['choice_text' => "Se rapprocher du marché local et organiser la production sur place", 'is_correct' => true],
                            ['choice_text' => "Éviter toute décision d'investissement", 'is_correct' => false],
                            ['choice_text' => "Supprimer automatiquement tous les coûts logistiques", 'is_correct' => false],
                            ['choice_text' => "Garantir un taux de change fixe pour dix ans", 'is_correct' => false],
                        ],
                        'explanation' => "Une implantation peut répondre à une logique commerciale ou productive. Elle peut réduire certaines distances logistiques, sans faire disparaître tous les coûts ou risques.",
                    ],
                    [
                        'question' => "Dans un contexte international, qu'appelle-t-on généralement un flux de capitaux ?",
                        'choices' => [
                            ['choice_text' => "Un mouvement de fonds entre agents économiques, souvent lié à un investissement ou à un financement", 'is_correct' => true],
                            ['choice_text' => "Un déplacement physique de marchandises uniquement", 'is_correct' => false],
                            ['choice_text' => "Un mouvement de personnel entre deux bureaux", 'is_correct' => false],
                            ['choice_text' => "Une hausse automatique des ventes", 'is_correct' => false],
                        ],
                        'explanation' => "Les flux de capitaux correspondent aux mouvements financiers liés notamment aux investissements, prêts, placements et autres opérations entre pays.",
                    ],
                    [
                        'question' => "Une entreprise reçoit un prêt en dollars alors que ses revenus futurs sont principalement en dirhams. Quel déséquilibre faut-il surveiller ?",
                        'choices' => [
                            ['choice_text' => "Le décalage entre la devise de la dette et celle des revenus", 'is_correct' => true],
                            ['choice_text' => "Le nombre de salariés dans l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Le niveau des stocks uniquement", 'is_correct' => false],
                            ['choice_text' => "La durée de ses contrats téléphoniques", 'is_correct' => false],
                        ],
                        'explanation' => "La dette en USD devra être remboursée en USD, alors que les ressources de l'entreprise sont en MAD. Une variation du change peut donc alourdir ou alléger le service de la dette.",
                    ],
                    [
                        'question' => "Quel élément peut rendre un investissement international plus complexe qu'un investissement purement domestique ?",
                        'choices' => [
                            ['choice_text' => "La combinaison de différences de monnaie, de réglementation et de contexte économique", 'is_correct' => true],
                            ['choice_text' => "Le fait qu'un investissement étranger ne génère jamais de flux", 'is_correct' => false],
                            ['choice_text' => "L'impossibilité de comparer des projets", 'is_correct' => false],
                            ['choice_text' => "L'absence totale de contrats", 'is_correct' => false],
                        ],
                        'explanation' => "Au-delà de la rentabilité du projet, l'investisseur doit tenir compte de l'environnement juridique, monétaire et économique du pays concerné.",
                    ],
                    [
                        'question' => "Pourquoi une banque internationale peut-elle intervenir dans un financement accordé à une entreprise active dans plusieurs pays ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elle peut apporter des solutions de financement, de paiement et de change adaptées à plusieurs marchés", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elle garantit automatiquement les profits de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle supprime tout risque pays", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle fixe les ventes futures de l'entreprise", 'is_correct' => false],
                        ],
                        'explanation' => "Les banques peuvent faciliter les paiements internationaux, proposer des financements et aider à gérer les expositions en devises.",
                    ],
                    [
                        'question' => "Une entreprise canadienne investit 2 millions CAD dans une filiale en Afrique du Nord. Quelle question financière est pertinente dès le départ ?",
                        'choices' => [
                            ['choice_text' => "Comment seront financés le projet, les besoins de trésorerie et les éventuels flux de retour ?", 'is_correct' => true],
                            ['choice_text' => "Quelle police doit porter le directeur général ?", 'is_correct' => false],
                            ['choice_text' => "Quel jour aura lieu la fête d'ouverture uniquement ?", 'is_correct' => false],
                            ['choice_text' => "Quel sera le nom de chaque salle ?", 'is_correct' => false],
                        ],
                        'explanation' => "Un investissement international implique un besoin initial de fonds, des besoins de trésorerie futurs et éventuellement des flux de dividendes ou autres remontées de fonds.",
                    ],
                    [
                        'question' => "Un investisseur détient des actions étrangères et constate que son portefeuille baisse en dirhams, alors que les cours locaux sont presque stables. Quelle explication est plausible ?",
                        'choices' => [
                            ['choice_text' => "La devise étrangère s'est dépréciée par rapport au dirham", 'is_correct' => true],
                            ['choice_text' => "Les marchés étrangers ont tous fermé", 'is_correct' => false],
                            ['choice_text' => "Les actions ne sont plus des actifs financiers", 'is_correct' => false],
                            ['choice_text' => "Les dividendes ont nécessairement doublé", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur d'un portefeuille international dans la monnaie domestique dépend du prix local des actifs et du taux de change. Un mouvement de change défavorable peut donc réduire la valeur convertie.",
                    ],
                ],
            ],
            [
                'title' => "Balance des paiements : premiers repères",
                'description' => "Découvrir la logique de la balance des paiements et distinguer les principaux types de transactions entre une économie et le reste du monde.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "À quoi sert principalement la balance des paiements ?",
                        'choices' => [
                            ['choice_text' => "À retracer les transactions économiques entre les résidents d'un pays et le reste du monde sur une période", 'is_correct' => true],
                            ['choice_text' => "À mesurer uniquement les ventes réalisées dans les magasins", 'is_correct' => false],
                            ['choice_text' => "À fixer directement tous les taux d'intérêt bancaires", 'is_correct' => false],
                            ['choice_text' => "À calculer le salaire moyen national", 'is_correct' => false],
                        ],
                        'explanation' => "La balance des paiements regroupe les transactions économiques d'une économie avec l'extérieur sur une période donnée, notamment les échanges, revenus et flux financiers.",
                    ],
                    [
                        'question' => "Les exportations de marchandises d'un pays sont-elles prises en compte dans sa balance des paiements ?",
                        'choices' => [
                            ['choice_text' => "Oui, dans les échanges de biens", 'is_correct' => true],
                            ['choice_text' => "Non, jamais", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement si elles sont réglées en espèces", 'is_correct' => false],
                            ['choice_text' => "Non, car seules les opérations bancaires y figurent", 'is_correct' => false],
                        ],
                        'explanation' => "Les exportations et importations de biens font partie des transactions retracées dans la balance des paiements.",
                    ],
                    [
                        'question' => "Un touriste étranger dépense 2 000 EUR dans des hôtels et restaurants au Maroc. Dans la logique de la balance des paiements, cela correspond à un revenu provenant de l'extérieur pour les services concernés.",
                        'choices' => [
                            ['choice_text' => "Vrai", 'is_correct' => true],
                            ['choice_text' => "Faux", 'is_correct' => false],
                            ['choice_text' => "Uniquement si le touriste paie en dollars", 'is_correct' => false],
                            ['choice_text' => "Uniquement si l'hôtel appartient à l'État", 'is_correct' => false],
                        ],
                        'explanation' => "Les dépenses des visiteurs étrangers au Maroc constituent des exportations de services du point de vue de l'économie marocaine.",
                    ],
                    [
                        'question' => "Une entreprise marocaine verse des intérêts à un prêteur étranger. Quelle nature de flux est concernée ?",
                        'choices' => [
                            ['choice_text' => "Un flux de revenu lié à un investissement ou un financement international", 'is_correct' => true],
                            ['choice_text' => "Une exportation de biens", 'is_correct' => false],
                            ['choice_text' => "Une dépense touristique", 'is_correct' => false],
                            ['choice_text' => "Une opération sans relation avec l'extérieur", 'is_correct' => false],
                        ],
                        'explanation' => "Le paiement d'intérêts à un non-résident constitue un flux de revenus vers l'étranger, lié ici au financement international.",
                    ],
                    [
                        'question' => "Pourquoi dit-on souvent que la balance des paiements est construite avec une logique comptable qui relie différentes catégories de flux ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une transaction internationale implique des écritures qui s'inscrivent dans des comptes liés", 'is_correct' => true],
                            ['choice_text' => "Parce que chaque transaction doit être enregistrée deux fois au même endroit", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle ne contient aucune donnée financière", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle mesure uniquement les dépenses des ménages", 'is_correct' => false],
                        ],
                        'explanation' => "La balance des paiements suit une logique comptable : les transactions donnent lieu à des enregistrements qui relient les différentes composantes des comptes extérieurs.",
                    ],
                    [
                        'question' => "Une entreprise marocaine achète une usine en Allemagne. Quelle catégorie est la plus directement concernée ?",
                        'choices' => [
                            ['choice_text' => "Les flux liés à l'investissement direct à l'étranger", 'is_correct' => true],
                            ['choice_text' => "Les dépenses publiques intérieures uniquement", 'is_correct' => false],
                            ['choice_text' => "La consommation touristique", 'is_correct' => false],
                            ['choice_text' => "Le commerce de détail domestique", 'is_correct' => false],
                        ],
                        'explanation' => "L'acquisition d'une usine à l'étranger correspond à un investissement direct, car l'entreprise acquiert un actif productif et une présence économique dans un autre pays.",
                    ],
                    [
                        'question' => "Une hausse des exportations de services peut contribuer à améliorer le solde extérieur d'un pays, toutes choses égales par ailleurs.",
                        'choices' => [
                            ['choice_text' => "Vrai", 'is_correct' => true],
                            ['choice_text' => "Faux", 'is_correct' => false],
                            ['choice_text' => "Vrai uniquement en période d'inflation", 'is_correct' => false],
                            ['choice_text' => "Faux, car les services ne sont jamais internationaux", 'is_correct' => false],
                        ],
                        'explanation' => "Des exportations supplémentaires de services apportent des recettes provenant de l'extérieur. Leur effet sur le solde dépend toutefois des autres flux qui évoluent en parallèle.",
                    ],
                    [
                        'question' => "Quel exemple illustre le mieux un flux financier international plutôt qu'un flux commercial de biens ?",
                        'choices' => [
                            ['choice_text' => "Un investisseur achète des obligations émises par une société étrangère", 'is_correct' => true],
                            ['choice_text' => "Une entreprise exporte du mobilier", 'is_correct' => false],
                            ['choice_text' => "Un pays vend du blé à un autre pays", 'is_correct' => false],
                            ['choice_text' => "Une société expédie des pièces détachées", 'is_correct' => false],
                        ],
                        'explanation' => "L'achat d'une obligation constitue un investissement financier. Les autres exemples décrivent des échanges de biens.",
                    ],
                    [
                        'question' => "Une économie importe durablement plus de biens qu'elle n'en exporte. Que faut-il retenir avant de tirer une conclusion sur sa situation financière extérieure ?",
                        'choices' => [
                            ['choice_text' => "Il faut aussi examiner les services, revenus et flux financiers", 'is_correct' => true],
                            ['choice_text' => "On peut conclure immédiatement que le pays est en faillite", 'is_correct' => false],
                            ['choice_text' => "Il faut ignorer les mouvements de capitaux", 'is_correct' => false],
                            ['choice_text' => "Le déficit de biens signifie toujours absence de réserves", 'is_correct' => false],
                        ],
                        'explanation' => "La position extérieure ne se résume pas au commerce de biens. Les services, revenus, transferts et opérations financières peuvent compenser ou amplifier cette situation.",
                    ],
                    [
                        'question' => "Une entreprise reçoit des dividendes d'une filiale située à l'étranger. Pourquoi ce flux intéresse-t-il l'analyse internationale ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il représente un revenu provenant d'un actif détenu à l'étranger", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il s'agit automatiquement d'une importation de marchandises", 'is_correct' => false],
                            ['choice_text' => "Parce que les dividendes ne sont jamais liés aux investissements", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il modifie seulement la météo financière", 'is_correct' => false],
                        ],
                        'explanation' => "Les dividendes versés depuis une filiale étrangère constituent un revenu pour l'investisseur résident et font partie des flux économiques avec l'étranger.",
                    ],
                    [
                        'question' => "Pourquoi un analyste ne devrait-il pas confondre balance commerciale et balance des paiements ?",
                        'choices' => [
                            ['choice_text' => "La balance commerciale se concentre sur les biens, alors que la balance des paiements couvre un ensemble beaucoup plus large de transactions", 'is_correct' => true],
                            ['choice_text' => "La balance commerciale mesure uniquement les taux d'intérêt", 'is_correct' => false],
                            ['choice_text' => "La balance des paiements ne contient aucun flux financier", 'is_correct' => false],
                            ['choice_text' => "Les deux expressions désignent toujours exactement le même indicateur", 'is_correct' => false],
                        ],
                        'explanation' => "La balance commerciale porte sur les exportations et importations de biens. La balance des paiements englobe également les services, revenus et nombreux flux financiers.",
                    ],
                ],
            ],
            [
                'title' => "Investissement international et risque pays",
                'description' => "Identifier les principales questions financières avant de placer des capitaux dans un pays étranger.",
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une entreprise envisage d'acheter 40 % d'une société brésilienne pour développer une activité locale. Quel élément mérite une attention particulière avant la décision ?",
                        'choices' => [
                            ['choice_text' => "La stabilité du cadre économique et politique du pays", 'is_correct' => true],
                            ['choice_text' => "Uniquement la couleur du bâtiment", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nombre d'emails envoyés par la filiale", 'is_correct' => false],
                            ['choice_text' => "Le fait que le pays utilise une seule langue mondiale", 'is_correct' => false],
                        ],
                        'explanation' => "Un investissement étranger peut être affecté par les conditions politiques, économiques, réglementaires et financières du pays d'accueil.",
                    ],
                    [
                        'question' => "Le risque qu'un gouvernement impose des restrictions qui compliquent le rapatriement des bénéfices d'une filiale étrangère relève principalement de quel type de risque ?",
                        'choices' => [
                            ['choice_text' => "Du risque pays", 'is_correct' => true],
                            ['choice_text' => "Du risque de rupture de stock", 'is_correct' => false],
                            ['choice_text' => "Du risque purement informatique individuel", 'is_correct' => false],
                            ['choice_text' => "Du risque de défaut d'un client domestique", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque pays couvre notamment les situations où les décisions ou conditions d'un État peuvent affecter les opérations et les flux financiers des investisseurs.",
                    ],
                    [
                        'question' => "Un investisseur peut-il exiger une rentabilité plus élevée pour un projet situé dans un environnement jugé plus risqué ?",
                        'choices' => [
                            ['choice_text' => "Oui, une prime de risque peut être demandée", 'is_correct' => true],
                            ['choice_text' => "Non, le niveau de risque ne compte jamais", 'is_correct' => false],
                            ['choice_text' => "Oui, mais uniquement pour les entreprises publiques", 'is_correct' => false],
                            ['choice_text' => "Non, car tous les projets ont par définition le même risque", 'is_correct' => false],
                        ],
                        'explanation' => "Plus le risque perçu augmente, plus les investisseurs peuvent demander une rémunération supplémentaire pour accepter cette incertitude.",
                    ],
                    [
                        'question' => "Une société obtient un contrat très rentable à l'étranger, mais le pays connaît de fréquentes interruptions de l'activité bancaire. Quel risque concret cela peut-il créer ?",
                        'choices' => [
                            ['choice_text' => "Des difficultés à effectuer ou recevoir les paiements", 'is_correct' => true],
                            ['choice_text' => "Une hausse automatique du chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "La disparition du besoin de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Une baisse certaine des coûts logistiques", 'is_correct' => false],
                        ],
                        'explanation' => "Même un contrat rentable peut devenir difficile à exécuter si le système financier local perturbe les règlements, les transferts ou l'accès à la liquidité.",
                    ],
                    [
                        'question' => "Quel indicateur est utile pour apprécier la situation d'un emprunteur souverain ?",
                        'choices' => [
                            ['choice_text' => "Le niveau et la structure de sa dette publique", 'is_correct' => true],
                            ['choice_text' => "Le nombre de restaurants dans la capitale", 'is_correct' => false],
                            ['choice_text' => "La taille des bâtiments administratifs uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de visiteurs sur un site web", 'is_correct' => false],
                        ],
                        'explanation' => "L'endettement public, ses échéances et sa capacité de remboursement sont des éléments essentiels dans l'analyse du risque souverain.",
                    ],
                    [
                        'question' => "Une filiale située dans un pays étranger réalise des bénéfices en monnaie locale. Pourquoi le siège peut-il recevoir un montant différent après conversion ?",
                        'choices' => [
                            ['choice_text' => "Parce que le taux de change entre la monnaie locale et la monnaie du siège peut varier", 'is_correct' => true],
                            ['choice_text' => "Parce que les bénéfices ne sont jamais convertibles", 'is_correct' => false],
                            ['choice_text' => "Parce que les résultats deviennent automatiquement nuls", 'is_correct' => false],
                            ['choice_text' => "Parce que la filiale ne peut jamais verser de dividendes", 'is_correct' => false],
                        ],
                        'explanation' => "Le bénéfice est généré dans une monnaie locale. Lorsqu'il est converti dans la monnaie du groupe, la valeur dépend du taux de change au moment considéré.",
                    ],
                    [
                        'question' => "Une entreprise hésite entre deux pays présentant une rentabilité attendue similaire. Dans l'un des deux, les règles fiscales et douanières sont beaucoup plus imprévisibles. Quel raisonnement est le plus pertinent ?",
                        'choices' => [
                            ['choice_text' => "Prendre en compte cette incertitude supplémentaire dans l'évaluation du projet", 'is_correct' => true],
                            ['choice_text' => "L'ignorer car elle n'a aucun effet sur les flux", 'is_correct' => false],
                            ['choice_text' => "Choisir automatiquement le pays le plus grand", 'is_correct' => false],
                            ['choice_text' => "Comparer seulement les noms des monnaies", 'is_correct' => false],
                        ],
                        'explanation' => "L'incertitude réglementaire ou fiscale peut affecter les flux futurs et leur risque. Elle doit donc apparaître dans l'analyse économique du projet.",
                    ],
                    [
                        'question' => "Pourquoi distingue-t-on parfois le risque de change du risque pays ?",
                        'choices' => [
                            ['choice_text' => "Parce que le premier vient du mouvement des devises, tandis que le second couvre un ensemble plus large de risques liés au pays", 'is_correct' => true],
                            ['choice_text' => "Parce que le risque pays concerne uniquement la météo", 'is_correct' => false],
                            ['choice_text' => "Parce que le risque de change n'est jamais financier", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils sont toujours exactement identiques", 'is_correct' => false],
                        ],
                        'explanation' => "Une devise peut évoluer sans changement politique majeur, alors que le risque pays inclut aussi des dimensions politiques, juridiques, économiques et parfois de transfert.",
                    ],
                    [
                        'question' => "Un investisseur constate qu'un projet étranger est très rentable dans son scénario central, mais qu'une légère baisse des ventes suffit à rendre le projet déficitaire. Que révèle surtout cette observation ?",
                        'choices' => [
                            ['choice_text' => "Une forte sensibilité du projet aux hypothèses retenues", 'is_correct' => true],
                            ['choice_text' => "Que le projet est automatiquement sans risque", 'is_correct' => false],
                            ['choice_text' => "Que le pays d'accueil fixe toujours les bénéfices", 'is_correct' => false],
                            ['choice_text' => "Que le taux de change n'a aucune importance", 'is_correct' => false],
                        ],
                        'explanation' => "Une faible modification des hypothèses qui change fortement le résultat signale une sensibilité importante. L'investisseur doit alors étudier plusieurs scénarios.",
                    ],
                    [
                        'question' => "Avant de financer une filiale étrangère, pourquoi examiner la possibilité de transférer légalement des fonds vers ou depuis le pays ?",
                        'choices' => [
                            ['choice_text' => "Parce que les restrictions de transfert peuvent affecter la disponibilité des liquidités et le rapatriement des profits", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les pays interdisent les transferts internationaux", 'is_correct' => false],
                            ['choice_text' => "Parce que les flux internes n'ont jamais besoin de banques", 'is_correct' => false],
                            ['choice_text' => "Parce que la rentabilité comptable devient automatiquement nulle", 'is_correct' => false],
                        ],
                        'explanation' => "La capacité à transférer les fonds est importante pour financer les opérations, rembourser certains engagements ou rapatrier des dividendes.",
                    ],
                ],
            ],
            [
                'title' => "Financement international des entreprises",
                'description' => "Choisir et comprendre les grandes options de financement lorsqu'une entreprise se développe sur plusieurs marchés.",
                'duration' => 28,
                'passing_score' => 61,
                'questions' => [
                    [
                        'question' => "Une entreprise européenne développe une filiale en Afrique et hésite entre un prêt en euros et un prêt en monnaie locale. Quel point mérite une comparaison directe ?",
                        'choices' => [
                            ['choice_text' => "Le coût du financement et le risque de change associé à chaque option", 'is_correct' => true],
                            ['choice_text' => "Uniquement la couleur du contrat", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nombre de pages du prêt", 'is_correct' => false],
                            ['choice_text' => "Aucun, car les deux financements sont économiquement identiques", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux d'intérêt ne suffit pas : il faut aussi regarder la devise de la dette par rapport à la devise des revenus qui serviront à la rembourser.",
                    ],
                    [
                        'question' => "Un emprunt international est libellé dans une devise différente de celle des recettes de l'emprunteur. Quel risque principal apparaît ?",
                        'choices' => [
                            ['choice_text' => "Le risque que la dette coûte davantage dans la monnaie des recettes", 'is_correct' => true],
                            ['choice_text' => "Le risque que l'entreprise ne puisse plus faire de comptabilité", 'is_correct' => false],
                            ['choice_text' => "Le risque que les ventes deviennent automatiquement nulles", 'is_correct' => false],
                            ['choice_text' => "Le risque que le contrat perde sa date", 'is_correct' => false],
                        ],
                        'explanation' => "Une variation défavorable du taux de change peut augmenter, en monnaie domestique, le coût du service de la dette contractée en devise étrangère.",
                    ],
                    [
                        'question' => "Une multinationale souhaite réduire sa dépendance à une seule banque pour ses financements. Quelle approche est cohérente ?",
                        'choices' => [
                            ['choice_text' => "Diversifier ses sources de financement et ses relations bancaires", 'is_correct' => true],
                            ['choice_text' => "Supprimer toutes les relations avec les banques", 'is_correct' => false],
                            ['choice_text' => "Emprunter uniquement auprès d'une banque étrangère inconnue", 'is_correct' => false],
                            ['choice_text' => "Ne plus suivre les coûts de financement", 'is_correct' => false],
                        ],
                        'explanation' => "La diversification des sources peut réduire une dépendance excessive à un seul prêteur ou à un seul canal de financement.",
                    ],
                    [
                        'question' => "Une entreprise finance une filiale étrangère avec des bénéfices déjà accumulés par le groupe. Quel avantage peut présenter ce financement interne ?",
                        'choices' => [
                            ['choice_text' => "Il peut limiter le recours à une dette externe pour financer le projet", 'is_correct' => true],
                            ['choice_text' => "Il garantit automatiquement une rentabilité élevée", 'is_correct' => false],
                            ['choice_text' => "Il supprime les risques du pays d'accueil", 'is_correct' => false],
                            ['choice_text' => "Il empêche toute remontée de dividendes", 'is_correct' => false],
                        ],
                        'explanation' => "Utiliser des ressources internes peut réduire le besoin de financement externe. Cela ne supprime toutefois pas les autres risques du projet.",
                    ],
                    [
                        'question' => "Pour une entreprise ayant des recettes régulières en dollars et une dette future également en dollars, quel principe financier peut être intéressant ?",
                        'choices' => [
                            ['choice_text' => "Faire coïncider autant que possible les devises des recettes et des paiements", 'is_correct' => true],
                            ['choice_text' => "Convertir toutes les recettes en une troisième devise sans raison", 'is_correct' => false],
                            ['choice_text' => "Éviter toute prévision de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Choisir systématiquement la devise dont le nom est le plus court", 'is_correct' => false],
                        ],
                        'explanation' => "Faire correspondre les devises des encaissements et décaissements peut réduire l'exposition nette au change et simplifier la gestion de trésorerie.",
                    ],
                    [
                        'question' => "Une entreprise internationale voit son coût de financement augmenter après une dégradation de sa situation financière. Quelle conséquence est la plus logique ?",
                        'choices' => [
                            ['choice_text' => "Les futurs projets peuvent devenir plus difficiles à financer ou moins rentables", 'is_correct' => true],
                            ['choice_text' => "Tous les investissements deviennent automatiquement gratuits", 'is_correct' => false],
                            ['choice_text' => "Les taux de change cessent d'exister", 'is_correct' => false],
                            ['choice_text' => "Les bénéfices passés disparaissent du bilan", 'is_correct' => false],
                        ],
                        'explanation' => "Un financement plus coûteux augmente les charges financières et peut réduire l'attractivité des nouveaux investissements.",
                    ],
                    [
                        'question' => "Une société peut-elle combiner plusieurs sources de financement pour un même projet international ?",
                        'choices' => [
                            ['choice_text' => "Oui, elle peut utiliser par exemple des fonds propres, de la dette bancaire et d'autres instruments", 'is_correct' => true],
                            ['choice_text' => "Non, une entreprise ne peut légalement avoir qu'une seule source", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement pour des projets domestiques", 'is_correct' => false],
                            ['choice_text' => "Non, car les marchés internationaux interdisent le financement mixte", 'is_correct' => false],
                        ],
                        'explanation' => "Les entreprises structurent souvent leur financement en combinant plusieurs sources afin d'équilibrer coût, flexibilité et niveau de risque.",
                    ],
                    [
                        'question' => "Un prêt international est proposé à taux variable. Quel élément supplémentaire doit être surveillé par l'emprunteur ?",
                        'choices' => [
                            ['choice_text' => "L'évolution du taux de référence utilisé pour calculer le coût de la dette", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nombre de produits vendus", 'is_correct' => false],
                            ['choice_text' => "La couleur du passeport du dirigeant", 'is_correct' => false],
                            ['choice_text' => "Le nombre de bureaux dans le siège", 'is_correct' => false],
                        ],
                        'explanation' => "Avec un taux variable, le coût d'intérêt peut évoluer lorsque le taux de référence change. La trésorerie et le budget doivent donc intégrer cette incertitude.",
                    ],
                    [
                        'question' => "Une entreprise veut accélérer son implantation sur un nouveau marché, mais ses ressources internes sont limitées. Pourquoi un financement externe peut-il être envisagé ?",
                        'choices' => [
                            ['choice_text' => "Pour mobiliser rapidement des ressources supplémentaires tout en évaluant le coût et le risque de la dette", 'is_correct' => true],
                            ['choice_text' => "Pour éviter toute analyse financière", 'is_correct' => false],
                            ['choice_text' => "Pour garantir un retour sur investissement dès le premier jour", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les besoins de trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Le financement externe peut accélérer un projet, mais il ajoute des engagements financiers. Il doit donc être comparé au rendement attendu et à la capacité de remboursement.",
                    ],
                    [
                        'question' => "Dans un financement international, pourquoi les conditions du pays prêteur et du pays emprunteur peuvent-elles toutes deux compter ?",
                        'choices' => [
                            ['choice_text' => "Parce que les taux, la réglementation, les marchés et les risques peuvent différer entre les deux pays", 'is_correct' => true],
                            ['choice_text' => "Parce que les contrats internationaux ne tiennent jamais compte des lois", 'is_correct' => false],
                            ['choice_text' => "Parce que seuls les coûts de transport déterminent le taux du prêt", 'is_correct' => false],
                            ['choice_text' => "Parce que la finance internationale ignore les marchés domestiques", 'is_correct' => false],
                        ],
                        'explanation' => "Un financement transfrontalier dépend de plusieurs environnements économiques et réglementaires. L'analyse doit donc dépasser le seul taux affiché.",
                    ],
                ],
            ],
            [
                'title' => "Entreprises multinationales et décisions financières",
                'description' => "Analyser les choix simples d'une entreprise présente dans plusieurs pays : prix, trésorerie, investissement et remontée des bénéfices.",
                'duration' => 30,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Une multinationale vend un produit en France, au Maroc et au Mexique. Pourquoi le directeur financier ne peut-il pas analyser seulement le chiffre d'affaires total en une seule monnaie ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il doit aussi comprendre les marges, les monnaies et les conditions propres à chaque marché", 'is_correct' => true],
                            ['choice_text' => "Parce que les chiffres en monnaie commune sont toujours faux", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une multinationale ne peut pas consolider ses comptes", 'is_correct' => false],
                            ['choice_text' => "Parce que le chiffre d'affaires n'a aucun intérêt", 'is_correct' => false],
                        ],
                        'explanation' => "La consolidation donne une vue globale, mais la décision financière exige aussi une lecture par marché, par devise et par niveau de risque.",
                    ],
                    [
                        'question' => "Une filiale étrangère dispose d'un excédent de trésorerie temporaire. Quelle question du siège est naturelle ?",
                        'choices' => [
                            ['choice_text' => "Faut-il conserver la trésorerie localement ou la centraliser, compte tenu des besoins et contraintes ?", 'is_correct' => true],
                            ['choice_text' => "Faut-il supprimer les comptes de la filiale ?", 'is_correct' => false],
                            ['choice_text' => "Faut-il convertir immédiatement tout l'argent en pièces métalliques ?", 'is_correct' => false],
                            ['choice_text' => "Faut-il ignorer l'excédent car il ne représente aucune ressource", 'is_correct' => false],
                        ],
                        'explanation' => "Une bonne gestion de trésorerie internationale cherche à placer ou centraliser les excédents tout en respectant les besoins opérationnels et les contraintes locales.",
                    ],
                    [
                        'question' => "Une entreprise constate qu'une filiale étrangère affiche une belle croissance des ventes mais génère peu de cash. Quelle conclusion faut-il éviter ?",
                        'choices' => [
                            ['choice_text' => "Confondre automatiquement croissance du chiffre d'affaires et amélioration de la trésorerie", 'is_correct' => true],
                            ['choice_text' => "Regarder le besoin en fonds de roulement", 'is_correct' => false],
                            ['choice_text' => "Analyser les délais de paiement des clients", 'is_correct' => false],
                            ['choice_text' => "Examiner les investissements réalisés", 'is_correct' => false],
                        ],
                        'explanation' => "Une activité en croissance peut consommer du cash si les stocks, créances ou investissements augmentent rapidement. Le chiffre d'affaires seul ne suffit pas.",
                    ],
                    [
                        'question' => "Une société internationale paie un fournisseur américain en dollars tous les mois. Les paiements sont réguliers et prévisibles. Quel avantage peut apporter une politique de couverture bien structurée ?",
                        'choices' => [
                            ['choice_text' => "Une meilleure visibilité sur le coût futur en monnaie domestique", 'is_correct' => true],
                            ['choice_text' => "Une garantie de payer moins que le taux du marché dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "La suppression des factures fournisseurs", 'is_correct' => false],
                            ['choice_text' => "La disparition du besoin de trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "La couverture vise d'abord à réduire l'incertitude. Elle ne garantit pas systématiquement un gain par rapport au marché spot futur.",
                    ],
                    [
                        'question' => "Une filiale réalise des bénéfices, mais conserve presque tout pour financer son expansion. Du point de vue du groupe, que faut-il comprendre ?",
                        'choices' => [
                            ['choice_text' => "Les bénéfices peuvent rester investis localement au lieu d'être versés immédiatement au siège", 'is_correct' => true],
                            ['choice_text' => "Les bénéfices sont automatiquement perdus", 'is_correct' => false],
                            ['choice_text' => "Le groupe ne peut plus jamais recevoir de cash", 'is_correct' => false],
                            ['choice_text' => "Une filiale ne peut pas avoir de bénéfices et investir en même temps", 'is_correct' => false],
                        ],
                        'explanation' => "Une filiale peut choisir de réinvestir ses bénéfices afin de soutenir sa croissance. Le groupe arbitre alors entre réinvestissement local et remontée de liquidités.",
                    ],
                    [
                        'question' => "Pourquoi un groupe international surveille-t-il les transactions entre ses propres filiales situées dans différents pays ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elles peuvent influencer la trésorerie, les résultats, les devises et la conformité du groupe", 'is_correct' => true],
                            ['choice_text' => "Parce que les filiales ne doivent jamais se facturer", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les opérations intragroupe sont forcément illégales", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elles ne peuvent jamais être enregistrées en comptabilité", 'is_correct' => false],
                        ],
                        'explanation' => "Les flux intragroupe ont des effets sur les résultats, la trésorerie, les devises et les obligations de conformité. Ils nécessitent donc une gouvernance rigoureuse.",
                    ],
                    [
                        'question' => "Une entreprise veut augmenter ses ventes à l'étranger en accordant des délais de paiement très longs. Quel risque financier peut augmenter ?",
                        'choices' => [
                            ['choice_text' => "Le besoin de financement du cycle d'exploitation et le risque d'impayé", 'is_correct' => true],
                            ['choice_text' => "La disparition du chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Le coût des immobilisations devient toujours nul", 'is_correct' => false],
                            ['choice_text' => "Le risque de change disparaît forcément", 'is_correct' => false],
                        ],
                        'explanation' => "Des délais de paiement plus longs peuvent retarder les encaissements et augmenter les besoins de trésorerie. Le risque de crédit peut également devenir plus important.",
                    ],
                    [
                        'question' => "Une filiale étrangère achète ses matières premières dans sa monnaie locale mais vend surtout en euros. Que faut-il surveiller ?",
                        'choices' => [
                            ['choice_text' => "L'effet des variations EUR/devise locale sur la marge", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nombre de fournisseurs", 'is_correct' => false],
                            ['choice_text' => "Uniquement les ventes en volume physique", 'is_correct' => false],
                            ['choice_text' => "Aucun effet, puisque les achats et ventes sont comptabilisés", 'is_correct' => false],
                        ],
                        'explanation' => "Les coûts sont supportés dans une devise et les recettes dans une autre. Les mouvements de change peuvent donc modifier la marge même si les prix locaux restent stables.",
                    ],
                    [
                        'question' => "Un groupe hésite entre augmenter les prix dans un marché étranger et conserver ses prix actuels. Quelle information financière est particulièrement utile pour décider ?",
                        'choices' => [
                            ['choice_text' => "L'élasticité de la demande, les coûts, la concurrence et la marge attendue", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nombre d'employés du siège", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nom de la monnaie locale", 'is_correct' => false],
                            ['choice_text' => "Uniquement la date de création de la filiale", 'is_correct' => false],
                        ],
                        'explanation' => "Une décision de prix internationale doit relier comportement des clients, structure de coûts et rentabilité. Le taux de change peut également influencer le résultat final.",
                    ],
                    [
                        'question' => "Quelle situation montre le mieux une mauvaise gestion du risque de change ?",
                        'choices' => [
                            ['choice_text' => "Une entreprise ignore pendant des mois une dette en devise alors que ses revenus sont dans une autre devise", 'is_correct' => true],
                            ['choice_text' => "Une entreprise mesure régulièrement ses expositions", 'is_correct' => false],
                            ['choice_text' => "Une entreprise compare plusieurs scénarios de change", 'is_correct' => false],
                            ['choice_text' => "Une entreprise rapproche ses flux en devises", 'is_correct' => false],
                        ],
                        'explanation' => "Ignorer une exposition identifiée peut transformer une variation de change en surprise financière importante. La surveillance et la couverture éventuelle sont des outils de gestion.",
                    ],
                ],
            ],
            [
                'title' => "Marchés de capitaux internationaux",
                'description' => "Découvrir les principales formes d'accès aux marchés de capitaux étrangers et les questions qu'elles soulèvent pour une entreprise.",
                'duration' => 25,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Pourquoi une entreprise peut-elle chercher à lever des fonds sur un marché étranger plutôt que sur son seul marché domestique ?",
                        'choices' => [
                            ['choice_text' => "Pour accéder à une base plus large d'investisseurs ou à des conditions de financement différentes", 'is_correct' => true],
                            ['choice_text' => "Pour éviter toute obligation de remboursement", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les fluctuations de marché", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une levée domestique est toujours interdite", 'is_correct' => false],
                        ],
                        'explanation' => "L'internationalisation du financement peut élargir le bassin d'investisseurs et offrir des alternatives de coût, de maturité ou de devise.",
                    ],
                    [
                        'question' => "Une entreprise émet une obligation en dollars alors que ses recettes sont majoritairement en euros. Quel risque supplémentaire apparaît ?",
                        'choices' => [
                            ['choice_text' => "Une exposition au taux de change entre le dollar et l'euro", 'is_correct' => true],
                            ['choice_text' => "Une disparition du risque de taux", 'is_correct' => false],
                            ['choice_text' => "Une baisse certaine des ventes", 'is_correct' => false],
                            ['choice_text' => "Aucun risque supplémentaire", 'is_correct' => false],
                        ],
                        'explanation' => "Les intérêts et le principal seront servis en dollars, alors que les recettes sont en euros. La conversion peut donc faire varier le coût réel de la dette.",
                    ],
                    [
                        'question' => "Un investisseur achète une obligation d'une entreprise étrangère. Outre le risque de marché, quel élément spécifique doit-il considérer ?",
                        'choices' => [
                            ['choice_text' => "Le risque lié au pays et à la devise de l'investissement", 'is_correct' => true],
                            ['choice_text' => "Uniquement la météo locale", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nombre de concurrents domestiques", 'is_correct' => false],
                            ['choice_text' => "Aucune information sur l'émetteur", 'is_correct' => false],
                        ],
                        'explanation' => "L'investissement transfrontalier peut être affecté par la solvabilité de l'émetteur, le contexte du pays et les mouvements de change.",
                    ],
                    [
                        'question' => "Une entreprise emprunte à un taux fixe sur un marché étranger. Quel avantage apporte principalement le taux fixe ?",
                        'choices' => [
                            ['choice_text' => "Une meilleure visibilité sur les intérêts à payer", 'is_correct' => true],
                            ['choice_text' => "L'absence de toute possibilité de défaut", 'is_correct' => false],
                            ['choice_text' => "La suppression du risque de change", 'is_correct' => false],
                            ['choice_text' => "Une garantie de remboursement anticipé gratuit", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux fixe stabilise le montant des intérêts selon les modalités du contrat. Il ne supprime ni le risque de crédit, ni, le cas échéant, le risque de change.",
                    ],
                    [
                        'question' => "Une entreprise compare deux obligations du même émetteur, l'une en EUR et l'autre en USD. Pourquoi ne faut-il pas regarder uniquement le coupon ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il faut considérer le prix, la maturité, le rendement et la devise", 'is_correct' => true],
                            ['choice_text' => "Parce que le coupon n'a jamais d'importance", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une obligation ne génère aucun flux", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les obligations ont le même rendement", 'is_correct' => false],
                        ],
                        'explanation' => "Le coupon est un élément du rendement, mais le prix payé, la maturité et les caractéristiques de la devise influencent également le résultat de l'investisseur.",
                    ],
                    [
                        'question' => "Une société décide d'émettre des obligations à l'étranger afin de financer une acquisition internationale. Quel risque doit-elle suivre après l'émission ?",
                        'choices' => [
                            ['choice_text' => "Le respect des échéances, le coût de la dette et les éventuelles expositions de change ou de taux", 'is_correct' => true],
                            ['choice_text' => "Uniquement la publicité autour de l'émission", 'is_correct' => false],
                            ['choice_text' => "Seulement le nombre de nouveaux clients", 'is_correct' => false],
                            ['choice_text' => "Aucun, car le risque s'arrête après la levée de fonds", 'is_correct' => false],
                        ],
                        'explanation' => "Après l'émission, la dette doit être servie. Les coûts d'intérêt, la maturité, le change et le refinancement potentiel restent donc importants.",
                    ],
                    [
                        'question' => "Que cherche principalement un investisseur lorsqu'il compare le rendement d'une obligation étrangère à son niveau de risque ?",
                        'choices' => [
                            ['choice_text' => "À apprécier si la rémunération potentielle est cohérente avec les risques supportés", 'is_correct' => true],
                            ['choice_text' => "À garantir un rendement positif", 'is_correct' => false],
                            ['choice_text' => "À éviter toute diversification", 'is_correct' => false],
                            ['choice_text' => "À remplacer l'analyse de l'émetteur", 'is_correct' => false],
                        ],
                        'explanation' => "Le rendement demandé doit être mis en regard des risques de crédit, de taux, de change et du contexte du marché concerné.",
                    ],
                    [
                        'question' => "Une entreprise a besoin de dollars pour construire une usine aux États-Unis, mais sa trésorerie disponible est en euros. Quelle solution est naturelle ?",
                        'choices' => [
                            ['choice_text' => "Convertir ou financer le besoin en dollars, en tenant compte du coût et du risque de change", 'is_correct' => true],
                            ['choice_text' => "Ignorer la devise du projet", 'is_correct' => false],
                            ['choice_text' => "Payer directement en euros sans conversion ni accord", 'is_correct' => false],
                            ['choice_text' => "Supprimer le projet pour éviter toute analyse", 'is_correct' => false],
                        ],
                        'explanation' => "Le projet nécessite des dépenses en USD. L'entreprise doit donc organiser sa conversion ou son financement en tenant compte du risque de change et du coût associé.",
                    ],
                    [
                        'question' => "Pourquoi la liquidité d'un marché de capitaux intéresse-t-elle un investisseur ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'un marché plus liquide facilite généralement l'achat et la vente des titres", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un marché liquide garantit un gain", 'is_correct' => false],
                            ['choice_text' => "Parce que la liquidité supprime le risque de crédit", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une obligation liquide n'a plus de maturité", 'is_correct' => false],
                        ],
                        'explanation' => "La liquidité facilite les transactions et peut réduire le coût de sortie d'une position. Elle ne garantit toutefois pas la performance du placement.",
                    ],
                ],
            ],
            [
                'title' => "Exposition de change dans les opérations internationales",
                'description' => "Repérer les expositions de change les plus courantes et comprendre leur effet sur les recettes, les coûts et les dettes.",
                'duration' => 27,
                'passing_score' => 63,
                'questions' => [
                    [
                        'question' => "Une entreprise facture un client japonais en JPY et enregistre ses comptes en EUR. Si le yen se déprécie avant le paiement, quel effet peut apparaître ?",
                        'choices' => [
                            ['choice_text' => "La valeur de la créance convertie en euros peut diminuer", 'is_correct' => true],
                            ['choice_text' => "La valeur de la créance en euros augmente obligatoirement", 'is_correct' => false],
                            ['choice_text' => "La créance disparaît", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires devient juridiquement nul", 'is_correct' => false],
                        ],
                        'explanation' => "Une dépréciation du yen par rapport à l'euro réduit la valeur en euros d'un montant fixe de JPY, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Une entreprise a une dette en USD et encaisse surtout en USD. Pourquoi cette situation peut-elle réduire une partie de son exposition nette au change ?",
                        'choices' => [
                            ['choice_text' => "Les entrées et sorties dans la même devise peuvent se compenser partiellement", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une dette en USD n'a jamais de valeur en monnaie domestique", 'is_correct' => false],
                            ['choice_text' => "Parce que le dollar reste toujours stable", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une entreprise ne convertit jamais ses résultats", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les encaissements et décaissements sont dans la même devise et sur des horizons comparables, l'exposition nette peut être moindre.",
                    ],
                    [
                        'question' => "Une facture de 50 000 USD doit être réglée dans trois mois. Pourquoi le responsable financier peut-il s'inquiéter même si le montant en dollars est déjà connu ?",
                        'choices' => [
                            ['choice_text' => "Parce que le nombre de dirhams nécessaires pour acheter les dollars n'est pas encore certain", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une facture en dollars change automatiquement de montant", 'is_correct' => false],
                            ['choice_text' => "Parce que les dollars ne peuvent pas être achetés", 'is_correct' => false],
                            ['choice_text' => "Parce que le fournisseur fixe toujours un nouveau prix", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant en USD est connu, mais son équivalent en MAD dépendra du taux de change futur.",
                    ],
                    [
                        'question' => "Quel exemple correspond le mieux à une exposition économique au change ?",
                        'choices' => [
                            ['choice_text' => "Une variation durable de change rend les produits d'une filiale étrangère plus ou moins compétitifs", 'is_correct' => true],
                            ['choice_text' => "Un ordinateur de bureau tombe en panne", 'is_correct' => false],
                            ['choice_text' => "Une facture domestique est imprimée en noir et blanc", 'is_correct' => false],
                            ['choice_text' => "Le nombre de réunions du service financier augmente", 'is_correct' => false],
                        ],
                        'explanation' => "L'exposition économique concerne l'effet plus large du change sur la compétitivité, les ventes, les coûts et les flux futurs d'une entreprise.",
                    ],
                    [
                        'question' => "Une entreprise reçoit 80 000 GBP. Si 1 GBP vaut 11 MAD, combien cela représente-t-il avant frais ?",
                        'choices' => [
                            ['choice_text' => "880 000 MAD", 'is_correct' => true],
                            ['choice_text' => "88 000 MAD", 'is_correct' => false],
                            ['choice_text' => "7 272 MAD", 'is_correct' => false],
                            ['choice_text' => "1 080 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "On calcule 80 000 × 11 = 880 000 MAD. Le calcul suppose un taux direct de 11 MAD pour 1 GBP et aucun frais.",
                    ],
                    [
                        'question' => "Une entreprise sait qu'elle encaissera des dollars chaque mois pendant six mois. Quel premier travail simple doit-elle faire avant de choisir une couverture ?",
                        'choices' => [
                            ['choice_text' => "Mesurer les montants, les dates et le sens de son exposition", 'is_correct' => true],
                            ['choice_text' => "Choisir immédiatement un instrument sans analyser les flux", 'is_correct' => false],
                            ['choice_text' => "Convertir tous les dollars en une devise inconnue", 'is_correct' => false],
                            ['choice_text' => "Ne tenir compte que du chiffre d'affaires annuel", 'is_correct' => false],
                        ],
                        'explanation' => "On ne peut pas gérer correctement un risque sans savoir combien sera exposé, dans quelle direction et à quelles dates.",
                    ],
                    [
                        'question' => "Une entreprise exporte en USD et constate une forte baisse du dollar face à sa monnaie de référence. Quel impact est plausible sur ses recettes converties ?",
                        'choices' => [
                            ['choice_text' => "Elles peuvent diminuer dans la monnaie de référence", 'is_correct' => true],
                            ['choice_text' => "Elles augmentent forcément", 'is_correct' => false],
                            ['choice_text' => "Elles restent identiques dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Elles deviennent automatiquement des créances douteuses", 'is_correct' => false],
                        ],
                        'explanation' => "Si le dollar vaut moins dans la monnaie de référence, le même montant de ventes en USD se convertit en moins de monnaie domestique.",
                    ],
                    [
                        'question' => "Une variation de change peut-elle affecter une entreprise qui ne fait pas de commerce international directement ?",
                        'choices' => [
                            ['choice_text' => "Oui, par exemple si ses fournisseurs ou matières premières dépendent des prix internationaux", 'is_correct' => true],
                            ['choice_text' => "Non, jamais", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement si elle possède une banque", 'is_correct' => false],
                            ['choice_text' => "Non, car les prix domestiques sont totalement indépendants du monde", 'is_correct' => false],
                        ],
                        'explanation' => "Une entreprise peut subir indirectement l'effet du change via ses fournisseurs, ses matières premières ou la concurrence étrangère, même sans facture internationale directe.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise doit-elle distinguer une exposition certaine d'une exposition simplement probable ?",
                        'choices' => [
                            ['choice_text' => "Parce que le montant, la date et la certitude du flux influencent le choix de gestion du risque", 'is_correct' => true],
                            ['choice_text' => "Parce que toutes les expositions se traitent exactement de la même manière", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une exposition probable n'a aucune valeur financière", 'is_correct' => false],
                            ['choice_text' => "Parce que le taux de change n'est jamais lié au calendrier", 'is_correct' => false],
                        ],
                        'explanation' => "Une facture déjà signée n'a pas le même degré de certitude qu'une vente seulement prévue. Cette différence peut influencer la stratégie de couverture.",
                    ],
                    [
                        'question' => "Une filiale reçoit des recettes en dollars mais paie ses salariés et fournisseurs en monnaie locale. Où se trouve l'exposition principale ?",
                        'choices' => [
                            ['choice_text' => "Dans la conversion entre les dollars reçus et la monnaie locale nécessaire pour payer les charges", 'is_correct' => true],
                            ['choice_text' => "Dans le nombre de salariés uniquement", 'is_correct' => false],
                            ['choice_text' => "Dans le fait d'avoir un budget annuel", 'is_correct' => false],
                            ['choice_text' => "Il n'y a aucune exposition puisque les ventes sont réalisées", 'is_correct' => false],
                        ],
                        'explanation' => "La filiale reçoit une devise et dépense une autre. Son résultat et sa trésorerie dépendent donc de la relation entre ces deux monnaies.",
                    ],
                    [
                        'question' => "Une entreprise veut protéger une créance future en devise contre une baisse défavorable de cette devise. L'objectif de la couverture est surtout de :",
                        'choices' => [
                            ['choice_text' => "Réduire l'incertitude sur la valeur future de la créance dans la monnaie de référence", 'is_correct' => true],
                            ['choice_text' => "Garantir le meilleur taux possible à chaque fois", 'is_correct' => false],
                            ['choice_text' => "Supprimer la créance du bilan", 'is_correct' => false],
                            ['choice_text' => "Augmenter automatiquement le montant de la facture", 'is_correct' => false],
                        ],
                        'explanation' => "Une couverture a d'abord un objectif de maîtrise du risque. Elle vise à rendre le résultat plus prévisible plutôt qu'à promettre un taux meilleur que toutes les alternatives.",
                    ],
                ],
            ],
            [
                'title' => "Financement et risque des projets transfrontaliers",
                'description' => "Petites situations d'entreprise pour relier investissement international, financement, risque et rentabilité.",
                'duration' => 29,
                'passing_score' => 64,
                'questions' => [
                    [
                        'question' => "Un groupe prévoit d'investir 5 millions EUR dans une usine à l'étranger. Le projet devrait générer des flux réguliers pendant plusieurs années. Quelle information manque encore pour juger la qualité financière du projet ?",
                        'choices' => [
                            ['choice_text' => "Le profil des flux de trésorerie, leur risque et le mode de financement", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nombre de machines", 'is_correct' => false],
                            ['choice_text' => "Uniquement la superficie du terrain", 'is_correct' => false],
                            ['choice_text' => "Aucune information supplémentaire", 'is_correct' => false],
                        ],
                        'explanation' => "Un montant investi ne suffit pas. La décision dépend des flux futurs, de leur incertitude, du financement et des éventuels effets de change ou de pays.",
                    ],
                    [
                        'question' => "Le projet A offre un rendement attendu de 9 % et le projet B 9,5 %. B se situe toutefois dans un pays beaucoup plus risqué. Que faut-il éviter de faire ?",
                        'choices' => [
                            ['choice_text' => "Choisir B uniquement parce que son rendement attendu est légèrement plus élevé", 'is_correct' => true],
                            ['choice_text' => "Analyser le risque pays de B", 'is_correct' => false],
                            ['choice_text' => "Comparer les scénarios", 'is_correct' => false],
                            ['choice_text' => "Examiner les conditions de financement", 'is_correct' => false],
                        ],
                        'explanation' => "Le rendement doit être apprécié avec le risque supporté. Un rendement légèrement supérieur peut être insuffisant si les risques supplémentaires sont importants.",
                    ],
                    [
                        'question' => "Une entreprise veut financer une acquisition au Royaume-Uni avec des revenus futurs en livres sterling. Quelle logique de financement peut être cohérente ?",
                        'choices' => [
                            ['choice_text' => "Financer une partie en GBP afin d'aligner la dette sur une partie des flux futurs", 'is_correct' => true],
                            ['choice_text' => "Financer uniquement en une devise sans rapport avec les flux", 'is_correct' => false],
                            ['choice_text' => "Ignorer le calendrier des flux", 'is_correct' => false],
                            ['choice_text' => "Éviter tout budget de trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Faire correspondre les devises de financement et de flux peut réduire l'exposition nette. Cela reste une décision à analyser selon le coût de financement.",
                    ],
                    [
                        'question' => "Une filiale étrangère prévoit une forte croissance et demande davantage de fonds de roulement. Pourquoi le siège doit-il regarder le cycle d'exploitation ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une hausse des ventes peut augmenter les besoins liés aux stocks et créances", 'is_correct' => true],
                            ['choice_text' => "Parce que les ventes en croissance réduisent toujours le besoin de cash", 'is_correct' => false],
                            ['choice_text' => "Parce que le fonds de roulement n'a aucun lien avec l'activité", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un projet international n'a jamais de créances clients", 'is_correct' => false],
                        ],
                        'explanation' => "La croissance peut mobiliser du cash avant les encaissements clients, notamment si les stocks et créances augmentent plus vite que les dettes fournisseurs.",
                    ],
                    [
                        'question' => "Une entreprise réalise une simulation où la monnaie locale se déprécie de 15 %. Quel est l'intérêt principal de ce scénario ?",
                        'choices' => [
                            ['choice_text' => "Mesurer l'effet potentiel d'un choc de change sur les flux et la rentabilité", 'is_correct' => true],
                            ['choice_text' => "Prédire avec certitude le prochain taux de change", 'is_correct' => false],
                            ['choice_text' => "Prouver que le projet sera rentable", 'is_correct' => false],
                            ['choice_text' => "Supprimer le risque de change", 'is_correct' => false],
                        ],
                        'explanation' => "Un scénario sert à tester la robustesse d'une décision face à une hypothèse défavorable. Il ne constitue pas une prédiction certaine.",
                    ],
                    [
                        'question' => "Une entreprise signe un contrat international de cinq ans mais ses coûts sont majoritairement locaux. Quel point doit-elle réexaminer régulièrement ?",
                        'choices' => [
                            ['choice_text' => "L'effet des variations de change sur ses marges au fil du temps", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nombre de pages du contrat", 'is_correct' => false],
                            ['choice_text' => "Uniquement la taille du bureau", 'is_correct' => false],
                            ['choice_text' => "Aucun, puisque le contrat dure cinq ans", 'is_correct' => false],
                        ],
                        'explanation' => "Sur une période longue, les relations entre les devises peuvent évoluer fortement et modifier la rentabilité du contrat.",
                    ],
                    [
                        'question' => "Un projet international semble rentable avant financement, mais les intérêts de la dette réduisent fortement le cash disponible. Quelle distinction faut-il garder en tête ?",
                        'choices' => [
                            ['choice_text' => "La performance économique du projet et le coût de son financement ne sont pas la même chose", 'is_correct' => true],
                            ['choice_text' => "Le financement n'a jamais d'impact sur le cash", 'is_correct' => false],
                            ['choice_text' => "Une dette transforme toujours un bénéfice en perte", 'is_correct' => false],
                            ['choice_text' => "Une entreprise ne peut pas financer un projet rentable", 'is_correct' => false],
                        ],
                        'explanation' => "Le projet peut être attractif économiquement mais avoir un financement trop coûteux ou trop risqué. Les deux analyses doivent être séparées puis réunies dans la décision.",
                    ],
                    [
                        'question' => "Un investisseur veut comparer un projet domestique et un projet étranger. Quelle approche est la plus prudente ?",
                        'choices' => [
                            ['choice_text' => "Comparer les flux attendus, les risques et les hypothèses dans une base cohérente", 'is_correct' => true],
                            ['choice_text' => "Comparer uniquement les montants investis", 'is_correct' => false],
                            ['choice_text' => "Choisir automatiquement le projet étranger", 'is_correct' => false],
                            ['choice_text' => "Ignorer les différences de devise", 'is_correct' => false],
                        ],
                        'explanation' => "La comparaison doit être homogène : mêmes principes de mesure des flux, prise en compte des risques et traitement cohérent des devises.",
                    ],
                    [
                        'question' => "Une entreprise reçoit des dividendes d'une filiale étrangère mais ne peut pas les transférer immédiatement. Quel problème de finance internationale cela illustre-t-il ?",
                        'choices' => [
                            ['choice_text' => "Un risque de transfert ou de rapatriement des fonds", 'is_correct' => true],
                            ['choice_text' => "Un risque de détérioration automatique des machines", 'is_correct' => false],
                            ['choice_text' => "Un risque de hausse de la production nationale", 'is_correct' => false],
                            ['choice_text' => "Un risque sans aucun impact sur la trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Même si le bénéfice existe juridiquement et comptablement, la capacité à déplacer les fonds peut être limitée par des contraintes locales.",
                    ],
                ],
            ],
            [
                'title' => "Décisions financières dans un groupe international",
                'description' => "Situations courantes de pilotage : trésorerie, prix, dette, dividendes et arbitrages entre filiales.",
                'duration' => 31,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Le groupe A possède deux filiales : l'une génère régulièrement du cash en USD, l'autre doit payer des dépenses importantes en USD. Quelle idée de gestion de trésorerie peut être étudiée ?",
                        'choices' => [
                            ['choice_text' => "Centraliser ou compenser certains flux en USD lorsque cela est possible", 'is_correct' => true],
                            ['choice_text' => "Convertir tous les USD en une devise différente puis les reconvertir sans raison", 'is_correct' => false],
                            ['choice_text' => "Ignorer les soldes de trésorerie des filiales", 'is_correct' => false],
                            ['choice_text' => "Supprimer les prévisions de cash", 'is_correct' => false],
                        ],
                        'explanation' => "Le rapprochement des flux dans une même devise peut réduire certains besoins de conversion et améliorer l'utilisation de la liquidité au niveau du groupe.",
                    ],
                    [
                        'question' => "Une filiale étrangère propose de distribuer un dividende exceptionnel. Quelle question du siège est essentielle avant de décider ?",
                        'choices' => [
                            ['choice_text' => "La filiale a-t-elle encore assez de liquidité pour financer son activité et ses investissements prévus ?", 'is_correct' => true],
                            ['choice_text' => "Le dividende est-il le plus grand mot du rapport ?", 'is_correct' => false],
                            ['choice_text' => "La filiale doit-elle vendre tous ses actifs ?", 'is_correct' => false],
                            ['choice_text' => "Le groupe doit-il suspendre toutes ses activités ailleurs ?", 'is_correct' => false],
                        ],
                        'explanation' => "Verser un dividende réduit le cash disponible dans la filiale. Il faut donc vérifier les besoins futurs, le fonds de roulement et les investissements.",
                    ],
                    [
                        'question' => "Un groupe international facture ses filiales dans différentes monnaies. Pourquoi le taux de change peut-il compliquer la lecture de la performance entre filiales ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une variation de change peut modifier les résultats convertis dans la monnaie du groupe", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une filiale ne peut jamais avoir de marge", 'is_correct' => false],
                            ['choice_text' => "Parce que les ventes étrangères sont toujours exclues du groupe", 'is_correct' => false],
                            ['choice_text' => "Parce que la monnaie locale n'a jamais de valeur", 'is_correct' => false],
                        ],
                        'explanation' => "Les résultats locaux peuvent être stables mais leur conversion dans la monnaie du groupe peut varier. L'analyste doit distinguer performance opérationnelle et effet de change.",
                    ],
                    [
                        'question' => "Une entreprise veut acheter 1 500 000 USD pour régler une acquisition. Si 1 USD = 9,8 MAD, quel montant en dirhams faut-il prévoir ?",
                        'choices' => [
                            ['choice_text' => "14 700 000 MAD", 'is_correct' => true],
                            ['choice_text' => "1 509 800 MAD", 'is_correct' => false],
                            ['choice_text' => "153 061 MAD", 'is_correct' => false],
                            ['choice_text' => "14 850 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "1 500 000 × 9,8 = 14 700 000 MAD. Cette estimation ne tient pas compte des frais de transaction ou d'une éventuelle variation du taux.",
                    ],
                    [
                        'question' => "Une filiale étrangère affiche une marge de 12 % contre 10 % pour le reste du groupe. Pourquoi cette comparaison doit-elle être interprétée avec prudence ?",
                        'choices' => [
                            ['choice_text' => "Parce que les monnaies, coûts, fiscalité, structure de marché et méthodes de mesure peuvent différer", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une marge n'a jamais de sens", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les filiales ont forcément les mêmes coûts", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un pourcentage ne peut pas être comparé", 'is_correct' => false],
                        ],
                        'explanation' => "La comparaison est utile, mais elle doit tenir compte du contexte de chaque marché, des différences de coût, de fiscalité et des effets de change.",
                    ],
                    [
                        'question' => "Une entreprise envisage de laisser un excédent de cash à l'étranger pour trois mois. Quel point pratique est pertinent ?",
                        'choices' => [
                            ['choice_text' => "Comparer le rendement disponible, la liquidité, le risque et les éventuelles contraintes de transfert", 'is_correct' => true],
                            ['choice_text' => "Choisir l'option ayant le taux affiché le plus élevé sans autre analyse", 'is_correct' => false],
                            ['choice_text' => "Ignorer la liquidité parce que l'horizon est court", 'is_correct' => false],
                            ['choice_text' => "Supposer qu'un placement court terme n'a aucun risque", 'is_correct' => false],
                        ],
                        'explanation' => "Même pour quelques mois, la trésorerie doit rester disponible au bon moment et le risque doit être compatible avec l'objectif du groupe.",
                    ],
                    [
                        'question' => "Pourquoi un directeur financier cherche-t-il parfois à faire correspondre les échéances des flux entrants et sortants dans une devise ?",
                        'choices' => [
                            ['choice_text' => "Pour réduire le besoin de conversion et l'exposition inutile au change", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter automatiquement le nombre de ventes", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute variation des taux d'intérêt mondiaux", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les dettes", 'is_correct' => false],
                        ],
                        'explanation' => "Quand les dates et devises correspondent, certains flux peuvent se neutraliser naturellement, ce qui réduit le montant à convertir.",
                    ],
                    [
                        'question' => "Une entreprise conserve une forte trésorerie locale dans plusieurs pays sans politique de suivi commune. Quel problème peut apparaître au niveau du groupe ?",
                        'choices' => [
                            ['choice_text' => "Une visibilité insuffisante sur la liquidité totale et une utilisation inefficace du cash", 'is_correct' => true],
                            ['choice_text' => "Une garantie de rendement supplémentaire", 'is_correct' => false],
                            ['choice_text' => "Une suppression automatique du risque opérationnel", 'is_correct' => false],
                            ['choice_text' => "Une baisse certaine des besoins de financement", 'is_correct' => false],
                        ],
                        'explanation' => "Des excédents dispersés peuvent coexister avec des besoins de financement ailleurs dans le groupe. Une vision consolidée améliore l'allocation de la liquidité.",
                    ],
                    [
                        'question' => "Une entreprise reçoit 300 000 EUR et paie 220 000 EUR dans la même devise sur une période similaire. Quel montant reste théoriquement exposé avant autres flux ?",
                        'choices' => [
                            ['choice_text' => "80 000 EUR", 'is_correct' => true],
                            ['choice_text' => "520 000 EUR", 'is_correct' => false],
                            ['choice_text' => "220 000 EUR", 'is_correct' => false],
                            ['choice_text' => "300 000 EUR", 'is_correct' => false],
                        ],
                        'explanation' => "L'exposition nette simplifiée est 300 000 - 220 000 = 80 000 EUR, en supposant que les dates de flux sont suffisamment proches et qu'aucun autre élément n'intervient.",
                    ],
                    [
                        'question' => "Une multinationale constate que sa dette externe arrive à échéance en pleine période de faiblesse du marché du crédit. Quel risque doit-elle anticiper ?",
                        'choices' => [
                            ['choice_text' => "Le risque de refinancement à des conditions moins favorables", 'is_correct' => true],
                            ['choice_text' => "Le risque que les marchés deviennent automatiquement gratuits", 'is_correct' => false],
                            ['choice_text' => "Le risque que les dettes expirent sans être remboursées", 'is_correct' => false],
                            ['choice_text' => "Aucun, puisque l'entreprise est internationale", 'is_correct' => false],
                        ],
                        'explanation' => "Une échéance importante oblige à refinancer ou rembourser la dette. Si les marchés sont tendus, le nouveau coût peut être plus élevé ou l'accès plus difficile.",
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques de finance internationale",
                'description' => "Une dernière série de mini-cas pour consolider les réflexes de base en investissement, financement, change et risque pays.",
                'duration' => 33,
                'passing_score' => 66,
                'questions' => [
                    [
                        'question' => "Une PME marocaine signe un contrat avec un client américain. Elle doit recevoir 200 000 USD dans 60 jours. Le dirigeant veut savoir combien cela représentera en dirhams. Quelle donnée lui manque ?",
                        'choices' => [
                            ['choice_text' => "Le taux de change USD/MAD applicable au moment de la conversion", 'is_correct' => true],
                            ['choice_text' => "Le nombre de salariés du client", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires historique de la PME uniquement", 'is_correct' => false],
                            ['choice_text' => "Le prix du terrain du siège", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant en USD est connu, mais sa valeur en MAD dépend du taux de conversion. Sur 60 jours, celui-ci peut évoluer.",
                    ],
                    [
                        'question' => "Une entreprise envisage deux pays pour construire une usine. Le premier offre une demande forte mais une monnaie très volatile. Le second est plus stable mais plus petit. Quelle est la bonne approche de départ ?",
                        'choices' => [
                            ['choice_text' => "Comparer les flux attendus et intégrer explicitement les différences de risque", 'is_correct' => true],
                            ['choice_text' => "Choisir automatiquement le marché le plus grand", 'is_correct' => false],
                            ['choice_text' => "Choisir automatiquement la monnaie la plus stable", 'is_correct' => false],
                            ['choice_text' => "Ignorer le contexte financier des deux pays", 'is_correct' => false],
                        ],
                        'explanation' => "La décision doit mettre en regard le potentiel économique et le niveau d'incertitude. Un marché plus grand n'est pas automatiquement préférable sans analyse des risques et des flux.",
                    ],
                    [
                        'question' => "Une entreprise reçoit un prêt en euros pour financer une filiale qui génère surtout des revenus en dirhams. Après une forte hausse de l'euro, qu'est-ce qui peut se produire ?",
                        'choices' => [
                            ['choice_text' => "Le coût de la dette en dirhams peut augmenter", 'is_correct' => true],
                            ['choice_text' => "Le montant de la dette en euros devient nul", 'is_correct' => false],
                            ['choice_text' => "Les revenus en dirhams deviennent automatiquement plus élevés", 'is_correct' => false],
                            ['choice_text' => "Le risque de change disparaît", 'is_correct' => false],
                        ],
                        'explanation' => "La dette reste libellée en euros. Si l'euro s'apprécie contre le dirham, davantage de dirhams sont nécessaires pour acheter les euros nécessaires au service de la dette.",
                    ],
                    [
                        'question' => "Une filiale étrangère demande de conserver ses bénéfices pour ouvrir un deuxième site. Le siège hésite entre réinvestir et faire remonter l'argent. Quel arbitrage est au cœur de la décision ?",
                        'choices' => [
                            ['choice_text' => "Comparer le rendement attendu du réinvestissement aux autres usages possibles des fonds", 'is_correct' => true],
                            ['choice_text' => "Choisir toujours le versement immédiat", 'is_correct' => false],
                            ['choice_text' => "Choisir toujours le réinvestissement", 'is_correct' => false],
                            ['choice_text' => "Ne pas regarder les besoins de trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Le groupe doit comparer la valeur créée par le nouvel investissement à la valeur de conserver ou de redistribuer le cash ailleurs.",
                    ],
                    [
                        'question' => "Un pays connaît une baisse importante de ses réserves de change et une forte tension sur sa monnaie. Pourquoi cela intéresse-t-il un investisseur étranger ?",
                        'choices' => [
                            ['choice_text' => "Parce que cela peut signaler une pression sur la monnaie et les conditions de transfert de fonds", 'is_correct' => true],
                            ['choice_text' => "Parce que toutes les entreprises deviennent immédiatement insolvables", 'is_correct' => false],
                            ['choice_text' => "Parce que les taux de change n'ont plus de rôle", 'is_correct' => false],
                            ['choice_text' => "Parce que les réserves de change mesurent seulement le tourisme", 'is_correct' => false],
                        ],
                        'explanation' => "Des tensions sur les réserves et la monnaie peuvent avoir des conséquences sur le change, le financement externe et, selon le contexte, la capacité de transférer des fonds.",
                    ],
                    [
                        'question' => "Une société a 1 million USD de ventes prévues, mais seulement 40 % sont réellement sécurisées par des commandes signées. Que faut-il retenir pour une stratégie de couverture ?",
                        'choices' => [
                            ['choice_text' => "Les 400 000 USD signés offrent une exposition plus certaine que le solde encore incertain", 'is_correct' => true],
                            ['choice_text' => "Les 1 million USD sont tous certains", 'is_correct' => false],
                            ['choice_text' => "Aucune prévision ne peut être utilisée", 'is_correct' => false],
                            ['choice_text' => "La différence entre prévu et signé n'a aucune importance", 'is_correct' => false],
                        ],
                        'explanation' => "Les commandes fermes donnent une visibilité supérieure aux ventes simplement anticipées. La couverture peut être organisée en fonction du degré de certitude des flux.",
                    ],
                    [
                        'question' => "Un investisseur trouve une action étrangère très bon marché selon un multiple simple, mais le pays présente de fortes incertitudes politiques. Quelle erreur serait la plus évidente ?",
                        'choices' => [
                            ['choice_text' => "Se fier au seul multiple sans intégrer le risque du pays et les autres caractéristiques de l'investissement", 'is_correct' => true],
                            ['choice_text' => "Regarder les états financiers", 'is_correct' => false],
                            ['choice_text' => "Analyser la devise", 'is_correct' => false],
                            ['choice_text' => "Étudier plusieurs scénarios", 'is_correct' => false],
                        ],
                        'explanation' => "Un multiple isolé ne capture pas tous les risques. L'analyste doit considérer la qualité de l'actif, la devise, le contexte du pays et les perspectives.",
                    ],
                    [
                        'question' => "Une entreprise exportatrice doit choisir entre accepter une volatilité plus forte du résultat et payer un coût pour réduire cette volatilité. Quel compromis retrouve-t-on ici ?",
                        'choices' => [
                            ['choice_text' => "Le compromis entre coût de couverture et réduction de l'incertitude", 'is_correct' => true],
                            ['choice_text' => "Le compromis entre chiffre d'affaires et nombre de salariés", 'is_correct' => false],
                            ['choice_text' => "Le compromis entre stock et publicité uniquement", 'is_correct' => false],
                            ['choice_text' => "Aucun compromis, car toute couverture est gratuite", 'is_correct' => false],
                        ],
                        'explanation' => "La gestion du risque a souvent un coût. L'entreprise arbitre entre accepter une partie de la volatilité et payer pour obtenir davantage de visibilité.",
                    ],
                    [
                        'question' => "Une entreprise étrangère rembourse un prêt de 600 000 EUR. Si 1 EUR = 10,5 MAD, quelle est la valeur du remboursement en dirhams ?",
                        'choices' => [
                            ['choice_text' => "6 300 000 MAD", 'is_correct' => true],
                            ['choice_text' => "630 000 MAD", 'is_correct' => false],
                            ['choice_text' => "57 143 MAD", 'is_correct' => false],
                            ['choice_text' => "6 000 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "600 000 × 10,5 = 6 300 000 MAD. Le calcul suppose que 10,5 MAD est le taux direct pour 1 EUR et ignore les frais.",
                    ],
                    [
                        'question' => "Une multinationale découvre que l'une de ses filiales dépend presque entièrement d'un seul fournisseur étranger. Quel risque stratégique peut augmenter ?",
                        'choices' => [
                            ['choice_text' => "La dépendance à une chaîne d'approvisionnement et à un environnement extérieur unique", 'is_correct' => true],
                            ['choice_text' => "Le risque de diversification excessive", 'is_correct' => false],
                            ['choice_text' => "La suppression du besoin de fonds de roulement", 'is_correct' => false],
                            ['choice_text' => "L'absence de tout effet sur la finance", 'is_correct' => false],
                        ],
                        'explanation' => "Une forte dépendance peut exposer la filiale à des interruptions, à des hausses de prix ou à des problèmes de change qui affectent les coûts et la trésorerie.",
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
