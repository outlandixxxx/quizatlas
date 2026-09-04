<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux financiers — Introduction à la finance',
                'questions' => [
                    ['question' => 'Quel est l’objectif principal de la finance ?', 'explanation' => 'La finance concerne la gestion de l’argent, des investissements, du financement et des décisions financières.', 'choices' => [
                        ['choice_text' => 'Gérer l’argent, les investissements, le financement et les décisions financières', 'is_correct' => true],
                        ['choice_text' => 'Gérer uniquement les ressources humaines', 'is_correct' => false],
                        ['choice_text' => 'Gérer uniquement les stocks physiques', 'is_correct' => false],
                        ['choice_text' => 'Créer uniquement des logiciels comptables', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un investissement ?', 'explanation' => 'Un investissement consiste à engager une ressource aujourd’hui dans l’espoir d’obtenir un bénéfice futur.', 'choices' => [
                        ['choice_text' => 'Engager une ressource dans l’espoir d’un bénéfice futur', 'is_correct' => true],
                        ['choice_text' => 'Dépenser de l’argent sans objectif futur', 'is_correct' => false],
                        ['choice_text' => 'Rembourser automatiquement une dette', 'is_correct' => false],
                        ['choice_text' => 'Enregistrer une facture uniquement', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un actif financier ?', 'explanation' => 'Un actif financier représente généralement un droit ou une créance ayant une valeur économique.', 'choices' => [
                        ['choice_text' => 'Un droit ou une créance ayant une valeur économique', 'is_correct' => true],
                        ['choice_text' => 'Une machine industrielle uniquement', 'is_correct' => false],
                        ['choice_text' => 'Une dépense administrative', 'is_correct' => false],
                        ['choice_text' => 'Une obligation fiscale uniquement', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un actionnaire ?', 'explanation' => 'Un actionnaire détient une participation dans une entreprise sous forme d’actions.', 'choices' => [
                        ['choice_text' => 'Une personne ou une organisation qui détient des actions d’une entreprise', 'is_correct' => true],
                        ['choice_text' => 'Une personne qui travaille obligatoirement dans l’entreprise', 'is_correct' => false],
                        ['choice_text' => 'Un client de la banque', 'is_correct' => false],
                        ['choice_text' => 'Un fournisseur de l’entreprise', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est le rôle général des marchés financiers ?', 'explanation' => 'Ils permettent notamment de mettre en relation les agents disposant de capitaux et ceux qui recherchent du financement.', 'choices' => [
                        ['choice_text' => 'Faciliter la rencontre entre offreurs et demandeurs de capitaux', 'is_correct' => true],
                        ['choice_text' => 'Fixer tous les salaires des entreprises', 'is_correct' => false],
                        ['choice_text' => 'Remplacer toutes les banques', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les risques économiques', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que le rendement d’un investissement ?', 'explanation' => 'Le rendement mesure le gain ou la perte généré par un investissement sur une période donnée.', 'choices' => [
                        ['choice_text' => 'Le gain ou la perte généré par un investissement', 'is_correct' => true],
                        ['choice_text' => 'Le montant initial investi uniquement', 'is_correct' => false],
                        ['choice_text' => 'La dette totale d’une entreprise', 'is_correct' => false],
                        ['choice_text' => 'Le chiffre d’affaires d’une banque', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un risque financier ?', 'explanation' => 'Le risque financier correspond à l’incertitude concernant un résultat ou une perte financière future.', 'choices' => [
                        ['choice_text' => 'L’incertitude concernant les résultats financiers futurs', 'is_correct' => true],
                        ['choice_text' => 'Un bénéfice garanti', 'is_correct' => false],
                        ['choice_text' => 'Une facture déjà payée', 'is_correct' => false],
                        ['choice_text' => 'Une donnée comptable fixe', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi l’argent disponible aujourd’hui a-t-il généralement plus de valeur que le même montant reçu plus tard ?', 'explanation' => 'L’argent disponible aujourd’hui peut être utilisé ou investi immédiatement.', 'choices' => [
                        ['choice_text' => 'Parce qu’il peut être utilisé ou investi immédiatement', 'is_correct' => true],
                        ['choice_text' => 'Parce que l’argent futur est toujours sans valeur', 'is_correct' => false],
                        ['choice_text' => 'Parce que les taux d’intérêt sont toujours nuls', 'is_correct' => false],
                        ['choice_text' => 'Parce que la valeur de l’argent ne dépend jamais du temps', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est le rôle général d’une banque commerciale ?', 'explanation' => 'Une banque commerciale accepte notamment des dépôts et accorde des crédits.', 'choices' => [
                        ['choice_text' => 'Accepter des dépôts et accorder des crédits', 'is_correct' => true],
                        ['choice_text' => 'Produire des biens industriels', 'is_correct' => false],
                        ['choice_text' => 'Fixer les prix de toutes les actions', 'is_correct' => false],
                        ['choice_text' => 'Émettre toutes les monnaies du monde', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une entreprise doit-elle suivre ses décisions financières ?', 'explanation' => 'Le suivi permet d’évaluer les résultats et d’améliorer les décisions futures.', 'choices' => [
                        ['choice_text' => 'Pour mesurer les résultats et améliorer les décisions futures', 'is_correct' => true],
                        ['choice_text' => 'Pour supprimer toute incertitude', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter tout investissement', 'is_correct' => false],
                        ['choice_text' => 'Pour éliminer toutes les dépenses', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Revenus, dépenses et bénéfices',
                'questions' => [
                    ['question' => 'Comment calcule-t-on généralement le bénéfice ?', 'explanation' => 'Le bénéfice correspond généralement aux revenus diminués des dépenses.', 'choices' => [
                        ['choice_text' => 'Revenus moins dépenses', 'is_correct' => true],
                        ['choice_text' => 'Dépenses moins revenus', 'is_correct' => false],
                        ['choice_text' => 'Actifs moins passifs', 'is_correct' => false],
                        ['choice_text' => 'Trésorerie plus dettes', 'is_correct' => false],
                    ]],
                    ['question' => 'Si les revenus sont de 12 000 € et les dépenses de 9 000 €, quel est le bénéfice ?', 'explanation' => '12 000 € moins 9 000 € donnent un bénéfice de 3 000 €.', 'choices' => [
                        ['choice_text' => '3 000 €', 'is_correct' => true],
                        ['choice_text' => '9 000 €', 'is_correct' => false],
                        ['choice_text' => '12 000 €', 'is_correct' => false],
                        ['choice_text' => '21 000 €', 'is_correct' => false],
                    ]],
                    ['question' => 'Que se passe-t-il lorsque les dépenses dépassent les revenus ?', 'explanation' => 'Lorsque les dépenses sont supérieures aux revenus, l’entreprise subit une perte.', 'choices' => [
                        ['choice_text' => 'L’entreprise enregistre une perte', 'is_correct' => true],
                        ['choice_text' => 'L’entreprise enregistre automatiquement un bénéfice', 'is_correct' => false],
                        ['choice_text' => 'Les actifs deviennent des revenus', 'is_correct' => false],
                        ['choice_text' => 'Les revenus deviennent nuls', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’une dépense ?', 'explanation' => 'Une dépense représente un coût engagé dans le fonctionnement d’une organisation.', 'choices' => [
                        ['choice_text' => 'Un coût engagé dans le fonctionnement ou l’activité', 'is_correct' => true],
                        ['choice_text' => 'Un apport des actionnaires', 'is_correct' => false],
                        ['choice_text' => 'Une créance client', 'is_correct' => false],
                        ['choice_text' => 'Un actif financier', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi contrôler les dépenses ?', 'explanation' => 'Le contrôle des dépenses contribue à préserver la rentabilité et la santé financière.', 'choices' => [
                        ['choice_text' => 'Pour maîtriser les coûts et préserver la rentabilité', 'is_correct' => true],
                        ['choice_text' => 'Pour empêcher toute croissance', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer tous les investissements', 'is_correct' => false],
                        ['choice_text' => 'Pour augmenter automatiquement les revenus', 'is_correct' => false],
                    ]],
                    ['question' => 'Quelle est la différence générale entre revenu et bénéfice ?', 'explanation' => 'Le revenu représente les entrées issues de l’activité, tandis que le bénéfice tient compte des dépenses.', 'choices' => [
                        ['choice_text' => 'Le bénéfice tient compte des dépenses alors que le revenu représente les produits générés', 'is_correct' => true],
                        ['choice_text' => 'Le revenu est toujours inférieur au bénéfice', 'is_correct' => false],
                        ['choice_text' => 'Le bénéfice représente uniquement les ventes', 'is_correct' => false],
                        ['choice_text' => 'Les deux termes sont toujours parfaitement identiques', 'is_correct' => false],
                    ]],
                    ['question' => 'Une entreprise augmente son chiffre d’affaires mais ses coûts augmentent encore plus vite. Quel risque apparaît ?', 'explanation' => 'Une hausse des revenus ne garantit pas une hausse de la rentabilité.', 'choices' => [
                        ['choice_text' => 'Une baisse de la marge et de la rentabilité', 'is_correct' => true],
                        ['choice_text' => 'Une suppression automatique de la dette', 'is_correct' => false],
                        ['choice_text' => 'Une hausse automatique de la trésorerie', 'is_correct' => false],
                        ['choice_text' => 'Une disparition des dépenses', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une entreprise peut-elle avoir des revenus élevés sans être rentable ?', 'explanation' => 'Des dépenses élevées peuvent absorber une grande partie des revenus.', 'choices' => [
                        ['choice_text' => 'Parce que les dépenses peuvent être suffisamment élevées pour réduire ou éliminer le bénéfice', 'is_correct' => true],
                        ['choice_text' => 'Parce que les revenus ne sont jamais comptabilisés', 'is_correct' => false],
                        ['choice_text' => 'Parce que les bénéfices ne dépendent pas des dépenses', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’une entreprise rentable ne réalise jamais de ventes', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’une marge bénéficiaire ?', 'explanation' => 'La marge bénéficiaire exprime le bénéfice par rapport aux revenus.', 'choices' => [
                        ['choice_text' => 'Une mesure du bénéfice rapporté aux revenus', 'is_correct' => true],
                        ['choice_text' => 'Le montant total des actifs', 'is_correct' => false],
                        ['choice_text' => 'Le montant total des dettes', 'is_correct' => false],
                        ['choice_text' => 'Le nombre d’actions émises', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi comparer les dépenses sur plusieurs périodes ?', 'explanation' => 'Une analyse temporelle permet d’identifier les tendances et les dérives de coûts.', 'choices' => [
                        ['choice_text' => 'Pour détecter les tendances et les évolutions des coûts', 'is_correct' => true],
                        ['choice_text' => 'Pour garantir que les dépenses diminuent toujours', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les budgets', 'is_correct' => false],
                        ['choice_text' => 'Pour rendre les revenus fixes', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Actifs, passifs et capitaux propres',
                'questions' => [
                    ['question' => 'Qu’est-ce qu’un actif ?', 'explanation' => 'Un actif est une ressource économique contrôlée par l’entité.', 'choices' => [
                        ['choice_text' => 'Une ressource ayant une valeur économique contrôlée par l’entité', 'is_correct' => true],
                        ['choice_text' => 'Une dette envers une banque', 'is_correct' => false],
                        ['choice_text' => 'Une charge de fonctionnement', 'is_correct' => false],
                        ['choice_text' => 'Un impôt payé', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un passif ?', 'explanation' => 'Un passif représente une obligation envers une autre partie.', 'choices' => [
                        ['choice_text' => 'Une obligation financière envers une autre partie', 'is_correct' => true],
                        ['choice_text' => 'Une ressource détenue par l’entreprise', 'is_correct' => false],
                        ['choice_text' => 'Un revenu commercial', 'is_correct' => false],
                        ['choice_text' => 'Une vente au comptant', 'is_correct' => false],
                    ]],
                    ['question' => 'Que représentent les capitaux propres ?', 'explanation' => 'Ils représentent l’intérêt résiduel des propriétaires dans les actifs après déduction des passifs.', 'choices' => [
                        ['choice_text' => 'L’intérêt résiduel des propriétaires dans l’entreprise', 'is_correct' => true],
                        ['choice_text' => 'Toutes les dettes de l’entreprise', 'is_correct' => false],
                        ['choice_text' => 'Uniquement la trésorerie disponible', 'is_correct' => false],
                        ['choice_text' => 'Uniquement les revenus annuels', 'is_correct' => false],
                    ]],
                    ['question' => 'Quelle équation est fondamentale en comptabilité ?', 'explanation' => 'L’équation comptable fondamentale est Actifs = Passifs + Capitaux propres.', 'choices' => [
                        ['choice_text' => 'Actifs = Passifs + Capitaux propres', 'is_correct' => true],
                        ['choice_text' => 'Actifs = Revenus - Dépenses', 'is_correct' => false],
                        ['choice_text' => 'Capitaux propres = Actifs + Passifs', 'is_correct' => false],
                        ['choice_text' => 'Passifs = Revenus + Actifs', 'is_correct' => false],
                    ]],
                    ['question' => 'Lequel est un exemple d’actif ?', 'explanation' => 'La trésorerie est une ressource économique contrôlée par l’entreprise.', 'choices' => [
                        ['choice_text' => 'La trésorerie', 'is_correct' => true],
                        ['choice_text' => 'Un emprunt bancaire', 'is_correct' => false],
                        ['choice_text' => 'Une dette fournisseur', 'is_correct' => false],
                        ['choice_text' => 'Une charge d’intérêt', 'is_correct' => false],
                    ]],
                    ['question' => 'Lequel est un exemple de passif ?', 'explanation' => 'Un emprunt représente une obligation de remboursement.', 'choices' => [
                        ['choice_text' => 'Un emprunt bancaire', 'is_correct' => true],
                        ['choice_text' => 'La caisse', 'is_correct' => false],
                        ['choice_text' => 'Les stocks', 'is_correct' => false],
                        ['choice_text' => 'Une créance client', 'is_correct' => false],
                    ]],
                    ['question' => 'Si les actifs valent 100 000 € et les passifs 40 000 €, quels sont les capitaux propres ?', 'explanation' => 'Capitaux propres = 100 000 € - 40 000 € = 60 000 €.', 'choices' => [
                        ['choice_text' => '60 000 €', 'is_correct' => true],
                        ['choice_text' => '40 000 €', 'is_correct' => false],
                        ['choice_text' => '100 000 €', 'is_correct' => false],
                        ['choice_text' => '140 000 €', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi un actif n’est-il pas nécessairement de la trésorerie ?', 'explanation' => 'Les actifs comprennent aussi les stocks, immobilisations, créances et autres ressources économiques.', 'choices' => [
                        ['choice_text' => 'Parce que les actifs comprennent plusieurs types de ressources économiques', 'is_correct' => true],
                        ['choice_text' => 'Parce que la trésorerie est toujours un passif', 'is_correct' => false],
                        ['choice_text' => 'Parce que les actifs sont toujours des dettes', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’une entreprise ne peut pas posséder de liquidités', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi les capitaux propres peuvent-ils augmenter ?', 'explanation' => 'Ils peuvent notamment augmenter grâce aux bénéfices conservés ou à de nouveaux apports des propriétaires.', 'choices' => [
                        ['choice_text' => 'Grâce notamment aux bénéfices conservés ou aux nouveaux apports', 'is_correct' => true],
                        ['choice_text' => 'Uniquement lorsque les dettes augmentent', 'is_correct' => false],
                        ['choice_text' => 'Uniquement lorsque les dépenses augmentent', 'is_correct' => false],
                        ['choice_text' => 'Seulement lorsque les actifs diminuent', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi analyser la structure des actifs et des passifs ?', 'explanation' => 'Cela aide à comprendre la situation financière et les obligations de l’entreprise.', 'choices' => [
                        ['choice_text' => 'Pour évaluer les ressources détenues et les obligations à honorer', 'is_correct' => true],
                        ['choice_text' => 'Pour connaître uniquement le chiffre d’affaires', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer le compte de résultat', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les investissements', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Valeur temporelle de l’argent',
                'questions' => [
                    ['question' => 'Que signifie la valeur temporelle de l’argent ?', 'explanation' => 'Un montant disponible aujourd’hui peut produire un rendement avant qu’un même montant futur soit reçu.', 'choices' => [
                        ['choice_text' => 'Un montant disponible aujourd’hui peut produire un rendement avant une réception future', 'is_correct' => true],
                        ['choice_text' => 'L’argent futur vaut toujours plus que l’argent présent', 'is_correct' => false],
                        ['choice_text' => 'Le temps n’a aucun effet financier', 'is_correct' => false],
                        ['choice_text' => 'Les intérêts n’ont aucun rôle', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que la valeur actuelle ?', 'explanation' => 'La valeur actuelle exprime aujourd’hui la valeur d’un montant futur.', 'choices' => [
                        ['choice_text' => 'La valeur aujourd’hui d’un montant futur', 'is_correct' => true],
                        ['choice_text' => 'La valeur d’un actif uniquement à sa maturité', 'is_correct' => false],
                        ['choice_text' => 'Le chiffre d’affaires annuel', 'is_correct' => false],
                        ['choice_text' => 'La valeur totale des dépenses', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que la valeur future ?', 'explanation' => 'La valeur future mesure combien un montant actuel peut devenir après accumulation d’un rendement.', 'choices' => [
                        ['choice_text' => 'La valeur qu’un montant actuel peut atteindre dans le futur', 'is_correct' => true],
                        ['choice_text' => 'La valeur comptable historique', 'is_correct' => false],
                        ['choice_text' => 'Le montant des dettes uniquement', 'is_correct' => false],
                        ['choice_text' => 'Le montant des dépenses futures certaines', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel effet a généralement une hausse du taux d’actualisation sur la valeur actuelle d’un flux futur ?', 'explanation' => 'Un taux d’actualisation plus élevé réduit généralement la valeur actuelle.', 'choices' => [
                        ['choice_text' => 'La valeur actuelle diminue généralement', 'is_correct' => true],
                        ['choice_text' => 'La valeur actuelle augmente toujours', 'is_correct' => false],
                        ['choice_text' => 'La valeur actuelle devient nulle automatiquement', 'is_correct' => false],
                        ['choice_text' => 'Le temps n’a plus d’importance', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que la capitalisation ?', 'explanation' => 'La capitalisation permet aux intérêts accumulés de produire eux-mêmes des intérêts.', 'choices' => [
                        ['choice_text' => 'Le fait que les intérêts accumulés produisent à leur tour des intérêts', 'is_correct' => true],
                        ['choice_text' => 'Le remboursement immédiat du principal', 'is_correct' => false],
                        ['choice_text' => 'La suppression des intérêts', 'is_correct' => false],
                        ['choice_text' => 'La réduction automatique de la durée d’un prêt', 'is_correct' => false],
                    ]],
                    ['question' => 'Si 1 000 € sont placés à intérêt simple de 5 % pendant un an, quel intérêt est généré ?', 'explanation' => '1 000 × 5 % = 50 €.', 'choices' => [
                        ['choice_text' => '50 €', 'is_correct' => true],
                        ['choice_text' => '5 €', 'is_correct' => false],
                        ['choice_text' => '100 €', 'is_correct' => false],
                        ['choice_text' => '1 050 €', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi deux investissements avec le même montant final peuvent-ils avoir des valeurs différentes aujourd’hui ?', 'explanation' => 'Leur échéance et le taux utilisé pour actualiser les flux peuvent différer.', 'choices' => [
                        ['choice_text' => 'Le calendrier des flux et le taux d’actualisation peuvent être différents', 'is_correct' => true],
                        ['choice_text' => 'La valeur actuelle ne dépend jamais du temps', 'is_correct' => false],
                        ['choice_text' => 'Les montants futurs sont toujours identiques en valeur actuelle', 'is_correct' => false],
                        ['choice_text' => 'L’intérêt ne joue aucun rôle', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi reçoit-on généralement moins en valeur actuelle pour un montant identique reçu beaucoup plus tard ?', 'explanation' => 'Le temps et le coût d’opportunité réduisent la valeur actuelle du flux.', 'choices' => [
                        ['choice_text' => 'Parce que le délai prive l’investisseur de l’utilisation ou du rendement de l’argent pendant cette période', 'is_correct' => true],
                        ['choice_text' => 'Parce que les montants futurs sont toujours plus petits', 'is_correct' => false],
                        ['choice_text' => 'Parce que les banques réduisent toujours les futurs paiements', 'is_correct' => false],
                        ['choice_text' => 'Parce que le capital disparaît avec le temps', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel facteur augmente généralement la valeur future d’un placement ?', 'explanation' => 'Un taux de rendement plus élevé augmente la valeur future, toutes choses égales par ailleurs.', 'choices' => [
                        ['choice_text' => 'Un taux de rendement plus élevé', 'is_correct' => true],
                        ['choice_text' => 'Un rendement toujours égal à zéro', 'is_correct' => false],
                        ['choice_text' => 'Une réduction de la durée à zéro', 'is_correct' => false],
                        ['choice_text' => 'Une diminution du capital investi', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi le moment des encaissements est-il important en finance ?', 'explanation' => 'Un encaissement plus précoce peut être réinvesti ou utilisé plus tôt.', 'choices' => [
                        ['choice_text' => 'Parce qu’un encaissement plus précoce peut être utilisé ou investi plus tôt', 'is_correct' => true],
                        ['choice_text' => 'Parce que le temps n’influence jamais la valeur', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’un paiement tardif est toujours plus rentable', 'is_correct' => false],
                        ['choice_text' => 'Parce que les flux futurs sont sans valeur', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Risque et rendement',
                'questions' => [
                    ['question' => 'Pourquoi les investisseurs exigent-ils généralement une compensation pour prendre plus de risque ?', 'explanation' => 'Prendre plus d’incertitude peut entraîner des pertes plus importantes.', 'choices' => [
                        ['choice_text' => 'Parce qu’une plus grande incertitude peut entraîner des pertes plus importantes', 'is_correct' => true],
                        ['choice_text' => 'Parce que le risque garantit un gain', 'is_correct' => false],
                        ['choice_text' => 'Parce que tous les placements risqués sont plus rentables', 'is_correct' => false],
                        ['choice_text' => 'Parce que le risque supprime les pertes', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que la diversification ?', 'explanation' => 'La diversification consiste à répartir les investissements afin de limiter la concentration du risque.', 'choices' => [
                        ['choice_text' => 'Répartir les investissements entre plusieurs sources de risque', 'is_correct' => true],
                        ['choice_text' => 'Investir tout son capital dans un seul actif', 'is_correct' => false],
                        ['choice_text' => 'Garantir un rendement fixe', 'is_correct' => false],
                        ['choice_text' => 'Éliminer tout risque financier', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que le risque spécifique ?', 'explanation' => 'Le risque spécifique est lié à une entreprise ou à un actif particulier.', 'choices' => [
                        ['choice_text' => 'Un risque propre à une entreprise ou à un actif particulier', 'is_correct' => true],
                        ['choice_text' => 'Un risque qui touche toute l’économie', 'is_correct' => false],
                        ['choice_text' => 'Un risque sans lien avec les investissements', 'is_correct' => false],
                        ['choice_text' => 'Un rendement garanti', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que le risque systématique ?', 'explanation' => 'Il découle de facteurs qui affectent largement les marchés.', 'choices' => [
                        ['choice_text' => 'Un risque lié à des facteurs affectant largement les marchés', 'is_correct' => true],
                        ['choice_text' => 'Un risque propre à un seul employé', 'is_correct' => false],
                        ['choice_text' => 'Une erreur de calcul isolée', 'is_correct' => false],
                        ['choice_text' => 'Une facture client impayée uniquement', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi un portefeuille diversifié peut-il être moins risqué qu’un investissement unique ?', 'explanation' => 'La baisse d’un actif peut être partiellement compensée par le comportement d’autres actifs.', 'choices' => [
                        ['choice_text' => 'La mauvaise performance d’un actif peut être compensée par d’autres', 'is_correct' => true],
                        ['choice_text' => 'Tous les actifs montent simultanément', 'is_correct' => false],
                        ['choice_text' => 'La diversification garantit un rendement positif', 'is_correct' => false],
                        ['choice_text' => 'Le marché cesse de fluctuer', 'is_correct' => false],
                    ]],
                    ['question' => 'Une obligation offre un rendement fixe contractuel. Quel risque peut néanmoins exister ?', 'explanation' => 'Le risque de défaut existe si l’émetteur n’est pas capable de respecter ses engagements.', 'choices' => [
                        ['choice_text' => 'Le risque de défaut de l’émetteur', 'is_correct' => true],
                        ['choice_text' => 'Aucun risque dans tous les cas', 'is_correct' => false],
                        ['choice_text' => 'Uniquement un risque météorologique', 'is_correct' => false],
                        ['choice_text' => 'Uniquement un risque informatique', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que la volatilité représente généralement ?', 'explanation' => 'La volatilité mesure l’ampleur des variations d’un prix ou d’un rendement.', 'choices' => [
                        ['choice_text' => 'L’ampleur des variations d’un prix ou d’un rendement', 'is_correct' => true],
                        ['choice_text' => 'Le bénéfice garanti', 'is_correct' => false],
                        ['choice_text' => 'La durée d’un prêt', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de propriétaires', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi un placement avec un rendement attendu plus élevé peut-il être moins adapté à certains investisseurs ?', 'explanation' => 'Il peut dépasser leur tolérance au risque ou leurs besoins de liquidité.', 'choices' => [
                        ['choice_text' => 'Il peut présenter trop de risque par rapport à leurs objectifs', 'is_correct' => true],
                        ['choice_text' => 'Un rendement élevé est toujours mauvais', 'is_correct' => false],
                        ['choice_text' => 'Les investisseurs ne peuvent jamais choisir selon leurs objectifs', 'is_correct' => false],
                        ['choice_text' => 'La volatilité n’a aucun impact sur l’investisseur', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi la liquidité est-elle importante pour un investisseur ?', 'explanation' => 'Un actif liquide peut généralement être vendu plus facilement.', 'choices' => [
                        ['choice_text' => 'Elle facilite la conversion de l’actif en liquidités', 'is_correct' => true],
                        ['choice_text' => 'Elle garantit un rendement élevé', 'is_correct' => false],
                        ['choice_text' => 'Elle supprime le risque de marché', 'is_correct' => false],
                        ['choice_text' => 'Elle empêche les variations de prix', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel principe résume le mieux la relation risque-rendement ?', 'explanation' => 'Un rendement attendu plus élevé est généralement associé à une plus grande incertitude.', 'choices' => [
                        ['choice_text' => 'Un rendement attendu plus élevé s’accompagne généralement d’un niveau de risque plus élevé', 'is_correct' => true],
                        ['choice_text' => 'Le rendement et le risque sont toujours opposés', 'is_correct' => false],
                        ['choice_text' => 'Le risque garantit le rendement', 'is_correct' => false],
                        ['choice_text' => 'Tous les investissements ont le même risque', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Institutions financières',
                'questions' => [
                    ['question' => 'Quel est le rôle principal d’une banque commerciale ?', 'explanation' => 'Elle collecte notamment des dépôts et fournit des crédits.', 'choices' => [
                        ['choice_text' => 'Collecter des dépôts et accorder des crédits', 'is_correct' => true],
                        ['choice_text' => 'Produire des biens industriels', 'is_correct' => false],
                        ['choice_text' => 'Fixer tous les taux de change', 'is_correct' => false],
                        ['choice_text' => 'Gérer uniquement les assurances', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est le rôle d’une compagnie d’assurance ?', 'explanation' => 'L’assurance permet de transférer certains risques en échange de primes.', 'choices' => [
                        ['choice_text' => 'Couvrir certains risques en échange de primes', 'is_correct' => true],
                        ['choice_text' => 'Garantir tous les investissements', 'is_correct' => false],
                        ['choice_text' => 'Créer toutes les actions cotées', 'is_correct' => false],
                        ['choice_text' => 'Fixer les salaires nationaux', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’une banque centrale ?', 'explanation' => 'Une banque centrale intervient notamment dans la politique monétaire et la stabilité financière.', 'choices' => [
                        ['choice_text' => 'Une institution responsable notamment de la politique monétaire', 'is_correct' => true],
                        ['choice_text' => 'Une banque commerciale destinée uniquement aux particuliers', 'is_correct' => false],
                        ['choice_text' => 'Une compagnie d’assurance', 'is_correct' => false],
                        ['choice_text' => 'Une entreprise industrielle', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est le rôle d’une bourse de valeurs ?', 'explanation' => 'Une bourse permet la négociation organisée de titres financiers.', 'choices' => [
                        ['choice_text' => 'Permettre la négociation organisée de titres financiers', 'is_correct' => true],
                        ['choice_text' => 'Accorder directement tous les prêts aux ménages', 'is_correct' => false],
                        ['choice_text' => 'Produire des biens de consommation', 'is_correct' => false],
                        ['choice_text' => 'Fixer les impôts des entreprises', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi les intermédiaires financiers sont-ils importants ?', 'explanation' => 'Ils facilitent la circulation de l’épargne vers les besoins de financement et offrent divers services.', 'choices' => [
                        ['choice_text' => 'Ils facilitent la rencontre entre épargne et besoins de financement', 'is_correct' => true],
                        ['choice_text' => 'Ils suppriment tous les risques économiques', 'is_correct' => false],
                        ['choice_text' => 'Ils remplacent toutes les entreprises', 'is_correct' => false],
                        ['choice_text' => 'Ils garantissent tous les rendements', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une banque prête-t-elle généralement à un taux supérieur à celui qu’elle verse sur certains dépôts ?', 'explanation' => 'La différence entre les taux contribue notamment à couvrir les coûts, risques et charges de l’intermédiation.', 'choices' => [
                        ['choice_text' => 'La différence contribue notamment à couvrir coûts et risques d’intermédiation', 'is_correct' => true],
                        ['choice_text' => 'Les dépôts ne coûtent jamais rien', 'is_correct' => false],
                        ['choice_text' => 'Les banques ne prennent jamais de risque', 'is_correct' => false],
                        ['choice_text' => 'Les taux de prêt sont toujours inférieurs aux taux de dépôt', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi les compagnies d’assurance utilisent-elles des primes ?', 'explanation' => 'Les primes financent la couverture des risques transférés à l’assureur.', 'choices' => [
                        ['choice_text' => 'Elles servent notamment à financer la couverture des risques assurés', 'is_correct' => true],
                        ['choice_text' => 'Elles représentent uniquement des bénéfices garantis', 'is_correct' => false],
                        ['choice_text' => 'Elles sont versées uniquement aux actionnaires', 'is_correct' => false],
                        ['choice_text' => 'Elles remplacent toutes les réserves', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un intermédiaire financier ?', 'explanation' => 'C’est une institution qui facilite la circulation des capitaux entre épargnants et emprunteurs.', 'choices' => [
                        ['choice_text' => 'Une institution facilitant la circulation des capitaux entre agents', 'is_correct' => true],
                        ['choice_text' => 'Une entreprise qui fabrique des machines', 'is_correct' => false],
                        ['choice_text' => 'Une administration fiscale', 'is_correct' => false],
                        ['choice_text' => 'Un consommateur final', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi les marchés de capitaux peuvent-ils être utiles aux entreprises ?', 'explanation' => 'Ils offrent des possibilités de financement par émission de titres.', 'choices' => [
                        ['choice_text' => 'Ils offrent des possibilités de financement par émission de titres', 'is_correct' => true],
                        ['choice_text' => 'Ils remplacent automatiquement toutes les banques', 'is_correct' => false],
                        ['choice_text' => 'Ils suppriment toutes les obligations financières', 'is_correct' => false],
                        ['choice_text' => 'Ils garantissent les profits des entreprises', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi la stabilité financière est-elle importante ?', 'explanation' => 'Une bonne stabilité financière facilite le fonctionnement des paiements, du crédit et de l’investissement.', 'choices' => [
                        ['choice_text' => 'Elle favorise le bon fonctionnement du crédit, des paiements et de l’investissement', 'is_correct' => true],
                        ['choice_text' => 'Elle supprime toutes les crises économiques', 'is_correct' => false],
                        ['choice_text' => 'Elle garantit tous les rendements', 'is_correct' => false],
                        ['choice_text' => 'Elle empêche les entreprises de faire faillite', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Ratios financiers de base',
                'questions' => [
                    ['question' => 'Que mesure généralement un ratio de liquidité ?', 'explanation' => 'Il permet d’évaluer la capacité à faire face aux obligations à court terme.', 'choices' => [
                        ['choice_text' => 'La capacité à faire face aux obligations à court terme', 'is_correct' => true],
                        ['choice_text' => 'La qualité des produits vendus', 'is_correct' => false],
                        ['choice_text' => 'La valeur de la marque uniquement', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de salariés', 'is_correct' => false],
                    ]],
                    ['question' => 'Que mesure généralement un ratio de rentabilité ?', 'explanation' => 'Il évalue la capacité à générer un bénéfice par rapport à une base financière.', 'choices' => [
                        ['choice_text' => 'La capacité à générer un bénéfice par rapport à une base donnée', 'is_correct' => true],
                        ['choice_text' => 'Le nombre de fournisseurs', 'is_correct' => false],
                        ['choice_text' => 'La durée des contrats', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de produits', 'is_correct' => false],
                    ]],
                    ['question' => 'Que mesure un ratio d’endettement ?', 'explanation' => 'Il aide à évaluer le recours de l’entreprise à l’endettement.', 'choices' => [
                        ['choice_text' => 'Le niveau de recours à la dette', 'is_correct' => true],
                        ['choice_text' => 'Le nombre de ventes quotidiennes', 'is_correct' => false],
                        ['choice_text' => 'La taille du stock', 'is_correct' => false],
                        ['choice_text' => 'La productivité des employés', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi utiliser des ratios financiers ?', 'explanation' => 'Ils rendent plus faciles certaines comparaisons entre périodes ou entreprises.', 'choices' => [
                        ['choice_text' => 'Pour comparer plus facilement des relations entre différentes données financières', 'is_correct' => true],
                        ['choice_text' => 'Pour garantir la rentabilité future', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer tous les états financiers', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer le besoin de contexte', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi comparer un ratio avec les années précédentes ?', 'explanation' => 'La comparaison temporelle permet d’identifier une amélioration ou une dégradation.', 'choices' => [
                        ['choice_text' => 'Pour observer son évolution dans le temps', 'is_correct' => true],
                        ['choice_text' => 'Pour garantir une amélioration future', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter toute analyse qualitative', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi comparer les ratios avec ceux d’entreprises comparables ?', 'explanation' => 'Les références sectorielles fournissent du contexte pour interpréter les résultats.', 'choices' => [
                        ['choice_text' => 'Pour disposer d’une référence pertinente au sein du même environnement économique', 'is_correct' => true],
                        ['choice_text' => 'Pour prouver qu’une entreprise est toujours meilleure', 'is_correct' => false],
                        ['choice_text' => 'Parce que toutes les entreprises doivent avoir exactement les mêmes ratios', 'is_correct' => false],
                        ['choice_text' => 'Pour éliminer les différences sectorielles', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi un ratio élevé n’est-il pas automatiquement positif ?', 'explanation' => 'La signification d’un ratio dépend du contexte et du type de ratio.', 'choices' => [
                        ['choice_text' => 'Son interprétation dépend du contexte et de la structure de l’entreprise', 'is_correct' => true],
                        ['choice_text' => 'Tous les ratios élevés sont négatifs', 'is_correct' => false],
                        ['choice_text' => 'Les ratios n’ont aucun sens', 'is_correct' => false],
                        ['choice_text' => 'Un ratio élevé garantit toujours une forte rentabilité', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une entreprise peut-elle avoir une bonne liquidité mais une faible rentabilité ?', 'explanation' => 'Elle peut disposer de suffisamment de ressources à court terme tout en générant peu de bénéfices.', 'choices' => [
                        ['choice_text' => 'Liquidité et rentabilité mesurent des dimensions financières différentes', 'is_correct' => true],
                        ['choice_text' => 'La liquidité garantit toujours la rentabilité', 'is_correct' => false],
                        ['choice_text' => 'Une entreprise liquide ne peut jamais subir de pertes', 'is_correct' => false],
                        ['choice_text' => 'Les deux indicateurs sont identiques', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi les ratios doivent-ils être calculés à partir de données fiables ?', 'explanation' => 'Des données incorrectes produisent des ratios trompeurs.', 'choices' => [
                        ['choice_text' => 'Des données incorrectes conduisent à des indicateurs trompeurs', 'is_correct' => true],
                        ['choice_text' => 'Les ratios corrigent automatiquement les erreurs de données', 'is_correct' => false],
                        ['choice_text' => 'La qualité des données n’a aucune importance', 'is_correct' => false],
                        ['choice_text' => 'Les ratios sont toujours exacts quelle que soit la source', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi analyser plusieurs ratios ensemble ?', 'explanation' => 'Chaque ratio donne une information partielle et leur combinaison fournit une vision plus complète.', 'choices' => [
                        ['choice_text' => 'Parce qu’un seul ratio ne suffit généralement pas pour comprendre la situation financière', 'is_correct' => true],
                        ['choice_text' => 'Parce que les ratios sont toujours contradictoires', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les états financiers', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’un ratio unique est toujours faux', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Budgets et finances personnelles',
                'questions' => [
                    ['question' => 'Qu’est-ce qu’un budget personnel ?', 'explanation' => 'Un budget organise les revenus prévus et les dépenses prévues sur une période.', 'choices' => [
                        ['choice_text' => 'Un plan des revenus et dépenses sur une période donnée', 'is_correct' => true],
                        ['choice_text' => 'Un relevé bancaire uniquement', 'is_correct' => false],
                        ['choice_text' => 'Un contrat d’assurance', 'is_correct' => false],
                        ['choice_text' => 'Un portefeuille d’actions', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi constituer une épargne de précaution ?', 'explanation' => 'Elle permet de faire face à des dépenses imprévues.', 'choices' => [
                        ['choice_text' => 'Pour faire face à des dépenses imprévues', 'is_correct' => true],
                        ['choice_text' => 'Pour garantir un rendement élevé', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter toute dépense future', 'is_correct' => false],
                        ['choice_text' => 'Pour remplacer toutes les assurances', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi le budget est-il utile ?', 'explanation' => 'Il permet de mieux contrôler les flux financiers et de préparer des objectifs.', 'choices' => [
                        ['choice_text' => 'Pour mieux contrôler les revenus, les dépenses et les objectifs', 'is_correct' => true],
                        ['choice_text' => 'Pour éliminer automatiquement toutes les dépenses', 'is_correct' => false],
                        ['choice_text' => 'Pour garantir un revenu fixe', 'is_correct' => false],
                        ['choice_text' => 'Pour empêcher l’investissement', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un endettement ?', 'explanation' => 'L’endettement correspond aux montants ou obligations financières dus à d’autres parties.', 'choices' => [
                        ['choice_text' => 'Le fait de devoir des montants ou obligations financières à d’autres parties', 'is_correct' => true],
                        ['choice_text' => 'Le revenu d’une activité', 'is_correct' => false],
                        ['choice_text' => 'Un actif liquide', 'is_correct' => false],
                        ['choice_text' => 'Un bénéfice distribué', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une dette à taux élevé peut-elle être dangereuse ?', 'explanation' => 'Les intérêts augmentent le coût total du financement et peuvent alourdir les remboursements.', 'choices' => [
                        ['choice_text' => 'Elle peut augmenter fortement le coût total du remboursement', 'is_correct' => true],
                        ['choice_text' => 'Elle réduit toujours le montant dû', 'is_correct' => false],
                        ['choice_text' => 'Elle garantit un revenu', 'is_correct' => false],
                        ['choice_text' => 'Elle élimine les risques financiers', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi épargner régulièrement ?', 'explanation' => 'Une épargne régulière permet de préparer des objectifs et des imprévus.', 'choices' => [
                        ['choice_text' => 'Pour préparer des projets futurs et renforcer sa sécurité financière', 'is_correct' => true],
                        ['choice_text' => 'Pour supprimer tous les revenus', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter tout investissement', 'is_correct' => false],
                        ['choice_text' => 'Pour garantir un rendement élevé sans risque', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi distinguer besoins et envies dans un budget ?', 'explanation' => 'Cette distinction aide à prioriser les dépenses lorsque les ressources sont limitées.', 'choices' => [
                        ['choice_text' => 'Pour mieux prioriser les dépenses lorsque les ressources sont limitées', 'is_correct' => true],
                        ['choice_text' => 'Pour supprimer toutes les dépenses de loisir', 'is_correct' => false],
                        ['choice_text' => 'Pour augmenter automatiquement le revenu', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter toute planification', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi comparer le coût total de deux crédits ?', 'explanation' => 'Le taux seul peut être insuffisant si les frais, la durée et les modalités diffèrent.', 'choices' => [
                        ['choice_text' => 'Pour comparer réellement le coût du financement et pas seulement le taux affiché', 'is_correct' => true],
                        ['choice_text' => 'Parce que tous les crédits ont exactement le même coût', 'is_correct' => false],
                        ['choice_text' => 'Pour choisir automatiquement le crédit le plus long', 'is_correct' => false],
                        ['choice_text' => 'Pour ignorer les frais', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une épargne de précaution doit-elle rester facilement accessible ?', 'explanation' => 'Elle doit pouvoir être utilisée rapidement lorsque survient un besoin imprévu.', 'choices' => [
                        ['choice_text' => 'Parce qu’elle est destinée à couvrir des besoins imprévus rapidement', 'is_correct' => true],
                        ['choice_text' => 'Parce qu’elle doit toujours être investie dans des actifs illiquides', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’elle doit perdre de la valeur', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’elle remplace un budget', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est un bon principe général pour gérer ses finances personnelles ?', 'explanation' => 'Une bonne gestion combine suivi, épargne, maîtrise de la dette et adaptation aux objectifs.', 'choices' => [
                        ['choice_text' => 'Suivre ses flux, maîtriser sa dette, épargner et planifier ses objectifs', 'is_correct' => true],
                        ['choice_text' => 'Dépenser d’abord et planifier ensuite', 'is_correct' => false],
                        ['choice_text' => 'Éviter toute épargne', 'is_correct' => false],
                        ['choice_text' => 'Utiliser toujours le crédit maximal disponible', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Épargne et investissement',
                'questions' => [
                    ['question' => 'Quelle est la différence générale entre épargne et investissement ?', 'explanation' => 'L’épargne vise souvent la sécurité et la disponibilité, tandis que l’investissement cherche davantage de rendement avec un certain niveau de risque.', 'choices' => [
                        ['choice_text' => 'L’épargne privilégie souvent la sécurité et la disponibilité, tandis que l’investissement recherche un rendement', 'is_correct' => true],
                        ['choice_text' => 'Les deux sont toujours exactement identiques', 'is_correct' => false],
                        ['choice_text' => 'L’investissement ne comporte jamais de risque', 'is_correct' => false],
                        ['choice_text' => 'L’épargne garantit toujours le meilleur rendement', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi un investisseur doit-il connaître son horizon de placement ?', 'explanation' => 'L’horizon influence les actifs adaptés et le risque qu’un investisseur peut supporter.', 'choices' => [
                        ['choice_text' => 'Parce qu’il influence le niveau de risque et les actifs adaptés', 'is_correct' => true],
                        ['choice_text' => 'Parce qu’il détermine uniquement les frais bancaires', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’il garantit le rendement', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’un horizon long supprime tout risque', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi un investisseur ne devrait-il pas choisir un actif uniquement en fonction de son rendement passé ?', 'explanation' => 'Les performances passées ne garantissent pas les performances futures.', 'choices' => [
                        ['choice_text' => 'Parce que les performances passées ne garantissent pas les performances futures', 'is_correct' => true],
                        ['choice_text' => 'Parce que les rendements passés sont toujours faux', 'is_correct' => false],
                        ['choice_text' => 'Parce que le rendement passé n’a aucune utilité analytique', 'is_correct' => false],
                        ['choice_text' => 'Parce que tous les investissements ont la même performance', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi répartir un investissement sur plusieurs actifs ?', 'explanation' => 'La répartition peut réduire le risque lié à un actif ou à une entreprise particulière.', 'choices' => [
                        ['choice_text' => 'Pour réduire la concentration du risque', 'is_correct' => true],
                        ['choice_text' => 'Pour garantir une hausse des marchés', 'is_correct' => false],
                        ['choice_text' => 'Pour éliminer tout risque', 'is_correct' => false],
                        ['choice_text' => 'Pour augmenter automatiquement les frais', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi les liquidités sont-elles utiles dans une stratégie financière ?', 'explanation' => 'Elles permettent de répondre rapidement à certains besoins et opportunités.', 'choices' => [
                        ['choice_text' => 'Elles permettent de répondre rapidement à certains besoins ou opportunités', 'is_correct' => true],
                        ['choice_text' => 'Elles garantissent toujours un rendement élevé', 'is_correct' => false],
                        ['choice_text' => 'Elles éliminent le risque d’inflation', 'is_correct' => false],
                        ['choice_text' => 'Elles remplacent tous les investissements', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi l’inflation est-elle importante pour l’épargne ?', 'explanation' => 'Une inflation élevée peut réduire le pouvoir d’achat réel de l’épargne.', 'choices' => [
                        ['choice_text' => 'Elle peut réduire le pouvoir d’achat réel de l’argent épargné', 'is_correct' => true],
                        ['choice_text' => 'Elle augmente toujours automatiquement la richesse réelle', 'is_correct' => false],
                        ['choice_text' => 'Elle n’a aucun impact sur les montants monétaires', 'is_correct' => false],
                        ['choice_text' => 'Elle garantit un rendement réel positif', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’un rendement réel ?', 'explanation' => 'Le rendement réel tient compte du rendement nominal et de l’effet de l’inflation.', 'choices' => [
                        ['choice_text' => 'Un rendement tenant compte de l’effet de l’inflation', 'is_correct' => true],
                        ['choice_text' => 'Le rendement avant toute variation de prix', 'is_correct' => false],
                        ['choice_text' => 'Le rendement uniquement comptable', 'is_correct' => false],
                        ['choice_text' => 'Le montant initial investi', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi faut-il comprendre les frais avant d’investir ?', 'explanation' => 'Les frais réduisent le rendement net obtenu par l’investisseur.', 'choices' => [
                        ['choice_text' => 'Parce que les frais réduisent le rendement net', 'is_correct' => true],
                        ['choice_text' => 'Parce que les frais garantissent un meilleur rendement', 'is_correct' => false],
                        ['choice_text' => 'Parce que les frais n’ont aucune influence', 'is_correct' => false],
                        ['choice_text' => 'Parce que les investissements sans frais sont toujours risqués', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi un investissement doit-il être cohérent avec le profil de l’investisseur ?', 'explanation' => 'Les objectifs, la capacité à prendre des risques et les besoins de liquidité diffèrent selon les personnes.', 'choices' => [
                        ['choice_text' => 'Parce que les objectifs, le risque acceptable et les besoins de liquidité diffèrent', 'is_correct' => true],
                        ['choice_text' => 'Parce que tous les investisseurs ont le même profil', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’un actif rentable convient toujours à tout le monde', 'is_correct' => false],
                        ['choice_text' => 'Parce que le profil n’a aucune influence sur le choix d’actifs', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est le principe général d’une stratégie financière équilibrée ?', 'explanation' => 'Elle doit concilier objectifs, sécurité, liquidité, rendement et risque.', 'choices' => [
                        ['choice_text' => 'Équilibrer objectifs, liquidité, rendement et niveau de risque acceptable', 'is_correct' => true],
                        ['choice_text' => 'Maximiser le risque', 'is_correct' => false],
                        ['choice_text' => 'Éviter toute liquidité', 'is_correct' => false],
                        ['choice_text' => 'Choisir uniquement les actifs les plus rentables historiquement', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Sources de financement',
                'questions' => [
                    ['question' => 'Qu’est-ce que le financement par capitaux propres ?', 'explanation' => 'Il consiste à obtenir des ressources en échange d’une participation dans l’entreprise.', 'choices' => [
                        ['choice_text' => 'Obtenir des ressources en échange d’une participation dans l’entreprise', 'is_correct' => true],
                        ['choice_text' => 'Obtenir uniquement un prêt bancaire', 'is_correct' => false],
                        ['choice_text' => 'Réduire les stocks', 'is_correct' => false],
                        ['choice_text' => 'Collecter les créances clients', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est un inconvénient du financement par dette ?', 'explanation' => 'La dette crée des obligations de remboursement et de paiement d’intérêts.', 'choices' => [
                        ['choice_text' => 'Elle crée des obligations de remboursement et d’intérêts', 'is_correct' => true],
                        ['choice_text' => 'Elle ne coûte jamais rien', 'is_correct' => false],
                        ['choice_text' => 'Elle dilue toujours immédiatement la propriété', 'is_correct' => false],
                        ['choice_text' => 'Elle supprime tous les risques', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est un avantage possible du financement par capitaux propres ?', 'explanation' => 'Il n’impose généralement pas les mêmes remboursements fixes qu’une dette.', 'choices' => [
                        ['choice_text' => 'Il n’impose généralement pas de remboursement fixe du principal', 'is_correct' => true],
                        ['choice_text' => 'Il ne comporte aucun risque pour les investisseurs', 'is_correct' => false],
                        ['choice_text' => 'Il garantit toujours un coût inférieur à la dette', 'is_correct' => false],
                        ['choice_text' => 'Il supprime les pertes', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une entreprise combine-t-elle parfois dette et capitaux propres ?', 'explanation' => 'Une combinaison peut permettre d’équilibrer coût du financement, risque et dilution.', 'choices' => [
                        ['choice_text' => 'Pour équilibrer coût du financement, risque et structure de propriété', 'is_correct' => true],
                        ['choice_text' => 'Parce qu’une seule source est toujours interdite', 'is_correct' => false],
                        ['choice_text' => 'Pour éliminer la nécessité de générer des revenus', 'is_correct' => false],
                        ['choice_text' => 'Pour garantir les bénéfices futurs', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce que la dilution ?', 'explanation' => 'La dilution correspond généralement à la réduction de la part relative des actionnaires existants lorsqu’un nouveau capital est émis.', 'choices' => [
                        ['choice_text' => 'La réduction de la part relative des actionnaires existants après une nouvelle émission d’actions', 'is_correct' => true],
                        ['choice_text' => 'La réduction automatique de la dette', 'is_correct' => false],
                        ['choice_text' => 'La baisse du chiffre d’affaires', 'is_correct' => false],
                        ['choice_text' => 'La diminution des dépenses', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi comparer plusieurs sources de financement ?', 'explanation' => 'Chaque solution possède ses propres coûts, contraintes et risques.', 'choices' => [
                        ['choice_text' => 'Parce que les différentes sources ont des coûts, contraintes et risques différents', 'is_correct' => true],
                        ['choice_text' => 'Parce que toutes les sources ont exactement le même coût', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter toute analyse financière', 'is_correct' => false],
                        ['choice_text' => 'Parce que la dette est toujours meilleure', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi la capacité de remboursement est-elle importante avant de contracter une dette ?', 'explanation' => 'L’entreprise doit pouvoir honorer les paiements futurs.', 'choices' => [
                        ['choice_text' => 'Pour vérifier que les flux futurs peuvent supporter les remboursements', 'is_correct' => true],
                        ['choice_text' => 'Pour garantir qu’aucun intérêt ne sera payé', 'is_correct' => false],
                        ['choice_text' => 'Pour augmenter automatiquement les ventes', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les capitaux propres', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une dette à court terme peut-elle augmenter le risque de refinancement ?', 'explanation' => 'Elle doit être remboursée ou refinancée plus rapidement.', 'choices' => [
                        ['choice_text' => 'Elle exige un renouvellement ou remboursement plus rapide', 'is_correct' => true],
                        ['choice_text' => 'Elle n’a jamais de date d’échéance', 'is_correct' => false],
                        ['choice_text' => 'Elle garantit automatiquement de faibles coûts', 'is_correct' => false],
                        ['choice_text' => 'Elle élimine les besoins de trésorerie', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi le coût d’un financement ne se limite-t-il pas toujours au taux d’intérêt ?', 'explanation' => 'Il peut aussi y avoir des frais, commissions, garanties et autres conditions.', 'choices' => [
                        ['choice_text' => 'D’autres frais, commissions et conditions peuvent augmenter le coût total', 'is_correct' => true],
                        ['choice_text' => 'Le taux n’a jamais d’importance', 'is_correct' => false],
                        ['choice_text' => 'Tous les frais sont toujours nuls', 'is_correct' => false],
                        ['choice_text' => 'Les conditions contractuelles n’ont aucun effet', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel principe doit guider une décision de financement ?', 'explanation' => 'Le choix doit tenir compte du coût, du risque, des besoins de financement et de la stratégie.', 'choices' => [
                        ['choice_text' => 'Choisir une structure cohérente avec les besoins, le coût, le risque et la stratégie', 'is_correct' => true],
                        ['choice_text' => 'Choisir systématiquement la dette la plus élevée', 'is_correct' => false],
                        ['choice_text' => 'Choisir toujours les capitaux propres', 'is_correct' => false],
                        ['choice_text' => 'Ignorer la capacité future de paiement', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — États financiers essentiels',
                'questions' => [
                    ['question' => 'Que présente principalement le compte de résultat ?', 'explanation' => 'Il présente les produits, charges et résultat d’une période.', 'choices' => [
                        ['choice_text' => 'Les produits, les charges et le résultat sur une période', 'is_correct' => true],
                        ['choice_text' => 'Uniquement les actifs à une date', 'is_correct' => false],
                        ['choice_text' => 'Uniquement les paiements en espèces', 'is_correct' => false],
                        ['choice_text' => 'Uniquement les participations des actionnaires', 'is_correct' => false],
                    ]],
                    ['question' => 'Que présente principalement le bilan ?', 'explanation' => 'Le bilan montre les actifs, passifs et capitaux propres à une date précise.', 'choices' => [
                        ['choice_text' => 'Les actifs, passifs et capitaux propres à une date donnée', 'is_correct' => true],
                        ['choice_text' => 'Uniquement les revenus annuels', 'is_correct' => false],
                        ['choice_text' => 'Uniquement les dépenses', 'is_correct' => false],
                        ['choice_text' => 'Uniquement les ventes au comptant', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel est le rôle général du tableau des flux de trésorerie ?', 'explanation' => 'Il explique les entrées et sorties de trésorerie pendant une période.', 'choices' => [
                        ['choice_text' => 'Présenter les entrées et sorties de trésorerie sur une période', 'is_correct' => true],
                        ['choice_text' => 'Présenter uniquement les stocks', 'is_correct' => false],
                        ['choice_text' => 'Présenter uniquement les capitaux propres', 'is_correct' => false],
                        ['choice_text' => 'Remplacer systématiquement le bilan', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une vente à crédit peut-elle augmenter le chiffre d’affaires sans augmenter immédiatement la trésorerie ?', 'explanation' => 'Le client peut payer plus tard, créant une créance plutôt qu’une entrée de trésorerie immédiate.', 'choices' => [
                        ['choice_text' => 'Parce que le client peut payer plus tard et créer une créance', 'is_correct' => true],
                        ['choice_text' => 'Parce qu’une vente à crédit est toujours une perte', 'is_correct' => false],
                        ['choice_text' => 'Parce que les revenus ne sont jamais enregistrés', 'is_correct' => false],
                        ['choice_text' => 'Parce que la trésorerie n’a aucun lien avec les ventes', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi les trois états financiers doivent-ils être analysés ensemble ?', 'explanation' => 'Ils donnent des perspectives complémentaires sur la performance, la position et les flux de trésorerie.', 'choices' => [
                        ['choice_text' => 'Parce qu’ils donnent des informations complémentaires sur la performance, la situation et la trésorerie', 'is_correct' => true],
                        ['choice_text' => 'Parce qu’ils contiennent toujours les mêmes informations', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’un seul état est insuffisant dans tous les cas', 'is_correct' => false],
                        ['choice_text' => 'Parce que les trois états sont uniquement destinés aux banques', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’une créance client ?', 'explanation' => 'C’est un montant dû par un client à l’entreprise.', 'choices' => [
                        ['choice_text' => 'Un montant dû par un client à l’entreprise', 'is_correct' => true],
                        ['choice_text' => 'Une dette de l’entreprise envers la banque', 'is_correct' => false],
                        ['choice_text' => 'Une charge salariale', 'is_correct' => false],
                        ['choice_text' => 'Un apport des actionnaires', 'is_correct' => false],
                    ]],
                    ['question' => 'Qu’est-ce qu’une dette fournisseur ?', 'explanation' => 'Elle représente une somme due par l’entreprise à un fournisseur.', 'choices' => [
                        ['choice_text' => 'Une somme due par l’entreprise à un fournisseur', 'is_correct' => true],
                        ['choice_text' => 'Une créance client', 'is_correct' => false],
                        ['choice_text' => 'Une réserve de trésorerie', 'is_correct' => false],
                        ['choice_text' => 'Un placement financier', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi la dépréciation ou l’amortissement n’est-elle pas toujours une sortie de trésorerie de la période ?', 'explanation' => 'Il s’agit d’une répartition comptable d’un coût, pas nécessairement d’un nouveau paiement.', 'choices' => [
                        ['choice_text' => 'Parce qu’il peut s’agir d’une charge comptable sans nouveau paiement immédiat', 'is_correct' => true],
                        ['choice_text' => 'Parce que les immobilisations sont toujours gratuites', 'is_correct' => false],
                        ['choice_text' => 'Parce que toutes les charges sont fictives', 'is_correct' => false],
                        ['choice_text' => 'Parce que l’entreprise ne paie jamais les immobilisations', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi le bénéfice ne correspond-il pas toujours à la trésorerie générée ?', 'explanation' => 'Les règles comptables, les créances, les dettes et les dépenses d’investissement peuvent créer des écarts.', 'choices' => [
                        ['choice_text' => 'Parce que le résultat comptable et les flux de trésorerie suivent des logiques différentes', 'is_correct' => true],
                        ['choice_text' => 'Parce que la trésorerie est toujours égale au bénéfice', 'is_correct' => false],
                        ['choice_text' => 'Parce que les dépenses n’ont aucun effet sur le cash', 'is_correct' => false],
                        ['choice_text' => 'Parce que les ventes ne sont jamais prises en compte', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel document permet principalement de voir la structure financière à une date précise ?', 'explanation' => 'Le bilan présente les actifs, passifs et capitaux propres à une date donnée.', 'choices' => [
                        ['choice_text' => 'Le bilan', 'is_correct' => true],
                        ['choice_text' => 'Le tableau de trésorerie uniquement', 'is_correct' => false],
                        ['choice_text' => 'Le budget marketing', 'is_correct' => false],
                        ['choice_text' => 'Le relevé de présence', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Cas pratiques financiers',
                'questions' => [
                    ['question' => 'Une entreprise augmente ses ventes mais ses clients paient de plus en plus tard. Quel problème peut apparaître ?', 'explanation' => 'Des encaissements plus lents peuvent créer une tension de trésorerie.', 'choices' => [
                        ['choice_text' => 'Une pression sur la trésorerie et le besoin en fonds de roulement', 'is_correct' => true],
                        ['choice_text' => 'Une suppression des ventes', 'is_correct' => false],
                        ['choice_text' => 'Une réduction automatique des dettes', 'is_correct' => false],
                        ['choice_text' => 'Une hausse garantie du bénéfice', 'is_correct' => false],
                    ]],
                    ['question' => 'Un investisseur concentre 90 % de son portefeuille dans une seule action. Quel est le principal problème ?', 'explanation' => 'Une concentration aussi forte augmente fortement le risque spécifique.', 'choices' => [
                        ['choice_text' => 'Une forte concentration du risque sur une seule entreprise', 'is_correct' => true],
                        ['choice_text' => 'Une diversification maximale', 'is_correct' => false],
                        ['choice_text' => 'Une absence totale de risque de marché', 'is_correct' => false],
                        ['choice_text' => 'Une garantie de rendement', 'is_correct' => false],
                    ]],
                    ['question' => 'Une entreprise possède beaucoup de stocks inutilisés. Quel effet financier possible cela peut-il avoir ?', 'explanation' => 'Les stocks immobilisent des ressources qui pourraient être utilisées ailleurs.', 'choices' => [
                        ['choice_text' => 'Une partie de la trésorerie peut être immobilisée dans les stocks', 'is_correct' => true],
                        ['choice_text' => 'Les stocks augmentent automatiquement la trésorerie disponible', 'is_correct' => false],
                        ['choice_text' => 'Les stocks réduisent toujours les coûts', 'is_correct' => false],
                        ['choice_text' => 'Les stocks deviennent automatiquement des capitaux propres', 'is_correct' => false],
                    ]],
                    ['question' => 'Une personne reçoit une prime exceptionnelle. Quelle décision financière est généralement raisonnable avant toute dépense importante ?', 'explanation' => 'Il est utile d’évaluer les objectifs, les dettes, l’épargne et les besoins futurs.', 'choices' => [
                        ['choice_text' => 'Évaluer ses objectifs, ses dettes, son épargne et ses besoins avant de décider', 'is_correct' => true],
                        ['choice_text' => 'Dépenser immédiatement tout le montant', 'is_correct' => false],
                        ['choice_text' => 'Investir obligatoirement toute la somme dans un seul actif', 'is_correct' => false],
                        ['choice_text' => 'Contracter une nouvelle dette', 'is_correct' => false],
                    ]],
                    ['question' => 'Une entreprise réalise des bénéfices mais n’a presque aucune trésorerie disponible. Quelle analyse est prioritaire ?', 'explanation' => 'Il faut examiner les flux de trésorerie, les créances, les stocks et les dettes.', 'choices' => [
                        ['choice_text' => 'Analyser les flux de trésorerie et le besoin en fonds de roulement', 'is_correct' => true],
                        ['choice_text' => 'Analyser uniquement le logo', 'is_correct' => false],
                        ['choice_text' => 'Analyser uniquement la publicité', 'is_correct' => false],
                        ['choice_text' => 'Ignorer la trésorerie puisque le bénéfice est positif', 'is_correct' => false],
                    ]],
                    ['question' => 'Une personne choisit un placement sans vérifier sa possibilité de retrait rapide alors qu’elle aura besoin de l’argent dans trois mois. Quel risque est sous-estimé ?', 'explanation' => 'Le risque de liquidité est important lorsque l’argent doit être disponible rapidement.', 'choices' => [
                        ['choice_text' => 'Le risque de liquidité', 'is_correct' => true],
                        ['choice_text' => 'Le risque comptable uniquement', 'is_correct' => false],
                        ['choice_text' => 'Le risque de production', 'is_correct' => false],
                        ['choice_text' => 'Le risque de recrutement', 'is_correct' => false],
                    ]],
                    ['question' => 'Une entreprise possède beaucoup d’actifs mais aussi beaucoup de dettes. Que faut-il examiner pour comprendre sa situation ?', 'explanation' => 'La nature et le niveau des actifs et passifs doivent être analysés ensemble.', 'choices' => [
                        ['choice_text' => 'La structure des actifs, des dettes et des capitaux propres', 'is_correct' => true],
                        ['choice_text' => 'Uniquement le chiffre d’affaires', 'is_correct' => false],
                        ['choice_text' => 'Uniquement le nombre de clients', 'is_correct' => false],
                        ['choice_text' => 'Uniquement la valeur du stock', 'is_correct' => false],
                    ]],
                    ['question' => 'Une entreprise veut acheter une nouvelle machine. Quelle question financière de base faut-il poser ?', 'explanation' => 'Il faut évaluer le coût, les bénéfices attendus et la capacité de financement.', 'choices' => [
                        ['choice_text' => 'Quel coût, quels bénéfices attendus et quel financement sont associés à cet investissement ?', 'is_correct' => true],
                        ['choice_text' => 'Quelle couleur aura la machine ?', 'is_correct' => false],
                        ['choice_text' => 'Combien d’employés utilisent Internet ?', 'is_correct' => false],
                        ['choice_text' => 'Quel est le nombre de fournisseurs uniquement ?', 'is_correct' => false],
                    ]],
                    ['question' => 'Pourquoi une hausse des ventes n’implique-t-elle pas automatiquement une hausse identique de la trésorerie ?', 'explanation' => 'Les ventes peuvent être réalisées à crédit et les clients peuvent payer plus tard.', 'choices' => [
                        ['choice_text' => 'Parce qu’une partie des ventes peut ne pas être encore encaissée', 'is_correct' => true],
                        ['choice_text' => 'Parce que les ventes ne créent jamais de revenus', 'is_correct' => false],
                        ['choice_text' => 'Parce que les clients paient toujours avant la vente', 'is_correct' => false],
                        ['choice_text' => 'Parce que la trésorerie ne dépend jamais des ventes', 'is_correct' => false],
                    ]],
                    ['question' => 'Quel principe doit guider une décision financière personnelle importante ?', 'explanation' => 'Une décision doit être cohérente avec les objectifs, la capacité financière et le niveau de risque acceptable.', 'choices' => [
                        ['choice_text' => 'La cohérence avec les objectifs, les ressources, les risques et les besoins futurs', 'is_correct' => true],
                        ['choice_text' => 'Le rendement maximal sans considérer le risque', 'is_correct' => false],
                        ['choice_text' => 'La décision la plus populaire', 'is_correct' => false],
                        ['choice_text' => 'La décision la plus rapide', 'is_correct' => false],
                    ]],
                ],
            ],
        ];

        $this->seed($subject, $quizzes, 'Beginner', 15);
    }

    private function seed(Subject $subject, array $quizzes, string $difficulty, int $duration): void
    {
        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['title'],
                    'duration' => $duration,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => $difficulty,
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