```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MicroeconomicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'microeconomics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Choix du consommateur et contrainte budgétaire',
                'questions' => [
                    [
                        'question' => 'Que représente une contrainte budgétaire ?',
                        'answers' => [
                            ['answer' => 'L\'ensemble des paniers de biens qu\'un consommateur peut acheter compte tenu de son revenu et des prix', 'iscorrect' => true],
                            ['answer' => 'L\'ensemble des paniers que le consommateur préfère nécessairement', 'iscorrect' => false],
                            ['answer' => 'La quantité produite par une entreprise', 'iscorrect' => false],
                            ['answer' => 'Le montant total des impôts d\'un pays', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement avec la droite budgétaire lorsque le revenu du consommateur augmente et que les prix restent constants ?',
                        'answers' => [
                            ['answer' => 'Elle se déplace parallèlement vers l\'extérieur', 'iscorrect' => true],
                            ['answer' => 'Elle devient nécessairement plus pentue', 'iscorrect' => false],
                            ['answer' => 'Elle se déplace vers l\'origine', 'iscorrect' => false],
                            ['answer' => 'Elle devient verticale dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du prix du bien X, toutes choses égales par ailleurs, entraîne généralement :',
                        'answers' => [
                            ['answer' => 'Une réduction de la quantité maximale de X que le consommateur peut acheter', 'iscorrect' => true],
                            ['answer' => 'Une augmentation du revenu réel du consommateur', 'iscorrect' => false],
                            ['answer' => 'Une augmentation automatique de la quantité maximale de Y', 'iscorrect' => false],
                            ['answer' => 'Aucun changement de la contrainte budgétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la pente de la contrainte budgétaire reflète-t-elle un coût d\'opportunité ?',
                        'answers' => [
                            ['answer' => Elle indique la quantité d\'un bien à laquelle il faut renoncer pour obtenir davantage de l\'autre, compte tenu des prix', 'iscorrect' => true],
                            ['answer' => 'Elle mesure directement l\'utilité marginale', 'iscorrect' => false],
                            ['answer' => 'Elle mesure le coût total de production', 'iscorrect' => false],
                            ['answer' => 'Elle représente le niveau général des salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une courbe d\'indifférence ?',
                        'answers' => [
                            ['answer' => 'Un ensemble de paniers procurant au consommateur un niveau d\'utilité identique', 'iscorrect' => true],
                            ['answer' => 'Un ensemble de paniers ayant tous le même prix', 'iscorrect' => false],
                            ['answer' => 'Une courbe représentant les coûts de production', 'iscorrect' => false],
                            ['answer' => 'Une courbe de demande du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux courbes d\'indifférence distinctes ne se coupent-elles généralement pas dans le modèle standard ?',
                        'answers' => [
                            ['answer' => Une intersection impliquerait une incohérence avec l\'hypothèse de préférences cohérentes', 'iscorrect' => true],
                            ['answer' => 'Parce que tous les biens ont le même prix', 'iscorrect' => false],
                            ['answer' => 'Parce que les consommateurs ont tous le même revenu', 'iscorrect' => false],
                            ['answer' => 'Parce que l\'utilité marginale est toujours constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le taux marginal de substitution ?',
                        'answers' => [
                            ['answer' => 'La quantité d\'un bien qu\'un consommateur est prêt à abandonner pour obtenir une unité supplémentaire d\'un autre bien tout en conservant le même niveau d\'utilité', 'iscorrect' => true],
                            ['answer' => 'Le rapport entre deux coûts fixes', 'iscorrect' => false],
                            ['answer' => 'La variation du revenu national', 'iscorrect' => false],
                            ['answer' => 'Le taux de taxation d\'un produit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une solution intérieure, quelle condition caractérise généralement l\'optimum du consommateur ?',
                        'answers' => [
                            ['answer' => 'Le taux marginal de substitution est égal au rapport des prix des biens', 'iscorrect' => true],
                            ['answer' => 'Les deux biens ont nécessairement la même quantité consommée', 'iscorrect' => false],
                            ['answer' => 'L\'utilité marginale de chaque bien est nulle', 'iscorrect' => false],
                            ['answer' => 'Le revenu doit être entièrement épargné', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les préférences convexes sont-elles importantes dans l\'analyse du consommateur ?',
                        'answers' => [
                            ['answer' => Elles traduisent généralement une préférence pour des paniers équilibrés et facilitent l\'existence d\'un optimum intérieur', 'iscorrect' => true],
                            ['answer' => 'Elles impliquent que tous les biens sont parfaitement substituables', 'iscorrect' => false],
                            ['answer' => 'Elles rendent la contrainte budgétaire inutile', 'iscorrect' => false],
                            ['answer' => 'Elles impliquent que le consommateur n\'a aucune préférence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une baisse du prix d\'un bien sur le choix du consommateur ?',
                        'answers' => [
                            ['answer' => 'Elle peut modifier à la fois les prix relatifs et le pouvoir d\'achat réel du consommateur', 'iscorrect' => true],
                            ['answer' => 'Elle modifie uniquement le revenu nominal', 'iscorrect' => false],
                            ['answer' => 'Elle n\'affecte jamais la combinaison optimale de biens', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours l\'utilité totale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Utilité marginale et demande individuelle',
                'questions' => [
                    [
                        'question' => 'Que signifie une utilité marginale décroissante ?',
                        'answers' => [
                            ['answer' => 'La satisfaction supplémentaire procurée par une unité additionnelle diminue lorsque la quantité consommée augmente', 'iscorrect' => true],
                            ['answer' => 'L\'utilité totale diminue nécessairement après chaque unité', 'iscorrect' => false],
                            ['answer' => 'Le prix du bien diminue automatiquement', 'iscorrect' => false],
                            ['answer' => 'La demande devient parfaitement inélastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'utilité marginale peut-elle aider à comprendre la demande ?',
                        'answers' => [
                            ['answer' => Le consommateur compare la satisfaction supplémentaire d\'une unité au coût nécessaire pour l\'obtenir', 'iscorrect' => true],
                            ['answer' => 'Elle détermine directement le coût de production', 'iscorrect' => false],
                            ['answer' => 'Elle remplace la contrainte budgétaire', 'iscorrect' => false],
                            ['answer' => 'Elle mesure le PIB par habitant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une approche d\'utilité marginale par unité monétaire dépensée, l\'optimum implique généralement :',
                        'answers' => [
                            ['answer' => 'L\'égalité de l\'utilité marginale par unité monétaire entre les biens consommés', 'iscorrect' => true],
                            ['answer' => 'L\'égalité des quantités consommées', 'iscorrect' => false],
                            ['answer' => 'L\'égalité des prix de tous les biens', 'iscorrect' => false],
                            ['answer' => 'Une utilité marginale nulle pour chaque bien', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si l\'utilité marginale d\'un bien augmente alors que son prix reste inchangé, quelle réaction est cohérente ?',
                        'answers' => [
                            ['answer' => 'Le consommateur peut souhaiter consacrer davantage de ressources à ce bien', 'iscorrect' => true],
                            ['answer' => 'La demande diminue nécessairement', 'iscorrect' => false],
                            ['answer' => 'Le prix du bien devient automatiquement plus faible', 'iscorrect' => false],
                            ['answer' => 'Le revenu disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du prix d\'un bien réduit-elle généralement sa demande ?',
                        'answers' => [
                            ['answer' => 'Elle augmente son coût d\'opportunité en termes des autres biens et réduit souvent son attractivité relative', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours son utilité marginale', 'iscorrect' => false],
                            ['answer' => 'Elle augmente nécessairement le revenu réel', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les préférences du consommateur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la demande marshallienne ?',
                        'answers' => [
                            ['answer' => 'Le panier optimal choisi par le consommateur en fonction de son revenu et des prix', 'iscorrect' => true],
                            ['answer' => 'Le panier permettant de minimiser uniquement les impôts', 'iscorrect' => false],
                            ['answer' => 'La quantité produite par une entreprise', 'iscorrect' => false],
                            ['answer' => 'La quantité échangée à l\'équilibre macroéconomique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du revenu peut-elle augmenter la demande d\'un bien normal ?',
                        'answers' => [
                            ['answer' => 'Le consommateur dispose de davantage de pouvoir d\'achat à préférences et prix constants', 'iscorrect' => true],
                            ['answer' => 'Le prix du bien augmente nécessairement', 'iscorrect' => false],
                            ['answer' => 'L\'utilité marginale devient nulle', 'iscorrect' => false],
                            ['answer' => 'La contrainte budgétaire disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un effet de substitution ?',
                        'answers' => [
                            ['answer' => 'La modification de la demande due à un changement des prix relatifs, à utilité réelle comparable', 'iscorrect' => true],
                            ['answer' => 'La modification du revenu nominal uniquement', 'iscorrect' => false],
                            ['answer' => 'La variation du coût total de production', 'iscorrect' => false],
                            ['answer' => 'La modification du taux de chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un effet de revenu ?',
                        'answers' => [
                            ['answer' => 'La modification de la demande liée au changement du pouvoir d\'achat réel résultant d\'une variation de prix', 'iscorrect' => true],
                            ['answer' => 'La variation du revenu fiscal de l\'État', 'iscorrect' => false],
                            ['answer' => 'La variation du coût de production', 'iscorrect' => false],
                            ['answer' => 'La variation du revenu d\'une entreprise uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le cas ordinaire d\'un bien normal, une baisse de son prix produit généralement :',
                        'answers' => [
                            ['answer' => 'Un effet de substitution positif sur sa quantité demandée et un effet de revenu positif', 'iscorrect' => true],
                            ['answer' => 'Deux effets négatifs', 'iscorrect' => false],
                            ['answer' => 'Un effet de substitution nul et un effet de revenu négatif', 'iscorrect' => false],
                            ['answer' => 'Un effet de revenu uniquement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Production, coûts et décision de l\'entreprise',
                'questions' => [
                    [
                        'question' => 'Que représente le produit marginal du travail ?',
                        'answers' => [
                            ['answer' => 'La production supplémentaire obtenue grâce à une unité supplémentaire de travail, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['answer' => 'Le coût supplémentaire d\'un travailleur', 'iscorrect' => false],
                            ['answer' => 'Le profit total de l\'entreprise', 'iscorrect' => false],
                            ['answer' => 'Le prix du produit vendu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Selon la loi des rendements marginaux décroissants, que se passe-t-il lorsque l\'on ajoute progressivement du travail à un facteur fixe ?',
                        'answers' => [
                            ['answer' => 'Le produit marginal du travail finit généralement par diminuer', 'iscorrect' => true],
                            ['answer' => 'Le produit marginal augmente toujours', 'iscorrect' => false],
                            ['answer' => 'La production totale devient immédiatement nulle', 'iscorrect' => false],
                            ['answer' => 'Le facteur fixe devient variable automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un coût fixe ?',
                        'answers' => [
                            ['answer' => 'Un coût qui ne varie pas directement avec la quantité produite à court terme', 'iscorrect' => true],
                            ['answer' => 'Un coût qui varie proportionnellement avec chaque unité', 'iscorrect' => false],
                            ['answer' => 'Un revenu supplémentaire', 'iscorrect' => false],
                            ['answer' => 'Le prix du bien vendu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un coût variable ?',
                        'answers' => [
                            ['answer' => 'Un coût qui varie avec le niveau de production', 'iscorrect' => true],
                            ['answer' => 'Un coût qui reste toujours constant', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d\'affaires', 'iscorrect' => false],
                            ['answer' => 'Le profit économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût moyen peut-il diminuer lorsque la production augmente au début ?',
                        'answers' => [
                            ['answer' => 'Les coûts fixes sont répartis sur un plus grand nombre d\'unités et des économies d\'échelle peuvent apparaître', 'iscorrect' => true],
                            ['answer' => 'Les coûts variables deviennent toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Le prix du produit augmente automatiquement', 'iscorrect' => false],
                            ['answer' => 'La demande devient parfaitement élastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une économie d\'échelle ?',
                        'answers' => [
                            ['answer' => 'Une baisse du coût moyen lorsque l\'échelle de production augmente', 'iscorrect' => true],
                            ['answer' => 'Une hausse du coût moyen lorsque la production augmente', 'iscorrect' => false],
                            ['answer' => 'Une baisse de la quantité produite', 'iscorrect' => false],
                            ['answer' => 'Une hausse du prix imposée par l\'État', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût marginal coupe-t-il généralement le coût moyen au minimum de celui-ci ?',
                        'answers' => [
                            ['answer' => 'Parce qu\'un coût marginal inférieur au coût moyen le fait baisser, tandis qu\'un coût marginal supérieur le fait augmenter', 'iscorrect' => true],
                            ['answer' => 'Parce que les deux coûts sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Parce que le coût fixe est nul', 'iscorrect' => false],
                            ['answer' => 'Parce que la demande détermine directement le coût moyen', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une entreprise preneuse de prix, quelle condition caractérise généralement la quantité optimale produite ?',
                        'answers' => [
                            ['answer' => 'Le prix est égal au coût marginal sur la portion pertinente de la courbe de coût', 'iscorrect' => true],
                            ['answer' => 'Le prix est toujours égal au coût fixe', 'iscorrect' => false],
                            ['answer' => 'Le coût moyen est toujours nul', 'iscorrect' => false],
                            ['answer' => 'Le revenu total doit être nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition de fermeture à court terme est généralement utilisée pour une entreprise concurrentielle ?',
                        'answers' => [
                            ['answer' => 'Elle ferme si le prix est inférieur au minimum du coût variable moyen', 'iscorrect' => true],
                            ['answer' => 'Elle ferme dès que le profit est inférieur à zéro, sans tenir compte des coûts variables', 'iscorrect' => false],
                            ['answer' => 'Elle ferme si le prix est supérieur au coût marginal', 'iscorrect' => false],
                            ['answer' => 'Elle ferme si le chiffre d\'affaires augmente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle accepter un prix inférieur au coût moyen à court terme ?',
                        'answers' => [
                            ['answer' => 'Elle peut encore couvrir ses coûts variables et une partie de ses coûts fixes', 'iscorrect' => true],
                            ['answer' => 'Elle réalise nécessairement un profit positif', 'iscorrect' => false],
                            ['answer' => 'Le coût fixe disparaît dès que le prix baisse', 'iscorrect' => false],
                            ['answer' => 'Les coûts variables deviennent négatifs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Concurrence parfaite et équilibre de long terme',
                'questions' => [
                    [
                        'question' => 'Quelles sont des hypothèses classiques d\'un modèle de concurrence parfaite ?',
                        'answers' => [
                            ['answer' => 'Nombre élevé d\'acheteurs et de vendeurs, produit homogène et libre entrée et sortie', 'iscorrect' => true],
                            ['answer' => 'Un seul vendeur et produit unique', 'iscorrect' => false],
                            ['answer' => 'Barrières à l\'entrée très élevées', 'iscorrect' => false],
                            ['answer' => 'Prix fixés par une entreprise dominante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une firme concurrentielle est-elle preneuse de prix ?',
                        'answers' => [
                            ['answer' => 'Sa taille est insuffisante pour influencer sensiblement le prix de marché', 'iscorrect' => true],
                            ['answer' => 'Elle contrôle toute la demande', 'iscorrect' => false],
                            ['answer' => 'Elle dispose toujours d\'un monopole légal', 'iscorrect' => false],
                            ['answer' => 'Elle choisit directement le prix national', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'entrée de nouvelles entreprises peut-elle réduire les profits économiques à long terme ?',
                        'answers' => [
                            ['answer' => 'L\'augmentation de l\'offre peut réduire le prix du marché et attirer les profits vers le niveau normal', 'iscorrect' => true],
                            ['answer' => 'L\'entrée réduit toujours la production totale', 'iscorrect' => false],
                            ['answer' => 'Les nouvelles entreprises augmentent toujours les coûts fixes des anciennes', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs disparaissent du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le long terme concurrentiel avec libre entrée, le profit économique tend généralement vers :',
                        'answers' => [
                            ['answer' => 'Zéro', 'iscorrect' => true],
                            ['answer' => 'Un niveau toujours positif', 'iscorrect' => false],
                            ['answer' => 'Un niveau toujours négatif', 'iscorrect' => false],
                            ['answer' => 'L\'infini', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un profit économique nul signifie-t-il que l\'entreprise ne gagne rien ?',
                        'answers' => [
                            ['answer' => 'Non, cela signifie que les recettes couvrent tous les coûts économiques, y compris le coût d\'opportunité des ressources', 'iscorrect' => true],
                            ['answer' => 'Oui, l\'entreprise ne reçoit aucun revenu', 'iscorrect' => false],
                            ['answer' => 'Oui, l\'entreprise est nécessairement en faillite', 'iscorrect' => false],
                            ['answer' => 'Non, cela signifie toujours que le profit comptable est négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'efficience productive dans un marché concurrentiel ?',
                        'answers' => [
                            ['answer' => 'La production se réalise au minimum du coût moyen à long terme dans le cadre théorique approprié', 'iscorrect' => true],
                            ['answer' => 'Le prix dépasse toujours le coût moyen', 'iscorrect' => false],
                            ['answer' => 'La production est toujours nulle', 'iscorrect' => false],
                            ['answer' => 'Le nombre d\'entreprises est nécessairement égal à un', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles être attirées vers un secteur affichant des profits économiques positifs ?',
                        'answers' => [
                            ['answer' => 'Les perspectives de rendement encouragent l\'entrée et augmentent l\'offre du secteur', 'iscorrect' => true],
                            ['answer' => 'Les profits positifs empêchent toute nouvelle entrée', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs quittent toujours le secteur', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes deviennent automatiquement nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une industrie à coûts croissants en long terme ?',
                        'answers' => [
                            ['answer' => 'Une industrie dans laquelle une expansion sectorielle peut augmenter les coûts des facteurs utilisés', 'iscorrect' => true],
                            ['answer' => 'Une industrie où les coûts diminuent toujours lorsque la production augmente', 'iscorrect' => false],
                            ['answer' => 'Une industrie sans ressources rares', 'iscorrect' => false],
                            ['answer' => 'Une industrie dans laquelle les entreprises cessent toujours d\'investir', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'offre de long terme d\'une industrie peut-elle être horizontale dans le modèle des coûts constants ?',
                        'answers' => [
                            ['answer' => L\'expansion du secteur ne modifie pas le coût des facteurs et le prix d\'équilibre de long terme reste constant', 'iscorrect' => true],
                            ['answer' => 'La demande est parfaitement inélastique', 'iscorrect' => false],
                            ['answer' => 'Les entreprises sont toutes des monopoles', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal est toujours nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat est cohérent avec un équilibre concurrentiel de long terme sans externalités ?',
                        'answers' => [
                            ['answer' => 'Le prix tend à refléter le coût marginal et le coût moyen minimal dans le modèle standard', 'iscorrect' => true],
                            ['answer' => 'Le prix reste systématiquement supérieur au coût marginal', 'iscorrect' => false],
                            ['answer' => 'Les entreprises conservent nécessairement des profits économiques élevés', 'iscorrect' => false],
                            ['answer' => 'La production reste toujours inférieure à l\'optimum', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Monopole et tarification',
                'questions' => [
                    [
                        'question' => 'Pourquoi un monopole fait-il face à la courbe de demande du marché ?',
                        'answers' => [
                            ['answer' => 'Il constitue l\'unique vendeur et sa quantité choisie influence le prix compatible avec la demande', 'iscorrect' => true],
                            ['answer' => 'Il est toujours preneur de prix', 'iscorrect' => false],
                            ['answer' => 'La demande est déterminée uniquement par l\'État', 'iscorrect' => false],
                            ['answer' => 'Il n\'y a aucun consommateur sur le marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le revenu marginal d\'un monopole est-il inférieur au prix pour une courbe de demande décroissante ?',
                        'answers' => [
                            ['answer' => 'Pour vendre une unité supplémentaire, le monopole doit généralement réduire le prix appliqué à la quantité vendue', 'iscorrect' => true],
                            ['answer' => 'Le coût marginal est négatif', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ont tous le même revenu', 'iscorrect' => false],
                            ['answer' => 'Le prix ne dépend jamais de la quantité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition détermine généralement la quantité optimale d\'un monopole ?',
                        'answers' => [
                            ['answer' => 'Le revenu marginal est égal au coût marginal', 'iscorrect' => true],
                            ['answer' => 'Le prix est égal au revenu total', 'iscorrect' => false],
                            ['answer' => 'Le coût fixe est égal au revenu marginal', 'iscorrect' => false],
                            ['answer' => 'La demande est égale à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Après avoir déterminé sa quantité optimale, le monopole détermine généralement son prix :',
                        'answers' => [
                            ['answer' => 'À partir de la courbe de demande correspondant à cette quantité', 'iscorrect' => true],
                            ['answer' => 'En prenant automatiquement le coût marginal comme prix', 'iscorrect' => false],
                            ['answer' => 'En choisissant nécessairement le prix le plus élevé possible', 'iscorrect' => false],
                            ['answer' => 'En utilisant uniquement ses coûts fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un monopole peut-il réduire la quantité produite par rapport à un marché concurrentiel ?',
                        'answers' => [
                            ['answer' => 'Il choisit une quantité qui maximise son profit plutôt que le surplus total', 'iscorrect' => true],
                            ['answer' => 'La technologie est toujours moins productive', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs n\'ont plus de besoins', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal devient toujours nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une discrimination par les prix de premier degré ?',
                        'answers' => [
                            ['answer' => 'Une situation dans laquelle le vendeur cherche à faire payer à chaque unité un prix proche de la disposition maximale à payer du consommateur', 'iscorrect' => true],
                            ['answer' => 'Un prix unique imposé à tous les consommateurs', 'iscorrect' => false],
                            ['answer' => 'Une taxe identique pour chaque produit', 'iscorrect' => false],
                            ['answer' => 'Une réduction identique pour tous les clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition facilite la discrimination par les prix ?',
                        'answers' => [
                            ['answer' => 'La capacité à distinguer des groupes de clients selon leur disposition à payer et à limiter la revente', 'iscorrect' => true],
                            ['answer' => 'L\'absence totale d\'information', 'iscorrect' => false],
                            ['answer' => 'La concurrence parfaite stricte', 'iscorrect' => false],
                            ['answer' => 'Un produit impossible à segmenter', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le monopole peut-il générer une perte sèche ?',
                        'answers' => [
                            ['answer' => 'Certaines unités dont le bénéfice social dépasse le coût social ne sont pas produites', 'iscorrect' => true],
                            ['answer' => 'Toutes les unités sont produites gratuitement', 'iscorrect' => false],
                            ['answer' => 'Le monopole produit toujours trop par rapport à la concurrence', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs paient toujours moins que leur disposition à payer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les économies d\'échelle peuvent-elles conduire à un monopole naturel ?',
                        'answers' => [
                            ['answer' => 'Le coût moyen peut rester décroissant sur une large plage de production, rendant une seule entreprise plus efficace', 'iscorrect' => true],
                            ['answer' => 'La demande disparaît avec la taille du marché', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs interdisent toute concurrence', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal devient toujours négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'État peut-il réglementer un monopole naturel ?',
                        'answers' => [
                            ['answer' => 'Pour limiter l\'exercice du pouvoir de marché tout en conservant les gains potentiels liés aux économies d\'échelle', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toute production', 'iscorrect' => false],
                            ['answer' => 'Pour garantir toujours un prix inférieur au coût marginal', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute innovation', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Oligopole, théorie des jeux et stratégies',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise oligopolistique doit-elle anticiper la réaction de ses rivales ?',
                        'answers' => [
                            ['answer' => 'Ses décisions modifient les incitations et les gains potentiels des autres entreprises', 'iscorrect' => true],
                            ['answer' => 'Les autres entreprises sont toujours indifférentes', 'iscorrect' => false],
                            ['answer' => 'Les prix sont toujours fixés par les consommateurs', 'iscorrect' => false],
                            ['answer' => 'La demande individuelle ne dépend jamais de la concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un équilibre de Nash dans un modèle d\'oligopole ?',
                        'answers' => [
                            ['answer' => 'Une combinaison de stratégies où aucune entreprise ne gagne à modifier seule sa stratégie compte tenu des stratégies des autres', 'iscorrect' => true],
                            ['answer' => 'Une combinaison où toutes les entreprises maximisent simultanément le surplus social', 'iscorrect' => false],
                            ['answer' => 'Une situation où toutes les entreprises ont exactement le même profit', 'iscorrect' => false],
                            ['answer' => 'Une situation sans concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le dilemme du prisonnier est-il pertinent pour l\'analyse de la collusion ?',
                        'answers' => [
                            ['answer' => 'Les entreprises peuvent avoir une incitation individuelle à dévier même lorsque la coopération augmenterait les profits collectifs', 'iscorrect' => true],
                            ['answer' => 'La coopération est toujours la stratégie dominante', 'iscorrect' => false],
                            ['answer' => 'Toutes les stratégies conduisent au même profit', 'iscorrect' => false],
                            ['answer' => 'La demande n\'existe pas dans les oligopoles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut rendre une collusion plus difficile à maintenir ?',
                        'answers' => [
                            ['answer' => 'Un grand nombre d\'entreprises et des conditions de marché très changeantes', 'iscorrect' => true],
                            ['answer' => 'Des interactions répétées et une forte transparence des prix', 'iscorrect' => false],
                            ['answer' => 'Des produits facilement observables', 'iscorrect' => false],
                            ['answer' => 'Une faible incertitude sur les actions des concurrents', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la menace d\'entrée peut-elle limiter le pouvoir de marché d\'une entreprise existante ?',
                        'answers' => [
                            ['answer' => 'Des prix ou profits très élevés peuvent attirer de nouveaux concurrents si les barrières à l\'entrée sont faibles', 'iscorrect' => true],
                            ['answer' => 'L\'entrée réduit toujours la capacité productive', 'iscorrect' => false],
                            ['answer' => 'Les nouveaux concurrents augmentent automatiquement les barrières', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs cessent d\'acheter', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une stratégie dominante ?',
                        'answers' => [
                            ['answer' => 'Une stratégie qui donne un meilleur résultat pour un joueur quelle que soit la stratégie adoptée par l\'autre', 'iscorrect' => true],
                            ['answer' => 'Une stratégie qui maximise toujours le bien-être social', 'iscorrect' => false],
                            ['answer' => 'Une stratégie choisie uniquement par le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Une stratégie disponible seulement dans un monopole', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la publicité peut-elle avoir un rôle stratégique dans un marché oligopolistique ?',
                        'answers' => [
                            ['answer' => 'Elle peut modifier la perception du produit, la fidélité des clients et les barrières à l\'entrée', 'iscorrect' => true],
                            ['answer' => 'Elle ne modifie jamais la demande', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement les concurrents', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours une baisse des coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des prix très rigides peuvent-ils apparaître dans certains oligopoles ?',
                        'answers' => [
                            ['answer' => 'Chaque entreprise peut craindre qu\'un changement de prix déclenche une réaction défavorable de ses rivales', 'iscorrect' => true],
                            ['answer' => 'Les entreprises ne peuvent jamais modifier leurs prix', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ignorent les prix', 'iscorrect' => false],
                            ['answer' => 'Les coûts sont toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de prix peut-elle dépendre de la répétition du jeu ?',
                        'answers' => [
                            ['answer' => 'La possibilité d\'interactions futures peut modifier les gains attendus d\'une déviation immédiate', 'iscorrect' => true],
                            ['answer' => 'La répétition rend toujours les entreprises parfaitement coopératives', 'iscorrect' => false],
                            ['answer' => 'Les entreprises cessent de rechercher le profit', 'iscorrect' => false],
                            ['answer' => 'Le prix devient automatiquement fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'analyse de Nash ne suffit-elle pas toujours à évaluer une politique de concurrence ?',
                        'answers' => [
                            ['answer' => 'L\'autorité doit aussi considérer l\'efficacité, l\'innovation, les effets dynamiques et le bien-être des consommateurs', 'iscorrect' => true],
                            ['answer' => 'Un équilibre de Nash mesure directement toutes les externalités', 'iscorrect' => false],
                            ['answer' => 'La concurrence n\'affecte jamais le bien-être', 'iscorrect' => false],
                            ['answer' => 'Les effets dynamiques n\'existent jamais', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché du travail et rémunération des facteurs',
                'questions' => [
                    [
                        'question' => 'Pourquoi la demande de travail est-elle appelée une demande dérivée ?',
                        'answers' => [
                            ['answer' => 'Parce qu\'elle dépend de la demande pour les biens et services produits grâce au travail', 'iscorrect' => true],
                            ['answer' => 'Parce qu\'elle ne dépend jamais des salaires', 'iscorrect' => false],
                            ['answer' => 'Parce qu\'elle est fixée uniquement par les travailleurs', 'iscorrect' => false],
                            ['answer' => 'Parce qu\'elle dépend uniquement des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle concurrentiel, une entreprise embauche une unité supplémentaire de travail lorsque :',
                        'answers' => [
                            ['answer' => 'La valeur de la production marginale du travail est au moins égale au coût marginal de cette unité de travail', 'iscorrect' => true],
                            ['answer' => 'Le travailleur demande toujours le salaire le plus élevé', 'iscorrect' => false],
                            ['answer' => 'Le produit marginal du travail est nul', 'iscorrect' => false],
                            ['answer' => 'Le coût du capital est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de la productivité marginale du travail peut-elle augmenter le salaire d\'équilibre ?',
                        'answers' => [
                            ['answer' => 'Elle augmente la valeur économique de la contribution d\'une unité supplémentaire de travail', 'iscorrect' => true],
                            ['answer' => 'Elle réduit automatiquement la demande de travail', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours le chômage', 'iscorrect' => false],
                            ['answer' => 'Elle supprime l\'offre de travail', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le capital humain ?',
                        'answers' => [
                            ['answer' => 'L\'ensemble des compétences, connaissances et capacités productives accumulées par les travailleurs', 'iscorrect' => true],
                            ['answer' => 'Uniquement les machines détenues par une entreprise', 'iscorrect' => false],
                            ['answer' => 'Uniquement les actifs financiers', 'iscorrect' => false],
                            ['answer' => 'Les ressources naturelles d\'une économie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'éducation peut-elle être considérée comme un investissement ?',
                        'answers' => [
                            ['answer' => 'Elle peut nécessiter des coûts présents en échange d\'une productivité et de revenus futurs plus élevés', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours un salaire identique pour tous', 'iscorrect' => false],
                            ['answer' => 'Elle élimine le coût d\'opportunité', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours le capital humain', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut expliquer une différence de salaire entre deux travailleurs ?',
                        'answers' => [
                            ['answer' => 'Leur productivité, leurs compétences, leur expérience et les caractéristiques de leur emploi peuvent différer', 'iscorrect' => true],
                            ['answer' => 'Le salaire est toujours identique dans tous les secteurs', 'iscorrect' => false],
                            ['answer' => 'Les salaires sont indépendants de toute productivité', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs possèdent toujours les mêmes compétences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un salaire minimum contraignant peut-il créer du chômage dans le modèle concurrentiel simple ?',
                        'answers' => [
                            ['answer' => 'Le salaire supérieur au niveau d\'équilibre peut augmenter l\'offre de travail et réduire la demande de travail', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours l\'offre de travail et augmente la demande', 'iscorrect' => false],
                            ['answer' => 'Il n\'affecte jamais les décisions d\'embauche', 'iscorrect' => false],
                            ['answer' => 'Il rend les emplois plus nombreux dans tous les secteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un monopsone ?',
                        'answers' => [
                            ['answer' => 'Une structure de marché dans laquelle un seul acheteur possède un pouvoir de marché important', 'iscorrect' => true],
                            ['answer' => 'Un marché avec un seul vendeur', 'iscorrect' => false],
                            ['answer' => 'Un marché parfaitement concurrentiel', 'iscorrect' => false],
                            ['answer' => 'Un marché avec deux devises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un monopsone du travail, pourquoi l\'entreprise peut-elle payer un salaire inférieur au niveau concurrentiel ?',
                        'answers' => [
                            ['answer' => 'Elle possède un pouvoir de marché sur l\'achat du travail et la courbe d\'offre de travail qui lui est adressée est croissante', 'iscorrect' => true],
                            ['answer' => 'Le travail n\'a aucune valeur productive', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs ne possèdent aucune alternative par définition', 'iscorrect' => false],
                            ['answer' => 'Le salaire est fixé automatiquement par les consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les syndicats peuvent-ils exercer un pouvoir de négociation ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent modifier le pouvoir de négociation collectif des travailleurs face à l\'employeur', 'iscorrect' => true],
                            ['answer' => 'Ils fixent directement tous les prix des biens', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment l\'offre de travail', 'iscorrect' => false],
                            ['answer' => 'Ils déterminent automatiquement la productivité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Défaillances de marché et intervention microéconomique',
                'questions' => [
                    [
                        'question' => 'Pourquoi les externalités entraînent-elles une divergence entre équilibre privé et optimum social ?',
                        'answers' => [
                            ['answer' => 'Les agents privés ne prennent pas nécessairement en compte l\'ensemble des coûts ou bénéfices imposés à la société', 'iscorrect' => true],
                            ['answer' => 'Les prix sont toujours identiques aux coûts sociaux', 'iscorrect' => false],
                            ['answer' => 'Les agents ont toujours une information parfaite', 'iscorrect' => false],
                            ['answer' => 'Le marché ne possède jamais de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe pigouvienne peut-elle atteindre l\'optimum sous certaines hypothèses ?',
                        'answers' => [
                            ['answer' => 'Elle peut faire intégrer à l\'agent le coût externe marginal qu\'il impose', 'iscorrect' => true],
                            ['answer' => 'Elle supprime automatiquement toute activité', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours un surplus supérieur pour tous', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours la production à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un problème principal-agent ?',
                        'answers' => [
                            ['answer' => 'Une situation où les intérêts du principal et de l\'agent peuvent diverger et où l\'action de l\'agent est difficile à observer ou contrôler', 'iscorrect' => true],
                            ['answer' => 'Une situation où l\'information est parfaitement symétrique', 'iscorrect' => false],
                            ['answer' => 'Un problème uniquement lié aux marchés de biens', 'iscorrect' => false],
                            ['answer' => 'Un problème de calcul du PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrats peuvent-ils contenir des mécanismes d\'incitation ?',
                        'answers' => [
                            ['answer' => 'Pour rapprocher les intérêts de l\'agent de ceux du principal lorsque l\'effort ou l\'action est difficilement observable', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toute incertitude', 'iscorrect' => false],
                            ['answer' => 'Pour garantir que l\'agent ne prendra jamais de risque', 'iscorrect' => false],
                            ['answer' => 'Pour rendre le salaire indépendant de toute performance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une assurance peut-elle créer de l\'aléa moral ?',
                        'answers' => [
                            ['answer' => 'La protection contre les pertes peut réduire l\'incitation de l\'assuré à éviter certains risques', 'iscorrect' => true],
                            ['answer' => 'L\'assurance rend les risques impossibles', 'iscorrect' => false],
                            ['answer' => 'L\'assurance supprime toutes les asymétries d\'information', 'iscorrect' => false],
                            ['answer' => 'L\'assuré devient nécessairement plus prudent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'assurance peut-elle aussi être confrontée à la sélection adverse ?',
                        'answers' => [
                            ['answer' => 'Les personnes présentant les risques les plus élevés peuvent être davantage attirées par l\'assurance lorsque le risque est difficile à observer', 'iscorrect' => true],
                            ['answer' => 'Les individus à faible risque sont toujours les seuls à acheter une assurance', 'iscorrect' => false],
                            ['answer' => 'L\'assurance garantit toujours un prix identique pour tous', 'iscorrect' => false],
                            ['answer' => 'Le risque est toujours parfaitement observable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une information publique peut-elle améliorer le fonctionnement d\'un marché ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire certaines asymétries et permettre aux agents de prendre des décisions plus informées', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toujours la concurrence', 'iscorrect' => false],
                            ['answer' => 'Elle garantit automatiquement les meilleurs prix', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toute incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu\'une réglementation impose des normes très coûteuses ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer certains objectifs tout en augmentant les coûts de production ou les barrières à l\'entrée', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours le nombre d\'entreprises', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours les coûts privés', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les externalités sans aucun coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une intervention publique doit-elle être comparée à une situation de référence ?',
                        'answers' => [
                            ['answer' => 'Pour identifier les effets réellement attribuables à l\'intervention plutôt que ceux provenant d\'autres changements', 'iscorrect' => true],
                            ['answer' => 'Pour garantir qu\'elle produira un gain net positif', 'iscorrect' => false],
                            ['answer' => 'Pour éviter toute analyse empirique', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les différences entre agents', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante d\'une politique économique fondée sur un modèle simplifié ?',
                        'answers' => [
                            ['answer' => 'Les hypothèses du modèle peuvent ne pas représenter parfaitement les comportements et institutions du monde réel', 'iscorrect' => true],
                            ['answer' => 'Les modèles simplifiés sont toujours inutiles', 'iscorrect' => false],
                            ['answer' => 'Les données réelles n\'ont jamais d\'importance', 'iscorrect' => false],
                            ['answer' => 'Une politique issue d\'un modèle garantit toujours le résultat prévu', 'iscorrect' => false],
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

                // Mélange des réponses pour éviter que la bonne réponse soit toujours en première position.
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
