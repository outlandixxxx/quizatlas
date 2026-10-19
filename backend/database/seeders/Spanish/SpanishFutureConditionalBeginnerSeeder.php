<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishFutureConditionalBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'future-conditional')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases du futur simple en espagnol',
                'description' => 'Entraînez-vous avec le futur simple pour les projets, les prédictions, les promesses et les événements à venir.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle forme complète : « Mañana yo ___ a mi abuela. » ?',
                        'choices' => [
                            ['choice_text' => 'visitaría', 'is_correct' => false],
                            ['choice_text' => 'visitaba', 'is_correct' => false],
                            ['choice_text' => 'visitaré', 'is_correct' => true],
                            ['choice_text' => 'visité', 'is_correct' => false],
                        ],
                        'explanation' => '« Mañana » renvoie au futur, donc le futur simple « visitaré » est le choix naturel.',
                    ],
                    [
                        'question' => 'Que signifie « comeremos » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons mangé', 'is_correct' => false],
                            ['choice_text' => 'Nous mangerons', 'is_correct' => true],
                            ['choice_text' => 'Nous mangions', 'is_correct' => false],
                            ['choice_text' => 'Nous mangerions', 'is_correct' => false],
                        ],
                        'explanation' => '« Comeremos » est le futur simple de « comer » à la première personne du pluriel : « nous mangerons ».',
                    ],
                    [
                        'question' => 'Quelle terminaison s’utilise pour le futur régulier avec « yo » ?',
                        'choices' => [
                            ['choice_text' => '-é', 'is_correct' => true],
                            ['choice_text' => '-ía', 'is_correct' => false],
                            ['choice_text' => '-aste', 'is_correct' => false],
                            ['choice_text' => '-o', 'is_correct' => false],
                        ],
                        'explanation' => 'Les formes régulières du futur utilisent l’infinitif suivi de « -é » pour yo, comme dans « hablaré » et « viviré ».',
                    ],
                    [
                        'question' => 'Quelle phrase parle d’un événement futur probable ?',
                        'choices' => [
                            ['choice_text' => 'El próximo verano viajábamos a España.', 'is_correct' => false],
                            ['choice_text' => 'El próximo verano viajamos a España ayer.', 'is_correct' => false],
                            ['choice_text' => 'El próximo verano viajaríamos a España ayer.', 'is_correct' => false],
                            ['choice_text' => 'El próximo verano viajaremos a España.', 'is_correct' => true],
                        ],
                        'explanation' => '« El próximo verano » indique le futur, et « viajaremos » exprime l’action future prévue ou attendue.',
                    ],
                    [
                        'question' => 'Quelle phrase ressemble à une promesse ?',
                        'choices' => [
                            ['choice_text' => 'Te ayudaba con la tarea.', 'is_correct' => false],
                            ['choice_text' => 'Te ayudaré con la tarea.', 'is_correct' => true],
                            ['choice_text' => 'Te ayudaría con la tarea ayer.', 'is_correct' => false],
                            ['choice_text' => 'Te ayudé con la tarea mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Te ayudaré » signifie « je vais t’aider », ce qui fonctionne naturellement comme une promesse ou un engagement.',
                    ],
                    [
                        'question' => 'Un ami demande ce que vous ferez la semaine prochaine. Quelle réponse est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Trabajaba desde casa.', 'is_correct' => false],
                            ['choice_text' => 'Trabajé desde casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Trabajaría desde casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Trabajaré desde casa.', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme du futur « trabajaré » décrit directement ce que la personne prévoit de faire la semaine prochaine.',
                    ],
                    [
                        'question' => 'Quelle est la forme correcte du futur de « tener » pour yo ?',
                        'choices' => [
                            ['choice_text' => 'tendré', 'is_correct' => true],
                            ['choice_text' => 'teneré', 'is_correct' => false],
                            ['choice_text' => 'tenía', 'is_correct' => false],
                            ['choice_text' => 'tendría', 'is_correct' => false],
                        ],
                        'explanation' => '« Tener » a le radical irrégulier du futur « tendr- », donc yo devient « tendré ».',
                    ],
                    [
                        'question' => 'Quelle est la forme correcte du futur de « hacer » pour nosotros ?',
                        'choices' => [
                            ['choice_text' => 'haceremos', 'is_correct' => false],
                            ['choice_text' => 'haríamos', 'is_correct' => false],
                            ['choice_text' => 'haremos', 'is_correct' => true],
                            ['choice_text' => 'hicimos', 'is_correct' => false],
                        ],
                        'explanation' => '« Hacer » utilise le radical du futur « har- », ce qui donne « haremos » pour nosotros.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle pour une prédiction météo ?',
                        'choices' => [
                            ['choice_text' => 'Mañana llovía.', 'is_correct' => false],
                            ['choice_text' => 'Mañana lloverá.', 'is_correct' => true],
                            ['choice_text' => 'Mañana llovió.', 'is_correct' => false],
                            ['choice_text' => 'Mañana llovería ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Lloverá » est la forme du futur et convient à une prédiction sur la météo de demain.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le futur ?',
                        'choices' => [
                            ['choice_text' => 'Mis padres llegarán a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Mis padres llegarían a las ocho ayer.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres llegaban a las ocho mañana.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres llegaron a las ocho mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Llegarán » est la forme du futur à la troisième personne du pluriel et correspond à une heure d’arrivée future.',
                    ],
                ],
            ],
            [
                'title' => 'Formes du futur et radicaux irréguliers',
                'description' => 'Gagnez en confiance avec les terminaisons régulières du futur et les radicaux irréguliers courants utilisés dans l’espagnol de tous les jours.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle est la forme du futur de « salir » pour yo ?',
                        'choices' => [
                            ['choice_text' => 'saliré', 'is_correct' => false],
                            ['choice_text' => 'salía', 'is_correct' => false],
                            ['choice_text' => 'saldría', 'is_correct' => false],
                            ['choice_text' => 'saldré', 'is_correct' => true],
                        ],
                        'explanation' => '« Salir » utilise le radical du futur « saldr- », donc la forme yo est « saldré ».',
                    ],
                    [
                        'question' => 'Quelle est la forme du futur de « poner » pour ella ?',
                        'choices' => [
                            ['choice_text' => 'pondrá', 'is_correct' => true],
                            ['choice_text' => 'ponerá', 'is_correct' => false],
                            ['choice_text' => 'ponía', 'is_correct' => false],
                            ['choice_text' => 'pondría', 'is_correct' => false],
                        ],
                        'explanation' => '« Poner » a le radical irrégulier du futur « pondr- », ce qui donne « pondrá » pour ella.',
                    ],
                    [
                        'question' => 'Quelle est la forme du futur de « decir » pour ellos ?',
                        'choices' => [
                            ['choice_text' => 'decirán', 'is_correct' => false],
                            ['choice_text' => 'decían', 'is_correct' => false],
                            ['choice_text' => 'dirán', 'is_correct' => true],
                            ['choice_text' => 'dirían', 'is_correct' => false],
                        ],
                        'explanation' => '« Decir » utilise le radical irrégulier du futur « dir- », donc la forme ellos est « dirán ».',
                    ],
                    [
                        'question' => 'Quelle forme du futur est correcte pour « venir » avec nosotros ?',
                        'choices' => [
                            ['choice_text' => 'veniramos', 'is_correct' => false],
                            ['choice_text' => 'vendremos', 'is_correct' => true],
                            ['choice_text' => 'veniremos', 'is_correct' => false],
                            ['choice_text' => 'vendríamos', 'is_correct' => false],
                        ],
                        'explanation' => '« Venir » utilise le radical « vendr- », donc nosotros donne « vendremos ».',
                    ],
                    [
                        'question' => 'Un apprenant dit « teneré » parce que l’infinitif est « tener ». Quelle est la forme correcte du futur pour yo ?',
                        'choices' => [
                            ['choice_text' => 'teneré', 'is_correct' => false],
                            ['choice_text' => 'tendría', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => true],
                            ['choice_text' => 'tenía', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes les formes du futur ne gardent pas l’infinitif complet. « Tener » change son radical en « tendr- », ce qui donne « tendré ».',
                    ],
                    [
                        'question' => 'Quelle paire ne contient que des formes correctes du futur ?',
                        'choices' => [
                            ['choice_text' => 'poderé / quererán', 'is_correct' => false],
                            ['choice_text' => 'podré / querrán', 'is_correct' => true],
                            ['choice_text' => 'podría / querían', 'is_correct' => false],
                            ['choice_text' => 'podé / querré', 'is_correct' => false],
                        ],
                        'explanation' => '« Poder » utilise « podr- » et « querer » utilise « querr- », donc « podré » et « querrán » sont corrects.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le futur de « saber » ?',
                        'choices' => [
                            ['choice_text' => 'Mañana saberé la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Mañana sabía la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Mañana sabría la respuesta ayer.', 'is_correct' => false],
                            ['choice_text' => 'Mañana sabré la respuesta.', 'is_correct' => true],
                        ],
                        'explanation' => '« Saber » utilise le radical du futur « sabr- », donc « sabré » est correct.',
                    ],
                    [
                        'question' => 'Quelle forme du futur de « haber » apparaît dans l’expression courante « il y aura » ?',
                        'choices' => [
                            ['choice_text' => 'habrá', 'is_correct' => true],
                            ['choice_text' => 'haberá', 'is_correct' => false],
                            ['choice_text' => 'habría', 'is_correct' => false],
                            ['choice_text' => 'hubo', 'is_correct' => false],
                        ],
                        'explanation' => '« Habrá » est la forme du futur utilisée pour « il y aura », comme dans « Habrá una reunión mañana ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement un projet futur avec un radical irrégulier ?',
                        'choices' => [
                            ['choice_text' => 'Teneremos más tiempo el sábado.', 'is_correct' => false],
                            ['choice_text' => 'Tendríamos más tiempo el sábado ayer.', 'is_correct' => false],
                            ['choice_text' => 'Teníamos más tiempo el sábado.', 'is_correct' => false],
                            ['choice_text' => 'Tendremos más tiempo el sábado.', 'is_correct' => true],
                        ],
                        'explanation' => '« Tener » devient « tendr- » au futur, donc « tendremos » est correct.',
                    ],
                    [
                        'question' => 'Quel verbe a un radical du futur qui change de façon plus marquée par rapport à son infinitif ?',
                        'choices' => [
                            ['choice_text' => 'hablar → habl-', 'is_correct' => false],
                            ['choice_text' => 'decir → dir-', 'is_correct' => true],
                            ['choice_text' => 'comer → com-', 'is_correct' => false],
                            ['choice_text' => 'vivir → viv-', 'is_correct' => false],
                        ],
                        'explanation' => '« Decir » change pour le radical irrégulier « dir- », à la différence de verbes réguliers comme « hablar », « comer » et « vivir ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement une forme régulière du futur ?',
                        'choices' => [
                            ['choice_text' => 'El próximo mes aprendería más palabras.', 'is_correct' => false],
                            ['choice_text' => 'El próximo mes aprendí más palabras.', 'is_correct' => false],
                            ['choice_text' => 'El próximo mes aprenderé más palabras.', 'is_correct' => true],
                            ['choice_text' => 'El próximo mes aprendaba más palabras.', 'is_correct' => false],
                        ],
                        'explanation' => '« Aprender » est régulier au futur, donc « aprenderé » se forme avec l’infinitif complet plus « -é ».',
                    ],
                    [
                        'question' => 'Quelle est la forme correcte du futur de « querer » pour yo ?',
                        'choices' => [
                            ['choice_text' => 'querré', 'is_correct' => true],
                            ['choice_text' => 'quereré', 'is_correct' => false],
                            ['choice_text' => 'quería', 'is_correct' => false],
                            ['choice_text' => 'querría', 'is_correct' => false],
                        ],
                        'explanation' => '« Querer » utilise le radical irrégulier « querr- », ce qui donne « querré ».',
                    ],
                ],
            ],
            [
                'title' => 'Le conditionnel pour les demandes polies',
                'description' => 'Apprenez le conditionnel dans les demandes courantes, les questions polies, les souhaits et les suggestions délicates.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est une façon polie de demander de l’aide ?',
                        'choices' => [
                            ['choice_text' => '¿Podrás ayudarme ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Podrías ayudarme?', 'is_correct' => true],
                            ['choice_text' => '¿Puedes ayudarme ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Pudiste ayudarme mañana?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Podrías...? » utilise le conditionnel pour rendre la demande plus douce et plus polie qu’un ordre direct.',
                    ],
                    [
                        'question' => 'Que signifie « Me gustaría un café » ?',
                        'choices' => [
                            ['choice_text' => 'Je voudrai un café demain.', 'is_correct' => false],
                            ['choice_text' => 'J’ai aimé un café hier.', 'is_correct' => false],
                            ['choice_text' => 'Je voudrais un café.', 'is_correct' => true],
                            ['choice_text' => 'Je bois un café.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me gustaría » est une expression conditionnelle polie très courante qui signifie « je voudrais ».',
                    ],
                    [
                        'question' => 'Quelle forme complète : « Yo ___ viajar más si tuviera tiempo. » ?',
                        'choices' => [
                            ['choice_text' => 'viajaré', 'is_correct' => false],
                            ['choice_text' => 'viajaba', 'is_correct' => false],
                            ['choice_text' => 'viajé', 'is_correct' => false],
                            ['choice_text' => 'viajaría', 'is_correct' => true],
                        ],
                        'explanation' => 'L’expression « si tuviera tiempo » décrit une condition hypothétique, donc « viajaría » est la forme conditionnelle qui correspond.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un résultat hypothétique ?',
                        'choices' => [
                            ['choice_text' => 'Compraríamos una casa si tuviéramos más dinero.', 'is_correct' => true],
                            ['choice_text' => 'Compramos una casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compraremos una casa mañana.', 'is_correct' => false],
                            ['choice_text' => 'Comprábamos una casa todos los años.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnel « compraríamos » exprime ce qui se passerait sous la condition « si tuviéramos más dinero ».',
                    ],
                    [
                        'question' => 'Quelle est la forme conditionnelle de « tener » pour yo ?',
                        'choices' => [
                            ['choice_text' => 'tendría', 'is_correct' => true],
                            ['choice_text' => 'tenería', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                            ['choice_text' => 'tenía', 'is_correct' => false],
                        ],
                        'explanation' => '« Tener » utilise le même radical irrégulier « tendr- » au conditionnel, suivi de « -ía » : « tendría ».',
                    ],
                    [
                        'question' => 'Quelle phrase ressemble à une demande polie dans un café ?',
                        'choices' => [
                            ['choice_text' => 'Querré una botella de agua, por favor.', 'is_correct' => false],
                            ['choice_text' => 'Quería una botella de agua ayer.', 'is_correct' => false],
                            ['choice_text' => 'Quise una botella de agua mañana.', 'is_correct' => false],
                            ['choice_text' => 'Querría una botella de agua, por favor.', 'is_correct' => true],
                        ],
                        'explanation' => '« Querría » est une forme conditionnelle polie qui peut exprimer une demande ou une préférence.',
                    ],
                    [
                        'question' => 'Quelle terminaison conditionnelle s’utilise pour tous les verbes réguliers avec nosotros ?',
                        'choices' => [
                            ['choice_text' => '-emos', 'is_correct' => false],
                            ['choice_text' => '-íamos', 'is_correct' => true],
                            ['choice_text' => '-amos', 'is_correct' => false],
                            ['choice_text' => '-imos', 'is_correct' => false],
                        ],
                        'explanation' => 'Les formes régulières du conditionnel utilisent l’infinitif plus « -íamos » pour nosotros, comme dans « hablaríamos » et « comeríamos ».',
                    ],
                    [
                        'question' => 'Un client demande poliment à un serveur : « ¿Me ___ traer la cuenta? » Quelle forme convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'podrá', 'is_correct' => false],
                            ['choice_text' => 'puede', 'is_correct' => false],
                            ['choice_text' => 'podría', 'is_correct' => true],
                            ['choice_text' => 'podía', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Me podría...? » est une demande polie courante. Le conditionnel rend la demande plus douce et plus courtoise.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime ce que quelqu’un ferait dans une situation différente ?',
                        'choices' => [
                            ['choice_text' => 'Iré contigo mañana.', 'is_correct' => false],
                            ['choice_text' => 'Iba contigo todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Fui contigo ayer.', 'is_correct' => false],
                            ['choice_text' => 'Iría contigo si pudiera.', 'is_correct' => true],
                        ],
                        'explanation' => '« Iría » exprime un résultat hypothétique, lié à « si pudiera » (« si je pouvais »).',
                    ],
                    [
                        'question' => 'Quelle paire est correcte ?',
                        'choices' => [
                            ['choice_text' => 'poder → podería', 'is_correct' => false],
                            ['choice_text' => 'poder → podría', 'is_correct' => true],
                            ['choice_text' => 'poder → podrá uniquement', 'is_correct' => false],
                            ['choice_text' => 'poder → podía dans toutes les phrases conditionnelles', 'is_correct' => false],
                        ],
                        'explanation' => '« Poder » a le radical conditionnel irrégulier « podr- », donc « podría » est la forme conditionnelle correcte.',
                    ],
                ],
            ],
            [
                'title' => 'Futur et conditionnel dans des situations réelles',
                'description' => 'Apprenez à choisir entre le futur et le conditionnel pour parler de certitude, de possibilité, de politesse et de situations hypothétiques.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Un ami vous demande ce que vous comptez faire demain. Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Mañana iría al gimnasio si tuviera tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Mañana iré al gimnasio.', 'is_correct' => true],
                            ['choice_text' => 'Ayer iba al gimnasio.', 'is_correct' => false],
                            ['choice_text' => 'Ayer fui al gimnasio mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un projet futur simple utilise le futur « iré ». Le conditionnel ajouterait une condition ou un sens hypothétique.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus hypothétique ou incertaine ?',
                        'choices' => [
                            ['choice_text' => 'Viajaré más el próximo verano.', 'is_correct' => false],
                            ['choice_text' => 'Viajé más el año pasado.', 'is_correct' => false],
                            ['choice_text' => 'Viajaría más si tuviera más vacaciones.', 'is_correct' => true],
                            ['choice_text' => 'Viajaba más cuando era joven.', 'is_correct' => false],
                        ],
                        'explanation' => '« Viajaría » exprime un résultat hypothétique dépendant de la condition « si tuviera más vacaciones ».',
                    ],
                    [
                        'question' => 'Quelle phrase ressemble à une prédiction plutôt qu’à une hypothèse ?',
                        'choices' => [
                            ['choice_text' => 'En diez años, habría más tecnología si...', 'is_correct' => false],
                            ['choice_text' => 'En diez años, había más tecnología.', 'is_correct' => false],
                            ['choice_text' => 'En diez años, hubo más tecnología.', 'is_correct' => false],
                            ['choice_text' => 'En diez años, habrá más tecnología.', 'is_correct' => true],
                        ],
                        'explanation' => '« Habrá » présente une prédiction future. Un conditionnel comme « habría » serait normalement lié à une condition ou une idée hypothétique.',
                    ],
                    [
                        'question' => 'Un étudiant veut demander poliment à un professeur un jour de délai supplémentaire. Quelle formulation est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => '¿Podría tener un día más?', 'is_correct' => true],
                            ['choice_text' => '¿Podrá tener un día más mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Puede tener un día más ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Podía tener un día más ayer?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Podría...? » est une demande conditionnelle polie standard, surtout dans une situation formelle.',
                    ],
                    [
                        'question' => 'Quelle paire met correctement en contraste un projet et un choix hypothétique ?',
                        'choices' => [
                            ['choice_text' => 'Compraría el libro mañana / Compré el libro si estuviera más barato.', 'is_correct' => false],
                            ['choice_text' => 'Compraba el libro mañana / Compraré el libro ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compré el libro mañana / Compraría el libro ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compraré el libro mañana / Compraría el libro si estuviera más barato.', 'is_correct' => true],
                        ],
                        'explanation' => '« Comprar » au futur énonce un projet, tandis que « compraría » exprime un choix hypothétique sous une condition.',
                    ],
                    [
                        'question' => 'Quelle phrase pourrait naturellement précéder une promesse ?',
                        'choices' => [
                            ['choice_text' => 'Te llamaría esta noche si ayer...', 'is_correct' => false],
                            ['choice_text' => 'Te llamaré esta noche.', 'is_correct' => true],
                            ['choice_text' => 'Te llamaba esta noche.', 'is_correct' => false],
                            ['choice_text' => 'Te llamé esta noche mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Te llamaré » est la forme du futur utilisée pour une intention future ou une promesse.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit ce qu’une personne ferait si les circonstances étaient différentes ?',
                        'choices' => [
                            ['choice_text' => 'Aceptaremos el trabajo mañana.', 'is_correct' => false],
                            ['choice_text' => 'Aceptamos el trabajo ayer.', 'is_correct' => false],
                            ['choice_text' => 'Aceptaríamos el trabajo si fuera en casa.', 'is_correct' => true],
                            ['choice_text' => 'Aceptábamos el trabajo todos los años.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnel « aceptaríamos » exprime le résultat hypothétique de la condition « si fuera en casa ».',
                    ],
                    [
                        'question' => 'Une vendeuse veut dire : « Voudriez-vous autre chose ? » Quelle option est la question conditionnelle la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => '¿Querría algo más?', 'is_correct' => true],
                            ['choice_text' => '¿Querrá algo más ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Quería algo más mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Querría algo más ayer?', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnel « querría » peut rendre une question de service client polie et moins directe.',
                    ],
                    [
                        'question' => 'Quelle phrase concerne clairement un horaire futur ?',
                        'choices' => [
                            ['choice_text' => 'El tren saldrá a las nueve.', 'is_correct' => true],
                            ['choice_text' => 'El tren saldría a las nueve si...', 'is_correct' => false],
                            ['choice_text' => 'El tren salía a las nueve todos los días cuando era niño.', 'is_correct' => false],
                            ['choice_text' => 'El tren salió a las nueve ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Saldrá » énonce l’heure de départ future. Le conditionnel suggérerait une condition ou une incertitude liée à une autre situation.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux à une conversation sur un rêve plutôt qu’un projet fixe ?',
                        'choices' => [
                            ['choice_text' => 'Viviré cerca del mar mañana.', 'is_correct' => false],
                            ['choice_text' => 'Viví cerca del mar ayer.', 'is_correct' => false],
                            ['choice_text' => 'Viviría cerca del mar si pudiera elegir.', 'is_correct' => true],
                            ['choice_text' => 'Vivía cerca del mar mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnel « viviría » exprime un choix imaginé ou un rêve, surtout avec « si pudiera elegir ».',
                    ],
                ],
            ],
            [
                'title' => 'Pratique mixte du futur et du conditionnel',
                'description' => 'Révisez les formes du futur et du conditionnel à travers des décisions pratiques, des prédictions, des demandes, des promesses et de simples situations hypothétiques.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle phrase signifie « Nous arriverons à six heures » ?',
                        'choices' => [
                            ['choice_text' => 'Llegaríamos a las seis.', 'is_correct' => false],
                            ['choice_text' => 'Llegábamos a las seis.', 'is_correct' => false],
                            ['choice_text' => 'Llegaremos a las seis.', 'is_correct' => true],
                            ['choice_text' => 'Llegamos a las seis ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Llegaremos » est le futur simple de « llegar » pour nosotros.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Je l’achèterais si c’était moins cher » ?',
                        'choices' => [
                            ['choice_text' => 'Lo compraré si fuera más barato.', 'is_correct' => false],
                            ['choice_text' => 'Lo compré si fuera más barato.', 'is_correct' => false],
                            ['choice_text' => 'Lo compraba si será más barato.', 'is_correct' => false],
                            ['choice_text' => 'Lo compraría si fuera más barato.', 'is_correct' => true],
                        ],
                        'explanation' => '« Compraría » exprime le résultat hypothétique, tandis que « si fuera » donne la condition.',
                    ],
                    [
                        'question' => 'Quelle forme verbale est correcte dans : « Dentro de una hora, ___ en casa. » ?',
                        'choices' => [
                            ['choice_text' => 'estaré', 'is_correct' => true],
                            ['choice_text' => 'estaría', 'is_correct' => false],
                            ['choice_text' => 'estaba', 'is_correct' => false],
                            ['choice_text' => 'estuve', 'is_correct' => false],
                        ],
                        'explanation' => '« Dentro de una hora » indique clairement le futur, donc « estaré » convient.',
                    ],
                    [
                        'question' => 'Un ami dit : « Necesito ayuda con esto. » Quelle réponse est une offre délicate ?',
                        'choices' => [
                            ['choice_text' => 'Te ayudaré ayer.', 'is_correct' => false],
                            ['choice_text' => 'Te ayudaría si quieres.', 'is_correct' => true],
                            ['choice_text' => 'Te ayudaba mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te ayudé si quieres mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnel « ayudaría » peut rendre une offre moins insistante et plus hésitante ou polie.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le futur de « poder » ?',
                        'choices' => [
                            ['choice_text' => 'Poderemos terminar mañana.', 'is_correct' => false],
                            ['choice_text' => 'Podríamos terminar mañana ayer.', 'is_correct' => false],
                            ['choice_text' => 'Podremos terminar mañana.', 'is_correct' => true],
                            ['choice_text' => 'Podíamos terminar mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Poder » utilise le radical du futur « podr- », donc la forme nosotros est « podremos ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le conditionnel de « hacer » ?',
                        'choices' => [
                            ['choice_text' => 'Hacería más ejercicio si tuviera tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Haría más ejercicio si tuviera tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Haré más ejercicio si ayer tuviera tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Hacía más ejercicio si mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hacer » utilise le radical conditionnel « har- », donc « haría » est correct dans cette phrase hypothétique.',
                    ],
                    [
                        'question' => 'Quelle phrase est une prédiction simple ?',
                        'choices' => [
                            ['choice_text' => 'Creo que llegaría tarde si tuviera coche.', 'is_correct' => false],
                            ['choice_text' => 'Creo que llegaba tarde ayer.', 'is_correct' => false],
                            ['choice_text' => 'Creo que llegó tarde mañana.', 'is_correct' => false],
                            ['choice_text' => 'Creo que llegará tarde.', 'is_correct' => true],
                        ],
                        'explanation' => '« Llegará » est la forme du futur et convient naturellement à une prédiction sur ce qui est attendu.',
                    ],
                    [
                        'question' => 'Quelle phrase serait appropriée en imaginant des vacances idéales ?',
                        'choices' => [
                            ['choice_text' => 'Me quedaría dos semanas en una isla.', 'is_correct' => true],
                            ['choice_text' => 'Me quedaré dos semanas en una isla ayer.', 'is_correct' => false],
                            ['choice_text' => 'Me quedaba dos semanas en una isla mañana.', 'is_correct' => false],
                            ['choice_text' => 'Me quedé dos semanas en una isla si pudiera.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnel « me quedaría » présente les vacances comme une situation imaginée ou idéale.',
                    ],
                    [
                        'question' => 'Quelle phrase contient une demande conditionnelle polie ?',
                        'choices' => [
                            ['choice_text' => '¿Podrá repetir la pregunta ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Podría repetir la pregunta, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Puede repetir la pregunta mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Podía repetir la pregunta ayer?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Podría...? » est une formule polie courante pour les demandes, surtout en classe, dans les commerces et dans les situations formelles.',
                    ],
                    [
                        'question' => 'Quelle phrase met correctement en contraste un événement futur et un événement hypothétique ?',
                        'choices' => [
                            ['choice_text' => 'Mañana viajaría; si tuviera más tiempo, viajaré más a menudo.', 'is_correct' => false],
                            ['choice_text' => 'Mañana viajaba; si tuviera más tiempo, viajé más a menudo.', 'is_correct' => false],
                            ['choice_text' => 'Mañana viajaré; si tuviera más tiempo, viajaría más a menudo.', 'is_correct' => true],
                            ['choice_text' => 'Mañana viajé; si tuviera más tiempo, viajaré ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Viajaré » présente le véritable projet futur, tandis que « viajaría » décrit le résultat hypothétique sous une condition.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « habrá » ?',
                        'choices' => [
                            ['choice_text' => 'Haberá muchas personas en la fiesta.', 'is_correct' => false],
                            ['choice_text' => 'Habría muchas personas en la fiesta mañana seguro.', 'is_correct' => false],
                            ['choice_text' => 'Hubo muchas personas en la fiesta mañana.', 'is_correct' => false],
                            ['choice_text' => 'Habrá muchas personas en la fiesta.', 'is_correct' => true],
                        ],
                        'explanation' => '« Habrá » est la forme du futur utilisée pour dire que quelque chose « il y aura ».',
                    ],
                ],
            ],
            [
                'title' => 'Révision quotidienne du futur et du conditionnel',
                'description' => 'Terminez avec une révision mixte et pratique utilisant des horaires, des achats, des voyages, des conseils, des prédictions et des conversations polies.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Vous dites à un ami, au sujet de demain matin : « A las siete, ___ el tren. » Quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'tomaré', 'is_correct' => true],
                            ['choice_text' => 'tomaría', 'is_correct' => false],
                            ['choice_text' => 'tomaba', 'is_correct' => false],
                            ['choice_text' => 'tomé', 'is_correct' => false],
                        ],
                        'explanation' => 'L’action est prévue pour demain, donc le futur « tomaré » convient.',
                    ],
                    [
                        'question' => 'Quelle est la façon la plus naturelle et polie d’offrir quelque chose à un invité ?',
                        'choices' => [
                            ['choice_text' => '¿Querrá más café ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Quería más café mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Quiso más café mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Querría más café?', 'is_correct' => true],
                        ],
                        'explanation' => '« ¿Querría...? » utilise le conditionnel pour rendre l’offre polie et courtoise.',
                    ],
                    [
                        'question' => 'Quelle forme du futur est correcte pour « decir » avec yo ?',
                        'choices' => [
                            ['choice_text' => 'deciré', 'is_correct' => false],
                            ['choice_text' => 'diría', 'is_correct' => false],
                            ['choice_text' => 'diré', 'is_correct' => true],
                            ['choice_text' => 'decía', 'is_correct' => false],
                        ],
                        'explanation' => '« Decir » utilise le radical irrégulier du futur « dir- », donc yo donne « diré ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit un résultat futur probable ?',
                        'choices' => [
                            ['choice_text' => 'Si estudias, aprobarías el examen ayer.', 'is_correct' => false],
                            ['choice_text' => 'Si estudias, aprobarás el examen.', 'is_correct' => true],
                            ['choice_text' => 'Si estudias, aprobabas el examen mañana.', 'is_correct' => false],
                            ['choice_text' => 'Si estudias, aprobaste el examen mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase décrit un résultat futur réaliste d’une condition, donc le futur « aprobarás » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un choix plus hypothétique ou incertain ?',
                        'choices' => [
                            ['choice_text' => 'Si tengo dinero, compraré ese coche mañana.', 'is_correct' => false],
                            ['choice_text' => 'Compré ese coche el lunes.', 'is_correct' => false],
                            ['choice_text' => 'Si tuviera dinero, compraría ese coche.', 'is_correct' => true],
                            ['choice_text' => 'Compraba ese coche todos los años.', 'is_correct' => false],
                        ],
                        'explanation' => '« Compraría » est au conditionnel car la personne imagine ce qui se passerait sous une condition différente.',
                    ],
                    [
                        'question' => 'Un voyageur veut demander poliment : « Pourriez-vous me dire où se trouve la gare ? » Quelle formulation est la meilleure ?',
                        'choices' => [
                            ['choice_text' => '¿Podrá decirme dónde está la estación ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Podría decirme dónde está la estación?', 'is_correct' => true],
                            ['choice_text' => '¿Podía decirme dónde está la estación mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Pudo decirme dónde está la estación mañana?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Podría...? » est une demande conditionnelle polie standard quand on s’adresse à un inconnu.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise le futur pour une promesse ?',
                        'choices' => [
                            ['choice_text' => 'No te olvidaría ayer.', 'is_correct' => false],
                            ['choice_text' => 'No te olvidaba mañana.', 'is_correct' => false],
                            ['choice_text' => 'No te olvidé mañana.', 'is_correct' => false],
                            ['choice_text' => 'No te olvidaré.', 'is_correct' => true],
                        ],
                        'explanation' => '« No te olvidaré » signifie « je ne t’oublierai pas » et fonctionne naturellement comme une promesse ou une assurance.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour un choix de carrière imaginé ?',
                        'choices' => [
                            ['choice_text' => 'Sería profesor si pudiera elegir otra carrera.', 'is_correct' => true],
                            ['choice_text' => 'Seré profesor si pudiera elegir otra carrera.', 'is_correct' => false],
                            ['choice_text' => 'Era profesor si pudiera elegir otra carrera.', 'is_correct' => false],
                            ['choice_text' => 'Fui profesor si pudiera elegir otra carrera.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sería » exprime le résultat imaginé de la condition « si pudiera elegir otra carrera ».',
                    ],
                    [
                        'question' => 'Quelle phrase vous attendriez-vous à entendre dans une prévision météo ?',
                        'choices' => [
                            ['choice_text' => 'Habrá sol por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'Habría sol por la tarde ayer.', 'is_correct' => false],
                            ['choice_text' => 'Había sol por la tarde mañana.', 'is_correct' => false],
                            ['choice_text' => 'Hubo sol por la tarde mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Habrá » signifie « il y aura » et s’utilise couramment pour les prévisions ou attentes futures.',
                    ],
                    [
                        'question' => 'Quelle paire est correctement associée ?',
                        'choices' => [
                            ['choice_text' => 'futur : hablaría / conditionnel : hablaré', 'is_correct' => false],
                            ['choice_text' => 'futur : hablaré / conditionnel : hablaría', 'is_correct' => true],
                            ['choice_text' => 'futur : hablaba / conditionnel : hablé', 'is_correct' => false],
                            ['choice_text' => 'futur : hablé / conditionnel : hablaba', 'is_correct' => false],
                        ],
                        'explanation' => '« Hablaré » est le futur simple, tandis que « hablaría » est le conditionnel.',
                    ],
                    [
                        'question' => 'Un responsable demande à un employé ce qui se passera le mois prochain. Quelle réponse est directe et appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Trabajaría en el nuevo proyecto si tuviera tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Trabajaba en el nuevo proyecto ayer.', 'is_correct' => false],
                            ['choice_text' => 'Trabajé en el nuevo proyecto mañana.', 'is_correct' => false],
                            ['choice_text' => 'Trabajaré en el nuevo proyecto.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le responsable demande un véritable projet futur, donc « trabajaré » est la réponse directe.',
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
                        'explanation' => $questionData['explanation'] ?? null,
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
