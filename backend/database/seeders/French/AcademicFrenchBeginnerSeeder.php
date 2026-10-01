<?php

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
                            ['choice_text' => 'Examiner un sujet de manière détaillée', 'is_correct' => true],
                            ['choice_text' => 'Copier un texte sans le comprendre', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les informations importantes', 'is_correct' => false],
                            ['choice_text' => 'Changer complètement de sujet', 'is_correct' => false],
                        ],
                        'explanation' => 'Analyser consiste à examiner un sujet ou un texte en détail afin d’en comprendre les différents éléments.',
                    ],
                    [
                        'question' => 'Que signifie « définir un concept » ?',
                        'choices' => [
                            ['choice_text' => 'Expliquer clairement ce que signifie une idée ou une notion', 'is_correct' => true],
                            ['choice_text' => 'Donner uniquement un exemple', 'is_correct' => false],
                            ['choice_text' => 'Résumer un livre entier', 'is_correct' => false],
                            ['choice_text' => 'Exprimer une opinion sans explication', 'is_correct' => false],
                        ],
                        'explanation' => 'Définir un concept signifie donner une explication claire de son sens.',
                    ],
                    [
                        'question' => 'Quel mot convient dans une phrase académique : « Il est important de ___ les résultats avant de conclure. »',
                        'choices' => [
                            ['choice_text' => 'comparer', 'is_correct' => true],
                            ['choice_text' => 'saluer', 'is_correct' => false],
                            ['choice_text' => 'inviter', 'is_correct' => false],
                            ['choice_text' => 'dessiner', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un travail académique, on peut comparer des résultats avant de formuler une conclusion.',
                    ],
                    [
                        'question' => 'Quel mot désigne une idée importante développée dans un texte ?',
                        'choices' => [
                            ['choice_text' => 'Un argument', 'is_correct' => true],
                            ['choice_text' => 'Une signature', 'is_correct' => false],
                            ['choice_text' => 'Une salutation', 'is_correct' => false],
                            ['choice_text' => 'Une adresse', 'is_correct' => false],
                        ],
                        'explanation' => 'Un argument est une idée ou une raison utilisée pour soutenir une position ou expliquer un point.',
                    ],
                    [
                        'question' => 'Dans un texte académique, que signifie « résumer » ?',
                        'choices' => [
                            ['choice_text' => 'Présenter les idées essentielles de manière plus courte', 'is_correct' => true],
                            ['choice_text' => 'Ajouter plusieurs détails nouveaux', 'is_correct' => false],
                            ['choice_text' => 'Copier tout le texte mot à mot', 'is_correct' => false],
                            ['choice_text' => 'Changer le sujet du texte', 'is_correct' => false],
                        ],
                        'explanation' => 'Résumer consiste à garder l’essentiel d’un texte tout en le présentant sous une forme plus courte.',
                    ],
                    [
                        'question' => 'Que signifie « justifier une réponse » ?',
                        'choices' => [
                            ['choice_text' => 'Donner des raisons ou des éléments qui expliquent la réponse', 'is_correct' => true],
                            ['choice_text' => 'Donner uniquement la réponse', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute explication', 'is_correct' => false],
                            ['choice_text' => 'Changer la question', 'is_correct' => false],
                        ],
                        'explanation' => 'Justifier une réponse consiste à expliquer pourquoi elle est valable en donnant des raisons ou des preuves simples.',
                    ],
                    [
                        'question' => 'Quel verbe convient dans une consigne académique : « ___ les informations principales du texte. »',
                        'choices' => [
                            ['choice_text' => 'Identifiez', 'is_correct' => true],
                            ['choice_text' => 'Dormez', 'is_correct' => false],
                            ['choice_text' => 'Invitez', 'is_correct' => false],
                            ['choice_text' => 'Dessinez', 'is_correct' => false],
                        ],
                        'explanation' => '« Identifiez » demande de repérer et de reconnaître les informations importantes.',
                    ],
                    [
                        'question' => 'Que signifie « conclure » dans un travail académique ?',
                        'choices' => [
                            ['choice_text' => 'Terminer le raisonnement en faisant un bilan', 'is_correct' => true],
                            ['choice_text' => 'Commencer une nouvelle introduction', 'is_correct' => false],
                            ['choice_text' => 'Ajouter un sujet sans rapport', 'is_correct' => false],
                            ['choice_text' => 'Copier le premier paragraphe', 'is_correct' => false],
                        ],
                        'explanation' => 'Conclure signifie terminer le raisonnement et rappeler l’essentiel du travail.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour annoncer une explication ?',
                        'choices' => [
                            ['choice_text' => 'En effet', 'is_correct' => true],
                            ['choice_text' => 'À bientôt', 'is_correct' => false],
                            ['choice_text' => 'Salut', 'is_correct' => false],
                            ['choice_text' => 'Au revoir', 'is_correct' => false],
                        ],
                        'explanation' => '« En effet » permet souvent d’introduire une explication ou de confirmer une idée précédente.',
                    ],
                    [
                        'question' => 'Quel mot convient dans « Cette étude présente plusieurs ___ intéressants » ?',
                        'choices' => [
                            ['choice_text' => 'résultats', 'is_correct' => true],
                            ['choice_text' => 'salutations', 'is_correct' => false],
                            ['choice_text' => 'voyages', 'is_correct' => false],
                            ['choice_text' => 'menus', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un contexte académique, une étude peut présenter des résultats intéressants.',
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
                            ['choice_text' => 'Tout d’abord', 'is_correct' => true],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Ainsi', 'is_correct' => false],
                        ],
                        'explanation' => '« Tout d’abord » annonce généralement le premier point ou le premier argument.',
                    ],
                    [
                        'question' => 'Quel connecteur permet d’ajouter une information ?',
                        'choices' => [
                            ['choice_text' => 'De plus', 'is_correct' => true],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » sert à ajouter une idée ou une information à celle qui précède.',
                    ],
                    [
                        'question' => 'Quel connecteur exprime une opposition ?',
                        'choices' => [
                            ['choice_text' => 'Cependant', 'is_correct' => true],
                            ['choice_text' => 'De plus', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'En effet', 'is_correct' => false],
                        ],
                        'explanation' => '« Cependant » introduit une idée qui contraste avec l’idée précédente.',
                    ],
                    [
                        'question' => 'Complétez : « Les résultats sont intéressants. ___, ils doivent être interprétés avec prudence. »',
                        'choices' => [
                            ['choice_text' => 'Cependant', 'is_correct' => true],
                            ['choice_text' => 'De plus', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième phrase apporte une réserve ou une nuance, donc « cependant » convient.',
                    ],
                    [
                        'question' => 'Quel connecteur introduit une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Par conséquent', 'is_correct' => true],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                        ],
                        'explanation' => '« Par conséquent » introduit le résultat logique de ce qui vient d’être présenté.',
                    ],
                    [
                        'question' => 'Quel connecteur introduit un exemple ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple', 'is_correct' => true],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Ainsi', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                        ],
                        'explanation' => '« Par exemple » annonce une situation concrète qui illustre une idée générale.',
                    ],
                    [
                        'question' => 'Complétez : « Cette méthode permet de gagner du temps. ___, elle facilite aussi l’organisation du travail. »',
                        'choices' => [
                            ['choice_text' => 'De plus', 'is_correct' => true],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième phrase ajoute un avantage supplémentaire, donc « de plus » convient.',
                    ],
                    [
                        'question' => 'Quel connecteur peut introduire une conclusion ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion', 'is_correct' => true],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                        ],
                        'explanation' => '« En conclusion » indique que le texte entre dans sa dernière partie.',
                    ],
                    [
                        'question' => 'Quel connecteur peut reformuler une idée simplement ?',
                        'choices' => [
                            ['choice_text' => 'Autrement dit', 'is_correct' => true],
                            ['choice_text' => 'D’ailleurs', 'is_correct' => false],
                            ['choice_text' => 'Enfin', 'is_correct' => false],
                            ['choice_text' => 'Hier', 'is_correct' => false],
                        ],
                        'explanation' => '« Autrement dit » permet de reformuler une idée avec des mots différents et souvent plus simples.',
                    ],
                    [
                        'question' => 'Quel enchaînement est le plus logique dans un texte court ?',
                        'choices' => [
                            ['choice_text' => 'Tout d’abord → De plus → Cependant → En conclusion', 'is_correct' => true],
                            ['choice_text' => 'En conclusion → Tout d’abord → Hier → Salut', 'is_correct' => false],
                            ['choice_text' => 'Par exemple → Signature → Objet → Bonjour', 'is_correct' => false],
                            ['choice_text' => 'Cependant → Titre → Demain → Fin', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette organisation permet d’introduire une première idée, d’en ajouter une autre, de présenter une nuance puis de conclure.',
                    ],
                    [
                        'question' => 'Complétez : « Les étudiants ont beaucoup travaillé. ___, leurs résultats se sont améliorés. »',
                        'choices' => [
                            ['choice_text' => 'Par conséquent', 'is_correct' => true],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amélioration des résultats est présentée comme une conséquence du travail fourni.',
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
                            ['choice_text' => 'Exprimer la même idée avec des mots différents', 'is_correct' => true],
                            ['choice_text' => 'Changer complètement le sens d’un texte', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les informations', 'is_correct' => false],
                            ['choice_text' => 'Copier chaque phrase exactement', 'is_correct' => false],
                        ],
                        'explanation' => 'Reformuler consiste à conserver l’idée essentielle tout en utilisant une autre formulation.',
                    ],
                    [
                        'question' => 'Quelle proposition reformule correctement « Les étudiants doivent respecter les consignes » ?',
                        'choices' => [
                            ['choice_text' => 'Les consignes doivent être respectées par les étudiants.', 'is_correct' => true],
                            ['choice_text' => 'Les étudiants doivent oublier les consignes.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiants expliquent les vacances.', 'is_correct' => false],
                            ['choice_text' => 'Les consignes ne concernent personne.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase change la structure mais conserve le sens général de la phrase de départ.',
                    ],
                    [
                        'question' => 'Quelle phrase reformule « Cette méthode est efficace » ?',
                        'choices' => [
                            ['choice_text' => 'Cette méthode donne de bons résultats.', 'is_correct' => true],
                            ['choice_text' => 'Cette méthode est inutile.', 'is_correct' => false],
                            ['choice_text' => 'Cette méthode est interdite.', 'is_correct' => false],
                            ['choice_text' => 'Cette méthode est inconnue.', 'is_correct' => false],
                        ],
                        'explanation' => '« Donne de bons résultats » exprime une idée proche de « est efficace ».',
                    ],
                    [
                        'question' => 'Quelle phrase conserve le sens de « Il est nécessaire de vérifier les données » ?',
                        'choices' => [
                            ['choice_text' => 'Il faut vérifier les données.', 'is_correct' => true],
                            ['choice_text' => 'Il est impossible de vérifier les données.', 'is_correct' => false],
                            ['choice_text' => 'Les données doivent être supprimées.', 'is_correct' => false],
                            ['choice_text' => 'Personne ne regarde les données.', 'is_correct' => false],
                        ],
                        'explanation' => '« Il faut vérifier les données » conserve l’idée de nécessité.',
                    ],
                    [
                        'question' => 'Quelle reformulation correspond à « En raison de la pluie, le match est annulé » ?',
                        'choices' => [
                            ['choice_text' => 'Le match est annulé à cause de la pluie.', 'is_correct' => true],
                            ['choice_text' => 'Le match commence grâce à la pluie.', 'is_correct' => false],
                            ['choice_text' => 'La pluie arrive après le match.', 'is_correct' => false],
                            ['choice_text' => 'Le match est déplacé sans raison.', 'is_correct' => false],
                        ],
                        'explanation' => '« À cause de la pluie » garde le même lien de cause que « en raison de la pluie ».',
                    ],
                    [
                        'question' => 'Quelle phrase reformule « Les résultats montrent une amélioration » ?',
                        'choices' => [
                            ['choice_text' => 'Les résultats indiquent un progrès.', 'is_correct' => true],
                            ['choice_text' => 'Les résultats montrent une disparition.', 'is_correct' => false],
                            ['choice_text' => 'Les résultats sont sans rapport.', 'is_correct' => false],
                            ['choice_text' => 'Les résultats empêchent tout changement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Indiquent un progrès » exprime l’idée générale d’une amélioration.',
                    ],
                    [
                        'question' => 'Pourquoi la reformulation est-elle utile dans les études ?',
                        'choices' => [
                            ['choice_text' => 'Pour montrer qu’on a compris une idée et éviter les répétitions inutiles', 'is_correct' => true],
                            ['choice_text' => 'Pour changer le sujet sans prévenir', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sources', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre chaque phrase plus longue', 'is_correct' => false],
                        ],
                        'explanation' => 'Reformuler aide à montrer la compréhension et permet d’exprimer une même idée de manière plus personnelle.',
                    ],
                    [
                        'question' => 'Quelle phrase reformule correctement « La lecture favorise le développement du vocabulaire » ?',
                        'choices' => [
                            ['choice_text' => 'Lire régulièrement peut aider à enrichir son vocabulaire.', 'is_correct' => true],
                            ['choice_text' => 'La lecture empêche tout apprentissage.', 'is_correct' => false],
                            ['choice_text' => 'Le vocabulaire ne change jamais.', 'is_correct' => false],
                            ['choice_text' => 'Lire consiste uniquement à écrire.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase conserve l’idée que la lecture contribue à l’enrichissement du vocabulaire.',
                    ],
                    [
                        'question' => 'Quelle reformulation garde le sens de « Il est important de participer aux discussions » ?',
                        'choices' => [
                            ['choice_text' => 'La participation aux discussions est importante.', 'is_correct' => true],
                            ['choice_text' => 'Les discussions sont interdites.', 'is_correct' => false],
                            ['choice_text' => 'Participer est inutile.', 'is_correct' => false],
                            ['choice_text' => 'Personne ne participe aux discussions.', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure change, mais l’idée principale sur l’importance de la participation reste la même.',
                    ],
                    [
                        'question' => 'Quelle proposition ne constitue pas une bonne reformulation ?',
                        'choices' => [
                            ['choice_text' => 'Changer complètement le sens de l’idée originale', 'is_correct' => true],
                            ['choice_text' => 'Modifier la structure de la phrase', 'is_correct' => false],
                            ['choice_text' => 'Utiliser des synonymes appropriés', 'is_correct' => false],
                            ['choice_text' => 'Employer des mots différents', 'is_correct' => false],
                        ],
                        'explanation' => 'Une reformulation doit conserver le sens essentiel. Modifier complètement l’idée n’est donc pas une reformulation correcte.',
                    ],
                    [
                        'question' => 'Quelle expression peut introduire une reformulation ?',
                        'choices' => [
                            ['choice_text' => 'Autrement dit', 'is_correct' => true],
                            ['choice_text' => 'À bientôt', 'is_correct' => false],
                            ['choice_text' => 'Bon appétit', 'is_correct' => false],
                            ['choice_text' => 'Au revoir', 'is_correct' => false],
                        ],
                        'explanation' => '« Autrement dit » annonce qu’une idée va être exprimée d’une autre manière.',
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
                            ['choice_text' => 'Cette question est super intéressante.', 'is_correct' => false],
                            ['choice_text' => 'Cette question est trop cool.', 'is_correct' => false],
                            ['choice_text' => 'Cette question, franchement, elle déchire.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation est neutre, précise et adaptée à un contexte académique.',
                    ],
                    [
                        'question' => 'Quel mot est généralement plus formel que « truc » dans un texte académique ?',
                        'choices' => [
                            ['choice_text' => 'Élément', 'is_correct' => true],
                            ['choice_text' => 'Bidule', 'is_correct' => false],
                            ['choice_text' => 'Machin', 'is_correct' => false],
                            ['choice_text' => 'Pote', 'is_correct' => false],
                        ],
                        'explanation' => '« Élément » est un terme neutre et précis qui peut remplacer un mot très familier comme « truc ».',
                    ],
                    [
                        'question' => 'Quelle expression convient pour présenter son point de vue dans un devoir ?',
                        'choices' => [
                            ['choice_text' => 'Selon cette analyse', 'is_correct' => true],
                            ['choice_text' => 'Moi je dis que', 'is_correct' => false],
                            ['choice_text' => 'Je trouve ça trop bien', 'is_correct' => false],
                            ['choice_text' => 'Franchement, voilà', 'is_correct' => false],
                        ],
                        'explanation' => '« Selon cette analyse » introduit une idée de manière neutre et académique.',
                    ],
                    [
                        'question' => 'Quelle phrase convient dans une présentation académique ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons examiner les principaux résultats de cette étude.', 'is_correct' => true],
                            ['choice_text' => 'On va regarder ce truc maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Bon, on passe à autre chose.', 'is_correct' => false],
                            ['choice_text' => 'Voilà le machin dont on parle.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation est claire, structurée et adaptée à une présentation académique.',
                    ],
                    [
                        'question' => 'Quelle phrase évite un ton trop personnel dans un devoir ?',
                        'choices' => [
                            ['choice_text' => 'Les résultats semblent indiquer une tendance générale.', 'is_correct' => true],
                            ['choice_text' => 'Moi, je pense vraiment que ça marche.', 'is_correct' => false],
                            ['choice_text' => 'Je trouve ça génial.', 'is_correct' => false],
                            ['choice_text' => 'À mon avis, c’est super.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase adopte un ton plus neutre, souvent recherché dans les écrits académiques.',
                    ],
                    [
                        'question' => 'Quel mot est préférable dans un contexte académique : « montrer » ou « faire voir » ?',
                        'choices' => [
                            ['choice_text' => 'Montrer', 'is_correct' => true],
                            ['choice_text' => 'Faire voir', 'is_correct' => false],
                            ['choice_text' => 'Faire regarder', 'is_correct' => false],
                            ['choice_text' => 'Faire apparaître le truc', 'is_correct' => false],
                        ],
                        'explanation' => '« Montrer » est simple, neutre et parfaitement adapté au vocabulaire académique.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus précise ?',
                        'choices' => [
                            ['choice_text' => 'Cette étude présente trois résultats principaux.', 'is_correct' => true],
                            ['choice_text' => 'Cette étude dit plein de choses.', 'is_correct' => false],
                            ['choice_text' => 'Cette étude parle de trucs différents.', 'is_correct' => false],
                            ['choice_text' => 'Cette étude est intéressante, voilà.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation donne une information précise et évite les expressions vagues.',
                    ],
                    [
                        'question' => 'Quelle formule convient pour signaler une limite dans une étude ?',
                        'choices' => [
                            ['choice_text' => 'Il convient toutefois de souligner certaines limites.', 'is_correct' => true],
                            ['choice_text' => 'Mais bon, il y a des problèmes.', 'is_correct' => false],
                            ['choice_text' => 'Ça ne marche pas trop.', 'is_correct' => false],
                            ['choice_text' => 'Il y a quelques trucs qui gênent.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation est plus formelle et précise pour signaler une limite.',
                    ],
                    [
                        'question' => 'Quelle phrase convient dans un exposé étudiant ?',
                        'choices' => [
                            ['choice_text' => 'Dans cette présentation, nous allons examiner deux aspects du sujet.', 'is_correct' => true],
                            ['choice_text' => 'Aujourd’hui, on va parler de trucs.', 'is_correct' => false],
                            ['choice_text' => 'Bon, voilà ce que je veux raconter.', 'is_correct' => false],
                            ['choice_text' => 'Je vais vous parler de machin.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase annonce clairement le contenu de la présentation dans un registre adapté.',
                    ],
                    [
                        'question' => 'Quelle formulation est trop familière pour un devoir académique ?',
                        'choices' => [
                            ['choice_text' => 'Ce résultat est vraiment cool.', 'is_correct' => true],
                            ['choice_text' => 'Ce résultat est intéressant.', 'is_correct' => false],
                            ['choice_text' => 'Ce résultat mérite d’être examiné.', 'is_correct' => false],
                            ['choice_text' => 'Ce résultat présente un intérêt particulier.', 'is_correct' => false],
                        ],
                        'explanation' => '« Cool » appartient à un registre familier. Dans un devoir académique, une formulation plus neutre est préférable.',
                    ],
                    [
                        'question' => 'Quel mot convient mieux que « énorme » dans une description académique selon le contexte ?',
                        'choices' => [
                            ['choice_text' => 'Important', 'is_correct' => true],
                            ['choice_text' => 'Génial', 'is_correct' => false],
                            ['choice_text' => 'Super', 'is_correct' => false],
                            ['choice_text' => 'Cool', 'is_correct' => false],
                        ],
                        'explanation' => '« Important » est généralement plus neutre et plus précis dans un texte académique.',
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
                            ['choice_text' => 'Idée principale → explication → exemple ou preuve', 'is_correct' => true],
                            ['choice_text' => 'Exemple → signature → salutation', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → sujet différent → exemple', 'is_correct' => false],
                            ['choice_text' => 'Liste de mots → titre → répétition', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réponse académique claire présente d’abord l’idée, puis l’explique et peut la soutenir avec un exemple.',
                    ],
                    [
                        'question' => 'Quelle phrase peut introduire directement la réponse à une question ?',
                        'choices' => [
                            ['choice_text' => 'La lecture régulière présente plusieurs avantages pour les étudiants.', 'is_correct' => true],
                            ['choice_text' => 'Bon, alors voilà le truc.', 'is_correct' => false],
                            ['choice_text' => 'Je ne sais pas trop, mais peut-être.', 'is_correct' => false],
                            ['choice_text' => 'On va voir ça maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase répond directement au sujet et annonce une idée exploitable.',
                    ],
                    [
                        'question' => 'Quelle phrase développe correctement l’idée « La lecture enrichit le vocabulaire » ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet notamment de rencontrer des mots nouveaux dans différents contextes.', 'is_correct' => true],
                            ['choice_text' => 'C’est bien parce que voilà.', 'is_correct' => false],
                            ['choice_text' => 'Les livres sont des livres.', 'is_correct' => false],
                            ['choice_text' => 'Lire, c’est lire.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase explique concrètement comment la lecture peut enrichir le vocabulaire.',
                    ],
                    [
                        'question' => 'Quelle phrase apporte un exemple pertinent ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple, un étudiant peut apprendre de nouveaux termes en lisant régulièrement des articles spécialisés.', 'is_correct' => true],
                            ['choice_text' => 'Par exemple, les articles sont là.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, c’est cool.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, je parle de demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exemple montre concrètement comment la lecture d’articles peut enrichir le vocabulaire.',
                    ],
                    [
                        'question' => 'Quelle expression peut introduire une conclusion courte ?',
                        'choices' => [
                            ['choice_text' => 'En résumé', 'is_correct' => true],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'De plus', 'is_correct' => false],
                        ],
                        'explanation' => '« En résumé » permet de rappeler brièvement l’essentiel à la fin d’une réponse.',
                    ],
                    [
                        'question' => 'Quel élément rend une réponse plus convaincante ?',
                        'choices' => [
                            ['choice_text' => 'Une explication claire accompagnée d’un exemple pertinent', 'is_correct' => true],
                            ['choice_text' => 'Une répétition de la même phrase', 'is_correct' => false],
                            ['choice_text' => 'Des mots très compliqués sans explication', 'is_correct' => false],
                            ['choice_text' => 'Un changement de sujet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réponse gagne en clarté lorsqu’une idée est expliquée et soutenue par un exemple pertinent.',
                    ],
                    [
                        'question' => 'Quelle réponse est la plus académique à la question « Pourquoi faut-il organiser son travail ? »',
                        'choices' => [
                            ['choice_text' => 'L’organisation permet de mieux gérer le temps et de suivre les différentes tâches.', 'is_correct' => true],
                            ['choice_text' => 'Parce que c’est mieux comme ça.', 'is_correct' => false],
                            ['choice_text' => 'Parce que sinon, c’est compliqué.', 'is_correct' => false],
                            ['choice_text' => 'Bah, il faut s’organiser.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première réponse donne une raison claire et précise, adaptée à un contexte académique.',
                    ],
                    [
                        'question' => 'Quel connecteur peut relier une idée à son explication ?',
                        'choices' => [
                            ['choice_text' => 'En effet', 'is_correct' => true],
                            ['choice_text' => 'À bientôt', 'is_correct' => false],
                            ['choice_text' => 'Salut', 'is_correct' => false],
                            ['choice_text' => 'Au revoir', 'is_correct' => false],
                        ],
                        'explanation' => '« En effet » permet d’introduire une explication ou de développer l’idée précédente.',
                    ],
                    [
                        'question' => 'Quelle réponse montre une organisation logique ?',
                        'choices' => [
                            ['choice_text' => 'Tout d’abord, cette méthode fait gagner du temps. De plus, elle facilite le suivi des tâches.', 'is_correct' => true],
                            ['choice_text' => 'Cette méthode est bien. Hier, les tâches sont bleues.', 'is_correct' => false],
                            ['choice_text' => 'La méthode, les tâches, enfin peut-être.', 'is_correct' => false],
                            ['choice_text' => 'De plus, tout d’abord, conclusion, bon.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse présente une première idée puis ajoute logiquement un deuxième avantage.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir de dernière phrase dans une réponse courte ?',
                        'choices' => [
                            ['choice_text' => 'Ainsi, une bonne organisation peut faciliter le travail quotidien.', 'is_correct' => true],
                            ['choice_text' => 'Tout d’abord, nous allons commencer.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, voici une nouvelle idée.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour à tous, merci.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ainsi » peut introduire une conclusion ou une conséquence qui termine la réponse.',
                    ],
                    [
                        'question' => 'Quelle méthode est utile avant de rédiger une réponse académique ?',
                        'choices' => [
                            ['choice_text' => 'Identifier la question, noter les idées principales et les organiser', 'is_correct' => true],
                            ['choice_text' => 'Commencer à écrire sans lire le sujet', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement les mots les plus longs', 'is_correct' => false],
                            ['choice_text' => 'Écrire la conclusion avant de comprendre la question', 'is_correct' => false],
                        ],
                        'explanation' => 'Comprendre la question et organiser les idées avant de rédiger aide à produire une réponse plus claire et cohérente.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter les phrases trop vagues dans un devoir ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles ne donnent pas assez d’informations précises au lecteur', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours trop longues', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles contiennent toujours des chiffres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont obligatoirement incorrectes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase vague rend l’idée difficile à comprendre ou à évaluer, surtout dans un travail académique.',
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
