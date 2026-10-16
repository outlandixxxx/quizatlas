<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PaleontologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'paleontology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'La fossilisation et la conservation',
                'description' => 'Comprendre comment des restes ou traces d’organismes peuvent être conservés dans les roches.',
                'settings' => ['duration' => 18, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Un poisson meurt au fond d’un lac et la vase le recouvre vite. Qu’apporte cet enfouissement rapide ?',
                        'choices' => [
                            ['choice_text' => 'Il accélère la décomposition du corps', 'is_correct' => false],
                            ['choice_text' => 'Il met le corps à l’abri des charognards', 'is_correct' => true],
                            ['choice_text' => 'Il attire de nombreux charognards sur le corps enfoui', 'is_correct' => false],
                            ['choice_text' => 'Il dissout les os dans la vase', 'is_correct' => false],
                        ],
                        'explanation' => 'En étant vite recouvert, le corps est protégé des charognards, de l’oxygène et de l’érosion : ses chances de se fossiliser augmentent.',
                    ],
                    [
                        'question' => 'Dans une boue fine, quelle marque peut devenir un fossile de trace laissé par un animal ?',
                        'choices' => [
                            ['choice_text' => 'Les rides formées par le vent sur la boue', 'is_correct' => false],
                            ['choice_text' => 'Les petits cratères de gouttes de pluie', 'is_correct' => false],
                            ['choice_text' => 'Les fentes de la boue qui sèche', 'is_correct' => false],
                            ['choice_text' => 'Les empreintes de pas d’un animal', 'is_correct' => true],
                        ],
                        'explanation' => 'Seule l’empreinte de pas est la trace d’un être vivant ; rides de vent, gouttes de pluie et fentes de séchage sont des marques physiques.',
                    ],
                    [
                        'question' => 'Des coquilles sont enfouies dans du sable. Quel processus transforme ce sable meuble en roche dure ?',
                        'choices' => [
                            ['choice_text' => 'Le tassement puis la cimentation', 'is_correct' => true],
                            ['choice_text' => 'La fusion du sable par la chaleur', 'is_correct' => false],
                            ['choice_text' => 'La dissolution complète des grains', 'is_correct' => false],
                            ['choice_text' => 'L’érosion des grains par le vent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le poids des couches tasse les grains, puis un ciment minéral les soude : on parle de lithification.',
                    ],
                    [
                        'question' => 'Sur un site fossilifère, on trouve beaucoup d’os et de coquilles, rarement des muscles. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les muscles sont trop lourds pour être enfouis', 'is_correct' => false],
                            ['choice_text' => 'Les parties dures sont plus fragiles', 'is_correct' => false],
                            ['choice_text' => 'Les parties molles se décomposent plus vite', 'is_correct' => true],
                            ['choice_text' => 'Les muscles se dissolvent dans la roche mère', 'is_correct' => false],
                        ],
                        'explanation' => 'Les parties molles sont vite détruites par les décomposeurs ; os et coquilles, plus résistants, ont bien plus de chances de se conserver.',
                    ],
                    [
                        'question' => 'Une feuille est ensevelie dans une vase très fine et laisse une marque sombre dans la roche. Quel type de fossile est-ce ?',
                        'choices' => [
                            ['choice_text' => 'Un moulage de coquille', 'is_correct' => false],
                            ['choice_text' => 'Un fossile de racine', 'is_correct' => false],
                            ['choice_text' => 'Une empreinte de feuille', 'is_correct' => true],
                            ['choice_text' => 'Un os minéralisé', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fine vase peut garder la forme et parfois la matière de la feuille sous forme d’empreinte.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui peut détruire un fossile avant son enfouissement ?',
                        'choices' => [
                            ['choice_text' => 'Un long transport qui l’use et le casse', 'is_correct' => true],
                            ['choice_text' => 'Un enfouissement rapide', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt calme de vase fine qui recouvre le fossile', 'is_correct' => false],
                            ['choice_text' => 'Une couverture d’argile', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transport prolongé ou l’exposition à l’érosion usent et brisent les restes ; l’enfouissement les protège.',
                    ],
                    [
                        'question' => 'Dans une tourbière, l’eau manque d’oxygène et les végétaux se décomposent très lentement. Que favorise ce manque d’oxygène ?',
                        'choices' => [
                            ['choice_text' => 'Une décomposition plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Une dissolution rapide des plantes dans l’air libre', 'is_correct' => false],
                            ['choice_text' => 'Une production de roche magmatique', 'is_correct' => false],
                            ['choice_text' => 'La conservation de la matière organique', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans oxygène, les bactéries décomposent mal les végétaux : la matière organique se conserve longtemps.',
                    ],
                    [
                        'question' => 'Un terrier fossile est découvert dans une couche. Que montre-t-il d’un ancien animal ?',
                        'choices' => [
                            ['choice_text' => 'La couleur de sa peau', 'is_correct' => false],
                            ['choice_text' => 'Une activité, comme creuser', 'is_correct' => true],
                            ['choice_text' => 'Son âge précis en années', 'is_correct' => false],
                            ['choice_text' => 'La séquence complète de son ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Un terrier est une trace d’activité : il renseigne sur le comportement de l’animal, pas sur son aspect.',
                    ],
                    [
                        'question' => 'Des coquilles tombent au fond d’une mer calme. Qu’est-ce qui favorise leur conservation ?',
                        'choices' => [
                            ['choice_text' => 'De fortes vagues qui les brassent', 'is_correct' => false],
                            ['choice_text' => 'Des courants qui les roulent sur de longues distances', 'is_correct' => false],
                            ['choice_text' => 'Peu de courants pour les déplacer', 'is_correct' => true],
                            ['choice_text' => 'Un transport par une rivière rapide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une mer calme, les coquilles restent sur place, sont recouvertes de vase et se conservent mieux.',
                    ],
                    [
                        'question' => 'Dans quelle famille de roches trouve-t-on le plus souvent des fossiles ?',
                        'choices' => [
                            ['choice_text' => 'Les roches sédimentaires', 'is_correct' => true],
                            ['choice_text' => 'Les roches magmatiques', 'is_correct' => false],
                            ['choice_text' => 'Les laves refroidies', 'is_correct' => false],
                            ['choice_text' => 'Les roches du manteau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fossiles se trouvent surtout dans les roches sédimentaires, formées de dépôts ; la chaleur d’un magma ou d’une lave détruit les restes organiques.',
                    ],
                ],
            ],
            [
                'title' => 'Types de fossiles et traces du passé',
                'description' => 'Identifier les principaux types de fossiles et ce qu’ils permettent d’étudier.',
                'settings' => ['duration' => 20, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Une coquille fossile garde sa forme en trois dimensions. À quelle catégorie de fossile appartient-elle ?',
                        'choices' => [
                            ['choice_text' => 'Une trace d’activité', 'is_correct' => false],
                            ['choice_text' => 'Une empreinte sans matière', 'is_correct' => false],
                            ['choice_text' => 'Un reste du corps', 'is_correct' => true],
                            ['choice_text' => 'Un sédiment sans fossile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une coquille est une partie du corps de l’animal : conservée, elle forme un fossile corporel.',
                    ],
                    [
                        'question' => 'Quel exemple est un fossile de trace ?',
                        'choices' => [
                            ['choice_text' => 'Un terrier ou une piste de pas', 'is_correct' => true],
                            ['choice_text' => 'Un os minéralisé', 'is_correct' => false],
                            ['choice_text' => 'Une coquille conservée', 'is_correct' => false],
                            ['choice_text' => 'Une dent fossilisée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fossile de trace garde l’activité d’un être vivant (pas, terrier, piste), pas son corps.',
                    ],
                    [
                        'question' => 'Un paléontologue étudie un coprolithe. De quoi s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'D’un os creux fossilisé', 'is_correct' => false],
                            ['choice_text' => 'D’une dent usée', 'is_correct' => false],
                            ['choice_text' => 'D’une coquille enroulée', 'is_correct' => false],
                            ['choice_text' => 'D’excréments fossilisés', 'is_correct' => true],
                        ],
                        'explanation' => 'Un coprolithe est un excrément fossilisé : il renseigne sur le régime alimentaire de l’animal.',
                    ],
                    [
                        'question' => 'Des empreintes parallèles de nombreux animaux traversent une même dalle. Que montre cette piste ?',
                        'choices' => [
                            ['choice_text' => 'L’âge exact de la roche', 'is_correct' => false],
                            ['choice_text' => 'Un déplacement de plusieurs animaux ensemble', 'is_correct' => true],
                            ['choice_text' => 'Un animal isolé qui s’est arrêté pour boire de l’eau', 'is_correct' => false],
                            ['choice_text' => 'Une inondation brutale', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreuses empreintes parallèles suggèrent que plusieurs animaux marchaient dans la même direction, ensemble.',
                    ],
                    [
                        'question' => 'Une ammonite fossile est le reste de quel type d’organisme ?',
                        'choices' => [
                            ['choice_text' => 'Un poisson sans coquille', 'is_correct' => false],
                            ['choice_text' => 'Une plante aquatique', 'is_correct' => false],
                            ['choice_text' => 'Un mammifère terrestre', 'is_correct' => false],
                            ['choice_text' => 'Un animal marin à coquille enroulée', 'is_correct' => true],
                        ],
                        'explanation' => 'Les ammonites étaient des animaux marins à coquille spiralée, parents lointains des poulpes ; on les trouve dans des roches marines.',
                    ],
                    [
                        'question' => 'Que peuvent révéler des feuilles et du pollen fossiles d’un lieu ?',
                        'choices' => [
                            ['choice_text' => 'Le type de végétation et le climat d’autrefois', 'is_correct' => true],
                            ['choice_text' => 'La vitesse moyenne des animaux qui y vivaient autrefois', 'is_correct' => false],
                            ['choice_text' => 'La profondeur d’un ancien océan', 'is_correct' => false],
                            ['choice_text' => 'La date exacte d’une éruption', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plantes dépendent du climat : leurs restes aident à reconstituer la végétation et les conditions d’autrefois.',
                    ],
                    [
                        'question' => 'Quel objet n’est pas un fossile ?',
                        'choices' => [
                            ['choice_text' => 'Une empreinte de trilobite dans la roche', 'is_correct' => false],
                            ['choice_text' => 'Un os minéralisé dans une couche', 'is_correct' => false],
                            ['choice_text' => 'Un coquillage ramassé vivant sur la plage', 'is_correct' => true],
                            ['choice_text' => 'Une feuille fossilisée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fossile est un reste ou une trace d’un être vivant du passé conservé dans la roche ; un coquillage vivant appartient au présent.',
                    ],
                    [
                        'question' => 'Un moulage interne de coquille garde surtout quoi ?',
                        'choices' => [
                            ['choice_text' => 'La couleur de l’animal vivant', 'is_correct' => false],
                            ['choice_text' => 'La forme de l’intérieur de la coquille', 'is_correct' => true],
                            ['choice_text' => 'La température actuelle de l’eau', 'is_correct' => false],
                            ['choice_text' => 'L’âge exact de la roche voisine', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand le sédiment remplit la coquille puis durcit, il garde en creux la forme de l’intérieur de la coquille.',
                    ],
                    [
                        'question' => 'Quels animaux marins, très anciens et à carapace segmentée, ont vécu bien avant les dinosaures ?',
                        'choices' => [
                            ['choice_text' => 'Les baleines', 'is_correct' => false],
                            ['choice_text' => 'Les crocodiles', 'is_correct' => false],
                            ['choice_text' => 'Les ammonites', 'is_correct' => false],
                            ['choice_text' => 'Les trilobites', 'is_correct' => true],
                        ],
                        'explanation' => 'Les trilobites, des arthropodes marins au corps segmenté, ont disparu il y a environ 250 millions d’années, bien avant les dinosaures.',
                    ],
                    [
                        'question' => 'Une coquille laisse son empreinte dans une roche, puis la coquille se dissout. Que reste-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Un moule externe, un creux à la forme de la coquille', 'is_correct' => true],
                            ['choice_text' => 'Un moulage interne plein qui garde la forme du vide intérieur', 'is_correct' => false],
                            ['choice_text' => 'Une coquille intacte posée sur la roche', 'is_correct' => false],
                            ['choice_text' => 'Une trace de pas laissée par un animal', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand la coquille se dissout, il reste un creux qui garde sa forme extérieure : c’est un moule externe.',
                    ],
                    [
                        'question' => 'Les dents d’un animal fossile sont pointues et tranchantes. Que peut-on en déduire ?',
                        'choices' => [
                            ['choice_text' => 'Il mangeait surtout de l’herbe', 'is_correct' => false],
                            ['choice_text' => 'Il mangeait probablement de la viande', 'is_correct' => true],
                            ['choice_text' => 'Il se nourrissait de plancton', 'is_correct' => false],
                            ['choice_text' => 'Il se nourrissait de fruits et de feuilles', 'is_correct' => false],
                        ],
                        'explanation' => 'Des dents pointues et tranchantes servent à déchirer la viande ; des dents plates broient les plantes.',
                    ],
                ],
            ],
            [
                'title' => 'Fossiles stratigraphiques et datation relative',
                'description' => 'Utiliser les fossiles pour comparer l’âge relatif de couches sédimentaires.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'À quoi sert un fossile stratigraphique ?',
                        'choices' => [
                            ['choice_text' => 'À repérer des couches de même âge, même éloignées', 'is_correct' => true],
                            ['choice_text' => 'À mesurer la température d’une roche', 'is_correct' => false],
                            ['choice_text' => 'À calculer la profondeur du manteau', 'is_correct' => false],
                            ['choice_text' => 'À mesurer la salinité de l’océan actuel dans la région', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fossile stratigraphique a vécu peu de temps et partout : le retrouver dans deux couches indique qu’elles ont à peu près le même âge.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui fait d’un fossile un bon fossile stratigraphique ?',
                        'choices' => [
                            ['choice_text' => 'Il a vécu très longtemps dans un petit lac isolé près d’une côte', 'is_correct' => false],
                            ['choice_text' => 'Il est très gros et très rare', 'is_correct' => false],
                            ['choice_text' => 'Il a vécu peu de temps mais sur de vastes régions', 'is_correct' => true],
                            ['choice_text' => 'Il est fragile et difficile à conserver', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bon fossile stratigraphique a une durée de vie courte, ce qui date précisément la couche, et une large répartition, ce qui permet de comparer des régions éloignées.',
                    ],
                    [
                        'question' => 'Deux couches éloignées contiennent le même fossile stratigraphique. Que peut-on conclure ?',
                        'choices' => [
                            ['choice_text' => 'Elles ont la même composition minérale', 'is_correct' => false],
                            ['choice_text' => 'Elles sont sur le même continent actuel', 'is_correct' => false],
                            ['choice_text' => 'Elles viennent du même volcan', 'is_correct' => false],
                            ['choice_text' => 'Elles ont à peu près le même âge', 'is_correct' => true],
                        ],
                        'explanation' => 'Un même fossile stratigraphique indique un âge relatif voisin, même si les roches et les lieux sont différents.',
                    ],
                    [
                        'question' => 'Une couche contient un fossile du Jurassique, une autre un fossile du Crétacé. Laquelle est la plus récente ?',
                        'choices' => [
                            ['choice_text' => 'Celle du Jurassique', 'is_correct' => false],
                            ['choice_text' => 'Celle du Crétacé', 'is_correct' => true],
                            ['choice_text' => 'Elles ont le même âge', 'is_correct' => false],
                            ['choice_text' => 'Impossible à dire sans datation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Crétacé vient après le Jurassique : la couche au fossile du Crétacé est donc plus récente.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit une datation relative ?',
                        'choices' => [
                            ['choice_text' => 'Donner l’âge exact de la roche en millions d’années', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la demi-vie d’un isotope', 'is_correct' => false],
                            ['choice_text' => 'Lire la température sur un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Dire qu’une couche est plus ancienne qu’une autre', 'is_correct' => true],
                        ],
                        'explanation' => 'La datation relative donne un ordre chronologique sans fournir forcément un âge en années.',
                    ],
                    [
                        'question' => 'Une espèce a disparu il y a 400 millions d’années. On trouve son fossile dans une couche. Que peut-on dire de cette couche ?',
                        'choices' => [
                            ['choice_text' => 'Elle a au moins 400 millions d’années', 'is_correct' => true],
                            ['choice_text' => 'Elle a moins de 100 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'Elle date d’hier', 'is_correct' => false],
                            ['choice_text' => 'Elle est plus jeune que les dinosaures', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espèce n’existait plus après 400 millions d’années : la couche qui la contient est au moins aussi ancienne.',
                    ],
                    [
                        'question' => 'Un fossile vit sur plusieurs continents. En quoi est-ce utile pour dater ?',
                        'choices' => [
                            ['choice_text' => 'Il rend le fossile plus gros', 'is_correct' => false],
                            ['choice_text' => 'Il transforme le fossile en roche', 'is_correct' => false],
                            ['choice_text' => 'On peut comparer des couches très éloignées', 'is_correct' => true],
                            ['choice_text' => 'Il supprime l’érosion', 'is_correct' => false],
                        ],
                        'explanation' => 'Une large répartition permet de retrouver le même fossile dans des régions différentes et de comparer l’âge de leurs couches.',
                    ],
                    [
                        'question' => 'Dans une falaise non retournée, une ammonite A est dans la couche du bas et une ammonite B dans la couche du haut. Quelle espèce est la plus ancienne ?',
                        'choices' => [
                            ['choice_text' => 'B, car sa couche est plus haute', 'is_correct' => false],
                            ['choice_text' => 'A, car sa couche est plus basse', 'is_correct' => true],
                            ['choice_text' => 'Elles ont le même âge', 'is_correct' => false],
                            ['choice_text' => 'B, car elle est plus grosse', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une série non retournée, la couche du bas est la plus ancienne : A est plus ancienne que B.',
                    ],
                    [
                        'question' => 'Deux couches ont des fossiles différents, qui ont vécu à des périodes qui ne se chevauchent pas. Peut-on les placer dans le temps ?',
                        'choices' => [
                            ['choice_text' => 'Oui, en comparant les périodes de vie des fossiles', 'is_correct' => true],
                            ['choice_text' => 'Non, les fossiles ne renseignent pas du tout sur le temps', 'is_correct' => false],
                            ['choice_text' => 'Non, il faut d’abord connaître l’âge en années', 'is_correct' => false],
                            ['choice_text' => 'Oui, en comparant la couleur des fossiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer les périodes d’existence des fossiles suffit à ordonner les couches, même sans âge en années.',
                    ],
                    [
                        'question' => 'Le fossile A a vécu de 200 à 150 millions d’années, le fossile B de 120 à 100 millions d’années. Une couche contient A, une autre B. Laquelle est la plus récente ?',
                        'choices' => [
                            ['choice_text' => 'Celle qui contient A', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont le même âge', 'is_correct' => false],
                            ['choice_text' => 'Celle qui contient B', 'is_correct' => true],
                            ['choice_text' => 'Impossible à dire', 'is_correct' => false],
                        ],
                        'explanation' => 'A a disparu avant que B apparaisse : la couche contenant B est la plus récente.',
                    ],
                ],
            ],
            [
                'title' => 'Lire une coupe géologique simple',
                'description' => 'Interpréter une succession de couches et appliquer des principes simples de géologie historique.',
                'settings' => ['duration' => 22, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Dans une série de couches non retournée, où trouve-t-on la couche la plus ancienne ?',
                        'choices' => [
                            ['choice_text' => 'Au sommet de la série', 'is_correct' => false],
                            ['choice_text' => 'Au milieu de la série', 'is_correct' => false],
                            ['choice_text' => 'Dans la couche la plus claire', 'is_correct' => false],
                            ['choice_text' => 'À la base de la série', 'is_correct' => true],
                        ],
                        'explanation' => 'Les couches se déposent les unes sur les autres : celle du bas est la plus ancienne, tant que la série n’a pas été retournée.',
                    ],
                    [
                        'question' => 'Un filon de basalte traverse plusieurs couches de calcaire. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'Le filon est plus ancien que les couches', 'is_correct' => false],
                            ['choice_text' => 'Le filon est plus récent que les couches', 'is_correct' => true],
                            ['choice_text' => 'Les couches se sont déposées après le filon', 'is_correct' => false],
                            ['choice_text' => 'Le filon est un fossile de plante', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce qui recoupe une roche est plus récent qu’elle : le filon s’est mis en place après le dépôt des couches.',
                    ],
                    [
                        'question' => 'Un morceau de granite est pris dans un grès. Lequel est le plus ancien ?',
                        'choices' => [
                            ['choice_text' => 'Le granite, pris dans le grès', 'is_correct' => true],
                            ['choice_text' => 'Le grès, qui entoure le granite', 'is_correct' => false],
                            ['choice_text' => 'Les deux, formés au même moment', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas savoir lequel', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fragment pris dans une roche est plus ancien qu’elle : le granite existait avant que le grès se forme.',
                    ],
                    [
                        'question' => 'De bas en haut, une coupe montre du calcaire, du grès, puis de l’argile. La série n’est pas renversée. Quelle couche est la plus récente ?',
                        'choices' => [
                            ['choice_text' => 'Le calcaire', 'is_correct' => false],
                            ['choice_text' => 'Le grès', 'is_correct' => false],
                            ['choice_text' => 'L’argile', 'is_correct' => true],
                            ['choice_text' => 'Impossible à dire', 'is_correct' => false],
                        ],
                        'explanation' => 'La couche du sommet est la plus récente dans une série non renversée.',
                    ],
                    [
                        'question' => 'Une surface d’érosion sépare deux groupes de couches. Que montre-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Un dépôt continu sans pause', 'is_correct' => false],
                            ['choice_text' => 'Une pause du dépôt, avec de l’érosion', 'is_correct' => true],
                            ['choice_text' => 'Une éruption récente', 'is_correct' => false],
                            ['choice_text' => 'Un séisme ancien', 'is_correct' => false],
                        ],
                        'explanation' => 'Une surface d’érosion entre deux groupes de couches marque une lacune : le dépôt s’est arrêté et les couches du dessous ont été entamées.',
                    ],
                    [
                        'question' => 'Des couches inclinées sont recouvertes par des couches horizontales. Quel événement est le plus ancien ?',
                        'choices' => [
                            ['choice_text' => 'Le dépôt des couches horizontales', 'is_correct' => false],
                            ['choice_text' => 'La formation du dernier fossile', 'is_correct' => false],
                            ['choice_text' => 'L’époque actuelle', 'is_correct' => false],
                            ['choice_text' => 'L’inclinaison des couches du bas', 'is_correct' => true],
                        ],
                        'explanation' => 'Les couches inclinées ont été déformées avant que les couches horizontales ne se déposent par-dessus.',
                    ],
                    [
                        'question' => 'Quel indice permet de reconnaître une ancienne surface d’érosion dans une coupe ?',
                        'choices' => [
                            ['choice_text' => 'Une limite irrégulière qui coupe des couches plus anciennes', 'is_correct' => true],
                            ['choice_text' => 'Une couche parfaitement uniforme, continue et sans interruption visible', 'is_correct' => false],
                            ['choice_text' => 'Des fossiles identiques partout', 'is_correct' => false],
                            ['choice_text' => 'Un cristal isolé dans la roche', 'is_correct' => false],
                        ],
                        'explanation' => 'Une surface d’érosion coupe des couches plus anciennes et a souvent un profil irrégulier avant les nouveaux dépôts.',
                    ],
                    [
                        'question' => 'Une couche existe à gauche d’une coupe mais manque à droite, sous une surface d’érosion. Quelle hypothèse est cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Elle a été transformée en fossile', 'is_correct' => false],
                            ['choice_text' => 'Elle a fondu sous la chaleur du magma', 'is_correct' => false],
                            ['choice_text' => 'Elle a pu être érodée avant les dépôts suivants', 'is_correct' => true],
                            ['choice_text' => 'Elle s’est déposée juste après les couches du dessus', 'is_correct' => false],
                        ],
                        'explanation' => 'Une couche qui disparaît sous une surface d’érosion a pu être enlevée par l’érosion avant la suite de la sédimentation.',
                    ],
                    [
                        'question' => 'Que renseigne une coupe géologique ?',
                        'choices' => [
                            ['choice_text' => 'La météo du jour de la mesure', 'is_correct' => false],
                            ['choice_text' => 'La température du noyau', 'is_correct' => false],
                            ['choice_text' => 'La vitesse actuelle des plaques', 'is_correct' => false],
                            ['choice_text' => 'L’ordre et l’histoire des couches', 'is_correct' => true],
                        ],
                        'explanation' => 'Une coupe montre l’ordre de dépôt des couches et les événements qui les ont affectées : failles, plis, érosion.',
                    ],
                    [
                        'question' => 'Une faille coupe les couches A et B (de bas en haut) mais pas la couche C au-dessus. Que peut-on dire de la faille ?',
                        'choices' => [
                            ['choice_text' => 'Elle est plus récente que C', 'is_correct' => false],
                            ['choice_text' => 'Elle est plus récente que B mais plus ancienne que C', 'is_correct' => true],
                            ['choice_text' => 'Elle est plus ancienne que A', 'is_correct' => false],
                            ['choice_text' => 'Elle est plus récente que C et plus ancienne que la couche A', 'is_correct' => false],
                        ],
                        'explanation' => 'La faille a coupé A et B, donc elle est postérieure à B ; comme elle ne coupe pas C, elle est antérieure au dépôt de C.',
                    ],
                ],
            ],
            [
                'title' => 'Grandes extinctions et renouvellement du vivant',
                'description' => 'Situer les grandes extinctions et comprendre leur rôle général dans l’histoire de la vie.',
                'settings' => ['duration' => 20, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une extinction massive ?',
                        'choices' => [
                            ['choice_text' => 'La disparition d’une espèce dans un pays ou une région', 'is_correct' => false],
                            ['choice_text' => 'La disparition rapide de très nombreuses espèces', 'is_correct' => true],
                            ['choice_text' => 'La naissance de nombreuses espèces nouvelles', 'is_correct' => false],
                            ['choice_text' => 'Le départ d’espèces vers le sud pour l’hiver', 'is_correct' => false],
                        ],
                        'explanation' => 'Une extinction massive fait disparaître un grand nombre d’espèces en un temps court à l’échelle géologique.',
                    ],
                    [
                        'question' => 'À quelle époque les dinosaures non aviens ont-ils disparu ?',
                        'choices' => [
                            ['choice_text' => 'Il y a environ 6 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'Il y a environ 660 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'Il y a environ 250 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'Il y a environ 66 millions d’années', 'is_correct' => true],
                        ],
                        'explanation' => 'Une extinction massive a eu lieu à la fin du Crétacé, il y a environ 66 millions d’années, et a emporté les dinosaures non aviens.',
                    ],
                    [
                        'question' => 'Après une extinction massive, des survivants se diversifient vite. Quelle raison ?',
                        'choices' => [
                            ['choice_text' => 'Des places libres apparaissent dans les milieux', 'is_correct' => true],
                            ['choice_text' => 'Les survivants changent d’espèce en l’espace d’une nuit', 'is_correct' => false],
                            ['choice_text' => 'Les océans se vident complètement', 'is_correct' => false],
                            ['choice_text' => 'Les prédateurs deviennent plus nombreux', 'is_correct' => false],
                        ],
                        'explanation' => 'Moins de concurrents, c’est plus de nourriture et de milieux disponibles : les lignées survivantes se diversifient.',
                    ],
                    [
                        'question' => 'Les trilobites ont-ils vécu en même temps que les humains ?',
                        'choices' => [
                            ['choice_text' => 'Oui, ils vivent encore dans les océans', 'is_correct' => false],
                            ['choice_text' => 'Oui, ils ont vécu avec les premiers humains', 'is_correct' => false],
                            ['choice_text' => 'Non, ils ont disparu bien avant', 'is_correct' => true],
                            ['choice_text' => 'Non, ils sont apparus après l’homme', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trilobites ont disparu il y a environ 250 millions d’années ; les humains modernes n’existent que depuis environ 300 000 ans.',
                    ],
                    [
                        'question' => 'Dans une série de couches, le nombre d’espèces fossiles chute brutalement. Que peut-on suspecter ?',
                        'choices' => [
                            ['choice_text' => 'Une crise biologique ou une extinction', 'is_correct' => true],
                            ['choice_text' => 'Une simple variation de la météo', 'is_correct' => false],
                            ['choice_text' => 'Un changement de couleur de la roche', 'is_correct' => false],
                            ['choice_text' => 'Une accélération de la vitesse du vent', 'is_correct' => false],
                        ],
                        'explanation' => 'Une chute brutale de la diversité fossile suggère une crise biologique, mais il faut vérifier que les couches ne sont pas lacunaires.',
                    ],
                    [
                        'question' => 'Quel rôle les extinctions jouent-elles dans l’histoire de la vie ?',
                        'choices' => [
                            ['choice_text' => 'Elles arrêtent définitivement l’évolution des survivants ensuite', 'is_correct' => false],
                            ['choice_text' => 'Elles touchent un groupe d’animaux à la fois', 'is_correct' => false],
                            ['choice_text' => 'Elles effacent les roches du passé', 'is_correct' => false],
                            ['choice_text' => 'Elles bouleversent la biodiversité avant un renouvellement', 'is_correct' => true],
                        ],
                        'explanation' => 'Les extinctions bouleversent les écosystèmes ; ensuite les survivants peuvent se diversifier et occuper les places libres.',
                    ],
                    [
                        'question' => 'Une espèce disparaît d’une région mais vit ailleurs. Est-ce une extinction de l’espèce ?',
                        'choices' => [
                            ['choice_text' => 'Oui, dès qu’elle disparaît d’un lieu', 'is_correct' => false],
                            ['choice_text' => 'Non, elle existe encore ailleurs', 'is_correct' => true],
                            ['choice_text' => 'Oui, si elle vit dans l’eau', 'is_correct' => false],
                            ['choice_text' => 'Oui, si on la trouve fossile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une disparition locale ne signifie pas que l’espèce a disparu de la planète.',
                    ],
                    [
                        'question' => 'On parle de grandes extinctions massives dans l’histoire de la Terre. Combien en cite-t-on couramment ?',
                        'choices' => [
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Deux', 'is_correct' => false],
                            ['choice_text' => 'Cinq', 'is_correct' => true],
                            ['choice_text' => 'Vingt', 'is_correct' => false],
                        ],
                        'explanation' => 'On cite cinq grandes extinctions majeures, dont celle de la fin du Permien et celle de la fin du Crétacé.',
                    ],
                    [
                        'question' => 'À quoi sert l’étude des extinctions passées ?',
                        'choices' => [
                            ['choice_text' => 'À prévoir la météo de demain', 'is_correct' => false],
                            ['choice_text' => 'À dater les volcans actuels', 'is_correct' => false],
                            ['choice_text' => 'À mesurer la hauteur des montagnes', 'is_correct' => false],
                            ['choice_text' => 'À comprendre comment la biodiversité a changé', 'is_correct' => true],
                        ],
                        'explanation' => 'Les archives fossiles enregistrent les changements de diversité et permettent d’étudier les crises biologiques et leurs conséquences.',
                    ],
                    [
                        'question' => 'Après quelle extinction les mammifères se sont-ils beaucoup diversifiés ?',
                        'choices' => [
                            ['choice_text' => 'Celle de la fin du Crétacé', 'is_correct' => true],
                            ['choice_text' => 'Celle du Précambrien', 'is_correct' => false],
                            ['choice_text' => 'Celle de la fin du Quaternaire', 'is_correct' => false],
                            ['choice_text' => 'Celle du Cambrien', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la disparition des dinosaures non aviens, les mammifères ont occupé de nombreuses places libres et se sont diversifiés.',
                    ],
                    [
                        'question' => 'Une couche contient beaucoup de pollen et de spores. Quelle information peut-on chercher ?',
                        'choices' => [
                            ['choice_text' => 'Les animaux marins du site', 'is_correct' => false],
                            ['choice_text' => 'La date d’une éruption lointaine', 'is_correct' => false],
                            ['choice_text' => 'Les plantes qui poussaient autour', 'is_correct' => true],
                            ['choice_text' => 'La salinité d’un océan voisin', 'is_correct' => false],
                        ],
                        'explanation' => 'Pollen et spores se conservent dans les sédiments et renseignent sur la végétation d’autrefois.',
                    ],
                ],
            ],
            [
                'title' => 'Fossiles emblématiques du registre paléontologique',
                'description' => 'Reconnaître des groupes fossiles majeurs et leur contexte général.',
                'settings' => ['duration' => 19, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Où vivaient les ammonites ?',
                        'choices' => [
                            ['choice_text' => 'Dans les déserts', 'is_correct' => false],
                            ['choice_text' => 'Dans les forêts', 'is_correct' => false],
                            ['choice_text' => 'Sur les glaciers', 'is_correct' => false],
                            ['choice_text' => 'Dans les mers', 'is_correct' => true],
                        ],
                        'explanation' => 'Les ammonites étaient des animaux marins à coquille spiralée, très répandus dans les mers du Mésozoïque, l’ère des dinosaures.',
                    ],
                    [
                        'question' => 'Les trilobites appartiennent à quel groupe d’animaux ?',
                        'choices' => [
                            ['choice_text' => 'Les arthropodes, cousins des crabes', 'is_correct' => true],
                            ['choice_text' => 'Les mammifères', 'is_correct' => false],
                            ['choice_text' => 'Les reptiles', 'is_correct' => false],
                            ['choice_text' => 'Les plantes à fleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trilobites étaient des arthropodes marins, comme les crabes et les insectes d’aujourd’hui.',
                    ],
                    [
                        'question' => 'Une équipe trouve un os de dinosaure dans le sud-est du Maroc. Que peut-on en déduire ?',
                        'choices' => [
                            ['choice_text' => 'Les dinosaures vivent encore dans le désert', 'is_correct' => false],
                            ['choice_text' => 'Les dinosaures ont disparu hier', 'is_correct' => false],
                            ['choice_text' => 'Les dinosaures ont vécu il y a des dizaines de millions d’années', 'is_correct' => true],
                            ['choice_text' => 'Les dinosaures sont apparus peu de temps après les premiers humains', 'is_correct' => false],
                        ],
                        'explanation' => 'Un os fossile est une archive du passé : il faut le replacer dans son âge géologique, ici plusieurs dizaines de millions d’années.',
                    ],
                    [
                        'question' => 'Quel fossile montre à la fois des caractères de dinosaures et d’oiseaux ?',
                        'choices' => [
                            ['choice_text' => 'Un trilobite', 'is_correct' => false],
                            ['choice_text' => 'Archaeopteryx', 'is_correct' => true],
                            ['choice_text' => 'Un mammouth', 'is_correct' => false],
                            ['choice_text' => 'Un foraminifère', 'is_correct' => false],
                        ],
                        'explanation' => 'Archaeopteryx a des dents et une longue queue de dinosaure, mais aussi des plumes : c’est un exemple classique de transition.',
                    ],
                    [
                        'question' => 'Le mammouth laineux vivait dans quel environnement ?',
                        'choices' => [
                            ['choice_text' => 'Des steppes froides de la fin du Quaternaire', 'is_correct' => true],
                            ['choice_text' => 'Les mers chaudes et peu profondes du Cambrien', 'is_correct' => false],
                            ['choice_text' => 'Les forêts du Carbonifère', 'is_correct' => false],
                            ['choice_text' => 'Les déserts du Trias', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mammouth laineux vivait dans des milieux froids à la fin du Quaternaire et a disparu il y a quelques milliers d’années.',
                    ],
                    [
                        'question' => 'Quel fossile marin a un corps ovale divisé en trois lobes et en segments ?',
                        'choices' => [
                            ['choice_text' => 'Une ammonite', 'is_correct' => false],
                            ['choice_text' => 'Une dent de requin', 'is_correct' => false],
                            ['choice_text' => 'Une feuille fossile', 'is_correct' => false],
                            ['choice_text' => 'Un trilobite', 'is_correct' => true],
                        ],
                        'explanation' => 'Le corps d’un trilobite est ovale, divisé en trois lobes et en segments, d’où son nom.',
                    ],
                    [
                        'question' => 'Une dent de requin fossilisée est :',
                        'choices' => [
                            ['choice_text' => 'Une trace d’activité', 'is_correct' => false],
                            ['choice_text' => 'Un reste du corps', 'is_correct' => true],
                            ['choice_text' => 'Un moule externe', 'is_correct' => false],
                            ['choice_text' => 'Une couche de roche', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dent appartient directement au corps de l’animal : c’est un reste corporel fossilisé.',
                    ],
                    [
                        'question' => 'Les foraminifères sont de minuscules organismes marins à coquille. À quoi servent leurs fossiles ?',
                        'choices' => [
                            ['choice_text' => 'À repérer d’anciens volcans', 'is_correct' => false],
                            ['choice_text' => 'À mesurer la hauteur de montagnes très anciennes de la région', 'is_correct' => false],
                            ['choice_text' => 'À dater des couches et à reconstituer des mers anciennes', 'is_correct' => true],
                            ['choice_text' => 'À calculer l’âge du Soleil', 'is_correct' => false],
                        ],
                        'explanation' => 'Beaucoup de foraminifères ont vécu peu de temps et sont très répandus : leurs fossiles datent les couches et renseignent sur les mers anciennes.',
                    ],
                    [
                        'question' => 'Quel grand dinosaure à voile dorsale est connu par des fossiles découverts au Maroc ?',
                        'choices' => [
                            ['choice_text' => 'Le Diplodocus', 'is_correct' => false],
                            ['choice_text' => 'Le Tricératops', 'is_correct' => false],
                            ['choice_text' => 'Le Stégosaure', 'is_correct' => false],
                            ['choice_text' => 'Le Spinosaure', 'is_correct' => true],
                        ],
                        'explanation' => 'Le Spinosaure, un grand dinosaure à voile dorsale, est connu par des fossiles découverts dans le sud-est du Maroc.',
                    ],
                    [
                        'question' => 'À quoi servent les fossiles de pollen ?',
                        'choices' => [
                            ['choice_text' => 'À reconstituer la végétation et le climat d’autrefois', 'is_correct' => true],
                            ['choice_text' => 'À dater un volcan actuel', 'is_correct' => false],
                            ['choice_text' => 'À mesurer la profondeur d’un océan', 'is_correct' => false],
                            ['choice_text' => 'À repérer des failles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pollen se conserve dans les sédiments et renseigne sur les plantes, donc sur le climat et l’environnement anciens.',
                    ],
                ],
            ],
            [
                'title' => 'Reconstituer un ancien environnement',
                'description' => 'Relier les fossiles et les sédiments aux conditions de vie passées.',
                'settings' => ['duration' => 21, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une couche contient de nombreux coquillages marins dans du calcaire. Quel milieu est le plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Une haute montagne', 'is_correct' => false],
                            ['choice_text' => 'Un désert sec', 'is_correct' => false],
                            ['choice_text' => 'Une ancienne mer', 'is_correct' => true],
                            ['choice_text' => 'Un glacier', 'is_correct' => false],
                        ],
                        'explanation' => 'Des coquillages marins et du calcaire indiquent un milieu marin, souvent peu profond.',
                    ],
                    [
                        'question' => 'Du pollen de plantes de climat froid est trouvé dans une couche ancienne. Que suggère-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Un climat tropical humide', 'is_correct' => false],
                            ['choice_text' => 'Un climat plus froid à cette époque', 'is_correct' => true],
                            ['choice_text' => 'Un volcan tout proche', 'is_correct' => false],
                            ['choice_text' => 'Un tremblement de terre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pollen reflète la végétation : des plantes adaptées au froid indiquent un climat plus froid.',
                    ],
                    [
                        'question' => 'Des coquillages d’eau peu profonde sont trouvés loin d’une côte actuelle. Quelle explication est possible ?',
                        'choices' => [
                            ['choice_text' => 'Les coquillages ont été fabriqués récemment par un volcan', 'is_correct' => false],
                            ['choice_text' => 'La mer a disparu en une nuit', 'is_correct' => false],
                            ['choice_text' => 'Un volcan les a apportés', 'is_correct' => false],
                            ['choice_text' => 'La région était recouverte par la mer autrefois', 'is_correct' => true],
                        ],
                        'explanation' => 'La position actuelle des continents ne reflète pas le passé : une région aujourd’hui sèche a pu être sous la mer.',
                    ],
                    [
                        'question' => 'Des racines fossiles se trouvent dans un sol ancien entre deux couches marines. Que suggèrent-elles ?',
                        'choices' => [
                            ['choice_text' => 'Le lieu a émergé et porté des plantes', 'is_correct' => true],
                            ['choice_text' => 'Le lieu est resté sous l’eau en permanence', 'is_correct' => false],
                            ['choice_text' => 'Le lieu était un volcan en éruption', 'is_correct' => false],
                            ['choice_text' => 'Le lieu était un glacier', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sol ancien avec des racines montre que le lieu a émergé et été couvert de végétation avant d’être de nouveau recouvert.',
                    ],
                    [
                        'question' => 'Des empreintes de pas de vertébrés et des dunes fossiles sont dans une même couche. Quel paysage est probable ?',
                        'choices' => [
                            ['choice_text' => 'Un récif corallien', 'is_correct' => false],
                            ['choice_text' => 'Un désert ou une zone aride', 'is_correct' => true],
                            ['choice_text' => 'Un océan profond', 'is_correct' => false],
                            ['choice_text' => 'Un marais tropical', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dunes fossiles indiquent un paysage sec, et les empreintes montrent que des animaux y marchaient.',
                    ],
                    [
                        'question' => 'Des coraux fossiles abondent dans une couche. Quel milieu leur convenait ?',
                        'choices' => [
                            ['choice_text' => 'Une mer chaude, claire et peu profonde', 'is_correct' => true],
                            ['choice_text' => 'Une mer froide et profonde', 'is_correct' => false],
                            ['choice_text' => 'Un lac d’eau douce froid', 'is_correct' => false],
                            ['choice_text' => 'Un fleuve boueux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coraux bâtisseurs de récifs vivent dans des mers chaudes, claires et peu profondes, où la lumière arrive.',
                    ],
                    [
                        'question' => 'Une couche contient de grandes feuilles et beaucoup de racines. Quel milieu est probable ?',
                        'choices' => [
                            ['choice_text' => 'Un océan profond', 'is_correct' => false],
                            ['choice_text' => 'Un désert sans plante', 'is_correct' => false],
                            ['choice_text' => 'Un milieu couvert de végétation', 'is_correct' => true],
                            ['choice_text' => 'Un glacier de montagne', 'is_correct' => false],
                        ],
                        'explanation' => 'Feuilles et racines montrent qu’une végétation poussait sur place ou tout près.',
                    ],
                    [
                        'question' => 'Pour reconstituer un ancien milieu, on combine plusieurs fossiles. Quel est l’intérêt ?',
                        'choices' => [
                            ['choice_text' => 'Un fossile isolé est trop petit pour être étudié', 'is_correct' => false],
                            ['choice_text' => 'Les fossiles sont plus faciles à trouver quand ils sont en groupe', 'is_correct' => false],
                            ['choice_text' => 'Les sédiments ne donnent pas d’information', 'is_correct' => false],
                            ['choice_text' => 'Un fossile isolé ne renseigne pas sur tout le milieu', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque indice renseigne sur un aspect du milieu : les associer limite les erreurs d’interprétation.',
                    ],
                    [
                        'question' => 'Des plantes aquatiques et des sédiments très fins sont conservés ensemble. Quel milieu est plausible ?',
                        'choices' => [
                            ['choice_text' => 'Un lac ou un marais calme', 'is_correct' => true],
                            ['choice_text' => 'Une coulée de lave', 'is_correct' => false],
                            ['choice_text' => 'Un sommet sec', 'is_correct' => false],
                            ['choice_text' => 'Un torrent de montagne', 'is_correct' => false],
                        ],
                        'explanation' => 'Des sédiments fins et des plantes aquatiques évoquent une eau calme, comme un lac ou un marais.',
                    ],
                    [
                        'question' => 'Des coquilles très usées et des grains arrondis sont mêlés dans une couche. Que suggère cette association ?',
                        'choices' => [
                            ['choice_text' => 'Une conservation parfaite sur place', 'is_correct' => false],
                            ['choice_text' => 'Un milieu sans courant', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt calme sans mouvement', 'is_correct' => false],
                            ['choice_text' => 'Du transport et du brassage avant le dépôt', 'is_correct' => true],
                        ],
                        'explanation' => 'L’usure des coquilles et l’arrondi des grains indiquent qu’ils ont été roulés et déplacés avant de se déposer.',
                    ],
                ],
            ],
            [
                'title' => 'Méthodes de travail du paléontologue',
                'description' => 'Comprendre comment les fossiles sont observés, classés et interprétés avec leur contexte géologique.',
                'settings' => ['duration' => 20, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Lors d’une fouille, on note précisément la couche d’où vient chaque fossile. Quel est l’intérêt ?',
                        'choices' => [
                            ['choice_text' => 'Garder le contexte pour dater et comprendre le milieu', 'is_correct' => true],
                            ['choice_text' => 'Déterminer sa couleur d’origine', 'is_correct' => false],
                            ['choice_text' => 'Mesurer son poids exact après nettoyage à l’eau et à la brosse', 'is_correct' => false],
                            ['choice_text' => 'Choisir le meilleur musée', 'is_correct' => false],
                        ],
                        'explanation' => 'La couche d’origine permet de dater le fossile, de le comparer aux autres et de reconstituer son environnement.',
                    ],
                    [
                        'question' => 'Que fait un paléontologue avant d’identifier un fossile ?',
                        'choices' => [
                            ['choice_text' => 'Il le nettoie à l’acide sans noter sa place', 'is_correct' => false],
                            ['choice_text' => 'Il choisit un nom d’espèce au hasard', 'is_correct' => false],
                            ['choice_text' => 'Il le classe d’après sa couleur', 'is_correct' => false],
                            ['choice_text' => 'Il observe ses formes et son contexte', 'is_correct' => true],
                        ],
                        'explanation' => 'L’identification repose sur l’observation des caractères du fossile et sur leur comparaison avec des formes connues.',
                    ],
                    [
                        'question' => 'Que perd-on si un fossile est conservé sans fiche de terrain ?',
                        'choices' => [
                            ['choice_text' => 'Sa forme et sa taille', 'is_correct' => false],
                            ['choice_text' => 'Le lien avec sa couche et son lieu', 'is_correct' => true],
                            ['choice_text' => 'Sa composition minérale et sa couleur d’origine', 'is_correct' => false],
                            ['choice_text' => 'Son nom d’espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'La fiche relie le fossile à sa couche, à son lieu et à ses observations : sans elle, le contexte est perdu.',
                    ],
                    [
                        'question' => 'Un fossile acheté dans une boutique n’a pas d’origine connue. Peut-il servir à la recherche ?',
                        'choices' => [
                            ['choice_text' => 'Oui, la forme suffit à dater la couche', 'is_correct' => false],
                            ['choice_text' => 'Oui, il donne l’âge exact de son site', 'is_correct' => false],
                            ['choice_text' => 'Peu, car son origine est inconnue', 'is_correct' => true],
                            ['choice_text' => 'Non, les fossiles de boutique sont des copies', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans couche ni lieu connus, on ne peut ni dater le fossile ni reconstituer son milieu : son intérêt scientifique est faible.',
                    ],
                    [
                        'question' => 'Quel outil aide à comparer un fossile avec des spécimens connus ?',
                        'choices' => [
                            ['choice_text' => 'Une collection de référence', 'is_correct' => true],
                            ['choice_text' => 'Un sismographe de laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Un pluviomètre', 'is_correct' => false],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les collections de référence et la documentation scientifique permettent de comparer les caractères et la répartition des espèces.',
                    ],
                    [
                        'question' => 'Un fossile est cassé en plusieurs morceaux. Peut-il rester utile ?',
                        'choices' => [
                            ['choice_text' => 'Non, un fragment ne peut pas être étudié', 'is_correct' => false],
                            ['choice_text' => 'Oui, il donne l’âge exact en années', 'is_correct' => false],
                            ['choice_text' => 'Oui, des fragments gardent des détails d’identification', 'is_correct' => true],
                            ['choice_text' => 'Oui, il prouve qu’il y a eu une extinction dans la région', 'is_correct' => false],
                        ],
                        'explanation' => 'Même incomplet, un fossile peut garder des détails caractéristiques qui permettent de l’identifier en partie.',
                    ],
                    [
                        'question' => 'Quelles informations faut-il noter sur un site fossilifère ?',
                        'choices' => [
                            ['choice_text' => 'La marque et le prix des outils utilisés sur le chantier', 'is_correct' => false],
                            ['choice_text' => 'La météo de la veille', 'is_correct' => false],
                            ['choice_text' => 'Le prix du carburant', 'is_correct' => false],
                            ['choice_text' => 'La couche et le lieu de chaque découverte', 'is_correct' => true],
                        ],
                        'explanation' => 'Noter la couche et la position des découvertes préserve leur valeur scientifique.',
                    ],
                    [
                        'question' => 'Un fossile peut avoir été transporté loin de sa couche d’origine. Quel risque cela crée-t-il ?',
                        'choices' => [
                            ['choice_text' => 'On crée de nouvelles espèces par erreur de classement', 'is_correct' => false],
                            ['choice_text' => 'On peut se tromper sur l’âge et le milieu du dépôt', 'is_correct' => true],
                            ['choice_text' => 'Le fossile devient plus ancien', 'is_correct' => false],
                            ['choice_text' => 'Le fossile se change en roche volcanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fossile remanié vient d’une couche plus ancienne : le prendre pour contemporain du dépôt fausse l’interprétation.',
                    ],
                    [
                        'question' => 'Quels indices montrent qu’un fossile a été usé par le transport ?',
                        'choices' => [
                            ['choice_text' => 'Une couleur identique à celle de la roche qui l’entoure', 'is_correct' => false],
                            ['choice_text' => 'Des détails très fins bien conservés', 'is_correct' => false],
                            ['choice_text' => 'Des surfaces polies et des cassures arrondies', 'is_correct' => true],
                            ['choice_text' => 'Une étiquette de musée collée dessus', 'is_correct' => false],
                        ],
                        'explanation' => 'Des surfaces usées et des cassures arrondies sont des indices fréquents de transport.',
                    ],
                    [
                        'question' => 'Un chercheur compare plusieurs fossiles d’une même couche. Quel est l’intérêt ?',
                        'choices' => [
                            ['choice_text' => 'Choisir le plus beau fossile pour le musée local', 'is_correct' => false],
                            ['choice_text' => 'Séparer variation normale et vraie différence', 'is_correct' => true],
                            ['choice_text' => 'Effacer les différences entre individus', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la température de la couche', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer plusieurs individus montre la variabilité naturelle et évite de créer une nouvelle espèce à partir d’une seule différence.',
                    ],
                ],
            ],
            [
                'title' => 'Interpréter un registre fossile',
                'description' => 'Lire simplement l’abondance et la répartition des fossiles au cours du temps.',
                'settings' => ['duration' => 19, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Un groupe de fossiles est présent dans plusieurs couches, puis absent des couches plus récentes. Quelle interprétation est possible ?',
                        'choices' => [
                            ['choice_text' => 'Le groupe est devenu une roche', 'is_correct' => false],
                            ['choice_text' => 'Le groupe est apparu plus tard', 'is_correct' => false],
                            ['choice_text' => 'Le groupe s’est peut-être éteint', 'is_correct' => true],
                            ['choice_text' => 'Les couches récentes sont plus anciennes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une disparition nette dans les couches récentes peut correspondre à une extinction, en tenant compte des limites de l’enregistrement.',
                    ],
                    [
                        'question' => 'On trouve un fossile pour la première fois dans une couche donnée. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'Il existait au moins à partir de cette couche', 'is_correct' => true],
                            ['choice_text' => 'Il est apparu précisément le jour où la couche s’est déposée', 'is_correct' => false],
                            ['choice_text' => 'La Terre venait de se former', 'is_correct' => false],
                            ['choice_text' => 'Il avait déjà disparu', 'is_correct' => false],
                        ],
                        'explanation' => 'La première occurrence observée donne une date minimale d’existence, pas forcément celle de l’apparition réelle.',
                    ],
                    [
                        'question' => 'Le registre fossile ne conserve pas toute la vie du passé. Quelle en est la raison ?',
                        'choices' => [
                            ['choice_text' => 'La plupart des fossiles des musées sont fabriqués par des artisans', 'is_correct' => false],
                            ['choice_text' => 'Les roches ne gardent pas les animaux terrestres', 'is_correct' => false],
                            ['choice_text' => 'Chaque espèce laisse le même nombre de fossiles', 'is_correct' => false],
                            ['choice_text' => 'La fossilisation est rare et beaucoup de fossiles disparaissent', 'is_correct' => true],
                        ],
                        'explanation' => 'La fossilisation est rare et beaucoup de fossiles disparaissent par érosion ou transformation : le registre est incomplet.',
                    ],
                    [
                        'question' => 'Une couche contient énormément de fossiles d’une même espèce. Que peut-on envisager ?',
                        'choices' => [
                            ['choice_text' => 'Un dépôt de lave refroidie', 'is_correct' => false],
                            ['choice_text' => 'Un milieu très peuplé ou propice à la conservation', 'is_correct' => true],
                            ['choice_text' => 'Un milieu entièrement dépourvu d’êtres vivants à l’époque', 'is_correct' => false],
                            ['choice_text' => 'Un fossile unique et rare', 'is_correct' => false],
                        ],
                        'explanation' => 'L’abondance peut venir d’une population nombreuse, d’une accumulation après transport ou de conditions de conservation favorables.',
                    ],
                    [
                        'question' => 'Les coquilles sont beaucoup plus nombreuses que les organismes à corps mou dans une couche. Quel biais est à l’œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Les organismes mous n’existaient pas', 'is_correct' => false],
                            ['choice_text' => 'Les parties dures se conservent mieux', 'is_correct' => true],
                            ['choice_text' => 'Les coquilles empêchent le dépôt de boue', 'is_correct' => false],
                            ['choice_text' => 'Les couches sont plus récentes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les parties dures ont plus de chances de se fossiliser, donc elles sont surreprésentées dans le registre.',
                    ],
                    [
                        'question' => 'Deux couches ont des fossiles d’espèces différentes. Que peut-on étudier ?',
                        'choices' => [
                            ['choice_text' => 'La date de la création de la Terre et des autres planètes', 'is_correct' => false],
                            ['choice_text' => 'La profondeur de l’océan actuel', 'is_correct' => false],
                            ['choice_text' => 'La couleur de l’atmosphère', 'is_correct' => false],
                            ['choice_text' => 'Le changement des êtres vivants entre les deux époques', 'is_correct' => true],
                        ],
                        'explanation' => 'Des assemblages différents peuvent signaler un renouvellement des communautés lié à des changements du milieu.',
                    ],
                    [
                        'question' => 'Il n’y a pas de fossiles pour une période donnée. Cela prouve-t-il que la vie avait disparu ?',
                        'choices' => [
                            ['choice_text' => 'Non, la période peut manquer ou être détruite', 'is_correct' => true],
                            ['choice_text' => 'Oui, les fossiles apparaissent dans chaque roche', 'is_correct' => false],
                            ['choice_text' => 'Oui, car l’extinction est impossible', 'is_correct' => false],
                            ['choice_text' => 'Oui, car les roches récentes sont vides', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lacune peut venir d’une absence de dépôt, d’une érosion, d’une mauvaise fossilisation ou d’un accès difficile aux roches.',
                    ],
                    [
                        'question' => 'Une espèce est abondante dans une couche et rare dans une autre. Quelle conclusion est prudente ?',
                        'choices' => [
                            ['choice_text' => 'Elle a changé d’ADN pendant le dépôt entre les deux couches', 'is_correct' => false],
                            ['choice_text' => 'Elle est devenue un minéral dans l’une', 'is_correct' => false],
                            ['choice_text' => 'Son abondance a pu varier ou la conservation changer', 'is_correct' => true],
                            ['choice_text' => 'Elle n’a pas vécu à la seconde période', 'is_correct' => false],
                        ],
                        'explanation' => 'L’abondance observée dépend de la population, du dépôt et de la conservation : on ne peut pas l’attribuer à une seule cause.',
                    ],
                    [
                        'question' => 'Dans une série, on voit les fossiles A, puis A et B ensemble, puis B. Que suggère cette série ?',
                        'choices' => [
                            ['choice_text' => 'Une fusion de A et B', 'is_correct' => false],
                            ['choice_text' => 'Un arrêt du dépôt', 'is_correct' => false],
                            ['choice_text' => 'Un retour au présent', 'is_correct' => false],
                            ['choice_text' => 'Un remplacement progressif des espèces', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette succession traduit un changement progressif des organismes présents ou conservés.',
                    ],
                    [
                        'question' => 'Quel élément aide le plus à interpréter une variation d’abondance ?',
                        'choices' => [
                            ['choice_text' => 'Le contexte sédimentaire de la couche', 'is_correct' => true],
                            ['choice_text' => 'La couleur de l’étiquette', 'is_correct' => false],
                            ['choice_text' => 'La taille du laboratoire', 'is_correct' => false],
                            ['choice_text' => 'L’heure de la journée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte sédimentaire aide à distinguer une variation écologique d’un effet de transport ou de conservation.',
                    ],
                ],
            ],
            [
                'title' => 'Cas de synthèse : du fossile à l’histoire du milieu',
                'description' => 'Mobiliser plusieurs indices paléontologiques dans de petits cas d’interprétation.',
                'settings' => ['duration' => 23, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une couche contient des coraux fossiles, du calcaire et peu de sable venu des terres. Quel milieu est probable ?',
                        'choices' => [
                            ['choice_text' => 'Un désert froid', 'is_correct' => false],
                            ['choice_text' => 'Une chambre magmatique', 'is_correct' => false],
                            ['choice_text' => 'Une mer chaude et peu profonde', 'is_correct' => true],
                            ['choice_text' => 'Une forêt de montagne', 'is_correct' => false],
                        ],
                        'explanation' => 'Coraux et calcaire, avec peu de sable venu des terres, indiquent un milieu marin chaud, clair et peu profond.',
                    ],
                    [
                        'question' => 'Une couche du bas est riche en coquilles marines ; celle du dessus contient des racines fossiles. Quelle histoire est possible ?',
                        'choices' => [
                            ['choice_text' => 'La mer s’est retirée, puis des plantes se sont installées', 'is_correct' => true],
                            ['choice_text' => 'Le noyau est remonté à la surface', 'is_correct' => false],
                            ['choice_text' => 'Une montagne s’est formée en un instant sous la couche marine', 'is_correct' => false],
                            ['choice_text' => 'Le dépôt s’est arrêté définitivement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coquilles marines indiquent une mer ; les racines au-dessus montrent que le lieu a ensuite émergé et porté de la végétation.',
                    ],
                    [
                        'question' => 'On trouve des trilobites dans l’Anti-Atlas. Que peut-on dire de cette région à l’époque où ils vivaient ?',
                        'choices' => [
                            ['choice_text' => 'Elle était un désert chaud', 'is_correct' => false],
                            ['choice_text' => 'Elle était recouverte par la mer', 'is_correct' => true],
                            ['choice_text' => 'Elle était une chaîne de montagnes', 'is_correct' => false],
                            ['choice_text' => 'Elle était un glacier', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trilobites vivaient dans la mer : les trouver dans l’Anti-Atlas montre que la région était recouverte par la mer, il y a plus de 400 millions d’années.',
                    ],
                    [
                        'question' => 'Un os fossile très usé se trouve dans une couche plus jeune que son âge probable. Quelle possibilité envisager ?',
                        'choices' => [
                            ['choice_text' => 'Il est apparu spontanément dans la couche', 'is_correct' => false],
                            ['choice_text' => 'Il est d’origine magmatique', 'is_correct' => false],
                            ['choice_text' => 'Il a été fabriqué par la météo', 'is_correct' => false],
                            ['choice_text' => 'Il a été remanié depuis une couche plus ancienne', 'is_correct' => true],
                        ],
                        'explanation' => 'Un fossile usé dans une couche plus jeune a pu être érodé d’une couche ancienne puis redéposé.',
                    ],
                    [
                        'question' => 'Des dents de requin et des coquilles marines sont trouvées au sommet d’une montagne. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'Cette roche s’est formée sous la mer', 'is_correct' => true],
                            ['choice_text' => 'Les requins vivaient dans la montagne', 'is_correct' => false],
                            ['choice_text' => 'Un volcan a apporté les fossiles', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de la mer est resté le même partout', 'is_correct' => false],
                        ],
                        'explanation' => 'Des fossiles marins en altitude montrent que la roche s’est formée sous la mer, puis a été soulevée par les mouvements de la croûte.',
                    ],
                    [
                        'question' => 'De bas en haut, on trouve des trilobites, des ammonites, puis du pollen de plantes terrestres. Que conclure ?',
                        'choices' => [
                            ['choice_text' => 'Les trois organismes vivaient ensemble', 'is_correct' => false],
                            ['choice_text' => 'Les trilobites sont plus récents que les ammonites et le pollen', 'is_correct' => false],
                            ['choice_text' => 'La série est entièrement magmatique', 'is_correct' => false],
                            ['choice_text' => 'Les couches enregistrent des époques et milieux différents', 'is_correct' => true],
                        ],
                        'explanation' => 'Ces fossiles appartiennent à des groupes et à des périodes différents : leur succession informe sur le temps et les changements de milieu.',
                    ],
                    [
                        'question' => 'Comment vérifier qu’une couche est d’origine lacustre ?',
                        'choices' => [
                            ['choice_text' => 'Chercher des coquilles de pleine mer dans des sédiments grossiers', 'is_correct' => false],
                            ['choice_text' => 'Chercher des fossiles d’eau douce dans des sédiments fins', 'is_correct' => true],
                            ['choice_text' => 'Chercher un filon basaltique', 'is_correct' => false],
                            ['choice_text' => 'Chercher une faille profonde', 'is_correct' => false],
                        ],
                        'explanation' => 'Des organismes d’eau douce associés à des dépôts calmes soutiennent l’hypothèse d’un ancien lac.',
                    ],
                    [
                        'question' => 'Une extinction semble nette dans un seul bassin. Quelle précaution prendre ?',
                        'choices' => [
                            ['choice_text' => 'Conclure tout de suite à une extinction mondiale des espèces', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la stratigraphie', 'is_correct' => false],
                            ['choice_text' => 'Vérifier qu’il ne s’agit pas d’une lacune locale du registre', 'is_correct' => true],
                            ['choice_text' => 'Choisir l’espèce au hasard', 'is_correct' => false],
                        ],
                        'explanation' => 'Une extinction locale peut être confondue avec une lacune : il faut comparer plusieurs sites avant d’élargir la conclusion.',
                    ],
                    [
                        'question' => 'Un fossile a des caractères intermédiaires entre deux groupes connus. Que peut-il apporter ?',
                        'choices' => [
                            ['choice_text' => 'La preuve qu’il n’a pas évolué', 'is_correct' => false],
                            ['choice_text' => 'Des indices sur une transition évolutive', 'is_correct' => true],
                            ['choice_text' => 'Son âge exact sans autre donnée', 'is_correct' => false],
                            ['choice_text' => 'La composition exacte du noyau terrestre et du manteau', 'is_correct' => false],
                        ],
                        'explanation' => 'Un mélange de caractères peut éclairer une transition évolutive, à condition de le confirmer avec d’autres données.',
                    ],
                    [
                        'question' => 'Quelle démarche combine paléontologie et stratigraphie ?',
                        'choices' => [
                            ['choice_text' => 'Mesurer la couleur des fossiles puis en déduire le climat actuel de la région', 'is_correct' => false],
                            ['choice_text' => 'Peser les fossiles puis calculer l’âge de la Terre', 'is_correct' => false],
                            ['choice_text' => 'Mesurer le vent puis dater les sédiments', 'is_correct' => false],
                            ['choice_text' => 'Identifier les fossiles, puis comparer positions et durées de vie', 'is_correct' => true],
                        ],
                        'explanation' => 'La paléontologie fournit les indices biologiques, la stratigraphie leur position : ensemble, ils permettent de reconstruire l’histoire des couches.',
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