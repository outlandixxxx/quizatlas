```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FiscalEconomicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'fiscal-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Multiplicateur budgétaire et demande globale',
                'questions' => [
                    [
                        'question' => 'Pourquoi le multiplicateur d’une dépense publique peut-il être supérieur à 1 dans un modèle simple ?',
                        'answers' => [
                            ['answer' => 'Une dépense initiale peut générer des revenus supplémentaires qui provoquent ensuite de nouvelles dépenses', 'iscorrect' => true],
                            ['answer' => 'Parce que les impôts disparaissent toujours', 'iscorrect' => false],
                            ['answer' => 'Parce que toute dépense publique est automatiquement exportée', 'iscorrect' => false],
                            ['answer' => 'Parce que la production reste toujours fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur fiscal est-il généralement différent du multiplicateur de dépense publique dans un modèle simple ?',
                        'answers' => [
                            ['answer' => 'Une variation d’impôt modifie le revenu disponible et la consommation indirectement, alors qu’une dépense publique entre directement dans la demande', 'iscorrect' => true],
                            ['answer' => 'Les impôts ne modifient jamais le revenu disponible', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques ne font jamais partie de la demande globale', 'iscorrect' => false],
                            ['answer' => 'Les deux multiplicateurs sont toujours identiques quelle que soit l’économie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la propension marginale à consommer influence-t-elle le multiplicateur ?',
                        'answers' => [
                            ['answer' => 'Plus une part importante du revenu supplémentaire est consommée, plus les effets induits des dépenses initiales sont importants', 'iscorrect' => true],
                            ['answer' => 'Elle détermine uniquement le taux de change', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet sur les dépenses induites', 'iscorrect' => false],
                            ['answer' => 'Une consommation marginale élevée réduit toujours le multiplicateur à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des importations peut-elle réduire un multiplicateur budgétaire dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Une partie de la demande supplémentaire se dirige vers des biens produits à l’étranger plutôt que vers la production domestique', 'iscorrect' => true],
                            ['answer' => 'Les importations augmentent automatiquement la production domestique dans le modèle simple', 'iscorrect' => false],
                            ['answer' => 'Les économies ouvertes n’ont jamais de multiplicateur', 'iscorrect' => false],
                            ['answer' => 'Les exportations diminuent toujours les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur peut-il être plus élevé pendant une récession ?',
                        'answers' => [
                            ['answer' => Une économie avec capacités inutilisées peut permettre à une hausse de la demande de se traduire davantage par une hausse de la production', 'iscorrect' => true],
                            ['answer' => 'Une économie en récession a toujours une inflation très élevée', 'iscorrect' => false],
                            ['answer' => 'Les entreprises réduisent toujours leur production lorsque la demande augmente', 'iscorrect' => false],
                            ['answer' => 'Le chômage élevé supprime toute consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur peut-il être plus faible lorsque l’économie est proche de sa capacité maximale ?',
                        'answers' => [
                            ['answer' => 'Une partie de la demande supplémentaire peut davantage se traduire par une hausse des prix lorsque la production est contrainte', 'iscorrect' => true],
                            ['answer' => 'La capacité productive devient infinie', 'iscorrect' => false],
                            ['answer' => 'Les prix deviennent nécessairement constants', 'iscorrect' => false],
                            ['answer' => 'La demande supplémentaire réduit toujours les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réaction de la politique monétaire influence-t-elle le multiplicateur budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une banque centrale peut modifier les taux en réponse à une expansion budgétaire, ce qui affecte le crédit, l’investissement et la demande', 'iscorrect' => true],
                            ['answer' => 'La politique monétaire n’a aucun lien avec la demande globale', 'iscorrect' => false],
                            ['answer' => 'Les taux d’intérêt restent toujours inchangés', 'iscorrect' => false],
                            ['answer' => 'La banque centrale finance directement chaque dépense publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur d’une réduction d’impôt dépend-il du comportement des ménages ?',
                        'answers' => [
                            ['answer' => Les ménages peuvent consommer, épargner ou utiliser le revenu supplémentaire pour réduire leurs dettes', 'iscorrect' => true],
                            ['answer' => 'Les ménages consomment toujours 100 % du revenu supplémentaire', 'iscorrect' => false],
                            ['answer' => 'Les impôts n’affectent jamais le revenu disponible', 'iscorrect' => false],
                            ['answer' => 'L’épargne est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations peuvent-elles réduire l’effet immédiat d’une relance budgétaire ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent anticiper de futurs impôts ou ajustements budgétaires et modifier leur consommation ou investissement', 'iscorrect' => true],
                            ['answer' => 'Les agents économiques ne forment jamais d’anticipations', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques ne sont jamais anticipées', 'iscorrect' => false],
                            ['answer' => 'Les impôts futurs n’ont jamais aucune importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il interpréter les multiplicateurs budgétaires avec prudence ?',
                        'answers' => [
                            ['answer' => 'Ils dépendent de la structure économique, du cycle, de la politique monétaire, de l’ouverture et des comportements des agents', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours identiques dans tous les pays', 'iscorrect' => false],
                            ['answer' => 'Ils ne dépendent jamais de la conjoncture', 'iscorrect' => false],
                            ['answer' => 'Un multiplicateur est toujours connu avec certitude avant toute politique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fiscalité et incidence économique',
                'questions' => [
                    [
                        'question' => 'Pourquoi la personne légalement chargée de verser un impôt ne supporte-t-elle pas nécessairement toute sa charge économique ?',
                        'answers' => [
                            ['answer' => 'Les prix et salaires peuvent s’ajuster et transférer une partie du coût vers d’autres agents', 'iscorrect' => true],
                            ['answer' => 'La charge fiscale est toujours exactement égale à l’obligation légale', 'iscorrect' => false],
                            ['answer' => 'Les marchés n’ajustent jamais les prix après une taxe', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne peuvent jamais être affectés indirectement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une demande relativement inélastique peut-elle conduire les consommateurs à supporter une plus grande part d’une taxe ?',
                        'answers' => [
                            ['answer' => 'Ils réduisent relativement peu leur quantité demandée lorsque le prix augmente', 'iscorrect' => true],
                            ['answer' => 'Ils arrêtent toujours immédiatement d’acheter', 'iscorrect' => false],
                            ['answer' => 'Une demande inélastique signifie que les prix ne changent jamais', 'iscorrect' => false],
                            ['answer' => 'L’inélasticité transfère automatiquement toute la taxe aux producteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une offre relativement inélastique peut-elle faire supporter une plus grande part de la taxe aux producteurs ?',
                        'answers' => [
                            ['answer' => 'Les producteurs ajustent relativement peu la quantité offerte lorsque le prix net change', 'iscorrect' => true],
                            ['answer' => 'Les producteurs peuvent toujours sortir instantanément du marché', 'iscorrect' => false],
                            ['answer' => 'Une offre inélastique signifie que la production est infinie', 'iscorrect' => false],
                            ['answer' => 'L’inélasticité signifie toujours que les consommateurs paient toute la taxe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taxes sur les activités très mobiles peuvent-elles être difficiles à collecter efficacement ?',
                        'answers' => [
                            ['answer' => 'Les contribuables peuvent déplacer leur activité, leur revenu ou leur base fiscale vers des juridictions moins taxées selon les possibilités', 'iscorrect' => true],
                            ['answer' => 'La mobilité élimine toujours toute fraude', 'iscorrect' => false],
                            ['answer' => 'Les activités mobiles sont toujours faciles à taxer', 'iscorrect' => false],
                            ['answer' => 'La base fiscale ne peut jamais changer de localisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’assiette fiscale est-elle importante pour l’efficacité d’un système fiscal ?',
                        'answers' => [
                            ['answer' => 'Une base large peut permettre de mobiliser davantage de recettes avec des taux relativement moins élevés ou moins distorsifs selon le contexte', 'iscorrect' => true],
                            ['answer' => 'Une base étroite garantit toujours une meilleure efficacité', 'iscorrect' => false],
                            ['answer' => 'L’assiette n’a aucun effet sur les recettes', 'iscorrect' => false],
                            ['answer' => 'La base fiscale ne peut jamais être élargie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exonérations fiscales peuvent-elles créer des distorsions ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent encourager certaines activités plutôt que d’autres et réduire la neutralité du système fiscal', 'iscorrect' => true],
                            ['answer' => 'Les exonérations n’affectent jamais les décisions économiques', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent toujours toutes les recettes publiques', 'iscorrect' => false],
                            ['answer' => 'Elles rendent automatiquement la fiscalité parfaitement neutre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe peut-elle réduire les échanges même si elle génère des recettes publiques ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre certaines transactions non rentables et créer une perte sèche en réduisant des échanges mutuellement avantageux', 'iscorrect' => true],
                            ['answer' => 'Une recette fiscale signifie toujours qu’aucune perte d’efficacité n’existe', 'iscorrect' => false],
                            ['answer' => 'Les taxes augmentent toujours les quantités échangées', 'iscorrect' => false],
                            ['answer' => 'La fiscalité ne modifie jamais les prix relatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la progressivité fiscale peut-elle influencer les incitations marginales ?',
                        'answers' => [
                            ['answer' => 'Un taux marginal élevé peut réduire le revenu supplémentaire conservé après une unité additionnelle de revenu', 'iscorrect' => true],
                            ['answer' => 'Le taux marginal n’a jamais de lien avec le revenu net', 'iscorrect' => false],
                            ['answer' => 'La progressivité rend toujours le revenu supplémentaire plus élevé', 'iscorrect' => false],
                            ['answer' => 'Les agents ignorent toujours les taux marginaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer taux moyen et taux marginal ?',
                        'answers' => [
                            ['answer' => 'Le taux moyen rapporte l’impôt total au revenu, tandis que le taux marginal concerne l’impôt appliqué à une unité supplémentaire de base imposable', 'iscorrect' => true],
                            ['answer' => 'Les deux taux mesurent exactement la même chose', 'iscorrect' => false],
                            ['answer' => 'Le taux marginal correspond toujours à l’impôt total payé', 'iscorrect' => false],
                            ['answer' => 'Le taux moyen ne dépend jamais du revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’élasticité de l’offre de travail est-elle importante pour analyser un impôt sur le revenu ?',
                        'answers' => [
                            ['answer' => 'Elle indique dans quelle mesure les décisions de travail peuvent réagir aux variations du salaire net', 'iscorrect' => true],
                            ['answer' => 'Elle mesure uniquement le taux d’intérêt', 'iscorrect' => false],
                            ['answer' => 'Elle est indépendante de toute fiscalité', 'iscorrect' => false],
                            ['answer' => 'Elle détermine automatiquement les recettes publiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dette publique et dynamique budgétaire',
                'questions' => [
                    [
                        'question' => 'Quelle différence fondamentale existe entre le déficit primaire et le déficit total ?',
                        'answers' => [
                            ['answer' => 'Le déficit primaire exclut les intérêts de la dette tandis que le déficit total les inclut', 'iscorrect' => true],
                            ['answer' => 'Le déficit primaire inclut uniquement les intérêts', 'iscorrect' => false],
                            ['answer' => 'Les deux notions sont exactement identiques', 'iscorrect' => false],
                            ['answer' => 'Le déficit total exclut toujours les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’intérêt réel est-il important pour la dynamique de la dette ?',
                        'answers' => [
                            ['answer' => 'Il influence le coût réel du financement public relativement à la croissance réelle de l’économie', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement le chômage', 'iscorrect' => false],
                            ['answer' => 'Il n’a aucun rapport avec le coût de la dette', 'iscorrect' => false],
                            ['answer' => 'Il est toujours égal à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance économique forte peut-elle stabiliser le ratio dette/PIB même avec un déficit primaire modéré ?',
                        'answers' => [
                            ['answer' => 'La croissance du PIB peut augmenter suffisamment le dénominateur pour limiter l’augmentation du ratio', 'iscorrect' => true],
                            ['answer' => 'La croissance augmente toujours la dette plus vite que le PIB', 'iscorrect' => false],
                            ['answer' => 'Le PIB n’a aucun effet sur le ratio dette/PIB', 'iscorrect' => false],
                            ['answer' => 'La croissance réduit automatiquement le stock nominal de dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la différence entre le taux d’intérêt et la croissance compte-t-elle pour la soutenabilité de la dette ?',
                        'answers' => [
                            ['answer' => 'Elle influence la vitesse à laquelle un stock de dette peut augmenter ou diminuer par rapport à la taille de l’économie', 'iscorrect' => true],
                            ['answer' => 'Elle ne concerne que les ménages', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet sur le ratio dette/PIB', 'iscorrect' => false],
                            ['answer' => 'Elle détermine directement le taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un excédent primaire peut-il contribuer à stabiliser la dette ?',
                        'answers' => [
                            ['answer' => 'Il permet de couvrir une partie des charges financières et réduit le besoin de nouvel endettement', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours la dette plus vite', 'iscorrect' => false],
                            ['answer' => 'Il signifie que les intérêts sont nuls', 'iscorrect' => false],
                            ['answer' => 'Il supprime automatiquement toute dette existante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux peut-elle rendre la dette publique plus difficile à gérer ?',
                        'answers' => [
                            ['answer' => 'Les nouvelles émissions et refinancements peuvent devenir plus coûteux', 'iscorrect' => true],
                            ['answer' => 'Les taux élevés réduisent toujours le coût de la dette', 'iscorrect' => false],
                            ['answer' => 'La dette publique est entièrement insensible aux taux', 'iscorrect' => false],
                            ['answer' => 'Les États ne refinancent jamais leur dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la maturité moyenne de la dette publique peut-elle jouer un rôle de protection ?',
                        'answers' => [
                            ['answer' => 'Une maturité plus longue peut ralentir la transmission immédiate d’une hausse des taux de marché au coût moyen de la dette', 'iscorrect' => true],
                            ['answer' => 'Une dette longue est toujours gratuite', 'iscorrect' => false],
                            ['answer' => 'La maturité n’affecte jamais le refinancement', 'iscorrect' => false],
                            ['answer' => 'Les dettes longues doivent être refinancées chaque jour', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc de croissance négatif peut-il détériorer la dynamique de dette ?',
                        'answers' => [
                            ['answer' => 'Il peut réduire les recettes fiscales, augmenter certaines dépenses et ralentir la croissance du PIB', 'iscorrect' => true],
                            ['answer' => 'Une récession augmente toujours les recettes publiques', 'iscorrect' => false],
                            ['answer' => 'Le PIB n’a aucun lien avec les recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Les dépenses sociales diminuent toujours pendant une récession', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc d’inflation peut-il avoir un effet différent selon la composition de la dette ?',
                        'answers' => [
                            ['answer' => 'Une dette nominale à taux fixe peut perdre de la valeur réelle, tandis qu’une dette indexée sur les prix réagit différemment', 'iscorrect' => true],
                            ['answer' => 'Toute dette augmente toujours en valeur réelle avec l’inflation', 'iscorrect' => false],
                            ['answer' => 'L’indexation n’a aucun effet', 'iscorrect' => false],
                            ['answer' => 'La composition de la dette est sans importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité budgétaire influence-t-elle le coût de financement d’un État ?',
                        'answers' => [
                            ['answer' => 'Une politique jugée soutenable peut réduire les primes de risque demandées par les investisseurs', 'iscorrect' => true],
                            ['answer' => 'La crédibilité augmente toujours les primes de risque', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent toujours la soutenabilité budgétaire', 'iscorrect' => false],
                            ['answer' => 'Le coût de financement ne dépend jamais du risque souverain', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Stabilisateurs automatiques et politique discrétionnaire',
                'questions' => [
                    [
                        'question' => 'Quelle est la principale différence entre stabilisateur automatique et politique discrétionnaire ?',
                        'answers' => [
                            ['answer' => 'Le stabilisateur automatique fonctionne sans nouvelle décision politique tandis que la politique discrétionnaire nécessite une intervention explicite', 'iscorrect' => true],
                            ['answer' => 'La politique discrétionnaire est toujours automatique', 'iscorrect' => false],
                            ['answer' => 'Les stabilisateurs automatiques nécessitent toujours une nouvelle loi chaque mois', 'iscorrect' => false],
                            ['answer' => 'Les deux mécanismes sont identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les impôts progressifs peuvent-ils stabiliser automatiquement l’économie ?',
                        'answers' => [
                            ['answer' => 'Les recettes fiscales baissent plus fortement lorsque les revenus diminuent, soutenant ainsi une partie du revenu disponible', 'iscorrect' => true],
                            ['answer' => 'Les impôts progressifs augmentent toujours pendant une récession', 'iscorrect' => false],
                            ['answer' => 'Ils réduisent automatiquement les dépenses privées à chaque choc', 'iscorrect' => false],
                            ['answer' => 'Ils n’ont aucun effet sur le revenu disponible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les allocations de chômage fonctionnent-elles comme stabilisateur ?',
                        'answers' => [
                            ['answer' => 'Elles soutiennent automatiquement une partie des revenus lorsque le chômage augmente', 'iscorrect' => true],
                            ['answer' => 'Elles réduisent toujours les revenus pendant les récessions', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent les impôts en période de crise', 'iscorrect' => false],
                            ['answer' => 'Elles sont toujours financées par une baisse du PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage important les stabilisateurs automatiques ont-ils par rapport à une relance discrétionnaire ?',
                        'answers' => [
                            ['answer' => 'Ils réagissent rapidement aux variations de l’activité sans attendre la conception et l’adoption d’une nouvelle mesure', 'iscorrect' => true],
                            ['answer' => 'Ils permettent de choisir chaque dépense individuellement après chaque choc', 'iscorrect' => false],
                            ['answer' => 'Ils nécessitent toujours davantage de temps administratif', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment tous les déficits en période de récession', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques peuvent-ils augmenter le déficit pendant une récession ?',
                        'answers' => [
                            ['answer' => 'Les recettes diminuent tandis que certaines dépenses liées au soutien du revenu augmentent', 'iscorrect' => true],
                            ['answer' => 'Les recettes fiscales augmentent toujours pendant les récessions', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques deviennent nulles', 'iscorrect' => false],
                            ['answer' => 'Les stabilisateurs automatiques réduisent toujours les déficits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’effet stabilisateur dépend-il de la structure fiscale et sociale ?',
                        'answers' => [
                            ['answer' => 'Les systèmes avec des impôts et transferts plus sensibles au cycle réagissent davantage automatiquement', 'iscorrect' => true],
                            ['answer' => 'Tous les systèmes ont exactement les mêmes stabilisateurs', 'iscorrect' => false],
                            ['answer' => 'La structure fiscale n’a aucun lien avec la stabilisation', 'iscorrect' => false],
                            ['answer' => 'Les transferts sont identiques dans tous les pays', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relance discrétionnaire peut-elle être utile malgré l’existence de stabilisateurs automatiques ?',
                        'answers' => [
                            ['answer' => 'Un choc exceptionnel peut nécessiter un soutien supplémentaire que les mécanismes automatiques ne fournissent pas suffisamment', 'iscorrect' => true],
                            ['answer' => 'Les stabilisateurs automatiques rendent toute décision publique inutile', 'iscorrect' => false],
                            ['answer' => 'Une récession ne nécessite jamais de réponse budgétaire', 'iscorrect' => false],
                            ['answer' => 'Les politiques discrétionnaires sont toujours supérieures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique discrétionnaire peut-elle être retardée ?',
                        'answers' => [
                            ['answer' => 'Elle nécessite souvent un diagnostic, une décision politique, une procédure législative et une mise en œuvre administrative', 'iscorrect' => true],
                            ['answer' => 'Les décisions publiques sont toujours instantanées', 'iscorrect' => false],
                            ['answer' => 'Les budgets ne nécessitent aucune procédure', 'iscorrect' => false],
                            ['answer' => 'Les programmes publics se mettent automatiquement en place', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques peuvent-ils limiter une chute de la consommation ?',
                        'answers' => [
                            ['answer' => 'Ils soutiennent le revenu disponible de certains ménages lorsque l’activité et les revenus diminuent', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent toujours les revenus réels pendant les booms', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute baisse de l’emploi', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent une croissance positive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques ne garantissent-ils pas l’absence de récession ?',
                        'answers' => [
                            ['answer' => 'Ils amortissent les fluctuations mais ne suppriment pas nécessairement les chocs qui affectent la demande ou l’offre', 'iscorrect' => true],
                            ['answer' => 'Ils rendent toute croissance impossible', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent toujours tous les chocs', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent automatiquement le plein emploi', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fiscalité, efficacité et perte sèche',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une perte sèche liée à une taxe ?',
                        'answers' => [
                            ['answer' => 'Une perte de surplus total provenant de transactions ou décisions économiques qui ne se réalisent plus à cause de la distorsion fiscale', 'iscorrect' => true],
                            ['answer' => 'Une recette versée au gouvernement', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique du surplus du consommateur', 'iscorrect' => false],
                            ['answer' => 'Une augmentation du PIB par définition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la perte sèche augmente-t-elle généralement avec une taxe plus élevée dans un modèle standard ?',
                        'answers' => [
                            ['answer' => 'Une taxe plus élevée crée généralement une distorsion plus importante des quantités échangées', 'iscorrect' => true],
                            ['answer' => 'Une taxe plus élevée rend toujours les échanges plus efficaces', 'iscorrect' => false],
                            ['answer' => 'Les taxes élevées ne changent jamais les quantités', 'iscorrect' => false],
                            ['answer' => 'La perte sèche est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taxes sur des activités générant une externalité négative peuvent-elles être moins inefficaces qu’une taxe sur une activité sans externalité ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent corriger une défaillance de marché en faisant prendre en compte une partie du coût social', 'iscorrect' => true],
                            ['answer' => 'Elles ne génèrent jamais de recettes', 'iscorrect' => false],
                            ['answer' => 'Elles rendent toujours la production nulle', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment automatiquement toute perte sèche', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la neutralité fiscale est-elle parfois recherchée ?',
                        'answers' => [
                            ['answer' => 'Un système fiscal neutre cherche à perturber le moins possible les choix économiques lorsque aucune correction particulière n’est nécessaire', 'iscorrect' => true],
                            ['answer' => 'La neutralité signifie qu’aucun impôt ne doit exister', 'iscorrect' => false],
                            ['answer' => 'La neutralité implique toujours une fiscalité identique pour tous', 'iscorrect' => false],
                            ['answer' => 'La neutralité interdit toute redistribution', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe uniforme peut-elle être préférable à de nombreuses exonérations dans certaines situations ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire les possibilités d’arbitrage fiscal et traiter plus uniformément des activités comparables', 'iscorrect' => true],
                            ['answer' => 'Les exonérations rendent toujours le système plus simple', 'iscorrect' => false],
                            ['answer' => 'Une taxe uniforme interdit toute redistribution', 'iscorrect' => false],
                            ['answer' => 'Les taux uniformes augmentent nécessairement toutes les distorsions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les impôts peuvent-ils affecter les décisions d’épargne ?',
                        'answers' => [
                            ['answer' => 'Ils modifient le rendement après impôt des revenus d’épargne ou des actifs financiers selon leur structure', 'iscorrect' => true],
                            ['answer' => 'L’épargne ne dépend jamais du rendement', 'iscorrect' => false],
                            ['answer' => 'Les impôts augmentent toujours le rendement net', 'iscorrect' => false],
                            ['answer' => 'Les ménages ne réagissent jamais aux rendements après impôt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taxes sur le patrimoine peuvent-elles avoir des effets économiques différents des taxes sur le revenu ?',
                        'answers' => [
                            ['answer' => 'Elles frappent une base différente et peuvent influencer différemment l’accumulation d’actifs, la consommation ou l’épargne', 'iscorrect' => true],
                            ['answer' => 'Les deux taxes ont toujours exactement les mêmes effets', 'iscorrect' => false],
                            ['answer' => 'Le patrimoine et le revenu sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur le patrimoine ne peut jamais modifier les comportements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets d’une hausse d’impôt peuvent-ils différer à court et long terme ?',
                        'answers' => [
                            ['answer' => Les agents peuvent ajuster progressivement leur offre de travail, leur investissement, leur épargne et leur localisation', 'iscorrect' => true],
                            ['answer' => 'Les comportements sont toujours instantanément et complètement fixes', 'iscorrect' => false],
                            ['answer' => 'Les impôts n’ont des effets qu’à court terme', 'iscorrect' => false],
                            ['answer' => 'Les décisions économiques ne changent jamais dans le temps', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’optimisation fiscale peut-elle réduire les recettes publiques sans nécessairement modifier le revenu avant impôt ?',
                        'answers' => [
                            ['answer' => Les agents peuvent modifier la forme, le calendrier ou la localisation de certaines activités afin de réduire leur base imposable', 'iscorrect' => true],
                            ['answer' => 'Les agents ne peuvent jamais réagir à la fiscalité', 'iscorrect' => false],
                            ['answer' => 'Le revenu avant impôt est toujours détruit par la fiscalité', 'iscorrect' => false],
                            ['answer' => 'L’optimisation fiscale augmente toujours les recettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer optimisation et fraude fiscale ?',
                        'answers' => [
                            ['answer' => 'L’optimisation utilise des choix autorisés par les règles, tandis que la fraude consiste à violer délibérément les obligations fiscales', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont juridiquement toujours identiques', 'iscorrect' => false],
                            ['answer' => 'La fraude est toujours légale', 'iscorrect' => false],
                            ['answer' => 'L’optimisation implique nécessairement une violation de la loi', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique budgétaire et croissance',
                'questions' => [
                    [
                        'question' => Pourquoi la composition des dépenses publiques compte-t-elle pour la croissance de long terme ?',
                        'answers' => [
                            ['answer' => 'Les dépenses d’éducation, d’infrastructure, de santé ou de recherche peuvent avoir des effets différents sur la productivité future', 'iscorrect' => true],
                            ['answer' => 'Toutes les dépenses publiques ont toujours exactement le même effet', 'iscorrect' => false],
                            ['answer' => 'La composition du budget n’a aucun rôle', 'iscorrect' => false],
                            ['answer' => 'Les dépenses d’investissement ont toujours un effet négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investissement public peut-il avoir un effet de productivité sur le secteur privé ?',
                        'answers' => [
                            ['answer' => 'Des infrastructures ou services publics de qualité peuvent réduire certains coûts privés et améliorer l’efficacité de production', 'iscorrect' => true],
                            ['answer' => 'L’investissement public remplace toujours les entreprises privées', 'iscorrect' => false],
                            ['answer' => 'Les infrastructures n’ont aucun effet sur les coûts', 'iscorrect' => false],
                            ['answer' => 'La productivité privée est indépendante de tout environnement public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une fiscalité trop orientée vers les activités productives peut-elle réduire la croissance potentielle ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire certains incitations à travailler, investir, innover ou entreprendre', 'iscorrect' => true],
                            ['answer' => 'Une fiscalité élevée augmente toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ignorent toujours les coûts après impôt', 'iscorrect' => false],
                            ['answer' => 'La fiscalité ne modifie jamais le comportement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les dépenses publiques de recherche fondamentale peuvent-elles être justifiées économiquement ?',
                        'answers' => [
                            ['answer' => 'Les connaissances produites peuvent générer des bénéfices pour de nombreux agents que le financeur initial ne peut pas entièrement capter', 'iscorrect' => true],
                            ['answer' => 'La recherche fondamentale n’a jamais de retombées économiques', 'iscorrect' => false],
                            ['answer' => 'Les entreprises peuvent toujours capter tous les bénéfices sociaux', 'iscorrect' => false],
                            ['answer' => 'L’innovation ne dépend jamais de nouvelles connaissances', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une dette publique finançant une infrastructure productive peut-elle être plus soutenable qu’une dette finançant une dépense sans rendement durable ?',
                        'answers' => [
                            ['answer' => 'L’investissement peut augmenter la capacité productive future et donc contribuer aux revenus permettant de supporter la dette', 'iscorrect' => true],
                            ['answer' => 'Toute dette d’investissement est automatiquement soutenable', 'iscorrect' => false],
                            ['answer' => 'Les infrastructures ne génèrent jamais de bénéfices', 'iscorrect' => false],
                            ['answer' => 'Les dépenses courantes sont toujours plus productives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la qualité de la dépense publique est-elle aussi importante que son montant ?',
                        'answers' => [
                            ['answer' => 'Une dépense plus élevée ne garantit pas un meilleur résultat si les ressources sont mal allouées ou peu efficaces', 'iscorrect' => true],
                            ['answer' => 'Toute augmentation du budget améliore automatiquement les résultats', 'iscorrect' => false],
                            ['answer' => 'L’efficacité n’a aucun lien avec les ressources publiques', 'iscorrect' => false],
                            ['answer' => 'Les dépenses inefficaces augmentent toujours la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la stabilité macroéconomique peut-elle soutenir l’investissement privé ?',
                        'answers' => [
                            ['answer' => 'Une inflation, une dette et une politique fiscale plus prévisibles peuvent réduire certaines incertitudes sur les rendements futurs', 'iscorrect' => true],
                            ['answer' => 'Une forte instabilité réduit toujours le risque pour les investisseurs', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent toujours les finances publiques', 'iscorrect' => false],
                            ['answer' => 'La stabilité n’a aucun effet sur les décisions privées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les politiques fiscales peuvent-elles affecter l’entrepreneuriat ?',
                        'answers' => [
                            ['answer' => 'Les impôts sur les bénéfices et revenus peuvent modifier le rendement après impôt d’une activité entrepreneuriale', 'iscorrect' => true],
                            ['answer' => 'Les entrepreneurs ne tiennent jamais compte de leur revenu net', 'iscorrect' => false],
                            ['answer' => 'La fiscalité n’affecte jamais la rentabilité', 'iscorrect' => false],
                            ['answer' => 'Les politiques fiscales déterminent directement les idées entrepreneuriales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la politique budgétaire doit-elle considérer les effets de long terme des mesures temporaires ?',
                        'answers' => [
                            ['answer' => Une mesure temporaire peut modifier durablement le comportement, la dette, l’investissement ou la structure des dépenses', 'iscorrect' => true],
                            ['answer' => 'Une mesure temporaire n’a jamais d’effet futur', 'iscorrect' => false],
                            ['answer' => 'La dette créée temporairement disparaît toujours immédiatement', 'iscorrect' => false],
                            ['answer' => 'Les agents oublient toujours les changements fiscaux passés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’évaluation des politiques publiques doit-elle comparer les résultats à un scénario contrefactuel ?',
                        'answers' => [
                            ['answer' => 'Pour déterminer ce qui se serait produit en l’absence de la politique et mieux isoler son effet', 'iscorrect' => true],
                            ['answer' => 'Parce que le scénario contrefactuel est toujours directement observable', 'iscorrect' => false],
                            ['answer' => 'Pour garantir que la politique est efficace', 'iscorrect' => false],
                            ['answer' => 'Parce que les données observées sont toujours inutiles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion budgétaire et soutenabilité',
                'questions' => [
                    [
                        'question' => Pourquoi un gouvernement doit-il surveiller la maturité de sa dette ?',
                        'answers' => [
                            ['answer' => 'La structure des échéances détermine la quantité de dette à refinancer dans les différentes périodes', 'iscorrect' => true],
                            ['answer' => 'La maturité n’a aucun effet sur le risque de refinancement', 'iscorrect' => false],
                            ['answer' => 'Toutes les dettes publiques arrivent à échéance simultanément', 'iscorrect' => false],
                            ['answer' => 'La maturité détermine uniquement les recettes fiscales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le risque de refinancement est-il important pour les finances publiques ?',
                        'answers' => [
                            ['answer' => 'Un État doit remplacer les titres arrivant à échéance et peut subir des conditions de marché beaucoup plus coûteuses', 'iscorrect' => true],
                            ['answer' => 'Un État n’a jamais besoin de refinancer sa dette', 'iscorrect' => false],
                            ['answer' => 'Les taux futurs sont toujours identiques aux taux actuels', 'iscorrect' => false],
                            ['answer' => 'Le refinancement ne dépend jamais de la confiance des investisseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la diversification des maturités peut-elle réduire certains risques budgétaires ?',
                        'answers' => [
                            ['answer' => 'Elle évite qu’une trop grande partie de la dette doive être refinancée en même temps', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toute dette', 'iscorrect' => false],
                            ['answer' => 'Elle garantit un taux d’intérêt fixe pour toujours', 'iscorrect' => false],
                            ['answer' => 'Elle rend les marchés financiers inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la dette libellée en monnaie étrangère peut-elle augmenter le risque budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une dépréciation de la monnaie nationale peut augmenter la valeur de la dette étrangère en monnaie domestique', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation réduit toujours la dette extérieure', 'iscorrect' => false],
                            ['answer' => 'La devise de la dette n’a aucun effet', 'iscorrect' => false],
                            ['answer' => 'Les taux de change ne concernent jamais les États', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les recettes fiscales peuvent-elles être cycliques ?',
                        'answers' => [
                            ['answer' => 'Elles évoluent avec les revenus, bénéfices, dépenses et transactions qui varient eux-mêmes avec le cycle économique', 'iscorrect' => true],
                            ['answer' => 'Les recettes fiscales restent toujours constantes', 'iscorrect' => false],
                            ['answer' => 'Les recettes sont indépendantes de l’activité économique', 'iscorrect' => false],
                            ['answer' => 'Les bénéfices des entreprises ne varient jamais avec la conjoncture', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un budget structurel est-il utile à côté du solde budgétaire observé ?',
                        'answers' => [
                            ['answer' => 'Il cherche à distinguer la composante liée au cycle économique des déséquilibres plus structurels selon la méthode utilisée', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement la dette brute', 'iscorrect' => false],
                            ['answer' => 'Il ignore totalement la conjoncture', 'iscorrect' => false],
                            ['answer' => 'Le solde structurel et observé sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un déficit peut-il être acceptable pendant une récession mais moins approprié en période de forte demande ?',
                        'answers' => [
                            ['answer' => 'L’espace budgétaire et les effets macroéconomiques d’une dépense supplémentaire dépendent de la conjoncture', 'iscorrect' => true],
                            ['answer' => 'Les effets budgétaires sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Une récession implique toujours un excédent budgétaire', 'iscorrect' => false],
                            ['answer' => 'Une forte demande réduit toujours l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une règle budgétaire peut-elle améliorer la crédibilité des finances publiques ?',
                        'answers' => [
                            ['answer' => 'Elle fournit un cadre prévisible pour limiter certains déséquilibres et renforcer la discipline budgétaire', 'iscorrect' => true],
                            ['answer' => 'Elle garantit que les règles ne seront jamais modifiées', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute nécessité d’analyse économique', 'iscorrect' => false],
                            ['answer' => 'Elle garantit automatiquement une dette nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une règle budgétaire trop rigide peut-elle poser problème ?',
                        'answers' => [
                            ['answer' => 'Elle peut limiter la capacité de réaction face à des chocs exceptionnels ou entraîner des ajustements procycliques', 'iscorrect' => true],
                            ['answer' => 'Une règle rigide augmente toujours la flexibilité', 'iscorrect' => false],
                            ['answer' => 'Les chocs exceptionnels n’existent jamais', 'iscorrect' => false],
                            ['answer' => 'Les règles rigides éliminent automatiquement tous les déficits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la soutenabilité budgétaire ne dépend-elle pas uniquement du niveau actuel de dette ?',
                        'answers' => [
                            ['answer' => 'Elle dépend aussi des taux d’intérêt, de la croissance, des soldes futurs, de la structure de la dette et des perspectives économiques', 'iscorrect' => true],
                            ['answer' => 'La dette actuelle suffit toujours à déterminer la soutenabilité', 'iscorrect' => false],
                            ['answer' => 'Les taux d’intérêt n’ont aucun rôle', 'iscorrect' => false],
                            ['answer' => 'La croissance future n’a aucune importance', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Intermediate',
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
