<?php

namespace Database\Seeders;

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
                            ['choice_text' => 'boit', 'is_correct' => false],
                            ['choice_text' => 'buvons', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaque matin » annonce une habitude. Avec « je », boire se conjugue « bois » au présent.',
                    ],
                    [
                        'question' => 'Samia est assise sur le canapé avec son roman. Quelle phrase dit ce qu’elle fait en ce moment ?',
                        'choices' => [
                            ['choice_text' => 'Elle lit son roman.', 'is_correct' => true],
                            ['choice_text' => 'Elle lira son roman.', 'is_correct' => false],
                            ['choice_text' => 'Elle a lu son roman.', 'is_correct' => false],
                            ['choice_text' => 'Elle lisait son roman.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une action qui se passe au moment où l’on parle, on emploie le présent : « elle lit ».',
                    ],
                    [
                        'question' => 'Complétez : « Cette année, nous ___ le français à l’université. »',
                        'choices' => [
                            ['choice_text' => 'étudiez', 'is_correct' => false],
                            ['choice_text' => 'étudions', 'is_correct' => true],
                            ['choice_text' => 'étudient', 'is_correct' => false],
                            ['choice_text' => 'étudier', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe étudier prend la terminaison -ons au présent : « nous étudions ».',
                    ],
                    [
                        'question' => 'Quelle phrase énonce une vérité générale ?',
                        'choices' => [
                            ['choice_text' => 'Demain, l’eau bouillira à 100 °C dans ma cuisine.', 'is_correct' => false],
                            ['choice_text' => 'Hier, l’eau a bouilli à 100 °C dans ma cuisine.', 'is_correct' => false],
                            ['choice_text' => 'Ce matin, l’eau bouillait à 100 °C dans ma cuisine.', 'is_correct' => false],
                            ['choice_text' => 'L’eau bout à 100 °C au niveau de la mer.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une vérité générale se dit au présent. Les autres phrases racontent un événement précis, passé ou à venir.',
                    ],
                    [
                        'question' => 'Karim écrit : « Tu travaille beaucoup. » Quelle est la forme correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tu travaillent beaucoup.', 'is_correct' => false],
                            ['choice_text' => 'Tu travaillez beaucoup.', 'is_correct' => false],
                            ['choice_text' => 'Tu travailles beaucoup.', 'is_correct' => true],
                            ['choice_text' => 'Tu travaillons beaucoup.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes en -er prennent -es avec « tu » : « tu travailles ».',
                    ],
                    [
                        'question' => 'Mes parents ___ à Rabat, dans le quartier Agdal.',
                        'choices' => [
                            ['choice_text' => 'habite', 'is_correct' => false],
                            ['choice_text' => 'habitent', 'is_correct' => true],
                            ['choice_text' => 'habitons', 'is_correct' => false],
                            ['choice_text' => 'habitez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « mes parents » est au pluriel (ils). Le verbe prend donc -ent : « habitent ».',
                    ],
                    [
                        'question' => 'Complétez : « Tous les soirs, Salma ___ à onze heures. »',
                        'choices' => [
                            ['choice_text' => 'se couches', 'is_correct' => false],
                            ['choice_text' => 'me couche', 'is_correct' => false],
                            ['choice_text' => 'se couche', 'is_correct' => true],
                            ['choice_text' => 'se coucher', 'is_correct' => false],
                        ],
                        'explanation' => 'Salma correspond à « elle » : le verbe se couche sans -s, avec le pronom « se ».',
                    ],
                    [
                        'question' => 'Quelle phrase est bien conjuguée au présent ?',
                        'choices' => [
                            ['choice_text' => 'Vous prenez le bus tous les matins.', 'is_correct' => true],
                            ['choice_text' => 'Vous prendez le bus tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Vous prennez le bus tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Vous prends le bus tous les matins.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », prendre fait « prenez ». Les autres formes sont des erreurs de conjugaison fréquentes.',
                    ],
                    [
                        'question' => 'Dans « Nous sommes en classe », quel temps est utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Le futur', 'is_correct' => false],
                            ['choice_text' => 'Le passé composé', 'is_correct' => false],
                            ['choice_text' => 'L’imparfait', 'is_correct' => false],
                            ['choice_text' => 'Le présent', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme « sommes » est le présent du verbe être avec « nous ». La phrase décrit la situation actuelle.',
                    ],
                    [
                        'question' => 'Nadia hésite entre le thé et le café, puis dit ce qu’elle aime en ce moment. Quelle phrase exprime sa préférence actuelle ?',
                        'choices' => [
                            ['choice_text' => 'Je préférerai le thé au café.', 'is_correct' => false],
                            ['choice_text' => 'Je préférais le thé au café.', 'is_correct' => false],
                            ['choice_text' => 'J’ai préféré le thé au café.', 'is_correct' => false],
                            ['choice_text' => 'Je préfère le thé au café.', 'is_correct' => true],
                        ],
                        'explanation' => 'Un goût de maintenant se dit au présent : « je préfère ».',
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
                            ['choice_text' => 'va', 'is_correct' => false],
                            ['choice_text' => 'irai', 'is_correct' => false],
                            ['choice_text' => 'vais', 'is_correct' => true],
                            ['choice_text' => 'suis', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur proche se forme avec « aller » au présent suivi de l’infinitif : « je vais partir ».',
                    ],
                    [
                        'question' => 'Quelle phrase annonce, au futur proche, le début du cours ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons commençons le cours.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons commencer le cours.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons commencé le cours.', 'is_correct' => false],
                            ['choice_text' => 'Nous va commencer le cours.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur proche se forme avec aller conjugué, puis un infinitif : « nous allons commencer ».',
                    ],
                    [
                        'question' => 'Sur le quai, Omar entend : « Le train part dans deux minutes ! » Comment dit-on la même chose au futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Le train va partir.', 'is_correct' => true],
                            ['choice_text' => 'Le train va parti.', 'is_correct' => false],
                            ['choice_text' => 'Le train partirait.', 'is_correct' => false],
                            ['choice_text' => 'Le train partait.', 'is_correct' => false],
                        ],
                        'explanation' => '« Va partir » (aller + infinitif) présente le départ comme tout proche.',
                    ],
                    [
                        'question' => 'Ahmed et Sofia ___ visiter le musée de Fès demain.',
                        'choices' => [
                            ['choice_text' => 'va', 'is_correct' => false],
                            ['choice_text' => 'vont', 'is_correct' => true],
                            ['choice_text' => 'vas', 'is_correct' => false],
                            ['choice_text' => 'allez', 'is_correct' => false],
                        ],
                        'explanation' => 'Ahmed et Sofia correspond à « ils » : aller fait « vont », puis l’infinitif « visiter ».',
                    ],
                    [
                        'question' => 'Quelle phrase est bien construite pour annoncer un projet de ce soir ?',
                        'choices' => [
                            ['choice_text' => 'Ce soir, je vais préparé le dîner.', 'is_correct' => false],
                            ['choice_text' => 'Ce soir, je va préparer le dîner.', 'is_correct' => false],
                            ['choice_text' => 'Ce soir, je vais préparons le dîner.', 'is_correct' => false],
                            ['choice_text' => 'Ce soir, je vais préparer le dîner.', 'is_correct' => true],
                        ],
                        'explanation' => 'On conjugue « aller » avec « je » (vais), puis on garde « préparer » à l’infinitif.',
                    ],
                    [
                        'question' => 'Une élève écrit : « Nous allons étudions après le déjeuner. » Quelle est la bonne version ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons étudié après le déjeuner.', 'is_correct' => false],
                            ['choice_text' => 'Nous aller étudier après le déjeuner.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons étudier après le déjeuner.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons étudiez après le déjeuner.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « allons », le deuxième verbe reste à l’infinitif : « étudier ».',
                    ],
                    [
                        'question' => 'Dans la salle, les lumières s’éteignent. Quelle phrase annonce que le spectacle est sur le point de commencer ?',
                        'choices' => [
                            ['choice_text' => 'Attention, le spectacle va commencer !', 'is_correct' => true],
                            ['choice_text' => 'Attention, le spectacle a commencé !', 'is_correct' => false],
                            ['choice_text' => 'Attention, le spectacle va commencé !', 'is_correct' => false],
                            ['choice_text' => 'Attention, le spectacle vont commencer !', 'is_correct' => false],
                        ],
                        'explanation' => '« Va commencer » (aller + infinitif) annonce une action imminente.',
                    ],
                    [
                        'question' => 'Le guide s’adresse au groupe : « Vous ___ prendre le train de 18 h. »',
                        'choices' => [
                            ['choice_text' => 'allons', 'is_correct' => false],
                            ['choice_text' => 'vont', 'is_correct' => false],
                            ['choice_text' => 'allez', 'is_correct' => true],
                            ['choice_text' => 'va', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », aller fait « allez ». L’infinitif « prendre » suit.',
                    ],
                    [
                        'question' => 'Maman annonce que le repas sera prêt très vite. Quelle phrase exprime un avenir très proche ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons mangé il y a quelques minutes.', 'is_correct' => false],
                            ['choice_text' => 'Nous mangions il y a quelques minutes.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons mangé dans quelques minutes.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons manger dans quelques minutes.', 'is_correct' => true],
                        ],
                        'explanation' => '« Allons manger » (futur proche) convient à une action prévue dans quelques minutes.',
                    ],
                    [
                        'question' => 'Yassine veut dire qu’il a l’intention de faire ses devoirs ce soir. Comment transforme-t-il « Je fais mes devoirs ce soir » au futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Je vais fais mes devoirs ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Je vais faire mes devoirs ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Je va faire mes devoirs ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Je vais fait mes devoirs ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'On conjugue aller (« vais ») et on garde « faire » à l’infinitif.',
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
                        'question' => 'Complétez : « Demain, j’___ à la bibliothèque. »',
                        'choices' => [
                            ['choice_text' => 'irai', 'is_correct' => true],
                            ['choice_text' => 'allais', 'is_correct' => false],
                            ['choice_text' => 'suis allé', 'is_correct' => false],
                            ['choice_text' => 'ira', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » place l’action dans l’avenir. Le futur simple de aller avec « je » est « j’irai ».',
                    ],
                    [
                        'question' => 'Complétez avec le futur simple de travailler : « Demain matin, nous ___ à l’atelier. »',
                        'choices' => [
                            ['choice_text' => 'travaillerez', 'is_correct' => false],
                            ['choice_text' => 'travaillerons', 'is_correct' => true],
                            ['choice_text' => 'travaillerai', 'is_correct' => false],
                            ['choice_text' => 'travaillaient', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur simple se forme sur l’infinitif + la terminaison : travailler + ons = « travaillerons ».',
                    ],
                    [
                        'question' => 'Quelle phrase est écrite correctement au futur simple ?',
                        'choices' => [
                            ['choice_text' => 'Elle finirai son travail ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle finiras son travail ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle finiront son travail ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle finira son travail ce soir.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « elle », finir au futur simple prend la terminaison -a : « finira ».',
                    ],
                    [
                        'question' => 'Quel choix convient ? « Vous ___ vos résultats la semaine prochaine. »',
                        'choices' => [
                            ['choice_text' => 'receverez', 'is_correct' => false],
                            ['choice_text' => 'recevront', 'is_correct' => false],
                            ['choice_text' => 'recevrons', 'is_correct' => false],
                            ['choice_text' => 'recevrez', 'is_correct' => true],
                        ],
                        'explanation' => 'Recevoir a un futur irrégulier : « recevr- ». Avec « vous », on obtient « recevrez ».',
                    ],
                    [
                        'question' => 'Nadia rêve de voyager. Quelle phrase exprime son rêve pour l’avenir ?',
                        'choices' => [
                            ['choice_text' => 'Un jour, je visiterai le Canada.', 'is_correct' => true],
                            ['choice_text' => 'Un jour, je visiterez le Canada.', 'is_correct' => false],
                            ['choice_text' => 'Un jour, je visiterons le Canada.', 'is_correct' => false],
                            ['choice_text' => 'Un jour, je visitera le Canada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un projet d’avenir, on emploie le futur simple. Avec « je », la terminaison est -ai : « visiterai ».',
                    ],
                    [
                        'question' => 'Un apprenant hésite : « Demain, nous ___ le bus à 8 h. » Quelle forme de prendre est correcte ?',
                        'choices' => [
                            ['choice_text' => 'prenderons', 'is_correct' => false],
                            ['choice_text' => 'prendront', 'is_correct' => false],
                            ['choice_text' => 'prendrions', 'is_correct' => false],
                            ['choice_text' => 'prendrons', 'is_correct' => true],
                        ],
                        'explanation' => 'Prendre fait « prendr- » au futur. Avec « nous », on ajoute -ons : « prendrons ».',
                    ],
                    [
                        'question' => 'Quelle forme du verbe « être » convient avec « tu » au futur simple ?',
                        'choices' => [
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'serais', 'is_correct' => false],
                            ['choice_text' => 'seras', 'is_correct' => true],
                            ['choice_text' => 'sois', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur simple de être avec « tu » est « tu seras ».',
                    ],
                    [
                        'question' => 'Demain, après les cours, mes cousins ___ chez eux.',
                        'choices' => [
                            ['choice_text' => 'rentreront', 'is_correct' => true],
                            ['choice_text' => 'rentrerez', 'is_correct' => false],
                            ['choice_text' => 'rentrerons', 'is_correct' => false],
                            ['choice_text' => 'rentrera', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ils » (mes cousins), le futur simple de rentrer prend -ont : « rentreront ».',
                    ],
                    [
                        'question' => 'Quelle paire associe, dans cet ordre, le présent puis le futur simple de parler avec « je » ?',
                        'choices' => [
                            ['choice_text' => 'je parle / je parlais', 'is_correct' => false],
                            ['choice_text' => 'je parle / je parlerai', 'is_correct' => true],
                            ['choice_text' => 'je parlais / je parlerais', 'is_correct' => false],
                            ['choice_text' => 'j’ai parlé / je parlerai', 'is_correct' => false],
                        ],
                        'explanation' => '« Je parle » est au présent, « je parlerai » au futur simple (terminaison -ai).',
                    ],
                    [
                        'question' => 'Quelle phrase annonce un voyage de juillet au futur simple, et non au futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons voyager en juillet.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons voyagé en juillet.', 'is_correct' => false],
                            ['choice_text' => 'Nous voyagerons en juillet.', 'is_correct' => true],
                            ['choice_text' => 'Nous voyagions en juillet.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur simple s’écrit en un seul mot : « voyagerons ». « Allons voyager » est du futur proche.',
                    ],
                    [
                        'question' => 'Quel verbe complète « Quand tu seras prêt, tu ___ le travail. » au futur simple ?',
                        'choices' => [
                            ['choice_text' => 'commencera', 'is_correct' => false],
                            ['choice_text' => 'commencerai', 'is_correct' => false],
                            ['choice_text' => 'commenceras', 'is_correct' => true],
                            ['choice_text' => 'commencerez', 'is_correct' => false],
                        ],
                        'explanation' => '« Quand tu seras prêt » annonce l’avenir. Avec « tu », le futur simple prend -as : « commenceras ».',
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
                        'question' => 'Complétez : « Hier soir, nous ___ un film. »',
                        'choices' => [
                            ['choice_text' => 'sommes regardé', 'is_correct' => false],
                            ['choice_text' => 'avons regardé', 'is_correct' => true],
                            ['choice_text' => 'avons regarder', 'is_correct' => false],
                            ['choice_text' => 'avez regardé', 'is_correct' => false],
                        ],
                        'explanation' => 'Regarder se conjugue avec avoir au passé composé : « nous avons regardé ».',
                    ],
                    [
                        'question' => 'Quelle phrase raconte une visite terminée ?',
                        'choices' => [
                            ['choice_text' => 'Hier, nous visiterons le musée.', 'is_correct' => false],
                            ['choice_text' => 'Hier, nous avons visiter le musée.', 'is_correct' => false],
                            ['choice_text' => 'Hier, nous avons visité le musée.', 'is_correct' => true],
                            ['choice_text' => 'Hier, nous sommes visité le musée.', 'is_correct' => false],
                        ],
                        'explanation' => 'Visiter prend l’auxiliaire avoir et un participe en -é : « nous avons visité ».',
                    ],
                    [
                        'question' => 'Quel auxiliaire utilise-t-on dans « Elle ___ arrivée à huit heures » ?',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'avait', 'is_correct' => false],
                            ['choice_text' => 'est', 'is_correct' => true],
                            ['choice_text' => 'ont', 'is_correct' => false],
                        ],
                        'explanation' => 'Arriver se conjugue avec être au passé composé : « elle est arrivée ».',
                    ],
                    [
                        'question' => 'Samir annonce à sa mère qu’il a fini son travail. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’ai terminer mes devoirs.', 'is_correct' => false],
                            ['choice_text' => 'J’ai terminé mes devoirs.', 'is_correct' => true],
                            ['choice_text' => 'Je suis terminé mes devoirs.', 'is_correct' => false],
                            ['choice_text' => 'J’ai terminés mes devoirs.', 'is_correct' => false],
                        ],
                        'explanation' => 'Terminer se conjugue avec avoir, et le participe « terminé » ne s’accorde pas ici.',
                    ],
                    [
                        'question' => 'Yassine et Omar racontent : « Nous avons aller au cinéma samedi. » Quelle est la bonne correction ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons allé au cinéma samedi.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons allés au cinéma samedi.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes allés au cinéma samedi.', 'is_correct' => true],
                            ['choice_text' => 'Nous sommes aller au cinéma samedi.', 'is_correct' => false],
                        ],
                        'explanation' => 'Aller se conjugue avec être, et le participe s’accorde avec le sujet : « nous sommes allés ».',
                    ],
                    [
                        'question' => 'Quelle phrase est au passé composé ?',
                        'choices' => [
                            ['choice_text' => 'Elle fermera la porte.', 'is_correct' => false],
                            ['choice_text' => 'Elle fermait la porte.', 'is_correct' => false],
                            ['choice_text' => 'Elle ferme la porte.', 'is_correct' => false],
                            ['choice_text' => 'Elle a fermé la porte.', 'is_correct' => true],
                        ],
                        'explanation' => '« A fermé » associe avoir et un participe passé : c’est le passé composé, pour une action terminée.',
                    ],
                    [
                        'question' => 'Quel choix complète « Vous ___ le train ce matin » ?',
                        'choices' => [
                            ['choice_text' => 'avez pris', 'is_correct' => true],
                            ['choice_text' => 'avez prendre', 'is_correct' => false],
                            ['choice_text' => 'êtes pris', 'is_correct' => false],
                            ['choice_text' => 'avez prit', 'is_correct' => false],
                        ],
                        'explanation' => 'Prendre se conjugue avec avoir, et son participe passé est « pris ».',
                    ],
                    [
                        'question' => 'Quelle phrase raconte que des élèves ont choisi leur sujet d’exposé ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont choisi leur sujet.', 'is_correct' => false],
                            ['choice_text' => 'Ils ont choisir leur sujet.', 'is_correct' => false],
                            ['choice_text' => 'Ils ont choisis leur sujet.', 'is_correct' => false],
                            ['choice_text' => 'Ils ont choisi leur sujet.', 'is_correct' => true],
                        ],
                        'explanation' => 'Choisir prend avoir au passé composé, et le participe « choisi » reste invariable ici.',
                    ],
                    [
                        'question' => '« Marie est sortie à midi. » Que raconte cette phrase ?',
                        'choices' => [
                            ['choice_text' => 'Une habitude de Marie, chaque jour à midi.', 'is_correct' => false],
                            ['choice_text' => 'Une action terminée dans le passé.', 'is_correct' => true],
                            ['choice_text' => 'Une action qui se passe en ce moment.', 'is_correct' => false],
                            ['choice_text' => 'Un projet prévu pour midi.', 'is_correct' => false],
                        ],
                        'explanation' => '« Est sortie » est au passé composé : l’action est finie.',
                    ],
                    [
                        'question' => 'Quel participe passé complète correctement : « Nous avons ___ la réponse. »',
                        'choices' => [
                            ['choice_text' => 'trouver', 'is_correct' => false],
                            ['choice_text' => 'trouvés', 'is_correct' => false],
                            ['choice_text' => 'trouvée', 'is_correct' => false],
                            ['choice_text' => 'trouvé', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec avoir, le participe passé « trouvé » reste invariable quand le complément suit le verbe.',
                    ],
                    [
                        'question' => 'Dimanche dernier, toute la famille a fait le ménage. Quelle phrase le raconte ?',
                        'choices' => [
                            ['choice_text' => 'Dimanche dernier, nous avons nettoyé la maison.', 'is_correct' => true],
                            ['choice_text' => 'Dimanche dernier, nous nettoierons la maison.', 'is_correct' => false],
                            ['choice_text' => 'Dimanche dernier, nous avons nettoyer la maison.', 'is_correct' => false],
                            ['choice_text' => 'Dimanche dernier, nous sommes nettoyé la maison.', 'is_correct' => false],
                        ],
                        'explanation' => 'Nettoyer prend avoir au passé composé : « nous avons nettoyé ».',
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
                        'question' => 'Depuis qu’elle travaille à Rabat, elle ___ le bus à huit heures chaque jour.',
                        'choices' => [
                            ['choice_text' => 'a pris', 'is_correct' => false],
                            ['choice_text' => 'prendra', 'is_correct' => false],
                            ['choice_text' => 'prend', 'is_correct' => true],
                            ['choice_text' => 'prenait', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis qu’elle travaille » décrit la situation actuelle : l’habitude se dit au présent.',
                    ],
                    [
                        'question' => 'Hier, Nadia et moi, nous ___ au marché.',
                        'choices' => [
                            ['choice_text' => 'allons', 'is_correct' => false],
                            ['choice_text' => 'irons', 'is_correct' => false],
                            ['choice_text' => 'sommes allés', 'is_correct' => true],
                            ['choice_text' => 'avons allé', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier » demande le passé composé. Aller prend être : « nous sommes allés ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit une habitude et non une action unique ?',
                        'choices' => [
                            ['choice_text' => 'J’ai lu ce livre hier soir.', 'is_correct' => false],
                            ['choice_text' => 'Je lis souvent avant de dormir.', 'is_correct' => true],
                            ['choice_text' => 'Je lirai ce livre demain.', 'is_correct' => false],
                            ['choice_text' => 'Je vais lire ce livre ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Souvent » indique une répétition habituelle. Le présent est le temps naturel pour exprimer cette habitude.',
                    ],
                    [
                        'question' => 'Il est 14 h. Ce matin, Hamza ___ son examen d’arabe ; c’est fini.',
                        'choices' => [
                            ['choice_text' => 'a passé', 'is_correct' => true],
                            ['choice_text' => 'passe', 'is_correct' => false],
                            ['choice_text' => 'passera', 'is_correct' => false],
                            ['choice_text' => 'va passer', 'is_correct' => false],
                        ],
                        'explanation' => 'L’examen est terminé : on emploie le passé composé « a passé ».',
                    ],
                    [
                        'question' => 'Quel énoncé présente une routine actuelle ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons fait du sport hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous ferons du sport demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons faire du sport dans une heure.', 'is_correct' => false],
                            ['choice_text' => 'Nous faisons du sport trois fois par semaine.', 'is_correct' => true],
                        ],
                        'explanation' => '« Trois fois par semaine » indique une habitude actuelle. Le présent « nous faisons » correspond à cette routine.',
                    ],
                    [
                        'question' => 'Hind raconte un rendez-vous précis avec son professeur. Quelle phrase évoque une action terminée ?',
                        'choices' => [
                            ['choice_text' => 'J’ai écrit à mon professeur hier.', 'is_correct' => true],
                            ['choice_text' => 'J’écris à mon professeur chaque lundi.', 'is_correct' => false],
                            ['choice_text' => 'Je vais écrire à mon professeur ce soir.', 'is_correct' => false],
                            ['choice_text' => 'J’écrirai à mon professeur demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier » et « ai écrit » (passé composé) indiquent une action ponctuelle et terminée.',
                    ],
                    [
                        'question' => 'Ilyas écrit : « Hier, je mange chez ma tante. » Quelle est la bonne version ?',
                        'choices' => [
                            ['choice_text' => 'Hier, j’ai mangé chez ma tante.', 'is_correct' => true],
                            ['choice_text' => 'Hier, je mangerai chez ma tante.', 'is_correct' => false],
                            ['choice_text' => 'Hier, je vais manger chez ma tante.', 'is_correct' => false],
                            ['choice_text' => 'Hier, j’ai manger chez ma tante.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier » demande le passé composé : j’ai + participe en -é (« mangé »).',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour parler d’une habitude familiale actuelle ?',
                        'choices' => [
                            ['choice_text' => 'Nous voyez nos grands-parents chaque dimanche.', 'is_correct' => false],
                            ['choice_text' => 'Nous voyons nos grands-parents chaque dimanche.', 'is_correct' => true],
                            ['choice_text' => 'Nous voient nos grands-parents chaque dimanche.', 'is_correct' => false],
                            ['choice_text' => 'Nous voir nos grands-parents chaque dimanche.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une habitude de maintenant se dit au présent. Avec « nous », voir fait « voyons ».',
                    ],
                    [
                        'question' => 'Dans « Aujourd’hui, je travaille à la maison », que montre le présent ?',
                        'choices' => [
                            ['choice_text' => 'Une action terminée avant ce matin', 'is_correct' => false],
                            ['choice_text' => 'Une situation qui dure en ce moment', 'is_correct' => true],
                            ['choice_text' => 'Un projet pour la semaine prochaine', 'is_correct' => false],
                            ['choice_text' => 'Un souvenir d’enfance bien lointain', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent décrit ce qui se passe maintenant, et « aujourd’hui » situe l’action dans la journée en cours.',
                    ],
                    [
                        'question' => 'La semaine dernière, mes cousins ___ un nouvel appartement à Agadir.',
                        'choices' => [
                            ['choice_text' => 'trouvent', 'is_correct' => false],
                            ['choice_text' => 'trouveront', 'is_correct' => false],
                            ['choice_text' => 'vont trouver', 'is_correct' => false],
                            ['choice_text' => 'ont trouvé', 'is_correct' => true],
                        ],
                        'explanation' => '« La semaine dernière » place l’action dans le passé : « ont trouvé » (passé composé).',
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
                            ['choice_text' => 'jouerai', 'is_correct' => false],
                            ['choice_text' => 'joue', 'is_correct' => false],
                            ['choice_text' => 'jouais', 'is_correct' => true],
                            ['choice_text' => 'jouions', 'is_correct' => false],
                        ],
                        'explanation' => '« Quand j’étais enfant » annonce une habitude passée : imparfait, « je jouais ».',
                    ],
                    [
                        'question' => 'Hier soir, Sofia est rentrée tard. Quelle phrase décrit l’ambiance de la maison à ce moment-là ?',
                        'choices' => [
                            ['choice_text' => 'La maison sera très calme.', 'is_correct' => false],
                            ['choice_text' => 'La maison était très calme.', 'is_correct' => true],
                            ['choice_text' => 'La maison est très calme.', 'is_correct' => false],
                            ['choice_text' => 'La maison étaient très calme.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour décrire un décor passé, on prend l’imparfait : « était ».',
                    ],
                    [
                        'question' => 'Complétez : « Avant, nous ___ près de l’école. »',
                        'choices' => [
                            ['choice_text' => 'habitions', 'is_correct' => true],
                            ['choice_text' => 'habiterons', 'is_correct' => false],
                            ['choice_text' => 'habitons', 'is_correct' => false],
                            ['choice_text' => 'habitiez', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant » renvoie à une situation passée qui a duré. L’imparfait avec « nous » donne « habitions ».',
                    ],
                    [
                        'question' => 'Complétez : « Il y a dix ans, chaque été, nous ___ à la mer. »',
                        'choices' => [
                            ['choice_text' => 'allions', 'is_correct' => true],
                            ['choice_text' => 'irons', 'is_correct' => false],
                            ['choice_text' => 'allons', 'is_correct' => false],
                            ['choice_text' => 'alliez', 'is_correct' => false],
                        ],
                        'explanation' => 'Une habitude répétée dans le passé s’exprime à l’imparfait : « nous allions ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Pendant mon enfance, je joue beaucoup au football. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'Pendant mon enfance, je jouerai beaucoup au football.', 'is_correct' => false],
                            ['choice_text' => 'Pendant mon enfance, je jouais beaucoup au football.', 'is_correct' => true],
                            ['choice_text' => 'Pendant mon enfance, j’ai jouer beaucoup au football.', 'is_correct' => false],
                            ['choice_text' => 'Pendant mon enfance, je jouer beaucoup au football.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant mon enfance » renvoie à une période passée où l’action se répétait : on emploie l’imparfait, « je jouais ».',
                    ],
                    [
                        'question' => 'Quel choix complète : « À cette époque, elle ___ très timide. »',
                        'choices' => [
                            ['choice_text' => 'sera', 'is_correct' => false],
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'étais', 'is_correct' => false],
                            ['choice_text' => 'était', 'is_correct' => true],
                        ],
                        'explanation' => '« À cette époque » situe la description dans le passé. À l’imparfait, « elle était ».',
                    ],
                    [
                        'question' => 'Samir se souvient de son enfance à Ifrane. Quelle phrase décrit le temps de ses hivers d’enfant ?',
                        'choices' => [
                            ['choice_text' => 'À Ifrane, il fera très froid en hiver.', 'is_correct' => false],
                            ['choice_text' => 'À Ifrane, il faisions très froid en hiver.', 'is_correct' => false],
                            ['choice_text' => 'À Ifrane, il faisait très froid en hiver.', 'is_correct' => true],
                            ['choice_text' => 'À Ifrane, il fesait très froid en hiver.', 'is_correct' => false],
                        ],
                        'explanation' => 'On décrit le temps d’autrefois à l’imparfait, et « faisait » s’écrit avec ai.',
                    ],
                    [
                        'question' => 'Dans « Autrefois, mon père lisait le journal tous les soirs », quel temps exprime l’habitude passée ?',
                        'choices' => [
                            ['choice_text' => 'L’imparfait', 'is_correct' => true],
                            ['choice_text' => 'Le futur simple', 'is_correct' => false],
                            ['choice_text' => 'Le présent', 'is_correct' => false],
                            ['choice_text' => 'L’impératif', 'is_correct' => false],
                        ],
                        'explanation' => '« Lisais » est à l’imparfait, le temps des habitudes du passé.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement conjuguée à l’imparfait du verbe avoir ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons une petite maison.', 'is_correct' => false],
                            ['choice_text' => 'Nous aurons une petite maison.', 'is_correct' => false],
                            ['choice_text' => 'Nous aviez une petite maison.', 'is_correct' => false],
                            ['choice_text' => 'Nous avions une petite maison.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’imparfait de avoir avec « nous » est « avions ». « Aviez » va avec « vous ».',
                    ],
                    [
                        'question' => 'Aïcha décrit le village de son enfance. Quelle phrase est bien écrite ?',
                        'choices' => [
                            ['choice_text' => 'Le village était petit et les rues était calmes.', 'is_correct' => false],
                            ['choice_text' => 'Le village étaient petit et les rues étaient calmes.', 'is_correct' => false],
                            ['choice_text' => 'Le village été petit et les rues étaient calmes.', 'is_correct' => false],
                            ['choice_text' => 'Le village était petit et les rues étaient calmes.', 'is_correct' => true],
                        ],
                        'explanation' => '« Était » s’accorde avec un seul village, « étaient » avec plusieurs rues.',
                    ],
                    [
                        'question' => 'Dans « Nous faisions souvent une promenade après le dîner », que montre l’imparfait ?',
                        'choices' => [
                            ['choice_text' => 'Un événement précis arrivé une seule fois', 'is_correct' => false],
                            ['choice_text' => 'Une promesse pour le futur', 'is_correct' => false],
                            ['choice_text' => 'Une habitude qui se répétait dans le passé', 'is_correct' => true],
                            ['choice_text' => 'Une consigne donnée à un groupe', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « souvent », l’imparfait présente une action qui se répétait autrefois.',
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
                        'question' => 'Il est 15 h. Lamia est devant son ordinateur. « Maintenant, je ___ mon travail. »',
                        'choices' => [
                            ['choice_text' => 'ferai', 'is_correct' => false],
                            ['choice_text' => 'fais', 'is_correct' => true],
                            ['choice_text' => 'faisais', 'is_correct' => false],
                            ['choice_text' => 'faisons', 'is_correct' => false],
                        ],
                        'explanation' => '« Maintenant » désigne le moment présent : « je fais ».',
                    ],
                    [
                        'question' => '« Demain, nous ___ la lecture du roman. » Quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'avons fini', 'is_correct' => false],
                            ['choice_text' => 'finirons', 'is_correct' => true],
                            ['choice_text' => 'finirez', 'is_correct' => false],
                            ['choice_text' => 'finissaient', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » appelle le futur simple. Avec « nous », finir fait « finirons ».',
                    ],
                    [
                        'question' => '« Hier soir, elle ___ un livre pendant une heure. »',
                        'choices' => [
                            ['choice_text' => 'lit', 'is_correct' => false],
                            ['choice_text' => 'lira', 'is_correct' => false],
                            ['choice_text' => 'a lu', 'is_correct' => true],
                            ['choice_text' => 'va lire', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier soir » place l’action dans le passé : « elle a lu » (passé composé).',
                    ],
                    [
                        'question' => 'En ce moment, chaque week-end, mes cousins ___ leurs grands-parents.',
                        'choices' => [
                            ['choice_text' => 'appellent', 'is_correct' => true],
                            ['choice_text' => 'ont appelé', 'is_correct' => false],
                            ['choice_text' => 'appelleront', 'is_correct' => false],
                            ['choice_text' => 'appelaient', 'is_correct' => false],
                        ],
                        'explanation' => '« En ce moment » situe l’habitude dans le présent. Avec « ils », appeler fait « appellent ».',
                    ],
                    [
                        'question' => '« Pendant les vacances de notre enfance, nous ___ souvent dans ce jardin. » Quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'jouerons', 'is_correct' => false],
                            ['choice_text' => 'jouons', 'is_correct' => false],
                            ['choice_text' => 'jouiez', 'is_correct' => false],
                            ['choice_text' => 'jouions', 'is_correct' => true],
                        ],
                        'explanation' => 'Les vacances de l’enfance sont un souvenir : l’imparfait donne « nous jouions ».',
                    ],
                    [
                        'question' => 'Un ami te dit : « Samedi dernier, j’ai fini très tôt. » Quel temps est employé ?',
                        'choices' => [
                            ['choice_text' => 'L’imparfait', 'is_correct' => false],
                            ['choice_text' => 'Le futur proche', 'is_correct' => false],
                            ['choice_text' => 'Le passé composé', 'is_correct' => true],
                            ['choice_text' => 'Le présent', 'is_correct' => false],
                        ],
                        'explanation' => '« Ai fini » associe avoir au présent et un participe passé : c’est le passé composé.',
                    ],
                    [
                        'question' => 'Sur le tableau, on lit l’horaire de demain. Quelle phrase annonce le cours au futur simple ?',
                        'choices' => [
                            ['choice_text' => 'Demain, le cours commencera à neuf heures.', 'is_correct' => true],
                            ['choice_text' => 'Demain, le cours a commencé à neuf heures.', 'is_correct' => false],
                            ['choice_text' => 'Demain, le cours commencerai à neuf heures.', 'is_correct' => false],
                            ['choice_text' => 'Demain, le cours commencent à neuf heures.', 'is_correct' => false],
                        ],
                        'explanation' => '« Commencera » est le futur simple de commencer avec « il ». L’horaire de demain appartient à l’avenir.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit un état dans le passé et non une action ponctuelle ?',
                        'choices' => [
                            ['choice_text' => 'La salle a fermé à dix-huit heures.', 'is_correct' => false],
                            ['choice_text' => 'La salle fermera demain.', 'is_correct' => false],
                            ['choice_text' => 'La salle va ouvrir dans cinq minutes.', 'is_correct' => false],
                            ['choice_text' => 'La salle était silencieuse.', 'is_correct' => true],
                        ],
                        'explanation' => '« Était silencieuse » utilise l’imparfait pour décrire l’état d’une salle dans le passé.',
                    ],
                    [
                        'question' => 'Quelle phrase raconte un déménagement déjà fait ?',
                        'choices' => [
                            ['choice_text' => 'La semaine dernière, nous déménagerons.', 'is_correct' => false],
                            ['choice_text' => 'La semaine dernière, nous avons déménagé.', 'is_correct' => true],
                            ['choice_text' => 'La semaine dernière, nous avons déménager.', 'is_correct' => false],
                            ['choice_text' => 'La semaine dernière, nous déménageons.', 'is_correct' => false],
                        ],
                        'explanation' => '« La semaine dernière » appelle le passé composé : nous avons déménagé.',
                    ],
                    [
                        'question' => 'Quelle phrase associe correctement une habitude passée et l’imparfait ?',
                        'choices' => [
                            ['choice_text' => 'Avant, mon grand-père lisait le journal chaque matin.', 'is_correct' => true],
                            ['choice_text' => 'Avant, mon grand-père lira le journal chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Avant, mon grand-père lit le journal chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Avant, mon grand-père lisaient le journal chaque matin.', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant » renvoie au passé et « chaque matin » à une habitude : imparfait, « lisait ».',
                    ],
                    [
                        'question' => 'Hier, Yassine a pris le premier car pour Meknès. Quelle phrase raconte son départ ?',
                        'choices' => [
                            ['choice_text' => 'Hier, Yassine a parti à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Hier, Yassine est partir à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Hier, Yassine est parti à huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Hier, Yassine partira à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Partir se conjugue avec être au passé composé : « est parti ».',
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
                        'question' => 'Le professeur s’adresse à toute la classe : « ___ votre livre à la page 20. »',
                        'choices' => [
                            ['choice_text' => 'Ouvrez', 'is_correct' => true],
                            ['choice_text' => 'Ouvres', 'is_correct' => false],
                            ['choice_text' => 'Ouvrons', 'is_correct' => false],
                            ['choice_text' => 'Ouvriez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « votre » on parle à « vous » : l’impératif est « ouvrez ».',
                    ],
                    [
                        'question' => 'Ton ami Adam paraît épuisé. Quel conseil lui donnes-tu, en le tutoyant ?',
                        'choices' => [
                            ['choice_text' => 'Reposes-toi un peu.', 'is_correct' => false],
                            ['choice_text' => 'Reposez-toi un peu.', 'is_correct' => false],
                            ['choice_text' => 'Te repose un peu.', 'is_correct' => false],
                            ['choice_text' => 'Repose-toi un peu.', 'is_correct' => true],
                        ],
                        'explanation' => 'À l’impératif avec « tu », les verbes en -er perdent le -s : « repose-toi ».',
                    ],
                    [
                        'question' => 'Un panneau à l’entrée de la bibliothèque s’adresse aux visiteurs. Que peut-on y lire ?',
                        'choices' => [
                            ['choice_text' => 'Fermes la porte, s’il vous plaît.', 'is_correct' => false],
                            ['choice_text' => 'Fermons la porte, s’il vous plaît.', 'is_correct' => false],
                            ['choice_text' => 'Fermez la porte, s’il vous plaît.', 'is_correct' => true],
                            ['choice_text' => 'Fermait la porte, s’il vous plaît.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour demander poliment à des visiteurs, on emploie l’impératif en -ez : « fermez ».',
                    ],
                    [
                        'question' => 'Quelle forme correspond à l’impératif de « finir » avec « tu » ?',
                        'choices' => [
                            ['choice_text' => 'Fini', 'is_correct' => false],
                            ['choice_text' => 'Finit', 'is_correct' => false],
                            ['choice_text' => 'Finis', 'is_correct' => true],
                            ['choice_text' => 'Finir', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », finir garde son -s à l’impératif : « finis ».',
                    ],
                    [
                        'question' => 'Le chef d’équipe veut lancer le travail avec tout le groupe, lui compris. Que dit-il ?',
                        'choices' => [
                            ['choice_text' => 'Commencez !', 'is_correct' => false],
                            ['choice_text' => 'Commençons !', 'is_correct' => true],
                            ['choice_text' => 'Commence !', 'is_correct' => false],
                            ['choice_text' => 'Commencent !', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impératif en -ons invite tout le monde, celui qui parle compris : « commençons ».',
                    ],
                    [
                        'question' => 'Le médecin vouvoie sa patiente, Mme Tazi : « ___ beaucoup d’eau. »',
                        'choices' => [
                            ['choice_text' => 'Bois', 'is_correct' => false],
                            ['choice_text' => 'Buvez', 'is_correct' => true],
                            ['choice_text' => 'Buvons', 'is_correct' => false],
                            ['choice_text' => 'Buvait', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », l’impératif de boire est « buvez ».',
                    ],
                    [
                        'question' => 'À la bibliothèque, tu demandes à ton ami de baisser la voix. Quelle phrase utilises-tu ?',
                        'choices' => [
                            ['choice_text' => 'Ne parles pas si fort.', 'is_correct' => false],
                            ['choice_text' => 'Pas parle si fort.', 'is_correct' => false],
                            ['choice_text' => 'Ne parler pas si fort.', 'is_correct' => false],
                            ['choice_text' => 'Ne parle pas si fort.', 'is_correct' => true],
                        ],
                        'explanation' => 'À l’impératif négatif, « ne ... pas » encadre le verbe, qui perd son -s : « ne parle pas ».',
                    ],
                    [
                        'question' => 'Avant l’examen, la surveillante s’adresse à toute la salle. Quelle consigne donne-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Lis attentivement les questions.', 'is_correct' => false],
                            ['choice_text' => 'Lisons attentivement les questions.', 'is_correct' => false],
                            ['choice_text' => 'Lisez attentivement les questions.', 'is_correct' => true],
                            ['choice_text' => 'Lisent attentivement les questions.', 'is_correct' => false],
                        ],
                        'explanation' => 'La surveillante vouvoie la salle : l’impératif de lire est « lisez ».',
                    ],
                    [
                        'question' => 'Tu dis à un ami que tu tutoies de patienter. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Attend une minute.', 'is_correct' => false],
                            ['choice_text' => 'Attends une minute.', 'is_correct' => true],
                            ['choice_text' => 'Attendez une minute.', 'is_correct' => false],
                            ['choice_text' => 'Attends-toi une minute.', 'is_correct' => false],
                        ],
                        'explanation' => 'Attendre fait « attends » à l’impératif avec « tu », avec un -s.',
                    ],
                    [
                        'question' => 'Sara dit à son petit frère : « ___ sage pendant que je travaille ! »',
                        'choices' => [
                            ['choice_text' => 'Sois', 'is_correct' => true],
                            ['choice_text' => 'Es', 'is_correct' => false],
                            ['choice_text' => 'Soit', 'is_correct' => false],
                            ['choice_text' => 'Sera', 'is_correct' => false],
                        ],
                        'explanation' => 'Être a un impératif irrégulier : « sois » avec « tu ».',
                    ],
                    [
                        'question' => 'Tu vois ton petit frère s’approcher de l’escalier. Que lui cries-tu ? « ___ attention à la marche ! »',
                        'choices' => [
                            ['choice_text' => 'Fait', 'is_correct' => false],
                            ['choice_text' => 'Fasses', 'is_correct' => false],
                            ['choice_text' => 'Faisais', 'is_correct' => false],
                            ['choice_text' => 'Fais', 'is_correct' => true],
                        ],
                        'explanation' => 'Faire fait « fais » à l’impératif avec « tu ».',
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
                        'question' => 'Il est 8 h et Imane est dans le bus. « Aujourd’hui, je ___ à l’université. »',
                        'choices' => [
                            ['choice_text' => 'vas', 'is_correct' => false],
                            ['choice_text' => 'va', 'is_correct' => false],
                            ['choice_text' => 'vais', 'is_correct' => true],
                            ['choice_text' => 'allez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le présent de aller est « vais ».',
                    ],
                    [
                        'question' => '« Demain, nous ___ un nouveau chapitre. »',
                        'choices' => [
                            ['choice_text' => 'étudierons', 'is_correct' => true],
                            ['choice_text' => 'avons étudié', 'is_correct' => false],
                            ['choice_text' => 'étudierez', 'is_correct' => false],
                            ['choice_text' => 'étudiaient', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » appelle le futur simple : « nous étudierons ».',
                    ],
                    [
                        'question' => 'Hier, Zineb ___ son rapport avant midi ; il est maintenant sur le bureau du directeur.',
                        'choices' => [
                            ['choice_text' => 'termine', 'is_correct' => false],
                            ['choice_text' => 'a terminé', 'is_correct' => true],
                            ['choice_text' => 'terminera', 'is_correct' => false],
                            ['choice_text' => 'va terminer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport est fini depuis hier : passé composé, « a terminé ».',
                    ],
                    [
                        'question' => '« Au primaire, je ___ beaucoup de dessins. » Quelle forme convient ?',
                        'choices' => [
                            ['choice_text' => 'ferai', 'is_correct' => false],
                            ['choice_text' => 'fais', 'is_correct' => false],
                            ['choice_text' => 'faisons', 'is_correct' => false],
                            ['choice_text' => 'faisais', 'is_correct' => true],
                        ],
                        'explanation' => 'Le souvenir d’enfance appelle l’imparfait : « je faisais ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient un futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Nous commençons chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons commencer dans cinq minutes.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons commencé hier.', 'is_correct' => false],
                            ['choice_text' => 'Nous commencions souvent à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => '« Allons commencer » combine aller au présent et l’infinitif « commencer ». C’est le futur proche.',
                    ],
                    [
                        'question' => 'La maîtresse demande aux élèves de ranger leurs affaires. Quelle phrase leur donne une consigne directe ?',
                        'choices' => [
                            ['choice_text' => 'Fermez vos cahiers.', 'is_correct' => true],
                            ['choice_text' => 'Vous avez fermé vos cahiers.', 'is_correct' => false],
                            ['choice_text' => 'Vous fermiez vos cahiers.', 'is_correct' => false],
                            ['choice_text' => 'Ils ferment leurs cahiers.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impératif « fermez » donne un ordre direct, sans pronom sujet.',
                    ],
                    [
                        'question' => 'Hiba écrit : « La semaine prochaine, j’ai visité Chefchaouen. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'La semaine prochaine, je visitais Chefchaouen.', 'is_correct' => false],
                            ['choice_text' => 'La semaine prochaine, je suis visité Chefchaouen.', 'is_correct' => false],
                            ['choice_text' => 'La semaine prochaine, je visiter Chefchaouen.', 'is_correct' => false],
                            ['choice_text' => 'La semaine prochaine, je visiterai Chefchaouen.', 'is_correct' => true],
                        ],
                        'explanation' => '« La semaine prochaine » situe l’action dans le futur. Le futur simple donne « je visiterai ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une habitude passée ?',
                        'choices' => [
                            ['choice_text' => 'Avant, nous mangerons souvent ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Avant, nous mangions souvent ensemble.', 'is_correct' => true],
                            ['choice_text' => 'Avant, nous mangeons souvent ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Avant, nous mangiez souvent ensemble.', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant » et « souvent » décrivent une habitude passée : imparfait, « mangions ».',
                    ],
                    [
                        'question' => 'Karim raconte son week-end passé. Quelle phrase évoque un événement précis ?',
                        'choices' => [
                            ['choice_text' => 'Samedi dernier, je rencontrerai un ancien camarade.', 'is_correct' => false],
                            ['choice_text' => 'Samedi dernier, je rencontrais souvent un ancien camarade.', 'is_correct' => false],
                            ['choice_text' => 'Samedi dernier, j’ai rencontré un ancien camarade.', 'is_correct' => true],
                            ['choice_text' => 'Samedi dernier, j’ai rencontrer un ancien camarade.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un événement précis et terminé se raconte au passé composé : « j’ai rencontré ».',
                    ],
                    [
                        'question' => 'Ton ami Mehdi semble inquiet. Que lui dis-tu pour qu’il te parle ? « ___-moi ce qui se passe ! »',
                        'choices' => [
                            ['choice_text' => 'Dis', 'is_correct' => true],
                            ['choice_text' => 'Dit', 'is_correct' => false],
                            ['choice_text' => 'Dites', 'is_correct' => false],
                            ['choice_text' => 'Disons', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un ami que l’on tutoie, l’impératif de dire est « dis ».',
                    ],
                    [
                        'question' => 'Salma raconte sa journée : le travail est fini, mais la pause n’a pas encore eu lieu. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Je terminerai mon travail, puis j’ai fait une pause.', 'is_correct' => false],
                            ['choice_text' => 'J’ai terminé mon travail, puis je faisais une pause.', 'is_correct' => false],
                            ['choice_text' => 'Je termine mon travail, puis j’ai fait une pause.', 'is_correct' => false],
                            ['choice_text' => 'J’ai terminé mon travail, puis je ferai une pause.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le travail est terminé (passé composé) et la pause reste à venir (futur simple).',
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
