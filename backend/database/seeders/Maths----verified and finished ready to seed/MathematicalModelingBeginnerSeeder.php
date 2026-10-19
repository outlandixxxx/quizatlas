<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MathematicalModelingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mathematical-modeling')->firstOrFail();

        $choicePositions = [2,1,3,4,3,3,4,1,4,2,1,2,4,3,2,3,1,1,4,1,1,4,2,2,4,3,2,1,4,1,4,3,2,2,1,3,3,4,3,3,2,3,4,4,2,4,4,2,3,1,4,1,4,2,4,1,4,3,3,2,1,3,2,2,3,1,3,4,1,2,2,1,2,2,1,3,1,1,3,4];
        $choicePositionIndex = 0;

        $makeQuestion = function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ) use (&$choicePositions, &$choicePositionIndex): array {
            $wrongs = [$wrong1, $wrong2, $wrong3];
            $position = $choicePositions[$choicePositionIndex++];
            $choices = [];
            $wrongIndex = 0;
            for ($slot = 1; $slot <= 4; $slot++) {
                if ($slot === $position) {
                    $choices[] = ['choice_text' => $correct, 'is_correct' => true];
                } else {
                    $choices[] = ['choice_text' => $wrongs[$wrongIndex], 'is_correct' => false];
                    $wrongIndex++;
                }
            }

            return [
                'question' => $question,
                'choices' => $choices,
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => 'Introduction à la modélisation mathématique',
                'description' => 'Définir modèle, variables, hypothèses et sorties.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique est :',
                        'Une représentation simplifiée d\'un phénomène',
                        'Une copie parfaite du réel',
                        'Une équation sans données',
                        'Un logiciel',
                        'Un modèle conserve les mécanismes importants tout en simplifiant la réalité.'
                    ),
                    $makeQuestion(
                        'Une variable d\'entrée est :',
                        'Une quantité utilisée pour produire une sortie',
                        'Toujours une constante',
                        'Une unité',
                        'Une erreur',
                        'Elle fournit une information au modèle.'
                    ),
                    $makeQuestion(
                        'Dans d=vt, si v est en km/h et t en h, d est en :',
                        'km',
                        'h',
                        'km/h',
                        'm/s',
                        'Les heures s\'annulent dans le produit avec km/h.'
                    ),
                    $makeQuestion(
                        'Dans y=3x+2, 3 représente :',
                        'La pente',
                        'La valeur de y à x=0',
                        'La variable',
                        'Une unité',
                        'Le coefficient de x donne la pente.'
                    ),
                    $makeQuestion(
                        'Une hypothèse sert à :',
                        'Préciser les conditions du modèle',
                        'Garantir une exactitude absolue',
                        'Supprimer les données',
                        'Rendre tout linéaire',
                        'Les hypothèses délimitent le contexte de validité.'
                    ),
                    $makeQuestion(
                        'Valider un modèle consiste notamment à :',
                        'Comparer ses prédictions aux observations',
                        'Le rendre exact partout',
                        'Supprimer les mesures',
                        'Changer les unités',
                        'La comparaison permet d\'évaluer l\'adéquation du modèle.'
                    ),
                    $makeQuestion(
                        'Une analyse de sensibilité étudie :',
                        'L\'effet des variations des paramètres sur la sortie',
                        'Le nombre de variables seulement',
                        'La longueur du rapport',
                        'Le titre du modèle',
                        'Elle montre quels paramètres influencent fortement le résultat.'
                    ),
                    $makeQuestion(
                        'Si y=2x et x double, y :',
                        'Double',
                        'Est divisé par deux',
                        'Reste constant',
                        'Devient négatif',
                        'Une relation proportionnelle suit le même facteur de variation.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modèle peut-il être utile sans être exact ?',
                        'Une approximation suffisante peut répondre au besoin',
                        'Une erreur n\'existe jamais',
                        'Tout modèle est universel',
                        'La réalité est toujours linéaire',
                        'L\'objectif est une représentation suffisamment bonne pour l\'usage prévu.'
                    ),
                    $makeQuestion(
                        'Un modèle peut-il être fiable sur une plage et mauvais ailleurs ?',
                        'Oui',
                        'Non',
                        'Seulement s\'il est constant',
                        'Seulement en physique',
                        'Les hypothèses et les données limitent souvent le domaine de validité.'
                    ),
                ],
            ],
            [
                'title' => 'Variables, paramètres et unités',
                'description' => 'Interpréter variables, paramètres et cohérence dimensionnelle.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un paramètre, à la différence d\'une variable, est une quantité :',
                        'Fixée pour une situation donnée, mais qui peut changer entre différents scénarios',
                        'Toujours égale à zéro',
                        'Qui varie à chaque instant du modèle',
                        'Qui n\'a jamais d\'unité',
                        'Un paramètre reste constant au sein d\'un scénario mais peut différer d\'un scénario à l\'autre.'
                    ),
                    $makeQuestion(
                        'Une variable de sortie est :',
                        'Le résultat produit par le modèle à partir des entrées',
                        'Une donnée fournie avant le calcul',
                        'Un paramètre fixé par hypothèse',
                        'Une unité de mesure',
                        'La sortie est ce que le modèle calcule à partir des variables d\'entrée et des paramètres.'
                    ),
                    $makeQuestion(
                        'Dans la formule P=F/S (pression = force / surface), si F est en newtons et S en m², P est en :',
                        'Pascals (N/m²)',
                        'Newtons',
                        'Mètres',
                        'Mètres carrés',
                        'Le pascal est défini comme un newton par mètre carré.'
                    ),
                    $makeQuestion(
                        'L\'analyse dimensionnelle sert à :',
                        'Vérifier la cohérence des unités dans une formule',
                        'Calculer la moyenne des données',
                        'Supprimer les paramètres inutiles',
                        'Transformer un modèle linéaire en modèle quadratique',
                        'Elle permet de contrôler que les unités des deux membres d\'une équation coïncident.'
                    ),
                    $makeQuestion(
                        'Si une formule donne un résultat en « secondes par mètre » alors qu\'on attend une vitesse, cela indique :',
                        'Une erreur dans la construction de la formule',
                        'Que le résultat est correct',
                        'Que les unités n\'ont pas d\'importance',
                        'Que le modèle est exponentiel',
                        'Une vitesse doit s\'exprimer en distance par temps, pas l\'inverse ; l\'incohérence d\'unité signale une erreur.'
                    ),
                    $makeQuestion(
                        'Dans un modèle de population P(t)=P0·e^{rt}, le paramètre r représente :',
                        'Le taux de croissance',
                        'La population initiale',
                        'Le temps écoulé',
                        'La population finale',
                        'r est le coefficient qui détermine la vitesse de croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Changer l\'unité de temps dans un modèle (par exemple, d\'heures en minutes) peut nécessiter :',
                        'D\'ajuster la valeur numérique des paramètres liés au temps',
                        'De changer la nature du modèle',
                        'De supprimer les variables de sortie',
                        'De rendre le modèle non valide',
                        'Les paramètres dépendant du temps doivent être convertis pour rester cohérents avec la nouvelle unité.'
                    ),
                    $makeQuestion(
                        'Un modèle avec de nombreux paramètres, par rapport à un modèle plus simple, est généralement :',
                        'Plus flexible mais potentiellement plus difficile à ajuster avec peu de données',
                        'Toujours plus précis sans inconvénient',
                        'Automatiquement faux',
                        'Sans aucune utilité',
                        'Plus de paramètres offre plus de flexibilité, mais accroît le risque de surajustement avec des données limitées.'
                    ),
                    $makeQuestion(
                        'Les unités des deux membres d\'une égalité dans un modèle physique doivent :',
                        'Être identiques',
                        'Être différentes',
                        'Ne jamais être précisées',
                        'Dépendre du nom de la variable',
                        'Une égalité physique valide impose que les deux côtés aient la même unité.'
                    ),
                    $makeQuestion(
                        'Si une variable d\'entrée est mesurée avec une incertitude, cela peut affecter :',
                        'La fiabilité de la sortie du modèle',
                        'Uniquement le nom du modèle',
                        'La définition des unités',
                        'Rien, car les modèles sont toujours exacts',
                        'Une incertitude sur les entrées se propage généralement vers la sortie du modèle.'
                    ),
                ],
            ],
            [
                'title' => 'Modèles proportionnels et linéaires',
                'description' => 'Construire des relations proportionnelles et affines.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une relation proportionnelle entre x et y s\'écrit sous la forme :',
                        'y=kx',
                        'y=kx+b (avec b≠0)',
                        'y=kx²',
                        'y=k/x',
                        'Une relation proportionnelle passe par l\'origine et son coefficient k est constant.'
                    ),
                    $makeQuestion(
                        'Dans une relation affine y=ax+b, le paramètre b représente :',
                        'La valeur de y lorsque x=0',
                        'La pente de la droite',
                        'Le taux de croissance exponentielle',
                        'La variable indépendante',
                        'b est l\'ordonnée à l\'origine, c\'est-à-dire la valeur de y quand x vaut 0.'
                    ),
                    $makeQuestion(
                        'Si y=4x et x passe de 3 à 6, alors y :',
                        'Passe de 12 à 24',
                        'Passe de 12 à 18',
                        'Reste à 12',
                        'Passe de 3 à 6',
                        'y=4x donne y=12 pour x=3 et y=24 pour x=6.'
                    ),
                    $makeQuestion(
                        'Pour un modèle affine y=2x+5, la valeur de y quand x=10 est :',
                        '25',
                        '20',
                        '15',
                        '7',
                        'y=2(10)+5=20+5=25.'
                    ),
                    $makeQuestion(
                        'Une relation proportionnelle, contrairement à une relation affine générale, vérifie toujours :',
                        'y=0 lorsque x=0',
                        'y=1 lorsque x=0',
                        'Une pente négative',
                        'Une pente nulle',
                        'Le graphe d\'une relation proportionnelle passe nécessairement par l\'origine (0,0).'
                    ),
                    $makeQuestion(
                        'Le coefficient directeur (pente) d\'une droite représente :',
                        'La variation de y pour une variation d\'une unité de x',
                        'La valeur de y à x=0',
                        'Le nombre de points de la droite',
                        'La longueur du segment',
                        'La pente mesure le taux de variation constant de y par rapport à x.'
                    ),
                    $makeQuestion(
                        'Un coût total C(n)=5n+20 pour n articles produits représente un modèle :',
                        'Affine, avec un coût fixe de 20 et un coût variable de 5 par article',
                        'Proportionnel pur',
                        'Quadratique',
                        'Exponentiel',
                        'La présence d\'une constante additive (20) non nulle rend le modèle affine plutôt que purement proportionnel.'
                    ),
                    $makeQuestion(
                        'Deux grandeurs x et y sont dites proportionnelles si le rapport y/x :',
                        'Reste constant pour tout x≠0',
                        'Varie linéairement avec x',
                        'Est toujours égal à 1',
                        'Dépend du carré de x',
                        'Le rapport constant y/x=k est la définition même de la proportionnalité.'
                    ),
                    $makeQuestion(
                        'Si un trajet en taxi coûte 3€ de prise en charge plus 1,5€ par kilomètre, le coût pour 10 km est :',
                        '18€',
                        '15€',
                        '30€',
                        '13,5€',
                        'C=3+1,5×10=3+15=18€.'
                    ),
                    $makeQuestion(
                        'Un modèle linéaire est particulièrement adapté lorsque :',
                        'Le taux de variation de la grandeur étudiée reste approximativement constant',
                        'La grandeur étudiée double à intervalles réguliers',
                        'La grandeur étudiée ne varie jamais',
                        'La grandeur dépend du carré du temps',
                        'La linéarité suppose un taux de variation constant, contrairement à la croissance exponentielle ou quadratique.'
                    ),
                ],
            ],
            [
                'title' => 'Modèles quadratiques et exponentiels',
                'description' => 'Reconnaître des modèles non linéaires simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle quadratique s\'écrit sous la forme :',
                        'y=ax²+bx+c',
                        'y=ax+b',
                        'y=a^x',
                        'y=a/x',
                        'Un modèle quadratique comporte un terme en x² comme plus haut degré.'
                    ),
                    $makeQuestion(
                        'Pour y=2x², la valeur de y quand x=3 est :',
                        '18',
                        '6',
                        '9',
                        '12',
                        'y=2×3²=2×9=18.'
                    ),
                    $makeQuestion(
                        'La trajectoire d\'un objet en chute libre (sans frottement) est souvent modélisée par une fonction :',
                        'Quadratique du temps',
                        'Linéaire du temps',
                        'Exponentielle du temps',
                        'Constante',
                        'La position varie comme le carré du temps sous l\'effet d\'une accélération constante.'
                    ),
                    $makeQuestion(
                        'Un modèle exponentiel s\'écrit sous la forme :',
                        'y=A·b^x (ou y=A·e^{kx})',
                        'y=Ax+B',
                        'y=Ax²',
                        'y=A/x',
                        'La variable x apparaît en exposant dans un modèle exponentiel.'
                    ),
                    $makeQuestion(
                        'Pour un modèle exponentiel y=100·2^t, la valeur de y double chaque fois que :',
                        't augmente de 1',
                        't augmente de 2',
                        't est divisé par 2',
                        'y atteint 100',
                        'Avec une base 2, chaque incrément de 1 en t multiplie y par 2.'
                    ),
                    $makeQuestion(
                        'Contrairement à un modèle linéaire, un modèle exponentiel en croissance :',
                        'Accélère de plus en plus vite au fil du temps',
                        'Croît à un rythme constant',
                        'Finit toujours par décroître',
                        'Ne dépend jamais du temps',
                        'La croissance exponentielle a un taux de variation proportionnel à la valeur actuelle, donc elle s\'accélère.'
                    ),
                    $makeQuestion(
                        'Pour y=x²-4x+3, la valeur de y quand x=1 est :',
                        '0',
                        '3',
                        '-1',
                        '4',
                        'y=1-4+3=0.'
                    ),
                    $makeQuestion(
                        'Un modèle quadratique y=ax²+bx+c avec a>0 a un graphe :',
                        'En forme de parabole ouverte vers le haut',
                        'En forme de droite',
                        'En forme de parabole ouverte vers le bas',
                        'En forme d\'hyperbole',
                        'Lorsque le coefficient a est positif, la parabole s\'ouvre vers le haut.'
                    ),
                    $makeQuestion(
                        'Choisir entre un modèle linéaire, quadratique ou exponentiel pour des données observées dépend principalement :',
                        'De la façon dont le taux de variation évolue dans les données',
                        'Du nom de la variable utilisée',
                        'Du nombre total de points mesurés',
                        'De la couleur du graphique',
                        'Un taux constant suggère un modèle linéaire, un taux proportionnel à la valeur suggère un modèle exponentiel, etc.'
                    ),
                    $makeQuestion(
                        'Pour un modèle exponentiel y=50·(0.5)^t, à mesure que t augmente, y :',
                        'Diminue en se rapprochant de zéro',
                        'Augmente indéfiniment',
                        'Reste constant à 50',
                        'Devient négatif',
                        'Une base comprise entre 0 et 1 produit une décroissance exponentielle vers zéro.'
                    ),
                ],
            ],
            [
                'title' => 'Hypothèses et simplifications',
                'description' => 'Évaluer le rôle des hypothèses.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Simplifier un modèle en négligeant le frottement de l\'air revient à :',
                        'Formuler une hypothèse qui restreint le domaine de validité du modèle',
                        'Rendre le modèle universellement exact',
                        'Éliminer toutes les variables',
                        'Transformer le modèle en modèle statistique',
                        'Toute simplification repose sur une hypothèse qui limite la portée du modèle à des situations où cette simplification reste raisonnable.'
                    ),
                    $makeQuestion(
                        'Supposer qu\'une population croît sans limite de ressources est une hypothèse qui :',
                        'Peut devenir irréaliste sur le long terme',
                        'Est toujours vraie',
                        'Rend le modèle quadratique',
                        'Supprime le besoin de données',
                        'Les ressources limitées finissent par freiner la croissance réelle, rendant cette hypothèse valable seulement à court terme.'
                    ),
                    $makeQuestion(
                        'Une hypothèse simplificatrice courante en physique élémentaire est :',
                        'Négliger les frottements',
                        'Toujours inclure tous les frottements possibles',
                        'Supprimer la gravité',
                        'Changer les unités à chaque calcul',
                        'Négliger les frottements permet d\'obtenir des modèles plus simples, valables dans certaines conditions.'
                    ),
                    $makeQuestion(
                        'Pourquoi un modélisateur documente-t-il explicitement ses hypothèses ?',
                        'Pour que les utilisateurs du modèle comprennent ses limites',
                        'Pour rendre le modèle plus compliqué',
                        'Pour cacher les résultats',
                        'Parce que la loi l\'exige toujours',
                        'Documenter les hypothèses permet d\'interpréter correctement les résultats et d\'éviter une utilisation hors de son domaine de validité.'
                    ),
                    $makeQuestion(
                        'Un modèle qui suppose une vitesse constante pour un véhicule est probablement inadapté pour :',
                        'Décrire un trajet urbain avec arrêts fréquents',
                        'Estimer une distance sur autoroute à vitesse stabilisée',
                        'Un calcul théorique simple',
                        'Un exercice d\'introduction à la modélisation',
                        'Un trajet urbain comporte des variations de vitesse importantes, incompatibles avec l\'hypothèse de vitesse constante.'
                    ),
                    $makeQuestion(
                        'Remplacer une courbe complexe par une droite sur un petit intervalle est un exemple de :',
                        'Approximation locale',
                        'Erreur de calcul',
                        'Modèle exponentiel',
                        'Changement d\'unité',
                        'Sur un petit intervalle, de nombreuses courbes peuvent être raisonnablement approchées par une droite.'
                    ),
                    $makeQuestion(
                        'Une hypothèse de modèle devient problématique lorsque :',
                        'Elle s\'écarte trop des conditions réelles étudiées',
                        'Elle est écrite clairement',
                        'Elle simplifie un calcul sans affecter le résultat',
                        'Elle concerne une variable inutilisée',
                        'Une hypothèse n\'est un problème que si l\'écart avec la réalité modifie significativement les conclusions du modèle.'
                    ),
                    $makeQuestion(
                        'Pourquoi simplifie-t-on parfois un modèle même en sachant qu\'il est imparfait ?',
                        'Parce qu\'un modèle plus simple reste utile et plus facile à analyser',
                        'Parce que la simplicité garantit toujours l\'exactitude',
                        'Parce que les hypothèses rendent le modèle inutile',
                        'Parce que cela évite toute vérification',
                        'Un compromis entre simplicité et réalisme est souvent nécessaire pour qu\'un modèle reste exploitable.'
                    ),
                    $makeQuestion(
                        'Tester un modèle en dehors du domaine couvert par ses hypothèses risque de :',
                        'Produire des prédictions peu fiables',
                        'Toujours améliorer la précision',
                        'Changer automatiquement les unités',
                        'Valider le modèle de façon définitive',
                        'Hors du domaine de validité des hypothèses, le modèle peut s\'écarter fortement de la réalité.'
                    ),
                    $makeQuestion(
                        'Une hypothèse simplificatrice doit idéalement être choisie pour :',
                        'Rester raisonnable dans le contexte précis étudié',
                        'Être la plus restrictive possible sans justification',
                        'Supprimer toutes les variables du modèle',
                        'Compliquer artificiellement les calculs',
                        'Une bonne hypothèse simplifie le modèle tout en restant pertinente pour la situation étudiée.'
                    ),
                ],
            ],
            [
                'title' => 'Ajustement et validation d’un modèle',
                'description' => 'Comparer prédictions et données.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Ajuster un modèle à des données consiste à :',
                        'Choisir les paramètres qui rapprochent le mieux les prédictions des observations',
                        'Changer la nature du modèle à chaque donnée',
                        'Supprimer les données qui ne correspondent pas',
                        'Ignorer les observations',
                        'L\'ajustement cherche les valeurs de paramètres minimisant l\'écart entre modèle et données réelles.'
                    ),
                    $makeQuestion(
                        'Un résidu, dans l\'ajustement d\'un modèle, est :',
                        'La différence entre la valeur observée et la valeur prédite',
                        'La valeur moyenne des données',
                        'Le nombre total de paramètres',
                        'L\'unité de la variable de sortie',
                        'Le résidu mesure l\'écart entre ce que le modèle prédit et ce qui a été réellement observé.'
                    ),
                    $makeQuestion(
                        'Si un modèle produit des résidus très grands et dispersés, cela suggère :',
                        'Que le modèle ne représente pas bien les données',
                        'Que le modèle est parfait',
                        'Qu\'il faut changer les unités',
                        'Que les données sont inutiles',
                        'De grands résidus indiquent un écart important et systématique entre prédictions et observations.'
                    ),
                    $makeQuestion(
                        'Valider un modèle sur un jeu de données différent de celui utilisé pour l\'ajuster permet de :',
                        'Vérifier que le modèle généralise bien à de nouvelles situations',
                        'Garantir une exactitude parfaite',
                        'Réduire le nombre de paramètres',
                        'Éviter de calculer les résidus',
                        'Tester sur des données indépendantes évite de surestimer la qualité d\'un modèle ajusté uniquement sur les données d\'entraînement.'
                    ),
                    $makeQuestion(
                        'Deux modèles ajustés aux mêmes données peuvent être comparés à l\'aide :',
                        'De la taille de leurs résidus ou d\'un critère d\'erreur global',
                        'Du nombre de lettres dans leur nom',
                        'De la couleur de leur graphique',
                        'De l\'ordre dans lequel ils ont été créés',
                        'Un critère quantitatif d\'écart (comme la somme des carrés des résidus) permet de comparer objectivement la qualité des ajustements.'
                    ),
                    $makeQuestion(
                        'Un modèle avec trop de paramètres ajustés sur un petit jeu de données risque de :',
                        'Sur-ajuster (overfitting) et mal généraliser à de nouvelles données',
                        'Toujours mieux prédire l\'avenir',
                        'Devenir automatiquement linéaire',
                        'Ne jamais produire de résidus',
                        'Un excès de paramètres peut coller exactement aux données d\'entraînement sans capturer une tendance réelle généralisable.'
                    ),
                    $makeQuestion(
                        'Pourquoi compare-t-on les prédictions d\'un modèle à des observations indépendantes ?',
                        'Pour évaluer objectivement sa capacité prédictive',
                        'Pour rendre le modèle plus complexe',
                        'Pour changer ses hypothèses de départ',
                        'Pour supprimer ses paramètres',
                        'La comparaison aux observations est le moyen principal de juger la pertinence d\'un modèle.'
                    ),
                    $makeQuestion(
                        'Un modèle jugé valide dans un contexte peut :',
                        'Devenir inadapté si le contexte change significativement',
                        'Rester valide dans tous les contextes à jamais',
                        'Ne plus avoir besoin de paramètres',
                        'Changer automatiquement d\'équation',
                        'La validité d\'un modèle dépend des hypothèses et conditions sous lesquelles il a été établi.'
                    ),
                    $makeQuestion(
                        'Pour ajuster un modèle linéaire y=ax+b à un ensemble de points, la méthode la plus courante est :',
                        'La méthode des moindres carrés',
                        'Le calcul d\'une moyenne simple',
                        'La méthode des moindres positions',
                        'L\'arrondi systématique des données',
                        'Les moindres carrés minimisent la somme des carrés des résidus pour trouver les meilleurs paramètres.'
                    ),
                    $makeQuestion(
                        'Si les prédictions d\'un modèle correspondent très bien aux données utilisées pour l\'ajuster mais très mal à de nouvelles données, le modèle souffre probablement :',
                        'D\'un sur-ajustement',
                        'D\'un sous-ajustement',
                        'D\'une erreur d\'unité uniquement',
                        'D\'un excès de simplicité',
                        'Un bon score sur les données d\'entraînement mais un mauvais score sur de nouvelles données est le signe classique du sur-ajustement.'
                    ),
                ],
            ],
            [
                'title' => 'Sensibilité et interprétation',
                'description' => 'Mesurer l\'effet des paramètres.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une analyse de sensibilité consiste à :',
                        'Faire varier un paramètre pour observer son effet sur la sortie du modèle',
                        'Supprimer tous les paramètres du modèle',
                        'Changer uniquement les unités de mesure',
                        'Valider le modèle sur de nouvelles données',
                        'Elle mesure l\'impact de chaque paramètre pour identifier les plus influents.'
                    ),
                    $makeQuestion(
                        'Un paramètre dit « sensible » est un paramètre dont :',
                        'Une petite variation entraîne un changement important de la sortie',
                        'La valeur ne change jamais',
                        'L\'unité n\'est pas définie',
                        'La variation n\'a aucun effet',
                        'La sensibilité mesure à quel point la sortie réagit à une variation du paramètre.'
                    ),
                    $makeQuestion(
                        'Dans un modèle de population P(t)=P0·e^{rt}, une petite erreur sur r a généralement :',
                        'Un effet qui s\'amplifie avec le temps',
                        'Un effet qui diminue toujours avec le temps',
                        'Aucun effet, quel que soit t',
                        'Un effet uniquement sur P0',
                        'Dans un modèle exponentiel, les erreurs sur le taux r sont amplifiées exponentiellement au fil du temps.'
                    ),
                    $makeQuestion(
                        'Si deux paramètres d\'un modèle ont des effets opposés sur la sortie, les étudier séparément permet de :',
                        'Comprendre la contribution individuelle de chacun',
                        'Les rendre automatiquement égaux',
                        'Supprimer l\'un des deux paramètres',
                        'Transformer le modèle en modèle linéaire',
                        'Isoler l\'effet de chaque paramètre aide à comprendre comment ils influencent la sortie indépendamment.'
                    ),
                    $makeQuestion(
                        'L\'interprétation des résultats d\'un modèle doit toujours tenir compte :',
                        'Des hypothèses et du domaine de validité du modèle',
                        'Uniquement de la précision des calculs numériques',
                        'Du nombre de décimales affichées',
                        'De la longueur du code utilisé',
                        'Un résultat numérique n\'a de sens que replacé dans le cadre des hypothèses qui l\'ont produit.'
                    ),
                    $makeQuestion(
                        'Un paramètre peu sensible dans un modèle peut généralement être :',
                        'Estimé de façon moins précise sans trop affecter les conclusions',
                        'Supprimé automatiquement de toutes les analyses',
                        'Considéré comme la variable de sortie',
                        'Remplacé par une unité différente',
                        'Si la sortie varie peu avec ce paramètre, une estimation imprécise de celui-ci a un impact limité sur les résultats.'
                    ),
                    $makeQuestion(
                        'Pourquoi l\'analyse de sensibilité est-elle utile avant de collecter des données supplémentaires ?',
                        'Elle aide à identifier quels paramètres méritent le plus d\'attention',
                        'Elle remplace totalement la collecte de données',
                        'Elle élimine le besoin de validation',
                        'Elle change la nature du modèle',
                        'Connaître les paramètres les plus influents permet de concentrer les efforts de mesure là où ils comptent le plus.'
                    ),
                    $makeQuestion(
                        'Dans un modèle de coût C=5n+100, le paramètre 100 (coût fixe) a un effet relatif sur C qui :',
                        'Diminue en proportion lorsque n augmente',
                        'Augmente toujours en proportion avec n',
                        'Reste exactement à 50% quel que soit n',
                        'N\'a jamais d\'effet sur C',
                        'Pour n grand, le coût variable 5n domine, donc la part relative du coût fixe 100 diminue.'
                    ),
                    $makeQuestion(
                        'Comparer deux scénarios d\'un même modèle en ne changeant qu\'un seul paramètre à la fois permet de :',
                        'Isoler clairement l\'effet de ce paramètre',
                        'Changer simultanément toutes les hypothèses',
                        'Éviter tout calcul',
                        'Garantir que le modèle devient linéaire',
                        'Ne faire varier qu\'un paramètre à la fois est la méthode de base pour étudier son effet isolé sur la sortie.'
                    ),
                    $makeQuestion(
                        'Interpréter un résultat de modèle sans mentionner ses hypothèses risque de :',
                        'Donner une impression de certitude non justifiée',
                        'Rendre le modèle plus précis',
                        'Automatiquement valider le modèle',
                        'Éliminer les paramètres sensibles',
                        'Omettre les hypothèses peut faire croire que le résultat est universellement valable alors qu\'il dépend de conditions particulières.'
                    ),
                ],
            ],
            [
                'title' => 'Révision générale de la modélisation mathématique',
                'description' => 'Synthèse des idées de modélisation.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un modèle mathématique a pour objectif principal de :',
                        'Représenter un phénomène de façon utile pour comprendre ou prédire',
                        'Reproduire exactement chaque détail du réel',
                        'Remplacer toute observation future',
                        'Supprimer le besoin d\'hypothèses',
                        'L\'utilité d\'un modèle réside dans sa capacité à éclairer ou prédire, pas dans une exactitude absolue.'
                    ),
                    $makeQuestion(
                        'Dans un modèle affine y=ax+b, augmenter a (toutes choses égales) :',
                        'Augmente la pente de la relation',
                        'Déplace la courbe verticalement sans changer sa forme',
                        'Transforme le modèle en modèle quadratique',
                        'N\'a aucun effet sur y',
                        'a est le coefficient directeur ; l\'augmenter rend la droite plus pentue.'
                    ),
                    $makeQuestion(
                        'Un modèle exponentiel se distingue d\'un modèle linéaire car :',
                        'Son taux de variation est proportionnel à la valeur actuelle, pas constant',
                        'Il n\'a jamais de paramètres',
                        'Il est toujours décroissant',
                        'Il ne dépend pas du temps',
                        'C\'est la proportionnalité du taux de variation à la valeur elle-même qui caractérise la croissance (ou décroissance) exponentielle.'
                    ),
                    $makeQuestion(
                        'Une hypothèse simplificatrice dans un modèle sert avant tout à :',
                        'Rendre le modèle plus simple à analyser tout en restant pertinent',
                        'Garantir une exactitude totale',
                        'Éliminer toutes les variables',
                        'Compliquer le calcul final',
                        'Les hypothèses permettent un compromis entre simplicité et réalisme suffisant pour l\'usage visé.'
                    ),
                    $makeQuestion(
                        'Résumer les hypothèses, les paramètres et les limites d\'un modèle dans un rapport sert avant tout à :',
                        'Permettre à d\'autres d\'interpréter correctement les résultats et leurs limites',
                        'Rendre le modèle plus compliqué à comprendre',
                        'Remplacer la validation du modèle',
                        'Garantir que le modèle est toujours exact',
                        'Une documentation claire des hypothèses et limites permet une utilisation appropriée du modèle par d\'autres personnes.'
                    ),
                    $makeQuestion(
                        'Un résidu élevé pour un point de données signifie que :',
                        'Le modèle prédit mal ce point précis',
                        'Le modèle est parfait sur l\'ensemble des données',
                        'Ce point doit être supprimé du jeu de données',
                        'Le paramètre a changé d\'unité',
                        'Un grand résidu indique un écart important entre la prédiction du modèle et l\'observation réelle.'
                    ),
                    $makeQuestion(
                        'L\'analyse de sensibilité permet notamment de :',
                        'Identifier les paramètres les plus influents sur la sortie du modèle',
                        'Remplacer l\'étape de validation',
                        'Éliminer le besoin de données',
                        'Transformer automatiquement le modèle en modèle linéaire',
                        'Elle révèle quels paramètres méritent le plus d\'attention car leur variation affecte fortement la sortie.'
                    ),
                    $makeQuestion(
                        'Un modèle validé sur un jeu de données peut néanmoins échouer sur de nouvelles données si :',
                        'Les nouvelles conditions sortent du domaine de validité des hypothèses initiales',
                        'Le modèle a été ajusté avec la méthode des moindres carrés',
                        'Les unités sont restées identiques',
                        'Le nombre de paramètres n\'a pas changé',
                        'Un modèle reste fiable uniquement dans le cadre pour lequel ses hypothèses sont raisonnables.'
                    ),
                    $makeQuestion(
                        'Choisir entre un modèle linéaire, quadratique ou exponentiel pour représenter des données dépend principalement :',
                        'De la façon dont le taux de variation des données évolue',
                        'De la préférence esthétique du modélisateur',
                        'Du nombre de lettres du nom du phénomène',
                        'De la devise utilisée dans les données',
                        'Le comportement du taux de variation (constant, proportionnel à la valeur, etc.) guide le choix du type de modèle.'
                    ),
                    $makeQuestion(
                        'La démarche de modélisation mathématique suit généralement les étapes :',
                        'Formuler des hypothèses, construire le modèle, l\'ajuster aux données, puis le valider',
                        'Valider le modèle avant même de le construire',
                        'Collecter des données après avoir publié les résultats',
                        'Supprimer toutes les hypothèses avant de commencer',
                        'Cette séquence logique garantit que chaque étape s\'appuie sur les précédentes pour aboutir à un modèle fiable et interprétable.'
                    ),
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
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
