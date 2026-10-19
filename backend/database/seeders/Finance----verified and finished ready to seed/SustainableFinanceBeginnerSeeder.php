<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SustainableFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sustainable-finance')->firstOrFail();

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 22, 'passing_score' => 57],
            ['duration' => 24, 'passing_score' => 54],
            ['duration' => 25, 'passing_score' => 58],
            ['duration' => 27, 'passing_score' => 56],
            ['duration' => 28, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 55],
            ['duration' => 29, 'passing_score' => 59],
        ];

        $quizzes = [
            [
                'title' => 'Fondamentaux de la finance durable et des critères ESG',
                'description' => 'Ce quiz introduit les notions essentielles de finance durable, d\'ESG et de prise en compte des enjeux environnementaux, sociaux et de gouvernance dans les décisions financières.',
                'questions' => [
                    [
                        'question' => 'Dans une analyse ESG, que recouvrent les lettres E, S et G ?',
                        'explanation' => 'ESG veut dire Environnemental, Social, Gouvernance. Ces trois angles s’ajoutent aux chiffres classiques pour juger une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Économie, Société et Gestion', 'is_correct' => false],
                            ['choice_text' => 'Énergie, Sécurité et Gouvernement', 'is_correct' => false],
                            ['choice_text' => 'Environnemental, Social et Gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Éthique, Stabilité et Garantie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira dirige une usine qui a divisé par deux sa consommation d’eau. Dans quelle case ESG range-t-on cette action ?',
                        'explanation' => 'Économiser l’eau, c’est ménager une ressource naturelle : on est dans le E.',
                        'choices' => [
                            ['choice_text' => 'Le S, le social', 'is_correct' => false],
                            ['choice_text' => 'Le G, la gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Aucune, c’est de la finance classique', 'is_correct' => false],
                            ['choice_text' => 'Le E, l’environnement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert de regarder les critères ESG avant d’acheter une action ?',
                        'explanation' => 'L’ESG aide à voir ce que le bilan ne montre pas encore : facture d’énergie qui monte, amende, scandale, difficulté à se financer. Il complète les comptes, il ne les remplace pas.',
                        'choices' => [
                            ['choice_text' => 'À remplacer les comptes annuels par une note plus simple à lire', 'is_correct' => false],
                            ['choice_text' => 'À repérer des risques et des coûts futurs qui ne se voient pas encore dans les comptes', 'is_correct' => true],
                            ['choice_text' => 'À obtenir un dividende supérieur à celui versé par les sociétés non cotées du même secteur', 'is_correct' => false],
                            ['choice_text' => 'À éviter les sociétés qui ne distribuent pas de bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond le mieux à un enjeu social ?',
                        'explanation' => 'La santé, la sécurité et les conditions de travail relèvent de la dimension sociale de l’ESG.',
                        'choices' => [
                            ['choice_text' => 'La consommation d’électricité des bureaux de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'La façon dont sont nommés les membres du conseil d’administration', 'is_correct' => false],
                            ['choice_text' => 'La sécurité et les conditions de travail des salariés', 'is_correct' => true],
                            ['choice_text' => 'Le niveau des émissions de gaz à effet de serre du site', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces sujets relève de la gouvernance ?',
                        'explanation' => 'La gouvernance, c’est la manière dont l’entreprise est dirigée : conseil d’administration, contrôles internes, droits des actionnaires.',
                        'choices' => [
                            ['choice_text' => 'La quantité de gaz à effet de serre rejetée par les usines', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’heures de formation données aux salariés', 'is_correct' => false],
                            ['choice_text' => 'La façon dont le conseil d’administration est composé et contrôlé', 'is_correct' => true],
                            ['choice_text' => 'La qualité de l’air autour des sites de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim compare deux sociétés aux comptes identiques. Seule l’une a un vrai dispositif anticorruption. En quoi est-ce utile à Karim ?',
                        'explanation' => 'Moins de corruption, c’est moins de risques juridiques et de réputation. Cela ne garantit pas un meilleur cours, mais c’est un vrai point de comparaison entre deux sociétés semblables.',
                        'choices' => [
                            ['choice_text' => 'Elle risque moins de subir une amende ou un scandale qui ferait perdre de la valeur', 'is_correct' => true],
                            ['choice_text' => 'Son cours de bourse montera plus vite que celui de l’autre société dès l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a plus besoin de publier ses comptes annuels', 'is_correct' => false],
                            ['choice_text' => 'Son chiffre d’affaires va croître deux fois plus vite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « finance durable » ?',
                        'explanation' => 'La finance durable n’est pas un produit unique : c’est une façon de décider qui intègre la durabilité, sans oublier que le projet doit rester viable économiquement.',
                        'choices' => [
                            ['choice_text' => 'Tenir compte de l’environnement, du social et de la gouvernance quand on finance ou qu’on investit', 'is_correct' => true],
                            ['choice_text' => 'N’acheter que des obligations vertes émises par des États, à l’exclusion de toute action cotée', 'is_correct' => false],
                            ['choice_text' => 'Investir sans se soucier du rendement ni du risque, pour favoriser avant tout la planète et le climat', 'is_correct' => false],
                            ['choice_text' => 'Refuser de financer toute entreprise du secteur industriel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société publie beaucoup de chiffres sur ses émissions, mais rien sur la gestion des conflits d’intérêts de ses dirigeants. Quel pilier de l’ESG reste dans l’ombre ?',
                        'explanation' => 'Les conflits d’intérêts, les mécanismes de contrôle et la surveillance de la direction appartiennent principalement à la gouvernance.',
                        'choices' => [
                            ['choice_text' => 'L’environnement', 'is_correct' => false],
                            ['choice_text' => 'Le social', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité', 'is_correct' => false],
                            ['choice_text' => 'La gouvernance', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef dit : « Je ne regarde que le score ESG, il me donne le rendement futur. » Où est son erreur ?',
                        'explanation' => 'Un score ESG éclaire l’analyse, mais la qualité de l’entreprise, son prix et le marché comptent aussi. Aucune note ne donne le rendement de demain.',
                        'choices' => [
                            ['choice_text' => 'Un score ESG est une information parmi d’autres, il ne prédit pas le rendement', 'is_correct' => true],
                            ['choice_text' => 'Le score ESG ne mesure que le chiffre d’affaires et la taille de la société analysée', 'is_correct' => false],
                            ['choice_text' => 'Les scores ESG se calculent à partir des cours de bourse', 'is_correct' => false],
                            ['choice_text' => 'Le score ESG ne concerne que les sociétés non cotées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces situations montre l’ESG intégré à l’analyse, sans portefeuille 100 % vert ?',
                        'explanation' => 'Intégrer l’ESG, c’est se demander comment un facteur de durabilité change les risques, les flux de trésorerie ou la valeur. Cela n’oblige pas à tout exclure.',
                        'choices' => [
                            ['choice_text' => 'Ne garder que des obligations qui portent le mot « vert » dans leur nom', 'is_correct' => false],
                            ['choice_text' => 'Ne pas tenir compte des risques environnementaux, puisqu’ils sont absents du bilan comptable', 'is_correct' => false],
                            ['choice_text' => 'Vendre les actions de chaque entreprise du secteur industriel', 'is_correct' => false],
                            ['choice_text' => 'Estimer ce qu’un prix du carbone plus élevé coûterait à l’entreprise et à sa valeur', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Approches d\'investissement durable',
                'description' => 'Ce quiz compare les principales approches de l\'investissement durable : exclusions, sélection ESG, intégration ESG, engagement actionnarial et investissement thématique.',
                'questions' => [
                    [
                        'question' => 'Un fonds s’interdit d’investir dans le tabac. Quelle approche est-ce ?',
                        'explanation' => 'L’exclusion écarte certaines activités selon des critères fixés à l’avance : ici, le tabac.',
                        'choices' => [
                            ['choice_text' => 'L’exclusion', 'is_correct' => true],
                            ['choice_text' => 'L’engagement actionnarial', 'is_correct' => false],
                            ['choice_text' => 'L’investissement à impact', 'is_correct' => false],
                            ['choice_text' => 'La sélection best-in-class', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait un fonds qui applique le « best-in-class » ?',
                        'explanation' => 'Best-in-class : on compare les entreprises d’un même secteur et on garde les meilleures élèves ESG, même dans un secteur qui pollue.',
                        'choices' => [
                            ['choice_text' => 'Il ne garde que les entreprises de petite taille de chaque secteur, quelle que soit leur note ESG', 'is_correct' => false],
                            ['choice_text' => 'Il achète les actions dont le cours est le plus bas du secteur', 'is_correct' => false],
                            ['choice_text' => 'Il écarte les secteurs qui émettent beaucoup de carbone', 'is_correct' => false],
                            ['choice_text' => 'Il retient, dans chaque secteur, les entreprises les mieux notées sur les critères ESG', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert l’engagement actionnarial ?',
                        'explanation' => 'L’actionnaire garde ses titres et s’en sert : il discute avec la direction, pose des questions, vote en assemblée.',
                        'choices' => [
                            ['choice_text' => 'À dialoguer avec l’entreprise et à voter en assemblée pour la pousser à s’améliorer', 'is_correct' => true],
                            ['choice_text' => 'À vendre ses actions dès qu’une entreprise obtient un mauvais score ESG sur l’année écoulée', 'is_correct' => false],
                            ['choice_text' => 'À obtenir de l’entreprise un dividende minimum fixé à l’avance', 'is_correct' => false],
                            ['choice_text' => 'À prendre la place des administrateurs de l’entreprise détenue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un gérant achète des entreprises de secteurs variés et ajuste leur valeur selon leur exposition au risque climatique. De quelle approche s’agit-il ?',
                        'explanation' => 'Ici le climat entre directement dans le calcul de la valeur : c’est l’intégration ESG, qui touche les risques et la valorisation.',
                        'choices' => [
                            ['choice_text' => 'L’exclusion sectorielle', 'is_correct' => false],
                            ['choice_text' => 'La gestion indicielle pure', 'is_correct' => false],
                            ['choice_text' => 'L’intégration ESG', 'is_correct' => true],
                            ['choice_text' => 'La sélection thématique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds n’achète que des sociétés de stockage d’énergie. Quelle est son approche ?',
                        'explanation' => 'Le fonds se concentre sur un thème précis, ici le stockage d’énergie. D’autres thèmes classiques : l’eau, les déchets, l’efficacité énergétique.',
                        'choices' => [
                            ['choice_text' => 'Best-in-class', 'is_correct' => false],
                            ['choice_text' => 'Exclusion', 'is_correct' => false],
                            ['choice_text' => 'Engagement actionnarial', 'is_correct' => false],
                            ['choice_text' => 'Thématique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle phrase distingue le mieux l’exclusion de l’engagement ?',
                        'explanation' => 'Exclure, c’est vendre ou ne pas acheter. S’engager, c’est rester actionnaire pour avoir voix au chapitre.',
                        'choices' => [
                            ['choice_text' => 'L’exclusion sert à dialoguer avec l’émetteur pour le faire évoluer, l’engagement à vendre ses titres', 'is_correct' => false],
                            ['choice_text' => 'L’exclusion sort l’émetteur du portefeuille, l’engagement le garde pour tenter de le faire évoluer', 'is_correct' => true],
                            ['choice_text' => 'L’exclusion vise les obligations, l’engagement vise les actions', 'is_correct' => false],
                            ['choice_text' => 'L’exclusion s’applique aux petites entreprises, l’engagement aux grandes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds retient les 20 % d’entreprises les mieux notées ESG dans chaque secteur. Comment appelle-t-on cette méthode ?',
                        'explanation' => 'On compare les entreprises d’un même secteur entre elles et on garde le haut du classement : c’est du best-in-class.',
                        'choices' => [
                            ['choice_text' => 'Une exclusion normative', 'is_correct' => false],
                            ['choice_text' => 'Une sélection best-in-class', 'is_correct' => true],
                            ['choice_text' => 'Une gestion indicielle', 'is_correct' => false],
                            ['choice_text' => 'Une sélection thématique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un gérant durable garde une cimenterie très émettrice de CO2 en portefeuille. Qu’est-ce qui peut l’expliquer ?',
                        'explanation' => 'Certains gérants préfèrent soutenir une entreprise qui se transforme plutôt que de l’exclure tout de suite. Tout dépend de la crédibilité de son plan.',
                        'choices' => [
                            ['choice_text' => 'Il estime que les émissions n’ont pas d’effet sur la valeur des entreprises ni sur leurs coûts à long terme', 'is_correct' => false],
                            ['choice_text' => 'Il considère qu’une entreprise très émettrice est déjà durable par nature', 'is_correct' => false],
                            ['choice_text' => 'Il applique une règle qui interdit de comparer les entreprises entre elles', 'is_correct' => false],
                            ['choice_text' => 'Il juge son plan de transition sérieux et pense que ses efforts futurs auront de la valeur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds vote en assemblée pour demander plus de transparence climatique à une société qu’il détient. Quelle approche met-il en œuvre ?',
                        'explanation' => 'Voter et dialoguer avec l’entreprise, c’est le cœur de l’engagement actionnarial.',
                        'choices' => [
                            ['choice_text' => 'L’engagement actionnarial', 'is_correct' => true],
                            ['choice_text' => 'L’exclusion sectorielle', 'is_correct' => false],
                            ['choice_text' => 'L’investissement thématique', 'is_correct' => false],
                            ['choice_text' => 'La gestion indicielle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche vise à la fois un rendement et un résultat social ou environnemental mesurable ?',
                        'explanation' => 'L’impact investing cherche un effet positif voulu et mesuré, en plus du rendement financier.',
                        'choices' => [
                            ['choice_text' => 'L’impact investing', 'is_correct' => true],
                            ['choice_text' => 'L’exclusion normative', 'is_correct' => false],
                            ['choice_text' => 'La sélection best-in-class', 'is_correct' => false],
                            ['choice_text' => 'L’intégration ESG', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux fonds affichent le mot « durable ». Que peut-on en conclure avant d’avoir lu leur méthode ?',
                        'explanation' => 'Le mot « durable » ne dit pas comment le fonds choisit ses titres. Il faut lire la méthode.',
                        'choices' => [
                            ['choice_text' => 'Qu’ils détiennent à peu près les mêmes entreprises', 'is_correct' => false],
                            ['choice_text' => 'Qu’ils ont des rendements voisins puisque l’étiquette est la même', 'is_correct' => false],
                            ['choice_text' => 'Rien : leurs critères de sélection peuvent être très différents', 'is_correct' => true],
                            ['choice_text' => 'Qu’ils suivent la même liste d’exclusions fixée par la loi', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Green bonds et financement de projets environnementaux',
                'description' => 'Ce quiz porte sur les green bonds, l\'utilisation des fonds levés, le suivi des projets financés et les principaux risques de compréhension ou de communication.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une green bond ?',
                        'explanation' => 'Une green bond est une obligation comme une autre, avec une différence : les fonds sont destinés à des projets ou actifs écologiques décrits à l’avance.',
                        'choices' => [
                            ['choice_text' => 'Une obligation dont l’argent levé finance des projets environnementaux précis', 'is_correct' => true],
                            ['choice_text' => 'Une action émise par une société spécialisée dans l’environnement', 'is_correct' => false],
                            ['choice_text' => 'Une obligation d’État dont le coupon est fixé volontairement sous le taux du marché', 'is_correct' => false],
                            ['choice_text' => 'Un prêt bancaire à taux zéro réservé aux énergies renouvelables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise émet une green bond pour construire des centrales solaires. Que doit surtout regarder l’investisseur ?',
                        'explanation' => 'Ce qui fait la crédibilité d’une green bond, c’est la destination des fonds, les critères et le reporting prévus.',
                        'choices' => [
                            ['choice_text' => 'La promesse que le cours de l’obligation montera après l’émission', 'is_correct' => false],
                            ['choice_text' => 'La suppression du calcul du rendement à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit, qui disparaît pour une obligation verte', 'is_correct' => false],
                            ['choice_text' => 'L’affectation des fonds et le suivi annoncé de leur utilisation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'L’emprunt d’un parc solaire est financé par une green bond, mais l’émetteur est très endetté. Quelle conclusion est la plus juste ?',
                        'explanation' => '« Vert » parle de l’usage des fonds, pas de la solidité de l’émetteur. Le risque de crédit se juge comme pour n’importe quelle obligation.',
                        'choices' => [
                            ['choice_text' => 'Le risque de défaut est réduit à zéro, puisque le projet financé est reconnu comme écologique', 'is_correct' => false],
                            ['choice_text' => 'Le rendement de l’obligation est assuré par son caractère vert', 'is_correct' => false],
                            ['choice_text' => 'La dette de l’émetteur n’est plus un sujet pour l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Le projet est vert, mais le risque que l’émetteur ne rembourse pas reste entier', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le reporting publié après l’émission d’une green bond ?',
                        'explanation' => 'Le reporting permet de vérifier que l’argent a bien servi aux projets annoncés, et parfois de chiffrer leurs effets, par exemple les tonnes de CO2 évitées.',
                        'choices' => [
                            ['choice_text' => 'À prévoir la hausse du prix de l’obligation sur le marché secondaire après l’émission', 'is_correct' => false],
                            ['choice_text' => 'À remplacer l’analyse du risque de crédit de l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'À suivre où sont allés les fonds et, selon le cadre, les résultats obtenus', 'is_correct' => true],
                            ['choice_text' => 'À dispenser l’émetteur de publier un prospectus d’émission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une ville finance des bus peu polluants avec une obligation verte. En quoi est-ce de la finance durable ?',
                        'explanation' => 'La finance durable dirige des capitaux vers des projets qui répondent à des objectifs environnementaux ou sociaux. Les porteurs d’obligations restent des prêteurs.',
                        'choices' => [
                            ['choice_text' => 'La ville n’a plus à rembourser les sommes empruntées', 'is_correct' => false],
                            ['choice_text' => 'L’argent est orienté vers une infrastructure qui a un objectif environnemental clair', 'is_correct' => true],
                            ['choice_text' => 'Le projet devient rentable parce que l’obligation est verte', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs deviennent copropriétaires des bus et touchent une part des recettes de billetterie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira constate qu’une émission « verte » ne dit presque rien de l’usage des fonds. Que doit-elle vérifier en priorité ?',
                        'explanation' => 'L’étiquette « verte » ne suffit pas. Il faut lire la documentation : projets éligibles, gestion des fonds, reporting.',
                        'choices' => [
                            ['choice_text' => 'Le niveau du coupon, une vraie obligation verte devant rapporter moins', 'is_correct' => false],
                            ['choice_text' => 'Le pays d’émission, car seuls les États ou les collectivités peuvent émettre des obligations vertes', 'is_correct' => false],
                            ['choice_text' => 'La qualité du cadre de financement, les critères des projets éligibles et l’information fournie', 'is_correct' => true],
                            ['choice_text' => 'La note ESG globale de l’émetteur, qui remplace la lecture du cadre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une green bond verse un coupon fixe de 4 %. Que veut dire le mot « green » ?',
                        'explanation' => 'Le coupon est une caractéristique financière. « Green » décrit l’usage des fonds et le cadre environnemental de l’émission.',
                        'choices' => [
                            ['choice_text' => 'Le coupon de 4 % est celui de l’ensemble des obligations vertes', 'is_correct' => false],
                            ['choice_text' => 'L’obligation ne peut pas perdre de valeur sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Il concerne l’usage des fonds levés, pas le niveau du coupon', 'is_correct' => true],
                            ['choice_text' => 'Le coupon varie avec la température moyenne mondiale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document dit quels projets une green bond peut financer ?',
                        'explanation' => 'Le cadre de financement liste les catégories de projets éligibles, la sélection, la gestion des fonds et le reporting prévu.',
                        'choices' => [
                            ['choice_text' => 'Le bilan annuel de l’investisseur qui l’achète', 'is_correct' => false],
                            ['choice_text' => 'Le cadre de financement durable de l’émission', 'is_correct' => true],
                            ['choice_text' => 'Le cours de clôture de l’obligation en bourse', 'is_correct' => false],
                            ['choice_text' => 'Le relevé de compte de l’agence bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise refinance un vieux projet fossile et l’annonce comme « transition verte » sans expliquer ses critères. Quel risque cela crée-t-il ?',
                        'explanation' => 'Une communication verte doit coller aux faits et à la méthode annoncée. Sinon, on parle de greenwashing.',
                        'choices' => [
                            ['choice_text' => 'Un risque de change, car le projet est financé en devises étrangères', 'is_correct' => false],
                            ['choice_text' => 'Un risque de dilution des actionnaires existants lors de l’émission', 'is_correct' => false],
                            ['choice_text' => 'Un risque de greenwashing, c’est-à-dire une présentation trompeuse', 'is_correct' => true],
                            ['choice_text' => 'Un risque de taux, car le coupon est lié au prix du pétrole', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'En quoi une green bond diffère-t-elle d’une obligation classique ?',
                        'explanation' => 'La différence tient au cadre d’usage des fonds et à la transparence. Pour le reste, c’est une obligation, avec ses risques habituels.',
                        'choices' => [
                            ['choice_text' => 'Elle est émise par un État, alors que l’obligation classique est privée', 'is_correct' => false],
                            ['choice_text' => 'Les fonds doivent aller à des projets environnementaux définis à l’avance', 'is_correct' => true],
                            ['choice_text' => 'Elle ne verse pas d’intérêts, son rendement étant le bénéfice écologique', 'is_correct' => false],
                            ['choice_text' => 'Elle se négocie comme une action cotée sur le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour comparer deux green bonds, que faut-il regarder ?',
                        'explanation' => 'On compare les deux volets : les caractéristiques financières habituelles et la qualité du cadre environnemental de chaque émission.',
                        'choices' => [
                            ['choice_text' => 'Le mot « green » dans le titre et la mise en page du prospectus', 'is_correct' => false],
                            ['choice_text' => 'Surtout le niveau du coupon, car l’aspect vert ne joue pas de rôle dans la comparaison de deux obligations', 'is_correct' => false],
                            ['choice_text' => 'L’émetteur, son risque de crédit, les conditions financières et le sérieux du cadre vert', 'is_correct' => true],
                            ['choice_text' => 'La note ESG de l’émetteur, qui résume tout le reste', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance plusieurs projets avec une green bond, mais seuls certains entrent dans les catégories annoncées. Que faut-il contrôler ?',
                        'explanation' => 'Le suivi de l’affectation permet de vérifier que les fonds servent aux projets prévus par le cadre de l’émission.',
                        'choices' => [
                            ['choice_text' => 'Que le mot « green » figure sur le certificat de l’obligation', 'is_correct' => false],
                            ['choice_text' => 'Que l’argent va bien aux projets éligibles du cadre annoncé', 'is_correct' => true],
                            ['choice_text' => 'Que tous les projets de l’émetteur sont éligibles d’office', 'is_correct' => false],
                            ['choice_text' => 'Que l’émetteur n’a plus de comptes à rendre après l’émission', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risques climatiques et transition financière',
                'description' => 'Ce quiz présente les risques physiques et de transition, leurs effets possibles sur les entreprises et la logique de la transition finance.',
                'questions' => [
                    [
                        'question' => 'Des inondations de plus en plus fréquentes abîment régulièrement une usine. De quel type de risque climatique s’agit-il ?',
                        'explanation' => 'Inondations, tempêtes, canicules : ce sont les dégâts du climat lui-même sur les sites et les stocks. C’est un risque physique.',
                        'choices' => [
                            ['choice_text' => 'Un risque de transition', 'is_correct' => false],
                            ['choice_text' => 'Un risque de réputation', 'is_correct' => false],
                            ['choice_text' => 'Un risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Un risque physique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle loi fait fortement monter le prix du carbone pour certaines industries. Quel risque est-ce ?',
                        'explanation' => 'Lois, technologies, goûts des clients : tout ce qui change avec le passage à une économie bas-carbone relève du risque de transition.',
                        'choices' => [
                            ['choice_text' => 'Un risque physique chronique', 'is_correct' => false],
                            ['choice_text' => 'Un risque de transition', 'is_correct' => true],
                            ['choice_text' => 'Un risque de change', 'is_correct' => false],
                            ['choice_text' => 'Un risque de contrepartie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment le risque climatique peut-il faire baisser la valeur d’une entreprise ?',
                        'explanation' => 'Interruption d’activité, nouvelles règles, matières premières plus chères, actifs dépréciés : le climat finit par se voir dans les comptes.',
                        'choices' => [
                            ['choice_text' => 'En changeant ses coûts, ses ventes, ses investissements à faire ou la valeur de ses actifs', 'is_correct' => true],
                            ['choice_text' => 'En fixant directement le cours quotidien de chaque action de la cote', 'is_correct' => false],
                            ['choice_text' => 'En rendant rentable toute entreprise qui parle de climat dans son rapport annuel et sa communication financière', 'is_correct' => false],
                            ['choice_text' => 'En remplaçant les autres risques, comme le risque de crédit ou de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un assureur couvre des maisons situées dans des régions touchées par les incendies. En quoi le changement climatique le concerne-t-il ?',
                        'explanation' => 'Plus de sinistres, ou des sinistres plus lourds, c’est plus d’indemnités à payer et des primes à revoir.',
                        'choices' => [
                            ['choice_text' => 'Des sinistres plus fréquents ou plus graves feraient grimper ses coûts', 'is_correct' => true],
                            ['choice_text' => 'Les primes d’assurance doivent baisser puisque le risque est mieux connu', 'is_correct' => false],
                            ['choice_text' => 'Les incendies sont un risque de gouvernance qui ne touche pas ses contrats', 'is_correct' => false],
                            ['choice_text' => 'Il n’a plus besoin de calculer ses primes, l’État les fixe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « transition finance » ?',
                        'explanation' => 'La transition finance soutient des entreprises qui se transforment, à condition que leur plan soit crédible.',
                        'choices' => [
                            ['choice_text' => 'Financer seulement des projets qui n’émettent déjà plus de carbone', 'is_correct' => false],
                            ['choice_text' => 'Financer l’achat de quotas de carbone pour compenser des émissions passées de l’entreprise financée', 'is_correct' => false],
                            ['choice_text' => 'Un crédit à taux réduit offert aux ménages qui isolent leur logement', 'is_correct' => false],
                            ['choice_text' => 'Financer la transformation d’activités très émettrices pour qu’elles polluent moins peu à peu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une aciérie présente un plan pour baisser peu à peu l’intensité carbone de ses fours. Que doit regarder en priorité son banquier ?',
                        'explanation' => 'Un banquier juge un plan de transition à ses objectifs, à son budget, à ses jalons et à ses résultats mesurés.',
                        'choices' => [
                            ['choice_text' => 'Si elle promet zéro émission dès la première année de mise en œuvre de son plan d’investissement', 'is_correct' => false],
                            ['choice_text' => 'Le fait que l’acier soit un secteur durable par nature', 'is_correct' => false],
                            ['choice_text' => 'La date d’entrée de l’entreprise sur le marché boursier', 'is_correct' => false],
                            ['choice_text' => 'Le sérieux du plan : investissements prévus, étapes chiffrées, progrès mesurables', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple est un risque physique aigu ?',
                        'explanation' => 'Aigu = ponctuel et brutal : tempête, incendie, inondation. Les trois autres exemples sont des risques de transition.',
                        'choices' => [
                            ['choice_text' => 'Une taxe carbone qui augmente chaque année', 'is_correct' => false],
                            ['choice_text' => 'Des clients qui préfèrent des produits bas-carbone', 'is_correct' => false],
                            ['choice_text' => 'Une tempête violente qui endommage des entrepôts', 'is_correct' => true],
                            ['choice_text' => 'Une nouvelle norme de publication des émissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces cas est un risque de transition lié au marché ?',
                        'explanation' => 'Quand la demande bascule vers des produits moins carbonés, les ventes de certaines entreprises baissent : c’est un risque de transition de marché.',
                        'choices' => [
                            ['choice_text' => 'Un entrepôt est inondé après des pluies exceptionnelles', 'is_correct' => false],
                            ['choice_text' => 'Un comptable se trompe dans la saisie d’une facture', 'is_correct' => false],
                            ['choice_text' => 'Une panne de serveur informatique bloque les paiements en ligne de l’entreprise pendant une journée', 'is_correct' => false],
                            ['choice_text' => 'Les clients se détournent d’un produit très carboné au profit d’une alternative plus propre', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque étudie le prêt d’une cimenterie. En quoi le risque climatique la concerne-t-il ?',
                        'explanation' => 'Le climat peut peser sur les flux de trésorerie de l’emprunteur et sur la valeur des garanties : il entre donc dans l’analyse du risque de crédit.',
                        'choices' => [
                            ['choice_text' => 'Il change juridiquement le prêt en obligation verte', 'is_correct' => false],
                            ['choice_text' => 'Il peut réduire la capacité de l’emprunteur à rembourser ou la valeur des actifs financés', 'is_correct' => true],
                            ['choice_text' => 'Il rend le taux d’intérêt du prêt indépendant du niveau de risque de crédit de l’emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Il l’oblige à refuser tout prêt à une entreprise industrielle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise installe des équipements qui résistent à la chaleur pour limiter ses pertes futures. De quoi s’agit-il ?',
                        'explanation' => 'S’adapter, c’est réduire sa vulnérabilité aux effets du climat (chaleur, inondations, manque d’eau). Atténuer, c’est réduire les émissions.',
                        'choices' => [
                            ['choice_text' => 'D’une mesure d’atténuation des émissions', 'is_correct' => false],
                            ['choice_text' => 'D’une exclusion ESG du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'D’une mesure d’adaptation au risque physique', 'is_correct' => true],
                            ['choice_text' => 'D’une couverture contre le risque de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira remplace la chaudière au fioul de son atelier par un chauffage électrique moins carboné. De quoi s’agit-il surtout ?',
                        'explanation' => 'Moins de fioul brûlé, c’est moins de gaz à effet de serre émis : on est dans l’atténuation.',
                        'choices' => [
                            ['choice_text' => 'L’adaptation aux effets physiques du climat', 'is_correct' => false],
                            ['choice_text' => 'L’atténuation, c’est-à-dire la réduction des émissions', 'is_correct' => true],
                            ['choice_text' => 'Une exclusion ESG des énergies fossiles', 'is_correct' => false],
                            ['choice_text' => 'La gestion de la liquidité de l’atelier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque simule l’effet d’un prix du carbone doublé sur les prêts de son portefeuille. Comment appelle-t-on cet exercice ?',
                        'explanation' => 'On teste un « et si ? » : que deviennent les prêts si le carbone coûte deux fois plus cher ? C’est une analyse de scénarios, outil courant pour mesurer le risque de transition.',
                        'choices' => [
                            ['choice_text' => 'Une analyse de scénarios climatiques', 'is_correct' => true],
                            ['choice_text' => 'Une émission d’obligations vertes', 'is_correct' => false],
                            ['choice_text' => 'Une exclusion sectorielle du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Une mesure d’adaptation au risque physique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'ESG integration, matérialité et analyse financière',
                'description' => 'Ce quiz met l\'accent sur l\'intégration ESG dans l\'analyse, la matérialité financière, les indicateurs pertinents et les limites des scores ESG.',
                'questions' => [
                    [
                        'question' => 'Quand un facteur ESG compte-t-il vraiment dans une analyse financière ?',
                        'explanation' => 'C’est ce qu’on appelle la matérialité : un enjeu compte s’il peut changer la situation économique de l’entreprise. Il varie d’un secteur à l’autre.',
                        'choices' => [
                            ['choice_text' => 'Quand il figure en bonne place dans la brochure commerciale de l’entreprise et dans ses publicités', 'is_correct' => false],
                            ['choice_text' => 'Quand il est le même pour toutes les entreprises d’un même pays', 'is_correct' => false],
                            ['choice_text' => 'Quand il est calculé par un fournisseur de données très connu', 'is_correct' => false],
                            ['choice_text' => 'Quand il peut peser sur les risques, les revenus, les coûts ou la valeur de l’entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une mine et une société de logiciels n’ont pas les mêmes enjeux ESG importants. Qu’est-ce qui l’explique ?',
                        'explanation' => 'Une mine pense à l’eau, aux accidents, aux déchets ; une société de logiciels pense plutôt aux données personnelles et aux talents. L’important dépend du métier.',
                        'choices' => [
                            ['choice_text' => 'Les critères ESG ne s’appliquent qu’aux entreprises industrielles', 'is_correct' => false],
                            ['choice_text' => 'Un logiciel ne peut avoir aucun effet sur la société', 'is_correct' => false],
                            ['choice_text' => 'Leur activité, leurs impacts et leurs risques ne sont pas les mêmes', 'is_correct' => true],
                            ['choice_text' => 'Chaque secteur a sa propre définition légale de l’ESG', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un constructeur automobile s’attend à des matières premières plus chères à cause de la transition énergétique. Dans une valorisation par actualisation des flux (DCF), qu’est-ce que cela touche directement ?',
                        'explanation' => 'Des coûts plus élevés réduisent les flux de trésorerie prévus, et donc la valeur actualisée. Le facteur ESG entre ainsi dans le calcul.',
                        'choices' => [
                            ['choice_text' => 'Les flux de trésorerie futurs, donc la valeur estimée de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Le taux de l’impôt sur les sociétés payé par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’actions en circulation sur le marché', 'is_correct' => false],
                            ['choice_text' => 'La valeur d’origine des usines inscrite au bilan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de l’intégration ESG ?',
                        'explanation' => 'Au lieu de garder l’ESG dans une liste à part, on le relie aux chiffres qui comptent pour la décision d’investir.',
                        'choices' => [
                            ['choice_text' => 'Elle assure à l’investisseur un rendement supérieur à celui du marché sur le long terme', 'is_correct' => false],
                            ['choice_text' => 'Elle relie les facteurs ESG utiles aux risques et aux hypothèses du modèle financier', 'is_correct' => true],
                            ['choice_text' => 'Elle dispense de faire une valorisation de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle donne le même poids à tous les secteurs d’activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste reprend la note ESG d’un fournisseur de données sans lire sa méthode. Quel problème peut-il rencontrer ?',
                        'explanation' => 'Une même entreprise peut être bien notée chez l’un et moyennement chez l’autre. Il faut connaître la méthode avant de comparer.',
                        'choices' => [
                            ['choice_text' => 'La note donne la valeur intrinsèque de l’action, qu’il suffit ensuite de comparer au cours de bourse', 'is_correct' => false],
                            ['choice_text' => 'La loi impose le même barème à tous les fournisseurs de notes ESG', 'is_correct' => false],
                            ['choice_text' => 'La note ne porte que sur la rentabilité passée de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les notes de deux fournisseurs peuvent différer, car méthodes et pondérations changent', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise publie un reporting ESG bien plus complet, mais ses pratiques n’ont pas changé. Que doit faire l’analyste ?',
                        'explanation' => 'Un beau rapport montre de la transparence, pas une amélioration. L’analyste compare ce qui est dit avec les actions et les données observables.',
                        'choices' => [
                            ['choice_text' => 'Considérer que plus de reporting crée forcément de la valeur', 'is_correct' => false],
                            ['choice_text' => 'Ne plus lire les états financiers, devenus moins utiles', 'is_correct' => false],
                            ['choice_text' => 'Distinguer la qualité de la communication des vrais changements sur le terrain', 'is_correct' => true],
                            ['choice_text' => 'Renoncer à vérifier les indicateurs publiés, puisque l’entreprise les a elle-même rédigés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim construit le modèle d’une usine. Quelle information ESG peut changer son hypothèse de coûts ?',
                        'explanation' => 'Si le carbone coûte plus cher, l’usine paiera davantage : l’information se traduit directement en dirhams dans le modèle.',
                        'choices' => [
                            ['choice_text' => 'Un prix du carbone plus élevé, qui fait grimper les dépenses de l’usine', 'is_correct' => true],
                            ['choice_text' => 'Un changement de logo et de charte graphique de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un rapport annuel plus long que celui de l’an dernier', 'is_correct' => false],
                            ['choice_text' => 'Le départ à la retraite du directeur financier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une chaîne de magasins dépend d’une région menacée par le manque d’eau. En quoi est-ce important pour un investisseur ?',
                        'explanation' => 'L’effet dépend de l’activité et de l’exposition de l’entreprise, mais une ressource qui manque finit par coûter de l’argent.',
                        'choices' => [
                            ['choice_text' => 'Le stress hydrique détermine à lui seul le cours de l’action de la chaîne de magasins chaque jour de bourse', 'is_correct' => false],
                            ['choice_text' => 'Le manque d’eau peut perturber les opérations, faire monter les coûts ou freiner la production', 'is_correct' => true],
                            ['choice_text' => 'Les magasins n’utilisent pas d’eau, donc l’enjeu ne les concerne pas', 'is_correct' => false],
                            ['choice_text' => 'Les distributeurs doivent alors vendre leurs actifs à un fonds vert', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle bonne pratique améliore une analyse ESG ?',
                        'explanation' => 'Un indicateur isolé dit peu. Il prend du sens quand on le replace dans son secteur, face aux concurrents et sur plusieurs années.',
                        'choices' => [
                            ['choice_text' => 'Utiliser le même indicateur pour toutes les entreprises, quel que soit leur secteur d’activité ou leur taille', 'is_correct' => false],
                            ['choice_text' => 'Comparer les indicateurs à l’activité, aux concurrents et à leur évolution dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Écarter les données chiffrées au profit de simples témoignages', 'is_correct' => false],
                            ['choice_text' => 'Considérer qu’un bon score règle la question de la valorisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une usine déplore beaucoup d’accidents du travail. Quelles conséquences financières peut-on examiner ?',
                        'explanation' => 'La sécurité au travail coûte quand elle échoue : arrêts, assurance, règles plus strictes, réputation. L’analyste doit ensuite chiffrer l’importance réelle.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du dividende, grâce aux économies réalisées sur la formation du personnel', 'is_correct' => false],
                            ['choice_text' => 'Une dépréciation de la monnaie locale, qui renchérit les matières importées', 'is_correct' => false],
                            ['choice_text' => 'Des arrêts de production, des primes d’assurance plus élevées et une image abîmée', 'is_correct' => true],
                            ['choice_text' => 'Aucune, car la sécurité relève des ressources humaines et pas des finances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « matérialité financière » en ESG ?',
                        'explanation' => 'Un sujet est matériel s’il peut peser sur les résultats ou la valeur. Cela change selon les entreprises, les secteurs et les époques.',
                        'choices' => [
                            ['choice_text' => 'Tout enjeu environnemental est automatiquement important pour une entreprise, quel que soit son secteur', 'is_correct' => false],
                            ['choice_text' => 'Un enjeu est assez important pour influencer la performance économique de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une information n’est utile que si elle est positive pour l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un indicateur doit être calculé de la même façon dans tous les secteurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Impact investing et mesure des résultats',
                'description' => 'Ce quiz aborde l\'investissement à impact, l\'intentionnalité, l\'additionalité, les indicateurs d\'impact et la distinction entre impact et simple sélection ESG.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qui distingue l’impact investing d’une simple sélection ESG ?',
                        'explanation' => 'L’impact investing repose sur l’intention et la mesure : on veut un effet précis, social ou environnemental, et on le chiffre.',
                        'choices' => [
                            ['choice_text' => 'Il n’a pas d’objectif de rendement financier, seul le résultat social compte pour l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Il se limite aux obligations d’État de pays émergents', 'is_correct' => false],
                            ['choice_text' => 'Il ignore les risques, que la sélection ESG prend en compte', 'is_correct' => false],
                            ['choice_text' => 'Il vise exprès un résultat social ou environnemental mesurable, en plus d’un rendement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds finance une société qui installe des purificateurs d’eau dans des villages et compte les foyers desservis. Qu’est-ce que ce chiffre mesure ?',
                        'explanation' => 'Le nombre de foyers desservis est un indicateur de résultat : il montre ce que le financement a changé.',
                        'choices' => [
                            ['choice_text' => 'Un résultat concret lié à l’objectif d’impact', 'is_correct' => true],
                            ['choice_text' => 'La qualité de la gouvernance de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'L’exposition du fonds au risque de change', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité financière attendue du fonds', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’additionalité en impact investing ?',
                        'explanation' => 'Un bon résultat n’est pas forcément dû à l’investisseur. L’additionalité demande : sans mon argent, cela aurait-il eu lieu ?',
                        'choices' => [
                            ['choice_text' => 'Additionner les montants investis dans chaque projet du fonds pour obtenir l’impact total de l’année', 'is_correct' => false],
                            ['choice_text' => 'Mesurer le coupon cumulé versé par les obligations du fonds', 'is_correct' => false],
                            ['choice_text' => 'Ajouter des indicateurs ESG à ceux déjà publiés par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Se demander si le financement a changé quelque chose qui ne se serait pas fait sans lui', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds achète des actions d’un grand groupe déjà réputé pour ses bonnes pratiques sociales, sans chercher à changer quoi que ce soit. Est-ce de l’impact investing ?',
                        'explanation' => 'Bien noté ESG ne veut pas dire investissement à impact. Il faut une intention de départ et un cadre de mesure.',
                        'choices' => [
                            ['choice_text' => 'Oui, toute entreprise bien notée sur le plan social relève de l’impact investing quel que soit le fonds', 'is_correct' => false],
                            ['choice_text' => 'Oui, dès lors que l’action est cotée sur un marché réglementé', 'is_correct' => false],
                            ['choice_text' => 'Non, de bonnes pratiques ne suffisent pas : il faut une intention d’impact et une mesure', 'is_correct' => true],
                            ['choice_text' => 'Non, car l’impact investing se limite aux sociétés non cotées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est le plus utile pour juger un programme d’accès à l’énergie ?',
                        'explanation' => 'Un bon indicateur d’impact colle au résultat recherché. Ici : combien de foyers ont enfin accès à l’énergie.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de réunions tenues par le conseil du programme', 'is_correct' => false],
                            ['choice_text' => 'Le montant total des frais de gestion du fonds', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de communiqués publiés sur le programme', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de ménages nouvellement raccordés à une énergie fiable', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds d’impact ne regarde que les montants investis. Quel est le défaut de cette méthode ?',
                        'explanation' => 'Le montant investi dit ce qu’on a mis, pas ce qu’on a obtenu. Il faut aussi suivre les résultats.',
                        'choices' => [
                            ['choice_text' => 'Les montants investis sont impossibles à connaître avant la fin du projet', 'is_correct' => false],
                            ['choice_text' => 'Un petit investissement produit plus d’impact qu’un gros', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup d’argent peut être investi sans produire le résultat attendu', 'is_correct' => true],
                            ['choice_text' => 'Les fonds d’impact n’ont pas de budget à suivre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dit avoir « évité 100 tonnes de CO2 » sans préciser la méthode ni la situation de référence. Que fait l’investisseur ?',
                        'explanation' => '« Évité » se calcule par rapport à un scénario de référence. Sans méthode ni périmètre, impossible de juger le chiffre.',
                        'choices' => [
                            ['choice_text' => 'Il retient le chiffre, qui est mesuré de la même façon partout', 'is_correct' => false],
                            ['choice_text' => 'Il écarte l’entreprise, car toute donnée climatique est trompeuse', 'is_correct' => false],
                            ['choice_text' => 'Il demande la méthode de calcul, le périmètre et le scénario de référence', 'is_correct' => true],
                            ['choice_text' => 'Il le convertit en gain financier pour l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « intentionnalité » en impact investing ?',
                        'explanation' => 'L’impact est voulu et intégré dès la décision d’investir, pas constaté par hasard.',
                        'choices' => [
                            ['choice_text' => 'L’investisseur vise volontairement un résultat d’impact précis dès le départ', 'is_correct' => true],
                            ['choice_text' => 'Un effet positif apparaît après coup, sans que l’investisseur l’ait visé', 'is_correct' => false],
                            ['choice_text' => 'L’investisseur accepte de renoncer à tout rendement financier', 'is_correct' => false],
                            ['choice_text' => 'L’investisseur laisse l’entreprise financée fixer seule ses objectifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une PME construit des logements très économes en énergie pour des ménages modestes. Quel double objectif caractérise un investissement à impact ?',
                        'explanation' => 'L’impact investing associe un rendement à un résultat social ou environnemental qu’on peut documenter.',
                        'choices' => [
                            ['choice_text' => 'Un objectif financier et un objectif social ou environnemental mesurable', 'is_correct' => true],
                            ['choice_text' => 'Un objectif de communication et un objectif de notoriété de la marque', 'is_correct' => false],
                            ['choice_text' => 'Un objectif fiscal et un objectif de hausse du nombre d’actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Un objectif de liquidité et un objectif de couverture de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds finance une clinique dans une zone sans médecin. Que suivre pour mesurer l’impact ?',
                        'explanation' => 'L’impact se mesure sur le résultat visé : ici, plus de patients soignés et un meilleur accès aux soins.',
                        'choices' => [
                            ['choice_text' => 'La valeur boursière du fonds et son évolution sur l’année', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de pages du rapport annuel du fonds et sa date de publication sur le site', 'is_correct' => false],
                            ['choice_text' => 'Le rendement du fonds comparé à celui de son indice de référence sur les trois dernières années', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de patients supplémentaires soignés et l’amélioration mesurée de l’accès aux soins', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Disclosure, données ESG et greenwashing',
                'description' => 'Ce quiz examine la qualité de l\'information ESG, la cohérence des communications, la comparaison des indicateurs et l\'identification des situations de greenwashing.',
                'questions' => [
                    [
                        'question' => 'Que veut dire « greenwashing » ?',
                        'explanation' => 'Le greenwashing, c’est l’écologie en façade : une image verte trompeuse, exagérée ou mal étayée.',
                        'choices' => [
                            ['choice_text' => 'Réduire réellement les émissions d’une usine grâce à de nouvelles machines', 'is_correct' => false],
                            ['choice_text' => 'Présenter une activité ou un produit comme plus durable qu’il ne l’est vraiment', 'is_correct' => true],
                            ['choice_text' => 'Faire monter le rendement d’une obligation verte par une communication soignée', 'is_correct' => false],
                            ['choice_text' => 'Publier un audit financier annuel certifié par un commissaire aux comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société met en avant ses 5 % d’activités vertes et tait que 95 % de son chiffre d’affaires vient d’activités très carbonées. Quel est le problème ?',
                        'explanation' => 'On peut tromper avec un chiffre juste si on cache le reste. La transparence demande de montrer le tableau complet.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre est exact, mais la présentation est partielle et peut tromper l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Aucun, puisque le chiffre de 5 % est exact et vérifiable', 'is_correct' => false],
                            ['choice_text' => 'Cela prouve que la société est en route vers la neutralité carbone', 'is_correct' => false],
                            ['choice_text' => 'C’est un risque de change, car l’activité carbonée est réalisée à l’étranger et facturée en devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comparer les chiffres ESG de deux entreprises est souvent difficile. Qu’est-ce qui l’explique ?',
                        'explanation' => 'Deux « émissions totales » peuvent couvrir des périmètres différents. Avant de comparer, on regarde comment les chiffres ont été produits.',
                        'choices' => [
                            ['choice_text' => 'Les données ESG sont qualitatives et ne peuvent pas être chiffrées, donc pas comparées', 'is_correct' => false],
                            ['choice_text' => 'Elles peuvent retenir des périmètres, des définitions ou des méthodes de calcul différents', 'is_correct' => true],
                            ['choice_text' => 'Les entreprises n’ont pas le droit de publier des indicateurs chiffrés sur leurs émissions', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises changent chaque année de monnaie de présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fabricant affiche « 100 % durable » sans dire ce que cela couvre. Quelle est la bonne réaction ?',
                        'explanation' => 'Une formule aussi large doit être replacée dans son périmètre, avec sa méthode et ses preuves.',
                        'choices' => [
                            ['choice_text' => 'Croire que toute l’entreprise est durable, puisque le slogan est clair et bien affiché', 'is_correct' => false],
                            ['choice_text' => 'Ne pas s’en préoccuper, car un slogan commercial est précis par nature', 'is_correct' => false],
                            ['choice_text' => 'Demander la définition, le périmètre et les preuves derrière cette affirmation', 'is_correct' => true],
                            ['choice_text' => 'En conclure que le fabricant ne court plus aucun risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rapport annonce −20 % d’émissions, mais une partie vient d’un changement de périmètre. Comment lire ce chiffre ?',
                        'explanation' => 'Si l’entreprise vend une usine ou change de méthode, le chiffre baisse sans que ses activités soient plus propres. Il faut séparer les deux effets.',
                        'choices' => [
                            ['choice_text' => 'Il faut tenir compte du changement de périmètre avant d’y voir un vrai progrès', 'is_correct' => true],
                            ['choice_text' => 'C’est une baisse opérationnelle pure, puisque le chiffre est publié', 'is_correct' => false],
                            ['choice_text' => 'Le changement de périmètre prouve que l’entreprise progresse', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre de 20 % est à diviser par deux pour obtenir la vraie baisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur regarde les données ESG d’une entreprise sur plusieurs années. Qu’y gagne-t-il ?',
                        'explanation' => 'Une série sur plusieurs années montre la trajectoire. Elle ne garantit pas l’avenir, mais évite de s’emballer pour une seule bonne année.',
                        'choices' => [
                            ['choice_text' => 'Il obtient la certitude que les bons résultats passés se répéteront dans les années à venir', 'is_correct' => false],
                            ['choice_text' => 'Il remplace l’analyse des états financiers par une série ESG', 'is_correct' => false],
                            ['choice_text' => 'Il voit une tendance et distingue une amélioration durable d’un effet ponctuel', 'is_correct' => true],
                            ['choice_text' => 'Il peut se passer de comparer l’entreprise à ses concurrents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise promet de réduire ses émissions d’ici 2035. Qu’est-ce qui rend cet objectif crédible ?',
                        'explanation' => 'Un objectif lointain ne vaut que par ses jalons, ses moyens et son suivi chiffré.',
                        'choices' => [
                            ['choice_text' => 'Un communiqué de presse long et très détaillé qui présente l’objectif à l’horizon 2035', 'is_correct' => false],
                            ['choice_text' => 'Un objectif fixé le plus loin possible, sans rendez-vous avant 2035', 'is_correct' => false],
                            ['choice_text' => 'Un logo et une charte graphique dédiés au plan climat', 'is_correct' => false],
                            ['choice_text' => 'Des étapes intermédiaires, des investissements prévus et des indicateurs de suivi', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le signe d’alerte de greenwashing le plus net ?',
                        'explanation' => 'Mettre en avant le positif et taire le reste est le grand classique. Les trois autres exemples vont dans le sens de la transparence.',
                        'choices' => [
                            ['choice_text' => 'Un rapport détaillé qui explique aussi les limites de ses données', 'is_correct' => false],
                            ['choice_text' => 'Une campagne très visible sur quelques projets verts, sans information sur le reste', 'is_correct' => true],
                            ['choice_text' => 'La publication claire de la méthode de calcul des émissions', 'is_correct' => false],
                            ['choice_text' => 'Un bilan qui présente à la fois les résultats positifs et négatifs de l’ensemble des activités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que doit faire un fonds durable pour limiter le risque de greenwashing ?',
                        'explanation' => 'Plus le fonds est précis sur ce qu’il fait et sur ce qu’il ne fait pas, plus l’investisseur peut juger sans se laisser piéger.',
                        'choices' => [
                            ['choice_text' => 'Expliquer clairement sa méthode, ses critères, ses limites et ses principaux risques', 'is_correct' => true],
                            ['choice_text' => 'Employer des mots comme « vert » ou « responsable » sans prendre la peine de les définir ni de les chiffrer', 'is_correct' => false],
                            ['choice_text' => 'Garder confidentielle la liste des secteurs exclus et conservés', 'is_correct' => false],
                            ['choice_text' => 'Annoncer une performance supérieure à celle du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une donnée ESG d’une entreprise est une estimation, faute de mesure directe. Que faire ?',
                        'explanation' => 'Beaucoup de données ESG sont estimées. Ni fausses ni parfaites : on regarde la méthode et l’importance de la donnée.',
                        'choices' => [
                            ['choice_text' => 'Rejeter la donnée, une estimation étant par nature inutilisable', 'is_correct' => false],
                            ['choice_text' => 'La traiter comme un fait exact, car elle est publiée', 'is_correct' => false],
                            ['choice_text' => 'Examiner la méthode d’estimation et son poids possible dans l’analyse', 'is_correct' => true],
                            ['choice_text' => 'Considérer que l’incertitude ne compte pas si l’entreprise est cotée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment vérifier qu’un fonds applique vraiment sa stratégie ESG ?',
                        'explanation' => 'Les preuves sont dans les faits : ce que le fonds détient, selon quels critères, et ce qu’il rapporte. Un slogan ne prouve rien.',
                        'choices' => [
                            ['choice_text' => 'En lisant le slogan publicitaire et la brochure du fonds', 'is_correct' => false],
                            ['choice_text' => 'En comparant la performance du fonds à celle de son indice', 'is_correct' => false],
                            ['choice_text' => 'En comptant les mentions du mot « durable » dans l’ensemble de ses documents commerciaux', 'is_correct' => false],
                            ['choice_text' => 'En regardant la composition du portefeuille, ses critères et son reporting', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds dit sélectionner des entreprises à trajectoire climatique crédible. Qu’est-ce qui renforce cette affirmation ?',
                        'explanation' => 'Une stratégie est crédible quand on peut la vérifier : méthode explicite, critères observables, suivi dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Des critères définis, des données vérifiables et un suivi des entreprises détenues', 'is_correct' => true],
                            ['choice_text' => 'L’emploi fréquent du mot « durable » dans ses publicités', 'is_correct' => false],
                            ['choice_text' => 'Une promesse de rendement supérieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Une liste de critères tenue secrète pour protéger sa stratégie vis-à-vis des concurrents', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Décisions de financement durable : mini-cas',
                'description' => 'Des mini-cas simples pour appliquer les notions ESG, de climat, d\'impact, de green bonds et de transition finance à des décisions financières concrètes.',
                'questions' => [
                    [
                        'question' => 'Une banque étudie le prêt d’une usine dont l’énergie pèse lourd dans les charges. L’entreprise prévoit de réduire sa consommation de 30 %. Quelle information serait la plus utile à la banque ?',
                        'explanation' => 'Pour relier l’ESG à la décision de prêt, la banque regarde l’investissement nécessaire, les économies espérées et l’effet sur les flux de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Le slogan ESG que l’entreprise a choisi pour sa communication', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’abonnés de l’entreprise sur les réseaux sociaux', 'is_correct' => false],
                            ['choice_text' => 'Le classement de l’entreprise dans un palmarès de marque employeur publié par la presse', 'is_correct' => false],
                            ['choice_text' => 'Le coût du programme, les économies attendues et l’effet sur les charges futures', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds hésite entre deux entreprises du même secteur. A a de meilleurs indicateurs ESG mais coûte beaucoup plus cher que B. Que ferait un gérant qui intègre l’ESG ?',
                        'explanation' => 'L’ESG ne remplace pas l’analyse financière : le prix payé et le rendement attendu comptent toujours.',
                        'choices' => [
                            ['choice_text' => 'Il achète A d’office, puisque son score ESG est plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Il compare l’ESG et la valorisation avant de décider, sans choisir A d’office', 'is_correct' => true],
                            ['choice_text' => 'Il vend B, car une valorisation basse signale un mauvais profil ESG de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Il met de côté la valorisation, qui n’a pas de lien avec l’ESG', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une ville veut financer des bus électriques par une green bond. Que doit-elle clarifier avant d’émettre ?',
                        'explanation' => 'La crédibilité d’une green bond repose sur un cadre clair : éligibilité, gestion des fonds, reporting.',
                        'choices' => [
                            ['choice_text' => 'Les projets éligibles, le suivi des fonds et la façon de rendre compte des résultats', 'is_correct' => true],
                            ['choice_text' => 'La couleur et le format du certificat remis aux investisseurs lors de la première souscription', 'is_correct' => false],
                            ['choice_text' => 'Le cours que l’obligation atteindra sur le marché secondaire', 'is_correct' => false],
                            ['choice_text' => 'Le moyen d’éliminer tout risque de taux pour les acheteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un groupe pétrolier annonce qu’il baissera ses émissions, mais sans investissements chiffrés. Qu’est-ce qui doit inquiéter son financeur ?',
                        'explanation' => 'Un plan de transition doit être assez précis pour être jugé : actions, moyens, étapes, résultats. Des objectifs flous ne rassurent pas un financeur.',
                        'choices' => [
                            ['choice_text' => 'Le fait que toute transition soit techniquement impossible dans ce secteur', 'is_correct' => false],
                            ['choice_text' => 'Le risque de réputation, qui n’existe que pour les entreprises vertes', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité de mesurer les émissions d’un groupe pétrolier', 'is_correct' => false],
                            ['choice_text' => 'Le manque de crédibilité et de faisabilité de la trajectoire de transition', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds à impact finance une entreprise sociale d’accès à l’eau potable et veut savoir si son argent a vraiment aidé. Que doit-il chercher ?',
                        'explanation' => 'Il faut des résultats chiffrés (foyers desservis) et une explication de ce que le financement y a changé.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d’affaires de l’entreprise, qui prouve à lui seul l’impact du financement reçu', 'is_correct' => false],
                            ['choice_text' => 'Des indicateurs de résultats et un lien clair entre son financement et ces résultats', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de réunions du conseil tenues dans l’année', 'is_correct' => false],
                            ['choice_text' => 'L’évolution du taux de change de la monnaie locale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une marque affirme qu’un produit est « bon pour le climat » parce qu’il est recyclable, sans parler des émissions de fabrication ni d’usage. Que fait l’analyste ?',
                        'explanation' => 'Être recyclable est un atout, mais ne dit rien des émissions de fabrication et d’usage. Il faut élargir le regard.',
                        'choices' => [
                            ['choice_text' => 'Il demande ce que couvre l’affirmation et regarde les autres étapes du cycle de vie', 'is_correct' => true],
                            ['choice_text' => 'Il conclut que le produit est neutre en carbone, puisqu’il est recyclable en fin de vie', 'is_correct' => false],
                            ['choice_text' => 'Il admet que le recyclage compense les émissions des autres étapes', 'is_correct' => false],
                            ['choice_text' => 'Il met de côté les données environnementales de la marque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une exploitation agricole subit des sécheresses. Elle installe l’irrigation et diversifie ses cultures. Comment qualifier ces actions ?',
                        'explanation' => 'Irrigation et diversification rendent l’exploitation moins vulnérable, sans effacer totalement l’incertitude.',
                        'choices' => [
                            ['choice_text' => 'Ce sont des mesures d’atténuation qui réduisent ses émissions de gaz à effet de serre', 'is_correct' => false],
                            ['choice_text' => 'Ce sont des mesures d’adaptation qui réduisent son exposition à certains risques physiques', 'is_correct' => true],
                            ['choice_text' => 'Ce sont des mesures de gouvernance qui améliorent son contrôle interne', 'is_correct' => false],
                            ['choice_text' => 'Ce sont des mesures de transition qui suppriment le risque de sécheresse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur compare une obligation verte et une obligation classique du même émetteur, aux caractéristiques financières proches. Qu’est-ce qui compte en plus pour la verte ?',
                        'explanation' => 'À qualité financière égale, c’est le cadre vert qui fait la différence. Le risque de crédit reste à analyser dans les deux cas.',
                        'choices' => [
                            ['choice_text' => 'Son rendement, supposé plus élevé que celui de l’obligation classique', 'is_correct' => false],
                            ['choice_text' => 'Son risque de défaut, supposé plus faible du fait de son étiquette verte', 'is_correct' => false],
                            ['choice_text' => 'Le sérieux de l’emploi des fonds et du reporting environnemental', 'is_correct' => true],
                            ['choice_text' => 'Son cours, supposé monter après l’émission grâce à l’étiquette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a un très bon score ESG global, mais une grosse controverse environnementale sur une activité importante. Que fait un analyste prudent ?',
                        'explanation' => 'Un score global peut masquer un point faible important. L’analyste regarde le détail et ce qui compte vraiment pour l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Il ignore la controverse, le score global étant élevé', 'is_correct' => false],
                            ['choice_text' => 'Il examine les sous-scores et pèse l’importance réelle de la controverse', 'is_correct' => true],
                            ['choice_text' => 'Il juge l’entreprise irresponsable d’office, malgré son score', 'is_correct' => false],
                            ['choice_text' => 'Il suppose que tous les fournisseurs de notes traitent la controverse pareil', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef lit qu’une entreprise a « compensé » ses émissions avec des crédits carbone, alors que ses usines émettent toujours autant. Que peut-il en dire ?',
                        'explanation' => 'Compenser, c’est payer pour une réduction réalisée ailleurs. Les émissions des usines, elles, n’ont pas bougé : il ne faut pas confondre compensation et réduction.',
                        'choices' => [
                            ['choice_text' => 'Elle a réduit ses émissions, puisque les crédits carbone annulent le CO2 émis', 'is_correct' => false],
                            ['choice_text' => 'Ses usines émettent autant, la compensation finance un effort ailleurs', 'is_correct' => true],
                            ['choice_text' => 'Elle est neutre en carbone d’office, sans rien changer à ses usines', 'is_correct' => false],
                            ['choice_text' => 'Les crédits carbone sont interdits aux sociétés cotées en bourse', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
