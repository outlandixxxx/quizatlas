<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialModelingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-modeling')->firstOrFail();

        $quizzes = [
            [
                'title' => "Prévisions du chiffre d'affaires et des coûts",
                'description' => "Techniques simples pour projeter ventes, prix, volumes et coûts d'exploitation.",
                'duration' => 22,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une boutique prévoit 2 000 ventes l'an prochain à un prix moyen de 30 €. Quel chiffre d'affaires prévisionnel obtient-on ?",
                        'choices' => [
                            ['choice_text' => "60 000 €", 'is_correct' => true],
                            ['choice_text' => "6 000 €", 'is_correct' => false],
                            ['choice_text' => "90 000 €", 'is_correct' => false],
                            ['choice_text' => "66 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le chiffre d'affaires prévisionnel est égal au volume multiplié par le prix moyen : 2 000 × 30 = 60 000 €.",
                    ],
                    [
                        'question' => "Une société augmente ses prix de 5 % mais prévoit une baisse de 3 % des volumes. Quel raisonnement est le plus juste ?",
                        'choices' => [
                            ['choice_text' => "Le chiffre d'affaires peut encore progresser, mais l'effet exact doit être calculé", 'is_correct' => true],
                            ['choice_text' => "Le chiffre d'affaires doit forcément baisser de 3 %", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires augmente exactement de 5 %", 'is_correct' => false],
                            ['choice_text' => "Les prix et les volumes n'ont aucun lien avec le chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "Les deux effets se combinent. Avec 1,05 × 0,97 = 1,0185, le chiffre d'affaires serait légèrement supérieur à celui de départ dans cette hypothèse simple.",
                    ],
                    [
                        'question' => "Une entreprise estime ses coûts variables à 40 % du chiffre d'affaires. Pour des ventes de 500 000 €, quels coûts variables le modèle doit-il prévoir ?",
                        'choices' => [
                            ['choice_text' => "200 000 €", 'is_correct' => true],
                            ['choice_text' => "125 000 €", 'is_correct' => false],
                            ['choice_text' => "300 000 €", 'is_correct' => false],
                            ['choice_text' => "20 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "40 % de 500 000 € correspond à 200 000 €. Cette hypothèse permet de relier automatiquement les coûts variables au niveau d'activité prévu.",
                    ],
                    [
                        'question' => "Une entreprise prévoit une hausse de 8 % du chiffre d'affaires et une hausse de 8 % de ses coûts variables. Que peut-on dire de la marge brute si le taux de marge initial reste inchangé ?",
                        'choices' => [
                            ['choice_text' => "Elle augmente en valeur dans la même proportion que le chiffre d'affaires", 'is_correct' => true],
                            ['choice_text' => "Elle devient automatiquement négative", 'is_correct' => false],
                            ['choice_text' => "Elle disparaît complètement", 'is_correct' => false],
                            ['choice_text' => "Elle ne peut pas être estimée à partir de ces données", 'is_correct' => false],
                        ],
                        'explanation' => "Si les ventes et les coûts variables évoluent proportionnellement, le taux de marge brute reste constant. La marge brute en valeur augmente donc avec le chiffre d'affaires.",
                    ],
                    [
                        'question' => "Le modèle d'une entreprise saisonnière affiche exactement les mêmes ventes chaque mois. Quel point mérite une vérification en priorité ?",
                        'choices' => [
                            ['choice_text' => "L'hypothèse ignore peut-être la saisonnalité de l'activité", 'is_correct' => true],
                            ['choice_text' => "Le modèle doit forcément utiliser quatre devises", 'is_correct' => false],
                            ['choice_text' => "Les coûts fixes doivent être supprimés", 'is_correct' => false],
                            ['choice_text' => "La présence de mois égaux prouve que le modèle est précis", 'is_correct' => false],
                        ],
                        'explanation' => "Une activité saisonnière peut connaître des mois très différents. Lisser complètement les ventes peut donner une mauvaise image du besoin de trésorerie et des périodes de forte activité.",
                    ],
                    [
                        'question' => "Pourquoi projeter séparément le volume et le prix peut-il être préférable à une simple croissance globale du chiffre d'affaires ?",
                        'choices' => [
                            ['choice_text' => "On comprend mieux le moteur réel de la croissance", 'is_correct' => true],
                            ['choice_text' => "Cela rend les coûts fixes variables", 'is_correct' => false],
                            ['choice_text' => "Cela évite tout besoin de données historiques", 'is_correct' => false],
                            ['choice_text' => "Cela garantit automatiquement un meilleur résultat net", 'is_correct' => false],
                        ],
                        'explanation' => "Une croissance de 6 % peut venir d'une hausse des volumes, des prix ou des deux. Séparer les moteurs rend la prévision plus compréhensible et plus facile à tester.",
                    ],
                    [
                        'question' => "Une entreprise budgète 120 000 € de coûts fixes annuels. Quel montant mensuel simple peut être retenu si aucun effet saisonnier n'est prévu ?",
                        'choices' => [
                            ['choice_text' => "10 000 €", 'is_correct' => true],
                            ['choice_text' => "12 000 €", 'is_correct' => false],
                            ['choice_text' => "1 000 €", 'is_correct' => false],
                            ['choice_text' => "15 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "120 000 ÷ 12 = 10 000 € par mois. Cette approche suppose que la charge est répartie uniformément.",
                    ],
                    [
                        'question' => "Lors d'une comparaison budget/réalisé, les ventes sont 10 % sous le budget mais les coûts variables sont aussi 10 % sous le budget. Quel élément faut-il regarder ensuite ?",
                        'choices' => [
                            ['choice_text' => "L'impact sur la marge et les coûts fixes, pas seulement l'écart de ventes", 'is_correct' => true],
                            ['choice_text' => "Uniquement le taux de change", 'is_correct' => false],
                            ['choice_text' => "La couleur des cellules", 'is_correct' => false],
                            ['choice_text' => "Le nombre d'onglets du fichier", 'is_correct' => false],
                        ],
                        'explanation' => "Un écart de chiffre d'affaires ne suffit pas à juger la performance. La relation entre ventes, coûts variables et coûts fixes détermine l'effet réel sur la rentabilité.",
                    ],
                    [
                        'question' => "Un modèle utilise une croissance de ventes de 20 % chaque année pendant cinq ans sans justification. Quel risque apparaît ?",
                        'choices' => [
                            ['choice_text' => "Le modèle peut devenir excessivement optimiste si l'hypothèse n'est pas soutenue par l'activité", 'is_correct' => true],
                            ['choice_text' => "Le modèle ne pourra plus calculer les amortissements", 'is_correct' => false],
                            ['choice_text' => "Les coûts variables deviennent nuls", 'is_correct' => false],
                            ['choice_text' => "Une forte croissance rend forcément les prévisions plus exactes", 'is_correct' => false],
                        ],
                        'explanation' => "Une hypothèse élevée maintenue très longtemps peut gonfler artificiellement les résultats. Elle doit être confrontée à la capacité commerciale, au marché et à l'historique de l'entreprise.",
                    ],
                    [
                        'question' => "Une société vend 4 000 unités à 50 € et les ventes progressent de 10 % en volume avec un prix inchangé. Quel chiffre d'affaires est prévu ?",
                        'choices' => [
                            ['choice_text' => "220 000 €", 'is_correct' => true],
                            ['choice_text' => "200 000 €", 'is_correct' => false],
                            ['choice_text' => "210 000 €", 'is_correct' => false],
                            ['choice_text' => "240 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le nouveau volume est 4 400 unités. À 50 € l'unité, le chiffre d'affaires devient 4 400 × 50 = 220 000 €.",
                    ],
                ],
            ],
            [
                'title' => "Compte de résultat prévisionnel",
                'description' => "Lecture et construction d'un compte de résultat simple à partir d'hypothèses opérationnelles.",
                'duration' => 24,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Une entreprise prévoit 800 000 € de chiffre d'affaires et 500 000 € de coûts opérationnels avant amortissements. Quel EBITDA simplifié obtient-on ?",
                        'choices' => [
                            ['choice_text' => "300 000 €", 'is_correct' => true],
                            ['choice_text' => "1 300 000 €", 'is_correct' => false],
                            ['choice_text' => "250 000 €", 'is_correct' => false],
                            ['choice_text' => "500 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Dans cette présentation simplifiée, l'EBITDA correspond au chiffre d'affaires moins les charges opérationnelles avant amortissements : 800 000 - 500 000 = 300 000 €.",
                    ],
                    [
                        'question' => "Une charge d'amortissement augmente de 20 000 € alors que l'entreprise ne paie rien en trésorerie au moment de l'enregistrement. Quel poste est directement affecté ?",
                        'choices' => [
                            ['choice_text' => "Le résultat opérationnel", 'is_correct' => true],
                            ['choice_text' => "Le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Les encaissements clients", 'is_correct' => false],
                            ['choice_text' => "Le nombre de clients", 'is_correct' => false],
                        ],
                        'explanation' => "L'amortissement est une charge comptable qui réduit le résultat, mais il n'entraîne pas une sortie de trésorerie immédiate. Il est donc important de distinguer compte de résultat et cash flow.",
                    ],
                    [
                        'question' => "Un modèle calcule la marge brute à partir du chiffre d'affaires et du coût des ventes. Quelle formule est correcte ?",
                        'choices' => [
                            ['choice_text' => "Chiffre d'affaires - coût des ventes", 'is_correct' => true],
                            ['choice_text' => "Chiffre d'affaires + coût des ventes", 'is_correct' => false],
                            ['choice_text' => "Coût des ventes - chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Chiffre d'affaires ÷ coût des ventes", 'is_correct' => false],
                        ],
                        'explanation' => "La marge brute mesure ce qu'il reste après le coût directement lié aux ventes. Elle se calcule donc par la différence entre chiffre d'affaires et coût des ventes.",
                    ],
                    [
                        'question' => "Une entreprise a un EBITDA de 150 000 € et des amortissements de 40 000 €. Quel EBIT simplifié obtient-on ?",
                        'choices' => [
                            ['choice_text' => "110 000 €", 'is_correct' => true],
                            ['choice_text' => "190 000 €", 'is_correct' => false],
                            ['choice_text' => "40 000 €", 'is_correct' => false],
                            ['choice_text' => "75 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "L'EBIT est obtenu ici par EBITDA moins amortissements : 150 000 - 40 000 = 110 000 €.",
                    ],
                    [
                        'question' => "Une hausse du taux d'intérêt sur la dette nouvelle apparaît dans quelle partie du compte de résultat ?",
                        'choices' => [
                            ['choice_text' => "Les charges financières", 'is_correct' => true],
                            ['choice_text' => "Le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Les achats de matières", 'is_correct' => false],
                            ['choice_text' => "Les amortissements", 'is_correct' => false],
                        ],
                        'explanation' => "Les intérêts liés à l'endettement sont présentés comme charges financières. Une hausse du taux peut donc réduire le résultat avant impôt, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Une société améliore sa marge brute mais son résultat net recule. Quelle explication est possible ?",
                        'choices' => [
                            ['choice_text' => "Les charges financières ou d'autres charges ont augmenté plus fortement", 'is_correct' => true],
                            ['choice_text' => "Une meilleure marge brute garantit toujours une hausse du résultat net", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires doit forcément être nul", 'is_correct' => false],
                            ['choice_text' => "Le résultat net est indépendant de toutes les autres charges", 'is_correct' => false],
                        ],
                        'explanation' => "Le résultat net tient compte de plusieurs niveaux de charges. Une amélioration en amont peut être absorbée par une hausse des coûts d'exploitation, des intérêts ou des impôts.",
                    ],
                    [
                        'question' => "Dans un modèle mensuel, pourquoi faut-il éviter de mélanger les valeurs annuelles et mensuelles dans une même formule sans conversion ?",
                        'choices' => [
                            ['choice_text' => "Cela peut créer des écarts de taille et des résultats incohérents", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une formule ne peut jamais utiliser deux cellules", 'is_correct' => false],
                            ['choice_text' => "Parce que les mois n'ont pas de chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un modèle financier ne peut contenir qu'un seul horizon", 'is_correct' => false],
                        ],
                        'explanation' => "Si une charge annuelle est comparée directement à une donnée mensuelle, l'échelle n'est plus cohérente. Le modèle doit respecter la période associée à chaque donnée.",
                    ],
                    [
                        'question' => "Un analyste observe un EBIT de 90 000 € sur un chiffre d'affaires de 600 000 €. Quelle est la marge EBIT ?",
                        'choices' => [
                            ['choice_text' => "15 %", 'is_correct' => true],
                            ['choice_text' => "6,7 %", 'is_correct' => false],
                            ['choice_text' => "66,7 %", 'is_correct' => false],
                            ['choice_text' => "20 %", 'is_correct' => false],
                        ],
                        'explanation' => "La marge EBIT se calcule par EBIT ÷ chiffre d'affaires. Ici, 90 000 ÷ 600 000 = 15 %.",
                    ],
                    [
                        'question' => "Un modèle affiche une marge nette de 70 % pour une entreprise de distribution traditionnelle. Quelle action est la plus raisonnable ?",
                        'choices' => [
                            ['choice_text' => "Vérifier les formules et les hypothèses avant de conclure", 'is_correct' => true],
                            ['choice_text' => "Considérer immédiatement la marge comme exacte", 'is_correct' => false],
                            ['choice_text' => "Supprimer le compte de résultat", 'is_correct' => false],
                            ['choice_text' => "Doubler toutes les ventes", 'is_correct' => false],
                        ],
                        'explanation' => "Une marge extrêmement élevée peut être possible dans certains secteurs, mais elle mérite un contrôle lorsque le résultat paraît incohérent avec l'activité. Les modèles doivent être audités, pas seulement lus.",
                    ],
                    [
                        'question' => "Dans un compte de résultat prévisionnel, quel élément est le plus directement lié au niveau de ventes ?",
                        'choices' => [
                            ['choice_text' => "Le chiffre d'affaires", 'is_correct' => true],
                            ['choice_text' => "Le montant du capital social", 'is_correct' => false],
                            ['choice_text' => "Le nombre de feuilles du classeur", 'is_correct' => false],
                            ['choice_text' => "Le taux de change d'une devise non utilisée", 'is_correct' => false],
                        ],
                        'explanation' => "Le chiffre d'affaires reflète directement les ventes prévues. D'autres postes peuvent évoluer avec l'activité, mais leur relation avec les ventes dépend de la structure de l'entreprise.",
                    ],
                ],
            ],
            [
                'title' => "Bilan prévisionnel et cohérence des comptes",
                'description' => "Comprendre les liens entre actifs, passifs, capitaux propres et mouvements du modèle.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une entreprise a 700 000 € d'actifs et 450 000 € de passifs. Quel montant de capitaux propres correspond à l'équation comptable ?",
                        'choices' => [
                            ['choice_text' => "250 000 €", 'is_correct' => true],
                            ['choice_text' => "1 150 000 €", 'is_correct' => false],
                            ['choice_text' => "450 000 €", 'is_correct' => false],
                            ['choice_text' => "175 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "L'équation comptable est Actifs = Passifs + Capitaux propres. Les capitaux propres sont donc 700 000 - 450 000 = 250 000 €.",
                    ],
                    [
                        'question' => "Une hausse des créances clients signifie généralement que l'argent a-t-il déjà été encaissé ?",
                        'choices' => [
                            ['choice_text' => "Non, les ventes peuvent avoir été comptabilisées sans encaissement correspondant", 'is_correct' => true],
                            ['choice_text' => "Oui, une créance représente toujours de la trésorerie reçue", 'is_correct' => false],
                            ['choice_text' => "Oui, les créances sont des dettes bancaires", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu'une créance est toujours une perte", 'is_correct' => false],
                        ],
                        'explanation' => "Une créance client représente un montant dû par le client. L'augmentation des créances peut donc signaler que le chiffre d'affaires a progressé sans encaissement immédiat.",
                    ],
                    [
                        'question' => "Dans un modèle, l'inventaire passe de 80 000 € à 110 000 €. Quel effet économique simple cela peut-il avoir sur la trésorerie, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Cela peut consommer 30 000 € de trésorerie", 'is_correct' => true],
                            ['choice_text' => "Cela libère automatiquement 30 000 € de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Cela n'a jamais d'effet sur le cash", 'is_correct' => false],
                            ['choice_text' => "Cela augmente directement le chiffre d'affaires de 30 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse du stock immobilise du cash tant que les marchandises ne sont pas vendues et encaissées. Ici, l'augmentation est de 30 000 €.",
                    ],
                    [
                        'question' => "Pourquoi un bilan prévisionnel doit-il rester équilibré ?",
                        'choices' => [
                            ['choice_text' => "Parce que les actifs doivent être financés par les passifs et les capitaux propres", 'is_correct' => true],
                            ['choice_text' => "Parce que les actifs doivent toujours être inférieurs aux ventes", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un bilan ne contient jamais de dette", 'is_correct' => false],
                            ['choice_text' => "Parce que les capitaux propres doivent toujours être nuls", 'is_correct' => false],
                        ],
                        'explanation' => "L'équilibre du bilan est une contrainte fondamentale. Un écart entre les deux côtés peut révéler une formule manquante ou une mauvaise liaison entre les états financiers.",
                    ],
                    [
                        'question' => "Une entreprise finance un nouvel équipement de 200 000 € par un emprunt bancaire du même montant. Quel changement immédiat est attendu dans le modèle ?",
                        'choices' => [
                            ['choice_text' => "Les actifs augmentent de 200 000 € et la dette augmente aussi de 200 000 €", 'is_correct' => true],
                            ['choice_text' => "Les actifs diminuent de 200 000 € et la dette disparaît", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires augmente automatiquement de 200 000 €", 'is_correct' => false],
                            ['choice_text' => "Les capitaux propres diminuent toujours de 200 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "L'achat augmente l'actif immobilisé et le financement par emprunt augmente le passif. Le modèle doit relier ces deux mouvements.",
                    ],
                    [
                        'question' => "Une baisse des dettes fournisseurs peut-elle augmenter le besoin de trésorerie à court terme ?",
                        'choices' => [
                            ['choice_text' => "Oui, car l'entreprise finance moins son activité par le crédit fournisseur", 'is_correct' => true],
                            ['choice_text' => "Non, une baisse des dettes fournisseurs apporte toujours du cash", 'is_correct' => false],
                            ['choice_text' => "Non, les fournisseurs n'interviennent jamais dans le cash flow", 'is_correct' => false],
                            ['choice_text' => "Oui, uniquement si les ventes augmentent de 50 %", 'is_correct' => false],
                        ],
                        'explanation' => "Une dette fournisseur représente un financement à court terme accordé par les fournisseurs. La réduire signifie généralement utiliser du cash pour régler les factures.",
                    ],
                    [
                        'question' => "Quel signal peut indiquer qu'une formule du bilan prévisionnel est cassée ?",
                        'choices' => [
                            ['choice_text' => "Un écart persistant entre total actif et total passif + capitaux propres", 'is_correct' => true],
                            ['choice_text' => "Une feuille contient des titres en gras", 'is_correct' => false],
                            ['choice_text' => "Le modèle contient plusieurs années", 'is_correct' => false],
                            ['choice_text' => "Une hypothèse est écrite en pourcentage", 'is_correct' => false],
                        ],
                        'explanation' => "Le bilan doit être équilibré. Un écart persistant est un signal d'alerte utile pour rechercher une erreur de formule, de signe ou de liaison entre états.",
                    ],
                    [
                        'question' => "Les immobilisations nettes sont de 500 000 € en début d'année, les investissements sont de 80 000 € et les amortissements de 50 000 €. Quel solde de fin d'année obtient-on, sans autres mouvements ?",
                        'choices' => [
                            ['choice_text' => "530 000 €", 'is_correct' => true],
                            ['choice_text' => "630 000 €", 'is_correct' => false],
                            ['choice_text' => "470 000 €", 'is_correct' => false],
                            ['choice_text' => "450 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le solde final est 500 000 + 80 000 - 50 000 = 530 000 €. Le modèle doit donc intégrer les investissements et les amortissements séparément.",
                    ],
                    [
                        'question' => "Pourquoi un modèle de bilan doit-il être relié aux autres états financiers ?",
                        'choices' => [
                            ['choice_text' => "Parce que les bénéfices, investissements, dettes et variations du fonds de roulement ont des effets croisés", 'is_correct' => true],
                            ['choice_text' => "Parce que le bilan est seulement une copie du compte de résultat", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un bilan ne contient aucun chiffre réel", 'is_correct' => false],
                            ['choice_text' => "Parce que les états financiers ne peuvent jamais être analysés séparément", 'is_correct' => false],
                        ],
                        'explanation' => "Dans un modèle intégré, le résultat, le cash flow et le bilan se répondent. Cette intégration permet de vérifier la cohérence globale des prévisions.",
                    ],
                    [
                        'question' => "Une entreprise augmente fortement ses ventes à crédit mais prévoit très peu de hausse des créances clients. Quelle vérification est la plus pertinente ?",
                        'choices' => [
                            ['choice_text' => "Vérifier si l'hypothèse de délai de paiement est cohérente avec les nouvelles ventes", 'is_correct' => true],
                            ['choice_text' => "Vérifier uniquement la police utilisée dans le tableau", 'is_correct' => false],
                            ['choice_text' => "Réduire les ventes jusqu'à équilibrer le bilan", 'is_correct' => false],
                            ['choice_text' => "Supprimer les créances du modèle", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les ventes à crédit augmentent, les créances devraient normalement évoluer selon le délai de recouvrement. Une faible hausse doit donc être justifiée par des hypothèses d'encaissement.",
                    ],
                ],
            ],
            [
                'title' => "Working capital et trésorerie opérationnelle",
                'description' => "Prévision simple des créances, stocks, dettes fournisseurs et besoins de cash.",
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une entreprise encaisse ses clients 45 jours après la vente. Que cherche-t-on principalement à modéliser avec cette hypothèse ?",
                        'choices' => [
                            ['choice_text' => "Le délai moyen de recouvrement des créances", 'is_correct' => true],
                            ['choice_text' => "La durée d'amortissement d'une machine", 'is_correct' => false],
                            ['choice_text' => "Le taux d'impôt", 'is_correct' => false],
                            ['choice_text' => "Le coût du capital", 'is_correct' => false],
                        ],
                        'explanation' => "Le délai de recouvrement indique combien de temps l'entreprise attend avant d'encaisser ses ventes. Il est directement lié au montant des créances et au cash disponible.",
                    ],
                    [
                        'question' => "Les créances clients passent de 100 000 € à 130 000 €. Sans autre changement, quel est l'effet sur le cash flow ?",
                        'choices' => [
                            ['choice_text' => "Une consommation de trésorerie de 30 000 €", 'is_correct' => true],
                            ['choice_text' => "Une génération de trésorerie de 30 000 €", 'is_correct' => false],
                            ['choice_text' => "Aucun effet", 'is_correct' => false],
                            ['choice_text' => "Une génération de trésorerie de 130 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse des créances signifie que davantage de ventes ne sont pas encore encaissées. Dans un cash flow indirect, cette hausse est donc une utilisation de trésorerie.",
                    ],
                    [
                        'question' => "Une entreprise négocie avec ses fournisseurs un délai de paiement plus long. Quel effet peut-elle rechercher dans son modèle ?",
                        'choices' => [
                            ['choice_text' => "Réduire temporairement le besoin de trésorerie", 'is_correct' => true],
                            ['choice_text' => "Augmenter automatiquement son chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Supprimer les stocks", 'is_correct' => false],
                            ['choice_text' => "Doubler sa marge brute", 'is_correct' => false],
                        ],
                        'explanation' => "Un délai fournisseur plus long laisse davantage de temps avant de payer les achats. Cela peut soutenir la trésorerie, même si d'autres conséquences commerciales peuvent exister.",
                    ],
                    [
                        'question' => "Si les stocks augmentent parce que l'entreprise prépare une forte saison commerciale, faut-il automatiquement considérer cette hausse comme une mauvaise décision ?",
                        'choices' => [
                            ['choice_text' => "Non, elle peut être rationnelle si elle répond à une demande future et reste maîtrisée", 'is_correct' => true],
                            ['choice_text' => "Oui, toute hausse de stock est une erreur", 'is_correct' => false],
                            ['choice_text' => "Oui, les stocks n'ont jamais de rôle opérationnel", 'is_correct' => false],
                            ['choice_text' => "Non, parce que les stocks génèrent toujours du cash immédiatement", 'is_correct' => false],
                        ],
                        'explanation' => "Un stock supplémentaire consomme du cash, mais il peut être nécessaire pour servir une demande attendue. L'analyse doit comparer le coût de stockage au bénéfice opérationnel attendu.",
                    ],
                    [
                        'question' => "Une entreprise réalise 360 000 € de ventes annuelles et ses créances représentent 30 jours de ventes sur la base d'une année de 360 jours. Quel niveau de créances simplifié obtient-on ?",
                        'choices' => [
                            ['choice_text' => "30 000 €", 'is_correct' => true],
                            ['choice_text' => "10 000 €", 'is_correct' => false],
                            ['choice_text' => "60 000 €", 'is_correct' => false],
                            ['choice_text' => "90 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Ventes quotidiennes = 360 000 ÷ 360 = 1 000 €. Avec 30 jours de délai, les créances sont d'environ 30 000 €.",
                    ],
                    [
                        'question' => "Pourquoi le working capital est-il important dans un modèle même pour une entreprise rentable ?",
                        'choices' => [
                            ['choice_text' => "Parce que les bénéfices ne se transforment pas tous immédiatement en trésorerie", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une entreprise rentable n'a jamais de cash", 'is_correct' => false],
                            ['choice_text' => "Parce que le working capital remplace toujours les capitaux propres", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il détermine directement le taux de coupon d'une obligation", 'is_correct' => false],
                        ],
                        'explanation' => "Les délais d'encaissement et de paiement ainsi que les stocks créent des décalages entre résultat comptable et trésorerie. Une entreprise rentable peut donc connaître une tension de cash.",
                    ],
                    [
                        'question' => "Les ventes augmentent de 20 % alors que le délai clients reste stable. Quel effet est généralement attendu sur les créances ?",
                        'choices' => [
                            ['choice_text' => "Elles augmentent aussi approximativement de 20 %", 'is_correct' => true],
                            ['choice_text' => "Elles tombent automatiquement à zéro", 'is_correct' => false],
                            ['choice_text' => "Elles augmentent toujours de 50 %", 'is_correct' => false],
                            ['choice_text' => "Elles restent nécessairement inchangées", 'is_correct' => false],
                        ],
                        'explanation' => "Avec un délai de paiement inchangé, le montant moyen des créances évolue généralement avec le volume des ventes. Une croissance de 20 % des ventes entraîne donc une hausse voisine des créances.",
                    ],
                    [
                        'question' => "Quel indicateur opérationnel est directement utile pour relier les achats à la dette fournisseur dans un modèle ?",
                        'choices' => [
                            ['choice_text' => "Le délai moyen de paiement fournisseur", 'is_correct' => true],
                            ['choice_text' => "Le bêta d'une action", 'is_correct' => false],
                            ['choice_text' => "Le taux de coupon d'une obligation", 'is_correct' => false],
                            ['choice_text' => "Le P/E du marché", 'is_correct' => false],
                        ],
                        'explanation' => "Le délai fournisseur permet d'estimer le montant de factures encore impayées. Il constitue donc une hypothèse de working capital importante.",
                    ],
                    [
                        'question' => "Un modèle montre une forte croissance des ventes mais une trésorerie qui s'améliore très vite malgré une hausse importante des stocks et des créances. Quelle vérification est logique ?",
                        'choices' => [
                            ['choice_text' => "Contrôler les signes et les liaisons de working capital dans le cash flow", 'is_correct' => true],
                            ['choice_text' => "Ajouter encore plus de ventes", 'is_correct' => false],
                            ['choice_text' => "Supprimer les créances du bilan", 'is_correct' => false],
                            ['choice_text' => "Ignorer le cash flow puisque le chiffre d'affaires augmente", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse forte des créances et des stocks consomme normalement du cash. Si le modèle affiche l'inverse, les signes ou les liaisons du cash flow doivent être contrôlés.",
                    ],
                    [
                        'question' => "Une baisse des créances clients de 20 000 € peut-elle soutenir la trésorerie ?",
                        'choices' => [
                            ['choice_text' => "Oui, si cette baisse provient d'encaissements de clients", 'is_correct' => true],
                            ['choice_text' => "Non, une baisse de créances signifie toujours une perte", 'is_correct' => false],
                            ['choice_text' => "Non, les créances ne sont jamais liées aux encaissements", 'is_correct' => false],
                            ['choice_text' => "Oui, uniquement si les stocks diminuent aussi", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les clients règlent leurs factures, les créances baissent et la trésorerie augmente. Le modèle doit capter cette conversion du poste client en cash.",
                    ],
                ],
            ],
            [
                'title' => "Capex, amortissements et dette",
                'description' => "Modélisation simple des investissements, amortissements et financements liés aux immobilisations.",
                'duration' => 25,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Une entreprise prévoit d'acheter une machine pour 120 000 €. Dans un modèle financier, où doit apparaître cet investissement en priorité ?",
                        'choices' => [
                            ['choice_text' => "Dans les investissements en immobilisations et dans le cash flow d'investissement", 'is_correct' => true],
                            ['choice_text' => "Uniquement dans le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Uniquement dans les créances clients", 'is_correct' => false],
                            ['choice_text' => "Uniquement dans le stock", 'is_correct' => false],
                        ],
                        'explanation' => "Un capex est une sortie de cash liée à l'acquisition d'un actif durable. Le modèle doit donc le relier aux immobilisations et au cash flow d'investissement.",
                    ],
                    [
                        'question' => "Une machine de 100 000 € est amortie linéairement sur cinq ans, sans valeur résiduelle. Quel amortissement annuel simple obtient-on ?",
                        'choices' => [
                            ['choice_text' => "20 000 €", 'is_correct' => true],
                            ['choice_text' => "5 000 €", 'is_correct' => false],
                            ['choice_text' => "25 000 €", 'is_correct' => false],
                            ['choice_text' => "50 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "100 000 ÷ 5 = 20 000 € d'amortissement annuel selon l'hypothèse linéaire donnée.",
                    ],
                    [
                        'question' => "Pourquoi un modèle sépare-t-il généralement capex et amortissement ?",
                        'choices' => [
                            ['choice_text' => "Le capex représente une dépense d'investissement alors que l'amortissement est une charge comptable sans décaissement immédiat", 'is_correct' => true],
                            ['choice_text' => "Les deux représentent exactement la même chose au même moment", 'is_correct' => false],
                            ['choice_text' => "L'amortissement correspond toujours à un emprunt", 'is_correct' => false],
                            ['choice_text' => "Le capex ne concerne jamais les immobilisations", 'is_correct' => false],
                        ],
                        'explanation' => "Le capex affecte directement la trésorerie au moment de l'achat. L'amortissement répartit ensuite comptablement le coût de l'actif sur sa durée d'utilisation.",
                    ],
                    [
                        'question' => "Une dette de 300 000 € porte un taux annuel de 6 %. Quel montant d'intérêts simplifié le modèle peut-il prévoir sur une année pleine si le principal reste inchangé ?",
                        'choices' => [
                            ['choice_text' => "18 000 €", 'is_correct' => true],
                            ['choice_text' => "12 000 €", 'is_correct' => false],
                            ['choice_text' => "36 000 €", 'is_correct' => false],
                            ['choice_text' => "50 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "300 000 × 6 % = 18 000 €. Cette approche simplifiée suppose que le montant de dette reste constant pendant toute l'année.",
                    ],
                    [
                        'question' => "Une entreprise rembourse 50 000 € de principal sur un emprunt. Quel effet direct cela a-t-il sur la dette ?",
                        'choices' => [
                            ['choice_text' => "La dette diminue de 50 000 €", 'is_correct' => true],
                            ['choice_text' => "La dette augmente de 50 000 €", 'is_correct' => false],
                            ['choice_text' => "La dette reste identique dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "La dette devient automatiquement nulle", 'is_correct' => false],
                        ],
                        'explanation' => "Le remboursement du principal réduit le montant restant dû. Il ne faut pas le confondre avec le paiement des intérêts, qui constitue une charge financière.",
                    ],
                    [
                        'question' => "Un modèle projette des investissements élevés mais aucun financement supplémentaire et aucune baisse de trésorerie. Quelle question faut-il poser ?",
                        'choices' => [
                            ['choice_text' => "Comment les investissements sont-ils financés ?", 'is_correct' => true],
                            ['choice_text' => "Pourquoi les ventes sont-elles toujours positives ?", 'is_correct' => false],
                            ['choice_text' => "Pourquoi le modèle utilise-t-il des dates ?", 'is_correct' => false],
                            ['choice_text' => "Pourquoi le taux de coupon est-il constant ?", 'is_correct' => false],
                        ],
                        'explanation' => "Des investissements importants doivent être financés par du cash existant, de la dette, des capitaux propres ou une autre source. L'absence de contrepartie peut signaler une incohérence.",
                    ],
                    [
                        'question' => "Une immobilisation de 60 000 € est entièrement amortie au bout de trois ans avec une méthode linéaire. Quel amortissement annuel simple est retenu ?",
                        'choices' => [
                            ['choice_text' => "20 000 €", 'is_correct' => true],
                            ['choice_text' => "15 000 €", 'is_correct' => false],
                            ['choice_text' => "30 000 €", 'is_correct' => false],
                            ['choice_text' => "10 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "60 000 ÷ 3 = 20 000 € par an avec une approche linéaire et une valeur résiduelle nulle.",
                    ],
                    [
                        'question' => "Quel risque existe si un modèle augmente fortement les investissements futurs mais laisse l'amortissement inchangé sans justification ?",
                        'choices' => [
                            ['choice_text' => "Les projections de résultat et de valeur des immobilisations peuvent devenir incohérentes", 'is_correct' => true],
                            ['choice_text' => "Le chiffre d'affaires devient automatiquement faux", 'is_correct' => false],
                            ['choice_text' => "Le taux d'imposition devient forcément nul", 'is_correct' => false],
                            ['choice_text' => "Les fournisseurs sont automatiquement payés plus vite", 'is_correct' => false],
                        ],
                        'explanation' => "Des investissements supplémentaires créent généralement de nouvelles immobilisations à amortir. Le modèle doit donc relier les capex aux charges d'amortissement selon les hypothèses retenues.",
                    ],
                    [
                        'question' => "Une entreprise finance 70 % d'un projet de 200 000 € par dette. Quel montant de dette nouvelle cela représente-t-il ?",
                        'choices' => [
                            ['choice_text' => "140 000 €", 'is_correct' => true],
                            ['choice_text' => "70 000 €", 'is_correct' => false],
                            ['choice_text' => "130 000 €", 'is_correct' => false],
                            ['choice_text' => "200 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "200 000 × 70 % = 140 000 €. Les 60 000 € restants doivent être couverts par une autre source de financement selon la structure retenue.",
                    ],
                    [
                        'question' => "Lors d'une revue du modèle, la dette baisse chaque année mais les remboursements ne sont jamais intégrés au cash flow. Que faut-il vérifier ?",
                        'choices' => [
                            ['choice_text' => "La liaison entre le calendrier de dette et le cash flow de financement", 'is_correct' => true],
                            ['choice_text' => "La formule du chiffre d'affaires uniquement", 'is_correct' => false],
                            ['choice_text' => "La couleur de l'onglet dette", 'is_correct' => false],
                            ['choice_text' => "Le nombre de clients", 'is_correct' => false],
                        ],
                        'explanation' => "Les remboursements de principal correspondent à des sorties de cash. Un modèle intégré doit faire remonter ces mouvements dans le cash flow de financement.",
                    ],
                ],
            ],
            [
                'title' => "Cash flow et trésorerie disponible",
                'description' => "Passage du résultat comptable aux flux de trésorerie et lecture de la génération de cash.",
                'duration' => 27,
                'passing_score' => 61,
                'questions' => [
                    [
                        'question' => "Une entreprise affiche 100 000 € de résultat net, une hausse de 20 000 € des créances et 10 000 € d'amortissement. Sans autre mouvement, quel cash flow opérationnel simplifié peut-on obtenir ?",
                        'choices' => [
                            ['choice_text' => "90 000 €", 'is_correct' => true],
                            ['choice_text' => "130 000 €", 'is_correct' => false],
                            ['choice_text' => "70 000 €", 'is_correct' => false],
                            ['choice_text' => "110 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "On part du résultat net de 100 000 €, on ajoute l'amortissement de 10 000 € puis on retire la hausse des créances de 20 000 € : 100 000 + 10 000 - 20 000 = 90 000 €.",
                    ],
                    [
                        'question' => "Pourquoi l'amortissement est-il généralement ajouté au résultat net dans un cash flow indirect ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il a réduit le résultat sans entraîner de sortie de cash pendant la période", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il représente un encaissement client", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il augmente automatiquement les ventes", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il rembourse une dette", 'is_correct' => false],
                        ],
                        'explanation' => "Le cash flow indirect réajuste le résultat comptable pour retrouver les flux réels de trésorerie. L'amortissement est une charge non décaissée dans la période.",
                    ],
                    [
                        'question' => "Une entreprise génère 150 000 € de cash flow opérationnel et investit 90 000 € dans ses immobilisations. Quel free cash flow simplifié obtient-on ?",
                        'choices' => [
                            ['choice_text' => "60 000 €", 'is_correct' => true],
                            ['choice_text' => "240 000 €", 'is_correct' => false],
                            ['choice_text' => "90 000 €", 'is_correct' => false],
                            ['choice_text' => "40 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Dans cette définition simplifiée, le free cash flow est 150 000 - 90 000 = 60 000 €. Il représente le cash restant après les investissements considérés.",
                    ],
                    [
                        'question' => "Une hausse des dettes fournisseurs de 15 000 € peut-elle améliorer le cash flow opérationnel à court terme ?",
                        'choices' => [
                            ['choice_text' => "Oui, car l'entreprise conserve temporairement le cash correspondant aux achats non encore payés", 'is_correct' => true],
                            ['choice_text' => "Non, une dette fournisseur est toujours une sortie de cash", 'is_correct' => false],
                            ['choice_text' => "Non, les fournisseurs ne figurent jamais dans le cash flow", 'is_correct' => false],
                            ['choice_text' => "Oui, mais uniquement si le chiffre d'affaires baisse", 'is_correct' => false],
                        ],
                        'explanation' => "Une augmentation des dettes fournisseurs signifie que certaines charges ou achats sont comptabilisés alors que le paiement n'a pas encore eu lieu. Cela conserve temporairement de la trésorerie.",
                    ],
                    [
                        'question' => "Le cash disponible en début de mois est de 50 000 € et le flux net du mois est de -12 000 €. Quel solde de fin de mois obtient-on ?",
                        'choices' => [
                            ['choice_text' => "38 000 €", 'is_correct' => true],
                            ['choice_text' => "62 000 €", 'is_correct' => false],
                            ['choice_text' => "12 000 €", 'is_correct' => false],
                            ['choice_text' => "50 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le solde de fin de mois est égal au solde initial plus le flux net : 50 000 - 12 000 = 38 000 €.",
                    ],
                    [
                        'question' => "Une prévision montre une trésorerie négative pendant trois mois avant une rentrée de cash importante. Quelle analyse est prioritaire ?",
                        'choices' => [
                            ['choice_text' => "Vérifier le besoin de financement à court terme et le calendrier des encaissements", 'is_correct' => true],
                            ['choice_text' => "Supprimer les mois négatifs pour améliorer le graphique", 'is_correct' => false],
                            ['choice_text' => "Augmenter automatiquement le chiffre d'affaires de 100 %", 'is_correct' => false],
                            ['choice_text' => "Ignorer la trésorerie puisque le résultat est positif", 'is_correct' => false],
                        ],
                        'explanation' => "Une entreprise peut être rentable tout en ayant un trou de trésorerie. Le calendrier des entrées et sorties est donc essentiel pour identifier un besoin de financement temporaire.",
                    ],
                    [
                        'question' => "Une hausse des stocks de 25 000 € et une hausse des dettes fournisseurs de 10 000 € sont les seuls changements de working capital. Quel effet net simplifié sur le cash ?",
                        'choices' => [
                            ['choice_text' => "Une consommation de 15 000 €", 'is_correct' => true],
                            ['choice_text' => "Une génération de 35 000 €", 'is_correct' => false],
                            ['choice_text' => "Une génération de 15 000 €", 'is_correct' => false],
                            ['choice_text' => "Une consommation de 35 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le stock consomme 25 000 € de cash tandis que la hausse des dettes fournisseurs en libère 10 000 €. L'effet net est donc -15 000 €.",
                    ],
                    [
                        'question' => "Pourquoi un bon modèle de trésorerie doit-il souvent être plus détaillé qu'un simple total annuel ?",
                        'choices' => [
                            ['choice_text' => "Parce que le moment des encaissements et des paiements peut créer des tensions de liquidité", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un total annuel est toujours faux", 'is_correct' => false],
                            ['choice_text' => "Parce que la trésorerie ne dépend jamais des ventes", 'is_correct' => false],
                            ['choice_text' => "Parce que les intérêts sont toujours payés chaque jour", 'is_correct' => false],
                        ],
                        'explanation' => "Deux entreprises ayant le même cash annuel peuvent avoir des besoins de financement très différents selon le calendrier. La vue mensuelle ou hebdomadaire est utile pour gérer la liquidité.",
                    ],
                    [
                        'question' => "Une entreprise a 80 000 € de cash, verse 30 000 € de dividendes et réalise un flux net opérationnel positif de 20 000 €. Sans autre mouvement, combien reste-t-il ?",
                        'choices' => [
                            ['choice_text' => "70 000 €", 'is_correct' => true],
                            ['choice_text' => "50 000 €", 'is_correct' => false],
                            ['choice_text' => "130 000 €", 'is_correct' => false],
                            ['choice_text' => "90 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "80 000 + 20 000 - 30 000 = 70 000 €. Le versement de dividendes est une sortie de trésorerie de financement dans une présentation simplifiée.",
                    ],
                    [
                        'question' => "Quelle erreur de modélisation est particulièrement dangereuse dans un tableau de cash ?",
                        'choices' => [
                            ['choice_text' => "Transformer par erreur une sortie de cash en entrée de cash à cause d'un signe incorrect", 'is_correct' => true],
                            ['choice_text' => "Utiliser des titres en français", 'is_correct' => false],
                            ['choice_text' => "Présenter plusieurs années", 'is_correct' => false],
                            ['choice_text' => "Utiliser une hypothèse de croissance", 'is_correct' => false],
                        ],
                        'explanation' => "Une inversion de signe peut donner l'impression qu'un investissement ou un remboursement génère du cash. C'est une erreur fondamentale à détecter lors du contrôle du modèle.",
                    ],
                ],
            ],
            [
                'title' => "Scénarios et sensibilités",
                'description' => "Premiers réflexes pour tester un modèle avec des hypothèses hautes, centrales et basses.",
                'duration' => 23,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Pourquoi un analyste construit-il un scénario prudent autour d'une prévision centrale ?",
                        'choices' => [
                            ['choice_text' => "Pour voir comment les résultats changent si certaines hypothèses se détériorent", 'is_correct' => true],
                            ['choice_text' => "Pour garantir que le scénario prudent se réalisera", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer le scénario central", 'is_correct' => false],
                            ['choice_text' => "Pour rendre les formules plus longues sans utilité", 'is_correct' => false],
                        ],
                        'explanation' => "L'analyse par scénarios montre la sensibilité de l'entreprise à des conditions différentes. Elle aide à mesurer les conséquences plutôt qu'à prétendre prédire un futur unique.",
                    ],
                    [
                        'question' => "Une entreprise envisage une marge opérationnelle de 12 % dans le scénario central, 10 % dans un scénario prudent et 14 % dans un scénario favorable. Que cherche-t-elle à comprendre ?",
                        'choices' => [
                            ['choice_text' => "L'effet d'une variation de marge sur les résultats", 'is_correct' => true],
                            ['choice_text' => "Le nombre exact de concurrents", 'is_correct' => false],
                            ['choice_text' => "Le niveau de capital social historique", 'is_correct' => false],
                            ['choice_text' => "Le code comptable de chaque facture", 'is_correct' => false],
                        ],
                        'explanation' => "Les trois scénarios permettent de mesurer l'impact d'une hypothèse de rentabilité plus faible ou plus forte. Cela donne une vision plus large qu'un seul chiffre.",
                    ],
                    [
                        'question' => "Dans une analyse de sensibilité simple, quelle variable est pertinente pour une entreprise très endettée et exposée à des taux variables ?",
                        'choices' => [
                            ['choice_text' => "Le taux d'intérêt", 'is_correct' => true],
                            ['choice_text' => "La couleur du logo", 'is_correct' => false],
                            ['choice_text' => "Le nombre de cellules vides", 'is_correct' => false],
                            ['choice_text' => "La police d'écriture", 'is_correct' => false],
                        ],
                        'explanation' => "Le coût de la dette variable dépend du niveau des taux. Tester cette hypothèse peut montrer à quel point le résultat ou le cash flow est sensible au financement.",
                    ],
                    [
                        'question' => "Un scénario prudent réduit les ventes de 10 % mais laisse les coûts fixes inchangés. Quel effet est le plus logique ?",
                        'choices' => [
                            ['choice_text' => "La rentabilité peut se dégrader fortement car les coûts fixes sont absorbés par moins de ventes", 'is_correct' => true],
                            ['choice_text' => "Les coûts fixes disparaissent automatiquement", 'is_correct' => false],
                            ['choice_text' => "La marge augmente toujours", 'is_correct' => false],
                            ['choice_text' => "La dette devient automatiquement nulle", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les coûts fixes restent stables, une baisse des ventes peut réduire l'EBITDA et l'EBIT plus que proportionnellement. C'est un effet classique de levier opérationnel.",
                    ],
                    [
                        'question' => "Pourquoi une sensibilité du modèle à plusieurs hypothèses peut-elle être plus utile qu'une simple prévision unique ?",
                        'choices' => [
                            ['choice_text' => "Elle montre l'ampleur des résultats possibles selon les paramètres retenus", 'is_correct' => true],
                            ['choice_text' => "Elle garantit l'absence de risque", 'is_correct' => false],
                            ['choice_text' => "Elle transforme les hypothèses en faits historiques", 'is_correct' => false],
                            ['choice_text' => "Elle élimine la nécessité de vérifier les formules", 'is_correct' => false],
                        ],
                        'explanation' => "Les décisions financières sont sensibles aux hypothèses. Une analyse de scénarios ou de sensibilité permet donc d'identifier les variables qui peuvent réellement changer la conclusion.",
                    ],
                    [
                        'question' => "Un modèle indique qu'une baisse de 1 point de marge fait disparaître presque tout le cash disponible. Que peut-on en déduire ?",
                        'choices' => [
                            ['choice_text' => "La structure de l'entreprise est très sensible à la rentabilité opérationnelle", 'is_correct' => true],
                            ['choice_text' => "Le modèle est forcément faux", 'is_correct' => false],
                            ['choice_text' => "Les ventes sont sans importance", 'is_correct' => false],
                            ['choice_text' => "Les coûts fixes sont inexistants", 'is_correct' => false],
                        ],
                        'explanation' => "Une forte réaction du cash à un petit changement de marge indique une sensibilité élevée. Il peut alors être utile de surveiller de près les coûts et la tarification.",
                    ],
                    [
                        'question' => "Quelle distinction entre scénario et sensibilité est la plus utile au niveau débutant ?",
                        'choices' => [
                            ['choice_text' => "Un scénario modifie un ensemble d'hypothèses cohérent, tandis qu'une sensibilité isole souvent l'effet d'une variable", 'is_correct' => true],
                            ['choice_text' => "Les deux termes signifient toujours exactement la même chose", 'is_correct' => false],
                            ['choice_text' => "Une sensibilité ne peut utiliser aucun chiffre", 'is_correct' => false],
                            ['choice_text' => "Un scénario sert uniquement à tester les couleurs d'un fichier", 'is_correct' => false],
                        ],
                        'explanation' => "Le scénario décrit un environnement complet, par exemple une croissance faible avec une marge plus basse. La sensibilité observe plutôt l'effet de la variation d'une hypothèse donnée.",
                    ],
                    [
                        'question' => "Une entreprise prépare trois hypothèses de chiffre d'affaires mais conserve exactement la même structure de coûts dans les trois cas. Quel point doit être discuté ?",
                        'choices' => [
                            ['choice_text' => "Certains coûts variables peuvent aussi évoluer avec les ventes", 'is_correct' => true],
                            ['choice_text' => "Les coûts variables ne dépendent jamais de l'activité", 'is_correct' => false],
                            ['choice_text' => "Les ventes déterminent toujours directement les dettes bancaires", 'is_correct' => false],
                            ['choice_text' => "Les scénarios sont inutiles dès qu'il existe des coûts", 'is_correct' => false],
                        ],
                        'explanation' => "Un changement de volume ou de prix peut entraîner des changements dans certains coûts variables. Un scénario crédible doit donc conserver des relations économiques cohérentes.",
                    ],
                    [
                        'question' => "Dans un modèle, le scénario central prévoit 1 M€ d'EBITDA et le scénario prudent 700 000 €. Quelle est la baisse relative du scénario prudent ?",
                        'choices' => [
                            ['choice_text' => "30 %", 'is_correct' => true],
                            ['choice_text' => "15 %", 'is_correct' => false],
                            ['choice_text' => "23 %", 'is_correct' => false],
                            ['choice_text' => "70 %", 'is_correct' => false],
                        ],
                        'explanation' => "La baisse est de 300 000 € sur une base de 1 M€, soit 300 000 ÷ 1 000 000 = 30 %.",
                    ],
                    [
                        'question' => "Une sensibilité montre que la valeur du projet varie peu quand les ventes changent, mais beaucoup quand le taux d'actualisation change. Quelle conclusion prudente est possible ?",
                        'choices' => [
                            ['choice_text' => "Le résultat de valorisation est particulièrement sensible au taux d'actualisation", 'is_correct' => true],
                            ['choice_text' => "Les ventes n'ont jamais d'importance", 'is_correct' => false],
                            ['choice_text' => "Le modèle n'a plus besoin de cash flow", 'is_correct' => false],
                            ['choice_text' => "Le taux d'actualisation est nécessairement faux", 'is_correct' => false],
                        ],
                        'explanation' => "La sensibilité indique quelles hypothèses ont le plus d'influence sur le résultat final. Ici, la valorisation réagit davantage au taux d'actualisation qu'au changement de ventes testé.",
                    ],
                ],
            ],
            [
                'title' => "Contrôle qualité et erreurs de modèle",
                'description' => "Réflexes pratiques pour détecter les erreurs de formule, de signe, de période et de liaison.",
                'duration' => 24,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Un modèle présente une valeur négative des créances clients sans situation exceptionnelle prévue. Que faut-il faire en premier ?",
                        'choices' => [
                            ['choice_text' => "Vérifier les formules et les signes avant d'interpréter le résultat", 'is_correct' => true],
                            ['choice_text' => "Accepter le chiffre car les modèles peuvent toujours produire des créances négatives", 'is_correct' => false],
                            ['choice_text' => "Doubler les ventes", 'is_correct' => false],
                            ['choice_text' => "Supprimer la ligne des créances", 'is_correct' => false],
                        ],
                        'explanation' => "Une créance négative est généralement un signal de problème de construction si aucun scénario particulier ne la justifie. Le contrôle des signes et des liaisons est prioritaire.",
                    ],
                    [
                        'question' => "Une formule de marge utilise les ventes de l'année N-1 au dénominateur alors qu'elle devrait utiliser les ventes de N. Quelle conséquence est possible ?",
                        'choices' => [
                            ['choice_text' => "La marge affichée peut être fausse même si la formule fonctionne techniquement", 'is_correct' => true],
                            ['choice_text' => "Le fichier ne s'ouvrira plus", 'is_correct' => false],
                            ['choice_text' => "Le résultat devient automatiquement exact", 'is_correct' => false],
                            ['choice_text' => "La dette devient nulle", 'is_correct' => false],
                        ],
                        'explanation' => "Une formule peut être parfaitement valide sur le plan informatique tout en étant incorrecte économiquement. L'audit doit donc vérifier la logique, pas seulement la syntaxe.",
                    ],
                    [
                        'question' => "Quelle vérification simple est utile après avoir construit un modèle à trois états financiers ?",
                        'choices' => [
                            ['choice_text' => "Vérifier que le bilan s'équilibre et que les flux de cash sont cohérents", 'is_correct' => true],
                            ['choice_text' => "Vérifier uniquement les titres des colonnes", 'is_correct' => false],
                            ['choice_text' => "Supprimer les données historiques", 'is_correct' => false],
                            ['choice_text' => "Changer toutes les hypothèses à la hausse", 'is_correct' => false],
                        ],
                        'explanation' => "L'équilibre du bilan et la cohérence du cash flow sont deux contrôles structurants. Ils peuvent révéler des erreurs de liaison entre les différents états.",
                    ],
                    [
                        'question' => "Une croissance de 5 % est saisie comme 5 au lieu de 0,05 dans une formule multiplicative. Quel problème peut en résulter ?",
                        'choices' => [
                            ['choice_text' => "Le modèle peut appliquer une croissance beaucoup trop élevée", 'is_correct' => true],
                            ['choice_text' => "Le modèle devient automatiquement plus prudent", 'is_correct' => false],
                            ['choice_text' => "Le taux devient négatif", 'is_correct' => false],
                            ['choice_text' => "Les coûts fixes disparaissent", 'is_correct' => false],
                        ],
                        'explanation' => "Dans un calcul de croissance, 5 % correspond à 0,05. Une saisie de 5 peut donc multiplier les montants de façon totalement disproportionnée selon la formule utilisée.",
                    ],
                    [
                        'question' => "Une cellule de résultat dépend indirectement d'elle-même à travers plusieurs lignes. Quel risque cela évoque-t-il ?",
                        'choices' => [
                            ['choice_text' => "Une référence circulaire", 'is_correct' => true],
                            ['choice_text' => "Une saisonnalité correcte", 'is_correct' => false],
                            ['choice_text' => "Une bonne diversification", 'is_correct' => false],
                            ['choice_text' => "Un changement de devise", 'is_correct' => false],
                        ],
                        'explanation' => "Une référence circulaire apparaît lorsqu'une formule revient à dépendre d'elle-même. Elle peut bloquer ou fausser le calcul du modèle et doit être examinée.",
                    ],
                    [
                        'question' => "Lors d'un audit, deux années consécutives montrent exactement le même chiffre d'affaires alors que la croissance est censée être de 6 %. Quelle vérification est pertinente ?",
                        'choices' => [
                            ['choice_text' => "Vérifier si la formule de projection référence la bonne année et la bonne hypothèse", 'is_correct' => true],
                            ['choice_text' => "Considérer que la croissance de 6 % est purement décorative", 'is_correct' => false],
                            ['choice_text' => "Supprimer l'année précédente", 'is_correct' => false],
                            ['choice_text' => "Changer le format en euros", 'is_correct' => false],
                        ],
                        'explanation' => "Si la croissance prévue n'apparaît pas dans les résultats, la formule peut pointer vers la mauvaise cellule ou l'hypothèse peut ne pas être reliée au calcul.",
                    ],
                    [
                        'question' => "Quel principe améliore la traçabilité d'une hypothèse importante ?",
                        'choices' => [
                            ['choice_text' => "Conserver une source ou une justification claire de la valeur utilisée", 'is_correct' => true],
                            ['choice_text' => "Cacher l'hypothèse afin d'éviter les questions", 'is_correct' => false],
                            ['choice_text' => "La remplacer par une valeur aléatoire", 'is_correct' => false],
                            ['choice_text' => "La recopier dans dix endroits différents", 'is_correct' => false],
                        ],
                        'explanation' => "Une hypothèse utile doit être compréhensible et justifiable. Cette traçabilité facilite la revue par un collègue ou un responsable financier.",
                    ],
                    [
                        'question' => "Une formule donne 25 000 € alors que le même calcul fait manuellement donne 250 000 €. Quelle première piste est raisonnable ?",
                        'choices' => [
                            ['choice_text' => "Vérifier les unités, le facteur de multiplication et les cellules référencées", 'is_correct' => true],
                            ['choice_text' => "Modifier le résultat manuel pour qu'il corresponde au modèle", 'is_correct' => false],
                            ['choice_text' => "Supprimer la formule", 'is_correct' => false],
                            ['choice_text' => "Ajouter un zéro sans vérifier le calcul", 'is_correct' => false],
                        ],
                        'explanation' => "Un facteur 10 peut venir d'une unité mal comprise, d'un taux mal converti ou d'une référence erronée. Il faut identifier la cause avant de corriger la valeur.",
                    ],
                    [
                        'question' => "Pourquoi tester un modèle avec des hypothèses extrêmes peut-il être utile ?",
                        'choices' => [
                            ['choice_text' => "Cela peut révéler des formules fragiles ou des comportements inattendus", 'is_correct' => true],
                            ['choice_text' => "Cela prouve que le scénario extrême se produira", 'is_correct' => false],
                            ['choice_text' => "Cela évite toute autre forme de contrôle", 'is_correct' => false],
                            ['choice_text' => "Cela rend automatiquement les prévisions meilleures", 'is_correct' => false],
                        ],
                        'explanation' => "Un test de stress simple peut montrer qu'une formule produit des résultats aberrants lorsque l'hypothèse change fortement. C'est une manière utile de détecter des fragilités.",
                    ],
                    [
                        'question' => "Un modèle contient de nombreuses cellules avec des valeurs fixes sans indication de leur origine. Quelle faiblesse cela crée-t-il surtout ?",
                        'choices' => [
                            ['choice_text' => "Une faible transparence et une difficulté à auditer ou actualiser les hypothèses", 'is_correct' => true],
                            ['choice_text' => "Une augmentation automatique de la rentabilité", 'is_correct' => false],
                            ['choice_text' => "Une meilleure précision historique", 'is_correct' => false],
                            ['choice_text' => "Une réduction automatique des risques", 'is_correct' => false],
                        ],
                        'explanation' => "Des valeurs fixes non documentées rendent le modèle opaque. Même si elles sont exactes aujourd'hui, leur origine et leur logique deviennent difficiles à contrôler.",
                    ],
                ],
            ],
            [
                'title' => "Modélisation par moteurs opérationnels",
                'description' => "Traduire les activités réelles d'une entreprise en variables financières simples et logiques.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un hôtel estime ses revenus à partir du nombre de chambres disponibles, du taux d'occupation et du prix moyen. Pourquoi cette méthode est-elle intéressante ?",
                        'choices' => [
                            ['choice_text' => "Elle relie la prévision financière aux vrais moteurs de l'activité", 'is_correct' => true],
                            ['choice_text' => "Elle évite tout besoin de données opérationnelles", 'is_correct' => false],
                            ['choice_text' => "Elle garantit que l'hôtel sera toujours rentable", 'is_correct' => false],
                            ['choice_text' => "Elle remplace les états financiers", 'is_correct' => false],
                        ],
                        'explanation' => "Le chiffre d'affaires est mieux expliqué lorsqu'il est relié aux variables qui le déterminent. Cette logique rend le modèle plus transparent et plus facile à challenger.",
                    ],
                    [
                        'question' => "Une usine produit 10 000 unités avec 5 heures de main-d'œuvre pour 100 unités. Combien d'heures sont nécessaires pour 10 000 unités ?",
                        'choices' => [
                            ['choice_text' => "500 heures", 'is_correct' => true],
                            ['choice_text' => "50 heures", 'is_correct' => false],
                            ['choice_text' => "5 000 heures", 'is_correct' => false],
                            ['choice_text' => "100 heures", 'is_correct' => false],
                        ],
                        'explanation' => "10 000 unités représentent 100 groupes de 100 unités. À 5 heures par groupe, il faut 100 × 5 = 500 heures.",
                    ],
                    [
                        'question' => "Une société de services facture en moyenne 600 € par mission et prévoit 900 missions. Quel revenu prévisionnel simple en découle ?",
                        'choices' => [
                            ['choice_text' => "540 000 €", 'is_correct' => true],
                            ['choice_text' => "540 €", 'is_correct' => false],
                            ['choice_text' => "1 500 000 €", 'is_correct' => false],
                            ['choice_text' => "300 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "900 × 600 € = 540 000 €. Le modèle peut ensuite répartir cette activité par mois ou par type de mission si nécessaire.",
                    ],
                    [
                        'question' => "Pourquoi utiliser des moteurs comme le nombre de clients ou le prix moyen peut-il être préférable à une croissance globale arbitraire ?",
                        'choices' => [
                            ['choice_text' => "On peut expliquer ce qui fait réellement évoluer les revenus", 'is_correct' => true],
                            ['choice_text' => "Les moteurs éliminent tous les risques commerciaux", 'is_correct' => false],
                            ['choice_text' => "Cela rend les coûts indépendants du volume", 'is_correct' => false],
                            ['choice_text' => "Cela empêche toute analyse de sensibilité", 'is_correct' => false],
                        ],
                        'explanation' => "Un modèle fondé sur des drivers permet de relier les chiffres aux réalités opérationnelles. Il est alors plus facile de discuter des hypothèses avec les équipes métier.",
                    ],
                    [
                        'question' => "Une entreprise compte 200 clients au début du mois, en gagne 30 et en perd 10. Combien de clients peut-elle prévoir en fin de mois ?",
                        'choices' => [
                            ['choice_text' => "220", 'is_correct' => true],
                            ['choice_text' => "240", 'is_correct' => false],
                            ['choice_text' => "210", 'is_correct' => false],
                            ['choice_text' => "190", 'is_correct' => false],
                        ],
                        'explanation' => "Clients fin de mois = 200 + 30 - 10 = 220. Ce type de calcul permet de faire évoluer un modèle à partir d'un stock et de flux simples.",
                    ],
                    [
                        'question' => "Un abonnement mensuel coûte 40 € et une entreprise prévoit 1 500 abonnés actifs pendant le mois. Quel revenu mensuel simple peut être modélisé ?",
                        'choices' => [
                            ['choice_text' => "60 000 €", 'is_correct' => true],
                            ['choice_text' => "37 500 €", 'is_correct' => false],
                            ['choice_text' => "15 000 €", 'is_correct' => false],
                            ['choice_text' => "600 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "1 500 × 40 € = 60 000 €. Le modèle peut ensuite intégrer le churn, les nouveaux clients et la saisonnalité si ces facteurs sont importants.",
                    ],
                    [
                        'question' => "Un modèle prédit les revenus d'un restaurant uniquement en appliquant +5 % au revenu de l'année précédente. Quel élément opérationnel pourrait améliorer la prévision ?",
                        'choices' => [
                            ['choice_text' => "Le nombre de couverts et le ticket moyen", 'is_correct' => true],
                            ['choice_text' => "La valeur nominale d'une obligation d'État", 'is_correct' => false],
                            ['choice_text' => "Le bêta d'une banque étrangère", 'is_correct' => false],
                            ['choice_text' => "La durée d'une obligation zéro coupon", 'is_correct' => false],
                        ],
                        'explanation' => "Pour un restaurant, le nombre de clients servis et le panier moyen expliquent directement le chiffre d'affaires. Ce sont des moteurs opérationnels naturels.",
                    ],
                    [
                        'question' => "Une société de livraison prévoit 100 000 commandes et un coût moyen de 4 € par commande. Quel coût variable simplifié obtient-on ?",
                        'choices' => [
                            ['choice_text' => "400 000 €", 'is_correct' => true],
                            ['choice_text' => "40 000 €", 'is_correct' => false],
                            ['choice_text' => "250 000 €", 'is_correct' => false],
                            ['choice_text' => "104 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "100 000 × 4 € = 400 000 €. Une telle hypothèse permet de faire varier automatiquement les coûts avec le volume de commandes.",
                    ],
                    [
                        'question' => "Un modèle de SaaS prévoit 1 000 abonnés au début de l'année, 200 nouveaux abonnés et un churn de 10 % appliqué au stock initial uniquement. Quel nombre de clients fin d'année obtient-on ?",
                        'choices' => [
                            ['choice_text' => "1 100", 'is_correct' => true],
                            ['choice_text' => "1 200", 'is_correct' => false],
                            ['choice_text' => "900", 'is_correct' => false],
                            ['choice_text' => "1 010", 'is_correct' => false],
                        ],
                        'explanation' => "Le churn sur le stock initial représente 100 clients. Le nombre final est donc 1 000 + 200 - 100 = 1 100 clients selon l'hypothèse donnée.",
                    ],
                    [
                        'question' => "Quel avantage présente un modèle construit à partir de drivers opérationnels lors d'une réunion avec les responsables métier ?",
                        'choices' => [
                            ['choice_text' => "Ils peuvent discuter des hypothèses qu'ils contrôlent réellement", 'is_correct' => true],
                            ['choice_text' => "Ils n'ont plus besoin d'expliquer leurs résultats", 'is_correct' => false],
                            ['choice_text' => "Toutes les prévisions deviennent certaines", 'is_correct' => false],
                            ['choice_text' => "Les données historiques deviennent inutiles", 'is_correct' => false],
                        ],
                        'explanation' => "Les équipes opérationnelles connaissent les volumes, tarifs, clients ou capacités. Un modèle par drivers facilite donc le dialogue entre finance et opérationnels.",
                    ],
                ],
            ],
            [
                'title' => "Intégration simple du modèle à trois états",
                'description' => "Relier compte de résultat, bilan et cash flow dans une architecture cohérente.",
                'duration' => 29,
                'passing_score' => 63,
                'questions' => [
                    [
                        'question' => "Dans un modèle à trois états, où retrouve-t-on généralement le résultat net à la fin d'une période ?",
                        'choices' => [
                            ['choice_text' => "Dans le compte de résultat et, via les variations appropriées, dans les capitaux propres et le cash flow", 'is_correct' => true],
                            ['choice_text' => "Uniquement dans le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Uniquement dans les créances clients", 'is_correct' => false],
                            ['choice_text' => "Uniquement dans le tableau des immobilisations", 'is_correct' => false],
                        ],
                        'explanation' => "Le résultat net est le point de départ du cash flow indirect et affecte les capitaux propres selon les mouvements retenus, notamment via le résultat conservé.",
                    ],
                    [
                        'question' => "Une entreprise enregistre 50 000 € de bénéfice et ne verse aucun dividende. Toutes choses égales par ailleurs, quel effet simple peut-on attendre sur les capitaux propres ?",
                        'choices' => [
                            ['choice_text' => "Une hausse de 50 000 €", 'is_correct' => true],
                            ['choice_text' => "Une baisse de 50 000 €", 'is_correct' => false],
                            ['choice_text' => "Aucun effet", 'is_correct' => false],
                            ['choice_text' => "Une hausse de 5 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "En l'absence de dividendes ou d'autres ajustements, le bénéfice conservé augmente les capitaux propres de 50 000 €.",
                    ],
                    [
                        'question' => "Une hausse de 40 000 € des immobilisations a été financée intégralement par une nouvelle dette. Quel couple de mouvements est cohérent dans un modèle intégré ?",
                        'choices' => [
                            ['choice_text' => "Actifs +40 000 € et dette +40 000 €", 'is_correct' => true],
                            ['choice_text' => "Actifs +40 000 € et dette -40 000 €", 'is_correct' => false],
                            ['choice_text' => "Actifs -40 000 € et dette +40 000 €", 'is_correct' => false],
                            ['choice_text' => "Actifs inchangés et dette inchangée", 'is_correct' => false],
                        ],
                        'explanation' => "L'acquisition augmente l'actif immobilisé et le financement augmente la dette. Ce lien doit être visible dans le modèle.",
                    ],
                    [
                        'question' => "Une entreprise reçoit un emprunt de 100 000 € en fin de mois. Quel effet direct est attendu sur le cash et la dette ?",
                        'choices' => [
                            ['choice_text' => "Le cash augmente de 100 000 € et la dette augmente de 100 000 €", 'is_correct' => true],
                            ['choice_text' => "Le cash baisse de 100 000 € et la dette baisse de 100 000 €", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires augmente de 100 000 €", 'is_correct' => false],
                            ['choice_text' => "Les créances augmentent automatiquement de 100 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "L'emprunt apporte du cash à l'entreprise tout en créant une obligation de remboursement. Il ne s'agit pas d'un revenu opérationnel.",
                    ],
                    [
                        'question' => "Pourquoi un modèle intégré doit-il éviter de calculer manuellement le même poste à plusieurs endroits sans liaison ?",
                        'choices' => [
                            ['choice_text' => "Le risque de divergence entre les différentes versions du même chiffre augmente", 'is_correct' => true],
                            ['choice_text' => "Les calculs manuels sont toujours interdits", 'is_correct' => false],
                            ['choice_text' => "Les états financiers doivent rester totalement indépendants", 'is_correct' => false],
                            ['choice_text' => "Cela empêche les scénarios", 'is_correct' => false],
                        ],
                        'explanation' => "Un même chiffre calculé à plusieurs endroits peut devenir incohérent après une modification. Les liaisons permettent de conserver une source de calcul identifiable.",
                    ],
                    [
                        'question' => "Le modèle affiche un cash final différent entre le bilan et le tableau de flux de trésorerie. Quel contrôle faut-il faire ?",
                        'choices' => [
                            ['choice_text' => "Vérifier la liaison du cash de fin de période entre les deux états", 'is_correct' => true],
                            ['choice_text' => "Modifier uniquement le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Supprimer la trésorerie du bilan", 'is_correct' => false],
                            ['choice_text' => "Changer le taux de croissance", 'is_correct' => false],
                        ],
                        'explanation' => "Le cash final calculé par le cash flow doit correspondre au poste de trésorerie du bilan. Une différence indique généralement une erreur de liaison ou de calcul.",
                    ],
                    [
                        'question' => "Une hausse de 15 000 € des créances clients apparaît sur le bilan. Dans le cash flow indirect, quel ajustement simplifié est cohérent ?",
                        'choices' => [
                            ['choice_text' => "-15 000 €", 'is_correct' => true],
                            ['choice_text' => "+15 000 €", 'is_correct' => false],
                            ['choice_text' => "0 €", 'is_correct' => false],
                            ['choice_text' => "+30 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "La hausse des créances représente du chiffre d'affaires non encore encaissé. Elle réduit donc le cash flow opérationnel de 15 000 € dans une présentation indirecte.",
                    ],
                    [
                        'question' => "Une entreprise verse 20 000 € de dividendes. Dans une présentation simplifiée, quel effet peut-on attendre sur les capitaux propres et le cash ?",
                        'choices' => [
                            ['choice_text' => "Les deux diminuent de 20 000 €", 'is_correct' => true],
                            ['choice_text' => "Les deux augmentent de 20 000 €", 'is_correct' => false],
                            ['choice_text' => "Le cash baisse mais les capitaux propres augmentent", 'is_correct' => false],
                            ['choice_text' => "Les capitaux propres baissent mais le cash augmente", 'is_correct' => false],
                        ],
                        'explanation' => "Le versement de dividendes réduit la trésorerie et diminue les capitaux propres via une distribution aux actionnaires.",
                    ],
                    [
                        'question' => "Pourquoi l'intégration à trois états est-elle particulièrement utile lorsqu'on teste plusieurs scénarios ?",
                        'choices' => [
                            ['choice_text' => "Un changement d'hypothèse peut se répercuter sur résultat, bilan et cash", 'is_correct' => true],
                            ['choice_text' => "Les scénarios deviennent inutiles", 'is_correct' => false],
                            ['choice_text' => "Le modèle n'a plus besoin de données opérationnelles", 'is_correct' => false],
                            ['choice_text' => "Les dettes et les investissements restent toujours constants", 'is_correct' => false],
                        ],
                        'explanation' => "Une hypothèse de ventes ou de coûts peut modifier le résultat, les créances, la trésorerie et les besoins de financement. L'intégration permet de suivre ces effets en chaîne.",
                    ],
                    [
                        'question' => "Un modèle prévoit une forte croissance et affiche à la fois une hausse importante des créances, du stock et de la dette court terme. Quelle lecture est plausible ?",
                        'choices' => [
                            ['choice_text' => "La croissance crée un besoin de financement du cycle d'exploitation", 'is_correct' => true],
                            ['choice_text' => "La croissance ne demande jamais de financement", 'is_correct' => false],
                            ['choice_text' => "Les créances et les stocks ont forcément un effet positif sur le cash", 'is_correct' => false],
                            ['choice_text' => "La dette court terme prouve que les ventes sont fausses", 'is_correct' => false],
                        ],
                        'explanation' => "Une forte croissance peut consommer du cash lorsqu'elle exige plus de stocks et de créances. La dette court terme peut alors servir à financer temporairement ce besoin.",
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
