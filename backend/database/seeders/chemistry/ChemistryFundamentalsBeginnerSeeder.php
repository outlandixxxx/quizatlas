<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ChemistryFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'chemistry-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Découvrir la chimie',
                'description' => 'Découvrez les bases de la chimie, la matière, ses propriétés, les changements physiques et chimiques, ainsi que les premières règles de sécurité en laboratoire.',
                'questions' => [
                    [
                        'question' => 'Un élève pense que la chimie consiste seulement à mélanger des produits dans un laboratoire. Quel exemple montre que la chimie est aussi présente dans la vie quotidienne ?',
                        'choices' => [
                            ['choice_text' => 'Comprendre ce qui se passe lorsque le pain cuit', 'is_correct' => true],
                            ['choice_text' => 'Compter les pages d’un cahier', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la longueur d’une table', 'is_correct' => false],
                            ['choice_text' => 'Ranger des livres par ordre alphabétique', 'is_correct' => false],
                        ],
                        'explanation' => 'La cuisson du pain implique plusieurs transformations chimiques provoquées notamment par la chaleur. La chimie étudie donc aussi des phénomènes très courants de la vie quotidienne.'
                    ],
                    [
                        'question' => 'Lequel des éléments suivants est une matière ?',
                        'choices' => [
                            ['choice_text' => 'Une ombre', 'is_correct' => false],
                            ['choice_text' => 'Le son d’un haut-parleur', 'is_correct' => false],
                            ['choice_text' => 'L’air contenu dans un ballon', 'is_correct' => true],
                            ['choice_text' => 'La lumière d’une lampe', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air est une matière car il possède une masse et occupe un espace. Une ombre, un son et la lumière ne sont pas considérés comme de la matière.'
                    ],
                    [
                        'question' => 'Un fil de cuivre est brillant et peut être plié pour former une boucle. Ces observations correspondent à des :',
                        'choices' => [
                            ['choice_text' => 'Propriétés chimiques', 'is_correct' => false],
                            ['choice_text' => 'Propriétés physiques', 'is_correct' => true],
                            ['choice_text' => 'Réactions chimiques', 'is_correct' => false],
                            ['choice_text' => 'Propriétés nucléaires', 'is_correct' => false],
                        ],
                        'explanation' => 'La brillance et la possibilité de plier le cuivre sont des propriétés physiques. On peut les observer sans transformer le cuivre en une autre substance.'
                    ],
                    [
                        'question' => 'Quelle observation donne une bonne indication qu’une nouvelle substance pourrait s’être formée ?',
                        'choices' => [
                            ['choice_text' => 'On verse un liquide dans un récipient plus petit', 'is_correct' => false],
                            ['choice_text' => 'On coupe un morceau de solide en deux', 'is_correct' => false],
                            ['choice_text' => 'Un liquide gèle', 'is_correct' => false],
                            ['choice_text' => 'Des bulles apparaissent lorsque deux substances sont mélangées', 'is_correct' => true],
                        ],
                        'explanation' => 'L’apparition inattendue d’un gaz peut être un signe de réaction chimique. Les autres situations sont des changements physiques.'
                    ],
                    [
                        'question' => 'Pourquoi porte-t-on des lunettes de protection pendant de nombreuses expériences de chimie ?',
                        'choices' => [
                            ['choice_text' => 'Pour protéger les yeux contre les projections et les particules', 'is_correct' => true],
                            ['choice_text' => 'Pour mieux réussir les calculs', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les produits de s’évaporer', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le verre plus visible', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lunettes de protection évitent qu’une projection de produit chimique, de poussière ou de petits fragments de verre atteigne les yeux.'
                    ],
                    [
                        'question' => 'Un élève trouve une bouteille sans étiquette sur une paillasse. Que doit-il faire ?',
                        'choices' => [
                            ['choice_text' => 'La sentir directement pour essayer de l’identifier', 'is_correct' => false],
                            ['choice_text' => 'Demander au professeur ou au responsable du laboratoire avant d’y toucher', 'is_correct' => true],
                            ['choice_text' => 'En verser un peu dans l’évier', 'is_correct' => false],
                            ['choice_text' => 'La mélanger avec de l’eau pour voir ce qui se passe', 'is_correct' => false],
                        ],
                        'explanation' => 'Une substance inconnue peut être dangereuse. Il ne faut ni la goûter ni la manipuler au hasard. Il faut demander conseil à la personne responsable.'
                    ],
                    [
                        'question' => 'Un élève note la couleur, l’odeur et l’état physique d’une substance avant de commencer son expérience. Que fait-il principalement ?',
                        'choices' => [
                            ['choice_text' => 'Il fait des observations', 'is_correct' => true],
                            ['choice_text' => 'Il prouve déjà une théorie', 'is_correct' => false],
                            ['choice_text' => 'Il modifie la variable indépendante', 'is_correct' => false],
                            ['choice_text' => 'Il calcule la densité', 'is_correct' => false],
                        ],
                        'explanation' => 'Noter ce que l’on peut observer directement fait partie de la collecte des données expérimentales.'
                    ],
                    [
                        'question' => 'Une cuillère métallique reste solide sur une table alors que l’eau prend la forme du récipient qui la contient. Que montre cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Une différence de composition chimique', 'is_correct' => false],
                            ['choice_text' => 'Une différence d’état physique', 'is_correct' => true],
                            ['choice_text' => 'Une différence de masse atomique', 'is_correct' => false],
                            ['choice_text' => 'Une différence de vitesse de réaction', 'is_correct' => false],
                        ],
                        'explanation' => 'La cuillère est un solide, tandis que l’eau est un liquide. Les solides gardent leur forme alors que les liquides prennent celle du récipient.'
                    ],
                    [
                        'question' => 'Laquelle de ces actions constitue une mauvaise pratique de laboratoire ?',
                        'choices' => [
                            ['choice_text' => 'Lire les consignes avant de commencer', 'is_correct' => false],
                            ['choice_text' => 'Garder la paillasse propre', 'is_correct' => false],
                            ['choice_text' => 'Remettre un produit inutilisé dans le flacon d’origine', 'is_correct' => true],
                            ['choice_text' => 'Porter les équipements de protection demandés', 'is_correct' => false],
                        ],
                        'explanation' => 'Remettre un produit dans son flacon d’origine peut contaminer tout le stock. Les produits inutilisés doivent être traités selon les consignes du laboratoire.'
                    ],
                    [
                        'question' => 'Mina dit : « Le liquide est devenu plus froid, donc une réaction chimique a forcément eu lieu. » Quelle réponse est la plus juste ?',
                        'choices' => [
                            ['choice_text' => 'Une variation de température seule ne suffit pas pour prouver une réaction chimique', 'is_correct' => true],
                            ['choice_text' => 'Toute variation de température prouve toujours qu’une nouvelle substance est apparue', 'is_correct' => false],
                            ['choice_text' => 'Les réactions chimiques ne changent jamais la température', 'is_correct' => false],
                            ['choice_text' => 'La température n’a aucun rapport avec la chimie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation de température peut accompagner une réaction chimique, mais elle peut aussi avoir d’autres causes. Il faut davantage d’indices pour conclure.'
                    ],
                ],
            ],

            [
                'title' => 'Mesurer la matière : volume, masse et densité',
                'description' => 'Entraînez-vous à utiliser les unités courantes, à lire les instruments de laboratoire et à calculer une densité simple.',
                'questions' => [
                    [
                        'question' => 'Quelle unité métrique utilise-t-on couramment pour mesurer la masse d’un petit échantillon de laboratoire ?',
                        'choices' => [
                            ['choice_text' => 'Le gramme', 'is_correct' => true],
                            ['choice_text' => 'Le litre', 'is_correct' => false],
                            ['choice_text' => 'Le mètre', 'is_correct' => false],
                            ['choice_text' => 'La seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gramme est une unité courante de masse. Le litre mesure un volume, le mètre une longueur et la seconde une durée.'
                    ],
                    [
                        'question' => 'Une éprouvette contient 250 mL d’eau. Quel est ce volume en litres ?',
                        'choices' => [
                            ['choice_text' => '2,5 L', 'is_correct' => false],
                            ['choice_text' => '0,25 L', 'is_correct' => true],
                            ['choice_text' => '25 L', 'is_correct' => false],
                            ['choice_text' => '0,025 L', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 1 L = 1000 mL, on divise 250 par 1000 : 250 mL = 0,25 L.'
                    ],
                    [
                        'question' => 'Un élève doit mesurer environ 20,0 mL de liquide avec précision. Quel matériel est le plus adapté parmi les suivants ?',
                        'choices' => [
                            ['choice_text' => 'Une éprouvette graduée', 'is_correct' => true],
                            ['choice_text' => 'Un verre de montre', 'is_correct' => false],
                            ['choice_text' => 'Une spatule', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’éprouvette graduée est conçue pour mesurer les volumes de liquides avec davantage de précision qu’un simple bécher.'
                    ],
                    [
                        'question' => 'Un échantillon métallique a une masse de 60 g et un volume de 20 cm³. Quelle est sa masse volumique ?',
                        'choices' => [
                            ['choice_text' => '0,33 g/cm³', 'is_correct' => false],
                            ['choice_text' => '3 g/cm³', 'is_correct' => true],
                            ['choice_text' => '40 g/cm³', 'is_correct' => false],
                            ['choice_text' => '80 g/cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'Masse volumique = masse ÷ volume = 60 ÷ 20 = 3 g/cm³.'
                    ],
                    [
                        'question' => 'Deux blocs ont le même volume. Le bloc A a une masse de 40 g et le bloc B une masse de 70 g. Lequel est le plus dense ?',
                        'choices' => [
                            ['choice_text' => 'Le bloc A', 'is_correct' => false],
                            ['choice_text' => 'Ils ont la même masse volumique', 'is_correct' => false],
                            ['choice_text' => 'Le bloc B', 'is_correct' => true],
                            ['choice_text' => 'Impossible de comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les volumes sont identiques, l’objet qui possède la plus grande masse a aussi la plus grande masse volumique.'
                    ],
                    [
                        'question' => 'Lorsqu’on lit le volume d’eau dans une éprouvette graduée, où faut-il généralement placer les yeux ?',
                        'choices' => [
                            ['choice_text' => 'Au-dessus du récipient', 'is_correct' => false],
                            ['choice_text' => 'À hauteur du niveau du liquide', 'is_correct' => true],
                            ['choice_text' => 'Très loin du récipient', 'is_correct' => false],
                            ['choice_text' => 'Peu importe la position', 'is_correct' => false],
                        ],
                        'explanation' => 'Lire à hauteur du niveau du liquide permet de limiter les erreurs de parallaxe. Pour l’eau, on lit généralement le bas du ménisque.'
                    ],
                    [
                        'question' => 'Une température de 25 °C est affichée dans une salle. Que représente cette valeur ?',
                        'choices' => [
                            ['choice_text' => 'La mesure de la température de la salle', 'is_correct' => true],
                            ['choice_text' => 'La masse de la salle', 'is_correct' => false],
                            ['choice_text' => 'Le volume de la salle', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique de la salle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré Celsius est une unité de température. La valeur 25 °C indique donc le niveau de chaud ou de froid de la salle.'
                    ],
                    [
                        'question' => 'Une balance indique 12,4 g tandis qu’une autre mesure du même échantillon est écrite 12,40 g. Quelle est la différence principale ?',
                        'choices' => [
                            ['choice_text' => 'Il s’agit forcément de deux substances différentes', 'is_correct' => false],
                            ['choice_text' => 'La seconde valeur indique une précision supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'La première valeur est dans une autre unité', 'is_correct' => false],
                            ['choice_text' => 'La seconde valeur est deux fois plus grande', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux nombres représentent la même quantité, mais 12,40 g indique la mesure avec une décimale supplémentaire et donc une précision affichée plus grande.'
                    ],
                    [
                        'question' => 'Un matériau a une masse volumique de 2 g/cm³ et un volume de 15 cm³. Quelle est sa masse ?',
                        'choices' => [
                            ['choice_text' => '7,5 g', 'is_correct' => false],
                            ['choice_text' => '13 g', 'is_correct' => false],
                            ['choice_text' => '17 g', 'is_correct' => false],
                            ['choice_text' => '30 g', 'is_correct' => true],
                        ],
                        'explanation' => 'Masse = masse volumique × volume = 2 × 15 = 30 g.'
                    ],
                    [
                        'question' => 'Un élève obtient 9,8 g, 9,8 g puis 12,1 g en mesurant trois fois le même échantillon. Que remarque-t-il en premier ?',
                        'choices' => [
                            ['choice_text' => 'Les trois mesures sont parfaitement cohérentes', 'is_correct' => false],
                            ['choice_text' => 'La valeur 12,1 g est nettement différente des deux autres', 'is_correct' => true],
                            ['choice_text' => 'L’échantillon est forcément devenu liquide', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique a forcément augmenté', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux premières valeurs sont proches alors que 12,1 g est éloignée. Cette mesure doit être vérifiée car elle peut être une valeur aberrante.'
                    ],
                ],
            ],

            [
                'title' => 'Éléments, corps purs et mélanges',
                'description' => 'Apprenez à distinguer les éléments, les composés et les mélanges, puis à choisir une méthode simple de séparation.',
                'questions' => [
                    [
                        'question' => 'Lequel des échantillons suivants est un élément chimique pur ?',
                        'choices' => [
                            ['choice_text' => 'Le cuivre', 'is_correct' => true],
                            ['choice_text' => 'L’eau salée', 'is_correct' => false],
                            ['choice_text' => 'L’air', 'is_correct' => false],
                            ['choice_text' => 'Le thé sucré', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cuivre est un élément chimique constitué d’un seul type d’atomes. L’eau salée, l’air et le thé sucré sont des mélanges.'
                    ],
                    [
                        'question' => 'Quel exemple correspond à un mélange plutôt qu’à un composé pur ?',
                        'choices' => [
                            ['choice_text' => 'L’eau distillée', 'is_correct' => false],
                            ['choice_text' => 'Le dioxyde de carbone pur', 'is_correct' => false],
                            ['choice_text' => 'L’air', 'is_correct' => true],
                            ['choice_text' => 'Le chlorure de sodium pur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air contient plusieurs gaz mélangés, principalement de l’azote et du dioxygène. C’est donc un mélange.'
                    ],
                    [
                        'question' => 'Pourquoi l’eau salée est-elle considérée comme un mélange homogène ?',
                        'choices' => [
                            ['choice_text' => 'Le sel reste toujours au fond', 'is_correct' => false],
                            ['choice_text' => 'Sa composition est relativement uniforme dans tout le liquide', 'is_correct' => true],
                            ['choice_text' => 'Elle ne contient qu’une seule substance', 'is_correct' => false],
                            ['choice_text' => 'Elle doit obligatoirement être incolore', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un mélange homogène, les constituants sont répartis de façon uniforme. Une petite portion de la solution a donc une composition comparable à une autre.'
                    ],
                    [
                        'question' => 'Un récipient contient du sable et de petits morceaux de fer. Quelle méthode serait particulièrement efficace pour les séparer ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser un aimant', 'is_correct' => true],
                            ['choice_text' => 'Congeler le mélange', 'is_correct' => false],
                            ['choice_text' => 'Transformer l’eau en vapeur', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la densité de l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fer est attiré par un aimant alors que le sable ordinaire ne l’est pas. L’aimant permet donc de récupérer les morceaux de fer.'
                    ],
                    [
                        'question' => 'On dissout du sucre dans de l’eau. Dans cette solution, l’eau joue le rôle de :',
                        'choices' => [
                            ['choice_text' => 'Solvant', 'is_correct' => true],
                            ['choice_text' => 'Soluté', 'is_correct' => false],
                            ['choice_text' => 'Résidu', 'is_correct' => false],
                            ['choice_text' => 'Précipité', 'is_correct' => false],
                        ],
                        'explanation' => 'Le solvant est la substance qui dissout le soluté. Ici, l’eau dissout le sucre : l’eau est donc le solvant.'
                    ],
                    [
                        'question' => 'Que se passe-t-il lors de la filtration d’une eau boueuse à travers un papier filtre ?',
                        'choices' => [
                            ['choice_text' => 'Le papier transforme la boue en gaz', 'is_correct' => false],
                            ['choice_text' => 'Les particules solides peuvent être retenues alors que le liquide traverse le filtre', 'is_correct' => true],
                            ['choice_text' => 'L’eau devient un nouveau composé', 'is_correct' => false],
                            ['choice_text' => 'Toutes les substances disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'La filtration permet de séparer certaines particules solides insolubles d’un liquide. Les solides restent sur le filtre tandis que le liquide passe.'
                    ],
                    [
                        'question' => 'Quel exemple correspond à une évaporation utilisée pour récupérer un solide dissous ?',
                        'choices' => [
                            ['choice_text' => 'Faire évaporer l’eau salée pour récupérer le sel', 'is_correct' => true],
                            ['choice_text' => 'Retirer des pierres du sable', 'is_correct' => false],
                            ['choice_text' => 'Utiliser un aimant pour récupérer du fer', 'is_correct' => false],
                            ['choice_text' => 'Filtrer des feuilles de thé', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque l’eau s’évapore, le sel dissous reste dans le récipient dans les conditions habituelles. On peut ainsi récupérer le sel.'
                    ],
                    [
                        'question' => 'Un bol contient du riz, des haricots et des morceaux de pâtes. Pourquoi ce mélange est-il hétérogène ?',
                        'choices' => [
                            ['choice_text' => 'Les différents constituants peuvent être distingués', 'is_correct' => true],
                            ['choice_text' => 'Il ne contient qu’une seule substance', 'is_correct' => false],
                            ['choice_text' => 'Toutes ses parties ont exactement la même composition', 'is_correct' => false],
                            ['choice_text' => 'Il doit forcément être gazeux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les différents éléments peuvent être vus et distingués. Ils ne sont donc pas répartis uniformément comme dans un mélange homogène.'
                    ],
                    [
                        'question' => 'On veut séparer un mélange d’eau et d’alcool. Les deux liquides sont complètement mélangés. Quelle méthode convient mieux qu’une filtration ?',
                        'choices' => [
                            ['choice_text' => 'La filtration', 'is_correct' => false],
                            ['choice_text' => 'La distillation', 'is_correct' => true],
                            ['choice_text' => 'La séparation magnétique', 'is_correct' => false],
                            ['choice_text' => 'Le tri manuel', 'is_correct' => false],
                        ],
                        'explanation' => 'La filtration sert surtout à séparer un solide insoluble d’un liquide. La distillation peut séparer des liquides grâce à leurs températures d’ébullition différentes.'
                    ],
                    [
                        'question' => 'On dispose d’un mélange de sable, d’eau et de sel dissous. Quelle démarche est la plus logique pour récupérer les deux constituants solides ?',
                        'choices' => [
                            ['choice_text' => 'Filtrer pour retirer le sable puis faire évaporer l’eau pour récupérer le sel', 'is_correct' => true],
                            ['choice_text' => 'Utiliser seulement un aimant', 'is_correct' => false],
                            ['choice_text' => 'Filtrer et s’arrêter là', 'is_correct' => false],
                            ['choice_text' => 'Faire bouillir le sable avant toute autre opération', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sable, qui ne se dissout pas, peut être séparé par filtration. Le sel dissous passe avec l’eau, donc il faut ensuite éliminer l’eau par évaporation.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations physiques et chimiques',
                'description' => 'Apprenez à distinguer une transformation physique d’une transformation chimique grâce à des situations simples et à des observations concrètes.',
                'questions' => [
                    [
                        'question' => 'Des glaçons fondent sur la table de la cuisine. Il s’agit principalement d’une :',
                        'choices' => [
                            ['choice_text' => 'Transformation physique', 'is_correct' => true],
                            ['choice_text' => 'Transformation chimique', 'is_correct' => false],
                            ['choice_text' => 'Changement d’identité chimique', 'is_correct' => false],
                            ['choice_text' => 'Transformation définitive en une autre substance', 'is_correct' => false],
                        ],
                        'explanation' => 'La glace passe de l’état solide à l’état liquide, mais elle reste constituée d’eau. Son identité chimique ne change pas.'
                    ],
                    [
                        'question' => 'Laquelle de ces situations montre clairement la formation d’une nouvelle substance ?',
                        'choices' => [
                            ['choice_text' => 'Découper une feuille de papier', 'is_correct' => false],
                            ['choice_text' => 'Écraser un morceau de craie', 'is_correct' => false],
                            ['choice_text' => 'La formation de rouille sur le fer', 'is_correct' => true],
                            ['choice_text' => 'Faire fondre de la cire', 'is_correct' => false],
                        ],
                        'explanation' => 'La rouille est une nouvelle substance formée lors de réactions du fer avec son environnement. Il s’agit donc d’une transformation chimique.'
                    ],
                    [
                        'question' => 'Un élève écrase un morceau de sucre pour obtenir une poudre. Que peut-on dire de cette transformation ?',
                        'choices' => [
                            ['choice_text' => 'Le sucre est devenu une nouvelle substance', 'is_correct' => false],
                            ['choice_text' => 'Le sucre a subi une transformation physique', 'is_correct' => true],
                            ['choice_text' => 'Un gaz s’est formé', 'is_correct' => false],
                            ['choice_text' => 'Le sucre a perdu toute sa masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sucre change seulement de taille et de forme. Il reste chimiquement du sucre : c’est donc un changement physique.'
                    ],
                    [
                        'question' => 'Un comprimé effervescent produit des bulles lorsqu’il est placé dans l’eau. Pourquoi cela peut-il indiquer une transformation chimique ?',
                        'choices' => [
                            ['choice_text' => 'Un gaz est produit au cours du phénomène', 'is_correct' => true],
                            ['choice_text' => 'L’eau change de couleur à cause de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Le comprimé devient simplement plus petit', 'is_correct' => false],
                            ['choice_text' => 'Le liquide est forcément en train de geler', 'is_correct' => false],
                        ],
                        'explanation' => 'L’apparition de bulles de gaz est souvent un indice d’une réaction chimique. Un nouveau gaz peut être produit pendant la réaction.'
                    ],
                    [
                        'question' => 'Quel changement peut généralement être inversé sans créer une nouvelle substance ?',
                        'choices' => [
                            ['choice_text' => 'Brûler du papier', 'is_correct' => false],
                            ['choice_text' => 'Faire rouiller du fer', 'is_correct' => false],
                            ['choice_text' => 'Congeler de l’eau', 'is_correct' => true],
                            ['choice_text' => 'Cuire un œuf', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau peut être congelée puis refondue tout en restant de l’eau. Les autres exemples impliquent des transformations chimiques.'
                    ],
                    [
                        'question' => 'Une bougie brûle. Quelle observation est directement liée à une réaction chimique ?',
                        'choices' => [
                            ['choice_text' => 'La bougie devient plus courte', 'is_correct' => false],
                            ['choice_text' => 'La cire devient liquide près de la flamme', 'is_correct' => false],
                            ['choice_text' => 'De la chaleur et de la lumière sont produites pendant la combustion', 'is_correct' => true],
                            ['choice_text' => 'La bougie reste posée verticalement', 'is_correct' => false],
                        ],
                        'explanation' => 'La combustion est une réaction chimique. Elle s’accompagne notamment d’un dégagement de chaleur et de lumière.'
                    ],
                    [
                        'question' => 'Un élève affirme : « Dissoudre du sel dans l’eau est forcément une transformation chimique puisque le sel disparaît. » Quelle correction est la plus juste ?',
                        'choices' => [
                            ['choice_text' => 'La dissolution est généralement une transformation physique puisque le sel peut être récupéré', 'is_correct' => true],
                            ['choice_text' => 'Le sel devient forcément un gaz', 'is_correct' => false],
                            ['choice_text' => 'L’eau détruit définitivement le sel', 'is_correct' => false],
                            ['choice_text' => 'Tout ce qu’on ne voit plus est automatiquement transformé chimiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’il se dissout, le sel se répartit dans l’eau. On peut ensuite récupérer le sel en éliminant l’eau, ce qui montre qu’il n’a pas nécessairement été transformé en une autre substance.'
                    ],
                    [
                        'question' => 'Un vélo laissé dehors développe progressivement une couche brune. Quelle conclusion est la plus raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'Le métal a uniquement changé de forme', 'is_correct' => false],
                            ['choice_text' => 'Une réaction chimique a probablement eu lieu', 'is_correct' => true],
                            ['choice_text' => 'Le vélo a simplement fondu', 'is_correct' => false],
                            ['choice_text' => 'Aucune transformation ne s’est produite', 'is_correct' => false],
                        ],
                        'explanation' => 'La couche brune correspond généralement à de la rouille. Une nouvelle substance s’est donc formée à partir du fer et de son environnement.'
                    ],
                    [
                        'question' => 'Quelle proposition contient, dans cet ordre, une transformation physique puis une transformation chimique ?',
                        'choices' => [
                            ['choice_text' => 'Faire fondre de la glace ; brûler du bois', 'is_correct' => true],
                            ['choice_text' => 'Faire rouiller du fer ; couper du papier', 'is_correct' => false],
                            ['choice_text' => 'Cuire un aliment ; congeler de l’eau', 'is_correct' => false],
                            ['choice_text' => 'Brûler un carburant ; faire bouillir de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'La glace fond sans changer de nature chimique, tandis que la combustion du bois produit de nouvelles substances.'
                    ],
                    [
                        'question' => 'Pendant une expérience, un liquide clair devient trouble et un solide apparaît au fond du récipient. Quelle interprétation est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Le volume est forcément devenu nul', 'is_correct' => false],
                            ['choice_text' => 'Un nouveau solide a peut-être été formé lors d’une réaction chimique', 'is_correct' => true],
                            ['choice_text' => 'Le liquide est forcément devenu solide', 'is_correct' => false],
                            ['choice_text' => 'Le récipient a transformé le liquide en métal', 'is_correct' => false],
                        ],
                        'explanation' => 'L’apparition d’un solide nouveau, appelé précipité, peut indiquer qu’une réaction chimique a produit une substance auparavant dissoute ou invisible.'
                    ],
                ],
            ],

            [
                'title' => 'Sécurité et gestes de laboratoire',
                'description' => 'Maîtrisez les gestes essentiels pour travailler correctement avec le matériel et les produits chimiques au laboratoire.',
                'questions' => [
                    [
                        'question' => 'Avant de commencer une expérience, quelle est la première chose à faire ?',
                        'choices' => [
                            ['choice_text' => 'Lire le protocole et les consignes de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Allumer tout le matériel disponible', 'is_correct' => false],
                            ['choice_text' => 'Mélanger tous les produits', 'is_correct' => false],
                            ['choice_text' => 'Commencer à chauffer le premier récipient trouvé', 'is_correct' => false],
                        ],
                        'explanation' => 'Lire les consignes permet de connaître le matériel nécessaire, les risques et les étapes à suivre avant toute manipulation.'
                    ],
                    [
                        ],
                        'explanation' => 'Le thermomètre mesure la température. La balance mesure la masse et l’éprouvette graduée mesure un volume de liquide.'
                    ],
                    [
                        'question' => 'Pourquoi attache-t-on les cheveux longs pendant une expérience ?',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’ils touchent une flamme, un produit ou un appareil', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les mesures plus précises', 'is_correct' => false],
                            ['choice_text' => 'Pour changer la température de la pièce', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher le verre de se casser', 'is_correct' => false],
                        ],
                        'explanation' => 'Des cheveux détachés peuvent toucher une flamme, un objet chaud ou un produit chimique. Les attacher réduit ce risque.'
                    ],
                    [
                        'question' => 'Un élève doit transférer une petite quantité de poudre solide. Quel instrument est couramment utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Une spatule', 'is_correct' => true],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Une règle', 'is_correct' => false],
                            ['choice_text' => 'Un chronomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'La spatule est adaptée au transfert de petites quantités de substances solides au laboratoire.'
                    ],
                    [
                        'question' => 'Un élève renverse une petite quantité d’un liquide inconnu sur la paillasse. Que doit-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Cacher rapidement le liquide avec une feuille', 'is_correct' => false],
                            ['choice_text' => 'Signaler immédiatement l’incident et suivre la procédure prévue', 'is_correct' => true],
                            ['choice_text' => 'Goûter le liquide pour l’identifier', 'is_correct' => false],
                            ['choice_text' => 'Le laisser jusqu’à la fin du cours', 'is_correct' => false],
                        ],
                        'explanation' => 'Même une petite quantité d’un produit inconnu peut présenter un danger. Le responsable du laboratoire doit être prévenu afin d’utiliser la bonne méthode de nettoyage.'
                    ],
                    [
                        'question' => 'Pendant une démonstration, le professeur demande d’observer l’odeur d’un échantillon. Quelle méthode est la plus sûre avec une substance inconnue ?',
                        'choices' => [
                            ['choice_text' => 'Placer directement le nez au-dessus du récipient', 'is_correct' => false],
                            ['choice_text' => 'Ramener doucement les vapeurs vers le nez avec la main, seulement si le professeur le demande', 'is_correct' => true],
                            ['choice_text' => 'Secouer fortement le récipient avant de le sentir', 'is_correct' => false],
                            ['choice_text' => 'Goûter d’abord une petite quantité', 'is_correct' => false],
                        ],
                        'explanation' => 'Inhaler directement une substance inconnue peut être dangereux. Le geste de ventilation douce vers le nez, lorsqu’il est autorisé, limite l’exposition.'
                    ],
                    [
                        'question' => 'Pourquoi les récipients de produits chimiques doivent-ils porter une étiquette ?',
                        'choices' => [
                            ['choice_text' => 'Pour identifier leur contenu et donner des informations utiles pour leur manipulation', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter leur masse', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toutes les réactions chimiques', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les produits inoffensifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une étiquette permet de savoir quel produit se trouve dans le récipient et fournit, selon le cas, des indications de sécurité et de manipulation.'
                    ],
                    [
                        'question' => 'Une éprouvette en verre vient d’être chauffée. Pourquoi ne faut-il pas la saisir immédiatement à main nue ?',
                        'choices' => [
                            ['choice_text' => 'Le verre peut rester très chaud et provoquer une brûlure', 'is_correct' => true],
                            ['choice_text' => 'Le verre devient magnétique', 'is_correct' => false],
                            ['choice_text' => 'Le verre se transforme instantanément en liquide', 'is_correct' => false],
                            ['choice_text' => 'La chaleur disparaît dès que la flamme est retirée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verre chaud peut avoir exactement la même apparence que le verre froid. Il faut donc attendre ou utiliser le matériel adapté pour le manipuler.'
                    ],
                    [
                        'question' => 'Un élève note seulement « 25 » dans son cahier après avoir mesuré le volume d’un liquide. Quel élément manque ?',
                        'choices' => [
                            ['choice_text' => 'L’unité de mesure', 'is_correct' => true],
                            ['choice_text' => 'Le nom de l’expérience uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une formule chimique', 'is_correct' => false],
                            ['choice_text' => 'Un deuxième récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'Un nombre seul ne permet pas de savoir s’il s’agit de 25 mL, 25 L ou d’une autre unité. Une mesure scientifique doit être accompagnée de son unité.'
                    ],
                    [
                        'question' => 'À la fin d’une manipulation, quelle attitude est la plus correcte ?',
                        'choices' => [
                            ['choice_text' => 'Laisser le matériel exactement où il se trouve', 'is_correct' => false],
                            ['choice_text' => 'Nettoyer la paillasse et éliminer les produits conformément aux consignes', 'is_correct' => true],
                            ['choice_text' => 'Verser tous les produits restants dans l’évier', 'is_correct' => false],
                            ['choice_text' => 'Emporter les échantillons chez soi', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bon travail de laboratoire se termine par le rangement, le nettoyage et l’élimination correcte des déchets selon les consignes.'
                    ],
                ],
            ],

            [
                'title' => 'Raisonner comme un chimiste',
                'description' => 'Utilisez des observations, des hypothèses, des variables et des données pour comprendre comment se construit une petite expérience scientifique.',
                'questions' => [
                    [
                        'question' => 'Un élève remarque qu’un comprimé se dissout plus vite dans l’eau chaude que dans l’eau froide. La phrase « L’eau chaude pourrait accélérer la dissolution » est une :',
                        'choices' => [
                            ['choice_text' => 'Hypothèse', 'is_correct' => true],
                            ['choice_text' => 'Conclusion définitivement prouvée', 'is_correct' => false],
                            ['choice_text' => 'Unité de mesure', 'is_correct' => false],
                            ['choice_text' => 'Équation chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hypothèse est une proposition que l’on peut tester. Ici, l’idée peut être vérifiée en comparant les temps de dissolution.'
                    ],
                    [
                        'question' => 'Dans une expérience, l’élève change la température de l’eau et mesure le temps nécessaire à la dissolution d’un comprimé. Quelle est la variable indépendante ?',
                        'choices' => [
                            ['choice_text' => 'Le comprimé', 'is_correct' => false],
                            ['choice_text' => 'La température de l’eau', 'is_correct' => true],
                            ['choice_text' => 'Le temps de dissolution', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de mesures', 'is_correct' => false],
                        ],
                        'explanation' => 'La variable indépendante est le facteur que l’expérimentateur décide de modifier. Ici, c’est la température de l’eau.'
                    ],
                    [
                        'question' => 'Dans la même expérience, quelle est la variable dépendante ?',
                        'choices' => [
                            ['choice_text' => 'La température de l’eau', 'is_correct' => false],
                            ['choice_text' => 'La couleur du comprimé', 'is_correct' => false],
                            ['choice_text' => 'Le temps nécessaire pour dissoudre le comprimé', 'is_correct' => true],
                            ['choice_text' => 'La marque du comprimé', 'is_correct' => false],
                        ],
                        'explanation' => 'La variable dépendante est ce que l’on mesure pour voir l’effet du changement réalisé. Ici, on mesure le temps de dissolution.'
                    ],
                    [
                        'question' => 'Pourquoi refaire une expérience plusieurs fois ?',
                        'choices' => [
                            ['choice_text' => 'Pour voir si le résultat reste cohérent d’un essai à l’autre', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul essai ne produit jamais de données', 'is_correct' => false],
                            ['choice_text' => 'Parce que plusieurs essais prouvent automatiquement l’hypothèse', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'Répéter les essais permet d’identifier les variations et de vérifier si une tendance observée est réellement reproductible.'
                    ],
                    [
                        'question' => 'Un élève veut savoir si agiter une solution change la vitesse de dissolution du sucre. Quel protocole permet une comparaison correcte ?',
                        'choices' => [
                            ['choice_text' => 'Changer à la fois la quantité de sucre et la température', 'is_correct' => false],
                            ['choice_text' => 'Garder constants la quantité de sucre et la température et modifier seulement l’agitation', 'is_correct' => true],
                            ['choice_text' => 'Modifier toutes les conditions en même temps', 'is_correct' => false],
                            ['choice_text' => 'Agiter un verre sans mesurer le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour savoir si l’agitation a un effet, il faut garder les autres conditions importantes aussi constantes que possible.'
                    ],
                    [
                        'question' => 'Les résultats d’un élève sont 5,1 ; 5,0 ; 5,1 ; 8,7. Que devrait-il envisager ?',
                        'choices' => [
                            ['choice_text' => 'La valeur 8,7 peut être une valeur aberrante et mérite d’être vérifiée', 'is_correct' => true],
                            ['choice_text' => 'Les trois premières valeurs sont forcément fausses', 'is_correct' => false],
                            ['choice_text' => 'Toutes les valeurs doivent être supprimées', 'is_correct' => false],
                            ['choice_text' => 'L’expérience ne fournit aucune information utile', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur 8,7 est nettement éloignée des trois autres. Il faut vérifier le matériel et la procédure avant de décider comment la traiter.'
                    ],
                    [
                        'question' => 'Laquelle de ces phrases est une observation directe ?',
                        'choices' => [
                            ['choice_text' => '« Ce liquide est forcément dangereux. »', 'is_correct' => false],
                            ['choice_text' => '« Le liquide est devenu jaune après le mélange. »', 'is_correct' => true],
                            ['choice_text' => '« La réaction doit avoir été très rapide. »', 'is_correct' => false],
                            ['choice_text' => '« L’élève a probablement mis trop de poudre. »', 'is_correct' => false],
                        ],
                        'explanation' => 'Le changement de couleur peut être constaté directement. Les autres phrases sont des interprétations ou des suppositions.'
                    ],
                    [
                        'question' => 'Un graphique montre que lorsque la quantité d’agitation augmente, le temps de dissolution diminue. Que peut-on dire directement ?',
                        'choices' => [
                            ['choice_text' => 'Dans les conditions testées, davantage d’agitation est associé à un temps de dissolution plus court', 'is_correct' => true],
                            ['choice_text' => 'Agiter accélérera toujours toutes les dissolutions', 'is_correct' => false],
                            ['choice_text' => 'Le graphique explique exactement ce qui se passe au niveau des molécules', 'is_correct' => false],
                            ['choice_text' => 'La température n’a aucune influence possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Le graphique met en évidence une relation dans les conditions de l’expérience. Il ne suffit pas à lui seul pour généraliser à toutes les situations.'
                    ],
                    [
                        'question' => 'Une classe teste deux méthodes pour conserver des fruits. La méthode A est testée sur un seul fruit, tandis que la méthode B est testée sur dix fruits. Pourquoi cette comparaison est-elle limitée ?',
                        'choices' => [
                            ['choice_text' => 'Les tailles des échantillons sont différentes', 'is_correct' => true],
                            ['choice_text' => 'On ne peut jamais utiliser dix fruits en science', 'is_correct' => false],
                            ['choice_text' => 'Une méthode est automatiquement correcte', 'is_correct' => false],
                            ['choice_text' => 'La taille de l’échantillon n’a jamais d’importance', 'is_correct' => false],
                        ],
                        'explanation' => 'Des tailles d’échantillon très différentes rendent la comparaison moins équilibrée. Dans une expérience bien contrôlée, on cherche à garder des conditions comparables.'
                    ],
                    [
                        'question' => 'Après avoir analysé les résultats, un élève constate que les données ne soutiennent pas son hypothèse. Que doit-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Modifier les résultats pour qu’ils correspondent à l’hypothèse', 'is_correct' => false],
                            ['choice_text' => 'Présenter honnêtement les résultats et réfléchir à une autre explication ou à un nouvel essai', 'is_correct' => true],
                            ['choice_text' => 'Ignorer toutes les mesures', 'is_correct' => false],
                            ['choice_text' => 'Dire que l’expérience était forcément inutile', 'is_correct' => false],
                        ],
                        'explanation' => 'En science, les données sont plus importantes que l’idée de départ. Une hypothèse non confirmée peut aider à construire une meilleure explication.'
                    ],
                ],
            ],

            [
                'title' => 'Solutions et mélanges du quotidien',
                'description' => 'Comprenez les notions de soluté, solvant, concentration et dilution à partir de situations simples de la vie quotidienne.',
                'questions' => [
                    [
                        'question' => 'Dans une tasse de thé, le sucre est la substance qui se dissout. Le sucre est donc le :',
                        'choices' => [
                            ['choice_text' => 'Soluté', 'is_correct' => true],
                            ['choice_text' => 'Solvant', 'is_correct' => false],
                            ['choice_text' => 'Filtre', 'is_correct' => false],
                            ['choice_text' => 'Résidu', 'is_correct' => false],
                        ],
                        'explanation' => 'Le soluté est la substance dissoute dans une solution. Ici, le sucre se dissout dans l’eau du thé.'
                    ],
                    [
                        'question' => 'Deux verres contiennent la même quantité d’eau. Le premier reçoit une cuillère de sucre et le second trois cuillères. Quel verre contient la solution la plus concentrée ?',
                        'choices' => [
                            ['choice_text' => 'Le premier', 'is_correct' => false],
                            ['choice_text' => 'Le second', 'is_correct' => true],
                            ['choice_text' => 'Les deux ont la même concentration', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité d’eau est la même, mais le second verre contient davantage de sucre dissous. Sa concentration est donc plus élevée.'
                    ],
                    [
                        'question' => 'Pourquoi agiter une boisson sucrée aide-t-il généralement le sucre à se dissoudre plus rapidement ?',
                        'choices' => [
                            ['choice_text' => 'L’agitation augmente le contact entre le sucre et l’eau', 'is_correct' => true],
                            ['choice_text' => 'L’eau devient une autre substance', 'is_correct' => false],
                            ['choice_text' => 'Toute l’eau disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le sucre devient un gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Agiter met continuellement de l’eau en contact avec les particules de sucre, ce qui favorise et accélère la dissolution.'
                    ],
                    [
                        'question' => 'On ajoute de l’eau à une boisson sans ajouter de sucre. Que devient sa concentration en sucre ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente', 'is_correct' => false],
                            ['choice_text' => 'Elle devient forcément nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut pas changer', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ajout d’eau augmente la quantité de solvant sans augmenter la quantité de sucre. La solution devient donc plus diluée.'
                    ],
                    [
                        'question' => 'Quelle situation peut rendre une solution salée plus concentrée ?',
                        'choices' => [
                            ['choice_text' => 'Ajouter davantage d’eau', 'is_correct' => false],
                            ['choice_text' => 'Retirer une partie de l’eau sans retirer le sel', 'is_correct' => true],
                            ['choice_text' => 'Ajouter des glaçons', 'is_correct' => false],
                            ['choice_text' => 'Verser la solution dans un récipient plus grand', 'is_correct' => false],
                        ],
                        'explanation' => 'Si une partie du solvant s’évapore alors que le sel reste dans la solution, la quantité de sel par unité de solution augmente.'
                    ],
                    [
                        'question' => 'Une poudre pour boisson se dissout complètement dans l’eau et aucune particule solide n’est visible. Quelle observation montre qu’il s’agit d’une solution ?',
                        'choices' => [
                            ['choice_text' => 'La substance dissoute est répartie dans tout le liquide', 'is_correct' => true],
                            ['choice_text' => 'Toute la poudre reste au fond', 'is_correct' => false],
                            ['choice_text' => 'Le mélange se sépare immédiatement en couches', 'is_correct' => false],
                            ['choice_text' => 'Toute l’eau disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une solution, le soluté est réparti dans l’ensemble du solvant et n’est plus visible sous forme de particules distinctes.'
                    ],
                    [
                        'question' => 'Deux élèves préparent des solutions salées avec chacun 100 mL d’eau. L’un utilise 5 g de sel et l’autre 10 g. Laquelle est la plus concentrée ?',
                        'choices' => [
                            ['choice_text' => 'Celle qui contient 10 g de sel', 'is_correct' => true],
                            ['choice_text' => 'Celle qui contient 5 g de sel', 'is_correct' => false],
                            ['choice_text' => 'Elles ont la même concentration', 'is_correct' => false],
                            ['choice_text' => 'La concentration dépend uniquement du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité d’eau est identique dans les deux cas. La solution contenant 10 g de sel contient donc davantage de soluté pour le même volume d’eau.'
                    ],
                    [
                        'question' => 'Une soupe est trop salée. Quelle action simple peut la rendre moins concentrée en sel ?',
                        'choices' => [
                            ['choice_text' => 'Ajouter de l’eau ou un autre liquide adapté', 'is_correct' => true],
                            ['choice_text' => 'Ajouter encore du sel', 'is_correct' => false],
                            ['choice_text' => 'Ne rien changer', 'is_correct' => false],
                            ['choice_text' => 'Changer simplement de casserole', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter du liquide augmente la quantité de solvant et diminue la concentration en sel.'
                    ],
                    [
                        'question' => 'Un élève dit : « Une solution qui contient plus de soluté est forcément plus concentrée. » Quel élément doit-il aussi prendre en compte ?',
                        'choices' => [
                            ['choice_text' => 'La quantité de solvant ou de solution', 'is_correct' => true],
                            ['choice_text' => 'La couleur du récipient', 'is_correct' => false],
                            ['choice_text' => 'La forme de la cuillère', 'is_correct' => false],
                            ['choice_text' => 'Le nom du laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La concentration dépend de la quantité de soluté par rapport à la quantité de solvant ou de solution. La quantité de soluté seule ne suffit pas.'
                    ],
                    [
                        'question' => 'Sam prépare deux boissons avec 4 g de poudre chacune. Dans le verre A, il met 100 mL d’eau et dans le verre B, 200 mL. Laquelle est la plus concentrée ?',
                        'choices' => [
                            ['choice_text' => 'Le verre A, car la même quantité de poudre est dissoute dans moins d’eau', 'is_correct' => true],
                            ['choice_text' => 'Le verre B, car il contient plus d’eau', 'is_correct' => false],
                            ['choice_text' => 'Elles ont la même concentration car la masse de poudre est identique', 'is_correct' => false],
                            ['choice_text' => 'Le verre B, car la concentration augmente avec le volume', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux verres contiennent 4 g de poudre, mais le verre A contient deux fois moins d’eau. La quantité de poudre par volume d’eau y est donc plus importante.'
                    ],
                ],
            ],

            [
                'title' => 'Premiers pas sur les atomes et les molécules',
                'description' => 'Découvrez comment les chimistes décrivent la matière à l’échelle des atomes et des molécules et reliez ces idées à des phénomènes simples.',
                'questions' => [
                    [
                        'question' => 'Pour expliquer le comportement de la matière, les chimistes utilisent notamment l’idée qu’elle est constituée de très petites particules appelées :',
                        'choices' => [
                            ['choice_text' => 'Atomes et molécules', 'is_correct' => true],
                            ['choice_text' => 'Ombres et rayons', 'is_correct' => false],
                            ['choice_text' => 'Pixels et images', 'is_correct' => false],
                            ['choice_text' => 'Échos et sons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les atomes sont les unités de base des éléments et les molécules sont formées de plusieurs atomes liés entre eux.'
                    ],
                    [
                        'question' => 'Dans une description simple de la chimie, qu’est-ce qu’une molécule ?',
                        'choices' => [
                            ['choice_text' => 'Un ensemble d’atomes liés entre eux', 'is_correct' => true],
                            ['choice_text' => 'Un type de verre de laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Une unité de temps', 'is_correct' => false],
                            ['choice_text' => 'Un grain de poudre visible', 'is_correct' => false],
                        ],
                        'explanation' => 'Une molécule est constituée d’atomes reliés entre eux. Elle peut contenir des atomes identiques ou différents.'
                    ],
                    [
                        'question' => 'Pourquoi un verre d’eau peut-il sembler parfaitement immobile alors que les scientifiques disent que l’eau est constituée de particules en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Les particules sont beaucoup trop petites pour être vues individuellement', 'is_correct' => true],
                            ['choice_text' => 'L’eau ne contient aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Les particules cessent d’exister lorsque l’eau est transparente', 'is_correct' => false],
                            ['choice_text' => 'Le verre empêche toute réaction chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules de matière sont extrêmement petites. Leur mouvement n’est pas visible directement à l’œil nu dans un verre d’eau.'
                    ],
                    [
                        'question' => 'Une personne vaporise du parfum dans un coin de la pièce et son odeur est ensuite perceptible plus loin. Que montre cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Les particules du gaz se déplacent et se dispersent dans l’espace', 'is_correct' => true],
                            ['choice_text' => 'Les solides ne peuvent pas exister', 'is_correct' => false],
                            ['choice_text' => 'Les molécules sont visibles à l’œil nu', 'is_correct' => false],
                            ['choice_text' => 'La matière se déplace seulement vers le haut', 'is_correct' => false],
                        ],
                        'explanation' => 'Les molécules du parfum se déplacent dans l’air et se mélangent progressivement aux autres gaz présents dans la pièce.'
                    ],
                    [
                        'question' => 'Lorsque la vapeur d’eau refroidit et forme de petites gouttes liquides, quel changement d’état se produit ?',
                        'choices' => [
                            ['choice_text' => 'Gaz vers liquide', 'is_correct' => true],
                            ['choice_text' => 'Liquide vers gaz', 'is_correct' => false],
                            ['choice_text' => 'Solide vers gaz', 'is_correct' => false],
                            ['choice_text' => 'Solide vers liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'La vapeur est de l’eau à l’état gazeux. En refroidissant, elle peut redevenir liquide : c’est la condensation.'
                    ],
                    [
                        'question' => 'Un élève dit : « Quand la glace fond, les particules d’eau disparaissent. » Quelle explication faut-il lui donner ?',
                        'choices' => [
                            ['choice_text' => 'Les particules restent présentes mais leur mouvement et leur organisation changent', 'is_correct' => true],
                            ['choice_text' => 'Les particules sont détruites par la chaleur', 'is_correct' => false],
                            ['choice_text' => 'Les particules deviennent de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Les particules quittent complètement la Terre', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion modifie l’état physique de l’eau. Les particules restent présentes, mais elles ne sont plus organisées comme dans la glace.'
                    ],
                    [
                        'question' => 'Pourquoi l’odeur d’un plat est-elle généralement plus forte lorsque l’on se trouve juste à côté ?',
                        'choices' => [
                            ['choice_text' => 'Davantage de molécules odorantes atteignent probablement le nez', 'is_correct' => true],
                            ['choice_text' => 'Le plat disparaît chimiquement lorsqu’on s’éloigne', 'is_correct' => false],
                            ['choice_text' => 'Le plat devient forcément plus chaud', 'is_correct' => false],
                            ['choice_text' => 'Les odeurs n’ont aucun rapport avec des molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'L’odeur est liée à des molécules qui atteignent le nez. Plus on est proche de la source, plus on peut en recevoir.'
                    ],
                    [
                        'question' => 'Un ballon devient plus gros lorsqu’on y ajoute de l’air. Quelle explication correspond au modèle particulaire ?',
                        'choices' => [
                            ['choice_text' => 'Davantage de particules de gaz entrent dans le ballon et exercent une pression vers l’extérieur', 'is_correct' => true],
                            ['choice_text' => 'L’air n’a aucune masse et le ballon grandit tout seul', 'is_correct' => false],
                            ['choice_text' => 'Le caoutchouc devient un gaz', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'En ajoutant de l’air, on augmente le nombre de particules de gaz dans le ballon. Elles exercent une pression sur ses parois et le ballon se dilate.'
                    ],
                    [
                        'question' => 'Quelle idée générale sur la matière est particulièrement utile à retenir ?',
                        'choices' => [
                            ['choice_text' => 'Ce que l’on observe à notre échelle peut souvent être expliqué par le comportement de très petites particules', 'is_correct' => true],
                            ['choice_text' => 'Seuls les solides sont constitués de particules', 'is_correct' => false],
                            ['choice_text' => 'Les particules s’arrêtent toujours dans les liquides', 'is_correct' => false],
                            ['choice_text' => 'On peut généralement voir les atomes à l’œil nu', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle particulaire permet d’expliquer de nombreux phénomènes comme la diffusion, les changements d’état et le comportement des gaz.'
                    ],
                    [
                        'question' => 'Une cuillère métallique garde sa forme alors que l’air remplit toute une pièce. Quelle différence entre leurs particules correspond le mieux à cette observation ?',
                        'choices' => [
                            ['choice_text' => 'Les particules d’un solide sont beaucoup plus rapprochées et organisées que celles d’un gaz', 'is_correct' => true],
                            ['choice_text' => 'Les gaz ne contiennent aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Les particules d’un solide ne bougent jamais', 'is_correct' => false],
                            ['choice_text' => 'Les particules d’un gaz sont toujours plus grosses', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un solide, les particules sont très rapprochées et restent autour de positions fixes. Dans un gaz, elles sont beaucoup plus éloignées et se déplacent librement.'
                    ],
                ],
            ],

            [
                'title' => 'La chimie dans la vie quotidienne',
                'description' => 'Appliquez les notions fondamentales de chimie à la cuisine, au nettoyage, aux matériaux et à des situations courantes.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les aliments coupés en petits morceaux cuisent-ils souvent plus rapidement que les mêmes aliments laissés entiers ?',
                        'choices' => [
                            ['choice_text' => 'Une plus grande surface est exposée à la chaleur', 'is_correct' => true],
                            ['choice_text' => 'Les petits morceaux ne contiennent plus de particules', 'is_correct' => false],
                            ['choice_text' => 'Découper un aliment supprime la gravité', 'is_correct' => false],
                            ['choice_text' => 'Les petits morceaux ne peuvent plus recevoir de chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Découper un aliment augmente sa surface de contact avec l’environnement chaud. La chaleur peut donc atteindre davantage de matière en même temps.'
                    ],
                    [
                        'question' => 'Un tee-shirt mouillé sèche généralement plus vite lorsqu’il fait chaud et qu’il y a du vent. Quelle idée de chimie aide à l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les molécules d’eau peuvent quitter plus facilement la surface dans certaines conditions', 'is_correct' => true],
                            ['choice_text' => 'L’eau devient un nouvel élément chimique', 'is_correct' => false],
                            ['choice_text' => 'Le vent détruit les molécules d’eau', 'is_correct' => false],
                            ['choice_text' => 'L’air empêche toute évaporation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le séchage est lié à l’évaporation. La chaleur et le déplacement de l’air peuvent favoriser le départ des molécules d’eau vers l’atmosphère.'
                    ],
                    [
                        'question' => 'Pourquoi une lessive en poudre peut-elle se dissoudre plus rapidement qu’un seul gros morceau de la même substance ?',
                        'choices' => [
                            ['choice_text' => 'La poudre présente une plus grande surface de contact avec l’eau', 'is_correct' => true],
                            ['choice_text' => 'La poudre ne contient plus de particules', 'is_correct' => false],
                            ['choice_text' => 'L’eau devient automatiquement plus froide', 'is_correct' => false],
                            ['choice_text' => 'La lessive cesse d’être de la matière', 'is_correct' => false],
                        ],
                        'explanation' => 'En divisant un solide en petits morceaux, on augmente sa surface de contact avec l’eau, ce qui peut accélérer sa dissolution.'
                    ],
                    [
                        'question' => 'Un cuisinier mesure précisément 500 mL d’eau au lieu d’estimer la quantité à l’œil. Quelle compétence utilise-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Une mesure quantitative', 'is_correct' => true],
                            ['choice_text' => 'Une séparation magnétique', 'is_correct' => false],
                            ['choice_text' => 'Une chromatographie', 'is_correct' => false],
                            ['choice_text' => 'Une désintégration nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure quantitative donne une valeur numérique précise et reproductible, ce qui est essentiel en sciences.'
                    ],
                    [
                        'question' => 'Une poêle métallique devient chaude rapidement alors que son manche en bois reste plus froid. Que montre surtout cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Les matériaux ne conduisent pas tous la chaleur de la même manière', 'is_correct' => true],
                            ['choice_text' => 'Le bois ne contient aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Le métal devient toujours liquide lorsqu’il chauffe', 'is_correct' => false],
                            ['choice_text' => 'Tous les matériaux conduisent exactement la même quantité de chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matériaux possèdent des propriétés thermiques différentes. Les métaux sont généralement de bons conducteurs de chaleur, contrairement au bois.'
                    ],
                    [
                        'question' => 'Lorsqu’on ouvre une bouteille de boisson gazeuse, de nombreuses bulles apparaissent. Que se passait-il avant l’ouverture ?',
                        'choices' => [
                            ['choice_text' => 'Du gaz était dissous dans la boisson sous pression', 'is_correct' => true],
                            ['choice_text' => 'Aucun gaz n’était présent dans la boisson', 'is_correct' => false],
                            ['choice_text' => 'Le liquide contenait uniquement du dioxyde de carbone solide', 'is_correct' => false],
                            ['choice_text' => 'La boisson était transformée en métal', 'is_correct' => false],
                        ],
                        'explanation' => 'Une boisson gazeuse contient du dioxyde de carbone dissous sous pression. Lorsque la pression diminue à l’ouverture, le gaz s’échappe sous forme de bulles.'
                    ],
                    [
                        'question' => 'Pourquoi est-il important de conserver les produits ménagers dans leurs récipients d’origine et étiquetés ?',
                        'choices' => [
                            ['choice_text' => 'L’étiquette permet d’identifier le produit et de connaître les précautions à prendre', 'is_correct' => true],
                            ['choice_text' => 'Le récipient modifie la composition chimique du produit', 'is_correct' => false],
                            ['choice_text' => 'Une étiquette empêche toutes les réactions', 'is_correct' => false],
                            ['choice_text' => 'Le produit devient inoffensif grâce au récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'L’étiquette permet de connaître le contenu du récipient et les précautions nécessaires. Un récipient sans identification peut être source d’erreurs dangereuses.'
                    ],
                    [
                        'question' => 'Un élève renverse du sucre sur la table puis utilise de l’eau pour le nettoyer. Quels phénomènes se produisent ?',
                        'choices' => [
                            ['choice_text' => 'Mélange puis dissolution', 'is_correct' => true],
                            ['choice_text' => 'Congélation puis rouille', 'is_correct' => false],
                            ['choice_text' => 'Distillation puis combustion', 'is_correct' => false],
                            ['choice_text' => 'Condensation puis décomposition', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sucre se mélange à l’eau puis se dissout. Il ne devient pas forcément une nouvelle substance au cours de cette opération.'
                    ],
                    [
                        'question' => 'Un enfant met une pièce métallique et un petit jouet en plastique dans l’eau. La pièce coule tandis que le jouet flotte. Quelle propriété aide à expliquer cette différence ?',
                        'choices' => [
                            ['choice_text' => 'La masse volumique', 'is_correct' => true],
                            ['choice_text' => 'La couleur', 'is_correct' => false],
                            ['choice_text' => 'L’odeur', 'is_correct' => false],
                            ['choice_text' => 'Le point de fusion uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La flottabilité dépend de la masse volumique de l’objet par rapport à celle de l’eau. Un objet plus dense que l’eau tend à couler.'
                    ],
                    [
                        'question' => 'Une clé métallique ne semble pas changer après quelques minutes dans l’eau, tandis qu’un autre métal développe une couche visible après plusieurs jours à l’extérieur. Que peut-on en déduire ?',
                        'choices' => [
                            ['choice_text' => 'Deux substances peuvent avoir des comportements chimiques différents dans des conditions similaires', 'is_correct' => true],
                            ['choice_text' => 'Tous les métaux réagissent exactement à la même vitesse', 'is_correct' => false],
                            ['choice_text' => 'L’eau ne peut jamais agir sur un matériau', 'is_correct' => false],
                            ['choice_text' => 'Une couche visible correspond toujours à un changement physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les substances possèdent des propriétés chimiques différentes. Certaines réagissent facilement avec leur environnement alors que d’autres réagissent beaucoup plus lentement.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de chimie',
                'description' => 'Réinvestissez les notions essentielles sur la matière, les mesures, les mélanges, les transformations, la sécurité et le raisonnement scientifique.',
                'questions' => [
                    [
                        'question' => 'Un échantillon a une masse de 45 g et un volume de 15 cm³. Quelle est sa masse volumique ?',
                        'choices' => [
                            ['choice_text' => '0,33 g/cm³', 'is_correct' => false],
                            ['choice_text' => '3 g/cm³', 'is_correct' => true],
                            ['choice_text' => '30 g/cm³', 'is_correct' => false],
                            ['choice_text' => '60 g/cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'Masse volumique = masse ÷ volume = 45 ÷ 15 = 3 g/cm³.'
                    ],
                    [
                        'question' => 'Laquelle de ces associations contient uniquement des transformations physiques ?',
                        'choices' => [
                            ['choice_text' => 'Faire fondre de la glace et découper du papier', 'is_correct' => true],
                            ['choice_text' => 'Brûler du bois et rouiller du fer', 'is_correct' => false],
                            ['choice_text' => 'Cuire un œuf et brûler un carburant', 'is_correct' => false],
                            ['choice_text' => 'Rouiller du fer et faire fondre de la glace', 'is_correct' => false],
                        ],
                        'explanation' => 'Faire fondre et découper modifient l’état ou la forme sans créer de nouvelle substance. La combustion et la rouille sont des transformations chimiques.'
                    ],
                    [
                        'question' => 'On a un mélange de sable, d’eau et de sel dissous. Quelle est la première étape la plus adaptée pour retirer le sable ?',
                        'choices' => [
                            ['choice_text' => 'Filtration', 'is_correct' => true],
                            ['choice_text' => 'Évaporation immédiate de tout le mélange', 'is_correct' => false],
                            ['choice_text' => 'Séparation magnétique', 'is_correct' => false],
                            ['choice_text' => 'Congélation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sable est un solide insoluble que l’on peut retenir avec un filtre. Le sel dissous, lui, passe avec l’eau à travers le filtre.'
                    ],
                    [
                        'question' => 'Un élève écrit seulement « 25 » après avoir mesuré un volume. Que doit-il ajouter ?',
                        'choices' => [
                            ['choice_text' => 'L’unité de volume', 'is_correct' => true],
                            ['choice_text' => 'Une formule chimique', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de molécules', 'is_correct' => false],
                            ['choice_text' => 'Une nouvelle expérience', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut préciser l’unité, par exemple 25 mL. Sans unité, le nombre ne permet pas de comprendre la mesure.'
                    ],
                    [
                        'question' => 'Un solide chauffé fond sans donner naissance à une nouvelle substance. Comment classer cette transformation ?',
                        'choices' => [
                            ['choice_text' => 'Transformation physique', 'is_correct' => true],
                            ['choice_text' => 'Réaction chimique', 'is_correct' => false],
                            ['choice_text' => 'Formation d’un nouvel élément', 'is_correct' => false],
                            ['choice_text' => 'Transformation nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion modifie seulement l’état physique du matériau. Sa composition chimique reste la même.'
                    ],
                    [
                        'question' => 'Un élève compare deux expériences en changeant en même temps la température, la quantité d’eau et la vitesse d’agitation. Pourquoi sera-t-il difficile d’interpréter le résultat ?',
                        'choices' => [
                            ['choice_text' => 'Plusieurs facteurs ont été modifiés simultanément', 'is_correct' => true],
                            ['choice_text' => 'Les mesures ne servent jamais en chimie', 'is_correct' => false],
                            ['choice_text' => 'Une expérience doit obligatoirement modifier toutes les variables', 'is_correct' => false],
                            ['choice_text' => 'Une conclusion ne peut être basée que sur la couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque plusieurs facteurs changent en même temps, il devient difficile de savoir lequel a provoqué la différence observée.'
                    ],
                    [
                        'question' => 'Quelle affirmation relie correctement la masse volumique à une observation du quotidien ?',
                        'choices' => [
                            ['choice_text' => 'Un objet moins dense que le liquide peut flotter dans celui-ci', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique détermine directement la couleur', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique donne toujours la vitesse de fusion', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique et la masse sont exactement la même grandeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet flotte lorsque sa masse volumique est suffisamment faible par rapport à celle du liquide. La masse volumique et la masse sont deux grandeurs différentes.'
                    ],
                    [
                        'question' => 'Un professeur donne à un élève un produit inconnu. L’élève décide immédiatement de le goûter. Quelle est son erreur principale ?',
                        'choices' => [
                            ['choice_text' => 'Il utilise une méthode dangereuse pour recueillir une information', 'is_correct' => true],
                            ['choice_text' => 'Il ne fait pas assez de calculs', 'is_correct' => false],
                            ['choice_text' => 'Il mesure trop précisément', 'is_correct' => false],
                            ['choice_text' => 'Il aurait simplement dû deviner', 'is_correct' => false],
                        ],
                        'explanation' => 'Goûter une substance inconnue au laboratoire est dangereux. L’identification doit se faire avec des méthodes adaptées et sûres.'
                    ],
                    [
                        'question' => 'Une solution contient 2 g de sel dans 100 mL d’eau. Une autre contient 4 g dans 200 mL d’eau. Si on compare la quantité de sel pour 100 mL d’eau, comment sont-elles ?',
                        'choices' => [
                            ['choice_text' => 'Elles ont la même concentration', 'is_correct' => true],
                            ['choice_text' => 'La première est deux fois plus concentrée', 'is_correct' => false],
                            ['choice_text' => 'La seconde est deux fois plus concentrée', 'is_correct' => false],
                            ['choice_text' => 'Il est impossible de comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'La première contient 2 g pour 100 mL. La seconde contient 4 g pour 200 mL, soit également 2 g pour 100 mL. Les concentrations sont donc identiques sur cette base.'
                    ],
                    [
                        'question' => 'Pendant une expérience, un résultat est très différent des autres essais. Quelle réaction montre une bonne démarche scientifique ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier le matériel et la procédure, noter le résultat et refaire l’essai si nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Supprimer immédiatement le résultat', 'is_correct' => false],
                            ['choice_text' => 'Modifier la valeur pour qu’elle soit plus proche des autres', 'is_correct' => false],
                            ['choice_text' => 'Arrêter définitivement toutes les expériences', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur inhabituelle doit être examinée plutôt que supprimée sans réflexion. Vérifier le matériel et refaire l’essai peut aider à déterminer l’origine de l’écart.'
                    ],
                ],
            ],
        ];

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 15, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 15, 'passing_score' => 55],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 60],
            7 => ['duration' => 25, 'passing_score' => 65],
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