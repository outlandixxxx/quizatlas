<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class FiscalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'fiscal-economics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1
            // ============================================================
            [
                'title' => 'Fondamentaux de la politique budgétaire',
                'description' => 'Quiz débutant sur les fondamentaux de la politique budgétaire.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la politique budgétaire ?',
                        'choices' => [
                            'L’utilisation des dépenses publiques et des impôts pour influencer l’économie',
                            'La gestion des taux de change uniquement',
                            'La politique de crédit des banques commerciales uniquement',
                            'La fixation privée des salaires',
                        ],
                        'correct' => 0,
                        'explanation' => 'La politique budgétaire utilise principalement les dépenses publiques et les impôts pour influencer l’activité économique et atteindre certains objectifs publics.',
                    ],
                    [
                        'question' => 'Quel acteur conduit principalement la politique budgétaire ?',
                        'choices' => [
                            'Les autorités publiques, notamment le gouvernement et le parlement selon le système institutionnel',
                            'Les ménages uniquement',
                            'Les banques commerciales uniquement',
                            'Les entreprises étrangères uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'La politique budgétaire relève des autorités publiques, notamment du gouvernement et du parlement selon l’organisation institutionnelle.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépense publique ?',
                        'choices' => [
                            'Une dépense effectuée par une administration publique pour financer des biens, services, transferts ou investissements',
                            'Une dépense privée d’un ménage',
                            'Une exportation privée',
                            'Une transaction entre deux consommateurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dépense publique est effectuée par une administration publique pour financer des services, biens, transferts ou investissements.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt ?',
                        'choices' => [
                            'Un prélèvement obligatoire effectué par les pouvoirs publics',
                            'Un prêt volontaire accordé à une entreprise',
                            'Une exportation de services',
                            'Une subvention versée aux ménages',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un impôt est un prélèvement obligatoire effectué par les pouvoirs publics selon les règles fiscales.',
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements utilisent-ils la politique budgétaire ?',
                        'choices' => [
                            'Pour financer les services publics et influencer notamment l’activité économique et la redistribution',
                            'Pour supprimer toute activité privée',
                            'Pour fixer tous les prix du marché',
                            'Pour empêcher toute épargne',
                        ],
                        'correct' => 0,
                        'explanation' => 'La politique budgétaire sert notamment à financer les services publics, influencer l’activité et modifier la distribution des revenus.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un budget public ?',
                        'choices' => [
                            'Un document présentant les recettes et dépenses prévues d’une administration publique sur une période donnée',
                            'Un relevé uniquement des exportations',
                            'Une liste des salaires privés',
                            'Un registre des prix mondiaux',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le budget public présente les recettes et les dépenses prévues pour une période donnée.',
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques peuvent-elles influencer la demande globale ?',
                        'choices' => [
                            'Elles constituent directement une composante de la demande de biens et services',
                            'Elles n’ont aucun lien avec l’activité économique',
                            'Elles réduisent toujours la production',
                            'Elles concernent uniquement les marchés étrangers',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les achats publics de biens et services constituent directement une composante de la demande globale.',
                    ],
                    [
                        'question' => 'Que peut provoquer une baisse des impôts, toutes choses égales par ailleurs ?',
                        'choices' => [
                            'Elle peut augmenter le revenu disponible de certains ménages ou entreprises',
                            'Elle réduit toujours le revenu disponible',
                            'Elle interdit la consommation',
                            'Elle supprime automatiquement les dépenses publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une baisse d’impôt peut augmenter le revenu disponible et modifier la consommation ou l’investissement.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un transfert public ?',
                        'choices' => [
                            'Un paiement public destiné à certains ménages ou agents sans achat direct de bien ou service en contrepartie',
                            'Un achat public d’équipement',
                            'Une exportation de marchandises',
                            'Un prêt bancaire privé',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un transfert public est un paiement effectué sans recevoir directement un bien ou un service en échange.',
                    ],
                    [
                        'question' => 'Pourquoi l’État finance-t-il certaines infrastructures ?',
                        'choices' => [
                            'Parce qu’elles peuvent fournir des services utiles à l’économie et soutenir la capacité productive',
                            'Parce que les infrastructures ne servent jamais à la population',
                            'Pour supprimer tous les investissements privés',
                            'Pour réduire nécessairement la productivité',
                        ],
                        'correct' => 0,
                        'explanation' => 'Certaines infrastructures soutiennent les déplacements, les échanges, la production et donc la capacité productive de l’économie.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2
            // ============================================================
            [
                'title' => 'Recettes publiques et fiscalité',
                'description' => 'Quiz débutant sur les recettes publiques et les principaux types d’impôts.',
                'questions' => [
                    [
                        'question' => 'Quelle est une source importante de recettes publiques ?',
                        'choices' => [
                            'Les impôts et autres prélèvements obligatoires',
                            'Uniquement les exportations privées',
                            'Uniquement les dons des ménages',
                            'Uniquement les bénéfices des banques commerciales',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les impôts et autres prélèvements obligatoires représentent une source importante de recettes publiques.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt sur le revenu ?',
                        'choices' => [
                            'Un prélèvement calculé sur certains revenus des personnes ou ménages',
                            'Un prélèvement uniquement sur les importations',
                            'Une taxe sur les infrastructures',
                            'Une subvention aux entreprises',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un impôt sur le revenu est calculé sur certains revenus des personnes ou des ménages selon le système fiscal.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt sur les bénéfices des entreprises ?',
                        'choices' => [
                            'Un prélèvement sur les bénéfices imposables des entreprises selon les règles fiscales applicables',
                            'Une taxe uniquement sur les salaires des ménages',
                            'Une taxe sur les exportations seulement',
                            'Une subvention publique aux entreprises',
                        ],
                        'correct' => 0,
                        'explanation' => 'Cet impôt est appliqué aux bénéfices imposables des entreprises selon les règles fiscales en vigueur.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une taxe sur la consommation ?',
                        'choices' => [
                            'Un prélèvement appliqué à l’achat ou à la consommation de certains biens et services',
                            'Un impôt uniquement sur les salaires',
                            'Une taxe uniquement sur les bénéfices',
                            'Une cotisation volontaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une taxe sur la consommation s’applique notamment lors de l’achat ou de la consommation de biens et services.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la TVA dans de nombreux systèmes fiscaux ?',
                        'choices' => [
                            'Une taxe sur la valeur ajoutée collectée à différents stades de la production et de la distribution',
                            'Une taxe uniquement sur les exportations',
                            'Une taxe sur les salaires uniquement',
                            'Une subvention à la consommation',
                        ],
                        'correct' => 0,
                        'explanation' => 'La TVA est perçue à différents stades de la chaîne de production et de distribution.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt direct ?',
                        'choices' => [
                            'Un impôt prélevé directement sur le revenu, le patrimoine ou une base fiscale liée au contribuable',
                            'Une taxe uniquement sur les biens importés',
                            'Une subvention publique',
                            'Une dépense d’investissement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un impôt direct est lié directement au revenu, au patrimoine ou à une autre base fiscale du contribuable.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt indirect ?',
                        'choices' => [
                            'Un prélèvement lié notamment à la consommation ou aux transactions de biens et services',
                            'Un prélèvement uniquement sur le revenu salarial',
                            'Un transfert social',
                            'Un investissement public',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un impôt indirect est généralement intégré au prix de biens ou services ou lié à une transaction.',
                    ],
                    [
                        'question' => 'Que signifie un système fiscal progressif ?',
                        'choices' => [
                            'La part du revenu consacrée à l’impôt augmente lorsque le revenu augmente, selon le barème applicable',
                            'Tout le monde paie exactement le même montant',
                            'Les personnes à revenu élevé paient toujours moins en taux effectif',
                            'Aucun impôt n’est appliqué aux revenus',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un système progressif, le taux effectif d’imposition augmente généralement avec le revenu selon le barème.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt proportionnel ?',
                        'choices' => [
                            'Un impôt dont le taux appliqué à la base imposable reste constant selon le barème considéré',
                            'Un impôt dont le taux augmente automatiquement avec le revenu',
                            'Un impôt sans aucune règle',
                            'Une taxe qui varie uniquement avec les exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un impôt proportionnel applique un même taux à la base imposable dans le système considéré.',
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements cherchent-ils à élargir leur base fiscale ?',
                        'choices' => [
                            'Une base plus large peut permettre de financer les dépenses publiques avec moins de dépendance à un nombre limité de contribuables ou secteurs',
                            'Pour supprimer toute recette fiscale',
                            'Pour empêcher toute activité économique',
                            'Pour réduire automatiquement tous les impôts à zéro',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une base fiscale plus large peut rendre les recettes publiques moins dépendantes de quelques contribuables ou secteurs.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3
            // ============================================================
            [
                'title' => 'Budget, déficit et dette publique',
                'description' => 'Quiz débutant sur le budget public, le déficit et la dette publique.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un déficit budgétaire ?',
                        'choices' => [
                            'Une situation où les dépenses publiques dépassent les recettes publiques sur une période donnée',
                            'Une situation où les recettes dépassent toujours les dépenses',
                            'Une baisse obligatoire des impôts',
                            'Une hausse automatique des exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un déficit budgétaire apparaît lorsque les dépenses dépassent les recettes pendant une période donnée.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un excédent budgétaire ?',
                        'choices' => [
                            'Une situation où les recettes publiques dépassent les dépenses sur une période donnée',
                            'Une situation où les dépenses dépassent les recettes',
                            'Une baisse de la production privée',
                            'Une hausse automatique de la dette',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un excédent budgétaire apparaît lorsque les recettes dépassent les dépenses.',
                    ],
                    [
                        'question' => 'Comment un déficit budgétaire peut-il être financé ?',
                        'choices' => [
                            'Notamment par l’émission de dette publique ou d’autres mécanismes de financement prévus par le cadre institutionnel',
                            'Uniquement par les exportations',
                            'Uniquement par la consommation des ménages',
                            'Sans aucune source de financement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un déficit doit être financé, notamment par l’emprunt public dans de nombreux systèmes.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la dette publique ?',
                        'choices' => [
                            'L’ensemble des engagements financiers accumulés des administrations publiques envers leurs créanciers',
                            'Le total des dettes des ménages',
                            'Le montant des exportations',
                            'Le capital des banques privées',
                        ],
                        'correct' => 0,
                        'explanation' => 'La dette publique est un stock d’engagements financiers accumulés des administrations publiques.',
                    ],
                    [
                        'question' => 'Quelle différence existe entre déficit public et dette publique ?',
                        'choices' => [
                            'Le déficit est un flux sur une période, tandis que la dette est un stock accumulé à une date donnée',
                            'Les deux notions sont exactement identiques',
                            'La dette est toujours un flux annuel',
                            'Le déficit est toujours un stock',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le déficit est mesuré sur une période tandis que la dette correspond à un stock à une date donnée.',
                    ],
                    [
                        'question' => 'Pourquoi l’État paie-t-il des intérêts sur une partie de sa dette ?',
                        'choices' => [
                            'Les créanciers demandent généralement une rémunération pour les fonds prêtés à l’État',
                            'Les intérêts sont toujours versés aux ménages gratuitement',
                            'La dette publique n’a jamais de coût financier',
                            'Les intérêts sont des impôts privés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les intérêts représentent généralement la rémunération versée aux créanciers pour les fonds prêtés.',
                    ],
                    [
                        'question' => 'Pourquoi le niveau de dette publique est-il souvent rapporté au PIB ?',
                        'choices' => [
                            'Le ratio dette/PIB donne une indication de la taille de la dette par rapport à la capacité économique de l’État',
                            'Parce que la dette et le PIB sont toujours la même chose',
                            'Pour mesurer directement le chômage',
                            'Pour calculer uniquement les exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le ratio dette/PIB met la dette en relation avec la taille de l’économie.',
                    ],
                    [
                        'question' => 'Pourquoi une dette publique élevée peut-elle devenir préoccupante ?',
                        'choices' => [
                            'Elle peut augmenter la charge d’intérêts et réduire la marge de manœuvre budgétaire, surtout si le financement devient plus coûteux',
                            'Une dette élevée garantit toujours une croissance forte',
                            'La dette publique n’a jamais de coût',
                            'Une dette élevée supprime automatiquement les impôts',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dette importante peut augmenter les paiements d’intérêts et limiter les ressources disponibles pour d’autres dépenses.',
                    ],
                    [
                        'question' => 'Pourquoi la croissance économique peut-elle faciliter la gestion d’une dette publique ?',
                        'choices' => [
                            'Une économie en croissance peut générer davantage de revenus et augmenter la taille du PIB utilisé au dénominateur du ratio dette/PIB',
                            'La croissance réduit toujours les recettes publiques',
                            'La croissance interdit tout emprunt public',
                            'Le PIB n’a aucun lien avec la dette relative',
                        ],
                        'correct' => 0,
                        'explanation' => 'La croissance peut augmenter les revenus économiques et le PIB, ce qui peut faciliter l’évolution du ratio dette/PIB.',
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il chercher à réduire progressivement son déficit ?',
                        'choices' => [
                            'Pour limiter l’accumulation de dette et préserver sa capacité future de financement',
                            'Pour supprimer toute dépense publique',
                            'Pour empêcher tout investissement public',
                            'Pour réduire automatiquement les exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Réduire le déficit peut limiter l’augmentation future de la dette et préserver une marge de financement.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4
            // ============================================================
            [
                'title' => 'Dépenses publiques et biens collectifs',
                'description' => 'Quiz débutant sur les dépenses publiques, les biens publics et les services collectifs.',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’État fournit-il certains biens et services collectifs ?',
                        'choices' => [
                            'Parce que certains biens présentent des caractéristiques qui peuvent rendre leur fourniture privée insuffisante ou difficile à organiser efficacement',
                            'Parce que les marchés privés n’existent jamais',
                            'Pour empêcher toute consommation',
                            'Parce que tous les biens sont nécessairement publics',
                        ],
                        'correct' => 0,
                        'explanation' => 'Certains biens présentent des caractéristiques qui peuvent justifier une intervention publique ou une fourniture collective.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien public pur dans la théorie économique ?',
                        'choices' => [
                            'Un bien caractérisé notamment par la non-rivalité et la difficulté d’exclusion',
                            'Un bien vendu uniquement dans les supermarchés',
                            'Un bien nécessairement gratuit à produire',
                            'Un bien produit uniquement par une entreprise privée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un bien public pur est classiquement non rival et difficilement excluable.',
                    ],
                    [
                        'question' => 'Que signifie la non-rivalité ?',
                        'choices' => [
                            'La consommation par une personne ne réduit pas nécessairement la possibilité pour une autre personne de consommer le même service',
                            'Une personne peut toujours empêcher les autres de consommer',
                            'Le bien est toujours rare',
                            'Le bien doit être importé',
                        ],
                        'correct' => 0,
                        'explanation' => 'La non-rivalité signifie que l’utilisation par une personne ne réduit pas nécessairement l’utilisation possible par une autre.',
                    ],
                    [
                        'question' => 'Que signifie la non-exclusion ?',
                        'choices' => [
                            'Il est difficile ou coûteux d’empêcher certains individus d’utiliser le bien',
                            'Seuls les contribuables riches peuvent utiliser le bien',
                            'Le bien ne peut être produit',
                            'L’État interdit toute utilisation du bien',
                        ],
                        'correct' => 0,
                        'explanation' => 'La non-exclusion signifie qu’il est difficile ou coûteux d’empêcher des personnes d’utiliser le bien.',
                    ],
                    [
                        'question' => 'Pourquoi les routes et infrastructures publiques peuvent-elles être financées par l’impôt ?',
                        'choices' => [
                            'Elles peuvent produire des bénéfices collectifs qui ne sont pas toujours entièrement capturés par un paiement individuel',
                            'Elles ne servent jamais aux entreprises',
                            'Les impôts n’ont aucun lien avec les infrastructures',
                            'Les routes sont toujours des biens privés purs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les infrastructures peuvent produire des bénéfices collectifs dépassant ce qui peut être financé par un paiement individuel.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépense publique d’investissement ?',
                        'choices' => [
                            'Une dépense destinée à créer, améliorer ou maintenir des actifs durables comme certaines infrastructures',
                            'Une dépense consacrée uniquement aux salaires courants',
                            'Un impôt indirect',
                            'Une exportation publique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dépense d’investissement crée ou améliore des actifs durables comme certaines infrastructures.',
                    ],
                    [
                        'question' => 'Pourquoi l’éducation publique peut-elle être soutenue par l’État ?',
                        'choices' => [
                            'Elle peut produire des bénéfices privés et des effets positifs pour l’ensemble de la société',
                            'L’éducation n’a aucune valeur économique',
                            'L’État interdit toute formation privée',
                            'L’éducation réduit toujours la productivité',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’éducation peut produire des bénéfices individuels ainsi que des effets positifs pour la société.',
                    ],
                    [
                        'question' => 'Pourquoi la santé publique peut-elle faire partie des dépenses publiques ?',
                        'choices' => [
                            'La santé produit des bénéfices individuels et collectifs, et l’accès peut être influencé par des considérations sociales',
                            'La santé n’a aucun effet sur la société',
                            'Les services de santé sont toujours gratuits à produire',
                            'Les dépenses de santé n’ont aucun lien avec le bien-être',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les dépenses de santé peuvent produire des bénéfices individuels et collectifs et répondre à des objectifs sociaux.',
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques de recherche peuvent-elles soutenir l’innovation ?',
                        'choices' => [
                            'Certaines connaissances génèrent des bénéfices qui dépassent l’entreprise ou l’organisme qui finance initialement la recherche',
                            'La recherche ne produit jamais de nouvelles connaissances',
                            'Les entreprises ne bénéficient jamais de la recherche publique',
                            'L’innovation est indépendante de toute connaissance',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les connaissances produites par la recherche peuvent bénéficier à plusieurs acteurs et soutenir l’innovation.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il évaluer l’efficacité des dépenses publiques ?',
                        'choices' => [
                            'Les ressources publiques sont limitées et doivent être utilisées de manière aussi utile et efficace que possible',
                            'Les ressources publiques sont infinies',
                            'Toute dépense publique est automatiquement efficace',
                            'L’efficacité n’a aucun rôle dans la gestion publique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les ressources publiques sont limitées, donc il est important d’évaluer les résultats obtenus par les dépenses.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5
            // ============================================================
            [
                'title' => 'Politique budgétaire et cycle économique',
                'description' => 'Quiz débutant sur la politique budgétaire, les récessions, les stabilisateurs automatiques et le multiplicateur.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire expansionniste ?',
                        'choices' => [
                            'Une politique qui cherche généralement à soutenir la demande par davantage de dépenses publiques ou moins d’impôts',
                            'Une politique qui réduit toujours les dépenses publiques',
                            'Une politique qui augmente obligatoirement tous les impôts',
                            'Une politique qui interdit les investissements',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique budgétaire expansionniste cherche généralement à soutenir la demande globale.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire restrictive ?',
                        'choices' => [
                            'Une politique visant généralement à réduire la demande publique nette par une baisse des dépenses, une hausse des impôts ou les deux',
                            'Une politique qui augmente toujours les dépenses',
                            'Une politique qui réduit nécessairement tous les impôts',
                            'Une politique qui supprime la dette privée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique restrictive vise généralement à réduire la demande globale ou le déficit.',
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il utiliser une politique budgétaire expansionniste pendant une récession ?',
                        'choices' => [
                            'Pour soutenir la demande globale lorsque l’activité économique est insuffisante',
                            'Pour réduire systématiquement la consommation',
                            'Pour augmenter automatiquement le chômage',
                            'Pour empêcher toute production',
                        ],
                        'correct' => 0,
                        'explanation' => 'Pendant une récession, une politique expansionniste peut soutenir la demande lorsque l’activité est insuffisante.',
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire restrictive peut-elle être utilisée lorsque l’économie est en forte surchauffe ?',
                        'choices' => [
                            'Elle peut contribuer à réduire une demande excessive et certaines pressions inflationnistes',
                            'Elle augmente toujours la demande globale',
                            'Elle supprime les capacités productives',
                            'Elle réduit toujours les recettes publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique restrictive peut réduire une demande excessive et certaines pressions inflationnistes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un stabilisateur automatique ?',
                        'choices' => [
                            'Un mécanisme budgétaire qui atténue automatiquement les fluctuations économiques sans nouvelle décision discrétionnaire',
                            'Une banque centrale indépendante',
                            'Un taux de change fixe',
                            'Une taxe toujours nulle',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un stabilisateur automatique agit en fonction de la conjoncture sans nécessiter une nouvelle décision politique à chaque fois.',
                    ],
                    [
                        'question' => 'Lequel est un exemple de stabilisateur automatique ?',
                        'choices' => [
                            'Un impôt sur le revenu dont les recettes diminuent lorsque les revenus baissent',
                            'Une hausse exceptionnelle de taxe votée après une crise',
                            'Une subvention décidée chaque mois par le gouvernement',
                            'Une modification ponctuelle des tarifs douaniers',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les recettes d’un impôt sur le revenu diminuent automatiquement lorsque les revenus diminuent.',
                    ],
                    [
                        'question' => 'Pourquoi les prestations de chômage peuvent-elles agir comme stabilisateur automatique ?',
                        'choices' => [
                            'Elles augmentent généralement lorsque le chômage augmente, soutenant une partie du revenu des ménages',
                            'Elles diminuent toujours pendant une récession',
                            'Elles augmentent directement les exportations',
                            'Elles empêchent toute baisse du chômage',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les prestations de chômage soutiennent automatiquement une partie des revenus lorsque le chômage augmente.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le multiplicateur budgétaire dans sa définition simple ?',
                        'choices' => [
                            'La variation de l’activité économique associée à une variation initiale d’une dépense ou d’un impôt',
                            'Le rapport entre dette publique et population',
                            'Le nombre de ministères dans un gouvernement',
                            'Le taux d’inflation annuel',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le multiplicateur mesure la variation de l’activité associée à une variation initiale de la politique budgétaire.',
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur budgétaire peut-il varier selon les circonstances ?',
                        'choices' => [
                            'Il dépend notamment de la situation économique, de la politique monétaire, de l’épargne et du comportement des agents',
                            'Il est toujours exactement égal à 1',
                            'Il est indépendant de la conjoncture',
                            'Il dépend uniquement du nombre d’habitants',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le multiplicateur dépend du contexte économique et des réactions des ménages, des entreprises et de la politique monétaire.',
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire peut-elle avoir des délais d’effet ?',
                        'choices' => [
                            'Les décisions publiques doivent être prises et mises en œuvre avant que leurs effets économiques se transmettent pleinement',
                            'Les dépenses publiques ont toujours un effet instantané',
                            'Les ménages ignorent toujours les politiques publiques',
                            'Les entreprises n’adaptent jamais leur comportement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les mesures doivent être décidées et mises en œuvre avant que leurs effets se transmettent dans l’économie.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6
            // ============================================================
            [
                'title' => 'Redistribution et inégalités',
                'description' => 'Quiz débutant sur la redistribution, les impôts, les transferts et les inégalités.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la politique budgétaire peut-elle influencer la distribution des revenus ?',
                        'choices' => [
                            'Les impôts et transferts modifient les revenus disponibles de différents ménages',
                            'Les impôts n’affectent jamais les ménages',
                            'Les transferts ne modifient jamais le revenu disponible',
                            'La distribution des revenus dépend uniquement du commerce extérieur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les impôts et les transferts peuvent modifier le revenu disponible de différents groupes de ménages.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique de redistribution ?',
                        'choices' => [
                            'Une politique qui modifie la répartition des ressources ou des revenus entre différents groupes',
                            'Une politique visant uniquement à augmenter les exportations',
                            'Une politique supprimant toute fiscalité',
                            'Une politique de change fixe',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique redistributive cherche à modifier la répartition des ressources ou des revenus.',
                    ],
                    [
                        'question' => 'Pourquoi les impôts progressifs peuvent-ils réduire certaines inégalités de revenu disponible ?',
                        'choices' => [
                            'Les ménages aux revenus plus élevés supportent généralement une charge fiscale proportionnellement plus importante selon le système considéré',
                            'Ils réduisent toujours le revenu des ménages pauvres davantage',
                            'Ils rendent tous les revenus identiques',
                            'Ils suppriment automatiquement toutes les dépenses publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un impôt progressif fait généralement peser une charge proportionnellement plus forte sur les revenus élevés.',
                    ],
                    [
                        'question' => 'Comment les transferts sociaux peuvent-ils réduire la pauvreté ?',
                        'choices' => [
                            'Ils peuvent augmenter le revenu disponible des ménages éligibles',
                            'Ils réduisent toujours le revenu des ménages bénéficiaires',
                            'Ils interdisent l’emploi',
                            'Ils augmentent automatiquement les prix de tous les biens',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les transferts peuvent augmenter les ressources disponibles des ménages éligibles.',
                    ],
                    [
                        'question' => 'Pourquoi l’aide publique doit-elle parfois être ciblée ?',
                        'choices' => [
                            'Le ciblage peut concentrer les ressources sur les ménages ou groupes ayant les besoins les plus importants',
                            'Pour empêcher les ménages d’utiliser les transferts',
                            'Pour rendre les dépenses publiques illimitées',
                            'Pour supprimer les différences de revenus instantanément',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le ciblage permet de concentrer les ressources disponibles sur certains bénéficiaires.',
                    ],
                    [
                        'question' => 'Pourquoi les politiques redistributives peuvent-elles avoir des effets sur les incitations au travail ?',
                        'choices' => [
                            'Les impôts et prestations peuvent modifier le gain financier associé à une heure de travail supplémentaire',
                            'Les politiques fiscales ne changent jamais les incitations',
                            'Le travail est indépendant de tout revenu disponible',
                            'Les prestations augmentent toujours l’offre de travail',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les impôts et prestations peuvent changer le revenu net associé à une heure de travail supplémentaire.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer égalité et équité en politique fiscale ?',
                        'choices' => [
                            'Une politique peut viser une distribution plus équitable sans rendre tous les revenus exactement identiques',
                            'Les deux notions sont toujours identiques',
                            'L’équité exige toujours des revenus identiques',
                            'L’égalité ne concerne jamais la politique publique',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’équité ne signifie pas nécessairement que tous les revenus doivent devenir identiques.',
                    ],
                    [
                        'question' => 'Pourquoi l’accès aux services publics peut-il compléter les transferts monétaires ?',
                        'choices' => [
                            'Des services comme l’éducation ou la santé peuvent améliorer directement les possibilités économiques des ménages',
                            'Les services publics n’ont aucune valeur distributive',
                            'Les transferts monétaires rendent tous les services inutiles',
                            'L’éducation publique augmente toujours les inégalités',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les services publics peuvent améliorer directement les possibilités économiques et le niveau de vie.',
                    ],
                    [
                        'question' => 'Pourquoi les politiques fiscales peuvent-elles créer des arbitrages entre redistribution et efficacité ?',
                        'choices' => [
                            'Certains impôts peuvent réduire les incitations à produire, investir ou travailler tout en poursuivant un objectif redistributif',
                            'Redistribution et efficacité sont toujours parfaitement compatibles',
                            'Les impôts n’affectent jamais les comportements',
                            'La redistribution réduit toujours la production à zéro',
                        ],
                        'correct' => 0,
                        'explanation' => 'Certains impôts peuvent modifier les comportements économiques tout en poursuivant un objectif de redistribution.',
                    ],
                    [
                        'question' => 'Pourquoi les politiques publiques doivent-elles tenir compte des effets sur différents groupes ?',
                        'choices' => [
                            'Une même mesure peut produire des coûts et bénéfices différents selon les revenus, secteurs ou situations des ménages',
                            'Toutes les politiques affectent tout le monde de la même manière',
                            'Les ménages ont toujours les mêmes revenus',
                            'Les effets distributifs n’ont aucune importance économique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une même politique peut affecter différemment les ménages selon leur revenu, leur secteur ou leur situation.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7
            // ============================================================
            [
                'title' => 'Fiscalité et comportement économique',
                'description' => 'Quiz débutant sur la fiscalité, les incitations, l’incidence fiscale et les externalités.',
                'questions' => [
                    [
                        'question' => 'Comment un impôt sur un produit peut-il affecter sa demande ?',
                        'choices' => [
                            'En augmentant son prix pour les consommateurs et en modifiant la quantité demandée',
                            'Il augmente toujours la quantité demandée',
                            'Il n’a jamais aucun effet sur les prix',
                            'Il rend automatiquement le produit gratuit',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une taxe peut augmenter le prix payé par les consommateurs et ainsi modifier la quantité demandée.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’incidence fiscale ?',
                        'choices' => [
                            'La manière dont le poids économique d’un impôt est finalement réparti entre acheteurs, vendeurs ou autres agents',
                            'Le montant légal de l’impôt uniquement',
                            'Le nombre de contribuables',
                            'Le niveau de dette publique',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’incidence fiscale concerne la manière dont la charge économique réelle de l’impôt est répartie.',
                    ],
                    [
                        'question' => 'Pourquoi l’incidence économique d’un impôt peut-elle différer de la personne légalement responsable de son paiement ?',
                        'choices' => [
                            'Les variations de prix et de salaires peuvent transférer une partie du coût de l’impôt à d’autres agents',
                            'La loi détermine toujours exactement qui supporte tout le coût économique',
                            'Les prix ne réagissent jamais aux taxes',
                            'Les consommateurs ne peuvent jamais supporter indirectement un impôt',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les prix et salaires peuvent ajuster la répartition économique de la charge fiscale.',
                    ],
                    [
                        'question' => 'Pourquoi l’élasticité de l’offre et de la demande est-elle importante pour l’incidence fiscale ?',
                        'choices' => [
                            'Elle influence la capacité des acheteurs et vendeurs à ajuster les quantités et donc à supporter une partie de la charge fiscale',
                            'Les élasticités n’ont aucun rapport avec les taxes',
                            'Une demande parfaitement rigide signifie toujours absence d’impôt',
                            'L’offre ne peut jamais s’adapter aux prix',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les élasticités déterminent la capacité des acheteurs et vendeurs à ajuster leurs comportements face à une taxe.',
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements taxent-ils parfois les produits nocifs pour la santé ?',
                        'choices' => [
                            'Pour intégrer certains coûts sociaux associés à leur consommation et générer des recettes publiques',
                            'Pour rendre ces produits toujours moins chers',
                            'Pour augmenter automatiquement leur consommation',
                            'Pour supprimer toute recette fiscale',
                        ],
                        'correct' => 0,
                        'explanation' => 'Ces taxes peuvent chercher à intégrer certains coûts sociaux tout en générant des recettes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une externalité négative ?',
                        'choices' => [
                            'Un coût imposé à d’autres personnes qui n’est pas entièrement pris en compte par le décideur privé',
                            'Un bénéfice privé uniquement',
                            'Un impôt direct',
                            'Une subvention aux exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une externalité négative impose un coût à des tiers qui n’est pas entièrement intégré dans la décision privée.',
                    ],
                    [
                        'question' => 'Pourquoi une taxe environnementale peut-elle être utilisée pour traiter une pollution ?',
                        'choices' => [
                            'Elle peut faire entrer une partie du coût social de la pollution dans les décisions privées',
                            'Elle augmente toujours la pollution',
                            'Elle garantit automatiquement zéro émission',
                            'Elle n’a aucun effet sur les comportements',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une taxe environnementale peut rapprocher le coût privé du coût social de la pollution.',
                    ],
                    [
                        'question' => 'Pourquoi un impôt sur le travail peut-il influencer l’offre de travail ?',
                        'choices' => [
                            'Il peut modifier le revenu net associé au travail et donc certaines incitations à travailler davantage',
                            'L’impôt ne change jamais le revenu net',
                            'Le travail est totalement indépendant du salaire net',
                            'Un impôt sur le travail augmente toujours l’offre de travail',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un impôt sur le travail modifie le revenu net et peut donc influencer les choix de travail.',
                    ],
                    [
                        'question' => 'Pourquoi certains gouvernements accordent-ils des crédits ou réductions fiscales à l’investissement ?',
                        'choices' => [
                            'Pour encourager certains investissements privés qu’ils considèrent comme économiquement souhaitables',
                            'Pour empêcher toute accumulation de capital',
                            'Pour augmenter automatiquement les impôts',
                            'Pour réduire toute activité entrepreneuriale',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les avantages fiscaux peuvent être utilisés pour stimuler certains investissements.',
                    ],
                    [
                        'question' => 'Pourquoi les avantages fiscaux peuvent-ils avoir un coût pour le budget public ?',
                        'choices' => [
                            'Ils réduisent potentiellement les recettes que l’État aurait perçues sans l’avantage fiscal',
                            'Ils augmentent toujours les recettes',
                            'Ils ne modifient jamais les recettes fiscales',
                            'Ils remplacent automatiquement toutes les dépenses publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un avantage fiscal réduit potentiellement les recettes publiques par rapport à l’absence de cet avantage.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8
            // ============================================================
            [
                'title' => 'Fiscalité, croissance et investissement',
                'description' => 'Quiz débutant sur les liens entre fiscalité, investissement, productivité et croissance économique.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la fiscalité peut-elle influencer l’investissement privé ?',
                        'choices' => [
                            'Elle peut modifier le rendement après impôt des projets d’investissement',
                            'Les taxes n’affectent jamais les rendements',
                            'L’investissement dépend uniquement de la population',
                            'Les entreprises ignorent toujours les coûts fiscaux',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les impôts peuvent modifier le rendement net attendu d’un projet d’investissement.',
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements peuvent-ils investir dans les infrastructures ?',
                        'choices' => [
                            'Parce que de bonnes infrastructures peuvent réduire certains coûts de production et améliorer la productivité',
                            'Parce que les infrastructures réduisent toujours la productivité',
                            'Parce qu’elles servent uniquement aux administrations',
                            'Parce qu’elles remplacent tous les investissements privés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les infrastructures peuvent réduire certains coûts et améliorer l’efficacité productive.',
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques d’éducation peuvent-elles favoriser la croissance à long terme ?',
                        'choices' => [
                            'Elles peuvent accroître les compétences et la productivité de la population',
                            'L’éducation réduit toujours la productivité',
                            'Les compétences n’ont aucun lien avec la production',
                            'L’éducation empêche toute innovation',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une meilleure éducation peut accroître les compétences et la productivité du capital humain.',
                    ],
                    [
                        'question' => 'Pourquoi la qualité des institutions fiscales peut-elle influencer l’économie ?',
                        'choices' => [
                            'Une administration fiscale efficace peut réduire la fraude, améliorer les recettes et rendre les règles plus prévisibles',
                            'Les institutions fiscales n’ont aucun rôle',
                            'Une administration efficace réduit toujours les recettes',
                            'La prévisibilité fiscale n’a aucun effet sur les entreprises',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une administration efficace peut améliorer la collecte et rendre les règles fiscales plus prévisibles.',
                    ],
                    [
                        'question' => 'Pourquoi la stabilité fiscale peut-elle être importante pour les investisseurs ?',
                        'choices' => [
                            'Des règles prévisibles facilitent l’évaluation des coûts et rendements futurs des projets',
                            'Les investisseurs ignorent toujours la fiscalité future',
                            'Les investisseurs ne calculent jamais leurs coûts',
                            'Les règles fiscales sont sans lien avec la rentabilité',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des règles stables facilitent la prévision des coûts et rendements futurs.',
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques improductives peuvent-elles devenir un problème à long terme ?',
                        'choices' => [
                            'Elles consomment des ressources sans générer suffisamment de bénéfices économiques ou sociaux',
                            'Toute dépense publique augmente nécessairement la productivité',
                            'Les ressources publiques sont illimitées',
                            'L’efficacité des dépenses n’a aucune importance',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dépense improductive consomme des ressources sans générer suffisamment de bénéfices en retour.',
                    ],
                    [
                        'question' => 'Pourquoi l’endettement public peut-il financer un investissement productif ?',
                        'choices' => [
                            'L’emprunt peut financer aujourd’hui une infrastructure dont les bénéfices économiques s’étendent sur plusieurs années',
                            'L’endettement ne peut jamais financer un investissement',
                            'Toute dette publique sert uniquement à la consommation',
                            'Les investissements publics ne génèrent jamais de bénéfices',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’emprunt peut financer un actif durable dont les bénéfices se produisent sur plusieurs années.',
                    ],
                    [
                        'question' => 'Pourquoi le coût de financement public est-il important pour les investissements de l’État ?',
                        'choices' => [
                            'Des taux d’intérêt élevés augmentent le coût total du financement d’un projet public',
                            'Les projets publics sont toujours gratuits à financer',
                            'Les taux n’affectent jamais la dette publique',
                            'Un taux élevé réduit automatiquement le coût des emprunts',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des taux d’intérêt plus élevés augmentent le coût du financement par emprunt.',
                    ],
                    [
                        'question' => 'Pourquoi une forte pression fiscale peut-elle soulever des questions d’efficacité économique ?',
                        'choices' => [
                            'Selon la structure des impôts, elle peut modifier les incitations à travailler, investir ou entreprendre',
                            'Les impôts n’affectent jamais les décisions économiques',
                            'La fiscalité augmente toujours tous les investissements',
                            'Les entreprises ne tiennent jamais compte des impôts',
                        ],
                        'correct' => 0,
                        'explanation' => 'Certains impôts peuvent modifier les incitations économiques à travailler, investir ou entreprendre.',
                    ],
                    [
                        'question' => 'Pourquoi les recettes fiscales doivent-elles rester suffisamment stables pour financer les services publics ?',
                        'choices' => [
                            'Des recettes prévisibles facilitent la planification et le financement des dépenses publiques essentielles',
                            'Les recettes fiscales n’ont aucun lien avec les services publics',
                            'Les dépenses publiques peuvent toujours être financées sans recettes',
                            'La stabilité des recettes réduit toujours l’investissement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des recettes prévisibles facilitent la planification et le financement des services publics.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 9
            // ============================================================
            [
                'title' => 'Finances publiques et gestion économique',
                'description' => 'Quiz débutant sur la gestion des finances publiques, les priorités budgétaires et l’évaluation des politiques.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un gouvernement doit-il établir des priorités entre différentes dépenses publiques ?',
                        'choices' => [
                            'Les ressources budgétaires sont limitées et plusieurs objectifs publics sont en concurrence',
                            'Les recettes publiques sont infinies',
                            'Toutes les dépenses sont automatiquement financées',
                            'Les dépenses publiques ne nécessitent aucune ressource',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les ressources budgétaires sont limitées et doivent être réparties entre différentes priorités.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’efficacité allocative des dépenses publiques ?',
                        'choices' => [
                            'La capacité à orienter les ressources vers les usages produisant la plus grande valeur sociale possible selon les objectifs retenus',
                            'La capacité à augmenter toutes les dépenses simultanément',
                            'La capacité à supprimer tous les impôts',
                            'La capacité à maximiser uniquement les salaires publics',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’efficacité allocative consiste à utiliser les ressources là où elles produisent le plus de valeur sociale selon les objectifs.',
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements réalisent-ils parfois une analyse coûts-bénéfices des projets publics ?',
                        'choices' => [
                            'Pour comparer les ressources nécessaires avec les bénéfices économiques et sociaux attendus',
                            'Pour garantir qu’un projet est toujours rentable financièrement',
                            'Pour éliminer tout risque futur',
                            'Pour calculer uniquement les recettes fiscales',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’analyse coûts-bénéfices compare les coûts d’un projet avec les bénéfices attendus.',
                    ],
                    [
                        'question' => 'Pourquoi l’État peut-il subventionner certaines activités ?',
                        'choices' => [
                            'Pour encourager des activités présentant des bénéfices sociaux ou économiques que le marché peut sous-produire',
                            'Pour réduire toujours la production',
                            'Pour supprimer toute concurrence',
                            'Pour augmenter automatiquement le chômage',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une subvention peut soutenir une activité qui génère des bénéfices sociaux ou qui serait insuffisamment produite par le marché.',
                    ],
                    [
                        'question' => 'Pourquoi les subventions doivent-elles être évaluées régulièrement ?',
                        'choices' => [
                            'Une subvention peut devenir coûteuse ou perdre sa justification économique lorsque les conditions changent',
                            'Toute subvention devient nécessairement plus efficace avec le temps',
                            'Les coûts budgétaires sont toujours nuls',
                            'Les politiques publiques ne doivent jamais être réévaluées',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique peut devenir moins pertinente ou plus coûteuse lorsque les conditions économiques changent.',
                    ],
                    [
                        'question' => 'Pourquoi la lutte contre la fraude fiscale est-elle importante pour les finances publiques ?',
                        'choices' => [
                            'Elle peut améliorer les recettes disponibles et renforcer l’équité du système fiscal',
                            'Elle réduit toujours les recettes publiques',
                            'Elle n’a aucun effet sur les contribuables',
                            'Elle remplace toutes les dépenses publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Réduire la fraude peut augmenter les recettes et améliorer le respect des règles fiscales.',
                    ],
                    [
                        'question' => 'Pourquoi la transparence budgétaire est-elle importante ?',
                        'choices' => [
                            'Elle permet aux citoyens et institutions de mieux comprendre les recettes, dépenses et choix publics',
                            'Elle empêche tout contrôle des finances publiques',
                            'Elle réduit automatiquement les recettes fiscales',
                            'Elle rend les budgets impossibles à comparer',
                        ],
                        'correct' => 0,
                        'explanation' => 'La transparence améliore la compréhension et le contrôle des finances publiques.',
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement surveille-t-il son solde budgétaire ?',
                        'choices' => [
                            'Pour suivre l’évolution de ses recettes, dépenses, besoins de financement et dette',
                            'Pour mesurer uniquement les exportations',
                            'Pour déterminer les bénéfices des entreprises privées',
                            'Pour supprimer la politique monétaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le solde budgétaire aide à suivre les recettes, les dépenses et les besoins de financement.',
                    ],
                    [
                        'question' => 'Pourquoi les règles budgétaires peuvent-elles être utilisées ?',
                        'choices' => [
                            'Elles peuvent encadrer certains déficits, dépenses ou niveaux de dette afin de renforcer la discipline budgétaire',
                            'Elles garantissent que tous les déficits sont toujours souhaitables',
                            'Elles suppriment toute flexibilité budgétaire dans tous les cas',
                            'Elles remplacent les impôts',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les règles budgétaires peuvent encadrer certains déficits, dépenses ou niveaux d’endettement.',
                    ],
                    [
                        'question' => 'Pourquoi une bonne gestion budgétaire doit-elle considérer le long terme ?',
                        'choices' => [
                            'Les décisions actuelles peuvent affecter la dette, les investissements, les impôts et les services publics futurs',
                            'Les décisions budgétaires n’ont jamais d’effet futur',
                            'La dette disparaît automatiquement chaque année',
                            'Les investissements publics n’ont aucun effet sur les générations futures',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les décisions budgétaires actuelles peuvent avoir des conséquences sur les ressources et les services futurs.',
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
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
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

                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

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