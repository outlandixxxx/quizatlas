```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FiscalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'fiscal-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux de la politique budgétaire',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la politique budgétaire ?',
                        'answers' => [
                            ['answer' => 'L’utilisation des dépenses publiques et des impôts pour influencer l’économie', 'iscorrect' => true],
                            ['answer' => 'La gestion des taux de change uniquement', 'iscorrect' => false],
                            ['answer' => 'La politique de crédit des banques commerciales uniquement', 'iscorrect' => false],
                            ['answer' => 'La fixation privée des salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel acteur conduit principalement la politique budgétaire ?',
                        'answers' => [
                            ['answer' => 'Les autorités publiques, notamment le gouvernement et le parlement selon le système institutionnel', 'iscorrect' => true],
                            ['answer' => 'Les ménages uniquement', 'iscorrect' => false],
                            ['answer' => 'Les banques commerciales uniquement', 'iscorrect' => false],
                            ['answer' => 'Les entreprises étrangères uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépense publique ?',
                        'answers' => [
                            ['answer' => 'Une dépense effectuée par une administration publique pour financer des biens, services, transferts ou investissements', 'iscorrect' => true],
                            ['answer' => 'Une dépense privée d’un ménage', 'iscorrect' => false],
                            ['answer' => 'Une exportation privée', 'iscorrect' => false],
                            ['answer' => 'Une transaction entre deux consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt ?',
                        'answers' => [
                            ['answer' => 'Un prélèvement obligatoire effectué par les pouvoirs publics', 'iscorrect' => true],
                            ['answer' => 'Un prêt volontaire accordé à une entreprise', 'iscorrect' => false],
                            ['answer' => 'Une exportation de services', 'iscorrect' => false],
                            ['answer' => 'Une subvention versée aux ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements utilisent-ils la politique budgétaire ?',
                        'answers' => [
                            ['answer' => 'Pour financer les services publics et influencer notamment l’activité économique et la redistribution', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toute activité privée', 'iscorrect' => false],
                            ['answer' => 'Pour fixer tous les prix du marché', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute épargne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un budget public ?',
                        'answers' => [
                            ['answer' => 'Un document présentant les recettes et dépenses prévues d’une administration publique sur une période donnée', 'iscorrect' => true],
                            ['answer' => 'Un relevé uniquement des exportations', 'iscorrect' => false],
                            ['answer' => 'Une liste des salaires privés', 'iscorrect' => false],
                            ['answer' => 'Un registre des prix mondiaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques peuvent-elles influencer la demande globale ?',
                        'answers' => [
                            ['answer' => 'Elles constituent directement une composante de la demande de biens et services', 'iscorrect' => true],
                            ['answer' => 'Elles n’ont aucun lien avec l’activité économique', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent toujours la production', 'iscorrect' => false],
                            ['answer' => 'Elles concernent uniquement les marchés étrangers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut provoquer une baisse des impôts, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter le revenu disponible de certains ménages ou entreprises', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le revenu disponible', 'iscorrect' => false],
                            ['answer' => 'Elle interdit la consommation', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un transfert public ?',
                        'answers' => [
                            ['answer' => 'Un paiement public destiné à certains ménages ou agents sans achat direct de bien ou service en contrepartie', 'iscorrect' => true],
                            ['answer' => 'Un achat public d’équipement', 'iscorrect' => false],
                            ['answer' => 'Une exportation de marchandises', 'iscorrect' => false],
                            ['answer' => 'Un prêt bancaire privé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’État finance-t-il certaines infrastructures ?',
                        'answers' => [
                            ['answer' => 'Parce qu’elles peuvent fournir des services utiles à l’économie et soutenir la capacité productive', 'iscorrect' => true],
                            ['answer' => 'Parce que les infrastructures ne servent jamais à la population', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer tous les investissements privés', 'iscorrect' => false],
                            ['answer' => 'Pour réduire nécessairement la productivité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Recettes publiques et fiscalité',
                'questions' => [
                    [
                        'question' => 'Quelle est une source importante de recettes publiques ?',
                        'answers' => [
                            ['answer' => 'Les impôts et autres prélèvements obligatoires', 'iscorrect' => true],
                            ['answer' => 'Uniquement les exportations privées', 'iscorrect' => false],
                            ['answer' => 'Uniquement les dons des ménages', 'iscorrect' => false],
                            ['answer' => 'Uniquement les bénéfices des banques commerciales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt sur le revenu ?',
                        'answers' => [
                            ['answer' => 'Un prélèvement calculé sur certains revenus des personnes ou ménages', 'iscorrect' => true],
                            ['answer' => 'Un prélèvement uniquement sur les importations', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur les infrastructures', 'iscorrect' => false],
                            ['answer' => 'Une subvention aux entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt sur les bénéfices des entreprises ?',
                        'answers' => [
                            ['answer' => 'Un prélèvement sur les bénéfices imposables des entreprises selon les règles fiscales applicables', 'iscorrect' => true],
                            ['answer' => 'Une taxe uniquement sur les salaires des ménages', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur les exportations seulement', 'iscorrect' => false],
                            ['answer' => 'Une subvention publique aux entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une taxe sur la consommation ?',
                        'answers' => [
                            ['answer' => 'Un prélèvement appliqué à l’achat ou à la consommation de certains biens et services', 'iscorrect' => true],
                            ['answer' => 'Un impôt uniquement sur les salaires', 'iscorrect' => false],
                            ['answer' => 'Une taxe uniquement sur les bénéfices', 'iscorrect' => false],
                            ['answer' => 'Une cotisation volontaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la TVA dans de nombreux systèmes fiscaux ?',
                        'answers' => [
                            ['answer' => 'Une taxe sur la valeur ajoutée collectée à différents stades de la production et de la distribution', 'iscorrect' => true],
                            ['answer' => 'Une taxe uniquement sur les exportations', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur les salaires uniquement', 'iscorrect' => false],
                            ['answer' => 'Une subvention à la consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt direct ?',
                        'answers' => [
                            ['answer' => 'Un impôt prélevé directement sur le revenu, le patrimoine ou une base fiscale liée au contribuable', 'iscorrect' => true],
                            ['answer' => 'Une taxe uniquement sur les biens importés', 'iscorrect' => false],
                            ['answer' => 'Une subvention publique', 'iscorrect' => false],
                            ['answer' => 'Une dépense d’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt indirect ?',
                        'answers' => [
                            ['answer' => 'Un prélèvement lié notamment à la consommation ou aux transactions de biens et services', 'iscorrect' => true],
                            ['answer' => 'Un prélèvement uniquement sur le revenu salarial', 'iscorrect' => false],
                            ['answer' => 'Un transfert social', 'iscorrect' => false],
                            ['answer' => 'Un investissement public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un système fiscal progressif ?',
                        'answers' => [
                            ['answer' => 'La part du revenu consacrée à l’impôt augmente lorsque le revenu augmente, selon le barème applicable', 'iscorrect' => true],
                            ['answer' => 'Tout le monde paie exactement le même montant', 'iscorrect' => false],
                            ['answer' => 'Les personnes à revenu élevé paient toujours moins en taux effectif', 'iscorrect' => false],
                            ['answer' => 'Aucun impôt n’est appliqué aux revenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt proportionnel ?',
                        'answers' => [
                            ['answer' => 'Un impôt dont le taux appliqué à la base imposable reste constant selon le barème considéré', 'iscorrect' => true],
                            ['answer' => 'Un impôt dont le taux augmente automatiquement avec le revenu', 'iscorrect' => false],
                            ['answer' => 'Un impôt sans aucune règle', 'iscorrect' => false],
                            ['answer' => 'Une taxe qui varie uniquement avec les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements cherchent-ils à élargir leur base fiscale ?',
                        'answers' => [
                            ['answer' => 'Une base plus large peut permettre de financer les dépenses publiques avec moins de dépendance à un nombre limité de contribuables ou secteurs', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toute recette fiscale', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute activité économique', 'iscorrect' => false],
                            ['answer' => 'Pour réduire automatiquement tous les impôts à zéro', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Budget, déficit et dette publique',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un déficit budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une situation où les dépenses publiques dépassent les recettes publiques sur une période donnée', 'iscorrect' => true],
                            ['answer' => 'Une situation où les recettes dépassent toujours les dépenses', 'iscorrect' => false],
                            ['answer' => 'Une baisse obligatoire des impôts', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un excédent budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une situation où les recettes publiques dépassent les dépenses sur une période donnée', 'iscorrect' => true],
                            ['answer' => 'Une situation où les dépenses dépassent les recettes', 'iscorrect' => false],
                            ['answer' => 'Une baisse de la production privée', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique de la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment un déficit budgétaire peut-il être financé ?',
                        'answers' => [
                            ['answer' => 'Notamment par l’émission de dette publique ou d’autres mécanismes de financement prévus par le cadre institutionnel', 'iscorrect' => true],
                            ['answer' => 'Uniquement par les exportations', 'iscorrect' => false],
                            ['answer' => 'Uniquement par la consommation des ménages', 'iscorrect' => false],
                            ['answer' => 'Sans aucune source de financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la dette publique ?',
                        'answers' => [
                            ['answer' => 'L’ensemble des engagements financiers accumulés des administrations publiques envers leurs créanciers', 'iscorrect' => true],
                            ['answer' => 'Le total des dettes des ménages', 'iscorrect' => false],
                            ['answer' => 'Le montant des exportations', 'iscorrect' => false],
                            ['answer' => 'Le capital des banques privées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre déficit public et dette publique ?',
                        'answers' => [
                            ['answer' => 'Le déficit est un flux sur une période, tandis que la dette est un stock accumulé à une date donnée', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont exactement identiques', 'iscorrect' => false],
                            ['answer' => 'La dette est toujours un flux annuel', 'iscorrect' => false],
                            ['answer' => 'Le déficit est toujours un stock', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’État paie-t-il des intérêts sur une partie de sa dette ?',
                        'answers' => [
                            ['answer' => 'Les créanciers demandent généralement une rémunération pour les fonds prêtés à l’État', 'iscorrect' => true],
                            ['answer' => 'Les intérêts sont toujours versés aux ménages gratuitement', 'iscorrect' => false],
                            ['answer' => 'La dette publique n’a jamais de coût financier', 'iscorrect' => false],
                            ['answer' => 'Les intérêts sont des impôts privés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le niveau de dette publique est-il souvent rapporté au PIB ?',
                        'answers' => [
                            ['answer' => 'Le ratio dette/PIB donne une indication de la taille de la dette par rapport à la capacité économique de l’État', 'iscorrect' => true],
                            ['answer' => 'Parce que la dette et le PIB sont toujours la même chose', 'iscorrect' => false],
                            ['answer' => 'Pour mesurer directement le chômage', 'iscorrect' => false],
                            ['answer' => 'Pour calculer uniquement les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette publique élevée peut-elle devenir préoccupante ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter la charge d’intérêts et réduire la marge de manœuvre budgétaire, surtout si le financement devient plus coûteux', 'iscorrect' => true],
                            ['answer' => 'Une dette élevée garantit toujours une croissance forte', 'iscorrect' => false],
                            ['answer' => 'La dette publique n’a jamais de coût', 'iscorrect' => false],
                            ['answer' => 'Une dette élevée supprime automatiquement les impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance économique peut-elle faciliter la gestion d’une dette publique ?',
                        'answers' => [
                            ['answer' => 'Une économie en croissance peut générer davantage de revenus et augmenter la taille du PIB utilisé au dénominateur du ratio dette/PIB', 'iscorrect' => true],
                            ['answer' => 'La croissance réduit toujours les recettes publiques', 'iscorrect' => false],
                            ['answer' => 'La croissance interdit tout emprunt public', 'iscorrect' => false],
                            ['answer' => 'Le PIB n’a aucun lien avec la dette relative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il chercher à réduire progressivement son déficit ?',
                        'answers' => [
                            ['answer' => 'Pour limiter l’accumulation de dette et préserver sa capacité future de financement', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toute dépense publique', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher tout investissement public', 'iscorrect' => false],
                            ['answer' => 'Pour réduire automatiquement les exportations', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dépenses publiques et biens collectifs',
                'questions' => [
                    [
                        'question' => Pourquoi l’État fournit-il certains biens et services collectifs ?',
                        'answers' => [
                            ['answer' => 'Parce que certains biens présentent des caractéristiques qui peuvent rendre leur fourniture privée insuffisante ou difficile à organiser efficacement', 'iscorrect' => true],
                            ['answer' => 'Parce que les marchés privés n’existent jamais', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute consommation', 'iscorrect' => false],
                            ['answer' => 'Parce que tous les biens sont nécessairement publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien public pur dans la théorie économique ?',
                        'answers' => [
                            ['answer' => 'Un bien caractérisé notamment par la non-rivalité et la difficulté d’exclusion', 'iscorrect' => true],
                            ['answer' => 'Un bien vendu uniquement dans les supermarchés', 'iscorrect' => false],
                            ['answer' => 'Un bien nécessairement gratuit à produire', 'iscorrect' => false],
                            ['answer' => 'Un bien produit uniquement par une entreprise privée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la non-rivalité ?',
                        'answers' => [
                            ['answer' => 'La consommation par une personne ne réduit pas nécessairement la possibilité pour une autre personne de consommer le même service', 'iscorrect' => true],
                            ['answer' => 'Une personne peut toujours empêcher les autres de consommer', 'iscorrect' => false],
                            ['answer' => 'Le bien est toujours rare', 'iscorrect' => false],
                            ['answer' => 'Le bien doit être importé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la non-exclusion ?',
                        'answers' => [
                            ['answer' => 'Il est difficile ou coûteux d’empêcher certains individus d’utiliser le bien', 'iscorrect' => true],
                            ['answer' => 'Seuls les contribuables riches peuvent utiliser le bien', 'iscorrect' => false],
                            ['answer' => 'Le bien ne peut être produit', 'iscorrect' => false],
                            ['answer' => 'L’État interdit toute utilisation du bien', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les routes et infrastructures publiques peuvent-elles être financées par l’impôt ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent produire des bénéfices collectifs qui ne sont pas toujours entièrement capturés par un paiement individuel', 'iscorrect' => true],
                            ['answer' => 'Elles ne servent jamais aux entreprises', 'iscorrect' => false],
                            ['answer' => 'Les impôts n’ont aucun lien avec les infrastructures', 'iscorrect' => false],
                            ['answer' => 'Les routes sont toujours des biens privés purs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépense publique d’investissement ?',
                        'answers' => [
                            ['answer' => 'Une dépense destinée à créer, améliorer ou maintenir des actifs durables comme certaines infrastructures', 'iscorrect' => true],
                            ['answer' => 'Une dépense consacrée uniquement aux salaires courants', 'iscorrect' => false],
                            ['answer' => 'Un impôt indirect', 'iscorrect' => false],
                            ['answer' => 'Une exportation publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’éducation publique peut-elle être soutenue par l’État ?',
                        'answers' => [
                            ['answer' => 'Elle peut produire des bénéfices privés et des effets positifs pour l’ensemble de la société', 'iscorrect' => true],
                            ['answer' => 'L’éducation n’a aucune valeur économique', 'iscorrect' => false],
                            ['answer' => 'L’État interdit toute formation privée', 'iscorrect' => false],
                            ['answer' => 'L’éducation réduit toujours la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la santé publique peut-elle faire partie des dépenses publiques ?',
                        'answers' => [
                            ['answer' => 'La santé produit des bénéfices individuels et collectifs, et l’accès peut être influencé par des considérations sociales', 'iscorrect' => true],
                            ['answer' => 'La santé n’a aucun effet sur la société', 'iscorrect' => false],
                            ['answer' => 'Les services de santé sont toujours gratuits à produire', 'iscorrect' => false],
                            ['answer' => 'Les dépenses de santé n’ont aucun lien avec le bien-être', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques de recherche peuvent-elles soutenir l’innovation ?',
                        'answers' => [
                            ['answer' => 'Certaines connaissances génèrent des bénéfices qui dépassent l’entreprise ou l’organisme qui finance initialement la recherche', 'iscorrect' => true],
                            ['answer' => 'La recherche ne produit jamais de nouvelles connaissances', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne bénéficient jamais de la recherche publique', 'iscorrect' => false],
                            ['answer' => 'L’innovation est indépendante de toute connaissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il évaluer l’efficacité des dépenses publiques ?',
                        'answers' => [
                            ['answer' => 'Les ressources publiques sont limitées et doivent être utilisées de manière aussi utile et efficace que possible', 'iscorrect' => true],
                            ['answer' => 'Les ressources publiques sont infinies', 'iscorrect' => false],
                            ['answer' => 'Toute dépense publique est automatiquement efficace', 'iscorrect' => false],
                            ['answer' => 'L’efficacité n’a aucun rôle dans la gestion publique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique budgétaire et cycle économique',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire expansionniste ?',
                        'answers' => [
                            ['answer' => 'Une politique qui cherche généralement à soutenir la demande par davantage de dépenses publiques ou moins d’impôts', 'iscorrect' => true],
                            ['answer' => 'Une politique qui réduit toujours les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Une politique qui augmente obligatoirement tous les impôts', 'iscorrect' => false],
                            ['answer' => 'Une politique qui interdit les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire restrictive ?',
                        'answers' => [
                            ['answer' => 'Une politique visant généralement à réduire la demande publique nette par une baisse des dépenses, une hausse des impôts ou les deux', 'iscorrect' => true],
                            ['answer' => 'Une politique qui augmente toujours les dépenses', 'iscorrect' => false],
                            ['answer' => 'Une politique qui réduit nécessairement tous les impôts', 'iscorrect' => false],
                            ['answer' => 'Une politique qui supprime la dette privée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il utiliser une politique budgétaire expansionniste pendant une récession ?',
                        'answers' => [
                            ['answer' => 'Pour soutenir la demande globale lorsque l’activité économique est insuffisante', 'iscorrect' => true],
                            ['answer' => 'Pour réduire systématiquement la consommation', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement le chômage', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire restrictive peut-elle être utilisée lorsque l’économie est en forte surchauffe ?',
                        'answers' => [
                            ['answer' => 'Elle peut contribuer à réduire une demande excessive et certaines pressions inflationnistes', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours la demande globale', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les capacités productives', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours les recettes publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un stabilisateur automatique ?',
                        'answers' => [
                            ['answer' => 'Un mécanisme budgétaire qui atténue automatiquement les fluctuations économiques sans nouvelle décision discrétionnaire', 'iscorrect' => true],
                            ['answer' => 'Une banque centrale indépendante', 'iscorrect' => false],
                            ['answer' => 'Un taux de change fixe', 'iscorrect' => false],
                            ['answer' => 'Une taxe toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple de stabilisateur automatique ?',
                        'answers' => [
                            ['answer' => 'Un impôt sur le revenu dont les recettes diminuent lorsque les revenus baissent', 'iscorrect' => true],
                            ['answer' => 'Une hausse exceptionnelle de taxe votée après une crise', 'iscorrect' => false],
                            ['answer' => 'Une subvention décidée chaque mois par le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Une modification ponctuelle des tarifs douaniers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prestations de chômage peuvent-elles agir comme stabilisateur automatique ?',
                        'answers' => [
                            ['answer' => 'Elles augmentent généralement lorsque le chômage augmente, soutenant une partie du revenu des ménages', 'iscorrect' => true],
                            ['answer' => 'Elles diminuent toujours pendant une récession', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent directement les exportations', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute baisse du chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le multiplicateur budgétaire dans sa définition simple ?',
                        'answers' => [
                            ['answer' => 'La variation de l’activité économique associée à une variation initiale d’une dépense ou d’un impôt', 'iscorrect' => true],
                            ['answer' => 'Le rapport entre dette publique et population', 'iscorrect' => false],
                            ['answer' => 'Le nombre de ministères dans un gouvernement', 'iscorrect' => false],
                            ['answer' => 'Le taux d’inflation annuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur budgétaire peut-il varier selon les circonstances ?',
                        'answers' => [
                            ['answer' => 'Il dépend notamment de la situation économique, de la politique monétaire, de l’épargne et du comportement des agents', 'iscorrect' => true],
                            ['answer' => 'Il est toujours exactement égal à 1', 'iscorrect' => false],
                            ['answer' => 'Il est indépendant de la conjoncture', 'iscorrect' => false],
                            ['answer' => 'Il dépend uniquement du nombre d’habitants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire peut-elle avoir des délais d’effet ?',
                        'answers' => [
                            ['answer' => 'Les décisions publiques doivent être prises et mises en œuvre avant que leurs effets économiques se transmettent pleinement', 'iscorrect' => true],
                            ['answer' => 'Les dépenses publiques ont toujours un effet instantané', 'iscorrect' => false],
                            ['answer' => 'Les ménages ignorent toujours les politiques publiques', 'iscorrect' => false],
                            ['answer' => 'Les entreprises n’adaptent jamais leur comportement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Redistribution et inégalités',
                'questions' => [
                    [
                        'question' => Pourquoi la politique budgétaire peut-elle influencer la distribution des revenus ?',
                        'answers' => [
                            ['answer' => 'Les impôts et transferts modifient les revenus disponibles de différents ménages', 'iscorrect' => true],
                            ['answer' => 'Les impôts n’affectent jamais les ménages', 'iscorrect' => false],
                            ['answer' => 'Les transferts ne modifient jamais le revenu disponible', 'iscorrect' => false],
                            ['answer' => 'La distribution des revenus dépend uniquement du commerce extérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique de redistribution ?',
                        'answers' => [
                            ['answer' => 'Une politique qui modifie la répartition des ressources ou des revenus entre différents groupes', 'iscorrect' => true],
                            ['answer' => 'Une politique visant uniquement à augmenter les exportations', 'iscorrect' => false],
                            ['answer' => 'Une politique supprimant toute fiscalité', 'iscorrect' => false],
                            ['answer' => 'Une politique de change fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les impôts progressifs peuvent-ils réduire certaines inégalités de revenu disponible ?',
                        'answers' => [
                            ['answer' => 'Les ménages aux revenus plus élevés supportent généralement une charge fiscale proportionnellement plus importante selon le système considéré', 'iscorrect' => true],
                            ['answer' => 'Ils réduisent toujours le revenu des ménages pauvres davantage', 'iscorrect' => false],
                            ['answer' => 'Ils rendent tous les revenus identiques', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment automatiquement toutes les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment les transferts sociaux peuvent-ils réduire la pauvreté ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent augmenter le revenu disponible des ménages éligibles', 'iscorrect' => true],
                            ['answer' => 'Ils réduisent toujours le revenu des ménages bénéficiaires', 'iscorrect' => false],
                            ['answer' => 'Ils interdisent l’emploi', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent automatiquement les prix de tous les biens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’aide publique doit-elle parfois être ciblée ?',
                        'answers' => [
                            ['answer' => 'Le ciblage peut concentrer les ressources sur les ménages ou groupes ayant les besoins les plus importants', 'iscorrect' => true],
                            ['answer' => 'Pour empêcher les ménages d’utiliser les transferts', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les dépenses publiques illimitées', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les différences de revenus instantanément', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les politiques redistributives peuvent-elles avoir des effets sur les incitations au travail ?',
                        'answers' => [
                            ['answer' => 'Les impôts et prestations peuvent modifier le gain financier associé à une heure de travail supplémentaire', 'iscorrect' => true],
                            ['answer' => 'Les politiques fiscales ne changent jamais les incitations', 'iscorrect' => false],
                            ['answer' => 'Le travail est indépendant de tout revenu disponible', 'iscorrect' => false],
                            ['answer' => 'Les prestations augmentent toujours l’offre de travail', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer égalité et équité en politique fiscale ?',
                        'answers' => [
                            ['answer' => 'Une politique peut viser une distribution plus équitable sans rendre tous les revenus exactement identiques', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'L’équité exige toujours des revenus identiques', 'iscorrect' => false],
                            ['answer' => 'L’égalité ne concerne jamais la politique publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’accès aux services publics peut-il compléter les transferts monétaires ?',
                        'answers' => [
                            ['answer' => 'Des services comme l’éducation ou la santé peuvent améliorer directement les possibilités économiques des ménages', 'iscorrect' => true],
                            ['answer' => 'Les services publics n’ont aucune valeur distributive', 'iscorrect' => false],
                            ['answer' => 'Les transferts monétaires rendent tous les services inutiles', 'iscorrect' => false],
                            ['answer' => 'L’éducation publique augmente toujours les inégalités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les politiques fiscales peuvent-elles créer des arbitrages entre redistribution et efficacité ?',
                        'answers' => [
                            ['answer' => 'Certains impôts peuvent réduire les incitations à produire, investir ou travailler tout en poursuivant un objectif redistributif', 'iscorrect' => true],
                            ['answer' => 'Redistribution et efficacité sont toujours parfaitement compatibles', 'iscorrect' => false],
                            ['answer' => 'Les impôts n’affectent jamais les comportements', 'iscorrect' => false],
                            ['answer' => 'La redistribution réduit toujours la production à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les politiques publiques doivent-elles tenir compte des effets sur différents groupes ?',
                        'answers' => [
                            ['answer' => 'Une même mesure peut produire des coûts et bénéfices différents selon les revenus, secteurs ou situations des ménages', 'iscorrect' => true],
                            ['answer' => 'Toutes les politiques affectent tout le monde de la même manière', 'iscorrect' => false],
                            ['answer' => 'Les ménages ont toujours les mêmes revenus', 'iscorrect' => false],
                            ['answer' => 'Les effets distributifs n’ont aucune importance économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fiscalité et comportement économique',
                'questions' => [
                    [
                        'question' => Comment un impôt sur un produit peut-il affecter sa demande ?',
                        'answers' => [
                            ['answer' => 'En augmentant son prix pour les consommateurs et en modifiant la quantité demandée', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours la quantité demandée', 'iscorrect' => false],
                            ['answer' => 'Il n’a jamais aucun effet sur les prix', 'iscorrect' => false],
                            ['answer' => 'Il rend automatiquement le produit gratuit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’incidence fiscale ?',
                        'answers' => [
                            ['answer' => 'La manière dont le poids économique d’un impôt est finalement réparti entre acheteurs, vendeurs ou autres agents', 'iscorrect' => true],
                            ['answer' => 'Le montant légal de l’impôt uniquement', 'iscorrect' => false],
                            ['answer' => 'Le nombre de contribuables', 'iscorrect' => false],
                            ['answer' => 'Le niveau de dette publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’incidence économique d’un impôt peut-elle différer de la personne légalement responsable de son paiement ?',
                        'answers' => [
                            ['answer' => 'Les variations de prix et de salaires peuvent transférer une partie du coût de l’impôt à d’autres agents', 'iscorrect' => true],
                            ['answer' => 'La loi détermine toujours exactement qui supporte tout le coût économique', 'iscorrect' => false],
                            ['answer' => 'Les prix ne réagissent jamais aux taxes', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne peuvent jamais supporter indirectement un impôt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’élasticité de l’offre et de la demande est-elle importante pour l’incidence fiscale ?',
                        'answers' => [
                            ['answer' => 'Elle influence la capacité des acheteurs et vendeurs à ajuster les quantités et donc à supporter une partie de la charge fiscale', 'iscorrect' => true],
                            ['answer' => 'Les élasticités n’ont aucun rapport avec les taxes', 'iscorrect' => false],
                            ['answer' => 'Une demande parfaitement rigide signifie toujours absence d’impôt', 'iscorrect' => false],
                            ['answer' => 'L’offre ne peut jamais s’adapter aux prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les gouvernements taxent-ils parfois les produits nocifs pour la santé ?',
                        'answers' => [
                            ['answer' => 'Pour intégrer certains coûts sociaux associés à leur consommation et générer des recettes publiques', 'iscorrect' => true],
                            ['answer' => 'Pour rendre ces produits toujours moins chers', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement leur consommation', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute recette fiscale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une externalité négative ?',
                        'answers' => [
                            ['answer' => 'Un coût imposé à d’autres personnes qui n’est pas entièrement pris en compte par le décideur privé', 'iscorrect' => true],
                            ['answer' => 'Un bénéfice privé uniquement', 'iscorrect' => false],
                            ['answer' => 'Un impôt direct', 'iscorrect' => false],
                            ['answer' => 'Une subvention aux exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une taxe environnementale peut-elle être utilisée pour traiter une pollution ?',
                        'answers' => [
                            ['answer' => 'Elle peut faire entrer une partie du coût social de la pollution dans les décisions privées', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours la pollution', 'iscorrect' => false],
                            ['answer' => 'Elle garantit automatiquement zéro émission', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet sur les comportements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un impôt sur le travail peut-il influencer l’offre de travail ?',
                        'answers' => [
                            ['answer' => 'Il peut modifier le revenu net associé au travail et donc certaines incitations à travailler davantage', 'iscorrect' => true],
                            ['answer' => 'L’impôt ne change jamais le revenu net', 'iscorrect' => false],
                            ['answer' => 'Le travail est totalement indépendant du salaire net', 'iscorrect' => false],
                            ['answer' => 'Un impôt sur le travail augmente toujours l’offre de travail', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi certains gouvernements accordent-ils des crédits ou réductions fiscales à l’investissement ?',
                        'answers' => [
                            ['answer' => 'Pour encourager certains investissements privés qu’ils considèrent comme économiquement souhaitables', 'iscorrect' => true],
                            ['answer' => 'Pour empêcher toute accumulation de capital', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement les impôts', 'iscorrect' => false],
                            ['answer' => 'Pour réduire toute activité entrepreneuriale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les avantages fiscaux peuvent-ils avoir un coût pour le budget public ?',
                        'answers' => [
                            ['answer' => 'Ils réduisent potentiellement les recettes que l’État aurait perçues sans l’avantage fiscal', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent toujours les recettes', 'iscorrect' => false],
                            ['answer' => 'Ils ne modifient jamais les recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent automatiquement toutes les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fiscalité, croissance et investissement',
                'questions' => [
                    [
                        'question' => Pourquoi la fiscalité peut-elle influencer l’investissement privé ?',
                        'answers' => [
                            ['answer' => 'Elle peut modifier le rendement après impôt des projets d’investissement', 'iscorrect' => true],
                            ['answer' => 'Les taxes n’affectent jamais les rendements', 'iscorrect' => false],
                            ['answer' => 'L’investissement dépend uniquement de la population', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ignorent toujours les coûts fiscaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les gouvernements peuvent-ils investir dans les infrastructures ?',
                        'answers' => [
                            ['answer' => 'Parce que de bonnes infrastructures peuvent réduire certains coûts de production et améliorer la productivité', 'iscorrect' => true],
                            ['answer' => 'Parce que les infrastructures réduisent toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elles servent uniquement aux administrations', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elles remplacent tous les investissements privés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les dépenses publiques d’éducation peuvent-elles favoriser la croissance à long terme ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent accroître les compétences et la productivité de la population', 'iscorrect' => true],
                            ['answer' => 'L’éducation réduit toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Les compétences n’ont aucun lien avec la production', 'iscorrect' => false],
                            ['answer' => 'L’éducation empêche toute innovation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la qualité des institutions fiscales peut-elle influencer l’économie ?',
                        'answers' => [
                            ['answer' => 'Une administration fiscale efficace peut réduire la fraude, améliorer les recettes et rendre les règles plus prévisibles', 'iscorrect' => true],
                            ['answer' => 'Les institutions fiscales n’ont aucun rôle', 'iscorrect' => false],
                            ['answer' => 'Une administration efficace réduit toujours les recettes', 'iscorrect' => false],
                            ['answer' => 'La prévisibilité fiscale n’a aucun effet sur les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la stabilité fiscale peut-elle être importante pour les investisseurs ?',
                        'answers' => [
                            ['answer' => 'Des règles prévisibles facilitent l’évaluation des coûts et rendements futurs des projets', 'iscorrect' => true],
                            ['answer' => 'Les investisseurs ignorent toujours la fiscalité future', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ne calculent jamais leurs coûts', 'iscorrect' => false],
                            ['answer' => 'Les règles fiscales sont sans lien avec la rentabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les dépenses publiques improductives peuvent-elles devenir un problème à long terme ?',
                        'answers' => [
                            ['answer' => 'Elles consomment des ressources sans générer suffisamment de bénéfices économiques ou sociaux', 'iscorrect' => true],
                            ['answer' => 'Toute dépense publique augmente nécessairement la productivité', 'iscorrect' => false],
                            ['answer' => 'Les ressources publiques sont illimitées', 'iscorrect' => false],
                            ['answer' => 'L’efficacité des dépenses n’a aucune importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’endettement public peut-il financer un investissement productif ?',
                        'answers' => [
                            ['answer' => 'L’emprunt peut financer aujourd’hui une infrastructure dont les bénéfices économiques s’étendent sur plusieurs années', 'iscorrect' => true],
                            ['answer' => 'L’endettement ne peut jamais financer un investissement', 'iscorrect' => false],
                            ['answer' => 'Toute dette publique sert uniquement à la consommation', 'iscorrect' => false],
                            ['answer' => 'Les investissements publics ne génèrent jamais de bénéfices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le coût de financement public est-il important pour les investissements de l’État ?',
                        'answers' => [
                            ['answer' => 'Des taux d’intérêt élevés augmentent le coût total du financement d’un projet public', 'iscorrect' => true],
                            ['answer' => 'Les projets publics sont toujours gratuits à financer', 'iscorrect' => false],
                            ['answer' => 'Les taux n’affectent jamais la dette publique', 'iscorrect' => false],
                            ['answer' => 'Un taux élevé réduit automatiquement le coût des emprunts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une forte pression fiscale peut-elle soulever des questions d’efficacité économique ?',
                        'answers' => [
                            ['answer' => 'Selon la structure des impôts, elle peut modifier les incitations à travailler, investir ou entreprendre', 'iscorrect' => true],
                            ['answer' => 'Les impôts n’affectent jamais les décisions économiques', 'iscorrect' => false],
                            ['answer' => 'La fiscalité augmente toujours tous les investissements', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne tiennent jamais compte des impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les recettes fiscales doivent-elles rester suffisamment stables pour financer les services publics ?',
                        'answers' => [
                            ['answer' => 'Des recettes prévisibles facilitent la planification et le financement des dépenses publiques essentielles', 'iscorrect' => true],
                            ['answer' => 'Les recettes fiscales n’ont aucun lien avec les services publics', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques peuvent toujours être financées sans recettes', 'iscorrect' => false],
                            ['answer' => 'La stabilité des recettes réduit toujours l’investissement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finances publiques et gestion économique',
                'questions' => [
                    [
                        'question' => Pourquoi un gouvernement doit-il établir des priorités entre différentes dépenses publiques ?',
                        'answers' => [
                            ['answer' => 'Les ressources budgétaires sont limitées et plusieurs objectifs publics sont en concurrence', 'iscorrect' => true],
                            ['answer' => 'Les recettes publiques sont infinies', 'iscorrect' => false],
                            ['answer' => 'Toutes les dépenses sont automatiquement financées', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques ne nécessitent aucune ressource', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce que l’efficacité allocative des dépenses publiques ?',
                        'answers' => [
                            ['answer' => 'La capacité à orienter les ressources vers les usages produisant la plus grande valeur sociale possible selon les objectifs retenus', 'iscorrect' => true],
                            ['answer' => 'La capacité à augmenter toutes les dépenses simultanément', 'iscorrect' => false],
                            ['answer' => 'La capacité à supprimer tous les impôts', 'iscorrect' => false],
                            ['answer' => 'La capacité à maximiser uniquement les salaires publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les gouvernements réalisent-ils parfois une analyse coûts-bénéfices des projets publics ?',
                        'answers' => [
                            ['answer' => 'Pour comparer les ressources nécessaires avec les bénéfices économiques et sociaux attendus', 'iscorrect' => true],
                            ['answer' => 'Pour garantir qu’un projet est toujours rentable financièrement', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer tout risque futur', 'iscorrect' => false],
                            ['answer' => 'Pour calculer uniquement les recettes fiscales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’État peut-il subventionner certaines activités ?',
                        'answers' => [
                            ['answer' => 'Pour encourager des activités présentant des bénéfices sociaux ou économiques que le marché peut sous-produire', 'iscorrect' => true],
                            ['answer' => 'Pour réduire toujours la production', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute concurrence', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement le chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les subventions doivent-elles être évaluées régulièrement ?',
                        'answers' => [
                            ['answer' => 'Une subvention peut devenir coûteuse ou perdre sa justification économique lorsque les conditions changent', 'iscorrect' => true],
                            ['answer' => 'Toute subvention devient nécessairement plus efficace avec le temps', 'iscorrect' => false],
                            ['answer' => 'Les coûts budgétaires sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Les politiques publiques ne doivent jamais être réévaluées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la lutte contre la fraude fiscale est-elle importante pour les finances publiques ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer les recettes disponibles et renforcer l’équité du système fiscal', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours les recettes publiques', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet sur les contribuables', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toutes les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la transparence budgétaire est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle permet aux citoyens et institutions de mieux comprendre les recettes, dépenses et choix publics', 'iscorrect' => true],
                            ['answer' => 'Elle empêche tout contrôle des finances publiques', 'iscorrect' => false],
                            ['answer' => 'Elle réduit automatiquement les recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Elle rend les budgets impossibles à comparer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un gouvernement surveille-t-il son solde budgétaire ?',
                        'answers' => [
                            ['answer' => 'Pour suivre l’évolution de ses recettes, dépenses, besoins de financement et dette', 'iscorrect' => true],
                            ['answer' => 'Pour mesurer uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Pour déterminer les bénéfices des entreprises privées', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer la politique monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les règles budgétaires peuvent-elles être utilisées ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent encadrer certains déficits, dépenses ou niveaux de dette afin de renforcer la discipline budgétaire', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent que tous les déficits sont toujours souhaitables', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment toute flexibilité budgétaire dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une bonne gestion budgétaire doit-elle considérer le long terme ?',
                        'answers' => [
                            ['answer' => 'Les décisions actuelles peuvent affecter la dette, les investissements, les impôts et les services publics futurs', 'iscorrect' => true],
                            ['answer' => 'Les décisions budgétaires n’ont jamais d’effet futur', 'iscorrect' => false],
                            ['answer' => 'La dette disparaît automatiquement chaque année', 'iscorrect' => false],
                            ['answer' => 'Les investissements publics n’ont aucun effet sur les générations futures', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Beginner',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses : la bonne réponse n'est pas systématiquement en première position.
                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['answer'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
