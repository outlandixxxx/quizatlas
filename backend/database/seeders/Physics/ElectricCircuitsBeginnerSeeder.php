<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ElectricCircuitsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'electric-circuits')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases des circuits électriques',
                'description' => 'Découvrir les éléments essentiels d\'un circuit électrique et comprendre leur rôle.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'un circuit électrique fermé ?',
                        'choices' => [
                            ['choice_text' => 'Un circuit dans lequel le courant peut circuler sans interruption', 'is_correct' => true],
                            ['choice_text' => 'Un circuit qui ne contient aucune source', 'is_correct' => false],
                            ['choice_text' => 'Un circuit dont tous les composants sont éteints', 'is_correct' => false],
                            ['choice_text' => 'Un circuit qui contient uniquement des fils', 'is_correct' => false],
                        ],
                        'explanation' => 'Un circuit fermé forme un chemin continu permettant la circulation du courant électrique.',
                    ],
                    [
                        'question' => 'Quel élément fournit généralement l\'énergie électrique à un circuit simple ?',
                        'choices' => [
                            ['choice_text' => 'Une source électrique comme une pile', 'is_correct' => true],
                            ['choice_text' => 'Un interrupteur ouvert', 'is_correct' => false],
                            ['choice_text' => 'Un fil idéal sans source', 'is_correct' => false],
                            ['choice_text' => 'Une résistance seule', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pile, une batterie ou une alimentation fournit de l\'énergie au circuit.',
                    ],
                    [
                        'question' => 'Quel composant permet d\'ouvrir ou de fermer volontairement un circuit ?',
                        'choices' => [
                            ['choice_text' => 'L\'interrupteur', 'is_correct' => true],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'Le voltmètre', 'is_correct' => false],
                            ['choice_text' => 'La lampe uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'interrupteur contrôle la continuité électrique du circuit.',
                    ],
                    [
                        'question' => 'Dans un circuit simple, le rôle d\'un fil conducteur est principalement de :',
                        'choices' => [
                            ['choice_text' => 'Relier les composants et permettre la circulation du courant', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement une tension', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la température', 'is_correct' => false],
                            ['choice_text' => 'Stocker toute l\'énergie du circuit', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fils conducteurs assurent les connexions électriques entre les différents éléments.',
                    ],
                    [
                        'question' => 'Que se passe-t-il idéalement lorsqu\'un interrupteur est ouvert ?',
                        'choices' => [
                            ['choice_text' => 'Le circuit est interrompu', 'is_correct' => true],
                            ['choice_text' => 'Le courant augmente forcément', 'is_correct' => false],
                            ['choice_text' => 'La tension devient automatiquement nulle partout', 'is_correct' => false],
                            ['choice_text' => 'La résistance disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Un interrupteur ouvert rompt le chemin du courant.',
                    ],
                    [
                        'question' => 'Le courant électrique correspond à :',
                        'choices' => [
                            ['choice_text' => 'Un déplacement ordonné de charges électriques', 'is_correct' => true],
                            ['choice_text' => 'Une quantité de matière', 'is_correct' => false],
                            ['choice_text' => 'Une température électrique', 'is_correct' => false],
                            ['choice_text' => 'Une longueur de fil', 'is_correct' => false],
                        ],
                        'explanation' => 'Le courant mesure le mouvement ordonné des charges électriques.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI du courant électrique ?',
                        'choices' => [
                            ['choice_text' => 'L\'ampère', 'is_correct' => true],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'L\'ohm', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ampère, noté A, est l\'unité SI de l\'intensité du courant.',
                    ],
                    [
                        'question' => 'Quelle grandeur mesure la différence de potentiel entre deux points ?',
                        'choices' => [
                            ['choice_text' => 'La tension électrique', 'is_correct' => true],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'Le courant', 'is_correct' => false],
                            ['choice_text' => 'La puissance uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension électrique correspond à une différence de potentiel entre deux points.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité de la tension électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le volt', 'is_correct' => true],
                            ['choice_text' => 'L\'ampère', 'is_correct' => false],
                            ['choice_text' => 'L\'ohm', 'is_correct' => false],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension électrique se mesure en volts, symbole V.',
                    ],
                    [
                        'question' => 'Quel composant transforme souvent l\'énergie électrique en lumière et en chaleur dans un circuit simple ?',
                        'choices' => [
                            ['choice_text' => 'Une lampe', 'is_correct' => true],
                            ['choice_text' => 'Un interrupteur ouvert', 'is_correct' => false],
                            ['choice_text' => 'Un fil idéal', 'is_correct' => false],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lampe consomme de l\'énergie électrique et la convertit notamment en lumière et en chaleur.',
                    ],
                ],
            ],

            [
                'title' => 'Courant, tension et résistance',
                'description' => 'Comprendre les trois grandeurs fondamentales utilisées pour décrire un circuit électrique simple.',
                'questions' => [
                    [
                        'question' => 'Quelle grandeur électrique s\'exprime en ohms ?',
                        'choices' => [
                            ['choice_text' => 'La résistance', 'is_correct' => true],
                            ['choice_text' => 'La tension', 'is_correct' => false],
                            ['choice_text' => 'Le courant', 'is_correct' => false],
                            ['choice_text' => 'La puissance', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ohm, symbole Ω, est l\'unité SI de la résistance électrique.',
                    ],
                    [
                        'question' => 'Que représente la résistance électrique d\'un composant ?',
                        'choices' => [
                            ['choice_text' => 'Sa tendance à s\'opposer à la circulation du courant', 'is_correct' => true],
                            ['choice_text' => 'La quantité de charge contenue dans la pile', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du courant uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résistance limite le courant pour une tension donnée.',
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement dans un conducteur lorsque la résistance augmente, à tension constante ?',
                        'choices' => [
                            ['choice_text' => 'Le courant diminue', 'is_correct' => true],
                            ['choice_text' => 'Le courant augmente', 'is_correct' => false],
                            ['choice_text' => 'Le courant devient nécessairement infini', 'is_correct' => false],
                            ['choice_text' => 'La tension double automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi d\'Ohm donne I = U/R : à tension constante, une résistance plus grande produit un courant plus faible.',
                    ],
                    [
                        'question' => 'À quoi sert principalement une résistance dans un circuit ?',
                        'choices' => [
                            ['choice_text' => 'À limiter ou contrôler le courant', 'is_correct' => true],
                            ['choice_text' => 'À créer de l\'énergie gratuitement', 'is_correct' => false],
                            ['choice_text' => 'À supprimer toute tension', 'is_correct' => false],
                            ['choice_text' => 'À transformer le courant en masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résistance est utilisée pour contrôler le courant et provoquer une chute de tension.',
                    ],
                    [
                        'question' => 'Quel symbole représente généralement le courant électrique ?',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => true],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => 'P', 'is_correct' => false],
                            ['choice_text' => 'E uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'intensité du courant est généralement notée I.',
                    ],
                    [
                        'question' => 'Quel symbole représente couramment la tension électrique ?',
                        'choices' => [
                            ['choice_text' => 'U', 'is_correct' => true],
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => 'm', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la notation usuelle francophone, la tension est souvent représentée par U.',
                    ],
                    [
                        'question' => 'Quel symbole représente généralement la résistance ?',
                        'choices' => [
                            ['choice_text' => 'R', 'is_correct' => true],
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'U', 'is_correct' => false],
                            ['choice_text' => 'T', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance électrique est généralement notée R.',
                    ],
                    [
                        'question' => 'Une pile de 9 V fournit-elle une tension plus grande qu\'une pile de 1,5 V ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elles ont la même tension', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque le courant est nul', 'is_correct' => false],
                            ['choice_text' => 'On ne peut jamais comparer des tensions', 'is_correct' => false],
                        ],
                        'explanation' => '9 V représente une différence de potentiel plus grande que 1,5 V.',
                    ],
                    [
                        'question' => 'Si aucun courant ne circule dans une résistance idéale, quelle est la chute de tension à ses bornes selon U = RI ?',
                        'choices' => [
                            ['choice_text' => 'Elle est nulle', 'is_correct' => true],
                            ['choice_text' => 'Elle est infinie', 'is_correct' => false],
                            ['choice_text' => 'Elle vaut toujours 1 V', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec I = 0, la relation U = RI donne U = 0 pour une résistance finie.',
                    ],
                    [
                        'question' => 'Dans un circuit simple, la tension est-elle une grandeur identique au courant ?',
                        'choices' => [
                            ['choice_text' => 'Non, ce sont deux grandeurs physiques différentes', 'is_correct' => true],
                            ['choice_text' => 'Oui, elles ont la même unité', 'is_correct' => false],
                            ['choice_text' => 'Oui, elles représentent exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les circuits en série', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension et le courant sont liés mais représentent des grandeurs différentes et possèdent des unités différentes.',
                    ],
                ],
            ],

            [
                'title' => 'Loi d\'Ohm',
                'description' => 'Appliquer la loi d\'Ohm pour calculer la tension, le courant et la résistance dans des circuits simples.',
                'questions' => [
                    [
                        'question' => 'Quelle expression correspond à la loi d\'Ohm pour une résistance ?',
                        'choices' => [
                            ['choice_text' => 'U = RI', 'is_correct' => true],
                            ['choice_text' => 'U = R + I', 'is_correct' => false],
                            ['choice_text' => 'U = R/I', 'is_correct' => false],
                            ['choice_text' => 'U = I/R', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un conducteur ohmique, la loi d\'Ohm s\'écrit U = RI.',
                    ],
                    [
                        'question' => 'Une résistance de 10 Ω est traversée par un courant de 2 A. Quelle est la tension à ses bornes ?',
                        'choices' => [
                            ['choice_text' => '20 V', 'is_correct' => true],
                            ['choice_text' => '5 V', 'is_correct' => false],
                            ['choice_text' => '12 V', 'is_correct' => false],
                            ['choice_text' => '0,2 V', 'is_correct' => false],
                        ],
                        'explanation' => 'U = RI = 10 × 2 = 20 V.',
                    ],
                    [
                        'question' => 'Une résistance de 4 Ω est soumise à une tension de 12 V. Quel courant la traverse ?',
                        'choices' => [
                            ['choice_text' => '3 A', 'is_correct' => true],
                            ['choice_text' => '48 A', 'is_correct' => false],
                            ['choice_text' => '16 A', 'is_correct' => false],
                            ['choice_text' => '0,33 A', 'is_correct' => false],
                        ],
                        'explanation' => 'I = U/R = 12/4 = 3 A.',
                    ],
                    [
                        'question' => 'Une tension de 24 V produit un courant de 2 A dans une résistance. Quelle est sa valeur ?',
                        'choices' => [
                            ['choice_text' => '12 Ω', 'is_correct' => true],
                            ['choice_text' => '48 Ω', 'is_correct' => false],
                            ['choice_text' => '22 Ω', 'is_correct' => false],
                            ['choice_text' => '0,083 Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'R = U/I = 24/2 = 12 Ω.',
                    ],
                    [
                        'question' => 'Si la tension appliquée à une résistance double et que R reste constante, le courant :',
                        'choices' => [
                            ['choice_text' => 'Double', 'is_correct' => true],
                            ['choice_text' => 'Est divisé par deux', 'is_correct' => false],
                            ['choice_text' => 'Reste forcément identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec I = U/R et R constante, le courant varie dans la même proportion que la tension.',
                    ],
                    [
                        'question' => 'Si la résistance double à tension constante, le courant :',
                        'choices' => [
                            ['choice_text' => 'Est divisé par deux', 'is_correct' => true],
                            ['choice_text' => 'Double', 'is_correct' => false],
                            ['choice_text' => 'Devient quatre fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Reste inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'I = U/R : à tension constante, doubler R divise le courant par deux.',
                    ],
                    [
                        'question' => 'Quelle unité correspond au produit Ω·A ?',
                        'choices' => [
                            ['choice_text' => 'Le volt', 'is_correct' => true],
                            ['choice_text' => 'L\'ampère', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque U = RI, Ω·A est équivalent à V.',
                    ],
                    [
                        'question' => 'Une résistance de 5 Ω traversée par 0,4 A a une tension de :',
                        'choices' => [
                            ['choice_text' => '2 V', 'is_correct' => true],
                            ['choice_text' => '12,5 V', 'is_correct' => false],
                            ['choice_text' => '5,4 V', 'is_correct' => false],
                            ['choice_text' => '0,08 V', 'is_correct' => false],
                        ],
                        'explanation' => 'U = RI = 5 × 0,4 = 2 V.',
                    ],
                    [
                        'question' => 'Une résistance de 20 Ω est parcourue par un courant de 0,5 A. Quelle est sa tension ?',
                        'choices' => [
                            ['choice_text' => '10 V', 'is_correct' => true],
                            ['choice_text' => '40 V', 'is_correct' => false],
                            ['choice_text' => '20,5 V', 'is_correct' => false],
                            ['choice_text' => '0,025 V', 'is_correct' => false],
                        ],
                        'explanation' => 'U = 20 × 0,5 = 10 V.',
                    ],
                    [
                        'question' => 'Une résistance de 100 Ω est soumise à 10 V. Le courant vaut :',
                        'choices' => [
                            ['choice_text' => '0,1 A', 'is_correct' => true],
                            ['choice_text' => '10 A', 'is_correct' => false],
                            ['choice_text' => '100 A', 'is_correct' => false],
                            ['choice_text' => '1 000 A', 'is_correct' => false],
                        ],
                        'explanation' => 'I = U/R = 10/100 = 0,1 A.',
                    ],
                ],
            ],

            [
                'title' => 'Circuits en série',
                'description' => 'Comprendre le comportement du courant et de la tension dans les montages en série.',
                'questions' => [
                    [
                        'question' => 'Dans un circuit en série, le courant est-il le même dans tous les composants traversés successivement ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il est toujours différent', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les lampes', 'is_correct' => false],
                            ['choice_text' => 'Seulement si la tension est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un circuit série sans dérivation, le même courant traverse successivement tous les composants.',
                    ],
                    [
                        'question' => 'Comment obtient-on la résistance équivalente de plusieurs résistances en série ?',
                        'choices' => [
                            ['choice_text' => 'En les additionnant', 'is_correct' => true],
                            ['choice_text' => 'En prenant uniquement la plus petite', 'is_correct' => false],
                            ['choice_text' => 'En les multipliant toujours', 'is_correct' => false],
                            ['choice_text' => 'En divisant la plus grande par la plus petite', 'is_correct' => false],
                        ],
                        'explanation' => 'En série, R_eq = R₁ + R₂ + ...',
                    ],
                    [
                        'question' => 'Deux résistances de 10 Ω et 20 Ω sont montées en série. Leur résistance équivalente vaut :',
                        'choices' => [
                            ['choice_text' => '30 Ω', 'is_correct' => true],
                            ['choice_text' => '10 Ω', 'is_correct' => false],
                            ['choice_text' => '20 Ω', 'is_correct' => false],
                            ['choice_text' => '200 Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'R_eq = 10 + 20 = 30 Ω.',
                    ],
                    [
                        'question' => 'Dans un montage en série, la tension totale du générateur correspond généralement :',
                        'choices' => [
                            ['choice_text' => 'À la somme des chutes de tension des composants', 'is_correct' => true],
                            ['choice_text' => 'À la plus petite tension uniquement', 'is_correct' => false],
                            ['choice_text' => 'À zéro dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Au produit des résistances', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des mailles donne que la tension fournie est égale à la somme des chutes de tension.',
                    ],
                    [
                        'question' => 'Dans un circuit série comportant deux résistances identiques, la tension se répartit :',
                        'choices' => [
                            ['choice_text' => 'Également entre les deux résistances', 'is_correct' => true],
                            ['choice_text' => 'Entièrement sur la première', 'is_correct' => false],
                            ['choice_text' => 'Entièrement sur la seconde', 'is_correct' => false],
                            ['choice_text' => 'Nulle sur les deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec deux résistances identiques traversées par le même courant, leurs chutes de tension sont égales.',
                    ],
                    [
                        'question' => 'Si une lampe dans un circuit série est retirée et laisse une coupure, que se passe-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Le courant cesse de circuler dans tout le circuit', 'is_correct' => true],
                            ['choice_text' => 'Les autres lampes deviennent toujours plus lumineuses', 'is_correct' => false],
                            ['choice_text' => 'Le courant augmente automatiquement', 'is_correct' => false],
                            ['choice_text' => 'La pile devient idéale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une coupure dans un montage série interromp le chemin du courant pour l\'ensemble de la boucle.',
                    ],
                    [
                        'question' => 'Trois résistances de 5 Ω sont montées en série. La résistance équivalente vaut :',
                        'choices' => [
                            ['choice_text' => '15 Ω', 'is_correct' => true],
                            ['choice_text' => '10 Ω', 'is_correct' => false],
                            ['choice_text' => '5 Ω', 'is_correct' => false],
                            ['choice_text' => '75 Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'R_eq = 5 + 5 + 5 = 15 Ω.',
                    ],
                    [
                        'question' => 'Si l\'on ajoute une résistance en série à un circuit existant, la résistance totale :',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Reste forcément identique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résistance supplémentaire s\'ajoute à la résistance équivalente d\'un montage série.',
                    ],
                    [
                        'question' => 'Dans un circuit série idéal, le courant passe-t-il nécessairement par chaque composant ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il choisit seulement le composant le plus petit', 'is_correct' => false],
                            ['choice_text' => 'Seulement par les résistances', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque la pile est faible', 'is_correct' => false],
                        ],
                        'explanation' => 'Un montage série ne comporte qu\'un seul chemin de circulation du courant.',
                    ],
                    [
                        'question' => 'Une pile de 12 V alimente deux résistances en série identiques. La tension aux bornes de chacune est idéalement :',
                        'choices' => [
                            ['choice_text' => '6 V', 'is_correct' => true],
                            ['choice_text' => '12 V', 'is_correct' => false],
                            ['choice_text' => '24 V', 'is_correct' => false],
                            ['choice_text' => '3 V', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux résistances identiques se partagent la tension totale : 12/2 = 6 V chacune.',
                    ],
                ],
            ],

            [
                'title' => 'Circuits en parallèle',
                'description' => 'Découvrir les règles de base des circuits comportant plusieurs branches en parallèle.',
                'questions' => [
                    [
                        'question' => 'Dans un circuit en parallèle, quelle grandeur est la même aux bornes de chaque branche idéale ?',
                        'choices' => [
                            ['choice_text' => 'La tension', 'is_correct' => true],
                            ['choice_text' => 'Le courant dans toutes les branches', 'is_correct' => false],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'La puissance toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'Les branches parallèles sont connectées entre les mêmes deux points et ont donc la même tension.',
                    ],
                    [
                        'question' => 'Dans un montage parallèle, le courant total est égal :',
                        'choices' => [
                            ['choice_text' => 'À la somme des courants dans les branches', 'is_correct' => true],
                            ['choice_text' => 'Au courant de la plus grande résistance uniquement', 'is_correct' => false],
                            ['choice_text' => 'À zéro dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Au produit des courants', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des nœuds impose que le courant entrant soit égal à la somme des courants sortants.',
                    ],
                    [
                        'question' => 'Deux résistances de 10 Ω et 10 Ω sont en parallèle. Leur résistance équivalente vaut :',
                        'choices' => [
                            ['choice_text' => '5 Ω', 'is_correct' => true],
                            ['choice_text' => '10 Ω', 'is_correct' => false],
                            ['choice_text' => '20 Ω', 'is_correct' => false],
                            ['choice_text' => '100 Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux résistances identiques R en parallèle, R_eq = R/2, donc 5 Ω.',
                    ],
                    [
                        'question' => 'La résistance équivalente de plusieurs résistances en parallèle est-elle généralement inférieure à la plus petite résistance du montage ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est toujours supérieure', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours exactement égale à la plus petite', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des résistances positives en parallèle, la résistance équivalente est inférieure à chacune des résistances individuelles.',
                    ],
                    [
                        'question' => 'Une ampoule domestique branchée sur une installation en parallèle reçoit-elle la même tension que les autres appareils branchés entre les mêmes bornes ?',
                        'choices' => [
                            ['choice_text' => 'Oui, idéalement', 'is_correct' => true],
                            ['choice_text' => 'Non, la tension est toujours divisée par le nombre d\'appareils', 'is_correct' => false],
                            ['choice_text' => 'Seulement si aucun courant ne circule', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans un circuit série', 'is_correct' => false],
                        ],
                        'explanation' => 'Les appareils domestiques sont principalement raccordés en parallèle afin que chacun reçoive la tension du réseau.',
                    ],
                    [
                        'question' => 'Dans deux branches parallèles ayant la même tension, la branche avec la plus petite résistance reçoit généralement :',
                        'choices' => [
                            ['choice_text' => 'Un courant plus grand', 'is_correct' => true],
                            ['choice_text' => 'Un courant plus petit', 'is_correct' => false],
                            ['choice_text' => 'Toujours zéro courant', 'is_correct' => false],
                            ['choice_text' => 'Le même courant dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec I = U/R, à tension identique, la branche de plus faible résistance laisse passer davantage de courant.',
                    ],
                    [
                        'question' => 'Que se passe-t-il idéalement si une branche parallèle est ouverte, alors que les autres restent connectées ?',
                        'choices' => [
                            ['choice_text' => 'Le courant cesse seulement dans cette branche', 'is_correct' => true],
                            ['choice_text' => 'Tout le circuit devient nécessairement ouvert', 'is_correct' => false],
                            ['choice_text' => 'La tension devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Toutes les autres branches cessent forcément de fonctionner', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque branche possède son propre chemin, donc une coupure locale n\'interrompt pas nécessairement les autres branches.',
                    ],
                    [
                        'question' => 'Quelle formule permet de calculer la résistance équivalente de deux résistances en parallèle ?',
                        'choices' => [
                            ['choice_text' => 'R_eq = (R₁R₂)/(R₁ + R₂)', 'is_correct' => true],
                            ['choice_text' => 'R_eq = R₁ + R₂', 'is_correct' => false],
                            ['choice_text' => 'R_eq = R₁ - R₂', 'is_correct' => false],
                            ['choice_text' => 'R_eq = R₁/R₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux résistances en parallèle, R_eq = R₁R₂/(R₁ + R₂).',
                    ],
                    [
                        'question' => 'Deux résistances de 6 Ω et 3 Ω sont en parallèle. Leur résistance équivalente vaut :',
                        'choices' => [
                            ['choice_text' => '2 Ω', 'is_correct' => true],
                            ['choice_text' => '9 Ω', 'is_correct' => false],
                            ['choice_text' => '3 Ω', 'is_correct' => false],
                            ['choice_text' => '18 Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'R_eq = (6 × 3)/(6 + 3) = 18/9 = 2 Ω.',
                    ],
                    [
                        'question' => 'Pourquoi les installations électriques domestiques utilisent-elles principalement des branchements en parallèle ?',
                        'choices' => [
                            ['choice_text' => 'Pour que chaque appareil puisse fonctionner avec la tension du réseau indépendamment des autres', 'is_correct' => true],
                            ['choice_text' => 'Pour obliger tous les appareils à avoir le même courant', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la tension du réseau', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les appareils inactifs lorsqu\'un seul est éteint', 'is_correct' => false],
                        ],
                        'explanation' => 'Le montage parallèle permet à chaque appareil de recevoir la tension nominale et de fonctionner indépendamment.',
                    ],
                ],
            ],

            [
                'title' => 'Lois de Kirchhoff',
                'description' => 'Introduire les lois des nœuds et des mailles pour analyser des circuits simples.',
                'questions' => [
                    [
                        'question' => 'Sur quel principe physique repose la loi des nœuds ?',
                        'choices' => [
                            ['choice_text' => 'La conservation de la charge électrique', 'is_correct' => true],
                            ['choice_text' => 'La conservation de la température', 'is_correct' => false],
                            ['choice_text' => 'La conservation de la masse du conducteur', 'is_correct' => false],
                            ['choice_text' => 'La conservation de la vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des nœuds traduit la conservation de la charge : la somme des courants entrants égale la somme des courants sortants.',
                    ],
                    [
                        'question' => 'Dans un nœud où 5 A arrivent et 2 A repartent par une branche, combien doivent repartir par les autres branches au total ?',
                        'choices' => [
                            ['choice_text' => '3 A', 'is_correct' => true],
                            ['choice_text' => '7 A', 'is_correct' => false],
                            ['choice_text' => '2 A', 'is_correct' => false],
                            ['choice_text' => '10 A', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des courants sortants doit être égale à 5 A. Si 2 A repartent déjà, il reste 3 A.',
                    ],
                    [
                        'question' => 'Quelle loi s\'applique principalement à une boucle fermée d\'un circuit ?',
                        'choices' => [
                            ['choice_text' => 'La loi des mailles', 'is_correct' => true],
                            ['choice_text' => 'La loi des nœuds uniquement', 'is_correct' => false],
                            ['choice_text' => 'La loi de la réfraction', 'is_correct' => false],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des mailles exprime la conservation de l\'énergie électrique autour d\'une boucle fermée.',
                    ],
                    [
                        'question' => 'Dans une maille fermée, la somme algébrique des tensions est :',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Toujours égale à 1 V', 'is_correct' => false],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale au courant total', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des mailles impose que la somme algébrique des différences de potentiel autour d\'une boucle soit nulle.',
                    ],
                    [
                        'question' => 'Une pile fournit 12 V et deux composants provoquent respectivement des chutes de 7 V et 5 V. La loi des mailles est-elle respectée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il manque 12 V', 'is_correct' => false],
                            ['choice_text' => 'Non, la somme vaut 24 V', 'is_correct' => false],
                            ['choice_text' => 'Impossible à déterminer', 'is_correct' => false],
                        ],
                        'explanation' => '7 V + 5 V = 12 V, ce qui correspond exactement à la tension fournie par la pile.',
                    ],
                    [
                        'question' => 'Si 4 A entrent dans un nœud et que 1 A sort par une branche, le reste du courant sortant vaut :',
                        'choices' => [
                            ['choice_text' => '3 A', 'is_correct' => true],
                            ['choice_text' => '5 A', 'is_correct' => false],
                            ['choice_text' => '4 A', 'is_correct' => false],
                            ['choice_text' => '0 A', 'is_correct' => false],
                        ],
                        'explanation' => '4 A = 1 A + 3 A, conformément à la loi des nœuds.',
                    ],
                    [
                        'question' => 'La loi des mailles est liée à quel principe plus général ?',
                        'choices' => [
                            ['choice_text' => 'La conservation de l\'énergie', 'is_correct' => true],
                            ['choice_text' => 'La conservation de la couleur', 'is_correct' => false],
                            ['choice_text' => 'La conservation du volume du circuit', 'is_correct' => false],
                            ['choice_text' => 'La conservation de la température uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les variations de potentiel autour d\'une maille traduisent la conservation de l\'énergie électrique.',
                    ],
                    [
                        'question' => 'Dans un circuit sans dérivation, les courants avant et après un composant sont-ils identiques en régime stationnaire ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, ils sont toujours différents', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un circuit parallèle', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les condensateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans branchement intermédiaire, la conservation de la charge impose le même courant.',
                    ],
                    [
                        'question' => 'Quel élément d\'un circuit peut fournir une élévation de potentiel dans une maille ?',
                        'choices' => [
                            ['choice_text' => 'Une source électrique', 'is_correct' => true],
                            ['choice_text' => 'Une résistance seule', 'is_correct' => false],
                            ['choice_text' => 'Un fil idéal uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un interrupteur ouvert', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pile ou une alimentation fournit une élévation de potentiel correspondant à une source d\'énergie.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on les lois de Kirchhoff ?',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer les courants et tensions dans des circuits parfois plus complexes', 'is_correct' => true],
                            ['choice_text' => 'Pour mesurer directement la température d\'une résistance', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement la vitesse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer toutes les lois électriques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lois de Kirchhoff fournissent des équations permettant d\'analyser les courants et tensions dans les réseaux électriques.',
                    ],
                ],
            ],

            [
                'title' => 'Puissance et énergie électriques',
                'description' => 'Comprendre la puissance consommée et l\'énergie utilisée par les composants d\'un circuit.',
                'questions' => [
                    [
                        'question' => 'Quelle expression donne la puissance électrique consommée par un composant en courant continu ?',
                        'choices' => [
                            ['choice_text' => 'P = UI', 'is_correct' => true],
                            ['choice_text' => 'P = U/I', 'is_correct' => false],
                            ['choice_text' => 'P = R/I', 'is_correct' => false],
                            ['choice_text' => 'P = U + I', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance électrique est le produit de la tension par l\'intensité : P = UI.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI de la puissance électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le watt', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'L\'ohm', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance électrique se mesure en watts, symbole W.',
                    ],
                    [
                        'question' => 'Un appareil fonctionne sous 10 V et est traversé par 2 A. Quelle est sa puissance ?',
                        'choices' => [
                            ['choice_text' => '20 W', 'is_correct' => true],
                            ['choice_text' => '5 W', 'is_correct' => false],
                            ['choice_text' => '12 W', 'is_correct' => false],
                            ['choice_text' => '100 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = UI = 10 × 2 = 20 W.',
                    ],
                    [
                        'question' => 'Un appareil de 100 W fonctionne pendant 10 secondes. Quelle énergie consomme-t-il idéalement ?',
                        'choices' => [
                            ['choice_text' => '1 000 J', 'is_correct' => true],
                            ['choice_text' => '100 J', 'is_correct' => false],
                            ['choice_text' => '10 J', 'is_correct' => false],
                            ['choice_text' => '10 000 J', 'is_correct' => false],
                        ],
                        'explanation' => 'E = Pt = 100 × 10 = 1 000 J.',
                    ],
                    [
                        'question' => 'Quelle relation relie la puissance P à l\'énergie E consommée pendant une durée t ?',
                        'choices' => [
                            ['choice_text' => 'E = Pt', 'is_correct' => true],
                            ['choice_text' => 'E = P/t', 'is_correct' => false],
                            ['choice_text' => 'E = P + t', 'is_correct' => false],
                            ['choice_text' => 'E = t/P', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance est une énergie par unité de temps, donc E = Pt.',
                    ],
                    [
                        'question' => 'Un composant absorbe 50 W. Cela signifie qu\'il consomme :',
                        'choices' => [
                            ['choice_text' => '50 joules par seconde', 'is_correct' => true],
                            ['choice_text' => '50 volts par seconde', 'is_correct' => false],
                            ['choice_text' => '50 ampères par seconde', 'is_correct' => false],
                            ['choice_text' => '50 ohms par seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'Un watt correspond à un joule par seconde.',
                    ],
                    [
                        'question' => 'Quelle puissance dissipe une résistance de 10 Ω parcourue par 2 A ?',
                        'choices' => [
                            ['choice_text' => '40 W', 'is_correct' => true],
                            ['choice_text' => '20 W', 'is_correct' => false],
                            ['choice_text' => '5 W', 'is_correct' => false],
                            ['choice_text' => '100 W', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec P = RI², P = 10 × 2² = 40 W.',
                    ],
                    [
                        'question' => 'Quelle autre expression de la puissance d\'une résistance peut-on utiliser avec sa tension ?',
                        'choices' => [
                            ['choice_text' => 'P = U²/R', 'is_correct' => true],
                            ['choice_text' => 'P = R²/U', 'is_correct' => false],
                            ['choice_text' => 'P = U/R²', 'is_correct' => false],
                            ['choice_text' => 'P = U + R', 'is_correct' => false],
                        ],
                        'explanation' => 'En combinant P = UI et I = U/R, on obtient P = U²/R.',
                    ],
                    [
                        'question' => 'Une lampe de 60 W consomme-t-elle plus d\'énergie par seconde qu\'une lampe de 20 W si elles fonctionnent pendant la même durée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elles consomment exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'Seulement si la tension est nulle', 'is_correct' => false],
                            ['choice_text' => 'Seulement en courant alternatif', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance mesure la vitesse de consommation de l\'énergie. 60 W correspond à davantage d\'énergie consommée par seconde que 20 W.',
                    ],
                    [
                        'question' => 'Quel appareil mesure généralement la puissance ou l\'énergie électrique consommée par une installation ?',
                        'choices' => [
                            ['choice_text' => 'Un compteur électrique', 'is_correct' => true],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                            ['choice_text' => 'Une boussole', 'is_correct' => false],
                        ],
                        'explanation' => 'Un compteur électrique mesure notamment l\'énergie consommée par une installation.',
                    ],
                ],
            ],

            [
                'title' => 'Condensateurs et stockage',
                'description' => 'Introduire le rôle du condensateur et les notions élémentaires de charge et de décharge.',
                'questions' => [
                    [
                        'question' => 'Quel composant peut stocker de l\'énergie électrique sous forme de charge séparée ?',
                        'choices' => [
                            ['choice_text' => 'Le condensateur', 'is_correct' => true],
                            ['choice_text' => 'L\'interrupteur seul', 'is_correct' => false],
                            ['choice_text' => 'Le fil idéal', 'is_correct' => false],
                            ['choice_text' => 'Le voltmètre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un condensateur stocke de l\'énergie dans son champ électrique.',
                    ],
                    [
                        'question' => 'Quelle grandeur mesure la capacité d\'un condensateur à stocker une charge pour une tension donnée ?',
                        'choices' => [
                            ['choice_text' => 'La capacité électrique', 'is_correct' => true],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'La puissance', 'is_correct' => false],
                            ['choice_text' => 'La fréquence sonore', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité C caractérise la relation entre charge stockée et tension.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI de la capacité électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le farad', 'is_correct' => true],
                            ['choice_text' => 'L\'ohm', 'is_correct' => false],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité électrique se mesure en farads, symbole F.',
                    ],
                    [
                        'question' => 'Quelle relation simple relie la charge Q d\'un condensateur, sa capacité C et sa tension U ?',
                        'choices' => [
                            ['choice_text' => 'Q = CU', 'is_correct' => true],
                            ['choice_text' => 'Q = C/U', 'is_correct' => false],
                            ['choice_text' => 'Q = U/C', 'is_correct' => false],
                            ['choice_text' => 'Q = C + U', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un condensateur idéal, Q = CU.',
                    ],
                    [
                        'question' => 'Un condensateur est-il équivalent à une simple résistance dans un circuit continu permanent ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, exactement pour toutes les fréquences', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque sa capacité est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le comportement d\'un condensateur dépend du temps et de la variation de la tension.',
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lors de la charge d\'un condensateur à travers une résistance ?',
                        'choices' => [
                            ['choice_text' => 'La tension du condensateur augmente progressivement', 'is_correct' => true],
                            ['choice_text' => 'La tension reste immédiatement constante à zéro', 'is_correct' => false],
                            ['choice_text' => 'La capacité disparaît', 'is_correct' => false],
                            ['choice_text' => 'La résistance devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d\'une charge RC, la tension du condensateur évolue progressivement vers la tension d\'alimentation.',
                    ],
                    [
                        'question' => 'Lorsqu\'un condensateur idéal se décharge à travers une résistance, sa tension :',
                        'choices' => [
                            ['choice_text' => 'Diminue progressivement', 'is_correct' => true],
                            ['choice_text' => 'Augmente sans limite', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours exactement identique', 'is_correct' => false],
                            ['choice_text' => 'Devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La décharge du condensateur entraîne une diminution progressive de sa tension.',
                    ],
                    [
                        'question' => 'Une capacité de 2 F soumise à 3 V contient une charge de :',
                        'choices' => [
                            ['choice_text' => '6 C', 'is_correct' => true],
                            ['choice_text' => '1,5 C', 'is_correct' => false],
                            ['choice_text' => '5 C', 'is_correct' => false],
                            ['choice_text' => '0,67 C', 'is_correct' => false],
                        ],
                        'explanation' => 'Q = CU = 2 × 3 = 6 C.',
                    ],
                    [
                        'question' => 'Un condensateur possède une capacité plus grande qu\'un autre et reçoit la même tension. Il stocke alors :',
                        'choices' => [
                            ['choice_text' => 'Une charge plus grande', 'is_correct' => true],
                            ['choice_text' => 'Une charge plus petite', 'is_correct' => false],
                            ['choice_text' => 'Toujours la même charge', 'is_correct' => false],
                            ['choice_text' => 'Une charge nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme Q = CU, une capacité plus grande donne une charge plus grande à tension identique.',
                    ],
                    [
                        'question' => 'Quel composant est souvent utilisé dans des circuits pour filtrer, temporiser ou stocker momentanément de l\'énergie électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le condensateur', 'is_correct' => true],
                            ['choice_text' => 'L\'ampèremètre uniquement', 'is_correct' => false],
                            ['choice_text' => 'L\'interrupteur mécanique seul', 'is_correct' => false],
                            ['choice_text' => 'Le fil de cuivre seul', 'is_correct' => false],
                        ],
                        'explanation' => 'Les condensateurs sont utilisés dans de nombreuses fonctions de filtrage, temporisation et stockage d\'énergie.',
                    ],
                ],
            ],

            [
                'title' => 'Mesures électriques et sécurité',
                'description' => 'Apprendre à utiliser les principaux appareils de mesure et à respecter les règles de sécurité de base.',
                'questions' => [
                    [
                        'question' => 'Quel appareil mesure l\'intensité du courant ?',
                        'choices' => [
                            ['choice_text' => 'L\'ampèremètre', 'is_correct' => true],
                            ['choice_text' => 'Le voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Le wattmètre uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le thermomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ampèremètre mesure l\'intensité du courant électrique.',
                    ],
                    [
                        'question' => 'Comment branche-t-on généralement un ampèremètre pour mesurer le courant d\'une branche ?',
                        'choices' => [
                            ['choice_text' => 'En série avec la branche', 'is_correct' => true],
                            ['choice_text' => 'En parallèle directement sur la source', 'is_correct' => false],
                            ['choice_text' => 'Sans connexion au circuit', 'is_correct' => false],
                            ['choice_text' => 'Uniquement entre deux masses', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ampèremètre doit être traversé par le courant à mesurer, donc il se place en série.',
                    ],
                    [
                        'question' => 'Quel appareil mesure une tension entre deux points ?',
                        'choices' => [
                            ['choice_text' => 'Le voltmètre', 'is_correct' => true],
                            ['choice_text' => 'L\'ampèremètre', 'is_correct' => false],
                            ['choice_text' => 'Le thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Le compteur de vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le voltmètre mesure une différence de potentiel entre deux points.',
                    ],
                    [
                        'question' => 'Comment branche-t-on normalement un voltmètre pour mesurer la tension d\'un composant ?',
                        'choices' => [
                            ['choice_text' => 'En parallèle aux bornes du composant', 'is_correct' => true],
                            ['choice_text' => 'En série uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sur un fil coupé sans autre connexion', 'is_correct' => false],
                            ['choice_text' => 'Directement dans la terre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le voltmètre compare les potentiels de deux points, il se branche donc en parallèle.',
                    ],
                   
                    [
    'question' => 'Pourquoi un ampèremètre idéal possède-t-il une très faible résistance interne ?',
    'choices' => [
        ['choice_text' => 'Pour perturber le moins possible le courant du circuit', 'is_correct' => true],
        ['choice_text' => 'Pour augmenter volontairement la tension', 'is_correct' => false],
        ['choice_text' => 'Pour stocker de l\'énergie', 'is_correct' => false],
        ['choice_text' => 'Pour transformer le courant en chaleur uniquement', 'is_correct' => false],
    ],
    'explanation' => 'Une faible résistance interne permet à l\'ampèremètre de mesurer le courant en modifiant le moins possible le fonctionnement du circuit.',
],

                    [
                        'question' => 'Quel risque existe lorsqu\'on branche directement un ampèremètre aux bornes d\'une source idéale ?',
                        'choices' => [
                            ['choice_text' => 'Un courant potentiellement très important peut circuler', 'is_correct' => true],
                            ['choice_text' => 'La tension devient toujours infinie', 'is_correct' => false],
                            ['choice_text' => 'La source devient automatiquement une résistance', 'is_correct' => false],
                            ['choice_text' => 'Aucun risque n\'existe', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ampèremètre possède une très faible résistance. Le brancher directement sur une source peut donc provoquer un courant dangereux ou endommager le matériel.',
                    ],
                    [
                        'question' => 'Avant de manipuler un circuit électrique, quelle précaution est importante ?',
                        'choices' => [
                            ['choice_text' => 'Couper l\'alimentation lorsque cela est nécessaire et vérifier que le circuit est hors tension', 'is_correct' => true],
                            ['choice_text' => 'Toucher les conducteurs pour vérifier le courant', 'is_correct' => false],
                            ['choice_text' => 'Court-circuiter la source', 'is_correct' => false],
                            ['choice_text' => 'Augmenter volontairement la tension', 'is_correct' => false],
                        ],
                        'explanation' => 'La mise hors tension et la vérification adaptée sont des précautions fondamentales avant toute intervention.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de manipuler un circuit avec les mains mouillées ?',
                        'choices' => [
                            ['choice_text' => 'L\'eau peut faciliter le passage du courant à travers le corps', 'is_correct' => true],
                            ['choice_text' => 'L\'eau augmente toujours la tension de la source', 'is_correct' => false],
                            ['choice_text' => 'L\'eau transforme le courant en lumière', 'is_correct' => false],
                            ['choice_text' => 'L\'eau supprime automatiquement toute résistance', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'humidité peut réduire la résistance de contact et augmenter le risque de choc électrique.',
                    ],
                    [
                        'question' => 'Quel dispositif protège généralement une installation contre une surintensité importante ?',
                        'choices' => [
                            ['choice_text' => 'Un fusible ou un disjoncteur', 'is_correct' => true],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Une lampe uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fusibles et disjoncteurs interrompent le circuit lorsqu\'un courant excessif est détecté.',
                    ],
                    [
                        'question' => 'Quelle est la fonction principale d\'un fusible ?',
                        'choices' => [
                            ['choice_text' => 'Interrompre le circuit lorsqu\'un courant trop important le traverse', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la tension du réseau', 'is_correct' => false],
                            ['choice_text' => 'Stocker de l\'énergie pendant plusieurs jours', 'is_correct' => false],
                            ['choice_text' => 'Mesurer directement la résistance', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fusible fond lorsque le courant dépasse sa valeur prévue, ouvrant ainsi le circuit.',
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas court-circuiter volontairement une pile ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'un courant très important peut circuler et provoquer un échauffement', 'is_correct' => true],
                            ['choice_text' => 'Parce que la pile cesse toujours d\'exister instantanément', 'is_correct' => false],
                            ['choice_text' => 'Parce que la tension devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un court-circuit augmente toujours la résistance', 'is_correct' => false],
                        ],
                        'explanation' => 'Un court-circuit présente une très faible résistance et peut donc provoquer une forte intensité et un échauffement important.',
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