```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MicroeconomicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'microeconomics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Théorie avancée du consommateur',
                'questions' => [
                    [
                        'question' => 'Dans le modèle standard du consommateur, que représente l\'optimum intérieur ?',
                        'answers' => [
                            ['answer' => 'Le point où la pente de la courbe d\'indifférence correspond à la pente de la contrainte budgétaire', 'iscorrect' => true],
                            ['answer' => 'Le point où tous les biens ont la même utilité totale', 'iscorrect' => false],
                            ['answer' => 'Le point où le revenu n\'est pas entièrement utilisé', 'iscorrect' => false],
                            ['answer' => 'Le point où les prix des biens deviennent nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une solution en coin peut-elle apparaître dans le problème du consommateur ?',
                        'answers' => [
                            ['answer' => 'Les préférences peuvent conduire le consommateur à consacrer tout son budget à un seul bien', 'iscorrect' => true],
                            ['answer' => 'La contrainte budgétaire disparaît', 'iscorrect' => false],
                            ['answer' => 'Tous les biens deviennent parfaitement complémentaires', 'iscorrect' => false],
                            ['answer' => 'Les prix sont nécessairement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le taux marginal de substitution entre deux biens ?',
                        'answers' => [
                            ['answer' => 'La quantité d\'un bien que le consommateur est prêt à abandonner pour obtenir davantage de l\'autre tout en maintenant son utilité', 'iscorrect' => true],
                            ['answer' => 'Le coût marginal du producteur', 'iscorrect' => false],
                            ['answer' => 'La variation du revenu nominal', 'iscorrect' => false],
                            ['answer' => 'Le taux d\'inflation entre deux périodes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une fonction d\'utilité Cobb-Douglas standard, une hausse proportionnelle du revenu à prix constants produit généralement :',
                        'answers' => [
                            ['answer' => Une hausse proportionnelle des demandes marshalliennes des deux biens', 'iscorrect' => true],
                            ['answer' => 'Une baisse proportionnelle des demandes', 'iscorrect' => false],
                            ['answer' => 'Une modification uniquement du prix relatif', 'iscorrect' => false],
                            ['answer' => 'Aucune modification des quantités consommées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la demande marshallienne dépend-elle à la fois du revenu et des prix ?',
                        'answers' => [
                            ['answer' => 'Parce que le consommateur maximise son utilité sous une contrainte budgétaire déterminée par ces variables', 'iscorrect' => true],
                            ['answer' => 'Parce que les préférences déterminent directement le revenu', 'iscorrect' => false],
                            ['answer' => 'Parce que les entreprises fixent toujours les préférences', 'iscorrect' => false],
                            ['answer' => 'Parce que le revenu est indépendant du pouvoir d\'achat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence distingue principalement l\'effet de substitution de Hicks de celui de Slutsky ?',
                        'answers' => [
                            ['answer' => 'Ils isolent différemment la variation du pouvoir d\'achat associée à un changement de prix', 'iscorrect' => true],
                            ['answer' => 'Hicks concerne les entreprises tandis que Slutsky concerne l\'État', 'iscorrect' => false],
                            ['answer' => 'Slutsky ne considère jamais les prix relatifs', 'iscorrect' => false],
                            ['answer' => 'Les deux approches sont exactement identiques dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un bien normal, une baisse du prix entraîne généralement quel signe pour l\'effet de substitution ?',
                        'answers' => [
                            ['answer' => 'Il augmente la quantité demandée du bien dont le prix relatif a diminué', 'iscorrect' => true],
                            ['answer' => 'Il réduit nécessairement la quantité demandée', 'iscorrect' => false],
                            ['answer' => 'Il n\'a aucun effet sur les prix relatifs', 'iscorrect' => false],
                            ['answer' => 'Il augmente toujours la demande de tous les biens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un bien de Giffen constitue-t-il un cas particulier ?',
                        'answers' => [
                            ['answer' => 'L\'effet de revenu négatif peut y dominer suffisamment l\'effet de substitution pour que la demande augmente avec le prix', 'iscorrect' => true],
                            ['answer' => 'Il s\'agit d\'un bien nécessairement gratuit', 'iscorrect' => false],
                            ['answer' => 'Son prix n\'affecte jamais la demande', 'iscorrect' => false],
                            ['answer' => 'Il s\'agit toujours d\'un bien de luxe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que la demande hicksienne ?',
                        'answers' => [
                            ['answer' => 'Le panier minimisant la dépense nécessaire pour atteindre un niveau d\'utilité donné à des prix donnés', 'iscorrect' => true],
                            ['answer' => 'Le panier maximisant automatiquement le profit du producteur', 'iscorrect' => false],
                            ['answer' => 'La quantité vendue au prix d\'équilibre concurrentiel', 'iscorrect' => false],
                            ['answer' => 'La demande indépendante du niveau d\'utilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dualité entre maximisation d\'utilité et minimisation de dépense est-elle utile ?',
                        'answers' => [
                            ['answer' => 'Elle permet d\'analyser le même choix du consommateur à partir de deux formulations mathématiquement liées', 'iscorrect' => true],
                            ['answer' => 'Elle élimine les préférences du modèle', 'iscorrect' => false],
                            ['answer' => 'Elle rend les prix constants', 'iscorrect' => false],
                            ['answer' => 'Elle ne concerne que les marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Élasticité avancée et théorie de la demande',
                'questions' => [
                    [
                        'question' => 'Pourquoi l\'élasticité-prix est-elle généralement différente selon le point de mesure sur une courbe de demande linéaire ?',
                        'answers' => [
                            ['answer' => 'Parce que l\'élasticité dépend à la fois de la pente et des valeurs courantes du prix et de la quantité', 'iscorrect' => true],
                            ['answer' => 'Parce que la pente change nécessairement sur une droite', 'iscorrect' => false],
                            ['answer' => 'Parce que le revenu change automatiquement sur la courbe', 'iscorrect' => false],
                            ['answer' => 'Parce que la demande linéaire est toujours parfaitement élastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Sur une courbe de demande linéaire décroissante, dans quelle zone la demande est-elle généralement élastique ?',
                        'answers' => [
                            ['answer' => 'Dans la partie supérieure de la courbe, proche des prix élevés et des quantités relativement faibles', 'iscorrect' => true],
                            ['answer' => 'Dans la partie inférieure uniquement', 'iscorrect' => false],
                            ['answer' => 'Elle est parfaitement inélastique partout', 'iscorrect' => false],
                            ['answer' => 'Elle possède toujours la même élasticité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la recette totale atteint-elle son maximum autour d\'une élasticité unitaire dans le cas standard ?',
                        'answers' => [
                            ['answer' => 'À ce point, l\'effet de la variation de prix sur la recette compense exactement l\'effet de la variation de quantité', 'iscorrect' => true],
                            ['answer' => 'Parce que le coût marginal est nul', 'iscorrect' => false],
                            ['answer' => 'Parce que la demande est parfaitement inélastique', 'iscorrect' => false],
                            ['answer' => 'Parce que les coûts fixes déterminent la recette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une élasticité croisée positive indique généralement que deux biens sont :',
                        'answers' => [
                            ['answer' => 'Substituts', 'iscorrect' => true],
                            ['answer' => 'Compléments', 'iscorrect' => false],
                            ['answer' => 'Des biens publics', 'iscorrect' => false],
                            ['answer' => 'Des facteurs fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'élasticité-revenu peut-elle être utile pour segmenter un marché ?',
                        'answers' => [
                            ['answer' => 'Elle permet d\'identifier comment différents biens réagissent à l\'évolution du pouvoir d\'achat', 'iscorrect' => true],
                            ['answer' => 'Elle mesure directement le coût marginal', 'iscorrect' => false],
                            ['answer' => 'Elle détermine le nombre optimal d\'entreprises', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les différences de préférences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'élasticité de la demande peut-elle varier selon la période considérée ?',
                        'answers' => [
                            ['answer' => 'Les consommateurs peuvent disposer de plus de temps pour trouver des substituts et adapter leur consommation', 'iscorrect' => true],
                            ['answer' => 'Les préférences deviennent toujours identiques à long terme', 'iscorrect' => false],
                            ['answer' => 'Les prix ne changent plus à long terme', 'iscorrect' => false],
                            ['answer' => 'L\'offre disparaît progressivement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation existe généralement entre élasticité-prix de la demande et pouvoir de marché ?',
                        'answers' => [
                            ['answer' => 'Une demande plus élastique limite généralement la capacité d\'une firme à augmenter fortement son prix sans perdre beaucoup de quantité', 'iscorrect' => true],
                            ['answer' => 'Une demande parfaitement élastique augmente toujours le pouvoir de marché', 'iscorrect' => false],
                            ['answer' => 'L\'élasticité n\'a aucun lien avec la tarification', 'iscorrect' => false],
                            ['answer' => 'Une demande inélastique empêche tout pouvoir de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue l\'élasticité dans l\'analyse de l\'incidence fiscale ?',
                        'answers' => [
                            ['answer' => 'Elle détermine dans quelle mesure les quantités s\'ajustent et influence la répartition économique de la taxe', 'iscorrect' => true],
                            ['answer' => 'Elle détermine uniquement le taux légal de l\'impôt', 'iscorrect' => false],
                            ['answer' => 'Elle rend tous les producteurs indifférents à la taxe', 'iscorrect' => false],
                            ['answer' => 'Elle élimine la perte sèche', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une élasticité de l\'offre élevée peut-elle faciliter l\'ajustement de la production ?',
                        'answers' => [
                            ['answer' => 'Les producteurs peuvent modifier plus fortement la quantité offerte en réponse à une variation du prix', 'iscorrect' => true],
                            ['answer' => 'Les coûts deviennent nécessairement fixes', 'iscorrect' => false],
                            ['answer' => 'La demande disparaît', 'iscorrect' => false],
                            ['answer' => 'Les prix cessent de jouer un rôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les biens essentiels ont-ils souvent une demande relativement inélastique à court terme ?',
                        'answers' => [
                            ['answer' => 'Les consommateurs disposent de peu de substituts immédiats et doivent continuer à satisfaire le besoin', 'iscorrect' => true],
                            ['answer' => 'Ils peuvent immédiatement supprimer la consommation sans coût', 'iscorrect' => false],
                            ['answer' => 'Leur prix ne varie jamais', 'iscorrect' => false],
                            ['answer' => 'Ils sont toujours des biens de luxe', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Théorie de la production et fonctions de coût',
                'questions' => [
                    [
                        'question' => 'Que représente une fonction de production ?',
                        'answers' => [
                            ['answer' => 'La relation entre les quantités de facteurs utilisés et la quantité maximale de production réalisable avec la technologie donnée', 'iscorrect' => true],
                            ['answer' => 'La relation entre prix et demande des consommateurs', 'iscorrect' => false],
                            ['answer' => 'La relation entre inflation et chômage uniquement', 'iscorrect' => false],
                            ['answer' => 'Le montant de la dette d\'une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre court terme et long terme en théorie de la production ?',
                        'answers' => [
                            ['answer' => 'À court terme au moins un facteur est considéré comme fixe, tandis qu\'à long terme tous les facteurs peuvent être ajustés', 'iscorrect' => true],
                            ['answer' => 'À long terme aucun facteur ne peut changer', 'iscorrect' => false],
                            ['answer' => 'À court terme tous les facteurs sont toujours variables', 'iscorrect' => false],
                            ['answer' => 'La distinction concerne uniquement la comptabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le produit marginal finit-il généralement par diminuer avec un facteur variable et un facteur fixe ?',
                        'answers' => [
                            ['answer' => 'Le facteur variable dispose de moins en moins du facteur fixe pour soutenir chaque unité supplémentaire de production', 'iscorrect' => true],
                            ['answer' => 'Le prix du produit diminue nécessairement', 'iscorrect' => false],
                            ['answer' => 'Le facteur fixe devient automatiquement variable', 'iscorrect' => false],
                            ['answer' => 'La technologie disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation existe généralement entre productivité moyenne et productivité marginale ?',
                        'answers' => [
                            ['answer' => 'Lorsque la productivité marginale est supérieure à la productivité moyenne, la productivité moyenne augmente', 'iscorrect' => true],
                            ['answer' => 'La productivité moyenne baisse toujours lorsque la productivité marginale augmente', 'iscorrect' => false],
                            ['answer' => 'Les deux concepts sont identiques', 'iscorrect' => false],
                            ['answer' => 'La productivité marginale n\'a aucun effet sur la moyenne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût marginal est-il lié au produit marginal d\'un facteur ?',
                        'answers' => [
                            ['answer' => Pour un salaire donné, produire davantage avec une unité supplémentaire de facteur réduit le coût du produit marginal', 'iscorrect' => true],
                            ['answer' => 'Le coût marginal dépend uniquement du prix final', 'iscorrect' => false],
                            ['answer' => 'Le produit marginal ne concerne que les consommateurs', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal est toujours égal au coût fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une isoquante ?',
                        'answers' => [
                            ['answer' => 'Une courbe représentant différentes combinaisons de facteurs produisant le même niveau de production', 'iscorrect' => true],
                            ['answer' => 'Une courbe de demande individuelle', 'iscorrect' => false],
                            ['answer' => 'Une courbe d\'indifférence des consommateurs', 'iscorrect' => false],
                            ['answer' => 'Une courbe représentant le profit uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le taux marginal de substitution technique ?',
                        'answers' => [
                            ['answer' => 'La quantité d\'un facteur que l\'entreprise peut réduire pour utiliser davantage d\'un autre facteur tout en maintenant la même production', 'iscorrect' => true],
                            ['answer' => 'Le taux de taxation du capital', 'iscorrect' => false],
                            ['answer' => 'La variation du salaire réel', 'iscorrect' => false],
                            ['answer' => 'La quantité demandée par les ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une minimisation de coût avec deux facteurs, quelle condition intérieure est généralement recherchée ?',
                        'answers' => [
                            ['answer' => 'L\'égalisation du produit marginal par unité monétaire dépensée entre les facteurs', 'iscorrect' => true],
                            ['answer' => 'L\'égalité des quantités des facteurs', 'iscorrect' => false],
                            ['answer' => 'L\'égalité des salaires et des loyers', 'iscorrect' => false],
                            ['answer' => 'Une production nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les économies d\'échelle peuvent-elles conduire à une concentration industrielle ?',
                        'answers' => [
                            ['answer' => 'Une entreprise de grande taille peut parfois produire à un coût moyen inférieur à celui de plusieurs petites entreprises', 'iscorrect' => true],
                            ['answer' => 'Les petites entreprises n\'ont jamais de demande', 'iscorrect' => false],
                            ['answer' => 'La concurrence disparaît automatiquement dans tous les secteurs', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs préfèrent toujours les monopoles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts irrécupérables sont-ils exclus d\'une décision marginale future ?',
                        'answers' => [
                            ['answer' => 'Ils ne peuvent plus être récupérés et ne changent pas selon le choix marginal futur', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours variables', 'iscorrect' => false],
                            ['answer' => 'Ils représentent toujours le coût marginal', 'iscorrect' => false],
                            ['answer' => 'Ils sont toujours négatifs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Concurrence parfaite et efficience',
                'questions' => [
                    [
                        'question' => 'Pourquoi le prix égale-t-il le revenu marginal pour une firme parfaitement concurrentielle ?',
                        'answers' => [
                            ['answer' => 'La firme peut vendre chaque unité supplémentaire au prix de marché sans devoir réduire le prix des autres unités', 'iscorrect' => true],
                            ['answer' => 'La demande du marché est parfaitement inélastique', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal est nul', 'iscorrect' => false],
                            ['answer' => 'La firme contrôle le marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une firme concurrentielle choisit-elle une quantité où le prix est égal au coût marginal ?',
                        'answers' => [
                            ['answer' => 'Une unité supplémentaire est profitable tant que son revenu marginal dépasse son coût marginal', 'iscorrect' => true],
                            ['answer' => 'Le prix détermine toujours directement le coût fixe', 'iscorrect' => false],
                            ['answer' => 'La quantité optimale est indépendante des coûts', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs déterminent directement la quantité produite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la fermeture temporaire d\'une firme à court terme ?',
                        'answers' => [
                            ['answer' => 'Elle choisit de ne rien produire pendant que certains coûts fixes restent engagés', 'iscorrect' => true],
                            ['answer' => 'Elle quitte définitivement l\'industrie', 'iscorrect' => false],
                            ['answer' => 'Elle annule toutes ses dettes', 'iscorrect' => false],
                            ['answer' => 'Elle cesse automatiquement d\'être une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'entrée est-elle essentielle au résultat de long terme en concurrence parfaite ?',
                        'answers' => [
                            ['answer' => 'Elle ajuste le nombre d\'entreprises lorsque des profits économiques ou des pertes apparaissent', 'iscorrect' => true],
                            ['answer' => 'Elle fixe le prix par décret', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toujours la demande', 'iscorrect' => false],
                            ['answer' => 'Elle rend les coûts variables nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une perte économique à long terme sous libre entrée et sortie ?',
                        'answers' => [
                            ['answer' => 'Elle encourage la sortie de firmes jusqu\'à ce que les conditions économiques soient de nouveau soutenables', 'iscorrect' => true],
                            ['answer' => 'Elle attire toujours de nouvelles entreprises', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement la demande', 'iscorrect' => false],
                            ['answer' => 'Elle garantit un prix plus faible à toutes les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une concurrence parfaite est-elle souvent utilisée comme référence d\'efficience ?',
                        'answers' => [
                            ['answer' => 'Dans ses hypothèses idéalisées, le prix peut égaler le coût marginal et maximiser le surplus total', 'iscorrect' => true],
                            ['answer' => 'Elle garantit des profits économiques élevés', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les coûts fixes', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les préférences des consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat apparaît généralement lorsqu\'une industrie concurrentielle connaît une hausse durable de la demande ?',
                        'answers' => [
                            ['answer' => 'Des profits peuvent apparaître à court terme, attirant l\'entrée et augmentant l\'offre à long terme', 'iscorrect' => true],
                            ['answer' => 'Les entreprises quittent immédiatement le marché', 'iscorrect' => false],
                            ['answer' => 'Le prix diminue toujours immédiatement', 'iscorrect' => false],
                            ['answer' => 'La production reste nécessairement constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts d\'entrée sont-ils importants pour l\'efficacité dynamique ?',
                        'answers' => [
                            ['answer' => Ils peuvent influencer la vitesse à laquelle de nouvelles entreprises et de nouvelles technologies apparaissent', 'iscorrect' => true],
                            ['answer' => 'Ils n\'affectent jamais la structure du marché', 'iscorrect' => false],
                            ['answer' => 'Ils déterminent directement les préférences', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent automatiquement tout pouvoir de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concurrence parfaite n\'est-elle pas toujours une description réaliste ?',
                        'answers' => [
                            ['answer' => 'Les marchés réels comportent souvent différenciation des produits, coûts d\'information, barrières à l\'entrée ou pouvoir de marché', 'iscorrect' => true],
                            ['answer' => 'Les marchés réels n\'ont jamais de prix', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs n\'achètent jamais de biens différenciés', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne font jamais de profits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis peut exister entre efficience statique et innovation dans certains marchés ?',
                        'answers' => [
                            ['answer' => 'Un certain pouvoir de marché peut parfois financer l\'innovation, même s\'il réduit l\'efficience allocative statique', 'iscorrect' => true],
                            ['answer' => 'Le pouvoir de marché empêche toujours toute innovation', 'iscorrect' => false],
                            ['answer' => 'L\'innovation ne nécessite jamais de ressources', 'iscorrect' => false],
                            ['answer' => 'L\'efficience statique et l\'innovation sont toujours parfaitement corrélées', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Monopole, discrimination et réglementation',
                'questions' => [
                    [
                        'question' => 'Pourquoi un monopole choisit-il généralement une quantité telle que le revenu marginal égale le coût marginal ?',
                        'answers' => [
                            ['answer' => 'À cette marge, toute unité supplémentaire cesserait d\'augmenter le profit si son coût dépassait son revenu', 'iscorrect' => true],
                            ['answer' => 'Parce que la demande est parfaitement élastique', 'iscorrect' => false],
                            ['answer' => 'Parce que le prix est toujours égal au coût marginal', 'iscorrect' => false],
                            ['answer' => 'Parce que les coûts fixes sont nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un monopole produit-il généralement moins qu\'une industrie concurrentielle avec les mêmes coûts ?',
                        'answers' => [
                            ['answer' => 'Il restreint la quantité afin de maintenir un prix supérieur au coût marginal', 'iscorrect' => true],
                            ['answer' => 'Il possède toujours une technologie inférieure', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs refusent de consommer davantage', 'iscorrect' => false],
                            ['answer' => 'Le coût fixe est nécessairement plus élevé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition est nécessaire à une discrimination efficace par les prix ?',
                        'answers' => [
                            ['answer' => 'Des différences identifiables de disposition à payer et la possibilité d\'empêcher ou de limiter l\'arbitrage', 'iscorrect' => true],
                            ['answer' => 'Une concurrence parfaite', 'iscorrect' => false],
                            ['answer' => 'Un produit totalement homogène sans information', 'iscorrect' => false],
                            ['answer' => 'Des prix identiques pour tous les clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une discrimination par les prix du troisième degré, comment une firme segmente-t-elle généralement les consommateurs ?',
                        'answers' => [
                            ['answer' => 'En groupes présentant des élasticités ou dispositions à payer différentes', 'iscorrect' => true],
                            ['answer' => 'En fonction uniquement de la couleur du produit', 'iscorrect' => false],
                            ['answer' => 'En fonction de leur lieu de naissance uniquement', 'iscorrect' => false],
                            ['answer' => 'Sans utiliser aucune information sur la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un monopole naturel peut-il poser un dilemme réglementaire ?',
                        'answers' => [
                            ['answer' => 'Le coût moyen décroissant favorise une grande entreprise, mais le pouvoir de marché peut nécessiter un contrôle public', 'iscorrect' => true],
                            ['answer' => 'La concurrence est toujours plus efficace avec des entreprises très petites', 'iscorrect' => false],
                            ['answer' => 'Le monopole naturel n\'a aucun coût fixe', 'iscorrect' => false],
                            ['answer' => 'La demande est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réglementation au coût marginal peut-elle poser un problème financier pour un monopole naturel ?',
                        'answers' => [
                            ['answer' => 'Le coût marginal peut être inférieur au coût moyen, empêchant l\'entreprise de couvrir tous ses coûts', 'iscorrect' => true],
                            ['answer' => 'Le coût marginal est toujours supérieur au prix', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs refusent toujours le prix marginal', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes deviennent négatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle tarification peut permettre à un monopole naturel de couvrir ses coûts tout en limitant son pouvoir de marché ?',
                        'answers' => [
                            ['answer' => 'Une tarification au coût moyen, éventuellement accompagnée d\'un soutien public selon le contexte', 'iscorrect' => true],
                            ['answer' => 'Un prix égal à zéro dans toutes les circonstances', 'iscorrect' => false],
                            ['answer' => 'Un prix nécessairement supérieur au coût moyen', 'iscorrect' => false],
                            ['answer' => 'Un prix fixé uniquement par les concurrents inexistants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la discrimination par les prix peut-elle parfois augmenter la quantité vendue ?',
                        'answers' => [
                            ['answer' => 'Elle peut permettre à la firme de servir des consommateurs ayant des dispositions à payer plus faibles qui seraient exclus avec un prix unique', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours la production', 'iscorrect' => false],
                            ['answer' => 'Elle supprime la demande marginale', 'iscorrect' => false],
                            ['answer' => 'Elle exige toujours un seul prix pour tous', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un prix uniforme peut-il être sous-optimal pour une firme disposant d\'informations sur plusieurs segments ?',
                        'answers' => [
                            ['answer' => 'Les segments peuvent avoir des élasticités différentes et réagir différemment à un prix commun', 'iscorrect' => true],
                            ['answer' => 'Les consommateurs ont toujours la même disposition à payer', 'iscorrect' => false],
                            ['answer' => 'La demande de chaque segment est toujours identique', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal varie uniquement avec les revenus des clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque concurrentiel peut résulter d\'une position monopolistique durable ?',
                        'answers' => [
                            ['answer' => 'Une hausse des prix, une restriction de la production et une réduction des incitations concurrentielles dans certains contextes', 'iscorrect' => true],
                            ['answer' => 'Une concurrence parfaite immédiate', 'iscorrect' => false],
                            ['answer' => 'Une suppression de tout pouvoir de marché', 'iscorrect' => false],
                            ['answer' => 'Une baisse nécessaire du prix sous le coût marginal', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Oligopole et théorie des jeux avancée',
                'questions' => [
                    [
                        'question' => 'Dans le modèle de Cournot, les firmes choisissent principalement :',
                        'answers' => [
                            ['answer' => 'Les quantités qu\'elles souhaitent produire, en anticipant les quantités des rivales', 'iscorrect' => true],
                            ['answer' => 'Uniquement leurs dépenses publicitaires', 'iscorrect' => false],
                            ['answer' => 'Le salaire national', 'iscorrect' => false],
                            ['answer' => 'Le taux directeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle de Bertrand avec produits homogènes et coûts identiques, quel résultat classique peut apparaître ?',
                        'answers' => [
                            ['answer' => 'Le prix peut être poussé vers le coût marginal', 'iscorrect' => true],
                            ['answer' => 'Le prix reste toujours au niveau monopolistique', 'iscorrect' => false],
                            ['answer' => 'La quantité devient nécessairement nulle', 'iscorrect' => false],
                            ['answer' => 'Les firmes cessent automatiquement de produire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concurrence par les prix peut-elle être plus agressive que la concurrence par les quantités dans certains modèles ?',
                        'answers' => [
                            ['answer' => 'Les firmes peuvent réduire directement le prix pour capter une demande au lieu d\'ajuster progressivement la quantité', 'iscorrect' => true],
                            ['answer' => 'Les prix n\'influencent jamais les consommateurs', 'iscorrect' => false],
                            ['answer' => 'Les quantités sont toujours fixes', 'iscorrect' => false],
                            ['answer' => 'La demande devient nulle dès qu\'un prix change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un jeu séquentiel ?',
                        'answers' => [
                            ['answer' => 'Un jeu dans lequel les joueurs prennent leurs décisions à des moments différents et peuvent observer certaines actions précédentes', 'iscorrect' => true],
                            ['answer' => 'Un jeu où toutes les décisions sont prises simultanément', 'iscorrect' => false],
                            ['answer' => 'Un jeu sans stratégie', 'iscorrect' => false],
                            ['answer' => 'Un modèle exclusivement utilisé en macroéconomie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité d\'une menace est-elle importante dans un jeu séquentiel ?',
                        'answers' => [
                            ['answer' => 'Une menace qui ne serait pas rationnelle lorsqu\'elle doit être exécutée n\'influence pas nécessairement le comportement de l\'adversaire', 'iscorrect' => true],
                            ['answer' => 'Toute menace est automatiquement crédible', 'iscorrect' => false],
                            ['answer' => 'Les joueurs ne tiennent jamais compte des actions futures', 'iscorrect' => false],
                            ['answer' => 'Les stratégies n\'ont aucun coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un équilibre parfait en sous-jeux ?',
                        'answers' => [
                            ['answer' => 'Un profil de stratégies qui constitue un équilibre de Nash dans chaque sous-jeu', 'iscorrect' => true],
                            ['answer' => 'Un équilibre où tous les joueurs ont le même profit', 'iscorrect' => false],
                            ['answer' => 'Un équilibre uniquement applicable aux marchés concurrentiels', 'iscorrect' => false],
                            ['answer' => 'Un équilibre sans aucune décision stratégique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les marchés oligopolistiques peuvent-ils connaître une coordination tacite ?',
                        'answers' => [
                            ['answer' => 'Les entreprises peuvent ajuster leurs comportements en observant leurs rivales sans accord explicite', 'iscorrect' => true],
                            ['answer' => 'La concurrence devient impossible juridiquement', 'iscorrect' => false],
                            ['answer' => 'Les prix sont toujours imposés par l\'État', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne communiquent jamais indirectement par le marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un cartel peut-il être instable ?',
                        'answers' => [
                            ['answer' => 'Chaque membre peut avoir une incitation à produire davantage ou réduire son prix pour obtenir un gain individuel', 'iscorrect' => true],
                            ['answer' => 'Les membres sont toujours parfaitement altruistes', 'iscorrect' => false],
                            ['answer' => 'Les cartels n\'ont aucun objectif de profit', 'iscorrect' => false],
                            ['answer' => 'La demande est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un nombre plus élevé de concurrents peut-il rendre la collusion plus difficile ?',
                        'answers' => [
                            ['answer' => La surveillance des comportements devient plus complexe et les gains potentiels d\'une déviation peuvent augmenter', 'iscorrect' => true],
                            ['answer' => 'Tous les concurrents deviennent automatiquement coopératifs', 'iscorrect' => false],
                            ['answer' => 'La demande devient nécessairement parfaitement inélastique', 'iscorrect' => false],
                            ['answer' => 'Les coûts deviennent toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les asymétries d\'information peuvent-elles modifier l\'équilibre stratégique ?',
                        'answers' => [
                            ['answer' => 'Une entreprise peut prendre une décision différente lorsqu\'elle ne connaît pas parfaitement les coûts, intentions ou capacités de sa rivale', 'iscorrect' => true],
                            ['answer' => 'L\'information imparfaite élimine toujours la concurrence', 'iscorrect' => false],
                            ['answer' => 'Les entreprises connaissent nécessairement toutes les variables pertinentes', 'iscorrect' => false],
                            ['answer' => 'Les stratégies deviennent indépendantes de l\'information', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché du travail et structure des salaires',
                'questions' => [
                    [
                        'question' => 'Pourquoi la demande de travail est-elle dérivée de la productivité et de la demande du produit ?',
                        'answers' => [
                            ['answer' => 'Une entreprise embauche du travail parce qu\'il contribue à produire une valeur qu\'elle peut vendre', 'iscorrect' => true],
                            ['answer' => 'Les entreprises embauchent indépendamment de leur production', 'iscorrect' => false],
                            ['answer' => 'Les salaires sont déterminés uniquement par les travailleurs', 'iscorrect' => false],
                            ['answer' => 'La demande du produit n\'a aucune influence sur l\'emploi', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la valeur du produit marginal du travail ?',
                        'answers' => [
                            ['answer' => 'Le produit marginal du travail multiplié par le prix du bien produit dans le cas d\'une entreprise preneuse de prix', 'iscorrect' => true],
                            ['answer' => 'Le salaire moins le coût fixe', 'iscorrect' => false],
                            ['answer' => 'Le revenu total des ménages', 'iscorrect' => false],
                            ['answer' => 'Le PIB par travailleur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation de la demande du produit peut-elle accroître la demande de travail ?',
                        'answers' => [
                            ['answer' => 'La valeur économique de la production supplémentaire augmente, ce qui peut rendre le travail plus rentable à utiliser', 'iscorrect' => true],
                            ['answer' => 'Les travailleurs deviennent automatiquement plus nombreux', 'iscorrect' => false],
                            ['answer' => 'Le salaire réel devient nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'La productivité marginale disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une technologie qui complète le travail peut-elle augmenter les salaires ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter la productivité marginale et la valeur créée par les travailleurs', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours la demande de travail', 'iscorrect' => false],
                            ['answer' => 'Elle rend le travail inutile dans tous les secteurs', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement les différences de compétences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une technologie qui remplace certains travailleurs peut-elle réduire leur demande ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire le produit marginal du type de travail concerné lorsque le facteur devient substituable par le capital', 'iscorrect' => true],
                            ['answer' => 'Toute technologie augmente toujours la demande de tous les travailleurs', 'iscorrect' => false],
                            ['answer' => 'Les salaires augmentent nécessairement pour tous', 'iscorrect' => false],
                            ['answer' => 'Le capital devient automatiquement complémentaire dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des écarts de salaire peuvent-ils persister malgré une mobilité du travail ?',
                        'answers' => [
                            ['answer' => 'Les emplois diffèrent en compétences requises, conditions de travail, risques, localisation et caractéristiques non monétaires', 'iscorrect' => true],
                            ['answer' => 'Tous les emplois sont parfaitement identiques', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs ont toujours les mêmes préférences', 'iscorrect' => false],
                            ['answer' => 'Les salaires sont totalement indépendants de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un différentiel compensatoire de salaire ?',
                        'answers' => [
                            ['answer' => 'Une différence de rémunération destinée à compenser certaines caractéristiques non monétaires d\'un emploi', 'iscorrect' => true],
                            ['answer' => 'Une différence de salaire créée uniquement par les impôts', 'iscorrect' => false],
                            ['answer' => 'Une différence sans aucun lien avec les conditions de travail', 'iscorrect' => false],
                            ['answer' => 'Un salaire égal dans tous les secteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'investissement en capital humain peut-il être inférieur au niveau socialement optimal ?',
                        'answers' => [
                            ['answer' => 'Les individus peuvent ne pas internaliser tous les bénéfices externes de leur éducation ou faire face à des contraintes de financement', 'iscorrect' => true],
                            ['answer' => 'L\'éducation n\'a jamais de bénéfices sociaux', 'iscorrect' => false],
                            ['answer' => 'Les salaires sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Le capital humain ne produit aucune externalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le monopsoniste choisit-il généralement une quantité de travail inférieure au niveau concurrentiel ?',
                        'answers' => [
                            ['answer' => Il tient compte du coût marginal du travail, supérieur au salaire sur la courbe d\'offre croissante qui lui est adressée', 'iscorrect' => true],
                            ['answer' => 'Le salaire est toujours nul', 'iscorrect' => false],
                            ['answer' => 'Le travail est parfaitement abondant', 'iscorrect' => false],
                            ['answer' => 'La demande du produit est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un salaire minimum modéré peut-il produire des effets différents dans un monopsone par rapport à un marché parfaitement concurrentiel ?',
                        'answers' => [
                            ['answer' => 'Il peut réduire le pouvoir de l\'employeur et augmenter simultanément l\'emploi dans certaines configurations de monopsone', 'iscorrect' => true],
                            ['answer' => 'Il réduit nécessairement l\'emploi dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Il ne modifie jamais les salaires', 'iscorrect' => false],
                            ['answer' => 'Il transforme toujours le marché en monopole', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Externalités, information asymétrique et efficacité',
                'questions' => [
                    [
                        'question' => 'Dans une externalité négative de production, comment le coût marginal social se compare-t-il au coût marginal privé ?',
                        'answers' => [
                            ['answer' => 'Le coût marginal social est supérieur au coût marginal privé du fait du dommage externe', 'iscorrect' => true],
                            ['answer' => 'Le coût marginal social est toujours inférieur', 'iscorrect' => false],
                            ['answer' => 'Ils sont nécessairement égaux', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal privé devient toujours nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe pigouvienne idéale correspond-elle théoriquement au dommage marginal externe au niveau efficace ?',
                        'answers' => [
                            ['answer' => 'Elle internalise le coût externe et aligne le coût privé avec le coût social marginal', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toutes les productions', 'iscorrect' => false],
                            ['answer' => 'Elle élimine nécessairement toutes les externalités', 'iscorrect' => false],
                            ['answer' => 'Elle garantit un surplus privé identique pour tous', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal résultat du théorème de Coase sous ses hypothèses fortes ?',
                        'answers' => [
                            ['answer' => 'Avec des droits de propriété bien définis et des coûts de transaction négligeables, les parties peuvent négocier vers une allocation efficace', 'iscorrect' => true],
                            ['answer' => 'Toute externalité nécessite automatiquement une taxe publique', 'iscorrect' => false],
                            ['answer' => 'Les externalités disparaissent sans négociation', 'iscorrect' => false],
                            ['answer' => 'Les droits de propriété sont sans importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transaction limitent-ils la portée pratique du théorème de Coase ?',
                        'answers' => [
                            ['answer' => 'Des négociations coûteuses peuvent empêcher les parties d\'atteindre ou de maintenir une solution efficace', 'iscorrect' => true],
                            ['answer' => 'Les coûts de transaction rendent toutes les taxes inefficaces', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent toujours le surplus total', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent une information parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sélection adverse peut-elle provoquer un effondrement partiel d\'un marché ?',
                        'answers' => [
                            ['answer' => 'La qualité moyenne des biens offerts peut diminuer lorsque les vendeurs de bonne qualité quittent le marché', 'iscorrect' => true],
                            ['answer' => 'Les consommateurs connaissent toujours exactement la qualité', 'iscorrect' => false],
                            ['answer' => 'Les prix éliminent toujours les problèmes d\'information', 'iscorrect' => false],
                            ['answer' => 'Tous les vendeurs ont nécessairement la même qualité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les garanties peuvent-elles réduire la sélection adverse sur certains marchés ?',
                        'answers' => [
                            ['answer' => 'Les vendeurs de bonne qualité peuvent avoir davantage intérêt à offrir une garantie crédible', 'iscorrect' => true],
                            ['answer' => 'Les garanties augmentent toujours le risque', 'iscorrect' => false],
                            ['answer' => 'Les vendeurs de mauvaise qualité offrent toujours les garanties les plus longues', 'iscorrect' => false],
                            ['answer' => 'Les garanties rendent l\'information inutile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les incitations contractuelles peuvent-elles réduire l\'aléa moral ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent rapprocher le revenu de l\'agent des performances ou actions souhaitées par le principal', 'iscorrect' => true],
                            ['answer' => 'Elles rendent l\'action de l\'agent parfaitement observable', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent tous les risques', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent tout contrat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'assurance peut-elle être difficile à tarifer lorsqu\'il existe une forte asymétrie d\'information ?',
                        'answers' => [
                            ['answer' => 'L\'assureur peut ne pas connaître précisément le niveau de risque de chaque assuré', 'iscorrect' => true],
                            ['answer' => 'Le risque est toujours parfaitement observable', 'iscorrect' => false],
                            ['answer' => 'Tous les individus ont les mêmes probabilités de sinistre', 'iscorrect' => false],
                            ['answer' => 'Les contrats d\'assurance ne comportent jamais de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut aider à réduire l\'aléa moral dans l\'assurance maladie ou automobile ?',
                        'answers' => [
                            ['answer' => 'Une franchise ou une participation de l\'assuré peut maintenir une partie de l\'incitation à éviter les coûts', 'iscorrect' => true],
                            ['answer' => 'Une couverture intégrale sans aucune condition', 'iscorrect' => false],
                            ['answer' => 'La suppression de toute information', 'iscorrect' => false],
                            ['answer' => 'Un prix identique quel que soit le risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'information imparfaite peut-elle justifier une intervention réglementaire ?',
                        'answers' => [
                            ['answer' => 'La divulgation obligatoire et certaines normes peuvent améliorer la qualité des décisions et réduire les comportements opportunistes', 'iscorrect' => true],
                            ['answer' => 'La réglementation élimine automatiquement toute asymétrie', 'iscorrect' => false],
                            ['answer' => 'Les marchés sans information sont toujours efficaces', 'iscorrect' => false],
                            ['answer' => 'Les contrats deviennent inutiles après réglementation', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Choix intertemporel et risque',
                'questions' => [
                    [
                        'question' => 'Pourquoi les consommateurs peuvent-ils préférer consommer aujourd\'hui plutôt que demain ?',
                        'answers' => [
                            ['answer' => 'La préférence pour le présent implique qu\'une unité de consommation immédiate peut avoir une utilité supérieure à la même unité future', 'iscorrect' => true],
                            ['answer' => 'La consommation future est toujours impossible', 'iscorrect' => false],
                            ['answer' => 'Le taux d\'intérêt est toujours nul', 'iscorrect' => false],
                            ['answer' => 'Les revenus futurs n\'existent jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue le taux d\'intérêt réel dans le choix intertemporel ?',
                        'answers' => [
                            ['answer' => 'Il détermine le coût d\'opportunité de la consommation aujourd\'hui par rapport à la consommation future', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement le chômage', 'iscorrect' => false],
                            ['answer' => 'Il fixe directement la quantité de travail', 'iscorrect' => false],
                            ['answer' => 'Il ne concerne que les entreprises publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux d\'intérêt peut-elle avoir des effets opposés sur l\'épargne selon les préférences ?',
                        'answers' => [
                            ['answer' => L\'effet de substitution et l\'effet de revenu peuvent agir dans des directions différentes', 'iscorrect' => true],
                            ['answer' => 'L\'épargne réagit toujours dans une seule direction', 'iscorrect' => false],
                            ['answer' => 'Le revenu et le prix relatif sont toujours inchangés', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne peuvent jamais modifier leur consommation intertemporelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'aversion au risque ?',
                        'answers' => [
                            ['answer' => 'La préférence pour un revenu certain plutôt qu\'un revenu risqué ayant la même espérance dans le cadre de l\'analyse standard', 'iscorrect' => true],
                            ['answer' => 'La préférence pour les actifs les plus volatils', 'iscorrect' => false],
                            ['answer' => 'L\'absence totale de préférence', 'iscorrect' => false],
                            ['answer' => 'La garantie d\'un rendement positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'utilité espérée est-elle utilisée dans l\'analyse du choix sous risque ?',
                        'answers' => [
                            ['answer' => 'Elle permet d\'agréger les utilités des différents résultats selon leurs probabilités', 'iscorrect' => true],
                            ['answer' => 'Elle suppose toujours que tous les résultats sont certains', 'iscorrect' => false],
                            ['answer' => 'Elle ignore les probabilités', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les préférences individuelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une prime de risque ?',
                        'answers' => [
                            ['answer' => 'La compensation exigée pour accepter un risque par rapport à un résultat certain équivalent', 'iscorrect' => true],
                            ['answer' => 'Une taxe sur les actifs risqués', 'iscorrect' => false],
                            ['answer' => 'Un profit garanti', 'iscorrect' => false],
                            ['answer' => 'Un salaire supplémentaire versé à tous les travailleurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'assurance peut-elle être attractive pour un agent averse au risque ?',
                        'answers' => [
                            ['answer' => 'Elle permet de remplacer une perte incertaine par un coût plus certain', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours un rendement financier', 'iscorrect' => false],
                            ['answer' => 'Elle augmente systématiquement l\'espérance de richesse', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les événements défavorables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'auto-assurance partielle peut-elle être rationnelle ?',
                        'answers' => [
                            ['answer' => 'Un agent peut choisir de conserver une partie du risque si la couverture complète est trop coûteuse ou si sa tolérance au risque le permet', 'iscorrect' => true],
                            ['answer' => 'Un agent averse au risque cherche toujours à éliminer tout risque à n\'importe quel prix', 'iscorrect' => false],
                            ['answer' => 'L\'assurance est toujours gratuite', 'iscorrect' => false],
                            ['answer' => 'L\'incertitude n\'a aucun coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une personne neutre au risque évalue-t-elle un pari principalement par son espérance monétaire ?',
                        'answers' => [
                            ['answer' => 'Son utilité est linéaire dans la richesse dans le modèle considéré', 'iscorrect' => true],
                            ['answer' => 'Elle déteste tous les risques', 'iscorrect' => false],
                            ['answer' => 'Elle ne connaît jamais les probabilités', 'iscorrect' => false],
                            ['answer' => 'Elle préfère toujours les résultats les plus volatils', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un risque diversifiable peut-il être moins coûteux pour un portefeuille bien diversifié ?',
                        'answers' => [
                            ['answer' => 'Les pertes spécifiques à certains actifs peuvent être compensées par les performances d\'autres actifs', 'iscorrect' => true],
                            ['answer' => 'La diversification garantit un rendement positif', 'iscorrect' => false],
                            ['answer' => 'Les actifs deviennent parfaitement corrélés', 'iscorrect' => false],
                            ['answer' => 'Le risque de marché disparaît toujours', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Applications intégrées de microéconomie',
                'questions' => [
                    [
                        'question' => 'Une entreprise en concurrence parfaite observe un prix supérieur à son coût marginal sur une unité supplémentaire. Quelle implication immédiate est la plus cohérente ?',
                        'answers' => [
                            ['answer' => 'Produire davantage peut augmenter le profit, jusqu\'à ce que le coût marginal rejoigne le prix', 'iscorrect' => true],
                            ['answer' => 'Réduire toujours la production', 'iscorrect' => false],
                            ['answer' => 'Quitter immédiatement le marché', 'iscorrect' => false],
                            ['answer' => 'Augmenter le prix du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique impose une taxe unitaire à un marché où la demande est très inélastique et l\'offre très élastique. Quelle conclusion est la plus probable ?',
                        'answers' => [
                            ['answer' => 'Les consommateurs supporteront une part relativement importante de la charge économique de la taxe', 'iscorrect' => true],
                            ['answer' => 'Les producteurs supporteront nécessairement toute la taxe', 'iscorrect' => false],
                            ['answer' => 'La quantité échangée augmente', 'iscorrect' => false],
                            ['answer' => 'La taxe n\'a aucun effet sur le prix payé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une firme possède un pouvoir de marché mais fait face à une demande très élastique. Quel résultat est attendu ?',
                        'answers' => [
                            ['answer' => 'Sa capacité à fixer un prix très supérieur au coût marginal est davantage limitée', 'iscorrect' => true],
                            ['answer' => 'Elle peut toujours fixer n\'importe quel prix', 'iscorrect' => false],
                            ['answer' => 'Son pouvoir de marché augmente nécessairement', 'iscorrect' => false],
                            ['answer' => 'La demande devient parfaitement inélastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un marché concurrentiel génère une externalité positive importante. Pourquoi l\'équilibre privé peut-il conduire à une production insuffisante ?',
                        'answers' => [
                            ['answer' => 'Le producteur ne reçoit pas nécessairement la totalité du bénéfice social marginal de son activité', 'iscorrect' => true],
                            ['answer' => 'Le coût privé est toujours supérieur au coût social', 'iscorrect' => false],
                            ['answer' => 'La demande privée est toujours nulle', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs capturent toujours tout le bénéfice social', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un employeur unique possède un pouvoir de monopsone et rencontre une offre de travail croissante. Quel résultat est généralement attendu par rapport à la concurrence parfaite ?',
                        'answers' => [
                            ['answer' => 'Un emploi et un salaire plus faibles dans le modèle standard', 'iscorrect' => true],
                            ['answer' => 'Un emploi et un salaire nécessairement plus élevés', 'iscorrect' => false],
                            ['answer' => 'Aucune différence de salaire', 'iscorrect' => false],
                            ['answer' => 'Une disparition de la demande de travail', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une intervention publique peut-elle améliorer une allocation mais réduire simultanément certains incitatifs privés ?',
                        'answers' => [
                            ['answer' => 'La correction d\'une défaillance peut modifier les gains privés et donc le comportement marginal des agents', 'iscorrect' => true],
                            ['answer' => 'Les incitations ne sont jamais affectées par les politiques', 'iscorrect' => false],
                            ['answer' => 'Une politique efficace ne peut jamais modifier les comportements', 'iscorrect' => false],
                            ['answer' => 'Les agents ignorent toujours les taxes et subventions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transaction peuvent-ils empêcher une solution privée efficace à une externalité ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent rendre la négociation trop coûteuse ou complexe pour les parties concernées', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent une coopération spontanée', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent toute asymétrie d\'information', 'iscorrect' => false],
                            ['answer' => 'Ils rendent les droits de propriété inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise observe que son coût moyen diminue alors que la production augmente. Quelle interprétation est compatible avec cette observation ?',
                        'answers' => [
                            ['answer' => 'Elle bénéficie d\'économies d\'échelle sur la plage de production considérée', 'iscorrect' => true],
                            ['answer' => 'Elle subit nécessairement des déséconomies d\'échelle', 'iscorrect' => false],
                            ['answer' => 'Son coût marginal est nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'La demande est nécessairement élastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle investir davantage dans une technologie malgré un coût initial élevé ?',
                        'answers' => [
                            ['answer' => 'Les gains futurs de productivité peuvent dépasser le coût d\'opportunité des ressources engagées', 'iscorrect' => true],
                            ['answer' => 'Le coût initial est toujours sans importance', 'iscorrect' => false],
                            ['answer' => 'La technologie garantit toujours un monopole', 'iscorrect' => false],
                            ['answer' => 'L\'investissement supprime tous les coûts futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche résume le mieux une analyse microéconomique avancée d\'une politique publique ?',
                        'answers' => [
                            ['answer' => 'Identifier les incitations, les contraintes, les effets marginaux, les changements d\'équilibre, les gains d\'efficacité et les effets distributifs', 'iscorrect' => true],
                            ['answer' => 'Mesurer uniquement le coût budgétaire', 'iscorrect' => false],
                            ['answer' => 'Comparer uniquement les prix avant et après', 'iscorrect' => false],
                            ['answer' => 'Supposer que les agents ne réagissent pas aux changements d\'incitation', 'iscorrect' => false],
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
