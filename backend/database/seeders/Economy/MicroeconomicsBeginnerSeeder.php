```php id="c91x7p"
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MicroeconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'microeconomics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondements de la microéconomie',
                'questions' => [
                    [
                        'question' => 'Que cherche principalement à étudier la microéconomie ?',
                        'answers' => [
                            ['answer' => 'Les décisions des ménages, des entreprises et leur interaction sur les marchés', 'iscorrect' => true],
                            ['answer' => 'Uniquement la croissance économique nationale', 'iscorrect' => false],
                            ['answer' => 'Uniquement les relations entre les banques centrales', 'iscorrect' => false],
                            ['answer' => 'Uniquement les échanges entre États', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rareté est-elle fondamentale en microéconomie ?',
                        'answers' => [
                            ['answer' => 'Parce que les ressources sont limitées alors que les besoins et les préférences sont nombreux', 'iscorrect' => true],
                            ['answer' => 'Parce que les consommateurs disposent toujours de ressources illimitées', 'iscorrect' => false],
                            ['answer' => 'Parce que tous les biens sont gratuits', 'iscorrect' => false],
                            ['answer' => 'Parce que les entreprises produisent toujours moins que la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût d’opportunité ?',
                        'answers' => [
                            ['answer' => 'La valeur de la meilleure alternative abandonnée lorsqu’un choix est effectué', 'iscorrect' => true],
                            ['answer' => 'Le coût affiché sur une facture uniquement', 'iscorrect' => false],
                            ['answer' => 'Le profit total d’une entreprise', 'iscorrect' => false],
                            ['answer' => 'Le montant des impôts payés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe décrit le raisonnement marginal ?',
                        'answers' => [
                            ['answer' => 'Comparer le bénéfice supplémentaire au coût supplémentaire d’une décision', 'iscorrect' => true],
                            ['answer' => 'Comparer uniquement les coûts totaux historiques', 'iscorrect' => false],
                            ['answer' => 'Ignorer les conséquences d’une unité supplémentaire', 'iscorrect' => false],
                            ['answer' => 'Choisir toujours l’option la moins chère', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel agent économique cherche généralement à maximiser son utilité ?',
                        'answers' => [
                            ['answer' => 'Le consommateur', 'iscorrect' => true],
                            ['answer' => 'Le gouvernement uniquement', 'iscorrect' => false],
                            ['answer' => 'La banque centrale uniquement', 'iscorrect' => false],
                            ['answer' => 'Le marché lui-même', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif est généralement associé à une entreprise privée ?',
                        'answers' => [
                            ['answer' => 'Maximiser son profit sous les contraintes auxquelles elle fait face', 'iscorrect' => true],
                            ['answer' => 'Maximiser uniquement le nombre de salariés', 'iscorrect' => false],
                            ['answer' => 'Réduire nécessairement sa production', 'iscorrect' => false],
                            ['answer' => 'Éliminer la demande du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un marché ?',
                        'answers' => [
                            ['answer' => 'Un dispositif où acheteurs et vendeurs interagissent pour échanger des biens, services ou actifs', 'iscorrect' => true],
                            ['answer' => 'Uniquement un lieu physique de vente', 'iscorrect' => false],
                            ['answer' => 'Uniquement une entreprise publique', 'iscorrect' => false],
                            ['answer' => 'Un système sans acheteurs ni vendeurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un prix dans une économie de marché ?',
                        'answers' => [
                            ['answer' => 'Un signal qui contribue à coordonner les décisions des acheteurs et des vendeurs', 'iscorrect' => true],
                            ['answer' => 'Une mesure directe du bonheur', 'iscorrect' => false],
                            ['answer' => 'Une garantie de profit pour les producteurs', 'iscorrect' => false],
                            ['answer' => 'Une quantité physique de production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les préférences des consommateurs sont-elles importantes ?',
                        'answers' => [
                            ['answer' => 'Elles influencent les biens et services que les consommateurs souhaitent acheter', 'iscorrect' => true],
                            ['answer' => 'Elles déterminent toujours les coûts de production', 'iscorrect' => false],
                            ['answer' => 'Elles fixent directement les salaires', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un incitatif économique ?',
                        'answers' => [
                            ['answer' => 'Un élément qui modifie les avantages ou les coûts associés à un comportement', 'iscorrect' => true],
                            ['answer' => 'Une obligation de produire toujours la même quantité', 'iscorrect' => false],
                            ['answer' => 'Une règle qui supprime tous les choix', 'iscorrect' => false],
                            ['answer' => 'Un indicateur comptable sans effet sur les décisions', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Demande et comportement du consommateur',
                'questions' => [
                    [
                        'question' => 'Que représente la quantité demandée ?',
                        'answers' => [
                            ['answer' => 'La quantité qu’un consommateur ou un ensemble de consommateurs souhaite et peut acheter à un prix donné', 'iscorrect' => true],
                            ['answer' => 'La quantité que les producteurs veulent vendre', 'iscorrect' => false],
                            ['answer' => 'La quantité produite par l’État', 'iscorrect' => false],
                            ['answer' => 'Le stock total disponible dans un pays', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Selon la loi de la demande, toutes choses égales par ailleurs, une hausse du prix tend à :',
                        'answers' => [
                            ['answer' => 'Réduire la quantité demandée', 'iscorrect' => true],
                            ['answer' => 'Augmenter toujours la quantité demandée', 'iscorrect' => false],
                            ['answer' => 'Augmenter automatiquement le revenu du consommateur', 'iscorrect' => false],
                            ['answer' => 'Réduire l’offre de monnaie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse du prix d’un bien peut augmenter la quantité demandée notamment grâce :',
                        'answers' => [
                            ['answer' => 'À l’effet de substitution et à l’effet de revenu', 'iscorrect' => true],
                            ['answer' => 'À une disparition de la rareté', 'iscorrect' => false],
                            ['answer' => 'À une hausse automatique des coûts de production', 'iscorrect' => false],
                            ['answer' => 'À une réduction obligatoire de l’offre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien normal ?',
                        'answers' => [
                            ['answer' => 'Un bien dont la demande augmente généralement lorsque le revenu augmente', 'iscorrect' => true],
                            ['answer' => 'Un bien dont la demande augmente toujours lorsque son prix augmente', 'iscorrect' => false],
                            ['answer' => 'Un bien nécessairement gratuit', 'iscorrect' => false],
                            ['answer' => 'Un bien produit uniquement par l’État', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien inférieur ?',
                        'answers' => [
                            ['answer' => 'Un bien dont la demande peut diminuer lorsque le revenu augmente', 'iscorrect' => true],
                            ['answer' => 'Un bien dont le prix est toujours inférieur à zéro', 'iscorrect' => false],
                            ['answer' => 'Un bien toujours de mauvaise qualité', 'iscorrect' => false],
                            ['answer' => 'Un bien qui n’a aucun substitut', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux biens sont substituts lorsque :',
                        'answers' => [
                            ['answer' => 'Une hausse du prix de l’un peut augmenter la demande de l’autre', 'iscorrect' => true],
                            ['answer' => 'Ils doivent toujours être consommés ensemble', 'iscorrect' => false],
                            ['answer' => 'Ils ont toujours le même prix', 'iscorrect' => false],
                            ['answer' => 'Ils sont produits par le même fournisseur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux biens sont complémentaires lorsque :',
                        'answers' => [
                            ['answer' => 'Ils sont généralement utilisés ensemble dans la consommation', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours des substituts', 'iscorrect' => false],
                            ['answer' => 'Le prix de l’un n’a jamais d’effet sur l’autre', 'iscorrect' => false],
                            ['answer' => 'Ils doivent être produits dans le même pays', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du revenu des consommateurs déplace généralement la demande d’un bien normal :',
                        'answers' => [
                            ['answer' => 'Vers la droite', 'iscorrect' => true],
                            ['answer' => 'Vers la gauche', 'iscorrect' => false],
                            ['answer' => 'Elle ne change jamais', 'iscorrect' => false],
                            ['answer' => 'Elle devient nécessairement verticale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une amélioration des préférences pour un produit tend à :',
                        'answers' => [
                            ['answer' => 'Augmenter la demande pour ce produit', 'iscorrect' => true],
                            ['answer' => 'Réduire automatiquement l’offre', 'iscorrect' => false],
                            ['answer' => 'Réduire nécessairement le revenu des consommateurs', 'iscorrect' => false],
                            ['answer' => 'Supprimer le marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la demande individuelle peut-elle différer entre deux consommateurs ?',
                        'answers' => [
                            ['answer' => 'Leurs revenus, préférences, contraintes et besoins peuvent être différents', 'iscorrect' => true],
                            ['answer' => 'Les prix sont toujours différents pour chaque consommateur', 'iscorrect' => false],
                            ['answer' => 'Tous les consommateurs ont des préférences identiques', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ont toujours la même contrainte budgétaire', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Offre et décisions du producteur',
                'questions' => [
                    [
                        'question' => 'Que représente la quantité offerte ?',
                        'answers' => [
                            ['answer' => 'La quantité qu’un producteur souhaite et peut vendre à un prix donné', 'iscorrect' => true],
                            ['answer' => 'La quantité demandée par les consommateurs', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires total', 'iscorrect' => false],
                            ['answer' => 'Le montant des salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Selon la loi de l’offre, toutes choses égales par ailleurs, une hausse du prix tend à :',
                        'answers' => [
                            ['answer' => 'Augmenter la quantité offerte', 'iscorrect' => true],
                            ['answer' => 'Réduire toujours la quantité offerte', 'iscorrect' => false],
                            ['answer' => 'Réduire automatiquement le nombre d’entreprises', 'iscorrect' => false],
                            ['answer' => 'Augmenter la demande de manière obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des coûts des matières premières tend à déplacer l’offre :',
                        'answers' => [
                            ['answer' => 'Vers la gauche', 'iscorrect' => true],
                            ['answer' => 'Vers la droite', 'iscorrect' => false],
                            ['answer' => 'Sans modifier la courbe', 'iscorrect' => false],
                            ['answer' => 'Vers une courbe parfaitement verticale dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une amélioration technologique peut généralement :',
                        'answers' => [
                            ['answer' => 'Déplacer l’offre vers la droite en réduisant certains coûts de production', 'iscorrect' => true],
                            ['answer' => 'Réduire systématiquement la productivité', 'iscorrect' => false],
                            ['answer' => 'Réduire automatiquement la demande', 'iscorrect' => false],
                            ['answer' => 'Supprimer tout coût fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix d’un produit influence-t-il la quantité offerte ?',
                        'answers' => [
                            ['answer' => 'Un prix plus élevé peut rendre certaines unités supplémentaires de production plus rentables', 'iscorrect' => true],
                            ['answer' => 'Le prix ne joue jamais sur les incitations des producteurs', 'iscorrect' => false],
                            ['answer' => 'Les producteurs ont toujours des coûts nuls', 'iscorrect' => false],
                            ['answer' => 'Le prix détermine uniquement les préférences des consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le coût marginal ?',
                        'answers' => [
                            ['answer' => 'Le coût supplémentaire associé à la production d’une unité supplémentaire', 'iscorrect' => true],
                            ['answer' => 'Le coût total de toutes les unités', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires marginal', 'iscorrect' => false],
                            ['answer' => 'Le bénéfice annuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le revenu marginal ?',
                        'answers' => [
                            ['answer' => 'Le revenu supplémentaire généré par la vente d’une unité additionnelle', 'iscorrect' => true],
                            ['answer' => 'Le coût supplémentaire d’une unité', 'iscorrect' => false],
                            ['answer' => 'Le revenu total divisé par les salaires', 'iscorrect' => false],
                            ['answer' => 'Le prix moins les impôts uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle simple de maximisation du profit, une entreprise compare principalement :',
                        'answers' => [
                            ['answer' => 'Le revenu marginal et le coût marginal', 'iscorrect' => true],
                            ['answer' => 'Le chiffre d’affaires et les impôts uniquement', 'iscorrect' => false],
                            ['answer' => 'Les salaires et les exportations', 'iscorrect' => false],
                            ['answer' => 'Le PIB et le chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle continuer à produire à court terme malgré un profit négatif ?',
                        'answers' => [
                            ['answer' => 'Elle peut couvrir une partie de ses coûts fixes grâce à sa marge sur les coûts variables', 'iscorrect' => true],
                            ['answer' => 'Un profit négatif signifie toujours une recette nulle', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes disparaissent automatiquement', 'iscorrect' => false],
                            ['answer' => 'La demande devient nécessairement infinie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la productivité est-elle importante pour la décision de production ?',
                        'answers' => [
                            ['answer' => 'Une productivité plus élevée peut réduire le coût par unité produite', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours les coûts unitaires', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun lien avec la production', 'iscorrect' => false],
                            ['answer' => 'Elle détermine directement les préférences des consommateurs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Équilibre de marché et formation des prix',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le prix d’équilibre ?',
                        'answers' => [
                            ['answer' => 'Le prix auquel la quantité demandée est égale à la quantité offerte', 'iscorrect' => true],
                            ['answer' => 'Le prix fixé uniquement par le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Le prix maximal possible', 'iscorrect' => false],
                            ['answer' => 'Le prix auquel les entreprises ne produisent plus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un excédent d’offre ?',
                        'answers' => [
                            ['answer' => 'Une situation où la quantité offerte dépasse la quantité demandée au prix considéré', 'iscorrect' => true],
                            ['answer' => 'Une situation où la demande dépasse l’offre', 'iscorrect' => false],
                            ['answer' => 'Une situation sans entreprises', 'iscorrect' => false],
                            ['answer' => 'Une situation où le prix est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une pénurie ?',
                        'answers' => [
                            ['answer' => 'Une situation où la quantité demandée dépasse la quantité offerte au prix considéré', 'iscorrect' => true],
                            ['answer' => 'Une situation où l’offre est supérieure à la demande', 'iscorrect' => false],
                            ['answer' => 'Une situation où tous les producteurs réalisent un bénéfice', 'iscorrect' => false],
                            ['answer' => 'Une situation où les coûts sont nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une augmentation de la demande, toutes choses égales par ailleurs, tend généralement à :',
                        'answers' => [
                            ['answer' => 'Augmenter le prix et la quantité d’équilibre', 'iscorrect' => true],
                            ['answer' => 'Réduire le prix et la quantité d’équilibre', 'iscorrect' => false],
                            ['answer' => 'Réduire uniquement la quantité', 'iscorrect' => false],
                            ['answer' => 'Ne produire aucun effet sur le marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une diminution de l’offre, toutes choses égales par ailleurs, tend généralement à :',
                        'answers' => [
                            ['answer' => 'Augmenter le prix d’équilibre et réduire la quantité d’équilibre', 'iscorrect' => true],
                            ['answer' => 'Réduire le prix et augmenter la quantité', 'iscorrect' => false],
                            ['answer' => 'Augmenter simultanément offre et demande', 'iscorrect' => false],
                            ['answer' => 'Ne modifier que le revenu des consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix peut-il coordonner les décisions décentralisées ?',
                        'answers' => [
                            ['answer' => 'Il transmet des informations sur la rareté relative et les incitations des acheteurs et des vendeurs', 'iscorrect' => true],
                            ['answer' => 'Il impose automatiquement un niveau de production fixe', 'iscorrect' => false],
                            ['answer' => 'Il supprime les différences de préférences', 'iscorrect' => false],
                            ['answer' => 'Il rend toutes les ressources abondantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc d’offre négatif peut-il augmenter le prix tout en réduisant la production ?',
                        'answers' => [
                            ['answer' => 'Il réduit la quantité disponible à chaque niveau de prix', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Il déplace la demande vers la droite automatiquement', 'iscorrect' => false],
                            ['answer' => 'Il augmente toujours les stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse du prix d’un substitut proche tend généralement à :',
                        'answers' => [
                            ['answer' => 'Réduire la demande du produit concerné', 'iscorrect' => true],
                            ['answer' => 'Augmenter nécessairement la demande du produit concerné', 'iscorrect' => false],
                            ['answer' => 'Réduire automatiquement l’offre du substitut', 'iscorrect' => false],
                            ['answer' => 'Ne produire aucun effet sur les préférences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du prix d’un complément tend généralement à :',
                        'answers' => [
                            ['answer' => 'Réduire la demande du bien qui lui est complémentaire', 'iscorrect' => true],
                            ['answer' => 'Augmenter toujours sa demande', 'iscorrect' => false],
                            ['answer' => 'Augmenter l’offre du bien sans condition', 'iscorrect' => false],
                            ['answer' => 'Réduire nécessairement tous les prix du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’équilibre de marché ne signifie-t-il pas nécessairement que la situation est socialement optimale ?',
                        'answers' => [
                            ['answer' => 'Des externalités, pouvoirs de marché ou problèmes d’information peuvent rendre l’équilibre inefficace', 'iscorrect' => true],
                            ['answer' => 'Un équilibre n’existe jamais dans un marché', 'iscorrect' => false],
                            ['answer' => 'Le prix d’équilibre est toujours trop élevé', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne participent jamais au marché', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Élasticité et incidence économique',
                'questions' => [
                    [
                        'question' => 'Que mesure l’élasticité-prix de la demande ?',
                        'answers' => [
                            ['answer' => 'La variation proportionnelle de la quantité demandée par rapport à une variation proportionnelle du prix', 'iscorrect' => true],
                            ['answer' => 'La variation du PIB par rapport à l’inflation', 'iscorrect' => false],
                            ['answer' => 'La variation de l’offre par rapport au salaire', 'iscorrect' => false],
                            ['answer' => 'La variation du chômage par rapport aux exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une demande dont l’élasticité-prix en valeur absolue est supérieure à 1 est :',
                        'answers' => [
                            ['answer' => 'Élastique', 'iscorrect' => true],
                            ['answer' => 'Inélastique', 'iscorrect' => false],
                            ['answer' => 'Unitaire par définition', 'iscorrect' => false],
                            ['answer' => 'Parfaitement inélastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le prix augmente de 10 % et la quantité demandée diminue de 20 %, l’élasticité-prix approximative est :',
                        'answers' => [
                            ['answer' => '-2', 'iscorrect' => true],
                            ['answer' => '-0,5', 'iscorrect' => false],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque la demande est élastique, une hausse du prix tend généralement à :',
                        'answers' => [
                            ['answer' => 'Réduire la recette totale', 'iscorrect' => true],
                            ['answer' => 'Augmenter toujours la recette totale', 'iscorrect' => false],
                            ['answer' => 'Ne modifier aucunement la recette', 'iscorrect' => false],
                            ['answer' => 'Faire disparaître l’offre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque la demande est inélastique, une hausse du prix tend généralement à :',
                        'answers' => [
                            ['answer' => 'Augmenter la recette totale', 'iscorrect' => true],
                            ['answer' => 'Réduire nécessairement la recette totale', 'iscorrect' => false],
                            ['answer' => 'Réduire le prix', 'iscorrect' => false],
                            ['answer' => 'Ne modifier aucune variable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'De quoi dépend l’incidence économique d’une taxe ?',
                        'answers' => [
                            ['answer' => 'De l’élasticité relative de l’offre et de la demande', 'iscorrect' => true],
                            ['answer' => 'Uniquement du taux de taxe légal', 'iscorrect' => false],
                            ['answer' => 'Uniquement du nombre de producteurs', 'iscorrect' => false],
                            ['answer' => 'Uniquement du PIB national', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une offre très inélastique signifie généralement que :',
                        'answers' => [
                            ['answer' => 'Les producteurs modifient relativement peu la quantité offerte lorsque le prix change', 'iscorrect' => true],
                            ['answer' => 'Les producteurs augmentent toujours fortement leur production', 'iscorrect' => false],
                            ['answer' => 'Le prix reste toujours constant', 'iscorrect' => false],
                            ['answer' => 'La demande devient nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le temps influence-t-il souvent l’élasticité de l’offre ?',
                        'answers' => [
                            ['answer' => 'À long terme, les producteurs peuvent ajuster davantage les capacités et les facteurs utilisés', 'iscorrect' => true],
                            ['answer' => 'À long terme, la production devient toujours fixe', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs cessent d’exister', 'iscorrect' => false],
                            ['answer' => 'Les prix ne jouent plus aucun rôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur rend généralement la demande d’un bien plus élastique ?',
                        'answers' => [
                            ['answer' => 'La disponibilité de nombreux substituts proches', 'iscorrect' => true],
                            ['answer' => 'L’absence totale de substituts', 'iscorrect' => false],
                            ['answer' => 'Une très faible part du budget dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'L’urgence absolue du besoin', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’élasticité-prix est-elle utile pour une entreprise ?',
                        'answers' => [
                            ['answer' => 'Elle aide à anticiper la réaction de la demande à une modification du prix', 'iscorrect' => true],
                            ['answer' => 'Elle garantit le bénéfice futur', 'iscorrect' => false],
                            ['answer' => 'Elle remplace l’analyse des coûts', 'iscorrect' => false],
                            ['answer' => 'Elle fixe automatiquement le prix optimal', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Externalités, biens publics et information',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une externalité négative de production ?',
                        'answers' => [
                            ['answer' => 'Une activité de production impose un coût à des tiers qui n’est pas entièrement supporté par le producteur', 'iscorrect' => true],
                            ['answer' => 'Une baisse du coût privé uniquement', 'iscorrect' => false],
                            ['answer' => 'Un bénéfice privé reçu par l’entreprise', 'iscorrect' => false],
                            ['answer' => 'Une réduction du prix d’un bien', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe corrective peut-elle améliorer l’allocation dans un marché polluant ?',
                        'answers' => [
                            ['answer' => 'Elle peut rapprocher le coût privé du coût social de l’activité', 'iscorrect' => true],
                            ['answer' => 'Elle augmente automatiquement la pollution', 'iscorrect' => false],
                            ['answer' => 'Elle rend la demande parfaitement inélastique', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tous les coûts de production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un bien public est caractérisé classiquement par :',
                        'answers' => [
                            ['answer' => 'La non-rivalité et la non-excluabilité', 'iscorrect' => true],
                            ['answer' => 'La rivalité et l’excluabilité parfaite', 'iscorrect' => false],
                            ['answer' => 'La rivalité uniquement', 'iscorrect' => false],
                            ['answer' => 'L’excluabilité uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut entraîner un bien public insuffisamment financé par des contributions volontaires ?',
                        'answers' => [
                            ['answer' => 'Le comportement de passager clandestin', 'iscorrect' => true],
                            ['answer' => 'Une concurrence parfaite', 'iscorrect' => false],
                            ['answer' => 'Une baisse automatique du coût social', 'iscorrect' => false],
                            ['answer' => 'Une hausse garantie du surplus du consommateur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une ressource commune ?',
                        'answers' => [
                            ['answer' => 'Une ressource généralement rivale mais difficilement excluable', 'iscorrect' => true],
                            ['answer' => 'Un bien parfaitement non rival et excluable', 'iscorrect' => false],
                            ['answer' => 'Un bien exclusivement privé', 'iscorrect' => false],
                            ['answer' => 'Une monnaie nationale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre la tragédie des biens communs ?',
                        'answers' => [
                            ['answer' => 'La surexploitation d’une ressource commune parce que chaque utilisateur ne supporte pas intégralement le coût collectif de son utilisation', 'iscorrect' => true],
                            ['answer' => 'La sous-utilisation d’un bien privé', 'iscorrect' => false],
                            ['answer' => 'Une hausse du surplus collectif due à une coopération parfaite', 'iscorrect' => false],
                            ['answer' => 'Une réduction volontaire de toute production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une asymétrie d’information ?',
                        'answers' => [
                            ['answer' => 'Une situation dans laquelle les parties à une transaction ne disposent pas du même niveau d’information pertinent', 'iscorrect' => true],
                            ['answer' => 'Une situation où les prix sont identiques', 'iscorrect' => false],
                            ['answer' => 'Une situation où les coûts sont toujours connus', 'iscorrect' => false],
                            ['answer' => 'Une situation où tous les agents ont exactement les mêmes informations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître avant une transaction en présence d’information asymétrique ?',
                        'answers' => [
                            ['answer' => 'La sélection adverse', 'iscorrect' => true],
                            ['answer' => 'L’aléa moral uniquement', 'iscorrect' => false],
                            ['answer' => 'La disparition de la demande', 'iscorrect' => false],
                            ['answer' => 'Une baisse automatique du coût marginal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître après la conclusion d’un contrat lorsque les actions d’un agent sont difficilement observables ?',
                        'answers' => [
                            ['answer' => 'L’aléa moral', 'iscorrect' => true],
                            ['answer' => 'La pénurie', 'iscorrect' => false],
                            ['answer' => 'Le surplus du consommateur', 'iscorrect' => false],
                            ['answer' => 'L’avantage comparatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les institutions économiques peuvent-elles réduire certains problèmes d’information ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent imposer des normes, divulgations, garanties ou mécanismes de contrôle qui améliorent la qualité de l’information', 'iscorrect' => true],
                            ['answer' => 'Elles suppriment toujours toute incertitude', 'iscorrect' => false],
                            ['answer' => 'Elles rendent tous les agents parfaitement informés', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute transaction', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Microéconomie appliquée aux politiques publiques',
                'questions' => [
                    [
                        'question' => 'Pourquoi une politique publique doit-elle comparer les bénéfices marginaux et les coûts marginaux ?',
                        'answers' => [
                            ['answer' => 'Pour déterminer si une unité supplémentaire de politique améliore encore le bien-être net', 'iscorrect' => true],
                            ['answer' => 'Pour garantir un budget toujours équilibré', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer toute contrainte budgétaire', 'iscorrect' => false],
                            ['answer' => 'Pour fixer tous les prix administrés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un prix plafond peut-il nécessiter un mécanisme complémentaire de rationnement ?',
                        'answers' => [
                            ['answer' => 'Lorsque le prix est maintenu sous l’équilibre, la demande peut dépasser l’offre', 'iscorrect' => true],
                            ['answer' => 'Parce que l’offre devient toujours infinie', 'iscorrect' => false],
                            ['answer' => 'Parce que la demande disparaît', 'iscorrect' => false],
                            ['answer' => 'Parce que tous les consommateurs peuvent obtenir toute quantité souhaitée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un contrôle des loyers très contraignant dans un marché tendu ?',
                        'answers' => [
                            ['answer' => 'Une réduction de l’offre locative, une baisse de l’entretien ou l’apparition de rationnements non-prix', 'iscorrect' => true],
                            ['answer' => 'Une hausse automatique de la construction', 'iscorrect' => false],
                            ['answer' => 'Une amélioration nécessaire de la qualité des logements', 'iscorrect' => false],
                            ['answer' => 'Une disparition de la pénurie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un salaire minimum peut-il avoir des effets différents selon le marché du travail ?',
                        'answers' => [
                            ['answer' => 'Les effets dépendent notamment du niveau du salaire minimum, des élasticités de l’offre et de la demande de travail et du pouvoir de marché', 'iscorrect' => true],
                            ['answer' => 'Tous les marchés du travail ont exactement les mêmes caractéristiques', 'iscorrect' => false],
                            ['answer' => 'Le salaire minimum n’a jamais aucun effet', 'iscorrect' => false],
                            ['answer' => 'Les entreprises augmentent toujours les embauches', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe sur les émissions peut-elle être préférable à une interdiction absolue dans certains cas ?',
                        'answers' => [
                            ['answer' => 'Elle permet d’intégrer le coût environnemental tout en laissant les agents choisir leurs moyens de réduction au moindre coût', 'iscorrect' => true],
                            ['answer' => 'Elle garantit que personne ne réduira la pollution', 'iscorrect' => false],
                            ['answer' => 'Elle rend la pollution gratuite', 'iscorrect' => false],
                            ['answer' => 'Elle élimine nécessairement tous les coûts de contrôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une subvention ciblée peut chercher à corriger ?',
                        'answers' => [
                            ['answer' => 'Une externalité positive ou une contrainte qui empêche une activité socialement bénéfique d’atteindre son niveau souhaitable', 'iscorrect' => true],
                            ['answer' => 'Une pénurie créée uniquement par la baisse de l’offre', 'iscorrect' => false],
                            ['answer' => 'Un monopole sans aucune autre intervention', 'iscorrect' => false],
                            ['answer' => 'Une baisse du prix d’équilibre dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de concurrence peut-elle intervenir dans une fusion ?',
                        'answers' => [
                            ['answer' => 'Pour vérifier si la concentration risque de réduire substantiellement la concurrence malgré d’éventuels gains d’efficacité', 'iscorrect' => true],
                            ['answer' => 'Pour interdire toute entreprise de devenir plus efficace', 'iscorrect' => false],
                            ['answer' => 'Pour garantir que toutes les entreprises aient la même taille', 'iscorrect' => false],
                            ['answer' => 'Pour fixer directement les salaires des entreprises fusionnées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse d’incidence est-elle importante en politique publique ?',
                        'answers' => [
                            ['answer' => 'La personne ou entreprise légalement visée par une mesure n’est pas nécessairement celle qui supporte économiquement la plus grande partie de son coût', 'iscorrect' => true],
                            ['answer' => 'La loi détermine toujours parfaitement l’incidence économique', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs supportent toujours toutes les taxes', 'iscorrect' => false],
                            ['answer' => 'Les producteurs supportent toujours toutes les taxes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques publiques doivent-elles tenir compte des incitations comportementales ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent modifier leurs décisions en réaction aux taxes, subventions, réglementations et prix', 'iscorrect' => true],
                            ['answer' => 'Les agents ne réagissent jamais aux incitations', 'iscorrect' => false],
                            ['answer' => 'Les comportements restent toujours constants', 'iscorrect' => false],
                            ['answer' => 'Les incitations concernent seulement les entreprises publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus adaptée pour évaluer une intervention économique ?',
                        'answers' => [
                            ['answer' => 'Comparer les effets sur l’efficacité, l’équité, les incitations, les coûts administratifs et les comportements', 'iscorrect' => true],
                            ['answer' => 'Examiner uniquement son coût budgétaire', 'iscorrect' => false],
                            ['answer' => 'Examiner uniquement son effet sur les prix', 'iscorrect' => false],
                            ['answer' => 'Supposer que toute intervention améliore automatiquement le bien-être', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Révision intégrée de microéconomie',
                'questions' => [
                    [
                        'question' => 'Une hausse du revenu augmente la demande d’un bien tandis qu’une hausse du prix d’un substitut réduit cette même demande. Quelle interprétation est cohérente ?',
                        'answers' => [
                            ['answer' => 'Le bien peut être normal et le substitut influence négativement sa demande lorsque son prix baisse', 'iscorrect' => true],
                            ['answer' => 'Le bien est nécessairement inférieur', 'iscorrect' => false],
                            ['answer' => 'Le bien est nécessairement un bien public', 'iscorrect' => false],
                            ['answer' => 'Le prix du substitut n’a jamais d’effet sur la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise observe que le coût marginal dépasse le revenu marginal pour sa dernière unité produite. Quelle décision est cohérente dans un modèle simple de maximisation du profit ?',
                        'answers' => [
                            ['answer' => 'Réduire la production jusqu’à atteindre une situation où le coût marginal n’est plus supérieur au revenu marginal', 'iscorrect' => true],
                            ['answer' => 'Augmenter automatiquement la production', 'iscorrect' => false],
                            ['answer' => 'Augmenter le coût fixe', 'iscorrect' => false],
                            ['answer' => 'Réduire la demande du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un marché est concurrentiel mais génère une pollution importante non prise en compte dans les prix. Quelle conclusion est la plus appropriée ?',
                        'answers' => [
                            ['answer' => 'L’équilibre privé peut produire une quantité supérieure au niveau socialement efficace', 'iscorrect' => true],
                            ['answer' => 'L’équilibre est nécessairement optimal', 'iscorrect' => false],
                            ['answer' => 'La pollution ne constitue pas un problème économique', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal privé est toujours supérieur au coût marginal social', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une demande devient plus élastique à long terme. Quelle conséquence peut-elle avoir pour une entreprise qui augmente fortement ses prix ?',
                        'answers' => [
                            ['answer' => 'La baisse de quantité demandée peut devenir plus importante après l’ajustement des consommateurs', 'iscorrect' => true],
                            ['answer' => 'La quantité demandée devient nécessairement constante', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires augmente automatiquement', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal devient nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une technologie réduit le coût marginal de production et la demande reste inchangée. Quel effet est plausible dans un marché concurrentiel ?',
                        'answers' => [
                            ['answer' => 'Une baisse du prix d’équilibre accompagnée d’une hausse de la quantité échangée', 'iscorrect' => true],
                            ['answer' => 'Une hausse certaine du prix et une baisse de la quantité', 'iscorrect' => false],
                            ['answer' => 'Une disparition de l’offre', 'iscorrect' => false],
                            ['answer' => 'Aucun changement possible sur le marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un pouvoir de marché et fait face à une demande décroissante. Pourquoi le revenu marginal est-il inférieur au prix pour une unité supplémentaire dans le modèle standard ?',
                        'answers' => [
                            ['answer' => 'Pour vendre davantage, l’entreprise doit réduire le prix appliqué aux unités concernées sur la courbe de demande', 'iscorrect' => true],
                            ['answer' => 'Le coût marginal est nécessairement inférieur à zéro', 'iscorrect' => false],
                            ['answer' => 'La demande devient parfaitement élastique', 'iscorrect' => false],
                            ['answer' => 'Le prix n’influence jamais le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un gouvernement introduit une taxe sur un marché dont l’offre est très inélastique et la demande très élastique. Qui supportera généralement une plus grande part de la taxe ?',
                        'answers' => [
                            ['answer' => 'Les producteurs, car l’offre réagit peu tandis que les consommateurs peuvent fortement réduire leur demande', 'iscorrect' => true],
                            ['answer' => 'Les consommateurs dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Le gouvernement uniquement', 'iscorrect' => false],
                            ['answer' => 'Personne, car la taxe disparaît dans le prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un marché du travail connaît une forte asymétrie d’information sur l’effort fourni après l’embauche. Quel mécanisme économique peut apparaître ?',
                        'answers' => [
                            ['answer' => 'L’aléa moral', 'iscorrect' => true],
                            ['answer' => 'La sélection adverse uniquement', 'iscorrect' => false],
                            ['answer' => 'Une externalité positive nécessairement', 'iscorrect' => false],
                            ['answer' => 'Un prix plafond', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une ressource commune est surexploitée par plusieurs utilisateurs. Quel problème économique explique cette situation ?',
                        'answers' => [
                            ['answer' => 'Chaque utilisateur ne prend pas suffisamment en compte le coût qu’il impose aux autres utilisateurs', 'iscorrect' => true],
                            ['answer' => 'Les ressources communes sont toujours non rivales', 'iscorrect' => false],
                            ['answer' => 'La demande est toujours insuffisante', 'iscorrect' => false],
                            ['answer' => 'Le coût privé est nécessairement supérieur au coût social', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche résume le mieux le raisonnement microéconomique ?',
                        'answers' => [
                            ['answer' => 'Étudier les incitations, les contraintes, les arbitrages marginaux et les interactions entre agents', 'iscorrect' => true],
                            ['answer' => 'Analyser uniquement les agrégats macroéconomiques', 'iscorrect' => false],
                            ['answer' => 'Supposer que les ressources sont illimitées', 'iscorrect' => false],
                            ['answer' => 'Ignorer systématiquement les prix et les coûts d’opportunité', 'iscorrect' => false],
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
