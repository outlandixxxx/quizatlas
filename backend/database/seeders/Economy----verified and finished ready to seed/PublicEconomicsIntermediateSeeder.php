```php
<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PublicEconomicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'public-economics')->firstOrFail();

        $quizzes = [

            // =========================================================
            // QUIZ 1 — Défaillances du marché
            // =========================================================
            [
                'title' => 'Application des défaillances du marché',
                'description' => 'Application des notions de défaillance du marché à des situations économiques concrètes.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Une usine rejette des déchets dans une rivière utilisée par les agriculteurs voisins. Quelle situation décrit le mieux ce cas ?',
                        'choices' => [
                            ['choice_text' => 'Une externalité négative de production', 'is_correct' => true],
                            ['choice_text' => 'Une externalité positive de consommation', 'is_correct' => false],
                            ['choice_text' => 'Un bien public pur', 'is_correct' => false],
                            ['choice_text' => 'Un transfert fiscal', 'is_correct' => false],
                        ],
                        'explanation' => 'L’activité productive impose un coût aux agriculteurs sans que celui-ci soit nécessairement intégré dans le coût privé de l’usine.',
                    ],
                    [
                        'question' => 'Si une activité génère une externalité positive non rémunérée, quelle conséquence est la plus probable en l’absence d’intervention ?',
                        'choices' => [
                            ['choice_text' => 'L’activité risque d’être produite ou consommée à un niveau inférieur au niveau socialement souhaitable', 'is_correct' => true],
                            ['choice_text' => 'L’activité sera nécessairement surproduite', 'is_correct' => false],
                            ['choice_text' => 'Le prix privé sera toujours supérieur au bénéfice social', 'is_correct' => false],
                            ['choice_text' => 'L’État supprimera automatiquement l’externalité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une externalité positive crée un bénéfice pour des tiers qui n’est pas entièrement pris en compte dans la décision privée, ce qui peut conduire à une activité insuffisante.',
                    ],
                    [
                        'question' => 'Une entreprise bénéficie d’une subvention pour installer des équipements qui réduisent la pollution. Quel mécanisme économique cette mesure cherche-t-elle principalement à corriger ?',
                        'choices' => [
                            ['choice_text' => 'L’écart entre le coût privé et le coût social de la pollution', 'is_correct' => true],
                            ['choice_text' => 'Le problème de la dette publique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le déficit commercial', 'is_correct' => false],
                            ['choice_text' => 'La progressivité de l’impôt sur le revenu', 'is_correct' => false],
                        ],
                        'explanation' => 'La subvention réduit le coût privé d’une technologie moins polluante afin d’encourager un comportement plus proche de l’intérêt social.',
                    ],
                    [
                        'question' => 'Dans un marché concurrentiel, si les consommateurs ne tiennent pas compte d’un bénéfice externe lié à une activité, que se passe-t-il généralement ?',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice social marginal est supérieur au bénéfice privé marginal', 'is_correct' => true],
                            ['choice_text' => 'Le coût privé marginal devient nécessairement négatif', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice privé et le bénéfice social sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Le marché devient automatiquement public', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec une externalité positive, le bénéfice procuré à la société inclut le bénéfice privé plus le bénéfice externe.',
                    ],
                    [
                        'question' => 'Pourquoi une taxe sur une activité polluante peut-elle améliorer l’allocation des ressources ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut intégrer dans le prix privé une partie du coût externe', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime nécessairement toute activité économique', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le coût social nul', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit toujours un surplus identique pour chaque agent', 'is_correct' => false],
                        ],
                        'explanation' => 'Une taxe correctement conçue peut rapprocher le coût privé du coût social et ainsi modifier l’incitation à produire ou consommer.',
                    ],
                    [
                        'question' => 'Un marché de vaccination présente des effets positifs sur les personnes non vaccinées. Sans intervention, quel résultat est plausible ?',
                        'choices' => [
                            ['choice_text' => 'Le taux de vaccination peut être inférieur au niveau socialement souhaitable', 'is_correct' => true],
                            ['choice_text' => 'Le taux de vaccination sera nécessairement de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice externe sera automatiquement payé par les autres individus', 'is_correct' => false],
                            ['choice_text' => 'La vaccination devient un bien public pur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bénéfices externes de la vaccination peuvent ne pas être entièrement pris en compte par l’individu, ce qui justifie parfois une politique d’encouragement.',
                    ],
                    [
                        'question' => 'Une entreprise ne peut pas empêcher d’autres entreprises de bénéficier d’une innovation fondamentale qu’elle finance. Quel problème peut apparaître ?',
                        'choices' => [
                            ['choice_text' => 'Une insuffisance possible d’investissement privé en recherche', 'is_correct' => true],
                            ['choice_text' => 'Une surproduction automatique de recherche', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des externalités', 'is_correct' => false],
                            ['choice_text' => 'Une hausse obligatoire du coût salarial', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les bénéfices d’une innovation se diffusent à d’autres acteurs, l’entreprise initiale peut ne pas capter tous les gains de son investissement.',
                    ],
                    [
                        'question' => 'Quelle situation illustre le mieux une asymétrie d’information ?',
                        'choices' => [
                            ['choice_text' => 'Le vendeur d’une voiture d’occasion connaît des défauts importants que l’acheteur ignore', 'is_correct' => true],
                            ['choice_text' => 'Un gouvernement augmente une taxe', 'is_correct' => false],
                            ['choice_text' => 'Une ville construit une route publique', 'is_correct' => false],
                            ['choice_text' => 'Un ménage reçoit une prestation sociale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’asymétrie d’information existe lorsqu’une partie à une transaction dispose d’informations pertinentes que l’autre ne possède pas.',
                    ],
                    [
                        'question' => 'Pourquoi une asymétrie d’information peut-elle réduire l’efficacité du marché ?',
                        'choices' => [
                            ['choice_text' => 'Les décisions peuvent être prises sur la base d’informations incomplètes ou inégalement réparties', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours des prix parfaitement compétitifs', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les contrats gratuits', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les agents disposent d’informations différentes, certaines transactions mutuellement avantageuses peuvent ne pas avoir lieu ou être conclues à des conditions inefficaces.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux une défaillance du marché ?',
                        'choices' => [
                            ['choice_text' => 'Une situation dans laquelle le fonctionnement décentralisé du marché n’alloue pas nécessairement les ressources de manière efficace', 'is_correct' => true],
                            ['choice_text' => 'Toute situation dans laquelle une entreprise réalise un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Toute baisse temporaire des prix', 'is_correct' => false],
                            ['choice_text' => 'Toute intervention fiscale de l’État', 'is_correct' => false],
                        ],
                        'explanation' => 'Une défaillance du marché désigne un cas où les mécanismes du marché ne conduisent pas seuls à une allocation efficace des ressources.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 2 — Biens publics et passager clandestin
            // =========================================================
            [
                'title' => 'Biens publics et comportement de passager clandestin',
                'description' => 'Application des caractéristiques des biens publics et analyse du financement collectif.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Une ville finance un système d’alerte destiné à protéger tous les habitants contre les catastrophes. Pourquoi le financement volontaire peut-il être insuffisant ?',
                        'choices' => [
                            ['choice_text' => 'Certains habitants peuvent bénéficier du système sans révéler leur disposition à payer', 'is_correct' => true],
                            ['choice_text' => 'Tous les habitants connaissent exactement leur bénéfice individuel', 'is_correct' => false],
                            ['choice_text' => 'Le système est nécessairement rival', 'is_correct' => false],
                            ['choice_text' => 'Le coût du système est toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'La difficulté d’exclusion peut encourager le comportement de passager clandestin et rendre le financement volontaire insuffisant.',
                    ],
                    [
                        'question' => 'Dans un groupe de contribuables, une personne refuse de participer au financement d’un parc public tout en souhaitant continuer à en bénéficier. Ce comportement correspond à :',
                        'choices' => [
                            ['choice_text' => Un comportement de passager clandestin', 'is_correct' => true],
                            ['choice_text' => Une externalité positive de production', 'is_correct' => false],
                            ['choice_text' => Une taxe pigouvienne', 'is_correct' => false],
                            ['choice_text' => Une assurance publique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passager clandestin cherche à bénéficier d’un service collectif sans contribuer proportionnellement à son financement.',
                    ],
                    [
                        'question' => 'Pourquoi l’État peut-il utiliser l’impôt pour financer un bien public ?',
                        'choices' => [
                            ['choice_text' => 'Pour assurer une contribution collective lorsque le financement volontaire est insuffisant', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre le bien nécessairement rival', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer tout coût de production', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que seuls les plus riches utilisent le bien', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impôt permet de collecter obligatoirement des ressources afin de financer des biens dont les caractéristiques peuvent limiter les mécanismes de marché.',
                    ],
                    [
                        'question' => 'Supposons qu’un bien public bénéficie à 1 000 personnes sans réduire le bénéfice reçu par chacune. Quelle caractéristique est particulièrement importante ?',
                        'choices' => [
                            ['choice_text' => La non-rivalité', 'is_correct' => true],
                            ['choice_text' => La rivalité', 'is_correct' => false],
                            ['choice_text' => L’exclusion parfaite', 'is_correct' => false],
                            ['choice_text' => La divisibilité parfaite', 'is_correct' => false],
                        ],
                        'explanation' => 'La non-rivalité implique que l’usage par une personne ne réduit pas directement le bénéfice disponible pour les autres.',
                    ],
                    [
                        'question' => 'Une route est peu congestionnée mais des péages technologiques permettent d’en contrôler l’accès. Elle ne correspond pas parfaitement à un bien public pur parce que :',
                        'choices' => [
                            ['choice_text' => 'L’exclusion devient possible', 'is_correct' => true],
                            ['choice_text' => 'Elle devient nécessairement non productive', 'is_correct' => false],
                            ['choice_text' => 'Sa demande disparaît', 'is_correct' => false],
                            ['choice_text' => 'Elle ne possède plus aucune utilité sociale', 'is_correct' => false],
                        ],
                        'explanation' => 'La possibilité de contrôler l’accès rend le bien excluable, ce qui l’éloigne des caractéristiques d’un bien public pur.',
                    ],
                    [
                        'question' => 'Lorsque la congestion augmente sur une infrastructure commune, quel changement devient possible ?',
                        'choices' => [
                            ['choice_text' => 'La consommation peut devenir davantage rivale', 'is_correct' => true],
                            ['choice_text' => 'Le bien devient automatiquement privé', 'is_correct' => false],
                            ['choice_text' => 'L’externalité disparaît nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Le coût d’utilisation devient toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec la congestion, l’utilisation d’une infrastructure par un agent peut réduire le confort ou le bénéfice des autres utilisateurs.',
                    ],
                    [
                        'question' => 'Une défense nationale protège simultanément plusieurs citoyens. Pourquoi est-elle souvent classée parmi les biens publics ?',
                        'choices' => [
                            ['choice_text' => Parce qu’elle présente fortement les caractéristiques de non-rivalité et de non-exclusion', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle est toujours produite par une entreprise privée', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle est toujours vendue à chaque citoyen individuellement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle n’utilise aucune ressource', 'is_correct' => false],
                        ],
                        'explanation' => 'La défense bénéficie collectivement aux individus et l’exclusion individuelle est particulièrement difficile.',
                    ],
                    [
                        'question' => 'Un gouvernement demande aux citoyens d’indiquer leur disposition à payer pour un parc, mais certains sous-déclarent leur valeur afin de réduire leur contribution. Quel problème cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Une difficulté de révélation des préférences pour un bien public', 'is_correct' => true],
                            ['choice_text' => 'Une externalité négative de production', 'is_correct' => false],
                            ['choice_text' => 'Une perte de productivité du travail', 'is_correct' => false],
                            ['choice_text' => 'Une taxe indirecte sur la consommation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les individus peuvent avoir intérêt à ne pas révéler sincèrement leur disposition à payer lorsque leur contribution dépend de cette information.',
                    ],
                    [
                        'question' => 'Si le coût total d’un projet public est de 1 million de dirhams et qu’aucun mécanisme de contribution volontaire ne permet de collecter suffisamment de fonds, quelle justification publique est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'Le financement collectif peut être nécessaire pour assurer la fourniture du bien', 'is_correct' => true],
                            ['choice_text' => 'Le projet doit obligatoirement être financé par un seul ménage', 'is_correct' => false],
                            ['choice_text' => 'Le coût du projet devient automatiquement nul', 'is_correct' => false],
                            ['choice_text' => 'Le projet est nécessairement inefficace', 'is_correct' => false],
                        ],
                        'explanation' => 'La difficulté de financement volontaire ne signifie pas que le bien est inutile ; elle peut justifier un mécanisme collectif de financement.',
                    ],
                    [
                        'question' => 'Quel raisonnement est le plus pertinent pour décider d’un niveau de fourniture publique ?',
                        'choices' => [
                            ['choice_text' => Comparer les bénéfices sociaux agrégés aux coûts de fourniture', 'is_correct' => true],
                            ['choice_text' => 'Choisir automatiquement la quantité maximale possible', 'is_correct' => false],
                            ['choice_text' => 'Choisir la quantité qui maximise uniquement le bénéfice d’un individu', 'is_correct' => false],
                            ['choice_text' => 'Fixer la quantité sans considérer son coût', 'is_correct' => false],
                        ],
                        'explanation' => 'La décision collective doit comparer les bénéfices sociaux attendus avec les ressources nécessaires à la production du bien public.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 3 — Fiscalité et incidence
            // =========================================================
            [
                'title' => 'Fiscalité et incidence économique',
                'description' => 'Analyser les effets des impôts sur les consommateurs, les producteurs et les marchés.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Un gouvernement impose une taxe spécifique sur les vendeurs d’un produit. Qui peut finalement supporter une partie de la charge économique ?',
                        'choices' => [
                            ['choice_text' => 'Les consommateurs et les producteurs, selon les conditions du marché', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le gouvernement', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les consommateurs dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les producteurs dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incidence économique d’un impôt dépend notamment des élasticités de l’offre et de la demande et peut être partagée entre acheteurs et vendeurs.',
                    ],
                    [
                        'question' => 'Si la demande d’un produit est très peu sensible au prix, qui supporte généralement une plus grande partie d’une taxe sur ce produit ?',
                        'choices' => [
                            ['choice_text' => Les consommateurs', 'is_correct' => true],
                            ['choice_text' => 'Les producteurs exclusivement', 'is_correct' => false],
                            ['choice_text' => 'L’État exclusivement', 'is_correct' => false],
                            ['choice_text' => 'Les exportateurs étrangers dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque la demande est relativement inélastique, les consommateurs réduisent peu leur quantité demandée lorsque le prix augmente et peuvent supporter une part plus importante de la taxe.',
                    ],
                    [
                        'question' => 'Une taxe sur un marché parfaitement inélastique du côté de l’offre pèserait principalement sur :',
                        'choices' => [
                            ['choice_text' => 'Les producteurs, si l’offre est parfaitement inélastique', 'is_correct' => true],
                            ['choice_text' => 'Les consommateurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le gouvernement', 'is_correct' => false],
                            ['choice_text' => 'Les exportateurs seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'La partie du marché la moins élastique supporte généralement la plus grande part de la charge économique de la taxe.',
                    ],
                    [
                        'question' => 'Une taxe sur les cigarettes entraîne une hausse du prix payé par les consommateurs et une baisse du prix net reçu par les producteurs. Cette situation montre que :',
                        'choices' => [
                            ['choice_text' => 'L’incidence économique de la taxe peut être partagée entre les deux côtés du marché', 'is_correct' => true],
                            ['choice_text' => 'La taxe n’a aucun effet sur les prix', 'is_correct' => false],
                            ['choice_text' => 'Les producteurs paient toujours 100 % de la taxe', 'is_correct' => false],
                            ['choice_text' => 'Les consommateurs ne supportent jamais les taxes sur les producteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le prix payé par les acheteurs et celui reçu par les vendeurs peuvent tous deux s’ajuster après l’introduction d’une taxe.',
                    ],
                    [
                        'question' => 'Pourquoi une taxe peut-elle créer une perte sèche ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut empêcher certaines transactions mutuellement avantageuses d’avoir lieu', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle augmente toujours le surplus total', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime toutes les recettes publiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle augmente nécessairement toutes les quantités échangées', 'is_correct' => false],
                        ],
                        'explanation' => 'Une taxe crée un écart entre le prix payé et le prix reçu, ce qui peut réduire la quantité échangée et empêcher certaines transactions de se réaliser.',
                    ],
                    [
                        'question' => 'Une taxe corrective sur la pollution cherche principalement à faire en sorte que :',
                        'choices' => [
                            ['choice_text' => 'Le producteur prenne davantage en compte le coût externe de son activité', 'is_correct' => true],
                            ['choice_text' => 'Le coût social soit ignoré', 'is_correct' => false],
                            ['choice_text' => 'Le prix du produit devienne nécessairement nul', 'is_correct' => false],
                            ['choice_text' => 'La production augmente indépendamment de la pollution', 'is_correct' => false],
                        ],
                        'explanation' => 'Une taxe corrective vise à internaliser l’externalité en rapprochant le coût privé du coût social.',
                    ],
                    [
                        'question' => 'Si l’offre est très élastique et la demande très inélastique, l’incidence d’une taxe sera généralement plus forte sur :',
                        'choices' => [
                            ['choice_text' => 'Les consommateurs', 'is_correct' => true],
                            ['choice_text' => 'Les producteurs', 'is_correct' => false],
                            ['choice_text' => 'Les administrations uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les banques centrales', 'is_correct' => false],
                        ],
                        'explanation' => 'La demande relativement moins élastique supporte généralement une plus grande partie de la taxe, car les consommateurs ajustent moins leur quantité demandée.',
                    ],
                    [
                        'question' => 'Une réduction d’impôt sur le revenu augmente toutes choses égales par ailleurs :',
                        'choices' => [
                            ['choice_text' => Le revenu disponible des ménages concernés', 'is_correct' => true],
                            ['choice_text' => 'Le montant de l’impôt payé par définition', 'is_correct' => false],
                            ['choice_text' => 'Les recettes publiques automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Le coût des biens publics nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réduction d’impôt laisse, toutes choses égales par ailleurs, davantage de revenu disponible aux ménages concernés.',
                    ],
                    [
                        'question' => 'Pourquoi l’élasticité est-elle utile pour analyser les effets d’une taxe ?',
                        'choices' => [
                            ['choice_text' => 'Elle aide à prévoir les réactions des quantités demandées et offertes aux variations de prix', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine toujours le montant exact des dépenses publiques', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les autres informations économiques', 'is_correct' => false],
                            ['choice_text' => 'Elle indique uniquement le niveau des salaires publics', 'is_correct' => false],
                        ],
                        'explanation' => 'Les élasticités permettent d’évaluer la sensibilité des comportements des acheteurs et vendeurs aux changements de prix.',
                    ],
                    [
                        'question' => 'Un gouvernement augmente une taxe sur un produit dont la demande est très sensible au prix. Quel résultat est plausible ?',
                        'choices' => [
                            ['choice_text' => 'La quantité demandée peut diminuer fortement', 'is_correct' => true],
                            ['choice_text' => 'La quantité demandée doit rester strictement inchangée', 'is_correct' => false],
                            ['choice_text' => 'La demande devient automatiquement parfaitement inélastique', 'is_correct' => false],
                            ['choice_text' => 'La consommation augmente nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une demande élastique signifie qu’une variation du prix provoque une variation relativement importante de la quantité demandée.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 4 — Redistribution et transferts
            // =========================================================
            [
                'title' => 'Redistribution et protection sociale',
                'description' => 'Application des mécanismes de redistribution, des transferts sociaux et de la fiscalité aux situations des ménages.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Un État augmente un impôt progressif et utilise les recettes supplémentaires pour financer des aides ciblées aux ménages modestes. Quel objectif domine ?',
                        'choices' => [
                            ['choice_text' => La redistribution du revenu', 'is_correct' => true],
                            ['choice_text' => 'La libéralisation commerciale', 'is_correct' => false],
                            ['choice_text' => 'La réduction du stock de capital privé uniquement', 'is_correct' => false],
                            ['choice_text' => 'La suppression de toute consommation', 'is_correct' => false],
                        ],
                        'explanation' => 'L’association d’un prélèvement progressif et de transferts ciblés vise directement à modifier la distribution des revenus disponibles.',
                    ],
                    [
                        'question' => 'Un ménage reçoit une prestation sociale alors que son revenu marchand reste inchangé. Quel effet peut être observé sur son revenu disponible ?',
                        'choices' => [
                            ['choice_text' => 'Son revenu disponible peut augmenter', 'is_correct' => true],
                            ['choice_text' => 'Son revenu disponible diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Il devient automatiquement indépendant fiscalement', 'is_correct' => false],
                            ['choice_text' => 'Son revenu du travail augmente nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert reçu par le ménage augmente ses ressources disponibles, toutes choses égales par ailleurs.',
                    ],
                    [
                        'question' => 'Pourquoi une prestation conditionnelle aux revenus peut-elle réduire les inégalités ?',
                        'choices' => [
                            ['choice_text' => 'Elle cible davantage les ménages disposant de ressources relativement faibles', 'is_correct' => true],
                            ['choice_text' => 'Elle verse nécessairement le même montant à tout le monde', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement les revenus les plus élevés', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la fiscalité', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert ciblé concentre les ressources sur les ménages répondant à certains critères, notamment de revenu.',
                    ],
                    [
                        'question' => 'Un impôt progressif peut affecter les décisions d’un ménage parce qu’il :',
                        'choices' => [
                            ['choice_text' => 'Modifie le revenu conservé après impôt lorsque le revenu imposable augmente', 'is_correct' => true],
                            ['choice_text' => 'Garantit toujours une hausse de l’épargne', 'is_correct' => false],
                            ['choice_text' => 'Rend tous les biens publics gratuits', 'is_correct' => false],
                            ['choice_text' => 'Supprime toute incitation au travail dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La fiscalité modifie le revenu disponible et peut donc influencer les arbitrages entre travail, loisir, consommation et épargne.',
                    ],
                    [
                        'question' => 'Une prestation sociale diminue progressivement lorsque le revenu du bénéficiaire augmente. Quel effet secondaire doit être surveillé ?',
                        'choices' => [
                            ['choice_text' => Une possible baisse de l’incitation financière à augmenter son revenu', 'is_correct' => true],
                            ['choice_text' => 'Une hausse obligatoire de tous les salaires', 'is_correct' => false],
                            ['choice_text' => 'Une disparition automatique de la pauvreté', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique du taux de change', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les prestations diminuent avec le revenu, le bénéficiaire peut faire face à un taux marginal effectif d’imposition plus élevé sur les revenus supplémentaires.',
                    ],
                    [
                        'question' => 'Deux ménages ont le même revenu avant impôt mais des situations familiales très différentes. Pourquoi un système fiscal peut-il leur demander des montants différents ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la capacité contributive peut être évaluée en tenant compte de certaines caractéristiques du ménage', 'is_correct' => true],
                            ['choice_text' => 'Parce que la fiscalité doit toujours favoriser le ménage le plus ancien', 'is_correct' => false],
                            ['choice_text' => 'Parce que le revenu n’a aucune importance fiscale', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les impôts sont aléatoires', 'is_correct' => false],
                        ],
                        'explanation' => 'Des systèmes fiscaux peuvent intégrer des caractéristiques familiales afin d’adapter la charge fiscale à la situation économique du ménage.',
                    ],
                    [
                        'question' => 'Une politique redistributive réussit à réduire les inégalités, mais au prix d’un faible impact négatif sur l’offre de travail. Quel arbitrage est illustré ?',
                        'choices' => [
                            ['choice_text' => 'L’arbitrage entre équité et efficacité', 'is_correct' => true],
                            ['choice_text' => 'L’arbitrage entre inflation et taux de change uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’arbitrage entre exportations et importations uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’arbitrage entre monnaie et capital physique seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique redistributive peut améliorer l’équité tout en influençant certaines incitations économiques, créant ainsi un arbitrage entre équité et efficacité.',
                    ],
                    [
                        'question' => 'Pourquoi le revenu disponible est-il particulièrement pertinent pour analyser les effets redistributifs ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il tient compte des prélèvements et des transferts qui modifient les ressources effectivement disponibles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il mesure uniquement les revenus du patrimoine', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il exclut toujours les prestations sociales', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il correspond exactement au salaire brut', 'is_correct' => false],
                        ],
                        'explanation' => 'Les prélèvements et transferts modifient le revenu réellement disponible pour la consommation et l’épargne.',
                    ],
                    [
                        'question' => 'Une hausse d’une prestation destinée aux ménages à faible revenu peut avoir quel effet macroéconomique immédiat, toutes choses égales par ailleurs ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter les ressources disponibles des bénéficiaires et potentiellement leur consommation', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement tous les investissements privés', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute demande de biens publics', 'is_correct' => false],
                            ['choice_text' => 'Rendre les recettes publiques infinies', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ménages bénéficiaires disposent de ressources supplémentaires, dont une partie peut être consacrée à la consommation selon leur propension à consommer.',
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement utile pour comparer l’inégalité avant et après redistribution ?',
                        'choices' => [
                            ['choice_text' => 'Un indicateur de distribution des revenus, comme le coefficient de Gini', 'is_correct' => true],
                            ['choice_text' => 'Le taux directeur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change nominal uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le volume des exportations seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer un indicateur de concentration ou d’inégalité avant et après prélèvements et transferts permet d’évaluer l’effet redistributif du système.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 5 — Dépenses publiques et biens tutélaires
            // =========================================================
            [
                'title' => 'Dépenses publiques et services essentiels',
                'description' => 'Analyser les choix publics en matière de santé, d’éducation, d’infrastructures et de services collectifs.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Un gouvernement investit dans l’éducation primaire gratuite. Quelle combinaison d’arguments peut justifier cette dépense ?',
                        'choices' => [
                            ['choice_text' => Des bénéfices sociaux, des effets redistributifs et des externalités positives', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la possibilité d’augmenter les exportations', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la volonté de réduire les salaires', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de coût de fourniture', 'is_correct' => false],
                        ],
                        'explanation' => 'L’éducation peut produire des bénéfices privés et sociaux, améliorer l’égalité des chances et générer des externalités positives.',
                    ],
                    [
                        'question' => 'Pourquoi un État peut-il subventionner les soins préventifs même lorsqu’un individu en retire un bénéfice privé ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la prévention peut aussi générer des bénéfices externes pour les autres', 'is_correct' => true],
                            ['choice_text' => 'Parce que tout soin est nécessairement un bien public pur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût privé est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’aucun individu n’a de préférence pour sa santé', 'is_correct' => false],
                        ],
                        'explanation' => 'Les soins préventifs peuvent réduire la transmission de certaines maladies ou limiter des coûts futurs pour la collectivité.',
                    ],
                    [
                        'question' => 'Une infrastructure publique réduit fortement les coûts de transport des entreprises locales. Quel type d’effet positif peut-on observer ?',
                        'choices' => [
                            ['choice_text' => 'Une amélioration de la productivité et de l’activité économique locale', 'is_correct' => true],
                            ['choice_text' => 'Une suppression automatique de toute concurrence', 'is_correct' => false],
                            ['choice_text' => 'Une réduction nécessaire de toutes les recettes fiscales', 'is_correct' => false],
                            ['choice_text' => 'Une hausse obligatoire du chômage', 'is_correct' => false],
                        ],
                        'explanation' => 'De meilleures infrastructures peuvent réduire les coûts de transport et améliorer l’efficacité des activités économiques.',
                    ],
                    [
                        'question' => 'Une municipalité doit choisir entre réparer un réseau d’eau et construire un nouvel équipement sportif. Quel principe économique doit-elle appliquer ?',
                        'choices' => [
                            ['choice_text' => Comparer les bénéfices sociaux et le coût d’opportunité de chaque projet', 'is_correct' => true],
                            ['choice_text' => 'Choisir automatiquement le projet le plus visible', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours le projet ayant le coût initial le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les bénéfices futurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ressources publiques étant limitées, il faut comparer les bénéfices des projets avec leur coût et les alternatives abandonnées.',
                    ],
                    [
                        'question' => 'Une analyse coûts-bénéfices attribue à un projet public un bénéfice total estimé à 80 millions de dirhams et un coût social de 50 millions. Quelle conclusion préliminaire est la plus raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'Le projet présente un bénéfice net estimé positif de 30 millions de dirhams', 'is_correct' => true],
                            ['choice_text' => 'Le projet est nécessairement inefficace', 'is_correct' => false],
                            ['choice_text' => 'Le projet ne peut être financé publiquement', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice net est de 130 millions de dirhams', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bénéfice net simplifié est égal aux bénéfices moins les coûts, soit 80 - 50 = 30 millions de dirhams.',
                    ],
                    [
                        'question' => 'Un programme de santé coûte 20 millions de dirhams et évite des dommages futurs estimés à 35 millions. Que suggère ce calcul simplifié ?',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice net estimé est positif, sous réserve des autres hypothèses de l’analyse', 'is_correct' => true],
                            ['choice_text' => 'Le programme détruit nécessairement de la valeur', 'is_correct' => false],
                            ['choice_text' => 'Le coût net est de 55 millions', 'is_correct' => false],
                            ['choice_text' => 'Le programme doit être abandonné', 'is_correct' => false],
                        ],
                        'explanation' => 'En comparaison simple, 35 millions de bénéfices moins 20 millions de coûts donnent un bénéfice net positif de 15 millions.',
                    ],
                    [
                        'question' => 'Pourquoi la qualité des dépenses publiques est-elle importante, et pas seulement leur montant ?',
                        'choices' => [
                            ['choice_text' => 'Parce que deux niveaux de dépenses identiques peuvent produire des résultats très différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que le montant des dépenses n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les dépenses ont le même rendement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les services publics n’ont aucun coût', 'is_correct' => false],
                        ],
                        'explanation' => 'L’efficacité et l’impact des dépenses dépendent de leur composition, de leur ciblage et de la qualité de leur mise en œuvre.',
                    ],
                    [
                        'question' => 'Un programme public produit les mêmes résultats qu’un autre mais coûte deux fois plus cher. Lequel semble préférable selon le critère d’efficience ?',
                        'choices' => [
                            ['choice_text' => 'Le programme moins coûteux, toutes choses égales par ailleurs', 'is_correct' => true],
                            ['choice_text' => 'Le programme le plus coûteux', 'is_correct' => false],
                            ['choice_text' => 'Les deux programmes sont nécessairement équivalents', 'is_correct' => false],
                            ['choice_text' => 'Aucun programme ne peut être évalué', 'is_correct' => false],
                        ],
                        'explanation' => 'Si les résultats sont identiques, le programme qui atteint ces résultats avec moins de ressources est plus efficient.',
                    ],
                    [
                        'question' => 'Pourquoi un service public universel peut-il parfois être privilégié par rapport à une aide strictement ciblée ?',
                        'choices' => [
                            ['choice_text' => 'Il peut réduire les coûts de ciblage et limiter certaines erreurs d’exclusion', 'is_correct' => true],
                            ['choice_text' => 'Il garantit toujours un coût inférieur', 'is_correct' => false],
                            ['choice_text' => 'Il élimine tous les problèmes budgétaires', 'is_correct' => false],
                            ['choice_text' => 'Il produit nécessairement plus de redistribution', 'is_correct' => false],
                        ],
                        'explanation' => 'L’universalité peut simplifier l’administration et éviter qu’un bénéficiaire éligible soit exclu en raison d’erreurs de ciblage, même si elle peut être plus coûteuse.',
                    ],
                    [
                        'question' => 'Une politique d’investissement public est particulièrement intéressante lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'Crée des bénéfices futurs importants par rapport aux ressources engagées', 'is_correct' => true],
                            ['choice_text' => 'Ne produit aucun effet après son financement', 'is_correct' => false],
                            ['choice_text' => 'Nécessite toujours un déficit public', 'is_correct' => false],
                            ['choice_text' => 'Élimine la nécessité d’évaluer les résultats', 'is_correct' => false],
                        ],
                        'explanation' => 'L’investissement public peut être justifié lorsque ses bénéfices futurs sont suffisamment importants par rapport à ses coûts économiques.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 6 — Budget, déficit et dette
            // =========================================================
            [
                'title' => 'Budget public, déficit et dette',
                'description' => 'Application des relations entre recettes, dépenses, déficit budgétaire et accumulation de dette publique.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Un État enregistre 500 milliards de recettes et 550 milliards de dépenses sur une année. Quelle est sa situation budgétaire ?',
                        'choices' => [
                            ['choice_text' => 'Un déficit de 50 milliards', 'is_correct' => true],
                            ['choice_text' => 'Un excédent de 50 milliards', 'is_correct' => false],
                            ['choice_text' => 'Une dette de 550 milliards', 'is_correct' => false],
                            ['choice_text' => 'Un équilibre budgétaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le solde budgétaire est égal aux recettes moins les dépenses : 500 - 550 = -50 milliards.',
                    ],
                    [
                        'question' => 'Un gouvernement réduit ses dépenses de 20 milliards sans modifier ses recettes. Quel effet direct peut-on attendre sur le déficit, toutes choses égales par ailleurs ?',
                        'choices' => [
                            ['choice_text' => 'Le déficit diminue de 20 milliards', 'is_correct' => true],
                            ['choice_text' => 'Le déficit augmente de 20 milliards', 'is_correct' => false],
                            ['choice_text' => 'La dette augmente nécessairement de 20 milliards', 'is_correct' => false],
                            ['choice_text' => 'Le solde ne change jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'Une baisse des dépenses améliore directement le solde budgétaire si les recettes restent constantes.',
                    ],
                    [
                        'question' => 'Un État connaît un déficit pendant cinq années consécutives. Quel effet est plausible sur sa dette publique ?',
                        'choices' => [
                            ['choice_text' => 'La dette peut augmenter au fil des années si les déficits sont financés par de nouveaux emprunts', 'is_correct' => true],
                            ['choice_text' => 'La dette diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'La dette reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'La dette devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Des déficits répétés peuvent s’accumuler sous forme de dette lorsque le financement repose sur l’endettement.',
                    ],
                    [
                        'question' => 'Pourquoi le ratio dette publique/PIB peut-il diminuer même si la dette nominale augmente ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le PIB peut augmenter plus rapidement que la dette', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette disparaît automatiquement avec la croissance', 'is_correct' => false],
                            ['choice_text' => 'Parce que le ratio ne dépend pas du PIB', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute croissance réduit nécessairement les intérêts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ratio est un rapport : une hausse du dénominateur plus rapide que celle du numérateur peut faire baisser le ratio.',
                    ],
                    [
                        'question' => 'Un gouvernement emprunte pour financer une infrastructure qui augmente durablement la productivité. Quel argument peut justifier l’emprunt ?',
                        'choices' => [
                            ['choice_text' => 'Les bénéfices futurs de l’investissement peuvent contribuer à justifier le financement intertemporel', 'is_correct' => true],
                            ['choice_text' => 'Tout emprunt est automatiquement optimal', 'is_correct' => false],
                            ['choice_text' => 'La dette publique n’a jamais de coût', 'is_correct' => false],
                            ['choice_text' => 'Les infrastructures n’ont jamais de bénéfices économiques', 'is_correct' => false],
                        ],
                        'explanation' => 'L’emprunt peut être pertinent lorsque le projet produit des bénéfices futurs et que son financement est soutenable.',
                    ],
                    [
                        'question' => 'Une hausse des taux d’intérêt sur la dette publique peut exercer quelle pression sur le budget ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut augmenter la charge d’intérêts à refinancer', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit nécessairement les intérêts à payer', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les dépenses publiques', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement les recettes fiscales du même montant', 'is_correct' => false],
                        ],
                        'explanation' => 'Des taux plus élevés peuvent accroître le coût des nouveaux emprunts et du refinancement de la dette arrivant à échéance.',
                    ],
                    [
                        'question' => 'Un État maintient des dépenses inchangées mais bénéficie d’une forte hausse des recettes fiscales liée à une croissance économique plus forte. Que peut-il se produire ?',
                        'choices' => [
                            ['choice_text' => 'Le déficit peut se réduire', 'is_correct' => true],
                            ['choice_text' => 'Le déficit doit augmenter', 'is_correct' => false],
                            ['choice_text' => 'La dette devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Les dépenses augmentent nécessairement du même montant', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse des recettes améliore le solde budgétaire si les dépenses restent constantes.',
                    ],
                    [
                        'question' => 'Quelle distinction est correcte entre déficit et dette ?',
                        'choices' => [
                            ['choice_text' => 'Le déficit est un flux sur une période, tandis que la dette est un stock accumulé', 'is_correct' => true],
                            ['choice_text' => 'Le déficit et la dette sont exactement la même variable', 'is_correct' => false],
                            ['choice_text' => 'La dette est un flux annuel', 'is_correct' => false],
                            ['choice_text' => 'Le déficit est toujours un stock historique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déficit mesure un solde sur une période donnée, tandis que la dette représente un stock d’engagements accumulé à une date donnée.',
                    ],
                    [
                        'question' => 'Un gouvernement réduit son déficit de 10 milliards mais continue d’avoir un déficit de 20 milliards. Que peut-on conclure ?',
                        'choices' => [
                            ['choice_text' => 'Le déficit s’améliore mais reste positif', 'is_correct' => true],
                            ['choice_text' => 'Le budget devient automatiquement excédentaire', 'is_correct' => false],
                            ['choice_text' => 'La dette diminue nécessairement du même montant', 'is_correct' => false],
                            ['choice_text' => 'Le solde devient nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réduction du déficit signifie une amélioration du solde, mais un déficit subsiste tant que les dépenses restent supérieures aux recettes.',
                    ],
                    [
                        'question' => 'Pourquoi la soutenabilité de la dette ne dépend-elle pas uniquement de son montant nominal ?',
                        'choices' => [
                            ['choice_text' => 'Elle dépend aussi notamment de la croissance, des taux d’intérêt et de la capacité de l’État à générer des ressources', 'is_correct' => true],
                            ['choice_text' => 'Le montant nominal ne joue jamais aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'La soutenabilité dépend uniquement des exportations', 'is_correct' => false],
                            ['choice_text' => 'La dette est soutenable dès qu’elle est positive', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité à stabiliser ou réduire la dette dépend de plusieurs variables, notamment la croissance économique, le coût du financement et les soldes budgétaires futurs.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 7 — Analyse des politiques publiques
            // =========================================================
            [
                'title' => 'Évaluation des politiques publiques',
                'description' => 'Application des outils d’évaluation aux choix économiques des administrations publiques.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Une ville met en place un programme de transport public et veut mesurer son efficacité. Quelle comparaison serait la plus informative ?',
                        'choices' => [
                            ['choice_text' => 'Comparer les résultats obtenus aux ressources consacrées au programme', 'is_correct' => true],
                            ['choice_text' => 'Comparer uniquement le budget avec celui d’une autre ville', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement le nombre d’agents employés', 'is_correct' => false],
                            ['choice_text' => 'Observer uniquement les recettes fiscales générales', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaluation de l’efficacité nécessite de mettre en relation les résultats du programme et les ressources mobilisées.',
                    ],
                    [
                        'question' => 'Un programme réduit la pauvreté observée après sa mise en place, mais une forte croissance économique s’est également produite. Quel problème d’évaluation apparaît ?',
                        'choices' => [
                            ['choice_text' => 'Il est difficile d’attribuer entièrement la baisse de la pauvreté au seul programme', 'is_correct' => true],
                            ['choice_text' => 'La baisse de la pauvreté ne peut jamais être mesurée', 'is_correct' => false],
                            ['choice_text' => 'La croissance économique n’a jamais d’effet sur la pauvreté', 'is_correct' => false],
                            ['choice_text' => 'Le programme est nécessairement inefficace', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque plusieurs facteurs évoluent simultanément, identifier l’effet causal propre d’une politique devient plus difficile.',
                    ],
                    [
                        'question' => 'Une politique coûte 100 millions de dirhams et bénéficie à 200 000 personnes. Quel indicateur simple peut être calculé ?',
                        'choices' => [
                            ['choice_text' => 'Le coût moyen de 500 dirhams par bénéficiaire', 'is_correct' => true],
                            ['choice_text' => 'Un bénéfice moyen de 200 000 dirhams', 'is_correct' => false],
                            ['choice_text' => 'Un coût nul par bénéficiaire', 'is_correct' => false],
                            ['choice_text' => 'Un taux de redistribution de 100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coût moyen est obtenu en divisant 100 000 000 par 200 000, soit 500 dirhams par bénéficiaire.',
                    ],
                    [
                        'question' => 'Une politique atteint son objectif mais coûte beaucoup plus cher qu’une alternative offrant des résultats similaires. Quel problème ressort ?',
                        'choices' => [
                            ['choice_text' => 'Une inefficience relative dans l’utilisation des ressources', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale d’impact', 'is_correct' => false],
                            ['choice_text' => 'Une externalité positive nécessairement excessive', 'is_correct' => false],
                            ['choice_text' => 'Une disparition du coût d’opportunité', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque deux politiques produisent des résultats comparables, celle qui mobilise moins de ressources est généralement plus efficiente.',
                    ],
                    [
                        'question' => 'Pourquoi une politique publique doit-elle être évaluée avec des indicateurs définis à l’avance ?',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir comparer les résultats observés aux objectifs initiaux', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que la politique réussira', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute collecte de données', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la possibilité de modifier la politique', 'is_correct' => false],
                        ],
                        'explanation' => 'Des indicateurs bien définis permettent de mesurer les résultats et de comparer les performances avec les objectifs poursuivis.',
                    ],
                    [
                        'question' => 'Une politique de subvention augmente fortement la consommation du bien ciblé mais coûte davantage que prévu. Quelle information supplémentaire serait nécessaire pour évaluer son bilan ?',
                        'choices' => [
                            ['choice_text' => Les bénéfices sociaux supplémentaires générés par cette consommation', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre de fonctionnaires', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le taux de change', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les exportations du pays', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour juger la politique, il faut comparer son coût à la valeur des bénéfices supplémentaires qu’elle produit.',
                    ],
                    [
                        'question' => 'Deux programmes ont le même budget, mais le premier réduit deux fois plus le nombre de ménages en situation de pauvreté. Lequel semble plus efficace pour cet objectif ?',
                        'choices' => [
                            ['choice_text' => 'Le premier programme', 'is_correct' => true],
                            ['choice_text' => 'Le second programme', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont nécessairement identiques', 'is_correct' => false],
                            ['choice_text' => 'Aucun ne peut être comparé', 'is_correct' => false],
                        ],
                        'explanation' => 'À coût identique, le programme qui atteint davantage l’objectif mesuré présente une meilleure performance sur cet indicateur.',
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’un programme public est évalué uniquement à partir du nombre de bénéficiaires ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de bénéficiaires peut être élevé alors que l’impact réel sur leur situation reste faible', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de bénéficiaires mesure toujours parfaitement l’efficacité', 'is_correct' => false],
                            ['choice_text' => 'La politique devient automatiquement moins coûteuse', 'is_correct' => false],
                            ['choice_text' => 'Les résultats deviennent indépendants du budget', 'is_correct' => false],
                        ],
                        'explanation' => 'Un indicateur de volume ne mesure pas nécessairement la qualité ou l’impact réel d’une politique sur ses bénéficiaires.',
                    ],
                    [
                        'question' => 'Une évaluation montre qu’un programme fonctionne mieux pour les zones urbaines que pour les zones rurales. Quelle réaction est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Analyser les raisons de cette différence avant d’ajuster le programme', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement le programme partout', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la différence', 'is_correct' => false],
                            ['choice_text' => 'Doubler automatiquement le budget national', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence d’impact peut révéler des contraintes ou caractéristiques spécifiques nécessitant une analyse avant toute décision.',
                    ],
                    [
                        'question' => 'Pourquoi l’analyse contrefactuelle est-elle utile pour évaluer une politique ?',
                        'choices' => [
                            ['choice_text' => 'Elle cherche à estimer ce qui se serait produit sans l’intervention', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure uniquement le budget dépensé', 'is_correct' => false],
                            ['choice_text' => 'Elle suppose que toute politique est efficace', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de données', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer la situation observée à une estimation de ce qui aurait eu lieu en l’absence de politique aide à identifier son effet propre.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 8 — Incitations et arbitrages publics
            // =========================================================
            [
                'title' => 'Incitations et arbitrages de l’action publique',
                'description' => 'Étudier les conséquences comportementales des impôts, subventions et programmes publics.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Une taxe élevée sur le revenu du travail peut modifier la décision d’un individu entre travail et loisir. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Elle modifie le revenu net associé à une heure supplémentaire de travail', 'is_correct' => true],
                            ['choice_text' => 'Elle rend toutes les heures de travail gratuites', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement le besoin de travailler', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun effet possible sur les incitations', 'is_correct' => false],
                        ],
                        'explanation' => 'La fiscalité du travail modifie la rémunération nette et peut influencer l’arbitrage entre revenu et loisir.',
                    ],
                    [
                        'question' => 'Une subvention à l’embauche réduit le coût de recrutement pour les entreprises. Quel comportement cherche-t-elle à encourager ?',
                        'choices' => [
                            ['choice_text' => 'Une augmentation de la demande de travail', 'is_correct' => true],
                            ['choice_text' => 'Une réduction obligatoire de la production', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique de la productivité', 'is_correct' => false],
                            ['choice_text' => 'Une diminution de toutes les dépenses publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'En réduisant le coût du travail pour les employeurs, la subvention peut encourager l’embauche de travailleurs supplémentaires.',
                    ],
                    [
                        'question' => 'Une prestation chômage généreuse peut avoir simultanément un effet de protection et un effet sur les incitations. Quelle formulation est la plus correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut protéger le revenu tout en influençant la durée de recherche d’emploi', 'is_correct' => true],
                            ['choice_text' => 'Elle n’a qu’un effet budgétaire', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les incitations au travail', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente nécessairement l’emploi', 'is_correct' => false],
                        ],
                        'explanation' => 'L’assurance chômage protège contre la perte de revenu, mais sa générosité peut aussi influencer les incitations et la durée de recherche d’emploi.',
                    ],
                    [
                        'question' => 'Un gouvernement interdit un produit extrêmement polluant au lieu d’imposer une taxe. Quelle différence essentielle existe entre les deux instruments ?',
                        'choices' => [
                            ['choice_text' => 'L’interdiction élimine directement l’activité concernée, alors qu’une taxe laisse en principe un choix aux agents', 'is_correct' => true],
                            ['choice_text' => 'Les deux instruments ont toujours exactement le même effet', 'is_correct' => false],
                            ['choice_text' => 'La taxe ne produit jamais de recettes', 'is_correct' => false],
                            ['choice_text' => 'L’interdiction laisse toujours davantage de liberté aux producteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une interdiction impose une contrainte quantitative ou légale, tandis qu’une taxe modifie l’incitation économique sans nécessairement interdire l’activité.',
                    ],
                    [
                        'question' => 'Pourquoi une subvention peut-elle parfois être inefficace malgré un objectif social pertinent ?',
                        'choices' => [
                            ['choice_text' => 'Parce que son coût budgétaire ou ses effets secondaires peuvent dépasser les bénéfices supplémentaires obtenus', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une subvention n’a jamais aucun effet', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les subventions réduisent nécessairement le bien-être', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une subvention supprime toujours le marché', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique doit être évaluée sur ses bénéfices nets, en tenant compte de son coût budgétaire et de ses éventuels effets indésirables.',
                    ],
                    [
                        'question' => 'Une politique publique augmente un transfert monétaire mais diminue fortement le gain net issu d’un emploi faiblement rémunéré. Quel risque peut apparaître ?',
                        'choices' => [
                            ['choice_text' => Une faible incitation à reprendre ou accroître l’activité professionnelle', 'is_correct' => true],
                            ['choice_text' => 'Une hausse certaine de l’offre de travail', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de toute pauvreté', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique de la productivité des entreprises', 'is_correct' => false],
                        ],
                        'explanation' => 'Si les prestations diminuent fortement lorsque le revenu du travail augmente, le gain net d’une reprise d’activité peut être réduit.',
                    ],
                    [
                        'question' => 'Une taxe environnementale améliore la qualité de l’air mais réduit légèrement la production d’un secteur polluant. Quel arbitrage économique est illustré ?',
                        'choices' => [
                            ['choice_text' => 'Un arbitrage entre le bénéfice environnemental et le coût économique de la réduction de pollution', 'is_correct' => true],
                            ['choice_text' => 'Un arbitrage uniquement comptable', 'is_correct' => false],
                            ['choice_text' => 'Une absence de coût d’opportunité', 'is_correct' => false],
                            ['choice_text' => 'Un choix sans aucun effet sur les entreprises', 'is_correct' => false],
                        ],
                        'explanation' => 'La réduction de la pollution apporte un bénéfice social, mais elle peut aussi entraîner des coûts économiques tels qu’une baisse de production dans certaines activités.',
                    ],
                    [
                        'question' => 'Un gouvernement subventionne massivement une énergie renouvelable mais la subvention bénéficie surtout à des ménages aisés. Quel problème distributif peut apparaître ?',
                        'choices' => [
                            ['choice_text' => 'La politique peut être moins redistributive qu’attendu, voire bénéficier davantage aux ménages aisés', 'is_correct' => true],
                            ['choice_text' => 'La politique devient automatiquement progressive', 'is_correct' => false],
                            ['choice_text' => 'Tous les ménages reçoivent nécessairement le même bénéfice', 'is_correct' => false],
                            ['choice_text' => 'La fiscalité disparaît automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incidence d’une subvention dépend de qui utilise le bien ou bénéficie réellement du dispositif ; un soutien universel peut être régressif dans certaines situations.',
                    ],
                    [
                        'question' => 'Une taxe comportementale réduit fortement une consommation nuisible mais génère moins de recettes que prévu. Est-ce nécessairement un échec ?',
                        'choices' => [
                            ['choice_text' => 'Non, car la réduction de la consommation nuisible peut être précisément l’objectif recherché', 'is_correct' => true],
                            ['choice_text' => 'Oui, car une taxe n’est réussie que si elle maximise ses recettes', 'is_correct' => false],
                            ['choice_text' => 'Oui, car toute taxe doit augmenter la consommation', 'is_correct' => false],
                            ['choice_text' => 'Non, uniquement si le déficit public augmente', 'is_correct' => false],
                        ],
                        'explanation' => 'Une taxe corrective a principalement pour objectif de modifier un comportement ou de réduire une externalité ; une baisse des recettes peut donc être cohérente avec son succès.',
                    ],
                    [
                        'question' => 'Une politique publique atteint un objectif social avec une dépense moindre que prévu et sans effet négatif important sur les incitations. Quelle appréciation est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'La politique semble relativement efficiente et ses coûts comportementaux semblent limités', 'is_correct' => true],
                            ['choice_text' => 'La politique est nécessairement inefficace', 'is_correct' => false],
                            ['choice_text' => 'La politique doit être supprimée parce qu’elle ne coûte pas assez cher', 'is_correct' => false],
                            ['choice_text' => 'Le résultat ne peut être évalué qu’à partir du budget', 'is_correct' => false],
                        ],
                        'explanation' => 'Atteindre l’objectif avec moins de ressources et peu d’effets comportementaux indésirables constitue généralement un bon signal d’efficience.',
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
                    'difficulty' => $quizData['difficulty'],
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

                // Mélange complet des objets de choix afin de conserver
                // is_correct attaché à la bonne réponse.
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
```
