<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
class AcademicFrenchBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'academic-french')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Vocabulaire académique de base',
                'description' => 'Découvrir le vocabulaire et les expressions fréquemment utilisés dans les études et les textes académiques.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans un contexte académique, que signifie « analyser » ?',
                        'choices' => [
                            ['choice_text' => 'Donner son opinion en quelques mots', 'is_correct' => false],
                            ['choice_text' => 'Examiner un sujet de manière détaillée', 'is_correct' => true],
                            ['choice_text' => 'Résumer un texte en deux lignes', 'is_correct' => false],
                            ['choice_text' => 'Recopier les passages importants', 'is_correct' => false],
                        ],
                        'explanation' => 'Analyser, c’est décomposer un sujet ou un texte pour en comprendre chaque élément.',
                    ],
                    [
                        'question' => 'Que signifie « définir un concept » ?',
                        'choices' => [
                            ['choice_text' => 'Expliquer clairement le sens d’une notion', 'is_correct' => true],
                            ['choice_text' => 'Donner un exemple de cette notion', 'is_correct' => false],
                            ['choice_text' => 'Comparer deux notions très proches', 'is_correct' => false],
                            ['choice_text' => 'Dire si l’on est d’accord avec cette notion', 'is_correct' => false],
                        ],
                        'explanation' => 'Une définition dit ce qu’un mot ou une idée veut dire. Un exemple ne suffit pas à le faire.',
                    ],
                    [
                        'question' => 'Avant de rédiger sa conclusion, Imane doit ___ les résultats des deux expériences.',
                        'choices' => [
                            ['choice_text' => 'recopier', 'is_correct' => false],
                            ['choice_text' => 'deviner', 'is_correct' => false],
                            ['choice_text' => 'comparer', 'is_correct' => true],
                            ['choice_text' => 'ignorer', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer les résultats permet de voir leurs points communs et leurs différences avant de conclure.',
                    ],
                    [
                        'question' => 'Quel élément présente une raison pour soutenir une position dans un texte argumentatif ?',
                        'choices' => [
                            ['choice_text' => 'Une consigne', 'is_correct' => false],
                            ['choice_text' => 'Une source', 'is_correct' => false],
                            ['choice_text' => 'Une légende', 'is_correct' => false],
                            ['choice_text' => 'Un argument', 'is_correct' => true],
                        ],
                        'explanation' => 'Un argument est une idée ou une raison avancée pour soutenir une position.',
                    ],
                    [
                        'question' => 'Dans un texte académique, que signifie « résumer » ?',
                        'choices' => [
                            ['choice_text' => 'Reprendre tout le texte avec d’autres mots', 'is_correct' => false],
                            ['choice_text' => 'Présenter les idées essentielles de manière plus courte', 'is_correct' => true],
                            ['choice_text' => 'Ajouter ses propres idées à celles de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Copier les phrases les plus importantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Résumer, c’est garder l’essentiel et le dire en moins de mots.',
                    ],
                    [
                        'question' => 'Que signifie « justifier une réponse » ?',
                        'choices' => [
                            ['choice_text' => 'Écrire la réponse en un mot', 'is_correct' => false],
                            ['choice_text' => 'Vérifier la réponse auprès d’un camarade', 'is_correct' => false],
                            ['choice_text' => 'Recopier la question avant de répondre', 'is_correct' => false],
                            ['choice_text' => 'Donner des raisons qui expliquent la réponse', 'is_correct' => true],
                        ],
                        'explanation' => 'Justifier, c’est montrer pourquoi la réponse est valable en s’appuyant sur des raisons ou des preuves simples.',
                    ],
                    [
                        'question' => 'Dans une consigne, quel verbe demande de repérer les informations principales du texte ?',
                        'choices' => [
                            ['choice_text' => 'Traduisez', 'is_correct' => false],
                            ['choice_text' => 'Identifiez', 'is_correct' => true],
                            ['choice_text' => 'Reproduisez', 'is_correct' => false],
                            ['choice_text' => 'Mémorisez', 'is_correct' => false],
                        ],
                        'explanation' => '« Identifiez » demande de repérer et de reconnaître les informations importantes.',
                    ],
                    [
                        'question' => 'Que signifie « conclure » dans un travail académique ?',
                        'choices' => [
                            ['choice_text' => 'Poser la question de départ du devoir', 'is_correct' => false],
                            ['choice_text' => 'Présenter le plan du devoir en détail', 'is_correct' => false],
                            ['choice_text' => 'Terminer le raisonnement par un bilan', 'is_correct' => true],
                            ['choice_text' => 'Ajouter un nouvel exemple au dernier paragraphe', 'is_correct' => false],
                        ],
                        'explanation' => 'On conclut en rappelant l’essentiel du travail et en clôturant le raisonnement.',
                    ],
                    [
                        'question' => 'Quelle expression ouvre une phrase qui explique ce qui vient d’être dit ?',
                        'choices' => [
                            ['choice_text' => 'Par ailleurs', 'is_correct' => false],
                            ['choice_text' => 'En revanche', 'is_correct' => false],
                            ['choice_text' => 'En effet', 'is_correct' => true],
                            ['choice_text' => 'Au contraire', 'is_correct' => false],
                        ],
                        'explanation' => '« En effet » introduit une explication ou confirme l’idée précédente.',
                    ],
                    [
                        'question' => 'Après l’enquête, Hassan présente les ___ dans un tableau.',
                        'choices' => [
                            ['choice_text' => 'résultats', 'is_correct' => true],
                            ['choice_text' => 'consignes', 'is_correct' => false],
                            ['choice_text' => 'prénoms', 'is_correct' => false],
                            ['choice_text' => 'invitations', 'is_correct' => false],
                        ],
                        'explanation' => 'Une enquête produit des résultats, que l’on peut ensuite organiser dans un tableau.',
                    ],
                ],
            ],
            [
                'title' => 'Connecteurs académiques simples',
                'description' => 'Utiliser les connecteurs les plus courants pour organiser et relier des idées dans un texte académique.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel connecteur sert à introduire une première idée ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Ainsi', 'is_correct' => false],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => true],
                        ],
                        'explanation' => '« Tout d’abord » ouvre le premier point ou le premier argument.',
                    ],
                    [
                        'question' => 'Quel connecteur permet d’ajouter une information ?',
                        'choices' => [
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'De plus', 'is_correct' => true],
                            ['choice_text' => 'Par conséquent', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » ajoute une idée à celle qui précède.',
                    ],
                    [
                        'question' => 'Quel connecteur exprime une opposition ?',
                        'choices' => [
                            ['choice_text' => 'De plus', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'En effet', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => true],
                        ],
                        'explanation' => '« Cependant » introduit une idée qui contraste avec la précédente.',
                    ],
                    [
                        'question' => 'Complétez : « Les résultats sont intéressants. ___, ils doivent être interprétés avec prudence. »',
                        'choices' => [
                            ['choice_text' => 'De plus', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => true],
                        ],
                        'explanation' => 'La seconde phrase apporte une réserve : c’est le rôle de « cependant ».',
                    ],
                    [
                        'question' => 'Quel connecteur introduit une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent', 'is_correct' => true],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                            ['choice_text' => 'Pour commencer', 'is_correct' => false],
                        ],
                        'explanation' => '« Par conséquent » présente le résultat logique de ce qui vient d’être dit.',
                    ],
                    [
                        'question' => 'Quel connecteur introduit un exemple ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => true],
                            ['choice_text' => 'Ainsi', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                        ],
                        'explanation' => '« Par exemple » annonce une situation concrète qui illustre une idée générale.',
                    ],
                    [
                        'question' => 'Le texte A est clair ; le texte B, ___, reste confus.',
                        'choices' => [
                            ['choice_text' => 'par exemple', 'is_correct' => false],
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'en revanche', 'is_correct' => true],
                            ['choice_text' => 'd’abord', 'is_correct' => false],
                        ],
                        'explanation' => '« En revanche » oppose deux éléments que l’on compare.',
                    ],
                    [
                        'question' => 'Quel connecteur peut introduire une conclusion ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion', 'is_correct' => true],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                            ['choice_text' => 'Pour commencer', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                        ],
                        'explanation' => '« En conclusion » signale que le texte entre dans sa dernière partie.',
                    ],
                    [
                        'question' => 'Quel connecteur permet de reformuler une idée plus simplement ?',
                        'choices' => [
                            ['choice_text' => 'Autrement dit', 'is_correct' => true],
                            ['choice_text' => 'D’ailleurs', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent', 'is_correct' => false],
                            ['choice_text' => 'En revanche', 'is_correct' => false],
                        ],
                        'explanation' => '« Autrement dit » annonce la même idée, dite avec d’autres mots.',
                    ],
                    [
                        'question' => 'Quel enchaînement est le plus logique dans un texte court ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion → Tout d’abord → De plus → Cependant', 'is_correct' => false],
                            ['choice_text' => 'Tout d’abord → De plus → Cependant → En conclusion', 'is_correct' => true],
                            ['choice_text' => 'Cependant → En conclusion → Tout d’abord → De plus', 'is_correct' => false],
                            ['choice_text' => 'De plus → En conclusion → Tout d’abord → Cependant', 'is_correct' => false],
                        ],
                        'explanation' => 'On ouvre, on ajoute une idée, on apporte une nuance, puis on conclut.',
                    ],
                    [
                        'question' => 'Quelle expression introduit une cause ?',
                        'choices' => [
                            ['choice_text' => 'En raison de', 'is_correct' => true],
                            ['choice_text' => 'Par conséquent', 'is_correct' => false],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Autrement dit', 'is_correct' => false],
                        ],
                        'explanation' => '« En raison de » donne la cause d’un fait : le retard est annoncé en raison de la grève.',
                    ],
                ],
            ],
            [
                'title' => 'Paraphraser et reformuler',
                'description' => 'Apprendre à reformuler une idée avec des mots différents tout en conservant son sens général.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Que signifie « reformuler » ?',
                        'choices' => [
                            ['choice_text' => 'Citer le passage mot pour mot', 'is_correct' => false],
                            ['choice_text' => 'Raccourcir le texte de moitié', 'is_correct' => false],
                            ['choice_text' => 'Traduire le texte dans une autre langue', 'is_correct' => false],
                            ['choice_text' => 'Exprimer la même idée avec des mots différents', 'is_correct' => true],
                        ],
                        'explanation' => 'Reformuler garde le sens de départ mais change la manière de le dire.',
                    ],
                    [
                        'question' => 'Quelle proposition reformule « Les étudiants doivent respecter les consignes » ?',
                        'choices' => [
                            ['choice_text' => 'Les consignes doivent être respectées par les enseignants.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiants peuvent ignorer certaines consignes.', 'is_correct' => false],
                            ['choice_text' => 'Les consignes doivent être respectées par les étudiants.', 'is_correct' => true],
                            ['choice_text' => 'Les étudiants doivent écrire les consignes.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase passe à la forme passive, mais celui qui doit agir reste le même.',
                    ],
                    [
                        'question' => 'Quelle phrase reformule « Cette méthode est efficace » ?',
                        'choices' => [
                            ['choice_text' => 'Cette méthode donne de bons résultats.', 'is_correct' => true],
                            ['choice_text' => 'Cette méthode demande beaucoup de temps.', 'is_correct' => false],
                            ['choice_text' => 'Cette méthode est très ancienne.', 'is_correct' => false],
                            ['choice_text' => 'Cette méthode est facile à retenir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Donne de bons résultats » dit la même chose que « est efficace ».',
                    ],
                    [
                        'question' => 'Quelle phrase conserve le sens de « Il est nécessaire de vérifier les données » ?',
                        'choices' => [
                            ['choice_text' => 'Il est possible de vérifier les données.', 'is_correct' => false],
                            ['choice_text' => 'Il est utile de collecter les données.', 'is_correct' => false],
                            ['choice_text' => 'Il faut vérifier les données.', 'is_correct' => true],
                            ['choice_text' => 'Il suffit de recopier les données.', 'is_correct' => false],
                        ],
                        'explanation' => '« Il faut » exprime la même obligation que « il est nécessaire de ». « Possible » dirait seulement que c’est permis.',
                    ],
                    [
                        'question' => 'Quelle reformulation correspond à « En raison de la pluie, le match est annulé » ?',
                        'choices' => [
                            ['choice_text' => 'Le match est annulé à cause de la pluie.', 'is_correct' => true],
                            ['choice_text' => 'Le match est annulé malgré la pluie.', 'is_correct' => false],
                            ['choice_text' => 'Le match est annulé juste après la pluie.', 'is_correct' => false],
                            ['choice_text' => 'Le match est reporté à cause du vent.', 'is_correct' => false],
                        ],
                        'explanation' => '« À cause de » garde le même lien de cause que « en raison de ».',
                    ],
                    [
                        'question' => 'Quelle phrase reformule « Les résultats montrent une amélioration » ?',
                        'choices' => [
                            ['choice_text' => 'Les résultats indiquent une stabilité.', 'is_correct' => false],
                            ['choice_text' => 'Les résultats indiquent une baisse.', 'is_correct' => false],
                            ['choice_text' => 'Les résultats indiquent une erreur.', 'is_correct' => false],
                            ['choice_text' => 'Les résultats indiquent un progrès.', 'is_correct' => true],
                        ],
                        'explanation' => '« Indiquent un progrès » reprend l’idée d’une amélioration avec d’autres mots.',
                    ],
                    [
                        'question' => 'Qu’apporte la reformulation à un étudiant qui rédige un devoir ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de rallonger facilement le devoir sans effort', 'is_correct' => false],
                            ['choice_text' => 'Elle dispense de citer ses sources', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le sens du texte plus vague', 'is_correct' => false],
                            ['choice_text' => 'Elle montre qu’il a compris l’idée et la reformule avec ses propres mots', 'is_correct' => true],
                        ],
                        'explanation' => 'En reformulant, l’étudiant prouve sa compréhension. Il doit tout de même citer ses sources.',
                    ],
                    [
                        'question' => 'Quelle phrase reformule correctement « La lecture favorise le développement du vocabulaire » ?',
                        'choices' => [
                            ['choice_text' => 'Lire régulièrement peut aider à mieux écrire à la main.', 'is_correct' => false],
                            ['choice_text' => 'La lecture contribue au développement du vocabulaire.', 'is_correct' => true],
                            ['choice_text' => 'Lire régulièrement est surtout utile pour la prononciation.', 'is_correct' => false],
                            ['choice_text' => 'Lire régulièrement fait gagner du temps pour étudier.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase garde l’idée que la lecture contribue à enrichir le vocabulaire.',
                    ],
                    [
                        'question' => 'Quelle reformulation garde le sens de « Il est important de participer aux discussions » ?',
                        'choices' => [
                            ['choice_text' => 'La participation aux discussions est importante.', 'is_correct' => true],
                            ['choice_text' => 'La participation aux discussions est facultative.', 'is_correct' => false],
                            ['choice_text' => 'La participation aux discussions est difficile.', 'is_correct' => false],
                            ['choice_text' => 'La participation aux discussions est rare.', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure change, mais l’idée sur l’importance de participer reste la même.',
                    ],
                    [
                        'question' => 'Parmi ces consignes de reformulation, laquelle est à éviter ?',
                        'choices' => [
                            ['choice_text' => 'Changer la construction de la phrase', 'is_correct' => false],
                            ['choice_text' => 'Remplacer certains mots par des synonymes', 'is_correct' => false],
                            ['choice_text' => 'Modifier le sens de l’idée de départ', 'is_correct' => true],
                            ['choice_text' => 'Garder l’idée essentielle du texte', 'is_correct' => false],
                        ],
                        'explanation' => 'Une reformulation doit garder le sens. Si le sens change, ce n’est plus une reformulation.',
                    ],
                    [
                        'question' => 'Pour éviter de répéter « important » trois fois, Salma cherche un synonyme. Lequel convient ?',
                        'choices' => [
                            ['choice_text' => 'surprenant', 'is_correct' => false],
                            ['choice_text' => 'essentiel', 'is_correct' => true],
                            ['choice_text' => 'récent', 'is_correct' => false],
                            ['choice_text' => 'précis', 'is_correct' => false],
                        ],
                        'explanation' => '« Essentiel » est proche de « important » et s’emploie bien dans un devoir.',
                    ],
                ],
            ],
            [
                'title' => 'Parler et écrire dans un registre académique',
                'description' => 'Choisir des formulations plus neutres et formelles adaptées aux études, aux devoirs et aux présentations.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle formulation est la plus adaptée à un devoir universitaire ?',
                        'choices' => [
                            ['choice_text' => 'Cette question mérite une attention particulière.', 'is_correct' => true],
                            ['choice_text' => 'Cette question est vraiment super intéressante.', 'is_correct' => false],
                            ['choice_text' => 'Cette question est trop cool.', 'is_correct' => false],
                            ['choice_text' => 'Cette question, franchement, elle déchire grave.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle est neutre et précise. Les autres relèvent du langage familier.',
                    ],
                    [
                        'question' => 'Quel mot est plus formel que « truc » dans un texte académique ?',
                        'choices' => [
                            ['choice_text' => 'Trucmuche', 'is_correct' => false],
                            ['choice_text' => 'Machin', 'is_correct' => false],
                            ['choice_text' => 'Pote', 'is_correct' => false],
                            ['choice_text' => 'Élément', 'is_correct' => true],
                        ],
                        'explanation' => '« Élément » est neutre et précis, alors que les autres mots sont familiers.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour introduire une idée en s’appuyant sur une analyse ?',
                        'choices' => [
                            ['choice_text' => 'Moi je dis que', 'is_correct' => false],
                            ['choice_text' => 'Je trouve ça trop bien', 'is_correct' => false],
                            ['choice_text' => 'Selon cette analyse', 'is_correct' => true],
                            ['choice_text' => 'Franchement, voilà', 'is_correct' => false],
                        ],
                        'explanation' => '« Selon cette analyse » introduit une idée de façon neutre et académique.',
                    ],
                    [
                        'question' => 'Quelle phrase convient dans une présentation académique ?',
                        'choices' => [
                            ['choice_text' => 'On va regarder ce truc de plus près maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Nous examinerons les principaux résultats de cette étude.', 'is_correct' => true],
                            ['choice_text' => 'Bon, on passe à autre chose, c’est bon pour ça.', 'is_correct' => false],
                            ['choice_text' => 'Voilà le machin dont on parlait tout à l’heure.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle est claire, structurée et annonce le contenu.',
                    ],
                    [
                        'question' => 'Quelle phrase évite un ton trop personnel dans un devoir ?',
                        'choices' => [
                            ['choice_text' => 'Moi, je pense vraiment que ça marche très bien.', 'is_correct' => false],
                            ['choice_text' => 'Je trouve ça génial pour les étudiants.', 'is_correct' => false],
                            ['choice_text' => 'Les résultats semblent indiquer une tendance.', 'is_correct' => true],
                            ['choice_text' => 'À mon avis, c’est vraiment super utile.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle décrit les résultats sans parler de soi ni les juger.',
                    ],
                    [
                        'question' => 'Dans un devoir, quelle phrase décrit un résultat avec le registre le plus approprié ?',
                        'choices' => [
                            ['choice_text' => 'Ce graphique balance une hausse des ventes.', 'is_correct' => false],
                            ['choice_text' => 'Ce graphique montre une hausse des ventes.', 'is_correct' => true],
                            ['choice_text' => 'Ce graphique raconte une hausse des ventes.', 'is_correct' => false],
                            ['choice_text' => 'Ce graphique fait voir un truc : les ventes montent.', 'is_correct' => false],
                        ],
                        'explanation' => '« Montre » est le verbe neutre pour présenter un résultat. Les autres formulations sont imagées ou familières.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus précise ?',
                        'choices' => [
                            ['choice_text' => 'Cette étude dit plein de choses intéressantes.', 'is_correct' => false],
                            ['choice_text' => 'Cette étude parle de plein de trucs différents.', 'is_correct' => false],
                            ['choice_text' => 'Cette étude est intéressante, voilà ce que je pense.', 'is_correct' => false],
                            ['choice_text' => 'Cette étude présente trois résultats principaux.', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle donne une information chiffrée, alors que les autres restent vagues.',
                    ],
                    [
                        'question' => 'Quelle formule convient pour signaler une limite dans une étude ?',
                        'choices' => [
                            ['choice_text' => 'Mais bon, il y a quand même quelques problèmes.', 'is_correct' => false],
                            ['choice_text' => 'Il faut toutefois souligner certaines limites.', 'is_correct' => true],
                            ['choice_text' => 'Ça ne marche pas trop bien dans certains cas.', 'is_correct' => false],
                            ['choice_text' => 'Il y a quelques trucs qui gênent un peu.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle est formelle et précise, ce qui convient à un travail universitaire.',
                    ],
                    [
                        'question' => 'Quelle formulation convient dans un courriel adressé à une professeure ?',
                        'choices' => [
                            ['choice_text' => 'Je vous remercie d’examiner ma demande.', 'is_correct' => true],
                            ['choice_text' => 'Merci de checker ma demande vite fait quand tu peux.', 'is_correct' => false],
                            ['choice_text' => 'Dis-moi si c’est bon pour ma demande de stage.', 'is_correct' => false],
                            ['choice_text' => 'Regarde ma demande quand t’as le temps, merci.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vouvoiement et la formule polie conviennent à un message adressé à une enseignante.',
                    ],
                    [
                        'question' => 'Quelle phrase d’introduction est trop familière pour un devoir ?',
                        'choices' => [
                            ['choice_text' => 'Alors voilà, je vais vous parler de l’école.', 'is_correct' => true],
                            ['choice_text' => 'Ce devoir porte sur le rôle de l’école.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons étudier le rôle de l’école.', 'is_correct' => false],
                            ['choice_text' => 'Cette partie présente le rôle de l’école.', 'is_correct' => false],
                        ],
                        'explanation' => '« Alors voilà » appartient à la conversation orale. Un devoir annonce directement son sujet.',
                    ],
                    [
                        'question' => 'Dans un devoir, quel mot décrit sobrement une grande différence entre deux groupes ?',
                        'choices' => [
                            ['choice_text' => 'gigantesque', 'is_correct' => false],
                            ['choice_text' => 'monstrueux', 'is_correct' => false],
                            ['choice_text' => 'important', 'is_correct' => true],
                            ['choice_text' => 'colossal', 'is_correct' => false],
                        ],
                        'explanation' => '« Important » reste neutre. Les trois autres exagèrent et donnent un ton trop dramatique.',
                    ],
                ],
            ],
            [
                'title' => 'Construire une réponse académique',
                'description' => 'Organiser une réponse courte avec une idée, une explication, un exemple et une conclusion simple.',
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle structure convient le mieux à une réponse académique courte ?',
                        'choices' => [
                            ['choice_text' => 'Idée principale → explication → exemple → conclusion', 'is_correct' => true],
                            ['choice_text' => 'Exemple → idée principale → explication → conclusion', 'is_correct' => false],
                            ['choice_text' => 'Explication → conclusion → idée principale', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → exemple → explication', 'is_correct' => false],
                        ],
                        'explanation' => 'On pose d’abord l’idée, on l’explique, on l’appuie par un exemple, puis on conclut.',
                    ],
                    [
                        'question' => 'Quelle phrase peut introduire directement la réponse à une question ?',
                        'choices' => [
                            ['choice_text' => 'Bon, alors voilà le truc dont je voulais parler.', 'is_correct' => false],
                            ['choice_text' => 'Je ne sais pas trop, mais peut-être que oui.', 'is_correct' => false],
                            ['choice_text' => 'La lecture présente plusieurs avantages pour les étudiants.', 'is_correct' => true],
                            ['choice_text' => 'On va voir ça maintenant, si vous voulez bien.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle entre dans le sujet et annonce une idée que l’on peut développer.',
                    ],
                    [
                        'question' => 'Quelle phrase développe correctement l’idée « La lecture enrichit le vocabulaire » ?',
                        'choices' => [
                            ['choice_text' => 'Elle est très appréciée par de nombreux étudiants.', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de rencontrer des mots nouveaux dans différents contextes.', 'is_correct' => true],
                            ['choice_text' => 'Elle est pratiquée depuis très longtemps.', 'is_correct' => false],
                            ['choice_text' => 'Elle est un loisir accessible à tout le monde.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle explique comment la lecture enrichit le vocabulaire. Les autres phrases restent à côté du sujet.',
                    ],
                    [
                        'question' => 'Pour illustrer l’idée « La lecture enrichit le vocabulaire », quelle phrase apporte un exemple pertinent ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple, la lecture est une activité très répandue chez les étudiants de première année.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, certains étudiants lisent très peu pendant les vacances d’été.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, les articles spécialisés coûtent souvent cher dans les librairies.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, un étudiant apprend de nouveaux termes en lisant des articles spécialisés.', 'is_correct' => true],
                        ],
                        'explanation' => 'Seul cet exemple montre une situation concrète où la lecture enrichit le vocabulaire.',
                    ],
                    [
                        'question' => 'Quelle expression peut introduire une conclusion courte ?',
                        'choices' => [
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                            ['choice_text' => 'En résumé', 'is_correct' => true],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'De plus', 'is_correct' => false],
                        ],
                        'explanation' => '« En résumé » rappelle brièvement l’essentiel à la fin d’une réponse.',
                    ],
                    [
                        'question' => 'Quel élément rend une réponse plus convaincante ?',
                        'choices' => [
                            ['choice_text' => 'Une longue citation recopiée telle quelle', 'is_correct' => false],
                            ['choice_text' => 'Des mots très compliqués, sans explication', 'is_correct' => false],
                            ['choice_text' => 'Une réponse très courte, sans exemple concret', 'is_correct' => false],
                            ['choice_text' => 'Une explication claire avec un exemple pertinent', 'is_correct' => true],
                        ],
                        'explanation' => 'Une idée expliquée puis illustrée convainc mieux qu’une citation brute ou des termes difficiles.',
                    ],
                    [
                        'question' => 'Quelle réponse est la plus académique à la question « Pourquoi faut-il organiser son travail ? »',
                        'choices' => [
                            ['choice_text' => 'C’est vraiment mieux comme ça pour les étudiants du groupe.', 'is_correct' => false],
                            ['choice_text' => 'L’organisation permet de mieux gérer le temps et les tâches.', 'is_correct' => true],
                            ['choice_text' => 'Sinon, tout devient compliqué et on finit par s’y perdre.', 'is_correct' => false],
                            ['choice_text' => 'Bah, il faut s’organiser, c’est tout ce qu’il y a à dire.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle donne des raisons précises dans un registre soutenu. Les autres reposent sur des formules vagues ou familières.',
                    ],
                    [
                        'question' => 'Quelle phrase relie correctement une idée à sa raison ?',
                        'choices' => [
                            ['choice_text' => 'Le travail en groupe est utile, mais chacun apporte ses idées.', 'is_correct' => false],
                            ['choice_text' => 'Le travail en groupe est utile, donc chacun apporte ses idées.', 'is_correct' => false],
                            ['choice_text' => 'Le travail en groupe est utile, car chacun apporte ses idées.', 'is_correct' => true],
                            ['choice_text' => 'Le travail en groupe est utile, enfin chacun apporte ses idées.', 'is_correct' => false],
                        ],
                        'explanation' => '« Car » introduit la raison. « Mais » et « enfin » créent un faux lien, et « donc » inverse la logique.',
                    ],
                    [
                        'question' => 'Quelle réponse montre une organisation logique ?',
                        'choices' => [
                            ['choice_text' => 'Tout d’abord, cette méthode fait gagner du temps. De plus, elle facilite le suivi des tâches.', 'is_correct' => true],
                            ['choice_text' => 'Tout d’abord, cette méthode fait gagner du temps. En conclusion, elle facilite le suivi des tâches.', 'is_correct' => false],
                            ['choice_text' => 'En conclusion, cette méthode fait gagner du temps. De plus, elle facilite le suivi des tâches.', 'is_correct' => false],
                            ['choice_text' => 'Cependant, cette méthode fait gagner du temps. Tout d’abord, elle facilite le suivi des tâches.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les connecteurs suivent l’ordre naturel : on ouvre, puis on ajoute un deuxième avantage.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir de dernière phrase dans une réponse courte ?',
                        'choices' => [
                            ['choice_text' => 'Tout d’abord, une bonne organisation peut faciliter le travail quotidien.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, une bonne organisation peut faciliter le travail quotidien.', 'is_correct' => false],
                            ['choice_text' => 'Cependant, une bonne organisation peut faciliter le travail quotidien.', 'is_correct' => false],
                            ['choice_text' => 'Ainsi, une bonne organisation peut faciliter le travail quotidien.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ainsi » introduit la conséquence qui clôt la réponse.',
                    ],
                    [
                        'question' => 'Quelle méthode est utile avant de rédiger une réponse académique ?',
                        'choices' => [
                            ['choice_text' => 'Identifier la question et noter ses idées principales', 'is_correct' => true],
                            ['choice_text' => 'Recopier le début du cours puis ajouter une seule phrase', 'is_correct' => false],
                            ['choice_text' => 'Écrire la conclusion avant même de lire le sujet', 'is_correct' => false],
                            ['choice_text' => 'Chercher les mots les plus longs à placer partout', 'is_correct' => false],
                        ],
                        'explanation' => 'Comprendre la question et ordonner ses idées donne une réponse plus claire.',
                    ],
                    [
                        'question' => 'Marc écrit « Il y a plein de choses à dire sur ce sujet. » Quel est le défaut de cette phrase ?',
                        'choices' => [
                            ['choice_text' => 'Elle est beaucoup trop longue pour une introduction', 'is_correct' => false],
                            ['choice_text' => 'Elle contient beaucoup trop de chiffres inutiles', 'is_correct' => false],
                            ['choice_text' => 'Elle reste vague : le lecteur n’apprend rien de précis', 'is_correct' => true],
                            ['choice_text' => 'Elle comporte plusieurs fautes de grammaire importantes', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase n’apporte aucune information exploitable. Un devoir demande des précisions que le lecteur peut évaluer.',
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
