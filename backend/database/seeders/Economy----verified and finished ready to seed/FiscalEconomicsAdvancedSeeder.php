```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FiscalEconomicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'fiscal-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Multiplicateur fiscal et stabilisation macroéconomique',
                'questions' => [
                    [
                        'question' => 'Pourquoi le multiplicateur des dépenses publiques peut-il être supérieur au multiplicateur d\\'une baisse d\\'impôt dans un modèle keynésien simple ?',
                        'answers' => [
                            ['answer' => 'La dépense publique entre directement dans la demande alors qu\\'une baisse d\\'impôt agit d\\'abord sur le revenu disponible et une partie peut être épargnée', 'iscorrect' => true],
                            ['answer' => 'Les ménages consomment toujours moins lorsque les impôts diminuent', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques ne font jamais partie de la demande globale', 'iscorrect' => false],
                            ['answer' => 'Les impôts sont toujours entièrement épargnés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur fiscal peut-il être plus faible lorsque la propension marginale à épargner est élevée ?',
                        'answers' => [
                            ['answer' => 'Une plus grande part du revenu supplémentaire ne revient pas immédiatement dans le circuit des dépenses', 'iscorrect' => true],
                            ['answer' => 'Une épargne plus élevée augmente nécessairement la consommation immédiate', 'iscorrect' => false],
                            ['answer' => 'L\\'épargne n\\'a aucun effet sur les dépenses induites', 'iscorrect' => false],
                            ['answer' => 'Une forte épargne supprime les recettes fiscales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur budgétaire dépend-il de la situation monétaire ?',
                        'answers' => [
                            ['answer' => 'Une réaction de la banque centrale sur les taux peut modifier l\\'effet de la relance sur le crédit, l\\'investissement et la demande', 'iscorrect' => true],
                            ['answer' => 'La politique monétaire et la politique budgétaire sont toujours indépendantes', 'iscorrect' => false],
                            ['answer' => 'Les taux d\\'intérêt n\\'affectent jamais les dépenses privées', 'iscorrect' => false],
                            ['answer' => 'La banque centrale finance automatiquement toutes les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relance budgétaire peut-elle produire un multiplicateur plus élevé en période de sous-utilisation des capacités ?',
                        'answers' => [
                            ['answer' => 'La production peut augmenter davantage sans provoquer immédiatement de fortes tensions inflationnistes', 'iscorrect' => true],
                            ['answer' => 'Les capacités inutilisées réduisent toujours la production', 'iscorrect' => false],
                            ['answer' => 'Une récession implique toujours une inflation élevée', 'iscorrect' => false],
                            ['answer' => 'Les entreprises cessent d\\'augmenter leur production lorsque la demande progresse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les importations réduisent-elles généralement le multiplicateur dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Une partie de la demande supplémentaire se dirige vers la production étrangère', 'iscorrect' => true],
                            ['answer' => 'Les importations augmentent toujours la production domestique', 'iscorrect' => false],
                            ['answer' => 'Une économie ouverte n\\'a aucun multiplicateur', 'iscorrect' => false],
                            ['answer' => 'Les exportations disparaissent nécessairement lorsque les importations augmentent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations concernant de futurs impôts peuvent-elles réduire l\\'effet d\\'une relance temporaire ?',
                        'answers' => [
                            ['answer' => 'Les ménages peuvent épargner une partie du revenu supplémentaire s\\'ils anticipent un alourdissement fiscal futur', 'iscorrect' => true],
                            ['answer' => 'Les ménages ignorent toujours les politiques futures', 'iscorrect' => false],
                            ['answer' => 'Les impôts futurs augmentent automatiquement la consommation présente', 'iscorrect' => false],
                            ['answer' => 'Les anticipations fiscales n\\'ont jamais d\\'effet sur l\\'épargne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relance budgétaire peut-elle avoir des effets inflationnistes plus importants lorsque l\\'écart de production est faible ?',
                        'answers' => [
                            ['answer' => 'Les contraintes de capacité limitent davantage la réponse de la production réelle', 'iscorrect' => true],
                            ['answer' => 'Une économie proche du plein emploi possède toujours une offre parfaitement élastique', 'iscorrect' => false],
                            ['answer' => 'Les prix deviennent nécessairement fixes', 'iscorrect' => false],
                            ['answer' => 'La demande supplémentaire réduit toujours les tensions sur les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les transferts ciblés peuvent-ils avoir un multiplicateur différent des réductions d\\'impôts généralisées ?',
                        'answers' => [
                            ['answer' => 'Les bénéficiaires peuvent avoir des propensions marginales à consommer différentes selon leurs contraintes de revenu et de liquidité', 'iscorrect' => true],
                            ['answer' => 'Tous les ménages ont nécessairement la même propension à consommer', 'iscorrect' => false],
                            ['answer' => 'Les transferts ne modifient jamais le revenu disponible', 'iscorrect' => false],
                            ['answer' => 'Les réductions d\\'impôts sont toujours entièrement consommées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur budgétaire peut-il être négatif dans certaines circonstances ?',
                        'answers' => [
                            ['answer' => 'Une consolidation très forte peut réduire la demande et l\\'activité, notamment lorsque ses effets dominent les autres mécanismes', 'iscorrect' => true],
                            ['answer' => 'Une hausse d\\'impôts augmente toujours le PIB à court terme', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques réduisent toujours la demande', 'iscorrect' => false],
                            ['answer' => 'Le signe du multiplicateur ne dépend jamais de la mesure utilisée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer le multiplicateur annoncé du multiplicateur effectivement observé ?',
                        'answers' => [
                            ['answer' => 'Les effets réalisés dépendent de la mise en œuvre, de la conjoncture, des comportements et des réactions monétaires ou financières', 'iscorrect' => true],
                            ['answer' => 'Les mesures budgétaires ont toujours exactement l\\'effet prévu', 'iscorrect' => false],
                            ['answer' => 'Les réactions des agents sont toujours nulles', 'iscorrect' => false],
                            ['answer' => 'La politique monétaire ne peut jamais modifier un multiplicateur', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fiscalité optimale et arbitrage efficacité-équité',
                'questions' => [
                    [
                        'question' => 'Quel est l\\'objectif général d\\'une fiscalité optimale dans l\\'analyse économique ?',
                        'answers' => [
                            ['answer' => 'Choisir une structure fiscale conciliant autant que possible recettes, équité et efficacité compte tenu des contraintes économiques', 'iscorrect' => true],
                            ['answer' => 'Maximiser chaque taux d\\'imposition sans tenir compte des comportements', 'iscorrect' => false],
                            ['answer' => 'Supprimer entièrement les impôts sur toutes les bases', 'iscorrect' => false],
                            ['answer' => 'Maximiser uniquement les recettes sans considération de bien-être', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une base fiscale très élastique peut-elle être difficile à taxer fortement ?',
                        'answers' => [
                            ['answer' => 'Les contribuables peuvent modifier davantage leur comportement, leur offre ou leur localisation lorsque le taux augmente', 'iscorrect' => true],
                            ['answer' => 'Une base élastique ne réagit jamais aux taxes', 'iscorrect' => false],
                            ['answer' => 'Une base élastique garantit toujours des recettes plus élevées', 'iscorrect' => false],
                            ['answer' => 'L\\'élasticité n\\'a aucun lien avec l\\'incidence fiscale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux marginal est-il particulièrement important pour les décisions économiques ?',
                        'answers' => [
                            ['answer' => 'Il détermine la part du revenu supplémentaire conservée après impôt et influence donc certaines décisions à la marge', 'iscorrect' => true],
                            ['answer' => 'Il correspond toujours à l\\'impôt total moyen payé', 'iscorrect' => false],
                            ['answer' => 'Il ne concerne que les recettes publiques', 'iscorrect' => false],
                            ['answer' => 'Il est sans relation avec le revenu net', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe peut-elle être plus distorsive lorsqu\\'elle frappe une activité très élastique ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent fortement réduire ou déplacer cette activité en réponse au prix net modifié par la taxe', 'iscorrect' => true],
                            ['answer' => 'Une activité très élastique ne change jamais avec les prix', 'iscorrect' => false],
                            ['answer' => 'L\\'élasticité élevée garantit toujours une recette fiscale maximale', 'iscorrect' => false],
                            ['answer' => 'Les agents ne réagissent jamais aux incitations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système fiscal peut-il utiliser simultanément plusieurs types d\\'impôts ?',
                        'answers' => [
                            ['answer' => 'Les différentes bases fiscales offrent des compromis distincts entre recettes, redistribution, efficacité et stabilité', 'iscorrect' => true],
                            ['answer' => 'Tous les impôts ont nécessairement les mêmes effets', 'iscorrect' => false],
                            ['answer' => 'Un seul impôt suffit toujours dans toute économie', 'iscorrect' => false],
                            ['answer' => 'La diversification des recettes est toujours inefficace', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taxes sur la consommation peuvent-elles être considérées comme moins distorsives que certaines taxes sur le revenu dans certains modèles ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent moins réduire certaines incitations à travailler ou investir selon leur conception, tout en ayant leurs propres effets distributifs', 'iscorrect' => true],
                            ['answer' => 'Les taxes sur la consommation n\\'affectent jamais les comportements', 'iscorrect' => false],
                            ['answer' => 'Les taxes sur le revenu ne produisent aucune distorsion', 'iscorrect' => false],
                            ['answer' => 'Les deux types de taxes sont toujours économiquement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'imposition du capital pose-t-elle des difficultés particulières dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Le capital peut être relativement mobile et réagir aux différences internationales de fiscalité et de rendement', 'iscorrect' => true],
                            ['answer' => 'Le capital ne peut jamais se déplacer entre pays', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent toujours la fiscalité', 'iscorrect' => false],
                            ['answer' => 'La mobilité du capital rend toute taxe automatiquement plus rentable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses fiscales peuvent-elles masquer le véritable coût d\\'une politique publique ?',
                        'answers' => [
                            ['answer' => 'Une exonération ou un crédit d\\'impôt réduit les recettes sans apparaître nécessairement comme une dépense budgétaire classique', 'iscorrect' => true],
                            ['answer' => 'Les dépenses fiscales augmentent toujours les recettes', 'iscorrect' => false],
                            ['answer' => 'Les avantages fiscaux sont toujours sans coût pour le budget', 'iscorrect' => false],
                            ['answer' => 'Les exonérations sont comptabilisées comme des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'élargissement de l\\'assiette peut-il être préféré à l\\'augmentation très forte d\\'un taux ?',
                        'answers' => [
                            ['answer' => 'Une base plus large permet parfois de lever davantage de recettes avec des taux marginaux moins distorsifs', 'iscorrect' => true],
                            ['answer' => 'Une base étroite est toujours plus efficace', 'iscorrect' => false],
                            ['answer' => 'Une assiette large réduit nécessairement toutes les recettes', 'iscorrect' => false],
                            ['answer' => 'Les taux élevés n\\'affectent jamais les comportements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'équité horizontale est-elle une préoccupation fiscale ?',
                        'answers' => [
                            ['answer' => 'Des contribuables ayant une capacité contributive comparable devraient, selon ce principe, être traités de manière comparable', 'iscorrect' => true],
                            ['answer' => 'Elle signifie que tous les contribuables paient exactement le même montant', 'iscorrect' => false],
                            ['answer' => 'Elle implique toujours une taxation progressive', 'iscorrect' => false],
                            ['answer' => 'Elle concerne uniquement les entreprises', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Incidence fiscale et comportement des marchés',
                'questions' => [
                    [
                        'question' => 'Pourquoi l\\'incidence légale d\\'un impôt peut-elle différer de son incidence économique ?',
                        'answers' => [
                            ['answer' => 'Les prix et quantités s\\'ajustent et redistribuent le coût économique entre acheteurs et vendeurs', 'iscorrect' => true],
                            ['answer' => 'La personne qui verse légalement la taxe supporte toujours 100 % du coût', 'iscorrect' => false],
                            ['answer' => 'Les marchés ne réagissent jamais à la fiscalité', 'iscorrect' => false],
                            ['answer' => 'Les taxes n\\'affectent jamais les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un marché concurrentiel, qui supporte davantage une taxe lorsque la demande est relativement inélastique ?',
                        'answers' => [
                            ['answer' => 'Les consommateurs supportent généralement une part plus importante de la charge via un prix plus élevé', 'iscorrect' => true],
                            ['answer' => 'Les producteurs supportent toujours la totalité de la taxe', 'iscorrect' => false],
                            ['answer' => 'Le gouvernement supporte la charge économique', 'iscorrect' => false],
                            ['answer' => 'Personne ne supporte la taxe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une offre parfaitement inélastique peut-elle conduire les producteurs à supporter une grande partie d\\'une taxe ?',
                        'answers' => [
                            ['answer' => 'La quantité offerte ne peut pas être ajustée facilement et le prix reçu peut diminuer fortement', 'iscorrect' => true],
                            ['answer' => 'Les producteurs peuvent toujours quitter instantanément le marché', 'iscorrect' => false],
                            ['answer' => 'L\\'offre inélastique signifie que les producteurs contrôlent toute la demande', 'iscorrect' => false],
                            ['answer' => 'La quantité offerte augmente automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe spécifique peut-elle modifier différemment les prix relatifs selon les biens ?',
                        'answers' => [
                            ['answer' => 'Elle ajoute un coût différent en proportion du prix lorsque les biens ont des valeurs unitaires différentes', 'iscorrect' => true],
                            ['answer' => 'Une taxe spécifique est toujours proportionnelle au prix', 'iscorrect' => false],
                            ['answer' => 'Les taxes spécifiques sont identiques aux taxes ad valorem dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Les prix relatifs ne changent jamais après une taxe spécifique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe peut-elle entraîner une perte sèche plus importante lorsque les courbes d\\'offre et de demande sont très élastiques ?',
                        'answers' => [
                            ['answer' => 'Les quantités échangées réagissent davantage au prix fiscalement augmenté, réduisant davantage les échanges mutuellement bénéfiques', 'iscorrect' => true],
                            ['answer' => 'Une forte élasticité empêche toute modification de quantité', 'iscorrect' => false],
                            ['answer' => 'La perte sèche est toujours indépendante des élasticités', 'iscorrect' => false],
                            ['answer' => 'Une offre élastique garantit que toutes les transactions continueront', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taxes sur le logement peuvent-elles avoir une incidence complexe ?',
                        'answers' => [
                            ['answer' => La mobilité du capital, de l\\'offre foncière et des ménages influence la façon dont la taxe est capitalisée dans les prix et loyers', 'iscorrect' => true],
                            ['answer' => 'Le logement est toujours parfaitement mobile', 'iscorrect' => false],
                            ['answer' => 'Les loyers ne répondent jamais aux taxes', 'iscorrect' => false],
                            ['answer' => 'Le foncier peut toujours être produit davantage à court terme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capitalisation fiscale est-elle importante dans l\\'immobilier ?',
                        'answers' => [
                            ['answer' => 'Les taxes futures anticipées peuvent être intégrées dans le prix des actifs immobiliers', 'iscorrect' => true],
                            ['answer' => 'Les acheteurs ignorent toujours les flux futurs', 'iscorrect' => false],
                            ['answer' => 'Les actifs immobiliers n\\'ont jamais de valeur anticipée', 'iscorrect' => false],
                            ['answer' => 'La fiscalité ne modifie jamais la valeur des actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la fiscalité des entreprises peut-elle influencer l\\'offre de travail ?',
                        'answers' => [
                            ['answer' => 'Une taxe sur le rendement du capital peut modifier l\\'investissement, la productivité marginale du travail et donc certaines rémunérations', 'iscorrect' => true],
                            ['answer' => 'Les impôts sur les entreprises affectent uniquement les actionnaires sans aucun effet indirect', 'iscorrect' => false],
                            ['answer' => 'La productivité du travail est indépendante du capital', 'iscorrect' => false],
                            ['answer' => 'Les salaires sont toujours fixés indépendamment de l\\'investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'incidence fiscale peut-elle être répartie entre plusieurs facteurs de production ?',
                        'answers' => [
                            ['answer' => 'Les prix des produits, salaires, rendements du capital et rentes peuvent tous s\\'ajuster', 'iscorrect' => true],
                            ['answer' => 'Seul le facteur légalement taxé peut être affecté', 'iscorrect' => false],
                            ['answer' => 'Les facteurs de production ne réagissent jamais aux impôts', 'iscorrect' => false],
                            ['answer' => 'Une taxe ne peut jamais modifier les prix relatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de l\\'incidence doit-elle parfois considérer l\\'équilibre général ?',
                        'answers' => [
                            ['answer' => 'Les changements de prix dans un marché peuvent se transmettre aux autres marchés de biens, facteurs et actifs', 'iscorrect' => true],
                            ['answer' => 'Les marchés sont toujours indépendants', 'iscorrect' => false],
                            ['answer' => 'Les taxes affectent uniquement le marché directement concerné', 'iscorrect' => false],
                            ['answer' => 'Les facteurs de production n\\'ont jamais de marchés', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dette publique et dynamique budgétaire avancée',
                'questions' => [
                    [
                        'question' => 'Pourquoi le différentiel entre taux d\\'intérêt réel et croissance réelle est-il central pour la dynamique de la dette ?',
                        'answers' => [
                            ['answer' => 'Il détermine en partie la pression exercée par la charge d\\'intérêt sur le ratio dette/PIB au fil du temps', 'iscorrect' => true],
                            ['answer' => 'Il ne concerne que la dette privée', 'iscorrect' => false],
                            ['answer' => 'Il est indépendant de la dynamique du ratio dette/PIB', 'iscorrect' => false],
                            ['answer' => 'Il détermine uniquement le taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pays peut-il stabiliser son ratio dette/PIB sans réduire immédiatement le stock nominal de dette ?',
                        'answers' => [
                            ['answer' => 'Une croissance du PIB suffisamment forte peut stabiliser le ratio malgré une dette nominale encore élevée', 'iscorrect' => true],
                            ['answer' => 'Le stock de dette devient automatiquement nul', 'iscorrect' => false],
                            ['answer' => 'Le ratio dette/PIB ne dépend jamais du PIB', 'iscorrect' => false],
                            ['answer' => 'La croissance réduit toujours mécaniquement le stock nominal de dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un excédent primaire peut-il être nécessaire pour stabiliser une dette élevée lorsque r est supérieur à g ?',
                        'answers' => [
                            ['answer' => 'Le solde primaire positif peut compenser l\\'effet de la charge d\\'intérêt supérieure à la croissance de l\\'économie', 'iscorrect' => true],
                            ['answer' => 'Lorsque r > g, les intérêts deviennent automatiquement négatifs', 'iscorrect' => false],
                            ['answer' => 'Le solde primaire n\\'a aucun effet sur la dette', 'iscorrect' => false],
                            ['answer' => 'Une croissance faible réduit toujours mécaniquement le ratio', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une maturité longue peut-elle réduire le risque de refinancement d\\'un État ?',
                        'answers' => [
                            ['answer' => 'Une plus grande part de la dette n\\'arrive pas à échéance immédiatement lorsque les conditions de marché se détériorent', 'iscorrect' => true],
                            ['answer' => 'Une maturité longue garantit toujours un taux plus faible', 'iscorrect' => false],
                            ['answer' => 'La dette longue n\\'a jamais de coût d\\'intérêt', 'iscorrect' => false],
                            ['answer' => 'Les titres longs sont refinancés chaque semaine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette à taux variable peut-elle rendre le budget plus sensible à une hausse des taux ?',
                        'answers' => [
                            ['answer' => 'Le coût d\\'intérêt s\\'ajuste plus rapidement aux conditions de marché', 'iscorrect' => true],
                            ['answer' => 'Le taux variable reste fixe par définition', 'iscorrect' => false],
                            ['answer' => 'Les taux élevés réduisent automatiquement le service de cette dette', 'iscorrect' => false],
                            ['answer' => 'Les États ne paient jamais d\\'intérêts variables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dette en monnaie étrangère accroît-elle le risque budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une dépréciation de la monnaie nationale peut augmenter la valeur de la dette extérieure exprimée en monnaie domestique', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation réduit toujours la dette extérieure', 'iscorrect' => false],
                            ['answer' => 'Le taux de change ne concerne jamais les obligations publiques', 'iscorrect' => false],
                            ['answer' => 'La monnaie de libellé est sans importance pour le budget', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux souverains peut-elle produire des effets budgétaires retardés ?',
                        'answers' => [
                            ['answer' => 'La dette existante peut être refinancée progressivement et non entièrement au nouveau taux', 'iscorrect' => true],
                            ['answer' => 'Toute la dette est automatiquement refinancée le jour même', 'iscorrect' => false],
                            ['answer' => 'Les taux n\\'affectent que les nouvelles dépenses', 'iscorrect' => false],
                            ['answer' => 'La maturité de la dette n\\'a aucun effet', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la soutenabilité de la dette dépend-elle des anticipations des investisseurs ?',
                        'answers' => [
                            ['answer' => Une perte de confiance peut augmenter les primes de risque et le coût futur du refinancement', 'iscorrect' => true],
                            ['answer' => 'Les investisseurs ne réagissent jamais aux risques budgétaires', 'iscorrect' => false],
                            ['answer' => 'Les primes de risque sont toujours nulles', 'iscorrect' => false],
                            ['answer' => 'Les anticipations ne peuvent jamais modifier les taux souverains', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une consolidation budgétaire procyclique peut-elle aggraver le ratio dette/PIB à court terme ?',
                        'answers' => [
                            ['answer' => 'Une réduction forte de la demande peut freiner la croissance et réduire les recettes, limitant le gain attendu sur la dette', 'iscorrect' => true],
                            ['answer' => 'Une consolidation stimule toujours immédiatement le PIB', 'iscorrect' => false],
                            ['answer' => 'La croissance augmente nécessairement pendant toute consolidation', 'iscorrect' => false],
                            ['answer' => 'Les recettes fiscales ne dépendent jamais de l\\'activité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les actifs publics doivent-ils parfois être pris en compte dans l\\'analyse de la dette ?',
                        'answers' => [
                            ['answer' => 'La position patrimoniale globale dépend aussi des actifs détenus par l\\'État et pas uniquement de ses passifs', 'iscorrect' => true],
                            ['answer' => 'Les actifs publics n\\'ont aucune valeur économique', 'iscorrect' => false],
                            ['answer' => 'La dette brute décrit toujours toute la position nette', 'iscorrect' => false],
                            ['answer' => 'Les actifs publics sont toujours illiquides et sans rendement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Règles budgétaires et crédibilité',
                'questions' => [
                    [
                        'question' => 'Quel est l\\'objectif principal d\\'une règle budgétaire ?',
                        'answers' => [
                            ['answer' => 'Encadrer certaines décisions budgétaires afin de limiter les déséquilibres excessifs et renforcer la crédibilité', 'iscorrect' => true],
                            ['answer' => 'Empêcher toute intervention budgétaire en période de crise', 'iscorrect' => false],
                            ['answer' => 'Garantir automatiquement un budget équilibré chaque mois', 'iscorrect' => false],
                            ['answer' => 'Remplacer tous les impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les règles budgétaires peuvent-elles améliorer la discipline intertemporelle ?',
                        'answers' => [
                            ['answer' => 'Elles limitent certaines incitations à reporter les coûts actuels sur les contribuables futurs', 'iscorrect' => true],
                            ['answer' => 'Elles rendent toute dépense immédiatement gratuite', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent tout compromis entre générations', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent tout investissement public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une règle de déficit fixe peut-elle être difficile à respecter pendant une récession ?',
                        'answers' => [
                            ['answer' => 'Les recettes diminuent et certaines dépenses augmentent automatiquement lorsque l\\'activité ralentit', 'iscorrect' => true],
                            ['answer' => 'Les recettes fiscales augmentent toujours pendant les récessions', 'iscorrect' => false],
                            ['answer' => 'Les stabilisateurs automatiques disparaissent', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques deviennent nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les clauses d\\'exception peuvent-elles être intégrées dans des règles budgétaires ?',
                        'answers' => [
                            ['answer' => 'Elles permettent une réaction temporaire à des événements exceptionnels tout en conservant un cadre de discipline à moyen terme', 'iscorrect' => true],
                            ['answer' => 'Elles suppriment toutes les contraintes budgétaires en permanence', 'iscorrect' => false],
                            ['answer' => 'Elles interdisent les stabilisateurs automatiques', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent un déficit permanent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une règle basée sur le solde structurel peut-elle être préférable à une règle purement nominale ?',
                        'answers' => [
                            ['answer' => 'Elle cherche à tenir compte de la position cyclique de l\\'économie et à éviter certaines réactions procycliques', 'iscorrect' => true],
                            ['answer' => 'Elle ignore complètement la conjoncture', 'iscorrect' => false],
                            ['answer' => 'Le solde structurel est toujours directement observable', 'iscorrect' => false],
                            ['answer' => 'Elle interdit toute dépense en récession', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'incertitude sur la production potentielle complique-t-elle les règles structurelles ?',
                        'answers' => [
                            ['answer' => 'La production potentielle n\\'est pas directement observée et ses estimations peuvent être révisées', 'iscorrect' => true],
                            ['answer' => 'La production potentielle est connue avec certitude à chaque période', 'iscorrect' => false],
                            ['answer' => 'Le cycle économique n\\'affecte jamais le solde structurel', 'iscorrect' => false],
                            ['answer' => 'Les estimations potentielles sont indépendantes des données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité d\\'une règle dépend-elle aussi de sa mise en œuvre institutionnelle ?',
                        'answers' => [
                            ['answer' => Une règle crédible nécessite des mécanismes de surveillance, des définitions cohérentes et une capacité réelle à respecter les engagements', 'iscorrect' => true],
                            ['answer' => 'Une règle est toujours crédible simplement parce qu\\'elle est écrite', 'iscorrect' => false],
                            ['answer' => 'Les institutions n\\'ont aucun rôle dans la discipline', 'iscorrect' => false],
                            ['answer' => 'La crédibilité ne dépend jamais du respect passé des règles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une règle trop complexe peut-elle perdre en efficacité ?',
                        'answers' => [
                            ['answer' => 'Une complexité excessive peut réduire la transparence et multiplier les possibilités d\\'interprétation ou de contournement', 'iscorrect' => true],
                            ['answer' => 'Une règle plus complexe est toujours plus facile à appliquer', 'iscorrect' => false],
                            ['answer' => 'La transparence augmente automatiquement avec la complexité', 'iscorrect' => false],
                            ['answer' => 'Les contournements deviennent impossibles lorsque les règles sont longues', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une règle de dette peut-elle compléter une règle de déficit ?',
                        'answers' => [
                            ['answer' => 'Le déficit est un flux alors que la dette est un stock, et les deux dimensions permettent un suivi différent du risque budgétaire', 'iscorrect' => true],
                            ['answer' => 'Le déficit et la dette mesurent exactement la même chose', 'iscorrect' => false],
                            ['answer' => 'Une règle de dette rend inutile toute règle de déficit', 'iscorrect' => false],
                            ['answer' => 'Une dette publique est toujours indépendante des déficits futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'indépendance d\\'un organe budgétaire peut-elle améliorer la qualité des prévisions ?',
                        'answers' => [
                            ['answer' => 'Une institution indépendante peut fournir une évaluation plus crédible et moins directement soumise aux incitations politiques de court terme', 'iscorrect' => true],
                            ['answer' => 'L\\'indépendance garantit toujours des prévisions parfaites', 'iscorrect' => false],
                            ['answer' => 'Les prévisions budgétaires n\\'ont aucun besoin d\\'institution spécialisée', 'iscorrect' => false],
                            ['answer' => 'Une institution indépendante contrôle directement toutes les dépenses', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dépenses publiques, biens publics et externalités',
                'questions' => [
                    [
                        'question' => 'Pourquoi le financement public d\\'un bien public peut-il améliorer l\\'efficacité économique ?',
                        'answers' => [
                            ['answer' => 'Le marché privé peut sous-fournir un bien dont les bénéfices sont difficiles à faire payer individuellement', 'iscorrect' => true],
                            ['answer' => 'Tous les biens publics sont toujours rentables commercialement', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs refusent toujours les biens publics', 'iscorrect' => false],
                            ['answer' => 'L\\'État produit nécessairement tous les biens plus efficacement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le problème du passager clandestin peut-il conduire à une sous-production des biens publics ?',
                        'answers' => [
                            ['answer' => 'Les individus peuvent profiter du bien sans payer suffisamment pour financer sa production', 'iscorrect' => true],
                            ['answer' => 'Les individus paient toujours volontairement exactement leur part', 'iscorrect' => false],
                            ['answer' => 'Les biens publics sont toujours exclusifs', 'iscorrect' => false],
                            ['answer' => 'Le problème vient uniquement de l\\'inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la fourniture publique d\\'un bien ne signifie-t-elle pas automatiquement qu\\'il doit être produit par une entreprise publique ?',
                        'answers' => [
                            ['answer' => Le financement, la réglementation et la production peuvent être séparés institutionnellement', 'iscorrect' => true],
                            ['answer' => 'Un bien public ne peut jamais être produit par une entreprise privée', 'iscorrect' => false],
                            ['answer' => 'Le financement public exige toujours une production publique', 'iscorrect' => false],
                            ['answer' => 'La concurrence privée est impossible dans tous les services publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une subvention peut-elle être utilisée pour corriger une externalité positive ?',
                        'answers' => [
                            ['answer' => 'Elle peut encourager une activité dont les bénéfices sociaux dépassent les bénéfices privés perçus par le producteur ou le consommateur', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours une activité socialement bénéfique', 'iscorrect' => false],
                            ['answer' => 'Une externalité positive signifie que l\\'activité doit être taxée', 'iscorrect' => false],
                            ['answer' => 'Les bénéfices sociaux sont toujours inférieurs aux bénéfices privés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe pigouvienne cherche-t-elle à aligner les incitations privées et le coût social ?',
                        'answers' => [
                            ['answer' => 'Elle fait supporter à l\\'agent une charge liée au dommage marginal qu\\'il impose aux autres', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours le dommage social', 'iscorrect' => false],
                            ['answer' => 'Elle vise uniquement à maximiser les recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement toute activité polluante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le niveau optimal d\\'une taxe corrective dépend-il du dommage marginal ?',
                        'answers' => [
                            ['answer' => 'L\\'objectif est d\\'internaliser le coût externe au niveau pertinent de l\\'activité', 'iscorrect' => true],
                            ['answer' => 'Toutes les externalités ont toujours le même coût', 'iscorrect' => false],
                            ['answer' => 'Le dommage marginal est indépendant du niveau de production', 'iscorrect' => false],
                            ['answer' => 'Une taxe corrective n\\'a aucun lien avec le coût externe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certaines dépenses de santé peuvent-elles avoir des bénéfices sociaux supérieurs aux bénéfices privés ?',
                        'answers' => [
                            ['answer' => 'Une meilleure santé peut réduire la transmission de certaines maladies et améliorer la productivité et le bien-être collectif', 'iscorrect' => true],
                            ['answer' => 'La santé ne produit jamais de bénéfices externes', 'iscorrect' => false],
                            ['answer' => 'Les bénéfices médicaux sont toujours purement privés', 'iscorrect' => false],
                            ['answer' => 'Les politiques publiques ne peuvent jamais affecter la santé collective', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'analyse coûts-bénéfices doit-elle intégrer les externalités ?',
                        'answers' => [
                            ['answer' => 'Les coûts ou bénéfices d\\'un projet peuvent affecter des tiers sans être entièrement reflétés dans les prix de marché', 'iscorrect' => true],
                            ['answer' => 'Les externalités n\\'ont aucune valeur économique', 'iscorrect' => false],
                            ['answer' => 'Les prix de marché capturent toujours tous les effets sociaux', 'iscorrect' => false],
                            ['answer' => 'L\\'analyse coûts-bénéfices ne concerne que les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certains investissements publics ont-ils des rendements sociaux difficiles à mesurer ?',
                        'answers' => [
                            ['answer' => 'Une partie des bénéfices peut être diffuse, de long terme ou non directement valorisée par un prix de marché', 'iscorrect' => true],
                            ['answer' => 'Tous les bénéfices publics sont immédiatement observables', 'iscorrect' => false],
                            ['answer' => 'Les infrastructures n\\'ont jamais de coûts mesurables', 'iscorrect' => false],
                            ['answer' => 'Les bénéfices futurs ne peuvent jamais être estimés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la tarification des services publics peut-elle être économiquement complexe ?',
                        'answers' => [
                            ['answer' => Il faut arbitrer entre couverture des coûts, accessibilité, efficacité et objectifs sociaux', 'iscorrect' => true],
                            ['answer' => 'Le prix doit toujours être égal à zéro', 'iscorrect' => false],
                            ['answer' => 'La tarification n\\'a aucun effet sur la demande', 'iscorrect' => false],
                            ['answer' => 'Les services publics n\\'ont jamais de coûts fixes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Investissement public, productivité et croissance',
                'questions' => [
                    [
                        'question' => 'Pourquoi les infrastructures publiques peuvent-elles augmenter la productivité privée ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent réduire les coûts de transport, améliorer la connectivité et augmenter l\\'efficacité des entreprises', 'iscorrect' => true],
                            ['answer' => 'Les infrastructures publiques ne concernent jamais les entreprises', 'iscorrect' => false],
                            ['answer' => 'Les infrastructures augmentent toujours les coûts privés', 'iscorrect' => false],
                            ['answer' => 'La productivité privée est entièrement indépendante du capital public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement d\\'un investissement public doit-il être comparé à son coût d\\'opportunité ?',
                        'answers' => [
                            ['answer' => 'Les ressources utilisées pour un projet ne peuvent pas simultanément être employées dans d\\'autres usages', 'iscorrect' => true],
                            ['answer' => 'Les ressources publiques sont illimitées', 'iscorrect' => false],
                            ['answer' => 'Le coût d\\'opportunité n\\'existe que pour les ménages', 'iscorrect' => false],
                            ['answer' => 'Tout investissement public est automatiquement prioritaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'investissement public peut-il avoir un effet de réseau ?',
                        'answers' => [
                            ['answer' => La valeur d\\'une infrastructure peut augmenter lorsque davantage d\\'agents l\\'utilisent ou que d\\'autres infrastructures complémentaires existent', 'iscorrect' => true],
                            ['answer' => 'Les infrastructures fonctionnent toujours indépendamment les unes des autres', 'iscorrect' => false],
                            ['answer' => 'Un réseau devient toujours moins utile avec davantage d\\'utilisateurs', 'iscorrect' => false],
                            ['answer' => 'Les effets de réseau n\\'existent que dans les marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses d\\'éducation peuvent-elles être considérées comme un investissement ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent accroître le capital humain et la productivité future des travailleurs', 'iscorrect' => true],
                            ['answer' => 'L\\'éducation ne modifie jamais les compétences', 'iscorrect' => false],
                            ['answer' => 'Les compétences n\\'ont aucun rendement économique', 'iscorrect' => false],
                            ['answer' => 'Les dépenses d\\'éducation sont toujours une consommation pure sans bénéfice futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses de recherche publique peuvent-elles soutenir la croissance de long terme ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent créer des connaissances dont les bénéfices diffusent vers plusieurs agents et secteurs', 'iscorrect' => true],
                            ['answer' => 'La recherche publique réduit toujours l\\'innovation privée', 'iscorrect' => false],
                            ['answer' => 'Les connaissances ont toujours une valeur purement privée', 'iscorrect' => false],
                            ['answer' => 'L\\'innovation ne dépend jamais de la recherche', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une mauvaise sélection de projets peut-elle réduire l\\'efficacité de l\\'investissement public ?',
                        'answers' => [
                            ['answer' => 'Des ressources peuvent être immobilisées dans des projets à faible rendement social ou dont les coûts sont sous-estimés', 'iscorrect' => true],
                            ['answer' => 'Tous les projets publics ont exactement le même rendement', 'iscorrect' => false],
                            ['answer' => 'Un projet public ne peut jamais être mal évalué', 'iscorrect' => false],
                            ['answer' => 'Le financement garantit toujours la rentabilité sociale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépassements de coûts sont-ils importants dans l\\'évaluation des infrastructures ?',
                        'answers' => [
                            ['answer' => 'Ils réduisent le rendement net du projet et peuvent modifier sa justification économique initiale', 'iscorrect' => true],
                            ['answer' => 'Les dépassements augmentent toujours le rendement', 'iscorrect' => false],
                            ['answer' => 'Ils n\\'affectent jamais le budget', 'iscorrect' => false],
                            ['answer' => 'Le coût final est toujours égal au coût initial prévu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'entretien des infrastructures doit-il être pris en compte dans la politique budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une infrastructure mal entretenue peut perdre une partie de sa valeur et de sa capacité productive', 'iscorrect' => true],
                            ['answer' => 'L\\'entretien n\\'a aucun coût', 'iscorrect' => false],
                            ['answer' => 'Une infrastructure conserve toujours sa pleine valeur sans maintenance', 'iscorrect' => false],
                            ['answer' => 'Les actifs publics n\\'ont jamais besoin de renouvellement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les partenariats public-privé doivent-ils être évalués avec prudence ?',
                        'answers' => [
                            ['answer' => 'Le mode de financement peut déplacer les risques et paiements dans le temps sans éliminer leur coût économique réel', 'iscorrect' => true],
                            ['answer' => 'Un partenariat privé rend toujours un projet moins coûteux', 'iscorrect' => false],
                            ['answer' => 'Les risques sont automatiquement supprimés par le contrat', 'iscorrect' => false],
                            ['answer' => 'Les paiements futurs n\\'ont aucune valeur économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investissements publics complémentaires peuvent-ils produire des rendements croissants ?',
                        'answers' => [
                            ['answer' => 'Une infrastructure peut être plus productive lorsqu\\'elle est combinée avec d\\'autres équipements, compétences ou réseaux', 'iscorrect' => true],
                            ['answer' => 'Les complémentarités n\\'existent jamais dans l\\'économie', 'iscorrect' => false],
                            ['answer' => 'Chaque projet fonctionne toujours indépendamment', 'iscorrect' => false],
                            ['answer' => 'Les rendements croissants excluent toute infrastructure', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique budgétaire, cycle et coordination monétaire',
                'questions' => [
                    [
                        'question' => 'Pourquoi une expansion budgétaire peut-elle entraîner une réaction restrictive de la banque centrale ?',
                        'answers' => [
                            ['answer' => 'Une hausse de la demande peut accroître les pressions inflationnistes et conduire la banque centrale à relever ses taux', 'iscorrect' => true],
                            ['answer' => 'La banque centrale augmente toujours les taux après toute dépense publique', 'iscorrect' => false],
                            ['answer' => 'La politique budgétaire n\\'affecte jamais la demande', 'iscorrect' => false],
                            ['answer' => 'Les taux diminuent nécessairement lorsque l\\'État dépense davantage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cette réaction monétaire peut-elle réduire le multiplicateur budgétaire ?',
                        'answers' => [
                            ['answer' => 'Des taux plus élevés peuvent freiner l\\'investissement et certaines consommations sensibles au crédit', 'iscorrect' => true],
                            ['answer' => 'Des taux plus élevés augmentent toujours toutes les dépenses privées', 'iscorrect' => false],
                            ['answer' => 'L\\'investissement est indépendant du coût du capital', 'iscorrect' => false],
                            ['answer' => 'Le crédit devient toujours moins coûteux lorsque les taux montent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique budgétaire peut-elle être particulièrement puissante lorsque la politique monétaire est contrainte ?',
                        'answers' => [
                            ['answer' => 'Une réaction monétaire plus faible laisse une plus grande partie de l\\'impulsion budgétaire se transmettre à la demande', 'iscorrect' => true],
                            ['answer' => 'La politique monétaire amplifie toujours les taux lorsque les taux sont proches de zéro', 'iscorrect' => false],
                            ['answer' => 'Les contraintes monétaires rendent toute dépense publique inefficace', 'iscorrect' => false],
                            ['answer' => 'Les taux proches de zéro éliminent toute demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire procyclique peut-elle amplifier les fluctuations ?',
                        'answers' => [
                            ['answer' => Elle augmente la demande pendant les booms ou la réduit pendant les récessions, accentuant le cycle au lieu de l\\'atténuer', 'iscorrect' => true],
                            ['answer' => 'Une politique procyclique stabilise toujours l\\'activité', 'iscorrect' => false],
                            ['answer' => 'Le cycle économique ne dépend jamais de la demande', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques sont toujours contracycliques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques sont-ils généralement considérés comme contracycliques ?',
                        'answers' => [
                            ['answer' => 'Les recettes fiscales diminuent et certaines dépenses augmentent lorsque l\\'activité faiblit, puis l\\'effet s\\'inverse lorsque l\\'économie accélère', 'iscorrect' => true],
                            ['answer' => 'Ils renforcent toujours les booms et les récessions', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent les impôts pendant toutes les récessions', 'iscorrect' => false],
                            ['answer' => 'Ils fonctionnent uniquement lorsque le gouvernement vote une nouvelle loi', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il choisir une relance temporaire plutôt qu\\'une baisse d\\'impôts permanente pendant une récession ?',
                        'answers' => [
                            ['answer' => 'Il peut chercher à soutenir temporairement la demande tout en limitant l\\'impact permanent sur les finances publiques', 'iscorrect' => true],
                            ['answer' => 'Une mesure permanente a toujours un multiplicateur plus faible par définition', 'iscorrect' => false],
                            ['answer' => 'Les mesures temporaires n\\'ont aucun effet sur la demande', 'iscorrect' => false],
                            ['answer' => 'Une baisse permanente des impôts n\\'affecte jamais la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une consolidation budgétaire peut-elle être mieux tolérée lorsque la demande privée est forte ?',
                        'answers' => [
                            ['answer' => 'Une demande privée robuste peut compenser davantage l\\'effet restrictif sur la demande globale', 'iscorrect' => true],
                            ['answer' => 'La demande privée est toujours nulle pendant les booms', 'iscorrect' => false],
                            ['answer' => 'Une consolidation augmente nécessairement le chômage à long terme', 'iscorrect' => false],
                            ['answer' => 'La politique budgétaire ne dépend jamais de la demande privée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la coordination budgétaire-monétaire peut-elle être importante lors d\\'un choc d\\'offre ?',
                        'answers' => [
                            ['answer' => 'Les autorités doivent gérer simultanément des pressions inflationnistes et une faiblesse possible de l\\'activité', 'iscorrect' => true],
                            ['answer' => 'Les chocs d\\'offre n\\'affectent jamais l\\'inflation', 'iscorrect' => false],
                            ['answer' => 'Les deux politiques ont toujours exactement le même instrument', 'iscorrect' => false],
                            ['answer' => 'L\\'offre et la demande sont indépendantes dans tous les modèles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une expansion budgétaire financée par dette peut-elle avoir un effet différent d\\'une expansion financée par impôts contemporains ?',
                        'answers' => [
                            ['answer' => 'Le mode de financement modifie le revenu disponible actuel, les anticipations et le coût futur du financement', 'iscorrect' => true],
                            ['answer' => 'Le mode de financement est toujours sans importance', 'iscorrect' => false],
                            ['answer' => 'La dette et les impôts produisent nécessairement la même trajectoire', 'iscorrect' => false],
                            ['answer' => 'Les anticipations restent toujours inchangées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique budgétaire doit-elle tenir compte de la réaction du secteur privé ?',
                        'answers' => [
                            ['answer' => 'Les ménages et entreprises peuvent modifier consommation, épargne, investissement et financement en réponse aux mesures publiques', 'iscorrect' => true],
                            ['answer' => 'Le secteur privé ne réagit jamais aux politiques publiques', 'iscorrect' => false],
                            ['answer' => 'Les agents privés ignorent toujours les impôts futurs', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne dépendent jamais des conditions macroéconomiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie politique des finances publiques',
                'questions' => [
                    [
                        'question' => 'Pourquoi les décisions budgétaires peuvent-elles souffrir d\\'un biais de court terme ?',
                        'answers' => [
                            ['answer' => 'Les gouvernements peuvent avoir intérêt à favoriser des bénéfices immédiats et reporter certains coûts sur l\\'avenir', 'iscorrect' => true],
                            ['answer' => 'Les politiques publiques ne sont jamais influencées par les élections', 'iscorrect' => false],
                            ['answer' => 'Les électeurs privilégient toujours les coûts futurs', 'iscorrect' => false],
                            ['answer' => 'La dette publique ne peut jamais être reportée entre générations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la transparence budgétaire peut-elle réduire certaines asymétries d\\'information ?',
                        'answers' => [
                            ['answer' => 'Elle permet aux citoyens, investisseurs et institutions de mieux connaître les recettes, dépenses, hypothèses et risques', 'iscorrect' => true],
                            ['answer' => 'La transparence réduit toujours la quantité d\\'information disponible', 'iscorrect' => false],
                            ['answer' => 'Les budgets publics n\\'ont aucune information pertinente', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ne regardent jamais les comptes publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intérêts organisés peuvent-ils influencer la fiscalité ?',
                        'answers' => [
                            ['answer' => 'Les bénéfices ou coûts d\\'une mesure peuvent être concentrés sur certains groupes plus capables de s\\'organiser politiquement', 'iscorrect' => true],
                            ['answer' => 'Les groupes d\\'intérêt ne disposent jamais d\\'incitations', 'iscorrect' => false],
                            ['answer' => 'Les politiques fiscales sont déterminées exclusivement par des mécanismes automatiques', 'iscorrect' => false],
                            ['answer' => 'Tous les contribuables ont toujours exactement la même influence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses ciblées peuvent-elles être politiquement attractives même si elles ne maximisent pas toujours l\\'efficacité ?',
                        'answers' => [
                            ['answer' => 'Le bénéfice peut être visible et concentré, tandis que le coût budgétaire est réparti sur un grand nombre de contribuables', 'iscorrect' => true],
                            ['answer' => 'Les dépenses ciblées ont toujours le rendement social maximal', 'iscorrect' => false],
                            ['answer' => 'Les coûts budgétaires sont invisibles par définition', 'iscorrect' => false],
                            ['answer' => 'Les électeurs ignorent toujours les bénéfices sectoriels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les règles budgétaires peuvent-elles réduire certains problèmes d\\'engagement politique ?',
                        'answers' => [
                            ['answer' => 'Elles imposent ex ante certaines contraintes qui rendent plus difficile une dérive opportuniste des déficits', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent tous les processus démocratiques', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les gouvernements incapables de réagir aux crises', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment toutes les préférences politiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des institutions fiscales influence-t-elle les recettes ?',
                        'answers' => [
                            ['answer' => L\\'administration, le contrôle, la collecte et l\\'application de la loi déterminent en partie la capacité à transformer la base fiscale en recettes effectives', 'iscorrect' => true],
                            ['answer' => 'Le taux légal détermine toujours exactement les recettes encaissées', 'iscorrect' => false],
                            ['answer' => 'La fraude est indépendante des institutions', 'iscorrect' => false],
                            ['answer' => 'La collecte fiscale ne nécessite aucune administration', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'informalité complique-t-elle la politique fiscale ?',
                        'answers' => [
                            ['answer' => 'Une partie de l\\'activité économique peut échapper aux bases fiscales conventionnelles et réduire l\\'efficacité de certains prélèvements', 'iscorrect' => true],
                            ['answer' => 'L\\'informalité augmente toujours automatiquement les recettes', 'iscorrect' => false],
                            ['answer' => 'Les activités informelles sont toujours intégralement déclarées', 'iscorrect' => false],
                            ['answer' => 'Elle n\\'affecte jamais la concurrence entre entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un élargissement de la base fiscale peut-il parfois réduire l\\'évasion ?',
                        'answers' => [
                            ['answer' => 'Des règles plus uniformes peuvent réduire certaines opportunités de transfert, de contournement et d\\'arbitrage fiscal', 'iscorrect' => true],
                            ['answer' => 'Une base plus large crée toujours davantage de niches fiscales', 'iscorrect' => false],
                            ['answer' => 'L\\'évasion augmente nécessairement lorsque la base s\\'élargit', 'iscorrect' => false],
                            ['answer' => 'Les contribuables cessent toujours de réagir aux taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concurrence fiscale entre pays peut-elle limiter la taxation de certaines bases mobiles ?',
                        'answers' => [
                            ['answer' => 'Les contribuables ou entreprises peuvent déplacer certaines bases taxables vers des juridictions plus favorables', 'iscorrect' => true],
                            ['answer' => 'Les capitaux sont toujours parfaitement immobiles', 'iscorrect' => false],
                            ['answer' => 'Les différences fiscales n\\'affectent jamais la localisation', 'iscorrect' => false],
                            ['answer' => 'La concurrence fiscale garantit toujours une hausse des taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la coopération fiscale internationale peut-elle être recherchée ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire certains arbitrages entre juridictions et faciliter l\\'échange d\\'informations sur les bases fiscales', 'iscorrect' => true],
                            ['answer' => 'Elle interdit toujours toute politique fiscale nationale', 'iscorrect' => false],
                            ['answer' => 'Elle rend les impôts identiques dans tous les pays par définition', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute mobilité internationale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Évaluation empirique des politiques budgétaires',
                'questions' => [
                    [
                        'question' => 'Pourquoi l\\'évaluation d\\'une politique fiscale nécessite-t-elle un scénario contrefactuel ?',
                        'answers' => [
                            ['answer' => 'Pour estimer ce qui se serait produit sans la politique et isoler autant que possible son effet causal', 'iscorrect' => true],
                            ['answer' => 'Parce que le scénario contrefactuel est directement observable', 'iscorrect' => false],
                            ['answer' => 'Pour garantir que toute politique est efficace', 'iscorrect' => false],
                            ['answer' => 'Parce que les données observées sont toujours insuffisantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une simple comparaison avant-après peut-elle être trompeuse ?',
                        'answers' => [
                            ['answer' => 'D\\'autres changements économiques ou politiques peuvent avoir eu lieu simultanément', 'iscorrect' => true],
                            ['answer' => 'Les politiques fiscales n\\'ont jamais d\\'effets différés', 'iscorrect' => false],
                            ['answer' => 'Toutes les autres variables restent toujours constantes', 'iscorrect' => false],
                            ['answer' => 'Les données historiques sont toujours parfaitement expérimentales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les expériences naturelles peuvent-elles être utiles en économie publique ?',
                        'answers' => [
                            ['answer' => 'Elles exploitent des variations institutionnelles ou politiques qui créent des différences permettant une identification plus crédible dans certaines circonstances', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent toujours une causalité parfaite', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment tous les biais sans hypothèse', 'iscorrect' => false],
                            ['answer' => 'Elles ne nécessitent aucune donnée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets d\\'une politique fiscale peuvent-ils être hétérogènes ?',
                        'answers' => [
                            ['answer' => 'Les ménages et entreprises diffèrent par revenu, liquidité, dette, secteur, situation géographique et comportement', 'iscorrect' => true],
                            ['answer' => 'Tous les agents réagissent toujours exactement de la même manière', 'iscorrect' => false],
                            ['answer' => 'Une taxe agit uniquement sur les ménages les plus riches', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne sont jamais affectées par la fiscalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les délais d\\'effet sont-ils importants pour l\\'évaluation d\\'une réforme budgétaire ?',
                        'answers' => [
                            ['answer' => 'Les comportements et investissements peuvent s\\'ajuster progressivement et les effets de long terme peuvent différer des effets initiaux', 'iscorrect' => true],
                            ['answer' => 'Toute réforme atteint son effet maximal immédiatement', 'iscorrect' => false],
                            ['answer' => 'Les agents ne réagissent jamais avec retard', 'iscorrect' => false],
                            ['answer' => 'Une réforme fiscale n\\'a jamais d\\'effet durable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les recettes fiscales observées peuvent-elles sous-estimer les recettes potentielles à long terme d\\'une réforme ?',
                        'answers' => [
                            ['answer' => 'Les comportements d\\'ajustement peuvent modifier les bases imposables progressivement et les effets administratifs peuvent apparaître avec retard', 'iscorrect' => true],
                            ['answer' => 'Les contribuables ne réagissent jamais à une réforme', 'iscorrect' => false],
                            ['answer' => 'Les recettes sont toujours instantanément à leur niveau final', 'iscorrect' => false],
                            ['answer' => 'L\\'administration fiscale n\\'a aucun délai de mise en œuvre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'incidence fiscale empirique doit-elle être étudiée au-delà du contribuable légal ?',
                        'answers' => [
                            ['answer' => Les ajustements de prix, salaires, profits et localisation peuvent déplacer la charge économique réelle', 'iscorrect' => true],
                            ['answer' => 'Le contribuable légal supporte toujours exactement toute la charge', 'iscorrect' => false],
                            ['answer' => 'Les prix ne peuvent jamais réagir à la fiscalité', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne modifient jamais leurs décisions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'évaluation coûts-bénéfices d\\'une réforme doit-elle intégrer le coût administratif ?',
                        'answers' => [
                            ['answer' => 'La collecte, le contrôle et la mise en conformité utilisent des ressources qui ont elles-mêmes un coût social', 'iscorrect' => true],
                            ['answer' => 'L\\'administration fiscale est toujours gratuite', 'iscorrect' => false],
                            ['answer' => 'Les coûts administratifs n\\'ont aucun effet sur le bien-être', 'iscorrect' => false],
                            ['answer' => 'Le contrôle fiscal ne nécessite aucune ressource', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets distributifs doivent-ils être séparés des effets agrégés dans une analyse fiscale ?',
                        'answers' => [
                            ['answer' => 'Une réforme peut augmenter le surplus total tout en réduisant le revenu réel de certains groupes', 'iscorrect' => true],
                            ['answer' => 'Les effets agrégés et distributifs sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Une hausse du bien-être total signifie que chaque ménage gagne', 'iscorrect' => false],
                            ['answer' => 'La distribution des revenus n\\'a aucun rôle dans l\\'évaluation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse empirique robuste doit-elle tester plusieurs spécifications ?',
                        'answers' => [
                            ['answer' => 'Une conclusion qui dépend fortement d\\'une seule spécification peut être fragile face aux choix méthodologiques', 'iscorrect' => true],
                            ['answer' => 'Une seule spécification est toujours suffisante', 'iscorrect' => false],
                            ['answer' => 'Les résultats empiriques sont indépendants des hypothèses', 'iscorrect' => false],
                            ['answer' => 'Tester plusieurs modèles réduit nécessairement la qualité scientifique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Soutenabilité, crises budgétaires et stratégie avancée',
                'questions' => [
                    [
                        'question' => 'Pourquoi une crise de dette souveraine peut-elle devenir auto-réalisatrice ?',
                        'answers' => [
                            ['answer' => 'La hausse des primes de risque peut augmenter le coût de la dette, détériorer la dynamique budgétaire et renforcer la perception du risque', 'iscorrect' => true],
                            ['answer' => 'Les primes de risque diminuent toujours lorsque les investisseurs sont inquiets', 'iscorrect' => false],
                            ['answer' => 'Le coût de la dette est indépendant de la confiance', 'iscorrect' => false],
                            ['answer' => 'Une crise de dette réduit toujours immédiatement les taux souverains', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la composition des créanciers peut-elle influencer le risque souverain ?',
                        'answers' => [
                            ['answer' => 'La stabilité du financement peut différer selon qu\\'il provient d\\'investisseurs domestiques, étrangers, bancaires ou institutionnels', 'iscorrect' => true],
                            ['answer' => 'Tous les créanciers réagissent toujours de la même manière', 'iscorrect' => false],
                            ['answer' => 'La structure des créanciers n\\'affecte jamais le refinancement', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs étrangers ne peuvent jamais vendre des obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte part de dette détenue à court terme augmente-t-elle la vulnérabilité à un choc de confiance ?',
                        'answers' => [
                            ['answer' => Une grande quantité de dette doit être renouvelée rapidement alors que les investisseurs peuvent devenir réticents à prêter', 'iscorrect' => true],
                            ['answer' => 'La dette à court terme n\\'a jamais besoin d\\'être refinancée', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs renouvellent toujours automatiquement leurs titres', 'iscorrect' => false],
                            ['answer' => 'La maturité courte supprime les risques de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de consolidation trop rapide peut-elle affaiblir la soutenabilité à court terme ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire fortement l\\'activité, les recettes et la capacité de l\\'économie à absorber la dette', 'iscorrect' => true],
                            ['answer' => 'Une consolidation rapide augmente toujours la croissance', 'iscorrect' => false],
                            ['answer' => 'Les recettes fiscales sont totalement indépendantes du PIB', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques n\\'ont aucun multiplicateur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une consolidation crédible mais graduelle peut-elle être préférable dans certaines situations ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer les anticipations de soutenabilité tout en réduisant le coût macroéconomique immédiat', 'iscorrect' => true],
                            ['answer' => 'Une consolidation graduelle ne modifie jamais les anticipations', 'iscorrect' => false],
                            ['answer' => 'Une consolidation doit toujours être instantanée pour être crédible', 'iscorrect' => false],
                            ['answer' => 'Les marchés ignorent toujours la trajectoire future', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la structure des dépenses compte-t-elle pendant une consolidation ?',
                        'answers' => [
                            ['answer' => 'Réduire des dépenses productives peut affaiblir davantage la croissance future qu\\'une réduction de dépenses moins essentielles', 'iscorrect' => true],
                            ['answer' => 'Toutes les dépenses ont toujours le même rendement économique', 'iscorrect' => false],
                            ['answer' => 'Les investissements publics n\\'affectent jamais la productivité', 'iscorrect' => false],
                            ['answer' => 'La structure du budget n\\'a aucune importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chocs de taux peuvent-ils être particulièrement dangereux pour une dette élevée ?',
                        'answers' => [
                            ['answer' => 'Une petite hausse du coût moyen peut produire une augmentation importante de la charge d\\'intérêts lorsque le stock de dette est grand', 'iscorrect' => true],
                            ['answer' => 'Une dette élevée réduit toujours la sensibilité aux taux', 'iscorrect' => false],
                            ['answer' => 'Les intérêts sont indépendants du stock de dette', 'iscorrect' => false],
                            ['answer' => 'Les taux élevés diminuent toujours le service de la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'inflation peut-elle améliorer temporairement la dynamique d\\'une dette nominale à taux fixe ?',
                        'answers' => [
                            ['answer' => 'Elle réduit la valeur réelle de certains passifs nominaux tandis que le PIB nominal augmente', 'iscorrect' => true],
                            ['answer' => 'L\\'inflation augmente toujours la valeur réelle de la dette', 'iscorrect' => false],
                            ['answer' => 'La dette nominale ne dépend jamais du niveau des prix', 'iscorrect' => false],
                            ['answer' => 'Le PIB nominal diminue toujours avec l\\'inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une inflation surprise peut-elle ne pas produire le même effet sur toutes les dettes publiques ?',
                        'answers' => [
                            ['answer' => 'Les dettes diffèrent selon leur maturité, leur indexation, leur taux et leur devise de libellé', 'iscorrect' => true],
                            ['answer' => 'Toutes les obligations publiques ont toujours les mêmes caractéristiques', 'iscorrect' => false],
                            ['answer' => 'L\\'indexation n\\'a aucun effet sur les paiements futurs', 'iscorrect' => false],
                            ['answer' => 'La maturité ne change jamais l\\'exposition à l\\'inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stratégie budgétaire doit-elle intégrer les risques de scénario plutôt qu\\'une seule prévision centrale ?',
                        'answers' => [
                            ['answer' => 'Les taux, la croissance, l\\'inflation et les recettes peuvent diverger fortement de la trajectoire centrale et modifier la soutenabilité', 'iscorrect' => true],
                            ['answer' => 'Une prévision centrale est toujours certaine', 'iscorrect' => false],
                            ['answer' => 'Les scénarios alternatifs ne changent jamais les besoins budgétaires', 'iscorrect' => false],
                            ['answer' => 'Les risques macroéconomiques sont toujours symétriques et négligeables', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Advanced',
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
