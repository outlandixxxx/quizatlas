<?php

namespace Database\Seeders;

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

        $quizSettings = [
            ['duration' => 22, 'passing_score' => 58],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 60],
            ['duration' => 28, 'passing_score' => 61],
            ['duration' => 30, 'passing_score' => 62],
            ['duration' => 25, 'passing_score' => 59],
            ['duration' => 27, 'passing_score' => 63],
            ['duration' => 29, 'passing_score' => 64],
            ['duration' => 31, 'passing_score' => 65],
            ['duration' => 33, 'passing_score' => 66],
        ];

        $quizzes = [
            [
                'title' => 'Comprendre les flux de capitaux internationaux',
                'description' => 'Lecture simple des mouvements de capitaux entre pays et des raisons économiques qui poussent les entreprises et investisseurs à franchir les frontières.',
                'questions' => [
                    [
                        'question' => 'Un fonds d\'investissement marocain achète des obligations émises par une entreprise américaine. Comment qualifier cette opération du point de vue du fonds ?',
                        'explanation' => 'Le fonds place son capital dans un actif émis par une entité étrangère. Il s\'agit donc d\'un investissement financier transfrontalier.',
                        'choices' => [
                            ['choice_text' => 'Une opération purement domestique', 'is_correct' => false],
                            ['choice_text' => 'Une opération sans exposition au marché étranger', 'is_correct' => false],
                            ['choice_text' => 'Un investissement financier transfrontalier', 'is_correct' => true],
                            ['choice_text' => 'Un simple échange de stocks physiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il chercher des opportunités à l\'étranger même si son marché domestique reste attractif ?',
                        'explanation' => 'L\'investissement international augmente le nombre d\'opportunités accessibles. Il peut apporter une diversification, mais introduit aussi de nouvelles sources de risque.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir une rentabilité supérieure à celle du marché local dans chaque situation', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de convertir des devises et donc de supporter un risque de change', 'is_correct' => false],
                            ['choice_text' => 'Pour élargir l\'univers d\'investissement et diversifier certains risques', 'is_correct' => true],
                            ['choice_text' => 'Pour échapper à la réglementation financière du pays d\'origine de l\'investisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise française reçoit 100 000 USD et, au moment de l\'encaissement, 1 USD vaut 0,90 EUR. Quel montant en euros reçoit-elle avant frais ?',
                        'explanation' => 'Le montant est 100 000 × 0,90 = 90 000 EUR. On suppose ici l\'absence de frais et un taux de conversion simple.',
                        'choices' => [
                            ['choice_text' => '9 000 EUR', 'is_correct' => false],
                            ['choice_text' => '90 000 EUR', 'is_correct' => true],
                            ['choice_text' => '100 900 EUR', 'is_correct' => false],
                            ['choice_text' => '111 111 EUR', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur conserve une obligation étrangère. Même si le prix de l\'obligation ne change pas dans sa devise d\'origine, son rendement en dirhams peut-il changer ?',
                        'explanation' => 'La performance mesurée en dirhams dépend à la fois de l\'actif étranger et du taux de conversion entre la devise étrangère et le dirham.',
                        'choices' => [
                            ['choice_text' => 'Oui, à cause de l\'évolution du taux de change', 'is_correct' => true],
                            ['choice_text' => 'Oui, à cause d\'une modification du taux de coupon fixé à l\'émission de l\'obligation', 'is_correct' => false],
                            ['choice_text' => 'Non, car le rendement d\'une obligation ne dépend que de son prix dans sa devise d\'origine', 'is_correct' => false],
                            ['choice_text' => 'Non, car la conversion en dirhams n\'a pas d\'effet tant que l\'obligation n\'est pas vendue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise ouvre une usine au Portugal afin de produire directement sur place. Quelle motivation économique correspond le mieux à cette décision ?',
                        'explanation' => 'Une implantation peut répondre à une logique commerciale ou productive. Elle peut réduire certaines distances logistiques, sans faire disparaître tous les coûts ou risques.',
                        'choices' => [
                            ['choice_text' => 'Acquérir des titres de dette portugais afin de percevoir des intérêts réguliers', 'is_correct' => false],
                            ['choice_text' => 'Réduire son exposition au risque pays en concentrant ses actifs sur un seul territoire', 'is_correct' => false],
                            ['choice_text' => 'Placer sa trésorerie à court terme sur un marché monétaire étranger plus liquide', 'is_correct' => false],
                            ['choice_text' => 'Se rapprocher du marché local et organiser la production sur place', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans un contexte international, qu\'appelle-t-on généralement un flux de capitaux ?',
                        'explanation' => 'Les flux de capitaux correspondent aux mouvements financiers liés notamment aux investissements, prêts, placements et autres opérations entre pays.',
                        'choices' => [
                            ['choice_text' => 'Une variation du taux de change entre deux monnaies observée sur le marché des devises', 'is_correct' => false],
                            ['choice_text' => 'Un échange de biens et de services entre un pays et ses partenaires, enregistré dans la balance commerciale', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement de fonds entre agents économiques, souvent lié à un investissement ou à un financement', 'is_correct' => true],
                            ['choice_text' => 'Un écart entre les recettes et les dépenses publiques d\'un État sur une année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit un prêt en dollars alors que ses revenus futurs sont principalement en dirhams. Quel déséquilibre faut-il surveiller ?',
                        'explanation' => 'La dette en USD devra être remboursée en USD, alors que les ressources de l\'entreprise sont en MAD. Une variation du change peut donc alourdir ou alléger le service de la dette.',
                        'choices' => [
                            ['choice_text' => 'L\'écart entre le taux d\'intérêt de la dette et le taux d\'inflation du pays', 'is_correct' => false],
                            ['choice_text' => 'Le décalage entre la devise de la dette et celle des revenus', 'is_correct' => true],
                            ['choice_text' => 'La différence entre le montant emprunté et le chiffre d\'affaires de l\'exercice précédent', 'is_correct' => false],
                            ['choice_text' => 'Le délai entre la date de signature du prêt et celle du premier remboursement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut rendre un investissement international plus complexe qu\'un investissement purement domestique ?',
                        'explanation' => 'Au-delà de la rentabilité du projet, l\'investisseur doit tenir compte de l\'environnement juridique, monétaire et économique du pays concerné.',
                        'choices' => [
                            ['choice_text' => 'Le fait que les rendements étrangers soient calculés selon une formule mathématique différente', 'is_correct' => false],
                            ['choice_text' => 'L\'impossibilité d\'obtenir des informations financières sur les entreprises étrangères cotées', 'is_correct' => false],
                            ['choice_text' => 'Le fait qu\'un actif étranger ne puisse pas être revendu avant plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'La combinaison de différences de monnaie, de réglementation et de contexte économique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque internationale peut-elle intervenir dans un financement accordé à une entreprise active dans plusieurs pays ?',
                        'explanation' => 'Les banques peuvent faciliter les paiements internationaux, proposer des financements et aider à gérer les expositions en devises.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle peut apporter des solutions de financement, de paiement et de change adaptées à plusieurs marchés', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elle prend en charge le risque d\'activité de l\'entreprise à la place de ses actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle remplace les autorités de régulation des différents pays où l\'entreprise opère', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle détermine le prix de vente des produits de l\'entreprise sur chaque marché étranger où elle est implantée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise canadienne investit 2 millions CAD dans une filiale en Afrique du Nord. Quelle question financière est pertinente dès le départ ?',
                        'explanation' => 'Un investissement international implique un besoin initial de fonds, des besoins de trésorerie futurs et éventuellement des flux de dividendes ou autres remontées de fonds.',
                        'choices' => [
                            ['choice_text' => 'Quelle sera la rémunération des dirigeants de la filiale dans cinq ans, une fois l\'activité lancée ?', 'is_correct' => false],
                            ['choice_text' => 'Quel sera le résultat net exact de la filiale dans dix ans ?', 'is_correct' => false],
                            ['choice_text' => 'Comment seront financés le projet, les besoins de trésorerie et les éventuels flux de retour ?', 'is_correct' => true],
                            ['choice_text' => 'Comment la filiale organisera-t-elle sa communication publicitaire lors de son lancement ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur détient des actions étrangères et constate que son portefeuille baisse en dirhams, alors que les cours locaux sont presque stables. Quelle explication est plausible ?',
                        'explanation' => 'La valeur d\'un portefeuille international dans la monnaie domestique dépend du prix local des actifs et du taux de change. Un mouvement de change défavorable peut donc réduire la valeur convertie.',
                        'choices' => [
                            ['choice_text' => 'La devise étrangère s\'est dépréciée par rapport au dirham', 'is_correct' => true],
                            ['choice_text' => 'Le dirham s\'est déprécié par rapport à la devise étrangère', 'is_correct' => false],
                            ['choice_text' => 'Le portefeuille est resté stable, car seule compte la variation des cours locaux', 'is_correct' => false],
                            ['choice_text' => 'La banque centrale étrangère a baissé ses taux, ce qui a renforcé sa devise face au dirham', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Balance des paiements : premiers repères',
                'description' => 'Découvrir la logique de la balance des paiements et distinguer les principaux types de transactions entre une économie et le reste du monde.',
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement la balance des paiements ?',
                        'explanation' => 'La balance des paiements regroupe les transactions économiques d\'une économie avec l\'extérieur sur une période donnée, notamment les échanges, revenus et flux financiers.',
                        'choices' => [
                            ['choice_text' => 'À mesurer la valeur des biens et services produits à l\'intérieur d\'un pays au cours d\'une année', 'is_correct' => false],
                            ['choice_text' => 'À recenser les dettes et les créances de l\'État envers ses créanciers nationaux et étrangers à une date donnée', 'is_correct' => false],
                            ['choice_text' => 'À comparer les prix des biens de consommation d\'un pays avec ceux de ses principaux partenaires', 'is_correct' => false],
                            ['choice_text' => 'À retracer les transactions économiques entre les résidents d\'un pays et le reste du monde sur une période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Les exportations de marchandises d\'un pays sont-elles prises en compte dans sa balance des paiements ?',
                        'explanation' => 'Les exportations et importations de biens font partie des transactions retracées dans la balance des paiements.',
                        'choices' => [
                            ['choice_text' => 'Oui, mais comme un flux de capitaux', 'is_correct' => false],
                            ['choice_text' => 'Non, seules les opérations financières y sont enregistrées', 'is_correct' => false],
                            ['choice_text' => 'Non, elles figurent dans les comptes publics de l\'État', 'is_correct' => false],
                            ['choice_text' => 'Oui, dans les échanges de biens', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un touriste étranger dépense 2 000 EUR dans des hôtels et restaurants au Maroc. Dans la logique de la balance des paiements, cette dépense est enregistrée comme une exportation de services du Maroc.',
                        'explanation' => 'Les dépenses des visiteurs étrangers au Maroc constituent des exportations de services du point de vue de l\'économie marocaine.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Faux, car seules les ventes de marchandises sont enregistrées dans la balance des paiements', 'is_correct' => false],
                            ['choice_text' => 'Faux, car cette dépense est une sortie de devises pour le Maroc', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine verse des intérêts à un prêteur étranger. Quelle nature de flux est concernée ?',
                        'explanation' => 'Le paiement d\'intérêts à un non-résident constitue un flux de revenus vers l\'étranger, lié ici au financement international.',
                        'choices' => [
                            ['choice_text' => 'Une exportation de services financiers facturée à un partenaire étranger', 'is_correct' => false],
                            ['choice_text' => 'Un transfert courant sans contrepartie, comme un don ou une aide versée à un non-résident', 'is_correct' => false],
                            ['choice_text' => 'Une importation de marchandises financée par un crédit fournisseur étranger', 'is_correct' => false],
                            ['choice_text' => 'Un flux de revenu lié à un investissement ou un financement international', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi dit-on souvent que la balance des paiements est construite avec une logique comptable qui relie différentes catégories de flux ?',
                        'explanation' => 'La balance des paiements suit une logique comptable : les transactions donnent lieu à des enregistrements qui relient les différentes composantes des comptes extérieurs.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque opération est comptabilisée du seul côté du pays qui l\'a déclenchée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les statisticiens ajustent les données afin que les recettes soient supérieures aux dépenses', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une transaction internationale implique des écritures qui s\'inscrivent dans des comptes liés', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elle est tenue par les banques commerciales selon les mêmes règles que leurs comptes clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine achète une usine en Allemagne. Quelle catégorie est la plus directement concernée ?',
                        'explanation' => 'L\'acquisition d\'une usine à l\'étranger correspond à un investissement direct, car l\'entreprise acquiert un actif productif et une présence économique dans un autre pays.',
                        'choices' => [
                            ['choice_text' => 'Les flux liés aux investissements de portefeuille en actions cotées', 'is_correct' => false],
                            ['choice_text' => 'Les flux liés à l\'investissement direct à l\'étranger', 'is_correct' => true],
                            ['choice_text' => 'Les flux liés aux exportations de biens d\'équipement', 'is_correct' => false],
                            ['choice_text' => 'Les flux liés aux transferts courants sans contrepartie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Toutes choses égales par ailleurs, une hausse des exportations de services améliore le solde de la balance courante d\'un pays.',
                        'explanation' => 'Des exportations supplémentaires de services apportent des recettes provenant de l\'extérieur et augmentent donc le solde de la balance courante, les autres flux restant inchangés.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Faux, car les exportations de services sont enregistrées comme des sorties de devises', 'is_correct' => false],
                            ['choice_text' => 'Faux, car seules les exportations de biens modifient le solde extérieur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre le mieux un flux financier international plutôt qu\'un flux commercial de biens ?',
                        'explanation' => 'L\'achat d\'une obligation constitue un investissement financier. Les autres exemples décrivent des échanges de biens.',
                        'choices' => [
                            ['choice_text' => 'Une entreprise exporte du mobilier de bureau vers un distributeur étranger', 'is_correct' => false],
                            ['choice_text' => 'Un pays vend du blé à un autre pays dans le cadre d\'un contrat annuel', 'is_correct' => false],
                            ['choice_text' => 'Une société expédie des pièces détachées à sa filiale pour assemblage', 'is_correct' => false],
                            ['choice_text' => 'Un investisseur achète des obligations émises par une société étrangère', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une économie importe durablement plus de biens qu\'elle n\'en exporte. Que faut-il retenir avant de tirer une conclusion sur sa situation financière extérieure ?',
                        'explanation' => 'La position extérieure ne se résume pas au commerce de biens. Les services, revenus, transferts et opérations financières peuvent compenser ou amplifier cette situation.',
                        'choices' => [
                            ['choice_text' => 'Il faut aussi examiner les services, revenus et flux financiers', 'is_correct' => true],
                            ['choice_text' => 'On peut en déduire que sa monnaie va se déprécier à court terme', 'is_correct' => false],
                            ['choice_text' => 'Il suffit de comparer les exportations de biens avec le budget de l\'État', 'is_correct' => false],
                            ['choice_text' => 'On peut en déduire que ses entreprises exportatrices sont peu compétitives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit des dividendes d\'une filiale située à l\'étranger. Pourquoi ce flux intéresse-t-il l\'analyse internationale ?',
                        'explanation' => 'Les dividendes versés depuis une filiale étrangère constituent un revenu pour l\'investisseur résident et font partie des flux économiques avec l\'étranger.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il constitue une exportation de services facturée à la filiale', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il représente un revenu provenant d\'un actif détenu à l\'étranger', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'il correspond au remboursement du capital investi dans la filiale', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il s\'agit d\'un prêt accordé par la maison mère à sa filiale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un analyste ne devrait-il pas confondre balance commerciale et balance des paiements ?',
                        'explanation' => 'La balance commerciale porte sur les exportations et importations de biens. La balance des paiements englobe également les services, revenus et nombreux flux financiers.',
                        'choices' => [
                            ['choice_text' => 'La balance commerciale couvre les biens et les services, alors que la balance des paiements ne retient que les mouvements de capitaux entre pays', 'is_correct' => false],
                            ['choice_text' => 'La balance commerciale se concentre sur les biens, alors que la balance des paiements couvre un ensemble beaucoup plus large de transactions', 'is_correct' => true],
                            ['choice_text' => 'La balance commerciale enregistre les flux financiers, alors que la balance des paiements se limite aux échanges de marchandises', 'is_correct' => false],
                            ['choice_text' => 'La balance commerciale est publiée chaque année, alors que la balance des paiements ne concerne que les transactions de l\'État', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Investissement international et risque pays',
                'description' => 'Identifier les principales questions financières avant de placer des capitaux dans un pays étranger.',
                'questions' => [
                    [
                        'question' => 'Une entreprise envisage d\'acheter 40 % d\'une société brésilienne pour développer une activité locale. Quel élément mérite une attention particulière avant la décision ?',
                        'explanation' => 'Un investissement étranger peut être affecté par les conditions politiques, économiques, réglementaires et financières du pays d\'accueil.',
                        'choices' => [
                            ['choice_text' => 'La stabilité du cadre économique et politique du pays', 'is_correct' => true],
                            ['choice_text' => 'La taille du siège social de la société brésilienne', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de jours fériés dans le calendrier du pays', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de salariés administratifs de la société brésilienne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque qu\'un gouvernement impose des restrictions qui compliquent le rapatriement des bénéfices d\'une filiale étrangère relève principalement de quel type de risque ?',
                        'explanation' => 'Le risque pays couvre notamment les situations où les décisions ou conditions d\'un État peuvent affecter les opérations et les flux financiers des investisseurs.',
                        'choices' => [
                            ['choice_text' => 'Du risque de rupture de stock', 'is_correct' => false],
                            ['choice_text' => 'Du risque pays', 'is_correct' => true],
                            ['choice_text' => 'Du risque purement informatique individuel', 'is_correct' => false],
                            ['choice_text' => 'Du risque de défaut d\'un client domestique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur peut-il exiger une rentabilité plus élevée pour un projet situé dans un environnement jugé plus risqué ?',
                        'explanation' => 'Plus le risque perçu augmente, plus les investisseurs peuvent demander une rémunération supplémentaire pour accepter cette incertitude.',
                        'choices' => [
                            ['choice_text' => 'Oui, une prime de risque peut être demandée', 'is_correct' => true],
                            ['choice_text' => 'Non, le rendement exigé dépend de la taille du projet et non de son risque', 'is_correct' => false],
                            ['choice_text' => 'Non, le risque est déjà supprimé par la diversification des projets', 'is_correct' => false],
                            ['choice_text' => 'Oui, un dividende minimal est alors imposé par la réglementation internationale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société obtient un contrat très rentable à l\'étranger, mais le pays connaît de fréquentes interruptions de l\'activité bancaire. Quel risque concret cela peut-il créer ?',
                        'explanation' => 'Même un contrat rentable peut devenir difficile à exécuter si le système financier local perturbe les règlements, les transferts ou l\'accès à la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du prix de vente prévu au contrat', 'is_correct' => false],
                            ['choice_text' => 'Un allègement de la fiscalité locale sur les bénéfices du contrat', 'is_correct' => false],
                            ['choice_text' => 'Des difficultés à effectuer ou recevoir les paiements', 'is_correct' => true],
                            ['choice_text' => 'Une modification de la monnaie de présentation des comptes du groupe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est utile pour apprécier la situation d\'un emprunteur souverain ?',
                        'explanation' => 'L\'endettement public, ses échéances et sa capacité de remboursement sont des éléments essentiels dans l\'analyse du risque souverain.',
                        'choices' => [
                            ['choice_text' => 'Le niveau et la structure de sa dette publique', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d\'entreprises cotées à la bourse nationale', 'is_correct' => false],
                            ['choice_text' => 'Le prix moyen du logement dans la capitale', 'is_correct' => false],
                            ['choice_text' => 'La densité du réseau routier à l\'échelle nationale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale située dans un pays étranger réalise des bénéfices en monnaie locale. Pourquoi le siège peut-il recevoir un montant différent après conversion ?',
                        'explanation' => 'Le bénéfice est généré dans une monnaie locale. Lorsqu\'il est converti dans la monnaie du groupe, la valeur dépend du taux de change au moment considéré.',
                        'choices' => [
                            ['choice_text' => 'Parce que la filiale doit reverser au siège une partie de ses bénéfices à titre d\'impôt', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux de change entre la monnaie locale et la monnaie du siège peut varier', 'is_correct' => true],
                            ['choice_text' => 'Parce que le siège applique un taux d\'intérêt différent à chaque filiale du groupe', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices locaux sont réduits par la hausse des prix dans le pays d\'accueil', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise hésite entre deux pays présentant une rentabilité attendue similaire. Dans l\'un des deux, les règles fiscales et douanières sont beaucoup plus imprévisibles. Quel raisonnement est le plus pertinent ?',
                        'explanation' => 'L\'incertitude réglementaire ou fiscale peut affecter les flux futurs et leur risque. Elle doit donc apparaître dans l\'analyse économique du projet.',
                        'choices' => [
                            ['choice_text' => 'Se limiter à comparer les rentabilités attendues, puisqu\'elles sont similaires', 'is_correct' => false],
                            ['choice_text' => 'Prendre en compte cette incertitude supplémentaire dans l\'évaluation du projet', 'is_correct' => true],
                            ['choice_text' => 'Écarter d\'office le pays imprévisible sans comparer les flux attendus', 'is_correct' => false],
                            ['choice_text' => 'Retenir le pays dont la monnaie affiche la valeur nominale la plus élevée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distingue-t-on parfois le risque de change du risque pays ?',
                        'explanation' => 'Une devise peut évoluer sans changement politique majeur, alors que le risque pays inclut aussi des dimensions politiques, juridiques, économiques et parfois de transfert.',
                        'choices' => [
                            ['choice_text' => 'Parce que le premier vise les dettes publiques, tandis que le second vise les dettes des entreprises privées', 'is_correct' => false],
                            ['choice_text' => 'Parce que le risque pays est apprécié par l\'investisseur, tandis que le risque de change est fixé par la banque centrale du pays concerné', 'is_correct' => false],
                            ['choice_text' => 'Parce que le premier porte sur les taux d\'intérêt, tandis que le second porte sur les cours des matières premières du pays', 'is_correct' => false],
                            ['choice_text' => 'Parce que le premier vient du mouvement des devises, tandis que le second couvre un ensemble plus large de risques liés au pays', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur constate qu\'un projet étranger est très rentable dans son scénario central, mais qu\'une légère baisse des ventes suffit à rendre le projet déficitaire. Que révèle surtout cette observation ?',
                        'explanation' => 'Une faible modification des hypothèses qui change fortement le résultat signale une sensibilité importante. L\'investisseur doit alors étudier plusieurs scénarios.',
                        'choices' => [
                            ['choice_text' => 'Une forte diversification géographique des revenus du projet', 'is_correct' => false],
                            ['choice_text' => 'Une forte sensibilité du projet aux hypothèses retenues', 'is_correct' => true],
                            ['choice_text' => 'Une faible volatilité des cash-flows du projet', 'is_correct' => false],
                            ['choice_text' => 'Un coût du capital particulièrement faible pour le projet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avant de financer une filiale étrangère, pourquoi examiner la possibilité de transférer légalement des fonds vers ou depuis le pays ?',
                        'explanation' => 'La capacité à transférer les fonds est importante pour financer les opérations, rembourser certains engagements ou rapatrier des dividendes.',
                        'choices' => [
                            ['choice_text' => 'Parce que la réglementation locale fixe le taux de rendement minimal que le siège doit obtenir', 'is_correct' => false],
                            ['choice_text' => 'Parce que les autorités du pays d\'accueil garantissent le remboursement du capital investi par le siège en cas de crise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les restrictions de transfert peuvent affecter la disponibilité des liquidités et le rapatriement des profits', 'is_correct' => true],
                            ['choice_text' => 'Parce que ces règles déterminent la monnaie dans laquelle la filiale établit ses comptes sociaux', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Financement international des entreprises',
                'description' => 'Choisir et comprendre les grandes options de financement lorsqu\'une entreprise se développe sur plusieurs marchés.',
                'questions' => [
                    [
                        'question' => 'Une entreprise européenne développe une filiale en Afrique et hésite entre un prêt en euros et un prêt en monnaie locale. Quel point mérite une comparaison directe ?',
                        'explanation' => 'Le taux d\'intérêt ne suffit pas : il faut aussi regarder la devise de la dette par rapport à la devise des revenus qui serviront à la rembourser.',
                        'choices' => [
                            ['choice_text' => 'Le nombre d\'agences que chaque banque prêteuse possède en Europe', 'is_correct' => false],
                            ['choice_text' => 'L\'ancienneté des relations personnelles entre le dirigeant de la filiale et chaque banquier', 'is_correct' => false],
                            ['choice_text' => 'Le montant du capital social de chacune des banques prêteuses', 'is_correct' => false],
                            ['choice_text' => 'Le coût du financement et le risque de change associé à chaque option', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un emprunt international est libellé dans une devise différente de celle des recettes de l\'emprunteur. Quel risque principal apparaît ?',
                        'explanation' => 'Une variation défavorable du taux de change peut augmenter, en monnaie domestique, le coût du service de la dette contractée en devise étrangère.',
                        'choices' => [
                            ['choice_text' => 'Le risque que la banque change unilatéralement le taux d\'intérêt fixé au contrat', 'is_correct' => false],
                            ['choice_text' => 'Le risque que les recettes soient taxées deux fois dans deux pays', 'is_correct' => false],
                            ['choice_text' => 'Le risque que la dette coûte davantage dans la monnaie des recettes', 'is_correct' => true],
                            ['choice_text' => 'Le risque que la dette soit remboursée avant son échéance par la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une multinationale souhaite réduire sa dépendance à une seule banque pour ses financements. Quelle approche est cohérente ?',
                        'explanation' => 'La diversification des sources peut réduire une dépendance excessive à un seul prêteur ou à un seul canal de financement.',
                        'choices' => [
                            ['choice_text' => 'Concentrer ses emprunts auprès de la banque offrant le meilleur taux', 'is_correct' => false],
                            ['choice_text' => 'Remplacer sa dette bancaire par des emprunts à très court terme', 'is_correct' => false],
                            ['choice_text' => 'Diversifier ses sources de financement et ses relations bancaires', 'is_correct' => true],
                            ['choice_text' => 'Multiplier les garanties accordées à sa banque actuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance une filiale étrangère avec des bénéfices déjà accumulés par le groupe. Quel avantage peut présenter ce financement interne ?',
                        'explanation' => 'Utiliser des ressources internes peut réduire le besoin de financement externe. Cela ne supprime toutefois pas les autres risques du projet.',
                        'choices' => [
                            ['choice_text' => 'Il élimine le risque de change sur le capital investi dans la filiale', 'is_correct' => false],
                            ['choice_text' => 'Il peut limiter le recours à une dette externe pour financer le projet', 'is_correct' => true],
                            ['choice_text' => 'Il dispense l\'entreprise de comparer le projet à d\'autres usages des fonds', 'is_correct' => false],
                            ['choice_text' => 'Il rend le coût du financement indépendant du risque du projet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une entreprise ayant des recettes régulières en dollars et une dette future également en dollars, quel principe financier peut être intéressant ?',
                        'explanation' => 'Faire correspondre les devises des encaissements et décaissements peut réduire l\'exposition nette au change et simplifier la gestion de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Convertir en dirhams chaque encaissement avant de régler la dette en dollars', 'is_correct' => false],
                            ['choice_text' => 'Rembourser la dette en une devise différente de celle des recettes pour diversifier', 'is_correct' => false],
                            ['choice_text' => 'Reporter les paiements jusqu\'à une date où le taux de change sera plus avantageux', 'is_correct' => false],
                            ['choice_text' => 'Faire coïncider autant que possible les devises des recettes et des paiements', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise internationale voit son coût de financement augmenter après une dégradation de sa situation financière. Quelle conséquence est la plus logique ?',
                        'explanation' => 'Un financement plus coûteux augmente les charges financières et peut réduire l\'attractivité des nouveaux investissements.',
                        'choices' => [
                            ['choice_text' => 'Les futurs projets peuvent devenir plus difficiles à financer ou moins rentables', 'is_correct' => true],
                            ['choice_text' => 'Les emprunts déjà émis voient leur taux d\'intérêt réduit de façon rétroactive par les prêteurs', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs exigent une rémunération plus faible pour détenir ses titres', 'is_correct' => false],
                            ['choice_text' => 'Les créanciers perdent le droit de réclamer les intérêts déjà échus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société peut-elle combiner plusieurs sources de financement pour un même projet international ?',
                        'explanation' => 'Les entreprises structurent souvent leur financement en combinant plusieurs sources afin d\'équilibrer coût, flexibilité et niveau de risque.',
                        'choices' => [
                            ['choice_text' => 'Non, car un projet international doit être financé par une seule banque agréée par les deux pays concernés', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais les fonds propres sont alors obligatoirement exclus du plan de financement', 'is_correct' => false],
                            ['choice_text' => 'Non, la réglementation impose de choisir entre dette bancaire et émission de titres', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle peut utiliser par exemple des fonds propres, de la dette bancaire et d\'autres instruments', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un prêt international est proposé à taux variable. Quel élément supplémentaire doit être surveillé par l\'emprunteur ?',
                        'explanation' => 'Avec un taux variable, le coût d\'intérêt peut évoluer lorsque le taux de référence change. La trésorerie et le budget doivent donc intégrer cette incertitude.',
                        'choices' => [
                            ['choice_text' => 'L\'évolution du chiffre d\'affaires des principaux concurrents de l\'emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de remboursements déjà effectués par les autres emprunteurs', 'is_correct' => false],
                            ['choice_text' => 'La date de publication des comptes annuels de la banque prêteuse', 'is_correct' => false],
                            ['choice_text' => 'L\'évolution du taux de référence utilisé pour calculer le coût de la dette', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut accélérer son implantation sur un nouveau marché, mais ses ressources internes sont limitées. Pourquoi un financement externe peut-il être envisagé ?',
                        'explanation' => 'Le financement externe peut accélérer un projet, mais il ajoute des engagements financiers. Il doit donc être comparé au rendement attendu et à la capacité de remboursement.',
                        'choices' => [
                            ['choice_text' => 'Pour renforcer ses fonds propres sans que les engagements financiers du groupe augmentent vis-à-vis des banques', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer son besoin de trésorerie par un engagement sans échéance de remboursement', 'is_correct' => false],
                            ['choice_text' => 'Pour mobiliser rapidement des ressources supplémentaires tout en évaluant le coût et le risque de la dette', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le coût du capital en évitant de comparer les sources de financement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un financement international, pourquoi les conditions du pays prêteur et du pays emprunteur peuvent-elles toutes deux compter ?',
                        'explanation' => 'Un financement transfrontalier dépend de plusieurs environnements économiques et réglementaires. L\'analyse doit donc dépasser le seul taux affiché.',
                        'choices' => [
                            ['choice_text' => 'Parce que les taux, la réglementation, les marchés et les risques peuvent différer entre les deux pays', 'is_correct' => true],
                            ['choice_text' => 'Parce que le pays prêteur fixe le taux de change et le pays emprunteur la durée de remboursement du prêt consenti', 'is_correct' => false],
                            ['choice_text' => 'Parce que le pays prêteur supporte en totalité le risque de défaut de l\'emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les deux pays partagent obligatoirement la même réglementation bancaire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Entreprises multinationales et décisions financières',
                'description' => 'Analyser les choix simples d\'une entreprise présente dans plusieurs pays : prix, trésorerie, investissement et remontée des bénéfices.',
                'questions' => [
                    [
                        'question' => 'Une multinationale vend un produit en France, au Maroc et au Mexique. Pourquoi le directeur financier ne peut-il pas analyser seulement le chiffre d\'affaires total en une seule monnaie ?',
                        'explanation' => 'La consolidation donne une vue globale, mais la décision financière exige aussi une lecture par marché, par devise et par niveau de risque.',
                        'choices' => [
                            ['choice_text' => 'Parce que la consolidation en une monnaie commune est interdite par les normes comptables internationales', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffre d\'affaires ne se mesure que dans la monnaie du marché le plus important', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il doit aussi comprendre les marges, les monnaies et les conditions propres à chaque marché', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ventes réalisées en France comptent seules pour évaluer la performance du groupe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale étrangère dispose d\'un excédent de trésorerie temporaire. Quelle question du siège est naturelle ?',
                        'explanation' => 'Une bonne gestion de trésorerie internationale cherche à placer ou centraliser les excédents tout en respectant les besoins opérationnels et les contraintes locales.',
                        'choices' => [
                            ['choice_text' => 'Faut-il convertir cet excédent en actions de la maison mère avant la fin de l\'exercice ?', 'is_correct' => false],
                            ['choice_text' => 'Faut-il distribuer l\'excédent aux salariés de la filiale sous forme de primes exceptionnelles versées en fin d\'année ?', 'is_correct' => false],
                            ['choice_text' => 'Faut-il conserver la trésorerie localement ou la centraliser, compte tenu des besoins et contraintes ?', 'is_correct' => true],
                            ['choice_text' => 'Faut-il transformer l\'excédent en immobilisations avant la fin de l\'exercice ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise constate qu\'une filiale étrangère affiche une belle croissance des ventes mais génère peu de cash. Quelle conclusion faut-il éviter ?',
                        'explanation' => 'Une activité en croissance peut consommer du cash si les stocks, créances ou investissements augmentent rapidement. Le chiffre d\'affaires seul ne suffit pas.',
                        'choices' => [
                            ['choice_text' => 'Étudier le besoin en fonds de roulement pour comprendre l\'écart entre les ventes et le cash disponible', 'is_correct' => false],
                            ['choice_text' => 'Confondre automatiquement croissance du chiffre d\'affaires et amélioration de la trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Analyser les délais de paiement accordés aux clients de la filiale étrangère', 'is_correct' => false],
                            ['choice_text' => 'Examiner le niveau des investissements réalisés pour soutenir cette croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société internationale paie un fournisseur américain en dollars tous les mois. Les paiements sont réguliers et prévisibles. Quel avantage peut apporter une politique de couverture bien structurée ?',
                        'explanation' => 'La couverture vise d\'abord à réduire l\'incertitude. Elle ne garantit pas systématiquement un gain par rapport au marché spot futur.',
                        'choices' => [
                            ['choice_text' => 'Une réduction du montant en dollars facturé par le fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un gain par rapport au cours au comptant observé à chaque échéance', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure visibilité sur le coût futur en monnaie domestique', 'is_correct' => true],
                            ['choice_text' => 'Une suppression du risque de crédit lié au fournisseur américain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale réalise des bénéfices, mais conserve presque tout pour financer son expansion. Du point de vue du groupe, que faut-il comprendre ?',
                        'explanation' => 'Une filiale peut choisir de réinvestir ses bénéfices afin de soutenir sa croissance. Le groupe arbitre alors entre réinvestissement local et remontée de liquidités.',
                        'choices' => [
                            ['choice_text' => 'Les bénéfices non distribués sont comptabilisés comme une dette de la filiale envers le siège', 'is_correct' => false],
                            ['choice_text' => 'Les bénéfices réinvestis sont retirés du résultat consolidé du groupe pour l\'exercice', 'is_correct' => false],
                            ['choice_text' => 'Les bénéfices peuvent rester investis localement au lieu d\'être versés immédiatement au siège', 'is_correct' => true],
                            ['choice_text' => 'Les bénéfices conservés par la filiale doivent être redistribués au siège dès l\'exercice suivant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un groupe international surveille-t-il les transactions entre ses propres filiales situées dans différents pays ?',
                        'explanation' => 'Les flux intragroupe ont des effets sur les résultats, la trésorerie, les devises et les obligations de conformité. Ils nécessitent donc une gouvernance rigoureuse.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elles servent à calculer le cours de l\'action de la maison mère sur le marché boursier', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles sont exemptes de toute règle fiscale tant que les filiales appartiennent au même groupe international', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles déterminent le taux d\'intérêt directeur des banques centrales des pays concernés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles peuvent influencer la trésorerie, les résultats, les devises et la conformité du groupe', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut augmenter ses ventes à l\'étranger en accordant des délais de paiement très longs. Quel risque financier peut augmenter ?',
                        'explanation' => 'Des délais de paiement plus longs peuvent retarder les encaissements et augmenter les besoins de trésorerie. Le risque de crédit peut également devenir plus important.',
                        'choices' => [
                            ['choice_text' => 'Le besoin de financement du cycle d\'exploitation et le risque d\'impayé', 'is_correct' => true],
                            ['choice_text' => 'Le coût des immobilisations et le risque de change sur les machines importées', 'is_correct' => false],
                            ['choice_text' => 'Le montant du capital social et le risque de dilution des actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'imposition des bénéfices et le risque de contrôle fiscal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale étrangère achète ses matières premières dans sa monnaie locale mais vend surtout en euros. Que faut-il surveiller ?',
                        'explanation' => 'Les coûts sont supportés dans une devise et les recettes dans une autre. Les mouvements de change peuvent donc modifier la marge même si les prix locaux restent stables.',
                        'choices' => [
                            ['choice_text' => 'Le niveau du taux d\'intérêt directeur de la zone euro', 'is_correct' => false],
                            ['choice_text' => 'La part des salaires dans le coût de revient du produit', 'is_correct' => false],
                            ['choice_text' => 'L\'effet des variations EUR/devise locale sur la marge', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de fournisseurs de matières premières dans le pays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un groupe hésite entre augmenter les prix dans un marché étranger et conserver ses prix actuels. Quelle information financière est particulièrement utile pour décider ?',
                        'explanation' => 'Une décision de prix internationale doit relier comportement des clients, structure de coûts et rentabilité. Le taux de change peut également influencer le résultat final.',
                        'choices' => [
                            ['choice_text' => 'Le rendement des obligations d\'État dans le pays, la dette publique et le taux de chômage', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de filiales du groupe, leur ancienneté et la composition de leur conseil', 'is_correct' => false],
                            ['choice_text' => 'L\'élasticité de la demande, les coûts, la concurrence et la marge attendue', 'is_correct' => true],
                            ['choice_text' => 'Le cours de l\'action de la maison mère, son dividende et sa notation financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation montre le mieux une mauvaise gestion du risque de change ?',
                        'explanation' => 'Ignorer une exposition identifiée peut transformer une variation de change en surprise financière importante. La surveillance et la couverture éventuelle sont des outils de gestion.',
                        'choices' => [
                            ['choice_text' => 'Une entreprise mesure chaque mois son exposition nette en devises et compare plusieurs scénarios de change possibles', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise ignore pendant des mois une dette en devise alors que ses revenus sont dans une autre devise', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise emprunte dans la devise dans laquelle elle encaisse la majorité de ses revenus', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise rapproche les dates et les montants de ses encaissements et décaissements en devises', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Marchés de capitaux internationaux',
                'description' => 'Découvrir les principales formes d\'accès aux marchés de capitaux étrangers et les questions qu\'elles soulèvent pour une entreprise.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise peut-elle chercher à lever des fonds sur un marché étranger plutôt que sur son seul marché domestique ?',
                        'explanation' => 'L\'internationalisation du financement peut élargir le bassin d\'investisseurs et offrir des alternatives de coût, de maturité ou de devise.',
                        'choices' => [
                            ['choice_text' => 'Pour échapper aux obligations d\'information financière imposées par son marché d\'origine aux sociétés cotées', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir un financement dont le coût ne dépend pas de sa situation financière', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire sa dette en bénéficiant d\'un taux de change favorable sur le capital emprunté', 'is_correct' => false],
                            ['choice_text' => 'Pour accéder à une base plus large d\'investisseurs ou à des conditions de financement différentes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise émet une obligation en dollars alors que ses recettes sont majoritairement en euros. Quel risque supplémentaire apparaît ?',
                        'explanation' => 'Les intérêts et le principal seront servis en dollars, alors que les recettes sont en euros. La conversion peut donc faire varier le coût réel de la dette.',
                        'choices' => [
                            ['choice_text' => 'Un risque de remboursement du capital avant l\'échéance prévue', 'is_correct' => false],
                            ['choice_text' => 'Une dépendance au taux de croissance du produit intérieur brut américain', 'is_correct' => false],
                            ['choice_text' => 'Une exposition au taux de change entre le dollar et l\'euro', 'is_correct' => true],
                            ['choice_text' => 'Un risque d\'illiquidité lié à la taille du marché obligataire américain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète une obligation d\'une entreprise étrangère. Outre le risque de marché, quel élément spécifique doit-il considérer ?',
                        'explanation' => 'L\'investissement transfrontalier peut être affecté par la solvabilité de l\'émetteur, le contexte du pays et les mouvements de change.',
                        'choices' => [
                            ['choice_text' => 'Le risque lié à la date de publication des comptes de l\'émetteur', 'is_correct' => false],
                            ['choice_text' => 'Le risque lié au pays et à la devise de l\'investissement', 'is_correct' => true],
                            ['choice_text' => 'Le risque lié au nombre de contrats commerciaux de l\'émetteur', 'is_correct' => false],
                            ['choice_text' => 'Le risque lié à la forme juridique de la société émettrice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise emprunte à un taux fixe sur un marché étranger. Quel avantage apporte principalement le taux fixe ?',
                        'explanation' => 'Le taux fixe stabilise le montant des intérêts selon les modalités du contrat. Il ne supprime ni le risque de crédit, ni, le cas échéant, le risque de change.',
                        'choices' => [
                            ['choice_text' => 'Une meilleure visibilité sur les intérêts à payer', 'is_correct' => true],
                            ['choice_text' => 'Un coût de la dette inférieur à celui d\'un taux variable', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du risque de crédit de l\'emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Une protection contre la hausse du taux de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise compare deux obligations du même émetteur, l\'une en EUR et l\'autre en USD. Pourquoi ne faut-il pas regarder uniquement le coupon ?',
                        'explanation' => 'Le coupon est un élément du rendement, mais le prix payé, la maturité et les caractéristiques de la devise influencent également le résultat de l\'investisseur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il faut considérer le prix, la maturité, le rendement et la devise', 'is_correct' => true],
                            ['choice_text' => 'Parce que le coupon est fixé par la banque centrale de la zone d\'émission', 'is_correct' => false],
                            ['choice_text' => 'Parce que seule la devise détermine la différence de rendement entre deux obligations', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coupon n\'est versé qu\'à l\'échéance pour les obligations étrangères', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société décide d\'émettre des obligations à l\'étranger afin de financer une acquisition internationale. Quel risque doit-elle suivre après l\'émission ?',
                        'explanation' => 'Après l\'émission, la dette doit être servie. Les coûts d\'intérêt, la maturité, le change et le refinancement potentiel restent donc importants.',
                        'choices' => [
                            ['choice_text' => 'Le prix de l\'action de l\'émetteur, qui détermine le montant des intérêts à verser', 'is_correct' => false],
                            ['choice_text' => 'La notation des obligations de ses concurrents, qui fixe le coupon des titres déjà émis', 'is_correct' => false],
                            ['choice_text' => 'La fiscalité des investisseurs étrangers, qui modifie le capital à rembourser à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Le respect des échéances, le coût de la dette et les éventuelles expositions de change ou de taux', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que cherche principalement un investisseur lorsqu\'il compare le rendement d\'une obligation étrangère à son niveau de risque ?',
                        'explanation' => 'Le rendement demandé doit être mis en regard des risques de crédit, de taux, de change et du contexte du marché concerné.',
                        'choices' => [
                            ['choice_text' => 'À apprécier si la rémunération potentielle est cohérente avec les risques supportés', 'is_correct' => true],
                            ['choice_text' => 'À vérifier que le rendement affiché correspond au taux d\'inflation du pays émetteur', 'is_correct' => false],
                            ['choice_text' => 'À déterminer la date exacte à laquelle l\'émetteur remboursera le capital', 'is_correct' => false],
                            ['choice_text' => 'À mesurer la part de l\'obligation détenue par les investisseurs locaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a besoin de dollars pour construire une usine aux États-Unis, mais sa trésorerie disponible est en euros. Quelle solution est naturelle ?',
                        'explanation' => 'Le projet nécessite des dépenses en USD. L\'entreprise doit donc organiser sa conversion ou son financement en tenant compte du risque de change et du coût associé.',
                        'choices' => [
                            ['choice_text' => 'Reporter la conversion jusqu\'à la fin du chantier, sans tenir compte du cours du dollar', 'is_correct' => false],
                            ['choice_text' => 'Convertir ou financer le besoin en dollars, en tenant compte du coût et du risque de change', 'is_correct' => true],
                            ['choice_text' => 'Emprunter en livres sterling pour payer les dépenses en dollars sans conversion', 'is_correct' => false],
                            ['choice_text' => 'Attendre que le dollar atteigne un cours jugé avantageux avant de lancer la construction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité d\'un marché de capitaux intéresse-t-elle un investisseur ?',
                        'explanation' => 'La liquidité facilite les transactions et peut réduire le coût de sortie d\'une position. Elle ne garantit toutefois pas la performance du placement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'un marché plus liquide offre un rendement plus élevé aux investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un marché plus liquide facilite généralement l\'achat et la vente des titres', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'un marché plus liquide réduit le risque de défaut des émetteurs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un marché plus liquide impose des taux de change fixes aux devises échangées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Exposition de change dans les opérations internationales',
                'description' => 'Repérer les expositions de change les plus courantes et comprendre leur effet sur les recettes, les coûts et les dettes.',
                'questions' => [
                    [
                        'question' => 'Une entreprise facture un client japonais en JPY et enregistre ses comptes en EUR. Si le yen se déprécie avant le paiement, quel effet peut apparaître ?',
                        'explanation' => 'Une dépréciation du yen par rapport à l\'euro réduit la valeur en euros d\'un montant fixe de JPY, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'La valeur de la créance convertie en euros peut diminuer', 'is_correct' => true],
                            ['choice_text' => 'La valeur de la créance en euros augmente obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'La créance disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d\'affaires devient juridiquement nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une dette en USD et encaisse surtout en USD. Pourquoi cette situation peut-elle réduire une partie de son exposition nette au change ?',
                        'explanation' => 'Lorsque les encaissements et décaissements sont dans la même devise et sur des horizons comparables, l\'exposition nette peut être moindre.',
                        'choices' => [
                            ['choice_text' => 'Le dollar est une monnaie de réserve dont la valeur est fixée par accord international', 'is_correct' => false],
                            ['choice_text' => 'Les dettes en devise sont exclues du calcul de l\'exposition nette de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les entrées et sorties dans la même devise peuvent se compenser partiellement', 'is_correct' => true],
                            ['choice_text' => 'Les intérêts d\'une dette en dollars sont inférieurs à ceux d\'une dette en monnaie locale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une facture de 50 000 USD doit être réglée dans trois mois. Pourquoi le responsable financier peut-il s\'inquiéter même si le montant en dollars est déjà connu ?',
                        'explanation' => 'Le montant en USD est connu, mais son équivalent en MAD dépendra du taux de change futur.',
                        'choices' => [
                            ['choice_text' => 'Parce que le nombre de dirhams nécessaires pour acheter les dollars n\'est pas encore certain', 'is_correct' => true],
                            ['choice_text' => 'Parce que le fournisseur peut modifier le montant en dollars facturé avant l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Parce que le dirham ne peut pas être échangé contre des dollars avant trois mois', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux d\'intérêt de la facture sera révisé à la date du paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond le mieux à une exposition économique au change ?',
                        'explanation' => 'L\'exposition économique concerne l\'effet plus large du change sur la compétitivité, les ventes, les coûts et les flux futurs d\'une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Une variation durable de change rend les produits d\'une filiale étrangère plus ou moins compétitifs', 'is_correct' => true],
                            ['choice_text' => 'Une filiale convertit en euros le bénéfice de l\'année pour établir les comptes consolidés', 'is_correct' => false],
                            ['choice_text' => 'Une facture en dollars doit être réglée dans trois mois à un taux encore inconnu', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise paie des intérêts plus élevés après une hausse des taux directeurs locaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit 80 000 GBP. Si 1 GBP vaut 11 MAD, combien cela représente-t-il avant frais ?',
                        'explanation' => 'On calcule 80 000 × 11 = 880 000 MAD. Le calcul suppose un taux direct de 11 MAD pour 1 GBP et aucun frais.',
                        'choices' => [
                            ['choice_text' => '7 272 MAD', 'is_correct' => false],
                            ['choice_text' => '88 000 MAD', 'is_correct' => false],
                            ['choice_text' => '880 000 MAD', 'is_correct' => true],
                            ['choice_text' => '1 080 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise sait qu\'elle encaissera des dollars chaque mois pendant six mois. Quel premier travail simple doit-elle faire avant de choisir une couverture ?',
                        'explanation' => 'On ne peut pas gérer correctement un risque sans savoir combien sera exposé, dans quelle direction et à quelles dates.',
                        'choices' => [
                            ['choice_text' => 'Comparer les taux d\'intérêt proposés par plusieurs banques de la place', 'is_correct' => false],
                            ['choice_text' => 'Mesurer les montants, les dates et le sens de son exposition', 'is_correct' => true],
                            ['choice_text' => 'Choisir l\'instrument dont la banque réclame le moins de frais', 'is_correct' => false],
                            ['choice_text' => 'Prévoir le niveau du taux de change à la fin des six mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise exporte en USD et constate une forte baisse du dollar face à sa monnaie de référence. Quel impact est plausible sur ses recettes converties ?',
                        'explanation' => 'Si le dollar vaut moins dans la monnaie de référence, le même montant de ventes en USD se convertit en moins de monnaie domestique.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent progresser en raison de la baisse du dollar', 'is_correct' => false],
                            ['choice_text' => 'Elles sont protégées par la facturation en dollars, qui fixe leur valeur', 'is_correct' => false],
                            ['choice_text' => 'Elles ne dépendent que du volume vendu et non du taux de change', 'is_correct' => false],
                            ['choice_text' => 'Elles peuvent diminuer dans la monnaie de référence', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une variation de change peut-elle affecter une entreprise qui ne fait pas de commerce international directement ?',
                        'explanation' => 'Une entreprise peut subir indirectement l\'effet du change via ses fournisseurs, ses matières premières ou la concurrence étrangère, même sans facture internationale directe.',
                        'choices' => [
                            ['choice_text' => 'Non, car l\'exposition au change ne concerne que les entreprises qui facturent en devises', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais l\'effet se limite aux entreprises cotées en bourse à l\'étranger', 'is_correct' => false],
                            ['choice_text' => 'Non, car les prix des matières premières sont fixés en monnaie locale par les États', 'is_correct' => false],
                            ['choice_text' => 'Oui, par exemple si ses fournisseurs ou matières premières dépendent des prix internationaux', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle distinguer une exposition certaine d\'une exposition simplement probable ?',
                        'explanation' => 'Une facture déjà signée n\'a pas le même degré de certitude qu\'une vente seulement prévue. Cette différence peut influencer la stratégie de couverture.',
                        'choices' => [
                            ['choice_text' => 'Parce que les expositions probables doivent être comptabilisées au bilan au même titre que les créances', 'is_correct' => false],
                            ['choice_text' => 'Parce que seule une exposition certaine peut être couverte par un contrat avec une banque', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant, la date et la certitude du flux influencent le choix de gestion du risque', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'exposition probable est supportée par les clients et non par l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale reçoit des recettes en dollars mais paie ses salariés et fournisseurs en monnaie locale. Où se trouve l\'exposition principale ?',
                        'explanation' => 'La filiale reçoit une devise et dépense une autre. Son résultat et sa trésorerie dépendent donc de la relation entre ces deux monnaies.',
                        'choices' => [
                            ['choice_text' => 'Dans la conversion entre les dollars reçus et la monnaie locale nécessaire pour payer les charges', 'is_correct' => true],
                            ['choice_text' => 'Dans la différence entre le chiffre d\'affaires et le résultat net publié par la filiale', 'is_correct' => false],
                            ['choice_text' => 'Dans le délai entre la signature du contrat de vente et la livraison des marchandises', 'is_correct' => false],
                            ['choice_text' => 'Dans le rapport entre les salaires versés et le nombre de salariés de la filiale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut protéger une créance future en devise contre une baisse défavorable de cette devise. L\'objectif de la couverture est surtout de :',
                        'explanation' => 'Une couverture a d\'abord un objectif de maîtrise du risque. Elle vise à rendre le résultat plus prévisible plutôt qu\'à promettre un taux meilleur que toutes les alternatives.',
                        'choices' => [
                            ['choice_text' => 'Faire un gain sur l\'évolution du taux de change entre la facture et l\'encaissement', 'is_correct' => false],
                            ['choice_text' => 'Réduire le montant de la créance inscrite au bilan de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Faire supporter le risque de change au client en modifiant le prix de la facture', 'is_correct' => false],
                            ['choice_text' => 'Réduire l\'incertitude sur la valeur future de la créance dans la monnaie de référence', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Financement et risque des projets transfrontaliers',
                'description' => 'Petites situations d\'entreprise pour relier investissement international, financement, risque et rentabilité.',
                'questions' => [
                    [
                        'question' => 'Un groupe prévoit d\'investir 5 millions EUR dans une usine à l\'étranger. Le projet devrait générer des flux réguliers pendant plusieurs années. Quelle information manque encore pour juger la qualité financière du projet ?',
                        'explanation' => 'Un montant investi ne suffit pas. La décision dépend des flux futurs, de leur incertitude, du financement et des éventuels effets de change ou de pays.',
                        'choices' => [
                            ['choice_text' => 'Le nombre d\'employés prévu et le calendrier de construction de l\'usine', 'is_correct' => false],
                            ['choice_text' => 'La surface du terrain et le prix d\'achat des machines de production', 'is_correct' => false],
                            ['choice_text' => 'Le nom de la société locale chargée de la construction et sa notoriété', 'is_correct' => false],
                            ['choice_text' => 'Le profil des flux de trésorerie, leur risque et le mode de financement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le projet A offre un rendement attendu de 9 % et le projet B 9,5 %. B se situe toutefois dans un pays beaucoup plus risqué. Que faut-il éviter de faire ?',
                        'explanation' => 'Le rendement doit être apprécié avec le risque supporté. Un rendement légèrement supérieur peut être insuffisant si les risques supplémentaires sont importants.',
                        'choices' => [
                            ['choice_text' => 'Analyser le risque pays de B avant de comparer les rendements attendus des deux projets', 'is_correct' => false],
                            ['choice_text' => 'Choisir B uniquement parce que son rendement attendu est légèrement plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Comparer les deux projets à l\'aide de plusieurs scénarios de change et de ventes', 'is_correct' => false],
                            ['choice_text' => 'Examiner les conditions de financement disponibles pour chacun des deux pays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut financer une acquisition au Royaume-Uni avec des revenus futurs en livres sterling. Quelle logique de financement peut être cohérente ?',
                        'explanation' => 'Faire correspondre les devises de financement et de flux peut réduire l\'exposition nette. Cela reste une décision à analyser selon le coût de financement.',
                        'choices' => [
                            ['choice_text' => 'Financer la totalité du projet en euros pour simplifier le suivi comptable du groupe', 'is_correct' => false],
                            ['choice_text' => 'Financer en dollars, devise la plus utilisée sur les marchés de capitaux internationaux', 'is_correct' => false],
                            ['choice_text' => 'Emprunter dans la devise offrant le taux d\'intérêt le plus bas sans regarder celle des flux', 'is_correct' => false],
                            ['choice_text' => 'Financer une partie en GBP afin d\'aligner la dette sur une partie des flux futurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une filiale étrangère prévoit une forte croissance et demande davantage de fonds de roulement. Pourquoi le siège doit-il regarder le cycle d\'exploitation ?',
                        'explanation' => 'La croissance peut mobiliser du cash avant les encaissements clients, notamment si les stocks et créances augmentent plus vite que les dettes fournisseurs.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ventes en croissance font baisser les besoins de financement du cycle d\'exploitation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une hausse des ventes peut augmenter les besoins liés aux stocks et créances', 'is_correct' => true],
                            ['choice_text' => 'Parce que le cycle d\'exploitation détermine le taux de change appliqué aux ventes de la filiale', 'is_correct' => false],
                            ['choice_text' => 'Parce que la croissance des ventes réduit mécaniquement les délais de paiement des clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise une simulation où la monnaie locale se déprécie de 15 %. Quel est l\'intérêt principal de ce scénario ?',
                        'explanation' => 'Un scénario sert à tester la robustesse d\'une décision face à une hypothèse défavorable. Il ne constitue pas une prédiction certaine.',
                        'choices' => [
                            ['choice_text' => 'Mesurer l\'effet potentiel d\'un choc de change sur les flux et la rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Déterminer le taux de change qui sera appliqué au moment de la conversion finale', 'is_correct' => false],
                            ['choice_text' => 'Obtenir une couverture gratuite contre la dépréciation de la monnaie locale', 'is_correct' => false],
                            ['choice_text' => 'Démontrer que le projet reste rentable quel que soit le niveau du taux de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise signe un contrat international de cinq ans mais ses coûts sont majoritairement locaux. Quel point doit-elle réexaminer régulièrement ?',
                        'explanation' => 'Sur une période longue, les relations entre les devises peuvent évoluer fortement et modifier la rentabilité du contrat.',
                        'choices' => [
                            ['choice_text' => 'L\'effet des variations de change sur ses marges au fil du temps', 'is_correct' => true],
                            ['choice_text' => 'La date d\'entrée en vigueur des normes comptables du pays du client', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de clients potentiels du même secteur dans le pays', 'is_correct' => false],
                            ['choice_text' => 'Le coût de renouvellement du matériel informatique du siège', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet international semble rentable avant financement, mais les intérêts de la dette réduisent fortement le cash disponible. Quelle distinction faut-il garder en tête ?',
                        'explanation' => 'Le projet peut être attractif économiquement mais avoir un financement trop coûteux ou trop risqué. Les deux analyses doivent être séparées puis réunies dans la décision.',
                        'choices' => [
                            ['choice_text' => 'La rentabilité du projet est entièrement déterminée par la structure de financement choisie', 'is_correct' => false],
                            ['choice_text' => 'Un projet rentable avant financement ne peut pas devenir déficitaire après paiement des intérêts', 'is_correct' => false],
                            ['choice_text' => 'Le financement par dette augmente la valeur créée par le projet quel que soit son coût', 'is_correct' => false],
                            ['choice_text' => 'La performance économique du projet et le coût de son financement ne sont pas la même chose', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur veut comparer un projet domestique et un projet étranger. Quelle approche est la plus prudente ?',
                        'explanation' => 'La comparaison doit être homogène : mêmes principes de mesure des flux, prise en compte des risques et traitement cohérent des devises.',
                        'choices' => [
                            ['choice_text' => 'Comparer les flux attendus, les risques et les hypothèses dans une base cohérente', 'is_correct' => true],
                            ['choice_text' => 'Retenir le projet dont le rendement comptable affiché est le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Convertir les flux étrangers au taux du jour de la décision sans tenir compte des risques', 'is_correct' => false],
                            ['choice_text' => 'Appliquer le même taux d\'actualisation aux deux projets malgré leurs risques différents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un contrat de change à terme ?',
                        'explanation' => 'Un contrat de change à terme permet de connaître à l\'avance le taux d\'une opération future en devises. Il réduit l\'incertitude, mais ne promet pas un taux meilleur que celui du marché à l\'échéance.',
                        'choices' => [
                            ['choice_text' => 'Un accord par lequel la banque centrale s\'engage à maintenir son taux de change à un niveau donné', 'is_correct' => false],
                            ['choice_text' => 'Un accord qui fixe dès aujourd\'hui le taux auquel deux devises seront échangées à une date future', 'is_correct' => true],
                            ['choice_text' => 'Un échange de devises réalisé immédiatement au taux affiché sur le marché au comptant', 'is_correct' => false],
                            ['choice_text' => 'Un prêt en devise dont le remboursement est indexé sur le cours à la date d\'échéance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Décisions financières dans un groupe international',
                'description' => 'Situations courantes de pilotage : trésorerie, prix, dette, dividendes et arbitrages entre filiales.',
                'questions' => [
                    [
                        'question' => 'Le groupe A possède deux filiales : l\'une génère régulièrement du cash en USD, l\'autre doit payer des dépenses importantes en USD. Quelle idée de gestion de trésorerie peut être étudiée ?',
                        'explanation' => 'Le rapprochement des flux dans une même devise peut réduire certains besoins de conversion et améliorer l\'utilisation de la liquidité au niveau du groupe.',
                        'choices' => [
                            ['choice_text' => 'Faire convertir par chaque filiale ses dollars en monnaie locale avant tout paiement', 'is_correct' => false],
                            ['choice_text' => 'Interdire tout paiement entre les deux filiales pour conserver leurs comptes séparés', 'is_correct' => false],
                            ['choice_text' => 'Centraliser ou compenser certains flux en USD lorsque cela est possible', 'is_correct' => true],
                            ['choice_text' => 'Placer l\'excédent en dollars sur un compte bloqué jusqu\'à la fin de l\'exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale étrangère propose de distribuer un dividende exceptionnel. Quelle question du siège est essentielle avant de décider ?',
                        'explanation' => 'Verser un dividende réduit le cash disponible dans la filiale. Il faut donc vérifier les besoins futurs, le fonds de roulement et les investissements.',
                        'choices' => [
                            ['choice_text' => 'Le dividende exceptionnel peut-il être comptabilisé comme une charge d\'exploitation de la filiale ?', 'is_correct' => false],
                            ['choice_text' => 'La filiale a-t-elle encore assez de liquidité pour financer son activité et ses investissements prévus ?', 'is_correct' => true],
                            ['choice_text' => 'Le siège doit-il convertir ce dividende en actions de la filiale avant de le recevoir ?', 'is_correct' => false],
                            ['choice_text' => 'Le dividende doit-il être réparti à parts égales entre les filiales du groupe ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on la consolidation des comptes d\'un groupe international ?',
                        'explanation' => 'La consolidation présente les comptes du groupe comme ceux d\'une seule entité, en éliminant notamment les opérations internes. Les comptes des filiales étrangères sont convertis dans la monnaie du groupe.',
                        'choices' => [
                            ['choice_text' => 'La fusion juridique de la société mère et de ses filiales en une seule société immatriculée', 'is_correct' => false],
                            ['choice_text' => 'L\'addition des seuls bénéfices des filiales, sans tenir compte des comptes de la société mère', 'is_correct' => false],
                            ['choice_text' => 'La conversion des dettes des filiales en capital social de la société mère à la clôture', 'is_correct' => false],
                            ['choice_text' => 'Le regroupement des comptes de la mère et des filiales comme ceux d\'une seule entité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut acheter 1 500 000 USD pour régler une acquisition. Si 1 USD = 9,8 MAD, quel montant en dirhams faut-il prévoir ?',
                        'explanation' => '1 500 000 × 9,8 = 14 700 000 MAD. Cette estimation ne tient pas compte des frais de transaction ou d\'une éventuelle variation du taux.',
                        'choices' => [
                            ['choice_text' => '153 061 MAD', 'is_correct' => false],
                            ['choice_text' => '1 509 800 MAD', 'is_correct' => false],
                            ['choice_text' => '14 700 000 MAD', 'is_correct' => true],
                            ['choice_text' => '14 850 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale étrangère affiche une marge de 12 % contre 10 % pour le reste du groupe. Pourquoi cette comparaison doit-elle être interprétée avec prudence ?',
                        'explanation' => 'La comparaison est utile, mais elle doit tenir compte du contexte de chaque marché, des différences de coût, de fiscalité et des effets de change.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'une marge de 12 % est supérieure à 10 % et prouve que la filiale est mieux gérée', 'is_correct' => false],
                            ['choice_text' => 'Parce que la marge d\'une filiale étrangère est calculée avant impôts et celle du groupe après impôts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les marges ne se comparent qu\'entre sociétés cotées sur la même bourse', 'is_correct' => false],
                            ['choice_text' => 'Parce que les monnaies, coûts, fiscalité, structure de marché et méthodes de mesure peuvent différer', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise envisage de laisser un excédent de cash à l\'étranger pour trois mois. Quel point pratique est pertinent ?',
                        'explanation' => 'Même pour quelques mois, la trésorerie doit rester disponible au bon moment et le risque doit être compatible avec l\'objectif du groupe.',
                        'choices' => [
                            ['choice_text' => 'Comparer le rendement disponible, la liquidité, le risque et les éventuelles contraintes de transfert', 'is_correct' => true],
                            ['choice_text' => 'Retenir le placement affichant le taux le plus élevé sans comparer les autres critères', 'is_correct' => false],
                            ['choice_text' => 'Négliger la liquidité puisque l\'horizon du placement est limité à trois mois', 'is_correct' => false],
                            ['choice_text' => 'Considérer qu\'un placement à court terme ne comporte pas de risque de change ni de crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un groupe compare-t-il le rendement attendu d\'un projet étranger au coût du financement mobilisé ?',
                        'explanation' => 'Un projet crée de la valeur lorsque son rendement attendu dépasse le coût des ressources utilisées pour le financer, compte tenu de son niveau de risque.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que le chiffre d\'affaires du projet dépasse celui de la société mère du groupe sur l\'exercice', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que le projet rapporte davantage que ce que coûte le financement mobilisé pour le réaliser', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer le taux de change à utiliser lors de la consolidation des comptes du groupe', 'is_correct' => false],
                            ['choice_text' => 'Pour répartir le coût de la dette entre les filiales selon la taille de leur effectif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise conserve une forte trésorerie locale dans plusieurs pays sans politique de suivi commune. Quel problème peut apparaître au niveau du groupe ?',
                        'explanation' => 'Des excédents dispersés peuvent coexister avec des besoins de financement ailleurs dans le groupe. Une vision consolidée améliore l\'allocation de la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Une obligation de distribuer l\'ensemble des excédents aux actionnaires du groupe', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité pour les filiales de placer leur cash dans des banques locales', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du besoin de couverture de change dans l\'ensemble des pays', 'is_correct' => false],
                            ['choice_text' => 'Une visibilité insuffisante sur la liquidité totale et une utilisation inefficace du cash', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit 300 000 EUR et paie 220 000 EUR dans la même devise sur une période similaire. Quel montant reste théoriquement exposé avant autres flux ?',
                        'explanation' => 'L\'exposition nette simplifiée est 300 000 - 220 000 = 80 000 EUR, en supposant que les dates de flux sont suffisamment proches et qu\'aucun autre élément n\'intervient.',
                        'choices' => [
                            ['choice_text' => '80 000 EUR', 'is_correct' => true],
                            ['choice_text' => '220 000 EUR', 'is_correct' => false],
                            ['choice_text' => '300 000 EUR', 'is_correct' => false],
                            ['choice_text' => '520 000 EUR', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une multinationale constate que sa dette externe arrive à échéance en pleine période de faiblesse du marché du crédit. Quel risque doit-elle anticiper ?',
                        'explanation' => 'Une échéance importante oblige à refinancer ou rembourser la dette. Si les marchés sont tendus, le nouveau coût peut être plus élevé ou l\'accès plus difficile.',
                        'choices' => [
                            ['choice_text' => 'Le risque de change sur les dividendes reçus des filiales', 'is_correct' => false],
                            ['choice_text' => 'Le risque de refinancement à des conditions moins favorables', 'is_correct' => true],
                            ['choice_text' => 'Le risque de défaut des clients de ses filiales étrangères', 'is_correct' => false],
                            ['choice_text' => 'Le risque d\'une hausse du capital social imposée par les créanciers', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cas pratiques de finance internationale',
                'description' => 'Une dernière série de mini-cas pour consolider les réflexes de base en investissement, financement, change et risque pays.',
                'questions' => [
                    [
                        'question' => 'Une PME marocaine signe un contrat avec un client américain. Elle doit recevoir 200 000 USD dans 60 jours. Le dirigeant veut savoir combien cela représentera en dirhams. Quelle donnée lui manque ?',
                        'explanation' => 'Le montant en USD est connu, mais sa valeur en MAD dépend du taux de conversion. Sur 60 jours, celui-ci peut évoluer.',
                        'choices' => [
                            ['choice_text' => 'Le taux directeur de la banque centrale américaine à la date du contrat', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change USD/MAD applicable au moment de la conversion', 'is_correct' => true],
                            ['choice_text' => 'Le taux d\'inflation moyen des États-Unis sur les 60 prochains jours', 'is_correct' => false],
                            ['choice_text' => 'Le taux de croissance du chiffre d\'affaires du client américain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise envisage deux pays pour construire une usine. Le premier offre une demande forte mais une monnaie très volatile. Le second est plus stable mais plus petit. Quelle est la bonne approche de départ ?',
                        'explanation' => 'La décision doit mettre en regard le potentiel économique et le niveau d\'incertitude. Un marché plus grand n\'est pas automatiquement préférable sans analyse des risques et des flux.',
                        'choices' => [
                            ['choice_text' => 'Retenir le marché le plus grand, car la demande forte compense la volatilité de la monnaie', 'is_correct' => false],
                            ['choice_text' => 'Retenir le pays à monnaie stable, car la stabilité compense la taille réduite du marché', 'is_correct' => false],
                            ['choice_text' => 'Comparer les flux attendus et intégrer explicitement les différences de risque', 'is_correct' => true],
                            ['choice_text' => 'Choisir le pays dont le taux d\'imposition sur les sociétés est le plus faible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit un prêt en euros pour financer une filiale qui génère surtout des revenus en dirhams. Après une forte hausse de l\'euro, qu\'est-ce qui peut se produire ?',
                        'explanation' => 'La dette reste libellée en euros. Si l\'euro s\'apprécie contre le dirham, davantage de dirhams sont nécessaires pour acheter les euros nécessaires au service de la dette.',
                        'choices' => [
                            ['choice_text' => 'Le coût de la dette en dirhams peut diminuer', 'is_correct' => false],
                            ['choice_text' => 'Le coût de la dette en dirhams peut augmenter', 'is_correct' => true],
                            ['choice_text' => 'Le capital à rembourser exprimé en euros peut augmenter', 'is_correct' => false],
                            ['choice_text' => 'Les revenus en dirhams peuvent augmenter dans la même proportion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale étrangère demande de conserver ses bénéfices pour ouvrir un deuxième site. Le siège hésite entre réinvestir et faire remonter l\'argent. Quel arbitrage est au cœur de la décision ?',
                        'explanation' => 'Le groupe doit comparer la valeur créée par le nouvel investissement à la valeur de conserver ou de redistribuer le cash ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Choisir l\'option qui maximise le résultat comptable de l\'exercice en cours', 'is_correct' => false],
                            ['choice_text' => 'Privilégier le versement au siège afin de réduire la taille de la filiale', 'is_correct' => false],
                            ['choice_text' => 'Privilégier le réinvestissement afin d\'éviter tout transfert de fonds entre pays', 'is_correct' => false],
                            ['choice_text' => 'Comparer le rendement attendu du réinvestissement aux autres usages possibles des fonds', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un pays connaît une baisse importante de ses réserves de change et une forte tension sur sa monnaie. Pourquoi cela intéresse-t-il un investisseur étranger ?',
                        'explanation' => 'Des tensions sur les réserves et la monnaie peuvent avoir des conséquences sur le change, le financement externe et, selon le contexte, la capacité de transférer des fonds.',
                        'choices' => [
                            ['choice_text' => 'Parce que cela peut signaler une pression sur la monnaie et les conditions de transfert de fonds', 'is_correct' => true],
                            ['choice_text' => 'Parce que cela indique que la dette publique du pays a été entièrement remboursée', 'is_correct' => false],
                            ['choice_text' => 'Parce que cela signifie que le pays dispose d\'un excédent commercial durable', 'is_correct' => false],
                            ['choice_text' => 'Parce que cela réduit l\'inflation et rend la monnaie plus attractive pour les investisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société a 1 million USD de ventes prévues, mais seulement 40 % sont réellement sécurisées par des commandes signées. Que faut-il retenir pour une stratégie de couverture ?',
                        'explanation' => 'Les commandes fermes donnent une visibilité supérieure aux ventes simplement anticipées. La couverture peut être organisée en fonction du degré de certitude des flux.',
                        'choices' => [
                            ['choice_text' => 'Les 600 000 USD non signés sont plus sûrs que les commandes fermes déjà reçues', 'is_correct' => false],
                            ['choice_text' => 'Les 400 000 USD signés représentent la totalité de l\'exposition de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les 400 000 USD signés offrent une exposition plus certaine que le solde encore incertain', 'is_correct' => true],
                            ['choice_text' => 'Seul le montant signé de 400 000 USD peut être pris en compte dans une prévision de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur trouve une action étrangère très bon marché selon un multiple simple, mais le pays présente de fortes incertitudes politiques. Quelle erreur serait la plus évidente ?',
                        'explanation' => 'Un multiple isolé ne capture pas tous les risques. L\'analyste doit considérer la qualité de l\'actif, la devise, le contexte du pays et les perspectives.',
                        'choices' => [
                            ['choice_text' => 'Regarder les états financiers de l\'entreprise pour vérifier la qualité de ses résultats et son endettement', 'is_correct' => false],
                            ['choice_text' => 'Se fier au seul multiple sans intégrer le risque du pays et les autres caractéristiques de l\'investissement', 'is_correct' => true],
                            ['choice_text' => 'Analyser l\'effet de la devise de cotation sur le rendement en monnaie domestique', 'is_correct' => false],
                            ['choice_text' => 'Étudier plusieurs scénarios de croissance, de change et de risque politique avant de décider', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise exportatrice doit choisir entre accepter une volatilité plus forte du résultat et payer un coût pour réduire cette volatilité. Quel compromis retrouve-t-on ici ?',
                        'explanation' => 'La gestion du risque a souvent un coût. L\'entreprise arbitre entre accepter une partie de la volatilité et payer pour obtenir davantage de visibilité.',
                        'choices' => [
                            ['choice_text' => 'Le compromis entre rendement du projet et durée de la dette', 'is_correct' => false],
                            ['choice_text' => 'Le compromis entre croissance du chiffre d\'affaires et niveau des stocks', 'is_correct' => false],
                            ['choice_text' => 'Le compromis entre coût de couverture et réduction de l\'incertitude', 'is_correct' => true],
                            ['choice_text' => 'Le compromis entre prix de vente et part de marché de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise étrangère rembourse un prêt de 600 000 EUR. Si 1 EUR = 10,5 MAD, quelle est la valeur du remboursement en dirhams ?',
                        'explanation' => '600 000 × 10,5 = 6 300 000 MAD. Le calcul suppose que 10,5 MAD est le taux direct pour 1 EUR et ignore les frais.',
                        'choices' => [
                            ['choice_text' => '57 143 MAD', 'is_correct' => false],
                            ['choice_text' => '630 000 MAD', 'is_correct' => false],
                            ['choice_text' => '6 000 000 MAD', 'is_correct' => false],
                            ['choice_text' => '6 300 000 MAD', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une multinationale découvre que l\'une de ses filiales dépend presque entièrement d\'un seul fournisseur étranger. Quel risque stratégique peut augmenter ?',
                        'explanation' => 'Une forte dépendance peut exposer la filiale à des interruptions, à des hausses de prix ou à des problèmes de change qui affectent les coûts et la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Le risque de taux sur la dette à long terme contractée par la filiale', 'is_correct' => false],
                            ['choice_text' => 'Le risque de liquidité sur les titres cotés détenus par la filiale', 'is_correct' => false],
                            ['choice_text' => 'La dépendance à une chaîne d\'approvisionnement et à un environnement extérieur unique', 'is_correct' => true],
                            ['choice_text' => 'Le risque de dilution des actionnaires minoritaires de la filiale', 'is_correct' => false],
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
