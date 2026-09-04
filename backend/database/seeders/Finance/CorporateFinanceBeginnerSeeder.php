<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CorporateFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'corporate-finance')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Finance d’entreprise — Introduction',
                'description' => 'Découvrez les objectifs, acteurs et décisions fondamentales de la finance d’entreprise.',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de la finance d’entreprise ?',
                        'explanation' => 'La finance d’entreprise vise notamment à gérer les ressources financières et à soutenir les décisions créatrices de valeur.',
                        'choices' => [
                            ['choice_text' => 'Prendre de bonnes décisions d’investissement, de financement et de gestion financière', 'is_correct' => true],
                            ['choice_text' => 'Gérer uniquement les salaires', 'is_correct' => false],
                            ['choice_text' => 'Préparer uniquement les déclarations fiscales', 'is_correct' => false],
                            ['choice_text' => 'Vendre uniquement des produits financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelles sont les trois grandes décisions classiques de la finance d’entreprise ?',
                        'explanation' => 'Les trois grandes décisions concernent l’investissement, le financement et la gestion des ressources financières à court terme.',
                        'choices' => [
                            ['choice_text' => 'Investissement, financement et gestion financière courante', 'is_correct' => true],
                            ['choice_text' => 'Marketing, recrutement et production', 'is_correct' => false],
                            ['choice_text' => 'Fiscalité, paie et communication', 'is_correct' => false],
                            ['choice_text' => 'Achats, ventes et publicité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une décision d’investissement ?',
                        'explanation' => 'Elle consiste à décider comment utiliser les ressources de l’entreprise pour acquérir des actifs ou financer des projets.',
                        'choices' => [
                            ['choice_text' => 'Décider dans quels projets ou actifs l’entreprise doit engager ses ressources', 'is_correct' => true],
                            ['choice_text' => 'Décider uniquement du salaire des employés', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement la banque de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Déterminer uniquement la politique de communication', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une décision de financement ?',
                        'explanation' => 'Elle consiste à déterminer comment l’entreprise va obtenir les ressources nécessaires à ses investissements.',
                        'choices' => [
                            ['choice_text' => 'Choisir comment financer les besoins de l’entreprise entre dette et capitaux propres notamment', 'is_correct' => true],
                            ['choice_text' => 'Fixer uniquement les prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Calculer uniquement les stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la trésorerie est-elle importante pour une entreprise ?',
                        'explanation' => 'La trésorerie permet notamment de payer les obligations courantes et de maintenir la continuité des activités.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de faire face aux décaissements et aux besoins financiers courants', 'is_correct' => true],
                            ['choice_text' => 'Elle représente toujours le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toujours les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit automatiquement la rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un investisseur attend généralement d’un investissement dans une entreprise ?',
                        'explanation' => 'L’investisseur cherche généralement une rémunération en fonction du rendement et du risque supporté.',
                        'choices' => [
                            ['choice_text' => 'Une rémunération du capital en fonction du rendement et du risque', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale de risque', 'is_correct' => false],
                            ['choice_text' => 'Un remboursement garanti dans toutes les situations', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque est-il important dans une décision financière ?',
                        'explanation' => 'Deux investissements peuvent offrir des rendements différents avec des niveaux de risque très différents.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un rendement attendu doit être évalué en fonction du risque assumé', 'is_correct' => true],
                            ['choice_text' => 'Parce que le risque n’existe que pour les banques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un risque élevé garantit toujours un rendement élevé', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un investissement sans risque est toujours impossible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ne doit-elle pas confondre bénéfice et trésorerie ?',
                        'explanation' => 'Le bénéfice comptable et les flux de trésorerie suivent des mécanismes différents.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un bénéfice comptable ne signifie pas nécessairement que le même montant est disponible en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que le bénéfice est toujours inférieur à zéro', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie ne concerne que les banques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes sont toujours encaissées immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle rechercher un équilibre entre dette et capitaux propres ?',
                        'explanation' => 'La dette peut fournir un financement mais augmente aussi les obligations financières et donc le risque.',
                        'choices' => [
                            ['choice_text' => 'Pour financer ses besoins tout en maîtrisant le coût et le risque du financement', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette est toujours préférable aux capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres ne servent jamais à financer une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tous les intérêts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’un directeur financier ?',
                        'explanation' => 'Le directeur financier contribue notamment aux décisions d’investissement, de financement, de trésorerie et de performance financière.',
                        'choices' => [
                            ['choice_text' => 'Piloter les ressources financières et contribuer aux décisions stratégiques de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Gérer uniquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Gérer uniquement les ressources humaines', 'is_correct' => false],
                            ['choice_text' => 'Superviser uniquement le marketing', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Valeur temps de l’argent',
                'description' => 'Apprenez les concepts fondamentaux de valeur actuelle, valeur future et actualisation.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la valeur temps de l’argent ?',
                        'explanation' => 'Un montant disponible aujourd’hui peut être investi et générer un rendement, ce qui le rend différent du même montant reçu plus tard.',
                        'choices' => [
                            ['choice_text' => 'L’idée qu’un montant aujourd’hui peut avoir une valeur différente du même montant reçu dans le futur', 'is_correct' => true],
                            ['choice_text' => 'L’idée que l’argent ne change jamais de valeur', 'is_correct' => false],
                            ['choice_text' => 'L’idée que les intérêts sont toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'L’idée que tous les flux futurs sont certains', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi 1 000 € aujourd’hui peuvent-ils être préférables à 1 000 € dans un an ?',
                        'explanation' => 'Les 1 000 € disponibles aujourd’hui peuvent potentiellement être investis et produire un rendement.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’argent disponible aujourd’hui peut être investi et générer un rendement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un montant futur est toujours inférieur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les banques garantissent toujours un rendement', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’inflation n’existe jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur future ?',
                        'explanation' => 'La valeur future représente la valeur qu’un montant actuel atteindrait après application d’un taux sur une période.',
                        'choices' => [
                            ['choice_text' => 'La valeur qu’un montant présent peut atteindre après capitalisation sur une période', 'is_correct' => true],
                            ['choice_text' => 'Le montant des coûts fixes futurs', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle d’une dette uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice comptable actuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 1 000 € sont placés à 5 % pendant un an, quelle valeur future simple obtient-on avant impôts et frais ?',
                        'explanation' => '1 000 × 1,05 = 1 050 €.',
                        'choices' => [
                            ['choice_text' => '1 050 €', 'is_correct' => true],
                            ['choice_text' => '1 005 €', 'is_correct' => false],
                            ['choice_text' => '950 €', 'is_correct' => false],
                            ['choice_text' => '1 500 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’actualisation ?',
                        'explanation' => 'L’actualisation consiste à convertir un flux futur en une valeur exprimée en monnaie d’aujourd’hui.',
                        'choices' => [
                            ['choice_text' => 'Convertir un montant futur en sa valeur équivalente aujourd’hui', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement un flux futur', 'is_correct' => false],
                            ['choice_text' => 'Transformer une dette en capital', 'is_correct' => false],
                            ['choice_text' => 'Calculer uniquement un bénéfice comptable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet a généralement un taux d’actualisation plus élevé sur la valeur actuelle d’un flux futur ?', 'is_correct' => true,
                        'explanation' => 'Un taux d’actualisation plus élevé réduit davantage la valeur actuelle du flux futur.',
                        'choices' => [
                            ['choice_text' => 'Il réduit généralement la valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours la valeur actuelle', 'is_correct' => false],
                            ['choice_text' => 'Il ne change jamais la valeur actuelle', 'is_correct' => false],
                            ['choice_text' => 'Il transforme le flux futur en dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux projets ayant le même montant total de flux peuvent-ils avoir des valeurs différentes ?',
                        'explanation' => 'La date à laquelle les flux sont reçus influence leur valeur actuelle.',
                        'choices' => [
                            ['choice_text' => 'Parce que le calendrier des flux peut être différent', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires est toujours différent', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant total n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux ne peuvent jamais être actualisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inflation est-elle importante lorsqu’on compare des montants reçus à des dates différentes ?',
                        'explanation' => 'L’inflation réduit généralement le pouvoir d’achat de la monnaie dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut réduire le pouvoir d’achat futur de la monnaie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle augmente toujours la valeur réelle des flux', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle rend toutes les monnaies identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime le besoin d’actualiser', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capitalisation composée est-elle différente de la capitalisation simple ?', 'is_correct' => true,
                        'explanation' => 'Avec la capitalisation composée, les intérêts accumulés peuvent eux-mêmes produire des intérêts.',
                        'choices' => [
                            ['choice_text' => 'Parce que les intérêts accumulés peuvent eux-mêmes générer des intérêts', 'is_correct' => true],
                            ['choice_text' => 'Parce que le capital initial disparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux devient toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts ne sont jamais ajoutés au capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur temps de l’argent est-elle essentielle en finance d’entreprise ?',
                        'explanation' => 'Elle permet de comparer des flux à des dates différentes et d’évaluer des projets d’investissement.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de comparer des flux intervenant à des dates différentes', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace toutes les informations comptables', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit la rentabilité des investissements', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le risque financier', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Valeur actuelle nette et investissements',
                'description' => 'Découvrez les principes de base de la VAN et de l’évaluation des projets.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la valeur actuelle nette ?',
                        'explanation' => 'La VAN compare la valeur actuelle des flux futurs d’un projet au montant investi initialement.',
                        'choices' => [
                            ['choice_text' => 'La valeur actuelle des flux futurs moins l’investissement initial', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires moins les salaires', 'is_correct' => false],
                            ['choice_text' => 'Les actifs moins les stocks', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice comptable avant impôts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement une VAN positive ?',
                        'explanation' => 'Une VAN positive signifie que les flux actualisés dépassent l’investissement initial au taux retenu.',
                        'choices' => [
                            ['choice_text' => 'Le projet crée une valeur supérieure au coût du capital utilisé dans l’analyse', 'is_correct' => true],
                            ['choice_text' => 'Le projet est nécessairement sans risque', 'is_correct' => false],
                            ['choice_text' => 'Le projet ne génère aucun flux', 'is_correct' => false],
                            ['choice_text' => 'Le projet doit toujours être abandonné', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’actualisation est-il important dans le calcul de la VAN ?',
                        'explanation' => 'Il détermine la valeur actuelle des flux futurs et influence donc directement la VAN.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il influence la valeur actuelle des flux futurs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il modifie automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il élimine les coûts du projet', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il détermine uniquement le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet coûte 100 000 € et génère une valeur actuelle des flux de 130 000 €. Quelle est la VAN simplifiée ?',
                        'explanation' => '130 000 € - 100 000 € = 30 000 €.',
                        'choices' => [
                            ['choice_text' => '30 000 €', 'is_correct' => true],
                            ['choice_text' => '100 000 €', 'is_correct' => false],
                            ['choice_text' => '130 000 €', 'is_correct' => false],
                            ['choice_text' => '230 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un projet présentant une VAN positive n’est-il pas nécessairement sans risque ?',
                        'choice_text' => 'Parce que la VAN repose sur des hypothèses de flux et de taux qui peuvent évoluer', 'is_correct' => true,
                        'explanation' => 'Les prévisions peuvent être différentes de la réalité.',
                        'choices' => [
                            ['choice_text' => 'Parce que la VAN dépend d’hypothèses concernant les flux, les coûts et le taux d’actualisation', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une VAN positive garantit une perte', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les projets à VAN positive sont spéculatifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que la VAN ignore toujours les flux futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer les flux pertinents d’investissement des flux historiques ?',
                        'is_correct' => true,
                        'explanation' => 'Les coûts déjà engagés ne sont généralement pas modifiés par la nouvelle décision.',
                        'choices' => [
                            ['choice_text' => 'Parce que les coûts déjà engagés ne changent généralement pas selon la décision future', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts historiques sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les projets n’utilisent jamais de données historiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts passés deviennent toujours des revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les besoins en fonds de roulement doivent-ils être intégrés dans l’analyse d’un investissement ?',
                        'explanation' => 'Un projet peut nécessiter des stocks ou créances supplémentaires qui consomment de la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent générer des besoins de trésorerie supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils réduisent toujours les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont toujours des revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un investissement ne crée jamais de besoin de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur résiduelle d’un investissement peut-elle influencer sa VAN ?',
                        'explanation' => 'La valeur récupérée en fin de projet constitue un flux futur qui doit être pris en compte.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle représente un flux futur qui peut avoir une valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle remplace l’investissement initial', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle ne concerne que les banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la VAN de plusieurs projets peut-il aider à choisir entre plusieurs investissements ?',
                        'is_correct' => true,
                        'explanation' => 'La VAN permet de comparer la valeur créée au taux d’actualisation retenu, sous réserve de cohérence des hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle fournit une mesure de la valeur créée selon les hypothèses retenues', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle garantit que le projet ayant la VAN la plus élevée est sans risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que la VAN mesure uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les projets ont exactement la même structure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne analyse d’investissement ?',
                        'is_correct' => true,
                        'explanation' => 'Une analyse complète considère les flux pertinents, le calendrier, le risque et le coût du capital.',
                        'choices' => [
                            ['choice_text' => 'Évaluer les flux différentiels, leur calendrier, leur risque et leur valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'Se concentrer uniquement sur le coût initial', 'is_correct' => false],
                            ['choice_text' => 'Se baser uniquement sur le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les besoins de trésorerie', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Coût du capital',
                'description' => 'Comprenez les principes fondamentaux du coût des différentes sources de financement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le coût du capital ?',
                        'explanation' => 'Le coût du capital représente le rendement exigé par les apporteurs de capitaux compte tenu du risque.',
                        'choices' => [
                            ['choice_text' => 'Le rendement exigé par les apporteurs de financement pour fournir du capital à l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le taux d’intérêt bancaire', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les dividendes versés', 'is_correct' => false],
                            ['choice_text' => 'Le montant total des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût de la dette est-il généralement lié aux taux d’intérêt ?',
                        'explanation' => 'Les prêteurs demandent une rémunération en contrepartie des fonds prêtés et du risque.',
                        'choices' => [
                            ['choice_text' => 'Parce que les prêteurs demandent une rémunération pour fournir les fonds', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette est toujours gratuite', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts constituent toujours un revenu pour l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres sont une dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres ont-ils aussi un coût pour l’entreprise ?',
                        'explanation' => 'Les actionnaires attendent un rendement en compensation du risque qu’ils supportent.',
                        'choices' => [
                            ['choice_text' => 'Parce que les actionnaires exigent également une rémunération du capital investi', 'is_correct' => true],
                            ['choice_text' => 'Parce que les capitaux propres comportent toujours un intérêt fixe', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires prêtent juridiquement toujours de l’argent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres sont des charges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût moyen pondéré du capital combine-t-il plusieurs sources de financement ?',
                        'explanation' => 'Une entreprise peut être financée par plusieurs sources ayant des coûts différents.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entreprise peut utiliser plusieurs sources de capitaux ayant des coûts différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les sources ont le même coût', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette n’a aucun coût', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres sont toujours gratuits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque influence-t-il généralement le coût des capitaux propres ?',
                        'explanation' => 'Les investisseurs demandent généralement une rémunération plus importante lorsqu’ils supportent davantage de risque.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un risque plus élevé peut conduire les investisseurs à exiger un rendement plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Parce que le risque réduit toujours le rendement exigé', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investisseurs ne prennent jamais de risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres ont toujours un rendement garanti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ne doit-elle pas choisir automatiquement la source de financement au taux apparent le plus faible ?',
                        'is_correct' => true,
                        'explanation' => 'Le risque, les garanties, la flexibilité, les coûts annexes et les conséquences sur la structure financière doivent être considérés.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut aussi considérer le risque, les conditions et les effets sur la structure financière', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux apparent n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette est toujours plus chère', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres ont toujours un coût nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût du capital est-il important dans l’évaluation des projets ?',
                        'is_correct' => true,
                        'explanation' => 'Il sert notamment de référence pour comparer le rendement d’un projet au coût des ressources utilisées.',
                        'choices' => [
                            ['choice_text' => 'Il fournit une référence pour juger si le rendement attendu d’un projet est suffisant', 'is_correct' => true],
                            ['choice_text' => 'Il garantit la VAN positive de tous les projets', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les prévisions de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation du poids de la dette peut-elle modifier le coût global du capital ?',
                        'explanation' => 'La composition du financement change et le risque financier peut également évoluer.',
                        'choices' => [
                            ['choice_text' => 'Parce que le poids relatif des sources et le risque financier de l’entreprise peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette a toujours le même effet quel que soit son niveau', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres disparaissent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que le risque financier ne dépend jamais de l’endettement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle éviter d’utiliser un taux d’actualisation incohérent avec le risque du projet ?',
                        'explanation' => 'Un taux inadapté peut surévaluer ou sous-évaluer les projets.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un taux inadapté peut conduire à une mauvaise évaluation de la valeur du projet', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux d’actualisation ne change jamais la VAN', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les projets ont exactement le même risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux futurs n’ont aucune importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général du coût du capital dans la finance d’entreprise ?',
                        'is_correct' => true,
                        'explanation' => 'Il aide à apprécier le rendement nécessaire pour rémunérer les fournisseurs de capitaux.',
                        'choices' => [
                            ['choice_text' => 'Servir de référence pour évaluer la rentabilité des investissements et le financement', 'is_correct' => true],
                            ['choice_text' => 'Déterminer directement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les états financiers', 'is_correct' => false],
                            ['choice_text' => 'Garantir une hausse des bénéfices', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Structure financière et endettement',
                'description' => 'Découvrez les principes fondamentaux de la dette, des capitaux propres et du levier financier.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’endettement financier ?',
                        'explanation' => 'Il correspond au recours à des financements qui créent une obligation de remboursement.',
                        'choices' => [
                            ['choice_text' => 'Le recours à des financements créant des obligations de remboursement', 'is_correct' => true],
                            ['choice_text' => 'L’argent apporté définitivement par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Les bénéfices non distribués uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires annuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage potentiel de la dette pour une entreprise ?',
                        'explanation' => 'La dette permet de financer un projet sans diluer directement les propriétaires, tout en créant des obligations financières.',
                        'choices' => [
                            ['choice_text' => 'Elle peut permettre de financer des investissements sans dilution immédiate des actionnaires', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours gratuite', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine tout risque financier', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente toujours automatiquement le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque majeur d’un endettement élevé ?',
                        'explanation' => 'Des obligations fixes élevées peuvent accroître le risque de tension financière lorsque les résultats baissent.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation du risque de difficulté à respecter les obligations financières', 'is_correct' => true],
                            ['choice_text' => 'Une suppression des intérêts', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du risque', 'is_correct' => false],
                            ['choice_text' => 'Une hausse garantie des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres peuvent-ils renforcer la flexibilité financière ?',
                        'explanation' => 'Ils ne créent généralement pas les mêmes obligations fixes de remboursement qu’une dette.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent réduire la dépendance à des remboursements fixes liés à la dette', 'is_correct' => true],
                            ['choice_text' => 'Ils garantissent un rendement fixe aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent toujours des revenus', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toute gestion de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise fortement endettée peut-elle être plus sensible à une baisse des bénéfices ?',
                        'explanation' => 'Les intérêts et remboursements restent dus même lorsque le résultat diminue.',
                        'choices' => [
                            ['choice_text' => 'Parce que les obligations financières peuvent rester élevées malgré la baisse des résultats', 'is_correct' => true],
                            ['choice_text' => 'Parce que les intérêts disparaissent lorsque les ventes diminuent', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette devient automatiquement un actif', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices restent toujours constants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la structure financière doit-elle être adaptée au secteur de l’entreprise ?',
                        'is_correct' => true,
                        'explanation' => 'Les secteurs ont des niveaux de stabilité des flux, besoins d’investissement et risques différents.',
                        'choices' => [
                            ['choice_text' => 'Parce que les besoins de financement, risques et flux de trésorerie diffèrent selon les secteurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les entreprises ont les mêmes besoins', 'is_correct' => false],
                            ['choice_text' => 'Parce que les secteurs n’ont aucun effet sur le risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette est interdite dans certains secteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle surveiller ses échéances de dette ?',
                        'explanation' => 'Les remboursements futurs peuvent créer des besoins importants de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer qu’elle pourra disposer des liquidités nécessaires aux dates prévues', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter tout remboursement', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les dettes sont automatiquement renouvelées', 'is_correct' => false],
                            ['choice_text' => 'Parce que les échéances n’ont aucun effet sur la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification des sources de financement peut-elle être utile ?',
                        'explanation' => 'Elle réduit la dépendance à une seule source ou un seul prêteur.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire la dépendance envers une seule source de financement', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours un coût plus faible', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine automatiquement les risques', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la dette inutile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un niveau de dette modéré peut-il être différent d’un niveau de dette élevé en termes de risque ?',
                        'is_correct' => true,
                        'explanation' => 'Plus la dette augmente, plus les obligations fixes peuvent peser sur la capacité financière.',
                        'choices' => [
                            ['choice_text' => 'Parce que le niveau d’obligations fixes et le risque financier peuvent augmenter avec l’endettement', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute dette est sans risque jusqu’à un certain montant', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires supportent toujours tout le risque financier', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts diminuent toujours avec la dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne gestion de la structure financière ?',
                        'is_correct' => true,
                        'explanation' => 'Il faut rechercher un financement adapté aux risques, aux flux et aux objectifs stratégiques.',
                        'choices' => [
                            ['choice_text' => 'Choisir un équilibre de financement compatible avec le risque, la flexibilité et les besoins de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Maximiser systématiquement la dette', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute dette dans toutes les situations', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Dividendes et politique financière',
                'description' => 'Comprenez les principes de base de la distribution des bénéfices et de leur réinvestissement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un dividende ?',
                        'explanation' => 'Un dividende est une distribution d’une partie des résultats ou ressources disponibles aux actionnaires selon les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Une distribution destinée aux actionnaires', 'is_correct' => true],
                            ['choice_text' => 'Une dette envers les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Une charge salariale', 'is_correct' => false],
                            ['choice_text' => 'Un investissement dans une immobilisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle choisir de conserver ses bénéfices ?',
                        'is_correct' => true,
                        'explanation' => 'Les bénéfices conservés peuvent financer la croissance, les investissements ou renforcer la structure financière.',
                        'choices' => [
                            ['choice_text' => 'Pour financer des investissements ou renforcer ses ressources financières', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un bénéfice ne peut jamais être distribué', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires ne veulent jamais recevoir de dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle réduire son dividende même si elle réalise un bénéfice ?',
                        'explanation' => 'Elle peut avoir des besoins importants de financement ou vouloir renforcer ses liquidités.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut avoir besoin de conserver des ressources pour financer ses projets', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un bénéfice interdit toujours les dividendes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires ne peuvent jamais recevoir d’argent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices doivent toujours être versés à la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique de dividende doit-elle être cohérente avec la stratégie d’investissement ?',
                        'is_correct' => true,
                        'explanation' => 'Des dividendes élevés peuvent réduire les ressources disponibles pour financer la croissance.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ressources distribuées ne sont plus disponibles pour financer les investissements', 'is_correct' => true],
                            ['choice_text' => 'Parce que les investissements sont toujours financés uniquement par les dividendes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la distribution n’a aucun effet sur la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes augmentent toujours les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise en forte croissance peut-elle préférer conserver une plus grande partie de ses bénéfices ?',
                        'is_correct' => true,
                        'explanation' => 'La croissance peut exiger des investissements et du fonds de roulement supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Parce que ses besoins d’investissement et de financement peuvent être importants', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une entreprise en croissance ne génère jamais de bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes sont toujours interdits', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie n’est pas utile à la croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel peut être un avantage d’une politique de dividende stable ?',
                        'explanation' => 'Une stabilité relative peut rendre les distributions plus prévisibles pour les actionnaires.',
                        'choices' => [
                            ['choice_text' => 'Elle peut offrir davantage de prévisibilité aux actionnaires', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une hausse du cours', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les besoins d’investissement', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine tous les risques financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle considérer sa situation de trésorerie avant une distribution importante ?',
                        'is_correct' => true,
                        'explanation' => 'Une distribution importante réduit les liquidités disponibles pour les obligations et projets.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier qu’elle peut distribuer sans compromettre ses besoins financiers', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie ne change jamais après un dividende', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un dividende augmente automatiquement la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements deviennent inutiles après une distribution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les attentes des actionnaires peuvent-elles influencer la politique de dividende ?', 'is_correct' => true,
                        'explanation' => 'Les investisseurs peuvent avoir des préférences différentes en matière de revenu et de croissance.',
                        'choices' => [
                            ['choice_text' => 'Parce que les actionnaires peuvent avoir des préférences différentes concernant revenu et croissance', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les actionnaires ont toujours les mêmes objectifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes ne concernent pas les investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actionnaires ne prennent aucun risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des bénéfices peut-il parfois créer davantage de valeur qu’un dividende immédiat ?',
                        'is_correct' => true,
                        'explanation' => 'Des ressources réinvesties dans des projets créant suffisamment de valeur peuvent produire un rendement supérieur.',
                        'choices' => [
                            ['choice_text' => 'Parce que les bénéfices réinvestis peuvent financer des projets créant davantage de valeur', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dividendes sont toujours destructeurs de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices conservés sont toujours sans risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements n’ont jamais de rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne politique de distribution ?', 'is_correct' => true,
                        'explanation' => 'La distribution doit être cohérente avec les besoins d’investissement, la liquidité et les objectifs financiers.',
                        'choices' => [
                            ['choice_text' => 'Équilibrer rémunération des actionnaires, investissements futurs et solidité financière', 'is_correct' => true],
                            ['choice_text' => 'Distribuer toujours la totalité du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Ne jamais distribuer de bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Distribuer davantage lorsque la trésorerie est faible', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Gestion du fonds de roulement',
                'description' => 'Découvrez la gestion des créances, stocks, dettes fournisseurs et besoins de trésorerie.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le besoin en fonds de roulement ?',
                        'explanation' => 'Il correspond au besoin de financement généré par le décalage entre les flux liés à l’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Le besoin de financement généré par le cycle d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Le montant total des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires annuel', 'is_correct' => false],
                            ['choice_text' => 'Le montant de la dette bancaire uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des créances clients peut-elle augmenter le besoin de financement ?',
                        'is_correct' => true,
                        'explanation' => 'Les ventes non encaissées représentent des ressources immobilisées dans les créances.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entreprise finance davantage de ventes avant de recevoir les encaissements', 'is_correct' => true],
                            ['choice_text' => 'Parce que les clients paient immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances sont toujours des passifs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles augmentent toujours la trésorerie disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation des dettes fournisseurs peut-elle réduire le besoin de financement à court terme ?',
                        'is_correct' => true,
                        'explanation' => 'Des délais fournisseurs plus longs permettent à l’entreprise de conserver sa trésorerie plus longtemps.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entreprise conserve temporairement sa trésorerie avant de régler les fournisseurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dettes fournisseurs deviennent des revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fournisseurs paient les clients', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes disparaissent automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un niveau excessif de stocks peut-il augmenter le besoin de financement ?',
                        'is_correct' => true,
                        'explanation' => 'Les stocks immobilisent des ressources financières jusqu’à leur vente.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une partie de la trésorerie est immobilisée dans des marchandises non encore vendues', 'is_correct' => true],
                            ['choice_text' => 'Parce que les stocks sont toujours de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks réduisent toujours les achats', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks sont toujours des revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise en croissance peut-elle avoir besoin de plus de financement même si elle est rentable ?',
                        'is_correct' => true,
                        'explanation' => 'La croissance peut augmenter les stocks, créances et investissements avant les encaissements associés.',
                        'choices' => [
                            ['choice_text' => 'Parce que la croissance peut consommer de la trésorerie dans les créances, stocks et investissements', 'is_correct' => true],
                            ['choice_text' => 'Parce que la rentabilité réduit toujours la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que la croissance supprime les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fournisseurs refusent toujours les paiements différés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à évaluer la rapidité de recouvrement des clients ?',
                        'is_correct' => true,
                        'explanation' => 'Le délai moyen de paiement client mesure approximativement le temps nécessaire pour encaisser les créances.',
                        'choices' => [
                            ['choice_text' => 'Le délai moyen de paiement des clients', 'is_correct' => true],
                            ['choice_text' => 'Le rendement des capitaux propres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’endettement uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le coût historique des immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réduire le délai de paiement client peut-il améliorer la trésorerie ?',
                        'is_correct' => true,
                        'explanation' => 'Les ventes sont converties plus rapidement en encaissements.',
                        'choices' => [
                            ['choice_text' => 'Parce que les créances sont transformées plus rapidement en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires disparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks augmentent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes fournisseurs deviennent nulles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle équilibrer ses objectifs commerciaux et sa politique de crédit client ?',
                        'is_correct' => true,
                        'explanation' => 'Des conditions de crédit généreuses peuvent favoriser les ventes mais augmenter le risque de crédit et le besoin de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un crédit client plus généreux peut soutenir les ventes tout en augmentant les risques et besoins de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que le crédit client ne change jamais les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les clients paient immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances sont des dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rotation des stocks est-elle importante dans la gestion financière ?', 'is_correct' => true,
                        'explanation' => 'Une rotation plus rapide peut libérer des ressources immobilisées dans les stocks.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle indique la vitesse à laquelle les ressources immobilisées dans les stocks sont renouvelées', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle mesure uniquement les dettes bancaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle augmente toujours le prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks ne représentent jamais un besoin financier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif résume une bonne gestion du fonds de roulement ?',
                        'is_correct' => true,
                        'explanation' => 'L’objectif est de soutenir l’activité tout en évitant une immobilisation excessive de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Soutenir l’activité tout en maîtrisant les ressources immobilisées dans le cycle d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Maximiser les stocks', 'is_correct' => false],
                            ['choice_text' => 'Allonger toujours les délais clients', 'is_correct' => false],
                            ['choice_text' => 'Payer tous les fournisseurs immédiatement dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance d’entreprise — Financement et gestion de trésorerie',
                'description' => 'Comprenez les mécanismes fondamentaux du financement à court et long terme.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise établit-elle une prévision de trésorerie ?',
                        'explanation' => 'Elle permet d’anticiper les besoins de liquidité et les éventuels excédents.',
                        'choices' => [
                            ['choice_text' => 'Pour anticiper les encaissements, décaissements et besoins futurs de financement', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir le bénéfice annuel', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le budget', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déficit temporaire de trésorerie ne signifie-t-il pas nécessairement que l’entreprise est non rentable ?',
                        'is_correct' => true,
                        'explanation' => 'Un décalage temporaire entre encaissements et décaissements peut créer un besoin de financement malgré une activité rentable.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un décalage de trésorerie peut être lié au cycle d’exploitation ou aux investissements', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une entreprise rentable n’a jamais besoin de financement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie est toujours positive lorsqu’il y a un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements n’affectent jamais la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une ligne de crédit à court terme peut-elle être utilisée ?', 'is_correct' => true,
                        'explanation' => 'Elle peut aider à couvrir des besoins temporaires de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Pour couvrir temporairement des besoins de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Pour financer toujours tous les investissements sur vingt ans', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer automatiquement les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle éviter de financer un actif très long terme uniquement avec des ressources très court terme ?', 'is_correct' => true,
                        'explanation' => 'Le financement doit tenir compte de la durée de vie et des flux générés par l’actif afin de réduire le risque de refinancement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle pourrait devoir refinancer fréquemment un actif qui génère des flux sur une longue période', 'is_correct' => true],
                            ['choice_text' => 'Parce que les financements court terme sont toujours plus chers', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs longs ne nécessitent jamais de financement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette court terme ne peut jamais être utilisée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle conserver une réserve de liquidité ?',
                        'is_correct' => true,
                        'explanation' => 'Une réserve de liquidité protège contre les imprévus et permet de saisir des opportunités.',
                        'choices' => [
                            ['choice_text' => 'Pour faire face aux imprévus et préserver sa flexibilité financière', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie est toujours plus rentable que les investissements', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute utilisation des capitaux', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les coûts financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs options de financement ?', 'is_correct' => true,
                        'explanation' => 'Les options diffèrent par leur coût, maturité, flexibilité, garanties et risque.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer coût, durée, flexibilité, garanties et risque', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles ont toujours le même coût', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir systématiquement la dette la plus longue', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de considérer les conditions contractuelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle surveiller sa trésorerie même lorsqu’elle dispose d’une ligne de crédit ?', 'is_correct' => true,
                        'explanation' => 'Une ligne de crédit peut avoir des limites, échéances, conditions ou covenants.',
                        'choices' => [
                            ['choice_text' => 'Parce que la ligne peut être limitée, coûteuse ou soumise à certaines conditions', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une ligne de crédit est toujours illimitée', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle remplace toutes les ressources propres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une ligne de crédit garantit toujours les encaissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les échéances de dette doivent-elles être intégrées à la planification de trésorerie ?', 'is_correct' => true,
                        'explanation' => 'Les remboursements représentent des sorties de liquidité importantes à certaines dates.',
                        'choices' => [
                            ['choice_text' => 'Parce que les remboursements créent des décaissements futurs à anticiper', 'is_correct' => true],
                            ['choice_text' => 'Parce que les échéances n’affectent jamais la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes deviennent automatiquement des actifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les remboursements sont toujours facultatifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion de trésorerie doit-elle intégrer plusieurs scénarios ?', 'is_correct' => true,
                        'explanation' => 'Les encaissements et décaissements futurs peuvent évoluer différemment selon les conditions commerciales.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer la résilience de la liquidité face à différents scénarios', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir le scénario optimiste', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les prévisions', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux futurs sont certains', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne gestion financière de la trésorerie ?', 'is_correct' => true,
                        'explanation' => 'Il faut assurer la liquidité nécessaire tout en optimisant l’utilisation des ressources.',
                        'choices' => [
                            ['choice_text' => 'Maintenir une liquidité suffisante tout en utilisant efficacement les ressources financières', 'is_correct' => true],
                            ['choice_text' => 'Conserver toujours le maximum de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Réduire toujours la trésorerie au minimum', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout financement externe', 'is_correct' => false],
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