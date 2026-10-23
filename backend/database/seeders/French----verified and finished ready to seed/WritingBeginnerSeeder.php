<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'french')->firstOrFail()->id)->where('name', 'Writing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Construire une phrase correcte',
                'description' => 'S’entraîner à construire des phrases simples, complètes et grammaticalement correctes.',
                'duration' => 16,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Karim raconte sa soirée. Quelle phrase suit l’ordre sujet + verbe + complément ?',
                        'choices' => [
                            ['choice_text' => 'Je un film regarde ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Regarde je un film ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Je regarde un film ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Je ce soir regarde un film.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, la phrase simple suit l’ordre sujet + verbe + complément : « Je regarde un film ce soir. »',
                    ],
                    [
                        'question' => 'Sofia envoie une phrase à son professeur. Laquelle a une majuscule au début et un point à la fin ?',
                        'choices' => [
                            ['choice_text' => 'nous allons au marché', 'is_correct' => false],
                            ['choice_text' => 'Nous allons au marché.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons au marché', 'is_correct' => false],
                            ['choice_text' => 'nous allons au marché.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase commence par une majuscule et, ici, se termine par un point.',
                    ],
                    [
                        'question' => 'Yasmine doit écrire une phrase complète. Laquelle choisit-elle ?',
                        'choices' => [
                            ['choice_text' => 'Le dîner pour la famille.', 'is_correct' => false],
                            ['choice_text' => 'Le dîner de mon frère et de ma sœur.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère prépare le dîner.', 'is_correct' => true],
                            ['choice_text' => 'Mon frère et ma sœur ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut un sujet (« mon frère »), un verbe (« prépare ») et un complément (« le dîner »). Les autres choix n’ont pas de verbe.',
                    ],
                    [
                        'question' => 'Salma vit à Rabat. Quelle phrase le dit correctement ?',
                        'choices' => [
                            ['choice_text' => 'Elle habite Rabat à.', 'is_correct' => false],
                            ['choice_text' => 'Elle à Rabat habite.', 'is_correct' => false],
                            ['choice_text' => 'Habite elle à Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Elle habite à Rabat.', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant le nom d’une ville, on met la préposition « à » : « habite à Rabat ».',
                    ],
                    [
                        'question' => 'Hamza veut dire qu’il ne sort pas aujourd’hui. Quelle phrase exprime une idée complète ?',
                        'choices' => [
                            ['choice_text' => 'Aujourd’hui, je reste à la maison.', 'is_correct' => true],
                            ['choice_text' => 'Aujourd’hui, à la maison.', 'is_correct' => false],
                            ['choice_text' => 'Je reste aujourd’hui maison.', 'is_correct' => false],
                            ['choice_text' => 'À la maison aujourd’hui.', 'is_correct' => false],
                        ],
                        'explanation' => 'Seule cette phrase a un sujet (« je »), un verbe (« reste ») et un lieu (« à la maison »). Les autres sont incomplètes ou mal ordonnées.',
                    ],
                    [
                        'question' => 'Samir veut dire qu’il apprécie la lecture du soir. Quelle phrase place bien « beaucoup » ?',
                        'choices' => [
                            ['choice_text' => 'J’aime beaucoup lire le soir.', 'is_correct' => true],
                            ['choice_text' => 'J’aime très lire le soir.', 'is_correct' => false],
                            ['choice_text' => 'Je beaucoup aime lire le soir.', 'is_correct' => false],
                            ['choice_text' => 'J’aime le soir beaucoup lire.', 'is_correct' => false],
                        ],
                        'explanation' => '« Beaucoup » se place juste après le verbe conjugué : « j’aime beaucoup ». On ne dit pas « aimer très ».',
                    ],
                    [
                        'question' => 'Le professeur pose une question et Amine n’a pas compris. Que dit-il ?',
                        'choices' => [
                            ['choice_text' => 'Je ne pas comprends la question.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends ne pas la question.', 'is_correct' => false],
                            ['choice_text' => 'Je ne comprends pas la question.', 'is_correct' => true],
                            ['choice_text' => 'Je pas comprends la question.', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation encadre le verbe conjugué : « ne comprends pas ».',
                    ],
                    [
                        'question' => 'Quatre enfants jouent ensemble au parc. Quelle phrase est bien accordée ?',
                        'choices' => [
                            ['choice_text' => 'Les enfant joue dans le parc.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants jouent dans le parc.', 'is_correct' => true],
                            ['choice_text' => 'L’enfants jouent dans le parc.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants joue dans le parc.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « les enfants » est au pluriel, donc le verbe prend la forme « jouent ».',
                    ],
                    [
                        'question' => 'Hicham raconte ce qu’il fait à la sortie de l’école. Quelle phrase est bien construite ?',
                        'choices' => [
                            ['choice_text' => 'Après le cours, je rentre chez moi.', 'is_correct' => true],
                            ['choice_text' => 'Après le cours, rentre je chez moi.', 'is_correct' => false],
                            ['choice_text' => 'Après le cours, je rentre moi chez.', 'is_correct' => false],
                            ['choice_text' => 'Je chez moi rentre après le cours.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le complément de temps ouvre la phrase, une virgule le sépare du reste, puis vient « sujet + verbe + lieu ».',
                    ],
                    [
                        'question' => 'Rita parle des animaux de sa famille. Quelle phrase utilise bien le verbe « avoir » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons deux chien.', 'is_correct' => false],
                            ['choice_text' => 'Nous a deux chiens.', 'is_correct' => false],
                            ['choice_text' => 'Nous avez deux chiens.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons deux chiens.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « nous », le verbe « avoir » devient « avons », et « deux » demande « chiens » au pluriel.',
                    ],
                ],
            ],
            [
                'title' => 'Ponctuation et présentation',
                'description' => 'Utiliser correctement le point, la virgule, le point d’interrogation et la majuscule dans de courts textes.',
                'duration' => 18,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel signe manque dans « J_ai faim. » ?',
                        'choices' => [
                            ['choice_text' => 'Un trait d’union', 'is_correct' => false],
                            ['choice_text' => 'Une virgule', 'is_correct' => false],
                            ['choice_text' => 'Une apostrophe', 'is_correct' => true],
                            ['choice_text' => 'Un point d’exclamation', 'is_correct' => false],
                        ],
                        'explanation' => '« Je » devant « ai » devient « j’ » : l’apostrophe remplace la voyelle supprimée.',
                    ],
                    [
                        'question' => 'Quel signe termine cette phrase : « Quel âge as-tu___ » ?',
                        'choices' => [
                            ['choice_text' => '.', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => ':', 'is_correct' => false],
                            ['choice_text' => '?', 'is_correct' => true],
                        ],
                        'explanation' => '« Quel âge as-tu ? » pose une question, donc elle se termine par un point d’interrogation.',
                    ],
                    [
                        'question' => 'Dans son carnet, Imane note qu’elle ira au marché. Quelle phrase est bien ponctuée ?',
                        'choices' => [
                            ['choice_text' => 'Ce matin je, vais au marché.', 'is_correct' => false],
                            ['choice_text' => 'Ce, matin je vais au marché.', 'is_correct' => false],
                            ['choice_text' => 'Ce matin je vais, au marché.', 'is_correct' => false],
                            ['choice_text' => 'Ce matin, je vais au marché.', 'is_correct' => true],
                        ],
                        'explanation' => 'La virgule sépare « Ce matin », le complément de temps placé au début de la phrase.',
                    ],
                    [
                        'question' => 'Youssef annonce le départ du voyage. Quelle phrase est écrite sans erreur ?',
                        'choices' => [
                            ['choice_text' => 'demain, nous partirons tôt.', 'is_correct' => false],
                            ['choice_text' => 'Demain, nous partirons tôt.', 'is_correct' => true],
                            ['choice_text' => 'Demain nous partirons tôt', 'is_correct' => false],
                            ['choice_text' => 'demain nous partirons tôt.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle a une majuscule au début, une virgule après « Demain » et un point à la fin.',
                    ],
                    [
                        'question' => 'Quel signe annonce la liste dans « Il me manque trois choses___ du pain, du lait et des œufs » ?',
                        'choices' => [
                            ['choice_text' => ':', 'is_correct' => true],
                            ['choice_text' => '?', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => '.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux-points annoncent une liste ou une explication : « Il me manque trois choses : du pain… »',
                    ],
                    [
                        'question' => 'Vous croisez votre voisine, Mme Alaoui, et vous la saluez. Quelle phrase est bien écrite ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour comment, allez-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Bonjour comment allez-vous.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour, comment allez-vous ?', 'is_correct' => true],
                            ['choice_text' => 'bonjour, comment allez-vous ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour » est suivi d’une virgule, la phrase commence par une majuscule et la question finit par « ? ».',
                    ],
                    [
                        'question' => 'Sur une affiche, on écrit « Attention___ » pour avertir d’un danger. Quel signe termine le mot ?',
                        'choices' => [
                            ['choice_text' => '?', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => true],
                            ['choice_text' => ',', 'is_correct' => false],
                            ['choice_text' => ';', 'is_correct' => false],
                        ],
                        'explanation' => 'Le point d’exclamation marque une alerte : « Attention ! »',
                    ],
                    [
                        'question' => 'Ali écrit sa liste de courses. Quelle phrase met bien la virgule dans l’énumération ?',
                        'choices' => [
                            ['choice_text' => 'J’ai acheté du pain du lait, et des fruits.', 'is_correct' => false],
                            ['choice_text' => 'J’ai acheté du pain, du lait et des fruits.', 'is_correct' => true],
                            ['choice_text' => 'J’ai acheté, du pain du lait et des fruits.', 'is_correct' => false],
                            ['choice_text' => 'J’ai acheté du pain du lait et, des fruits.', 'is_correct' => false],
                        ],
                        'explanation' => 'La virgule sépare les deux premiers éléments, et « et » relie les deux derniers.',
                    ],
                    [
                        'question' => 'Zineb écrit une phrase qui donne une simple information : « Il fait beau aujourd’hui___ ». Quel signe la termine ?',
                        'choices' => [
                            ['choice_text' => '?', 'is_correct' => false],
                            ['choice_text' => ':', 'is_correct' => false],
                            ['choice_text' => ',', 'is_correct' => false],
                            ['choice_text' => '.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une phrase qui annonce simplement un fait se termine par un point.',
                    ],
                    [
                        'question' => 'Youssef se présente en deux phrases. Quelle version est bien présentée ?',
                        'choices' => [
                            ['choice_text' => 'Mon nom est Youssef je suis étudiant.', 'is_correct' => false],
                            ['choice_text' => 'mon nom est Youssef. Je suis étudiant.', 'is_correct' => false],
                            ['choice_text' => 'Mon nom est Youssef. Je suis étudiant.', 'is_correct' => true],
                            ['choice_text' => 'Mon nom est Youssef. je suis étudiant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque phrase commence par une majuscule et se termine par un point.',
                    ],
                    [
                        'question' => 'Quelle phrase rapporte bien les paroles de Lina avec des guillemets ?',
                        'choices' => [
                            ['choice_text' => 'Elle dit : « Je suis prête. »', 'is_correct' => true],
                            ['choice_text' => 'Elle dit : Je suis prête.', 'is_correct' => false],
                            ['choice_text' => 'Elle dit « : Je suis prête. »', 'is_correct' => false],
                            ['choice_text' => '« Elle dit : » Je suis prête.', 'is_correct' => false],
                        ],
                        'explanation' => 'On met les deux-points après « dit », puis les paroles entre guillemets.',
                    ],
                ],
            ],
            [
                'title' => 'Écrire un petit paragraphe',
                'description' => 'Organiser plusieurs phrases autour d’une idée simple et maintenir une progression logique.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Leïla écrit un paragraphe sur sa routine quotidienne. Quelle phrase peut l’ouvrir ?',
                        'choices' => [
                            ['choice_text' => 'Hier soir, mon voisin a perdu ses clés.', 'is_correct' => false],
                            ['choice_text' => 'Ensuite, je prends mon sac et je pars.', 'is_correct' => false],
                            ['choice_text' => 'Pour finir, je me couche à vingt-deux heures.', 'is_correct' => false],
                            ['choice_text' => 'Chaque matin, je me lève à sept heures.', 'is_correct' => true],
                        ],
                        'explanation' => 'La première phrase annonce le thème : la routine du matin. Les autres changent de sujet ou conviennent mieux au milieu ou à la fin.',
                    ],
                    [
                        'question' => 'Mehdi décrit sa matinée : « Je prends mon petit-déjeuner. » Quelle phrase peut venir juste après ?',
                        'choices' => [
                            ['choice_text' => 'Ensuite, je prépare mon sac.', 'is_correct' => true],
                            ['choice_text' => 'Enfin, je me réveille à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'D’abord, je me lève et je m’habille.', 'is_correct' => false],
                            ['choice_text' => 'Pourtant, mon sac est très lourd.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ensuite » garde l’ordre chronologique. « Enfin » et « d’abord » ne sont pas à leur place après le petit-déjeuner.',
                    ],
                    [
                        'question' => 'Sara écrit : « J’aime la lecture. ___, j’aime écrire des histoires. » Quel connecteur ajoute une idée ?',
                        'choices' => [
                            ['choice_text' => 'Pourtant', 'is_correct' => false],
                            ['choice_text' => 'De plus', 'is_correct' => true],
                            ['choice_text' => 'Donc', 'is_correct' => false],
                            ['choice_text' => 'Par contre', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » ajoute une information du même sens. « Pourtant » et « par contre » opposent, « donc » donne une conséquence.',
                    ],
                    [
                        'question' => 'Adam raconte une visite : « D’abord, j’arrive au musée. Ensuite, je regarde les tableaux. ___, je rentre chez moi. » Quel connecteur convient ?',
                        'choices' => [
                            ['choice_text' => 'D’abord', 'is_correct' => false],
                            ['choice_text' => 'Pourtant', 'is_correct' => false],
                            ['choice_text' => 'Avant', 'is_correct' => false],
                            ['choice_text' => 'Enfin', 'is_correct' => true],
                        ],
                        'explanation' => '« Enfin » introduit la dernière étape d’une suite d’actions.',
                    ],
                    [
                        'question' => 'Noura prépare un petit paragraphe sur son quartier. Dans quel ordre organise-t-elle ses phrases ?',
                        'choices' => [
                            ['choice_text' => 'Introduction de l’idée → détails → conclusion', 'is_correct' => true],
                            ['choice_text' => 'Détails → introduction de l’idée → conclusion', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → introduction de l’idée → détails', 'is_correct' => false],
                            ['choice_text' => 'Introduction de l’idée → conclusion → détails', 'is_correct' => false],
                        ],
                        'explanation' => 'On présente d’abord l’idée, on donne ensuite les détails, puis on termine par une conclusion.',
                    ],
                    [
                        'question' => 'Karim termine son paragraphe sur sa promenade au parc. Quelle phrase peut le conclure ?',
                        'choices' => [
                            ['choice_text' => 'D’abord, je me prépare pour sortir.', 'is_correct' => false],
                            ['choice_text' => 'J’ai beaucoup aimé cette promenade.', 'is_correct' => true],
                            ['choice_text' => 'Ce matin, nous marchons vers le parc.', 'is_correct' => false],
                            ['choice_text' => 'Ensuite, nous traversons le grand jardin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase donne une impression finale. Les autres racontent le début ou le milieu de la promenade.',
                    ],
                    [
                        'question' => 'Pour faire du thé, Salma écrit : « ___, je fais bouillir l’eau. Ensuite, j’ajoute les feuilles. » Quel connecteur ouvre la première étape ?',
                        'choices' => [
                            ['choice_text' => 'Enfin', 'is_correct' => false],
                            ['choice_text' => 'Pourtant', 'is_correct' => false],
                            ['choice_text' => 'Ensuite', 'is_correct' => false],
                            ['choice_text' => 'D’abord', 'is_correct' => true],
                        ],
                        'explanation' => '« D’abord » indique la première action d’une suite.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus cohérente après « Il pleut beaucoup aujourd’hui. » ?',
                        'choices' => [
                            ['choice_text' => 'Je prends donc mon parapluie.', 'is_correct' => true],
                            ['choice_text' => 'Je mets donc mes lunettes de soleil.', 'is_correct' => false],
                            ['choice_text' => 'Je sors donc en short et en tongs.', 'is_correct' => false],
                            ['choice_text' => 'Je prends mon parapluie, mais il pleut.', 'is_correct' => false],
                        ],
                        'explanation' => '« Donc » relie la cause (« il pleut ») à sa conséquence (« je prends mon parapluie »).',
                    ],
                    [
                        'question' => 'Après « J’aime le sport. », quelle phrase reste sur le même sujet ?',
                        'choices' => [
                            ['choice_text' => 'Mon frère a acheté un nouveau téléphone.', 'is_correct' => false],
                            ['choice_text' => 'La capitale du Maroc est Rabat.', 'is_correct' => false],
                            ['choice_text' => 'En particulier, je joue au football.', 'is_correct' => true],
                            ['choice_text' => 'Il pleut souvent en hiver à Fès.', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième phrase précise l’idée de départ avec un exemple. Les autres parlent d’autre chose.',
                    ],
                    [
                        'question' => 'Maya écrit : « Je lis beaucoup. » Quelle phrase ajoute un exemple concret ?',
                        'choices' => [
                            ['choice_text' => 'En revanche, je lis des romans le week-end.', 'is_correct' => false],
                            ['choice_text' => 'En conclusion, je lis des romans le week-end.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, je lis des romans le week-end.', 'is_correct' => true],
                            ['choice_text' => 'Pourtant, je lis des romans le week-end.', 'is_correct' => false],
                        ],
                        'explanation' => '« Par exemple » introduit un cas précis qui illustre l’idée. Les autres connecteurs opposent ou concluent.',
                    ],
                    [
                        'question' => 'Quel défaut rend un petit paragraphe moins clair ?',
                        'choices' => [
                            ['choice_text' => 'Donner un exemple précis', 'is_correct' => false],
                            ['choice_text' => 'Redire la même idée sans rien ajouter', 'is_correct' => true],
                            ['choice_text' => 'Terminer par une courte conclusion', 'is_correct' => false],
                            ['choice_text' => 'Annoncer le thème dès la première phrase', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand une phrase redit l’idée précédente, le lecteur n’apprend rien de nouveau.',
                    ],
                    [
                        'question' => 'Quel paragraphe de Samir sur son week-end est le mieux organisé ?',
                        'choices' => [
                            ['choice_text' => 'Je me promène avec ma famille. J’aime ce week-end. Le samedi, je joue au football. Le dimanche, mes amis.', 'is_correct' => false],
                            ['choice_text' => 'Le samedi, je joue au football avec mes amis. Mon frère a acheté un vélo. La capitale est Rabat. J’aime ça.', 'is_correct' => false],
                            ['choice_text' => 'Le samedi, je joue au football avec mes amis. Le dimanche, je me promène avec ma famille. J’aime ce week-end.', 'is_correct' => true],
                            ['choice_text' => 'J’aime ce week-end. J’aime ce week-end. J’aime ce week-end parce que j’aime ça. Le samedi, football.', 'is_correct' => false],
                        ],
                        'explanation' => 'Il suit l’ordre du week-end (samedi, puis dimanche) et se termine par une conclusion. Les autres mélangent l’ordre, sortent du sujet ou se répètent.',
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
                        'question' => 'Vous écrivez à Karim, votre meilleur ami. Comment commencez-vous votre message ?',
                        'choices' => [
                            ['choice_text' => 'Madame, Monsieur,', 'is_correct' => false],
                            ['choice_text' => 'Salut Karim,', 'is_correct' => true],
                            ['choice_text' => 'Cher Monsieur Karim,', 'is_correct' => false],
                            ['choice_text' => 'Objet : invitation', 'is_correct' => false],
                        ],
                        'explanation' => '« Salut » est une formule d’appel de registre familier, adaptée à un ami.',
                    ],
                    [
                        'question' => 'Rachid écrit à son ami Amine pour l’inviter au cinéma. Quelle phrase choisit-il ?',
                        'choices' => [
                            ['choice_text' => 'Je vous invite à une séance de cinéma samedi.', 'is_correct' => false],
                            ['choice_text' => 'Seriez-vous disponible pour aller au cinéma samedi ?', 'is_correct' => false],
                            ['choice_text' => 'Veuillez confirmer votre présence au cinéma samedi.', 'is_correct' => false],
                            ['choice_text' => 'Tu veux aller au cinéma samedi ?', 'is_correct' => true],
                        ],
                        'explanation' => 'Le tutoiement et la question simple conviennent entre amis. Les autres phrases sont trop formelles.',
                    ],
                    [
                        'question' => 'Hamid ne peut pas aller à la soirée de son ami Taha. Que lui écrit-il ?',
                        'choices' => [
                            ['choice_text' => 'Désolé, je ne pourrai pas venir ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Je vous prie d’excuser mon absence de ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez accepter mes excuses pour mon absence.', 'is_correct' => false],
                            ['choice_text' => 'Je regrette de vous informer de mon indisponibilité.', 'is_correct' => false],
                        ],
                        'explanation' => '« Désolé » est un mot courant et naturel dans un message à un ami. Les autres formules sont réservées à un courrier formel.',
                    ],
                    [
                        'question' => 'Ilyas termine un SMS à sa cousine. Quelle formule de fin choisit-il ?',
                        'choices' => [
                            ['choice_text' => 'Veuillez agréer mes salutations distinguées.', 'is_correct' => false],
                            ['choice_text' => 'À bientôt !', 'is_correct' => true],
                            ['choice_text' => 'Je vous prie de croire en mes sentiments respectueux.', 'is_correct' => false],
                            ['choice_text' => 'Dans l’attente de votre réponse, bien cordialement.', 'is_correct' => false],
                        ],
                        'explanation' => '« À bientôt ! » est une fin simple et chaleureuse. Les autres formules appartiennent aux lettres formelles.',
                    ],
                    [
                        'question' => 'Rachid propose de retrouver son ami Ayoub. Quel message précise le jour, l’heure et le lieu ?',
                        'choices' => [
                            ['choice_text' => 'On se voit un jour, quelque part ?', 'is_correct' => false],
                            ['choice_text' => 'On se retrouve samedi à 15 h devant le café ?', 'is_correct' => true],
                            ['choice_text' => 'On se retrouve samedi, je te dirai où plus tard.', 'is_correct' => false],
                            ['choice_text' => 'Rendez-vous samedi à une heure, tu viens ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Le message donne les trois informations utiles : le jour, l’heure et le lieu.',
                    ],
                    [
                        'question' => 'Imane doit prévenir son amie Salma qu’elle arrive en retard. Quel message est le plus clair ?',
                        'choices' => [
                            ['choice_text' => 'Retard. Dix minutes. Peut-être.', 'is_correct' => false],
                            ['choice_text' => 'Je serai en retard, mais je ne sais pas de combien.', 'is_correct' => false],
                            ['choice_text' => 'Je serai un peu en retard. J’arrive dans dix minutes.', 'is_correct' => true],
                            ['choice_text' => 'Désolée, j’ai un petit souci, je te dis ça plus tard.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce message annonce le retard et donne la durée. Les autres restent vagues.',
                    ],
                    [
                        'question' => 'Après un coup de main pour déménager, Walid écrit à son ami. Quelle phrase choisit-il ?',
                        'choices' => [
                            ['choice_text' => 'Merci beaucoup pour ton aide !', 'is_correct' => true],
                            ['choice_text' => 'Je vous remercie vivement de votre aide.', 'is_correct' => false],
                            ['choice_text' => 'Nous vous remercions de votre candidature.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez recevoir mes remerciements les plus sincères.', 'is_correct' => false],
                        ],
                        'explanation' => '« Merci beaucoup pour ton aide ! » est simple et chaleureux. Les autres phrases sont trop formelles pour un ami.',
                    ],
                    [
                        'question' => 'Pour l’anniversaire de son ami Hamza, Bilal lui écrit. Quel message convient ?',
                        'choices' => [
                            ['choice_text' => 'Je vous souhaite un excellent anniversaire, Monsieur.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez agréer mes vœux à l’occasion de votre anniversaire.', 'is_correct' => false],
                            ['choice_text' => 'Joyeux anniversaire, Hamza ! Passe une super journée !', 'is_correct' => true],
                            ['choice_text' => 'Nous avons le plaisir de vous souhaiter un bon anniversaire.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le prénom, le tutoiement et le ton enthousiaste conviennent entre amis. Les autres messages sont rédigés comme un courrier officiel.',
                    ],
                    [
                        'question' => 'Lina demande à son frère de lui envoyer un document. Quel message est le plus adapté ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que tu peux m’envoyer le document, s’il te plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Pourriez-vous m’adresser le document dans les meilleurs délais ?', 'is_correct' => false],
                            ['choice_text' => 'Je vous prie de bien vouloir m’envoyer le document.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez m’envoyer le document avant ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'La demande est polie et simple, avec « tu » et « s’il te plaît ». Les autres phrases vouvoient son frère.',
                    ],
                    [
                        'question' => 'Anas écrit à Salma : « Salut ! Ça va ? » Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, je vais bien. Quelle est votre question ?', 'is_correct' => false],
                            ['choice_text' => 'Ça va. Il y a du pain à la maison.', 'is_correct' => false],
                            ['choice_text' => 'Oui, ça va. Mon frère habite à Fès.', 'is_correct' => false],
                            ['choice_text' => 'Oui, ça va, merci ! Et toi ?', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle répond à la question puis la renvoie à son ami. Les autres réponses sont trop formelles ou hors sujet.',
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
                        'question' => 'Karim ouvre sa messagerie. Quelle ligne de l’e-mail lui indique le sujet avant de lire le message ?',
                        'choices' => [
                            ['choice_text' => 'La signature', 'is_correct' => false],
                            ['choice_text' => 'La pièce jointe', 'is_correct' => false],
                            ['choice_text' => 'L’adresse du destinataire', 'is_correct' => false],
                            ['choice_text' => 'L’objet', 'is_correct' => true],
                        ],
                        'explanation' => 'L’objet résume en quelques mots le contenu ou le but de l’e-mail.',
                    ],
                    [
                        'question' => 'Nadia écrit à Mme Benjelloun, sa directrice de stage. Comment commence-t-elle son e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame,', 'is_correct' => true],
                            ['choice_text' => 'Salut Madame,', 'is_correct' => false],
                            ['choice_text' => 'Coucou Madame,', 'is_correct' => false],
                            ['choice_text' => 'Hey Madame,', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour Madame, » est poli et convient à un échange professionnel. Les autres appels sont familiers.',
                    ],
                    [
                        'question' => 'Hassan écrit à son futur employeur pour connaître l’horaire de son stage. Quelle phrase est polie ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me préciser l’horaire, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Donnez-moi l’horaire tout de suite.', 'is_correct' => false],
                            ['choice_text' => 'Tu peux m’envoyer l’horaire ?', 'is_correct' => false],
                            ['choice_text' => 'Je veux l’horaire avant midi.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous… s’il vous plaît ? » est la forme polie qui convient dans un e-mail professionnel.',
                    ],
                    [
                        'question' => 'Rim termine un e-mail à une responsable de l’entreprise. Quelle formule de fin choisit-elle ?',
                        'choices' => [
                            ['choice_text' => 'Bisous,', 'is_correct' => false],
                            ['choice_text' => 'À plus tard !', 'is_correct' => false],
                            ['choice_text' => 'Cordialement,', 'is_correct' => true],
                            ['choice_text' => 'Bien à toi,', 'is_correct' => false],
                        ],
                        'explanation' => '« Cordialement » est la formule de fin courante des e-mails professionnels.',
                    ],
                    [
                        'question' => 'Adil écrit à une dentiste pour prendre rendez-vous. Quel objet met-il ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame Benali', 'is_correct' => false],
                            ['choice_text' => 'Demande de rendez-vous', 'is_correct' => true],
                            ['choice_text' => 'URGENT !!! RÉPONDEZ VITE', 'is_correct' => false],
                            ['choice_text' => 'Un message pour vous', 'is_correct' => false],
                        ],
                        'explanation' => 'L’objet doit être court et dire clairement le but du message.',
                    ],
                    [
                        'question' => 'Imad envoie son CV par e-mail à un responsable. Quelle phrase annonce la pièce jointe ?',
                        'choices' => [
                            ['choice_text' => 'Mon CV est attaché quelque part.', 'is_correct' => false],
                            ['choice_text' => 'Regardez en bas, il y a un truc.', 'is_correct' => false],
                            ['choice_text' => 'J’ai mis le document, cherchez-le.', 'is_correct' => false],
                            ['choice_text' => 'Vous trouverez mon CV en pièce jointe.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette phrase dit précisément où se trouve le CV, avec une formule standard.',
                    ],
                    [
                        'question' => 'Un recruteur a répondu à Omar par e-mail. Comment Omar le remercie-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Merci mec pour la réponse.', 'is_correct' => false],
                            ['choice_text' => 'Je vous remercie pour votre réponse.', 'is_correct' => true],
                            ['choice_text' => 'Enfin une réponse, merci !', 'is_correct' => false],
                            ['choice_text' => 'Merci pour ta réponse, c’est cool.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le « vous » et la formule complète conviennent à un échange professionnel.',
                    ],
                    [
                        'question' => 'Dans quel ordre faut-il organiser un e-mail simple ?',
                        'choices' => [
                            ['choice_text' => 'Raison du message → salutation → formule de fin → demande ou information', 'is_correct' => false],
                            ['choice_text' => 'Salutation → formule de fin → raison du message → demande ou information', 'is_correct' => false],
                            ['choice_text' => 'Formule de fin → salutation → raison du message → demande ou information', 'is_correct' => false],
                            ['choice_text' => 'Salutation → raison du message → demande ou information → formule de fin', 'is_correct' => true],
                        ],
                        'explanation' => 'Le destinataire comprend ainsi pourquoi on lui écrit et ce que l’on attend de lui.',
                    ],
                    [
                        'question' => 'Nadia veut prendre rendez-vous avec la directrice. Quel e-mail est le plus clair ?',
                        'choices' => [
                            ['choice_text' => 'Salut Madame, / je veux un rendez-vous mardi matin, répondez-moi vite. / Nadia', 'is_correct' => false],
                            ['choice_text' => 'Bonjour Madame, / Je voudrais un rendez-vous mardi matin ou mercredi après-midi, ou un autre jour si possible. / Nadia', 'is_correct' => false],
                            ['choice_text' => 'Bonjour Madame, / Je vous écris pour demander un rendez-vous mardi matin. / Merci d’avance. / Cordialement, / Nadia', 'is_correct' => true],
                            ['choice_text' => 'Bonjour, / Rendez-vous mardi matin, c’est possible ? Je ne sais pas à quelle heure. / Merci. Nadia', 'is_correct' => false],
                        ],
                        'explanation' => 'Il a une salutation, une demande précise, un remerciement et une signature. Dans les autres, le ton, la précision ou la fin posent problème.',
                    ],
                    [
                        'question' => 'Samir a reçu une invitation à un entretien d’embauche. Quelle phrase répond poliment qu’il viendra ?',
                        'choices' => [
                            ['choice_text' => 'Je viendrai jeudi, ne vous inquiétez pas.', 'is_correct' => false],
                            ['choice_text' => 'Ok pour jeudi, à plus !', 'is_correct' => false],
                            ['choice_text' => 'Je vous confirme ma présence à l’entretien jeudi à dix heures.', 'is_correct' => true],
                            ['choice_text' => 'Jeudi à dix heures, peut-être, je verrai.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase est polie et précise le jour et l’heure. Les autres sont familières ou incertaines.',
                    ],
                    [
                        'question' => 'Mounir a rendez-vous avec un client à neuf heures, mais il est bloqué dans les embouteillages. Que lui écrit-il ?',
                        'choices' => [
                            ['choice_text' => 'Je vous informe que j’aurai environ quinze minutes de retard.', 'is_correct' => true],
                            ['choice_text' => 'Je serai en retard, mais je ne sais pas encore de combien.', 'is_correct' => false],
                            ['choice_text' => 'Je suis en retard, voilà : quinze minutes.', 'is_correct' => false],
                            ['choice_text' => 'J’arrive quand je peux, ne bougez pas.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase est polie, annonce le retard et indique sa durée.',
                    ],
                    [
                        'question' => 'Hanane écrit à la mairie pour demander un acte de naissance. Quelle formule termine sa lettre ?',
                        'choices' => [
                            ['choice_text' => 'Merci d’avance, bisous.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez agréer, Madame, Monsieur, mes salutations distinguées.', 'is_correct' => true],
                            ['choice_text' => 'À bientôt, salut !', 'is_correct' => false],
                            ['choice_text' => 'Bonne journée à toi !', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formule fait partie du registre formel et convient aux courriers adressés à une administration.',
                    ],
                    [
                        'question' => 'Zakaria s’intéresse à une formation en informatique. Quelle phrase annonce clairement le but de son e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Je vous écris pour vous dire bonjour et vous poser une question.', 'is_correct' => false],
                            ['choice_text' => 'Je vous écris car j’ai un message important à vous envoyer.', 'is_correct' => false],
                            ['choice_text' => 'Je vous contacte au sujet de plusieurs choses intéressantes.', 'is_correct' => false],
                            ['choice_text' => 'Je vous contacte afin d’obtenir des informations sur votre formation.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase donne tout de suite la raison de l’e-mail : obtenir des informations sur la formation.',
                    ],
                ],
            ],
            [
                'title' => 'Corriger un texte simple',
                'description' => 'Repérer des erreurs fréquentes de grammaire, d’accord, de ponctuation et de formulation.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans le texte de Yassine, on lit « Les élèves lit dans la classe ». Quelle est la bonne correction ?',
                        'choices' => [
                            ['choice_text' => 'Les élèves lisent dans la classe.', 'is_correct' => true],
                            ['choice_text' => 'Les élèves lit dans la classe.', 'is_correct' => false],
                            ['choice_text' => 'Les élève lisent dans la classe.', 'is_correct' => false],
                            ['choice_text' => 'Les élèves lises dans la classe.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « les élèves » est au pluriel, donc le verbe s’écrit « lisent ».',
                    ],
                    [
                        'question' => 'Anouar a écrit « Ma sœur sont content ». Quelle phrase corrige toutes les erreurs ?',
                        'choices' => [
                            ['choice_text' => 'Ma sœur est content.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur sont contente.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur est contente.', 'is_correct' => true],
                            ['choice_text' => 'Ma sœur es contente.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ma sœur », on emploie « est » et l’adjectif s’accorde au féminin : « contente ».',
                    ],
                    [
                        'question' => 'Dans un devoir, Salma a écrit « Aujourdhui je vais travaillé ». Quelle est la bonne correction ?',
                        'choices' => [
                            ['choice_text' => 'Aujourd’hui, je vais travailler.', 'is_correct' => true],
                            ['choice_text' => 'Aujourd hui, je vais travailler.', 'is_correct' => false],
                            ['choice_text' => 'Aujourdhui, je vais travailler.', 'is_correct' => false],
                            ['choice_text' => 'Aujourd’hui, je vais travaillé.', 'is_correct' => false],
                        ],
                        'explanation' => 'On écrit « aujourd’hui » avec une apostrophe, et après « vais » on met l’infinitif : « travailler ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige correctement « Nous avons manger au restaurant » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons mangés au restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons mangé au restaurant.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons mangées au restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons mange au restaurant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après l’auxiliaire « avons », on emploie le participe passé « mangé », sans accord ici.',
                    ],
                    [
                        'question' => 'Quelle phrase corrige correctement « Je ne comprends rien pas » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne comprends rien.', 'is_correct' => true],
                            ['choice_text' => 'Je ne comprends pas rien.', 'is_correct' => false],
                            ['choice_text' => 'Je ne rien comprends.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends ne rien.', 'is_correct' => false],
                        ],
                        'explanation' => '« Rien » forme déjà la négation avec « ne » : il ne faut pas ajouter « pas ».',
                    ],
                    [
                        'question' => 'Dans un message, Karim a écrit « Salut Amina tu viens au cinéma ce soir ». Quelle version est bien ponctuée ?',
                        'choices' => [
                            ['choice_text' => 'Salut, Amina tu viens au cinéma ce soir ?', 'is_correct' => false],
                            ['choice_text' => 'Salut Amina, tu viens au cinéma ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Salut Amina tu viens, au cinéma ce soir ?', 'is_correct' => false],
                            ['choice_text' => 'Salut Amina, tu viens au cinéma ce soir ?', 'is_correct' => true],
                        ],
                        'explanation' => 'Une virgule sépare le prénom de la question, qui se termine par un point d’interrogation.',
                    ],
                    [
                        'question' => 'Sur son carnet, Rania a écrit « J’aime les pomme ». Quelle est la bonne correction ?',
                        'choices' => [
                            ['choice_text' => 'J’aime les pomme.', 'is_correct' => false],
                            ['choice_text' => 'J’aime la pommes.', 'is_correct' => false],
                            ['choice_text' => 'J’aime les pommes.', 'is_correct' => true],
                            ['choice_text' => 'J’aime le pommes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « les », le nom est au pluriel : « pommes ».',
                    ],
                    [
                        'question' => 'Ahmed raconte l’arrivée de ses cousins et écrit « Ils sont arrivé à huit heures ». Quelle est la bonne correction ?',
                        'choices' => [
                            ['choice_text' => 'Ils est arrivés à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils sont arrivées à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils ont arrivés à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils sont arrivés à huit heures.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec l’auxiliaire « être », le participe passé s’accorde avec le sujet : « ils… arrivés ».',
                    ],
                    [
                        'question' => 'Quelle correction faut-il apporter à « Elle va au école » ?',
                        'choices' => [
                            ['choice_text' => 'Elle va à école.', 'is_correct' => false],
                            ['choice_text' => 'Elle va à l’école.', 'is_correct' => true],
                            ['choice_text' => 'Elle va à le école.', 'is_correct' => false],
                            ['choice_text' => 'Elle va en l’école.', 'is_correct' => false],
                        ],
                        'explanation' => '« À + l’école » : devant une voyelle, « le » devient « l’ ».',
                    ],
                    [
                        'question' => 'Samy a écrit « Mon frère et moi va au cinéma ce soir ». Quelle phrase est bien corrigée ?',
                        'choices' => [
                            ['choice_text' => 'Mon frère et moi vont au cinéma ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère et moi allons au cinéma ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Mon frère et moi allons le cinéma ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère et moi aller au cinéma ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mon frère et moi » équivaut à « nous » : le verbe est « allons ».',
                    ],
                    [
                        'question' => 'Nabil a écrit « Il sont très fatigué ». Quelle version est entièrement corrigée ?',
                        'choices' => [
                            ['choice_text' => 'Il est très fatigués.', 'is_correct' => false],
                            ['choice_text' => 'Ils sont très fatigué.', 'is_correct' => false],
                            ['choice_text' => 'Ils sont très fatigués.', 'is_correct' => true],
                            ['choice_text' => 'Il sont très fatigués.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est « ils », le verbe est « sont » et l’adjectif « fatigués » prend le pluriel.',
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
                        'question' => 'Samia écrit à Meryem, son amie d’enfance. Quelle formule d’appel choisit-elle ?',
                        'choices' => [
                            ['choice_text' => 'Madame, Monsieur,', 'is_correct' => false],
                            ['choice_text' => 'Chère Madame,', 'is_correct' => false],
                            ['choice_text' => 'Salut !', 'is_correct' => true],
                            ['choice_text' => 'Cher Monsieur,', 'is_correct' => false],
                        ],
                        'explanation' => '« Salut ! » est une formule familière, adaptée à une amie.',
                    ],
                    [
                        'question' => 'Dina écrit à un centre de formation. Quelle phrase convient à son e-mail professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Salut, tu peux m’envoyer les infos sur la formation ?', 'is_correct' => false],
                            ['choice_text' => 'Hey, c’est quoi comme formation chez vous ?', 'is_correct' => false],
                            ['choice_text' => 'Envoie-moi vite les infos sur la formation.', 'is_correct' => false],
                            ['choice_text' => 'Je souhaiterais obtenir des informations sur la formation.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le conditionnel « souhaiterais » et le ton neutre rendent la demande polie. Les autres phrases sont familières.',
                    ],
                    [
                        'question' => 'Kenza prépare un message pour la mairie. Quelle phrase doit-elle corriger parce que son ton est trop familier ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me transmettre le document demandé ?', 'is_correct' => false],
                            ['choice_text' => 'Salut, vous pouvez me donner le document ?', 'is_correct' => true],
                            ['choice_text' => 'Je vous remercie pour votre aide.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez trouver ci-joint le document demandé.', 'is_correct' => false],
                        ],
                        'explanation' => '« Salut » et « vous pouvez me donner » sonnent trop familiers pour une administration.',
                    ],
                    [
                        'question' => 'Anas envoie une lettre de motivation à une entreprise dont il ne connaît pas le recruteur. Comment commence-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Coucou !', 'is_correct' => false],
                            ['choice_text' => 'Salut tout le monde,', 'is_correct' => false],
                            ['choice_text' => 'Bonjour les amis,', 'is_correct' => false],
                            ['choice_text' => 'Madame, Monsieur,', 'is_correct' => true],
                        ],
                        'explanation' => '« Madame, Monsieur, » est la formule d’appel formelle quand on ne connaît pas le destinataire.',
                    ],
                    [
                        'question' => 'Vous cherchez la gare et vous abordez un passant. Quelle phrase est la plus polie ?',
                        'choices' => [
                            ['choice_text' => 'Dis-moi où est la gare, s’il te plaît.', 'is_correct' => false],
                            ['choice_text' => 'Tu peux me montrer la gare ?', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous m’indiquer le chemin de la gare, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Montrez-moi la gare tout de suite.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous… s’il vous plaît ? » est la façon polie de demander à un inconnu.',
                    ],
                    [
                        'question' => 'Parmi ces phrases, laquelle écrirait-on à un ami et non à un employeur ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous confirmer le rendez-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Je vous remercie pour votre réponse.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez trouver le document en pièce jointe.', 'is_correct' => false],
                            ['choice_text' => 'On se voit ce soir ?', 'is_correct' => true],
                        ],
                        'explanation' => '« On se voit ce soir ? » est une formule courante entre proches. Les autres conviennent à un contexte professionnel.',
                    ],
                    [
                        'question' => 'Omar attend la réponse d’un client avant vendredi. Quelle phrase la demande dans un e-mail professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Réponds-moi avant vendredi, ok ?', 'is_correct' => false],
                            ['choice_text' => 'Réponds-moi vite, ça presse !', 'is_correct' => false],
                            ['choice_text' => 'Merci de me répondre avant vendredi.', 'is_correct' => true],
                            ['choice_text' => 'Tu me réponds avant vendredi ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Merci de… » est une façon polie et directe de formuler une demande. Les autres phrases tutoient le client.',
                    ],
                    [
                        'question' => 'Ali écrit à son professeur de français. Quel message est adapté ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame, le devoir est-il à rendre demain ?', 'is_correct' => true],
                            ['choice_text' => 'Salut Madame, c’est pour demain le devoir, ou pas ?', 'is_correct' => false],
                            ['choice_text' => 'Hey, tu sais si on rend le devoir demain ?', 'is_correct' => false],
                            ['choice_text' => 'Dis-moi vite si le devoir est pour demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le message est poli et respecte la relation élève-professeur. Les autres sont familiers.',
                    ],
                    [
                        'question' => 'Quelle expression convient à une lettre adressée à une administration ?',
                        'choices' => [
                            ['choice_text' => 'Veuillez trouver ci-joint mon dossier.', 'is_correct' => true],
                            ['choice_text' => 'Tiens, regarde mon dossier juste là.', 'is_correct' => false],
                            ['choice_text' => 'Je te mets mon dossier avec ce message.', 'is_correct' => false],
                            ['choice_text' => 'Voilà mon dossier, tu le trouveras bien.', 'is_correct' => false],
                        ],
                        'explanation' => '« Veuillez » et « ci-joint » appartiennent au registre formel des courriers.',
                    ],
                    [
                        'question' => 'Le directeur annonce l’horaire de la réunion à son équipe. Quelle phrase est la plus professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Salut, la réunion démarre à neuf heures, ok ?', 'is_correct' => false],
                            ['choice_text' => 'Je vous informe que la réunion commencera à neuf heures.', 'is_correct' => true],
                            ['choice_text' => 'La réunion, elle commence à neuf heures, hein.', 'is_correct' => false],
                            ['choice_text' => 'Bon, la réunion c’est à neuf heures, compris ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Je vous informe que… » et le futur donnent un ton professionnel. Les autres phrases sont familières ou typiques de l’oral.',
                    ],
                ],
            ],
            [
                'title' => 'Révision de production écrite',
                'description' => 'Réviser les compétences essentielles de l’écriture débutante : clarté, organisation, correction et adaptation au contexte.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Sara se présente sur un forum de langues. Quelle phrase donne son nom et sa ville ?',
                        'choices' => [
                            ['choice_text' => 'Mon nom Sara et j’habite Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Je m’appelle Sara et je voudrais visiter Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour, je m’appelle Sara, merci beaucoup.', 'is_correct' => false],
                            ['choice_text' => 'Je m’appelle Sara et j’habite à Casablanca.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette phrase donne deux informations claires : le nom et le lieu de résidence.',
                    ],
                    [
                        'question' => 'Mounia raconte son week-end à une amie. Quelle phrase est la plus précise ?',
                        'choices' => [
                            ['choice_text' => 'Je vais quelque part samedi pour faire des choses.', 'is_correct' => false],
                            ['choice_text' => 'Je sors souvent pour acheter des trucs.', 'is_correct' => false],
                            ['choice_text' => 'Je vais en ville un jour pour acheter quelque chose.', 'is_correct' => false],
                            ['choice_text' => 'Je vais au marché samedi matin pour acheter des fruits.', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle indique le lieu, le moment et le but de la sortie.',
                    ],
                    [
                        'question' => 'Le professeur demande aux élèves de rendre leurs textes plus clairs. Que doivent-ils faire ?',
                        'choices' => [
                            ['choice_text' => 'Employer des mots très difficiles pour faire sérieux', 'is_correct' => false],
                            ['choice_text' => 'Mélanger plusieurs idées dans la même phrase', 'is_correct' => false],
                            ['choice_text' => 'Écrire des phrases courtes et donner des informations précises', 'is_correct' => true],
                            ['choice_text' => 'Répéter chaque idée trois fois pour insister', 'is_correct' => false],
                        ],
                        'explanation' => 'Un texte clair repose sur des phrases simples et des informations précises.',
                    ],
                    [
                        'question' => 'Quelle phrase donne la raison pour laquelle Hamza reste chez lui aujourd’hui ?',
                        'choices' => [
                            ['choice_text' => 'Je reste à la maison donc il pleut.', 'is_correct' => false],
                            ['choice_text' => 'Je reste à la maison parce qu’il pleut.', 'is_correct' => true],
                            ['choice_text' => 'Je reste à la maison pour qu’il pleut.', 'is_correct' => false],
                            ['choice_text' => 'Je reste à la maison alors il pleut.', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » introduit la cause. Les autres connecteurs inversent la cause et la conséquence ou sont mal employés.',
                    ],
                    [
                        'question' => 'Ilham regarde l’heure : il est minuit passé. Quelle phrase exprime la conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Il est tard, parce que je vais dormir.', 'is_correct' => false],
                            ['choice_text' => 'Il est tard, mais je vais dormir.', 'is_correct' => false],
                            ['choice_text' => 'Il est tard, alors que je vais dormir.', 'is_correct' => false],
                            ['choice_text' => 'Il est tard, donc je vais dormir.', 'is_correct' => true],
                        ],
                        'explanation' => '« Donc » présente ce qui découle du fait qu’il est tard.',
                    ],
                    [
                        'question' => 'Adil raconte sa journée d’hier à un ami. Quelle phrase est bien écrite au passé composé ?',
                        'choices' => [
                            ['choice_text' => 'Hier, je suis aller au parc avec mes amis.', 'is_correct' => false],
                            ['choice_text' => 'Hier, je suis allé au parc avec mes amis.', 'is_correct' => true],
                            ['choice_text' => 'Hier, j’ai allé au parc avec mes amis.', 'is_correct' => false],
                            ['choice_text' => 'Hier, je vais au parc avec mes amis.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passé composé de « aller » se forme avec « être » et le participe passé : « je suis allé ».',
                    ],
                    [
                        'question' => 'Chadi écrit un message court à une collègue. Quelle règle doit-il suivre pour être compris ?',
                        'choices' => [
                            ['choice_text' => 'Écrire beaucoup d’abréviations comme dans un SMS', 'is_correct' => false],
                            ['choice_text' => 'Donner dès le début la raison du message', 'is_correct' => true],
                            ['choice_text' => 'Ajouter des détails sans lien avec la demande', 'is_correct' => false],
                            ['choice_text' => 'Terminer sans dire ce qu’il attend de sa collègue', 'is_correct' => false],
                        ],
                        'explanation' => 'Même un message court doit dire vite pourquoi on écrit.',
                    ],
                    [
                        'question' => 'Samir propose une sortie à ses amis pour dimanche. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'On pourrait aller au parc dimanche.', 'is_correct' => true],
                            ['choice_text' => 'On pourrait allé au parc dimanche.', 'is_correct' => false],
                            ['choice_text' => 'On pouvoir aller au parc dimanche.', 'is_correct' => false],
                            ['choice_text' => 'On pourrait aller à parc dimanche.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « pourrait », le verbe reste à l’infinitif (« aller »), et « au parc » est la forme correcte.',
                    ],
                    [
                        'question' => 'Nour dit qu’elle aime mieux le thé que le café. Quelle phrase exprime sa préférence avec le bon verbe ?',
                        'choices' => [
                            ['choice_text' => 'Je préfère le thé que le café.', 'is_correct' => false],
                            ['choice_text' => 'Je préfère le thé à le café.', 'is_correct' => false],
                            ['choice_text' => 'Je préfère le thé au café.', 'is_correct' => true],
                            ['choice_text' => 'Je préfère mieux le thé au café.', 'is_correct' => false],
                        ],
                        'explanation' => 'On construit « préférer quelque chose à autre chose », avec « à + le » qui devient « au ».',
                    ],
                    [
                        'question' => 'Hajar termine un petit texte sur son activité préférée. Quelle phrase peut le conclure ?',
                        'choices' => [
                            ['choice_text' => 'Pour commencer, je vais vous parler de cette activité.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, mon frère fait aussi cette activité.', 'is_correct' => false],
                            ['choice_text' => 'Pour finir, je trouve cette activité très intéressante.', 'is_correct' => true],
                            ['choice_text' => 'Ensuite, nous avons fini cette activité à six heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase résume l’opinion de l’auteur. Les autres ouvrent le texte, donnent un exemple ou racontent un moment.',
                    ],
                    [
                        'question' => 'Younes raconte comment il a rejoint ses amis en ville. Quelle version suit l’ordre des actions ?',
                        'choices' => [
                            ['choice_text' => 'D’abord, j’ai pris le bus. Ensuite, je suis arrivé au centre-ville. Enfin, j’ai rejoint mes amis.', 'is_correct' => true],
                            ['choice_text' => 'J’ai rejoint mes amis. Ensuite, j’ai pris le bus. Enfin, je suis arrivé au centre-ville.', 'is_correct' => false],
                            ['choice_text' => 'Enfin, j’ai pris le bus. D’abord, je suis arrivé au centre-ville. Ensuite, j’ai rejoint mes amis.', 'is_correct' => false],
                            ['choice_text' => 'D’abord, j’ai pris le bus. D’abord, je suis arrivé au centre-ville. D’abord, j’ai rejoint mes amis.', 'is_correct' => false],
                        ],
                        'explanation' => '« D’abord », « ensuite » et « enfin » suivent l’ordre réel des actions. Dans les autres versions, la chronologie est brouillée.',
                    ],
                    [
                        'question' => 'Layla écrit : « J’aime le sport, ___ je n’aime pas courir. » Quel mot exprime l’opposition ?',
                        'choices' => [
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'mais', 'is_correct' => true],
                            ['choice_text' => 'parce que', 'is_correct' => false],
                            ['choice_text' => 'c’est pourquoi', 'is_correct' => false],
                        ],
                        'explanation' => '« Mais » oppose deux idées. Les autres connecteurs donnent une conséquence ou une cause.',
                    ],
                    [
                        'question' => 'Bilal a fini d’écrire son texte. Que fait-il avant de l’envoyer pour repérer ses erreurs ?',
                        'choices' => [
                            ['choice_text' => 'Il le relit à voix basse', 'is_correct' => true],
                            ['choice_text' => 'Il l’envoie tout de suite', 'is_correct' => false],
                            ['choice_text' => 'Il supprime la ponctuation', 'is_correct' => false],
                            ['choice_text' => 'Il le fait écrire par un ami', 'is_correct' => false],
                        ],
                        'explanation' => 'Se relire permet de trouver les fautes d’accord, d’orthographe et de ponctuation.',
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
