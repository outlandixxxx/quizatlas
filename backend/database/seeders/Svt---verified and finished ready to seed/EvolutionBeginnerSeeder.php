<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EvolutionBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'evolution')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases de l’évolution biologique',
                'description' => 'Comprendre les notions d’évolution, de variation et de descendance avec modification.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'En biologie, que désigne le mot évolution ?',
                        'choices' => [
                            ['choice_text' => 'la croissance d’un individu depuis sa naissance jusqu’à son âge adulte complet', 'is_correct' => false],
                            ['choice_text' => 'les changements héréditaires d’une population au fil des générations', 'is_correct' => true],
                            ['choice_text' => 'une transformation voulue par un organisme pendant sa vie', 'is_correct' => false],
                            ['choice_text' => 'le changement du climat d’une région', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évolution concerne les populations et les caractères transmis d’une génération à l’autre, pas la vie d’un seul individu.',
                    ],
                    [
                        'question' => 'Dans une population de chats, les individus ne se ressemblent pas : couleur, taille, résistance aux maladies. Quel rôle joue cette variation pour l’évolution ?',
                        'choices' => [
                            ['choice_text' => 'elle empêche les individus de se reproduire', 'is_correct' => false],
                            ['choice_text' => 'elle rend les individus identiques à la longue, génération après génération', 'is_correct' => false],
                            ['choice_text' => 'elle supprime les mutations de la population', 'is_correct' => false],
                            ['choice_text' => 'elle fournit des différences héréditaires que la sélection peut trier', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans différences héréditaires entre individus, la sélection naturelle n’aurait rien à trier.',
                    ],
                    [
                        'question' => 'Le groupe sanguin se transmet des parents aux enfants, alors qu’un bronzage de vacances ne se transmet pas. Comment qualifie-t-on le premier caractère ?',
                        'choices' => [
                            ['choice_text' => 'héréditaire', 'is_correct' => true],
                            ['choice_text' => 'acquis', 'is_correct' => false],
                            ['choice_text' => 'abiotique', 'is_correct' => false],
                            ['choice_text' => 'géologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un caractère héréditaire dépend de gènes transmis aux enfants ; un bronzage est acquis pendant la vie et ne se transmet pas.',
                    ],
                    [
                        'question' => 'Le fennec, petit renard du Sahara, a de grandes oreilles qui l’aident à évacuer la chaleur. Comment définit-on cette adaptation ?',
                        'choices' => [
                            ['choice_text' => 'un effort volontaire du fennec pour résister à la chaleur du désert', 'is_correct' => false],
                            ['choice_text' => 'un changement temporaire apparu pendant sa vie', 'is_correct' => false],
                            ['choice_text' => 'un caractère héréditaire qui aide à survivre ou à se reproduire', 'is_correct' => true],
                            ['choice_text' => 'un simple détail d’apparence sans utilité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une adaptation est un caractère transmis aux descendants qui améliore la survie ou la reproduction dans un milieu donné.',
                    ],
                    [
                        'question' => 'Deux jumeaux identiques élevés dans des villes différentes n’ont pas tout à fait la même taille ni le même poids. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'par une différence d’espèce entre eux', 'is_correct' => false],
                            ['choice_text' => 'par l’effet combiné des gènes et de l’environnement', 'is_correct' => true],
                            ['choice_text' => 'par un ADN presque entièrement différent', 'is_correct' => false],
                            ['choice_text' => 'par un changement de leurs gènes dû au climat', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gènes fixent un cadre, mais l’alimentation, le climat et le mode de vie modifient aussi la taille et le poids.',
                    ],
                    [
                        'question' => 'Dans un lac, 30 poissons sur 100 portent une variante de couleur rouge. Quelle proportion de la population cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => '30 %', 'is_correct' => true],
                            ['choice_text' => '70 %', 'is_correct' => false],
                            ['choice_text' => '3 %', 'is_correct' => false],
                            ['choice_text' => '130 %', 'is_correct' => false],
                        ],
                        'explanation' => '30 ÷ 100 = 30 % : c’est ainsi qu’on mesure la fréquence d’une variante dans une population.',
                    ],
                    [
                        'question' => 'Une population peut évoluer même si aucun individu ne change pendant sa vie. Comment est-ce possible ?',
                        'choices' => [
                            ['choice_text' => 'chaque individu change de gènes en vieillissant et transmet ce changement', 'is_correct' => false],
                            ['choice_text' => 'l’évolution décrit la croissance de chaque individu', 'is_correct' => false],
                            ['choice_text' => 'les parents transmettent ce qu’ils ont appris', 'is_correct' => false],
                            ['choice_text' => 'la proportion des variantes change d’une génération à l’autre', 'is_correct' => true],
                        ],
                        'explanation' => 'L’évolution se lit d’une génération à l’autre : ce sont les proportions de variantes dans la population qui changent.',
                    ],
                    [
                        'question' => 'La formule de Darwin, descendance avec modification, signifie que :',
                        'choices' => [
                            ['choice_text' => 'les descendants sont identiques à leurs ancêtres', 'is_correct' => false],
                            ['choice_text' => 'les descendants héritent d’ancêtres communs et peuvent s’en écarter', 'is_correct' => true],
                            ['choice_text' => 'les espèces actuelles sont apparues sans ancêtres', 'is_correct' => false],
                            ['choice_text' => 'l’évolution s’arrête après quelques générations, quand le milieu se stabilise', 'is_correct' => false],
                        ],
                        'explanation' => 'Les êtres vivants descendent de populations ancestrales tout en accumulant des changements héréditaires.',
                    ],
                    [
                        'question' => 'Dans un élevage, un souriceau naît blanc alors que ses parents sont gris, et ses propres petits seront blancs aussi. Quelle est l’origine la plus probable de ce changement ?',
                        'choices' => [
                            ['choice_text' => 'une habitude alimentaire de la mère', 'is_correct' => false],
                            ['choice_text' => 'un bain de soleil pendant la gestation', 'is_correct' => false],
                            ['choice_text' => 'une mutation, c’est-à-dire un changement dans l’ADN', 'is_correct' => true],
                            ['choice_text' => 'un apprentissage du souriceau', 'is_correct' => false],
                        ],
                        'explanation' => 'Un changement qui se transmet à la descendance vient de l’ADN : c’est une mutation.',
                    ],
                    [
                        'question' => 'Parmi ces phrases sur l’évolution, laquelle est correcte ?',
                        'choices' => [
                            ['choice_text' => 'ce sont les populations qui évoluent ; un individu ne décide pas d’évoluer', 'is_correct' => true],
                            ['choice_text' => 'un individu peut changer son ADN pour répondre à un besoin', 'is_correct' => false],
                            ['choice_text' => 'tout caractère nouveau est transmis aux enfants dès sa première apparition', 'is_correct' => false],
                            ['choice_text' => 'l’évolution mène les espèces vers un but fixé d’avance', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évolution résulte de changements dans les populations sur plusieurs générations ; elle n’est pas une décision consciente des individus.',
                    ],
                ],
            ],
            [
                'title' => 'Sélection naturelle',
                'description' => 'Identifier les mécanismes de la sélection naturelle à partir de situations simples.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Pour que la sélection naturelle favorise un caractère, quelle condition doit-il remplir ?',
                        'choices' => [
                            ['choice_text' => 'être acquis par l’entraînement pendant la vie', 'is_correct' => false],
                            ['choice_text' => 'être le même chez chaque individu de la population', 'is_correct' => false],
                            ['choice_text' => 'être héréditaire et influencer la survie ou la reproduction', 'is_correct' => true],
                            ['choice_text' => 'apparaître après l’âge de la reproduction', 'is_correct' => false],
                        ],
                        'explanation' => 'La sélection naturelle trie des variations héréditaires qui changent le nombre de descendants.',
                    ],
                    [
                        'question' => 'Au XIXe siècle, en Angleterre, les phalènes claires étaient repérées par les oiseaux sur des troncs noircis par la suie, alors que les foncées passaient inaperçues. Que s’est-il passé dans la population ?',
                        'choices' => [
                            ['choice_text' => 'les phalènes foncées sont devenues plus nombreuses', 'is_correct' => true],
                            ['choice_text' => 'les phalènes claires sont devenues plus nombreuses', 'is_correct' => false],
                            ['choice_text' => 'les phalènes claires ont foncé pendant leur vie', 'is_correct' => false],
                            ['choice_text' => 'les phalènes ont migré vers d’autres pays', 'is_correct' => false],
                        ],
                        'explanation' => 'Les phalènes foncées survivaient et se reproduisaient mieux ; leur proportion a augmenté. C’est un exemple classique de sélection naturelle.',
                    ],
                    [
                        'question' => 'Sous antibiotique, la proportion de bactéries résistantes augmente de génération en génération. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'l’antibiotique transforme les bactéries sensibles en résistantes', 'is_correct' => false],
                            ['choice_text' => 'les bactéries choisissent de devenir résistantes', 'is_correct' => false],
                            ['choice_text' => 'l’antibiotique fabrique des gènes de résistance', 'is_correct' => false],
                            ['choice_text' => 'les résistantes survivent et laissent plus de descendants', 'is_correct' => true],
                        ],
                        'explanation' => 'La résistance existait déjà chez quelques bactéries ; le traitement tue surtout les autres, et les résistantes se multiplient.',
                    ],
                    [
                        'question' => 'La sélection naturelle trie des variantes qui existent déjà. D’où viennent ces variantes ?',
                        'choices' => [
                            ['choice_text' => 'de la sélection naturelle elle-même', 'is_correct' => false],
                            ['choice_text' => 'des mutations et du brassage des gènes à la reproduction', 'is_correct' => true],
                            ['choice_text' => 'de l’effort des individus pour s’adapter', 'is_correct' => false],
                            ['choice_text' => 'du climat, qui réécrit les gènes des individus', 'is_correct' => false],
                        ],
                        'explanation' => 'Mutations et brassage des gènes produisent la variation ; la sélection ne fait que trier ce qui existe.',
                    ],
                    [
                        'question' => 'Un climat devient plus froid. Si une fourrure plus épaisse est héréditaire, que peut-il arriver au fil des générations ?',
                        'choices' => [
                            ['choice_text' => 'les individus à fourrure épaisse se mettent à disparaître', 'is_correct' => false],
                            ['choice_text' => 'chaque individu épaissit sa fourrure et la transmet', 'is_correct' => false],
                            ['choice_text' => 'les individus à fourrure épaisse deviennent plus nombreux', 'is_correct' => true],
                            ['choice_text' => 'les individus deviennent d’une autre espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Les individus mieux protégés survivent et se reproduisent davantage, ce qui répand le caractère.',
                    ],
                    [
                        'question' => 'Un plumage brun camoufle bien un oiseau dans une forêt, mais le rend très visible sur la neige. Que montre cet exemple ?',
                        'choices' => [
                            ['choice_text' => 'un caractère avantageux le reste même si le milieu change profondément', 'is_correct' => false],
                            ['choice_text' => 'la sélection naturelle ne dépend pas du milieu', 'is_correct' => false],
                            ['choice_text' => 'les oiseaux choisissent la couleur de leur plumage', 'is_correct' => false],
                            ['choice_text' => 'un caractère peut être avantageux dans un milieu et pas dans un autre', 'is_correct' => true],
                        ],
                        'explanation' => 'L’avantage d’un caractère dépend du milieu : c’est pourquoi la sélection naturelle est liée à l’environnement.',
                    ],
                    [
                        'question' => 'Un caractère permet à un animal de vivre très longtemps, mais le rend incapable de se reproduire. Va-t-il se répandre dans la population ?',
                        'choices' => [
                            ['choice_text' => 'non, car il n’est pas transmis à la génération suivante', 'is_correct' => true],
                            ['choice_text' => 'oui, car l’animal survit plus longtemps', 'is_correct' => false],
                            ['choice_text' => 'oui, car la survie compte plus que la reproduction', 'is_correct' => false],
                            ['choice_text' => 'oui, car il protège aussi ses descendants', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour se répandre, un caractère doit être transmis : sans reproduction, il disparaît avec l’individu.',
                    ],
                    [
                        'question' => 'En évolution, la réussite d’un individu se mesure à sa contribution à la génération suivante. Que compte-t-on pour la mesurer ?',
                        'choices' => [
                            ['choice_text' => 'le nombre d’années vécues par l’individu', 'is_correct' => false],
                            ['choice_text' => 'la taille de l’individu à l’âge adulte', 'is_correct' => false],
                            ['choice_text' => 'le nombre de descendants qui survivent et se reproduisent', 'is_correct' => true],
                            ['choice_text' => 'la force physique de l’individu', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce que l’on appelle la valeur sélective, ou fitness, se mesure au nombre de descendants laissés, pas à la force ni à la durée de vie.',
                    ],
                    [
                        'question' => 'Deux variantes de couleur d’un papillon offrent la même survie et le même nombre de descendants dans un milieu. Que dire de la sélection entre elles ?',
                        'choices' => [
                            ['choice_text' => 'elle est très forte, car elles sont nombreuses', 'is_correct' => false],
                            ['choice_text' => 'elle est faible, car ni l’une ni l’autre ne l’emporte', 'is_correct' => true],
                            ['choice_text' => 'elle favorise la première par ordre d’apparition', 'is_correct' => false],
                            ['choice_text' => 'elle favorise la plus colorée', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans différence de survie ni de reproduction, la sélection n’a aucune raison de favoriser l’une des variantes.',
                    ],
                    [
                        'question' => 'Sur une île, des lézards aux pattes plus longues courent plus vite et échappent mieux aux prédateurs ; ce caractère devient courant. Comment interpréter cette évolution ?',
                        'choices' => [
                            ['choice_text' => 'comme un effort des lézards pour courir plus vite', 'is_correct' => false],
                            ['choice_text' => 'comme une preuve que les pattes s’allongent à l’usage', 'is_correct' => false],
                            ['choice_text' => 'comme une absence de variation dans la population', 'is_correct' => false],
                            ['choice_text' => 'comme une adaptation apparue par sélection naturelle', 'is_correct' => true],
                        ],
                        'explanation' => 'Les lézards aux pattes longues survivaient mieux et laissaient plus de descendants, ce qui a répandu ce caractère.',
                    ],
                ],
            ],
            [
                'title' => 'Dérive génétique et flux de gènes',
                'description' => 'Comprendre le rôle du hasard, des petites populations et des migrations dans l’évolution.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Dans une petite population, certaines variantes de gènes disparaissent par pur hasard, sans avantage ni désavantage. Comment appelle-t-on ce phénomène ?',
                        'choices' => [
                            ['choice_text' => 'la dérive génétique', 'is_correct' => true],
                            ['choice_text' => 'la sélection naturelle', 'is_correct' => false],
                            ['choice_text' => 'la migration', 'is_correct' => false],
                            ['choice_text' => 'la mutation', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérive génétique est un changement de la fréquence des variantes dû au seul hasard de la reproduction.',
                    ],
                    [
                        'question' => 'Une réserve compte 20 gazelles, une autre 2 000. Dans laquelle le hasard peut-il le plus changer la proportion d’une variante en quelques générations ?',
                        'choices' => [
                            ['choice_text' => 'dans la réserve de 2 000 gazelles', 'is_correct' => false],
                            ['choice_text' => 'dans les deux de la même façon', 'is_correct' => false],
                            ['choice_text' => 'dans la réserve de 20 gazelles', 'is_correct' => true],
                            ['choice_text' => 'ni dans l’une ni dans l’autre', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus une population est petite, plus le hasard de la reproduction pèse sur la proportion des variantes.',
                    ],
                    [
                        'question' => 'Dans une petite population, que peut provoquer la dérive génétique à long terme ?',
                        'choices' => [
                            ['choice_text' => 'une adaptation voulue par les individus de la population', 'is_correct' => false],
                            ['choice_text' => 'la création de nouvelles variantes pour répondre aux besoins du milieu', 'is_correct' => false],
                            ['choice_text' => 'la formation d’un nouvel écosystème dans la population', 'is_correct' => false],
                            ['choice_text' => 'la disparition de certaines variantes ou leur présence chez tous les individus', 'is_correct' => true],
                        ],
                        'explanation' => 'Au fil des générations, le hasard peut éliminer une variante ou la rendre présente chez tous les individus.',
                    ],
                    [
                        'question' => 'Une inondation tue au hasard la plupart des individus d’une petite population de grenouilles. Les survivantes ne portent qu’une partie des variantes d’origine. Que peut-on dire de la diversité génétique ?',
                        'choices' => [
                            ['choice_text' => 'elle augmente, car il y a moins de concurrence', 'is_correct' => false],
                            ['choice_text' => 'elle diminue, par un effet de hasard', 'is_correct' => true],
                            ['choice_text' => 'elle reste la même, car l’espèce survit', 'is_correct' => false],
                            ['choice_text' => 'elle double, car les survivantes se reproduisent vite', 'is_correct' => false],
                        ],
                        'explanation' => 'Les survivantes n’emportent qu’une partie de la diversité de départ : la perte est due au hasard, pas à un avantage.',
                    ],
                    [
                        'question' => 'Quelques oiseaux fondent une nouvelle population sur une île. En quoi cette population peut-elle différer de celle du continent ?',
                        'choices' => [
                            ['choice_text' => 'elle porte davantage de variantes que la population d’origine', 'is_correct' => false],
                            ['choice_text' => 'elle descend d’une autre espèce de l’île', 'is_correct' => false],
                            ['choice_text' => 'elle ne porte qu’une partie des variantes de la population d’origine', 'is_correct' => true],
                            ['choice_text' => 'elle est formée d’individus qui ont muté en arrivant', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est l’effet fondateur : un petit groupe n’emporte avec lui qu’une partie de la diversité de la population d’origine.',
                    ],
                    [
                        'question' => 'Des oiseaux d’une forêt traversent régulièrement la vallée pour se reproduire dans une autre forêt. Comment nomme-t-on ce transfert de gènes entre populations ?',
                        'choices' => [
                            ['choice_text' => 'le flux de gènes', 'is_correct' => true],
                            ['choice_text' => 'la dérive génétique', 'is_correct' => false],
                            ['choice_text' => 'la sélection artificielle', 'is_correct' => false],
                            ['choice_text' => 'la spéciation', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand des individus migrent puis se reproduisent, ils apportent leurs variantes à l’autre population : c’est le flux de gènes.',
                    ],
                    [
                        'question' => 'Des individus venus de la population A s’installent dans la population B et s’y reproduisent. Que gagne la population B ?',
                        'choices' => [
                            ['choice_text' => 'une réduction de sa diversité', 'is_correct' => false],
                            ['choice_text' => 'de nouvelles variantes de gènes', 'is_correct' => true],
                            ['choice_text' => 'une protection contre la sélection', 'is_correct' => false],
                            ['choice_text' => 'une nouvelle espèce aussitôt', 'is_correct' => false],
                        ],
                        'explanation' => 'Les migrants apportent des variantes absentes ou rares dans la population B.',
                    ],
                    [
                        'question' => 'Une population isolée de 30 individus voit une variante passer de 50 % à 30 % en quelques générations, sans qu’aucun avantage ne soit connu. Quelle explication est la plus plausible ?',
                        'choices' => [
                            ['choice_text' => 'une adaptation voulue par les individus de cette petite population', 'is_correct' => false],
                            ['choice_text' => 'une compétition entre espèces voisines de l’île', 'is_correct' => false],
                            ['choice_text' => 'une mutation provoquée par le climat de l’île', 'is_correct' => false],
                            ['choice_text' => 'la dérive génétique, due au hasard dans une petite population', 'is_correct' => true],
                        ],
                        'explanation' => 'En l’absence d’avantage connu et dans un petit effectif, le hasard suffit à expliquer le changement.',
                    ],
                    [
                        'question' => 'Si des individus passent régulièrement d’une population à l’autre, que devient la ressemblance génétique des deux populations ?',
                        'choices' => [
                            ['choice_text' => 'elles deviennent plus différentes', 'is_correct' => false],
                            ['choice_text' => 'elles deviennent deux espèces', 'is_correct' => false],
                            ['choice_text' => 'elles deviennent plus semblables', 'is_correct' => true],
                            ['choice_text' => 'elles ne changent pas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le flux de gènes mélange les variantes des deux populations, qui se rapprochent génétiquement.',
                    ],
                    [
                        'question' => 'Dans une population de 200 papillons, 60 portent une variante de couleur. Après une tempête, il ne reste au hasard que 50 papillons, dont 10 la portent. Quelle est la nouvelle proportion de la variante ?',
                        'choices' => [
                            ['choice_text' => '20 %, contre 30 % avant', 'is_correct' => true],
                            ['choice_text' => '30 %, comme avant', 'is_correct' => false],
                            ['choice_text' => '10 %, contre 30 % avant', 'is_correct' => false],
                            ['choice_text' => '5 %, contre 30 % avant', 'is_correct' => false],
                        ],
                        'explanation' => 'Avant : 60 ÷ 200 = 30 %. Après : 10 ÷ 50 = 20 %. Le hasard a modifié la proportion.',
                    ],
                ],
            ],
            [
                'title' => 'Mutations, recombinaison et variation',
                'description' => 'Relier mutations et reproduction sexuée à la diversité génétique.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une mutation est :',
                        'choices' => [
                            ['choice_text' => 'un changement voulu du comportement', 'is_correct' => false],
                            ['choice_text' => 'une rencontre entre deux prédateurs', 'is_correct' => false],
                            ['choice_text' => 'un déplacement saisonnier d’une population', 'is_correct' => false],
                            ['choice_text' => 'un changement dans la séquence d’ADN', 'is_correct' => true],
                        ],
                        'explanation' => 'Une mutation est une modification de la séquence d’ADN ; elle peut créer une nouvelle variante génétique.',
                    ],
                    [
                        'question' => 'Une mutation apparaît dans les cellules de la peau d’un homme, une autre dans les cellules qui fabriquent ses spermatozoïdes. Laquelle peut passer à ses enfants ?',
                        'choices' => [
                            ['choice_text' => 'celle des cellules de la peau de l’homme', 'is_correct' => false],
                            ['choice_text' => 'celle des cellules qui fabriquent les spermatozoïdes', 'is_correct' => true],
                            ['choice_text' => 'les deux, car elles touchent l’ADN', 'is_correct' => false],
                            ['choice_text' => 'ni l’une ni l’autre, car la peau n’a pas d’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Seules les mutations des cellules reproductrices peuvent se transmettre à la descendance.',
                    ],
                    [
                        'question' => 'Pendant la formation des cellules reproductrices, les chromosomes échangent des morceaux d’ADN. Quel est l’effet de cet échange ?',
                        'choices' => [
                            ['choice_text' => 'il crée de nouvelles combinaisons de variantes', 'is_correct' => true],
                            ['choice_text' => 'il supprime les différences entre descendants', 'is_correct' => false],
                            ['choice_text' => 'il fabrique de nouvelles espèces', 'is_correct' => false],
                            ['choice_text' => 'il empêche les mutations', 'is_correct' => false],
                        ],
                        'explanation' => 'Cet échange, la recombinaison, mélange des variantes déjà présentes et produit de nouvelles combinaisons.',
                    ],
                    [
                        'question' => 'Deux sœurs ont les mêmes parents mais des combinaisons de gènes différentes. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'une mutation chez chacun des parents à la naissance', 'is_correct' => false],
                            ['choice_text' => 'la sélection naturelle avant la conception', 'is_correct' => false],
                            ['choice_text' => 'le mélange des gènes à la formation des cellules reproductrices', 'is_correct' => true],
                            ['choice_text' => 'l’alimentation de la mère pendant la grossesse et après la naissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque cellule reproductrice porte un mélange différent ; sauf pour de vrais jumeaux, les enfants ont donc des combinaisons uniques.',
                    ],
                    [
                        'question' => 'Une mutation apparaît chez un poisson. Que peut-on dire de son effet ?',
                        'choices' => [
                            ['choice_text' => 'il est nocif, car l’ADN doit rester intact', 'is_correct' => false],
                            ['choice_text' => 'il est avantageux, car une nouveauté améliore l’individu', 'is_correct' => false],
                            ['choice_text' => 'il est sans conséquence, car l’ADN ne contrôle pas les caractères', 'is_correct' => false],
                            ['choice_text' => 'il peut être nul, nocif ou avantageux selon le milieu', 'is_correct' => true],
                        ],
                        'explanation' => 'L’effet d’une mutation dépend du changement produit et du milieu : il peut être neutre, nuisible ou utile.',
                    ],
                    [
                        'question' => 'Une mutation change une protéine d’un papillon, sans modifier sa survie ni le nombre de ses descendants. Comment la qualifier ?',
                        'choices' => [
                            ['choice_text' => 'nocive pour l’espèce', 'is_correct' => false],
                            ['choice_text' => 'neutre dans ce milieu', 'is_correct' => true],
                            ['choice_text' => 'avantageuse pour l’espèce', 'is_correct' => false],
                            ['choice_text' => 'mortelle pour le papillon', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation sans effet sur la survie ni sur la reproduction est neutre dans le milieu considéré.',
                    ],
                    [
                        'question' => 'Les mutations sont une source de nouveauté génétique. Qu’apportent-elles à une population ?',
                        'choices' => [
                            ['choice_text' => 'des copies des variantes déjà présentes', 'is_correct' => false],
                            ['choice_text' => 'une protection contre la sélection naturelle et la dérive', 'is_correct' => false],
                            ['choice_text' => 'de nouvelles variantes d’ADN qui n’existaient pas avant', 'is_correct' => true],
                            ['choice_text' => 'une réduction de la diversité génétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mutations introduisent des variantes que la sélection, la dérive et les autres mécanismes pourront ensuite faire évoluer.',
                    ],
                    [
                        'question' => 'Deux plants de pois portent, l’un des grains lisses et jaunes, l’autre des grains ridés et verts. Leur descendance peut avoir des grains lisses et verts. Quel mécanisme rend cette combinaison possible ?',
                        'choices' => [
                            ['choice_text' => 'le brassage des variantes déjà présentes', 'is_correct' => true],
                            ['choice_text' => 'une mutation provoquée par le croisement', 'is_correct' => false],
                            ['choice_text' => 'la sélection naturelle des graines', 'is_correct' => false],
                            ['choice_text' => 'une adaptation volontaire de la plante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les variantes existent déjà chez les parents ; la reproduction sexuée les assemble autrement.',
                    ],
                    [
                        'question' => 'Un adulte développe une mutation dans une cellule de son foie. Que peut-on dire pour ses enfants ?',
                        'choices' => [
                            ['choice_text' => 'elle sera transmise à ses enfants', 'is_correct' => false],
                            ['choice_text' => 'elle deviendra une nouvelle espèce', 'is_correct' => false],
                            ['choice_text' => 'elle augmentera leur nombre de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'elle ne leur sera pas transmise', 'is_correct' => true],
                        ],
                        'explanation' => 'Seules les mutations des cellules reproductrices se transmettent ; celle du foie reste dans l’individu.',
                    ],
                    [
                        'question' => 'Quelles sont deux sources de diversité génétique dans une population ?',
                        'choices' => [
                            ['choice_text' => 'la croissance et la digestion', 'is_correct' => false],
                            ['choice_text' => 'les mutations et la reproduction sexuée', 'is_correct' => true],
                            ['choice_text' => 'la température et la pluie', 'is_correct' => false],
                            ['choice_text' => 'la compétition et la prédation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mutations créent de nouvelles variantes ; la reproduction sexuée les mélange en de nouvelles combinaisons.',
                    ],
                ],
            ],
            [
                'title' => 'Spéciation et isolement reproductif',
                'description' => 'Comprendre comment des populations peuvent diverger jusqu’à former des espèces distinctes.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La spéciation, c’est :',
                        'choices' => [
                            ['choice_text' => 'la formation de nouvelles espèces à partir d’une espèce ancestrale', 'is_correct' => true],
                            ['choice_text' => 'la croissance d’un individu jusqu’à l’âge adulte', 'is_correct' => false],
                            ['choice_text' => 'la disparition d’un gène chez une personne au cours de sa vie adulte', 'is_correct' => false],
                            ['choice_text' => 'la migration saisonnière d’un animal', 'is_correct' => false],
                        ],
                        'explanation' => 'La spéciation est le processus évolutif par lequel de nouvelles espèces apparaissent.',
                    ],
                    [
                        'question' => 'Un fleuve change de cours et sépare une population d’écureuils en deux groupes qui ne se rencontrent plus. Comment nomme-t-on cette situation ?',
                        'choices' => [
                            ['choice_text' => 'un mutualisme', 'is_correct' => false],
                            ['choice_text' => 'un flux de gènes accru', 'is_correct' => false],
                            ['choice_text' => 'un cycle biogéochimique', 'is_correct' => false],
                            ['choice_text' => 'un isolement géographique', 'is_correct' => true],
                        ],
                        'explanation' => 'Une barrière géographique sépare les populations et arrête les échanges de gènes entre elles.',
                    ],
                    [
                        'question' => 'Dans une même forêt, deux populations de grenouilles se reproduisent l’une en mars, l’autre en juin. Quel type d’isolement cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => 'un isolement géologique', 'is_correct' => false],
                            ['choice_text' => 'un isolement temporel', 'is_correct' => true],
                            ['choice_text' => 'un isolement alimentaire', 'is_correct' => false],
                            ['choice_text' => 'un isolement par la taille', 'is_correct' => false],
                        ],
                        'explanation' => 'Des saisons de reproduction différentes empêchent les deux populations de se croiser.',
                    ],
                    [
                        'question' => 'Deux populations se croisent encore, mais n’ont plus de petits fertiles. Que montre cela ?',
                        'choices' => [
                            ['choice_text' => 'qu’elles n’ont pas évolué séparément', 'is_correct' => false],
                            ['choice_text' => 'que le flux de gènes est au maximum', 'is_correct' => false],
                            ['choice_text' => 'qu’elles sont fortement isolées sur le plan de la reproduction', 'is_correct' => true],
                            ['choice_text' => 'qu’elles sont deux populations de la même espèce qui se croisent librement', 'is_correct' => false],
                        ],
                        'explanation' => 'Si leurs croisements ne donnent plus de descendants fertiles, les gènes ne circulent plus entre elles : c’est un isolement reproductif.',
                    ],
                    [
                        'question' => 'Une chaîne de montagnes se soulève entre deux populations d’insectes. À long terme, que peut-il arriver à leurs gènes ?',
                        'choices' => [
                            ['choice_text' => 'elles accumulent des différences, car les gènes ne circulent plus', 'is_correct' => true],
                            ['choice_text' => 'elles restent identiques, car l’espèce est la même au départ', 'is_correct' => false],
                            ['choice_text' => 'elles échangent davantage de gènes d’une montagne à l’autre', 'is_correct' => false],
                            ['choice_text' => 'elles perdent leurs mutations au fil du temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Séparées, les populations évoluent chacune de leur côté et deviennent de plus en plus différentes.',
                    ],
                    [
                        'question' => 'Deux groupes séparés depuis longtemps diffèrent par la taille et la couleur. Pour parler de deux espèces, que faut-il vérifier en priorité ?',
                        'choices' => [
                            ['choice_text' => 's’ils sont de tailles différentes', 'is_correct' => false],
                            ['choice_text' => 's’ils vivent dans des régions différentes de la planète depuis longtemps', 'is_correct' => false],
                            ['choice_text' => 's’ils ont des couleurs différentes', 'is_correct' => false],
                            ['choice_text' => 's’ils peuvent encore avoir ensemble des petits fertiles', 'is_correct' => true],
                        ],
                        'explanation' => 'Les différences d’aspect ne suffisent pas : l’existence de barrières à la reproduction est le critère important.',
                    ],
                    [
                        'question' => 'Dans un lac, des poissons préfèrent s’accoupler avec des partenaires de leur couleur ; les deux groupes se croisent très peu. Quel est l’effet à long terme ?',
                        'choices' => [
                            ['choice_text' => 'les gènes circulent davantage entre les groupes', 'is_correct' => false],
                            ['choice_text' => 'les groupes redeviennent identiques', 'is_correct' => false],
                            ['choice_text' => 'les gènes circulent moins et les groupes peuvent diverger', 'is_correct' => true],
                            ['choice_text' => 'les mutations s’arrêtent chez ces poissons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une préférence pour des partenaires semblables réduit les croisements entre groupes et favorise leur divergence.',
                    ],
                    [
                        'question' => 'Deux espèces d’oiseaux ont des chants de séduction différents, et chaque femelle ignore le chant de l’autre espèce. Que se passe-t-il ?',
                        'choices' => [
                            ['choice_text' => 'les deux espèces se mélangent plus facilement', 'is_correct' => false],
                            ['choice_text' => 'les croisements n’ont pas lieu, ce qui isole les deux espèces', 'is_correct' => true],
                            ['choice_text' => 'les femelles produisent des mâles de l’autre espèce', 'is_correct' => false],
                            ['choice_text' => 'les chants deviennent identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Des chants différents empêchent les accouplements entre espèces : c’est une barrière qui agit avant la fécondation.',
                    ],
                    [
                        'question' => 'Un âne et une jument donnent un mulet, qui est stérile. Que montre cet exemple ?',
                        'choices' => [
                            ['choice_text' => 'que l’âne et le cheval sont de la même espèce, puisqu’ils s’accouplent', 'is_correct' => false],
                            ['choice_text' => 'que les hybrides sont plus résistants et plus fertiles que leurs parents', 'is_correct' => false],
                            ['choice_text' => 'que le cheval descend directement de l’âne', 'is_correct' => false],
                            ['choice_text' => 'que ces espèces restent séparées, car leur hybride est sans descendance', 'is_correct' => true],
                        ],
                        'explanation' => 'L’hybride existe mais ne peut pas se reproduire : c’est une barrière qui agit après la fécondation et maintient les deux espèces séparées.',
                    ],
                    [
                        'question' => 'Pour qu’une divergence entre deux populations débouche sur deux espèces, quelle condition est importante ?',
                        'choices' => [
                            ['choice_text' => 'que les échanges de gènes entre elles diminuent durablement', 'is_correct' => true],
                            ['choice_text' => 'que les croisements entre elles augmentent d’une génération à l’autre', 'is_correct' => false],
                            ['choice_text' => 'que la variation génétique disparaisse', 'is_correct' => false],
                            ['choice_text' => 'que la sélection naturelle s’arrête', 'is_correct' => false],
                        ],
                        'explanation' => 'Si les gènes ne circulent plus, chaque population accumule ses propres différences, jusqu’à un isolement reproductif.',
                    ],
                ],
            ],
            [
                'title' => 'Preuves de l’évolution',
                'description' => 'Fossiles, anatomie comparée, embryologie, biogéographie et biologie moléculaire.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Que peut nous apprendre un fossile ?',
                        'choices' => [
                            ['choice_text' => 'la météo prévue pour la semaine prochaine dans la région de la carrière', 'is_correct' => false],
                            ['choice_text' => 'le nombre de gènes d’une espèce actuelle', 'is_correct' => false],
                            ['choice_text' => 'à quoi ressemblaient des êtres vivants du passé et dans quel milieu', 'is_correct' => true],
                            ['choice_text' => 'le régime alimentaire des humains modernes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fossiles sont des archives de la vie passée : forme des organismes, milieu et changements au cours du temps.',
                    ],
                    [
                        'question' => 'Le bras humain, l’aile de la chauve-souris et la nageoire de la baleine ont les mêmes os, disposés de façon comparable, mais servent à des usages différents. Comment appelle-t-on ces structures ?',
                        'choices' => [
                            ['choice_text' => 'des structures analogues', 'is_correct' => false],
                            ['choice_text' => 'des structures homologues', 'is_correct' => true],
                            ['choice_text' => 'des structures minérales', 'is_correct' => false],
                            ['choice_text' => 'des structures vestigiales', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plan d’organisation commun malgré des fonctions différentes indique un ancêtre commun : ce sont des structures homologues.',
                    ],
                    [
                        'question' => 'L’aile d’un oiseau et celle d’un papillon servent toutes deux à voler, mais leur structure est très différente. Comment les qualifie-t-on ?',
                        'choices' => [
                            ['choice_text' => 'analogues', 'is_correct' => true],
                            ['choice_text' => 'homologues', 'is_correct' => false],
                            ['choice_text' => 'identiques', 'is_correct' => false],
                            ['choice_text' => 'héréditaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Des structures analogues ont la même fonction mais pas la même origine évolutive.',
                    ],
                    [
                        'question' => 'Pour savoir si deux espèces sont proches parentes, que peut comparer un chercheur ?',
                        'choices' => [
                            ['choice_text' => 'leur taille à l’âge adulte', 'is_correct' => false],
                            ['choice_text' => 'la durée de leur sommeil', 'is_correct' => false],
                            ['choice_text' => 'leur lieu de vie actuel', 'is_correct' => false],
                            ['choice_text' => 'leurs séquences d’ADN', 'is_correct' => true],
                        ],
                        'explanation' => 'Plus les séquences d’ADN de deux espèces se ressemblent, plus leur ancêtre commun est récent.',
                    ],
                    [
                        'question' => 'Deux espèces ont des séquences d’ADN très proches. Que cela suggère-t-il ?',
                        'choices' => [
                            ['choice_text' => 'qu’elles sont de la même espèce', 'is_correct' => false],
                            ['choice_text' => 'un ancêtre commun relativement récent', 'is_correct' => true],
                            ['choice_text' => 'qu’elles vivent au même endroit', 'is_correct' => false],
                            ['choice_text' => 'qu’elles ont le même régime alimentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Des séquences très proches reflètent une parenté étroite : les deux lignées se sont séparées il y a relativement peu de temps.',
                    ],
                    [
                        'question' => 'Sur les îles Galápagos, Darwin a observé des pinsons voisins mais au bec différent d’une île à l’autre. Que peut expliquer cette répartition ?',
                        'choices' => [
                            ['choice_text' => 'une création indépendante de chaque pinson sur son île', 'is_correct' => false],
                            ['choice_text' => 'un transport par l’homme depuis l’Europe', 'is_correct' => false],
                            ['choice_text' => 'une diversification à partir d’ancêtres communs venus du continent', 'is_correct' => true],
                            ['choice_text' => 'une absence de lien entre les oiseaux de chaque île', 'is_correct' => false],
                        ],
                        'explanation' => 'Des pinsons arrivés du continent se sont diversifiés île après île, chaque forme de bec s’ajustant à la nourriture disponible.',
                    ],
                    [
                        'question' => 'La plupart des mammifères de Madagascar n’existent nulle part ailleurs. Que suggère cette répartition ?',
                        'choices' => [
                            ['choice_text' => 'qu’ils ont été importés d’Afrique par l’homme il y a quelques siècles', 'is_correct' => false],
                            ['choice_text' => 'qu’ils ont le même ADN que ceux d’Afrique', 'is_correct' => false],
                            ['choice_text' => 'qu’ils n’ont pas d’ancêtres parmi les mammifères connus', 'is_correct' => false],
                            ['choice_text' => 'qu’ils ont évolué sur place à partir d’ancêtres arrivés puis isolés', 'is_correct' => true],
                        ],
                        'explanation' => 'L’isolement de l’île a permis à des lignées d’y évoluer à part, d’où des espèces qu’on ne trouve nulle part ailleurs.',
                    ],
                    [
                        'question' => 'Certains serpents, comme les boas, ont de minuscules os de pattes cachés sous la peau. Que suggèrent-ils ?',
                        'choices' => [
                            ['choice_text' => 'que leurs ancêtres avaient des pattes', 'is_correct' => true],
                            ['choice_text' => 'que ces serpents vont bientôt retrouver des pattes', 'is_correct' => false],
                            ['choice_text' => 'que ces os servent à ramper plus vite', 'is_correct' => false],
                            ['choice_text' => 'que ces os sont une maladie de l’espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces os réduits sont des organes vestigiaux : un héritage d’ancêtres à pattes.',
                    ],
                    [
                        'question' => 'Les embryons de poisson, de poule et d’humain se ressemblent beaucoup au début de leur développement. Que peut suggérer cette ressemblance ?',
                        'choices' => [
                            ['choice_text' => 'qu’ils appartiennent à la même espèce', 'is_correct' => false],
                            ['choice_text' => 'que le milieu de vie les rend identiques', 'is_correct' => false],
                            ['choice_text' => 'un héritage commun d’ancêtres lointains', 'is_correct' => true],
                            ['choice_text' => 'que leurs gènes ne jouent pas de rôle', 'is_correct' => false],
                        ],
                        'explanation' => 'Des ressemblances précoces de développement peuvent refléter un héritage évolutif commun.',
                    ],
                    [
                        'question' => 'L’hémoglobine de l’humain et celle du chimpanzé sont presque identiques. Comment interpréter cette ressemblance ?',
                        'choices' => [
                            ['choice_text' => 'comme la preuve qu’ils habitent le même milieu', 'is_correct' => false],
                            ['choice_text' => 'comme un indice de parenté entre les deux espèces', 'is_correct' => true],
                            ['choice_text' => 'comme la preuve qu’ils mangent la même nourriture', 'is_correct' => false],
                            ['choice_text' => 'comme la preuve qu’ils sont la même espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Des protéines presque identiques sont une ligne de preuve supplémentaire en faveur d’une parenté évolutive.',
                    ],
                ],
            ],
            [
                'title' => 'Adaptation et évolution en pratique',
                'description' => 'Analyser des exemples d’adaptation, de sélection et de changement des populations.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Dans une région enneigée, les lièvres au pelage blanc sont moins repérés par les renards en hiver. Si cette couleur est héréditaire, que prévoir au fil des générations ?',
                        'choices' => [
                            ['choice_text' => 'les lièvres blancs deviendront plus rares', 'is_correct' => false],
                            ['choice_text' => 'les lièvres blancs deviendront plus nombreux', 'is_correct' => true],
                            ['choice_text' => 'chaque lièvre changera de couleur en un hiver', 'is_correct' => false],
                            ['choice_text' => 'la couleur n’aura pas d’effet sur la survie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un meilleur camouflage réduit la prédation et augmente la reproduction des porteurs, si le caractère est héréditaire.',
                    ],
                    [
                        'question' => 'Dans une prairie, des fleurs rouges attirent plus d’abeilles que des fleurs pâles et produisent davantage de graines. Si la couleur est héréditaire, que peut-il arriver ?',
                        'choices' => [
                            ['choice_text' => 'les fleurs rouges peuvent devenir plus fréquentes', 'is_correct' => true],
                            ['choice_text' => 'les fleurs pâles vont devenir plus fréquentes', 'is_correct' => false],
                            ['choice_text' => 'les fleurs rouges vont changer de couleur', 'is_correct' => false],
                            ['choice_text' => 'les deux couleurs vont disparaître', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus de graines signifie plus de descendants : la couleur rouge peut se répandre par sélection.',
                    ],
                    [
                        'question' => 'Avant un traitement, 1 % des bactéries d’une culture sont résistantes à un antibiotique. Après plusieurs générations sous traitement, elles sont 40 %. Que montre ce résultat ?',
                        'choices' => [
                            ['choice_text' => 'l’antibiotique a rendu résistantes les bactéries sensibles pendant le traitement', 'is_correct' => false],
                            ['choice_text' => 'les bactéries ont choisi de devenir résistantes pour survivre', 'is_correct' => false],
                            ['choice_text' => 'le traitement a favorisé les bactéries résistantes, dont la part a augmenté', 'is_correct' => true],
                            ['choice_text' => 'la résistance n’a pas d’effet sur la survie des bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'La proportion de bactéries résistantes est passée de 1 % à 40 % : sous traitement, elles survivent et se multiplient mieux.',
                    ],
                    [
                        'question' => 'Un animal a une épaisse fourrure, utile dans les montagnes froides, mais peu utile dans un désert chaud. Que montre cet exemple ?',
                        'choices' => [
                            ['choice_text' => 'l’avantage d’un caractère dépend du milieu', 'is_correct' => true],
                            ['choice_text' => 'un caractère avantageux garde son intérêt dans un autre milieu', 'is_correct' => false],
                            ['choice_text' => 'la sélection naturelle ignore le milieu', 'is_correct' => false],
                            ['choice_text' => 'les caractères ne peuvent pas changer', 'is_correct' => false],
                        ],
                        'explanation' => 'Un caractère n’est avantageux que dans certaines conditions : l’adaptation est relative au milieu.',
                    ],
                    [
                        'question' => 'Deux populations de lézards vivent l’une sur des rochers lisses, l’autre sur des branches rugueuses, et leurs pattes diffèrent. Comment vérifier que cette différence est une adaptation ?',
                        'choices' => [
                            ['choice_text' => 'admettre que la différence est utile sans la tester', 'is_correct' => false],
                            ['choice_text' => 'ignorer les gènes des deux populations', 'is_correct' => false],
                            ['choice_text' => 'mesurer la taille des lézards sans regarder le milieu', 'is_correct' => false],
                            ['choice_text' => 'comparer la forme des pattes, le milieu et le nombre de descendants', 'is_correct' => true],
                        ],
                        'explanation' => 'Il faut relier le caractère au milieu et à un avantage de survie ou de reproduction, et vérifier qu’il est héréditaire.',
                    ],
                    [
                        'question' => 'Sur une petite île, une variante de couleur se répand sans qu’aucun avantage ne soit trouvé. Quel mécanisme peut-on envisager ?',
                        'choices' => [
                            ['choice_text' => 'une sélection naturelle forte', 'is_correct' => false],
                            ['choice_text' => 'la dérive génétique', 'is_correct' => true],
                            ['choice_text' => 'une migration massive', 'is_correct' => false],
                            ['choice_text' => 'la reproduction asexuée', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une petite population, les proportions peuvent changer au hasard, sans avantage sélectif.',
                    ],
                    [
                        'question' => 'Une même adaptation peut être utile à une époque et moins utile à une autre. Que veut-on dire en la qualifiant de relative ?',
                        'choices' => [
                            ['choice_text' => 'son intérêt dépend des conditions du milieu à un moment donné', 'is_correct' => true],
                            ['choice_text' => 'elle change chaque jour chez chaque individu', 'is_correct' => false],
                            ['choice_text' => 'elle n’est pas transmise aux descendants', 'is_correct' => false],
                            ['choice_text' => 'elle n’existe pas chez les êtres vivants actuels', 'is_correct' => false],
                        ],
                        'explanation' => 'Un caractère adapté à un milieu peut devenir moins avantageux quand les conditions changent.',
                    ],
                    [
                        'question' => 'Après plusieurs années de traitement, un insecticide tue de moins en moins de moustiques. Quelle est l’explication la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'chaque moustique s’est habitué en choisissant de résister', 'is_correct' => false],
                            ['choice_text' => 'les moustiques ont appris à éviter l’insecticide pendant leur vie', 'is_correct' => false],
                            ['choice_text' => 'les moustiques ont migré vers un autre continent', 'is_correct' => false],
                            ['choice_text' => 'les moustiques résistants se sont multipliés et sont devenus plus fréquents', 'is_correct' => true],
                        ],
                        'explanation' => 'Les moustiques porteurs de variantes de résistance survivent et laissent plus de descendants : la résistance se répand.',
                    ],
                    [
                        'question' => 'Un caractère aide un animal à survivre mais réduit beaucoup le nombre de ses petits. Que peut-on dire de son avenir dans la population ?',
                        'choices' => [
                            ['choice_text' => 'il se répandra très vite, car la survie suffit', 'is_correct' => false],
                            ['choice_text' => 'il n’a pas d’effet sur la population', 'is_correct' => false],
                            ['choice_text' => 'son avantage est réduit, car la reproduction compte autant que la survie', 'is_correct' => true],
                            ['choice_text' => 'il disparaîtra dès la première génération', 'is_correct' => false],
                        ],
                        'explanation' => 'La sélection agit sur le nombre de descendants : vivre longtemps ne suffit pas si l’on se reproduit peu.',
                    ],
                    [
                        'question' => 'Une variante avantageuse est portée par 30 animaux sur 100. À la génération suivante, 45 jeunes sur 100 la portent. Que montre ce passage de 30 % à 45 % ?',
                        'choices' => [
                            ['choice_text' => 'une baisse de 15 points de la proportion de la variante', 'is_correct' => false],
                            ['choice_text' => 'une hausse de 15 points de la proportion de la variante', 'is_correct' => true],
                            ['choice_text' => 'une hausse de 45 points de la proportion de la variante', 'is_correct' => false],
                            ['choice_text' => 'une hausse de 75 points de la proportion de la variante', 'is_correct' => false],
                        ],
                        'explanation' => '45 − 30 = 15 : la proportion a gagné 15 points de pourcentage en une génération.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de l’évolution',
                'description' => 'Synthèse sur sélection naturelle, dérive, variation, spéciation et preuves évolutives.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle phrase distingue correctement sélection naturelle et dérive génétique ?',
                        'choices' => [
                            ['choice_text' => 'les deux désignent le même processus', 'is_correct' => false],
                            ['choice_text' => 'la dérive dépend d’un avantage reproductif, la sélection du hasard', 'is_correct' => false],
                            ['choice_text' => 'la sélection ne concerne que les plantes', 'is_correct' => false],
                            ['choice_text' => 'la sélection tient à un avantage reproductif, la dérive au hasard', 'is_correct' => true],
                        ],
                        'explanation' => 'La sélection naturelle est liée à des différences de réussite reproductive ; la dérive agit de façon aléatoire.',
                    ],
                    [
                        'question' => 'Dans un troupeau, 40 bêtes sur 400 portent une variante. Quelle proportion cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => true],
                            ['choice_text' => '5 %', 'is_correct' => false],
                        ],
                        'explanation' => '40 ÷ 400 = 0,10, soit 10 %.',
                    ],
                    [
                        'question' => 'Deux groupes d’une population sont séparés par une chaîne de montagnes. Au bout de milliers de générations, leurs membres ne peuvent plus se reproduire ensemble. Quel processus a eu lieu ?',
                        'choices' => [
                            ['choice_text' => 'une croissance', 'is_correct' => false],
                            ['choice_text' => 'une spéciation', 'is_correct' => true],
                            ['choice_text' => 'une succession écologique', 'is_correct' => false],
                            ['choice_text' => 'une migration', 'is_correct' => false],
                        ],
                        'explanation' => 'Une divergence accompagnée d’un isolement reproductif aboutit à la formation de nouvelles espèces.',
                    ],
                    [
                        'question' => 'Quel événement peut augmenter la diversité génétique d’une population ?',
                        'choices' => [
                            ['choice_text' => 'la disparition de la moitié des reproducteurs', 'is_correct' => false],
                            ['choice_text' => 'l’arrêt de la reproduction sexuée dans la population', 'is_correct' => false],
                            ['choice_text' => 'l’apparition d’une mutation transmise à la descendance', 'is_correct' => true],
                            ['choice_text' => 'le blocage des échanges avec les autres populations', 'is_correct' => false],
                        ],
                        'explanation' => 'Une nouvelle mutation héréditaire crée une variante qui n’existait pas auparavant.',
                    ],
                    [
                        'question' => 'Un fossile possède des caractères à la fois de poisson et d’amphibien, comme Tiktaalik. Que peut-il illustrer ?',
                        'choices' => [
                            ['choice_text' => 'une forme de transition entre deux groupes', 'is_correct' => true],
                            ['choice_text' => 'la preuve que poissons et amphibiens sont de la même espèce', 'is_correct' => false],
                            ['choice_text' => 'un animal de l’époque actuelle', 'is_correct' => false],
                            ['choice_text' => 'une forme sans lien de parenté avec eux', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fossile aux caractères intermédiaires documente le passage d’un groupe à l’autre au cours de l’évolution.',
                    ],
                    [
                        'question' => 'Deux espèces ont des gènes très proches et des squelettes comparables. Qu’est-ce que cela renforce ?',
                        'choices' => [
                            ['choice_text' => 'l’idée qu’elles appartiennent à la même population', 'is_correct' => false],
                            ['choice_text' => 'l’idée qu’elles vivent au même endroit', 'is_correct' => false],
                            ['choice_text' => 'l’idée qu’elles ont le même âge', 'is_correct' => false],
                            ['choice_text' => 'l’hypothèse d’une parenté évolutive', 'is_correct' => true],
                        ],
                        'explanation' => 'Des données moléculaires et anatomiques qui concordent forment plusieurs lignes de preuve en faveur d’une parenté.',
                    ],
                    [
                        'question' => 'Une variante passe de 5 % à 15 % de la population en quelques générations. Avant de conclure à la sélection naturelle, que faut-il vérifier ?',
                        'choices' => [
                            ['choice_text' => 'si elle est héréditaire et associée à une meilleure survie ou reproduction', 'is_correct' => true],
                            ['choice_text' => 'si la population est de grande taille', 'is_correct' => false],
                            ['choice_text' => 'si les individus qui la portent sont plus colorés', 'is_correct' => false],
                            ['choice_text' => 'si la variante est apparue pendant la vie des individus plutôt qu’à la conception', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse de fréquence seule ne suffit pas : il faut une différence de survie ou de reproduction, et un caractère héréditaire.',
                    ],
                    [
                        'question' => 'Une mutation apparaît dans une cellule du foie d’un adulte. En général, que devient-elle ?',
                        'choices' => [
                            ['choice_text' => 'elle est transmise à ses enfants', 'is_correct' => false],
                            ['choice_text' => 'elle devient une nouvelle espèce', 'is_correct' => false],
                            ['choice_text' => 'elle n’est pas transmise à ses enfants', 'is_correct' => true],
                            ['choice_text' => 'elle augmente la réussite reproductive de l’adulte', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation de cellule non reproductrice reste dans l’individu et ne passe pas à la descendance.',
                    ],
                    [
                        'question' => 'Une population de 15 individus isolée sur une île risque de perdre de la diversité génétique. Quelle explication est correcte ?',
                        'choices' => [
                            ['choice_text' => 'elle contient davantage de variantes qu’une grande population voisine', 'is_correct' => false],
                            ['choice_text' => 'elle reçoit sans cesse de nouveaux gènes venus d’ailleurs', 'is_correct' => false],
                            ['choice_text' => 'elle ne subit pas de mutations, car elle est petite', 'is_correct' => false],
                            ['choice_text' => 'le hasard et la reproduction entre apparentés y ont plus d’effet', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans un petit effectif, le hasard pèse plus et les apparentés se reproduisent entre eux : la diversité s’appauvrit.',
                    ],
                    [
                        'question' => 'Une variante avantageuse devient plus fréquente au fil des générations. Quel mécanisme en est responsable ?',
                        'choices' => [
                            ['choice_text' => 'la dérive génétique, qui agit au hasard dans une petite population', 'is_correct' => false],
                            ['choice_text' => 'la sélection naturelle, qui favorise les porteurs de la variante', 'is_correct' => true],
                            ['choice_text' => 'la mutation, qui fabrique la variante dont la population a besoin', 'is_correct' => false],
                            ['choice_text' => 'l’isolement géographique, qui sépare les populations', 'is_correct' => false],
                        ],
                        'explanation' => 'Si une variante héréditaire augmente la survie ou la reproduction, la sélection naturelle favorise sa progression.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

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