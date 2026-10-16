```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class InternationalEconomicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'international-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Modèles avancés du commerce international',
                'questions' => [
                    [
                        'question' => 'Dans le modèle ricardien à deux pays et deux biens, quelle condition détermine le gain mutuel potentiel du commerce ?',
                        'answers' => [
                            ['answer' => 'Les coûts d’opportunité doivent différer entre les pays', 'iscorrect' => true],
                            ['answer' => 'Les productivités doivent être identiques dans les deux pays', 'iscorrect' => false],
                            ['answer' => 'Les taux de change doivent être fixes', 'iscorrect' => false],
                            ['answer' => 'Les pays doivent avoir exactement les mêmes ressources', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prix relatifs internationaux se situent-ils généralement entre les coûts d’opportunité domestiques dans le modèle ricardien standard ?',
                        'answers' => [
                            ['answer' => 'Sinon, au moins un pays n’aurait pas intérêt à commercer ou une seule économie capterait tout le bénéfice potentiel de la spécialisation', 'iscorrect' => true],
                            ['answer' => 'Les prix internationaux sont toujours égaux aux prix domestiques', 'iscorrect' => false],
                            ['answer' => 'Les coûts d’opportunité ne jouent aucun rôle', 'iscorrect' => false],
                            ['answer' => 'Le commerce impose nécessairement un prix unique indépendant des technologies', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle ricardien avec productivité du travail, pourquoi une productivité plus élevée dans tous les biens ne signifie-t-elle pas nécessairement qu’un pays exporte tout ?',
                        'answers' => [
                            ['answer' => Ce sont les avantages comparatifs, fondés sur les productivités relatives, qui déterminent la spécialisation', 'iscorrect' => true],
                            ['answer' => 'Les pays ne peuvent jamais avoir plusieurs avantages absolus', 'iscorrect' => false],
                            ['answer' => 'Les exportations dépendent uniquement de la taille de la population', 'iscorrect' => false],
                            ['answer' => 'La productivité ne concerne que le marché domestique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la frontière des possibilités de production dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Les combinaisons de production réalisables avant prise en compte de l’échange international', 'iscorrect' => true],
                            ['answer' => 'Toutes les combinaisons de consommation possibles après commerce', 'iscorrect' => false],
                            ['answer' => 'Le niveau du taux de change réel', 'iscorrect' => false],
                            ['answer' => 'La balance courante uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la frontière de consommation peut-elle dépasser la frontière de production après ouverture au commerce ?',
                        'answers' => [
                            ['answer' => 'Le pays peut transformer une partie de sa production en importations par l’échange international', 'iscorrect' => true],
                            ['answer' => 'La technologie domestique augmente automatiquement', 'iscorrect' => false],
                            ['answer' => 'Le pays crée des ressources physiques supplémentaires', 'iscorrect' => false],
                            ['answer' => 'La frontière de production cesse d’exister', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle à deux biens, que représente une amélioration des termes de l’échange pour le pays exportateur ?',
                        'answers' => [
                            ['answer' => 'Une hausse du prix relatif de ses exportations par rapport à ses importations', 'iscorrect' => true],
                            ['answer' => 'Une baisse du prix de toutes ses exportations', 'iscorrect' => false],
                            ['answer' => 'Une réduction nécessaire de sa productivité', 'iscorrect' => false],
                            ['answer' => 'Une dépréciation automatique de sa monnaie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une amélioration des termes de l’échange peut-elle bénéficier à un pays même sans hausse de sa productivité ?',
                        'answers' => [
                            ['answer' => Elle augmente le pouvoir d’achat international de ses exportations', 'iscorrect' => true],
                            ['answer' => Elle réduit nécessairement les ressources utilisées', 'iscorrect' => false],
                            ['answer' => Elle supprime les coûts de transport', 'iscorrect' => false],
                            ['answer' => Elle transforme les importations en exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une détérioration des termes de l’échange peut-elle réduire le revenu réel d’un pays ?',
                        'answers' => [
                            ['answer' => Une quantité donnée d’exportations permet d’obtenir moins d’importations', 'iscorrect' => true],
                            ['answer' => Les exportations deviennent automatiquement nulles', 'iscorrect' => false],
                            ['answer' => Les coûts de production domestiques disparaissent', 'iscorrect' => false],
                            ['answer' => Le pays augmente nécessairement sa productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la courbe d’offre relative mondiale est-elle importante dans un modèle à plusieurs pays ?',
                        'answers' => [
                            ['answer' => Elle permet de déterminer les prix relatifs mondiaux à l’intersection avec la demande relative mondiale', 'iscorrect' => true],
                            ['answer' => Elle détermine uniquement la quantité de monnaie mondiale', 'iscorrect' => false],
                            ['answer' => Elle remplace les frontières de production nationales', 'iscorrect' => false],
                            ['answer' => Elle mesure uniquement les importations américaines', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chocs de productivité peuvent-ils modifier les prix relatifs internationaux ?',
                        'answers' => [
                            ['answer' => Ils modifient les coûts relatifs de production et donc l’offre relative mondiale', 'iscorrect' => true],
                            ['answer' => Les prix mondiaux sont indépendants de la productivité', 'iscorrect' => false],
                            ['answer' => Une hausse de productivité réduit toujours tous les prix dans la même proportion', 'iscorrect' => false],
                            ['answer' => Les chocs de productivité n’affectent que le marché du travail', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Heckscher-Ohlin, facteurs et distribution',
                'questions' => [
                    [
                        'question' => 'Dans le modèle Heckscher-Ohlin standard, pourquoi un pays relativement abondant en travail tend-il à exporter des biens intensifs en travail ?',
                        'answers' => [
                            ['answer' => 'L’abondance relative du travail tend à rendre son prix relatif plus faible, ce qui réduit le coût des biens intensifs en travail', 'iscorrect' => true],
                            ['answer' => 'Le travail est toujours plus productif dans tous les pays', 'iscorrect' => false],
                            ['answer' => 'Les biens intensifs en travail sont toujours plus chers', 'iscorrect' => false],
                            ['answer' => 'Le capital n’a aucun rôle dans la production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme relie les dotations factorielles aux avantages comparatifs dans Heckscher-Ohlin ?',
                        'answers' => [
                            ['answer' => Les dotations influencent les prix relatifs des facteurs et donc les coûts relatifs des biens', 'iscorrect' => true],
                            ['answer' => 'Les dotations déterminent directement les préférences mondiales', 'iscorrect' => false],
                            ['answer' => 'Les dotations ne changent jamais les coûts', 'iscorrect' => false],
                            ['answer' => 'Les facteurs ne peuvent jamais être substitués', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que prévoit intuitivement le théorème de Stolper-Samuelson ?',
                        'answers' => [
                            ['answer' => 'Une hausse du prix relatif d’un bien favorise le facteur utilisé intensivement dans sa production', 'iscorrect' => true],
                            ['answer' => 'Tous les facteurs bénéficient toujours du commerce de la même manière', 'iscorrect' => false],
                            ['answer' => 'Les prix des biens n’ont aucun effet sur les salaires réels', 'iscorrect' => false],
                            ['answer' => 'Le commerce ne peut jamais modifier la distribution des revenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le commerce peut-il augmenter les inégalités dans certains pays ?',
                        'answers' => [
                            ['answer' => L’ouverture peut augmenter la rémunération réelle du facteur abondant tout en réduisant celle du facteur rare selon le modèle', 'iscorrect' => true],
                            ['answer' => 'Le commerce réduit toujours tous les salaires', 'iscorrect' => false],
                            ['answer' => 'Les revenus sont indépendants des prix relatifs', 'iscorrect' => false],
                            ['answer' => 'Les facteurs sont toujours rémunérés identiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le paradoxe de Leontief est-il important pour l’analyse du commerce ?',
                        'answers' => [
                            ['answer' => 'Il montre qu’un résultat empirique peut contredire les prédictions simples d’un modèle théorique et conduire à rechercher des explications supplémentaires', 'iscorrect' => true],
                            ['answer' => 'Il prouve définitivement que Heckscher-Ohlin est inutile', 'iscorrect' => false],
                            ['answer' => 'Il montre que les facteurs n’existent pas', 'iscorrect' => false],
                            ['answer' => 'Il démontre que tous les échanges sont déterminés par le taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les différences de capital humain peuvent-elles compléter l’analyse de Heckscher-Ohlin ?',
                        'answers' => [
                            ['answer' => 'Les compétences peuvent être considérées comme une dotation factorielle influençant la structure des avantages comparatifs', 'iscorrect' => true],
                            ['answer' => 'Le capital humain est indépendant de toute production', 'iscorrect' => false],
                            ['answer' => 'Les compétences n’affectent jamais les salaires', 'iscorrect' => false],
                            ['answer' => 'Le capital humain ne peut pas être accumulé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les résultats de Heckscher-Ohlin peuvent-ils dépendre des hypothèses de mobilité des facteurs ?',
                        'answers' => [
                            ['answer' => Les effets distributifs supposent certaines possibilités d’ajustement des facteurs entre secteurs', 'iscorrect' => true],
                            ['answer' => Les facteurs sont toujours parfaitement immobiles', 'iscorrect' => false],
                            ['answer' => La mobilité des facteurs n’a aucun effet sur les coûts', 'iscorrect' => false],
                            ['answer' => Les secteurs utilisent toujours les mêmes facteurs dans les mêmes proportions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’égalisation internationale des prix des facteurs est-elle plus forte dans le modèle théorique que dans la réalité ?',
                        'answers' => [
                            ['answer' => Les coûts de transport, barrières commerciales et différences technologiques limitent l’intégration complète des marchés', 'iscorrect' => true],
                            ['answer' => Tous les pays ont exactement les mêmes dotations', 'iscorrect' => false],
                            ['answer' => Les facteurs sont totalement immobiles mondialement', 'iscorrect' => false],
                            ['answer' => Les marchés internationaux sont sans aucune friction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les différences de technologie peuvent-elles expliquer certains échanges non expliqués par les seules dotations factorielles ?',
                        'answers' => [
                            ['answer' => Des productivités différentes peuvent modifier les coûts unitaires même avec des dotations similaires', 'iscorrect' => true],
                            ['answer' => La technologie ne change jamais la productivité', 'iscorrect' => false],
                            ['answer' => Les technologies sont nécessairement identiques', 'iscorrect' => false],
                            ['answer' => La productivité n’a aucun lien avec l’avantage comparatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles modernes combinent-ils parfois avantages comparatifs et économies d’échelle ?',
                        'answers' => [
                            ['answer' => Les échanges réels reflètent à la fois des différences de coûts relatifs et des gains liés à la production à grande échelle', 'iscorrect' => true],
                            ['answer' => Les deux mécanismes sont incompatibles par définition', 'iscorrect' => false],
                            ['answer' => 'Les économies d’échelle remplacent entièrement l’avantage comparatif', 'iscorrect' => false],
                            ['answer' => 'Les avantages comparatifs existent uniquement lorsque les économies d’échelle sont nulles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Nouvelle théorie du commerce',
                'questions' => [
                    [
                        'question' => 'Pourquoi les économies d’échelle internes peuvent-elles favoriser la concentration géographique de la production ?',
                        'answers' => [
                            ['answer' => 'Les coûts moyens diminuent avec l’échelle, ce qui peut inciter les entreprises à servir plusieurs marchés depuis un nombre limité de sites', 'iscorrect' => true],
                            ['answer' => 'Les coûts fixes augmentent toujours avec la production', 'iscorrect' => false],
                            ['answer' => 'La production à grande échelle réduit toujours la demande', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne peuvent jamais exporter depuis un seul site', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la différenciation horizontale des produits ?',
                        'answers' => [
                            ['answer' => 'Une différenciation fondée sur des variétés différentes sans classement simple de qualité', 'iscorrect' => true],
                            ['answer' => 'Une différence uniquement liée au prix', 'iscorrect' => false],
                            ['answer' => 'Une différenciation qui classe toujours les biens du pire au meilleur', 'iscorrect' => false],
                            ['answer' => 'Une différence entre capital et travail', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le modèle de concurrence monopolistique peut-il générer du commerce intra-industrie ?',
                        'answers' => [
                            ['answer' => 'Les consommateurs demandent des variétés différenciées et les entreprises exploitent des économies d’échelle', 'iscorrect' => true],
                            ['answer' => 'Les pays doivent avoir des dotations totalement opposées', 'iscorrect' => false],
                            ['answer' => 'Le commerce intra-industrie exige une interdiction des importations', 'iscorrect' => false],
                            ['answer' => 'Les entreprises produisent toutes exactement le même bien', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ouverture commerciale peut-elle augmenter la variété des produits disponibles ?',
                        'answers' => [
                            ['answer' => 'Les consommateurs peuvent accéder aux variétés domestiques et étrangères', 'iscorrect' => true],
                            ['answer' => 'L’ouverture élimine les variétés locales', 'iscorrect' => false],
                            ['answer' => 'Les importations sont toutes parfaitement identiques', 'iscorrect' => false],
                            ['answer' => 'La variété dépend uniquement de la politique monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la libéralisation peut-elle réduire le prix moyen dans un secteur à rendements croissants ?',
                        'answers' => [
                            ['answer' => 'L’élargissement du marché permet aux entreprises d’augmenter leur production et de réduire leurs coûts moyens', 'iscorrect' => true],
                            ['answer' => 'Les coûts fixes disparaissent juridiquement', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs cessent d’acheter', 'iscorrect' => false],
                            ['answer' => 'Les économies d’échelle augmentent toujours les coûts moyens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rendements croissants peuvent-ils créer un rôle stratégique pour la politique commerciale ?',
                        'answers' => [
                            ['answer' => 'Dans certains modèles, une politique peut déplacer des profits ou avantages vers les entreprises nationales, mais les effets dépendent fortement des hypothèses', 'iscorrect' => true],
                            ['answer' => 'Les rendements croissants garantissent toujours un gain national avec une protection', 'iscorrect' => false],
                            ['answer' => 'Une politique commerciale ne peut jamais modifier les profits', 'iscorrect' => false],
                            ['answer' => 'Les économies d’échelle rendent les gouvernements inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets pro-concurrentiels du commerce peuvent-ils être importants même sans avantage comparatif classique ?',
                        'answers' => [
                            ['answer' => L’entrée de concurrents étrangers peut réduire le pouvoir de marché et accroître l’efficacité productive', 'iscorrect' => true],
                            ['answer' => 'La concurrence réduit toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Les marchés ouverts suppriment toute économie d’échelle', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne bénéficient jamais d’une baisse des marges', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le lien entre accès au marché et économies d’échelle ?',
                        'answers' => [
                            ['answer' => 'Un marché plus vaste permet de répartir certains coûts fixes sur davantage d’unités', 'iscorrect' => true],
                            ['answer' => 'Un marché plus vaste augmente toujours le coût moyen', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes sont indépendants de l’échelle', 'iscorrect' => false],
                            ['answer' => 'L’accès au marché n’a aucun effet sur la taille de production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises les plus productives peuvent-elles gagner des parts de marché avec l’ouverture internationale ?',
                        'answers' => [
                            ['answer' => Elles peuvent mieux supporter les coûts fixes d’entrée sur les marchés étrangers et leurs coûts unitaires plus faibles renforcent leur compétitivité', 'iscorrect' => true],
                            ['answer' => 'Les entreprises moins productives exportent toujours davantage', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes disparaissent pour toutes les entreprises', 'iscorrect' => false],
                            ['answer' => 'L’ouverture réduit toujours la concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sélection des entreprises par l’ouverture peut-elle augmenter la productivité moyenne d’un secteur ?',
                        'answers' => [
                            ['answer' => Les entreprises les plus efficaces peuvent se développer tandis que les moins productives perdent des parts de marché ou sortent', 'iscorrect' => true],
                            ['answer' => 'Les entreprises inefficaces deviennent automatiquement productives', 'iscorrect' => false],
                            ['answer' => 'La productivité moyenne ne dépend jamais de la structure des entreprises', 'iscorrect' => false],
                            ['answer' => 'L’ouverture élimine toujours les entreprises les plus productives', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique commerciale avancée',
                'questions' => [
                    [
                        'question' => Pourquoi un grand pays peut-il avoir un intérêt stratégique à imposer un tarif dans certains modèles ?',
                        'answers' => [
                            ['answer' => 'Il peut influencer le prix mondial à l’importation et améliorer potentiellement ses termes de l’échange', 'iscorrect' => true],
                            ['answer' => 'Un grand pays ne peut jamais influencer les prix mondiaux', 'iscorrect' => false],
                            ['answer' => 'Le tarif réduit nécessairement les recettes publiques', 'iscorrect' => false],
                            ['answer' => 'Le tarif augmente toujours le bien-être mondial', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un tarif optimal n’implique-t-il pas nécessairement une politique commerciale protectionniste généralisée ?',
                        'answers' => [
                            ['answer' => Son existence dépend d’un pouvoir de marché externe spécifique et peut déclencher des représailles ou des coûts internes', 'iscorrect' => true],
                            ['answer' => 'Tout tarif améliore toujours le bien-être national', 'iscorrect' => false],
                            ['answer' => 'Les représailles sont impossibles', 'iscorrect' => false],
                            ['answer' => 'Les tarifs sont sans coût pour les consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quel est le risque principal d’une guerre commerciale entre deux grands pays ?',
                        'answers' => [
                            ['answer' => 'Les mesures de représailles peuvent réduire mutuellement les échanges et le bien-être', 'iscorrect' => true],
                            ['answer' => 'Les deux pays bénéficient nécessairement de tous les tarifs', 'iscorrect' => false],
                            ['answer' => 'Les prix domestiques diminuent toujours', 'iscorrect' => false],
                            ['answer' => 'Les échanges mondiaux augmentent automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les tarifs sur les intrants peuvent-ils nuire aux exportateurs domestiques ?',
                        'answers' => [
                            ['answer' => 'Ils augmentent le coût des composants importés et peuvent réduire la compétitivité internationale des producteurs locaux', 'iscorrect' => true],
                            ['answer' => 'Les exportateurs n’utilisent jamais d’intrants importés', 'iscorrect' => false],
                            ['answer' => 'Les tarifs réduisent toujours les coûts de production', 'iscorrect' => false],
                            ['answer' => 'Les intrants importés sont toujours substituables sans coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une subvention à l’exportation peut-elle augmenter les exportations tout en réduisant le bien-être national dans un modèle simple ?',
                        'answers' => [
                            ['answer' => Elle peut accroître les ventes à l’étranger tout en créant un coût budgétaire et des distorsions domestiques', 'iscorrect' => true],
                            ['answer' => 'Une subvention à l’exportation n’a aucun coût pour le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours les prix domestiques sans autre effet', 'iscorrect' => false],
                            ['answer' => 'Les exportations diminuent nécessairement avec une subvention', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quel est le principal problème d’une restriction volontaire des exportations par rapport à un tarif classique ?',
                        'answers' => [
                            ['answer' => 'La rente créée par la restriction peut être captée par les producteurs étrangers plutôt que par le gouvernement domestique', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours davantage de recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement le bien-être mondial', 'iscorrect' => false],
                            ['answer' => 'Elle ne modifie jamais le prix intérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les barrières non tarifaires peuvent-elles être plus difficiles à analyser qu’un tarif ?',
                        'answers' => [
                            ['answer' => Leur impact peut passer par des normes, procédures, quotas, licences ou coûts de conformité difficiles à mesurer', 'iscorrect' => true],
                            ['answer' => Elles sont toujours exprimées en monnaie', 'iscorrect' => false],
                            ['answer' => Elles n’ont jamais d’effet quantitatif', 'iscorrect' => false],
                            ['answer' => Elles sont toujours transparentes pour les consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la protection d’une industrie en amont peut-elle pénaliser une industrie en aval ?',
                        'answers' => [
                            ['answer' => Les intrants protégés peuvent devenir plus chers pour les entreprises qui les utilisent', 'iscorrect' => true],
                            ['answer' => 'Les industries en aval n’utilisent jamais d’intrants', 'iscorrect' => false],
                            ['answer' => 'La protection réduit toujours tous les coûts intermédiaires', 'iscorrect' => false],
                            ['answer' => 'Les chaînes de production sont toujours indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les accords commerciaux peuvent-ils limiter l’utilisation future de barrières commerciales ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent créer des engagements juridiquement ou politiquement contraignants qui réduisent l’incertitude des partenaires', 'iscorrect' => true],
                            ['answer' => 'Ils obligent toujours tous les pays à adopter le même système politique', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment automatiquement les gouvernements nationaux', 'iscorrect' => false],
                            ['answer' => 'Ils rendent les politiques commerciales inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les règles d’origine sont-elles importantes dans une zone de libre-échange ?',
                        'answers' => [
                            ['answer' => 'Elles déterminent quelles marchandises peuvent bénéficier des préférences commerciales accordées aux membres', 'iscorrect' => true],
                            ['answer' => 'Elles déterminent uniquement le taux de change', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les statistiques douanières', 'iscorrect' => false],
                            ['answer' => 'Elles interdisent tous les échanges avec les pays tiers', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Taux de change, balance courante et ajustement externe',
                'questions' => [
                    [
                        'question' => Pourquoi une dépréciation réelle peut-elle contribuer à réduire un déficit courant dans certaines conditions ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer la compétitivité-prix et déplacer les dépenses vers les biens domestiques, si les élasticités sont suffisantes', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation réduit toujours les exportations', 'iscorrect' => false],
                            ['answer' => 'Les volumes ne réagissent jamais aux prix', 'iscorrect' => false],
                            ['answer' => 'Le compte courant dépend uniquement des dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce que la condition de Marshall-Lerner suggère intuitivement ?',
                        'answers' => [
                            ['answer' => 'Une dépréciation améliore le solde commercial lorsque la somme des élasticités-prix absolues des exportations et importations dépasse une certaine condition', 'iscorrect' => true],
                            ['answer' => 'Toute dépréciation améliore toujours immédiatement le solde commercial', 'iscorrect' => false],
                            ['answer' => 'Les élasticités n’ont aucun rôle dans le commerce', 'iscorrect' => false],
                            ['answer' => 'Les importations deviennent toujours nulles après dépréciation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’effet initial d’une dépréciation peut-il être défavorable au solde commercial ?',
                        'answers' => [
                            ['answer' => Les prix des importations peuvent augmenter en monnaie nationale avant que les volumes ne s’ajustent suffisamment', 'iscorrect' => true],
                            ['answer' => Les exportations augmentent toujours instantanément', 'iscorrect' => false],
                            ['answer' => Les importations deviennent immédiatement nulles', 'iscorrect' => false],
                            ['answer' => 'Les contrats commerciaux sont toujours instantanément révisés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’effet d’une dépréciation sur le compte courant dépend-il de la structure des importations ?',
                        'answers' => [
                            ['answer' => Une forte dépendance à des intrants importés peut augmenter les coûts domestiques et limiter l’amélioration du solde', 'iscorrect' => true],
                            ['answer' => 'Les importations intermédiaires n’ont jamais d’impact sur les exportations', 'iscorrect' => false],
                            ['answer' => 'Toutes les importations sont des biens de consommation', 'iscorrect' => false],
                            ['answer' => 'Les exportations n’utilisent jamais d’intrants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une monnaie peut-elle rester sous pression malgré un excédent commercial ?',
                        'answers' => [
                            ['answer' => Les sorties de capitaux ou autres flux financiers peuvent compenser les entrées nettes liées au commerce', 'iscorrect' => true],
                            ['answer' => Un excédent commercial interdit les sorties de capitaux', 'iscorrect' => false],
                            ['answer' => Les mouvements financiers n’ont aucun lien avec le taux de change', 'iscorrect' => false],
                            ['answer' => Les réserves de change sont toujours nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les mouvements de capitaux peuvent-ils provoquer une appréciation même sans amélioration du commerce ?',
                        'answers' => [
                            ['answer' => Une forte demande d’actifs domestiques peut accroître la demande de monnaie nationale', 'iscorrect' => true],
                            ['answer' => Les actifs ne sont jamais achetés en monnaie locale', 'iscorrect' => false],
                            ['answer' => Le taux de change dépend uniquement des exportations', 'iscorrect' => false],
                            ['answer' => Les flux financiers n’affectent jamais les devises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une appréciation peut-elle réduire certaines exportations mais stimuler les importations ?',
                        'answers' => [
                            ['answer' => Les biens étrangers deviennent relativement moins chers en monnaie domestique tandis que les biens domestiques deviennent plus chers pour les étrangers', 'iscorrect' => true],
                            ['answer' => Les exportations et importations réagissent toujours dans la même direction', 'iscorrect' => false],
                            ['answer' => L’appréciation n’affecte que les services', 'iscorrect' => false],
                            ['answer' => Les prix relatifs ne changent pas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les déséquilibres externes peuvent-ils être soutenables pendant plusieurs années ?',
                        'answers' => [
                            ['answer' => L’accès à des financements extérieurs et les anticipations de rendement peuvent permettre leur maintien tant que les créanciers restent disposés à financer l’économie', 'iscorrect' => true],
                            ['answer' => Les déficits externes sont toujours sans contrainte', 'iscorrect' => false],
                            ['answer' => Les pays ne remboursent jamais leurs engagements', 'iscorrect' => false],
                            ['answer' => Le compte courant n’a aucune relation avec le financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un retournement soudain des flux de capitaux peut-il provoquer une crise externe ?',
                        'answers' => [
                            ['answer' => La demande de devises étrangères peut exploser tandis que le financement extérieur se contracte rapidement', 'iscorrect' => true],
                            ['answer' => Les réserves augmentent automatiquement', 'iscorrect' => false],
                            ['answer' => Les sorties de capitaux n’affectent jamais la monnaie', 'iscorrect' => false],
                            ['answer' => Le déficit courant disparaît toujours instantanément sans coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la composition des réserves internationales est-elle importante en période de tension externe ?',
                        'answers' => [
                            ['answer' => Les actifs liquides en devises doivent être utilisables rapidement pour répondre aux besoins de financement et d’intervention', 'iscorrect' => true],
                            ['answer' => Toutes les réserves ont exactement la même liquidité', 'iscorrect' => false],
                            ['answer' => Les réserves servent uniquement à financer le budget public', 'iscorrect' => false],
                            ['answer' => La liquidité n’a aucun rôle dans une crise', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie monétaire internationale et politique macroéconomique',
                'questions' => [
                    [
                        'question' => Pourquoi une banque centrale ayant un taux de change fixe peut-elle perdre de l’autonomie monétaire ?',
                        'answers' => [
                            ['answer' => 'Elle doit souvent ajuster sa politique pour défendre la parité et tenir compte des mouvements internationaux de capitaux', 'iscorrect' => true],
                            ['answer' => 'Un taux fixe ne nécessite jamais d’intervention', 'iscorrect' => false],
                            ['answer' => 'La banque centrale peut fixer librement tous les taux sans contrainte', 'iscorrect' => false],
                            ['answer' => 'Les capitaux internationaux sont toujours immobiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’exprime intuitivement le « triangle d’incompatibilité » ?',
                        'answers' => [
                            ['answer' => 'La difficulté de combiner simultanément change fixe, libre mobilité des capitaux et politique monétaire autonome', 'iscorrect' => true],
                            ['answer' => 'L’impossibilité du commerce entre trois pays', 'iscorrect' => false],
                            ['answer' => 'Une relation entre trois taux d’inflation', 'iscorrect' => false],
                            ['answer' => 'Une règle concernant uniquement les tarifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un pays peut-il choisir un régime de change flexible ?',
                        'answers' => [
                            ['answer' => 'Pour laisser le taux de change absorber une partie des chocs externes et préserver davantage d’autonomie monétaire', 'iscorrect' => true],
                            ['answer' => 'Pour empêcher tout ajustement du taux de change', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer le marché des devises', 'iscorrect' => false],
                            ['answer' => 'Pour garantir un taux de change constant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un taux de change flexible peut-il augmenter la volatilité nominale ?',
                        'answers' => [
                            ['answer' => Le prix de la monnaie peut varier en réponse aux chocs économiques et financiers', 'iscorrect' => true],
                            ['answer' => La monnaie devient nécessairement stable', 'iscorrect' => false],
                            ['answer' => Les marchés de change cessent de fonctionner', 'iscorrect' => false],
                            ['answer' => Les taux d’intérêt deviennent toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse du taux directeur peut-elle apprécier la monnaie à court terme dans certains modèles ?',
                        'answers' => [
                            ['answer' => Elle peut augmenter l’attractivité relative des actifs domestiques et donc la demande de monnaie', 'iscorrect' => true],
                            ['answer' => Une hausse des taux réduit toujours l’épargne étrangère', 'iscorrect' => false],
                            ['answer' => Les taux d’intérêt ne concernent pas les actifs internationaux', 'iscorrect' => false],
                            ['answer' => Une hausse des taux provoque nécessairement une dépréciation immédiate', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations d’inflation peuvent-elles affecter le taux de change ?',
                        'answers' => [
                            ['answer' => Elles influencent les rendements réels attendus et donc l’attractivité relative des actifs libellés dans différentes monnaies', 'iscorrect' => true],
                            ['answer' => L’inflation anticipée n’a aucun effet sur les actifs', 'iscorrect' => false],
                            ['answer' => Les investisseurs ignorent systématiquement l’inflation future', 'iscorrect' => false],
                            ['answer' => Les taux de change sont indépendants des rendements relatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique monétaire expansionniste peut-elle entraîner une dépréciation dans certains modèles à court terme ?',
                        'answers' => [
                            ['answer' => Une baisse des taux et une augmentation de la liquidité peuvent réduire l’attractivité relative des actifs domestiques', 'iscorrect' => true],
                            ['answer' => Une politique expansionniste augmente toujours immédiatement les exportations', 'iscorrect' => false],
                            ['answer' => La liquidité n’a aucun effet sur les marchés financiers', 'iscorrect' => false],
                            ['answer' => Une expansion monétaire rend toujours la monnaie plus rare', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’ajustement du taux de change réel peut-il être lent après un choc nominal ?',
                        'answers' => [
                            ['answer' => Les prix et salaires domestiques peuvent être rigides et s’ajuster progressivement', 'iscorrect' => true],
                            ['answer' => Les prix sont toujours parfaitement flexibles instantanément', 'iscorrect' => false],
                            ['answer' => Le taux de change nominal est toujours fixe', 'iscorrect' => false],
                            ['answer' => Les marchés du travail n’ont aucun rôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les chocs financiers internationaux peuvent-ils amplifier les cycles domestiques ?',
                        'answers' => [
                            ['answer' => Les mouvements de capitaux peuvent modifier rapidement les taux, le crédit, la monnaie et les conditions de financement', 'iscorrect' => true],
                            ['answer' => Les marchés financiers internationaux sont toujours isolés des économies domestiques', 'iscorrect' => false],
                            ['answer' => Le crédit ne dépend jamais des capitaux étrangers', 'iscorrect' => false],
                            ['answer' => Les flux financiers évoluent toujours lentement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale peut-elle intervenir sur le marché des changes sous un régime flexible ?',
                        'answers' => [
                            ['answer' => Même avec un flottement, elle peut chercher à limiter certains mouvements excessifs ou à atteindre certains objectifs de politique économique', 'iscorrect' => true],
                            ['answer' => Un flottement interdit toute intervention par définition', 'iscorrect' => false],
                            ['answer' => Une banque centrale n’a jamais accès aux devises', 'iscorrect' => false],
                            ['answer' => Toute intervention fixe automatiquement la monnaie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Investissement international et marchés des capitaux',
                'questions' => [
                    [
                        'question' => Pourquoi les investisseurs diversifient-ils internationalement leurs portefeuilles ?',
                        'answers' => [
                            ['answer' => 'Pour exploiter des différences de rendement et de risque et réduire certains risques spécifiques lorsque les rendements ne sont pas parfaitement corrélés', 'iscorrect' => true],
                            ['answer' => 'Parce que les marchés étrangers sont toujours moins risqués', 'iscorrect' => false],
                            ['answer' => 'Parce que la diversification élimine tout risque de change', 'iscorrect' => false],
                            ['answer' => 'Parce que tous les pays ont les mêmes cycles financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le taux de change doit-il être intégré au rendement d’un investissement étranger ?',
                        'answers' => [
                            ['answer' => Le rendement de l’actif dans la devise étrangère doit être converti dans la monnaie de l’investisseur', 'iscorrect' => true],
                            ['answer' => Les actifs étrangers ont toujours le même rendement en monnaie domestique', 'iscorrect' => false],
                            ['answer' => Le change n’a aucun effet sur les gains', 'iscorrect' => false],
                            ['answer' => Les investisseurs ignorent toujours les conversions de devise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un investissement direct étranger peut-il être plus stable qu’un investissement de portefeuille dans certains contextes ?',
                        'answers' => [
                            ['answer' => 'Il peut refléter un engagement de long terme dans des actifs productifs plutôt qu’un simple arbitrage financier liquide', 'iscorrect' => true],
                            ['answer' => 'Les investissements directs ne comportent jamais de risque', 'iscorrect' => false],
                            ['answer' => 'Les investissements de portefeuille sont toujours illiquides', 'iscorrect' => false],
                            ['answer' => 'Les IDE ne dépendent jamais du contexte politique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les contrôles sur les capitaux peuvent-ils modifier le fonctionnement d’un marché financier international ?',
                        'answers' => [
                            ['answer' => Ils peuvent limiter certaines entrées ou sorties de capitaux et modifier les arbitrages internationaux', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent toujours la mobilité des capitaux', 'iscorrect' => false],
                            ['answer' => 'Ils n’affectent jamais le prix des actifs', 'iscorrect' => false],
                            ['answer' => 'Ils rendent les marchés parfaitement intégrés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les taux d’intérêt domestiques et étrangers peuvent-ils influencer les flux de capitaux ?',
                        'answers' => [
                            ['answer' => Les investisseurs comparent les rendements attendus après prise en compte du risque et du change', 'iscorrect' => true],
                            ['answer' => Les rendements relatifs n’ont aucun rôle', 'iscorrect' => false],
                            ['answer' => Les investisseurs comparent uniquement les salaires', 'iscorrect' => false],
                            ['answer' => Les taux d’intérêt sont toujours égaux mondialement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le risque souverain peut-il modifier le coût du financement international ?',
                        'answers' => [
                            ['answer' => Un risque perçu plus élevé peut pousser les investisseurs à exiger une prime de rendement plus importante', 'iscorrect' => true],
                            ['answer' => Le risque réduit toujours les rendements exigés', 'iscorrect' => false],
                            ['answer' => Les investisseurs ignorent toujours le risque politique', 'iscorrect' => false],
                            ['answer' => Les primes de risque sont toujours nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les crises bancaires peuvent-elles avoir une dimension internationale ?',
                        'answers' => [
                            ['answer' => Les banques détiennent des actifs et passifs transfrontaliers et sont reliées par les marchés financiers internationaux', 'iscorrect' => true],
                            ['answer' => Les banques sont toujours entièrement isolées des marchés étrangers', 'iscorrect' => false],
                            ['answer' => Les crises bancaires ne concernent jamais les devises', 'iscorrect' => false],
                            ['answer' => Les flux financiers internationaux cessent avant toute crise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les écarts de rendement peuvent-ils persister même avec une forte mobilité des capitaux ?',
                        'answers' => [
                            ['answer' => Les différences de risque, de liquidité, de fiscalité et d’anticipations peuvent compenser les différences de taux', 'iscorrect' => true],
                            ['answer' => Les investisseurs ignorent toujours les risques', 'iscorrect' => false],
                            ['answer' => Les marchés sont toujours parfaitement identiques', 'iscorrect' => false],
                            ['answer' => La mobilité des capitaux garantit l’égalité des rendements nominaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse du risque mondial peut-elle provoquer des sorties de capitaux des économies émergentes ?',
                        'answers' => [
                            ['answer' => Les investisseurs peuvent rechercher des actifs perçus comme plus sûrs, réduisant les flux vers les marchés plus risqués', 'iscorrect' => true],
                            ['answer' => Le risque mondial réduit toujours la demande d’actifs sûrs', 'iscorrect' => false],
                            ['answer' => Les investisseurs restent toujours dans les mêmes actifs', 'iscorrect' => false],
                            ['answer' => Les économies émergentes deviennent automatiquement plus attractives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la stabilité financière internationale dépend-elle aussi de la liquidité en devises ?',
                        'answers' => [
                            ['answer' => Les institutions endettées en monnaie étrangère peuvent avoir besoin rapidement de devises pour honorer leurs engagements', 'iscorrect' => true],
                            ['answer' => Les dettes en devises sont toujours indépendantes de la liquidité', 'iscorrect' => false],
                            ['answer' => Les banques centrales n’ont aucun rôle dans la liquidité internationale', 'iscorrect' => false],
                            ['answer' => Une pénurie de devises n’a jamais d’effet sur les marchés', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Commerce, environnement et politique économique',
                'questions' => [
                    [
                        'question' => Pourquoi le commerce peut-il générer des effets environnementaux indirects ?',
                        'answers' => [
                            ['answer' => L’augmentation de la production et des transports peut modifier les émissions, tandis que la spécialisation peut déplacer l’activité entre pays', 'iscorrect' => true],
                            ['answer' => 'Le commerce n’a jamais d’effet environnemental', 'iscorrect' => false],
                            ['answer' => 'Les émissions sont indépendantes de la production', 'iscorrect' => false],
                            ['answer' => 'Les transports internationaux n’utilisent aucune énergie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’ouverture commerciale peut-elle produire un effet d’échelle sur l’environnement ?',
                        'answers' => [
                            ['answer' => Une plus grande activité économique peut accroître la production totale et donc certaines pressions environnementales', 'iscorrect' => true],
                            ['answer' => 'Une économie plus grande réduit nécessairement toutes les émissions', 'iscorrect' => false],
                            ['answer' => 'L’ouverture réduit toujours la production', 'iscorrect' => false],
                            ['answer' => 'L’effet d’échelle concerne uniquement les finances publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce que la fuite de carbone ?',
                        'answers' => [
                            ['answer' => 'Le déplacement d’activités émettrices vers des pays où les contraintes climatiques sont plus faibles', 'iscorrect' => true],
                            ['answer' => 'Une baisse mondiale des émissions', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur les exportations', 'iscorrect' => false],
                            ['answer' => 'Une baisse du commerce de services', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une taxe carbone aux frontières peut-elle être discutée dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Elle peut viser à réduire les écarts de coûts liés aux politiques climatiques entre producteurs domestiques et étrangers', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toutes les émissions mondiales automatiquement', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toujours toute politique climatique intérieure', 'iscorrect' => false],
                            ['answer' => 'Elle interdit nécessairement toutes les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les ressources naturelles peuvent-elles créer une dépendance commerciale ?',
                        'answers' => [
                            ['answer' => Une forte concentration des exportations peut exposer les recettes extérieures aux fluctuations des prix mondiaux', 'iscorrect' => true],
                            ['answer' => 'Les ressources naturelles ont des prix toujours fixes', 'iscorrect' => false],
                            ['answer' => 'Les économies de ressources ne peuvent jamais exporter', 'iscorrect' => false],
                            ['answer' => 'La concentration réduit toujours la volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la rente des ressources peut-elle poser des problèmes de gouvernance ?',
                        'answers' => [
                            ['answer' => 'Une forte rente concentrée peut augmenter les incitations à la captation politique des ressources', 'iscorrect' => true],
                            ['answer' => 'Les rentes éliminent toujours les conflits politiques', 'iscorrect' => false],
                            ['answer' => 'Les recettes de ressources sont toujours distribuées uniformément', 'iscorrect' => false],
                            ['answer' => 'Les ressources naturelles n’ont aucune valeur fiscale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la diversification économique est-elle souvent recommandée aux économies dépendantes des matières premières ?',
                        'answers' => [
                            ['answer' => Elle peut réduire l’exposition aux cycles de prix d’un seul produit et soutenir une croissance plus stable', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une hausse des prix', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les besoins en capital humain', 'iscorrect' => false],
                            ['answer' => 'Elle réduit nécessairement toutes les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les politiques commerciales peuvent-elles avoir des effets redistributifs importants dans les économies ouvertes ?',
                        'answers' => [
                            ['answer' => Elles modifient les prix relatifs, la demande de facteurs et les opportunités d’emploi selon les secteurs', 'iscorrect' => true],
                            ['answer' => 'Tous les secteurs utilisent les mêmes facteurs dans les mêmes proportions', 'iscorrect' => false],
                            ['answer' => 'Le commerce ne modifie jamais la demande de travail', 'iscorrect' => false],
                            ['answer' => 'Les politiques commerciales affectent uniquement les recettes publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les politiques d’ajustement accompagnant l’ouverture commerciale peuvent-elles être économiquement utiles ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent réduire les coûts temporaires supportés par les travailleurs et secteurs exposés à une réallocation des ressources', 'iscorrect' => true],
                            ['answer' => 'Elles empêchent toute spécialisation', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les échanges toujours non rentables', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment les gains potentiels du commerce par définition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la politique commerciale doit-elle être analysée avec la politique domestique ?',
                        'answers' => [
                            ['answer' => 'Les effets du commerce sur les revenus et l’emploi dépendent aussi des institutions fiscales, sociales et du marché du travail', 'iscorrect' => true],
                            ['answer' => 'Les politiques domestiques n’ont aucun effet sur l’ouverture', 'iscorrect' => false],
                            ['answer' => 'Le commerce détermine automatiquement toutes les politiques nationales', 'iscorrect' => false],
                            ['answer' => 'Les marchés du travail sont toujours parfaitement flexibles', 'iscorrect' => false],
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

                // Réponses randomisées : la bonne réponse n'est jamais forcée à la première position.
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
