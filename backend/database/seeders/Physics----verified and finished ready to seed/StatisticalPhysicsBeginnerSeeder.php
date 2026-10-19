<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class StatisticalPhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'statistical-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la physique statistique',
                'description' => 'Première découverte des concepts de microétat, macroétat, probabilité et moyenne statistique.',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif général de la physique statistique ?',
                        'choices' => [
                            ['choice_text' => 'Étudier uniquement le mouvement des planètes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les lois de la mécanique classique', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la masse d’un objet', 'is_correct' => false],
                            ['choice_text' => 'Relier le comportement microscopique d’un système à ses propriétés macroscopiques', 'is_correct' => true],
                        ],
                        'explanation' => 'La physique statistique relie le comportement collectif des particules aux grandeurs observables comme la température, la pression ou l’énergie.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on un macroétat ?',
                        'choices' => [
                            ['choice_text' => 'La position exacte de chaque particule', 'is_correct' => false],
                            ['choice_text' => 'Un état décrit par des grandeurs macroscopiques', 'is_correct' => true],
                            ['choice_text' => 'Un état qui ne contient aucune information', 'is_correct' => false],
                            ['choice_text' => 'Uniquement l’état quantique d’une particule', 'is_correct' => false],
                        ],
                        'explanation' => 'Un macroétat est décrit par des variables comme la pression, le volume, la température ou l’énergie.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on un microétat ?',
                        'choices' => [
                            ['choice_text' => 'Une valeur moyenne de la température', 'is_correct' => false],
                            ['choice_text' => 'Une pression mesurée dans un récipient', 'is_correct' => false],
                            ['choice_text' => 'Une configuration microscopique précise du système', 'is_correct' => true],
                            ['choice_text' => 'Le volume total du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Un microétat correspond à une description beaucoup plus détaillée du système à l’échelle microscopique.',
                    ],
                    [
                        'question' => 'Pourquoi un même macroétat peut-il correspondre à plusieurs microétats ?',
                        'choices' => [
                            ['choice_text' => 'Parce que plusieurs configurations microscopiques peuvent produire les mêmes grandeurs macroscopiques', 'is_correct' => true],
                            ['choice_text' => 'Parce que les lois de conservation ne s’appliquent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un système n’a jamais de particules', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température est toujours inconnue', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux arrangements microscopiques différents peuvent être compatibles avec les mêmes valeurs macroscopiques.',
                    ],
                    [
                        'question' => 'Dans une approche statistique, que représente une probabilité ?',
                        'choices' => [
                            ['choice_text' => 'Toujours une énergie', 'is_correct' => false],
                            ['choice_text' => 'Toujours une température', 'is_correct' => false],
                            ['choice_text' => 'La mesure de la possibilité relative d’un événement ou d’un état', 'is_correct' => true],
                            ['choice_text' => 'Une quantité qui peut être négative dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Une probabilité quantifie la possibilité qu’un événement ou un état soit observé.',
                    ],
                    [
                        'question' => 'La somme des probabilités de tous les résultats possibles d’une expérience complète vaut :',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => 'Une valeur nécessairement infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les probabilités de tous les résultats mutuellement exclusifs et exhaustifs doivent se normaliser à 1.',
                    ],
                    [
                        'question' => 'Que représente une moyenne statistique ?',
                        'choices' => [
                            ['choice_text' => 'La valeur maximale toujours observée', 'is_correct' => false],
                            ['choice_text' => 'La valeur minimale du système', 'is_correct' => false],
                            ['choice_text' => 'Une grandeur qui ne dépend d’aucune probabilité', 'is_correct' => false],
                            ['choice_text' => 'Une valeur moyenne calculée à partir des différents états possibles et de leurs probabilités', 'is_correct' => true],
                        ],
                        'explanation' => 'La moyenne statistique tient compte des différentes valeurs possibles ainsi que de leurs probabilités respectives.',
                    ],
                    [
                        'question' => 'Quelle grandeur macroscopique est directement liée à l’agitation microscopique d’un système ?',
                        'choices' => [
                            ['choice_text' => 'La couleur du récipient', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'La forme extérieure uniquement', 'is_correct' => false],
                            ['choice_text' => 'La longueur du câble électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La température est liée au niveau d’agitation thermique microscopique du système.',
                    ],
                    [
                        'question' => 'La physique statistique est particulièrement utile pour étudier :',
                        'choices' => [
                            ['choice_text' => 'Les systèmes contenant un très grand nombre de particules', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une seule particule isolée', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les objets astronomiques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les circuits électriques', 'is_correct' => false],
                        ],
                        'explanation' => 'La description statistique devient particulièrement puissante lorsque le nombre de particules est immense.',
                    ],
                    [
                        'question' => 'Quelle idée est centrale en physique statistique ?',
                        'choices' => [
                            ['choice_text' => 'Le comportement collectif peut être décrit par des lois statistiques', 'is_correct' => true],
                            ['choice_text' => 'Chaque particule doit toujours être suivie individuellement', 'is_correct' => false],
                            ['choice_text' => 'Les grandeurs macroscopiques sont toujours aléatoires sans structure', 'is_correct' => false],
                            ['choice_text' => 'Les probabilités ne peuvent pas être utilisées en physique', 'is_correct' => false],
                        ],
                        'explanation' => 'La physique statistique exploite le grand nombre de particules pour obtenir une description collective fiable.',
                    ],
                ],
            ],

            [
                'title' => 'Microétats et macroétats',
                'description' => 'Comprendre plus précisément la relation entre description microscopique et description macroscopique.',
                'questions' => [
                    [
                        'question' => 'Deux systèmes peuvent-ils avoir le même macroétat tout en ayant des microétats différents ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement à température nulle', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Un même macroétat peut être réalisé par de très nombreuses configurations microscopiques.',
                    ],
                    [
                        'question' => 'Pour décrire complètement les positions et vitesses de nombreuses particules classiques, il faut :',
                        'choices' => [
                            ['choice_text' => 'Moins d’informations', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la pression', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la température', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup plus d’informations que pour décrire seulement la température et la pression', 'is_correct' => true],
                        ],
                        'explanation' => 'La description microscopique contient une énorme quantité d’informations détaillées.',
                    ],
                    [
                        'question' => 'Dans un gaz, les positions et vitesses des particules appartiennent plutôt à la description :',
                        'choices' => [
                            ['choice_text' => 'Macroscopique', 'is_correct' => false],
                            ['choice_text' => 'Thermique globale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Microscopique', 'is_correct' => true],
                            ['choice_text' => 'Chimique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les positions et vitesses individuelles sont des informations microscopiques.',
                    ],
                    [
                        'question' => 'La pression d’un gaz est une grandeur :',
                        'choices' => [
                            ['choice_text' => 'Microscopique individuelle', 'is_correct' => false],
                            ['choice_text' => 'Macroscopique', 'is_correct' => true],
                            ['choice_text' => 'Qui décrit la position d’une particule', 'is_correct' => false],
                            ['choice_text' => 'Qui décrit directement une seule collision', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression est une grandeur mesurable à l’échelle macroscopique.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des méthodes statistiques plutôt qu’une description exacte de chaque particule ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un système réel contient souvent un très grand nombre de particules', 'is_correct' => true],
                            ['choice_text' => 'Parce que les particules n’obéissent à aucune loi', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température n’existe pas réellement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la pression ne peut pas être mesurée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de particules est souvent tellement grand qu’une description individuelle serait impraticable.',
                    ],
                    [
                        'question' => 'Dans un modèle statistique, une configuration microscopique particulière peut être appelée :',
                        'choices' => [
                            ['choice_text' => 'Une température', 'is_correct' => false],
                            ['choice_text' => 'Une équation d’état', 'is_correct' => false],
                            ['choice_text' => 'Une constante universelle', 'is_correct' => false],
                            ['choice_text' => 'Un microétat', 'is_correct' => true],
                        ],
                        'explanation' => 'Le microétat représente une réalisation microscopique précise du système.',
                    ],
                    [
                        'question' => 'Un macroétat est généralement caractérisé par un nombre de paramètres :',
                        'choices' => [
                            ['choice_text' => 'Beaucoup plus petit que le nombre de variables microscopiques', 'is_correct' => true],
                            ['choice_text' => 'Toujours égal au nombre de particules', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement infini', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'La description macroscopique résume l’information microscopique avec beaucoup moins de variables.',
                    ],
                    [
                        'question' => 'Quelle grandeur peut servir à caractériser un macroétat d’un gaz ?',
                        'choices' => [
                            ['choice_text' => 'La position de chaque molécule', 'is_correct' => false],
                            ['choice_text' => 'La vitesse instantanée d’une molécule particulière', 'is_correct' => false],
                            ['choice_text' => 'Le volume', 'is_correct' => true],
                            ['choice_text' => 'La trajectoire exacte de chaque particule', 'is_correct' => false],
                        ],
                        'explanation' => 'Le volume est une grandeur macroscopique classique utilisée pour décrire un gaz.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux la relation entre microétat et macroétat ?',
                        'choices' => [
                            ['choice_text' => 'Chaque macroétat possède forcément un seul microétat', 'is_correct' => false],
                            ['choice_text' => 'Un microétat ne contient aucune information', 'is_correct' => false],
                            ['choice_text' => 'Un macroétat peut regrouper de nombreux microétats compatibles', 'is_correct' => true],
                            ['choice_text' => 'Les deux notions sont exactement synonymes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le macroétat constitue une description globale qui peut correspondre à un grand nombre de réalisations microscopiques.',
                    ],
                    [
                        'question' => 'Pourquoi les grandeurs macroscopiques sont-elles souvent très stables malgré l’agitation microscopique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les particules sont totalement immobiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fluctuations individuelles se compensent largement lorsque le nombre de particules est très grand', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il n’existe aucune fluctuation', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température supprime les particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les grands systèmes, les fluctuations relatives des grandeurs macroscopiques deviennent généralement faibles.',
                    ],
                ],
            ],

            [
                'title' => 'Probabilités et distributions',
                'description' => 'Découvrir les distributions de probabilité et leur utilisation en physique statistique.',
                'questions' => [
                    [
                        'question' => 'Une distribution de probabilité indique principalement :',
                        'choices' => [
                            ['choice_text' => 'La masse totale du système uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température d’une seule particule avec certitude', 'is_correct' => false],
                            ['choice_text' => 'Le nombre exact d’atomes sans mesure', 'is_correct' => false],
                            ['choice_text' => 'Comment les probabilités sont réparties entre les différents états ou valeurs possibles', 'is_correct' => true],
                        ],
                        'explanation' => 'Une distribution de probabilité décrit les probabilités associées aux différentes valeurs ou configurations possibles.',
                    ],
                    [
                        'question' => 'Si deux états ont des probabilités égales, cela signifie :',
                        'choices' => [
                            ['choice_text' => 'Ils ont nécessairement la même énergie', 'is_correct' => false],
                            ['choice_text' => 'Ils ont nécessairement la même température', 'is_correct' => false],
                            ['choice_text' => 'Ils sont équiprobables dans le modèle considéré', 'is_correct' => true],
                            ['choice_text' => 'Ils sont physiquement identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une même probabilité signifie seulement qu’ils sont équiprobables dans le contexte statistique étudié.',
                    ],
                    [
                        'question' => 'Que doit faire une distribution de probabilité complète ?',
                        'choices' => [
                            ['choice_text' => 'Avoir nécessairement toutes ses valeurs égales à zéro', 'is_correct' => false],
                            ['choice_text' => 'Être toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Respecter une normalisation appropriée', 'is_correct' => true],
                            ['choice_text' => 'Ignorer tous les états possibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des probabilités discrètes, la somme des probabilités doit être égale à 1.',
                    ],
                    [
                        'question' => 'Quelle valeur une probabilité ne peut-elle pas prendre ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-0,2', 'is_correct' => true],
                            ['choice_text' => '0,5', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Une probabilité est comprise entre 0 et 1, bornes incluses.',
                    ],
                    [
                        'question' => 'Si un événement possède une probabilité égale à 1, il est :',
                        'choices' => [
                            ['choice_text' => 'Impossible', 'is_correct' => false],
                            ['choice_text' => 'Très rare', 'is_correct' => false],
                            ['choice_text' => 'En dehors de toute description statistique', 'is_correct' => false],
                            ['choice_text' => 'Certain dans le modèle considéré', 'is_correct' => true],
                        ],
                        'explanation' => 'Une probabilité égale à 1 correspond à un événement certain dans le modèle considéré.',
                    ],
                    [
                        'question' => 'Si un événement possède une probabilité égale à 0, il est :',
                        'choices' => [
                            ['choice_text' => 'Certain', 'is_correct' => false],
                            ['choice_text' => 'Plus probable que tous les autres', 'is_correct' => false],
                            ['choice_text' => 'Toujours observé expérimentalement', 'is_correct' => false],
                            ['choice_text' => 'Impossible dans le modèle considéré', 'is_correct' => true],
                        ],
                        'explanation' => 'Une probabilité nulle signifie que l’événement est exclu par le modèle.',
                    ],
                    [
                        'question' => 'Pourquoi les probabilités sont-elles importantes en physique statistique ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de relier les différents microétats à leurs contributions statistiques', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent la notion d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent inutile toute mesure expérimentale', 'is_correct' => false],
                            ['choice_text' => 'Elles s’appliquent uniquement aux jeux de hasard', 'is_correct' => false],
                        ],
                        'explanation' => 'Les probabilités permettent de déterminer les grandeurs moyennes et les distributions des états microscopiques.',
                    ],
                    [
                        'question' => 'Une valeur ayant une grande probabilité contribue-t-elle fortement à une moyenne statistique ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle vaut zéro', 'is_correct' => false],
                            ['choice_text' => 'Oui, en général', 'is_correct' => true],
                            ['choice_text' => 'Uniquement pour les gaz parfaits', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une moyenne pondérée, une valeur plus probable reçoit un poids statistique plus important.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on la valeur autour de laquelle une distribution peut être fortement concentrée ?',
                        'choices' => [
                            ['choice_text' => 'Une pression absolue', 'is_correct' => false],
                            ['choice_text' => 'Une valeur la plus probable ou valeur typique selon le contexte', 'is_correct' => true],
                            ['choice_text' => 'Une constante de Planck', 'is_correct' => false],
                            ['choice_text' => 'Une vitesse de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une distribution peut présenter une région où les valeurs sont particulièrement probables.',
                    ],
                    [
                        'question' => 'Dans une expérience répétée beaucoup de fois, la fréquence observée d’un événement tend généralement vers :',
                        'choices' => [
                            ['choice_text' => 'Sa probabilité théorique', 'is_correct' => true],
                            ['choice_text' => 'Zéro dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Une valeur nécessairement supérieure à 1', 'is_correct' => false],
                            ['choice_text' => 'La température du laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des grands nombres explique pourquoi les fréquences observées se rapprochent des probabilités lorsque le nombre d’essais augmente.',
                    ],
                ],
            ],

            [
                'title' => 'Entropie et désordre',
                'description' => 'Introduction à l’entropie statistique et à son lien avec le nombre de microétats accessibles.',
                'questions' => [
                    [
                        'question' => 'Quelle grandeur statistique mesure, entre autres, le nombre de configurations microscopiques accessibles ?',
                        'choices' => [
                            ['choice_text' => 'La masse volumique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique totale', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du son uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’entropie', 'is_correct' => true],
                        ],
                        'explanation' => 'En physique statistique, l’entropie est liée au nombre de microétats compatibles avec un macroétat.',
                    ],
                    [
                        'question' => 'Quelle formule de Boltzmann relie l’entropie S au nombre de microétats Ω ?',
                        'choices' => [
                            ['choice_text' => 'S = k_B ln(Ω)', 'is_correct' => true],
                            ['choice_text' => 'S = Ω/k_B', 'is_correct' => false],
                            ['choice_text' => 'S = k_B/Ω', 'is_correct' => false],
                            ['choice_text' => 'S = Ω²', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule de Boltzmann est S = k_B ln(Ω), lorsque les microétats accessibles sont équiprobables.',
                    ],
                    [
                        'question' => 'Que représente k_B dans la formule de Boltzmann ?',
                        'choices' => [
                            ['choice_text' => 'La constante gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'La constante de Boltzmann', 'is_correct' => true],
                            ['choice_text' => 'La constante des gaz parfaits', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck réduite', 'is_correct' => false],
                        ],
                        'explanation' => 'k_B est la constante de Boltzmann, qui relie les échelles microscopique et thermodynamique.',
                    ],
                    [
                        'question' => 'Si le nombre de microétats accessibles augmente, que devient l’entropie statistique ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente', 'is_correct' => true],
                            ['choice_text' => 'Elle ne peut jamais changer', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme S = k_B ln(Ω), l’entropie augmente avec le nombre de microétats accessibles.',
                    ],
                    [
                        'question' => 'Pour deux macroétats, lequel possède généralement la plus grande entropie si son nombre de microétats est plus élevé ?',
                        'choices' => [
                            ['choice_text' => 'Celui qui possède le moins de microétats', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont nécessairement la même entropie', 'is_correct' => false],
                            ['choice_text' => 'Celui qui possède le plus grand nombre de microétats', 'is_correct' => true],
                            ['choice_text' => 'Aucun, car l’entropie n’est pas liée aux microétats', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation de Boltzmann montre directement que l’entropie croît avec Ω.',
                    ],
                    [
                        'question' => 'Le terme ln dans S = k_B ln(Ω) désigne :',
                        'choices' => [
                            ['choice_text' => 'Le logarithme naturel', 'is_correct' => true],
                            ['choice_text' => 'Une dérivée temporelle', 'is_correct' => false],
                            ['choice_text' => 'Une intégrale', 'is_correct' => false],
                            ['choice_text' => 'Une constante physique', 'is_correct' => false],
                        ],
                        'explanation' => 'ln désigne le logarithme naturel, de base e.',
                    ],
                    [
                        'question' => 'Pourquoi le mot « désordre » peut-il être trompeur lorsqu’on parle d’entropie ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entropie n’existe jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que le désordre et l’entropie sont toujours exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entropie concerne uniquement les solides', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entropie est plus précisément liée au nombre de microétats accessibles qu’à une simple idée visuelle de désordre', 'is_correct' => true],
                        ],
                        'explanation' => 'L’entropie possède une définition précise en thermodynamique et en physique statistique ; le terme « désordre » est seulement une image simplifiée.',
                    ],
                    [
                        'question' => 'Que signifie une grande multiplicité Ω pour un macroétat ?',
                        'choices' => [
                            ['choice_text' => 'Un grand nombre de microétats sont compatibles avec ce macroétat', 'is_correct' => true],
                            ['choice_text' => 'Le système ne possède aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Le système doit être totalement immobile', 'is_correct' => false],
                            ['choice_text' => 'La température est nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La multiplicité compte le nombre de microétats associés à un macroétat donné.',
                    ],
                    [
                        'question' => 'Dans un système isolé, l’évolution spontanée vers des macroétats beaucoup plus nombreux en microétats est associée à une tendance de :',
                        'choices' => [
                            ['choice_text' => 'La masse à disparaître', 'is_correct' => false],
                            ['choice_text' => 'L’entropie à augmenter', 'is_correct' => true],
                            ['choice_text' => 'La charge à s’annuler toujours', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière à diminuer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le deuxième principe relie l’évolution spontanée des systèmes isolés à une tendance à l’augmentation de l’entropie.',
                    ],
                    [
                        'question' => 'Si Ω = 1, quelle est la valeur de l’entropie statistique donnée par S = k_B ln(Ω) ?',
                        'choices' => [
                            ['choice_text' => 'k_B', 'is_correct' => false],
                            ['choice_text' => '1/k_B', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                        ],
                        'explanation' => 'Puisque ln(1) = 0, on obtient S = 0.',
                    ],
                ],
            ],

            [
                'title' => 'Distribution de Boltzmann',
                'description' => 'Découvrir l’idée de distribution de Boltzmann et le rôle de la température et de l’énergie.',
                'questions' => [
                    [
                        'question' => 'La distribution de Boltzmann permet notamment de relier la probabilité d’un état à :',
                        'choices' => [
                            ['choice_text' => 'Sa couleur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa position géographique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa masse totale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Son énergie et à la température', 'is_correct' => true],
                        ],
                        'explanation' => 'La probabilité d’occupation d’un état dépend notamment de son énergie et de la température.',
                    ],
                    [
                        'question' => 'Dans la distribution de Boltzmann, un état d’énergie plus élevée est généralement :',
                        'choices' => [
                            ['choice_text' => 'Toujours plus probable', 'is_correct' => false],
                            ['choice_text' => 'Moins probable à température fixée', 'is_correct' => true],
                            ['choice_text' => 'Toujours occupé', 'is_correct' => false],
                            ['choice_text' => 'Impossible quelle que soit la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une température donnée, le facteur de Boltzmann diminue lorsque l’énergie augmente.',
                    ],
                    [
                        'question' => 'Quel facteur apparaît sous une forme typique dans la distribution de Boltzmann ?',
                        'choices' => [
                            ['choice_text' => 'exp(E k_B T)', 'is_correct' => false],
                            ['choice_text' => 'exp(-E/(k_B T))', 'is_correct' => true],
                            ['choice_text' => 'E + k_B + T', 'is_correct' => false],
                            ['choice_text' => 'E/(k_B + T)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur de Boltzmann prend la forme exponentielle exp(-E/(k_B T)).',
                    ],
                    [
                        'question' => 'Que se passe-t-il pour le facteur exp(-E/(k_B T)) lorsque E augmente à température fixée ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Il devient nécessairement égal à 1', 'is_correct' => false],
                            ['choice_text' => 'Il devient toujours négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Une énergie plus grande rend l’exposant plus négatif, donc le facteur devient plus petit.',
                    ],
                    [
                        'question' => 'À température plus élevée, les états de haute énergie deviennent généralement :',
                        'choices' => [
                            ['choice_text' => 'Plus accessibles statistiquement', 'is_correct' => true],
                            ['choice_text' => 'Absolument impossibles', 'is_correct' => false],
                            ['choice_text' => 'Indépendants de leur énergie', 'is_correct' => false],
                            ['choice_text' => 'Toujours moins fréquents', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température plus élevée réduit la pénalisation statistique des états de haute énergie.',
                    ],
                    [
                        'question' => 'Dans exp(-E/(k_B T)), que se passe-t-il lorsque T augmente à E fixé ?',
                        'choices' => [
                            ['choice_text' => 'L’exposant devient toujours nul', 'is_correct' => false],
                            ['choice_text' => 'L’énergie E disparaît', 'is_correct' => false],
                            ['choice_text' => 'La valeur de l’exposant devient moins négative', 'is_correct' => true],
                            ['choice_text' => 'k_B change avec T', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque T augmente, le rapport E/(k_B T) diminue en valeur absolue.',
                    ],
                    [
                        'question' => 'À très basse température, le système tend davantage à occuper :',
                        'choices' => [
                            ['choice_text' => 'Les états de plus haute énergie sans exception', 'is_correct' => false],
                            ['choice_text' => 'Tous les états avec exactement la même probabilité', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les états impossibles', 'is_correct' => false],
                            ['choice_text' => 'Les états de basse énergie', 'is_correct' => true],
                        ],
                        'explanation' => 'Lorsque la température est faible, les états de haute énergie sont fortement défavorisés statistiquement.',
                    ],
                    [
                        'question' => 'Pourquoi la température influence-t-elle la répartition des particules entre différents états ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle change nécessairement le nombre de particules', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle modifie le poids statistique relatif des états d’énergie différente', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle supprime toutes les interactions', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle rend les probabilités négatives', 'is_correct' => false],
                        ],
                        'explanation' => 'La température contrôle la manière dont les états d’énergie sont statistiquement peuplés.',
                    ],
                    [
                        'question' => 'Quelle constante relie l’énergie microscopique à la température dans la distribution de Boltzmann ?',
                        'choices' => [
                            ['choice_text' => 'La constante de Boltzmann k_B', 'is_correct' => true],
                            ['choice_text' => 'La constante gravitationnelle G', 'is_correct' => false],
                            ['choice_text' => 'La constante électrique ε_0', 'is_correct' => false],
                            ['choice_text' => 'La constante des ressorts k mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante de Boltzmann intervient dans le facteur E/(k_B T).',
                    ],
                    [
                        'question' => 'Le facteur de Boltzmann est toujours :',
                        'choices' => [
                            ['choice_text' => 'Négatif', 'is_correct' => false],
                            ['choice_text' => 'Supérieur à 1', 'is_correct' => false],
                            ['choice_text' => 'Positif', 'is_correct' => true],
                            ['choice_text' => 'Égal à zéro pour toute énergie finie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une exponentielle réelle exp(x) est toujours positive.',
                    ],
                ],
            ],

            [
                'title' => 'Température et énergie microscopique',
                'description' => 'Relier la température au mouvement microscopique et à l’énergie moyenne des particules.',
                'questions' => [
                    [
                        'question' => 'À l’échelle microscopique, la température est liée notamment à :',
                        'choices' => [
                            ['choice_text' => 'La couleur du corps', 'is_correct' => false],
                            ['choice_text' => 'La taille géométrique du récipient seulement', 'is_correct' => false],
                            ['choice_text' => 'La masse du récipient uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie d’agitation thermique moyenne des particules', 'is_correct' => true],
                        ],
                        'explanation' => 'La température caractérise le niveau moyen d’agitation thermique du système.',
                    ],
                    [
                        'question' => 'Dans un gaz parfait monoatomique classique, l’énergie cinétique de translation moyenne par particule est proportionnelle à :',
                        'choices' => [
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse du récipient', 'is_correct' => false],
                            ['choice_text' => 'La couleur du gaz', 'is_correct' => false],
                            ['choice_text' => 'La température absolue', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans le modèle classique, l’énergie cinétique de translation moyenne est proportionnelle à T.',
                    ],
                    [
                        'question' => 'Quelle échelle de température est directement utilisée dans les lois microscopiques de la physique statistique ?',
                        'choices' => [
                            ['choice_text' => 'L’échelle Celsius uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’échelle Fahrenheit uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’échelle Kelvin', 'is_correct' => true],
                            ['choice_text' => 'Une échelle basée sur la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les relations statistiques utilisent la température absolue exprimée en kelvins.',
                    ],
                    [
                        'question' => 'Que signifie une température plus élevée pour un gaz classique dans une interprétation microscopique simple ?',
                        'choices' => [
                            ['choice_text' => 'Des particules complètement immobiles', 'is_correct' => false],
                            ['choice_text' => 'Une masse totale nécessairement plus grande', 'is_correct' => false],
                            ['choice_text' => 'Une agitation thermique moyenne plus importante', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale de collisions', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température plus élevée correspond à une agitation thermique moyenne plus importante.',
                    ],
                    [
                        'question' => 'Dans un gaz, pourquoi les particules exercent-elles une pression sur les parois ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les particules sont immobiles', 'is_correct' => false],
                            ['choice_text' => 'À cause des collisions des particules avec les parois', 'is_correct' => true],
                            ['choice_text' => 'Parce que la gravité agit uniquement sur les parois', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression macroscopique résulte du transfert de quantité de mouvement lors des collisions avec les parois.',
                    ],
                    [
                        'question' => 'À volume constant, augmenter la température d’un gaz parfait tend généralement à faire :',
                        'choices' => [
                            ['choice_text' => 'Diminuer nécessairement la pression jusqu’à zéro', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la pression', 'is_correct' => true],
                            ['choice_text' => 'Disparaître les particules', 'is_correct' => false],
                            ['choice_text' => 'Rendre la masse volumique infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait à volume et quantité de matière constants, p est proportionnelle à T.',
                    ],
                    [
                        'question' => 'Quelle relation d’état classique décrit un gaz parfait ?',
                        'choices' => [
                            ['choice_text' => 'pV = nRT', 'is_correct' => true],
                            ['choice_text' => 'pV = n/T', 'is_correct' => false],
                            ['choice_text' => 'p + V = nRT', 'is_correct' => false],
                            ['choice_text' => 'p/V = RT/n uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation d’état du gaz parfait est pV = nRT.',
                    ],
                    [
                        'question' => 'Dans pV = nRT, que représente n ?',
                        'choices' => [
                            ['choice_text' => 'La masse volumique', 'is_correct' => false],
                            ['choice_text' => 'La quantité de matière en moles', 'is_correct' => true],
                            ['choice_text' => 'La viscosité', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de dimensions spatiales', 'is_correct' => false],
                        ],
                        'explanation' => 'n désigne la quantité de matière exprimée en moles.',
                    ],
                    [
                        'question' => 'Dans pV = nRT, quelle grandeur doit être exprimée en kelvins pour une utilisation cohérente de R ?',
                        'choices' => [
                            ['choice_text' => 'La température T', 'is_correct' => true],
                            ['choice_text' => 'La pression p', 'is_correct' => false],
                            ['choice_text' => 'Le volume V', 'is_correct' => false],
                            ['choice_text' => 'La quantité n', 'is_correct' => false],
                        ],
                        'explanation' => 'La température absolue T doit être exprimée en kelvins dans cette relation.',
                    ],
                    [
                        'question' => 'Quelle idée relie directement la physique statistique à la théorie cinétique des gaz ?',
                        'choices' => [
                            ['choice_text' => 'Un gaz ne contient qu’une seule particule', 'is_correct' => false],
                            ['choice_text' => 'La pression est indépendante des collisions', 'is_correct' => false],
                            ['choice_text' => 'Les propriétés macroscopiques du gaz résultent du mouvement collectif de nombreuses particules', 'is_correct' => true],
                            ['choice_text' => 'La température ne dépend jamais du mouvement microscopique', 'is_correct' => false],
                        ],
                        'explanation' => 'La théorie cinétique interprète les grandeurs macroscopiques comme des conséquences du mouvement microscopique.',
                    ],
                ],
            ],

            [
                'title' => 'Ensembles statistiques',
                'description' => 'Découvrir les principaux ensembles statistiques et leur rôle dans la description des systèmes physiques.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un ensemble statistique en physique statistique ?',
                        'choices' => [
                            ['choice_text' => 'Un groupe de laboratoires différents', 'is_correct' => false],
                            ['choice_text' => 'Une collection de thermomètres', 'is_correct' => false],
                            ['choice_text' => 'Une liste de constantes physiques', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble conceptuel de nombreuses copies du système considérées dans des états possibles', 'is_correct' => true],
                        ],
                        'explanation' => 'Un ensemble statistique permet d’associer des probabilités aux différents états microscopiques compatibles avec les contraintes du système.',
                    ],
                    [
                        'question' => 'Quel ensemble correspond à un système isolé avec énergie, volume et nombre de particules fixés ?',
                        'choices' => [
                            ['choice_text' => 'L’ensemble canonique', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble microcanonique', 'is_correct' => true],
                            ['choice_text' => 'L’ensemble grand canonique', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ensemble microcanonique décrit un système isolé avec E, V et N constants.',
                    ],
                    [
                        'question' => 'Quel ensemble est adapté à un système en contact thermique avec un réservoir à température fixée ?',
                        'choices' => [
                            ['choice_text' => 'L’ensemble microcanonique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble grand canonique seulement', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble mécanique', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble canonique', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ensemble canonique est utilisé lorsque la température est imposée et que le système peut échanger de l’énergie avec un réservoir.',
                    ],
                    [
                        'question' => 'Dans l’ensemble canonique, quelle grandeur est généralement fixée ?',
                        'choices' => [
                            ['choice_text' => 'La température T', 'is_correct' => true],
                            ['choice_text' => 'L’énergie exacte E dans chaque microétat', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique extérieure uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de chaque particule', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ensemble canonique est caractérisé par T, V et N fixés.',
                    ],
                    [
                        'question' => 'Quel ensemble permet généralement l’échange à la fois d’énergie et de particules avec un réservoir ?',
                        'choices' => [
                            ['choice_text' => 'L’ensemble microcanonique', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble canonique fermé', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble grand canonique', 'is_correct' => true],
                            ['choice_text' => 'L’ensemble inertiel', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’ensemble grand canonique, l’énergie et le nombre de particules peuvent échanger avec le réservoir.',
                    ],
                    [
                        'question' => 'Dans un système isolé idéal, l’énergie totale est :',
                        'choices' => [
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours infinie', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement négative', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => true],
                        ],
                        'explanation' => 'Par définition, un système isolé n’échange pas d’énergie avec son environnement.',
                    ],
                    [
                        'question' => 'Dans un ensemble canonique, le système peut-il échanger de l’énergie avec son environnement ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement de la masse', 'is_correct' => false],
                            ['choice_text' => 'Oui, avec un réservoir thermique', 'is_correct' => true],
                            ['choice_text' => 'Seulement des charges électriques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système canonique échange de l’énergie avec un réservoir tout en conservant une température imposée à l’équilibre.',
                    ],
                    [
                        'question' => 'Dans un ensemble statistique, pourquoi considère-t-on plusieurs réalisations possibles du système ?',
                        'choices' => [
                            ['choice_text' => 'Pour calculer les probabilités et les valeurs moyennes des grandeurs physiques', 'is_correct' => true],
                            ['choice_text' => 'Pour changer les lois de conservation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les fluctuations', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les énergies nulles', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ensemble statistique fournit le cadre permettant de calculer les grandeurs moyennes et les distributions.',
                    ],
                    [
                        'question' => 'Quel ensemble est le plus directement associé à la maximisation de l’entropie sous les contraintes E, V et N fixées ?',
                        'choices' => [
                            ['choice_text' => 'L’ensemble canonique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble grand canonique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble microcanonique', 'is_correct' => true],
                            ['choice_text' => 'Aucun ensemble statistique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cadre microcanonique correspond au système isolé dont E, V et N sont fixés.',
                    ],
                    [
                        'question' => 'Pourquoi existe-t-il plusieurs ensembles statistiques ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les lois de la physique changent chaque jour', 'is_correct' => false],
                            ['choice_text' => 'Parce que les contraintes physiques imposées au système peuvent être différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque matière nécessite toujours un ensemble différent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les probabilités sont incompatibles entre elles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix de l’ensemble dépend de ce que le système peut échanger avec son environnement et des variables fixées.',
                    ],
                ],
            ],

            [
                'title' => 'Fluctuations et moyennes statistiques',
                'description' => 'Comprendre la notion de fluctuation, de moyenne et de stabilité macroscopique.',
                'questions' => [
                    [
                        'question' => 'Qu’appelle-t-on une fluctuation statistique ?',
                        'choices' => [
                            ['choice_text' => 'Une constante physique universelle', 'is_correct' => false],
                            ['choice_text' => 'Une variation autour d’une valeur moyenne', 'is_correct' => true],
                            ['choice_text' => 'Une énergie toujours croissante', 'is_correct' => false],
                            ['choice_text' => 'Une température toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grandeur microscopique ou macroscopique peut fluctuer autour de sa valeur moyenne.',
                    ],
                    [
                        'question' => 'Dans un système contenant énormément de particules, les fluctuations relatives des grandeurs macroscopiques sont généralement :',
                        'choices' => [
                            ['choice_text' => 'Faibles', 'is_correct' => true],
                            ['choice_text' => 'Toujours énormes', 'is_correct' => false],
                            ['choice_text' => 'Toujours égales à 100 %', 'is_correct' => false],
                            ['choice_text' => 'Toujours inexistantes à l’échelle microscopique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fluctuations relatives deviennent généralement faibles lorsque le nombre de particules augmente fortement.',
                    ],
                    [
                        'question' => 'Pourquoi mesure-t-on souvent une température presque constante dans une grande quantité de gaz ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les particules sont immobiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’énergie cinétique est nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fluctuations microscopiques se moyennent sur un très grand nombre de particules', 'is_correct' => true],
                            ['choice_text' => 'Parce que la température ne dépend jamais du mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'La stabilité des grandeurs macroscopiques résulte en partie de l’effet de moyenne sur un très grand nombre de particules.',
                    ],
                    [
                        'question' => 'Une moyenne statistique est-elle forcément égale à une valeur réellement observée à chaque instant ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les gaz', 'is_correct' => false],
                            ['choice_text' => 'Seulement à température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La moyenne est une valeur représentative ; une mesure instantanée peut s’en écarter à cause des fluctuations.',
                    ],
                    [
                        'question' => 'Quelle notion permet de mesurer l’importance des variations autour d’une moyenne ?',
                        'choices' => [
                            ['choice_text' => 'La pression atmosphérique seulement', 'is_correct' => false],
                            ['choice_text' => 'La masse totale', 'is_correct' => false],
                            ['choice_text' => 'La charge élémentaire', 'is_correct' => false],
                            ['choice_text' => 'La variance ou l’écart-type', 'is_correct' => true],
                        ],
                        'explanation' => 'La variance et l’écart-type quantifient la dispersion autour de la moyenne.',
                    ],
                    [
                        'question' => 'Si une grandeur varie très peu autour de sa moyenne, sa dispersion est :',
                        'choices' => [
                            ['choice_text' => 'Nécessairement infinie', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Faible', 'is_correct' => true],
                            ['choice_text' => 'Égale à la moyenne elle-même', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faible dispersion signifie que les valeurs sont regroupées près de la moyenne.',
                    ],
                    [
                        'question' => 'Pour une grande population statistique, augmenter le nombre de particules tend généralement à :',
                        'choices' => [
                            ['choice_text' => 'Augmenter toujours les fluctuations relatives', 'is_correct' => false],
                            ['choice_text' => 'Réduire les fluctuations relatives', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute énergie', 'is_correct' => false],
                            ['choice_text' => 'Rendre la température négative automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet d’ensemble réduit les fluctuations relatives lorsque le nombre de particules devient très grand.',
                    ],
                    [
                        'question' => 'Quelle grandeur peut être calculée comme une moyenne des énergies microscopiques pondérées par leurs probabilités ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie moyenne', 'is_correct' => true],
                            ['choice_text' => 'La couleur moyenne du récipient', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique du vide', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière locale', 'is_correct' => false],
                        ],
                        'explanation' => 'La moyenne statistique de l’énergie donne l’énergie moyenne du système selon le modèle considéré.',
                    ],
                    [
                        'question' => 'Une grandeur macroscopique très stable peut-elle provenir de particules dont les mouvements sont très irréguliers ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide parfait', 'is_correct' => false],
                            ['choice_text' => 'Seulement à température nulle', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                        ],
                        'explanation' => 'L’agitation microscopique peut être très importante alors que les moyennes macroscopiques restent très stables.',
                    ],
                    [
                        'question' => 'Pourquoi les méthodes statistiques sont-elles particulièrement efficaces pour les systèmes macroscopiques ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les particules cessent de bouger', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les probabilités deviennent nulles', 'is_correct' => false],
                            ['choice_text' => 'Parce que la mécanique n’a plus aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un très grand nombre de particules permet d’obtenir des moyennes et des régularités très robustes', 'is_correct' => true],
                        ],
                        'explanation' => 'Le grand nombre de particules permet de faire émerger des comportements macroscopiques très réguliers à partir du comportement microscopique.',
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
                    'passing_score' => 50,
                    'total_marks' => 10,
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