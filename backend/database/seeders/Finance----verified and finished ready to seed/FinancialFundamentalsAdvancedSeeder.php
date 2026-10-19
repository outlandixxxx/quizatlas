<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialFundamentalsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux financiers — Analyse avancée de la performance',
                'description' => 'Analyse avancée de la rentabilité, des marges, de la croissance et de la création de valeur.',
                'questions' => [
                    [
                        'question' => 'Une entreprise affiche une croissance de 20 % de son chiffre d’affaires, mais sa marge opérationnelle passe de 15 % à 10 %. Quelle interprétation est la plus pertinente ?',
                        'explanation' => 'La croissance du chiffre d’affaires ne suffit pas à conclure à une amélioration de la performance si la rentabilité se dégrade.',
                        'choices' => [
                            ['choice_text' => 'La croissance est accompagnée d’une détérioration de la rentabilité opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'La performance s’est nécessairement améliorée grâce à la croissance des ventes', 'is_correct' => false],
                            ['choice_text' => 'La baisse de marge signifie automatiquement une hausse du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'La marge opérationnelle n’a aucun rapport avec la qualité de la croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance rapide peut-elle détruire de la valeur malgré une hausse du chiffre d’affaires ?',
                        'explanation' => 'Une croissance peut nécessiter beaucoup de capital et générer un rendement insuffisant sur ce capital.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut mobiliser beaucoup de capital sans générer un rendement suffisant', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une hausse du chiffre d’affaires réduit toujours les actifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute croissance est financièrement négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements n’ont jamais d’effet sur la valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il analyser l’évolution du bénéfice avec celle de la trésorerie opérationnelle ?',
                        'explanation' => 'Une divergence persistante peut révéler une forte consommation de fonds de roulement ou une qualité de résultat à examiner.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier si les bénéfices se transforment effectivement en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que bénéfice et trésorerie sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie n’a aucun rapport avec la performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise améliore ses ventes mais augmente fortement ses remises commerciales. Quel indicateur mérite une attention particulière ?',
                        'explanation' => 'La politique de remise peut améliorer les volumes mais réduire les marges.',
                        'choices' => [
                            ['choice_text' => 'La marge et la rentabilité par rapport à la croissance des ventes', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre de clients', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le total des actifs', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre de factures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du bénéfice net ne signifie-t-elle pas nécessairement une amélioration de la performance opérationnelle ?',
                        'explanation' => 'Le résultat net peut être influencé par des éléments financiers, fiscaux ou exceptionnels.',
                        'choices' => [
                            ['choice_text' => 'Le résultat net peut être influencé par des éléments non opérationnels', 'is_correct' => true],
                            ['choice_text' => 'Le résultat net dépend uniquement des ventes', 'is_correct' => false],
                            ['choice_text' => 'Les éléments financiers n’ont jamais d’effet sur le résultat net', 'is_correct' => false],
                            ['choice_text' => 'La performance opérationnelle est identique au résultat net', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une marge brute en hausse n’implique-t-elle pas automatiquement une hausse du bénéfice net ?',
                        'explanation' => 'Les charges opérationnelles, financières et fiscales peuvent augmenter malgré l’amélioration de la marge brute.',
                        'choices' => [
                            ['choice_text' => 'D’autres catégories de charges peuvent augmenter et absorber le gain de marge', 'is_correct' => true],
                            ['choice_text' => 'La marge brute est toujours égale au bénéfice net', 'is_correct' => false],
                            ['choice_text' => 'Les charges financières disparaissent quand la marge augmente', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice net dépend uniquement des coûts de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de la rentabilité doit-elle tenir compte du capital utilisé ?',
                        'explanation' => 'Un bénéfice élevé peut être obtenu avec une base de capital très importante et donc être moins efficace qu’il n’y paraît.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer l’efficacité avec laquelle le capital engagé génère des rendements', 'is_correct' => true],
                            ['choice_text' => 'Pour ignorer le niveau des bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’analyse du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les taxes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la croissance interne d’une entreprise avec celle de son secteur ?',
                        'explanation' => 'Une croissance qui semble forte peut être faible ou exceptionnelle selon le contexte sectoriel.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si la performance est réellement supérieure ou inférieure à celle du marché', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir la croissance future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les différences entre secteurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de la rentabilité peut-elle être temporaire ?',
                        'explanation' => 'Une amélioration peut provenir d’un événement exceptionnel ou d’une réduction de coûts non durable.',
                        'choices' => [
                            ['choice_text' => 'Elle peut provenir d’éléments exceptionnels ou non reproductibles', 'is_correct' => true],
                            ['choice_text' => 'Toute hausse de rentabilité est nécessairement durable', 'is_correct' => false],
                            ['choice_text' => 'Les bénéfices exceptionnels n’existent jamais', 'is_correct' => false],
                            ['choice_text' => 'Une marge élevée garantit toujours sa stabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel pour analyser correctement la performance financière ?',
                        'explanation' => 'Une analyse solide combine croissance, rentabilité, trésorerie, capital engagé et contexte.',
                        'choices' => [
                            ['choice_text' => 'Analyser simultanément croissance, rentabilité, trésorerie, capital et contexte', 'is_correct' => true],
                            ['choice_text' => 'Se limiter au chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement le bénéfice net', 'is_correct' => false],
                            ['choice_text' => 'Analyser uniquement la valeur boursière', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Analyse avancée de la rentabilité',
                'description' => 'Approfondissez l’analyse des marges, du rendement des actifs et des capitaux propres.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un rendement des capitaux propres élevé peut-il être trompeur ?',
                        'explanation' => 'Un niveau élevé de dette ou une base de capitaux propres faible peut artificiellement amplifier le rendement des propriétaires.',
                        'choices' => [
                            ['choice_text' => 'Un levier financier élevé peut amplifier le rendement des capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Le rendement des capitaux propres ne dépend jamais de la structure financière', 'is_correct' => false],
                            ['choice_text' => 'Une dette élevée réduit toujours le rendement des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Le rendement des capitaux propres est identique à la marge nette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement des actifs doit-il être comparé à la performance opérationnelle ?',
                        'explanation' => 'Cela permet de voir si les actifs sont utilisés efficacement pour générer des résultats.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer l’efficacité avec laquelle les actifs génèrent des résultats', 'is_correct' => true],
                            ['choice_text' => 'Parce que les actifs n’ont aucun rôle dans la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer l’analyse du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement la dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une marge élevée mais une faible rotation des actifs. Que peut-on déduire ?', 'explanation' => 'La forte marge peut être compensée par une utilisation moins efficace des actifs.',
                        'choices' => [
                            ['choice_text' => 'Une forte marge ne garantit pas une utilisation efficace des actifs', 'is_correct' => true],
                            ['choice_text' => 'La faible rotation augmente toujours la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'La rotation des actifs n’a aucun intérêt', 'is_correct' => false],
                            ['choice_text' => 'La marge et la rotation représentent exactement la même chose', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les marges à plusieurs niveaux du compte de résultat ?', 'explanation' => 'Cela permet d’identifier à quel niveau les coûts ou autres charges affectent la rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier où la rentabilité se crée ou se détériore dans la chaîne financière', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une seule marge suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les coûts opérationnels', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des prix peut-elle augmenter la rentabilité mais réduire les ventes ?', 'explanation' => 'Une augmentation du prix peut entraîner une baisse de la demande selon l’élasticité du marché.',
                        'choices' => [
                            ['choice_text' => 'Parce que certains clients peuvent réduire leur demande lorsque le prix augmente', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un prix plus élevé réduit toujours le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que la demande est toujours indépendante du prix', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts disparaissent avec une hausse des prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle améliorer sa rentabilité sans augmenter ses prix ?', 'explanation' => 'Une meilleure efficacité opérationnelle peut réduire les coûts et améliorer les marges.',
                        'choices' => [
                            ['choice_text' => 'En améliorant la productivité ou en réduisant certains coûts', 'is_correct' => true],
                            ['choice_text' => 'En supprimant toutes ses ventes', 'is_correct' => false],
                            ['choice_text' => 'En augmentant uniquement ses dettes', 'is_correct' => false],
                            ['choice_text' => 'En réduisant systématiquement ses actifs à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rendement élevé doit-il être examiné avec le risque associé ?', 'explanation' => 'Un rendement supérieur peut résulter d’un niveau de risque plus important.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un rendement élevé peut être la contrepartie d’un risque plus important', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un rendement élevé est toujours sans risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que le risque n’affecte jamais les investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rendement et le risque sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser la rentabilité par segment ou activité ?', 'explanation' => 'Une entreprise globale peut cacher des activités très rentables et d’autres déficitaires.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier quelles activités contribuent réellement à la rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour éliminer les activités les plus anciennes automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que tous les segments ont la même marge', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le compte de résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse de marge peut-elle être acceptable dans une phase stratégique particulière ?', 'explanation' => 'Une entreprise peut volontairement investir dans la croissance, la technologie ou l’acquisition de clients.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une entreprise peut accepter une baisse temporaire pour financer une stratégie de croissance', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute baisse de marge est toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une marge basse garantit une croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider l’interprétation d’un indicateur de rentabilité ?', 'explanation' => 'Il faut l’examiner avec sa tendance, son secteur, son niveau de risque et la structure financière.',
                        'choices' => [
                            ['choice_text' => 'Le replacer dans son contexte historique, sectoriel et financier', 'is_correct' => true],
                            ['choice_text' => 'Le considérer isolément', 'is_correct' => false],
                            ['choice_text' => 'Le comparer uniquement à zéro', 'is_correct' => false],
                            ['choice_text' => 'Le considérer comme une garantie de performance future', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Analyse avancée du fonds de roulement',
                'description' => 'Évaluez le cycle d’exploitation, les créances, les stocks et les dettes opérationnelles.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une hausse du délai moyen de recouvrement peut-elle augmenter les besoins de financement ?', 'explanation' => 'Une collecte plus lente laisse davantage de créances immobiliser des ressources.', 'choices' => [
                            ['choice_text' => 'Parce qu’une plus grande partie des ventes reste immobilisée dans les créances', 'is_correct' => true],
                            ['choice_text' => 'Parce que les clients paient plus rapidement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances deviennent automatiquement des liquidités', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffre d’affaires devient nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du stock moyen peut-elle avoir un effet négatif sur la trésorerie ?', 'explanation' => 'Le stock représente des ressources financières engagées avant la vente et l’encaissement.', 'choices' => [
                            ['choice_text' => 'Parce qu’il immobilise des ressources avant la réalisation de la vente', 'is_correct' => true],
                            ['choice_text' => 'Parce que le stock est toujours une dette', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il augmente directement la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il réduit toujours les achats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réduire le délai de paiement fournisseur peut-il avoir un impact négatif sur la trésorerie ?', 'explanation' => 'L’entreprise décaisse plus rapidement ses liquidités.', 'choices' => [
                            ['choice_text' => 'Parce que les sorties de trésorerie interviennent plus tôt', 'is_correct' => true],
                            ['choice_text' => 'Parce que les fournisseurs augmentent automatiquement leurs prix', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes diminuent toujours', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances clients disparaissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une amélioration du fonds de roulement ne doit-elle pas être obtenue au détriment du service client ?', 'explanation' => 'Une réduction excessive des stocks ou du crédit client peut dégrader les ventes et les relations commerciales.', 'choices' => [
                            ['choice_text' => 'Parce qu’une optimisation financière excessive peut détériorer l’activité commerciale', 'is_correct' => true],
                            ['choice_text' => 'Parce que les clients n’ont aucune importance financière', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks doivent toujours être maximisés', 'is_correct' => false],
                            ['choice_text' => 'Parce que le fonds de roulement doit toujours être négatif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance peut-elle augmenter le besoin en fonds de roulement même si la marge reste stable ?', 'explanation' => 'Plus de ventes peuvent nécessiter proportionnellement plus de stocks et de créances.', 'choices' => [
                            ['choice_text' => 'Parce que davantage de ventes peuvent nécessiter davantage de stocks et de créances', 'is_correct' => true],
                            ['choice_text' => 'Parce que la croissance réduit toujours les créances', 'is_correct' => false],
                            ['choice_text' => 'Parce que la marge stable supprime les besoins de financement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes augmentent toujours la trésorerie immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les créances anciennes ?', 'explanation' => 'Des créances anciennes peuvent présenter un risque de retard ou de non-recouvrement.', 'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent signaler un risque accru de non-recouvrement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours plus rentables', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles augmentent automatiquement les liquidités', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles remplacent les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel peut être l’effet d’une amélioration du taux de rotation des stocks ?', 'explanation' => 'Une rotation plus rapide peut réduire les ressources immobilisées, sous réserve de ne pas provoquer de ruptures.', 'choices' => [
                            ['choice_text' => 'Elle peut réduire les capitaux immobilisés dans les stocks', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours les stocks moyens', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue toujours les ventes', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les dépenses logistiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conditions de paiement négociées avec les fournisseurs ont-elles une dimension financière ?', 'explanation' => 'Elles influencent la date des sorties de trésorerie.', 'choices' => [
                            ['choice_text' => 'Elles modifient le calendrier des décaissements et donc la liquidité', 'is_correct' => true],
                            ['choice_text' => 'Elles changent directement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment les passifs', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent un bénéfice supplémentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le cycle de conversion de trésorerie est-il utile ?', 'explanation' => 'Il aide à comprendre pendant combien de temps les ressources financières restent engagées dans l’exploitation.', 'choices' => [
                            ['choice_text' => 'Il mesure approximativement la durée pendant laquelle le cash reste immobilisé dans le cycle d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Il mesure uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Il détermine automatiquement le taux bancaire', 'is_correct' => false],
                            ['choice_text' => 'Il remplace le bilan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur objectif d’une gestion avancée du fonds de roulement ?', 'explanation' => 'Il faut réduire les capitaux immobilisés sans compromettre la continuité opérationnelle.', 'choices' => [
                            ['choice_text' => 'Réduire les capitaux immobilisés tout en préservant l’efficacité opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Réduire tous les stocks à zéro', 'is_correct' => false],
                            ['choice_text' => 'Maximiser les créances clients', 'is_correct' => false],
                            ['choice_text' => 'Retarder tous les paiements fournisseurs sans limite', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Structure financière et levier',
                'description' => 'Analysez la dette, les capitaux propres, le levier financier et la capacité de remboursement.',
                'questions' => [
                    [
                        'question' => 'Pourquoi le levier financier peut-il augmenter le rendement des capitaux propres ?', 'explanation' => 'Lorsque le rendement des actifs dépasse le coût de la dette, le financement par dette peut amplifier le rendement de l’actionnaire.', 'choices' => [
                            ['choice_text' => 'Lorsque le rendement des actifs dépasse le coût de la dette, l’endettement peut amplifier le rendement des capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette garantit toujours un rendement supérieur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts augmentent automatiquement les bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette supprime les pertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel danger apparaît lorsque la dette devient trop importante par rapport aux flux de trésorerie ?', 'explanation' => 'Les obligations financières peuvent devenir difficiles à honorer.', 'choices' => [
                            ['choice_text' => 'Une pression croissante sur la capacité de remboursement', 'is_correct' => true],
                            ['choice_text' => 'Une suppression automatique des intérêts', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation garantie des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration automatique de la liquidité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette à taux variable peut-elle présenter un risque supplémentaire ?', 'explanation' => 'Une hausse des taux peut augmenter les charges financières.', 'choices' => [
                            ['choice_text' => 'Une hausse des taux peut augmenter le coût du service de la dette', 'is_correct' => true],
                            ['choice_text' => 'Le taux variable diminue toujours avec le temps', 'is_correct' => false],
                            ['choice_text' => 'Une dette à taux variable n’a jamais de coût', 'is_correct' => false],
                            ['choice_text' => 'Le taux variable protège automatiquement contre l’inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la structure des échéances de dette doit-elle être analysée ?', 'explanation' => 'Des échéances concentrées peuvent créer un besoin important de refinancement.', 'choices' => [
                            ['choice_text' => 'Pour identifier les périodes durant lesquelles les besoins de remboursement sont élevés', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les échéances sont financièrement identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les dettes longues', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres sont-ils généralement considérés comme une source de financement plus flexible que la dette ?', 'explanation' => 'Ils n’imposent généralement pas de remboursement fixe du capital à une date déterminée.', 'choices' => [
                            ['choice_text' => 'Ils ne créent généralement pas les mêmes obligations fixes de remboursement', 'is_correct' => true],
                            ['choice_text' => 'Ils n’impliquent jamais de coût pour les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent toujours une rentabilité positive', 'is_correct' => false],
                            ['choice_text' => 'Ils éliminent le risque commercial', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle choisir de ne pas maximiser son endettement ?', 'explanation' => 'Une dette plus élevée augmente les obligations fixes et peut limiter la flexibilité future.', 'choices' => [
                            ['choice_text' => 'Pour préserver sa flexibilité financière et limiter le risque de défaut', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres ne coûtent jamais rien', 'is_correct' => false],
                            ['choice_text' => 'Parce que les entreprises ne peuvent jamais rembourser une dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intérêts de la dette doivent-ils être mis en relation avec le résultat opérationnel ?', 'is_correct' => true,
                        'explanation' => 'Le résultat opérationnel fournit une indication de la capacité du cœur d’activité à supporter les charges financières.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer la capacité de l’activité à couvrir les charges financières', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer uniquement les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer les frais financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer directement la valeur boursière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût moyen du financement doit-il être considéré lors d’une décision de structure financière ?', 'explanation' => 'La structure de financement influence le coût global du capital utilisé.', 'choices' => [
                            ['choice_text' => 'Parce que la structure choisie influence le coût global des ressources financières', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les sources de financement ont le même coût', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût du capital n’affecte jamais la valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que seule la dette détermine le financement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise cyclique doit-elle être prudente avec un niveau élevé de dette ?', 'explanation' => 'Ses flux peuvent fortement diminuer pendant les périodes de ralentissement.', 'choices' => [
                            ['choice_text' => 'Ses flux de trésorerie peuvent fortement diminuer alors que les obligations de dette restent fixes', 'is_correct' => true],
                            ['choice_text' => 'Une activité cyclique garantit toujours des revenus stables', 'is_correct' => false],
                            ['choice_text' => 'Les dettes diminuent automatiquement pendant les crises', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises cycliques n’ont jamais besoin de financement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne politique de levier financier ?', 'explanation' => 'Le niveau de dette doit rester compatible avec les flux, les risques et les objectifs stratégiques.', 'choices' => [
                            ['choice_text' => 'Maintenir un niveau de dette compatible avec les flux, les risques et la stratégie', 'is_correct' => true],
                            ['choice_text' => 'Maximiser toujours la dette', 'is_correct' => false],
                            ['choice_text' => 'Éliminer toute dette quelle que soit la situation', 'is_correct' => false],
                            ['choice_text' => 'Choisir la dette uniquement selon son montant', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Investissement et création de valeur',
                'description' => 'Analysez les décisions d’investissement avec une approche avancée de valeur et de risque.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un projet ayant une valeur actuelle nette positive peut-il être préférable à un projet ayant uniquement un rendement comptable élevé ?', 'explanation' => 'La valeur actuelle nette tient compte de la valeur temporelle des flux et du coût du capital.', 'choices' => [
                            ['choice_text' => 'Parce qu’elle intègre la valeur temporelle des flux et le coût du capital', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un rendement comptable est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur actuelle nette ignore les flux futurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que tout projet rentable a automatiquement une VAN positive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une période de récupération courte ne suffit-elle pas pour juger un investissement ?', 'explanation' => 'Elle ignore généralement les flux après la période de récupération et peut négliger la valeur temporelle.', 'choices' => [
                            ['choice_text' => 'Elle peut ignorer les flux futurs et la valeur temporelle de l’argent', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure parfaitement toute la valeur du projet', 'is_correct' => false],
                            ['choice_text' => 'Elle prend toujours en compte tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace nécessairement toute autre méthode', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de sensibilité est-elle utile dans une décision d’investissement ?', 'explanation' => 'Elle montre comment le résultat change lorsque certaines hypothèses sont modifiées.', 'choices' => [
                            ['choice_text' => 'Pour identifier les hypothèses auxquelles la valeur du projet est la plus sensible', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que les hypothèses sont exactes', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer les risques', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les flux de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse par scénarios complète-t-elle une analyse de sensibilité ?', 'explanation' => 'Les scénarios modifient plusieurs hypothèses simultanément et permettent de tester des situations cohérentes.', 'choices' => [
                            ['choice_text' => 'Elle permet d’étudier des combinaisons cohérentes de plusieurs hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Elle ne considère qu’une seule variable', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit le résultat final', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût du capital est-il essentiel dans l’évaluation d’un projet ?', 'explanation' => 'Il représente une référence importante pour déterminer si les flux futurs compensent le financement nécessaire.', 'choices' => [
                            ['choice_text' => 'Il sert notamment de référence pour évaluer si les rendements compensent le coût des ressources', 'is_correct' => true],
                            ['choice_text' => 'Il représente toujours le taux de profit du projet', 'is_correct' => false],
                            ['choice_text' => 'Il ne dépend jamais du risque', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement les coûts comptables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer flux nominaux et flux réels ?', 'explanation' => 'Les flux nominaux intègrent l’effet des prix tandis que les flux réels cherchent à mesurer le pouvoir d’achat.', 'choices' => [
                            ['choice_text' => 'Parce que l’inflation affecte différemment les montants nominaux et leur pouvoir d’achat réel', 'is_correct' => true],
                            ['choice_text' => 'Parce que les montants réels sont toujours supérieurs aux montants nominaux', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’inflation n’a aucun effet sur les investissements', 'is_correct' => false],
                            ['choice_text' => 'Parce que les deux notions sont toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts irrécupérables ne doivent-ils généralement pas influencer une nouvelle décision d’investissement ?', 'explanation' => 'Ils sont déjà engagés et ne changent pas selon la décision future.', 'choices' => [
                            ['choice_text' => 'Parce qu’ils sont déjà engagés et ne peuvent pas être modifiés par la nouvelle décision', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils sont toujours insignifiants', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont toujours récupérables', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils représentent toujours des revenus futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’opportunité du capital doit-il être pris en compte ?', 'explanation' => 'Utiliser des ressources dans un projet signifie renoncer à d’autres utilisations potentielles.', 'choices' => [
                            ['choice_text' => 'Parce que le capital aurait pu être utilisé dans une autre opportunité', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute opportunité alternative est sans valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le capital peut être utilisé simultanément sans limite', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût d’opportunité concerne uniquement les ressources humaines', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un projet stratégique peut-il être accepté malgré un rendement financier immédiat modéré ?', 'explanation' => 'Il peut créer des capacités, des barrières à l’entrée ou des synergies futures.', 'choices' => [
                            ['choice_text' => 'Parce qu’il peut créer des bénéfices stratégiques futurs difficiles à mesurer immédiatement', 'is_correct' => true],
                            ['choice_text' => 'Parce que la rentabilité n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les projets stratégiques sont sans risque', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un faible rendement garantit toujours une forte valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur principe pour évaluer un projet d’investissement ?', 'explanation' => 'L’évaluation doit combiner valeur financière, risques, hypothèses et implications stratégiques.', 'choices' => [
                            ['choice_text' => 'Combiner valeur actualisée, risques, hypothèses, scénarios et conséquences stratégiques', 'is_correct' => true],
                            ['choice_text' => 'Utiliser uniquement le chiffre d’affaires attendu', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement le délai de récupération', 'is_correct' => false],
                            ['choice_text' => 'Choisir automatiquement le projet le plus coûteux', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Risques financiers avancés',
                'description' => 'Analysez les principaux risques financiers et leur interaction avec les décisions.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un risque de liquidité peut-il se transformer rapidement en problème de solvabilité ?', 'explanation' => 'Une incapacité temporaire à payer peut entraîner des défauts, pénalités ou ventes forcées qui aggravent la situation financière.', 'choices' => [
                            ['choice_text' => 'Une crise de liquidité prolongée peut provoquer des défauts et détériorer la situation financière', 'is_correct' => true],
                            ['choice_text' => 'La liquidité et la solvabilité sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise liquide est toujours insolvable', 'is_correct' => false],
                            ['choice_text' => 'La liquidité n’a aucun effet sur la continuité d’activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de taux est-il important pour une entreprise fortement endettée à taux variable ?', 'explanation' => 'Une hausse des taux augmente les charges financières.', 'choices' => [
                            ['choice_text' => 'Une hausse des taux peut augmenter fortement les charges financières', 'is_correct' => true],
                            ['choice_text' => 'Les taux variables sont toujours plafonnés à zéro', 'is_correct' => false],
                            ['choice_text' => 'Le taux de la dette n’affecte jamais le résultat', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des taux augmente toujours les bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de change concerne-t-il une entreprise qui facture dans une devise différente de sa devise fonctionnelle ?', 'explanation' => 'La variation du taux de change peut modifier la valeur des encaissements une fois convertis.', 'choices' => [
                            ['choice_text' => 'Les variations de change peuvent modifier la valeur des flux convertis', 'is_correct' => true],
                            ['choice_text' => 'Le change ne concerne que les banques', 'is_correct' => false],
                            ['choice_text' => 'Les devises ont toujours une valeur fixe', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires en devise étrangère est toujours sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de crédit est-il important pour un prêteur ?', 'explanation' => 'Le prêteur risque de ne pas récupérer tout ou partie des montants dus.', 'choices' => [
                            ['choice_text' => 'Parce que l’emprunteur peut ne pas rembourser intégralement les sommes dues', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un prêt garantit toujours un remboursement', 'is_correct' => false],
                            ['choice_text' => 'Parce que le crédit ne comporte aucun risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts éliminent le risque de défaut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle distinguer risque et incertitude dans certaines analyses ?', 'explanation' => 'Le risque peut parfois être estimé ou modélisé alors que certaines incertitudes sont beaucoup moins quantifiables.', 'choices' => [
                            ['choice_text' => 'Parce que certaines incertitudes sont difficiles à mesurer avec des probabilités fiables', 'is_correct' => true],
                            ['choice_text' => 'Parce que le risque est toujours parfaitement connu', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’incertitude peut toujours être supprimée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les probabilités n’ont jamais de valeur financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le stress testing est-il utile ?', 'explanation' => 'Il permet de mesurer la résistance financière sous des conditions défavorables.', 'choices' => [
                            ['choice_text' => 'Pour tester la capacité à résister à des conditions fortement défavorables', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’une crise n’arrivera jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les scénarios normaux', 'is_correct' => false],
                            ['choice_text' => 'Pour prévoir exactement l’avenir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque opérationnel peut-il devenir un risque financier ?', 'explanation' => 'Une défaillance opérationnelle peut provoquer des pertes, des interruptions ou des coûts supplémentaires.', 'choices' => [
                            ['choice_text' => 'Une défaillance opérationnelle peut générer des pertes ou des coûts financiers', 'is_correct' => true],
                            ['choice_text' => 'Les opérations sont complètement indépendantes des finances', 'is_correct' => false],
                            ['choice_text' => 'Le risque opérationnel ne produit jamais de pertes', 'is_correct' => false],
                            ['choice_text' => 'Les risques financiers concernent uniquement les marchés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concentration des financements auprès d’un seul prêteur peut-elle représenter un risque ?', 'explanation' => 'La dépendance à une seule source peut réduire la flexibilité si cette source change ses conditions.', 'choices' => [
                            ['choice_text' => 'Une difficulté avec ce prêteur peut fortement affecter la capacité de financement', 'is_correct' => true],
                            ['choice_text' => 'Un seul prêteur garantit toujours de meilleures conditions', 'is_correct' => false],
                            ['choice_text' => 'La diversification des financements est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Les prêteurs ne peuvent jamais modifier leurs conditions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de marché ne disparaît-il pas avec la diversification ?', 'explanation' => 'Certains facteurs économiques affectent simultanément de nombreux actifs.', 'choices' => [
                            ['choice_text' => 'Certains facteurs macroéconomiques affectent simultanément de nombreux actifs', 'is_correct' => true],
                            ['choice_text' => 'La diversification élimine tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Les marchés sont indépendants de l’économie', 'is_correct' => false],
                            ['choice_text' => 'Tous les actifs réagissent toujours de façon opposée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne gestion des risques financiers ?', 'explanation' => 'Il faut identifier, mesurer, surveiller et traiter les risques en fonction de leur importance.', 'choices' => [
                            ['choice_text' => 'Identifier, mesurer, surveiller et traiter les risques selon leur importance', 'is_correct' => true],
                            ['choice_text' => 'Éliminer tous les risques quelle que soit leur nature', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les risques peu fréquents', 'is_correct' => false],
                            ['choice_text' => 'Concentrer tous les risques dans une seule activité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Cas avancés de décision financière',
                'description' => 'Analysez des situations complexes impliquant rentabilité, risque, financement et trésorerie.',
                'questions' => [
                    [
                        'question' => 'Une entreprise très rentable souhaite augmenter fortement son endettement pour accélérer sa croissance. Quel contrôle est prioritaire ?', 'explanation' => 'Il faut vérifier la capacité des flux futurs à supporter les nouvelles obligations dans différents scénarios.', 'choices' => [
                            ['choice_text' => 'Tester la capacité de remboursement dans plusieurs scénarios d’activité', 'is_correct' => true],
                            ['choice_text' => 'Augmenter immédiatement la dette au maximum', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les flux de trésorerie puisque l’entreprise est rentable', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise une croissance rapide grâce à des ventes à crédit très généreuses. Quel risque doit être surveillé ?', 'explanation' => 'Les ventes peuvent croître mais les créances et le risque de non-recouvrement aussi.', 'choices' => [
                            ['choice_text' => 'Le risque de crédit client et l’augmentation du besoin en fonds de roulement', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre de produits', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la valeur des immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Aucun risque puisque les ventes augmentent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille contient plusieurs actifs mais tous sont exposés au même secteur économique. Quelle mesure est la plus pertinente ?', 'explanation' => 'La concentration des facteurs de risque doit être réduite plutôt que simplement augmenter le nombre de titres.', 'choices' => [
                            ['choice_text' => 'Réduire l’exposition aux facteurs de risque communs', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage d’entreprises du même secteur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute analyse de corrélation', 'is_correct' => false],
                            ['choice_text' => 'Investir uniquement dans l’entreprise dominante du secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet possède une VAN positive mais dépend d’une hypothèse de croissance très optimiste. Quelle approche est la plus rigoureuse ?', 'explanation' => 'Une VAN positive doit être testée contre des hypothèses moins favorables.', 'choices' => [
                            ['choice_text' => 'Réaliser une analyse de sensibilité et des scénarios défavorables', 'is_correct' => true],
                            ['choice_text' => 'Accepter automatiquement le projet', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la croissance', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les flux futurs par le chiffre d’affaires actuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche un bénéfice record mais ses flux de trésorerie opérationnels chutent fortement. Quelle question analytique est la plus importante ?', 'explanation' => 'Il faut comprendre les différences entre bénéfice comptable et génération de cash.', 'choices' => [
                            ['choice_text' => 'Quels facteurs expliquent la faible conversion du bénéfice en trésorerie ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi le bénéfice est forcément faux', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi la trésorerie n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi les actifs doivent être supprimés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut réduire son besoin en fonds de roulement en diminuant fortement ses stocks, mais elle travaille dans un secteur avec une demande très volatile. Quel compromis faut-il considérer ?', 'explanation' => 'Une réduction trop forte peut provoquer des ruptures et des pertes commerciales.', 'choices' => [
                            ['choice_text' => 'Équilibrer libération de trésorerie et risque de rupture de stock', 'is_correct' => true],
                            ['choice_text' => 'Réduire les stocks à zéro dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Augmenter les stocks au maximum', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’impact commercial', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut financer un projet soit par dette, soit par capitaux propres. La dette est moins coûteuse mais augmente fortement le risque financier. Quelle analyse faut-il privilégier ?', 'explanation' => 'Il faut comparer le coût du capital, le risque, la flexibilité et l’impact sur les propriétaires.', 'choices' => [
                            ['choice_text' => 'Comparer coût, risque, capacité de remboursement, flexibilité et dilution', 'is_correct' => true],
                            ['choice_text' => 'Choisir automatiquement la dette car elle est moins chère', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’effet sur la structure financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une forte trésorerie mais très peu de rentabilité sur ses actifs. Que peut-on soupçonner ?', 'explanation' => 'Une trésorerie excessive peut représenter des ressources sous-utilisées.', 'choices' => [
                            ['choice_text' => 'Une partie des ressources peut être sous-utilisée ou investir insuffisamment', 'is_correct' => true],
                            ['choice_text' => 'Une forte trésorerie garantit une forte rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Les actifs sont nécessairement très productifs', 'is_correct' => false],
                            ['choice_text' => 'La liquidité et l’efficacité sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un dirigeant se concentre uniquement sur la croissance du chiffre d’affaires pour évaluer la réussite financière. Quelle faiblesse principale présente cette approche ?', 'explanation' => 'La croissance doit être évaluée avec sa rentabilité, sa consommation de capital et sa génération de cash.', 'choices' => [
                            ['choice_text' => 'Elle ignore la rentabilité, la consommation de capital et la génération de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'La croissance n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité dépend uniquement du nombre de clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une analyse financière avancée ?', 'explanation' => 'Une analyse avancée doit relier les indicateurs aux mécanismes économiques, aux risques et aux décisions.', 'choices' => [
                            ['choice_text' => 'Relier les chiffres aux mécanismes économiques, aux risques, aux hypothèses et aux décisions', 'is_correct' => true],
                            ['choice_text' => 'Se limiter aux chiffres les plus élevés', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute analyse de scénario', 'is_correct' => false],
                            ['choice_text' => 'Considérer chaque indicateur indépendamment des autres', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Synthèse et diagnostic financier avancé',
                'description' => 'Quiz intégrateur sur la performance, la trésorerie, le risque, le financement et la création de valeur.',
                'questions' => [
                    [
                        'question' => 'Une entreprise augmente son chiffre d’affaires, sa dette et ses créances plus rapidement que ses bénéfices. Quelle situation mérite le plus d’attention ?', 'explanation' => 'La croissance peut être financée par l’endettement et le fonds de roulement sans générer assez de valeur ou de cash.', 'choices' => [
                            ['choice_text' => 'La soutenabilité financière de la croissance', 'is_correct' => true],
                            ['choice_text' => 'La seule augmentation du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'La réduction des immobilisations sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de produits uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance organique doit-elle être comparée à la capacité de financement interne ?', 'explanation' => 'Une croissance rapide peut dépasser les ressources générées par l’activité.', 'choices' => [
                            ['choice_text' => 'Pour vérifier si l’activité peut financer une partie suffisante de sa propre croissance', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute croissance doit être financée exclusivement par dette', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres ne servent jamais au financement', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffre d’affaires suffit toujours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse de la marge et une hausse du besoin en fonds de roulement peuvent-elles être préoccupantes simultanément ?', 'explanation' => 'L’entreprise peut subir à la fois une pression sur la rentabilité et sur la trésorerie.', 'choices' => [
                            ['choice_text' => 'Elles peuvent réduire simultanément la rentabilité et la liquidité', 'is_correct' => true],
                            ['choice_text' => 'Elles garantissent une amélioration de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Elles signifient toujours une hausse des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Elles n’ont aucun lien avec la situation financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un analyste doit-il distinguer risque de liquidité et risque de solvabilité ?', 'explanation' => 'La liquidité concerne la capacité à honorer les obligations à court terme, tandis que la solvabilité concerne la capacité financière plus globale.', 'choices' => [
                            ['choice_text' => 'Ils représentent des dimensions différentes de la capacité financière', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'Le risque de liquidité concerne uniquement les ménages', 'is_correct' => false],
                            ['choice_text' => 'La solvabilité concerne uniquement les banques centrales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les hypothèses d’un modèle financier doivent-elles être challengées ?', 'explanation' => 'Des hypothèses trop optimistes peuvent produire des valorisations ou prévisions trompeuses.', 'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent être la principale source d’erreur dans les résultats projetés', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute hypothèse est forcément fausse', 'is_correct' => false],
                            ['choice_text' => 'Parce que les modèles financiers n’utilisent jamais de données', 'is_correct' => false],
                            ['choice_text' => 'Parce que les scénarios ne servent à rien', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle préférer conserver une réserve de liquidité plutôt que distribuer tout son excédent aux actionnaires ?', 'explanation' => 'Une réserve peut protéger contre des chocs, financer des projets ou réduire le risque de liquidité.', 'choices' => [
                            ['choice_text' => 'Pour conserver une capacité de réaction face aux imprévus et opportunités', 'is_correct' => true],
                            ['choice_text' => 'Parce que les actionnaires n’ont jamais besoin de rendement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie est toujours improductive', 'is_correct' => false],
                            ['choice_text' => 'Parce que distribuer des dividendes est toujours interdit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un faible coût de financement ne suffit-il pas pour juger une structure financière ?', 'explanation' => 'Il faut également considérer le risque, la flexibilité, les échéances et la capacité de remboursement.', 'choices' => [
                            ['choice_text' => 'Parce que le risque, les échéances et la flexibilité comptent également', 'is_correct' => true],
                            ['choice_text' => 'Parce que le coût n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une dette peu coûteuse est toujours dangereuse', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les structures financières sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse financière doit-elle distinguer événements récurrents et événements exceptionnels ?', 'explanation' => 'Les éléments exceptionnels ne doivent pas être utilisés comme base unique pour prévoir la performance future.', 'choices' => [
                            ['choice_text' => 'Pour éviter de projeter des résultats exceptionnels comme s’ils étaient durables', 'is_correct' => true],
                            ['choice_text' => 'Parce que les événements exceptionnels n’existent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les revenus sont récurrents', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépenses exceptionnelles augmentent toujours la rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la création de valeur doit-elle être distinguée de la simple croissance ?', 'explanation' => 'Une croissance importante peut nécessiter trop de capital ou produire des rendements insuffisants.', 'choices' => [
                            ['choice_text' => 'Parce qu’une croissance n’a de valeur économique durable que si elle génère un rendement suffisant sur les ressources engagées', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute croissance détruit nécessairement de la valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que la croissance et la valeur sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que le capital n’influence jamais la valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche représente le mieux une analyse financière avancée ?', 'explanation' => 'Une analyse avancée relie les résultats, les flux, le financement, les risques, les hypothèses et les décisions.', 'choices' => [
                            ['choice_text' => 'Analyser performance, trésorerie, capital, risques, hypothèses et décisions de manière intégrée', 'is_correct' => true],
                            ['choice_text' => 'Analyser uniquement le bénéfice net', 'is_correct' => false],
                            ['choice_text' => 'Analyser uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Analyser uniquement les dettes', 'is_correct' => false],
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
                    'duration' => 25,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Advanced',
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