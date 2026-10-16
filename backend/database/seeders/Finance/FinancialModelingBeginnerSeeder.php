<?php

namespace Database\Seeders;

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

        $quizSettings = [
            ['duration' => 22, 'passing_score' => 58],
            ['duration' => 24, 'passing_score' => 56],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 59],
            ['duration' => 27, 'passing_score' => 61],
            ['duration' => 23, 'passing_score' => 57],
            ['duration' => 24, 'passing_score' => 62],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 29, 'passing_score' => 63],
        ];

        $quizzes = [
            [
                'title' => 'Prévisions du chiffre d\'affaires et des coûts',
                'description' => 'Techniques simples pour projeter ventes, prix, volumes et coûts d\'exploitation.',
                'questions' => [
                    [
                        'question' => 'Une boutique prévoit 2 000 ventes l\'an prochain à un prix moyen de 30 €. Quel chiffre d\'affaires prévisionnel obtient-on ?',
                        'explanation' => 'Le chiffre d\'affaires prévisionnel est égal au volume multiplié par le prix moyen : 2 000 × 30 = 60 000 €.',
                        'choices' => [
                            ['choice_text' => '6 000 €', 'is_correct' => false],
                            ['choice_text' => '60 000 €', 'is_correct' => true],
                            ['choice_text' => '66 000 €', 'is_correct' => false],
                            ['choice_text' => '90 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société augmente ses prix de 5 % mais prévoit une baisse de 3 % des volumes. Quel raisonnement est le plus juste ?',
                        'explanation' => 'Les deux effets se combinent. Avec 1,05 × 0,97 = 1,0185, le chiffre d\'affaires serait légèrement supérieur à celui de départ dans cette hypothèse simple.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d\'affaires baisse d\'environ 3 %, car la baisse des volumes l\'emporte sur la hausse des prix', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d\'affaires progresse d\'environ 8 %, en additionnant simplement la hausse des prix et la baisse des volumes', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d\'affaires reste stable, car les deux effets se compensent parfaitement', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d\'affaires peut encore progresser, mais l\'effet exact doit être calculé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise estime ses coûts variables à 40 % du chiffre d\'affaires. Pour des ventes de 500 000 €, quels coûts variables le modèle doit-il prévoir ?',
                        'explanation' => '40 % de 500 000 € correspond à 200 000 €. Cette hypothèse permet de relier automatiquement les coûts variables au niveau d\'activité prévu.',
                        'choices' => [
                            ['choice_text' => '20 000 €', 'is_correct' => false],
                            ['choice_text' => '125 000 €', 'is_correct' => false],
                            ['choice_text' => '200 000 €', 'is_correct' => true],
                            ['choice_text' => '300 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prévoit une hausse de 8 % du chiffre d\'affaires et une hausse de 8 % de ses coûts variables. Que peut-on dire de la marge brute si le taux de marge initial reste inchangé ?',
                        'explanation' => 'Si les ventes et les coûts variables évoluent proportionnellement, le taux de marge brute reste constant. La marge brute en valeur augmente donc avec le chiffre d\'affaires.',
                        'choices' => [
                            ['choice_text' => 'Elle augmente en valeur dans la même proportion que le chiffre d\'affaires', 'is_correct' => true],
                            ['choice_text' => 'Elle reste stable en valeur, car les deux hausses s\'annulent dans le calcul', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente deux fois plus vite que le chiffre d\'affaires, car les deux hausses s\'additionnent', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue en valeur, car les coûts variables progressent aussi fortement que les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le modèle d\'une entreprise saisonnière affiche exactement les mêmes ventes chaque mois. Quel point mérite une vérification en priorité ?',
                        'explanation' => 'Une activité saisonnière peut connaître des mois très différents. Lisser complètement les ventes peut donner une mauvaise image du besoin de trésorerie et des périodes de forte activité.',
                        'choices' => [
                            ['choice_text' => 'Le taux d\'imposition est peut-être appliqué sur une base mensuelle plutôt qu\'annuelle', 'is_correct' => false],
                            ['choice_text' => 'L\'hypothèse ignore peut-être la saisonnalité de l\'activité', 'is_correct' => true],
                            ['choice_text' => 'Le montant des amortissements est peut-être calculé sur une durée trop courte', 'is_correct' => false],
                            ['choice_text' => 'Le niveau du capital social est peut-être inadapté à une activité saisonnière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi projeter séparément le volume et le prix peut-il être préférable à une simple croissance globale du chiffre d\'affaires ?',
                        'explanation' => 'Une croissance de 6 % peut venir d\'une hausse des volumes, des prix ou des deux. Séparer les moteurs rend la prévision plus compréhensible et plus facile à tester.',
                        'choices' => [
                            ['choice_text' => 'On comprend mieux le moteur réel de la croissance', 'is_correct' => true],
                            ['choice_text' => 'On obtient une prévision plus exacte sans hypothèse sur les prix futurs', 'is_correct' => false],
                            ['choice_text' => 'On rend les coûts fixes proportionnels au volume vendu', 'is_correct' => false],
                            ['choice_text' => 'On peut se passer de suivre l\'évolution des volumes vendus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise budgète 120 000 € de coûts fixes annuels. Quel montant mensuel simple peut être retenu si aucun effet saisonnier n\'est prévu ?',
                        'explanation' => '120 000 ÷ 12 = 10 000 € par mois. Cette approche suppose que la charge est répartie uniformément.',
                        'choices' => [
                            ['choice_text' => '1 000 €', 'is_correct' => false],
                            ['choice_text' => '10 000 €', 'is_correct' => true],
                            ['choice_text' => '12 000 €', 'is_correct' => false],
                            ['choice_text' => '15 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lors d\'une comparaison budget/réalisé, les ventes sont 10 % sous le budget mais les coûts variables sont aussi 10 % sous le budget. Quel élément faut-il regarder ensuite ?',
                        'explanation' => 'Un écart de chiffre d\'affaires ne suffit pas à juger la performance. La relation entre ventes, coûts variables et coûts fixes détermine l\'effet réel sur la rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Rien de plus, car deux écarts identiques de 10 % annulent tout effet sur la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Le détail des amortissements de la période, plus important que l\'écart de ventes', 'is_correct' => false],
                            ['choice_text' => 'L\'évolution du délai de paiement des clients, avant tout autre poste', 'is_correct' => false],
                            ['choice_text' => 'L\'impact sur la marge et les coûts fixes, pas seulement l\'écart de ventes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un modèle utilise une croissance de ventes de 20 % chaque année pendant cinq ans sans justification. Quel risque apparaît ?',
                        'explanation' => 'Une hypothèse élevée maintenue très longtemps peut gonfler artificiellement les résultats. Elle doit être confrontée à la capacité commerciale, au marché et à l\'historique de l\'entreprise.',
                        'choices' => [
                            ['choice_text' => 'Le modèle devient plus fiable, car une croissance régulière réduit l\'incertitude sur cinq ans', 'is_correct' => false],
                            ['choice_text' => 'Le modèle perd sa cohérence comptable, car le bilan ne peut plus s\'équilibrer avec une telle croissance', 'is_correct' => false],
                            ['choice_text' => 'Le modèle peut devenir excessivement optimiste si l\'hypothèse n\'est pas soutenue par l\'activité', 'is_correct' => true],
                            ['choice_text' => 'Le modèle devient trop prudent, car une croissance de 20 % est inférieure aux taux usuels du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société vend 4 000 unités à 50 € et les ventes progressent de 10 % en volume avec un prix inchangé. Quel chiffre d\'affaires est prévu ?',
                        'explanation' => 'Le nouveau volume est 4 400 unités. À 50 € l\'unité, le chiffre d\'affaires devient 4 400 × 50 = 220 000 €.',
                        'choices' => [
                            ['choice_text' => '200 000 €', 'is_correct' => false],
                            ['choice_text' => '210 000 €', 'is_correct' => false],
                            ['choice_text' => '220 000 €', 'is_correct' => true],
                            ['choice_text' => '240 000 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Compte de résultat prévisionnel',
                'description' => 'Lecture et construction d\'un compte de résultat simple à partir d\'hypothèses opérationnelles.',
                'questions' => [
                    [
                        'question' => 'Une entreprise prévoit 800 000 € de chiffre d\'affaires et 500 000 € de coûts opérationnels avant amortissements. Quel EBITDA simplifié obtient-on ?',
                        'explanation' => 'Dans cette présentation simplifiée, l\'EBITDA correspond au chiffre d\'affaires moins les charges opérationnelles avant amortissements : 800 000 - 500 000 = 300 000 €.',
                        'choices' => [
                            ['choice_text' => '250 000 €', 'is_correct' => false],
                            ['choice_text' => '300 000 €', 'is_correct' => true],
                            ['choice_text' => '500 000 €', 'is_correct' => false],
                            ['choice_text' => '1 300 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une charge d\'amortissement augmente de 20 000 € alors que l\'entreprise ne paie rien en trésorerie au moment de l\'enregistrement. Quel poste est directement affecté ?',
                        'explanation' => 'L\'amortissement est une charge comptable qui réduit le résultat, mais il n\'entraîne pas une sortie de trésorerie immédiate. Il est donc important de distinguer compte de résultat et cash flow.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d\'affaires', 'is_correct' => false],
                            ['choice_text' => 'Les encaissements clients', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de clients', 'is_correct' => false],
                            ['choice_text' => 'Le résultat opérationnel', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un modèle calcule la marge brute à partir du chiffre d\'affaires et du coût des ventes. Quelle formule est correcte ?',
                        'explanation' => 'La marge brute mesure ce qu\'il reste après le coût directement lié aux ventes. Elle se calcule donc par la différence entre chiffre d\'affaires et coût des ventes.',
                        'choices' => [
                            ['choice_text' => 'Chiffre d\'affaires - coût des ventes', 'is_correct' => true],
                            ['choice_text' => 'Chiffre d\'affaires + coût des ventes', 'is_correct' => false],
                            ['choice_text' => 'Coût des ventes - chiffre d\'affaires', 'is_correct' => false],
                            ['choice_text' => 'Chiffre d\'affaires ÷ coût des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a un EBITDA de 150 000 € et des amortissements de 40 000 €. Quel EBIT simplifié obtient-on ?',
                        'explanation' => 'L\'EBIT est obtenu ici par EBITDA moins amortissements : 150 000 - 40 000 = 110 000 €.',
                        'choices' => [
                            ['choice_text' => '40 000 €', 'is_correct' => false],
                            ['choice_text' => '75 000 €', 'is_correct' => false],
                            ['choice_text' => '110 000 €', 'is_correct' => true],
                            ['choice_text' => '190 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du taux d\'intérêt sur la dette nouvelle apparaît dans quelle partie du compte de résultat ?',
                        'explanation' => 'Les intérêts liés à l\'endettement sont présentés comme charges financières. Une hausse du taux peut donc réduire le résultat avant impôt, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Les charges financières', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d\'affaires', 'is_correct' => false],
                            ['choice_text' => 'Les achats de matières', 'is_correct' => false],
                            ['choice_text' => 'Les amortissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société améliore sa marge brute mais son résultat net recule. Quelle explication est possible ?',
                        'explanation' => 'Le résultat net tient compte de plusieurs niveaux de charges. Une amélioration en amont peut être absorbée par une hausse des coûts d\'exploitation, des intérêts ou des impôts.',
                        'choices' => [
                            ['choice_text' => 'Les amortissements ont diminué, ce qui réduit mécaniquement le résultat net', 'is_correct' => false],
                            ['choice_text' => 'L\'impôt sur les sociétés a diminué, ce qui réduit mécaniquement le résultat net', 'is_correct' => false],
                            ['choice_text' => 'Le résultat net se calcule avant les charges financières, qui n\'ont donc pas d\'effet sur lui', 'is_correct' => false],
                            ['choice_text' => 'Les charges financières ou d\'autres charges ont augmenté plus fortement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle mensuel, pourquoi faut-il éviter de mélanger les valeurs annuelles et mensuelles dans une même formule sans conversion ?',
                        'explanation' => 'Si une charge annuelle est comparée directement à une donnée mensuelle, l\'échelle n\'est plus cohérente. Le modèle doit respecter la période associée à chaque donnée.',
                        'choices' => [
                            ['choice_text' => 'Cela fait perdre les liens entre cellules et supprime les formules du modèle', 'is_correct' => false],
                            ['choice_text' => 'Cela peut créer des écarts d\'échelle et des résultats incohérents', 'is_correct' => true],
                            ['choice_text' => 'Cela modifie le calendrier fiscal et fait changer le taux d\'impôt appliqué', 'is_correct' => false],
                            ['choice_text' => 'Cela change la devise de référence des montants et fausse les taux de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste observe un EBIT de 90 000 € sur un chiffre d\'affaires de 600 000 €. Quelle est la marge EBIT ?',
                        'explanation' => 'La marge EBIT se calcule par EBIT ÷ chiffre d\'affaires. Ici, 90 000 ÷ 600 000 = 15 %.',
                        'choices' => [
                            ['choice_text' => '6,7 %', 'is_correct' => false],
                            ['choice_text' => '15 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '66,7 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle affiche une marge nette de 70 % pour une entreprise de distribution traditionnelle. Quelle action est la plus raisonnable ?',
                        'explanation' => 'Une marge extrêmement élevée peut être possible dans certains secteurs, mais elle mérite un contrôle lorsque le résultat paraît incohérent avec l\'activité. Les modèles doivent être audités, pas seulement lus.',
                        'choices' => [
                            ['choice_text' => 'Vérifier les formules et les hypothèses avant de conclure', 'is_correct' => true],
                            ['choice_text' => 'Retenir la marge si le bilan est équilibré, car l\'équilibre prouve que le calcul est correct', 'is_correct' => false],
                            ['choice_text' => 'Remplacer cette marge par la moyenne du secteur sans analyser l\'écart', 'is_correct' => false],
                            ['choice_text' => 'Accepter ce résultat, car une marge élevée traduit une bonne maîtrise des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un compte de résultat prévisionnel, quel élément est le plus directement lié au niveau de ventes ?',
                        'explanation' => 'Le chiffre d\'affaires reflète directement les ventes prévues. D\'autres postes peuvent évoluer avec l\'activité, mais leur relation avec les ventes dépend de la structure de l\'entreprise.',
                        'choices' => [
                            ['choice_text' => 'Les amortissements de la période', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'imposition', 'is_correct' => false],
                            ['choice_text' => 'Le capital social', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d\'affaires', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bilan prévisionnel et cohérence des comptes',
                'description' => 'Comprendre les liens entre actifs, passifs, capitaux propres et mouvements du modèle.',
                'questions' => [
                    [
                        'question' => 'Une entreprise a 700 000 € d\'actifs et 450 000 € de passifs. Quel montant de capitaux propres correspond à l\'équation comptable ?',
                        'explanation' => 'L\'équation comptable est Actifs = Passifs + Capitaux propres. Les capitaux propres sont donc 700 000 - 450 000 = 250 000 €.',
                        'choices' => [
                            ['choice_text' => '175 000 €', 'is_correct' => false],
                            ['choice_text' => '250 000 €', 'is_correct' => true],
                            ['choice_text' => '450 000 €', 'is_correct' => false],
                            ['choice_text' => '1 150 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des créances clients signifie-t-elle généralement que l\'argent a déjà été encaissé ?',
                        'explanation' => 'Une créance client représente un montant dû par le client. L\'augmentation des créances peut donc signaler que le chiffre d\'affaires a progressé sans encaissement immédiat.',
                        'choices' => [
                            ['choice_text' => 'Oui, une créance représente toujours de la trésorerie reçue', 'is_correct' => false],
                            ['choice_text' => 'Oui, les créances sont des dettes bancaires', 'is_correct' => false],
                            ['choice_text' => 'Non, les ventes peuvent avoir été comptabilisées sans encaissement correspondant', 'is_correct' => true],
                            ['choice_text' => 'Non, parce qu\'une créance est toujours une perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle, le stock passe de 80 000 € à 110 000 €. Quel effet économique simple cela peut-il avoir sur la trésorerie, toutes choses égales par ailleurs ?',
                        'explanation' => 'Une hausse du stock immobilise du cash tant que les marchandises ne sont pas vendues et encaissées. Ici, l\'augmentation est de 30 000 €.',
                        'choices' => [
                            ['choice_text' => 'Cela peut libérer 30 000 € de trésorerie, car le stock est un actif', 'is_correct' => false],
                            ['choice_text' => 'Cela peut consommer 110 000 € de trésorerie, soit tout le stock final', 'is_correct' => false],
                            ['choice_text' => 'Cela peut consommer 30 000 € de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Cela peut réduire l\'impôt à payer de 30 000 € sur la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un bilan prévisionnel doit-il rester équilibré ?',
                        'explanation' => 'L\'équilibre du bilan est une contrainte fondamentale. Un écart entre les deux côtés peut révéler une formule manquante ou une mauvaise liaison entre les états financiers.',
                        'choices' => [
                            ['choice_text' => 'Parce que les actifs doivent être financés par les passifs et les capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Parce que les capitaux propres doivent égaler la dette pour limiter le risque de faillite', 'is_correct' => false],
                            ['choice_text' => 'Parce que le total des actifs doit être égal au chiffre d\'affaires de la période', 'is_correct' => false],
                            ['choice_text' => 'Parce que le résultat net doit être égal à la variation de trésorerie de la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance un nouvel équipement de 200 000 € par un emprunt bancaire du même montant. Quel changement immédiat est attendu dans le modèle ?',
                        'explanation' => 'L\'achat augmente l\'actif immobilisé et le financement par emprunt augmente le passif. Le modèle doit relier ces deux mouvements.',
                        'choices' => [
                            ['choice_text' => 'Les actifs augmentent de 200 000 € et les capitaux propres augmentent de 200 000 €', 'is_correct' => false],
                            ['choice_text' => 'Les actifs restent stables et la dette augmente de 200 000 € dans le modèle', 'is_correct' => false],
                            ['choice_text' => 'Les actifs augmentent de 200 000 € et la dette diminue de 200 000 €', 'is_correct' => false],
                            ['choice_text' => 'Les actifs augmentent de 200 000 € et la dette augmente aussi de 200 000 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une baisse des dettes fournisseurs peut-elle augmenter le besoin de trésorerie à court terme ?',
                        'explanation' => 'Une dette fournisseur représente un financement à court terme accordé par les fournisseurs. La réduire signifie généralement utiliser du cash pour régler les factures.',
                        'choices' => [
                            ['choice_text' => 'Oui, car les fournisseurs facturent alors des intérêts plus élevés sur le solde restant dû', 'is_correct' => false],
                            ['choice_text' => 'Non, car une baisse de dettes améliore le résultat net et donc la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Oui, car l\'entreprise finance moins son activité par le crédit fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Non, car la dette fournisseur appartient au financement à long terme du bilan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal peut indiquer qu\'une formule du bilan prévisionnel est cassée ?',
                        'explanation' => 'Le bilan doit être équilibré. Un écart persistant est un signal d\'alerte utile pour rechercher une erreur de formule, de signe ou de liaison entre états.',
                        'choices' => [
                            ['choice_text' => 'Un écart persistant entre total actif et total passif + capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Un écart durable entre le chiffre d\'affaires et le résultat net de la période', 'is_correct' => false],
                            ['choice_text' => 'Un total des actifs qui augmente d\'une année à l\'autre avec la croissance', 'is_correct' => false],
                            ['choice_text' => 'Une trésorerie de fin de période différente de celle de début de période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les immobilisations nettes sont de 500 000 € en début d\'année, les investissements sont de 80 000 € et les amortissements de 50 000 €. Quel solde de fin d\'année obtient-on, sans autres mouvements ?',
                        'explanation' => 'Le solde final est 500 000 + 80 000 - 50 000 = 530 000 €. Le modèle doit donc intégrer les investissements et les amortissements séparément.',
                        'choices' => [
                            ['choice_text' => '450 000 €', 'is_correct' => false],
                            ['choice_text' => '470 000 €', 'is_correct' => false],
                            ['choice_text' => '530 000 €', 'is_correct' => true],
                            ['choice_text' => '630 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle de bilan doit-il être relié aux autres états financiers ?',
                        'explanation' => 'Dans un modèle intégré, le résultat, le cash flow et le bilan se répondent. Cette intégration permet de vérifier la cohérence globale des prévisions.',
                        'choices' => [
                            ['choice_text' => 'Parce que le bilan se déduit mécaniquement du compte de résultat sans autre donnée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les trois états doivent afficher exactement le même total pour chaque ligne', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cash flow d\'investissement doit être égal au résultat net de la période', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices, investissements, dettes et variations du besoin en fonds de roulement (BFR) ont des effets croisés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente fortement ses ventes à crédit mais prévoit très peu de hausse des créances clients. Quelle vérification est la plus pertinente ?',
                        'explanation' => 'Lorsque les ventes à crédit augmentent, les créances devraient normalement évoluer selon le délai de recouvrement. Une faible hausse doit donc être justifiée par des hypothèses d\'encaissement.',
                        'choices' => [
                            ['choice_text' => 'Vérifier si l\'hypothèse de délai de paiement est cohérente avec les nouvelles ventes', 'is_correct' => true],
                            ['choice_text' => 'Vérifier si le taux d\'amortissement est cohérent avec la hausse du chiffre d\'affaires', 'is_correct' => false],
                            ['choice_text' => 'Réduire le délai de paiement fournisseur pour compenser la hausse des créances', 'is_correct' => false],
                            ['choice_text' => 'Contrôler que le total du bilan reste inférieur au chiffre d\'affaires prévu', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Working capital et trésorerie opérationnelle',
                'description' => 'Prévision simple des créances, stocks, dettes fournisseurs et besoins de cash.',
                'questions' => [
                    [
                        'question' => 'Une entreprise encaisse ses clients 45 jours après la vente. Que cherche-t-on principalement à modéliser avec cette hypothèse ?',
                        'explanation' => 'Le délai de recouvrement indique combien de temps l\'entreprise attend avant d\'encaisser ses ventes. Il est directement lié au montant des créances et au cash disponible.',
                        'choices' => [
                            ['choice_text' => 'Le délai moyen de paiement des fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Le délai moyen de recouvrement des créances', 'is_correct' => true],
                            ['choice_text' => 'La rotation moyenne des stocks en jours', 'is_correct' => false],
                            ['choice_text' => 'La durée moyenne de remboursement de la dette bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les créances clients passent de 100 000 € à 130 000 €. Sans autre changement, quel est l\'effet sur le cash flow ?',
                        'explanation' => 'Une hausse des créances signifie que davantage de ventes ne sont pas encore encaissées. Dans un cash flow indirect, cette hausse est donc une utilisation de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Une génération de trésorerie de 30 000 €', 'is_correct' => false],
                            ['choice_text' => 'Une consommation de trésorerie de 130 000 €', 'is_correct' => false],
                            ['choice_text' => 'Aucun effet sur la trésorerie, car les créances sont un actif', 'is_correct' => false],
                            ['choice_text' => 'Une consommation de trésorerie de 30 000 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise négocie avec ses fournisseurs un délai de paiement plus long. Quel effet peut-elle rechercher dans son modèle ?',
                        'explanation' => 'Un délai fournisseur plus long laisse davantage de temps avant de payer les achats. Cela peut soutenir la trésorerie, même si d\'autres conséquences commerciales peuvent exister.',
                        'choices' => [
                            ['choice_text' => 'Réduire le besoin de trésorerie en diminuant le coût des achats', 'is_correct' => false],
                            ['choice_text' => 'Raccourcir le délai de recouvrement des créances clients', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le niveau de stock nécessaire à l\'activité', 'is_correct' => false],
                            ['choice_text' => 'Réduire temporairement le besoin de trésorerie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si les stocks augmentent parce que l\'entreprise prépare une forte saison commerciale, faut-il automatiquement considérer cette hausse comme une mauvaise décision ?',
                        'explanation' => 'Un stock supplémentaire consomme du cash, mais il peut être nécessaire pour servir une demande attendue. L\'analyse doit comparer le coût de stockage au bénéfice opérationnel attendu.',
                        'choices' => [
                            ['choice_text' => 'Non, elle peut être rationnelle si elle répond à une demande future et reste maîtrisée', 'is_correct' => true],
                            ['choice_text' => 'Oui, car une hausse de stock réduit le résultat net de la période', 'is_correct' => false],
                            ['choice_text' => 'Oui, car un stock plus élevé signale que l\'entreprise vend moins que prévu', 'is_correct' => false],
                            ['choice_text' => 'Non, car les stocks sont financés par les fournisseurs et ne consomment pas de cash', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise 360 000 € de ventes annuelles et ses créances représentent 30 jours de ventes sur la base d\'une année de 360 jours. Quel niveau de créances simplifié obtient-on ?',
                        'explanation' => 'Ventes quotidiennes = 360 000 ÷ 360 = 1 000 €. Avec 30 jours de délai, les créances sont d\'environ 30 000 €.',
                        'choices' => [
                            ['choice_text' => '10 000 €', 'is_correct' => false],
                            ['choice_text' => '30 000 €', 'is_correct' => true],
                            ['choice_text' => '60 000 €', 'is_correct' => false],
                            ['choice_text' => '90 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le besoin en fonds de roulement (BFR) est-il important dans un modèle même pour une entreprise rentable ?',
                        'explanation' => 'Les délais d\'encaissement et de paiement ainsi que les stocks créent des décalages entre résultat comptable et trésorerie. Une entreprise rentable peut donc connaître une tension de cash.',
                        'choices' => [
                            ['choice_text' => 'Parce que le BFR ne dépend pas du niveau d\'activité de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité d\'une entreprise détermine directement le niveau de ses stocks et créances', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices ne se transforment pas tous immédiatement en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que le bénéfice est calculé après avoir déduit le cash disponible en début de période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les ventes augmentent de 20 % alors que le délai clients reste stable. Quel effet est généralement attendu sur les créances ?',
                        'explanation' => 'Avec un délai de paiement inchangé, le montant moyen des créances évolue généralement avec le volume des ventes. Une croissance de 20 % des ventes entraîne donc une hausse voisine des créances.',
                        'choices' => [
                            ['choice_text' => 'Elles augmentent d\'environ 40 %, soit le double de la hausse des ventes', 'is_correct' => false],
                            ['choice_text' => 'Elles diminuent d\'environ 20 %, le délai de paiement restant stable', 'is_correct' => false],
                            ['choice_text' => 'Elles augmentent aussi approximativement de 20 %', 'is_correct' => true],
                            ['choice_text' => 'Elles restent stables, car le délai ne change pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur opérationnel est directement utile pour relier les achats à la dette fournisseur dans un modèle ?',
                        'explanation' => 'Le délai fournisseur permet d\'estimer le montant de factures encore impayées. Il constitue donc une hypothèse de BFR (besoin en fonds de roulement) importante.',
                        'choices' => [
                            ['choice_text' => 'Le délai moyen de recouvrement client', 'is_correct' => false],
                            ['choice_text' => 'Le délai moyen de paiement fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Le taux de marge brute sur les achats', 'is_correct' => false],
                            ['choice_text' => 'La durée moyenne de rotation des stocks en magasin', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle montre une forte croissance des ventes mais une trésorerie qui s\'améliore très vite malgré une hausse importante des stocks et des créances. Quelle vérification est logique ?',
                        'explanation' => 'Une hausse forte des créances et des stocks consomme normalement du cash. Si le modèle affiche l\'inverse, les signes ou les liaisons du cash flow doivent être contrôlés.',
                        'choices' => [
                            ['choice_text' => 'Réduire les hypothèses de croissance des ventes jusqu\'à retrouver un cash plausible', 'is_correct' => false],
                            ['choice_text' => 'Contrôler le calcul des amortissements dans le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Vérifier que le taux d\'imposition est appliqué sur le bon résultat', 'is_correct' => false],
                            ['choice_text' => 'Contrôler les signes et les liaisons du BFR dans le cash flow', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une baisse des créances clients de 20 000 € peut-elle soutenir la trésorerie ?',
                        'explanation' => 'Lorsque les clients règlent leurs factures, les créances baissent et la trésorerie augmente. Le modèle doit capter cette conversion du poste client en cash.',
                        'choices' => [
                            ['choice_text' => 'Oui, si cette baisse provient d\'encaissements de clients', 'is_correct' => true],
                            ['choice_text' => 'Oui, car une baisse de créances réduit directement les dettes de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Non, car une baisse de créances signifie que les ventes ont diminué', 'is_correct' => false],
                            ['choice_text' => 'Non, car les créances sont un poste du compte de résultat sans lien avec le cash', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Capex, amortissements et dette',
                'description' => 'Modélisation simple des investissements, amortissements et financements liés aux immobilisations.',
                'questions' => [
                    [
                        'question' => 'Une entreprise prévoit d\'acheter une machine pour 120 000 €. Dans un modèle financier, où doit apparaître cet investissement en priorité ?',
                        'explanation' => 'Un capex est une sortie de cash liée à l\'acquisition d\'un actif durable. Le modèle doit donc le relier aux immobilisations et au cash flow d\'investissement.',
                        'choices' => [
                            ['choice_text' => 'Dans les charges d\'exploitation du compte de résultat de l\'année d\'achat', 'is_correct' => false],
                            ['choice_text' => 'Dans les capitaux propres et dans le cash flow de financement de la période', 'is_correct' => false],
                            ['choice_text' => 'Dans les investissements en immobilisations et dans le cash flow d\'investissement', 'is_correct' => true],
                            ['choice_text' => 'Dans les stocks et dans les variations du cash flow opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une machine de 100 000 € est amortie linéairement sur cinq ans, sans valeur résiduelle. Quel amortissement annuel simple obtient-on ?',
                        'explanation' => '100 000 ÷ 5 = 20 000 € d\'amortissement annuel selon l\'hypothèse linéaire donnée.',
                        'choices' => [
                            ['choice_text' => '5 000 €', 'is_correct' => false],
                            ['choice_text' => '20 000 €', 'is_correct' => true],
                            ['choice_text' => '25 000 €', 'is_correct' => false],
                            ['choice_text' => '50 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle sépare-t-il généralement capex et amortissement ?',
                        'explanation' => 'Le capex affecte directement la trésorerie au moment de l\'achat. L\'amortissement répartit ensuite comptablement le coût de l\'actif sur sa durée d\'utilisation.',
                        'choices' => [
                            ['choice_text' => 'Le capex est une charge d\'exploitation immédiate alors que l\'amortissement est un décaissement de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Le capex correspond à un financement par la dette alors que l\'amortissement correspond à un encaissement client', 'is_correct' => false],
                            ['choice_text' => 'Le capex désigne le remboursement du principal de la dette alors que l\'amortissement désigne le paiement des intérêts', 'is_correct' => false],
                            ['choice_text' => 'Le capex représente une dépense d\'investissement alors que l\'amortissement est une charge comptable sans décaissement immédiat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une dette de 300 000 € porte un taux annuel de 6 %. Quel montant d\'intérêts simplifié le modèle peut-il prévoir sur une année pleine si le principal reste inchangé ?',
                        'explanation' => '300 000 × 6 % = 18 000 €. Cette approche simplifiée suppose que le montant de dette reste constant pendant toute l\'année.',
                        'choices' => [
                            ['choice_text' => '12 000 €', 'is_correct' => false],
                            ['choice_text' => '18 000 €', 'is_correct' => true],
                            ['choice_text' => '36 000 €', 'is_correct' => false],
                            ['choice_text' => '50 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise rembourse 50 000 € de principal sur un emprunt. Quel effet direct cela a-t-il sur la dette ?',
                        'explanation' => 'Le remboursement du principal réduit le montant restant dû. Il ne faut pas le confondre avec le paiement des intérêts, qui constitue une charge financière.',
                        'choices' => [
                            ['choice_text' => 'La dette diminue de 50 000 €', 'is_correct' => true],
                            ['choice_text' => 'La dette augmente de 50 000 €', 'is_correct' => false],
                            ['choice_text' => 'Les intérêts annuels diminuent de 50 000 €', 'is_correct' => false],
                            ['choice_text' => 'La dette est convertie en capitaux propres pour 50 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle projette des investissements élevés mais aucun financement supplémentaire et aucune baisse de trésorerie. Quelle question faut-il poser ?',
                        'explanation' => 'Des investissements importants doivent être financés par du cash existant, de la dette, des capitaux propres ou une autre source. L\'absence de contrepartie peut signaler une incohérence.',
                        'choices' => [
                            ['choice_text' => 'Pourquoi les investissements n\'augmentent-ils pas les ventes ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi les amortissements ne sont-ils pas payés en cash ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi le taux d\'impôt ne varie-t-il pas avec les investissements ?', 'is_correct' => false],
                            ['choice_text' => 'Comment les investissements sont-ils financés ?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une immobilisation de 60 000 € est amortie linéairement sur trois ans, sans valeur résiduelle. Quelle est sa valeur nette comptable à la fin de la première année ?',
                        'explanation' => 'L\'amortissement annuel est 60 000 ÷ 3 = 20 000 €. La valeur nette comptable après un an est donc 60 000 - 20 000 = 40 000 €.',
                        'choices' => [
                            ['choice_text' => '20 000 €', 'is_correct' => false],
                            ['choice_text' => '45 000 €', 'is_correct' => false],
                            ['choice_text' => '40 000 €', 'is_correct' => true],
                            ['choice_text' => '60 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe si un modèle augmente fortement les investissements futurs mais laisse l\'amortissement inchangé sans justification ?',
                        'explanation' => 'Des investissements supplémentaires créent généralement de nouvelles immobilisations à amortir. Le modèle doit donc relier les capex aux charges d\'amortissement selon les hypothèses retenues.',
                        'choices' => [
                            ['choice_text' => 'Les projections de résultat et de valeur des immobilisations peuvent devenir incohérentes', 'is_correct' => true],
                            ['choice_text' => 'Le besoin de financement des investissements peut être surestimé dans le cash flow', 'is_correct' => false],
                            ['choice_text' => 'Les capex disparaissent du cash flow d\'investissement, car ils sont remplacés par l\'amortissement', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'intérêt de la dette est mal calculé, car il dépend de la valeur des immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance 70 % d\'un projet de 200 000 € par dette. Quel montant de dette nouvelle cela représente-t-il ?',
                        'explanation' => '200 000 × 70 % = 140 000 €. Les 60 000 € restants doivent être couverts par une autre source de financement selon la structure retenue.',
                        'choices' => [
                            ['choice_text' => '70 000 €', 'is_correct' => false],
                            ['choice_text' => '130 000 €', 'is_correct' => false],
                            ['choice_text' => '140 000 €', 'is_correct' => true],
                            ['choice_text' => '200 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lors d\'une revue du modèle, la dette baisse chaque année mais les remboursements ne sont jamais intégrés au cash flow. Que faut-il vérifier ?',
                        'explanation' => 'Les remboursements de principal correspondent à des sorties de cash. Un modèle intégré doit faire remonter ces mouvements dans le cash flow de financement.',
                        'choices' => [
                            ['choice_text' => 'La liaison entre le calendrier de dette et le cash flow opérationnel', 'is_correct' => false],
                            ['choice_text' => 'La liaison entre le calendrier de dette et le cash flow de financement', 'is_correct' => true],
                            ['choice_text' => 'La liaison entre le calendrier d\'amortissement et le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Le calcul des charges financières dans le compte de résultat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cash flow et trésorerie disponible',
                'description' => 'Passage du résultat comptable aux flux de trésorerie et lecture de la génération de cash.',
                'questions' => [
                    [
                        'question' => 'Une entreprise affiche 100 000 € de résultat net, une hausse de 20 000 € des créances et 10 000 € d\'amortissement. Sans autre mouvement, quel cash flow opérationnel simplifié peut-on obtenir ?',
                        'explanation' => 'On part du résultat net de 100 000 €, on ajoute l\'amortissement de 10 000 € puis on retire la hausse des créances de 20 000 € : 100 000 + 10 000 - 20 000 = 90 000 €.',
                        'choices' => [
                            ['choice_text' => '70 000 €', 'is_correct' => false],
                            ['choice_text' => '90 000 €', 'is_correct' => true],
                            ['choice_text' => '110 000 €', 'is_correct' => false],
                            ['choice_text' => '130 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'amortissement est-il généralement ajouté au résultat net dans un cash flow indirect ?',
                        'explanation' => 'Le cash flow indirect réajuste le résultat comptable pour retrouver les flux réels de trésorerie. L\'amortissement est une charge non décaissée dans la période.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il a réduit le résultat sans entraîner de sortie de cash pendant la période', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'il correspond à un décaissement qui doit être neutralisé dans le résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il représente une recette qui n\'a pas été comptabilisée dans le résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il mesure la variation des stocks entre le début et la fin de période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise génère 150 000 € de cash flow opérationnel et investit 90 000 € dans ses immobilisations. Quel free cash flow simplifié obtient-on ?',
                        'explanation' => 'Dans cette définition simplifiée, le free cash flow est 150 000 - 90 000 = 60 000 €. Il représente le cash restant après les investissements considérés.',
                        'choices' => [
                            ['choice_text' => '40 000 €', 'is_correct' => false],
                            ['choice_text' => '60 000 €', 'is_correct' => true],
                            ['choice_text' => '90 000 €', 'is_correct' => false],
                            ['choice_text' => '240 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des dettes fournisseurs de 15 000 € peut-elle améliorer le cash flow opérationnel à court terme ?',
                        'explanation' => 'Une augmentation des dettes fournisseurs signifie que certaines charges ou achats sont comptabilisés alors que le paiement n\'a pas encore eu lieu. Cela conserve temporairement de la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Non, car une hausse de dettes fournisseurs correspond à une sortie de cash immédiate', 'is_correct' => false],
                            ['choice_text' => 'Non, car les dettes fournisseurs relèvent du cash flow de financement et non du cash flow opérationnel', 'is_correct' => false],
                            ['choice_text' => 'Oui, car la dette fournisseur est un produit qui augmente le résultat de la période', 'is_correct' => false],
                            ['choice_text' => 'Oui, car l\'entreprise conserve temporairement le cash correspondant aux achats non encore payés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le cash disponible en début de mois est de 50 000 € et le flux net du mois est de -12 000 €. Quel solde de fin de mois obtient-on ?',
                        'explanation' => 'Le solde de fin de mois est égal au solde initial plus le flux net : 50 000 - 12 000 = 38 000 €.',
                        'choices' => [
                            ['choice_text' => '12 000 €', 'is_correct' => false],
                            ['choice_text' => '38 000 €', 'is_correct' => true],
                            ['choice_text' => '50 000 €', 'is_correct' => false],
                            ['choice_text' => '62 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une prévision montre une trésorerie négative pendant trois mois avant une rentrée de cash importante. Quelle analyse est prioritaire ?',
                        'explanation' => 'Une entreprise peut être rentable tout en ayant un trou de trésorerie. Le calendrier des entrées et sorties est donc essentiel pour identifier un besoin de financement temporaire.',
                        'choices' => [
                            ['choice_text' => 'Réviser à la hausse le chiffre d\'affaires pour combler les mois négatifs du tableau', 'is_correct' => false],
                            ['choice_text' => 'Conclure que l\'entreprise est insolvable, puisque la trésorerie est négative trois mois', 'is_correct' => false],
                            ['choice_text' => 'Reporter les investissements de la période sans analyser le calendrier de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Vérifier le besoin de financement à court terme et le calendrier des encaissements', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des stocks de 25 000 € et une hausse des dettes fournisseurs de 10 000 € sont les seuls changements du besoin en fonds de roulement. Quel effet net simplifié sur le cash ?',
                        'explanation' => 'Le stock consomme 25 000 € de cash tandis que la hausse des dettes fournisseurs en libère 10 000 €. L\'effet net est donc -15 000 €.',
                        'choices' => [
                            ['choice_text' => 'Une génération de 35 000 €', 'is_correct' => false],
                            ['choice_text' => 'Une génération de 15 000 €', 'is_correct' => false],
                            ['choice_text' => 'Une consommation de 15 000 €', 'is_correct' => true],
                            ['choice_text' => 'Une consommation de 35 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un bon modèle de trésorerie doit-il souvent être plus détaillé qu\'un simple total annuel ?',
                        'explanation' => 'Deux entreprises ayant le même cash annuel peuvent avoir des besoins de financement très différents selon le calendrier. La vue mensuelle ou hebdomadaire est utile pour gérer la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Parce que le moment des encaissements et des paiements peut créer des tensions de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Parce que le total annuel ne tient pas compte des amortissements de la période', 'is_correct' => false],
                            ['choice_text' => 'Parce que les taux d\'intérêt de la dette sont recalculés chaque mois dans un modèle', 'is_correct' => false],
                            ['choice_text' => 'Parce que les normes comptables imposent une présentation mensuelle de la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 80 000 € de cash, verse 30 000 € de dividendes et réalise un flux net opérationnel positif de 20 000 €. Sans autre mouvement, combien reste-t-il ?',
                        'explanation' => '80 000 + 20 000 - 30 000 = 70 000 €. Le versement de dividendes est une sortie de trésorerie de financement dans une présentation simplifiée.',
                        'choices' => [
                            ['choice_text' => '50 000 €', 'is_correct' => false],
                            ['choice_text' => '70 000 €', 'is_correct' => true],
                            ['choice_text' => '90 000 €', 'is_correct' => false],
                            ['choice_text' => '130 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle erreur de modélisation est particulièrement dangereuse dans un tableau de cash ?',
                        'explanation' => 'Une inversion de signe peut donner l\'impression qu\'un investissement ou un remboursement génère du cash. C\'est une erreur fondamentale à détecter lors du contrôle du modèle.',
                        'choices' => [
                            ['choice_text' => 'Transformer par erreur une sortie de cash en entrée de cash à cause d\'un signe incorrect', 'is_correct' => true],
                            ['choice_text' => 'Arrondir les montants au millier d\'euros dans un tableau de synthèse destiné à la direction', 'is_correct' => false],
                            ['choice_text' => 'Présenter les flux de cash sur plusieurs années au lieu d\'une seule période de référence', 'is_correct' => false],
                            ['choice_text' => 'Regrouper plusieurs flux de même nature dans une ligne de synthèse du tableau de cash', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Scénarios et sensibilités',
                'description' => 'Premiers réflexes pour tester un modèle avec des hypothèses hautes, centrales et basses.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un analyste construit-il un scénario prudent autour d\'une prévision centrale ?',
                        'explanation' => 'L\'analyse par scénarios montre la sensibilité de l\'entreprise à des conditions différentes. Elle aide à mesurer les conséquences plutôt qu\'à prétendre prédire un futur unique.',
                        'choices' => [
                            ['choice_text' => 'Pour prévoir avec précision le résultat qui sera effectivement atteint l\'an prochain', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la prévision centrale par une hypothèse plus basse et définitive', 'is_correct' => false],
                            ['choice_text' => 'Pour voir comment les résultats changent si certaines hypothèses se détériorent', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le nombre d\'hypothèses à documenter dans le modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise envisage une marge opérationnelle de 12 % dans le scénario central, 10 % dans un scénario prudent et 14 % dans un scénario favorable. Que cherche-t-elle à comprendre ?',
                        'explanation' => 'Les trois scénarios permettent de mesurer l\'impact d\'une hypothèse de rentabilité plus faible ou plus forte. Cela donne une vision plus large qu\'un seul chiffre.',
                        'choices' => [
                            ['choice_text' => 'La probabilité exacte que chaque scénario se réalise', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de marge historique moyen de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'L\'écart entre la marge comptable et la marge de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'L\'effet d\'une variation de marge sur les résultats', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une analyse de sensibilité simple, quelle variable est pertinente pour une entreprise très endettée et exposée à des taux variables ?',
                        'explanation' => 'Le coût de la dette variable dépend du niveau des taux. Tester cette hypothèse peut montrer à quel point le résultat ou le cash flow est sensible au financement.',
                        'choices' => [
                            ['choice_text' => 'Le taux d\'imposition', 'is_correct' => false],
                            ['choice_text' => 'Le prix de vente moyen', 'is_correct' => false],
                            ['choice_text' => 'Le délai de paiement clients', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'intérêt', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un scénario prudent réduit les ventes de 10 % mais laisse les coûts fixes inchangés. Quel effet est le plus logique ?',
                        'explanation' => 'Lorsque les coûts fixes restent stables, une baisse des ventes peut réduire l\'EBITDA et l\'EBIT plus que proportionnellement. C\'est un effet classique de levier opérationnel.',
                        'choices' => [
                            ['choice_text' => 'La rentabilité peut se dégrader peu, car les coûts fixes diminuent en proportion des ventes', 'is_correct' => false],
                            ['choice_text' => 'La marge brute en pourcentage s\'améliore, car les coûts fixes pèsent moins lourd dans le chiffre d\'affaires', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité peut se dégrader fortement, car les coûts fixes sont absorbés par moins de ventes', 'is_correct' => true],
                            ['choice_text' => 'Le résultat baisse exactement de 10 %, comme les ventes, quel que soit le niveau des coûts fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sensibilité du modèle à plusieurs hypothèses peut-elle être plus utile qu\'une simple prévision unique ?',
                        'explanation' => 'Les décisions financières sont sensibles aux hypothèses. Une analyse de scénarios ou de sensibilité permet donc d\'identifier les variables qui peuvent réellement changer la conclusion.',
                        'choices' => [
                            ['choice_text' => 'Elle montre l\'ampleur des résultats possibles selon les paramètres retenus', 'is_correct' => true],
                            ['choice_text' => 'Elle indique la probabilité exacte de chaque résultat sur la base des hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de choisir l\'hypothèse la plus favorable et d\'abandonner les autres', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace l\'analyse des états financiers par un indicateur de risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle indique qu\'une baisse de 1 point de marge fait disparaître presque tout le cash disponible. Que peut-on en déduire ?',
                        'explanation' => 'Une forte réaction du cash à un petit changement de marge indique une sensibilité élevée. Il peut alors être utile de surveiller de près les coûts et la tarification.',
                        'choices' => [
                            ['choice_text' => 'Le modèle contient une erreur de formule sur la ligne des ventes', 'is_correct' => false],
                            ['choice_text' => 'L\'entreprise dispose d\'une trésorerie solide face aux variations de marge', 'is_correct' => false],
                            ['choice_text' => 'Les coûts variables représentent une part négligeable de la structure de coûts', 'is_correct' => false],
                            ['choice_text' => 'La structure de l\'entreprise est très sensible à la rentabilité opérationnelle', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction entre scénario et sensibilité est la plus utile au niveau débutant ?',
                        'explanation' => 'Le scénario décrit un environnement complet, par exemple une croissance faible avec une marge plus basse. La sensibilité observe plutôt l\'effet de la variation d\'une hypothèse donnée.',
                        'choices' => [
                            ['choice_text' => 'Un scénario isole l\'effet d\'une variable, tandis qu\'une sensibilité modifie un ensemble d\'hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Un scénario porte sur le passé de l\'entreprise, tandis qu\'une sensibilité porte sur ses prévisions', 'is_correct' => false],
                            ['choice_text' => 'Un scénario modifie un ensemble d\'hypothèses cohérent, tandis qu\'une sensibilité isole souvent l\'effet d\'une variable', 'is_correct' => true],
                            ['choice_text' => 'Un scénario s\'applique au compte de résultat, tandis qu\'une sensibilité s\'applique au bilan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prépare trois hypothèses de chiffre d\'affaires mais conserve exactement la même structure de coûts dans les trois cas. Quel point doit être discuté ?',
                        'explanation' => 'Un changement de volume ou de prix peut entraîner des changements dans certains coûts variables. Un scénario crédible doit donc conserver des relations économiques cohérentes.',
                        'choices' => [
                            ['choice_text' => 'Certains coûts variables peuvent aussi évoluer avec les ventes', 'is_correct' => true],
                            ['choice_text' => 'Les coûts fixes devraient augmenter au même rythme que les ventes', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'impôt devrait changer avec le niveau des ventes', 'is_correct' => false],
                            ['choice_text' => 'Les dettes bancaires devraient suivre le niveau des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle, le scénario central prévoit 1 M€ d\'EBITDA et le scénario prudent 700 000 €. Quelle est la baisse relative du scénario prudent ?',
                        'explanation' => 'La baisse est de 300 000 € sur une base de 1 M€, soit 300 000 ÷ 1 000 000 = 30 %.',
                        'choices' => [
                            ['choice_text' => '15 %', 'is_correct' => false],
                            ['choice_text' => '23 %', 'is_correct' => false],
                            ['choice_text' => '30 %', 'is_correct' => true],
                            ['choice_text' => '70 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une sensibilité montre que la valeur du projet varie peu quand les ventes changent, mais beaucoup quand le taux d\'actualisation change. Quelle conclusion prudente est possible ?',
                        'explanation' => 'La sensibilité indique quelles hypothèses ont le plus d\'influence sur le résultat final. Ici, la valorisation réagit davantage au taux d\'actualisation qu\'au changement de ventes testé.',
                        'choices' => [
                            ['choice_text' => 'Le résultat de valorisation est insensible aux hypothèses, y compris au taux d\'actualisation', 'is_correct' => false],
                            ['choice_text' => 'Le résultat de valorisation est particulièrement sensible au taux d\'actualisation', 'is_correct' => true],
                            ['choice_text' => 'Le taux d\'actualisation retenu est trop élevé et doit être abaissé', 'is_correct' => false],
                            ['choice_text' => 'Le modèle sous-estime l\'importance des ventes et doit être reconstruit', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Contrôle qualité et erreurs de modèle',
                'description' => 'Réflexes pratiques pour détecter les erreurs de formule, de signe, de période et de liaison.',
                'questions' => [
                    [
                        'question' => 'Un modèle présente une valeur négative des créances clients sans situation exceptionnelle prévue. Que faut-il faire en premier ?',
                        'explanation' => 'Une créance négative est généralement un signal de problème de construction si aucun scénario particulier ne la justifie. Le contrôle des signes et des liaisons est prioritaire.',
                        'choices' => [
                            ['choice_text' => 'Interpréter ce montant comme des avances reçues de clients, sans autre contrôle', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la valeur négative par zéro pour que le bilan reste lisible', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le délai de paiement des clients jusqu\'à obtenir une valeur positive', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les formules et les signes avant d\'interpréter le résultat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une formule de marge utilise les ventes de l\'année N-1 au dénominateur alors qu\'elle devrait utiliser les ventes de N. Quelle conséquence est possible ?',
                        'explanation' => 'Une formule peut être parfaitement valide sur le plan informatique tout en étant incorrecte économiquement. L\'audit doit donc vérifier la logique, pas seulement la syntaxe.',
                        'choices' => [
                            ['choice_text' => 'La marge affichée peut être fausse même si la formule fonctionne techniquement', 'is_correct' => true],
                            ['choice_text' => 'La formule renvoie une erreur et empêche le calcul des autres cellules du modèle', 'is_correct' => false],
                            ['choice_text' => 'La marge reste correcte, car les ventes de N-1 sont plus fiables que celles de N', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d\'affaires de l\'année N est modifié, car la formule le recalcule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle vérification simple est utile après avoir construit un modèle à trois états financiers ?',
                        'explanation' => 'L\'équilibre du bilan et la cohérence du cash flow sont deux contrôles structurants. Ils peuvent révéler des erreurs de liaison entre les différents états.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que le bilan s\'équilibre et que les flux de cash sont cohérents', 'is_correct' => true],
                            ['choice_text' => 'Vérifier que le résultat net est égal à la trésorerie de fin de période', 'is_correct' => false],
                            ['choice_text' => 'Vérifier que le chiffre d\'affaires de chaque année dépasse celui de l\'année précédente', 'is_correct' => false],
                            ['choice_text' => 'Vérifier que les amortissements sont égaux aux investissements de chaque période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une croissance de 5 % est saisie comme 5 au lieu de 0,05 dans une formule multiplicative. Quel problème peut en résulter ?',
                        'explanation' => 'Dans un calcul de croissance, 5 % correspond à 0,05. Une saisie de 5 peut donc multiplier les montants de façon totalement disproportionnée selon la formule utilisée.',
                        'choices' => [
                            ['choice_text' => 'Le modèle peut appliquer une croissance beaucoup trop faible', 'is_correct' => false],
                            ['choice_text' => 'Le modèle peut afficher une croissance de 5 % sans effet sur les montants', 'is_correct' => false],
                            ['choice_text' => 'Le modèle peut appliquer une croissance beaucoup trop élevée', 'is_correct' => true],
                            ['choice_text' => 'Le modèle peut appliquer un taux négatif et réduire les montants projetés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une cellule de résultat dépend indirectement d\'elle-même à travers plusieurs lignes. Quel risque cela évoque-t-il ?',
                        'explanation' => 'Une référence circulaire apparaît lorsqu\'une formule revient à dépendre d\'elle-même. Elle peut bloquer ou fausser le calcul du modèle et doit être examinée.',
                        'choices' => [
                            ['choice_text' => 'Une erreur de signe répétée', 'is_correct' => false],
                            ['choice_text' => 'Une liaison externe rompue', 'is_correct' => false],
                            ['choice_text' => 'Une erreur d\'arrondi cumulée', 'is_correct' => false],
                            ['choice_text' => 'Une référence circulaire', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lors d\'un audit, deux années consécutives montrent exactement le même chiffre d\'affaires alors que la croissance est censée être de 6 %. Quelle vérification est pertinente ?',
                        'explanation' => 'Si la croissance prévue n\'apparaît pas dans les résultats, la formule peut pointer vers la mauvaise cellule ou l\'hypothèse peut ne pas être reliée au calcul.',
                        'choices' => [
                            ['choice_text' => 'Vérifier si le taux d\'imposition est appliqué à la bonne année et au bon résultat', 'is_correct' => false],
                            ['choice_text' => 'Vérifier si la formule de projection référence la bonne année et la bonne hypothèse', 'is_correct' => true],
                            ['choice_text' => 'Saisir manuellement le chiffre d\'affaires de la deuxième année pour retrouver 6 % de croissance', 'is_correct' => false],
                            ['choice_text' => 'Vérifier si la croissance de 6 % est cohérente avec la trésorerie de l\'année précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe améliore la traçabilité d\'une hypothèse importante ?',
                        'explanation' => 'Une hypothèse utile doit être compréhensible et justifiable. Cette traçabilité facilite la revue par un collègue ou un responsable financier.',
                        'choices' => [
                            ['choice_text' => 'Conserver une source ou une justification claire de la valeur utilisée', 'is_correct' => true],
                            ['choice_text' => 'Arrondir la valeur à l\'unité supérieure pour simplifier la lecture du modèle', 'is_correct' => false],
                            ['choice_text' => 'Saisir la valeur directement dans chaque formule qui l\'utilise', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la valeur par la moyenne du secteur sans en conserver la trace', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une formule donne 25 000 € alors que le même calcul fait manuellement donne 250 000 €. Quelle première piste est raisonnable ?',
                        'explanation' => 'Un facteur 10 peut venir d\'une unité mal comprise, d\'un taux mal converti ou d\'une référence erronée. Il faut identifier la cause avant de corriger la valeur.',
                        'choices' => [
                            ['choice_text' => 'Corriger le résultat en ajoutant un zéro pour retrouver le montant manuel', 'is_correct' => false],
                            ['choice_text' => 'Retenir le résultat du modèle, car une formule est plus fiable qu\'un calcul manuel', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les unités, le facteur de multiplication et les cellules référencées', 'is_correct' => true],
                            ['choice_text' => 'Recalculer le montant à la main sans contrôler les cellules du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un modèle avec des hypothèses extrêmes peut-il être utile ?',
                        'explanation' => 'Un test de stress simple peut montrer qu\'une formule produit des résultats aberrants lorsque l\'hypothèse change fortement. C\'est une manière utile de détecter des fragilités.',
                        'choices' => [
                            ['choice_text' => 'Cela permet de prévoir la valeur extrême que l\'entreprise atteindra réellement', 'is_correct' => false],
                            ['choice_text' => 'Cela permet de fixer l\'hypothèse centrale au niveau le plus probable', 'is_correct' => false],
                            ['choice_text' => 'Cela dispense de documenter les hypothèses utilisées dans le scénario central', 'is_correct' => false],
                            ['choice_text' => 'Cela peut révéler des formules fragiles ou des comportements inattendus', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un modèle contient de nombreuses cellules avec des valeurs fixes sans indication de leur origine. Quelle faiblesse cela crée-t-il surtout ?',
                        'explanation' => 'Des valeurs fixes non documentées rendent le modèle opaque. Même si elles sont exactes aujourd\'hui, leur origine et leur logique deviennent difficiles à contrôler.',
                        'choices' => [
                            ['choice_text' => 'Une erreur de calcul dans le bilan, car les valeurs fixes ne peuvent pas être additionnées', 'is_correct' => false],
                            ['choice_text' => 'Une faible transparence et une difficulté à auditer ou actualiser les hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Une impossibilité de calculer le résultat net, car les cellules fixes sont verrouillées', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure lisibilité du modèle, car les valeurs sont visibles directement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Modélisation par moteurs opérationnels',
                'description' => 'Traduire les activités réelles d\'une entreprise en variables financières simples et logiques.',
                'questions' => [
                    [
                        'question' => 'Un hôtel estime ses revenus à partir du nombre de chambres disponibles, du taux d\'occupation et du prix moyen. Pourquoi cette méthode est-elle intéressante ?',
                        'explanation' => 'Le chiffre d\'affaires est mieux expliqué lorsqu\'il est relié aux variables qui le déterminent. Cette logique rend le modèle plus transparent et plus facile à remettre en question.',
                        'choices' => [
                            ['choice_text' => 'Elle donne une prévision exacte dès que le taux d\'occupation est connu', 'is_correct' => false],
                            ['choice_text' => 'Elle relie la prévision financière aux vrais moteurs de l\'activité', 'is_correct' => true],
                            ['choice_text' => 'Elle dispense de prévoir les coûts d\'exploitation de l\'hôtel', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les hypothèses de prix par des données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une usine produit 10 000 unités avec 5 heures de main-d\'œuvre pour 100 unités. Combien d\'heures sont nécessaires pour 10 000 unités ?',
                        'explanation' => '10 000 unités représentent 100 groupes de 100 unités. À 5 heures par groupe, il faut 100 × 5 = 500 heures.',
                        'choices' => [
                            ['choice_text' => '50 heures', 'is_correct' => false],
                            ['choice_text' => '100 heures', 'is_correct' => false],
                            ['choice_text' => '500 heures', 'is_correct' => true],
                            ['choice_text' => '5 000 heures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société de services facture en moyenne 600 € par mission et prévoit 900 missions. Quel revenu prévisionnel simple en découle ?',
                        'explanation' => '900 × 600 € = 540 000 €. Le modèle peut ensuite répartir cette activité par mois ou par type de mission si nécessaire.',
                        'choices' => [
                            ['choice_text' => '540 €', 'is_correct' => false],
                            ['choice_text' => '300 000 €', 'is_correct' => false],
                            ['choice_text' => '540 000 €', 'is_correct' => true],
                            ['choice_text' => '1 500 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des moteurs comme le nombre de clients ou le prix moyen peut-il être préférable à une croissance globale arbitraire ?',
                        'explanation' => 'Un modèle fondé sur des moteurs opérationnels permet de relier les chiffres aux réalités opérationnelles. Il est alors plus facile de discuter des hypothèses avec les équipes métier.',
                        'choices' => [
                            ['choice_text' => 'On peut prévoir les revenus sans formuler d\'hypothèse sur l\'activité', 'is_correct' => false],
                            ['choice_text' => 'On peut supprimer l\'incertitude liée à la demande des clients', 'is_correct' => false],
                            ['choice_text' => 'On peut déduire les revenus à partir des coûts de production', 'is_correct' => false],
                            ['choice_text' => 'On peut expliquer ce qui fait réellement évoluer les revenus', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise compte 200 clients au début du mois, en gagne 30 et en perd 10. Combien de clients peut-elle prévoir en fin de mois ?',
                        'explanation' => 'Clients fin de mois = 200 + 30 - 10 = 220. Ce type de calcul permet de faire évoluer un modèle à partir d\'un stock et de flux simples.',
                        'choices' => [
                            ['choice_text' => '190', 'is_correct' => false],
                            ['choice_text' => '210', 'is_correct' => false],
                            ['choice_text' => '220', 'is_correct' => true],
                            ['choice_text' => '240', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un abonnement mensuel coûte 40 € et une entreprise prévoit 1 500 abonnés actifs pendant le mois. Quel revenu mensuel simple peut être modélisé ?',
                        'explanation' => '1 500 × 40 € = 60 000 €. Le modèle peut ensuite intégrer l\'attrition (churn), les nouveaux clients et la saisonnalité si ces facteurs sont importants.',
                        'choices' => [
                            ['choice_text' => '15 000 €', 'is_correct' => false],
                            ['choice_text' => '37 500 €', 'is_correct' => false],
                            ['choice_text' => '60 000 €', 'is_correct' => true],
                            ['choice_text' => '600 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle prédit les revenus d\'un restaurant uniquement en appliquant +5 % au revenu de l\'année précédente. Quel élément opérationnel pourrait améliorer la prévision ?',
                        'explanation' => 'Pour un restaurant, le nombre de clients servis et le panier moyen expliquent directement le chiffre d\'affaires. Ce sont des moteurs opérationnels naturels.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de couverts et le ticket moyen', 'is_correct' => true],
                            ['choice_text' => 'Le coût des matières premières et le salaire moyen', 'is_correct' => false],
                            ['choice_text' => 'La surface de la salle et le loyer annuel', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de stock et le délai fournisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société de livraison prévoit 100 000 commandes et un coût moyen de 4 € par commande. Quel coût variable simplifié obtient-on ?',
                        'explanation' => '100 000 × 4 € = 400 000 €. Une telle hypothèse permet de faire varier automatiquement les coûts avec le volume de commandes.',
                        'choices' => [
                            ['choice_text' => '40 000 €', 'is_correct' => false],
                            ['choice_text' => '104 000 €', 'is_correct' => false],
                            ['choice_text' => '250 000 €', 'is_correct' => false],
                            ['choice_text' => '400 000 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un modèle de SaaS prévoit 1 000 abonnés au début de l\'année, 200 nouveaux abonnés et un taux d\'attrition (churn) de 10 % appliqué au stock initial uniquement. Quel nombre de clients fin d\'année obtient-on ?',
                        'explanation' => 'Le churn sur le stock initial représente 100 clients. Le nombre final est donc 1 000 + 200 - 100 = 1 100 clients selon l\'hypothèse donnée.',
                        'choices' => [
                            ['choice_text' => '900', 'is_correct' => false],
                            ['choice_text' => '1 010', 'is_correct' => false],
                            ['choice_text' => '1 100', 'is_correct' => true],
                            ['choice_text' => '1 200', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présente un modèle construit à partir de moteurs opérationnels lors d\'une réunion avec les responsables métier ?',
                        'explanation' => 'Les équipes opérationnelles connaissent les volumes, tarifs, clients ou capacités. Un modèle par moteurs opérationnels facilite donc le dialogue entre finance et opérationnels.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent valider le résultat net sans passer par le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Ils peuvent discuter des hypothèses qu\'ils contrôlent réellement', 'is_correct' => true],
                            ['choice_text' => 'Ils peuvent fixer le taux d\'imposition et le coût de la dette', 'is_correct' => false],
                            ['choice_text' => 'Ils peuvent se passer d\'un suivi des écarts entre budget et réalisé', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Intégration simple du modèle à trois états',
                'description' => 'Relier compte de résultat, bilan et cash flow dans une architecture cohérente.',
                'questions' => [
                    [
                        'question' => 'Dans un modèle à trois états, où retrouve-t-on généralement le résultat net à la fin d\'une période ?',
                        'explanation' => 'Le résultat net est le point de départ du cash flow indirect et affecte les capitaux propres selon les mouvements retenus, notamment via le résultat conservé.',
                        'choices' => [
                            ['choice_text' => 'Dans le compte de résultat et, via les variations appropriées, dans les capitaux propres et le cash flow', 'is_correct' => true],
                            ['choice_text' => 'Dans le compte de résultat et, via les variations appropriées, dans les dettes financières et les stocks', 'is_correct' => false],
                            ['choice_text' => 'Dans le bilan et le tableau des immobilisations, mais pas dans le tableau de flux de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Dans le cash flow d\'investissement et, via les amortissements, dans les créances clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise enregistre 50 000 € de bénéfice et ne verse aucun dividende. Toutes choses égales par ailleurs, quel effet simple peut-on attendre sur les capitaux propres ?',
                        'explanation' => 'En l\'absence de dividendes ou d\'autres ajustements, le bénéfice conservé augmente les capitaux propres de 50 000 €.',
                        'choices' => [
                            ['choice_text' => 'Une hausse de 50 000 €', 'is_correct' => true],
                            ['choice_text' => 'Une baisse de 50 000 €', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de 100 000 €', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de 5 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse de 40 000 € des immobilisations a été financée intégralement par une nouvelle dette. Quel couple de mouvements est cohérent dans un modèle intégré ?',
                        'explanation' => 'L\'acquisition augmente l\'actif immobilisé et le financement augmente la dette. Ce lien doit être visible dans le modèle.',
                        'choices' => [
                            ['choice_text' => 'Actifs +40 000 € et dette -40 000 €', 'is_correct' => false],
                            ['choice_text' => 'Actifs -40 000 € et dette +40 000 €', 'is_correct' => false],
                            ['choice_text' => 'Actifs inchangés et dette inchangée', 'is_correct' => false],
                            ['choice_text' => 'Actifs +40 000 € et dette +40 000 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit un emprunt de 100 000 € en fin de mois. Quel effet direct est attendu sur le cash et la dette ?',
                        'explanation' => 'L\'emprunt apporte du cash à l\'entreprise tout en créant une obligation de remboursement. Il ne s\'agit pas d\'un revenu opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Le cash augmente de 100 000 € et les capitaux propres augmentent de 100 000 €', 'is_correct' => false],
                            ['choice_text' => 'Le cash augmente de 100 000 € et la dette augmente de 100 000 €', 'is_correct' => true],
                            ['choice_text' => 'Le cash augmente de 100 000 € et le chiffre d\'affaires augmente de 100 000 €', 'is_correct' => false],
                            ['choice_text' => 'Le cash reste stable car la dette augmente de 100 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle intégré doit-il éviter de calculer manuellement le même poste à plusieurs endroits sans liaison ?',
                        'explanation' => 'Un même chiffre calculé à plusieurs endroits peut devenir incohérent après une modification. Les liaisons permettent de conserver une source de calcul identifiable.',
                        'choices' => [
                            ['choice_text' => 'Le risque d\'appliquer plusieurs fois le même taux d\'imposition augmente', 'is_correct' => false],
                            ['choice_text' => 'Le risque de supprimer par erreur les hypothèses de départ du modèle augmente', 'is_correct' => false],
                            ['choice_text' => 'Le risque de modifier la période de référence du modèle augmente', 'is_correct' => false],
                            ['choice_text' => 'Le risque de divergence entre les différentes versions du même chiffre augmente', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le modèle affiche un cash final différent entre le bilan et le tableau de flux de trésorerie. Quel contrôle faut-il faire ?',
                        'explanation' => 'Le cash final calculé par le cash flow doit correspondre au poste de trésorerie du bilan. Une différence indique généralement une erreur de liaison ou de calcul.',
                        'choices' => [
                            ['choice_text' => 'Ajuster le cash du bilan pour qu\'il corresponde au tableau de flux', 'is_correct' => false],
                            ['choice_text' => 'Vérifier la liaison du cash de fin de période entre les deux états', 'is_correct' => true],
                            ['choice_text' => 'Comparer le cash de fin de période avec le chiffre d\'affaires de l\'année', 'is_correct' => false],
                            ['choice_text' => 'Recalculer le taux d\'imposition appliqué au résultat avant impôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse de 15 000 € des créances clients apparaît sur le bilan. Dans le cash flow indirect, quel ajustement simplifié est cohérent ?',
                        'explanation' => 'La hausse des créances représente du chiffre d\'affaires non encore encaissé. Elle réduit donc le cash flow opérationnel de 15 000 € dans une présentation indirecte.',
                        'choices' => [
                            ['choice_text' => '-15 000 €', 'is_correct' => true],
                            ['choice_text' => '0 €', 'is_correct' => false],
                            ['choice_text' => '+15 000 €', 'is_correct' => false],
                            ['choice_text' => '+30 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise verse 20 000 € de dividendes. Dans une présentation simplifiée, quel effet peut-on attendre sur les capitaux propres et le cash ?',
                        'explanation' => 'Le versement de dividendes réduit la trésorerie et diminue les capitaux propres via une distribution aux actionnaires.',
                        'choices' => [
                            ['choice_text' => 'Les deux augmentent de 20 000 €', 'is_correct' => false],
                            ['choice_text' => 'Les deux diminuent de 20 000 €', 'is_correct' => true],
                            ['choice_text' => 'Le cash baisse mais les capitaux propres augmentent', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres baissent mais le cash augmente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'intégration à trois états est-elle particulièrement utile lorsqu\'on teste plusieurs scénarios ?',
                        'explanation' => 'Une hypothèse de ventes ou de coûts peut modifier le résultat, les créances, la trésorerie et les besoins de financement. L\'intégration permet de suivre ces effets en chaîne.',
                        'choices' => [
                            ['choice_text' => 'Un changement d\'hypothèse peut se répercuter sur résultat, bilan et cash', 'is_correct' => true],
                            ['choice_text' => 'Un changement d\'hypothèse reste limité au compte de résultat de chaque scénario', 'is_correct' => false],
                            ['choice_text' => 'Chaque scénario nécessite un bilan construit séparément, sans lien avec le cash flow', 'is_correct' => false],
                            ['choice_text' => 'Les écarts entre scénarios s\'annulent entre le bilan et le compte de résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle prévoit une forte croissance et affiche à la fois une hausse importante des créances, du stock et de la dette court terme. Quelle lecture est plausible ?',
                        'explanation' => 'Une forte croissance peut consommer du cash lorsqu\'elle exige plus de stocks et de créances. La dette court terme peut alors servir à financer temporairement ce besoin.',
                        'choices' => [
                            ['choice_text' => 'La croissance crée un excédent de trésorerie qui rend la dette inutile', 'is_correct' => false],
                            ['choice_text' => 'La croissance améliore la liquidité, car la hausse des stocks est un actif', 'is_correct' => false],
                            ['choice_text' => 'La croissance signale une erreur de modèle, car créances et dettes augmentent ensemble', 'is_correct' => false],
                            ['choice_text' => 'La croissance crée un besoin de financement du cycle d\'exploitation', 'is_correct' => true],
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
