<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BusinessValuationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'business-valuation')->firstOrFail();

        $quizSettings = [
            ['duration' => 24, 'passing_score' => 56],
            ['duration' => 25, 'passing_score' => 58],
            ['duration' => 29, 'passing_score' => 58],
            ['duration' => 27, 'passing_score' => 57],
            ['duration' => 30, 'passing_score' => 60],
            ['duration' => 27, 'passing_score' => 58],
            ['duration' => 29, 'passing_score' => 59],
            ['duration' => 31, 'passing_score' => 61],
            ['duration' => 33, 'passing_score' => 62],
            ['duration' => 24, 'passing_score' => 57],
        ];

        $quizzes = [
            [
                'title' => 'Premiers réflexes en évaluation d\'entreprise',
                'description' => 'Acquérir les repères essentiels pour comprendre ce que l\'on cherche réellement à mesurer lors d\'une valorisation.',
                'questions' => [
                    [
                        'question' => 'Un dirigeant vous demande combien vaut son entreprise avant de négocier avec un investisseur. Que cherche-t-on principalement à estimer ?',
                        'explanation' => 'Une valorisation cherche à estimer une valeur économique à une date donnée. Le prix final d\'une transaction peut ensuite différer selon la négociation, le financement et les conditions du marché.',
                        'choices' => [
                            ['choice_text' => 'La capacité d\'emprunt maximale que les banques accorderaient à l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d\'affaires prévisionnel de la prochaine année selon le budget', 'is_correct' => false],
                            ['choice_text' => 'La valeur économique de l\'entreprise selon les hypothèses retenues', 'is_correct' => true],
                            ['choice_text' => 'Le prix définitif que l\'investisseur acceptera réellement de payer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société réalise 10 M€ de chiffre d\'affaires et 1 M€ d\'EBITDA. Un analyste affirme que la valeur de l\'entreprise est donc de 10 M€. Quel est le problème ?',
                        'explanation' => 'Le chiffre d\'affaires mesure l\'activité, pas directement la valeur. La rentabilité, le risque, la croissance, la dette, les flux de trésorerie et les multiples de marché peuvent tous intervenir.',
                        'choices' => [
                            ['choice_text' => 'Il aurait fallu utiliser l\'EBITDA seul, qui donne directement la valeur de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d\'affaires seul ne permet pas de déterminer la valeur de l\'entreprise', 'is_correct' => true],
                            ['choice_text' => 'Un multiple de 1x le chiffre d\'affaires est une règle fiable quel que soit le secteur', 'is_correct' => false],
                            ['choice_text' => 'Il aurait dû retenir le chiffre d\'affaires moyen des trois dernières années', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux entreprises ont le même chiffre d\'affaires, mais la première génère beaucoup plus de cash avec un niveau de risque comparable. Que peut-on raisonnablement envisager ?',
                        'explanation' => 'À activité comparable, une capacité supérieure à générer des flux de trésorerie peut soutenir une valeur plus élevée. Il faut toutefois regarder aussi la croissance, le risque et le besoin d\'investissement.',
                        'choices' => [
                            ['choice_text' => 'Les deux entreprises ont la même valeur puisque leur chiffre d\'affaires est identique', 'is_correct' => false],
                            ['choice_text' => 'La seconde peut présenter une valeur plus élevée, car un cash flow plus faible réduit le risque', 'is_correct' => false],
                            ['choice_text' => 'La première peut présenter une valeur plus élevée, toutes choses égales par ailleurs', 'is_correct' => true],
                            ['choice_text' => 'Il est impossible de comparer deux entreprises sans connaître leur capitalisation boursière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une transaction, le vendeur annonce 80 M€ et l\'acheteur propose 65 M€. Quelle notion décrit le mieux la situation ?',
                        'explanation' => 'La valeur théorique et le prix effectivement négocié sont deux notions distinctes. Le prix résulte du processus de négociation et des conditions de la transaction.',
                        'choices' => [
                            ['choice_text' => 'Le prix de transaction est encore en cours de négociation', 'is_correct' => true],
                            ['choice_text' => 'La valeur comptable correspond à la moyenne des deux offres', 'is_correct' => false],
                            ['choice_text' => 'Le multiple d\'EBITDA est déjà fixé par la moyenne des deux positions', 'is_correct' => false],
                            ['choice_text' => 'La valeur théorique est égale au prix demandé par le vendeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un analyste indique-t-il souvent une date de valorisation précise, par exemple au 31 décembre ?',
                        'explanation' => 'Une valorisation est une photographie économique à une date de référence. Les données financières, la dette nette et les hypothèses de marché doivent être cohérentes avec cette date.',
                        'choices' => [
                            ['choice_text' => 'Parce que les flux, la dette et les hypothèses disponibles dépendent d\'une date donnée', 'is_correct' => true],
                            ['choice_text' => 'Parce que le capital social est réévalué par la loi à chaque clôture annuelle de l\'exercice comptable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les multiples de marché ne sont publiés qu\'à la clôture de l\'exercice', 'is_correct' => false],
                            ['choice_text' => 'Parce que la formule d\'actualisation impose de raisonner sur une année civile entière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède 2 M€ de trésorerie excédentaire et aucune dette. Dans une approche simple, quel effet cette trésorerie peut-elle avoir sur la valeur des actions ?',
                        'explanation' => 'La valeur d\'entreprise correspond à la valeur des opérations avant certains ajustements de financement. Une trésorerie excédentaire peut ensuite être ajoutée pour passer de l\'enterprise value à l\'equity value.',
                        'choices' => [
                            ['choice_text' => 'Elle diminue l\'equity value, car la trésorerie est assimilée à une dette', 'is_correct' => false],
                            ['choice_text' => 'Elle est sans effet, car seule la dette brute compte dans le passage à l\'equity value', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente l\'enterprise value de 2 M€ sans modifier l\'equity value', 'is_correct' => false],
                            ['choice_text' => 'Elle peut augmenter l\'equity value par rapport à la valeur d\'entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un analyste utilise une valorisation basée sur des hypothèses de croissance et de marges. Quel comportement est le plus professionnel ?',
                        'explanation' => 'Une valorisation est aussi crédible que ses hypothèses. Elles doivent être explicites, cohérentes avec les données disponibles et testées par des scénarios ou sensibilités.',
                        'choices' => [
                            ['choice_text' => 'Choisir les hypothèses qui donnent la valeur la plus élevée sans justification', 'is_correct' => false],
                            ['choice_text' => 'Modifier les résultats pour qu\'ils ressemblent au marché', 'is_correct' => false],
                            ['choice_text' => 'Documenter les hypothèses et vérifier leur cohérence avec l\'activité', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute analyse de sensibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une valorisation produit 45 M€ avec les hypothèses actuelles. Quel terme décrit le mieux ce chiffre ?',
                        'explanation' => 'Un modèle produit une estimation, pas une garantie de prix. Deux analystes peuvent obtenir des résultats différents parce que leurs hypothèses de croissance, de risque ou de multiples diffèrent.',
                        'choices' => [
                            ['choice_text' => 'Un prix de transaction déjà confirmé par les acheteurs potentiels', 'is_correct' => false],
                            ['choice_text' => 'Une valeur comptable reprise telle quelle dans les états financiers', 'is_correct' => false],
                            ['choice_text' => 'Un résultat mesuré à partir des flux de trésorerie effectivement encaissés', 'is_correct' => false],
                            ['choice_text' => 'Une estimation de valeur fondée sur les hypothèses du modèle', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est généralement le plus important à éviter dans un modèle de valorisation ?',
                        'explanation' => 'Une hypothèse isolée peut sembler raisonnable mais devenir problématique si elle contredit d\'autres parties du modèle. La cohérence d\'ensemble est essentielle.',
                        'choices' => [
                            ['choice_text' => 'Des calculs reproductibles et vérifiables', 'is_correct' => false],
                            ['choice_text' => 'Des sources de données bien documentées', 'is_correct' => false],
                            ['choice_text' => 'Des hypothèses incohérentes entre elles', 'is_correct' => true],
                            ['choice_text' => 'Une présentation claire des résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise fortement endettée peut-elle avoir une equity value inférieure à son enterprise value ?',
                        'explanation' => 'Dans une présentation simplifiée, equity value = enterprise value - dette nette, avec des ajustements éventuels. L\'equity value peut donc être sensiblement inférieure à l\'enterprise value.',
                        'choices' => [
                            ['choice_text' => 'Oui, car la dette nette peut être déduite de l\'enterprise value', 'is_correct' => true],
                            ['choice_text' => 'Non, car l\'equity value inclut la dette et dépasse donc l\'enterprise value', 'is_correct' => false],
                            ['choice_text' => 'Non, car les deux valeurs mesurent la même chose et ne diffèrent pas', 'is_correct' => false],
                            ['choice_text' => 'Non, car l\'equity value ne tient compte que des fonds propres comptables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un étudiant compare une entreprise de croissance rapide avec une entreprise mature uniquement sur leur valeur comptable des capitaux propres. Quelle limite apparaît ?',
                        'explanation' => 'La valeur comptable est utile pour certaines analyses mais ne capture pas toujours les actifs incorporels, la croissance future ou les attentes du marché. D\'autres méthodes peuvent être nécessaires.',
                        'choices' => [
                            ['choice_text' => 'La valeur comptable surévalue les entreprises de croissance par rapport au marché', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres d\'une entreprise de croissance ne sont pas publiés dans ses comptes', 'is_correct' => false],
                            ['choice_text' => 'La valeur comptable est calculée à partir des flux futurs, ce qui la rend trop spéculative', 'is_correct' => false],
                            ['choice_text' => 'La valeur comptable ne reflète pas toujours le potentiel économique futur', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Enterprise Value et Equity Value',
                'description' => 'Comprendre la passerelle entre valeur d\'entreprise, dette, trésorerie et valeur revenant aux actionnaires.',
                'questions' => [
                    [
                        'question' => 'Une entreprise a une Enterprise Value de 120 M€, 30 M€ de dette et 10 M€ de trésorerie. En version simplifiée, quelle est son Equity Value ?',
                        'explanation' => 'La dette nette est de 30 - 10 = 20 M€. On obtient donc une Equity Value de 120 - 20 = 100 M€.',
                        'choices' => [
                            ['choice_text' => '80 M€', 'is_correct' => false],
                            ['choice_text' => '120 M€', 'is_correct' => false],
                            ['choice_text' => '160 M€', 'is_correct' => false],
                            ['choice_text' => '100 M€', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société n\'a aucune dette mais détient 15 M€ de trésorerie excédentaire. Son Enterprise Value est de 70 M€. Quelle Equity Value simplifiée en déduit-on ?',
                        'explanation' => 'Sans dette et avec 15 M€ de trésorerie excédentaire, la trésorerie augmente la valeur revenant aux actionnaires : 70 + 15 = 85 M€.',
                        'choices' => [
                            ['choice_text' => '55 M€', 'is_correct' => false],
                            ['choice_text' => '85 M€', 'is_correct' => true],
                            ['choice_text' => '70 M€', 'is_correct' => false],
                            ['choice_text' => '105 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi retire-t-on généralement la dette nette pour passer de l\'Enterprise Value à l\'Equity Value ?',
                        'explanation' => 'L\'Enterprise Value concerne l\'activité indépendamment de la structure de financement, tandis que l\'Equity Value correspond à la valeur disponible pour les actionnaires après prise en compte de la dette nette.',
                        'choices' => [
                            ['choice_text' => 'Parce que la dette est une charge d\'exploitation qui réduit déjà l\'EBITDA de l\'activité', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette correspond à des actifs détenus par les actionnaires de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette nette représente la part du résultat net déjà versée aux actionnaires sous forme de dividendes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette représente une créance prioritaire sur les actifs et les flux de l\'entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche 50 M€ d\'Enterprise Value et 20 M€ de dette nette. Un analyste annonce une Equity Value de 70 M€. Quelle erreur a-t-il commise ?',
                        'explanation' => 'Dans la relation simplifiée, Equity Value = Enterprise Value - dette nette. Ici, 50 - 20 = 30 M€ et non 70 M€.',
                        'choices' => [
                            ['choice_text' => 'Il a déduit la dette nette deux fois au lieu d\'une', 'is_correct' => false],
                            ['choice_text' => 'Il a ajouté la dette nette au lieu de la déduire', 'is_correct' => true],
                            ['choice_text' => 'Il a confondu l\'Enterprise Value avec la valeur comptable', 'is_correct' => false],
                            ['choice_text' => 'Il a retranché la trésorerie au lieu de la dette nette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a beaucoup de cash opérationnel mais doit maintenir une réserve minimale pour faire fonctionner ses activités. Pourquoi faut-il être prudent avant d\'ajouter tout le cash à l\'Equity Value ?',
                        'explanation' => 'Dans une analyse pratique, on distingue souvent la trésorerie réellement excédentaire du cash nécessaire au fonctionnement de l\'entreprise. Cela évite de surestimer la valeur revenant aux actionnaires.',
                        'choices' => [
                            ['choice_text' => 'La trésorerie est déjà incluse dans l\'Enterprise Value et ne peut donc pas être ajoutée en plus pour obtenir l\'Equity Value', 'is_correct' => false],
                            ['choice_text' => 'Une partie de la trésorerie correspond à des dettes fournisseurs et doit être déduite de l\'Equity Value', 'is_correct' => false],
                            ['choice_text' => 'Une partie de la trésorerie peut être nécessaire à l\'exploitation et ne pas être réellement excédentaire', 'is_correct' => true],
                            ['choice_text' => 'Le cash n\'a de valeur que s\'il est distribué sous forme de dividende avant la date de valorisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société a 40 M€ d\'Enterprise Value, 5 M€ de dette et 8 M€ de trésorerie excédentaire. Quel est le niveau de dette nette ?',
                        'explanation' => 'La dette nette = dette - trésorerie = 5 - 8 = -3 M€. Une dette nette négative signifie ici que la trésorerie excédentaire dépasse la dette.',
                        'choices' => [
                            ['choice_text' => '3 M€', 'is_correct' => false],
                            ['choice_text' => '13 M€', 'is_correct' => false],
                            ['choice_text' => '45 M€', 'is_correct' => false],
                            ['choice_text' => '-3 M€', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une acquisition, pourquoi l\'acheteur s\'intéresse-t-il à l\'Enterprise Value avant de regarder le financement final de la transaction ?',
                        'explanation' => 'L\'Enterprise Value facilite la comparaison entre entreprises ayant des structures de financement différentes. Le financement de l\'opération intervient ensuite dans la détermination de la valeur des capitaux propres et du prix payé aux vendeurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle permet de comparer la valeur de l\'activité indépendamment de la manière dont elle est financée', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elle correspond à la valeur des actions détenues par les nouveaux actionnaires après la réalisation de l\'opération de rachat', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle représente le prix d\'achat des immobilisations corporelles de l\'entreprise cible', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle intègre le coût du financement choisi par l\'acheteur pour payer la transaction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise refinance une partie de sa dette sans changer ses actifs opérationnels. Quel élément peut changer fortement ?',
                        'explanation' => 'Un refinancement modifie principalement la structure du passif et le profil des coûts financiers. La valeur opérationnelle de l\'activité peut rester inchangée, même si la dette nette ou le coût du financement évolue.',
                        'choices' => [
                            ['choice_text' => 'La marge d\'exploitation', 'is_correct' => false],
                            ['choice_text' => 'Les ventes de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'La structure de financement', 'is_correct' => true],
                            ['choice_text' => 'Les actifs d\'exploitation utilisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste confond Enterprise Value et capitalisation boursière. Pourquoi est-ce problématique ?',
                        'explanation' => 'La capitalisation boursière représente la valeur des actions cotées. L\'Enterprise Value part de cette valeur et procède à des ajustements liés notamment à la dette et à la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'L\'Enterprise Value correspond à la valeur des actions, alors que la capitalisation boursière intègre la dette nette', 'is_correct' => false],
                            ['choice_text' => 'Les deux notions diffèrent par leur date de calcul, mais incluent les mêmes éléments de dette et de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'La capitalisation boursière correspond aux actions, alors que l\'Enterprise Value tient compte de la dette nette et d\'autres éléments de financement', 'is_correct' => true],
                            ['choice_text' => 'La capitalisation boursière correspond à la valeur comptable des capitaux propres, alors que l\'Enterprise Value reprend le total des actifs inscrits au bilan de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède 60 M€ d\'Enterprise Value et une dette nette de 15 M€. Si 5 M€ de dette sont remboursés avec la trésorerie excédentaire, que devient la dette nette, toutes choses égales par ailleurs ?',
                        'explanation' => 'Rembourser 5 M€ de dette avec de la trésorerie réduit la dette de 5 M€, mais aussi la trésorerie de 5 M€. La dette nette (dette - trésorerie) reste donc à 15 M€.',
                        'choices' => [
                            ['choice_text' => 'Elle reste à 15 M€', 'is_correct' => true],
                            ['choice_text' => 'Elle passe à 20 M€', 'is_correct' => false],
                            ['choice_text' => 'Elle passe à 5 M€', 'is_correct' => false],
                            ['choice_text' => 'Elle passe à 10 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une négociation, pourquoi demander un bridge entre Enterprise Value et Equity Value est-il utile ?',
                        'explanation' => 'Le bridge rend visible la mécanique de passage de la valeur de l\'activité à la valeur des capitaux propres. C\'est particulièrement utile lorsque la dette, le cash et les autres ajustements sont importants.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer la rentabilité de l\'entreprise avec celle des comparables cotés sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir le détail des flux de trésorerie prévisionnels année par année jusqu\'à la fin de la période de projection retenue', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer le taux d\'actualisation à partir du coût de la dette et du coût des fonds propres', 'is_correct' => false],
                            ['choice_text' => 'Pour voir clairement comment la dette, la trésorerie et certains ajustements modifient le montant revenant aux actionnaires', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'DCF : raisonner avec les flux de trésorerie',
                'description' => 'Découvrir la logique d\'une valorisation DCF et comprendre pourquoi les flux futurs doivent être actualisés.',
                'questions' => [
                    [
                        'question' => 'Une entreprise devrait recevoir 110 000 € dans un an. Pourquoi ce montant vaut-il moins aujourd\'hui à un taux d\'actualisation positif ?',
                        'explanation' => 'L\'actualisation traduit la valeur temps de l\'argent et le rendement exigé. À taux positif, un flux futur est converti en une valeur actuelle plus faible.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'un euro reçu plus tard a une valeur actuelle inférieure lorsqu\'on exige un rendement positif', 'is_correct' => true],
                            ['choice_text' => 'Parce que les flux futurs sont réduits de l\'impôt que l\'entreprise devra payer sur chaque encaissement attendu', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque prélève une commission sur les sommes reçues à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'entreprise doit provisionner une partie du montant avant de l\'encaisser', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un flux de 100 000 € est attendu dans un an et le taux d\'actualisation est de 10 %. Quelle valeur actuelle simplifiée obtient-on ?',
                        'explanation' => 'La valeur actuelle est 100 000 / 1,10 = environ 90 909 €. L\'actualisation ramène le flux futur à sa valeur équivalente aujourd\'hui.',
                        'choices' => [
                            ['choice_text' => '100 000 €', 'is_correct' => false],
                            ['choice_text' => '90 909 € environ', 'is_correct' => true],
                            ['choice_text' => '110 000 €', 'is_correct' => false],
                            ['choice_text' => '81 818 € environ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un DCF, pourquoi projette-t-on les Free Cash Flows plutôt que simplement le chiffre d\'affaires ?',
                        'explanation' => 'Le chiffre d\'affaires mesure les ventes, alors que le Free Cash Flow cherche à approcher le cash réellement généré après les principaux besoins économiques de l\'activité.',
                        'choices' => [
                            ['choice_text' => 'Parce que le chiffre d\'affaires ne peut pas être prévu au-delà d\'un an avec une fiabilité suffisante pour l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que le Free Cash Flow est une mesure comptable directement publiée dans le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur dépend des flux de trésorerie disponibles après les besoins opérationnels et d\'investissement', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d\'affaires est déjà net des impôts et des charges d\'exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du besoin en fonds de roulement, toutes choses égales par ailleurs, a généralement quel effet sur le Free Cash Flow ?',
                        'explanation' => 'Une hausse du besoin en fonds de roulement mobilise de la trésorerie. Elle constitue donc généralement une consommation de cash et réduit le Free Cash Flow de la période.',
                        'choices' => [
                            ['choice_text' => 'Elle accroît le Free Cash Flow', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit le Free Cash Flow', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit l\'EBITDA mais pas le FCF', 'is_correct' => false],
                            ['choice_text' => 'Elle ne touche que le résultat net', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prévoit 8 M€ de Free Cash Flow l\'an prochain et 9 M€ l\'année suivante. Que fait l\'analyste dans un DCF avant de les additionner à la valeur d\'aujourd\'hui ?',
                        'explanation' => 'Chaque flux futur doit être ramené à sa valeur actuelle avec le taux d\'actualisation approprié. Les périodes différentes n\'ont donc pas le même poids aujourd\'hui.',
                        'choices' => [
                            ['choice_text' => 'Il actualise chaque flux à la date de valorisation', 'is_correct' => true],
                            ['choice_text' => 'Il calcule la moyenne simple des flux des deux années', 'is_correct' => false],
                            ['choice_text' => 'Il capitalise chaque flux à la date de la dernière année', 'is_correct' => false],
                            ['choice_text' => 'Il déduit la dette nette de chaque flux avant la somme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux entreprises ont le même FCF l\'an prochain, mais l\'une présente un risque nettement supérieur. Que peut-on envisager dans un DCF ?',
                        'explanation' => 'À flux identiques, une exigence de rendement plus élevée réduit la valeur actuelle. Le taux d\'actualisation reflète notamment le risque du profil de flux considéré.',
                        'choices' => [
                            ['choice_text' => 'Un taux d\'actualisation plus élevé peut être retenu pour l\'entreprise plus risquée', 'is_correct' => true],
                            ['choice_text' => 'Un taux d\'actualisation plus faible doit être retenu pour l\'entreprise plus risquée', 'is_correct' => false],
                            ['choice_text' => 'Le même taux est appliqué aux deux entreprises puisque les flux sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'actualisation dépend du niveau de dette nette et non du risque de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche un résultat net positif mais un Free Cash Flow négatif pendant une année. Est-ce nécessairement impossible ?',
                        'explanation' => 'Le résultat net est une mesure comptable. Un programme d\'investissement important ou une hausse des créances et des stocks peut provoquer un FCF négatif malgré un résultat bénéficiaire.',
                        'choices' => [
                            ['choice_text' => 'Oui, car un résultat net positif implique un encaissement équivalent dans l\'année', 'is_correct' => false],
                            ['choice_text' => 'Oui, car le Free Cash Flow se calcule à partir du résultat net sans autre ajustement comptable', 'is_correct' => false],
                            ['choice_text' => 'Non, l\'investissement ou une forte hausse du BFR peut absorber le cash', 'is_correct' => true],
                            ['choice_text' => 'Non, mais cela suppose que l\'entreprise ait distribué tout son résultat en dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un DCF, que cherche principalement à représenter le taux d\'actualisation ?',
                        'explanation' => 'Le taux d\'actualisation convertit les flux futurs en valeur actuelle et reflète le rendement exigé pour le risque correspondant aux flux valorisés.',
                        'choices' => [
                            ['choice_text' => 'Le rendement exigé compte tenu du temps et du risque des flux', 'is_correct' => true],
                            ['choice_text' => 'Le taux de croissance moyen des flux sur la période de prévision', 'is_correct' => false],
                            ['choice_text' => 'Le taux de rentabilité comptable observé sur les derniers exercices', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'intérêt de la dernière dette contractée par l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste augmente toutes les prévisions de FCF de 30 % mais conserve exactement les mêmes hypothèses de marché sans justification. Quel risque crée-t-il ?',
                        'explanation' => 'Le DCF est très sensible aux hypothèses de flux. Une hausse mécanique des FCF sans base opérationnelle peut conduire à une estimation de valeur artificiellement élevée.',
                        'choices' => [
                            ['choice_text' => 'Il sous-évalue l\'entreprise, car des flux plus élevés augmentent le taux d\'actualisation', 'is_correct' => false],
                            ['choice_text' => 'Il neutralise l\'effet du risque, puisque des flux plus élevés sécurisent la valeur obtenue', 'is_correct' => false],
                            ['choice_text' => 'Il modifie la valeur terminale mais pas la valeur des flux de la période explicite', 'is_correct' => false],
                            ['choice_text' => 'Il peut surévaluer l\'entreprise si la hausse des flux n\'est pas économiquement justifiée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle donnée est la plus directement liée à la capacité d\'une entreprise à générer du cash à partir de ses opérations futures ?',
                        'explanation' => 'Le Free Cash Flow est une mesure centrale dans un DCF car il représente le flux de trésorerie disponible selon la définition et les conventions retenues par l\'analyste.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d\'affaires', 'is_correct' => false],
                            ['choice_text' => 'Le total du bilan', 'is_correct' => false],
                            ['choice_text' => 'Le Free Cash Flow', 'is_correct' => true],
                            ['choice_text' => 'Le capital social', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un DCF nécessite-t-il généralement plusieurs années de projections ?',
                        'explanation' => 'Le DCF utilise souvent une période explicite de prévision avant d\'estimer la valeur au-delà de cette période. Le nombre d\'années dépend de la maturité et de la visibilité de l\'activité.',
                        'choices' => [
                            ['choice_text' => 'Parce que la loi impose de présenter au moins trois exercices prévisionnels aux investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer la valeur terminale à partir de la moyenne des flux historiques observés', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux d\'actualisation se calcule à partir de la variation des flux sur plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Pour représenter une partie de la trajectoire économique avant la période de valeur terminale', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Free Cash Flow et hypothèses opérationnelles',
                'description' => 'Relier croissance, marge, investissements et variation du besoin en fonds de roulement au cash disponible.',
                'questions' => [
                    [
                        'question' => 'Une société augmente ses ventes, mais ses créances clients progressent encore plus vite. Quel signal mérite l\'attention de l\'analyste ?',
                        'explanation' => 'Des ventes qui ne sont pas encore encaissées augmentent les créances. Si cette hausse est importante, une partie du cash généré par l\'activité peut être immobilisée dans le cycle d\'exploitation.',
                        'choices' => [
                            ['choice_text' => 'La croissance peut consommer davantage de cash via le besoin en fonds de roulement', 'is_correct' => true],
                            ['choice_text' => 'La croissance des ventes se traduit par une hausse proportionnelle des encaissements de l\'exercice', 'is_correct' => false],
                            ['choice_text' => 'Les créances clients sont un produit financier qui améliore le résultat avant impôt', 'is_correct' => false],
                            ['choice_text' => 'La hausse des créances réduit le besoin en fonds de roulement et libère de la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prévoit 2 M€ d\'EBITDA, 300 000 € d\'impôts en cash, 400 000 € de Capex et 100 000 € de hausse du BFR, sans autre ajustement. Quel FCF simplifié obtient-on ?',
                        'explanation' => 'Dans cette approximation : 2,0 - 0,3 - 0,4 - 0,1 = 1,2 M€. Le raisonnement simplifie volontairement certains éléments d\'un véritable calcul de FCF.',
                        'choices' => [
                            ['choice_text' => '1,8 M€', 'is_correct' => false],
                            ['choice_text' => '1,6 M€', 'is_correct' => false],
                            ['choice_text' => '1,2 M€', 'is_correct' => true],
                            ['choice_text' => '2,8 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un projet rentable sur le compte de résultat peut-il nécessiter du financement au début ?',
                        'explanation' => 'Le démarrage d\'une activité peut consommer du cash : achat d\'actifs, constitution de stocks, délai d\'encaissement des clients, etc. La rentabilité et la trésorerie ne suivent pas toujours le même calendrier.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il peut demander des investissements et du BFR avant que les flux de cash deviennent positifs', 'is_correct' => true],
                            ['choice_text' => 'Parce que les amortissements sont des sorties de trésorerie qui interviennent avant les premiers produits', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'impôt sur les bénéfices est payé avant que le résultat soit comptabilisé', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires exigent le versement immédiat des dividendes dès la première année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des Capex de 500 000 € sans changement dans le reste du modèle a généralement quel effet sur le FCF ?',
                        'explanation' => 'Les Capex sont des sorties de trésorerie d\'investissement. Toutes choses égales par ailleurs, les augmenter réduit le FCF de même montant.',
                        'choices' => [
                            ['choice_text' => 'Une hausse de 500 000 € du FCF', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de 250 000 € du FCF', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de 1 M€ du FCF', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de 500 000 € du FCF', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réduit fortement ses stocks tout en maintenant ses ventes. Quel effet de court terme peut apparaître sur le cash ?',
                        'explanation' => 'La baisse des stocks libère du cash qui était immobilisé dans le cycle d\'exploitation. Il faut toutefois vérifier que le niveau de stocks reste compatible avec l\'activité.',
                        'choices' => [
                            ['choice_text' => 'Une consommation de trésorerie liée au rachat des stocks', 'is_correct' => false],
                            ['choice_text' => 'Une libération de trésorerie peut soutenir le FCF', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du FCF, car les ventes finiront par diminuer', 'is_correct' => false],
                            ['choice_text' => 'Un effet nul, car les stocks n\'entrent pas dans le FCF', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les hypothèses de marge sont-elles importantes dans une valorisation par FCF ?',
                        'explanation' => 'Une marge plus élevée peut augmenter le résultat opérationnel et, selon les autres hypothèses, le FCF. La marge est donc un moteur important de valeur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elles influencent les flux de trésorerie futurs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elles déterminent le cours de bourse du jour de valorisation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles servent à fixer le taux d\'actualisation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles remplacent les hypothèses de croissance du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prévoit une forte croissance mais aussi une baisse continue de sa marge opérationnelle. Quelle question est pertinente ?',
                        'explanation' => 'Une croissance rapide n\'est pas automatiquement créatrice de valeur. Il faut examiner son effet sur les marges, le BFR, les Capex et donc sur les flux de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Faut-il ignorer les marges puisque seul le chiffre d\'affaires détermine la valeur ?', 'is_correct' => false],
                            ['choice_text' => 'La baisse de marge opérationnelle est-elle sans effet sur les flux tant que le chiffre d\'affaires progresse ?', 'is_correct' => false],
                            ['choice_text' => 'Une marge en baisse peut-elle être compensée en retenant un taux d\'actualisation plus faible ?', 'is_correct' => false],
                            ['choice_text' => 'La croissance compense-t-elle suffisamment la dégradation des marges pour préserver les flux de trésorerie ?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle, le BFR représente 12 % du chiffre d\'affaires et le chiffre d\'affaires prévisionnel passe de 5 M€ à 6 M€. Si le ratio reste inchangé, quel niveau de BFR est associé à 6 M€ ?',
                        'explanation' => '12 % de 6 M€ = 0,72 M€, soit 720 000 €. Le modèle suppose ici que la relation entre BFR et chiffre d\'affaires reste stable.',
                        'choices' => [
                            ['choice_text' => '600 000 €', 'is_correct' => false],
                            ['choice_text' => '72 000 €', 'is_correct' => false],
                            ['choice_text' => '720 000 €', 'is_correct' => true],
                            ['choice_text' => '1,2 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste suppose que les Capex seront nuls pendant cinq ans pour une usine industrielle déjà existante. Quelle faiblesse faut-il examiner ?',
                        'explanation' => 'Même une entreprise mature doit souvent maintenir ou renouveler ses actifs. Une hypothèse de Capex nul peut donc surestimer les flux de trésorerie futurs.',
                        'choices' => [
                            ['choice_text' => 'L\'hypothèse réduit la valeur terminale puisque l\'usine ne génère alors plus de flux d\'exploitation', 'is_correct' => false],
                            ['choice_text' => 'L\'hypothèse est prudente car l\'absence de Capex diminue le Free Cash Flow de la période', 'is_correct' => false],
                            ['choice_text' => 'L\'hypothèse peut être irréaliste si l\'outil industriel nécessite du renouvellement ou de la maintenance', 'is_correct' => true],
                            ['choice_text' => 'L\'hypothèse est cohérente dès lors que les amortissements sont maintenus dans le compte de résultat de chaque exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société réduit son délai d\'encaissement clients sans changer ses ventes. Quel effet économique peut-elle rechercher ?',
                        'explanation' => 'Encaisser plus vite réduit les créances et peut améliorer la conversion du résultat en cash. C\'est un levier classique de gestion du BFR.',
                        'choices' => [
                            ['choice_text' => 'Augmenter ses stocks pour soutenir ses ventes futures', 'is_correct' => false],
                            ['choice_text' => 'Libérer du cash en réduisant les créances immobilisées', 'is_correct' => true],
                            ['choice_text' => 'Réduire ses dettes fournisseurs pour améliorer sa notation', 'is_correct' => false],
                            ['choice_text' => 'Augmenter les amortissements pour réduire l\'impôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le Free Cash Flow ne doit-il pas être projeté sans regarder les besoins d\'investissement ?',
                        'explanation' => 'La capacité à générer du cash doit être appréciée après les investissements nécessaires. Ignorer les Capex peut donner une image trop optimiste de la trésorerie réellement disponible.',
                        'choices' => [
                            ['choice_text' => 'Parce que les Capex sont enregistrés comme des produits d\'exploitation dans le compte de résultat de chaque exercice comptable annuel', 'is_correct' => false],
                            ['choice_text' => 'Parce que le FCF est égal à l\'EBITDA une fois que l\'entreprise est rentable et qu\'elle paie ses impôts', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une activité peut générer des profits tout en nécessitant des Capex importants pour maintenir ou développer ses capacités', 'is_correct' => true],
                            ['choice_text' => 'Parce que les investissements sont financés par la dette et n\'ont donc pas d\'effet sur la trésorerie', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'WACC et taux d\'actualisation',
                'description' => 'Comprendre le rôle du WACC et ses effets sur une valorisation DCF.',
                'questions' => [
                    [
                        'question' => 'Une entreprise finance ses activités avec des capitaux propres et de la dette. Pourquoi le WACC est-il utile dans un DCF basé sur les FCFF ?',
                        'explanation' => 'Le WACC combine le coût des capitaux propres et le coût de la dette après impôt, pondérés par leur poids dans la structure de financement retenue.',
                        'choices' => [
                            ['choice_text' => 'Il représente le rendement exigé par les seuls actionnaires sur les flux qui leur reviennent après paiement des intérêts et remboursement de la dette', 'is_correct' => false],
                            ['choice_text' => 'Il représente le coût moyen pondéré des sources de financement pertinentes pour les flux destinés à l\'ensemble des apporteurs de capitaux', 'is_correct' => true],
                            ['choice_text' => 'Il mesure le taux de croissance moyen attendu des flux de trésorerie sur l\'ensemble de l\'horizon de projection', 'is_correct' => false],
                            ['choice_text' => 'Il correspond au taux d\'intérêt moyen payé sur la dette de l\'entreprise après prise en compte de l\'impôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le coût des capitaux propres est de 12 %, le coût de la dette après impôt de 6 %, avec une structure 70 % equity et 30 % dette. Quel WACC simplifié obtient-on ?',
                        'explanation' => 'WACC = 70 % × 12 % + 30 % × 6 % = 8,4 % + 1,8 % = 10,2 %.',
                        'choices' => [
                            ['choice_text' => '8,4 %', 'is_correct' => false],
                            ['choice_text' => '9,0 %', 'is_correct' => false],
                            ['choice_text' => '12,0 %', 'is_correct' => false],
                            ['choice_text' => '10,2 %', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Toutes choses égales par ailleurs, que se passe-t-il pour la valeur actuelle d\'un DCF lorsque le taux d\'actualisation augmente ?',
                        'explanation' => 'Un taux plus élevé réduit le poids actuel des flux futurs. La relation est fondamentale en valorisation DCF.',
                        'choices' => [
                            ['choice_text' => 'La valeur actuelle augmente', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle reste stable', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle diminue', 'is_correct' => true],
                            ['choice_text' => 'La valeur terminale seule change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on souvent le coût de la dette après impôt dans le WACC ?',
                        'explanation' => 'Le coût de la dette est généralement ajusté de l\'effet fiscal lorsqu\'on construit le WACC après impôt : coût de la dette × (1 - taux d\'impôt), selon le cadre du modèle.',
                        'choices' => [
                            ['choice_text' => 'Parce que les intérêts peuvent avoir un effet fiscal selon les hypothèses et le cadre retenu', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'impôt sur les sociétés augmente mécaniquement le taux de rendement exigé par les prêteurs sur la dette émise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette est comptabilisée au bilan nette des intérêts déjà payés par l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes versés aux actionnaires sont déductibles du résultat imposable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise passe d\'un profil de risque modéré à un profil beaucoup plus risqué. Quel effet peut avoir cette évolution sur le taux d\'actualisation exigé ?',
                        'explanation' => 'Un risque économique ou financier plus élevé peut conduire les investisseurs à demander un rendement supérieur. Un taux d\'actualisation plus élevé réduit alors la valeur actuelle des flux.',
                        'choices' => [
                            ['choice_text' => 'Le taux exigé peut augmenter', 'is_correct' => true],
                            ['choice_text' => 'Le taux exigé peut diminuer', 'is_correct' => false],
                            ['choice_text' => 'Le taux exigé reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'Il se réduit au taux sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un étudiant applique un WACC de 8 % à une entreprise alors que ses flux dans le DCF sont des flux revenant uniquement aux actionnaires. Quel point faut-il vérifier ?',
                        'explanation' => 'Le taux d\'actualisation doit être cohérent avec la nature des flux. Les FCFF sont généralement actualisés au WACC, tandis que les flux destinés aux actionnaires se traitent avec un taux de coût des capitaux propres approprié.',
                        'choices' => [
                            ['choice_text' => 'La cohérence entre le taux de 8 % et la marge d\'EBITDA prévue sur la période de projection', 'is_correct' => false],
                            ['choice_text' => 'La cohérence entre le type de flux valorisé et le taux d\'actualisation utilisé', 'is_correct' => true],
                            ['choice_text' => 'La cohérence entre le WACC retenu et la valeur comptable des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de la dette nette comparé à la capitalisation boursière actuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un WACC passe de 10 % à 12 % sans modification des FCF prévisionnels. Pourquoi la valeur DCF peut-elle baisser sensiblement ?',
                        'explanation' => 'L\'actualisation est très sensible au taux utilisé, surtout pour des flux lointains. Une hausse du WACC réduit mécaniquement la valeur actuelle des flux et de la valeur terminale.',
                        'choices' => [
                            ['choice_text' => 'Parce que les mêmes flux sont actualisés à un taux plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Parce que les prévisions de chiffre d\'affaires sont revues à la baisse', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux de croissance à long terme est réduit de 2 points', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux futurs sont ramenés à une période plus courte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas choisir le WACC uniquement parce qu\'il donne la valeur d\'entreprise souhaitée ?',
                        'explanation' => 'Le taux d\'actualisation est une hypothèse financière centrale. Le choisir pour atteindre un résultat cible revient à inverser le modèle au lieu d\'utiliser une logique de valorisation défendable.',
                        'choices' => [
                            ['choice_text' => 'Parce que le WACC doit être égal au taux d\'intérêt du dernier emprunt de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux doit découler d\'une méthode cohérente et d\'hypothèses de marché défendables', 'is_correct' => true],
                            ['choice_text' => 'Parce que le WACC est fixé par le régulateur pour chaque secteur d\'activité coté en bourse', 'is_correct' => false],
                            ['choice_text' => 'Parce que le WACC doit être calculé à partir de la rentabilité comptable des trois derniers exercices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une structure cible comporte 40 % de dette et 60 % de capitaux propres. Pourquoi cette structure peut-elle être pertinente dans le calcul du WACC ?',
                        'explanation' => 'Le WACC est une moyenne pondérée. Les proportions de dette et de capitaux propres déterminent le poids de chaque coût dans le calcul.',
                        'choices' => [
                            ['choice_text' => 'Elle fixe la part des flux qui revient aux prêteurs au titre du remboursement annuel', 'is_correct' => false],
                            ['choice_text' => 'Elle correspond au ratio d\'endettement actuel du bilan, qui doit être repris tel quel dans le WACC', 'is_correct' => false],
                            ['choice_text' => 'Elle permet d\'ajuster le taux d\'imposition appliqué à la dette et aux capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Les pondérations reflètent le poids relatif des sources de financement dans le coût moyen', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une baisse du taux d\'impôt, toutes choses égales par ailleurs, peut avoir quel effet sur le coût de la dette après impôt ?',
                        'explanation' => 'Le coût de la dette après impôt est souvent calculé comme coût avant impôt × (1 - taux d\'impôt). Une baisse du taux d\'impôt réduit donc le bouclier fiscal et augmente le coût après impôt, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Elle augmente l\'avantage fiscal des intérêts et peut donc réduire le coût de la dette après impôt', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit l\'avantage fiscal des intérêts et peut donc augmenter le coût de la dette après impôt', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit le coût de la dette avant impôt demandé par les prêteurs, ce qui diminue le coût après impôt', 'is_correct' => false],
                            ['choice_text' => 'Elle n\'affecte que le coût des capitaux propres, pas celui de la dette après impôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une valorisation, pourquoi tester plusieurs WACC peut-il être utile ?',
                        'explanation' => 'Une sensibilité au WACC permet de voir comment la valeur évolue lorsque l\'exigence de rendement change. C\'est particulièrement important parce que la valeur terminale peut être très sensible au taux.',
                        'choices' => [
                            ['choice_text' => 'Pour retenir ensuite le taux qui donne la valeur la plus proche du prix demandé', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer l\'incertitude liée aux prévisions de flux de trésorerie de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer l\'estimation des flux par une moyenne de plusieurs taux de marché', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer la sensibilité de la valeur à l\'hypothèse de taux d\'actualisation', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Approche par multiples',
                'description' => 'Utiliser des multiples comme EV/EBITDA, P/E et EV/Sales avec discernement.',
                'questions' => [
                    [
                        'question' => 'Une société comparable se négocie à 8x EBITDA. Une entreprise cible affiche 5 M€ d\'EBITDA et est jugée suffisamment comparable. Quelle Enterprise Value indicative obtient-on ?',
                        'explanation' => '5 M€ × 8 = 40 M€. Le résultat est une indication fondée sur le multiple retenu, pas une valeur garantie.',
                        'choices' => [
                            ['choice_text' => '40 M€', 'is_correct' => true],
                            ['choice_text' => '13 M€', 'is_correct' => false],
                            ['choice_text' => '45 M€', 'is_correct' => false],
                            ['choice_text' => '64 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un multiple EV/EBITDA peut-il être pratique pour comparer deux entreprises ?',
                        'explanation' => 'Le multiple EV/EBITDA permet de comparer la valeur des activités avec un indicateur opérationnel courant. Il reste important de vérifier la comparabilité des entreprises et des définitions comptables.',
                        'choices' => [
                            ['choice_text' => 'Il met en relation la capitalisation boursière des actions et le résultat net de l\'exercice après intérêts et impôts', 'is_correct' => false],
                            ['choice_text' => 'Il met en relation la valeur de l\'entreprise et un indicateur opérationnel avant intérêts, impôts et amortissements', 'is_correct' => true],
                            ['choice_text' => 'Il met en relation la valeur de l\'entreprise et le chiffre d\'affaires de la dernière période', 'is_correct' => false],
                            ['choice_text' => 'Il met en relation le prix de l\'action et les dividendes distribués au cours de l\'exercice écoulé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une dette très différente de celle de son comparable principal. Quel avantage peut avoir l\'EV/EBITDA par rapport à un simple P/E ?',
                        'explanation' => 'Le P/E relie la capitalisation boursière au résultat net, fortement influencé par le financement. EV/EBITDA compare l\'activité à un indicateur avant intérêts, ce qui peut faciliter certaines comparaisons.',
                        'choices' => [
                            ['choice_text' => 'L\'Enterprise Value tient mieux compte de la structure de financement que la seule valeur des actions', 'is_correct' => true],
                            ['choice_text' => 'Le P/E intègre la dette nette dans son numérateur, ce qui le rend plus complet que l\'EV/EBITDA', 'is_correct' => false],
                            ['choice_text' => 'L\'EV/EBITDA est calculé après intérêts et impôts, ce qui neutralise l\'effet de la dette sur la comparaison', 'is_correct' => false],
                            ['choice_text' => 'L\'EV/EBITDA permet de comparer les entreprises sans tenir compte de leur rentabilité d\'exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche 3 M€ de résultat net et un P/E de 12x. Quelle capitalisation boursière indicative obtient-on ?',
                        'explanation' => 'Le calcul indicatif est 3 × 12 = 36 M€. Le multiple doit toutefois être cohérent avec les données de résultat utilisées.',
                        'choices' => [
                            ['choice_text' => '9 M€', 'is_correct' => false],
                            ['choice_text' => '36 M€', 'is_correct' => true],
                            ['choice_text' => '15 M€', 'is_correct' => false],
                            ['choice_text' => '48 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste applique un multiple de 10x à une entreprise dont l\'EBITDA est 6 M€, puis annonce une Equity Value de 60 M€ sans autre ajustement. Quel point manque ?',
                        'explanation' => '10 × 6 = 60 M€ correspond à une Enterprise Value indicative. Pour obtenir l\'Equity Value, il faut ensuite tenir compte notamment de la dette nette et d\'autres ajustements éventuels.',
                        'choices' => [
                            ['choice_text' => 'Il faut appliquer le multiple au chiffre d\'affaires plutôt qu\'à l\'EBITDA pour obtenir l\'Equity Value', 'is_correct' => false],
                            ['choice_text' => 'Il faut actualiser les 60 M€ à la date de valorisation avec le WACC de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Il faut vérifier la dette nette et passer de l\'Enterprise Value à l\'Equity Value', 'is_correct' => true],
                            ['choice_text' => 'Il faut multiplier le résultat par le nombre d\'actions avant de parler d\'Equity Value', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise en très forte croissance peut-elle se négocier à un multiple supérieur à une entreprise mature ?',
                        'explanation' => 'Un multiple de marché reflète les attentes des investisseurs. Une croissance plus forte et durable, si elle s\'accompagne d\'un rendement satisfaisant, peut soutenir un multiple plus élevé.',
                        'choices' => [
                            ['choice_text' => 'Le marché peut valoriser davantage ses perspectives de croissance et de rentabilité futures', 'is_correct' => true],
                            ['choice_text' => 'Son bilan comporte davantage d\'actifs corporels que celui d\'une entreprise mature', 'is_correct' => false],
                            ['choice_text' => 'Elle verse des dividendes plus élevés que l\'entreprise mature, ce que le marché récompense', 'is_correct' => false],
                            ['choice_text' => 'Le marché lui applique un taux d\'actualisation plus élevé, ce qui augmente mécaniquement le multiple', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux comparables ont des marges très différentes. Pourquoi faut-il être prudent avant de transférer mécaniquement le multiple de l\'un à l\'autre ?',
                        'explanation' => 'La comparabilité doit porter sur plusieurs dimensions : croissance, marges, risque, intensité capitalistique, taille, géographie et modèle économique. Une différence de marge peut donc être importante.',
                        'choices' => [
                            ['choice_text' => 'Parce que les multiples sont fixés par la bourse et ne dépendent pas des caractéristiques propres à chaque société', 'is_correct' => false],
                            ['choice_text' => 'Parce que les marges sont publiées à des dates différentes selon les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité et le profil économique peuvent justifier des multiples différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que la taille du comparable détermine son multiple, quelle que soit sa marge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a un multiple EV/Sales de 2x et un chiffre d\'affaires de 15 M€. Quelle Enterprise Value indicative en résulte ?',
                        'explanation' => '2 × 15 M€ = 30 M€. EV/Sales peut être utile notamment lorsque les entreprises ont des marges faibles ou encore instables, mais il faut alors analyser la rentabilité séparément.',
                        'choices' => [
                            ['choice_text' => '7,5 M€', 'is_correct' => false],
                            ['choice_text' => '30 M€', 'is_correct' => true],
                            ['choice_text' => '17 M€', 'is_correct' => false],
                            ['choice_text' => '45 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un défaut classique d\'une valorisation par multiples si le comparable retenu n\'est pas vraiment comparable ?',
                        'explanation' => 'Une opération peut être parfaitement calculée tout en étant économiquement mauvaise si le groupe de comparables est mal choisi. La sélection et la normalisation des données sont aussi importantes que l\'arithmétique.',
                        'choices' => [
                            ['choice_text' => 'La valeur obtenue peut être trompeuse malgré un calcul mathématique correct', 'is_correct' => true],
                            ['choice_text' => 'Le calcul devient impossible faute de données publiques suffisantes sur la société cible', 'is_correct' => false],
                            ['choice_text' => 'Le résultat est sous-évalué par rapport au prix de marché de la cible', 'is_correct' => false],
                            ['choice_text' => 'La valeur obtenue ne peut plus être comparée à celle d\'un DCF', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste observe que le multiple EV/EBITDA moyen du secteur a fortement monté. Quelle question doit-il poser avant d\'appliquer ce niveau à une cible ?',
                        'explanation' => 'Les multiples peuvent varier avec les taux, la croissance attendue, le sentiment de marché et la composition du panel. Il faut donc vérifier la comparabilité et la période de référence.',
                        'choices' => [
                            ['choice_text' => 'Le multiple le plus élevé du panel doit-il être retenu pour refléter la hausse récente du secteur ?', 'is_correct' => false],
                            ['choice_text' => 'La hausse du secteur dispense-t-elle de vérifier la dette nette de la cible ?', 'is_correct' => false],
                            ['choice_text' => 'Faut-il remplacer l\'EV/EBITDA par le chiffre d\'affaires puisque les multiples ont monté ?', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de marché est-il réellement comparable à la cible et à la date de valorisation ?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société cible affiche un EBITDA exceptionnellement élevé à cause d\'un produit ponctuel. Que faut-il envisager avant d\'appliquer un multiple ?',
                        'explanation' => 'Les multiples doivent idéalement s\'appliquer à une métrique représentative. Un élément non récurrent peut gonfler artificiellement l\'EBITDA et donc la valeur calculée.',
                        'choices' => [
                            ['choice_text' => 'Conserver l\'EBITDA publié pour rester cohérent avec les comptes audités de l\'exercice', 'is_correct' => false],
                            ['choice_text' => 'Déduire le produit ponctuel de la dette nette avant d\'appliquer le multiple', 'is_correct' => false],
                            ['choice_text' => 'Normaliser l\'EBITDA pour éviter de valoriser comme récurrent un élément exceptionnel', 'is_correct' => true],
                            ['choice_text' => 'Retraiter le chiffre d\'affaires plutôt que l\'EBITDA pour supprimer l\'élément ponctuel', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comparables : choisir avec discernement',
                'description' => 'Apprendre à sélectionner et interpréter un échantillon de sociétés comparables et de transactions.',
                'questions' => [
                    [
                        'question' => 'Une entreprise marocaine de logiciels B2B doit être comparée. Quel critère est particulièrement pertinent dans un premier tri ?',
                        'explanation' => 'La comparabilité doit porter sur l\'activité, le modèle économique, la croissance, les marges, la taille et le risque. Les éléments purement visuels ou personnels n\'ont pas de valeur analytique ici.',
                        'choices' => [
                            ['choice_text' => 'Le modèle économique et le profil de croissance', 'is_correct' => true],
                            ['choice_text' => 'La notoriété de la marque auprès du grand public', 'is_correct' => false],
                            ['choice_text' => 'L\'ancienneté de la société sur son marché', 'is_correct' => false],
                            ['choice_text' => 'La forme juridique de la société et son capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on parfois la médiane plutôt que la moyenne des multiples d\'un panel ?',
                        'explanation' => 'Une observation atypique peut tirer la moyenne vers le haut ou vers le bas. La médiane fournit souvent un point central plus robuste lorsque le panel est dispersé.',
                        'choices' => [
                            ['choice_text' => 'La médiane donne un résultat plus élevé que la moyenne', 'is_correct' => false],
                            ['choice_text' => 'La médiane est moins sensible à une valeur extrême', 'is_correct' => true],
                            ['choice_text' => 'La médiane pondère chaque multiple par la taille de la société', 'is_correct' => false],
                            ['choice_text' => 'La moyenne est impossible à calculer sur un panel dispersé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un panel de huit sociétés contient un multiple de 25x alors que les sept autres sont entre 8x et 12x. Quel réflexe est raisonnable ?',
                        'explanation' => 'Une valeur extrême peut venir d\'une croissance exceptionnelle, d\'un problème de données ou d\'une définition différente de la métrique. Il faut comprendre sa cause avant de l\'utiliser.',
                        'choices' => [
                            ['choice_text' => 'Le retenir tel quel dans la moyenne, car il traduit la meilleure performance observée dans le panel', 'is_correct' => false],
                            ['choice_text' => 'L\'écarter du panel sans chercher à comprendre l\'origine de l\'écart observé', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les huit multiples par celui de la société la plus proche en taille', 'is_correct' => false],
                            ['choice_text' => 'Examiner pourquoi le multiple de 25x est si différent avant de l\'intégrer mécaniquement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société comparable vient d\'être rachetée à une forte prime stratégique. Pourquoi une transaction précédente peut-elle donner un multiple supérieur à celui observé en bourse ?',
                        'explanation' => 'Un acquéreur peut payer une prime pour le contrôle, les synergies ou des actifs stratégiques. Les multiples de transactions ne sont donc pas toujours directement comparables aux multiples boursiers.',
                        'choices' => [
                            ['choice_text' => 'L\'acquéreur applique un multiple de chiffre d\'affaires plutôt qu\'un multiple d\'EBITDA', 'is_correct' => false],
                            ['choice_text' => 'Les transactions portent sur des sociétés plus petites dont le risque est plus faible', 'is_correct' => false],
                            ['choice_text' => 'L\'acheteur peut anticiper des synergies ou payer pour obtenir le contrôle', 'is_correct' => true],
                            ['choice_text' => 'Les actionnaires vendeurs acceptent une décote pour vendre plus rapidement leur participation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise comparable a une croissance deux fois supérieure à la cible mais un risque similaire. Quel effet peut-on envisager sur son multiple ?',
                        'explanation' => 'Les perspectives de croissance influencent souvent les multiples de marché. Une croissance supérieure peut justifier une prime, sous réserve de sa qualité et de sa soutenabilité.',
                        'choices' => [
                            ['choice_text' => 'Son multiple peut être plus faible, car la croissance augmente le risque perçu', 'is_correct' => false],
                            ['choice_text' => 'Son multiple peut être plus élevé, toutes choses égales par ailleurs', 'is_correct' => true],
                            ['choice_text' => 'Son multiple est identique puisque le risque est similaire entre les deux sociétés', 'is_correct' => false],
                            ['choice_text' => 'Son multiple dépend de la croissance de la cible et non de la sienne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier la période fiscale des données utilisées dans une analyse de comparables ?',
                        'explanation' => 'Des périodes différentes peuvent rendre les multiples difficiles à comparer, surtout lorsque les résultats évoluent rapidement. L\'alignement temporel améliore la qualité de l\'analyse.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que l\'exercice retenu correspond à une année civile complète', 'is_correct' => false],
                            ['choice_text' => 'Pour obliger les sociétés du panel à clôturer leurs comptes à la même date', 'is_correct' => false],
                            ['choice_text' => 'Pour convertir les multiples en taux d\'actualisation selon l\'exercice retenu', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de comparer des métriques calculées sur des périodes différentes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un analyste compare une banque avec une société industrielle à l\'aide du même EV/EBITDA. Quel problème conceptuel peut apparaître ?',
                        'explanation' => 'Les institutions financières sont souvent analysées avec des métriques spécifiques, car dette et actifs financiers font partie intégrante de leur activité. Un multiple standard d\'entreprise peut donc être inadapté.',
                        'choices' => [
                            ['choice_text' => 'Le multiple EV/EBITDA donnerait une valeur trop faible pour la banque car son EBITDA est élevé', 'is_correct' => false],
                            ['choice_text' => 'Les deux entreprises sont comparables dès lors qu\'elles ont la même taille et le même chiffre d\'affaires', 'is_correct' => false],
                            ['choice_text' => 'Les modèles économiques et les états financiers rendent la comparaison potentiellement inadaptée', 'is_correct' => true],
                            ['choice_text' => 'La banque doit être valorisée avec un multiple de chiffre d\'affaires, qui ignore sa dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une cible possède une marge EBITDA de 25 %, tandis que le comparable médian est à 15 %. Que faut-il faire avant d\'appliquer le multiple médian ?',
                        'explanation' => 'La différence de marge peut signaler une meilleure qualité économique, mais elle doit être interprétée avec la croissance, le risque, la comptabilisation et la durabilité des marges.',
                        'choices' => [
                            ['choice_text' => 'Retenir le multiple médian sans ajustement, puisque la marge est déjà incluse dans le multiple de chaque comparable', 'is_correct' => false],
                            ['choice_text' => 'Se demander si cette différence de marge justifie une décote ou une prime par rapport au comparable', 'is_correct' => true],
                            ['choice_text' => 'Appliquer le multiple de l\'entreprise la plus rentable du panel, qui a la marge la plus forte', 'is_correct' => false],
                            ['choice_text' => 'Convertir la marge de 25 % en taux d\'actualisation avant d\'appliquer le multiple médian', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une analyse de comparables produit une fourchette de valeur plutôt qu\'un chiffre unique. Pourquoi est-ce utile ?',
                        'explanation' => 'Une fourchette rend visible l\'incertitude liée au choix du multiple, du panel et des données normalisées. Elle peut ensuite être rapprochée d\'autres approches de valorisation.',
                        'choices' => [
                            ['choice_text' => 'Parce que la réglementation impose de publier une valeur minimale et une valeur maximale', 'is_correct' => false],
                            ['choice_text' => 'Parce que les comparables et les hypothèses comportent une part d\'incertitude', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'une fourchette dispense de documenter les sources et la date des multiples', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle permet de conserver à la fois le DCF et le multiple le plus élevé du panel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un comparable affiche une dette très élevée et une marge similaire à la cible. Pourquoi EV/EBITDA peut-il être préférable à P/E pour certaines comparaisons ?',
                        'explanation' => 'Le résultat net est affecté par les intérêts, alors que l\'EBITDA est mesuré avant les intérêts. Selon l\'objectif de l\'analyse, l\'EV/EBITDA peut donc faciliter la comparaison opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Le P/E est calculé avant intérêts et impôts, alors que l\'EV/EBITDA est calculé après', 'is_correct' => false],
                            ['choice_text' => 'L\'EV/EBITDA utilise le résultat net, qui est plus stable que l\'EBITDA lorsque la dette est élevée', 'is_correct' => false],
                            ['choice_text' => 'L\'EV/EBITDA limite l\'impact direct de la structure de financement sur la métrique opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Le P/E exclut la capitalisation boursière et ne reflète donc pas le prix de l\'action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter la source et la date des multiples de marché dans un fichier de valorisation ?',
                        'explanation' => 'Les multiples varient avec le marché et avec les périodes de résultat. Documenter les sources permet de reproduire l\'analyse et d\'identifier les changements ultérieurs.',
                        'choices' => [
                            ['choice_text' => 'Pour fixer définitivement le niveau des multiples utilisés pendant la transaction', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre l\'analyse traçable et permettre de comprendre le contexte du niveau observé', 'is_correct' => true],
                            ['choice_text' => 'Pour permettre de recalculer le WACC à partir des multiples cités', 'is_correct' => false],
                            ['choice_text' => 'Pour répondre à une obligation comptable imposant de présenter les sociétés comparables dans les comptes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Valeur terminale et horizon long terme',
                'description' => 'Comprendre le rôle de la valeur terminale et les risques liés aux hypothèses de croissance à long terme.',
                'questions' => [
                    [
                        'question' => 'Dans un DCF, pourquoi calcule-t-on souvent une valeur terminale ?',
                        'explanation' => 'La période de projection explicite ne couvre généralement pas toute la vie économique de l\'entreprise. La valeur terminale représente donc les flux au-delà de cet horizon selon une méthode retenue.',
                        'choices' => [
                            ['choice_text' => 'Pour représenter la valeur des flux au-delà de la période explicite de prévision', 'is_correct' => true],
                            ['choice_text' => 'Pour corriger les flux de la période explicite des effets de l\'inflation à long terme', 'is_correct' => false],
                            ['choice_text' => 'Pour estimer la valeur comptable des capitaux propres à la fin de la période de projection', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le taux d\'actualisation par un taux de sortie propre à l\'horizon final', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prévoit un FCF de 5 M€ pour la première année suivant l\'horizon explicite, un taux de croissance à long terme de 2 % et un WACC de 8 %. Quelle valeur terminale simplifiée obtient-on avec Gordon-Shapiro ?',
                        'explanation' => 'Le FCF de 5 M€ étant déjà celui de l\'année suivante, TV = FCF1 / (WACC - g) = 5 / (0,08 - 0,02) = environ 83,3 M€. Si 5 M€ était le FCF de l\'année en cours, il faudrait d\'abord le multiplier par (1 + g), soit 5,1 M€ et une valeur proche de 85 M€.',
                        'choices' => [
                            ['choice_text' => '85,0 M€ environ', 'is_correct' => false],
                            ['choice_text' => '62,5 M€ environ', 'is_correct' => false],
                            ['choice_text' => '250 M€ environ', 'is_correct' => false],
                            ['choice_text' => '83,3 M€ environ', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il être prudent avec un taux de croissance à long terme très élevé dans la valeur terminale ?',
                        'explanation' => 'Dans une croissance perpétuelle, une petite variation de g peut avoir un effet important lorsque l\'écart entre WACC et g est faible. L\'hypothèse doit donc rester cohérente avec les perspectives économiques de long terme.',
                        'choices' => [
                            ['choice_text' => 'Une croissance perpétuelle élevée réduit le dénominateur de la formule, ce qui diminue mécaniquement la valeur terminale de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une croissance perpétuelle supérieure à celle du marché doit être compensée par un WACC plus faible', 'is_correct' => false],
                            ['choice_text' => 'Une croissance perpétuelle élevée peut gonfler fortement la valeur et devenir difficile à justifier économiquement', 'is_correct' => true],
                            ['choice_text' => 'Une croissance perpétuelle élevée n\'affecte que les flux de la période explicite, pas la valeur terminale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il dans la formule de Gordon si g se rapproche du WACC ?',
                        'explanation' => 'Le dénominateur WACC - g devient très petit. La valeur terminale peut alors augmenter de façon très importante, ce qui illustre la sensibilité du modèle.',
                        'choices' => [
                            ['choice_text' => 'La valeur terminale diminue sensiblement', 'is_correct' => false],
                            ['choice_text' => 'La valeur terminale reste inchangée', 'is_correct' => false],
                            ['choice_text' => 'La valeur terminale devient négative', 'is_correct' => false],
                            ['choice_text' => 'La valeur terminale augmente fortement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un analyste retient un taux de croissance perpétuelle de 9 % avec un WACC de 8 %. Quel problème majeur apparaît ?',
                        'explanation' => 'Dans le modèle de Gordon-Shapiro, il faut normalement avoir g < WACC pour obtenir une relation économiquement cohérente et une valeur terminale finie positive.',
                        'choices' => [
                            ['choice_text' => 'La valeur terminale devient très élevée mais reste parfaitement cohérente puisque la croissance est forte', 'is_correct' => false],
                            ['choice_text' => 'La formule de croissance perpétuelle standard devient incohérente car g est supérieur au WACC', 'is_correct' => true],
                            ['choice_text' => 'Le WACC devient inférieur au taux sans risque, ce qui rend le modèle inutilisable', 'is_correct' => false],
                            ['choice_text' => 'Le FCF terminal devient négatif, ce qui annule l\'actualisation de la dernière année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société mature a une croissance de long terme supposée faible et stable. Quelle approche peut être adaptée pour sa valeur terminale ?',
                        'explanation' => 'Pour une entreprise mature, l\'hypothèse de long terme doit être compatible avec une phase de maturité. Une croissance perpétuelle raisonnable évite de prolonger indéfiniment une phase exceptionnelle.',
                        'choices' => [
                            ['choice_text' => 'Une croissance perpétuelle supérieure à celle de l\'économie dans son ensemble', 'is_correct' => false],
                            ['choice_text' => 'Une croissance égale à celle des cinq premières années de projection', 'is_correct' => false],
                            ['choice_text' => 'Une croissance perpétuelle modérée et cohérente avec un état mature', 'is_correct' => true],
                            ['choice_text' => 'Un taux de croissance supérieur au WACC pour refléter la solidité de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur terminale peut-elle représenter une grande partie d\'un DCF ?',
                        'explanation' => 'La valeur terminale couvre souvent une longue période future. Elle peut donc représenter une part importante de la valeur totale, ce qui rend ses hypothèses particulièrement sensibles.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle inclut la valeur des flux déjà encaissés avant la date de valorisation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle capitalise les flux au-delà de la période explicite de prévision', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elle est actualisée à un taux plus faible que les flux de la période explicite', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle intègre la valeur comptable des actifs en fin de période de projection', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une approche par multiple de sortie, quelle logique utilise-t-on pour calculer la valeur terminale ?',
                        'explanation' => 'La méthode du multiple de sortie estime la valeur terminale à partir d\'un multiple, par exemple EV/EBITDA, appliqué à une métrique de l\'année terminale.',
                        'choices' => [
                            ['choice_text' => 'On actualise le dernier flux de la période explicite au taux de croissance à long terme', 'is_correct' => false],
                            ['choice_text' => 'On applique un multiple à la valeur comptable des actifs constatée à la date de valorisation', 'is_correct' => false],
                            ['choice_text' => 'On capitalise le chiffre d\'affaires historique en lui appliquant le taux d\'imposition moyen de l\'entreprise sur la période', 'is_correct' => false],
                            ['choice_text' => 'On applique un multiple de marché à une métrique financière projetée à la fin de la période explicite', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente son EBITDA terminal de 10 % tout en conservant le même multiple de sortie. Quel effet mécanique peut avoir cette hausse ?',
                        'explanation' => 'Si le multiple reste constant, la valeur terminale = multiple × EBITDA terminal. Une hausse de 10 % de l\'EBITDA entraîne donc une hausse de 10 % de la valeur terminale.',
                        'choices' => [
                            ['choice_text' => 'La valeur terminale calculée par multiple diminue de 10 %', 'is_correct' => false],
                            ['choice_text' => 'La valeur terminale calculée par multiple augmente de 10 %', 'is_correct' => true],
                            ['choice_text' => 'La valeur terminale calculée par multiple augmente de 20 %', 'is_correct' => false],
                            ['choice_text' => 'La valeur terminale reste identique car le multiple est constant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer une valeur terminale issue de Gordon avec une valeur terminale issue d\'un multiple peut-il être intéressant ?',
                        'explanation' => 'Comparer les deux approches permet de repérer des hypothèses atypiques. Une grande divergence peut signaler un multiple, une marge ou une croissance terminale difficile à justifier.',
                        'choices' => [
                            ['choice_text' => 'Les deux méthodes reposent sur la même logique et se vérifient donc l\'une l\'autre', 'is_correct' => false],
                            ['choice_text' => 'La méthode de Gordon est réservée aux sociétés cotées et le multiple aux sociétés privées', 'is_correct' => false],
                            ['choice_text' => 'Les deux méthodes offrent des contrôles de cohérence fondés sur des logiques différentes', 'is_correct' => true],
                            ['choice_text' => 'La valeur par multiple permet de fixer le taux de croissance à long terme sans autre hypothèse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un DCF donne une valeur très élevée uniquement parce que le taux terminal est passé de 2 % à 3 %. Que faudrait-il examiner ?',
                        'explanation' => 'La valeur terminale est souvent très sensible à g et au WACC. Une variation apparemment faible peut donc modifier fortement la valeur, ce qui justifie une analyse de sensibilité.',
                        'choices' => [
                            ['choice_text' => 'Le taux de croissance historique des trois derniers exercices, qui doit être repris pour fixer le taux terminal', 'is_correct' => false],
                            ['choice_text' => 'Le montant de la dette nette, qui varie avec le taux de croissance terminal', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'imposition, qui détermine à lui seul la sensibilité de la valeur terminale', 'is_correct' => false],
                            ['choice_text' => 'La sensibilité de la valeur terminale et la cohérence économique de l\'hypothèse de croissance', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Étude de cas : valoriser une entreprise simple',
                'description' => 'Mettre ensemble les principaux réflexes de valorisation dans des mini-cas proches de situations de travail.',
                'questions' => [
                    [
                        'question' => 'Une PME génère 4 M€ d\'EBITDA. Des transactions comparables se situent autour de 7x EBITDA. Quelle première Enterprise Value indicative obtient-on ?',
                        'explanation' => '4 × 7 = 28 M€. Cette estimation devra ensuite être confrontée à la dette nette, aux différences entre la cible et les comparables et, idéalement, à une autre méthode.',
                        'choices' => [
                            ['choice_text' => '11 M€', 'is_correct' => false],
                            ['choice_text' => '28 M€', 'is_correct' => true],
                            ['choice_text' => '21 M€', 'is_correct' => false],
                            ['choice_text' => '35 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La PME précédente a 6 M€ de dette et 2 M€ de trésorerie excédentaire. Quelle Equity Value simplifiée découle de l\'Enterprise Value de 28 M€ ?',
                        'explanation' => 'La dette nette = 6 - 2 = 4 M€. L\'Equity Value simplifiée est donc 28 - 4 = 24 M€.',
                        'choices' => [
                            ['choice_text' => '20 M€', 'is_correct' => false],
                            ['choice_text' => '26 M€', 'is_correct' => false],
                            ['choice_text' => '32 M€', 'is_correct' => false],
                            ['choice_text' => '24 M€', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société veut augmenter ses ventes de 15 % l\'an prochain, mais doit aussi financer davantage de stock. Quel point doit être intégré dans le DCF ?',
                        'explanation' => 'Une croissance du stock peut consommer du cash. Le DCF doit donc relier l\'activité future au besoin en fonds de roulement, pas seulement au chiffre d\'affaires.',
                        'choices' => [
                            ['choice_text' => 'L\'effet de la hausse du BFR sur le Free Cash Flow', 'is_correct' => true],
                            ['choice_text' => 'La valeur comptable des stocks à ajouter à l\'Enterprise Value', 'is_correct' => false],
                            ['choice_text' => 'La hausse des stocks, déjà traduite dans l\'EBITDA', 'is_correct' => false],
                            ['choice_text' => 'L\'effet de la croissance des ventes sur le WACC', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur hésite entre une valorisation DCF de 26 M€ et une valorisation par comparables de 38 M€. Quel réflexe est le plus utile ?',
                        'explanation' => 'Une divergence importante peut venir des hypothèses de croissance, de WACC, de valeur terminale ou des multiples de marché. Il faut expliquer l\'écart plutôt que l\'effacer mécaniquement.',
                        'choices' => [
                            ['choice_text' => 'Retenir la moyenne des deux chiffres, soit 32 M€, afin de neutraliser l\'écart entre eux', 'is_correct' => false],
                            ['choice_text' => 'Comprendre pourquoi les deux méthodes divergent avant de retenir un chiffre', 'is_correct' => true],
                            ['choice_text' => 'Retenir la valeur par comparables, car elle reflète le prix du marché', 'is_correct' => false],
                            ['choice_text' => 'Réduire le WACC jusqu\'à ce que le DCF rejoigne les 38 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un contrat exceptionnel qui a gonflé son EBITDA cette année. Pourquoi l\'analyste peut-il normaliser l\'EBITDA ?',
                        'explanation' => 'Une valorisation par multiple doit idéalement utiliser une performance représentative. Les éléments non récurrents doivent être identifiés et traités de façon cohérente.',
                        'choices' => [
                            ['choice_text' => 'Pour aligner l\'EBITDA sur le résultat net après impôt et charges financières', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de capitaliser un niveau de bénéfice qui ne devrait pas se répéter', 'is_correct' => true],
                            ['choice_text' => 'Pour intégrer le contrat exceptionnel dans les prévisions de chaque année future', 'is_correct' => false],
                            ['choice_text' => 'Pour convertir l\'EBITDA en Free Cash Flow avant d\'appliquer le multiple', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une cible affiche une croissance forte mais dépend d\'un seul gros client. Quel aspect de la valorisation mérite une attention particulière ?',
                        'explanation' => 'La concentration client peut augmenter le risque des flux futurs. Elle peut donc influencer les hypothèses de croissance, les marges et éventuellement le taux de rendement exigé.',
                        'choices' => [
                            ['choice_text' => 'Le risque lié à la concentration des revenus', 'is_correct' => true],
                            ['choice_text' => 'Le niveau de marge brute des principaux concurrents', 'is_correct' => false],
                            ['choice_text' => 'La date de clôture de l\'exercice comptable', 'is_correct' => false],
                            ['choice_text' => 'La forme juridique de la société', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle projette une marge EBITDA passant de 12 % à 28 % en trois ans sans changement opérationnel identifiable. Quelle réaction est raisonnable ?',
                        'explanation' => 'Une forte amélioration de marge doit être reliée à des leviers concrets : prix, mix produit, économies d\'échelle, productivité ou réduction de coûts. Sans justification, elle peut surestimer la valeur.',
                        'choices' => [
                            ['choice_text' => 'Valider la marge de 28 % dès lors que le chiffre d\'affaires augmente aussi', 'is_correct' => false],
                            ['choice_text' => 'Réduire le WACC pour tenir compte de cette amélioration de marge', 'is_correct' => false],
                            ['choice_text' => 'Demander la justification opérationnelle de cette amélioration', 'is_correct' => true],
                            ['choice_text' => 'Accepter la trajectoire si le multiple de sortie reste inférieur à celui du secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société a 10 M€ de FCF stable et un WACC de 10 %, sans croissance terminale. Quelle valeur terminale de Gordon simplifiée obtient-on si 10 M€ représente le FCF de l\'année suivante ?',
                        'explanation' => 'Avec g = 0 %, TV = FCF1 / WACC = 10 / 0,10 = 100 M€. Cette valeur terminale doit ensuite être actualisée à la date de valorisation si elle est située dans le futur.',
                        'choices' => [
                            ['choice_text' => '10 M€', 'is_correct' => false],
                            ['choice_text' => '90 M€', 'is_correct' => false],
                            ['choice_text' => '110 M€', 'is_correct' => false],
                            ['choice_text' => '100 M€', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise est valorisée 50 M€ en Enterprise Value et possède 18 M€ de dette nette. Quel montant de valeur revient approximativement aux actionnaires avant autres ajustements ?',
                        'explanation' => 'Equity Value = 50 - 18 = 32 M€. C\'est une simplification qui suppose qu\'aucun autre ajustement significatif n\'est nécessaire.',
                        'choices' => [
                            ['choice_text' => '32 M€', 'is_correct' => true],
                            ['choice_text' => '68 M€', 'is_correct' => false],
                            ['choice_text' => '50 M€', 'is_correct' => false],
                            ['choice_text' => '18 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le comité de direction demande : « Quelle hypothèse fait le plus bouger notre valorisation ? » Quelle analyse répond directement à cette question ?',
                        'explanation' => 'Une analyse de sensibilité permet de faire varier WACC, croissance, marges ou multiples et de mesurer leur effet sur la valeur. Elle aide à repérer les hypothèses les plus critiques.',
                        'choices' => [
                            ['choice_text' => 'Un rapprochement des comptes de bilan et de résultat', 'is_correct' => false],
                            ['choice_text' => 'Une analyse de sensibilité des hypothèses clés', 'is_correct' => true],
                            ['choice_text' => 'Un calcul du taux de rotation des stocks', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison avec le cours de bourse historique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur propose 30 M€ pour une entreprise alors que le modèle interne affiche 36 M€. Quelle conclusion peut-on tirer immédiatement ?',
                        'explanation' => 'Une offre réelle reflète aussi la négociation, le financement, le risque perçu, les synergies et les conditions du marché. Une différence avec le modèle mérite une analyse, pas une conclusion automatique.',
                        'choices' => [
                            ['choice_text' => 'L\'offre est inférieure à l\'estimation du modèle, mais il faut examiner les différences entre valeur théorique et prix de marché', 'is_correct' => true],
                            ['choice_text' => 'L\'offre sous-évalue l\'entreprise de 6 M€, de sorte que le vendeur doit la refuser et attendre une proposition plus proche du modèle', 'is_correct' => false],
                            ['choice_text' => 'Le modèle est validé par cette offre, puisqu\'elle se situe dans une marge de 20 % autour de la valeur de 36 M€', 'is_correct' => false],
                            ['choice_text' => 'L\'écart de 6 M€ correspond à la dette nette de la cible, qui n\'a pas été prise en compte dans le modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise utilise à la fois un DCF et des comparables. Pourquoi cette combinaison peut-elle être utile ?',
                        'explanation' => 'Le DCF dépend des flux et du risque estimés, tandis que les comparables reflètent des niveaux de marché. Leur rapprochement permet de détecter des incohérences ou des hypothèses atypiques.',
                        'choices' => [
                            ['choice_text' => 'Les deux approches reposent sur les mêmes hypothèses de croissance et de risque et se renforcent mutuellement', 'is_correct' => false],
                            ['choice_text' => 'La moyenne des deux résultats supprime l\'incertitude liée aux hypothèses de chaque méthode', 'is_correct' => false],
                            ['choice_text' => 'Les deux approches permettent de confronter une logique intrinsèque à une référence de marché', 'is_correct' => true],
                            ['choice_text' => 'La combinaison est exigée par les normes comptables pour valoriser une PME', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Construire une valeur par action',
                'description' => 'Passer de la valeur des capitaux propres à une lecture simple par action et repérer les effets de dilution.',
                'questions' => [
                    [
                        'question' => 'Une entreprise vaut 36 M€ en Equity Value et compte 4 millions d\'actions. Quelle valeur théorique par action obtient-on ?',
                        'explanation' => 'La valeur par action = 36 M€ / 4 M d\'actions = 9 € par action.',
                        'choices' => [
                            ['choice_text' => '4 €', 'is_correct' => false],
                            ['choice_text' => '8 €', 'is_correct' => false],
                            ['choice_text' => '12 €', 'is_correct' => false],
                            ['choice_text' => '9 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société a une Equity Value de 50 M€ et 5 millions d\'actions. Elle émet 1 million d\'actions nouvelles et, dans l\'hypothèse simplifiée, l\'Equity Value totale reste à 50 M€. Quelle valeur par action obtient-on après l\'émission ?',
                        'explanation' => 'Après l\'émission, le nombre de titres passe à 6 millions. 50 M€ / 6 M = environ 8,33 € par action.',
                        'choices' => [
                            ['choice_text' => '10,00 € environ', 'is_correct' => false],
                            ['choice_text' => '7,14 € environ', 'is_correct' => false],
                            ['choice_text' => '8,33 € environ', 'is_correct' => true],
                            ['choice_text' => '12,50 € environ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation de capital peut-elle diluer un actionnaire existant ?',
                        'explanation' => 'Lorsque de nouvelles actions sont émises, la part relative détenue par les anciens actionnaires peut baisser, sauf s\'ils souscrivent suffisamment aux nouveaux titres.',
                        'choices' => [
                            ['choice_text' => 'Parce que la valeur nominale de chaque action existante est réduite par décision de l\'assemblée', 'is_correct' => false],
                            ['choice_text' => 'Parce que le nombre total d\'actions augmente et que sa participation relative peut diminuer', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'entreprise doit rembourser en priorité les nouveaux actionnaires avant les anciens', 'is_correct' => false],
                            ['choice_text' => 'Parce que les nouveaux fonds levés sont affectés à la réduction du capital des actionnaires existants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société possède 80 M€ d\'Equity Value et 10 millions d\'actions. Quel nombre d\'actions faudrait-il pour obtenir une valeur par action de 8 € avec la même Equity Value ?',
                        'explanation' => '80 M€ / 8 € = 10 millions d\'actions. Le calcul montre le lien direct entre Equity Value et nombre de titres.',
                        'choices' => [
                            ['choice_text' => '8 millions d\'actions', 'is_correct' => false],
                            ['choice_text' => '10 millions d\'actions', 'is_correct' => true],
                            ['choice_text' => '12 millions d\'actions', 'is_correct' => false],
                            ['choice_text' => '20 millions d\'actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste divise l\'Enterprise Value directement par le nombre d\'actions sans regarder la dette nette. Quel élément risque-t-il d\'ignorer ?',
                        'explanation' => 'La valeur des actions correspond à l\'Equity Value. La dette nette et les autres ajustements pertinents doivent être pris en compte avant de raisonner en valeur par action.',
                        'choices' => [
                            ['choice_text' => 'Le retraitement de la valeur comptable des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'La conversion du WACC en coût des fonds propres', 'is_correct' => false],
                            ['choice_text' => 'Le calcul de la valeur terminale de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le passage de l\'Enterprise Value à l\'Equity Value', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède 20 M€ de trésorerie excédentaire et 5 M€ de dette. Dans une approche simplifiée, quel est l\'effet net de ces deux éléments sur l\'Equity Value par rapport à l\'Enterprise Value ?',
                        'explanation' => 'La dette nette = 5 - 20 = -15 M€. Une dette nette négative signifie ici que le cash excédentaire dépasse la dette, ce qui augmente l\'Equity Value de 15 M€ par rapport à l\'Enterprise Value.',
                        'choices' => [
                            ['choice_text' => 'Un ajout net de 15 M€', 'is_correct' => true],
                            ['choice_text' => 'Un ajout net de 20 M€', 'is_correct' => false],
                            ['choice_text' => 'Une déduction nette de 15 M€', 'is_correct' => false],
                            ['choice_text' => 'Une déduction nette de 25 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux sociétés ont chacune 60 M€ d\'Equity Value. La première compte 6 millions d\'actions et la seconde 12 millions. Quelle différence simple observe-t-on ?',
                        'explanation' => '60 / 6 = 10 € pour la première et 60 / 12 = 5 € pour la seconde. À Equity Value identique, le nombre d\'actions détermine directement la valeur par titre.',
                        'choices' => [
                            ['choice_text' => 'La seconde a une valeur par action deux fois plus élevée', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont la même valeur par action', 'is_correct' => false],
                            ['choice_text' => 'La valeur par action ne dépend pas du nombre de titres', 'is_correct' => false],
                            ['choice_text' => 'La première a une valeur par action deux fois plus élevée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il faire attention aux actions potentiellement dilutives dans une analyse par action ?',
                        'explanation' => 'Des options, obligations convertibles ou autres instruments peuvent créer des actions supplémentaires selon leur traitement. Pour une analyse par action, la base de titres doit être cohérente avec l\'objectif retenu.',
                        'choices' => [
                            ['choice_text' => 'Elles réduisent la dette nette de l\'entreprise et diminuent donc le nombre d\'actions', 'is_correct' => false],
                            ['choice_text' => 'Elles modifient le chiffre d\'affaires par action mais pas l\'Equity Value ni la valeur par titre', 'is_correct' => false],
                            ['choice_text' => 'Elles peuvent augmenter le nombre de titres pris en compte dans une approche diluée', 'is_correct' => true],
                            ['choice_text' => 'Elles sont déjà intégrées dans l\'Enterprise Value et n\'ont pas d\'effet par action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société annonce un rachat d\'actions mais paie un prix très élevé par rapport à la valeur estimée des titres. Pourquoi faut-il éviter de conclure automatiquement que l\'opération crée de la valeur par action ?',
                        'explanation' => 'Réduire le nombre d\'actions peut améliorer mécaniquement certains indicateurs, mais la création de valeur dépend du prix de rachat et de l\'utilisation alternative du cash.',
                        'choices' => [
                            ['choice_text' => 'L\'effet dépend du prix payé, du financement et de la valeur économique des actions rachetées', 'is_correct' => true],
                            ['choice_text' => 'Un rachat réduit le nombre d\'actions, donc la valeur par action augmente quel que soit le prix payé', 'is_correct' => false],
                            ['choice_text' => 'Un rachat est neutre pour les actionnaires restants, quel que soit le prix de rachat', 'is_correct' => false],
                            ['choice_text' => 'Un rachat est financé par la dette, ce qui augmente mécaniquement l\'Equity Value de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une Equity Value de 90 M€ et 9 millions d\'actions. Elle verse ensuite 9 M€ de cash excédentaire en dividende, sans autre changement simplifié. Que se passe-t-il immédiatement pour l\'Equity Value après le paiement ?',
                        'explanation' => 'Un dividende distribue du cash aux actionnaires et réduit les actifs disponibles dans l\'entreprise. Dans cette hypothèse simplifiée, l\'Equity Value post-dividende peut passer d\'environ 90 à 81 M€, avant tout autre effet de marché.',
                        'choices' => [
                            ['choice_text' => 'Elle peut diminuer d\'environ 9 M€', 'is_correct' => true],
                            ['choice_text' => 'Elle peut augmenter d\'environ 9 M€', 'is_correct' => false],
                            ['choice_text' => 'Elle peut diminuer d\'environ 18 M€', 'is_correct' => false],
                            ['choice_text' => 'Elle peut rester proche de 90 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer une valeur par action issue du modèle avec le cours boursier peut-il être informatif sans que les deux chiffres soient forcément identiques ?',
                        'explanation' => 'Le cours reflète les attentes et conditions de marché à un moment donné, tandis que le modèle dépend des hypothèses de l\'analyste. L\'écart peut donc être analysé plutôt que considéré comme une erreur automatique.',
                        'choices' => [
                            ['choice_text' => 'Le cours reflète la valeur comptable des capitaux propres, alors que le modèle reflète la valeur de marché', 'is_correct' => false],
                            ['choice_text' => 'Le modèle prend en compte la dette nette, alors que le cours boursier ne dépend pas de la structure financière de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le cours est mesuré à une date unique, ce qui le rend indépendant des attentes des investisseurs sur l\'avenir de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le modèle et le marché peuvent intégrer des hypothèses différentes sur la croissance, le risque et les perspectives', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un analyste oublie de tenir compte d\'une émission d\'actions récente dans son calcul de valeur par action. Quel biais peut en résulter ?',
                        'explanation' => 'Diviser la même Equity Value par un nombre d\'actions trop faible donne mécaniquement une valeur par action trop élevée. Le nombre de titres doit donc être mis à jour.',
                        'choices' => [
                            ['choice_text' => 'La valeur par action peut être sous-estimée si le nombre de titres réel est supérieur à celui utilisé', 'is_correct' => false],
                            ['choice_text' => 'L\'Equity Value est surestimée, car l\'émission récente augmente la dette nette de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'L\'Enterprise Value est sous-évaluée, car les nouvelles actions ne sont pas intégrées au bilan', 'is_correct' => false],
                            ['choice_text' => 'La valeur par action peut être surestimée si le nombre de titres réel est supérieur à celui utilisé', 'is_correct' => true],
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
