<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ManagerialEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'managerial-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux de la décision managériale',
                'description' => 'Révisez les principaux concepts économiques utilisés par les entreprises pour prendre des décisions courantes et allouer leurs ressources.',
                'duration' => 18,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une entreprise dispose d’un budget limité et hésite entre moderniser une machine et financer une campagne publicitaire. Quel concept mesure le meilleur choix abandonné ?',
                        'explanation' => 'Le coût d’opportunité correspond à la valeur de la meilleure possibilité à laquelle l’entreprise renonce lorsqu’elle effectue un choix.',
                        'choices' => [
                            ['choice_text' => 'Le coût fixe', 'is_correct' => false],
                            ['choice_text' => 'Le coût d’opportunité', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Le coût marginal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le raisonnement marginal est-il utile à un responsable d’entreprise ?',
                        'explanation' => 'Le raisonnement marginal compare le bénéfice et le coût d’une unité ou d’une action supplémentaire. Il aide donc à décider s’il faut augmenter légèrement une activité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il ignore les coûts supplémentaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il se limite aux résultats passés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il compare les avantages et les coûts d’une action supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il fixe automatiquement le prix du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une boutique vend 100 unités à 20 DH chacune. Quel est son chiffre d’affaires pour ces ventes ?',
                        'explanation' => 'Le chiffre d’affaires est égal au prix multiplié par la quantité vendue. Ici, 20 DH × 100 unités = 2 000 DH.',
                        'choices' => [
                            ['choice_text' => '200 DH', 'is_correct' => false],
                            ['choice_text' => '1 000 DH', 'is_correct' => false],
                            ['choice_text' => '2 000 DH', 'is_correct' => true],
                            ['choice_text' => '2 200 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise conserve la même quantité de salariés mais améliore l’organisation du travail et produit davantage. Que peut-on conclure ?',
                        'explanation' => 'Lorsque la production augmente avec les mêmes ressources principales, la productivité s’améliore. Ici, une meilleure organisation permet de produire plus avec un nombre de salariés inchangé.',
                        'choices' => [
                            ['choice_text' => 'La productivité du travail a augmenté', 'is_correct' => true],
                            ['choice_text' => 'Le coût d’opportunité a disparu', 'is_correct' => false],
                            ['choice_text' => 'La demande du marché est forcément en baisse', 'is_correct' => false],
                            ['choice_text' => 'Le capital est devenu inutile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation décrit le mieux une contrainte économique pour une entreprise ?',
                        'explanation' => 'Une contrainte économique limite les choix possibles. Un budget, du temps ou une capacité de production insuffisante obligent l’entreprise à sélectionner certaines options plutôt que toutes.',
                        'choices' => [
                            ['choice_text' => 'L’entreprise peut acheter toutes les ressources souhaitées', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise dispose d’un budget limité pour plusieurs projets', 'is_correct' => true],
                            ['choice_text' => 'L’entreprise n’a aucun objectif commercial', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise vend gratuitement tous ses produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le bénéfice marginal d’une unité supplémentaire est supérieur à son coût marginal, quelle décision est généralement cohérente ?',
                        'explanation' => 'Lorsque l’avantage supplémentaire dépasse le coût supplémentaire, ajouter cette unité augmente le bénéfice total, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Réduire immédiatement la production', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la production d’une unité supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Arrêter toute activité', 'is_correct' => false],
                            ['choice_text' => 'Baisser automatiquement tous les salaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une décision d’allocation des ressources ?',
                        'explanation' => 'Allouer des ressources signifie décider où utiliser des ressources limitées. Choisir de consacrer davantage de personnel au service client est un exemple d’allocation.',
                        'choices' => [
                            ['choice_text' => 'Choisir la couleur d’un logo sans tenir compte des ressources', 'is_correct' => false],
                            ['choice_text' => 'Affecter cinq salariés à un nouveau projet', 'is_correct' => true],
                            ['choice_text' => 'Observer la météo', 'is_correct' => false],
                            ['choice_text' => 'Changer le nom d’une rue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise compare-t-elle souvent plusieurs projets avant d’investir ?',
                        'explanation' => 'Les ressources financières sont limitées. Comparer les projets permet de sélectionner ceux qui semblent offrir des avantages suffisants compte tenu de leurs coûts et des possibilités abandonnées.',
                        'choices' => [
                            ['choice_text' => 'Parce que tous les projets sont toujours rentables', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ressources disponibles sont limitées', 'is_correct' => true],
                            ['choice_text' => 'Parce que le prix de vente est toujours fixe', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une entreprise ne peut jamais planifier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise envisage de produire une unité de plus. Quel élément est le plus directement pertinent pour cette décision ?',
                        'explanation' => 'Pour décider d’une unité supplémentaire, le responsable compare les recettes ou avantages additionnels avec les coûts additionnels liés à cette unité.',
                        'choices' => [
                            ['choice_text' => 'Le coût marginal et la recette marginale', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le logo de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre total de concurrents historiques', 'is_correct' => false],
                            ['choice_text' => 'La superficie du siège social', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet directement de savoir si les ventes d’une entreprise ont augmenté en valeur ?',
                        'explanation' => 'Le chiffre d’affaires mesure la valeur des ventes réalisées. Une hausse du chiffre d’affaires signifie que la valeur totale des ventes a augmenté, même si la rentabilité doit être examinée séparément.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d’affaires', 'is_correct' => true],
                            ['choice_text' => 'La durée de la pause déjeuner', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fournisseurs historiques', 'is_correct' => false],
                            ['choice_text' => 'La superficie du parking', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut produire 500 unités avec ses ressources actuelles mais ne peut pas dépasser cette quantité sans nouvel équipement. La limite de 500 unités représente principalement :',
                        'explanation' => 'La capacité de production correspond à la quantité maximale qu’une organisation peut produire avec les ressources et équipements disponibles dans les conditions considérées.',
                        'choices' => [
                            ['choice_text' => 'Une remise commerciale', 'is_correct' => false],
                            ['choice_text' => 'Une capacité de production', 'is_correct' => true],
                            ['choice_text' => 'Une taxe à la consommation', 'is_correct' => false],
                            ['choice_text' => 'Une préférence des consommateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe général aide un gestionnaire à éviter une décision fondée uniquement sur les coûts déjà engagés et irrécupérables ?',
                        'explanation' => 'Les coûts irrécupérables ne changent pas avec la décision actuelle. Une décision rationnelle doit surtout tenir compte des coûts et avantages futurs qui peuvent encore varier.',
                        'choices' => [
                            ['choice_text' => 'Le principe des coûts irrécupérables', 'is_correct' => true],
                            ['choice_text' => 'La spécialisation internationale', 'is_correct' => false],
                            ['choice_text' => 'La loi de la demande', 'is_correct' => false],
                            ['choice_text' => 'La segmentation géographique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Demande, prix et recettes',
                'description' => 'Travaillez les bases de l’analyse de la demande, de la fixation des prix et des recettes de l’entreprise.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une entreprise augmente le prix d’un produit et constate que les quantités demandées diminuent, toutes choses égales par ailleurs. Quel principe est illustré ?',
                        'explanation' => 'La loi de la demande indique qu’une hausse du prix d’un bien tend à réduire la quantité demandée, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'La loi de la demande', 'is_correct' => true],
                            ['choice_text' => 'La loi des rendements croissants', 'is_correct' => false],
                            ['choice_text' => 'Le principe de diversification', 'is_correct' => false],
                            ['choice_text' => 'Le principe de liquidité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel changement peut déplacer la demande d’un produit vers la droite, indépendamment d’une baisse de son propre prix ?',
                        'explanation' => 'Une hausse du revenu peut accroître la demande de nombreux biens normaux. Elle déplace alors la courbe de demande, contrairement à une simple variation du prix du bien lui-même.',
                        'choices' => [
                            ['choice_text' => 'Une baisse de la taille du marché', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du revenu des consommateurs pour un bien normal', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du coût des matières premières', 'is_correct' => false],
                            ['choice_text' => 'Une diminution du nombre de consommateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend 80 unités à 25 DH chacune. Quel est son chiffre d’affaires ?',
                        'explanation' => 'Le chiffre d’affaires est obtenu en multipliant le prix unitaire par la quantité vendue : 25 × 80 = 2 000 DH.',
                        'choices' => [
                            ['choice_text' => '1 600 DH', 'is_correct' => false],
                            ['choice_text' => '2 000 DH', 'is_correct' => true],
                            ['choice_text' => '2 500 DH', 'is_correct' => false],
                            ['choice_text' => '3 200 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quel cas la demande d’un produit est généralement dite plus sensible au prix ?',
                        'explanation' => 'Une demande est plus sensible au prix lorsque de petites variations de prix entraînent des variations relativement importantes de la quantité demandée. Cela arrive notamment lorsque les consommateurs disposent de plusieurs substituts.',
                        'choices' => [
                            ['choice_text' => 'Lorsqu’il existe de nombreux substituts proches', 'is_correct' => true],
                            ['choice_text' => 'Lorsqu’il n’existe aucun produit alternatif', 'is_correct' => false],
                            ['choice_text' => 'Lorsque le produit est absolument indispensable dans toutes les situations', 'is_correct' => false],
                            ['choice_text' => 'Lorsque la quantité demandée ne change jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise baisse son prix de 100 DH à 90 DH et passe de 50 à 60 unités vendues. Quel changement du chiffre d’affaires observe-t-on ?',
                        'explanation' => 'Avant la baisse : 100 × 50 = 5 000 DH. Après la baisse : 90 × 60 = 5 400 DH. Le chiffre d’affaires augmente donc de 400 DH.',
                        'choices' => [
                            ['choice_text' => 'Il baisse de 400 DH', 'is_correct' => false],
                            ['choice_text' => 'Il ne change pas', 'is_correct' => false],
                            ['choice_text' => 'Il augmente de 400 DH', 'is_correct' => true],
                            ['choice_text' => 'Il augmente de 900 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut réduire la demande pour les repas livrés à domicile d’une entreprise, sans modification de leur prix ?',
                        'explanation' => 'Une préférence des consommateurs pour cuisiner eux-mêmes peut réduire la demande à prix inchangé. Les goûts et préférences font partie des déterminants de la demande.',
                        'choices' => [
                            ['choice_text' => 'Une préférence accrue pour cuisiner à domicile', 'is_correct' => true],
                            ['choice_text' => 'Une hausse de la productivité du livreur', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du prix des emballages pour l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une réduction des coûts administratifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un prix promotionnel est fixé temporairement pour attirer de nouveaux clients. Quelle fonction du prix est ici directement mobilisée ?',
                        'explanation' => 'Le prix influence les décisions d’achat des consommateurs. Une baisse temporaire peut donc servir d’outil commercial pour stimuler la demande.',
                        'choices' => [
                            ['choice_text' => 'Le prix comme signal et incitation pour l’achat', 'is_correct' => true],
                            ['choice_text' => 'Le prix comme mesure de la productivité nationale', 'is_correct' => false],
                            ['choice_text' => 'Le prix comme unité de temps de travail', 'is_correct' => false],
                            ['choice_text' => 'Le prix comme taxe obligatoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux produits sont des substituts proches. Si le prix du premier augmente fortement, quelle réaction est plausible pour la demande du second ?',
                        'explanation' => 'Lorsque deux biens peuvent répondre à un besoin similaire, une hausse du prix de l’un peut pousser certains consommateurs à se reporter vers l’autre.',
                        'choices' => [
                            ['choice_text' => 'La demande du second peut augmenter', 'is_correct' => true],
                            ['choice_text' => 'La demande du second doit toujours tomber à zéro', 'is_correct' => false],
                            ['choice_text' => 'Le prix du second devient nécessairement nul', 'is_correct' => false],
                            ['choice_text' => 'La demande du second ne peut jamais être influencée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat décrit le mieux une hausse du chiffre d’affaires ?',
                        'explanation' => 'Le chiffre d’affaires augmente lorsque la valeur totale des ventes augmente. Cette hausse peut venir du prix, des quantités vendues ou des deux.',
                        'choices' => [
                            ['choice_text' => 'Les recettes issues des ventes augmentent', 'is_correct' => true],
                            ['choice_text' => 'Les coûts deviennent nécessairement nuls', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice devient automatiquement négatif', 'is_correct' => false],
                            ['choice_text' => 'La demande disparaît nécessairement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend un produit très difficile à remplacer. Quelle conséquence est plausible pour sa capacité à augmenter son prix sans perdre tous ses clients ?',
                        'explanation' => 'Lorsque les consommateurs disposent de peu de substituts, ils peuvent être moins enclins à abandonner le produit après une hausse de prix. La demande peut alors être relativement moins sensible au prix.',
                        'choices' => [
                            ['choice_text' => 'La demande peut être moins sensible au prix', 'is_correct' => true],
                            ['choice_text' => 'La demande devient forcément parfaitement sensible', 'is_correct' => false],
                            ['choice_text' => 'La quantité offerte devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Le coût fixe disparaît', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un responsable observe que la demande d’un service est plus élevée le week-end que la semaine. Quelle décision est la plus directement liée à cette information ?',
                        'explanation' => 'Une demande plus forte à certaines périodes peut aider l’entreprise à adapter ses horaires, son personnel ou ses prix aux variations prévisibles de la demande.',
                        'choices' => [
                            ['choice_text' => 'Ajuster les ressources ou l’offre aux périodes de forte demande', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les données de vente', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les variations de demande', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement la capacité toute l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement une variation de la quantité demandée d’un déplacement de la demande ?',
                        'explanation' => 'Une variation de la quantité demandée est provoquée par un changement du prix du bien sur la même courbe. Un déplacement de la demande résulte d’un autre déterminant, comme le revenu ou les préférences.',
                        'choices' => [
                            ['choice_text' => 'Le changement du prix du bien provoque une variation de la quantité demandée sur la même courbe', 'is_correct' => true],
                            ['choice_text' => 'Toute variation de la demande vient uniquement du prix du bien', 'is_correct' => false],
                            ['choice_text' => 'Un changement de revenu ne peut jamais affecter la demande', 'is_correct' => false],
                            ['choice_text' => 'Une préférence nouvelle déplace nécessairement l’offre', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Coûts et décisions de production',
                'description' => 'Maîtrisez les notions de coûts fixes, coûts variables, coût total, coût moyen et coût marginal dans les décisions de production.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Le loyer mensuel d’un local de production reste identique quelle que soit la quantité produite à court terme. Comment le classer ?',
                        'explanation' => 'Un coût fixe ne varie pas directement avec la quantité produite sur la période considérée. Le loyer d’un local est un exemple classique de coût fixe à court terme.',
                        'choices' => [
                            ['choice_text' => 'Coût fixe', 'is_correct' => true],
                            ['choice_text' => 'Coût marginal', 'is_correct' => false],
                            ['choice_text' => 'Coût variable', 'is_correct' => false],
                            ['choice_text' => 'Recette marginale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le coût total d’une entreprise est de 12 000 DH pour 600 unités produites. Quel est son coût moyen par unité ?',
                        'explanation' => 'Le coût moyen se calcule en divisant le coût total par la quantité produite : 12 000 ÷ 600 = 20 DH par unité.',
                        'choices' => [
                            ['choice_text' => '2 DH', 'is_correct' => false],
                            ['choice_text' => '20 DH', 'is_correct' => true],
                            ['choice_text' => '120 DH', 'is_correct' => false],
                            ['choice_text' => '200 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente sa production de 100 à 101 unités et son coût total passe de 2 000 à 2 018 DH. Quel est le coût marginal de la 101e unité ?',
                        'explanation' => 'Le coût marginal mesure le coût supplémentaire lié à une unité additionnelle. Ici, 2 018 − 2 000 = 18 DH.',
                        'choices' => [
                            ['choice_text' => '2 DH', 'is_correct' => false],
                            ['choice_text' => '18 DH', 'is_correct' => true],
                            ['choice_text' => '20 DH', 'is_correct' => false],
                            ['choice_text' => '118 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation est correcte concernant un coût variable ?',
                        'explanation' => 'Un coût variable évolue avec le niveau d’activité. Par exemple, une entreprise qui utilise davantage de matières premières pour produire davantage verra généralement ce coût augmenter.',
                        'choices' => [
                            ['choice_text' => 'Il est toujours égal à zéro lorsque l’entreprise produit', 'is_correct' => false],
                            ['choice_text' => 'Il peut augmenter lorsque la production augmente', 'is_correct' => true],
                            ['choice_text' => 'Il ne dépend jamais du volume produit', 'is_correct' => false],
                            ['choice_text' => 'Il représente toujours un bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un coût fixe de 5 000 DH et des coûts variables de 7 000 DH. Quel est son coût total ?',
                        'explanation' => 'Le coût total est la somme du coût fixe et du coût variable. Ici, 5 000 + 7 000 = 12 000 DH.',
                        'choices' => [
                            ['choice_text' => '2 000 DH', 'is_correct' => false],
                            ['choice_text' => '7 000 DH', 'is_correct' => false],
                            ['choice_text' => '12 000 DH', 'is_correct' => true],
                            ['choice_text' => '35 000 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût fixe moyen diminue-t-il souvent quand une entreprise répartit le même coût fixe sur davantage d’unités ?',
                        'explanation' => 'Le coût fixe total reste inchangé, mais il est réparti sur un plus grand nombre d’unités. Le coût fixe par unité diminue donc lorsque la production augmente.',
                        'choices' => [
                            ['choice_text' => 'Parce que le coût fixe total disparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce que le même coût est réparti sur davantage d’unités', 'is_correct' => true],
                            ['choice_text' => 'Parce que les salaires deviennent toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente est automatiquement doublé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise constate que le coût supplémentaire pour produire une unité de plus dépasse la recette supplémentaire apportée par cette unité. Que suggère cette comparaison ?',
                        'explanation' => 'Si le coût marginal dépasse la recette marginale, produire cette unité supplémentaire réduit le résultat, toutes choses égales par ailleurs. Le responsable doit donc être prudent avant d’augmenter la production.',
                        'choices' => [
                            ['choice_text' => 'L’unité supplémentaire améliore nécessairement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'L’unité supplémentaire réduit le résultat', 'is_correct' => true],
                            ['choice_text' => 'Le coût fixe devient nul', 'is_correct' => false],
                            ['choice_text' => 'La demande devient parfaitement élastique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente un coût variable pour un fabricant de jus ?',
                        'explanation' => 'Les fruits, bouteilles ou autres matières premières nécessaires à chaque unité produite constituent des coûts qui augmentent généralement avec la quantité produite.',
                        'choices' => [
                            ['choice_text' => 'Le loyer annuel du siège', 'is_correct' => false],
                            ['choice_text' => 'L’achat des fruits nécessaires à chaque bouteille', 'is_correct' => true],
                            ['choice_text' => 'Un abonnement annuel inchangé', 'is_correct' => false],
                            ['choice_text' => 'Un paiement fixe pour une licence sur cinq ans\'', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réduit son coût total de 10 000 DH à 9 000 DH tout en produisant exactement la même quantité. Quel effet direct observe-t-on sur son coût moyen ?',
                        'explanation' => 'À quantité produite inchangée, une baisse du coût total entraîne une baisse du coût total par unité, donc du coût moyen.',
                        'choices' => [
                            ['choice_text' => 'Le coût moyen augmente nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Le coût moyen diminue', 'is_correct' => true],
                            ['choice_text' => 'Le coût moyen devient automatiquement nul', 'is_correct' => false],
                            ['choice_text' => 'Le coût moyen ne peut pas être calculé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel outil aide un responsable à comparer le coût supplémentaire d’une unité avec le bénéfice supplémentaire attendu ?',
                        'explanation' => 'La comparaison marginale met en regard les effets d’une unité ou d’une action supplémentaire. Elle constitue un outil central du raisonnement économique de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'L’analyse marginale', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité historique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La segmentation géographique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le classement alphabétique des produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un dirigeant compare deux projets. Le projet A rapporte 30 000 DH mais exige 25 000 DH de coûts supplémentaires, tandis que le projet B rapporte 28 000 DH et exige 15 000 DH. Quel projet offre le surplus recettes moins coûts le plus élevé selon ces seules données ?',
                        'explanation' => 'Le surplus net simplifié est de 5 000 DH pour A (30 000 − 25 000) et de 13 000 DH pour B (28 000 − 15 000). Selon ces données seulement, B offre le surplus le plus élevé.',
                        'choices' => [
                            ['choice_text' => 'Le projet A', 'is_correct' => false],
                            ['choice_text' => 'Le projet B', 'is_correct' => true],
                            ['choice_text' => 'Les deux projets ont le même surplus', 'is_correct' => false],
                            ['choice_text' => 'Aucun des deux projets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement coût total et coût moyen ?',
                        'explanation' => 'Le coût total correspond à l’ensemble des coûts engagés pour un niveau de production donné. Le coût moyen correspond au coût total rapporté à chaque unité produite.',
                        'choices' => [
                            ['choice_text' => 'Le coût total est le coût par unité et le coût moyen est le coût global', 'is_correct' => false],
                            ['choice_text' => 'Le coût total mesure l’ensemble des coûts, tandis que le coût moyen les rapporte à la quantité produite', 'is_correct' => true],
                            ['choice_text' => 'Le coût moyen ne dépend jamais de la quantité produite', 'is_correct' => false],
                            ['choice_text' => 'Le coût total est toujours inférieur au coût moyen', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Recettes, profit et seuil de rentabilité',
                'description' => 'Apprenez à relier recettes, coûts et profit et à interpréter simplement le seuil de rentabilité d’une activité.',
                'duration' => 24,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une entreprise réalise 50 000 DH de chiffre d’affaires et supporte 42 000 DH de coûts. Quel est son bénéfice comptable simplifié selon ces données ?',
                        'explanation' => 'Le bénéfice simplifié est égal aux recettes moins les coûts : 50 000 − 42 000 = 8 000 DH.',
                        'choices' => [
                            ['choice_text' => '2 000 DH', 'is_correct' => false],
                            ['choice_text' => '8 000 DH', 'is_correct' => true],
                            ['choice_text' => '42 000 DH', 'is_correct' => false],
                            ['choice_text' => '92 000 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le bénéfice d’une entreprise est nul lorsque, selon le calcul considéré :',
                        'explanation' => 'Un bénéfice nul signifie que les recettes couvrent exactement les coûts retenus dans l’analyse. L’entreprise atteint alors son seuil de rentabilité dans cette représentation simplifiée.',
                        'choices' => [
                            ['choice_text' => 'Les recettes sont égales aux coûts', 'is_correct' => true],
                            ['choice_text' => 'Les recettes sont toujours supérieures aux coûts', 'is_correct' => false],
                            ['choice_text' => 'Les coûts sont tous égaux à zéro', 'is_correct' => false],
                            ['choice_text' => 'La production est toujours maximale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend 1 000 unités à 30 DH et son coût total est de 26 000 DH. Quel est le profit simplifié ?',
                        'explanation' => 'Le chiffre d’affaires est de 1 000 × 30 = 30 000 DH. En retirant 26 000 DH de coûts, on obtient un profit de 4 000 DH.',
                        'choices' => [
                            ['choice_text' => '4 000 DH', 'is_correct' => true],
                            ['choice_text' => '26 000 DH', 'is_correct' => false],
                            ['choice_text' => '30 000 DH', 'is_correct' => false],
                            ['choice_text' => '56 000 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel changement, toutes choses égales par ailleurs, augmente directement le profit ?',
                        'explanation' => 'Le profit augmente si les recettes augmentent ou si les coûts diminuent, à autres éléments inchangés.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du coût total sans hausse des recettes', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du prix de vente avec quantité et coûts inchangés', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des coûts avec recettes inchangées', 'is_correct' => true],
                            ['choice_text' => 'Une réduction de la productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une activité doit couvrir 20 000 DH de coûts fixes. La marge par unité est de 50 DH. Combien d’unités faut-il vendre pour atteindre le seuil de rentabilité dans ce modèle simplifié ?',
                        'explanation' => 'Le seuil de rentabilité en quantité est égal aux coûts fixes divisés par la marge unitaire : 20 000 ÷ 50 = 400 unités.',
                        'choices' => [
                            ['choice_text' => '40 unités', 'is_correct' => false],
                            ['choice_text' => '200 unités', 'is_correct' => false],
                            ['choice_text' => '400 unités', 'is_correct' => true],
                            ['choice_text' => '1 000 unités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise cherche-t-elle parfois à distinguer une hausse du chiffre d’affaires d’une hausse du profit ?',
                        'explanation' => 'Une hausse des ventes n’implique pas automatiquement une hausse équivalente du profit. Si les coûts augmentent aussi fortement, le résultat peut rester stable ou même diminuer.',
                        'choices' => [
                            ['choice_text' => 'Parce que le chiffre d’affaires ne tient pas compte des coûts', 'is_correct' => true],
                            ['choice_text' => 'Parce que le profit est toujours égal au chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts n’ont jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffre d’affaires mesure uniquement les salaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend 500 unités à 40 DH. Ses coûts totaux sont de 18 000 DH. Quelle affirmation est correcte ?',
                        'explanation' => 'Le chiffre d’affaires est 20 000 DH. Après déduction des coûts de 18 000 DH, le profit simplifié est de 2 000 DH.',
                        'choices' => [
                            ['choice_text' => 'L’entreprise enregistre un profit de 2 000 DH', 'is_correct' => true],
                            ['choice_text' => 'L’entreprise enregistre une perte de 2 000 DH', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires est de 18 000 DH', 'is_correct' => false],
                            ['choice_text' => 'Le profit est de 38 000 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise subit une perte parce que ses recettes sont inférieures à ses coûts. Quelle action peut, toutes choses égales par ailleurs, améliorer son résultat ?',
                        'explanation' => 'Le résultat peut être amélioré soit en augmentant les recettes, soit en réduisant les coûts. Une réduction de coûts est donc une possibilité directe.',
                        'choices' => [
                            ['choice_text' => 'Augmenter les coûts sans augmenter les recettes', 'is_correct' => false],
                            ['choice_text' => 'Réduire certains coûts inutiles', 'is_correct' => true],
                            ['choice_text' => 'Réduire toutes les ventes à zéro', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les dépenses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation correspond à un seuil de rentabilité atteint ?',
                        'explanation' => 'Au seuil de rentabilité, les recettes couvrent les coûts sans générer de bénéfice ni de perte dans le modèle retenu.',
                        'choices' => [
                            ['choice_text' => 'Recettes supérieures aux coûts', 'is_correct' => false],
                            ['choice_text' => 'Recettes inférieures aux coûts', 'is_correct' => false],
                            ['choice_text' => 'Recettes égales aux coûts', 'is_correct' => true],
                            ['choice_text' => 'Recettes nulles et coûts positifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend un produit 50 DH avec un coût variable unitaire de 30 DH. Quelle est sa marge sur coût variable unitaire ?',
                        'explanation' => 'La marge sur coût variable unitaire correspond, dans ce calcul simplifié, au prix de vente moins le coût variable unitaire : 50 − 30 = 20 DH.',
                        'choices' => [
                            ['choice_text' => '10 DH', 'is_correct' => false],
                            ['choice_text' => '20 DH', 'is_correct' => true],
                            ['choice_text' => '30 DH', 'is_correct' => false],
                            ['choice_text' => '80 DH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une entreprise conserve ses prix et ses quantités vendues mais réduit ses dépenses inutiles, quel effet peut-on attendre sur son bénéfice ?',
                        'explanation' => 'Avec des recettes inchangées et des coûts plus faibles, la différence entre recettes et coûts devient plus importante : le bénéfice augmente.',
                        'choices' => [
                            ['choice_text' => 'Il diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Il augmente', 'is_correct' => true],
                            ['choice_text' => 'Il devient nécessairement nul', 'is_correct' => false],
                            ['choice_text' => 'Il ne dépend jamais des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est le plus adapté pour savoir si une entreprise couvre ses coûts avec ses ventes ?',
                        'explanation' => 'Comparer les recettes aux coûts permet de déterminer si l’entreprise couvre ses charges et réalise un bénéfice ou une perte dans le cadre comptable considéré.',
                        'choices' => [
                            ['choice_text' => 'Le résultat ou profit', 'is_correct' => true],
                            ['choice_text' => 'La couleur des emballages', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de pauses', 'is_correct' => false],
                            ['choice_text' => 'La distance entre les bureaux', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Production et productivité',
                'description' => 'Évaluez votre compréhension de la fonction de production, des facteurs de production, de la productivité et des décisions liées aux ressources.',
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quels sont les principaux facteurs de production mobilisés par une entreprise ?',
                        'explanation' => 'L’entreprise combine notamment le travail, le capital et les ressources naturelles pour produire des biens ou services. La combinaison exacte dépend de l’activité.',
                        'choices' => [
                            ['choice_text' => 'Travail, capital et ressources naturelles', 'is_correct' => true],
                            ['choice_text' => 'Uniquement l’argent liquide', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la publicité', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les consommateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise produit 600 pièces avec 20 salariés. Quelle est la production moyenne par salarié ?',
                        'explanation' => 'La productivité moyenne du travail se calcule ici par production totale divisée par le nombre de salariés : 600 ÷ 20 = 30 pièces par salarié.',
                        'choices' => [
                            ['choice_text' => '20 pièces', 'is_correct' => false],
                            ['choice_text' => '30 pièces', 'is_correct' => true],
                            ['choice_text' => '40 pièces', 'is_correct' => false],
                            ['choice_text' => '60 pièces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise acquiert un logiciel qui permet aux mêmes salariés de traiter plus de dossiers par jour. Quel mécanisme est principalement illustré ?',
                        'explanation' => 'Un nouvel outil peut améliorer l’efficacité du travail et permettre de produire davantage avec les mêmes effectifs. Cela correspond à une hausse de la productivité.',
                        'choices' => [
                            ['choice_text' => 'Une baisse de la productivité', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de la productivité', 'is_correct' => true],
                            ['choice_text' => 'Une disparition de la demande', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique des coûts fixes uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi investir dans la formation des salariés peut-il augmenter la productivité ?',
                        'explanation' => 'La formation améliore les connaissances et compétences des travailleurs. Ce capital humain supplémentaire peut leur permettre d’accomplir les tâches plus efficacement ou avec une meilleure qualité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle réduit toujours le nombre de clients', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle peut renforcer les compétences et l’efficacité du travail', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle supprime toute contrainte de production', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle fixe tous les prix du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise double la quantité de travail et sa production augmente, mais moins que proportionnellement. Quel phénomène est compatible avec cette situation ?',
                        'explanation' => 'Lorsque l’augmentation d’un facteur de production entraîne une hausse moins que proportionnelle de la production, on peut observer des rendements décroissants de ce facteur dans la situation étudiée.',
                        'choices' => [
                            ['choice_text' => 'Des rendements décroissants du facteur augmenté', 'is_correct' => true],
                            ['choice_text' => 'Une disparition totale du capital', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique des prix', 'is_correct' => false],
                            ['choice_text' => 'Une demande parfaitement inélastique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une amélioration de l’efficacité sans augmenter immédiatement le nombre de salariés ?',
                        'explanation' => 'Automatiser une tâche répétitive peut permettre à la même équipe de réaliser davantage de travail en un temps donné. Cela améliore l’efficacité de la combinaison productive.',
                        'choices' => [
                            ['choice_text' => 'Automatiser une tâche répétitive avec un nouvel équipement\'', 'is_correct' => true],
                            ['choice_text' => 'Réduire volontairement les heures productives sans changer l’organisation\'', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données de production\'', 'is_correct' => false],
                            ['choice_text' => 'Fermer une ligne rentable sans raison\'', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise produit 1 000 unités avec 50 heures de travail. Une réorganisation lui permet de produire 1 200 unités avec les mêmes 50 heures. Que peut-on dire de la productivité du travail ?',
                        'explanation' => 'La production par heure passe de 1 000 ÷ 50 = 20 unités à 1 200 ÷ 50 = 24 unités. La productivité du travail augmente donc.',
                        'choices' => [
                            ['choice_text' => 'Elle passe de 20 à 24 unités par heure', 'is_correct' => true],
                            ['choice_text' => 'Elle passe de 24 à 20 unités par heure', 'is_correct' => false],
                            ['choice_text' => 'Elle reste identique à 10 unités par heure', 'is_correct' => false],
                            ['choice_text' => 'Elle tombe à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle le capital joue-t-il dans une entreprise de fabrication ?',
                        'explanation' => 'Le capital productif comprend des équipements, machines et installations utilisés pour produire. Il complète le travail et peut améliorer la capacité ou l’efficacité de production.',
                        'choices' => [
                            ['choice_text' => 'Il fournit uniquement une demande de consommation', 'is_correct' => false],
                            ['choice_text' => 'Il comprend notamment les machines et équipements de production', 'is_correct' => true],
                            ['choice_text' => 'Il correspond uniquement aux clients', 'is_correct' => false],
                            ['choice_text' => 'Il est identique au chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise utilise une machine qui fonctionne à sa capacité maximale. Ajouter encore des commandes sans augmenter les capacités peut provoquer principalement :',
                        'explanation' => 'Lorsque la capacité est déjà saturée, une hausse de la demande peut entraîner des délais, des files d’attente ou des difficultés à produire les quantités supplémentaires demandées.',
                        'choices' => [
                            ['choice_text' => 'Des problèmes de capacité\'', 'is_correct' => true],
                            ['choice_text' => 'Une baisse automatique du salaire minimum', 'is_correct' => false],
                            ['choice_text' => 'Une disparition du coût marginal', 'is_correct' => false],
                            ['choice_text' => 'Une baisse certaine du nombre de clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle décision peut améliorer la productivité d’une équipe commerciale ?',
                        'explanation' => 'La formation, les outils adaptés et une meilleure organisation peuvent permettre aux salariés d’accomplir davantage de tâches utiles avec le même temps de travail.',
                        'choices' => [
                            ['choice_text' => 'Supprimer les informations nécessaires aux vendeurs', 'is_correct' => false],
                            ['choice_text' => 'Améliorer la formation et les outils de travail', 'is_correct' => true],
                            ['choice_text' => 'Réduire volontairement la qualité des processus', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les objectifs de l’équipe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise compare-t-elle la productivité de différentes méthodes de production ?',
                        'explanation' => 'Comparer la productivité permet d’identifier les méthodes qui utilisent plus efficacement les ressources pour atteindre un niveau de production donné.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer l’efficacité relative des ressources utilisées', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer automatiquement toute concurrence', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir un prix unique sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute décision future', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prévision, risque et décision',
                'description' => 'Testez vos bases sur la prévision de la demande, l’incertitude, le risque et les décisions des entreprises face à plusieurs scénarios.',
                'duration' => 26,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise utilise-t-elle des prévisions de demande ?',
                        'explanation' => 'Les prévisions aident à planifier les stocks, le personnel, la production ou les achats en fonction des ventes attendues.',
                        'choices' => [
                            ['choice_text' => 'Pour préparer les ressources à la demande attendue', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que les prévisions seront toujours exactes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute incertitude économique', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer légalement tous les prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise estime qu’un nouveau service peut attirer 1 000, 1 500 ou 2 000 clients selon la conjoncture. Que révèle cette situation ?',
                        'explanation' => 'Plusieurs résultats sont possibles selon l’environnement économique. L’entreprise fait donc face à de l’incertitude et doit intégrer différents scénarios dans sa décision.',
                        'choices' => [
                            ['choice_text' => 'Une absence totale de risque', 'is_correct' => false],
                            ['choice_text' => 'Une situation avec plusieurs scénarios possibles', 'is_correct' => true],
                            ['choice_text' => 'Une demande parfaitement connue', 'is_correct' => false],
                            ['choice_text' => 'Une offre nécessairement nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle action réduit généralement le risque lié à une dépendance excessive envers un seul client ?',
                        'explanation' => 'Diversifier la clientèle permet de réduire la dépendance à une seule source de revenus. La perte d’un client important a alors potentiellement un impact moins fort.',
                        'choices' => [
                            ['choice_text' => 'Concentrer toutes les ventes sur ce client', 'is_correct' => false],
                            ['choice_text' => 'Diversifier la clientèle', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les contrats existants', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les prévisions de ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une prévision indique une forte demande pour le mois prochain, mais avec une marge d’erreur importante. Quelle attitude est la plus cohérente économiquement ?',
                        'explanation' => 'Une prévision incertaine doit être utilisée avec prudence. L’entreprise peut préparer plusieurs scénarios plutôt que de considérer l’estimation comme une certitude.',
                        'choices' => [
                            ['choice_text' => 'Traiter l’estimation comme une certitude absolue', 'is_correct' => false],
                            ['choice_text' => 'Prévoir plusieurs scénarios et des marges de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Ne prendre aucune décision dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Ignorer complètement les informations disponibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet rapporte 12 000 DH dans un scénario favorable et 6 000 DH dans un scénario défavorable. Pourquoi une entreprise peut-elle considérer ces deux résultats séparément ?',
                        'explanation' => 'Les résultats diffèrent selon les conditions futures. Examiner séparément les scénarios permet de comprendre l’exposition du projet aux variations de l’environnement.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer la sensibilité du projet à différents résultats', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un projet n’a jamais besoin de comparaison', 'is_correct' => false],
                            ['choice_text' => 'Parce que le scénario défavorable est toujours impossible', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le projet automatiquement rentable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction est correcte entre risque et certitude ?',
                        'explanation' => 'La certitude correspond à une situation où le résultat est connu avec assurance. Le risque implique au contraire plusieurs résultats possibles avec une certaine incertitude.',
                        'choices' => [
                            ['choice_text' => 'La certitude suppose un résultat connu, tandis que le risque implique plusieurs issues possibles', 'is_correct' => true],
                            ['choice_text' => 'Le risque signifie que tous les résultats sont impossibles', 'is_correct' => false],
                            ['choice_text' => 'La certitude et le risque sont exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'Le risque existe seulement lorsque les prix sont nuls', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit des données de ventes des trois dernières années et les utilise pour estimer la demande future. Quelle pratique applique-t-elle ?',
                        'explanation' => 'L’utilisation des données historiques pour éclairer les ventes futures constitue une approche de prévision fondée sur l’information passée.',
                        'choices' => [
                            ['choice_text' => 'Une prévision à partir de données historiques', 'is_correct' => true],
                            ['choice_text' => 'Une suppression volontaire des informations', 'is_correct' => false],
                            ['choice_text' => 'Une fixation réglementaire des salaires', 'is_correct' => false],
                            ['choice_text' => 'Une politique de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut rendre une prévision de demande moins fiable ?',
                        'explanation' => 'Un changement inhabituel des préférences des consommateurs, un nouveau concurrent ou un choc économique peut rendre les relations observées dans les données passées moins représentatives du futur.',
                        'choices' => [
                            ['choice_text' => 'Un environnement qui change fortement', 'is_correct' => true],
                            ['choice_text' => 'Une demande parfaitement stable depuis toujours', 'is_correct' => false],
                            ['choice_text' => 'L’absence de toute variation future', 'is_correct' => false],
                            ['choice_text' => 'Des résultats identiques chaque période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un responsable doit choisir entre un projet à résultat plus élevé mais très incertain et un projet à résultat plus stable. Que doit-il au minimum examiner ?',
                        'explanation' => 'Une décision sous risque doit considérer à la fois les gains potentiels et l’incertitude associée. Le niveau de risque acceptable dépend aussi des objectifs et contraintes de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Uniquement le gain maximal possible', 'is_correct' => false],
                            ['choice_text' => 'Les résultats possibles et l’incertitude associée', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nom du projet', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la taille du bureau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dispose de 100 000 DH et hésite entre deux investissements. L’un est plus rentable en scénario favorable mais beaucoup plus sensible à une baisse des ventes. Quel concept aide à décrire cette sensibilité ?',
                        'explanation' => 'La sensibilité mesure la façon dont le résultat d’une décision varie lorsque certaines hypothèses changent. Elle est utile pour analyser l’exposition à différents scénarios.',
                        'choices' => [
                            ['choice_text' => 'L’analyse de sensibilité', 'is_correct' => true],
                            ['choice_text' => 'La fixation automatique du salaire', 'is_correct' => false],
                            ['choice_text' => 'La comptabilisation des congés uniquement', 'is_correct' => false],
                            ['choice_text' => 'La définition du PIB', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle maintenir une réserve de trésorerie lorsqu’elle anticipe des ventes incertaines ?',
                        'explanation' => 'Une réserve de trésorerie donne une capacité à faire face à des dépenses ou à une baisse temporaire des recettes. Elle améliore ainsi la souplesse financière de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Pour disposer d’une marge face aux imprévus financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir une demande illimitée', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tous les coûts variables', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement la productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un responsable utilise trois prévisions : faible, moyenne et forte demande. Quel avantage présente cette méthode ?',
                        'explanation' => 'Construire plusieurs scénarios permet de préparer des décisions adaptées à différentes évolutions possibles de la demande et d’éviter de dépendre d’une seule hypothèse.',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’envisager plusieurs évolutions possibles', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que la prévision moyenne sera exacte', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les coûts de production', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les concurrents prévisibles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Tarification et allocation des ressources',
                'description' => 'Mettez en pratique les principes élémentaires de fixation des prix, de choix des quantités et d’allocation efficace des ressources.',
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Une entreprise constate que le coût d’une unité supplémentaire augmente alors que le prix de vente reste stable. Que doit-elle surveiller ?',
                        'explanation' => 'La hausse du coût marginal réduit l’intérêt de produire davantage lorsque le prix de vente ne change pas. L’entreprise doit donc comparer le coût supplémentaire à la recette supplémentaire.',
                        'choices' => [
                            ['choice_text' => 'Le rapport entre coût marginal et recette marginale', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur du produit', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la taille du siège', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de jours fériés uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un prix trop élevé peut-il réduire les ventes d’un produit dans un marché concurrentiel ?',
                        'explanation' => 'Les consommateurs peuvent réduire leurs achats ou se tourner vers des produits concurrents lorsque le prix devient moins attractif.',
                        'choices' => [
                            ['choice_text' => 'Parce que les consommateurs peuvent réduire la quantité achetée ou choisir un concurrent', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’offre devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffre d’affaires devient toujours égal à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dispose de 10 heures de machine libres et doit choisir entre deux productions. Quelle information économique est particulièrement utile ?',
                        'explanation' => 'Pour allouer une ressource rare comme du temps machine, il faut comparer les bénéfices ou contributions supplémentaires associés aux différentes utilisations possibles et tenir compte de leur coût d’opportunité.',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice ou la contribution attendue par heure de machine', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur des machines', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de concurrents il y a vingt ans', 'is_correct' => false],
                            ['choice_text' => 'La marque des bureaux administratifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une ressource est rare, pourquoi son coût d’opportunité est-il important ?',
                        'explanation' => 'Utiliser une ressource rare pour un projet signifie renoncer à d’autres usages possibles. Le coût d’opportunité permet de prendre en compte cette possibilité abandonnée.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’utilisation d’une ressource rare implique des alternatives abandonnées', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les alternatives sont gratuites', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une ressource rare n’a jamais de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes sont toujours nuls', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise applique un prix différent pour deux produits selon leur qualité et les préférences des clients. Quel principe commercial est illustré ?',
                        'explanation' => 'Les entreprises peuvent adapter leurs prix aux caractéristiques des produits et à la demande observée, tant que cette pratique est compatible avec les conditions du marché et les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Une tarification adaptée aux caractéristiques de l’offre', 'is_correct' => true],
                            ['choice_text' => 'Une suppression de la demande', 'is_correct' => false],
                            ['choice_text' => 'Une fixation du prix uniquement par les coûts historiques', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des préférences', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise hésite entre investir dans le produit A ou le produit B. Le produit A apporterait 15 000 DH de résultat supplémentaire et B 11 000 DH, avec la même utilisation de ressources. Quelle information ressort de ce scénario ?',
                        'explanation' => 'Avec la même consommation de ressources et selon les résultats supplémentaires fournis, le produit A offre 4 000 DH de résultat supplémentaire de plus que B.',
                        'choices' => [
                            ['choice_text' => 'Le produit B apporte 4 000 DH de plus que A', 'is_correct' => false],
                            ['choice_text' => 'Le produit A apporte 4 000 DH de plus que B', 'is_correct' => true],
                            ['choice_text' => 'Les deux apportent le même résultat', 'is_correct' => false],
                            ['choice_text' => 'Aucune comparaison n’est possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif correspond le mieux à une allocation efficace des ressources dans une entreprise ?',
                        'explanation' => 'Une allocation efficace cherche à utiliser les ressources limitées là où elles génèrent la valeur ou le bénéfice attendu le plus pertinent compte tenu des contraintes.',
                        'choices' => [
                            ['choice_text' => 'Utiliser les ressources là où elles apportent la plus forte valeur pertinente\'', 'is_correct' => true],
                            ['choice_text' => 'Affecter toutes les ressources à un seul service sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute comparaison entre projets', 'is_correct' => false],
                            ['choice_text' => 'Utiliser les ressources uniquement pour augmenter les dépenses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise baisse le prix d’un service après avoir constaté que de nombreux clients renoncent à l’achat. Quel facteur cherche-t-elle à influencer directement ?',
                        'explanation' => 'La baisse du prix vise directement la décision d’achat des consommateurs et donc la quantité demandée, en rendant le service plus accessible ou plus attractif.',
                        'choices' => [
                            ['choice_text' => 'La quantité demandée', 'is_correct' => true],
                            ['choice_text' => 'Le coût fixe du bâtiment', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de machines détenues', 'is_correct' => false],
                            ['choice_text' => 'La réglementation des salaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel choix illustre une décision fondée sur le bénéfice marginal ?',
                        'explanation' => 'Un bénéfice marginal concerne le gain additionnel d’une unité ou action supplémentaire. Décider d’accepter une commande supplémentaire parce que sa contribution attendue dépasse son coût en est un exemple.',
                        'choices' => [
                            ['choice_text' => 'Accepter une commande supplémentaire lorsque sa contribution attendue dépasse son coût', 'is_correct' => true],
                            ['choice_text' => 'Changer le logo sans analyser aucun effet', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Arrêter un produit uniquement parce qu’il existe depuis longtemps', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une ressource peut être utilisée pour fabriquer 100 unités de A ou 60 unités de B avec le même temps de machine. Quelle question économique doit accompagner ce constat ?',
                        'explanation' => 'Le nombre d’unités n’est pas le seul élément pertinent. Il faut également comparer la valeur ou le résultat associé aux deux productions afin d’évaluer leur coût d’opportunité et leur intérêt économique.',
                        'choices' => [
                            ['choice_text' => 'Quelle utilisation crée le plus de valeur compte tenu des ressources mobilisées ?', 'is_correct' => true],
                            ['choice_text' => 'Quelle option possède le nom le plus court ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle option est la plus ancienne ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle option nécessite toujours zéro coût ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une entreprise, pourquoi le prix ne peut-il pas être décidé indépendamment de la demande dans de nombreux marchés ?',
                        'explanation' => 'Le prix influence généralement la quantité que les consommateurs souhaitent acheter. Une décision de prix doit donc tenir compte de la réaction attendue de la demande.',
                        'choices' => [
                            ['choice_text' => 'Parce que les clients réagissent généralement aux variations de prix', 'is_correct' => true],
                            ['choice_text' => 'Parce que la demande ne change jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix est toujours fixé par les salariés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts sont sans importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dispose d’un espace de stockage limité et doit choisir quels produits conserver. Quel principe économique est directement mobilisé ?',
                        'explanation' => 'L’espace de stockage est une ressource rare. L’entreprise doit donc arbitrer entre plusieurs usages et tenir compte de la valeur attendue des produits qu’elle peut conserver.',
                        'choices' => [
                            ['choice_text' => 'L’arbitrage lié à une ressource rare', 'is_correct' => true],
                            ['choice_text' => 'La suppression du coût d’opportunité', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique de toutes les demandes', 'is_correct' => false],
                            ['choice_text' => 'La définition du chômage structurel', 'is_correct' => false],
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
