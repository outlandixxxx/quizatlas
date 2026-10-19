```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class PortfolioManagementIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'portfolio-management')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Allocation stratégique et diversification',
                'questions' => [
                    ['question' => 'Quel est l’objectif principal de la diversification d’un portefeuille ?', 'answers' => [
                        ['text' => 'Réduire le risque spécifique en combinant des actifs dont les rendements ne sont pas parfaitement corrélés', 'iscorrect' => true],
                        ['text' => 'Garantir un rendement positif', 'iscorrect' => false],
                        ['text' => 'Supprimer tout risque de marché', 'iscorrect' => false],
                        ['text' => 'Augmenter systématiquement la volatilité', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que représente l’allocation stratégique d’actifs ?', 'answers' => [
                        ['text' => 'La répartition cible à long terme entre différentes classes d’actifs', 'iscorrect' => true],
                        ['text' => 'Les achats et ventes effectués chaque jour', 'iscorrect' => false],
                        ['text' => 'Uniquement la sélection des actions', 'iscorrect' => false],
                        ['text' => 'La prévision exacte des marchés', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi deux actifs avec une corrélation de 1 offrent-ils peu de bénéfice de diversification ?', 'answers' => [
                        ['text' => 'Parce qu’ils ont tendance à évoluer dans la même direction de manière parfaitement linéaire', 'iscorrect' => true],
                        ['text' => 'Parce qu’ils ont toujours des rendements négatifs', 'iscorrect' => false],
                        ['text' => 'Parce qu’ils sont nécessairement sans risque', 'iscorrect' => false],
                        ['text' => 'Parce qu’ils appartiennent toujours au même secteur', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quelle caractéristique améliore généralement la diversification ?', 'answers' => [
                        ['text' => 'Une faible corrélation entre les rendements des actifs', 'iscorrect' => true],
                        ['text' => 'Une corrélation parfaite de 1', 'iscorrect' => false],
                        ['text' => 'Une exposition identique à un même facteur', 'iscorrect' => false],
                        ['text' => 'Une concentration sur une seule entreprise', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que signifie une allocation tactique ?', 'answers' => [
                        ['text' => 'Une modification temporaire des pondérations autour des allocations stratégiques', 'iscorrect' => true],
                        ['text' => 'Une liquidation permanente du portefeuille', 'iscorrect' => false],
                        ['text' => 'Une stratégie qui interdit tout rééquilibrage', 'iscorrect' => false],
                        ['text' => 'Une allocation uniquement fondée sur les dividendes', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les obligations peuvent-elles jouer un rôle de diversification face aux actions ?', 'answers' => [
                        ['text' => 'Leurs facteurs de risque et leurs réactions aux conditions économiques peuvent différer de ceux des actions', 'iscorrect' => true],
                        ['text' => 'Elles sont toujours négativement corrélées aux actions', 'iscorrect' => false],
                        ['text' => 'Elles ne présentent aucun risque', 'iscorrect' => false],
                        ['text' => 'Leur rendement est toujours supérieur', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le risque d’une diversification excessive ?', 'answers' => [
                        ['text' => 'Diluer les positions réellement attractives et augmenter inutilement la complexité du portefeuille', 'iscorrect' => true],
                        ['text' => 'Garantir une perte totale', 'iscorrect' => false],
                        ['text' => 'Supprimer automatiquement tous les coûts', 'iscorrect' => false],
                        ['text' => 'Rendre le portefeuille totalement illiquide dans tous les cas', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel facteur doit être pris en compte lors de la détermination de l’allocation stratégique ?', 'answers' => [
                        ['text' => 'L’horizon d’investissement, la tolérance au risque, les objectifs et les contraintes de l’investisseur', 'iscorrect' => true],
                        ['text' => 'Uniquement la performance du dernier mois', 'iscorrect' => false],
                        ['text' => 'Uniquement le prix des actions', 'iscorrect' => false],
                        ['text' => 'Uniquement les recommandations médiatiques', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le rôle d’une classe d’actifs dans un portefeuille ?', 'answers' => [
                        ['text' => 'Apporter une combinaison particulière de rendement attendu, risque et exposition à des facteurs économiques', 'iscorrect' => true],
                        ['text' => 'Garantir un rendement fixe', 'iscorrect' => false],
                        ['text' => 'Éliminer toutes les pertes', 'iscorrect' => false],
                        ['text' => 'Remplacer toute analyse de risque', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi une allocation stratégique doit-elle être révisée périodiquement ?', 'answers' => [
                        ['text' => 'Parce que les objectifs, contraintes, valorisations et caractéristiques de marché peuvent évoluer', 'iscorrect' => true],
                        ['text' => 'Parce qu’elle doit changer chaque jour', 'iscorrect' => false],
                        ['text' => 'Parce que les allocations historiques sont toujours incorrectes', 'iscorrect' => false],
                        ['text' => 'Parce qu’un portefeuille ne peut jamais conserver une allocation stable', 'iscorrect' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Risque et rendement du portefeuille',
                'questions' => [
                    ['question' => 'Comment mesure-t-on couramment la volatilité historique d’un portefeuille ?', 'answers' => [
                        ['text' => 'Par l’écart-type de ses rendements', 'iscorrect' => true],
                        ['text' => 'Par son chiffre d’affaires', 'iscorrect' => false],
                        ['text' => 'Par son dividende uniquement', 'iscorrect' => false],
                        ['text' => 'Par son nombre de titres', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que mesure le bêta d’un titre par rapport au marché ?', 'answers' => [
                        ['text' => 'Sa sensibilité aux variations du rendement du portefeuille de marché', 'iscorrect' => true],
                        ['text' => 'Son rendement garanti', 'iscorrect' => false],
                        ['text' => 'Son risque spécifique uniquement', 'iscorrect' => false],
                        ['text' => 'Sa liquidité quotidienne', 'iscorrect' => false],
                    ]],
                    ['question' => 'Un portefeuille a un bêta de 1,2. Quelle interprétation est la plus appropriée ?', 'answers' => [
                        ['text' => 'Il présente historiquement une sensibilité supérieure à celle du marché aux variations systématiques', 'iscorrect' => true],
                        ['text' => 'Il est 20 % moins risqué que le marché', 'iscorrect' => false],
                        ['text' => 'Il garantit 20 % de rendement supplémentaire', 'iscorrect' => false],
                        ['text' => 'Il ne possède aucun risque spécifique', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel risque ne peut généralement pas être éliminé par une diversification importante ?', 'answers' => [
                        ['text' => 'Le risque systématique lié aux mouvements généraux du marché', 'iscorrect' => true],
                        ['text' => 'Le risque spécifique d’une entreprise', 'iscorrect' => false],
                        ['text' => 'Le risque lié à une erreur comptable d’une seule société', 'iscorrect' => false],
                        ['text' => 'Le risque spécifique d’un seul secteur', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que mesure le ratio de Sharpe ?', 'answers' => [
                        ['text' => 'Le rendement excédentaire par unité de volatilité', 'iscorrect' => true],
                        ['text' => 'Le rendement absolu sans tenir compte du risque', 'iscorrect' => false],
                        ['text' => 'Le bêta multiplié par le dividende', 'iscorrect' => false],
                        ['text' => 'La liquidité moyenne du portefeuille', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le principal défaut d’une mesure de risque basée uniquement sur la volatilité ?', 'answers' => [
                        ['text' => 'Elle traite généralement les variations positives et négatives comme également risquées', 'iscorrect' => true],
                        ['text' => 'Elle ne peut jamais être calculée', 'iscorrect' => false],
                        ['text' => 'Elle mesure uniquement le risque de crédit', 'iscorrect' => false],
                        ['text' => 'Elle ignore toujours les rendements historiques', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que représente le drawdown maximal ?', 'answers' => [
                        ['text' => 'La perte maximale observée entre un sommet et le creux suivant sur une période donnée', 'iscorrect' => true],
                        ['text' => 'Le rendement moyen annuel', 'iscorrect' => false],
                        ['text' => 'Le dividende maximal', 'iscorrect' => false],
                        ['text' => 'La volatilité quotidienne moyenne', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi le rendement attendu est-il différent du rendement réalisé ?', 'answers' => [
                        ['text' => 'Le rendement attendu est une estimation probabiliste tandis que le rendement réalisé dépend des événements effectivement observés', 'iscorrect' => true],
                        ['text' => 'Les deux sont toujours identiques', 'iscorrect' => false],
                        ['text' => 'Le rendement réalisé est toujours supérieur', 'iscorrect' => false],
                        ['text' => 'Le rendement attendu est garanti', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel effet produit généralement l’ajout d’un actif faiblement corrélé à un portefeuille ?', 'answers' => [
                        ['text' => 'Il peut réduire la volatilité globale du portefeuille pour un niveau de rendement attendu donné', 'iscorrect' => true],
                        ['text' => 'Il augmente nécessairement le risque', 'iscorrect' => false],
                        ['text' => 'Il élimine le risque systématique', 'iscorrect' => false],
                        ['text' => 'Il garantit un rendement supérieur', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi faut-il distinguer risque total et risque systématique ?', 'answers' => [
                        ['text' => 'Parce que le risque total inclut notamment le risque spécifique alors que le risque systématique est lié aux facteurs communs du marché', 'iscorrect' => true],
                        ['text' => 'Parce qu’ils sont toujours identiques', 'iscorrect' => false],
                        ['text' => 'Parce que le risque systématique concerne uniquement les obligations', 'iscorrect' => false],
                        ['text' => 'Parce que le risque total ne peut jamais être mesuré', 'iscorrect' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Modèle moyenne-variance et frontière efficiente',
                'questions' => [
                    ['question' => 'Quel est le principe central de l’approche moyenne-variance ?', 'answers' => [
                        ['text' => Comparer les portefeuilles selon leur rendement attendu et leur variance, 'iscorrect' => true],
                        ['text' => 'Sélectionner uniquement les actifs les plus rentables', 'iscorrect' => false],
                        ['text' => 'Ignorer les corrélations', 'iscorrect' => false],
                        ['text' => 'Minimiser uniquement le nombre de titres', 'iscorrect' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un portefeuille efficient ?', 'answers' => [
                        ['text' => 'Un portefeuille pour lequel aucune combinaison ne permet d’obtenir plus de rendement pour le même risque ou moins de risque pour le même rendement', 'iscorrect' => true],
                        ['text' => 'Le portefeuille ayant toujours le rendement maximal', 'iscorrect' => false],
                        ['text' => 'Le portefeuille contenant le plus de titres', 'iscorrect' => false],
                        ['text' => 'Le portefeuille sans volatilité', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que représente la frontière efficiente ?', 'answers' => [
                        ['text' => 'L’ensemble des portefeuilles offrant les meilleurs rendements attendus pour chaque niveau de risque', 'iscorrect' => true],
                        ['text' => 'L’ensemble de toutes les actions cotées', 'iscorrect' => false],
                        ['text' => 'Uniquement les portefeuilles sans obligations', 'iscorrect' => false],
                        ['text' => 'Les portefeuilles ayant le rendement historique maximal', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les covariances sont-elles importantes dans l’optimisation de portefeuille ?', 'answers' => [
                        ['text' => 'Elles déterminent comment les rendements des actifs contribuent ensemble au risque global', 'iscorrect' => true],
                        ['text' => 'Elles mesurent uniquement le rendement attendu', 'iscorrect' => false],
                        ['text' => 'Elles remplacent les pondérations', 'iscorrect' => false],
                        ['text' => 'Elles garantissent une diversification parfaite', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le principal problème d’une optimisation utilisant des estimations instables de rendement attendu ?', 'answers' => [
                        ['text' => 'De petites erreurs d’estimation peuvent entraîner des pondérations extrêmes et peu robustes', 'iscorrect' => true],
                        ['text' => 'Elle garantit toujours la meilleure allocation', 'iscorrect' => false],
                        ['text' => 'Elle élimine le besoin de contraintes', 'iscorrect' => false],
                        ['text' => 'Elle rend les covariances inutiles', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que signifie le portefeuille de variance minimale ?', 'answers' => [
                        ['text' => 'Le portefeuille présentant la variance la plus faible parmi les portefeuilles considérés', 'iscorrect' => true],
                        ['text' => 'Le portefeuille ayant le rendement maximal', 'iscorrect' => false],
                        ['text' => 'Le portefeuille sans risque de marché', 'iscorrect' => false],
                        ['text' => 'Le portefeuille ayant toujours le meilleur ratio de Sharpe', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi des contraintes de pondération peuvent-elles être ajoutées à une optimisation ?', 'answers' => [
                        ['text' => 'Pour limiter les concentrations, les ventes à découvert, le turnover ou les expositions indésirables', 'iscorrect' => true],
                        ['text' => 'Pour supprimer toute incertitude', 'iscorrect' => false],
                        ['text' => 'Pour garantir un rendement positif', 'iscorrect' => false],
                        ['text' => 'Pour rendre les corrélations nulles', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le rôle du portefeuille tangent dans le cadre moyenne-variance avec un actif sans risque ?', 'answers' => [
                        ['text' => 'Il correspond au portefeuille risqué qui maximise le ratio de Sharpe et définit la pente de la meilleure droite d’allocation', 'iscorrect' => true],
                        ['text' => 'Il correspond toujours au portefeuille de variance minimale', 'iscorrect' => false],
                        ['text' => 'Il ne contient jamais d’actions', 'iscorrect' => false],
                        ['text' => 'Il garantit le rendement maximal', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel problème peut provoquer une matrice de covariance mal estimée ?', 'answers' => [
                        ['text' => Une allocation instable ou des expositions de risque incorrectement évaluées, 'iscorrect' => true],
                        ['text' => 'Une garantie de diversification', 'iscorrect' => false],
                        ['text' => 'Une hausse automatique du rendement', 'iscorrect' => false],
                        ['text' => 'Une suppression du risque de modèle', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi une optimisation robuste peut-elle préférer des portefeuilles moins extrêmes ?', 'answers' => [
                        ['text' => 'Parce qu’elle cherche à réduire la sensibilité de l’allocation aux erreurs d’estimation', 'iscorrect' => true],
                        ['text' => 'Parce que les pondérations extrêmes sont toujours rentables', 'iscorrect' => false],
                        ['text' => 'Parce qu’elle interdit toute diversification', 'iscorrect' => false],
                        ['text' => 'Parce que le rendement attendu n’a aucune importance', 'iscorrect' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Rééquilibrage et gestion dynamique',
                'questions' => [
                    ['question' => 'Quel est l’objectif du rééquilibrage d’un portefeuille ?', 'answers' => [
                        ['text' => Ramener les pondérations vers les allocations cibles définies dans la politique d’investissement, 'iscorrect' => true],
                        ['text' => 'Maximiser le nombre de transactions', 'iscorrect' => false],
                        ['text' => 'Acheter uniquement les actifs ayant le plus monté', 'iscorrect' => false],
                        ['text' => 'Éliminer tout risque de marché', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que peut provoquer un rééquilibrage trop fréquent ?', 'answers' => [
                        ['text' => 'Une augmentation du turnover, des coûts de transaction et potentiellement de la fiscalité', 'iscorrect' => true],
                        ['text' => 'Une disparition automatique du risque', 'iscorrect' => false],
                        ['text' => 'Une garantie de surperformance', 'iscorrect' => false],
                        ['text' => 'Une réduction certaine des frais', 'iscorrect' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un rééquilibrage fondé sur des seuils ?', 'answers' => [
                        ['text' => 'Une intervention déclenchée lorsque l’écart d’une pondération par rapport à sa cible dépasse une limite prédéfinie', 'iscorrect' => true],
                        ['text' => 'Une intervention chaque jour', 'iscorrect' => false],
                        ['text' => 'Une vente automatique de tous les actifs', 'iscorrect' => false],
                        ['text' => 'Une stratégie sans allocation cible', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi le rééquilibrage peut-il imposer une discipline comportementale ?', 'answers' => [
                        ['text' => 'Il oblige à vendre une partie des actifs devenus surpondérés et à renforcer ceux devenus sous-pondérés selon la politique définie', 'iscorrect' => true],
                        ['text' => 'Il garantit que les actifs gagnants continueront à monter', 'iscorrect' => false],
                        ['text' => 'Il interdit toute prise de décision', 'iscorrect' => false],
                        ['text' => 'Il élimine les émotions des marchés', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quelle différence existe entre rééquilibrage calendaire et rééquilibrage par seuils ?', 'answers' => [
                        ['text' => 'Le premier dépend d’une date définie, tandis que le second dépend de l’ampleur des écarts aux cibles', 'iscorrect' => true],
                        ['text' => 'Ils sont exactement identiques', 'iscorrect' => false],
                        ['text' => 'Le rééquilibrage par seuils n’utilise jamais de cible', 'iscorrect' => false],
                        ['text' => 'Le rééquilibrage calendaire exige des produits dérivés', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel élément peut justifier un rééquilibrage moins agressif ?', 'answers' => [
                        ['text' => 'Des coûts de transaction élevés ou des contraintes fiscales importantes', 'iscorrect' => true],
                        ['text' => 'Une corrélation parfaite de tous les actifs', 'iscorrect' => false],
                        ['text' => 'L’absence totale de contraintes', 'iscorrect' => false],
                        ['text' => 'Une garantie de rendement', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les flux de trésorerie entrants peuvent-ils être utilisés pour rééquilibrer ?', 'answers' => [
                        ['text' => 'Ils permettent de renforcer les actifs sous-pondérés sans nécessairement vendre des positions existantes', 'iscorrect' => true],
                        ['text' => 'Ils suppriment tous les risques', 'iscorrect' => false],
                        ['text' => 'Ils garantissent un rendement supérieur', 'iscorrect' => false],
                        ['text' => 'Ils empêchent toute modification d’allocation', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel risque existe lorsqu’un portefeuille n’est jamais rééquilibré ?', 'answers' => [
                        ['text' => 'Les pondérations peuvent dériver fortement et modifier le profil de risque initial', 'iscorrect' => true],
                        ['text' => 'Le portefeuille devient automatiquement plus diversifié', 'iscorrect' => false],
                        ['text' => 'Le rendement devient garanti', 'iscorrect' => false],
                        ['text' => 'La volatilité devient nulle', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi le rééquilibrage peut-il être considéré comme une décision de gestion du risque ?', 'answers' => [
                        ['text' => 'Il permet de maintenir les expositions proches des limites définies dans la politique d’investissement', 'iscorrect' => true],
                        ['text' => 'Il garantit les rendements', 'iscorrect' => false],
                        ['text' => 'Il élimine le risque systématique', 'iscorrect' => false],
                        ['text' => 'Il rend les marchés prévisibles', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel compromis doit être évalué avant chaque rééquilibrage ?', 'answers' => [
                        ['text' => 'Le bénéfice attendu en matière de contrôle du risque par rapport aux coûts de transaction et aux contraintes fiscales', 'iscorrect' => true],
                        ['text' => 'Uniquement le nombre de titres', 'iscorrect' => false],
                        ['text' => 'Uniquement le rendement du dernier jour', 'iscorrect' => false],
                        ['text' => 'Uniquement le sentiment des médias', 'iscorrect' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Performance et attribution',
                'questions' => [
                    ['question' => 'Pourquoi comparer la performance d’un portefeuille à un benchmark approprié ?', 'answers' => [
                        ['text' => 'Pour évaluer la performance relative compte tenu de l’univers d’investissement et des risques pris', 'iscorrect' => true],
                        ['text' => 'Pour garantir une performance positive', 'iscorrect' => false],
                        ['text' => 'Pour supprimer le risque', 'iscorrect' => false],
                        ['text' => 'Pour remplacer les objectifs de l’investisseur', 'iscorrect' => false],
                    ]],
                    ['question' => 'Qu’est-ce que l’alpha d’un portefeuille cherche généralement à mesurer ?', 'answers' => [
                        ['text' => 'La performance excédentaire attribuable à la gestion après prise en compte des facteurs ou du benchmark considérés', 'iscorrect' => true],
                        ['text' => 'Le risque total uniquement', 'iscorrect' => false],
                        ['text' => 'Le rendement sans risque', 'iscorrect' => false],
                        ['text' => 'La taille du portefeuille', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le rôle d’une analyse d’attribution de performance ?', 'answers' => [
                        ['text' => 'Identifier les sources de la performance, telles que l’allocation, la sélection ou l’exposition aux facteurs', 'iscorrect' => true],
                        ['text' => 'Prévoir exactement la performance future', 'iscorrect' => false],
                        ['text' => 'Éliminer les coûts de gestion', 'iscorrect' => false],
                        ['text' => 'Remplacer le benchmark', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une gestionnaire surpondère un secteur qui surperforme fortement. Quel effet peut-elle avoir ?', 'answers' => [
                        ['text' => 'Une contribution positive de l’allocation sectorielle à la performance relative', 'iscorrect' => true],
                        ['text' => 'Une contribution nécessairement négative', 'iscorrect' => false],
                        ['text' => 'Aucun effet possible', 'iscorrect' => false],
                        ['text' => 'Une suppression du risque systématique', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les rendements doivent-ils être comparés sur des périodes cohérentes ?', 'answers' => [
                        ['text' => 'Parce que des horizons différents peuvent produire des conclusions trompeuses sur la performance et le risque', 'iscorrect' => true],
                        ['text' => 'Parce que les rendements sont toujours constants', 'iscorrect' => false],
                        ['text' => 'Parce que les benchmarks ne changent jamais', 'iscorrect' => false],
                        ['text' => 'Parce que la volatilité ne dépend pas de la période', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel problème peut apparaître lorsqu’on évalue un gestionnaire uniquement sur une courte période ?', 'answers' => [
                        ['text' => 'Le résultat peut être fortement influencé par le hasard et les conditions temporaires de marché', 'iscorrect' => true],
                        ['text' => 'La performance devient nécessairement plus fiable', 'iscorrect' => false],
                        ['text' => 'Le risque disparaît', 'iscorrect' => false],
                        ['text' => 'L’alpha devient garanti', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les coûts doivent-ils être intégrés dans l’évaluation de performance ?', 'answers' => [
                        ['text' => 'Parce que la performance nette réellement obtenue par l’investisseur dépend des frais et coûts de transaction', 'iscorrect' => true],
                        ['text' => 'Parce que les coûts augmentent toujours le rendement', 'iscorrect' => false],
                        ['text' => 'Parce que les frais ne concernent que les obligations', 'iscorrect' => false],
                        ['text' => 'Parce que les coûts sont toujours nuls', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel indicateur combine généralement rendement excédentaire et risque total ?', 'answers' => [
                        ['text' => 'Le ratio de Sharpe', 'iscorrect' => true],
                        ['text' => 'Le bêta seul', 'iscorrect' => false],
                        ['text' => 'Le taux de rotation seul', 'iscorrect' => false],
                        ['text' => 'Le rendement nominal seul', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que mesure le ratio de Treynor ?', 'answers' => [
                        ['text' => 'Le rendement excédentaire par unité de risque systématique mesuré par le bêta', 'iscorrect' => true],
                        ['text' => 'Le rendement par unité de risque spécifique uniquement', 'iscorrect' => false],
                        ['text' => 'La liquidité du portefeuille', 'iscorrect' => false],
                        ['text' => 'Le drawdown maximal', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi une bonne performance absolue peut-elle être insuffisante pour juger un portefeuille ?', 'answers' => [
                        ['text' => 'Parce qu’il faut également considérer le risque pris, les objectifs et la performance d’un benchmark pertinent', 'iscorrect' => true],
                        ['text' => 'Parce que les rendements absolus sont toujours inutiles', 'iscorrect' => false],
                        ['text' => 'Parce que le benchmark garantit la performance', 'iscorrect' => false],
                        ['text' => 'Parce que le risque n’a aucune importance', 'iscorrect' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Gestion obligataire et duration',
                'questions' => [
                    ['question' => 'Quel est l’effet général d’une hausse des taux d’intérêt sur le prix d’une obligation à taux fixe ?', 'answers' => [
                        ['text' => 'Son prix tend à diminuer', 'iscorrect' => true],
                        ['text' => 'Son prix augmente toujours', 'iscorrect' => false],
                        ['text' => 'Son prix reste nécessairement inchangé', 'iscorrect' => false],
                        ['text' => 'Son coupon augmente automatiquement', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que mesure approximativement la duration de Macaulay ?', 'answers' => [
                        ['text' => 'La maturité moyenne pondérée des flux de trésorerie actualisés d’une obligation', 'iscorrect' => true],
                        ['text' => 'Le coupon annuel uniquement', 'iscorrect' => false],
                        ['text' => 'Le spread de crédit uniquement', 'iscorrect' => false],
                        ['text' => 'La volatilité des actions', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi la duration modifiée est-elle utile en gestion obligataire ?', 'answers' => [
                        ['text' => 'Elle permet d’estimer la sensibilité du prix d’une obligation à une variation du rendement', 'iscorrect' => true],
                        ['text' => 'Elle mesure directement le risque de défaut', 'iscorrect' => false],
                        ['text' => 'Elle garantit le rendement futur', 'iscorrect' => false],
                        ['text' => 'Elle mesure uniquement la liquidité', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel portefeuille obligataire est généralement plus sensible aux taux ?', 'answers' => [
                        ['text' => 'Celui dont la duration est la plus élevée', 'iscorrect' => true],
                        ['text' => 'Celui dont la duration est nulle', 'iscorrect' => false],
                        ['text' => 'Celui ayant uniquement des coupons élevés', 'iscorrect' => false],
                        ['text' => 'Celui ayant toujours le rendement le plus faible', 'iscorrect' => false],
                    ]],
                    ['question' => 'Qu’est-ce que le risque de crédit ?', 'answers' => [
                        ['text' => 'Le risque qu’un émetteur ne respecte pas ses obligations financières', 'iscorrect' => true],
                        ['text' => 'Le risque de variation du prix des actions uniquement', 'iscorrect' => false],
                        ['text' => 'Le risque lié uniquement à l’inflation', 'iscorrect' => false],
                        ['text' => 'Le risque d’une hausse des dividendes', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les obligations à maturité longue peuvent-elles présenter un risque de taux plus élevé ?', 'answers' => [
                        ['text' => 'Leurs flux sont généralement plus sensibles aux variations du taux d’actualisation', 'iscorrect' => true],
                        ['text' => 'Elles n’ont jamais de coupon', 'iscorrect' => false],
                        ['text' => 'Elles sont toujours sans risque', 'iscorrect' => false],
                        ['text' => 'Leur prix ne dépend pas des taux', 'iscorrect' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un spread de crédit ?', 'answers' => [
                        ['text' => 'L’écart de rendement entre une obligation risquée et une référence considérée comme moins risquée', 'iscorrect' => true],
                        ['text' => 'La différence entre deux coupons identiques', 'iscorrect' => false],
                        ['text' => 'Le rendement du marché actions', 'iscorrect' => false],
                        ['text' => 'La maturité d’une obligation', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi la diversification entre émetteurs est-elle importante dans un portefeuille obligataire ?', 'answers' => [
                        ['text' => 'Elle réduit l’exposition au défaut ou à la détérioration d’un seul émetteur', 'iscorrect' => true],
                        ['text' => 'Elle garantit l’absence de risque de taux', 'iscorrect' => false],
                        ['text' => 'Elle supprime tous les spreads', 'iscorrect' => false],
                        ['text' => 'Elle augmente nécessairement le rendement', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel effet une dégradation de la qualité de crédit peut-elle avoir sur une obligation ?', 'answers' => [
                        ['text' => 'Elle peut augmenter le spread exigé et faire baisser le prix de l’obligation', 'iscorrect' => true],
                        ['text' => 'Elle garantit une hausse du prix', 'iscorrect' => false],
                        ['text' => 'Elle augmente automatiquement le coupon contractuel', 'iscorrect' => false],
                        ['text' => 'Elle supprime le risque de taux', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi la gestion de duration peut-elle être utilisée pour contrôler le risque de taux ?', 'answers' => [
                        ['text' => 'Elle permet d’ajuster la sensibilité du portefeuille aux variations des rendements obligataires', 'iscorrect' => true],
                        ['text' => 'Elle élimine le risque de défaut', 'iscorrect' => false],
                        ['text' => 'Elle garantit un rendement positif', 'iscorrect' => false],
                        ['text' => 'Elle rend les obligations sans volatilité', 'iscorrect' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Gestion des actions et facteurs',
                'questions' => [
                    ['question' => 'Quel facteur caractérise généralement une stratégie value ?', 'answers' => [
                        ['text' => 'La sélection de titres jugés relativement bon marché selon des indicateurs fondamentaux', 'iscorrect' => true],
                        ['text' => 'L’achat uniquement des titres les plus chers', 'iscorrect' => false],
                        ['text' => 'L’absence totale d’analyse financière', 'iscorrect' => false],
                        ['text' => 'La recherche exclusive de volatilité', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel principe est associé au facteur momentum ?', 'answers' => [
                        ['text' => 'Les actifs ayant récemment affiché une forte dynamique peuvent continuer temporairement à surperformer', 'iscorrect' => true],
                        ['text' => 'Tous les actifs baissent après une hausse', 'iscorrect' => false],
                        ['text' => 'Le momentum garantit le rendement', 'iscorrect' => false],
                        ['text' => 'Le momentum mesure uniquement les dividendes', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que recherche généralement une stratégie quality ?', 'answers' => [
                        ['text' => 'Des entreprises présentant des fondamentaux solides et une rentabilité durable', 'iscorrect' => true],
                        ['text' => 'Des entreprises uniquement très endettées', 'iscorrect' => false],
                        ['text' => 'Des titres sans bénéfices', 'iscorrect' => false],
                        ['text' => 'Des entreprises avec une volatilité maximale', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le risque d’une concentration excessive dans un secteur ?', 'answers' => [
                        ['text' => 'Un choc spécifique au secteur peut affecter une part importante du portefeuille simultanément', 'iscorrect' => true],
                        ['text' => 'Le rendement devient garanti', 'iscorrect' => false],
                        ['text' => 'La diversification augmente automatiquement', 'iscorrect' => false],
                        ['text' => 'Le risque systématique disparaît', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi le style d’investissement doit-il être cohérent avec les objectifs du portefeuille ?', 'answers' => [
                        ['text' => 'Chaque style possède des caractéristiques différentes de rendement, risque, horizon et comportement selon les marchés', 'iscorrect' => true],
                        ['text' => 'Tous les styles produisent exactement les mêmes résultats', 'iscorrect' => false],
                        ['text' => 'Le style n’a aucun effet sur le portefeuille', 'iscorrect' => false],
                        ['text' => 'Les styles déterminent automatiquement les taux d’intérêt', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les petites capitalisations peuvent-elles être plus volatiles ?', 'answers' => [
                        ['text' => 'Elles peuvent présenter une liquidité moindre, une information moins abondante et une sensibilité plus forte aux conditions économiques', 'iscorrect' => true],
                        ['text' => 'Elles sont toujours déficitaires', 'iscorrect' => false],
                        ['text' => 'Elles ne sont jamais cotées', 'iscorrect' => false],
                        ['text' => 'Elles n’ont aucun risque', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le risque d’un portefeuille fortement exposé au facteur momentum ?', 'answers' => [
                        ['text' => 'Un retournement rapide du marché peut provoquer des pertes importantes sur les positions de momentum', 'iscorrect' => true],
                        ['text' => 'Une garantie de surperformance', 'iscorrect' => false],
                        ['text' => 'Une absence de corrélation entre les titres', 'iscorrect' => false],
                        ['text' => 'Une réduction automatique du turnover', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les valorisations relatives doivent-elles être comparées aux fondamentaux ?', 'answers' => [
                        ['text' => 'Un multiple faible peut refléter un risque ou une détérioration fondamentale plutôt qu’une sous-évaluation', 'iscorrect' => true],
                        ['text' => 'Un multiple faible garantit toujours une bonne affaire', 'iscorrect' => false],
                        ['text' => 'Les fondamentaux ne servent qu’aux obligations', 'iscorrect' => false],
                        ['text' => 'Les multiples n’ont aucune information', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel rôle peut jouer le taux de croissance des bénéfices dans la valorisation d’une action ?', 'answers' => [
                        ['text' => 'Il influence les flux futurs et peut donc affecter la valeur fondamentale estimée', 'iscorrect' => true],
                        ['text' => 'Il détermine automatiquement le prix futur', 'iscorrect' => false],
                        ['text' => 'Il n’a aucun lien avec la valeur', 'iscorrect' => false],
                        ['text' => 'Il remplace le taux d’actualisation', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi une analyse sectorielle est-elle utile pour un gestionnaire actions ?', 'answers' => [
                        ['text' => 'Elle permet de comprendre les moteurs économiques, la concurrence, les cycles et les risques propres aux secteurs', 'iscorrect' => true],
                        ['text' => 'Elle garantit la performance de chaque entreprise', 'iscorrect' => false],
                        ['text' => 'Elle remplace les états financiers', 'iscorrect' => false],
                        ['text' => 'Elle élimine le risque de marché', 'iscorrect' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Gestion alternative et actifs non traditionnels',
                'questions' => [
                    ['question' => 'Pourquoi les actifs alternatifs peuvent-ils améliorer un portefeuille ?', 'answers' => [
                        ['text' => 'Ils peuvent offrir des sources de rendement et de risque différentes de celles des actifs traditionnels', 'iscorrect' => true],
                        ['text' => 'Ils sont toujours sans risque', 'iscorrect' => false],
                        ['text' => 'Ils garantissent une corrélation négative', 'iscorrect' => false],
                        ['text' => 'Ils ne nécessitent aucune analyse', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel risque est particulièrement important pour les investissements immobiliers ?', 'answers' => [
                        ['text' => 'Le risque lié aux cycles immobiliers, aux taux, à l’occupation et à la liquidité', 'iscorrect' => true],
                        ['text' => 'L’absence totale de revenus', 'iscorrect' => false],
                        ['text' => 'Une liquidité toujours parfaite', 'iscorrect' => false],
                        ['text' => 'L’absence de sensibilité aux taux', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi le private equity présente-t-il généralement une liquidité plus faible ?', 'answers' => [
                        ['text' => 'Les participations ne sont généralement pas négociées quotidiennement sur un marché organisé', 'iscorrect' => true],
                        ['text' => 'Les entreprises privées n’ont aucune valeur', 'iscorrect' => false],
                        ['text' => 'Les investisseurs ne peuvent jamais vendre', 'iscorrect' => false],
                        ['text' => 'La volatilité y est toujours nulle', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le risque d’un effet de levier important dans un fonds alternatif ?', 'answers' => [
                        ['text' => 'Il peut amplifier les gains mais aussi les pertes et les besoins de liquidité', 'iscorrect' => true],
                        ['text' => 'Il supprime le risque', 'iscorrect' => false],
                        ['text' => 'Il garantit un rendement supérieur', 'iscorrect' => false],
                        ['text' => 'Il rend les actifs plus liquides', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les infrastructures peuvent-elles être intéressantes pour un portefeuille ?', 'answers' => [
                        ['text' => 'Elles peuvent offrir des flux relativement prévisibles et une exposition à des actifs réels', 'iscorrect' => true],
                        ['text' => 'Elles ne présentent jamais de risque réglementaire', 'iscorrect' => false],
                        ['text' => 'Elles sont toujours parfaitement liquides', 'iscorrect' => false],
                        ['text' => 'Elles garantissent une croissance élevée', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel problème peut apparaître dans l’évaluation d’actifs privés ?', 'answers' => [
                        ['text' => 'L’absence de prix de marché fréquent peut rendre les valorisations moins transparentes et plus dépendantes des modèles', 'iscorrect' => true],
                        ['text' => 'Les actifs privés ont toujours un prix observable quotidiennement', 'iscorrect' => false],
                        ['text' => 'Le risque de modèle est nul', 'iscorrect' => false],
                        ['text' => 'Les valorisations privées sont toujours exactes', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les hedge funds doivent-ils être analysés au-delà de leur rendement historique ?', 'answers' => [
                        ['text' => 'Il faut comprendre la stratégie, le levier, la liquidité, les frais et les sources de risque', 'iscorrect' => true],
                        ['text' => 'Le rendement historique suffit toujours', 'iscorrect' => false],
                        ['text' => 'Les hedge funds n’ont aucun risque', 'iscorrect' => false],
                        ['text' => 'Les frais n’ont jamais d’importance', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le risque de valorisation lissée dans certains actifs privés ?', 'answers' => [
                        ['text' => 'La volatilité observée peut sous-estimer le risque économique réel lorsque les prix ne sont pas fréquemment observés', 'iscorrect' => true],
                        ['text' => 'Elle garantit une faible volatilité réelle', 'iscorrect' => false],
                        ['text' => 'Elle élimine le risque de marché', 'iscorrect' => false],
                        ['text' => 'Elle augmente toujours la liquidité', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les frais sont-ils particulièrement importants dans les investissements alternatifs ?', 'answers' => [
                        ['text' => 'Des frais élevés peuvent réduire fortement le rendement net lorsque les stratégies sont complexes ou peu liquides', 'iscorrect' => true],
                        ['text' => 'Les frais augmentent toujours la performance', 'iscorrect' => false],
                        ['text' => 'Les frais ne concernent pas les fonds', 'iscorrect' => false],
                        ['text' => 'Les frais sont toujours nuls', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quelle approche est pertinente avant d’intégrer un actif alternatif ?', 'answers' => [
                        ['text' => 'Analyser sa contribution marginale au rendement, au risque, à la liquidité et aux contraintes du portefeuille', 'iscorrect' => true],
                        ['text' => 'L’ajouter uniquement parce que son rendement passé est élevé', 'iscorrect' => false],
                        ['text' => 'Ignorer les frais', 'iscorrect' => false],
                        ['text' => 'Supposer qu’il est toujours décorrélé', 'iscorrect' => false],
                    ]],
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

                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['text'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
