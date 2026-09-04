```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicsFundamentalsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economics-fundamentals')
            ->firstOrFail();

        $quizzes = [

            [
                'title' => 'Élasticité et comportement de la demande',
                'questions' => [
                    ['q' => 'Que mesure l’élasticité-prix de la demande ?', 'a' => [
                        ['v' => 'La sensibilité de la quantité demandée à une variation du prix', 'c' => true],
                        ['v' => 'La sensibilité de l’offre à une variation du revenu', 'c' => false],
                        ['v' => 'La variation du PIB réel', 'c' => false],
                        ['v' => 'La variation du taux de chômage', 'c' => false],
                    ]],
                    ['q' => 'Si la demande est élastique, une baisse du prix tend généralement à provoquer quoi ?', 'a' => [
                        ['v' => 'Une hausse proportionnellement plus importante de la quantité demandée', 'c' => true],
                        ['v' => 'Une baisse de la quantité demandée', 'c' => false],
                        ['v' => Aucun changement de la quantité demandée', 'c' => false],
                        ['v' => 'Une disparition de l’offre', 'c' => false],
                    ]],
                    ['q' => 'Une demande dont l’élasticité-prix en valeur absolue est inférieure à 1 est dite :', 'a' => [
                        ['v' => 'Inélastique', 'c' => true],
                        ['v' => 'Parfaitement élastique', 'c' => false],
                        ['v' => 'Unitaire', 'c' => false],
                        ['v' => 'Parfaitement inélastique', 'c' => false],
                    ]],
                    ['q' => 'Quel type de bien possède généralement une demande plus sensible au revenu ?', 'a' => [
                        ['v' => 'Un bien supérieur ou de luxe', 'c' => true],
                        ['v' => 'Un bien totalement gratuit', 'c' => false],
                        ['v' => 'Un bien sans substitut uniquement', 'c' => false],
                        ['v' => 'Une monnaie nationale', 'c' => false],
                    ]],
                    ['q' => 'Deux biens sont dits substituables lorsque :', 'a' => [
                        ['v' => 'Une hausse du prix de l’un peut augmenter la demande de l’autre', 'c' => true],
                        ['v' => 'Ils doivent toujours être consommés ensemble', 'c' => false],
                        ['v' => 'Ils ont nécessairement le même prix', 'c' => false],
                        ['v' => 'Ils sont produits par la même entreprise', 'c' => false],
                    ]],
                    ['q' => 'Deux biens complémentaires sont généralement consommés :', 'a' => [
                        ['v' => 'En association l’un avec l’autre', 'c' => true],
                        ['v' => 'Comme des substituts parfaits', 'c' => false],
                        ['v' => 'Uniquement lorsque leurs prix sont identiques', 'c' => false],
                        ['v' => 'Indépendamment de toute préférence', 'c' => false],
                    ]],
                    ['q' => 'Si le revenu augmente et que la demande d’un bien diminue, ce bien peut être :', 'a' => [
                        ['v' => 'Un bien inférieur', 'c' => true],
                        ['v' => 'Un bien normal', 'c' => false],
                        ['v' => 'Un bien complémentaire par définition', 'c' => false],
                        ['v' => 'Un bien parfaitement élastique', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi les biens ayant beaucoup de substituts ont-ils souvent une demande plus élastique ?', 'a' => [
                        ['v' => 'Les consommateurs peuvent facilement se tourner vers d’autres produits lorsque le prix change', 'c' => true],
                        ['v' => 'Ils sont toujours indispensables', 'c' => false],
                        ['v' => 'Leur production est toujours nulle', 'c' => false],
                        ['v' => 'Leur prix ne varie jamais', 'c' => false],
                    ]],
                    ['q' => 'À long terme, la demande est souvent plus élastique parce que :', 'a' => [
                        ['v' => 'Les consommateurs disposent de davantage de temps pour adapter leur comportement', 'c' => true],
                        ['v' => 'Les prix deviennent nécessairement fixes', 'c' => false],
                        ['v' => 'Les revenus deviennent illimités', 'c' => false],
                        ['v' => 'Les substituts disparaissent', 'c' => false],
                    ]],
                    ['q' => 'Lorsque la demande est inélastique, une hausse du prix tend généralement à :', 'a' => [
                        ['v' => 'Augmenter la recette totale du vendeur', 'c' => true],
                        ['v' => 'Réduire nécessairement la recette totale à zéro', 'c' => false],
                        ['v' => 'Ne modifier aucunement la recette', 'c' => false],
                        ['v' => 'Supprimer la demande', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Élasticité et comportement de l’offre',
                'questions' => [
                    ['q' => 'Que mesure l’élasticité-prix de l’offre ?', 'a' => [
                        ['v' => 'La sensibilité de la quantité offerte à une variation du prix', 'c' => true],
                        ['v' => 'La sensibilité de la demande au revenu', 'c' => false],
                        ['v' => 'Le niveau général des prix', 'c' => false],
                        ['v' => 'La croissance du PIB', 'c' => false],
                    ]],
                    ['q' => 'L’offre est dite élastique lorsque :', 'a' => [
                        ['v' => 'La quantité offerte varie proportionnellement davantage que le prix', 'c' => true],
                        ['v' => 'La quantité offerte ne varie jamais', 'c' => false],
                        ['v' => 'Le prix ne varie jamais', 'c' => false],
                        ['v' => 'La demande est nécessairement élastique', 'c' => false],
                    ]],
                    ['q' => 'Quel facteur peut rendre l’offre plus élastique à court terme ?', 'a' => [
                        ['v' => 'Une grande capacité inutilisée permettant d’augmenter rapidement la production', 'c' => true],
                        ['v' => 'Une capacité de production totalement fixe', 'c' => false],
                        ['v' => 'Une absence totale de travailleurs', 'c' => false],
                        ['v' => 'Une disparition de la demande', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi l’offre peut-elle devenir plus élastique à long terme ?', 'a' => [
                        ['v' => 'Les producteurs disposent de davantage de temps pour modifier leurs capacités de production', 'c' => true],
                        ['v' => 'Les entreprises perdent toute capacité d’adaptation', 'c' => false],
                        ['v' => 'Les prix deviennent nécessairement constants', 'c' => false],
                        ['v' => 'Les consommateurs cessent d’acheter', 'c' => false],
                    ]],
                    ['q' => 'Une taxe sur les producteurs peut généralement :', 'a' => [
                        ['v' => 'Augmenter le coût de production et déplacer l’offre vers la gauche', 'c' => true],
                        ['v' => 'Augmenter automatiquement la demande', 'c' => false],
                        ['v' => 'Supprimer les coûts de production', 'c' => false],
                        ['v' => 'Rendre l’offre parfaitement élastique', 'c' => false],
                    ]],
                    ['q' => 'Une subvention à la production peut généralement :', 'a' => [
                        ['v' => 'Réduire le coût effectif de production et stimuler l’offre', 'c' => true],
                        ['v' => 'Réduire automatiquement la demande', 'c' => false],
                        ['v' => 'Supprimer les producteurs', 'c' => false],
                        ['v' => 'Faire disparaître le marché', 'c' => false],
                    ]],
                    ['q' => 'Si les coûts des matières premières augmentent, toutes choses égales par ailleurs :', 'a' => [
                        ['v' => 'L’offre tend à diminuer', 'c' => true],
                        ['v' => 'L’offre tend nécessairement à augmenter', 'c' => false],
                        ['v' => 'La demande disparaît', 'c' => false],
                        ['v' => 'Le revenu des consommateurs double', 'c' => false],
                    ]],
                    ['q' => 'Une technologie plus productive peut :', 'a' => [
                        ['v' => 'Réduire le coût unitaire et augmenter la capacité d’offre', 'c' => true],
                        ['v' => 'Réduire nécessairement la productivité', 'c' => false],
                        ['v' => 'Supprimer toute demande', 'c' => false],
                        ['v' => 'Empêcher toute spécialisation', 'c' => false],
                    ]],
                    ['q' => 'Une offre parfaitement inélastique signifie que :', 'a' => [
                        ['v' => 'La quantité offerte ne réagit pas au prix', 'c' => true],
                        ['v' => 'Le prix ne peut jamais changer', 'c' => false],
                        ['v' => 'La demande est nulle', 'c' => false],
                        ['v' => 'La quantité offerte augmente infiniment avec le prix', 'c' => false],
                    ]],
                    ['q' => 'L’incidence économique d’une taxe dépend notamment :', 'a' => [
                        ['v' => 'Des élasticités relatives de l’offre et de la demande', 'c' => true],
                        ['v' => 'Uniquement du nombre de banques', 'c' => false],
                        ['v' => 'Uniquement du PIB nominal', 'c' => false],
                        ['v' => 'Uniquement de la monnaie utilisée', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Coûts, revenus et décisions de l’entreprise',
                'questions' => [
                    ['q' => 'Qu’est-ce qu’un coût fixe ?', 'a' => [
                        ['v' => 'Un coût qui ne varie pas avec la quantité produite à court terme', 'c' => true],
                        ['v' => 'Un coût qui augmente toujours avec chaque unité produite', 'c' => false],
                        ['v' => 'Un revenu de l’entreprise', 'c' => false],
                        ['v' => 'Un coût exclusivement variable', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’un coût variable ?', 'a' => [
                        ['v' => 'Un coût qui varie avec le niveau de production', 'c' => true],
                        ['v' => 'Un coût toujours indépendant de la production', 'c' => false],
                        ['v' => Uniquement le coût du capital financier', 'c' => false],
                        ['v' => 'Le chiffre d’affaires', 'c' => false],
                    ]],
                    ['q' => 'Le coût total est égal à :', 'a' => [
                        ['v' => 'La somme des coûts fixes et des coûts variables', 'c' => true],
                        ['v' => 'La différence entre recettes et profits', 'c' => false],
                        ['v' => 'Uniquement les coûts variables', 'c' => false],
                        ['v' => 'Uniquement les coûts fixes', 'c' => false],
                    ]],
                    ['q' => 'Le coût moyen correspond à :', 'a' => [
                        ['v' => 'Le coût total divisé par la quantité produite', 'c' => true],
                        ['v' => 'Le coût fixe multiplié par la quantité', 'c' => false],
                        ['v' => 'Le chiffre d’affaires divisé par le profit', 'c' => false],
                        ['v' => 'Le prix moins le coût marginal', 'c' => false],
                    ]],
                    ['q' => 'Le coût marginal mesure :', 'a' => [
                        ['v' => 'Le coût supplémentaire associé à la production d’une unité supplémentaire', 'c' => true],
                        ['v' => 'Le coût total de toutes les unités', 'c' => false],
                        ['v' => 'Le revenu moyen', 'c' => false],
                        ['v' => 'Le profit total', 'c' => false],
                    ]],
                    ['q' => 'Le revenu total d’une entreprise est généralement calculé comme :', 'a' => [
                        ['v' => 'Prix multiplié par quantité vendue', 'c' => true],
                        ['v' => 'Coût fixe moins coût variable', 'c' => false],
                        ['v' => 'Profit multiplié par prix', 'c' => false],
                        ['v' => 'Salaire multiplié par impôt', 'c' => false],
                    ]],
                    ['q' => 'Le profit économique correspond à :', 'a' => [
                        ['v' => 'La différence entre les recettes totales et l’ensemble des coûts économiques', 'c' => true],
                        ['v' => 'Uniquement le chiffre d’affaires', 'c' => false],
                        ['v' => 'Uniquement les coûts fixes', 'c' => false],
                        ['v' => 'La somme des salaires', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’une économie d’échelle ?', 'a' => [
                        ['v' => 'Une baisse du coût moyen lorsque l’échelle de production augmente', 'c' => true],
                        ['v' => 'Une hausse automatique du coût moyen avec la production', 'c' => false],
                        ['v' => 'Une diminution de la production', 'c' => false],
                        ['v' => 'Une baisse du prix de vente imposée par l’État', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi une entreprise compare-t-elle le coût marginal au revenu marginal ?', 'a' => [
                        ['v' => 'Pour déterminer si produire une unité supplémentaire augmente ou réduit le profit', 'c' => true],
                        ['v' => 'Pour calculer directement le PIB national', 'c' => false],
                        ['v' => 'Pour mesurer l’inflation', 'c' => false],
                        ['v' => 'Pour déterminer le taux de chômage', 'c' => false],
                    ]],
                    ['q' => 'Dans un modèle simple de maximisation du profit, l’entreprise produit jusqu’au point où :', 'a' => [
                        ['v' => 'Le revenu marginal est égal au coût marginal', 'c' => true],
                        ['v' => 'Le coût fixe est égal à zéro', 'c' => false],
                        ['v' => 'Le prix est toujours égal au coût fixe', 'c' => false],
                        ['v' => 'Le revenu total est nul', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Structures de marché et pouvoir de marché',
                'questions' => [
                    ['q' => 'Dans un marché parfaitement concurrentiel, une entreprise individuelle est généralement :', 'a' => [
                        ['v' => 'Preneur de prix', 'c' => true],
                        ['v' => 'Fixeur de prix absolu', 'c' => false],
                        ['v' => 'Monopole national', 'c' => false],
                        ['v' => 'Contrôleur de la demande', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi un monopole peut-il exercer un pouvoir de marché ?', 'a' => [
                        ['v' => 'Parce qu’il est le seul vendeur et fait face à des barrières protégeant sa position', 'c' => true],
                        ['v' => 'Parce qu’il existe toujours une infinité de concurrents', 'c' => false],
                        ['v' => 'Parce que les consommateurs fixent tous les prix', 'c' => false],
                        ['v' => 'Parce que son coût marginal est toujours nul', 'c' => false],
                    ]],
                    ['q' => 'Dans un monopole, le prix est généralement :', 'a' => [
                        ['v' => 'Supérieur au coût marginal à l’optimum de profit dans le modèle standard', 'c' => true],
                        ['v' => 'Toujours égal au coût marginal', 'c' => false],
                        ['v' => 'Toujours inférieur au coût variable', 'c' => false],
                        ['v' => 'Nécessairement nul', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que la concurrence monopolistique ?', 'a' => [
                        ['v' => 'Une structure avec plusieurs entreprises proposant des produits différenciés', 'c' => true],
                        ['v' => 'Un marché avec un seul vendeur', 'c' => false],
                        ['v' => 'Un marché sans différenciation', 'c' => false],
                        ['v' => 'Un marché contrôlé uniquement par l’État', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi la différenciation des produits donne-t-elle un certain pouvoir de marché ?', 'a' => [
                        ['v' => 'Elle rend les produits moins parfaitement substituables aux yeux des consommateurs', 'c' => true],
                        ['v' => 'Elle supprime toute préférence', 'c' => false],
                        ['v' => 'Elle rend tous les prix identiques', 'c' => false],
                        ['v' => 'Elle élimine toutes les entreprises', 'c' => false],
                    ]],
                    ['q' => 'Dans un oligopole, les entreprises doivent souvent tenir compte :', 'a' => [
                        ['v' => 'Des réactions possibles de leurs concurrents', 'c' => true],
                        ['v' => 'Uniquement des décisions du gouvernement', 'c' => false],
                        ['v' => 'Uniquement du revenu des ménages', 'c' => false],
                        ['v' => 'Uniquement du marché du travail', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’une collusion ?', 'a' => [
                        ['v' => 'Une coordination entre entreprises visant notamment à influencer les prix ou les quantités', 'c' => true],
                        ['v' => 'Une baisse naturelle des coûts', 'c' => false],
                        ['v' => 'Une concurrence parfaite', 'c' => false],
                        ['v' => 'Une décision individuelle du consommateur', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi la collusion peut-elle être interdite ?', 'a' => [
                        ['v' => 'Elle peut réduire la concurrence et nuire aux consommateurs', 'c' => true],
                        ['v' => 'Elle garantit toujours des prix plus bas', 'c' => false],
                        ['v' => 'Elle augmente toujours la concurrence', 'c' => false],
                        ['v' => 'Elle élimine les barrières à l’entrée', 'c' => false],
                    ]],
                    ['q' => 'Une barrière à l’entrée élevée peut permettre à une entreprise dominante de :', 'a' => [
                        ['v' => Maintenir plus facilement son pouvoir de marché', 'c' => true],
                        ['v' => 'Perdre automatiquement tous ses clients', 'c' => false],
                        ['v' => 'Réduire nécessairement ses profits à zéro', 'c' => false],
                        ['v' => 'Supprimer toute demande', 'c' => false],
                    ]],
                    ['q' => 'Quel est un objectif essentiel de la politique de concurrence ?', 'a' => [
                        ['v' => 'Empêcher les comportements qui réduisent injustement la concurrence et protéger le fonctionnement du marché', 'c' => true],
                        ['v' => 'Garantir un monopole à chaque entreprise', 'c' => false],
                        ['v' => 'Interdire toute fusion d’entreprises', 'c' => false],
                        ['v' => 'Fixer tous les prix de l’économie', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Externalités et biens publics',
                'questions' => [
                    ['q' => 'Qu’est-ce qu’une externalité négative ?', 'a' => [
                        ['v' => 'Un coût imposé à des tiers qui n’est pas entièrement pris en compte par le producteur ou le consommateur', 'c' => true],
                        ['v' => 'Un bénéfice privé uniquement', 'c' => false],
                        ['v' => 'Une hausse du salaire réel', 'c' => false],
                        ['v' => 'Une baisse volontaire de la production', 'c' => false],
                    ]],
                    ['q' => 'Quel exemple illustre une externalité négative ?', 'a' => [
                        ['v' => La pollution générée par une usine et subie par les riverains', 'c' => true],
                        ['v' => 'Un achat volontaire effectué par un consommateur', 'c' => false],
                        ['v' => 'Un salaire versé à un employé', 'c' => false],
                        ['v' => 'Une épargne personnelle', 'c' => false],
                    ]],
                    ['q' => 'Une externalité positive correspond à :', 'a' => [
                        ['v' => 'Un bénéfice pour des tiers qui n’est pas entièrement rémunéré par le marché', 'c' => true],
                        ['v' => 'Un coût privé uniquement', 'c' => false],
                        ['v' => 'Une perte obligatoire pour tous les producteurs', 'c' => false],
                        ['v' => 'Une taxe sur les importations', 'c' => false],
                    ]],
                    ['q' => 'Quel exemple peut représenter une externalité positive ?', 'a' => [
                        ['v' => La vaccination qui réduit aussi le risque de transmission à d’autres personnes', 'c' => true],
                        ['v' => 'La pollution industrielle', 'c' => false],
                        ['v' => 'La congestion routière', 'c' => false],
                        ['v' => 'Une hausse du coût des matières premières', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi une externalité négative peut-elle conduire à une surproduction ?', 'a' => [
                        ['v' => 'Le producteur ne supporte pas nécessairement l’intégralité du coût social de sa production', 'c' => true],
                        ['v' => 'Le coût social est toujours nul', 'c' => false],
                        ['v' => 'La demande est toujours inexistante', 'c' => false],
                        ['v' => 'Les consommateurs ne tiennent jamais compte des prix', 'c' => false],
                    ]],
                    ['q' => 'Quel instrument peut être utilisé pour réduire une externalité négative ?', 'a' => [
                        ['v' => 'Une taxe corrective visant à rapprocher le coût privé du coût social', 'c' => true],
                        ['v' => 'Une subvention systématique à la pollution', 'c' => false],
                        ['v' => 'Une suppression de toute réglementation', 'c' => false],
                        ['v' => 'Une interdiction de toute activité économique', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’un bien public dans la définition économique classique ?', 'a' => [
                        ['v' => 'Un bien non rival et non excluable', 'c' => true],
                        ['v' => 'Un bien toujours produit par une entreprise privée', 'c' => false],
                        ['v' => 'Un bien réservé aux ménages riches', 'c' => false],
                        ['v' => 'Un bien nécessairement vendu sur un marché', 'c' => false],
                    ]],
                    ['q' => 'Que signifie la non-rivalité ?', 'a' => [
                        ['v' => 'La consommation par une personne ne réduit pas nécessairement la quantité disponible pour les autres', 'c' => true],
                        ['v' => 'Une seule personne peut consommer le bien', 'c' => false],
                        ['v' => Le bien est toujours gratuit', 'c' => false],
                        ['v' => 'Le bien ne possède aucune valeur', 'c' => false],
                    ]],
                    ['q' => 'Que signifie la non-excluabilité ?', 'a' => [
                        ['v' => 'Il est difficile ou coûteux d’empêcher les personnes d’utiliser le bien', 'c' => true],
                        ['v' => 'Seul le producteur peut utiliser le bien', 'c' => false],
                        ['v' => 'Le bien est toujours vendu à prix élevé', 'c' => false],
                        ['v' => 'Le bien ne peut être produit', 'c' => false],
                    ]],
                    ['q' => 'Quel problème est associé au comportement de passager clandestin ?', 'a' => [
                        ['v' => 'Certaines personnes peuvent bénéficier d’un bien public sans contribuer volontairement à son financement', 'c' => true],
                        ['v' => 'Les consommateurs paient toujours trop cher', 'c' => false],
                        ['v' => 'Les producteurs ne peuvent jamais produire', 'c' => false],
                        ['v' => 'Les biens privés deviennent automatiquement publics', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Marché du travail et salaires',
                'questions' => [
                    ['q' => 'Sur le marché du travail, l’offre de travail provient principalement :', 'a' => [
                        ['v' => 'Des personnes qui proposent leur force de travail', 'c' => true],
                        ['v' => 'Des entreprises qui recrutent', 'c' => false],
                        ['v' => 'Des banques centrales', 'c' => false],
                        ['v' => 'Des gouvernements étrangers', 'c' => false],
                    ]],
                    ['q' => 'La demande de travail provient principalement :', 'a' => [
                        ['v' => 'Des entreprises et autres employeurs qui souhaitent embaucher', 'c' => true],
                        ['v' => 'Des ménages uniquement', 'c' => false],
                        ['v' => 'Des banques commerciales uniquement', 'c' => false],
                        ['v' => 'Des consommateurs étrangers uniquement', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi dit-on que la demande de travail est une demande dérivée ?', 'a' => [
                        ['v' => 'Parce qu’elle dépend notamment de la demande pour les biens et services produits grâce au travail', 'c' => true],
                        ['v' => 'Parce qu’elle est indépendante de la production', 'c' => false],
                        ['v' => 'Parce qu’elle est déterminée uniquement par les syndicats', 'c' => false],
                        ['v' => 'Parce qu’elle ne dépend jamais des salaires', 'c' => false],
                    ]],
                    ['q' => 'Une hausse de la productivité du travail peut généralement :', 'a' => [
                        ['v' => 'Augmenter la demande de travail si elle accroît la valeur de la production marginale', 'c' => true],
                        ['v' => 'Réduire nécessairement la demande de travail à zéro', 'c' => false],
                        ['v' => 'Supprimer les salaires', 'c' => false],
                        ['v' => 'Réduire automatiquement le PIB', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’un salaire minimum ?', 'a' => [
                        ['v' => 'Un niveau légal minimal de rémunération du travail', 'c' => true],
                        ['v' => 'Le salaire moyen national', 'c' => false],
                        ['v' => 'Le salaire maximal autorisé', 'c' => false],
                        ['v' => 'Un impôt sur les entreprises', 'c' => false],
                    ]],
                    ['q' => 'Si un salaire minimum est fixé au-dessus du salaire d’équilibre dans un modèle concurrentiel simple, il peut provoquer :', 'a' => [
                        ['v' => 'Un excédent d’offre de travail, c’est-à-dire du chômage', 'c' => true],
                        ['v' => 'Une pénurie automatique de travailleurs', 'c' => false],
                        ['v' => 'Une disparition de la demande de biens', 'c' => false],
                        ['v' => 'Une hausse certaine de tous les salaires', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que le capital humain ?', 'a' => [
                        ['v' => 'L’ensemble des connaissances, compétences et capacités productives accumulées par une personne', 'c' => true],
                        ['v' => 'Uniquement les machines d’une entreprise', 'c' => false],
                        ['v' => 'Uniquement les ressources naturelles', 'c' => false],
                        ['v' => 'La monnaie détenue par les ménages', 'c' => false],
                    ]],
                    ['q' => 'Comment l’éducation peut-elle influencer les revenus du travail ?', 'a' => [
                        ['v' => 'Elle peut accroître le capital humain et la productivité, ce qui peut augmenter les revenus', 'c' => true],
                        ['v' => 'Elle réduit nécessairement la productivité', 'c' => false],
                        ['v' => 'Elle supprime toujours les différences salariales', 'c' => false],
                        ['v' => 'Elle garantit automatiquement un emploi', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que le chômage frictionnel ?', 'a' => [
                        ['v' => 'Le chômage lié notamment aux périodes de transition entre emplois ou à la recherche d’un emploi', 'c' => true],
                        ['v' => 'Le chômage causé exclusivement par une récession', 'c' => false],
                        ['v' => 'Le chômage dû uniquement aux machines', 'c' => false],
                        ['v' => 'Le chômage qui n’existe que dans les monopoles', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que le chômage cyclique ?', 'a' => [
                        ['v' => 'Le chômage associé aux fluctuations de l’activité économique', 'c' => true],
                        ['v' => 'Le chômage lié uniquement à la mobilité professionnelle', 'c' => false],
                        ['v' => 'Le chômage volontaire uniquement', 'c' => false],
                        ['v' => 'Le chômage causé exclusivement par l’éducation', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'PIB, croissance et fluctuations économiques',
                'questions' => [
                    ['q' => 'Pourquoi distingue-t-on PIB nominal et PIB réel ?', 'a' => [
                        ['v' => 'Le PIB réel corrige l’effet des variations de prix afin de mieux mesurer l’évolution de la production', 'c' => true],
                        ['v' => 'Le PIB nominal ne contient jamais de prix', 'c' => false],
                        ['v' => 'Le PIB réel mesure uniquement les importations', 'c' => false],
                        ['v' => 'Le PIB nominal mesure uniquement le chômage', 'c' => false],
                    ]],
                    ['q' => 'Une hausse du PIB nominal peut être due à :', 'a' => [
                        ['v' => Une hausse des quantités produites, des prix, ou des deux', 'c' => true],
                        ['v' => 'Uniquement une hausse des quantités', 'c' => false],
                        ['v' => 'Uniquement une baisse des prix', 'c' => false],
                        ['v' => 'Uniquement une hausse du chômage', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que le PIB potentiel ?', 'a' => [
                        ['v' => 'Une estimation de la production soutenable lorsque les ressources sont utilisées à un niveau compatible avec la stabilité macroéconomique', 'c' => true],
                        ['v' => 'Le PIB maximal théorique sans aucune contrainte', 'c' => false],
                        ['v' => 'Le PIB mesuré uniquement pendant une récession', 'c' => false],
                        ['v' => 'Le montant de la dette publique', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que l’écart de production ?', 'a' => [
                        ['v' => 'La différence entre la production effective et une estimation de la production potentielle', 'c' => true],
                        ['v' => 'La différence entre exportations et importations uniquement', 'c' => false],
                        ['v' => 'La différence entre salaires nominaux et réels', 'c' => false],
                        ['v' => 'La différence entre recettes fiscales et dépenses privées', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’une phase d’expansion économique ?', 'a' => [
                        ['v' => 'Une période pendant laquelle l’activité économique augmente généralement', 'c' => true],
                        ['v' => 'Une période de baisse prolongée de la production', 'c' => false],
                        ['v' => 'Une période où les prix sont nécessairement constants', 'c' => false],
                        ['v' => 'Une période où le chômage est toujours nul', 'c' => false],
                    ]],
                    ['q' => 'Quel est un facteur important de la croissance économique à long terme ?', 'a' => [
                        ['v' => 'Les gains de productivité et le progrès technologique', 'c' => true],
                        ['v' => 'Une inflation toujours élevée', 'c' => false],
                        ['v' => 'Une réduction permanente de la productivité', 'c' => false],
                        ['v' => 'Une diminution continue du capital', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi le capital physique peut-il soutenir la croissance ?', 'a' => [
                        ['v' => 'Il permet aux travailleurs de produire davantage ou plus efficacement', 'c' => true],
                        ['v' => 'Il supprime toujours les besoins de travail', 'c' => false],
                        ['v' => 'Il rend les ressources illimitées', 'c' => false],
                        ['v' => 'Il élimine toutes les contraintes économiques', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi le capital humain est-il important pour la croissance ?', 'a' => [
                        ['v' => 'Des travailleurs mieux formés peuvent être plus productifs et favoriser l’innovation', 'c' => true],
                        ['v' => 'Il empêche toute spécialisation', 'c' => false],
                        ['v' => 'Il réduit nécessairement la productivité', 'c' => false],
                        ['v' => 'Il supprime les investissements', 'c' => false],
                    ]],
                    ['q' => 'Une croissance extensive repose notamment sur :', 'a' => [
                        ['v' => 'L’augmentation de la quantité de facteurs de production utilisés', 'c' => true],
                        ['v' => 'Uniquement une amélioration technologique', 'c' => false],
                        ['v' => 'Uniquement une baisse des prix', 'c' => false],
                        ['v' => 'Uniquement une baisse du nombre de travailleurs', 'c' => false],
                    ]],
                    ['q' => 'Une croissance intensive repose davantage sur :', 'a' => [
                        ['v' => 'Une amélioration de la productivité des facteurs utilisés', 'c' => true],
                        ['v' => 'Une augmentation automatique de la population', 'c' => false],
                        ['v' => 'Une hausse obligatoire des impôts', 'c' => false],
                        ['v' => 'Une diminution de l’efficacité', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Inflation, chômage et politiques macroéconomiques',
                'questions' => [
                    ['q' => 'Quelle différence existe entre inflation et déflation ?', 'a' => [
                        ['v' => 'L’inflation correspond à une hausse générale des prix tandis que la déflation correspond à une baisse générale des prix', 'c' => true],
                        ['v' => 'Les deux désignent toujours une hausse des prix', 'c' => false],
                        ['v' => 'La déflation concerne uniquement les salaires', 'c' => false],
                        ['v' => 'L’inflation concerne uniquement les importations', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que le pouvoir d’achat de la monnaie ?', 'a' => [
                        ['v' => 'La quantité de biens et services qu’une unité monétaire permet d’acheter', 'c' => true],
                        ['v' => 'Le nombre de billets imprimés', 'c' => false],
                        ['v' => 'Le taux de change uniquement', 'c' => false],
                        ['v' => 'Le montant de la dette publique', 'c' => false],
                    ]],
                    ['q' => 'Une inflation élevée et persistante peut réduire :', 'a' => [
                        ['v' => 'Le pouvoir d’achat de la monnaie', 'c' => true],
                        ['v' => 'Le nombre de biens disponibles automatiquement', 'c' => false],
                        ['v' => 'Le besoin de financement des entreprises', 'c' => false],
                        ['v' => 'La quantité de monnaie à zéro', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que le chômage structurel ?', 'a' => [
                        ['v' => 'Le chômage résultant notamment d’un décalage durable entre les compétences disponibles et les emplois proposés', 'c' => true],
                        ['v' => 'Le chômage causé uniquement par une récession temporaire', 'c' => false],
                        ['v' => 'Le chômage volontaire uniquement', 'c' => false],
                        ['v' => 'Le chômage lié uniquement aux vacances', 'c' => false],
                    ]],
                    ['q' => 'Une politique monétaire restrictive vise généralement à :', 'a' => [
                        ['v' => 'Ralentir la demande et les pressions inflationnistes', 'c' => true],
                        ['v' => 'Stimuler fortement le crédit dans toutes les situations', 'c' => false],
                        ['v' => 'Augmenter automatiquement les dépenses publiques', 'c' => false],
                        ['v' => 'Réduire les impôts directement', 'c' => false],
                    ]],
                    ['q' => 'Une politique monétaire expansionniste cherche généralement à :', 'a' => [
                        ['v' => 'Soutenir l’activité en assouplissant les conditions monétaires et financières', 'c' => true],
                        ['v' => 'Réduire systématiquement le crédit', 'c' => false],
                        ['v' => 'Augmenter les taxes', 'c' => false],
                        ['v' => Réduire directement les dépenses publiques', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi une hausse des taux directeurs peut-elle réduire l’inflation ?', 'a' => [
                        ['v' => 'Elle peut renchérir le crédit et réduire certaines composantes de la demande', 'c' => true],
                        ['v' => 'Elle augmente toujours immédiatement la production', 'c' => false],
                        ['v' => 'Elle supprime les prix administrés', 'c' => false],
                        ['v' => 'Elle rend automatiquement toutes les importations gratuites', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’une politique budgétaire contracyclique ?', 'a' => [
                        ['v' => 'Une politique qui cherche à atténuer les fluctuations du cycle économique', 'c' => true],
                        ['v' => 'Une politique qui amplifie systématiquement les cycles', 'c' => false],
                        ['v' => 'Une politique uniquement commerciale', 'c' => false],
                        ['v' => 'Une politique qui interdit les dépenses publiques', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi les délais d’action compliquent-ils les politiques économiques ?', 'a' => [
                        ['v' => 'Les effets d’une décision peuvent apparaître après que la situation économique a déjà changé', 'c' => true],
                        ['v' => 'Les politiques économiques ont toujours un effet instantané', 'c' => false],
                        ['v' => 'Les ménages ne réagissent jamais aux politiques', 'c' => false],
                        ['v' => 'Les entreprises ne modifient jamais leurs décisions', 'c' => false],
                    ]],
                    ['q' => 'Quel arbitrage peut parfois apparaître à court terme entre inflation et chômage ?', 'a' => [
                        ['v' => 'Une politique stimulant fortement la demande peut réduire le chômage tout en augmentant les pressions inflationnistes', 'c' => true],
                        ['v' => 'Une hausse de la demande réduit toujours inflation et chômage simultanément', 'c' => false],
                        ['v' => 'L’inflation et le chômage sont toujours identiques', 'c' => false],
                        ['v' => 'Le chômage n’a jamais de relation avec l’activité économique', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Commerce international et avantages comparatifs',
                'questions' => [
                    ['q' => 'Un pays possède un avantage absolu lorsqu’il :', 'a' => [
                        ['v' => 'Peut produire une unité d’un bien avec moins de ressources qu’un autre pays', 'c' => true],
                        ['v' => 'A nécessairement le coût d’opportunité le plus faible', 'c' => false],
                        ['v' => 'Importe toujours le bien', 'c' => false],
                        ['v' => 'Possède la monnaie la plus forte', 'c' => false],
                    ]],
                    ['q' => 'L’avantage comparatif repose principalement sur :', 'a' => [
                        ['v' => 'Le coût d’opportunité relatif', 'c' => true],
                        ['v' => 'Le niveau absolu des salaires uniquement', 'c' => false],
                        ['v' => 'La taille de la population uniquement', 'c' => false],
                        ['v' => 'Le montant des réserves de change uniquement', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi la spécialisation selon l’avantage comparatif peut-elle augmenter la production totale ?', 'a' => [
                        ['v' => 'Elle permet aux économies de concentrer leurs ressources là où leur coût d’opportunité est relativement plus faible', 'c' => true],
                        ['v' => 'Elle élimine toutes les contraintes de ressources', 'c' => false],
                        ['v' => 'Elle garantit que chaque pays produit tout lui-même', 'c' => false],
                        ['v' => 'Elle supprime le commerce', 'c' => false],
                    ]],
                    ['q' => 'Une politique protectionniste vise généralement à :', 'a' => [
                        ['v' => 'Limiter ou renchérir la concurrence étrangère sur certains marchés nationaux', 'c' => true],
                        ['v' => 'Supprimer toutes les barrières commerciales', 'c' => false],
                        ['v' => 'Augmenter automatiquement les importations', 'c' => false],
                        ['v' => 'Réduire tous les coûts de production mondiaux', 'c' => false],
                    ]],
                    ['q' => 'Quel est un effet possible d’un droit de douane ?', 'a' => [
                        ['v' => 'Augmenter le prix intérieur du produit importé et réduire les importations', 'c' => true],
                        ['v' => 'Réduire toujours le prix intérieur', 'c' => false],
                        ['v' => 'Augmenter automatiquement les importations', 'c' => false],
                        ['v' => 'Supprimer toute production nationale', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’un quota d’importation ?', 'a' => [
                        ['v' => 'Une limite quantitative imposée à la quantité d’un produit pouvant être importée', 'c' => true],
                        ['v' => 'Une taxe sur les exportations', 'c' => false],
                        ['v' => Une subvention aux consommateurs', 'c' => false],
                        ['v' => 'Une limite aux salaires', 'c' => false],
                    ]],
                    ['q' => 'Une dépréciation de la monnaie nationale peut, toutes choses égales par ailleurs :', 'a' => [
                        ['v' => Rendre les exportations plus compétitives et les importations plus coûteuses en monnaie nationale', 'c' => true],
                        ['v' => 'Rendre toujours les exportations plus chères pour les étrangers', 'c' => false],
                        ['v' => 'Réduire nécessairement le prix des importations', 'c' => false],
                        ['v' => 'Supprimer le commerce extérieur', 'c' => false],
                    ]],
                    ['q' => 'La balance courante inclut notamment :', 'a' => [
                        ['v' => 'Les échanges de biens et services ainsi que certains revenus et transferts courants', 'c' => true],
                        ['v' => 'Uniquement les exportations de biens', 'c' => false],
                        ['v' => 'Uniquement les investissements directs', 'c' => false],
                        ['v' => 'Uniquement les réserves de la banque centrale', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi une monnaie appréciée peut-elle réduire la compétitivité-prix des exportateurs ?', 'a' => [
                        ['v' => 'Les produits nationaux peuvent devenir plus chers en devises étrangères', 'c' => true],
                        ['v' => 'Les coûts nationaux deviennent toujours nuls', 'c' => false],
                        ['v' => 'Les exportations deviennent automatiquement subventionnées', 'c' => false],
                        ['v' => 'La demande mondiale disparaît toujours', 'c' => false],
                    ]],
                    ['q' => 'Quel risque peut accompagner une forte dépendance aux importations d’un produit essentiel ?', 'a' => [
                        ['v' => Une vulnérabilité accrue aux perturbations de l’offre extérieure et aux variations des prix mondiaux', 'c' => true],
                        ['v' => 'Une disparition automatique de l’inflation', 'c' => false],
                        ['v' => 'Une hausse certaine de l’autosuffisance', 'c' => false],
                        ['v' => 'Une réduction obligatoire du commerce', 'c' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Épargne, investissement et système financier',
                'questions' => [
                    ['q' => 'Quelle relation simplifiée existe entre revenu disponible, consommation et épargne ?', 'a' => [
                        ['v' => 'Le revenu disponible est réparti entre consommation et épargne', 'c' => true],
                        ['v' => 'L’épargne est toujours supérieure au revenu', 'c' => false],
                        ['v' => 'La consommation est toujours nulle lorsque l’épargne existe', 'c' => false],
                        ['v' => 'Le revenu disponible correspond uniquement aux impôts', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que l’investissement productif ?', 'a' => [
                        ['v' => 'L’acquisition de biens et équipements destinés à accroître ou maintenir la capacité de production', 'c' => true],
                        ['v' => 'Une dépense courante de consommation', 'c' => false],
                        ['v' => 'Un paiement d’impôt', 'c' => false],
                        ['v' => 'Une épargne conservée en espèces uniquement', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi le taux d’intérêt influence-t-il l’investissement ?', 'a' => [
                        ['v' => 'Il affecte le coût du financement et donc la rentabilité de certains projets', 'c' => true],
                        ['v' => 'Il ne concerne que les ménages', 'c' => false],
                        ['v' => 'Il détermine directement les salaires', 'c' => false],
                        ['v' => 'Il n’a aucun rapport avec le financement', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce qu’un investissement financier ?', 'a' => [
                        ['v' => 'L’acquisition d’actifs financiers dans l’objectif notamment de placer des fonds et obtenir un rendement', 'c' => true],
                        ['v' => 'L’achat d’une machine uniquement', 'c' => false],
                        ['v' => 'Une dépense alimentaire', 'c' => false],
                        ['v' => 'Une taxe publique', 'c' => false],
                    ]],
                    ['q' => 'Quel est le rôle principal d’un intermédiaire financier ?', 'a' => [
                        ['v' => Mettre en relation l’épargne disponible et les besoins de financement', 'c' => true],
                        ['v' => 'Supprimer le risque de tous les investissements', 'c' => false],
                        ['v' => 'Garantir tous les profits', 'c' => false],
                        ['v' => 'Fixer tous les prix des biens', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi les obligations sont-elles considérées comme des titres de créance ?', 'a' => [
                        ['v' => 'L’investisseur prête indirectement des fonds à l’émetteur qui doit respecter les conditions de remboursement', 'c' => true],
                        ['v' => 'Elles représentent toujours une part du capital', 'c' => false],
                        ['v' => 'Elles ne donnent jamais lieu à remboursement', 'c' => false],
                        ['v' => 'Elles sont des biens de consommation', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi le prix d’une obligation existante peut-il baisser lorsque les taux du marché augmentent ?', 'a' => [
                        ['v' => 'Les nouveaux titres peuvent offrir des rendements plus attractifs, réduisant l’attrait relatif de l’obligation existante', 'c' => true],
                        ['v' => 'La valeur nominale disparaît toujours', 'c' => false],
                        ['v' => Les taux plus élevés augmentent automatiquement tous les prix obligataires', 'c' => false],
                        ['v' => 'Les obligations deviennent immédiatement des actions', 'c' => false],
                    ]],
                    ['q' => 'Qu’est-ce que la diversification d’un portefeuille ?', 'a' => [
                        ['v' => 'La répartition des investissements entre plusieurs actifs afin de réduire certains risques spécifiques', 'c' => true],
                        ['v' => 'Le placement de tout le capital dans un seul actif', 'c' => false],
                        ['v' => 'La suppression de tout risque financier', 'c' => false],
                        ['v' => 'La garantie d’un rendement positif', 'c' => false],
                    ]],
                    ['q' => 'Quel risque est généralement associé à une action ?', 'a' => [
                        ['v' => 'La valeur de l’investissement peut fluctuer et entraîner une perte en capital', 'c' => true],
                        ['v' => 'Le rendement est toujours garanti', 'c' => false],
                        ['v' => 'Le prix ne peut jamais changer', 'c' => false],
                        ['v' => 'L’action est toujours remboursée à sa valeur nominale', 'c' => false],
                    ]],
                    ['q' => 'Pourquoi les marchés financiers peuvent-ils contribuer à la croissance économique ?', 'a' => [
                        ['v' => 'Ils facilitent la mobilisation de l’épargne vers le financement d’entreprises et de projets', 'c' => true],
                        ['v' => 'Ils suppriment toutes les contraintes de financement', 'c' => false],
                        ['v' => 'Ils empêchent les entreprises d’investir', 'c' => false],
                        ['v' => 'Ils garantissent une croissance permanente', 'c' => false],
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
                    'question' => $questionData['q'],
                ]);

                $answers = $questionData['a'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['v'],
                        'iscorrect' => $answerData['c'],
                    ]);
                }
            }
        }
    }
}
```
