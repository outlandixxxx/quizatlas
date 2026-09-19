<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PublicEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'public-economics')->firstOrFail();

        $quizzes = [

            // =========================================================
            // QUIZ 1 — Introduction à l'économie publique
            // =========================================================
            [
                'title' => 'Introduction à l’économie publique',
                'description' => 'Notions fondamentales sur le rôle de l’État, les biens publics et les principales questions de l’économie publique.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel est l’objet principal de l’économie publique ?',
                        'choices' => [
                            ['choice_text' => 'Étudier le rôle économique de l’État et des administrations publiques', 'is_correct' => true],
                            ['choice_text' => 'Étudier uniquement le fonctionnement des entreprises privées', 'is_correct' => false],
                            ['choice_text' => 'Analyser uniquement les échanges internationaux', 'is_correct' => false],
                            ['choice_text' => 'Déterminer les prix de toutes les entreprises', 'is_correct' => false],
                        ],
                        'explanation' => 'L’économie publique analyse notamment les décisions de l’État, les dépenses publiques, les recettes publiques et leurs effets sur l’économie.',
                    ],
                    [
                        'question' => 'Quel acteur est au centre de l’analyse de l’économie publique ?',
                        'choices' => [
                            ['choice_text' => 'L’État et les administrations publiques', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les ménages', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les banques commerciales', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les entreprises exportatrices', 'is_correct' => false],
                        ],
                        'explanation' => 'L’économie publique s’intéresse principalement à l’intervention des administrations publiques dans l’économie.',
                    ],
                    [
                        'question' => 'La dépense publique correspond principalement à :',
                        'choices' => [
                            ['choice_text' => 'L’utilisation de ressources financières par les administrations publiques', 'is_correct' => true],
                            ['choice_text' => 'La consommation des ménages uniquement', 'is_correct' => false],
                            ['choice_text' => 'La totalité des investissements privés', 'is_correct' => false],
                            ['choice_text' => 'Les exportations d’un pays', 'is_correct' => false],
                        ],
                        'explanation' => 'La dépense publique regroupe les ressources utilisées par les administrations pour financer leurs activités et leurs politiques.',
                    ],
                    [
                        'question' => 'Quel est un exemple de recette publique ?',
                        'choices' => [
                            ['choice_text' => 'Un impôt sur le revenu', 'is_correct' => true],
                            ['choice_text' => 'Une dépense d’investissement d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une consommation alimentaire d’un ménage', 'is_correct' => false],
                            ['choice_text' => 'Une exportation privée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les impôts constituent une source essentielle de recettes pour les administrations publiques.',
                    ],
                    [
                        'question' => 'Pourquoi l’État peut-il intervenir dans l’économie ?',
                        'choices' => [
                            ['choice_text' => 'Pour répondre à certains problèmes que le marché ne résout pas efficacement', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer systématiquement toutes les entreprises privées', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher tout échange volontaire', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer obligatoirement tous les salaires', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intervention publique peut notamment viser les défaillances du marché, la redistribution ou certaines fonctions collectives.',
                    ],
                    [
                        'question' => 'Que désigne généralement une politique publique ?',
                        'choices' => [
                            ['choice_text' => 'Un ensemble de mesures décidées par les pouvoirs publics pour atteindre un objectif', 'is_correct' => true],
                            ['choice_text' => 'Une décision prise uniquement par une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une stratégie commerciale privée', 'is_correct' => false],
                            ['choice_text' => 'Une négociation entre deux ménages', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique publique regroupe des actions et des mesures mises en œuvre par les pouvoirs publics afin d’atteindre un objectif économique ou social.',
                    ],
                    [
                        'question' => 'Quel objectif peut justifier une intervention publique ?',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines inégalités de revenu', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement les profits de toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Éliminer toutes les préférences des consommateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la concurrence dans tous les marchés', 'is_correct' => false],
                        ],
                        'explanation' => 'La redistribution des revenus est l’un des grands objectifs possibles de l’intervention de l’État.',
                    ],
                    [
                        'question' => 'Quel terme désigne l’ensemble des recettes et des dépenses publiques ?',
                        'choices' => [
                            ['choice_text' => 'Les finances publiques', 'is_correct' => true],
                            ['choice_text' => 'Le commerce extérieur', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité privée', 'is_correct' => false],
                            ['choice_text' => 'La politique commerciale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les finances publiques étudient notamment les recettes, dépenses, déficits et dettes des administrations publiques.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un budget public ?',
                        'choices' => [
                            ['choice_text' => 'Un document qui prévoit les recettes et les dépenses publiques', 'is_correct' => true],
                            ['choice_text' => 'Un tableau des ventes d’une entreprise privée', 'is_correct' => false],
                            ['choice_text' => 'Un registre des exportations uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un contrat entre deux consommateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le budget public présente les ressources attendues et les dépenses prévues des administrations publiques.',
                    ],
                    [
                        'question' => 'Quel domaine appartient directement à l’économie publique ?',
                        'choices' => [
                            ['choice_text' => 'L’analyse de la fiscalité', 'is_correct' => true],
                            ['choice_text' => 'La gestion des stocks d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'La conception d’un produit privé', 'is_correct' => false],
                            ['choice_text' => 'La stratégie publicitaire d’une marque', 'is_correct' => false],
                        ],
                        'explanation' => 'La fiscalité constitue un thème central de l’économie publique car elle concerne les recettes et les effets redistributifs de l’État.', 
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 2 — Biens publics
            // =========================================================
            [
                'title' => 'Les biens publics',
                'description' => 'Comprendre les caractéristiques des biens publics et leur différence avec les biens privés.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle caractéristique est associée à un bien public pur ?',
                        'choices' => [
                            ['choice_text' => 'La non-rivalité et la non-exclusion', 'is_correct' => true],
                            ['choice_text' => 'La rivalité et l’exclusion', 'is_correct' => false],
                            ['choice_text' => 'La rivalité seulement', 'is_correct' => false],
                            ['choice_text' => 'L’exclusion seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bien public pur est généralement caractérisé par la non-rivalité dans la consommation et la non-exclusion.',
                    ],
                    [
                        'question' => 'Que signifie la non-rivalité ?',
                        'choices' => [
                            ['choice_text' => 'La consommation par une personne ne réduit pas directement la quantité disponible pour les autres', 'is_correct' => true],
                            ['choice_text' => 'Personne ne peut accéder au bien', 'is_correct' => false],
                            ['choice_text' => 'Le bien doit être vendu par une entreprise publique', 'is_correct' => false],
                            ['choice_text' => 'Le prix du bien est toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'La non-rivalité signifie qu’un individu peut bénéficier du bien sans réduire directement le bénéfice potentiel des autres.',
                    ],
                    [
                        'question' => 'Que signifie la non-exclusion ?',
                        'choices' => [
                            ['choice_text' => 'Il est difficile ou impossible d’empêcher les individus d’utiliser le bien', 'is_correct' => true],
                            ['choice_text' => 'Le bien doit être gratuit dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Le bien ne peut jamais être produit', 'is_correct' => false],
                            ['choice_text' => 'Seules les entreprises peuvent l’utiliser', 'is_correct' => false],
                        ],
                        'explanation' => 'La non-exclusion signifie qu’il est difficile d’exclure certains individus de l’utilisation du bien.',
                    ],
                    [
                        'question' => 'Lequel est un exemple classique de bien public ?',
                        'choices' => [
                            ['choice_text' => 'La défense nationale', 'is_correct' => true],
                            ['choice_text' => 'Une paire de chaussures', 'is_correct' => false],
                            ['choice_text' => 'Un repas dans un restaurant', 'is_correct' => false],
                            ['choice_text' => 'Un ordinateur personnel', 'is_correct' => false],
                        ],
                        'explanation' => 'La défense nationale bénéficie collectivement à la population et constitue un exemple classique de bien public.',
                    ],
                    [
                        'question' => 'Pourquoi le marché peut-il avoir des difficultés à fournir certains biens publics ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il est difficile de faire payer individuellement tous les bénéficiaires', 'is_correct' => true],
                            ['choice_text' => 'Parce que les consommateurs refusent toujours les biens publics', 'is_correct' => false],
                            ['choice_text' => 'Parce que ces biens n’ont jamais de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur production ne demande aucune ressource', 'is_correct' => false],
                        ],
                        'explanation' => 'La non-exclusion peut rendre difficile le financement privé, car certains bénéficiaires peuvent profiter du bien sans payer.',
                    ],
                    [
                        'question' => 'Quel comportement est associé au problème du passager clandestin ?',
                        'choices' => [
                            ['choice_text' => 'Bénéficier d’un bien collectif sans contribuer suffisamment à son financement', 'is_correct' => true],
                            ['choice_text' => 'Payer plus que le prix du marché', 'is_correct' => false],
                            ['choice_text' => 'Refuser de bénéficier d’un bien public', 'is_correct' => false],
                            ['choice_text' => 'Produire soi-même tous les biens publics', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passager clandestin cherche à profiter du bénéfice collectif sans supporter une part correspondante du coût.',
                    ],
                    [
                        'question' => 'Un phare maritime est souvent utilisé comme exemple de :',
                        'choices' => [
                            ['choice_text' => 'Bien présentant des caractéristiques de bien public', 'is_correct' => true],
                            ['choice_text' => 'Bien privé parfaitement rival', 'is_correct' => false],
                            ['choice_text' => 'Bien exclusivement réservé aux entreprises', 'is_correct' => false],
                            ['choice_text' => 'Bien sans utilité économique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le service fourni par un phare peut bénéficier à plusieurs utilisateurs simultanément et rendre l’exclusion difficile.',
                    ],
                    [
                        'question' => 'Quelle propriété distingue un bien privé classique d’un bien public pur ?',
                        'choices' => [
                            ['choice_text' => 'Le bien privé est généralement rival et excluable', 'is_correct' => true],
                            ['choice_text' => 'Le bien privé est toujours non rival', 'is_correct' => false],
                            ['choice_text' => 'Le bien privé est toujours impossible à exclure', 'is_correct' => false],
                            ['choice_text' => 'Le bien privé ne peut jamais être vendu', 'is_correct' => false],
                        ],
                        'explanation' => 'Les biens privés classiques sont généralement rivaux et excluables : leur usage par une personne réduit la disponibilité pour les autres et l’accès peut être conditionné au paiement.',
                    ],
                    [
                        'question' => 'Quel problème économique peut apparaître lorsqu’un bien est difficilement excluable ?',
                        'choices' => [
                            ['choice_text' => 'Le financement volontaire peut être insuffisant', 'is_correct' => true],
                            ['choice_text' => 'Le prix doit toujours être très élevé', 'is_correct' => false],
                            ['choice_text' => 'La production devient automatiquement impossible', 'is_correct' => false],
                            ['choice_text' => 'Les consommateurs deviennent tous producteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque l’exclusion est difficile, certains agents peuvent profiter du bien sans payer, ce qui peut réduire le financement volontaire.',
                    ],
                    [
                        'question' => 'Quel objectif peut justifier la production publique d’un bien collectif ?',
                        'choices' => [
                            ['choice_text' => 'Assurer un niveau de fourniture jugé socialement souhaitable', 'is_correct' => true],
                            ['choice_text' => 'Garantir un profit identique à toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tous les choix individuels', 'is_correct' => false],
                            ['choice_text' => 'Réduire toutes les dépenses privées à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'L’État peut intervenir pour assurer une fourniture collective lorsque le mécanisme de marché produit une quantité insuffisante.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 3 — Externalités
            // =========================================================
            [
                'title' => 'Les externalités',
                'description' => 'Découvrir le concept d’externalité et comprendre les effets favorables ou défavorables des activités économiques sur des tiers.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une externalité ?',
                        'choices' => [
                            ['choice_text' => 'Un effet d’une activité économique sur un tiers qui n’est pas directement pris en compte dans le marché', 'is_correct' => true],
                            ['choice_text' => 'Une taxe appliquée uniquement aux exportations', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique des salaires', 'is_correct' => false],
                            ['choice_text' => 'Une décision interne à une entreprise sans effet extérieur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une externalité apparaît lorsqu’une activité influence le bien-être d’un tiers sans que cet effet soit correctement reflété dans la transaction de marché.',
                    ],
                    [
                        'question' => 'La pollution d’une usine qui affecte les habitants voisins est un exemple de :',
                        'choices' => [
                            ['choice_text' => 'Externalité négative', 'is_correct' => true],
                            ['choice_text' => 'Bien public pur', 'is_correct' => false],
                            ['choice_text' => 'Externalité positive', 'is_correct' => false],
                            ['choice_text' => 'Subvention', 'is_correct' => false],
                        ],
                        'explanation' => 'La pollution impose un coût à d’autres personnes sans que ce coût soit nécessairement supporté directement par le producteur.',
                    ],
                    [
                        'question' => 'La vaccination peut générer une externalité :',
                        'choices' => [
                            ['choice_text' => 'Positive, en réduisant aussi le risque pour d’autres personnes', 'is_correct' => true],
                            ['choice_text' => 'Négative, car elle réduit toujours la production', 'is_correct' => false],
                            ['choice_text' => 'Nulle dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Fiscale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vaccination peut protéger indirectement d’autres personnes en réduisant la transmission d’une maladie.',
                    ],
                    [
                        'question' => 'Pourquoi une externalité négative peut-elle conduire à une production trop élevée ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le producteur ne supporte pas nécessairement tout le coût social de son activité', 'is_correct' => true],
                            ['choice_text' => 'Parce que le marché interdit toute production', 'is_correct' => false],
                            ['choice_text' => 'Parce que le produit n’a aucune demande', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les consommateurs bénéficient gratuitement du produit', 'is_correct' => false],
                        ],
                        'explanation' => 'Si certains coûts sont imposés à des tiers, le coût privé peut être inférieur au coût social, favorisant une production excessive.',
                    ],
                    [
                        'question' => 'Quel instrument peut être utilisé pour réduire une externalité négative ?',
                        'choices' => [
                            ['choice_text' => 'Une taxe sur l’activité polluante', 'is_correct' => true],
                            ['choice_text' => 'Une subvention à toute activité sans condition', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique de tous les salaires', 'is_correct' => false],
                            ['choice_text' => 'Une interdiction de toute consommation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une taxe peut faire supporter au producteur une partie du coût externe de son activité et rapprocher le coût privé du coût social.',
                    ],
                    [
                        'question' => 'Quel instrument peut encourager une activité générant une externalité positive ?',
                        'choices' => [
                            ['choice_text' => 'Une subvention', 'is_correct' => true],
                            ['choice_text' => 'Une pénalité automatique', 'is_correct' => false],
                            ['choice_text' => 'Une interdiction', 'is_correct' => false],
                            ['choice_text' => 'Un droit de douane', 'is_correct' => false],
                        ],
                        'explanation' => 'Une subvention peut encourager une activité dont les bénéfices pour la société sont supérieurs aux bénéfices pris en compte par l’agent privé.',
                    ],
                    [
                        'question' => 'Quelle différence existe entre coût privé et coût social ?',
                        'choices' => [
                            ['choice_text' => 'Le coût social peut inclure les coûts supportés par des tiers', 'is_correct' => true],
                            ['choice_text' => 'Le coût social concerne seulement les bénéfices de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le coût privé inclut toujours toutes les conséquences sociales', 'is_correct' => false],
                            ['choice_text' => 'Les deux notions sont toujours identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coût social tient compte de l’ensemble des coûts pertinents pour la société, y compris certains coûts externes.',
                    ],
                    [
                        'question' => 'Une externalité affecte principalement :',
                        'choices' => [
                            ['choice_text' => 'Un tiers non directement impliqué dans la transaction', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le vendeur', 'is_correct' => false],
                            ['choice_text' => 'Uniquement l’acheteur', 'is_correct' => false],
                            ['choice_text' => 'Uniquement l’administration fiscale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’élément essentiel de l’externalité est l’effet sur une personne ou une organisation extérieure à la transaction initiale.',
                    ],
                    [
                        'question' => 'Quel cas représente le mieux une externalité positive ?',
                        'choices' => [
                            ['choice_text' => 'Une entreprise forme des apprentis qui augmentent ensuite les compétences disponibles sur le marché du travail', 'is_correct' => true],
                            ['choice_text' => 'Une usine rejette des fumées toxiques', 'is_correct' => false],
                            ['choice_text' => 'Un ménage achète un meuble', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise paie sa facture d’électricité', 'is_correct' => false],
                        ],
                        'explanation' => 'La formation peut créer des bénéfices pour d’autres employeurs et pour la société en améliorant le capital humain disponible.',
                    ],
                    [
                        'question' => 'Quel est le principal problème créé par une externalité ?',
                        'choices' => [
                            ['choice_text' => 'Les décisions privées peuvent ne pas refléter tous les coûts ou bénéfices pour la société', 'is_correct' => true],
                            ['choice_text' => 'Les marchés deviennent toujours parfaitement efficaces', 'is_correct' => false],
                            ['choice_text' => 'Les consommateurs ne peuvent plus choisir', 'is_correct' => false],
                            ['choice_text' => 'Toutes les entreprises deviennent publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une externalité peut créer un écart entre l’intérêt privé et l’intérêt collectif, ce qui peut conduire à une allocation inefficace des ressources.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 4 — Fiscalité
            // =========================================================
            [
                'title' => 'Principes fondamentaux de la fiscalité',
                'description' => 'Comprendre les notions de base relatives aux impôts, aux contribuables et à la structure fiscale.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un impôt ?',
                        'choices' => [
                            ['choice_text' => 'Un prélèvement obligatoire effectué par les pouvoirs publics', 'is_correct' => true],
                            ['choice_text' => 'Un paiement volontaire à une entreprise privée', 'is_correct' => false],
                            ['choice_text' => 'Un prêt bancaire accordé à un ménage', 'is_correct' => false],
                            ['choice_text' => 'Une subvention versée par un consommateur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impôt est un prélèvement obligatoire destiné notamment à financer les dépenses publiques.',
                    ],
                    [
                        'question' => 'Quel est généralement l’objectif principal des impôts ?',
                        'choices' => [
                            ['choice_text' => 'Financer les dépenses publiques', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement le chiffre d’affaires des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute consommation privée', 'is_correct' => false],
                            ['choice_text' => 'Financer uniquement les exportations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les impôts procurent des recettes permettant notamment de financer les services et politiques publics.',
                    ],
                    [
                        'question' => 'Quel exemple correspond à un impôt direct ?',
                        'choices' => [
                            ['choice_text' => 'Un impôt sur le revenu', 'is_correct' => true],
                            ['choice_text' => 'Une taxe intégrée au prix d’un produit acheté', 'is_correct' => false],
                            ['choice_text' => 'Un paiement pour un billet de transport', 'is_correct' => false],
                            ['choice_text' => 'Un don à une association', 'is_correct' => false],
                        ],
                        'explanation' => 'Un impôt sur le revenu est directement établi en fonction du revenu ou de la situation du contribuable.',
                    ],
                    [
                        'question' => 'Un impôt indirect est généralement perçu :',
                        'choices' => [
                            ['choice_text' => 'À travers les transactions ou la consommation de biens et services', 'is_correct' => true],
                            ['choice_text' => 'Uniquement sur les héritages', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sur les salaires publics', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sur les bénéfices des banques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les impôts indirects sont souvent liés à la consommation ou aux transactions, comme la TVA.',
                    ],
                    [
                        'question' => 'Que signifie la progressivité d’un impôt ?',
                        'choices' => [
                            ['choice_text' => 'Le taux moyen d’imposition augmente avec le revenu', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’imposition diminue toujours lorsque le revenu augmente', 'is_correct' => false],
                            ['choice_text' => 'Tous les contribuables paient exactement le même montant', 'is_correct' => false],
                            ['choice_text' => 'L’impôt est supprimé lorsque le revenu augmente', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système progressif, la charge fiscale augmente relativement davantage lorsque le revenu augmente.',
                    ],
                    [
                        'question' => 'Quel système applique le même taux à toutes les bases imposables concernées ?',
                        'choices' => [
                            ['choice_text' => 'Un impôt proportionnel', 'is_correct' => true],
                            ['choice_text' => 'Un impôt progressif', 'is_correct' => false],
                            ['choice_text' => 'Un impôt exclusivement forfaitaire en montant', 'is_correct' => false],
                            ['choice_text' => 'Un système sans fiscalité', 'is_correct' => false],
                        ],
                        'explanation' => 'Un impôt proportionnel applique un taux constant à la base imposable, toutes choses égales par ailleurs.',
                    ],
                    [
                        'question' => 'Qui supporte économiquement la charge d’un impôt ?',
                        'choices' => [
                            ['choice_text' => 'La personne ou l’agent qui en supporte finalement le coût économique', 'is_correct' => true],
                            ['choice_text' => 'Toujours l’administration publique', 'is_correct' => false],
                            ['choice_text' => 'Toujours le vendeur légalement désigné', 'is_correct' => false],
                            ['choice_text' => 'Toujours le producteur, quel que soit le marché', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne qui verse juridiquement l’impôt n’est pas nécessairement celle qui en supporte toute la charge économique.',
                    ],
                    [
                        'question' => 'À quoi sert principalement une base imposable ?',
                        'choices' => [
                            ['choice_text' => 'À déterminer la grandeur sur laquelle l’impôt est calculé', 'is_correct' => true],
                            ['choice_text' => 'À déterminer le nombre de fonctionnaires', 'is_correct' => false],
                            ['choice_text' => 'À mesurer uniquement les exportations', 'is_correct' => false],
                            ['choice_text' => 'À fixer le salaire minimum', 'is_correct' => false],
                        ],
                        'explanation' => 'La base imposable peut être un revenu, une consommation, un patrimoine ou une autre grandeur définie par la réglementation fiscale.',
                    ],
                    [
                        'question' => 'Pourquoi la fiscalité peut-elle modifier les comportements économiques ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut modifier les coûts relatifs ou le revenu disponible', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle supprime automatiquement toutes les préférences', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle rend toujours les biens gratuits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle empêche toute production', 'is_correct' => false],
                        ],
                        'explanation' => 'Les impôts peuvent influencer les prix relatifs, les revenus disponibles et donc les décisions de consommation, d’épargne ou de production.',
                    ],
                    [
                        'question' => 'Quel principe fiscal consiste à tenir compte de la capacité contributive ?',
                        'choices' => [
                            ['choice_text' => 'Le principe d’équité', 'is_correct' => true],
                            ['choice_text' => 'Le principe de gratuité', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’exportation', 'is_correct' => false],
                            ['choice_text' => 'Le principe de concurrence', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équité fiscale cherche notamment à répartir la charge des prélèvements d’une manière considérée comme juste.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 5 — Redistribution
            // =========================================================
            [
                'title' => 'Redistribution des revenus',
                'description' => 'Introduction aux mécanismes de redistribution et au rôle de l’État dans la réduction des inégalités.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la redistribution des revenus ?',
                        'choices' => [
                            ['choice_text' => 'La modification de la répartition des revenus par des mécanismes publics', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique des profits privés', 'is_correct' => false],
                            ['choice_text' => 'Une réduction obligatoire des exportations', 'is_correct' => false],
                            ['choice_text' => 'Une hausse générale des prix', 'is_correct' => false],
                        ],
                        'explanation' => 'La redistribution modifie la répartition initiale des revenus grâce notamment aux impôts, transferts et prestations publiques.',
                    ],
                    [
                        'question' => 'Quel instrument peut contribuer à la redistribution ?',
                        'choices' => [
                            ['choice_text' => 'Les transferts sociaux', 'is_correct' => true],
                            ['choice_text' => 'Les exportations privées', 'is_correct' => false],
                            ['choice_text' => 'Les dépenses publicitaires des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Les achats de matières premières', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transferts sociaux peuvent déplacer des ressources vers certains ménages afin de poursuivre des objectifs de redistribution.',
                    ],
                    [
                        'question' => 'Pourquoi l’État redistribue-t-il les revenus ?',
                        'choices' => [
                            ['choice_text' => 'Pour poursuivre des objectifs d’équité et de protection sociale', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les revenus privés', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute épargne', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter toutes les inégalités', 'is_correct' => false],
                        ],
                        'explanation' => 'La redistribution vise notamment à réduire certaines inégalités et à protéger les ménages face à différents risques économiques ou sociaux.',
                    ],
                    [
                        'question' => 'Quel mécanisme prend directement de l’importance dans une politique de redistribution ?',
                        'choices' => [
                            ['choice_text' => 'L’impôt sur le revenu', 'is_correct' => true],
                            ['choice_text' => 'Le taux de change', 'is_correct' => false],
                            ['choice_text' => 'Les exportations', 'is_correct' => false],
                            ['choice_text' => 'La productivité d’une machine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impôt sur le revenu peut être conçu de manière à faire contribuer davantage les ménages disposant de revenus plus élevés.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un transfert social ?',
                        'choices' => [
                            ['choice_text' => 'Un versement effectué dans le cadre d’un dispositif public de protection ou de soutien', 'is_correct' => true],
                            ['choice_text' => 'Une vente d’actions entre deux entreprises', 'is_correct' => false],
                            ['choice_text' => 'Une exportation vers un autre pays', 'is_correct' => false],
                            ['choice_text' => 'Un paiement d’un ménage à un restaurant', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transferts sociaux regroupent différentes prestations ou aides publiques destinées à soutenir certains ménages ou groupes.',
                    ],
                    [
                        'question' => 'Une politique redistributive cherche généralement à agir sur :',
                        'choices' => [
                            ['choice_text' => 'La distribution des ressources entre les différents ménages', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le niveau des exportations', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la production industrielle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la valeur de la monnaie', 'is_correct' => false],
                        ],
                        'explanation' => 'La redistribution concerne la manière dont les ressources ou revenus sont répartis entre les individus ou ménages.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une prestation sociale ?',
                        'choices' => [
                            ['choice_text' => 'Une aide ou un versement destiné à répondre à un besoin ou à un risque social', 'is_correct' => true],
                            ['choice_text' => 'Une taxe payée par les entreprises exportatrices', 'is_correct' => false],
                            ['choice_text' => 'Un investissement privé dans une usine', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des prix de tous les biens', 'is_correct' => false],
                        ],
                        'explanation' => 'Les prestations sociales visent à soutenir les personnes face à différents besoins ou risques tels que le chômage, la vieillesse ou certaines situations familiales.',
                    ],
                    [
                        'question' => 'Quel résultat peut être recherché grâce à une fiscalité progressive ?',
                        'choices' => [
                            ['choice_text' => 'Une réduction de certaines inégalités de revenu disponible', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique des inégalités', 'is_correct' => false],
                            ['choice_text' => 'La suppression des services publics', 'is_correct' => false],
                            ['choice_text' => 'La disparition de toute épargne', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fiscalité progressive peut réduire certaines différences de revenu disponible lorsqu’elle est combinée à des dépenses ou transferts redistributifs.',
                    ],
                    [
                        'question' => 'Le revenu disponible d’un ménage correspond, de manière simplifiée, à :',
                        'choices' => [
                            ['choice_text' => 'Son revenu après prise en compte des impôts et transferts pertinents', 'is_correct' => true],
                            ['choice_text' => 'Son chiffre d’affaires brut avant toute recette', 'is_correct' => false],
                            ['choice_text' => 'Uniquement son revenu du travail', 'is_correct' => false],
                            ['choice_text' => 'Uniquement ses dépenses annuelles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le revenu disponible reflète les ressources dont dispose effectivement le ménage après prise en compte des prélèvements et prestations concernés.',
                    ],
                    [
                        'question' => 'Quelle notion est souvent utilisée pour comparer la répartition des revenus ?',
                        'choices' => [
                            ['choice_text' => 'Le coefficient de Gini', 'is_correct' => true],
                            ['choice_text' => 'Le taux directeur', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change', 'is_correct' => false],
                            ['choice_text' => 'Le prix du pétrole', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de Gini est un indicateur fréquemment utilisé pour mesurer le degré d’inégalité dans une distribution de revenus.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 6 — Dépenses publiques
            // =========================================================
            [
                'title' => 'Les dépenses publiques',
                'description' => 'Comprendre les différentes formes de dépenses publiques et leur rôle dans l’économie.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une dépense publique ?',
                        'choices' => [
                            ['choice_text' => 'Une dépense réalisée par une administration publique dans le cadre de ses missions', 'is_correct' => true],
                            ['choice_text' => 'Une dépense réalisée uniquement par les ménages', 'is_correct' => false],
                            ['choice_text' => 'Une exportation réalisée par une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une épargne bancaire privée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dépenses publiques sont engagées par les administrations pour financer des services, investissements, transferts et autres missions publiques.',
                    ],
                    [
                        'question' => 'Lequel est un exemple de dépense publique d’investissement ?',
                        'choices' => [
                            ['choice_text' => 'La construction d’une infrastructure publique', 'is_correct' => true],
                            ['choice_text' => 'L’achat de vêtements par un ménage', 'is_correct' => false],
                            ['choice_text' => 'La publicité d’une entreprise privée', 'is_correct' => false],
                            ['choice_text' => 'L’épargne d’un salarié', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction d’une infrastructure publique constitue une dépense d’investissement qui peut augmenter le capital public.',
                    ],
                    [
                        'question' => 'Les dépenses publiques peuvent-elles financer l’éducation ?',
                        'choices' => [
                            ['choice_text' => 'Oui, notamment à travers les établissements et services éducatifs publics', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les entreprises exportatrices', 'is_correct' => false],
                            ['choice_text' => 'Seulement pendant les périodes de croissance', 'is_correct' => false],
                        ],
                        'explanation' => 'L’éducation constitue l’un des domaines importants de dépense publique dans de nombreux pays.',
                    ],
                    [
                        'question' => 'Que sont les dépenses de transfert ?',
                        'choices' => [
                            ['choice_text' => 'Des versements publics à certains agents sans achat direct équivalent de leur part', 'is_correct' => true],
                            ['choice_text' => 'Des achats de machines uniquement', 'is_correct' => false],
                            ['choice_text' => 'Des exportations de services publics', 'is_correct' => false],
                            ['choice_text' => 'Des prêts accordés par les ménages', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transferts comprennent notamment certaines prestations sociales, qui transfèrent des ressources vers des bénéficiaires sans correspondre à une vente directe de bien ou service.',
                    ],
                    [
                        'question' => 'Pourquoi l’État dépense-t-il pour les infrastructures ?',
                        'choices' => [
                            ['choice_text' => 'Pour fournir ou améliorer des équipements utiles à l’activité économique et sociale', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les marchés privés', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement les revenus', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute mobilité des travailleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les infrastructures peuvent améliorer la mobilité, l’accès aux services et les conditions générales de production et d’échange.',
                    ],
                    [
                        'question' => 'La rémunération des agents publics constitue généralement :',
                        'choices' => [
                            ['choice_text' => 'Une composante des dépenses publiques', 'is_correct' => true],
                            ['choice_text' => 'Une recette fiscale', 'is_correct' => false],
                            ['choice_text' => 'Une exportation', 'is_correct' => false],
                            ['choice_text' => 'Une épargne privée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les salaires versés aux agents publics font partie des dépenses des administrations publiques.',
                    ],
                    [
                        'question' => 'Une dépense publique de santé peut viser à :',
                        'choices' => [
                            ['choice_text' => 'Améliorer l’accès de la population aux soins et à la prévention', 'is_correct' => true],
                            ['choice_text' => 'Réduire volontairement la qualité des soins', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les services médicaux privés', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement tous les salaires privés', 'is_correct' => false],
                        ],
                        'explanation' => 'La dépense publique de santé peut soutenir les services de soins, la prévention et différents programmes de santé publique.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on consommation publique ?',
                        'choices' => [
                            ['choice_text' => 'Les dépenses publiques liées à la production ou à l’achat de biens et services publics courants', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les dépenses des touristes', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les achats immobiliers des ménages', 'is_correct' => false],
                            ['choice_text' => 'Les exportations publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La consommation publique recouvre notamment l’achat de biens et services courants utilisés pour fournir des services publics.',
                    ],
                    [
                        'question' => 'Pourquoi la composition des dépenses publiques est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Parce que différents types de dépenses ont des effets économiques et sociaux différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les dépenses ont exactement le même effet', 'is_correct' => false],
                            ['choice_text' => 'Parce que seules les dépenses militaires existent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépenses publiques n’ont jamais d’impact économique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dépenses d’investissement, de fonctionnement et de transfert peuvent avoir des effets différents sur la croissance, l’emploi et la redistribution.',
                    ],
                    [
                        'question' => 'Quelle dépense publique peut contribuer directement à la protection sociale ?',
                        'choices' => [
                            ['choice_text' => 'Le versement d’une prestation sociale', 'is_correct' => true],
                            ['choice_text' => 'L’achat d’une machine par une entreprise privée', 'is_correct' => false],
                            ['choice_text' => 'L’importation d’un produit privé', 'is_correct' => false],
                            ['choice_text' => 'Le paiement d’un dividende privé', 'is_correct' => false],
                        ],
                        'explanation' => 'Les prestations sociales sont des dépenses publiques destinées notamment à soutenir les ménages et à couvrir certains risques sociaux.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 7 — Efficacité économique et choix publics
            // =========================================================
            [
                'title' => 'Efficacité et choix publics',
                'description' => 'Notions introductives sur l’efficacité économique, les arbitrages publics et les décisions collectives.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Que signifie l’efficacité économique ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser les ressources de manière à éviter des gaspillages et améliorer le bien-être possible', 'is_correct' => true],
                            ['choice_text' => 'Maximiser toujours les dépenses publiques', 'is_correct' => false],
                            ['choice_text' => 'Réduire toutes les consommations à zéro', 'is_correct' => false],
                            ['choice_text' => 'Donner toutes les ressources à une seule personne', 'is_correct' => false],
                        ],
                        'explanation' => 'L’efficacité économique concerne l’utilisation des ressources de manière à obtenir le meilleur résultat possible compte tenu des contraintes.',
                    ],
                    [
                        'question' => 'Quel est un arbitrage fréquent en économie publique ?',
                        'choices' => [
                            ['choice_text' => 'Trouver un équilibre entre efficacité et équité', 'is_correct' => true],
                            ['choice_text' => 'Choisir entre monnaie et climat uniquement', 'is_correct' => false],
                            ['choice_text' => 'Choisir entre exportation et importation dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Choisir entre deux marques privées', 'is_correct' => false],
                        ],
                        'explanation' => 'Les politiques publiques doivent souvent arbitrer entre améliorer l’efficacité de l’allocation et poursuivre des objectifs d’équité.',
                    ],
                    [
                        'question' => 'Que cherche à mesurer une analyse coûts-bénéfices ?',
                        'choices' => [
                            ['choice_text' => 'Comparer les coûts d’une politique avec les bénéfices qu’elle peut produire', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement le revenu des fonctionnaires', 'is_correct' => false],
                            ['choice_text' => 'Calculer uniquement les exportations', 'is_correct' => false],
                            ['choice_text' => 'Déterminer automatiquement le taux de chômage', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse coûts-bénéfices compare de manière structurée les ressources mobilisées et les avantages attendus d’un projet ou d’une politique.',
                    ],
                    [
                        'question' => 'Pourquoi les pouvoirs publics doivent-ils faire des choix ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les ressources disponibles sont limitées par rapport aux besoins', 'is_correct' => true],
                            ['choice_text' => 'Parce que les besoins sont toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les ressources sont infinies', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépenses publiques sont toujours interdites', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme les ressources sont limitées, les pouvoirs publics doivent établir des priorités entre différentes utilisations possibles.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût d’opportunité ?',
                        'choices' => [
                            ['choice_text' => 'La valeur de la meilleure alternative abandonnée lorsqu’un choix est effectué', 'is_correct' => true],
                            ['choice_text' => 'Le coût administratif d’un impôt uniquement', 'is_correct' => false],
                            ['choice_text' => 'La somme de tous les prix du marché', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice comptable d’une entreprise', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coût d’opportunité représente ce à quoi on renonce lorsqu’une ressource est utilisée pour une option plutôt qu’une autre.',
                    ],
                    [
                        'question' => 'Une politique publique est dite plus efficace lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'Atteint davantage son objectif pour un niveau de ressources donné', 'is_correct' => true],
                            ['choice_text' => 'Dépense nécessairement le plus d’argent possible', 'is_correct' => false],
                            ['choice_text' => 'Ignore complètement ses résultats', 'is_correct' => false],
                            ['choice_text' => 'Ne mesure jamais ses coûts', 'is_correct' => false],
                        ],
                        'explanation' => 'L’efficacité suppose de considérer les résultats obtenus par rapport aux ressources mobilisées.',
                    ],
                    [
                        'question' => 'Quel concept est lié à l’idée d’améliorer le bien-être d’au moins une personne sans réduire celui des autres ?',
                        'choices' => [
                            ['choice_text' => 'L’amélioration de Pareto', 'is_correct' => true],
                            ['choice_text' => 'La dévaluation', 'is_correct' => false],
                            ['choice_text' => 'Le protectionnisme', 'is_correct' => false],
                            ['choice_text' => 'La stagflation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une amélioration de Pareto rend au moins une personne mieux lotie sans détériorer la situation des autres.',
                    ],
                    [
                        'question' => 'Pourquoi une politique publique peut-elle être évaluée après sa mise en œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier si elle atteint les objectifs prévus et à quel coût', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute collecte de données', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’aucun changement futur ne soit possible', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaluation permet de comparer les résultats obtenus avec les objectifs et les ressources mobilisées.',
                    ],
                    [
                        'question' => 'Quel élément peut rendre une politique publique difficile à évaluer ?',
                        'choices' => [
                            ['choice_text' => 'La difficulté à isoler son effet des autres facteurs économiques et sociaux', 'is_correct' => true],
                            ['choice_text' => 'Le fait que tous les effets soient toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de ressources publiques', 'is_correct' => false],
                            ['choice_text' => 'Le fait que les statistiques soient toujours inutiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique peut être mise en œuvre en même temps que d’autres changements, ce qui complique l’identification de son effet propre.',
                    ],
                    [
                        'question' => 'Quel objectif relève davantage de l’équité que de l’efficacité ?',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines inégalités entre ménages', 'is_correct' => true],
                            ['choice_text' => 'Réduire un coût de production sans autre considération', 'is_correct' => false],
                            ['choice_text' => 'Accélérer une procédure administrative', 'is_correct' => false],
                            ['choice_text' => 'Réduire une durée de transport uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La réduction des inégalités relève principalement d’un objectif d’équité, même si elle peut aussi produire d’autres effets économiques.',
                    ],
                    [
                        'question' => 'Une décision publique doit tenir compte du coût d’opportunité parce que :',
                        'choices' => [
                            ['choice_text' => 'Les mêmes ressources ne peuvent généralement pas servir simultanément à toutes les utilisations', 'is_correct' => true],
                            ['choice_text' => 'Les ressources publiques sont toujours illimitées', 'is_correct' => false],
                            ['choice_text' => 'Les choix publics n’ont jamais de conséquences', 'is_correct' => false],
                            ['choice_text' => 'Les politiques publiques sont toujours gratuites', 'is_correct' => false],
                        ],
                        'explanation' => 'Affecter une ressource à un projet signifie renoncer à une autre utilisation possible de cette même ressource.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 8 — Introduction aux finances publiques
            // =========================================================
            [
                'title' => 'Principes de base des finances publiques',
                'description' => 'Réviser les notions fondamentales de budget public, déficit, dette et gestion des ressources publiques.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quand un budget public est-il en déficit ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque les dépenses publiques dépassent les recettes publiques sur la période considérée', 'is_correct' => true],
                            ['choice_text' => 'Lorsque les recettes dépassent toujours les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Lorsque les exportations dépassent les importations', 'is_correct' => false],
                            ['choice_text' => 'Lorsque les ménages épargnent davantage', 'is_correct' => false],
                        ],
                        'explanation' => 'Un déficit public apparaît lorsque les dépenses sont supérieures aux recettes sur la période budgétaire considérée.',
                    ],
                    [
                        'question' => 'Quand un budget public est-il en excédent ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque les recettes publiques dépassent les dépenses publiques', 'is_correct' => true],
                            ['choice_text' => 'Lorsque les dépenses dépassent les recettes', 'is_correct' => false],
                            ['choice_text' => 'Lorsque la consommation privée augmente', 'is_correct' => false],
                            ['choice_text' => 'Lorsque les importations augmentent', 'is_correct' => false],
                        ],
                        'explanation' => 'Un excédent budgétaire signifie que les recettes dépassent les dépenses sur la période considérée.',
                    ],
                    [
                        'question' => 'Que désigne la dette publique ?',
                        'choices' => [
                            ['choice_text' => 'L’ensemble des engagements financiers accumulés par les administrations publiques', 'is_correct' => true],
                            ['choice_text' => 'La dette de tous les ménages', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les crédits des entreprises publiques', 'is_correct' => false],
                            ['choice_text' => 'Les exportations non encore encaissées', 'is_correct' => false],
                        ],
                        'explanation' => 'La dette publique correspond aux engagements financiers accumulés des administrations publiques selon le périmètre retenu.',
                    ],
                    [
                        'question' => 'Quelle relation existe généralement entre déficit public et dette publique ?',
                        'choices' => [
                            ['choice_text' => 'Des déficits répétés peuvent contribuer à augmenter la dette publique', 'is_correct' => true],
                            ['choice_text' => 'Un déficit réduit toujours la dette', 'is_correct' => false],
                            ['choice_text' => 'Les deux notions sont exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'La dette ne dépend jamais des déficits passés', 'is_correct' => false],
                        ],
                        'explanation' => 'Des déficits successifs peuvent nécessiter de nouveaux financements et ainsi contribuer à l’accumulation de dette.',
                    ],
                    [
                        'question' => 'Comment l’État peut-il généralement financer un déficit ?',
                        'choices' => [
                            ['choice_text' => 'Notamment par l’emprunt', 'is_correct' => true],
                            ['choice_text' => 'Uniquement par les exportations privées', 'is_correct' => false],
                            ['choice_text' => 'Uniquement par les dons des ménages', 'is_correct' => false],
                            ['choice_text' => 'En supprimant automatiquement toute dépense', 'is_correct' => false],
                        ],
                        'explanation' => 'L’emprunt public constitue un moyen courant de financer un déficit lorsque les recettes ne couvrent pas les dépenses.',
                    ],
                    [
                        'question' => 'Pourquoi l’État peut-il recourir à l’emprunt ?',
                        'choices' => [
                            ['choice_text' => 'Pour financer des dépenses actuelles tout en répartissant leur financement dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre toutes les dépenses gratuites', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les impôts définitivement', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute épargne privée', 'is_correct' => false],
                        ],
                        'explanation' => 'L’emprunt permet de mobiliser des ressources aujourd’hui et de rembourser le financement selon les conditions prévues dans le temps.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un intérêt sur la dette publique ?',
                        'choices' => [
                            ['choice_text' => 'Le coût payé par l’État pour utiliser des fonds empruntés', 'is_correct' => true],
                            ['choice_text' => 'Une recette fiscale automatique', 'is_correct' => false],
                            ['choice_text' => 'Une subvention versée aux ménages', 'is_correct' => false],
                            ['choice_text' => 'Un revenu d’exportation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les intérêts représentent le coût du financement emprunté et constituent une charge pour l’emprunteur public.',
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on souvent la dette publique au PIB ?',
                        'choices' => [
                            ['choice_text' => 'Pour mettre la dette en relation avec la taille de l’économie', 'is_correct' => true],
                            ['choice_text' => 'Pour connaître uniquement le taux de chômage', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer directement la satisfaction des ménages', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les exportations', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ratio dette/PIB permet de rapporter le stock de dette à une mesure de la capacité économique globale du pays.',
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si les dépenses publiques augmentent fortement sans hausse équivalente des recettes ?',
                        'choices' => [
                            ['choice_text' => 'Le déficit public peut augmenter', 'is_correct' => true],
                            ['choice_text' => 'La dette disparaît automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les recettes fiscales deviennent nécessairement nulles', 'is_correct' => false],
                            ['choice_text' => 'Le budget devient automatiquement équilibré', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes choses égales par ailleurs, une hausse des dépenses non accompagnée d’une hausse équivalente des recettes accroît le déficit.',
                    ],
                    [
                        'question' => 'Quel est le rôle général de la gestion budgétaire publique ?',
                        'choices' => [
                            ['choice_text' => 'Planifier et contrôler l’utilisation des ressources publiques', 'is_correct' => true],
                            ['choice_text' => 'Déterminer les préférences de tous les consommateurs', 'is_correct' => false],
                            ['choice_text' => 'Fixer les bénéfices privés de toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les échanges commerciaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La gestion budgétaire vise à organiser les recettes et dépenses publiques et à suivre leur utilisation conformément aux objectifs fixés.',
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
                    'passing_score' => 80,
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

                // Mélange des choix tout en conservant is_correct
                // attaché à la bonne réponse.
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