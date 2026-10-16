<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjunctiveBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'subjunctive')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases du subjonctif',
                'description' => 'Découvre le subjonctif espagnol à travers des souhaits simples, des recommandations et des situations où une action dépend d’un sentiment ou d’une demande.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle phrase exprime un souhait concernant l’action d’une autre personne ?',
                        'choices' => [
                            ['choice_text' => 'Estudias cada noche.', 'is_correct' => false],
                            ['choice_text' => 'Estudiaste ayer.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que estudies.', 'is_correct' => true],
                            ['choice_text' => 'Estudiarás mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'La proposition « que estudies » est au subjonctif car le locuteur exprime un souhait concernant l’action de quelqu’un d’autre.',
                    ],
                    [
                        'question' => 'Complète : « Espero que Ana ___ bien. »',
                        'choices' => [
                            ['choice_text' => 'está', 'is_correct' => false],
                            ['choice_text' => 'estuvo', 'is_correct' => false],
                            ['choice_text' => 'estará', 'is_correct' => false],
                            ['choice_text' => 'esté', 'is_correct' => true],
                        ],
                        'explanation' => 'Après « Espero que », l’espagnol utilise normalement le subjonctif car le locuteur exprime un espoir plutôt qu’un fait.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un verbe au présent du subjonctif ?',
                        'choices' => [
                            ['choice_text' => 'Llegas temprano todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Es importante que llegues temprano.', 'is_correct' => true],
                            ['choice_text' => 'Llegaste temprano ayer.', 'is_correct' => false],
                            ['choice_text' => 'Llegarás temprano mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Llegues » est une forme du présent du subjonctif déclenchée par « Es importante que ».',
                    ],
                    [
                        'question' => 'Un professeur dit : « Quiero que ustedes ___ atención. » Quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'presten', 'is_correct' => true],
                            ['choice_text' => 'prestan', 'is_correct' => false],
                            ['choice_text' => 'prestaron', 'is_correct' => false],
                            ['choice_text' => 'prestarán', 'is_correct' => false],
                        ],
                        'explanation' => '« Quiero que » exprime un désir, donc le verbe qui suit est au subjonctif : « presten ».',
                    ],
                    [
                        'question' => 'Quelle idée appelle le plus souvent le subjonctif au niveau débutant ?',
                        'choices' => [
                            ['choice_text' => 'Une simple affirmation de fait', 'is_correct' => false],
                            ['choice_text' => 'Une action terminée hier', 'is_correct' => false],
                            ['choice_text' => 'Une habitude sans aucune incertitude', 'is_correct' => false],
                            ['choice_text' => 'Un souhait ou une recommandation concernant une autre personne', 'is_correct' => true],
                        ],
                        'explanation' => 'Au niveau débutant, le subjonctif apparaît souvent quand le souhait, le conseil, le sentiment ou l’incertitude d’une personne influence l’action d’une autre.',
                    ],
                    [
                        'question' => 'Choisis la phrase naturelle : « Mi madre quiere que yo ___ más. »',
                        'choices' => [
                            ['choice_text' => 'descanso', 'is_correct' => false],
                            ['choice_text' => 'descansé', 'is_correct' => false],
                            ['choice_text' => 'descanse', 'is_correct' => true],
                            ['choice_text' => 'descansaré', 'is_correct' => false],
                        ],
                        'explanation' => '« Quiere que » exprime un désir concernant l’action d’une autre personne, donc « descanse » est au subjonctif.',
                    ],
                    [
                        'question' => 'Quelle paire contient une affirmation indicative normale et un souhait au subjonctif ?',
                        'choices' => [
                            ['choice_text' => 'Vengas cada día. / Sé que vienes.', 'is_correct' => false],
                            ['choice_text' => 'Sé que vienes. / Quiero que vengas.', 'is_correct' => true],
                            ['choice_text' => 'Quiero que vienes. / Sé que vengas.', 'is_correct' => false],
                            ['choice_text' => 'Vengas ayer. / Quiero que vienes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sé que vienes » présente quelque chose comme connu, tandis que « Quiero que vengas » exprime un souhait et utilise le subjonctif.',
                    ],
                    [
                        'question' => 'Un ami dit : « Espero que todo ___ bien. » Quelle forme est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'salga', 'is_correct' => true],
                            ['choice_text' => 'sale', 'is_correct' => false],
                            ['choice_text' => 'salió', 'is_correct' => false],
                            ['choice_text' => 'saldrá', 'is_correct' => false],
                        ],
                        'explanation' => '« Espero que » introduit normalement le subjonctif pour exprimer un espoir, donc « salga » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase donne un conseil à une autre personne ?',
                        'choices' => [
                            ['choice_text' => 'Duermes ocho horas.', 'is_correct' => false],
                            ['choice_text' => 'Te recomiendo que duermas más.', 'is_correct' => true],
                            ['choice_text' => 'Dormiste ocho horas.', 'is_correct' => false],
                            ['choice_text' => 'Dormirás ocho horas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Te recomiendo que » introduit un conseil, un déclencheur courant du subjonctif pour un débutant.',
                    ],
                    [
                        'question' => 'Quelle est la différence essentielle entre ces deux phrases : « Quieres que venga » et « Quieres venir » ?',
                        'choices' => [
                            ['choice_text' => 'Les deux veulent dire exactement la même chose.', 'is_correct' => false],
                            ['choice_text' => 'La première est au passé ; la seconde est au futur.', 'is_correct' => false],
                            ['choice_text' => 'La première demande à une autre personne de venir ; la seconde dit que c’est toi qui veux venir.', 'is_correct' => true],
                            ['choice_text' => 'La première est une question ; la seconde est un ordre.', 'is_correct' => false],
                        ],
                        'explanation' => '« Quieres que venga » renvoie à un autre sujet après « que », tandis que « quieres venir » garde le même sujet.',
                    ],
                ],
            ],
            [
                'title' => 'Les déclencheurs courants du subjonctif',
                'description' => 'Pratique des expressions quotidiennes comme « quiero que », « espero que », « es importante que » et « recomiendo que ».',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complète : « Es importante que nosotros ___ puntuales. »',
                        'choices' => [
                            ['choice_text' => 'somos', 'is_correct' => false],
                            ['choice_text' => 'fuimos', 'is_correct' => false],
                            ['choice_text' => 'seamos', 'is_correct' => true],
                            ['choice_text' => 'seremos', 'is_correct' => false],
                        ],
                        'explanation' => '« Es importante que » exprime un jugement ou une recommandation, donc le verbe qui suit est au subjonctif : « seamos ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise naturellement « necesitar » avec le subjonctif ?',
                        'choices' => [
                            ['choice_text' => 'Necesito que me ayudas.', 'is_correct' => false],
                            ['choice_text' => 'Necesito que me ayudes.', 'is_correct' => true],
                            ['choice_text' => 'Necesito que me ayudaste.', 'is_correct' => false],
                            ['choice_text' => 'Necesito que me ayudarás.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand le locuteur a besoin qu’une autre personne fasse quelque chose, « necesito que » est généralement suivi du subjonctif.',
                    ],
                    [
                        'question' => 'Un médecin donne une recommandation simple : « Es mejor que tú ___ agua. »',
                        'choices' => [
                            ['choice_text' => 'bebes', 'is_correct' => false],
                            ['choice_text' => 'bebiste', 'is_correct' => false],
                            ['choice_text' => 'beberás', 'is_correct' => false],
                            ['choice_text' => 'bebas', 'is_correct' => true],
                        ],
                        'explanation' => '« Es mejor que » donne un conseil ou une recommandation, donc « bebas » est la forme appropriée du subjonctif.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un espoir ?',
                        'choices' => [
                            ['choice_text' => 'Ojalá que no llueva.', 'is_correct' => true],
                            ['choice_text' => 'No llueve hoy.', 'is_correct' => false],
                            ['choice_text' => 'No llovió ayer.', 'is_correct' => false],
                            ['choice_text' => 'No lloverá mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ojalá que » est une façon courante d’exprimer un souhait ou un espoir et est suivi du subjonctif.',
                    ],
                    [
                        'question' => 'Quelle forme complète « Prefiero que ellos ___ aquí. » ?',
                        'choices' => [
                            ['choice_text' => 'se queden', 'is_correct' => true],
                            ['choice_text' => 'se quedan', 'is_correct' => false],
                            ['choice_text' => 'se quedaron', 'is_correct' => false],
                            ['choice_text' => 'se quedarán', 'is_correct' => false],
                        ],
                        'explanation' => '« Prefiero que » exprime une préférence concernant l’action d’une autre personne, donc le subjonctif est utilisé.',
                    ],
                    [
                        'question' => 'Un parent dit : « Quiero que mis hijos ___ temprano. » Quelle réponse est correcte ?',
                        'choices' => [
                            ['choice_text' => 'duermen', 'is_correct' => false],
                            ['choice_text' => 'durmieron', 'is_correct' => false],
                            ['choice_text' => 'dormirán', 'is_correct' => false],
                            ['choice_text' => 'duerman', 'is_correct' => true],
                        ],
                        'explanation' => 'Le désir du parent déclenche le subjonctif : « Quiero que mis hijos duerman temprano. »',
                    ],
                    [
                        'question' => 'Quelle phrase donne une recommandation plutôt que de rapporter un fait ?',
                        'choices' => [
                            ['choice_text' => 'Estudias un poco cada día.', 'is_correct' => false],
                            ['choice_text' => 'Te sugiero que estudies un poco.', 'is_correct' => true],
                            ['choice_text' => 'Estudiaste un poco ayer.', 'is_correct' => false],
                            ['choice_text' => 'Estudiarás un poco mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Te sugiero que » est une recommandation, donc « estudies » est au subjonctif.',
                    ],
                    [
                        'question' => 'Complète : « Es necesario que ella ___ la verdad. »',
                        'choices' => [
                            ['choice_text' => 'dice', 'is_correct' => false],
                            ['choice_text' => 'dijo', 'is_correct' => false],
                            ['choice_text' => 'diga', 'is_correct' => true],
                            ['choice_text' => 'dirá', 'is_correct' => false],
                        ],
                        'explanation' => '« Es necesario que » exprime la nécessité, un déclencheur courant du subjonctif pour un débutant.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement formée ?',
                        'choices' => [
                            ['choice_text' => 'Espero que tienes tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Espero que tuviste tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Espero que tengas tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Espero que tendrás tiempo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Espero que » exprime un espoir, donc le verbe dépendant est normalement au subjonctif.',
                    ],
                    [
                        'question' => 'Une professeure veut que ses élèves lisent davantage. Quelle phrase correspond à cette intention ?',
                        'choices' => [
                            ['choice_text' => 'La profesora quiere que leen más.', 'is_correct' => false],
                            ['choice_text' => 'La profesora quiere que lean más.', 'is_correct' => true],
                            ['choice_text' => 'La profesora quiere que leyeron más.', 'is_correct' => false],
                            ['choice_text' => 'La profesora quiere que leerán más.', 'is_correct' => false],
                        ],
                        'explanation' => '« Quiere que » exprime le désir de la professeure concernant l’action des élèves, donc « lean » est au subjonctif.',
                    ],
                    [
                        'question' => 'Quelle expression est un indice fort que le verbe suivant sera peut-être au subjonctif ?',
                        'choices' => [
                            ['choice_text' => 'Es bueno que...', 'is_correct' => true],
                            ['choice_text' => 'Es verdad que...', 'is_correct' => false],
                            ['choice_text' => 'Sé que...', 'is_correct' => false],
                            ['choice_text' => 'Creo que...', 'is_correct' => false],
                        ],
                        'explanation' => '« Es bueno que » exprime une évaluation ou une recommandation et introduit généralement le subjonctif.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise naturellement le subjonctif avec « ojalá » ?',
                        'choices' => [
                            ['choice_text' => 'Ojalá que encuentras el camino.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que encontraste el camino.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que encontrarás el camino.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que encuentres el camino.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ojalá que » est suivi d’une forme du subjonctif comme « encuentres » quand on exprime un souhait.',
                    ],
                ],
            ],
            [
                'title' => 'Construire les formes du présent du subjonctif',
                'description' => 'Apprends les terminaisons de base du présent du subjonctif et relie-les aux verbes familiers en -ar, -er et -ir.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle est la forme du présent du subjonctif de hablar pour yo ?',
                        'choices' => [
                            ['choice_text' => 'hablo', 'is_correct' => false],
                            ['choice_text' => 'hable', 'is_correct' => true],
                            ['choice_text' => 'hablé', 'is_correct' => false],
                            ['choice_text' => 'hablaré', 'is_correct' => false],
                        ],
                        'explanation' => 'La première personne du singulier au présent du subjonctif de « hablar » est « hable ».',
                    ],
                    [
                        'question' => 'Quelle forme complète « Quiero que tú ___ español. » ?',
                        'choices' => [
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'hablaste', 'is_correct' => false],
                            ['choice_text' => 'hables', 'is_correct' => true],
                            ['choice_text' => 'hablarás', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « Quiero que », le deuxième verbe est au subjonctif, donc « hables » est correct.',
                    ],
                    [
                        'question' => 'Quelle est la forme du présent du subjonctif de comer pour nosotros ?',
                        'choices' => [
                            ['choice_text' => 'comemos', 'is_correct' => false],
                            ['choice_text' => 'comimos', 'is_correct' => false],
                            ['choice_text' => 'comeremos', 'is_correct' => false],
                            ['choice_text' => 'comamos', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme nosotros du présent du subjonctif de « comer » est « comamos ».',
                    ],
                    [
                        'question' => 'Complète : « Es importante que ustedes ___ bien. »',
                        'choices' => [
                            ['choice_text' => 'coman', 'is_correct' => true],
                            ['choice_text' => 'comen', 'is_correct' => false],
                            ['choice_text' => 'comieron', 'is_correct' => false],
                            ['choice_text' => 'comerán', 'is_correct' => false],
                        ],
                        'explanation' => '« Es importante que » exige le subjonctif, et « coman » est la forme pour ustedes.',
                    ],
                    [
                        'question' => 'Quelle est la forme du présent du subjonctif de vivir pour ella ?',
                        'choices' => [
                            ['choice_text' => 'vive', 'is_correct' => false],
                            ['choice_text' => 'viva', 'is_correct' => true],
                            ['choice_text' => 'vivió', 'is_correct' => false],
                            ['choice_text' => 'vivirá', 'is_correct' => false],
                        ],
                        'explanation' => 'La troisième personne du singulier au présent du subjonctif de « vivir » est « viva ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Espero que él escriba pronto.', 'is_correct' => true],
                            ['choice_text' => 'Espero que él escribe pronto.', 'is_correct' => false],
                            ['choice_text' => 'Espero que él escribió pronto.', 'is_correct' => false],
                            ['choice_text' => 'Espero que él escribirá pronto.', 'is_correct' => false],
                        ],
                        'explanation' => '« Espero que » déclenche le subjonctif, donc « escriba » est la forme correcte.',
                    ],
                    [
                        'question' => 'Un apprenant se souvient que les terminaisons du présent du subjonctif pour les verbes réguliers en -AR ressemblent à quelles terminaisons du présent ?',
                        'choices' => [
                            ['choice_text' => 'Les terminaisons du futur', 'is_correct' => false],
                            ['choice_text' => 'Les terminaisons du passé simple', 'is_correct' => false],
                            ['choice_text' => 'Les terminaisons de l’imparfait', 'is_correct' => false],
                            ['choice_text' => 'Les terminaisons du présent des verbes en -ER/-IR', 'is_correct' => true],
                        ],
                        'explanation' => 'Les terminaisons régulières du subjonctif en -AR utilisent -e, -es, -e, -emos, -éis, -en, tandis que les verbes en -ER/-IR au subjonctif utilisent des terminaisons en -a.',
                    ],
                    [
                        'question' => 'Un apprenant veut dire « Je veux que tu manges. » Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Quiero que comes.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que comiste.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que comas.', 'is_correct' => true],
                            ['choice_text' => 'Quiero que comerás.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’action souhaitée concerne « tú », donc le présent du subjonctif « comas » est requis après « Quiero que ».',
                    ],
                    [
                        'question' => 'Quelle forme s’insère dans « Es bueno que nosotros ___ aquí. » ?',
                        'choices' => [
                            ['choice_text' => 'estemos', 'is_correct' => true],
                            ['choice_text' => 'estamos', 'is_correct' => false],
                            ['choice_text' => 'estuvimos', 'is_correct' => false],
                            ['choice_text' => 'estaremos', 'is_correct' => false],
                        ],
                        'explanation' => '« Es bueno que » introduit une évaluation, donc le verbe dépendant est au subjonctif : « estemos ».',
                    ],
                    [
                        'question' => 'Quelle forme est le présent du subjonctif de tener pour yo ?',
                        'choices' => [
                            ['choice_text' => 'tengo', 'is_correct' => false],
                            ['choice_text' => 'tenga', 'is_correct' => true],
                            ['choice_text' => 'tuve', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                        ],
                        'explanation' => '« Tenga » est la forme yo au présent du subjonctif de « tener ».',
                    ],
                    [
                        'question' => 'Complète : « Mi padre quiere que yo ___ más. »',
                        'choices' => [
                            ['choice_text' => 'leo', 'is_correct' => false],
                            ['choice_text' => 'leí', 'is_correct' => false],
                            ['choice_text' => 'leeré', 'is_correct' => false],
                            ['choice_text' => 'lea', 'is_correct' => true],
                        ],
                        'explanation' => 'Le verbe après « quiere que » est au subjonctif, donc « lea » est la forme yo correcte de « leer ».',
                    ],
                ],
            ],
            [
                'title' => 'Subjonctif ou indicatif',
                'description' => 'Apprends à distinguer les simples affirmations de fait des souhaits, opinions, recommandations et incertitudes qui peuvent déclencher le subjonctif.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase énonce un fait plutôt qu’un souhait ?',
                        'choices' => [
                            ['choice_text' => 'Quiero que Marta trabaje aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sé que Marta trabaja aquí.', 'is_correct' => true],
                            ['choice_text' => 'Espero que Marta trabaje aquí.', 'is_correct' => false],
                            ['choice_text' => 'Es posible que Marta trabaje aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sé que » présente l’information comme connue, donc l’indicatif « trabaja » est naturel.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une incertitude ?',
                        'choices' => [
                            ['choice_text' => 'Sé que llega tarde.', 'is_correct' => false],
                            ['choice_text' => 'Veo que llega tarde.', 'is_correct' => false],
                            ['choice_text' => 'Llega tarde todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Es posible que llegue tarde.', 'is_correct' => true],
                        ],
                        'explanation' => '« Es posible que » exprime une possibilité ou une incertitude, donc le subjonctif « llegue » est approprié.',
                    ],
                    [
                        'question' => 'Choisis la paire naturelle : d’abord un fait, puis un espoir.',
                        'choices' => [
                            ['choice_text' => 'Sé que venga. / Espero que viene.', 'is_correct' => false],
                            ['choice_text' => 'Sé que vino. / Espero que viene.', 'is_correct' => false],
                            ['choice_text' => 'Sé que viene. / Espero que venga.', 'is_correct' => true],
                            ['choice_text' => 'Sé que vendrá. / Espero que viene.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première proposition présente un fait connu ; la seconde exprime un espoir, ce qui déclenche le subjonctif.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un verbe à l’indicatif après « creo que » dans une affirmation positive normale ?',
                        'choices' => [
                            ['choice_text' => 'Creo que tiene razón.', 'is_correct' => true],
                            ['choice_text' => 'Creo que tenga razón.', 'is_correct' => false],
                            ['choice_text' => 'Creo que tuvo razón ayer.', 'is_correct' => false],
                            ['choice_text' => 'Creo que tendrás razón mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une affirmation positive normale avec « creo que », le locuteur présente l’idée comme crue ou probable, donc l’indicatif est la norme.',
                    ],
                    [
                        'question' => 'Une personne doute que son amie ait le temps. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Dudo que tiene tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Dudo que tuvo tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Dudo que tendrá tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Dudo que tenga tiempo.', 'is_correct' => true],
                        ],
                        'explanation' => '« Dudo que » exprime le doute, donc le subjonctif « tenga » est utilisé.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une opinion ou une évaluation qui influence une autre action ?',
                        'choices' => [
                            ['choice_text' => 'Es bueno que descanses.', 'is_correct' => true],
                            ['choice_text' => 'Descansas todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Descansaste ayer.', 'is_correct' => false],
                            ['choice_text' => 'Descansarás mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Es bueno que » donne une évaluation ou une recommandation, qui déclenche généralement le subjonctif.',
                    ],
                    [
                        'question' => 'Pourquoi « Espero que vengas » est-il différent de « Sé que vienes » ?',
                        'choices' => [
                            ['choice_text' => 'La première est au passé ; la seconde est au futur.', 'is_correct' => false],
                            ['choice_text' => 'La première exprime un espoir ; la seconde présente quelque chose comme connu.', 'is_correct' => true],
                            ['choice_text' => 'Les deux sont des ordres.', 'is_correct' => false],
                            ['choice_text' => 'Les deux décrivent des actions passées terminées.', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence se situe dans l’attitude du locuteur : l’espoir déclenche généralement le subjonctif, tandis qu’une information connue utilise normalement l’indicatif.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux quand le locuteur n’est pas certain ?',
                        'choices' => [
                            ['choice_text' => 'Creo que es necesario.', 'is_correct' => false],
                            ['choice_text' => 'Sé que es necesario.', 'is_correct' => false],
                            ['choice_text' => 'No creo que sea necesario.', 'is_correct' => true],
                            ['choice_text' => 'Es necesario.', 'is_correct' => false],
                        ],
                        'explanation' => '« No creo que » exprime le doute ou l’absence de conviction, donc le subjonctif « sea » est approprié.',
                    ],
                    [
                        'question' => 'Un élève écrit « Es posible que él viene. » Quelle est la meilleure forme pour un débutant ?',
                        'choices' => [
                            ['choice_text' => 'Es posible que él viene.', 'is_correct' => false],
                            ['choice_text' => 'Es posible que él vino.', 'is_correct' => false],
                            ['choice_text' => 'Es posible que él vendrá.', 'is_correct' => false],
                            ['choice_text' => 'Es posible que él venga.', 'is_correct' => true],
                        ],
                        'explanation' => '« Es posible que » introduit normalement le subjonctif, donc « venga » est correct.',
                    ],
                    [
                        'question' => 'Quelle paire montre un contraste utile ?',
                        'choices' => [
                            ['choice_text' => 'Creo que Juan venga. / No creo que Juan viene.', 'is_correct' => false],
                            ['choice_text' => 'Creo que Juan vino. / No creo que Juan viene.', 'is_correct' => false],
                            ['choice_text' => 'Creo que Juan viene. / No creo que Juan venga.', 'is_correct' => true],
                            ['choice_text' => 'Creo que Juan vendrá ayer. / No creo que Juan venga.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conviction affirmative prend normalement l’indicatif, tandis que la négation ou le doute déclenche souvent le subjonctif.',
                    ],
                ],
            ],
            [
                'title' => 'Le subjonctif au quotidien',
                'description' => 'Utilise le subjonctif dans des situations pratiques impliquant des demandes, des conseils, des sentiments, des souhaits et des conversations courantes.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Un ami est fatigué. Quelle réponse donne une recommandation naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Te recomiendo que descansas.', 'is_correct' => false],
                            ['choice_text' => 'Te recomiendo que descansaste.', 'is_correct' => false],
                            ['choice_text' => 'Te recomiendo que descanses.', 'is_correct' => true],
                            ['choice_text' => 'Te recomiendo que descansarás.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une recommandation concernant l’action d’une autre personne utilise le subjonctif après « te recomiendo que ».',
                    ],
                    [
                        'question' => 'Une mère veut que son enfant rappelle plus tard. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Quiero que me llames después.', 'is_correct' => true],
                            ['choice_text' => 'Quiero que me llamas después.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que me llamaste después.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que me llamarás después.', 'is_correct' => false],
                        ],
                        'explanation' => '« Quiero que » exprime le souhait de la mère, donc « llames » est la forme du subjonctif.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un sentiment positif face à la réussite de quelqu’un ?',
                        'choices' => [
                            ['choice_text' => 'Me alegra que tienes buenas noticias.', 'is_correct' => false],
                            ['choice_text' => 'Me alegra que tengas buenas noticias.', 'is_correct' => true],
                            ['choice_text' => 'Me alegra que tuviste buenas noticias.', 'is_correct' => false],
                            ['choice_text' => 'Me alegra que tendrás buenas noticias.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sentiment comme « me alegra que » introduit généralement le subjonctif quand la situation d’une autre personne provoque ce sentiment.',
                    ],
                    [
                        'question' => 'Complète : « No quiero que ustedes ___ tarde. »',
                        'choices' => [
                            ['choice_text' => 'llegan', 'is_correct' => false],
                            ['choice_text' => 'llegaron', 'is_correct' => false],
                            ['choice_text' => 'llegarán', 'is_correct' => false],
                            ['choice_text' => 'lleguen', 'is_correct' => true],
                        ],
                        'explanation' => '« No quiero que » exprime un désir négatif concernant l’action d’une autre personne, donc le subjonctif est nécessaire.',
                    ],
                    [
                        'question' => 'Quelle phrase est une demande naturelle adressée à une autre personne ?',
                        'choices' => [
                            ['choice_text' => 'Necesito que cierres la puerta.', 'is_correct' => true],
                            ['choice_text' => 'Necesito que cierras la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Necesito que cerraste la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Necesito que cerrarás la puerta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le locuteur a besoin qu’une autre personne agisse, donc « cierres » est la forme correcte du subjonctif.',
                    ],
                    [
                        'question' => 'Un étudiant veut dire « J’espère que tu passes un bon voyage. » Quelle réponse est la meilleure ?',
                        'choices' => [
                            ['choice_text' => 'Espero que tienes un buen viaje.', 'is_correct' => false],
                            ['choice_text' => 'Espero que tuviste un buen viaje.', 'is_correct' => false],
                            ['choice_text' => 'Espero que tengas un buen viaje.', 'is_correct' => true],
                            ['choice_text' => 'Espero que tendrás un buen viaje.', 'is_correct' => false],
                        ],
                        'explanation' => '« Espero que » exprime un souhait, donc « tengas » est la forme du subjonctif de « tener ».',
                    ],
                    [
                        'question' => 'Quelle phrase sonne comme une recommandation polie en classe ?',
                        'choices' => [
                            ['choice_text' => 'Es mejor que estudias un poco cada día.', 'is_correct' => false],
                            ['choice_text' => 'Es mejor que estudies un poco cada día.', 'is_correct' => true],
                            ['choice_text' => 'Es mejor que estudiaste un poco cada día.', 'is_correct' => false],
                            ['choice_text' => 'Es mejor que estudiarás un poco cada día.', 'is_correct' => false],
                        ],
                        'explanation' => '« Es mejor que » donne un conseil ou une évaluation, donc le verbe dépendant prend le subjonctif.',
                    ],
                    [
                        'question' => 'Un ami n’est pas sûr que María vienne. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'No sé si viene.', 'is_correct' => false],
                            ['choice_text' => 'Sé que viene.', 'is_correct' => false],
                            ['choice_text' => 'Viene todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Dudo que venga.', 'is_correct' => true],
                        ],
                        'explanation' => '« Dudo que » exprime directement le doute et prend donc le subjonctif « venga ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un souhait avec « ojalá » ?',
                        'choices' => [
                            ['choice_text' => 'Ojalá que podemos viajar pronto.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que pudimos viajar pronto.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que podremos viajar pronto.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que podamos viajar pronto.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ojalá que » exprime un souhait et est suivi du subjonctif « podamos ».',
                    ],
                    [
                        'question' => 'Un responsable dit à un employé : « Es importante que ___ el informe hoy. » Quelle forme est la meilleure ?',
                        'choices' => [
                            ['choice_text' => 'terminas', 'is_correct' => false],
                            ['choice_text' => 'terminaste', 'is_correct' => false],
                            ['choice_text' => 'termines', 'is_correct' => true],
                            ['choice_text' => 'terminarás', 'is_correct' => false],
                        ],
                        'explanation' => 'Le responsable insiste sur ce qui doit se passer, donc « es importante que » déclenche le subjonctif « termines ».',
                    ],
                    [
                        'question' => 'Quelle réponse complète « Me sorprende que ellos ___ tan temprano. » ?',
                        'choices' => [
                            ['choice_text' => 'llegan', 'is_correct' => false],
                            ['choice_text' => 'lleguen', 'is_correct' => true],
                            ['choice_text' => 'llegaron', 'is_correct' => false],
                            ['choice_text' => 'llegarán', 'is_correct' => false],
                        ],
                        'explanation' => '« Me sorprende que » exprime la réaction du locuteur face à l’action d’une autre personne, donc le subjonctif est approprié.',
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
