<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialAccountingIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-accounting')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité financière — Écritures comptables intermédiaires',
                'description' => 'Application des principes de partie double aux opérations courantes.',
                'questions' => [
                    [
                        'question' => 'Une entreprise achète des marchandises à crédit pour 8 000 €. Quel effet comptable principal doit être constaté ?',
                        'explanation' => 'L’achat augmente les éléments liés aux marchandises et crée une dette envers le fournisseur.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation des achats et une dette fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Une diminution des achats et une créance client', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des capitaux propres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une diminution des passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise paie immédiatement une facture fournisseur de 3 500 €. Que se produit-il principalement ?',
                        'explanation' => 'Le règlement réduit la dette fournisseur et la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'La dette fournisseur et la trésorerie diminuent', 'is_correct' => true],
                            ['choice_text' => 'La dette fournisseur augmente et la trésorerie augmente', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires augmente', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres augmentent automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise une vente à crédit de 12 000 €. Quel effet principal doit être enregistré ?',
                        'explanation' => 'Une vente à crédit crée une créance client et un produit de vente.',
                        'choices' => [
                            ['choice_text' => 'Une créance client et un produit de vente', 'is_correct' => true],
                            ['choice_text' => 'Une dette fournisseur et une charge', 'is_correct' => false],
                            ['choice_text' => 'Une diminution des actifs', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation immédiate de la dette bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client règle une créance de 5 000 €. Quel est l’effet sur la situation financière ?',
                        'explanation' => 'La créance diminue et la trésorerie augmente. Le règlement ne crée pas un nouveau produit.',
                        'choices' => [
                            ['choice_text' => 'La trésorerie augmente et la créance diminue', 'is_correct' => true],
                            ['choice_text' => 'La trésorerie diminue et la créance augmente', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires augmente de nouveau', 'is_correct' => false],
                            ['choice_text' => 'Une nouvelle dette apparaît', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le règlement d’une créance client ne constitue-t-il généralement pas un nouveau produit ?',
                        'explanation' => 'Le produit a déjà été constaté lors de la reconnaissance de la vente ; le règlement transforme la créance en trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce que le produit a déjà été constaté lors de la vente', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un règlement client est toujours une charge', 'is_correct' => false],
                            ['choice_text' => 'Parce que les encaissements ne sont jamais comptabilisés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une créance n’a aucune valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit un emprunt bancaire de 50 000 €. Quel est l’effet principal ?',
                        'explanation' => 'L’encaissement augmente la trésorerie mais crée simultanément une obligation financière.',
                        'choices' => [
                            ['choice_text' => 'La trésorerie et la dette bancaire augmentent', 'is_correct' => true],
                            ['choice_text' => 'La trésorerie et la dette bancaire diminuent', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires augmente', 'is_correct' => false],
                            ['choice_text' => 'Une charge immédiate de 50 000 € est créée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise verse 2 000 € de salaires. Quel traitement général est approprié ?',
                        'explanation' => 'Les salaires constituent une charge et leur règlement réduit généralement la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Constater une charge de personnel et une diminution de la trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Constater un produit et augmenter les créances', 'is_correct' => false],
                            ['choice_text' => 'Augmenter les immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi chaque écriture comptable doit-elle rester équilibrée ?',
                        'explanation' => 'La comptabilité en partie double impose l’égalité entre les montants débités et crédités.',
                        'choices' => [
                            ['choice_text' => 'Pour préserver l’équilibre de la partie double', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute dette', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement les actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise paie 10 000 € pour une machine qui sera utilisée plusieurs années. Pourquoi ne doit-elle pas nécessairement traiter toute la somme comme une charge immédiate ?',
                        'explanation' => 'Une machine utilisée durablement constitue généralement une immobilisation et son coût est réparti selon les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il s’agit généralement d’une immobilisation utilisée sur plusieurs périodes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une machine est toujours un produit', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un paiement important ne peut jamais être comptabilisé', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie ne doit jamais diminuer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la pièce justificative doit-elle être liée à l’écriture comptable ?',
                        'explanation' => 'Elle permet de justifier la réalité et le montant de l’opération enregistrée.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre de vérifier l’origine et la réalité de l’opération', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le plan comptable', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles internes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Comptabilité d’engagement et rattachement',
                'description' => 'Comprenez le rattachement des produits et charges aux périodes concernées.',
                'questions' => [
                    [
                        'question' => 'Quel principe explique qu’une charge puisse être comptabilisée avant son paiement ?',
                        'explanation' => 'La comptabilité d’engagement rattache les opérations à la période à laquelle elles se rapportent.',
                        'choices' => [
                            ['choice_text' => 'Le principe de comptabilité d’engagement et de rattachement à la période', 'is_correct' => true],
                            ['choice_text' => 'Le principe de trésorerie exclusive', 'is_correct' => false],
                            ['choice_text' => 'Le principe de paiement immédiat', 'is_correct' => false],
                            ['choice_text' => 'Le principe de valeur boursière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise consomme un service en décembre mais le paie en janvier. Quelle logique comptable doit être considérée ?',
                        'explanation' => 'La charge doit être rattachée à la période à laquelle le service a été consommé, selon les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'La charge doit être rattachée à la période de consommation du service', 'is_correct' => true],
                            ['choice_text' => 'La charge doit toujours être comptabilisée uniquement en janvier', 'is_correct' => false],
                            ['choice_text' => 'La charge devient automatiquement une immobilisation', 'is_correct' => false],
                            ['choice_text' => 'La charge ne doit jamais être comptabilisée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rattachement des charges améliore-t-il l’analyse du résultat ?',
                        'explanation' => 'Il permet de rapprocher les charges des périodes auxquelles elles se rapportent.',
                        'choices' => [
                            ['choice_text' => 'Il permet de mesurer plus correctement la performance de chaque période', 'is_correct' => true],
                            ['choice_text' => 'Il garantit que chaque période aura un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toutes les charges futures', 'is_correct' => false],
                            ['choice_text' => 'Il augmente automatiquement les revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit une facture en février concernant un service consommé en janvier. Quel point doit être considéré ?',
                        'explanation' => 'La charge peut concerner janvier même si la facture est reçue plus tard.',
                        'choices' => [
                            ['choice_text' => 'La période réelle de consommation du service', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la date d’impression de la facture', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la date du paiement', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la date de clôture annuelle suivante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certains produits encaissés à l’avance ne doivent-ils pas être immédiatement considérés comme des produits de la période ?', 'explanation' => 'Une partie de la prestation peut concerner une période future.',
                        'choices' => [
                            ['choice_text' => 'Parce que la prestation correspondante peut concerner une période future', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un encaissement n’a jamais de valeur comptable', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les encaissements sont des passifs permanents', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un produit ne peut jamais être encaissé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’une écriture de régularisation à la clôture ?',
                        'explanation' => 'Elle permet d’ajuster les comptes afin de représenter correctement les opérations de la période.',
                        'choices' => [
                            ['choice_text' => 'Rattacher correctement les produits et charges à la période concernée', 'is_correct' => true],
                            ['choice_text' => 'Augmenter artificiellement le résultat', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les opérations futures', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les factures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une charge payée d’avance peut-elle nécessiter une régularisation ?',
                        'explanation' => 'Une partie du paiement peut concerner une période future et ne pas appartenir entièrement à la période actuelle.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une partie du montant peut concerner une période future', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un paiement est toujours une immobilisation', 'is_correct' => false],
                            ['choice_text' => 'Parce que les paiements ne sont jamais comptabilisés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une charge payée d’avance est toujours une dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la date de paiement seule ne suffit-elle pas toujours à déterminer la période comptable d’une charge ?', 'explanation' => 'La comptabilité d’engagement se concentre sur la période à laquelle la charge se rapporte.',
                        'choices' => [
                            ['choice_text' => 'Parce que la charge doit être rattachée à la période à laquelle elle se rapporte', 'is_correct' => true],
                            ['choice_text' => 'Parce que les paiements n’ont aucun intérêt', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les charges sont comptabilisées à la clôture suivante', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépenses sont toujours des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe si une entreprise reporte volontairement une charge de décembre à janvier sans justification comptable ?', 'explanation' => 'Le résultat de décembre pourrait être artificiellement augmenté.',
                        'choices' => [
                            ['choice_text' => 'Le résultat de décembre pourrait être artificiellement surévalué', 'is_correct' => true],
                            ['choice_text' => 'Le résultat de décembre serait toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Les actifs disparaîtraient automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres deviendraient nécessairement nuls', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comptabilité d’engagement est-elle particulièrement importante pour comparer plusieurs périodes ?', 'explanation' => 'Elle permet de rattacher les opérations à la période économique concernée plutôt qu’au seul mouvement de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Elle améliore la comparabilité économique des résultats entre périodes', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime les différences entre entreprises', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit la stabilité du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine les besoins de contrôle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Clients, fournisseurs et recouvrement',
                'description' => 'Analysez les créances, dettes, délais de paiement et risques de recouvrement.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une augmentation rapide des créances clients peut-elle être préoccupante ?', 'explanation' => 'Elle peut signaler des délais de recouvrement plus longs ou une croissance financée par le crédit client.',
                        'choices' => [
                            ['choice_text' => 'Elle peut immobiliser davantage de trésorerie dans les ventes non encaissées', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit automatiquement une meilleure liquidité', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit toujours le risque client', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme les clients en fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’indique généralement une hausse du délai moyen de paiement des clients ?', 'explanation' => 'Un délai plus élevé signifie généralement que l’entreprise met plus de temps à récupérer ses créances.',
                        'choices' => [
                            ['choice_text' => 'Un recouvrement plus lent des créances', 'is_correct' => true],
                            ['choice_text' => 'Un encaissement plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des créances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il effectuer un suivi par ancienneté des créances ?', 'explanation' => 'L’ancienneté permet d’identifier les créances présentant un risque croissant de non-recouvrement.',
                        'choices' => [
                            ['choice_text' => 'Pour repérer les créances anciennes présentant un risque de recouvrement plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire les charges de personnel', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les créances en immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle accorder une remise pour paiement anticipé ?', 'explanation' => 'L’entreprise peut accepter une réduction afin d’accélérer les encaissements.',
                        'choices' => [
                            ['choice_text' => 'Pour encourager un paiement plus rapide des clients', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le délai d’encaissement', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute créance', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer la vente en immobilisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un client devient durablement incapable de payer ?', 'explanation' => 'L’entreprise peut subir une perte ou devoir constater une dépréciation de sa créance.',
                        'choices' => [
                            ['choice_text' => 'Un risque de perte sur créance', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique du produit', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique de la dette bancaire', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dettes fournisseurs peuvent-elles constituer une source de financement d’exploitation ?', 'explanation' => 'Le délai accordé par les fournisseurs permet à l’entreprise de conserver sa trésorerie jusqu’au paiement.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entreprise peut utiliser temporairement les ressources avant de payer ses fournisseurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dettes fournisseurs deviennent des revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ne doivent jamais être réglées', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles augmentent toujours les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle comparer ses délais clients et fournisseurs ?', 'explanation' => 'L’écart entre les deux influence le besoin de financement du cycle d’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer l’effet des délais sur le besoin de financement de l’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que tous les clients paient avant les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les créances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente ses ventes mais accorde des délais clients très longs. Quel effet peut apparaître ?', 'explanation' => 'La croissance peut nécessiter davantage de financement pour les créances.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation du besoin de financement lié aux créances clients', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique du besoin en fonds de roulement', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des clients débiteurs', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation immédiate de la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi rapprocher les soldes clients avec les factures et règlements ?', 'explanation' => 'Le rapprochement permet de détecter les erreurs et de confirmer la réalité des créances.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier l’exactitude des créances et identifier les écarts', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les créances', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les règlements', 'is_correct' => false],
                            ['choice_text' => 'Pour convertir les créances en stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif doit poursuivre une bonne politique de crédit client ?', 'explanation' => 'Elle doit soutenir les ventes sans créer un niveau excessif de risque et d’immobilisation de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Équilibrer développement commercial, risque client et besoin de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Accorder toujours le délai maximal possible', 'is_correct' => false],
                            ['choice_text' => 'Refuser tout crédit client', 'is_correct' => false],
                            ['choice_text' => 'Maximiser les créances au bilan', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Immobilisations et amortissements',
                'description' => 'Appliquez les principes de comptabilisation et de suivi des immobilisations.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une machine achetée pour être utilisée plusieurs années est-elle généralement traitée comme une immobilisation ?', 'explanation' => 'Elle procure une utilité économique sur plusieurs périodes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle est destinée à fournir des avantages économiques sur plusieurs périodes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une machine est toujours une charge immédiate', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une immobilisation ne peut jamais perdre de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle représente une dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amortissement réduit-il généralement le résultat comptable ?', 'explanation' => 'L’amortissement constitue une charge qui répartit le coût d’une immobilisation dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il constitue une charge comptable répartissant le coût de l’immobilisation', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il constitue toujours une sortie de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il augmente les produits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il transforme l’actif en passif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une machine coûte 60 000 € et sa durée d’utilisation est estimée à 5 ans avec un amortissement linéaire simplifié sans valeur résiduelle. Quelle charge annuelle approximative est constatée ?', 'explanation' => '60 000 € ÷ 5 = 12 000 € par an.', 'choices' => [
                            ['choice_text' => '12 000 €', 'is_correct' => true],
                            ['choice_text' => '10 000 €', 'is_correct' => false],
                            ['choice_text' => '15 000 €', 'is_correct' => false],
                            ['choice_text' => '60 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet a généralement l’amortissement cumulé sur la valeur comptable d’une immobilisation ?', 'explanation' => 'L’amortissement cumulé réduit progressivement la valeur comptable nette de l’actif.',
                        'choices' => [
                            ['choice_text' => 'Il réduit progressivement la valeur comptable nette', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours la valeur comptable', 'is_correct' => false],
                            ['choice_text' => 'Il transforme l’actif en revenu', 'is_correct' => false],
                            ['choice_text' => 'Il augmente les dettes fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une durée d’utilisation mal estimée peut-elle influencer les états financiers ?', 'explanation' => 'Elle affecte le rythme auquel le coût de l’immobilisation est reconnu en charge.',
                        'choices' => [
                            ['choice_text' => 'Elle peut modifier le montant des charges d’amortissement comptabilisées au fil du temps', 'is_correct' => true],
                            ['choice_text' => 'Elle ne peut jamais avoir d’effet', 'is_correct' => false],
                            ['choice_text' => 'Elle modifie automatiquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il tenir un registre des immobilisations ?', 'explanation' => 'Il facilite le suivi des acquisitions, sorties, amortissements et caractéristiques des actifs.',
                        'choices' => [
                            ['choice_text' => 'Pour suivre les actifs, leurs acquisitions, amortissements et sorties', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer le bilan', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement leur valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sortie d’immobilisation doit-elle être correctement enregistrée ?', 'explanation' => 'L’actif et son amortissement cumulé doivent être retirés ou ajustés correctement et toute différence doit être déterminée selon les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de maintenir dans les comptes un actif qui n’est plus détenu', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Pour créer une nouvelle dette', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses d’entretien courant ne sont-elles pas toujours traitées comme des immobilisations ?', 'explanation' => 'Elles concernent généralement le maintien en état d’un actif sans créer un avantage économique durable distinct.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent correspondre à des coûts de fonctionnement et d’entretien courant', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les dépenses sont obligatoirement des immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entretien augmente toujours les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une immobilisation ne peut jamais être entretenue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les dépenses d’investissement et les charges d’exploitation ?', 'explanation' => 'Les deux catégories ont des effets comptables et économiques différents.',
                        'choices' => [
                            ['choice_text' => 'Parce que leur traitement comptable et leur impact dans le temps diffèrent', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours comptabilisées de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Parce que les charges d’exploitation sont toujours plus importantes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements ne sont jamais financés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle réexaminer ses immobilisations à la clôture ?', 'explanation' => 'Il faut vérifier leur existence, leur état et le traitement comptable approprié.',
                        'choices' => [
                            ['choice_text' => 'Pour confirmer leur existence et le traitement comptable applicable', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement leur valeur', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer toutes les immobilisations en charges', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer leur historique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Stocks et coûts des ventes',
                'description' => 'Analysez le traitement comptable des stocks et leur relation avec le coût des ventes.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les stocks sont-ils importants dans les états financiers ?', 'explanation' => 'Ils représentent des ressources destinées à être vendues ou consommées dans l’activité.',
                        'choices' => [
                            ['choice_text' => 'Ils représentent des ressources encore détenues par l’entreprise pour être vendues ou consommées', 'is_correct' => true],
                            ['choice_text' => 'Ils représentent toujours des charges déjà consommées', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent des dettes', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent uniquement de la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la variation des stocks peut-elle influencer le résultat ?', 'explanation' => 'Le niveau de stock final influence la partie des achats considérée comme consommée ou vendue selon la méthode comptable.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle influence la détermination du coût des biens consommés ou vendus', 'is_correct' => true],
                            ['choice_text' => 'Parce que les stocks sont toujours des produits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle n’a aucun rapport avec le coût des ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le stock final est toujours une dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un inventaire physique des stocks est-il important ?', 'explanation' => 'Il permet de vérifier l’existence et la quantité réelle des stocks comptabilisés.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier l’existence et les quantités réellement détenues', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les charges', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer les capitaux propres directement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stocks obsolètes doivent-ils être surveillés ?', 'explanation' => 'Ils peuvent ne plus être vendables à leur valeur comptable initiale.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent perdre de la valeur et nécessiter un ajustement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils augmentent toujours la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils deviennent automatiquement des créances', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne peuvent jamais perdre de valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût des marchandises vendues est-il important pour analyser une entreprise commerciale ?', 'explanation' => 'Il permet d’évaluer la marge générée par les ventes.',
                        'choices' => [
                            ['choice_text' => 'Il permet de déterminer la marge générée par les ventes de marchandises', 'is_correct' => true],
                            ['choice_text' => 'Il mesure uniquement la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Il représente toujours les immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Il remplace le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise achète des marchandises pour 40 000 € mais n’en vend qu’une partie pendant l’exercice. Peut-elle nécessairement comptabiliser la totalité comme coût des ventes ?', 'explanation' => 'La partie encore en stock représente une ressource non encore vendue.',
                        'choices' => [
                            ['choice_text' => 'Non, la partie encore en stock doit être distinguée de la partie vendue selon les règles applicables', 'is_correct' => true],
                            ['choice_text' => 'Oui, tous les achats deviennent toujours immédiatement un coût des ventes', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf si la trésorerie diminue', 'is_correct' => false],
                            ['choice_text' => 'Non, aucun achat n’est jamais une charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse excessive des stocks peut-elle affecter la trésorerie ?', 'explanation' => 'Les ressources financières sont immobilisées dans des biens qui ne sont pas encore vendus.',
                        'choices' => [
                            ['choice_text' => 'Elle peut immobiliser de la trésorerie dans des biens non encore vendus', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours immédiatement les encaissements', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement les dettes', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme les stocks en capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rotation des stocks est-elle utile ?', 'explanation' => 'Elle permet d’évaluer la vitesse à laquelle les stocks sont renouvelés ou vendus.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer la vitesse à laquelle les stocks sont renouvelés ou écoulés', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer directement les salaires', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer uniquement le niveau de dette', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le taux d’impôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle avoir un stock élevé mais une faible rentabilité ?', 'explanation' => 'Un stock important peut représenter des ressources immobilisées, des coûts de stockage ou des biens difficiles à vendre.',
                        'choices' => [
                            ['choice_text' => 'Le stock peut immobiliser du capital et générer des coûts sans suffisamment contribuer aux ventes', 'is_correct' => true],
                            ['choice_text' => 'Un stock élevé garantit toujours une rentabilité élevée', 'is_correct' => false],
                            ['choice_text' => 'Les stocks sont toujours des bénéfices', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité ne dépend jamais des stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel équilibre une bonne gestion des stocks doit-elle rechercher ?', 'explanation' => 'Il faut disposer de suffisamment de stocks pour servir la demande sans immobiliser inutilement trop de capital.',
                        'choices' => [
                            ['choice_text' => 'Éviter à la fois les ruptures et l’immobilisation excessive de ressources', 'is_correct' => true],
                            ['choice_text' => 'Maintenir toujours les stocks au niveau maximal', 'is_correct' => false],
                            ['choice_text' => 'Réduire systématiquement les stocks à zéro', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le niveau des stocks tant que les ventes augmentent', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Rapprochements et contrôle des comptes',
                'description' => 'Appliquez les contrôles de base nécessaires à la fiabilité des comptes.',
                'questions' => [
                    [
                        'question' => 'Pourquoi effectuer un rapprochement entre le grand livre et un registre auxiliaire ?', 'explanation' => 'Le rapprochement permet de vérifier la cohérence des soldes détaillés et du compte collectif.',
                        'choices' => [
                            ['choice_text' => 'Pour confirmer que les soldes détaillés correspondent au compte comptable concerné', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les soldes comptables', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les écritures anciennes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement un bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une balance comptable déséquilibrée doit-elle être investiguée ?', 'explanation' => 'Un déséquilibre peut signaler une erreur d’enregistrement ou de transfert.',
                        'choices' => [
                            ['choice_text' => 'Elle peut révéler une erreur dans les écritures ou les reports', 'is_correct' => true],
                            ['choice_text' => 'Elle prouve automatiquement une fraude', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une hausse des bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun impact sur les comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes de trésorerie sont-ils régulièrement rapprochés ?', 'explanation' => 'Ils présentent un risque élevé d’erreurs, omissions et opérations en circulation.',
                        'choices' => [
                            ['choice_text' => 'Pour confirmer que les soldes comptables correspondent aux informations disponibles', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les frais bancaires', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les dépôts', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les relevés bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une facture déjà enregistrée ne doit-elle pas être comptabilisée une seconde fois ?', 'explanation' => 'Une double comptabilisation fausserait les charges, dettes et éventuellement les résultats.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter une double comptabilisation qui fausserait les comptes', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les achats', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire les dettes', 'is_correct' => false],
                            ['choice_text' => 'Pour améliorer artificiellement la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes clients et fournisseurs doivent-ils être régulièrement lettrés ou rapprochés selon les pratiques de l’entreprise ?', 'explanation' => 'Cela permet d’associer factures et règlements et d’identifier les soldes ouverts.', 'choices' => [
                            ['choice_text' => 'Pour identifier les factures réglées, les montants ouverts et les écarts', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les créances', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les règlements', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les factures impayées automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écritures manuelles importantes doivent-elles être contrôlées ?', 'explanation' => 'Elles peuvent avoir un impact significatif et nécessitent une justification suffisante.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier leur justification, leur montant et leur impact sur les comptes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les écritures manuelles sont toujours incorrectes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute écriture automatique', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les dépenses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un contrôle de cohérence sur les comptes ?', 'explanation' => 'Il permet d’identifier les anomalies inhabituelles ou incompatibles avec les informations disponibles.',
                        'choices' => [
                            ['choice_text' => 'Détecter les anomalies et incohérences avant leur intégration dans les états financiers', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les dépenses augmentent', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les différences entre entreprises', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute analyse humaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une différence inhabituelle entre deux périodes doit-elle être analysée ?', 'explanation' => 'Une variation inhabituelle peut provenir d’un événement réel, d’une erreur ou d’une mauvaise classification.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si elle provient d’une évolution réelle, d’une erreur ou d’une anomalie', 'is_correct' => true],
                            ['choice_text' => 'Pour la corriger automatiquement sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une différence est toujours une erreur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les comptes doivent toujours être identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rapprochements constituent-ils un outil de contrôle interne ?', 'explanation' => 'Ils permettent de comparer des informations provenant de sources différentes et de détecter des anomalies.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de confronter des sources et de détecter des écarts', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent tous les contrôles internes', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute erreur future', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent automatiquement la rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur principe pour maintenir des comptes fiables ?', 'explanation' => 'La fiabilité repose sur des écritures justifiées, des rapprochements réguliers et des contrôles appropriés.',
                        'choices' => [
                            ['choice_text' => 'Combiner documentation, rapprochements, contrôles et analyse des anomalies', 'is_correct' => true],
                            ['choice_text' => 'Se fier uniquement aux écritures automatiques', 'is_correct' => false],
                            ['choice_text' => 'Éviter les contrôles pour gagner du temps', 'is_correct' => false],
                            ['choice_text' => 'Contrôler uniquement les comptes de revenus', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Analyse comptable et prise de décision',
                'description' => 'Utilisez l’information comptable pour interpréter la situation et soutenir les décisions.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une hausse du bénéfice doit-elle être analysée avec la trésorerie générée ?', 'explanation' => 'Le résultat comptable peut évoluer différemment des flux de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce que le bénéfice comptable ne reflète pas toujours immédiatement la trésorerie disponible', 'is_correct' => true],
                            ['choice_text' => 'Parce que le bénéfice est toujours égal au cash', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie ne concerne pas l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux de trésorerie sont toujours négatifs en cas de bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente ses ventes mais ses créances progressent beaucoup plus vite. Quelle interprétation est pertinente ?', 'explanation' => 'La croissance peut être accompagnée d’un allongement du recouvrement ou de conditions de crédit plus souples.',
                        'choices' => [
                            ['choice_text' => 'La croissance peut générer une pression supplémentaire sur la trésorerie', 'is_correct' => true],
                            ['choice_text' => 'La liquidité s’améliore automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les dettes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Les stocks deviennent nécessairement plus faibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte croissance des stocks peut-elle signaler un problème ?', 'explanation' => 'Elle peut refléter une demande plus faible, une mauvaise planification ou une immobilisation excessive.',
                        'choices' => [
                            ['choice_text' => 'Elle peut indiquer une accumulation de ressources qui ne se transforment pas assez vite en ventes', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une hausse de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie toujours une augmentation du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement les dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le montant des capitaux propres seul ne suffit-il pas à juger la solidité financière ?', 'explanation' => 'Il faut également examiner la qualité des actifs, les dettes, les flux et la rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Parce que la structure des actifs, des dettes et des flux doit aussi être analysée', 'is_correct' => true],
                            ['choice_text' => 'Parce que les capitaux propres n’ont aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs sont toujours sans valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes n’affectent jamais le risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la marge brute de plusieurs périodes ?', 'explanation' => 'Cela permet d’identifier des changements dans les coûts des biens ou les prix de vente.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter des changements dans les prix, les coûts ou le mix des ventes', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir une hausse du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les achats', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer directement la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise présente un résultat positif mais un flux de trésorerie opérationnel négatif. Quelle analyse complémentaire est particulièrement pertinente ?', 'explanation' => 'Il faut rechercher les variations de créances, stocks, dettes et autres éléments du cycle d’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Analyser les variations du fonds de roulement et les autres éléments expliquant les flux', 'is_correct' => true],
                            ['choice_text' => 'Conclure automatiquement à une excellente santé financière', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le flux de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle surveiller son niveau d’endettement avec ses résultats ?', 'explanation' => 'Les intérêts et remboursements peuvent peser sur les ressources générées par l’activité.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier si les résultats et les flux sont suffisants pour supporter les obligations financières', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette augmente toujours le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts ne doivent jamais être payés', 'is_correct' => false],
                            ['choice_text' => 'Parce que le résultat n’a aucun lien avec la capacité de financement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle présenter une bonne marge mais une faible trésorerie ?', 'explanation' => 'Une forte rentabilité peut être accompagnée de besoins importants en créances, stocks ou investissements.',
                        'choices' => [
                            ['choice_text' => 'La rentabilité peut être absorbée temporairement par le fonds de roulement ou les investissements', 'is_correct' => true],
                            ['choice_text' => 'Une bonne marge garantit toujours une trésorerie élevée', 'is_correct' => false],
                            ['choice_text' => 'La trésorerie dépend uniquement de la marge', 'is_correct' => false],
                            ['choice_text' => 'Les investissements n’utilisent jamais de ressources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le contexte sectoriel est-il important dans l’analyse des états financiers ?', 'explanation' => 'Les normes économiques, cycles, marges et besoins de financement varient selon les secteurs.',
                        'choices' => [
                            ['choice_text' => 'Parce que les structures de coûts, marges et besoins financiers varient selon les secteurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les entreprises doivent avoir les mêmes ratios', 'is_correct' => false],
                            ['choice_text' => 'Parce que le secteur ne change jamais les résultats', 'is_correct' => false],
                            ['choice_text' => 'Parce que les états financiers sont inutiles sans secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume la bonne utilisation de l’information comptable dans une décision ?', 'explanation' => 'Les données comptables doivent être interprétées avec leur contexte, leurs tendances et leurs implications financières.',
                        'choices' => [
                            ['choice_text' => 'Relier les chiffres à leur contexte, leurs tendances, leurs risques et leurs conséquences', 'is_correct' => true],
                            ['choice_text' => 'Choisir uniquement le chiffre le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les données non comptables', 'is_correct' => false],
                            ['choice_text' => 'Se limiter au bénéfice net', 'is_correct' => false],
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
                    'duration' => 22,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Intermediate',
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
                        'explanation' => $questionData['explanation'],
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