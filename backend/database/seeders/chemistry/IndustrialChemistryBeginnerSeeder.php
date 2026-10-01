<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class IndustrialChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'industrial-chemistry')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
            8 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Découvrir la chimie industrielle",
                'description' => "Comprendre le rôle de la chimie industrielle, ses matières premières, ses produits et ses principales contraintes.",
                'questions' => [
                    [
                        'question' => "Quel est l’objectif général de la chimie industrielle ?",
                        'explanation' => "La chimie industrielle cherche à fabriquer des produits utiles à grande échelle, de façon régulière, sûre et économiquement viable.",
                        'choices' => [
                            ['choice_text' => "Fabriquer uniquement des produits de laboratoire", 'is_correct' => false],
                            ['choice_text' => "Produire des substances utiles à grande échelle", 'is_correct' => true],
                            ['choice_text' => "Éviter toute transformation chimique", 'is_correct' => false],
                            ['choice_text' => "Remplacer toutes les matières premières par de l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une usine chimique, quelle est la différence la plus simple entre une matière première et un produit ?",
                        'explanation' => "La matière première entre dans le procédé. Le produit est la substance obtenue à la sortie, parfois après plusieurs étapes.",
                        'choices' => [
                            ['choice_text' => "La matière première entre dans le procédé, le produit en sort", 'is_correct' => true],
                            ['choice_text' => "Les deux mots désignent toujours la même chose", 'is_correct' => false],
                            ['choice_text' => "Le produit doit toujours être un gaz", 'is_correct' => false],
                            ['choice_text' => "La matière première est forcément un déchet", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une usine cherche-t-elle à obtenir une qualité constante ?",
                        'explanation' => "Les clients et les procédés en aval ont besoin d’un produit dont la composition respecte des spécifications régulières.",
                        'choices' => [
                            ['choice_text' => "Pour que chaque lot respecte les mêmes spécifications", 'is_correct' => true],
                            ['choice_text' => "Pour changer la formule du produit à chaque lot", 'is_correct' => false],
                            ['choice_text' => "Pour éviter tout contrôle", 'is_correct' => false],
                            ['choice_text' => "Pour rendre la production aléatoire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément est particulièrement important avant de lancer une production industrielle ?",
                        'explanation' => "Un procédé industriel doit être conçu pour fonctionner de manière sûre et maîtrisée avant d’être exploité à grande échelle.",
                        'choices' => [
                            ['choice_text' => "La sécurité du procédé", 'is_correct' => true],
                            ['choice_text' => "La couleur des murs uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de fenêtres du bureau", 'is_correct' => false],
                            ['choice_text' => "La vitesse de déplacement des visiteurs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une usine reçoit une matière première trop impure. Quel problème peut apparaître ?",
                        'explanation' => "Des impuretés peuvent perturber une réaction, contaminer le produit ou compliquer les étapes de séparation et de purification.",
                        'choices' => [
                            ['choice_text' => "Le procédé peut devenir moins efficace ou le produit moins pur", 'is_correct' => true],
                            ['choice_text' => "Le produit devient automatiquement plus pur", 'is_correct' => false],
                            ['choice_text' => "La réaction devient forcément plus rapide", 'is_correct' => false],
                            ['choice_text' => "Les impuretés disparaissent sans traitement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est un bon exemple de produit issu de la chimie industrielle ?",
                        'explanation' => "Les engrais, plastiques, solvants, détergents et de nombreux produits pharmaceutiques ou intermédiaires sont fabriqués à l’échelle industrielle.",
                        'choices' => [
                            ['choice_text' => "Un engrais fabriqué en grande quantité", 'is_correct' => true],
                            ['choice_text' => "Une seule goutte préparée en classe", 'is_correct' => false],
                            ['choice_text' => "Un échantillon sans transformation", 'is_correct' => false],
                            ['choice_text' => "Un simple thermomètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’énergie est-elle un poste important dans une usine chimique ?",
                        'explanation' => "Chauffer, refroidir, comprimer, pomper et agiter demandent souvent de l’énergie. Son coût et son efficacité comptent donc beaucoup.",
                        'choices' => [
                            ['choice_text' => "Parce que de nombreuses opérations industrielles consomment de l’énergie", 'is_correct' => true],
                            ['choice_text' => "Parce qu’aucun équipement n’en utilise", 'is_correct' => false],
                            ['choice_text' => "Parce que l’énergie remplace toujours les matières premières", 'is_correct' => false],
                            ['choice_text' => "Parce que l’énergie n’a aucun lien avec le chauffage", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Qu’appelle-t-on généralement un procédé continu ?",
                        'explanation' => "Dans un procédé continu, les matières entrent et les produits sortent de façon régulière pendant le fonctionnement de l’installation.",
                        'choices' => [
                            ['choice_text' => "Un procédé où les matières circulent de manière régulière", 'is_correct' => true],
                            ['choice_text' => "Un procédé qui ne fonctionne qu’une seule fois", 'is_correct' => false],
                            ['choice_text' => "Un procédé sans aucune mesure", 'is_correct' => false],
                            ['choice_text' => "Un procédé limité aux laboratoires scolaires", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l’intérêt d’un contrôle en cours de fabrication ?",
                        'explanation' => "Les mesures en cours de procédé permettent de repérer rapidement une dérive et d’agir avant que beaucoup de produit non conforme soit fabriqué.",
                        'choices' => [
                            ['choice_text' => "Détecter une dérive avant qu’elle ne devienne un gros problème", 'is_correct' => true],
                            ['choice_text' => "Supprimer tous les contrôles finaux", 'is_correct' => false],
                            ['choice_text' => "Empêcher toute réaction chimique", 'is_correct' => false],
                            ['choice_text' => "Rendre la production volontairement instable", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une bonne production industrielle doit généralement trouver un équilibre entre…",
                        'explanation' => "Une usine doit produire la bonne qualité avec une bonne efficacité, tout en maîtrisant les coûts, la sécurité et les impacts environnementaux.",
                        'choices' => [
                            ['choice_text' => "qualité, sécurité, efficacité, coût et environnement", 'is_correct' => true],
                            ['choice_text' => "vitesse uniquement", 'is_correct' => false],
                            ['choice_text' => "prix uniquement", 'is_correct' => false],
                            ['choice_text' => "quantité uniquement", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Matières premières et bilans simples",
                'description' => "Identifier les matières premières, les produits, les flux et les pertes dans un procédé industriel simple.",
                'questions' => [
                    [
                        'question' => "Une usine transforme du calcaire en chaux. Le calcaire utilisé au départ est…",
                        'explanation' => "Le calcaire est introduit dans le procédé et sert de matière de départ. C’est donc une matière première.",
                        'choices' => [
                            ['choice_text' => "un produit fini", 'is_correct' => false],
                            ['choice_text' => "une matière première", 'is_correct' => true],
                            ['choice_text' => "un catalyseur obligatoire", 'is_correct' => false],
                            ['choice_text' => "un déchet liquide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un bilan de matière très simple, si 100 kg de matière entrent et 92 kg de produits utiles sortent, que représentent au minimum les 8 kg restants ?",
                        'explanation' => "La différence 100 − 92 = 8 kg correspond à des matières qui ne se retrouvent pas dans le produit utile : sous-produits, pertes, résidus ou autres flux.",
                        'choices' => [
                            ['choice_text' => "8 kg de flux non comptés dans le produit utile", 'is_correct' => true],
                            ['choice_text' => "92 kg de pertes", 'is_correct' => false],
                            ['choice_text' => "100 kg de catalyseur", 'is_correct' => false],
                            ['choice_text' => "0 kg, car la matière ne se conserve pas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi séparer un sous-produit d’un produit principal peut-il être utile ?",
                        'explanation' => "La séparation permet d’obtenir un produit conforme et, dans certains cas, de récupérer ou valoriser le sous-produit.",
                        'choices' => [
                            ['choice_text' => "Pour respecter la qualité du produit et éventuellement valoriser le sous-produit", 'is_correct' => true],
                            ['choice_text' => "Pour empêcher toute mesure", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter la quantité de déchets", 'is_correct' => false],
                            ['choice_text' => "Pour rendre la réaction irréversible", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple est un flux sortant d’une usine ?",
                        'explanation' => "Un flux sortant peut être un produit, un sous-produit ou un effluent qui quitte le procédé.",
                        'choices' => [
                            ['choice_text' => "Un produit conditionné", 'is_correct' => true],
                            ['choice_text' => "Une matière première stockée avant utilisation", 'is_correct' => false],
                            ['choice_text' => "Un réactif qui n’est pas encore entré dans le procédé", 'is_correct' => false],
                            ['choice_text' => "Un capteur posé sur une conduite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si une réaction consomme 50 mol d’un réactif et en laisse 5 mol non consommées, combien de moles ont réellement réagi ?",
                        'explanation' => "La quantité consommée est directement donnée : 50 mol ont réagi. Les 5 mol restantes n’ont pas été consommées.",
                        'choices' => [
                            ['choice_text' => "5 mol", 'is_correct' => false],
                            ['choice_text' => "45 mol", 'is_correct' => false],
                            ['choice_text' => "50 mol", 'is_correct' => true],
                            ['choice_text' => "55 mol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l’intérêt d’un stockage correct des matières premières ?",
                        'explanation' => "Le stockage doit préserver la qualité et réduire les risques liés à l’humidité, à la chaleur, aux incompatibilités ou aux contaminations.",
                        'choices' => [
                            ['choice_text' => "Préserver la qualité et réduire les risques", 'is_correct' => true],
                            ['choice_text' => "Augmenter volontairement les impuretés", 'is_correct' => false],
                            ['choice_text' => "Éviter toute identification des produits", 'is_correct' => false],
                            ['choice_text' => "Supprimer les étiquettes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une matière première est hygroscopique. Quel problème peut poser une mauvaise fermeture du récipient ?",
                        'explanation' => "Une matière hygroscopique absorbe facilement l’humidité de l’air. Elle peut alors changer de composition ou de comportement dans le procédé.",
                        'choices' => [
                            ['choice_text' => "Elle peut absorber de l’humidité et perdre ses caractéristiques prévues", 'is_correct' => true],
                            ['choice_text' => "Elle devient forcément un métal", 'is_correct' => false],
                            ['choice_text' => "Elle devient automatiquement plus concentrée", 'is_correct' => false],
                            ['choice_text' => "Elle ne peut plus être pesée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une usine cherche-t-elle à limiter les pertes de matière ?",
                        'explanation' => "Moins de pertes signifie généralement moins de coût matière et moins de déchets à traiter ou à éliminer.",
                        'choices' => [
                            ['choice_text' => "Pour utiliser plus efficacement les matières et réduire les déchets", 'is_correct' => true],
                            ['choice_text' => "Pour diminuer la qualité du produit", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher la maintenance", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les contrôles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un opérateur remarque qu’un flux de sortie contient beaucoup plus de matière première qu’habituellement. Que peut-il suspecter ?",
                        'explanation' => "Une hausse inhabituelle de matière première en sortie peut indiquer une conversion insuffisante, un dosage inadapté ou un problème d’étape réactionnelle.",
                        'choices' => [
                            ['choice_text' => "Une conversion ou une opération du procédé peut être anormale", 'is_correct' => true],
                            ['choice_text' => "Le produit est forcément devenu plus pur", 'is_correct' => false],
                            ['choice_text' => "Le procédé est toujours parfait", 'is_correct' => false],
                            ['choice_text' => "Le capteur n’a aucun intérêt", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un procédé, recycler une partie d’un flux peut servir à…",
                        'explanation' => "Le recyclage permet de renvoyer une matière encore utile dans le procédé afin de réduire les pertes et améliorer l’utilisation des ressources.",
                        'choices' => [
                            ['choice_text' => "réutiliser une matière encore exploitable", 'is_correct' => true],
                            ['choice_text' => "augmenter forcément les déchets", 'is_correct' => false],
                            ['choice_text' => "supprimer tout contrôle", 'is_correct' => false],
                            ['choice_text' => "rendre toutes les réactions explosives", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Procédés, réacteurs et conditions opératoires",
                'description' => "Comprendre le rôle des réacteurs et l’influence des conditions de fonctionnement sur la production industrielle.",
                'questions' => [
                    [
                        'question' => "À quoi sert principalement un réacteur chimique industriel ?",
                        'explanation' => "Le réacteur est l’équipement où les transformations chimiques sont réalisées dans des conditions contrôlées.",
                        'choices' => [
                            ['choice_text' => "À réaliser la transformation chimique", 'is_correct' => true],
                            ['choice_text' => "À emballer les produits finis", 'is_correct' => false],
                            ['choice_text' => "À remplacer tous les capteurs", 'is_correct' => false],
                            ['choice_text' => "À stocker uniquement les déchets", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi contrôle-t-on la température d’un réacteur ?",
                        'explanation' => "La température peut modifier la vitesse de réaction, l’équilibre, la sélectivité et la sécurité du procédé.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle influence la réaction et peut aussi affecter la sécurité", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle ne change jamais rien", 'is_correct' => false],
                            ['choice_text' => "Uniquement pour colorer le produit", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer la pression", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que peut provoquer une température trop élevée dans un procédé sensible à la chaleur ?",
                        'explanation' => "Une température excessive peut accélérer des réactions indésirables, dégrader un produit ou augmenter les risques de sécurité.",
                        'choices' => [
                            ['choice_text' => "Des réactions secondaires ou une dégradation du produit", 'is_correct' => true],
                            ['choice_text' => "Une qualité automatiquement meilleure", 'is_correct' => false],
                            ['choice_text' => "La disparition de la matière", 'is_correct' => false],
                            ['choice_text' => "La suppression de toute réaction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un procédé où la réaction est endothermique, pourquoi peut-on devoir chauffer le réacteur ?",
                        'explanation' => "Une réaction endothermique absorbe de la chaleur. Le chauffage fournit donc l’énergie nécessaire au maintien des conditions de réaction.",
                        'choices' => [
                            ['choice_text' => "Pour fournir la chaleur consommée par la réaction", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer les réactifs", 'is_correct' => false],
                            ['choice_text' => "Pour rendre le produit solide", 'is_correct' => false],
                            ['choice_text' => "Pour diminuer automatiquement la pression", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la pression peut-elle être importante dans un réacteur contenant des gaz ?",
                        'explanation' => "La pression agit sur les débits, la densité des gaz, les équilibres et parfois la sécurité mécanique de l’installation.",
                        'choices' => [
                            ['choice_text' => "Elle influence le comportement des gaz et certaines réactions", 'is_correct' => true],
                            ['choice_text' => "Elle n’a aucun effet sur les gaz", 'is_correct' => false],
                            ['choice_text' => "Elle sert seulement à changer la couleur", 'is_correct' => false],
                            ['choice_text' => "Elle remplace la température dans tous les procédés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réaction est trop lente à la température choisie. Quelle action peut être étudiée en premier, selon le procédé ?",
                        'explanation' => "Augmenter la température peut accélérer la réaction, mais il faut vérifier les effets sur l’équilibre, la sélectivité et la sécurité avant toute modification.",
                        'choices' => [
                            ['choice_text' => "Étudier une augmentation de température dans les limites sûres du procédé", 'is_correct' => true],
                            ['choice_text' => "Modifier au hasard toutes les vannes", 'is_correct' => false],
                            ['choice_text' => "Arrêter tous les contrôles", 'is_correct' => false],
                            ['choice_text' => "Ajouter un déchet", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la sélectivité d’un procédé est-elle importante ?",
                        'explanation' => "Une bonne sélectivité permet de former davantage du produit recherché et moins de sous-produits indésirables.",
                        'choices' => [
                            ['choice_text' => "Pour favoriser le produit souhaité plutôt que les produits secondaires", 'is_correct' => true],
                            ['choice_text' => "Pour produire uniquement des déchets", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toute réaction", 'is_correct' => false],
                            ['choice_text' => "Pour rendre les matières premières inutiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Qu’est-ce que le temps de séjour, au sens simple, dans un réacteur continu ?",
                        'explanation' => "Il représente approximativement le temps moyen pendant lequel une matière reste dans la zone de réaction.",
                        'choices' => [
                            ['choice_text' => "Le temps moyen passé dans le réacteur", 'is_correct' => true],
                            ['choice_text' => "Le temps de pause de l’opérateur", 'is_correct' => false],
                            ['choice_text' => "Le temps de stockage après emballage", 'is_correct' => false],
                            ['choice_text' => "Le temps nécessaire au nettoyage du bureau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si on augmente fortement le débit d’alimentation d’un réacteur continu sans changer son volume, que peut-il se passer pour le temps de séjour ?",
                        'explanation' => "À volume fixé, un débit plus élevé signifie généralement que la matière traverse plus vite le réacteur, donc que le temps de séjour moyen diminue.",
                        'choices' => [
                            ['choice_text' => "Il peut diminuer", 'is_correct' => true],
                            ['choice_text' => "Il devient forcément infini", 'is_correct' => false],
                            ['choice_text' => "Il reste toujours exactement identique", 'is_correct' => false],
                            ['choice_text' => "Il devient négatif", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il suivre plusieurs variables à la fois dans un procédé industriel ?",
                        'explanation' => "La température, la pression, les débits et la composition peuvent interagir. Une seule mesure ne donne pas toujours une image suffisante de l’état du procédé.",
                        'choices' => [
                            ['choice_text' => "Parce que les variables du procédé peuvent être liées entre elles", 'is_correct' => true],
                            ['choice_text' => "Parce qu’une mesure suffit toujours", 'is_correct' => false],
                            ['choice_text' => "Pour rendre les données inutiles", 'is_correct' => false],
                            ['choice_text' => "Pour éviter de comprendre le procédé", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Séparations et purification industrielles",
                'description' => "Reconnaître les principales techniques de séparation utilisées pour purifier ou récupérer les produits.",
                'questions' => [
                    [
                        'question' => "Quelle opération est particulièrement adaptée pour séparer deux liquides ayant des températures d’ébullition différentes ?",
                        'explanation' => "La distillation exploite les différences de volatilité et donc, dans le cas simple, de températures d’ébullition.",
                        'choices' => [
                            ['choice_text' => "La distillation", 'is_correct' => true],
                            ['choice_text' => "La filtration uniquement", 'is_correct' => false],
                            ['choice_text' => "Le broyage", 'is_correct' => false],
                            ['choice_text' => "Le mélange", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour retirer des particules solides d’un liquide, quelle technique simple peut convenir ?",
                        'explanation' => "La filtration retient les particules solides sur un filtre tout en laissant passer le liquide.",
                        'choices' => [
                            ['choice_text' => "La filtration", 'is_correct' => true],
                            ['choice_text' => "La distillation", 'is_correct' => false],
                            ['choice_text' => "La compression", 'is_correct' => false],
                            ['choice_text' => "La combustion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle principal d’un échangeur thermique dans une usine chimique ?",
                        'explanation' => "Un échangeur permet de transférer de la chaleur entre deux fluides sans nécessairement les mélanger directement.",
                        'choices' => [
                            ['choice_text' => "Transférer de la chaleur entre des fluides", 'is_correct' => true],
                            ['choice_text' => "Séparer les atomes d’une molécule", 'is_correct' => false],
                            ['choice_text' => "Mesurer le pH sans capteur", 'is_correct' => false],
                            ['choice_text' => "Stocker uniquement les déchets solides", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une étape de purification peut-elle être nécessaire après une réaction ?",
                        'explanation' => "La réaction peut produire un mélange contenant le produit souhaité, des réactifs restants, des solvants ou des sous-produits.",
                        'choices' => [
                            ['choice_text' => "Pour isoler le produit recherché du reste du mélange", 'is_correct' => true],
                            ['choice_text' => "Parce qu’une réaction ne produit jamais de mélange", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toutes les matières premières avant la réaction", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher le produit de sortir de l’usine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel procédé utilise une membrane pour laisser passer certaines espèces plus facilement que d’autres ?",
                        'explanation' => "Les procédés membranaires utilisent une membrane sélective pour séparer les espèces selon leur taille, charge ou autres propriétés selon la technique.",
                        'choices' => [
                            ['choice_text' => "La séparation membranaire", 'is_correct' => true],
                            ['choice_text' => "Le broyage", 'is_correct' => false],
                            ['choice_text' => "La combustion", 'is_correct' => false],
                            ['choice_text' => "La fusion nucléaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une colonne de distillation, les espèces les plus volatiles ont tendance à…",
                        'explanation' => "Les composés plus volatils passent plus facilement dans la phase vapeur et sont généralement enrichis vers le haut de la colonne.",
                        'choices' => [
                            ['choice_text' => "être davantage présentes vers le haut de la colonne", 'is_correct' => true],
                            ['choice_text' => "rester toujours dans le bas uniquement", 'is_correct' => false],
                            ['choice_text' => "devenir automatiquement solides", 'is_correct' => false],
                            ['choice_text' => "ne plus avoir de masse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une bonne séparation peut-elle réduire les déchets ?",
                        'explanation' => "Une séparation efficace peut récupérer davantage de produit ou de matière valorisable au lieu de l’envoyer vers un flux de déchets.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle permet de récupérer des matières encore utiles", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle détruit toujours les déchets", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle supprime toute consommation d’énergie", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle évite toute réaction chimique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une usine obtient un mélange contenant un solide et un liquide. Lequel peut être choisi pour récupérer rapidement le solide ?",
                        'explanation' => "La filtration est une méthode courante pour séparer un solide insoluble d’un liquide.",
                        'choices' => [
                            ['choice_text' => "La filtration", 'is_correct' => true],
                            ['choice_text' => "La distillation fractionnée", 'is_correct' => false],
                            ['choice_text' => "La polymérisation", 'is_correct' => false],
                            ['choice_text' => "La neutralisation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel facteur peut rendre une distillation industrielle plus difficile ?",
                        'explanation' => "Si les températures d’ébullition sont proches ou si le mélange est complexe, la séparation peut demander une colonne plus performante ou davantage d’énergie.",
                        'choices' => [
                            ['choice_text' => "Des températures d’ébullition proches", 'is_correct' => true],
                            ['choice_text' => "Une différence très grande entre les volatilités", 'is_correct' => false],
                            ['choice_text' => "L’existence d’un produit unique", 'is_correct' => false],
                            ['choice_text' => "L’absence totale de liquide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les opérations de séparation sont-elles souvent importantes dans une usine ?",
                        'explanation' => "Elles permettent d’isoler, purifier, recycler et valoriser les différentes matières produites par le procédé.",
                        'choices' => [
                            ['choice_text' => "Parce qu’un procédé industriel produit souvent plusieurs espèces qu’il faut distinguer", 'is_correct' => true],
                            ['choice_text' => "Parce qu’il n’y a jamais de mélange en industrie", 'is_correct' => false],
                            ['choice_text' => "Parce que la séparation remplace toujours la réaction", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle sert uniquement à colorer les produits", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Grandes productions chimiques",
                'description' => "Découvrir quelques procédés industriels classiques comme l’ammoniac, l’acide sulfurique et le verre.",
                'questions' => [
                    [
                        'question' => "Quel produit est fabriqué industriellement à partir de l’azote et de l’hydrogène par le procédé Haber-Bosch ?",
                        'explanation' => "Le procédé Haber-Bosch permet de fabriquer de l’ammoniac NH₃ à partir d’azote et d’hydrogène sous conditions contrôlées.",
                        'choices' => [
                            ['choice_text' => "L’ammoniac", 'is_correct' => true],
                            ['choice_text' => "Le chlorure de sodium", 'is_correct' => false],
                            ['choice_text' => "Le verre uniquement", 'is_correct' => false],
                            ['choice_text' => "Le cuivre métallique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’ammoniac est-il important pour l’industrie ?",
                        'explanation' => "L’ammoniac est notamment utilisé pour fabriquer des engrais azotés et de nombreux intermédiaires chimiques.",
                        'choices' => [
                            ['choice_text' => "Il sert notamment à fabriquer des engrais azotés", 'is_correct' => true],
                            ['choice_text' => "Il sert uniquement à refroidir les usines", 'is_correct' => false],
                            ['choice_text' => "Il remplace tous les métaux", 'is_correct' => false],
                            ['choice_text' => "Il ne sert qu’à produire du verre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le principal produit du procédé de contact dans la fabrication industrielle de l’acide sulfurique ?",
                        'explanation' => "Le procédé de contact est utilisé pour produire de l’acide sulfurique H₂SO₄, un produit industriel très important.",
                        'choices' => [
                            ['choice_text' => "L’acide sulfurique", 'is_correct' => true],
                            ['choice_text' => "L’ammoniac", 'is_correct' => false],
                            ['choice_text' => "Le méthane", 'is_correct' => false],
                            ['choice_text' => "Le sodium métallique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une production industrielle d’acide sulfurique, pourquoi utilise-t-on un catalyseur dans l’étape d’oxydation du SO₂ ?",
                        'explanation' => "Le catalyseur permet d’augmenter la vitesse de la réaction sans être consommé de la même manière qu’un réactif stœchiométrique.",
                        'choices' => [
                            ['choice_text' => "Pour accélérer l’étape réactionnelle dans les conditions du procédé", 'is_correct' => true],
                            ['choice_text' => "Pour fournir directement tous les atomes d’oxygène du produit", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer l’acide sulfurique", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute réaction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La fabrication du verre utilise principalement des matières riches en silice. Quelle matière est un exemple classique ?",
                        'explanation' => "Le sable riche en silice est une matière première classique de la fabrication du verre.",
                        'choices' => [
                            ['choice_text' => "Le sable riche en silice", 'is_correct' => true],
                            ['choice_text' => "Le bois sec uniquement", 'is_correct' => false],
                            ['choice_text' => "L’azote gazeux seul", 'is_correct' => false],
                            ['choice_text' => "Le sucre de table", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les engrais sont-ils fortement liés à la chimie industrielle ?",
                        'explanation' => "De nombreux engrais sont fabriqués à partir de produits chimiques comme l’ammoniac et d’autres composés azotés, phosphatés ou potassiques.",
                        'choices' => [
                            ['choice_text' => "Parce que leur production repose sur des procédés chimiques à grande échelle", 'is_correct' => true],
                            ['choice_text' => "Parce qu’ils sont tous extraits sans transformation", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils ne contiennent aucune substance chimique", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils sont uniquement produits en laboratoire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une grande production chimique, pourquoi utilise-t-on souvent des équipements en acier ou en alliage adapté ?",
                        'explanation' => "Les équipements doivent résister aux températures, pressions et produits chimiques rencontrés dans le procédé.",
                        'choices' => [
                            ['choice_text' => "Pour résister aux conditions de fonctionnement du procédé", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter la couleur du produit", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer les réactifs", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les contrôles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les grandes industries chimiques utilisent-elles des procédés très standardisés ?",
                        'explanation' => "La standardisation aide à obtenir des produits réguliers et à faire fonctionner les équipements de manière prévisible.",
                        'choices' => [
                            ['choice_text' => "Pour obtenir une production régulière et maîtrisée", 'is_correct' => true],
                            ['choice_text' => "Pour changer le produit à chaque heure", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute maintenance", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les mesures", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de produit est un intermédiaire chimique ?",
                        'explanation' => "Un intermédiaire est fabriqué dans une étape du procédé puis utilisé comme matière de départ pour une étape suivante.",
                        'choices' => [
                            ['choice_text' => "Une substance fabriquée pour servir ensuite à produire un autre composé", 'is_correct' => true],
                            ['choice_text' => "Un déchet qui ne peut plus être utilisé", 'is_correct' => false],
                            ['choice_text' => "Un emballage vide", 'is_correct' => false],
                            ['choice_text' => "Un appareil de mesure", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un procédé industriel connu peut-il quand même nécessiter un suivi permanent ?",
                        'explanation' => "Même un procédé bien étudié peut subir des variations de matières premières, d’équipements ou de conditions. Le suivi permet de maintenir la qualité et la sécurité.",
                        'choices' => [
                            ['choice_text' => "Parce que les conditions réelles peuvent varier et doivent être surveillées", 'is_correct' => true],
                            ['choice_text' => "Parce qu’aucun procédé industriel ne possède de mesures", 'is_correct' => false],
                            ['choice_text' => "Parce que les réactions sont imprévisibles en permanence", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il faut modifier chaque réaction chaque minute", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Pétrole, raffinage et pétrochimie",
                'description' => "Comprendre simplement le raffinage du pétrole, la distillation et quelques produits pétrochimiques courants.",
                'questions' => [
                    [
                        'question' => "Quelle opération est utilisée au début du raffinage du pétrole pour séparer des fractions selon leur volatilité ?",
                        'explanation' => "La distillation fractionnée sépare les constituants du pétrole brut selon leurs températures d’ébullition différentes.",
                        'choices' => [
                            ['choice_text' => "La distillation fractionnée", 'is_correct' => true],
                            ['choice_text' => "La filtration du pétrole brut", 'is_correct' => false],
                            ['choice_text' => "La polymérisation directe", 'is_correct' => false],
                            ['choice_text' => "La congélation totale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une colonne de distillation du pétrole, les fractions les plus volatiles se retrouvent plutôt…",
                        'explanation' => "Les fractions plus volatiles ont des températures d’ébullition plus faibles et montent davantage dans la colonne avant de se condenser.",
                        'choices' => [
                            ['choice_text' => "vers le haut de la colonne", 'is_correct' => true],
                            ['choice_text' => "uniquement au fond", 'is_correct' => false],
                            ['choice_text' => "dans le système de refroidissement de la salle", 'is_correct' => false],
                            ['choice_text' => "dans les réactifs solides", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le raffinage ne consiste-t-il pas simplement à « faire brûler » le pétrole ?",
                        'explanation' => "Le raffinage cherche à séparer et transformer le pétrole pour obtenir des produits utiles. Une combustion détruirait une grande partie de cette matière sous forme de CO₂ et d’eau.",
                        'choices' => [
                            ['choice_text' => "Parce que le raffinage vise à récupérer et transformer des fractions utiles", 'is_correct' => true],
                            ['choice_text' => "Parce que le pétrole est déjà un gaz pur", 'is_correct' => false],
                            ['choice_text' => "Parce que la combustion produit uniquement des plastiques", 'is_correct' => false],
                            ['choice_text' => "Parce que le raffinage n’utilise aucune séparation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel produit est un exemple classique de produit pétrochimique ?",
                        'explanation' => "De nombreux plastiques et solvants sont fabriqués à partir d’intermédiaires issus de la pétrochimie.",
                        'choices' => [
                            ['choice_text' => "Le polyéthylène", 'is_correct' => true],
                            ['choice_text' => "Le sable naturel", 'is_correct' => false],
                            ['choice_text' => "L’eau distillée naturelle", 'is_correct' => false],
                            ['choice_text' => "Le fer pur extrait d’un minerai sans transformation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À quoi sert le craquage dans la pétrochimie ?",
                        'explanation' => "Le craquage casse de grosses molécules d’hydrocarbures pour obtenir des molécules plus petites, souvent plus utiles pour certains carburants ou pour la pétrochimie.",
                        'choices' => [
                            ['choice_text' => "À transformer de grosses molécules en molécules plus petites", 'is_correct' => true],
                            ['choice_text' => "À transformer toute matière en eau", 'is_correct' => false],
                            ['choice_text' => "À éliminer toute énergie du procédé", 'is_correct' => false],
                            ['choice_text' => "À séparer uniquement l’eau du verre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les raffineries utilisent-elles des opérations de désulfuration ?",
                        'explanation' => "Les composés soufrés peuvent provoquer des émissions indésirables et des problèmes pour certains équipements. Leur réduction améliore la qualité des produits.",
                        'choices' => [
                            ['choice_text' => "Pour réduire les composés soufrés indésirables", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter la teneur en eau", 'is_correct' => false],
                            ['choice_text' => "Pour fabriquer du verre", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toute distillation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un carburant doit respecter des spécifications avant sa vente. Pourquoi ?",
                        'explanation' => "Les carburants doivent avoir des propriétés définies pour fonctionner correctement dans les moteurs et respecter les exigences de qualité et de sécurité.",
                        'choices' => [
                            ['choice_text' => "Pour garantir des propriétés adaptées à son utilisation", 'is_correct' => true],
                            ['choice_text' => "Pour rendre le carburant imprévisible", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute combustion", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les contrôles qualité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi certains hydrocarbures sont-ils transformés plutôt que simplement séparés ?",
                        'explanation' => "La transformation permet d’adapter la composition des flux aux besoins du marché ou d’obtenir des molécules utilisées comme matières premières.",
                        'choices' => [
                            ['choice_text' => "Pour obtenir des molécules plus adaptées aux usages recherchés", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer les réactions chimiques", 'is_correct' => false],
                            ['choice_text' => "Pour faire disparaître le carbone", 'is_correct' => false],
                            ['choice_text' => "Pour rendre tous les hydrocarbures identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est un exemple de contrôle important dans une raffinerie ?",
                        'explanation' => "La température, la pression, les débits et la composition des produits sont suivis pour maintenir le procédé dans les bonnes conditions.",
                        'choices' => [
                            ['choice_text' => "Le suivi de la température, de la pression et de la composition", 'is_correct' => true],
                            ['choice_text' => "La couleur des casques uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de visiteurs", 'is_correct' => false],
                            ['choice_text' => "La forme du bâtiment extérieur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la pétrochimie est-elle liée à la fabrication de nombreux matériaux ?",
                        'explanation' => "Elle fournit des molécules de base qui servent ensuite à fabriquer des polymères, solvants, détergents, fibres et autres produits chimiques.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle fournit des molécules servant de matières premières à de nombreux produits", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle produit uniquement des carburants", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle ne nécessite aucune transformation", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle interdit les polymères", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Rendement, conversion et efficacité",
                'description' => "Maîtriser les notions simples de rendement, conversion, productivité et optimisation d’un procédé.",
                'questions' => [
                    [
                        'question' => "Si une réaction devrait théoriquement produire 100 kg mais qu’elle en donne 80 kg, quel est le rendement ?",
                        'explanation' => "Rendement = quantité obtenue / quantité théorique × 100 = 80 / 100 × 100 = 80 %.",
                        'choices' => [
                            ['choice_text' => "20 %", 'is_correct' => false],
                            ['choice_text' => "50 %", 'is_correct' => false],
                            ['choice_text' => "80 %", 'is_correct' => true],
                            ['choice_text' => "125 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que signifie une conversion de 90 % d’un réactif, dans un cas simple ?",
                        'explanation' => "Environ 90 % de la quantité initiale de ce réactif a été consommée ou transformée selon la définition utilisée dans le procédé.",
                        'choices' => [
                            ['choice_text' => "Environ 90 % du réactif initial a été transformé", 'is_correct' => true],
                            ['choice_text' => "90 % du produit a disparu", 'is_correct' => false],
                            ['choice_text' => "Le rendement vaut forcément 90 %", 'is_correct' => false],
                            ['choice_text' => "La réaction dure 90 secondes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi rendement et conversion ne sont-ils pas forcément identiques ?",
                        'explanation' => "Une réaction peut consommer beaucoup de réactif tout en formant des sous-produits. La conversion ne dit donc pas à elle seule quelle quantité du produit souhaité a été obtenue.",
                        'choices' => [
                            ['choice_text' => "Parce qu’une partie du réactif peut former des produits secondaires", 'is_correct' => true],
                            ['choice_text' => "Parce que la masse ne se conserve jamais", 'is_correct' => false],
                            ['choice_text' => "Parce que la conversion mesure la couleur", 'is_correct' => false],
                            ['choice_text' => "Parce que le rendement ne concerne jamais les produits", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une usine améliore son procédé et obtient la même quantité de produit avec moins de matière première. Qu’a-t-elle amélioré ?",
                        'explanation' => "Utiliser moins de matière pour la même production traduit une meilleure efficacité matière du procédé.",
                        'choices' => [
                            ['choice_text' => "L’efficacité d’utilisation des matières premières", 'is_correct' => true],
                            ['choice_text' => "La couleur du produit uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de réactifs disponibles", 'is_correct' => false],
                            ['choice_text' => "La pression atmosphérique locale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si un procédé produit 200 kg en 10 heures, quelle est sa production moyenne par heure ?",
                        'explanation' => "Production moyenne = 200 / 10 = 20 kg par heure.",
                        'choices' => [
                            ['choice_text' => "10 kg/h", 'is_correct' => false],
                            ['choice_text' => "20 kg/h", 'is_correct' => true],
                            ['choice_text' => "100 kg/h", 'is_correct' => false],
                            ['choice_text' => "2000 kg/h", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une usine ne cherche-t-elle pas simplement à augmenter la température autant que possible pour produire plus vite ?",
                        'explanation' => "Une température trop élevée peut augmenter les réactions secondaires, la dégradation du produit, la consommation d’énergie ou les risques de sécurité.",
                        'choices' => [
                            ['choice_text' => "Parce qu’il faut aussi tenir compte de la sélectivité, de l’énergie et de la sécurité", 'is_correct' => true],
                            ['choice_text' => "Parce que la température n’influence jamais la vitesse", 'is_correct' => false],
                            ['choice_text' => "Parce que les usines n’utilisent jamais de chauffage", 'is_correct' => false],
                            ['choice_text' => "Parce que la température est toujours inutile", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un rendement passe de 70 % à 84 %. De combien de points de pourcentage a-t-il augmenté ?",
                        'explanation' => "L’augmentation en points de pourcentage est 84 − 70 = 14 points.",
                        'choices' => [
                            ['choice_text' => "7 points", 'is_correct' => false],
                            ['choice_text' => "14 points", 'is_correct' => true],
                            ['choice_text' => "20 points", 'is_correct' => false],
                            ['choice_text' => "154 points", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel indicateur est particulièrement utile pour vérifier qu’une usine utilise bien ses matières premières ?",
                        'explanation' => "Le suivi des consommations spécifiques permet de comparer la quantité de matière utilisée pour produire une unité de produit.",
                        'choices' => [
                            ['choice_text' => "La consommation de matière par unité de produit", 'is_correct' => true],
                            ['choice_text' => "La couleur des tuyaux", 'is_correct' => false],
                            ['choice_text' => "La taille des bureaux", 'is_correct' => false],
                            ['choice_text' => "Le nombre de visiteurs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi réduire les étapes inutiles d’un procédé peut-il améliorer l’efficacité ?",
                        'explanation' => "Chaque étape peut demander du temps, de l’énergie, du personnel ou provoquer des pertes. Supprimer une étape inutile peut réduire ces coûts et ces pertes.",
                        'choices' => [
                            ['choice_text' => "Cela peut réduire les consommations, les pertes et le temps de production", 'is_correct' => true],
                            ['choice_text' => "Cela augmente toujours les déchets", 'is_correct' => false],
                            ['choice_text' => "Cela supprime les matières premières", 'is_correct' => false],
                            ['choice_text' => "Cela rend la qualité impossible à contrôler", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est un signe simple qu’un procédé est devenu moins performant ?",
                        'explanation' => "Une hausse des consommations, des déchets ou des produits non conformes peut signaler une dégradation de la performance du procédé.",
                        'choices' => [
                            ['choice_text' => "Plus de matière consommée pour la même quantité de produit", 'is_correct' => true],
                            ['choice_text' => "Une quantité de produit identique avec moins de matière", 'is_correct' => false],
                            ['choice_text' => "Une baisse des déchets sans autre changement", 'is_correct' => false],
                            ['choice_text' => "Une production plus régulière", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Sécurité et maîtrise des risques",
                'description' => "Reconnaître les bons réflexes de sécurité face aux produits chimiques, aux équipements et aux situations anormales.",
                'questions' => [
                    [
                        'question' => "Avant de manipuler un produit chimique industriel, quelle information doit être connue en priorité ?",
                        'explanation' => "Il faut connaître les dangers du produit, les précautions de manipulation et les mesures d’urgence indiquées dans la documentation de sécurité.",
                        'choices' => [
                            ['choice_text' => "Ses dangers et les précautions de sécurité", 'is_correct' => true],
                            ['choice_text' => "Sa couleur favorite", 'is_correct' => false],
                            ['choice_text' => "Le nom du dernier visiteur", 'is_correct' => false],
                            ['choice_text' => "La marque du téléphone du laboratoire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’étiquetage des produits chimiques est-il important ?",
                        'explanation' => "L’étiquette permet d’identifier correctement le contenu, les dangers et les précautions à respecter.",
                        'choices' => [
                            ['choice_text' => "Pour identifier le produit et ses dangers", 'is_correct' => true],
                            ['choice_text' => "Pour rendre le récipient plus lourd", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer les équipements de protection", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute inspection", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un opérateur remarque une fuite inconnue sur une conduite. Quel est le bon réflexe général ?",
                        'explanation' => "Une fuite inconnue doit être traitée comme une situation potentiellement dangereuse : alerter, suivre la procédure du site et ne pas improviser une intervention risquée.",
                        'choices' => [
                            ['choice_text' => "Alerter et appliquer la procédure de sécurité prévue", 'is_correct' => true],
                            ['choice_text' => "Toucher immédiatement le liquide pour l’identifier", 'is_correct' => false],
                            ['choice_text' => "Continuer normalement sans prévenir personne", 'is_correct' => false],
                            ['choice_text' => "Cacher la fuite pour éviter un arrêt", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi ne faut-il pas mélanger deux produits chimiques sans connaître leur compatibilité ?",
                        'explanation' => "Certaines substances peuvent réagir violemment, dégager des gaz ou produire beaucoup de chaleur lorsqu’elles sont mises en contact.",
                        'choices' => [
                            ['choice_text' => "Parce qu’une réaction dangereuse peut se produire", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les produits deviennent solides", 'is_correct' => false],
                            ['choice_text' => "Parce que le mélange est toujours sans effet", 'is_correct' => false],
                            ['choice_text' => "Parce que l’étiquette disparaît automatiquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l’intérêt d’un dispositif de refroidissement d’urgence sur certains équipements ?",
                        'explanation' => "Il peut aider à limiter une montée excessive de température et à maintenir le système dans des conditions plus sûres.",
                        'choices' => [
                            ['choice_text' => "Limiter une élévation dangereuse de température", 'is_correct' => true],
                            ['choice_text' => "Augmenter toujours la pression", 'is_correct' => false],
                            ['choice_text' => "Remplacer les opérateurs", 'is_correct' => false],
                            ['choice_text' => "Supprimer les capteurs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les procédures d’arrêt d’urgence doivent-elles être connues à l’avance ?",
                        'explanation' => "En situation anormale, agir rapidement et selon une procédure connue réduit les erreurs et aide à protéger les personnes et l’installation.",
                        'choices' => [
                            ['choice_text' => "Pour réagir rapidement et de manière organisée en cas d’incident", 'is_correct' => true],
                            ['choice_text' => "Pour éviter toute formation", 'is_correct' => false],
                            ['choice_text' => "Pour rendre l’installation plus complexe", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les alarmes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un détecteur signale une concentration inhabituelle d’un gaz. Que faut-il faire ?",
                        'explanation' => "Une alarme doit être prise au sérieux. Il faut suivre la procédure prévue, sécuriser la zone si nécessaire et prévenir les responsables compétents.",
                        'choices' => [
                            ['choice_text' => "Suivre la procédure d’alarme et sécuriser la situation", 'is_correct' => true],
                            ['choice_text' => "Désactiver l’alarme sans vérifier", 'is_correct' => false],
                            ['choice_text' => "Ignorer le signal", 'is_correct' => false],
                            ['choice_text' => "Entrer sans protection pour voir ce qui se passe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la ventilation peut-elle être essentielle dans une zone manipulant des substances volatiles ?",
                        'explanation' => "Une ventilation adaptée aide à limiter l’accumulation de vapeurs ou de gaz et à maintenir une atmosphère plus sûre.",
                        'choices' => [
                            ['choice_text' => "Pour limiter l’accumulation de vapeurs ou de gaz", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter la quantité de produits toxiques dans l’air", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer tous les détecteurs", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute réaction chimique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel comportement réduit le risque d’erreur lors d’un changement de produit dans une ligne ?",
                        'explanation' => "Vérifier l’identification des lignes, les vannes et la procédure permet d’éviter les raccordements ou transferts incorrects.",
                        'choices' => [
                            ['choice_text' => "Vérifier l’identification et suivre la procédure avant d’agir", 'is_correct' => true],
                            ['choice_text' => "Changer les vannes au hasard", 'is_correct' => false],
                            ['choice_text' => "Se fier uniquement à la mémoire", 'is_correct' => false],
                            ['choice_text' => "Ignorer les étiquettes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les équipements de protection individuelle ne remplacent-ils pas les autres mesures de sécurité ?",
                        'explanation' => "Les EPI constituent une barrière importante, mais la prévention repose aussi sur la conception du procédé, les protections collectives, les procédures et la formation.",
                        'choices' => [
                            ['choice_text' => "Parce que la sécurité doit combiner plusieurs niveaux de protection", 'is_correct' => true],
                            ['choice_text' => "Parce que les EPI sont toujours inutiles", 'is_correct' => false],
                            ['choice_text' => "Parce que les procédures ne servent jamais", 'is_correct' => false],
                            ['choice_text' => "Parce que les équipements de sécurité empêchent toute production", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Environnement, déchets et chimie plus durable",
                'description' => "Comprendre les efforts industriels pour réduire les émissions, les déchets, la consommation d’eau et d’énergie.",
                'questions' => [
                    [
                        'question' => "Pourquoi une usine traite-t-elle certaines eaux usées avant leur rejet ?",
                        'explanation' => "Le traitement réduit les substances indésirables afin de limiter les impacts sur les milieux naturels et de respecter les exigences applicables.",
                        'choices' => [
                            ['choice_text' => "Pour réduire les polluants avant le rejet", 'is_correct' => true],
                            ['choice_text' => "Pour ajouter volontairement des polluants", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute utilisation de l’eau", 'is_correct' => false],
                            ['choice_text' => "Pour rendre l’eau toujours potable", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle action peut réduire la quantité de déchets produits par un procédé ?",
                        'explanation' => "Améliorer le rendement, recycler certains flux et réduire les pertes peut diminuer la quantité de déchets générés.",
                        'choices' => [
                            ['choice_text' => "Améliorer le rendement et recycler les matières valorisables", 'is_correct' => true],
                            ['choice_text' => "Augmenter les pertes de matière", 'is_correct' => false],
                            ['choice_text' => "Jeter systématiquement les sous-produits utiles", 'is_correct' => false],
                            ['choice_text' => "Utiliser plus de solvants sans contrôle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi réduire la consommation d’énergie est-il intéressant pour une usine ?",
                        'explanation' => "Une moindre consommation d’énergie peut réduire les coûts d’exploitation et certaines émissions associées à la production d’énergie.",
                        'choices' => [
                            ['choice_text' => "Pour diminuer les coûts et souvent les impacts associés à l’énergie", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter automatiquement les déchets", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher tout contrôle du procédé", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toutes les réactions", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond à une récupération de chaleur industrielle ?",
                        'explanation' => "La chaleur d’un courant chaud peut être transférée à un courant plus froid afin de réduire le besoin de chauffage externe.",
                        'choices' => [
                            ['choice_text' => "Utiliser la chaleur d’un courant chaud pour préchauffer un autre flux", 'is_correct' => true],
                            ['choice_text' => "Refroidir un flux puis jeter sa chaleur sans l’étudier", 'is_correct' => false],
                            ['choice_text' => "Augmenter volontairement la consommation de vapeur", 'is_correct' => false],
                            ['choice_text' => "Remplacer tout échangeur par une filtration", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que signifie, dans un contexte industriel, valoriser un déchet ?",
                        'explanation' => "Valoriser signifie chercher à récupérer une matière ou une énergie utile au lieu de considérer le flux uniquement comme quelque chose à éliminer.",
                        'choices' => [
                            ['choice_text' => "Lui donner une utilisation utile lorsqu’une solution adaptée existe", 'is_correct' => true],
                            ['choice_text' => "Le jeter sans traitement", 'is_correct' => false],
                            ['choice_text' => "Le cacher dans une zone de stockage", 'is_correct' => false],
                            ['choice_text' => "Le mélanger avec tous les autres déchets", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la réduction à la source est-elle souvent intéressante par rapport au simple traitement en fin de procédé ?",
                        'explanation' => "Éviter la formation d’un polluant ou d’un déchet dès le départ réduit les besoins de traitement et la quantité à gérer ensuite.",
                        'choices' => [
                            ['choice_text' => "Parce qu’il est souvent préférable d’éviter le déchet plutôt que de seulement le traiter", 'is_correct' => true],
                            ['choice_text' => "Parce que le traitement final est toujours interdit", 'is_correct' => false],
                            ['choice_text' => "Parce que les procédés n’ont jamais besoin de matières premières", 'is_correct' => false],
                            ['choice_text' => "Parce que la pollution disparaît sans mesure", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une usine remplace un solvant très volatile par un solvant moins volatil, lorsque le procédé le permet. Quel bénéfice peut être recherché ?",
                        'explanation' => "Un solvant moins volatil peut réduire certaines émissions de composés volatils et améliorer les conditions de travail, selon le produit et le procédé.",
                        'choices' => [
                            ['choice_text' => "Réduire certaines émissions et pertes de solvant", 'is_correct' => true],
                            ['choice_text' => "Augmenter forcément la toxicité", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute réaction chimique", 'is_correct' => false],
                            ['choice_text' => "Rendre le produit impossible à purifier", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi surveiller les émissions atmosphériques d’une usine ?",
                        'explanation' => "La surveillance permet de vérifier les performances des dispositifs de traitement et de détecter d’éventuelles dérives.",
                        'choices' => [
                            ['choice_text' => "Pour contrôler les rejets et détecter les dérives", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter volontairement les émissions", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les analyses", 'is_correct' => false],
                            ['choice_text' => "Pour rendre les filtres inutiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel indicateur simple peut aider une usine à suivre sa consommation d’eau ?",
                        'explanation' => "La consommation d’eau par tonne de produit permet de suivre l’efficacité de l’usage de cette ressource dans le temps.",
                        'choices' => [
                            ['choice_text' => "La quantité d’eau consommée par unité de produit", 'is_correct' => true],
                            ['choice_text' => "La couleur des canalisations", 'is_correct' => false],
                            ['choice_text' => "Le nombre de portes", 'is_correct' => false],
                            ['choice_text' => "La masse des emballages seulement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une usine récupère un sous-produit qui peut servir de matière première ailleurs. Quel principe applique-t-elle ?",
                        'explanation' => "La valorisation en boucle permet de conserver une matière dans le circuit économique au lieu de la considérer immédiatement comme un déchet.",
                        'choices' => [
                            ['choice_text' => "La valorisation et l’utilisation efficace des ressources", 'is_correct' => true],
                            ['choice_text' => "L’élimination systématique des ressources", 'is_correct' => false],
                            ['choice_text' => "La suppression de tous les contrôles", 'is_correct' => false],
                            ['choice_text' => "La dilution sans traitement", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Contrôle qualité et conduite du procédé",
                'description' => "Comprendre le rôle des analyses, capteurs, prélèvements et actions correctives dans une production industrielle.",
                'questions' => [
                    [
                        'question' => "Pourquoi prélève-t-on un échantillon du produit fini ?",
                        'explanation' => "L’échantillon permet de vérifier que le produit respecte les spécifications avant sa libération ou son utilisation.",
                        'choices' => [
                            ['choice_text' => "Pour vérifier sa conformité aux spécifications", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter sa quantité", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute analyse", 'is_correct' => false],
                            ['choice_text' => "Pour modifier automatiquement sa composition", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un capteur de température donne soudain une valeur très différente de toutes les autres mesures. Que faut-il envisager ?",
                        'explanation' => "Une valeur aberrante peut venir du procédé lui-même ou d’un problème de capteur. Il faut donc vérifier la situation avant de conclure.",
                        'choices' => [
                            ['choice_text' => "Une dérive du procédé ou un problème de mesure", 'is_correct' => true],
                            ['choice_text' => "Que la loi de conservation de la matière a changé", 'is_correct' => false],
                            ['choice_text' => "Que le produit est forcément parfait", 'is_correct' => false],
                            ['choice_text' => "Que les autres capteurs sont inutiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi étalonne-t-on un instrument de mesure ?",
                        'explanation' => "L’étalonnage permet de vérifier et, lorsque c’est prévu, d’ajuster la réponse de l’instrument par rapport à une référence connue.",
                        'choices' => [
                            ['choice_text' => "Pour vérifier que la mesure correspond correctement à une référence", 'is_correct' => true],
                            ['choice_text' => "Pour empêcher l’instrument de fonctionner", 'is_correct' => false],
                            ['choice_text' => "Pour changer la composition du produit", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les contrôles qualité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une analyse montre que la concentration d’un produit est 9,8 g/L alors que la spécification demande 9,5 à 10,0 g/L. Le lot est-il dans la plage indiquée ?",
                        'explanation' => "Oui. La valeur 9,8 g/L est comprise entre la limite inférieure 9,5 g/L et la limite supérieure 10,0 g/L.",
                        'choices' => [
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Non, car 9,8 est inférieur à 10,0", 'is_correct' => false],
                            ['choice_text' => "Non, car la concentration doit être exactement 9,5", 'is_correct' => false],
                            ['choice_text' => "Impossible à savoir avec cette plage", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une tendance progressive d’une mesure peut-elle être plus utile qu’une seule valeur isolée ?",
                        'explanation' => "Une série de mesures montre l’évolution du procédé et peut révéler une dérive avant que la situation ne devienne hors spécification.",
                        'choices' => [
                            ['choice_text' => "Elle permet de voir une tendance et de repérer plus tôt une dérive", 'is_correct' => true],
                            ['choice_text' => "Une seule valeur est toujours suffisante", 'is_correct' => false],
                            ['choice_text' => "Les tendances n’ont aucun intérêt en industrie", 'is_correct' => false],
                            ['choice_text' => "Elle remplace toutes les procédures de sécurité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un produit devient progressivement moins pur au fil des lots. Quelle action est pertinente ?",
                        'explanation' => "Il faut rechercher la cause de la dérive : matière première, réaction, séparation, contamination ou problème de mesure, puis corriger selon la procédure.",
                        'choices' => [
                            ['choice_text' => "Chercher la cause de la dérive et agir sur le procédé", 'is_correct' => true],
                            ['choice_text' => "Ignorer la tendance", 'is_correct' => false],
                            ['choice_text' => "Mélanger tous les lots sans contrôle", 'is_correct' => false],
                            ['choice_text' => "Supprimer les analyses futures", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle d’une alarme de procédé ?",
                        'explanation' => "Une alarme avertit l’équipe qu’une variable a atteint une valeur nécessitant une vérification ou une action.",
                        'choices' => [
                            ['choice_text' => "Signaler une situation qui demande une attention ou une action", 'is_correct' => true],
                            ['choice_text' => "Remplacer entièrement l’opérateur", 'is_correct' => false],
                            ['choice_text' => "Changer automatiquement toutes les matières premières", 'is_correct' => false],
                            ['choice_text' => "Supprimer les mesures", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi compare-t-on parfois plusieurs échantillons d’un même lot ?",
                        'explanation' => "Comparer plusieurs prélèvements permet de vérifier l’homogénéité du lot et de détecter une éventuelle variabilité.",
                        'choices' => [
                            ['choice_text' => "Pour vérifier l’homogénéité et la répétabilité du lot", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter la masse du produit", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute mesure", 'is_correct' => false],
                            ['choice_text' => "Pour rendre le produit plus concentré", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une mesure est légèrement différente de la valeur cible mais reste dans les limites spécifiées. Que signifie cela ?",
                        'explanation' => "Une spécification donne généralement une plage acceptable. Une valeur à l’intérieur de cette plage peut donc être conforme même si elle n’est pas exactement égale à la cible.",
                        'choices' => [
                            ['choice_text' => "La mesure peut être conforme si elle reste dans les limites prévues", 'is_correct' => true],
                            ['choice_text' => "Le lot est forcément non conforme", 'is_correct' => false],
                            ['choice_text' => "La cible n’a aucune utilité", 'is_correct' => false],
                            ['choice_text' => "L’instrument est forcément défectueux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi documenter les résultats de contrôle qualité ?",
                        'explanation' => "La traçabilité permet de savoir ce qui a été mesuré, quand, comment et sur quel lot, ce qui facilite les investigations et la qualité.",
                        'choices' => [
                            ['choice_text' => "Pour assurer la traçabilité et pouvoir analyser les écarts", 'is_correct' => true],
                            ['choice_text' => "Pour rendre les données impossibles à retrouver", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute amélioration", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer les instruments", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index] ?? ['duration' => 20, 'passing_score' => 60];

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
