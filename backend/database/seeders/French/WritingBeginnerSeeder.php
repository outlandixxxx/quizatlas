<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'writing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Construire une phrase correcte',
                'description' => 'S\'entraîner à construire des phrases simples, complètes et grammaticalement correctes.',
                'duration' => 16,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est correctement écrite ?',
                        'choices' => [
                            ['choice_text' => 'Je regarde un film ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Je un film regarde ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Regarde je un film ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Un film je regarde ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase suit l\'ordre naturel sujet + verbe + complément : « Je regarde un film ce soir. »',
                    ],
                    [
                        'question' => 'Quelle phrase contient une majuscule et une ponctuation finales correctes ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons au marché.', 'is_correct' => true],
                            ['choice_text' => 'nous allons au marché', 'is_correct' => false],
                            ['choice_text' => 'Nous allons au marché', 'is_correct' => false],
                            ['choice_text' => 'nous allons au marché.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase écrite commence généralement par une majuscule et se termine ici par un point.',
                    ],
                    [
                        'question' => 'Quelle phrase est complète ?',
                        'choices' => [
                            ['choice_text' => 'Mon frère prépare le dîner.', 'is_correct' => true],
                            ['choice_text' => 'Prépare le dîner.', 'is_correct' => false],
                            ['choice_text' => 'Le dîner.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase complète contient un sujet, un verbe et un complément.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement écrite ?',
                        'choices' => [
                            ['choice_text' => 'Elle habite à Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Elle habite Rabat à.', 'is_correct' => false],
                            ['choice_text' => 'Elle à Rabat habite.', 'is_correct' => false],
                            ['choice_text' => 'Habite elle à Rabat.', 'is_correct' => false],
                        ],
                        'explanation' => 'La préposition « à » précède le nom de la ville : « habite à Rabat ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime clairement une idée complète ?',
                        'choices' => [
                            ['choice_text' => 'Aujourd\'hui, je reste à la maison.', 'is_correct' => true],
                            ['choice_text' => 'Aujourd\'hui, à la maison.', 'is_correct' => false],
                            ['choice_text' => 'Je reste aujourd\'hui maison.', 'is_correct' => false],
                            ['choice_text' => 'À la maison aujourd\'hui.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase possède un sujet, un verbe et un complément et exprime une idée complète.',
                    ],
                    [
                        'question' => 'Quelle formulation est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'J\'aime beaucoup lire le soir.', 'is_correct' => true],
                            ['choice_text' => 'J\'aime lire beaucoup le soir.', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup j\'aime lire le soir.', 'is_correct' => false],
                            ['choice_text' => 'J\'aime le soir lire beaucoup le.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans cette phrase, « beaucoup » se place naturellement après le verbe « aime ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Je ne comprends pas la question.', 'is_correct' => true],
                            ['choice_text' => 'Je ne pas comprends la question.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends ne pas la question.', 'is_correct' => false],
                            ['choice_text' => 'Je pas ne comprends la question.', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation simple encadre le verbe : « ne comprends pas ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement écrite au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Les enfants jouent dans le parc.', 'is_correct' => true],
                            ['choice_text' => 'Les enfant joue dans le parc.', 'is_correct' => false],
                            ['choice_text' => 'L\'enfants jouent dans le parc.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants joue dans le parc.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet pluriel « Les enfants » demande le verbe « jouent ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement organisée ?',
                        'choices' => [
                            ['choice_text' => 'Après le cours, je rentre chez moi.', 'is_correct' => true],
                            ['choice_text' => 'Après le cours, chez moi je rentre le.', 'is_correct' => false],
                            ['choice_text' => 'Je chez moi après le cours rentre.', 'is_correct' => false],
                            ['choice_text' => 'Rentre je chez moi après le cours.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le complément de temps peut être placé au début, suivi d\'une virgule, puis de la phrase principale.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le verbe « avoir » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons deux chiens.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons deux chien.', 'is_correct' => false],
                            ['choice_text' => 'Nous a deux chiens.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons deux chienss.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « nous » prend « avons » et le nom « chiens » est au pluriel.',
                    ],
                ],
            ],

            [
                'title' => 'Ponctuation et présentation',
                'description' => 'Utiliser correctement le point, la virgule, le point d\'interrogation et la majuscule dans de courts textes.',
                'duration' => 18,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel signe termine généralement une question ?',
                        'choices' => [
                            ['choice_text' => '?', 'is_correct' => true],
                            ['choice_text' => '.', 'is_correct' => false],
                            ['choice_text' => ',', 'is_correct' => false],
                            ['choice_text' => ':', 'is_correct' => false],
                        ],
                        'explanation' => 'Une question directe se termine généralement par un point d\'interrogation.',
                    ],
                    [
                        'question' => 'Quel signe termine cette phrase : « Quel âge as-tu___ » ?',
                        'choices' => [
                            ['choice_text' => '?', 'is_correct' => true],
                            ['choice_text' => '.', 'is_correct' => false],
                            ['choice_text' => ',', 'is_correct' => false],
                            ['choice_text' => ';', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase « Quel âge as-tu ? » est une question, donc elle prend un point d\'interrogation.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement ponctuée ?',
                        'choices' => [
                            ['choice_text' => 'Ce matin, je vais au marché.', 'is_correct' => true],
                            ['choice_text' => 'Ce matin je, vais au marché.', 'is_correct' => false],
                            ['choice_text' => 'Ce, matin je vais au marché.', 'is_correct' => false],
                            ['choice_text' => 'Ce matin je vais, au marché.', 'is_correct' => false],
                        ],
                        'explanation' => 'La virgule après « Ce matin » sépare le complément de temps placé au début.',
                    ],
                    [
                        'question' => 'Quelle phrase commence correctement ?',
                        'choices' => [
                            ['choice_text' => 'Demain, nous partirons tôt.', 'is_correct' => true],
                            ['choice_text' => 'demain, nous partirons tôt.', 'is_correct' => false],
                            ['choice_text' => 'Demain nous partirons tôt', 'is_correct' => false],
                            ['choice_text' => 'demain nous partirons tôt.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier mot d\'une phrase prend une majuscule et la phrase doit être correctement ponctuée.',
                    ],
                    [
                        'question' => 'Quelle ponctuation convient avant une explication introduite après une affirmation ?',
                        'choices' => [
                            ['choice_text' => ':', 'is_correct' => true],
                            ['choice_text' => '?', 'is_correct' => false],
                            ['choice_text' => '.', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux-points peuvent annoncer une explication ou une précision : « J\'ai compris : il faut partir. »',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement écrite ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour, comment allez-vous ?', 'is_correct' => true],
                            ['choice_text' => 'Bonjour comment, allez-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Bonjour comment allez-vous.', 'is_correct' => false],
                            ['choice_text' => 'bonjour, comment allez-vous ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour » est suivi d\'une virgule et la question se termine par un point d\'interrogation.',
                    ],
                    [
                        'question' => 'Quel signe convient après « Attention » dans un message très bref ?',
                        'choices' => [
                            ['choice_text' => '!', 'is_correct' => true],
                            ['choice_text' => '?', 'is_correct' => false],
                            ['choice_text' => ',', 'is_correct' => false],
                            ['choice_text' => ';', 'is_correct' => false],
                        ],
                        'explanation' => 'Le point d\'exclamation peut exprimer une alerte ou une consigne forte : « Attention ! »',
                    ],
                    [
                        'question' => 'Quelle phrase contient correctement une virgule entre deux éléments d\'une liste ?',
                        'choices' => [
                            ['choice_text' => 'J\'ai acheté du pain, du lait et des fruits.', 'is_correct' => true],
                            ['choice_text' => 'J\'ai acheté du pain du lait, et des fruits.', 'is_correct' => false],
                            ['choice_text' => 'J\'ai acheté, du pain du lait et des fruits.', 'is_correct' => false],
                            ['choice_text' => 'J\'ai acheté du pain du lait et, des fruits.', 'is_correct' => false],
                        ],
                        'explanation' => 'La virgule sépare ici les premiers éléments de la liste.',
                    ],
                    [
                        'question' => 'Quel signe utilise-t-on pour terminer une phrase déclarative simple ?',
                        'choices' => [
                            ['choice_text' => '.', 'is_correct' => true],
                            ['choice_text' => '?', 'is_correct' => false],
                            ['choice_text' => ':', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase déclarative simple se termine normalement par un point.',
                    ],
                    [
                        'question' => 'Quelle version est correctement présentée ?',
                        'choices' => [
                            ['choice_text' => 'Mon nom est Youssef. Je suis étudiant.', 'is_correct' => true],
                            ['choice_text' => 'Mon nom est Youssef je suis étudiant.', 'is_correct' => false],
                            ['choice_text' => 'mon nom est Youssef. Je suis étudiant.', 'is_correct' => false],
                            ['choice_text' => 'Mon nom est Youssef. je suis étudiant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque phrase commence par une majuscule et se termine par un point.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement les guillemets pour une parole rapportée ?',
                        'choices' => [
                            ['choice_text' => 'Elle dit : « Je suis prête. »', 'is_correct' => true],
                            ['choice_text' => 'Elle dit, « Je suis prête. »', 'is_correct' => false],
                            ['choice_text' => 'Elle dit « Je suis prête » :.', 'is_correct' => false],
                            ['choice_text' => 'Elle dit : Je suis « prête. »', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux-points peuvent introduire une parole rapportée, placée ensuite entre guillemets.',
                    ],
                ],
            ],

            [
                'title' => 'Écrire un petit paragraphe',
                'description' => 'Organiser plusieurs phrases autour d\'une idée simple et maintenir une progression logique.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel début convient le mieux à un paragraphe sur une routine quotidienne ?',
                        'choices' => [
                            ['choice_text' => 'Chaque matin, je me lève à sept heures.', 'is_correct' => true],
                            ['choice_text' => 'Le professeur de mathématiques.', 'is_correct' => false],
                            ['choice_text' => 'Parce que demain.', 'is_correct' => false],
                            ['choice_text' => 'Et ensuite peut-être.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase introduit clairement le thème du paragraphe : la routine du matin.',
                    ],
                    [
                        'question' => 'Quelle phrase peut logiquement suivre : « Je prends mon petit-déjeuner. » ?',
                        'choices' => [
                            ['choice_text' => 'Ensuite, je prépare mon sac.', 'is_correct' => true],
                            ['choice_text' => 'Hier était très loin.', 'is_correct' => false],
                            ['choice_text' => 'Mais une montagne.', 'is_correct' => false],
                            ['choice_text' => 'Le livre est bleu parce que.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ensuite » permet de montrer la progression chronologique de la routine.',
                    ],
                    [
                        'question' => 'Quel connecteur convient pour ajouter une idée ?',
                        'choices' => [
                            ['choice_text' => 'De plus', 'is_correct' => true],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Enfin', 'is_correct' => false],
                            ['choice_text' => 'Parce que', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » permet d\'ajouter une nouvelle information liée à la précédente.',
                    ],
                    [
                        'question' => 'Quel connecteur convient pour présenter la dernière étape ?',
                        'choices' => [
                            ['choice_text' => 'Enfin', 'is_correct' => true],
                            ['choice_text' => 'D\'abord', 'is_correct' => false],
                            ['choice_text' => 'Parce que', 'is_correct' => false],
                            ['choice_text' => 'Mais', 'is_correct' => false],
                        ],
                        'explanation' => '« Enfin » sert souvent à introduire la dernière étape d\'une série.',
                    ],
                    [
                        'question' => 'Quel ordre produit un paragraphe logique ?',
                        'choices' => [
                            ['choice_text' => 'Introduction de l’idée → détails → conclusion', 'is_correct' => true],
                            ['choice_text' => 'Conclusion → détails → introduction de l’idée', 'is_correct' => false],
                            ['choice_text' => 'Détails sans sujet → conclusion → titre', 'is_correct' => false],
                            ['choice_text' => 'Conclusion répétée → question → détail', 'is_correct' => false],
                        ],
                        'explanation' => 'Un petit paragraphe est plus facile à comprendre lorsqu\'il présente l\'idée, puis les détails, avant de terminer.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour conclure un petit paragraphe sur une promenade ?',
                        'choices' => [
                            ['choice_text' => 'J\'ai beaucoup aimé cette promenade.', 'is_correct' => true],
                            ['choice_text' => 'Mais la promenade parce que.', 'is_correct' => false],
                            ['choice_text' => 'D\'abord, demain matin.', 'is_correct' => false],
                            ['choice_text' => 'Le parc et puis.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase donne une impression finale et peut naturellement conclure le paragraphe.',
                    ],
                    [
                        'question' => 'Quel mot indique une première étape ?',
                        'choices' => [
                            ['choice_text' => 'D\'abord', 'is_correct' => true],
                            ['choice_text' => 'Enfin', 'is_correct' => false],
                            ['choice_text' => 'Pourtant', 'is_correct' => false],
                            ['choice_text' => 'Jamais', 'is_correct' => false],
                        ],
                        'explanation' => '« D\'abord » introduit généralement la première action ou le premier élément.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus cohérente après « Il pleut beaucoup aujourd\'hui. » ?',
                        'choices' => [
                            ['choice_text' => 'Je prends donc mon parapluie.', 'is_correct' => true],
                            ['choice_text' => 'Je prends un parapluie hier parce que.', 'is_correct' => false],
                            ['choice_text' => 'Mon parapluie et la pluie.', 'is_correct' => false],
                            ['choice_text' => 'Demain la table écrit.', 'is_correct' => false],
                        ],
                        'explanation' => '« Donc » relie logiquement la cause « il pleut » à la conséquence « je prends mon parapluie ».',
                    ],
                    [
                        'question' => 'Quel choix améliore la cohérence entre deux phrases ?',
                        'choices' => [
                            ['choice_text' => 'J\'aime le sport. En particulier, je joue au football.', 'is_correct' => true],
                            ['choice_text' => 'J\'aime le sport. Cependant, demain était une chaise.', 'is_correct' => false],
                            ['choice_text' => 'J\'aime le sport. Parce que table.', 'is_correct' => false],
                            ['choice_text' => 'J\'aime le sport. Enfin, hier sera bleu.', 'is_correct' => false],
                        ],
                        'explanation' => '« En particulier » précise l\'idée générale en donnant un exemple concret.',
                    ],
                    [
                        'question' => 'Quelle phrase apporte un exemple ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple, je lis des romans le week-end.', 'is_correct' => true],
                            ['choice_text' => 'Enfin, mais je lis des romans.', 'is_correct' => false],
                            ['choice_text' => 'Donc, hier était un roman.', 'is_correct' => false],
                            ['choice_text' => 'D\'abord, parce que le week-end.', 'is_correct' => false],
                        ],
                        'explanation' => '« Par exemple » introduit directement un cas concret qui illustre une idée.',
                    ],
                    [
                        'question' => 'Quel élément ne devrait normalement pas être répété plusieurs fois dans un petit paragraphe ?',
                        'choices' => [
                            ['choice_text' => 'La même idée sans nouvelle information', 'is_correct' => true],
                            ['choice_text' => 'Une information précise', 'is_correct' => false],
                            ['choice_text' => 'Un exemple utile', 'is_correct' => false],
                            ['choice_text' => 'Une conclusion courte', 'is_correct' => false],
                        ],
                        'explanation' => 'Répéter exactement la même idée sans apporter de nouvelle information rend le paragraphe moins clair et moins intéressant.',
                    ],
                    [
                        'question' => 'Quel paragraphe est le mieux organisé ?',
                        'choices' => [
                            ['choice_text' => 'Le week-end, je fais du sport. Le samedi, je joue au football avec mes amis. Le dimanche, je fais une promenade avec ma famille. J\'aime ces activités parce qu\'elles me permettent de me détendre.', 'is_correct' => true],
                            ['choice_text' => 'Je me détends. Le dimanche est une famille. Le football le samedi. Parce que le week-end.', 'is_correct' => false],
                            ['choice_text' => 'Le football. J\'aime le week-end. Une promenade. Et parce que demain.', 'is_correct' => false],
                            ['choice_text' => 'Dimanche samedi. Je fais parce que. Ma famille est sport. Le week-end.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier paragraphe présente le thème, donne des détails organisés et termine par une conclusion personnelle.',
                    ],
                ],
            ],

            [
                'title' => 'Messages personnels',
                'description' => 'Rédiger et choisir des formulations adaptées à des messages courts adressés à des proches ou à des amis.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle formule convient au début d\'un message à un ami ?',
                        'choices' => [
                            ['choice_text' => 'Salut Karim,', 'is_correct' => true],
                            ['choice_text' => 'Veuillez agréer, Karim.', 'is_correct' => false],
                            ['choice_text' => 'Objet : Candidature', 'is_correct' => false],
                            ['choice_text' => 'Madame, Monsieur,', 'is_correct' => false],
                        ],
                        'explanation' => '« Salut » est une formule informelle adaptée à un ami.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée pour proposer une sortie à un ami ?',
                        'choices' => [
                            ['choice_text' => 'Tu veux aller au cinéma samedi ?', 'is_correct' => true],
                            ['choice_text' => 'Je vous prie de venir au cinéma samedi.', 'is_correct' => false],
                            ['choice_text' => 'Objet : sortie cinéma obligatoire.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez recevoir ma sortie.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est naturelle, simple et adaptée à une communication informelle.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée pour s\'excuser auprès d\'un ami ?',
                        'choices' => [
                            ['choice_text' => 'Désolé, je ne pourrai pas venir ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Veuillez accepter ma candidature.', 'is_correct' => false],
                            ['choice_text' => 'Je joins mon CV à ce message.', 'is_correct' => false],
                            ['choice_text' => 'Madame, je vous adresse mes salutations.', 'is_correct' => false],
                        ],
                        'explanation' => '« Désolé » est une formule courante et naturelle dans un message personnel.',
                    ],
                    [
                        'question' => 'Quelle formule peut terminer un message à un ami ?',
                        'choices' => [
                            ['choice_text' => 'À bientôt !', 'is_correct' => true],
                            ['choice_text' => 'Veuillez agréer mes salutations distinguées.', 'is_correct' => false],
                            ['choice_text' => 'Objet : réunion.', 'is_correct' => false],
                            ['choice_text' => 'Pièce jointe : diplôme.', 'is_correct' => false],
                        ],
                        'explanation' => '« À bientôt ! » est une formule de fin naturelle pour un message informel.',
                    ],
                    [
                        'question' => 'Quelle phrase demande poliment une information à un proche ?',
                        'choices' => [
                            ['choice_text' => 'Tu peux me dire à quelle heure tu arrives ?', 'is_correct' => true],
                            ['choice_text' => 'Veuillez fournir immédiatement votre horaire professionnel.', 'is_correct' => false],
                            ['choice_text' => 'Je vous adresse mon CV pour information.', 'is_correct' => false],
                            ['choice_text' => 'Objet : arrivée obligatoire.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formulation est polie tout en restant naturelle dans un message personnel.',
                    ],
                    [
                        'question' => 'Quel message est le plus clair pour prévenir d\'un retard ?',
                        'choices' => [
                            ['choice_text' => 'Je serai un peu en retard. J\'arrive dans dix minutes.', 'is_correct' => true],
                            ['choice_text' => 'Retard. Dix minutes. Peut-être.', 'is_correct' => false],
                            ['choice_text' => 'Je retard arrive dix minutes en.', 'is_correct' => false],
                            ['choice_text' => 'Je serai retard mais dix minutes parce que.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le message donne clairement l\'information importante et précise la durée estimée du retard.',
                    ],
                    [
                        'question' => 'Quelle formulation est naturelle pour remercier un ami ?',
                        'choices' => [
                            ['choice_text' => 'Merci beaucoup pour ton aide !', 'is_correct' => true],
                            ['choice_text' => 'Je vous remercie de votre candidature.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez accepter mon aide distinguée.', 'is_correct' => false],
                            ['choice_text' => 'Objet : merci professionnel.', 'is_correct' => false],
                        ],
                        'explanation' => '« Merci beaucoup pour ton aide ! » est une formule simple et adaptée à un ami.',
                    ],
                    [
                        'question' => 'Quel message convient pour inviter un ami chez soi ?',
                        'choices' => [
                            ['choice_text' => 'Tu veux venir chez moi samedi après-midi ?', 'is_correct' => true],
                            ['choice_text' => 'Je vous convoque samedi après-midi.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez assister à mon domicile.', 'is_correct' => false],
                            ['choice_text' => 'Objet : domicile samedi.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tutoiement et la formulation simple conviennent à une invitation entre amis.',
                    ],
                    [
                        'question' => 'Quel message est le plus adapté pour demander un petit service à un proche ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que tu peux m\'envoyer le document, s\'il te plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Veuillez transmettre le document conformément aux procédures.', 'is_correct' => false],
                            ['choice_text' => 'Objet : document obligatoire.', 'is_correct' => false],
                            ['choice_text' => 'Conformément à la présente, je sollicite votre document officiel.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase est polie, simple et adaptée à une demande entre proches.',
                    ],
                    [
                        'question' => 'Quel message est le plus naturel pour demander des nouvelles ?',
                        'choices' => [
                            ['choice_text' => 'Salut ! Comment vas-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Madame, comment se porte votre dossier ?', 'is_correct' => false],
                            ['choice_text' => 'Veuillez fournir votre état personnel.', 'is_correct' => false],
                            ['choice_text' => 'Objet : nouvelles requises.', 'is_correct' => false],
                        ],
                        'explanation' => '« Salut ! Comment vas-tu ? » est une formule simple et naturelle entre proches.',
                    ],
                ],
            ],

            [
                'title' => 'Écrire un e-mail simple',
                'description' => 'Choisir les bonnes formules et organiser un e-mail court dans un contexte courant.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel élément indique généralement le sujet d\'un e-mail ?',
                        'choices' => [
                            ['choice_text' => 'L\'objet', 'is_correct' => true],
                            ['choice_text' => 'La signature uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pièce jointe', 'is_correct' => false],
                            ['choice_text' => 'Le mot de passe', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'objet résume brièvement le contenu ou le but de l\'e-mail.',
                    ],
                    [
                        'question' => 'Quelle formule convient pour commencer un e-mail professionnel simple adressé à une personne connue ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame,', 'is_correct' => true],
                            ['choice_text' => 'Salut mon pote,', 'is_correct' => false],
                            ['choice_text' => 'Coucou !!!', 'is_correct' => false],
                            ['choice_text' => 'Hey toi,', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour Madame, » est une formule polie et adaptée à un contexte professionnel.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander une information dans un e-mail professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me préciser l\'horaire, s\'il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Dis-moi vite l\'horaire.', 'is_correct' => false],
                            ['choice_text' => 'Tu dois me donner l\'horaire maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Horaire ? Envoie.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous... ? » est une formulation polie et adaptée à un e-mail professionnel.',
                    ],
                    [
                        'question' => 'Quelle formule peut terminer un e-mail professionnel simple ?',
                        'choices' => [
                            ['choice_text' => 'Cordialement,', 'is_correct' => true],
                            ['choice_text' => 'À plus mon ami,', 'is_correct' => false],
                            ['choice_text' => 'Bisous,', 'is_correct' => false],
                            ['choice_text' => 'Salut les gars,', 'is_correct' => false],
                        ],
                        'explanation' => '« Cordialement » est une formule de fin courante dans les e-mails professionnels.',
                    ],
                    [
                        'question' => 'Quel objet convient à un e-mail demandant un rendez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Demande de rendez-vous', 'is_correct' => true],
                            ['choice_text' => 'Bonjour', 'is_correct' => false],
                            ['choice_text' => 'Important important important', 'is_correct' => false],
                            ['choice_text' => 'Message', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'objet doit être bref et indiquer clairement le but du message.',
                    ],
                    [
                        'question' => 'Quelle phrase peut annoncer une pièce jointe ?',
                        'choices' => [
                            ['choice_text' => 'Vous trouverez le document en pièce jointe.', 'is_correct' => true],
                            ['choice_text' => 'Le document est attaché quelque part.', 'is_correct' => false],
                            ['choice_text' => 'Voici peut-être le document pièce.', 'is_correct' => false],
                            ['choice_text' => 'Pièce jointe document envoyer vous.', 'is_correct' => false],
                        ],
                        'explanation' => '« Vous trouverez le document en pièce jointe » est une formulation standard et claire.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour remercier poliment un destinataire ?',
                        'choices' => [
                            ['choice_text' => 'Je vous remercie pour votre réponse.', 'is_correct' => true],
                            ['choice_text' => 'Merci mec pour la réponse.', 'is_correct' => false],
                            ['choice_text' => 'Tu réponds enfin.', 'is_correct' => false],
                            ['choice_text' => 'Réponse merci toi.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom « vous » et la formulation complète conviennent à un contexte professionnel.',
                    ],
                    [
                        'question' => 'Quel ordre est le plus logique dans un e-mail simple ?',
                        'choices' => [
                            ['choice_text' => 'Salutation → raison du message → demande ou information → formule de fin', 'is_correct' => true],
                            ['choice_text' => 'Signature → objet → salutation → conclusion', 'is_correct' => false],
                            ['choice_text' => 'Demande → signature → salutation → objet', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → pièce jointe → salutation → raison du message', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette organisation permet au destinataire de comprendre rapidement qui écrit, pourquoi et ce qui est demandé.',
                    ],
                    [
                        'question' => 'Quel e-mail est le plus clair ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame,\nJe vous écris pour demander un rendez-vous mardi matin.\nMerci d\'avance pour votre réponse.\nCordialement,\nNadia', 'is_correct' => true],
                            ['choice_text' => 'Salut. Rendez-vous. Mardi. Répondre vite.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour Madame rendez-vous mardi moi Nadia merci.', 'is_correct' => false],
                            ['choice_text' => 'Mardi matin. Cordialement. Bonjour. Rendez-vous.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier e-mail contient une salutation, une demande précise, une formule de remerciement et une signature.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander une confirmation ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me confirmer l\'heure du rendez-vous ?', 'is_correct' => true],
                            ['choice_text' => 'Confirme l\'heure tout de suite.', 'is_correct' => false],
                            ['choice_text' => 'Tu confirmes ou non ?', 'is_correct' => false],
                            ['choice_text' => 'L\'heure confirmée peut-être.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous me confirmer... ? » est une manière polie et professionnelle de demander une confirmation.',
                    ],
                    [
                        'question' => 'Quelle formulation est la plus adaptée pour annoncer un retard professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Je vous informe que j\'aurai environ quinze minutes de retard.', 'is_correct' => true],
                            ['choice_text' => 'Je suis en retard, voilà.', 'is_correct' => false],
                            ['choice_text' => 'J\'arrive quand je peux.', 'is_correct' => false],
                            ['choice_text' => 'Retard quinze minutes peut-être.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est polie, précise et informe clairement le destinataire du retard prévu.',
                    ],
                    [
                        'question' => 'Quelle formule est adaptée pour terminer un e-mail formel adressé à une administration ?',
                        'choices' => [
                            ['choice_text' => 'Veuillez agréer, Madame, Monsieur, mes salutations distinguées.', 'is_correct' => true],
                            ['choice_text' => 'À bientôt !', 'is_correct' => false],
                            ['choice_text' => 'Bisous et merci !', 'is_correct' => false],
                            ['choice_text' => 'Salut, à plus.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formule appartient au registre formel et convient à certaines correspondances administratives.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus claire pour expliquer le but d\'un e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Je vous contacte afin d\'obtenir des informations sur votre formation.', 'is_correct' => true],
                            ['choice_text' => 'Je vous écris parce que formation.', 'is_correct' => false],
                            ['choice_text' => 'Formation. Informations. Merci.', 'is_correct' => false],
                            ['choice_text' => 'Je contact votre formation pour des choses.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase précise directement la raison de l\'e-mail.',
                    ],
                ],
            ],

            [
                'title' => 'Corriger un texte simple',
                'description' => 'Repérer des erreurs fréquentes de grammaire, d\'accord, de ponctuation et de formulation.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les enfants jouent dans le jardin.', 'is_correct' => true],
                            ['choice_text' => 'Les enfants joue dans le jardin.', 'is_correct' => false],
                            ['choice_text' => 'Les enfant jouent dans le jardin.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants joues dans le jardin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « les enfants » est au pluriel, donc le verbe doit être « jouent ».',
                    ],
                    [
                        'question' => 'Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ma sœur est contente.', 'is_correct' => true],
                            ['choice_text' => 'Ma sœur est content.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur sont contente.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur es contente.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ma sœur », on emploie « est » et l\'adjectif s\'accorde au féminin : « contente ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige correctement l\'orthographe ?',
                        'choices' => [
                            ['choice_text' => 'Aujourd\'hui, je vais travailler.', 'is_correct' => true],
                            ['choice_text' => 'Aujourd hui je vais travailler.', 'is_correct' => false],
                            ['choice_text' => 'Aujourdhui, je vais travailler.', 'is_correct' => false],
                            ['choice_text' => 'Aujourd\'hui je vais travaillé.', 'is_correct' => false],
                        ],
                        'explanation' => 'On écrit « aujourd\'hui » avec une apostrophe et « vais travailler » avec l\'infinitif.',
                    ],
                    [
                        'question' => 'Quelle phrase corrige correctement « Nous avons manger au restaurant » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons mangé au restaurant.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons manger au restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons mangées au restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons mange au restaurant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après l\'auxiliaire « avons », on utilise le participe passé : « mangé ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige correctement « Je ne comprends rien pas » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne comprends rien.', 'is_correct' => true],
                            ['choice_text' => 'Je ne rien comprends pas.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends rien ne.', 'is_correct' => false],
                            ['choice_text' => 'Je pas comprends rien ne.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « rien », la négation correcte est « ne comprends rien ».',
                    ],
                    [
                        'question' => 'Quelle correction est correcte pour la ponctuation ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour, comment allez-vous ?', 'is_correct' => true],
                            ['choice_text' => 'Bonjour comment allez-vous.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour, comment allez-vous.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour comment allez-vous ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La virgule sépare la formule d\'appel et la question se termine par un point d\'interrogation.',
                    ],
                    [
                        'question' => 'Quelle phrase corrige correctement « J\'aime les pomme » ?',
                        'choices' => [
                            ['choice_text' => 'J\'aime les pommes.', 'is_correct' => true],
                            ['choice_text' => 'J\'aime les pomme.', 'is_correct' => false],
                            ['choice_text' => 'J\'aime la pommes.', 'is_correct' => false],
                            ['choice_text' => 'J\'aime des pommes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « les », le nom « pommes » est au pluriel.',
                    ],
                    [
                        'question' => 'Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont arrivés à huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Ils sont arrivé à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils sont arrivées à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils ont arrivés à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec l\'auxiliaire « être », le participe passé s\'accorde avec le sujet : « arrivés ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige correctement « Elle va au école » ?',
                        'choices' => [
                            ['choice_text' => 'Elle va à l\'école.', 'is_correct' => true],
                            ['choice_text' => 'Elle va au école.', 'is_correct' => false],
                            ['choice_text' => 'Elle va à le école.', 'is_correct' => false],
                            ['choice_text' => 'Elle va en l\'école.', 'is_correct' => false],
                        ],
                        'explanation' => '« À + l\'école » devient « à l\'école » puisque « école » commence par une voyelle.',
                    ],
                    [
                        'question' => 'Quelle phrase est la mieux corrigée ?',
                        'choices' => [
                            ['choice_text' => 'Mon frère et moi allons au cinéma ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Mon frère et moi va au cinéma ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère et moi allons le cinéma ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère et moi aller au cinéma ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet composé « Mon frère et moi » est au pluriel, donc on utilise « allons ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige correctement l\'erreur dans « Il sont très fatigué » ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont très fatigués.', 'is_correct' => true],
                            ['choice_text' => 'Il est très fatigués.', 'is_correct' => false],
                            ['choice_text' => 'Ils sont très fatigué.', 'is_correct' => false],
                            ['choice_text' => 'Il sont très fatigués.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est « ils », le verbe est « sont » et l\'adjectif « fatigués » est au pluriel.',
                    ],
                ],
            ],

            [
                'title' => 'Choisir le bon registre',
                'description' => 'Adapter une production écrite à une situation informelle, neutre ou professionnelle.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle formule convient à un ami ?',
                        'choices' => [
                            ['choice_text' => 'Salut !', 'is_correct' => true],
                            ['choice_text' => 'Madame, Monsieur,', 'is_correct' => false],
                            ['choice_text' => 'Veuillez agréer mes salutations distinguées.', 'is_correct' => false],
                            ['choice_text' => 'Je vous prie de recevoir mes salutations.', 'is_correct' => false],
                        ],
                        'explanation' => '« Salut ! » appartient au registre informel et convient à un ami ou à une personne proche.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée à un e-mail professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Je souhaiterais obtenir quelques informations sur votre formation.', 'is_correct' => true],
                            ['choice_text' => 'Salut, donne-moi les infos.', 'is_correct' => false],
                            ['choice_text' => 'Hey, c\'est quoi votre formation ?', 'is_correct' => false],
                            ['choice_text' => 'Envoie-moi ça vite.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est polie, précise et adaptée à un contexte professionnel.',
                    ],
                    [
                        'question' => 'Quel message est trop informel pour une demande à une administration ?',
                        'choices' => [
                            ['choice_text' => 'Salut, vous pouvez me donner le document ?', 'is_correct' => true],
                            ['choice_text' => 'Bonjour Madame, pourriez-vous me transmettre le document demandé ?', 'is_correct' => false],
                            ['choice_text' => 'Je vous remercie pour votre aide.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez trouver ci-joint le document demandé.', 'is_correct' => false],
                        ],
                        'explanation' => '« Salut » et « vous pouvez me donner » sont trop familiers pour la plupart des démarches administratives.',
                    ],
                    [
                        'question' => 'Quelle formule convient pour une lettre formelle ?',
                        'choices' => [
                            ['choice_text' => 'Madame, Monsieur,', 'is_correct' => true],
                            ['choice_text' => 'Coucou !', 'is_correct' => false],
                            ['choice_text' => 'Salut tout le monde,', 'is_correct' => false],
                            ['choice_text' => 'Hey,', 'is_correct' => false],
                        ],
                        'explanation' => '« Madame, Monsieur, » est une formule d\'appel formelle lorsqu\'on ne connaît pas précisément le destinataire.',
                    ],
                    [
                        'question' => 'Quelle formulation est la plus polie pour demander un service à une personne que vous ne connaissez pas ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous m\'indiquer le chemin, s\'il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Dis-moi où c\'est.', 'is_correct' => false],
                            ['choice_text' => 'Tu me montres le chemin.', 'is_correct' => false],
                            ['choice_text' => 'Donne-moi l\'adresse.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous... s\'il vous plaît ? » convient à une demande polie adressée à une personne inconnue.',
                    ],
                    [
                        'question' => 'Quelle phrase convient davantage à un ami qu\'à un employeur ?',
                        'choices' => [
                            ['choice_text' => 'On se voit ce soir ?', 'is_correct' => true],
                            ['choice_text' => 'Pourriez-vous confirmer le rendez-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Je vous remercie pour votre réponse.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez trouver le document en pièce jointe.', 'is_correct' => false],
                        ],
                        'explanation' => '« On se voit ce soir ? » est une formulation courante dans une communication personnelle.',
                    ],
                    [
                        'question' => 'Quelle formule convient mieux dans un contexte professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Je vous remercie pour votre retour.', 'is_correct' => true],
                            ['choice_text' => 'Merci mec pour ta réponse.', 'is_correct' => false],
                            ['choice_text' => 'Super, à plus !', 'is_correct' => false],
                            ['choice_text' => 'Merci, bisous.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule « Je vous remercie pour votre retour » appartient à un registre professionnel.',
                    ],
                    [
                        'question' => 'Quel texte convient le mieux à un message adressé à un professeur ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame, je voudrais savoir si le devoir doit être rendu demain.', 'is_correct' => true],
                            ['choice_text' => 'Salut, le devoir c\'est demain ou pas ?', 'is_correct' => false],
                            ['choice_text' => 'Hey, tu sais pour le devoir ?', 'is_correct' => false],
                            ['choice_text' => 'Dis-moi vite pour le devoir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier message reste poli et adapté à la relation entre étudiant et professeur.',
                    ],
                    [
                        'question' => 'Quel mot appartient au registre le plus formel ?',
                        'choices' => [
                            ['choice_text' => 'Veuillez', 'is_correct' => true],
                            ['choice_text' => 'Coucou', 'is_correct' => false],
                            ['choice_text' => 'Salut', 'is_correct' => false],
                            ['choice_text' => 'Pote', 'is_correct' => false],
                        ],
                        'explanation' => '« Veuillez » est fréquent dans les demandes et courriers formels.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus neutre et adaptée à une communication professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Je vous informe que la réunion commencera à neuf heures.', 'is_correct' => true],
                            ['choice_text' => 'La réunion, elle commence à neuf heures, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Salut, la réunion c\'est à neuf heures.', 'is_correct' => false],
                            ['choice_text' => 'Réunion neuf heures, compris ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est claire, complète et adaptée à un contexte professionnel.',
                    ],
                ],
            ],

            [
                'title' => 'Révision de production écrite',
                'description' => 'Réviser les compétences essentielles de l\'écriture débutante : clarté, organisation, correction et adaptation au contexte.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase constitue le meilleur début pour une présentation personnelle ?',
                        'choices' => [
                            ['choice_text' => 'Je m\'appelle Sara et j\'habite à Casablanca.', 'is_correct' => true],
                            ['choice_text' => 'Casablanca et Sara parce que.', 'is_correct' => false],
                            ['choice_text' => 'Je m\'appelle et habite.', 'is_correct' => false],
                            ['choice_text' => 'Sara.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase donne immédiatement deux informations personnelles claires : le nom et le lieu de résidence.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus précise ?',
                        'choices' => [
                            ['choice_text' => 'Je vais au marché samedi matin pour acheter des fruits.', 'is_correct' => true],
                            ['choice_text' => 'Je vais là-bas pour quelque chose.', 'is_correct' => false],
                            ['choice_text' => 'Je vais samedi pour faire.', 'is_correct' => false],
                            ['choice_text' => 'Marché samedi fruits.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase précise le lieu, le moment et le but de l\'action.',
                    ],
                    [
                        'question' => 'Quel élément améliore le plus la clarté d\'un texte ?',
                        'choices' => [
                            ['choice_text' => 'Des phrases organisées et des informations précises', 'is_correct' => true],
                            ['choice_text' => 'Des mots très compliqués dans chaque phrase', 'is_correct' => false],
                            ['choice_text' => 'La répétition de la même phrase', 'is_correct' => false],
                            ['choice_text' => 'L\'absence de ponctuation', 'is_correct' => false],
                        ],
                        'explanation' => 'Un texte clair repose sur une organisation logique et des informations compréhensibles.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour introduire une raison ?',
                        'choices' => [
                            ['choice_text' => 'Je reste à la maison parce qu\'il pleut.', 'is_correct' => true],
                            ['choice_text' => 'Je reste à la maison et parce qu\'il pleut.', 'is_correct' => false],
                            ['choice_text' => 'Je reste à la maison donc parce qu\'il pleut.', 'is_correct' => false],
                            ['choice_text' => 'Je reste à la maison ou parce qu\'il pleut.', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » introduit directement la cause ou la raison.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour exprimer une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Il est tard, donc je vais dormir.', 'is_correct' => true],
                            ['choice_text' => 'Il est tard, parce que je vais dormir.', 'is_correct' => false],
                            ['choice_text' => 'Il est tard, mais je vais dormir.', 'is_correct' => false],
                            ['choice_text' => 'Il est tard, ou je vais dormir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Donc » introduit ici la conséquence du fait qu\'il est tard.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus adaptée à un petit récit au passé ?',
                        'choices' => [
                            ['choice_text' => 'Hier, je suis allé au parc avec mes amis.', 'is_correct' => true],
                            ['choice_text' => 'Hier, je aller au parc avec mes amis.', 'is_correct' => false],
                            ['choice_text' => 'Hier, je suis aller au parc avec mes amis.', 'is_correct' => false],
                            ['choice_text' => 'Hier, moi parc amis aller.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase utilise correctement le passé composé : « je suis allé ».',
                    ],
                    [
                        'question' => 'Quel élément est important dans un message court ?',
                        'choices' => [
                            ['choice_text' => 'Dire clairement pourquoi on écrit', 'is_correct' => true],
                            ['choice_text' => 'Ajouter beaucoup de phrases sans rapport', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute ponctuation', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement des abréviations', 'is_correct' => false],
                        ],
                        'explanation' => 'Même dans un message court, le destinataire doit comprendre rapidement le but du message.',
                    ],
                    [
                        'question' => 'Quelle formulation convient pour proposer une activité ?',
                        'choices' => [
                            ['choice_text' => 'On pourrait aller au parc dimanche.', 'is_correct' => true],
                            ['choice_text' => 'On parc dimanche aller pourrait.', 'is_correct' => false],
                            ['choice_text' => 'Aller parc dimanche on.', 'is_correct' => false],
                            ['choice_text' => 'Dimanche pourrait au parc aller le.', 'is_correct' => false],
                        ],
                        'explanation' => '« On pourrait aller au parc dimanche » est une proposition naturelle et correctement construite.',
                    ],
                    [
                        'question' => 'Quelle phrase montre clairement une préférence ?',
                        'choices' => [
                            ['choice_text' => 'Je préfère le thé au café.', 'is_correct' => true],
                            ['choice_text' => 'Je préfère thé café le au.', 'is_correct' => false],
                            ['choice_text' => 'Le thé préfère je au café.', 'is_correct' => false],
                            ['choice_text' => 'Je au café préfère thé.', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction « préférer quelque chose à quelque chose d\'autre » exprime une préférence.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir de conclusion à un texte personnel ?',
                        'choices' => [
                            ['choice_text' => 'Pour toutes ces raisons, je pense que cette activité est très intéressante.', 'is_correct' => true],
                            ['choice_text' => 'D\'abord, pour toutes ces raisons, demain.', 'is_correct' => false],
                            ['choice_text' => 'Cette activité parce que et.', 'is_correct' => false],
                            ['choice_text' => 'Conclusion sans information.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase résume l\'opinion de l\'auteur et convient comme conclusion.',
                    ],
                    [
                        'question' => 'Quelle version est la plus claire pour raconter une suite d\'actions ?',
                        'choices' => [
                            ['choice_text' => 'D\'abord, j\'ai pris le bus. Ensuite, je suis arrivé au centre-ville. Enfin, j\'ai rejoint mes amis.', 'is_correct' => true],
                            ['choice_text' => 'J\'ai rejoint mes amis. D\'abord le bus. Enfin ensuite centre-ville.', 'is_correct' => false],
                            ['choice_text' => 'Bus centre-ville amis. Et puis enfin.', 'is_correct' => false],
                            ['choice_text' => 'Ensuite, d\'abord, enfin, j\'ai pris mes amis.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les connecteurs « d\'abord », « ensuite » et « enfin » rendent la chronologie très claire.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour donner un exemple dans un texte ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple, je lis souvent avant de dormir.', 'is_correct' => true],
                            ['choice_text' => 'Exemple parce que je lis.', 'is_correct' => false],
                            ['choice_text' => 'Je lis donc exemple avant.', 'is_correct' => false],
                            ['choice_text' => 'Avant de dormir par.', 'is_correct' => false],
                        ],
                        'explanation' => '« Par exemple » introduit naturellement une illustration concrète.',
                    ],
                    [
                        'question' => 'Quel principe est important dans une production écrite de niveau débutant ?',
                        'choices' => [
                            ['choice_text' => 'Écrire des phrases simples mais claires et correctes', 'is_correct' => true],
                            ['choice_text' => 'Utiliser des phrases très longues même si elles sont incorrectes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute ponctuation', 'is_correct' => false],
                            ['choice_text' => 'Changer de sujet à chaque phrase', 'is_correct' => false],
                        ],
                        'explanation' => 'À ce niveau, des phrases simples, correctes et compréhensibles permettent de construire une production solide.',
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
