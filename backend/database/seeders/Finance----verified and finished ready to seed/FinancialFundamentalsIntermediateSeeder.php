<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialFundamentalsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux financiers — Analyse des flux de trésorerie',
                'description' => 'Évaluez la compréhension des flux de trésorerie et de leur relation avec la performance financière.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise rentable peut-elle néanmoins connaître une tension de trésorerie ?',
                        'explanation' => 'Le bénéfice comptable ne signifie pas que toutes les ventes ont déjà été encaissées.',
                        'choices' => [
                            ['choice_text' => 'Parce que certaines ventes peuvent être réalisées à crédit et ne pas encore être encaissées', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une entreprise rentable ne peut pas conserver de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices sont toujours versés immédiatement aux fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les revenus diminuent automatiquement lorsqu’ils sont encaissés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut augmenter les besoins de trésorerie d’une entreprise en forte croissance ?',
                        'explanation' => 'Une croissance rapide peut nécessiter davantage de stocks et de créances clients.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation des stocks et des créances clients', 'is_correct' => true],
                            ['choice_text' => 'Une disparition des besoins opérationnels', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des créances', 'is_correct' => false],
                            ['choice_text' => 'Une baisse systématique des dépenses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le flux de trésorerie disponible indique principalement ?',
                        'explanation' => 'Il aide à évaluer les liquidités restantes après certains besoins opérationnels et investissements.',
                        'choices' => [
                            ['choice_text' => 'Les ressources de trésorerie restant disponibles après certains besoins opérationnels et investissements', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires avant toute charge', 'is_correct' => false],
                            ['choice_text' => 'La valeur comptable totale des actifs', 'is_correct' => false],
                            ['choice_text' => 'Le montant total des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le paiement tardif d’un client peut-il poser problème même si la vente est rentable ?',
                        'explanation' => 'L’entreprise peut avoir engagé des coûts avant de recevoir le règlement du client.',
                        'choices' => [
                            ['choice_text' => 'L’entreprise peut devoir financer les coûts avant de recevoir l’encaissement', 'is_correct' => true],
                            ['choice_text' => 'Une vente rentable ne produit jamais de créance', 'is_correct' => false],
                            ['choice_text' => 'Les clients paient toujours avant la livraison', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice disparaît dès qu’un client paie plus tard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une réduction du délai de paiement des clients ?',
                        'explanation' => 'Un encaissement plus rapide peut améliorer la trésorerie et réduire le besoin de financement.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la trésorerie plus rapidement', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement toutes les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Réduire systématiquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Transformer les créances en dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le tableau des flux de trésorerie complète-t-il le compte de résultat ?',
                        'explanation' => 'Le compte de résultat mesure la performance comptable tandis que le tableau des flux explique les mouvements de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Il montre les mouvements de trésorerie que le résultat comptable ne décrit pas entièrement', 'is_correct' => true],
                            ['choice_text' => 'Il remplace toujours le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Il contient uniquement les actifs fixes', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement la valeur boursière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation rapide des stocks peut-elle créer une pression financière ?',
                        'explanation' => 'Les stocks mobilisent des ressources financières tant qu’ils ne sont pas vendus et encaissés.',
                        'choices' => [
                            ['choice_text' => 'Elle peut immobiliser des ressources financières dans des stocks non encore vendus', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une hausse de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement toutes les dettes', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme les stocks en bénéfices immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un écart persistant entre bénéfice et trésorerie opérationnelle ?',
                        'explanation' => 'Un écart durable peut signaler des difficultés de recouvrement, de stocks ou de conversion des résultats en cash.',
                        'choices' => [
                            ['choice_text' => 'Une dégradation possible de la qualité des bénéfices ou du fonds de roulement', 'is_correct' => true],
                            ['choice_text' => 'Une hausse automatique de la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des dettes', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration garantie de la liquidité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le calendrier des encaissements et décaissements est-il important ?',
                        'explanation' => 'La trésorerie dépend du moment où les flux se produisent, pas seulement de leur montant.',
                        'choices' => [
                            ['choice_text' => 'Parce que la disponibilité de trésorerie dépend du moment des entrées et sorties', 'is_correct' => true],
                            ['choice_text' => 'Parce que les flux ont toujours la même valeur quelle que soit leur date', 'is_correct' => false],
                            ['choice_text' => 'Parce que le calendrier influence seulement les revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce que les décaissements n’ont aucun effet sur la liquidité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle action peut améliorer rapidement la gestion de trésorerie sans augmenter immédiatement les ventes ?',
                        'explanation' => 'Une meilleure gestion des créances et des paiements peut libérer des liquidités.',
                        'choices' => [
                            ['choice_text' => 'Améliorer le recouvrement des créances et la gestion des paiements', 'is_correct' => true],
                            ['choice_text' => 'Augmenter toutes les dépenses commerciales', 'is_correct' => false],
                            ['choice_text' => 'Acheter davantage de stocks sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Réduire tous les encaissements clients', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Fonds de roulement et cycle d’exploitation',
                'description' => 'Analysez les besoins de financement du cycle d’exploitation.',
                'questions' => [
                    [
                        'question' => 'Que représente principalement le besoin en fonds de roulement ?', 'explanation' => 'Il correspond aux ressources nécessaires pour financer le décalage entre les dépenses d’exploitation et les encaissements.', 'choices' => [
                            ['choice_text' => 'Le besoin de financement lié au cycle d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Le montant des capitaux propres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice annuel', 'is_correct' => false],
                            ['choice_text' => 'La valeur totale des immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut provoquer une augmentation des créances clients ?', 'explanation' => 'Les créances représentent des ventes non encore encaissées et peuvent mobiliser du financement.', 'choices' => [
                            ['choice_text' => 'Une augmentation du besoin de financement à court terme', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique des besoins de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Une baisse immédiate des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement si une entreprise allonge excessivement son délai de paiement fournisseurs ?', 'explanation' => 'Cela peut améliorer temporairement la trésorerie mais dégrader les relations commerciales.', 'choices' => [
                            ['choice_text' => 'La trésorerie peut être améliorée à court terme, mais les relations fournisseurs peuvent se détériorer', 'is_correct' => true],
                            ['choice_text' => 'Le coût d’achat devient automatiquement nul', 'is_correct' => false],
                            ['choice_text' => 'Les fournisseurs deviennent immédiatement actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Les créances clients disparaissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la durée du cycle d’exploitation est-elle importante ?', 'explanation' => 'Plus l’argent reste immobilisé dans le cycle d’exploitation, plus le besoin de financement peut être élevé.', 'choices' => [
                            ['choice_text' => 'Elle influence la durée pendant laquelle l’entreprise doit financer son activité avant encaissement', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine directement le nombre d’actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Elle fixe automatiquement le taux d’impôt', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun effet sur la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet notamment de suivre la vitesse d’écoulement des stocks ?', 'explanation' => 'La rotation des stocks aide à mesurer combien de fois les stocks sont renouvelés sur une période.', 'choices' => [
                            ['choice_text' => 'Le taux de rotation des stocks', 'is_correct' => true],
                            ['choice_text' => 'Le ratio d’endettement uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le rendement des capitaux propres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le ratio de distribution uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réduction excessive des stocks peut-elle être risquée ?', 'explanation' => 'Des stocks trop faibles peuvent provoquer des ruptures et perturber les opérations.', 'choices' => [
                            ['choice_text' => 'Elle peut provoquer des ruptures de stock et perturber l’activité', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une meilleure satisfaction client', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement les capacités de production', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les besoins de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise cherche-t-elle à optimiser son cycle d’exploitation ?', 'explanation' => 'L’objectif est notamment de réduire les capitaux immobilisés sans dégrader le fonctionnement de l’activité.', 'choices' => [
                            ['choice_text' => 'Pour utiliser plus efficacement les ressources et limiter les besoins de financement', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les dettes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement les prix', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toutes les dépenses opérationnelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle accepter un délai client plus long dans certaines situations ?', 'explanation' => 'Le délai peut être nécessaire pour rester compétitif ou soutenir certaines relations commerciales.', 'choices' => [
                            ['choice_text' => 'Parce que les conditions commerciales peuvent justifier ce délai malgré son coût financier', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un long délai améliore toujours la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances ne nécessitent jamais de financement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un client à crédit paie toujours avant l’échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’un cycle d’exploitation très long ?', 'explanation' => 'Les capitaux peuvent rester immobilisés pendant une longue période.', 'choices' => [
                            ['choice_text' => 'Un montant important de capitaux peut rester immobilisé pendant longtemps', 'is_correct' => true],
                            ['choice_text' => 'Les bénéfices disparaissent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les actifs deviennent immédiatement des passifs', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité devient forcément négative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur principe pour gérer le fonds de roulement ?', 'explanation' => 'La gestion doit rechercher un équilibre entre liquidité, efficacité opérationnelle et relations commerciales.', 'choices' => [
                            ['choice_text' => 'Équilibrer liquidité, efficacité opérationnelle et qualité des relations commerciales', 'is_correct' => true],
                            ['choice_text' => 'Minimiser tous les stocks à zéro', 'is_correct' => false],
                            ['choice_text' => 'Maximiser les créances clients', 'is_correct' => false],
                            ['choice_text' => 'Retarder tous les paiements sans tenir compte des fournisseurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Valeur temporelle de l’argent et décisions',
                'description' => 'Appliquez les concepts de valeur actuelle, valeur future et actualisation.',
                'questions' => [
                    [
                        'question' => 'Pourquoi 10 000 € reçus aujourd’hui valent-ils généralement plus que 10 000 € reçus dans trois ans ?', 'explanation' => 'Le montant disponible aujourd’hui peut être utilisé ou investi immédiatement.', 'choices' => [
                            ['choice_text' => 'Parce que le montant disponible aujourd’hui peut être investi ou utilisé immédiatement', 'is_correct' => true],
                            ['choice_text' => 'Parce que le montant futur est toujours diminué par une banque', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’argent futur n’a aucune valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les taux sont toujours positifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet produit une hausse du taux d’actualisation sur la valeur actuelle d’un même flux futur ?', 'explanation' => 'Un taux plus élevé réduit la valeur actuelle du flux.', 'choices' => [
                            ['choice_text' => 'Elle réduit généralement la valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours la valeur actuelle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne change jamais la valeur actuelle', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le flux futur nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la durée influence-t-elle la valeur actuelle ?', 'explanation' => 'Plus un flux est éloigné dans le temps, plus il est affecté par l’actualisation.', 'choices' => [
                            ['choice_text' => 'Plus le flux est éloigné, plus l’actualisation affecte sa valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'La durée n’a aucun effet en finance', 'is_correct' => false],
                            ['choice_text' => 'Un flux éloigné vaut toujours davantage aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'La durée ne change que les bénéfices comptables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux d’un investissement doivent-ils être estimés avec prudence ?', 'explanation' => 'Les flux futurs dépendent d’hypothèses pouvant être incertaines.', 'choices' => [
                            ['choice_text' => 'Parce qu’ils dépendent d’hypothèses et de conditions futures incertaines', 'is_correct' => true],
                            ['choice_text' => 'Parce que les flux futurs sont toujours connus avec certitude', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur actuelle ne dépend pas des flux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements ne produisent jamais de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet de la capitalisation sur une série d’épargne ?', 'explanation' => 'Les intérêts accumulés peuvent eux-mêmes produire des intérêts.', 'choices' => [
                            ['choice_text' => 'Les intérêts accumulés peuvent eux-mêmes générer des intérêts', 'is_correct' => true],
                            ['choice_text' => 'Les intérêts sont automatiquement supprimés', 'is_correct' => false],
                            ['choice_text' => 'Le capital diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Le temps cesse d’avoir un effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un taux annuel de 8 % n’est-il pas nécessairement équivalent à 8 % par période dans tous les calculs ?', 'explanation' => 'Il faut tenir compte de la fréquence de capitalisation et de la convention utilisée.', 'choices' => [
                            ['choice_text' => 'Parce que le taux et la fréquence de capitalisation doivent être cohérents dans le calcul', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les taux sont identiques quelle que soit la période', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un taux annuel n’a aucun rapport avec les périodes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la capitalisation ne dépend pas de la fréquence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la valeur actuelle de deux projets ?', 'explanation' => 'Cela permet de comparer des flux futurs en tenant compte de leur calendrier et de leur valeur temporelle.', 'choices' => [
                            ['choice_text' => 'Pour comparer économiquement des flux ayant des calendriers différents', 'is_correct' => true],
                            ['choice_text' => 'Pour éliminer le risque des projets', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir le rendement futur', 'is_correct' => false],
                            ['choice_text' => 'Pour ignorer les investissements initiaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux d’actualisation reflète notamment ?', 'explanation' => 'Il peut refléter le coût d’opportunité du capital, le risque et le rendement exigé.', 'choices' => [
                            ['choice_text' => 'Le rendement exigé et certains éléments de risque et de coût d’opportunité', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le taux d’inflation', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la croissance des ventes', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires futur avec certitude', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une petite différence de taux peut-elle avoir un effet important sur une longue période ?', 'explanation' => 'La capitalisation amplifie les différences au fil du temps.', 'choices' => [
                            ['choice_text' => 'Parce que les effets du taux peuvent se cumuler sur plusieurs périodes', 'is_correct' => true],
                            ['choice_text' => 'Parce que le capital est automatiquement multiplié par deux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les taux cessent d’être constants', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux deviennent toujours plus importants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions financières doivent-elles intégrer le calendrier des flux plutôt que leurs seuls montants ?', 'explanation' => 'Deux projets ayant les mêmes montants totaux peuvent avoir des valeurs différentes selon le moment des encaissements.', 'choices' => [
                            ['choice_text' => 'Parce que le moment des flux influence leur valeur économique', 'is_correct' => true],
                            ['choice_text' => 'Parce que le calendrier est uniquement administratif', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux futurs n’ont aucune valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant total ne compte jamais', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Risque, rendement et diversification',
                'description' => 'Analysez le risque, le rendement et la diversification des investissements.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la diversification réduit-elle principalement le risque spécifique ?', 'explanation' => 'Les risques propres à une entreprise peuvent être compensés par d’autres investissements.', 'choices' => [
                            ['choice_text' => 'Parce qu’un événement propre à un actif peut être compensé par d’autres actifs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle élimine tout risque systématique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle garantit un rendement positif', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle empêche les marchés de baisser', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque systématique ?', 'explanation' => 'Il résulte de facteurs qui affectent largement le marché.', 'choices' => [
                            ['choice_text' => 'Le risque lié à des facteurs qui touchent largement le marché', 'is_correct' => true],
                            ['choice_text' => 'Le risque propre à une seule entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le risque lié uniquement à un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Le risque lié à une seule facture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux portefeuilles ayant le même rendement moyen peuvent-ils présenter des qualités différentes ?', 'explanation' => 'Ils peuvent présenter des niveaux de risque, de liquidité et de concentration différents.', 'choices' => [
                            ['choice_text' => 'Leurs risques, volatilités et niveaux de diversification peuvent être différents', 'is_correct' => true],
                            ['choice_text' => 'Un rendement moyen identique signifie toujours un risque identique', 'is_correct' => false],
                            ['choice_text' => 'Le risque n’a aucune importance après le calcul du rendement', 'is_correct' => false],
                            ['choice_text' => 'Les deux portefeuilles sont forcément équivalents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la corrélation entre actifs est-elle importante pour la diversification ?', 'explanation' => 'Des actifs faiblement corrélés peuvent ne pas évoluer ensemble.', 'choices' => [
                            ['choice_text' => 'Des actifs faiblement corrélés peuvent réduire les mouvements simultanés', 'is_correct' => true],
                            ['choice_text' => 'Une corrélation élevée garantit toujours une meilleure diversification', 'is_correct' => false],
                            ['choice_text' => 'La corrélation garantit le rendement', 'is_correct' => false],
                            ['choice_text' => 'La corrélation supprime tout risque de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concentration sectorielle peut-elle rester problématique malgré plusieurs actions ?', 'explanation' => 'Plusieurs entreprises d’un même secteur peuvent subir les mêmes facteurs économiques.', 'choices' => [
                            ['choice_text' => 'Les différentes actions peuvent dépendre des mêmes facteurs économiques', 'is_correct' => true],
                            ['choice_text' => 'Plusieurs actions garantissent automatiquement une diversification parfaite', 'is_correct' => false],
                            ['choice_text' => 'Le secteur n’influence jamais les entreprises', 'is_correct' => false],
                            ['choice_text' => 'La diversification concerne uniquement le nombre de titres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement potentiel seul ne suffit-il pas à choisir un investissement ?', 'explanation' => 'Le risque, la liquidité, l’horizon et les objectifs sont également essentiels.', 'choices' => [
                            ['choice_text' => 'Il faut également considérer le risque, la liquidité et les objectifs', 'is_correct' => true],
                            ['choice_text' => 'Le rendement est toujours sans importance', 'is_correct' => false],
                            ['choice_text' => 'Tous les investissements ont le même risque', 'is_correct' => false],
                            ['choice_text' => 'La liquidité n’a aucun intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de liquidité est-il particulièrement important pendant une crise de marché ?', 'explanation' => 'Les conditions de marché peuvent se dégrader et rendre la vente plus difficile ou plus coûteuse.', 'choices' => [
                            ['choice_text' => 'La vente rapide peut devenir difficile ou entraîner une forte baisse de prix', 'is_correct' => true],
                            ['choice_text' => 'La liquidité augmente toujours pendant les crises', 'is_correct' => false],
                            ['choice_text' => 'Les marchés cessent automatiquement de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs ne peuvent jamais vendre des actifs liquides', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les performances passées ne suffisent-elles pas à prédire un investissement futur ?', 'explanation' => 'Les conditions économiques et les facteurs de marché peuvent changer.', 'choices' => [
                            ['choice_text' => 'Les conditions futures peuvent différer significativement des conditions passées', 'is_correct' => true],
                            ['choice_text' => 'Les performances passées sont toujours fausses', 'is_correct' => false],
                            ['choice_text' => 'Les marchés suivent toujours exactement le même scénario', 'is_correct' => false],
                            ['choice_text' => 'Les rendements futurs sont connus avec certitude', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il accepter un rendement attendu inférieur ?', 'explanation' => 'Il peut privilégier la préservation du capital ou une plus grande stabilité.', 'choices' => [
                            ['choice_text' => 'Il peut privilégier la stabilité ou la préservation du capital', 'is_correct' => true],
                            ['choice_text' => 'Un rendement plus faible est toujours meilleur', 'is_correct' => false],
                            ['choice_text' => 'Il veut nécessairement augmenter son risque', 'is_correct' => false],
                            ['choice_text' => 'Le rendement attendu n’a aucune importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe décrit le mieux une diversification intelligente ?', 'explanation' => 'La diversification doit répartir les sources de risque plutôt que simplement multiplier les titres.', 'choices' => [
                            ['choice_text' => 'Réduire les concentrations sur des facteurs de risque fortement liés', 'is_correct' => true],
                            ['choice_text' => 'Acheter le plus grand nombre possible d’actions', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement les investissements les plus risqués', 'is_correct' => false],
                            ['choice_text' => 'Éviter complètement les actifs liquides', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — États financiers et analyse',
                'description' => 'Interprétez les principaux états financiers et leurs relations.',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement le compte de résultat ?', 'explanation' => 'Il présente la performance financière sur une période.', 'choices' => [
                            ['choice_text' => 'La performance financière sur une période donnée', 'is_correct' => true],
                            ['choice_text' => 'Les actifs à une date uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les seuls mouvements bancaires', 'is_correct' => false],
                            ['choice_text' => 'La structure du capital uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal du bilan ?', 'explanation' => 'Le bilan présente la situation financière à une date précise.', 'choices' => [
                            ['choice_text' => 'Présenter les actifs, passifs et capitaux propres à une date donnée', 'is_correct' => true],
                            ['choice_text' => 'Présenter uniquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Présenter uniquement les bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Présenter uniquement les paiements clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des créances clients peut-elle réduire la trésorerie opérationnelle ?', 'explanation' => 'Des ventes ont été réalisées sans que le cash ait encore été reçu.', 'choices' => [
                            ['choice_text' => 'Parce qu’une partie des ventes reste non encaissée', 'is_correct' => true],
                            ['choice_text' => 'Parce que les créances sont des dettes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes deviennent automatiquement des pertes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clients ont déjà payé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amortissement réduit-il le résultat sans représenter nécessairement une sortie de trésorerie actuelle ?', 'explanation' => 'Il répartit comptablement le coût d’une immobilisation sur sa durée d’utilisation.', 'choices' => [
                            ['choice_text' => 'Parce qu’il constitue une répartition comptable d’un coût déjà engagé', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il représente une nouvelle dette', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il augmente toujours la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il correspond toujours à un paiement annuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un analyste rapproche-t-il résultat et flux de trésorerie ?', 'explanation' => 'Cela aide à évaluer comment les résultats comptables se transforment en trésorerie.', 'choices' => [
                            ['choice_text' => 'Pour comprendre la conversion des résultats comptables en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les états financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement la valeur des stocks', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse de rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’augmentation des dettes fournisseurs peut-elle temporairement soutenir la trésorerie ?', 'explanation' => 'L’entreprise conserve plus longtemps sa trésorerie avant de payer ses fournisseurs.', 'choices' => [
                            ['choice_text' => 'Parce que l’entreprise conserve temporairement les liquidités avant paiement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dettes fournisseurs augmentent le bénéfice automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fournisseurs paient l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes deviennent des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du chiffre d’affaires n’est-elle pas suffisante pour conclure à une amélioration financière ?', 'explanation' => 'La rentabilité, la trésorerie, l’endettement et la qualité de la croissance doivent également être examinés.', 'choices' => [
                            ['choice_text' => 'Il faut aussi analyser rentabilité, trésorerie, endettement et qualité de la croissance', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires ne doit jamais être analysé', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du chiffre d’affaires garantit toujours une bonne santé financière', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité est indépendante des revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres peuvent-ils diminuer malgré des actifs importants ?', 'explanation' => 'Les capitaux propres dépendent de la différence entre actifs et passifs.', 'choices' => [
                            ['choice_text' => 'Des passifs élevés ou des pertes peuvent réduire les capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Les actifs déterminent toujours seuls les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres ne dépendent jamais du résultat', 'is_correct' => false],
                            ['choice_text' => 'Les dettes n’ont aucun effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs exercices comptables ?', 'explanation' => 'L’analyse dans le temps permet d’identifier des tendances et changements structurels.', 'choices' => [
                            ['choice_text' => 'Pour identifier les tendances et évolutions financières', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir les résultats futurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison externe', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il lire les états financiers avec leur contexte métier ?', 'explanation' => 'Les mêmes chiffres peuvent avoir des significations différentes selon le secteur et le modèle économique.', 'choices' => [
                            ['choice_text' => 'Parce que l’activité et le secteur influencent l’interprétation des chiffres', 'is_correct' => true],
                            ['choice_text' => 'Parce que les chiffres financiers sont toujours incomplets', 'is_correct' => false],
                            ['choice_text' => 'Parce que les états financiers ne contiennent aucune information utile', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque secteur utilise toujours les mêmes ratios', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Ratios et diagnostic financier',
                'description' => 'Utilisez les principaux ratios pour établir un diagnostic financier simple.',
                'questions' => [
                    [
                        'question' => 'Quel ratio compare généralement les actifs courants aux passifs courants ?', 'explanation' => 'Le ratio de liquidité générale compare les ressources courantes aux obligations courantes.', 'choices' => [
                            ['choice_text' => 'Le ratio de liquidité générale', 'is_correct' => true],
                            ['choice_text' => 'Le ratio de rentabilité des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Le taux de marge brute uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le rendement des dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une baisse persistante de la marge opérationnelle ?', 'explanation' => 'Elle peut signaler une pression sur les prix ou une croissance des charges opérationnelles.', 'choices' => [
                            ['choice_text' => 'Une dégradation possible de l’efficacité opérationnelle ou de la politique de prix', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des charges', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation garantie des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ratio d’endettement élevé doit-il être analysé avec les flux de trésorerie ?', 'explanation' => 'Le niveau de dette doit être comparé à la capacité réelle de l’entreprise à générer des liquidités.', 'choices' => [
                            ['choice_text' => 'Parce que la capacité de service de la dette dépend des flux disponibles', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’endettement n’a aucun rapport avec la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux sont toujours égaux à la dette', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un endettement élevé garantit la rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un taux de rentabilité doit-il être comparé au coût du capital ?', 'explanation' => 'Une activité peut être rentable comptablement tout en produisant un rendement insuffisant par rapport au capital engagé.', 'choices' => [
                            ['choice_text' => 'Pour déterminer si le rendement couvre réellement le coût des ressources financières', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer le besoin de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une hausse des bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ratio de liquidité très élevé peut-il signaler une inefficacité ?', 'explanation' => 'Une entreprise peut détenir trop de ressources courantes peu productives.', 'choices' => [
                            ['choice_text' => 'Une partie des ressources peut être immobilisée sans générer suffisamment de rendement', 'is_correct' => true],
                            ['choice_text' => 'Une liquidité élevée signifie toujours faillite', 'is_correct' => false],
                            ['choice_text' => 'Les actifs courants n’ont aucune valeur', 'is_correct' => false],
                            ['choice_text' => 'La liquidité élevée garantit toujours la rentabilité maximale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser le délai moyen de recouvrement ?', 'explanation' => 'Il permet de suivre la rapidité de transformation des ventes à crédit en encaissements.', 'choices' => [
                            ['choice_text' => 'Pour mesurer la rapidité de transformation des créances en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer uniquement la production', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le prix des actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un diagnostic financier doit-il utiliser plusieurs indicateurs ?', 'explanation' => 'Chaque indicateur mesure une dimension particulière de la santé financière.', 'choices' => [
                            ['choice_text' => 'Parce que liquidité, rentabilité, solvabilité et efficacité sont des dimensions différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul indicateur est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’aucun ratio n’est utile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les entreprises ne peuvent pas être comparées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ratio peut-il se détériorer même si le chiffre d’affaires progresse ?', 'explanation' => 'Le dénominateur ou d’autres postes financiers peuvent évoluer plus rapidement que le chiffre d’affaires.', 'choices' => [
                            ['choice_text' => 'Parce que les coûts, actifs, dettes ou autres éléments peuvent croître plus rapidement', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires ne compte jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un ratio ne dépend d’aucune autre donnée', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une hausse du chiffre d’affaires garantit toujours une amélioration de tous les ratios', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer un ratio de rentabilité à celui de concurrents directs ?', 'explanation' => 'Le secteur et le modèle économique influencent fortement les niveaux de rentabilité.', 'choices' => [
                            ['choice_text' => 'Pour disposer d’un repère adapté au secteur et au modèle économique', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que les entreprises ont les mêmes résultats', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les différences de modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important lors de l’interprétation des ratios ?', 'explanation' => 'Un ratio doit être interprété avec sa tendance, son contexte et les autres indicateurs.', 'choices' => [
                            ['choice_text' => 'L’interpréter avec son évolution, son secteur et les autres données financières', 'is_correct' => true],
                            ['choice_text' => 'Le considérer isolément', 'is_correct' => false],
                            ['choice_text' => 'Le considérer comme une garantie de performance future', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les données qualitatives', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Investissement et sélection d’actifs',
                'description' => 'Appliquez les principes fondamentaux à la sélection des investissements.',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’horizon de placement influence-t-il le choix d’un actif ?', 'explanation' => 'Un horizon court peut nécessiter davantage de liquidité et une moindre exposition à la volatilité.', 'choices' => [
                            ['choice_text' => 'Parce qu’il influence la capacité à supporter les fluctuations et le besoin de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un horizon long supprime tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les actifs ont la même durée', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rendement n’a aucun rapport avec la durée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’objectif d’investissement doit-il être défini avant de sélectionner les actifs ?', 'explanation' => 'Les objectifs déterminent notamment le risque acceptable, l’horizon et les besoins de liquidité.', 'choices' => [
                            ['choice_text' => 'Pour adapter le choix des actifs au besoin réel de l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir automatiquement un rendement', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute diversification', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les investisseurs ont les mêmes objectifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les obligations peuvent-elles être utilisées pour diversifier un portefeuille ?', 'explanation' => 'Leurs caractéristiques de risque et de rendement peuvent différer de celles des actions.', 'choices' => [
                            ['choice_text' => 'Parce que leurs caractéristiques peuvent différer de celles des actions', 'is_correct' => true],
                            ['choice_text' => 'Parce que les obligations garantissent toujours un rendement réel positif', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ne comportent jamais de risque', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont toujours plus rentables que les actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il examiner les frais d’un produit financier ?', 'explanation' => 'Les frais réduisent le rendement net de l’investissement.', 'choices' => [
                            ['choice_text' => 'Parce qu’ils réduisent le rendement net obtenu', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils garantissent une performance supérieure', 'is_correct' => false],
                            ['choice_text' => 'Parce que les frais sont indépendants du rendement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un produit sans frais est toujours risqué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de diversification peut-elle réduire le risque sans supprimer toute volatilité ?', 'explanation' => 'Diversifier réduit surtout certains risques spécifiques mais n’élimine pas les mouvements globaux du marché.', 'choices' => [
                            ['choice_text' => 'Elle réduit certains risques spécifiques sans éliminer les risques de marché', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une valeur stable', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les marchés de baisser', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les risques financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner la liquidité d’un actif avant un besoin de trésorerie proche ?', 'explanation' => 'Un actif peu liquide peut être difficile à vendre rapidement sans subir une décote.', 'choices' => [
                            ['choice_text' => 'Parce qu’une vente rapide peut entraîner des difficultés ou une décote importante', 'is_correct' => true],
                            ['choice_text' => 'Parce que les actifs liquides ont toujours moins de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité ne concerne que les banques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un actif illiquide peut toujours être vendu instantanément au même prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser le niveau de risque d’un placement avec son rendement attendu ?', 'explanation' => 'Le rendement doit être évalué en fonction du risque accepté pour l’obtenir.', 'choices' => [
                            ['choice_text' => 'Pour apprécier si la rémunération attendue compense l’incertitude prise', 'is_correct' => true],
                            ['choice_text' => 'Parce que le risque n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un rendement élevé garantit une faible volatilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les placements sont comparables directement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur ayant un besoin de liquidité à court terme peut-il privilégier certains actifs moins volatils ?', 'explanation' => 'Une forte perte juste avant le besoin de cash peut être difficile à absorber.', 'choices' => [
                            ['choice_text' => 'Pour réduire le risque de devoir vendre après une baisse importante', 'is_correct' => true],
                            ['choice_text' => 'Parce que les actifs volatils ne peuvent jamais être rentables', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité ne compte pas', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs moins volatils ont toujours le meilleur rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une comparaison entre investissements doit-elle utiliser des hypothèses cohérentes ?', 'explanation' => 'Des hypothèses différentes peuvent rendre les comparaisons artificiellement favorables à une option.', 'choices' => [
                            ['choice_text' => 'Pour que les différences entre investissements proviennent réellement de leurs caractéristiques', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que tous les actifs auront le même rendement', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’incertitude', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de comparer les risques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider la sélection d’un investissement ?', 'explanation' => 'Le choix doit être cohérent avec les objectifs, le risque, la liquidité et les caractéristiques du placement.', 'choices' => [
                            ['choice_text' => 'La cohérence entre objectifs, risque, horizon, liquidité et rendement attendu', 'is_correct' => true],
                            ['choice_text' => 'Le rendement historique seul', 'is_correct' => false],
                            ['choice_text' => 'Le prix le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'La popularité du produit uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Sources de financement et structure financière',
                'description' => 'Comparez dette, capitaux propres et différents choix de financement.',
                'questions' => [
                    [
                        'question' => 'Quel est le principal avantage du financement par dette par rapport à une émission de nouvelles actions ?', 'explanation' => 'La dette ne réduit généralement pas directement la part de propriété des actionnaires existants.', 'choices' => [
                            ['choice_text' => 'Elle permet généralement de financer l’entreprise sans diluer directement la propriété', 'is_correct' => true],
                            ['choice_text' => 'Elle ne nécessite jamais de remboursement', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine tous les risques financiers', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours moins coûteuse que les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal inconvénient de l’endettement ?', 'explanation' => 'Les remboursements et intérêts doivent être honorés indépendamment des performances de l’entreprise.', 'choices' => [
                            ['choice_text' => 'Il crée des obligations financières fixes', 'is_correct' => true],
                            ['choice_text' => 'Il supprime la propriété des actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Il garantit les pertes', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toute croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un financement par actions peut-il être préférable lorsque les flux de trésorerie sont très incertains ?', 'explanation' => 'Les capitaux propres n’imposent généralement pas les mêmes remboursements fixes qu’une dette.', 'choices' => [
                            ['choice_text' => 'Parce qu’il réduit la pression des remboursements fixes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il garantit un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il ne coûte jamais rien', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il élimine le risque commercial', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le niveau de dette doit-il être comparé aux flux de trésorerie ?', 'explanation' => 'La dette doit être servie grâce aux flux disponibles.', 'choices' => [
                            ['choice_text' => 'Pour vérifier la capacité réelle à payer les intérêts et remboursements', 'is_correct' => true],
                            ['choice_text' => 'Parce que les flux n’ont aucun rapport avec les dettes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes sont toujours payées avec les bénéfices comptables uniquement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un niveau de dette élevé garantit des flux élevés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le levier financier ?', 'explanation' => 'Le levier financier traduit l’utilisation de dette ou d’obligations financières fixes pour financer l’entreprise.', 'choices' => [
                            ['choice_text' => 'L’utilisation de dette ou d’obligations financières fixes pour financer l’activité', 'is_correct' => true],
                            ['choice_text' => 'L’utilisation exclusive de capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'La réduction du capital social', 'is_correct' => false],
                            ['choice_text' => 'La gestion des stocks uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le levier peut-il amplifier les rendements des actionnaires ?', 'explanation' => 'Lorsque le rendement des actifs dépasse le coût de la dette, la dette peut augmenter le rendement des capitaux propres.', 'choices' => [
                            ['choice_text' => 'Parce que l’endettement peut amplifier le rendement des capitaux propres lorsque les actifs performent suffisamment', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’endettement garantit toujours un rendement supérieur', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette supprime les pertes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette n’a aucun coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un levier élevé peut-il également amplifier les pertes ?', 'explanation' => 'Les obligations fixes restent présentes même lorsque les revenus diminuent.', 'choices' => [
                            ['choice_text' => 'Les charges financières fixes restent dues lorsque la performance baisse', 'is_correct' => true],
                            ['choice_text' => 'Les dettes diminuent automatiquement en période difficile', 'is_correct' => false],
                            ['choice_text' => 'Le levier élimine les pertes opérationnelles', 'is_correct' => false],
                            ['choice_text' => 'Les intérêts deviennent toujours négatifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la maturité d’une dette doit-elle être surveillée ?', 'explanation' => 'Des remboursements importants concentrés dans le temps peuvent créer un risque de refinancement.', 'choices' => [
                            ['choice_text' => 'Parce que les échéances peuvent créer une pression de trésorerie ou de refinancement', 'is_correct' => true],
                            ['choice_text' => 'Parce que la maturité ne concerne que les actifs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une dette longue ne peut jamais être refinancée', 'is_correct' => false],
                            ['choice_text' => 'Parce que la maturité détermine directement les bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi diversifier les sources de financement ?', 'explanation' => 'La diversification peut réduire la dépendance à une seule source de financement.', 'choices' => [
                            ['choice_text' => 'Pour réduire la dépendance à une seule source de financement', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le coût total', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la dette', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute négociation financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est le plus important lors du choix d’une structure de financement ?', 'explanation' => 'La structure doit rester compatible avec les besoins, la capacité financière et le niveau de risque acceptable.', 'choices' => [
                            ['choice_text' => 'Adapter le financement aux besoins, aux flux de trésorerie et au niveau de risque acceptable', 'is_correct' => true],
                            ['choice_text' => 'Maximiser toujours la dette', 'is_correct' => false],
                            ['choice_text' => 'Éviter systématiquement les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement le financement au taux nominal le plus bas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Cas pratiques de diagnostic financier',
                'description' => 'Appliquez les concepts fondamentaux à des situations professionnelles.',
                'questions' => [
                    [
                        'question' => 'Une entreprise affiche une forte croissance mais doit augmenter régulièrement ses emprunts. Quelle première question financière faut-il poser ?', 'explanation' => 'Il faut déterminer si la croissance génère suffisamment de trésorerie pour financer les besoins supplémentaires.', 'choices' => [
                            ['choice_text' => 'La croissance génère-t-elle suffisamment de trésorerie pour financer son propre développement ?', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de clients doit-il être diminué ?', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires doit-il être supprimé ?', 'is_correct' => false],
                            ['choice_text' => 'Les stocks doivent-ils toujours être augmentés ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise présente une bonne marge mais un faible niveau de liquidité. Quelle conclusion est la plus juste ?', 'explanation' => 'La rentabilité ne signifie pas nécessairement une bonne capacité à honorer les obligations à court terme.', 'choices' => [
                            ['choice_text' => 'Elle peut être rentable tout en connaissant une tension de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Elle est forcément en faillite', 'is_correct' => false],
                            ['choice_text' => 'Elle dispose forcément de suffisamment de cash', 'is_correct' => false],
                            ['choice_text' => 'Elle ne possède aucun actif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède beaucoup de stock ancien. Quel risque financier peut apparaître ?', 'explanation' => 'Le stock peut perdre de la valeur et immobilise des ressources financières.', 'choices' => [
                            ['choice_text' => 'Une immobilisation de trésorerie et un risque de dépréciation des stocks', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique de la liquidité', 'is_correct' => false],
                            ['choice_text' => 'Une réduction garantie des dettes', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique de la rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur doit financer un achat important dans six mois. Quel facteur doit-il examiner particulièrement ?', 'explanation' => 'Le besoin proche impose de privilégier la liquidité et de limiter le risque de perte importante à court terme.', 'choices' => [
                            ['choice_text' => 'La liquidité et le risque de perte avant la date du besoin', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le rendement potentiel à vingt ans', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre de titres disponibles', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la popularité de l’investissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise souhaite acheter un équipement mais hésite entre paiement immédiat et financement. Quel élément doit être comparé ?', 'explanation' => 'Il faut comparer le coût du financement, la liquidité conservée et le rendement attendu de l’investissement.', 'choices' => [
                            ['choice_text' => 'Le coût du financement, la trésorerie conservée et les bénéfices attendus', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la durée du contrat', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la couleur de l’équipement', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le bénéfice comptable du mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise voit ses créances clients augmenter beaucoup plus vite que ses ventes. Quel signal cela peut-il représenter ?', 'explanation' => 'Cela peut signaler un ralentissement du recouvrement ou une détérioration de la qualité du crédit client.', 'choices' => [
                            ['choice_text' => 'Une possible dégradation du recouvrement ou des conditions de crédit', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration garantie de la liquidité', 'is_correct' => false],
                            ['choice_text' => 'Une diminution automatique des ventes', 'is_correct' => false],
                            ['choice_text' => 'Une réduction certaine des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille contient dix actions appartenant toutes au même secteur. Pourquoi reste-t-il concentré ?', 'explanation' => 'Les entreprises du même secteur peuvent être exposées aux mêmes risques économiques.', 'choices' => [
                            ['choice_text' => 'Les différentes actions peuvent subir les mêmes facteurs sectoriels', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de titres suffit toujours à garantir la diversification', 'is_correct' => false],
                            ['choice_text' => 'Un secteur ne peut jamais connaître de choc commun', 'is_correct' => false],
                            ['choice_text' => 'La diversification dépend seulement du nombre de titres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède beaucoup d’actifs mais un niveau de dette très élevé. Pourquoi faut-il analyser la qualité de ces actifs ?', 'explanation' => 'Des actifs difficiles à convertir ou peu rentables peuvent ne pas fournir une capacité suffisante pour soutenir la dette.', 'choices' => [
                            ['choice_text' => 'Parce que la valeur et la liquidité des actifs déterminent leur capacité à soutenir les obligations', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les actifs ont automatiquement la même valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un actif élevé garantit toujours la solvabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs ne sont jamais liés à la dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne a une dette coûteuse et une épargne abondante mais peu rémunérée. Quelle analyse devrait-elle effectuer ?', 'explanation' => 'Le coût de la dette et le rendement net de l’épargne doivent être comparés avant toute décision.', 'choices' => [
                            ['choice_text' => 'Comparer le coût de la dette avec le rendement net de l’épargne', 'is_correct' => true],
                            ['choice_text' => 'Comparer uniquement les montants nominaux', 'is_correct' => false],
                            ['choice_text' => 'Ignorer complètement les taux', 'is_correct' => false],
                            ['choice_text' => 'Contracter automatiquement davantage de dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur principe lors d’une analyse financière intermédiaire ?', 'explanation' => 'Il faut relier les chiffres à leur contexte, à leurs tendances et aux décisions qu’ils doivent éclairer.', 'choices' => [
                            ['choice_text' => 'Relier les indicateurs à leur contexte, leurs tendances et leurs implications financières', 'is_correct' => true],
                            ['choice_text' => 'Analyser chaque chiffre isolément', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement les chiffres les plus élevés', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les facteurs qualitatifs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Planification financière intermédiaire',
                'description' => 'Utilisez les principes financiers pour construire des plans et comparer des décisions.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un budget doit-il être comparé régulièrement aux résultats réels ?', 'explanation' => 'La comparaison permet d’identifier les écarts et d’ajuster les décisions.', 'choices' => [
                            ['choice_text' => 'Pour identifier les écarts et ajuster les décisions', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le budget ne changera jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les états financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer coûts fixes et coûts variables dans une analyse financière ?', 'explanation' => 'Le comportement des coûts influence le résultat lorsque le volume d’activité change.', 'choices' => [
                            ['choice_text' => 'Parce qu’ils réagissent différemment aux variations de l’activité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils ont toujours le même montant', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes disparaissent lorsque les ventes augmentent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables ne changent jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le seuil de rentabilité est-il utile ?', 'explanation' => 'Il indique le niveau d’activité nécessaire pour couvrir les coûts sans réaliser de bénéfice ni de perte.', 'choices' => [
                            ['choice_text' => 'Il indique le niveau d’activité nécessaire pour couvrir les coûts', 'is_correct' => true],
                            ['choice_text' => 'Il garantit un bénéfice élevé', 'is_correct' => false],
                            ['choice_text' => 'Il mesure la trésorerie disponible', 'is_correct' => false],
                            ['choice_text' => 'Il mesure directement la valeur boursière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle prévoir plusieurs scénarios budgétaires ?', 'explanation' => 'Les résultats peuvent varier selon l’évolution des ventes, coûts et conditions économiques.', 'choices' => [
                            ['choice_text' => 'Pour se préparer à différentes évolutions possibles de l’activité', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’un scénario se réalisera', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout suivi budgétaire', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les hypothèses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une prévision financière doit-elle être mise à jour lorsque les hypothèses changent fortement ?', 'explanation' => 'Une prévision devient moins pertinente lorsque ses hypothèses ne correspondent plus à la réalité.', 'choices' => [
                            ['choice_text' => 'Pour conserver une représentation réaliste des conditions futures', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une prévision ne doit jamais rester cohérente', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’analyse des écarts', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les besoins de trésorerie doivent-ils être intégrés dans une planification financière ?', 'explanation' => 'Un plan rentable peut échouer si l’organisation ne dispose pas de liquidités suffisantes au bon moment.', 'choices' => [
                            ['choice_text' => 'Parce qu’une décision rentable peut néanmoins créer un besoin important de liquidités', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie est identique au bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements ne demandent jamais de cash', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie n’affecte aucune décision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les écarts budgétaires importants ?', 'explanation' => 'Les écarts peuvent révéler des changements de marché, des erreurs d’hypothèses ou des problèmes opérationnels.', 'choices' => [
                            ['choice_text' => 'Pour identifier leurs causes et améliorer les prévisions ou actions futures', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier automatiquement les résultats', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le budget', 'is_correct' => false],
                            ['choice_text' => 'Pour prouver que le budget initial était parfait', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision financière doit-elle prendre en compte l’opportunité perdue lorsqu’un capital est utilisé ?', 'explanation' => 'Le capital affecté à une option n’est plus disponible pour une autre option.', 'choices' => [
                            ['choice_text' => 'Parce que le capital engagé dans un choix n’est plus disponible pour une autre opportunité', 'is_correct' => true],
                            ['choice_text' => 'Parce que le capital peut toujours être utilisé deux fois', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’opportunité perdue n’a aucune valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût d’opportunité concerne uniquement les employés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer des hypothèses documentées dans un budget ?', 'explanation' => 'Les hypothèses permettent de comprendre l’origine des projections et de les réviser.', 'choices' => [
                            ['choice_text' => 'Pour comprendre les bases des prévisions et pouvoir les réviser', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les hypothèses de changer', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir les résultats futurs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la nécessité de comparaison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne planification financière ?', 'explanation' => 'Elle doit relier objectifs, ressources, risques, trésorerie et scénarios.', 'choices' => [
                            ['choice_text' => 'Relier objectifs, ressources, risques, trésorerie et hypothèses réalistes', 'is_correct' => true],
                            ['choice_text' => 'Se concentrer uniquement sur le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les changements du marché', 'is_correct' => false],
                            ['choice_text' => 'Maximiser systématiquement les dépenses', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $this->seedQuiz($subject, $quizData, 'Intermediate');
        }
    }

    private function seedQuiz(Subject $subject, array $quizData, string $difficulty): void
    {
        $quiz = Quiz::updateOrCreate(
            [
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
            ],
            [
                'owner_id' => null,
                'description' => $quizData['description'],
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => count($quizData['questions']),
                'is_active' => true,
                'difficulty' => $difficulty,
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