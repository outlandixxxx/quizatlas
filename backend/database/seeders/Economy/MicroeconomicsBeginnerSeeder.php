<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MicroeconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'microeconomics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondements de la microéconomie',
                'description' => 'Quiz débutant sur Fondements de la microéconomie.',
                'questions' => [
                    [
                        'question' => 'Que cherche principalement à étudier la microéconomie ?',
                        'explanation' => 'La microéconomie étudie surtout les choix des agents individuels, notamment les ménages et les entreprises, ainsi que leurs interactions sur les marchés.',
                        'choices' => [
                            'Les décisions des ménages, des entreprises et leur interaction sur les marchés',
                            'Uniquement la croissance économique nationale',
                            'Uniquement les relations entre les banques centrales',
                            'Uniquement les échanges entre États',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la rareté est-elle fondamentale en microéconomie ?',
                        'explanation' => 'La rareté signifie que les ressources disponibles sont limitées par rapport aux besoins et préférences. Les agents doivent donc faire des choix.',
                        'choices' => [
                            'Parce que les ressources sont limitées alors que les besoins et les préférences sont nombreux',
                            'Parce que les consommateurs disposent toujours de ressources illimitées',
                            'Parce que tous les biens sont gratuits',
                            'Parce que les entreprises produisent toujours moins que la demande',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût d’opportunité ?',
                        'explanation' => 'Le coût d’opportunité correspond à la valeur de la meilleure possibilité à laquelle on renonce lorsqu’on choisit une autre option.',
                        'choices' => [
                            'La valeur de la meilleure alternative abandonnée lorsqu’un choix est effectué',
                            'Le coût affiché sur une facture uniquement',
                            'Le profit total d’une entreprise',
                            'Le montant des impôts payés',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel principe décrit le raisonnement marginal ?',
                        'explanation' => 'Le raisonnement marginal consiste à comparer ce que rapporte une unité ou une action supplémentaire avec ce qu’elle coûte afin de décider s’il faut l’ajouter.',
                        'choices' => [
                            'Comparer le bénéfice supplémentaire au coût supplémentaire d’une décision',
                            'Comparer uniquement les coûts totaux historiques',
                            'Ignorer les conséquences d’une unité supplémentaire',
                            'Choisir toujours l’option la moins chère',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel agent économique cherche généralement à maximiser son utilité ?',
                        'explanation' => 'Le consommateur cherche généralement à choisir le panier de biens et services qui maximise son utilité compte tenu de son budget et de ses préférences.',
                        'choices' => [
                            'Le consommateur',
                            'Le gouvernement uniquement',
                            'La banque centrale uniquement',
                            'Le marché lui-même',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel objectif est généralement associé à une entreprise privée ?',
                        'explanation' => 'Une entreprise privée cherche généralement à maximiser son profit, c’est-à-dire l’écart entre ses recettes et ses coûts, sous les contraintes auxquelles elle fait face.',
                        'choices' => [
                            'Maximiser son profit sous les contraintes auxquelles elle fait face',
                            'Maximiser uniquement le nombre de salariés',
                            'Réduire nécessairement sa production',
                            'Éliminer la demande du marché',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un marché ?',
                        'explanation' => 'Un marché est un mécanisme d’échange dans lequel des acheteurs et des vendeurs se rencontrent, directement ou indirectement, pour déterminer les transactions.',
                        'choices' => [
                            'Un dispositif où acheteurs et vendeurs interagissent pour échanger des biens, services ou actifs',
                            'Uniquement un lieu physique de vente',
                            'Uniquement une entreprise publique',
                            'Un système sans acheteurs ni vendeurs',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un prix dans une économie de marché ?',
                        'explanation' => 'Dans une économie de marché, le prix fournit un signal qui aide les acheteurs et les vendeurs à adapter leurs décisions en fonction de la rareté et des incitations.',
                        'choices' => [
                            'Un signal qui contribue à coordonner les décisions des acheteurs et des vendeurs',
                            'Une mesure directe du bonheur',
                            'Une garantie de profit pour les producteurs',
                            'Une quantité physique de production',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les préférences des consommateurs sont-elles importantes ?',
                        'explanation' => 'Les préférences indiquent ce que les consommateurs apprécient davantage ou moins. Elles influencent donc directement leurs choix d’achat et leur demande.',
                        'choices' => [
                            'Elles influencent les biens et services que les consommateurs souhaitent acheter',
                            'Elles déterminent toujours les coûts de production',
                            'Elles fixent directement les salaires',
                            'Elles empêchent toute concurrence',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un incitatif économique ?',
                        'explanation' => 'Un incitatif économique change le gain ou le coût associé à une action. Il peut ainsi encourager ou décourager certains comportements.',
                        'choices' => [
                            'Un élément qui modifie les avantages ou les coûts associés à un comportement',
                            'Une obligation de produire toujours la même quantité',
                            'Une règle qui supprime tous les choix',
                            'Un indicateur comptable sans effet sur les décisions',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Demande et comportement du consommateur',
                'description' => 'Quiz débutant sur Demande et comportement du consommateur.',
                'questions' => [
                    [
                        'question' => 'Que représente la quantité demandée ?',
                        'explanation' => 'La quantité demandée est la quantité qu’un agent souhaite et peut acheter à un prix donné. Elle dépend notamment du prix, du revenu et des préférences.',
                        'choices' => [
                            'La quantité qu’un consommateur ou un ensemble de consommateurs souhaite et peut acheter à un prix donné',
                            'La quantité que les producteurs veulent vendre',
                            'La quantité produite par l’État',
                            'Le stock total disponible dans un pays',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Selon la loi de la demande, toutes choses égales par ailleurs, une hausse du prix tend à :',
                        'explanation' => 'Toutes choses égales par ailleurs, un prix plus élevé réduit généralement la quantité demandée, ce qui correspond à la loi de la demande.',
                        'choices' => [
                            'Réduire la quantité demandée',
                            'Augmenter toujours la quantité demandée',
                            'Augmenter automatiquement le revenu du consommateur',
                            'Réduire l’offre de monnaie',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une baisse du prix d’un bien peut augmenter la quantité demandée notamment grâce :',
                        'explanation' => 'Une baisse du prix rend le bien relativement moins cher que ses substituts et augmente aussi le pouvoir d’achat réel. Ce sont respectivement les effets de substitution et de revenu.',
                        'choices' => [
                            'À l’effet de substitution et à l’effet de revenu',
                            'À une disparition de la rareté',
                            'À une hausse automatique des coûts de production',
                            'À une réduction obligatoire de l’offre',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien normal ?',
                        'explanation' => 'Un bien normal est un bien dont la consommation augmente généralement lorsque le revenu du consommateur augmente, toutes choses égales par ailleurs.',
                        'choices' => [
                            'Un bien dont la demande augmente généralement lorsque le revenu augmente',
                            'Un bien dont la demande augmente toujours lorsque son prix augmente',
                            'Un bien nécessairement gratuit',
                            'Un bien produit uniquement par l’État',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien inférieur ?',
                        'explanation' => 'Un bien inférieur est un bien dont la demande peut diminuer lorsque le revenu augmente, parce que le consommateur se tourne alors vers des alternatives qu’il préfère.',
                        'choices' => [
                            'Un bien dont la demande peut diminuer lorsque le revenu augmente',
                            'Un bien dont le prix est toujours inférieur à zéro',
                            'Un bien toujours de mauvaise qualité',
                            'Un bien qui n’a aucun substitut',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Deux biens sont substituts lorsque :',
                        'explanation' => 'Deux biens sont substituts lorsqu’ils peuvent répondre à un besoin similaire. Si le prix de l’un augmente, les consommateurs peuvent se reporter vers l’autre.',
                        'choices' => [
                            'Une hausse du prix de l’un peut augmenter la demande de l’autre',
                            'Ils doivent toujours être consommés ensemble',
                            'Ils ont toujours le même prix',
                            'Ils sont produits par le même fournisseur',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Deux biens sont complémentaires lorsque :',
                        'explanation' => 'Deux biens complémentaires sont généralement consommés ensemble. Une variation du prix de l’un peut donc modifier la demande de l’autre.',
                        'choices' => [
                            'Ils sont généralement utilisés ensemble dans la consommation',
                            'Ils sont toujours des substituts',
                            'Le prix de l’un n’a jamais d’effet sur l’autre',
                            'Ils doivent être produits dans le même pays',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une hausse du revenu des consommateurs déplace généralement la demande d’un bien normal :',
                        'explanation' => 'Pour un bien normal, une hausse du revenu augmente la demande à chaque niveau de prix, ce qui se traduit graphiquement par un déplacement de la courbe vers la droite.',
                        'choices' => [
                            'Vers la droite',
                            'Vers la gauche',
                            'Elle ne change jamais',
                            'Elle devient nécessairement verticale',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une amélioration des préférences pour un produit tend à :',
                        'explanation' => 'Une préférence plus forte pour un produit augmente la quantité que les consommateurs souhaitent acheter à prix donné, donc la demande se déplace vers la droite.',
                        'choices' => [
                            'Augmenter la demande pour ce produit',
                            'Réduire automatiquement l’offre',
                            'Réduire nécessairement le revenu des consommateurs',
                            'Supprimer le marché',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la demande individuelle peut-elle différer entre deux consommateurs ?',
                        'explanation' => 'Deux consommateurs peuvent avoir des demandes différentes parce qu’ils n’ont pas nécessairement le même revenu, les mêmes goûts, les mêmes besoins ou les mêmes contraintes.',
                        'choices' => [
                            'Leurs revenus, préférences, contraintes et besoins peuvent être différents',
                            'Les prix sont toujours différents pour chaque consommateur',
                            'Tous les consommateurs ont des préférences identiques',
                            'Les consommateurs ont toujours la même contrainte budgétaire',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Offre et décisions du producteur',
                'description' => 'Quiz débutant sur Offre et décisions du producteur.',
                'questions' => [
                    [
                        'question' => 'Que représente la quantité offerte ?',
                        'explanation' => 'La quantité offerte est la quantité qu’un producteur est disposé et capable de vendre à un prix donné, compte tenu de ses coûts et de ses capacités.',
                        'choices' => [
                            'La quantité qu’un producteur souhaite et peut vendre à un prix donné',
                            'La quantité demandée par les consommateurs',
                            'Le chiffre d’affaires total',
                            'Le montant des salaires',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Selon la loi de l’offre, toutes choses égales par ailleurs, une hausse du prix tend à :',
                        'explanation' => 'Toutes choses égales par ailleurs, un prix plus élevé rend davantage d’unités de production rentables, ce qui tend à augmenter la quantité offerte.',
                        'choices' => [
                            'Augmenter la quantité offerte',
                            'Réduire toujours la quantité offerte',
                            'Réduire automatiquement le nombre d’entreprises',
                            'Augmenter la demande de manière obligatoire',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une hausse des coûts des matières premières tend à déplacer l’offre :',
                        'explanation' => 'Lorsque les matières premières deviennent plus coûteuses, produire est moins rentable à chaque niveau de prix. La courbe d’offre se déplace donc généralement vers la gauche.',
                        'choices' => [
                            'Vers la gauche',
                            'Vers la droite',
                            'Sans modifier la courbe',
                            'Vers une courbe parfaitement verticale dans tous les cas',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une amélioration technologique peut généralement :',
                        'explanation' => 'Une technologie plus efficace peut réduire les coûts de production ou augmenter la productivité. À prix donné, les producteurs peuvent alors offrir davantage.',
                        'choices' => [
                            'Déplacer l’offre vers la droite en réduisant certains coûts de production',
                            'Réduire systématiquement la productivité',
                            'Réduire automatiquement la demande',
                            'Supprimer tout coût fixe',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi le prix d’un produit influence-t-il la quantité offerte ?',
                        'explanation' => 'Un prix plus élevé augmente la recette obtenue sur les unités vendues et peut rendre rentable la production d’unités supplémentaires malgré leur coût.',
                        'choices' => [
                            'Un prix plus élevé peut rendre certaines unités supplémentaires de production plus rentables',
                            'Le prix ne joue jamais sur les incitations des producteurs',
                            'Les producteurs ont toujours des coûts nuls',
                            'Le prix détermine uniquement les préférences des consommateurs',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que le coût marginal ?',
                        'explanation' => 'Le coût marginal mesure le coût supplémentaire engendré par la production d’une unité supplémentaire. Il est essentiel pour décider s’il faut augmenter la production.',
                        'choices' => [
                            'Le coût supplémentaire associé à la production d’une unité supplémentaire',
                            'Le coût total de toutes les unités',
                            'Le chiffre d’affaires marginal',
                            'Le bénéfice annuel',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que le revenu marginal ?',
                        'explanation' => 'Le revenu marginal mesure la recette supplémentaire obtenue grâce à la vente d’une unité supplémentaire.',
                        'choices' => [
                            'Le revenu supplémentaire généré par la vente d’une unité additionnelle',
                            'Le coût supplémentaire d’une unité',
                            'Le revenu total divisé par les salaires',
                            'Le prix moins les impôts uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Dans un modèle simple de maximisation du profit, une entreprise compare principalement :',
                        'explanation' => 'Dans le modèle simple de maximisation du profit, l’entreprise augmente sa production tant que le revenu marginal couvre le coût marginal et s’arrête autour du point où ils s’égalent.',
                        'choices' => [
                            'Le revenu marginal et le coût marginal',
                            'Le chiffre d’affaires et les impôts uniquement',
                            'Les salaires et les exportations',
                            'Le PIB et le chômage',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle continuer à produire à court terme malgré un profit négatif ?',
                        'explanation' => 'À court terme, certains coûts fixes doivent être payés même si l’entreprise arrête de produire. Produire peut donc être rationnel si la recette couvre au moins les coûts variables.',
                        'choices' => [
                            'Elle peut couvrir une partie de ses coûts fixes grâce à sa marge sur les coûts variables',
                            'Un profit négatif signifie toujours une recette nulle',
                            'Les coûts fixes disparaissent automatiquement',
                            'La demande devient nécessairement infinie',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la productivité est-elle importante pour la décision de production ?',
                        'explanation' => 'Une productivité plus élevée signifie que les mêmes facteurs permettent de produire davantage. Le coût par unité peut ainsi diminuer, ce qui améliore les conditions de production.',
                        'choices' => [
                            'Une productivité plus élevée peut réduire le coût par unité produite',
                            'Elle augmente toujours les coûts unitaires',
                            'Elle n’a aucun lien avec la production',
                            'Elle détermine directement les préférences des consommateurs',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Équilibre de marché et formation des prix',
                'description' => 'Quiz débutant sur Équilibre de marché et formation des prix.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le prix d’équilibre ?',
                        'explanation' => 'Le prix d’équilibre est le prix auquel la quantité que les acheteurs souhaitent acheter correspond à la quantité que les vendeurs souhaitent vendre.',
                        'choices' => [
                            'Le prix auquel la quantité demandée est égale à la quantité offerte',
                            'Le prix fixé uniquement par le gouvernement',
                            'Le prix maximal possible',
                            'Le prix auquel les entreprises ne produisent plus',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un excédent d’offre ?',
                        'explanation' => 'Un excédent d’offre apparaît lorsque les vendeurs proposent plus que les acheteurs ne souhaitent acquérir au prix considéré. Des pressions à la baisse sur le prix peuvent alors apparaître.',
                        'choices' => [
                            'Une situation où la quantité offerte dépasse la quantité demandée au prix considéré',
                            'Une situation où la demande dépasse l’offre',
                            'Une situation sans entreprises',
                            'Une situation où le prix est nécessairement nul',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une pénurie ?',
                        'explanation' => 'Une pénurie apparaît lorsque les acheteurs souhaitent acheter davantage que ce que les vendeurs offrent au prix considéré.',
                        'choices' => [
                            'Une situation où la quantité demandée dépasse la quantité offerte au prix considéré',
                            'Une situation où l’offre est supérieure à la demande',
                            'Une situation où tous les producteurs réalisent un bénéfice',
                            'Une situation où les coûts sont nuls',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une augmentation de la demande, toutes choses égales par ailleurs, tend généralement à :',
                        'explanation' => 'Une augmentation de la demande déplace la demande vers la droite. Avec une offre donnée, le nouvel équilibre présente généralement un prix et une quantité plus élevés.',
                        'choices' => [
                            'Augmenter le prix et la quantité d’équilibre',
                            'Réduire le prix et la quantité d’équilibre',
                            'Réduire uniquement la quantité',
                            'Ne produire aucun effet sur le marché',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une diminution de l’offre, toutes choses égales par ailleurs, tend généralement à :',
                        'explanation' => 'Une diminution de l’offre réduit la quantité disponible à chaque prix. Le nouvel équilibre tend donc à présenter un prix plus élevé et une quantité plus faible.',
                        'choices' => [
                            'Augmenter le prix d’équilibre et réduire la quantité d’équilibre',
                            'Réduire le prix et augmenter la quantité',
                            'Augmenter simultanément offre et demande',
                            'Ne modifier que le revenu des consommateurs',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi le prix peut-il coordonner les décisions décentralisées ?',
                        'explanation' => 'Le prix transmet une information sur la rareté et modifie les incitations. Il aide ainsi des agents qui prennent leurs décisions séparément à coordonner leurs choix.',
                        'choices' => [
                            'Il transmet des informations sur la rareté relative et les incitations des acheteurs et des vendeurs',
                            'Il impose automatiquement un niveau de production fixe',
                            'Il supprime les différences de préférences',
                            'Il rend toutes les ressources abondantes',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi un choc d’offre négatif peut-il augmenter le prix tout en réduisant la production ?',
                        'explanation' => 'Un choc d’offre négatif réduit la quantité que les producteurs peuvent ou souhaitent fournir à chaque prix. Cela crée une pression à la hausse sur le prix et à la baisse sur la quantité échangée.',
                        'choices' => [
                            'Il réduit la quantité disponible à chaque niveau de prix',
                            'Il augmente toujours la productivité',
                            'Il déplace la demande vers la droite automatiquement',
                            'Il augmente toujours les stocks',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une baisse du prix d’un substitut proche tend généralement à :',
                        'explanation' => 'Un substitut devenu moins cher devient relativement plus attractif. Une partie des consommateurs se détourne alors du produit concerné, ce qui réduit sa demande.',
                        'choices' => [
                            'Réduire la demande du produit concerné',
                            'Augmenter nécessairement la demande du produit concerné',
                            'Réduire automatiquement l’offre du substitut',
                            'Ne produire aucun effet sur les préférences',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une hausse du prix d’un complément tend généralement à :',
                        'explanation' => 'Les biens complémentaires étant utilisés ensemble, une hausse du prix de l’un rend généralement l’utilisation du complément moins attractive et réduit sa demande.',
                        'choices' => [
                            'Réduire la demande du bien qui lui est complémentaire',
                            'Augmenter toujours sa demande',
                            'Augmenter l’offre du bien sans condition',
                            'Réduire nécessairement tous les prix du marché',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi l’équilibre de marché ne signifie-t-il pas nécessairement que la situation est socialement optimale ?',
                        'explanation' => 'Un équilibre de marché peut être inefficace lorsque certains coûts ou bénéfices pour des tiers ne sont pas pris en compte, ou lorsque le pouvoir de marché et l’information imparfaite perturbent l’allocation.',
                        'choices' => [
                            'Des externalités, pouvoirs de marché ou problèmes d’information peuvent rendre l’équilibre inefficace',
                            'Un équilibre n’existe jamais dans un marché',
                            'Le prix d’équilibre est toujours trop élevé',
                            'Les consommateurs ne participent jamais au marché',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Élasticité et incidence économique',
                'description' => 'Quiz débutant sur Élasticité et incidence économique.',
                'questions' => [
                    [
                        'question' => 'Que mesure l’élasticité-prix de la demande ?',
                        'explanation' => 'L’élasticité-prix de la demande indique de combien la quantité demandée réagit, en pourcentage, à une variation en pourcentage du prix.',
                        'choices' => [
                            'La variation proportionnelle de la quantité demandée par rapport à une variation proportionnelle du prix',
                            'La variation du PIB par rapport à l’inflation',
                            'La variation de l’offre par rapport au salaire',
                            'La variation du chômage par rapport aux exportations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une demande dont l’élasticité-prix en valeur absolue est supérieure à 1 est :',
                        'explanation' => 'Une valeur absolue supérieure à 1 signifie que la quantité demandée varie proportionnellement davantage que le prix. La demande est alors dite élastique.',
                        'choices' => [
                            'Élastique',
                            'Inélastique',
                            'Unitaire par définition',
                            'Parfaitement inélastique',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le prix augmente de 10 % et la quantité demandée diminue de 20 %, l’élasticité-prix approximative est :',
                        'explanation' => 'L’élasticité-prix approximative se calcule par la variation relative de la quantité divisée par la variation relative du prix : -20 % / 10 % = -2.',
                        'choices' => [
                            '-2',
                            '-0,5',
                            '2',
                            '0,5',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Lorsque la demande est élastique, une hausse du prix tend généralement à :',
                        'explanation' => 'Lorsque la demande est élastique, la quantité demandée baisse proportionnellement plus que le prix n’augmente. La recette totale diminue donc généralement.',
                        'choices' => [
                            'Réduire la recette totale',
                            'Augmenter toujours la recette totale',
                            'Ne modifier aucunement la recette',
                            'Faire disparaître l’offre',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Lorsque la demande est inélastique, une hausse du prix tend généralement à :',
                        'explanation' => 'Lorsque la demande est inélastique, la quantité demandée baisse proportionnellement moins que le prix n’augmente. La hausse du prix augmente alors généralement la recette totale.',
                        'choices' => [
                            'Augmenter la recette totale',
                            'Réduire nécessairement la recette totale',
                            'Réduire le prix',
                            'Ne modifier aucune variable',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'De quoi dépend l’incidence économique d’une taxe ?',
                        'explanation' => 'La répartition économique d’une taxe dépend surtout de la sensibilité de l’offre et de la demande au prix. La partie la moins élastique supporte généralement une plus grande part de la charge.',
                        'choices' => [
                            'De l’élasticité relative de l’offre et de la demande',
                            'Uniquement du taux de taxe légal',
                            'Uniquement du nombre de producteurs',
                            'Uniquement du PIB national',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une offre très inélastique signifie généralement que :',
                        'explanation' => 'Une offre très inélastique signifie que la quantité offerte réagit peu aux variations de prix. Les producteurs ajustent donc relativement peu leur production.',
                        'choices' => [
                            'Les producteurs modifient relativement peu la quantité offerte lorsque le prix change',
                            'Les producteurs augmentent toujours fortement leur production',
                            'Le prix reste toujours constant',
                            'La demande devient nulle',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi le temps influence-t-il souvent l’élasticité de l’offre ?',
                        'explanation' => 'À court terme, les capacités de production sont difficiles à modifier. À long terme, les entreprises peuvent davantage investir, changer leurs équipements ou adapter les facteurs utilisés.',
                        'choices' => [
                            'À long terme, les producteurs peuvent ajuster davantage les capacités et les facteurs utilisés',
                            'À long terme, la production devient toujours fixe',
                            'Les consommateurs cessent d’exister',
                            'Les prix ne jouent plus aucun rôle',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel facteur rend généralement la demande d’un bien plus élastique ?',
                        'explanation' => 'La présence de nombreux substituts proches facilite le report vers d’autres produits lorsque le prix change. La demande du bien devient donc généralement plus sensible au prix.',
                        'choices' => [
                            'La disponibilité de nombreux substituts proches',
                            'L’absence totale de substituts',
                            'Une très faible part du budget dans tous les cas',
                            'L’urgence absolue du besoin',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi l’élasticité-prix est-elle utile pour une entreprise ?',
                        'explanation' => 'Pour une entreprise, l’élasticité permet d’anticiper l’ampleur de la réaction des ventes à une variation de prix et d’évaluer les conséquences possibles sur les recettes.',
                        'choices' => [
                            'Elle aide à anticiper la réaction de la demande à une modification du prix',
                            'Elle garantit le bénéfice futur',
                            'Elle remplace l’analyse des coûts',
                            'Elle fixe automatiquement le prix optimal',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Externalités, biens publics et information',
                'description' => 'Quiz débutant sur Externalités, biens publics et information.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une externalité négative de production ?',
                        'explanation' => 'Une externalité négative de production survient lorsque la production impose un coût à des tiers qui n’est pas entièrement pris en compte dans le coût privé du producteur.',
                        'choices' => [
                            'Une activité de production impose un coût à des tiers qui n’est pas entièrement supporté par le producteur',
                            'Une baisse du coût privé uniquement',
                            'Un bénéfice privé reçu par l’entreprise',
                            'Une réduction du prix d’un bien',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une taxe corrective peut-elle améliorer l’allocation dans un marché polluant ?',
                        'explanation' => 'Une taxe corrective peut faire entrer une partie du coût externe dans les décisions privées. Elle rapproche ainsi le coût supporté par le producteur du coût pour la société.',
                        'choices' => [
                            'Elle peut rapprocher le coût privé du coût social de l’activité',
                            'Elle augmente automatiquement la pollution',
                            'Elle rend la demande parfaitement inélastique',
                            'Elle supprime tous les coûts de production',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un bien public est caractérisé classiquement par :',
                        'explanation' => 'Un bien public est classiquement non rival, car l’usage par une personne ne réduit pas celui des autres, et non excluable, car il est difficile d’empêcher les non-payeurs d’en bénéficier.',
                        'choices' => [
                            'La non-rivalité et la non-excluabilité',
                            'La rivalité et l’excluabilité parfaite',
                            'La rivalité uniquement',
                            'L’excluabilité uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel problème peut entraîner un bien public insuffisamment financé par des contributions volontaires ?',
                        'explanation' => 'Le problème du passager clandestin apparaît lorsque des personnes peuvent bénéficier d’un bien public sans contribuer à son financement, ce qui peut conduire à un financement insuffisant.',
                        'choices' => [
                            'Le comportement de passager clandestin',
                            'Une concurrence parfaite',
                            'Une baisse automatique du coût social',
                            'Une hausse garantie du surplus du consommateur',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une ressource commune ?',
                        'explanation' => 'Une ressource commune est généralement rivale, car son usage réduit ce qui reste pour les autres, mais difficilement excluable, ce qui complique son contrôle.',
                        'choices' => [
                            'Une ressource généralement rivale mais difficilement excluable',
                            'Un bien parfaitement non rival et excluable',
                            'Un bien exclusivement privé',
                            'Une monnaie nationale',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle situation illustre la tragédie des biens communs ?',
                        'explanation' => 'La tragédie des biens communs apparaît lorsque chaque utilisateur tient compte de son bénéfice privé mais pas entièrement du coût qu’il impose aux autres, ce qui peut conduire à la surexploitation.',
                        'choices' => [
                            'La surexploitation d’une ressource commune parce que chaque utilisateur ne supporte pas intégralement le coût collectif de son utilisation',
                            'La sous-utilisation d’un bien privé',
                            'Une hausse du surplus collectif due à une coopération parfaite',
                            'Une réduction volontaire de toute production',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une asymétrie d’information ?',
                        'explanation' => 'Il y a asymétrie d’information lorsque les parties à un échange ne disposent pas de la même information pertinente au moment de prendre leur décision.',
                        'choices' => [
                            'Une situation dans laquelle les parties à une transaction ne disposent pas du même niveau d’information pertinent',
                            'Une situation où les prix sont identiques',
                            'Une situation où les coûts sont toujours connus',
                            'Une situation où tous les agents ont exactement les mêmes informations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel problème peut apparaître avant une transaction en présence d’information asymétrique ?',
                        'explanation' => 'La sélection adverse concerne un problème qui se produit avant la transaction : l’information cachée peut modifier la composition des personnes ou produits présents sur le marché.',
                        'choices' => [
                            'La sélection adverse',
                            'L’aléa moral uniquement',
                            'La disparition de la demande',
                            'Une baisse automatique du coût marginal',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel problème peut apparaître après la conclusion d’un contrat lorsque les actions d’un agent sont difficilement observables ?',
                        'explanation' => 'L’aléa moral apparaît après la conclusion d’un contrat lorsque l’action d’un agent est difficile à observer et que le contrat peut modifier ses incitations à agir.',
                        'choices' => [
                            'L’aléa moral',
                            'La pénurie',
                            'Le surplus du consommateur',
                            'L’avantage comparatif',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les institutions économiques peuvent-elles réduire certains problèmes d’information ?',
                        'explanation' => 'Les institutions peuvent améliorer l’information grâce à des obligations de divulgation, des normes, des garanties ou des dispositifs de contrôle qui réduisent certains risques d’information.',
                        'choices' => [
                            'Elles peuvent imposer des normes, divulgations, garanties ou mécanismes de contrôle qui améliorent la qualité de l’information',
                            'Elles suppriment toujours toute incertitude',
                            'Elles rendent tous les agents parfaitement informés',
                            'Elles empêchent toute transaction',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Microéconomie appliquée aux politiques publiques',
                'description' => 'Quiz débutant sur Microéconomie appliquée aux politiques publiques.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une politique publique doit-elle comparer les bénéfices marginaux et les coûts marginaux ?',
                        'explanation' => 'Comparer les bénéfices et les coûts marginaux permet de déterminer si augmenter encore une intervention apporte un gain supplémentaire supérieur à son coût supplémentaire.',
                        'choices' => [
                            'Pour déterminer si une unité supplémentaire de politique améliore encore le bien-être net',
                            'Pour garantir un budget toujours équilibré',
                            'Pour éliminer toute contrainte budgétaire',
                            'Pour fixer tous les prix administrés',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi un prix plafond peut-il nécessiter un mécanisme complémentaire de rationnement ?',
                        'explanation' => 'Un prix plafond situé sous le prix d’équilibre crée généralement une demande supérieure à l’offre. Il faut alors un autre mécanisme pour déterminer qui obtient les quantités disponibles.',
                        'choices' => [
                            'Lorsque le prix est maintenu sous l’équilibre, la demande peut dépasser l’offre',
                            'Parce que l’offre devient toujours infinie',
                            'Parce que la demande disparaît',
                            'Parce que tous les consommateurs peuvent obtenir toute quantité souhaitée',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un contrôle des loyers très contraignant dans un marché tendu ?',
                        'explanation' => 'Un contrôle des loyers très contraignant peut réduire les incitations à louer ou à entretenir les logements et peut aussi créer des formes de rationnement autres que le prix.',
                        'choices' => [
                            'Une réduction de l’offre locative, une baisse de l’entretien ou l’apparition de rationnements non-prix',
                            'Une hausse automatique de la construction',
                            'Une amélioration nécessaire de la qualité des logements',
                            'Une disparition de la pénurie',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi un salaire minimum peut-il avoir des effets différents selon le marché du travail ?',
                        'explanation' => 'Les effets d’un salaire minimum dépendent du contexte du marché du travail, notamment de son niveau par rapport au salaire d’équilibre, des élasticités et du pouvoir de marché.',
                        'choices' => [
                            'Les effets dépendent notamment du niveau du salaire minimum, des élasticités de l’offre et de la demande de travail et du pouvoir de marché',
                            'Tous les marchés du travail ont exactement les mêmes caractéristiques',
                            'Le salaire minimum n’a jamais aucun effet',
                            'Les entreprises augmentent toujours les embauches',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une taxe sur les émissions peut-elle être préférable à une interdiction absolue dans certains cas ?',
                        'explanation' => 'Une taxe sur les émissions fait payer le coût environnemental des émissions tout en laissant aux agents le choix des moyens les moins coûteux pour réduire la pollution.',
                        'choices' => [
                            'Elle permet d’intégrer le coût environnemental tout en laissant les agents choisir leurs moyens de réduction au moindre coût',
                            'Elle garantit que personne ne réduira la pollution',
                            'Elle rend la pollution gratuite',
                            'Elle élimine nécessairement tous les coûts de contrôle',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une subvention ciblée peut chercher à corriger ?',
                        'explanation' => 'Une subvention ciblée peut encourager une activité qui génère des bénéfices pour d’autres agents ou aider à lever une contrainte qui conduit à un niveau d’activité inférieur au niveau socialement souhaitable.',
                        'choices' => [
                            'Une externalité positive ou une contrainte qui empêche une activité socialement bénéfique d’atteindre son niveau souhaitable',
                            'Une pénurie créée uniquement par la baisse de l’offre',
                            'Un monopole sans aucune autre intervention',
                            'Une baisse du prix d’équilibre dans tous les cas',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une politique de concurrence peut-elle intervenir dans une fusion ?',
                        'explanation' => 'Une politique de concurrence examine une fusion lorsqu’elle peut modifier la concentration du marché et réduire la concurrence, même si certains gains d’efficacité peuvent aussi être attendus.',
                        'choices' => [
                            'Pour vérifier si la concentration risque de réduire substantiellement la concurrence malgré d’éventuels gains d’efficacité',
                            'Pour interdire toute entreprise de devenir plus efficace',
                            'Pour garantir que toutes les entreprises aient la même taille',
                            'Pour fixer directement les salaires des entreprises fusionnées',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi l’analyse d’incidence est-elle importante en politique publique ?',
                        'explanation' => 'L’incidence légale indique qui verse officiellement la taxe, mais l’incidence économique dépend des réactions de l’offre et de la demande. Le coût réel peut donc être partagé différemment.',
                        'choices' => [
                            'La personne ou entreprise légalement visée par une mesure n’est pas nécessairement celle qui supporte économiquement la plus grande partie de son coût',
                            'La loi détermine toujours parfaitement l’incidence économique',
                            'Les consommateurs supportent toujours toutes les taxes',
                            'Les producteurs supportent toujours toutes les taxes',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les politiques publiques doivent-elles tenir compte des incitations comportementales ?',
                        'explanation' => 'Les agents réagissent aux prix, taxes, subventions et réglementations. Ces réactions peuvent modifier les résultats attendus d’une politique, d’où l’importance des incitations.',
                        'choices' => [
                            'Les agents peuvent modifier leurs décisions en réaction aux taxes, subventions, réglementations et prix',
                            'Les agents ne réagissent jamais aux incitations',
                            'Les comportements restent toujours constants',
                            'Les incitations concernent seulement les entreprises publiques',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle approche est la plus adaptée pour évaluer une intervention économique ?',
                        'explanation' => 'Évaluer une intervention demande de considérer plusieurs dimensions : efficacité, équité, incitations, coûts administratifs et effets comportementaux, plutôt qu’un seul indicateur.',
                        'choices' => [
                            'Comparer les effets sur l’efficacité, l’équité, les incitations, les coûts administratifs et les comportements',
                            'Examiner uniquement son coût budgétaire',
                            'Examiner uniquement son effet sur les prix',
                            'Supposer que toute intervention améliore automatiquement le bien-être',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Révision intégrée de microéconomie',
                'description' => 'Quiz débutant sur Révision intégrée de microéconomie.',
                'questions' => [
                    [
                        'question' => 'Une hausse du revenu augmente la demande d’un bien tandis qu’une hausse du prix d’un substitut réduit cette même demande. Quelle interprétation est cohérente ?',
                        'explanation' => 'Une hausse du revenu est cohérente avec un bien normal. Une baisse du prix d’un substitut proche réduit en parallèle l’attrait relatif du bien concerné et donc sa demande.',
                        'choices' => [
                            'Le bien peut être normal et le substitut influence négativement sa demande lorsque son prix baisse',
                            'Le bien est nécessairement inférieur',
                            'Le bien est nécessairement un bien public',
                            'Le prix du substitut n’a jamais d’effet sur la demande',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une entreprise observe que le coût marginal dépasse le revenu marginal pour sa dernière unité produite. Quelle décision est cohérente dans un modèle simple de maximisation du profit ?',
                        'explanation' => 'Si le coût marginal dépasse le revenu marginal pour la dernière unité, cette unité réduit le profit. Dans le modèle simple, l’entreprise réduit donc sa production jusqu’à revenir vers la condition marginale pertinente.',
                        'choices' => [
                            'Réduire la production jusqu’à atteindre une situation où le coût marginal n’est plus supérieur au revenu marginal',
                            'Augmenter automatiquement la production',
                            'Augmenter le coût fixe',
                            'Réduire la demande du marché',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un marché est concurrentiel mais génère une pollution importante non prise en compte dans les prix. Quelle conclusion est la plus appropriée ?',
                        'explanation' => 'Lorsque la pollution est une externalité négative non intégrée au prix, le marché privé ne tient pas compte de tout le coût social. La quantité produite peut donc être supérieure à la quantité efficace.',
                        'choices' => [
                            'L’équilibre privé peut produire une quantité supérieure au niveau socialement efficace',
                            'L’équilibre est nécessairement optimal',
                            'La pollution ne constitue pas un problème économique',
                            'Le coût marginal privé est toujours supérieur au coût marginal social',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une demande devient plus élastique à long terme. Quelle conséquence peut-elle avoir pour une entreprise qui augmente fortement ses prix ?',
                        'explanation' => 'Une demande plus élastique à long terme signifie que les consommateurs ont davantage de possibilités d’adaptation. Une hausse importante du prix peut alors entraîner une baisse plus forte des ventes.',
                        'choices' => [
                            'La baisse de quantité demandée peut devenir plus importante après l’ajustement des consommateurs',
                            'La quantité demandée devient nécessairement constante',
                            'Le chiffre d’affaires augmente automatiquement',
                            'Le coût marginal devient nul',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une technologie réduit le coût marginal de production et la demande reste inchangée. Quel effet est plausible dans un marché concurrentiel ?',
                        'explanation' => 'Une baisse du coût marginal réduit les coûts de production. Avec une demande inchangée, l’offre augmente généralement, ce qui peut conduire à un prix d’équilibre plus faible et à une quantité échangée plus élevée.',
                        'choices' => [
                            'Une baisse du prix d’équilibre accompagnée d’une hausse de la quantité échangée',
                            'Une hausse certaine du prix et une baisse de la quantité',
                            'Une disparition de l’offre',
                            'Aucun changement possible sur le marché',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une entreprise possède un pouvoir de marché et fait face à une demande décroissante. Pourquoi le revenu marginal est-il inférieur au prix pour une unité supplémentaire dans le modèle standard ?',
                        'explanation' => 'Lorsqu’une entreprise a un pouvoir de marché et veut vendre davantage sur une courbe de demande décroissante, elle doit réduire le prix. Le gain de recette sur l’unité supplémentaire est donc inférieur au prix.',
                        'choices' => [
                            'Pour vendre davantage, l’entreprise doit réduire le prix appliqué aux unités concernées sur la courbe de demande',
                            'Le coût marginal est nécessairement inférieur à zéro',
                            'La demande devient parfaitement élastique',
                            'Le prix n’influence jamais le chiffre d’affaires',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un gouvernement introduit une taxe sur un marché dont l’offre est très inélastique et la demande très élastique. Qui supportera généralement une plus grande part de la taxe ?',
                        'explanation' => 'Quand l’offre est très inélastique et la demande très élastique, les producteurs ont moins de possibilités d’ajuster la quantité tandis que les consommateurs peuvent davantage réduire leurs achats. Une plus grande part de la taxe revient donc généralement aux producteurs.',
                        'choices' => [
                            'Les producteurs, car l’offre réagit peu tandis que les consommateurs peuvent fortement réduire leur demande',
                            'Les consommateurs dans tous les cas',
                            'Le gouvernement uniquement',
                            'Personne, car la taxe disparaît dans le prix',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un marché du travail connaît une forte asymétrie d’information sur l’effort fourni après l’embauche. Quel mécanisme économique peut apparaître ?',
                        'explanation' => 'L’aléa moral concerne les comportements après la signature du contrat lorsque l’effort ou l’action de l’agent est difficile à observer.',
                        'choices' => [
                            'L’aléa moral',
                            'La sélection adverse uniquement',
                            'Une externalité positive nécessairement',
                            'Un prix plafond',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une ressource commune est surexploitée par plusieurs utilisateurs. Quel problème économique explique cette situation ?',
                        'explanation' => 'Chaque utilisateur d’une ressource commune peut bénéficier immédiatement d’une utilisation supplémentaire tout en imposant une partie du coût aux autres. Cette divergence entre coût privé et coût collectif favorise la surexploitation.',
                        'choices' => [
                            'Chaque utilisateur ne prend pas suffisamment en compte le coût qu’il impose aux autres utilisateurs',
                            'Les ressources communes sont toujours non rivales',
                            'La demande est toujours insuffisante',
                            'Le coût privé est nécessairement supérieur au coût social',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle approche résume le mieux le raisonnement microéconomique ?',
                        'explanation' => 'Le raisonnement microéconomique relie les incitations et les contraintes aux arbitrages des agents et à leurs interactions. Les choix marginaux et les prix sont centraux dans cette analyse.',
                        'choices' => [
                            'Étudier les incitations, les contraintes, les arbitrages marginaux et les interactions entre agents',
                            'Analyser uniquement les agrégats macroéconomiques',
                            'Supposer que les ressources sont illimitées',
                            'Ignorer systématiquement les prix et les coûts d’opportunité',
                        ],
                        'correct' => 0,
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
                    'passing_score' => 80,
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

                $choicePairs = [];

                foreach ($questionData['choices'] as $idx => $text) {
                    $choicePairs[] = [
                        'text' => $text,
                        'is_correct' => $idx === $questionData['correct'],
                    ];
                }

                shuffle($choicePairs);

                foreach ($choicePairs as $order => $pair) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $pair['text'],
                        'is_correct' => $pair['is_correct'],
                        'order' => $order + 1,
                    ]);
                }
            }
        }
    }
}
