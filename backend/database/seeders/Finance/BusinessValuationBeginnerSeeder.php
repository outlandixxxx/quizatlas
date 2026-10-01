<?php

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

        $quizzes = [
            [
                'title' => "Premiers réflexes en évaluation d'entreprise",
                'description' => "Acquérir les repères essentiels pour comprendre ce que l'on cherche réellement à mesurer lors d'une valorisation.",
                'duration' => 24,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Un dirigeant vous demande combien vaut son entreprise avant de négocier avec un investisseur. Que cherche-t-on principalement à estimer ?",
                        'choices' => [
                            ['choice_text' => "La valeur économique de l'entreprise selon les hypothèses retenues", 'is_correct' => true],
                            ['choice_text' => "Le montant exact que la banque acceptera de prêter", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires de l'année prochaine", 'is_correct' => false],
                            ['choice_text' => "Le nombre de salariés nécessaires", 'is_correct' => false],
                        ],
                        'explanation' => "Une valorisation cherche à estimer une valeur économique à une date donnée. Le prix final d'une transaction peut ensuite différer selon la négociation, le financement et les conditions du marché.",
                    ],
                    [
                        'question' => "Une société réalise 10 M€ de chiffre d'affaires et 1 M€ d'EBITDA. Un analyste affirme que la valeur de l'entreprise est donc de 10 M€. Quel est le problème ?",
                        'choices' => [
                            ['choice_text' => "Le chiffre d'affaires seul ne permet pas de déterminer la valeur de l'entreprise", 'is_correct' => true],
                            ['choice_text' => "L'EBITDA ne peut jamais être utilisé en valorisation", 'is_correct' => false],
                            ['choice_text' => "Une entreprise vaut toujours exactement son chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "La valeur dépend uniquement du nombre d'employés", 'is_correct' => false],
                        ],
                        'explanation' => "Le chiffre d'affaires mesure l'activité, pas directement la valeur. La rentabilité, le risque, la croissance, la dette, les flux de trésorerie et les multiples de marché peuvent tous intervenir.",
                    ],
                    [
                        'question' => "Deux entreprises ont le même chiffre d'affaires, mais la première génère beaucoup plus de cash avec un niveau de risque comparable. Que peut-on raisonnablement envisager ?",
                        'choices' => [
                            ['choice_text' => "La première peut présenter une valeur plus élevée, toutes choses égales par ailleurs", 'is_correct' => true],
                            ['choice_text' => "Les deux doivent obligatoirement avoir la même valeur", 'is_correct' => false],
                            ['choice_text' => "La seconde vaut forcément deux fois plus", 'is_correct' => false],
                            ['choice_text' => "Le cash flow n'a aucun lien avec la valorisation", 'is_correct' => false],
                        ],
                        'explanation' => "À activité comparable, une capacité supérieure à générer des flux de trésorerie peut soutenir une valeur plus élevée. Il faut toutefois regarder aussi la croissance, le risque et le besoin d'investissement.",
                    ],
                    [
                        'question' => "Dans une transaction, le vendeur annonce 80 M€ et l'acheteur propose 65 M€. Quelle notion décrit le mieux la situation ?",
                        'choices' => [
                            ['choice_text' => "Le prix de transaction est encore en cours de négociation", 'is_correct' => true],
                            ['choice_text' => "La valeur comptable est automatiquement 72,5 M€", 'is_correct' => false],
                            ['choice_text' => "Le WACC est nécessairement 7,5 %", 'is_correct' => false],
                            ['choice_text' => "L'EBITDA moyen vaut 72,5 M€", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur théorique et le prix effectivement négocié sont deux notions distinctes. Le prix résulte du processus de négociation et des conditions de la transaction.",
                    ],
                    [
                        'question' => "Pourquoi un analyste indique-t-il souvent une date de valorisation précise, par exemple au 31 décembre ?",
                        'choices' => [
                            ['choice_text' => "Parce que les flux, la dette et les hypothèses disponibles dépendent d'une date donnée", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une entreprise change juridiquement tous les 31 décembre", 'is_correct' => false],
                            ['choice_text' => "Parce que les multiples ne sont calculables qu'en décembre", 'is_correct' => false],
                            ['choice_text' => "Parce que l'actualisation fonctionne uniquement sur une année civile", 'is_correct' => false],
                        ],
                        'explanation' => "Une valorisation est une photographie économique à une date de référence. Les données financières, la dette nette et les hypothèses de marché doivent être cohérentes avec cette date.",
                    ],
                    [
                        'question' => "Une entreprise possède 2 M€ de trésorerie excédentaire et aucune dette. Dans une approche simple, quel effet cette trésorerie peut-elle avoir sur la valeur des actions ?",
                        'choices' => [
                            ['choice_text' => "Elle peut augmenter l'equity value par rapport à la valeur d'entreprise", 'is_correct' => true],
                            ['choice_text' => "Elle diminue forcément l'equity value", 'is_correct' => false],
                            ['choice_text' => "Elle est toujours ignorée dans toute valorisation", 'is_correct' => false],
                            ['choice_text' => "Elle devient automatiquement du chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur d'entreprise correspond à la valeur des opérations avant certains ajustements de financement. Une trésorerie excédentaire peut ensuite être ajoutée pour passer de l'enterprise value à l'equity value.",
                    ],
                    [
                        'question' => "Un analyste utilise une valorisation basée sur des hypothèses de croissance et de marges. Quel comportement est le plus professionnel ?",
                        'choices' => [
                            ['choice_text' => "Documenter les hypothèses et vérifier leur cohérence avec l'activité", 'is_correct' => true],
                            ['choice_text' => "Choisir les hypothèses qui donnent la valeur la plus élevée sans justification", 'is_correct' => false],
                            ['choice_text' => "Modifier les résultats pour qu'ils ressemblent au marché", 'is_correct' => false],
                            ['choice_text' => "Éviter toute analyse de sensibilité", 'is_correct' => false],
                        ],
                        'explanation' => "Une valorisation est aussi crédible que ses hypothèses. Elles doivent être explicites, cohérentes avec les données disponibles et testées par des scénarios ou sensibilités.",
                    ],
                    [
                        'question' => "Une valorisation produit 45 M€ avec les hypothèses actuelles. Quel terme décrit le mieux ce chiffre ?",
                        'choices' => [
                            ['choice_text' => "Une estimation de valeur fondée sur les hypothèses du modèle", 'is_correct' => true],
                            ['choice_text' => "Un prix garanti par le marché", 'is_correct' => false],
                            ['choice_text' => "Une créance certaine sur l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Un montant comptable obligatoire", 'is_correct' => false],
                        ],
                        'explanation' => "Un modèle produit une estimation, pas une garantie de prix. Deux analystes peuvent obtenir des résultats différents parce que leurs hypothèses de croissance, de risque ou de multiples diffèrent.",
                    ],
                    [
                        'question' => "Quel élément est généralement le plus important à éviter dans un modèle de valorisation ?",
                        'choices' => [
                            ['choice_text' => "Des hypothèses incohérentes entre elles", 'is_correct' => true],
                            ['choice_text' => "Des calculs reproductibles", 'is_correct' => false],
                            ['choice_text' => "Des données clairement identifiées", 'is_correct' => false],
                            ['choice_text' => "Une présentation lisible", 'is_correct' => false],
                        ],
                        'explanation' => "Une hypothèse isolée peut sembler raisonnable mais devenir problématique si elle contredit d'autres parties du modèle. La cohérence d'ensemble est essentielle.",
                    ],
                    [
                        'question' => "Une entreprise fortement endettée peut-elle avoir une equity value inférieure à son enterprise value ?",
                        'choices' => [
                            ['choice_text' => "Oui, car la dette nette peut être déduite de l'enterprise value", 'is_correct' => true],
                            ['choice_text' => "Non, ces deux valeurs sont toujours identiques", 'is_correct' => false],
                            ['choice_text' => "Non, l'equity value inclut toujours plus de dette", 'is_correct' => false],
                            ['choice_text' => "Oui, uniquement si le chiffre d'affaires est nul", 'is_correct' => false],
                        ],
                        'explanation' => "Dans une présentation simplifiée, equity value = enterprise value - dette nette, avec des ajustements éventuels. L'equity value peut donc être sensiblement inférieure à l'enterprise value.",
                    ],
                    [
                        'question' => "Un étudiant compare une entreprise de croissance rapide avec une entreprise mature uniquement sur leur valeur comptable des capitaux propres. Quelle limite apparaît ?",
                        'choices' => [
                            ['choice_text' => "La valeur comptable ne reflète pas toujours le potentiel économique futur", 'is_correct' => true],
                            ['choice_text' => "La valeur comptable est toujours supérieure à la valeur de marché", 'is_correct' => false],
                            ['choice_text' => "Les entreprises de croissance n'ont jamais de capitaux propres", 'is_correct' => false],
                            ['choice_text' => "La comptabilité ne contient aucun chiffre utilisable", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur comptable est utile pour certaines analyses mais ne capture pas toujours les actifs incorporels, la croissance future ou les attentes du marché. D'autres méthodes peuvent être nécessaires.",
                    ],
                ],
            ],
            [
                'title' => "Enterprise Value et Equity Value",
                'description' => "Comprendre la passerelle entre valeur d'entreprise, dette, trésorerie et valeur revenant aux actionnaires.",
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une entreprise a une Enterprise Value de 120 M€, 30 M€ de dette et 10 M€ de trésorerie. En version simplifiée, quelle est son Equity Value ?",
                        'choices' => [
                            ['choice_text' => "100 M€", 'is_correct' => true],
                            ['choice_text' => "80 M€", 'is_correct' => false],
                            ['choice_text' => "120 M€", 'is_correct' => false],
                            ['choice_text' => "160 M€", 'is_correct' => false],
                        ],
                        'explanation' => "La dette nette est de 30 - 10 = 20 M€. On obtient donc une Equity Value de 120 - 20 = 100 M€.",
                    ],
                    [
                        'question' => "Une société n'a aucune dette mais détient 15 M€ de trésorerie excédentaire. Son Enterprise Value est de 70 M€. Quelle Equity Value simplifiée en déduit-on ?",
                        'choices' => [
                            ['choice_text' => "85 M€", 'is_correct' => true],
                            ['choice_text' => "55 M€", 'is_correct' => false],
                            ['choice_text' => "70 M€", 'is_correct' => false],
                            ['choice_text' => "105 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Sans dette et avec 15 M€ de trésorerie excédentaire, la trésorerie augmente la valeur revenant aux actionnaires : 70 + 15 = 85 M€.",
                    ],
                    [
                        'question' => "Pourquoi retire-t-on généralement la dette nette pour passer de l'Enterprise Value à l'Equity Value ?",
                        'choices' => [
                            ['choice_text' => "Parce que la dette représente une créance prioritaire sur les actifs et les flux de l'entreprise", 'is_correct' => true],
                            ['choice_text' => "Parce que la dette est un produit d'exploitation", 'is_correct' => false],
                            ['choice_text' => "Parce que la dette augmente automatiquement l'EBITDA", 'is_correct' => false],
                            ['choice_text' => "Parce que la dette est toujours considérée comme de la trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "L'Enterprise Value concerne l'activité indépendamment de la structure de financement, tandis que l'Equity Value correspond à la valeur disponible pour les actionnaires après prise en compte de la dette nette.",
                    ],
                    [
                        'question' => "Une entreprise affiche 50 M€ d'Enterprise Value et 20 M€ de dette nette. Un analyste annonce une Equity Value de 70 M€. Quelle erreur a-t-il commise ?",
                        'choices' => [
                            ['choice_text' => "Il a ajouté la dette nette au lieu de la déduire", 'is_correct' => true],
                            ['choice_text' => "Il a oublié de calculer le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Il a multiplié l'EBITDA par deux", 'is_correct' => false],
                            ['choice_text' => "Il a actualisé un flux de trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Dans la relation simplifiée, Equity Value = Enterprise Value - dette nette. Ici, 50 - 20 = 30 M€ et non 70 M€.",
                    ],
                    [
                        'question' => "Une entreprise a beaucoup de cash opérationnel mais doit maintenir une réserve minimale pour faire fonctionner ses activités. Pourquoi faut-il être prudent avant d'ajouter tout le cash à l'Equity Value ?",
                        'choices' => [
                            ['choice_text' => "Une partie de la trésorerie peut être nécessaire à l'exploitation et ne pas être réellement excédentaire", 'is_correct' => true],
                            ['choice_text' => "Toute trésorerie est toujours une dette", 'is_correct' => false],
                            ['choice_text' => "Le cash n'a jamais de valeur", 'is_correct' => false],
                            ['choice_text' => "Le cash doit toujours être déduit deux fois", 'is_correct' => false],
                        ],
                        'explanation' => "Dans une analyse pratique, on distingue souvent la trésorerie réellement excédentaire du cash nécessaire au fonctionnement de l'entreprise. Cela évite de surestimer la valeur revenant aux actionnaires.",
                    ],
                    [
                        'question' => "Une société a 40 M€ d'Enterprise Value, 5 M€ de dette et 8 M€ de trésorerie excédentaire. Quel est le niveau de dette nette ?",
                        'choices' => [
                            ['choice_text' => "-3 M€", 'is_correct' => true],
                            ['choice_text' => "3 M€", 'is_correct' => false],
                            ['choice_text' => "13 M€", 'is_correct' => false],
                            ['choice_text' => "45 M€", 'is_correct' => false],
                        ],
                        'explanation' => "La dette nette = dette - trésorerie = 5 - 8 = -3 M€. Une dette nette négative signifie ici que la trésorerie excédentaire dépasse la dette.",
                    ],
                    [
                        'question' => "Dans une acquisition, pourquoi l'acheteur s'intéresse-t-il à l'Enterprise Value avant de regarder le financement final de la transaction ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elle permet de comparer la valeur de l'activité indépendamment de la manière dont elle est financée", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elle correspond toujours au prix du bâtiment", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle est identique au cash en banque", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle ignore totalement la rentabilité", 'is_correct' => false],
                        ],
                        'explanation' => "L'Enterprise Value facilite la comparaison entre entreprises ayant des structures de financement différentes. Le financement de l'opération intervient ensuite dans la détermination de la valeur des capitaux propres et du prix payé aux vendeurs.",
                    ],
                    [
                        'question' => "Une entreprise refinance une partie de sa dette sans changer ses actifs opérationnels. Quel élément peut changer fortement ?",
                        'choices' => [
                            ['choice_text' => "La structure de financement", 'is_correct' => true],
                            ['choice_text' => "Le nombre de clients du marché mondial", 'is_correct' => false],
                            ['choice_text' => "Le secteur d'activité de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "La nature du produit vendu", 'is_correct' => false],
                        ],
                        'explanation' => "Un refinancement modifie principalement la structure du passif et le profil des coûts financiers. La valeur opérationnelle de l'activité peut rester inchangée, même si la dette nette ou le coût du financement évolue.",
                    ],
                    [
                        'question' => "Un analyste confond Enterprise Value et market capitalization. Pourquoi est-ce problématique ?",
                        'choices' => [
                            ['choice_text' => "La market capitalization correspond aux actions, alors que l'Enterprise Value tient compte de la dette nette et d'autres éléments de financement", 'is_correct' => true],
                            ['choice_text' => "Les deux termes désignent exactement la même chose", 'is_correct' => false],
                            ['choice_text' => "La market capitalization correspond uniquement aux ventes", 'is_correct' => false],
                            ['choice_text' => "L'Enterprise Value correspond uniquement aux immobilisations", 'is_correct' => false],
                        ],
                        'explanation' => "La capitalisation boursière représente la valeur des actions cotées. L'Enterprise Value part de cette valeur et procède à des ajustements liés notamment à la dette et à la trésorerie.",
                    ],
                    [
                        'question' => "Une entreprise possède 60 M€ d'Enterprise Value et une dette nette de 15 M€. Si 5 M€ de dette sont remboursés avec la trésorerie excédentaire, que devient la dette nette, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Elle passe à 10 M€", 'is_correct' => true],
                            ['choice_text' => "Elle passe à 20 M€", 'is_correct' => false],
                            ['choice_text' => "Elle passe à 5 M€", 'is_correct' => false],
                            ['choice_text' => "Elle reste forcément à 15 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Rembourser 5 M€ de dette avec du cash excédentaire réduit la dette nette de 5 M€. Elle passe donc de 15 à 10 M€.",
                    ],
                    [
                        'question' => "Dans une négociation, pourquoi demander un bridge entre Enterprise Value et Equity Value est-il utile ?",
                        'choices' => [
                            ['choice_text' => "Pour voir clairement comment la dette, la trésorerie et certains ajustements modifient le montant revenant aux actionnaires", 'is_correct' => true],
                            ['choice_text' => "Pour calculer directement le salaire du directeur financier", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer tous les états financiers", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute discussion sur le prix", 'is_correct' => false],
                        ],
                        'explanation' => "Le bridge rend visible la mécanique de passage de la valeur de l'activité à la valeur des capitaux propres. C'est particulièrement utile lorsque la dette, le cash et les autres ajustements sont importants.",
                    ],
                ],
            ],
            [
                'title' => "DCF : raisonner avec les flux de trésorerie",
                'description' => "Découvrir la logique d'une valorisation DCF et comprendre pourquoi les flux futurs doivent être actualisés.",
                'duration' => 29,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une entreprise devrait recevoir 110 000 € dans un an. Pourquoi ce montant vaut-il moins aujourd'hui à un taux d'actualisation positif ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'un euro reçu plus tard a une valeur actuelle inférieure lorsqu'on exige un rendement positif", 'is_correct' => true],
                            ['choice_text' => "Parce que la banque retire automatiquement 10 %", 'is_correct' => false],
                            ['choice_text' => "Parce que les flux futurs sont toujours annulés", 'is_correct' => false],
                            ['choice_text' => "Parce que la trésorerie n'a aucune valeur", 'is_correct' => false],
                        ],
                        'explanation' => "L'actualisation traduit la valeur temps de l'argent et le rendement exigé. À taux positif, un flux futur est converti en une valeur actuelle plus faible.",
                    ],
                    [
                        'question' => "Un flux de 100 000 € est attendu dans un an et le taux d'actualisation est de 10 %. Quelle valeur actuelle simplifiée obtient-on ?",
                        'choices' => [
                            ['choice_text' => "90 909 € environ", 'is_correct' => true],
                            ['choice_text' => "100 000 €", 'is_correct' => false],
                            ['choice_text' => "110 000 €", 'is_correct' => false],
                            ['choice_text' => "9 091 €", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur actuelle est 100 000 / 1,10 = environ 90 909 €. L'actualisation ramène le flux futur à sa valeur équivalente aujourd'hui.",
                    ],
                    [
                        'question' => "Dans un DCF, pourquoi projette-t-on les Free Cash Flows plutôt que simplement le chiffre d'affaires ?",
                        'choices' => [
                            ['choice_text' => "Parce que la valeur dépend des flux de trésorerie disponibles après les besoins opérationnels et d'investissement", 'is_correct' => true],
                            ['choice_text' => "Parce que le chiffre d'affaires est toujours négatif", 'is_correct' => false],
                            ['choice_text' => "Parce que les ventes ne sont jamais utiles", 'is_correct' => false],
                            ['choice_text' => "Parce que les Free Cash Flows ne tiennent compte d'aucune dépense", 'is_correct' => false],
                        ],
                        'explanation' => "Le chiffre d'affaires mesure les ventes, alors que le Free Cash Flow cherche à approcher le cash réellement généré après les principaux besoins économiques de l'activité.",
                    ],
                    [
                        'question' => "Une hausse du besoin en fonds de roulement, toutes choses égales par ailleurs, a généralement quel effet sur le Free Cash Flow ?",
                        'choices' => [
                            ['choice_text' => "Elle réduit le Free Cash Flow", 'is_correct' => true],
                            ['choice_text' => "Elle augmente automatiquement le Free Cash Flow", 'is_correct' => false],
                            ['choice_text' => "Elle n'a jamais d'effet", 'is_correct' => false],
                            ['choice_text' => "Elle transforme le FCF en EBITDA", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse du besoin en fonds de roulement mobilise de la trésorerie. Elle constitue donc généralement une consommation de cash et réduit le Free Cash Flow de la période.",
                    ],
                    [
                        'question' => "Une entreprise prévoit 8 M€ de Free Cash Flow l'an prochain et 9 M€ l'année suivante. Que fait l'analyste dans un DCF avant de les additionner à la valeur d'aujourd'hui ?",
                        'choices' => [
                            ['choice_text' => "Il actualise chaque flux à la date de valorisation", 'is_correct' => true],
                            ['choice_text' => "Il les convertit en chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Il les ajoute sans tenir compte du temps", 'is_correct' => false],
                            ['choice_text' => "Il remplace les flux par la dette", 'is_correct' => false],
                        ],
                        'explanation' => "Chaque flux futur doit être ramené à sa valeur actuelle avec le taux d'actualisation approprié. Les périodes différentes n'ont donc pas le même poids aujourd'hui.",
                    ],
                    [
                        'question' => "Deux entreprises ont le même FCF l'an prochain, mais l'une présente un risque nettement supérieur. Que peut-on envisager dans un DCF ?",
                        'choices' => [
                            ['choice_text' => "Un taux d'actualisation plus élevé peut être retenu pour l'entreprise plus risquée", 'is_correct' => true],
                            ['choice_text' => "Un taux d'actualisation nul dans les deux cas", 'is_correct' => false],
                            ['choice_text' => "Une valeur forcément identique", 'is_correct' => false],
                            ['choice_text' => "La suppression des flux futurs de l'entreprise risquée", 'is_correct' => false],
                        ],
                        'explanation' => "À flux identiques, une exigence de rendement plus élevée réduit la valeur actuelle. Le taux d'actualisation reflète notamment le risque du profil de flux considéré.",
                    ],
                    [
                        'question' => "Une entreprise affiche un résultat net positif mais un Free Cash Flow négatif pendant une année. Est-ce nécessairement impossible ?",
                        'choices' => [
                            ['choice_text' => "Non, l'investissement ou une forte consommation de working capital peut absorber le cash", 'is_correct' => true],
                            ['choice_text' => "Oui, résultat net positif signifie toujours FCF positif", 'is_correct' => false],
                            ['choice_text' => "Oui, sauf pour une banque", 'is_correct' => false],
                            ['choice_text' => "Non, mais uniquement si le chiffre d'affaires est nul", 'is_correct' => false],
                        ],
                        'explanation' => "Le résultat net est une mesure comptable. Un programme d'investissement important ou une hausse des créances et des stocks peut provoquer un FCF négatif malgré un résultat bénéficiaire.",
                    ],
                    [
                        'question' => "Dans un DCF, que cherche principalement à représenter le taux d'actualisation ?",
                        'choices' => [
                            ['choice_text' => "Le rendement exigé compte tenu du temps et du risque des flux", 'is_correct' => true],
                            ['choice_text' => "Le taux de croissance du chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Le taux de marge brute historique", 'is_correct' => false],
                            ['choice_text' => "Le taux d'inflation du seul dernier mois", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux d'actualisation convertit les flux futurs en valeur actuelle et reflète le rendement exigé pour le risque correspondant aux flux valorisés.",
                    ],
                    [
                        'question' => "Un analyste augmente toutes les prévisions de FCF de 30 % mais conserve exactement les mêmes hypothèses de marché sans justification. Quel risque crée-t-il ?",
                        'choices' => [
                            ['choice_text' => "Il peut surévaluer l'entreprise si la hausse des flux n'est pas économiquement justifiée", 'is_correct' => true],
                            ['choice_text' => "Il réduit automatiquement la valeur", 'is_correct' => false],
                            ['choice_text' => "Il supprime le besoin d'un taux d'actualisation", 'is_correct' => false],
                            ['choice_text' => "Il transforme l'Enterprise Value en chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "Le DCF est très sensible aux hypothèses de flux. Une hausse mécanique des FCF sans base opérationnelle peut conduire à une estimation de valeur artificiellement élevée.",
                    ],
                    [
                        'question' => "Quelle donnée est la plus directement liée à la capacité d'une entreprise à générer du cash à partir de ses opérations futures ?",
                        'choices' => [
                            ['choice_text' => "Le Free Cash Flow", 'is_correct' => true],
                            ['choice_text' => "Le nombre de pages du rapport annuel", 'is_correct' => false],
                            ['choice_text' => "La valeur nominale des actions", 'is_correct' => false],
                            ['choice_text' => "Le nombre de fournisseurs", 'is_correct' => false],
                        ],
                        'explanation' => "Le Free Cash Flow est une mesure centrale dans un DCF car il représente le flux de trésorerie disponible selon la définition et les conventions retenues par l'analyste.",
                    ],
                    [
                        'question' => "Pourquoi un DCF nécessite-t-il généralement plusieurs années de projections ?",
                        'choices' => [
                            ['choice_text' => "Pour représenter une partie de la trajectoire économique avant la période de valeur terminale", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une entreprise est obligée de fonctionner exactement cinq ans", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un DCF ne peut jamais utiliser deux années", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer l'analyse du risque", 'is_correct' => false],
                        ],
                        'explanation' => "Le DCF utilise souvent une période explicite de prévision avant d'estimer la valeur au-delà de cette période. Le nombre d'années dépend de la maturité et de la visibilité de l'activité.",
                    ],
                ],
            ],
            [
                'title' => "Free Cash Flow et hypothèses opérationnelles",
                'description' => "Relier croissance, marge, investissements et variation du besoin en fonds de roulement au cash disponible.",
                'duration' => 27,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Une société augmente ses ventes, mais ses créances clients progressent encore plus vite. Quel signal mérite l'attention de l'analyste ?",
                        'choices' => [
                            ['choice_text' => "La croissance peut consommer davantage de cash via le besoin en fonds de roulement", 'is_correct' => true],
                            ['choice_text' => "La croissance garantit toujours plus de cash", 'is_correct' => false],
                            ['choice_text' => "Les créances clients sont toujours un produit financier", 'is_correct' => false],
                            ['choice_text' => "Le FCF ne dépend jamais des créances", 'is_correct' => false],
                        ],
                        'explanation' => "Des ventes qui ne sont pas encore encaissées augmentent les créances. Si cette hausse est importante, une partie du cash généré par l'activité peut être immobilisée dans le cycle d'exploitation.",
                    ],
                    [
                        'question' => "Une entreprise prévoit 2 M€ d'EBITDA, 300 000 € d'impôts en cash, 400 000 € de Capex et 100 000 € de hausse du BFR, sans autre ajustement. Quel FCF simplifié obtient-on ?",
                        'choices' => [
                            ['choice_text' => "1,2 M€", 'is_correct' => true],
                            ['choice_text' => "1,8 M€", 'is_correct' => false],
                            ['choice_text' => "1,6 M€", 'is_correct' => false],
                            ['choice_text' => "2,8 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Dans cette approximation : 2,0 - 0,3 - 0,4 - 0,1 = 1,2 M€. Le raisonnement simplifie volontairement certains éléments d'un véritable calcul de FCF.",
                    ],
                    [
                        'question' => "Pourquoi un projet rentable sur le compte de résultat peut-il nécessiter du financement au début ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il peut demander des investissements et du BFR avant que les flux de cash deviennent positifs", 'is_correct' => true],
                            ['choice_text' => "Parce que la rentabilité comptable signifie que le cash est immédiatement disponible", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un projet rentable n'a jamais de coûts", 'is_correct' => false],
                            ['choice_text' => "Parce que les investissements augmentent toujours le bénéfice à court terme", 'is_correct' => false],
                        ],
                        'explanation' => "Le démarrage d'une activité peut consommer du cash : achat d'actifs, constitution de stocks, délai d'encaissement des clients, etc. La rentabilité et la trésorerie ne suivent pas toujours le même calendrier.",
                    ],
                    [
                        'question' => "Une hausse des Capex de 500 000 € sans changement dans le reste du modèle a généralement quel effet sur le FCF ?",
                        'choices' => [
                            ['choice_text' => "Une baisse de 500 000 € du FCF", 'is_correct' => true],
                            ['choice_text' => "Une hausse de 500 000 € du FCF", 'is_correct' => false],
                            ['choice_text' => "Aucun effet", 'is_correct' => false],
                            ['choice_text' => "Une hausse de 1 M€ du FCF", 'is_correct' => false],
                        ],
                        'explanation' => "Les Capex sont des sorties de trésorerie d'investissement. Toutes choses égales par ailleurs, les augmenter réduit le FCF de même montant.",
                    ],
                    [
                        'question' => "Une entreprise réduit fortement ses stocks tout en maintenant ses ventes. Quel effet de court terme peut apparaître sur le cash ?",
                        'choices' => [
                            ['choice_text' => "Une libération de trésorerie peut soutenir le FCF", 'is_correct' => true],
                            ['choice_text' => "Une consommation automatique de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Une disparition des ventes", 'is_correct' => false],
                            ['choice_text' => "Un doublement automatique du WACC", 'is_correct' => false],
                        ],
                        'explanation' => "La baisse des stocks libère du cash qui était immobilisé dans le cycle d'exploitation. Il faut toutefois vérifier que le niveau de stocks reste compatible avec l'activité.",
                    ],
                    [
                        'question' => "Pourquoi les hypothèses de marge sont-elles importantes dans une valorisation par FCF ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elles influencent les flux de trésorerie futurs", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elles déterminent directement le cours de bourse", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elles remplacent toutes les hypothèses de risque", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une marge n'a aucun lien avec les flux", 'is_correct' => false],
                        ],
                        'explanation' => "Une marge plus élevée peut augmenter le résultat opérationnel et, selon les autres hypothèses, le FCF. La marge est donc un moteur important de valeur.",
                    ],
                    [
                        'question' => "Une entreprise prévoit une forte croissance mais aussi une baisse continue de sa marge opérationnelle. Quelle question est pertinente ?",
                        'choices' => [
                            ['choice_text' => "La croissance compense-t-elle suffisamment la dégradation des marges pour préserver les flux de trésorerie ?", 'is_correct' => true],
                            ['choice_text' => "La croissance rend-elle toute baisse de marge impossible ?", 'is_correct' => false],
                            ['choice_text' => "La marge ne peut-elle jamais changer ?", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires suffit-il à connaître le FCF ?", 'is_correct' => false],
                        ],
                        'explanation' => "Une croissance rapide n'est pas automatiquement créatrice de valeur. Il faut examiner son effet sur les marges, le BFR, les Capex et donc sur les flux de trésorerie.",
                    ],
                    [
                        'question' => "Dans un modèle, le BFR représente 12 % du chiffre d'affaires et le chiffre d'affaires prévisionnel passe de 5 M€ à 6 M€. Si le ratio reste inchangé, quel niveau de BFR est associé à 6 M€ ?",
                        'choices' => [
                            ['choice_text' => "720 000 €", 'is_correct' => true],
                            ['choice_text' => "600 000 €", 'is_correct' => false],
                            ['choice_text' => "72000 €", 'is_correct' => false],
                            ['choice_text' => "1,2 M€", 'is_correct' => false],
                        ],
                        'explanation' => "12 % de 6 M€ = 0,72 M€, soit 720 000 €. Le modèle suppose ici que la relation entre BFR et chiffre d'affaires reste stable.",
                    ],
                    [
                        'question' => "Un analyste suppose que les Capex seront nuls pendant cinq ans pour une usine industrielle déjà existante. Quelle faiblesse faut-il examiner ?",
                        'choices' => [
                            ['choice_text' => "L'hypothèse peut être irréaliste si l'outil industriel nécessite du renouvellement ou de la maintenance", 'is_correct' => true],
                            ['choice_text' => "L'absence de Capex augmente toujours la dette", 'is_correct' => false],
                            ['choice_text' => "Les usines n'ont jamais besoin d'entretien", 'is_correct' => false],
                            ['choice_text' => "Les Capex n'ont aucune incidence sur le cash", 'is_correct' => false],
                        ],
                        'explanation' => "Même une entreprise mature doit souvent maintenir ou renouveler ses actifs. Une hypothèse de Capex nul peut donc surestimer les flux de trésorerie futurs.",
                    ],
                    [
                        'question' => "Une société réduit son délai d'encaissement clients sans changer ses ventes. Quel effet économique peut-elle rechercher ?",
                        'choices' => [
                            ['choice_text' => "Libérer du cash en réduisant les créances immobilisées", 'is_correct' => true],
                            ['choice_text' => "Augmenter automatiquement les intérêts de la dette", 'is_correct' => false],
                            ['choice_text' => "Créer du chiffre d'affaires sans vendre", 'is_correct' => false],
                            ['choice_text' => "Supprimer les coûts fixes", 'is_correct' => false],
                        ],
                        'explanation' => "Encaisser plus vite réduit les créances et peut améliorer la conversion du résultat en cash. C'est un levier classique de gestion du BFR.",
                    ],
                    [
                        'question' => "Pourquoi le Free Cash Flow ne doit-il pas être projeté sans regarder les besoins d'investissement ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une activité peut générer des profits tout en nécessitant des Capex importants pour maintenir ou développer ses capacités", 'is_correct' => true],
                            ['choice_text' => "Parce que les Capex sont toujours des produits", 'is_correct' => false],
                            ['choice_text' => "Parce que le FCF est identique à l'EBITDA", 'is_correct' => false],
                            ['choice_text' => "Parce que les investissements ne touchent jamais la trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "La capacité à générer du cash doit être appréciée après les investissements nécessaires. Ignorer les Capex peut donner une image trop optimiste de la trésorerie réellement disponible.",
                    ],
                ],
            ],
            [
                'title' => "WACC et taux d'actualisation",
                'description' => "Comprendre le rôle du WACC et ses effets sur une valorisation DCF.",
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une entreprise finance ses activités avec des capitaux propres et de la dette. Pourquoi le WACC est-il utile dans un DCF basé sur les FCFF ?",
                        'choices' => [
                            ['choice_text' => "Il représente le coût moyen pondéré des sources de financement pertinentes pour les flux destinés à l'ensemble des apporteurs de capitaux", 'is_correct' => true],
                            ['choice_text' => "Il mesure uniquement le taux d'imposition", 'is_correct' => false],
                            ['choice_text' => "Il représente uniquement le coupon de la dette", 'is_correct' => false],
                            ['choice_text' => "Il donne directement l'EBITDA futur", 'is_correct' => false],
                        ],
                        'explanation' => "Le WACC combine le coût des capitaux propres et le coût de la dette après impôt, pondérés par leur poids dans la structure de financement retenue.",
                    ],
                    [
                        'question' => "Le coût des capitaux propres est de 12 %, le coût de la dette après impôt de 6 %, avec une structure 70 % equity et 30 % dette. Quel WACC simplifié obtient-on ?",
                        'choices' => [
                            ['choice_text' => "10,2 %", 'is_correct' => true],
                            ['choice_text' => "8,4 %", 'is_correct' => false],
                            ['choice_text' => "9,0 %", 'is_correct' => false],
                            ['choice_text' => "12,0 %", 'is_correct' => false],
                        ],
                        'explanation' => "WACC = 70 % × 12 % + 30 % × 6 % = 8,4 % + 1,8 % = 10,2 %.",
                    ],
                    [
                        'question' => "Toutes choses égales par ailleurs, que se passe-t-il pour la valeur actuelle d'un DCF lorsque le taux d'actualisation augmente ?",
                        'choices' => [
                            ['choice_text' => "La valeur actuelle diminue", 'is_correct' => true],
                            ['choice_text' => "Elle augmente", 'is_correct' => false],
                            ['choice_text' => "Elle reste obligatoirement identique", 'is_correct' => false],
                            ['choice_text' => "Elle devient égale au chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "Un taux plus élevé réduit le poids actuel des flux futurs. La relation est fondamentale en valorisation DCF.",
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on souvent le coût de la dette après impôt dans le WACC ?",
                        'choices' => [
                            ['choice_text' => "Parce que les intérêts peuvent avoir un effet fiscal selon les hypothèses et le cadre retenu", 'is_correct' => true],
                            ['choice_text' => "Parce que la dette est toujours gratuite", 'is_correct' => false],
                            ['choice_text' => "Parce que l'impôt augmente le coût de la dette", 'is_correct' => false],
                            ['choice_text' => "Parce que le coût de la dette n'a jamais de lien avec les intérêts", 'is_correct' => false],
                        ],
                        'explanation' => "Le coût de la dette est généralement ajusté de l'effet fiscal lorsqu'on construit le WACC après impôt : coût de la dette × (1 - taux d'impôt), selon le cadre du modèle.",
                    ],
                    [
                        'question' => "Une entreprise passe d'un profil de risque modéré à un profil beaucoup plus risqué. Quel effet peut avoir cette évolution sur le taux d'actualisation exigé ?",
                        'choices' => [
                            ['choice_text' => "Le taux exigé peut augmenter", 'is_correct' => true],
                            ['choice_text' => "Il doit obligatoirement tomber à zéro", 'is_correct' => false],
                            ['choice_text' => "Il ne peut jamais changer", 'is_correct' => false],
                            ['choice_text' => "Il devient égal à la marge brute", 'is_correct' => false],
                        ],
                        'explanation' => "Un risque économique ou financier plus élevé peut conduire les investisseurs à demander un rendement supérieur. Un taux d'actualisation plus élevé réduit alors la valeur actuelle des flux.",
                    ],
                    [
                        'question' => "Un étudiant applique un WACC de 8 % à une entreprise alors que ses flux dans le DCF sont des flux revenant uniquement aux actionnaires. Quel point faut-il vérifier ?",
                        'choices' => [
                            ['choice_text' => "La cohérence entre le type de flux valorisé et le taux d'actualisation utilisé", 'is_correct' => true],
                            ['choice_text' => "Le nombre d'employés", 'is_correct' => false],
                            ['choice_text' => "La couleur du modèle", 'is_correct' => false],
                            ['choice_text' => "Le nombre de factures clients", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux d'actualisation doit être cohérent avec la nature des flux. Les FCFF sont généralement actualisés au WACC, tandis que les flux destinés aux actionnaires se traitent avec un taux de coût des capitaux propres approprié.",
                    ],
                    [
                        'question' => "Un WACC passe de 10 % à 12 % sans modification des FCF prévisionnels. Pourquoi la valeur DCF peut-elle baisser sensiblement ?",
                        'choices' => [
                            ['choice_text' => "Parce que les mêmes flux sont actualisés à un taux plus élevé", 'is_correct' => true],
                            ['choice_text' => "Parce que les FCF deviennent automatiquement négatifs", 'is_correct' => false],
                            ['choice_text' => "Parce que les ventes sont divisées par deux", 'is_correct' => false],
                            ['choice_text' => "Parce que la dette disparaît du bilan", 'is_correct' => false],
                        ],
                        'explanation' => "L'actualisation est très sensible au taux utilisé, surtout pour des flux lointains. Une hausse du WACC réduit mécaniquement la valeur actuelle des flux et de la valeur terminale.",
                    ],
                    [
                        'question' => "Pourquoi ne faut-il pas choisir le WACC uniquement parce qu'il donne la valeur d'entreprise souhaitée ?",
                        'choices' => [
                            ['choice_text' => "Parce que le taux doit découler d'une méthode cohérente et d'hypothèses de marché défendables", 'is_correct' => true],
                            ['choice_text' => "Parce que le WACC doit toujours être supérieur à 20 %", 'is_correct' => false],
                            ['choice_text' => "Parce que le WACC est un chiffre comptable historique obligatoire", 'is_correct' => false],
                            ['choice_text' => "Parce que le WACC n'a aucun effet sur la valeur", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux d'actualisation est une hypothèse financière centrale. Le choisir pour atteindre un résultat cible revient à inverser le modèle au lieu d'utiliser une logique de valorisation défendable.",
                    ],
                    [
                        'question' => "Une structure cible comporte 40 % de dette et 60 % de capitaux propres. Pourquoi cette structure peut-elle être pertinente dans le calcul du WACC ?",
                        'choices' => [
                            ['choice_text' => "Les pondérations reflètent le poids relatif des sources de financement dans le coût moyen", 'is_correct' => true],
                            ['choice_text' => "Elle fixe directement le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Elle remplace les flux de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Elle garantit une croissance de 40 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le WACC est une moyenne pondérée. Les proportions de dette et de capitaux propres déterminent le poids de chaque coût dans le calcul.",
                    ],
                    [
                        'question' => "Une baisse du taux d'impôt, toutes choses égales par ailleurs, peut avoir quel effet sur le coût de la dette après impôt ?",
                        'choices' => [
                            ['choice_text' => "Elle réduit l'avantage fiscal des intérêts et peut donc augmenter le coût de la dette après impôt", 'is_correct' => true],
                            ['choice_text' => "Elle rend toujours le coût de la dette nul", 'is_correct' => false],
                            ['choice_text' => "Elle n'a jamais d'effet", 'is_correct' => false],
                            ['choice_text' => "Elle transforme la dette en capitaux propres", 'is_correct' => false],
                        ],
                        'explanation' => "Le coût de la dette après impôt est souvent calculé comme coût avant impôt × (1 - taux d'impôt). Une baisse du taux d'impôt réduit donc le bouclier fiscal et augmente le coût après impôt, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Dans une valorisation, pourquoi tester plusieurs WACC peut-il être utile ?",
                        'choices' => [
                            ['choice_text' => "Pour mesurer la sensibilité de la valeur à l'hypothèse de taux d'actualisation", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer toutes les incertitudes", 'is_correct' => false],
                            ['choice_text' => "Pour éviter de calculer les FCF", 'is_correct' => false],
                            ['choice_text' => "Pour transformer la valorisation en audit comptable", 'is_correct' => false],
                        ],
                        'explanation' => "Une sensibilité au WACC permet de voir comment la valeur évolue lorsque l'exigence de rendement change. C'est particulièrement important parce que la valeur terminale peut être très sensible au taux.",
                    ],
                ],
            ],
            [
                'title' => "Approche par multiples",
                'description' => "Utiliser des multiples comme EV/EBITDA, P/E et EV/Sales avec discernement.",
                'duration' => 27,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une société comparable se négocie à 8x EBITDA. Une entreprise cible affiche 5 M€ d'EBITDA et est jugée suffisamment comparable. Quelle Enterprise Value indicative obtient-on ?",
                        'choices' => [
                            ['choice_text' => "40 M€", 'is_correct' => true],
                            ['choice_text' => "13 M€", 'is_correct' => false],
                            ['choice_text' => "45 M€", 'is_correct' => false],
                            ['choice_text' => "64 M€", 'is_correct' => false],
                        ],
                        'explanation' => "5 M€ × 8 = 40 M€. Le résultat est une indication fondée sur le multiple retenu, pas une valeur garantie.",
                    ],
                    [
                        'question' => "Pourquoi un multiple EV/EBITDA peut-il être pratique pour comparer deux entreprises ?",
                        'choices' => [
                            ['choice_text' => "Il met en relation la valeur de l'entreprise et un indicateur opérationnel avant intérêts, impôts et amortissements", 'is_correct' => true],
                            ['choice_text' => "Il compare directement les dividendes futurs", 'is_correct' => false],
                            ['choice_text' => "Il ignore totalement la rentabilité", 'is_correct' => false],
                            ['choice_text' => "Il donne automatiquement le prix exact d'une action", 'is_correct' => false],
                        ],
                        'explanation' => "Le multiple EV/EBITDA permet de comparer la valeur des activités avec un indicateur opérationnel courant. Il reste important de vérifier la comparabilité des entreprises et des définitions comptables.",
                    ],
                    [
                        'question' => "Une entreprise possède une dette très différente de celle de son comparable principal. Quel avantage peut avoir l'EV/EBITDA par rapport à un simple P/E ?",
                        'choices' => [
                            ['choice_text' => "L'Enterprise Value tient mieux compte de la structure de financement que la seule valeur des actions", 'is_correct' => true],
                            ['choice_text' => "Le P/E ignore toujours les bénéfices", 'is_correct' => false],
                            ['choice_text' => "EV/EBITDA utilise uniquement la dette", 'is_correct' => false],
                            ['choice_text' => "Le P/E est un multiple de chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "Le P/E relie la capitalisation boursière au résultat net, fortement influencé par le financement. EV/EBITDA compare l'activité à un indicateur avant intérêts, ce qui peut faciliter certaines comparaisons.",
                    ],
                    [
                        'question' => "Une entreprise affiche 3 M€ de résultat net et un P/E de 12x. Quelle capitalisation boursière indicative obtient-on ?",
                        'choices' => [
                            ['choice_text' => "36 M€", 'is_correct' => true],
                            ['choice_text' => "9 M€", 'is_correct' => false],
                            ['choice_text' => "15 M€", 'is_correct' => false],
                            ['choice_text' => "48 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Le calcul indicatif est 3 × 12 = 36 M€. Le multiple doit toutefois être cohérent avec les données de résultat utilisées.",
                    ],
                    [
                        'question' => "Un analyste applique un multiple de 10x à une entreprise dont l'EBITDA est 6 M€, puis annonce une Equity Value de 60 M€ sans autre ajustement. Quel point manque ?",
                        'choices' => [
                            ['choice_text' => "Il faut vérifier la dette nette et passer de l'Enterprise Value à l'Equity Value", 'is_correct' => true],
                            ['choice_text' => "Il faut uniquement connaître le nombre de fournisseurs", 'is_correct' => false],
                            ['choice_text' => "Il faut supprimer l'EBITDA", 'is_correct' => false],
                            ['choice_text' => "Aucun ajustement n'est jamais nécessaire", 'is_correct' => false],
                        ],
                        'explanation' => "10 × 6 = 60 M€ correspond à une Enterprise Value indicative. Pour obtenir l'Equity Value, il faut ensuite tenir compte notamment de la dette nette et d'autres ajustements éventuels.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise en très forte croissance peut-elle se négocier à un multiple supérieur à une entreprise mature ?",
                        'choices' => [
                            ['choice_text' => "Le marché peut valoriser davantage ses perspectives de croissance et de rentabilité futures", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une entreprise mature ne peut jamais être rentable", 'is_correct' => false],
                            ['choice_text' => "Parce que la croissance supprime le risque", 'is_correct' => false],
                            ['choice_text' => "Parce que les multiples sont fixés par la comptabilité", 'is_correct' => false],
                        ],
                        'explanation' => "Un multiple de marché reflète les attentes des investisseurs. Une croissance plus forte et durable, si elle s'accompagne d'un rendement satisfaisant, peut soutenir un multiple plus élevé.",
                    ],
                    [
                        'question' => "Deux comparables ont des marges très différentes. Pourquoi faut-il être prudent avant de transférer mécaniquement le multiple de l'un à l'autre ?",
                        'choices' => [
                            ['choice_text' => "Parce que la rentabilité et le profil économique peuvent justifier des multiples différents", 'is_correct' => true],
                            ['choice_text' => "Les marges n'ont jamais d'effet sur la valeur", 'is_correct' => false],
                            ['choice_text' => "Tous les comparables ont forcément le même modèle économique", 'is_correct' => false],
                            ['choice_text' => "Un multiple ne dépend que du nom de l'entreprise", 'is_correct' => false],
                        ],
                        'explanation' => "La comparabilité doit porter sur plusieurs dimensions : croissance, marges, risque, capital intensity, taille, géographie et modèle économique. Une différence de marge peut donc être importante.",
                    ],
                    [
                        'question' => "Une entreprise a un multiple EV/Sales de 2x et un chiffre d'affaires de 15 M€. Quelle Enterprise Value indicative en résulte ?",
                        'choices' => [
                            ['choice_text' => "30 M€", 'is_correct' => true],
                            ['choice_text' => "7,5 M€", 'is_correct' => false],
                            ['choice_text' => "17 M€", 'is_correct' => false],
                            ['choice_text' => "45 M€", 'is_correct' => false],
                        ],
                        'explanation' => "2 × 15 M€ = 30 M€. EV/Sales peut être utile notamment lorsque les entreprises ont des marges faibles ou encore instables, mais il faut alors analyser la rentabilité séparément.",
                    ],
                    [
                        'question' => "Quel est un défaut classique d'une valorisation par multiples si le comparable retenu n'est pas vraiment comparable ?",
                        'choices' => [
                            ['choice_text' => "La valeur obtenue peut être trompeuse malgré un calcul mathématique correct", 'is_correct' => true],
                            ['choice_text' => "Le calcul devient automatiquement positif", 'is_correct' => false],
                            ['choice_text' => "Le multiple se transforme en taux d'intérêt", 'is_correct' => false],
                            ['choice_text' => "Le résultat net double mécaniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Une opération peut être parfaitement calculée tout en étant économiquement mauvaise si le groupe de comparables est mal choisi. La sélection et la normalisation des données sont aussi importantes que l'arithmétique.",
                    ],
                    [
                        'question' => "Un analyste observe que le multiple EV/EBITDA moyen du secteur a fortement monté. Quelle question doit-il poser avant d'appliquer ce niveau à une cible ?",
                        'choices' => [
                            ['choice_text' => "Le niveau de marché est-il réellement comparable à la cible et à la date de valorisation ?", 'is_correct' => true],
                            ['choice_text' => "Le nouveau multiple est-il toujours meilleur par définition ?", 'is_correct' => false],
                            ['choice_text' => "L'EBITDA devient-il inutile ?", 'is_correct' => false],
                            ['choice_text' => "La dette nette doit-elle être supprimée ?", 'is_correct' => false],
                        ],
                        'explanation' => "Les multiples peuvent varier avec les taux, la croissance attendue, le sentiment de marché et la composition du panel. Il faut donc vérifier la comparabilité et la période de référence.",
                    ],
                    [
                        'question' => "Une société cible affiche un EBITDA exceptionnellement élevé à cause d'un produit ponctuel. Que faut-il envisager avant d'appliquer un multiple ?",
                        'choices' => [
                            ['choice_text' => "Normaliser l'EBITDA pour éviter de valoriser comme récurrent un élément exceptionnel", 'is_correct' => true],
                            ['choice_text' => "Multiplier l'exceptionnel par deux", 'is_correct' => false],
                            ['choice_text' => "Supprimer tout le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Remplacer l'EBITDA par la dette", 'is_correct' => false],
                        ],
                        'explanation' => "Les multiples doivent idéalement s'appliquer à une métrique représentative. Un élément non récurrent peut gonfler artificiellement l'EBITDA et donc la valeur calculée.",
                    ],
                ],
            ],
            [
                'title' => "Comparables : choisir avec discernement",
                'description' => "Apprendre à sélectionner et interpréter un échantillon de sociétés comparables et de transactions.",
                'duration' => 29,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Une entreprise marocaine de logiciels B2B doit être comparée. Quel critère est particulièrement pertinent dans un premier tri ?",
                        'choices' => [
                            ['choice_text' => "Le modèle économique et le profil de croissance", 'is_correct' => true],
                            ['choice_text' => "La couleur du logo", 'is_correct' => false],
                            ['choice_text' => "Le nombre de pages du site web", 'is_correct' => false],
                            ['choice_text' => "Le lieu de naissance du dirigeant", 'is_correct' => false],
                        ],
                        'explanation' => "La comparabilité doit porter sur l'activité, le modèle économique, la croissance, les marges, la taille et le risque. Les éléments purement visuels ou personnels n'ont pas de valeur analytique ici.",
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on parfois la médiane plutôt que la moyenne des multiples d'un panel ?",
                        'choices' => [
                            ['choice_text' => "La médiane est moins sensible à une valeur extrême", 'is_correct' => true],
                            ['choice_text' => "La médiane donne toujours la valeur la plus élevée", 'is_correct' => false],
                            ['choice_text' => "La moyenne n'est jamais calculable", 'is_correct' => false],
                            ['choice_text' => "La médiane ignore tous les comparables", 'is_correct' => false],
                        ],
                        'explanation' => "Une observation atypique peut tirer la moyenne vers le haut ou vers le bas. La médiane fournit souvent un point central plus robuste lorsque le panel est dispersé.",
                    ],
                    [
                        'question' => "Un panel de huit sociétés contient un multiple de 25x alors que les sept autres sont entre 8x et 12x. Quel réflexe est raisonnable ?",
                        'choices' => [
                            ['choice_text' => "Examiner pourquoi le multiple de 25x est si différent avant de l'intégrer mécaniquement", 'is_correct' => true],
                            ['choice_text' => "Le retenir automatiquement car il est le plus élevé", 'is_correct' => false],
                            ['choice_text' => "Supprimer les sept autres", 'is_correct' => false],
                            ['choice_text' => "Faire la moyenne sans regarder les données", 'is_correct' => false],
                        ],
                        'explanation' => "Une valeur extrême peut venir d'une croissance exceptionnelle, d'un problème de données ou d'une définition différente de la métrique. Il faut comprendre sa cause avant de l'utiliser.",
                    ],
                    [
                        'question' => "Une société comparable vient d'être rachetée à une forte prime stratégique. Pourquoi une transaction précédente peut-elle donner un multiple supérieur à celui observé en bourse ?",
                        'choices' => [
                            ['choice_text' => "L'acheteur peut anticiper des synergies ou payer pour obtenir le contrôle", 'is_correct' => true],
                            ['choice_text' => "Les transactions sont toujours moins chères que la Bourse", 'is_correct' => false],
                            ['choice_text' => "Une acquisition supprime automatiquement la dette", 'is_correct' => false],
                            ['choice_text' => "Le multiple de marché ne mesure jamais la valeur", 'is_correct' => false],
                        ],
                        'explanation' => "Un acquéreur peut payer une prime pour le contrôle, les synergies ou des actifs stratégiques. Les transaction comps ne sont donc pas toujours directement comparables aux trading comps.",
                    ],
                    [
                        'question' => "Une entreprise comparable a une croissance deux fois supérieure à la cible mais un risque similaire. Quel effet peut-on envisager sur son multiple ?",
                        'choices' => [
                            ['choice_text' => "Son multiple peut être plus élevé, toutes choses égales par ailleurs", 'is_correct' => true],
                            ['choice_text' => "Il doit être identique par définition", 'is_correct' => false],
                            ['choice_text' => "Il doit être nul", 'is_correct' => false],
                            ['choice_text' => "La croissance réduit toujours le multiple", 'is_correct' => false],
                        ],
                        'explanation' => "Les perspectives de croissance influencent souvent les multiples de marché. Une croissance supérieure peut justifier une prime, sous réserve de sa qualité et de sa soutenabilité.",
                    ],
                    [
                        'question' => "Pourquoi faut-il vérifier la période fiscale des données utilisées dans une analyse de comparables ?",
                        'choices' => [
                            ['choice_text' => "Pour éviter de comparer des métriques calculées sur des périodes différentes", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un multiple ne peut être utilisé qu'en janvier", 'is_correct' => false],
                            ['choice_text' => "Parce que les comptes ne contiennent jamais de dates", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une société cotée change de secteur chaque trimestre", 'is_correct' => false],
                        ],
                        'explanation' => "Des périodes différentes peuvent rendre les multiples difficiles à comparer, surtout lorsque les résultats évoluent rapidement. L'alignement temporel améliore la qualité de l'analyse.",
                    ],
                    [
                        'question' => "Un analyste compare une banque avec une société industrielle à l'aide du même EV/EBITDA. Quel problème conceptuel peut apparaître ?",
                        'choices' => [
                            ['choice_text' => "Les modèles économiques et les états financiers rendent la comparaison potentiellement inadaptée", 'is_correct' => true],
                            ['choice_text' => "Les deux entreprises ont forcément le même capital", 'is_correct' => false],
                            ['choice_text' => "Les banques n'ont pas de revenus", 'is_correct' => false],
                            ['choice_text' => "Les sociétés industrielles n'ont jamais de dette", 'is_correct' => false],
                        ],
                        'explanation' => "Les institutions financières sont souvent analysées avec des métriques spécifiques, car dette et actifs financiers font partie intégrante de leur activité. Un multiple standard d'entreprise peut donc être inadapté.",
                    ],
                    [
                        'question' => "Une cible possède une marge EBITDA de 25 %, tandis que le comparable médian est à 15 %. Que faut-il faire avant d'appliquer le multiple médian ?",
                        'choices' => [
                            ['choice_text' => "Se demander si cette différence de marge justifie une décote ou une prime par rapport au comparable", 'is_correct' => true],
                            ['choice_text' => "Augmenter automatiquement le multiple à 25x", 'is_correct' => false],
                            ['choice_text' => "Ignorer complètement les marges", 'is_correct' => false],
                            ['choice_text' => "Remplacer l'EBITDA par le nombre de salariés", 'is_correct' => false],
                        ],
                        'explanation' => "La différence de marge peut signaler une meilleure qualité économique, mais elle doit être interprétée avec la croissance, le risque, la comptabilisation et la durabilité des marges.",
                    ],
                    [
                        'question' => "Une analyse de comparables produit une fourchette de valeur plutôt qu'un chiffre unique. Pourquoi est-ce utile ?",
                        'choices' => [
                            ['choice_text' => "Parce que les comparables et les hypothèses comportent une part d'incertitude", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un chiffre unique est toujours interdit", 'is_correct' => false],
                            ['choice_text' => "Parce que les multiples sont aléatoires", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une fourchette ne peut pas être utilisée en transaction", 'is_correct' => false],
                        ],
                        'explanation' => "Une fourchette rend visible l'incertitude liée au choix du multiple, du panel et des données normalisées. Elle peut ensuite être rapprochée d'autres approches de valorisation.",
                    ],
                    [
                        'question' => "Un comparable affiche une dette très élevée et une marge similaire à la cible. Pourquoi EV/EBITDA peut-il être préférable à P/E pour certaines comparaisons ?",
                        'choices' => [
                            ['choice_text' => "L'EV/EBITDA limite l'impact direct de la structure de financement sur la métrique opérationnelle", 'is_correct' => true],
                            ['choice_text' => "P/E mesure uniquement les ventes", 'is_correct' => false],
                            ['choice_text' => "EV/EBITDA ignore toute donnée financière", 'is_correct' => false],
                            ['choice_text' => "P/E et EV/EBITDA sont toujours identiques", 'is_correct' => false],
                        ],
                        'explanation' => "Le résultat net est affecté par les intérêts, alors que l'EBITDA est mesuré avant les intérêts. Selon l'objectif de l'analyse, l'EV/EBITDA peut donc faciliter la comparaison opérationnelle.",
                    ],
                    [
                        'question' => "Pourquoi documenter la source et la date des multiples de marché dans un fichier de valorisation ?",
                        'choices' => [
                            ['choice_text' => "Pour rendre l'analyse traçable et permettre de comprendre le contexte du niveau observé", 'is_correct' => true],
                            ['choice_text' => "Pour décorer le modèle", 'is_correct' => false],
                            ['choice_text' => "Parce que la source change automatiquement le calcul", 'is_correct' => false],
                            ['choice_text' => "Pour éviter d'utiliser toute donnée financière", 'is_correct' => false],
                        ],
                        'explanation' => "Les multiples varient avec le marché et avec les périodes de résultat. Documenter les sources permet de reproduire l'analyse et d'identifier les changements ultérieurs.",
                    ],
                ],
            ],
            [
                'title' => "Valeur terminale et horizon long terme",
                'description' => "Comprendre le rôle de la valeur terminale et les risques liés aux hypothèses de croissance à long terme.",
                'duration' => 31,
                'passing_score' => 61,
                'questions' => [
                    [
                        'question' => "Dans un DCF, pourquoi calcule-t-on souvent une valeur terminale ?",
                        'choices' => [
                            ['choice_text' => "Pour représenter la valeur des flux au-delà de la période explicite de prévision", 'is_correct' => true],
                            ['choice_text' => "Pour remplacer tous les flux historiques", 'is_correct' => false],
                            ['choice_text' => "Pour calculer l'impôt du dernier exercice", 'is_correct' => false],
                            ['choice_text' => "Pour déterminer le nombre de salariés", 'is_correct' => false],
                        ],
                        'explanation' => "La période de projection explicite ne couvre généralement pas toute la vie économique de l'entreprise. La valeur terminale représente donc les flux au-delà de cet horizon selon une méthode retenue.",
                    ],
                    [
                        'question' => "Une entreprise prévoit un FCF terminal de 5 M€, un taux de croissance à long terme de 2 % et un WACC de 8 %. Quelle valeur terminale simplifiée obtient-on avec Gordon-Shapiro ?",
                        'choices' => [
                            ['choice_text' => "83,3 M€ environ", 'is_correct' => true],
                            ['choice_text' => "62,5 M€", 'is_correct' => false],
                            ['choice_text' => "100 M€", 'is_correct' => false],
                            ['choice_text' => "10 M€", 'is_correct' => false],
                        ],
                        'explanation' => "La formule simplifiée est TV = FCF terminal × (1 + g) / (WACC - g) = 5 × 1,02 / 0,06 = environ 85 M€. Pour éviter l'ambiguïté, si 5 M€ est déjà le FCF de l'année suivante, alors TV = 5 / 0,06 = 83,3 M€. Ici, le libellé précise un FCF terminal de 5 M€, interprété comme l'année suivante.",
                    ],
                    [
                        'question' => "Pourquoi faut-il être prudent avec un taux de croissance à long terme très élevé dans la valeur terminale ?",
                        'choices' => [
                            ['choice_text' => "Une croissance perpétuelle élevée peut gonfler fortement la valeur et devenir difficile à justifier économiquement", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une croissance élevée réduit toujours la valeur terminale", 'is_correct' => false],
                            ['choice_text' => "Parce que la formule ne dépend pas de g", 'is_correct' => false],
                            ['choice_text' => "Parce que la valeur terminale est indépendante du marché", 'is_correct' => false],
                        ],
                        'explanation' => "Dans une croissance perpétuelle, une petite variation de g peut avoir un effet important lorsque l'écart entre WACC et g est faible. L'hypothèse doit donc rester cohérente avec les perspectives économiques de long terme.",
                    ],
                    [
                        'question' => "Que se passe-t-il dans la formule de Gordon si g se rapproche du WACC ?",
                        'choices' => [
                            ['choice_text' => "La valeur terminale augmente fortement", 'is_correct' => true],
                            ['choice_text' => "Elle devient forcément nulle", 'is_correct' => false],
                            ['choice_text' => "Elle ne change pas", 'is_correct' => false],
                            ['choice_text' => "Elle devient égale au chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "Le dénominateur WACC - g devient très petit. La valeur terminale peut alors augmenter de façon très importante, ce qui illustre la sensibilité du modèle.",
                    ],
                    [
                        'question' => "Un analyste retient un taux de croissance perpétuelle de 9 % avec un WACC de 8 %. Quel problème majeur apparaît ?",
                        'choices' => [
                            ['choice_text' => "La formule de croissance perpétuelle standard devient incohérente car g est supérieur au WACC", 'is_correct' => true],
                            ['choice_text' => "La valeur terminale devient automatiquement négative", 'is_correct' => false],
                            ['choice_text' => "Le FCF disparaît", 'is_correct' => false],
                            ['choice_text' => "Le WACC doit être remplacé par zéro", 'is_correct' => false],
                        ],
                        'explanation' => "Dans le modèle de Gordon-Shapiro, il faut normalement avoir g < WACC pour obtenir une relation économiquement cohérente et une valeur terminale finie positive.",
                    ],
                    [
                        'question' => "Une société mature a une croissance de long terme supposée faible et stable. Quelle approche peut être adaptée pour sa valeur terminale ?",
                        'choices' => [
                            ['choice_text' => "Une croissance perpétuelle modérée et cohérente avec un état mature", 'is_correct' => true],
                            ['choice_text' => "Une croissance de 40 % éternellement", 'is_correct' => false],
                            ['choice_text' => "Un taux de croissance toujours supérieur au WACC", 'is_correct' => false],
                            ['choice_text' => "Une valeur terminale nulle par principe", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une entreprise mature, l'hypothèse de long terme doit être compatible avec une phase de maturité. Une croissance perpétuelle raisonnable évite de prolonger indéfiniment une phase exceptionnelle.",
                    ],
                    [
                        'question' => "Pourquoi la valeur terminale peut-elle représenter une grande partie d'un DCF ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elle capitalise les flux au-delà de la période explicite de prévision", 'is_correct' => true],
                            ['choice_text' => "Parce que les flux des premières années sont toujours nuls", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle contient la dette deux fois", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle remplace le bilan complet", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur terminale couvre souvent une longue période future. Elle peut donc représenter une part importante de la valeur totale, ce qui rend ses hypothèses particulièrement sensibles.",
                    ],
                    [
                        'question' => "Dans une approche de sortie multiple, quelle logique utilise-t-on pour calculer la valeur terminale ?",
                        'choices' => [
                            ['choice_text' => "On applique un multiple de marché à une métrique financière projetée à la fin de la période explicite", 'is_correct' => true],
                            ['choice_text' => "On applique un taux d'intérêt à la dette historique", 'is_correct' => false],
                            ['choice_text' => "On additionne tous les salaires", 'is_correct' => false],
                            ['choice_text' => "On utilise uniquement le chiffre d'affaires du premier exercice", 'is_correct' => false],
                        ],
                        'explanation' => "La méthode du multiple de sortie estime la valeur terminale à partir d'un multiple, par exemple EV/EBITDA, appliqué à une métrique de l'année terminale.",
                    ],
                    [
                        'question' => "Une entreprise augmente son EBITDA terminal de 10 % tout en conservant le même multiple de sortie. Quel effet mécanique peut avoir cette hausse ?",
                        'choices' => [
                            ['choice_text' => "La valeur terminale calculée par multiple augmente de 10 %", 'is_correct' => true],
                            ['choice_text' => "Elle diminue de 10 %", 'is_correct' => false],
                            ['choice_text' => "Elle devient indépendante de l'EBITDA", 'is_correct' => false],
                            ['choice_text' => "Elle reste identique par définition", 'is_correct' => false],
                        ],
                        'explanation' => "Si le multiple reste constant, la valeur terminale = multiple × EBITDA terminal. Une hausse de 10 % de l'EBITDA entraîne donc une hausse de 10 % de la valeur terminale.",
                    ],
                    [
                        'question' => "Pourquoi comparer une valeur terminale issue de Gordon avec une valeur terminale issue d'un multiple peut-il être intéressant ?",
                        'choices' => [
                            ['choice_text' => "Les deux méthodes offrent des contrôles de cohérence fondés sur des logiques différentes", 'is_correct' => true],
                            ['choice_text' => "Parce que les deux méthodes donnent toujours exactement le même chiffre", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une seule méthode est autorisée", 'is_correct' => false],
                            ['choice_text' => "Parce que cela supprime toute incertitude", 'is_correct' => false],
                        ],
                        'explanation' => "Comparer les deux approches permet de repérer des hypothèses atypiques. Une grande divergence peut signaler un multiple, une marge ou une croissance terminale difficile à justifier.",
                    ],
                    [
                        'question' => "Un DCF donne une valeur très élevée uniquement parce que le taux terminal est passé de 2 % à 3 %. Que faudrait-il examiner ?",
                        'choices' => [
                            ['choice_text' => "La sensibilité de la valeur terminale et la cohérence économique de l'hypothèse de croissance", 'is_correct' => true],
                            ['choice_text' => "Uniquement le logo de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Le nombre de pages du modèle", 'is_correct' => false],
                            ['choice_text' => "Le fait que le chiffre d'affaires historique soit connu", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur terminale est souvent très sensible à g et au WACC. Une variation apparemment faible peut donc modifier fortement la valeur, ce qui justifie une analyse de sensibilité.",
                    ],
                ],
            ],
            [
                'title' => "Étude de cas : valoriser une entreprise simple",
                'description' => "Mettre ensemble les principaux réflexes de valorisation dans des mini-cas proches de situations de travail.",
                'duration' => 33,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Une PME génère 4 M€ d'EBITDA. Des transactions comparables se situent autour de 7x EBITDA. Quelle première Enterprise Value indicative obtient-on ?",
                        'choices' => [
                            ['choice_text' => "28 M€", 'is_correct' => true],
                            ['choice_text' => "11 M€", 'is_correct' => false],
                            ['choice_text' => "21 M€", 'is_correct' => false],
                            ['choice_text' => "35 M€", 'is_correct' => false],
                        ],
                        'explanation' => "4 × 7 = 28 M€. Cette estimation devra ensuite être confrontée à la dette nette, aux différences entre la cible et les comparables et, idéalement, à une autre méthode.",
                    ],
                    [
                        'question' => "La PME précédente a 6 M€ de dette et 2 M€ de trésorerie excédentaire. Quelle Equity Value simplifiée découle de l'Enterprise Value de 28 M€ ?",
                        'choices' => [
                            ['choice_text' => "24 M€", 'is_correct' => true],
                            ['choice_text' => "20 M€", 'is_correct' => false],
                            ['choice_text' => "26 M€", 'is_correct' => false],
                            ['choice_text' => "32 M€", 'is_correct' => false],
                        ],
                        'explanation' => "La dette nette = 6 - 2 = 4 M€. L'Equity Value simplifiée est donc 28 - 4 = 24 M€.",
                    ],
                    [
                        'question' => "Une société veut augmenter ses ventes de 15 % l'an prochain, mais doit aussi financer davantage de stock. Quel point doit être intégré dans le DCF ?",
                        'choices' => [
                            ['choice_text' => "L'effet de la hausse du BFR sur le Free Cash Flow", 'is_correct' => true],
                            ['choice_text' => "Uniquement la hausse des ventes", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nombre d'employés", 'is_correct' => false],
                            ['choice_text' => "Aucun besoin de trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Une croissance du stock peut consommer du cash. Le DCF doit donc relier l'activité future au besoin en fonds de roulement, pas seulement au chiffre d'affaires.",
                    ],
                    [
                        'question' => "Un investisseur hésite entre une valorisation DCF de 26 M€ et une valorisation par comparables de 38 M€. Quel réflexe est le plus utile ?",
                        'choices' => [
                            ['choice_text' => "Comprendre pourquoi les deux méthodes divergent avant de retenir un chiffre", 'is_correct' => true],
                            ['choice_text' => "Faire automatiquement la moyenne", 'is_correct' => false],
                            ['choice_text' => "Choisir le chiffre le plus élevé", 'is_correct' => false],
                            ['choice_text' => "Ignorer la méthode DCF", 'is_correct' => false],
                        ],
                        'explanation' => "Une divergence importante peut venir des hypothèses de croissance, de WACC, de valeur terminale ou des multiples de marché. Il faut expliquer l'écart plutôt que l'effacer mécaniquement.",
                    ],
                    [
                        'question' => "Une entreprise possède un contrat exceptionnel qui a gonflé son EBITDA cette année. Pourquoi l'analyste peut-il normaliser l'EBITDA ?",
                        'choices' => [
                            ['choice_text' => "Pour éviter de capitaliser un niveau de bénéfice qui ne devrait pas se répéter", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter artificiellement la valeur", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toute croissance future", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer l'EBITDA par la trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Une valorisation par multiple doit idéalement utiliser une performance représentative. Les éléments non récurrents doivent être identifiés et traités de façon cohérente.",
                    ],
                    [
                        'question' => "Une cible affiche une croissance forte mais dépend d'un seul gros client. Quel aspect de la valorisation mérite une attention particulière ?",
                        'choices' => [
                            ['choice_text' => "Le risque lié à la concentration des revenus", 'is_correct' => true],
                            ['choice_text' => "La couleur des graphiques", 'is_correct' => false],
                            ['choice_text' => "Le nombre de feuilles Excel", 'is_correct' => false],
                            ['choice_text' => "La date de création du logo", 'is_correct' => false],
                        ],
                        'explanation' => "La concentration client peut augmenter le risque des flux futurs. Elle peut donc influencer les hypothèses de croissance, les marges et éventuellement le taux de rendement exigé.",
                    ],
                    [
                        'question' => "Un modèle projette une marge EBITDA passant de 12 % à 28 % en trois ans sans changement opérationnel identifiable. Quelle réaction est raisonnable ?",
                        'choices' => [
                            ['choice_text' => "Demander la justification opérationnelle de cette amélioration", 'is_correct' => true],
                            ['choice_text' => "Accepter automatiquement car la marge monte", 'is_correct' => false],
                            ['choice_text' => "Doubler encore la marge", 'is_correct' => false],
                            ['choice_text' => "Supprimer le chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "Une forte amélioration de marge doit être reliée à des leviers concrets : prix, mix produit, économies d'échelle, productivité ou réduction de coûts. Sans justification, elle peut surestimer la valeur.",
                    ],
                    [
                        'question' => "Une société a 10 M€ de FCF stable et un WACC de 10 %, sans croissance terminale. Quelle valeur terminale de Gordon simplifiée obtient-on si 10 M€ représente le FCF de l'année suivante ?",
                        'choices' => [
                            ['choice_text' => "100 M€", 'is_correct' => true],
                            ['choice_text' => "10 M€", 'is_correct' => false],
                            ['choice_text' => "90 M€", 'is_correct' => false],
                            ['choice_text' => "110 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Avec g = 0 %, TV = FCF1 / WACC = 10 / 0,10 = 100 M€. Cette valeur terminale doit ensuite être actualisée à la date de valorisation si elle est située dans le futur.",
                    ],
                    [
                        'question' => "Une entreprise est valorisée 50 M€ en Enterprise Value et possède 18 M€ de dette nette. Quel montant de valeur revient approximativement aux actionnaires avant autres ajustements ?",
                        'choices' => [
                            ['choice_text' => "32 M€", 'is_correct' => true],
                            ['choice_text' => "68 M€", 'is_correct' => false],
                            ['choice_text' => "50 M€", 'is_correct' => false],
                            ['choice_text' => "18 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Equity Value = 50 - 18 = 32 M€. C'est une simplification qui suppose qu'aucun autre ajustement significatif n'est nécessaire.",
                    ],
                    [
                        'question' => "Le comité de direction demande : « Quelle hypothèse fait le plus bouger notre valorisation ? » Quelle analyse répond directement à cette question ?",
                        'choices' => [
                            ['choice_text' => "Une analyse de sensibilité des hypothèses clés", 'is_correct' => true],
                            ['choice_text' => "Une simple liste des immobilisations", 'is_correct' => false],
                            ['choice_text' => "Le nombre de salariés", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires historique seul", 'is_correct' => false],
                        ],
                        'explanation' => "Une analyse de sensibilité permet de faire varier WACC, croissance, marges ou multiples et de mesurer leur effet sur la valeur. Elle aide à repérer les hypothèses les plus critiques.",
                    ],
                    [
                        'question' => "Un investisseur propose 30 M€ pour une entreprise alors que le modèle interne affiche 36 M€. Quelle conclusion peut-on tirer immédiatement ?",
                        'choices' => [
                            ['choice_text' => "L'offre est inférieure à l'estimation du modèle, mais il faut examiner les différences entre valeur théorique et prix de marché", 'is_correct' => true],
                            ['choice_text' => "L'acheteur se trompe nécessairement", 'is_correct' => false],
                            ['choice_text' => "Le modèle est forcément faux", 'is_correct' => false],
                            ['choice_text' => "La société doit accepter l'offre", 'is_correct' => false],
                        ],
                        'explanation' => "Une offre réelle reflète aussi la négociation, le financement, le risque perçu, les synergies et les conditions du marché. Une différence avec le modèle mérite une analyse, pas une conclusion automatique.",
                    ],
                    [
                        'question' => "Une entreprise utilise à la fois un DCF et des comparables. Pourquoi cette combinaison peut-elle être utile ?",
                        'choices' => [
                            ['choice_text' => "Les deux approches permettent de confronter une logique intrinsèque à une référence de marché", 'is_correct' => true],
                            ['choice_text' => "Les deux méthodes donnent toujours le même résultat", 'is_correct' => false],
                            ['choice_text' => "Une des méthodes devient inutile", 'is_correct' => false],
                            ['choice_text' => "Cela garantit le prix exact de la transaction", 'is_correct' => false],
                        ],
                        'explanation' => "Le DCF dépend des flux et du risque estimés, tandis que les comparables reflètent des niveaux de marché. Leur rapprochement permet de détecter des incohérences ou des hypothèses atypiques.",
                    ],
                ],
            ],
            [
                'title' => "Construire une valeur par action",
                'description' => "Passer de la valeur des capitaux propres à une lecture simple par action et repérer les effets de dilution.",
                'duration' => 24,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Une entreprise vaut 36 M€ en Equity Value et compte 4 millions d'actions. Quelle valeur théorique par action obtient-on ?",
                        'choices' => [
                            ['choice_text' => "9 €", 'is_correct' => true],
                            ['choice_text' => "4 €", 'is_correct' => false],
                            ['choice_text' => "8 €", 'is_correct' => false],
                            ['choice_text' => "12 €", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur par action = 36 M€ / 4 M d'actions = 9 € par action.",
                    ],
                    [
                        'question' => "Une société a une Equity Value de 50 M€ et 5 millions d'actions. Elle émet 1 million d'actions nouvelles et, dans l'hypothèse simplifiée, l'Equity Value totale reste à 50 M€. Quelle valeur par action obtient-on après l'émission ?",
                        'choices' => [
                            ['choice_text' => "8,33 € environ", 'is_correct' => true],
                            ['choice_text' => "10 €", 'is_correct' => false],
                            ['choice_text' => "6,67 €", 'is_correct' => false],
                            ['choice_text' => "12 €", 'is_correct' => false],
                        ],
                        'explanation' => "Après l'émission, le nombre de titres passe à 6 millions. 50 M€ / 6 M = environ 8,33 € par action.",
                    ],
                    [
                        'question' => "Pourquoi une augmentation de capital peut-elle diluer un actionnaire existant ?",
                        'choices' => [
                            ['choice_text' => "Parce que le nombre total d'actions augmente et que sa participation relative peut diminuer", 'is_correct' => true],
                            ['choice_text' => "Parce que le chiffre d'affaires est automatiquement divisé", 'is_correct' => false],
                            ['choice_text' => "Parce que la dette devient nulle", 'is_correct' => false],
                            ['choice_text' => "Parce que l'EBITDA disparaît", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque de nouvelles actions sont émises, la part relative détenue par les anciens actionnaires peut baisser, sauf s'ils souscrivent suffisamment aux nouveaux titres.",
                    ],
                    [
                        'question' => "Une société possède 80 M€ d'Equity Value et 10 millions d'actions. Quel nombre d'actions faudrait-il pour obtenir une valeur par action de 8 € avec la même Equity Value ?",
                        'choices' => [
                            ['choice_text' => "10 millions d'actions", 'is_correct' => true],
                            ['choice_text' => "8 millions", 'is_correct' => false],
                            ['choice_text' => "12 millions", 'is_correct' => false],
                            ['choice_text' => "20 millions", 'is_correct' => false],
                        ],
                        'explanation' => "80 M€ / 8 € = 10 millions d'actions. Le calcul montre le lien direct entre Equity Value et nombre de titres.",
                    ],
                    [
                        'question' => "Un analyste divise l'Enterprise Value directement par le nombre d'actions sans regarder la dette nette. Quel élément risque-t-il d'ignorer ?",
                        'choices' => [
                            ['choice_text' => "Le passage de l'Enterprise Value à l'Equity Value", 'is_correct' => true],
                            ['choice_text' => "Le chiffre d'affaires mensuel", 'is_correct' => false],
                            ['choice_text' => "Le nombre de clients", 'is_correct' => false],
                            ['choice_text' => "Le taux de croissance historique", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur des actions correspond à l'Equity Value. La dette nette et les autres ajustements pertinents doivent être pris en compte avant de raisonner en valeur par action.",
                    ],
                    [
                        'question' => "Une entreprise possède 20 M€ de trésorerie excédentaire et 5 M€ de dette. Dans une approche simplifiée, quel est l'effet net de ces deux éléments sur l'Equity Value par rapport à l'Enterprise Value ?",
                        'choices' => [
                            ['choice_text' => "Un ajout net de 15 M€", 'is_correct' => true],
                            ['choice_text' => "Une déduction nette de 25 M€", 'is_correct' => false],
                            ['choice_text' => "Une déduction nette de 15 M€", 'is_correct' => false],
                            ['choice_text' => "Aucun effet", 'is_correct' => false],
                        ],
                        'explanation' => "La dette nette = 5 - 20 = -15 M€. Une dette nette négative signifie ici que le cash excédentaire dépasse la dette, ce qui augmente l'Equity Value de 15 M€ par rapport à l'Enterprise Value.",
                    ],
                    [
                        'question' => "Deux sociétés ont chacune 60 M€ d'Equity Value. La première compte 6 millions d'actions et la seconde 12 millions. Quelle différence simple observe-t-on ?",
                        'choices' => [
                            ['choice_text' => "La première a une valeur par action deux fois plus élevée", 'is_correct' => true],
                            ['choice_text' => "La seconde a une valeur par action deux fois plus élevée", 'is_correct' => false],
                            ['choice_text' => "Les deux ont la même valeur par action", 'is_correct' => false],
                            ['choice_text' => "La valeur par action ne dépend pas du nombre de titres", 'is_correct' => false],
                        ],
                        'explanation' => "60 / 6 = 10 € pour la première et 60 / 12 = 5 € pour la seconde. À Equity Value identique, le nombre d'actions détermine directement la valeur par titre.",
                    ],
                    [
                        'question' => "Pourquoi faut-il faire attention aux actions potentiellement dilutives dans une analyse par action ?",
                        'choices' => [
                            ['choice_text' => "Elles peuvent augmenter le nombre de titres pris en compte dans une approche diluée", 'is_correct' => true],
                            ['choice_text' => "Elles réduisent toujours l'Enterprise Value", 'is_correct' => false],
                            ['choice_text' => "Elles suppriment les intérêts de la dette", 'is_correct' => false],
                            ['choice_text' => "Elles remplacent le Free Cash Flow", 'is_correct' => false],
                        ],
                        'explanation' => "Des options, obligations convertibles ou autres instruments peuvent créer des actions supplémentaires selon leur traitement. Pour une analyse par action, la base de titres doit être cohérente avec l'objectif retenu.",
                    ],
                    [
                        'question' => "Une société annonce un rachat d'actions mais paie un prix très élevé par rapport à la valeur estimée des titres. Pourquoi faut-il éviter de conclure automatiquement que l'opération crée de la valeur par action ?",
                        'choices' => [
                            ['choice_text' => "L'effet dépend du prix payé, du financement et de la valeur économique des actions rachetées", 'is_correct' => true],
                            ['choice_text' => "Tout rachat crée toujours de la valeur", 'is_correct' => false],
                            ['choice_text' => "Un rachat supprime toujours la dette", 'is_correct' => false],
                            ['choice_text' => "Le nombre d'actions n'est jamais affecté", 'is_correct' => false],
                        ],
                        'explanation' => "Réduire le nombre d'actions peut améliorer mécaniquement certains indicateurs, mais la création de valeur dépend du prix de rachat et de l'utilisation alternative du cash.",
                    ],
                    [
                        'question' => "Une entreprise a une Equity Value de 90 M€ et 9 millions d'actions. Elle verse ensuite 9 M€ de cash excédentaire en dividende, sans autre changement simplifié. Que se passe-t-il immédiatement pour l'Equity Value après le paiement ?",
                        'choices' => [
                            ['choice_text' => "Elle peut diminuer d'environ 9 M€", 'is_correct' => true],
                            ['choice_text' => "Elle augmente de 9 M€", 'is_correct' => false],
                            ['choice_text' => "Elle reste forcément à 90 M€", 'is_correct' => false],
                            ['choice_text' => "Elle double", 'is_correct' => false],
                        ],
                        'explanation' => "Un dividende distribue du cash aux actionnaires et réduit les actifs disponibles dans l'entreprise. Dans cette hypothèse simplifiée, l'Equity Value post-dividende peut passer d'environ 90 à 81 M€, avant tout autre effet de marché.",
                    ],
                    [
                        'question' => "Pourquoi comparer une valeur par action issue du modèle avec le cours boursier peut-il être informatif sans que les deux chiffres soient forcément identiques ?",
                        'choices' => [
                            ['choice_text' => "Le modèle et le marché peuvent intégrer des hypothèses différentes sur la croissance, le risque et les perspectives", 'is_correct' => true],
                            ['choice_text' => "Le cours boursier est toujours faux", 'is_correct' => false],
                            ['choice_text' => "Le modèle garantit le prix futur", 'is_correct' => false],
                            ['choice_text' => "Les deux chiffres doivent être identiques par définition", 'is_correct' => false],
                        ],
                        'explanation' => "Le cours reflète les attentes et conditions de marché à un moment donné, tandis que le modèle dépend des hypothèses de l'analyste. L'écart peut donc être analysé plutôt que considéré comme une erreur automatique.",
                    ],
                    [
                        'question' => "Un analyste oublie de tenir compte d'une émission d'actions récente dans son calcul de valeur par action. Quel biais peut en résulter ?",
                        'choices' => [
                            ['choice_text' => "La valeur par action peut être surestimée si le nombre de titres réel est supérieur à celui utilisé", 'is_correct' => true],
                            ['choice_text' => "La valeur par action devient toujours négative", 'is_correct' => false],
                            ['choice_text' => "L'EBITDA est automatiquement doublé", 'is_correct' => false],
                            ['choice_text' => "La dette nette disparaît", 'is_correct' => false],
                        ],
                        'explanation' => "Diviser la même Equity Value par un nombre d'actions trop faible donne mécaniquement une valeur par action trop élevée. Le nombre de titres doit donc être mis à jour.",
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
