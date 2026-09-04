```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialMathematicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-mathematics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Valorisation avancée et structure par terme',
                'questions' => [
                    [
                        'question' => 'Quel principe relie les facteurs d’actualisation aux taux zéro-coupon ?',
                        'answers' => [
                            ['text' => 'Le facteur d’actualisation d’une échéance est déterminé par le taux zéro correspondant à cette échéance', 'iscorrect' => true],
                            ['text' => 'Tous les facteurs dépendent uniquement du taux directeur', 'iscorrect' => false],
                            ['text' => 'Le facteur est indépendant de l’échéance', 'iscorrect' => false],
                            ['text' => 'Le facteur est toujours égal au taux zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux forward implicite ?',
                        'answers' => [
                            ['text' => 'Un taux futur déduit des taux zéro observés pour différentes échéances', 'iscorrect' => true],
                            ['text' => 'Un taux historique fixé par la comptabilité', 'iscorrect' => false],
                            ['text' => 'Un taux nécessairement égal au taux spot', 'iscorrect' => false],
                            ['text' => 'Un taux utilisé uniquement pour les actions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une valorisation sans arbitrage, pourquoi les flux sont-ils actualisés avec des taux correspondant à leurs échéances ?',
                        'answers' => [
                            ['text' => 'Pour respecter la structure temporelle des prix de marché', 'iscorrect' => true],
                            ['text' => 'Pour rendre tous les flux identiques', 'iscorrect' => false],
                            ['text' => 'Pour supprimer le risque de crédit', 'iscorrect' => false],
                            ['text' => 'Pour éviter de connaître les dates des flux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une courbe de taux inversée signifie généralement que :',
                        'answers' => [
                            ['text' => 'Certains taux courts sont supérieurs aux taux longs correspondants', 'iscorrect' => true],
                            ['text' => 'Tous les taux sont identiques', 'iscorrect' => false],
                            ['text' => 'Les taux longs sont nécessairement négatifs', 'iscorrect' => false],
                            ['text' => 'Les taux courts sont nécessairement nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le bootstrapping d’une courbe zéro-coupon sert principalement à :',
                        'answers' => [
                            ['text' => 'Extraire successivement les taux ou facteurs d’actualisation à partir d’instruments de marché', 'iscorrect' => true],
                            ['text' => 'Calculer uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Supprimer les données de marché', 'iscorrect' => false],
                            ['text' => 'Déterminer le bénéfice comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est au cœur de l’absence d’arbitrage ?',
                        'answers' => [
                            ['text' => 'Deux stratégies produisant les mêmes flux futurs doivent avoir le même prix', 'iscorrect' => true],
                            ['text' => 'Tous les actifs doivent avoir le même rendement', 'iscorrect' => false],
                            ['text' => 'Tous les taux doivent être nuls', 'iscorrect' => false],
                            ['text' => 'Les prix doivent être indépendants des flux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une incohérence entre deux facteurs d’actualisation de marché peut théoriquement permettre :',
                        'answers' => [
                            ['text' => 'Une stratégie d’arbitrage', 'iscorrect' => true],
                            ['text' => 'Une suppression automatique du risque', 'iscorrect' => false],
                            ['text' => 'Une hausse certaine de tous les prix', 'iscorrect' => false],
                            ['text' => 'Une disparition des taux forward', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une courbe de taux peut-elle nécessiter plusieurs instruments pour être construite ?',
                        'answers' => [
                            ['text' => 'Parce que les instruments couvrent différentes échéances et permettent d’identifier différents facteurs', 'iscorrect' => true],
                            ['text' => 'Parce qu’un seul instrument ne possède jamais de prix', 'iscorrect' => false],
                            ['text' => 'Parce que les taux sont toujours identiques', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations ne peuvent pas être valorisées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet une interpolation inappropriée de la courbe peut-elle avoir ?',
                        'answers' => [
                            ['text' => 'Elle peut introduire des erreurs de valorisation ou de mesure du risque', 'iscorrect' => true],
                            ['text' => 'Elle garantit toujours une valorisation exacte', 'iscorrect' => false],
                            ['text' => 'Elle supprime la sensibilité aux taux', 'iscorrect' => false],
                            ['text' => 'Elle rend tous les taux égaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une approche professionnelle, pourquoi faut-il contrôler l’absence d’arbitrage après construction d’une courbe ?',
                        'answers' => [
                            ['text' => 'Pour vérifier que les prix reconstruits sont cohérents avec les instruments observés', 'iscorrect' => true],
                            ['text' => 'Pour éviter toute utilisation des données de marché', 'iscorrect' => false],
                            ['text' => 'Pour garantir des taux toujours positifs', 'iscorrect' => false],
                            ['text' => 'Pour remplacer la courbe par un taux unique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Duration, convexité et immunisation professionnelle',
                'questions' => [
                    [
                        'question' => 'Quelle approximation combine duration et convexité pour estimer une variation de prix obligataire ?',
                        'answers' => [
                            ['text' => 'Une approximation quadratique intégrant le premier et le deuxième ordre', 'iscorrect' => true],
                            ['text' => 'Une moyenne arithmétique des coupons', 'iscorrect' => false],
                            ['text' => 'Une simple comparaison des nominaux', 'iscorrect' => false],
                            ['text' => 'Une approximation indépendante du rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La convexité d’une obligation classique est généralement utile parce que :',
                        'answers' => [
                            ['text' => 'La relation prix-rendement n’est pas parfaitement linéaire', 'iscorrect' => true],
                            ['text' => 'Le coupon est toujours variable', 'iscorrect' => false],
                            ['text' => 'Le nominal change chaque jour', 'iscorrect' => false],
                            ['text' => 'Le rendement n’a aucun effet sur le prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie d’immunisation par duration vise notamment à :',
                        'answers' => [
                            ['text' => 'Réduire l’impact des variations de taux sur la capacité à financer des engagements', 'iscorrect' => true],
                            ['text' => 'Éliminer tous les risques de marché', 'iscorrect' => false],
                            ['text' => 'Maximiser systématiquement la duration', 'iscorrect' => false],
                            ['text' => 'Rendre les coupons variables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une condition classique d’immunisation d’un engagement consiste notamment à faire correspondre :',
                        'answers' => [
                            ['text' => 'La duration de l’actif et celle du passif, sous les hypothèses de la stratégie', 'iscorrect' => true],
                            ['text' => 'Uniquement les valeurs nominales', 'iscorrect' => false],
                            ['text' => 'Les coupons sans tenir compte des échéances', 'iscorrect' => false],
                            ['text' => 'Les devises sans tenir compte des flux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la convexité est-elle également importante dans une stratégie d’immunisation ?',
                        'answers' => [
                            ['text' => 'Elle améliore l’analyse lorsque les mouvements de taux ne sont pas infinitésimaux', 'iscorrect' => true],
                            ['text' => 'Elle remplace complètement la duration', 'iscorrect' => false],
                            ['text' => 'Elle mesure uniquement le risque de défaut', 'iscorrect' => false],
                            ['text' => 'Elle supprime le besoin de connaître les flux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une duration négative peut apparaître notamment pour certains instruments :',
                        'answers' => [
                            ['text' => 'Dont les caractéristiques optionnelles produisent une relation inhabituelle entre prix et taux', 'iscorrect' => true],
                            ['text' => 'Uniquement lorsque le nominal est nul', 'iscorrect' => false],
                            ['text' => 'Uniquement pour les obligations zéro-coupon', 'iscorrect' => false],
                            ['text' => 'Jamais en finance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque subsiste même après une immunisation parfaite selon un modèle simplifié ?',
                        'answers' => [
                            ['text' => 'Les écarts entre les hypothèses du modèle et les mouvements réels des taux', 'iscorrect' => true],
                            ['text' => 'Aucun risque de marché ni de modèle', 'iscorrect' => false],
                            ['text' => 'Uniquement le risque de dividende', 'iscorrect' => false],
                            ['text' => 'Aucun risque de réinvestissement dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse parallèle de la courbe de taux signifie que :',
                        'answers' => [
                            ['text' => 'Les taux à différentes maturités augmentent approximativement du même montant', 'iscorrect' => true],
                            ['text' => 'Seul le taux à deux ans augmente', 'iscorrect' => false],
                            ['text' => 'Les taux deviennent tous nuls', 'iscorrect' => false],
                            ['text' => 'Les taux changent uniquement de signe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les mouvements non parallèles de la courbe limitent-ils une immunisation basée sur une seule duration ?',
                        'answers' => [
                            ['text' => 'Parce que différentes échéances peuvent évoluer de manière différente', 'iscorrect' => true],
                            ['text' => 'Parce que la duration ne dépend jamais des flux', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations n’ont pas d’échéance', 'iscorrect' => false],
                            ['text' => 'Parce que tous les taux évoluent toujours identiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle mesure peut compléter la duration pour analyser plusieurs segments de la courbe ?',
                        'answers' => [
                            ['text' => 'Les sensibilités par facteurs de risque ou par maturités', 'iscorrect' => true],
                            ['text' => 'Le seul taux de coupon', 'iscorrect' => false],
                            ['text' => 'Le bénéfice net comptable', 'iscorrect' => false],
                            ['text' => 'La valeur nominale seule', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Produits dérivés et mathématiques financières',
                'questions' => [
                    [
                        'question' => 'Quel est le principe fondamental de la valorisation d’un contrat forward sans arbitrage ?',
                        'answers' => [
                            ['text' => Le prix forward doit être cohérent avec le prix spot, le financement et les éventuels revenus ou coûts de portage', 'iscorrect' => true],
                            ['text' => 'Le prix forward doit toujours être égal au prix spot', 'iscorrect' => false],
                            ['text' => 'Le prix forward ne dépend jamais des taux', 'iscorrect' => false],
                            ['text' => 'Le prix forward est toujours négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un actif sans revenu ni coût de portage, le prix forward théorique dépend notamment :',
                        'answers' => [
                            ['text' => 'Du prix spot et du coût de financement jusqu’à l’échéance', 'iscorrect' => true],
                            ['text' => 'Uniquement du dividende', 'iscorrect' => false],
                            ['text' => 'Uniquement de la volatilité historique', 'iscorrect' => false],
                            ['text' => 'Uniquement du nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une option d’achat européenne donne à son détenteur :',
                        'answers' => [
                            ['text' => 'Le droit, mais pas l’obligation, d’acheter l’actif sous-jacent au prix d’exercice à l’échéance', 'iscorrect' => true],
                            ['text' => 'L’obligation d’acheter l’actif immédiatement', 'iscorrect' => false],
                            ['text' => 'Le droit de vendre uniquement', 'iscorrect' => false],
                            ['text' => 'Une obligation de vendre le sous-jacent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La valeur intrinsèque d’un call européen à l’échéance est :',
                        'answers' => [
                            ['text' => 'max(S - K, 0)', 'iscorrect' => true],
                            ['text' => 'max(K - S, 0)', 'iscorrect' => false],
                            ['text' => 'S + K', 'iscorrect' => false],
                            ['text' => 'S × K', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La parité put-call européenne relie notamment :',
                        'answers' => [
                            ['text' => 'Le prix du call, du put, du sous-jacent, du strike et du financement', 'iscorrect' => true],
                            ['text' => 'Uniquement deux primes d’options', 'iscorrect' => false],
                            ['text' => 'Le coupon et le dividende uniquement', 'iscorrect' => false],
                            ['text' => 'Uniquement la volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le delta d’un call mesure approximativement :',
                        'answers' => [
                            ['text' => 'La sensibilité du prix de l’option à une petite variation du sous-jacent', 'iscorrect' => true],
                            ['text' => 'La sensibilité uniquement au temps', 'iscorrect' => false],
                            ['text' => 'La probabilité exacte de défaut', 'iscorrect' => false],
                            ['text' => 'Le taux sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le theta d’une option mesure principalement :',
                        'answers' => [
                            ['text' => 'La sensibilité de sa valeur au passage du temps', 'iscorrect' => true],
                            ['text' => 'La sensibilité au prix du sous-jacent uniquement', 'iscorrect' => false],
                            ['text' => 'La sensibilité au taux de change uniquement', 'iscorrect' => false],
                            ['text' => 'La valeur nominale du contrat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le vega d’une option est principalement sensible à :',
                        'answers' => [
                            ['text' => 'La volatilité implicite du sous-jacent', 'iscorrect' => true],
                            ['text' => 'La valeur nominale uniquement', 'iscorrect' => false],
                            ['text' => 'La durée comptable du bilan', 'iscorrect' => false],
                            ['text' => 'Le taux d’inflation réalisé uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse de la volatilité implicite tend généralement à augmenter :',
                        'answers' => [
                            ['text' => 'La valeur d’un call et d’un put vanille, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['text' => 'Uniquement la valeur du sous-jacent', 'iscorrect' => false],
                            ['text' => 'Uniquement le taux sans risque', 'iscorrect' => false],
                            ['text' => 'Toujours le prix d’exercice', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une couverture delta doit-elle être rééquilibrée au cours du temps ?',
                        'answers' => [
                            ['text' => 'Parce que le delta de l’option évolue lorsque le sous-jacent, le temps ou d’autres paramètres changent', 'iscorrect' => true],
                            ['text' => 'Parce que le delta est toujours constant', 'iscorrect' => false],
                            ['text' => 'Parce que le sous-jacent disparaît à chaque période', 'iscorrect' => false],
                            ['text' => 'Parce que le strike change automatiquement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Actualisation stochastique et décision sous incertitude',
                'questions' => [
                    [
                        'question' => 'Dans un cadre d’incertitude, la valeur espérée d’un flux correspond à :',
                        'answers' => [
                            ['text' => 'La moyenne pondérée des résultats possibles par leurs probabilités', 'iscorrect' => true],
                            ['text' => 'Le résultat maximal uniquement', 'iscorrect' => false],
                            ['text' => 'Le résultat minimal uniquement', 'iscorrect' => false],
                            ['text' => 'La moyenne non pondérée dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’espérance d’une valeur actualisée n’est-elle pas nécessairement équivalente à l’actualisation d’une valeur certaine arbitraire ?',
                        'answers' => [
                            ['text' => 'Parce que les flux, probabilités et taux peuvent interagir avec la structure du risque', 'iscorrect' => true],
                            ['text' => 'Parce que l’actualisation est toujours impossible', 'iscorrect' => false],
                            ['text' => 'Parce que les probabilités sont toujours nulles', 'iscorrect' => false],
                            ['text' => 'Parce que les flux futurs ne peuvent jamais être probabilisés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équivalent certain d’un flux risqué représente :',
                        'answers' => [
                            ['text' => 'Le montant certain jugé équivalent au flux risqué selon une fonction d’utilité', 'iscorrect' => true],
                            ['text' => 'Toujours la moyenne arithmétique des résultats', 'iscorrect' => false],
                            ['text' => 'Toujours le résultat maximal', 'iscorrect' => false],
                            ['text' => 'Le montant du nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne avers au risque préférera généralement :',
                        'answers' => [
                            ['text' => 'Un montant certain inférieur à la valeur espérée d’une loterie suffisamment risquée, selon ses préférences', 'iscorrect' => true],
                            ['text' => 'Toujours le résultat le plus risqué', 'iscorrect' => false],
                            ['text' => 'Toujours la variance maximale', 'iscorrect' => false],
                            ['text' => 'Toujours le rendement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La variance d’un rendement mesure principalement :',
                        'answers' => [
                            ['text' => 'La dispersion des rendements autour de leur moyenne', 'iscorrect' => true],
                            ['text' => 'Le rendement moyen uniquement', 'iscorrect' => false],
                            ['text' => 'Le prix nominal', 'iscorrect' => false],
                            ['text' => 'Le montant du dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La covariance entre deux rendements mesure notamment :',
                        'answers' => [
                            ['text' => 'La manière dont leurs écarts par rapport aux moyennes évoluent conjointement', 'iscorrect' => true],
                            ['text' => 'Le rendement de chaque actif séparément', 'iscorrect' => false],
                            ['text' => 'Le nominal total du portefeuille', 'iscorrect' => false],
                            ['text' => 'Le taux sans risque uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la covariance est-elle importante pour un portefeuille ?',
                        'answers' => [
                            ['text' => 'Parce que le risque du portefeuille dépend des relations entre les actifs', 'iscorrect' => true],
                            ['text' => 'Parce que les actifs sont toujours parfaitement corrélés', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle remplace tous les rendements', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle ne dépend jamais des pondérations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une corrélation proche de -1 entre deux actifs signifie généralement :',
                        'answers' => [
                            ['text' => 'Qu’ils évoluent presque en sens opposé de manière linéaire', 'iscorrect' => true],
                            ['text' => 'Qu’ils évoluent toujours exactement ensemble', 'iscorrect' => false],
                            ['text' => 'Qu’ils sont indépendants', 'iscorrect' => false],
                            ['text' => 'Que leurs rendements sont nécessairement nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de la diversification dans un cadre moyenne-variance ?',
                        'answers' => [
                            ['text' => 'Réduire potentiellement le risque grâce aux faibles corrélations entre actifs', 'iscorrect' => true],
                            ['text' => 'Augmenter obligatoirement tous les rendements', 'iscorrect' => false],
                            ['text' => 'Supprimer tout risque systématique', 'iscorrect' => false],
                            ['text' => 'Garantir une performance positive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille efficient est généralement situé :',
                        'answers' => [
                            ['text' => 'Sur la frontière offrant le meilleur rendement espéré pour chaque niveau de risque pertinent', 'iscorrect' => true],
                            ['text' => 'Sur tous les portefeuilles à rendement nul', 'iscorrect' => false],
                            ['text' => 'Uniquement sur les actifs les plus risqués', 'iscorrect' => false],
                            ['text' => 'Sur les portefeuilles ayant nécessairement une variance maximale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mathématiques du risque de crédit',
                'questions' => [
                    [
                        'question' => 'La probabilité de défaut représente :',
                        'answers' => [
                            ['text' => 'La probabilité estimée qu’un emprunteur ne respecte pas ses obligations selon une définition donnée', 'iscorrect' => true],
                            ['text' => 'La perte certaine sur un prêt', 'iscorrect' => false],
                            ['text' => 'Le taux de coupon', 'iscorrect' => false],
                            ['text' => 'Le rendement sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La perte en cas de défaut est souvent notée LGD. Elle représente :',
                        'answers' => [
                            ['text' => 'La fraction de l’exposition qui n’est pas récupérée après défaut', 'iscorrect' => true],
                            ['text' => 'La probabilité de remboursement intégral', 'iscorrect' => false],
                            ['text' => 'Le taux sans risque', 'iscorrect' => false],
                            ['text' => 'La valeur nominale indépendamment des recouvrements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'L’exposition au défaut, ou EAD, désigne principalement :',
                        'answers' => [
                            ['text' => 'Le montant exposé au moment du défaut selon la convention retenue', 'iscorrect' => true],
                            ['text' => 'Le montant récupéré après défaut', 'iscorrect' => false],
                            ['text' => 'Le taux d’actualisation', 'iscorrect' => false],
                            ['text' => 'Le coupon annuel uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une approximation classique de la perte attendue est :',
                        'answers' => [
                            ['text' => 'PD × LGD × EAD', 'iscorrect' => true],
                            ['text' => 'PD + LGD + EAD', 'iscorrect' => false],
                            ['text' => 'PD ÷ LGD ÷ EAD', 'iscorrect' => false],
                            ['text' => 'PD − LGD − EAD', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la probabilité de défaut augmente, toutes choses égales par ailleurs, la perte attendue :',
                        'answers' => [
                            ['text' => 'Augmente', 'iscorrect' => true],
                            ['text' => 'Diminue toujours', 'iscorrect' => false],
                            ['text' => 'Reste nécessairement identique', 'iscorrect' => false],
                            ['text' => 'Devient automatiquement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le spread de crédit d’une obligation rémunère notamment :',
                        'answers' => [
                            ['text' => 'Une compensation pour le risque de crédit et d’autres risques associés par rapport à une référence', 'iscorrect' => true],
                            ['text' => 'Uniquement l’inflation passée', 'iscorrect' => false],
                            ['text' => 'Uniquement le coupon contractuel', 'iscorrect' => false],
                            ['text' => 'La valeur nominale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du spread de crédit d’un émetteur, toutes choses égales par ailleurs, tend à :',
                        'answers' => [
                            ['text' => 'Réduire la valeur de marché de sa dette existante', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement son prix obligataire', 'iscorrect' => false],
                            ['text' => 'Ne produire aucun effet', 'iscorrect' => false],
                            ['text' => 'Supprimer le risque de défaut', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pertes de crédit doivent-elles parfois être actualisées ?',
                        'answers' => [
                            ['text' => 'Parce que les pertes peuvent survenir à différentes dates et possèdent des valeurs temporelles différentes', 'iscorrect' => true],
                            ['text' => 'Parce que les pertes sont toujours immédiates', 'iscorrect' => false],
                            ['text' => 'Parce que l’actualisation augmente toujours les pertes', 'iscorrect' => false],
                            ['text' => 'Parce que les probabilités sont sans importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle de transition de notation, une matrice de transition décrit :',
                        'answers' => [
                            ['text' => 'Les probabilités de passer d’une catégorie de notation à une autre sur une période donnée', 'iscorrect' => true],
                            ['text' => 'Les coupons futurs uniquement', 'iscorrect' => false],
                            ['text' => 'Les prix historiques uniquement', 'iscorrect' => false],
                            ['text' => 'Les taux d’inflation uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut réduire la perte réelle après défaut ?',
                        'answers' => [
                            ['text' => 'Les garanties, sûretés ou recouvrements réalisés', 'iscorrect' => true],
                            ['text' => 'Une hausse automatique de la probabilité de défaut', 'iscorrect' => false],
                            ['text' => 'Une augmentation du risque sans récupération', 'iscorrect' => false],
                            ['text' => 'La disparition du contrat', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Gestion quantitative de portefeuille',
                'questions' => [
                    [
                        'question' => 'Dans le modèle moyenne-variance, le rendement espéré d’un portefeuille est :',
                        'answers' => [
                            ['text' => 'La moyenne pondérée des rendements espérés des actifs', 'iscorrect' => true],
                            ['text' => 'La variance moyenne des actifs', 'iscorrect' => false],
                            ['text' => 'Toujours égal au taux sans risque', 'iscorrect' => false],
                            ['text' => 'Indépendant des pondérations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque d’un portefeuille dépend notamment :',
                        'answers' => [
                            ['text' => 'Des variances individuelles, des covariances et des pondérations', 'iscorrect' => true],
                            ['text' => 'Uniquement des rendements moyens', 'iscorrect' => false],
                            ['text' => 'Uniquement du nombre d’actifs', 'iscorrect' => false],
                            ['text' => 'Uniquement du taux sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le ratio de Sharpe mesure approximativement :',
                        'answers' => [
                            ['text' => 'L’excès de rendement par unité de risque total', 'iscorrect' => true],
                            ['text' => 'Le rendement absolu sans risque', 'iscorrect' => false],
                            ['text' => 'La duration obligataire', 'iscorrect' => false],
                            ['text' => 'La probabilité de défaut', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une matrice de covariance non positive semi-définie peut poser un problème parce que :',
                        'answers' => [
                            ['text' => 'Elle peut conduire à des variances de portefeuille incohérentes', 'iscorrect' => true],
                            ['text' => 'Elle garantit toujours une solution optimale', 'iscorrect' => false],
                            ['text' => 'Elle supprime les corrélations', 'iscorrect' => false],
                            ['text' => 'Elle rend les rendements toujours positifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une optimisation de portefeuille, une contrainte de somme des pondérations égale à 1 signifie généralement :',
                        'answers' => [
                            ['text' => 'Que le portefeuille est entièrement alloué selon les pondérations considérées', 'iscorrect' => true],
                            ['text' => 'Que chaque actif reçoit 1', 'iscorrect' => false],
                            ['text' => 'Que la variance vaut 1', 'iscorrect' => false],
                            ['text' => 'Que le rendement est égal à 1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une contrainte de non-vente à découvert impose généralement :',
                        'answers' => [
                            ['text' => 'Des pondérations supérieures ou égales à zéro', 'iscorrect' => true],
                            ['text' => 'Des pondérations toujours négatives', 'iscorrect' => false],
                            ['text' => 'Une variance nulle', 'iscorrect' => false],
                            ['text' => 'Un rendement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’optimisation historique peut-elle être instable ?',
                        'answers' => [
                            ['text' => 'Parce que les estimations de rendements et covariances comportent une erreur d’échantillonnage', 'iscorrect' => true],
                            ['text' => 'Parce que les matrices sont toujours exactes', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés ne possèdent aucun historique', 'iscorrect' => false],
                            ['text' => 'Parce que les rendements futurs sont connus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le portefeuille de variance minimale globale cherche à :',
                        'answers' => [
                            ['text' => 'Minimiser la variance parmi les portefeuilles admissibles', 'iscorrect' => true],
                            ['text' => 'Maximiser uniquement le rendement espéré', 'iscorrect' => false],
                            ['text' => 'Maximiser le nombre d’actifs', 'iscorrect' => false],
                            ['text' => 'Minimiser le nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque ne peut pas être éliminé complètement par une diversification parfaite dans le modèle classique ?',
                        'answers' => [
                            ['text' => 'Le risque systématique', 'iscorrect' => true],
                            ['text' => 'Tout risque idiosyncratique dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Le risque de covariance', 'iscorrect' => false],
                            ['text' => 'Aucun risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le bêta d’un actif par rapport au marché mesure principalement :',
                        'answers' => [
                            ['text' => 'Sa sensibilité aux variations du portefeuille de marché', 'iscorrect' => true],
                            ['text' => 'Sa duration', 'iscorrect' => false],
                            ['text' => 'Son nominal', 'iscorrect' => false],
                            ['text' => 'Sa probabilité de défaut uniquement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Simulation Monte Carlo et méthodes numériques',
                'questions' => [
                    [
                        'question' => 'La simulation Monte Carlo consiste principalement à :',
                        'answers' => [
                            ['text' => 'Générer de nombreux scénarios aléatoires selon un modèle probabiliste afin d’estimer une distribution de résultats', 'iscorrect' => true],
                            ['text' => 'Utiliser uniquement les valeurs historiques exactes', 'iscorrect' => false],
                            ['text' => 'Éliminer toute incertitude', 'iscorrect' => false],
                            ['text' => 'Calculer uniquement une moyenne comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Augmenter le nombre de simulations Monte Carlo tend généralement à :',
                        'answers' => [
                            ['text' => 'Réduire l’erreur d’échantillonnage, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement le biais du modèle', 'iscorrect' => false],
                            ['text' => 'Supprimer les hypothèses du modèle', 'iscorrect' => false],
                            ['text' => 'Garantir une prévision exacte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une simulation de prix d’actif nécessite notamment de définir :',
                        'answers' => [
                            ['text' => 'Un processus d’évolution, ses paramètres et les conditions initiales', 'iscorrect' => true],
                            ['text' => 'Uniquement le prix final', 'iscorrect' => false],
                            ['text' => 'Uniquement le taux de coupon', 'iscorrect' => false],
                            ['text' => 'Aucune hypothèse probabiliste', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une simulation de risque, les percentiles permettent notamment de :',
                        'answers' => [
                            ['text' => 'Décrire des niveaux de pertes ou de résultats associés à des probabilités données', 'iscorrect' => true],
                            ['text' => 'Garantir le rendement futur', 'iscorrect' => false],
                            ['text' => 'Supprimer la queue de distribution', 'iscorrect' => false],
                            ['text' => 'Remplacer les probabilités par des certitudes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La méthode des différences finies peut être utilisée pour :',
                        'answers' => [
                            ['text' => 'Approcher numériquement certaines équations différentielles utilisées en finance', 'iscorrect' => true],
                            ['text' => 'Calculer uniquement des moyennes comptables', 'iscorrect' => false],
                            ['text' => 'Supprimer toute erreur numérique', 'iscorrect' => false],
                            ['text' => 'Éviter toute discrétisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une méthode numérique doit notamment être évaluée selon :',
                        'answers' => [
                            ['text' => 'Sa précision, sa stabilité et son coût de calcul', 'iscorrect' => true],
                            ['text' => 'Uniquement sa vitesse', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre de variables', 'iscorrect' => false],
                            ['text' => 'Uniquement la taille des fichiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le biais d’un estimateur correspond notamment à :',
                        'answers' => [
                            ['text' => 'L’écart entre son espérance et la quantité qu’il cherche à estimer', 'iscorrect' => true],
                            ['text' => 'La variance uniquement', 'iscorrect' => false],
                            ['text' => 'L’erreur de saisie uniquement', 'iscorrect' => false],
                            ['text' => 'La valeur maximale d’une simulation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La variance de Monte Carlo peut être réduite par des techniques telles que :',
                        'answers' => [
                            ['text' => 'Les variables antithétiques ou les variables de contrôle', 'iscorrect' => true],
                            ['text' => 'La suppression de toutes les simulations', 'iscorrect' => false],
                            ['text' => 'L’utilisation d’un seul scénario', 'iscorrect' => false],
                            ['text' => 'La suppression des probabilités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les queues de distribution sont-elles importantes dans la gestion quantitative des risques ?',
                        'answers' => [
                            ['text' => 'Parce que des événements rares peuvent produire des pertes disproportionnées', 'iscorrect' => true],
                            ['text' => 'Parce que les événements rares sont toujours impossibles', 'iscorrect' => false],
                            ['text' => 'Parce que la moyenne suffit toujours', 'iscorrect' => false],
                            ['text' => 'Parce que les pertes extrêmes n’affectent jamais les portefeuilles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une simulation bien calibrée mais basée sur un modèle mal spécifié peut :',
                        'answers' => [
                            ['text' => 'Produire des résultats précis numériquement mais économiquement inadéquats', 'iscorrect' => true],
                            ['text' => 'Garantir automatiquement une bonne prévision', 'iscorrect' => false],
                            ['text' => 'Supprimer le risque de modèle', 'iscorrect' => false],
                            ['text' => 'Rendre les hypothèses inutiles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Optimisation financière et ingénierie quantitative',
                'questions' => [
                    [
                        'question' => 'Une fonction objectif dans un problème d’optimisation financière représente :',
                        'answers' => [
                            ['text' => 'La quantité que l’on cherche à maximiser ou minimiser', 'iscorrect' => true],
                            ['text' => 'Uniquement une contrainte', 'iscorrect' => false],
                            ['text' => 'Une donnée historique sans rôle mathématique', 'iscorrect' => false],
                            ['text' => 'Le nom du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une contrainte budgétaire sert notamment à :',
                        'answers' => [
                            ['text' => 'Limiter les solutions admissibles selon les ressources disponibles', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement le rendement', 'iscorrect' => false],
                            ['text' => 'Supprimer le risque', 'iscorrect' => false],
                            ['text' => 'Rendre toutes les variables indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un problème d’optimisation convexe est particulièrement intéressant parce que :',
                        'answers' => [
                            ['text' => 'Sous certaines conditions, un optimum local est également global', 'iscorrect' => true],
                            ['text' => 'Il possède toujours plusieurs optima globaux', 'iscorrect' => false],
                            ['text' => 'Il ne possède aucune contrainte', 'iscorrect' => false],
                            ['text' => 'Il interdit les fonctions quadratiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Les multiplicateurs de Lagrange servent notamment à :',
                        'answers' => [
                            ['text' => 'Résoudre certains problèmes d’optimisation sous contraintes', 'iscorrect' => true],
                            ['text' => 'Calculer uniquement des intérêts simples', 'iscorrect' => false],
                            ['text' => 'Supprimer les variables du modèle', 'iscorrect' => false],
                            ['text' => 'Garantir une solution sans hypothèse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une optimisation sous contrainte, une condition de premier ordre sert à :',
                        'answers' => [
                            ['text' => 'Identifier des candidats à l’optimum sous les conditions appropriées', 'iscorrect' => true],
                            ['text' => 'Garantir toujours un maximum global', 'iscorrect' => false],
                            ['text' => 'Supprimer les contraintes', 'iscorrect' => false],
                            ['text' => 'Calculer uniquement les valeurs historiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une analyse de sensibilité des poids optimaux permet d’étudier :',
                        'answers' => [
                            ['text' => 'La stabilité de la solution lorsque les paramètres du modèle changent', 'iscorrect' => true],
                            ['text' => 'Uniquement le prix nominal', 'iscorrect' => false],
                            ['text' => 'Uniquement les coûts comptables', 'iscorrect' => false],
                            ['text' => 'La suppression des contraintes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contraintes de concentration sont-elles utilisées dans un portefeuille ?',
                        'answers' => [
                            ['text' => 'Pour limiter l’exposition excessive à un actif, secteur ou facteur', 'iscorrect' => true],
                            ['text' => 'Pour augmenter automatiquement toutes les positions', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les corrélations', 'iscorrect' => false],
                            ['text' => 'Pour rendre tous les actifs sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une optimisation robuste cherche notamment à :',
                        'answers' => [
                            ['text' => 'Limiter la sensibilité de la solution aux erreurs ou incertitudes des paramètres', 'iscorrect' => true],
                            ['text' => 'Ignorer toutes les incertitudes', 'iscorrect' => false],
                            ['text' => 'Maximiser uniquement la complexité du modèle', 'iscorrect' => false],
                            ['text' => 'Supprimer toute contrainte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque de modèle désigne notamment :',
                        'answers' => [
                            ['text' => 'Le risque que les hypothèses ou la structure du modèle soient inadéquates', 'iscorrect' => true],
                            ['text' => 'Uniquement le risque de défaut d’un client', 'iscorrect' => false],
                            ['text' => 'Le risque que les marchés soient ouverts', 'iscorrect' => false],
                            ['text' => 'La variation automatique du nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle quantitativement sophistiqué doit-il être soumis à des tests de robustesse ?',
                        'answers' => [
                            ['text' => 'Pour vérifier que ses conclusions ne dépendent pas excessivement d’hypothèses fragiles', 'iscorrect' => true],
                            ['text' => 'Pour supprimer les mathématiques du modèle', 'iscorrect' => false],
                            ['text' => 'Pour garantir tous les rendements futurs', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute utilisation de données', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Évaluation avancée des investissements et décisions stratégiques',
                'questions' => [
                    [
                        'question' => 'Dans une décision d’investissement professionnelle, la VAN doit idéalement être calculée à partir de :',
                        'answers' => [
                            ['text' => 'Flux de trésorerie différentiels cohérents avec le risque et le taux d’actualisation', 'iscorrect' => true],
                            ['text' => 'Uniquement les bénéfices comptables', 'iscorrect' => false],
                            ['text' => 'Uniquement les coûts historiques', 'iscorrect' => false],
                            ['text' => 'Uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un coût d’opportunité doit être intégré dans l’analyse d’un projet lorsqu’il représente :',
                        'answers' => [
                            ['text' => 'Une valeur économique abandonnée du fait du choix du projet', 'iscorrect' => true],
                            ['text' => 'Une dépense déjà irrécupérable', 'iscorrect' => false],
                            ['text' => 'Une charge sans conséquence économique', 'iscorrect' => false],
                            ['text' => 'Un revenu futur certain sans lien avec la décision', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Les synergies entre deux investissements doivent être prises en compte si elles :',
                        'answers' => [
                            ['text' => 'Modifient réellement les flux différentiels générés par la décision', 'iscorrect' => true],
                            ['text' => 'Sont uniquement comptables et sans effet économique', 'iscorrect' => false],
                            ['text' => 'Ne peuvent jamais être mesurées', 'iscorrect' => false],
                            ['text' => 'Sont déjà intégrées dans les coûts irrécupérables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur terminale peut-elle représenter une part importante de la valeur d’un projet ?',
                        'answers' => [
                            ['text' => 'Parce qu’elle capitalise les flux au-delà de la période explicitement modélisée', 'iscorrect' => true],
                            ['text' => 'Parce qu’elle ignore toujours les flux futurs', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle est indépendante de la croissance', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle est toujours égale à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement important lorsqu’une valeur terminale dépend d’une croissance perpétuelle ?',
                        'answers' => [
                            ['text' => 'Une forte sensibilité de la valorisation aux hypothèses de croissance et d’actualisation', 'iscorrect' => true],
                            ['text' => 'Une indépendance totale vis-à-vis des taux', 'iscorrect' => false],
                            ['text' => 'Une impossibilité de calculer une valeur terminale', 'iscorrect' => false],
                            ['text' => 'Une absence de risque de modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'L’analyse réelle d’une option d’investissement reconnaît notamment que :',
                        'answers' => [
                            ['text' => La flexibilité managériale peut posséder une valeur économique', 'iscorrect' => true],
                            ['text' => 'Toutes les décisions doivent être prises immédiatement', 'iscorrect' => false],
                            ['text' => 'L’incertitude n’a aucune valeur', 'iscorrect' => false],
                            ['text' => 'La VAN classique capture toujours parfaitement toute flexibilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'L’option d’abandon d’un projet peut être valorisée parce que :',
                        'answers' => [
                            ['text' => 'Elle donne la possibilité de limiter certaines pertes futures', 'iscorrect' => true],
                            ['text' => 'Elle garantit un profit positif', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque initial', 'iscorrect' => false],
                            ['text' => 'Elle transforme tous les coûts en revenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une option d’expansion est particulièrement pertinente lorsque :',
                        'answers' => [
                            ['text' => 'Une réussite future peut justifier une augmentation de l’investissement', 'iscorrect' => true],
                            ['text' => 'Le projet ne possède aucun potentiel de croissance', 'iscorrect' => false],
                            ['text' => 'Les flux futurs sont certains et fixes', 'iscorrect' => false],
                            ['text' => 'La décision est irréversible et immédiate dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’actualisation d’un projet doit-il être cohérent avec son risque ?',
                        'answers' => [
                            ['text' => 'Parce qu’un taux inadéquat peut surestimer ou sous-estimer la valeur économique', 'iscorrect' => true],
                            ['text' => 'Parce que tous les projets possèdent exactement le même risque', 'iscorrect' => false],
                            ['text' => 'Parce que le taux n’a aucun effet sur la VAN', 'iscorrect' => false],
                            ['text' => 'Parce que le risque est toujours nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une analyse professionnelle de décision d’investissement ?',
                        'answers' => [
                            ['text' => 'Évaluer les flux différentiels, le temps, le risque, les scénarios et la flexibilité de décision', 'iscorrect' => true],
                            ['text' => 'Se limiter au chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Utiliser uniquement le délai de récupération', 'iscorrect' => false],
                            ['text' => 'Ignorer les hypothèses et les risques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Professional',
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
