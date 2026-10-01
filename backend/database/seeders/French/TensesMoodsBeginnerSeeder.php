<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TensesMoodsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'tenses-moods')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Le présent pour parler du quotidien',
                'description' => 'Utilisez le présent pour exprimer des habitudes, des actions actuelles et des faits simples dans des situations de la vie courante.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Chaque matin, je ___ un café avant de partir au travail.',
                        'choices' => [
                            ['choice_text' => 'bois', 'is_correct' => true],
                            ['choice_text' => 'boire', 'is_correct' => false],
                            ['choice_text' => 'boirai', 'is_correct' => false],
                            ['choice_text' => 'buvais', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression « chaque matin » indique une habitude actuelle. Le présent convient donc : « je bois un café ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une action qui se déroule maintenant ?',
                        'choices' => [
                            ['choice_text' => 'Je lis mon livre.', 'is_correct' => true],
                            ['choice_text' => 'Je lirai mon livre.', 'is_correct' => false],
                            ['choice_text' => 'J’ai lu mon livre hier.', 'is_correct' => false],
                            ['choice_text' => 'Je lisais mon livre hier.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent peut servir à parler d’une action en cours au moment où l’on parle : « je lis mon livre ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous ___ français à l’université. »',
                        'choices' => [
                            ['choice_text' => 'étudions', 'is_correct' => true],
                            ['choice_text' => 'étudierons', 'is_correct' => false],
                            ['choice_text' => 'étudiions', 'is_correct' => false],
                            ['choice_text' => 'étudié', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte présente une activité habituelle ou actuelle. Avec « nous », le présent de « étudier » est « nous étudions ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un fait général ?',
                        'choices' => [
                            ['choice_text' => 'L’eau bout à 100 °C dans des conditions normales.', 'is_correct' => true],
                            ['choice_text' => 'L’eau bouillira demain à midi.', 'is_correct' => false],
                            ['choice_text' => 'L’eau a bouilli hier.', 'is_correct' => false],
                            ['choice_text' => 'L’eau bouillait hier pendant une heure.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent peut exprimer une vérité générale ou un fait présenté comme valable de manière habituelle.',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Tu travaille beaucoup. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Tu travailles beaucoup.', 'is_correct' => true],
                            ['choice_text' => 'Tu travailles beaucoup.', 'is_correct' => false],
                            ['choice_text' => 'Tu travailler beaucoup.', 'is_correct' => false],
                            ['choice_text' => 'Tu travaillons beaucoup.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », le verbe « travailler » se conjugue « tu travailles » au présent.',
                    ],
                    [
                        'question' => 'Quel choix complète naturellement : « Mes parents ___ à Rabat. »',
                        'choices' => [
                            ['choice_text' => 'habitent', 'is_correct' => true],
                            ['choice_text' => 'habite', 'is_correct' => false],
                            ['choice_text' => 'habiteront', 'is_correct' => false],
                            ['choice_text' => 'habitait', 'is_correct' => false],
                        ],
                        'explanation' => '« Mes parents » correspond à un sujet pluriel. Le présent de « habiter » est donc « habitent ».',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour parler d’une routine du soir ?',
                        'choices' => [
                            ['choice_text' => 'Le soir, elle se couche à onze heures.', 'is_correct' => true],
                            ['choice_text' => 'Le soir, elle se couchera à onze heures.', 'is_correct' => false],
                            ['choice_text' => 'Le soir, elle s’est couchée à onze heures hier.', 'is_correct' => false],
                            ['choice_text' => 'Le soir, elle se coucher hier.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le groupe « le soir » présente ici une habitude. Le présent « elle se couche » convient pour cette routine.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement conjuguée au présent ?',
                        'choices' => [
                            ['choice_text' => 'Vous prenez le bus tous les matins.', 'is_correct' => true],
                            ['choice_text' => 'Vous prendez le bus tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Vous prendrez le bus tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Vous pris le bus tous les matins.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », le verbe prendre se conjugue « vous prenez ». Le contexte décrit une habitude.',
                    ],
                    [
                        'question' => 'Dans « Nous sommes en classe », quel temps est utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Le présent', 'is_correct' => true],
                            ['choice_text' => 'Le futur', 'is_correct' => false],
                            ['choice_text' => 'Le passé composé', 'is_correct' => false],
                            ['choice_text' => 'L’imparfait', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme « sommes » est le présent du verbe être avec « nous ». La phrase décrit la situation actuelle.',
                    ],
                    [
                        'question' => 'Quelle phrase présente une préférence actuelle ?',
                        'choices' => [
                            ['choice_text' => 'Je préfère le thé au café.', 'is_correct' => true],
                            ['choice_text' => 'Je préférerai le thé demain au café.', 'is_correct' => false],
                            ['choice_text' => 'J’ai préféré le thé hier.', 'is_correct' => false],
                            ['choice_text' => 'Je préférais le thé hier.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je préfère » au présent exprime ici un choix ou une préférence considérée comme actuelle.',
                    ],
                ],
            ],
            [
                'title' => 'Le futur proche en situation',
                'description' => 'Formez et utilisez le futur proche pour parler d’actions prévues ou imminentes dans les situations les plus courantes.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complétez : « Je ___ partir dans cinq minutes. »',
                        'choices' => [
                            ['choice_text' => 'vais', 'is_correct' => true],
                            ['choice_text' => 'va', 'is_correct' => false],
                            ['choice_text' => 'irai', 'is_correct' => false],
                            ['choice_text' => 'suis', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur proche se forme avec « aller » au présent suivi de l’infinitif : « je vais partir ».',
                    ],
                    [
                        'question' => 'Quelle phrase est construite correctement au futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons commencer le cours.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons commençons le cours.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons commencé le cours.', 'is_correct' => false],
                            ['choice_text' => 'Nous va commencer le cours.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « allons », le verbe suivant reste à l’infinitif : « commencer ». La structure correcte est « nous allons commencer ».',
                    ],
                    [
                        'question' => 'Une personne dit : « Le train part dans deux minutes. » Quelle phrase au futur proche exprime la même idée générale de proximité ?',
                        'choices' => [
                            ['choice_text' => 'Le train va partir.', 'is_correct' => true],
                            ['choice_text' => 'Le train va parti.', 'is_correct' => false],
                            ['choice_text' => 'Le train partirait.', 'is_correct' => false],
                            ['choice_text' => 'Le train partait.', 'is_correct' => false],
                        ],
                        'explanation' => '« Va partir » indique une action très proche ou prévue. C’est la structure du futur proche.',
                    ],
                    [
                        'question' => 'Complétez : « Ils ___ visiter le musée demain. »',
                        'choices' => [
                            ['choice_text' => 'vont', 'is_correct' => true],
                            ['choice_text' => 'vont visitent', 'is_correct' => false],
                            ['choice_text' => 'vont visiteront', 'is_correct' => false],
                            ['choice_text' => 'va visiter', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ils », aller devient « vont ». Le verbe suivant reste à l’infinitif : « vont visiter ».',
                    ],
                    [
                        'question' => 'Quelle phrase indique clairement un projet pour ce soir ?',
                        'choices' => [
                            ['choice_text' => 'Ce soir, je vais préparer le dîner.', 'is_correct' => true],
                            ['choice_text' => 'Ce soir, je prépare hier le dîner.', 'is_correct' => false],
                            ['choice_text' => 'Ce soir, je préparer le dîner.', 'is_correct' => false],
                            ['choice_text' => 'Ce soir, je préparais le dîner.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je vais préparer » indique un projet prévu pour un futur proche. Le deuxième verbe reste à l’infinitif.',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Nous allons étudions après le déjeuner. » Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons étudier après le déjeuner.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons étudié après le déjeuner.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons étudions après le déjeuner.', 'is_correct' => false],
                            ['choice_text' => 'Nous aller étudier après le déjeuner.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après l’auxiliaire aller dans le futur proche, on utilise l’infinitif : « nous allons étudier ».',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour annoncer une action imminente ?',
                        'choices' => [
                            ['choice_text' => 'Attention, le spectacle va commencer !', 'is_correct' => true],
                            ['choice_text' => 'Attention, le spectacle va commençons !', 'is_correct' => false],
                            ['choice_text' => 'Attention, le spectacle commence hier !', 'is_correct' => false],
                            ['choice_text' => 'Attention, le spectacle commençait demain !', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur proche « va commencer » indique que l’action est sur le point de se produire.',
                    ],
                    [
                        'question' => 'Quel choix complète correctement : « Vous ___ prendre le train à 18 h. »',
                        'choices' => [
                            ['choice_text' => 'allez', 'is_correct' => true],
                            ['choice_text' => 'allez prenez', 'is_correct' => false],
                            ['choice_text' => 'allez pris', 'is_correct' => false],
                            ['choice_text' => 'va prendre', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », aller se conjugue « vous allez », puis le verbe suivant reste à l’infinitif : « prendre ».',
                    ],
                    [
                        'question' => 'Quelle phrase montre qu’une activité est prévue dans un avenir très proche ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons manger dans quelques minutes.', 'is_correct' => true],
                            ['choice_text' => 'Nous mangions dans quelques minutes.', 'is_correct' => false],
                            ['choice_text' => 'Nous manger hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous mangeons il y a deux jours.', 'is_correct' => false],
                        ],
                        'explanation' => '« Allons manger » est une construction de futur proche qui convient à une action prévue très prochainement.',
                    ],
                    [
                        'question' => 'Quelle transformation est correcte ? « Je fais mes devoirs ce soir. » → intention proche',
                        'choices' => [
                            ['choice_text' => 'Je vais faire mes devoirs ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Je vais fais mes devoirs ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Je va faire mes devoirs ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Je vais fait mes devoirs ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour former le futur proche avec « faire », on conjugue aller puis on garde « faire » à l’infinitif : « je vais faire ».',
                    ],
                ],
            ],
            [
                'title' => 'Le futur simple : parler de demain',
                'description' => 'Faites vos premiers pas avec le futur simple et choisissez la forme correcte pour annoncer des actions ou des projets à venir.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complétez : « Demain, je ___ à la bibliothèque. »',
                        'choices' => [
                            ['choice_text' => 'irai', 'is_correct' => true],
                            ['choice_text' => 'vais', 'is_correct' => false],
                            ['choice_text' => 'allais', 'is_correct' => false],
                            ['choice_text' => 'suis allé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur simple de « aller » avec « je » est « j’irai ». Le mot « demain » situe l’action dans le futur.',
                    ],
                    [
                        'question' => 'Quelle forme complète « Nous ___ demain matin » avec le verbe « travailler » ?',
                        'choices' => [
                            ['choice_text' => 'travaillerons', 'is_correct' => true],
                            ['choice_text' => 'travaillons', 'is_correct' => false],
                            ['choice_text' => 'travailler', 'is_correct' => false],
                            ['choice_text' => 'travaillions', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur simple de « travailler » avec « nous » est « nous travaillerons ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement formée ?',
                        'choices' => [
                            ['choice_text' => 'Elle finira son travail ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Elle finirai son travail ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle finissons son travail ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle fini son travail ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », finir au futur simple donne « elle finira ».',
                    ],
                    [
                        'question' => 'Quel choix convient ? « Vous ___ vos résultats la semaine prochaine. »',
                        'choices' => [
                            ['choice_text' => 'recevrez', 'is_correct' => true],
                            ['choice_text' => 'recevez', 'is_correct' => false],
                            ['choice_text' => 'receviez', 'is_correct' => false],
                            ['choice_text' => 'reçu', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur simple de recevoir avec « vous » est « vous recevrez ».',
                    ],
                    [
                        'question' => 'Dans quelle phrase le futur simple est-il correctement employé ?',
                        'choices' => [
                            ['choice_text' => 'Un jour, je visiterai le Canada.', 'is_correct' => true],
                            ['choice_text' => 'Un jour, je visite hier le Canada.', 'is_correct' => false],
                            ['choice_text' => 'Un jour, je visiterais le Canada demain dans tous les contextes.', 'is_correct' => false],
                            ['choice_text' => 'Un jour, je visité le Canada.', 'is_correct' => false],
                        ],
                        'explanation' => '« Un jour » renvoie ici à un moment futur. Le futur simple « je visiterai » convient pour annoncer cette action.',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Demain, nous prendrons le bus à 8 h. » Quelle évaluation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La phrase est correctement construite au futur simple.', 'is_correct' => true],
                            ['choice_text' => 'Il faut écrire « nous prendrions ».', 'is_correct' => false],
                            ['choice_text' => 'Il faut supprimer le futur.', 'is_correct' => false],
                            ['choice_text' => 'Il faut remplacer « prendrons » par « prendre ».', 'is_correct' => false],
                        ],
                        'explanation' => '« Prendrons » est bien le futur simple de prendre avec « nous ». Le contexte « demain » convient à ce temps.',
                    ],
                    [
                        'question' => 'Quelle forme du verbe « être » convient avec « tu » au futur simple ?',
                        'choices' => [
                            ['choice_text' => 'seras', 'is_correct' => true],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'serais', 'is_correct' => false],
                            ['choice_text' => 'sois', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur simple de être avec « tu » est « tu seras ».',
                    ],
                    [
                        'question' => 'Complétez : « Après les cours, ils ___ chez eux. »',
                        'choices' => [
                            ['choice_text' => 'rentreront', 'is_correct' => true],
                            ['choice_text' => 'rentrent', 'is_correct' => false],
                            ['choice_text' => 'rentraient', 'is_correct' => false],
                            ['choice_text' => 'rentrés', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour annoncer une action future avec « ils », le futur simple de rentrer est « rentreront ».',
                    ],
                    [
                        'question' => 'Quelle paire contient une forme au présent et sa forme au futur simple ?',
                        'choices' => [
                            ['choice_text' => 'je parle / je parlerai', 'is_correct' => true],
                            ['choice_text' => 'je parle / je parlais', 'is_correct' => false],
                            ['choice_text' => 'je parlai / je parler', 'is_correct' => false],
                            ['choice_text' => 'je parlerai / je parlions', 'is_correct' => false],
                        ],
                        'explanation' => '« Je parle » est au présent et « je parlerai » au futur simple. La terminaison -ai correspond ici à la première personne du singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase annonce un projet futur sans employer le futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Nous voyagerons en juillet.', 'is_correct' => true],
                            ['choice_text' => 'Nous voyageons hier en juillet.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons voyager hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous voyagions demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous voyagerons » est une forme du futur simple. Le repère « en juillet » situe l’action dans l’avenir.',
                    ],
                    [
                        'question' => 'Quel verbe complète « Quand tu seras prêt, tu ___ le travail. » au futur simple ?',
                        'choices' => [
                            ['choice_text' => 'commenceras', 'is_correct' => true],
                            ['choice_text' => 'commences', 'is_correct' => false],
                            ['choice_text' => 'commençais', 'is_correct' => false],
                            ['choice_text' => 'commencer', 'is_correct' => false],
                        ],
                        'explanation' => '« Commenceras » est le futur simple de commencer avec « tu ». La phrase présente une action future.',
                    ],
                ],
            ],
            [
                'title' => 'Le passé composé pour raconter une action terminée',
                'description' => 'Utilisez le passé composé pour parler d’actions terminées dans le passé et choisissez correctement l’auxiliaire et le participe passé dans des phrases simples.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « Hier, j’___ un film. »',
                        'choices' => [
                            ['choice_text' => 'ai regardé', 'is_correct' => true],
                            ['choice_text' => 'regarde', 'is_correct' => false],
                            ['choice_text' => 'regarderai', 'is_correct' => false],
                            ['choice_text' => 'regardais', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier » indique une action terminée. Le passé composé de regarder avec « je » est « j’ai regardé ».',
                    ],
                    [
                        'question' => 'Quelle phrase raconte correctement une action terminée hier ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons visité le musée.', 'is_correct' => true],
                            ['choice_text' => 'Nous visitons le musée hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous visiterons le musée hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous visiter le musée hier.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passé composé « avons visité » convient pour une visite achevée dans le passé.',
                    ],
                    [
                        'question' => 'Quel auxiliaire utilise-t-on dans « Elle ___ arrivée à huit heures » ?',
                        'choices' => [
                            ['choice_text' => 'est', 'is_correct' => true],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'va', 'is_correct' => false],
                            ['choice_text' => 'sera', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le verbe « arriver », le passé composé se forme avec l’auxiliaire être : « elle est arrivée ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’ai terminé mes devoirs.', 'is_correct' => true],
                            ['choice_text' => 'J’ai terminer mes devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Je suis terminé mes devoirs.', 'is_correct' => false],
                            ['choice_text' => 'J’avais terminé mes devoirs hier seulement.', 'is_correct' => false],
                        ],
                        'explanation' => 'Au passé composé, le verbe terminer se construit avec avoir + participe passé : « j’ai terminé ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Nous avons aller au cinéma samedi. » Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous sommes allés au cinéma samedi.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons allés au cinéma samedi.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons au cinéma samedi dernier.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons aller au cinéma samedi.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe aller se conjugue avec être au passé composé : « nous sommes allés ». Le participe passé s’accorde avec le sujet.',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’une action vient de se terminer dans le passé ?',
                        'choices' => [
                            ['choice_text' => 'Elle a fermé la porte.', 'is_correct' => true],
                            ['choice_text' => 'Elle fermera la porte.', 'is_correct' => false],
                            ['choice_text' => 'Elle ferme la porte demain.', 'is_correct' => false],
                            ['choice_text' => 'Elle fermer la porte.', 'is_correct' => false],
                        ],
                        'explanation' => '« A fermé » est au passé composé et présente l’action comme terminée.',
                    ],
                    [
                        'question' => 'Quel choix complète « Vous ___ le train ce matin » ?',
                        'choices' => [
                            ['choice_text' => 'avez pris', 'is_correct' => true],
                            ['choice_text' => 'avez prendre', 'is_correct' => false],
                            ['choice_text' => 'êtes pris', 'is_correct' => false],
                            ['choice_text' => 'prenez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passé composé de prendre se forme avec avoir + participe passé : « vous avez pris ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement conjuguée ?',
                        'choices' => [
                            ['choice_text' => 'Ils ont fini le projet.', 'is_correct' => true],
                            ['choice_text' => 'Ils sont fini le projet.', 'is_correct' => false],
                            ['choice_text' => 'Ils ont finir le projet.', 'is_correct' => false],
                            ['choice_text' => 'Ils finissent le projet hier.', 'is_correct' => false],
                        ],
                        'explanation' => 'Finir prend l’auxiliaire avoir au passé composé : « ils ont fini ».',
                    ],
                    [
                        'question' => '« Marie est sortie à midi. » Que raconte cette phrase ?',
                        'choices' => [
                            ['choice_text' => 'Une action terminée dans le passé.', 'is_correct' => true],
                            ['choice_text' => 'Une action qui aura lieu demain.', 'is_correct' => false],
                            ['choice_text' => 'Une habitude actuelle.', 'is_correct' => false],
                            ['choice_text' => 'Un ordre.', 'is_correct' => false],
                        ],
                        'explanation' => '« Est sortie » est au passé composé. La phrase présente donc une action passée et achevée.',
                    ],
                    [
                        'question' => 'Quel participe passé complète correctement : « Nous avons ___ la réponse. »',
                        'choices' => [
                            ['choice_text' => 'trouvé', 'is_correct' => true],
                            ['choice_text' => 'trouver', 'is_correct' => false],
                            ['choice_text' => 'trouvés', 'is_correct' => false],
                            ['choice_text' => 'trouvait', 'is_correct' => false],
                        ],
                        'explanation' => 'Après l’auxiliaire « avons », on utilise le participe passé « trouvé » dans cette construction avec avoir.',
                    ],
                    [
                        'question' => 'Quelle phrase raconte correctement une activité terminée dimanche ?',
                        'choices' => [
                            ['choice_text' => 'Dimanche, nous avons nettoyé la maison.', 'is_correct' => true],
                            ['choice_text' => 'Dimanche, nous nettoierons la maison.', 'is_correct' => false],
                            ['choice_text' => 'Dimanche, nous nettoyons hier la maison.', 'is_correct' => false],
                            ['choice_text' => 'Dimanche, nous nettoyer la maison.', 'is_correct' => false],
                        ],
                        'explanation' => '« Avons nettoyé » est au passé composé et convient pour une action achevée dimanche.',
                    ],
                ],
            ],
            [
                'title' => 'Présent ou passé composé ?',
                'description' => 'Apprenez à distinguer une action habituelle ou actuelle d’une action terminée dans le passé à partir d’indices temporels simples.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => '« Tous les jours, elle ___ le bus à huit heures. » Quel temps convient ?',
                        'choices' => [
                            ['choice_text' => 'prend', 'is_correct' => true],
                            ['choice_text' => 'a pris', 'is_correct' => false],
                            ['choice_text' => 'prendra', 'is_correct' => false],
                            ['choice_text' => 'prenait hier', 'is_correct' => false],
                        ],
                        'explanation' => '« Tous les jours » indique une habitude actuelle. Le présent « elle prend » est donc approprié.',
                    ],
                    [
                        'question' => '« Hier, nous ___ au marché. »',
                        'choices' => [
                            ['choice_text' => 'sommes allés', 'is_correct' => true],
                            ['choice_text' => 'allons', 'is_correct' => false],
                            ['choice_text' => 'irons', 'is_correct' => false],
                            ['choice_text' => 'allions demain', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier » situe l’action dans le passé. Avec aller, le passé composé se forme avec être : « nous sommes allés ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit une habitude plutôt qu’une action unique ?',
                        'choices' => [
                            ['choice_text' => 'Je lis souvent avant de dormir.', 'is_correct' => true],
                            ['choice_text' => 'J’ai lu ce livre hier soir.', 'is_correct' => false],
                            ['choice_text' => 'Je lirai ce livre demain.', 'is_correct' => false],
                            ['choice_text' => 'Je vais lire ce livre ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Souvent » indique une répétition habituelle. Le présent est le temps naturel pour exprimer cette habitude.',
                    ],
                    [
                        'question' => '« Ce matin, il ___ son examen. » Si l’examen est déjà terminé, quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'a passé', 'is_correct' => true],
                            ['choice_text' => 'passe', 'is_correct' => false],
                            ['choice_text' => 'passera', 'is_correct' => false],
                            ['choice_text' => 'va passer demain', 'is_correct' => false],
                        ],
                        'explanation' => 'L’action est déjà terminée ce matin. Le passé composé « a passé » convient dans cette situation.',
                    ],
                    [
                        'question' => 'Quel énoncé présente une routine actuelle ?',
                        'choices' => [
                            ['choice_text' => 'Nous faisons du sport trois fois par semaine.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons fait du sport hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous ferons du sport demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons faire du sport dans une heure.', 'is_correct' => false],
                        ],
                        'explanation' => '« Trois fois par semaine » indique une habitude actuelle. Le présent « nous faisons » correspond à cette routine.',
                    ],
                    [
                        'question' => 'Quelle phrase raconte une action terminée et non une habitude ?',
                        'choices' => [
                            ['choice_text' => 'J’ai appelé mon professeur hier.', 'is_correct' => true],
                            ['choice_text' => 'J’appelle mon professeur chaque lundi.', 'is_correct' => false],
                            ['choice_text' => 'Je vais appeler mon professeur ce soir.', 'is_correct' => false],
                            ['choice_text' => 'J’appellerai mon professeur demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « hier » et le passé composé « ai appelé » indiquent une action ponctuelle et terminée.',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Hier, je regarde un film. » Quelle correction convient pour raconter une action terminée ?',
                        'choices' => [
                            ['choice_text' => 'Hier, j’ai regardé un film.', 'is_correct' => true],
                            ['choice_text' => 'Hier, je regarderai un film.', 'is_correct' => false],
                            ['choice_text' => 'Hier, je vais regarder un film.', 'is_correct' => false],
                            ['choice_text' => 'Hier, regarder un film.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une action achevée dans le passé, on utilise ici le passé composé : « j’ai regardé ».',
                    ],
                    [
                        'question' => 'Quelle phrase est compatible avec le repère « chaque dimanche » ?',
                        'choices' => [
                            ['choice_text' => 'Nous visitons nos grands-parents chaque dimanche.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons visité nos grands-parents chaque dimanche hier seulement.', 'is_correct' => false],
                            ['choice_text' => 'Nous visiterons nos grands-parents chaque dimanche prochain uniquement.', 'is_correct' => false],
                            ['choice_text' => 'Nous visiteraient nos grands-parents chaque dimanche.', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaque dimanche » exprime une habitude répétée. Le présent « nous visitons » convient naturellement.',
                    ],
                    [
                        'question' => '« Aujourd’hui, je travaille à la maison. » Pourquoi le présent est-il approprié ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’action se déroule dans la situation actuelle.', 'is_correct' => true],
                            ['choice_text' => 'Parce que « aujourd’hui » indique toujours le passé.', 'is_correct' => false],
                            ['choice_text' => 'Parce que le présent sert uniquement à parler du futur.', 'is_correct' => false],
                            ['choice_text' => 'Parce que travailler est obligatoirement au présent.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent peut décrire une situation qui se déroule actuellement. « Aujourd’hui » situe ici l’action dans la période présente.',
                    ],
                    [
                        'question' => 'Quel choix complète correctement : « La semaine dernière, ils ___ un nouvel appartement. »',
                        'choices' => [
                            ['choice_text' => 'ont trouvé', 'is_correct' => true],
                            ['choice_text' => 'trouvent', 'is_correct' => false],
                            ['choice_text' => 'trouveront', 'is_correct' => false],
                            ['choice_text' => 'vont trouver', 'is_correct' => false],
                        ],
                        'explanation' => '« La semaine dernière » place l’action dans le passé. Le passé composé « ont trouvé » convient.',
                    ],
                ],
            ],
            [
                'title' => 'L’imparfait pour les habitudes et les descriptions',
                'description' => 'Découvrez les premiers usages de l’imparfait pour parler d’habitudes passées et décrire une situation dans le passé.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quand j’étais enfant, je ___ souvent au parc.',
                        'choices' => [
                            ['choice_text' => 'jouais', 'is_correct' => true],
                            ['choice_text' => 'jouerai', 'is_correct' => false],
                            ['choice_text' => 'joue', 'is_correct' => false],
                            ['choice_text' => 'ai joué', 'is_correct' => false],
                        ],
                        'explanation' => '« Quand j’étais enfant » et « souvent » présentent une habitude passée. L’imparfait « jouais » convient donc.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise l’imparfait pour décrire une situation passée ?',
                        'choices' => [
                            ['choice_text' => 'La maison était très calme.', 'is_correct' => true],
                            ['choice_text' => 'La maison sera très calme demain.', 'is_correct' => false],
                            ['choice_text' => 'La maison est très calme aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'La maison a été très calme pendant une minute seulement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Était » à l’imparfait sert ici à décrire l’état ou l’ambiance d’une maison dans le passé.',
                    ],
                    [
                        'question' => 'Complétez : « Avant, nous ___ près de l’école. »',
                        'choices' => [
                            ['choice_text' => 'habitions', 'is_correct' => true],
                            ['choice_text' => 'habiterons', 'is_correct' => false],
                            ['choice_text' => 'habitons', 'is_correct' => false],
                            ['choice_text' => 'avons habité hier', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant » renvoie ici à une situation habituelle ou prolongée dans le passé. L’imparfait « habitions » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase présente une habitude répétée dans le passé ?',
                        'choices' => [
                            ['choice_text' => 'Chaque été, nous allions à la mer.', 'is_correct' => true],
                            ['choice_text' => 'Chaque été, nous irons à la mer hier.', 'is_correct' => false],
                            ['choice_text' => 'Chaque été, nous sommes allés une seule fois.', 'is_correct' => false],
                            ['choice_text' => 'Chaque été, nous allons demain à la mer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaque été » exprime une répétition dans le passé. L’imparfait « allions » est adapté à cette habitude.',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Quand j’étais petit, je joue beaucoup au football. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'Quand j’étais petit, je jouais beaucoup au football.', 'is_correct' => true],
                            ['choice_text' => 'Quand j’étais petit, je jouerai beaucoup au football.', 'is_correct' => false],
                            ['choice_text' => 'Quand j’étais petit, j’ai jouer beaucoup au football.', 'is_correct' => false],
                            ['choice_text' => 'Quand j’étais petit, je jouer beaucoup au football.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression « quand j’étais petit » présente une période passée et « beaucoup » souligne une habitude. On utilise donc « je jouais » à l’imparfait.',
                    ],
                    [
                        'question' => 'Quel choix complète : « À cette époque, elle ___ très timide. »',
                        'choices' => [
                            ['choice_text' => 'était', 'is_correct' => true],
                            ['choice_text' => 'sera', 'is_correct' => false],
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'a été demain', 'is_correct' => false],
                        ],
                        'explanation' => '« À cette époque » situe la description dans le passé. « Était » à l’imparfait décrit son état à cette période.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit le temps qu’il faisait pendant une période passée ?',
                        'choices' => [
                            ['choice_text' => 'Il faisait froid en hiver.', 'is_correct' => true],
                            ['choice_text' => 'Il fera froid hier.', 'is_correct' => false],
                            ['choice_text' => 'Il fait froid la semaine dernière.', 'is_correct' => false],
                            ['choice_text' => 'Il a faire froid chaque hiver.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’imparfait « faisait » sert souvent à décrire le temps, l’ambiance ou une situation dans le passé.',
                    ],
                    [
                        'question' => 'Quel temps convient pour raconter une habitude passée avec « tous les soirs » ?',
                        'choices' => [
                            ['choice_text' => 'L’imparfait', 'is_correct' => true],
                            ['choice_text' => 'Le futur simple uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’impératif', 'is_correct' => false],
                            ['choice_text' => 'Le présent uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une habitude répétée dans le passé est un emploi fondamental de l’imparfait : « tous les soirs, je lisais ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient correctement l’imparfait du verbe « avoir » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avions une petite maison.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons une petite maison hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous aurons une petite maison hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous aviez une petite maison.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’imparfait de avoir avec « nous » est « nous avions ». La phrase décrit ici une situation passée.',
                    ],
                    [
                        'question' => 'Quelle phrase présente correctement une description passée ?',
                        'choices' => [
                            ['choice_text' => 'Le village était petit et les rues étaient calmes.', 'is_correct' => true],
                            ['choice_text' => 'Le village est petit et les rues seront calmes hier.', 'is_correct' => false],
                            ['choice_text' => 'Le village a être petit et les rues calmes.', 'is_correct' => false],
                            ['choice_text' => 'Le village sera petit et les rues sont calmes hier.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’imparfait « était » et « étaient » convient pour décrire un cadre ou une situation passée.',
                    ],
                    [
                        'question' => 'Dans « Nous faisions souvent une promenade après le dîner », pourquoi utilise-t-on l’imparfait ?',
                        'choices' => [
                            ['choice_text' => 'Pour présenter une habitude répétée dans le passé.', 'is_correct' => true],
                            ['choice_text' => 'Pour donner un ordre.', 'is_correct' => false],
                            ['choice_text' => 'Pour annoncer une action future.', 'is_correct' => false],
                            ['choice_text' => 'Pour exprimer une action unique déjà terminée sans répétition.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « souvent » indique une répétition. L’imparfait « faisions » présente donc cette activité comme une habitude passée.',
                    ],
                ],
            ],
            [
                'title' => 'Choisir le temps qui convient',
                'description' => 'Comparez les principaux temps du niveau débutant en vous appuyant sur des repères comme aujourd’hui, hier, demain, souvent et maintenant.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => '« Maintenant, je ___ mon travail. » Quel temps convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'fais', 'is_correct' => true],
                            ['choice_text' => 'ai fait hier', 'is_correct' => false],
                            ['choice_text' => 'ferai demain', 'is_correct' => false],
                            ['choice_text' => 'faisais autrefois', 'is_correct' => false],
                        ],
                        'explanation' => '« Maintenant » renvoie au moment présent. Le présent « je fais » est donc approprié.',
                    ],
                    [
                        'question' => '« Demain, nous ___ un examen. » Quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'passerons', 'is_correct' => true],
                            ['choice_text' => 'avons passé', 'is_correct' => false],
                            ['choice_text' => 'passions', 'is_correct' => false],
                            ['choice_text' => 'passons hier', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » situe l’action dans le futur. « Passerons » est le futur simple de passer avec « nous ».',
                    ],
                    [
                        'question' => '« Hier soir, elle ___ un livre pendant une heure. »',
                        'choices' => [
                            ['choice_text' => 'a lu', 'is_correct' => true],
                            ['choice_text' => 'lit', 'is_correct' => false],
                            ['choice_text' => 'lira', 'is_correct' => false],
                            ['choice_text' => 'va lire hier', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier soir » place l’action dans le passé. Le passé composé « a lu » convient pour une action achevée.',
                    ],
                    [
                        'question' => '« Chaque week-end, ils ___ leurs grands-parents. »',
                        'choices' => [
                            ['choice_text' => 'visitent', 'is_correct' => true],
                            ['choice_text' => 'ont visité hier', 'is_correct' => false],
                            ['choice_text' => 'visiteront une fois demain', 'is_correct' => false],
                            ['choice_text' => 'visitaient demain', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaque week-end » exprime une habitude actuelle. Le présent « visitent » convient.',
                    ],
                    [
                        'question' => '« Quand nous étions enfants, nous ___ souvent dans ce jardin. »',
                        'choices' => [
                            ['choice_text' => 'jouions', 'is_correct' => true],
                            ['choice_text' => 'jouerons', 'is_correct' => false],
                            ['choice_text' => 'jouons aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'avons joué une seule fois', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase décrit une habitude répétée dans le passé. L’imparfait « jouions » est adapté.',
                    ],
                    [
                        'question' => 'Un ami dit : « Je vais commencer le film dans cinq minutes. » Quel temps est employé ?',
                        'choices' => [
                            ['choice_text' => 'Le futur proche', 'is_correct' => true],
                            ['choice_text' => 'Le passé composé', 'is_correct' => false],
                            ['choice_text' => 'L’imparfait', 'is_correct' => false],
                            ['choice_text' => 'L’impératif', 'is_correct' => false],
                        ],
                        'explanation' => '« Vais commencer » combine le présent du verbe aller avec l’infinitif « commencer ». C’est la structure du futur proche.',
                    ],
                    [
                        'question' => 'Quelle phrase présente une action future déjà annoncée comme un événement à venir ?',
                        'choices' => [
                            ['choice_text' => 'Le cours commencera à neuf heures.', 'is_correct' => true],
                            ['choice_text' => 'Le cours a commencé hier.', 'is_correct' => false],
                            ['choice_text' => 'Le cours commence hier.', 'is_correct' => false],
                            ['choice_text' => 'Le cours commençait demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Commencera » est au futur simple et indique que le début du cours appartient à l’avenir.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit un état passé plutôt qu’une action ponctuelle ?',
                        'choices' => [
                            ['choice_text' => 'La salle était silencieuse.', 'is_correct' => true],
                            ['choice_text' => 'La salle a fermé à dix-huit heures.', 'is_correct' => false],
                            ['choice_text' => 'La salle fermera demain.', 'is_correct' => false],
                            ['choice_text' => 'La salle va ouvrir dans cinq minutes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Était silencieuse » utilise l’imparfait pour décrire l’état d’une salle dans le passé.',
                    ],
                    [
                        'question' => 'Quelle phrase associe correctement un repère passé et un temps passé ?',
                        'choices' => [
                            ['choice_text' => 'La semaine dernière, nous avons déménagé.', 'is_correct' => true],
                            ['choice_text' => 'La semaine dernière, nous déménagerons.', 'is_correct' => false],
                            ['choice_text' => 'La semaine dernière, nous déménageons demain.', 'is_correct' => false],
                            ['choice_text' => 'La semaine dernière, nous allons déménager hier.', 'is_correct' => false],
                        ],
                        'explanation' => '« La semaine dernière » situe l’action dans le passé. Le passé composé « avons déménagé » convient pour cette action achevée.',
                    ],
                    [
                        'question' => 'Quelle phrase associe correctement une habitude passée et l’imparfait ?',
                        'choices' => [
                            ['choice_text' => 'Avant, mon grand-père lisait le journal chaque matin.', 'is_correct' => true],
                            ['choice_text' => 'Avant, mon grand-père lira le journal chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Avant, mon grand-père lit le journal hier.', 'is_correct' => false],
                            ['choice_text' => 'Avant, mon grand-père a lire le journal chaque matin.', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant » et « chaque matin » indiquent une habitude passée. Le verbe lire doit donc être à l’imparfait : « lisait ».',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour une action prévue très prochainement ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons partir dans dix minutes.', 'is_correct' => true],
                            ['choice_text' => 'Nous partions dans dix minutes hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes partis dans dix minutes hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous partirons il y a deux jours.', 'is_correct' => false],
                        ],
                        'explanation' => '« Allons partir » est au futur proche et convient à une action prévue dans un avenir très proche.',
                    ],
                ],
            ],
            [
                'title' => 'L’impératif pour donner des consignes',
                'description' => 'Découvrez l’impératif présent à travers des consignes simples, des conseils et des instructions de la vie quotidienne.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Un professeur dit à ses étudiants : « ___ votre livre à la page 20. »',
                        'choices' => [
                            ['choice_text' => 'Ouvrez', 'is_correct' => true],
                            ['choice_text' => 'Ouvrez-vous', 'is_correct' => false],
                            ['choice_text' => 'Ouvrir', 'is_correct' => false],
                            ['choice_text' => 'Vous ouvrez demain', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impératif sert à donner une consigne ou une instruction. Avec « vous », on dit « ouvrez votre livre ».',
                    ],
                    [
                        'question' => 'Quelle phrase donne correctement un conseil à une personne ?',
                        'choices' => [
                            ['choice_text' => 'Repose-toi un peu.', 'is_correct' => true],
                            ['choice_text' => 'Tu te reposes un peu demain obligatoirement.', 'is_correct' => false],
                            ['choice_text' => 'Reposer-toi demain hier.', 'is_correct' => false],
                            ['choice_text' => 'Tu reposer un peu.', 'is_correct' => false],
                        ],
                        'explanation' => '« Repose-toi » est l’impératif de se reposer à la deuxième personne du singulier et exprime ici un conseil.',
                    ],
                    [
                        'question' => 'Quel énoncé convient sur un panneau dans une salle de classe ?',
                        'choices' => [
                            ['choice_text' => 'Fermez la porte, s’il vous plaît.', 'is_correct' => true],
                            ['choice_text' => 'Vous fermer la porte demain.', 'is_correct' => false],
                            ['choice_text' => 'Vous fermez la porte hier.', 'is_correct' => false],
                            ['choice_text' => 'Fermer la porte vous êtes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Fermez » à l’impératif permet de donner directement une consigne à plusieurs personnes ou à une personne vouvoyée.',
                    ],
                    [
                        'question' => 'Quelle forme correspond à l’impératif de « parler » avec « tu » ?',
                        'choices' => [
                            ['choice_text' => 'Parle', 'is_correct' => true],
                            ['choice_text' => 'Parles', 'is_correct' => false],
                            ['choice_text' => 'Parlons', 'is_correct' => false],
                            ['choice_text' => 'Parlez', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’impératif, les verbes réguliers en -er prennent généralement la forme « parle » avec « tu », sans le -s final du présent.',
                    ],
                    [
                        'question' => 'Quelle phrase invite un groupe à commencer ensemble ?',
                        'choices' => [
                            ['choice_text' => 'Commençons !', 'is_correct' => true],
                            ['choice_text' => 'Commencez-moi !', 'is_correct' => false],
                            ['choice_text' => 'Commençons-nous hier.', 'is_correct' => false],
                            ['choice_text' => 'Commencer !', 'is_correct' => false],
                        ],
                        'explanation' => '« Commençons ! » est l’impératif de « commencer » à la première personne du pluriel et signifie « commençons maintenant ».',
                    ],
                    [
                        'question' => 'Un médecin donne une consigne simple : « ___ beaucoup d’eau. »',
                        'choices' => [
                            ['choice_text' => 'Buvez', 'is_correct' => true],
                            ['choice_text' => 'Boire', 'is_correct' => false],
                            ['choice_text' => 'Buvez-vous demain', 'is_correct' => false],
                            ['choice_text' => 'Buvez à hier', 'is_correct' => false],
                        ],
                        'explanation' => '« Buvez » est la forme de l’impératif de boire avec « vous ». La phrase donne directement une consigne.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement l’impératif négatif ?',
                        'choices' => [
                            ['choice_text' => 'Ne parle pas si fort.', 'is_correct' => true],
                            ['choice_text' => 'Ne parles pas si fort.', 'is_correct' => false],
                            ['choice_text' => 'Pas parle si fort.', 'is_correct' => false],
                            ['choice_text' => 'Ne parler pas si fort.', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’impératif négatif, on encadre le verbe avec « ne ... pas ». Pour parler avec « tu », on dit « ne parle pas ».',
                    ],
                    [
                        'question' => 'Quelle consigne peut-on donner avant un examen ?',
                        'choices' => [
                            ['choice_text' => 'Lisez attentivement les questions.', 'is_correct' => true],
                            ['choice_text' => 'Lire attentivement les questions hier.', 'is_correct' => false],
                            ['choice_text' => 'Vous lisiez attentivement les questions.', 'is_correct' => false],
                            ['choice_text' => 'Vous lire attentivement les questions.', 'is_correct' => false],
                        ],
                        'explanation' => '« Lisez » est l’impératif de lire avec « vous ». La phrase donne une instruction aux candidats.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour dire à un ami de patienter ?',
                        'choices' => [
                            ['choice_text' => 'Attends une minute.', 'is_correct' => true],
                            ['choice_text' => 'Attends une minute ?', 'is_correct' => false],
                            ['choice_text' => 'Attendre une minute.', 'is_correct' => false],
                            ['choice_text' => 'Tu attendais une minute.', 'is_correct' => false],
                        ],
                        'explanation' => '« Attends » est l’impératif de attendre avec « tu ». La phrase donne une petite consigne ou une demande.',
                    ],
                    [
                        'question' => 'Quelle formulation convient pour donner une instruction à plusieurs personnes ?',
                        'choices' => [
                            ['choice_text' => 'Entrez, s’il vous plaît.', 'is_correct' => true],
                            ['choice_text' => 'Entrer, s’il vous plaît.', 'is_correct' => false],
                            ['choice_text' => 'Entres, s’il vous plaît.', 'is_correct' => false],
                            ['choice_text' => 'Vous entrer, s’il vous plaît.', 'is_correct' => false],
                        ],
                        'explanation' => '« Entrez » est la forme de l’impératif avec « vous ». Elle convient pour demander poliment à plusieurs personnes d’entrer.',
                    ],
                    [
                        'question' => 'Quel choix complète « ___ attention à la marche ! » ?',
                        'choices' => [
                            ['choice_text' => 'Fais', 'is_correct' => true],
                            ['choice_text' => 'Fait', 'is_correct' => false],
                            ['choice_text' => 'Faire', 'is_correct' => false],
                            ['choice_text' => 'Faisais', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression « fais attention » est une consigne à l’impératif avec « tu ». Le verbe faire prend ici la forme « fais ».',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale des temps et des modes',
                'description' => 'Réinvestissez les principaux temps et l’impératif dans des phrases variées afin de choisir une forme verbale adaptée au contexte.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => '« Aujourd’hui, je ___ à l’université. » Quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'vais', 'is_correct' => true],
                            ['choice_text' => 'irai hier', 'is_correct' => false],
                            ['choice_text' => 'suis allé demain', 'is_correct' => false],
                            ['choice_text' => 'allais demain', 'is_correct' => false],
                        ],
                        'explanation' => '« Aujourd’hui » situe l’action dans le présent. Avec « je », le présent de aller est « je vais ».',
                    ],
                    [
                        'question' => '« Demain, nous ___ un nouveau chapitre. »',
                        'choices' => [
                            ['choice_text' => 'étudierons', 'is_correct' => true],
                            ['choice_text' => 'avons étudié', 'is_correct' => false],
                            ['choice_text' => 'étudions hier', 'is_correct' => false],
                            ['choice_text' => 'étudiions demain', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » indique le futur. « Étudierons » est le futur simple de étudier avec « nous ».',
                    ],
                    [
                        'question' => '« Hier, elle ___ son rapport. » Si l’action est terminée, quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'a terminé', 'is_correct' => true],
                            ['choice_text' => 'termine', 'is_correct' => false],
                            ['choice_text' => 'terminera', 'is_correct' => false],
                            ['choice_text' => 'va terminer demain', 'is_correct' => false],
                        ],
                        'explanation' => 'L’indication « hier » et le caractère terminé de l’action appellent le passé composé : « elle a terminé ».',
                    ],
                    [
                        'question' => '« Quand j’étais enfant, je ___ beaucoup de dessins. »',
                        'choices' => [
                            ['choice_text' => 'faisais', 'is_correct' => true],
                            ['choice_text' => 'ferai', 'is_correct' => false],
                            ['choice_text' => 'fais', 'is_correct' => false],
                            ['choice_text' => 'ai fait hier seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase décrit une habitude passée. L’imparfait de faire avec « je » est « faisais ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient un futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons commencer dans cinq minutes.', 'is_correct' => true],
                            ['choice_text' => 'Nous commençons chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons commencé hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous commencions souvent à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => '« Allons commencer » combine aller au présent et l’infinitif « commencer ». C’est le futur proche.',
                    ],
                    [
                        'question' => 'Quelle phrase donne une consigne ?',
                        'choices' => [
                            ['choice_text' => 'Fermez vos cahiers.', 'is_correct' => true],
                            ['choice_text' => 'Vous fermez vos cahiers hier.', 'is_correct' => false],
                            ['choice_text' => 'Vous fermerez vos cahiers demain.', 'is_correct' => false],
                            ['choice_text' => 'Vous fermiez vos cahiers avant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Fermez » est à l’impératif. Cette forme sert directement à donner une instruction.',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « La semaine prochaine, j’ai passé mon examen. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'La semaine prochaine, je passerai mon examen.', 'is_correct' => true],
                            ['choice_text' => 'La semaine prochaine, je passais mon examen.', 'is_correct' => false],
                            ['choice_text' => 'La semaine prochaine, je suis passé mon examen.', 'is_correct' => false],
                            ['choice_text' => 'La semaine prochaine, je passer mon examen.', 'is_correct' => false],
                        ],
                        'explanation' => '« La semaine prochaine » situe l’action dans le futur. Le futur simple « je passerai » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une habitude passée ?',
                        'choices' => [
                            ['choice_text' => 'Avant, nous mangions souvent ensemble.', 'is_correct' => true],
                            ['choice_text' => 'Avant, nous mangerons souvent ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Avant, nous avons mangé demain.', 'is_correct' => false],
                            ['choice_text' => 'Avant, nous allons manger hier.', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant » et « souvent » présentent une habitude passée. L’imparfait « mangions » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase raconte un événement précis dans le passé ?',
                        'choices' => [
                            ['choice_text' => 'Samedi, j’ai rencontré un ancien camarade.', 'is_correct' => true],
                            ['choice_text' => 'Samedi, je rencontre souvent un ancien camarade.', 'is_correct' => false],
                            ['choice_text' => 'Samedi, je rencontrerai un ancien camarade hier.', 'is_correct' => false],
                            ['choice_text' => 'Samedi, je rencontrais demain un ancien camarade.', 'is_correct' => false],
                        ],
                        'explanation' => '« Samedi » renvoie ici à un événement précis déjà terminé. Le passé composé « ai rencontré » convient.',
                    ],
                    [
                        'question' => 'Quel choix complète une consigne donnée à un ami ? « ___ attention en traversant ! »',
                        'choices' => [
                            ['choice_text' => 'Fais', 'is_correct' => true],
                            ['choice_text' => 'Fait', 'is_correct' => false],
                            ['choice_text' => 'Faisais', 'is_correct' => false],
                            ['choice_text' => 'Faire', 'is_correct' => false],
                        ],
                        'explanation' => '« Fais attention » est une expression à l’impératif avec « tu ». Elle sert ici à donner un conseil ou une consigne.',
                    ],
                    [
                        'question' => 'Quelle phrase présente correctement une séquence passée et future ?',
                        'choices' => [
                            ['choice_text' => 'J’ai terminé mon travail, puis je prendrai une pause.', 'is_correct' => true],
                            ['choice_text' => 'J’ai terminé mon travail, puis je prenais une pause demain.', 'is_correct' => false],
                            ['choice_text' => 'Je terminerai mon travail, puis j’ai pris une pause demain.', 'is_correct' => false],
                            ['choice_text' => 'Je termine hier mon travail, puis je prendrai une pause hier.', 'is_correct' => false],
                        ],
                        'explanation' => '« J’ai terminé » présente une action passée et achevée, tandis que « je prendrai » annonce l’action suivante dans le futur.',
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
