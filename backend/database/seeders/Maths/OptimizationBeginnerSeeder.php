<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OptimizationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'optimization')->firstOrFail();

        $choicePositions = [4,1,4,2,4,3,1,4,4,3,4,4,1,3,1,1,3,1,2,2,1,4,2,3,3,1,3,3,1,1,2,1,3,2,2,1,2,2,4,3,2,3,4,3,1,2,1,4,2,2,3,2,3,4,2,4,4,3,4,1];
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
                'title' => 'Introduction à l’optimisation',
                'description' => 'Objectif, variables de décision, contraintes et solutions admissibles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Que cherche un problème d\'optimisation ?',
                        'La meilleure solution selon un critère',
                        'Une solution quelconque',
                        'La suppression des contraintes',
                        'Une constante',
                        'L\'objectif est de maximiser ou minimiser une fonction sur les solutions admissibles.'
                    ),
                    $makeQuestion(
                        'Une variable de décision est :',
                        'Une quantité que l\'on choisit',
                        'Une constante universelle',
                        'Une erreur',
                        'Une unité',
                        'Elle représente un choix que le décideur contrôle.'
                    ),
                    $makeQuestion(
                        'Une contrainte sert à :',
                        'Limiter les solutions autorisées',
                        'Maximiser automatiquement',
                        'Définir une moyenne',
                        'Supprimer l\'objectif',
                        'Les contraintes définissent le domaine admissible.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x², le minimum sur R est atteint en :',
                        'x=0',
                        'x=1',
                        'x=-1',
                        'x=2',
                        'x² est toujours ≥0 et vaut 0 en 0.'
                    ),
                    $makeQuestion(
                        'Une fonction croissante sur [a,b] atteint son maximum en :',
                        'b',
                        'a',
                        '(a+b)/2',
                        '0',
                        'Les valeurs augmentent quand x augmente.'
                    ),
                    $makeQuestion(
                        'Une solution qui respecte toutes les contraintes est :',
                        'Admissible',
                        'Optimale automatiquement',
                        'Impossible',
                        'Locale',
                        'L\'admissibilité ne garantit pas l\'optimalité.'
                    ),
                    $makeQuestion(
                        'Dans Z=3x+2y, si (x,y)=(2,1), Z vaut :',
                        '8',
                        '7',
                        '5',
                        '6',
                        '3×2+2×1=8.'
                    ),
                    $makeQuestion(
                        'Un problème de programmation linéaire utilise :',
                        'Une fonction objectif et des contraintes linéaires',
                        'Uniquement des fonctions trigonométriques',
                        'Des équations différentielles',
                        'Des matrices aléatoires',
                        'La programmation linéaire repose sur des expressions linéaires.'
                    ),
                    $makeQuestion(
                        'Une minimisation cherche :',
                        'La plus petite valeur admissible',
                        'La plus grande valeur admissible',
                        'Une valeur nulle',
                        'Une valeur arbitraire',
                        'Le but est de réduire au minimum la fonction objectif.'
                    ),
                    $makeQuestion(
                        'Pourquoi une frontière admissible peut-elle contenir l\'optimum ?',
                        'Parce que les contraintes peuvent pousser la meilleure solution sur la frontière',
                        'Parce que la frontière est toujours optimale',
                        'Parce que l\'intérieur est interdit',
                        'Parce que les dérivées n\'existent pas',
                        'L\'optimum dépend du domaine autorisé et peut se situer sur sa frontière.'
                    ),
                ],
            ],
            [
                'title' => 'Maximum, minimum et points critiques',
                'description' => 'Extrema simples et rôle des dérivées.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un point critique d\'une fonction dérivable est un point où :',
                        'La dérivée s\'annule',
                        'La fonction est toujours maximale',
                        'La fonction change de signe',
                        'La dérivée seconde est nulle',
                        'Un point critique correspond à f\'(x)=0 (ou dérivée non définie).'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x²-4x+3, le point critique est en :',
                        'x=2',
                        'x=4',
                        'x=-2',
                        'x=0',
                        'f\'(x)=2x-4=0 donne x=2.'
                    ),
                    $makeQuestion(
                        'Si f\'\'(x)>0 en un point critique, ce point est :',
                        'Un minimum local',
                        'Un maximum local',
                        'Un point d\'inflexion',
                        'Indéterminé',
                        'Une dérivée seconde positive indique une concavité vers le haut, donc un minimum local.'
                    ),
                    $makeQuestion(
                        'Si f\'\'(x)<0 en un point critique, ce point est :',
                        'Un maximum local',
                        'Un minimum local',
                        'Un point d\'inflexion',
                        'Indéterminé',
                        'Une dérivée seconde négative indique une concavité vers le bas, donc un maximum local.'
                    ),
                    $makeQuestion(
                        'Sur un intervalle fermé [a,b], le maximum d\'une fonction continue peut se situer :',
                        'En un point critique intérieur ou à une extrémité a ou b',
                        'Uniquement à l\'extrémité a',
                        'Uniquement à l\'extrémité b',
                        'Jamais aux extrémités',
                        'Le théorème des bornes garantit l\'existence d\'un maximum, atteint soit à un point critique, soit à une extrémité.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=-x²+6x, le maximum sur R est atteint en :',
                        'x=3',
                        'x=6',
                        'x=0',
                        'x=-3',
                        'f\'(x)=-2x+6=0 donne x=3, et f\'\'(x)=-2<0 confirme un maximum.'
                    ),
                    $makeQuestion(
                        'Un point critique n\'est pas toujours un extremum car :',
                        'Il peut s\'agir d\'un point d\'inflexion',
                        'La dérivée y est toujours positive',
                        'La fonction n\'y est jamais définie',
                        'Le point critique est toujours un minimum',
                        'Un point où f\'(x)=0 peut correspondre à un point d\'inflexion plutôt qu\'à un extremum.'
                    ),
                    $makeQuestion(
                        'Pour une fonction dérivable sur un intervalle ouvert, un extremum local se situe nécessairement :',
                        'En un point critique',
                        'À une extrémité de l\'intervalle',
                        'N\'importe où',
                        'Uniquement où f(x)=0',
                        'Sur un intervalle ouvert, un extremum local ne peut se produire qu\'en un point où la dérivée s\'annule.'
                    ),
                    $makeQuestion(
                        'La dérivée seconde sert notamment à :',
                        'Déterminer la nature (maximum ou minimum) d\'un point critique',
                        'Calculer directement l\'aire sous la courbe',
                        'Supprimer les contraintes',
                        'Remplacer la fonction objectif',
                        'Le test de la dérivée seconde permet de distinguer un maximum d\'un minimum local.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x³, le point x=0 est un point critique qui est :',
                        'Un point d\'inflexion, ni maximum ni minimum',
                        'Un minimum local',
                        'Un maximum local',
                        'Indéfini',
                        'f\'(0)=0 mais f ne change pas de comportement croissant/décroissant autour de 0 ; c\'est un point d\'inflexion.'
                    ),
                ],
            ],
            [
                'title' => 'Domaine admissible et contraintes',
                'description' => 'Lecture et interprétation des contraintes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le domaine admissible d\'un problème d\'optimisation est l\'ensemble :',
                        'Des solutions qui respectent toutes les contraintes',
                        'De toutes les solutions possibles sans restriction',
                        'Des solutions optimales uniquement',
                        'Des contraintes elles-mêmes',
                        'C\'est l\'ensemble des points satisfaisant simultanément toutes les contraintes imposées.'
                    ),
                    $makeQuestion(
                        'Une contrainte d\'inégalité x≥0 impose que :',
                        'x soit positif ou nul',
                        'x soit strictement négatif',
                        'x soit égal à 0',
                        'x n\'ait aucune limite',
                        'L\'inégalité x≥0 exclut toutes les valeurs strictement négatives.'
                    ),
                    $makeQuestion(
                        'Si le domaine admissible d\'un problème est vide, cela signifie que :',
                        'Aucune solution ne satisfait toutes les contraintes simultanément',
                        'Toutes les solutions sont optimales',
                        'Le problème a une infinité de solutions',
                        'Les contraintes sont inutiles',
                        'Des contraintes contradictoires peuvent rendre le domaine admissible vide, et le problème n\'a alors pas de solution.'
                    ),
                    $makeQuestion(
                        'Une contrainte d\'égalité, comparée à une contrainte d\'inégalité, est généralement :',
                        'Plus restrictive, car elle fixe exactement une relation',
                        'Moins restrictive',
                        'Sans effet sur le domaine',
                        'Toujours impossible à satisfaire',
                        'Une égalité réduit la dimension du domaine admissible, alors qu\'une inégalité laisse une région plus large.'
                    ),
                    $makeQuestion(
                        'Pour les contraintes x+y≤10 et x≥0, y≥0, le domaine admissible dans le plan est :',
                        'Un triangle',
                        'Un cercle',
                        'Une droite',
                        'L\'ensemble vide',
                        'Ces trois inégalités linéaires délimitent une région triangulaire dans le premier quadrant.'
                    ),
                    $makeQuestion(
                        'Augmenter la limite d\'une contrainte (par exemple passer de x≤5 à x≤10) peut :',
                        'Élargir le domaine admissible',
                        'Toujours réduire le domaine admissible',
                        'Supprimer l\'objectif',
                        'Rendre le problème impossible',
                        'Relâcher une contrainte agrandit généralement l\'ensemble des solutions autorisées.'
                    ),
                    $makeQuestion(
                        'Une solution strictement à l\'intérieur du domaine admissible (sans toucher aucune contrainte) est dite :',
                        'Intérieure',
                        'Optimale automatiquement',
                        'Impossible',
                        'Toujours la meilleure',
                        'Être à l\'intérieur signifie ne saturer aucune contrainte, ce qui ne garantit pas l\'optimalité.'
                    ),
                    $makeQuestion(
                        'Pourquoi certaines solutions optimales se trouvent-elles sur la frontière du domaine admissible ?',
                        'Parce que les contraintes limitent la progression de la fonction objectif',
                        'Parce que l\'intérieur est toujours interdit',
                        'Parce que la frontière est toujours plus grande',
                        'Parce que les contraintes n\'ont pas d\'effet',
                        'Quand la fonction objectif continuerait à s\'améliorer au-delà d\'une contrainte, l\'optimum se situe sur cette frontière.'
                    ),
                    $makeQuestion(
                        'Une solution qui viole au moins une contrainte est dite :',
                        'Non admissible',
                        'Optimale',
                        'Admissible',
                        'Toujours nulle',
                        'Elle ne respecte pas toutes les conditions requises pour être considérée comme une solution valide.'
                    ),
                    $makeQuestion(
                        'Ajouter une contrainte supplémentaire à un problème d\'optimisation peut :',
                        'Réduire ou laisser inchangé le domaine admissible, jamais l\'élargir',
                        'Toujours élargir le domaine admissible',
                        'Rendre le problème plus facile sans exception',
                        'Supprimer la fonction objectif',
                        'Une contrainte additionnelle ne peut qu\'ajouter une restriction, donc le domaine admissible ne peut que rétrécir ou rester identique.'
                    ),
                ],
            ],
            [
                'title' => 'Programmation linéaire',
                'description' => 'Objectifs et contraintes linéaires simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans un problème de programmation linéaire, la fonction objectif est :',
                        'Une expression linéaire des variables de décision à maximiser ou minimiser',
                        'Toujours quadratique',
                        'Une contrainte supplémentaire',
                        'Une constante fixe',
                        'La programmation linéaire se caractérise par un objectif et des contraintes exprimés sous forme linéaire.'
                    ),
                    $makeQuestion(
                        'Pour l\'objectif Z=4x+3y avec (x,y)=(3,2), Z vaut :',
                        '18',
                        '14',
                        '20',
                        '12',
                        '4×3+3×2=12+6=18.'
                    ),
                    $makeQuestion(
                        'Dans un problème de programmation linéaire à deux variables, le domaine admissible est généralement :',
                        'Un polygone convexe',
                        'Un cercle',
                        'Une courbe quelconque',
                        'Un point isolé',
                        'L\'intersection de plusieurs contraintes linéaires forme une région polygonale convexe.'
                    ),
                    $makeQuestion(
                        'Dans un problème de programmation linéaire, l\'optimum d\'une fonction objectif linéaire sur un polygone convexe se situe :',
                        'En un sommet du polygone',
                        'Toujours au centre du polygone',
                        'Jamais sur la frontière',
                        'En un point aléatoire',
                        'Pour une fonction linéaire, l\'optimum sur un domaine polygonal convexe est atteint en un sommet.'
                    ),
                    $makeQuestion(
                        'La méthode graphique de résolution d\'un programme linéaire à deux variables consiste à :',
                        'Tracer les contraintes et évaluer l\'objectif aux sommets du domaine admissible',
                        'Supprimer toutes les contraintes',
                        'Calculer uniquement la moyenne des contraintes',
                        'Ignorer la fonction objectif',
                        'On identifie la région admissible puis on compare la valeur de l\'objectif à chacun de ses sommets.'
                    ),
                    $makeQuestion(
                        'Pour les contraintes x≤4, y≤3, x≥0, y≥0 et l\'objectif Z=2x+5y, le sommet (4,3) donne :',
                        'Z=23',
                        'Z=20',
                        'Z=15',
                        'Z=8',
                        'Z=2×4+5×3=8+15=23.'
                    ),
                    $makeQuestion(
                        'Si deux sommets d\'un polygone admissible donnent la même valeur optimale de l\'objectif, alors :',
                        'Tout le segment entre ces deux sommets est également optimal',
                        'Le problème n\'a pas de solution',
                        'L\'un des deux sommets doit être rejeté',
                        'L\'objectif n\'est pas linéaire',
                        'Pour une fonction linéaire, si deux sommets donnent la même valeur optimale, tous les points du segment les reliant donnent aussi cette valeur.'
                    ),
                    $makeQuestion(
                        'Une contrainte de non-négativité (x≥0, y≥0) sert typiquement à :',
                        'Refléter le fait que les variables représentent des quantités physiques ne pouvant être négatives',
                        'Rendre le problème impossible',
                        'Supprimer l\'objectif',
                        'Changer la nature de l\'objectif en quadratique',
                        'Dans de nombreux contextes (quantités produites, ressources utilisées), des valeurs négatives n\'ont pas de sens.'
                    ),
                    $makeQuestion(
                        'Un problème de programmation linéaire est dit non borné lorsque :',
                        'La fonction objectif peut être améliorée indéfiniment sur le domaine admissible',
                        'Le domaine admissible est vide',
                        'Il n\'existe qu\'une seule solution admissible',
                        'Toutes les contraintes sont des égalités',
                        'Si rien ne limite l\'amélioration de l\'objectif, le problème n\'admet pas d\'optimum fini.'
                    ),
                    $makeQuestion(
                        'Pourquoi la programmation linéaire est-elle largement utilisée en gestion et en logistique ?',
                        'Parce qu\'elle modélise efficacement des problèmes de répartition de ressources sous contraintes',
                        'Parce qu\'elle ne nécessite aucune donnée',
                        'Parce qu\'elle ignore les contraintes réelles',
                        'Parce qu\'elle ne s\'applique qu\'aux équations du second degré',
                        'De nombreux problèmes de production, transport et planification se formulent naturellement comme des programmes linéaires.'
                    ),
                ],
            ],
            [
                'title' => 'Applications d’optimisation',
                'description' => 'Coûts, recettes, surfaces et décisions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une entreprise veut minimiser son coût de production C(x)=2x²-20x+100. Le minimum est atteint en :',
                        'x=5',
                        'x=10',
                        'x=20',
                        'x=0',
                        'C\'(x)=4x-20=0 donne x=5.'
                    ),
                    $makeQuestion(
                        'Pour maximiser l\'aire d\'un rectangle de périmètre fixé 20, la forme optimale est :',
                        'Un carré de côté 5',
                        'Un rectangle très allongé',
                        'Un rectangle de côtés 1 et 9',
                        'Impossible à déterminer',
                        'Pour un périmètre fixé, l\'aire maximale d\'un rectangle est obtenue lorsque les côtés sont égaux, formant un carré.'
                    ),
                    $makeQuestion(
                        'Un fabricant vend un produit au prix p(x)=50-x et a un coût de production de 10 par unité. Le bénéfice B(x)=(p(x)-10)x est maximal en :',
                        'x=20',
                        'x=25',
                        'x=10',
                        'x=40',
                        'B(x)=(40-x)x=40x-x², donc B\'(x)=40-2x=0 donne x=20.'
                    ),
                    $makeQuestion(
                        'Pour minimiser la surface d\'un emballage à volume fixé, on utilise typiquement :',
                        'Le calcul différentiel pour trouver les dimensions optimales',
                        'Une estimation visuelle uniquement',
                        'Une contrainte de volume nulle',
                        'Une fonction objectif constante',
                        'On exprime la surface en fonction d\'une variable liée au volume fixé, puis on cherche le minimum par dérivation.'
                    ),
                    $makeQuestion(
                        'Une entreprise doit répartir un budget entre deux campagnes publicitaires pour maximiser les ventes sous une contrainte budgétaire totale. C\'est un exemple typique de :',
                        'Problème d\'optimisation sous contrainte',
                        'Problème sans solution',
                        'Problème purement géométrique',
                        'Problème sans variable de décision',
                        'Les budgets alloués sont les variables de décision, et la contrainte budgétaire limite les choix possibles.'
                    ),
                    $makeQuestion(
                        'Pour un trajet à vitesse variable, minimiser le temps de parcours sous une contrainte de carburant disponible est un problème :',
                        'D\'optimisation avec une contrainte de ressource',
                        'Sans aucune contrainte',
                        'Purement linéaire obligatoirement',
                        'Sans fonction objectif',
                        'Le temps à minimiser est l\'objectif, et la quantité de carburant disponible constitue la contrainte de ressource.'
                    ),
                    $makeQuestion(
                        'Un agriculteur veut maximiser le rendement total en répartissant une surface limitée entre deux cultures. La surface totale disponible est :',
                        'Une contrainte du problème',
                        'La fonction objectif',
                        'Une variable de décision uniquement',
                        'Sans importance pour le problème',
                        'La surface limitée restreint les choix possibles, ce qui en fait une contrainte plutôt que l\'objectif lui-même.'
                    ),
                    $makeQuestion(
                        'Pour minimiser le coût total de stockage et de commande d\'un produit, on cherche typiquement :',
                        'Un compromis optimal entre deux coûts qui évoluent en sens opposé',
                        'À annuler totalement les coûts de stockage',
                        'À commander une quantité infinie',
                        'À ignorer les coûts de commande',
                        'Les modèles de gestion de stock cherchent l\'équilibre entre coût de stockage et coût de commande pour minimiser le coût total.'
                    ),
                    $makeQuestion(
                        'Dans un problème d\'allocation de ressources, chaque variable de décision représente généralement :',
                        'La quantité d\'une ressource ou d\'un produit allouée à une activité',
                        'Une contrainte fixe',
                        'Le résultat final uniquement',
                        'Une unité de mesure',
                        'Les variables de décision décrivent les choix concrets que l\'on peut ajuster, comme une quantité allouée.'
                    ),
                    $makeQuestion(
                        'Pourquoi vérifie-t-on qu\'une solution optimale trouvée mathématiquement est réalisable en pratique ?',
                        'Parce que le modèle peut ignorer certaines contraintes réelles non formalisées',
                        'Parce que les mathématiques donnent toujours des résultats faux',
                        'Parce que la vérification n\'est jamais nécessaire',
                        'Parce que l\'optimum mathématique est toujours irréalisable',
                        'Un modèle simplifié peut omettre des contraintes pratiques, d\'où l\'importance de valider la solution dans le contexte réel.'
                    ),
                ],
            ],
            [
                'title' => 'Révision générale de l’optimisation',
                'description' => 'Synthèse des notions essentielles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un problème d\'optimisation cherche généralement à :',
                        'Maximiser ou minimiser une fonction objectif sous contraintes',
                        'Trouver toutes les solutions possibles sans distinction',
                        'Supprimer les contraintes',
                        'Calculer uniquement une moyenne',
                        'C\'est la définition même d\'un problème d\'optimisation : chercher la meilleure solution selon un critère donné.'
                    ),
                    $makeQuestion(
                        'Un point critique d\'une fonction correspond à :',
                        'Un point où la dérivée s\'annule',
                        'Un point où la fonction est toujours maximale',
                        'Un point où x=0 obligatoirement',
                        'Un point où la fonction n\'est pas définie',
                        'C\'est la condition nécessaire classique pour chercher un extremum d\'une fonction dérivable.'
                    ),
                    $makeQuestion(
                        'Le domaine admissible d\'un problème est :',
                        'L\'ensemble des solutions respectant toutes les contraintes',
                        'L\'ensemble de toutes les solutions numériques possibles',
                        'La fonction objectif elle-même',
                        'Un sous-ensemble toujours vide',
                        'Il regroupe uniquement les solutions qui satisfont simultanément toutes les contraintes imposées.'
                    ),
                    $makeQuestion(
                        'Dans un problème de programmation linéaire sur un domaine polygonal convexe, l\'optimum se trouve :',
                        'En un sommet du polygone',
                        'Toujours au centre du polygone',
                        'En dehors du domaine admissible',
                        'Jamais sur la frontière',
                        'Pour une fonction objectif linéaire, l\'optimum d\'un domaine polygonal convexe est atteint à un sommet.'
                    ),
                    $makeQuestion(
                        'Face à un problème d\'optimisation appliqué, la première étape consiste généralement à :',
                        'Identifier la fonction objectif et les variables de décision',
                        'Choisir directement une valeur numérique au hasard',
                        'Ignorer les contraintes pour simplifier',
                        'Tracer un graphique sans poser d\'équations',
                        'Avant de résoudre quoi que ce soit, il faut clarifier ce que l\'on cherche à optimiser et avec quelles variables.'
                    ),
                    $makeQuestion(
                        'Une contrainte de non-négativité x≥0 reflète souvent :',
                        'Le fait que x représente une quantité physique',
                        'Une erreur dans le modèle',
                        'Une contrainte sans aucune utilité',
                        'Le fait que x doit être négatif',
                        'Des quantités comme un volume de production ne peuvent pas être négatives, d\'où cette contrainte.'
                    ),
                    $makeQuestion(
                        'Pour l\'objectif Z=3x+4y avec (x,y)=(2,5), Z vaut :',
                        '26',
                        '20',
                        '23',
                        '17',
                        '3×2+4×5=6+20=26.'
                    ),
                    $makeQuestion(
                        'Un problème d\'optimisation est dit non borné lorsque :',
                        'L\'objectif peut être amélioré indéfiniment sur le domaine admissible',
                        'Le domaine admissible est toujours vide',
                        'Il existe une solution unique obligatoirement',
                        'Toutes les contraintes sont satisfaites par tous les points',
                        'Dans ce cas, aucune valeur optimale finie n\'existe car l\'objectif peut toujours être amélioré.'
                    ),
                    $makeQuestion(
                        'Un exemple typique de problème d\'optimisation appliqué est :',
                        'Minimiser le coût de production sous une contrainte de quantité à produire',
                        'Compter le nombre de lettres d\'un mot',
                        'Calculer la moyenne d\'une série de notes',
                        'Dessiner un graphique sans données',
                        'La minimisation des coûts sous contrainte de production est un cas d\'école classique d\'optimisation appliquée.'
                    ),
                    $makeQuestion(
                        'Pourquoi valide-t-on une solution optimale théorique dans un contexte réel avant de l\'appliquer ?',
                        'Parce que le modèle mathématique peut ne pas capturer toutes les contraintes pratiques',
                        'Parce que les calculs mathématiques sont souvent faux',
                        'Parce que la validation n\'apporte jamais rien',
                        'Parce que la solution théorique est toujours inapplicable',
                        'Un modèle simplifié peut omettre des aspects pratiques importants, ce qui justifie une vérification avant mise en œuvre.'
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
