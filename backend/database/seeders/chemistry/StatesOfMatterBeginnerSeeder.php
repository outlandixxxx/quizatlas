<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class StatesOfMatterBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'states-of-matter')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les trois états de la matière',
                'description' => 'Découvrez les caractéristiques des solides, des liquides et des gaz à partir d’exemples simples du quotidien.',
                'questions' => [
                    [
                        'question' => 'Lequel de ces exemples est un solide à température ambiante ?',
                        'choices' => [
                            ['choice_text' => 'Un glaçon', 'is_correct' => true],
                            ['choice_text' => 'La vapeur d’eau', 'is_correct' => false],
                            ['choice_text' => 'L’air', 'is_correct' => false],
                            ['choice_text' => 'La vapeur d’alcool', 'is_correct' => false],
                        ],
                        'explanation' => 'Un glaçon est de l’eau à l’état solide. Il possède une forme propre et conserve son volume.'
                    ],
                    [
                        'question' => 'Quelle propriété caractérise le mieux un liquide ?',
                        'choices' => [
                            ['choice_text' => 'Il prend la forme du récipient qui le contient', 'is_correct' => true],
                            ['choice_text' => 'Il possède toujours une forme fixe', 'is_correct' => false],
                            ['choice_text' => 'Il remplit tout l’espace disponible comme un gaz', 'is_correct' => false],
                            ['choice_text' => 'Ses particules sont immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Un liquide possède un volume propre mais pas de forme propre. Il s’adapte donc à la forme de son récipient.'
                    ],
                    [
                        'question' => 'Pourquoi un gaz peut-il remplir toute une pièce ?',
                        'choices' => [
                            ['choice_text' => 'Ses particules sont éloignées et se déplacent librement', 'is_correct' => true],
                            ['choice_text' => 'Ses particules sont toutes bloquées', 'is_correct' => false],
                            ['choice_text' => 'Un gaz ne contient aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Le gaz possède toujours une forme fixe', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un gaz, les particules sont très espacées et se déplacent dans toutes les directions. Elles occupent donc l’espace disponible.'
                    ],
                    [
                        'question' => 'Laquelle de ces situations montre l’état liquide de l’eau ?',
                        'choices' => [
                            ['choice_text' => 'L’eau dans un verre', 'is_correct' => true],
                            ['choice_text' => 'Un glaçon dans un congélateur', 'is_correct' => false],
                            ['choice_text' => 'La vapeur au-dessus d’une casserole', 'is_correct' => false],
                            ['choice_text' => 'Le givre sur une vitre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau contenue dans un verre est liquide. Elle possède un volume propre mais prend la forme du verre.'
                    ],
                    [
                        'question' => 'Quel état de la matière possède généralement une forme et un volume propres ?',
                        'choices' => [
                            ['choice_text' => 'Le solide', 'is_correct' => true],
                            ['choice_text' => 'Le liquide', 'is_correct' => false],
                            ['choice_text' => 'Le gaz', 'is_correct' => false],
                            ['choice_text' => 'Tous les trois', 'is_correct' => false],
                        ],
                        'explanation' => 'Un solide possède une forme propre et un volume propre. Un liquide garde surtout son volume, tandis qu’un gaz n’a ni forme ni volume propres.'
                    ],
                    [
                        'question' => 'Un ballon gonflé change de forme lorsque l’on appuie dessus. Quel état de la matière est à l’intérieur du ballon ?',
                        'choices' => [
                            ['choice_text' => 'Un gaz', 'is_correct' => true],
                            ['choice_text' => 'Un solide', 'is_correct' => false],
                            ['choice_text' => 'Un liquide uniquement', 'is_correct' => false],
                            ['choice_text' => 'Du plasma nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air contenu dans le ballon est un gaz. Les gaz n’ont pas de forme propre et peuvent être comprimés dans certaines limites.'
                    ],
                    [
                        'question' => 'Dans quel état les particules sont-elles généralement les plus rapprochées et organisées ?',
                        'choices' => [
                            ['choice_text' => 'Dans un solide', 'is_correct' => true],
                            ['choice_text' => 'Dans un gaz', 'is_correct' => false],
                            ['choice_text' => 'Dans tous les états de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans un mélange', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un solide, les particules sont très rapprochées et leur mouvement est limité à des vibrations autour de positions fixes.'
                    ],
                    [
                        'question' => 'Un élève verse de l’huile d’un verre dans une assiette. L’huile change de forme mais garde approximativement le même volume. Cela correspond à :',
                        'choices' => [
                            ['choice_text' => 'Un liquide', 'is_correct' => true],
                            ['choice_text' => 'Un solide', 'is_correct' => false],
                            ['choice_text' => 'Un gaz', 'is_correct' => false],
                            ['choice_text' => 'Un plasma', 'is_correct' => false],
                        ],
                        'explanation' => 'Un liquide change de forme selon le récipient tout en conservant approximativement son volume.'
                    ],
                    [
                        'question' => 'Pourquoi peut-on facilement comprimer l’air dans une seringue alors que le volume d’un morceau de métal change très peu ?',
                        'choices' => [
                            ['choice_text' => 'Les particules d’un gaz sont beaucoup plus espacées', 'is_correct' => true],
                            ['choice_text' => 'Les particules du métal n’ont aucune masse', 'is_correct' => false],
                            ['choice_text' => 'L’air contient moins de matière', 'is_correct' => false],
                            ['choice_text' => 'Le métal est toujours liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les espaces entre les particules d’un gaz sont importants, ce qui permet de réduire son volume. Les particules d’un solide sont beaucoup plus rapprochées.'
                    ],
                    [
                        'question' => 'Un élève affirme : « Un liquide n’a pas de volume propre. » Quelle correction est juste ?',
                        'choices' => [
                            ['choice_text' => 'Un liquide n’a pas de forme propre, mais il possède un volume propre', 'is_correct' => true],
                            ['choice_text' => 'Un liquide n’a ni forme ni volume', 'is_correct' => false],
                            ['choice_text' => 'Un liquide a une forme fixe mais pas de volume', 'is_correct' => false],
                            ['choice_text' => 'Un liquide est toujours un gaz compressé', 'is_correct' => false],
                        ],
                        'explanation' => 'Un liquide garde généralement le même volume lorsqu’il est transféré d’un récipient à un autre, mais sa forme change.'
                    ],
                ],
            ],

            [
                'title' => 'Le modèle particulaire de la matière',
                'description' => 'Utilisez le modèle particulaire pour comprendre les différences entre les solides, les liquides et les gaz.',
                'questions' => [
                    [
                        'question' => 'Dans le modèle particulaire, de quoi la matière est-elle constituée ?',
                        'choices' => [
                            ['choice_text' => 'De très petites particules', 'is_correct' => true],
                            ['choice_text' => 'Uniquement de lumière', 'is_correct' => false],
                            ['choice_text' => 'D’ombres invisibles', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle particulaire décrit la matière comme étant constituée de particules très petites qui peuvent être des atomes, des molécules ou des ions.'
                    ],
                    [
                        'question' => 'Comment les particules d’un solide se déplacent-elles généralement ?',
                        'choices' => [
                            ['choice_text' => 'Elles vibrent autour de positions relativement fixes', 'is_correct' => true],
                            ['choice_text' => 'Elles se déplacent librement dans tout l’espace', 'is_correct' => false],
                            ['choice_text' => 'Elles restent totalement immobiles', 'is_correct' => false],
                            ['choice_text' => 'Elles quittent constamment le solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules d’un solide ne sont pas parfaitement immobiles. Elles vibrent autour de positions fixes dans la structure du solide.'
                    ],
                    [
                        'question' => 'Dans un liquide, les particules sont-elles complètement immobiles ?',
                        'choices' => [
                            ['choice_text' => 'Non, elles se déplacent les unes par rapport aux autres', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu’il fait froid', 'is_correct' => false],
                            ['choice_text' => 'Elles ont disparu', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules d’un liquide restent proches, mais elles peuvent se déplacer et glisser les unes autour des autres.'
                    ],
                    [
                        'question' => 'Pourquoi un parfum se répand-il progressivement dans une pièce ?',
                        'choices' => [
                            ['choice_text' => 'Les particules du parfum se déplacent et se mélangent à l’air', 'is_correct' => true],
                            ['choice_text' => 'Les particules du parfum deviennent solides', 'is_correct' => false],
                            ['choice_text' => 'L’air détruit les molécules du parfum', 'is_correct' => false],
                            ['choice_text' => 'Les particules restent toujours à leur place', 'is_correct' => false],
                        ],
                        'explanation' => 'Les molécules odorantes se déplacent dans l’air et se diffusent progressivement dans la pièce.'
                    ],
                    [
                        'question' => 'Lorsqu’un solide est chauffé sans changer encore d’état, que font généralement ses particules ?',
                        'choices' => [
                            ['choice_text' => 'Elles vibrent davantage', 'is_correct' => true],
                            ['choice_text' => 'Elles deviennent des protons', 'is_correct' => false],
                            ['choice_text' => 'Elles disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Elles arrêtent tout mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’augmentation de température correspond à une augmentation de l’agitation des particules. Dans un solide, elles vibrent donc davantage.'
                    ],
                    [
                        'question' => 'Un élève dessine les particules d’un gaz presque collées les unes aux autres. Quel aspect doit-il corriger ?',
                        'choices' => [
                            ['choice_text' => 'Les particules d’un gaz sont généralement beaucoup plus espacées', 'is_correct' => true],
                            ['choice_text' => 'Les particules d’un gaz doivent toutes se toucher', 'is_correct' => false],
                            ['choice_text' => 'Un gaz ne possède aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Les particules d’un gaz sont forcément immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un gaz, les particules sont très éloignées les unes des autres par rapport à un solide ou un liquide.'
                    ],
                    [
                        'question' => 'Que se passe-t-il au niveau des particules lorsque la glace fond ?',
                        'choices' => [
                            ['choice_text' => 'Les particules restent les mêmes mais peuvent se déplacer plus librement', 'is_correct' => true],
                            ['choice_text' => 'Les particules sont détruites', 'is_correct' => false],
                            ['choice_text' => 'Les particules deviennent des atomes d’un autre élément', 'is_correct' => false],
                            ['choice_text' => 'Toutes les particules quittent l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion est un changement physique. Les particules d’eau restent des particules d’eau, mais leur organisation devient moins rigide.'
                    ],
                    [
                        'question' => 'Pourquoi un gaz exerce-t-il une pression sur les parois de son récipient ?',
                        'choices' => [
                            ['choice_text' => 'Ses particules heurtent les parois en mouvement', 'is_correct' => true],
                            ['choice_text' => 'Le gaz possède des parois solides lui-même', 'is_correct' => false],
                            ['choice_text' => 'Les neutrons quittent le noyau', 'is_correct' => false],
                            ['choice_text' => 'La pression vient uniquement de la couleur du gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules d’un gaz sont en mouvement permanent. Leurs collisions avec les parois produisent une pression.'
                    ],
                    [
                        'question' => 'On chauffe doucement l’air enfermé dans un ballon souple. Que peut-on observer ?',
                        'choices' => [
                            ['choice_text' => 'Le ballon peut se dilater parce que les particules se déplacent plus rapidement', 'is_correct' => true],
                            ['choice_text' => 'Les particules d’air disparaissent', 'is_correct' => false],
                            ['choice_text' => 'L’air devient automatiquement solide', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de protons augmente', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chauffage augmente l’agitation des particules du gaz. Dans un ballon souple, cela peut provoquer une expansion du gaz et du ballon.'
                    ],
                    [
                        'question' => 'Quelle idée résume le mieux le modèle particulaire des états de la matière ?',
                        'choices' => [
                            ['choice_text' => 'La distance, l’organisation et le mouvement des particules diffèrent selon l’état', 'is_correct' => true],
                            ['choice_text' => 'Les particules changent toujours d’identité lors d’un changement d’état', 'is_correct' => false],
                            ['choice_text' => 'Seuls les gaz possèdent des particules', 'is_correct' => false],
                            ['choice_text' => 'Les particules d’un solide sont forcément plus lourdes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois états peuvent être expliqués par des différences d’organisation, d’espacement et de mouvement des particules.'
                    ],
                ],
            ],

            [
                'title' => 'Les changements d’état',
                'description' => 'Identifiez la fusion, la solidification, la vaporisation, la condensation et la sublimation à travers des exemples simples.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on le passage de l’état solide à l’état liquide ?',
                        'choices' => [
                            ['choice_text' => 'La fusion', 'is_correct' => true],
                            ['choice_text' => 'La condensation', 'is_correct' => false],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion est le passage d’un solide à un liquide, comme lorsqu’un glaçon fond.'
                    ],
                    [
                        'question' => 'Le passage de l’eau liquide à la glace s’appelle :',
                        'choices' => [
                            ['choice_text' => 'La solidification', 'is_correct' => true],
                            ['choice_text' => 'La vaporisation', 'is_correct' => false],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                        ],
                        'explanation' => 'La solidification correspond au passage du liquide vers le solide.'
                    ],
                    [
                        'question' => 'Quand de l’eau liquide devient de la vapeur, il s’agit d’une :',
                        'choices' => [
                            ['choice_text' => 'Vaporisation', 'is_correct' => true],
                            ['choice_text' => 'Fusion', 'is_correct' => false],
                            ['choice_text' => 'Solidification', 'is_correct' => false],
                            ['choice_text' => 'Condensation', 'is_correct' => false],
                        ],
                        'explanation' => 'La vaporisation est le passage de l’état liquide à l’état gazeux. Elle peut se produire par évaporation ou ébullition.'
                    ],
                    [
                        'question' => 'De la vapeur d’eau forme des gouttes sur une vitre froide. Quel changement a lieu ?',
                        'choices' => [
                            ['choice_text' => 'Condensation', 'is_correct' => true],
                            ['choice_text' => 'Fusion', 'is_correct' => false],
                            ['choice_text' => 'Sublimation', 'is_correct' => false],
                            ['choice_text' => 'Solidification', 'is_correct' => false],
                        ],
                        'explanation' => 'La vapeur d’eau passe de l’état gazeux à l’état liquide. Ce changement s’appelle la condensation.'
                    ],
                    [
                        'question' => 'Le passage direct d’un solide à un gaz, sans devenir liquide, s’appelle :',
                        'choices' => [
                            ['choice_text' => 'Sublimation', 'is_correct' => true],
                            ['choice_text' => 'Fusion', 'is_correct' => false],
                            ['choice_text' => 'Évaporation', 'is_correct' => false],
                            ['choice_text' => 'Condensation', 'is_correct' => false],
                        ],
                        'explanation' => 'La sublimation est le passage direct du solide au gaz, comme cela peut arriver avec certains solides dans des conditions particulières.'
                    ],
                    [
                        'question' => 'Quelle situation correspond à une solidification ?',
                        'choices' => [
                            ['choice_text' => 'De l’eau qui devient de la glace dans un congélateur', 'is_correct' => true],
                            ['choice_text' => 'De la glace qui fond au soleil', 'is_correct' => false],
                            ['choice_text' => 'De l’eau qui bout', 'is_correct' => false],
                            ['choice_text' => 'De la vapeur qui devient de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau passe du liquide au solide dans le congélateur : c’est une solidification.'
                    ],
                    [
                        'question' => 'Pourquoi un miroir de salle de bain se couvre-t-il de petites gouttes après une douche chaude ?',
                        'choices' => [
                            ['choice_text' => 'La vapeur d’eau se condense sur la surface plus froide du miroir', 'is_correct' => true],
                            ['choice_text' => 'Le miroir produit de l’eau chimiquement', 'is_correct' => false],
                            ['choice_text' => 'Le verre fond puis devient liquide', 'is_correct' => false],
                            ['choice_text' => 'L’air se transforme entièrement en eau', 'is_correct' => false],
                        ],
                        'explanation' => 'La vapeur d’eau provenant de la douche rencontre une surface plus froide et redevient liquide sous forme de gouttelettes.'
                    ],
                    [
                        'question' => 'Un glaçon posé sur une table finit par disparaître sous forme d’eau liquide. Quelle succession décrit correctement le phénomène ?',
                        'choices' => [
                            ['choice_text' => 'Solide → liquide', 'is_correct' => true],
                            ['choice_text' => 'Liquide → gaz', 'is_correct' => false],
                            ['choice_text' => 'Gaz → solide', 'is_correct' => false],
                            ['choice_text' => 'Solide → gaz directement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glaçon est d’abord solide. En se réchauffant, il fond et devient liquide.'
                    ],
                    [
                        'question' => 'Quelle transformation fait passer directement un gaz à un solide ?',
                        'choices' => [
                            ['choice_text' => 'La condensation solide, ou déposition', 'is_correct' => true],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La vaporisation', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passage direct du gaz au solide est appelé déposition ou condensation solide. Le givre peut se former de cette manière.'
                    ],
                    [
                        'question' => 'Un élève dit : « Quand un liquide s’évapore, il devient une nouvelle substance. » Quelle correction est la plus juste ?',
                        'choices' => [
                            ['choice_text' => 'Lors de l’évaporation, la substance reste la même mais change d’état', 'is_correct' => true],
                            ['choice_text' => 'Toute évaporation crée un nouvel élément', 'is_correct' => false],
                            ['choice_text' => 'L’évaporation détruit les molécules', 'is_correct' => false],
                            ['choice_text' => 'Le liquide devient toujours un solide', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaporation est un changement physique. Les particules restent de la même substance et passent simplement de l’état liquide à l’état gazeux.'
                    ],
                ],
            ],

            [
                'title' => 'Température et changements d’état',
                'description' => 'Comprenez comment le chauffage et le refroidissement influencent les changements d’état et apprenez à interpréter des situations courantes.',
                'questions' => [
                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’on chauffe un solide ?',
                        'choices' => [
                            ['choice_text' => 'Ses particules gagnent de l’énergie et s’agitent davantage', 'is_correct' => true],
                            ['choice_text' => 'Ses particules deviennent plus immobiles', 'is_correct' => false],
                            ['choice_text' => 'Son nombre de protons augmente', 'is_correct' => false],
                            ['choice_text' => 'Il perd automatiquement toute sa masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chauffage augmente l’énergie thermique du système. Les particules s’agitent davantage.'
                    ],
                    [
                        'question' => 'À pression atmosphérique normale, à quelle température l’eau pure gèle-t-elle approximativement ?',
                        'choices' => [
                            ['choice_text' => '0 °C', 'is_correct' => true],
                            ['choice_text' => '50 °C', 'is_correct' => false],
                            ['choice_text' => '100 °C', 'is_correct' => false],
                            ['choice_text' => '-100 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'À pression atmosphérique normale, l’eau pure se solidifie autour de 0 °C.'
                    ],
                    [
                        'question' => 'À pression atmosphérique normale, l’eau pure bout approximativement à :',
                        'choices' => [
                            ['choice_text' => '100 °C', 'is_correct' => true],
                            ['choice_text' => '0 °C', 'is_correct' => false],
                            ['choice_text' => '25 °C', 'is_correct' => false],
                            ['choice_text' => '200 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'À pression atmosphérique normale au niveau de la mer, l’eau bout autour de 100 °C.'
                    ],
                    [
                        'question' => 'Pourquoi un glaçon fond-il lorsqu’on le laisse dans une pièce chaude ?',
                        'choices' => [
                            ['choice_text' => 'Il reçoit de l’énergie thermique de son environnement', 'is_correct' => true],
                            ['choice_text' => 'Il perd des protons', 'is_correct' => false],
                            ['choice_text' => 'Il se transforme chimiquement en sel', 'is_correct' => false],
                            ['choice_text' => 'La gravité détruit sa structure', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glaçon reçoit de l’énergie thermique de la pièce. Cette énergie favorise la fusion, donc le passage du solide au liquide.'
                    ],
                    [
                        'question' => 'Une casserole d’eau bouillante continue de recevoir de la chaleur. Que se passe-t-il pendant l’ébullition ?',
                        'choices' => [
                            ['choice_text' => 'Une partie de l’eau passe de l’état liquide à l’état gazeux', 'is_correct' => true],
                            ['choice_text' => 'L’eau devient un autre élément', 'is_correct' => false],
                            ['choice_text' => 'Toute l’eau se solidifie', 'is_correct' => false],
                            ['choice_text' => 'Les molécules d’eau disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant l’ébullition, l’eau liquide se transforme en vapeur. Les molécules restent des molécules d’eau.'
                    ],
                    [
                        'question' => 'Pourquoi les vêtements sèchent-ils généralement plus vite lorsqu’il fait chaud ?',
                        'choices' => [
                            ['choice_text' => 'Les molécules d’eau ont davantage d’énergie et peuvent s’échapper plus facilement', 'is_correct' => true],
                            ['choice_text' => 'La chaleur détruit l’eau', 'is_correct' => false],
                            ['choice_text' => 'L’eau devient automatiquement solide', 'is_correct' => false],
                            ['choice_text' => 'La chaleur supprime la matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température plus élevée augmente l’agitation des molécules. L’évaporation peut alors être plus rapide.'
                    ],
                    [
                        'question' => 'Pourquoi voit-on parfois de la buée sur une fenêtre lorsqu’il fait froid dehors et chaud dedans ?',
                        'choices' => [
                            ['choice_text' => 'La vapeur d’eau de l’air intérieur se condense sur la surface froide', 'is_correct' => true],
                            ['choice_text' => 'La vitre produit de la vapeur', 'is_correct' => false],
                            ['choice_text' => 'L’oxygène devient liquide sur la vitre', 'is_correct' => false],
                            ['choice_text' => 'Le verre fond légèrement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air intérieur peut contenir de la vapeur d’eau. Lorsqu’elle rencontre une vitre froide, elle peut se transformer en petites gouttes liquides.'
                    ],
                    [
                        'question' => 'Un étudiant chauffe de la glace. Il observe que sa température ne monte pas immédiatement pendant la fusion. Quelle idée explique cela ?',
                        'choices' => [
                            ['choice_text' => 'Une partie de l’énergie fournie sert au changement d’état', 'is_correct' => true],
                            ['choice_text' => 'La chaleur n’entre jamais dans la glace', 'is_correct' => false],
                            ['choice_text' => 'Les molécules disparaissent pendant la fusion', 'is_correct' => false],
                            ['choice_text' => 'La température n’existe pas dans un solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant un changement d’état, l’énergie fournie peut servir à modifier l’organisation des particules plutôt qu’à augmenter directement la température.'
                    ],
                    [
                        'question' => 'Une casserole chauffe de l’eau à pression normale. Quelle transition vient généralement après l’état liquide lorsque l’eau atteint son point d’ébullition ?',
                        'choices' => [
                            ['choice_text' => 'L’état gazeux', 'is_correct' => true],
                            ['choice_text' => 'L’état solide', 'is_correct' => false],
                            ['choice_text' => 'Un nouvel élément chimique', 'is_correct' => false],
                            ['choice_text' => 'Aucune transformation possible', 'is_correct' => false],
                        ],
                        'explanation' => 'À son point d’ébullition, l’eau liquide peut passer à l’état gazeux sous forme de vapeur.'
                    ],
                    [
                        'question' => 'Un élève pense que « plus on chauffe, plus la température continue toujours à monter pendant un changement d’état ». Quelle nuance faut-il apporter ?',
                        'choices' => [
                            ['choice_text' => 'Pendant certains changements d’état, la température peut rester presque constante alors que l’énergie continue d’être fournie', 'is_correct' => true],
                            ['choice_text' => 'La température devient toujours négative', 'is_correct' => false],
                            ['choice_text' => 'La température n’existe plus', 'is_correct' => false],
                            ['choice_text' => 'Tous les changements d’état sont chimiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une substance pure à pression constante, la température peut rester stable pendant la fusion ou l’ébullition pendant que l’énergie fournie sert au changement d’état.'
                    ],
                ],
            ],

            [
                'title' => 'Évaporation et ébullition',
                'description' => 'Distinguez évaporation et ébullition et comprenez comment la surface, la température et le mouvement de l’air influencent l’évaporation.',
                'questions' => [
                    [
                        'question' => L’évaporation se produit principalement :',
                        'choices' => [
                            ['choice_text' => 'À la surface d’un liquide', 'is_correct' => true],
                            ['choice_text' => 'Uniquement au fond du récipient', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à 100 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaporation correspond au départ progressif de molécules depuis la surface du liquide. Elle peut se produire à différentes températures.'
                    ],
                    [
                        'question' => 'Quelle différence distingue le mieux l’évaporation de l’ébullition ?',
                        'choices' => [
                            ['choice_text' => 'L’ébullition se produit dans tout le liquide et forme des bulles de vapeur, tandis que l’évaporation se fait surtout à la surface', 'is_correct' => true],
                            ['choice_text' => 'L’évaporation est toujours plus chaude que l’ébullition', 'is_correct' => false],
                            ['choice_text' => 'L’ébullition transforme le liquide en solide', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a aucune différence', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaporation est un phénomène de surface. L’ébullition implique la formation de vapeur dans tout le liquide, avec des bulles qui remontent.'
                    ],
                    [
                        'question' => 'Pourquoi une flaque d’eau sèche-t-elle plus rapidement lorsqu’elle est étalée sur une grande surface ?',
                        'choices' => [
                            ['choice_text' => Une plus grande surface permet à davantage de molécules de s’échapper', 'is_correct' => true],
                            ['choice_text' => L’eau devient automatiquement plus chaude', 'is_correct' => false],
                            ['choice_text' => Le nombre de molécules diminue instantanément', 'is_correct' => false],
                            ['choice_text' => L’eau change en solide', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaporation se produit à la surface. Augmenter cette surface permet à davantage de molécules d’eau de quitter le liquide.'
                    ],
                    [
                        'question' => 'Pourquoi un linge sèche-t-il souvent plus vite lorsqu’il y a du vent ?',
                        'choices' => [
                            ['choice_text' => 'L’air en mouvement emporte la vapeur d’eau près du linge', 'is_correct' => true],
                            ['choice_text' => 'Le vent détruit les molécules d’eau', 'is_correct' => false],
                            ['choice_text' => 'Le vent transforme l’eau en glace', 'is_correct' => false],
                            ['choice_text' => 'Le vent augmente toujours la masse de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement de l’air éloigne la vapeur d’eau de la surface du linge, ce qui favorise la poursuite de l’évaporation.'
                    ],
                    [
                        'question' => 'Deux assiettes contiennent la même quantité d’eau. L’une est placée dans une pièce chaude et l’autre dans une pièce froide. Laquelle devrait sécher plus rapidement ?',
                        'choices' => [
                            ['choice_text' => 'Celle placée dans la pièce chaude', 'is_correct' => true],
                            ['choice_text' => 'Celle placée dans la pièce froide', 'is_correct' => false],
                            ['choice_text' => Elles sèchent toujours exactement au même rythme', 'is_correct' => false],
                            ['choice_text' => Aucune ne peut sécher', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température plus élevée augmente généralement l’agitation des molécules et favorise l’évaporation.'
                    ],
                    [
                        'question' => 'Une bouteille d’eau ouverte contient un peu moins d’eau après plusieurs jours. Sans fuite visible, quelle explication est la plus probable ?',
                        'choices' => [
                            ['choice_text' => Une partie de l’eau s’est évaporée', 'is_correct' => true],
                            ['choice_text' => L’eau a changé en métal', 'is_correct' => false],
                            ['choice_text' => Les molécules d’eau ont été détruites', 'is_correct' => false],
                            ['choice_text' => Le verre a absorbé toute l’eau chimiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Même à température ambiante, certaines molécules de liquide quittent progressivement la surface : c’est l’évaporation.'
                    ],
                    [
                        'question' => 'Pourquoi l’eau bout-elle avec des bulles dans toute la casserole alors qu’une flaque sur la table peut s’évaporer sans bulles ?',
                        'choices' => [
                            ['choice_text' => 'L’ébullition produit de la vapeur dans tout le liquide, tandis que l’évaporation se limite surtout à la surface', 'is_correct' => true],
                            ['choice_text' => 'Une flaque est toujours solide', 'is_correct' => false],
                            ['choice_text' => 'Les bulles d’ébullition sont des bulles d’air uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’évaporation est une réaction chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors de l’ébullition, des bulles de vapeur se forment dans le liquide. L’évaporation est un phénomène de surface qui ne nécessite pas de bulles dans tout le liquide.'
                    ],
                    [
                        'question' => 'Un élève dit : « Un liquide ne peut s’évaporer que lorsqu’il est très chaud. » Que faut-il lui répondre ?',
                        'choices' => [
                            ['choice_text' => 'Un liquide peut s’évaporer même à température ambiante', 'is_correct' => true],
                            ['choice_text' => 'L’évaporation n’arrive qu’à 100 °C', 'is_correct' => false],
                            ['choice_text' => 'L’évaporation concerne uniquement les solides', 'is_correct' => false],
                            ['choice_text' => 'L’évaporation n’existe pas dans la nature', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaporation peut se produire à température ambiante. C’est notamment ce qui permet aux flaques et aux vêtements mouillés de sécher.'
                    ],
                    [
                        'question' => 'Un parfum liquide est laissé dans une coupelle large. Pourquoi son odeur peut-elle devenir moins forte après un certain temps ?',
                        'choices' => [
                            ['choice_text' => Une partie du liquide s’est évaporée et les molécules odorantes se sont dispersées dans l’air', 'is_correct' => true],
                            ['choice_text' => Les molécules ont toutes gelé', 'is_correct' => false],
                            ['choice_text' => Le parfum est devenu automatiquement un élément métallique', 'is_correct' => false],
                            ['choice_text' => L’air détruit toujours les odeurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une partie du parfum passe dans l’air par évaporation. Au fur et à mesure, il reste moins de liquide dans la coupelle.'
                    ],
                    [
                        'question' => 'Quel changement augmenterait généralement la vitesse d’évaporation d’un liquide ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter la surface exposée', 'is_correct' => true],
                            ['choice_text' => 'Fermer complètement le récipient', 'is_correct' => false],
                            ['choice_text' => 'Diminuer la température', 'is_correct' => false],
                            ['choice_text' => 'Réduire volontairement le contact avec l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Une plus grande surface donne à davantage de molécules la possibilité de quitter le liquide. Cela accélère généralement l’évaporation.'
                    ],
                ],
            ],

            [
                'title' => 'Gaz, pression et compression',
                'description' => 'Explorez le comportement des gaz, la pression, la compression et les effets simples de la température sur un gaz.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un gaz peut-il être comprimé plus facilement qu’un liquide ?',
                        'choices' => [
                            ['choice_text' => 'Les particules d’un gaz sont beaucoup plus espacées', 'is_correct' => true],
                            ['choice_text' => 'Les particules d’un liquide n’existent pas', 'is_correct' => false],
                            ['choice_text' => 'Un liquide est toujours plus chaud', 'is_correct' => false],
                            ['choice_text' => 'Les gaz n’ont aucune masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grands espaces entre les particules d’un gaz permettent de réduire le volume en les rapprochant davantage.'
                    ],
                    [
                        'question' => 'Une seringue contient de l’air. Lorsqu’on pousse sur le piston en bouchant l’extrémité, que fait-on principalement ?',
                        'choices' => [
                            ['choice_text' => 'On comprime le gaz', 'is_correct' => true],
                            ['choice_text' => 'On transforme immédiatement le gaz en solide', 'is_correct' => false],
                            ['choice_text' => 'On augmente le nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'On détruit les molécules d’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Le piston réduit l’espace disponible pour l’air. Les particules sont rapprochées : le gaz est comprimé.'
                    ],
                    [
                        'question' => 'La pression d’un gaz vient principalement :',
                        'choices' => [
                            ['choice_text' => 'Des collisions de ses particules avec les parois du récipient', 'is_correct' => true],
                            ['choice_text' => 'De la couleur du gaz', 'is_correct' => false],
                            ['choice_text' => 'Du nombre de neutrons dans les parois', 'is_correct' => false],
                            ['choice_text' => 'De l’absence de particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules du gaz se déplacent et heurtent les parois. L’ensemble de ces collisions produit la pression mesurée.'
                    ],
                    [
                        'question' => 'Un ballon fermé est placé au soleil et devient légèrement plus gonflé. Quelle explication simple convient ?',
                        'choices' => [
                            ['choice_text' => 'Le gaz se réchauffe et ses particules s’agitent davantage', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de protons de l’air augmente', 'is_correct' => false],
                            ['choice_text' => 'Le gaz devient un liquide', 'is_correct' => false],
                            ['choice_text' => 'Le caoutchouc produit de nouvelles molécules d’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chauffage augmente l’agitation des particules du gaz. Dans un ballon souple, cela peut provoquer une augmentation du volume.'
                    ],
                    [
                        'question' => 'Si l’on ajoute davantage d’air dans un ballon, que se passe-t-il généralement ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de particules de gaz augmente et le ballon peut se dilater', 'is_correct' => true],
                            ['choice_text' => 'Les particules deviennent du liquide', 'is_correct' => false],
                            ['choice_text' => 'Le ballon perd toute sa masse', 'is_correct' => false],
                            ['choice_text' => 'La pression devient forcément nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter de l’air augmente le nombre de particules présentes. Elles exercent une pression sur les parois du ballon, qui peut alors se dilater.'
                    ],
                    [
                        'question' => 'Pourquoi une bouteille en plastique vide et fermée peut-elle s’écraser lorsqu’on la refroidit après l’avoir chauffée ?',
                        'choices' => [
                            ['choice_text' => 'La pression du gaz à l’intérieur peut diminuer lorsque le gaz refroidit', 'is_correct' => true],
                            ['choice_text' => 'Le plastique perd tous ses atomes', 'is_correct' => false],
                            ['choice_text' => L’air devient automatiquement solide', 'is_correct' => false],
                            ['choice_text' => La bouteille produit de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refroidissement peut réduire l’agitation du gaz et donc sa pression interne. La pression extérieure peut alors comprimer la bouteille.'
                    ],
                    [
                        'question' => 'Deux gaz occupent le même récipient à la même température. Pourquoi peuvent-ils tous deux exercer une pression ?',
                        'choices' => [
                            ['choice_text' => 'Les particules de chacun des gaz se déplacent et heurtent les parois', 'is_correct' => true],
                            ['choice_text' => 'Un seul gaz peut toujours avoir une pression', 'is_correct' => false],
                            ['choice_text' => 'La pression ne dépend jamais des particules', 'is_correct' => false],
                            ['choice_text' => 'Les gaz n’ont pas de mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque gaz est constitué de particules en mouvement. Leurs collisions avec les parois participent à la pression observée.'
                    ],
                    [
                        'question' => 'Un élève pousse le piston d’une seringue contenant de l’air, mais l’extrémité est bouchée. Pourquoi sent-il une résistance ?',
                        'choices' => [
                            ['choice_text' => 'L’air comprimé exerce une pression contre le piston', 'is_correct' => true],
                            ['choice_text' => 'Les molécules de l’air deviennent solides instantanément', 'is_correct' => false],
                            ['choice_text' => 'Le vide pousse vers l’extérieur', 'is_correct' => false],
                            ['choice_text' => 'Le piston perd sa masse', 'is_correct' => false],
                        ],
                        'explanation' => 'En réduisant le volume disponible, on comprime le gaz. Sa pression augmente et il s’oppose davantage au déplacement du piston.'
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement si l’on augmente fortement le volume disponible pour un gaz tout en gardant la même quantité de gaz et une température comparable ?',
                        'choices' => [
                            ['choice_text' => 'La pression diminue généralement', 'is_correct' => true],
                            ['choice_text' => 'La pression augmente forcément', 'is_correct' => false],
                            ['choice_text' => 'La pression devient immédiatement infinie', 'is_correct' => false],
                            ['choice_text' => 'Le gaz devient automatiquement liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec plus d’espace, les particules frappent moins souvent chaque unité de surface des parois. La pression diminue généralement.'
                    ],
                    [
                        'question' => 'Un étudiant croit que comprimer un gaz signifie supprimer des particules. Quelle correction doit-il retenir ?',
                        'choices' => [
                            ['choice_text' => 'On rapproche principalement les particules en réduisant l’espace disponible', 'is_correct' => true],
                            ['choice_text' => 'On détruit les particules', 'is_correct' => false],
                            ['choice_text' => 'On transforme les particules en protons', 'is_correct' => false],
                            ['choice_text' => 'On retire tout l’air du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une compression, la quantité de gaz peut rester la même. C’est surtout le volume disponible entre les particules qui diminue.'
                    ],
                ],
            ],

            [
                'title' => 'Diffusion et mouvement des particules',
                'description' => 'Comprenez la diffusion dans les gaz et les liquides et reliez-la au mouvement permanent des particules.',
                'questions' => [
                    [
                        'question' => 'La diffusion correspond au fait que des particules :',
                        'choices' => [
                            ['choice_text' => 'Se répartissent progressivement dans un espace disponible', 'is_correct' => true],
                            ['choice_text' => 'S’arrêtent toutes au même endroit', 'is_correct' => false],
                            ['choice_text' => 'Deviennent automatiquement solides', 'is_correct' => false],
                            ['choice_text' => 'Perdent leur masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffusion est la dispersion progressive de particules due à leur mouvement, jusqu’à une répartition plus uniforme.'
                    ],
                    [
                        'question' => 'Une goutte de colorant déposée dans un verre d’eau finit par se répartir dans tout le verre. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Les particules d’eau et de colorant sont en mouvement', 'is_correct' => true],
                            ['choice_text' => 'Les particules sont immobiles', 'is_correct' => false],
                            ['choice_text' => 'Le colorant devient un gaz', 'is_correct' => false],
                            ['choice_text' => 'La gravité mélange toujours parfaitement les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules sont en mouvement permanent et finissent par se disperser. La diffusion contribue à cette répartition.'
                    ],
                    [
                        'question' => 'Pourquoi une odeur se diffuse-t-elle généralement plus rapidement dans l’air que dans l’eau ?',
                        'choices' => [
                            ['choice_text' => 'Les particules d’un gaz sont plus libres et plus espacées', 'is_correct' => true],
                            ['choice_text' => 'L’air ne contient aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Les molécules sont détruites dans l’eau', 'is_correct' => false],
                            ['choice_text' => 'L’eau est toujours solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules gazeuses se déplacent plus librement et les interactions entre elles sont généralement moins contraignantes que dans un liquide.'
                    ],
                    [
                        'question' => 'Un morceau de sucre est laissé au fond d’une tasse de thé sans être agité. Le sucre finit par se répartir dans le liquide. Quel phénomène y contribue ?',
                        'choices' => [
                            ['choice_text' => 'La diffusion', 'is_correct' => true],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                            ['choice_text' => 'La combustion', 'is_correct' => false],
                            ['choice_text' => 'La fusion nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Après dissolution, les particules de sucre se déplacent au sein du liquide et se répartissent progressivement par diffusion.'
                    ],
                    [
                        'question' => 'Quelle situation accélère généralement la diffusion d’une substance dans un liquide ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter la température', 'is_correct' => true],
                            ['choice_text' => 'Refroidir fortement le liquide', 'is_correct' => false],
                            ['choice_text' => Transformer le liquide en solide immédiatement', 'is_correct' => false],
                            ['choice_text' => Supprimer toutes les particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température plus élevée augmente généralement l’agitation des particules et peut donc accélérer la diffusion.'
                    ],
                    [
                        'question' => 'Deux élèves placent chacun une goutte de colorant dans de l’eau. L’un utilise de l’eau froide et l’autre de l’eau chaude. Dans quelle eau la diffusion sera-t-elle généralement plus rapide ?',
                        'choices' => [
                            ['choice_text' => 'Dans l’eau chaude', 'is_correct' => true],
                            ['choice_text' => 'Dans l’eau froide', 'is_correct' => false],
                            ['choice_text' => 'À la même vitesse dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Aucune diffusion ne se produit', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’eau chaude, les particules ont en moyenne davantage d’énergie et se déplacent plus rapidement, ce qui favorise la diffusion.'
                    ],
                    [
                        'question' => 'Un parfum est pulvérisé dans une pièce. La personne assise loin de la source finit par sentir l’odeur. Que montre ce phénomène ?',
                        'choices' => [
                            ['choice_text' => 'Les molécules odorantes se déplacent dans l’air', 'is_correct' => true],
                            ['choice_text' => 'Les molécules restent immobiles', 'is_correct' => false],
                            ['choice_text' => 'Le parfum devient un solide dans l’air', 'is_correct' => false],
                            ['choice_text' => 'L’air est vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les molécules du parfum passent dans l’air et se déplacent dans toutes les directions. Elles atteignent progressivement les zones plus éloignées.'
                    ],
                    [
                        'question' => 'Pourquoi la diffusion finit-elle généralement par ralentir lorsque les particules sont déjà réparties de manière assez uniforme ?',
                        'choices' => [
                            ['choice_text' => 'Il y a moins de différence de concentration entre les différentes zones', 'is_correct' => true],
                            ['choice_text' => 'Les particules arrêtent définitivement de bouger', 'is_correct' => false],
                            ['choice_text' => Les molécules disparaissent', 'is_correct' => false],
                            ['choice_text' => La matière cesse d’exister', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules continuent de bouger, mais lorsque la concentration devient uniforme, il n’y a plus de déplacement net d’une zone très concentrée vers une zone peu concentrée.'
                    ],
                    [
                        'question' => 'Un élève dit : « Si une substance diffuse, cela veut dire qu’elle se déplace seulement dans une direction. » Quelle réponse est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les particules se déplacent dans de nombreuses directions, ce qui produit une répartition progressive', 'is_correct' => true],
                            ['choice_text' => 'Toutes les particules vont toujours vers le haut', 'is_correct' => false],
                            ['choice_text' => 'Toutes les particules descendent', 'is_correct' => false],
                            ['choice_text' => 'Les particules ne bougent pas réellement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules sont animées de mouvements aléatoires dans plusieurs directions. La diffusion résulte de cet ensemble de mouvements.'
                    ],
                    [
                        'question' => 'Quel exemple montre clairement la diffusion d’un gaz ?',
                        'choices' => [
                            ['choice_text' => L’odeur d’un parfum qui se répand dans une pièce', 'is_correct' => true],
                            ['choice_text' => Un glaçon qui fond', 'is_correct' => false],
                            ['choice_text' => Une pierre qui reste sur une table', 'is_correct' => false],
                            ['choice_text' => L’eau qui gèle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’odeur du parfum se répand parce que ses molécules se déplacent dans l’air et se mélangent progressivement à celui-ci.'
                    ],
                ],
            ],

            [
                'title' => 'Diagrammes et lecture des états de la matière',
                'description' => 'Apprenez à interpréter des représentations simples des particules et à reconnaître l’état d’une substance à partir de son organisation microscopique.',
                'questions' => [
                    [
                        'question' => 'Un dessin montre des particules très proches, régulièrement arrangées et vibrantes autour de positions fixes. Quel état représente-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Solide', 'is_correct' => true],
                            ['choice_text' => 'Liquide', 'is_correct' => false],
                            ['choice_text' => 'Gaz', 'is_correct' => false],
                            ['choice_text' => 'Plasma uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette organisation correspond à un solide : les particules sont rapprochées et organisées.'
                    ],
                    [
                        'question' => 'Un schéma montre des particules proches mais désordonnées et capables de se déplacer les unes autour des autres. Quel état est représenté ?',
                        'choices' => [
                            ['choice_text' => 'Liquide', 'is_correct' => true],
                            ['choice_text' => 'Solide', 'is_correct' => false],
                            ['choice_text' => 'Gaz', 'is_correct' => false],
                            ['choice_text' => 'Vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un liquide, les particules restent proches mais ne sont pas bloquées dans une organisation rigide.'
                    ],
                    [
                        'question' => 'Un schéma montre des particules très éloignées et dispersées dans tout le récipient. Quel état est le plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Gaz', 'is_correct' => true],
                            ['choice_text' => 'Solide', 'is_correct' => false],
                            ['choice_text' => 'Liquide', 'is_correct' => false],
                            ['choice_text' => 'Cristal seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'Des particules très espacées et réparties dans tout le récipient sont caractéristiques d’un gaz.'
                    ],
                    [
                        'question' => 'Pourquoi les particules d’un liquide ne sont-elles pas représentées aussi éloignées que celles d’un gaz ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles restent relativement proches les unes des autres', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un liquide ne contient aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Parce que les particules d’un liquide sont toujours solides', 'is_correct' => false],
                            ['choice_text' => 'Parce que les liquides contiennent uniquement des protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules d’un liquide sont proches, mais elles peuvent se déplacer. Leurs distances moyennes sont donc plus faibles que dans un gaz.'
                    ],
                    [
                        'question' => 'Un diagramme montre exactement les mêmes particules avant et après un changement d’état, mais leur espacement change. Que cela signifie-t-il ?',
                        'choices' => [
                            ['choice_text' => 'La substance a changé d’état sans changer de nature chimique', 'is_correct' => true],
                            ['choice_text' => 'Une nouvelle substance a forcément été créée', 'is_correct' => false],
                            ['choice_text' => 'Les particules ont été transformées en autres éléments', 'is_correct' => false],
                            ['choice_text' => 'Les protons ont disparu', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’un changement d’état, les particules restent les mêmes. Leur organisation et leur mouvement changent.'
                    ],
                    [
                        'question' => 'Un étudiant dessine les particules d’un gaz toutes regroupées dans un coin du récipient et immobiles. Quel est le principal problème de son dessin ?',
                        'choices' => [
                            ['choice_text' => 'Les particules d’un gaz se déplacent et se répartissent dans tout l’espace disponible', 'is_correct' => true],
                            ['choice_text' => 'Les particules d’un gaz doivent être toutes dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'Un gaz doit être représenté comme un solide compact', 'is_correct' => false],
                            ['choice_text' => 'Les gaz n’ont pas de particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules d’un gaz sont en mouvement et occupent tout le volume accessible au gaz.'
                    ],
                    [
                        'question' => 'Un dessin représente des particules qui restent proches, mais une frontière rigide n’existe pas entre elles. Quel état cela peut-il représenter ?',
                        'choices' => [
                            ['choice_text' => 'Liquide', 'is_correct' => true],
                            ['choice_text' => 'Solide cristallin uniquement', 'is_correct' => false],
                            ['choice_text' => 'Gaz uniquement', 'is_correct' => false],
                            ['choice_text' => 'Vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Un liquide est constitué de particules proches qui peuvent se déplacer et glisser les unes par rapport aux autres.'
                    ],
                    [
                        'question' => 'Un schéma montre deux échantillons contenant le même nombre de particules. Dans le premier, elles sont rapprochées ; dans le second, elles sont très espacées. Le second est probablement :',
                        'choices' => [
                            ['choice_text' => 'Un gaz', 'is_correct' => true],
                            ['choice_text' => 'Un solide', 'is_correct' => false],
                            ['choice_text' => 'Un liquide uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un cristal plus dense', 'is_correct' => false],
                        ],
                        'explanation' => 'Un grand espacement moyen entre les particules correspond au comportement d’un gaz.'
                    ],
                    [
                        'question' => 'Pourquoi le même nombre de particules peut-il occuper un volume différent selon l’état ?',
                        'choices' => [
                            ['choice_text' => 'Les distances entre les particules peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de protons change toujours', 'is_correct' => false],
                            ['choice_text' => Les particules perdent leur identité', 'is_correct' => false],
                            ['choice_text' => Les atomes cessent d’avoir une masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’un changement d’état, les particules peuvent être plus ou moins éloignées les unes des autres. Cela modifie le volume occupé sans changer leur identité.'
                    ],
                    [
                        'question' => 'Quelle représentation correspond le mieux à un liquide ?',
                        'choices' => [
                            ['choice_text' => 'Des particules proches, désordonnées et mobiles', 'is_correct' => true],
                            ['choice_text' => 'Des particules très éloignées et réparties partout', 'is_correct' => false],
                            ['choice_text' => 'Des particules immobiles et parfaitement alignées', 'is_correct' => false],
                            ['choice_text' => 'Aucune particule visible', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules d’un liquide sont proches comme dans un solide, mais elles peuvent se déplacer et l’organisation est moins rigide.'
                    ],
                ],
            ],

            [
                'title' => 'Applications quotidiennes des états de la matière',
                'description' => 'Utilisez les notions de changements d’état et de mouvement des particules pour expliquer des phénomènes observés à la maison et dans la nature.',
                'questions' => [
                    [
                        'question' => 'Pourquoi met-on une boisson au réfrigérateur pour la refroidir ?',
                        'choices' => [
                            ['choice_text' => 'On réduit l’agitation moyenne de ses particules', 'is_correct' => true],
                            ['choice_text' => 'On retire tous ses électrons', 'is_correct' => false],
                            ['choice_text' => 'On transforme automatiquement la boisson en solide', 'is_correct' => false],
                            ['choice_text' => 'On change son numéro atomique', 'is_correct' => false],
                        ],
                        'explanation' => 'Refroidir une substance diminue son énergie thermique et donc, en général, l’agitation moyenne de ses particules.'
                    ],
                    [
                        'question' => 'Pourquoi voit-on des glaçons flotter dans l’eau ?',
                        'choices' => [
                            ['choice_text' => 'La glace a une masse volumique inférieure à celle de l’eau liquide', 'is_correct' => true],
                            ['choice_text' => 'La glace est toujours plus chaude que l’eau', 'is_correct' => false],
                            ['choice_text' => 'Les glaçons ne contiennent pas de molécules', 'is_correct' => false],
                            ['choice_text' => 'L’eau liquide est toujours plus dense que tous les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'La glace est moins dense que l’eau liquide, ce qui permet aux glaçons de flotter.'
                    ],
                    [
                        'question' => 'Pourquoi les gouttes d’eau apparaissent-elles sur une bouteille froide sortie du réfrigérateur ?',
                        'choices' => [
                            ['choice_text' => 'La vapeur d’eau de l’air se condense sur la bouteille', 'is_correct' => true],
                            ['choice_text' => 'L’eau traverse le plastique dans tous les cas', 'is_correct' => false],
                            ['choice_text' => La bouteille produit elle-même de l’eau', 'is_correct' => false],
                            ['choice_text' => L’air solide fond sur la bouteille', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air contient de la vapeur d’eau. Au contact de la surface froide, cette vapeur se transforme en liquide.'
                    ],
                    [
                        'question' => 'Pourquoi la buée d’une douche disparaît-elle progressivement lorsque la salle de bain aère ?',
                        'choices' => [
                            ['choice_text' => 'L’air plus sec et le renouvellement de l’air favorisent l’évaporation et réduisent la condensation', 'is_correct' => true],
                            ['choice_text' => 'Les molécules d’eau disparaissent complètement', 'is_correct' => false],
                            ['choice_text' => 'La vapeur devient automatiquement un solide', 'is_correct' => false],
                            ['choice_text' => 'Le miroir absorbe chimiquement toute l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aération renouvelle l’air et peut réduire la quantité de vapeur présente près des surfaces. Les gouttelettes peuvent alors s’évaporer plus facilement.'
                    ],
                    [
                        'question' => 'Pourquoi le beurre laissé au soleil devient-il mou puis liquide ?',
                        'choices' => [
                            ['choice_text' => 'Il reçoit de l’énergie thermique qui facilite sa fusion', 'is_correct' => true],
                            ['choice_text' => 'Les atomes de beurre deviennent de l’eau', 'is_correct' => false],
                            ['choice_text' => 'Le beurre perd tous ses électrons', 'is_correct' => false],
                            ['choice_text' => 'Le soleil détruit sa matière', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur augmente l’agitation des particules du beurre. Sa structure devient moins rigide jusqu’à ce qu’il fonde.'
                    ],
                    [
                        'question' => 'Pourquoi un parfum laissé dans une voiture chaude peut-il devenir moins présent dans son flacon ?',
                        'choices' => [
                            ['choice_text' => 'La température élevée favorise l’évaporation des substances volatiles', 'is_correct' => true],
                            ['choice_text' => 'Les molécules du parfum deviennent des métaux', 'is_correct' => false],
                            ['choice_text' => 'Le flacon absorbe toute la matière', 'is_correct' => false],
                            ['choice_text' => 'La chaleur détruit toujours toutes les molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température élevée peut accélérer l’évaporation de certains composants volatils du parfum.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on souvent du sel sur certaines routes verglacées ?',
                        'choices' => [
                            ['choice_text' => 'Le sel dissous modifie les conditions de solidification de l’eau', 'is_correct' => true],
                            ['choice_text' => 'Le sel chauffe toujours la route', 'is_correct' => false],
                            ['choice_text' => 'Le sel transforme directement la glace en gaz', 'is_correct' => false],
                            ['choice_text' => 'Le sel élimine les molécules d’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sel dissous abaisse le point de congélation de l’eau. Dans certaines conditions, cela aide donc à faire fondre la glace.'
                    ],
                    [
                        'question' => 'Pourquoi une bouteille en verre peut-elle se fissurer si elle est remplie d’eau puis oubliée au congélateur ?',
                        'choices' => [
                            ['choice_text' => 'L’eau augmente de volume lorsqu’elle gèle', 'is_correct' => true],
                            ['choice_text' => 'La glace occupe toujours moins de place que l’eau', 'is_correct' => false],
                            ['choice_text' => 'Le verre devient liquide avant l’eau', 'is_correct' => false],
                            ['choice_text' => 'Les molécules d’eau disparaissent en gelant', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau possède la particularité d’augmenter de volume lorsqu’elle se transforme en glace. Dans un récipient presque plein et fermé, cette expansion peut exercer une forte pression.'
                    ],
                    [
                        'question' => 'Pourquoi une fenêtre peut-elle être couverte de givre lors d’une nuit très froide ?',
                        'choices' => [
                            ['choice_text' => 'La vapeur d’eau peut se transformer directement en glace sur la surface froide', 'is_correct' => true],
                            ['choice_text' => 'L’eau liquide bout sur la vitre', 'is_correct' => false],
                            ['choice_text' => La vitre produit des cristaux de glace', 'is_correct' => false],
                            ['choice_text' => 'L’air devient automatiquement un liquide épais', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans certaines conditions très froides, la vapeur d’eau peut passer directement à l’état solide et former du givre.'
                    ],
                    [
                        'question' => 'Après une pluie, une flaque disparaît sans qu’on la vide. Quel phénomène explique principalement cette disparition ?',
                        'choices' => [
                            ['choice_text' => 'L’évaporation', 'is_correct' => true],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                            ['choice_text' => 'La condensation', 'is_correct' => false],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                        ],
                        'explanation' => 'Une partie des molécules d’eau quitte progressivement la surface de la flaque et rejoint l’air sous forme de vapeur.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale des états de la matière',
                'description' => 'Révisez les propriétés des trois états, les changements d’état et le modèle particulaire à travers des questions de synthèse.',
                'questions' => [
                    [
                        'question' => 'Lequel des trois états possède généralement une forme et un volume propres ?',
                        'choices' => [
                            ['choice_text' => 'Le solide', 'is_correct' => true],
                            ['choice_text' => 'Le liquide', 'is_correct' => false],
                            ['choice_text' => 'Le gaz', 'is_correct' => false],
                            ['choice_text' => 'Tous les états', 'is_correct' => false],
                        ],
                        'explanation' => 'Un solide garde sa forme et son volume. Un liquide change de forme, et un gaz change de forme et de volume.'
                    ],
                    [
                        'question' => 'Quel changement fait passer un liquide à un gaz ?',
                        'choices' => [
                            ['choice_text' => 'La vaporisation', 'is_correct' => true],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                            ['choice_text' => 'La condensation', 'is_correct' => false],
                        ],
                        'explanation' => 'La vaporisation correspond au passage du liquide vers le gaz, par évaporation ou par ébullition.'
                    ],
                    [
                        'question' => 'Quel changement fait passer un gaz à un liquide ?',
                        'choices' => [
                            ['choice_text' => 'La condensation', 'is_correct' => true],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                        ],
                        'explanation' => 'La condensation correspond au passage de l’état gazeux à l’état liquide.'
                    ],
                    [
                        'question' => 'Dans quel état les particules sont-elles généralement les plus espacées ?',
                        'choices' => [
                            ['choice_text' => 'Dans un gaz', 'is_correct' => true],
                            ['choice_text' => 'Dans un liquide', 'is_correct' => false],
                            ['choice_text' => 'Dans un solide', 'is_correct' => false],
                            ['choice_text' => 'Dans tous les états de la même manière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules d’un gaz sont beaucoup plus éloignées les unes des autres que celles d’un solide ou d’un liquide.'
                    ],
                    [
                        'question' => 'Une tasse de thé refroidit. Que devient généralement l’agitation moyenne de ses particules ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut jamais changer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refroidissement diminue généralement l’énergie thermique et donc l’agitation moyenne des particules.'
                    ],
                    [
                        'question' => 'Pourquoi un gaz remplit-il le récipient qui le contient ?',
                        'choices' => [
                            ['choice_text' => 'Ses particules se déplacent librement dans l’espace disponible', 'is_correct' => true],
                            ['choice_text' => 'Ses particules ont une forme fixe', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Ses particules sont toutes collées au fond', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules gazeuses se déplacent dans toutes les directions et occupent l’ensemble du volume disponible.'
                    ],
                    [
                        'question' => 'Un glaçon fond dans un verre. Que peut-on dire des molécules d’eau ?',
                        'choices' => [
                            ['choice_text' => 'Elles restent des molécules d’eau mais deviennent plus mobiles', 'is_correct' => true],
                            ['choice_text' => 'Elles deviennent des molécules de sucre', 'is_correct' => false],
                            ['choice_text' => 'Elles sont détruites', 'is_correct' => false],
                            ['choice_text' => 'Elles deviennent des atomes de fer', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion est un changement physique. Les molécules d’eau restent identiques, mais leur organisation et leur mouvement changent.'
                    ],
                    [
                        'question' => 'Un miroir se couvre de gouttes après une douche chaude. Quel changement d’état explique le phénomène ?',
                        'choices' => [
                            ['choice_text' => 'Condensation', 'is_correct' => true],
                            ['choice_text' => 'Fusion', 'is_correct' => false],
                            ['choice_text' => 'Sublimation', 'is_correct' => false],
                            ['choice_text' => 'Solidification', 'is_correct' => false],
                        ],
                        'explanation' => 'La vapeur d’eau de l’air se refroidit au contact du miroir et redevient liquide sous forme de gouttelettes.'
                    ],
                    [
                        'question' => 'Une élève veut faire sécher une serviette plus rapidement. Laquelle de ces actions serait la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'L’étendre largement dans un endroit chaud et aéré', 'is_correct' => true],
                            ['choice_text' => 'La plier en plusieurs couches', 'is_correct' => false],
                            ['choice_text' => 'La placer dans un endroit froid et fermé', 'is_correct' => false],
                            ['choice_text' => 'Réduire au maximum sa surface exposée', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur, l’exposition d’une grande surface et le mouvement de l’air favorisent généralement l’évaporation de l’eau.'
                    ],
                    [
                        'question' => 'Un étudiant résume ainsi : « Un changement d’état modifie la substance elle-même. » Quelle reformulation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Un changement d’état modifie l’état physique de la substance sans nécessairement changer sa nature chimique', 'is_correct' => true],
                            ['choice_text' => 'Tout changement d’état crée un nouvel élément', 'is_correct' => false],
                            ['choice_text' => 'Tout changement d’état détruit les particules', 'is_correct' => false],
                            ['choice_text' => 'Un changement d’état est toujours une réaction chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’un changement d’état, comme la fusion ou la vaporisation, la substance reste chimiquement la même.'
                    ],
                ],
            ],
        ];

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 65],
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