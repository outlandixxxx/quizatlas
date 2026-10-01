<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-economics')->firstOrFail();

        $quizzes = array (
  0 => 
  array (
    'title' => 'Fondamentaux de l\'économie financière',
    'description' => 'Un quiz d\'introduction pour comprendre le rôle des marchés, des taux, du risque et des décisions financières.',
    'duration' => 20,
    'passing_score' => 55,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Quel problème fondamental l\'économie financière cherche-t-elle notamment à traiter ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Comment allouer des ressources financières limitées entre différents usages',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Comment supprimer tout risque dans les investissements',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Comment fixer administrativement tous les prix d\'une économie',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Comment garantir un rendement identique à tous les investisseurs',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'économie financière étudie notamment la manière dont l\'épargne et le capital sont orientés vers différents projets et actifs malgré des ressources, des informations et une capacité de financement limitées.',
      ),
      1 => 
      array (
        'question' => 'Une entreprise choisit entre deux projets ayant le même coût initial. Le projet A offre un flux de trésorerie plus précoce que le projet B, toutes choses égales par ailleurs. Pourquoi le projet A peut-il avoir davantage de valeur ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce qu\'un flux futur est toujours supérieur à un flux présent',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce qu\'un flux reçu plus tôt peut être investi ou utilisé plus longtemps',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Parce que la valeur temporelle de l\'argent ne concerne que les ménages',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Parce qu\'un flux précoce est nécessairement sans risque',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La valeur temporelle de l\'argent signifie qu\'une somme disponible aujourd\'hui peut être placée, consommée ou réinvestie. À conditions comparables, recevoir un flux plus tôt peut donc augmenter sa valeur économique.',
      ),
      2 => 
      array (
        'question' => 'Quel énoncé décrit le mieux le rôle d\'un marché financier ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Garantir à chaque entreprise une rentabilité positive',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Remplacer les banques dans toutes les formes de financement',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Mettre en relation des agents qui disposent de fonds avec ceux qui cherchent un financement ou souhaitent échanger des actifs',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Éliminer la nécessité de comparer les risques',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Les marchés financiers facilitent le transfert de fonds et l\'échange de titres entre différents participants. Ils ne garantissent ni la rentabilité des entreprises ni l\'absence de risque.',
      ),
      3 => 
      array (
        'question' => 'Pourquoi un investisseur demande-t-il généralement une rémunération plus élevée lorsqu\'il accepte davantage de risque ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce que tous les actifs risqués sont légalement obligés de payer plus',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce que le risque augmente mécaniquement la valeur nominale d\'un titre',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Parce que le rendement d\'un actif risqué est toujours positif',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Parce qu\'il renonce à une partie de la certitude sur les résultats futurs',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Un actif plus risqué produit des résultats futurs moins certains. Dans les modèles financiers, les investisseurs peuvent donc exiger une prime de risque pour accepter cette incertitude supplémentaire.',
      ),
      4 => 
      array (
        'question' => 'Une hausse générale et durable du niveau des prix correspond à :',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'L\'inflation',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'La déflation automatique des actifs financiers',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'La diversification',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La capitalisation',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'inflation désigne une hausse générale et persistante du niveau des prix. Elle réduit, à pouvoir d\'achat nominal inchangé, la quantité de biens et services qu\'une somme permet d\'acheter.',
      ),
      5 => 
      array (
        'question' => 'Quel indicateur permet le plus directement de comparer le rendement obtenu sur un investissement avec le capital investi ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le nombre d\'actions en circulation',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le taux de rendement',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'La durée légale d\'un contrat',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le volume de production physique',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le taux de rendement exprime le gain ou la perte par rapport au montant engagé, ce qui facilite la comparaison entre des investissements de tailles différentes.',
      ),
      6 => 
      array (
        'question' => 'Une société possède un projet rentable mais n\'a pas assez de liquidités pour le financer immédiatement. Quelle fonction du système financier devient particulièrement importante ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La suppression de toute variation des prix',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'La transformation automatique d\'une perte en bénéfice',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'La mobilisation de l\'épargne vers le financement de l\'investissement',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'L\'interdiction du financement externe',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le système financier permet notamment de canaliser l\'épargne disponible vers des agents qui ont des besoins de financement, par l\'intermédiaire de banques ou de marchés.',
      ),
      7 => 
      array (
        'question' => 'Lequel de ces exemples représente le mieux un coût d\'opportunité financier ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Payer une facture à sa date d\'échéance crée automatiquement un rendement',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Recevoir un dividende ne comporte jamais de coût d\'opportunité',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Conserver des liquidités rend toutes les autres options irréalisables',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Placer 10 000 € sur un compte peu rémunéré signifie renoncer au rendement potentiel d\'un autre placement comparable',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Le coût d\'opportunité correspond à la meilleure alternative abandonnée. Choisir un placement signifie donc renoncer, au moins potentiellement, aux avantages d\'un autre usage du capital.',
      ),
      8 => 
      array (
        'question' => 'Lorsqu\'un taux d\'intérêt augmente, quelle conséquence est généralement attendue pour la demande de financement, toutes choses égales par ailleurs ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le coût de l\'emprunt augmente, ce qui peut réduire la demande de nouveaux financements',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Le coût de l\'emprunt devient automatiquement nul',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Toute demande de crédit augmente nécessairement',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Les entreprises reçoivent automatiquement davantage de fonds propres',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Un taux d\'intérêt plus élevé renchérit généralement le coût d\'un emprunt. Certains ménages ou entreprises peuvent alors reporter ou réduire leurs projets financés à crédit.',
      ),
      9 => 
      array (
        'question' => 'Pourquoi la diversification peut-elle réduire le risque d\'un portefeuille ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce qu\'elle transforme chaque actif en investissement sans risque',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce que les performances de plusieurs actifs ne varient pas nécessairement de la même manière',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Parce qu\'elle garantit que tous les actifs monteront ensemble',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Parce qu\'elle supprime le risque de marché par définition',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Lorsque les rendements des actifs ne sont pas parfaitement corrélés, leurs variations peuvent partiellement se compenser. La diversification réduit ainsi une partie du risque spécifique.',
      ),
      10 => 
      array (
        'question' => 'Une obligation verse des intérêts fixes alors que l\'inflation augmente fortement. Quel risque apparaît pour l\'investisseur ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Son rendement nominal devient forcément négatif',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le titre devient automatiquement une action',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Son rendement réel peut diminuer si les prix augmentent plus vite que les revenus reçus',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'L\'inflation garantit une hausse de sa valeur de marché',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le rendement réel tient compte de la variation du niveau des prix. Une inflation élevée peut donc réduire le pouvoir d\'achat des intérêts et du remboursement reçu par l\'investisseur.',
      ),
      11 => 
      array (
        'question' => 'Quel acteur peut être à la fois épargnant et investisseur sur les marchés financiers ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Uniquement une banque centrale',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Uniquement une entreprise cotée',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Aucun particulier, car seuls les États investissent',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Un ménage qui place une partie de son épargne dans des titres financiers',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Un ménage peut épargner puis investir cette épargne dans des actions, obligations, fonds ou autres actifs. Les ménages sont donc eux aussi des participants aux marchés financiers.',
      ),
    ),
  ),
  1 => 
  array (
    'title' => 'Valeur temporelle de l\'argent et capitalisation',
    'description' => 'Maîtrisez les principes de valeur actuelle, valeur future, intérêts composés et actualisation à travers des situations simples.',
    'duration' => 18,
    'passing_score' => 50,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Vous disposez de 1 000 € aujourd\'hui et pouvez obtenir un taux annuel de 5 %. Quelle est la valeur future après un an ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '1 050 €',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => '1 005 €',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '950 €',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => '1 500 €',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Avec un rendement annuel de 5 %, la valeur future est 1 000 × 1,05 = 1 050 €. L\'intérêt gagné pendant l\'année est donc de 50 €.',
      ),
      1 => 
      array (
        'question' => 'Quel est l\'effet principal des intérêts composés ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le taux d\'intérêt devient automatiquement plus faible chaque année',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Les intérêts déjà accumulés peuvent eux-mêmes produire des intérêts',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Le capital initial disparaît après chaque période',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le rendement devient indépendant du temps',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Avec la capitalisation composée, les intérêts sont ajoutés au capital et participent ensuite au calcul des intérêts des périodes suivantes. La croissance devient donc cumulative.',
      ),
      2 => 
      array (
        'question' => 'Quel montant doit-on placer aujourd\'hui à 10 % pendant un an pour obtenir 1 100 € dans un an ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '990 €',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => '1 010 €',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '1 000 €',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => '900 €',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La valeur actuelle est 1 100 / 1,10 = 1 000 €. À ce taux, 1 000 € placés aujourd\'hui deviennent exactement 1 100 € après un an.',
      ),
      3 => 
      array (
        'question' => 'Pourquoi actualise-t-on un flux futur dans une décision financière ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Pour augmenter artificiellement le montant du flux futur',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Pour supprimer automatiquement le risque du projet',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Pour transformer un flux futur en bénéfice comptable immédiat',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Pour exprimer sa valeur en équivalent aujourd\'hui en tenant compte du coût du temps et du rendement exigé',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'L\'actualisation ramène des montants futurs à une valeur présente. Le taux utilisé reflète notamment le coût du temps, le risque et le rendement exigé selon le modèle retenu.',
      ),
      4 => 
      array (
        'question' => 'À taux d\'actualisation constant, quelle affirmation est correcte ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Plus un flux est éloigné dans le temps, plus sa valeur actuelle est faible',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Un flux dans dix ans vaut toujours plus aujourd\'hui que le même flux dans un an',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'L\'actualisation ne dépend jamais de l\'horizon temporel',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Un flux futur est toujours égal à sa valeur actuelle',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Avec un taux positif, un même montant reçu plus tard doit être davantage actualisé. Son équivalent présent diminue donc lorsque la date du flux s\'éloigne.',
      ),
      5 => 
      array (
        'question' => 'Une banque crédite des intérêts sur un compte puis calcule les intérêts suivants sur le nouveau solde. Quel mécanisme est utilisé ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La décote comptable',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'La capitalisation composée',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'La diversification',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La dépréciation',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Les intérêts déjà crédités restent dans le solde et produisent eux-mêmes des intérêts lors des périodes suivantes. C\'est le principe de la capitalisation composée.',
      ),
      6 => 
      array (
        'question' => 'Deux projets offrent le même flux de 5 000 €, mais le premier le verse dans un an et le second dans trois ans. Sans autre différence, lequel a la plus grande valeur actuelle à taux positif ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le projet qui verse 5 000 € dans trois ans',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Ils ont nécessairement la même valeur',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le projet qui verse 5 000 € dans un an',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Impossible à comparer même avec un taux d\'actualisation connu',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'À taux positif, le flux reçu dans un an est moins longtemps actualisé que celui reçu dans trois ans. Il possède donc une valeur actuelle plus élevée, toutes choses égales par ailleurs.',
      ),
      7 => 
      array (
        'question' => 'Quel changement augmente la valeur future d\'un capital donné, toutes choses égales par ailleurs ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une baisse du nombre de périodes de placement',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Une diminution du capital initial',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une augmentation des frais prélevés sur le placement',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Une hausse du taux de rendement obtenu',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'À durée et capital initial constants, un taux de rendement plus élevé entraîne davantage d\'intérêts et donc une valeur future plus importante.',
      ),
      8 => 
      array (
        'question' => 'Une somme de 2 000 € est investie pendant deux ans à 5 % par an avec capitalisation composée. Quelle est approximativement sa valeur finale ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '2 205 €',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => '2 100 €',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '2 500 €',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => '1 805 €',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La valeur finale est 2 000 × 1,05² = 2 205 €. Le deuxième intérêt porte donc aussi sur les 100 € d\'intérêts accumulés la première année.',
      ),
      9 => 
      array (
        'question' => 'Dans une comparaison financière, pourquoi faut-il éviter de comparer directement un montant reçu aujourd\'hui avec un montant identique reçu dans cinq ans ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce qu\'un montant futur n\'a jamais aucune valeur',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce que les deux montants n\'ont pas la même valeur économique dans le temps',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Parce que l\'argent perd toujours toute sa valeur après un an',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Parce que l\'inflation est nécessairement nulle',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La valeur temporelle de l\'argent impose de tenir compte du moment où les fonds sont disponibles. L\'actualisation permet de rendre les flux comparables sur une même base temporelle.',
      ),
    ),
  ),
  2 => 
  array (
    'title' => 'Taux d\'intérêt, inflation et rendement réel',
    'description' => 'Interprétez les taux nominaux et réels et comprenez les effets économiques de l\'inflation sur l\'épargne et l\'investissement.',
    'duration' => 19,
    'passing_score' => 60,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Un placement rapporte 8 % sur l\'année alors que l\'inflation est de 3 %. Son rendement réel est approximativement de :',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '11 %',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => '24 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '5 %',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => '3 %',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Pour une approximation simple, le rendement réel est le rendement nominal moins l\'inflation : 8 % - 3 % = 5 %. La formule exacte utilise un ratio, mais l\'écart est ici faible.',
      ),
      1 => 
      array (
        'question' => 'Que mesure principalement un taux d\'intérêt réel ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Uniquement le taux affiché sur un contrat sans aucune correction',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le nombre d\'actions achetées par un investisseur',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le bénéfice comptable avant impôt',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le rendement ou coût d\'un financement après prise en compte de l\'évolution des prix',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Le taux réel cherche à mesurer le rendement en termes de pouvoir d\'achat, en corrigeant le taux nominal de l\'effet de l\'inflation.',
      ),
      2 => 
      array (
        'question' => 'Une personne laisse son épargne sur un compte rémunéré à 2 % alors que l\'inflation atteint 5 %. Que peut-on en déduire ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le rendement réel est négatif en approximation simple',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Le rendement réel est nécessairement de 7 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le pouvoir d\'achat de l\'épargne augmente automatiquement',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'L\'inflation n\'a aucun effet sur ce placement',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Avec 2 % de rendement nominal et 5 % d\'inflation, l\'approximation du rendement réel est -3 %. Le pouvoir d\'achat associé à l\'épargne diminue donc.',
      ),
      3 => 
      array (
        'question' => 'Pourquoi une hausse des taux d\'intérêt peut-elle freiner certains investissements des entreprises ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Elle supprime automatiquement tous les bénéfices futurs',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Elle augmente le coût du financement et peut rendre certains projets moins attractifs',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Elle transforme toujours la dette en capitaux propres',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Elle garantit une baisse des coûts de production',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Des taux plus élevés renchérissent généralement la dette et peuvent aussi augmenter le taux d\'actualisation utilisé pour évaluer les projets. Certains investissements deviennent alors moins intéressants.',
      ),
      4 => 
      array (
        'question' => 'Quelle situation illustre le mieux une hausse du taux réel supporté par un emprunteur ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le taux nominal baisse exactement au même rythme que l\'inflation',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le montant emprunté disparaît immédiatement',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le taux d\'emprunt reste identique mais l\'inflation diminue fortement',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Le prêteur décide de ne plus comptabiliser aucun intérêt',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'À taux nominal constant, une inflation plus faible signifie que le coût réel du remboursement est plus élevé. Le pouvoir d\'achat des montants remboursés est alors davantage préservé.',
      ),
      5 => 
      array (
        'question' => 'Une inflation inattendue peut pénaliser un créancier qui a accordé un prêt à taux fixe. Pourquoi ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le prêt devient automatiquement un actif sans valeur',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le taux contractuel change forcément sans clause prévue',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le créancier gagne nécessairement davantage en termes réels',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Les remboursements reçus ont un pouvoir d\'achat plus faible que prévu',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Lorsque le taux est fixe, le créancier reçoit des montants nominaux déterminés. Une inflation plus forte que prévu réduit la quantité de biens et services que ces montants permettent d\'acheter.',
      ),
      6 => 
      array (
        'question' => 'Une banque propose deux crédits identiques sauf pour le taux : 4 % et 7 %. En l\'absence d\'autres frais, quel crédit a le coût d\'intérêt nominal le plus élevé pour l\'emprunteur ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Celui à 7 %',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Celui à 4 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Les deux ont nécessairement le même coût',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Impossible à déterminer même si le capital et la durée sont identiques',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'À montant emprunté et durée identiques, un taux nominal de 7 % implique davantage d\'intérêts nominaux qu\'un taux de 4 %, en supposant des modalités identiques.',
      ),
      7 => 
      array (
        'question' => 'Pourquoi la comparaison entre taux nominal et taux réel est-elle utile à un épargnant ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce qu\'un taux réel permet de connaître exactement le cours futur d\'une action',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce qu\'elle indique si le rendement protège ou érode approximativement le pouvoir d\'achat',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Parce que l\'inflation n\'affecte jamais les dépenses',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Parce qu\'un rendement nominal positif est toujours un gain réel',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Un rendement nominal positif peut être inférieur à l\'inflation. La comparaison permet donc de voir si l\'investissement augmente réellement le pouvoir d\'achat, au moins en première approximation.',
      ),
      8 => 
      array (
        'question' => 'Une obligation verse 60 € d\'intérêt annuel sur une valeur nominale de 1 000 €. Quel est son taux de coupon nominal ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '16,67 %',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => '0,6 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '6 %',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => '60 %',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le taux de coupon est 60 / 1 000 = 6 %. Il s\'agit du taux nominal appliqué à la valeur nominale de l\'obligation.',
      ),
      9 => 
      array (
        'question' => 'Une inflation élevée réduit-elle nécessairement tous les rendements financiers nominaux ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Oui, tous les rendements nominaux diminuent mécaniquement',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Oui, car la monnaie ne peut plus être utilisée',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Non, car l\'inflation signifie toujours une déflation des prix',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Non : les rendements nominaux peuvent évoluer différemment selon les actifs et les conditions de marché',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'L\'inflation influence l\'environnement financier, mais elle ne détermine pas mécaniquement le rendement nominal de chaque actif. Les anticipations, les primes de risque et les conditions de marché jouent aussi un rôle.',
      ),
    ),
  ),
  3 => 
  array (
    'title' => 'Risque, rendement et valorisation des actifs',
    'description' => 'Appliquez les notions de rendement attendu, prime de risque, diversification et relation entre risque et valeur d\'un actif.',
    'duration' => 23,
    'passing_score' => 55,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Un actif coûte 100 € aujourd\'hui et sa valeur passe à 108 € sans versement intermédiaire. Quel est son rendement sur la période ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '8 %',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => '0,8 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '108 %',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => '92 %',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le rendement est (108 - 100) / 100 = 8 %. La hausse de prix de 8 € représente 8 % du capital initial.',
      ),
      1 => 
      array (
        'question' => 'Un investisseur détient deux actions dont les performances évoluent souvent dans des directions différentes. Quel bénéfice potentiel obtient-il ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une garantie de rendement positif chaque année',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Une réduction du risque spécifique du portefeuille grâce à la diversification',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'La disparition de toute exposition au marché',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La suppression automatique des frais de transaction',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Des actifs dont les rendements ne sont pas parfaitement synchronisés peuvent se compenser partiellement. Cette combinaison permet de réduire le risque spécifique sans garantir un rendement positif.',
      ),
      2 => 
      array (
        'question' => 'Lequel de ces éléments correspond à une prime de risque ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une commission fixe facturée pour ouvrir un compte bancaire',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le montant nominal d\'une obligation',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le rendement supplémentaire attendu pour accepter un risque supérieur à celui d\'une référence moins risquée',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'La valeur comptable d\'un actif sans risque',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La prime de risque représente la rémunération attendue au-delà d\'une référence moins risquée, en compensation d\'une exposition à une incertitude supplémentaire.',
      ),
      3 => 
      array (
        'question' => 'Dans une approche simple du risque, pourquoi un rendement attendu ne suffit-il pas à choisir entre deux investissements ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce que le rendement attendu ne peut jamais être estimé',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce que tout investissement a nécessairement le même risque',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Parce que le prix d\'achat n\'a aucune importance',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Parce que le niveau et la nature du risque associé à ce rendement comptent aussi',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Deux actifs peuvent afficher le même rendement attendu tout en présentant des distributions de résultats très différentes. L\'investisseur doit donc considérer le risque en plus du rendement.',
      ),
      4 => 
      array (
        'question' => 'Un portefeuille comporte une action technologique et une entreprise de services publics dont les cours réagissent parfois différemment. Quelle idée cela illustre-t-il ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La combinaison d\'actifs peut réduire certaines fluctuations spécifiques',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Les deux entreprises ont nécessairement le même modèle économique',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'La diversification augmente toujours le rendement attendu',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Les corrélations entre actifs sont toujours nulles',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La diversification dépend notamment de la manière dont les rendements des actifs évoluent ensemble. Des comportements différents peuvent amortir certaines fluctuations propres à chaque titre.',
      ),
      5 => 
      array (
        'question' => 'Si un actif devient plus risqué alors que son rendement attendu reste inchangé, quelle réaction est économiquement plausible ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le risque supplémentaire garantit une hausse du prix',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Les investisseurs peuvent exiger un prix plus faible ou une rémunération attendue plus élevée',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Le rendement attendu devient automatiquement nul',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le titre cesse forcément d\'être négociable',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Si le risque augmente sans compensation supplémentaire, l\'actif devient moins attractif à conditions identiques. Le prix peut alors devoir s\'ajuster à la baisse, ou le rendement exigé augmenter.',
      ),
      6 => 
      array (
        'question' => 'Une obligation verse 40 € d\'intérêt annuel et 1 000 € à l\'échéance. Quel type de flux l\'investisseur reçoit-il ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Uniquement un dividende variable',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Uniquement une valeur résiduelle sans paiement d\'intérêt',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Des intérêts périodiques et le remboursement du principal à l\'échéance',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Un remboursement du principal à chaque période',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une obligation classique verse souvent des coupons périodiques puis rembourse sa valeur nominale à l\'échéance. Les modalités exactes dépendent toutefois du contrat.',
      ),
      7 => 
      array (
        'question' => 'Quel risque concerne particulièrement la possibilité qu\'un émetteur ne respecte pas ses obligations de paiement ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le risque de change uniquement',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le risque de liquidité uniquement',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le risque opérationnel informatique uniquement',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le risque de crédit',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Le risque de crédit correspond notamment à la possibilité que l\'emprunteur ou l\'émetteur ne paie pas les montants dus selon les conditions prévues.',
      ),
      8 => 
      array (
        'question' => 'Une action verse 3 € de dividende et son prix passe de 50 € à 53 €. Quel est son rendement total simplifié sur la période ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '12 %',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => '6 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '10 %',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => '3 %',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le gain de prix est de 3 € et le dividende de 3 €, soit 6 € au total. Le rendement est donc 6 / 50 = 12 %.',
      ),
      9 => 
      array (
        'question' => 'Quelle distinction est correcte entre rendement attendu et rendement réalisé ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le rendement attendu est toujours égal au rendement réalisé',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le rendement attendu est une estimation avant le résultat, tandis que le rendement réalisé est observé après la période',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Le rendement réalisé est calculé uniquement pour les obligations',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le rendement attendu ne peut jamais tenir compte du risque',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Avant la période, on forme une anticipation à partir de scénarios ou de probabilités. Après la période, on observe le résultat effectivement obtenu. Les deux peuvent donc différer.',
      ),
      10 => 
      array (
        'question' => 'Un investisseur répartit son capital entre 20 entreprises au lieu d\'une seule. Quelle exposition cherche-t-il principalement à réduire ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Toute variation du marché mondial',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Toutes les pertes possibles, quelle qu\'en soit la cause',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le risque spécifique lié à une entreprise particulière',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Le risque d\'inflation uniquement',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La diversification répartit l\'exposition entre plusieurs émetteurs et réduit le poids d\'un événement propre à une entreprise. Elle ne supprime pas les risques communs au marché.',
      ),
      11 => 
      array (
        'question' => 'Dans une comparaison simple, un actif sans risque offre 3 % et un actif risqué a un rendement attendu de 8 %. Quelle est la prime de risque attendue dans cette approximation ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '11 %',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => '2 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '24 %',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => '5 %',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'La prime de risque est approximativement la différence entre le rendement attendu de l\'actif risqué et le taux de référence : 8 % - 3 % = 5 %.',
      ),
    ),
  ),
  4 => 
  array (
    'title' => 'Efficience des marchés financiers',
    'description' => 'Découvrez l\'idée d\'efficience informationnelle, ses implications simples et les limites des stratégies fondées sur l\'information publique.',
    'duration' => 21,
    'passing_score' => 55,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Que signifie, dans son sens le plus simple, l\'expression \'market efficiency\' ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Les prix des actifs intègrent rapidement l\'information disponible selon le niveau d\'efficience considéré',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Tous les actifs ont exactement le même prix',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Les prix ne changent jamais après une annonce',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Les investisseurs connaissent avec certitude les rendements futurs',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'efficience des marchés concerne la manière dont l\'information se reflète dans les prix. Elle ne signifie ni absence de variation des cours ni connaissance parfaite de l\'avenir.',
      ),
      1 => 
      array (
        'question' => 'Une entreprise publie une information positive, et son action réagit presque immédiatement. Quel phénomène est cohérent avec l\'hypothèse d\'efficience informationnelle ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'L\'absence totale de réaction à toute information',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'L\'ajustement rapide du prix à une nouvelle information publique',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'La preuve que les bénéfices futurs sont certains',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La suppression de tout risque pour les actionnaires',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Dans un marché informationnellement efficient, une nouvelle information pertinente peut être incorporée rapidement dans le prix. Cela ne rend pas le titre sans risque.',
      ),
      2 => 
      array (
        'question' => 'Pourquoi l\'efficience des marchés remet-elle en question la possibilité de battre systématiquement le marché avec une information déjà publique ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce que les prix sont fixés par la loi et ne changent plus',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce qu\'aucun investisseur ne peut jamais subir de perte',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Parce que l\'information publique pertinente est supposée déjà reflétée dans les prix',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Parce que tous les investisseurs disposent exactement du même portefeuille',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Dans une forme d\'efficience incluant l\'information publique, exploiter une information déjà connue ne devrait pas permettre d\'obtenir de façon systématique un rendement anormal après prise en compte du risque et des coûts.',
      ),
      3 => 
      array (
        'question' => 'Un analyste pense pouvoir gagner durablement grâce à une information publique qu\'il vient d\'étudier. Quel point doit-il examiner avant de conclure à un avantage durable ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Si le nom de l\'entreprise est suffisamment connu',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Si l\'action a une couleur de graphique différente',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Si tous les investisseurs ont le même salaire',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Si le marché a déjà intégré cette information et si les coûts de transaction absorbent l\'avantage apparent',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Une stratégie ne doit pas être jugée uniquement sur son rendement brut. L\'information peut déjà être intégrée au prix, et les frais de transaction peuvent réduire ou éliminer un avantage théorique.',
      ),
      4 => 
      array (
        'question' => 'Quel énoncé est compatible avec un marché efficient ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Les prix peuvent évoluer fortement lorsque de nouvelles informations arrivent',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Les prix ne peuvent jamais être volatils',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une action ne peut jamais baisser après une bonne nouvelle',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Les investisseurs connaissent toujours le cours de demain',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'efficience ne signifie pas stabilité des prix. Au contraire, l\'arrivée de nouvelles informations peut entraîner des mouvements rapides, y compris inattendus.',
      ),
      5 => 
      array (
        'question' => 'Un investisseur affirme : \'Une action a baissé cinq jours de suite, donc elle doit remonter demain.\' Quelle difficulté pose ce raisonnement pour l\'hypothèse d\'efficience ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Il prouve automatiquement que le marché est parfaitement efficient',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Il suppose qu\'une simple tendance passée permet systématiquement de prédire un rendement anormal futur',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Il montre que les obligations sont sans risque',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Il établit que toute baisse passée était irrationnelle',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le raisonnement suppose une relation exploitable entre les prix passés et un rendement futur supérieur à ce qui est attendu. L\'existence d\'une telle stratégie systématique est précisément une question empirique liée à l\'efficience.',
      ),
      6 => 
      array (
        'question' => 'Pourquoi les coûts de transaction sont-ils importants lorsqu\'on évalue une stratégie d\'investissement ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce qu\'ils augmentent toujours le rendement net',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce qu\'ils n\'affectent que les investisseurs débutants',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Parce qu\'un avantage brut peut disparaître après commissions, spreads et autres coûts',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Parce qu\'ils remplacent entièrement le risque de marché',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une stratégie doit être évaluée sur le rendement net. Des transactions fréquentes peuvent générer suffisamment de coûts pour annuler un petit avantage observé avant frais.',
      ),
      7 => 
      array (
        'question' => 'Un prix boursier tombe après une annonce totalement inattendue. Cela contredit-il nécessairement l\'efficience ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Oui, car un marché efficient doit maintenir les prix constants',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Oui, car les marchés efficients n\'utilisent aucune information',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Oui, car une annonce inattendue ne peut jamais affecter une entreprise',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Non, car l\'efficience n\'empêche pas les prix d\'intégrer de nouvelles informations et de changer',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Une information nouvelle peut modifier les anticipations sur les flux ou les risques d\'une entreprise. Un changement de prix en réponse à cette information est donc compatible avec l\'efficience.',
      ),
      8 => 
      array (
        'question' => 'Lequel représente une information publique typique ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Les résultats annuels officiellement publiés par une société',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Une information confidentielle obtenue clandestinement avant sa publication',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une conversation secrète entre deux dirigeants',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Un document interne non communiqué au marché',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Des résultats financiers publiés officiellement sont accessibles au public. Ils peuvent donc être considérés comme de l\'information publique, contrairement à une information interne non divulguée.',
      ),
      9 => 
      array (
        'question' => 'Quel piège méthodologique peut donner l\'impression qu\'une stratégie \'bat le marché\' ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Utiliser un portefeuille diversifié',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Ignorer les coûts, le risque ou sélectionner après coup uniquement les périodes favorables',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Comparer deux rendements sur la même période',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Mesurer un rendement en pourcentage',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une performance historique peut être trompeuse si l\'analyse ignore les coûts, le risque ou le biais de sélection. Une stratégie exceptionnelle sur une période ne prouve pas automatiquement un avantage durable.',
      ),
    ),
  ),
  5 => 
  array (
    'title' => 'Allocation du capital et décisions financières',
    'description' => 'Apprenez à relier coût du capital, choix de projets, financement et allocation des ressources aux décisions financières d\'une entreprise.',
    'duration' => 24,
    'passing_score' => 60,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Quel est l\'objectif central d\'une décision d\'allocation du capital pour une entreprise ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Investir tout le budget disponible sans analyser les projets',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Choisir uniquement les projets les plus longs',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Affecter les ressources aux usages qui créent le plus de valeur compte tenu du risque',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Éviter systématiquement tout financement externe',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'allocation du capital consiste à sélectionner les usages des ressources financières en fonction des rendements attendus, des risques et du coût des ressources mobilisées.',
      ),
      1 => 
      array (
        'question' => 'Un projet nécessite 20 000 € et devrait générer des flux suffisamment élevés pour couvrir ce montant ainsi que le rendement exigé. Quel principe financier est appliqué en priorité ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Choisir automatiquement le projet au budget le plus élevé',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Ignorer le calendrier des flux',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Utiliser uniquement le nombre de salariés comme critère',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Comparer la valeur économique des flux futurs au capital engagé et à son coût',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Une décision d\'investissement doit tenir compte du montant engagé, du calendrier des flux et du rendement exigé. Le principe est de déterminer si la valeur créée compense le capital et le risque supportés.',
      ),
      2 => 
      array (
        'question' => 'Une entreprise hésite entre un projet qui rapporte rapidement et un projet plus rentable mais beaucoup plus long. Quel élément ne doit-elle pas oublier ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La valeur temporelle des flux et le risque associé à chaque projet',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Uniquement le nombre de pages du dossier de projet',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le fait qu\'un projet long est toujours supérieur',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La couleur du logo du financement',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Des flux reçus plus tard doivent être actualisés, et un horizon plus long peut aussi impliquer davantage d\'incertitude. La comparaison ne peut donc pas reposer sur le seul montant nominal final.',
      ),
      3 => 
      array (
        'question' => 'Quel énoncé décrit le mieux le coût du capital pour une entreprise ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le chiffre d\'affaires de l\'entreprise',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le rendement que les apporteurs de fonds exigent en contrepartie du financement et du risque',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Le nombre total d\'employés',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La valeur nominale des factures clients',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le coût du capital représente le rendement exigé par les financeurs pour fournir des ressources à l\'entreprise, en tenant compte du risque et de la structure de financement.',
      ),
      4 => 
      array (
        'question' => 'Une entreprise utilise exclusivement de la dette pour financer un projet. Quel effet économique doit-elle prendre en considération ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La dette élimine tout risque commercial',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'La dette garantit automatiquement un bénéfice',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'La dette crée des obligations de paiement et augmente l\'exposition au risque financier',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'La dette n\'a jamais de coût financier',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La dette apporte des ressources mais implique des intérêts et un remboursement. Si les flux de l\'entreprise deviennent insuffisants, cette obligation peut accroître le risque financier.',
      ),
      5 => 
      array (
        'question' => 'Un projet A a une valeur actuelle nette positive, tandis que le projet B a une valeur actuelle nette négative, avec des caractéristiques comparables. Quelle conclusion élémentaire est la plus cohérente ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le projet B est nécessairement plus rentable',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Les deux projets sont financièrement équivalents',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'La valeur actuelle nette ne tient jamais compte du coût du capital',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le projet A crée davantage de valeur selon les hypothèses retenues',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Une NPV positive signifie que la valeur actuelle des flux futurs dépasse l\'investissement initial selon le taux retenu. Une NPV négative indique l\'inverse dans ce cadre d\'analyse.',
      ),
      6 => 
      array (
        'question' => 'Pourquoi une entreprise peut-elle conserver une réserve de liquidités même si elle possède des projets rentables ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Pour faire face aux besoins imprévus, financer le cycle d\'exploitation ou saisir rapidement une opportunité',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Parce que les liquidités n\'ont jamais aucun coût d\'opportunité',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Parce qu\'une réserve de trésorerie garantit toujours un rendement élevé',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Pour éviter toute analyse du risque',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La liquidité offre une marge de sécurité et de flexibilité. En revanche, conserver trop de liquidités peut avoir un coût d\'opportunité car les fonds ne sont pas utilisés ailleurs.',
      ),
      7 => 
      array (
        'question' => 'Une entreprise finance un nouveau projet en utilisant des bénéfices non distribués. Comment s\'appelle ce financement ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une dette bancaire',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'L\'autofinancement',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Une émission obligatoire',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Une subvention automatique',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'utilisation des bénéfices conservés par l\'entreprise pour financer ses investissements relève de l\'autofinancement. Aucun nouvel emprunt n\'est nécessaire pour cette source de fonds.',
      ),
      8 => 
      array (
        'question' => 'Une société compare deux projets nécessitant chacun 100 000 € mais présentant des risques très différents. Pourquoi un taux d\'actualisation identique peut-il être problématique ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le projet le plus risqué a toujours des flux plus faibles',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le taux d\'actualisation n\'a aucun lien avec le risque',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le projet le plus risqué peut exiger un rendement supérieur',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Les deux projets doivent être évalués uniquement sur leur durée',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le taux d\'actualisation reflète notamment le rendement exigé compte tenu du risque. Utiliser un taux unique pour des risques très différents peut conduire à une valorisation incohérente.',
      ),
      9 => 
      array (
        'question' => 'Quel choix illustre une mauvaise allocation du capital ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Comparer les flux de trésorerie avant d\'investir',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Évaluer le coût du financement',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Analyser plusieurs scénarios',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Financer un projet très risqué et peu rentable alors qu\'une alternative comparable crée davantage de valeur',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'L\'allocation du capital vise à utiliser les ressources là où elles ont la meilleure contribution économique compte tenu du risque. Ignorer cette comparaison peut détruire de la valeur.',
      ),
      10 => 
      array (
        'question' => 'Quel est l\'intérêt principal d\'une analyse de sensibilité d\'un projet financier ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Voir comment les résultats changent lorsque certaines hypothèses sont modifiées',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Garantir que les flux futurs seront exacts',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Supprimer la nécessité d\'estimer les coûts',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Remplacer toute décision managériale par une formule automatique',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une analyse de sensibilité teste l\'effet de variations des hypothèses, comme les ventes, les coûts ou le taux d\'actualisation. Elle met en évidence les facteurs qui rendent le projet plus ou moins vulnérable.',
      ),
      11 => 
      array (
        'question' => 'Une entreprise peut obtenir un financement à 6 % pour un projet dont le rendement attendu est de 9 %. Pourquoi l\'écart de 3 points peut-il être intéressant ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Il garantit que le projet ne peut jamais perdre d\'argent',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Il suggère que le rendement attendu du projet dépasse son coût de financement, sous réserve du risque et des autres hypothèses',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Il prouve que la dette est gratuite',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Il signifie que le projet a nécessairement une NPV de 3 €',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Un rendement attendu supérieur au coût du financement peut être favorable, mais l\'écart seul ne suffit pas à conclure. Le risque, le calendrier des flux, les taxes et les autres coûts doivent aussi être pris en compte.',
      ),
    ),
  ),
  6 => 
  array (
    'title' => 'Incitations, information et décisions financières',
    'description' => 'Explorez les effets des incitations, des asymétries d\'information et des conflits d\'intérêts sur les décisions financières.',
    'duration' => 20,
    'passing_score' => 55,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Que désigne une asymétrie d\'information en finance ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une égalité parfaite des informations entre tous les investisseurs',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Une différence de devise entre deux pays',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une situation où les parties à une transaction ne disposent pas du même niveau d\'information pertinent',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Une variation identique des taux d\'intérêt',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'asymétrie d\'information apparaît lorsque l\'une des parties possède des informations pertinentes que l\'autre ne détient pas, ce qui peut modifier les termes d\'une transaction ou les comportements.',
      ),
      1 => 
      array (
        'question' => 'Une banque prête à une entreprise qui connaît mieux que la banque la qualité réelle de son projet. Quel problème d\'information peut apparaître ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La banque connaît automatiquement tous les résultats futurs',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le projet devient sans risque',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'L\'emprunteur ne peut plus utiliser aucun financement',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La banque peut avoir plus de difficulté à évaluer correctement le risque avant le prêt',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Lorsque l\'emprunteur détient une information supérieure sur le projet, le prêteur peut mal apprécier le risque. Cette difficulté d\'évaluation est un effet classique de l\'asymétrie d\'information.',
      ),
      2 => 
      array (
        'question' => 'Quel mécanisme peut aider une banque à réduire l\'incertitude sur un emprunteur ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Demander des informations financières, analyser les flux et évaluer les garanties selon le dossier',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Ignorer l\'historique de l\'entreprise',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Accorder tous les prêts au même taux sans aucune analyse',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Supposer que toutes les entreprises présentent le même risque',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La collecte et l\'analyse d\'informations permettent au prêteur de mieux estimer la capacité de remboursement et les risques. Les modalités exactes dépendent du type de crédit.',
      ),
      3 => 
      array (
        'question' => 'Dans une entreprise, les dirigeants prennent des décisions au nom des actionnaires. Quel problème peut surgir si leurs intérêts divergent ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une suppression automatique de la gouvernance',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Un conflit d\'agence entre mandants et dirigeants',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Une disparition de tout risque financier',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Une hausse mécanique du cours de l\'action',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le problème d\'agence apparaît lorsqu\'un agent prend des décisions pour le compte d\'un principal mais peut poursuivre des intérêts différents. Les mécanismes de gouvernance cherchent notamment à limiter ces divergences.',
      ),
      4 => 
      array (
        'question' => 'Pourquoi une rémunération variable liée à des objectifs peut-elle modifier le comportement d\'un dirigeant ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce qu\'elle rend toutes les décisions sans risque',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce qu\'elle élimine toute divergence d\'intérêts',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Parce qu\'elle crée une incitation financière à atteindre les objectifs associés',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Parce qu\'elle garantit que l\'objectif choisi est optimal',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une rémunération liée à la performance influence les incitations. Toutefois, la qualité des objectifs et leur mesure sont importantes pour éviter des comportements indésirables.',
      ),
      5 => 
      array (
        'question' => 'Quel exemple illustre un risque de conflit d\'intérêts ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Un investisseur compare plusieurs offres concurrentes',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Une entreprise publie son bilan annuel',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Un épargnant répartit son argent entre plusieurs actifs',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Un conseiller favorise un produit parce qu\'il reçoit une rémunération supplémentaire, alors qu\'un autre produit conviendrait mieux au client',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Le conflit d\'intérêts apparaît lorsqu\'un intérêt personnel ou économique peut influencer une décision qui devrait être prise dans l\'intérêt d\'une autre partie.',
      ),
      6 => 
      array (
        'question' => 'Un investisseur dispose d\'un signal privé sur une entreprise, mais aucun autre investisseur n\'en dispose. Quelle difficulté économique peut-il y avoir sur le marché ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une asymétrie d\'information entre participants',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Une disparition automatique de la liquidité',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une garantie de prix identiques pour tous',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Une hausse mécanique de tous les actifs',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Lorsque certains participants disposent d\'une information pertinente qui n\'est pas accessible aux autres, les décisions et les prix peuvent refléter cette différence d\'information.',
      ),
      7 => 
      array (
        'question' => 'Pourquoi la transparence financière peut-elle améliorer le fonctionnement des marchés ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Elle garantit que les cours monteront',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Elle aide les investisseurs et prêteurs à évaluer les entreprises avec davantage d\'informations',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Elle supprime le risque de marché',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Elle empêche toute décision différente entre investisseurs',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une information financière de qualité réduit certaines asymétries et permet aux participants d\'évaluer plus correctement les résultats, les risques et les perspectives d\'une entreprise.',
      ),
      8 => 
      array (
        'question' => 'Une entreprise sait qu\'un projet est très risqué mais présente uniquement les scénarios optimistes à un prêteur. Quel est le problème principal ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le projet devient automatiquement moins risqué',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le prêteur ne pourra plus demander de remboursement',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le prêteur peut sous-estimer le risque réel à cause d\'une information incomplète',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'La valeur actuelle du projet devient nécessairement positive',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Présenter seulement les scénarios favorables peut conduire l\'autre partie à former une perception trop optimiste du risque. La qualité et l\'exhaustivité de l\'information sont donc importantes.',
      ),
      9 => 
      array (
        'question' => 'Après l\'obtention d\'un financement, une entreprise peut prendre davantage de risques parce qu\'elle sait qu\'une partie des pertes potentielles sera supportée par ses financeurs. Quel problème cela illustre-t-il ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La capitalisation composée des intérêts',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'La valeur temporelle de l\'argent',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'La diversification automatique du portefeuille',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Un risque moral lié au changement de comportement après la conclusion du financement',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Le risque moral apparaît lorsqu\'une partie peut modifier son comportement après la conclusion d\'un contrat parce qu\'elle ne supporte pas entièrement les conséquences de ses choix. En finance, cela peut compliquer la surveillance du risque après l\'octroi d\'un financement.',
      ),
    ),
  ),
  7 => 
  array (
    'title' => 'Marchés de capitaux et formation des prix',
    'description' => 'Comprenez le fonctionnement élémentaire des marchés de capitaux, des actions, des obligations et des mécanismes de prix.',
    'duration' => 22,
    'passing_score' => 60,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Lorsqu\'un investisseur achète une action sur le marché secondaire, à qui verse-t-il généralement le prix de l\'action ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'À un autre participant qui vend le titre',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Toujours directement à l\'entreprise émettrice',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Uniquement à la banque centrale',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Au gouvernement de l\'entreprise cotée',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Sur le marché secondaire, les investisseurs échangent des titres déjà émis. Le produit de la vente revient généralement au vendeur, et non à l\'entreprise émettrice.',
      ),
      1 => 
      array (
        'question' => 'Quelle est la fonction principale d\'un marché primaire ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Échanger uniquement des titres déjà existants entre investisseurs',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Permettre l\'émission de nouveaux titres afin de lever des fonds',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Fixer tous les taux d\'intérêt de l\'économie',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Garantir la rentabilité future des entreprises',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le marché primaire concerne la création et la vente initiale de titres financiers. L\'émetteur cherche alors à obtenir des ressources auprès des investisseurs.',
      ),
      2 => 
      array (
        'question' => 'Une entreprise émet de nouvelles actions pour financer une usine. Que reçoit-elle principalement en contrepartie ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une dette automatiquement sans échéance',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Un remboursement garanti par les actionnaires',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Des fonds propres apportés par les nouveaux investisseurs',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Une obligation de verser un intérêt fixe',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'émission d\'actions apporte des capitaux propres. Les investisseurs deviennent actionnaires et leur rémunération n\'est pas fixée comme un intérêt contractuel de dette.',
      ),
      3 => 
      array (
        'question' => 'Pourquoi le prix d\'une obligation existante peut-il baisser lorsque les taux de marché augmentent fortement ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Parce que toute obligation cesse automatiquement de payer ses coupons',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Parce que son principal devient toujours égal à zéro',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Parce que les entreprises deviennent toutes insolvables',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Ses paiements fixes deviennent moins attractifs par rapport aux nouvelles obligations offrant des taux supérieurs',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Quand les taux de marché montent, les coupons fixes d\'une ancienne obligation peuvent devenir relativement moins attractifs. Son prix peut alors diminuer afin que son rendement soit cohérent avec le nouveau contexte de taux.',
      ),
      4 => 
      array (
        'question' => 'Quel élément influence directement le cours d\'une action selon une approche financière fondamentale ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Les perspectives de flux futurs et le risque associé',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Uniquement le nombre de lettres du nom de l\'entreprise',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Uniquement le prix observé la veille',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La météo du lieu du siège, sans autre effet économique',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une approche fondamentale relie la valeur d\'un actif aux flux économiques qu\'il peut générer et au risque de ces flux. Les informations nouvelles peuvent modifier ces anticipations et donc le prix.',
      ),
      5 => 
      array (
        'question' => 'Un ordre d\'achat accepte de payer jusqu\'à 50 € pour une action, alors qu\'une offre de vente est disponible à 49 €. Que se passe-t-il normalement si les conditions de marché permettent l\'exécution ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La transaction doit nécessairement se réaliser à 50 €',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'La transaction peut se réaliser autour de 49 €, selon les règles de priorité et d\'exécution du marché',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Aucune transaction n\'est possible avant une baisse à 40 €',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le vendeur doit recevoir 60 €',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Lorsqu\'une offre de vente est compatible avec un prix maximal d\'achat, un ordre peut être exécuté à un prix disponible dans le carnet, sous réserve des règles précises de priorité et du type d\'ordre.',
      ),
      6 => 
      array (
        'question' => 'Pourquoi la liquidité d\'un marché est-elle utile à un investisseur ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Elle garantit un rendement positif',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Elle supprime tout risque de crédit',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Elle facilite l\'achat ou la vente d\'un actif sans provoquer nécessairement une forte variation de prix',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Elle empêche toute baisse du cours',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Un marché liquide permet généralement d\'exécuter des transactions avec moins de difficulté et un impact de prix plus limité. La liquidité ne garantit cependant aucun rendement.',
      ),
      7 => 
      array (
        'question' => 'Une action cote 80 € et verse un dividende annuel de 4 €. Quel est approximativement son dividend yield calculé sur ce prix ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '20 %',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => '0,5 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '84 %',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => '5 %',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Le dividend yield est approximativement 4 / 80 = 5 %. Il mesure le dividende annuel rapporté au prix de l\'action, sans inclure la variation du cours.',
      ),
      8 => 
      array (
        'question' => 'Une entreprise émet une obligation de 1 000 € de valeur nominale avec un coupon annuel de 50 €. Quel est son taux de coupon ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '5 %',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => '0,5 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '50 %',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => '20 %',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le taux de coupon correspond à 50 / 1 000 = 5 %. Il est calculé par rapport à la valeur nominale et non au prix de marché actuel.',
      ),
      9 => 
      array (
        'question' => 'Quelle différence fondamentale distingue une action ordinaire d\'une obligation classique ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'L\'action est toujours sans risque alors que l\'obligation est toujours risquée',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'L\'action représente un droit de propriété tandis que l\'obligation représente une créance sur l\'émetteur',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'L\'obligation donne nécessairement un droit de vote',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Les deux instruments sont juridiquement identiques',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une action représente une participation au capital de l\'entreprise, alors qu\'une obligation correspond à une créance contractuelle sur l\'émetteur selon ses modalités.',
      ),
      10 => 
      array (
        'question' => 'Si davantage d\'investisseurs souhaitent acheter une action alors que l\'offre disponible reste inchangée à court terme, quel mécanisme de marché peut se produire ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une baisse automatique du prix',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'La suppression du titre',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une pression à la hausse sur le prix jusqu\'à ce que l\'offre et la demande se rééquilibrent',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Une fixation administrative du prix à zéro',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Lorsque la demande augmente relativement à l\'offre disponible, les acheteurs peuvent accepter des prix plus élevés. Le prix de marché contribue ainsi à ajuster l\'équilibre entre les ordres.',
      ),
    ),
  ),
  8 => 
  array (
    'title' => 'Prix des actifs, taux d\'actualisation et décisions',
    'description' => 'Mettez en pratique les relations entre flux futurs, taux d\'actualisation, risque et prix des actifs dans des mini-cas financiers.',
    'duration' => 25,
    'passing_score' => 55,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Un actif promet 1 100 € dans un an. À un taux d\'actualisation de 10 %, quelle est sa valeur actuelle ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '1 210 €',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => '990 €',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '900 €',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => '1 000 €',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'La valeur actuelle est 1 100 / 1,10 = 1 000 €. On divise le flux futur par un facteur de capitalisation correspondant au taux d\'actualisation.',
      ),
      1 => 
      array (
        'question' => 'Deux actifs produisent les mêmes flux futurs. Lequel devrait avoir la valeur actuelle la plus faible dans un modèle simple ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Celui dont les flux sont actualisés à un taux plus élevé',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Celui dont le taux d\'actualisation est le plus faible',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Ils doivent toujours avoir des valeurs identiques',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Celui dont les flux arrivent plus tôt',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Un taux d\'actualisation plus élevé réduit davantage la valeur présente de flux futurs identiques. Cela reflète notamment un coût du temps ou un risque considéré comme plus élevé.',
      ),
      2 => 
      array (
        'question' => 'Une entreprise estime que les flux futurs d\'un projet seront plus incertains qu\'elle ne le pensait initialement. Quel changement d\'évaluation est plausible ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une baisse automatique du taux de rendement exigé',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Une hausse du taux de rendement exigé, ce qui peut réduire la valeur actuelle du projet',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Une hausse garantie de la NPV',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Aucun changement possible même si le risque double',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Un risque perçu plus élevé peut conduire les investisseurs à exiger une rémunération supérieure. Avec des flux identiques, un taux d\'actualisation plus élevé réduit leur valeur actuelle.',
      ),
      3 => 
      array (
        'question' => 'Un projet coûte 50 000 € aujourd\'hui et sa valeur actuelle des flux futurs est estimée à 56 000 €. Quelle est sa NPV simplifiée ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => '106 000 €',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => '-6 000 €',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => '6 000 €',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => '56 000 €',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La NPV simplifiée est 56 000 - 50 000 = 6 000 €. Elle est positive selon les hypothèses retenues, ce qui indique une création de valeur dans ce cadre.',
      ),
      4 => 
      array (
        'question' => 'Une action a un cours de 40 € et l\'entreprise annonce une amélioration durable de ses perspectives bénéficiaires. Si les autres facteurs restent inchangés, quel mécanisme de valorisation est plausible ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le prix doit automatiquement tomber à zéro',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le risque disparaît totalement',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le nombre d\'actions diminue toujours de moitié',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Les anticipations de flux futurs peuvent augmenter et soutenir un prix plus élevé',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Si les perspectives économiques de l\'entreprise s\'améliorent, les investisseurs peuvent relever leurs anticipations de flux futurs. Une valeur intrinsèque estimée plus élevée peut alors soutenir une hausse du prix de marché.',
      ),
      5 => 
      array (
        'question' => 'Quel énoncé décrit correctement le lien entre prix et rendement exigé, dans un modèle simple à flux fixes ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une hausse du rendement exigé tend à réduire le prix actuel d\'un actif à flux fixes',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Une hausse du rendement exigé augmente toujours le prix',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le prix ne dépend jamais du taux d\'actualisation',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le rendement exigé ne concerne que les actions',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Plus le taux d\'actualisation est élevé, plus les flux futurs sont fortement réduits lorsqu\'on les ramène à aujourd\'hui. À flux constants, la valeur actuelle diminue.',
      ),
      6 => 
      array (
        'question' => 'Une entreprise reçoit 20 000 € dans un an et 20 000 € dans deux ans. À taux positif, lequel des deux flux contribue le plus à la valeur actuelle ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le flux de 20 000 € reçu dans deux ans',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le flux de 20 000 € reçu dans un an',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Ils ont toujours la même valeur actuelle',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le second flux est toujours deux fois plus important',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Le flux de la première année subit moins de périodes d\'actualisation. Il a donc une valeur actuelle plus élevée que le même montant reçu un an plus tard.',
      ),
      7 => 
      array (
        'question' => 'Un investisseur exige 7 % de rendement pour un actif dont les flux sont incertains, contre 3 % pour une référence plus sûre. Quelle différence représente ces 4 points ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une taxe de 4 % imposée sur tous les actifs',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Une garantie de gain supplémentaire de 4 %',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une rémunération supplémentaire associée à un risque plus élevé dans cette comparaison',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Une diminution de 4 % de la valeur nominale',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'L\'écart de 4 points entre le rendement exigé de l\'actif risqué et celui de la référence plus sûre peut être interprété comme une prime de risque dans cette simplification.',
      ),
      8 => 
      array (
        'question' => 'Une entreprise augmente son estimation de chiffre d\'affaires mais aussi ses coûts de manière proportionnelle. Quel point faut-il examiner avant de conclure que la valeur du projet augmente ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Uniquement le chiffre d\'affaires sans regarder les coûts',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Uniquement la durée du nom commercial',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le nombre d\'actions du marché entier',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'L\'effet net sur les flux de trésorerie et sur la rentabilité du projet',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'La valeur financière dépend des flux nets, pas du seul chiffre d\'affaires. Une hausse des ventes peut être accompagnée de coûts supplémentaires qui neutralisent une partie ou la totalité de l\'effet favorable.',
      ),
      9 => 
      array (
        'question' => 'Un actif verse 500 € dans deux ans. À un taux d\'actualisation de 10 %, sa valeur actuelle est-elle supérieure ou inférieure à 500 € ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Inférieure à 500 €',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Supérieure à 500 €',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Également 500 € quel que soit le taux',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Impossible à déterminer sans connaître la couleur du titre',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Avec un taux d\'actualisation positif, un montant futur a une valeur actuelle inférieure à son montant nominal. Ici, le flux est divisé par 1,10².',
      ),
      10 => 
      array (
        'question' => 'Quel facteur peut réduire la valeur d\'un actif même si ses flux futurs nominaux restent inchangés ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une baisse du risque perçu',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Une hausse du taux d\'actualisation exigé',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Une réception plus proche des mêmes flux',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Une baisse des coûts de financement pertinents',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Un taux d\'actualisation plus élevé réduit mathématiquement la valeur actuelle des flux futurs inchangés. Les changements de risque peuvent donc influencer la valeur même sans modifier les montants nominaux anticipés.',
      ),
      11 => 
      array (
        'question' => 'Un projet a une NPV légèrement positive dans le scénario central mais négative dans plusieurs scénarios défavorables. Que faut-il surtout retenir ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le projet est garanti rentable',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Les scénarios défavorables doivent être ignorés',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'La décision dépend fortement des hypothèses et mérite une analyse de sensibilité du risque',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'La NPV ne dépend jamais des hypothèses',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une NPV proche de zéro et sensible aux hypothèses indique une forte dépendance du résultat à l\'environnement économique. L\'analyse de sensibilité permet d\'évaluer cette vulnérabilité avant une décision.',
      ),
    ),
  ),
  9 => 
  array (
    'title' => 'Cas pratiques d\'économie financière',
    'description' => 'Un dernier entraînement fondé sur de courts cas pour mobiliser les principaux concepts de finance économique.',
    'duration' => 27,
    'passing_score' => 60,
    'questions' => 
    array (
      0 => 
      array (
        'question' => 'Une entreprise peut financer un projet à 5 %. Le projet devrait générer des flux dont le rendement attendu est de 8 %, mais il comporte une forte incertitude. Quelle information supplémentaire est la plus importante avant de conclure ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La longueur du nom du projet',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le nombre de concurrents sans aucun autre élément financier',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'La couleur de la présentation financière',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le niveau de risque et la manière dont il est déjà pris en compte dans le rendement exigé',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'L\'écart entre rendement attendu et coût du financement n\'est pas suffisant à lui seul. Il faut déterminer si le rendement attendu compense correctement le risque et tenir compte du profil temporel des flux.',
      ),
      1 => 
      array (
        'question' => 'Une famille reçoit 12 000 € aujourd\'hui ou 12 600 € dans un an. Avec un rendement alternatif certain de 5 %, quelle option a la même valeur économique aujourd\'hui ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Les 12 600 € dans un an, car 12 000 × 1,05 = 12 600',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Les 12 000 € aujourd\'hui uniquement, car un montant futur ne vaut rien',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Les deux options ne peuvent jamais être comparées',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Les 12 600 € dans un an valent nécessairement plus que 12 000 € aujourd\'hui',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'À 5 %, 12 000 € deviennent 12 600 € en un an. Les deux options sont donc financièrement équivalentes dans cette hypothèse de rendement certain et sans autre différence.',
      ),
      2 => 
      array (
        'question' => 'Une entreprise exportatrice recevra des paiements dans une devise étrangère. Quel facteur financier doit-elle notamment surveiller ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le risque de température uniquement',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le risque de change',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Le risque de dividende d\'une autre entreprise',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le risque de coupon d\'une obligation sans lien',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La valeur en monnaie domestique d\'un paiement futur en devise étrangère peut varier avec le taux de change. Cette incertitude constitue un risque de change.',
      ),
      3 => 
      array (
        'question' => 'Un investisseur choisit une seule action parce qu\'elle a produit un excellent rendement l\'an dernier. Quelle faiblesse principale présente cette décision ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Elle garantit un risque plus faible',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Elle augmente automatiquement le nombre d\'actifs détenus',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Elle ignore la diversification et suppose que la performance passée se répétera',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Elle transforme l\'action en obligation',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une excellente performance passée ne garantit pas une performance future. Concentrer tout le portefeuille sur un seul actif augmente aussi le risque spécifique supporté.',
      ),
      4 => 
      array (
        'question' => 'Une obligation verse un coupon fixe de 4 %. De nouvelles obligations comparables sont émises à 6 %. Quel ajustement est plausible pour l\'ancienne obligation sur le marché secondaire ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Son coupon contractuel devient automatiquement 6 %',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Sa valeur nominale devient automatiquement 600 €',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Elle devient une action',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Son prix peut diminuer afin d\'offrir un rendement courant plus compétitif',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Le coupon contractuel ne change pas simplement parce que le marché évolue. Pour rendre l\'ancienne obligation plus attractive face aux nouveaux titres, son prix de marché peut baisser.',
      ),
      5 => 
      array (
        'question' => 'Un projet prévoit 30 000 € de flux futurs mais demande 35 000 € d\'investissement initial. Peut-on conclure immédiatement qu\'il détruit 5 000 € de valeur ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Non, il faut actualiser les flux futurs et tenir compte du calendrier et du taux pertinent',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Oui, car il suffit toujours de soustraire les deux montants nominaux',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Oui, car tout flux futur vaut exactement son montant nominal aujourd\'hui',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Non, car les investissements n\'ont jamais de coût',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Des flux futurs ne sont pas directement comparables à un investissement présent. La NPV utilise leur valeur actuelle, déterminée avec un taux d\'actualisation cohérent.',
      ),
      6 => 
      array (
        'question' => 'Une banque observe que deux entreprises demandent le même montant de crédit, mais que l\'une présente des flux beaucoup plus stables. Quel élément peut justifier une évaluation différente ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le montant demandé suffit à lui seul à déterminer le risque',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Le profil de risque et la capacité probable de remboursement',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Les deux entreprises doivent avoir exactement les mêmes conditions',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'La stabilité des flux n\'a aucun rapport avec le crédit',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'La stabilité des flux peut influencer la probabilité de remboursement et donc le risque de crédit. Un prêteur peut intégrer cette différence dans son analyse et ses conditions.',
      ),
      7 => 
      array (
        'question' => 'Un marché est très liquide et reçoit une information importante sur une entreprise. Pourquoi le prix peut-il changer rapidement ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'La liquidité signifie que les prix sont fixes',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'L\'information ne peut jamais influencer un marché liquide',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Les nombreux ordres d\'achat et de vente peuvent intégrer rapidement l\'information dans le prix',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Tous les investisseurs doivent voter sur le nouveau prix',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Sur un marché liquide, les transactions peuvent être nombreuses et rapides. Une information nouvelle peut donc se traduire rapidement par des ajustements du prix selon les anticipations des participants.',
      ),
      8 => 
      array (
        'question' => 'Une entreprise conserve 2 M€ sur un compte faiblement rémunéré alors qu\'elle pourrait financer un projet rentable après analyse. Quel arbitrage économique doit-elle considérer ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Le projet doit être accepté simplement parce qu\'il est nouveau',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Les liquidités n\'ont aucune valeur de flexibilité',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Le projet est automatiquement sans risque parce qu\'il est financé en interne',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Le rendement et le risque du projet comparés au rendement et à la sécurité procurés par les liquidités',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'Conserver des liquidités offre sécurité et flexibilité, mais leur rendement peut être faible. L\'entreprise doit comparer ce bénéfice au rendement, au risque et aux besoins de financement du projet.',
      ),
      9 => 
      array (
        'question' => 'Un investisseur achète un actif sans analyser ses flux ni son risque et uniquement parce qu\'un ami affirme qu\'il va monter. Quel élément de décision financière manque principalement ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Une évaluation structurée du rendement attendu, du risque et de la valeur de l\'actif',
            'is_correct' => true,
          ),
          1 => 
          array (
            'choice_text' => 'Une augmentation automatique du capital',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une garantie publique de rendement',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Une suppression des coûts de transaction',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Une décision d\'investissement rationnelle doit considérer les flux potentiels, les risques, le prix payé et les alternatives. Une simple affirmation extérieure ne constitue pas une analyse financière suffisante.',
      ),
      10 => 
      array (
        'question' => 'L\'inflation passe de 2 % à 6 %, tandis que le taux nominal d\'un dépôt reste à 4 %. Quelle évolution approximative du rendement réel observe-t-on ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Il passe de -2 % à +2 %',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Il passe d\'environ +2 % à environ -2 %',
            'is_correct' => true,
          ),
          2 => 
          array (
            'choice_text' => 'Il reste exactement égal à 4 %',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Il devient automatiquement +10 %',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'En approximation simple, le rendement réel est taux nominal moins inflation. Il était d\'environ 4 % - 2 % = +2 %, puis devient 4 % - 6 % = -2 %.',
      ),
      11 => 
      array (
        'question' => 'Une annonce publique prévisible n\'entraîne presque aucun mouvement du cours d\'une action, tandis qu\'une annonce inattendue provoque un fort mouvement. Quelle interprétation est la plus cohérente avec l\'efficience informationnelle ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Un marché efficient ne réagit jamais aux informations',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Une information inattendue ne peut pas avoir d\'effet sur la valeur',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Une information déjà anticipée peut être déjà intégrée au prix, alors qu\'une surprise peut modifier rapidement les anticipations',
            'is_correct' => true,
          ),
          3 => 
          array (
            'choice_text' => 'Le marché doit changer de cours au même rythme pour toute annonce',
            'is_correct' => false,
          ),
        ),
        'explanation' => 'Ce qui compte pour le prix est notamment la différence entre ce qui était déjà anticipé et ce qui constitue une nouvelle information. Une surprise peut donc déclencher un ajustement alors qu\'une information attendue est déjà incorporée.',
      ),
      12 => 
      array (
        'question' => 'Une entreprise doit choisir entre deux projets : A, rendement attendu de 7 % avec risque modéré ; B, rendement attendu de 10 % avec risque très élevé. Quelle approche est la plus cohérente ?',
        'choices' => 
        array (
          0 => 
          array (
            'choice_text' => 'Choisir automatiquement B parce que 10 % est supérieur à 7 %',
            'is_correct' => false,
          ),
          1 => 
          array (
            'choice_text' => 'Choisir automatiquement A parce qu\'il est moins risqué',
            'is_correct' => false,
          ),
          2 => 
          array (
            'choice_text' => 'Ignorer complètement le coût du capital',
            'is_correct' => false,
          ),
          3 => 
          array (
            'choice_text' => 'Comparer les rendements attendus aux risques et au rendement exigé pour chaque projet',
            'is_correct' => true,
          ),
        ),
        'explanation' => 'La décision doit mettre en regard la rémunération attendue et le risque. Un rendement supérieur n\'est pas automatiquement meilleur si le risque supplémentaire exige une compensation encore plus importante.',
      ),
    ),
  ),
);

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