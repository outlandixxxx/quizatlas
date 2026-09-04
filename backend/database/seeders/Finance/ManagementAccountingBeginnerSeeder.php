<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ManagementAccountingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'management-accounting')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité de gestion — Introduction',
                'description' => 'Découvrez les objectifs et concepts fondamentaux de la comptabilité de gestion.',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de la comptabilité de gestion ?',
                        'explanation' => 'La comptabilité de gestion fournit des informations utiles aux responsables pour planifier, contrôler et prendre des décisions.',
                        'choices' => [
                            ['choice_text' => 'Fournir des informations utiles à la planification, au contrôle et à la prise de décision', 'is_correct' => true],
                            ['choice_text' => 'Préparer uniquement les déclarations fiscales', 'is_correct' => false],
                            ['choice_text' => 'Enregistrer uniquement les ventes clients', 'is_correct' => false],
                            ['choice_text' => 'Gérer uniquement les comptes bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une différence importante entre comptabilité financière et comptabilité de gestion ?',
                        'explanation' => 'La comptabilité de gestion est principalement destinée aux utilisateurs internes et peut être adaptée aux besoins de management.',
                        'choices' => [
                            ['choice_text' => 'La comptabilité de gestion est principalement conçue pour les besoins internes de décision', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité de gestion ne traite jamais de coûts', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité financière ne produit jamais d’états financiers', 'is_correct' => false],
                            ['choice_text' => 'Les deux disciplines ont exactement le même objectif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût en comptabilité de gestion ?',
                        'explanation' => 'Un coût représente une ressource consommée ou un sacrifice économique associé à une activité, un produit ou une décision.',
                        'choices' => [
                            ['choice_text' => 'La valeur des ressources consommées pour réaliser une activité ou produire un bien ou service', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le bénéfice réalisé', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le montant des ventes', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qui utilise principalement les informations de la comptabilité de gestion ?',
                        'explanation' => 'Les dirigeants, responsables de services et managers utilisent ces informations pour piloter l’activité.',
                        'choices' => [
                            ['choice_text' => 'Les responsables et managers de l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les clients externes', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les banques centrales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi connaître les coûts est-il utile pour une entreprise ?',
                        'explanation' => 'La connaissance des coûts aide notamment à fixer les prix, maîtriser les dépenses et évaluer la rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux contrôler les dépenses et prendre des décisions économiques', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un centre de coûts ?',
                        'explanation' => 'Un centre de coûts regroupe des coûts liés à une activité, un service ou une fonction.',
                        'choices' => [
                            ['choice_text' => 'Une unité ou fonction dans laquelle des coûts sont regroupés et analysés', 'is_correct' => true],
                            ['choice_text' => 'Un compte bancaire destiné aux clients', 'is_correct' => false],
                            ['choice_text' => 'Une liste de fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Un marché financier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comptabilité de gestion peut-elle utiliser des informations non financières ?',
                        'explanation' => 'Les décisions de gestion peuvent aussi dépendre de volumes, délais, qualité ou productivité.',
                        'choices' => [
                            ['choice_text' => 'Parce que les décisions de gestion dépendent aussi de volumes, délais, qualité et productivité', 'is_correct' => true],
                            ['choice_text' => 'Parce que les données financières sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne peuvent jamais être calculés', 'is_correct' => false],
                            ['choice_text' => 'Parce que la comptabilité de gestion ne concerne pas les décisions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts sont-ils souvent regroupés par produit, service ou activité ?',
                        'explanation' => 'Cela permet de comprendre où les ressources sont consommées et d’évaluer la rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Pour analyser la consommation de ressources et la performance des différentes activités', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les différences entre produits', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les coûts en revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une information de coût doit-elle être adaptée à la décision analysée ?',
                        'explanation' => 'Les informations utiles pour une décision à court terme peuvent être différentes de celles nécessaires pour une décision stratégique.',
                        'choices' => [
                            ['choice_text' => 'Parce que la pertinence d’un coût dépend du contexte et de la décision', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les coûts sont toujours pertinents de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’aucun coût ne doit être comparé', 'is_correct' => false],
                            ['choice_text' => 'Parce que les décisions ne dépendent jamais des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un résultat attendu d’une bonne comptabilité de gestion ?',
                        'explanation' => 'Elle aide les managers à comprendre la performance et à améliorer leurs décisions.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la qualité des décisions de gestion', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les incertitudes', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tous les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Garantir toutes les ventes futures', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Coûts fixes et coûts variables',
                'description' => 'Comprenez les principales catégories de coûts selon leur comportement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un coût fixe ?',
                        'explanation' => 'Un coût fixe reste généralement constant à court terme dans une plage d’activité donnée.',
                        'choices' => [
                            ['choice_text' => 'Un coût qui reste généralement stable à court terme dans une plage d’activité donnée', 'is_correct' => true],
                            ['choice_text' => 'Un coût qui augmente à chaque unité produite', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui n’existe que lorsque l’entreprise vend', 'is_correct' => false],
                            ['choice_text' => 'Un coût toujours égal à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple courant de coût fixe pour une entreprise ?', 
                        'explanation' => 'Le loyer d’un local peut rester stable sur une période malgré les variations du volume produit.',
                        'choices' => [
                            ['choice_text' => 'Le loyer mensuel d’un local', 'is_correct' => true],
                            ['choice_text' => 'Les matières premières par unité produite', 'is_correct' => false],
                            ['choice_text' => 'Les commissions directement liées aux ventes', 'is_correct' => false],
                            ['choice_text' => 'Les emballages utilisés pour chaque unité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût variable ?',
                        'explanation' => 'Un coût variable évolue généralement avec le niveau d’activité.',
                        'choices' => [
                            ['choice_text' => 'Un coût qui varie généralement avec le niveau d’activité', 'is_correct' => true],
                            ['choice_text' => 'Un coût toujours identique chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui n’est jamais lié à la production', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui représente toujours un investissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple de coût variable dans une usine ?', 
                        'explanation' => 'Les matières premières consommées augmentent généralement avec la quantité produite.',
                        'choices' => [
                            ['choice_text' => 'Les matières premières consommées pour produire', 'is_correct' => true],
                            ['choice_text' => 'Le loyer annuel du bâtiment', 'is_correct' => false],
                            ['choice_text' => 'L’assurance annuelle fixe', 'is_correct' => false],
                            ['choice_text' => 'Le salaire fixe d’un directeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la production double et que le coût variable unitaire reste constant, que se passe-t-il généralement au coût variable total ?', 
                        'explanation' => 'Lorsque le coût variable unitaire reste constant, le coût variable total augmente avec le volume.',
                        'choices' => [
                            ['choice_text' => 'Il double', 'is_correct' => true],
                            ['choice_text' => 'Il reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Il devient nul', 'is_correct' => false],
                            ['choice_text' => 'Il diminue nécessairement de moitié', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un coût fixe mensuel est de 10 000 €, quel montant reste généralement à payer lorsque la production tombe à zéro à court terme ?', 
                        'explanation' => 'Un coût fixe ne dépend généralement pas du volume d’activité à court terme dans la plage considérée.',
                        'choices' => [
                            ['choice_text' => '10 000 €', 'is_correct' => true],
                            ['choice_text' => '0 €', 'is_correct' => false],
                            ['choice_text' => '5 000 €', 'is_correct' => false],
                            ['choice_text' => '20 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer coûts fixes et variables ?', 
                        'explanation' => 'Cette distinction est utile pour la planification, la tarification et l’analyse du seuil de rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux analyser l’effet du niveau d’activité sur les coûts et le résultat', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de calculer le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les coûts identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un coût fixe par unité peut-il diminuer lorsque la production augmente ?', 
                        'explanation' => 'Le montant total fixe est réparti sur un plus grand nombre d’unités.',
                        'choices' => [
                            ['choice_text' => 'Parce que le même coût fixe total est réparti sur davantage d’unités', 'is_correct' => true],
                            ['choice_text' => 'Parce que le coût fixe total disparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables deviennent fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente augmente automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente fortement sa production mais son coût variable unitaire augmente aussi. Quelle conséquence est possible ?', 
                        'explanation' => 'Le coût variable total peut augmenter plus rapidement que le volume produit si le coût unitaire progresse.',
                        'choices' => [
                            ['choice_text' => 'Le coût variable total peut augmenter plus que proportionnellement au volume', 'is_correct' => true],
                            ['choice_text' => 'Le coût variable total reste forcément constant', 'is_correct' => false],
                            ['choice_text' => 'Le coût fixe total devient nul', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice augmente forcément', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe simple faut-il retenir sur le comportement des coûts ?', 
                        'explanation' => 'Les coûts fixes et variables se comportent différemment lorsque le niveau d’activité change.',
                        'choices' => [
                            ['choice_text' => 'Les coûts fixes et variables réagissent différemment aux changements de volume', 'is_correct' => true],
                            ['choice_text' => 'Tous les coûts évoluent toujours de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Tous les coûts sont variables', 'is_correct' => false],
                            ['choice_text' => 'Tous les coûts sont fixes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Coûts directs et indirects',
                'description' => 'Apprenez à distinguer les coûts directement traçables des coûts nécessitant une répartition.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un coût direct ?', 
                        'explanation' => 'Un coût direct peut être attribué de manière économiquement raisonnable à un produit, service ou objet de coût précis.',
                        'choices' => [
                            ['choice_text' => 'Un coût qui peut être directement rattaché à un objet de coût', 'is_correct' => true],
                            ['choice_text' => 'Un coût qui concerne toute l’entreprise sans distinction', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui est toujours fixe', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui n’apparaît jamais dans les comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le coût des matières premières utilisées exclusivement pour un produit est généralement quel type de coût ?', 
                        'explanation' => 'Lorsqu’il est facilement mesurable pour un produit précis, il peut être traité comme un coût direct.',
                        'choices' => [
                            ['choice_text' => 'Un coût direct', 'is_correct' => true],
                            ['choice_text' => 'Un coût indirect', 'is_correct' => false],
                            ['choice_text' => 'Un coût administratif général', 'is_correct' => false],
                            ['choice_text' => 'Un coût d’opportunité uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût indirect ?', 
                        'explanation' => 'Un coût indirect concerne plusieurs objets de coût et doit généralement être réparti selon une méthode appropriée.',
                        'choices' => [
                            ['choice_text' => 'Un coût qui concerne plusieurs objets de coût et doit être réparti', 'is_correct' => true],
                            ['choice_text' => 'Un coût toujours variable', 'is_correct' => false],
                            ['choice_text' => 'Un coût directement lié à une seule unité', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui n’a aucune utilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple peut représenter un coût indirect dans une usine ?', 
                        'explanation' => 'Le salaire du superviseur peut concerner plusieurs lignes ou produits.',
                        'choices' => [
                            ['choice_text' => 'Le salaire d’un superviseur de production travaillant pour plusieurs produits', 'is_correct' => true],
                            ['choice_text' => 'La matière première exclusivement utilisée pour un produit', 'is_correct' => false],
                            ['choice_text' => 'La commission d’un vendeur sur une vente précise', 'is_correct' => false],
                            ['choice_text' => 'Le coût d’un emballage utilisé pour une unité identifiée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi répartit-on certains coûts indirects ?', 
                        'explanation' => 'Une répartition permet d’estimer le coût des différents produits, services ou activités.',
                        'choices' => [
                            ['choice_text' => 'Pour attribuer une part raisonnable des coûts aux différents objets de coût', 'is_correct' => true],
                            ['choice_text' => 'Pour éliminer les coûts', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les coûts en bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel critère peut être utilisé pour répartir un coût indirect ?', 
                        'explanation' => 'Une base de répartition doit avoir un lien raisonnable avec la consommation du coût.',
                        'choices' => [
                            ['choice_text' => 'Une base pertinente comme les heures de travail ou les heures machine', 'is_correct' => true],
                            ['choice_text' => 'Une valeur choisie totalement au hasard', 'is_correct' => false],
                            ['choice_text' => 'Le numéro de téléphone du manager', 'is_correct' => false],
                            ['choice_text' => 'La couleur du produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la distinction direct/indirect dépend-elle parfois du contexte ?', 
                        'explanation' => 'Un même coût peut être directement traçable à un niveau et indirect à un autre selon l’objet de coût choisi.',
                        'choices' => [
                            ['choice_text' => 'Parce que la traçabilité dépend de l’objet de coût analysé et du niveau de détail', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un coût direct devient toujours variable', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les coûts sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts indirects ne peuvent jamais être mesurés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une mauvaise répartition des coûts indirects peut-elle être problématique ?', 
                        'explanation' => 'Elle peut déformer le coût calculé des produits et conduire à de mauvaises décisions.',
                        'choices' => [
                            ['choice_text' => 'Elle peut fausser le coût des produits et les décisions de gestion', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les coûts indirects', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit toujours des prix corrects', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une bonne base de répartition ?', 
                        'explanation' => 'Elle doit refléter le mieux possible la consommation du coût par les objets analysés.',
                        'choices' => [
                            ['choice_text' => 'Représenter de manière raisonnable la consommation du coût par les objets de coût', 'is_correct' => true],
                            ['choice_text' => 'Produire toujours la même valeur pour tous les produits', 'is_correct' => false],
                            ['choice_text' => 'Maximiser artificiellement les coûts d’un produit', 'is_correct' => false],
                            ['choice_text' => 'Réduire toutes les charges à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts directs sont-ils souvent plus faciles à attribuer ?', 
                        'explanation' => 'Ils peuvent généralement être mesurés directement pour un produit ou service précis.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent généralement être mesurés directement pour un objet de coût donné', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils sont toujours plus faibles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont toujours fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne nécessitent aucune donnée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Coût total et coût unitaire',
                'description' => 'Comprenez les calculs de base relatifs au coût total et au coût par unité.',
                'questions' => [
                    [
                        'question' => 'Comment calcule-t-on simplement le coût total ?', 
                        'explanation' => 'Le coût total regroupe l’ensemble des coûts retenus pour l’objet étudié.',
                        'choices' => [
                            ['choice_text' => 'En additionnant les différents coûts concernés', 'is_correct' => true],
                            ['choice_text' => 'En soustrayant toujours les coûts des ventes', 'is_correct' => false],
                            ['choice_text' => 'En divisant les ventes par les coûts', 'is_correct' => false],
                            ['choice_text' => 'En additionnant uniquement les coûts fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dépense 30 000 € pour produire 3 000 unités. Quel est le coût moyen par unité ?', 
                        'explanation' => '30 000 € ÷ 3 000 unités = 10 € par unité.',
                        'choices' => [
                            ['choice_text' => '10 €', 'is_correct' => true],
                            ['choice_text' => '3 €', 'is_correct' => false],
                            ['choice_text' => '30 €', 'is_correct' => false],
                            ['choice_text' => '100 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise supporte 20 000 € de coûts fixes et 30 000 € de coûts variables. Quel est le coût total ?', 
                        'explanation' => '20 000 € + 30 000 € = 50 000 €.',
                        'choices' => [
                            ['choice_text' => '50 000 €', 'is_correct' => true],
                            ['choice_text' => '10 000 €', 'is_correct' => false],
                            ['choice_text' => '30 000 €', 'is_correct' => false],
                            ['choice_text' => '600 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût unitaire peut-il diminuer lorsque la production augmente alors que les coûts fixes restent constants ?', 
                        'explanation' => 'Les coûts fixes sont répartis sur un plus grand nombre d’unités.',
                        'choices' => [
                            ['choice_text' => 'Parce que les coûts fixes sont répartis sur davantage d’unités', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût variable devient nul', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente augmente automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise produit 5 000 unités avec 25 000 € de coûts variables. Quel est le coût variable unitaire ?', 
                        'explanation' => '25 000 € ÷ 5 000 unités = 5 € par unité.',
                        'choices' => [
                            ['choice_text' => '5 €', 'is_correct' => true],
                            ['choice_text' => '10 €', 'is_correct' => false],
                            ['choice_text' => '25 €', 'is_correct' => false],
                            ['choice_text' => '125 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 40 000 € de coûts fixes et produit 8 000 unités. Quel est le coût fixe moyen par unité ?', 
                        'explanation' => '40 000 € ÷ 8 000 unités = 5 € par unité.',
                        'choices' => [
                            ['choice_text' => '5 €', 'is_correct' => true],
                            ['choice_text' => '8 €', 'is_correct' => false],
                            ['choice_text' => '40 €', 'is_correct' => false],
                            ['choice_text' => '320 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût moyen est-il utile pour le management ?', 
                        'explanation' => 'Il permet notamment de comparer l’efficacité entre produits, périodes ou niveaux de production.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer le coût de production entre différentes situations', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer automatiquement les bénéfices futurs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer toutes les données financières', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse du coût unitaire ne signifie-t-elle pas toujours une baisse du coût total ?', 
                        'explanation' => 'Une hausse du volume peut entraîner une augmentation du coût total même si le coût moyen par unité diminue.',
                        'choices' => [
                            ['choice_text' => 'Parce que le volume produit peut augmenter suffisamment pour faire progresser le coût total', 'is_correct' => true],
                            ['choice_text' => 'Parce que le coût total est toujours égal au coût unitaire', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables n’existent plus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise produit 10 000 unités et supporte 100 000 € de coûts totaux. Quel est le coût moyen par unité ?', 
                        'explanation' => '100 000 € ÷ 10 000 unités = 10 € par unité.',
                        'choices' => [
                            ['choice_text' => '10 €', 'is_correct' => true],
                            ['choice_text' => '1 €', 'is_correct' => false],
                            ['choice_text' => '100 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe faut-il retenir sur le coût unitaire ?', 
                        'explanation' => 'Le coût unitaire dépend du coût total retenu et du nombre d’unités produites ou vendues.',
                        'choices' => [
                            ['choice_text' => 'Le coût unitaire correspond au coût total rapporté au nombre d’unités concernées', 'is_correct' => true],
                            ['choice_text' => 'Le coût unitaire est toujours égal au coût fixe total', 'is_correct' => false],
                            ['choice_text' => 'Le coût unitaire correspond toujours au prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Le coût unitaire ne dépend jamais du volume', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Coût de revient et rentabilité',
                'description' => 'Apprenez à relier les coûts aux prix et à la rentabilité.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le coût de revient ?', 
                        'explanation' => 'Le coût de revient représente, selon la méthode retenue, l’ensemble des coûts associés à un produit ou service jusqu’à son niveau considéré.',
                        'choices' => [
                            ['choice_text' => 'Le total des coûts retenus pour déterminer le coût complet d’un produit ou service', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les coûts variables', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les frais bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend un produit 50 € et son coût de revient est de 35 €. Quelle marge simplifiée obtient-elle par unité ?', 
                        'explanation' => '50 € - 35 € = 15 € de marge par unité.',
                        'choices' => [
                            ['choice_text' => '15 €', 'is_correct' => true],
                            ['choice_text' => '35 €', 'is_correct' => false],
                            ['choice_text' => '50 €', 'is_correct' => false],
                            ['choice_text' => '85 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi connaître le coût de revient est-il utile pour fixer un prix ?', 
                        'explanation' => 'Il permet de vérifier si le prix envisagé couvre les coûts pertinents et laisse une marge suffisante.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer si le prix peut couvrir les coûts et contribuer à la rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le marché acceptera automatiquement le prix', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les coûts indirects', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse de la demande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle avoir des produits avec des marges différentes ?', 
                        'explanation' => 'Les prix de vente et les structures de coûts peuvent varier selon les produits.',
                        'choices' => [
                            ['choice_text' => 'Parce que les prix, coûts et niveaux de consommation de ressources peuvent différer', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les produits ont toujours les mêmes coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix n’ont jamais d’effet sur la marge', 'is_correct' => false],
                            ['choice_text' => 'Parce que la comptabilité de gestion ne distingue pas les produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une marge positive ne garantit-elle pas toujours un bénéfice global ?', 
                        'explanation' => 'Les coûts fixes ou autres charges peuvent dépasser la somme des marges générées.',
                        'choices' => [
                            ['choice_text' => 'Parce que les marges cumulées doivent encore couvrir les coûts fixes et autres charges', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une marge positive est toujours une perte', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes n’existent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente réduit toujours le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend 2 000 unités avec une marge unitaire de 12 €. Quelle marge totale simplifiée génère-t-elle ?', 
                        'explanation' => '2 000 × 12 € = 24 000 € de marge totale.',
                        'choices' => [
                            ['choice_text' => '24 000 €', 'is_correct' => true],
                            ['choice_text' => '12 000 €', 'is_correct' => false],
                            ['choice_text' => '2 012 €', 'is_correct' => false],
                            ['choice_text' => '24 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût de revient doit-il être régulièrement analysé ?', 
                        'explanation' => 'Les coûts des matières, main-d’œuvre, énergie et autres ressources peuvent évoluer.',
                        'choices' => [
                            ['choice_text' => 'Parce que la structure des coûts peut évoluer et modifier la rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un coût de revient ne change jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les charges', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir un prix de vente fixe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle accepter temporairement une marge faible sur un produit ?', 
                        'explanation' => 'Des objectifs stratégiques, commerciaux ou de lancement peuvent justifier un faible niveau de marge à court terme.',
                        'choices' => [
                            ['choice_text' => 'Pour soutenir un objectif stratégique comme le lancement ou l’acquisition de clients', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts ne sont plus importants', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une marge faible garantit toujours un bénéfice élevé', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix n’a aucun lien avec la stratégie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les marges de plusieurs produits ?', 
                        'explanation' => 'La comparaison permet d’identifier les offres qui contribuent le plus à la performance.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les produits qui contribuent le mieux à la rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer automatiquement les produits à faible volume', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que tous les produits auront la même marge', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer l’analyse des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le lien entre prix, coût et marge ?', 
                        'explanation' => 'La marge correspond à la différence entre le prix de vente et le coût pertinent retenu.',
                        'choices' => [
                            ['choice_text' => 'La marge dépend du prix de vente et des coûts retenus pour l’analyse', 'is_correct' => true],
                            ['choice_text' => 'La marge dépend uniquement du volume', 'is_correct' => false],
                            ['choice_text' => 'La marge est toujours égale au prix', 'is_correct' => false],
                            ['choice_text' => 'La marge ne dépend jamais des coûts', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Budgets de base',
                'description' => 'Découvrez les principes de préparation, suivi et analyse des budgets.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un budget ?', 
                        'explanation' => 'Un budget est un plan chiffré représentant les ressources et activités prévues sur une période.',
                        'choices' => [
                            ['choice_text' => 'Un plan chiffré des ressources et activités prévues pour une période', 'is_correct' => true],
                            ['choice_text' => 'Un bilan historique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une facture fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un relevé bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise prépare-t-elle un budget ?', 
                        'explanation' => 'Le budget aide à planifier les ressources, coordonner les actions et contrôler les résultats.',
                        'choices' => [
                            ['choice_text' => 'Pour planifier les ressources et suivre la performance future', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir les ventes futures', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la comptabilité financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un budget des ventes ?', 
                        'explanation' => 'Il prévoit les quantités et revenus commerciaux attendus sur une période.',
                        'choices' => [
                            ['choice_text' => 'Une prévision des quantités vendues et des revenus attendus', 'is_correct' => true],
                            ['choice_text' => 'Une prévision uniquement des salaires', 'is_correct' => false],
                            ['choice_text' => 'Une liste des actifs fixes', 'is_correct' => false],
                            ['choice_text' => 'Un état des dettes historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le budget des ventes est-il souvent utilisé comme point de départ ?', 
                        'explanation' => 'Les prévisions de ventes influencent les besoins de production, d’achats, de personnel et de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ventes influencent de nombreux autres besoins opérationnels', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ventes représentent toutes les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un budget ne peut contenir que des revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne dépendent jamais de l’activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les résultats réels avec le budget ?', 
                        'explanation' => 'Cette comparaison permet d’identifier et d’expliquer les écarts.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les écarts et comprendre leurs causes', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre le réel identique au budget', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le budget', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que toutes les prévisions sont exactes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un écart budgétaire ?', 
                        'explanation' => 'C’est la différence entre le montant réel et le montant budgété.',
                        'choices' => [
                            ['choice_text' => 'La différence entre un résultat réel et le montant prévu au budget', 'is_correct' => true],
                            ['choice_text' => 'La différence entre deux banques', 'is_correct' => false],
                            ['choice_text' => 'Une différence uniquement entre actifs et passifs', 'is_correct' => false],
                            ['choice_text' => 'Une différence entre deux produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un écart budgétaire n’est-il pas automatiquement mauvais ?', 
                        'explanation' => 'Un écart peut provenir d’une évolution favorable, défavorable ou d’un changement de circonstances.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il doit être interprété selon sa cause et son effet économique', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les écarts sont favorables', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un budget n’est jamais utile', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un écart signifie toujours une erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un budget doit-il parfois être révisé ?', 
                        'explanation' => 'Des changements importants dans les ventes, coûts ou conditions économiques peuvent rendre les hypothèses initiales moins pertinentes.',
                        'choices' => [
                            ['choice_text' => 'Parce que les conditions réelles peuvent changer les hypothèses de départ', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un budget doit toujours être modifié chaque semaine', 'is_correct' => false],
                            ['choice_text' => 'Parce que les budgets sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats réels doivent être ignorés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les budgets facilitent-ils la coordination entre services ?', 
                        'explanation' => 'Les différents services peuvent planifier leurs besoins en fonction d’hypothèses communes.',
                        'choices' => [
                            ['choice_text' => 'Ils donnent un cadre commun pour planifier les ressources et activités', 'is_correct' => true],
                            ['choice_text' => 'Ils empêchent les services de communiquer', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toutes les décisions des managers', 'is_correct' => false],
                            ['choice_text' => 'Ils déterminent automatiquement les résultats futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle essentiel d’un budget pour le management ?', 
                        'explanation' => 'Le budget sert de référence pour planifier les actions et contrôler la performance.',
                        'choices' => [
                            ['choice_text' => 'Servir de référence pour planifier, coordonner et contrôler', 'is_correct' => true],
                            ['choice_text' => 'Garantir les résultats futurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le suivi réel', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tous les risques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Seuil de rentabilité',
                'description' => 'Découvrez les notions élémentaires de seuil de rentabilité et de point mort.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le seuil de rentabilité ?', 
                        'explanation' => 'C’est le niveau d’activité où les produits couvrent les coûts retenus et où le résultat est nul.',
                        'choices' => [
                            ['choice_text' => 'Le niveau d’activité où les recettes couvrent les coûts et où le résultat est nul', 'is_correct' => true],
                            ['choice_text' => 'Le niveau où le bénéfice est maximal', 'is_correct' => false],
                            ['choice_text' => 'Le niveau où toutes les charges disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Le montant des ventes le plus élevé possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le seuil de rentabilité est-il utile ?', 
                        'explanation' => 'Il permet de déterminer le niveau minimum d’activité nécessaire pour couvrir les coûts.',
                        'choices' => [
                            ['choice_text' => 'Pour connaître le niveau minimum d’activité nécessaire pour couvrir les coûts', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir un bénéfice maximal', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les dettes', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le taux d’impôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’appelle-t-on généralement la marge sur coût variable ?', 
                        'explanation' => 'Elle correspond à la différence entre le chiffre d’affaires et les coûts variables.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d’affaires diminué des coûts variables', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires diminué uniquement des coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Les coûts fixes moins les coûts variables', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice net plus les stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend une unité 40 € et supporte 25 € de coût variable unitaire. Quelle est sa marge sur coût variable unitaire ?', 
                        'explanation' => '40 € - 25 € = 15 €.',
                        'choices' => [
                            ['choice_text' => '15 €', 'is_correct' => true],
                            ['choice_text' => '25 €', 'is_correct' => false],
                            ['choice_text' => '40 €', 'is_correct' => false],
                            ['choice_text' => '65 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les coûts fixes augmentent alors que le prix et le coût variable unitaire restent constants, quel effet général peut apparaître sur le seuil de rentabilité ?', 
                        'explanation' => 'Davantage de marge sur coût variable est nécessaire pour couvrir des coûts fixes plus élevés.',
                        'choices' => [
                            ['choice_text' => 'Le seuil de rentabilité augmente généralement', 'is_correct' => true],
                            ['choice_text' => 'Le seuil de rentabilité diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Le seuil devient automatiquement nul', 'is_correct' => false],
                            ['choice_text' => 'Le seuil ne dépend jamais des coûts fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation de la marge sur coût variable peut-elle réduire le seuil de rentabilité ?', 
                        'explanation' => 'Une marge unitaire plus élevée permet de couvrir les coûts fixes avec moins d’unités.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque unité contribue davantage à la couverture des coûts fixes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes deviennent nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables deviennent fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 30 000 € de coûts fixes et une marge sur coût variable de 10 € par unité. Quel est le seuil de rentabilité en unités ?', 
                        'explanation' => '30 000 € ÷ 10 € = 3 000 unités.',
                        'choices' => [
                            ['choice_text' => '3 000 unités', 'is_correct' => true],
                            ['choice_text' => '300 unités', 'is_correct' => false],
                            ['choice_text' => '30 000 unités', 'is_correct' => false],
                            ['choice_text' => '10 000 unités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le seuil de rentabilité est-il sensible au prix de vente ?', 
                        'explanation' => 'Le prix influence directement la marge disponible pour couvrir les coûts fixes.',
                        'choices' => [
                            ['choice_text' => 'Parce que le prix influence la marge sur coût variable par unité', 'is_correct' => true],
                            ['choice_text' => 'Parce que le prix ne concerne que les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix ne change jamais la contribution par unité', 'is_correct' => false],
                            ['choice_text' => 'Parce que le seuil dépend uniquement des salaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse du coût variable unitaire peut-elle améliorer le seuil de rentabilité ?', 'explanation' => 'Une baisse du coût variable augmente la marge sur coût variable, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Elle peut augmenter la marge sur coût variable par unité', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement le prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la nécessité de vendre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume l’intérêt du seuil de rentabilité ?', 
                        'explanation' => 'Il permet d’évaluer le niveau d’activité nécessaire avant de commencer à générer un résultat positif.',
                        'choices' => [
                            ['choice_text' => 'Il indique le niveau d’activité à partir duquel l’entreprise peut commencer à générer un bénéfice', 'is_correct' => true],
                            ['choice_text' => 'Il indique toujours le niveau de bénéfice maximal', 'is_correct' => false],
                            ['choice_text' => 'Il remplace tous les budgets', 'is_correct' => false],
                            ['choice_text' => 'Il garantit que l’entreprise sera rentable', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Décisions simples de court terme',
                'description' => 'Appliquez les coûts pertinents à des décisions opérationnelles simples.',
                'questions' => [
                    [
                        'question' => 'Pourquoi tous les coûts comptables ne sont-ils pas nécessairement pertinents pour une décision à court terme ?', 
                        'explanation' => 'Une décision doit se concentrer sur les coûts et revenus qui changent réellement entre les alternatives.',
                        'choices' => [
                            ['choice_text' => 'Parce que certains coûts ne changent pas selon l’option choisie', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts comptables sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes n’existent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que les décisions ne nécessitent aucune donnée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut fabriquer un composant pour 18 € ou l’acheter pour 15 €. Quel élément faut-il considérer avant de conclure qu’il faut acheter ?', 
                        'explanation' => 'Il faut examiner les coûts évitables de fabrication et l’utilisation alternative éventuelle de la capacité.',
                        'choices' => [
                            ['choice_text' => 'Les coûts réellement évitables et les éventuelles utilisations alternatives de la capacité', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le coût comptable total actuel', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le chiffre d’affaires de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût pertinent pour une décision ?', 
                        'explanation' => 'C’est un coût futur qui diffère selon les alternatives considérées.',
                        'choices' => [
                            ['choice_text' => 'Un coût futur qui diffère entre les options envisagées', 'is_correct' => true],
                            ['choice_text' => 'Tout coût enregistré dans le passé', 'is_correct' => false],
                            ['choice_text' => 'Tout coût fixe sans exception', 'is_correct' => false],
                            ['choice_text' => 'Tout coût qui ne changera jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un coût déjà engagé peut-il être non pertinent pour une nouvelle décision ?', 
                        'explanation' => 'Un coût déjà engagé ne change pas selon l’alternative future.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il est déjà engagé et ne sera pas modifié par la décision future', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il n’a aucune valeur comptable', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il devient automatiquement un revenu', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est toujours nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’opportunité peut-il être pertinent dans une décision ?', 
                        'explanation' => 'Utiliser une ressource pour une option peut empêcher de l’utiliser de manière plus rentable ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une ressource utilisée pour une option peut empêcher un autre usage avantageux', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il s’agit toujours d’une charge comptable enregistrée', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est toujours égal au prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il n’a jamais de valeur économique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dispose d’une capacité de production inutilisée. Quel élément peut être particulièrement pertinent lorsqu’elle reçoit une commande spéciale ?', 
                        'explanation' => 'Lorsque la capacité est disponible, les coûts supplémentaires associés à la commande peuvent être déterminants.',
                        'choices' => [
                            ['choice_text' => 'Les coûts supplémentaires liés à la commande et son effet sur la marge', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les coûts fixes déjà engagés', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le chiffre d’affaires historique', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une commande spéciale à prix inférieur au prix habituel peut-elle parfois être acceptée ?', 
                        'explanation' => 'Une commande peut être intéressante si elle apporte une contribution positive sans perturber les ventes habituelles.',
                        'choices' => [
                            ['choice_text' => 'Si elle couvre les coûts pertinents et apporte une contribution positive sans effet négatif majeur', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un prix faible est toujours meilleur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes deviennent automatiquement nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute commande est toujours rentable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision de fermeture d’un service ne doit-elle pas se baser uniquement sur ses coûts attribués ?', 
                        'explanation' => 'Une partie des coûts attribués peut continuer après la fermeture et ne serait donc pas économisée.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut identifier les coûts qui disparaîtraient réellement après la fermeture', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les coûts attribués disparaissent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts indirects sont toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité ne dépend jamais des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets qualitatifs doivent-ils parfois compléter l’analyse chiffrée ?', 
                        'explanation' => 'La qualité, la réputation, la satisfaction client ou les compétences peuvent influencer la décision.',
                        'choices' => [
                            ['choice_text' => 'Parce que certains impacts importants ne sont pas directement mesurés par les coûts', 'is_correct' => true],
                            ['choice_text' => 'Parce que les chiffres sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne doivent jamais être comparés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les décisions financières sont uniquement qualitatives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne décision de court terme ?', 
                        'explanation' => 'Il faut comparer les effets futurs qui changent réellement entre les alternatives et considérer les facteurs qualitatifs importants.',
                        'choices' => [
                            ['choice_text' => 'Comparer les revenus et coûts futurs pertinents en tenant compte des conséquences qualitatives', 'is_correct' => true],
                            ['choice_text' => 'Comparer uniquement tous les coûts historiques', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours l’option au prix le plus bas', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les ressources limitées', 'is_correct' => false],
                        ],
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
                    'duration' => 20,
                    'passing_score' => 70,
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